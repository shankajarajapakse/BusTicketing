<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_48e618573d65849aeec4b23d658ca1c1f1c644e59309394517e5e1c12c4e7702 extends Twig_Template
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
        $__internal_9dfba29d48c3e222b2562c730365eaf6e9ef42a8728b2aab5e24a0c5ab9a771a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dfba29d48c3e222b2562c730365eaf6e9ef42a8728b2aab5e24a0c5ab9a771a->enter($__internal_9dfba29d48c3e222b2562c730365eaf6e9ef42a8728b2aab5e24a0c5ab9a771a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ff4cec1ba86db6a9894bc3ccf5ee1b8552d9f5f58859e7e33fc1d741e66c2559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4cec1ba86db6a9894bc3ccf5ee1b8552d9f5f58859e7e33fc1d741e66c2559->enter($__internal_ff4cec1ba86db6a9894bc3ccf5ee1b8552d9f5f58859e7e33fc1d741e66c2559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_9dfba29d48c3e222b2562c730365eaf6e9ef42a8728b2aab5e24a0c5ab9a771a->leave($__internal_9dfba29d48c3e222b2562c730365eaf6e9ef42a8728b2aab5e24a0c5ab9a771a_prof);

        
        $__internal_ff4cec1ba86db6a9894bc3ccf5ee1b8552d9f5f58859e7e33fc1d741e66c2559->leave($__internal_ff4cec1ba86db6a9894bc3ccf5ee1b8552d9f5f58859e7e33fc1d741e66c2559_prof);

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
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\projects\\BusTicketing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
