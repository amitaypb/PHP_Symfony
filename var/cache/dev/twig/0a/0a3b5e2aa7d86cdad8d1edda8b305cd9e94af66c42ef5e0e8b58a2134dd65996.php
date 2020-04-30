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

/* base.html.twig */
class __TwigTemplate_edc356fcbbee5047448d520994d4525e2ac5c2e663370ad558581b885c3e0ad9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
";
        // line 8
        echo "        
        <style>
         .button {
             background-color: #1c87c9;
             border: none;
             color: white;
             padding: 10px 34px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 20px;
             margin: 4px 2px;
             cursor: pointer;
             font-family: \"Cambria Math\" 
         }
         
         .modalButton {
             background-color: #1c87c9;
             border: none;
             color: white;
             padding: 10px 34px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 20px;
             margin: 4px 2px;
             cursor: pointer;
             font-family: \"Cambria Math\" 
         }
         
         .modal {
        \tposition: fixed;
        \ttop: 50%;
        \tleft: 50%;
        \ttransform: translate(-50%, -50%) scale(0);
        \ttransition: 200ms ease-in-out; 
        \tborder: 1px solid black; 
        \tborder-radius: 10px; 
        \tz-index: 10; 
        \tbackground-color: white;
         \twidth: 500px; 
        \tmax-width: 80%
        }
        
        .modal.active {
        \ttransform: translate(-50%, -50%) scale(1); 
        }
        
        .modal-header {
        \tpadding: 10px 10px 10px 15px; 
        \tdisplay: flex; 
        \tjustify-content: space-between; 
        \talign-items: center; 
        \tborder-bottom: 1px solid black
        }
        
        .modal-header .title{
        \tfont-size: 1.25rem; 
        \tfont-weight: bold
        }
        
        .modal-header .close-button{
        \tcursor: pointer; 
        \tborder: none; 
        \toutline: none; 
        \tbackground: none;
        \tfont-size: 1.25rem; 
        \tfont-weight: bold
        }
        
        .modal-body{
        \tpadding: 10px 15px
        }
        
        #overlay{
        \tposition: fixed;
        \topacity: 0;
        \ttransition: 200ms ease-in-out; 
        \ttop: 0; 
        \tleft: 0; 
        \tright: 0; 
        \tbottom: 0; 
        \tbackground-color: rgba(0, 0, 0, .5); 
        \tpointer-events: none\t
        }
        
        #overlay.active{
        \topacity: 1;
        \tpointer-events: all
        }
        
        
        .modalContainer {
\t\t\tdisplay: none; 
\t\t\tposition: fixed; 
\t\t\tz-index: 1;
\t\t\tpadding-top: 100px;
\t\t\tleft: 0;
\t\t\ttop: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%; 
\t\t\toverflow: auto; 
\t\t\tbackground-color: rgb(0,0,0);
\t\t\tbackground-color: rgba(0,0,0,0.4);
\t\t}

\t\t.modalContainer .modal-content {
\t\t\tbackground-color: #fefefe;
\t\t\tmargin: auto;
\t\t\tpadding: 20px;
\t\t\tborder: 1px solid lightgray;
\t\t\tborder-top: 10px solid #58abb7;
\t\t\twidth: 40%;
\t\t}

\t\t.modalContainer .close {
\t\t\tcolor: #aaaaaa;
\t\t\tfloat: right;
\t\t\tfont-size: 28px;
\t\t\tfont-weight: bold;
\t\t\tborder: none
\t\t}

