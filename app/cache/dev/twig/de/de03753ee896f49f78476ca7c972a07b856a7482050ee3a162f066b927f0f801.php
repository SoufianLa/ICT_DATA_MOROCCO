<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7c2b9fe491c42f496b34ad76054a3c9eb9b702e37ea3b1d92f6a2b075ea762e1 extends Twig_Template
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
        $__internal_0ca6047c6f822be3b0ba37084a74e2030601062f1cb2bd99f40de92289e90793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca6047c6f822be3b0ba37084a74e2030601062f1cb2bd99f40de92289e90793->enter($__internal_0ca6047c6f822be3b0ba37084a74e2030601062f1cb2bd99f40de92289e90793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca6047c6f822be3b0ba37084a74e2030601062f1cb2bd99f40de92289e90793->leave($__internal_0ca6047c6f822be3b0ba37084a74e2030601062f1cb2bd99f40de92289e90793_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cff82f652bb88064f882b09497df1426d8741d48eb83b797c44dd187f307890a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff82f652bb88064f882b09497df1426d8741d48eb83b797c44dd187f307890a->enter($__internal_cff82f652bb88064f882b09497df1426d8741d48eb83b797c44dd187f307890a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cff82f652bb88064f882b09497df1426d8741d48eb83b797c44dd187f307890a->leave($__internal_cff82f652bb88064f882b09497df1426d8741d48eb83b797c44dd187f307890a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7214b5dfd14f5e163df3a541c15c068f561e19db5942dbc313116965ccef643a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7214b5dfd14f5e163df3a541c15c068f561e19db5942dbc313116965ccef643a->enter($__internal_7214b5dfd14f5e163df3a541c15c068f561e19db5942dbc313116965ccef643a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7214b5dfd14f5e163df3a541c15c068f561e19db5942dbc313116965ccef643a->leave($__internal_7214b5dfd14f5e163df3a541c15c068f561e19db5942dbc313116965ccef643a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7af1c1c75f13cf0c4c132f74dbf6e2e3003e1e783f208076ecffb6a1084ee127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af1c1c75f13cf0c4c132f74dbf6e2e3003e1e783f208076ecffb6a1084ee127->enter($__internal_7af1c1c75f13cf0c4c132f74dbf6e2e3003e1e783f208076ecffb6a1084ee127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7af1c1c75f13cf0c4c132f74dbf6e2e3003e1e783f208076ecffb6a1084ee127->leave($__internal_7af1c1c75f13cf0c4c132f74dbf6e2e3003e1e783f208076ecffb6a1084ee127_prof);

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
