<?php

/* IctdataBundle:D_infrastruct_autre:index.html.twig */
class __TwigTemplate_06322d128fc820a879d5e85b6718c6bb9ebfe6c1d4f044ac1d148d52979db88d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:D_infrastruct_autre:index.html.twig", 1);
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
        $__internal_ef1745b7baa8c13d216e2d9115828cb5ca32506d7ded678670f2b64c865071ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1745b7baa8c13d216e2d9115828cb5ca32506d7ded678670f2b64c865071ce->enter($__internal_ef1745b7baa8c13d216e2d9115828cb5ca32506d7ded678670f2b64c865071ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:D_infrastruct_autre:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef1745b7baa8c13d216e2d9115828cb5ca32506d7ded678670f2b64c865071ce->leave($__internal_ef1745b7baa8c13d216e2d9115828cb5ca32506d7ded678670f2b64c865071ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d39c6c930e1fe8cd07ba6ab99cf6db4940b62ff2ff465d485df111532122cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d39c6c930e1fe8cd07ba6ab99cf6db4940b62ff2ff465d485df111532122cc1->enter($__internal_4d39c6c930e1fe8cd07ba6ab99cf6db4940b62ff2ff465d485df111532122cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:D_infrastruct_autre:index.html.twig"));

        // line 4
        echo "<h1>D_infrastruct_autre list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Idate</th>
                <th>Ibpinternet</th>
                <th>Inbrprestamatotal</th>
                <th>Inbrprestamanew</th>
                <th>Inbrlirmarocains</th>
                <th>Iparcmarocipv4afrinic</th>
                <th>Istockipv4afrinic</th>
                <th>Inbripv4allouees</th>
                <th>Irepartipv4lirmaroc</th>
                <th>Ietatepuisipv4</th>
                <th>Iplageipv6maroc</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infra_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            if ($this->getAttribute($context["entity"], "iDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iBpInternet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iNbrPrestaMaTotal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iNbrPrestaMaNew", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iNbrLirMarocains", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iParcMarocIpv4Afrinic", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iStockIpv4Afrinic", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iNbrIpv4Allouees", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iRepartIpv4LirMaroc", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iEtatEpuisIpv4", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iPlageIpv6Maroc", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infra_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infra_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infra_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_4d39c6c930e1fe8cd07ba6ab99cf6db4940b62ff2ff465d485df111532122cc1->leave($__internal_4d39c6c930e1fe8cd07ba6ab99cf6db4940b62ff2ff465d485df111532122cc1_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:D_infrastruct_autre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 56,  143 => 51,  131 => 45,  125 => 42,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  76 => 28,  70 => 27,  67 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>D_infrastruct_autre list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Idate</th>
                <th>Ibpinternet</th>
                <th>Inbrprestamatotal</th>
                <th>Inbrprestamanew</th>
                <th>Inbrlirmarocains</th>
                <th>Iparcmarocipv4afrinic</th>
                <th>Istockipv4afrinic</th>
                <th>Inbripv4allouees</th>
                <th>Irepartipv4lirmaroc</th>
                <th>Ietatepuisipv4</th>
                <th>Iplageipv6maroc</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('infra_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{% if entity.iDate %}{{ entity.iDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ entity.iBpInternet }}</td>
                <td>{{ entity.iNbrPrestaMaTotal }}</td>
                <td>{{ entity.iNbrPrestaMaNew }}</td>
                <td>{{ entity.iNbrLirMarocains }}</td>
                <td>{{ entity.iParcMarocIpv4Afrinic }}</td>
                <td>{{ entity.iStockIpv4Afrinic }}</td>
                <td>{{ entity.iNbrIpv4Allouees }}</td>
                <td>{{ entity.iRepartIpv4LirMaroc }}</td>
                <td>{{ entity.iEtatEpuisIpv4 }}</td>
                <td>{{ entity.iPlageIpv6Maroc }}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('infra_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('infra_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"{{ path('infra_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "IctdataBundle:D_infrastruct_autre:index.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/D_infrastruct_autre/index.html.twig");
    }
}
