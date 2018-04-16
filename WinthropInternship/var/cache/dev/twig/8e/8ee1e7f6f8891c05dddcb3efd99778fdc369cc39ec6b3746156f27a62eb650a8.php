<?php

/* internationalofficeform/index.html.twig */
class __TwigTemplate_5dbd680f07d7f33b54f2c796262908ef2624ea0a7313e08e6bc1665e461541d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "internationalofficeform/index.html.twig", 1);
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
        $__internal_2fc6425cce96c852244bd231089886dd7ad1ae774bf22dc62c0a88830a2a6ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc6425cce96c852244bd231089886dd7ad1ae774bf22dc62c0a88830a2a6ba7->enter($__internal_2fc6425cce96c852244bd231089886dd7ad1ae774bf22dc62c0a88830a2a6ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "internationalofficeform/index.html.twig"));

        $__internal_30ec8dd37e9de170ae2e70c48821b61ddca7769d0f956c993eec93dbb25a6cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ec8dd37e9de170ae2e70c48821b61ddca7769d0f956c993eec93dbb25a6cd9->enter($__internal_30ec8dd37e9de170ae2e70c48821b61ddca7769d0f956c993eec93dbb25a6cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "internationalofficeform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fc6425cce96c852244bd231089886dd7ad1ae774bf22dc62c0a88830a2a6ba7->leave($__internal_2fc6425cce96c852244bd231089886dd7ad1ae774bf22dc62c0a88830a2a6ba7_prof);

        
        $__internal_30ec8dd37e9de170ae2e70c48821b61ddca7769d0f956c993eec93dbb25a6cd9->leave($__internal_30ec8dd37e9de170ae2e70c48821b61ddca7769d0f956c993eec93dbb25a6cd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77046c88b877b6d4829bd78d8d80e05588867b6f949d9c2f080c478a950d5007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77046c88b877b6d4829bd78d8d80e05588867b6f949d9c2f080c478a950d5007->enter($__internal_77046c88b877b6d4829bd78d8d80e05588867b6f949d9c2f080c478a950d5007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e7985ae6edcf81b7cb57af7df3797a56daff9ebb7f00bc55c12e5d96078eeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7985ae6edcf81b7cb57af7df3797a56daff9ebb7f00bc55c12e5d96078eeb0->enter($__internal_4e7985ae6edcf81b7cb57af7df3797a56daff9ebb7f00bc55c12e5d96078eeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Internationalofficeforms list</h1>
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
        $context['_seq'] = twig_ensure_traversable(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentFormOne"]) {
            // line 26
            echo "                        <tr>
                            <td>
                                <form action=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internationalofficeform_new");
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
        $context['_seq'] = twig_ensure_traversable(($context["internationalOfficeForms"] ?? $this->getContext($context, "internationalOfficeForms")));
        foreach ($context['_seq'] as $context["_key"] => $context["internationalOfficeForm"]) {
            // line 82
            echo "                        <tr>
                            ";
            // line 84
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["internationalOfficeForm"], "firstName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["internationalOfficeForm"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["internationalOfficeForm"], "emailAddress", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["internationalOfficeForm"], "cWID", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["internationalOfficeForm"], "organizationName", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internationalofficeform_show", array("id" => $this->getAttribute($context["internationalOfficeForm"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internationalOfficeForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internationalofficeform_new");
        echo "\">Create a new internationalOfficeForm</a>
        </li>
    </ul>
";
        
        $__internal_4e7985ae6edcf81b7cb57af7df3797a56daff9ebb7f00bc55c12e5d96078eeb0->leave($__internal_4e7985ae6edcf81b7cb57af7df3797a56daff9ebb7f00bc55c12e5d96078eeb0_prof);

        
        $__internal_77046c88b877b6d4829bd78d8d80e05588867b6f949d9c2f080c478a950d5007->leave($__internal_77046c88b877b6d4829bd78d8d80e05588867b6f949d9c2f080c478a950d5007_prof);

    }

    public function getTemplateName()
    {
        return "internationalofficeform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 105,  217 => 98,  205 => 92,  198 => 88,  194 => 87,  190 => 86,  186 => 85,  181 => 84,  178 => 82,  174 => 81,  151 => 60,  139 => 53,  137 => 52,  135 => 51,  133 => 50,  131 => 49,  128 => 47,  126 => 46,  124 => 45,  122 => 44,  120 => 43,  118 => 42,  116 => 41,  114 => 40,  112 => 39,  110 => 38,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  89 => 32,  84 => 29,  80 => 28,  76 => 26,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Internationalofficeforms list</h1>
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
                    {% for studentFormOne in studentFormOnes %}
                        <tr>
                            <td>
                                <form action=\"{{ path('internationalofficeform_new') }}\" method=\"GET\">
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
                    {% for internationalOfficeForm in internationalOfficeForms %}
                        <tr>
                            {#<td class=\"mdl-data-table__cell--non-numeric\"><label><input type=\"checkbox\" class=\"filled-in\"/><span>{{ internationalOfficeForm.firstName }}</span></label></td>#}
                            <td>{{ internationalOfficeForm.firstName }}</td>
                            <td>{{ internationalOfficeForm.lastName }}</td>
                            <td>{{ internationalOfficeForm.emailAddress}}</td>
                            <td>{{ internationalOfficeForm.cWID }}</td>
                            <td>{{ internationalOfficeForm.organizationName }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('internationalofficeform_show', { 'id': internationalOfficeForm.id }) }}\">show</a>
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
            <a href=\"{{ path('internationalofficeform_new') }}\">Create a new internationalOfficeForm</a>
        </li>
    </ul>
{% endblock %}
", "internationalofficeform/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/internationalofficeform/index.html.twig");
    }
}
