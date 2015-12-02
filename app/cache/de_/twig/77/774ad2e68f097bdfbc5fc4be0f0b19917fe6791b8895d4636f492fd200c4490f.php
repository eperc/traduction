<?php

/* UserAdminBundle:Translator:show.html.twig */
class __TwigTemplate_67ddaeffa69366c754a5952c9074fe40f6161b2fdfbb1e8e4e79ebbb6e555e9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Translator:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8267de4ccd0333b379f4201676f371c9845bb9804ff75ff1d87449916259f14f = $this->env->getExtension("native_profiler");
        $__internal_8267de4ccd0333b379f4201676f371c9845bb9804ff75ff1d87449916259f14f->enter($__internal_8267de4ccd0333b379f4201676f371c9845bb9804ff75ff1d87449916259f14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Translator:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8267de4ccd0333b379f4201676f371c9845bb9804ff75ff1d87449916259f14f->leave($__internal_8267de4ccd0333b379f4201676f371c9845bb9804ff75ff1d87449916259f14f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56910b309e4e9b8422a878ca2932eca6ce14ddc0d1386a82b6dbf0c6906768e8 = $this->env->getExtension("native_profiler");
        $__internal_56910b309e4e9b8422a878ca2932eca6ce14ddc0d1386a82b6dbf0c6906768e8->enter($__internal_56910b309e4e9b8422a878ca2932eca6ce14ddc0d1386a82b6dbf0c6906768e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Translator:show";
        
        $__internal_56910b309e4e9b8422a878ca2932eca6ce14ddc0d1386a82b6dbf0c6906768e8->leave($__internal_56910b309e4e9b8422a878ca2932eca6ce14ddc0d1386a82b6dbf0c6906768e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d910a4068eec24c877e48e69473774a1594c5f732eef48af349d1198079d559 = $this->env->getExtension("native_profiler");
        $__internal_2d910a4068eec24c877e48e69473774a1594c5f732eef48af349d1198079d559->enter($__internal_2d910a4068eec24c877e48e69473774a1594c5f732eef48af349d1198079d559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translator:show page</h1>
";
        
        $__internal_2d910a4068eec24c877e48e69473774a1594c5f732eef48af349d1198079d559->leave($__internal_2d910a4068eec24c877e48e69473774a1594c5f732eef48af349d1198079d559_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Translator:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}UserAdminBundle:Translator:show{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translator:show page</h1>*/
/* {% endblock %}*/
/* */
