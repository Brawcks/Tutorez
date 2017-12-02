<?php

/* header.html.twig */
class __TwigTemplate_872ab9ebdfc6c8030757e9a79625b34c66b2ed36ace3ef85d407e08697023f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'titlepage' => array($this, 'block_titlepage'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3919a60b462cde5513165a91f2856d2456eb2626d8c993dd18f10112e52fcbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3919a60b462cde5513165a91f2856d2456eb2626d8c993dd18f10112e52fcbd->enter($__internal_a3919a60b462cde5513165a91f2856d2456eb2626d8c993dd18f10112e52fcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_b0d8095968712e09c1d0d37bbccf8800c5fe3879b87088d0a8826c50a2269e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d8095968712e09c1d0d37bbccf8800c5fe3879b87088d0a8826c50a2269e04->enter($__internal_b0d8095968712e09c1d0d37bbccf8800c5fe3879b87088d0a8826c50a2269e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

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

\t";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">

    <!--Fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Icons -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
\t<div class=\"container-fluid\" id=\"wrapper\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1\">
\t\t\t\t<h1 class=\"site-title\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-rocket\"></em> Tutorez</a></h1>

\t\t\t\t<a href=\"#menu-toggle\" class=\"btn btn-default\" id=\"menu-toggle\"><em class=\"fa fa-bars\"></em></a>

\t\t\t\t<ul class=\"nav nav-pills flex-column sidebar-nav\">
\t\t\t\t\t";
        // line 39
        $this->displayBlock('titlepage', $context, $blocks);
        // line 42
        echo "\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-calendar-o\"></em> Formation</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-bar-chart\"></em> Contacts</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-hand-o-up\"></em> Découvrir</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-clone\"></em> Support</a></li>
\t\t\t\t</ul>

\t\t\t\t<a href=\"#\" class=\"logout-button\"><em class=\"fa fa-power-off\"></em> Déconnexion</a></nav>

\t\t\t<main class=\"col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4\">
\t\t\t\t<header class=\"page-header row justify-center\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-8\" >
\t\t\t\t\t\t<h1 class=\"float-left text-center text-md-left\">Tableau de bord</h1>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right\"><a class=\"btn btn-stripped dropdown-toggle\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mon_compte");
        echo "\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/images/profile-pic.jpg"), "html", null, true);
        echo "\" alt=\"profile photo\" class=\"circle float-left profile-photo\" width=\"50\" height=\"auto\">

\t\t\t\t\t\t<div class=\"username mt-1\">
\t\t\t\t\t\t\t<h4 class=\"mb-1\">Mon compte</h4>

