<?php

namespace AppBundle\Services;

class AdsService {

    private $container;

    public function __construct($container) {
        $this->container = $container;
    }

    public function listAdsByPagintor($page, $limit) {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:Ads a";
        $query = $em->createQuery($dql);
        $paginator = $this->container->get($this->container->getParameter('yard_ads.paginator_service'));
        $pagination = $paginator->paginate(
                $query, /* query NOT result */ 
                $page/* page number */, 
                $limit/* limit per page */
        );
        
        return $pagination ;
    }

}
