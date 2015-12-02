<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_da32a65de4e010812e27b3a3accd81f8063f7f9cf3ba5a7c57385d08ce5aa1e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_6b241dc59e008d37d36aca669dfb0c97defe5cf586b8208ce547cac756370460 = $this->env->getExtension("native_profiler");
        $__internal_6b241dc59e008d37d36aca669dfb0c97defe5cf586b8208ce547cac756370460->enter($__internal_6b241dc59e008d37d36aca669dfb0c97defe5cf586b8208ce547cac756370460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b241dc59e008d37d36aca669dfb0c97defe5cf586b8208ce547cac756370460->leave($__internal_6b241dc59e008d37d36aca669dfb0c97defe5cf586b8208ce547cac756370460_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fdeffb0cfc5990379261bdecf864a527e70cb197f55bd1d527a09796d6766f9 = $this->env->getExtension("native_profiler");
        $__internal_4fdeffb0cfc5990379261bdecf864a527e70cb197f55bd1d527a09796d6766f9->enter($__internal_4fdeffb0cfc5990379261bdecf864a527e70cb197f55bd1d527a09796d6766f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4fdeffb0cfc5990379261bdecf864a527e70cb197f55bd1d527a09796d6766f9->leave($__internal_4fdeffb0cfc5990379261bdecf864a527e70cb197f55bd1d527a09796d6766f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
