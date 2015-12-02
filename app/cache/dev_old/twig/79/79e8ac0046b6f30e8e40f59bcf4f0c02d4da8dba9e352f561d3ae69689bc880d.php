<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c13e8f777d4406e9c6153094f48855212cca8eb1f87d77e300a9d963a7a5ad13 extends Twig_Template
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
        $__internal_bfac05fba452024414186c46be0e433afd9104470e1717dfbf2a95bfe456064d = $this->env->getExtension("native_profiler");
        $__internal_bfac05fba452024414186c46be0e433afd9104470e1717dfbf2a95bfe456064d->enter($__internal_bfac05fba452024414186c46be0e433afd9104470e1717dfbf2a95bfe456064d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bfac05fba452024414186c46be0e433afd9104470e1717dfbf2a95bfe456064d->leave($__internal_bfac05fba452024414186c46be0e433afd9104470e1717dfbf2a95bfe456064d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
