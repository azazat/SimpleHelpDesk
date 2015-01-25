<?php

namespace NG\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NGHelpDeskBundle:Default:index.html.twig', array());
    }
}