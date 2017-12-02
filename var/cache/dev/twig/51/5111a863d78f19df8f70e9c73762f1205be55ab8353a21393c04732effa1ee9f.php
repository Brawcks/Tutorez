<?php

/* accueil/accueil.html.twig */
class __TwigTemplate_367598d17fc3b5e27da3747dbfa1df4b196c26ccae49dde5dd879c42f6c1f9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("header.html.twig", "accueil/accueil.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'titlepage' => array($this, 'block_titlepage'),
            'body' => array($this, 'block_body'),
            'teachers' => array($this, 'block_teachers'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27e31343554c41d6add9bf0209eaa1e4598f5031a9ef36888321adb302dffcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e31343554c41d6add9bf0209eaa1e4598f5031a9ef36888321adb302dffcae->enter($__internal_27e31343554c41d6add9bf0209eaa1e4598f5031a9ef36888321adb302dffcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/accueil.html.twig"));

        $__internal_c86c1b219fda7e0db4dcd999fcc41392e93b40086b1be2047042126e9cd47c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86c1b219fda7e0db4dcd999fcc41392e93b40086b1be2047042126e9cd47c72->enter($__internal_c86c1b219fda7e0db4dcd999fcc41392e93b40086b1be2047042126e9cd47c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e31343554c41d6add9bf0209eaa1e4598f5031a9ef36888321adb302dffcae->leave($__internal_27e31343554c41d6add9bf0209eaa1e4598f5031a9ef36888321adb302dffcae_prof);

        
        $__internal_c86c1b219fda7e0db4dcd999fcc41392e93b40086b1be2047042126e9cd47c72->leave($__internal_c86c1b219fda7e0db4dcd999fcc41392e93b40086b1be2047042126e9cd47c72_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_a20cbfed0f3a326c54aca78b657a1667da1adc5ff23309bb671827f40ece2cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20cbfed0f3a326c54aca78b657a1667da1adc5ff23309bb671827f40ece2cfb->enter($__internal_a20cbfed0f3a326c54aca78b657a1667da1adc5ff23309bb671827f40ece2cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6db0a1c5c13d49eef38858a36a6bee2eb23aaed6c9db991a12685212db2cec64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db0a1c5c13d49eef38858a36a6bee2eb23aaed6c9db991a12685212db2cec64->enter($__internal_6db0a1c5c13d49eef38858a36a6bee2eb23aaed6c9db991a12685212db2cec64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "  <title>Accueil - Tutorez</title> 
";
        
        $__internal_6db0a1c5c13d49eef38858a36a6bee2eb23aaed6c9db991a12685212db2cec64->leave($__internal_6db0a1c5c13d49eef38858a36a6bee2eb23aaed6c9db991a12685212db2cec64_prof);

        
        $__internal_a20cbfed0f3a326c54aca78b657a1667da1adc5ff23309bb671827f40ece2cfb->leave($__internal_a20cbfed0f3a326c54aca78b657a1667da1adc5ff23309bb671827f40ece2cfb_prof);

    }

    // line 5
    public function block_titlepage($context, array $blocks = array())
    {
        $__internal_53d2e3d89be364671260de978199f4554fa38ad005d9d1660da2be4b12c50f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d2e3d89be364671260de978199f4554fa38ad005d9d1660da2be4b12c50f4f->enter($__internal_53d2e3d89be364671260de978199f4554fa38ad005d9d1660da2be4b12c50f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlepage"));

        $__internal_25e037302660db839e14812bdc1a8912208ade0cb0749a8fdc11a53f9024a45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e037302660db839e14812bdc1a8912208ade0cb0749a8fdc11a53f9024a45a->enter($__internal_25e037302660db839e14812bdc1a8912208ade0cb0749a8fdc11a53f9024a45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlepage"));

        // line 6
        echo "\t<li class=\"nav-item\"><a class=\"nav-link active\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\"><em class=\"fa fa-dashboard\"></em> Accueil <span class=\"sr-only\">(current)</span></a></li>
";
        
        $__internal_25e037302660db839e14812bdc1a8912208ade0cb0749a8fdc11a53f9024a45a->leave($__internal_25e037302660db839e14812bdc1a8912208ade0cb0749a8fdc11a53f9024a45a_prof);

        
        $__internal_53d2e3d89be364671260de978199f4554fa38ad005d9d1660da2be4b12c50f4f->leave($__internal_53d2e3d89be364671260de978199f4554fa38ad005d9d1660da2be4b12c50f4f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_897c3843d14029c1adb997f28d88292f8aba26df856ce683e3363febf5c0025b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897c3843d14029c1adb997f28d88292f8aba26df856ce683e3363febf5c0025b->enter($__internal_897c3843d14029c1adb997f28d88292f8aba26df856ce683e3363febf5c0025b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e744161581fe74c0d75475be70de650861395714847dd627dccbac651be2835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e744161581fe74c0d75475be70de650861395714847dd627dccbac651be2835->enter($__internal_5e744161581fe74c0d75475be70de650861395714847dd627dccbac651be2835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <h1>Bienvenue sur Tutorez, le site de partage de connaissance et de savoir-faire !</h1>
  <p>Le site est en construction !</p>
";
        
        $__internal_5e744161581fe74c0d75475be70de650861395714847dd627dccbac651be2835->leave($__internal_5e744161581fe74c0d75475be70de650861395714847dd627dccbac651be2835_prof);

        
        $__internal_897c3843d14029c1adb997f28d88292f8aba26df856ce683e3363febf5c0025b->leave($__internal_897c3843d14029c1adb997f28d88292f8aba26df856ce683e3363febf5c0025b_prof);

    }

    // line 12
    public function block_teachers($context, array $blocks = array())
    {
        $__internal_041ccabb62ebbae2df73f7d3588d5beec38fef3688a7f38f819a504d6d9eab4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041ccabb62ebbae2df73f7d3588d5beec38fef3688a7f38f819a504d6d9eab4d->enter($__internal_041ccabb62ebbae2df73f7d3588d5beec38fef3688a7f38f819a504d6d9eab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "teachers"));

        $__internal_efb3f9f9bb1a5eccc76b361c27089710b5940da1b44ede46c046fb1719d6be0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb3f9f9bb1a5eccc76b361c27089710b5940da1b44ede46c046fb1719d6be0d->enter($__internal_efb3f9f9bb1a5eccc76b361c27089710b5940da1b44ede46c046fb1719d6be0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "teachers"));

        // line 13
        echo "  <h2>Voici les professeurs disponibles !</h2>
  <ul>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["professeurs"] ?? $this->getContext($context, "professeurs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["professeur"]) {
            // line 16
            echo "      ";
            echo twig_include($this->env, $context, "accueil/teachers.html.twig", array("professeurs" => ($context["professeurs"] ?? $this->getContext($context, "professeurs"))));
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['professeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </ul>
";
        
        $__internal_efb3f9f9bb1a5eccc76b361c27089710b5940da1b44ede46c046fb1719d6be0d->leave($__internal_efb3f9f9bb1a5eccc76b361c27089710b5940da1b44ede46c046fb1719d6be0d_prof);

        
        $__internal_041ccabb62ebbae2df73f7d3588d5beec38fef3688a7f38f819a504d6d9eab4d->leave($__internal_041ccabb62ebbae2df73f7d3588d5beec38fef3688a7f38f819a504d6d9eab4d_prof);

    }

    public function getTemplateName()
    {
        return "accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 18,  136 => 16,  119 => 15,  115 => 13,  106 => 12,  94 => 9,  85 => 8,  72 => 6,  63 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
{% block head %}
  <title>Accueil - Tutorez</title> 
{% endblock %}
{% block titlepage %}
\t<li class=\"nav-item\"><a class=\"nav-link active\" href=\"{{ path('accueil') }}\"><em class=\"fa fa-dashboard\"></em> Accueil <span class=\"sr-only\">(current)</span></a></li>
{% endblock %}
{% block body %}
  <h1>Bienvenue sur Tutorez, le site de partage de connaissance et de savoir-faire !</h1>
  <p>Le site est en construction !</p>
{% endblock %}
{% block teachers %}
  <h2>Voici les professeurs disponibles !</h2>
  <ul>
    {% for professeur in professeurs %}
      {{ include ('accueil/teachers.html.twig', { 'professeurs': professeurs}) }}
    {% endfor %}
  </ul>
{% endblock %}
", "accueil/accueil.html.twig", "C:\\wamp64\\www\\Tutorez\\app\\Resources\\views\\accueil\\accueil.html.twig");
    }
}
