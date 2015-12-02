<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4dcf5153ffc0dab7ee0decbf2caa257d0c48490e0714655a85c1f993995cafd6 extends Twig_Template
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
        $__internal_488d24a5f6dbed36297319d163daf3d4c6d5ba21bcc31cb214d9024694548649 = $this->env->getExtension("native_profiler");
        $__internal_488d24a5f6dbed36297319d163daf3d4c6d5ba21bcc31cb214d9024694548649->enter($__internal_488d24a5f6dbed36297319d163daf3d4c6d5ba21bcc31cb214d9024694548649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_488d24a5f6dbed36297319d163daf3d4c6d5ba21bcc31cb214d9024694548649->leave($__internal_488d24a5f6dbed36297319d163daf3d4c6d5ba21bcc31cb214d9024694548649_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
