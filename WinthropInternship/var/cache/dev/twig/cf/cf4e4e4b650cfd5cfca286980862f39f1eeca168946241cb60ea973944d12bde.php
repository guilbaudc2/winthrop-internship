<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_f9e91d66ca095c6559422c91b96093056f6d51af25416850ec125b3925167111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efdf56edd994e1a8b47e2a9b499543f92e5a31d185f550e010e014e192d19654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdf56edd994e1a8b47e2a9b499543f92e5a31d185f550e010e014e192d19654->enter($__internal_efdf56edd994e1a8b47e2a9b499543f92e5a31d185f550e010e014e192d19654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_8890f1f58c884dbce3bfd88fa8db9f0c034cfcc4c4851856152ec6ede10f9a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8890f1f58c884dbce3bfd88fa8db9f0c034cfcc4c4851856152ec6ede10f9a2c->enter($__internal_8890f1f58c884dbce3bfd88fa8db9f0c034cfcc4c4851856152ec6ede10f9a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_efdf56edd994e1a8b47e2a9b499543f92e5a31d185f550e010e014e192d19654->leave($__internal_efdf56edd994e1a8b47e2a9b499543f92e5a31d185f550e010e014e192d19654_prof);

        
        $__internal_8890f1f58c884dbce3bfd88fa8db9f0c034cfcc4c4851856152ec6ede10f9a2c->leave($__internal_8890f1f58c884dbce3bfd88fa8db9f0c034cfcc4c4851856152ec6ede10f9a2c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0fc02749e3ee3e12cf4ebe5c79859235a9abf585eb9e50cc7768f734d6e329f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc02749e3ee3e12cf4ebe5c79859235a9abf585eb9e50cc7768f734d6e329f8->enter($__internal_0fc02749e3ee3e12cf4ebe5c79859235a9abf585eb9e50cc7768f734d6e329f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_70ca080a56850a32475d39cfa1a7691fd71b9b5147c39ff0e3bfe9a5f68f58fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ca080a56850a32475d39cfa1a7691fd71b9b5147c39ff0e3bfe9a5f68f58fe->enter($__internal_70ca080a56850a32475d39cfa1a7691fd71b9b5147c39ff0e3bfe9a5f68f58fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_70ca080a56850a32475d39cfa1a7691fd71b9b5147c39ff0e3bfe9a5f68f58fe->leave($__internal_70ca080a56850a32475d39cfa1a7691fd71b9b5147c39ff0e3bfe9a5f68f58fe_prof);

        
        $__internal_0fc02749e3ee3e12cf4ebe5c79859235a9abf585eb9e50cc7768f734d6e329f8->leave($__internal_0fc02749e3ee3e12cf4ebe5c79859235a9abf585eb9e50cc7768f734d6e329f8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_30f1a962cde04625598f9d3e5deaeee7afab3609482e4a307b92ed6e0f098168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f1a962cde04625598f9d3e5deaeee7afab3609482e4a307b92ed6e0f098168->enter($__internal_30f1a962cde04625598f9d3e5deaeee7afab3609482e4a307b92ed6e0f098168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_fc021669c1bbb5801321117663d4f973dbe85cc2763773592a8992ef98a9119e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc021669c1bbb5801321117663d4f973dbe85cc2763773592a8992ef98a9119e->enter($__internal_fc021669c1bbb5801321117663d4f973dbe85cc2763773592a8992ef98a9119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fc021669c1bbb5801321117663d4f973dbe85cc2763773592a8992ef98a9119e->leave($__internal_fc021669c1bbb5801321117663d4f973dbe85cc2763773592a8992ef98a9119e_prof);

        
        $__internal_30f1a962cde04625598f9d3e5deaeee7afab3609482e4a307b92ed6e0f098168->leave($__internal_30f1a962cde04625598f9d3e5deaeee7afab3609482e4a307b92ed6e0f098168_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4fdd9b950c2ce14ac7e5beef69815ceb9911d1915ef502bdc73bb149cc775287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdd9b950c2ce14ac7e5beef69815ceb9911d1915ef502bdc73bb149cc775287->enter($__internal_4fdd9b950c2ce14ac7e5beef69815ceb9911d1915ef502bdc73bb149cc775287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a7b15425002f95448e9dafffb79b1378b5b62649bcaeda1e5c05d37b85ec008d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b15425002f95448e9dafffb79b1378b5b62649bcaeda1e5c05d37b85ec008d->enter($__internal_a7b15425002f95448e9dafffb79b1378b5b62649bcaeda1e5c05d37b85ec008d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a7b15425002f95448e9dafffb79b1378b5b62649bcaeda1e5c05d37b85ec008d->leave($__internal_a7b15425002f95448e9dafffb79b1378b5b62649bcaeda1e5c05d37b85ec008d_prof);

        
        $__internal_4fdd9b950c2ce14ac7e5beef69815ceb9911d1915ef502bdc73bb149cc775287->leave($__internal_4fdd9b950c2ce14ac7e5beef69815ceb9911d1915ef502bdc73bb149cc775287_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  72 => 9,  63 => 7,  51 => 4,  42 => 2,  32 => 12,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
