<?php

/* AppBundle:security:login.html.twig */
class __TwigTemplate_297545d9aa2ed176675d5a1f546b0bcbf110054c7859c3593661d6ada3b7757f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:security:login.html.twig", 1);
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
        $__internal_19b8d6cbe43fd6caa07d00ba88c77001b9d328aafcfa32b03db4949d273472ca = $this->env->getExtension("native_profiler");
        $__internal_19b8d6cbe43fd6caa07d00ba88c77001b9d328aafcfa32b03db4949d273472ca->enter($__internal_19b8d6cbe43fd6caa07d00ba88c77001b9d328aafcfa32b03db4949d273472ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b8d6cbe43fd6caa07d00ba88c77001b9d328aafcfa32b03db4949d273472ca->leave($__internal_19b8d6cbe43fd6caa07d00ba88c77001b9d328aafcfa32b03db4949d273472ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a493eaad07b676b8463c15fb5e83927fd1c38a88fd46eda11a7952bc71679050 = $this->env->getExtension("native_profiler");
        $__internal_a493eaad07b676b8463c15fb5e83927fd1c38a88fd46eda11a7952bc71679050->enter($__internal_a493eaad07b676b8463c15fb5e83927fd1c38a88fd46eda11a7952bc71679050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Security:login";
        
        $__internal_a493eaad07b676b8463c15fb5e83927fd1c38a88fd46eda11a7952bc71679050->leave($__internal_a493eaad07b676b8463c15fb5e83927fd1c38a88fd46eda11a7952bc71679050_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7c03734d3637e060222631584418f4dced0bcfabb8447de47bd7691cbdb6ea2 = $this->env->getExtension("native_profiler");
        $__internal_d7c03734d3637e060222631584418f4dced0bcfabb8447de47bd7691cbdb6ea2->enter($__internal_d7c03734d3637e060222631584418f4dced0bcfabb8447de47bd7691cbdb6ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d7c03734d3637e060222631584418f4dced0bcfabb8447de47bd7691cbdb6ea2->leave($__internal_d7c03734d3637e060222631584418f4dced0bcfabb8447de47bd7691cbdb6ea2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:security:login.html.twig";
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
