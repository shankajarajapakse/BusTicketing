<?php

/* OperatorBundle:Default:index.html.twig */
class __TwigTemplate_d7a9bd629594adf9ae2d308e574e69f1ba3afb5afebdf559a0251e07d498a7b9 extends Twig_Template
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
        $__internal_0ccff8071fda4d27a9501d92a0719cf0503d8d01622fb279cf06097a65e4f7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccff8071fda4d27a9501d92a0719cf0503d8d01622fb279cf06097a65e4f7ff->enter($__internal_0ccff8071fda4d27a9501d92a0719cf0503d8d01622fb279cf06097a65e4f7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OperatorBundle:Default:index.html.twig"));

        $__internal_b754d8efd113e767672bc7bea439b3ef50a22b01a02de8493993611eb5bbf64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b754d8efd113e767672bc7bea439b3ef50a22b01a02de8493993611eb5bbf64a->enter($__internal_b754d8efd113e767672bc7bea439b3ef50a22b01a02de8493993611eb5bbf64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OperatorBundle:Default:index.html.twig"));

        // line 1
        echo "<p><b>
    This will be the index page
    </b>
</p>";
        
        $__internal_0ccff8071fda4d27a9501d92a0719cf0503d8d01622fb279cf06097a65e4f7ff->leave($__internal_0ccff8071fda4d27a9501d92a0719cf0503d8d01622fb279cf06097a65e4f7ff_prof);

        
        $__internal_b754d8efd113e767672bc7bea439b3ef50a22b01a02de8493993611eb5bbf64a->leave($__internal_b754d8efd113e767672bc7bea439b3ef50a22b01a02de8493993611eb5bbf64a_prof);

    }

    public function getTemplateName()
    {
        return "OperatorBundle:Default:index.html.twig";
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
        return new Twig_Source("<p><b>
    This will be the index page
    </b>
</p>", "OperatorBundle:Default:index.html.twig", "C:\\projects\\BusTicketing\\src\\OperatorBundle/Resources/views/Default/index.html.twig");
    }
}
