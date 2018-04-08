<?php

/* sitesupervisorform/index.html.twig */
class __TwigTemplate_03f58ddaaa7737a118689275ddd85f36a43a86fed14a0c42c4e25abd23868097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sitesupervisorform/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc1e80d51eba41e1ef6732ea1fcc19699877209a2c1baa2bcc63fdfd9005bba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1e80d51eba41e1ef6732ea1fcc19699877209a2c1baa2bcc63fdfd9005bba4->enter($__internal_fc1e80d51eba41e1ef6732ea1fcc19699877209a2c1baa2bcc63fdfd9005bba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sitesupervisorform/index.html.twig"));

        $__internal_decdcf339189c62e7e5eb9185eb78222662c543f030de67247642ac4ee870b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decdcf339189c62e7e5eb9185eb78222662c543f030de67247642ac4ee870b9d->enter($__internal_decdcf339189c62e7e5eb9185eb78222662c543f030de67247642ac4ee870b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sitesupervisorform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc1e80d51eba41e1ef6732ea1fcc19699877209a2c1baa2bcc63fdfd9005bba4->leave($__internal_fc1e80d51eba41e1ef6732ea1fcc19699877209a2c1baa2bcc63fdfd9005bba4_prof);

        
        $__internal_decdcf339189c62e7e5eb9185eb78222662c543f030de67247642ac4ee870b9d->leave($__internal_decdcf339189c62e7e5eb9185eb78222662c543f030de67247642ac4ee870b9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_acd0179a75e37f688fd3c04ca5fa3d5d33f207b04fce9541a78d28ec15865ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd0179a75e37f688fd3c04ca5fa3d5d33f207b04fce9541a78d28ec15865ce7->enter($__internal_acd0179a75e37f688fd3c04ca5fa3d5d33f207b04fce9541a78d28ec15865ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6578c5c9dc36374fdc57893b3d00fd883674090ad66b06c8db83e6c5f2190997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6578c5c9dc36374fdc57893b3d00fd883674090ad66b06c8db83e6c5f2190997->enter($__internal_6578c5c9dc36374fdc57893b3d00fd883674090ad66b06c8db83e6c5f2190997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Site Supervisor Form";
        
        $__internal_6578c5c9dc36374fdc57893b3d00fd883674090ad66b06c8db83e6c5f2190997->leave($__internal_6578c5c9dc36374fdc57893b3d00fd883674090ad66b06c8db83e6c5f2190997_prof);

        
        $__internal_acd0179a75e37f688fd3c04ca5fa3d5d33f207b04fce9541a78d28ec15865ce7->leave($__internal_acd0179a75e37f688fd3c04ca5fa3d5d33f207b04fce9541a78d28ec15865ce7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_04d01a6c68ce02c439692918bef9f9f6ff69519de183da042cf86531920c4f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d01a6c68ce02c439692918bef9f9f6ff69519de183da042cf86531920c4f46->enter($__internal_04d01a6c68ce02c439692918bef9f9f6ff69519de183da042cf86531920c4f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97b5de3e1ca1d71616378f8753db9618acca9f070756018ec0a2e13327895018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b5de3e1ca1d71616378f8753db9618acca9f070756018ec0a2e13327895018->enter($__internal_97b5de3e1ca1d71616378f8753db9618acca9f070756018ec0a2e13327895018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"index-background-image\">
\t\t<div class=\"transparent\">

\t\t\t<div class=\"center-text\">
    \t\t\t<div class=\"login-page\">
    \t\t\t    <h1>Winthrop Internship Learning Experience</h1>
    \t\t\t    
    \t\t\t    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitesupervisorform_new");
        echo "\" method=\"GET\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email Address\">
\t\t\t\t\t\t<input type=\"password\" name=\"accessCodeSS\" placeholder=\"Access Code\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t\t\t</form>
   
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_97b5de3e1ca1d71616378f8753db9618acca9f070756018ec0a2e13327895018->leave($__internal_97b5de3e1ca1d71616378f8753db9618acca9f070756018ec0a2e13327895018_prof);

        
        $__internal_04d01a6c68ce02c439692918bef9f9f6ff69519de183da042cf86531920c4f46->leave($__internal_04d01a6c68ce02c439692918bef9f9f6ff69519de183da042cf86531920c4f46_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fea4650b8bea2193fb5f6f71bcb800fbcff204c1090f10027d6d72b86fe16e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fea4650b8bea2193fb5f6f71bcb800fbcff204c1090f10027d6d72b86fe16e6->enter($__internal_6fea4650b8bea2193fb5f6f71bcb800fbcff204c1090f10027d6d72b86fe16e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fa2ac55419e25ffa6d88d87eebe6ec2ae34455f2712df7bab24edfd48c96484d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2ac55419e25ffa6d88d87eebe6ec2ae34455f2712df7bab24edfd48c96484d->enter($__internal_fa2ac55419e25ffa6d88d87eebe6ec2ae34455f2712df7bab24edfd48c96484d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/styles.css\">
";
        
        $__internal_fa2ac55419e25ffa6d88d87eebe6ec2ae34455f2712df7bab24edfd48c96484d->leave($__internal_fa2ac55419e25ffa6d88d87eebe6ec2ae34455f2712df7bab24edfd48c96484d_prof);

        
        $__internal_6fea4650b8bea2193fb5f6f71bcb800fbcff204c1090f10027d6d72b86fe16e6->leave($__internal_6fea4650b8bea2193fb5f6f71bcb800fbcff204c1090f10027d6d72b86fe16e6_prof);

    }

    public function getTemplateName()
    {
        return "sitesupervisorform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  99 => 25,  78 => 13,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Site Supervisor Form{% endblock %}

{% block body %}
    <div class=\"index-background-image\">
\t\t<div class=\"transparent\">

\t\t\t<div class=\"center-text\">
    \t\t\t<div class=\"login-page\">
    \t\t\t    <h1>Winthrop Internship Learning Experience</h1>
    \t\t\t    
    \t\t\t    <form action=\"{{ path('sitesupervisorform_new') }}\" method=\"GET\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email Address\">
\t\t\t\t\t\t<input type=\"password\" name=\"accessCodeSS\" placeholder=\"Access Code\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Submit\">
\t\t\t\t\t</form>
   
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/styles.css\">
{% endblock %}", "sitesupervisorform/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/sitesupervisorform/index.html.twig");
    }
}
