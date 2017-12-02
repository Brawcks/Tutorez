<?php

/* tutorez/tutorez.html.twig */
class __TwigTemplate_6c7dd256b2001dfee72c0bd38f5d25fa1bb9805b0aaa07fc08b0eac7d52ce0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("header.html.twig", "tutorez/tutorez.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d9a07eccaef7488670a876b4def749c02c50abe9cfc0c053ad5e784d713d8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9a07eccaef7488670a876b4def749c02c50abe9cfc0c053ad5e784d713d8ea->enter($__internal_8d9a07eccaef7488670a876b4def749c02c50abe9cfc0c053ad5e784d713d8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tutorez/tutorez.html.twig"));

        $__internal_f9a064089999a4199b044abb53a6ee18e53b106d44101c473cc1b1ed7d70f5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a064089999a4199b044abb53a6ee18e53b106d44101c473cc1b1ed7d70f5f5->enter($__internal_f9a064089999a4199b044abb53a6ee18e53b106d44101c473cc1b1ed7d70f5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tutorez/tutorez.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9a07eccaef7488670a876b4def749c02c50abe9cfc0c053ad5e784d713d8ea->leave($__internal_8d9a07eccaef7488670a876b4def749c02c50abe9cfc0c053ad5e784d713d8ea_prof);

        
        $__internal_f9a064089999a4199b044abb53a6ee18e53b106d44101c473cc1b1ed7d70f5f5->leave($__internal_f9a064089999a4199b044abb53a6ee18e53b106d44101c473cc1b1ed7d70f5f5_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a757276ea9f63e0f6dc94b47f54895284f0c08de441396d6c31a865bb6cf0f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a757276ea9f63e0f6dc94b47f54895284f0c08de441396d6c31a865bb6cf0f8e->enter($__internal_a757276ea9f63e0f6dc94b47f54895284f0c08de441396d6c31a865bb6cf0f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0b700f5564939e5c3766ff3d742fa16aea193bd2f812e76d03a5476b9cfd0ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b700f5564939e5c3766ff3d742fa16aea193bd2f812e76d03a5476b9cfd0ed6->enter($__internal_0b700f5564939e5c3766ff3d742fa16aea193bd2f812e76d03a5476b9cfd0ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "\t\t\t\t<section class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<section class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-8\">
\t\t\t\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t\t\t\t<h1 class=\"mb-4\">Gérer mon compte</h1>

\t\t\t\t\t\t\t\t\t<p class=\"lead\">Vous êtes sur votre tableau de bord. D'ici, vous pouvez gérer l'ensemble de votre compte, prendre contact avec d'autres Tutors, ou encore devenir le Tutor de quelqu'un !</p>

\t\t\t\t\t\t\t\t\t<p class=\"lead\"><a class=\"btn btn-primary btn-lg mt-2\" href=\"#\" role=\"button\">Learn more</a></p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Overview</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown card-title-btn-container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle\" type=\"button\"><em class=\"fa fa-list-ul\"></em> View All</button>

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><em class=\"fa fa-cog\"></em></button>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-search mr-1\"></em> More info</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-thumb-tack mr-1\"></em> Pin Window</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-remove mr-1\"></em> Close Window</a></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">Latest traffic stats</h6>

\t\t\t\t\t\t\t\t\t\t<div class=\"canvas-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Recent Orders</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown card-title-btn-container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle\" type=\"button\"><em class=\"fa fa-list-ul\"></em> View All</button>

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><em class=\"fa fa-cog\"></em></button>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-search mr-1\"></em> More info</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-thumb-tack mr-1\"></em> Pin Window</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-remove mr-1\"></em> Close Window</a></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Order #</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Product</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Customer</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>0001</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Product Name 1</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Customer 1</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Complete</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>0002</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Product Name 2</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Customer 2</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Complete</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>0003</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Product Name 3</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Customer 3</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Processing</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>0004</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Product Name 4</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Customer 4</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Pending</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Articles</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown card-title-btn-container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle\" type=\"button\"><em class=\"fa fa-list-ul\"></em> View All</button>

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><em class=\"fa fa-cog\"></em></button>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-search mr-1\"></em> More info</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-thumb-tack mr-1\"></em> Pin Window</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-remove mr-1\"></em> Close Window</a></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">Latest news</h6>

\t\t\t\t\t\t\t\t\t\t<div class=\"divider\" style=\"margin-top: 1rem;\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"articles-container\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"article border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2 date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"large\">30</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Jun</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Lorem ipsum dolor sit amet</a></h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--End .article-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"article\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2 date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"large\">30</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Jun</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Lorem ipsum dolor sit amet</a></h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--End .article-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"article\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2 date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"large\">30</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Jun</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Lorem ipsum dolor sit amet</a></h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--End .article-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-4\">
\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Top Users</h3>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">Most active this week</h6>

\t\t\t\t\t\t\t\t\t\t<div class=\"user-progress justify-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\" style=\"padding: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/images/profile-pic.jpg"), "html", null, true);
        echo "\" alt=\"profile photo\" class=\"circle profile-photo\" style=\"width: 100%; max-width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pt-1\">Username 1</h6>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 75%\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-label\">75%</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"user-progress justify-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\" style=\"padding: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/images/profile-pic.jpg"), "html", null, true);
        echo "\" alt=\"profile photo\" class=\"circle profile-photo\" style=\"width: 100%; max-width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pt-1\">Username 2</h6>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 50%\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-label\">50%</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"user-progress justify-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\" style=\"padding: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/images/profile-pic.jpg"), "html", null, true);
        echo "\" alt=\"profile photo\" class=\"circle profile-photo\" style=\"width: 100%; max-width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pt-1\">Username 3</h6>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 25%\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-label\">25%</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t\t\t\t\t\t<div id=\"calendar\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Timeline</h3>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">What's coming up</h6>

