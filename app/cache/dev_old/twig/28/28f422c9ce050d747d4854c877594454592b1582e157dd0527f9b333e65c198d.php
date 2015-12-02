<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bc8b159063fbcb36863523d4120782c2244bd5ab3c106e3c1ebf1578dfe5784f extends Twig_Template
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
        $__internal_77b1f4d462b522c9413b0d62dd5f7879d87446018e3012bd457d6ab167f43979 = $this->env->getExtension("native_profiler");
        $__internal_77b1f4d462b522c9413b0d62dd5f7879d87446018e3012bd457d6ab167f43979->enter($__internal_77b1f4d462b522c9413b0d62dd5f7879d87446018e3012bd457d6ab167f43979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_77b1f4d462b522c9413b0d62dd5f7879d87446018e3012bd457d6ab167f43979->leave($__internal_77b1f4d462b522c9413b0d62dd5f7879d87446018e3012bd457d6ab167f43979_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
