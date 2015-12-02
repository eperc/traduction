<?php

/* AppBundle:Security:login.html.twig */
class __TwigTemplate_df159bd6797f5846cb7af47c7969c6cfd3755bc4558b2b28334db5084fea9e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c606f41ec4ccaa1756a7d618fe3fba3b7e6e7dfd48602934c77877afe2a25c2d = $this->env->getExtension("native_profiler");
        $__internal_c606f41ec4ccaa1756a7d618fe3fba3b7e6e7dfd48602934c77877afe2a25c2d->enter($__internal_c606f41ec4ccaa1756a7d618fe3fba3b7e6e7dfd48602934c77877afe2a25c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c606f41ec4ccaa1756a7d618fe3fba3b7e6e7dfd48602934c77877afe2a25c2d->leave($__internal_c606f41ec4ccaa1756a7d618fe3fba3b7e6e7dfd48602934c77877afe2a25c2d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_837625fe42bd423080ba9a880e4c36b83d5789c38801e82af7096c31292a9b7b = $this->env->getExtension("native_profiler");
        $__internal_837625fe42bd423080ba9a880e4c36b83d5789c38801e82af7096c31292a9b7b->enter($__internal_837625fe42bd423080ba9a880e4c36b83d5789c38801e82af7096c31292a9b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Security:login";
        
        $__internal_837625fe42bd423080ba9a880e4c36b83d5789c38801e82af7096c31292a9b7b->leave($__internal_837625fe42bd423080ba9a880e4c36b83d5789c38801e82af7096c31292a9b7b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5899a14cd6e86a20eefcd6948c4cf5ccf43cfbc29e01044ef89997d98833005 = $this->env->getExtension("native_profiler");
        $__internal_f5899a14cd6e86a20eefcd6948c4cf5ccf43cfbc29e01044ef89997d98833005->enter($__internal_f5899a14cd6e86a20eefcd6948c4cf5ccf43cfbc29e01044ef89997d98833005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 12
        echo "
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <input type=\"hidden\" name=\"_csrf_token\"
        value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    />

    ";
        // line 28
        echo "
    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_f5899a14cd6e86a20eefcd6948c4cf5ccf43cfbc29e01044ef89997d98833005->leave($__internal_f5899a14cd6e86a20eefcd6948c4cf5ccf43cfbc29e01044ef89997d98833005_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  80 => 20,  72 => 15,  67 => 13,  64 => 12,  58 => 10,  56 => 9,  53 => 8,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Security:login{% endblock %}*/
/* */
/* {% block body %}*/
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <input type="hidden" name="_csrf_token"*/
/*         value="{{ csrf_token('authenticate') }}"*/
/*     />*/
/* */
/*     {#*/
/*         If you want to control the URL the user*/
/*         is redirected to on success (more details below)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/* */
/*     <button type="submit">login</button>*/
/* </form>*/
/* {% endblock %}*/
/* */
