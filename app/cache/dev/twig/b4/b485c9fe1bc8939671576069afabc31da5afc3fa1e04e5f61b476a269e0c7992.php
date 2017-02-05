<?php

/* IctdataBundle:D_infrastruct_autre:edit.html.twig */
class __TwigTemplate_15ec45982e8b8488ef4b3a1a4c784c5782d395cdebeb4ec94637244e6e160cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:D_infrastruct_autre:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1ff45105e7cc46d8e3224d037cc7b75be192bd5635d12457c09da632b693f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ff45105e7cc46d8e3224d037cc7b75be192bd5635d12457c09da632b693f4f->enter($__internal_f1ff45105e7cc46d8e3224d037cc7b75be192bd5635d12457c09da632b693f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:D_infrastruct_autre:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ff45105e7cc46d8e3224d037cc7b75be192bd5635d12457c09da632b693f4f->leave($__internal_f1ff45105e7cc46d8e3224d037cc7b75be192bd5635d12457c09da632b693f4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d55a0f7880a34938415d2532fc3f6e2d3c0f299706fa69f9bacda7d3993945f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55a0f7880a34938415d2532fc3f6e2d3c0f299706fa69f9bacda7d3993945f3->enter($__internal_d55a0f7880a34938415d2532fc3f6e2d3c0f299706fa69f9bacda7d3993945f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:D_infrastruct_autre:edit.html.twig"));

        // line 4
        echo "<h1>D_infrastruct_autre edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infra");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_d55a0f7880a34938415d2532fc3f6e2d3c0f299706fa69f9bacda7d3993945f3->leave($__internal_d55a0f7880a34938415d2532fc3f6e2d3c0f299706fa69f9bacda7d3993945f3_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:D_infrastruct_autre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>D_infrastruct_autre edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('infra') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "IctdataBundle:D_infrastruct_autre:edit.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/D_infrastruct_autre/edit.html.twig");
    }
}
