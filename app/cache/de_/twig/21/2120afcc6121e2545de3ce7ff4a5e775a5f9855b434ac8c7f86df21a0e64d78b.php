<?php

/* UserTranslatorBundle:Translation:index.html.twig */
class __TwigTemplate_7ea7aae3edf94ff6d3a53bfeff41ea731d595137e580caa1445ebba5c73c28f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserTranslatorBundle:Translation:index.html.twig", 1);
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
        $__internal_47f5cb955ac04bafbf38eccd3225e9ada850e11b7a92693e6878672e1b6cb0c0 = $this->env->getExtension("native_profiler");
        $__internal_47f5cb955ac04bafbf38eccd3225e9ada850e11b7a92693e6878672e1b6cb0c0->enter($__internal_47f5cb955ac04bafbf38eccd3225e9ada850e11b7a92693e6878672e1b6cb0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserTranslatorBundle:Translation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f5cb955ac04bafbf38eccd3225e9ada850e11b7a92693e6878672e1b6cb0c0->leave($__internal_47f5cb955ac04bafbf38eccd3225e9ada850e11b7a92693e6878672e1b6cb0c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bafd77d8d51bade66e0d2c22bd31ce6558d8b881cdea9534be46108935858a3 = $this->env->getExtension("native_profiler");
        $__internal_3bafd77d8d51bade66e0d2c22bd31ce6558d8b881cdea9534be46108935858a3->enter($__internal_3bafd77d8d51bade66e0d2c22bd31ce6558d8b881cdea9534be46108935858a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserTranslatorBundle:Translation:index";
        
        $__internal_3bafd77d8d51bade66e0d2c22bd31ce6558d8b881cdea9534be46108935858a3->leave($__internal_3bafd77d8d51bade66e0d2c22bd31ce6558d8b881cdea9534be46108935858a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a71022dab2acfa52730bd266055eda41c04590ea6e6928bda447413d7bff171 = $this->env->getExtension("native_profiler");
        $__internal_9a71022dab2acfa52730bd266055eda41c04590ea6e6928bda447413d7bff171->enter($__internal_9a71022dab2acfa52730bd266055eda41c04590ea6e6928bda447413d7bff171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translation:index page</h1>
";
        
        $__internal_9a71022dab2acfa52730bd266055eda41c04590ea6e6928bda447413d7bff171->leave($__internal_9a71022dab2acfa52730bd266055eda41c04590ea6e6928bda447413d7bff171_prof);

    }

    public function getTemplateName()
    {
        return "UserTranslatorBundle:Translation:index.html.twig";
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
/* {% block title %}UserTranslatorBundle:Translation:index{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translation:index page</h1>*/
/* {% endblock %}*/
/* */
