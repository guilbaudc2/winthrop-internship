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
        $__internal_7f13e9412a0bf571d440d2b99c52eb16c32cdbdf6ddcc4204bf3520698cef21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f13e9412a0bf571d440d2b99c52eb16c32cdbdf6ddcc4204bf3520698cef21e->enter($__internal_7f13e9412a0bf571d440d2b99c52eb16c32cdbdf6ddcc4204bf3520698cef21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/index.html.twig"));

        $__internal_a23c1c4e965bce4a163fb07a5378f978ef702e6ee4ffe1fbdcbb93d94f49dab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23c1c4e965bce4a163fb07a5378f978ef702e6ee4ffe1fbdcbb93d94f49dab4->enter($__internal_a23c1c4e965bce4a163fb07a5378f978ef702e6ee4ffe1fbdcbb93d94f49dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformtwo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f13e9412a0bf571d440d2b99c52eb16c32cdbdf6ddcc4204bf3520698cef21e->leave($__internal_7f13e9412a0bf571d440d2b99c52eb16c32cdbdf6ddcc4204bf3520698cef21e_prof);

        
        $__internal_a23c1c4e965bce4a163fb07a5378f978ef702e6ee4ffe1fbdcbb93d94f49dab4->leave($__internal_a23c1c4e965bce4a163fb07a5378f978ef702e6ee4ffe1fbdcbb93d94f49dab4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_027d4b907946cbd2d9cf3e0d673d66daeb27417a777caf0005caed6987fa2edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027d4b907946cbd2d9cf3e0d673d66daeb27417a777caf0005caed6987fa2edf->enter($__internal_027d4b907946cbd2d9cf3e0d673d66daeb27417a777caf0005caed6987fa2edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f0531456d4973687c97d59996583d9869f7f0bad7430b1fdd9b3bfbdc59f996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0531456d4973687c97d59996583d9869f7f0bad7430b1fdd9b3bfbdc59f996->enter($__internal_7f0531456d4973687c97d59996583d9869f7f0bad7430b1fdd9b3bfbdc59f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studentformtwos list</h1>

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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentFormTwos"] ?? $this->getContext($context, "studentFormTwos")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentFormTwo"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformtwo_show", array("id" => $this->getAttribute($context["studentFormTwo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormTwo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormTwo"], "educationalExperience", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormTwo"], "goals", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformtwo_show", array("id" => $this->getAttribute($context["studentFormTwo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
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
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformtwo_new");
        echo "\">Create a new studentFormTwo</a>
        </li>
    </ul>
";
        
        $__internal_7f0531456d4973687c97d59996583d9869f7f0bad7430b1fdd9b3bfbdc59f996->leave($__internal_7f0531456d4973687c97d59996583d9869f7f0bad7430b1fdd9b3bfbdc59f996_prof);

        
        $__internal_027d4b907946cbd2d9cf3e0d673d66daeb27417a777caf0005caed6987fa2edf->leave($__internal_027d4b907946cbd2d9cf3e0d673d66daeb27417a777caf0005caed6987fa2edf_prof);

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
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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

    <ul>
        <li>
            <a href=\"{{ path('studentformtwo_new') }}\">Create a new studentFormTwo</a>
        </li>
    </ul>
{% endblock %}
", "studentformtwo/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/studentformtwo/index.html.twig");
    }
}
