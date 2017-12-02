<?php

/* mon_compte/mon_compte.html.twig */
class __TwigTemplate_bd89898b36d3119796b72ce8939681de0353202b6c620e6013a38d95cde80278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("header.html.twig", "mon_compte/mon_compte.html.twig", 1);
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
        $__internal_68ddc3414bc2b61f7cdf050d9acffdd38c221dfbdc5342fab3c96751702a24a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ddc3414bc2b61f7cdf050d9acffdd38c221dfbdc5342fab3c96751702a24a1->enter($__internal_68ddc3414bc2b61f7cdf050d9acffdd38c221dfbdc5342fab3c96751702a24a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mon_compte/mon_compte.html.twig"));

        $__internal_bf28360fe4795f9fcc6c388f6ab7e30a1cb88740561faff03feb5cb92f765b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf28360fe4795f9fcc6c388f6ab7e30a1cb88740561faff03feb5cb92f765b34->enter($__internal_bf28360fe4795f9fcc6c388f6ab7e30a1cb88740561faff03feb5cb92f765b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mon_compte/mon_compte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ddc3414bc2b61f7cdf050d9acffdd38c221dfbdc5342fab3c96751702a24a1->leave($__internal_68ddc3414bc2b61f7cdf050d9acffdd38c221dfbdc5342fab3c96751702a24a1_prof);

        
        $__internal_bf28360fe4795f9fcc6c388f6ab7e30a1cb88740561faff03feb5cb92f765b34->leave($__internal_bf28360fe4795f9fcc6c388f6ab7e30a1cb88740561faff03feb5cb92f765b34_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b31ea3814fa8c69eaa8e7987250f6eabd8d4fa9d8e2a86cf22db20cd9e759ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31ea3814fa8c69eaa8e7987250f6eabd8d4fa9d8e2a86cf22db20cd9e759ea7->enter($__internal_b31ea3814fa8c69eaa8e7987250f6eabd8d4fa9d8e2a86cf22db20cd9e759ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c4a5b62dcc0cce2deb1bc9415d7bdeafb17e38099ec8031a0ece6c3c119ca625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a5b62dcc0cce2deb1bc9415d7bdeafb17e38099ec8031a0ece6c3c119ca625->enter($__internal_c4a5b62dcc0cce2deb1bc9415d7bdeafb17e38099ec8031a0ece6c3c119ca625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/bootstrap-datepicker.js"), "html", null, true);
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
        
        $__internal_c4a5b62dcc0cce2deb1bc9415d7bdeafb17e38099ec8031a0ece6c3c119ca625->leave($__internal_c4a5b62dcc0cce2deb1bc9415d7bdeafb17e38099ec8031a0ece6c3c119ca625_prof);

        
        $__internal_b31ea3814fa8c69eaa8e7987250f6eabd8d4fa9d8e2a86cf22db20cd9e759ea7->leave($__internal_b31ea3814fa8c69eaa8e7987250f6eabd8d4fa9d8e2a86cf22db20cd9e759ea7_prof);

    }

    public function getTemplateName()
    {
        return "mon_compte/mon_compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 398,  472 => 397,  468 => 396,  464 => 395,  460 => 394,  456 => 393,  451 => 391,  447 => 390,  293 => 239,  272 => 221,  251 => 203,  49 => 3,  40 => 2,  11 => 1,);
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
    <script src=\"{{ asset('bundles/template/dist/js/bootstrap.min.js') }}\"></script>

    <script src=\"{{ asset('bundles/template/js/chart.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/chart-data.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/easypiechart.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/easypiechart-data.js') }}\"></script>
    <script src=\"{{ asset('bundles/template/js/bootstrap-datepicker.js') }}\"></script>
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
", "mon_compte/mon_compte.html.twig", "C:\\wamp64\\www\\Tutorez\\app\\Resources\\views\\mon_compte\\mon_compte.html.twig");
    }
}
