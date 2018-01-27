<?php

/* email/new.html.twig */
class __TwigTemplate_0adaaf4e6ab1b2d4c61ee8e6749dc1fbe37b0d12508642824089a6a19afc3895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e03cfb729dd15ca4755972d75a09b6d5dc7a0d2f6a3b2617cfa7fa17661475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e03cfb729dd15ca4755972d75a09b6d5dc7a0d2f6a3b2617cfa7fa17661475->enter($__internal_a4e03cfb729dd15ca4755972d75a09b6d5dc7a0d2f6a3b2617cfa7fa17661475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/new.html.twig"));

        $__internal_6e093d5ac9904cbfb9a2f6c2f09696a0f607a047067d247d666cb13b47d13a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e093d5ac9904cbfb9a2f6c2f09696a0f607a047067d247d666cb13b47d13a40->enter($__internal_6e093d5ac9904cbfb9a2f6c2f09696a0f607a047067d247d666cb13b47d13a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e03cfb729dd15ca4755972d75a09b6d5dc7a0d2f6a3b2617cfa7fa17661475->leave($__internal_a4e03cfb729dd15ca4755972d75a09b6d5dc7a0d2f6a3b2617cfa7fa17661475_prof);

        
        $__internal_6e093d5ac9904cbfb9a2f6c2f09696a0f607a047067d247d666cb13b47d13a40->leave($__internal_6e093d5ac9904cbfb9a2f6c2f09696a0f607a047067d247d666cb13b47d13a40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b178bd3ddf1c2c4d4bdeaf5eaade6e6e49a857518e799a3415e4a6a87d97e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b178bd3ddf1c2c4d4bdeaf5eaade6e6e49a857518e799a3415e4a6a87d97e42->enter($__internal_2b178bd3ddf1c2c4d4bdeaf5eaade6e6e49a857518e799a3415e4a6a87d97e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9f6a1fbcc44cce294f71dffd0bb460b59d8483d14d3fcfb6aa54eec52bcf365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f6a1fbcc44cce294f71dffd0bb460b59d8483d14d3fcfb6aa54eec52bcf365->enter($__internal_c9f6a1fbcc44cce294f71dffd0bb460b59d8483d14d3fcfb6aa54eec52bcf365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Email creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c9f6a1fbcc44cce294f71dffd0bb460b59d8483d14d3fcfb6aa54eec52bcf365->leave($__internal_c9f6a1fbcc44cce294f71dffd0bb460b59d8483d14d3fcfb6aa54eec52bcf365_prof);

        
        $__internal_2b178bd3ddf1c2c4d4bdeaf5eaade6e6e49a857518e799a3415e4a6a87d97e42->leave($__internal_2b178bd3ddf1c2c4d4bdeaf5eaade6e6e49a857518e799a3415e4a6a87d97e42_prof);

    }

    public function getTemplateName()
    {
        return "email/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Email creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('email_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "email/new.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/email/new.html.twig");
    }
}
