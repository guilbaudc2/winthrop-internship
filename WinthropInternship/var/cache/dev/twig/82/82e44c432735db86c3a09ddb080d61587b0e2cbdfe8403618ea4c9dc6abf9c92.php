<?php

/* materialize_form_theme.html.twig */
class __TwigTemplate_78f4ec1948bbd46eba328d7c86c28f0a1b5b636db960dc381cf466a87ded3983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "materialize_form_theme.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d20999e6293cff609add8bc3adccc117604e864bc98e4f7b130f26e1884028c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d20999e6293cff609add8bc3adccc117604e864bc98e4f7b130f26e1884028c->enter($__internal_2d20999e6293cff609add8bc3adccc117604e864bc98e4f7b130f26e1884028c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_form_theme.html.twig"));

        $__internal_c7e57383991b1a6ae43f28ba9f8d991fabd186559be9f850dac1e450d81a4eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e57383991b1a6ae43f28ba9f8d991fabd186559be9f850dac1e450d81a4eb5->enter($__internal_c7e57383991b1a6ae43f28ba9f8d991fabd186559be9f850dac1e450d81a4eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_form_theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d20999e6293cff609add8bc3adccc117604e864bc98e4f7b130f26e1884028c->leave($__internal_2d20999e6293cff609add8bc3adccc117604e864bc98e4f7b130f26e1884028c_prof);

        
        $__internal_c7e57383991b1a6ae43f28ba9f8d991fabd186559be9f850dac1e450d81a4eb5->leave($__internal_c7e57383991b1a6ae43f28ba9f8d991fabd186559be9f850dac1e450d81a4eb5_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f3eab2670a4e89ae8c19c8db5ba7c248295e044b1e0a9a2ee20d395ebf523eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3eab2670a4e89ae8c19c8db5ba7c248295e044b1e0a9a2ee20d395ebf523eb2->enter($__internal_f3eab2670a4e89ae8c19c8db5ba7c248295e044b1e0a9a2ee20d395ebf523eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_765a4f98b96cc1b7be93a88290ea7c35896d09b57251f3b6a2eaeb2aa4d65866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765a4f98b96cc1b7be93a88290ea7c35896d09b57251f3b6a2eaeb2aa4d65866->enter($__internal_765a4f98b96cc1b7be93a88290ea7c35896d09b57251f3b6a2eaeb2aa4d65866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"row";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"input-field col s12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 9
        echo "</div>
    </div>";
        
        $__internal_765a4f98b96cc1b7be93a88290ea7c35896d09b57251f3b6a2eaeb2aa4d65866->leave($__internal_765a4f98b96cc1b7be93a88290ea7c35896d09b57251f3b6a2eaeb2aa4d65866_prof);

        
        $__internal_f3eab2670a4e89ae8c19c8db5ba7c248295e044b1e0a9a2ee20d395ebf523eb2->leave($__internal_f3eab2670a4e89ae8c19c8db5ba7c248295e044b1e0a9a2ee20d395ebf523eb2_prof);

    }

    // line 13
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b9f03a9e6e05f0047065ac7358693e8e818bb8af54d6b3fbff6be10f43f823fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f03a9e6e05f0047065ac7358693e8e818bb8af54d6b3fbff6be10f43f823fb->enter($__internal_b9f03a9e6e05f0047065ac7358693e8e818bb8af54d6b3fbff6be10f43f823fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_14c54f16176f6653a78dc7b25554fb8bf5d4425e3c9c85d4e84f79859e8b7ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c54f16176f6653a78dc7b25554fb8bf5d4425e3c9c85d4e84f79859e8b7ee3->enter($__internal_14c54f16176f6653a78dc7b25554fb8bf5d4425e3c9c85d4e84f79859e8b7ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 14
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 17
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 18
        if (array_key_exists("tooltip", $context)) {
            // line 19
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_14c54f16176f6653a78dc7b25554fb8bf5d4425e3c9c85d4e84f79859e8b7ee3->leave($__internal_14c54f16176f6653a78dc7b25554fb8bf5d4425e3c9c85d4e84f79859e8b7ee3_prof);

        
        $__internal_b9f03a9e6e05f0047065ac7358693e8e818bb8af54d6b3fbff6be10f43f823fb->leave($__internal_b9f03a9e6e05f0047065ac7358693e8e818bb8af54d6b3fbff6be10f43f823fb_prof);

    }

    // line 25
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a77df367e7b14742474ad182bbc5cd97c9127ec2b68452dc1940af5ca0f69f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77df367e7b14742474ad182bbc5cd97c9127ec2b68452dc1940af5ca0f69f0f->enter($__internal_a77df367e7b14742474ad182bbc5cd97c9127ec2b68452dc1940af5ca0f69f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4b21781f4d6b3a332d0e3e7df68bc35889cee90dd365165d37e5377d5692c54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b21781f4d6b3a332d0e3e7df68bc35889cee90dd365165d37e5377d5692c54a->enter($__internal_4b21781f4d6b3a332d0e3e7df68bc35889cee90dd365165d37e5377d5692c54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 26
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 27
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4b21781f4d6b3a332d0e3e7df68bc35889cee90dd365165d37e5377d5692c54a->leave($__internal_4b21781f4d6b3a332d0e3e7df68bc35889cee90dd365165d37e5377d5692c54a_prof);

        
        $__internal_a77df367e7b14742474ad182bbc5cd97c9127ec2b68452dc1940af5ca0f69f0f->leave($__internal_a77df367e7b14742474ad182bbc5cd97c9127ec2b68452dc1940af5ca0f69f0f_prof);

    }

    // line 30
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e916b38449292e6f8a4cdad3bc0d808d2a124e0633786d7e4cddbcf8f1b626b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e916b38449292e6f8a4cdad3bc0d808d2a124e0633786d7e4cddbcf8f1b626b4->enter($__internal_e916b38449292e6f8a4cdad3bc0d808d2a124e0633786d7e4cddbcf8f1b626b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c7d4d79704f46ee34e14dfbb570a16cbc6963bbee717963936984cc0d3b07a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d4d79704f46ee34e14dfbb570a16cbc6963bbee717963936984cc0d3b07a63->enter($__internal_c7d4d79704f46ee34e14dfbb570a16cbc6963bbee717963936984cc0d3b07a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 31
        echo "<div class=\"row ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 35
        echo "</div>";
        
        $__internal_c7d4d79704f46ee34e14dfbb570a16cbc6963bbee717963936984cc0d3b07a63->leave($__internal_c7d4d79704f46ee34e14dfbb570a16cbc6963bbee717963936984cc0d3b07a63_prof);

        
        $__internal_e916b38449292e6f8a4cdad3bc0d808d2a124e0633786d7e4cddbcf8f1b626b4->leave($__internal_e916b38449292e6f8a4cdad3bc0d808d2a124e0633786d7e4cddbcf8f1b626b4_prof);

    }

    // line 39
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a590a056c8d0c312d5e84cd4b85cb6e238b26bb00b70745c0edfb4aa2f1a5e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a590a056c8d0c312d5e84cd4b85cb6e238b26bb00b70745c0edfb4aa2f1a5e7d->enter($__internal_a590a056c8d0c312d5e84cd4b85cb6e238b26bb00b70745c0edfb4aa2f1a5e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_73a34de7fd280ea2c07e2aa9f491a6415b5d3e07e8e3c561f3206ea660d4417c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a34de7fd280ea2c07e2aa9f491a6415b5d3e07e8e3c561f3206ea660d4417c->enter($__internal_73a34de7fd280ea2c07e2aa9f491a6415b5d3e07e8e3c561f3206ea660d4417c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 40
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 41
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 42
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 44
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 45
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 47
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 48
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 49
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 50
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 51
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 54
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 57
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            

";
            // line 60
            $this->displayBlock('checkbox_widget', $context, $blocks);
            // line 63
            echo "
<span>";
            // line 64
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))));
            echo "</span>
        </label>";
        }
        
        $__internal_73a34de7fd280ea2c07e2aa9f491a6415b5d3e07e8e3c561f3206ea660d4417c->leave($__internal_73a34de7fd280ea2c07e2aa9f491a6415b5d3e07e8e3c561f3206ea660d4417c_prof);

        
        $__internal_a590a056c8d0c312d5e84cd4b85cb6e238b26bb00b70745c0edfb4aa2f1a5e7d->leave($__internal_a590a056c8d0c312d5e84cd4b85cb6e238b26bb00b70745c0edfb4aa2f1a5e7d_prof);

    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_aa9a6853afd4e16c47f5a352a4a5ce9b95095b886a720e0eae5539ddd000254a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9a6853afd4e16c47f5a352a4a5ce9b95095b886a720e0eae5539ddd000254a->enter($__internal_aa9a6853afd4e16c47f5a352a4a5ce9b95095b886a720e0eae5539ddd000254a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_796f01f3011a6b7aa9a25f490fb6ded4046d3333d0ec16e35f5f282fbb0875af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796f01f3011a6b7aa9a25f490fb6ded4046d3333d0ec16e35f5f282fbb0875af->enter($__internal_796f01f3011a6b7aa9a25f490fb6ded4046d3333d0ec16e35f5f282fbb0875af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 61
        echo "<input type=\"checkbox\" class=\"filled-in\"";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_796f01f3011a6b7aa9a25f490fb6ded4046d3333d0ec16e35f5f282fbb0875af->leave($__internal_796f01f3011a6b7aa9a25f490fb6ded4046d3333d0ec16e35f5f282fbb0875af_prof);

        
        $__internal_aa9a6853afd4e16c47f5a352a4a5ce9b95095b886a720e0eae5539ddd000254a->leave($__internal_aa9a6853afd4e16c47f5a352a4a5ce9b95095b886a720e0eae5539ddd000254a_prof);

    }

    // line 108
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_31bb2b87f0c6d2022713c48ad6d364428448f81c15601c483f5d0c5432d67178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bb2b87f0c6d2022713c48ad6d364428448f81c15601c483f5d0c5432d67178->enter($__internal_31bb2b87f0c6d2022713c48ad6d364428448f81c15601c483f5d0c5432d67178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fc8718e2589ea8f1dd105bb072c6e4d238863690996ce92b7e4ad9ee2596d92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8718e2589ea8f1dd105bb072c6e4d238863690996ce92b7e4ad9ee2596d92e->enter($__internal_fc8718e2589ea8f1dd105bb072c6e4d238863690996ce92b7e4ad9ee2596d92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 109
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 110
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 111
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 112
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 113
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 114
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 117
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 120
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
        echo "</button>";
        
        $__internal_fc8718e2589ea8f1dd105bb072c6e4d238863690996ce92b7e4ad9ee2596d92e->leave($__internal_fc8718e2589ea8f1dd105bb072c6e4d238863690996ce92b7e4ad9ee2596d92e_prof);

        
        $__internal_31bb2b87f0c6d2022713c48ad6d364428448f81c15601c483f5d0c5432d67178->leave($__internal_31bb2b87f0c6d2022713c48ad6d364428448f81c15601c483f5d0c5432d67178_prof);

    }

    // line 123
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1d6945bee8eae42615ea0c742658203313ebccee1741f4120b182f8bec1eef87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6945bee8eae42615ea0c742658203313ebccee1741f4120b182f8bec1eef87->enter($__internal_1d6945bee8eae42615ea0c742658203313ebccee1741f4120b182f8bec1eef87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0fa45aed0909e34591a226a28fcfa9b7049d947d7ecade3111e77c6e724aeb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa45aed0909e34591a226a28fcfa9b7049d947d7ecade3111e77c6e724aeb72->enter($__internal_0fa45aed0909e34591a226a28fcfa9b7049d947d7ecade3111e77c6e724aeb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 124
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 125
            $context["required"] = false;
        }
        // line 127
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 128
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 129
            echo "<option value=\"\"";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                echo " disabled=\"disabled\" ";
                if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 131
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 132
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 133
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 134
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 135
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 138
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 139
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 140
        echo "</select>";
        
        $__internal_0fa45aed0909e34591a226a28fcfa9b7049d947d7ecade3111e77c6e724aeb72->leave($__internal_0fa45aed0909e34591a226a28fcfa9b7049d947d7ecade3111e77c6e724aeb72_prof);

        
        $__internal_1d6945bee8eae42615ea0c742658203313ebccee1741f4120b182f8bec1eef87->leave($__internal_1d6945bee8eae42615ea0c742658203313ebccee1741f4120b182f8bec1eef87_prof);

    }

    // line 143
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fae109a2ba7b8b01940079094ef68ad419f6504c9ce176394afe369bbb231db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae109a2ba7b8b01940079094ef68ad419f6504c9ce176394afe369bbb231db3->enter($__internal_fae109a2ba7b8b01940079094ef68ad419f6504c9ce176394afe369bbb231db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8cec72c3d994e20e4bd0c86bd581ac22f99ee09039db02b47f1aa6ead9b69ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cec72c3d994e20e4bd0c86bd581ac22f99ee09039db02b47f1aa6ead9b69ce2->enter($__internal_8cec72c3d994e20e4bd0c86bd581ac22f99ee09039db02b47f1aa6ead9b69ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 144
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea")), "data-length" => "5000"));
        // line 145
        echo "
    ";
        // line 146
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_8cec72c3d994e20e4bd0c86bd581ac22f99ee09039db02b47f1aa6ead9b69ce2->leave($__internal_8cec72c3d994e20e4bd0c86bd581ac22f99ee09039db02b47f1aa6ead9b69ce2_prof);

        
        $__internal_fae109a2ba7b8b01940079094ef68ad419f6504c9ce176394afe369bbb231db3->leave($__internal_fae109a2ba7b8b01940079094ef68ad419f6504c9ce176394afe369bbb231db3_prof);

    }

    // line 149
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_514ae9843378b61aa773217fade6dfc4f0a2e39b882d3e9280183a3949a511b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514ae9843378b61aa773217fade6dfc4f0a2e39b882d3e9280183a3949a511b5->enter($__internal_514ae9843378b61aa773217fade6dfc4f0a2e39b882d3e9280183a3949a511b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_7993074fe7761fb3bfc6c3604b4e8d7b41e67c79180ebaac8217176622045db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7993074fe7761fb3bfc6c3604b4e8d7b41e67c79180ebaac8217176622045db6->enter($__internal_7993074fe7761fb3bfc6c3604b4e8d7b41e67c79180ebaac8217176622045db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 150
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 151
            echo "<ul>";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 153
                echo "<li class=\"error\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "</ul>";
        }
        
        $__internal_7993074fe7761fb3bfc6c3604b4e8d7b41e67c79180ebaac8217176622045db6->leave($__internal_7993074fe7761fb3bfc6c3604b4e8d7b41e67c79180ebaac8217176622045db6_prof);

        
        $__internal_514ae9843378b61aa773217fade6dfc4f0a2e39b882d3e9280183a3949a511b5->leave($__internal_514ae9843378b61aa773217fade6dfc4f0a2e39b882d3e9280183a3949a511b5_prof);

    }

    public function getTemplateName()
    {
        return "materialize_form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 155,  412 => 153,  408 => 152,  406 => 151,  404 => 150,  395 => 149,  385 => 146,  382 => 145,  380 => 144,  371 => 143,  361 => 140,  359 => 139,  357 => 138,  351 => 135,  349 => 134,  347 => 133,  345 => 132,  343 => 131,  331 => 129,  329 => 128,  322 => 127,  319 => 125,  317 => 124,  308 => 123,  292 => 120,  288 => 117,  285 => 114,  284 => 113,  283 => 112,  281 => 111,  279 => 110,  277 => 109,  268 => 108,  248 => 61,  239 => 60,  226 => 64,  223 => 63,  221 => 60,  203 => 57,  199 => 54,  196 => 51,  195 => 50,  194 => 49,  192 => 48,  190 => 47,  187 => 45,  185 => 44,  182 => 42,  180 => 41,  178 => 40,  169 => 39,  159 => 35,  157 => 34,  155 => 33,  148 => 31,  139 => 30,  129 => 27,  127 => 26,  118 => 25,  104 => 20,  101 => 19,  99 => 18,  97 => 17,  94 => 15,  91 => 14,  82 => 13,  71 => 9,  69 => 8,  67 => 7,  65 => 6,  58 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        <div class=\"input-field col s12\">
            {{- form_widget(form) -}}
            {{- form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block form_widget_simple %}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
    {% if tooltip is defined %}
        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"{{ tooltip }}\">error
        </span>
    {% endif %}
{% endblock form_widget_simple %}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_row -%}
    <div class=\"row {% if not valid %} has-error{% endif %}\">
        {#{{- form_widget(form) -}}#}
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{# Checkbox label is raw here #}
{%- block checkbox_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            

{% block checkbox_widget -%}
    <input type=\"checkbox\" class=\"filled-in\"{{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget %}

<span>{{ translation_domain is same as(false) ? label|raw : label|trans({}, translation_domain)|raw }}</span>
        </label>
    {%- endif -%}
{%- endblock -%}


{#{% block checkbox_row -%}#}
{#    <div class=\"row {% if not valid %} has-error{% endif %}\">#}
{#        {{- form_widget(form) -}}#}
{#        {{- form_label(form) -}}#}
{#        {{- form_errors(form) -}}#}
{#    </div>#}
{#{%- endblock checkbox_row %}#}

{#{% block checkbox_widget -%}#}
{#    <input type=\"checkbox\" class=\"filled-in\"{{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />#}
{#{%- endblock checkbox_widget %}#}

{# Checkbox label is raw here #}
{#{%- block checkbox_label -%}#}
{#    {% if label is not same as(false) -%}#}
{#        {% if not compound -%}#}
{#            {% set label_attr = label_attr|merge({'for': id}) %}#}
{#        {%- endif -%}#}
{#        {% if required -%}#}
{#            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}#}
{#        {%- endif -%}#}
{#        {% if label is empty -%}#}
{#            {%- if label_format is not empty -%}#}
{#                {% set label = label_format|replace({#}
{#                '%name%': name,#}
{#                '%id%': id,#}
{#                }) %}#}
{#            {%- else -%}#}
{#                {% set label = name|humanize %}#}
{#            {%- endif -%}#}
{#        {%- endif -%}#}
{#        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>#}
{#            {{ translation_domain is same as(false) ? label|raw : label|trans({}, translation_domain)|raw }}#}
{#        </label>#}
{#    {%- endif -%}#}
{#{%- endblock -%}#}


{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('waves-effect waves-light') ~ ' btn')|trim}) %}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain)|raw }}</button>
{%- endblock %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required %} disabled=\"disabled\" {% if value is empty %} selected=\"selected\"{% endif %}{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ 'materialize-textarea')|trim , \"data-length\": \"5000\"}) %}

    {{ parent() }}
{%- endblock -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul>
            {%- for error in errors -%}
                <li class=\"error\">{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}
{#{% extends 'form_div_layout.html.twig' %}#}

{#{% block form_row -%}#}
{#    <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">#}
{#        <div class=\"input-field col s12\">#}
{#            {{- form_widget(form) -}}#}
{#            {{- form_label(form) -}}#}
{#            {{- form_errors(form) -}}#}
{#        </div>#}
{#    </div>#}
{#{%- endblock form_row %}#}

{#{% block form_widget_simple %}#}
{#    {% if type is not defined or type not in ['file', 'hidden'] %}#}
{#        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}#}
{#    {% endif %}#}
{#    {{- parent() -}}#}
{#    {% if tooltip is defined %}#}
{#        <span class=\"material-icons dp48 tooltipped\"#}
{#              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"{{ tooltip }}\">error#}
{#        </span>#}
{#    {% endif %}#}
{#{% endblock form_widget_simple %}#}

{#{% block form_label -%}#}
{#    {%- set label_attr = label_attr|merge({class: (label_attr.class|default(''))|trim}) -%}#}
{#    {{- parent() -}}#}
{#{%- endblock form_label %}#}

{#{% block checkbox_row -%}#}
{#    <div class=\"row {% if not valid %} has-error{% endif %}\">#}
{#        {{- form_widget(form) -}}#}
{#        {{- form_label(form) -}}#}
{#        {{- form_errors(form) -}}#}
{#    </div>#}
{#{%- endblock checkbox_row %}#}

{#{% block checkbox_widget -%}#}
{#    <input type=\"checkbox\" class=\"filled-in\"{{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />#}
{#{%- endblock checkbox_widget %}#}

{# Checkbox label is raw here #}
{#{%- block checkbox_label -%}#}
{#    {% if label is not same as(false) -%}#}
{#        {% if not compound -%}#}
{#            {% set label_attr = label_attr|merge({'for': id}) %}#}
{#        {%- endif -%}#}
{#        {% if required -%}#}
{#            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}#}
{#        {%- endif -%}#}
{#        {% if label is empty -%}#}
{#            {%- if label_format is not empty -%}#}
{#                {% set label = label_format|replace({#}
{#                    '%name%': name,#}
{#                    '%id%': id,#}
{#                }) %}#}
{#            {%- else -%}#}
{#                {% set label = name|humanize %}#}
{#            {%- endif -%}#}
{#        {%- endif -%}#}
{#        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>#}
{#        {{ translation_domain is same as(false) ? label|raw : label|trans({}, translation_domain)|raw }}#}
{#        </label>#}
{#    {%- endif -%}#}
{#{%- endblock -%}#}

{#{% block button_widget -%}#}
{#    {% set attr = attr|merge({class: (attr.class|default('waves-effect waves-light') ~ ' btn')|trim}) %}#}
{#    {{- parent() -}}#}
{#{%- endblock %}#}

{#{%- block choice_widget_collapsed -%}#}
{#    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}#}
{#        {% set required = false %}#}
{#    {%- endif -%}#}
{#    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>#}
{#        {%- if placeholder is not none -%}#}
{#            <option value=\"\"{% if required %} disabled=\"disabled\" {% if value is empty %} selected=\"selected\"{% endif %}{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>#}
{#        {%- endif -%}#}
{#        {%- if preferred_choices|length > 0 -%}#}
{#            {% set options = preferred_choices %}#}
{#            {{- block('choice_widget_options') -}}#}
{#            {%- if choices|length > 0 and separator is not none -%}#}
{#                <option disabled=\"disabled\">{{ separator }}</option>#}
{#            {%- endif -%}#}
{#        {%- endif -%}#}
{#        {%- set options = choices -%}#}
{#        {{- block('choice_widget_options') -}}#}
{#    </select>#}
{#{%- endblock choice_widget_collapsed -%}#}

{#{%- block textarea_widget -%}#}
{#    {% set attr = attr|merge({class: (attr.class|default('') ~ 'materialize-textarea')|trim}) %}#}
{#    {{ parent() }}#}
{#{%- endblock -%}#}

{#{%- block form_errors -%}#}
{#    {%- if errors|length > 0 -%}#}
{#        <ul>#}
{#            {%- for error in errors -%}#}
{#                <li class=\"error\">{{ error.message }}</li>#}
{#            {%- endfor -%}#}
{#        </ul>#}
{#    {%- endif -%}#}
{#{%- endblock form_errors -%}#}", "materialize_form_theme.html.twig", "/home/ubuntu/winthrop-internship/WinthropInternship/app/Resources/views/materialize_form_theme.html.twig");
    }
}
