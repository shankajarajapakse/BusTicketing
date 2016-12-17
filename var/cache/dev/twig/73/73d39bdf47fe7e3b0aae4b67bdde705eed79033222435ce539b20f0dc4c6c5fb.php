<?php

/* LoginBundle:Default:index.html.twig */
class __TwigTemplate_4739cf7c005b1a22e0478a038acf6939b0ec153382adda117e8c2b164078ea33 extends Twig_Template
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
        $__internal_b0b33fa0160ef7466694b4e358c9adf6edf2039d593bd7473e6c63c2e6f709a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b33fa0160ef7466694b4e358c9adf6edf2039d593bd7473e6c63c2e6f709a1->enter($__internal_b0b33fa0160ef7466694b4e358c9adf6edf2039d593bd7473e6c63c2e6f709a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:index.html.twig"));

        $__internal_51ba0cde907295dce17d92f00de8a231c36a2367592ed506e2684bbecb7d6dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ba0cde907295dce17d92f00de8a231c36a2367592ed506e2684bbecb7d6dd1->enter($__internal_51ba0cde907295dce17d92f00de8a231c36a2367592ed506e2684bbecb7d6dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<head>
    <link rel=\"title icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
    <!-- Bootstrap -->
    <link href = \"//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\" rel = \"stylesheet\">
    <title>Online Bus Ticketing</title>
    <link rel=\"title icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
    <!-- Bootstrap -->

    <link rel=\"stylesheet\" href=\"styles.css\">
</head>
<body id=\"bgbody\">
<div class=\"container\">
    <div class=\"jumbotron\">
        <h1>Online Bus Ticketing</h1>
        <p>Book a Bus Ticket for your long journey with an ease.</p>
    </div>


    <a href=\"routelist.html\"><button type=\"submit\" class=\"btn btn-primary\">Routes</button></a><br>

    <form class=\"navbar-form navbar-left right jumbotron\" role=\"search\">
        <div class=\"form-group\">
            <p>Memebers Log in</p>
            <br><input type=\"text\" class=\"form-control\" placeholder=\"Username\"><br>
            <br><input type=\"password\" class=\"form-control\" placeholder=\"Password\"><br>
        </div>
        <div>
            <br><button type=\"submit\" class=\"btn btn-primary\">Login</button><br>
        </div>
    </form>

</div>

</body>
</html>";
        
        $__internal_b0b33fa0160ef7466694b4e358c9adf6edf2039d593bd7473e6c63c2e6f709a1->leave($__internal_b0b33fa0160ef7466694b4e358c9adf6edf2039d593bd7473e6c63c2e6f709a1_prof);

        
        $__internal_51ba0cde907295dce17d92f00de8a231c36a2367592ed506e2684bbecb7d6dd1->leave($__internal_51ba0cde907295dce17d92f00de8a231c36a2367592ed506e2684bbecb7d6dd1_prof);

    }

    public function getTemplateName()
    {
        return "LoginBundle:Default:index.html.twig";
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
        return new Twig_Source("<html>
<head>
    <link rel=\"title icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
    <!-- Bootstrap -->
    <link href = \"//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\" rel = \"stylesheet\">
    <title>Online Bus Ticketing</title>
    <link rel=\"title icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
    <!-- Bootstrap -->

    <link rel=\"stylesheet\" href=\"styles.css\">
</head>
<body id=\"bgbody\">
<div class=\"container\">
    <div class=\"jumbotron\">
        <h1>Online Bus Ticketing</h1>
        <p>Book a Bus Ticket for your long journey with an ease.</p>
    </div>


    <a href=\"routelist.html\"><button type=\"submit\" class=\"btn btn-primary\">Routes</button></a><br>

    <form class=\"navbar-form navbar-left right jumbotron\" role=\"search\">
        <div class=\"form-group\">
            <p>Memebers Log in</p>
            <br><input type=\"text\" class=\"form-control\" placeholder=\"Username\"><br>
            <br><input type=\"password\" class=\"form-control\" placeholder=\"Password\"><br>
        </div>
        <div>
            <br><button type=\"submit\" class=\"btn btn-primary\">Login</button><br>
        </div>
    </form>

</div>

</body>
</html>", "LoginBundle:Default:index.html.twig", "C:\\projects\\BusTicketing\\src\\LoginBundle/Resources/views/Default/index.html.twig");
    }
}
