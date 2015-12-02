<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c0e543a302d6b95a142e14cb1ce5f7564ab986862ed19075b919e54d75ecc024 extends Twig_Template
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
        $__internal_9f4f463256270f5f9509e126e8820121d3bdd6b49764f593c3b427cf960962bc = $this->env->getExtension("native_profiler");
        $__internal_9f4f463256270f5f9509e126e8820121d3bdd6b49764f593c3b427cf960962bc->enter($__internal_9f4f463256270f5f9509e126e8820121d3bdd6b49764f593c3b427cf960962bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9f4f463256270f5f9509e126e8820121d3bdd6b49764f593c3b427cf960962bc->leave($__internal_9f4f463256270f5f9509e126e8820121d3bdd6b49764f593c3b427cf960962bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
