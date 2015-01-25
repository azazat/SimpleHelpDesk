<?php

/* NGHelpDeskBundle:Default:index.html.twig */
class __TwigTemplate_7c641a6d1cdd6bea02187abd9b591ff9fb200505ee1f8b313f407cd5331528ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>1st page</h1>
<br>


<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("incident_my");
        echo "\">Incident_list</a>
\t<br>";
    }

    public function getTemplateName()
    {
        return "NGHelpDeskBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
