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
        $__internal_52a678624f16ec91772c3a68f9d29939f25ea498734b33203bbabfff63fff74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a678624f16ec91772c3a68f9d29939f25ea498734b33203bbabfff63fff74a->enter($__internal_52a678624f16ec91772c3a68f9d29939f25ea498734b33203bbabfff63fff74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chartemobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a678624f16ec91772c3a68f9d29939f25ea498734b33203bbabfff63fff74a->leave($__internal_52a678624f16ec91772c3a68f9d29939f25ea498734b33203bbabfff63fff74a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a61a76ef899f27ae5f8f082afa84b3ca6811bc0dc2679487f3010b19ffe8d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a61a76ef899f27ae5f8f082afa84b3ca6811bc0dc2679487f3010b19ffe8d26->enter($__internal_5a61a76ef899f27ae5f8f082afa84b3ca6811bc0dc2679487f3010b19ffe8d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartemobile.html.twig"));

        // line 4
        echo "    <br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_5a61a76ef899f27ae5f8f082afa84b3ca6811bc0dc2679487f3010b19ffe8d26->leave($__internal_5a61a76ef899f27ae5f8f082afa84b3ca6811bc0dc2679487f3010b19ffe8d26_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18c141f11dbad2dbfabc0b4660c2ea0db578cfb6551324073408ce7596cfe754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c141f11dbad2dbfabc0b4660c2ea0db578cfb6551324073408ce7596cfe754->enter($__internal_18c141f11dbad2dbfabc0b4660c2ea0db578cfb6551324073408ce7596cfe754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartemobile.html.twig"));

        // line 8
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 13
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chartemobile"]) ? $context["chartemobile"] : $this->getContext($context, "chartemobile")));
        echo "
    </script>

";
        
        $__internal_18c141f11dbad2dbfabc0b4660c2ea0db578cfb6551324073408ce7596cfe754->leave($__internal_18c141f11dbad2dbfabc0b4660c2ea0db578cfb6551324073408ce7596cfe754_prof);

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
        {{ chart(chartemobile) }}
    </script>

{% endblock %}", "chartBundle:Default:chartemobile.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chartemobile.html.twig");
    }
}
