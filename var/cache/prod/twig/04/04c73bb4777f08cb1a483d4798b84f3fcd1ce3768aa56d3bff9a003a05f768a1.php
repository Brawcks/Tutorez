<?php

/* header.html.twig */
class __TwigTemplate_c7d5f1353eef3e16cdcbae1db54c349cb8e62a6151a85bd7b34ff5f3df3775cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<meta name=\"description\" content=\"\">

\t<meta name=\"author\" content=\"\">

\t<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/images/favicon.ico"), "html", null, true);
        echo "\">

\t<title>Medialoot Bootstrap 4 Dashboard Template</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">

    <!--Fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Icons -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
\t<div class=\"container-fluid\" id=\"wrapper\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1\">
\t\t\t\t<h1 class=\"site-title\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-rocket\"></em> Tutorez</a></h1>

\t\t\t\t<a href=\"#menu-toggle\" class=\"btn btn-default\" id=\"menu-toggle\"><em class=\"fa fa-bars\"></em></a>

\t\t\t\t<ul class=\"nav nav-pills flex-column sidebar-nav\">
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link active\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-dashboard\"></em> Tableau de bord <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-calendar-o\"></em> Widgets</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-bar-chart\"></em> Charts</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-hand-o-up\"></em> UI Elements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-clone\"></em> Cards</a></li>
\t\t\t\t</ul>

\t\t\t\t<a href=\"#\" class=\"logout-button\"><em class=\"fa fa-power-off\"></em> Signout</a></nav>

\t\t\t<main class=\"col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4\">
\t\t\t\t<header class=\"page-header row justify-center\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-8\" >
\t\t\t\t\t\t<h1 class=\"float-left text-center text-md-left\">Tableau de bord</h1>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right\"><a class=\"btn btn-stripped dropdown-toggle\" href=\"https://example.com\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/images/profile-pic.jpg"), "html", null, true);
        echo "\" alt=\"profile photo\" class=\"circle float-left profile-photo\" width=\"50\" height=\"auto\">

\t\t\t\t\t\t<div class=\"username mt-1\">
\t\t\t\t\t\t\t<h4 class=\"mb-1\">Username</h4>

\t\t\t\t\t\t\t<h6 class=\"text-muted\">Super Admin</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" style=\"margin-right: 1.5rem;\" aria-labelledby=\"dropdownMenuLink\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-user-circle mr-1\"></em> View Profile</a>
\t\t\t\t\t\t     <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-sliders mr-1\"></em> Preferences</a>
\t\t\t\t\t\t     <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-power-off mr-1\"></em> Logout</a></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</header>
        ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 69,  101 => 53,  86 => 41,  82 => 40,  78 => 39,  74 => 38,  70 => 37,  62 => 32,  53 => 26,  47 => 23,  33 => 12,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.html.twig", "C:\\wamp64\\www\\Tutorez\\app\\Resources\\views\\header.html.twig");
    }
}
