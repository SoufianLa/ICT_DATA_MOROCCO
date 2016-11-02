<?php

/* IctdataBundle:Default:adminspace.html.twig */
class __TwigTemplate_40c64b86fe6d151457418997d20a976ca997d0d3a2843aaf1b9509d88e3d930a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:Default:adminspace.html.twig", 1);
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
        $__internal_451dd058185e581b214a14e0865c57436774e217022ab8a0f2f0bf4f4d2215fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451dd058185e581b214a14e0865c57436774e217022ab8a0f2f0bf4f4d2215fd->enter($__internal_451dd058185e581b214a14e0865c57436774e217022ab8a0f2f0bf4f4d2215fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:adminspace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451dd058185e581b214a14e0865c57436774e217022ab8a0f2f0bf4f4d2215fd->leave($__internal_451dd058185e581b214a14e0865c57436774e217022ab8a0f2f0bf4f4d2215fd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_95d84c525188625cb1a101e15f88d1ae79b84af0891ce439838b859826cf7d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d84c525188625cb1a101e15f88d1ae79b84af0891ce439838b859826cf7d41->enter($__internal_95d84c525188625cb1a101e15f88d1ae79b84af0891ce439838b859826cf7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:Default:adminspace.html.twig"));

        // line 3
        echo "    <h1>Formulaire d'enquete : </h1><br />
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
";
        
        $__internal_95d84c525188625cb1a101e15f88d1ae79b84af0891ce439838b859826cf7d41->leave($__internal_95d84c525188625cb1a101e15f88d1ae79b84af0891ce439838b859826cf7d41_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:Default:adminspace.html.twig";
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
    <h1>Formulaire d'enquete : </h1><br />
    {{ form(f) }}
{% endblock %}", "IctdataBundle:Default:adminspace.html.twig", "C:\\wamp\\www\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/Default/adminspace.html.twig");
    }
}
