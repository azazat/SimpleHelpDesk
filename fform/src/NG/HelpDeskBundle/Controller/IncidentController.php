<?php

namespace NG\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class IncidentController extends Controller
{
    
    /**
     * @Route("/incident", name="incident_my")
     */
    public function incidentMyAction()
    {
        return $this->render('NGHelpDeskBundle:Incident:incident_my.html.twig', array());
    }
}
