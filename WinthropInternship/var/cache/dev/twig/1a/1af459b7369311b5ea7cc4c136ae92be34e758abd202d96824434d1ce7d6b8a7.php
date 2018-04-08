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
        $__internal_54832af0c024bc69069c2e559eecd51de337198fcbba3172497f93d12f5ab56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54832af0c024bc69069c2e559eecd51de337198fcbba3172497f93d12f5ab56b->enter($__internal_54832af0c024bc69069c2e559eecd51de337198fcbba3172497f93d12f5ab56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_468917408ebbfcfe65355cfdbc655360d64ac7c3a3c063023da19e969155b317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468917408ebbfcfe65355cfdbc655360d64ac7c3a3c063023da19e969155b317->enter($__internal_468917408ebbfcfe65355cfdbc655360d64ac7c3a3c063023da19e969155b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54832af0c024bc69069c2e559eecd51de337198fcbba3172497f93d12f5ab56b->leave($__internal_54832af0c024bc69069c2e559eecd51de337198fcbba3172497f93d12f5ab56b_prof);

        
        $__internal_468917408ebbfcfe65355cfdbc655360d64ac7c3a3c063023da19e969155b317->leave($__internal_468917408ebbfcfe65355cfdbc655360d64ac7c3a3c063023da19e969155b317_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3afee09d98553bfb78465ca66e1a87c09821b77db7211f8097d56040b0797f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afee09d98553bfb78465ca66e1a87c09821b77db7211f8097d56040b0797f73->enter($__internal_3afee09d98553bfb78465ca66e1a87c09821b77db7211f8097d56040b0797f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a8660176e7cb5bf1050bd22eb1ea69b73e11d9d6fa8022e89eaa5af9fa4b7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8660176e7cb5bf1050bd22eb1ea69b73e11d9d6fa8022e89eaa5af9fa4b7fd->enter($__internal_4a8660176e7cb5bf1050bd22eb1ea69b73e11d9d6fa8022e89eaa5af9fa4b7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a8660176e7cb5bf1050bd22eb1ea69b73e11d9d6fa8022e89eaa5af9fa4b7fd->leave($__internal_4a8660176e7cb5bf1050bd22eb1ea69b73e11d9d6fa8022e89eaa5af9fa4b7fd_prof);

        
        $__internal_3afee09d98553bfb78465ca66e1a87c09821b77db7211f8097d56040b0797f73->leave($__internal_3afee09d98553bfb78465ca66e1a87c09821b77db7211f8097d56040b0797f73_prof);

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
