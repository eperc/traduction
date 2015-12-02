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
        $__internal_8cafb9c98ea9bfdde96b0c4e25730fa8d9b105f4b2ca52fa951ba28501ff5b46 = $this->env->getExtension("native_profiler");
        $__internal_8cafb9c98ea9bfdde96b0c4e25730fa8d9b105f4b2ca52fa951ba28501ff5b46->enter($__internal_8cafb9c98ea9bfdde96b0c4e25730fa8d9b105f4b2ca52fa951ba28501ff5b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cafb9c98ea9bfdde96b0c4e25730fa8d9b105f4b2ca52fa951ba28501ff5b46->leave($__internal_8cafb9c98ea9bfdde96b0c4e25730fa8d9b105f4b2ca52fa951ba28501ff5b46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d15d10c9ce925e1bb512bd84b67639de028b3f52a2a69263e6281979492cf70c = $this->env->getExtension("native_profiler");
        $__internal_d15d10c9ce925e1bb512bd84b67639de028b3f52a2a69263e6281979492cf70c->enter($__internal_d15d10c9ce925e1bb512bd84b67639de028b3f52a2a69263e6281979492cf70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d15d10c9ce925e1bb512bd84b67639de028b3f52a2a69263e6281979492cf70c->leave($__internal_d15d10c9ce925e1bb512bd84b67639de028b3f52a2a69263e6281979492cf70c_prof);

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
