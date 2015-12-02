<?php

/* UserTranslatorBundle:Default:index.html.twig */
class __TwigTemplate_4de2167a9320a032f2e169d8c96a9625ec81612c490f64414f52fa78a6c66a26 extends Twig_Template
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
        $__internal_bb1f53ade79a2579ccb447a7f2a7adf1395913dc76ee395e981d105de5cacef2 = $this->env->getExtension("native_profiler");
        $__internal_bb1f53ade79a2579ccb447a7f2a7adf1395913dc76ee395e981d105de5cacef2->enter($__internal_bb1f53ade79a2579ccb447a7f2a7adf1395913dc76ee395e981d105de5cacef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserTranslatorBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_bb1f53ade79a2579ccb447a7f2a7adf1395913dc76ee395e981d105de5cacef2->leave($__internal_bb1f53ade79a2579ccb447a7f2a7adf1395913dc76ee395e981d105de5cacef2_prof);

    }

    public function getTemplateName()
    {
        return "UserTranslatorBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
