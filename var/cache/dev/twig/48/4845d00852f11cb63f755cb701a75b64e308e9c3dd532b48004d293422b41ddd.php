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
        $__internal_6d9596531867b54701ccbbcfedbf8ca764b9ee711546e9fd5de54b994e88a287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9596531867b54701ccbbcfedbf8ca764b9ee711546e9fd5de54b994e88a287->enter($__internal_6d9596531867b54701ccbbcfedbf8ca764b9ee711546e9fd5de54b994e88a287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd6b88a6855535805edc5d6a61a7b2cde7f52af9dff44d6aeba58e000496ec7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6b88a6855535805edc5d6a61a7b2cde7f52af9dff44d6aeba58e000496ec7b->enter($__internal_cd6b88a6855535805edc5d6a61a7b2cde7f52af9dff44d6aeba58e000496ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9596531867b54701ccbbcfedbf8ca764b9ee711546e9fd5de54b994e88a287->leave($__internal_6d9596531867b54701ccbbcfedbf8ca764b9ee711546e9fd5de54b994e88a287_prof);

        
        $__internal_cd6b88a6855535805edc5d6a61a7b2cde7f52af9dff44d6aeba58e000496ec7b->leave($__internal_cd6b88a6855535805edc5d6a61a7b2cde7f52af9dff44d6aeba58e000496ec7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cdf5f5b6fb7ee6065b1eae08173271eaeac6bb481c6acd0cc0974c1a646bd463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf5f5b6fb7ee6065b1eae08173271eaeac6bb481c6acd0cc0974c1a646bd463->enter($__internal_cdf5f5b6fb7ee6065b1eae08173271eaeac6bb481c6acd0cc0974c1a646bd463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d0f01f6c8401c8b60049b5e4900fabb71166b1f92998b72ac376784387eada0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f01f6c8401c8b60049b5e4900fabb71166b1f92998b72ac376784387eada0e->enter($__internal_d0f01f6c8401c8b60049b5e4900fabb71166b1f92998b72ac376784387eada0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0f01f6c8401c8b60049b5e4900fabb71166b1f92998b72ac376784387eada0e->leave($__internal_d0f01f6c8401c8b60049b5e4900fabb71166b1f92998b72ac376784387eada0e_prof);

        
        $__internal_cdf5f5b6fb7ee6065b1eae08173271eaeac6bb481c6acd0cc0974c1a646bd463->leave($__internal_cdf5f5b6fb7ee6065b1eae08173271eaeac6bb481c6acd0cc0974c1a646bd463_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbb0297927e145c45775d952ab44ecfe891ad93b4a4956e9784a2a1c7e4e8834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb0297927e145c45775d952ab44ecfe891ad93b4a4956e9784a2a1c7e4e8834->enter($__internal_bbb0297927e145c45775d952ab44ecfe891ad93b4a4956e9784a2a1c7e4e8834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4d0090b8fbe874b2c009b64ee4b4c3ce8a8ed5a5043bd83ac68bb627e4652fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0090b8fbe874b2c009b64ee4b4c3ce8a8ed5a5043bd83ac68bb627e4652fbc->enter($__internal_4d0090b8fbe874b2c009b64ee4b4c3ce8a8ed5a5043bd83ac68bb627e4652fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d0090b8fbe874b2c009b64ee4b4c3ce8a8ed5a5043bd83ac68bb627e4652fbc->leave($__internal_4d0090b8fbe874b2c009b64ee4b4c3ce8a8ed5a5043bd83ac68bb627e4652fbc_prof);

        
        $__internal_bbb0297927e145c45775d952ab44ecfe891ad93b4a4956e9784a2a1c7e4e8834->leave($__internal_bbb0297927e145c45775d952ab44ecfe891ad93b4a4956e9784a2a1c7e4e8834_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_682524058a3a87fe558eb8dba22be8543dd42c89d5223de63d7ccf302c17f114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682524058a3a87fe558eb8dba22be8543dd42c89d5223de63d7ccf302c17f114->enter($__internal_682524058a3a87fe558eb8dba22be8543dd42c89d5223de63d7ccf302c17f114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2858ddad615d4ca622cf7b7e5b0c33649239f247800b34351d5546c79a678ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2858ddad615d4ca622cf7b7e5b0c33649239f247800b34351d5546c79a678ca2->enter($__internal_2858ddad615d4ca622cf7b7e5b0c33649239f247800b34351d5546c79a678ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2858ddad615d4ca622cf7b7e5b0c33649239f247800b34351d5546c79a678ca2->leave($__internal_2858ddad615d4ca622cf7b7e5b0c33649239f247800b34351d5546c79a678ca2_prof);

        
        $__internal_682524058a3a87fe558eb8dba22be8543dd42c89d5223de63d7ccf302c17f114->leave($__internal_682524058a3a87fe558eb8dba22be8543dd42c89d5223de63d7ccf302c17f114_prof);

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
