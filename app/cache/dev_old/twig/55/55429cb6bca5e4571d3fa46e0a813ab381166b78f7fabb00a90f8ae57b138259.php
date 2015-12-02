<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_bd6b37e357065ef1393959d1f543a10a6413aea25e476dbf5ed6819b91928dc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_59bb08ba2351640d11c7668ab77ac8b54830eeca8b317bc4937fa7716a40ba54 = $this->env->getExtension("native_profiler");
        $__internal_59bb08ba2351640d11c7668ab77ac8b54830eeca8b317bc4937fa7716a40ba54->enter($__internal_59bb08ba2351640d11c7668ab77ac8b54830eeca8b317bc4937fa7716a40ba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59bb08ba2351640d11c7668ab77ac8b54830eeca8b317bc4937fa7716a40ba54->leave($__internal_59bb08ba2351640d11c7668ab77ac8b54830eeca8b317bc4937fa7716a40ba54_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eeaac5786e0d8ec52decab35f4e4014fb6053ce49ca33fb1b28be07d9658650c = $this->env->getExtension("native_profiler");
        $__internal_eeaac5786e0d8ec52decab35f4e4014fb6053ce49ca33fb1b28be07d9658650c->enter($__internal_eeaac5786e0d8ec52decab35f4e4014fb6053ce49ca33fb1b28be07d9658650c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_eeaac5786e0d8ec52decab35f4e4014fb6053ce49ca33fb1b28be07d9658650c->leave($__internal_eeaac5786e0d8ec52decab35f4e4014fb6053ce49ca33fb1b28be07d9658650c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
