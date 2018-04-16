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
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "innerbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38237f0c0a6491adce75595d28200d5cf5eb7b85889612f525ad783e2e935f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38237f0c0a6491adce75595d28200d5cf5eb7b85889612f525ad783e2e935f17->enter($__internal_38237f0c0a6491adce75595d28200d5cf5eb7b85889612f525ad783e2e935f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hrform/index.html.twig"));

        $__internal_4af7836dd89caa71346aa7d055b3992b7e7fac87f549e484d5e3041a1a88462e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af7836dd89caa71346aa7d055b3992b7e7fac87f549e484d5e3041a1a88462e->enter($__internal_4af7836dd89caa71346aa7d055b3992b7e7fac87f549e484d5e3041a1a88462e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hrform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38237f0c0a6491adce75595d28200d5cf5eb7b85889612f525ad783e2e935f17->leave($__internal_38237f0c0a6491adce75595d28200d5cf5eb7b85889612f525ad783e2e935f17_prof);

        
        $__internal_4af7836dd89caa71346aa7d055b3992b7e7fac87f549e484d5e3041a1a88462e->leave($__internal_4af7836dd89caa71346aa7d055b3992b7e7fac87f549e484d5e3041a1a88462e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8b0c97f5d7e986aa6cb25cab4c515c3a14d1e57d3dafe6274ff6c70b849512c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b0c97f5d7e986aa6cb25cab4c515c3a14d1e57d3dafe6274ff6c70b849512c->enter($__internal_a8b0c97f5d7e986aa6cb25cab4c515c3a14d1e57d3dafe6274ff6c70b849512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59e034e50848b39fea362ab0c02a0b09fb1d5ab5a27285577c8653cfe1bc6965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e034e50848b39fea362ab0c02a0b09fb1d5ab5a27285577c8653cfe1bc6965->enter($__internal_59e034e50848b39fea362ab0c02a0b09fb1d5ab5a27285577c8653cfe1bc6965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header center\">HR Form list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                ";
        // line 9
        echo "                <form id=\"hrAction\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hrform_new");
        echo "\" method=\"GET\">
                    ";
        // line 11
        echo "                    <table class=\"mdl-data-table mdl-shadow--2dp\" id=\"hrTable\">
                    ";
        // line 13
        echo "                        <thead>
                            <tr>
                                <th>
                                    <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select\" for=\"table-header\">
                                        <input type=\"checkbox\" id=\"table-header\" class=\"mdl-checkbox__input\" />
                                    </label>
                                </th>
                                <th class=\"mdl-data-table__cell--non-numeric\">First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Winthrop ID Number (CWID)</th>
                                <th>Internship Company Name</th>
                                    ";
        // line 26
        echo "                                    ";
        // line 27
        echo "                                    ";
        // line 28
        echo "                                    ";
        // line 29
        echo "                                    ";
        // line 30
        echo "                                    ";
        // line 31
        echo "                                    ";
        // line 32
        echo "                                ";
        // line 33
        echo "                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["studentFormOne"]) {
            // line 37
            echo "                            <tr>
                                <td>
                                    <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select\" for=\"row[";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "]\">
                                        <input type=\"checkbox\" id=\"row[";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "]\" name=\"studentInfo[]\" class=\"mdl-checkbox__input\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "id", array()), "html", null, true);
            echo "\"/>
                                    </label>
                                </td>
                                <td class=\"mdl-data-table__cell--non-numeric\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "firstName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "lastName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "emailAddress", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "cWID", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "organizationName", array()), "html", null, true);
            echo "</td>
                                ";
            // line 49
            echo "                                    ";
            // line 50
            echo "                                ";
            // line 51
            echo "                                ";
            // line 52
            echo "                                ";
            // line 53
            echo "                                ";
            // line 54
            echo "                                ";
            // line 55
            echo "                                ";
            // line 56
            echo "                                ";
            // line 57
            echo "                                ";
            // line 58
            echo "                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentFormOne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </tbody>
                    </table>
                    <input type=\"submit\" name=\"submit\" value=\"Approve Applications\">
                </form> 
            </div>
        </div>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <thead>
                        <tr>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email Address</td>
                            <td>Winthrop ID Number (CWID)</td>
                            <td>Internship Company Name</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hRForms"] ?? $this->getContext($context, "hRForms")));
        foreach ($context['_seq'] as $context["_key"] => $context["hRForm"]) {
            // line 82
            echo "                        <tr>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["hRForm"], "firstName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["hRForm"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["hRForm"], "emailAddress", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["hRForm"], "cWID", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["hRForm"], "organizationName", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hRForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        // line 96
        echo "    ";
        // line 97
        echo "    ";
        // line 98
        echo "    ";
        // line 99
        echo "    ";
        
        $__internal_59e034e50848b39fea362ab0c02a0b09fb1d5ab5a27285577c8653cfe1bc6965->leave($__internal_59e034e50848b39fea362ab0c02a0b09fb1d5ab5a27285577c8653cfe1bc6965_prof);

        
        $__internal_a8b0c97f5d7e986aa6cb25cab4c515c3a14d1e57d3dafe6274ff6c70b849512c->leave($__internal_a8b0c97f5d7e986aa6cb25cab4c515c3a14d1e57d3dafe6274ff6c70b849512c_prof);

    }

    // line 102
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad712f52c6ff81ccb6281e72c1e2e0749aecb269a8d65f2a09f662e3b93ab7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad712f52c6ff81ccb6281e72c1e2e0749aecb269a8d65f2a09f662e3b93ab7e5->enter($__internal_ad712f52c6ff81ccb6281e72c1e2e0749aecb269a8d65f2a09f662e3b93ab7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7cd5c8b515e9a0e71baec865453495dbb68a34d08dca634ecab6c4c37c2d8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cd5c8b515e9a0e71baec865453495dbb68a34d08dca634ecab6c4c37c2d8d5->enter($__internal_b7cd5c8b515e9a0e71baec865453495dbb68a34d08dca634ecab6c4c37c2d8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 103
        echo "    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/rmCheckBox.css\">
";
        
        $__internal_b7cd5c8b515e9a0e71baec865453495dbb68a34d08dca634ecab6c4c37c2d8d5->leave($__internal_b7cd5c8b515e9a0e71baec865453495dbb68a34d08dca634ecab6c4c37c2d8d5_prof);

        
        $__internal_ad712f52c6ff81ccb6281e72c1e2e0749aecb269a8d65f2a09f662e3b93ab7e5->leave($__internal_ad712f52c6ff81ccb6281e72c1e2e0749aecb269a8d65f2a09f662e3b93ab7e5_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79f616f44c137383d5a9c65c1eace5fd94765fca831b1cbbbec548392a41e60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f616f44c137383d5a9c65c1eace5fd94765fca831b1cbbbec548392a41e60e->enter($__internal_79f616f44c137383d5a9c65c1eace5fd94765fca831b1cbbbec548392a41e60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d6aa611cc1f5ea590ed45c61ed70da13978c81cf86b02fcd07a20439cc0f5fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6aa611cc1f5ea590ed45c61ed70da13978c81cf86b02fcd07a20439cc0f5fd9->enter($__internal_d6aa611cc1f5ea590ed45c61ed70da13978c81cf86b02fcd07a20439cc0f5fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>
    
    <script type=\"text/javascript\">
        var table = document.querySelector('table');
        var headerCheckbox = table.querySelector('thead .mdl-data-table__select input');
        var boxes = table.querySelectorAll('tbody .mdl-data-table__select');
        var rows = table.querySelectorAll('tbody tr');
        
        var headerCheckHandler = function(event) {
          if (event.target.checked) {
            for (var i = 0, length = boxes.length; i < length; i++) {
                boxes[i].MaterialCheckbox.check();
                rows[i].classList.add('is-selected');
            }
          }else {
            for (var i = 0, length = boxes.length; i < length; i++) {
                boxes[i].MaterialCheckbox.uncheck();
                rows[i].classList.remove('is-selected');
            }
          }
        };
        headerCheckbox.addEventListener('change', headerCheckHandler);
    
    
        // var table = document.querySelector('table');
        // var headerCheckbox = table.querySelector('thead .mdl-data-table__select input');
        // var boxes = table.querySelectorAll('tbody .mdl-data-table__select');
        // var headerCheckHandler = function(event) {
        //   if (event.target.checked) {
        //     for (var i = 0, length = boxes.length; i < length; i++) {
        //       boxes[i].MaterialCheckbox.check();
        //       boxes[i].MaterialCheckbox.updateClasses();
        //     }
        //   } else {
        //     for (var i = 0, length = boxes.length; i < length; i++) {
        //       boxes[i].MaterialCheckbox.uncheck();
        //       boxes[i].MaterialCheckbox.updateClasses();
        //     }
        //   }
        // };
        // headerCheckbox.addEventListener('change', headerCheckHandler);
        // \$(document).ready(function(){
        // //     \$(\"input[name=submit]\").click(function(){
        // //         if (!\$(\"tr\").hasClass(\"is-selected\")) {
        // //           \$(\"tr.is-selected\").find(\"input\").removeAttr( \"value\" );  
        // //         }
        // //     });
        // // });
        
        //     \$('#hrAction').submit(function(){
        //         \$('#hrTable > tbody  > tr').each(function() {
        //             if(!\$(\"tr\").hasClass(\"is-selected\")) {
        //             // if(\$(\"tr:not([is-selected])\")){
        //                 // \$(\"tr\").removeClass(\"is-selected\");
        //                 // \$(\"tr:not([is-selected]) > td > input\").remove(); 
        //                 \$(\"tr:not([is-selected]) > td > input\").val(\"\");
        //             }
        //         });
        //     });
        // });
    </script>
";
        
        $__internal_d6aa611cc1f5ea590ed45c61ed70da13978c81cf86b02fcd07a20439cc0f5fd9->leave($__internal_d6aa611cc1f5ea590ed45c61ed70da13978c81cf86b02fcd07a20439cc0f5fd9_prof);

        
        $__internal_79f616f44c137383d5a9c65c1eace5fd94765fca831b1cbbbec548392a41e60e->leave($__internal_79f616f44c137383d5a9c65c1eace5fd94765fca831b1cbbbec548392a41e60e_prof);

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
        return array (  283 => 107,  271 => 103,  262 => 102,  252 => 99,  250 => 98,  248 => 97,  246 => 96,  239 => 90,  230 => 87,  226 => 86,  222 => 85,  218 => 84,  214 => 83,  211 => 82,  207 => 81,  184 => 60,  169 => 58,  167 => 57,  165 => 56,  163 => 55,  161 => 54,  159 => 53,  157 => 52,  155 => 51,  153 => 50,  151 => 49,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  123 => 40,  119 => 39,  115 => 37,  98 => 36,  93 => 33,  91 => 32,  89 => 31,  87 => 30,  85 => 29,  83 => 28,  81 => 27,  79 => 26,  65 => 13,  62 => 11,  57 => 9,  51 => 4,  42 => 3,  11 => 1,);
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
                {#<form method=\"post\" action=\"{{ path('hrform_new') }}\"></form>#}
                <form id=\"hrAction\" action=\"{{ path('hrform_new') }}\" method=\"GET\">
                    {#<table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\" id=\"hrTable\">#}
                    <table class=\"mdl-data-table mdl-shadow--2dp\" id=\"hrTable\">
                    {#<table>#}
                        <thead>
                            <tr>
                                <th>
                                    <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select\" for=\"table-header\">
                                        <input type=\"checkbox\" id=\"table-header\" class=\"mdl-checkbox__input\" />
                                    </label>
                                </th>
                                <th class=\"mdl-data-table__cell--non-numeric\">First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Winthrop ID Number (CWID)</th>
                                <th>Internship Company Name</th>
                                    {#<ul class=\"flexRow\">#}
                                    {#    <li>First Name</li>#}
                                    {#    <li>Last Name</li>#}
                                    {#    <li>Email Address</li>#}
                                    {#    <li>Winthrop ID Number (CWID)</li>#}
                                    {#    <li>Internship Company Name</li>#}
                                    {#</ul>#}
                                {#</th>#}
                            </tr>
                        </thead>
                        <tbody>
                        {% for studentFormOne in studentFormOnes %}
                            <tr>
                                <td>
                                    <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select\" for=\"row[{{ loop.index }}]\">
                                        <input type=\"checkbox\" id=\"row[{{ loop.index }}]\" name=\"studentInfo[]\" class=\"mdl-checkbox__input\"  value=\"{{ studentFormOne.id }}\"/>
                                    </label>
                                </td>
                                <td class=\"mdl-data-table__cell--non-numeric\">{{ studentFormOne.firstName }}</td>
                                <td>{{ studentFormOne.lastName }}</td>
                                <td>{{ studentFormOne.emailAddress}}</td>
                                <td>{{ studentFormOne.cWID }}</td>
                                <td>{{ studentFormOne.organizationName }}</td>
                                {#<td class=\"mdl-data-table__cell--non-numeric\">#}
                                    {#<input type=\"hidden\" name=\"studentInfo[]\" value=\"{{ studentFormOne.id }}\" />#}
                                {#    <ul class=\"flexRow\">#}
                                {#        <li>{{ studentFormOne.firstName }}</li>#}
                                {#        <li>{{ studentFormOne.lastName }}</li>#}
                                {#        <li>{{ studentFormOne.emailAddress}}</li>#}
                                {#        <li>{{ studentFormOne.cWID }}</li>#}
                                {#        <li>{{ studentFormOne.organizationName }}</li>#}
                                {#    </ul>#}
                                {#</td>#}
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    <input type=\"submit\" name=\"submit\" value=\"Approve Applications\">
                </form> 
            </div>
        </div>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <thead>
                        <tr>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email Address</td>
                            <td>Winthrop ID Number (CWID)</td>
                            <td>Internship Company Name</td>
                        </tr>
                    </thead>
                    <tbody>
                    {% for hRForm in hRForms %}
                        <tr>
                            <td>{{ hRForm.firstName }}</td>
                            <td>{{ hRForm.lastName }}</td>
                            <td>{{ hRForm.emailAddress}}</td>
                            <td>{{ hRForm.cWID }}</td>
                            <td>{{ hRForm.organizationName }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {#<ul>#}
    {#    <li>#}
    {#        <a href=\"{{ path('hrform_new') }}\">Create a new hRForm</a>#}
    {#    </li>#}
    {#</ul>#}
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/rmCheckBox.css\">
{% endblock %}

{% block javascripts %}    
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>
    
    <script type=\"text/javascript\">
        var table = document.querySelector('table');
        var headerCheckbox = table.querySelector('thead .mdl-data-table__select input');
        var boxes = table.querySelectorAll('tbody .mdl-data-table__select');
        var rows = table.querySelectorAll('tbody tr');
        
        var headerCheckHandler = function(event) {
          if (event.target.checked) {
            for (var i = 0, length = boxes.length; i < length; i++) {
                boxes[i].MaterialCheckbox.check();
                rows[i].classList.add('is-selected');
            }
          }else {
            for (var i = 0, length = boxes.length; i < length; i++) {
                boxes[i].MaterialCheckbox.uncheck();
                rows[i].classList.remove('is-selected');
            }
          }
        };
        headerCheckbox.addEventListener('change', headerCheckHandler);
    
    
        // var table = document.querySelector('table');
        // var headerCheckbox = table.querySelector('thead .mdl-data-table__select input');
        // var boxes = table.querySelectorAll('tbody .mdl-data-table__select');
        // var headerCheckHandler = function(event) {
        //   if (event.target.checked) {
        //     for (var i = 0, length = boxes.length; i < length; i++) {
        //       boxes[i].MaterialCheckbox.check();
        //       boxes[i].MaterialCheckbox.updateClasses();
        //     }
        //   } else {
        //     for (var i = 0, length = boxes.length; i < length; i++) {
        //       boxes[i].MaterialCheckbox.uncheck();
        //       boxes[i].MaterialCheckbox.updateClasses();
        //     }
        //   }
        // };
        // headerCheckbox.addEventListener('change', headerCheckHandler);
        // \$(document).ready(function(){
        // //     \$(\"input[name=submit]\").click(function(){
        // //         if (!\$(\"tr\").hasClass(\"is-selected\")) {
        // //           \$(\"tr.is-selected\").find(\"input\").removeAttr( \"value\" );  
        // //         }
        // //     });
        // // });
        
        //     \$('#hrAction').submit(function(){
        //         \$('#hrTable > tbody  > tr').each(function() {
        //             if(!\$(\"tr\").hasClass(\"is-selected\")) {
        //             // if(\$(\"tr:not([is-selected])\")){
        //                 // \$(\"tr\").removeClass(\"is-selected\");
        //                 // \$(\"tr:not([is-selected]) > td > input\").remove(); 
        //                 \$(\"tr:not([is-selected]) > td > input\").val(\"\");
        //             }
        //         });
        //     });
        // });
    </script>
{% endblock %}
", "hrform/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/hrform/index.html.twig");
    }
}
