<?php

namespace OperatorBundle\Controller {

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class BusController extends Controller{

        public function indexAction(){
            return $this->render('OperatorBundle:Bus:index.html.twig');
        }

        public function showAction($id){
            return $this->render('OperatorBundle:Bus:show.html.twig');
        }
    }

}?>