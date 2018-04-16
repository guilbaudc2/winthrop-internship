<?php

/* emails/StudentFormOne/site_super_url.html.twig */
class __TwigTemplate_1582b512839d53b8bb41cecd43a98125f6d22f9b02f65666c8df7c6ec92f05c6 extends Twig_Template
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
        $__internal_9f047bc8b6390c1805b15499913b4c7529ef2acc75b947a4b008710d92efb995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f047bc8b6390c1805b15499913b4c7529ef2acc75b947a4b008710d92efb995->enter($__internal_9f047bc8b6390c1805b15499913b4c7529ef2acc75b947a4b008710d92efb995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/site_super_url.html.twig"));

        $__internal_0437a750c01406c0d57a67340c502bbbf91abf3cace966e2acc77be3fdf574b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0437a750c01406c0d57a67340c502bbbf91abf3cace966e2acc77be3fdf574b0->enter($__internal_0437a750c01406c0d57a67340c502bbbf91abf3cace966e2acc77be3fdf574b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/site_super_url.html.twig"));

        // line 1
        echo "Dear ";
        echo twig_escape_filter($this->env, ($context["siteSuperName"] ?? $this->getContext($context, "siteSuperName")), "html", null, true);
        echo ",<br><br> 
You are receiving this email because you are listed as the Site Supervisor for \$studentFName \$studentLName's Winthrop Internship. To complete your portion of the application please visit <a href='";
        // line 2
        echo twig_escape_filter($this->env, ($context["siteSuperFormURL"] ?? $this->getContext($context, "siteSuperFormURL")), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, ($context["siteSuperFormURL"] ?? $this->getContext($context, "siteSuperFormURL")), "html", null, true);
        echo "</a> and enter your email address and the access code which will be provided separetely from this email. <br><br> 
If you do not receive the access code or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at <a href='tel:1-803-323-2141'>(803)323-2141</a> or email at cce@winthrop.edu for assistance. <br><br> 
Sincerely, <br> 
Career & Civic Engagement<br> 
<a href='https://www.winthrop.edu/cce'>www.winthrop.edu/cce</a>";
        
        $__internal_9f047bc8b6390c1805b15499913b4c7529ef2acc75b947a4b008710d92efb995->leave($__internal_9f047bc8b6390c1805b15499913b4c7529ef2acc75b947a4b008710d92efb995_prof);

        
        $__internal_0437a750c01406c0d57a67340c502bbbf91abf3cace966e2acc77be3fdf574b0->leave($__internal_0437a750c01406c0d57a67340c502bbbf91abf3cace966e2acc77be3fdf574b0_prof);

    }

    public function getTemplateName()
    {
        return "emails/StudentFormOne/site_super_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Dear {{siteSuperName}},<br><br> 
You are receiving this email because you are listed as the Site Supervisor for \$studentFName \$studentLName's Winthrop Internship. To complete your portion of the application please visit <a href='{{siteSuperFormURL}}'>{{siteSuperFormURL}}</a> and enter your email address and the access code which will be provided separetely from this email. <br><br> 
If you do not receive the access code or have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at <a href='tel:1-803-323-2141'>(803)323-2141</a> or email at cce@winthrop.edu for assistance. <br><br> 
Sincerely, <br> 
Career & Civic Engagement<br> 
<a href='https://www.winthrop.edu/cce'>www.winthrop.edu/cce</a>", "emails/StudentFormOne/site_super_url.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/emails/StudentFormOne/site_super_url.html.twig");
    }
}
