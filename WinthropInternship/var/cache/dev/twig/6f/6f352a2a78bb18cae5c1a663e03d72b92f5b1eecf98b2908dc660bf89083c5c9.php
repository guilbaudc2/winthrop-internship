<?php

/* studentformone/new.html.twig */
class __TwigTemplate_5fecda45cae1d56f40a6c7ff2be04a8fd456fa00f338e64e5eaf3f7cac0f0698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformone/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "innerbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9a5397579366c688742b8b0463b9fbf34b3e06d0c9b56162631d533de7b975a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a5397579366c688742b8b0463b9fbf34b3e06d0c9b56162631d533de7b975a->enter($__internal_f9a5397579366c688742b8b0463b9fbf34b3e06d0c9b56162631d533de7b975a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/new.html.twig"));

        $__internal_e913f616ecae9db8f3b2c11293edbf9362bb5aecd94541aef4d3a9ef29add3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e913f616ecae9db8f3b2c11293edbf9362bb5aecd94541aef4d3a9ef29add3ae->enter($__internal_e913f616ecae9db8f3b2c11293edbf9362bb5aecd94541aef4d3a9ef29add3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a5397579366c688742b8b0463b9fbf34b3e06d0c9b56162631d533de7b975a->leave($__internal_f9a5397579366c688742b8b0463b9fbf34b3e06d0c9b56162631d533de7b975a_prof);

        
        $__internal_e913f616ecae9db8f3b2c11293edbf9362bb5aecd94541aef4d3a9ef29add3ae->leave($__internal_e913f616ecae9db8f3b2c11293edbf9362bb5aecd94541aef4d3a9ef29add3ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e899de19c6f0b47f8755034fba5140182aa5733443b14213833394d7125af24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e899de19c6f0b47f8755034fba5140182aa5733443b14213833394d7125af24f->enter($__internal_e899de19c6f0b47f8755034fba5140182aa5733443b14213833394d7125af24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc866e38e9a0d619213985aeb5d532424c26d82b2eb0ae5789192d7ad40415ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc866e38e9a0d619213985aeb5d532424c26d82b2eb0ae5789192d7ad40415ff->enter($__internal_bc866e38e9a0d619213985aeb5d532424c26d82b2eb0ae5789192d7ad40415ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header center\">Your Information</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_index");
        echo "\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
        </ul>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Create\" />
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
    
";
        
        $__internal_bc866e38e9a0d619213985aeb5d532424c26d82b2eb0ae5789192d7ad40415ff->leave($__internal_bc866e38e9a0d619213985aeb5d532424c26d82b2eb0ae5789192d7ad40415ff_prof);

        
        $__internal_e899de19c6f0b47f8755034fba5140182aa5733443b14213833394d7125af24f->leave($__internal_e899de19c6f0b47f8755034fba5140182aa5733443b14213833394d7125af24f_prof);

    }

    public function getTemplateName()
    {
        return "studentformone/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  69 => 16,  65 => 15,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'innerbase.html.twig' %}

{% block body %}
    <h1 class=\"header center\">Your Information</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"{{ path('studentformone_index') }}\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
        </ul>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
        {{ form_start(form) }}
            {{ form_widget(form) }}
            <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Create\" />
        {{ form_end(form) }}
            </div>
        </div>
    </div>
    
{% endblock %}
", "studentformone/new.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/new.html.twig");
    }
}
