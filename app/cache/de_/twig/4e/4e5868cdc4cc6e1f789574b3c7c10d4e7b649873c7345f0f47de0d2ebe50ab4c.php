<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f26a39443dd094ead548c70bfa6a42784cfcdae8072b1a33a8f3a0b9ca22f604 extends Twig_Template
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
        $__internal_0df564edb49cbbf742b10956c95fd491dae79f4a38d6fc56e9eee044a8f4f244 = $this->env->getExtension("native_profiler");
        $__internal_0df564edb49cbbf742b10956c95fd491dae79f4a38d6fc56e9eee044a8f4f244->enter($__internal_0df564edb49cbbf742b10956c95fd491dae79f4a38d6fc56e9eee044a8f4f244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0df564edb49cbbf742b10956c95fd491dae79f4a38d6fc56e9eee044a8f4f244->leave($__internal_0df564edb49cbbf742b10956c95fd491dae79f4a38d6fc56e9eee044a8f4f244_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
