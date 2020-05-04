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

/* product/edit_product_form.html.twig */
class __TwigTemplate_e40e4a44a96449590841fc37e86cc5356566d08ac20e990835cd2c22bff94f70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit_product_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit_product_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/edit_product_form.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "

";
        // line 8
        if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), 0)) {
            // line 9
            echo "\t<h1>Edit Product ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</h1>
";
        } else {
            // line 11
            echo "\t<h1>New Product</h1>
";
        }
        // line 13
        echo "
<table>
";
        // line 16
        echo "\t<tr>
\t\t";
        // line 17
        if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), 0)) {
            // line 18
            echo "\t\t\t<td><label class=\"labelStyle\">Id:</label></td>
\t\t\t<td>";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), 'widget');
            echo "</td>
\t    ";
        }
        // line 21
        echo "\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\"><label class=\"labelStyle\">Name:</label></td>
\t\t<td class=\"rowStyle\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'widget');
        echo "</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\"><label class=\"labelStyle\">Price:</label></td>
\t\t<td class=\"rowStyle\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "price", [], "any", false, false, false, 30), 'widget');
        echo "</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\"><label class=\"labelStyle\">Description:</label></td>
\t\t<td class=\"rowStyle\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'widget');
        echo "</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\"><label class=\"labelStyle\">Category:</label></td>
\t\t<td class=\"rowStyle\" style=\"width: 170px\">
\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "category", [], "any", false, false, false, 41), 'widget');
        echo "
";
        // line 43
        echo "    \t
";
        // line 46
        echo "                \t
";
        // line 48
        echo "            
";
        // line 50
        echo "    \t</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\">
\t\t    ";
        // line 55
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "rawPhoto", [], "any", false, false, false, 55))) {
            // line 56
            echo "\t\t\t\t<img class=\"smallImage\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56), "base64Image", [], "any", false, false, false, 56), "html", null, true);
            echo "\"/>
\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t<img class=\"smallImage\"/>
\t\t    ";
        }
        // line 60
        echo "\t    </td>
\t    
\t    <td>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62), 'widget');
        echo "</td>
\t</tr>
</table>

<br/>

";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "save", [], "any", false, false, false, 71), 'widget', ["label" => "Save"]);
        echo "
";
        // line 73
        echo "
";
        // line 75
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_show");
        echo "\" class=\"button\">Cancel</a>

";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/edit_product_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 77,  185 => 75,  182 => 73,  178 => 71,  169 => 62,  165 => 60,  161 => 58,  155 => 56,  153 => 55,  146 => 50,  143 => 48,  140 => 46,  137 => 43,  133 => 41,  124 => 35,  116 => 30,  108 => 25,  102 => 21,  97 => 19,  94 => 18,  92 => 17,  89 => 16,  85 => 13,  81 => 11,  75 => 9,  73 => 8,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/task/new.html.twig #}
{% extends 'base.html.twig' %}
{# {{ form(form) }}#}

{% block body %}
{{ form_start(form) }}

{% if form.vars.value.id > 0 %}
\t<h1>Edit Product {{ form.vars.value.name }}</h1>
{% else %}
\t<h1>New Product</h1>
{% endif %}

<table>
{# \tOnly show the Id Field, if it is > 0. For new Products, don't show the Id.#}
\t<tr>
\t\t{% if form.vars.value.id > 0 %}
\t\t\t<td><label class=\"labelStyle\">Id:</label></td>
\t\t\t<td>{{ form_widget(form.id) }}</td>
\t    {% endif %}
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\"><label class=\"labelStyle\">Name:</label></td>
\t\t<td class=\"rowStyle\">{{ form_widget(form.name) }}</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\"><label class=\"labelStyle\">Price:</label></td>
\t\t<td class=\"rowStyle\">{{ form_widget(form.price) }}</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\"><label class=\"labelStyle\">Description:</label></td>
\t\t<td class=\"rowStyle\">{{ form_widget(form.description) }}</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\"><label class=\"labelStyle\">Category:</label></td>
\t\t<td class=\"rowStyle\" style=\"width: 170px\">
\t\t{{ form_widget(form.category) }}
{#     \t\t<select style=\"width: 170px\">#}
    \t
{#                 {% for p in form.vars.value.categories %}#}
{#                 \t<option name=\"id\">{{ p.name }}</option>#}
                \t
{#             \t{% endfor %}#}
            
{#         \t</select>#}
    \t</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"rowStyle\">
\t\t    {% if not form.vars.value.rawPhoto is empty %}
\t\t\t\t<img class=\"smallImage\" src=\"{{ form.vars.value.base64Image }}\"/>
\t\t\t{% else %}
\t\t\t\t<img class=\"smallImage\"/>
\t\t    {% endif %}
\t    </td>
\t    
\t    <td>{{ form_widget(form.image) }}</td>
\t</tr>
</table>

<br/>

{# <button type=\"submit\" class=\"button\">#}
{# \t<i class=\"fa fa-save\" aria-hidden=\"true\"></i>Save#}
{# </button>#}
{{ form_widget(form.save, { 'label': 'Save' }) }}
{# {{ form_widget(form.cancel, { 'label': 'Cancel' }) }}#}

{# <a href=\"{{ path('product_save') }}\" class=\"button\">Save</a>#}
<a href=\"{{ path('products_show') }}\" class=\"button\">Cancel</a>

{{ form_end(form) }}

{% endblock %}", "product/edit_product_form.html.twig", "C:\\Projects\\PHP\\Symfony_Apps\\Test_Symfony_App\\templates\\product\\edit_product_form.html.twig");
    }
}
