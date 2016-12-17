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
        $__internal_6de7a676dff1fc9882c9633b7b508afde18239e0f468d43792b076346e29ca06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de7a676dff1fc9882c9633b7b508afde18239e0f468d43792b076346e29ca06->enter($__internal_6de7a676dff1fc9882c9633b7b508afde18239e0f468d43792b076346e29ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f94eb97606661cf6dce3888ec486f775420633828ebe84dfc4210ff375f17ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94eb97606661cf6dce3888ec486f775420633828ebe84dfc4210ff375f17ed7->enter($__internal_f94eb97606661cf6dce3888ec486f775420633828ebe84dfc4210ff375f17ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de7a676dff1fc9882c9633b7b508afde18239e0f468d43792b076346e29ca06->leave($__internal_6de7a676dff1fc9882c9633b7b508afde18239e0f468d43792b076346e29ca06_prof);

        
        $__internal_f94eb97606661cf6dce3888ec486f775420633828ebe84dfc4210ff375f17ed7->leave($__internal_f94eb97606661cf6dce3888ec486f775420633828ebe84dfc4210ff375f17ed7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f171fc42cff28b6456358379946bbcbe135265b16280a8b5806045c4a062ec3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f171fc42cff28b6456358379946bbcbe135265b16280a8b5806045c4a062ec3a->enter($__internal_f171fc42cff28b6456358379946bbcbe135265b16280a8b5806045c4a062ec3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e1306040fcbd063111c03a9c792e2ba32ff873415f9c07c67fbe6df89d2e3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1306040fcbd063111c03a9c792e2ba32ff873415f9c07c67fbe6df89d2e3e3->enter($__internal_0e1306040fcbd063111c03a9c792e2ba32ff873415f9c07c67fbe6df89d2e3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0e1306040fcbd063111c03a9c792e2ba32ff873415f9c07c67fbe6df89d2e3e3->leave($__internal_0e1306040fcbd063111c03a9c792e2ba32ff873415f9c07c67fbe6df89d2e3e3_prof);

        
        $__internal_f171fc42cff28b6456358379946bbcbe135265b16280a8b5806045c4a062ec3a->leave($__internal_f171fc42cff28b6456358379946bbcbe135265b16280a8b5806045c4a062ec3a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_718f7ee91f471283efaa8173dfb6b9639dbf4b13a4413833004fbada60cacdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718f7ee91f471283efaa8173dfb6b9639dbf4b13a4413833004fbada60cacdfb->enter($__internal_718f7ee91f471283efaa8173dfb6b9639dbf4b13a4413833004fbada60cacdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08a249a777b2ad5e44c3618d0da9a2466cc9e9de59a78d682f74342447bdd902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a249a777b2ad5e44c3618d0da9a2466cc9e9de59a78d682f74342447bdd902->enter($__internal_08a249a777b2ad5e44c3618d0da9a2466cc9e9de59a78d682f74342447bdd902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_08a249a777b2ad5e44c3618d0da9a2466cc9e9de59a78d682f74342447bdd902->leave($__internal_08a249a777b2ad5e44c3618d0da9a2466cc9e9de59a78d682f74342447bdd902_prof);

        
        $__internal_718f7ee91f471283efaa8173dfb6b9639dbf4b13a4413833004fbada60cacdfb->leave($__internal_718f7ee91f471283efaa8173dfb6b9639dbf4b13a4413833004fbada60cacdfb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f59bc6e0bac306ee34cc8ef0651e20018a97e206ccc47fb7dbb93fd449d895d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f59bc6e0bac306ee34cc8ef0651e20018a97e206ccc47fb7dbb93fd449d895d->enter($__internal_6f59bc6e0bac306ee34cc8ef0651e20018a97e206ccc47fb7dbb93fd449d895d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c14cfd9db8a39ac26423db34bc6b73df93e8e2f74111f2002e6fdf75f7e96cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c14cfd9db8a39ac26423db34bc6b73df93e8e2f74111f2002e6fdf75f7e96cc->enter($__internal_1c14cfd9db8a39ac26423db34bc6b73df93e8e2f74111f2002e6fdf75f7e96cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1c14cfd9db8a39ac26423db34bc6b73df93e8e2f74111f2002e6fdf75f7e96cc->leave($__internal_1c14cfd9db8a39ac26423db34bc6b73df93e8e2f74111f2002e6fdf75f7e96cc_prof);

        
        $__internal_6f59bc6e0bac306ee34cc8ef0651e20018a97e206ccc47fb7dbb93fd449d895d->leave($__internal_6f59bc6e0bac306ee34cc8ef0651e20018a97e206ccc47fb7dbb93fd449d895d_prof);

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
