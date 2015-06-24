<?php

namespace Shepard\Provider;

class SimpleWikiProvider
{
    /**
     * @param string $filepath
     * @return string
     */
    public function readFile($filepath)
    {
        $file = fopen($filepath, "r");

        $text = "";
        while ($line = fgets($file)) {
            $text .= $line;
        }
        fclose($file);

        return $text;
    }
}
