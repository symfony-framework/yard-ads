<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT a FROM UserBundle:User a";
        $query = $em->createQuery($dql);
        $paginator = $this->container->get($this->container->getParameter('yard_ads.paginator_service'));
        $pagination = $paginator->paginate(
                $query, /* query NOT result */ 
                $request->query->getInt('page', 1)/* page number */, 
                10/* limit per page */
        );
        return $this->render('UserBundle:User:list.html.twig',['list'=>$pagination]);
    }
    
    public function removeUserAction($id,Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserById($id);
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect($request->headers->get('referer'));
    }
    
}
