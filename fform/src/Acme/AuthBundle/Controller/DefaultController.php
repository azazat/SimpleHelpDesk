<?php

namespace Acme\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\AuthBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;

class DefaultController extends Controller
{
    public function loginAction(Request $request)
    {
		
        //$task->setTask('Write a blog post');
        //$task->setDueDate(new \DateTime('tomorrow'));
		//$defaultData = array();
		$form = $this->createFormBuilder()
			->add('name', 'text')
			->add('pwd', 'password')
			->getForm();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			// data is an array with "name", "email", and "message" keys
			$data = $form->getData();
			//$this->get('request')->request->get('name');
			//$a = $task->setName($request->request->get('name'));
			//$a1 = $task->setPwd($request->request->get('pwd')) ;
			if ($form->isValid()) {
				//$data['name'] === 'root' && $data['pwd'] === '123'
				//$task = new Task();
				$task = $this->getDoctrine()
					->getRepository('AcmeAuthBundle:Task')->findOneBy(array(
					'name' => $data['name'],
					'pwd' => $data['pwd'],
				));
					
				//$task = $repository->
				//);
				if (!$task){
					throw $this->createNotFoundException('нет такого');
				}
				//
				// выполняем прочие действие, например, сохраняем задачу в базе данных

				//return $this->redirect($this->generateUrl('acme_auth_success'));
				return $this->render('AcmeAuthBundle:Default:success.html.twig', array(
				'name' => $data['name'],
				
				));
			}
		}	
		
		$path = $this->get('kernel')->getRootDir()."/../web/downloads/";
		
        return $this->render('AcmeAuthBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
			'path' => $path,
			
			));
        //return $this->render('AcmeAuthBundle:Default:index.html.twig');
    }
}
