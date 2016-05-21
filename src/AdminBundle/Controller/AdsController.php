<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdsController extends Controller {

    public function listAction(Request $request) {
        $adsService = $this->get($this->getParameter('yard_ads.ads_service'));
        $list = $adsService->listAdsByPagintor($request->query->getInt('page', 1), 10) ;
        return $this->render('AdminBundle:Ads:list.html.twig',['list'=>$list]);
    }

}
