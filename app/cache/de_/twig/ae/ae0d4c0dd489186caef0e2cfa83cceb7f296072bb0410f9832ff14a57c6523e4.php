<?php

/* UserTranslatorBundle:Translation:show.html.twig */
class __TwigTemplate_a96a12a8238d9aca2ba16f4f07d8d98b45803848185bf121f4643b92009de14b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserTranslatorBundle:Translation:show.html.twig", 1);
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
        $__internal_00fc5a2c5975c4faba422172378e31f6c0b6f10157adc2cfd6226345ea60df15 = $this->env->getExtension("native_profiler");
        $__internal_00fc5a2c5975c4faba422172378e31f6c0b6f10157adc2cfd6226345ea60df15->enter($__internal_00fc5a2c5975c4faba422172378e31f6c0b6f10157adc2cfd6226345ea60df15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserTranslatorBundle:Translation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00fc5a2c5975c4faba422172378e31f6c0b6f10157adc2cfd6226345ea60df15->leave($__internal_00fc5a2c5975c4faba422172378e31f6c0b6f10157adc2cfd6226345ea60df15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12a461f617fa4dc4a7303d720ab098770a33590b18e133f37841cad489da2bef = $this->env->getExtension("native_profiler");
        $__internal_12a461f617fa4dc4a7303d720ab098770a33590b18e133f37841cad489da2bef->enter($__internal_12a461f617fa4dc4a7303d720ab098770a33590b18e133f37841cad489da2bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserTranslatorBundle:Translation:show";
        
        $__internal_12a461f617fa4dc4a7303d720ab098770a33590b18e133f37841cad489da2bef->leave($__internal_12a461f617fa4dc4a7303d720ab098770a33590b18e133f37841cad489da2bef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_485ebf7bd3ce265ff9c1a33569d6b644e3700d70397e71a37405587595bf0c03 = $this->env->getExtension("native_profiler");
        $__internal_485ebf7bd3ce265ff9c1a33569d6b644e3700d70397e71a37405587595bf0c03->enter($__internal_485ebf7bd3ce265ff9c1a33569d6b644e3700d70397e71a37405587595bf0c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translation:show page</h1>
";
        
        $__internal_485ebf7bd3ce265ff9c1a33569d6b644e3700d70397e71a37405587595bf0c03->leave($__internal_485ebf7bd3ce265ff9c1a33569d6b644e3700d70397e71a37405587595bf0c03_prof);

    }

    public function getTemplateName()
    {
        return "UserTranslatorBundle:Translation:show.html.twig";
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
/* {% block title %}UserTranslatorBundle:Translation:show{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translation:show page</h1>*/
/* {% endblock %}*/
/* */
