<?php

namespace User\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
