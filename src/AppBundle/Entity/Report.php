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

}
