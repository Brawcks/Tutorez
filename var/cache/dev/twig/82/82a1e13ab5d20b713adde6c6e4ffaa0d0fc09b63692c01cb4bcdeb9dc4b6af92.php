<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_48046a43fc42f172dd0feb57ef659ea54dfcb2ed3ef097aecbb96bb7344cd287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48046a43fc42f172dd0feb57ef659ea54dfcb2ed3ef097aecbb96bb7344cd287->enter($__internal_48046a43fc42f172dd0feb57ef659ea54dfcb2ed3ef097aecbb96bb7344cd287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0cc8754ceba5f928c214d12a61a516d880bbfcb92c22fc34b6e7bb6d4a09895c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc8754ceba5f928c214d12a61a516d880bbfcb92c22fc34b6e7bb6d4a09895c->enter($__internal_0cc8754ceba5f928c214d12a61a516d880bbfcb92c22fc34b6e7bb6d4a09895c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48046a43fc42f172dd0feb57ef659ea54dfcb2ed3ef097aecbb96bb7344cd287->leave($__internal_48046a43fc42f172dd0feb57ef659ea54dfcb2ed3ef097aecbb96bb7344cd287_prof);

        
        $__internal_0cc8754ceba5f928c214d12a61a516d880bbfcb92c22fc34b6e7bb6d4a09895c->leave($__internal_0cc8754ceba5f928c214d12a61a516d880bbfcb92c22fc34b6e7bb6d4a09895c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_796bf680a629773fd24ab59683786dea108b6a908dd44a2fbd853da798b16c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796bf680a629773fd24ab59683786dea108b6a908dd44a2fbd853da798b16c61->enter($__internal_796bf680a629773fd24ab59683786dea108b6a908dd44a2fbd853da798b16c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46cb8811d8c4735d7fb7a3459abf7e50a0d2d9042b317911cef18109d73bc0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cb8811d8c4735d7fb7a3459abf7e50a0d2d9042b317911cef18109d73bc0e2->enter($__internal_46cb8811d8c4735d7fb7a3459abf7e50a0d2d9042b317911cef18109d73bc0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_46cb8811d8c4735d7fb7a3459abf7e50a0d2d9042b317911cef18109d73bc0e2->leave($__internal_46cb8811d8c4735d7fb7a3459abf7e50a0d2d9042b317911cef18109d73bc0e2_prof);

        
        $__internal_796bf680a629773fd24ab59683786dea108b6a908dd44a2fbd853da798b16c61->leave($__internal_796bf680a629773fd24ab59683786dea108b6a908dd44a2fbd853da798b16c61_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d44c8143221a51569ed6715db3389eced774f090f5f971d789b1dee0c122a413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44c8143221a51569ed6715db3389eced774f090f5f971d789b1dee0c122a413->enter($__internal_d44c8143221a51569ed6715db3389eced774f090f5f971d789b1dee0c122a413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_de5c58bd6e9ae4b8d4d3ea85526660ea44fa5bb168ff22b6fc086da98240ec66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5c58bd6e9ae4b8d4d3ea85526660ea44fa5bb168ff22b6fc086da98240ec66->enter($__internal_de5c58bd6e9ae4b8d4d3ea85526660ea44fa5bb168ff22b6fc086da98240ec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_de5c58bd6e9ae4b8d4d3ea85526660ea44fa5bb168ff22b6fc086da98240ec66->leave($__internal_de5c58bd6e9ae4b8d4d3ea85526660ea44fa5bb168ff22b6fc086da98240ec66_prof);

        
        $__internal_d44c8143221a51569ed6715db3389eced774f090f5f971d789b1dee0c122a413->leave($__internal_d44c8143221a51569ed6715db3389eced774f090f5f971d789b1dee0c122a413_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f43b39c70821cf6cdec372b97ff9f13c974d9a407718b119822c1dd57154846a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43b39c70821cf6cdec372b97ff9f13c974d9a407718b119822c1dd57154846a->enter($__internal_f43b39c70821cf6cdec372b97ff9f13c974d9a407718b119822c1dd57154846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d658fc0923cf498f40ad59109a905b1d43b47ff81a2246a156d6b1854f4b0380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d658fc0923cf498f40ad59109a905b1d43b47ff81a2246a156d6b1854f4b0380->enter($__internal_d658fc0923cf498f40ad59109a905b1d43b47ff81a2246a156d6b1854f4b0380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d658fc0923cf498f40ad59109a905b1d43b47ff81a2246a156d6b1854f4b0380->leave($__internal_d658fc0923cf498f40ad59109a905b1d43b47ff81a2246a156d6b1854f4b0380_prof);

        
        $__internal_f43b39c70821cf6cdec372b97ff9f13c974d9a407718b119822c1dd57154846a->leave($__internal_f43b39c70821cf6cdec372b97ff9f13c974d9a407718b119822c1dd57154846a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Tutorez\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