\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge\"><em class=\"fa fa-camera\"></em></div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"timeline-title mt-2\">Lorem ipsum</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge primary\"><em class=\"fa fa-link\"></em></div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"timeline-title mt-2\">Dolor</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge\"><em class=\"fa fa-paperclip\"></em></div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"timeline-title mt-2\">Sit amet</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Todo List</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown card-title-btn-container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><em class=\"fa fa-cog\"></em></button>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-search mr-1\"></em> More info</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-thumb-tack mr-1\"></em> Pin Window</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-remove mr-1\"></em> Close Window</a></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">A simple checklist</h6>

\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-1\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-1\">Make coffee</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-2\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-2\">Check emails</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-3\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-3\">Reply to Jane</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-4\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-4\">Work on the new design</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-5\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-5\">Get feedback</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer todo-list-footer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" /><span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
\t\t\t\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</main>
\t\t</div>
\t</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"dist/js/bootstrap.min.js\"></script>

    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script>
\t    window.onload = function () {
\tvar chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
\twindow.myLine = new Chart(chart1).Line(lineChartData, {
\tresponsive: true,
\tscaleLineColor: \"rgba(0,0,0,.2)\",
\tscaleGridLineColor: \"rgba(0,0,0,.05)\",
\tscaleFontColor: \"#c5c7cc\"
\t});
};
\t</script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>

\t  </body>
</html>

