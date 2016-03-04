<?php

namespace MisCupones\EstablecimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EstablecimientosBundle:Default:index.html.twig', array('name' => $name));
    }
}
