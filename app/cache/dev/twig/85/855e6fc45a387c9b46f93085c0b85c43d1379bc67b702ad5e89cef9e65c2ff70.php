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
        $__internal_5811b4b5ee9cd6ad953e960771d48716742f9aca0088331085d963312432752b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5811b4b5ee9cd6ad953e960771d48716742f9aca0088331085d963312432752b->enter($__internal_5811b4b5ee9cd6ad953e960771d48716742f9aca0088331085d963312432752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:charteinternet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5811b4b5ee9cd6ad953e960771d48716742f9aca0088331085d963312432752b->leave($__internal_5811b4b5ee9cd6ad953e960771d48716742f9aca0088331085d963312432752b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f05108cb1c420cd18daf59481a6a7903d1f825d4e3d217b8ec1647902a48c24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05108cb1c420cd18daf59481a6a7903d1f825d4e3d217b8ec1647902a48c24b->enter($__internal_f05108cb1c420cd18daf59481a6a7903d1f825d4e3d217b8ec1647902a48c24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:charteinternet.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart0\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"linechart1\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_f05108cb1c420cd18daf59481a6a7903d1f825d4e3d217b8ec1647902a48c24b->leave($__internal_f05108cb1c420cd18daf59481a6a7903d1f825d4e3d217b8ec1647902a48c24b_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb685ca14aaf58914be672800d0f6970d9ca9be21a539aafdf86b8ba970e92ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb685ca14aaf58914be672800d0f6970d9ca9be21a539aafdf86b8ba970e92ae->enter($__internal_bb685ca14aaf58914be672800d0f6970d9ca9be21a539aafdf86b8ba970e92ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:charteinternet.html.twig"));

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
        
        $__internal_bb685ca14aaf58914be672800d0f6970d9ca9be21a539aafdf86b8ba970e92ae->leave($__internal_bb685ca14aaf58914be672800d0f6970d9ca9be21a539aafdf86b8ba970e92ae_prof);

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
