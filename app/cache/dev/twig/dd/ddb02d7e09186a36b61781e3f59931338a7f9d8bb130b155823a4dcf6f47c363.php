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
        $__internal_d1e4cc372eec35ee1565bbcdef0f069c1aa31bc66842a2fc1e9bb66ca8cf583d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e4cc372eec35ee1565bbcdef0f069c1aa31bc66842a2fc1e9bb66ca8cf583d->enter($__internal_d1e4cc372eec35ee1565bbcdef0f069c1aa31bc66842a2fc1e9bb66ca8cf583d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:chartefixe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e4cc372eec35ee1565bbcdef0f069c1aa31bc66842a2fc1e9bb66ca8cf583d->leave($__internal_d1e4cc372eec35ee1565bbcdef0f069c1aa31bc66842a2fc1e9bb66ca8cf583d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14d77a0ffbbf67e20f8c415b7cbd7e651cdbeea4b22c18045be110ddb0e7ccb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d77a0ffbbf67e20f8c415b7cbd7e651cdbeea4b22c18045be110ddb0e7ccb9->enter($__internal_14d77a0ffbbf67e20f8c415b7cbd7e651cdbeea4b22c18045be110ddb0e7ccb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartefixe.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_14d77a0ffbbf67e20f8c415b7cbd7e651cdbeea4b22c18045be110ddb0e7ccb9->leave($__internal_14d77a0ffbbf67e20f8c415b7cbd7e651cdbeea4b22c18045be110ddb0e7ccb9_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1dec22a655f84d971a6b056030715b613b2c300fafc52d58a3272bd0f25bae17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dec22a655f84d971a6b056030715b613b2c300fafc52d58a3272bd0f25bae17->enter($__internal_1dec22a655f84d971a6b056030715b613b2c300fafc52d58a3272bd0f25bae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:chartefixe.html.twig"));

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
        
        $__internal_1dec22a655f84d971a6b056030715b613b2c300fafc52d58a3272bd0f25bae17->leave($__internal_1dec22a655f84d971a6b056030715b613b2c300fafc52d58a3272bd0f25bae17_prof);

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
