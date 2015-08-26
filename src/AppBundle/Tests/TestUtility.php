<?php

namespace AppBundle\Tests;

class TestUtility
{
    public static function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    public static function setProperty(&$object, $propertyName, $newValue)
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getProperty($propertyName);
        $method->setAccessible(true);
        return $method->setValue($object, $newValue);
    }

    public static function getProperty(&$object, $propertyName)
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getProperty($propertyName);
        $method->setAccessible(true);
        return $method->getValue($object);
    }
}