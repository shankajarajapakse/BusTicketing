<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c120c299bdd706415cbee24b443e4c514810d4e8c674bb30d2d263b8c3a4d717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5b66f4bd866e42d647c4204a929ec1a4a514373e5ae853f089b092791b40adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b66f4bd866e42d647c4204a929ec1a4a514373e5ae853f089b092791b40adb->enter($__internal_c5b66f4bd866e42d647c4204a929ec1a4a514373e5ae853f089b092791b40adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3c70a514f04d53152ce81d413c974d21a6ff77c6849a1c2fbe6c13c0e256a195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c70a514f04d53152ce81d413c974d21a6ff77c6849a1c2fbe6c13c0e256a195->enter($__internal_3c70a514f04d53152ce81d413c974d21a6ff77c6849a1c2fbe6c13c0e256a195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b66f4bd866e42d647c4204a929ec1a4a514373e5ae853f089b092791b40adb->leave($__internal_c5b66f4bd866e42d647c4204a929ec1a4a514373e5ae853f089b092791b40adb_prof);

        
        $__internal_3c70a514f04d53152ce81d413c974d21a6ff77c6849a1c2fbe6c13c0e256a195->leave($__internal_3c70a514f04d53152ce81d413c974d21a6ff77c6849a1c2fbe6c13c0e256a195_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b429efec6e0be1d3ec52d2c36df535241058699fba8898b837601ec70900fe91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b429efec6e0be1d3ec52d2c36df535241058699fba8898b837601ec70900fe91->enter($__internal_b429efec6e0be1d3ec52d2c36df535241058699fba8898b837601ec70900fe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97f82f6b26f160bfa13f5624d34b225de9f4be377d3461b2146565f98acb756c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f82f6b26f160bfa13f5624d34b225de9f4be377d3461b2146565f98acb756c->enter($__internal_97f82f6b26f160bfa13f5624d34b225de9f4be377d3461b2146565f98acb756c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_97f82f6b26f160bfa13f5624d34b225de9f4be377d3461b2146565f98acb756c->leave($__internal_97f82f6b26f160bfa13f5624d34b225de9f4be377d3461b2146565f98acb756c_prof);

        
        $__internal_b429efec6e0be1d3ec52d2c36df535241058699fba8898b837601ec70900fe91->leave($__internal_b429efec6e0be1d3ec52d2c36df535241058699fba8898b837601ec70900fe91_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d388239379535d334298357f3b91c340ab2321cf193dbad2546ed8bb54121d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d388239379535d334298357f3b91c340ab2321cf193dbad2546ed8bb54121d8->enter($__internal_9d388239379535d334298357f3b91c340ab2321cf193dbad2546ed8bb54121d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71802f3149add3282acea65e5a6b7b8b47e746745c5caac4a1431937930f73cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71802f3149add3282acea65e5a6b7b8b47e746745c5caac4a1431937930f73cc->enter($__internal_71802f3149add3282acea65e5a6b7b8b47e746745c5caac4a1431937930f73cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_71802f3149add3282acea65e5a6b7b8b47e746745c5caac4a1431937930f73cc->leave($__internal_71802f3149add3282acea65e5a6b7b8b47e746745c5caac4a1431937930f73cc_prof);

        
        $__internal_9d388239379535d334298357f3b91c340ab2321cf193dbad2546ed8bb54121d8->leave($__internal_9d388239379535d334298357f3b91c340ab2321cf193dbad2546ed8bb54121d8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecc98aba093f447f97909cd0a044da3f0898a6f59a2db92953f18fce1c4ecc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc98aba093f447f97909cd0a044da3f0898a6f59a2db92953f18fce1c4ecc4e->enter($__internal_ecc98aba093f447f97909cd0a044da3f0898a6f59a2db92953f18fce1c4ecc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa3a3769c4a33742a0923400b7c0eb1714392e56a72f6e78e6caf758732855be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3a3769c4a33742a0923400b7c0eb1714392e56a72f6e78e6caf758732855be->enter($__internal_aa3a3769c4a33742a0923400b7c0eb1714392e56a72f6e78e6caf758732855be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_aa3a3769c4a33742a0923400b7c0eb1714392e56a72f6e78e6caf758732855be->leave($__internal_aa3a3769c4a33742a0923400b7c0eb1714392e56a72f6e78e6caf758732855be_prof);

        
        $__internal_ecc98aba093f447f97909cd0a044da3f0898a6f59a2db92953f18fce1c4ecc4e->leave($__internal_ecc98aba093f447f97909cd0a044da3f0898a6f59a2db92953f18fce1c4ecc4e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\projects\\BusTicketing\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
