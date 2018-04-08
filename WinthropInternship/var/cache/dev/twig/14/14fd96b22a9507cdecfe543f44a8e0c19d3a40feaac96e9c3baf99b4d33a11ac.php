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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "innerbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aae8799f735c39cdb9c98356c399393186b14e728dc19ad7a96d9a985f4cec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aae8799f735c39cdb9c98356c399393186b14e728dc19ad7a96d9a985f4cec7->enter($__internal_9aae8799f735c39cdb9c98356c399393186b14e728dc19ad7a96d9a985f4cec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/index.html.twig"));

        $__internal_70d97ef5f6a9b8eb2d2658b5aa8f7fc03d17f8edc09d39b266061ef105ce32e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d97ef5f6a9b8eb2d2658b5aa8f7fc03d17f8edc09d39b266061ef105ce32e5->enter($__internal_70d97ef5f6a9b8eb2d2658b5aa8f7fc03d17f8edc09d39b266061ef105ce32e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aae8799f735c39cdb9c98356c399393186b14e728dc19ad7a96d9a985f4cec7->leave($__internal_9aae8799f735c39cdb9c98356c399393186b14e728dc19ad7a96d9a985f4cec7_prof);

        
        $__internal_70d97ef5f6a9b8eb2d2658b5aa8f7fc03d17f8edc09d39b266061ef105ce32e5->leave($__internal_70d97ef5f6a9b8eb2d2658b5aa8f7fc03d17f8edc09d39b266061ef105ce32e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45eec6515587bd51820589dd474dd02863ac44e538e7adb1cbeaab26162b2c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45eec6515587bd51820589dd474dd02863ac44e538e7adb1cbeaab26162b2c01->enter($__internal_45eec6515587bd51820589dd474dd02863ac44e538e7adb1cbeaab26162b2c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab0fb33e2b49fcf1ec16ed12a26fe3019204c086564f3b003a13b06f0c422552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0fb33e2b49fcf1ec16ed12a26fe3019204c086564f3b003a13b06f0c422552->enter($__internal_ab0fb33e2b49fcf1ec16ed12a26fe3019204c086564f3b003a13b06f0c422552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "'s Dashboard";
        
        $__internal_ab0fb33e2b49fcf1ec16ed12a26fe3019204c086564f3b003a13b06f0c422552->leave($__internal_ab0fb33e2b49fcf1ec16ed12a26fe3019204c086564f3b003a13b06f0c422552_prof);

        
        $__internal_45eec6515587bd51820589dd474dd02863ac44e538e7adb1cbeaab26162b2c01->leave($__internal_45eec6515587bd51820589dd474dd02863ac44e538e7adb1cbeaab26162b2c01_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfa53f6a8ea903dcd5062a5d1df9618077a3202e3bf24335d010cf0d7038bc79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa53f6a8ea903dcd5062a5d1df9618077a3202e3bf24335d010cf0d7038bc79->enter($__internal_dfa53f6a8ea903dcd5062a5d1df9618077a3202e3bf24335d010cf0d7038bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8fd0ad55f57221d3c97c9fbab7e7a62005e49a1c4f733728a4e5d7d33cb9331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fd0ad55f57221d3c97c9fbab7e7a62005e49a1c4f733728a4e5d7d33cb9331->enter($__internal_f8fd0ad55f57221d3c97c9fbab7e7a62005e49a1c4f733728a4e5d7d33cb9331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "            ";
        // line 9
        echo "
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center\">Welcome, ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "!</h1>
            
            ";
        // line 15
        if ( !((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_HR_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_IO_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_FL_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            echo "  
            
                ";
            // line 17
            if (twig_test_empty(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")))) {
                echo " 
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">You don't have any active Internship Learning Agreements</h5>
                    </div>
                ";
            }
            // line 22
            echo "                <div class=\"row center\">
                    <a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_new");
            echo "\" id=\"download-button\" class=\"btn-large waves-effect waves-light landing-btn-color\">Begin New Learning Agreement</a>
                </div>
                <br><br>
            ";
        }
        // line 27
        echo "
        </div>
    </div>
    ";
        // line 31
        echo "    ";
        if ( !twig_test_empty(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")))) {
            echo " 
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
                        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")));
            foreach ($context['_seq'] as $context["_key"] => $context["studentFormOne"]) {
                // line 47
                echo "                            <tr>
                                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_show", array("id" => $this->getAttribute($context["studentFormOne"], "id", array()))), "html", null, true);
                echo "\">
                                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "firstName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "lastName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "userName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "cWID", array()), "html", null, true);
                echo "</td>
                                </a>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_show", array("id" => $this->getAttribute($context["studentFormOne"], "id", array()))), "html", null, true);
                echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
                // line 60
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
            // line 66
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
        }
        // line 72
        echo "    ";
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        // line 75
        echo "    ";
        // line 76
        echo "    ";
        
        $__internal_f8fd0ad55f57221d3c97c9fbab7e7a62005e49a1c4f733728a4e5d7d33cb9331->leave($__internal_f8fd0ad55f57221d3c97c9fbab7e7a62005e49a1c4f733728a4e5d7d33cb9331_prof);

        
        $__internal_dfa53f6a8ea903dcd5062a5d1df9618077a3202e3bf24335d010cf0d7038bc79->leave($__internal_dfa53f6a8ea903dcd5062a5d1df9618077a3202e3bf24335d010cf0d7038bc79_prof);

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
        return array (  197 => 76,  195 => 75,  193 => 74,  191 => 73,  189 => 72,  181 => 66,  169 => 60,  163 => 57,  155 => 52,  151 => 51,  147 => 50,  143 => 49,  139 => 48,  136 => 47,  132 => 46,  113 => 31,  108 => 27,  101 => 23,  98 => 22,  90 => 17,  85 => 15,  80 => 13,  74 => 9,  72 => 8,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
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
