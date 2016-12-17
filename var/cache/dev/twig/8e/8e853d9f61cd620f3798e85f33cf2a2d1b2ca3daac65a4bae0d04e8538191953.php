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
        $__internal_1db2c23b099a54b35189367dd0523b7e8d3634cace25c232f33841fa12d2931b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db2c23b099a54b35189367dd0523b7e8d3634cace25c232f33841fa12d2931b->enter($__internal_1db2c23b099a54b35189367dd0523b7e8d3634cace25c232f33841fa12d2931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4bf836fca2a52d2830acca166e7ccfbdbfbaacb501ea6b4e25a080bd512baa14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf836fca2a52d2830acca166e7ccfbdbfbaacb501ea6b4e25a080bd512baa14->enter($__internal_4bf836fca2a52d2830acca166e7ccfbdbfbaacb501ea6b4e25a080bd512baa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db2c23b099a54b35189367dd0523b7e8d3634cace25c232f33841fa12d2931b->leave($__internal_1db2c23b099a54b35189367dd0523b7e8d3634cace25c232f33841fa12d2931b_prof);

        
        $__internal_4bf836fca2a52d2830acca166e7ccfbdbfbaacb501ea6b4e25a080bd512baa14->leave($__internal_4bf836fca2a52d2830acca166e7ccfbdbfbaacb501ea6b4e25a080bd512baa14_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2602b751d79743294b771364f10b11afda56b5d13fbc3cfb70e355b26f4ec816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2602b751d79743294b771364f10b11afda56b5d13fbc3cfb70e355b26f4ec816->enter($__internal_2602b751d79743294b771364f10b11afda56b5d13fbc3cfb70e355b26f4ec816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_edcadce3eb943b9ed62303b42b8079945eed8b042c639e3b30958ffbbec875e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edcadce3eb943b9ed62303b42b8079945eed8b042c639e3b30958ffbbec875e0->enter($__internal_edcadce3eb943b9ed62303b42b8079945eed8b042c639e3b30958ffbbec875e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_edcadce3eb943b9ed62303b42b8079945eed8b042c639e3b30958ffbbec875e0->leave($__internal_edcadce3eb943b9ed62303b42b8079945eed8b042c639e3b30958ffbbec875e0_prof);

        
        $__internal_2602b751d79743294b771364f10b11afda56b5d13fbc3cfb70e355b26f4ec816->leave($__internal_2602b751d79743294b771364f10b11afda56b5d13fbc3cfb70e355b26f4ec816_prof);

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
