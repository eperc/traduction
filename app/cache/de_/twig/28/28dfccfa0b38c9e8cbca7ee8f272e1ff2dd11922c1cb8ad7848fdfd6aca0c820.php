<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_650ab9963dd30d5935943332e7325d2a6b96dbc106a578de9c0bce8a34b09b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76a101156932e6e29731ca46418ff142839b5c2e19ce9e99c52482a4dd4d8511 = $this->env->getExtension("native_profiler");
        $__internal_76a101156932e6e29731ca46418ff142839b5c2e19ce9e99c52482a4dd4d8511->enter($__internal_76a101156932e6e29731ca46418ff142839b5c2e19ce9e99c52482a4dd4d8511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_76a101156932e6e29731ca46418ff142839b5c2e19ce9e99c52482a4dd4d8511->leave($__internal_76a101156932e6e29731ca46418ff142839b5c2e19ce9e99c52482a4dd4d8511_prof);

    }

    // line 1
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_daf2540e6f9490b577e7a79532e91e4ca27fdbc4f211ff887131d3d5dfb3db34 = $this->env->getExtension("native_profiler");
        $__internal_daf2540e6f9490b577e7a79532e91e4ca27fdbc4f211ff887131d3d5dfb3db34->enter($__internal_daf2540e6f9490b577e7a79532e91e4ca27fdbc4f211ff887131d3d5dfb3db34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"vich-file\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
        ";
        // line 5
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 6
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 12
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_daf2540e6f9490b577e7a79532e91e4ca27fdbc4f211ff887131d3d5dfb3db34->leave($__internal_daf2540e6f9490b577e7a79532e91e4ca27fdbc4f211ff887131d3d5dfb3db34_prof);

    }

    // line 16
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_2d16dce3cab8de14cda19a03032ff996d22207032d26ca1023c1f8690c3c800e = $this->env->getExtension("native_profiler");
        $__internal_2d16dce3cab8de14cda19a03032ff996d22207032d26ca1023c1f8690c3c800e->enter($__internal_2d16dce3cab8de14cda19a03032ff996d22207032d26ca1023c1f8690c3c800e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 17
        ob_start();
        // line 18
        echo "    <div class=\"vich-image\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
        ";
        // line 20
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 25
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 27
        echo "        ";
        if ((((isset($context["show_download_link"]) ? $context["show_download_link"] : $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 28
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 30
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2d16dce3cab8de14cda19a03032ff996d22207032d26ca1023c1f8690c3c800e->leave($__internal_2d16dce3cab8de14cda19a03032ff996d22207032d26ca1023c1f8690c3c800e_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  120 => 28,  117 => 27,  109 => 25,  107 => 24,  104 => 23,  98 => 21,  96 => 20,  92 => 19,  89 => 18,  87 => 17,  81 => 16,  72 => 12,  64 => 10,  62 => 9,  59 => 8,  53 => 6,  51 => 5,  47 => 4,  44 => 3,  42 => 2,  36 => 1,  29 => 16,  26 => 15,  24 => 1,);
    }
}
/* {% block vich_file_widget %}*/
/* {% spaceless %}*/
/*     <div class="vich-file">*/
/*         {{ form_row(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*         {{ form_row(form.delete) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri is defined and download_uri %}*/
/*         <a href="{{ download_uri }}">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_widget %}*/
/* {% spaceless %}*/
/*     <div class="vich-image">*/
/*         {{ form_row(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*         {{ form_row(form.delete) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri is defined and download_uri %}*/
/*          <a href="{{ download_uri }}"><img src="{{ download_uri }}" alt="" /></a>*/
/*         {% endif %}*/
/*         {% if show_download_link and download_uri is defined and download_uri%}*/
/*         <a href="{{ download_uri }}">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
