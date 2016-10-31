<?php

/* base.html.twig */
class __TwigTemplate_e5e10f47df77f8036def49c2dfe372167e21fa675db9769ec71fe0e9c525be87 extends Twig_Template
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
        $__internal_b8fda939ed05ac345f7cc815d63d765c4869d2aa7dd97ae08241dd073f53137d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fda939ed05ac345f7cc815d63d765c4869d2aa7dd97ae08241dd073f53137d->enter($__internal_b8fda939ed05ac345f7cc815d63d765c4869d2aa7dd97ae08241dd073f53137d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b8fda939ed05ac345f7cc815d63d765c4869d2aa7dd97ae08241dd073f53137d->leave($__internal_b8fda939ed05ac345f7cc815d63d765c4869d2aa7dd97ae08241dd073f53137d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d5d673e957e372c4d7c7ff6b7997933f72e1ee65b033a22b20ef1384e98ba4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5d673e957e372c4d7c7ff6b7997933f72e1ee65b033a22b20ef1384e98ba4e->enter($__internal_7d5d673e957e372c4d7c7ff6b7997933f72e1ee65b033a22b20ef1384e98ba4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_7d5d673e957e372c4d7c7ff6b7997933f72e1ee65b033a22b20ef1384e98ba4e->leave($__internal_7d5d673e957e372c4d7c7ff6b7997933f72e1ee65b033a22b20ef1384e98ba4e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_effaa74f336ff3b6754173e205e2086e7d08b807cacc421f0cfdf69da4e77dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effaa74f336ff3b6754173e205e2086e7d08b807cacc421f0cfdf69da4e77dbf->enter($__internal_effaa74f336ff3b6754173e205e2086e7d08b807cacc421f0cfdf69da4e77dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_effaa74f336ff3b6754173e205e2086e7d08b807cacc421f0cfdf69da4e77dbf->leave($__internal_effaa74f336ff3b6754173e205e2086e7d08b807cacc421f0cfdf69da4e77dbf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dc586cde4ff8209c1158eaac956a7c2e7313319822a08e4b72ac97217fe8caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc586cde4ff8209c1158eaac956a7c2e7313319822a08e4b72ac97217fe8caf->enter($__internal_7dc586cde4ff8209c1158eaac956a7c2e7313319822a08e4b72ac97217fe8caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7dc586cde4ff8209c1158eaac956a7c2e7313319822a08e4b72ac97217fe8caf->leave($__internal_7dc586cde4ff8209c1158eaac956a7c2e7313319822a08e4b72ac97217fe8caf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2ff9c4a36fdeff1733e9733b9f06b42820fd2a95e608380297f5640d4023409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ff9c4a36fdeff1733e9733b9f06b42820fd2a95e608380297f5640d4023409->enter($__internal_e2ff9c4a36fdeff1733e9733b9f06b42820fd2a95e608380297f5640d4023409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e2ff9c4a36fdeff1733e9733b9f06b42820fd2a95e608380297f5640d4023409->leave($__internal_e2ff9c4a36fdeff1733e9733b9f06b42820fd2a95e608380297f5640d4023409_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\app\\Resources\\views\\base.html.twig");
    }
}
