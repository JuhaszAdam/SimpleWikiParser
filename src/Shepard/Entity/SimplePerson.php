<?php

namespace Shepard\Entity;

class SimplePerson
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $bornIn;

    /**
     * @var string
     */
    private $description;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime
     */
    public function getBornIn()
    {
        return $this->bornIn;
    }

    /**
     * @param \DateTime $bornIn
     */
    public function setBornIn($bornIn)
    {
        $this->bornIn = $bornIn;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}
