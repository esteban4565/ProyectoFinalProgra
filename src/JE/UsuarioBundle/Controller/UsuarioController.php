<?php

namespace JE\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $usuarios=$em->getRepository('JEUsuarioBundle:Usuario')->findAll();
        /*
                $res='Lista de usuarios: <br />';
                foreach ($users as $user){
                    $res .= 'Usuario: ' . $user->getNombreUsuario() .  ' - Contraseña: ' . $user->getPassword() .  '<br />';
                }
                return new Response($res);
                 * 
                 */
        
                return $this->render('JEUsuarioBundle:usuario:index.html.twig', array('usuarios'=>$usuarios));
    }
    
    public function agregarAction()
    {
        return new Response('Agregar Usuario');
    }
}
