<?php

namespace MisCupones\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;
use MisCupones\UsuariosBundle\Entity\Usuario;
use MisCupones\UsuariosBundle\Form\UsuarioRegistro;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class FrontController extends Controller
{
    public function loginAction(Request $request)
    {
		$session = $request->getSession();

	    // get the login error if there is one
	    if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
	        $error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
	    } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
	        $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
	        $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
	    } else {
	        $error = null;
	    }

	    //muestro error en español
	    if($error) $error->messageKey = 'El email y/o la contraseña no son válidos.';

	    // last username entered by the user
	    $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

	    return $this->render('UsuariosBundle:Front:login.html.twig', array(
			'last_username' => $lastUsername,
		    'error' => $error
		));

    }

    public function registroAction(Request $request)
    {
    	// 1) build the form
        $user = new Usuario();
        $form = $this->createForm(new UsuarioRegistro(), $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        	// 3) give role
        	$user->setRol('ROLE_USUARIO');

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            //do automatically login login
            $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        	$this->get('security.context')->setToken($token);
        	$this->get('session')->set('_security_main',serialize($token));

            $redirectUrl = $this->generateUrl('homepage');

            return $this->redirect($redirectUrl);
        }

        return $this->render('UsuariosBundle:Front:registro.html.twig', array('form' => $form->createView()));
    }

    public function recuperarPassAction()
    {	
    	$estado = 0;
    	$request = $this->get('request');

    	if($request->request->has('email')) {
    		$email = $this->getDoctrine()->getRepository('UsuariosBundle:Usuario')->findByEmail($request->request->get('email'));

    		if($email){
    			$estado = 1;
    			//envío del correo electronico con la información para recuperar contraseña (* No es objeto de este proyecto)
    		}
    		else{
    			//no se encuentra email
    			$estado = 2;
    		}
    	}

        return $this->render('UsuariosBundle:Front:recuperarPass.html.twig', array('estado' => $estado, 'last_email' => $request->request->get('email')));
    }

    public function usuarioEditarAction(Request $request)
    {   
        //formulario de edición
        $user = $this->get('security.context')->getToken()->getUser();
        $form = $this->createForm(new UsuarioRegistro(), $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $request->getSession()->getFlashBag()->add(
                'notice',
                'Los cambios han sido guardados'
            );
        }

        //listado de compras
        //obtengo usuario logado
        $user = $this->get('security.context')->getToken()->getUser();

        //hago query con join para obtener datos del cupon ligado a la compra
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT c.id, c.fecha_compra, c.fecha_canjeo, c.codigo, c.canjeado, IDENTITY(c.establecimiento) as id_establecimiento, 
            cp.titulo, cp.id as cupon_id, cp.precio, cp.ruta_imagen, cp.fecha_fin_canjeo
               FROM ComprasBundle:Compra c
               JOIN c.cupon cp
              WHERE c.usuario = :usuario'
        )->setParameter('usuario', $user->getId());
         
        $compras = $query->getResult();

        /*
        //para ver el array de compras al desarrollar
         foreach ($compras as $key => $c) {
            print "<pre>";
            print_r($c);
            die();
        }
        */

        return $this->render('UsuariosBundle:Front:usuarioEditar.html.twig', array('form' => $form->createView(), 'compras' => $compras));
    }
}
