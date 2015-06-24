<?php

namespace Shepard\Lister;

use Shepard\Entity\SimplePerson;

class SimpleLister
{
    public function printMiniWiki(SimplePerson $person)
    {
        $result = sprintf('<div class="myList"><b>%s</b><br><i>Born in %s</i><br><label>', $person->getName(), $person->getBornIn()->format('Y'));
        $result .= $person->getDescription();
        $result .= '</label></div>';

        return $result;
    }
}
