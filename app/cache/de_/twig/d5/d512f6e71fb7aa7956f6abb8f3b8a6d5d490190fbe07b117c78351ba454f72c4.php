<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_7830af2a5876e502a2e0043775c26ccd95dafb5e19f0f0266c37190b03e886c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_222a39325ce9f40be7f76442b8a78f65ea4b688b3273b9cd9b89edb8741622ec = $this->env->getExtension("native_profiler");
        $__internal_222a39325ce9f40be7f76442b8a78f65ea4b688b3273b9cd9b89edb8741622ec->enter($__internal_222a39325ce9f40be7f76442b8a78f65ea4b688b3273b9cd9b89edb8741622ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222a39325ce9f40be7f76442b8a78f65ea4b688b3273b9cd9b89edb8741622ec->leave($__internal_222a39325ce9f40be7f76442b8a78f65ea4b688b3273b9cd9b89edb8741622ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea3ff45a2cc89e14c031a740094e69b0dd98568f8fde00c9d6c1438f304c6688 = $this->env->getExtension("native_profiler");
        $__internal_ea3ff45a2cc89e14c031a740094e69b0dd98568f8fde00c9d6c1438f304c6688->enter($__internal_ea3ff45a2cc89e14c031a740094e69b0dd98568f8fde00c9d6c1438f304c6688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ea3ff45a2cc89e14c031a740094e69b0dd98568f8fde00c9d6c1438f304c6688->leave($__internal_ea3ff45a2cc89e14c031a740094e69b0dd98568f8fde00c9d6c1438f304c6688_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
