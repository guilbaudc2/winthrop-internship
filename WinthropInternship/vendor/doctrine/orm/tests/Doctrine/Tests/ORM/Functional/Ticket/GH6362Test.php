<?php

namespace Doctrine\Tests\ORM\Functional\Ticket;

use Doctrine\Tests\OrmFunctionalTestCase;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Tests\Mocks\HydratorMockStatement;

final class GH6362Test extends OrmFunctionalTestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->_schemaTool->createSchema(
            [
                $this->_em->getClassMetadata(GH6362Start::CLASSNAME),
                $this->_em->getClassMetadata(GH6362Base::CLASSNAME),
                $this->_em->getClassMetadata(GH6362Child::CLASSNAME),
                $this->_em->getClassMetadata(GH6362Join::CLASSNAME),
            ]
        );
    }

    /**
     * @group 6362
     *
     * SELECT a as base, b, c, d
     * FROM Start a
     * LEFT JOIN a.bases b
     * LEFT JOIN Child c WITH b.id = c.id
     * LEFT JOIN c.joins d
     */
    public function testInheritanceJoinAlias()
    {
        $rsm = new ResultSetMapping;
        $rsm->addEntityResult(GH6362Start::CLASSNAME, 'a', 'base');
        $rsm->addJoinedEntityResult(GH6362Base::CLASSNAME, 'b', 'a', 'bases');
        $rsm->addEntityResult(GH6362Child::CLASSNAME, 'c');
        $rsm->addJoinedEntityResult(GH6362Join::CLASSNAME, 'd', 'c', 'joins');

        $rsm->addFieldResult('a', 'id_0', 'id');
        $rsm->addFieldResult('b', 'id_1', 'id');
        $rsm->addFieldResult('c', 'id_2', 'id');
        $rsm->addFieldResult('d', 'id_3', 'id');

        $rsm->addMetaResult('a', 'bases_id_4', 'bases_id', false, 'integer');
        $rsm->addMetaResult('b', 'type_5', 'type');
        $rsm->addMetaResult('c', 'type_6', 'type');
        $rsm->addMetaResult('d', 'child_id_7', 'child_id', false, 'integer');

        $rsm->setDiscriminatorColumn('b', 'type_5');
        $rsm->setDiscriminatorColumn('c', 'type_6');

        $resultSet = [
            [
                'id_0' => '1',
                'id_1' => '1',
                'id_2' => '1',
                'id_3' => '1',
                'bases_id_4' => '1',
                'type_5' => 'child',
                'type_6' => 'child',
                'child_id_7' => '1',
            ],
        ];

        $stmt     = new HydratorMockStatement($resultSet);
        $hydrator = new \Doctrine\ORM\Internal\Hydration\ObjectHydrator($this->_em);
        $result   = $hydrator->hydrateAll($stmt, $rsm, [Query::HINT_FORCE_PARTIAL_LOAD => true]);

        $this->assertInstanceOf(GH6362Start::CLASSNAME, $result[0]['base']);
        $this->assertInstanceOf(GH6362Child::CLASSNAME, $result[1][0]);
    }
}

/**
 * @Entity
 */
class GH6362Start
{
    const CLASSNAME = __CLASS__;

    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="GH6362Base", inversedBy="starts")
     */
    private $bases;
}

/**
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({"child" = "GH6362Child"})
 * @Entity
 */
abstract class GH6362Base
{
    const CLASSNAME = __CLASS__;

    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue
     */
    protected $id;

    /**
     * @OneToMany(targetEntity="GH6362Start", mappedBy="bases")
     */
    private $starts;
}

/**
 * @Entity
 */
class GH6362Child extends GH6362Base
{
    const CLASSNAME = __CLASS__;

    /**
     * @OneToMany(targetEntity="GH6362Join", mappedBy="child")
     */
    private $joins;
}

/**
 * @Entity
 */
class GH6362Join
{
    const CLASSNAME = __CLASS__;

    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="GH6362Child", inversedBy="joins")
     */
    private $child;
}
