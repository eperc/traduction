<?php

namespace User\TranslatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserTranslatorBundle:Default:index.html.twig', array('name' => $name));
    }
}
