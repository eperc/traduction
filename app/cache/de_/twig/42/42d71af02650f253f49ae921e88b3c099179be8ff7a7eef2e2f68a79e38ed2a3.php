<?php

/* UserAdminBundle:Client:index.html.twig */
class __TwigTemplate_ca80db74922499bc503fbf30c82577ffff7ad46719b5efe2ef39324f21f3d13f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserAdminBundle:Client:index.html.twig", 1);
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
        $__internal_a9a0e1cbaeaf993974b3eda0f5c95eb08dc3f5754cb8645cd6fce7f82ccc8784 = $this->env->getExtension("native_profiler");
        $__internal_a9a0e1cbaeaf993974b3eda0f5c95eb08dc3f5754cb8645cd6fce7f82ccc8784->enter($__internal_a9a0e1cbaeaf993974b3eda0f5c95eb08dc3f5754cb8645cd6fce7f82ccc8784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a0e1cbaeaf993974b3eda0f5c95eb08dc3f5754cb8645cd6fce7f82ccc8784->leave($__internal_a9a0e1cbaeaf993974b3eda0f5c95eb08dc3f5754cb8645cd6fce7f82ccc8784_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_914371c9b8eb21c9d51860e8c0b5bbb60050e3a0d9840198914de69e0e080f55 = $this->env->getExtension("native_profiler");
        $__internal_914371c9b8eb21c9d51860e8c0b5bbb60050e3a0d9840198914de69e0e080f55->enter($__internal_914371c9b8eb21c9d51860e8c0b5bbb60050e3a0d9840198914de69e0e080f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "UserAdminBundle:Client:index";
        
        $__internal_914371c9b8eb21c9d51860e8c0b5bbb60050e3a0d9840198914de69e0e080f55->leave($__internal_914371c9b8eb21c9d51860e8c0b5bbb60050e3a0d9840198914de69e0e080f55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f6e3b761bad6899bdbdef7c7fc8ac48a59986cb88c9d7ff5b9fb6bbf6c3d082 = $this->env->getExtension("native_profiler");
        $__internal_9f6e3b761bad6899bdbdef7c7fc8ac48a59986cb88c9d7ff5b9fb6bbf6c3d082->enter($__internal_9f6e3b761bad6899bdbdef7c7fc8ac48a59986cb88c9d7ff5b9fb6bbf6c3d082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Client:index page</h1>
";
        
        $__internal_9f6e3b761bad6899bdbdef7c7fc8ac48a59986cb88c9d7ff5b9fb6bbf6c3d082->leave($__internal_9f6e3b761bad6899bdbdef7c7fc8ac48a59986cb88c9d7ff5b9fb6bbf6c3d082_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Client:index.html.twig";
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
/* {% block title %}UserAdminBundle:Client:index{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Client:index page</h1>*/
/* {% endblock %}*/
/* */
