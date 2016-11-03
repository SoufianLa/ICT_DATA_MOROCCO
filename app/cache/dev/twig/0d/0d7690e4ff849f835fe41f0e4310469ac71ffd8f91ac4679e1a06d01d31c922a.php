<?php

/* chartBundle:Default:chartemobile.html.twig */
class __TwigTemplate_33e6c63776aaea1d385d0780b5d90214f3846a7c2a4cd17314eb6c5950fb268f extends Twig_Template
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
        $__internal_6d73e7fa4283a320af67d89401cfd7b18e33ee7847f585e824c3196724ad886e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d73e7fa4283a320af67d89401cfd7b18e33ee7847f585e824c3196724ad886e->enter($__internal_6d73e7fa4283a320af67d89401cfd7b18e33ee7847f585e824c3196724ad886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chartemobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d73e7fa4283a320af67d89401cfd7b18e33ee7847f585e824c3196724ad886e->leave($__internal_6d73e7fa4283a320af67d89401cfd7b18e33ee7847f585e824c3196724ad886e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c62d7e974ffb26e745f51b25886fe9d2a0d086542a6642de10fc173b5bec17fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62d7e974ffb26e745f51b25886fe9d2a0d086542a6642de10fc173b5bec17fa->enter($__internal_c62d7e974ffb26e745f51b25886fe9d2a0d086542a6642de10fc173b5bec17fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartemobile.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"linechart_column\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_c62d7e974ffb26e745f51b25886fe9d2a0d086542a6642de10fc173b5bec17fa->leave($__internal_c62d7e974ffb26e745f51b25886fe9d2a0d086542a6642de10fc173b5bec17fa_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c63fdf2ed0cac0e99b5d15da65d931852f8ac3de6a686f9f3a2f9b279680c01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63fdf2ed0cac0e99b5d15da65d931852f8ac3de6a686f9f3a2f9b279680c01e->enter($__internal_c63fdf2ed0cac0e99b5d15da65d931852f8ac3de6a686f9f3a2f9b279680c01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartemobile.html.twig"));

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
        
        $__internal_c63fdf2ed0cac0e99b5d15da65d931852f8ac3de6a686f9f3a2f9b279680c01e->leave($__internal_c63fdf2ed0cac0e99b5d15da65d931852f8ac3de6a686f9f3a2f9b279680c01e_prof);

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

{% endblock %}", "chartBundle:Default:chartemobile.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chartemobile.html.twig");
    }
}
