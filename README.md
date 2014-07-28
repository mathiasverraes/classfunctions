# ClassFunctions

PHP Utilities to get different variations of class names

```php
<?php
use Verraes\ClassFunctions\ClassFunctions;

// Fully qualified class name of an object, without a leading backslash
ClassFunctions::fqcn($object);

// Canonical class name of an object, of the form "My.Namespace.MyClass"
ClassFunctions::canonical($object);

// Underscored and lowercased class name of an object, of the form "my.namespace.my_class"
ClassFunctions::underscore($object);

// The class name of an object, without the namespace
ClassFunctions::short($object);
```

The above methods also accept strings.

Free bonus feature:

```php
<?php
// Returns an associative array of 'CONSTANT_NAME' => 'value'
ClassFunctions::constants('Verraes\ClassFunctions\Tests\MyClass')
```

## Installation


You can install ClassFunctions with Composer:

```json
{
    "require": {
        "mathiasverraes/classfunctions": "1.*"
    }
}
```

Run `composer install` or `composer update` and you're ready to start.
