<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_230beea2e334d12417a4a94b89383e7aed726790d9f1333c69ed0123e1c654f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230beea2e334d12417a4a94b89383e7aed726790d9f1333c69ed0123e1c654f6->enter($__internal_230beea2e334d12417a4a94b89383e7aed726790d9f1333c69ed0123e1c654f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_aca5d9e0a5d8ee8336064c9688d68ac6f01bf455f0c6c335cac65d3793a259c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca5d9e0a5d8ee8336064c9688d68ac6f01bf455f0c6c335cac65d3793a259c6->enter($__internal_aca5d9e0a5d8ee8336064c9688d68ac6f01bf455f0c6c335cac65d3793a259c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_230beea2e334d12417a4a94b89383e7aed726790d9f1333c69ed0123e1c654f6->leave($__internal_230beea2e334d12417a4a94b89383e7aed726790d9f1333c69ed0123e1c654f6_prof);

        
        $__internal_aca5d9e0a5d8ee8336064c9688d68ac6f01bf455f0c6c335cac65d3793a259c6->leave($__internal_aca5d9e0a5d8ee8336064c9688d68ac6f01bf455f0c6c335cac65d3793a259c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_459d8955a13ffbef8043bf6c10e72a8e65a2329ed0497c61eb6a2df22834fdce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459d8955a13ffbef8043bf6c10e72a8e65a2329ed0497c61eb6a2df22834fdce->enter($__internal_459d8955a13ffbef8043bf6c10e72a8e65a2329ed0497c61eb6a2df22834fdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_51d2dbc9481f68fd64ce803821cde9f29a3abc4e5d1869783695f3a8b917d343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d2dbc9481f68fd64ce803821cde9f29a3abc4e5d1869783695f3a8b917d343->enter($__internal_51d2dbc9481f68fd64ce803821cde9f29a3abc4e5d1869783695f3a8b917d343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_51d2dbc9481f68fd64ce803821cde9f29a3abc4e5d1869783695f3a8b917d343->leave($__internal_51d2dbc9481f68fd64ce803821cde9f29a3abc4e5d1869783695f3a8b917d343_prof);

        
        $__internal_459d8955a13ffbef8043bf6c10e72a8e65a2329ed0497c61eb6a2df22834fdce->leave($__internal_459d8955a13ffbef8043bf6c10e72a8e65a2329ed0497c61eb6a2df22834fdce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa70190d4b9a5777bf471abbb695fda4d0f2adc7cb830b46dad91cd8af6c37bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa70190d4b9a5777bf471abbb695fda4d0f2adc7cb830b46dad91cd8af6c37bc->enter($__internal_fa70190d4b9a5777bf471abbb695fda4d0f2adc7cb830b46dad91cd8af6c37bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ad3f2c8896557aac31c5ebbc0a9d23be105e316ebe9900586091e7a94f5f8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad3f2c8896557aac31c5ebbc0a9d23be105e316ebe9900586091e7a94f5f8af->enter($__internal_0ad3f2c8896557aac31c5ebbc0a9d23be105e316ebe9900586091e7a94f5f8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ad3f2c8896557aac31c5ebbc0a9d23be105e316ebe9900586091e7a94f5f8af->leave($__internal_0ad3f2c8896557aac31c5ebbc0a9d23be105e316ebe9900586091e7a94f5f8af_prof);

        
        $__internal_fa70190d4b9a5777bf471abbb695fda4d0f2adc7cb830b46dad91cd8af6c37bc->leave($__internal_fa70190d4b9a5777bf471abbb695fda4d0f2adc7cb830b46dad91cd8af6c37bc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c4022b37bfe4531293eefa53ac3f76c50eff081fb974dc463ba565c4d949c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4022b37bfe4531293eefa53ac3f76c50eff081fb974dc463ba565c4d949c10->enter($__internal_8c4022b37bfe4531293eefa53ac3f76c50eff081fb974dc463ba565c4d949c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3164ffcaecde335560d2035d05861cabe4080a8b4f0de8850438803d0fcbaad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3164ffcaecde335560d2035d05861cabe4080a8b4f0de8850438803d0fcbaad5->enter($__internal_3164ffcaecde335560d2035d05861cabe4080a8b4f0de8850438803d0fcbaad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3164ffcaecde335560d2035d05861cabe4080a8b4f0de8850438803d0fcbaad5->leave($__internal_3164ffcaecde335560d2035d05861cabe4080a8b4f0de8850438803d0fcbaad5_prof);

        
        $__internal_8c4022b37bfe4531293eefa53ac3f76c50eff081fb974dc463ba565c4d949c10->leave($__internal_8c4022b37bfe4531293eefa53ac3f76c50eff081fb974dc463ba565c4d949c10_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/radosaw/Address_box/Address_box/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
