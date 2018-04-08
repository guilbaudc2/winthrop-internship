<?php

namespace Doctrine\Tests\ORM\Mapping;

use Doctrine\Common\Persistence\Mapping\RuntimeReflectionService;
use Doctrine\ORM\Mapping\ClassMetadataFactory;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Doctrine\Tests\Models\DDC869\DDC869Payment;

class BasicInheritanceMappingTest extends \Doctrine\Tests\OrmTestCase
{
    /**
     * @var ClassMetadataFactory
     */
    private $cmf;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        $this->cmf = new ClassMetadataFactory();

        $this->cmf->setEntityManager($this->_getTestEntityManager());
    }

    public function testGetMetadataForTransientClassThrowsException()
    {
        $this->setExpectedException('Doctrine\ORM\Mapping\MappingException');

        $this->cmf->getMetadataFor('Doctrine\Tests\ORM\Mapping\TransientBaseClass');
    }

    public function testGetMetadataForSubclassWithTransientBaseClass()
    {
        $class = $this->cmf->getMetadataFor('Doctrine\Tests\ORM\Mapping\EntitySubClass');

        $this->assertEmpty($class->subClasses);
        $this->assertEmpty($class->parentClasses);
        $this->assertArrayHasKey('id', $class->fieldMappings);
        $this->assertArrayHasKey('name', $class->fieldMappings);
    }

    public function testGetMetadataForSubclassWithMappedSuperclass()
    {
        $class = $this->cmf->getMetadataFor('Doctrine\Tests\ORM\Mapping\EntitySubClass2');

        $this->assertEmpty($class->subClasses);
        $this->assertEmpty($class->parentClasses);

        $this->assertArrayHasKey('mapped1', $class->fieldMappings);
        $this->assertArrayHasKey('mapped2', $class->fieldMappings);
        $this->assertArrayHasKey('id', $class->fieldMappings);
        $this->assertArrayHasKey('name', $class->fieldMappings);

        $this->assertArrayNotHasKey('inherited', $class->fieldMappings['mapped1']);
        $this->assertArrayNotHasKey('inherited', $class->fieldMappings['mapped2']);
        $this->assertArrayNotHasKey('transient', $class->fieldMappings);

        $this->assertArrayHasKey('mappedRelated1', $class->associationMappings);
    }

    /**
     * @group DDC-869
     */
    public function testGetMetadataForSubclassWithMappedSuperclassWithRepository()
    {
        $class = $this->cmf->getMetadataFor('Doctrine\Tests\Models\DDC869\DDC869CreditCardPayment');

        $this->assertArrayHasKey('id', $class->fieldMappings);
        $this->assertArrayHasKey('value', $class->fieldMappings);
        $this->assertArrayHasKey('creditCardNumber', $class->fieldMappings);
        $this->assertEquals($class->customRepositoryClassName, 'Doctrine\Tests\Models\DDC869\DDC869PaymentRepository');


        $class = $this->cmf->getMetadataFor('Doctrine\Tests\Models\DDC869\DDC869ChequePayment');

        $this->assertArrayHasKey('id', $class->fieldMappings);
        $this->assertArrayHasKey('value', $class->fieldMappings);
        $this->assertArrayHasKey('serialNumber', $class->fieldMappings);
        $this->assertEquals($class->customRepositoryClassName, 'Doctrine\Tests\Models\DDC869\DDC869PaymentRepository');


        // override repositoryClass
        $class = $this->cmf->getMetadataFor('Doctrine\Tests\ORM\Mapping\SubclassWithRepository');

        $this->assertArrayHasKey('id', $class->fieldMappings);
        $this->assertArrayHasKey('value', $class->fieldMappings);
        $this->assertEquals($class->customRepositoryClassName, 'Doctrine\ORM\EntityRepository');
    }

    /**
     * @group DDC-388
     */
    public function testSerializationWithPrivateFieldsFromMappedSuperclass()
    {

        $class = $this->cmf->getMetadataFor(__NAMESPACE__ . '\\EntitySubClass2');

        $class2 = unserialize(serialize($class));
        $class2->wakeupReflection(new RuntimeReflectionService);

        $this->assertArrayHasKey('mapped1', $class2->reflFields);
        $this->assertArrayHasKey('mapped2', $class2->reflFields);
        $this->assertArrayHasKey('mappedRelated1', $class2->reflFields);
    }

    /**
     * @group DDC-1203
     */
    public function testUnmappedSuperclassInHierarchy()
    {
        $class = $this->cmf->getMetadataFor(__NAMESPACE__ . '\\HierarchyD');

        $this->assertArrayHasKey('id', $class->fieldMappings);
        $this->assertArrayHasKey('a', $class->fieldMappings);
        $this->assertArrayHasKey('d', $class->fieldMappings);
    }

    /**
     * @group DDC-1204
     */
    public function testUnmappedEntityInHierarchy()
    {
        $this->setExpectedException(
            'Doctrine\ORM\Mapping\MappingException',
            'Entity \'Doctrine\Tests\ORM\Mapping\HierarchyBEntity\' has to be part of the discriminator map'
            . ' of \'Doctrine\Tests\ORM\Mapping\HierarchyBase\' to be properly mapped in the inheritance hierarchy.'
            . ' Alternatively you can make \'Doctrine\Tests\ORM\Mapping\HierarchyBEntity\' an abstract class to'
            . ' avoid this exception from occurring.');

        $this->cmf->getMetadataFor(__NAMESPACE__ . '\\HierarchyE');
    }

    /**
     * @group DDC-1204
     * @group DDC-1203
     */
    public function testMappedSuperclassWithId()
    {
        $class = $this->cmf->getMetadataFor(__NAMESPACE__ . '\\SuperclassEntity');

        $this->assertArrayHasKey('id', $class->fieldMappings);
    }

    /**
     * @group DDC-1156
     * @group DDC-1218
     */
    public function testGeneratedValueFromMappedSuperclass()
    {
        $class = $this->cmf->getMetadataFor(__NAMESPACE__ . '\\SuperclassEntity');
        /* @var $class ClassMetadataInfo */

        $this->assertInstanceOf('Doctrine\ORM\Id\SequenceGenerator', $class->idGenerator);
        $this->assertEquals(
            array('allocationSize' => 1, 'initialValue' => 10, 'sequenceName' => 'foo'),
            $class->sequenceGeneratorDefinition
        );
    }

    /**
     * @group DDC-1156
     * @group DDC-1218
     */
    public function testSequenceDefinitionInHierarchyWithSandwichMappedSuperclass()
    {
        $class = $this->cmf->getMetadataFor(__NAMESPACE__ . '\\HierarchyD');
        /* @var $class ClassMetadataInfo */

        $this->assertInstanceOf('Doctrine\ORM\Id\SequenceGenerator', $class->idGenerator);
        $this->assertEquals(
            array('allocationSize' => 1, 'initialValue' => 10, 'sequenceName' => 'foo'),
            $class->sequenceGeneratorDefinition
        );
    }

    /**
     * @group DDC-1156
     * @group DDC-1218
     */
    public function testMultipleMappedSuperclasses()
    {
        $class = $this->cmf->getMetadataFor(__NAMESPACE__ . '\\MediumSuperclassEntity');
        /* @var $class ClassMetadataInfo */

        $this->assertInstanceOf('Doctrine\ORM\Id\SequenceGenerator', $class->idGenerator);
        $this->assertEquals(
            array('allocationSize' => 1, 'initialValue' => 10, 'sequenceName' => 'foo'),
            $class->sequenceGeneratorDefinition
        );
    }

    /**
     * Ensure indexes are inherited from the mapped superclass.
     *
     * @group DDC-3418
     */
    public function testMappedSuperclassIndex()
    {
        $class = $this->cmf->getMetadataFor(__NAMESPACE__ . '\\EntityIndexSubClass');
        /* @var $class ClassMetadataInfo */

        $this->assertArrayHasKey('mapped1', $class->fieldMappings);
        $this->assertArrayHasKey('IDX_NAME_INDEX', $class->table['uniqueConstraints']);
        $this->assertArrayHasKey('IDX_MAPPED1_INDEX', $class->table['uniqueConstraints']);
        $this->assertArrayHasKey('IDX_MAPPED2_INDEX', $class->table['indexes']);
    }
}

