<?php

/* IctdataBundle:Default:form_pabonn.html.twig */
class __TwigTemplate_6d1812c4bc5a6b11cce0ae8e7ea3b92cbc4cbb0aa8f10b98f0c1cf70ab0f6b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:Default:form_pabonn.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67260370350e7fe5a3b0819e3032bedf37839fb53c2c5089988545172be8281c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67260370350e7fe5a3b0819e3032bedf37839fb53c2c5089988545172be8281c->enter($__internal_67260370350e7fe5a3b0819e3032bedf37839fb53c2c5089988545172be8281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:form_pabonn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67260370350e7fe5a3b0819e3032bedf37839fb53c2c5089988545172be8281c->leave($__internal_67260370350e7fe5a3b0819e3032bedf37839fb53c2c5089988545172be8281c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_516fd38654b2a7691f94950c3a877e326df3e6ac08e0552438f47559b058ac13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516fd38654b2a7691f94950c3a877e326df3e6ac08e0552438f47559b058ac13->enter($__internal_516fd38654b2a7691f94950c3a877e326df3e6ac08e0552438f47559b058ac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:Default:form_pabonn.html.twig"));

        // line 3
        echo "    <h1>Formulaire de parc d'abonn :</h1> <br />
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f_parcabonn"]) ? $context["f_parcabonn"] : $this->getContext($context, "f_parcabonn")), 'form');
        echo "
";
        
        $__internal_516fd38654b2a7691f94950c3a877e326df3e6ac08e0552438f47559b058ac13->leave($__internal_516fd38654b2a7691f94950c3a877e326df3e6ac08e0552438f47559b058ac13_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:Default:form_pabonn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
    <h1>Formulaire de parc d'abonn :</h1> <br />
    {{ form(f_parcabonn) }}
{% endblock %}", "IctdataBundle:Default:form_pabonn.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/Default/form_pabonn.html.twig");
    }
}