";
        
        $__internal_0b700f5564939e5c3766ff3d742fa16aea193bd2f812e76d03a5476b9cfd0ed6->leave($__internal_0b700f5564939e5c3766ff3d742fa16aea193bd2f812e76d03a5476b9cfd0ed6_prof);

        
        $__internal_a757276ea9f63e0f6dc94b47f54895284f0c08de441396d6c31a865bb6cf0f8e->leave($__internal_a757276ea9f63e0f6dc94b47f54895284f0c08de441396d6c31a865bb6cf0f8e_prof);

    }

    public function getTemplateName()
    {
        return "tutorez/tutorez.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 398,  469 => 397,  465 => 396,  461 => 395,  457 => 394,  453 => 393,  447 => 390,  293 => 239,  272 => 221,  251 => 203,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'header.html.twig' %}
{% block content %}
\t\t\t\t<section class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<section class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-8\">
\t\t\t\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t\t\t\t<h1 class=\"mb-4\">Gérer mon compte</h1>

\t\t\t\t\t\t\t\t\t<p class=\"lead\">Vous êtes sur votre tableau de bord. D'ici, vous pouvez gérer l'ensemble de votre compte, prendre contact avec d'autres Tutors, ou encore devenir le Tutor de quelqu'un !</p>

\t\t\t\t\t\t\t\t\t<p class=\"lead\"><a class=\"btn btn-primary btn-lg mt-2\" href=\"#\" role=\"button\">Learn more</a></p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Overview</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown card-title-btn-container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle\" type=\"button\"><em class=\"fa fa-list-ul\"></em> View All</button>

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><em class=\"fa fa-cog\"></em></button>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-search mr-1\"></em> More info</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-thumb-tack mr-1\"></em> Pin Window</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-remove mr-1\"></em> Close Window</a></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">Latest traffic stats</h6>

\t\t\t\t\t\t\t\t\t\t<div class=\"canvas-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Recent Orders</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown card-title-btn-container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle\" type=\"button\"><em class=\"fa fa-list-ul\"></em> View All</button>

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><em class=\"fa fa-cog\"></em></button>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-search mr-1\"></em> More info</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-thumb-tack mr-1\"></em> Pin Window</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-remove mr-1\"></em> Close Window</a></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Order #</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Product</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Customer</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>0001</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Product Name 1</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Customer 1</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Complete</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>0002</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Product Name 2</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Customer 2</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Complete</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>0003</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Product Name 3</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Customer 3</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Processing</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>0004</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Product Name 4</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Customer 4</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Pending</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Articles</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown card-title-btn-container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle\" type=\"button\"><em class=\"fa fa-list-ul\"></em> View All</button>

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><em class=\"fa fa-cog\"></em></button>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-search mr-1\"></em> More info</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-thumb-tack mr-1\"></em> Pin Window</a>
\t\t\t\t\t\t\t\t\t\t\t    <a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-remove mr-1\"></em> Close Window</a></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">Latest news</h6>

\t\t\t\t\t\t\t\t\t\t<div class=\"divider\" style=\"margin-top: 1rem;\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"articles-container\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"article border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2 date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"large\">30</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Jun</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Lorem ipsum dolor sit amet</a></h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--End .article-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"article\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2 date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"large\">30</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Jun</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Lorem ipsum dolor sit amet</a></h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--End .article-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"article\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2 date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"large\">30</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Jun</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Lorem ipsum dolor sit amet</a></h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--End .article-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-4\">
\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Top Users</h3>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">Most active this week</h6>

\t\t\t\t\t\t\t\t\t\t<div class=\"user-progress justify-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\" style=\"padding: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/template/images/profile-pic.jpg') }}\" alt=\"profile photo\" class=\"circle profile-photo\" style=\"width: 100%; max-width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pt-1\">Username 1</h6>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 75%\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-label\">75%</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"user-progress justify-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\" style=\"padding: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/template/images/profile-pic.jpg') }}\" alt=\"profile photo\" class=\"circle profile-photo\" style=\"width: 100%; max-width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pt-1\">Username 2</h6>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 50%\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-label\">50%</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"user-progress justify-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\" style=\"padding: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('bundles/template/images/profile-pic.jpg') }}\" alt=\"profile photo\" class=\"circle profile-photo\" style=\"width: 100%; max-width: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"pt-1\">Username 3</h6>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 25%\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-label\">25%</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t\t\t\t\t\t<div id=\"calendar\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Timeline</h3>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">What's coming up</h6>

\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge\"><em class=\"fa fa-camera\"></em></div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"timeline-title mt-2\">Lorem ipsum</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge primary\"><em class=\"fa fa-link\"></em></div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"timeline-title mt-2\">Dolor</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge\"><em class=\"fa fa-paperclip\"></em></div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"timeline-title mt-2\">Sit amet</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Todo List</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown card-title-btn-container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-subtle dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><em class=\"fa fa-cog\"></em></button>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\"><a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-search mr-1\"></em> More info</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-thumb-tack mr-1\"></em> Pin Window</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><em class=\"fa fa-remove mr-1\"></em> Close Window</a></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">A simple checklist</h6>

\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list mt-2\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-1\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-1\">Make coffee</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-2\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-2\">Check emails</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-3\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-3\">Reply to Jane</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-4\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-4\">Work on the new design</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox-5\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-5\">Get feedback</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right action-buttons\"><a href=\"#\" class=\"trash\"><em class=\"fa fa-trash\"></em></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer todo-list-footer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" /><span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
\t\t\t\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</main>
\t\t</div>
\t</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"{{ asset('bundles/template/js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"dist/js/bootstrap.min.js\"></script>

    <script src=\"{{ asset('bundles/template/js/chart.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/chart-data.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/easypiechart.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/easypiechart-data.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/js/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/custom.js') }}\"></script>
    <script>
\t    window.onload = function () {
\tvar chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
\twindow.myLine = new Chart(chart1).Line(lineChartData, {
\tresponsive: true,
\tscaleLineColor: \"rgba(0,0,0,.2)\",
\tscaleGridLineColor: \"rgba(0,0,0,.05)\",
\tscaleFontColor: \"#c5c7cc\"
\t});
};
\t</script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>

\t  </body>
</html>

{% endblock %}
", "tutorez/tutorez.html.twig", "C:\\wamp64\\www\\Tutorez\\app\\Resources\\views\\tutorez\\tutorez.html.twig");
    }
}
