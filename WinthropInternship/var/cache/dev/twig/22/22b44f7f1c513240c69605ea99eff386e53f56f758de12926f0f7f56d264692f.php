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
        $__internal_6a163c746b42e65c53ad4980103447a9e0e480d35890ba02f0119dc6ea52287b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a163c746b42e65c53ad4980103447a9e0e480d35890ba02f0119dc6ea52287b->enter($__internal_6a163c746b42e65c53ad4980103447a9e0e480d35890ba02f0119dc6ea52287b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/edit.html.twig"));

        $__internal_3690b82be85bc42cf51045f95f8b9d742354e188292a85fdaca1ac3168387b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3690b82be85bc42cf51045f95f8b9d742354e188292a85fdaca1ac3168387b4a->enter($__internal_3690b82be85bc42cf51045f95f8b9d742354e188292a85fdaca1ac3168387b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a163c746b42e65c53ad4980103447a9e0e480d35890ba02f0119dc6ea52287b->leave($__internal_6a163c746b42e65c53ad4980103447a9e0e480d35890ba02f0119dc6ea52287b_prof);

        
        $__internal_3690b82be85bc42cf51045f95f8b9d742354e188292a85fdaca1ac3168387b4a->leave($__internal_3690b82be85bc42cf51045f95f8b9d742354e188292a85fdaca1ac3168387b4a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c74e0d4dfacf224d73e495951e11fb4e54764e1a2f14771bccf162efcff70980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74e0d4dfacf224d73e495951e11fb4e54764e1a2f14771bccf162efcff70980->enter($__internal_c74e0d4dfacf224d73e495951e11fb4e54764e1a2f14771bccf162efcff70980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b472cd5ccf0af03d610027dd9c05e32d3af044bd573c95bff32ab67a43318943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b472cd5ccf0af03d610027dd9c05e32d3af044bd573c95bff32ab67a43318943->enter($__internal_b472cd5ccf0af03d610027dd9c05e32d3af044bd573c95bff32ab67a43318943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/reset.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/styles.css\">
";
        
        $__internal_b472cd5ccf0af03d610027dd9c05e32d3af044bd573c95bff32ab67a43318943->leave($__internal_b472cd5ccf0af03d610027dd9c05e32d3af044bd573c95bff32ab67a43318943_prof);

        
        $__internal_c74e0d4dfacf224d73e495951e11fb4e54764e1a2f14771bccf162efcff70980->leave($__internal_c74e0d4dfacf224d73e495951e11fb4e54764e1a2f14771bccf162efcff70980_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_569817dce3dd8cfb786503a6046305134d0b190af9a52fdd173f97e8e92d19bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569817dce3dd8cfb786503a6046305134d0b190af9a52fdd173f97e8e92d19bc->enter($__internal_569817dce3dd8cfb786503a6046305134d0b190af9a52fdd173f97e8e92d19bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec199757a8f74b7b748947f7e690eb7cc2276c275f412da6c958ced3798632af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec199757a8f74b7b748947f7e690eb7cc2276c275f412da6c958ced3798632af->enter($__internal_ec199757a8f74b7b748947f7e690eb7cc2276c275f412da6c958ced3798632af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script type=\"text/javascript\" src=\"../../../assets/js/materialize.min.js\"></script>";
        
        $__internal_ec199757a8f74b7b748947f7e690eb7cc2276c275f412da6c958ced3798632af->leave($__internal_ec199757a8f74b7b748947f7e690eb7cc2276c275f412da6c958ced3798632af_prof);

        
        $__internal_569817dce3dd8cfb786503a6046305134d0b190af9a52fdd173f97e8e92d19bc->leave($__internal_569817dce3dd8cfb786503a6046305134d0b190af9a52fdd173f97e8e92d19bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4be26a946279ff44d89f198393f5dee94467650e57b91e2510b9787841befc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be26a946279ff44d89f198393f5dee94467650e57b91e2510b9787841befc57->enter($__internal_4be26a946279ff44d89f198393f5dee94467650e57b91e2510b9787841befc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e67b5ed3b50c82b515ec1e46971848a6527d5abb2dedd0c506cd1e41aa1206b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e67b5ed3b50c82b515ec1e46971848a6527d5abb2dedd0c506cd1e41aa1206b->enter($__internal_4e67b5ed3b50c82b515ec1e46971848a6527d5abb2dedd0c506cd1e41aa1206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <input type=\"submit\" id=\"save\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Save Changes\"/>
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
                <input type=\"submit\" id=\"delete_student\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4e67b5ed3b50c82b515ec1e46971848a6527d5abb2dedd0c506cd1e41aa1206b->leave($__internal_4e67b5ed3b50c82b515ec1e46971848a6527d5abb2dedd0c506cd1e41aa1206b_prof);

        
        $__internal_4be26a946279ff44d89f198393f5dee94467650e57b91e2510b9787841befc57->leave($__internal_4be26a946279ff44d89f198393f5dee94467650e57b91e2510b9787841befc57_prof);

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
                <input type=\"submit\" id=\"save\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Save Changes\"/>
            {{ form_end(edit_form) }}
            </div>
        </div>
    </div>

    <ul>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" id=\"delete_student\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
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
