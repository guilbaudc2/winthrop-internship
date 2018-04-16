<?php

/* emails/StudentFormOne/site_super_access_code.txt.twig */
class __TwigTemplate_e1e9b6655a82a37b9c01e94cdd9adec65b040c69bed1a5016f87ce346c5adc71 extends Twig_Template
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
        $__internal_d2123341de84a74d3f47ed6f7fccc9e56012c099df90a76a82d8ddb444aa80c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2123341de84a74d3f47ed6f7fccc9e56012c099df90a76a82d8ddb444aa80c3->enter($__internal_d2123341de84a74d3f47ed6f7fccc9e56012c099df90a76a82d8ddb444aa80c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/site_super_access_code.txt.twig"));

        $__internal_604ffda80a76c09ebcb8bea68d810a2f9c5fda385de17e14a39ada9306c268c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604ffda80a76c09ebcb8bea68d810a2f9c5fda385de17e14a39ada9306c268c8->enter($__internal_604ffda80a76c09ebcb8bea68d810a2f9c5fda385de17e14a39ada9306c268c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/site_super_access_code.txt.twig"));

        // line 1
        echo "Dear ";
        echo ($context["siteSuperName"] ?? $this->getContext($context, "siteSuperName"));
        echo ",\\r\\n\\r\\nYou are receiving this email because you are listed as the Site Supervisor for ";
        echo ($context["studentFName"] ?? $this->getContext($context, "studentFName"));
        echo " ";
        echo ($context["studentLName"] ?? $this->getContext($context, "studentLName"));
        echo "'s Winthrop Internship. To complete your portion of the application please enter the following access code in the email that included the Internship Form's URL.\\r\\n\\r\\nAccess Code: ";
        echo ($context["accessCode"] ?? $this->getContext($context, "accessCode"));
        echo "\\r\\n\\r\\nIf you did not receive the Form URL or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at (803)323-2141 or email at cce@winthrop.edu for assistance.\\r\\n\\r\\nSincerely,\\r\\nCareer & Civic Engagement\\r\\nwww.winthrop.edu/cce";
        
        $__internal_d2123341de84a74d3f47ed6f7fccc9e56012c099df90a76a82d8ddb444aa80c3->leave($__internal_d2123341de84a74d3f47ed6f7fccc9e56012c099df90a76a82d8ddb444aa80c3_prof);

        
        $__internal_604ffda80a76c09ebcb8bea68d810a2f9c5fda385de17e14a39ada9306c268c8->leave($__internal_604ffda80a76c09ebcb8bea68d810a2f9c5fda385de17e14a39ada9306c268c8_prof);

    }

    public function getTemplateName()
    {
        return "emails/StudentFormOne/site_super_access_code.txt.twig";
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
        return new Twig_Source("Dear {{siteSuperName}},\\r\\n\\r\\nYou are receiving this email because you are listed as the Site Supervisor for {{studentFName}} {{studentLName}}'s Winthrop Internship. To complete your portion of the application please enter the following access code in the email that included the Internship Form's URL.\\r\\n\\r\\nAccess Code: {{accessCode}}\\r\\n\\r\\nIf you did not receive the Form URL or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at (803)323-2141 or email at cce@winthrop.edu for assistance.\\r\\n\\r\\nSincerely,\\r\\nCareer & Civic Engagement\\r\\nwww.winthrop.edu/cce", "emails/StudentFormOne/site_super_access_code.txt.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/emails/StudentFormOne/site_super_access_code.txt.twig");
    }
}
