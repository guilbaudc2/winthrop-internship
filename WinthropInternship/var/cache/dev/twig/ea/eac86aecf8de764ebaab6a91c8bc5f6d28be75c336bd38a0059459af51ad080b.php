<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_7ae854b56c6f75abcbcd82745561cefd7af161a420a8cfa0de33ba62b78890d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bc99856bd78125f20a17395b618224d7e7bfec6d55b32214f06c3eb9e7cfa5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc99856bd78125f20a17395b618224d7e7bfec6d55b32214f06c3eb9e7cfa5f->enter($__internal_5bc99856bd78125f20a17395b618224d7e7bfec6d55b32214f06c3eb9e7cfa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_bba9a892b265df8976f0938938e7d9cce966e898c5949294bf551211fe789bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba9a892b265df8976f0938938e7d9cce966e898c5949294bf551211fe789bac->enter($__internal_bba9a892b265df8976f0938938e7d9cce966e898c5949294bf551211fe789bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc99856bd78125f20a17395b618224d7e7bfec6d55b32214f06c3eb9e7cfa5f->leave($__internal_5bc99856bd78125f20a17395b618224d7e7bfec6d55b32214f06c3eb9e7cfa5f_prof);

        
        $__internal_bba9a892b265df8976f0938938e7d9cce966e898c5949294bf551211fe789bac->leave($__internal_bba9a892b265df8976f0938938e7d9cce966e898c5949294bf551211fe789bac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d768f6fd0a6f9afb902a266c1aef45e18e8e5521484c75d3e82de45d7531799f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d768f6fd0a6f9afb902a266c1aef45e18e8e5521484c75d3e82de45d7531799f->enter($__internal_d768f6fd0a6f9afb902a266c1aef45e18e8e5521484c75d3e82de45d7531799f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f456f7b8c5dd7619cbadbff37422562652c17e400213605a54acaee69a5cae00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f456f7b8c5dd7619cbadbff37422562652c17e400213605a54acaee69a5cae00->enter($__internal_f456f7b8c5dd7619cbadbff37422562652c17e400213605a54acaee69a5cae00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f456f7b8c5dd7619cbadbff37422562652c17e400213605a54acaee69a5cae00->leave($__internal_f456f7b8c5dd7619cbadbff37422562652c17e400213605a54acaee69a5cae00_prof);

        
        $__internal_d768f6fd0a6f9afb902a266c1aef45e18e8e5521484c75d3e82de45d7531799f->leave($__internal_d768f6fd0a6f9afb902a266c1aef45e18e8e5521484c75d3e82de45d7531799f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
