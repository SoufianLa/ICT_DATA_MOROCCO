<?php

/* base.html.twig */
class __TwigTemplate_28c2ba3fdc42e5c49382c76179cd4a3a7ec689a8c15f0ce2e6d56f525f1292fb extends Twig_Template
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
        $__internal_3cc26dd703b1835c366a3e01d8a41b01b266e9d745f7dfc3c2d2f5d025c1587a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc26dd703b1835c366a3e01d8a41b01b266e9d745f7dfc3c2d2f5d025c1587a->enter($__internal_3cc26dd703b1835c366a3e01d8a41b01b266e9d745f7dfc3c2d2f5d025c1587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3cc26dd703b1835c366a3e01d8a41b01b266e9d745f7dfc3c2d2f5d025c1587a->leave($__internal_3cc26dd703b1835c366a3e01d8a41b01b266e9d745f7dfc3c2d2f5d025c1587a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_597323876440921555c2320fa3db3a81b4df4ccf02d9a7a76db56f6e14247ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597323876440921555c2320fa3db3a81b4df4ccf02d9a7a76db56f6e14247ca3->enter($__internal_597323876440921555c2320fa3db3a81b4df4ccf02d9a7a76db56f6e14247ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_597323876440921555c2320fa3db3a81b4df4ccf02d9a7a76db56f6e14247ca3->leave($__internal_597323876440921555c2320fa3db3a81b4df4ccf02d9a7a76db56f6e14247ca3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b55e890852483b03208902d8ae1c437babae8bfef79e798270f1db9660db332a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55e890852483b03208902d8ae1c437babae8bfef79e798270f1db9660db332a->enter($__internal_b55e890852483b03208902d8ae1c437babae8bfef79e798270f1db9660db332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_b55e890852483b03208902d8ae1c437babae8bfef79e798270f1db9660db332a->leave($__internal_b55e890852483b03208902d8ae1c437babae8bfef79e798270f1db9660db332a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_88067fd0e5a87d6eb537bb635b780aa0003cad9b318553aa240b2607cba7e24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88067fd0e5a87d6eb537bb635b780aa0003cad9b318553aa240b2607cba7e24d->enter($__internal_88067fd0e5a87d6eb537bb635b780aa0003cad9b318553aa240b2607cba7e24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_88067fd0e5a87d6eb537bb635b780aa0003cad9b318553aa240b2607cba7e24d->leave($__internal_88067fd0e5a87d6eb537bb635b780aa0003cad9b318553aa240b2607cba7e24d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1e45c4a5c6150760315c201f1b0c2c2f87dc83fc367128b03f51b5760d42aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e45c4a5c6150760315c201f1b0c2c2f87dc83fc367128b03f51b5760d42aea->enter($__internal_d1e45c4a5c6150760315c201f1b0c2c2f87dc83fc367128b03f51b5760d42aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d1e45c4a5c6150760315c201f1b0c2c2f87dc83fc367128b03f51b5760d42aea->leave($__internal_d1e45c4a5c6150760315c201f1b0c2c2f87dc83fc367128b03f51b5760d42aea_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\ICT_DATA_MOROCCO\\app\\Resources\\views\\base.html.twig");
    }
}
