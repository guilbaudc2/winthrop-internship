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
        $__internal_6879d012c15c74a1808b2fc2cf00c0e017d2af1a90d99a5aa1497a9ac2c594bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6879d012c15c74a1808b2fc2cf00c0e017d2af1a90d99a5aa1497a9ac2c594bf->enter($__internal_6879d012c15c74a1808b2fc2cf00c0e017d2af1a90d99a5aa1497a9ac2c594bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

        $__internal_a4923b23076d15013c9b0e4292fd3d5722174afabe4be2c0bc88b0952b126761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4923b23076d15013c9b0e4292fd3d5722174afabe4be2c0bc88b0952b126761->enter($__internal_a4923b23076d15013c9b0e4292fd3d5722174afabe4be2c0bc88b0952b126761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

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
    <li><a href=\"/WinthropInternship/web/app_dev.php/studentformone\"><figure><img src=\"../../assets/images/Home.png\" alt=\"Dashboard Icon\"><figcaption>Dashboard</figcaption></figure></a></li>
";
        // line 37
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            echo "    
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/Reporting.png\" alt=\"Generate Reports Icon\"><figcaption>Generate Reports</figcaption></figure></a></li>
    <li><a href=\"/WinthropInternship/web/app_dev.php/updatesystem\"><figure><img src=\"../../assets/images/Gear.png\" alt=\"Update System Icon\"><figcaption>Manage Faculty Liaisons/Class Lists</figcaption></figure></a></li>
    <li><a href=\"#!\" id=\"export\"><figure><img src=\"../../assets/images/export.png\" alt=\"Export Icon\"><figcaption>Export Files</figcaption></figure></a></li>
";
        }
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        // line 47
        echo "    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
</ul>
";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "<script>
    \$(document).ready(function(){
        \$('select').formSelect();
        \$('.datepicker').datepicker();
        \$('textarea').characterCounter();
        \$('.sidenav').sidenav();
  });
</script>
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
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
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Login Page</a></li>
                    <li><a class=\"white-text\" href=\"#!\">FAQ</a></li>
                    ";
        // line 75
        echo "                    <li><a class=\"white-text\" href=\"https://www.winthrop.edu/cce/Default.aspx\" target=\"_blank\">CCE Main Page</a></li>
                </ul>
            </div>
            ";
        // line 89
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
        
        $__internal_6879d012c15c74a1808b2fc2cf00c0e017d2af1a90d99a5aa1497a9ac2c594bf->leave($__internal_6879d012c15c74a1808b2fc2cf00c0e017d2af1a90d99a5aa1497a9ac2c594bf_prof);

        
        $__internal_a4923b23076d15013c9b0e4292fd3d5722174afabe4be2c0bc88b0952b126761->leave($__internal_a4923b23076d15013c9b0e4292fd3d5722174afabe4be2c0bc88b0952b126761_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5adc2a331d3f4586c2f526a7bc8d9ca7cbb22b8bb9d1faf1387ce73c820df9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5adc2a331d3f4586c2f526a7bc8d9ca7cbb22b8bb9d1faf1387ce73c820df9c0->enter($__internal_5adc2a331d3f4586c2f526a7bc8d9ca7cbb22b8bb9d1faf1387ce73c820df9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_927415b0a6a8aeea9b514333e2bca82382742df984a83cf19f146d12b3fc6674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927415b0a6a8aeea9b514333e2bca82382742df984a83cf19f146d12b3fc6674->enter($__internal_927415b0a6a8aeea9b514333e2bca82382742df984a83cf19f146d12b3fc6674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_927415b0a6a8aeea9b514333e2bca82382742df984a83cf19f146d12b3fc6674->leave($__internal_927415b0a6a8aeea9b514333e2bca82382742df984a83cf19f146d12b3fc6674_prof);

        
        $__internal_5adc2a331d3f4586c2f526a7bc8d9ca7cbb22b8bb9d1faf1387ce73c820df9c0->leave($__internal_5adc2a331d3f4586c2f526a7bc8d9ca7cbb22b8bb9d1faf1387ce73c820df9c0_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_574ce059be7229fa703952d6907ecc1e51275ad61828b507e5e6553a67a5de23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574ce059be7229fa703952d6907ecc1e51275ad61828b507e5e6553a67a5de23->enter($__internal_574ce059be7229fa703952d6907ecc1e51275ad61828b507e5e6553a67a5de23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ca8c8cba002739a5e299129b6dd4ee8dea53d98afe2d6bff7e7d1df0a2a7cbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8c8cba002739a5e299129b6dd4ee8dea53d98afe2d6bff7e7d1df0a2a7cbe8->enter($__internal_ca8c8cba002739a5e299129b6dd4ee8dea53d98afe2d6bff7e7d1df0a2a7cbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca8c8cba002739a5e299129b6dd4ee8dea53d98afe2d6bff7e7d1df0a2a7cbe8->leave($__internal_ca8c8cba002739a5e299129b6dd4ee8dea53d98afe2d6bff7e7d1df0a2a7cbe8_prof);

        
        $__internal_574ce059be7229fa703952d6907ecc1e51275ad61828b507e5e6553a67a5de23->leave($__internal_574ce059be7229fa703952d6907ecc1e51275ad61828b507e5e6553a67a5de23_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c74c83033473a50cd93cc4a36dd1384ff50a621674b2b6e8870bdc1ff3de2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c74c83033473a50cd93cc4a36dd1384ff50a621674b2b6e8870bdc1ff3de2ca->enter($__internal_4c74c83033473a50cd93cc4a36dd1384ff50a621674b2b6e8870bdc1ff3de2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7e2b5ddd2a8509885bb39aab3c42f991188e2cc7101a7994ceffc9330bb734c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e2b5ddd2a8509885bb39aab3c42f991188e2cc7101a7994ceffc9330bb734c->enter($__internal_a7e2b5ddd2a8509885bb39aab3c42f991188e2cc7101a7994ceffc9330bb734c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a7e2b5ddd2a8509885bb39aab3c42f991188e2cc7101a7994ceffc9330bb734c->leave($__internal_a7e2b5ddd2a8509885bb39aab3c42f991188e2cc7101a7994ceffc9330bb734c_prof);

        
        $__internal_4c74c83033473a50cd93cc4a36dd1384ff50a621674b2b6e8870bdc1ff3de2ca->leave($__internal_4c74c83033473a50cd93cc4a36dd1384ff50a621674b2b6e8870bdc1ff3de2ca_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc433b1b8d3d3beaa538be95a532bb0977fce114922c1c715fef6852727d9865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc433b1b8d3d3beaa538be95a532bb0977fce114922c1c715fef6852727d9865->enter($__internal_bc433b1b8d3d3beaa538be95a532bb0977fce114922c1c715fef6852727d9865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_665f8cf9d976ad407c2f6066db0c788fc05a11bee9147548a1d8a891ac41aa19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665f8cf9d976ad407c2f6066db0c788fc05a11bee9147548a1d8a891ac41aa19->enter($__internal_665f8cf9d976ad407c2f6066db0c788fc05a11bee9147548a1d8a891ac41aa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_665f8cf9d976ad407c2f6066db0c788fc05a11bee9147548a1d8a891ac41aa19->leave($__internal_665f8cf9d976ad407c2f6066db0c788fc05a11bee9147548a1d8a891ac41aa19_prof);

        
        $__internal_bc433b1b8d3d3beaa538be95a532bb0977fce114922c1c715fef6852727d9865->leave($__internal_bc433b1b8d3d3beaa538be95a532bb0977fce114922c1c715fef6852727d9865_prof);

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
        return array (  216 => 58,  199 => 49,  182 => 12,  165 => 5,  146 => 89,  141 => 75,  136 => 72,  121 => 59,  119 => 58,  109 => 50,  107 => 49,  101 => 47,  99 => 46,  97 => 45,  95 => 44,  93 => 43,  91 => 42,  83 => 37,  73 => 30,  68 => 28,  56 => 18,  54 => 17,  47 => 13,  45 => 12,  35 => 5,  29 => 1,);
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
    <li><a href=\"/WinthropInternship/web/app_dev.php/studentformone\"><figure><img src=\"../../assets/images/Home.png\" alt=\"Dashboard Icon\"><figcaption>Dashboard</figcaption></figure></a></li>
{% if is_granted('ROLE_SUPER_ADMIN')%}    
    <li><a href=\"#!\"><figure><img src=\"../../assets/images/Reporting.png\" alt=\"Generate Reports Icon\"><figcaption>Generate Reports</figcaption></figure></a></li>
    <li><a href=\"/WinthropInternship/web/app_dev.php/updatesystem\"><figure><img src=\"../../assets/images/Gear.png\" alt=\"Update System Icon\"><figcaption>Manage Faculty Liaisons/Class Lists</figcaption></figure></a></li>
    <li><a href=\"#!\" id=\"export\"><figure><img src=\"../../assets/images/export.png\" alt=\"Export Icon\"><figcaption>Export Files</figcaption></figure></a></li>
{% endif %}
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
