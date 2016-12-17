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
        $__internal_463452763e0c3511d463493407cca387d05267f6cc9bf43b0d6093a98d7d4dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463452763e0c3511d463493407cca387d05267f6cc9bf43b0d6093a98d7d4dd1->enter($__internal_463452763e0c3511d463493407cca387d05267f6cc9bf43b0d6093a98d7d4dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $__internal_b6305d1dd0d486bba6014fddef69c4877cf472c1ce5bba4a9841bf8593aad2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6305d1dd0d486bba6014fddef69c4877cf472c1ce5bba4a9841bf8593aad2aa->enter($__internal_b6305d1dd0d486bba6014fddef69c4877cf472c1ce5bba4a9841bf8593aad2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_463452763e0c3511d463493407cca387d05267f6cc9bf43b0d6093a98d7d4dd1->leave($__internal_463452763e0c3511d463493407cca387d05267f6cc9bf43b0d6093a98d7d4dd1_prof);

        
        $__internal_b6305d1dd0d486bba6014fddef69c4877cf472c1ce5bba4a9841bf8593aad2aa->leave($__internal_b6305d1dd0d486bba6014fddef69c4877cf472c1ce5bba4a9841bf8593aad2aa_prof);

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
