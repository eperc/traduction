<?php

/* UserTranslatorBundle:Translation:show.html.twig */
class __TwigTemplate_a96a12a8238d9aca2ba16f4f07d8d98b45803848185bf121f4643b92009de14b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserTranslatorBundle:Translation:show.html.twig", 1);
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
        $__internal_1e38e916b8e1587554839b0ac8e2db58b5688ef3b19cfcde0ef4f495ee423cf9 = $this->env->getExtension("native_profiler");
        $__internal_1e38e916b8e1587554839b0ac8e2db58b5688ef3b19cfcde0ef4f495ee423cf9->enter($__internal_1e38e916b8e1587554839b0ac8e2db58b5688ef3b19cfcde0ef4f495ee423cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserTranslatorBundle:Translation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e38e916b8e1587554839b0ac8e2db58b5688ef3b19cfcde0ef4f495ee423cf9->leave($__internal_1e38e916b8e1587554839b0ac8e2db58b5688ef3b19cfcde0ef4f495ee423cf9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad97f577d6d19528b1f6709bfddd21498a36f318c30adc00d255c96e3afe2afc = $this->env->getExtension("native_profiler");
        $__internal_ad97f577d6d19528b1f6709bfddd21498a36f318c30adc00d255c96e3afe2afc->enter($__internal_ad97f577d6d19528b1f6709bfddd21498a36f318c30adc00d255c96e3afe2afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserTranslatorBundle:Translation:show";
        
        $__internal_ad97f577d6d19528b1f6709bfddd21498a36f318c30adc00d255c96e3afe2afc->leave($__internal_ad97f577d6d19528b1f6709bfddd21498a36f318c30adc00d255c96e3afe2afc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_510b4951cf28b2811e6541d2a348457daaabd5dfe7e5eda7b896e9b9556d4964 = $this->env->getExtension("native_profiler");
        $__internal_510b4951cf28b2811e6541d2a348457daaabd5dfe7e5eda7b896e9b9556d4964->enter($__internal_510b4951cf28b2811e6541d2a348457daaabd5dfe7e5eda7b896e9b9556d4964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Translation:show page</h1>
";
        
        $__internal_510b4951cf28b2811e6541d2a348457daaabd5dfe7e5eda7b896e9b9556d4964->leave($__internal_510b4951cf28b2811e6541d2a348457daaabd5dfe7e5eda7b896e9b9556d4964_prof);

    }

    public function getTemplateName()
    {
        return "UserTranslatorBundle:Translation:show.html.twig";
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
/* {% block title %}UserTranslatorBundle:Translation:show{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Translation:show page</h1>*/
/* {% endblock %}*/
/* */
