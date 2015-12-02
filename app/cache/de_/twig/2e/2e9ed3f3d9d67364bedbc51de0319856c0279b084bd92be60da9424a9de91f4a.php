<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_6a695dd479efb440cfad29d0a87d3798502fe0005c0711136d5cc6b162f62287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_47a69b4d85f7e77580f17ac4ab922a36a44ec800b48981029d0cad03e497b061 = $this->env->getExtension("native_profiler");
        $__internal_47a69b4d85f7e77580f17ac4ab922a36a44ec800b48981029d0cad03e497b061->enter($__internal_47a69b4d85f7e77580f17ac4ab922a36a44ec800b48981029d0cad03e497b061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47a69b4d85f7e77580f17ac4ab922a36a44ec800b48981029d0cad03e497b061->leave($__internal_47a69b4d85f7e77580f17ac4ab922a36a44ec800b48981029d0cad03e497b061_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7d821b31f69c6f1750f617d5ccc28222059077f282c4b1967c4a0d02f822849 = $this->env->getExtension("native_profiler");
        $__internal_c7d821b31f69c6f1750f617d5ccc28222059077f282c4b1967c4a0d02f822849->enter($__internal_c7d821b31f69c6f1750f617d5ccc28222059077f282c4b1967c4a0d02f822849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_c7d821b31f69c6f1750f617d5ccc28222059077f282c4b1967c4a0d02f822849->leave($__internal_c7d821b31f69c6f1750f617d5ccc28222059077f282c4b1967c4a0d02f822849_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
