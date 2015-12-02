<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_260c3da478bdc6a6235e1096b082a8d89bb1c99219b3af75a53a826bf3394653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5183fd526d6fb2d940b1d9efde8f8a03cad67b16bff732241ab245d3be016cd6 = $this->env->getExtension("native_profiler");
        $__internal_5183fd526d6fb2d940b1d9efde8f8a03cad67b16bff732241ab245d3be016cd6->enter($__internal_5183fd526d6fb2d940b1d9efde8f8a03cad67b16bff732241ab245d3be016cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5183fd526d6fb2d940b1d9efde8f8a03cad67b16bff732241ab245d3be016cd6->leave($__internal_5183fd526d6fb2d940b1d9efde8f8a03cad67b16bff732241ab245d3be016cd6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca1cce490bdd71e3918b5863f1df610ca7ef2db6fe6abba494be0dbbe80da65a = $this->env->getExtension("native_profiler");
        $__internal_ca1cce490bdd71e3918b5863f1df610ca7ef2db6fe6abba494be0dbbe80da65a->enter($__internal_ca1cce490bdd71e3918b5863f1df610ca7ef2db6fe6abba494be0dbbe80da65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ca1cce490bdd71e3918b5863f1df610ca7ef2db6fe6abba494be0dbbe80da65a->leave($__internal_ca1cce490bdd71e3918b5863f1df610ca7ef2db6fe6abba494be0dbbe80da65a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c47a6b79fa03b88a4f6fad3addfd5fc31d55c4f4d64741fee18abfcb728b3b38 = $this->env->getExtension("native_profiler");
        $__internal_c47a6b79fa03b88a4f6fad3addfd5fc31d55c4f4d64741fee18abfcb728b3b38->enter($__internal_c47a6b79fa03b88a4f6fad3addfd5fc31d55c4f4d64741fee18abfcb728b3b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c47a6b79fa03b88a4f6fad3addfd5fc31d55c4f4d64741fee18abfcb728b3b38->leave($__internal_c47a6b79fa03b88a4f6fad3addfd5fc31d55c4f4d64741fee18abfcb728b3b38_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_241765207a2bf0f4ce5c5ac202ef7795a38807fdf39d5a1a93aedc624cecdabd = $this->env->getExtension("native_profiler");
        $__internal_241765207a2bf0f4ce5c5ac202ef7795a38807fdf39d5a1a93aedc624cecdabd->enter($__internal_241765207a2bf0f4ce5c5ac202ef7795a38807fdf39d5a1a93aedc624cecdabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_241765207a2bf0f4ce5c5ac202ef7795a38807fdf39d5a1a93aedc624cecdabd->leave($__internal_241765207a2bf0f4ce5c5ac202ef7795a38807fdf39d5a1a93aedc624cecdabd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c08e2faea028e4b4d3878390f4005d499024a0323ce2689495f3e6cda967a5b2 = $this->env->getExtension("native_profiler");
        $__internal_c08e2faea028e4b4d3878390f4005d499024a0323ce2689495f3e6cda967a5b2->enter($__internal_c08e2faea028e4b4d3878390f4005d499024a0323ce2689495f3e6cda967a5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c08e2faea028e4b4d3878390f4005d499024a0323ce2689495f3e6cda967a5b2->leave($__internal_c08e2faea028e4b4d3878390f4005d499024a0323ce2689495f3e6cda967a5b2_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
