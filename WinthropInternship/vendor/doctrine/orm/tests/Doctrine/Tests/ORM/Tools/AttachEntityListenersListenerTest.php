<?php

namespace Doctrine\Tests\ORM\Tools;

use Doctrine\ORM\Events;
use Doctrine\Tests\OrmTestCase;
use Doctrine\ORM\Mapping\ClassMetadataFactory;
use Doctrine\ORM\Tools\AttachEntityListenersListener;

class AttachEntityListenersListenerTest extends OrmTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * @var \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    private $listener;

    /**
     * @var \Doctrine\ORM\Mapping\ClassMetadataFactory
     */
    private $factory;

    public function setUp()
    {
        $this->listener = new AttachEntityListenersListener();
        $driver         = $this->createAnnotationDriver();
        $this->em       = $this->_getTestEntityManager();
        $evm            = $this->em->getEventManager();
        $this->factory  = new ClassMetadataFactory;

        $evm->addEventListener(Events::loadClassMetadata, $this->listener);
        $this->em->getConfiguration()->setMetadataDriverImpl($driver);
        $this->factory->setEntityManager($this->em);
    }

    public function testAttachEntityListeners()
    {
        $this->listener->addEntityListener(
            AttachEntityListenersListenerTestFooEntity::CLASSNAME,
            AttachEntityListenersListenerTestListener::CLASSNAME,
            Events::postLoad,
            'postLoadHandler'
        );

        $metadata = $this->factory->getMetadataFor(AttachEntityListenersListenerTestFooEntity::CLASSNAME);

        $this->assertArrayHasKey('postLoad', $metadata->entityListeners);
        $this->assertCount(1, $metadata->entityListeners['postLoad']);
        $this->assertEquals('postLoadHandler', $metadata->entityListeners['postLoad'][0]['method']);
        $this->assertEquals(AttachEntityListenersListenerTestListener::CLASSNAME, $metadata->entityListeners['postLoad'][0]['class']);
    }

    public function testAttachToExistingEntityListeners()
    {
        $this->listener->addEntityListener(
            AttachEntityListenersListenerTestBarEntity::CLASSNAME,
            AttachEntityListenersListenerTestListener2::CLASSNAME,
            Events::prePersist
        );

        $this->listener->addEntityListener(
            AttachEntityListenersListenerTestBarEntity::CLASSNAME,
            AttachEntityListenersListenerTestListener2::CLASSNAME,
            Events::postPersist,
            'postPersistHandler'
        );

        $metadata = $this->factory->getMetadataFor(AttachEntityListenersListenerTestBarEntity::CLASSNAME);

        $this->assertArrayHasKey('postPersist', $metadata->entityListeners);
        $this->assertArrayHasKey('prePersist', $metadata->entityListeners);

        $this->assertCount(2, $metadata->entityListeners['prePersist']);
        $this->assertCount(2, $metadata->entityListeners['postPersist']);

        $this->assertEquals('prePersist', $metadata->entityListeners['prePersist'][0]['method']);
        $this->assertEquals(AttachEntityListenersListenerTestListener::CLASSNAME, $metadata->entityListeners['prePersist'][0]['class']);

        $this->assertEquals('prePersist', $metadata->entityListeners['prePersist'][1]['method']);
        $this->assertEquals(AttachEntityListenersListenerTestListener2::CLASSNAME, $metadata->entityListeners['prePersist'][1]['class']);

        $this->assertEquals('postPersist', $metadata->entityListeners['postPersist'][0]['method']);
        $this->assertEquals(AttachEntityListenersListenerTestListener::CLASSNAME, $metadata->entityListeners['postPersist'][0]['class']);

        $this->assertEquals('postPersistHandler', $metadata->entityListeners['postPersist'][1]['method']);
        $this->assertEquals(AttachEntityListenersListenerTestListener2::CLASSNAME, $metadata->entityListeners['postPersist'][1]['class']);
    }

    /**
     * @expectedException \Doctrine\ORM\Mapping\MappingException
     * @expectedExceptionMessage  Entity Listener "Doctrine\Tests\ORM\Tools\AttachEntityListenersListenerTestListener#postPersist()" in "Doctrine\Tests\ORM\Tools\AttachEntityListenersListenerTestFooEntity" was already declared, but it must be declared only once.
     */
    public function testDuplicateEntityListenerException()
    {
        $this->listener->addEntityListener(
            AttachEntityListenersListenerTestFooEntity::CLASSNAME,
            AttachEntityListenersListenerTestListener::CLASSNAME,
            Events::postPersist
        );

        $this->listener->addEntityListener(
            AttachEntityListenersListenerTestFooEntity::CLASSNAME,
            AttachEntityListenersListenerTestListener::CLASSNAME,
            Events::postPersist
        );

        $this->factory->getMetadataFor(AttachEntityListenersListenerTestFooEntity::CLASSNAME);
    }
}

/**
 * @Entity
 */
class AttachEntityListenersListenerTestFooEntity
{
    const CLASSNAME = __CLASS__;

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    public $id;
}

/**
 * @Entity
 * @EntityListeners({"AttachEntityListenersListenerTestListener"})
 */
class AttachEntityListenersListenerTestBarEntity
{
    const CLASSNAME = __CLASS__;

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    public $id;
}

class AttachEntityListenersListenerTestListener
{
    const CLASSNAME = __CLASS__;

    public $calls;

    public function prePersist()
    {
        $this->calls[__FUNCTION__][] = func_get_args();
    }

    public function postLoadHandler()
    {
        $this->calls[__FUNCTION__][] = func_get_args();
    }

    public function postPersist()
    {
        $this->calls[__FUNCTION__][] = func_get_args();
    }
}

class AttachEntityListenersListenerTestListener2
{
    const CLASSNAME = __CLASS__;

    public $calls;

    public function prePersist()
    {
        $this->calls[__FUNCTION__][] = func_get_args();
    }

    public function postPersistHandler()
    {
        $this->calls[__FUNCTION__][] = func_get_args();
    }
}
