<?php

/* IctdataBundle:Default:index.html.twig */
class __TwigTemplate_e12a122f9b2d92febccdd0061a9d6e7d1eac2bc86c9a1d86a86567b387841bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::template.html.twig", "IctdataBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db9dccc67bb7a1bf4c7e98269867028ae07a55a89310c0e7455fc82c2a9fa262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9dccc67bb7a1bf4c7e98269867028ae07a55a89310c0e7455fc82c2a9fa262->enter($__internal_db9dccc67bb7a1bf4c7e98269867028ae07a55a89310c0e7455fc82c2a9fa262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db9dccc67bb7a1bf4c7e98269867028ae07a55a89310c0e7455fc82c2a9fa262->leave($__internal_db9dccc67bb7a1bf4c7e98269867028ae07a55a89310c0e7455fc82c2a9fa262_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a620ad3381f36fbd2f1ce41c2fd0fec168f1d9674350eef4ba4f0fb35de7b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a620ad3381f36fbd2f1ce41c2fd0fec168f1d9674350eef4ba4f0fb35de7b70->enter($__internal_1a620ad3381f36fbd2f1ce41c2fd0fec168f1d9674350eef4ba4f0fb35de7b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:Default:index.html.twig"));

        // line 3
        echo "Hello  <br />
";
        
        $__internal_1a620ad3381f36fbd2f1ce41c2fd0fec168f1d9674350eef4ba4f0fb35de7b70->leave($__internal_1a620ad3381f36fbd2f1ce41c2fd0fec168f1d9674350eef4ba4f0fb35de7b70_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::template.html.twig' %}
{% block body %}
Hello  <br />
{% endblock %}
", "IctdataBundle:Default:index.html.twig", "C:\\wamp\\www\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/Default/index.html.twig");
    }
}
