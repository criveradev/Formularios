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

/* page/contacto-v3.html.twig */
class __TwigTemplate_453260fd4f81d432d91f409853c615a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contacto-v3.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/contacto-v3.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PageController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Formulario V3! ✅</h1>

\t";
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["contactoForm"]) || array_key_exists("contactoForm", $context) ? $context["contactoForm"] : (function () { throw new RuntimeError('Variable "contactoForm" does not exist.', 9, $this->source); })()), ["bootstrap_5_horizontal_layout.html.twig"], true);
        // line 10
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactoForm"]) || array_key_exists("contactoForm", $context) ? $context["contactoForm"] : (function () { throw new RuntimeError('Variable "contactoForm" does not exist.', 10, $this->source); })()), 'form_start', ["method" => "POST", "attr" => ["novalidate" => "novalidate"]]);
        // line 13
        echo "

\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["contactoForm"]) || array_key_exists("contactoForm", $context) ? $context["contactoForm"] : (function () { throw new RuntimeError('Variable "contactoForm" does not exist.', 15, $this->source); })()), 'widget');
        echo "


\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactoForm"]) || array_key_exists("contactoForm", $context) ? $context["contactoForm"] : (function () { throw new RuntimeError('Variable "contactoForm" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page/contacto-v3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  87 => 15,  83 => 13,  80 => 10,  78 => 9,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PageController!
{% endblock %}

{% block body %}
\t<h1>Formulario V3! ✅</h1>

\t{% form_theme contactoForm 'bootstrap_5_horizontal_layout.html.twig' %}
\t{{ form_start(contactoForm, {
        'method': 'POST',
        'attr': {'novalidate': 'novalidate'}
    }) }}

\t{{ form_widget(contactoForm) }}


\t{{ form_end(contactoForm) }}
{% endblock %}
", "page/contacto-v3.html.twig", "/Users/crivera/Desktop/www/symfonyForm/templates/page/contacto-v3.html.twig");
    }
}
