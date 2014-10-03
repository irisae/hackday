<?php

namespace Perso\Bundle\HackDayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PersoHackDayBundle:Default:index.html.twig', array('name' => $name));
    }
}
