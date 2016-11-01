<?php

/* chartBundle:Default:chartecomputer.html.twig */
class __TwigTemplate_af73864aa1526bb6a6eb56b2700b4d27e4067c522cb8b38df842a29bec9d8c4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "chartBundle:Default:chartecomputer.html.twig", 1);
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
        $__internal_103b0f4679f55d78a75996ce7675b43150540cd97f14b330a4f0710fec298d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103b0f4679f55d78a75996ce7675b43150540cd97f14b330a4f0710fec298d2c->enter($__internal_103b0f4679f55d78a75996ce7675b43150540cd97f14b330a4f0710fec298d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chartecomputer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103b0f4679f55d78a75996ce7675b43150540cd97f14b330a4f0710fec298d2c->leave($__internal_103b0f4679f55d78a75996ce7675b43150540cd97f14b330a4f0710fec298d2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4188776d5fc451b67e3cb513befe3990fc00876a706593d895b16b5527cc91cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4188776d5fc451b67e3cb513befe3990fc00876a706593d895b16b5527cc91cf->enter($__internal_4188776d5fc451b67e3cb513befe3990fc00876a706593d895b16b5527cc91cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartecomputer.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart0\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_4188776d5fc451b67e3cb513befe3990fc00876a706593d895b16b5527cc91cf->leave($__internal_4188776d5fc451b67e3cb513befe3990fc00876a706593d895b16b5527cc91cf_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6dced7b2d8f178bf3ab704ca536f6fc567efc01b7c23f085bff83cc8b8055aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dced7b2d8f178bf3ab704ca536f6fc567efc01b7c23f085bff83cc8b8055aaa->enter($__internal_6dced7b2d8f178bf3ab704ca536f6fc567efc01b7c23f085bff83cc8b8055aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartecomputer.html.twig"));

        // line 10
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 15
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chartecomputer0"]) ? $context["chartecomputer0"] : $this->getContext($context, "chartecomputer0")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chartecomputer"]) ? $context["chartecomputer"] : $this->getContext($context, "chartecomputer")));
        echo "
    </script>

";
        
        $__internal_6dced7b2d8f178bf3ab704ca536f6fc567efc01b7c23f085bff83cc8b8055aaa->leave($__internal_6dced7b2d8f178bf3ab704ca536f6fc567efc01b7c23f085bff83cc8b8055aaa_prof);

    }

    public function getTemplateName()
    {
        return "chartBundle:Default:chartecomputer.html.twig";
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
<div id=\"linechart0\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
{% endblock %}
{% block javascripts %}

    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        {{ chart(chartecomputer0) }}
        {{ chart(chartecomputer) }}
    </script>

{% endblock %}", "chartBundle:Default:chartecomputer.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chartecomputer.html.twig");
    }
}
