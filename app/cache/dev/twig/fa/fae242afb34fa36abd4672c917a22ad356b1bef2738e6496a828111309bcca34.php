<?php

/* ::base.html.twig */
class __TwigTemplate_444db26b820789c3db7584519b392a244e104e568bd7ee2699a3edf9b8f72b4a extends Twig_Template
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
        $__internal_fbb50e23f57654c460f262bc521aa7c4fbc2efe198b3333766c44f72d60e852a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb50e23f57654c460f262bc521aa7c4fbc2efe198b3333766c44f72d60e852a->enter($__internal_fbb50e23f57654c460f262bc521aa7c4fbc2efe198b3333766c44f72d60e852a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fbb50e23f57654c460f262bc521aa7c4fbc2efe198b3333766c44f72d60e852a->leave($__internal_fbb50e23f57654c460f262bc521aa7c4fbc2efe198b3333766c44f72d60e852a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05efc133a4e022206abeaac4199d6d0f42fa75d314d42cd2d592657105d3c2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05efc133a4e022206abeaac4199d6d0f42fa75d314d42cd2d592657105d3c2cc->enter($__internal_05efc133a4e022206abeaac4199d6d0f42fa75d314d42cd2d592657105d3c2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_05efc133a4e022206abeaac4199d6d0f42fa75d314d42cd2d592657105d3c2cc->leave($__internal_05efc133a4e022206abeaac4199d6d0f42fa75d314d42cd2d592657105d3c2cc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e9902537e3915119082d0f20172349a764c73dc3d40292e07b0755a1949c603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9902537e3915119082d0f20172349a764c73dc3d40292e07b0755a1949c603->enter($__internal_3e9902537e3915119082d0f20172349a764c73dc3d40292e07b0755a1949c603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_3e9902537e3915119082d0f20172349a764c73dc3d40292e07b0755a1949c603->leave($__internal_3e9902537e3915119082d0f20172349a764c73dc3d40292e07b0755a1949c603_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ddd2be549b121dfdd43ef5dac2b50b127e9bccdba23eb5caac7c279f0623b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddd2be549b121dfdd43ef5dac2b50b127e9bccdba23eb5caac7c279f0623b17->enter($__internal_9ddd2be549b121dfdd43ef5dac2b50b127e9bccdba23eb5caac7c279f0623b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_9ddd2be549b121dfdd43ef5dac2b50b127e9bccdba23eb5caac7c279f0623b17->leave($__internal_9ddd2be549b121dfdd43ef5dac2b50b127e9bccdba23eb5caac7c279f0623b17_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eaee9efdf2bd4c533d21e36506d64637e7250a8a3e3fa63fe8c880963be0fdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaee9efdf2bd4c533d21e36506d64637e7250a8a3e3fa63fe8c880963be0fdc3->enter($__internal_eaee9efdf2bd4c533d21e36506d64637e7250a8a3e3fa63fe8c880963be0fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_eaee9efdf2bd4c533d21e36506d64637e7250a8a3e3fa63fe8c880963be0fdc3->leave($__internal_eaee9efdf2bd4c533d21e36506d64637e7250a8a3e3fa63fe8c880963be0fdc3_prof);

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
", "::base.html.twig", "C:\\wamp\\www\\ICT_DATA_MOROCCO\\app/Resources\\views/base.html.twig");
    }
}
