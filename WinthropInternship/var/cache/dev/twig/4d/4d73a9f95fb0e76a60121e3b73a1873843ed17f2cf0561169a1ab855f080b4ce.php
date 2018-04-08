<?php

/* studentformone/show.html.twig */
class __TwigTemplate_2edb82cd91a4eee7b484126b980ec47217f37d226d759605454359291cc703d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformone/show.html.twig", 1);
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
        $__internal_6278c4974f2a953df1937c06a7e61d61f266c8be105427cf39d6e289dc996022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6278c4974f2a953df1937c06a7e61d61f266c8be105427cf39d6e289dc996022->enter($__internal_6278c4974f2a953df1937c06a7e61d61f266c8be105427cf39d6e289dc996022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/show.html.twig"));

        $__internal_16dae6611034e3841744f08fc59db10b6ec587329221b2e4e171e5e1f500e107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16dae6611034e3841744f08fc59db10b6ec587329221b2e4e171e5e1f500e107->enter($__internal_16dae6611034e3841744f08fc59db10b6ec587329221b2e4e171e5e1f500e107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6278c4974f2a953df1937c06a7e61d61f266c8be105427cf39d6e289dc996022->leave($__internal_6278c4974f2a953df1937c06a7e61d61f266c8be105427cf39d6e289dc996022_prof);

        
        $__internal_16dae6611034e3841744f08fc59db10b6ec587329221b2e4e171e5e1f500e107->leave($__internal_16dae6611034e3841744f08fc59db10b6ec587329221b2e4e171e5e1f500e107_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc1e3aca2cad447b5299bdcc1ac9708c0c47d7bb86e03a072257e559289cb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc1e3aca2cad447b5299bdcc1ac9708c0c47d7bb86e03a072257e559289cb57->enter($__internal_adc1e3aca2cad447b5299bdcc1ac9708c0c47d7bb86e03a072257e559289cb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_741ad66cbed384f887ce4fb8b95b7ef4b1e0615a9b23aa0bf178f25f497134f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741ad66cbed384f887ce4fb8b95b7ef4b1e0615a9b23aa0bf178f25f497134f5->enter($__internal_741ad66cbed384f887ce4fb8b95b7ef4b1e0615a9b23aa0bf178f25f497134f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header center\">Studentformone</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_index");
        echo "\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
            <li>
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_file", array("id" => $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "id", array()))), "html", null, true);
        echo "\" class=\"btn waves-effect waves-light button-back\">Export file</a>
            </li>
            <li>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_edit", array("id" => $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "id", array()))), "html", null, true);
        echo "\" class=\"btn waves-effect waves-light button-back\">Edit</a>
            </li>
        </ul>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <tbody>
                        <tr>
                            <th>Firstname</th>
                            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "firstName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Lastname</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "lastName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "userName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cwid</th>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "cWID", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Emailaddress</th>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "emailAddress", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Classenrolled</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "classEnrolled", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Numcredits</th>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "numCredits", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Phonenumber</th>
                            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "phoneNumber", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Legallyauthorized</th>
                            <td>";
        // line 57
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "legallyAuthorized", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Futureworkauthorization</th>
                            <td>";
        // line 61
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "futureWorkAuthorization", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Major</th>
                            <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "major", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Minor</th>
                            <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "minor", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Facultyliaison</th>
                            <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "facultyLiaison", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Semesterenrolled</th>
                            <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "semesterEnrolled", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Yearenrolled</th>
                            <td>";
        // line 81
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearEnrolled", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearEnrolled", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Semestergrad</th>
                            <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "semesterGrad", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Yeargrad</th>
                            <td>";
        // line 89
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearGrad", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearGrad", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>";
        // line 93
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sitesupername</th>
                            <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "siteSuperName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sitesuperemail</th>
                            <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "siteSuperEmail", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <ul>
        <li>
            ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_741ad66cbed384f887ce4fb8b95b7ef4b1e0615a9b23aa0bf178f25f497134f5->leave($__internal_741ad66cbed384f887ce4fb8b95b7ef4b1e0615a9b23aa0bf178f25f497134f5_prof);

        
        $__internal_adc1e3aca2cad447b5299bdcc1ac9708c0c47d7bb86e03a072257e559289cb57->leave($__internal_adc1e3aca2cad447b5299bdcc1ac9708c0c47d7bb86e03a072257e559289cb57_prof);

    }

    public function getTemplateName()
    {
        return "studentformone/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 113,  241 => 111,  228 => 101,  221 => 97,  212 => 93,  203 => 89,  196 => 85,  187 => 81,  180 => 77,  173 => 73,  166 => 69,  159 => 65,  148 => 61,  137 => 57,  130 => 53,  123 => 49,  116 => 45,  109 => 41,  102 => 37,  95 => 33,  88 => 29,  81 => 25,  67 => 14,  61 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 class=\"header center\">Studentformone</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"{{ path('studentformone_index') }}\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
            <li>
                <a href=\"{{ path('export_file', { 'id': studentFormOne.id }) }}\" class=\"btn waves-effect waves-light button-back\">Export file</a>
            </li>
            <li>
                <a href=\"{{ path('studentformone_edit', { 'id': studentFormOne.id }) }}\" class=\"btn waves-effect waves-light button-back\">Edit</a>
            </li>
        </ul>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <tbody>
                        <tr>
                            <th>Firstname</th>
                            <td>{{ studentFormOne.firstName }}</td>
                        </tr>
                        <tr>
                            <th>Lastname</th>
                            <td>{{ studentFormOne.lastName }}</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>{{ studentFormOne.userName }}</td>
                        </tr>
                        <tr>
                            <th>Cwid</th>
                            <td>{{ studentFormOne.cWID }}</td>
                        </tr>
                        <tr>
                            <th>Emailaddress</th>
                            <td>{{ studentFormOne.emailAddress }}</td>
                        </tr>
                        <tr>
                            <th>Classenrolled</th>
                            <td>{{ studentFormOne.classEnrolled }}</td>
                        </tr>
                        <tr>
                            <th>Numcredits</th>
                            <td>{{ studentFormOne.numCredits }}</td>
                        </tr>
                        <tr>
                            <th>Phonenumber</th>
                            <td>{{ studentFormOne.phoneNumber }}</td>
                        </tr>
                        <tr>
                            <th>Legallyauthorized</th>
                            <td>{% if studentFormOne.legallyAuthorized %}Yes{% else %}No{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Futureworkauthorization</th>
                            <td>{% if studentFormOne.futureWorkAuthorization %}Yes{% else %}No{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Major</th>
                            <td>{{ studentFormOne.major }}</td>
                        </tr>
                        <tr>
                            <th>Minor</th>
                            <td>{{ studentFormOne.minor }}</td>
                        </tr>
                        <tr>
                            <th>Facultyliaison</th>
                            <td>{{ studentFormOne.facultyLiaison }}</td>
                        </tr>
                        <tr>
                            <th>Semesterenrolled</th>
                            <td>{{ studentFormOne.semesterEnrolled }}</td>
                        </tr>
                        <tr>
                            <th>Yearenrolled</th>
                            <td>{% if studentFormOne.yearEnrolled %}{{ studentFormOne.yearEnrolled|date('Y-m-d') }}{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Semestergrad</th>
                            <td>{{ studentFormOne.semesterGrad }}</td>
                        </tr>
                        <tr>
                            <th>Yeargrad</th>
                            <td>{% if studentFormOne.yearGrad %}{{ studentFormOne.yearGrad|date('Y-m-d') }}{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{% if studentFormOne.date %}{{ studentFormOne.date|date('Y-m-d') }}{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Sitesupername</th>
                            <td>{{ studentFormOne.siteSuperName }}</td>
                        </tr>
                        <tr>
                            <th>Sitesuperemail</th>
                            <td>{{ studentFormOne.siteSuperEmail }}</td>
                        </tr>
                    </tbody>
                </table>
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
", "studentformone/show.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/show.html.twig");
    }
}
