<?php

/* chartBundle:Default:dns.html.twig */
class __TwigTemplate_58f66183b1bf420c38f06d28b51a18bcb820ad30dc114280e274a3ddd0a829ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "chartBundle:Default:dns.html.twig", 1);
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
        $__internal_569b99870cdf46750f7261c1105c69c3800f6e1443bc00d9ebe2a6839665221d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569b99870cdf46750f7261c1105c69c3800f6e1443bc00d9ebe2a6839665221d->enter($__internal_569b99870cdf46750f7261c1105c69c3800f6e1443bc00d9ebe2a6839665221d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chartBundle:Default:dns.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569b99870cdf46750f7261c1105c69c3800f6e1443bc00d9ebe2a6839665221d->leave($__internal_569b99870cdf46750f7261c1105c69c3800f6e1443bc00d9ebe2a6839665221d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_080767f46194adf9e59e66c181e894e28414f6a257aa3e61a7f7ccc8006a78c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080767f46194adf9e59e66c181e894e28414f6a257aa3e61a7f7ccc8006a78c3->enter($__internal_080767f46194adf9e59e66c181e894e28414f6a257aa3e61a7f7ccc8006a78c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:dns.html.twig"));

        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"j_0\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
        
        $__internal_080767f46194adf9e59e66c181e894e28414f6a257aa3e61a7f7ccc8006a78c3->leave($__internal_080767f46194adf9e59e66c181e894e28414f6a257aa3e61a7f7ccc8006a78c3_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_493796b10fd6a62ffc70f4f1e7c39c3910e3d515e7dcd68ff71282fd012bb692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493796b10fd6a62ffc70f4f1e7c39c3910e3d515e7dcd68ff71282fd012bb692->enter($__internal_493796b10fd6a62ffc70f4f1e7c39c3910e3d515e7dcd68ff71282fd012bb692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "chartBundle:Default:dns.html.twig"));

        // line 10
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
    </script>

";
        
        $__internal_493796b10fd6a62ffc70f4f1e7c39c3910e3d515e7dcd68ff71282fd012bb692->leave($__internal_493796b10fd6a62ffc70f4f1e7c39c3910e3d515e7dcd68ff71282fd012bb692_prof);

    }

    public function getTemplateName()
    {
        return "chartBundle:Default:dns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  52 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
<div id=\"j_0\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
{% endblock %}
{% block javascripts %}

    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
    </script>

{% endblock %}", "chartBundle:Default:dns.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/dns.html.twig");
    }
}
