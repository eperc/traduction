<?php

/* UserAdminBundle:Client:show.html.twig */
class __TwigTemplate_545e5dcb7cf89e2fa927183f8520f1f520b8805ceadfc56e61118e7457861257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Client:show.html.twig", 1);
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
        $__internal_f6809258e122a3bcf53422a9332a0b984e1802f09547ded9f66c7adfc93b0c6f = $this->env->getExtension("native_profiler");
        $__internal_f6809258e122a3bcf53422a9332a0b984e1802f09547ded9f66c7adfc93b0c6f->enter($__internal_f6809258e122a3bcf53422a9332a0b984e1802f09547ded9f66c7adfc93b0c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6809258e122a3bcf53422a9332a0b984e1802f09547ded9f66c7adfc93b0c6f->leave($__internal_f6809258e122a3bcf53422a9332a0b984e1802f09547ded9f66c7adfc93b0c6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04c9a7af16920a741ffb36fc4f37efe702d01487178cce20397a14ffaddbeab5 = $this->env->getExtension("native_profiler");
        $__internal_04c9a7af16920a741ffb36fc4f37efe702d01487178cce20397a14ffaddbeab5->enter($__internal_04c9a7af16920a741ffb36fc4f37efe702d01487178cce20397a14ffaddbeab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Client:show";
        
        $__internal_04c9a7af16920a741ffb36fc4f37efe702d01487178cce20397a14ffaddbeab5->leave($__internal_04c9a7af16920a741ffb36fc4f37efe702d01487178cce20397a14ffaddbeab5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_184a28e7c94622c19a1f6dd16ceb22a0c9eba3ad2af9bdb9b038132d9d97691a = $this->env->getExtension("native_profiler");
        $__internal_184a28e7c94622c19a1f6dd16ceb22a0c9eba3ad2af9bdb9b038132d9d97691a->enter($__internal_184a28e7c94622c19a1f6dd16ceb22a0c9eba3ad2af9bdb9b038132d9d97691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Client:show page</h1>
";
        
        $__internal_184a28e7c94622c19a1f6dd16ceb22a0c9eba3ad2af9bdb9b038132d9d97691a->leave($__internal_184a28e7c94622c19a1f6dd16ceb22a0c9eba3ad2af9bdb9b038132d9d97691a_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Client:show.html.twig";
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
/* {% block title %}UserAdminBundle:Client:show{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Client:show page</h1>*/
/* {% endblock %}*/
/* */