\t\t\t\t\t\t\t<h6 class=\"text-muted\">Brawcks</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</header>
        ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_a3919a60b462cde5513165a91f2856d2456eb2626d8c993dd18f10112e52fcbd->leave($__internal_a3919a60b462cde5513165a91f2856d2456eb2626d8c993dd18f10112e52fcbd_prof);

        
        $__internal_b0d8095968712e09c1d0d37bbccf8800c5fe3879b87088d0a8826c50a2269e04->leave($__internal_b0d8095968712e09c1d0d37bbccf8800c5fe3879b87088d0a8826c50a2269e04_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ff8fc0bc25f284f3f9b1988f82f042eed58bb377efebfc2db8e3b7478e23b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff8fc0bc25f284f3f9b1988f82f042eed58bb377efebfc2db8e3b7478e23b4a->enter($__internal_5ff8fc0bc25f284f3f9b1988f82f042eed58bb377efebfc2db8e3b7478e23b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92170d26ea78a57c5660e077b3056cc78023744f6d336a1346b1e7aee19b732e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92170d26ea78a57c5660e077b3056cc78023744f6d336a1346b1e7aee19b732e->enter($__internal_92170d26ea78a57c5660e077b3056cc78023744f6d336a1346b1e7aee19b732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 15
        echo "\t\t<title>Tutorez - Formation en ligne entre particuliers</title>
\t";
        
        $__internal_92170d26ea78a57c5660e077b3056cc78023744f6d336a1346b1e7aee19b732e->leave($__internal_92170d26ea78a57c5660e077b3056cc78023744f6d336a1346b1e7aee19b732e_prof);

        
        $__internal_5ff8fc0bc25f284f3f9b1988f82f042eed58bb377efebfc2db8e3b7478e23b4a->leave($__internal_5ff8fc0bc25f284f3f9b1988f82f042eed58bb377efebfc2db8e3b7478e23b4a_prof);

    }

    // line 39
    public function block_titlepage($context, array $blocks = array())
    {
        $__internal_6f0aec80ebe54c12286e75ca20f324df595bc0cb3453cb958f99748a823b903b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0aec80ebe54c12286e75ca20f324df595bc0cb3453cb958f99748a823b903b->enter($__internal_6f0aec80ebe54c12286e75ca20f324df595bc0cb3453cb958f99748a823b903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlepage"));

        $__internal_063bbe6a43f09f7f817f38de7fe1c4e7d191a10a58fd507ccfd69b40844e99ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063bbe6a43f09f7f817f38de7fe1c4e7d191a10a58fd507ccfd69b40844e99ca->enter($__internal_063bbe6a43f09f7f817f38de7fe1c4e7d191a10a58fd507ccfd69b40844e99ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlepage"));

        // line 40
        echo "\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link active\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-dashboard\"></em> Tableau de bord <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t";
        
        $__internal_063bbe6a43f09f7f817f38de7fe1c4e7d191a10a58fd507ccfd69b40844e99ca->leave($__internal_063bbe6a43f09f7f817f38de7fe1c4e7d191a10a58fd507ccfd69b40844e99ca_prof);

        
        $__internal_6f0aec80ebe54c12286e75ca20f324df595bc0cb3453cb958f99748a823b903b->leave($__internal_6f0aec80ebe54c12286e75ca20f324df595bc0cb3453cb958f99748a823b903b_prof);

    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        $__internal_e202778ca281790c7a5cccc4c0d09e451615410b87c60000535693fbf4029de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e202778ca281790c7a5cccc4c0d09e451615410b87c60000535693fbf4029de3->enter($__internal_e202778ca281790c7a5cccc4c0d09e451615410b87c60000535693fbf4029de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_99dc86b70ab2afc1b96af86c36f410eae60380efb4865cb175dcca94c79002f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dc86b70ab2afc1b96af86c36f410eae60380efb4865cb175dcca94c79002f3->enter($__internal_99dc86b70ab2afc1b96af86c36f410eae60380efb4865cb175dcca94c79002f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_99dc86b70ab2afc1b96af86c36f410eae60380efb4865cb175dcca94c79002f3->leave($__internal_99dc86b70ab2afc1b96af86c36f410eae60380efb4865cb175dcca94c79002f3_prof);

        
        $__internal_e202778ca281790c7a5cccc4c0d09e451615410b87c60000535693fbf4029de3->leave($__internal_e202778ca281790c7a5cccc4c0d09e451615410b87c60000535693fbf4029de3_prof);

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
        return array (  181 => 69,  168 => 40,  159 => 39,  148 => 15,  139 => 14,  129 => 69,  114 => 57,  110 => 56,  96 => 45,  92 => 44,  88 => 43,  83 => 42,  81 => 39,  73 => 34,  64 => 28,  58 => 25,  48 => 17,  46 => 14,  41 => 12,  28 => 1,);
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
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<meta name=\"description\" content=\"\">

\t<meta name=\"author\" content=\"\">

\t<link rel=\"icon\" href=\"{{ asset('bundles/template/images/favicon.ico') }}\">

\t{% block head %}
\t\t<title>Tutorez - Formation en ligne entre particuliers</title>
\t{% endblock %}

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">

    <!--Fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Icons -->
    <link href=\"{{ asset('bundles/template/css/font-awesome.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('bundles/template/css/style.css') }}\" rel=\"stylesheet\">
</head>
<body>
\t<div class=\"container-fluid\" id=\"wrapper\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1\">
\t\t\t\t<h1 class=\"site-title\"><a href=\"{{ path('accueil') }}\"><em class=\"fa fa-rocket\"></em> Tutorez</a></h1>

\t\t\t\t<a href=\"#menu-toggle\" class=\"btn btn-default\" id=\"menu-toggle\"><em class=\"fa fa-bars\"></em></a>

\t\t\t\t<ul class=\"nav nav-pills flex-column sidebar-nav\">
\t\t\t\t\t{% block titlepage %}
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link active\" href=\"{{ path('accueil') }}\"><em class=\"fa fa-dashboard\"></em> Tableau de bord <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t{% endblock %}
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('accueil') }}\"><em class=\"fa fa-calendar-o\"></em> Formation</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('accueil') }}\"><em class=\"fa fa-bar-chart\"></em> Contacts</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('accueil') }}\"><em class=\"fa fa-hand-o-up\"></em> Découvrir</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('accueil') }}\"><em class=\"fa fa-clone\"></em> Support</a></li>
\t\t\t\t</ul>

\t\t\t\t<a href=\"#\" class=\"logout-button\"><em class=\"fa fa-power-off\"></em> Déconnexion</a></nav>

\t\t\t<main class=\"col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4\">
\t\t\t\t<header class=\"page-header row justify-center\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-8\" >
\t\t\t\t\t\t<h1 class=\"float-left text-center text-md-left\">Tableau de bord</h1>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right\"><a class=\"btn btn-stripped dropdown-toggle\" href=\"{{ path('mon_compte') }}\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t<img src=\"{{ asset('bundles/template/images/profile-pic.jpg') }}\" alt=\"profile photo\" class=\"circle float-left profile-photo\" width=\"50\" height=\"auto\">

\t\t\t\t\t\t<div class=\"username mt-1\">
\t\t\t\t\t\t\t<h4 class=\"mb-1\">Mon compte</h4>

\t\t\t\t\t\t\t<h6 class=\"text-muted\">Brawcks</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</header>
        {% block content %}{% endblock %}
", "header.html.twig", "C:\\wamp64\\www\\Tutorez\\app\\Resources\\views\\header.html.twig");
    }
}
