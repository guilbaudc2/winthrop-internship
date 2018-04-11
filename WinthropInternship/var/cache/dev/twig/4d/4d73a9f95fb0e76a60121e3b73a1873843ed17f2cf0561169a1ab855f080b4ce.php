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
        $__internal_85f29051c380cf26b5b67d344f51f1c041a6b329c4d9a07a6ec4a6b542021e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f29051c380cf26b5b67d344f51f1c041a6b329c4d9a07a6ec4a6b542021e5a->enter($__internal_85f29051c380cf26b5b67d344f51f1c041a6b329c4d9a07a6ec4a6b542021e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/show.html.twig"));

        $__internal_e1d4d18346fc645cb87b76e7dc3cf6a6d86730c6e67ca9563a03130e363e34df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d4d18346fc645cb87b76e7dc3cf6a6d86730c6e67ca9563a03130e363e34df->enter($__internal_e1d4d18346fc645cb87b76e7dc3cf6a6d86730c6e67ca9563a03130e363e34df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85f29051c380cf26b5b67d344f51f1c041a6b329c4d9a07a6ec4a6b542021e5a->leave($__internal_85f29051c380cf26b5b67d344f51f1c041a6b329c4d9a07a6ec4a6b542021e5a_prof);

        
        $__internal_e1d4d18346fc645cb87b76e7dc3cf6a6d86730c6e67ca9563a03130e363e34df->leave($__internal_e1d4d18346fc645cb87b76e7dc3cf6a6d86730c6e67ca9563a03130e363e34df_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75c84af944c337d850a303fda6209fd8d1f8ba7f9d7f25b0aa2f356fd43244fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c84af944c337d850a303fda6209fd8d1f8ba7f9d7f25b0aa2f356fd43244fc->enter($__internal_75c84af944c337d850a303fda6209fd8d1f8ba7f9d7f25b0aa2f356fd43244fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_69d2de081e0276dbd966015c7310e1be8c6e6b32b3bed9b177f4b7ae2aa74d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d2de081e0276dbd966015c7310e1be8c6e6b32b3bed9b177f4b7ae2aa74d03->enter($__internal_69d2de081e0276dbd966015c7310e1be8c6e6b32b3bed9b177f4b7ae2aa74d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
    <script>
        \$(document).ready(function(){
            \$(\"#export\").click(function(){
                const rows = [[\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "firstName", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "lastName", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "userName", array()), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "cWID", array()), "html", null, true);
        echo "\"]];
                let csvContent = \"data:text/csv;charset=utf-8,\";
                rows.forEach(function(rowArray){
                   let row = rowArray.join(\",\");
                   csvContent += row + \"\\r\\n\";
                });
                var encodedUri = encodeURI(csvContent);
                
                var d = new Date();
                var month = d.getMonth()+1;
                var day = d.getDate();
                var specDate = d.getFullYear() + '/' +
                    (month<10 ? '0' : '') + month + '/' +
                    (day<10 ? '0' : '') + day;
                var csv = 'studentExport_' + specDate + '.csv';
                
                var link = document.createElement(\"a\");
                link.setAttribute(\"href\", encodedUri);
                link.setAttribute(\"download\", csv);
                document.body.appendChild(link); // Required for FF
                
                link.click(); // This will download the data file named \"my_data.csv\".
            });
        });
    </script>
";
        
        $__internal_69d2de081e0276dbd966015c7310e1be8c6e6b32b3bed9b177f4b7ae2aa74d03->leave($__internal_69d2de081e0276dbd966015c7310e1be8c6e6b32b3bed9b177f4b7ae2aa74d03_prof);

        
        $__internal_75c84af944c337d850a303fda6209fd8d1f8ba7f9d7f25b0aa2f356fd43244fc->leave($__internal_75c84af944c337d850a303fda6209fd8d1f8ba7f9d7f25b0aa2f356fd43244fc_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_a34508c563281d4a603e9fb926c07a095fc4e698188d5701f2b5b7cfc3ab6da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34508c563281d4a603e9fb926c07a095fc4e698188d5701f2b5b7cfc3ab6da4->enter($__internal_a34508c563281d4a603e9fb926c07a095fc4e698188d5701f2b5b7cfc3ab6da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_392c81f5d604060e05319e51a641d426a716e30312ca6c0046822498d4e4c6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392c81f5d604060e05319e51a641d426a716e30312ca6c0046822498d4e4c6c2->enter($__internal_392c81f5d604060e05319e51a641d426a716e30312ca6c0046822498d4e4c6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <h1 class=\"header center\">Studentformone</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_index");
        echo "\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
            <li>
                <button id=\"export\" class=\"btn waves-effect waves-light button-back\" >Export File</button>
               ";
        // line 45
        echo "            </li>
            <li>
                <a href=\"";
        // line 47
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
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "firstName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Lastname</th>
                            <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "lastName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "userName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cwid</th>
                            <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "cWID", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Emailaddress</th>
                            <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "emailAddress", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Classenrolled</th>
                            <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "classEnrolled", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Numcredits</th>
                            <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "numCredits", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Phonenumber</th>
                            <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "phoneNumber", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Legallyauthorized</th>
                            <td>";
        // line 90
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
        // line 94
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
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "major", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Minor</th>
                            <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "minor", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Facultyliaison</th>
                            <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "facultyLiaison", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Semesterenrolled</th>
                            <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "semesterEnrolled", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Yearenrolled</th>
                            <td>";
        // line 114
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearEnrolled", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearEnrolled", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Semestergrad</th>
                            <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "semesterGrad", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Yeargrad</th>
                            <td>";
        // line 122
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearGrad", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearGrad", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>";
        // line 126
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sitesupername</th>
                            <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "siteSuperName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Sitesuperemail</th>
                            <td>";
        // line 134
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
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_392c81f5d604060e05319e51a641d426a716e30312ca6c0046822498d4e4c6c2->leave($__internal_392c81f5d604060e05319e51a641d426a716e30312ca6c0046822498d4e4c6c2_prof);

        
        $__internal_a34508c563281d4a603e9fb926c07a095fc4e698188d5701f2b5b7cfc3ab6da4->leave($__internal_a34508c563281d4a603e9fb926c07a095fc4e698188d5701f2b5b7cfc3ab6da4_prof);

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
        return array (  302 => 146,  297 => 144,  284 => 134,  277 => 130,  268 => 126,  259 => 122,  252 => 118,  243 => 114,  236 => 110,  229 => 106,  222 => 102,  215 => 98,  204 => 94,  193 => 90,  186 => 86,  179 => 82,  172 => 78,  165 => 74,  158 => 70,  151 => 66,  144 => 62,  137 => 58,  123 => 47,  119 => 45,  112 => 40,  106 => 36,  97 => 35,  55 => 8,  41 => 4,  11 => 1,);
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


{% block javascripts %} 
    <script>
        \$(document).ready(function(){
            \$(\"#export\").click(function(){
                const rows = [[\"{{ studentFormOne.firstName }}\", \"{{ studentFormOne.lastName }}\", \"{{ studentFormOne.userName }}\", \"{{ studentFormOne.cWID }}\"]];
                let csvContent = \"data:text/csv;charset=utf-8,\";
                rows.forEach(function(rowArray){
                   let row = rowArray.join(\",\");
                   csvContent += row + \"\\r\\n\";
                });
                var encodedUri = encodeURI(csvContent);
                
                var d = new Date();
                var month = d.getMonth()+1;
                var day = d.getDate();
                var specDate = d.getFullYear() + '/' +
                    (month<10 ? '0' : '') + month + '/' +
                    (day<10 ? '0' : '') + day;
                var csv = 'studentExport_' + specDate + '.csv';
                
                var link = document.createElement(\"a\");
                link.setAttribute(\"href\", encodedUri);
                link.setAttribute(\"download\", csv);
                document.body.appendChild(link); // Required for FF
                
                link.click(); // This will download the data file named \"my_data.csv\".
            });
        });
    </script>
{% endblock %}

{% block body %}
    <h1 class=\"header center\">Studentformone</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"{{ path('studentformone_index') }}\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
            <li>
                <button id=\"export\" class=\"btn waves-effect waves-light button-back\" >Export File</button>
               {# <a href=\"{{ path('export_file', { 'id': studentFormOne.id }) }}\" class=\"btn waves-effect waves-light button-back\">Export file</a> #}
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
{% endblock %}", "studentformone/show.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/show.html.twig");
    }
}
