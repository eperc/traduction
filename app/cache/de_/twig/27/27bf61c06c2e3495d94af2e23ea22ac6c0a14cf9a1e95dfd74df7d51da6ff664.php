<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a5c81ef944b05dfa74dc386718f28ca6d35c0b011347b2140f21ae36e2a9a6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f18a2b71c4023e6d70e577cd4a27e3651d6ba5f474059ffff2fd46c4ddb85f54 = $this->env->getExtension("native_profiler");
        $__internal_f18a2b71c4023e6d70e577cd4a27e3651d6ba5f474059ffff2fd46c4ddb85f54->enter($__internal_f18a2b71c4023e6d70e577cd4a27e3651d6ba5f474059ffff2fd46c4ddb85f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f18a2b71c4023e6d70e577cd4a27e3651d6ba5f474059ffff2fd46c4ddb85f54->leave($__internal_f18a2b71c4023e6d70e577cd4a27e3651d6ba5f474059ffff2fd46c4ddb85f54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92b84c3de7b67c0f07ee082060ee62a7500790e0c86c30d03c995b8cc935cea2 = $this->env->getExtension("native_profiler");
        $__internal_92b84c3de7b67c0f07ee082060ee62a7500790e0c86c30d03c995b8cc935cea2->enter($__internal_92b84c3de7b67c0f07ee082060ee62a7500790e0c86c30d03c995b8cc935cea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_92b84c3de7b67c0f07ee082060ee62a7500790e0c86c30d03c995b8cc935cea2->leave($__internal_92b84c3de7b67c0f07ee082060ee62a7500790e0c86c30d03c995b8cc935cea2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
