<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c46299704216e1169550fb01a5996de70f9c8ac90fd0d3126f8e51f4a9c0390a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46299704216e1169550fb01a5996de70f9c8ac90fd0d3126f8e51f4a9c0390a->enter($__internal_c46299704216e1169550fb01a5996de70f9c8ac90fd0d3126f8e51f4a9c0390a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_229d28c674febc5e57caaadf762d40e6cbdbabae17f1640d9a47bb5815480be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229d28c674febc5e57caaadf762d40e6cbdbabae17f1640d9a47bb5815480be9->enter($__internal_229d28c674febc5e57caaadf762d40e6cbdbabae17f1640d9a47bb5815480be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c46299704216e1169550fb01a5996de70f9c8ac90fd0d3126f8e51f4a9c0390a->leave($__internal_c46299704216e1169550fb01a5996de70f9c8ac90fd0d3126f8e51f4a9c0390a_prof);

        
        $__internal_229d28c674febc5e57caaadf762d40e6cbdbabae17f1640d9a47bb5815480be9->leave($__internal_229d28c674febc5e57caaadf762d40e6cbdbabae17f1640d9a47bb5815480be9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8491cdfead279736a23f6f112d374f6c70492be17c9508632246c0a10a163a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8491cdfead279736a23f6f112d374f6c70492be17c9508632246c0a10a163a80->enter($__internal_8491cdfead279736a23f6f112d374f6c70492be17c9508632246c0a10a163a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22436a7568156917ee36e64e0614bc96cf045375157130327b3c330210d95010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22436a7568156917ee36e64e0614bc96cf045375157130327b3c330210d95010->enter($__internal_22436a7568156917ee36e64e0614bc96cf045375157130327b3c330210d95010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_22436a7568156917ee36e64e0614bc96cf045375157130327b3c330210d95010->leave($__internal_22436a7568156917ee36e64e0614bc96cf045375157130327b3c330210d95010_prof);

        
        $__internal_8491cdfead279736a23f6f112d374f6c70492be17c9508632246c0a10a163a80->leave($__internal_8491cdfead279736a23f6f112d374f6c70492be17c9508632246c0a10a163a80_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7f546c91e1d0cdb6016a91d82bd4e82711ec2befe34d1baa5ff9bceb5ad1eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f546c91e1d0cdb6016a91d82bd4e82711ec2befe34d1baa5ff9bceb5ad1eba->enter($__internal_d7f546c91e1d0cdb6016a91d82bd4e82711ec2befe34d1baa5ff9bceb5ad1eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4cf2fbf0309d2e5494722125b38c40991f30d2b62ff99fe2fc42d5a9dcd29348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf2fbf0309d2e5494722125b38c40991f30d2b62ff99fe2fc42d5a9dcd29348->enter($__internal_4cf2fbf0309d2e5494722125b38c40991f30d2b62ff99fe2fc42d5a9dcd29348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4cf2fbf0309d2e5494722125b38c40991f30d2b62ff99fe2fc42d5a9dcd29348->leave($__internal_4cf2fbf0309d2e5494722125b38c40991f30d2b62ff99fe2fc42d5a9dcd29348_prof);

        
        $__internal_d7f546c91e1d0cdb6016a91d82bd4e82711ec2befe34d1baa5ff9bceb5ad1eba->leave($__internal_d7f546c91e1d0cdb6016a91d82bd4e82711ec2befe34d1baa5ff9bceb5ad1eba_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2e8fc984e92e6855c136bcc8dc1de47bc718a02688da78c9aea76667105b294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e8fc984e92e6855c136bcc8dc1de47bc718a02688da78c9aea76667105b294->enter($__internal_b2e8fc984e92e6855c136bcc8dc1de47bc718a02688da78c9aea76667105b294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e938ddf0fa8f20abab6c802e47c0f851c7e32d059ff51681275c2db5761b0ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e938ddf0fa8f20abab6c802e47c0f851c7e32d059ff51681275c2db5761b0ae6->enter($__internal_e938ddf0fa8f20abab6c802e47c0f851c7e32d059ff51681275c2db5761b0ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e938ddf0fa8f20abab6c802e47c0f851c7e32d059ff51681275c2db5761b0ae6->leave($__internal_e938ddf0fa8f20abab6c802e47c0f851c7e32d059ff51681275c2db5761b0ae6_prof);

        
        $__internal_b2e8fc984e92e6855c136bcc8dc1de47bc718a02688da78c9aea76667105b294->leave($__internal_b2e8fc984e92e6855c136bcc8dc1de47bc718a02688da78c9aea76667105b294_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Tutorez\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
