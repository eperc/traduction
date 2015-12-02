<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_51f33b86e8f255a009ef7d6c149f3b9ce29de765b469f94fa02a14c8874c4d16 extends Twig_Template
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
        $__internal_62ed09a33b29567fd35fadb5362eb035ddbe85e0509d31a0c780d8abd475d11f = $this->env->getExtension("native_profiler");
        $__internal_62ed09a33b29567fd35fadb5362eb035ddbe85e0509d31a0c780d8abd475d11f->enter($__internal_62ed09a33b29567fd35fadb5362eb035ddbe85e0509d31a0c780d8abd475d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_62ed09a33b29567fd35fadb5362eb035ddbe85e0509d31a0c780d8abd475d11f->leave($__internal_62ed09a33b29567fd35fadb5362eb035ddbe85e0509d31a0c780d8abd475d11f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cdfb5bf0489bea74501cbf2fee9b940eb084c11429d7071725cd3d6cd2e4bd71 = $this->env->getExtension("native_profiler");
        $__internal_cdfb5bf0489bea74501cbf2fee9b940eb084c11429d7071725cd3d6cd2e4bd71->enter($__internal_cdfb5bf0489bea74501cbf2fee9b940eb084c11429d7071725cd3d6cd2e4bd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cdfb5bf0489bea74501cbf2fee9b940eb084c11429d7071725cd3d6cd2e4bd71->leave($__internal_cdfb5bf0489bea74501cbf2fee9b940eb084c11429d7071725cd3d6cd2e4bd71_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a6bf5a270fa21709ef0baff1e0807810edcf70142d8a1e8252685d8ac262f79d = $this->env->getExtension("native_profiler");
        $__internal_a6bf5a270fa21709ef0baff1e0807810edcf70142d8a1e8252685d8ac262f79d->enter($__internal_a6bf5a270fa21709ef0baff1e0807810edcf70142d8a1e8252685d8ac262f79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a6bf5a270fa21709ef0baff1e0807810edcf70142d8a1e8252685d8ac262f79d->leave($__internal_a6bf5a270fa21709ef0baff1e0807810edcf70142d8a1e8252685d8ac262f79d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_267533443516106c560488e97b587f2765b464a832eb591d99a053f71a8206d8 = $this->env->getExtension("native_profiler");
        $__internal_267533443516106c560488e97b587f2765b464a832eb591d99a053f71a8206d8->enter($__internal_267533443516106c560488e97b587f2765b464a832eb591d99a053f71a8206d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_267533443516106c560488e97b587f2765b464a832eb591d99a053f71a8206d8->leave($__internal_267533443516106c560488e97b587f2765b464a832eb591d99a053f71a8206d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
