<?php

/* IctdataBundle:Default:adminspace.html.twig */
class __TwigTemplate_92cdd507e8eae6617f6240a4399ee394b8b66ec310eab0a8d308fc88527470dc extends Twig_Template
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
        $__internal_e7ec1b574acf7512e22bc644701e170df029fdb9341375f3d613d8635530a3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ec1b574acf7512e22bc644701e170df029fdb9341375f3d613d8635530a3f6->enter($__internal_e7ec1b574acf7512e22bc644701e170df029fdb9341375f3d613d8635530a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:adminspace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ec1b574acf7512e22bc644701e170df029fdb9341375f3d613d8635530a3f6->leave($__internal_e7ec1b574acf7512e22bc644701e170df029fdb9341375f3d613d8635530a3f6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d72b66e49275ec2d80be1bc35ee7f86b94f7d89172f5ffe21ad610e057927b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d72b66e49275ec2d80be1bc35ee7f86b94f7d89172f5ffe21ad610e057927b9->enter($__internal_2d72b66e49275ec2d80be1bc35ee7f86b94f7d89172f5ffe21ad610e057927b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:Default:adminspace.html.twig"));

        // line 3
        echo "    Admin space  <br />
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
";
        
        $__internal_2d72b66e49275ec2d80be1bc35ee7f86b94f7d89172f5ffe21ad610e057927b9->leave($__internal_2d72b66e49275ec2d80be1bc35ee7f86b94f7d89172f5ffe21ad610e057927b9_prof);

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
    Admin space  <br />
    {{ form(f) }}
{% endblock %}", "IctdataBundle:Default:adminspace.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/Default/adminspace.html.twig");
    }
}
