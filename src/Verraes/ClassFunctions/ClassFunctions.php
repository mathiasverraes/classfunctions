<?php

namespace Verraes\ClassFunctions;

final class ClassFunctions
{
    /**
     * Fully qualified class name of an object, without a leading backslash
     * @param object|string $object
     * @return string
     */
    public static function fqcn($object)
    {
        if(is_string($object)) {
            return $object;
        }

        if (is_object($object)) {
            return trim(get_class($object), '\\');
        }
        throw new \InvalidArgumentException(sprintf("Expected an object or a string, got %s", gettype($object)));
    }

    /**
     * Canonical class name of an object, of the form "My.Namespace.MyClass"
     * @param object|string $object
     * @return string
     */
    public static function canonical($object)
    {
        return str_replace('\\', '.', self::fqcn($object));
    }

    /**
     * Underscored and lowercased class name of an object, of the form "my.mamespace.my_class"
     * @param object|string $object
     * @return string
     */
    public static function underscore($object)
    {
        return strtolower(preg_replace('~(?<=\\w)([A-Z])~', '_$1', self::canonical($object)));
    }

    /**
     * The class name of an object, without the namespace
     * @param object|string $object
     * @return string
     */
    public static function short($object)
    {
        $parts = explode('\\', self::fqcn($object));
        return end($parts);
    }

    /**
     * Returns an array of CONSTANT_NAME => contents for a given class
     * @param string $className
     * @return string[]
     */
    public static function constants($className)
    {
        return (new \ReflectionClass($className))->getConstants();
    }
}

