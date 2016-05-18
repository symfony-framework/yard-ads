<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductHasSpecification
 */
class AdsSpecification {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     */
    private $adsSpecificationValue;

    /**
     */
    private $ads;

    /**
     */
    private $specification;

}
