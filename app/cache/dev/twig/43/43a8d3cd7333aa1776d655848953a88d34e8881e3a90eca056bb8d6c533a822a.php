<?php

/* chartBundle:Default:chart.html.twig */
class __TwigTemplate_b1734700e0db1d841e740d53e72cf39e5fcfe614bf0dd39334291dcfafff4c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "chartBundle:Default:chart.html.twig", 1);
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
        $__internal_b0663fa92b498c42dba0022b3ec5603a222a22b5b14db8eab542ec906ef2d503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0663fa92b498c42dba0022b3ec5603a222a22b5b14db8eab542ec906ef2d503->enter($__internal_b0663fa92b498c42dba0022b3ec5603a222a22b5b14db8eab542ec906ef2d503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0663fa92b498c42dba0022b3ec5603a222a22b5b14db8eab542ec906ef2d503->leave($__internal_b0663fa92b498c42dba0022b3ec5603a222a22b5b14db8eab542ec906ef2d503_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb11c48a27baba87aa15c9740f3cd342425e11bb913d3ba4f6fc6becb7ff62b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb11c48a27baba87aa15c9740f3cd342425e11bb913d3ba4f6fc6becb7ff62b1->enter($__internal_fb11c48a27baba87aa15c9740f3cd342425e11bb913d3ba4f6fc6becb7ff62b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chart.html.twig"));

        // line 4
        echo "<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<br \\><br \\><br \\>
<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
        
        $__internal_fb11c48a27baba87aa15c9740f3cd342425e11bb913d3ba4f6fc6becb7ff62b1->leave($__internal_fb11c48a27baba87aa15c9740f3cd342425e11bb913d3ba4f6fc6becb7ff62b1_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddd91e2e75c78a1d8b3292968211a192d7bbbda99e0c8d33403401cc0d9cae55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd91e2e75c78a1d8b3292968211a192d7bbbda99e0c8d33403401cc0d9cae55->enter($__internal_ddd91e2e75c78a1d8b3292968211a192d7bbbda99e0c8d33403401cc0d9cae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chart.html.twig"));

        // line 9
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 14
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["pie"]) ? $context["pie"] : $this->getContext($context, "pie")));
        echo "
    </script>

";
        
        $__internal_ddd91e2e75c78a1d8b3292968211a192d7bbbda99e0c8d33403401cc0d9cae55->leave($__internal_ddd91e2e75c78a1d8b3292968211a192d7bbbda99e0c8d33403401cc0d9cae55_prof);

    }

    public function getTemplateName()
    {
        return "chartBundle:Default:chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 14,  57 => 9,  51 => 8,  41 => 4,  35 => 3,  11 => 1,);
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
<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<br \\><br \\><br \\>
<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
{% endblock %}
{% block javascripts %}

    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        {{ chart(chart) }}
        {{ chart(pie) }}
    </script>

{% endblock %}", "chartBundle:Default:chart.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chart.html.twig");
    }
}
