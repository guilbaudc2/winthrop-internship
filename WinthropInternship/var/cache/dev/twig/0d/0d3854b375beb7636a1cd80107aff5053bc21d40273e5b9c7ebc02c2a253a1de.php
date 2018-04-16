<?php

/* emails/StudentFormOne/site_super_url.txt.twig */
class __TwigTemplate_19d6c3c056f5e09b6593171ba4b704458d26f7232820f7f60a34b5fe01e6bf7e extends Twig_Template
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
        $__internal_9b2b29e545350001f8eac9743635fe442e3c994578e88966a6773fbe8481d4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2b29e545350001f8eac9743635fe442e3c994578e88966a6773fbe8481d4ad->enter($__internal_9b2b29e545350001f8eac9743635fe442e3c994578e88966a6773fbe8481d4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/site_super_url.txt.twig"));

        $__internal_ddd3dc32f6cfeecc5029734e5f3cff1b7fcffbb170899842c132b1b0427257dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd3dc32f6cfeecc5029734e5f3cff1b7fcffbb170899842c132b1b0427257dc->enter($__internal_ddd3dc32f6cfeecc5029734e5f3cff1b7fcffbb170899842c132b1b0427257dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/site_super_url.txt.twig"));

        // line 1
        echo "Dear ";
        echo ($context["siteSuperName"] ?? $this->getContext($context, "siteSuperName"));
        echo ",\\r\\n\\r\\nYou are receiving this email because you are listed as the Site Supervisor for ";
        echo ($context["studentFName"] ?? $this->getContext($context, "studentFName"));
        echo " ";
        echo ($context["studentLName"] ?? $this->getContext($context, "studentLName"));
        echo "'s Winthrop Internship. To complete your portion of the application please visit ";
        echo ($context["siteSuperFormURL"] ?? $this->getContext($context, "siteSuperFormURL"));
        echo " and enter your email address and the access code which will be provided separetely from this email.\\r\\n\\r\\nIf you do not receive the access code or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at (803)323-2141 or email at cce@winthrop.edu for assistance.\\r\\n\\r\\nSincerely,\\r\\nCareer & Civic Engagement\\r\\nwww.winthrop.edu/cce";
        
        $__internal_9b2b29e545350001f8eac9743635fe442e3c994578e88966a6773fbe8481d4ad->leave($__internal_9b2b29e545350001f8eac9743635fe442e3c994578e88966a6773fbe8481d4ad_prof);

        
        $__internal_ddd3dc32f6cfeecc5029734e5f3cff1b7fcffbb170899842c132b1b0427257dc->leave($__internal_ddd3dc32f6cfeecc5029734e5f3cff1b7fcffbb170899842c132b1b0427257dc_prof);

    }

    public function getTemplateName()
    {
        return "emails/StudentFormOne/site_super_url.txt.twig";
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
        return new Twig_Source("Dear {{siteSuperName}},\\r\\n\\r\\nYou are receiving this email because you are listed as the Site Supervisor for {{studentFName}} {{studentLName}}'s Winthrop Internship. To complete your portion of the application please visit {{siteSuperFormURL}} and enter your email address and the access code which will be provided separetely from this email.\\r\\n\\r\\nIf you do not receive the access code or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at (803)323-2141 or email at cce@winthrop.edu for assistance.\\r\\n\\r\\nSincerely,\\r\\nCareer & Civic Engagement\\r\\nwww.winthrop.edu/cce", "emails/StudentFormOne/site_super_url.txt.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/emails/StudentFormOne/site_super_url.txt.twig");
    }
}
