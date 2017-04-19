<?php

namespace UserInterface\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserInterfaceAppBundle:Default:index.html.twig');
    }
}
