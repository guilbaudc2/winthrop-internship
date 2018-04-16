<?php

/* studentformtwo/edit.html.twig */
class __TwigTemplate_ba1a5bb80e1f8dbb13f923e735dc53e9ea46fee90efe97f7a71ec8fa455e745a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformtwo/edit.html.twig", 1);
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
        $__internal_9fb783f44df4f276b989bb175624bc833c6d0571c395a5ae8ba7a13516e4b435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb783f44df4f276b989bb175624bc833c6d0571c395a5ae8ba7a13516e4b435->enter($__internal_9fb783f44df4f276b989bb175624bc833c6d0571c395a5ae8ba7a13516e4b435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/edit.html.twig"));

        $__internal_3b99adab0ccf2f4194b083a596bb23ee4d318ba228cc447511369f3bde4d7ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b99adab0ccf2f4194b083a596bb23ee4d318ba228cc447511369f3bde4d7ccf->enter($__internal_3b99adab0ccf2f4194b083a596bb23ee4d318ba228cc447511369f3bde4d7ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb783f44df4f276b989bb175624bc833c6d0571c395a5ae8ba7a13516e4b435->leave($__internal_9fb783f44df4f276b989bb175624bc833c6d0571c395a5ae8ba7a13516e4b435_prof);

        
        $__internal_3b99adab0ccf2f4194b083a596bb23ee4d318ba228cc447511369f3bde4d7ccf->leave($__internal_3b99adab0ccf2f4194b083a596bb23ee4d318ba228cc447511369f3bde4d7ccf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df4047a3a3435d84974dd3dd92ec5b908ebc81807f818d7be043b8ba9e05a8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4047a3a3435d84974dd3dd92ec5b908ebc81807f818d7be043b8ba9e05a8b2->enter($__internal_df4047a3a3435d84974dd3dd92ec5b908ebc81807f818d7be043b8ba9e05a8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76574de07521a4a576b460d5a8280b77500c5626c66c2696d95a9daf50eab1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76574de07521a4a576b460d5a8280b77500c5626c66c2696d95a9daf50eab1b0->enter($__internal_76574de07521a4a576b460d5a8280b77500c5626c66c2696d95a9daf50eab1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/reset.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/styles.css\">
";
        
        $__internal_76574de07521a4a576b460d5a8280b77500c5626c66c2696d95a9daf50eab1b0->leave($__internal_76574de07521a4a576b460d5a8280b77500c5626c66c2696d95a9daf50eab1b0_prof);

        
        $__internal_df4047a3a3435d84974dd3dd92ec5b908ebc81807f818d7be043b8ba9e05a8b2->leave($__internal_df4047a3a3435d84974dd3dd92ec5b908ebc81807f818d7be043b8ba9e05a8b2_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05bea05954aa553f4f9cf89b0bf219ca7e04ff6d2cb51268ec5a26999e4c1da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bea05954aa553f4f9cf89b0bf219ca7e04ff6d2cb51268ec5a26999e4c1da7->enter($__internal_05bea05954aa553f4f9cf89b0bf219ca7e04ff6d2cb51268ec5a26999e4c1da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_93e86e1f143588459731c0d02dc7327ac3ef0818e7ac29cc05b67e385057ebef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e86e1f143588459731c0d02dc7327ac3ef0818e7ac29cc05b67e385057ebef->enter($__internal_93e86e1f143588459731c0d02dc7327ac3ef0818e7ac29cc05b67e385057ebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script type=\"text/javascript\" src=\"../../../assets/js/materialize.min.js\"></script>";
        
        $__internal_93e86e1f143588459731c0d02dc7327ac3ef0818e7ac29cc05b67e385057ebef->leave($__internal_93e86e1f143588459731c0d02dc7327ac3ef0818e7ac29cc05b67e385057ebef_prof);

        
        $__internal_05bea05954aa553f4f9cf89b0bf219ca7e04ff6d2cb51268ec5a26999e4c1da7->leave($__internal_05bea05954aa553f4f9cf89b0bf219ca7e04ff6d2cb51268ec5a26999e4c1da7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f997c1c424ec4223c4ff0a5294403e08ba59c37a648780ebe13ad486180408c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f997c1c424ec4223c4ff0a5294403e08ba59c37a648780ebe13ad486180408c->enter($__internal_6f997c1c424ec4223c4ff0a5294403e08ba59c37a648780ebe13ad486180408c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1562f1a5c1ff9a15dda79ac1944c92ad230536d37987cbdd7d5e1e729554f3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1562f1a5c1ff9a15dda79ac1944c92ad230536d37987cbdd7d5e1e729554f3d7->enter($__internal_1562f1a5c1ff9a15dda79ac1944c92ad230536d37987cbdd7d5e1e729554f3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <h1 class=\"header center\">Studentformtwo edit</h1>
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

    <ul>
        ";
        // line 36
        echo "        <li>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1562f1a5c1ff9a15dda79ac1944c92ad230536d37987cbdd7d5e1e729554f3d7->leave($__internal_1562f1a5c1ff9a15dda79ac1944c92ad230536d37987cbdd7d5e1e729554f3d7_prof);

        
        $__internal_6f997c1c424ec4223c4ff0a5294403e08ba59c37a648780ebe13ad486180408c->leave($__internal_6f997c1c424ec4223c4ff0a5294403e08ba59c37a648780ebe13ad486180408c_prof);

    }

    public function getTemplateName()
    {
        return "studentformtwo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  127 => 37,  124 => 36,  116 => 26,  111 => 24,  107 => 23,  97 => 16,  91 => 12,  82 => 11,  64 => 9,  51 => 4,  42 => 3,  11 => 1,);
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
    <h1 class=\"header center\">Studentformtwo edit</h1>
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

    <ul>
        {#
        <li>
            <a href=\"{{ path('studentformtwo_index') }}\">Back to the list</a>
        </li>
        #}
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "studentformtwo/edit.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformtwo/edit.html.twig");
    }
}
