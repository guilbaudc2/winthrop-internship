<?php

/* studentformtwo/index.html.twig */
class __TwigTemplate_796cd863bad9cab2f1ba2116034d61407ef80ed90fb5fd39d0f2bd4d6e65c811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformtwo/index.html.twig", 1);
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
        $__internal_2e432048ef359074c289b919768ec9abb0d471b4b89ddf99d14ef4639467b32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e432048ef359074c289b919768ec9abb0d471b4b89ddf99d14ef4639467b32b->enter($__internal_2e432048ef359074c289b919768ec9abb0d471b4b89ddf99d14ef4639467b32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/index.html.twig"));

        $__internal_bd59e06201880113394a7cddb9cd04a46d4bd3846735bc86e93ec224b77171fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd59e06201880113394a7cddb9cd04a46d4bd3846735bc86e93ec224b77171fc->enter($__internal_bd59e06201880113394a7cddb9cd04a46d4bd3846735bc86e93ec224b77171fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e432048ef359074c289b919768ec9abb0d471b4b89ddf99d14ef4639467b32b->leave($__internal_2e432048ef359074c289b919768ec9abb0d471b4b89ddf99d14ef4639467b32b_prof);

        
        $__internal_bd59e06201880113394a7cddb9cd04a46d4bd3846735bc86e93ec224b77171fc->leave($__internal_bd59e06201880113394a7cddb9cd04a46d4bd3846735bc86e93ec224b77171fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f58309b5d0acd6c7d11f0164b40c30fd36f692f5232281197bff888e7c5604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f58309b5d0acd6c7d11f0164b40c30fd36f692f5232281197bff888e7c5604->enter($__internal_17f58309b5d0acd6c7d11f0164b40c30fd36f692f5232281197bff888e7c5604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a9c29d5192cbcfce17259d0bd634b0c019a3ccd2b1727ca0d9fee3fd25713fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9c29d5192cbcfce17259d0bd634b0c019a3ccd2b1727ca0d9fee3fd25713fd->enter($__internal_3a9c29d5192cbcfce17259d0bd634b0c019a3ccd2b1727ca0d9fee3fd25713fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studentformtwos list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Educationalexperience</th>
                            <th>Goals</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentFormTwos"] ?? $this->getContext($context, "studentFormTwos")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentFormTwo"]) {
            // line 19
            echo "                        <tr>
                            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformtwo_show", array("id" => $this->getAttribute($context["studentFormTwo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormTwo"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormTwo"], "educationalExperience", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormTwo"], "goals", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformtwo_show", array("id" => $this->getAttribute($context["studentFormTwo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformtwo_edit", array("id" => $this->getAttribute($context["studentFormTwo"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentFormTwo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformtwo_new");
        echo "\">Create a new studentFormTwo</a>
        </li>
    </ul>
";
        
        $__internal_3a9c29d5192cbcfce17259d0bd634b0c019a3ccd2b1727ca0d9fee3fd25713fd->leave($__internal_3a9c29d5192cbcfce17259d0bd634b0c019a3ccd2b1727ca0d9fee3fd25713fd_prof);

        
        $__internal_17f58309b5d0acd6c7d11f0164b40c30fd36f692f5232281197bff888e7c5604->leave($__internal_17f58309b5d0acd6c7d11f0164b40c30fd36f692f5232281197bff888e7c5604_prof);

    }

    public function getTemplateName()
    {
        return "studentformtwo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  107 => 35,  95 => 29,  89 => 26,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studentformtwos list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Educationalexperience</th>
                            <th>Goals</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for studentFormTwo in studentFormTwos %}
                        <tr>
                            <td><a href=\"{{ path('studentformtwo_show', { 'id': studentFormTwo.id }) }}\">{{ studentFormTwo.id }}</a></td>
                            <td>{{ studentFormTwo.educationalExperience }}</td>
                            <td>{{ studentFormTwo.goals }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('studentformtwo_show', { 'id': studentFormTwo.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('studentformtwo_edit', { 'id': studentFormTwo.id }) }}\">edit</a>
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
            <a href=\"{{ path('studentformtwo_new') }}\">Create a new studentFormTwo</a>
        </li>
    </ul>
{% endblock %}
", "studentformtwo/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformtwo/index.html.twig");
    }
}
