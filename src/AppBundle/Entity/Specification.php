<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specification
 */
class Specification {

    /**
     * @var integer
     */
    private $id;

    public function __toString() {
        return $this->name;
    }

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $title;

    /**
     * @var array 
     */
    private $content;

   
}
