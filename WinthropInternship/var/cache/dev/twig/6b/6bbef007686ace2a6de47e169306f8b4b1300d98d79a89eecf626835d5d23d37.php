<?php

/* studentformtwo/new.html.twig */
class __TwigTemplate_10c23729bbaf062dcc748552be315ea4347fb6cff445c804e23cbece6e61bd33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformtwo/new.html.twig", 1);
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
        $__internal_b0b9c4c435809b35af203ca7a2aa9079a3881e80adb1fcfb9cfc2649fb3737de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b9c4c435809b35af203ca7a2aa9079a3881e80adb1fcfb9cfc2649fb3737de->enter($__internal_b0b9c4c435809b35af203ca7a2aa9079a3881e80adb1fcfb9cfc2649fb3737de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/new.html.twig"));

        $__internal_3e2255b2678a2e92791a4514571f8f6a4742b4af9b53102a031a29190558aa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2255b2678a2e92791a4514571f8f6a4742b4af9b53102a031a29190558aa63->enter($__internal_3e2255b2678a2e92791a4514571f8f6a4742b4af9b53102a031a29190558aa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b9c4c435809b35af203ca7a2aa9079a3881e80adb1fcfb9cfc2649fb3737de->leave($__internal_b0b9c4c435809b35af203ca7a2aa9079a3881e80adb1fcfb9cfc2649fb3737de_prof);

        
        $__internal_3e2255b2678a2e92791a4514571f8f6a4742b4af9b53102a031a29190558aa63->leave($__internal_3e2255b2678a2e92791a4514571f8f6a4742b4af9b53102a031a29190558aa63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16b4c84bd0663dae9cc7f3e7b4bdfc41f8c6506f9d974c0ade3738f651df2af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b4c84bd0663dae9cc7f3e7b4bdfc41f8c6506f9d974c0ade3738f651df2af1->enter($__internal_16b4c84bd0663dae9cc7f3e7b4bdfc41f8c6506f9d974c0ade3738f651df2af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f44ff04ea661b8939f8c5d956e9c19862958afc70901b7c8a53c28bae86b2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f44ff04ea661b8939f8c5d956e9c19862958afc70901b7c8a53c28bae86b2da->enter($__internal_2f44ff04ea661b8939f8c5d956e9c19862958afc70901b7c8a53c28bae86b2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f44ff04ea661b8939f8c5d956e9c19862958afc70901b7c8a53c28bae86b2da->leave($__internal_2f44ff04ea661b8939f8c5d956e9c19862958afc70901b7c8a53c28bae86b2da_prof);

        
        $__internal_16b4c84bd0663dae9cc7f3e7b4bdfc41f8c6506f9d974c0ade3738f651df2af1->leave($__internal_16b4c84bd0663dae9cc7f3e7b4bdfc41f8c6506f9d974c0ade3738f651df2af1_prof);

    }

    public function getTemplateName()
    {
        return "studentformtwo/new.html.twig";
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
    {#
    <ul>
        <li>
            <a href=\"{{ path('studentformone_index') }}\">Back to the list</a>
        </li>
    </ul>
    #}
{% endblock %}", "studentformtwo/new.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformtwo/new.html.twig");
    }
}
