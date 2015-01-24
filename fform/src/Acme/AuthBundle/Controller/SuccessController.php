<?php

// src/Acme\AuthBundle\Controller;/SuccessController.php
namespace Acme\AuthBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\AuthBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class SuccessController extends Controller
{
	public function successAction(Request $request)
    {
		
        return $this->render('AcmeAuthBundle:Success:success.html.twig', array(
			'name' => $request->request->get('name'),
			));

        // render a PHP template instead
        // return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
    }
	
}