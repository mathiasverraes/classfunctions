<?php
namespace Verraes\ClassFunctions\Tests;

use PHPUnit_Framework_TestCase;
use Verraes\ClassFunctions\ClassFunctions;

final class ClassFunctionsTest extends PHPUnit_Framework_TestCase
{
    private $object;
    private $string;

    protected function setUp()
    {
        $this->object = new MyClass;
        $this->string = 'Verraes\ClassFunctions\Tests\MyClass';
    }

    /**
     * @test
     */
    public function fqcn()
    {
        $this->assertEquals('Verraes\ClassFunctions\Tests\MyClass', ClassFunctions::fqcn($this->object));
        $this->assertEquals('Verraes\ClassFunctions\Tests\MyClass', ClassFunctions::fqcn($this->string));
    }

    /**
     * @test
     */
    public function canonical()
    {
        $this->assertEquals('Verraes.ClassFunctions.Tests.MyClass', ClassFunctions::canonical($this->object));
        $this->assertEquals('Verraes.ClassFunctions.Tests.MyClass', ClassFunctions::canonical($this->string));
    }

    /**
     * @test
     */
    public function underscore()
    {
        $this->assertEquals('verraes.class_functions.tests.my_class', ClassFunctions::underscore($this->object));
        $this->assertEquals('verraes.class_functions.tests.my_class', ClassFunctions::underscore($this->string));
    }

    /**
     * @test
     */
    public function short()
    {
        $this->assertEquals('MyClass', ClassFunctions::short($this->object));
        $this->assertEquals('MyClass', ClassFunctions::short($this->string));
    }

    /**
     * @test
     */
    public function constants()
    {
        $this->assertEquals(
            ['MY_CONST1' => 'a', 'MY_CONST2' => 'b'],
            ClassFunctions::constants('Verraes\ClassFunctions\Tests\MyClass')
        );
    }
}

class MyClass
{
    const MY_CONST1 = 'a';
    const MY_CONST2 = 'b';
}