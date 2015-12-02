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
        $__internal_40d7d496c18a1da42010dc6fb560485ef7cc25da9ff46486c1f6e62b72b02548 = $this->env->getExtension("native_profiler");
        $__internal_40d7d496c18a1da42010dc6fb560485ef7cc25da9ff46486c1f6e62b72b02548->enter($__internal_40d7d496c18a1da42010dc6fb560485ef7cc25da9ff46486c1f6e62b72b02548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_40d7d496c18a1da42010dc6fb560485ef7cc25da9ff46486c1f6e62b72b02548->leave($__internal_40d7d496c18a1da42010dc6fb560485ef7cc25da9ff46486c1f6e62b72b02548_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fb196b8dd8ffad0fea9469260f0fb5f185f495f0fa1336c30a3e967f018702f8 = $this->env->getExtension("native_profiler");
        $__internal_fb196b8dd8ffad0fea9469260f0fb5f185f495f0fa1336c30a3e967f018702f8->enter($__internal_fb196b8dd8ffad0fea9469260f0fb5f185f495f0fa1336c30a3e967f018702f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fb196b8dd8ffad0fea9469260f0fb5f185f495f0fa1336c30a3e967f018702f8->leave($__internal_fb196b8dd8ffad0fea9469260f0fb5f185f495f0fa1336c30a3e967f018702f8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7a0477337d7f1bfbb5cbe6cc666e06aff8ed7e46034faba823abef0961ca1f14 = $this->env->getExtension("native_profiler");
        $__internal_7a0477337d7f1bfbb5cbe6cc666e06aff8ed7e46034faba823abef0961ca1f14->enter($__internal_7a0477337d7f1bfbb5cbe6cc666e06aff8ed7e46034faba823abef0961ca1f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7a0477337d7f1bfbb5cbe6cc666e06aff8ed7e46034faba823abef0961ca1f14->leave($__internal_7a0477337d7f1bfbb5cbe6cc666e06aff8ed7e46034faba823abef0961ca1f14_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b28f97f1efc33055175723a058618c54133fecb987ca43063562275c47990d8d = $this->env->getExtension("native_profiler");
        $__internal_b28f97f1efc33055175723a058618c54133fecb987ca43063562275c47990d8d->enter($__internal_b28f97f1efc33055175723a058618c54133fecb987ca43063562275c47990d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b28f97f1efc33055175723a058618c54133fecb987ca43063562275c47990d8d->leave($__internal_b28f97f1efc33055175723a058618c54133fecb987ca43063562275c47990d8d_prof);

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
