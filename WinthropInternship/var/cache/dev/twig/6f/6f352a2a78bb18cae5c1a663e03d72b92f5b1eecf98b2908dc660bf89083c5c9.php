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
        $__internal_1ecd0857e3c33e4a7fa9c717c70d55c176b24fe961ee00f7cd7413bbe31629bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecd0857e3c33e4a7fa9c717c70d55c176b24fe961ee00f7cd7413bbe31629bc->enter($__internal_1ecd0857e3c33e4a7fa9c717c70d55c176b24fe961ee00f7cd7413bbe31629bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/new.html.twig"));

        $__internal_7809641dc47eccda031c10c430a922670d78b37ccdbad07dca54d36e1e1478bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7809641dc47eccda031c10c430a922670d78b37ccdbad07dca54d36e1e1478bf->enter($__internal_7809641dc47eccda031c10c430a922670d78b37ccdbad07dca54d36e1e1478bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ecd0857e3c33e4a7fa9c717c70d55c176b24fe961ee00f7cd7413bbe31629bc->leave($__internal_1ecd0857e3c33e4a7fa9c717c70d55c176b24fe961ee00f7cd7413bbe31629bc_prof);

        
        $__internal_7809641dc47eccda031c10c430a922670d78b37ccdbad07dca54d36e1e1478bf->leave($__internal_7809641dc47eccda031c10c430a922670d78b37ccdbad07dca54d36e1e1478bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba9b636b9993f0774c45dbceb58644cc7c3aa0c8680bf288361cbecf0fe2edba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9b636b9993f0774c45dbceb58644cc7c3aa0c8680bf288361cbecf0fe2edba->enter($__internal_ba9b636b9993f0774c45dbceb58644cc7c3aa0c8680bf288361cbecf0fe2edba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9977b3536468e4a740b63caafea062fba420fca82cb9aad005136a6f502c1ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9977b3536468e4a740b63caafea062fba420fca82cb9aad005136a6f502c1ba2->enter($__internal_9977b3536468e4a740b63caafea062fba420fca82cb9aad005136a6f502c1ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Submit\" />
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_9977b3536468e4a740b63caafea062fba420fca82cb9aad005136a6f502c1ba2->leave($__internal_9977b3536468e4a740b63caafea062fba420fca82cb9aad005136a6f502c1ba2_prof);

        
        $__internal_ba9b636b9993f0774c45dbceb58644cc7c3aa0c8680bf288361cbecf0fe2edba->leave($__internal_ba9b636b9993f0774c45dbceb58644cc7c3aa0c8680bf288361cbecf0fe2edba_prof);

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
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Submit\" />
            {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{#    <div class=\"section no-pad-bot\" id=\"index-banner\">#}
{#        <div class=\"container\">#}
{#            <div class=\"card-panel\">#}
{#        {{ form_start(form) }}#}
{#            {{ form_widget(form) }}#}
{#            <input type=\"submit\" value=\"Create\" />#}
{#        {{ form_end(form) }}#}
{#            </div>#}
{#        </div>#}
{#    </div>#}
{#    <ul>#}
{#        <li>#}
{#            <a href=\"{{ path('studentformone_index') }}\">Back to the list</a>#}
{#        </li>#}
{#    </ul>#}
{#{% endblock %}#}
", "studentformone/new.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/new.html.twig");
    }
}
