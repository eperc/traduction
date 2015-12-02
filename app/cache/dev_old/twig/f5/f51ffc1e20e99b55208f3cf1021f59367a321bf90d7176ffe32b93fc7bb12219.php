<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fb8b9016f84e8767079f7e84454326bcafa21f66299d23f2fca0046d1ec3490e extends Twig_Template
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
        $__internal_3a8cd4dbba5064c12bc9070cdc7e70a86e7341cc319ebfe2a7b82a345f884250 = $this->env->getExtension("native_profiler");
        $__internal_3a8cd4dbba5064c12bc9070cdc7e70a86e7341cc319ebfe2a7b82a345f884250->enter($__internal_3a8cd4dbba5064c12bc9070cdc7e70a86e7341cc319ebfe2a7b82a345f884250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3a8cd4dbba5064c12bc9070cdc7e70a86e7341cc319ebfe2a7b82a345f884250->leave($__internal_3a8cd4dbba5064c12bc9070cdc7e70a86e7341cc319ebfe2a7b82a345f884250_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
