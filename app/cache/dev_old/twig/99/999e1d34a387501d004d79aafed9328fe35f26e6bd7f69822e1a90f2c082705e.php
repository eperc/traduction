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
        $__internal_ef64942f93e0a33ba009fc1f2b72e8f4baebd808c9d8902e01630f96a76a5212 = $this->env->getExtension("native_profiler");
        $__internal_ef64942f93e0a33ba009fc1f2b72e8f4baebd808c9d8902e01630f96a76a5212->enter($__internal_ef64942f93e0a33ba009fc1f2b72e8f4baebd808c9d8902e01630f96a76a5212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ef64942f93e0a33ba009fc1f2b72e8f4baebd808c9d8902e01630f96a76a5212->leave($__internal_ef64942f93e0a33ba009fc1f2b72e8f4baebd808c9d8902e01630f96a76a5212_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_809f2787dab37a3c4724a8dfdd491130778ee38d18f25a52defef4bb2373b48d = $this->env->getExtension("native_profiler");
        $__internal_809f2787dab37a3c4724a8dfdd491130778ee38d18f25a52defef4bb2373b48d->enter($__internal_809f2787dab37a3c4724a8dfdd491130778ee38d18f25a52defef4bb2373b48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Easy Trans";
        
        $__internal_809f2787dab37a3c4724a8dfdd491130778ee38d18f25a52defef4bb2373b48d->leave($__internal_809f2787dab37a3c4724a8dfdd491130778ee38d18f25a52defef4bb2373b48d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_faa136cec9fa9a3738e0d92c0efd6ac984c1e15c92c57773c6097636952f5fff = $this->env->getExtension("native_profiler");
        $__internal_faa136cec9fa9a3738e0d92c0efd6ac984c1e15c92c57773c6097636952f5fff->enter($__internal_faa136cec9fa9a3738e0d92c0efd6ac984c1e15c92c57773c6097636952f5fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_faa136cec9fa9a3738e0d92c0efd6ac984c1e15c92c57773c6097636952f5fff->leave($__internal_faa136cec9fa9a3738e0d92c0efd6ac984c1e15c92c57773c6097636952f5fff_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d2b693385b9454ad328942204077b20c77c07f47fe4c47fbc73d7129a1a3f3e = $this->env->getExtension("native_profiler");
        $__internal_2d2b693385b9454ad328942204077b20c77c07f47fe4c47fbc73d7129a1a3f3e->enter($__internal_2d2b693385b9454ad328942204077b20c77c07f47fe4c47fbc73d7129a1a3f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2d2b693385b9454ad328942204077b20c77c07f47fe4c47fbc73d7129a1a3f3e->leave($__internal_2d2b693385b9454ad328942204077b20c77c07f47fe4c47fbc73d7129a1a3f3e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_14f8f33a460263e09fcaf47750a03c0c6d661930ed9eea382665d930c5f7f3ae = $this->env->getExtension("native_profiler");
        $__internal_14f8f33a460263e09fcaf47750a03c0c6d661930ed9eea382665d930c5f7f3ae->enter($__internal_14f8f33a460263e09fcaf47750a03c0c6d661930ed9eea382665d930c5f7f3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14f8f33a460263e09fcaf47750a03c0c6d661930ed9eea382665d930c5f7f3ae->leave($__internal_14f8f33a460263e09fcaf47750a03c0c6d661930ed9eea382665d930c5f7f3ae_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5d55157f928e127024cb2583c7ecbfe661909894765ef7d6b372f99daeb7e88 = $this->env->getExtension("native_profiler");
        $__internal_e5d55157f928e127024cb2583c7ecbfe661909894765ef7d6b372f99daeb7e88->enter($__internal_e5d55157f928e127024cb2583c7ecbfe661909894765ef7d6b372f99daeb7e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5d55157f928e127024cb2583c7ecbfe661909894765ef7d6b372f99daeb7e88->leave($__internal_e5d55157f928e127024cb2583c7ecbfe661909894765ef7d6b372f99daeb7e88_prof);

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
