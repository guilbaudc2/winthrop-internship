<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_e315cb1ca0b470b09344018df601053fde2870a4685363c847463ae7f4febc62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ac0a9e41b522bc66065233456c5be6fdc0604a921f4b39b08c7f3a8f35973e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ac0a9e41b522bc66065233456c5be6fdc0604a921f4b39b08c7f3a8f35973e->enter($__internal_a4ac0a9e41b522bc66065233456c5be6fdc0604a921f4b39b08c7f3a8f35973e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_112f589d192edba6fc4994a953a7d30d5cf81b06742da0994755cec1cc5107ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112f589d192edba6fc4994a953a7d30d5cf81b06742da0994755cec1cc5107ed->enter($__internal_112f589d192edba6fc4994a953a7d30d5cf81b06742da0994755cec1cc5107ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ac0a9e41b522bc66065233456c5be6fdc0604a921f4b39b08c7f3a8f35973e->leave($__internal_a4ac0a9e41b522bc66065233456c5be6fdc0604a921f4b39b08c7f3a8f35973e_prof);

        
        $__internal_112f589d192edba6fc4994a953a7d30d5cf81b06742da0994755cec1cc5107ed->leave($__internal_112f589d192edba6fc4994a953a7d30d5cf81b06742da0994755cec1cc5107ed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fe135f751018fc352b4cc9a0a21720b19b2866e02b9879354d9e369f0dda2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe135f751018fc352b4cc9a0a21720b19b2866e02b9879354d9e369f0dda2bc->enter($__internal_9fe135f751018fc352b4cc9a0a21720b19b2866e02b9879354d9e369f0dda2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97fa3bb7945e60153a659dc5342e9ed307e63bf2fd6b161542bdd2329ed9d07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fa3bb7945e60153a659dc5342e9ed307e63bf2fd6b161542bdd2329ed9d07d->enter($__internal_97fa3bb7945e60153a659dc5342e9ed307e63bf2fd6b161542bdd2329ed9d07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_97fa3bb7945e60153a659dc5342e9ed307e63bf2fd6b161542bdd2329ed9d07d->leave($__internal_97fa3bb7945e60153a659dc5342e9ed307e63bf2fd6b161542bdd2329ed9d07d_prof);

        
        $__internal_9fe135f751018fc352b4cc9a0a21720b19b2866e02b9879354d9e369f0dda2bc->leave($__internal_9fe135f751018fc352b4cc9a0a21720b19b2866e02b9879354d9e369f0dda2bc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
