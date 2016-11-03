<?php

/* chartBundle:Default:chartemobile.html.twig */
class __TwigTemplate_877d3149dfd8cd950e144eca21867d2482818adab6a55bcf3017e09160174b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "chartBundle:Default:chartemobile.html.twig", 1);
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
        $__internal_d2c9d5d9be5d0adef6b2d9a811d187883eeaa3965fc1523f5c8b57aaa1d154cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c9d5d9be5d0adef6b2d9a811d187883eeaa3965fc1523f5c8b57aaa1d154cc->enter($__internal_d2c9d5d9be5d0adef6b2d9a811d187883eeaa3965fc1523f5c8b57aaa1d154cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chartemobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c9d5d9be5d0adef6b2d9a811d187883eeaa3965fc1523f5c8b57aaa1d154cc->leave($__internal_d2c9d5d9be5d0adef6b2d9a811d187883eeaa3965fc1523f5c8b57aaa1d154cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5942155b21ec5c98aa8030ef63936e92764fd4394239245bdb051e891789843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5942155b21ec5c98aa8030ef63936e92764fd4394239245bdb051e891789843->enter($__internal_d5942155b21ec5c98aa8030ef63936e92764fd4394239245bdb051e891789843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartemobile.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"linechart_column\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_d5942155b21ec5c98aa8030ef63936e92764fd4394239245bdb051e891789843->leave($__internal_d5942155b21ec5c98aa8030ef63936e92764fd4394239245bdb051e891789843_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5af4fefd372c8c9624233eceaef774f356517999a4bda21870211dab7002b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5af4fefd372c8c9624233eceaef774f356517999a4bda21870211dab7002b87->enter($__internal_e5af4fefd372c8c9624233eceaef774f356517999a4bda21870211dab7002b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartemobile.html.twig"));

        // line 10
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 15
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chartemobile"]) ? $context["chartemobile"] : $this->getContext($context, "chartemobile")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chartemobile_column"]) ? $context["chartemobile_column"] : $this->getContext($context, "chartemobile_column")));
        echo "
    </script>

";
        
        $__internal_e5af4fefd372c8c9624233eceaef774f356517999a4bda21870211dab7002b87->leave($__internal_e5af4fefd372c8c9624233eceaef774f356517999a4bda21870211dab7002b87_prof);

    }

    public function getTemplateName()
    {
        return "chartBundle:Default:chartemobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  65 => 15,  58 => 10,  52 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
<br /><br /><br /><br />
<div id=\"linechart_column\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
{% endblock %}
{% block javascripts %}

    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        {{ chart(chartemobile) }}
        {{ chart(chartemobile_column) }}
    </script>

{% endblock %}", "chartBundle:Default:chartemobile.html.twig", "C:\\wamp\\www\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chartemobile.html.twig");
    }
}
