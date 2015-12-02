<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_64ad7df33629cdc6ecea0ab0fbcd75c1cbd57a4d5d9749d15c5263c661ffcb79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3741e930100a74b24db402318c65cae999baf991f9bb789936451041cb5c276 = $this->env->getExtension("native_profiler");
        $__internal_c3741e930100a74b24db402318c65cae999baf991f9bb789936451041cb5c276->enter($__internal_c3741e930100a74b24db402318c65cae999baf991f9bb789936451041cb5c276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c3741e930100a74b24db402318c65cae999baf991f9bb789936451041cb5c276->leave($__internal_c3741e930100a74b24db402318c65cae999baf991f9bb789936451041cb5c276_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_813e9f3fc573b4cdd7907dbb41a5e795f9c60b42f7ae6c52d974ab75bde64c8f = $this->env->getExtension("native_profiler");
        $__internal_813e9f3fc573b4cdd7907dbb41a5e795f9c60b42f7ae6c52d974ab75bde64c8f->enter($__internal_813e9f3fc573b4cdd7907dbb41a5e795f9c60b42f7ae6c52d974ab75bde64c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_813e9f3fc573b4cdd7907dbb41a5e795f9c60b42f7ae6c52d974ab75bde64c8f->leave($__internal_813e9f3fc573b4cdd7907dbb41a5e795f9c60b42f7ae6c52d974ab75bde64c8f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
