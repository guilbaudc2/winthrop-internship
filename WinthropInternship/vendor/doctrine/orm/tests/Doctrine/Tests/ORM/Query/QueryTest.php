<?php

namespace Doctrine\Tests\ORM\Query;

use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\DBAL\Cache\QueryCacheProfile;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Parameter;

class QueryTest extends \Doctrine\Tests\OrmTestCase
{
    /** @var EntityManager */
    protected $_em = null;

    protected function setUp()
    {
        $this->_em = $this->_getTestEntityManager();
    }

    public function testGetParameters()
    {
        $query = $this->_em->createQuery("select u from Doctrine\Tests\Models\CMS\CmsUser u where u.username = ?1");

        $parameters = new ArrayCollection();

        $this->assertEquals($parameters, $query->getParameters());
    }

    public function testGetParameters_HasSomeAlready()
    {
        $query = $this->_em->createQuery("select u from Doctrine\Tests\Models\CMS\CmsUser u where u.username = ?1");
        $query->setParameter(2, 84);

        $parameters = new ArrayCollection();
        $parameters->add(new Parameter(2, 84));

        $this->assertEquals($parameters, $query->getParameters());
    }

    public function testSetParameters()
    {
        $query = $this->_em->createQuery("select u from Doctrine\Tests\Models\CMS\CmsUser u where u.username = ?1");

        $parameters = new ArrayCollection();
        $parameters->add(new Parameter(1, 'foo'));
        $parameters->add(new Parameter(2, 'bar'));

        $query->setParameters($parameters);

        $this->assertEquals($parameters, $query->getParameters());
    }

    public function testFree()
    {
        $query = $this->_em->createQuery("select u from Doctrine\Tests\Models\CMS\CmsUser u where u.username = ?1");
        $query->setParameter(2, 84, \PDO::PARAM_INT);

        $query->free();

        $this->assertEquals(0, count($query->getParameters()));
    }

    public function testClone()
    {
        $dql = "select u from Doctrine\Tests\Models\CMS\CmsUser u where u.username = ?1";

        $query = $this->_em->createQuery($dql);
        $query->setParameter(2, 84, \PDO::PARAM_INT);
        $query->setHint('foo', 'bar');

        $cloned = clone $query;

        $this->assertEquals($dql, $cloned->getDql());
        $this->assertEquals(0, count($cloned->getParameters()));
        $this->assertFalse($cloned->getHint('foo'));
    }

    public function testFluentQueryInterface()
    {
        $q = $this->_em->createQuery("select a from Doctrine\Tests\Models\CMS\CmsArticle a");
        $q2 = $q->expireQueryCache(true)
          ->setQueryCacheLifetime(3600)
          ->setQueryCacheDriver(null)
          ->expireResultCache(true)
          ->setHint('foo', 'bar')
          ->setHint('bar', 'baz')
          ->setParameter(1, 'bar')
          ->setParameters(new ArrayCollection(array(new Parameter(2, 'baz'))))
          ->setResultCacheDriver(null)
          ->setResultCacheId('foo')
          ->setDql('foo')
          ->setFirstResult(10)
          ->setMaxResults(10);

        $this->assertSame($q2, $q);
    }

    /**
     * @group DDC-968
     */
    public function testHints()
    {
        $q = $this->_em->createQuery("select a from Doctrine\Tests\Models\CMS\CmsArticle a");
        $q->setHint('foo', 'bar')->setHint('bar', 'baz');

        $this->assertEquals('bar', $q->getHint('foo'));
        $this->assertEquals('baz', $q->getHint('bar'));
        $this->assertEquals(array('foo' => 'bar', 'bar' => 'baz'), $q->getHints());
        $this->assertTrue($q->hasHint('foo'));
        $this->assertFalse($q->hasHint('barFooBaz'));
    }

    /**
     * @group DDC-1588
     */
    public function testQueryDefaultResultCache()
    {
        $this->_em->getConfiguration()->setResultCacheImpl(new ArrayCache());
        $q = $this->_em->createQuery("select a from Doctrine\Tests\Models\CMS\CmsArticle a");
        $q->useResultCache(true);
        $this->assertSame($this->_em->getConfiguration()->getResultCacheImpl(), $q->getQueryCacheProfile()->getResultCacheDriver());
    }

    /**
     * @expectedException Doctrine\ORM\Query\QueryException
     **/
    public function testIterateWithNoDistinctAndWrongSelectClause()
    {
        $q = $this->_em->createQuery("select u, a from Doctrine\Tests\Models\CMS\CmsUser u LEFT JOIN u.articles a");
        $q->iterate();
    }

    /**
     * @expectedException Doctrine\ORM\Query\QueryException
     **/
    public function testIterateWithNoDistinctAndWithValidSelectClause()
    {
        $q = $this->_em->createQuery("select u from Doctrine\Tests\Models\CMS\CmsUser u LEFT JOIN u.articles a");
        $q->iterate();
    }

