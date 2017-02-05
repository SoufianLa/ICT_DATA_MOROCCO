<?php

/* IctdataBundle:D_infrastruct_autre:show.html.twig */
class __TwigTemplate_b076f28a418f0394f6e3ae2cffe21b20e1fbb23239f8eea00dfe5245fa587dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:D_infrastruct_autre:show.html.twig", 1);
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
        $__internal_6351212f2d9ae170b37a7a12f7d73aabd13067f5453dbff250b512059595ee29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6351212f2d9ae170b37a7a12f7d73aabd13067f5453dbff250b512059595ee29->enter($__internal_6351212f2d9ae170b37a7a12f7d73aabd13067f5453dbff250b512059595ee29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:D_infrastruct_autre:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6351212f2d9ae170b37a7a12f7d73aabd13067f5453dbff250b512059595ee29->leave($__internal_6351212f2d9ae170b37a7a12f7d73aabd13067f5453dbff250b512059595ee29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_752c808741f04700ac864daf3159abc11c261f0effd837baa73319eaf251c5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752c808741f04700ac864daf3159abc11c261f0effd837baa73319eaf251c5d6->enter($__internal_752c808741f04700ac864daf3159abc11c261f0effd837baa73319eaf251c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:D_infrastruct_autre:show.html.twig"));

        // line 4
        echo "<h1>D_infrastruct_autre</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idate</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ibpinternet</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iBpInternet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Inbrprestamatotal</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iNbrPrestaMaTotal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Inbrprestamanew</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iNbrPrestaMaNew", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Inbrlirmarocains</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iNbrLirMarocains", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iparcmarocipv4afrinic</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iParcMarocIpv4Afrinic", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Istockipv4afrinic</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iStockIpv4Afrinic", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Inbripv4allouees</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iNbrIpv4Allouees", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Irepartipv4lirmaroc</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iRepartIpv4LirMaroc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ietatepuisipv4</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iEtatEpuisIpv4", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iplageipv6maroc</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iPlageIpv6Maroc", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infra");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infra_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 70
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_752c808741f04700ac864daf3159abc11c261f0effd837baa73319eaf251c5d6->leave($__internal_752c808741f04700ac864daf3159abc11c261f0effd837baa73319eaf251c5d6_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:D_infrastruct_autre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 70,  143 => 66,  135 => 61,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body -%}
    <h1>D_infrastruct_autre</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Idate</th>
                <td>{{ entity.iDate|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th>Ibpinternet</th>
                <td>{{ entity.iBpInternet }}</td>
            </tr>
            <tr>
                <th>Inbrprestamatotal</th>
                <td>{{ entity.iNbrPrestaMaTotal }}</td>
            </tr>
            <tr>
                <th>Inbrprestamanew</th>
                <td>{{ entity.iNbrPrestaMaNew }}</td>
            </tr>
            <tr>
                <th>Inbrlirmarocains</th>
                <td>{{ entity.iNbrLirMarocains }}</td>
            </tr>
            <tr>
                <th>Iparcmarocipv4afrinic</th>
                <td>{{ entity.iParcMarocIpv4Afrinic }}</td>
            </tr>
            <tr>
                <th>Istockipv4afrinic</th>
                <td>{{ entity.iStockIpv4Afrinic }}</td>
            </tr>
            <tr>
                <th>Inbripv4allouees</th>
                <td>{{ entity.iNbrIpv4Allouees }}</td>
            </tr>
            <tr>
                <th>Irepartipv4lirmaroc</th>
                <td>{{ entity.iRepartIpv4LirMaroc }}</td>
            </tr>
            <tr>
                <th>Ietatepuisipv4</th>
                <td>{{ entity.iEtatEpuisIpv4 }}</td>
            </tr>
            <tr>
                <th>Iplageipv6maroc</th>
                <td>{{ entity.iPlageIpv6Maroc }}</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('infra') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('infra_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "IctdataBundle:D_infrastruct_autre:show.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/D_infrastruct_autre/show.html.twig");
    }
}
