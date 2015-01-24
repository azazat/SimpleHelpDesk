<?php

/* AcmeAuthBundle:Default:success.html.twig */
class __TwigTemplate_0bbc87ac8467746c574df96d30f5c48cd8993c032b57c1ba97cd98c4047a6f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "\t
\t
\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("acme_auth_homepage");
        echo "\">Back</a>
\t<br>
\t<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("download");
        echo "\">Download some file</a>";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<h1>Thank you    ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "  !</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeAuthBundle:Default:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  36 => 1,  31 => 8,  26 => 6,  22 => 4,  20 => 1,);
    }
}
