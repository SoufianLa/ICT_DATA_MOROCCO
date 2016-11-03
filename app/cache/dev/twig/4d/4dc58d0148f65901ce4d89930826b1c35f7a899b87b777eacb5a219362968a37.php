<?php

/* IctdataBundle:Default:index.html.twig */
class __TwigTemplate_19aebc63e461ea88b8927194af7d85a462d3cb22877c6b0479bd870d5c03c12a extends Twig_Template
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
        $__internal_d8d7c81ab9b9e4ab4988103f25b5c809ab63567438ee3a5e6881a65fd3049e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d7c81ab9b9e4ab4988103f25b5c809ab63567438ee3a5e6881a65fd3049e3a->enter($__internal_d8d7c81ab9b9e4ab4988103f25b5c809ab63567438ee3a5e6881a65fd3049e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d7c81ab9b9e4ab4988103f25b5c809ab63567438ee3a5e6881a65fd3049e3a->leave($__internal_d8d7c81ab9b9e4ab4988103f25b5c809ab63567438ee3a5e6881a65fd3049e3a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_654f6258cf5bcd9961191c8a943ed3e75d67847df6c960a0a3f8d8a4659386a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654f6258cf5bcd9961191c8a943ed3e75d67847df6c960a0a3f8d8a4659386a9->enter($__internal_654f6258cf5bcd9961191c8a943ed3e75d67847df6c960a0a3f8d8a4659386a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:Default:index.html.twig"));

        // line 3
        echo "Hello  <br />
";
        
        $__internal_654f6258cf5bcd9961191c8a943ed3e75d67847df6c960a0a3f8d8a4659386a9->leave($__internal_654f6258cf5bcd9961191c8a943ed3e75d67847df6c960a0a3f8d8a4659386a9_prof);

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
", "IctdataBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/Default/index.html.twig");
    }
}
