<?php

namespace Shepard\Provider;

class SimpleWikiProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testReadFile()
    {
        $provider = new SimpleWikiProvider();

        $text = false;
        $text = $provider->readFile('../../../src/Shepard/Doc/Kent_Beck.html');

        $this->assertTrue(is_string($text));
        $this->assertEquals(3991, strlen($text));
    }
}
