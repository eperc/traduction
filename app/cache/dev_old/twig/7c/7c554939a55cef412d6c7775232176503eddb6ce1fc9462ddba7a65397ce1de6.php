<?php

/* UserClientBundle:Default:index.html.twig */
class __TwigTemplate_b66b3f2d443fcb13db539a9bb0984acd7c4f2c966688981ffe582797ce3e9143 extends Twig_Template
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
        $__internal_8c5c89f0700985b3b2a5963366c06c11d109efb785f03e0e4f3c4eb97eb0924d = $this->env->getExtension("native_profiler");
        $__internal_8c5c89f0700985b3b2a5963366c06c11d109efb785f03e0e4f3c4eb97eb0924d->enter($__internal_8c5c89f0700985b3b2a5963366c06c11d109efb785f03e0e4f3c4eb97eb0924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserClientBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_8c5c89f0700985b3b2a5963366c06c11d109efb785f03e0e4f3c4eb97eb0924d->leave($__internal_8c5c89f0700985b3b2a5963366c06c11d109efb785f03e0e4f3c4eb97eb0924d_prof);

    }

    public function getTemplateName()
    {
        return "UserClientBundle:Default:index.html.twig";
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
