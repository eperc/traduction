<?php

/* UserAdminBundle:Client:update.html.twig */
class __TwigTemplate_6275436e7ab24ca9e2707aec7d767f166a29dd8ede9656cc45c693dded3fbd15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Client:update.html.twig", 1);
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
        $__internal_e8f5ab08773078f594aadfb6b742fb9a5220c6b1b19087835fc3e097c29f379d = $this->env->getExtension("native_profiler");
        $__internal_e8f5ab08773078f594aadfb6b742fb9a5220c6b1b19087835fc3e097c29f379d->enter($__internal_e8f5ab08773078f594aadfb6b742fb9a5220c6b1b19087835fc3e097c29f379d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Client:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8f5ab08773078f594aadfb6b742fb9a5220c6b1b19087835fc3e097c29f379d->leave($__internal_e8f5ab08773078f594aadfb6b742fb9a5220c6b1b19087835fc3e097c29f379d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1b07dbe31332d693b8cb97760fb2718331e5740e0b66f36b8979cfa4e4726f0 = $this->env->getExtension("native_profiler");
        $__internal_e1b07dbe31332d693b8cb97760fb2718331e5740e0b66f36b8979cfa4e4726f0->enter($__internal_e1b07dbe31332d693b8cb97760fb2718331e5740e0b66f36b8979cfa4e4726f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Client:update";
        
        $__internal_e1b07dbe31332d693b8cb97760fb2718331e5740e0b66f36b8979cfa4e4726f0->leave($__internal_e1b07dbe31332d693b8cb97760fb2718331e5740e0b66f36b8979cfa4e4726f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0324fba74bd5243c2d6026d20c5e3a3f348dc355797d3f820a8250aa3d3819f7 = $this->env->getExtension("native_profiler");
        $__internal_0324fba74bd5243c2d6026d20c5e3a3f348dc355797d3f820a8250aa3d3819f7->enter($__internal_0324fba74bd5243c2d6026d20c5e3a3f348dc355797d3f820a8250aa3d3819f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Client:update page</h1>
";
        
        $__internal_0324fba74bd5243c2d6026d20c5e3a3f348dc355797d3f820a8250aa3d3819f7->leave($__internal_0324fba74bd5243c2d6026d20c5e3a3f348dc355797d3f820a8250aa3d3819f7_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Client:update.html.twig";
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
/* {% block title %}UserAdminBundle:Client:update{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Client:update page</h1>*/
/* {% endblock %}*/
/* */
