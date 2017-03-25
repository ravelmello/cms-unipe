<?php

namespace Custom\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $userName = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render(
            'CMSBundle:Default:index.html.twig',
            array(
                'username' => $userName
            )
        );
    }
}
