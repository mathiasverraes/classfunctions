<?php

namespace Verraes\ClassFunctions;

/**
 * @deprecated
 */
final class ClassFunctions
{
    /**
     * Fully qualified class name of an object, without a leading backslash
     * @param object|string $object
     * @return string
     */
    public static function fqcn($object)
    {
        return fqcn($object);
    }

    /**
     * Canonical class name of an object, of the form "My.Namespace.MyClass"
     * @param object|string $object
     * @return string
     */
    public static function canonical($object)
    {
        return canonical($object);
    }

    /**
     * Underscored and lowercased class name of an object, of the form "my.mamespace.my_class"
     * @param object|string $object
     * @return string
     */
    public static function underscore($object)
    {
        return underscore($object);
    }


    /**
     * The class name of an object, without the namespace
     * @param object|string $object
     * @return string
     */
    public static function short($object)
    {
        return short($object);
    }


    /**
     * Returns an array of CONSTANT_NAME => contents for a given class
     * @param string $className
     * @return string[]
     */
    public static function constants($className)
    {
        return constants($className);
    }
}

