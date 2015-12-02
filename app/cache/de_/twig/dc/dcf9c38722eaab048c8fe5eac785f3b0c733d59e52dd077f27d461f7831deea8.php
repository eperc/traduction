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
        $__internal_00067252d33ae67766fde70018e101ea54bc5b82eda561ac489308e3a64313ef = $this->env->getExtension("native_profiler");
        $__internal_00067252d33ae67766fde70018e101ea54bc5b82eda561ac489308e3a64313ef->enter($__internal_00067252d33ae67766fde70018e101ea54bc5b82eda561ac489308e3a64313ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00067252d33ae67766fde70018e101ea54bc5b82eda561ac489308e3a64313ef->leave($__internal_00067252d33ae67766fde70018e101ea54bc5b82eda561ac489308e3a64313ef_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ce1ffa243deff86cf74931bc9600d8c54cec3440133ccfcdf771ac0dd55ad3a = $this->env->getExtension("native_profiler");
        $__internal_3ce1ffa243deff86cf74931bc9600d8c54cec3440133ccfcdf771ac0dd55ad3a->enter($__internal_3ce1ffa243deff86cf74931bc9600d8c54cec3440133ccfcdf771ac0dd55ad3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3ce1ffa243deff86cf74931bc9600d8c54cec3440133ccfcdf771ac0dd55ad3a->leave($__internal_3ce1ffa243deff86cf74931bc9600d8c54cec3440133ccfcdf771ac0dd55ad3a_prof);

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
