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
        $__internal_328b2d681cab23adff81f28100afe38fc6433b6d33833d7d8a9863e49b429c5a = $this->env->getExtension("native_profiler");
        $__internal_328b2d681cab23adff81f28100afe38fc6433b6d33833d7d8a9863e49b429c5a->enter($__internal_328b2d681cab23adff81f28100afe38fc6433b6d33833d7d8a9863e49b429c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328b2d681cab23adff81f28100afe38fc6433b6d33833d7d8a9863e49b429c5a->leave($__internal_328b2d681cab23adff81f28100afe38fc6433b6d33833d7d8a9863e49b429c5a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_bd2649e4cebea47078a86a49dd485e809b87624ec4ac16ee745d06779042e38b = $this->env->getExtension("native_profiler");
        $__internal_bd2649e4cebea47078a86a49dd485e809b87624ec4ac16ee745d06779042e38b->enter($__internal_bd2649e4cebea47078a86a49dd485e809b87624ec4ac16ee745d06779042e38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 8
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("@UserAdminBundle/Resources/public/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_bd2649e4cebea47078a86a49dd485e809b87624ec4ac16ee745d06779042e38b->leave($__internal_bd2649e4cebea47078a86a49dd485e809b87624ec4ac16ee745d06779042e38b_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7be36034f486a88f32c968e31e34a3a3f9438bd7d83ca9d19e8581fae382ab3 = $this->env->getExtension("native_profiler");
        $__internal_c7be36034f486a88f32c968e31e34a3a3f9438bd7d83ca9d19e8581fae382ab3->enter($__internal_c7be36034f486a88f32c968e31e34a3a3f9438bd7d83ca9d19e8581fae382ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_c7be36034f486a88f32c968e31e34a3a3f9438bd7d83ca9d19e8581fae382ab3->leave($__internal_c7be36034f486a88f32c968e31e34a3a3f9438bd7d83ca9d19e8581fae382ab3_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6b538bb9d5922a4474c63d7f937dda61adac487030ea2f82297f0580d11a842 = $this->env->getExtension("native_profiler");
        $__internal_a6b538bb9d5922a4474c63d7f937dda61adac487030ea2f82297f0580d11a842->enter($__internal_a6b538bb9d5922a4474c63d7f937dda61adac487030ea2f82297f0580d11a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t";
        echo twig_include($this->env, $context, "UserAdminBundle:layout:header.html.twig");
        echo "
\t";
        // line 15
        echo twig_include($this->env, $context, "UserAdminBundle:layout:sidebar.html.twig");
        echo "

\t<div class=\"content container\">
\t";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "\t</div>
";
        
        $__internal_a6b538bb9d5922a4474c63d7f937dda61adac487030ea2f82297f0580d11a842->leave($__internal_a6b538bb9d5922a4474c63d7f937dda61adac487030ea2f82297f0580d11a842_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_89a1ed9cfa1cb928d5b1009266fdde889f3615f385dae705ce7b83032ff640b1 = $this->env->getExtension("native_profiler");
        $__internal_89a1ed9cfa1cb928d5b1009266fdde889f3615f385dae705ce7b83032ff640b1->enter($__internal_89a1ed9cfa1cb928d5b1009266fdde889f3615f385dae705ce7b83032ff640b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
\t";
        
        $__internal_89a1ed9cfa1cb928d5b1009266fdde889f3615f385dae705ce7b83032ff640b1->leave($__internal_89a1ed9cfa1cb928d5b1009266fdde889f3615f385dae705ce7b83032ff640b1_prof);

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
        return array (  121 => 19,  115 => 18,  107 => 21,  105 => 18,  99 => 15,  94 => 14,  88 => 13,  76 => 11,  66 => 8,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block header %}*/
/*     {{ parent() }}*/
/*     {% stylesheets '@UserAdminBundle/Resources/public/css/*' filter="cssrewrite" %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     <link href="{{ asset('@UserAdminBundle/Resources/public/css/layout.css') }}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block title %}Admin{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ include('UserAdminBundle:layout:header.html.twig') }}*/
/* 	{{ include('UserAdminBundle:layout:sidebar.html.twig') }}*/
/* */
/* 	<div class="content container">*/
/* 	{% block content %}*/
/* */
/* 	{% endblock %}*/
/* 	</div>*/
/* {% endblock %}*/
