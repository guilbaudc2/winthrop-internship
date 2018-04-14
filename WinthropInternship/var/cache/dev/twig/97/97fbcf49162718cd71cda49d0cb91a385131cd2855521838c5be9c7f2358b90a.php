<?php

/* user/index.html.twig */
class __TwigTemplate_5be287fac5da3aeb89d015144f0f6394a786999a9b303faab483d4b4b8ce1d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_532550207bfc3b5175eea4311f8651425969806b9403c3f1fb9614d275b1a70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532550207bfc3b5175eea4311f8651425969806b9403c3f1fb9614d275b1a70b->enter($__internal_532550207bfc3b5175eea4311f8651425969806b9403c3f1fb9614d275b1a70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6a8d5e78fc3ed60342052bb01cb8e47d06360f0f1896b81e47e5dfc6d9aaded1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8d5e78fc3ed60342052bb01cb8e47d06360f0f1896b81e47e5dfc6d9aaded1->enter($__internal_6a8d5e78fc3ed60342052bb01cb8e47d06360f0f1896b81e47e5dfc6d9aaded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532550207bfc3b5175eea4311f8651425969806b9403c3f1fb9614d275b1a70b->leave($__internal_532550207bfc3b5175eea4311f8651425969806b9403c3f1fb9614d275b1a70b_prof);

        
        $__internal_6a8d5e78fc3ed60342052bb01cb8e47d06360f0f1896b81e47e5dfc6d9aaded1->leave($__internal_6a8d5e78fc3ed60342052bb01cb8e47d06360f0f1896b81e47e5dfc6d9aaded1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce035a45d2d32555f6889072a31cb27501df870a36f0e6b3efe8faeb36f9702e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce035a45d2d32555f6889072a31cb27501df870a36f0e6b3efe8faeb36f9702e->enter($__internal_ce035a45d2d32555f6889072a31cb27501df870a36f0e6b3efe8faeb36f9702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_903968c11c3c5cc8e5e3309b3261d7cf8c2aa0857c7882ef39ca0bf149787d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903968c11c3c5cc8e5e3309b3261d7cf8c2aa0857c7882ef39ca0bf149787d53->enter($__internal_903968c11c3c5cc8e5e3309b3261d7cf8c2aa0857c7882ef39ca0bf149787d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
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
        // line 26
        echo "        </tbody>
    </table>

    
";
        
        $__internal_903968c11c3c5cc8e5e3309b3261d7cf8c2aa0857c7882ef39ca0bf149787d53->leave($__internal_903968c11c3c5cc8e5e3309b3261d7cf8c2aa0857c7882ef39ca0bf149787d53_prof);

        
        $__internal_ce035a45d2d32555f6889072a31cb27501df870a36f0e6b3efe8faeb36f9702e->leave($__internal_ce035a45d2d32555f6889072a31cb27501df870a36f0e6b3efe8faeb36f9702e_prof);

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
        return array (  89 => 26,  77 => 20,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
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

    
{% endblock %}
", "user/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/user/index.html.twig");
    }
}
