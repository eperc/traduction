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
        $__internal_40d036247385fd1255db2279b38c51d15636569d8821fb3818e6832dee6fd2b2 = $this->env->getExtension("native_profiler");
        $__internal_40d036247385fd1255db2279b38c51d15636569d8821fb3818e6832dee6fd2b2->enter($__internal_40d036247385fd1255db2279b38c51d15636569d8821fb3818e6832dee6fd2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40d036247385fd1255db2279b38c51d15636569d8821fb3818e6832dee6fd2b2->leave($__internal_40d036247385fd1255db2279b38c51d15636569d8821fb3818e6832dee6fd2b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_619184bd39c19ca957d249027e88ad875adb5c64191ebadc9ad28e7970f4fe48 = $this->env->getExtension("native_profiler");
        $__internal_619184bd39c19ca957d249027e88ad875adb5c64191ebadc9ad28e7970f4fe48->enter($__internal_619184bd39c19ca957d249027e88ad875adb5c64191ebadc9ad28e7970f4fe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_619184bd39c19ca957d249027e88ad875adb5c64191ebadc9ad28e7970f4fe48->leave($__internal_619184bd39c19ca957d249027e88ad875adb5c64191ebadc9ad28e7970f4fe48_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e11a699b65a8e62d6765debf428eef5ecb7d07cf70b58ea9bf8165c42748008 = $this->env->getExtension("native_profiler");
        $__internal_0e11a699b65a8e62d6765debf428eef5ecb7d07cf70b58ea9bf8165c42748008->enter($__internal_0e11a699b65a8e62d6765debf428eef5ecb7d07cf70b58ea9bf8165c42748008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e11a699b65a8e62d6765debf428eef5ecb7d07cf70b58ea9bf8165c42748008->leave($__internal_0e11a699b65a8e62d6765debf428eef5ecb7d07cf70b58ea9bf8165c42748008_prof);

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
