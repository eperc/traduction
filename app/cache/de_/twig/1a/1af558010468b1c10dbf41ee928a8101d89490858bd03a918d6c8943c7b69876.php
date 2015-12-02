<?php

/* UserAdminBundle:Translator:update.html.twig */
class __TwigTemplate_1e5e37e735ed85a844738d2c00fcb5c1ad2a45f5bff707932e81832ad261c2a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Translator:update.html.twig", 1);
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
        $__internal_971d5c761287ad98a55c74d035edb67262b1bf0aaecf21bf5c56dbe149df8e75 = $this->env->getExtension("native_profiler");
        $__internal_971d5c761287ad98a55c74d035edb67262b1bf0aaecf21bf5c56dbe149df8e75->enter($__internal_971d5c761287ad98a55c74d035edb67262b1bf0aaecf21bf5c56dbe149df8e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Translator:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971d5c761287ad98a55c74d035edb67262b1bf0aaecf21bf5c56dbe149df8e75->leave($__internal_971d5c761287ad98a55c74d035edb67262b1bf0aaecf21bf5c56dbe149df8e75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fde487ee5ec833d87fca94de2f5019dae6b392c41d1677ab3cb2c179fd481f9 = $this->env->getExtension("native_profiler");
        $__internal_7fde487ee5ec833d87fca94de2f5019dae6b392c41d1677ab3cb2c179fd481f9->enter($__internal_7fde487ee5ec833d87fca94de2f5019dae6b392c41d1677ab3cb2c179fd481f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Translator:update";
        
        $__internal_7fde487ee5ec833d87fca94de2f5019dae6b392c41d1677ab3cb2c179fd481f9->leave($__internal_7fde487ee5ec833d87fca94de2f5019dae6b392c41d1677ab3cb2c179fd481f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c109fec969c3d08576b419ea9e66f03eb9ea14c51e8b5d3876274851c7fb4be = $this->env->getExtension("native_profiler");
        $__internal_7c109fec969c3d08576b419ea9e66f03eb9ea14c51e8b5d3876274851c7fb4be->enter($__internal_7c109fec969c3d08576b419ea9e66f03eb9ea14c51e8b5d3876274851c7fb4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translator:update page</h1>
";
        
        $__internal_7c109fec969c3d08576b419ea9e66f03eb9ea14c51e8b5d3876274851c7fb4be->leave($__internal_7c109fec969c3d08576b419ea9e66f03eb9ea14c51e8b5d3876274851c7fb4be_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Translator:update.html.twig";
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
/* {% block title %}UserAdminBundle:Translator:update{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translator:update page</h1>*/
/* {% endblock %}*/
/* */
