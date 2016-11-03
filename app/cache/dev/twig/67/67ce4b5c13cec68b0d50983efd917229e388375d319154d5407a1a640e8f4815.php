<?php

/* ::base.html.twig */
class __TwigTemplate_ae7de172accc6876940d91d56a848e77201a71ceebb82a1a0229a0dd5f0ee105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96f105f62a91fafb75f0fea1b935755a1e2839faacb5c3e4bfbd0248501af6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f105f62a91fafb75f0fea1b935755a1e2839faacb5c3e4bfbd0248501af6ae->enter($__internal_96f105f62a91fafb75f0fea1b935755a1e2839faacb5c3e4bfbd0248501af6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_96f105f62a91fafb75f0fea1b935755a1e2839faacb5c3e4bfbd0248501af6ae->leave($__internal_96f105f62a91fafb75f0fea1b935755a1e2839faacb5c3e4bfbd0248501af6ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_76dce5bba5799b97cfc36f1097823abce4da82ecc000ee04b81f85da4f282bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76dce5bba5799b97cfc36f1097823abce4da82ecc000ee04b81f85da4f282bd2->enter($__internal_76dce5bba5799b97cfc36f1097823abce4da82ecc000ee04b81f85da4f282bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_76dce5bba5799b97cfc36f1097823abce4da82ecc000ee04b81f85da4f282bd2->leave($__internal_76dce5bba5799b97cfc36f1097823abce4da82ecc000ee04b81f85da4f282bd2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea72d86755c626fca708f3cc36e4a2c349ad11db5d3939ea776fdc9e1acc4f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea72d86755c626fca708f3cc36e4a2c349ad11db5d3939ea776fdc9e1acc4f4a->enter($__internal_ea72d86755c626fca708f3cc36e4a2c349ad11db5d3939ea776fdc9e1acc4f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_ea72d86755c626fca708f3cc36e4a2c349ad11db5d3939ea776fdc9e1acc4f4a->leave($__internal_ea72d86755c626fca708f3cc36e4a2c349ad11db5d3939ea776fdc9e1acc4f4a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5114e4c1488260707e934200d769b61e73960b4861e236aa40059a7b1f48ec54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5114e4c1488260707e934200d769b61e73960b4861e236aa40059a7b1f48ec54->enter($__internal_5114e4c1488260707e934200d769b61e73960b4861e236aa40059a7b1f48ec54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_5114e4c1488260707e934200d769b61e73960b4861e236aa40059a7b1f48ec54->leave($__internal_5114e4c1488260707e934200d769b61e73960b4861e236aa40059a7b1f48ec54_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec80f505384133c2a563b56a966be9f5aba63f8e6681f87ddf48ac92845569fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec80f505384133c2a563b56a966be9f5aba63f8e6681f87ddf48ac92845569fb->enter($__internal_ec80f505384133c2a563b56a966be9f5aba63f8e6681f87ddf48ac92845569fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_ec80f505384133c2a563b56a966be9f5aba63f8e6681f87ddf48ac92845569fb->leave($__internal_ec80f505384133c2a563b56a966be9f5aba63f8e6681f87ddf48ac92845569fb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\app/Resources\\views/base.html.twig");
    }
}
