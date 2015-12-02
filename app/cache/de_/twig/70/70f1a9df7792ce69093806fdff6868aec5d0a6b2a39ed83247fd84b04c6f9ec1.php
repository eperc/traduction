<?php

/* AppBundle:Security:loginCheck.html.twig */
class __TwigTemplate_c4627c0c12d24b16259829e1894d9e8cd71394f0f9059c574b6f16d3e5d619cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Security:loginCheck.html.twig", 1);
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
        $__internal_a24a7b9732c91382993872dbef0052aebec4884721a9f20fcde396107f1e2e68 = $this->env->getExtension("native_profiler");
        $__internal_a24a7b9732c91382993872dbef0052aebec4884721a9f20fcde396107f1e2e68->enter($__internal_a24a7b9732c91382993872dbef0052aebec4884721a9f20fcde396107f1e2e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:loginCheck.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24a7b9732c91382993872dbef0052aebec4884721a9f20fcde396107f1e2e68->leave($__internal_a24a7b9732c91382993872dbef0052aebec4884721a9f20fcde396107f1e2e68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9efce72856829cfab00376710bb951719e383b550a95bc4c5f0f0ba0df09633a = $this->env->getExtension("native_profiler");
        $__internal_9efce72856829cfab00376710bb951719e383b550a95bc4c5f0f0ba0df09633a->enter($__internal_9efce72856829cfab00376710bb951719e383b550a95bc4c5f0f0ba0df09633a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Security:loginCheck";
        
        $__internal_9efce72856829cfab00376710bb951719e383b550a95bc4c5f0f0ba0df09633a->leave($__internal_9efce72856829cfab00376710bb951719e383b550a95bc4c5f0f0ba0df09633a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0050839d281f5d332fd8ab77c44011ffd48d856b2da4417540a576d99cd95a76 = $this->env->getExtension("native_profiler");
        $__internal_0050839d281f5d332fd8ab77c44011ffd48d856b2da4417540a576d99cd95a76->enter($__internal_0050839d281f5d332fd8ab77c44011ffd48d856b2da4417540a576d99cd95a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Security:loginCheck page</h1>
";
        
        $__internal_0050839d281f5d332fd8ab77c44011ffd48d856b2da4417540a576d99cd95a76->leave($__internal_0050839d281f5d332fd8ab77c44011ffd48d856b2da4417540a576d99cd95a76_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:loginCheck.html.twig";
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
/* {% block title %}AppBundle:Security:loginCheck{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Security:loginCheck page</h1>*/
/* {% endblock %}*/
/* */
