<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medias
 * @ExclusionPolicy("all")
 */
class Medias {

    /**
     * @var integer
     * @Expose
     */
    private $id;

    /**
     * @var string
     * @Expose
     */
    private $name;

    /**
     * @var string
     * @Expose
     */
    private $referer;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $mimeType;

}
