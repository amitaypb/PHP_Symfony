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

/* product/products.html.twig */
class __TwigTemplate_ca79bff49c5d8156eec038680420245cacd13d9fa21b33e3f7998b5a499c1b30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/products.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/products.html.twig", 2);
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
        echo "\t<h1>Products</h1>
    <table id=\"productsTable\" class=\"table table-striped table-middle-aligned\">
    \t<thead>
        \t<tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Name</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>Price</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>Description</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>Image</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>Actions</th>
            </tr>
    \t</thead>
    \t<tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
";
            // line 25
            echo "\t\t\t
\t\t\t\t";
            // line 26
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["p"], "imageFilename", [], "any", false, false, false, 26))) {
                // line 27
                echo "\t\t\t\t\t<td style=\"min-width: 100px\"></td>
\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t<td style=\"min-width: 100px\">
";
                // line 31
                echo "\t\t\t\t\t\t<img class=\"smallImage\" src=\"data:image/png;base64,";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getRawPhoto", [], "method", false, false, false, 31), "html", null, true);
                echo "\"/>

";
                // line 35
                echo "\t\t\t\t\t</td>
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t
                <td class=\"text-right\">
                \t<div class=\"item-actions\">
                \t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"button\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Edit
                    \t</a>
";
            // line 44
            echo "                    \t";
            // line 45
            echo "                    </div>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
    
<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_create");
        echo "\" class=\"button\">Create Product</a>

<div id=\"tvesModal\" class=\"modalContainer\">

\t\t<div class=\"modal-content\">
\t\t\t";
        // line 58
        echo "\t\t\t
\t\t\t<div class=\"modal-header\">
\t
    \t\t<div class=\"title\">Edit Product</div>
    \t\t
    \t\t<button class=\"close\">&times;</button>
    \t</div>
\t
\t\t\t";
        // line 68
        echo "\t\t\t";
        // line 69
        echo "\t\t\t
\t\t\t</br>
\t\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><label for=\"productIdLabel\" style=\"font-weight:bold\">Id:</label></td>
\t\t\t\t<td><label id=\"productIdLabel\"></label></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productNameTextBox\" style=\"font-weight:bold\">Name:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productNameTextBox\"></input></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productPriceTextBox\" style=\"font-weight:bold\">Price:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productPriceTextBox\"></input></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productDescriptionTextBox\" style=\"font-weight:bold\">Description:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productDescriptionTextBox\"></input></td>
\t\t\t</tr>
\t\t</table>
\t\t
\t\t<br/>
\t\t
\t\t<a id=\"btnSaveProduct\" class=\"button\">Save</a>
\t\t<a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_show");
        echo "\" class=\"button\">Cancel</a>
\t\t</div>
\t</div>
\t
<div class=\"modal\" id=\"modal\">
 \t
\t<div class=\"modal-header\">
\t
\t\t<div class=\"title\">Edit Product</div>
\t\t
\t\t<button data-close-button class=\"close-button\">&times;</button>
\t</div>
\t
\t<div class=\"modal-body\">
\t\tModal Test!!
\t</div>
</div>

<div id=\"overlay\">
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "<script type=\"text/javascript\">
\t\t\t//Solution 1      
    \t\tvar modal = document.getElementById(\"tvesModal\");
    \t\tvar btn = document.getElementById(\"btnModal\");
    \t\tvar btns = document.getElementsByClassName(\"modalButton\");
    \t\tvar span = document.getElementsByClassName(\"close\")[0];
    \t\tvar body = document.getElementsByTagName(\"body\")[0];
    \t\tvar table = document.getElementById(\"productsTable\");

    \t\tvar productIdLabel = document.getElementById(\"productIdLabel\");
\t\t\tvar productNameTextBox = document.getElementById(\"productNameTextBox\");
\t\t\tvar productPriceTextBox = document.getElementById(\"productPriceTextBox\");
\t\t\tvar productDescriptionTextBox = document.getElementById(\"productDescriptionTextBox\");
    \t\tvar btnSaveProduct = document.getElementById(\"btnSaveProduct\");

    \t\t//This is how you do a foreach.
    \t\tArray.from(btns).forEach(button => 
    \t\t{
    \t\t\tbutton.addEventListener('click', () => 
    \t\t\t{
        \t\t\tmodal.style.display = \"block\";
        
        \t\t\tbody.style.position = \"static\";
        \t\t\tbody.style.height = \"100%\";
        \t\t\tbody.style.overflow = \"hidden\";

        \t\t\t//Fill the PopUp with the Product Info.

        \t\t\t//Get the Selected Row in the Table.
        \t\t\tvar row = button.closest('tr');
        \t\t\tvar rowIndex = row.rowIndex;

        \t\t\t//Get the Values of the Product.
        \t\t\tvar productId = table.rows[rowIndex].cells[0].innerHTML;
        \t\t\tvar productName = table.rows[rowIndex].cells[1].innerHTML;
        \t\t\tvar productPrice = table.rows[rowIndex].cells[2].innerHTML;
        \t\t\tvar productDescription = table.rows[rowIndex].cells[3].innerHTML;

        \t\t\tproductIdLabel.innerHTML = productId;
        \t\t\tproductNameTextBox.value = productName;
        \t\t\tproductPriceTextBox.value = productPrice;
        \t\t\tproductDescriptionTextBox.value = productDescription;
        \t\t})
    \t\t})
        \t\t
    \t\t//btn.onclick = function() {
    \t\t//\tmodal.style.display = \"block\";
    
    \t\t//\tbody.style.position = \"static\";
    \t\t//\tbody.style.height = \"100%\";
    \t\t//\tbody.style.overflow = \"hidden\";
    \t\t//}
    
    \t\tspan.onclick = function() {
    \t\t\tmodal.style.display = \"none\";
    
    \t\t\tbody.style.position = \"inherit\";
    \t\t\tbody.style.height = \"auto\";
    \t\t\tbody.style.overflow = \"visible\";
    \t\t}
    
    \t\twindow.onclick = function(event) {
    \t\t\tif (event.target == modal) {
    \t\t\t\tmodal.style.display = \"none\";
    
    \t\t\t\tbody.style.position = \"inherit\";
    \t\t\t\tbody.style.height = \"auto\";
    \t\t\t\tbody.style.overflow = \"visible\";
    \t\t\t}
    \t\t}

//     \t\tbtnSaveProduct.addEventListener('click', function()
//     \t\t{
//      \t\t\tvar productId = productIdLabel.innerHTML;
//      \t\t\tvar productName = productNameTextBox.value;
//      \t\t\tvar productPrice = productPriceTextBox.value;
//      \t\t\tvar productDescription = productDescriptionTextBox.value;

//      \t\t\tvar href = \"\";
//      \t\t\tvar performNativeAjax = false;
    \t\t\t
//          \t\t//Create the href dinamically.
//          \t\tif(performNativeAjax == false)
//          \t\t{ 
//          \t\t\thref = \"/product/save_product_default/?Id=\" + productId + \"&Name=\" + productName + \"&Price=\" + productPrice + \"&Description=\" + productDescription;
//          \t\t\t//btnSaveProduct.innerHTML = href;
//   \t            \t//this.href =  href;
  \t            \t
//          \t\t}
//          \t\telse
//          \t\t{
//             \t\t//Try to perform an AJAX request without jquery.
//     \t    \t\t//Native XMLHttpRequest Object.
//             \t    var xhr = new XMLHttpRequest();
        
//                 \txhr.open('GET', 'product/save_product_ajax');
//                 \t//xhr.setRequestHeader('Content-Type', 'application/json');
//                 \txhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
// //                \txhr.onload = function() 
// //                \t{
// //                 \t    if (xhr.status === 200) 
// //                 \t    {
// //                 \t        alert('Something went wrong.  Name is now ' + xhr.responseText);
// //                 \t    }
// //                 \t    else if (xhr.status !== 200) 
// //                 \t    {
// //                 \t        alert('Request failed.  Returned status of ' + xhr.status);
// //                 \t    }
// //                \t};
                \t
//                 \t//xhr.send(encodeURI('Id=' + productId + \"&Name=\" + productName + \"&Price=\" + productPrice + \"&Description=\" + productDescription));
//                 \t//xhr.send(encodeURI('Id=' + productId));
//                 \t//xhr.send();
// //                 \txhr.send(JSON.stringify({
// //                         Id: productId,
// //                         Name: productName,
// //                         Price: productPrice,
// //                         Description: productDescription
// //                     }));
//          \t\t}
        \t \t            
//                 return false;
//         \t});

    \t\t//AJAX Request
    \t\tbtnSaveProduct.addEventListener('click', function()
    \t\t{
               \$.ajax({
                   url:'";
        // line 248
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_product_ajax");
        echo "',
                   type: \"POST\",
                   dataType: \"json\",
                   data: {
                       \"Id\": productIdLabel.innerHTML,
                       \"Name\": productNameTextBox.value,
                       \"Price\": productPriceTextBox.value,
                       \"Description\": productDescriptionTextBox.value
                   },
                   async: true,
                   success: function (data)
                   {
                        //Show an Alert Message.
                       alert(data);
    
                   }
               });
                
               return false;
        \t});\t\t

    \t\t//Solution 2
      \t\tconst openModalButtons = document.querySelectorAll('[data-modal-target]')
      \t\tconst closeModalButtons = document.querySelectorAll('[data-close-button]')
      \t\tconst overlay = document.getElementById('overlay')
      \t
      \t\topenModalButtons.forEach(button => {
\t\t\t\tbutton.addEventListener('click', () => {
\t\t\t\t\tconst modal = document.querySelector(button.dataset.modalTarget)

\t\t\t\t\topenModal(modal)
\t\t\t\t})
          \t})
          \t
      \t\tcloseModalButtons.forEach(button => {
\t\t\t\tbutton.addEventListener('click', () => {
\t\t\t\t\tconst modal = button.closest('.modal')

\t\t\t\t\tcloseModal(modal)
\t\t\t\t})
          \t})
          \t
          \toverlay.addEventListener('click', () => {
\t\t\t\tconst modals = document.querySelectorAll('.modal.active')
\t\t\t\tmodals.forEach(modal => {
\t\t\t\t\tcloseModal(modal)
\t\t\t\t})\t\t\t\t
          \t})
          \t
      \t\tfunction openModal(modal)
      \t\t{
\t\t\t\tif(modal == null)
\t\t\t\t{
\t\t\t\t\treturn
\t\t\t\t}

\t\t\t\tmodal.classList.add('active')
\t\t\t\toverlay.classList.add('active')
          \t}

      \t\tfunction closeModal(modal)
      \t\t{
\t\t\t\tif(modal == null)
\t\t\t\t{
\t\t\t\t\treturn
\t\t\t\t}

\t\t\t\tmodal.classList.remove('active')
\t\t\t\toverlay.classList.remove('active')
          \t}
      </script>
      
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 248,  247 => 120,  237 => 119,  205 => 96,  176 => 69,  174 => 68,  164 => 58,  156 => 52,  151 => 49,  142 => 45,  140 => 44,  134 => 40,  129 => 37,  125 => 35,  119 => 31,  116 => 29,  112 => 27,  110 => 26,  107 => 25,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  88 => 19,  84 => 18,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/product/products.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
\t<h1>Products</h1>
    <table id=\"productsTable\" class=\"table table-striped table-middle-aligned\">
    \t<thead>
        \t<tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Name</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>Price</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>Description</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>Image</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>Actions</th>
            </tr>
    \t</thead>
    \t<tbody>
            {% for p in products %}
            <tr>
                <td>{{ p.id }}</td>
                <td>{{ p.name }}</td>
                <td>{{ p.price }}</td>
                <td>{{ p.description }}</td>
{#              <td>{{ p.imageFilename }}</td>#}
\t\t\t
\t\t\t\t{% if p.imageFilename is empty %}
\t\t\t\t\t<td style=\"min-width: 100px\"></td>
\t\t\t\t{% else %}
\t\t\t\t\t<td style=\"min-width: 100px\">
{# \t\t\t\t\t\t<img src=\"public/uploads/images/{{ p.imageFilename }}\"/>#}
\t\t\t\t\t\t<img class=\"smallImage\" src=\"data:image/png;base64,{{ p.getRawPhoto() }}\"/>

{# \t\t\t\t\t\tHardcoded Image working#}
{# \t\t\t\t\t\t<img class=\"smallImage\" src=\"data:image/png;base64,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\"/>#}
\t\t\t\t\t</td>
\t\t\t\t{% endif %}
\t\t\t\t
                <td class=\"text-right\">
                \t<div class=\"item-actions\">
                \t\t<a href=\"{{ path('product_edit', {id: p.id}) }}\" class=\"button\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Edit
                    \t</a>
{#                     \t<button class=\"modalButton\">Edit</button>#}
                    \t{#<button data-modal-target=\"#modal\">Edit</button>#}
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    
<a href=\"{{ path('product_create') }}\" class=\"button\">Create Product</a>

<div id=\"tvesModal\" class=\"modalContainer\">

\t\t<div class=\"modal-content\">
\t\t\t{#<span class=\"close\">×</span>#}
\t\t\t
\t\t\t<div class=\"modal-header\">
\t
    \t\t<div class=\"title\">Edit Product</div>
    \t\t
    \t\t<button class=\"close\">&times;</button>
    \t</div>
\t
\t\t\t{#<button class=\"close\">&times;</button>
\t\t\t<h2>Edit Product</h2>#}
\t\t\t{#<p>Se ha desplegado el modal y bloqueado el scroll del body!</p>#}
\t\t\t
\t\t\t</br>
\t\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><label for=\"productIdLabel\" style=\"font-weight:bold\">Id:</label></td>
\t\t\t\t<td><label id=\"productIdLabel\"></label></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productNameTextBox\" style=\"font-weight:bold\">Name:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productNameTextBox\"></input></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productPriceTextBox\" style=\"font-weight:bold\">Price:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productPriceTextBox\"></input></td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td><label for=\"productDescriptionTextBox\" style=\"font-weight:bold\">Description:</label></td>
\t\t\t\t<td><input type=\"text\" id=\"productDescriptionTextBox\"></input></td>
\t\t\t</tr>
\t\t</table>
\t\t
\t\t<br/>
\t\t
\t\t<a id=\"btnSaveProduct\" class=\"button\">Save</a>
\t\t<a href=\"{{ path('products_show') }}\" class=\"button\">Cancel</a>
\t\t</div>
\t</div>
\t
<div class=\"modal\" id=\"modal\">
 \t
\t<div class=\"modal-header\">
\t
\t\t<div class=\"title\">Edit Product</div>
\t\t
\t\t<button data-close-button class=\"close-button\">&times;</button>
\t</div>
\t
\t<div class=\"modal-body\">
\t\tModal Test!!
\t</div>
</div>

<div id=\"overlay\">
</div>

{% endblock %}

{% block javascripts %}
<script type=\"text/javascript\">
\t\t\t//Solution 1      
    \t\tvar modal = document.getElementById(\"tvesModal\");
    \t\tvar btn = document.getElementById(\"btnModal\");
    \t\tvar btns = document.getElementsByClassName(\"modalButton\");
    \t\tvar span = document.getElementsByClassName(\"close\")[0];
    \t\tvar body = document.getElementsByTagName(\"body\")[0];
    \t\tvar table = document.getElementById(\"productsTable\");

    \t\tvar productIdLabel = document.getElementById(\"productIdLabel\");
\t\t\tvar productNameTextBox = document.getElementById(\"productNameTextBox\");
\t\t\tvar productPriceTextBox = document.getElementById(\"productPriceTextBox\");
\t\t\tvar productDescriptionTextBox = document.getElementById(\"productDescriptionTextBox\");
    \t\tvar btnSaveProduct = document.getElementById(\"btnSaveProduct\");

    \t\t//This is how you do a foreach.
    \t\tArray.from(btns).forEach(button => 
    \t\t{
    \t\t\tbutton.addEventListener('click', () => 
    \t\t\t{
        \t\t\tmodal.style.display = \"block\";
        
        \t\t\tbody.style.position = \"static\";
        \t\t\tbody.style.height = \"100%\";
        \t\t\tbody.style.overflow = \"hidden\";

        \t\t\t//Fill the PopUp with the Product Info.

        \t\t\t//Get the Selected Row in the Table.
        \t\t\tvar row = button.closest('tr');
        \t\t\tvar rowIndex = row.rowIndex;

        \t\t\t//Get the Values of the Product.
        \t\t\tvar productId = table.rows[rowIndex].cells[0].innerHTML;
        \t\t\tvar productName = table.rows[rowIndex].cells[1].innerHTML;
        \t\t\tvar productPrice = table.rows[rowIndex].cells[2].innerHTML;
        \t\t\tvar productDescription = table.rows[rowIndex].cells[3].innerHTML;

        \t\t\tproductIdLabel.innerHTML = productId;
        \t\t\tproductNameTextBox.value = productName;
        \t\t\tproductPriceTextBox.value = productPrice;
        \t\t\tproductDescriptionTextBox.value = productDescription;
        \t\t})
    \t\t})
        \t\t
    \t\t//btn.onclick = function() {
    \t\t//\tmodal.style.display = \"block\";
    
    \t\t//\tbody.style.position = \"static\";
    \t\t//\tbody.style.height = \"100%\";
    \t\t//\tbody.style.overflow = \"hidden\";
    \t\t//}
    
    \t\tspan.onclick = function() {
    \t\t\tmodal.style.display = \"none\";
    
    \t\t\tbody.style.position = \"inherit\";
    \t\t\tbody.style.height = \"auto\";
    \t\t\tbody.style.overflow = \"visible\";
    \t\t}
    
    \t\twindow.onclick = function(event) {
    \t\t\tif (event.target == modal) {
    \t\t\t\tmodal.style.display = \"none\";
    
    \t\t\t\tbody.style.position = \"inherit\";
    \t\t\t\tbody.style.height = \"auto\";
    \t\t\t\tbody.style.overflow = \"visible\";
    \t\t\t}
    \t\t}

//     \t\tbtnSaveProduct.addEventListener('click', function()
//     \t\t{
//      \t\t\tvar productId = productIdLabel.innerHTML;
//      \t\t\tvar productName = productNameTextBox.value;
//      \t\t\tvar productPrice = productPriceTextBox.value;
//      \t\t\tvar productDescription = productDescriptionTextBox.value;

//      \t\t\tvar href = \"\";
//      \t\t\tvar performNativeAjax = false;
    \t\t\t
//          \t\t//Create the href dinamically.
//          \t\tif(performNativeAjax == false)
//          \t\t{ 
//          \t\t\thref = \"/product/save_product_default/?Id=\" + productId + \"&Name=\" + productName + \"&Price=\" + productPrice + \"&Description=\" + productDescription;
//          \t\t\t//btnSaveProduct.innerHTML = href;
//   \t            \t//this.href =  href;
  \t            \t
//          \t\t}
//          \t\telse
//          \t\t{
//             \t\t//Try to perform an AJAX request without jquery.
//     \t    \t\t//Native XMLHttpRequest Object.
//             \t    var xhr = new XMLHttpRequest();
        
//                 \txhr.open('GET', 'product/save_product_ajax');
//                 \t//xhr.setRequestHeader('Content-Type', 'application/json');
//                 \txhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
// //                \txhr.onload = function() 
// //                \t{
// //                 \t    if (xhr.status === 200) 
// //                 \t    {
// //                 \t        alert('Something went wrong.  Name is now ' + xhr.responseText);
// //                 \t    }
// //                 \t    else if (xhr.status !== 200) 
// //                 \t    {
// //                 \t        alert('Request failed.  Returned status of ' + xhr.status);
// //                 \t    }
// //                \t};
                \t
//                 \t//xhr.send(encodeURI('Id=' + productId + \"&Name=\" + productName + \"&Price=\" + productPrice + \"&Description=\" + productDescription));
//                 \t//xhr.send(encodeURI('Id=' + productId));
//                 \t//xhr.send();
// //                 \txhr.send(JSON.stringify({
// //                         Id: productId,
// //                         Name: productName,
// //                         Price: productPrice,
// //                         Description: productDescription
// //                     }));
//          \t\t}
        \t \t            
//                 return false;
//         \t});

    \t\t//AJAX Request
    \t\tbtnSaveProduct.addEventListener('click', function()
    \t\t{
               \$.ajax({
                   url:'{{ (path('save_product_ajax')) }}',
                   type: \"POST\",
                   dataType: \"json\",
                   data: {
                       \"Id\": productIdLabel.innerHTML,
                       \"Name\": productNameTextBox.value,
                       \"Price\": productPriceTextBox.value,
                       \"Description\": productDescriptionTextBox.value
                   },
                   async: true,
                   success: function (data)
                   {
                        //Show an Alert Message.
                       alert(data);
    
                   }
               });
                
               return false;
        \t});\t\t

    \t\t//Solution 2
      \t\tconst openModalButtons = document.querySelectorAll('[data-modal-target]')
      \t\tconst closeModalButtons = document.querySelectorAll('[data-close-button]')
      \t\tconst overlay = document.getElementById('overlay')
      \t
      \t\topenModalButtons.forEach(button => {
\t\t\t\tbutton.addEventListener('click', () => {
\t\t\t\t\tconst modal = document.querySelector(button.dataset.modalTarget)

\t\t\t\t\topenModal(modal)
\t\t\t\t})
          \t})
          \t
      \t\tcloseModalButtons.forEach(button => {
\t\t\t\tbutton.addEventListener('click', () => {
\t\t\t\t\tconst modal = button.closest('.modal')

\t\t\t\t\tcloseModal(modal)
\t\t\t\t})
          \t})
          \t
          \toverlay.addEventListener('click', () => {
\t\t\t\tconst modals = document.querySelectorAll('.modal.active')
\t\t\t\tmodals.forEach(modal => {
\t\t\t\t\tcloseModal(modal)
\t\t\t\t})\t\t\t\t
          \t})
          \t
      \t\tfunction openModal(modal)
      \t\t{
\t\t\t\tif(modal == null)
\t\t\t\t{
\t\t\t\t\treturn
\t\t\t\t}

\t\t\t\tmodal.classList.add('active')
\t\t\t\toverlay.classList.add('active')
          \t}

      \t\tfunction closeModal(modal)
      \t\t{
\t\t\t\tif(modal == null)
\t\t\t\t{
\t\t\t\t\treturn
\t\t\t\t}

\t\t\t\tmodal.classList.remove('active')
\t\t\t\toverlay.classList.remove('active')
          \t}
      </script>
      
  {% endblock %}", "product/products.html.twig", "C:\\Projects\\PHP\\Symfony_Apps\\Test_Symfony_App\\templates\\product\\products.html.twig");
    }
}
