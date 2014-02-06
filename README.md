# ClassFunctions

PHP Utilities to get different variations of class names

```
<?php
use Verraes\ClassFunctions as CF;

// Fully qualified class name of an object, without a leading backslash
echo CF::fqcn($object);

// Canonical class name of an object, of the form "My.Namespace.MyClass"
echo CF::canonical($object);

// Underscored and lowercased class name of an object, of the form "my.namespace.my_class"
echo CF::underscore($object);

// The class name of an object, without the namespace
echo CF::short($object);
```

## Installation


You can install ClassFunctions with Composer:

```json
{
    "require": {
        "mathiasverraes/classfunctions": "~1.0@alpha"
    }
}
```

Run `composer install` or `composer update` and you're ready to start.
