<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_32c2ebc39befbf1fac7734ff27d609a90ffb0b80959f87ea1bee52612cb60194 extends Twig_Template
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
        $__internal_1cedb61f57335c588f90c363977285ba798468955ad96bff427e8657f8c11eee = $this->env->getExtension("native_profiler");
        $__internal_1cedb61f57335c588f90c363977285ba798468955ad96bff427e8657f8c11eee->enter($__internal_1cedb61f57335c588f90c363977285ba798468955ad96bff427e8657f8c11eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1cedb61f57335c588f90c363977285ba798468955ad96bff427e8657f8c11eee->leave($__internal_1cedb61f57335c588f90c363977285ba798468955ad96bff427e8657f8c11eee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
