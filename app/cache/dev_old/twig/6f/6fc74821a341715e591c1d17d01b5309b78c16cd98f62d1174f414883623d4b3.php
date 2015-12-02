<?php

/* UserAdminBundle:Default:index.html.twig */
class __TwigTemplate_a9fb8f95cdb9a297cb37ddfe18e8e3531b0571582e92ecc57cc5b03c6dea08cb extends Twig_Template
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
        $__internal_3e10264f1fdc89de94be4bb8bd271bf09c275ecfd7da8406f3cc24cff4ce5ebc = $this->env->getExtension("native_profiler");
        $__internal_3e10264f1fdc89de94be4bb8bd271bf09c275ecfd7da8406f3cc24cff4ce5ebc->enter($__internal_3e10264f1fdc89de94be4bb8bd271bf09c275ecfd7da8406f3cc24cff4ce5ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_3e10264f1fdc89de94be4bb8bd271bf09c275ecfd7da8406f3cc24cff4ce5ebc->leave($__internal_3e10264f1fdc89de94be4bb8bd271bf09c275ecfd7da8406f3cc24cff4ce5ebc_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Default:index.html.twig";
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
