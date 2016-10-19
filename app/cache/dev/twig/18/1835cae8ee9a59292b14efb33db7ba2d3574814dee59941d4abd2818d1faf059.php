<?php

/* base.html.twig */
class __TwigTemplate_dbddc9ef62fc3449ef78eef3c79a52274bed55fd49531ffdebea42fe2888cce2 extends Twig_Template
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
        $__internal_03efd69e079845fa00680f575edc6407245b9132e154855de51d103ca923a5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03efd69e079845fa00680f575edc6407245b9132e154855de51d103ca923a5da->enter($__internal_03efd69e079845fa00680f575edc6407245b9132e154855de51d103ca923a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_03efd69e079845fa00680f575edc6407245b9132e154855de51d103ca923a5da->leave($__internal_03efd69e079845fa00680f575edc6407245b9132e154855de51d103ca923a5da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f47456bf552b018d09bcae36a7b85ca2e6f78674fe460399b3450011ac0f1e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47456bf552b018d09bcae36a7b85ca2e6f78674fe460399b3450011ac0f1e77->enter($__internal_f47456bf552b018d09bcae36a7b85ca2e6f78674fe460399b3450011ac0f1e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f47456bf552b018d09bcae36a7b85ca2e6f78674fe460399b3450011ac0f1e77->leave($__internal_f47456bf552b018d09bcae36a7b85ca2e6f78674fe460399b3450011ac0f1e77_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b38863d3602444f08e58a338280254cd1f02f3ae03fe186506361b9f1422c554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38863d3602444f08e58a338280254cd1f02f3ae03fe186506361b9f1422c554->enter($__internal_b38863d3602444f08e58a338280254cd1f02f3ae03fe186506361b9f1422c554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b38863d3602444f08e58a338280254cd1f02f3ae03fe186506361b9f1422c554->leave($__internal_b38863d3602444f08e58a338280254cd1f02f3ae03fe186506361b9f1422c554_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a78528323027431ff0f257fb1f4333caf7563163c924b9d77b7bc677ab030431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78528323027431ff0f257fb1f4333caf7563163c924b9d77b7bc677ab030431->enter($__internal_a78528323027431ff0f257fb1f4333caf7563163c924b9d77b7bc677ab030431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a78528323027431ff0f257fb1f4333caf7563163c924b9d77b7bc677ab030431->leave($__internal_a78528323027431ff0f257fb1f4333caf7563163c924b9d77b7bc677ab030431_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0985ffd91d5a1776b0086b2d6ba9785b1d9b67c90bee6560c20169ceff1de43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0985ffd91d5a1776b0086b2d6ba9785b1d9b67c90bee6560c20169ceff1de43d->enter($__internal_0985ffd91d5a1776b0086b2d6ba9785b1d9b67c90bee6560c20169ceff1de43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0985ffd91d5a1776b0086b2d6ba9785b1d9b67c90bee6560c20169ceff1de43d->leave($__internal_0985ffd91d5a1776b0086b2d6ba9785b1d9b67c90bee6560c20169ceff1de43d_prof);

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

    public function getSource()
    {
        return "<!DOCTYPE html>
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
";
    }
}
