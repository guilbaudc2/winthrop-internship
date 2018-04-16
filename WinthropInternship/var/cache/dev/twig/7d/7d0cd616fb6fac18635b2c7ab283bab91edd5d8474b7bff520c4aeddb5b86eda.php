<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_60a0808da5b556cc9c2bd638540e806b9ac104e4f7e8c013a2c8e506d1668b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_016a08953ce4c5fe9bc59bb35d8311651fafed79e8c1dac8c79b79b5e097d2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016a08953ce4c5fe9bc59bb35d8311651fafed79e8c1dac8c79b79b5e097d2ed->enter($__internal_016a08953ce4c5fe9bc59bb35d8311651fafed79e8c1dac8c79b79b5e097d2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_e726dd7915dcbef913db76c99cade31de860a9e02e465a0dc6cfc7ddcb2da05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e726dd7915dcbef913db76c99cade31de860a9e02e465a0dc6cfc7ddcb2da05b->enter($__internal_e726dd7915dcbef913db76c99cade31de860a9e02e465a0dc6cfc7ddcb2da05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "register")));
        echo "
    <div>
        <div>
            <label for=\"form.username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username: ", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
        </div>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
    </div>
    <div>
        <div>
            <label for=\"form.email\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email Address: ", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        </div>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    </div>
    <div>
        <div>
            <label for=\"form.plainPassword.first\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password: ", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
        </div>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
    </div>
    <div>
        <div>
            <label for=\"form.plainPassword.second\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm Password: ", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
        </div>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
     </div>
  <div>
    <button type=\"submit\" id=\"_submit\" name=\"action\">
      ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
    </button>
  </div>
";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_016a08953ce4c5fe9bc59bb35d8311651fafed79e8c1dac8c79b79b5e097d2ed->leave($__internal_016a08953ce4c5fe9bc59bb35d8311651fafed79e8c1dac8c79b79b5e097d2ed_prof);

        
        $__internal_e726dd7915dcbef913db76c99cade31de860a9e02e465a0dc6cfc7ddcb2da05b->leave($__internal_e726dd7915dcbef913db76c99cade31de860a9e02e465a0dc6cfc7ddcb2da05b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  95 => 41,  88 => 37,  83 => 35,  79 => 34,  72 => 30,  67 => 28,  63 => 27,  56 => 23,  51 => 21,  47 => 20,  40 => 16,  35 => 14,  31 => 13,  25 => 10,);
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
{#
 {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'Submit'|trans }}\" />
    </div>
{{ form_end(form) }}
#}
{{form_start(form, {'method': 'POST', 'attr':{'class': 'register'}})}}
    <div>
        <div>
            <label for=\"form.username\">{{ 'Username: '|trans }}</label>
            {{ form_widget(form.username) }}
        </div>
        {{ form_errors(form.username) }}
    </div>
    <div>
        <div>
            <label for=\"form.email\">{{ 'Email Address: '|trans }}</label>
            {{ form_widget(form.email) }}
        </div>
        {{ form_errors(form.email) }}
    </div>
    <div>
        <div>
            <label for=\"form.plainPassword.first\">{{ 'Password: '|trans }}</label>
            {{ form_widget(form.plainPassword.first) }}
        </div>
        {{ form_errors(form.plainPassword.first) }}
    </div>
    <div>
        <div>
            <label for=\"form.plainPassword.second\">{{ 'Confirm Password: '|trans }}</label>
            {{ form_widget(form.plainPassword.second) }}
        </div>
        {{ form_errors(form.plainPassword.second) }}
     </div>
  <div>
    <button type=\"submit\" id=\"_submit\" name=\"action\">
      {{ 'Submit'|trans }}
    </button>
  </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
