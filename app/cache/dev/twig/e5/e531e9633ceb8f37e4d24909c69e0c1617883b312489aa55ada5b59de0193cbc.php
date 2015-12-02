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
        $__internal_fe5337dc4271874e790245490fa6a83486a9f71841cfe5a29729002b62d62e57 = $this->env->getExtension("native_profiler");
        $__internal_fe5337dc4271874e790245490fa6a83486a9f71841cfe5a29729002b62d62e57->enter($__internal_fe5337dc4271874e790245490fa6a83486a9f71841cfe5a29729002b62d62e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fe5337dc4271874e790245490fa6a83486a9f71841cfe5a29729002b62d62e57->leave($__internal_fe5337dc4271874e790245490fa6a83486a9f71841cfe5a29729002b62d62e57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a307874fa57ac603540bd357676f7baa89e1ccf6de3a46b0efc270ebbd80b0a = $this->env->getExtension("native_profiler");
        $__internal_6a307874fa57ac603540bd357676f7baa89e1ccf6de3a46b0efc270ebbd80b0a->enter($__internal_6a307874fa57ac603540bd357676f7baa89e1ccf6de3a46b0efc270ebbd80b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Easy Trans";
        
        $__internal_6a307874fa57ac603540bd357676f7baa89e1ccf6de3a46b0efc270ebbd80b0a->leave($__internal_6a307874fa57ac603540bd357676f7baa89e1ccf6de3a46b0efc270ebbd80b0a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76e17fdc17be9d085c75d4aadef38c13eac2f682473aae4860854a4c3f169ff1 = $this->env->getExtension("native_profiler");
        $__internal_76e17fdc17be9d085c75d4aadef38c13eac2f682473aae4860854a4c3f169ff1->enter($__internal_76e17fdc17be9d085c75d4aadef38c13eac2f682473aae4860854a4c3f169ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_76e17fdc17be9d085c75d4aadef38c13eac2f682473aae4860854a4c3f169ff1->leave($__internal_76e17fdc17be9d085c75d4aadef38c13eac2f682473aae4860854a4c3f169ff1_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b5fcc86697e768162297db0d6ae288a99480bad92764c59f8da315a677286a1 = $this->env->getExtension("native_profiler");
        $__internal_4b5fcc86697e768162297db0d6ae288a99480bad92764c59f8da315a677286a1->enter($__internal_4b5fcc86697e768162297db0d6ae288a99480bad92764c59f8da315a677286a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4b5fcc86697e768162297db0d6ae288a99480bad92764c59f8da315a677286a1->leave($__internal_4b5fcc86697e768162297db0d6ae288a99480bad92764c59f8da315a677286a1_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_aee3c4881df563640f0264dccc98771a28b5cadaf1f38785e24aefc5b38cf766 = $this->env->getExtension("native_profiler");
        $__internal_aee3c4881df563640f0264dccc98771a28b5cadaf1f38785e24aefc5b38cf766->enter($__internal_aee3c4881df563640f0264dccc98771a28b5cadaf1f38785e24aefc5b38cf766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aee3c4881df563640f0264dccc98771a28b5cadaf1f38785e24aefc5b38cf766->leave($__internal_aee3c4881df563640f0264dccc98771a28b5cadaf1f38785e24aefc5b38cf766_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_45657110cba2c7a15f1232a7fd0fee02a44d5ff3df8340b0512dec7b41876860 = $this->env->getExtension("native_profiler");
        $__internal_45657110cba2c7a15f1232a7fd0fee02a44d5ff3df8340b0512dec7b41876860->enter($__internal_45657110cba2c7a15f1232a7fd0fee02a44d5ff3df8340b0512dec7b41876860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_45657110cba2c7a15f1232a7fd0fee02a44d5ff3df8340b0512dec7b41876860->leave($__internal_45657110cba2c7a15f1232a7fd0fee02a44d5ff3df8340b0512dec7b41876860_prof);

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
