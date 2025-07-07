<?php

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    private $math;

    protected function setUp(): void
    {
        $this->math = new Math();
    }

    public function testAdd(): void
    {
        $this->assertEquals(5.0, $this->math->add(2.0, 3.0));
        $this->assertEquals(-1.0, $this->math->add(-2.0, 1.0));
        $this->assertEquals(0.0, $this->math->add(0.0, 0.0));
    }

    public function testSubtract(): void
    {
        $this->assertEquals(1.0, $this->math->subtract(3.0, 2.0));
        $this->assertEquals(-3.0, $this->math->subtract(2.0, 5.0));
        $this->assertEquals(0.0, $this->math->subtract(2.0, 2.0));
    }

    public function testMultiply(): void
    {
        $this->assertEquals(6.0, $this->math->multiply(2.0, 3.0));
        $this->assertEquals(-6.0, $this->math->multiply(-2.0, 3.0));
        $this->assertEquals(0.0, $this->math->multiply(5.0, 0.0));
    }

    public function testDivide(): void
    {
        $this->assertEquals(2.0, $this->math->divide(6.0, 3.0));
        $this->assertEquals(-2.0, $this->math->divide(-4.0, 2.0));
        $this->assertEquals(0.0, $this->math->divide(0.0, 1.0));
    }

    public function testDivideByZeroThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero is not allowed.");
        $this->math->divide(5.0, 0.0);
    }

    public function testPower(): void
    {
        $this->assertEquals(8.0, $this->math->power(2.0, 3.0));
        $this->assertEquals(1.0, $this->math->power(5.0, 0.0));
        $this->assertEquals(0.25, $this->math->power(2.0, -2.0));
    }
}
