<?php

/* emails/StudentFormOne/student_notification.txt.twig */
class __TwigTemplate_9405c717e2d95962b5b66af2955f00949a5e0acf78bef44a5db0989e4487d45a extends Twig_Template
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
        $__internal_21fb7adfc8b83991bcaddc6c51cc101bdb7fc62f72bc92dd336694d13f256d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fb7adfc8b83991bcaddc6c51cc101bdb7fc62f72bc92dd336694d13f256d43->enter($__internal_21fb7adfc8b83991bcaddc6c51cc101bdb7fc62f72bc92dd336694d13f256d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/student_notification.txt.twig"));

        $__internal_44ec8b75f35ed16b2eec21dac7ea26905aae54448b37ec4b0374056c6634d4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ec8b75f35ed16b2eec21dac7ea26905aae54448b37ec4b0374056c6634d4c3->enter($__internal_44ec8b75f35ed16b2eec21dac7ea26905aae54448b37ec4b0374056c6634d4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/StudentFormOne/student_notification.txt.twig"));

        // line 1
        echo "Dear ";
        echo ($context["studentFName"] ?? $this->getContext($context, "studentFName"));
        echo ",\\r\\n\\r\\nYou are receving this email because you have successfully submitted the first part of your Winthrop Internship Learning Agreement. To complete your next portion of the application please visit ";
        echo ($context["studentFormTwoURL"] ?? $this->getContext($context, "studentFormTwoURL"));
        echo ".\\r\\n\\r\\nIf you have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at (803)323-2141 or email at cce@winthrop.edu for assistance.\\r\\n\\r\\nSincerely,\\r\\nCareer & Civic Engagement\\r\\nwww.winthrop.edu/cce";
        
        $__internal_21fb7adfc8b83991bcaddc6c51cc101bdb7fc62f72bc92dd336694d13f256d43->leave($__internal_21fb7adfc8b83991bcaddc6c51cc101bdb7fc62f72bc92dd336694d13f256d43_prof);

        
        $__internal_44ec8b75f35ed16b2eec21dac7ea26905aae54448b37ec4b0374056c6634d4c3->leave($__internal_44ec8b75f35ed16b2eec21dac7ea26905aae54448b37ec4b0374056c6634d4c3_prof);

    }

    public function getTemplateName()
    {
        return "emails/StudentFormOne/student_notification.txt.twig";
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
        return new Twig_Source("Dear {{studentFName}},\\r\\n\\r\\nYou are receving this email because you have successfully submitted the first part of your Winthrop Internship Learning Agreement. To complete your next portion of the application please visit {{studentFormTwoURL}}.\\r\\n\\r\\nIf you have any questions regarding the application, please contact Winthrop University's Center for Career and Civic engagement by phone at (803)323-2141 or email at cce@winthrop.edu for assistance.\\r\\n\\r\\nSincerely,\\r\\nCareer & Civic Engagement\\r\\nwww.winthrop.edu/cce", "emails/StudentFormOne/student_notification.txt.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/emails/StudentFormOne/student_notification.txt.twig");
    }
}
