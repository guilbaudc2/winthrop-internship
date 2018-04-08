<?php

/* hrform/index.html.twig */
class __TwigTemplate_4e3e72f77d3493488e7c7f7c486064fd041680191e4c6589767d1e3c28563972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "hrform/index.html.twig", 1);
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
        $__internal_ed61a462af84a3137ee0429f34640aea3fe01e4bd52b4620febaaba81c57a144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed61a462af84a3137ee0429f34640aea3fe01e4bd52b4620febaaba81c57a144->enter($__internal_ed61a462af84a3137ee0429f34640aea3fe01e4bd52b4620febaaba81c57a144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hrform/index.html.twig"));

        $__internal_d6134525a44e247dd30db626657332dab3c9112dedf16cf4909ed2e2c4b320a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6134525a44e247dd30db626657332dab3c9112dedf16cf4909ed2e2c4b320a5->enter($__internal_d6134525a44e247dd30db626657332dab3c9112dedf16cf4909ed2e2c4b320a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hrform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed61a462af84a3137ee0429f34640aea3fe01e4bd52b4620febaaba81c57a144->leave($__internal_ed61a462af84a3137ee0429f34640aea3fe01e4bd52b4620febaaba81c57a144_prof);

        
        $__internal_d6134525a44e247dd30db626657332dab3c9112dedf16cf4909ed2e2c4b320a5->leave($__internal_d6134525a44e247dd30db626657332dab3c9112dedf16cf4909ed2e2c4b320a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d09342cf7e9137a18d71c5aed9b3062a1f13376bc78bd674c22fcb4783f39994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09342cf7e9137a18d71c5aed9b3062a1f13376bc78bd674c22fcb4783f39994->enter($__internal_d09342cf7e9137a18d71c5aed9b3062a1f13376bc78bd674c22fcb4783f39994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4e1b6bba652e9e26ec93d0ef1d3a9b5e61db7e91cd70e30f3fb91998b38fd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e1b6bba652e9e26ec93d0ef1d3a9b5e61db7e91cd70e30f3fb91998b38fd7f->enter($__internal_c4e1b6bba652e9e26ec93d0ef1d3a9b5e61db7e91cd70e30f3fb91998b38fd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header center\">HR Form list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <form method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hrform_new");
        echo "\"></form>
                <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\">
                ";
        // line 11
        echo "                    <thead>
                        <tr>
                            <th class=\"mdl-data-table__cell--non-numeric\"><label><input type=\"checkbox\" class=\"filled-in\"/><span>First Name</span></label></th>
                            ";
        // line 15
        echo "                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Winthrop ID Number (CWID)</th>
                            <th>Internship Company Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentFormOne"]) {
            // line 23
            echo "                        <tr>
                            <td class=\"mdl-data-table__cell--non-numeric\"><label><input type=\"checkbox\" class=\"filled-in\"/><span>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "firstName", array()), "html", null, true);
            echo "</span></label></td>
                            ";
            // line 26
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "emailAddress", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "cWID", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "organizationName", array()), "html", null, true);
            echo "</td>
                            ";
            // line 31
            echo "                            ";
            // line 32
            echo "                            ";
            // line 33
            echo "                            ";
            // line 34
            echo "                            ";
            // line 35
            echo "                            ";
            // line 36
            echo "                            ";
            // line 37
            echo "                            ";
            // line 38
            echo "                            ";
            // line 39
            echo "                            ";
            // line 40
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentFormOne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Completedtitleix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hRForms"] ?? $this->getContext($context, "hRForms")));
        foreach ($context['_seq'] as $context["_key"] => $context["hRForm"]) {
            // line 60
            echo "                        <tr>
                            <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hrform_show", array("id" => $this->getAttribute($context["hRForm"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hRForm"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 62
            if ($this->getAttribute($context["hRForm"], "completedTitleIX", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hrform_show", array("id" => $this->getAttribute($context["hRForm"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hrform_edit", array("id" => $this->getAttribute($context["hRForm"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hRForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hrform_new");
        echo "\">Create a new hRForm</a>
        </li>
    </ul>
";
        
        $__internal_c4e1b6bba652e9e26ec93d0ef1d3a9b5e61db7e91cd70e30f3fb91998b38fd7f->leave($__internal_c4e1b6bba652e9e26ec93d0ef1d3a9b5e61db7e91cd70e30f3fb91998b38fd7f_prof);

        
        $__internal_d09342cf7e9137a18d71c5aed9b3062a1f13376bc78bd674c22fcb4783f39994->leave($__internal_d09342cf7e9137a18d71c5aed9b3062a1f13376bc78bd674c22fcb4783f39994_prof);

    }

    public function getTemplateName()
    {
        return "hrform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 82,  188 => 75,  176 => 69,  170 => 66,  159 => 62,  153 => 61,  150 => 60,  146 => 59,  127 => 42,  120 => 40,  118 => 39,  116 => 38,  114 => 37,  112 => 36,  110 => 35,  108 => 34,  106 => 33,  104 => 32,  102 => 31,  98 => 29,  94 => 28,  90 => 27,  85 => 26,  81 => 24,  78 => 23,  74 => 22,  65 => 15,  60 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 class=\"header center\">HR Form list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <form method=\"post\" action=\"{{ path('hrform_new') }}\"></form>
                <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\">
                {#<table>#}
                    <thead>
                        <tr>
                            <th class=\"mdl-data-table__cell--non-numeric\"><label><input type=\"checkbox\" class=\"filled-in\"/><span>First Name</span></label></th>
                            {#<th>Firstname</th>#}
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Winthrop ID Number (CWID)</th>
                            <th>Internship Company Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for studentFormOne in studentFormOnes %}
                        <tr>
                            <td class=\"mdl-data-table__cell--non-numeric\"><label><input type=\"checkbox\" class=\"filled-in\"/><span>{{ studentFormOne.firstName }}</span></label></td>
                            {#<td>{{ studentFormOne.firstName }}</td>#}
                            <td>{{ studentFormOne.lastName }}</td>
                            <td>{{ studentFormOne.emailAddress}}</td>
                            <td>{{ studentFormOne.cWID }}</td>
                            <td>{{ studentFormOne.organizationName }}</td>
                            {#<td>#}
                            {#    <ul>#}
                            {#        <li>#}
                            {#            <a href=\"{{ path('studentformone_show', { 'id': studentFormOne.id }) }}\">show</a>#}
                            {#        </li>#}
                            {#        <li>#}
                            {#            <a href=\"{{ path('studentformone_edit', { 'id': studentFormOne.id }) }}\">edit</a>#}
                            {#        </li>#}
                            {#    </ul>#}
                            {#</td>#}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Completedtitleix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for hRForm in hRForms %}
                        <tr>
                            <td><a href=\"{{ path('hrform_show', { 'id': hRForm.id }) }}\">{{ hRForm.id }}</a></td>
                            <td>{% if hRForm.completedTitleIX %}Yes{% else %}No{% endif %}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('hrform_show', { 'id': hRForm.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('hrform_edit', { 'id': hRForm.id }) }}\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <ul>
        <li>
            <a href=\"{{ path('hrform_new') }}\">Create a new hRForm</a>
        </li>
    </ul>
{% endblock %}
", "hrform/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/hrform/index.html.twig");
    }
}
