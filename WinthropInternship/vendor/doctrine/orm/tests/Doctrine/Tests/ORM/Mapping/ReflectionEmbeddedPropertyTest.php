<?php

namespace Doctrine\Tests\ORM\Mapping;

use Doctrine\Instantiator\Instantiator;
use Doctrine\ORM\Mapping\ReflectionEmbeddedProperty;
use Doctrine\Tests\Models\Mapping\Entity;
use ReflectionProperty;

/**
 * Tests for {@see \Doctrine\ORM\Mapping\ReflectionEmbeddedProperty}
 *
 * @covers \Doctrine\ORM\Mapping\ReflectionEmbeddedProperty
 */
class ReflectionEmbeddedPropertyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param ReflectionProperty $parentProperty  property of the embeddable/entity where to write the embeddable to
     * @param ReflectionProperty $childProperty   property of the embeddable class where to write values to
     * @param string             $embeddableClass name of the embeddable class to be instantiated
     *
     * @dataProvider getTestedReflectionProperties
     */
    public function testCanSetAndGetEmbeddedProperty(
        ReflectionProperty $parentProperty,
        ReflectionProperty $childProperty,
        $embeddableClass
    ) {
        $embeddedPropertyReflection = new ReflectionEmbeddedProperty($parentProperty, $childProperty, $embeddableClass);

        $instantiator = new Instantiator();

        $object = $instantiator->instantiate($parentProperty->getDeclaringClass()->getName());

        $embeddedPropertyReflection->setValue($object, 'newValue');

        $this->assertSame('newValue', $embeddedPropertyReflection->getValue($object));

        $embeddedPropertyReflection->setValue($object, 'changedValue');

        $this->assertSame('changedValue', $embeddedPropertyReflection->getValue($object));
    }

    /**
     * @param ReflectionProperty $parentProperty  property of the embeddable/entity where to write the embeddable to
     * @param ReflectionProperty $childProperty   property of the embeddable class where to write values to
     * @param string             $embeddableClass name of the embeddable class to be instantiated
     *
     * @dataProvider getTestedReflectionProperties
     */
    public function testWillSkipReadingPropertiesFromNullEmbeddable(
        ReflectionProperty $parentProperty,
        ReflectionProperty $childProperty,
        $embeddableClass
    ) {
        $embeddedPropertyReflection = new ReflectionEmbeddedProperty($parentProperty, $childProperty, $embeddableClass);

        $instantiator = new Instantiator();

        $this->assertNull($embeddedPropertyReflection->getValue(
            $instantiator->instantiate($parentProperty->getDeclaringClass()->getName())
        ));
    }

    /**
     * Data provider
     *
     * @return ReflectionProperty[][]|string[][]
     */
    public function getTestedReflectionProperties()
    {
        return array(
            array(
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Generic\\BooleanModel',
                    'id'
                ),
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Generic\\BooleanModel',
                    'id'
                ),
                'Doctrine\\Tests\\Models\\Generic\\BooleanModel'
            ),
            // reflection on embeddables that have properties defined in abstract ancestors:
            array(
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Generic\\BooleanModel',
                    'id'
                ),
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Reflection\\AbstractEmbeddable',
                    'propertyInAbstractClass'
                ),
                'Doctrine\\Tests\\Models\\Reflection\\ConcreteEmbeddable'
            ),
            array(
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Generic\\BooleanModel',
                    'id'
                ),
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Reflection\\ConcreteEmbeddable',
                    'propertyInConcreteClass'
                ),
                'Doctrine\\Tests\\Models\\Reflection\\ConcreteEmbeddable'
            ),
            // reflection on classes extending internal PHP classes:
            array(
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass',
                    'publicProperty'
                ),
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass',
                    'privateProperty'
                ),
                'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass'
            ),
            array(
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass',
                    'publicProperty'
                ),
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass',
                    'protectedProperty'
                ),
                'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass'
            ),
            array(
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass',
                    'publicProperty'
                ),
                $this->getReflectionProperty(
                    'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass',
                    'publicProperty'
                ),
                'Doctrine\\Tests\\Models\\Reflection\\ArrayObjectExtendingClass'
            ),
        );
    }

    /**
     * @param string $className
     * @param string $propertyName
     *
     * @return ReflectionProperty
     */
    private function getReflectionProperty($className, $propertyName)
    {
        $reflectionProperty = new ReflectionProperty($className, $propertyName);

        $reflectionProperty->setAccessible(true);

        return $reflectionProperty;
    }
}