class TransientBaseClass {
    private $transient1;
    private $transient2;
}

/** @Entity */
class EntitySubClass extends TransientBaseClass
{
    /** @Id @Column(type="integer") */
    private $id;
    /** @Column(type="string") */
    private $name;
}

/** @MappedSuperclass */
class MappedSuperclassBase {
    /** @Column(type="integer") */
    private $mapped1;
    /** @Column(type="string") */
    private $mapped2;
    /**
     * @OneToOne(targetEntity="MappedSuperclassRelated1")
     * @JoinColumn(name="related1_id", referencedColumnName="id")
     */
    private $mappedRelated1;
    private $transient;
}
class MappedSuperclassRelated1 {}

/** @Entity */
class EntitySubClass2 extends MappedSuperclassBase {
    /** @Id @Column(type="integer") */
    private $id;
    /** @Column(type="string") */
    private $name;
}

/**
 * @MappedSuperclass
 * @Table(
 *  uniqueConstraints={@UniqueConstraint(name="IDX_MAPPED1_INDEX",columns={"mapped1"})},
 *  indexes={@Index(name="IDX_MAPPED2_INDEX", columns={"mapped2"})}
 * )
 */
class MappedSuperclassBaseIndex {
    /** @Column(type="string") */
    private $mapped1;
    /** @Column(type="string") */
    private $mapped2;
}

