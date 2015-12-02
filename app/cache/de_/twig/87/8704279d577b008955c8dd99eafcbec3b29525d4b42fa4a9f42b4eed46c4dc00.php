<?php

/* UserAdminBundle:Translator:destroy.html.twig */
class __TwigTemplate_d9aa61f71c4201d316d0212bdebcb2ca064ff574fbbc1dd55a733d3d09280d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Translator:destroy.html.twig", 1);
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
        $__internal_d23ca5ea3256e3aa450b5b334e53b46df3c622f0ce0d5194b13f0e6be1f3eb38 = $this->env->getExtension("native_profiler");
        $__internal_d23ca5ea3256e3aa450b5b334e53b46df3c622f0ce0d5194b13f0e6be1f3eb38->enter($__internal_d23ca5ea3256e3aa450b5b334e53b46df3c622f0ce0d5194b13f0e6be1f3eb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Translator:destroy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d23ca5ea3256e3aa450b5b334e53b46df3c622f0ce0d5194b13f0e6be1f3eb38->leave($__internal_d23ca5ea3256e3aa450b5b334e53b46df3c622f0ce0d5194b13f0e6be1f3eb38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_129c03a7753fc022db205073db9075be3bb494504c9f9b6ea6350355d9a44514 = $this->env->getExtension("native_profiler");
        $__internal_129c03a7753fc022db205073db9075be3bb494504c9f9b6ea6350355d9a44514->enter($__internal_129c03a7753fc022db205073db9075be3bb494504c9f9b6ea6350355d9a44514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Translator:destroy";
        
        $__internal_129c03a7753fc022db205073db9075be3bb494504c9f9b6ea6350355d9a44514->leave($__internal_129c03a7753fc022db205073db9075be3bb494504c9f9b6ea6350355d9a44514_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fc80f7869332140608558bc8e967ef3a7257fd75a5e18b87f39058414ca8e76 = $this->env->getExtension("native_profiler");
        $__internal_1fc80f7869332140608558bc8e967ef3a7257fd75a5e18b87f39058414ca8e76->enter($__internal_1fc80f7869332140608558bc8e967ef3a7257fd75a5e18b87f39058414ca8e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translator:destroy page</h1>
";
        
        $__internal_1fc80f7869332140608558bc8e967ef3a7257fd75a5e18b87f39058414ca8e76->leave($__internal_1fc80f7869332140608558bc8e967ef3a7257fd75a5e18b87f39058414ca8e76_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Translator:destroy.html.twig";
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
/* {% block title %}UserAdminBundle:Translator:destroy{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translator:destroy page</h1>*/
/* {% endblock %}*/
/* */
