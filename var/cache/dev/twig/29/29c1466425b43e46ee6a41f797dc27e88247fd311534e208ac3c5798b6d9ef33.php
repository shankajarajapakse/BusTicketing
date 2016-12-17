<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_639cd0f7355c23a757c16db065f1eda52cd93c5c9ded9d675cb289cf70eb8c69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_35f2922b7db8319ee1655f15222a29e7b5b63ef0da94d83f0e0aa9e8a373802e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f2922b7db8319ee1655f15222a29e7b5b63ef0da94d83f0e0aa9e8a373802e->enter($__internal_35f2922b7db8319ee1655f15222a29e7b5b63ef0da94d83f0e0aa9e8a373802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eeba216a1f8aea384a197c2653216fc16a79d6e6b50b163e415b80b33d5d8064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeba216a1f8aea384a197c2653216fc16a79d6e6b50b163e415b80b33d5d8064->enter($__internal_eeba216a1f8aea384a197c2653216fc16a79d6e6b50b163e415b80b33d5d8064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f2922b7db8319ee1655f15222a29e7b5b63ef0da94d83f0e0aa9e8a373802e->leave($__internal_35f2922b7db8319ee1655f15222a29e7b5b63ef0da94d83f0e0aa9e8a373802e_prof);

        
        $__internal_eeba216a1f8aea384a197c2653216fc16a79d6e6b50b163e415b80b33d5d8064->leave($__internal_eeba216a1f8aea384a197c2653216fc16a79d6e6b50b163e415b80b33d5d8064_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca696fb6d2f605eaabe9d56abe8f145f5e0e27cc6bb8bb1b4bf85baf605b6de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca696fb6d2f605eaabe9d56abe8f145f5e0e27cc6bb8bb1b4bf85baf605b6de5->enter($__internal_ca696fb6d2f605eaabe9d56abe8f145f5e0e27cc6bb8bb1b4bf85baf605b6de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6ec91ab7933e2eaf0c10449b8b5e65c6b4a37f253cc63a47dd8214322523cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ec91ab7933e2eaf0c10449b8b5e65c6b4a37f253cc63a47dd8214322523cba->enter($__internal_d6ec91ab7933e2eaf0c10449b8b5e65c6b4a37f253cc63a47dd8214322523cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d6ec91ab7933e2eaf0c10449b8b5e65c6b4a37f253cc63a47dd8214322523cba->leave($__internal_d6ec91ab7933e2eaf0c10449b8b5e65c6b4a37f253cc63a47dd8214322523cba_prof);

        
        $__internal_ca696fb6d2f605eaabe9d56abe8f145f5e0e27cc6bb8bb1b4bf85baf605b6de5->leave($__internal_ca696fb6d2f605eaabe9d56abe8f145f5e0e27cc6bb8bb1b4bf85baf605b6de5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6151dadd699a712a8bd750b551a6a31dea303249918e2cc1805375827ddbcea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6151dadd699a712a8bd750b551a6a31dea303249918e2cc1805375827ddbcea8->enter($__internal_6151dadd699a712a8bd750b551a6a31dea303249918e2cc1805375827ddbcea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_277161a8d2bcc4a460f07d113e991b759966fd9c81b9efc5da2d8e866cce22ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277161a8d2bcc4a460f07d113e991b759966fd9c81b9efc5da2d8e866cce22ea->enter($__internal_277161a8d2bcc4a460f07d113e991b759966fd9c81b9efc5da2d8e866cce22ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_277161a8d2bcc4a460f07d113e991b759966fd9c81b9efc5da2d8e866cce22ea->leave($__internal_277161a8d2bcc4a460f07d113e991b759966fd9c81b9efc5da2d8e866cce22ea_prof);

        
        $__internal_6151dadd699a712a8bd750b551a6a31dea303249918e2cc1805375827ddbcea8->leave($__internal_6151dadd699a712a8bd750b551a6a31dea303249918e2cc1805375827ddbcea8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_369c07121c4ff99f2da1b3c0bc2f46a114b67144e69a5d1b6fc749975fb68e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369c07121c4ff99f2da1b3c0bc2f46a114b67144e69a5d1b6fc749975fb68e0c->enter($__internal_369c07121c4ff99f2da1b3c0bc2f46a114b67144e69a5d1b6fc749975fb68e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01c2f30f7d012162879e24a4d49a443fdf07d64bc24e5eb524a159478d1d9422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c2f30f7d012162879e24a4d49a443fdf07d64bc24e5eb524a159478d1d9422->enter($__internal_01c2f30f7d012162879e24a4d49a443fdf07d64bc24e5eb524a159478d1d9422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_01c2f30f7d012162879e24a4d49a443fdf07d64bc24e5eb524a159478d1d9422->leave($__internal_01c2f30f7d012162879e24a4d49a443fdf07d64bc24e5eb524a159478d1d9422_prof);

        
        $__internal_369c07121c4ff99f2da1b3c0bc2f46a114b67144e69a5d1b6fc749975fb68e0c->leave($__internal_369c07121c4ff99f2da1b3c0bc2f46a114b67144e69a5d1b6fc749975fb68e0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\projects\\BusTicketing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
