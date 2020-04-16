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
class __TwigTemplate_a364d7850f8d40be882cbb172f6f60d390dbfc0c0014d423d2b3101438758e25 extends Template
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
<table>
";
        // line 9
        echo "\t<tr>
\t\t";
        // line 10
        if (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), 0)) {
            // line 11
            echo "\t\t\t<td><label style=\"font-weight:bold\">Id:</label></td>
\t\t\t<td>";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), 'widget');
            echo "</td>
\t    ";
        }
        // line 14
        echo "\t</tr>
\t
\t<tr>
\t\t<td><label style=\"font-weight:bold\">Name:</label></td>
\t\t<td>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'widget');
        echo "</td>
\t</tr>
\t
\t<tr>
\t\t<td><label style=\"font-weight:bold\">Price:</label></td>
\t\t<td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "price", [], "any", false, false, false, 23), 'widget');
        echo "</td>
\t</tr>
\t
\t<tr>
\t\t<td><label style=\"font-weight:bold\">Description:</label></td>
\t\t<td>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'widget');
        echo "</td>
\t</tr>
</table>

<br/>

";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "save", [], "any", false, false, false, 37), 'widget', ["label" => "Save"]);
        echo "
";
        // line 39
        echo "
";
        // line 41
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_show");
        echo "\" class=\"button\">Cancel</a>

";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
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
        return array (  130 => 43,  124 => 41,  121 => 39,  117 => 37,  108 => 28,  100 => 23,  92 => 18,  86 => 14,  81 => 12,  78 => 11,  76 => 10,  73 => 9,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/task/new.html.twig #}
{% extends 'base.html.twig' %}
{# {{ form(form) }}#}

{% block body %}
{{ form_start(form) }}
<table>
{# \tOnly show the Id Field, if it is > 0. For new Products, don't show the Id.#}
\t<tr>
\t\t{% if form.vars.value.id > 0 %}
\t\t\t<td><label style=\"font-weight:bold\">Id:</label></td>
\t\t\t<td>{{ form_widget(form.id) }}</td>
\t    {% endif %}
\t</tr>
\t
\t<tr>
\t\t<td><label style=\"font-weight:bold\">Name:</label></td>
\t\t<td>{{ form_widget(form.name) }}</td>
\t</tr>
\t
\t<tr>
\t\t<td><label style=\"font-weight:bold\">Price:</label></td>
\t\t<td>{{ form_widget(form.price) }}</td>
\t</tr>
\t
\t<tr>
\t\t<td><label style=\"font-weight:bold\">Description:</label></td>
\t\t<td>{{ form_widget(form.description) }}</td>
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
