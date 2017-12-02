<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6ef455169a4d6c3557b0cbae989fc1cd7d5e9831e18fa24f3b3fae6b4f4a044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ef455169a4d6c3557b0cbae989fc1cd7d5e9831e18fa24f3b3fae6b4f4a044->enter($__internal_c6ef455169a4d6c3557b0cbae989fc1cd7d5e9831e18fa24f3b3fae6b4f4a044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f38f28e498f245e387bc474d48ad76f950403dae08632acf10d7c3ee2eeca4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38f28e498f245e387bc474d48ad76f950403dae08632acf10d7c3ee2eeca4ad->enter($__internal_f38f28e498f245e387bc474d48ad76f950403dae08632acf10d7c3ee2eeca4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ef455169a4d6c3557b0cbae989fc1cd7d5e9831e18fa24f3b3fae6b4f4a044->leave($__internal_c6ef455169a4d6c3557b0cbae989fc1cd7d5e9831e18fa24f3b3fae6b4f4a044_prof);

        
        $__internal_f38f28e498f245e387bc474d48ad76f950403dae08632acf10d7c3ee2eeca4ad->leave($__internal_f38f28e498f245e387bc474d48ad76f950403dae08632acf10d7c3ee2eeca4ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7dcd226ad702f33d9ff257d346896b5aa2bf50a97faec71519400133d710e3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcd226ad702f33d9ff257d346896b5aa2bf50a97faec71519400133d710e3dc->enter($__internal_7dcd226ad702f33d9ff257d346896b5aa2bf50a97faec71519400133d710e3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60f2254ac008317090aa943d7a5f531afaf3257b7f4f5ffd1c749bb11173a47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f2254ac008317090aa943d7a5f531afaf3257b7f4f5ffd1c749bb11173a47c->enter($__internal_60f2254ac008317090aa943d7a5f531afaf3257b7f4f5ffd1c749bb11173a47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60f2254ac008317090aa943d7a5f531afaf3257b7f4f5ffd1c749bb11173a47c->leave($__internal_60f2254ac008317090aa943d7a5f531afaf3257b7f4f5ffd1c749bb11173a47c_prof);

        
        $__internal_7dcd226ad702f33d9ff257d346896b5aa2bf50a97faec71519400133d710e3dc->leave($__internal_7dcd226ad702f33d9ff257d346896b5aa2bf50a97faec71519400133d710e3dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e00df2890b332cd184a43206f3215f9dffd6a8fbf478ced0f89b30500d1a224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e00df2890b332cd184a43206f3215f9dffd6a8fbf478ced0f89b30500d1a224->enter($__internal_5e00df2890b332cd184a43206f3215f9dffd6a8fbf478ced0f89b30500d1a224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_057536c97f01d9178962fbfa1880c508c6d32322475713dd910b9cf2e81eb448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057536c97f01d9178962fbfa1880c508c6d32322475713dd910b9cf2e81eb448->enter($__internal_057536c97f01d9178962fbfa1880c508c6d32322475713dd910b9cf2e81eb448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_057536c97f01d9178962fbfa1880c508c6d32322475713dd910b9cf2e81eb448->leave($__internal_057536c97f01d9178962fbfa1880c508c6d32322475713dd910b9cf2e81eb448_prof);

        
        $__internal_5e00df2890b332cd184a43206f3215f9dffd6a8fbf478ced0f89b30500d1a224->leave($__internal_5e00df2890b332cd184a43206f3215f9dffd6a8fbf478ced0f89b30500d1a224_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee90a92a133ad3664f96c6bd7992ec590fd9a9b3f24569d513a7bece004a78b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee90a92a133ad3664f96c6bd7992ec590fd9a9b3f24569d513a7bece004a78b5->enter($__internal_ee90a92a133ad3664f96c6bd7992ec590fd9a9b3f24569d513a7bece004a78b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bea99d4f8912f4c56f04944706b8ac5031aec145ca863879f18c836df3d308b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea99d4f8912f4c56f04944706b8ac5031aec145ca863879f18c836df3d308b2->enter($__internal_bea99d4f8912f4c56f04944706b8ac5031aec145ca863879f18c836df3d308b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bea99d4f8912f4c56f04944706b8ac5031aec145ca863879f18c836df3d308b2->leave($__internal_bea99d4f8912f4c56f04944706b8ac5031aec145ca863879f18c836df3d308b2_prof);

        
        $__internal_ee90a92a133ad3664f96c6bd7992ec590fd9a9b3f24569d513a7bece004a78b5->leave($__internal_ee90a92a133ad3664f96c6bd7992ec590fd9a9b3f24569d513a7bece004a78b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Tutorez\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