/** @Entity @Table(uniqueConstraints={@UniqueConstraint(name="IDX_NAME_INDEX",columns={"name"})}) */
class EntityIndexSubClass extends MappedSuperclassBaseIndex
{
    /** @Id @Column(type="integer") */
    private $id;
    /** @Column(type="string") */
    private $name;
}

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type", type="string", length=20)
 * @DiscriminatorMap({
 *     "c"   = "HierarchyC",
 *     "d"   = "HierarchyD",
 *     "e"   = "HierarchyE"
 * })
 */
abstract class HierarchyBase
{
    /**
     * @Column(type="integer") @Id @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="foo", initialValue=10)
     * @var int
     */
    public $id;
}

/** @MappedSuperclass */
abstract class HierarchyASuperclass extends HierarchyBase
{
    /** @Column(type="string") */
    public $a;
}

/** @Entity */
class HierarchyBEntity extends HierarchyBase
{
    /** @Column(type="string") */
    public $b;
}

/** @Entity */
class HierarchyC extends HierarchyBase
{
    /** @Column(type="string") */
    public $c;
}

/** @Entity */
class HierarchyD extends HierarchyASuperclass
{
    /** @Column(type="string") */
    public $d;
}

/** @Entity */
class HierarchyE extends HierarchyBEntity
{
    /** @Column(type="string") */
    public $e;
}

/** @Entity */
class SuperclassEntity extends SuperclassBase
{
}

/** @MappedSuperclass */
abstract class SuperclassBase
{
    /**
     * @Column(type="integer") @Id @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="foo", initialValue=10)
     */
    public $id;
}

/** @MappedSuperclass */
abstract class MediumSuperclassBase extends SuperclassBase
{
}

/** @Entity */
class MediumSuperclassEntity extends MediumSuperclassBase
{
}

/** @Entity(repositoryClass = "Doctrine\ORM\EntityRepository") */
class SubclassWithRepository extends DDC869Payment
{
}
