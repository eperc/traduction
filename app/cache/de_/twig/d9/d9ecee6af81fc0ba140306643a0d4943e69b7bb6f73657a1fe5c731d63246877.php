<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bb4ab42d89b08a91b91838beaf70c3da189e972aaf9ed19488a28ec6e7ccdd41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05e4f03c622958426273cf32ca43d69fc0c7bb093980948e080ae37d2cde6b56 = $this->env->getExtension("native_profiler");
        $__internal_05e4f03c622958426273cf32ca43d69fc0c7bb093980948e080ae37d2cde6b56->enter($__internal_05e4f03c622958426273cf32ca43d69fc0c7bb093980948e080ae37d2cde6b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_05e4f03c622958426273cf32ca43d69fc0c7bb093980948e080ae37d2cde6b56->leave($__internal_05e4f03c622958426273cf32ca43d69fc0c7bb093980948e080ae37d2cde6b56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
