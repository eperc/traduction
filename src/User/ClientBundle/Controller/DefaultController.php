<?php

namespace User\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
