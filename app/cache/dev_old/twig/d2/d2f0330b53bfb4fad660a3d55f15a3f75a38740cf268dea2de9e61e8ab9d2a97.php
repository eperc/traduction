<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ec20595b881b707744a22de08d346faf90b0eac54cfe3904c4aeaa3c50e347ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_260813532bbd28cebdcc3254a516f1e24732fde3d1167aa1780eb5e91b2d19e6 = $this->env->getExtension("native_profiler");
        $__internal_260813532bbd28cebdcc3254a516f1e24732fde3d1167aa1780eb5e91b2d19e6->enter($__internal_260813532bbd28cebdcc3254a516f1e24732fde3d1167aa1780eb5e91b2d19e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260813532bbd28cebdcc3254a516f1e24732fde3d1167aa1780eb5e91b2d19e6->leave($__internal_260813532bbd28cebdcc3254a516f1e24732fde3d1167aa1780eb5e91b2d19e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58677a5b6b12884a7767f6689902121180fa668f8c843e3a5aef35fa1c0d29f4 = $this->env->getExtension("native_profiler");
        $__internal_58677a5b6b12884a7767f6689902121180fa668f8c843e3a5aef35fa1c0d29f4->enter($__internal_58677a5b6b12884a7767f6689902121180fa668f8c843e3a5aef35fa1c0d29f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_58677a5b6b12884a7767f6689902121180fa668f8c843e3a5aef35fa1c0d29f4->leave($__internal_58677a5b6b12884a7767f6689902121180fa668f8c843e3a5aef35fa1c0d29f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_58af0eb0b0631cdd6bad8a3eecba176666f20c7cb9a49cc7c002a31d7e28fff9 = $this->env->getExtension("native_profiler");
        $__internal_58af0eb0b0631cdd6bad8a3eecba176666f20c7cb9a49cc7c002a31d7e28fff9->enter($__internal_58af0eb0b0631cdd6bad8a3eecba176666f20c7cb9a49cc7c002a31d7e28fff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_58af0eb0b0631cdd6bad8a3eecba176666f20c7cb9a49cc7c002a31d7e28fff9->leave($__internal_58af0eb0b0631cdd6bad8a3eecba176666f20c7cb9a49cc7c002a31d7e28fff9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
