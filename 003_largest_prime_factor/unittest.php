<?php
require_once 'unit.php';

class UnitTest extends PHPUnit_Framework_TestCase
{
    public function testRun()
    {
        $test = new Unit();
	$this->assertTrue(method_exists($test, 'getLargestPrimeFactor'), 'getLargestPrimeFactor method not exists');
	$this->assertTrue(method_exists($test, 'getMaxPrime'), 'getMaxPrime method not exists');
        
        $this->assertInternalType('integer', $test->getMaxPrime(45));
        $this->assertEquals(13, $test->getMaxPrime(15));
        $this->assertEquals(43, $test->getMaxPrime(45));
        $this->assertEquals(137, $test->getMaxPrime(138));


        $this->assertInternalType('integer', $test->getLargestPrimeFactor(15));
        $this->assertEquals(5, $test->getLargestPrimeFactor(15));
        $this->assertEquals(13, $test->getLargestPrimeFactor(26));
        $this->assertEquals(13, $test->getLargestPrimeFactor(39));
        $this->assertEquals(13, $test->getLargestPrimeFactor(52));
        $this->assertEquals(107, $test->getLargestPrimeFactor(107));
        $this->assertEquals(107, $test->getLargestPrimeFactor(214));

    }
}
?>
