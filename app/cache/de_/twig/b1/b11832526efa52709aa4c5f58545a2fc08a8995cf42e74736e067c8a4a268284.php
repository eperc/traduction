<?php

/* UserAdminBundle:Admin:edit.html.twig */
class __TwigTemplate_c3146a0986482c7fcfc0d318f6b1f8734541278a29b31aa56ecc600e1192f73b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Admin:edit.html.twig", 1);
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
        $__internal_28748a058338699a332468d585a3d726449c4dd810b126f6977e20078b050d3d = $this->env->getExtension("native_profiler");
        $__internal_28748a058338699a332468d585a3d726449c4dd810b126f6977e20078b050d3d->enter($__internal_28748a058338699a332468d585a3d726449c4dd810b126f6977e20078b050d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Admin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28748a058338699a332468d585a3d726449c4dd810b126f6977e20078b050d3d->leave($__internal_28748a058338699a332468d585a3d726449c4dd810b126f6977e20078b050d3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdc5ef455606f6acd9ea588f1b7807adfb3e2c462c92e0109fc20e2ba58a89d2 = $this->env->getExtension("native_profiler");
        $__internal_cdc5ef455606f6acd9ea588f1b7807adfb3e2c462c92e0109fc20e2ba58a89d2->enter($__internal_cdc5ef455606f6acd9ea588f1b7807adfb3e2c462c92e0109fc20e2ba58a89d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Admin:edit";
        
        $__internal_cdc5ef455606f6acd9ea588f1b7807adfb3e2c462c92e0109fc20e2ba58a89d2->leave($__internal_cdc5ef455606f6acd9ea588f1b7807adfb3e2c462c92e0109fc20e2ba58a89d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f49e5590759fde5a93ec601fe954b6dfdaf33db8ec7ee33962f9f2608e149b58 = $this->env->getExtension("native_profiler");
        $__internal_f49e5590759fde5a93ec601fe954b6dfdaf33db8ec7ee33962f9f2608e149b58->enter($__internal_f49e5590759fde5a93ec601fe954b6dfdaf33db8ec7ee33962f9f2608e149b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:edit page</h1>
";
        
        $__internal_f49e5590759fde5a93ec601fe954b6dfdaf33db8ec7ee33962f9f2608e149b58->leave($__internal_f49e5590759fde5a93ec601fe954b6dfdaf33db8ec7ee33962f9f2608e149b58_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Admin:edit.html.twig";
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
/* {% block title %}UserAdminBundle:Admin:edit{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Admin:edit page</h1>*/
/* {% endblock %}*/
/* */
