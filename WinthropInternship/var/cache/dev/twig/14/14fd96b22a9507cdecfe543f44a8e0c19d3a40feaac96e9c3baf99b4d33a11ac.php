<?php

/* studentformone/index.html.twig */
class __TwigTemplate_11401389a96b791bc285d66c43b53a1b08d6393f0bbab059d026ced827114da6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformone/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_8100eda698f9cf5acbeb48045fcafcd8e5069f30e3f39bdd4562a30bb1b520e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8100eda698f9cf5acbeb48045fcafcd8e5069f30e3f39bdd4562a30bb1b520e6->enter($__internal_8100eda698f9cf5acbeb48045fcafcd8e5069f30e3f39bdd4562a30bb1b520e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/index.html.twig"));

        $__internal_fa81767ca5f4a700a1c40d46adec23c0d15508582e3b123e46453af9a0bd6516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa81767ca5f4a700a1c40d46adec23c0d15508582e3b123e46453af9a0bd6516->enter($__internal_fa81767ca5f4a700a1c40d46adec23c0d15508582e3b123e46453af9a0bd6516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8100eda698f9cf5acbeb48045fcafcd8e5069f30e3f39bdd4562a30bb1b520e6->leave($__internal_8100eda698f9cf5acbeb48045fcafcd8e5069f30e3f39bdd4562a30bb1b520e6_prof);

        
        $__internal_fa81767ca5f4a700a1c40d46adec23c0d15508582e3b123e46453af9a0bd6516->leave($__internal_fa81767ca5f4a700a1c40d46adec23c0d15508582e3b123e46453af9a0bd6516_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aceef0e0f554b87c76b0345267a9c14038787c12e1c23a1306a7f2fef2a86ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aceef0e0f554b87c76b0345267a9c14038787c12e1c23a1306a7f2fef2a86ec4->enter($__internal_aceef0e0f554b87c76b0345267a9c14038787c12e1c23a1306a7f2fef2a86ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6569861c138e52e0882ac6bef0e80a1e9f0343157e8384ccbf63bc11d00b03de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6569861c138e52e0882ac6bef0e80a1e9f0343157e8384ccbf63bc11d00b03de->enter($__internal_6569861c138e52e0882ac6bef0e80a1e9f0343157e8384ccbf63bc11d00b03de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "'s Dashboard";
        
        $__internal_6569861c138e52e0882ac6bef0e80a1e9f0343157e8384ccbf63bc11d00b03de->leave($__internal_6569861c138e52e0882ac6bef0e80a1e9f0343157e8384ccbf63bc11d00b03de_prof);

        
        $__internal_aceef0e0f554b87c76b0345267a9c14038787c12e1c23a1306a7f2fef2a86ec4->leave($__internal_aceef0e0f554b87c76b0345267a9c14038787c12e1c23a1306a7f2fef2a86ec4_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87869ecaf965d5fc6593bc6ad61c32ab5127873d17467cb086ec650ce4379ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87869ecaf965d5fc6593bc6ad61c32ab5127873d17467cb086ec650ce4379ff1->enter($__internal_87869ecaf965d5fc6593bc6ad61c32ab5127873d17467cb086ec650ce4379ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90c1b7a1b8ec954091cffe2e69f052680ea183bcda1cf547a112881411551211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c1b7a1b8ec954091cffe2e69f052680ea183bcda1cf547a112881411551211->enter($__internal_90c1b7a1b8ec954091cffe2e69f052680ea183bcda1cf547a112881411551211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
    <script>
        \$(document).ready(function(){
            \$(\"#export\").click(function(){
                var rows = [[\"Firstname\", \"Lastname\", \"Username\", \"Cwid\"]];
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentFormOne"]) {
            // line 12
            echo "                    var stuArray = [\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "firstName", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "lastName", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "userName", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "cWID", array()), "html", null, true);
            echo "\"];
                    rows.push(stuArray);
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentFormOne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                let csvContent = \"data:text/csv;charset=utf-8,\";
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
        
        $__internal_90c1b7a1b8ec954091cffe2e69f052680ea183bcda1cf547a112881411551211->leave($__internal_90c1b7a1b8ec954091cffe2e69f052680ea183bcda1cf547a112881411551211_prof);

        
        $__internal_87869ecaf965d5fc6593bc6ad61c32ab5127873d17467cb086ec650ce4379ff1->leave($__internal_87869ecaf965d5fc6593bc6ad61c32ab5127873d17467cb086ec650ce4379ff1_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1056e4a77e00ec9a9b2b3537ebdb21294cd6c93f5bfdf47fad010078cd145f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1056e4a77e00ec9a9b2b3537ebdb21294cd6c93f5bfdf47fad010078cd145f1->enter($__internal_f1056e4a77e00ec9a9b2b3537ebdb21294cd6c93f5bfdf47fad010078cd145f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_603a89901fbf95dbf7d27740696202a1d93b279e551436698e0a82d339fe8282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603a89901fbf95dbf7d27740696202a1d93b279e551436698e0a82d339fe8282->enter($__internal_603a89901fbf95dbf7d27740696202a1d93b279e551436698e0a82d339fe8282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "
    ";
        // line 45
        echo "            ";
        // line 46
        echo "    
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center\">Welcome, ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "!</h1>
            
            ";
        // line 52
        if ( !((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_HR_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_IO_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_FL_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            echo "  
            
                ";
            // line 54
            if (twig_test_empty(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")))) {
                echo " 
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">You don't have any active Internship Learning Agreements</h5>
                    </div>
                ";
            }
            // line 59
            echo "                <div class=\"row center\">
                    <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_new");
            echo "\" id=\"download-button\" class=\"btn-large waves-effect waves-light landing-btn-color\">Begin New Learning Agreement</a>
                </div>
                <br><br>
            ";
        }
        // line 64
        echo "
        </div>
    </div>
    ";
        // line 68
        echo "    ";
        if ( !twig_test_empty(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")))) {
            echo " 
        ";
            // line 79
            echo "        <div class=\"section no-pad-bot\" id=\"index-banner\">
            <div class=\"container\">
                <div class=\"card-panel\">
                    <table>
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Username</th>
                                <th>Cwid</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")));
            foreach ($context['_seq'] as $context["_key"] => $context["studentFormOne"]) {
                // line 94
                echo "                            <tr>
                                <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_show", array("id" => $this->getAttribute($context["studentFormOne"], "id", array()))), "html", null, true);
                echo "\">
                                <td>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "firstName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "lastName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "userName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "cWID", array()), "html", null, true);
                echo "</td>
                                </a>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_show", array("id" => $this->getAttribute($context["studentFormOne"], "id", array()))), "html", null, true);
                echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_edit", array("id" => $this->getAttribute($context["studentFormOne"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentFormOne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
        }
        // line 119
        echo "    ";
        // line 120
        echo "    ";
        // line 121
        echo "    ";
        // line 122
        echo "    ";
        // line 123
        echo "    ";
        
        $__internal_603a89901fbf95dbf7d27740696202a1d93b279e551436698e0a82d339fe8282->leave($__internal_603a89901fbf95dbf7d27740696202a1d93b279e551436698e0a82d339fe8282_prof);

        
        $__internal_f1056e4a77e00ec9a9b2b3537ebdb21294cd6c93f5bfdf47fad010078cd145f1->leave($__internal_f1056e4a77e00ec9a9b2b3537ebdb21294cd6c93f5bfdf47fad010078cd145f1_prof);

    }

    public function getTemplateName()
    {
        return "studentformone/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 123,  267 => 122,  265 => 121,  263 => 120,  261 => 119,  253 => 113,  241 => 107,  235 => 104,  227 => 99,  223 => 98,  219 => 97,  215 => 96,  211 => 95,  208 => 94,  204 => 93,  188 => 79,  183 => 68,  178 => 64,  171 => 60,  168 => 59,  160 => 54,  155 => 52,  150 => 50,  144 => 46,  142 => 45,  139 => 43,  130 => 42,  96 => 15,  80 => 12,  76 => 11,  61 => 6,  42 => 3,  11 => 1,);
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

{% block title %}{{ app.user.username}}'s Dashboard{% endblock %}

{##}
{% block javascripts %} 
    <script>
        \$(document).ready(function(){
            \$(\"#export\").click(function(){
                var rows = [[\"Firstname\", \"Lastname\", \"Username\", \"Cwid\"]];
                {% for studentFormOne in studentFormOnes %}
                    var stuArray = [\"{{ studentFormOne.firstName }}\", \"{{ studentFormOne.lastName }}\", \"{{ studentFormOne.userName }}\", \"{{ studentFormOne.cWID }}\"];
                    rows.push(stuArray);
                {% endfor %}
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
{##}

{% block body %}

    {#    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
            {#{{ 'Logged in as:'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
    
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center\">Welcome, {{ app.user.username}}!</h1>
            
            {% if not (is_granted('ROLE_HR_ADMIN') or is_granted('ROLE_IO_ADMIN') or is_granted('ROLE_FL_ADMIN') or is_granted('ROLE_SUPER_ADMIN'))%}  
            
                {% if studentFormOnes is empty %} 
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">You don't have any active Internship Learning Agreements</h5>
                    </div>
                {% endif %}
                <div class=\"row center\">
                    <a href=\"{{ path('studentformone_new') }}\" id=\"download-button\" class=\"btn-large waves-effect waves-light landing-btn-color\">Begin New Learning Agreement</a>
                </div>
                <br><br>
            {% endif %}

        </div>
    </div>
    {#<h1>Studentformones list</h1>#}
    {% if studentFormOnes is not empty %} 
        {#
        <div class=\"section\" id=\"nav-backBtn\">
            <ul>
                <li>
                    <button id=\"export\" class=\"btn waves-effect waves-light button-back\" >Export File</button>
                //    <a href=\"{{ path('export_file', { 'id': studentFormOne.id }) }}\" class=\"btn waves-effect waves-light button-back\">Export file</a> 
                </li>
            </ul>
        </div>
        #}
        <div class=\"section no-pad-bot\" id=\"index-banner\">
            <div class=\"container\">
                <div class=\"card-panel\">
                    <table>
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Username</th>
                                <th>Cwid</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for studentFormOne in studentFormOnes %}
                            <tr>
                                <a href=\"{{ path('studentformone_show', { 'id': studentFormOne.id }) }}\">
                                <td>{{ studentFormOne.firstName }}</td>
                                <td>{{ studentFormOne.lastName }}</td>
                                <td>{{ studentFormOne.userName }}</td>
                                <td>{{ studentFormOne.cWID }}</td>
                                </a>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"{{ path('studentformone_show', { 'id': studentFormOne.id }) }}\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('studentformone_edit', { 'id': studentFormOne.id }) }}\">edit</a>
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
    {% endif %}
    {#<ul>#}
    {#    <li>#}
    {#        <a href=\"{{ path('studentformone_new') }}\">Create a new studentFormOne</a>#}
    {#    </li>#}
    {#</ul>#}
{% endblock %}", "studentformone/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/index.html.twig");
    }
}
