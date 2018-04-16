<?php

/* studentformtwo/show.html.twig */
class __TwigTemplate_4627e382c37969977f35b21aa6695e871e53e7a50da154718372e50bee153245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformtwo/show.html.twig", 1);
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
        $__internal_c432608faa8d2e9d05e5c726ba8e796836d8e606d717e7d1effefc158deef01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c432608faa8d2e9d05e5c726ba8e796836d8e606d717e7d1effefc158deef01c->enter($__internal_c432608faa8d2e9d05e5c726ba8e796836d8e606d717e7d1effefc158deef01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/show.html.twig"));

        $__internal_83534a9f3c75308f31952f774b0cd15661eff363445737f81f72ad2d2f9b5afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83534a9f3c75308f31952f774b0cd15661eff363445737f81f72ad2d2f9b5afe->enter($__internal_83534a9f3c75308f31952f774b0cd15661eff363445737f81f72ad2d2f9b5afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c432608faa8d2e9d05e5c726ba8e796836d8e606d717e7d1effefc158deef01c->leave($__internal_c432608faa8d2e9d05e5c726ba8e796836d8e606d717e7d1effefc158deef01c_prof);

        
        $__internal_83534a9f3c75308f31952f774b0cd15661eff363445737f81f72ad2d2f9b5afe->leave($__internal_83534a9f3c75308f31952f774b0cd15661eff363445737f81f72ad2d2f9b5afe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6445dafa70ef8f0262131322df7ee181df76b35f04a4e87168d95518ca9be642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6445dafa70ef8f0262131322df7ee181df76b35f04a4e87168d95518ca9be642->enter($__internal_6445dafa70ef8f0262131322df7ee181df76b35f04a4e87168d95518ca9be642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74b7569e59ec53fe7454500c86b17e6676076620b03526d9c50f6a09fc7d6af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b7569e59ec53fe7454500c86b17e6676076620b03526d9c50f6a09fc7d6af3->enter($__internal_74b7569e59ec53fe7454500c86b17e6676076620b03526d9c50f6a09fc7d6af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header center\">Studentformtwo</h1>
    <div class=\"section\" id=\"nav-backBtn\">
        <ul>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_index");
        echo "\" class=\"btn waves-effect waves-light button-back\">Back to the list</a>
            </li>
            <li>
                <button id=\"export\" class=\"btn waves-effect waves-light button-back\" >Export File</button>
               ";
        // line 13
        echo "            </li>
            <li>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_edit", array("id" => $this->getAttribute(($context["studentFormTwo"] ?? $this->getContext($context, "studentFormTwo")), "id", array()))), "html", null, true);
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
                            <th>Id</th>
                            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormTwo"] ?? $this->getContext($context, "studentFormTwo")), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Educationalexperience</th>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormTwo"] ?? $this->getContext($context, "studentFormTwo")), "educationalExperience", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Goals</th>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormTwo"] ?? $this->getContext($context, "studentFormTwo")), "goals", array()), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 37
        echo "                        ";
        // line 38
        echo "                        ";
        // line 39
        echo "                        ";
        // line 40
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <ul>
        ";
        // line 54
        echo "        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_74b7569e59ec53fe7454500c86b17e6676076620b03526d9c50f6a09fc7d6af3->leave($__internal_74b7569e59ec53fe7454500c86b17e6676076620b03526d9c50f6a09fc7d6af3_prof);

        
        $__internal_6445dafa70ef8f0262131322df7ee181df76b35f04a4e87168d95518ca9be642->leave($__internal_6445dafa70ef8f0262131322df7ee181df76b35f04a4e87168d95518ca9be642_prof);

    }

    public function getTemplateName()
    {
        return "studentformtwo/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  116 => 55,  113 => 54,  105 => 40,  103 => 39,  101 => 38,  99 => 37,  94 => 34,  87 => 30,  80 => 26,  66 => 15,  62 => 13,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 class=\"header center\">Studentformtwo</h1>
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
                <a href=\"{{ path('studentformone_edit', { 'id': studentFormTwo.id }) }}\" class=\"btn waves-effect waves-light button-back\">Edit</a>
            </li>
        </ul>
    </div>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ studentFormTwo.id }}</td>
                        </tr>
                        <tr>
                            <th>Educationalexperience</th>
                            <td>{{ studentFormTwo.educationalExperience }}</td>
                        </tr>
                        <tr>
                            <th>Goals</th>
                            <td>{{ studentFormTwo.goals }}</td>
                        </tr>
                        {#<tr>#}
                        {#    <th>SFO id</th>#}
                        {#    <td>{{ studentFormTwo.student_form_one_id }}</td>#}
                        {#</tr>#}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <ul>
        {#
        <li>
            <a href=\"{{ path('studentformtwo_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('studentformtwo_edit', { 'id': studentFormTwo.id }) }}\">Edit</a>
        </li>
        #}
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" class=\"btn-large waves-effect waves-light landing-btn-color button-resize\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "studentformtwo/show.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformtwo/show.html.twig");
    }
}