    public function testIterateWithDistinct()
    {
        $q = $this->_em->createQuery("SELECT DISTINCT u from Doctrine\Tests\Models\CMS\CmsUser u LEFT JOIN u.articles a");
        $q->iterate();
    }

    /**
     * @group DDC-1697
     */
    public function testCollectionParameters()
    {
        $cities = array(
            0 => "Paris",
            3 => "Canne",
            9 => "St Julien"
        );

        $query  = $this->_em
                ->createQuery("SELECT a FROM Doctrine\Tests\Models\CMS\CmsAddress a WHERE a.city IN (:cities)")
                ->setParameter('cities', $cities);

        $parameters = $query->getParameters();
        $parameter  = $parameters->first();

        $this->assertEquals('cities', $parameter->getName());
        $this->assertEquals($cities, $parameter->getValue());
    }

    /**
     * @group DDC-2224
     */
    public function testProcessParameterValueClassMetadata()
    {
        $query  = $this->_em->createQuery("SELECT a FROM Doctrine\Tests\Models\CMS\CmsAddress a WHERE a.city IN (:cities)");
        $this->assertEquals(
            'Doctrine\Tests\Models\CMS\CmsAddress',
            $query->processParameterValue($this->_em->getClassMetadata('Doctrine\Tests\Models\CMS\CmsAddress'))
        );
    }

    public function testDefaultQueryHints()
    {
        $config = $this->_em->getConfiguration();
        $defaultHints = array(
            'hint_name_1' => 'hint_value_1',
            'hint_name_2' => 'hint_value_2',
            'hint_name_3' => 'hint_value_3',
        );

        $config->setDefaultQueryHints($defaultHints);
        $query = $this->_em->createQuery();
        $this->assertSame($config->getDefaultQueryHints(), $query->getHints());
        $this->_em->getConfiguration()->setDefaultQueryHint('hint_name_1', 'hint_another_value_1');
        $this->assertNotSame($config->getDefaultQueryHints(), $query->getHints());
        $q2 = clone $query;
        $this->assertSame($config->getDefaultQueryHints(), $q2->getHints());
    }

    /**
     * @group 6699
     */
    public function testGetParameterTypeJuggling()
    {
        $query = $this->_em->createQuery('select u from Doctrine\Tests\Models\CMS\CmsUser u where u.id = ?0');

        $query->setParameter(0, 0);

        self::assertCount(1, $query->getParameters());
        self::assertSame(0, $query->getParameter(0)->getValue());
        self::assertSame(0, $query->getParameter('0')->getValue());
    }

    /**
     * @group 6699
     */
    public function testSetParameterWithNameZeroIsNotOverridden()
    {
        $query = $this->_em->createQuery('select u from Doctrine\Tests\Models\CMS\CmsUser u where u.id != ?0 and u.username = :name');

        $query->setParameter(0, 0);
        $query->setParameter('name', 'Doctrine');

        self::assertCount(2, $query->getParameters());
        self::assertSame(0, $query->getParameter('0')->getValue());
        self::assertSame('Doctrine', $query->getParameter('name')->getValue());
    }

    /**
     * @group 6699
     */
    public function testSetParameterWithNameZeroDoesNotOverrideAnotherParameter()
    {
        $query = $this->_em->createQuery('select u from Doctrine\Tests\Models\CMS\CmsUser u where u.id != ?0 and u.username = :name');

        $query->setParameter('name', 'Doctrine');
        $query->setParameter(0, 0);

        self::assertCount(2, $query->getParameters());
        self::assertSame(0, $query->getParameter(0)->getValue());
        self::assertSame('Doctrine', $query->getParameter('name')->getValue());
    }

    /**
     * @group 6699
     */
    public function testSetParameterWithTypeJugglingWorks()
    {
        $query = $this->_em->createQuery('select u from Doctrine\Tests\Models\CMS\CmsUser u where u.id != ?0 and u.username = :name');

        $query->setParameter('0', 1);
        $query->setParameter('name', 'Doctrine');
        $query->setParameter(0, 2);
        $query->setParameter('0', 3);

        self::assertCount(2, $query->getParameters());
        self::assertSame(3, $query->getParameter(0)->getValue());
        self::assertSame(3, $query->getParameter('0')->getValue());
        self::assertSame('Doctrine', $query->getParameter('name')->getValue());
    }

    /**
     * @group 6748
     */
    public function testResultCacheProfileCanBeRemovedViaSetter()
    {
        $this->_em->getConfiguration()->setResultCacheImpl(new ArrayCache());

        $query = $this->_em->createQuery('SELECT u FROM Doctrine\Tests\Models\CMS\CmsUser u');
        $query->useResultCache(true);
        $query->setResultCacheProfile();

        self::assertAttributeSame(null, '_queryCacheProfile', $query);
    }
}
