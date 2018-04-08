<?php

namespace Doctrine\Tests\ORM\Functional\Ticket;

use Doctrine\ORM\Mapping\ClassMetadata;

/**
 * @group DDC-3103
 */
class DDC3103Test extends \Doctrine\Tests\OrmFunctionalTestCase
{
    /**
     * @covers \Doctrine\ORM\Mapping\ClassMetadataInfo::__sleep
     */
    public function testIssue()
    {
        $className     = __NAMESPACE__ . '\\DDC3103ArticleId';
        $classMetadata = new ClassMetadata($className);

        $this->createAnnotationDriver()->loadMetadataForClass($className, $classMetadata);

        $this->assertTrue(
            $classMetadata->isEmbeddedClass,
            'The isEmbeddedClass property should be true from the mapping data.'
        );

        $this->assertTrue(
            unserialize(serialize($classMetadata))->isEmbeddedClass,
            'The isEmbeddedClass property should still be true after serialization and unserialization.'
        );
    }
}

/**
 * @Embeddable
 */
class DDC3103ArticleId
{
    /**
     * @var string
     * @Column(name="name", type="string", length=255)
     */
    protected $nameValue;
}
