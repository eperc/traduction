<?php

/* AppBundle:Home:show.html.twig */
class __TwigTemplate_3d5882c7ff04dce047ba4c3de77e45a6ccf9f61ff6603e93b4ca5584368e4797 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Home:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6eb4c9cab429b4aba505715071d4345327f8f888d74bd2d8f94a92e4d0da059 = $this->env->getExtension("native_profiler");
        $__internal_f6eb4c9cab429b4aba505715071d4345327f8f888d74bd2d8f94a92e4d0da059->enter($__internal_f6eb4c9cab429b4aba505715071d4345327f8f888d74bd2d8f94a92e4d0da059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6eb4c9cab429b4aba505715071d4345327f8f888d74bd2d8f94a92e4d0da059->leave($__internal_f6eb4c9cab429b4aba505715071d4345327f8f888d74bd2d8f94a92e4d0da059_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3d2fad4d12fa56c55c136077a36f7a00f6513ebfad84f3d824dfb8c17c815e5 = $this->env->getExtension("native_profiler");
        $__internal_e3d2fad4d12fa56c55c136077a36f7a00f6513ebfad84f3d824dfb8c17c815e5->enter($__internal_e3d2fad4d12fa56c55c136077a36f7a00f6513ebfad84f3d824dfb8c17c815e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Home:show";
        
        $__internal_e3d2fad4d12fa56c55c136077a36f7a00f6513ebfad84f3d824dfb8c17c815e5->leave($__internal_e3d2fad4d12fa56c55c136077a36f7a00f6513ebfad84f3d824dfb8c17c815e5_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_6212d2081ecdf33649889025c59e2836cc21ef4fb8adb3c3785e14a34d4b6e0e = $this->env->getExtension("native_profiler");
        $__internal_6212d2081ecdf33649889025c59e2836cc21ef4fb8adb3c3785e14a34d4b6e0e->enter($__internal_6212d2081ecdf33649889025c59e2836cc21ef4fb8adb3c3785e14a34d4b6e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "<script src=\"js/ckeditor/ckeditor.js\"></script>
<link rel=\"stylesheet\" href=\"css/style.css\">    
";
        
        $__internal_6212d2081ecdf33649889025c59e2836cc21ef4fb8adb3c3785e14a34d4b6e0e->leave($__internal_6212d2081ecdf33649889025c59e2836cc21ef4fb8adb3c3785e14a34d4b6e0e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c6ebfbb2cfbf0f6bb13717d22febb8b67ef1c2fb2cc417d80fc7ad327a0257b = $this->env->getExtension("native_profiler");
        $__internal_1c6ebfbb2cfbf0f6bb13717d22febb8b67ef1c2fb2cc417d80fc7ad327a0257b->enter($__internal_1c6ebfbb2cfbf0f6bb13717d22febb8b67ef1c2fb2cc417d80fc7ad327a0257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand\" href=\"#\">Projet Traduction</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Translation</a></li>
        <li><a href=\"#\">Waiting list</a></li>
        <li><a href=\"#\">About Me</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
        <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class=\"jumbotron\">
    <div class=\"container-fluid\">
        <h1>EasyTranslation</h1>
        <p>Le leader dans la traduction en ligne.</p>
        <p><a href=\"\" target=\"_blank\" class=\"btn btn-success btn-lg\">Get started today</a></p>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xs-6\">
            <h2>Traduire</h2>
            <p>Mettez votre talent au service de la communauté.Traduisez des textes en fonction de vos centres d'intérêts et gagnez de l'argent depuis votre canapé.</p>
            <p><a href=\"\" target=\"_blank\" class=\"btn btn-success\">Learn More &raquo;</a></p>
        </div>
        <div class=\"col-xs-6\">
            <h2>Demander une traduction</h2>
            <p>Déposez votre texte et selectionnez les langues qui vous intéressent. La qualité de nos traductions et les délais sont garantie.A vous de fixer les délais, c'est vous qui choisissez!</p>
            <p><a href=\"\" target=\"_blank\" class=\"btn btn-success\">Learn More &raquo;</a></p>
        </div>
    </div>
</div>
";
        
        $__internal_1c6ebfbb2cfbf0f6bb13717d22febb8b67ef1c2fb2cc417d80fc7ad327a0257b->leave($__internal_1c6ebfbb2cfbf0f6bb13717d22febb8b67ef1c2fb2cc417d80fc7ad327a0257b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  63 => 10,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Home:show{% endblock %}*/
/* */
/* {% block head %}*/
/* <script src="js/ckeditor/ckeditor.js"></script>*/
/* <link rel="stylesheet" href="css/style.css">    */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>                        */
/*       </button>*/
/*       <a class="navbar-brand" href="#">Projet Traduction</a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="myNavbar">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="#">Translation</a></li>*/
/*         <li><a href="#">Waiting list</a></li>*/
/*         <li><a href="#">About Me</a></li>*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>*/
/*         <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* */
/* <div class="jumbotron">*/
/*     <div class="container-fluid">*/
/*         <h1>EasyTranslation</h1>*/
/*         <p>Le leader dans la traduction en ligne.</p>*/
/*         <p><a href="" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>*/
/*     </div>*/
/* </div>*/
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <div class="col-xs-6">*/
/*             <h2>Traduire</h2>*/
/*             <p>Mettez votre talent au service de la communauté.Traduisez des textes en fonction de vos centres d'intérêts et gagnez de l'argent depuis votre canapé.</p>*/
/*             <p><a href="" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>*/
/*         </div>*/
/*         <div class="col-xs-6">*/
/*             <h2>Demander une traduction</h2>*/
/*             <p>Déposez votre texte et selectionnez les langues qui vous intéressent. La qualité de nos traductions et les délais sont garantie.A vous de fixer les délais, c'est vous qui choisissez!</p>*/
/*             <p><a href="" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
