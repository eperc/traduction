<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_bdddec8145160f2279bcd81b36248f29ab370ca38b8266134c1abb514fdb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a3a77e1c269581c245f22154eb110c091777ee262a6aa56b3d44b6cee0bdf4c8 = $this->env->getExtension("native_profiler");
        $__internal_a3a77e1c269581c245f22154eb110c091777ee262a6aa56b3d44b6cee0bdf4c8->enter($__internal_a3a77e1c269581c245f22154eb110c091777ee262a6aa56b3d44b6cee0bdf4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3a77e1c269581c245f22154eb110c091777ee262a6aa56b3d44b6cee0bdf4c8->leave($__internal_a3a77e1c269581c245f22154eb110c091777ee262a6aa56b3d44b6cee0bdf4c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ca03c3f461f8507bbeedfb8556e4ba4ce69296c4877cec91faa81e0b881f8da = $this->env->getExtension("native_profiler");
        $__internal_1ca03c3f461f8507bbeedfb8556e4ba4ce69296c4877cec91faa81e0b881f8da->enter($__internal_1ca03c3f461f8507bbeedfb8556e4ba4ce69296c4877cec91faa81e0b881f8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1ca03c3f461f8507bbeedfb8556e4ba4ce69296c4877cec91faa81e0b881f8da->leave($__internal_1ca03c3f461f8507bbeedfb8556e4ba4ce69296c4877cec91faa81e0b881f8da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
