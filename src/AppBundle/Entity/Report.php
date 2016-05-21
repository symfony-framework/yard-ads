<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ya_report")
 */
class Report
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $ipAddress;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ads")
     * @ORM\JoinColumn(name="ads_id", referencedColumnName="id")
     */
    private $ads;


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
     * Set title
     *
     * @param string $title
     *
     * @return Report
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Report
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return Report
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set ads
     *
     * @param \AppBundle\Entity\Ads $ads
     *
     * @return Report
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
}
