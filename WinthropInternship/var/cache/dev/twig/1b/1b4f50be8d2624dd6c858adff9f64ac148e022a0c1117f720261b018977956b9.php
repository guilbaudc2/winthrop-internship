<?php

/* careerconsultantform/index.html.twig */
class __TwigTemplate_f5982ea6e5fb58f4aef15d9c705cc11c813a4ef453945224a4fae01016ae49ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "careerconsultantform/index.html.twig", 1);
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
        $__internal_e568c2bf8edaa8e78f047b303a26b4d905606b534492ea04dc0dc2c429f655d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e568c2bf8edaa8e78f047b303a26b4d905606b534492ea04dc0dc2c429f655d6->enter($__internal_e568c2bf8edaa8e78f047b303a26b4d905606b534492ea04dc0dc2c429f655d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "careerconsultantform/index.html.twig"));

        $__internal_99bd9b98402a3c40e6a3cb4b5061e6823e7d10e943fe4df6f9ec81cc2812d0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bd9b98402a3c40e6a3cb4b5061e6823e7d10e943fe4df6f9ec81cc2812d0ca->enter($__internal_99bd9b98402a3c40e6a3cb4b5061e6823e7d10e943fe4df6f9ec81cc2812d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "careerconsultantform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e568c2bf8edaa8e78f047b303a26b4d905606b534492ea04dc0dc2c429f655d6->leave($__internal_e568c2bf8edaa8e78f047b303a26b4d905606b534492ea04dc0dc2c429f655d6_prof);

        
        $__internal_99bd9b98402a3c40e6a3cb4b5061e6823e7d10e943fe4df6f9ec81cc2812d0ca->leave($__internal_99bd9b98402a3c40e6a3cb4b5061e6823e7d10e943fe4df6f9ec81cc2812d0ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_139eebe0d38f25b33212b8d7bea957f97215104f51436becf11e4f9125866ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139eebe0d38f25b33212b8d7bea957f97215104f51436becf11e4f9125866ff8->enter($__internal_139eebe0d38f25b33212b8d7bea957f97215104f51436becf11e4f9125866ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b39d38aca13fcbb29c8c503b8c2b85cdbbc59d06115671cf5f87d5096d2dab92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39d38aca13fcbb29c8c503b8c2b85cdbbc59d06115671cf5f87d5096d2dab92->enter($__internal_b39d38aca13fcbb29c8c503b8c2b85cdbbc59d06115671cf5f87d5096d2dab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Careerconsultantforms list</h1>
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("careerconsultantform_new");
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
        echo "                    
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["careerConsultantForms"] ?? $this->getContext($context, "careerConsultantForms")));
        foreach ($context['_seq'] as $context["_key"] => $context["careerConsultantForm"]) {
            // line 101
            echo "                        <tr>
                            <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["careerConsultantForm"], "firstName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["careerConsultantForm"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["careerConsultantForm"], "emailAddress", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["careerConsultantForm"], "cWID", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["careerConsultantForm"], "organizationName", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("careerconsultantform_show", array("id" => $this->getAttribute($context["careerConsultantForm"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['careerConsultantForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>              

    <ul>
        <li>
            <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("careerconsultantform_new");
        echo "\">Create a new careerConsultantForm</a>
        </li>
    </ul>
";
        
        $__internal_b39d38aca13fcbb29c8c503b8c2b85cdbbc59d06115671cf5f87d5096d2dab92->leave($__internal_b39d38aca13fcbb29c8c503b8c2b85cdbbc59d06115671cf5f87d5096d2dab92_prof);

        
        $__internal_139eebe0d38f25b33212b8d7bea957f97215104f51436becf11e4f9125866ff8->leave($__internal_139eebe0d38f25b33212b8d7bea957f97215104f51436becf11e4f9125866ff8_prof);

    }

    public function getTemplateName()
    {
        return "careerconsultantform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 124,  253 => 116,  241 => 110,  234 => 106,  230 => 105,  226 => 104,  222 => 103,  218 => 102,  215 => 101,  211 => 100,  208 => 99,  206 => 98,  204 => 97,  202 => 96,  200 => 95,  198 => 94,  196 => 93,  194 => 92,  192 => 91,  190 => 90,  188 => 89,  186 => 88,  184 => 87,  182 => 86,  180 => 85,  178 => 84,  176 => 83,  174 => 82,  151 => 60,  139 => 53,  137 => 52,  135 => 51,  133 => 50,  131 => 49,  128 => 47,  126 => 46,  124 => 45,  122 => 44,  120 => 43,  118 => 42,  116 => 41,  114 => 40,  112 => 39,  110 => 38,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  89 => 32,  84 => 29,  80 => 28,  76 => 26,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Careerconsultantforms list</h1>
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
                                <form action=\"{{ path('careerconsultantform_new') }}\" method=\"GET\">
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
                    {#{% for careerConsultantForm in careerConsultantForms %}#}
                    {#    <tr>#}
                    {#        <td><a href=\"{{ path('careerconsultantform_show', { 'id': careerConsultantForm.id }) }}\">{{ careerConsultantForm.id }}</a></td>#}
                    {#        <td>{{ careerConsultantForm.legalName }}</td>#}
                    {#        <td>{% if careerConsultantForm.approve %}Yes{% else %}No{% endif %}</td>#}
                    {#        <td>{% if careerConsultantForm.approveDate %}{{ careerConsultantForm.approveDate|date('Y-m-d H:i:s') }}{% endif %}</td>#}
                    {#        <td>#}
                    {#            <ul>#}
                    {#                <li>#}
                    {#                    <a href=\"{{ path('careerconsultantform_show', { 'id': careerConsultantForm.id }) }}\">show</a>#}
                    {#                </li>#}
                    {#                <li>#}
                    {#                    <a href=\"{{ path('careerconsultantform_edit', { 'id': careerConsultantForm.id }) }}\">edit</a>#}
                    {#                </li>#}
                    {#            </ul>#}
                    {#        </td>#}
                    {#    </tr>#}
                    {#{% endfor %}#}
                    
                    {% for careerConsultantForm in careerConsultantForms %}
                        <tr>
                            <td>{{ careerConsultantForm.firstName }}</td>
                            <td>{{ careerConsultantForm.lastName }}</td>
                            <td>{{ careerConsultantForm.emailAddress}}</td>
                            <td>{{ careerConsultantForm.cWID }}</td>
                            <td>{{ careerConsultantForm.organizationName }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('careerconsultantform_show', { 'id': careerConsultantForm.id }) }}\">show</a>
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
            <a href=\"{{ path('careerconsultantform_new') }}\">Create a new careerConsultantForm</a>
        </li>
    </ul>
{% endblock %}
", "careerconsultantform/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/careerconsultantform/index.html.twig");
    }
}
