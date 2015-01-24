<?php

/* AcmeAuthBundle:Default:index.html.twig */
class __TwigTemplate_42825fbac28a20a983e7578064d67a0d96351a0b18fcf2d4e3b07021369f69c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        // line 2
        echo " <h1>Welcome to Symfony!</h1>
 <h2>Hello !</h2>
 
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("acme_auth_homepage");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
\t
\t

</form>
";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "AcmeAuthBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 7,  33 => 6,  27 => 5,  22 => 2,  20 => 1,);
    }
}
