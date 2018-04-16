<?php

/* innerbase.html.twig */
class __TwigTemplate_8e4df014f801489c4283f98645b51d6b9cd6cf814391aee8727849410d379093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13a297146ea4c5041c660fc951666900e926ab5e5ac0a606369d665b9df2bc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a297146ea4c5041c660fc951666900e926ab5e5ac0a606369d665b9df2bc21->enter($__internal_13a297146ea4c5041c660fc951666900e926ab5e5ac0a606369d665b9df2bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

        $__internal_db2772953bc8d84327ea14b0509eec21cf42f1de59d507b1b564b9c47f14762b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2772953bc8d84327ea14b0509eec21cf42f1de59d507b1b564b9c47f14762b->enter($__internal_db2772953bc8d84327ea14b0509eec21cf42f1de59d507b1b564b9c47f14762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Winthrop Internship Learning Engagement</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/reset.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/styles.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/innerBaseStyles.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../../assets/js/materialize.min.js\"></script>
    ";
        // line 17
        echo "    ";
        // line 18
        echo "    <!--Icon Attribution-->
    <!--Gear by asianson.design from the Noun Project-->
    <!--Home by asianson.design from the Noun Project-->
    <!--Reporting by AlfredoCreates.com/Icons from the Noun Project-->
    <!--export by Eagle Eye from the Noun Project-->
</head>
<body>
<nav role=\"navigation\">
    <div class=\"nav-wrapper container\">
        <a href=\"#\" data-target=\"slide-out\" class=\"sidenav-trigger show-on-large\"><i class=\"material-icons\">menu</i></a>
        <a id=\"logo-container\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"brand-logo\">WILE</a>
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
        </ul>
    </div>
</nav>

<ul id=\"slide-out\" class=\"sidenav\">
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/Home.png\" alt=\"Dashboard Icon\"><figcaption>Dashboard</figcaption></figure></a></li>
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/Reporting.png\" alt=\"Generate Reports Icon\"><figcaption>Generate Reports</figcaption></figure></a></li>
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/Gear.png\" alt=\"Update System Icon\"><figcaption>Update System</figcaption></figure></a></li>
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/export.png\" alt=\"Export Icon\"><figcaption>Export Files</figcaption></figure></a></li>
    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
</ul>
";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "<script>
    \$(document).ready(function(){
        \$('select').formSelect();
        \$('.datepicker').datepicker();
        \$('textarea').characterCounter();
        \$('.sidenav').sidenav();
  });
</script>
";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Team and Project Description</h5>
                <p class=\"grey-text text-lighten-4\">Our team consists of a group of college students working tirelessly on this project. 
                This project is built for Winthrop University's Career and Civic Engagement Center to make a working electronic version of their internship process.</p>


            </div>
            <div class=\"col l3 s12\">
                <h5 class=\"white-text\">Links</h5>
                <ul>
                    <li><a class=\"white-text\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Login Page</a></li>
                    <li><a class=\"white-text\" href=\"#!\">FAQ</a></li>
                    ";
        // line 73
        echo "                    <li><a class=\"white-text\" href=\"https://www.winthrop.edu/cce/Default.aspx\" target=\"_blank\">CCE Main Page</a></li>
                </ul>
            </div>
            ";
        // line 87
        echo "        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
        </div>
    </div>
</footer>
</body>
</html>";
        
        $__internal_13a297146ea4c5041c660fc951666900e926ab5e5ac0a606369d665b9df2bc21->leave($__internal_13a297146ea4c5041c660fc951666900e926ab5e5ac0a606369d665b9df2bc21_prof);

        
        $__internal_db2772953bc8d84327ea14b0509eec21cf42f1de59d507b1b564b9c47f14762b->leave($__internal_db2772953bc8d84327ea14b0509eec21cf42f1de59d507b1b564b9c47f14762b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d74c20e3f933c7c42505af9f7ab6385d91305bb3005eae063e522e1a940504a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d74c20e3f933c7c42505af9f7ab6385d91305bb3005eae063e522e1a940504a->enter($__internal_2d74c20e3f933c7c42505af9f7ab6385d91305bb3005eae063e522e1a940504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_307c45d4f393066ba4d1e27c360698c536e12a3ff7b54af6aedfb82c07aec71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307c45d4f393066ba4d1e27c360698c536e12a3ff7b54af6aedfb82c07aec71f->enter($__internal_307c45d4f393066ba4d1e27c360698c536e12a3ff7b54af6aedfb82c07aec71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_307c45d4f393066ba4d1e27c360698c536e12a3ff7b54af6aedfb82c07aec71f->leave($__internal_307c45d4f393066ba4d1e27c360698c536e12a3ff7b54af6aedfb82c07aec71f_prof);

        
        $__internal_2d74c20e3f933c7c42505af9f7ab6385d91305bb3005eae063e522e1a940504a->leave($__internal_2d74c20e3f933c7c42505af9f7ab6385d91305bb3005eae063e522e1a940504a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5f52fcba9d3961a7d8d37cff6eb9f0459aaeb8cf704e01e646ad431d49efd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f52fcba9d3961a7d8d37cff6eb9f0459aaeb8cf704e01e646ad431d49efd00->enter($__internal_e5f52fcba9d3961a7d8d37cff6eb9f0459aaeb8cf704e01e646ad431d49efd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2129246c2252ae104fb49a1b614bd3b090c8be63542923b402d5fddb0f531597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2129246c2252ae104fb49a1b614bd3b090c8be63542923b402d5fddb0f531597->enter($__internal_2129246c2252ae104fb49a1b614bd3b090c8be63542923b402d5fddb0f531597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2129246c2252ae104fb49a1b614bd3b090c8be63542923b402d5fddb0f531597->leave($__internal_2129246c2252ae104fb49a1b614bd3b090c8be63542923b402d5fddb0f531597_prof);

        
        $__internal_e5f52fcba9d3961a7d8d37cff6eb9f0459aaeb8cf704e01e646ad431d49efd00->leave($__internal_e5f52fcba9d3961a7d8d37cff6eb9f0459aaeb8cf704e01e646ad431d49efd00_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_a178dfc760e65468ef529483efb0386ac1eb7d1cd16124c089a7cb8feb9d1ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a178dfc760e65468ef529483efb0386ac1eb7d1cd16124c089a7cb8feb9d1ff7->enter($__internal_a178dfc760e65468ef529483efb0386ac1eb7d1cd16124c089a7cb8feb9d1ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cc0e44d6f7b744017f16198392f40c62b249dcf18b16d5ecd103ad65251b988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc0e44d6f7b744017f16198392f40c62b249dcf18b16d5ecd103ad65251b988->enter($__internal_3cc0e44d6f7b744017f16198392f40c62b249dcf18b16d5ecd103ad65251b988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3cc0e44d6f7b744017f16198392f40c62b249dcf18b16d5ecd103ad65251b988->leave($__internal_3cc0e44d6f7b744017f16198392f40c62b249dcf18b16d5ecd103ad65251b988_prof);

        
        $__internal_a178dfc760e65468ef529483efb0386ac1eb7d1cd16124c089a7cb8feb9d1ff7->leave($__internal_a178dfc760e65468ef529483efb0386ac1eb7d1cd16124c089a7cb8feb9d1ff7_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8e91fdfc1a7efaf2470819bd95c8ac790c5b12ac0bcacc2d6b75bd29dc1c7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e91fdfc1a7efaf2470819bd95c8ac790c5b12ac0bcacc2d6b75bd29dc1c7a0->enter($__internal_b8e91fdfc1a7efaf2470819bd95c8ac790c5b12ac0bcacc2d6b75bd29dc1c7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ccd2a6a3c2e022a5bf92e9a9b4c3fbd957d2cf7935ff5f1f2e262f8b8e8f969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccd2a6a3c2e022a5bf92e9a9b4c3fbd957d2cf7935ff5f1f2e262f8b8e8f969->enter($__internal_3ccd2a6a3c2e022a5bf92e9a9b4c3fbd957d2cf7935ff5f1f2e262f8b8e8f969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ccd2a6a3c2e022a5bf92e9a9b4c3fbd957d2cf7935ff5f1f2e262f8b8e8f969->leave($__internal_3ccd2a6a3c2e022a5bf92e9a9b4c3fbd957d2cf7935ff5f1f2e262f8b8e8f969_prof);

        
        $__internal_b8e91fdfc1a7efaf2470819bd95c8ac790c5b12ac0bcacc2d6b75bd29dc1c7a0->leave($__internal_b8e91fdfc1a7efaf2470819bd95c8ac790c5b12ac0bcacc2d6b75bd29dc1c7a0_prof);

    }

    public function getTemplateName()
    {
        return "innerbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 56,  192 => 47,  175 => 12,  158 => 5,  139 => 87,  134 => 73,  129 => 70,  114 => 57,  112 => 56,  102 => 48,  100 => 47,  94 => 45,  92 => 44,  90 => 43,  88 => 42,  86 => 41,  73 => 30,  68 => 28,  56 => 18,  54 => 17,  47 => 13,  45 => 12,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}{% endblock %} | Winthrop Internship Learning Engagement</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/reset.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/styles.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/innerBaseStyles.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../../assets/js/materialize.min.js\"></script>
    {#<link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">#}
    {#<script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>#}
    <!--Icon Attribution-->
    <!--Gear by asianson.design from the Noun Project-->
    <!--Home by asianson.design from the Noun Project-->
    <!--Reporting by AlfredoCreates.com/Icons from the Noun Project-->
    <!--export by Eagle Eye from the Noun Project-->
</head>
<body>
<nav role=\"navigation\">
    <div class=\"nav-wrapper container\">
        <a href=\"#\" data-target=\"slide-out\" class=\"sidenav-trigger show-on-large\"><i class=\"material-icons\">menu</i></a>
        <a id=\"logo-container\" href=\"{{ path('homepage') }}\" class=\"brand-logo\">WILE</a>
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"{{path('fos_user_security_logout')}}\">Logout</a></li>
        </ul>
    </div>
</nav>

<ul id=\"slide-out\" class=\"sidenav\">
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/Home.png\" alt=\"Dashboard Icon\"><figcaption>Dashboard</figcaption></figure></a></li>
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/Reporting.png\" alt=\"Generate Reports Icon\"><figcaption>Generate Reports</figcaption></figure></a></li>
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/Gear.png\" alt=\"Update System Icon\"><figcaption>Update System</figcaption></figure></a></li>
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/export.png\" alt=\"Export Icon\"><figcaption>Export Files</figcaption></figure></a></li>
    {#<li><a href=\"#!\"><i class=\"material-icons\">cloud</i>First Link With Icon</a></li>#}
    {#<li><a href=\"#!\">Second Link</a></li>#}
    {#<li><div class=\"divider\"></div></li>#}
    {#<li><a class=\"subheader\">Subheader</a></li>#}
    {#<li><a class=\"waves-effect\" href=\"#!\">Third Link With Waves</a></li>#}
    <li><a href=\"{{path('fos_user_security_logout')}}\">Logout</a></li>
</ul>
{% block body %}{% endblock %}
<script>
    \$(document).ready(function(){
        \$('select').formSelect();
        \$('.datepicker').datepicker();
        \$('textarea').characterCounter();
        \$('.sidenav').sidenav();
  });
</script>
{% block javascripts %}{% endblock %}
<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Team and Project Description</h5>
                <p class=\"grey-text text-lighten-4\">Our team consists of a group of college students working tirelessly on this project. 
                This project is built for Winthrop University's Career and Civic Engagement Center to make a working electronic version of their internship process.</p>


            </div>
            <div class=\"col l3 s12\">
                <h5 class=\"white-text\">Links</h5>
                <ul>
                    <li><a class=\"white-text\" href=\"{{ path('homepage') }}\">Login Page</a></li>
                    <li><a class=\"white-text\" href=\"#!\">FAQ</a></li>
                    {#<li><a class=\"white-text\" href=\"#!\">Tutorial</a></li>#}
                    <li><a class=\"white-text\" href=\"https://www.winthrop.edu/cce/Default.aspx\" target=\"_blank\">CCE Main Page</a></li>
                </ul>
            </div>
            {#
            <div class=\"col l3 s12\">
                <h5 class=\"white-text\">Connect</h5>
                <ul>
                    <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
            #}
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
        </div>
    </div>
</footer>
</body>
</html>", "innerbase.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/innerbase.html.twig");
    }
}
