<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2db8fbc6345c1d57d17e1dc2a71d6ad57853df6af9a5e7b4ed6be708e399495b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f5ca840ea4213448bc46346d9c2fb99f829f7425e4bf58e29459a592caf1ec29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ca840ea4213448bc46346d9c2fb99f829f7425e4bf58e29459a592caf1ec29->enter($__internal_f5ca840ea4213448bc46346d9c2fb99f829f7425e4bf58e29459a592caf1ec29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ca840ea4213448bc46346d9c2fb99f829f7425e4bf58e29459a592caf1ec29->leave($__internal_f5ca840ea4213448bc46346d9c2fb99f829f7425e4bf58e29459a592caf1ec29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca11797180f5e2081996968fb72f681693da26f9ad567c219cd88d3f9a7f7ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca11797180f5e2081996968fb72f681693da26f9ad567c219cd88d3f9a7f7ca9->enter($__internal_ca11797180f5e2081996968fb72f681693da26f9ad567c219cd88d3f9a7f7ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ca11797180f5e2081996968fb72f681693da26f9ad567c219cd88d3f9a7f7ca9->leave($__internal_ca11797180f5e2081996968fb72f681693da26f9ad567c219cd88d3f9a7f7ca9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
