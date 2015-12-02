<?php

/* UserAdminBundle:Client:destroy.html.twig */
class __TwigTemplate_3ea4f725bb91810d9d7f822f8a8a07b6e105222a848990eee86bbb40af472a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Client:destroy.html.twig", 1);
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
        $__internal_ce294bdda3970f0f6f3e6ea7c3b3baed7bfda181340962f9286852ab88820722 = $this->env->getExtension("native_profiler");
        $__internal_ce294bdda3970f0f6f3e6ea7c3b3baed7bfda181340962f9286852ab88820722->enter($__internal_ce294bdda3970f0f6f3e6ea7c3b3baed7bfda181340962f9286852ab88820722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Client:destroy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce294bdda3970f0f6f3e6ea7c3b3baed7bfda181340962f9286852ab88820722->leave($__internal_ce294bdda3970f0f6f3e6ea7c3b3baed7bfda181340962f9286852ab88820722_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f538a022ca2a1b9ecbea02805593af25ef0484185e1d299bdd566c7289d0bcff = $this->env->getExtension("native_profiler");
        $__internal_f538a022ca2a1b9ecbea02805593af25ef0484185e1d299bdd566c7289d0bcff->enter($__internal_f538a022ca2a1b9ecbea02805593af25ef0484185e1d299bdd566c7289d0bcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Client:destroy";
        
        $__internal_f538a022ca2a1b9ecbea02805593af25ef0484185e1d299bdd566c7289d0bcff->leave($__internal_f538a022ca2a1b9ecbea02805593af25ef0484185e1d299bdd566c7289d0bcff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae6a895ecf951d8caf2eb638aade2d77b11055738eeef2b01cafb17fe06c77a9 = $this->env->getExtension("native_profiler");
        $__internal_ae6a895ecf951d8caf2eb638aade2d77b11055738eeef2b01cafb17fe06c77a9->enter($__internal_ae6a895ecf951d8caf2eb638aade2d77b11055738eeef2b01cafb17fe06c77a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Client:destroy page</h1>
";
        
        $__internal_ae6a895ecf951d8caf2eb638aade2d77b11055738eeef2b01cafb17fe06c77a9->leave($__internal_ae6a895ecf951d8caf2eb638aade2d77b11055738eeef2b01cafb17fe06c77a9_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Client:destroy.html.twig";
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
/* {% block title %}UserAdminBundle:Client:destroy{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Client:destroy page</h1>*/
/* {% endblock %}*/
/* */
