<?php

namespace NG\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class IncidentController extends Controller
{
    public function incidentMyAction()
    {
        return $this->render('NGHelpDeskBundle:Incident:incident_my.html.twig', array());
    }
}
