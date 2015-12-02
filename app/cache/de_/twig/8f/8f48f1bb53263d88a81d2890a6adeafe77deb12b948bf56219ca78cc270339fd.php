<?php

/* UserAdminBundle:Admin:destroy.html.twig */
class __TwigTemplate_5160856c73752c25963d9370380fcd2d3f8e966c16a5b088c30c8d51f09874fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Admin:destroy.html.twig", 1);
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
        $__internal_a5c04446a14bc5fa248d454d39de82fb538f6381a85f5bbcf52df93acd434f78 = $this->env->getExtension("native_profiler");
        $__internal_a5c04446a14bc5fa248d454d39de82fb538f6381a85f5bbcf52df93acd434f78->enter($__internal_a5c04446a14bc5fa248d454d39de82fb538f6381a85f5bbcf52df93acd434f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Admin:destroy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c04446a14bc5fa248d454d39de82fb538f6381a85f5bbcf52df93acd434f78->leave($__internal_a5c04446a14bc5fa248d454d39de82fb538f6381a85f5bbcf52df93acd434f78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70e03aa2cee7b7d15de79b4db92b3095787815a3258ed7fe94da8e5820c59739 = $this->env->getExtension("native_profiler");
        $__internal_70e03aa2cee7b7d15de79b4db92b3095787815a3258ed7fe94da8e5820c59739->enter($__internal_70e03aa2cee7b7d15de79b4db92b3095787815a3258ed7fe94da8e5820c59739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Admin:destroy";
        
        $__internal_70e03aa2cee7b7d15de79b4db92b3095787815a3258ed7fe94da8e5820c59739->leave($__internal_70e03aa2cee7b7d15de79b4db92b3095787815a3258ed7fe94da8e5820c59739_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c98893889ec5f85d3e07e0b022c76718b7da7afd98f2f5a987e196819c6857b = $this->env->getExtension("native_profiler");
        $__internal_1c98893889ec5f85d3e07e0b022c76718b7da7afd98f2f5a987e196819c6857b->enter($__internal_1c98893889ec5f85d3e07e0b022c76718b7da7afd98f2f5a987e196819c6857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:destroy page</h1>
";
        
        $__internal_1c98893889ec5f85d3e07e0b022c76718b7da7afd98f2f5a987e196819c6857b->leave($__internal_1c98893889ec5f85d3e07e0b022c76718b7da7afd98f2f5a987e196819c6857b_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Admin:destroy.html.twig";
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
/* {% block title %}UserAdminBundle:Admin:destroy{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Admin:destroy page</h1>*/
/* {% endblock %}*/
/* */
