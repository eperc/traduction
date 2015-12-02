<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_90035e5bac65150f92e1e92fe2edb389876a3c12fd77bdf13beba735f300aaf6 extends Twig_Template
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
        $__internal_4a866f29dd2fba0c78811abd33149fd8b73bd356153b7cc11743d4689aeb8d50 = $this->env->getExtension("native_profiler");
        $__internal_4a866f29dd2fba0c78811abd33149fd8b73bd356153b7cc11743d4689aeb8d50->enter($__internal_4a866f29dd2fba0c78811abd33149fd8b73bd356153b7cc11743d4689aeb8d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4a866f29dd2fba0c78811abd33149fd8b73bd356153b7cc11743d4689aeb8d50->leave($__internal_4a866f29dd2fba0c78811abd33149fd8b73bd356153b7cc11743d4689aeb8d50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
