<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_986b07326566b27c8e58f573d850776d539764baf907f83943079831ac08ba27 extends Twig_Template
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
        $__internal_7597bae332830c2fd5268275cdc3568fc4d909af5995b44ff47cb04af7684914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7597bae332830c2fd5268275cdc3568fc4d909af5995b44ff47cb04af7684914->enter($__internal_7597bae332830c2fd5268275cdc3568fc4d909af5995b44ff47cb04af7684914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $__internal_0f91a88334b5b2360b0a9d998e603db2a81b0c7bc43fde14ae3c7fd8eb04e666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f91a88334b5b2360b0a9d998e603db2a81b0c7bc43fde14ae3c7fd8eb04e666->enter($__internal_0f91a88334b5b2360b0a9d998e603db2a81b0c7bc43fde14ae3c7fd8eb04e666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_7597bae332830c2fd5268275cdc3568fc4d909af5995b44ff47cb04af7684914->leave($__internal_7597bae332830c2fd5268275cdc3568fc4d909af5995b44ff47cb04af7684914_prof);

        
        $__internal_0f91a88334b5b2360b0a9d998e603db2a81b0c7bc43fde14ae3c7fd8eb04e666->leave($__internal_0f91a88334b5b2360b0a9d998e603db2a81b0c7bc43fde14ae3c7fd8eb04e666_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AdminBundle:Default:index.html.twig", "C:\\projects\\BusTicketing\\src\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
