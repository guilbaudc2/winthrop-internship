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
        $__internal_f551b1f7ecc04883267f8e1fb7e47d5b162973c6b17c89f3bfdbe3bf3d613112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f551b1f7ecc04883267f8e1fb7e47d5b162973c6b17c89f3bfdbe3bf3d613112->enter($__internal_f551b1f7ecc04883267f8e1fb7e47d5b162973c6b17c89f3bfdbe3bf3d613112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_10db05007dc9514a33ca0a54490f74d932151acfc4332f5d8855bcabe4b58abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10db05007dc9514a33ca0a54490f74d932151acfc4332f5d8855bcabe4b58abe->enter($__internal_10db05007dc9514a33ca0a54490f74d932151acfc4332f5d8855bcabe4b58abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f551b1f7ecc04883267f8e1fb7e47d5b162973c6b17c89f3bfdbe3bf3d613112->leave($__internal_f551b1f7ecc04883267f8e1fb7e47d5b162973c6b17c89f3bfdbe3bf3d613112_prof);

        
        $__internal_10db05007dc9514a33ca0a54490f74d932151acfc4332f5d8855bcabe4b58abe->leave($__internal_10db05007dc9514a33ca0a54490f74d932151acfc4332f5d8855bcabe4b58abe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7eab8237bbbf1fab7c471586a31cfa47bf9e9e702636dbb739bc5a1e29d8dee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eab8237bbbf1fab7c471586a31cfa47bf9e9e702636dbb739bc5a1e29d8dee5->enter($__internal_7eab8237bbbf1fab7c471586a31cfa47bf9e9e702636dbb739bc5a1e29d8dee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21fe965985d357e4684039724122993e312c1544839b3f53aa0a60408fcd17ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fe965985d357e4684039724122993e312c1544839b3f53aa0a60408fcd17ff->enter($__internal_21fe965985d357e4684039724122993e312c1544839b3f53aa0a60408fcd17ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_21fe965985d357e4684039724122993e312c1544839b3f53aa0a60408fcd17ff->leave($__internal_21fe965985d357e4684039724122993e312c1544839b3f53aa0a60408fcd17ff_prof);

        
        $__internal_7eab8237bbbf1fab7c471586a31cfa47bf9e9e702636dbb739bc5a1e29d8dee5->leave($__internal_7eab8237bbbf1fab7c471586a31cfa47bf9e9e702636dbb739bc5a1e29d8dee5_prof);

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
