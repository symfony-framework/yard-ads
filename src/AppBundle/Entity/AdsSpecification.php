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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->adsSpecificationValue = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add adsSpecificationValue
     *
     * @param \AppBundle\Entity\AdsSpecificationValue $adsSpecificationValue
     *
     * @return AdsSpecification
     */
    public function addAdsSpecificationValue(\AppBundle\Entity\AdsSpecificationValue $adsSpecificationValue)
    {
        $this->adsSpecificationValue[] = $adsSpecificationValue;

        return $this;
    }

    /**
     * Remove adsSpecificationValue
     *
     * @param \AppBundle\Entity\AdsSpecificationValue $adsSpecificationValue
     */
    public function removeAdsSpecificationValue(\AppBundle\Entity\AdsSpecificationValue $adsSpecificationValue)
    {
        $this->adsSpecificationValue->removeElement($adsSpecificationValue);
    }

    /**
     * Get adsSpecificationValue
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdsSpecificationValue()
    {
        return $this->adsSpecificationValue;
    }

    /**
     * Set ads
     *
     * @param \AppBundle\Entity\Ads $ads
     *
     * @return AdsSpecification
     */
    public function setAds(\AppBundle\Entity\Ads $ads = null)
    {
        $this->ads = $ads;

        return $this;
    }

    /**
     * Get ads
     *
     * @return \AppBundle\Entity\Ads
     */
    public function getAds()
    {
        return $this->ads;
    }

    /**
     * Set specification
     *
     * @param \AppBundle\Entity\Specification $specification
     *
     * @return AdsSpecification
     */
    public function setSpecification(\AppBundle\Entity\Specification $specification = null)
    {
        $this->specification = $specification;

        return $this;
    }

    /**
     * Get specification
     *
     * @return \AppBundle\Entity\Specification
     */
    public function getSpecification()
    {
        return $this->specification;
    }
}
