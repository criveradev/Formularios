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
class __TwigTemplate_0a17f34c1918f0daad514da79c5eda4f extends Template
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

        echo "Hello PageController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Formulario V3! ✅</h1>

    ";
        // line 15
        echo "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["contactoForm"]) || array_key_exists("contactoForm", $context) ? $context["contactoForm"] : (function () { throw new RuntimeError('Variable "contactoForm" does not exist.', 15, $this->source); })()), ["bootstrap_5_horizontal_layout.html.twig"], true);
        // line 16
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactoForm"]) || array_key_exists("contactoForm", $context) ? $context["contactoForm"] : (function () { throw new RuntimeError('Variable "contactoForm" does not exist.', 16, $this->source); })()), 'form_start', ["method" => "POST", "attr" => ["novalidate" => "novalidate"]]);
        // line 19
        echo "

    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["contactoForm"]) || array_key_exists("contactoForm", $context) ? $context["contactoForm"] : (function () { throw new RuntimeError('Variable "contactoForm" does not exist.', 21, $this->source); })()), 'widget');
        echo "

    ";
        // line 36
        echo "
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactoForm"]) || array_key_exists("contactoForm", $context) ? $context["contactoForm"] : (function () { throw new RuntimeError('Variable "contactoForm" does not exist.', 37, $this->source); })()), 'form_end');
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
        return array (  95 => 37,  92 => 36,  87 => 21,  83 => 19,  80 => 16,  77 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PageController!{% endblock %}

{% block body %}
    <h1>Formulario V3! ✅</h1>

    {# 
    form(form) 
    <form action=\"url\">
        <input type=\"text\">
        <button>Enviar</button>
    </form>
    #}
    {% form_theme contactoForm 'bootstrap_5_horizontal_layout.html.twig' %}
    {{ form_start(contactoForm, {
        'method': 'POST',
        'attr': {'novalidate': 'novalidate'}
    }) }}

    {{ form_widget(contactoForm) }}

    {#
    {{ form_errors(contactoForm) }}

    {{ form_row(contactoForm.message, {
        'label': 'Comentario o sugerencia',
        'attr': {'maxlength': 10}
    }) }}

    <div>
        {{ form_errors(contactoForm.email) }}
        {{ form_row(contactoForm.email) }}
    </div>
    #}

    {{ form_end(contactoForm) }}
{% endblock %}
", "page/contacto-v3.html.twig", "/Users/crivera/Desktop/www/Formulario/templates/page/contacto-v3.html.twig");
    }
}
