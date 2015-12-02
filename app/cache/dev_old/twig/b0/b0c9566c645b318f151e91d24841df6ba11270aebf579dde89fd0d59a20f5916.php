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
        $__internal_6c09d81bc59d8db4804996c403c984482904c6ba1d21c77a3eefd9fe47597e88 = $this->env->getExtension("native_profiler");
        $__internal_6c09d81bc59d8db4804996c403c984482904c6ba1d21c77a3eefd9fe47597e88->enter($__internal_6c09d81bc59d8db4804996c403c984482904c6ba1d21c77a3eefd9fe47597e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6c09d81bc59d8db4804996c403c984482904c6ba1d21c77a3eefd9fe47597e88->leave($__internal_6c09d81bc59d8db4804996c403c984482904c6ba1d21c77a3eefd9fe47597e88_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_03502414214d898a458b528d5c4eb7fa8cca04eb45a9a2ef6657006667c2fdab = $this->env->getExtension("native_profiler");
        $__internal_03502414214d898a458b528d5c4eb7fa8cca04eb45a9a2ef6657006667c2fdab->enter($__internal_03502414214d898a458b528d5c4eb7fa8cca04eb45a9a2ef6657006667c2fdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_03502414214d898a458b528d5c4eb7fa8cca04eb45a9a2ef6657006667c2fdab->leave($__internal_03502414214d898a458b528d5c4eb7fa8cca04eb45a9a2ef6657006667c2fdab_prof);

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
