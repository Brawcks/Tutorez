<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60e88f303efece0c4a3823f59869d5343dfdc359c9187f992cb286b575d38abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e88f303efece0c4a3823f59869d5343dfdc359c9187f992cb286b575d38abd->enter($__internal_60e88f303efece0c4a3823f59869d5343dfdc359c9187f992cb286b575d38abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f2942f61e4a7319c7e9bf03765b5508a09a8e15a88c2aecce24711c552684fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2942f61e4a7319c7e9bf03765b5508a09a8e15a88c2aecce24711c552684fef->enter($__internal_f2942f61e4a7319c7e9bf03765b5508a09a8e15a88c2aecce24711c552684fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_60e88f303efece0c4a3823f59869d5343dfdc359c9187f992cb286b575d38abd->leave($__internal_60e88f303efece0c4a3823f59869d5343dfdc359c9187f992cb286b575d38abd_prof);

        
        $__internal_f2942f61e4a7319c7e9bf03765b5508a09a8e15a88c2aecce24711c552684fef->leave($__internal_f2942f61e4a7319c7e9bf03765b5508a09a8e15a88c2aecce24711c552684fef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5ce29111748d83903e924895665b5ac0ce8e62f0574c86e0a17ba976158ac71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ce29111748d83903e924895665b5ac0ce8e62f0574c86e0a17ba976158ac71->enter($__internal_c5ce29111748d83903e924895665b5ac0ce8e62f0574c86e0a17ba976158ac71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df21813248d150f3f8c8d14cae41f20af831aec4dc0aa1e5f4e76dbf173f4f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df21813248d150f3f8c8d14cae41f20af831aec4dc0aa1e5f4e76dbf173f4f3c->enter($__internal_df21813248d150f3f8c8d14cae41f20af831aec4dc0aa1e5f4e76dbf173f4f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df21813248d150f3f8c8d14cae41f20af831aec4dc0aa1e5f4e76dbf173f4f3c->leave($__internal_df21813248d150f3f8c8d14cae41f20af831aec4dc0aa1e5f4e76dbf173f4f3c_prof);

        
        $__internal_c5ce29111748d83903e924895665b5ac0ce8e62f0574c86e0a17ba976158ac71->leave($__internal_c5ce29111748d83903e924895665b5ac0ce8e62f0574c86e0a17ba976158ac71_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a66996fc7191ea1d5ea6f0b09988aeec9c87f043efd0e27660dec8f8fd211a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a66996fc7191ea1d5ea6f0b09988aeec9c87f043efd0e27660dec8f8fd211a3->enter($__internal_5a66996fc7191ea1d5ea6f0b09988aeec9c87f043efd0e27660dec8f8fd211a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_be56092da8ebe30765196c67aa6ca66e7b497a9a70bb58508077e3c12e58aa12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be56092da8ebe30765196c67aa6ca66e7b497a9a70bb58508077e3c12e58aa12->enter($__internal_be56092da8ebe30765196c67aa6ca66e7b497a9a70bb58508077e3c12e58aa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_be56092da8ebe30765196c67aa6ca66e7b497a9a70bb58508077e3c12e58aa12->leave($__internal_be56092da8ebe30765196c67aa6ca66e7b497a9a70bb58508077e3c12e58aa12_prof);

        
        $__internal_5a66996fc7191ea1d5ea6f0b09988aeec9c87f043efd0e27660dec8f8fd211a3->leave($__internal_5a66996fc7191ea1d5ea6f0b09988aeec9c87f043efd0e27660dec8f8fd211a3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd1e85a0971b934b43fc9086fcba0960be1cdca1afbbc074890aac9897354dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1e85a0971b934b43fc9086fcba0960be1cdca1afbbc074890aac9897354dac->enter($__internal_fd1e85a0971b934b43fc9086fcba0960be1cdca1afbbc074890aac9897354dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a40f4b87efb6ce80a0d902580705c24018d9463a19617d80faa30a2ab9b28ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40f4b87efb6ce80a0d902580705c24018d9463a19617d80faa30a2ab9b28ca7->enter($__internal_a40f4b87efb6ce80a0d902580705c24018d9463a19617d80faa30a2ab9b28ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a40f4b87efb6ce80a0d902580705c24018d9463a19617d80faa30a2ab9b28ca7->leave($__internal_a40f4b87efb6ce80a0d902580705c24018d9463a19617d80faa30a2ab9b28ca7_prof);

        
        $__internal_fd1e85a0971b934b43fc9086fcba0960be1cdca1afbbc074890aac9897354dac->leave($__internal_fd1e85a0971b934b43fc9086fcba0960be1cdca1afbbc074890aac9897354dac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dacec3355a984bdc16e40c5ad3fd29df06c2e4c239ff39c34c2b401a1154dabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacec3355a984bdc16e40c5ad3fd29df06c2e4c239ff39c34c2b401a1154dabd->enter($__internal_dacec3355a984bdc16e40c5ad3fd29df06c2e4c239ff39c34c2b401a1154dabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c10c9b5ef552232854796c1ccb375662c4cba422bc1f93a60bc9174064260254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10c9b5ef552232854796c1ccb375662c4cba422bc1f93a60bc9174064260254->enter($__internal_c10c9b5ef552232854796c1ccb375662c4cba422bc1f93a60bc9174064260254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c10c9b5ef552232854796c1ccb375662c4cba422bc1f93a60bc9174064260254->leave($__internal_c10c9b5ef552232854796c1ccb375662c4cba422bc1f93a60bc9174064260254_prof);

        
        $__internal_dacec3355a984bdc16e40c5ad3fd29df06c2e4c239ff39c34c2b401a1154dabd->leave($__internal_dacec3355a984bdc16e40c5ad3fd29df06c2e4c239ff39c34c2b401a1154dabd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Tutorez\\app\\Resources\\views\\base.html.twig");
    }
}
