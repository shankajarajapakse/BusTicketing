<?php

/* LoginBundle:Login:login.html.twig */
class __TwigTemplate_00474a0e69b76b1690df5fffe1fe5646aca372a286d8d8b1db73ea17db2ea548 extends Twig_Template
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
        $__internal_0ed95c3da892a1657113bc74161880cad0f77995f603c35eecc19618f5330517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed95c3da892a1657113bc74161880cad0f77995f603c35eecc19618f5330517->enter($__internal_0ed95c3da892a1657113bc74161880cad0f77995f603c35eecc19618f5330517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Login:login.html.twig"));

        $__internal_163119da7f35963527a7790347f42dc2ddfa4507f023fa8f880ef8eada8eaeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163119da7f35963527a7790347f42dc2ddfa4507f023fa8f880ef8eada8eaeb5->enter($__internal_163119da7f35963527a7790347f42dc2ddfa4507f023fa8f880ef8eada8eaeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Login:login.html.twig"));

        // line 1
        echo "<p>Login Page</p>";
        
        $__internal_0ed95c3da892a1657113bc74161880cad0f77995f603c35eecc19618f5330517->leave($__internal_0ed95c3da892a1657113bc74161880cad0f77995f603c35eecc19618f5330517_prof);

        
        $__internal_163119da7f35963527a7790347f42dc2ddfa4507f023fa8f880ef8eada8eaeb5->leave($__internal_163119da7f35963527a7790347f42dc2ddfa4507f023fa8f880ef8eada8eaeb5_prof);

    }

    public function getTemplateName()
    {
        return "LoginBundle:Login:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Login Page</p>", "LoginBundle:Login:login.html.twig", "C:\\projects\\BusTicketing\\src\\LoginBundle/Resources/views/Login/login.html.twig");
    }
}
