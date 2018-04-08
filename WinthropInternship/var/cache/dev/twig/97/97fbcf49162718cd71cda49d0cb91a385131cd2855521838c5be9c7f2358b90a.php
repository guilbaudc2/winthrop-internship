<?php

/* user/index.html.twig */
class __TwigTemplate_5be287fac5da3aeb89d015144f0f6394a786999a9b303faab483d4b4b8ce1d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "user/index.html.twig", 1);
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
        $__internal_47d1477d1855a73ee6e6437c93eff03e08bd91e729b3e187e2ca2a7e8aee1202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d1477d1855a73ee6e6437c93eff03e08bd91e729b3e187e2ca2a7e8aee1202->enter($__internal_47d1477d1855a73ee6e6437c93eff03e08bd91e729b3e187e2ca2a7e8aee1202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_9114643ac4d9632a85af1441a7094973f8957a935f05e5797ead7aa3f5af9377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9114643ac4d9632a85af1441a7094973f8957a935f05e5797ead7aa3f5af9377->enter($__internal_9114643ac4d9632a85af1441a7094973f8957a935f05e5797ead7aa3f5af9377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d1477d1855a73ee6e6437c93eff03e08bd91e729b3e187e2ca2a7e8aee1202->leave($__internal_47d1477d1855a73ee6e6437c93eff03e08bd91e729b3e187e2ca2a7e8aee1202_prof);

        
        $__internal_9114643ac4d9632a85af1441a7094973f8957a935f05e5797ead7aa3f5af9377->leave($__internal_9114643ac4d9632a85af1441a7094973f8957a935f05e5797ead7aa3f5af9377_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fd9f723b10621ece882ec3d5938f3d58a4e19aa8f407ccf63d2a76715f8454f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd9f723b10621ece882ec3d5938f3d58a4e19aa8f407ccf63d2a76715f8454f->enter($__internal_7fd9f723b10621ece882ec3d5938f3d58a4e19aa8f407ccf63d2a76715f8454f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5c44a84df76183c30bb34a1bb1774f370ada8edf5dd0ab2b558f1bf69d2bcc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c44a84df76183c30bb34a1bb1774f370ada8edf5dd0ab2b558f1bf69d2bcc1->enter($__internal_a5c44a84df76183c30bb34a1bb1774f370ada8edf5dd0ab2b558f1bf69d2bcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header center\">Users list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "                        <tr>
                            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                            <td>
                                <ul>
                                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                                </ul>
                                ";
            // line 29
            echo "                            ";
            // line 30
            echo "                            ";
            // line 31
            echo "                            ";
            // line 32
            echo "                            ";
            // line 33
            echo "                            ";
            // line 34
            echo "                            ";
            // line 35
            echo "                            ";
            // line 36
            echo "                            ";
            // line 37
            echo "                            ";
            // line 38
            echo "                            ";
            // line 39
            echo "                            ";
            // line 40
            echo "                            ";
            // line 41
            echo "                            ";
            // line 42
            echo "                            ";
            // line 43
            echo "                            ";
            // line 44
            echo "                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_a5c44a84df76183c30bb34a1bb1774f370ada8edf5dd0ab2b558f1bf69d2bcc1->leave($__internal_a5c44a84df76183c30bb34a1bb1774f370ada8edf5dd0ab2b558f1bf69d2bcc1_prof);

        
        $__internal_7fd9f723b10621ece882ec3d5938f3d58a4e19aa8f407ccf63d2a76715f8454f->leave($__internal_7fd9f723b10621ece882ec3d5938f3d58a4e19aa8f407ccf63d2a76715f8454f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  137 => 47,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  106 => 31,  104 => 30,  102 => 29,  99 => 27,  90 => 25,  86 => 24,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 class=\"header center\">Users list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr>
                            <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                            <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.username }}</a></td>
                            <td>
                                <ul>
                                    {% for item in user.roles %}
                                        <li>{{ item }}</li>
                                    {% endfor %}
                                </ul>
                                {#<a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.roles }}</a></td>#}
                            {#<td>#}
                            {#    {% if is_granted('ROLE_STUDENT') %}#}
                            {#        Student#}
                            {#    {% elseif is_granted('ROLE_HR_ADMIN') %}#}
                            {#        HR Admin#}
                            {#    {% elseif is_granted('ROLE_IO_ADMIN') %}#}
                            {#        International Office Admin#}
                            {#    {% elseif is_granted('ROLE_FL_ADMIN') %}#}
                            {#        Faculty Liaison#}
                            {#    {% elseif is_granted('ROLE_SUPER_ADMIN') %}#}
                            {#        Super Admin#}
                            {#    {% else %}#}
                            {#        Anonymous#}
                            {#    {% endif %}#}
                            {#</td>#}
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
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
{% endblock %}
", "user/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/user/index.html.twig");
    }
}
