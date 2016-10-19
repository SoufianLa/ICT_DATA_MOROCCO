<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f17145d84544a6d61f5249865058d02f98b8cf37717dfc58193725562fda9097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff65e6e10a2ea096e9c649407721849db0092c98c4d15a03c398ed0bafe0ede9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff65e6e10a2ea096e9c649407721849db0092c98c4d15a03c398ed0bafe0ede9->enter($__internal_ff65e6e10a2ea096e9c649407721849db0092c98c4d15a03c398ed0bafe0ede9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff65e6e10a2ea096e9c649407721849db0092c98c4d15a03c398ed0bafe0ede9->leave($__internal_ff65e6e10a2ea096e9c649407721849db0092c98c4d15a03c398ed0bafe0ede9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f663b31e13d93b33f479314c6b936462f0762826b0adf1c8b133ebf7447277f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f663b31e13d93b33f479314c6b936462f0762826b0adf1c8b133ebf7447277f->enter($__internal_3f663b31e13d93b33f479314c6b936462f0762826b0adf1c8b133ebf7447277f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3f663b31e13d93b33f479314c6b936462f0762826b0adf1c8b133ebf7447277f->leave($__internal_3f663b31e13d93b33f479314c6b936462f0762826b0adf1c8b133ebf7447277f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
