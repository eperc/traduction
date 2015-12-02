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
        $__internal_fc5ab3d2114afef4a53d0c1c9aea766f86c75bbed0d7353ad39706d145478a0d = $this->env->getExtension("native_profiler");
        $__internal_fc5ab3d2114afef4a53d0c1c9aea766f86c75bbed0d7353ad39706d145478a0d->enter($__internal_fc5ab3d2114afef4a53d0c1c9aea766f86c75bbed0d7353ad39706d145478a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc5ab3d2114afef4a53d0c1c9aea766f86c75bbed0d7353ad39706d145478a0d->leave($__internal_fc5ab3d2114afef4a53d0c1c9aea766f86c75bbed0d7353ad39706d145478a0d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1832b09ca180454e403dcd33f7f50bb895f1df7dd22b9892f2a7f64e6f4090a0 = $this->env->getExtension("native_profiler");
        $__internal_1832b09ca180454e403dcd33f7f50bb895f1df7dd22b9892f2a7f64e6f4090a0->enter($__internal_1832b09ca180454e403dcd33f7f50bb895f1df7dd22b9892f2a7f64e6f4090a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1832b09ca180454e403dcd33f7f50bb895f1df7dd22b9892f2a7f64e6f4090a0->leave($__internal_1832b09ca180454e403dcd33f7f50bb895f1df7dd22b9892f2a7f64e6f4090a0_prof);

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
