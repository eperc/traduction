<?php

/* UserAdminBundle:Admin:index.html.twig */
class __TwigTemplate_5c90cd512dfdccd1e7e9075e4f100dd5e4cab9326524f21022f4670022ac8851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserAdminBundle:layout:layout.html.twig", "UserAdminBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserAdminBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bee82b8191b6d32cd502a020700099a42c1f8c8bf84700a1f7384439ac59d649 = $this->env->getExtension("native_profiler");
        $__internal_bee82b8191b6d32cd502a020700099a42c1f8c8bf84700a1f7384439ac59d649->enter($__internal_bee82b8191b6d32cd502a020700099a42c1f8c8bf84700a1f7384439ac59d649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserAdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee82b8191b6d32cd502a020700099a42c1f8c8bf84700a1f7384439ac59d649->leave($__internal_bee82b8191b6d32cd502a020700099a42c1f8c8bf84700a1f7384439ac59d649_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c4bf93b1d3792b67d25c840f3c2d0b8ac921faf8cbac0f8aa30fbcb30b142c0 = $this->env->getExtension("native_profiler");
        $__internal_1c4bf93b1d3792b67d25c840f3c2d0b8ac921faf8cbac0f8aa30fbcb30b142c0->enter($__internal_1c4bf93b1d3792b67d25c840f3c2d0b8ac921faf8cbac0f8aa30fbcb30b142c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-body\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t<th>Adresse mail</th>
\t\t\t\t\t<th>Etat</th>
\t\t\t\t</tr>\t
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 18
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "surname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "state", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t</tbody>
\t\t\t</table>\t
\t\t</div>
\t</div>
</div>\t\t
";
        
        $__internal_1c4bf93b1d3792b67d25c840f3c2d0b8ac921faf8cbac0f8aa30fbcb30b142c0->leave($__internal_1c4bf93b1d3792b67d25c840f3c2d0b8ac921faf8cbac0f8aa30fbcb30b142c0_prof);

    }

    public function getTemplateName()
    {
        return "UserAdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "UserAdminBundle:layout:layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-body">*/
/* 		<div class="table-responsive">*/
/* 			<table class="table table-hover">*/
/* 				<thead>*/
/* 				<tr>*/
/* 					<th>Nom</th>*/
/* 					<th>Prénom</th>*/
/* 					<th>Adresse mail</th>*/
/* 					<th>Etat</th>*/
/* 				</tr>	*/
/* 				</thead>*/
/* 				<tbody>*/
/* 				{% for admin in admins %}*/
/* 					<tr>*/
/* 						<td>{{ admin.surname }}</td>*/
/* 						<td>{{ admin.name }}</td>*/
/* 						<td>{{ admin.email }}</td>*/
/* 						<td>{{ admin.state }}</td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 				</tbody>*/
/* 			</table>	*/
/* 		</div>*/
/* 	</div>*/
/* </div>		*/
/* {% endblock %}*/
/* */
