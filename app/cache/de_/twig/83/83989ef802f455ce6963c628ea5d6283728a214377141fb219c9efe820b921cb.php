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
        $__internal_0eb3e42f58b2762f63ea319f2d1d5c61edc69ea3f8d132123fa947a9a3675bfa = $this->env->getExtension("native_profiler");
        $__internal_0eb3e42f58b2762f63ea319f2d1d5c61edc69ea3f8d132123fa947a9a3675bfa->enter($__internal_0eb3e42f58b2762f63ea319f2d1d5c61edc69ea3f8d132123fa947a9a3675bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0eb3e42f58b2762f63ea319f2d1d5c61edc69ea3f8d132123fa947a9a3675bfa->leave($__internal_0eb3e42f58b2762f63ea319f2d1d5c61edc69ea3f8d132123fa947a9a3675bfa_prof);

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
