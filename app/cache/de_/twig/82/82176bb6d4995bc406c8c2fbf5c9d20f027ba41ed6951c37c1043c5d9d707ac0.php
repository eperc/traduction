<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9fc1c6c2dd525dc90be447c96ae909bd4fbc9968176b3fb5bb700e26e72bec65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c03c9c532042bbd3e66a4b0f83548a4dc063e3134b4f417b5b4a2c6167582fcd = $this->env->getExtension("native_profiler");
        $__internal_c03c9c532042bbd3e66a4b0f83548a4dc063e3134b4f417b5b4a2c6167582fcd->enter($__internal_c03c9c532042bbd3e66a4b0f83548a4dc063e3134b4f417b5b4a2c6167582fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c03c9c532042bbd3e66a4b0f83548a4dc063e3134b4f417b5b4a2c6167582fcd->leave($__internal_c03c9c532042bbd3e66a4b0f83548a4dc063e3134b4f417b5b4a2c6167582fcd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccfa1d741d57c23d083de224a97b297ccb61c047e06f1e7f0f3d6e32936b311b = $this->env->getExtension("native_profiler");
        $__internal_ccfa1d741d57c23d083de224a97b297ccb61c047e06f1e7f0f3d6e32936b311b->enter($__internal_ccfa1d741d57c23d083de224a97b297ccb61c047e06f1e7f0f3d6e32936b311b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ccfa1d741d57c23d083de224a97b297ccb61c047e06f1e7f0f3d6e32936b311b->leave($__internal_ccfa1d741d57c23d083de224a97b297ccb61c047e06f1e7f0f3d6e32936b311b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
