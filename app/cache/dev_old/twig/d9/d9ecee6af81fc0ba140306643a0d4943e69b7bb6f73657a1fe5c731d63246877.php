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
        $__internal_1b83a5e3179748880a29fcff7a8d3925c1519c02fd9a3c12a5de672f33d37018 = $this->env->getExtension("native_profiler");
        $__internal_1b83a5e3179748880a29fcff7a8d3925c1519c02fd9a3c12a5de672f33d37018->enter($__internal_1b83a5e3179748880a29fcff7a8d3925c1519c02fd9a3c12a5de672f33d37018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1b83a5e3179748880a29fcff7a8d3925c1519c02fd9a3c12a5de672f33d37018->leave($__internal_1b83a5e3179748880a29fcff7a8d3925c1519c02fd9a3c12a5de672f33d37018_prof);

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
