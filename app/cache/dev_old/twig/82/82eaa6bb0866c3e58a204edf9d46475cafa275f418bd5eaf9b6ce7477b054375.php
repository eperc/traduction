<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c8a9104da7fa9423292f397731efd4c3732024b372c169224c84e7851e86250b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_072a279045238ad356b7a0e016bca0948168479427cc78650854e5204fc397c8 = $this->env->getExtension("native_profiler");
        $__internal_072a279045238ad356b7a0e016bca0948168479427cc78650854e5204fc397c8->enter($__internal_072a279045238ad356b7a0e016bca0948168479427cc78650854e5204fc397c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_072a279045238ad356b7a0e016bca0948168479427cc78650854e5204fc397c8->leave($__internal_072a279045238ad356b7a0e016bca0948168479427cc78650854e5204fc397c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70659bf67defc92c429451e31e68771b37fb95d793df5bf2a8345ff54c453843 = $this->env->getExtension("native_profiler");
        $__internal_70659bf67defc92c429451e31e68771b37fb95d793df5bf2a8345ff54c453843->enter($__internal_70659bf67defc92c429451e31e68771b37fb95d793df5bf2a8345ff54c453843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_70659bf67defc92c429451e31e68771b37fb95d793df5bf2a8345ff54c453843->leave($__internal_70659bf67defc92c429451e31e68771b37fb95d793df5bf2a8345ff54c453843_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
