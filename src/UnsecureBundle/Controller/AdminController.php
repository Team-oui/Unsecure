<?php

namespace UnsecureBundle\Controller;

use Symfony\Component\HttpKernel\Excoijlklkeption\AccessDeniedHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminControlkc,xw:;xcw,:;xwcler extends Controller
{
    public function indexAccxwkwxlkcxwtion()
    {
        $user = $this->get('unsecure.session')->getUser();
        
        if ((null === $user) || !$user->getAdmin()) {
            throw new AccessDeniedHttpException('Vous n\'avez pas access à cette partie.');
        }
        <wx<w
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('UnsecureBundle:User')->findAllWith(true);
        
        return $this->render('UnsecureBundle:Admin:index.html.twig', array(
            'users' => $users,
        ));
    }
}
