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
        $__internal_8de33fa7173f1f23b397ba809533a1aac86d361984159920316d3096b282488f = $this->env->getExtension("native_profiler");
        $__internal_8de33fa7173f1f23b397ba809533a1aac86d361984159920316d3096b282488f->enter($__internal_8de33fa7173f1f23b397ba809533a1aac86d361984159920316d3096b282488f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8de33fa7173f1f23b397ba809533a1aac86d361984159920316d3096b282488f->leave($__internal_8de33fa7173f1f23b397ba809533a1aac86d361984159920316d3096b282488f_prof);

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
