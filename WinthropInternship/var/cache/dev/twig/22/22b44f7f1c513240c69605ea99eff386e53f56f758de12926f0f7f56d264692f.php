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
        $__internal_c128a9d367709f64b6b03f0188579155d477dee2f6f1ee4afdc886e2f29476e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c128a9d367709f64b6b03f0188579155d477dee2f6f1ee4afdc886e2f29476e2->enter($__internal_c128a9d367709f64b6b03f0188579155d477dee2f6f1ee4afdc886e2f29476e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/edit.html.twig"));

        $__internal_ef939ef437f2aa186ee6f236095d7f36c93ce08fc96aba072740a32001d30bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef939ef437f2aa186ee6f236095d7f36c93ce08fc96aba072740a32001d30bf4->enter($__internal_ef939ef437f2aa186ee6f236095d7f36c93ce08fc96aba072740a32001d30bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c128a9d367709f64b6b03f0188579155d477dee2f6f1ee4afdc886e2f29476e2->leave($__internal_c128a9d367709f64b6b03f0188579155d477dee2f6f1ee4afdc886e2f29476e2_prof);

        
        $__internal_ef939ef437f2aa186ee6f236095d7f36c93ce08fc96aba072740a32001d30bf4->leave($__internal_ef939ef437f2aa186ee6f236095d7f36c93ce08fc96aba072740a32001d30bf4_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a5ba33bf66d95309f19fc2f2323c15e9180bdb383f6c6e5dce3a72a56328dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5ba33bf66d95309f19fc2f2323c15e9180bdb383f6c6e5dce3a72a56328dd6->enter($__internal_4a5ba33bf66d95309f19fc2f2323c15e9180bdb383f6c6e5dce3a72a56328dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6ac355ddc88768d0eb865b888920fee7268c201a39c2ca56bd0122a4b7f294a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ac355ddc88768d0eb865b888920fee7268c201a39c2ca56bd0122a4b7f294a->enter($__internal_f6ac355ddc88768d0eb865b888920fee7268c201a39c2ca56bd0122a4b7f294a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/reset.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/styles.css\">
";
        
        $__internal_f6ac355ddc88768d0eb865b888920fee7268c201a39c2ca56bd0122a4b7f294a->leave($__internal_f6ac355ddc88768d0eb865b888920fee7268c201a39c2ca56bd0122a4b7f294a_prof);

        
        $__internal_4a5ba33bf66d95309f19fc2f2323c15e9180bdb383f6c6e5dce3a72a56328dd6->leave($__internal_4a5ba33bf66d95309f19fc2f2323c15e9180bdb383f6c6e5dce3a72a56328dd6_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b6648b9bc285c4150aef09fc4b5582c3dcb410987cf22148a275cea55b9f081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6648b9bc285c4150aef09fc4b5582c3dcb410987cf22148a275cea55b9f081->enter($__internal_7b6648b9bc285c4150aef09fc4b5582c3dcb410987cf22148a275cea55b9f081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cf00038793240de0262a7677831bfd3826befa83607348db58bf7a8bb3e0f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf00038793240de0262a7677831bfd3826befa83607348db58bf7a8bb3e0f0c->enter($__internal_3cf00038793240de0262a7677831bfd3826befa83607348db58bf7a8bb3e0f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script type=\"text/javascript\" src=\"../../../assets/js/materialize.min.js\"></script>";
        
        $__internal_3cf00038793240de0262a7677831bfd3826befa83607348db58bf7a8bb3e0f0c->leave($__internal_3cf00038793240de0262a7677831bfd3826befa83607348db58bf7a8bb3e0f0c_prof);

        
        $__internal_7b6648b9bc285c4150aef09fc4b5582c3dcb410987cf22148a275cea55b9f081->leave($__internal_7b6648b9bc285c4150aef09fc4b5582c3dcb410987cf22148a275cea55b9f081_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_04fa5057ba219add22cbea9de3d5ff114840ac1b004e6edbc32907c48da86ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04fa5057ba219add22cbea9de3d5ff114840ac1b004e6edbc32907c48da86ad4->enter($__internal_04fa5057ba219add22cbea9de3d5ff114840ac1b004e6edbc32907c48da86ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da53249b4f1c78c0200f984d20a7df7ec1671056ca2787fb095099ce342cf3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da53249b4f1c78c0200f984d20a7df7ec1671056ca2787fb095099ce342cf3cb->enter($__internal_da53249b4f1c78c0200f984d20a7df7ec1671056ca2787fb095099ce342cf3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da53249b4f1c78c0200f984d20a7df7ec1671056ca2787fb095099ce342cf3cb->leave($__internal_da53249b4f1c78c0200f984d20a7df7ec1671056ca2787fb095099ce342cf3cb_prof);

        
        $__internal_04fa5057ba219add22cbea9de3d5ff114840ac1b004e6edbc32907c48da86ad4->leave($__internal_04fa5057ba219add22cbea9de3d5ff114840ac1b004e6edbc32907c48da86ad4_prof);

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



{#{% extends 'base.html.twig' %}#}

{#{% block body %}#}
{#    <h1>Studentformone edit</h1>#}

{#    {{ form_start(edit_form) }}#}
{#        {{ form_widget(edit_form) }}#}
{#        <input type=\"submit\" value=\"Edit\" />#}
{#    {{ form_end(edit_form) }}#}

{#    <ul>#}
{#        <li>#}
{#            <a href=\"{{ path('studentformone_index') }}\">Back to the list</a>#}
{#        </li>#}
{#        <li>#}
{#            {{ form_start(delete_form) }}#}
{#                <input type=\"submit\" value=\"Delete\">#}
{#            {{ form_end(delete_form) }}#}
{#        </li>#}
{#    </ul>#}
{#{% endblock %}#}
", "studentformone/edit.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/edit.html.twig");
    }
}
