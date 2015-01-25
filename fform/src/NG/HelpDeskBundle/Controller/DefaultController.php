<?php

namespace NG\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    
    /**
     * @Route("/", name="ng_help_desk_homepage")
     */
    public function indexAction()
    {
        return $this->render('NGHelpDeskBundle:Default:index.html.twig', array());
    }
}
