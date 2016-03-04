<?php

namespace MisCupones\ComprasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComprasBundle:Default:index.html.twig', array('name' => $name));
    }
}
