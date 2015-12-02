<?php

/* UserAdminBundle:Translator:index.html.twig */
class __TwigTemplate_c8b09dedbf77c8db44ae500e3b1b553b87948959bd302fe562b477648c0277cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Translator:index.html.twig", 1);
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
        $__internal_337437f9714a83b0b758c1debb8dd834f9a5636ff3b8800282c866e00d86ccd2 = $this->env->getExtension("native_profiler");
        $__internal_337437f9714a83b0b758c1debb8dd834f9a5636ff3b8800282c866e00d86ccd2->enter($__internal_337437f9714a83b0b758c1debb8dd834f9a5636ff3b8800282c866e00d86ccd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Translator:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337437f9714a83b0b758c1debb8dd834f9a5636ff3b8800282c866e00d86ccd2->leave($__internal_337437f9714a83b0b758c1debb8dd834f9a5636ff3b8800282c866e00d86ccd2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d458fc477abe6a19672fbdc081c87661223090bcf67640428823eae674499dc7 = $this->env->getExtension("native_profiler");
        $__internal_d458fc477abe6a19672fbdc081c87661223090bcf67640428823eae674499dc7->enter($__internal_d458fc477abe6a19672fbdc081c87661223090bcf67640428823eae674499dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Translator:index";
        
        $__internal_d458fc477abe6a19672fbdc081c87661223090bcf67640428823eae674499dc7->leave($__internal_d458fc477abe6a19672fbdc081c87661223090bcf67640428823eae674499dc7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e8897964253b1d46b0f13283e0a7f5114df58c479180a6f0293e85802b9d70f = $this->env->getExtension("native_profiler");
        $__internal_2e8897964253b1d46b0f13283e0a7f5114df58c479180a6f0293e85802b9d70f->enter($__internal_2e8897964253b1d46b0f13283e0a7f5114df58c479180a6f0293e85802b9d70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translator:index page</h1>
";
        
        $__internal_2e8897964253b1d46b0f13283e0a7f5114df58c479180a6f0293e85802b9d70f->leave($__internal_2e8897964253b1d46b0f13283e0a7f5114df58c479180a6f0293e85802b9d70f_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Translator:index.html.twig";
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
/* {% block title %}UserAdminBundle:Translator:index{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translator:index page</h1>*/
/* {% endblock %}*/
/* */
