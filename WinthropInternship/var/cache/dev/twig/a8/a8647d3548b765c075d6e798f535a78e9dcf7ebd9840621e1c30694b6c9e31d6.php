<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_51ae584b90920a560961fe237d3ab8c8d18fe945fcb28b8a3646a2ba3a5755d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a2355851bede9c9fc59f232a751cfa5171b1e6510bb49e74fa13c3bb0397e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2355851bede9c9fc59f232a751cfa5171b1e6510bb49e74fa13c3bb0397e03->enter($__internal_0a2355851bede9c9fc59f232a751cfa5171b1e6510bb49e74fa13c3bb0397e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_411f013feacbd493abebf220109676249eb976f7c65d4d572d5942438c61f044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411f013feacbd493abebf220109676249eb976f7c65d4d572d5942438c61f044->enter($__internal_411f013feacbd493abebf220109676249eb976f7c65d4d572d5942438c61f044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\">
    <div>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"Winthrop Username\" />
    </div>
    <div>
        ";
        // line 11
        echo "        <input type=\"submit\" value=\"Submit Request\" />
    </div>
</form>
";
        
        $__internal_0a2355851bede9c9fc59f232a751cfa5171b1e6510bb49e74fa13c3bb0397e03->leave($__internal_0a2355851bede9c9fc59f232a751cfa5171b1e6510bb49e74fa13c3bb0397e03_prof);

        
        $__internal_411f013feacbd493abebf220109676249eb976f7c65d4d572d5942438c61f044->leave($__internal_411f013feacbd493abebf220109676249eb976f7c65d4d572d5942438c61f044_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_abea91e9f2ca516a5f9998bc42384d771dacb8d41302e49f329f3ff8189256c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abea91e9f2ca516a5f9998bc42384d771dacb8d41302e49f329f3ff8189256c9->enter($__internal_abea91e9f2ca516a5f9998bc42384d771dacb8d41302e49f329f3ff8189256c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55395f34f6940169da2250356cc5ed9f827ebd78f29be028b3d1eb90c2689884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55395f34f6940169da2250356cc5ed9f827ebd78f29be028b3d1eb90c2689884->enter($__internal_55395f34f6940169da2250356cc5ed9f827ebd78f29be028b3d1eb90c2689884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reset Password";
        
        $__internal_55395f34f6940169da2250356cc5ed9f827ebd78f29be028b3d1eb90c2689884->leave($__internal_55395f34f6940169da2250356cc5ed9f827ebd78f29be028b3d1eb90c2689884_prof);

        
        $__internal_abea91e9f2ca516a5f9998bc42384d771dacb8d41302e49f329f3ff8189256c9->leave($__internal_abea91e9f2ca516a5f9998bc42384d771dacb8d41302e49f329f3ff8189256c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 3,  42 => 11,  34 => 5,  31 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block title %}Reset Password{% endblock %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\">
    <div>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"Winthrop Username\" />
    </div>
    <div>
        {#<input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />#}
        <input type=\"submit\" value=\"Submit Request\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
