<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2be541248d412c60ff6bc8aec4ab1231a22ee283bf435ff17dda1bf8a7c3f5a7 extends Twig_Template
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
        $__internal_f5963c148c707e23995c1aeca8006d77d0e07c2cb91d7723d3493efb6c53d86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5963c148c707e23995c1aeca8006d77d0e07c2cb91d7723d3493efb6c53d86f->enter($__internal_f5963c148c707e23995c1aeca8006d77d0e07c2cb91d7723d3493efb6c53d86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5963c148c707e23995c1aeca8006d77d0e07c2cb91d7723d3493efb6c53d86f->leave($__internal_f5963c148c707e23995c1aeca8006d77d0e07c2cb91d7723d3493efb6c53d86f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3c20970499e3620008ec4a3c9fe294bd53e6aa17d2085fed0b2b781a5d0ace1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c20970499e3620008ec4a3c9fe294bd53e6aa17d2085fed0b2b781a5d0ace1->enter($__internal_e3c20970499e3620008ec4a3c9fe294bd53e6aa17d2085fed0b2b781a5d0ace1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/auth.css"), "html", null, true);
        echo "\"  />
    ";
        
        $__internal_e3c20970499e3620008ec4a3c9fe294bd53e6aa17d2085fed0b2b781a5d0ace1->leave($__internal_e3c20970499e3620008ec4a3c9fe294bd53e6aa17d2085fed0b2b781a5d0ace1_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62bf3f195b82b336869ecd62410dca2cbf6977597aa4eda57f4722e2f3c309de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bf3f195b82b336869ecd62410dca2cbf6977597aa4eda57f4722e2f3c309de->enter($__internal_62bf3f195b82b336869ecd62410dca2cbf6977597aa4eda57f4722e2f3c309de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 7
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_62bf3f195b82b336869ecd62410dca2cbf6977597aa4eda57f4722e2f3c309de->leave($__internal_62bf3f195b82b336869ecd62410dca2cbf6977597aa4eda57f4722e2f3c309de_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/auth.css') }}\"  />
    {% endblock %}
{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
