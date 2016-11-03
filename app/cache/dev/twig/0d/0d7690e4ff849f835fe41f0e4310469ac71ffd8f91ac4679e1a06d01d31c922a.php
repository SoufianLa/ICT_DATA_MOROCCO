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
        $__internal_d228a30782045e5890f2e4dbf63ceed1c809e0eacd94768bc904368e325d3eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d228a30782045e5890f2e4dbf63ceed1c809e0eacd94768bc904368e325d3eda->enter($__internal_d228a30782045e5890f2e4dbf63ceed1c809e0eacd94768bc904368e325d3eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chartemobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d228a30782045e5890f2e4dbf63ceed1c809e0eacd94768bc904368e325d3eda->leave($__internal_d228a30782045e5890f2e4dbf63ceed1c809e0eacd94768bc904368e325d3eda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d30aed52d8f58c8e11e7ae06510f0f0aca1241e3a97b880e6fc6a1937075856a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30aed52d8f58c8e11e7ae06510f0f0aca1241e3a97b880e6fc6a1937075856a->enter($__internal_d30aed52d8f58c8e11e7ae06510f0f0aca1241e3a97b880e6fc6a1937075856a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartemobile.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"linechart_column\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_d30aed52d8f58c8e11e7ae06510f0f0aca1241e3a97b880e6fc6a1937075856a->leave($__internal_d30aed52d8f58c8e11e7ae06510f0f0aca1241e3a97b880e6fc6a1937075856a_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_561d5ed7f516938f3e5c3f29bb191e5d9848459339801d2ee56406f35a1f2230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561d5ed7f516938f3e5c3f29bb191e5d9848459339801d2ee56406f35a1f2230->enter($__internal_561d5ed7f516938f3e5c3f29bb191e5d9848459339801d2ee56406f35a1f2230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartemobile.html.twig"));

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
        
        $__internal_561d5ed7f516938f3e5c3f29bb191e5d9848459339801d2ee56406f35a1f2230->leave($__internal_561d5ed7f516938f3e5c3f29bb191e5d9848459339801d2ee56406f35a1f2230_prof);

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
