<?php

/* base.html.twig */
class __TwigTemplate_244aea183d53454ce690bc644dc395b1c2cf5a9f8d79e75fc4b08870b766e9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4761b8b188be966b06d076c9d8519f787ce673837978b9a6ee02e69dc04014bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4761b8b188be966b06d076c9d8519f787ce673837978b9a6ee02e69dc04014bd->enter($__internal_4761b8b188be966b06d076c9d8519f787ce673837978b9a6ee02e69dc04014bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4b010ebb81fb8005f1a107dfdda38332043e6fff7b813d04ef130b23a848bc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b010ebb81fb8005f1a107dfdda38332043e6fff7b813d04ef130b23a848bc34->enter($__internal_4b010ebb81fb8005f1a107dfdda38332043e6fff7b813d04ef130b23a848bc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4761b8b188be966b06d076c9d8519f787ce673837978b9a6ee02e69dc04014bd->leave($__internal_4761b8b188be966b06d076c9d8519f787ce673837978b9a6ee02e69dc04014bd_prof);

        
        $__internal_4b010ebb81fb8005f1a107dfdda38332043e6fff7b813d04ef130b23a848bc34->leave($__internal_4b010ebb81fb8005f1a107dfdda38332043e6fff7b813d04ef130b23a848bc34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8e7e25b03d9e21e1abc3c57497d6fbfcee72c8c0b25373b5d65c8b82f977d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e7e25b03d9e21e1abc3c57497d6fbfcee72c8c0b25373b5d65c8b82f977d8d->enter($__internal_e8e7e25b03d9e21e1abc3c57497d6fbfcee72c8c0b25373b5d65c8b82f977d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24072abacf3e843f27e8528b4f561a7508b902fa6b603dd2034ac1f979d23520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24072abacf3e843f27e8528b4f561a7508b902fa6b603dd2034ac1f979d23520->enter($__internal_24072abacf3e843f27e8528b4f561a7508b902fa6b603dd2034ac1f979d23520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_24072abacf3e843f27e8528b4f561a7508b902fa6b603dd2034ac1f979d23520->leave($__internal_24072abacf3e843f27e8528b4f561a7508b902fa6b603dd2034ac1f979d23520_prof);

        
        $__internal_e8e7e25b03d9e21e1abc3c57497d6fbfcee72c8c0b25373b5d65c8b82f977d8d->leave($__internal_e8e7e25b03d9e21e1abc3c57497d6fbfcee72c8c0b25373b5d65c8b82f977d8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afaf13ac7bd84359cab73d9a20a68905fe8d51764fd4203c9ca907588e959937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afaf13ac7bd84359cab73d9a20a68905fe8d51764fd4203c9ca907588e959937->enter($__internal_afaf13ac7bd84359cab73d9a20a68905fe8d51764fd4203c9ca907588e959937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5da1dd297f2cf2ab84201a9e407c522df2a34b13e902e1f92e1526a6cbdd8ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da1dd297f2cf2ab84201a9e407c522df2a34b13e902e1f92e1526a6cbdd8ebb->enter($__internal_5da1dd297f2cf2ab84201a9e407c522df2a34b13e902e1f92e1526a6cbdd8ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5da1dd297f2cf2ab84201a9e407c522df2a34b13e902e1f92e1526a6cbdd8ebb->leave($__internal_5da1dd297f2cf2ab84201a9e407c522df2a34b13e902e1f92e1526a6cbdd8ebb_prof);

        
        $__internal_afaf13ac7bd84359cab73d9a20a68905fe8d51764fd4203c9ca907588e959937->leave($__internal_afaf13ac7bd84359cab73d9a20a68905fe8d51764fd4203c9ca907588e959937_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d21c07b5eb78f00d9d9a17d39d0ddef0e051bf233bbeb2a33ecc0f6adf0849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d21c07b5eb78f00d9d9a17d39d0ddef0e051bf233bbeb2a33ecc0f6adf0849->enter($__internal_d3d21c07b5eb78f00d9d9a17d39d0ddef0e051bf233bbeb2a33ecc0f6adf0849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcd3fa77d850fae1cca46f36f20160d236d433ea5a91c8739b810660240f7589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd3fa77d850fae1cca46f36f20160d236d433ea5a91c8739b810660240f7589->enter($__internal_dcd3fa77d850fae1cca46f36f20160d236d433ea5a91c8739b810660240f7589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dcd3fa77d850fae1cca46f36f20160d236d433ea5a91c8739b810660240f7589->leave($__internal_dcd3fa77d850fae1cca46f36f20160d236d433ea5a91c8739b810660240f7589_prof);

        
        $__internal_d3d21c07b5eb78f00d9d9a17d39d0ddef0e051bf233bbeb2a33ecc0f6adf0849->leave($__internal_d3d21c07b5eb78f00d9d9a17d39d0ddef0e051bf233bbeb2a33ecc0f6adf0849_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1046a491afdb5b313327b7ef349ec07d396f3de0984d498a382ba65ea63b96bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1046a491afdb5b313327b7ef349ec07d396f3de0984d498a382ba65ea63b96bf->enter($__internal_1046a491afdb5b313327b7ef349ec07d396f3de0984d498a382ba65ea63b96bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb290ba23c7cb4627494596d2c5d74fcbd4788fb4cf8db1aa2417570d3c8cf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb290ba23c7cb4627494596d2c5d74fcbd4788fb4cf8db1aa2417570d3c8cf8e->enter($__internal_eb290ba23c7cb4627494596d2c5d74fcbd4788fb4cf8db1aa2417570d3c8cf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb290ba23c7cb4627494596d2c5d74fcbd4788fb4cf8db1aa2417570d3c8cf8e->leave($__internal_eb290ba23c7cb4627494596d2c5d74fcbd4788fb4cf8db1aa2417570d3c8cf8e_prof);

        
        $__internal_1046a491afdb5b313327b7ef349ec07d396f3de0984d498a382ba65ea63b96bf->leave($__internal_1046a491afdb5b313327b7ef349ec07d396f3de0984d498a382ba65ea63b96bf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\projects\\BusTicketing\\app\\Resources\\views\\base.html.twig");
    }
}
