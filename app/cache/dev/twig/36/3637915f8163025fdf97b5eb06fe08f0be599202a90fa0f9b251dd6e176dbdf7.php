<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_511fcbad16d244b7280cc517bc3b27d898303a433b888f1626602e484a95a984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_226a9690dd7e6f96b6946bcfbffb5d3dec447bcf514ead516b2d3da58b47a23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226a9690dd7e6f96b6946bcfbffb5d3dec447bcf514ead516b2d3da58b47a23c->enter($__internal_226a9690dd7e6f96b6946bcfbffb5d3dec447bcf514ead516b2d3da58b47a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "

<div class = \"container\">
    <div class=\"wrapper\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">
            ";
        // line 7
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 8
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 10
        echo "            <h3 class=\"form-signin-heading\">Welcome back! Please Sign In</h3>
            <hr class=\"colorgraph\"><br>
            ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "                <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 15
        echo "            <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Username\"  autofocus=\"\" />

            <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\"  autofocus=\"\" />

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

            <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
    </div>
</div>
";
        
        $__internal_226a9690dd7e6f96b6946bcfbffb5d3dec447bcf514ead516b2d3da58b47a23c->leave($__internal_226a9690dd7e6f96b6946bcfbffb5d3dec447bcf514ead516b2d3da58b47a23c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  69 => 22,  62 => 18,  57 => 16,  52 => 15,  46 => 13,  44 => 12,  40 => 10,  34 => 8,  32 => 7,  28 => 6,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}


<div class = \"container\">
    <div class=\"wrapper\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <h3 class=\"form-signin-heading\">Welcome back! Please Sign In</h3>
            <hr class=\"colorgraph\"><br>
            {% if error %}
                <div class=\"alert alert-danger\" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"Username\"  autofocus=\"\" />

            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\"  autofocus=\"\" />

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

            <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
        </form>
    </div>
</div>
";
    }
}
