<?php

namespace Verraes\Tests;

use Verraes\ClassFunctions as CF;
use PHPUnit_Framework_TestCase;

final class ClassFunctionsTest extends PHPUnit_Framework_TestCase
{
    private $object;

    protected function setUp()
    {
        $this->object = new MyClass;
    }

    /**
     * @test
     */
    public function fqcn()
    {
        $this->assertEquals('Verraes\Tests\MyClass', CF::fqcn($this->object));
    }

    /**
     * @test
     */
    public function canonical()
    {
        $this->assertEquals('Verraes.Tests.MyClass', CF::canonical($this->object));
    }

    /**
     * @test
     */
    public function underscore()
    {
        $this->assertEquals('verraes.tests.my_class', CF::underscore($this->object));
    }

    /**
     * @test
     */
    public function short()
    {
        $this->assertEquals('MyClass', CF::short($this->object));
    }
}

class MyClass {}