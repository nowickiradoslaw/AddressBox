<?php

/* telefon/new.html.twig */
class __TwigTemplate_b7c69f8e49751fed4daae855959df7754abb85af7cfc0ad8b873aaf2b0d702b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "telefon/new.html.twig", 1);
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
        $__internal_2cd73354f5032d43b88f95e905a45ea8429aea136c094f3f731acd158255ac83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd73354f5032d43b88f95e905a45ea8429aea136c094f3f731acd158255ac83->enter($__internal_2cd73354f5032d43b88f95e905a45ea8429aea136c094f3f731acd158255ac83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefon/new.html.twig"));

        $__internal_e4879792c1caf94d522fd4aba43eb1f10606ac0cfc4204edba686c07d7f75fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4879792c1caf94d522fd4aba43eb1f10606ac0cfc4204edba686c07d7f75fc3->enter($__internal_e4879792c1caf94d522fd4aba43eb1f10606ac0cfc4204edba686c07d7f75fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefon/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd73354f5032d43b88f95e905a45ea8429aea136c094f3f731acd158255ac83->leave($__internal_2cd73354f5032d43b88f95e905a45ea8429aea136c094f3f731acd158255ac83_prof);

        
        $__internal_e4879792c1caf94d522fd4aba43eb1f10606ac0cfc4204edba686c07d7f75fc3->leave($__internal_e4879792c1caf94d522fd4aba43eb1f10606ac0cfc4204edba686c07d7f75fc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11da457cc771d05d2c70571aceaf4a6617063a1196b9e522d3a14762936914d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11da457cc771d05d2c70571aceaf4a6617063a1196b9e522d3a14762936914d9->enter($__internal_11da457cc771d05d2c70571aceaf4a6617063a1196b9e522d3a14762936914d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57d89f03a078ffdd9819595a957cafd55f00577993cbb371652c57fd5ece7435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d89f03a078ffdd9819595a957cafd55f00577993cbb371652c57fd5ece7435->enter($__internal_57d89f03a078ffdd9819595a957cafd55f00577993cbb371652c57fd5ece7435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Telefon creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telefon_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_57d89f03a078ffdd9819595a957cafd55f00577993cbb371652c57fd5ece7435->leave($__internal_57d89f03a078ffdd9819595a957cafd55f00577993cbb371652c57fd5ece7435_prof);

        
        $__internal_11da457cc771d05d2c70571aceaf4a6617063a1196b9e522d3a14762936914d9->leave($__internal_11da457cc771d05d2c70571aceaf4a6617063a1196b9e522d3a14762936914d9_prof);

    }

    public function getTemplateName()
    {
        return "telefon/new.html.twig";
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
    <h1>Telefon creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('telefon_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "telefon/new.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/telefon/new.html.twig");
    }
}
