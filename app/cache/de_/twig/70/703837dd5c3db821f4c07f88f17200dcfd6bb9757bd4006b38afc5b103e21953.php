<?php

/* UserAdminBundle:layout:layout.html.twig */
class __TwigTemplate_242ef098768d01dd47bebaec38ce551a63697ce3e7c6e06699400ebd96f6299a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:layout:layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_764db69afebbaa9f136ba4131f247ef2bb1339a01b01730a5a3f7b996d345620 = $this->env->getExtension("native_profiler");
        $__internal_764db69afebbaa9f136ba4131f247ef2bb1339a01b01730a5a3f7b996d345620->enter($__internal_764db69afebbaa9f136ba4131f247ef2bb1339a01b01730a5a3f7b996d345620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_764db69afebbaa9f136ba4131f247ef2bb1339a01b01730a5a3f7b996d345620->leave($__internal_764db69afebbaa9f136ba4131f247ef2bb1339a01b01730a5a3f7b996d345620_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_e379e79fedefc02ac456228f85a8f59d3fd3e5312096cf7b48a81b39cf751945 = $this->env->getExtension("native_profiler");
        $__internal_e379e79fedefc02ac456228f85a8f59d3fd3e5312096cf7b48a81b39cf751945->enter($__internal_e379e79fedefc02ac456228f85a8f59d3fd3e5312096cf7b48a81b39cf751945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bfd306e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bfd306e_0") : $this->env->getExtension('asset')->getAssetUrl("css/bfd306e_part_1_layout_1.css");
            // line 6
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "bfd306e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bfd306e") : $this->env->getExtension('asset')->getAssetUrl("css/bfd306e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_e379e79fedefc02ac456228f85a8f59d3fd3e5312096cf7b48a81b39cf751945->leave($__internal_e379e79fedefc02ac456228f85a8f59d3fd3e5312096cf7b48a81b39cf751945_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_59395aa0d361165a49479b9ae0e8d2f4892c9e09cb6013d2b9ad3956bfb2eb2a = $this->env->getExtension("native_profiler");
        $__internal_59395aa0d361165a49479b9ae0e8d2f4892c9e09cb6013d2b9ad3956bfb2eb2a->enter($__internal_59395aa0d361165a49479b9ae0e8d2f4892c9e09cb6013d2b9ad3956bfb2eb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_59395aa0d361165a49479b9ae0e8d2f4892c9e09cb6013d2b9ad3956bfb2eb2a->leave($__internal_59395aa0d361165a49479b9ae0e8d2f4892c9e09cb6013d2b9ad3956bfb2eb2a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e29b096498205b6b32393f0547bfc1b0d6e3cb0ec5374812c6e4f4741c90133 = $this->env->getExtension("native_profiler");
        $__internal_3e29b096498205b6b32393f0547bfc1b0d6e3cb0ec5374812c6e4f4741c90133->enter($__internal_3e29b096498205b6b32393f0547bfc1b0d6e3cb0ec5374812c6e4f4741c90133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t";
        echo twig_include($this->env, $context, "UserAdminBundle:layout:header.html.twig");
        echo "
\t";
        // line 14
        echo twig_include($this->env, $context, "UserAdminBundle:layout:sidebar.html.twig");
        echo "

\t<div class=\"content\">
\t";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "\t</div>
";
        
        $__internal_3e29b096498205b6b32393f0547bfc1b0d6e3cb0ec5374812c6e4f4741c90133->leave($__internal_3e29b096498205b6b32393f0547bfc1b0d6e3cb0ec5374812c6e4f4741c90133_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_865546c221d301ac2de93530be72fc6dd8874ee66af0284709ca9b19df6af27a = $this->env->getExtension("native_profiler");
        $__internal_865546c221d301ac2de93530be72fc6dd8874ee66af0284709ca9b19df6af27a->enter($__internal_865546c221d301ac2de93530be72fc6dd8874ee66af0284709ca9b19df6af27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
\t";
        
        $__internal_865546c221d301ac2de93530be72fc6dd8874ee66af0284709ca9b19df6af27a->leave($__internal_865546c221d301ac2de93530be72fc6dd8874ee66af0284709ca9b19df6af27a_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 18,  110 => 17,  102 => 20,  100 => 17,  94 => 14,  89 => 13,  83 => 12,  71 => 10,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block header %}*/
/*     {{ parent() }}*/
/*     {% stylesheets '@UserAdminBundle/Resources/public/css/*' filter="cssrewrite" %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block title %}Admin{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ include('UserAdminBundle:layout:header.html.twig') }}*/
/* 	{{ include('UserAdminBundle:layout:sidebar.html.twig') }}*/
/* */
/* 	<div class="content">*/
/* 	{% block content %}*/
/* */
/* 	{% endblock %}*/
/* 	</div>*/
/* {% endblock %}*/
