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
        $__internal_49f264db811232cebb84a84fe74901903174e919a190257c0c88541ce4d0c98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f264db811232cebb84a84fe74901903174e919a190257c0c88541ce4d0c98c->enter($__internal_49f264db811232cebb84a84fe74901903174e919a190257c0c88541ce4d0c98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/freelancer.css"), "html", null, true);
        echo "\"  />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"  />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"  />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"  />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker3.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lumino.glyphs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chart-data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easypiechart.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_49f264db811232cebb84a84fe74901903174e919a190257c0c88541ce4d0c98c->leave($__internal_49f264db811232cebb84a84fe74901903174e919a190257c0c88541ce4d0c98c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeea8ae8794e21d40def54e788a9ca2ed3347ffc4f6365f57b12aa092a8b0c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeea8ae8794e21d40def54e788a9ca2ed3347ffc4f6365f57b12aa092a8b0c4d->enter($__internal_eeea8ae8794e21d40def54e788a9ca2ed3347ffc4f6365f57b12aa092a8b0c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "ICT DATA MOROCCO";
        
        $__internal_eeea8ae8794e21d40def54e788a9ca2ed3347ffc4f6365f57b12aa092a8b0c4d->leave($__internal_eeea8ae8794e21d40def54e788a9ca2ed3347ffc4f6365f57b12aa092a8b0c4d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16c5f336999fa0ead38172f91f4a60e65f0d247e20b07a60f897a5b48e0d696f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c5f336999fa0ead38172f91f4a60e65f0d247e20b07a60f897a5b48e0d696f->enter($__internal_16c5f336999fa0ead38172f91f4a60e65f0d247e20b07a60f897a5b48e0d696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_16c5f336999fa0ead38172f91f4a60e65f0d247e20b07a60f897a5b48e0d696f->leave($__internal_16c5f336999fa0ead38172f91f4a60e65f0d247e20b07a60f897a5b48e0d696f_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_753aba8b8cd2feedde41b51511e33ea32ed5ba9090ce0b0e66c748ce8a5999c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753aba8b8cd2feedde41b51511e33ea32ed5ba9090ce0b0e66c748ce8a5999c1->enter($__internal_753aba8b8cd2feedde41b51511e33ea32ed5ba9090ce0b0e66c748ce8a5999c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_753aba8b8cd2feedde41b51511e33ea32ed5ba9090ce0b0e66c748ce8a5999c1->leave($__internal_753aba8b8cd2feedde41b51511e33ea32ed5ba9090ce0b0e66c748ce8a5999c1_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a58f88a83b7da293191b1f4d00199b2b4752b2a73ae8c79ea10acd102bc7be17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58f88a83b7da293191b1f4d00199b2b4752b2a73ae8c79ea10acd102bc7be17->enter($__internal_a58f88a83b7da293191b1f4d00199b2b4752b2a73ae8c79ea10acd102bc7be17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_a58f88a83b7da293191b1f4d00199b2b4752b2a73ae8c79ea10acd102bc7be17->leave($__internal_a58f88a83b7da293191b1f4d00199b2b4752b2a73ae8c79ea10acd102bc7be17_prof);

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
        return array (  153 => 29,  142 => 28,  131 => 8,  119 => 7,  110 => 30,  107 => 29,  105 => 28,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  45 => 10,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
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
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}ICT DATA MOROCCO{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/freelancer.css') }}\"  />
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\"  />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"  />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"  />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/datepicker3.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\" />
        <script src=\"{{ asset('js/lumino.glyphs.js') }}\"></script>
        <script src=\"{{ asset('js/jquery-1.11.1.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/chart.min.js') }}\"></script>
        <script src=\"{{ asset('js/chart-data.js') }}\"></script>
        <script src=\"{{ asset('js/easypiechart.js') }}\"></script>
        <script src=\"{{ asset('js/easypiechart-data.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap-datepicker.js') }}\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\app/Resources\\views/base.html.twig");
    }
}
