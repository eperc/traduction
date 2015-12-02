<?php

/* UserAdminBundle:Admin:show.html.twig */
class __TwigTemplate_afffa2b36aa49f8805672c18ea6790dfdc1c45534d05506029df0b8399e76e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Admin:show.html.twig", 1);
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
        $__internal_4fd6e5b883f53b2f4c386779bae1f3cfa445d4ce7cc5ecc4bf0dc7bce8259412 = $this->env->getExtension("native_profiler");
        $__internal_4fd6e5b883f53b2f4c386779bae1f3cfa445d4ce7cc5ecc4bf0dc7bce8259412->enter($__internal_4fd6e5b883f53b2f4c386779bae1f3cfa445d4ce7cc5ecc4bf0dc7bce8259412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Admin:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd6e5b883f53b2f4c386779bae1f3cfa445d4ce7cc5ecc4bf0dc7bce8259412->leave($__internal_4fd6e5b883f53b2f4c386779bae1f3cfa445d4ce7cc5ecc4bf0dc7bce8259412_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16eeb504ec0dd3ee3b91edc5be99499e15f3eb941702ab4cab8a56bc4bcee496 = $this->env->getExtension("native_profiler");
        $__internal_16eeb504ec0dd3ee3b91edc5be99499e15f3eb941702ab4cab8a56bc4bcee496->enter($__internal_16eeb504ec0dd3ee3b91edc5be99499e15f3eb941702ab4cab8a56bc4bcee496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Admin:show";
        
        $__internal_16eeb504ec0dd3ee3b91edc5be99499e15f3eb941702ab4cab8a56bc4bcee496->leave($__internal_16eeb504ec0dd3ee3b91edc5be99499e15f3eb941702ab4cab8a56bc4bcee496_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd5dbfd380474395715075c21bceda207cef18e9277be17e23b59572360ecc0f = $this->env->getExtension("native_profiler");
        $__internal_bd5dbfd380474395715075c21bceda207cef18e9277be17e23b59572360ecc0f->enter($__internal_bd5dbfd380474395715075c21bceda207cef18e9277be17e23b59572360ecc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-body\">
\t\t<ul class=\"list-group\">
\t\t  <li class=\"list-group-item\">Cras justo odio</li>
\t\t  <li class=\"list-group-item\">Dapibus ac facilisis in</li>
\t\t  <li class=\"list-group-item\">Morbi leo risus</li>
\t\t  <li class=\"list-group-item\">Porta ac consectetur ac</li>
\t\t  <li class=\"list-group-item\">Vestibulum at eros</li>
\t\t</ul>
\t</div>
</div>
";
        
        $__internal_bd5dbfd380474395715075c21bceda207cef18e9277be17e23b59572360ecc0f->leave($__internal_bd5dbfd380474395715075c21bceda207cef18e9277be17e23b59572360ecc0f_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Admin:show.html.twig";
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
/* {% block title %}UserAdminBundle:Admin:show{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-body">*/
/* 		<ul class="list-group">*/
/* 		  <li class="list-group-item">Cras justo odio</li>*/
/* 		  <li class="list-group-item">Dapibus ac facilisis in</li>*/
/* 		  <li class="list-group-item">Morbi leo risus</li>*/
/* 		  <li class="list-group-item">Porta ac consectetur ac</li>*/
/* 		  <li class="list-group-item">Vestibulum at eros</li>*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
