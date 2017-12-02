<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d306f6f2fe6c35f404b707fa3e09fdef0c32ea3bd99a30a8c90ca3c6faa1bcfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4284d4358967b910fb3c411e7f95ed6798105f39f735e92bcf7ad909ddba503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4284d4358967b910fb3c411e7f95ed6798105f39f735e92bcf7ad909ddba503->enter($__internal_e4284d4358967b910fb3c411e7f95ed6798105f39f735e92bcf7ad909ddba503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ec7155ad98876542afd0674cfea4f58eff3a5aede46a98deec8bd6296b9d4bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7155ad98876542afd0674cfea4f58eff3a5aede46a98deec8bd6296b9d4bfd->enter($__internal_ec7155ad98876542afd0674cfea4f58eff3a5aede46a98deec8bd6296b9d4bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4284d4358967b910fb3c411e7f95ed6798105f39f735e92bcf7ad909ddba503->leave($__internal_e4284d4358967b910fb3c411e7f95ed6798105f39f735e92bcf7ad909ddba503_prof);

        
        $__internal_ec7155ad98876542afd0674cfea4f58eff3a5aede46a98deec8bd6296b9d4bfd->leave($__internal_ec7155ad98876542afd0674cfea4f58eff3a5aede46a98deec8bd6296b9d4bfd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70e749dd749ced9980d1f86a919395daffb98b2016c75c6505a28ee15b820150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e749dd749ced9980d1f86a919395daffb98b2016c75c6505a28ee15b820150->enter($__internal_70e749dd749ced9980d1f86a919395daffb98b2016c75c6505a28ee15b820150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_16a8152f9bc59560c96fcf1a81d5ecf8e55fa024cb74efa0f42b22efa5ea2e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a8152f9bc59560c96fcf1a81d5ecf8e55fa024cb74efa0f42b22efa5ea2e31->enter($__internal_16a8152f9bc59560c96fcf1a81d5ecf8e55fa024cb74efa0f42b22efa5ea2e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_16a8152f9bc59560c96fcf1a81d5ecf8e55fa024cb74efa0f42b22efa5ea2e31->leave($__internal_16a8152f9bc59560c96fcf1a81d5ecf8e55fa024cb74efa0f42b22efa5ea2e31_prof);

        
        $__internal_70e749dd749ced9980d1f86a919395daffb98b2016c75c6505a28ee15b820150->leave($__internal_70e749dd749ced9980d1f86a919395daffb98b2016c75c6505a28ee15b820150_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Tutorez\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
