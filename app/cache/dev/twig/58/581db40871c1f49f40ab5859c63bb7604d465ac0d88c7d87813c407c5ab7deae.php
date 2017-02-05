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
        $__internal_ad1da93720e5e6d2e34e8c2fc396eca7e737985847eca7fefe401c69c54dca1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1da93720e5e6d2e34e8c2fc396eca7e737985847eca7fefe401c69c54dca1c->enter($__internal_ad1da93720e5e6d2e34e8c2fc396eca7e737985847eca7fefe401c69c54dca1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_ad1da93720e5e6d2e34e8c2fc396eca7e737985847eca7fefe401c69c54dca1c->leave($__internal_ad1da93720e5e6d2e34e8c2fc396eca7e737985847eca7fefe401c69c54dca1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65ad2aa5c5be41eb212b5c83cea912f3a653e440f4acb650378cfdb923fb02d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ad2aa5c5be41eb212b5c83cea912f3a653e440f4acb650378cfdb923fb02d0->enter($__internal_65ad2aa5c5be41eb212b5c83cea912f3a653e440f4acb650378cfdb923fb02d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "ICT DATA MOROCCO";
        
        $__internal_65ad2aa5c5be41eb212b5c83cea912f3a653e440f4acb650378cfdb923fb02d0->leave($__internal_65ad2aa5c5be41eb212b5c83cea912f3a653e440f4acb650378cfdb923fb02d0_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15cc46f357292c60bdbf8853386e9819f504e4809e6a6c1101a294c25ba98d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cc46f357292c60bdbf8853386e9819f504e4809e6a6c1101a294c25ba98d75->enter($__internal_15cc46f357292c60bdbf8853386e9819f504e4809e6a6c1101a294c25ba98d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_15cc46f357292c60bdbf8853386e9819f504e4809e6a6c1101a294c25ba98d75->leave($__internal_15cc46f357292c60bdbf8853386e9819f504e4809e6a6c1101a294c25ba98d75_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_08a952760d24a787c5b53f01e7235607f03edb7519f6f71c1087e970130d2246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a952760d24a787c5b53f01e7235607f03edb7519f6f71c1087e970130d2246->enter($__internal_08a952760d24a787c5b53f01e7235607f03edb7519f6f71c1087e970130d2246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_08a952760d24a787c5b53f01e7235607f03edb7519f6f71c1087e970130d2246->leave($__internal_08a952760d24a787c5b53f01e7235607f03edb7519f6f71c1087e970130d2246_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb20898c8ed0503b39fb46fc132380a2ce276ff2d4e1e4383a4650f3fac6fd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb20898c8ed0503b39fb46fc132380a2ce276ff2d4e1e4383a4650f3fac6fd7b->enter($__internal_fb20898c8ed0503b39fb46fc132380a2ce276ff2d4e1e4383a4650f3fac6fd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_fb20898c8ed0503b39fb46fc132380a2ce276ff2d4e1e4383a4650f3fac6fd7b->leave($__internal_fb20898c8ed0503b39fb46fc132380a2ce276ff2d4e1e4383a4650f3fac6fd7b_prof);

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
        return array (  109 => 18,  98 => 17,  87 => 8,  75 => 7,  66 => 19,  63 => 18,  61 => 17,  53 => 12,  49 => 11,  45 => 10,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
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
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\app\\Resources\\views\\base.html.twig");
    }
}
