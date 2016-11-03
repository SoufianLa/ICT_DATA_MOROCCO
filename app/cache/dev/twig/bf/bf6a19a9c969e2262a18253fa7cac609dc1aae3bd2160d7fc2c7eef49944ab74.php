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
        $__internal_ffd6849f7594b33473c988aad30a365af3407c6a2793c4111910b4ef411bb9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd6849f7594b33473c988aad30a365af3407c6a2793c4111910b4ef411bb9fa->enter($__internal_ffd6849f7594b33473c988aad30a365af3407c6a2793c4111910b4ef411bb9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd6849f7594b33473c988aad30a365af3407c6a2793c4111910b4ef411bb9fa->leave($__internal_ffd6849f7594b33473c988aad30a365af3407c6a2793c4111910b4ef411bb9fa_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77f747925e480569e80e33c878ab24149cdbad9d93ffc4d8920a6578742c017f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f747925e480569e80e33c878ab24149cdbad9d93ffc4d8920a6578742c017f->enter($__internal_77f747925e480569e80e33c878ab24149cdbad9d93ffc4d8920a6578742c017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/auth.css"), "html", null, true);
        echo "\"  />
    ";
        
        $__internal_77f747925e480569e80e33c878ab24149cdbad9d93ffc4d8920a6578742c017f->leave($__internal_77f747925e480569e80e33c878ab24149cdbad9d93ffc4d8920a6578742c017f_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b51f7884cf80b01a62437646ded4d7c5456825795b4e38a10e7cbedcdc5be55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51f7884cf80b01a62437646ded4d7c5456825795b4e38a10e7cbedcdc5be55c->enter($__internal_b51f7884cf80b01a62437646ded4d7c5456825795b4e38a10e7cbedcdc5be55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 7
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_b51f7884cf80b01a62437646ded4d7c5456825795b4e38a10e7cbedcdc5be55c->leave($__internal_b51f7884cf80b01a62437646ded4d7c5456825795b4e38a10e7cbedcdc5be55c_prof);

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
