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
        $__internal_05ac96c9dbf364fff96247ba8a15a293a5a923c5d9205a8cd71122bd617062ed = $this->env->getExtension("native_profiler");
        $__internal_05ac96c9dbf364fff96247ba8a15a293a5a923c5d9205a8cd71122bd617062ed->enter($__internal_05ac96c9dbf364fff96247ba8a15a293a5a923c5d9205a8cd71122bd617062ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ac96c9dbf364fff96247ba8a15a293a5a923c5d9205a8cd71122bd617062ed->leave($__internal_05ac96c9dbf364fff96247ba8a15a293a5a923c5d9205a8cd71122bd617062ed_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_64bb8f274e5b74e4b4265ce939d941ef3f25d6d53c528f051f434a4457f9303f = $this->env->getExtension("native_profiler");
        $__internal_64bb8f274e5b74e4b4265ce939d941ef3f25d6d53c528f051f434a4457f9303f->enter($__internal_64bb8f274e5b74e4b4265ce939d941ef3f25d6d53c528f051f434a4457f9303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bfd306e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bfd306e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/bfd306e_part_1_layout_1.css");
            // line 6
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "bfd306e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bfd306e") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/bfd306e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_64bb8f274e5b74e4b4265ce939d941ef3f25d6d53c528f051f434a4457f9303f->leave($__internal_64bb8f274e5b74e4b4265ce939d941ef3f25d6d53c528f051f434a4457f9303f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_69e99cc2d456879281fa2899568de06c243df66f35c33e06209dba5fc820334e = $this->env->getExtension("native_profiler");
        $__internal_69e99cc2d456879281fa2899568de06c243df66f35c33e06209dba5fc820334e->enter($__internal_69e99cc2d456879281fa2899568de06c243df66f35c33e06209dba5fc820334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_69e99cc2d456879281fa2899568de06c243df66f35c33e06209dba5fc820334e->leave($__internal_69e99cc2d456879281fa2899568de06c243df66f35c33e06209dba5fc820334e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_441ad776549c78b8b167bc4905b00cbd92a5b1a0846efd24a433ee438e6eebfb = $this->env->getExtension("native_profiler");
        $__internal_441ad776549c78b8b167bc4905b00cbd92a5b1a0846efd24a433ee438e6eebfb->enter($__internal_441ad776549c78b8b167bc4905b00cbd92a5b1a0846efd24a433ee438e6eebfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_441ad776549c78b8b167bc4905b00cbd92a5b1a0846efd24a433ee438e6eebfb->leave($__internal_441ad776549c78b8b167bc4905b00cbd92a5b1a0846efd24a433ee438e6eebfb_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_58c9d47b91be1ae4fea77612e39de5ef504f874948fb362fc7f47ce0c0cd3b85 = $this->env->getExtension("native_profiler");
        $__internal_58c9d47b91be1ae4fea77612e39de5ef504f874948fb362fc7f47ce0c0cd3b85->enter($__internal_58c9d47b91be1ae4fea77612e39de5ef504f874948fb362fc7f47ce0c0cd3b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
\t";
        
        $__internal_58c9d47b91be1ae4fea77612e39de5ef504f874948fb362fc7f47ce0c0cd3b85->leave($__internal_58c9d47b91be1ae4fea77612e39de5ef504f874948fb362fc7f47ce0c0cd3b85_prof);

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
