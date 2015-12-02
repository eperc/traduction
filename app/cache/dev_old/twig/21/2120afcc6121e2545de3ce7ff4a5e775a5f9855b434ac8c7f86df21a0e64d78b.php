<?php

/* UserTranslatorBundle:Translation:index.html.twig */
class __TwigTemplate_7ea7aae3edf94ff6d3a53bfeff41ea731d595137e580caa1445ebba5c73c28f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserTranslatorBundle:Translation:index.html.twig", 1);
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
        $__internal_d8a05873c325b870df91188fbc3dd6a26f8c8b5b9ab4e679c5bb008b0e1e46c1 = $this->env->getExtension("native_profiler");
        $__internal_d8a05873c325b870df91188fbc3dd6a26f8c8b5b9ab4e679c5bb008b0e1e46c1->enter($__internal_d8a05873c325b870df91188fbc3dd6a26f8c8b5b9ab4e679c5bb008b0e1e46c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserTranslatorBundle:Translation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a05873c325b870df91188fbc3dd6a26f8c8b5b9ab4e679c5bb008b0e1e46c1->leave($__internal_d8a05873c325b870df91188fbc3dd6a26f8c8b5b9ab4e679c5bb008b0e1e46c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3aa7469bbda1213a6ffceff75ac54cd742fa3e8cb4e794600bc421ce4efd58c = $this->env->getExtension("native_profiler");
        $__internal_d3aa7469bbda1213a6ffceff75ac54cd742fa3e8cb4e794600bc421ce4efd58c->enter($__internal_d3aa7469bbda1213a6ffceff75ac54cd742fa3e8cb4e794600bc421ce4efd58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserTranslatorBundle:Translation:index";
        
        $__internal_d3aa7469bbda1213a6ffceff75ac54cd742fa3e8cb4e794600bc421ce4efd58c->leave($__internal_d3aa7469bbda1213a6ffceff75ac54cd742fa3e8cb4e794600bc421ce4efd58c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_757e416400966a52c31631857f5d3be807cf7156d17eefc83229e80621a5ed9f = $this->env->getExtension("native_profiler");
        $__internal_757e416400966a52c31631857f5d3be807cf7156d17eefc83229e80621a5ed9f->enter($__internal_757e416400966a52c31631857f5d3be807cf7156d17eefc83229e80621a5ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translation:index page</h1>
";
        
        $__internal_757e416400966a52c31631857f5d3be807cf7156d17eefc83229e80621a5ed9f->leave($__internal_757e416400966a52c31631857f5d3be807cf7156d17eefc83229e80621a5ed9f_prof);

    }

    public function getTemplateName()
    {
        return "UserTranslatorBundle:Translation:index.html.twig";
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
/* {% block title %}UserTranslatorBundle:Translation:index{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translation:index page</h1>*/
/* {% endblock %}*/
/* */
