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
        $__internal_31b2bcaf3f26fba645cf72265554ff5a38d2c640ef81577366ae8800d07f7846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b2bcaf3f26fba645cf72265554ff5a38d2c640ef81577366ae8800d07f7846->enter($__internal_31b2bcaf3f26fba645cf72265554ff5a38d2c640ef81577366ae8800d07f7846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b2bcaf3f26fba645cf72265554ff5a38d2c640ef81577366ae8800d07f7846->leave($__internal_31b2bcaf3f26fba645cf72265554ff5a38d2c640ef81577366ae8800d07f7846_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb232311d42488027c10d62493cd11a854ea638205be4800a37992cdb9a5577c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb232311d42488027c10d62493cd11a854ea638205be4800a37992cdb9a5577c->enter($__internal_cb232311d42488027c10d62493cd11a854ea638205be4800a37992cdb9a5577c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cb232311d42488027c10d62493cd11a854ea638205be4800a37992cdb9a5577c->leave($__internal_cb232311d42488027c10d62493cd11a854ea638205be4800a37992cdb9a5577c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9674683021ec408cf7938e936a8bce09ccc657d9376146306bab2f466f748afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9674683021ec408cf7938e936a8bce09ccc657d9376146306bab2f466f748afe->enter($__internal_9674683021ec408cf7938e936a8bce09ccc657d9376146306bab2f466f748afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9674683021ec408cf7938e936a8bce09ccc657d9376146306bab2f466f748afe->leave($__internal_9674683021ec408cf7938e936a8bce09ccc657d9376146306bab2f466f748afe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3631b848b15f940528d3fe06e4a90baf7fe75e2c1d3868f98e08c116e2a39df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3631b848b15f940528d3fe06e4a90baf7fe75e2c1d3868f98e08c116e2a39df4->enter($__internal_3631b848b15f940528d3fe06e4a90baf7fe75e2c1d3868f98e08c116e2a39df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3631b848b15f940528d3fe06e4a90baf7fe75e2c1d3868f98e08c116e2a39df4->leave($__internal_3631b848b15f940528d3fe06e4a90baf7fe75e2c1d3868f98e08c116e2a39df4_prof);

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
