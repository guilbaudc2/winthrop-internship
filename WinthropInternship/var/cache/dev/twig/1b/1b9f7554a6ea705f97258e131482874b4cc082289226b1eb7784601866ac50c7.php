<?php

/* base.html.twig */
class __TwigTemplate_58fcb55423d3274a662181a229734752e725144dd63773cc99fa1c7691dad048 extends Twig_Template
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
        $__internal_9f8bbfc9e2c7e3deade4c60513846a11a5a1b7a7a9e86519d8f7f0399a7b6a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8bbfc9e2c7e3deade4c60513846a11a5a1b7a7a9e86519d8f7f0399a7b6a51->enter($__internal_9f8bbfc9e2c7e3deade4c60513846a11a5a1b7a7a9e86519d8f7f0399a7b6a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c7abcd413f005978838ac4db1955ea42482b1338773726bb4bab795955c24a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7abcd413f005978838ac4db1955ea42482b1338773726bb4bab795955c24a9c->enter($__internal_c7abcd413f005978838ac4db1955ea42482b1338773726bb4bab795955c24a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Winthrop Internship Learning Engagement</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../web/assets/js/materialize.min.js\"></script>
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>";
        
        $__internal_9f8bbfc9e2c7e3deade4c60513846a11a5a1b7a7a9e86519d8f7f0399a7b6a51->leave($__internal_9f8bbfc9e2c7e3deade4c60513846a11a5a1b7a7a9e86519d8f7f0399a7b6a51_prof);

        
        $__internal_c7abcd413f005978838ac4db1955ea42482b1338773726bb4bab795955c24a9c->leave($__internal_c7abcd413f005978838ac4db1955ea42482b1338773726bb4bab795955c24a9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2baf10293e167ddfb79a35b4798fc04442ebb94d952a36e06515cb339df5f2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baf10293e167ddfb79a35b4798fc04442ebb94d952a36e06515cb339df5f2ef->enter($__internal_2baf10293e167ddfb79a35b4798fc04442ebb94d952a36e06515cb339df5f2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e051d29d3ab2963187aea6bd04dac5b1094f259adc717d9febf2eda92140ce2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e051d29d3ab2963187aea6bd04dac5b1094f259adc717d9febf2eda92140ce2d->enter($__internal_e051d29d3ab2963187aea6bd04dac5b1094f259adc717d9febf2eda92140ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e051d29d3ab2963187aea6bd04dac5b1094f259adc717d9febf2eda92140ce2d->leave($__internal_e051d29d3ab2963187aea6bd04dac5b1094f259adc717d9febf2eda92140ce2d_prof);

        
        $__internal_2baf10293e167ddfb79a35b4798fc04442ebb94d952a36e06515cb339df5f2ef->leave($__internal_2baf10293e167ddfb79a35b4798fc04442ebb94d952a36e06515cb339df5f2ef_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1e8c764dec62c412a46b3d4be3bd0920150269b7259ef902f289d1c6e9fe997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e8c764dec62c412a46b3d4be3bd0920150269b7259ef902f289d1c6e9fe997->enter($__internal_b1e8c764dec62c412a46b3d4be3bd0920150269b7259ef902f289d1c6e9fe997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f4d6789b318724982f13fdf8a547fff90fe60b389b6bc0593b8cd9986199b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4d6789b318724982f13fdf8a547fff90fe60b389b6bc0593b8cd9986199b29->enter($__internal_2f4d6789b318724982f13fdf8a547fff90fe60b389b6bc0593b8cd9986199b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2f4d6789b318724982f13fdf8a547fff90fe60b389b6bc0593b8cd9986199b29->leave($__internal_2f4d6789b318724982f13fdf8a547fff90fe60b389b6bc0593b8cd9986199b29_prof);

        
        $__internal_b1e8c764dec62c412a46b3d4be3bd0920150269b7259ef902f289d1c6e9fe997->leave($__internal_b1e8c764dec62c412a46b3d4be3bd0920150269b7259ef902f289d1c6e9fe997_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_14da69c42f991c8fd2b5d5fb05ae7f361f42d315664c539f4ff4d61c2b4b2c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14da69c42f991c8fd2b5d5fb05ae7f361f42d315664c539f4ff4d61c2b4b2c81->enter($__internal_14da69c42f991c8fd2b5d5fb05ae7f361f42d315664c539f4ff4d61c2b4b2c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ed6abaefaae88f4f978eb281e95549a6b5478c7175032465b110b87467efd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed6abaefaae88f4f978eb281e95549a6b5478c7175032465b110b87467efd09->enter($__internal_8ed6abaefaae88f4f978eb281e95549a6b5478c7175032465b110b87467efd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ed6abaefaae88f4f978eb281e95549a6b5478c7175032465b110b87467efd09->leave($__internal_8ed6abaefaae88f4f978eb281e95549a6b5478c7175032465b110b87467efd09_prof);

        
        $__internal_14da69c42f991c8fd2b5d5fb05ae7f361f42d315664c539f4ff4d61c2b4b2c81->leave($__internal_14da69c42f991c8fd2b5d5fb05ae7f361f42d315664c539f4ff4d61c2b4b2c81_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7c5797a54eca2737e9eedc4d40367f1a3a8de0eee1dba6417fcf041d230a597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c5797a54eca2737e9eedc4d40367f1a3a8de0eee1dba6417fcf041d230a597->enter($__internal_d7c5797a54eca2737e9eedc4d40367f1a3a8de0eee1dba6417fcf041d230a597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6b2082d35dd2bbff6c8fb27b7d0b75f2a175c8f0502d30bc945c78218b088b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2082d35dd2bbff6c8fb27b7d0b75f2a175c8f0502d30bc945c78218b088b88->enter($__internal_6b2082d35dd2bbff6c8fb27b7d0b75f2a175c8f0502d30bc945c78218b088b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6b2082d35dd2bbff6c8fb27b7d0b75f2a175c8f0502d30bc945c78218b088b88->leave($__internal_6b2082d35dd2bbff6c8fb27b7d0b75f2a175c8f0502d30bc945c78218b088b88_prof);

        
        $__internal_d7c5797a54eca2737e9eedc4d40367f1a3a8de0eee1dba6417fcf041d230a597->leave($__internal_d7c5797a54eca2737e9eedc4d40367f1a3a8de0eee1dba6417fcf041d230a597_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 17,  105 => 16,  88 => 10,  71 => 5,  60 => 18,  57 => 17,  55 => 16,  46 => 11,  44 => 10,  41 => 9,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        {#<link type=\"text/css\" rel=\"stylesheet\" href=\"../assets/css/materialize.min.css\"  media=\"screen,projection\"/>#}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../web/assets/js/materialize.min.js\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/base.html.twig");
    }
}
