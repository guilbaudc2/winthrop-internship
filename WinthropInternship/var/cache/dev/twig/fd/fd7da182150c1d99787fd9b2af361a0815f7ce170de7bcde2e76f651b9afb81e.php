<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6b78197bad7a98b74146672501aab43406486cb35ca5cee7922dba408a0119f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d50053e1b41801e095159b7a3435676e374688386d184437038344439137a7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50053e1b41801e095159b7a3435676e374688386d184437038344439137a7c6->enter($__internal_d50053e1b41801e095159b7a3435676e374688386d184437038344439137a7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_857f445ca9fcc5e4489295a4cee21ae53a9bcde960e4594e1cdc62111603a73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857f445ca9fcc5e4489295a4cee21ae53a9bcde960e4594e1cdc62111603a73f->enter($__internal_857f445ca9fcc5e4489295a4cee21ae53a9bcde960e4594e1cdc62111603a73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d50053e1b41801e095159b7a3435676e374688386d184437038344439137a7c6->leave($__internal_d50053e1b41801e095159b7a3435676e374688386d184437038344439137a7c6_prof);

        
        $__internal_857f445ca9fcc5e4489295a4cee21ae53a9bcde960e4594e1cdc62111603a73f->leave($__internal_857f445ca9fcc5e4489295a4cee21ae53a9bcde960e4594e1cdc62111603a73f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2dcbb5fbd4d5b028f58cd74754ec8701b553d47ccb7e0ac0d9fab695dc6e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2dcbb5fbd4d5b028f58cd74754ec8701b553d47ccb7e0ac0d9fab695dc6e0e->enter($__internal_1b2dcbb5fbd4d5b028f58cd74754ec8701b553d47ccb7e0ac0d9fab695dc6e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_718bdfbc886ed341b117437d287a781b65c7f3c667abedd5e9928da112cc93ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718bdfbc886ed341b117437d287a781b65c7f3c667abedd5e9928da112cc93ed->enter($__internal_718bdfbc886ed341b117437d287a781b65c7f3c667abedd5e9928da112cc93ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"index-background-image\">
\t\t<div class=\"transparent\">

\t\t\t<div class=\"center-text\">
    \t\t\t<div class=\"login-page\">
                    <h1>Winthrop Internship Learning Experience</h1>
            
                    ";
        // line 12
        echo "                    ";
        // line 13
        echo "                    ";
        // line 14
        echo "                    ";
        // line 15
        echo "                    ";
        // line 16
        echo "                    ";
        // line 17
        echo "                    ";
        // line 18
        echo "                    ";
        // line 19
        echo "                    ";
        // line 20
        echo "                    ";
        // line 21
        echo "        
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                    <div>
                        ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "                    </div>
                    

                    ";
        // line 37
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_718bdfbc886ed341b117437d287a781b65c7f3c667abedd5e9928da112cc93ed->leave($__internal_718bdfbc886ed341b117437d287a781b65c7f3c667abedd5e9928da112cc93ed_prof);

        
        $__internal_1b2dcbb5fbd4d5b028f58cd74754ec8701b553d47ccb7e0ac0d9fab695dc6e0e->leave($__internal_1b2dcbb5fbd4d5b028f58cd74754ec8701b553d47ccb7e0ac0d9fab695dc6e0e_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f8d86ce5990f11b1220ebf8f4e3edfac65424f4f3cc25cce2cfe03abe21c1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8d86ce5990f11b1220ebf8f4e3edfac65424f4f3cc25cce2cfe03abe21c1eb->enter($__internal_4f8d86ce5990f11b1220ebf8f4e3edfac65424f4f3cc25cce2cfe03abe21c1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f3c279521c5e4c1aaffa8ff1fe4c45ab996bd3151b40db4f969bc91f2a51b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3c279521c5e4c1aaffa8ff1fe4c45ab996bd3151b40db4f969bc91f2a51b12->enter($__internal_1f3c279521c5e4c1aaffa8ff1fe4c45ab996bd3151b40db4f969bc91f2a51b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "                        ";
        
        $__internal_1f3c279521c5e4c1aaffa8ff1fe4c45ab996bd3151b40db4f969bc91f2a51b12->leave($__internal_1f3c279521c5e4c1aaffa8ff1fe4c45ab996bd3151b40db4f969bc91f2a51b12_prof);

        
        $__internal_4f8d86ce5990f11b1220ebf8f4e3edfac65424f4f3cc25cce2cfe03abe21c1eb->leave($__internal_4f8d86ce5990f11b1220ebf8f4e3edfac65424f4f3cc25cce2cfe03abe21c1eb_prof);

    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb99353d1d2e52074ab40c85224aa6d618d8a353dae4fc8e46b7f2437c2671a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb99353d1d2e52074ab40c85224aa6d618d8a353dae4fc8e46b7f2437c2671a6->enter($__internal_eb99353d1d2e52074ab40c85224aa6d618d8a353dae4fc8e46b7f2437c2671a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_47e0eb080ea92e9a641a9c700ba8d9e0e0c164fd732dd0ff5546df75419d9cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e0eb080ea92e9a641a9c700ba8d9e0e0c164fd732dd0ff5546df75419d9cad->enter($__internal_47e0eb080ea92e9a641a9c700ba8d9e0e0c164fd732dd0ff5546df75419d9cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 45
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">
";
        
        $__internal_47e0eb080ea92e9a641a9c700ba8d9e0e0c164fd732dd0ff5546df75419d9cad->leave($__internal_47e0eb080ea92e9a641a9c700ba8d9e0e0c164fd732dd0ff5546df75419d9cad_prof);

        
        $__internal_eb99353d1d2e52074ab40c85224aa6d618d8a353dae4fc8e46b7f2437c2671a6->leave($__internal_eb99353d1d2e52074ab40c85224aa6d618d8a353dae4fc8e46b7f2437c2671a6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 45,  154 => 44,  144 => 32,  135 => 31,  121 => 37,  116 => 33,  114 => 31,  110 => 29,  104 => 28,  95 => 25,  90 => 24,  85 => 23,  81 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"index-background-image\">
\t\t<div class=\"transparent\">

\t\t\t<div class=\"center-text\">
    \t\t\t<div class=\"login-page\">
                    <h1>Winthrop Internship Learning Experience</h1>
            
                    {#<div>#}
                    {#    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
                    {#        {{ 'Logged in as:'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
                    {#        <a href=\"{{ path('fos_user_security_logout') }}\">#}
                    {#            {{ 'Logout'|trans({}, 'FOSUserBundle') }}#}
                    {#        </a>#}
                    {#    {% else %}#}
                    {#        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
                    {#    {% endif %}#}
                    {#</div>#}
        
                    {% for type, messages in app.session.flashBag.all %}
                        {% for message in messages %}
                            <div class=\"{{ type }}\">
                                {{ message|trans({}, 'FOSUserBundle') }}
                            </div>
                        {% endfor %}
                    {% endfor %}

                    <div>
                        {% block fos_user_content %}
                        {% endblock fos_user_content %}
                    </div>
                    

                    {#<a href=\"/resetting/request\"><h2 id=\"reset-button\">Reset Password</h2></a>#}
                </div>
            </div>
        </div>
    </div>
{% endblock %}


{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">
{% endblock %}

{#<!DOCTYPE html>#}
{#<html>#}
{#<head>#}
{#    <meta charset=\"UTF-8\" />#}
{#    <title>{% block title %}Login{% endblock %} | Winthrop Internship Learning Experience</title>#}
{#    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">#}
{#    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">#}
{#    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">#}
{#    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />#}
{#    <script src=\"//code.jquery.com/jquery-1.11.3.js\"></script>#}

{#</head>#}
{#<body>#}
{#    <div class=\"index-background-image\">#}
{#\t\t<div class=\"transparent\">#}

{#\t\t\t<div class=\"center-text\">#}
{#    \t\t\t<div class=\"login-page\">#}
{#                    <h1>Winthrop Internship Learning Experience</h1>#}
            
{#                    <div>#}
{#                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
{#                            {{ 'Logged in as:'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
{#                            <a href=\"{{ path('fos_user_security_logout') }}\">#}
{#                                {{ 'Logout'|trans({}, 'FOSUserBundle') }}#}
{#                            </a>#}
                        {#{% else %}#}
                        {#    <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
{#                        {% endif %}#}
{#                    </div>#}
        
{#                    {% for type, messages in app.session.flashBag.all %}#}
{#                        {% for message in messages %}#}
{#                            <div class=\"{{ type }}\">#}
{#                                {{ message|trans({}, 'FOSUserBundle') }}#}
{#                            </div>#}
{#                        {% endfor %}#}
{#                    {% endfor %}#}

{#                    <div>#}
{#                {% block fos_user_content %}#}
{#                {% endblock fos_user_content %}#}
{#            </div>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#    </div>#}
{#</body>#}
{#</html>#}", "@FOSUser/layout.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
