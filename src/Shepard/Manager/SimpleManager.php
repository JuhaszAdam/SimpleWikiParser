<?php

namespace Shepard\Manager;

class SimpleManager
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

    /**
     * @param string $filepath
     * @param string $text
     */
    public function saveText($filepath, $text)
    {
        file_put_contents($filepath, $text);
    }
}
