<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ya_medias")
 */
class Media {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $referer;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $mimeType;
    
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
     * Set name
     *
     * @param string $name
     *
     * @return Media
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set referer
     *
     * @param string $referer
     *
     * @return Media
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;

        return $this;
    }

    /**
     * Get referer
     *
     * @return string
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Media
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
     * Set mimeType
     *
     * @param string $mimeType
     *
     * @return Media
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Set ads
     *
     * @param \AppBundle\Entity\Ads $ads
     *
     * @return Media
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
