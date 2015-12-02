<?php

/* AppBundle:Security:loginCheck.html.twig */
class __TwigTemplate_c4627c0c12d24b16259829e1894d9e8cd71394f0f9059c574b6f16d3e5d619cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Security:loginCheck.html.twig", 1);
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
        $__internal_e3479b4f768881ed0a5c56bd13278872094ad508385966137ed2381ee7350d75 = $this->env->getExtension("native_profiler");
        $__internal_e3479b4f768881ed0a5c56bd13278872094ad508385966137ed2381ee7350d75->enter($__internal_e3479b4f768881ed0a5c56bd13278872094ad508385966137ed2381ee7350d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:loginCheck.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3479b4f768881ed0a5c56bd13278872094ad508385966137ed2381ee7350d75->leave($__internal_e3479b4f768881ed0a5c56bd13278872094ad508385966137ed2381ee7350d75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a778d4028935b962f9a77432759203e1b1c0c20f3d0bc7e9f4caba85c7834f2 = $this->env->getExtension("native_profiler");
        $__internal_0a778d4028935b962f9a77432759203e1b1c0c20f3d0bc7e9f4caba85c7834f2->enter($__internal_0a778d4028935b962f9a77432759203e1b1c0c20f3d0bc7e9f4caba85c7834f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Security:loginCheck";
        
        $__internal_0a778d4028935b962f9a77432759203e1b1c0c20f3d0bc7e9f4caba85c7834f2->leave($__internal_0a778d4028935b962f9a77432759203e1b1c0c20f3d0bc7e9f4caba85c7834f2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_df41f0ca657c7674b8ad980540c5802f946a540a88178f26366a0f65f90484e0 = $this->env->getExtension("native_profiler");
        $__internal_df41f0ca657c7674b8ad980540c5802f946a540a88178f26366a0f65f90484e0->enter($__internal_df41f0ca657c7674b8ad980540c5802f946a540a88178f26366a0f65f90484e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Security:loginCheck page</h1>
";
        
        $__internal_df41f0ca657c7674b8ad980540c5802f946a540a88178f26366a0f65f90484e0->leave($__internal_df41f0ca657c7674b8ad980540c5802f946a540a88178f26366a0f65f90484e0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:loginCheck.html.twig";
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
/* {% block title %}AppBundle:Security:loginCheck{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Security:loginCheck page</h1>*/
/* {% endblock %}*/
/* */
