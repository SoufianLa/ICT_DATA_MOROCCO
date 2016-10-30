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
        $__internal_73e34d5725f097d467cc2f18f5def3d9650704a218297bd23dc0a9eb82f1eaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e34d5725f097d467cc2f18f5def3d9650704a218297bd23dc0a9eb82f1eaf5->enter($__internal_73e34d5725f097d467cc2f18f5def3d9650704a218297bd23dc0a9eb82f1eaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_73e34d5725f097d467cc2f18f5def3d9650704a218297bd23dc0a9eb82f1eaf5->leave($__internal_73e34d5725f097d467cc2f18f5def3d9650704a218297bd23dc0a9eb82f1eaf5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fafb74021915d5963e754aedb5cba53b7b45ca04634492c62c6a3b44c646f32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafb74021915d5963e754aedb5cba53b7b45ca04634492c62c6a3b44c646f32e->enter($__internal_fafb74021915d5963e754aedb5cba53b7b45ca04634492c62c6a3b44c646f32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_fafb74021915d5963e754aedb5cba53b7b45ca04634492c62c6a3b44c646f32e->leave($__internal_fafb74021915d5963e754aedb5cba53b7b45ca04634492c62c6a3b44c646f32e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5912c2ad5216ab246f83d077cffcc542dcdc8cfe895cb6b7ec3ed043dc1a995a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5912c2ad5216ab246f83d077cffcc542dcdc8cfe895cb6b7ec3ed043dc1a995a->enter($__internal_5912c2ad5216ab246f83d077cffcc542dcdc8cfe895cb6b7ec3ed043dc1a995a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_5912c2ad5216ab246f83d077cffcc542dcdc8cfe895cb6b7ec3ed043dc1a995a->leave($__internal_5912c2ad5216ab246f83d077cffcc542dcdc8cfe895cb6b7ec3ed043dc1a995a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c91b859c0a0d42b20b57dd70c71dd3df14a1c4100ac8dd02c4054ba56ef66563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91b859c0a0d42b20b57dd70c71dd3df14a1c4100ac8dd02c4054ba56ef66563->enter($__internal_c91b859c0a0d42b20b57dd70c71dd3df14a1c4100ac8dd02c4054ba56ef66563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_c91b859c0a0d42b20b57dd70c71dd3df14a1c4100ac8dd02c4054ba56ef66563->leave($__internal_c91b859c0a0d42b20b57dd70c71dd3df14a1c4100ac8dd02c4054ba56ef66563_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ae104e0c0b7f8e46bb8a4d6980db2401dec4298a9cebbac59bacdcb4709e24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae104e0c0b7f8e46bb8a4d6980db2401dec4298a9cebbac59bacdcb4709e24a->enter($__internal_7ae104e0c0b7f8e46bb8a4d6980db2401dec4298a9cebbac59bacdcb4709e24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_7ae104e0c0b7f8e46bb8a4d6980db2401dec4298a9cebbac59bacdcb4709e24a->leave($__internal_7ae104e0c0b7f8e46bb8a4d6980db2401dec4298a9cebbac59bacdcb4709e24a_prof);

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
