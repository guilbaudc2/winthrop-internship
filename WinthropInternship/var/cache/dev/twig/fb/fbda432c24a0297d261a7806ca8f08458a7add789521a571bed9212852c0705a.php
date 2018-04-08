<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1da4577a91e8618d0c65e8192c7105600a9a1540002108cc89d3658e6548fa9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da4577a91e8618d0c65e8192c7105600a9a1540002108cc89d3658e6548fa9e->enter($__internal_1da4577a91e8618d0c65e8192c7105600a9a1540002108cc89d3658e6548fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_115595e59371e0c3ff7759c47e487cf13531eb37c05ec0e9613e62dafa07f2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115595e59371e0c3ff7759c47e487cf13531eb37c05ec0e9613e62dafa07f2e4->enter($__internal_115595e59371e0c3ff7759c47e487cf13531eb37c05ec0e9613e62dafa07f2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1da4577a91e8618d0c65e8192c7105600a9a1540002108cc89d3658e6548fa9e->leave($__internal_1da4577a91e8618d0c65e8192c7105600a9a1540002108cc89d3658e6548fa9e_prof);

        
        $__internal_115595e59371e0c3ff7759c47e487cf13531eb37c05ec0e9613e62dafa07f2e4->leave($__internal_115595e59371e0c3ff7759c47e487cf13531eb37c05ec0e9613e62dafa07f2e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_282f2830cac7e1e354f17b6057fae4b48ebb33d374a28f65c06077e648089942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282f2830cac7e1e354f17b6057fae4b48ebb33d374a28f65c06077e648089942->enter($__internal_282f2830cac7e1e354f17b6057fae4b48ebb33d374a28f65c06077e648089942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92bac733bbe37cf3adbfb30a6b8e72fc78024837dbaf9bdf4dc427ad8af6ee71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92bac733bbe37cf3adbfb30a6b8e72fc78024837dbaf9bdf4dc427ad8af6ee71->enter($__internal_92bac733bbe37cf3adbfb30a6b8e72fc78024837dbaf9bdf4dc427ad8af6ee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_92bac733bbe37cf3adbfb30a6b8e72fc78024837dbaf9bdf4dc427ad8af6ee71->leave($__internal_92bac733bbe37cf3adbfb30a6b8e72fc78024837dbaf9bdf4dc427ad8af6ee71_prof);

        
        $__internal_282f2830cac7e1e354f17b6057fae4b48ebb33d374a28f65c06077e648089942->leave($__internal_282f2830cac7e1e354f17b6057fae4b48ebb33d374a28f65c06077e648089942_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e857fb8d8fb4fac4ed37d7c0f3e3c531f546e7aa8da97c97f4d3ab1e691f9c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e857fb8d8fb4fac4ed37d7c0f3e3c531f546e7aa8da97c97f4d3ab1e691f9c11->enter($__internal_e857fb8d8fb4fac4ed37d7c0f3e3c531f546e7aa8da97c97f4d3ab1e691f9c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f52d0fcc189d4b331aa40766e4e6d376405a97a0db4c4db215b87a455767aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f52d0fcc189d4b331aa40766e4e6d376405a97a0db4c4db215b87a455767aab->enter($__internal_1f52d0fcc189d4b331aa40766e4e6d376405a97a0db4c4db215b87a455767aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1f52d0fcc189d4b331aa40766e4e6d376405a97a0db4c4db215b87a455767aab->leave($__internal_1f52d0fcc189d4b331aa40766e4e6d376405a97a0db4c4db215b87a455767aab_prof);

        
        $__internal_e857fb8d8fb4fac4ed37d7c0f3e3c531f546e7aa8da97c97f4d3ab1e691f9c11->leave($__internal_e857fb8d8fb4fac4ed37d7c0f3e3c531f546e7aa8da97c97f4d3ab1e691f9c11_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5919618d3182022103b8f263ad96f332ef91278489267c5a7dbce7748578955a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5919618d3182022103b8f263ad96f332ef91278489267c5a7dbce7748578955a->enter($__internal_5919618d3182022103b8f263ad96f332ef91278489267c5a7dbce7748578955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b3e4687f0a6764b5a658e9445fed00c31f86acd28c4f3055ee019f9429b57cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e4687f0a6764b5a658e9445fed00c31f86acd28c4f3055ee019f9429b57cf9->enter($__internal_b3e4687f0a6764b5a658e9445fed00c31f86acd28c4f3055ee019f9429b57cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b3e4687f0a6764b5a658e9445fed00c31f86acd28c4f3055ee019f9429b57cf9->leave($__internal_b3e4687f0a6764b5a658e9445fed00c31f86acd28c4f3055ee019f9429b57cf9_prof);

        
        $__internal_5919618d3182022103b8f263ad96f332ef91278489267c5a7dbce7748578955a->leave($__internal_5919618d3182022103b8f263ad96f332ef91278489267c5a7dbce7748578955a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
