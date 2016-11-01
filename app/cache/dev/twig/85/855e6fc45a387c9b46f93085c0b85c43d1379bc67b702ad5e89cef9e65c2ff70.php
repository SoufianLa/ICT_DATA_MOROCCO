<?php

/* chartBundle:Default:charteinternet.html.twig */
class __TwigTemplate_6bf25ec66141ea526acc8f138590dbd605001611efd64e729b7ab1c7ca4f19f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "chartBundle:Default:charteinternet.html.twig", 1);
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
        $__internal_0d6f5afc99c7edfec42c3011d7d6b247726818afe402622fe2a346931628c397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6f5afc99c7edfec42c3011d7d6b247726818afe402622fe2a346931628c397->enter($__internal_0d6f5afc99c7edfec42c3011d7d6b247726818afe402622fe2a346931628c397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:charteinternet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6f5afc99c7edfec42c3011d7d6b247726818afe402622fe2a346931628c397->leave($__internal_0d6f5afc99c7edfec42c3011d7d6b247726818afe402622fe2a346931628c397_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64d5ce7c848b26323d321a7a9a98d7c9444829f630b45248f3e468e32b979986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d5ce7c848b26323d321a7a9a98d7c9444829f630b45248f3e468e32b979986->enter($__internal_64d5ce7c848b26323d321a7a9a98d7c9444829f630b45248f3e468e32b979986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:charteinternet.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart0\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"linechart1\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_64d5ce7c848b26323d321a7a9a98d7c9444829f630b45248f3e468e32b979986->leave($__internal_64d5ce7c848b26323d321a7a9a98d7c9444829f630b45248f3e468e32b979986_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3f238ebb811eaf25190ae477234ffc7019bdd1cfdfe347bfb0c67b3878ab39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f238ebb811eaf25190ae477234ffc7019bdd1cfdfe347bfb0c67b3878ab39f->enter($__internal_c3f238ebb811eaf25190ae477234ffc7019bdd1cfdfe347bfb0c67b3878ab39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:charteinternet.html.twig"));

        // line 10
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 15
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["charteinternet0"]) ? $context["charteinternet0"] : $this->getContext($context, "charteinternet0")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["charteinternet1"]) ? $context["charteinternet1"] : $this->getContext($context, "charteinternet1")));
        echo "
    </script>

";
        
        $__internal_c3f238ebb811eaf25190ae477234ffc7019bdd1cfdfe347bfb0c67b3878ab39f->leave($__internal_c3f238ebb811eaf25190ae477234ffc7019bdd1cfdfe347bfb0c67b3878ab39f_prof);

    }

    public function getTemplateName()
    {
        return "chartBundle:Default:charteinternet.html.twig";
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
<div id=\"linechart1\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
{% endblock %}
{% block javascripts %}

    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        {{ chart(charteinternet0) }}
        {{ chart(charteinternet1) }}
    </script>

{% endblock %}", "chartBundle:Default:charteinternet.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/charteinternet.html.twig");
    }
}
