<?php

namespace User\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $admins = $repository->findBy(array('type'=>'admin'));
        return $this->render('UserAdminBundle:admin:index.html.twig', array('admins' => $admins));
    }

    /**
     * @Route("/show")
     * @Template()
     */
    public function showAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/edit")
     * @Template()
     */
    public function editAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/update")
     * @Template()
     */
    public function updateAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/destroy")
     * @Template()
     */
    public function destroyAction()
    {
        return array(
                // ...
            );    }

}
