<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2108ca14a95bffe9afa27c49c1a41c860f7ee35bc69054f16c8a8748ff4fd613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_716e16e785dd6e1c9a76d64685f3f906731e34c58327299bd8240c0a4a4643b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716e16e785dd6e1c9a76d64685f3f906731e34c58327299bd8240c0a4a4643b1->enter($__internal_716e16e785dd6e1c9a76d64685f3f906731e34c58327299bd8240c0a4a4643b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716e16e785dd6e1c9a76d64685f3f906731e34c58327299bd8240c0a4a4643b1->leave($__internal_716e16e785dd6e1c9a76d64685f3f906731e34c58327299bd8240c0a4a4643b1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6d277e3f29923b336e39a07687247a6acd47d36aaf59718ea1acad09cc5f0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d277e3f29923b336e39a07687247a6acd47d36aaf59718ea1acad09cc5f0f3->enter($__internal_f6d277e3f29923b336e39a07687247a6acd47d36aaf59718ea1acad09cc5f0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/auth.css"), "html", null, true);
        echo "\"  />
    ";
        
        $__internal_f6d277e3f29923b336e39a07687247a6acd47d36aaf59718ea1acad09cc5f0f3->leave($__internal_f6d277e3f29923b336e39a07687247a6acd47d36aaf59718ea1acad09cc5f0f3_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d212368252ac9132efdadc0afa2d82e24e33f2967e161dfacbc5b284d471aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d212368252ac9132efdadc0afa2d82e24e33f2967e161dfacbc5b284d471aa8->enter($__internal_1d212368252ac9132efdadc0afa2d82e24e33f2967e161dfacbc5b284d471aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1d212368252ac9132efdadc0afa2d82e24e33f2967e161dfacbc5b284d471aa8->leave($__internal_1d212368252ac9132efdadc0afa2d82e24e33f2967e161dfacbc5b284d471aa8_prof);

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
        return array (  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/auth.css') }}\"  />
    {% endblock %}
{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
