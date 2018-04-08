<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_93825f0c7238c4301ad41276fd1c63641f2734c0def4149794edf8f380ae0a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c746b67ed7891d5e4f34b5eaa381cd59eeed0726f93bb5ad95cb30e0366665d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c746b67ed7891d5e4f34b5eaa381cd59eeed0726f93bb5ad95cb30e0366665d8->enter($__internal_c746b67ed7891d5e4f34b5eaa381cd59eeed0726f93bb5ad95cb30e0366665d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f1d91d4d7d928ce8482f3b5dee33e6e6fcc2657a9d705123b4edce9424222a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d91d4d7d928ce8482f3b5dee33e6e6fcc2657a9d705123b4edce9424222a4a->enter($__internal_f1d91d4d7d928ce8482f3b5dee33e6e6fcc2657a9d705123b4edce9424222a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c746b67ed7891d5e4f34b5eaa381cd59eeed0726f93bb5ad95cb30e0366665d8->leave($__internal_c746b67ed7891d5e4f34b5eaa381cd59eeed0726f93bb5ad95cb30e0366665d8_prof);

        
        $__internal_f1d91d4d7d928ce8482f3b5dee33e6e6fcc2657a9d705123b4edce9424222a4a->leave($__internal_f1d91d4d7d928ce8482f3b5dee33e6e6fcc2657a9d705123b4edce9424222a4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f79d24ebee78ee735898c5c64ef73d7ac0dc47f4ba5cf9a678fe37007b8e9381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79d24ebee78ee735898c5c64ef73d7ac0dc47f4ba5cf9a678fe37007b8e9381->enter($__internal_f79d24ebee78ee735898c5c64ef73d7ac0dc47f4ba5cf9a678fe37007b8e9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_504560d7a399ae3cb0c12fbe66edbc410bc7aea81dc61eada18ce5d7161ac280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504560d7a399ae3cb0c12fbe66edbc410bc7aea81dc61eada18ce5d7161ac280->enter($__internal_504560d7a399ae3cb0c12fbe66edbc410bc7aea81dc61eada18ce5d7161ac280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_504560d7a399ae3cb0c12fbe66edbc410bc7aea81dc61eada18ce5d7161ac280->leave($__internal_504560d7a399ae3cb0c12fbe66edbc410bc7aea81dc61eada18ce5d7161ac280_prof);

        
        $__internal_f79d24ebee78ee735898c5c64ef73d7ac0dc47f4ba5cf9a678fe37007b8e9381->leave($__internal_f79d24ebee78ee735898c5c64ef73d7ac0dc47f4ba5cf9a678fe37007b8e9381_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_55eb3a16c99f227a1438b16bb0b9aa7ee54e89852862b8cdc3b8b96359593f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55eb3a16c99f227a1438b16bb0b9aa7ee54e89852862b8cdc3b8b96359593f0c->enter($__internal_55eb3a16c99f227a1438b16bb0b9aa7ee54e89852862b8cdc3b8b96359593f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_175ff947cf96c836206db877f5d850dcfbbc2c93e1ce4989b48842659893b8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175ff947cf96c836206db877f5d850dcfbbc2c93e1ce4989b48842659893b8b4->enter($__internal_175ff947cf96c836206db877f5d850dcfbbc2c93e1ce4989b48842659893b8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_175ff947cf96c836206db877f5d850dcfbbc2c93e1ce4989b48842659893b8b4->leave($__internal_175ff947cf96c836206db877f5d850dcfbbc2c93e1ce4989b48842659893b8b4_prof);

        
        $__internal_55eb3a16c99f227a1438b16bb0b9aa7ee54e89852862b8cdc3b8b96359593f0c->leave($__internal_55eb3a16c99f227a1438b16bb0b9aa7ee54e89852862b8cdc3b8b96359593f0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
