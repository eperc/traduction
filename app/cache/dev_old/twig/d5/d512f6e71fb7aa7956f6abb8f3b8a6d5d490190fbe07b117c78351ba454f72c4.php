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
        $__internal_c8fd0444f882f8569a05cbcc5b4d51c2343e614ec28075396c54d917e792aad1 = $this->env->getExtension("native_profiler");
        $__internal_c8fd0444f882f8569a05cbcc5b4d51c2343e614ec28075396c54d917e792aad1->enter($__internal_c8fd0444f882f8569a05cbcc5b4d51c2343e614ec28075396c54d917e792aad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8fd0444f882f8569a05cbcc5b4d51c2343e614ec28075396c54d917e792aad1->leave($__internal_c8fd0444f882f8569a05cbcc5b4d51c2343e614ec28075396c54d917e792aad1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f0a2bbc2bd47b02c3f68c879de194f24140f4cb0ee2347bfe2656b419c28861 = $this->env->getExtension("native_profiler");
        $__internal_3f0a2bbc2bd47b02c3f68c879de194f24140f4cb0ee2347bfe2656b419c28861->enter($__internal_3f0a2bbc2bd47b02c3f68c879de194f24140f4cb0ee2347bfe2656b419c28861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3f0a2bbc2bd47b02c3f68c879de194f24140f4cb0ee2347bfe2656b419c28861->leave($__internal_3f0a2bbc2bd47b02c3f68c879de194f24140f4cb0ee2347bfe2656b419c28861_prof);

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
