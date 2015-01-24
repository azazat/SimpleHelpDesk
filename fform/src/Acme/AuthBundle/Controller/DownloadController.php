<?php

namespace Acme\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;


class DownloadController extends Controller
{
    public function downloadAction(){
		$request = $this->get('request');
		$path = $this->get('kernel')->getRootDir(). "/../web/downloads/";
		$content = file_get_contents($path.'file.txt');

		$response = new Response();

		//set headers
		$response->headers->set('Content-Type', 'mime/type');
		$response->headers->set('Content-Disposition', 'attachment;filename="'.'file.txt');

		$response->setContent($content);
		return $response;
		
	}
    
	
}
