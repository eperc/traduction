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
        $__internal_a3fab7eb3db4b623bb419d8f62a3b09a46b3d9081b3b01bbdd5dc4bc26b4fa55 = $this->env->getExtension("native_profiler");
        $__internal_a3fab7eb3db4b623bb419d8f62a3b09a46b3d9081b3b01bbdd5dc4bc26b4fa55->enter($__internal_a3fab7eb3db4b623bb419d8f62a3b09a46b3d9081b3b01bbdd5dc4bc26b4fa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3fab7eb3db4b623bb419d8f62a3b09a46b3d9081b3b01bbdd5dc4bc26b4fa55->leave($__internal_a3fab7eb3db4b623bb419d8f62a3b09a46b3d9081b3b01bbdd5dc4bc26b4fa55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e17ed9b57e20e54f2739080ece214af0f4b106d9baabcb3be8a674f622932286 = $this->env->getExtension("native_profiler");
        $__internal_e17ed9b57e20e54f2739080ece214af0f4b106d9baabcb3be8a674f622932286->enter($__internal_e17ed9b57e20e54f2739080ece214af0f4b106d9baabcb3be8a674f622932286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e17ed9b57e20e54f2739080ece214af0f4b106d9baabcb3be8a674f622932286->leave($__internal_e17ed9b57e20e54f2739080ece214af0f4b106d9baabcb3be8a674f622932286_prof);

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
