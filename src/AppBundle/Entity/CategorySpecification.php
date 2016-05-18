<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * CategoryHasSpecification
 */
class CategorySpecification
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Category
     */
    private $category;

    /**
     * @var \AppBundle\Entity\Specification
     */
    private $specification;

}
