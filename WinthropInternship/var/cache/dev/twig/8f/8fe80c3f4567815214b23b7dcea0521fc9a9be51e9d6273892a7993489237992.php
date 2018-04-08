<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_cd5e8193fb3064e7cea16eb3b11b4d9dfcf51bdc07d54b4d599e5c73f09b3134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9972e21dfed202f3db8de91fd93a105e3c1ec619d4a4d94af3b9849cdc59f16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9972e21dfed202f3db8de91fd93a105e3c1ec619d4a4d94af3b9849cdc59f16a->enter($__internal_9972e21dfed202f3db8de91fd93a105e3c1ec619d4a4d94af3b9849cdc59f16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_c0b204e7004c3cba172706708321a23f53c476e9bd90a1a5a7cc9aa348cbbbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b204e7004c3cba172706708321a23f53c476e9bd90a1a5a7cc9aa348cbbbe2->enter($__internal_c0b204e7004c3cba172706708321a23f53c476e9bd90a1a5a7cc9aa348cbbbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9972e21dfed202f3db8de91fd93a105e3c1ec619d4a4d94af3b9849cdc59f16a->leave($__internal_9972e21dfed202f3db8de91fd93a105e3c1ec619d4a4d94af3b9849cdc59f16a_prof);

        
        $__internal_c0b204e7004c3cba172706708321a23f53c476e9bd90a1a5a7cc9aa348cbbbe2->leave($__internal_c0b204e7004c3cba172706708321a23f53c476e9bd90a1a5a7cc9aa348cbbbe2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03846cd76f13775b2112ffe768bc30c4b191411ea72fada37bb17605b5f10cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03846cd76f13775b2112ffe768bc30c4b191411ea72fada37bb17605b5f10cc2->enter($__internal_03846cd76f13775b2112ffe768bc30c4b191411ea72fada37bb17605b5f10cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d81c354167bae1c52fb1e74897c1df6bc9a21434b01650f76ee031ea91bc182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d81c354167bae1c52fb1e74897c1df6bc9a21434b01650f76ee031ea91bc182->enter($__internal_7d81c354167bae1c52fb1e74897c1df6bc9a21434b01650f76ee031ea91bc182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_7d81c354167bae1c52fb1e74897c1df6bc9a21434b01650f76ee031ea91bc182->leave($__internal_7d81c354167bae1c52fb1e74897c1df6bc9a21434b01650f76ee031ea91bc182_prof);

        
        $__internal_03846cd76f13775b2112ffe768bc30c4b191411ea72fada37bb17605b5f10cc2->leave($__internal_03846cd76f13775b2112ffe768bc30c4b191411ea72fada37bb17605b5f10cc2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd6b2be99cb62f8d11052fada8ea7c248fc3b4568d56c20125c55e40c1863c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6b2be99cb62f8d11052fada8ea7c248fc3b4568d56c20125c55e40c1863c3e->enter($__internal_fd6b2be99cb62f8d11052fada8ea7c248fc3b4568d56c20125c55e40c1863c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b97733eb7a747424bb17cf1b1e16e77a428d0313c758abb270f157cb0943886b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97733eb7a747424bb17cf1b1e16e77a428d0313c758abb270f157cb0943886b->enter($__internal_b97733eb7a747424bb17cf1b1e16e77a428d0313c758abb270f157cb0943886b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b97733eb7a747424bb17cf1b1e16e77a428d0313c758abb270f157cb0943886b->leave($__internal_b97733eb7a747424bb17cf1b1e16e77a428d0313c758abb270f157cb0943886b_prof);

        
        $__internal_fd6b2be99cb62f8d11052fada8ea7c248fc3b4568d56c20125c55e40c1863c3e->leave($__internal_fd6b2be99cb62f8d11052fada8ea7c248fc3b4568d56c20125c55e40c1863c3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Login{% endblock %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
