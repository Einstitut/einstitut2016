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
    public function forumAction()
    {
        return $this->render('FrontUserBundle:Default:forum.html.twig');
    }

    public function coursAction()
    {
        return $this->render('FrontUserBundle:Default:cours.html.twig');
    }

    public function coursligneAction()
    {
        return $this->render('FrontUserBundle:Default:coursligne.html.twig');
    }
}
