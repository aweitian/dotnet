<?php

class OnlyLoadTest extends PHPUnit_Framework_TestCase
{
    public function testBase()
    {
        $test = new Aw\Dotnet(__DIR__ . "/.env");
        $arr = $test->load();
        $this->assertEquals("garri", $arr['database']);
        $this->assertFalse(isset($arr['comment']));
        $this->assertEquals(7, count($arr));
    }
}


