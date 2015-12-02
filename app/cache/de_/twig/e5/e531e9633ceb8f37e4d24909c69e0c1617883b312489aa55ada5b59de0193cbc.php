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
        $__internal_77d53642ffae366b2020a9b3a4ce819254d1a5feae927af0000be347c380a386 = $this->env->getExtension("native_profiler");
        $__internal_77d53642ffae366b2020a9b3a4ce819254d1a5feae927af0000be347c380a386->enter($__internal_77d53642ffae366b2020a9b3a4ce819254d1a5feae927af0000be347c380a386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_77d53642ffae366b2020a9b3a4ce819254d1a5feae927af0000be347c380a386->leave($__internal_77d53642ffae366b2020a9b3a4ce819254d1a5feae927af0000be347c380a386_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77453ef8a67a5bdfd45da87daf8dc77f5861a2ed799f274d1e243d29ffc11f12 = $this->env->getExtension("native_profiler");
        $__internal_77453ef8a67a5bdfd45da87daf8dc77f5861a2ed799f274d1e243d29ffc11f12->enter($__internal_77453ef8a67a5bdfd45da87daf8dc77f5861a2ed799f274d1e243d29ffc11f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Easy Trans";
        
        $__internal_77453ef8a67a5bdfd45da87daf8dc77f5861a2ed799f274d1e243d29ffc11f12->leave($__internal_77453ef8a67a5bdfd45da87daf8dc77f5861a2ed799f274d1e243d29ffc11f12_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bf1dcec24718e89bdac21fdce776ebf8e57bd9b12d166e74bc37d984542c1c6 = $this->env->getExtension("native_profiler");
        $__internal_9bf1dcec24718e89bdac21fdce776ebf8e57bd9b12d166e74bc37d984542c1c6->enter($__internal_9bf1dcec24718e89bdac21fdce776ebf8e57bd9b12d166e74bc37d984542c1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9bf1dcec24718e89bdac21fdce776ebf8e57bd9b12d166e74bc37d984542c1c6->leave($__internal_9bf1dcec24718e89bdac21fdce776ebf8e57bd9b12d166e74bc37d984542c1c6_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_9287db6073bc6c531de922461e37a457a1045a1274ec03ccaabf2046713b1354 = $this->env->getExtension("native_profiler");
        $__internal_9287db6073bc6c531de922461e37a457a1045a1274ec03ccaabf2046713b1354->enter($__internal_9287db6073bc6c531de922461e37a457a1045a1274ec03ccaabf2046713b1354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9287db6073bc6c531de922461e37a457a1045a1274ec03ccaabf2046713b1354->leave($__internal_9287db6073bc6c531de922461e37a457a1045a1274ec03ccaabf2046713b1354_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c0f13813f280c7d3f2d7cb37e4fd3d8a34df5e18212e3adc9a2e24b443176ee = $this->env->getExtension("native_profiler");
        $__internal_9c0f13813f280c7d3f2d7cb37e4fd3d8a34df5e18212e3adc9a2e24b443176ee->enter($__internal_9c0f13813f280c7d3f2d7cb37e4fd3d8a34df5e18212e3adc9a2e24b443176ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c0f13813f280c7d3f2d7cb37e4fd3d8a34df5e18212e3adc9a2e24b443176ee->leave($__internal_9c0f13813f280c7d3f2d7cb37e4fd3d8a34df5e18212e3adc9a2e24b443176ee_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c58563a801211e690a85b853eefda20af5fec53ec2fd1fa3963f597190dc7d8d = $this->env->getExtension("native_profiler");
        $__internal_c58563a801211e690a85b853eefda20af5fec53ec2fd1fa3963f597190dc7d8d->enter($__internal_c58563a801211e690a85b853eefda20af5fec53ec2fd1fa3963f597190dc7d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c58563a801211e690a85b853eefda20af5fec53ec2fd1fa3963f597190dc7d8d->leave($__internal_c58563a801211e690a85b853eefda20af5fec53ec2fd1fa3963f597190dc7d8d_prof);

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
