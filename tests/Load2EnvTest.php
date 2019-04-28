<?php

class Load2EnvTest extends PHPUnit_Framework_TestCase
{
    public function testLoadEnv()
    {
        unset($_ENV['database']);
        $test = new Aw\Dotnet(__DIR__ . "/.env");
        $arr = $test->load(true);
        $this->assertEquals("garri", $_ENV['database']);
        $this->assertFalse(isset($arr['comment']));
        $this->assertEquals(7, count($arr));
    }
}


