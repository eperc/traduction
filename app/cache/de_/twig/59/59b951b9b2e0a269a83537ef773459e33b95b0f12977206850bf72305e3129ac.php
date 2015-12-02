<?php

/* UserAdminBundle:Client:edit.html.twig */
class __TwigTemplate_c1ccafef292ea6bb1757c1ad032ebeaa539303fa8d3d50f709464ea7e6529ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Client:edit.html.twig", 1);
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
        $__internal_cd2d0b0fcbe9923d1735742293c87ac5fe7570f9e824e3dddb97eeb9c622be4b = $this->env->getExtension("native_profiler");
        $__internal_cd2d0b0fcbe9923d1735742293c87ac5fe7570f9e824e3dddb97eeb9c622be4b->enter($__internal_cd2d0b0fcbe9923d1735742293c87ac5fe7570f9e824e3dddb97eeb9c622be4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2d0b0fcbe9923d1735742293c87ac5fe7570f9e824e3dddb97eeb9c622be4b->leave($__internal_cd2d0b0fcbe9923d1735742293c87ac5fe7570f9e824e3dddb97eeb9c622be4b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a21f3cce22ff728c14016f4737cde3535e8d8e0c12054c259d43ed00932d9f00 = $this->env->getExtension("native_profiler");
        $__internal_a21f3cce22ff728c14016f4737cde3535e8d8e0c12054c259d43ed00932d9f00->enter($__internal_a21f3cce22ff728c14016f4737cde3535e8d8e0c12054c259d43ed00932d9f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Client:edit";
        
        $__internal_a21f3cce22ff728c14016f4737cde3535e8d8e0c12054c259d43ed00932d9f00->leave($__internal_a21f3cce22ff728c14016f4737cde3535e8d8e0c12054c259d43ed00932d9f00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bc4df90051bf830d7b4718d13dadaa4b9e6998ea4808011e561cb290041e494 = $this->env->getExtension("native_profiler");
        $__internal_9bc4df90051bf830d7b4718d13dadaa4b9e6998ea4808011e561cb290041e494->enter($__internal_9bc4df90051bf830d7b4718d13dadaa4b9e6998ea4808011e561cb290041e494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Client:edit page</h1>
";
        
        $__internal_9bc4df90051bf830d7b4718d13dadaa4b9e6998ea4808011e561cb290041e494->leave($__internal_9bc4df90051bf830d7b4718d13dadaa4b9e6998ea4808011e561cb290041e494_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Client:edit.html.twig";
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
/* {% block title %}UserAdminBundle:Client:edit{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Client:edit page</h1>*/
/* {% endblock %}*/
/* */
