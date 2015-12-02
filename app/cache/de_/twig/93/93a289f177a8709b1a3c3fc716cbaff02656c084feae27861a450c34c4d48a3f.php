<?php

/* UserAdminBundle:Translator:edit.html.twig */
class __TwigTemplate_5f544180d53c12eb126ea886c9c7ae55fde6de097c00b1e23cc594060f955349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Translator:edit.html.twig", 1);
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
        $__internal_86abca8450d8f0301910d14a079a8666349f7e4e6956bbb05e127febf2a5acd0 = $this->env->getExtension("native_profiler");
        $__internal_86abca8450d8f0301910d14a079a8666349f7e4e6956bbb05e127febf2a5acd0->enter($__internal_86abca8450d8f0301910d14a079a8666349f7e4e6956bbb05e127febf2a5acd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Translator:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86abca8450d8f0301910d14a079a8666349f7e4e6956bbb05e127febf2a5acd0->leave($__internal_86abca8450d8f0301910d14a079a8666349f7e4e6956bbb05e127febf2a5acd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7c8c2a930965e000003d3814fd7bd22d6c073d55c0a275a4d831a9dba3e0d8a = $this->env->getExtension("native_profiler");
        $__internal_f7c8c2a930965e000003d3814fd7bd22d6c073d55c0a275a4d831a9dba3e0d8a->enter($__internal_f7c8c2a930965e000003d3814fd7bd22d6c073d55c0a275a4d831a9dba3e0d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Translator:edit";
        
        $__internal_f7c8c2a930965e000003d3814fd7bd22d6c073d55c0a275a4d831a9dba3e0d8a->leave($__internal_f7c8c2a930965e000003d3814fd7bd22d6c073d55c0a275a4d831a9dba3e0d8a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d9abf516cf021379a182791268656287adf8184898bb8978eacc77bb35dfcc7 = $this->env->getExtension("native_profiler");
        $__internal_8d9abf516cf021379a182791268656287adf8184898bb8978eacc77bb35dfcc7->enter($__internal_8d9abf516cf021379a182791268656287adf8184898bb8978eacc77bb35dfcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translator:edit page</h1>
";
        
        $__internal_8d9abf516cf021379a182791268656287adf8184898bb8978eacc77bb35dfcc7->leave($__internal_8d9abf516cf021379a182791268656287adf8184898bb8978eacc77bb35dfcc7_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Translator:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}UserAdminBundle:Translator:edit{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translator:edit page</h1>*/
/* {% endblock %}*/
/* */
