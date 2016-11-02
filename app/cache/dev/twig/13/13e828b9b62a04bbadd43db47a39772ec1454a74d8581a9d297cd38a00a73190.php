<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_da476f5a8493b454859797ff6eb5f85ca9799ba2b169b4fbac892d3b200e61e1 extends Twig_Template
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
        $__internal_2c0db8dfe03802debdd950acd899ab45b32953da05b690228e9a2331cc40c72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0db8dfe03802debdd950acd899ab45b32953da05b690228e9a2331cc40c72a->enter($__internal_2c0db8dfe03802debdd950acd899ab45b32953da05b690228e9a2331cc40c72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c0db8dfe03802debdd950acd899ab45b32953da05b690228e9a2331cc40c72a->leave($__internal_2c0db8dfe03802debdd950acd899ab45b32953da05b690228e9a2331cc40c72a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd59df8a98c78a2cfce685a9c15844414ae0b6a2bbf3e5d143415b1d908eb66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd59df8a98c78a2cfce685a9c15844414ae0b6a2bbf3e5d143415b1d908eb66c->enter($__internal_dd59df8a98c78a2cfce685a9c15844414ae0b6a2bbf3e5d143415b1d908eb66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dd59df8a98c78a2cfce685a9c15844414ae0b6a2bbf3e5d143415b1d908eb66c->leave($__internal_dd59df8a98c78a2cfce685a9c15844414ae0b6a2bbf3e5d143415b1d908eb66c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_625b0172fd5b3fa656435324d932e32f566934a887577ba39041f3efc2e92ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625b0172fd5b3fa656435324d932e32f566934a887577ba39041f3efc2e92ff6->enter($__internal_625b0172fd5b3fa656435324d932e32f566934a887577ba39041f3efc2e92ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_625b0172fd5b3fa656435324d932e32f566934a887577ba39041f3efc2e92ff6->leave($__internal_625b0172fd5b3fa656435324d932e32f566934a887577ba39041f3efc2e92ff6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32efe11946827d6b1fbf2df7cf6b03c13a37d1cb2bc671649080d7a9196fef15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32efe11946827d6b1fbf2df7cf6b03c13a37d1cb2bc671649080d7a9196fef15->enter($__internal_32efe11946827d6b1fbf2df7cf6b03c13a37d1cb2bc671649080d7a9196fef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_32efe11946827d6b1fbf2df7cf6b03c13a37d1cb2bc671649080d7a9196fef15->leave($__internal_32efe11946827d6b1fbf2df7cf6b03c13a37d1cb2bc671649080d7a9196fef15_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\ICT_DATA_MOROCCO\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
