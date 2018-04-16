<?php

/* sitesupervisorform/new.html.twig */
class __TwigTemplate_3ad68b5ff6893335d77a84b997b84ba785f384ca2ff528eeaabd7ff6f5f7a30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "sitesupervisorform/new.html.twig", 1);
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
        $__internal_a39881e8eb4ae84b5296ead1ce9b2a5a95ebebf676c4624cd32a0e1b861a2598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39881e8eb4ae84b5296ead1ce9b2a5a95ebebf676c4624cd32a0e1b861a2598->enter($__internal_a39881e8eb4ae84b5296ead1ce9b2a5a95ebebf676c4624cd32a0e1b861a2598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sitesupervisorform/new.html.twig"));

        $__internal_ebba7bbaf13e3790d327c416217138516e9f24eadce02cbc52065456cbf69319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebba7bbaf13e3790d327c416217138516e9f24eadce02cbc52065456cbf69319->enter($__internal_ebba7bbaf13e3790d327c416217138516e9f24eadce02cbc52065456cbf69319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sitesupervisorform/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39881e8eb4ae84b5296ead1ce9b2a5a95ebebf676c4624cd32a0e1b861a2598->leave($__internal_a39881e8eb4ae84b5296ead1ce9b2a5a95ebebf676c4624cd32a0e1b861a2598_prof);

        
        $__internal_ebba7bbaf13e3790d327c416217138516e9f24eadce02cbc52065456cbf69319->leave($__internal_ebba7bbaf13e3790d327c416217138516e9f24eadce02cbc52065456cbf69319_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_062c91e7a8c58de39fd747b257477a638c54916d16de0113995787647b86e6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062c91e7a8c58de39fd747b257477a638c54916d16de0113995787647b86e6b2->enter($__internal_062c91e7a8c58de39fd747b257477a638c54916d16de0113995787647b86e6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2954ec6700e82793a787b1aa26732ae73efb3b92f9e5d6b845ad85439851eab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2954ec6700e82793a787b1aa26732ae73efb3b92f9e5d6b845ad85439851eab4->enter($__internal_2954ec6700e82793a787b1aa26732ae73efb3b92f9e5d6b845ad85439851eab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header center\">Internship Site Information</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitesupervisorform_index");
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
                    ";
        // line 18
        echo "                    <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Submit\" />
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
    ";
        
        $__internal_2954ec6700e82793a787b1aa26732ae73efb3b92f9e5d6b845ad85439851eab4->leave($__internal_2954ec6700e82793a787b1aa26732ae73efb3b92f9e5d6b845ad85439851eab4_prof);

        
        $__internal_062c91e7a8c58de39fd747b257477a638c54916d16de0113995787647b86e6b2->leave($__internal_062c91e7a8c58de39fd747b257477a638c54916d16de0113995787647b86e6b2_prof);

    }

    public function getTemplateName()
    {
        return "sitesupervisorform/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  73 => 18,  69 => 16,  65 => 15,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 class=\"header center\">Internship Site Information</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"{{ path('sitesupervisorform_index') }}\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
        </ul>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                {{ form_start(form) }}
                    {{ form_widget(form) }}
                    {#<input type=\"submit\" value=\"Submit\" />#}
                    <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Submit\" />
                {{ form_end(form) }}
            </div>
        </div>
    </div>
    {#
    <ul>
        <li>
            <a href=\"{{ path('sitesupervisorform_index') }}\">Back to the list</a>
        </li>
    </ul>
    #}
{% endblock %}
", "sitesupervisorform/new.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/sitesupervisorform/new.html.twig");
    }
}
