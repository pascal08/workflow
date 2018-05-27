<?php

namespace Tests;

use Pascal\Workflow\ExampleClass;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    /** @test */
    public function example_test()
    {
        $this->assertInstanceOf(ExampleClass::class, new ExampleClass());
    }

}