<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9f11523ae022bbbdf804cd96a0bb4413a848feba7b5b9ccea0aa428aac563966 extends Twig_Template
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
        $__internal_7e2205c0ab994d5fe8e61fdb8a1be000dafbfad16653904b670f1066f0fec2bd = $this->env->getExtension("native_profiler");
        $__internal_7e2205c0ab994d5fe8e61fdb8a1be000dafbfad16653904b670f1066f0fec2bd->enter($__internal_7e2205c0ab994d5fe8e61fdb8a1be000dafbfad16653904b670f1066f0fec2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7e2205c0ab994d5fe8e61fdb8a1be000dafbfad16653904b670f1066f0fec2bd->leave($__internal_7e2205c0ab994d5fe8e61fdb8a1be000dafbfad16653904b670f1066f0fec2bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
