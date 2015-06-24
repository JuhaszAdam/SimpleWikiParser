<?php

namespace Shepard\Provider;

class SimpleWikiProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testReadFile()
    {
        $provider = new SimpleWikiProvider();

        $text = $provider->readFile('..\Doc\Kent_Beck.html');
        $this->assertTrue(true);
    }
}
