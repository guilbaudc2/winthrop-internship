<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8187eb901f293c0033de3db03cb916586251f6cb36471a3c99da5b08e4a2cf74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83f63593a63b34b6dedb6f918182d2d24b42271d75a742797e92bbb448c9eb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f63593a63b34b6dedb6f918182d2d24b42271d75a742797e92bbb448c9eb2b->enter($__internal_83f63593a63b34b6dedb6f918182d2d24b42271d75a742797e92bbb448c9eb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_294ff235909632d9847353f0727293468ef34314dc2e1f80c54fa026768d9b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294ff235909632d9847353f0727293468ef34314dc2e1f80c54fa026768d9b8b->enter($__internal_294ff235909632d9847353f0727293468ef34314dc2e1f80c54fa026768d9b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83f63593a63b34b6dedb6f918182d2d24b42271d75a742797e92bbb448c9eb2b->leave($__internal_83f63593a63b34b6dedb6f918182d2d24b42271d75a742797e92bbb448c9eb2b_prof);

        
        $__internal_294ff235909632d9847353f0727293468ef34314dc2e1f80c54fa026768d9b8b->leave($__internal_294ff235909632d9847353f0727293468ef34314dc2e1f80c54fa026768d9b8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b39a6202683ea1f2895687b39e9bb14fd0fda57d036625c97a7f91cb9a39af05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39a6202683ea1f2895687b39e9bb14fd0fda57d036625c97a7f91cb9a39af05->enter($__internal_b39a6202683ea1f2895687b39e9bb14fd0fda57d036625c97a7f91cb9a39af05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1950d91dde255390892d8e86957580eb92014f8bd0a8f8c8ca38f40ea71b95c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1950d91dde255390892d8e86957580eb92014f8bd0a8f8c8ca38f40ea71b95c2->enter($__internal_1950d91dde255390892d8e86957580eb92014f8bd0a8f8c8ca38f40ea71b95c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1950d91dde255390892d8e86957580eb92014f8bd0a8f8c8ca38f40ea71b95c2->leave($__internal_1950d91dde255390892d8e86957580eb92014f8bd0a8f8c8ca38f40ea71b95c2_prof);

        
        $__internal_b39a6202683ea1f2895687b39e9bb14fd0fda57d036625c97a7f91cb9a39af05->leave($__internal_b39a6202683ea1f2895687b39e9bb14fd0fda57d036625c97a7f91cb9a39af05_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5308f1fb9b63c8d3b00c37112ea6d762d64fb1aa803fdf9ec6e26b3c15e0b2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5308f1fb9b63c8d3b00c37112ea6d762d64fb1aa803fdf9ec6e26b3c15e0b2a3->enter($__internal_5308f1fb9b63c8d3b00c37112ea6d762d64fb1aa803fdf9ec6e26b3c15e0b2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a56b867258a38e411792fbbc47fb1674de05b2368fb1676cd289154b1b39cd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56b867258a38e411792fbbc47fb1674de05b2368fb1676cd289154b1b39cd15->enter($__internal_a56b867258a38e411792fbbc47fb1674de05b2368fb1676cd289154b1b39cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/styles.css\">
";
        
        $__internal_a56b867258a38e411792fbbc47fb1674de05b2368fb1676cd289154b1b39cd15->leave($__internal_a56b867258a38e411792fbbc47fb1674de05b2368fb1676cd289154b1b39cd15_prof);

        
        $__internal_5308f1fb9b63c8d3b00c37112ea6d762d64fb1aa803fdf9ec6e26b3c15e0b2a3->leave($__internal_5308f1fb9b63c8d3b00c37112ea6d762d64fb1aa803fdf9ec6e26b3c15e0b2a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/styles.css\">
{% endblock %}", "@FOSUser/Registration/register.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
