<?php

/* IctdataBundle:Default:adminspace.html.twig */
class __TwigTemplate_92cdd507e8eae6617f6240a4399ee394b8b66ec310eab0a8d308fc88527470dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:Default:adminspace.html.twig", 1);
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
        $__internal_78115a3372843017067fba5779962d74e7b1e5365282812eb4d10f3298f05fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78115a3372843017067fba5779962d74e7b1e5365282812eb4d10f3298f05fb3->enter($__internal_78115a3372843017067fba5779962d74e7b1e5365282812eb4d10f3298f05fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:adminspace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78115a3372843017067fba5779962d74e7b1e5365282812eb4d10f3298f05fb3->leave($__internal_78115a3372843017067fba5779962d74e7b1e5365282812eb4d10f3298f05fb3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ea3701f406dc4147ac8615f4cc88bf5e0ec684001200d50d5b27d689275cd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea3701f406dc4147ac8615f4cc88bf5e0ec684001200d50d5b27d689275cd16->enter($__internal_1ea3701f406dc4147ac8615f4cc88bf5e0ec684001200d50d5b27d689275cd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:Default:adminspace.html.twig"));

        // line 3
        echo "    <h1>Formulaire d'enquete : </h1><br />
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
";
        
        $__internal_1ea3701f406dc4147ac8615f4cc88bf5e0ec684001200d50d5b27d689275cd16->leave($__internal_1ea3701f406dc4147ac8615f4cc88bf5e0ec684001200d50d5b27d689275cd16_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:Default:adminspace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
{% block body %}
    <h1>Formulaire d'enquete : </h1><br />
    {{ form(f) }}
{% endblock %}", "IctdataBundle:Default:adminspace.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/Default/adminspace.html.twig");
    }
}
