<?php

/* ::base.html.twig */
class __TwigTemplate_1d2c0ba92f1bd9eb982d09d3494610e63b739b22397a453f89edfe409050d4eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ba7fc6f5d3cddec571eb9c637a4f40984c5c83e73690759eaf8d20c4082bd0a = $this->env->getExtension("native_profiler");
        $__internal_6ba7fc6f5d3cddec571eb9c637a4f40984c5c83e73690759eaf8d20c4082bd0a->enter($__internal_6ba7fc6f5d3cddec571eb9c637a4f40984c5c83e73690759eaf8d20c4082bd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
    
        ";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_6ba7fc6f5d3cddec571eb9c637a4f40984c5c83e73690759eaf8d20c4082bd0a->leave($__internal_6ba7fc6f5d3cddec571eb9c637a4f40984c5c83e73690759eaf8d20c4082bd0a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5f52c5d9e03e8c09ca6d3eb9870d2847122943a77b26fff0f423df55d381035 = $this->env->getExtension("native_profiler");
        $__internal_a5f52c5d9e03e8c09ca6d3eb9870d2847122943a77b26fff0f423df55d381035->enter($__internal_a5f52c5d9e03e8c09ca6d3eb9870d2847122943a77b26fff0f423df55d381035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Easy Trans";
        
        $__internal_a5f52c5d9e03e8c09ca6d3eb9870d2847122943a77b26fff0f423df55d381035->leave($__internal_a5f52c5d9e03e8c09ca6d3eb9870d2847122943a77b26fff0f423df55d381035_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b41f8714932bfa4796497a632f53eabcbf72d7e823490bb0e23054ca7f7d3d59 = $this->env->getExtension("native_profiler");
        $__internal_b41f8714932bfa4796497a632f53eabcbf72d7e823490bb0e23054ca7f7d3d59->enter($__internal_b41f8714932bfa4796497a632f53eabcbf72d7e823490bb0e23054ca7f7d3d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b41f8714932bfa4796497a632f53eabcbf72d7e823490bb0e23054ca7f7d3d59->leave($__internal_b41f8714932bfa4796497a632f53eabcbf72d7e823490bb0e23054ca7f7d3d59_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f9e5b814503f251689198df2d2f9231b7d68bbc22c9fa64d8c80794ab702412 = $this->env->getExtension("native_profiler");
        $__internal_4f9e5b814503f251689198df2d2f9231b7d68bbc22c9fa64d8c80794ab702412->enter($__internal_4f9e5b814503f251689198df2d2f9231b7d68bbc22c9fa64d8c80794ab702412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4f9e5b814503f251689198df2d2f9231b7d68bbc22c9fa64d8c80794ab702412->leave($__internal_4f9e5b814503f251689198df2d2f9231b7d68bbc22c9fa64d8c80794ab702412_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cd6ea0c4c3bad9ed09eba3771bb702fd0e43a20e5ecbc2bfc06738da7e0c5c3 = $this->env->getExtension("native_profiler");
        $__internal_3cd6ea0c4c3bad9ed09eba3771bb702fd0e43a20e5ecbc2bfc06738da7e0c5c3->enter($__internal_3cd6ea0c4c3bad9ed09eba3771bb702fd0e43a20e5ecbc2bfc06738da7e0c5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3cd6ea0c4c3bad9ed09eba3771bb702fd0e43a20e5ecbc2bfc06738da7e0c5c3->leave($__internal_3cd6ea0c4c3bad9ed09eba3771bb702fd0e43a20e5ecbc2bfc06738da7e0c5c3_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fad42941eea000dfa67ff82e80d57e1ff91263ea77d5982c7cf3065177334bc = $this->env->getExtension("native_profiler");
        $__internal_7fad42941eea000dfa67ff82e80d57e1ff91263ea77d5982c7cf3065177334bc->enter($__internal_7fad42941eea000dfa67ff82e80d57e1ff91263ea77d5982c7cf3065177334bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7fad42941eea000dfa67ff82e80d57e1ff91263ea77d5982c7cf3065177334bc->leave($__internal_7fad42941eea000dfa67ff82e80d57e1ff91263ea77d5982c7cf3065177334bc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 18,  104 => 17,  93 => 14,  82 => 6,  70 => 5,  61 => 19,  58 => 18,  56 => 17,  52 => 15,  50 => 14,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Easy Trans{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*   */
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*     */
/*         {% block head %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
