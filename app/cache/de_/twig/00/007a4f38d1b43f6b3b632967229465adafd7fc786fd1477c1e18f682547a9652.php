<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d79680f0fcbb8435b37493db059d59b9965c1bf9c791c20f9846fbfb3c280d67 extends Twig_Template
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
        $__internal_07e5169c7c7a412f217c1432903921783cc849ecf01eead1e63e19dc3fc3bd2d = $this->env->getExtension("native_profiler");
        $__internal_07e5169c7c7a412f217c1432903921783cc849ecf01eead1e63e19dc3fc3bd2d->enter($__internal_07e5169c7c7a412f217c1432903921783cc849ecf01eead1e63e19dc3fc3bd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_07e5169c7c7a412f217c1432903921783cc849ecf01eead1e63e19dc3fc3bd2d->leave($__internal_07e5169c7c7a412f217c1432903921783cc849ecf01eead1e63e19dc3fc3bd2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
