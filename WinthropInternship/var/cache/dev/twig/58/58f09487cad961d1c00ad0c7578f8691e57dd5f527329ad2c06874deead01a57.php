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
        $__internal_80d1ab9c3ea7fd1d42ac9f686b09e2f17d7561872f880ddca8ee5f14fd52ceb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d1ab9c3ea7fd1d42ac9f686b09e2f17d7561872f880ddca8ee5f14fd52ceb7->enter($__internal_80d1ab9c3ea7fd1d42ac9f686b09e2f17d7561872f880ddca8ee5f14fd52ceb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

        $__internal_440ffce29e560e65798ed9ba0d377991fdf60dfcefa2c56188da25bd122d0c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440ffce29e560e65798ed9ba0d377991fdf60dfcefa2c56188da25bd122d0c5e->enter($__internal_440ffce29e560e65798ed9ba0d377991fdf60dfcefa2c56188da25bd122d0c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../../assets/js/materialize.min.js\"></script>
    ";
        // line 16
        echo "    ";
        // line 17
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
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"brand-logo\">WILE</a>
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"";
        // line 29
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
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
</ul>
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "<script>
    \$(document).ready(function(){
        \$('select').formSelect();
        \$('.datepicker').datepicker();
        \$('textarea').characterCounter();
        \$('.sidenav').sidenav();
  });
</script>
";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
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
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Login Page</a></li>
                    <li><a class=\"white-text\" href=\"#!\">FAQ</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Tutorial</a></li>
                    <li><a class=\"white-text\" href=\"https://www.winthrop.edu/cce/Default.aspx\">CCE Main Page</a></li>
                </ul>
            </div>
            ";
        // line 86
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
        
        $__internal_80d1ab9c3ea7fd1d42ac9f686b09e2f17d7561872f880ddca8ee5f14fd52ceb7->leave($__internal_80d1ab9c3ea7fd1d42ac9f686b09e2f17d7561872f880ddca8ee5f14fd52ceb7_prof);

        
        $__internal_440ffce29e560e65798ed9ba0d377991fdf60dfcefa2c56188da25bd122d0c5e->leave($__internal_440ffce29e560e65798ed9ba0d377991fdf60dfcefa2c56188da25bd122d0c5e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2929e3123fd84b3cb1d4075420a4c641c26b46efbc23570ac3af1194b59ff54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2929e3123fd84b3cb1d4075420a4c641c26b46efbc23570ac3af1194b59ff54a->enter($__internal_2929e3123fd84b3cb1d4075420a4c641c26b46efbc23570ac3af1194b59ff54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19feadd05337388e516afa136d65eaea70730d021af37a7f3ef0100ef8eb35fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19feadd05337388e516afa136d65eaea70730d021af37a7f3ef0100ef8eb35fe->enter($__internal_19feadd05337388e516afa136d65eaea70730d021af37a7f3ef0100ef8eb35fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_19feadd05337388e516afa136d65eaea70730d021af37a7f3ef0100ef8eb35fe->leave($__internal_19feadd05337388e516afa136d65eaea70730d021af37a7f3ef0100ef8eb35fe_prof);

        
        $__internal_2929e3123fd84b3cb1d4075420a4c641c26b46efbc23570ac3af1194b59ff54a->leave($__internal_2929e3123fd84b3cb1d4075420a4c641c26b46efbc23570ac3af1194b59ff54a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_901ddcc9fc3ad38eb1aeeda41420da2adffed0e1ed4a33aeb3d6e263125c6920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901ddcc9fc3ad38eb1aeeda41420da2adffed0e1ed4a33aeb3d6e263125c6920->enter($__internal_901ddcc9fc3ad38eb1aeeda41420da2adffed0e1ed4a33aeb3d6e263125c6920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dbb35c687e7a8c53861f25207f744dabcf65534ac945df66ff7530fff315ead1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb35c687e7a8c53861f25207f744dabcf65534ac945df66ff7530fff315ead1->enter($__internal_dbb35c687e7a8c53861f25207f744dabcf65534ac945df66ff7530fff315ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dbb35c687e7a8c53861f25207f744dabcf65534ac945df66ff7530fff315ead1->leave($__internal_dbb35c687e7a8c53861f25207f744dabcf65534ac945df66ff7530fff315ead1_prof);

        
        $__internal_901ddcc9fc3ad38eb1aeeda41420da2adffed0e1ed4a33aeb3d6e263125c6920->leave($__internal_901ddcc9fc3ad38eb1aeeda41420da2adffed0e1ed4a33aeb3d6e263125c6920_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1ae704d0879c1cd9e69906bc50c38fdd3a28db611cb0b24831ab84c438c30c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ae704d0879c1cd9e69906bc50c38fdd3a28db611cb0b24831ab84c438c30c1->enter($__internal_d1ae704d0879c1cd9e69906bc50c38fdd3a28db611cb0b24831ab84c438c30c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ebf9e7778fc201f1c1c6582266fe05cdf9afb4d190a2c71433a76acf968309e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebf9e7778fc201f1c1c6582266fe05cdf9afb4d190a2c71433a76acf968309e->enter($__internal_6ebf9e7778fc201f1c1c6582266fe05cdf9afb4d190a2c71433a76acf968309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ebf9e7778fc201f1c1c6582266fe05cdf9afb4d190a2c71433a76acf968309e->leave($__internal_6ebf9e7778fc201f1c1c6582266fe05cdf9afb4d190a2c71433a76acf968309e_prof);

        
        $__internal_d1ae704d0879c1cd9e69906bc50c38fdd3a28db611cb0b24831ab84c438c30c1->leave($__internal_d1ae704d0879c1cd9e69906bc50c38fdd3a28db611cb0b24831ab84c438c30c1_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_122d75a50da46d087c90294d58e8f1a8b8f59b0179d4b723761f98d266f5f788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122d75a50da46d087c90294d58e8f1a8b8f59b0179d4b723761f98d266f5f788->enter($__internal_122d75a50da46d087c90294d58e8f1a8b8f59b0179d4b723761f98d266f5f788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65f7e024f0ac8741bee120053f11bb3ab03024a41c5a074f05f1d99676f36cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f7e024f0ac8741bee120053f11bb3ab03024a41c5a074f05f1d99676f36cd8->enter($__internal_65f7e024f0ac8741bee120053f11bb3ab03024a41c5a074f05f1d99676f36cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_65f7e024f0ac8741bee120053f11bb3ab03024a41c5a074f05f1d99676f36cd8->leave($__internal_65f7e024f0ac8741bee120053f11bb3ab03024a41c5a074f05f1d99676f36cd8_prof);

        
        $__internal_122d75a50da46d087c90294d58e8f1a8b8f59b0179d4b723761f98d266f5f788->leave($__internal_122d75a50da46d087c90294d58e8f1a8b8f59b0179d4b723761f98d266f5f788_prof);

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
        return array (  207 => 55,  190 => 46,  173 => 11,  156 => 5,  137 => 86,  128 => 69,  113 => 56,  111 => 55,  101 => 47,  99 => 46,  93 => 44,  91 => 43,  89 => 42,  87 => 41,  85 => 40,  72 => 29,  67 => 27,  55 => 17,  53 => 16,  46 => 12,  44 => 11,  35 => 5,  29 => 1,);
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
        <a id=\"logo-container\" href=\"{{path('homepage') }}\" class=\"brand-logo\">WILE</a>
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
                    <li><a class=\"white-text\" href=\"#!\">Tutorial</a></li>
                    <li><a class=\"white-text\" href=\"https://www.winthrop.edu/cce/Default.aspx\">CCE Main Page</a></li>
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
