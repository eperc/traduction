<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6180f46a61bd8bfd06dbb14198c68bec7879e0f0fbb50e05344e6008e882de09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_16448aea24fff10f96aea314476ffe42bb958e1596bcb24b47de5dd7fd372927 = $this->env->getExtension("native_profiler");
        $__internal_16448aea24fff10f96aea314476ffe42bb958e1596bcb24b47de5dd7fd372927->enter($__internal_16448aea24fff10f96aea314476ffe42bb958e1596bcb24b47de5dd7fd372927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16448aea24fff10f96aea314476ffe42bb958e1596bcb24b47de5dd7fd372927->leave($__internal_16448aea24fff10f96aea314476ffe42bb958e1596bcb24b47de5dd7fd372927_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_243453d4c8e6ca77786bf5b6415613bcc30cb40d2cee65a6da462ec92b142da0 = $this->env->getExtension("native_profiler");
        $__internal_243453d4c8e6ca77786bf5b6415613bcc30cb40d2cee65a6da462ec92b142da0->enter($__internal_243453d4c8e6ca77786bf5b6415613bcc30cb40d2cee65a6da462ec92b142da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_243453d4c8e6ca77786bf5b6415613bcc30cb40d2cee65a6da462ec92b142da0->leave($__internal_243453d4c8e6ca77786bf5b6415613bcc30cb40d2cee65a6da462ec92b142da0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
