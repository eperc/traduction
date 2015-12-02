<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b9612715a6c1adc05cf26f9addfe30782b08dfd54f3e6ceb22b6fcfb1dc13845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9faa881deb3207be01e152d8c2ad1bd282add7f02ddc94c928e94472571d4d31 = $this->env->getExtension("native_profiler");
        $__internal_9faa881deb3207be01e152d8c2ad1bd282add7f02ddc94c928e94472571d4d31->enter($__internal_9faa881deb3207be01e152d8c2ad1bd282add7f02ddc94c928e94472571d4d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9faa881deb3207be01e152d8c2ad1bd282add7f02ddc94c928e94472571d4d31->leave($__internal_9faa881deb3207be01e152d8c2ad1bd282add7f02ddc94c928e94472571d4d31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
