<?php

/* adres/new.html.twig */
class __TwigTemplate_c10e75dd07fff33c99b7323e6488c5f263b5a6c4af1c4e4ba4199da7d6a26b64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adres/new.html.twig", 1);
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
        $__internal_b96271df086ba86685b4a432609fbbc13f15d9ac711f0dc6dd47e3803edddd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96271df086ba86685b4a432609fbbc13f15d9ac711f0dc6dd47e3803edddd7f->enter($__internal_b96271df086ba86685b4a432609fbbc13f15d9ac711f0dc6dd47e3803edddd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adres/new.html.twig"));

        $__internal_5b58ca1fa91e91b1e9fd29a6985aecbec7e150b63fd891d9a2ae50bd14aced28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b58ca1fa91e91b1e9fd29a6985aecbec7e150b63fd891d9a2ae50bd14aced28->enter($__internal_5b58ca1fa91e91b1e9fd29a6985aecbec7e150b63fd891d9a2ae50bd14aced28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adres/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96271df086ba86685b4a432609fbbc13f15d9ac711f0dc6dd47e3803edddd7f->leave($__internal_b96271df086ba86685b4a432609fbbc13f15d9ac711f0dc6dd47e3803edddd7f_prof);

        
        $__internal_5b58ca1fa91e91b1e9fd29a6985aecbec7e150b63fd891d9a2ae50bd14aced28->leave($__internal_5b58ca1fa91e91b1e9fd29a6985aecbec7e150b63fd891d9a2ae50bd14aced28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c77605f9386b879d56306613d6c9934805da0375525f6223827abffea16031e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77605f9386b879d56306613d6c9934805da0375525f6223827abffea16031e1->enter($__internal_c77605f9386b879d56306613d6c9934805da0375525f6223827abffea16031e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdb18918ac0dd0c586f82b8239042717a826a3b96cddee5f9a15d7049e25fd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb18918ac0dd0c586f82b8239042717a826a3b96cddee5f9a15d7049e25fd10->enter($__internal_bdb18918ac0dd0c586f82b8239042717a826a3b96cddee5f9a15d7049e25fd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Adre creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adres_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bdb18918ac0dd0c586f82b8239042717a826a3b96cddee5f9a15d7049e25fd10->leave($__internal_bdb18918ac0dd0c586f82b8239042717a826a3b96cddee5f9a15d7049e25fd10_prof);

        
        $__internal_c77605f9386b879d56306613d6c9934805da0375525f6223827abffea16031e1->leave($__internal_c77605f9386b879d56306613d6c9934805da0375525f6223827abffea16031e1_prof);

    }

    public function getTemplateName()
    {
        return "adres/new.html.twig";
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
    <h1>Adre creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adres_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "adres/new.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/adres/new.html.twig");
    }
}
