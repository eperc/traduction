<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c8a9104da7fa9423292f397731efd4c3732024b372c169224c84e7851e86250b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_839a3dd7ab95de5fa3e8819d355764bccadbe501018a4b46fc414070038b34f0 = $this->env->getExtension("native_profiler");
        $__internal_839a3dd7ab95de5fa3e8819d355764bccadbe501018a4b46fc414070038b34f0->enter($__internal_839a3dd7ab95de5fa3e8819d355764bccadbe501018a4b46fc414070038b34f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_839a3dd7ab95de5fa3e8819d355764bccadbe501018a4b46fc414070038b34f0->leave($__internal_839a3dd7ab95de5fa3e8819d355764bccadbe501018a4b46fc414070038b34f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1da0e50312b9854782e3580ec8e98b26dca13c725dc4d74d53865df41d63fa0d = $this->env->getExtension("native_profiler");
        $__internal_1da0e50312b9854782e3580ec8e98b26dca13c725dc4d74d53865df41d63fa0d->enter($__internal_1da0e50312b9854782e3580ec8e98b26dca13c725dc4d74d53865df41d63fa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1da0e50312b9854782e3580ec8e98b26dca13c725dc4d74d53865df41d63fa0d->leave($__internal_1da0e50312b9854782e3580ec8e98b26dca13c725dc4d74d53865df41d63fa0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
