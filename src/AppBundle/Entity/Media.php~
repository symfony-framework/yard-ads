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

}
