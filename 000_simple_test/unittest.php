<?php
require_once 'unit.php';

class UnitTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $test = new Unit();

        $this->assertEquals(true, $test->processSMTH());
    }
}
?>
