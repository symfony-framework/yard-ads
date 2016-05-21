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


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return AdsSpecificationValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set adsSpecification
     *
     * @param \AppBundle\Entity\AdsSpecification $adsSpecification
     *
     * @return AdsSpecificationValue
     */
    public function setAdsSpecification(\AppBundle\Entity\AdsSpecification $adsSpecification = null)
    {
        $this->adsSpecification = $adsSpecification;

        return $this;
    }

    /**
     * Get adsSpecification
     *
     * @return \AppBundle\Entity\AdsSpecification
     */
    public function getAdsSpecification()
    {
        return $this->adsSpecification;
    }
}
