<?php

/* IctdataBundle:Default:grapheMobile.html.twig */
class __TwigTemplate_a1cca744f8492e281bac850eabb963711354af938bc0bb054f635543c0c3690b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:Default:grapheMobile.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28ec00904bfb5d1d5d55def05d87390a087b87c3edf6c2fbe2f4d206604cdd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ec00904bfb5d1d5d55def05d87390a087b87c3edf6c2fbe2f4d206604cdd6b->enter($__internal_28ec00904bfb5d1d5d55def05d87390a087b87c3edf6c2fbe2f4d206604cdd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:grapheMobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ec00904bfb5d1d5d55def05d87390a087b87c3edf6c2fbe2f4d206604cdd6b->leave($__internal_28ec00904bfb5d1d5d55def05d87390a087b87c3edf6c2fbe2f4d206604cdd6b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f5ffdf652aabd2e13f6def9db3d1d84962ae31cd5cea525d06431b40b8002b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5ffdf652aabd2e13f6def9db3d1d84962ae31cd5cea525d06431b40b8002b5->enter($__internal_8f5ffdf652aabd2e13f6def9db3d1d84962ae31cd5cea525d06431b40b8002b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:Default:grapheMobile.html.twig"));

        // line 3
        echo "    Graphe mobile ! <br />
";
        
        $__internal_8f5ffdf652aabd2e13f6def9db3d1d84962ae31cd5cea525d06431b40b8002b5->leave($__internal_8f5ffdf652aabd2e13f6def9db3d1d84962ae31cd5cea525d06431b40b8002b5_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:Default:grapheMobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
    Graphe mobile ! <br />
{% endblock %}", "IctdataBundle:Default:grapheMobile.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/Default/grapheMobile.html.twig");
    }
}
