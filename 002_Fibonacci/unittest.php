<?php
require_once 'unit.php';

class UnitTest extends PHPUnit_Framework_TestCase
{
    public function testRun()
    {
        $test = new Unit();
        $this->assertInternalType('array', $test->getFibonacciSequense(5));
        $this->assertInternalType('integer', $test->getFibonacciEvenSum(5));
        $this->assertEquals(array(1, 2, 3, 5, 8), $test->getFibonacciSequense(5));
        $this->assertEquals(array(1, 2, 3, 5, 8, 13, 21, 34, 55, 89), $test->getFibonacciSequense(10));
        $this->assertEquals(10, $test->getFibonacciEvenSum(5));
        $this->assertEquals(44, $test->getFibonacciEvenSum(10));
    }
}
?>
