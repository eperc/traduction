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
        $__internal_96c7c47d95b2f608cfb4f26e8d676e15f5cb0a26050cf5a40f8f069a1fa7a1e4 = $this->env->getExtension("native_profiler");
        $__internal_96c7c47d95b2f608cfb4f26e8d676e15f5cb0a26050cf5a40f8f069a1fa7a1e4->enter($__internal_96c7c47d95b2f608cfb4f26e8d676e15f5cb0a26050cf5a40f8f069a1fa7a1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c7c47d95b2f608cfb4f26e8d676e15f5cb0a26050cf5a40f8f069a1fa7a1e4->leave($__internal_96c7c47d95b2f608cfb4f26e8d676e15f5cb0a26050cf5a40f8f069a1fa7a1e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6883c0d5cc9a9348cc93f3ae93ad411043d6cc40c79813e712595df67b7cb72 = $this->env->getExtension("native_profiler");
        $__internal_d6883c0d5cc9a9348cc93f3ae93ad411043d6cc40c79813e712595df67b7cb72->enter($__internal_d6883c0d5cc9a9348cc93f3ae93ad411043d6cc40c79813e712595df67b7cb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d6883c0d5cc9a9348cc93f3ae93ad411043d6cc40c79813e712595df67b7cb72->leave($__internal_d6883c0d5cc9a9348cc93f3ae93ad411043d6cc40c79813e712595df67b7cb72_prof);

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
