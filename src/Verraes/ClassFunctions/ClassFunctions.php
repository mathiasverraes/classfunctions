<?php

namespace Verraes\ClassFunctions;

final class ClassFunctions
{
    /**
     * Fully qualified class name of an object, without a leading backslash
     * @param $object
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function fqcn($object)
    {
        if (!is_object($object)) {
            throw new \InvalidArgumentException("Expected an object");
        }
        return trim(get_class($object), '\\');
    }

    /**
     * Canonical class name of an object, of the form "My.Namespace.MyClass"
     * @param $object
     * @return string
     */
    public static function canonical($object)
    {
        return str_replace('\\', '.', self::fqcn($object));
    }

    /**
     * Underscored and lowercased class name of an object, of the form "my.mamespace.my_class"
     * @param $object
     * @return string
     */
    public static function underscore($object)
    {
        return strtolower(preg_replace('~(?<=\\w)([A-Z])~', '_$1', self::canonical($object)));
    }

    /**
     * The class name of an object, without the namespace
     * @param $object
     * @return string
     */
    public static function short($object)
    {
        $parts = explode('\\', self::fqcn($object));
        return end($parts);
    }

    /**
     * Returns an array of CONSTANT_NAME => contents for a given class
     * @param $className
     * @return string[]
     */
    public static function constants($className)
    {
        return (new \ReflectionClass($className))->getConstants();
    }
}

