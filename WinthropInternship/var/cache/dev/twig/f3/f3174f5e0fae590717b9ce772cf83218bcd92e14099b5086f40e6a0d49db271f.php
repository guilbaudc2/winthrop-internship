<?php

/* emails/StudentFormOne/student_notification.html.twig */
class __TwigTemplate_b344dcc970eeaa0d55d1dc2b90c6ff0041c7cf839464c1149a586f90294c15a3 extends Twig_Template
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
        $__internal_af70a1da464718d84c21f2fbcb081913a35f0535c5634a6309d6335c9b2db766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af70a1da464718d84c21f2fbcb081913a35f0535c5634a6309d6335c9b2db766->enter($__internal_af70a1da464718d84c21f2fbcb081913a35f0535c5634a6309d6335c9b2db766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/student_notification.html.twig"));

        $__internal_33261fe36992334ca3468705418ace5fdf9593dde23dc548b219cf57e60e9b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33261fe36992334ca3468705418ace5fdf9593dde23dc548b219cf57e60e9b61->enter($__internal_33261fe36992334ca3468705418ace5fdf9593dde23dc548b219cf57e60e9b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/student_notification.html.twig"));

        // line 1
        echo "Dear ";
        echo twig_escape_filter($this->env, ($context["studentFName"] ?? $this->getContext($context, "studentFName")), "html", null, true);
        echo ",<br><br>You are receving this email because you have successfully submitted the first part of your Winthrop Internship Learning Agreement. To complete your next portion of the application please visit <a href='";
        echo twig_escape_filter($this->env, ($context["studentFormTwoURL"] ?? $this->getContext($context, "studentFormTwoURL")), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, ($context["studentFormTwoURL"] ?? $this->getContext($context, "studentFormTwoURL")), "html", null, true);
        echo "</a>.<br><br>If you have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at <a href='tel:1-803-323-2141'>(803)323-2141</a> or email at cce@winthrop.edu for assistance. <br><br> Sincerely, <br> Career & Civic Engagement<br> <a href='https://www.winthrop.edu/cce'>www.winthrop.edu/cce</a>";
        
        $__internal_af70a1da464718d84c21f2fbcb081913a35f0535c5634a6309d6335c9b2db766->leave($__internal_af70a1da464718d84c21f2fbcb081913a35f0535c5634a6309d6335c9b2db766_prof);

        
        $__internal_33261fe36992334ca3468705418ace5fdf9593dde23dc548b219cf57e60e9b61->leave($__internal_33261fe36992334ca3468705418ace5fdf9593dde23dc548b219cf57e60e9b61_prof);

    }

    public function getTemplateName()
    {
        return "emails/StudentFormOne/student_notification.html.twig";
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
        return new Twig_Source("Dear {{ studentFName }},<br><br>You are receving this email because you have successfully submitted the first part of your Winthrop Internship Learning Agreement. To complete your next portion of the application please visit <a href='{{studentFormTwoURL}}'>{{ studentFormTwoURL}}</a>.<br><br>If you have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at <a href='tel:1-803-323-2141'>(803)323-2141</a> or email at cce@winthrop.edu for assistance. <br><br> Sincerely, <br> Career & Civic Engagement<br> <a href='https://www.winthrop.edu/cce'>www.winthrop.edu/cce</a>", "emails/StudentFormOne/student_notification.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/emails/StudentFormOne/student_notification.html.twig");
    }
}
