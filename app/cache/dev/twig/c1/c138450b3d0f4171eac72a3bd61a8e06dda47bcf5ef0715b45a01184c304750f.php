<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_2e03fb4a7ce2e14a7940568574453ef6ec90c64a993945051ec28a05bbb60840 extends Twig_Template
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
        $__internal_c0e0e8a9cd79cb1a4c4c71acc0814404ae8ca92cb5f7558d26808fd127c73f03 = $this->env->getExtension("native_profiler");
        $__internal_c0e0e8a9cd79cb1a4c4c71acc0814404ae8ca92cb5f7558d26808fd127c73f03->enter($__internal_c0e0e8a9cd79cb1a4c4c71acc0814404ae8ca92cb5f7558d26808fd127c73f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c0e0e8a9cd79cb1a4c4c71acc0814404ae8ca92cb5f7558d26808fd127c73f03->leave($__internal_c0e0e8a9cd79cb1a4c4c71acc0814404ae8ca92cb5f7558d26808fd127c73f03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */