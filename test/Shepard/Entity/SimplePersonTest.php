<?php

namespace Shepard\Entity;

class SimplePersonTest extends \PHPUnit_Framework_TestCase
{
    public function testGetterSetter()
    {
        $person = new SimplePerson();
        $person->setName("Foo Bar");
        $bornIn = new \DateTime('1990');
        $person->setBornIn($bornIn);
        $person->setDescription("This is a text of unholy proportions.");

        $this->assertEquals("Foo Bar", $person->getName());
        $this->assertEquals($bornIn, $person->getBornIn());
        $this->assertEquals("This is a text of unholy proportions.", $person->getDescription());
    }
}
