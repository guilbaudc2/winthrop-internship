<?php

namespace Doctrine\Tests\ORM\Functional\Ticket;

use Doctrine\Tests\OrmFunctionalTestCase;

/**
 * @group 6699
 */
final class GH6699Test extends OrmFunctionalTestCase
{
    protected function setUp()
    {
        $this->useModelSet('cms');

        parent::setUp();
    }

    public function testMixedParametersWithZeroNumber()
    {
        $query = $this->_em->createQueryBuilder()
                           ->select('u')
                           ->from('Doctrine\Tests\Models\CMS\CmsUser', 'u')
                           ->andWhere('u.username = :username')
                           ->andWhere('u.id = ?0')
                           ->getQuery();

        $query->setParameter('username', 'bar');
        $query->setParameter(0, 0);

        $query->execute();

        self::assertCount(2, $query->getParameters());
        self::assertSame(0, $query->getParameter(0)->getValue());
        self::assertSame('bar', $query->getParameter('username')->getValue());
    }

    public function testMixedParametersWithZeroNumberOnQueryBuilder()
    {
        $query = $this->_em->createQueryBuilder()
                           ->select('u')
                           ->from('Doctrine\Tests\Models\CMS\CmsUser', 'u')
                           ->andWhere('u.username = :username')
                           ->andWhere('u.id = ?0')
                           ->setParameter('username', 'bar')
                           ->setParameter(0, 0)
                           ->getQuery();

        $query->execute();

        self::assertCount(2, $query->getParameters());
        self::assertSame(0, $query->getParameter(0)->getValue());
        self::assertSame('bar', $query->getParameter('username')->getValue());
    }
}
