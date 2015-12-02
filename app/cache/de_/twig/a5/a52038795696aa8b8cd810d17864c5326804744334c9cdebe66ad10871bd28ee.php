<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_20a8b0c286b74364fa382cf4ca7d803875f9395cf73d2db2fcb1377699a2ffa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b65b3c8403a8dab1f0f70b409e0963f7417765238954b6aed94735660e6480f2 = $this->env->getExtension("native_profiler");
        $__internal_b65b3c8403a8dab1f0f70b409e0963f7417765238954b6aed94735660e6480f2->enter($__internal_b65b3c8403a8dab1f0f70b409e0963f7417765238954b6aed94735660e6480f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b65b3c8403a8dab1f0f70b409e0963f7417765238954b6aed94735660e6480f2->leave($__internal_b65b3c8403a8dab1f0f70b409e0963f7417765238954b6aed94735660e6480f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8e4145c351ddd9f6039d92da6435dd5f57f0006f847e54ce6b6d6477f66498a = $this->env->getExtension("native_profiler");
        $__internal_f8e4145c351ddd9f6039d92da6435dd5f57f0006f847e54ce6b6d6477f66498a->enter($__internal_f8e4145c351ddd9f6039d92da6435dd5f57f0006f847e54ce6b6d6477f66498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f8e4145c351ddd9f6039d92da6435dd5f57f0006f847e54ce6b6d6477f66498a->leave($__internal_f8e4145c351ddd9f6039d92da6435dd5f57f0006f847e54ce6b6d6477f66498a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
