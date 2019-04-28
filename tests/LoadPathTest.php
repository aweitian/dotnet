<?php

class LoadPathTest extends PHPUnit_Framework_TestCase
{
    public function testLoadEnv2()
    {
        //因为PHPUNIT的问题，这个地方上次运行的结果还存在
        unset($_ENV['database']);
        $test = new Aw\Dotnet();
        $arr = $test->load(__DIR__ . "/.env");
        $this->assertFalse(isset($_ENV['database']));
        $this->assertTrue(isset($arr['database']));
    }
}


