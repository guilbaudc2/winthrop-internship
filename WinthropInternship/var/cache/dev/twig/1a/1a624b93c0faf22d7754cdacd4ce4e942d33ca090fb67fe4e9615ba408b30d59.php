<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7b6ea27a706f66da5d28251b52981f743c9c125fbbb648e38b994e383742fa9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34eb7244b943b4ae8ad5f0dc4a79eb96cccd0c559818b38ee11b23dadcc35bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34eb7244b943b4ae8ad5f0dc4a79eb96cccd0c559818b38ee11b23dadcc35bc4->enter($__internal_34eb7244b943b4ae8ad5f0dc4a79eb96cccd0c559818b38ee11b23dadcc35bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b4e17935a12dec43e50dd76d4e4243e6140507d335f612e3e35234a01d371d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e17935a12dec43e50dd76d4e4243e6140507d335f612e3e35234a01d371d3d->enter($__internal_b4e17935a12dec43e50dd76d4e4243e6140507d335f612e3e35234a01d371d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_34eb7244b943b4ae8ad5f0dc4a79eb96cccd0c559818b38ee11b23dadcc35bc4->leave($__internal_34eb7244b943b4ae8ad5f0dc4a79eb96cccd0c559818b38ee11b23dadcc35bc4_prof);

        
        $__internal_b4e17935a12dec43e50dd76d4e4243e6140507d335f612e3e35234a01d371d3d->leave($__internal_b4e17935a12dec43e50dd76d4e4243e6140507d335f612e3e35234a01d371d3d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f10c1f1854e089d07665f3b5b1cc061ed3fdacb68e608efa48d6fb5d9ab2e058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10c1f1854e089d07665f3b5b1cc061ed3fdacb68e608efa48d6fb5d9ab2e058->enter($__internal_f10c1f1854e089d07665f3b5b1cc061ed3fdacb68e608efa48d6fb5d9ab2e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33befb94e76ff8ddf6f7aec9f660d01064b4349b04ae146cbde2815092b59b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33befb94e76ff8ddf6f7aec9f660d01064b4349b04ae146cbde2815092b59b30->enter($__internal_33befb94e76ff8ddf6f7aec9f660d01064b4349b04ae146cbde2815092b59b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_33befb94e76ff8ddf6f7aec9f660d01064b4349b04ae146cbde2815092b59b30->leave($__internal_33befb94e76ff8ddf6f7aec9f660d01064b4349b04ae146cbde2815092b59b30_prof);

        
        $__internal_f10c1f1854e089d07665f3b5b1cc061ed3fdacb68e608efa48d6fb5d9ab2e058->leave($__internal_f10c1f1854e089d07665f3b5b1cc061ed3fdacb68e608efa48d6fb5d9ab2e058_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3642d8dfc2b45e7cebca49f5f8c60cadf621827f2b23296170ca8084bd280c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3642d8dfc2b45e7cebca49f5f8c60cadf621827f2b23296170ca8084bd280c60->enter($__internal_3642d8dfc2b45e7cebca49f5f8c60cadf621827f2b23296170ca8084bd280c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e0f8548fa33d489df2ac23735a4e0d915c36457eeb34b9e26608d4b80f31744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0f8548fa33d489df2ac23735a4e0d915c36457eeb34b9e26608d4b80f31744->enter($__internal_5e0f8548fa33d489df2ac23735a4e0d915c36457eeb34b9e26608d4b80f31744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5e0f8548fa33d489df2ac23735a4e0d915c36457eeb34b9e26608d4b80f31744->leave($__internal_5e0f8548fa33d489df2ac23735a4e0d915c36457eeb34b9e26608d4b80f31744_prof);

        
        $__internal_3642d8dfc2b45e7cebca49f5f8c60cadf621827f2b23296170ca8084bd280c60->leave($__internal_3642d8dfc2b45e7cebca49f5f8c60cadf621827f2b23296170ca8084bd280c60_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9cc1af0d6dcae681ca38bfafe1bba2ecbab781f50e51919fe0b1712a03451c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9cc1af0d6dcae681ca38bfafe1bba2ecbab781f50e51919fe0b1712a03451c4->enter($__internal_e9cc1af0d6dcae681ca38bfafe1bba2ecbab781f50e51919fe0b1712a03451c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_078fb2821625a1e75a98aababcac5d0dc331f3b1ea85cf2ec040bcdae54ab356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078fb2821625a1e75a98aababcac5d0dc331f3b1ea85cf2ec040bcdae54ab356->enter($__internal_078fb2821625a1e75a98aababcac5d0dc331f3b1ea85cf2ec040bcdae54ab356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_078fb2821625a1e75a98aababcac5d0dc331f3b1ea85cf2ec040bcdae54ab356->leave($__internal_078fb2821625a1e75a98aababcac5d0dc331f3b1ea85cf2ec040bcdae54ab356_prof);

        
        $__internal_e9cc1af0d6dcae681ca38bfafe1bba2ecbab781f50e51919fe0b1712a03451c4->leave($__internal_e9cc1af0d6dcae681ca38bfafe1bba2ecbab781f50e51919fe0b1712a03451c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
