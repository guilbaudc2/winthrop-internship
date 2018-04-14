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
        $__internal_3cbefb43b7f0be2825fd7ba67854f0ac4e1ad4b6ffdd14b46118869fc15fc88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cbefb43b7f0be2825fd7ba67854f0ac4e1ad4b6ffdd14b46118869fc15fc88d->enter($__internal_3cbefb43b7f0be2825fd7ba67854f0ac4e1ad4b6ffdd14b46118869fc15fc88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

        $__internal_46424e24c7ee94e9b0164ca5b0bde0504fe4034825609533829ece517ad708e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46424e24c7ee94e9b0164ca5b0bde0504fe4034825609533829ece517ad708e0->enter($__internal_46424e24c7ee94e9b0164ca5b0bde0504fe4034825609533829ece517ad708e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

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
                    <li><a class=\"white-text\" href=\"#!\">Tutorial</a></li>
                    <li><a class=\"white-text\" href=\"https://www.winthrop.edu/cce/Default.aspx\">CCE Main Page</a></li>
                    <li><a class=\"white-text\" href=\"https://www.winthrop.edu/cce/Default.aspx\" target=\"_blank\">CCE Main Page</a></li>
                </ul>
            </div>
            ";
        // line 88
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
        
        $__internal_3cbefb43b7f0be2825fd7ba67854f0ac4e1ad4b6ffdd14b46118869fc15fc88d->leave($__internal_3cbefb43b7f0be2825fd7ba67854f0ac4e1ad4b6ffdd14b46118869fc15fc88d_prof);

        
        $__internal_46424e24c7ee94e9b0164ca5b0bde0504fe4034825609533829ece517ad708e0->leave($__internal_46424e24c7ee94e9b0164ca5b0bde0504fe4034825609533829ece517ad708e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d48f4b1a8a6df78d86ee38c3166fe055642caaa573214478760cb51bc2ba40d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48f4b1a8a6df78d86ee38c3166fe055642caaa573214478760cb51bc2ba40d6->enter($__internal_d48f4b1a8a6df78d86ee38c3166fe055642caaa573214478760cb51bc2ba40d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7af8a70c1f3511a2316cabe771e374ac02f6b254ac9643e76c58cdbf12df831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7af8a70c1f3511a2316cabe771e374ac02f6b254ac9643e76c58cdbf12df831->enter($__internal_a7af8a70c1f3511a2316cabe771e374ac02f6b254ac9643e76c58cdbf12df831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a7af8a70c1f3511a2316cabe771e374ac02f6b254ac9643e76c58cdbf12df831->leave($__internal_a7af8a70c1f3511a2316cabe771e374ac02f6b254ac9643e76c58cdbf12df831_prof);

        
        $__internal_d48f4b1a8a6df78d86ee38c3166fe055642caaa573214478760cb51bc2ba40d6->leave($__internal_d48f4b1a8a6df78d86ee38c3166fe055642caaa573214478760cb51bc2ba40d6_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b0e4dcb8f1852711b0182a9a4dedaab1ece5adcc2756827d7a078bbc1bdab06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0e4dcb8f1852711b0182a9a4dedaab1ece5adcc2756827d7a078bbc1bdab06->enter($__internal_4b0e4dcb8f1852711b0182a9a4dedaab1ece5adcc2756827d7a078bbc1bdab06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_32f2f85d1a683f9e0b425d8096a6bf41d6e0b9cb0a460f78a21f30b785f2857e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f2f85d1a683f9e0b425d8096a6bf41d6e0b9cb0a460f78a21f30b785f2857e->enter($__internal_32f2f85d1a683f9e0b425d8096a6bf41d6e0b9cb0a460f78a21f30b785f2857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_32f2f85d1a683f9e0b425d8096a6bf41d6e0b9cb0a460f78a21f30b785f2857e->leave($__internal_32f2f85d1a683f9e0b425d8096a6bf41d6e0b9cb0a460f78a21f30b785f2857e_prof);

        
        $__internal_4b0e4dcb8f1852711b0182a9a4dedaab1ece5adcc2756827d7a078bbc1bdab06->leave($__internal_4b0e4dcb8f1852711b0182a9a4dedaab1ece5adcc2756827d7a078bbc1bdab06_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a13b0e1cc207c618b8c26b9c7b6ba8e1abd018e2630b89fc1f316dec364aa47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a13b0e1cc207c618b8c26b9c7b6ba8e1abd018e2630b89fc1f316dec364aa47->enter($__internal_5a13b0e1cc207c618b8c26b9c7b6ba8e1abd018e2630b89fc1f316dec364aa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1251bbef80a40314baa2b6ddca00c951d8ccd43c237cefa5a5aa2d7421774e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1251bbef80a40314baa2b6ddca00c951d8ccd43c237cefa5a5aa2d7421774e9->enter($__internal_c1251bbef80a40314baa2b6ddca00c951d8ccd43c237cefa5a5aa2d7421774e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1251bbef80a40314baa2b6ddca00c951d8ccd43c237cefa5a5aa2d7421774e9->leave($__internal_c1251bbef80a40314baa2b6ddca00c951d8ccd43c237cefa5a5aa2d7421774e9_prof);

        
        $__internal_5a13b0e1cc207c618b8c26b9c7b6ba8e1abd018e2630b89fc1f316dec364aa47->leave($__internal_5a13b0e1cc207c618b8c26b9c7b6ba8e1abd018e2630b89fc1f316dec364aa47_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee182699f5216eece96e58a0bc415aa6e9043b99620611e204238d6518c23f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee182699f5216eece96e58a0bc415aa6e9043b99620611e204238d6518c23f82->enter($__internal_ee182699f5216eece96e58a0bc415aa6e9043b99620611e204238d6518c23f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a630d2a30907067b8587500dc421f4a0c2a6677e25a13a7b205b20e38bb0173a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a630d2a30907067b8587500dc421f4a0c2a6677e25a13a7b205b20e38bb0173a->enter($__internal_a630d2a30907067b8587500dc421f4a0c2a6677e25a13a7b205b20e38bb0173a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a630d2a30907067b8587500dc421f4a0c2a6677e25a13a7b205b20e38bb0173a->leave($__internal_a630d2a30907067b8587500dc421f4a0c2a6677e25a13a7b205b20e38bb0173a_prof);

        
        $__internal_ee182699f5216eece96e58a0bc415aa6e9043b99620611e204238d6518c23f82->leave($__internal_ee182699f5216eece96e58a0bc415aa6e9043b99620611e204238d6518c23f82_prof);

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
        return array (  209 => 56,  192 => 47,  175 => 12,  158 => 5,  139 => 88,  129 => 70,  114 => 57,  112 => 56,  102 => 48,  100 => 47,  94 => 45,  92 => 44,  90 => 43,  88 => 42,  86 => 41,  73 => 30,  68 => 28,  56 => 18,  54 => 17,  47 => 13,  45 => 12,  35 => 5,  29 => 1,);
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
                    <li><a class=\"white-text\" href=\"#!\">Tutorial</a></li>
                    <li><a class=\"white-text\" href=\"https://www.winthrop.edu/cce/Default.aspx\">CCE Main Page</a></li>
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
