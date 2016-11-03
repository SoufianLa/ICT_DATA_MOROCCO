<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8eeba56c41f8738c505bbc5b64ecb43d22af6d87e58b345c2d47360eba983e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_985208a9b817ab55c07e0f937f8204bfc75712c30bc912353eb741372511211a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985208a9b817ab55c07e0f937f8204bfc75712c30bc912353eb741372511211a->enter($__internal_985208a9b817ab55c07e0f937f8204bfc75712c30bc912353eb741372511211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985208a9b817ab55c07e0f937f8204bfc75712c30bc912353eb741372511211a->leave($__internal_985208a9b817ab55c07e0f937f8204bfc75712c30bc912353eb741372511211a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0c15216884294d399e201ac1185f01a8069a46907792d82d87b654c7b78fab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c15216884294d399e201ac1185f01a8069a46907792d82d87b654c7b78fab0->enter($__internal_a0c15216884294d399e201ac1185f01a8069a46907792d82d87b654c7b78fab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a0c15216884294d399e201ac1185f01a8069a46907792d82d87b654c7b78fab0->leave($__internal_a0c15216884294d399e201ac1185f01a8069a46907792d82d87b654c7b78fab0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f622d95d11cf194cfcf2da1eb9220f2492daeb5d57f3211541eb58442ff31dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f622d95d11cf194cfcf2da1eb9220f2492daeb5d57f3211541eb58442ff31dc7->enter($__internal_f622d95d11cf194cfcf2da1eb9220f2492daeb5d57f3211541eb58442ff31dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f622d95d11cf194cfcf2da1eb9220f2492daeb5d57f3211541eb58442ff31dc7->leave($__internal_f622d95d11cf194cfcf2da1eb9220f2492daeb5d57f3211541eb58442ff31dc7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1d1994f32eb89ad563edd84144be1250fdc77db1b499a20120c8fcda4b0cc38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d1994f32eb89ad563edd84144be1250fdc77db1b499a20120c8fcda4b0cc38->enter($__internal_f1d1994f32eb89ad563edd84144be1250fdc77db1b499a20120c8fcda4b0cc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f1d1994f32eb89ad563edd84144be1250fdc77db1b499a20120c8fcda4b0cc38->leave($__internal_f1d1994f32eb89ad563edd84144be1250fdc77db1b499a20120c8fcda4b0cc38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
