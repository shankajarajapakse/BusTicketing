<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7ce8d2bf73d3019b4f8971850f18f362e8fcabcd1ce45efef4a849c51d34c579 extends Twig_Template
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
        $__internal_a8a7e8d47c4bdd753e34618910a2e82d7332cacc02cdad2779a4bdd3aa10a4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a7e8d47c4bdd753e34618910a2e82d7332cacc02cdad2779a4bdd3aa10a4ab->enter($__internal_a8a7e8d47c4bdd753e34618910a2e82d7332cacc02cdad2779a4bdd3aa10a4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e8f8a8fad5b331b703ad26bba8c59b7e7b15a6a41723a13c0e60caa6550046c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f8a8fad5b331b703ad26bba8c59b7e7b15a6a41723a13c0e60caa6550046c0->enter($__internal_e8f8a8fad5b331b703ad26bba8c59b7e7b15a6a41723a13c0e60caa6550046c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a7e8d47c4bdd753e34618910a2e82d7332cacc02cdad2779a4bdd3aa10a4ab->leave($__internal_a8a7e8d47c4bdd753e34618910a2e82d7332cacc02cdad2779a4bdd3aa10a4ab_prof);

        
        $__internal_e8f8a8fad5b331b703ad26bba8c59b7e7b15a6a41723a13c0e60caa6550046c0->leave($__internal_e8f8a8fad5b331b703ad26bba8c59b7e7b15a6a41723a13c0e60caa6550046c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_289f44f87de637df16cc92cbe37df530cd9024602818f3bed82779174f1cc294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289f44f87de637df16cc92cbe37df530cd9024602818f3bed82779174f1cc294->enter($__internal_289f44f87de637df16cc92cbe37df530cd9024602818f3bed82779174f1cc294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bdade361e0b4f88fe351874248286c9d822e87b5f2cf0210d1af08b155e7b328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdade361e0b4f88fe351874248286c9d822e87b5f2cf0210d1af08b155e7b328->enter($__internal_bdade361e0b4f88fe351874248286c9d822e87b5f2cf0210d1af08b155e7b328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bdade361e0b4f88fe351874248286c9d822e87b5f2cf0210d1af08b155e7b328->leave($__internal_bdade361e0b4f88fe351874248286c9d822e87b5f2cf0210d1af08b155e7b328_prof);

        
        $__internal_289f44f87de637df16cc92cbe37df530cd9024602818f3bed82779174f1cc294->leave($__internal_289f44f87de637df16cc92cbe37df530cd9024602818f3bed82779174f1cc294_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0560bc08b0c40f47ddc77c7563f27c031b6eb3aadea8c4e4377a358e62f84be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0560bc08b0c40f47ddc77c7563f27c031b6eb3aadea8c4e4377a358e62f84be2->enter($__internal_0560bc08b0c40f47ddc77c7563f27c031b6eb3aadea8c4e4377a358e62f84be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1543c7ea106a59b61cbd32b7ff7416364a36615875dfe6504d9fc714db53c9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1543c7ea106a59b61cbd32b7ff7416364a36615875dfe6504d9fc714db53c9d7->enter($__internal_1543c7ea106a59b61cbd32b7ff7416364a36615875dfe6504d9fc714db53c9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1543c7ea106a59b61cbd32b7ff7416364a36615875dfe6504d9fc714db53c9d7->leave($__internal_1543c7ea106a59b61cbd32b7ff7416364a36615875dfe6504d9fc714db53c9d7_prof);

        
        $__internal_0560bc08b0c40f47ddc77c7563f27c031b6eb3aadea8c4e4377a358e62f84be2->leave($__internal_0560bc08b0c40f47ddc77c7563f27c031b6eb3aadea8c4e4377a358e62f84be2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efb2fa5cc69460d8c2028287a8275dfc19513b7ca1e47d22ae1d8e1c6a9bdc1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb2fa5cc69460d8c2028287a8275dfc19513b7ca1e47d22ae1d8e1c6a9bdc1a->enter($__internal_efb2fa5cc69460d8c2028287a8275dfc19513b7ca1e47d22ae1d8e1c6a9bdc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fa9b6dea90258e500f441e2265a53bfc21bad848feab6607da13d7691948267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa9b6dea90258e500f441e2265a53bfc21bad848feab6607da13d7691948267->enter($__internal_6fa9b6dea90258e500f441e2265a53bfc21bad848feab6607da13d7691948267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6fa9b6dea90258e500f441e2265a53bfc21bad848feab6607da13d7691948267->leave($__internal_6fa9b6dea90258e500f441e2265a53bfc21bad848feab6607da13d7691948267_prof);

        
        $__internal_efb2fa5cc69460d8c2028287a8275dfc19513b7ca1e47d22ae1d8e1c6a9bdc1a->leave($__internal_efb2fa5cc69460d8c2028287a8275dfc19513b7ca1e47d22ae1d8e1c6a9bdc1a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\projects\\BusTicketing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
