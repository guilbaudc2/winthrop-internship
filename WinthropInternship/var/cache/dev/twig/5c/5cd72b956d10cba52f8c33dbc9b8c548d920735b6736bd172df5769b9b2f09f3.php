<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa6a624eff09b1de7d0c123bcb2e7322a871c36f1109d1447bd7e582a4972589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6a624eff09b1de7d0c123bcb2e7322a871c36f1109d1447bd7e582a4972589->enter($__internal_aa6a624eff09b1de7d0c123bcb2e7322a871c36f1109d1447bd7e582a4972589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fd587433efe47c5a513e9c8a3684c63c8dcec1a5de083cdfadfa16d66fba3f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd587433efe47c5a513e9c8a3684c63c8dcec1a5de083cdfadfa16d66fba3f4e->enter($__internal_fd587433efe47c5a513e9c8a3684c63c8dcec1a5de083cdfadfa16d66fba3f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa6a624eff09b1de7d0c123bcb2e7322a871c36f1109d1447bd7e582a4972589->leave($__internal_aa6a624eff09b1de7d0c123bcb2e7322a871c36f1109d1447bd7e582a4972589_prof);

        
        $__internal_fd587433efe47c5a513e9c8a3684c63c8dcec1a5de083cdfadfa16d66fba3f4e->leave($__internal_fd587433efe47c5a513e9c8a3684c63c8dcec1a5de083cdfadfa16d66fba3f4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c45ad9f1c2b84bcdbfc6b4b8fac32138fd05e0fb6ce57a4c30a1a12791e0b0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45ad9f1c2b84bcdbfc6b4b8fac32138fd05e0fb6ce57a4c30a1a12791e0b0e2->enter($__internal_c45ad9f1c2b84bcdbfc6b4b8fac32138fd05e0fb6ce57a4c30a1a12791e0b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_49d0e3d5fcc5fbbf15f3bb7bd3212e7c27086cb8b22950b6f893891b4cbc18cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d0e3d5fcc5fbbf15f3bb7bd3212e7c27086cb8b22950b6f893891b4cbc18cb->enter($__internal_49d0e3d5fcc5fbbf15f3bb7bd3212e7c27086cb8b22950b6f893891b4cbc18cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49d0e3d5fcc5fbbf15f3bb7bd3212e7c27086cb8b22950b6f893891b4cbc18cb->leave($__internal_49d0e3d5fcc5fbbf15f3bb7bd3212e7c27086cb8b22950b6f893891b4cbc18cb_prof);

        
        $__internal_c45ad9f1c2b84bcdbfc6b4b8fac32138fd05e0fb6ce57a4c30a1a12791e0b0e2->leave($__internal_c45ad9f1c2b84bcdbfc6b4b8fac32138fd05e0fb6ce57a4c30a1a12791e0b0e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e46c56e48c5ab9eb9d96397b6b42619568bfe1a97e779e59aa01aa7c600b07c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46c56e48c5ab9eb9d96397b6b42619568bfe1a97e779e59aa01aa7c600b07c9->enter($__internal_e46c56e48c5ab9eb9d96397b6b42619568bfe1a97e779e59aa01aa7c600b07c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_76316bda1452c6470ae1cbf3a2e59b453fdefba574196f686430c27ab27510ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76316bda1452c6470ae1cbf3a2e59b453fdefba574196f686430c27ab27510ac->enter($__internal_76316bda1452c6470ae1cbf3a2e59b453fdefba574196f686430c27ab27510ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76316bda1452c6470ae1cbf3a2e59b453fdefba574196f686430c27ab27510ac->leave($__internal_76316bda1452c6470ae1cbf3a2e59b453fdefba574196f686430c27ab27510ac_prof);

        
        $__internal_e46c56e48c5ab9eb9d96397b6b42619568bfe1a97e779e59aa01aa7c600b07c9->leave($__internal_e46c56e48c5ab9eb9d96397b6b42619568bfe1a97e779e59aa01aa7c600b07c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5767189b2bd93eedb4c205b0fad51b7573b78698467b7994feddde6408821945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5767189b2bd93eedb4c205b0fad51b7573b78698467b7994feddde6408821945->enter($__internal_5767189b2bd93eedb4c205b0fad51b7573b78698467b7994feddde6408821945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57fda6850b4d55a79d217fc80d21033953015101522baeb7b48e2da8513b1d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fda6850b4d55a79d217fc80d21033953015101522baeb7b48e2da8513b1d8b->enter($__internal_57fda6850b4d55a79d217fc80d21033953015101522baeb7b48e2da8513b1d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57fda6850b4d55a79d217fc80d21033953015101522baeb7b48e2da8513b1d8b->leave($__internal_57fda6850b4d55a79d217fc80d21033953015101522baeb7b48e2da8513b1d8b_prof);

        
        $__internal_5767189b2bd93eedb4c205b0fad51b7573b78698467b7994feddde6408821945->leave($__internal_5767189b2bd93eedb4c205b0fad51b7573b78698467b7994feddde6408821945_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
