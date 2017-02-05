<?php

/* IctdataBundle:D_infrastruct_autre:new.html.twig */
class __TwigTemplate_50c3204b1db9745113c598b35f8efcf71cde58a0f08f54c1aa12d0aae98ef5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:D_infrastruct_autre:new.html.twig", 1);
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
        $__internal_2b384a57ac24ff17eaad96f80bab177435140342f60b75239016989e5d392e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b384a57ac24ff17eaad96f80bab177435140342f60b75239016989e5d392e1f->enter($__internal_2b384a57ac24ff17eaad96f80bab177435140342f60b75239016989e5d392e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:D_infrastruct_autre:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b384a57ac24ff17eaad96f80bab177435140342f60b75239016989e5d392e1f->leave($__internal_2b384a57ac24ff17eaad96f80bab177435140342f60b75239016989e5d392e1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59dc78bb3daa8117c996bc78ee53b96a832afd8735ffec2270b9e1f3f1698fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59dc78bb3daa8117c996bc78ee53b96a832afd8735ffec2270b9e1f3f1698fe->enter($__internal_a59dc78bb3daa8117c996bc78ee53b96a832afd8735ffec2270b9e1f3f1698fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:D_infrastruct_autre:new.html.twig"));

        // line 4
        echo "<h1>D_infrastruct_autre creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_a59dc78bb3daa8117c996bc78ee53b96a832afd8735ffec2270b9e1f3f1698fe->leave($__internal_a59dc78bb3daa8117c996bc78ee53b96a832afd8735ffec2270b9e1f3f1698fe_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:D_infrastruct_autre:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>D_infrastruct_autre creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('infra') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "IctdataBundle:D_infrastruct_autre:new.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/D_infrastruct_autre/new.html.twig");
    }
}
