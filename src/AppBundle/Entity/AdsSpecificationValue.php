<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ya_ads_specification_value")
 */
class AdsSpecificationValue {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AdsSpecification",inversedBy="adsSpecificationValue")
     * @ORM\JoinColumn(name="ads_specification_id", referencedColumnName="id")
     */
    private $adsSpecification;

}
