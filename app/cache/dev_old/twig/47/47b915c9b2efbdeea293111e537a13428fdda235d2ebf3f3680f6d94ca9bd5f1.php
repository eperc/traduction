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
        $__internal_0bf09144e4b0ad6a67a7d824db9e0322941f563556ead4244f61825e304e33b4 = $this->env->getExtension("native_profiler");
        $__internal_0bf09144e4b0ad6a67a7d824db9e0322941f563556ead4244f61825e304e33b4->enter($__internal_0bf09144e4b0ad6a67a7d824db9e0322941f563556ead4244f61825e304e33b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf09144e4b0ad6a67a7d824db9e0322941f563556ead4244f61825e304e33b4->leave($__internal_0bf09144e4b0ad6a67a7d824db9e0322941f563556ead4244f61825e304e33b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eebf43ca305be8b964fabc1f4b3fa46c57973cde2253efc503be248db68d076c = $this->env->getExtension("native_profiler");
        $__internal_eebf43ca305be8b964fabc1f4b3fa46c57973cde2253efc503be248db68d076c->enter($__internal_eebf43ca305be8b964fabc1f4b3fa46c57973cde2253efc503be248db68d076c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_eebf43ca305be8b964fabc1f4b3fa46c57973cde2253efc503be248db68d076c->leave($__internal_eebf43ca305be8b964fabc1f4b3fa46c57973cde2253efc503be248db68d076c_prof);

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
