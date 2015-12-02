<?php

/* base.html.twig */
class __TwigTemplate_76277c72eda433ca59e109c9ec5ad3ba041d235370a8864298b6dcd0f1c8108a extends Twig_Template
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
        $__internal_b06d8bc7ae7abf64bf95e69827828a80635c9ac7e0aeb336e47cb7b086ee56bc = $this->env->getExtension("native_profiler");
        $__internal_b06d8bc7ae7abf64bf95e69827828a80635c9ac7e0aeb336e47cb7b086ee56bc->enter($__internal_b06d8bc7ae7abf64bf95e69827828a80635c9ac7e0aeb336e47cb7b086ee56bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b06d8bc7ae7abf64bf95e69827828a80635c9ac7e0aeb336e47cb7b086ee56bc->leave($__internal_b06d8bc7ae7abf64bf95e69827828a80635c9ac7e0aeb336e47cb7b086ee56bc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d02fcfef6538b559543586b3410fef48d5d20e639758cf016c399c992403f3c8 = $this->env->getExtension("native_profiler");
        $__internal_d02fcfef6538b559543586b3410fef48d5d20e639758cf016c399c992403f3c8->enter($__internal_d02fcfef6538b559543586b3410fef48d5d20e639758cf016c399c992403f3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Easy Trans";
        
        $__internal_d02fcfef6538b559543586b3410fef48d5d20e639758cf016c399c992403f3c8->leave($__internal_d02fcfef6538b559543586b3410fef48d5d20e639758cf016c399c992403f3c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b3a2369e316aff84c357e8c3eb71f5c4e201f088cd9b73800eee653e9b0fb13 = $this->env->getExtension("native_profiler");
        $__internal_2b3a2369e316aff84c357e8c3eb71f5c4e201f088cd9b73800eee653e9b0fb13->enter($__internal_2b3a2369e316aff84c357e8c3eb71f5c4e201f088cd9b73800eee653e9b0fb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2b3a2369e316aff84c357e8c3eb71f5c4e201f088cd9b73800eee653e9b0fb13->leave($__internal_2b3a2369e316aff84c357e8c3eb71f5c4e201f088cd9b73800eee653e9b0fb13_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_56e24aee302280451938becbe9fe80c30e17e45c11f924f5e28169ce620ff377 = $this->env->getExtension("native_profiler");
        $__internal_56e24aee302280451938becbe9fe80c30e17e45c11f924f5e28169ce620ff377->enter($__internal_56e24aee302280451938becbe9fe80c30e17e45c11f924f5e28169ce620ff377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_56e24aee302280451938becbe9fe80c30e17e45c11f924f5e28169ce620ff377->leave($__internal_56e24aee302280451938becbe9fe80c30e17e45c11f924f5e28169ce620ff377_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_da4dc0339e567b7d62e9f78e6eab769ba7ff68d2913a3eebcb94c6c92cb9576a = $this->env->getExtension("native_profiler");
        $__internal_da4dc0339e567b7d62e9f78e6eab769ba7ff68d2913a3eebcb94c6c92cb9576a->enter($__internal_da4dc0339e567b7d62e9f78e6eab769ba7ff68d2913a3eebcb94c6c92cb9576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da4dc0339e567b7d62e9f78e6eab769ba7ff68d2913a3eebcb94c6c92cb9576a->leave($__internal_da4dc0339e567b7d62e9f78e6eab769ba7ff68d2913a3eebcb94c6c92cb9576a_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d63d98267fb7c8f292f010878da8cc789bc81a09e483c1d8667b1356de86cee7 = $this->env->getExtension("native_profiler");
        $__internal_d63d98267fb7c8f292f010878da8cc789bc81a09e483c1d8667b1356de86cee7->enter($__internal_d63d98267fb7c8f292f010878da8cc789bc81a09e483c1d8667b1356de86cee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d63d98267fb7c8f292f010878da8cc789bc81a09e483c1d8667b1356de86cee7->leave($__internal_d63d98267fb7c8f292f010878da8cc789bc81a09e483c1d8667b1356de86cee7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
