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
        $__internal_75c2edd4a5511a64ff8817fc05907b9ac3e2b53e7cc296383452d628fb1d5a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c2edd4a5511a64ff8817fc05907b9ac3e2b53e7cc296383452d628fb1d5a9c->enter($__internal_75c2edd4a5511a64ff8817fc05907b9ac3e2b53e7cc296383452d628fb1d5a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_75c2edd4a5511a64ff8817fc05907b9ac3e2b53e7cc296383452d628fb1d5a9c->leave($__internal_75c2edd4a5511a64ff8817fc05907b9ac3e2b53e7cc296383452d628fb1d5a9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cc8944e72ed93711d4f0623db7c570db7981626952b290c6756e701b60a66fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc8944e72ed93711d4f0623db7c570db7981626952b290c6756e701b60a66fa->enter($__internal_2cc8944e72ed93711d4f0623db7c570db7981626952b290c6756e701b60a66fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_2cc8944e72ed93711d4f0623db7c570db7981626952b290c6756e701b60a66fa->leave($__internal_2cc8944e72ed93711d4f0623db7c570db7981626952b290c6756e701b60a66fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8993f87a248f2302cc5b5a88f9c699ad71312c45e16e0df2c900fbbc6a5735b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8993f87a248f2302cc5b5a88f9c699ad71312c45e16e0df2c900fbbc6a5735b->enter($__internal_d8993f87a248f2302cc5b5a88f9c699ad71312c45e16e0df2c900fbbc6a5735b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_d8993f87a248f2302cc5b5a88f9c699ad71312c45e16e0df2c900fbbc6a5735b->leave($__internal_d8993f87a248f2302cc5b5a88f9c699ad71312c45e16e0df2c900fbbc6a5735b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec94d85ee8a0870a66f7c139dfebb0a5bcfc07722c810f0ce2a2276d3dec1140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec94d85ee8a0870a66f7c139dfebb0a5bcfc07722c810f0ce2a2276d3dec1140->enter($__internal_ec94d85ee8a0870a66f7c139dfebb0a5bcfc07722c810f0ce2a2276d3dec1140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_ec94d85ee8a0870a66f7c139dfebb0a5bcfc07722c810f0ce2a2276d3dec1140->leave($__internal_ec94d85ee8a0870a66f7c139dfebb0a5bcfc07722c810f0ce2a2276d3dec1140_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34008eed888eab2b26fe2ddfd0bfc07790a7e8c66333365ec1f2a7522337cb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34008eed888eab2b26fe2ddfd0bfc07790a7e8c66333365ec1f2a7522337cb52->enter($__internal_34008eed888eab2b26fe2ddfd0bfc07790a7e8c66333365ec1f2a7522337cb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_34008eed888eab2b26fe2ddfd0bfc07790a7e8c66333365ec1f2a7522337cb52->leave($__internal_34008eed888eab2b26fe2ddfd0bfc07790a7e8c66333365ec1f2a7522337cb52_prof);

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
