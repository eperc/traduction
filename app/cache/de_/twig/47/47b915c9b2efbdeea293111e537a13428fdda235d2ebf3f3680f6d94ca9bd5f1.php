<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_20091de63316c3b075aa050e3dae452f352ccc898326276d831e40ab70b416bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_0de686d6d56a14a36c027afbe9563a61841d7bff19854697ce8fe6b668d8e5a3 = $this->env->getExtension("native_profiler");
        $__internal_0de686d6d56a14a36c027afbe9563a61841d7bff19854697ce8fe6b668d8e5a3->enter($__internal_0de686d6d56a14a36c027afbe9563a61841d7bff19854697ce8fe6b668d8e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0de686d6d56a14a36c027afbe9563a61841d7bff19854697ce8fe6b668d8e5a3->leave($__internal_0de686d6d56a14a36c027afbe9563a61841d7bff19854697ce8fe6b668d8e5a3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a16efa2afbf02c768169b920e655e9063da86f262c4b457e682f687ab9bc9a7b = $this->env->getExtension("native_profiler");
        $__internal_a16efa2afbf02c768169b920e655e9063da86f262c4b457e682f687ab9bc9a7b->enter($__internal_a16efa2afbf02c768169b920e655e9063da86f262c4b457e682f687ab9bc9a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a16efa2afbf02c768169b920e655e9063da86f262c4b457e682f687ab9bc9a7b->leave($__internal_a16efa2afbf02c768169b920e655e9063da86f262c4b457e682f687ab9bc9a7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
