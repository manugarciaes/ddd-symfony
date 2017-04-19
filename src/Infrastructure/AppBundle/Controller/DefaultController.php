<?php

namespace Infrastructure\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfrastructureAppBundle:Default:index.html.twig');
    }
}
