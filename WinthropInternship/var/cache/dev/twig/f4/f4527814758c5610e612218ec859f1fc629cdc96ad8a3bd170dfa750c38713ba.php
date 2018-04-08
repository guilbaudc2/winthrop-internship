<?php

/* default/index.html.twig */
class __TwigTemplate_1863b1875ffdc5a39cf8936e17d0e88437ddf135d7bd88f1469018adc08634ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_fb95b5dc4ee89f18562e1b3346c2bf9b3423a533a2c2b3e3ebf732def0345a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb95b5dc4ee89f18562e1b3346c2bf9b3423a533a2c2b3e3ebf732def0345a30->enter($__internal_fb95b5dc4ee89f18562e1b3346c2bf9b3423a533a2c2b3e3ebf732def0345a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_03d67306c0cdadbfbd97c891837f37b10123c33322ed06120176f1e44123ea5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d67306c0cdadbfbd97c891837f37b10123c33322ed06120176f1e44123ea5a->enter($__internal_03d67306c0cdadbfbd97c891837f37b10123c33322ed06120176f1e44123ea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb95b5dc4ee89f18562e1b3346c2bf9b3423a533a2c2b3e3ebf732def0345a30->leave($__internal_fb95b5dc4ee89f18562e1b3346c2bf9b3423a533a2c2b3e3ebf732def0345a30_prof);

        
        $__internal_03d67306c0cdadbfbd97c891837f37b10123c33322ed06120176f1e44123ea5a->leave($__internal_03d67306c0cdadbfbd97c891837f37b10123c33322ed06120176f1e44123ea5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4a57953065c0a788ec09c3e432761fd96a06c79cd0e09d295d9323cec9e8e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a57953065c0a788ec09c3e432761fd96a06c79cd0e09d295d9323cec9e8e21->enter($__internal_f4a57953065c0a788ec09c3e432761fd96a06c79cd0e09d295d9323cec9e8e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca96d65a3b162771a6a607ac6516b4249e810c75406323d59b8ce33c79c090a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca96d65a3b162771a6a607ac6516b4249e810c75406323d59b8ce33c79c090a4->enter($__internal_ca96d65a3b162771a6a607ac6516b4249e810c75406323d59b8ce33c79c090a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_ca96d65a3b162771a6a607ac6516b4249e810c75406323d59b8ce33c79c090a4->leave($__internal_ca96d65a3b162771a6a607ac6516b4249e810c75406323d59b8ce33c79c090a4_prof);

        
        $__internal_f4a57953065c0a788ec09c3e432761fd96a06c79cd0e09d295d9323cec9e8e21->leave($__internal_f4a57953065c0a788ec09c3e432761fd96a06c79cd0e09d295d9323cec9e8e21_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dc2a6f29f63b2cc0f2e7bda42367412e2c00ca29db31512aa2e81e17f3febc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc2a6f29f63b2cc0f2e7bda42367412e2c00ca29db31512aa2e81e17f3febc4->enter($__internal_0dc2a6f29f63b2cc0f2e7bda42367412e2c00ca29db31512aa2e81e17f3febc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb0fcedb5bc0976b81796089ac015e05333638f3bce787b2ebfb829b11741dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0fcedb5bc0976b81796089ac015e05333638f3bce787b2ebfb829b11741dbc->enter($__internal_fb0fcedb5bc0976b81796089ac015e05333638f3bce787b2ebfb829b11741dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div class=\"index-background-image\">
\t\t<div class=\"transparent\">
    \t\t<div class=\"center-text\">
           \t\t<h1>Winthrop Internship Learning Experience Portal</h1>
           \t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><h2>Login</h2></a>
           \t</div>
        </div>
\t</div>
";
        
        $__internal_fb0fcedb5bc0976b81796089ac015e05333638f3bce787b2ebfb829b11741dbc->leave($__internal_fb0fcedb5bc0976b81796089ac015e05333638f3bce787b2ebfb829b11741dbc_prof);

        
        $__internal_0dc2a6f29f63b2cc0f2e7bda42367412e2c00ca29db31512aa2e81e17f3febc4->leave($__internal_0dc2a6f29f63b2cc0f2e7bda42367412e2c00ca29db31512aa2e81e17f3febc4_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_552be1ddb9581184faf09a40766b0a56e5db29825dd698e5fa10363c0403a41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552be1ddb9581184faf09a40766b0a56e5db29825dd698e5fa10363c0403a41b->enter($__internal_552be1ddb9581184faf09a40766b0a56e5db29825dd698e5fa10363c0403a41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1a5f849d40f4328149560e34e621634461f888c04eb451abf7433f1e16a7dfb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5f849d40f4328149560e34e621634461f888c04eb451abf7433f1e16a7dfb1->enter($__internal_1a5f849d40f4328149560e34e621634461f888c04eb451abf7433f1e16a7dfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">
";
        
        $__internal_1a5f849d40f4328149560e34e621634461f888c04eb451abf7433f1e16a7dfb1->leave($__internal_1a5f849d40f4328149560e34e621634461f888c04eb451abf7433f1e16a7dfb1_prof);

        
        $__internal_552be1ddb9581184faf09a40766b0a56e5db29825dd698e5fa10363c0403a41b->leave($__internal_552be1ddb9581184faf09a40766b0a56e5db29825dd698e5fa10363c0403a41b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  90 => 16,  75 => 10,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Home{% endblock %}

{% block body %}
\t<div class=\"index-background-image\">
\t\t<div class=\"transparent\">
    \t\t<div class=\"center-text\">
           \t\t<h1>Winthrop Internship Learning Experience Portal</h1>
           \t\t<a href=\"{{path('fos_user_security_login')}}\"><h2>Login</h2></a>
           \t</div>
        </div>
\t</div>
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">
{% endblock %}", "default/index.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/default/index.html.twig");
    }
}
