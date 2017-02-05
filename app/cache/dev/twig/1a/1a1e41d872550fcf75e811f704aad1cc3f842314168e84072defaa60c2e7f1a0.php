<?php

/* IctdataBundle:Default:adminspace.html.twig */
class __TwigTemplate_92cdd507e8eae6617f6240a4399ee394b8b66ec310eab0a8d308fc88527470dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IctdataBundle:Default:adminspace.html.twig", 1);
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
        $__internal_7587db293c0ad0137865906acc9a5b9b1537287fc30b5cc5bcd59f43840ba942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7587db293c0ad0137865906acc9a5b9b1537287fc30b5cc5bcd59f43840ba942->enter($__internal_7587db293c0ad0137865906acc9a5b9b1537287fc30b5cc5bcd59f43840ba942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IctdataBundle:Default:adminspace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7587db293c0ad0137865906acc9a5b9b1537287fc30b5cc5bcd59f43840ba942->leave($__internal_7587db293c0ad0137865906acc9a5b9b1537287fc30b5cc5bcd59f43840ba942_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_00dca3052ef58a30a04a1ecf3e02d39d58822f6dab4713f049c1028959996c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00dca3052ef58a30a04a1ecf3e02d39d58822f6dab4713f049c1028959996c0b->enter($__internal_00dca3052ef58a30a04a1ecf3e02d39d58822f6dab4713f049c1028959996c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "IctdataBundle:Default:adminspace.html.twig"));

        // line 3
        echo "    <div class = \"container\">
    <div class=\"wrapper\">
    <h1>Formulaire d'enquete : </h1>";
        // line 6
        echo "    <div class = \"container\">
    <div class=\"wrapper\">
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'errors');
        echo "
    <div class=\"form-control\">
     ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "edate", array()), 'errors');
        echo "

     ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "edate", array()), 'widget');
        echo "
    </div>
    <div class=\"form-control\">
     ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesFixe", array()), 'errors');
        echo "
     ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesFixe", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menage Fixe")) ? array() : array("label" => $_label_)));
        echo "
     ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesFixe", array()), 'widget');
        echo "
    </div>
    <div class=\"form-control\">
     ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesMobile", array()), 'errors');
        echo "
     ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesMobile", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menage mobile")) ? array() : array("label" => $_label_)));
        echo "
     ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesMobile", array()), 'widget');
        echo "
    </div>
    <div class=\"form-control\">
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusMobile", array()), 'errors');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusMobile", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("individus mobile")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusMobile", array()), 'widget');
        echo "
    </div>
        <div class=\"form-control\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusMobileInternet", array()), 'errors');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusMobileInternet", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mobile internet")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusMobileInternet", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusSmartphone", array()), 'errors');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusSmartphone", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smartphone")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusSmartphone", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesequOrdinateur", array()), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesequOrdinateur", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ordinateur")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesequOrdinateur", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurBureau", array()), 'errors');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurBureau", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ordinateur Bureau")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurBureau", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurPc", array()), 'errors');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurPc", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PC")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurPc", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurTablette", array()), 'errors');
        echo "
            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurTablette", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tablette")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesOrdinateurTablette", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetFixe", array()), 'errors');
        echo "
            ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetFixe", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fixe")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetFixe", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetMobile", array()), 'errors');
        echo "
            ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetMobile", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mobile")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetMobile", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetMobileFixe", array()), 'errors');
        echo "
            ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetMobileFixe", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fixe")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eMenagesInternetMobileFixe", array()), 'widget');
        echo "
        </div>
        <div class=\"form-control\">
            ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusInternet", array()), 'errors');
        echo "
            ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusInternet", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Internet")) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusInternet", array()), 'widget');
        echo "
        </div>
        ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eIndividusInternet", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Internet")) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "eNbrInternautes", array()), 'widget', array("attr" => array("placeholder" => "eNbrInternautes", "class" => "form-control")));
        echo "

        ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Add", array()), 'widget', array("attr" => array("label" => "Enregistrer", "class" => "btn btn-primary")));
        echo "

    ";
        // line 85
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "

    </div>
    </div>

