<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_eff0e05cc080539fc00927f9c43b38c5d6f544af55515f954b6a29a44e573af9 extends Twig_Template
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
        $__internal_530324d5739b72a6c7a1c118a7d3cb53dce660337d4cb0f1fb7ef4d6a05797b7 = $this->env->getExtension("native_profiler");
        $__internal_530324d5739b72a6c7a1c118a7d3cb53dce660337d4cb0f1fb7ef4d6a05797b7->enter($__internal_530324d5739b72a6c7a1c118a7d3cb53dce660337d4cb0f1fb7ef4d6a05797b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_530324d5739b72a6c7a1c118a7d3cb53dce660337d4cb0f1fb7ef4d6a05797b7->leave($__internal_530324d5739b72a6c7a1c118a7d3cb53dce660337d4cb0f1fb7ef4d6a05797b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
