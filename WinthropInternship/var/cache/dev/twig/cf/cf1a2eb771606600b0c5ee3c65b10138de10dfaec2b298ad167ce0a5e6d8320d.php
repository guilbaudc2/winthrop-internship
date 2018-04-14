<?php

/* facultyliaisonform/index.html.twig */
class __TwigTemplate_f9240e436d53e183aafc7fb6301cf69db2abf7093096a1fcc0682c4569247822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "facultyliaisonform/index.html.twig", 1);
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
        $__internal_5bc2123b7daabd94e30651305614d411d3027b79dd8eb9c5e424114f4382413f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc2123b7daabd94e30651305614d411d3027b79dd8eb9c5e424114f4382413f->enter($__internal_5bc2123b7daabd94e30651305614d411d3027b79dd8eb9c5e424114f4382413f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facultyliaisonform/index.html.twig"));

        $__internal_66d054cc990e4bece34d1b4d5d6adde5795335300a8d3ebb88a7a3344c69b9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d054cc990e4bece34d1b4d5d6adde5795335300a8d3ebb88a7a3344c69b9b7->enter($__internal_66d054cc990e4bece34d1b4d5d6adde5795335300a8d3ebb88a7a3344c69b9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facultyliaisonform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc2123b7daabd94e30651305614d411d3027b79dd8eb9c5e424114f4382413f->leave($__internal_5bc2123b7daabd94e30651305614d411d3027b79dd8eb9c5e424114f4382413f_prof);

        
        $__internal_66d054cc990e4bece34d1b4d5d6adde5795335300a8d3ebb88a7a3344c69b9b7->leave($__internal_66d054cc990e4bece34d1b4d5d6adde5795335300a8d3ebb88a7a3344c69b9b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3851211723080150546c05145a54a82e378ef5de61e2e83c55f23f1222dd0820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3851211723080150546c05145a54a82e378ef5de61e2e83c55f23f1222dd0820->enter($__internal_3851211723080150546c05145a54a82e378ef5de61e2e83c55f23f1222dd0820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a627e0a568e73c1c8f7f4d423a2d1c1491947a6b997e0a6b097fa2076c01c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a627e0a568e73c1c8f7f4d423a2d1c1491947a6b997e0a6b097fa2076c01c52->enter($__internal_4a627e0a568e73c1c8f7f4d423a2d1c1491947a6b997e0a6b097fa2076c01c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Facultyliaisonforms list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <h2 class=\"header\">Student Applications to Approve</h2>
                <table>
                    <thead>
                        <tr>
                            <td>
                                <table>
                                    <th>Student First Name</th>
                                    <th>Student Last Name</th>
                                    <th>Student Email Address</th>
                                    <th>Student CWID</th>
                                    <th>Organization Name</th>
                                    <th>View Application</th>
                                </table>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentFormOnesReady"] ?? $this->getContext($context, "studentFormOnesReady")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentFormOne"]) {
            // line 26
            echo "                        <tr>
                            <td>
                                <form action=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facultyliaisonform_new");
            echo "\" method=\"GET\">
                                    <input type=\"hidden\" name=\"studentInfo\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "id", array()), "html", null, true);
            echo "\" />
                                    <table>
                                        ";
            // line 32
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "firstName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "lastName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "emailAddress", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "cWID", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "organizationName", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 38
            echo "                                        ";
            // line 39
            echo "                                        ";
            // line 40
            echo "                                        ";
            // line 41
            echo "                                        ";
            // line 42
            echo "                                        ";
            // line 43
            echo "                                        ";
            // line 44
            echo "                                        ";
            // line 45
            echo "                                        ";
            // line 46
            echo "                                        ";
            // line 47
            echo "                                        <td>
                                            ";
            // line 49
            echo "                                            ";
            // line 50
            echo "                                            ";
            // line 51
            echo "                                            ";
            // line 52
            echo "                                            ";
            // line 53
            echo "                                            <input type=\"submit\" name=\"submit\" value=\"View Application\">
                                        </td>
                                    </table>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentFormOne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>                
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <h2 class=\"header\">Approved Student Applications</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student First Name</th>
                            <th>Student Last Name</th>
                            <th>Student Email Address</th>
                            <th>Student CWID</th>
                            <th>Organization Name</th>
                            <th>Application Actions</th>
                        </tr>
                    </thead>
                    </tbody>
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["facultyLiaisonForms"] ?? $this->getContext($context, "facultyLiaisonForms")));
        foreach ($context['_seq'] as $context["_key"] => $context["facultyLiaisonForm"]) {
            // line 82
            echo "                    ";
            // line 83
            echo "                    ";
            // line 84
            echo "                    ";
            // line 85
            echo "                    ";
            // line 86
            echo "                    ";
            // line 87
            echo "                    ";
            // line 88
            echo "                    ";
            // line 89
            echo "                    ";
            // line 90
            echo "                    ";
            // line 91
            echo "                    ";
            // line 92
            echo "                    ";
            // line 93
            echo "                    ";
            // line 94
            echo "                    ";
            // line 95
            echo "                    ";
            // line 96
            echo "                    ";
            // line 97
            echo "                    ";
            // line 98
            echo "                    ";
            // line 99
            echo "                    ";
            // line 100
            echo "                    ";
            // line 101
            echo "                    ";
            // line 102
            echo "                    ";
            // line 103
            echo "                    ";
            // line 104
            echo "                    
                        <tr>
                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["facultyLiaisonForm"], "firstName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["facultyLiaisonForm"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["facultyLiaisonForm"], "emailAddress", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["facultyLiaisonForm"], "cWID", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["facultyLiaisonForm"], "organizationName", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facultyliaisonform_show", array("id" => $this->getAttribute($context["facultyLiaisonForm"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facultyLiaisonForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facultyliaisonform_new");
        echo "\">Create a new facultyLiaisonForm</a>
        </li>
    </ul>
";
        
        $__internal_4a627e0a568e73c1c8f7f4d423a2d1c1491947a6b997e0a6b097fa2076c01c52->leave($__internal_4a627e0a568e73c1c8f7f4d423a2d1c1491947a6b997e0a6b097fa2076c01c52_prof);

        
        $__internal_3851211723080150546c05145a54a82e378ef5de61e2e83c55f23f1222dd0820->leave($__internal_3851211723080150546c05145a54a82e378ef5de61e2e83c55f23f1222dd0820_prof);

    }

    public function getTemplateName()
    {
        return "facultyliaisonform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 129,  261 => 120,  249 => 114,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  222 => 104,  220 => 103,  218 => 102,  216 => 101,  214 => 100,  212 => 99,  210 => 98,  208 => 97,  206 => 96,  204 => 95,  202 => 94,  200 => 93,  198 => 92,  196 => 91,  194 => 90,  192 => 89,  190 => 88,  188 => 87,  186 => 86,  184 => 85,  182 => 84,  180 => 83,  178 => 82,  174 => 81,  151 => 60,  139 => 53,  137 => 52,  135 => 51,  133 => 50,  131 => 49,  128 => 47,  126 => 46,  124 => 45,  122 => 44,  120 => 43,  118 => 42,  116 => 41,  114 => 40,  112 => 39,  110 => 38,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  89 => 32,  84 => 29,  80 => 28,  76 => 26,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Facultyliaisonforms list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <h2 class=\"header\">Student Applications to Approve</h2>
                <table>
                    <thead>
                        <tr>
                            <td>
                                <table>
                                    <th>Student First Name</th>
                                    <th>Student Last Name</th>
                                    <th>Student Email Address</th>
                                    <th>Student CWID</th>
                                    <th>Organization Name</th>
                                    <th>View Application</th>
                                </table>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                    {% for studentFormOne in studentFormOnesReady %}
                        <tr>
                            <td>
                                <form action=\"{{ path('facultyliaisonform_new') }}\" method=\"GET\">
                                    <input type=\"hidden\" name=\"studentInfo\" value=\"{{ studentFormOne.id }}\" />
                                    <table>
                                        {#<td class=\"mdl-data-table__cell--non-numeric\"><label><input type=\"checkbox\" class=\"filled-in\"/><span>{{ studentFormOne.firstName }}</span></label></td>#}
                                        <td>{{ studentFormOne.firstName }}</td>
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
                                        <td>
                                            {#<ul>#}
                                            {#    <li>#}
                                            {#        <a href=\"{{ path('internationalofficeform_new') }}\">Create a new internationalOfficeForm</a>#}
                                            {#    </li>#}
                                            {#</ul>#}
                                            <input type=\"submit\" name=\"submit\" value=\"View Application\">
                                        </td>
                                    </table>
                                </form>
                            </td>
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
                <h2 class=\"header\">Approved Student Applications</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student First Name</th>
                            <th>Student Last Name</th>
                            <th>Student Email Address</th>
                            <th>Student CWID</th>
                            <th>Organization Name</th>
                            <th>Application Actions</th>
                        </tr>
                    </thead>
                    </tbody>
                    {% for facultyLiaisonForm in facultyLiaisonForms %}
                    {#    <tr>#}
                    {#        <td><a href=\"{{ path('facultyliaisonform_show', { 'id': facultyLiaisonForm.id }) }}\">{{ facultyLiaisonForm.id }}</a></td>#}
                    {#        <td>{{ facultyLiaisonForm.legalName }}</td>#}
                    {#        <td>{% if facultyLiaisonForm.internshipLearningAgreement %}Yes{% else %}No{% endif %}</td>#}
                    {#        <td>{% if facultyLiaisonForm.midPointEvaluation %}Yes{% else %}No{% endif %}</td>#}
                    {#        <td>{% if facultyLiaisonForm.siteVisit %}Yes{% else %}No{% endif %}</td>#}
                    {#        <td>{% if facultyLiaisonForm.finalReport %}Yes{% else %}No{% endif %}</td>#}
                    {#        <td>{% if facultyLiaisonForm.finalEvaluation %}Yes{% else %}No{% endif %}</td>#}
                    {#        <td>{% if facultyLiaisonForm.approve %}Yes{% else %}No{% endif %}</td>#}
                    {#        <td>{% if facultyLiaisonForm.approveDate %}{{ facultyLiaisonForm.approveDate|date('Y-m-d H:i:s') }}{% endif %}</td>#}
                    {#        <td>#}
                    {#            <ul>#}
                    {#                <li>#}
                    {#                    <a href=\"{{ path('facultyliaisonform_show', { 'id': facultyLiaisonForm.id }) }}\">show</a>#}
                    {#                </li>#}
                    {#                <li>#}
                    {#                    <a href=\"{{ path('facultyliaisonform_edit', { 'id': facultyLiaisonForm.id }) }}\">edit</a>#}
                    {#                </li>#}
                    {#            </ul>#}
                    {#        </td>#}
                    {#    </tr>#}
                    {#{% endfor %}#}
                    
                        <tr>
                            <td>{{ facultyLiaisonForm.firstName }}</td>
                            <td>{{ facultyLiaisonForm.lastName }}</td>
                            <td>{{ facultyLiaisonForm.emailAddress}}</td>
                            <td>{{ facultyLiaisonForm.cWID }}</td>
                            <td>{{ facultyLiaisonForm.organizationName }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('facultyliaisonform_show', { 'id': facultyLiaisonForm.id }) }}\">show</a>
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
            <a href=\"{{ path('facultyliaisonform_new') }}\">Create a new facultyLiaisonForm</a>
        </li>
    </ul>
{% endblock %}
", "facultyliaisonform/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/facultyliaisonform/index.html.twig");
    }
}