\t\t.modalContainer .close:hover,
\t\t.modalContainer .close:focus {
\t\t\tcolor: #000;
\t\t\ttext-decoration: none;
\t\t\tcursor: pointer;
\t\t}
\t\t
\t\t.smallImage {
\t\t\tmax-height: 100px;
\t\t\tmax-width: 100px
\t\t}
\t\t
\t\t.labelStyle {
\t\t\tfont-weight: bold;
\t\t}
      </style>
      
        ";
        // line 148
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 149
        echo "    </head>
    <body>
        ";
        // line 151
        $this->displayBlock('body', $context, $blocks);
        // line 152
        echo "        
        ";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 154
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  280 => 153,  262 => 151,  244 => 148,  225 => 5,  213 => 154,  211 => 153,  208 => 152,  206 => 151,  202 => 149,  200 => 148,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        
{#         <script type=\"text/javascript\" src=\"{{ asset('jquery/js/jquery-3.5.0.min.js') }}\"></script>#}
        
        <style>
         .button {
             background-color: #1c87c9;
             border: none;
             color: white;
             padding: 10px 34px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 20px;
             margin: 4px 2px;
             cursor: pointer;
             font-family: \"Cambria Math\" 
         }
         
         .modalButton {
             background-color: #1c87c9;
             border: none;
             color: white;
             padding: 10px 34px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 20px;
             margin: 4px 2px;
             cursor: pointer;
             font-family: \"Cambria Math\" 
         }
         
         .modal {
        \tposition: fixed;
        \ttop: 50%;
        \tleft: 50%;
        \ttransform: translate(-50%, -50%) scale(0);
        \ttransition: 200ms ease-in-out; 
        \tborder: 1px solid black; 
        \tborder-radius: 10px; 
        \tz-index: 10; 
        \tbackground-color: white;
         \twidth: 500px; 
        \tmax-width: 80%
        }
        
        .modal.active {
        \ttransform: translate(-50%, -50%) scale(1); 
        }
        
        .modal-header {
        \tpadding: 10px 10px 10px 15px; 
        \tdisplay: flex; 
        \tjustify-content: space-between; 
        \talign-items: center; 
        \tborder-bottom: 1px solid black
        }
        
        .modal-header .title{
        \tfont-size: 1.25rem; 
        \tfont-weight: bold
        }
        
        .modal-header .close-button{
        \tcursor: pointer; 
        \tborder: none; 
        \toutline: none; 
        \tbackground: none;
        \tfont-size: 1.25rem; 
        \tfont-weight: bold
        }
        
        .modal-body{
        \tpadding: 10px 15px
        }
        
        #overlay{
        \tposition: fixed;
        \topacity: 0;
        \ttransition: 200ms ease-in-out; 
        \ttop: 0; 
        \tleft: 0; 
        \tright: 0; 
        \tbottom: 0; 
        \tbackground-color: rgba(0, 0, 0, .5); 
        \tpointer-events: none\t
        }
        
        #overlay.active{
        \topacity: 1;
        \tpointer-events: all
        }
        
        
        .modalContainer {
\t\t\tdisplay: none; 
\t\t\tposition: fixed; 
\t\t\tz-index: 1;
\t\t\tpadding-top: 100px;
\t\t\tleft: 0;
\t\t\ttop: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%; 
\t\t\toverflow: auto; 
\t\t\tbackground-color: rgb(0,0,0);
\t\t\tbackground-color: rgba(0,0,0,0.4);
\t\t}

\t\t.modalContainer .modal-content {
\t\t\tbackground-color: #fefefe;
\t\t\tmargin: auto;
\t\t\tpadding: 20px;
\t\t\tborder: 1px solid lightgray;
\t\t\tborder-top: 10px solid #58abb7;
\t\t\twidth: 40%;
\t\t}

\t\t.modalContainer .close {
\t\t\tcolor: #aaaaaa;
\t\t\tfloat: right;
\t\t\tfont-size: 28px;
\t\t\tfont-weight: bold;
\t\t\tborder: none
\t\t}

\t\t.modalContainer .close:hover,
\t\t.modalContainer .close:focus {
\t\t\tcolor: #000;
\t\t\ttext-decoration: none;
\t\t\tcursor: pointer;
\t\t}
\t\t
\t\t.smallImage {
\t\t\tmax-height: 100px;
\t\t\tmax-width: 100px
\t\t}
\t\t
\t\t.labelStyle {
\t\t\tfont-weight: bold;
\t\t}
      </style>
      
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Projects\\PHP\\Symfony_Apps\\Test_Symfony_App\\templates\\base.html.twig");
    }
}
