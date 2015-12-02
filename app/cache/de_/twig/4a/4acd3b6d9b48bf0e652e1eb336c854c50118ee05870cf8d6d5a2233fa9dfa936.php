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
        $__internal_efb89abfc182c01dcef385b84fd1d8643f8b0972ca740abdfdb313f20c937f8d = $this->env->getExtension("native_profiler");
        $__internal_efb89abfc182c01dcef385b84fd1d8643f8b0972ca740abdfdb313f20c937f8d->enter($__internal_efb89abfc182c01dcef385b84fd1d8643f8b0972ca740abdfdb313f20c937f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb89abfc182c01dcef385b84fd1d8643f8b0972ca740abdfdb313f20c937f8d->leave($__internal_efb89abfc182c01dcef385b84fd1d8643f8b0972ca740abdfdb313f20c937f8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de585f01005e9bc217b2e4ca038f9818d70d94bf5ddf26d2684b29d31cd6f469 = $this->env->getExtension("native_profiler");
        $__internal_de585f01005e9bc217b2e4ca038f9818d70d94bf5ddf26d2684b29d31cd6f469->enter($__internal_de585f01005e9bc217b2e4ca038f9818d70d94bf5ddf26d2684b29d31cd6f469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_de585f01005e9bc217b2e4ca038f9818d70d94bf5ddf26d2684b29d31cd6f469->leave($__internal_de585f01005e9bc217b2e4ca038f9818d70d94bf5ddf26d2684b29d31cd6f469_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea3c39cc0c7a81e240df80ebb1871cd4220e10a2e1d9889f9cac7fe64e1abb1d = $this->env->getExtension("native_profiler");
        $__internal_ea3c39cc0c7a81e240df80ebb1871cd4220e10a2e1d9889f9cac7fe64e1abb1d->enter($__internal_ea3c39cc0c7a81e240df80ebb1871cd4220e10a2e1d9889f9cac7fe64e1abb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ea3c39cc0c7a81e240df80ebb1871cd4220e10a2e1d9889f9cac7fe64e1abb1d->leave($__internal_ea3c39cc0c7a81e240df80ebb1871cd4220e10a2e1d9889f9cac7fe64e1abb1d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ade4ea390998ed63bc116f3439e08e6a171419036369230427c6326dba3865b8 = $this->env->getExtension("native_profiler");
        $__internal_ade4ea390998ed63bc116f3439e08e6a171419036369230427c6326dba3865b8->enter($__internal_ade4ea390998ed63bc116f3439e08e6a171419036369230427c6326dba3865b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ade4ea390998ed63bc116f3439e08e6a171419036369230427c6326dba3865b8->leave($__internal_ade4ea390998ed63bc116f3439e08e6a171419036369230427c6326dba3865b8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_55e647e2f36626de42aa1656474543f1bcf14003970f4cb598bf1d3d0170dabf = $this->env->getExtension("native_profiler");
        $__internal_55e647e2f36626de42aa1656474543f1bcf14003970f4cb598bf1d3d0170dabf->enter($__internal_55e647e2f36626de42aa1656474543f1bcf14003970f4cb598bf1d3d0170dabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_55e647e2f36626de42aa1656474543f1bcf14003970f4cb598bf1d3d0170dabf->leave($__internal_55e647e2f36626de42aa1656474543f1bcf14003970f4cb598bf1d3d0170dabf_prof);

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
