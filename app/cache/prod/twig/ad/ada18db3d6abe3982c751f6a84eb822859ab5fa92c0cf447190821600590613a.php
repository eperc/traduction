<?php

/* AppBundle:Home:show.html.twig */
class __TwigTemplate_bcf578390fb8030082cd9be12a189f17a372660aed4abe2d46ba71c4721cba6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Home:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AppBundle:Home:show";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
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
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Home:show{% endblock %}*/
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
