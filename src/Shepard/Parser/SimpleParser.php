<?php

namespace Shepard\Parser;

use Shepard\Entity\SimplePerson;

class SimpleParser
{

    /**
     * @param string $rawText
     * @return SimplePerson
     */
    public function parse($rawText)
    {
        $rawText = $this->removeWhitespaces($rawText);
        $name = $this->parseName($rawText);
        $bornIn = $this->parseBornIn($rawText);

        $rawText = $this->handleTags($rawText);
        $rawText = $this->fixFormating($rawText);

        return $this->createNewSimplePerson($name, $bornIn, $rawText);
    }

    /**
     * @param string $rawText
     * @return string
     */
    private function removeWhitespaces($rawText)
    {
        $rawText = preg_replace('#\s+#', ' ', $rawText);

        return $rawText;
    }

    /**
     * @param $rawText
     * @return string
     * @throws \Exception
     */
    private function parseName($rawText)
    {
        $name = [];
        preg_match('#<b>[a-zA-Z .]*</b>#', $rawText, $name);

        if (empty($name)) {
            throw new \Exception("Name couldn't be parsed!");
        }
        $name = preg_replace('#<b>|</b>#', '', $name[0]);

        return $name;
    }

    /**
     * @param $rawText
     * @return string
     * @throws \Exception
     */
    private function parseBornIn($rawText)
    {
        $bornIn = [];
        preg_match('#\d{4}#', $rawText, $bornIn);

        if (empty($bornIn)) {
            throw new \Exception("Name couldn't be parsed!");
        }

        return $bornIn[0];
    }

    /**
     * @param string $rawText
     * @return string
     */
    private function handleTags($rawText)
    {
        $rawText = preg_replace('#<p>|</p>|<br>#', PHP_EOL, $rawText);
        $rawText = preg_replace('#<b>|</b>#', '', $rawText);
        $rawText = preg_replace('#<a[^>]*>|</a>#', ' ', $rawText);
        $rawText = preg_replace('#<sup[^/]*</sup>#', '', $rawText);

        return $rawText;
    }

    /**
     * @param string $rawText
     * @return string
     */
    private function fixFormating($rawText)
    {
        $rawText = preg_replace('#\t+| {2,}#', ' ', $rawText);
        $rawText = preg_replace('# *,#', ',', $rawText);
        $rawText = preg_replace('# *-#', '-', $rawText);

        return $rawText;
    }

    /**
     * @param string $name
     * @param string $bornIn
     * @param string $rawText
     * @return SimplePerson
     */
    private function createNewSimplePerson($name, $bornIn, $rawText)
    {
        $person = new SimplePerson();
        $person->setName($name);
        $person->setBornIn(new \DateTime("$bornIn-01-01 00:00:00"));
        $person->setDescription($rawText);

        return $person;
    }
}
