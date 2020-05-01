<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* product/productscategories.html.twig */
class __TwigTemplate_2b6423a5a92ac7d567d279256176d123bc0208e568548bbedf5b4e6f1f5be295 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productscategories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/productscategories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/productscategories.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h1>Products Categories</h1>
    <table id=\"productsCategoriesTable\" class=\"table table-striped table-middle-aligned\">
    \t<thead>
        \t<tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Name</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>Actions</th>
            </tr>
    \t</thead>
    \t<tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productsCategories"]) || array_key_exists("productsCategories", $context) ? $context["productsCategories"] : (function () { throw new RuntimeError('Variable "productsCategories" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                <td style=\"width: 150px; text-align: center\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
\t\t\t\t
                <td class=\"text-right\">
                \t<div class=\"item-actions\">
                \t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productcategory_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"button\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Edit
                    \t</a>
                    </div>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
    
<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productcategory_create");
        echo "\" class=\"button\">Create Product Category</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/productscategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  111 => 29,  98 => 22,  91 => 18,  87 => 17,  84 => 16,  80 => 15,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/product/productscategories.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
\t<h1>Products Categories</h1>
    <table id=\"productsCategoriesTable\" class=\"table table-striped table-middle-aligned\">
    \t<thead>
        \t<tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Name</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>Actions</th>
            </tr>
    \t</thead>
    \t<tbody>
            {% for p in productsCategories %}
            <tr>
                <td>{{ p.id }}</td>
                <td style=\"width: 150px; text-align: center\">{{ p.name }}</td>
\t\t\t\t
                <td class=\"text-right\">
                \t<div class=\"item-actions\">
                \t\t<a href=\"{{ path('productcategory_edit', {id: p.id}) }}\" class=\"button\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Edit
                    \t</a>
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    
<a href=\"{{ path('productcategory_create') }}\" class=\"button\">Create Product Category</a>

{% endblock %}", "product/productscategories.html.twig", "C:\\Projects\\PHP\\Symfony_Apps\\Test_Symfony_App\\templates\\product\\productscategories.html.twig");
    }
}
