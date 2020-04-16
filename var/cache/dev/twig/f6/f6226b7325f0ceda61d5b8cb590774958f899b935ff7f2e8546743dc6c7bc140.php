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

/* product/edit_product.html.twig */
class __TwigTemplate_b69a71ebda33d6d76ae21803c35645953cffeb8eb17b0688ed744cfc60ccc012 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit_product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit_product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/edit_product.html.twig", 2);
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

        // line 7
        echo "\t\t
";
        // line 11
        echo "\t\t
";
        // line 15
        echo "\t\t
";
        // line 19
        echo "
\t\t<h1>Edit Product ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</h1>

\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><label for=\"productIdLabel\" style=\"font-weight:bold\">Id:</label></td>
\t\t\t\t<td><label id=\"productIdLabel\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</label></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productNameTextBox\" style=\"font-weight:bold\">Name:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productNameTextBox\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"></input></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productPriceTextBox\" style=\"font-weight:bold\">Price:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productPriceTextBox\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\"></input></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productDescriptionTextBox\" style=\"font-weight:bold\">Description:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productDescriptionTextBox\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\"></input></td>
\t\t\t</tr>
\t\t</table>
\t\t
\t\t<br/>
\t\t<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_product", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })())]), "html", null, true);
        echo "\" class=\"button\">Save</a>
\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_show");
        echo "\" class=\"button\">Cancel</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/edit_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  120 => 45,  112 => 40,  104 => 35,  96 => 30,  88 => 25,  80 => 20,  77 => 19,  74 => 15,  71 => 11,  68 => 7,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/product/edit_product.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
{#     \t<label for=\"productIdLabel\">Id:</label>#}
{# \t\t<label id=\"productIdLabel\">{{ id }}</label>#}
\t\t
{# \t\t<br/>#}
{#     \t<label for=\"productNameTextBox\">Name:</label>#}
{# \t\t<input type=\"text\" id=\"productNameTextBox\" value=\"{{ name }}\"></input>#}
\t\t
{# \t\t<br/>#}
{# \t\t<label for=\"productPriceTextBox\">Price:</label>#}
{# \t\t<input type=\"text\" id=\"productPriceTextBox\" value=\"{{ price }}\"></input>#}
\t\t
{# \t\t<br/>#}
{# \t\t<label for=\"productDescriptionTextBox\">Description:</label>#}
{# \t\t<input type=\"text\" id=\"productDescriptionTextBox\" value=\"{{ description }}\"></input>#}

\t\t<h1>Edit Product {{ name }}</h1>

\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><label for=\"productIdLabel\" style=\"font-weight:bold\">Id:</label></td>
\t\t\t\t<td><label id=\"productIdLabel\">{{ id }}</label></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productNameTextBox\" style=\"font-weight:bold\">Name:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productNameTextBox\" value=\"{{ name }}\"></input></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productPriceTextBox\" style=\"font-weight:bold\">Price:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productPriceTextBox\" value=\"{{ price }}\"></input></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productDescriptionTextBox\" style=\"font-weight:bold\">Description:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productDescriptionTextBox\" value=\"{{ description }}\"></input></td>
\t\t\t</tr>
\t\t</table>
\t\t
\t\t<br/>
\t\t<a href=\"{{ path('save_product', {id: id }) }}\" class=\"button\">Save</a>
\t\t<a href=\"{{ path('products_show') }}\" class=\"button\">Cancel</a>
{% endblock %}
", "product/edit_product.html.twig", "C:\\Projects\\PHP\\Symfony_Apps\\Test_Symfony_App\\templates\\product\\edit_product.html.twig");
    }
}
