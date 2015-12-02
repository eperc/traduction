<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_08e9898e3158cc696d6c8a83062950bb3eaf5b9f2c7a11d56ed898c0644ddf55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f7f8ed5a8fd7446ac9395e203b048551394694b28aa1c23cee680a3101fa5dd = $this->env->getExtension("native_profiler");
        $__internal_1f7f8ed5a8fd7446ac9395e203b048551394694b28aa1c23cee680a3101fa5dd->enter($__internal_1f7f8ed5a8fd7446ac9395e203b048551394694b28aa1c23cee680a3101fa5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7f8ed5a8fd7446ac9395e203b048551394694b28aa1c23cee680a3101fa5dd->leave($__internal_1f7f8ed5a8fd7446ac9395e203b048551394694b28aa1c23cee680a3101fa5dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91e654f5707126d22f1e4fc9a1b1550210314f8958cb711214a4fb3c27b1991a = $this->env->getExtension("native_profiler");
        $__internal_91e654f5707126d22f1e4fc9a1b1550210314f8958cb711214a4fb3c27b1991a->enter($__internal_91e654f5707126d22f1e4fc9a1b1550210314f8958cb711214a4fb3c27b1991a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_91e654f5707126d22f1e4fc9a1b1550210314f8958cb711214a4fb3c27b1991a->leave($__internal_91e654f5707126d22f1e4fc9a1b1550210314f8958cb711214a4fb3c27b1991a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
