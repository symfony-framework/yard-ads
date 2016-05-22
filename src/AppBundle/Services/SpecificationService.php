<?php

namespace AppBundle\Services;

use AppBundle\Entity\Specification;

class SpecificationService {

    private $container;
    private $entityManager;

    public function __construct($container) {
        $this->container = $container;
        $this->entityManager = $this->container->get('doctrine.orm.entity_manager');
    }

    public function listAdsByPagintor($page, $limit) {
        $dql = "SELECT a FROM AppBundle:Specification a";
        $query = $this->entityManager->createQuery($dql);
        $paginator = $this->container->get($this->container->getParameter('yard_ads.paginator_service'));
        $pagination = $paginator->paginate(
                $query, /* query NOT result */ $page/* page number */, $limit/* limit per page */
        );

        return $pagination;
    }

    public function addSpecification($datas) {
        $specification = new Specification();
        $specification->setName($datas['name']);
        $specification->setTitle($datas['title']);
        $specification->setType($datas['type']);

        if ($datas['type'] == 'boolean') {
            $datas['content'] = array(true, false);
        }
        
        $specification->setContent($datas['content']);
        $this->entityManager->persist($specification);
        $this->entityManager->flush();
        
        return $specification ;
    }
    
    public function removeSpecification($id)
    {
        $specification = $this->entityManager->getRepository('AppBundle:Specification')->find($id);
        $this->entityManager->remove($specification);
        $this->entityManager->flush();
    }

}
