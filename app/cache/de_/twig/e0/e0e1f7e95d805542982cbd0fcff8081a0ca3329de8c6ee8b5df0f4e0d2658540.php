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
        $__internal_f09eaadf62b20a202ea28d1f08b3bb13dc7afc97b35a3467343a846c4ffbd316 = $this->env->getExtension("native_profiler");
        $__internal_f09eaadf62b20a202ea28d1f08b3bb13dc7afc97b35a3467343a846c4ffbd316->enter($__internal_f09eaadf62b20a202ea28d1f08b3bb13dc7afc97b35a3467343a846c4ffbd316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f09eaadf62b20a202ea28d1f08b3bb13dc7afc97b35a3467343a846c4ffbd316->leave($__internal_f09eaadf62b20a202ea28d1f08b3bb13dc7afc97b35a3467343a846c4ffbd316_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f720f937ec9f124e482672c1d9375ac021de5e0155c65833f6fdc5cbb1fcd9d0 = $this->env->getExtension("native_profiler");
        $__internal_f720f937ec9f124e482672c1d9375ac021de5e0155c65833f6fdc5cbb1fcd9d0->enter($__internal_f720f937ec9f124e482672c1d9375ac021de5e0155c65833f6fdc5cbb1fcd9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f720f937ec9f124e482672c1d9375ac021de5e0155c65833f6fdc5cbb1fcd9d0->leave($__internal_f720f937ec9f124e482672c1d9375ac021de5e0155c65833f6fdc5cbb1fcd9d0_prof);

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
