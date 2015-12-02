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
        $__internal_dd9ff3e37d12a310e1093355d1b6682843b57d327b50065f2adf69890ac3946b = $this->env->getExtension("native_profiler");
        $__internal_dd9ff3e37d12a310e1093355d1b6682843b57d327b50065f2adf69890ac3946b->enter($__internal_dd9ff3e37d12a310e1093355d1b6682843b57d327b50065f2adf69890ac3946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dd9ff3e37d12a310e1093355d1b6682843b57d327b50065f2adf69890ac3946b->leave($__internal_dd9ff3e37d12a310e1093355d1b6682843b57d327b50065f2adf69890ac3946b_prof);

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
