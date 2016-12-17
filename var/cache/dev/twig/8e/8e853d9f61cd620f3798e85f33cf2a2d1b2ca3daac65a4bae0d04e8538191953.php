<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fb0de86d0342a7e4fa71aa5d0aef669365a0e79024462861cd8607c964524e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad70e90048ff039e6cae53da8a8b36d114465a3e700cee62182308647d1c5c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad70e90048ff039e6cae53da8a8b36d114465a3e700cee62182308647d1c5c4f->enter($__internal_ad70e90048ff039e6cae53da8a8b36d114465a3e700cee62182308647d1c5c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c28cccee49b58d1260f777c3ba2b28254b04f9fdc79ff896503ace680501105f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28cccee49b58d1260f777c3ba2b28254b04f9fdc79ff896503ace680501105f->enter($__internal_c28cccee49b58d1260f777c3ba2b28254b04f9fdc79ff896503ace680501105f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad70e90048ff039e6cae53da8a8b36d114465a3e700cee62182308647d1c5c4f->leave($__internal_ad70e90048ff039e6cae53da8a8b36d114465a3e700cee62182308647d1c5c4f_prof);

        
        $__internal_c28cccee49b58d1260f777c3ba2b28254b04f9fdc79ff896503ace680501105f->leave($__internal_c28cccee49b58d1260f777c3ba2b28254b04f9fdc79ff896503ace680501105f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7292c824ceef250954c7be90d6c1796f6f8095b9922b14726c35aa36f98d2025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7292c824ceef250954c7be90d6c1796f6f8095b9922b14726c35aa36f98d2025->enter($__internal_7292c824ceef250954c7be90d6c1796f6f8095b9922b14726c35aa36f98d2025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89fd2690b7b1c672fe2e08adc6f5e62e599a22530bacf02cf9d8a780694e8378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fd2690b7b1c672fe2e08adc6f5e62e599a22530bacf02cf9d8a780694e8378->enter($__internal_89fd2690b7b1c672fe2e08adc6f5e62e599a22530bacf02cf9d8a780694e8378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_89fd2690b7b1c672fe2e08adc6f5e62e599a22530bacf02cf9d8a780694e8378->leave($__internal_89fd2690b7b1c672fe2e08adc6f5e62e599a22530bacf02cf9d8a780694e8378_prof);

        
        $__internal_7292c824ceef250954c7be90d6c1796f6f8095b9922b14726c35aa36f98d2025->leave($__internal_7292c824ceef250954c7be90d6c1796f6f8095b9922b14726c35aa36f98d2025_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\projects\\BusTicketing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
