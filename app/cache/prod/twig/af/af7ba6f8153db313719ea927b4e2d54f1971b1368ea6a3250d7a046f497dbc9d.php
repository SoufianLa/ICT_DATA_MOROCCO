<?php

/* chartBundle:Default:chartecomputer.html.twig */
class __TwigTemplate_6b7253f462fa2edef8a810a4fd53337e98ce66f77728521701de9b31a021cb77 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<br /><br /><br /><br />
<div id=\"linechart0\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
<br /><br /><br /><br />
<div id=\"linechart\" style=\"min-width: 400px; height: 510px; margin: 0 auto\"></div>
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 15
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chartecomputer0"]) ? $context["chartecomputer0"] : null));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chartecomputer"]) ? $context["chartecomputer"] : null));
        echo "
    </script>

";
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
        return array (  54 => 16,  50 => 15,  43 => 10,  40 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "chartBundle:Default:chartecomputer.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdatachart\\chartBundle/Resources/views/Default/chartecomputer.html.twig");
    }
}
