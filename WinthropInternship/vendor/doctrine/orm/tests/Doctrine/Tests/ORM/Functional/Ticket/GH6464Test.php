<?php

namespace Doctrine\Tests\ORM\Functional\Ticket;

use Doctrine\Tests\OrmFunctionalTestCase;

/**
 * @group GH-6464
 */
class GH6464Test extends OrmFunctionalTestCase
{
    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->_schemaTool->createSchema([
            $this->_em->getClassMetadata(GH6464Post::CLASS_NAME),
            $this->_em->getClassMetadata(GH6464User::CLASS_NAME),
            $this->_em->getClassMetadata(GH6464Author::CLASS_NAME),
        ]);
    }

    /**
     * Verifies that SqlWalker generates valid SQL for an INNER JOIN to CTI table
     *
     * SqlWalker needs to generate nested INNER JOIN statements, otherwise there would be INNER JOIN
     * statements without an ON clause, which are valid on e.g. MySQL but rejected by PostgreSQL.
     */
    public function testIssue()
    {
        $query = $this->_em->createQueryBuilder()
            ->select('p')
            ->from(GH6464Post::CLASS_NAME, 'p')
            ->innerJoin(GH6464Author::CLASS_NAME, 'a', 'WITH', 'p.authorId = a.id')
            ->getQuery();

        $this->assertNotRegExp(
            '/INNER JOIN \w+ \w+ INNER JOIN/',
            $query->getSQL(),
            'As of GH-6464, every INNER JOIN should have an ON clause, which is missing here'
        );

        // Query shouldn't yield a result, yet it shouldn't crash (anymore)
        $this->assertEquals([], $query->getResult());
    }
}

/** @Entity */
class GH6464Post
{
    const CLASS_NAME = __CLASS__;

    /** @Id @Column(type="integer") @GeneratedValue */
    public $id;

    /** @Column(type="integer") */
    public $authorId;
}

/**
 * @Entity
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"author" = "GH6464Author"})
 */
abstract class GH6464User
{
    const CLASS_NAME = __CLASS__;

    /** @Id @Column(type="integer") @GeneratedValue */
    public $id;
}

/** @Entity */
class GH6464Author extends GH6464User
{
    const CLASS_NAME = __CLASS__;
}
