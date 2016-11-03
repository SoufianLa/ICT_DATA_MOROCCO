<?php

/* chartBundle:Default:chartefixe.html.twig */
class __TwigTemplate_64389d8bc7e095d5d85e579ed0c1e4bb500e69949f92d3e6274d56af856a43e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "chartBundle:Default:chartefixe.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de40a4a85a7d9da2e4f86c12142dcb48b52b2dafbb917a94ba896747a155539c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de40a4a85a7d9da2e4f86c12142dcb48b52b2dafbb917a94ba896747a155539c->enter($__internal_de40a4a85a7d9da2e4f86c12142dcb48b52b2dafbb917a94ba896747a155539c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chartefixe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de40a4a85a7d9da2e4f86c12142dcb48b52b2dafbb917a94ba896747a155539c->leave($__internal_de40a4a85a7d9da2e4f86c12142dcb48b52b2dafbb917a94ba896747a155539c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d86faa909f4f1d32ef1e0cee77a9e758a5422004dd557b3662df994e695fa648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86faa909f4f1d32ef1e0cee77a9e758a5422004dd557b3662df994e695fa648->enter($__internal_d86faa909f4f1d32ef1e0cee77a9e758a5422004dd557b3662df994e695fa648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartefixe.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_d86faa909f4f1d32ef1e0cee77a9e758a5422004dd557b3662df994e695fa648->leave($__internal_d86faa909f4f1d32ef1e0cee77a9e758a5422004dd557b3662df994e695fa648_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0fa4b7ff3fce3400c70a9ac03286da98a4ac13a4b503dad897779f2752ac7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fa4b7ff3fce3400c70a9ac03286da98a4ac13a4b503dad897779f2752ac7fc->enter($__internal_e0fa4b7ff3fce3400c70a9ac03286da98a4ac13a4b503dad897779f2752ac7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartefixe.html.twig"));

        // line 8
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 13
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chartefixe"]) ? $context["chartefixe"] : $this->getContext($context, "chartefixe")));
        echo "
    </script>

";
        
        $__internal_e0fa4b7ff3fce3400c70a9ac03286da98a4ac13a4b503dad897779f2752ac7fc->leave($__internal_e0fa4b7ff3fce3400c70a9ac03286da98a4ac13a4b503dad897779f2752ac7fc_prof);

    }

    public function getTemplateName()
    {
        return "chartBundle:Default:chartefixe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  56 => 8,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
{% endblock %}
{% block javascripts %}

    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        {{ chart(chartefixe) }}
    </script>

{% endblock %}", "chartBundle:Default:chartefixe.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chartefixe.html.twig");
    }
}
