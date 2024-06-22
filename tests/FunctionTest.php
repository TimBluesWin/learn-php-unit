<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\Attributes\CoversNothing;

include "../src/functions.php";

// Note: dot shows tests that passed

#[CoversNothing]
class FunctionTest extends TestCase
{
    public function testMultiplyReturnsCorrectResults(){
        // We can have multiple assertions in 1 test case. But it
        // should make sense.
        $this->assertEquals(10, multiply(2, 5));
        $this->assertEquals(12, multiply(3, 4));
    }

    public function testMultiplyDoesNotReturnIncorrectResults(){
        // When a test fails, it shows "F" instead of dot
        $this->assertNotEquals(5, multiply(1, 0));
        // $this->assertNotEquals(0, multiply(1, 0));
    }
}