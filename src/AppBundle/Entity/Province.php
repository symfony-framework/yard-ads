<?php

namespace AppBundle\Entity;


/**
 * Province
 */
class Province {

    public function __toString() {
        return $this->name;
    }

    /**
     * @var integer
     * @Expose
     */
    private $id;

    /**
     * @var string
     * @Expose
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @Expose
     */
    private $cities;

}