";
        
        $__internal_00dca3052ef58a30a04a1ecf3e02d39d58822f6dab4713f049c1028959996c0b->leave($__internal_00dca3052ef58a30a04a1ecf3e02d39d58822f6dab4713f049c1028959996c0b_prof);

    }

    public function getTemplateName()
    {
        return "IctdataBundle:Default:adminspace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 85,  258 => 83,  253 => 81,  249 => 80,  244 => 78,  240 => 77,  236 => 76,  230 => 73,  226 => 72,  222 => 71,  216 => 68,  212 => 67,  208 => 66,  202 => 63,  198 => 62,  194 => 61,  188 => 58,  184 => 57,  180 => 56,  174 => 53,  170 => 52,  166 => 51,  160 => 48,  156 => 47,  152 => 46,  146 => 43,  142 => 42,  138 => 41,  132 => 38,  128 => 37,  124 => 36,  118 => 33,  114 => 32,  110 => 31,  104 => 28,  100 => 27,  96 => 26,  90 => 23,  86 => 22,  82 => 21,  76 => 18,  72 => 17,  68 => 16,  62 => 13,  57 => 11,  52 => 9,  48 => 8,  44 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class = \"container\">
    <div class=\"wrapper\">
    <h1>Formulaire d'enquete : </h1>{# commentaires#}
    <div class = \"container\">
    <div class=\"wrapper\">
    {{ form_start(f) }}
    {{ form_errors(f) }}
    <div class=\"form-control\">
     {{ form_errors(f.edate) }}

     {{ form_widget(f.edate) }}
    </div>
    <div class=\"form-control\">
     {{ form_errors(f.eMenagesFixe) }}
     {{ form_label(f.eMenagesFixe, 'Menage Fixe'|trans) }}
     {{ form_widget(f.eMenagesFixe) }}
    </div>
    <div class=\"form-control\">
     {{ form_errors(f.eMenagesMobile) }}
     {{ form_label(f.eMenagesMobile, 'Menage mobile'|trans) }}
     {{ form_widget(f.eMenagesMobile) }}
    </div>
    <div class=\"form-control\">
            {{ form_errors(f.eIndividusMobile) }}
            {{ form_label(f.eIndividusMobile, 'individus mobile'|trans) }}
            {{ form_widget(f.eIndividusMobile) }}
    </div>
        <div class=\"form-control\">
            {{ form_errors(f.eIndividusMobileInternet) }}
            {{ form_label(f.eIndividusMobileInternet, 'Mobile internet'|trans) }}
            {{ form_widget(f.eIndividusMobileInternet) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eIndividusSmartphone) }}
            {{ form_label(f.eIndividusSmartphone, 'Smartphone'|trans) }}
            {{ form_widget(f.eIndividusSmartphone) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eMenagesequOrdinateur) }}
            {{ form_label(f.eMenagesequOrdinateur, 'Ordinateur'|trans) }}
            {{ form_widget(f.eMenagesequOrdinateur) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eMenagesOrdinateurBureau) }}
            {{ form_label(f.eMenagesOrdinateurBureau, 'Ordinateur Bureau'|trans) }}
            {{ form_widget(f.eMenagesOrdinateurBureau) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eMenagesOrdinateurPc) }}
            {{ form_label(f.eMenagesOrdinateurPc, 'PC'|trans) }}
            {{ form_widget(f.eMenagesOrdinateurPc) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eMenagesOrdinateurTablette) }}
            {{ form_label(f.eMenagesOrdinateurTablette, 'Tablette'|trans) }}
            {{ form_widget(f.eMenagesOrdinateurTablette) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eMenagesInternetFixe) }}
            {{ form_label(f.eMenagesInternetFixe, 'Fixe'|trans) }}
            {{ form_widget(f.eMenagesInternetFixe) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eMenagesInternetMobile) }}
            {{ form_label(f.eMenagesInternetMobile, 'Mobile'|trans) }}
            {{ form_widget(f.eMenagesInternetMobile) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eMenagesInternetMobileFixe) }}
            {{ form_label(f.eMenagesInternetMobileFixe, 'Fixe'|trans) }}
            {{ form_widget(f.eMenagesInternetMobileFixe) }}
        </div>
        <div class=\"form-control\">
            {{ form_errors(f.eIndividusInternet) }}
            {{ form_label(f.eIndividusInternet, 'Internet'|trans) }}
            {{ form_widget(f.eIndividusInternet) }}
        </div>
        {{ form_label(f.eIndividusInternet, 'Internet'|trans) }}
        {{ form_widget(f.eNbrInternautes, { 'attr': {'placeholder': 'eNbrInternautes', 'class': 'form-control'}}) }}

        {{ form_widget(f.Add, { 'attr': {'label': 'Enregistrer', 'class': 'btn btn-primary'}}) }}

    {{ form_end(f) }}

    </div>
    </div>

{% endblock %}", "IctdataBundle:Default:adminspace.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Ictdata\\IctdataBundle/Resources/views/Default/adminspace.html.twig");
    }
}
