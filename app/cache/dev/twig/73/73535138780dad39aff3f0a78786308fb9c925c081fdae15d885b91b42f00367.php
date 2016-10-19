<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3a9f16ad8e040d5b54d12b4c5aff7a7c61f93b1d7ee59684779b717c21bc1ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8c127ee33a532d6088ff1e7a311b2d8d1ff2e62e4c1877a1eb8e70be47476b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8c127ee33a532d6088ff1e7a311b2d8d1ff2e62e4c1877a1eb8e70be47476b->enter($__internal_bd8c127ee33a532d6088ff1e7a311b2d8d1ff2e62e4c1877a1eb8e70be47476b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        <div>
            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 16
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 18
        echo "        </div>

        ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 22
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 24
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        <div>
            ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "        </div>
    </body>
</html>
";
        
        $__internal_bd8c127ee33a532d6088ff1e7a311b2d8d1ff2e62e4c1877a1eb8e70be47476b->leave($__internal_bd8c127ee33a532d6088ff1e7a311b2d8d1ff2e62e4c1877a1eb8e70be47476b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e25e99299335fa7f1cf2e6bc7c37a258722b84f031d4a6cf6582599a9ce5d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e25e99299335fa7f1cf2e6bc7c37a258722b84f031d4a6cf6582599a9ce5d9d->enter($__internal_9e25e99299335fa7f1cf2e6bc7c37a258722b84f031d4a6cf6582599a9ce5d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        ";
        
        $__internal_9e25e99299335fa7f1cf2e6bc7c37a258722b84f031d4a6cf6582599a9ce5d9d->leave($__internal_9e25e99299335fa7f1cf2e6bc7c37a258722b84f031d4a6cf6582599a9ce5d9d_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42b2a623e8192a0650d2367ea7ccd2390c9166c682af26ecc08000655e16e129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b2a623e8192a0650d2367ea7ccd2390c9166c682af26ecc08000655e16e129->enter($__internal_42b2a623e8192a0650d2367ea7ccd2390c9166c682af26ecc08000655e16e129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "            ";
        
        $__internal_42b2a623e8192a0650d2367ea7ccd2390c9166c682af26ecc08000655e16e129->leave($__internal_42b2a623e8192a0650d2367ea7ccd2390c9166c682af26ecc08000655e16e129_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  130 => 31,  123 => 6,  117 => 5,  107 => 33,  105 => 31,  101 => 29,  98 => 28,  92 => 27,  83 => 24,  78 => 23,  73 => 22,  68 => 21,  66 => 20,  62 => 18,  54 => 16,  48 => 13,  44 => 12,  39 => 11,  37 => 10,  32 => 7,  30 => 5,  24 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        {% block stylesheets %}
        {% endblock %}
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
";
    }
}
