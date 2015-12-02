<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_289aad315d6b5a1045308a7085b508b939a8284105d135c3ab18ba64d9b0f85a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_edef06ee6ac9d46b6fa313b2cc99e307f43118d9fb7e63e0dea4241fb38e1b2f = $this->env->getExtension("native_profiler");
        $__internal_edef06ee6ac9d46b6fa313b2cc99e307f43118d9fb7e63e0dea4241fb38e1b2f->enter($__internal_edef06ee6ac9d46b6fa313b2cc99e307f43118d9fb7e63e0dea4241fb38e1b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edef06ee6ac9d46b6fa313b2cc99e307f43118d9fb7e63e0dea4241fb38e1b2f->leave($__internal_edef06ee6ac9d46b6fa313b2cc99e307f43118d9fb7e63e0dea4241fb38e1b2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a3b074796ef00cca214d86cbd45f7fde8ae91b31e08cc1c93dd83d7945b1b13 = $this->env->getExtension("native_profiler");
        $__internal_9a3b074796ef00cca214d86cbd45f7fde8ae91b31e08cc1c93dd83d7945b1b13->enter($__internal_9a3b074796ef00cca214d86cbd45f7fde8ae91b31e08cc1c93dd83d7945b1b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9a3b074796ef00cca214d86cbd45f7fde8ae91b31e08cc1c93dd83d7945b1b13->leave($__internal_9a3b074796ef00cca214d86cbd45f7fde8ae91b31e08cc1c93dd83d7945b1b13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
