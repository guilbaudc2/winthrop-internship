<?php

/* user/show.html.twig */
class __TwigTemplate_8165d7511e50048ea6e98f60933c26017e08c99fdee101c249103e28d9da6d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72cfcda4e6d6a9c74a3f19b26c2075ff2b09de7cbc9fa03130c35a0f58af3032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72cfcda4e6d6a9c74a3f19b26c2075ff2b09de7cbc9fa03130c35a0f58af3032->enter($__internal_72cfcda4e6d6a9c74a3f19b26c2075ff2b09de7cbc9fa03130c35a0f58af3032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_9d25654850b72849eb3a41593e0baf3e67b8cdd31cb7b092fcae2ba4c2ad02f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d25654850b72849eb3a41593e0baf3e67b8cdd31cb7b092fcae2ba4c2ad02f9->enter($__internal_9d25654850b72849eb3a41593e0baf3e67b8cdd31cb7b092fcae2ba4c2ad02f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72cfcda4e6d6a9c74a3f19b26c2075ff2b09de7cbc9fa03130c35a0f58af3032->leave($__internal_72cfcda4e6d6a9c74a3f19b26c2075ff2b09de7cbc9fa03130c35a0f58af3032_prof);

        
        $__internal_9d25654850b72849eb3a41593e0baf3e67b8cdd31cb7b092fcae2ba4c2ad02f9->leave($__internal_9d25654850b72849eb3a41593e0baf3e67b8cdd31cb7b092fcae2ba4c2ad02f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b37b931893136772fd37820d6ca7358cb1424d978a8810cca64fc843dfa4cff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37b931893136772fd37820d6ca7358cb1424d978a8810cca64fc843dfa4cff1->enter($__internal_b37b931893136772fd37820d6ca7358cb1424d978a8810cca64fc843dfa4cff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3014020c7f526e4a69dc4e81c8ac8b8b43a3cc29a633da77770bc5a4712dd56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3014020c7f526e4a69dc4e81c8ac8b8b43a3cc29a633da77770bc5a4712dd56b->enter($__internal_3014020c7f526e4a69dc4e81c8ac8b8b43a3cc29a633da77770bc5a4712dd56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3014020c7f526e4a69dc4e81c8ac8b8b43a3cc29a633da77770bc5a4712dd56b->leave($__internal_3014020c7f526e4a69dc4e81c8ac8b8b43a3cc29a633da77770bc5a4712dd56b_prof);

        
        $__internal_b37b931893136772fd37820d6ca7358cb1424d978a8810cca64fc843dfa4cff1->leave($__internal_b37b931893136772fd37820d6ca7358cb1424d978a8810cca64fc843dfa4cff1_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/user/show.html.twig");
    }
}
