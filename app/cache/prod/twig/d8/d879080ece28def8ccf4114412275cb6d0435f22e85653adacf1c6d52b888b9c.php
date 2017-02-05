<?php

/* chartBundle:Default:chart.html.twig */
class __TwigTemplate_325bff2c34d94717df1e93708652dd93321c3323996e461ab6abcae0f5538362 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 19
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chart"]) ? $context["chart"] : null));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["pie"]) ? $context["pie"] : null));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["newchart"]) ? $context["newchart"] : null));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["newchart2"]) ? $context["newchart2"] : null));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["uni"]) ? $context["uni"] : null));
        echo "
    </script>

";
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
        return array (  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  47 => 14,  44 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "chartBundle:Default:chart.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chart.html.twig");
    }
}
