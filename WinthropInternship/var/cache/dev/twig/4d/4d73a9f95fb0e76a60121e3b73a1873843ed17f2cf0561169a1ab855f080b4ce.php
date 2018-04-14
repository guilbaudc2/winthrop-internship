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
        $__internal_a1d1325fc64cd5f611a0611f96b7950226c08ec7670b767900e542aec8137140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d1325fc64cd5f611a0611f96b7950226c08ec7670b767900e542aec8137140->enter($__internal_a1d1325fc64cd5f611a0611f96b7950226c08ec7670b767900e542aec8137140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/show.html.twig"));

        $__internal_2d8541044a4cf3107531c83a6fc7e1c80263b765dc5625d55e23803d7724256a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8541044a4cf3107531c83a6fc7e1c80263b765dc5625d55e23803d7724256a->enter($__internal_2d8541044a4cf3107531c83a6fc7e1c80263b765dc5625d55e23803d7724256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d1325fc64cd5f611a0611f96b7950226c08ec7670b767900e542aec8137140->leave($__internal_a1d1325fc64cd5f611a0611f96b7950226c08ec7670b767900e542aec8137140_prof);

        
        $__internal_2d8541044a4cf3107531c83a6fc7e1c80263b765dc5625d55e23803d7724256a->leave($__internal_2d8541044a4cf3107531c83a6fc7e1c80263b765dc5625d55e23803d7724256a_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1eb7849c8e30b664a970f04c8d05757eae67520b3977b8d4a8850d7702cf7aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb7849c8e30b664a970f04c8d05757eae67520b3977b8d4a8850d7702cf7aca->enter($__internal_1eb7849c8e30b664a970f04c8d05757eae67520b3977b8d4a8850d7702cf7aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba546f9470a4e7d93ba73fdcd3951eee5492e70b2e2d030967f9e8542ea11700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba546f9470a4e7d93ba73fdcd3951eee5492e70b2e2d030967f9e8542ea11700->enter($__internal_ba546f9470a4e7d93ba73fdcd3951eee5492e70b2e2d030967f9e8542ea11700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ba546f9470a4e7d93ba73fdcd3951eee5492e70b2e2d030967f9e8542ea11700->leave($__internal_ba546f9470a4e7d93ba73fdcd3951eee5492e70b2e2d030967f9e8542ea11700_prof);

        
        $__internal_1eb7849c8e30b664a970f04c8d05757eae67520b3977b8d4a8850d7702cf7aca->leave($__internal_1eb7849c8e30b664a970f04c8d05757eae67520b3977b8d4a8850d7702cf7aca_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d5cb77dd6acf4c931ad0844eb1467301c8b000d12de0982e952a80a3955bc02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5cb77dd6acf4c931ad0844eb1467301c8b000d12de0982e952a80a3955bc02->enter($__internal_2d5cb77dd6acf4c931ad0844eb1467301c8b000d12de0982e952a80a3955bc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78c40f8ab351e9356718ae17475a96450666665055488a70a95ba333afaad2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c40f8ab351e9356718ae17475a96450666665055488a70a95ba333afaad2c3->enter($__internal_78c40f8ab351e9356718ae17475a96450666665055488a70a95ba333afaad2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <th>Submit Date</th>
                            <td>";
        // line 126
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "submitDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "submitDate", array()), "Y-m-d"), "html", null, true);
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

                        ";
        // line 138
        echo "                        ";
        // line 139
        echo "                        ";
        // line 140
        echo "                        ";
        // line 160
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <ul>
        <li>
            ";
        // line 168
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            ";
        // line 170
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_78c40f8ab351e9356718ae17475a96450666665055488a70a95ba333afaad2c3->leave($__internal_78c40f8ab351e9356718ae17475a96450666665055488a70a95ba333afaad2c3_prof);

        
        $__internal_2d5cb77dd6acf4c931ad0844eb1467301c8b000d12de0982e952a80a3955bc02->leave($__internal_2d5cb77dd6acf4c931ad0844eb1467301c8b000d12de0982e952a80a3955bc02_prof);

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
        return array (  311 => 170,  306 => 168,  296 => 160,  294 => 140,  292 => 139,  290 => 138,  284 => 134,  277 => 130,  268 => 126,  259 => 122,  252 => 118,  243 => 114,  236 => 110,  229 => 106,  222 => 102,  215 => 98,  204 => 94,  193 => 90,  186 => 86,  179 => 82,  172 => 78,  165 => 74,  158 => 70,  151 => 66,  144 => 62,  137 => 58,  123 => 47,  119 => 45,  112 => 40,  106 => 36,  97 => 35,  55 => 8,  41 => 4,  11 => 1,);
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
                            <th>Submit Date</th>
                            <td>{% if studentFormOne.submitDate %}{{ studentFormOne.submitDate|date('Y-m-d') }}{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Sitesupername</th>
                            <td>{{ studentFormOne.siteSuperName }}</td>
                        </tr>
                        <tr>
                            <th>Sitesuperemail</th>
                            <td>{{ studentFormOne.siteSuperEmail }}</td>
                        </tr>

                        {#<tr>#}
                        {#    <th>Sitesuperaccesscode</th>#}
                        {#    <td>{{ studentFormOne.siteSuperAccessCode }}</td>#}
                        {#</tr>#}
{#                    </tbody>#}
{#                </table>#}
{#            </div>#}
{#        </div>#}
{#    </div>#}
{#    <ul>#}
{#        <li>#}
{#            <a href=\"{{ path('studentformone_index') }}\">Back to the list</a>#}
{#        </li>#}
{#        <li>#}
{#            <a href=\"{{ path('studentformone_edit', { 'id': studentFormOne.id }) }}\">Edit</a>#}
{#        </li>#}
{#        <li>#}
{#            {{ form_start(delete_form) }}#}
{#                <input type=\"submit\" value=\"Delete\">#}
{#            {{ form_end(delete_form) }}#}
{#        </li>#}
{#    </ul>#}
{#{% endblock %}#}
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
