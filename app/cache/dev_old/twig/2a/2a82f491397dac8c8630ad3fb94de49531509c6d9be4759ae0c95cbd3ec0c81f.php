<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d9d8d4e939badcc672fe6acee0b84be99432cf3ce43ff6de3479635280f308d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0daaa9c6ff2eb37dd02eb842d85ce9d057591ac02d23d969b582f15fe5dfecec = $this->env->getExtension("native_profiler");
        $__internal_0daaa9c6ff2eb37dd02eb842d85ce9d057591ac02d23d969b582f15fe5dfecec->enter($__internal_0daaa9c6ff2eb37dd02eb842d85ce9d057591ac02d23d969b582f15fe5dfecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0daaa9c6ff2eb37dd02eb842d85ce9d057591ac02d23d969b582f15fe5dfecec->leave($__internal_0daaa9c6ff2eb37dd02eb842d85ce9d057591ac02d23d969b582f15fe5dfecec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c942d6641960d1a8a6f157016d5144be5726ee618d6997ced550e99ca2afa667 = $this->env->getExtension("native_profiler");
        $__internal_c942d6641960d1a8a6f157016d5144be5726ee618d6997ced550e99ca2afa667->enter($__internal_c942d6641960d1a8a6f157016d5144be5726ee618d6997ced550e99ca2afa667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c942d6641960d1a8a6f157016d5144be5726ee618d6997ced550e99ca2afa667->leave($__internal_c942d6641960d1a8a6f157016d5144be5726ee618d6997ced550e99ca2afa667_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9d9f38c420d16bdf42c9dae3d307e5a81814f87547448cc92fa2463046cea3dd = $this->env->getExtension("native_profiler");
        $__internal_9d9f38c420d16bdf42c9dae3d307e5a81814f87547448cc92fa2463046cea3dd->enter($__internal_9d9f38c420d16bdf42c9dae3d307e5a81814f87547448cc92fa2463046cea3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9d9f38c420d16bdf42c9dae3d307e5a81814f87547448cc92fa2463046cea3dd->leave($__internal_9d9f38c420d16bdf42c9dae3d307e5a81814f87547448cc92fa2463046cea3dd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4c3f7c03814a03be30a861f3844d85997c232c28a36b13a94e1b13930dfbf180 = $this->env->getExtension("native_profiler");
        $__internal_4c3f7c03814a03be30a861f3844d85997c232c28a36b13a94e1b13930dfbf180->enter($__internal_4c3f7c03814a03be30a861f3844d85997c232c28a36b13a94e1b13930dfbf180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4c3f7c03814a03be30a861f3844d85997c232c28a36b13a94e1b13930dfbf180->leave($__internal_4c3f7c03814a03be30a861f3844d85997c232c28a36b13a94e1b13930dfbf180_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
