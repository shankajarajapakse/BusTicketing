<?php

namespace OperatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OperatorBundle:Default:index.html.twig');
    }
}
