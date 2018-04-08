<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_f9e91d66ca095c6559422c91b96093056f6d51af25416850ec125b3925167111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7719de60573245c08a72b40f2a76c0e85664a1b71b4d41b30abbd95c06b00da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7719de60573245c08a72b40f2a76c0e85664a1b71b4d41b30abbd95c06b00da4->enter($__internal_7719de60573245c08a72b40f2a76c0e85664a1b71b4d41b30abbd95c06b00da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_858409f4853e62df9b0b2d6ca3e2fbd24d97d88fb1b47a6d4fa068a24dd009ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858409f4853e62df9b0b2d6ca3e2fbd24d97d88fb1b47a6d4fa068a24dd009ab->enter($__internal_858409f4853e62df9b0b2d6ca3e2fbd24d97d88fb1b47a6d4fa068a24dd009ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7719de60573245c08a72b40f2a76c0e85664a1b71b4d41b30abbd95c06b00da4->leave($__internal_7719de60573245c08a72b40f2a76c0e85664a1b71b4d41b30abbd95c06b00da4_prof);

        
        $__internal_858409f4853e62df9b0b2d6ca3e2fbd24d97d88fb1b47a6d4fa068a24dd009ab->leave($__internal_858409f4853e62df9b0b2d6ca3e2fbd24d97d88fb1b47a6d4fa068a24dd009ab_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1e4ba2bc864aeefc18c6d338b88eabb3e22bd6ab57e36164d451981241745e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4ba2bc864aeefc18c6d338b88eabb3e22bd6ab57e36164d451981241745e7f->enter($__internal_1e4ba2bc864aeefc18c6d338b88eabb3e22bd6ab57e36164d451981241745e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0de72af9a113bbf1d9b62639f2f9b37da9e24a8b6c3f844f52f426f1b10bd669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de72af9a113bbf1d9b62639f2f9b37da9e24a8b6c3f844f52f426f1b10bd669->enter($__internal_0de72af9a113bbf1d9b62639f2f9b37da9e24a8b6c3f844f52f426f1b10bd669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0de72af9a113bbf1d9b62639f2f9b37da9e24a8b6c3f844f52f426f1b10bd669->leave($__internal_0de72af9a113bbf1d9b62639f2f9b37da9e24a8b6c3f844f52f426f1b10bd669_prof);

        
        $__internal_1e4ba2bc864aeefc18c6d338b88eabb3e22bd6ab57e36164d451981241745e7f->leave($__internal_1e4ba2bc864aeefc18c6d338b88eabb3e22bd6ab57e36164d451981241745e7f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_789ce6f60cde313f319d3eec2ba8eb32f70cd4e0e6ce79af38b1ca97b6ddbd85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789ce6f60cde313f319d3eec2ba8eb32f70cd4e0e6ce79af38b1ca97b6ddbd85->enter($__internal_789ce6f60cde313f319d3eec2ba8eb32f70cd4e0e6ce79af38b1ca97b6ddbd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_48618586fa9a2753cbe5ff0e7277349ceb69a63879b42eb11df73caf4c64d0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48618586fa9a2753cbe5ff0e7277349ceb69a63879b42eb11df73caf4c64d0d1->enter($__internal_48618586fa9a2753cbe5ff0e7277349ceb69a63879b42eb11df73caf4c64d0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_48618586fa9a2753cbe5ff0e7277349ceb69a63879b42eb11df73caf4c64d0d1->leave($__internal_48618586fa9a2753cbe5ff0e7277349ceb69a63879b42eb11df73caf4c64d0d1_prof);

        
        $__internal_789ce6f60cde313f319d3eec2ba8eb32f70cd4e0e6ce79af38b1ca97b6ddbd85->leave($__internal_789ce6f60cde313f319d3eec2ba8eb32f70cd4e0e6ce79af38b1ca97b6ddbd85_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_18e494488fdcf3981fe6e2a0d009a07710be39c92ad3f6d000448c95d059fd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e494488fdcf3981fe6e2a0d009a07710be39c92ad3f6d000448c95d059fd28->enter($__internal_18e494488fdcf3981fe6e2a0d009a07710be39c92ad3f6d000448c95d059fd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3d77ad943f50e8ae88628a00cd0c51089be9de1a663aa3dac6d6e8ab90ae6b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d77ad943f50e8ae88628a00cd0c51089be9de1a663aa3dac6d6e8ab90ae6b8f->enter($__internal_3d77ad943f50e8ae88628a00cd0c51089be9de1a663aa3dac6d6e8ab90ae6b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3d77ad943f50e8ae88628a00cd0c51089be9de1a663aa3dac6d6e8ab90ae6b8f->leave($__internal_3d77ad943f50e8ae88628a00cd0c51089be9de1a663aa3dac6d6e8ab90ae6b8f_prof);

        
        $__internal_18e494488fdcf3981fe6e2a0d009a07710be39c92ad3f6d000448c95d059fd28->leave($__internal_18e494488fdcf3981fe6e2a0d009a07710be39c92ad3f6d000448c95d059fd28_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  72 => 9,  63 => 7,  51 => 4,  42 => 2,  32 => 12,  30 => 7,  28 => 2,);
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
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
