<?php

/* IctdataBundle:Default:index.html.twig */
class __TwigTemplate_76a49d8fdc6058b2e6f0bd62c663f1781a88ad135e877f798767d360a713c8fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "IctdataBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db3c69c66d18968b960607a00286b3181c230acb2aec4e3257863ed6aada9c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3c69c66d18968b960607a00286b3181c230acb2aec4e3257863ed6aada9c63->enter($__internal_db3c69c66d18968b960607a00286b3181c230acb2aec4e3257863ed6aada9c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db3c69c66d18968b960607a00286b3181c230acb2aec4e3257863ed6aada9c63->leave($__internal_db3c69c66d18968b960607a00286b3181c230acb2aec4e3257863ed6aada9c63_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_11d22c0052cec17a21046d3b16d98b071a565da0476bb5cedc9e98ae4f354680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d22c0052cec17a21046d3b16d98b071a565da0476bb5cedc9e98ae4f354680->enter($__internal_11d22c0052cec17a21046d3b16d98b071a565da0476bb5cedc9e98ae4f354680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Hello  <br />
";
        
        $__internal_11d22c0052cec17a21046d3b16d98b071a565da0476bb5cedc9e98ae4f354680->leave($__internal_11d22c0052cec17a21046d3b16d98b071a565da0476bb5cedc9e98ae4f354680_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::template.html.twig' %}
{% block body %}
Hello  <br />
{% endblock %}
";
    }
}
