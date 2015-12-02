<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_bdddec8145160f2279bcd81b36248f29ab370ca38b8266134c1abb514fdb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c8f998a27feacba38fb3a1106ed2903eb80de0286d1b0aa918ad876a6cb60fe8 = $this->env->getExtension("native_profiler");
        $__internal_c8f998a27feacba38fb3a1106ed2903eb80de0286d1b0aa918ad876a6cb60fe8->enter($__internal_c8f998a27feacba38fb3a1106ed2903eb80de0286d1b0aa918ad876a6cb60fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8f998a27feacba38fb3a1106ed2903eb80de0286d1b0aa918ad876a6cb60fe8->leave($__internal_c8f998a27feacba38fb3a1106ed2903eb80de0286d1b0aa918ad876a6cb60fe8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e294f25003a67c336db42ec4737f8c52f69df5620a9f670fd3abfd36c4192243 = $this->env->getExtension("native_profiler");
        $__internal_e294f25003a67c336db42ec4737f8c52f69df5620a9f670fd3abfd36c4192243->enter($__internal_e294f25003a67c336db42ec4737f8c52f69df5620a9f670fd3abfd36c4192243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e294f25003a67c336db42ec4737f8c52f69df5620a9f670fd3abfd36c4192243->leave($__internal_e294f25003a67c336db42ec4737f8c52f69df5620a9f670fd3abfd36c4192243_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
