<?php

/* UserAdminBundle:Admin:update.html.twig */
class __TwigTemplate_dfcc877bc899e7a7521cbee9d433dcb4b02a3b2ccc5c82a943e4f0f0108a106d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Admin:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b87c7d2ad2d1188434cddf78e4956244b72094c2e9712bc3f90d3eecdcae836 = $this->env->getExtension("native_profiler");
        $__internal_2b87c7d2ad2d1188434cddf78e4956244b72094c2e9712bc3f90d3eecdcae836->enter($__internal_2b87c7d2ad2d1188434cddf78e4956244b72094c2e9712bc3f90d3eecdcae836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Admin:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b87c7d2ad2d1188434cddf78e4956244b72094c2e9712bc3f90d3eecdcae836->leave($__internal_2b87c7d2ad2d1188434cddf78e4956244b72094c2e9712bc3f90d3eecdcae836_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5166788fc40105838869065471c132f05ec1523b0d0267fdca175b037cf9e6d = $this->env->getExtension("native_profiler");
        $__internal_d5166788fc40105838869065471c132f05ec1523b0d0267fdca175b037cf9e6d->enter($__internal_d5166788fc40105838869065471c132f05ec1523b0d0267fdca175b037cf9e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Admin:update";
        
        $__internal_d5166788fc40105838869065471c132f05ec1523b0d0267fdca175b037cf9e6d->leave($__internal_d5166788fc40105838869065471c132f05ec1523b0d0267fdca175b037cf9e6d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba9869a5411f9a5cff213959be172cf27a951d59dfa54194feaa973bbfc5004f = $this->env->getExtension("native_profiler");
        $__internal_ba9869a5411f9a5cff213959be172cf27a951d59dfa54194feaa973bbfc5004f->enter($__internal_ba9869a5411f9a5cff213959be172cf27a951d59dfa54194feaa973bbfc5004f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:update page</h1>
";
        
        $__internal_ba9869a5411f9a5cff213959be172cf27a951d59dfa54194feaa973bbfc5004f->leave($__internal_ba9869a5411f9a5cff213959be172cf27a951d59dfa54194feaa973bbfc5004f_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Admin:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}UserAdminBundle:Admin:update{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Admin:update page</h1>*/
/* {% endblock %}*/
/* */
