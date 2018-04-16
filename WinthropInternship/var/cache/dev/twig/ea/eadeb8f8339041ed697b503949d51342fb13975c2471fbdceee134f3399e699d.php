<?php

/* emails/StudentFormOne/site_super_access_code.html.twig */
class __TwigTemplate_3fbd39b465d52b6a5fa551b3d904293d897358fa17e8ae3a201533611c246df3 extends Twig_Template
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
        $__internal_c9040de8e015362f46c5aff5113b017608363a694d66ccf1df8b7f8cb9c015c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9040de8e015362f46c5aff5113b017608363a694d66ccf1df8b7f8cb9c015c6->enter($__internal_c9040de8e015362f46c5aff5113b017608363a694d66ccf1df8b7f8cb9c015c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/site_super_access_code.html.twig"));

        $__internal_3d5215982ec4fa398b3b815f81eab39271d3f91a70de93a153870fcfe7953a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5215982ec4fa398b3b815f81eab39271d3f91a70de93a153870fcfe7953a2b->enter($__internal_3d5215982ec4fa398b3b815f81eab39271d3f91a70de93a153870fcfe7953a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/site_super_access_code.html.twig"));

        // line 1
        echo "Dear ";
        echo twig_escape_filter($this->env, ($context["siteSuperName"] ?? $this->getContext($context, "siteSuperName")), "html", null, true);
        echo ",<br><br> You are receiving this email because you are listed as the Site Supervisor for ";
        echo twig_escape_filter($this->env, ($context["studentFName"] ?? $this->getContext($context, "studentFName")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["studentLName"] ?? $this->getContext($context, "studentLName")), "html", null, true);
        echo "'s Winthrop Internship. To complete your portion of the application please enter the following access code in the email that included the Intership Form's URL. <br><br> Access Code: ";
        echo twig_escape_filter($this->env, ($context["accessCode"] ?? $this->getContext($context, "accessCode")), "html", null, true);
        echo " <br><br> If you did not receive the Form URL or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at <a href='tel:1-803-323-2141'>(803)323-2141</a> or email at cce@winthrop.edu for assistance. <br><br> Sincerely, <br> Career & Civic Engagement<br> <a href='https://www.winthrop.edu/cce'>www.winthrop.edu/cce</a>";
        
        $__internal_c9040de8e015362f46c5aff5113b017608363a694d66ccf1df8b7f8cb9c015c6->leave($__internal_c9040de8e015362f46c5aff5113b017608363a694d66ccf1df8b7f8cb9c015c6_prof);

        
        $__internal_3d5215982ec4fa398b3b815f81eab39271d3f91a70de93a153870fcfe7953a2b->leave($__internal_3d5215982ec4fa398b3b815f81eab39271d3f91a70de93a153870fcfe7953a2b_prof);

    }

    public function getTemplateName()
    {
        return "emails/StudentFormOne/site_super_access_code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Dear {{siteSuperName}},<br><br> You are receiving this email because you are listed as the Site Supervisor for {{studentFName}} {{studentLName}}'s Winthrop Internship. To complete your portion of the application please enter the following access code in the email that included the Intership Form's URL. <br><br> Access Code: {{accessCode}} <br><br> If you did not receive the Form URL or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at <a href='tel:1-803-323-2141'>(803)323-2141</a> or email at cce@winthrop.edu for assistance. <br><br> Sincerely, <br> Career & Civic Engagement<br> <a href='https://www.winthrop.edu/cce'>www.winthrop.edu/cce</a>", "emails/StudentFormOne/site_super_access_code.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/emails/StudentFormOne/site_super_access_code.html.twig");
    }
}
