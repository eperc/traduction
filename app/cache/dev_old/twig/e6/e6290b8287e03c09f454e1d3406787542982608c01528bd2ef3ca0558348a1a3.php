<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_024ad679b9955d8932ed2250d31ea8650599918bec76d8288a9d75ab11b8400a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a562439604aa65c280c2afb336362d7464335f3bc21ca5a682b9ac7dd13dc17 = $this->env->getExtension("native_profiler");
        $__internal_8a562439604aa65c280c2afb336362d7464335f3bc21ca5a682b9ac7dd13dc17->enter($__internal_8a562439604aa65c280c2afb336362d7464335f3bc21ca5a682b9ac7dd13dc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a562439604aa65c280c2afb336362d7464335f3bc21ca5a682b9ac7dd13dc17->leave($__internal_8a562439604aa65c280c2afb336362d7464335f3bc21ca5a682b9ac7dd13dc17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1a03f53669c408d601eb3bbc3cef6b0dd94bb6374af54b80a68d307eb382c54 = $this->env->getExtension("native_profiler");
        $__internal_a1a03f53669c408d601eb3bbc3cef6b0dd94bb6374af54b80a68d307eb382c54->enter($__internal_a1a03f53669c408d601eb3bbc3cef6b0dd94bb6374af54b80a68d307eb382c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a1a03f53669c408d601eb3bbc3cef6b0dd94bb6374af54b80a68d307eb382c54->leave($__internal_a1a03f53669c408d601eb3bbc3cef6b0dd94bb6374af54b80a68d307eb382c54_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfc5ca393a91cf195c9d29e330606b20e57a1884cd634666d8dbb1cdfdf7e4ee = $this->env->getExtension("native_profiler");
        $__internal_cfc5ca393a91cf195c9d29e330606b20e57a1884cd634666d8dbb1cdfdf7e4ee->enter($__internal_cfc5ca393a91cf195c9d29e330606b20e57a1884cd634666d8dbb1cdfdf7e4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfc5ca393a91cf195c9d29e330606b20e57a1884cd634666d8dbb1cdfdf7e4ee->leave($__internal_cfc5ca393a91cf195c9d29e330606b20e57a1884cd634666d8dbb1cdfdf7e4ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_020dc969966d171c03b282fe23138e0c4477bceeead45c6b25a8884831e67465 = $this->env->getExtension("native_profiler");
        $__internal_020dc969966d171c03b282fe23138e0c4477bceeead45c6b25a8884831e67465->enter($__internal_020dc969966d171c03b282fe23138e0c4477bceeead45c6b25a8884831e67465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_020dc969966d171c03b282fe23138e0c4477bceeead45c6b25a8884831e67465->leave($__internal_020dc969966d171c03b282fe23138e0c4477bceeead45c6b25a8884831e67465_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
