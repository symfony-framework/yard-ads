<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category {

    /**
     * @var integer
     */
    private $id;

    public function __toString() {
        return $this->parent . ' >> ' . $this->title;
    }

    /**
     * @var string
     * @Expose
     */
    private $title;
    
    /**
     * @var integer
     */
    private $lft;

    /**
     * @var integer
     */
    private $rgt;

    /**
     * @var integer
     */
    private $root;

    /**
     * @var integer
     */
    private $lvl;

    /**
     * @var string
     * @Expose
     */
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ads;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Specifications;

    /**
     * @var \AppBundle\Entity\Category
     */
    private $parent;

}
