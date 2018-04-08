<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_9c69ac2072bf3490094fa84cc8309d29d5f1045593395e3d42cf12db0b4f91b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_8bbcc747c9fdc97c2f9df77792d31a27afb3f1611c425fc770dfb9866ae4bcf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbcc747c9fdc97c2f9df77792d31a27afb3f1611c425fc770dfb9866ae4bcf8->enter($__internal_8bbcc747c9fdc97c2f9df77792d31a27afb3f1611c425fc770dfb9866ae4bcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_3e4116faffbd8d708604241727278edea384d49ef53bc512ab7803909c36d8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4116faffbd8d708604241727278edea384d49ef53bc512ab7803909c36d8fa->enter($__internal_3e4116faffbd8d708604241727278edea384d49ef53bc512ab7803909c36d8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bbcc747c9fdc97c2f9df77792d31a27afb3f1611c425fc770dfb9866ae4bcf8->leave($__internal_8bbcc747c9fdc97c2f9df77792d31a27afb3f1611c425fc770dfb9866ae4bcf8_prof);

        
        $__internal_3e4116faffbd8d708604241727278edea384d49ef53bc512ab7803909c36d8fa->leave($__internal_3e4116faffbd8d708604241727278edea384d49ef53bc512ab7803909c36d8fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78bc717874e2760c7771134997a1d8c1c16c3d5b0055c7759dc29b627d17d37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bc717874e2760c7771134997a1d8c1c16c3d5b0055c7759dc29b627d17d37d->enter($__internal_78bc717874e2760c7771134997a1d8c1c16c3d5b0055c7759dc29b627d17d37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9af13bc5661ba580fe9a1ba8952ba3d6a2267a7aa53aaee8c1be8eafd3f95e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af13bc5661ba580fe9a1ba8952ba3d6a2267a7aa53aaee8c1be8eafd3f95e2a->enter($__internal_9af13bc5661ba580fe9a1ba8952ba3d6a2267a7aa53aaee8c1be8eafd3f95e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reset Request";
        
        $__internal_9af13bc5661ba580fe9a1ba8952ba3d6a2267a7aa53aaee8c1be8eafd3f95e2a->leave($__internal_9af13bc5661ba580fe9a1ba8952ba3d6a2267a7aa53aaee8c1be8eafd3f95e2a_prof);

        
        $__internal_78bc717874e2760c7771134997a1d8c1c16c3d5b0055c7759dc29b627d17d37d->leave($__internal_78bc717874e2760c7771134997a1d8c1c16c3d5b0055c7759dc29b627d17d37d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df85c2e917bc109f168601e48e1e90132dcb029f076a40c4aca4f84d5ea77fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df85c2e917bc109f168601e48e1e90132dcb029f076a40c4aca4f84d5ea77fb4->enter($__internal_df85c2e917bc109f168601e48e1e90132dcb029f076a40c4aca4f84d5ea77fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_69b06ea612b6dc4ba3dcdea509f06b7f5347a0c1291e79a435973f3c2edfc881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b06ea612b6dc4ba3dcdea509f06b7f5347a0c1291e79a435973f3c2edfc881->enter($__internal_69b06ea612b6dc4ba3dcdea509f06b7f5347a0c1291e79a435973f3c2edfc881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 6)->display($context);
        
        $__internal_69b06ea612b6dc4ba3dcdea509f06b7f5347a0c1291e79a435973f3c2edfc881->leave($__internal_69b06ea612b6dc4ba3dcdea509f06b7f5347a0c1291e79a435973f3c2edfc881_prof);

        
        $__internal_df85c2e917bc109f168601e48e1e90132dcb029f076a40c4aca4f84d5ea77fb4->leave($__internal_df85c2e917bc109f168601e48e1e90132dcb029f076a40c4aca4f84d5ea77fb4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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

{% block title %}Reset Request{% endblock %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
