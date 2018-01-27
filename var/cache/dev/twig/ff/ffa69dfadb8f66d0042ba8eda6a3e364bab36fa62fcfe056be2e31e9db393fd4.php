<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
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
        $__internal_2e5614e13d5523ec8bd39e9289e2cc279022f292d95e1619d345c7b0506feb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5614e13d5523ec8bd39e9289e2cc279022f292d95e1619d345c7b0506feb47->enter($__internal_2e5614e13d5523ec8bd39e9289e2cc279022f292d95e1619d345c7b0506feb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_83d4f9525760fd480a66a1a7a56c83a987797966f81605d9b4593918f04d34b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d4f9525760fd480a66a1a7a56c83a987797966f81605d9b4593918f04d34b1->enter($__internal_83d4f9525760fd480a66a1a7a56c83a987797966f81605d9b4593918f04d34b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2e5614e13d5523ec8bd39e9289e2cc279022f292d95e1619d345c7b0506feb47->leave($__internal_2e5614e13d5523ec8bd39e9289e2cc279022f292d95e1619d345c7b0506feb47_prof);

        
        $__internal_83d4f9525760fd480a66a1a7a56c83a987797966f81605d9b4593918f04d34b1->leave($__internal_83d4f9525760fd480a66a1a7a56c83a987797966f81605d9b4593918f04d34b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f184e832e47226d5d3a5c29813df17fc743ae1af877b773d2ccf09305be8e61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f184e832e47226d5d3a5c29813df17fc743ae1af877b773d2ccf09305be8e61a->enter($__internal_f184e832e47226d5d3a5c29813df17fc743ae1af877b773d2ccf09305be8e61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73fae81ee9df365ce547d4c8a3a292711d3a3dd8b7f2d21fa25bf46ea4992bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fae81ee9df365ce547d4c8a3a292711d3a3dd8b7f2d21fa25bf46ea4992bef->enter($__internal_73fae81ee9df365ce547d4c8a3a292711d3a3dd8b7f2d21fa25bf46ea4992bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_73fae81ee9df365ce547d4c8a3a292711d3a3dd8b7f2d21fa25bf46ea4992bef->leave($__internal_73fae81ee9df365ce547d4c8a3a292711d3a3dd8b7f2d21fa25bf46ea4992bef_prof);

        
        $__internal_f184e832e47226d5d3a5c29813df17fc743ae1af877b773d2ccf09305be8e61a->leave($__internal_f184e832e47226d5d3a5c29813df17fc743ae1af877b773d2ccf09305be8e61a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_af45c3becd4107768ace9aa173ac2f308142de1f64eac098d3522872527dee15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af45c3becd4107768ace9aa173ac2f308142de1f64eac098d3522872527dee15->enter($__internal_af45c3becd4107768ace9aa173ac2f308142de1f64eac098d3522872527dee15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b91e87e5d4002ddd0f0eb28f15d9dc87a97ea22c0a96ecdeb3bd5aad89ce8163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91e87e5d4002ddd0f0eb28f15d9dc87a97ea22c0a96ecdeb3bd5aad89ce8163->enter($__internal_b91e87e5d4002ddd0f0eb28f15d9dc87a97ea22c0a96ecdeb3bd5aad89ce8163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b91e87e5d4002ddd0f0eb28f15d9dc87a97ea22c0a96ecdeb3bd5aad89ce8163->leave($__internal_b91e87e5d4002ddd0f0eb28f15d9dc87a97ea22c0a96ecdeb3bd5aad89ce8163_prof);

        
        $__internal_af45c3becd4107768ace9aa173ac2f308142de1f64eac098d3522872527dee15->leave($__internal_af45c3becd4107768ace9aa173ac2f308142de1f64eac098d3522872527dee15_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_394a0aac1c387605b5bc5c7fe52a7ed40c5d5153e97c39114248864b5ee7bc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394a0aac1c387605b5bc5c7fe52a7ed40c5d5153e97c39114248864b5ee7bc53->enter($__internal_394a0aac1c387605b5bc5c7fe52a7ed40c5d5153e97c39114248864b5ee7bc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc50858531a5cd2860ebbcfa3820669b4dda848aa72b0172617b1449f7d12fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc50858531a5cd2860ebbcfa3820669b4dda848aa72b0172617b1449f7d12fbe->enter($__internal_dc50858531a5cd2860ebbcfa3820669b4dda848aa72b0172617b1449f7d12fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc50858531a5cd2860ebbcfa3820669b4dda848aa72b0172617b1449f7d12fbe->leave($__internal_dc50858531a5cd2860ebbcfa3820669b4dda848aa72b0172617b1449f7d12fbe_prof);

        
        $__internal_394a0aac1c387605b5bc5c7fe52a7ed40c5d5153e97c39114248864b5ee7bc53->leave($__internal_394a0aac1c387605b5bc5c7fe52a7ed40c5d5153e97c39114248864b5ee7bc53_prof);

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
", "@Twig/layout.html.twig", "/home/radosaw/Address_box/Address_box/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
