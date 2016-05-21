<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ya_ads_specification")
 */
class AdsSpecification {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\AdsSpecificationValue", mappedBy="adsSpecification")
     */
    private $adsSpecificationValue;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ads",inversedBy="adsSpecification")
     * @ORM\JoinColumn(name="ads_id", referencedColumnName="id")
     */
    private $ads;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Specification")
     * @ORM\JoinColumn(name="specification_id", referencedColumnName="id")
     */
    private $specification;

}
