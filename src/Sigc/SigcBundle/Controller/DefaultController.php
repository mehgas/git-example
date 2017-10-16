<?php

namespace Sigc\SigcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SigcBundle:Default:index.html.twig', array('name' => $name));
    }
}
