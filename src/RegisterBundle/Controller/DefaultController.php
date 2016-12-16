<?php

namespace RegisterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RegisterBundle:Default:index.html.twig');
    }
}
