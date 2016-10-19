<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1280b52dcc8c273344d239b4c29da2666a4c9515a76e850eef8c1ac410ce83c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_be5daef64dde38bb1b4aa1da4b975e95a599b30ad83e83e48b6adc9de01e53fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5daef64dde38bb1b4aa1da4b975e95a599b30ad83e83e48b6adc9de01e53fd->enter($__internal_be5daef64dde38bb1b4aa1da4b975e95a599b30ad83e83e48b6adc9de01e53fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be5daef64dde38bb1b4aa1da4b975e95a599b30ad83e83e48b6adc9de01e53fd->leave($__internal_be5daef64dde38bb1b4aa1da4b975e95a599b30ad83e83e48b6adc9de01e53fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_270cf4d3602d056031278c28da00fff55a65f572a7d2e0f688971010d035dcf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270cf4d3602d056031278c28da00fff55a65f572a7d2e0f688971010d035dcf5->enter($__internal_270cf4d3602d056031278c28da00fff55a65f572a7d2e0f688971010d035dcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_270cf4d3602d056031278c28da00fff55a65f572a7d2e0f688971010d035dcf5->leave($__internal_270cf4d3602d056031278c28da00fff55a65f572a7d2e0f688971010d035dcf5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
