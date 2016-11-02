<?php

namespace JE\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JEUsuarioBundle:Default:index.html.twig', array('name' => $name));
    }
}
