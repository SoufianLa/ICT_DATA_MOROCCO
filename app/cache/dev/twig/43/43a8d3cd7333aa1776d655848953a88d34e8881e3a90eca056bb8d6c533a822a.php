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
        $__internal_7f96f277686cf593a5ce3786ae935b5edd82c097895f381e518b2b32bffb0a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f96f277686cf593a5ce3786ae935b5edd82c097895f381e518b2b32bffb0a9f->enter($__internal_7f96f277686cf593a5ce3786ae935b5edd82c097895f381e518b2b32bffb0a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f96f277686cf593a5ce3786ae935b5edd82c097895f381e518b2b32bffb0a9f->leave($__internal_7f96f277686cf593a5ce3786ae935b5edd82c097895f381e518b2b32bffb0a9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33d2b03bd9c764988b829754e12a7231d0156d66629667bdf810b8a1099209f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d2b03bd9c764988b829754e12a7231d0156d66629667bdf810b8a1099209f1->enter($__internal_33d2b03bd9c764988b829754e12a7231d0156d66629667bdf810b8a1099209f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chart.html.twig"));

        // line 4
        echo "<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<br \\><br \\><br \\>
<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<br \\><br \\><br \\>
<div id=\"cont\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<br \\><br \\><br \\>
<div id=\"con\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<div id=\"overviewchart\"></div>
";
        
        $__internal_33d2b03bd9c764988b829754e12a7231d0156d66629667bdf810b8a1099209f1->leave($__internal_33d2b03bd9c764988b829754e12a7231d0156d66629667bdf810b8a1099209f1_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82fe5602beb70a33d8e9e6f231061cf5b44c13081c65d5ee60356e26789ef31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fe5602beb70a33d8e9e6f231061cf5b44c13081c65d5ee60356e26789ef31b->enter($__internal_82fe5602beb70a33d8e9e6f231061cf5b44c13081c65d5ee60356e26789ef31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chart.html.twig"));

        // line 14
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 19
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["pie"]) ? $context["pie"] : $this->getContext($context, "pie")));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["newchart"]) ? $context["newchart"] : $this->getContext($context, "newchart")));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["newchart2"]) ? $context["newchart2"] : $this->getContext($context, "newchart2")));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["uni"]) ? $context["uni"] : $this->getContext($context, "uni")));
        echo "
    </script>

";
        
        $__internal_82fe5602beb70a33d8e9e6f231061cf5b44c13081c65d5ee60356e26789ef31b->leave($__internal_82fe5602beb70a33d8e9e6f231061cf5b44c13081c65d5ee60356e26789ef31b_prof);

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
        return array (  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  62 => 14,  56 => 13,  41 => 4,  35 => 3,  11 => 1,);
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
<br \\><br \\><br \\>
<div id=\"cont\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<br \\><br \\><br \\>
<div id=\"con\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<div id=\"overviewchart\"></div>
{% endblock %}
{% block javascripts %}

    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        {{ chart(chart) }}
        {{ chart(pie) }}
        {{ chart(newchart) }}
        {{ chart(newchart2) }}
        {{ chart(uni) }}
    </script>

{% endblock %}", "chartBundle:Default:chart.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chart.html.twig");
    }
}
