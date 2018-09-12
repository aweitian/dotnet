<?php

class PdoTest extends PHPUnit_Framework_TestCase
{
    public function testUpdate()
    {
        $test = new Aw\Dotnet(__DIR__ . "/.env");
        $arr = $test->load();
        $this->assertEquals("garri", $arr['database']);
        $this->assertFalse(isset($arr['comment']));
        $this->assertEquals(7, count($arr));
    }
}


