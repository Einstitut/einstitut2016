<?php

namespace Front\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
         return $this->render('FrontUserBundle:Default:index.html.twig');
    }
    public function adminAction()
    {
        return $this->render('FrontUserBundle:Default:admin.html.twig');
    }
}
