<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_78642ea4e908e746f6a41f1d5d0a544fa9d912c08df818f91764b88934c725fb extends Twig_Template
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
        $__internal_83660ceaac6fb0e47637fd45997b38ab8aa7d47af806b72973cb4fe67cbccb9a = $this->env->getExtension("native_profiler");
        $__internal_83660ceaac6fb0e47637fd45997b38ab8aa7d47af806b72973cb4fe67cbccb9a->enter($__internal_83660ceaac6fb0e47637fd45997b38ab8aa7d47af806b72973cb4fe67cbccb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_83660ceaac6fb0e47637fd45997b38ab8aa7d47af806b72973cb4fe67cbccb9a->leave($__internal_83660ceaac6fb0e47637fd45997b38ab8aa7d47af806b72973cb4fe67cbccb9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
