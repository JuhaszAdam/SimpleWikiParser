<?php

namespace Shepard\Manager;

class SimpleManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testReadFile()
    {
        $provider = new SimpleManager();

        $text = false;
        $text = $provider->readFile('../../../src/Shepard/Doc/Kent_Beck.html');

        $this->assertTrue(is_string($text));
        $this->assertEquals(3991, strlen($text));
    }
}
