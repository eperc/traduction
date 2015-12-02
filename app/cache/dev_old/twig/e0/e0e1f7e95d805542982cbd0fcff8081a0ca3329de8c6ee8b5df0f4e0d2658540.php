<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_13368ac010697c0340e3a3adff3033a5ea5ad9b00adc1dd65332417cb44a36e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_115c6ecf8aebe4ae56ed84244a572c375dff918a9366a296d3b4a0828ea53763 = $this->env->getExtension("native_profiler");
        $__internal_115c6ecf8aebe4ae56ed84244a572c375dff918a9366a296d3b4a0828ea53763->enter($__internal_115c6ecf8aebe4ae56ed84244a572c375dff918a9366a296d3b4a0828ea53763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_115c6ecf8aebe4ae56ed84244a572c375dff918a9366a296d3b4a0828ea53763->leave($__internal_115c6ecf8aebe4ae56ed84244a572c375dff918a9366a296d3b4a0828ea53763_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_291dfadf4aa2efaab339c67a2d93b04d144b845377344b4e235a42d644798593 = $this->env->getExtension("native_profiler");
        $__internal_291dfadf4aa2efaab339c67a2d93b04d144b845377344b4e235a42d644798593->enter($__internal_291dfadf4aa2efaab339c67a2d93b04d144b845377344b4e235a42d644798593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_291dfadf4aa2efaab339c67a2d93b04d144b845377344b4e235a42d644798593->leave($__internal_291dfadf4aa2efaab339c67a2d93b04d144b845377344b4e235a42d644798593_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
