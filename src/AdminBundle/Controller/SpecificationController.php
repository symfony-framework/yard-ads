<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SpecificationController extends Controller {

    public function listAction(Request $request) {
        $ss = $this->get($this->getParameter('yard_ads.specification_service'));
        $list = $ss->listAdsByPagintor($request->query->getInt('page', 1), 10);
        return $this->render('AdminBundle:Specification:list.html.twig', ['list' => $list]);
    }
    
    public function addAction(Request $request) {

        $form = $this->createFormBuilder()
                ->add('title')
                ->add('name')
                ->add('type', ChoiceType::class, array(
                    'choices' => array('text' => 'text', 'boolean' => 'boolean', 'choice' => 'choice', 'textarea' => 'textarea', 'multi' => 'multi')
                ))
                ->add('content')
                ->add('submit', SubmitType::class)
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {

            $datas = $form->getData();
            $specificationService = $this->get($this->getParameter('yard_ads.specification_service'));
            $specificationService->addSpecification($datas);
        }
        return $this->render('AdminBundle:Specification:add.html.twig', array('form' => $form->createView()));
    }
    
    public function removeAction($id, Request $request) {

        $ss = $this->get($this->getParameter('yard_ads.specification_service'));
        $ss->removeSpecification($id);
        return $this->redirect($request->headers->get('referer'));
    }

}
