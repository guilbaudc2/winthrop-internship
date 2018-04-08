<?php

/* studentformone/edit.html.twig */
class __TwigTemplate_d5ece7b10d5528de9f549eab57b0f7cb00b2c1000f60bb740ba0af88e9f8e11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformone/edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "innerbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db1adae8097a7f734d3006d4334f1d0fa246c7b96a26fef0744cd4ad918e72fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1adae8097a7f734d3006d4334f1d0fa246c7b96a26fef0744cd4ad918e72fd->enter($__internal_db1adae8097a7f734d3006d4334f1d0fa246c7b96a26fef0744cd4ad918e72fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/edit.html.twig"));

        $__internal_d526db6a9df2f742367e0fe14e70734e4f04c0e7caa2b523477ddb0d77f5b98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d526db6a9df2f742367e0fe14e70734e4f04c0e7caa2b523477ddb0d77f5b98b->enter($__internal_d526db6a9df2f742367e0fe14e70734e4f04c0e7caa2b523477ddb0d77f5b98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db1adae8097a7f734d3006d4334f1d0fa246c7b96a26fef0744cd4ad918e72fd->leave($__internal_db1adae8097a7f734d3006d4334f1d0fa246c7b96a26fef0744cd4ad918e72fd_prof);

        
        $__internal_d526db6a9df2f742367e0fe14e70734e4f04c0e7caa2b523477ddb0d77f5b98b->leave($__internal_d526db6a9df2f742367e0fe14e70734e4f04c0e7caa2b523477ddb0d77f5b98b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c209a4ba6bcd35d4ab6c057e6cabef12012c544eb230ebfc92b0fc809db9f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c209a4ba6bcd35d4ab6c057e6cabef12012c544eb230ebfc92b0fc809db9f52->enter($__internal_9c209a4ba6bcd35d4ab6c057e6cabef12012c544eb230ebfc92b0fc809db9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f74e28a868a867e03a0ee75214bb8b196e9fbab57438eb8a0a697d8bd61482b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f74e28a868a867e03a0ee75214bb8b196e9fbab57438eb8a0a697d8bd61482b->enter($__internal_9f74e28a868a867e03a0ee75214bb8b196e9fbab57438eb8a0a697d8bd61482b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/reset.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/styles.css\">
";
        
        $__internal_9f74e28a868a867e03a0ee75214bb8b196e9fbab57438eb8a0a697d8bd61482b->leave($__internal_9f74e28a868a867e03a0ee75214bb8b196e9fbab57438eb8a0a697d8bd61482b_prof);

        
        $__internal_9c209a4ba6bcd35d4ab6c057e6cabef12012c544eb230ebfc92b0fc809db9f52->leave($__internal_9c209a4ba6bcd35d4ab6c057e6cabef12012c544eb230ebfc92b0fc809db9f52_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b175d3675c7bdbaad9677ff53f0dff67ed6459f48794db68bfb96924244ae509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b175d3675c7bdbaad9677ff53f0dff67ed6459f48794db68bfb96924244ae509->enter($__internal_b175d3675c7bdbaad9677ff53f0dff67ed6459f48794db68bfb96924244ae509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_10fcf21cfe7e29cfaea64c0708b4e54df84203cd34a390252149233de3919200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fcf21cfe7e29cfaea64c0708b4e54df84203cd34a390252149233de3919200->enter($__internal_10fcf21cfe7e29cfaea64c0708b4e54df84203cd34a390252149233de3919200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script type=\"text/javascript\" src=\"../../../assets/js/materialize.min.js\"></script>";
        
        $__internal_10fcf21cfe7e29cfaea64c0708b4e54df84203cd34a390252149233de3919200->leave($__internal_10fcf21cfe7e29cfaea64c0708b4e54df84203cd34a390252149233de3919200_prof);

        
        $__internal_b175d3675c7bdbaad9677ff53f0dff67ed6459f48794db68bfb96924244ae509->leave($__internal_b175d3675c7bdbaad9677ff53f0dff67ed6459f48794db68bfb96924244ae509_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcde8d68fd6cd662b21a15ff75a8f66e14bf0f7e4ea701db681e24cafa4b060e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcde8d68fd6cd662b21a15ff75a8f66e14bf0f7e4ea701db681e24cafa4b060e->enter($__internal_fcde8d68fd6cd662b21a15ff75a8f66e14bf0f7e4ea701db681e24cafa4b060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cc0ac6540322f6c2b55b87695939c0b6e3a82141d2c192c54ebaf53bafff405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc0ac6540322f6c2b55b87695939c0b6e3a82141d2c192c54ebaf53bafff405->enter($__internal_0cc0ac6540322f6c2b55b87695939c0b6e3a82141d2c192c54ebaf53bafff405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <h1 class=\"header center\">Studentformone edit</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_index");
        echo "\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
        </ul>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Save Changes\" />
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <ul>
        <li>
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0cc0ac6540322f6c2b55b87695939c0b6e3a82141d2c192c54ebaf53bafff405->leave($__internal_0cc0ac6540322f6c2b55b87695939c0b6e3a82141d2c192c54ebaf53bafff405_prof);

        
        $__internal_fcde8d68fd6cd662b21a15ff75a8f66e14bf0f7e4ea701db681e24cafa4b060e->leave($__internal_fcde8d68fd6cd662b21a15ff75a8f66e14bf0f7e4ea701db681e24cafa4b060e_prof);

    }

    public function getTemplateName()
    {
        return "studentformone/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  126 => 33,  116 => 26,  111 => 24,  107 => 23,  97 => 16,  91 => 12,  82 => 11,  64 => 9,  51 => 4,  42 => 3,  11 => 1,);
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

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/reset.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/styles.css\">
{% endblock %}

{% block javascripts %}<script type=\"text/javascript\" src=\"../../../assets/js/materialize.min.js\"></script>{% endblock %}

{% block body %}
    <h1 class=\"header center\">Studentformone edit</h1>
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
            {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Save Changes\" />
            {{ form_end(edit_form) }}
            </div>
        </div>
    </div>

    <ul>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "studentformone/edit.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/edit.html.twig");
    }
}
