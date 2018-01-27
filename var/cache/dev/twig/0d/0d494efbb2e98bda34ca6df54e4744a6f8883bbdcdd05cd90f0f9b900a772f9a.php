<?php

/* telefon/edit.html.twig */
class __TwigTemplate_585bca35d9da0b71b9b91fef6c0397101e9d6191b514e7f085c1605d369a0d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "telefon/edit.html.twig", 1);
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
        $__internal_9194417322bcab2fc48d8cf7ee6437a287a319287ce150d5d1e529656ec770ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9194417322bcab2fc48d8cf7ee6437a287a319287ce150d5d1e529656ec770ea->enter($__internal_9194417322bcab2fc48d8cf7ee6437a287a319287ce150d5d1e529656ec770ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefon/edit.html.twig"));

        $__internal_3f6342404b81e3e7b5b193f1a2a5bc7e42af058e164d779920327159d9f90869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6342404b81e3e7b5b193f1a2a5bc7e42af058e164d779920327159d9f90869->enter($__internal_3f6342404b81e3e7b5b193f1a2a5bc7e42af058e164d779920327159d9f90869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefon/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9194417322bcab2fc48d8cf7ee6437a287a319287ce150d5d1e529656ec770ea->leave($__internal_9194417322bcab2fc48d8cf7ee6437a287a319287ce150d5d1e529656ec770ea_prof);

        
        $__internal_3f6342404b81e3e7b5b193f1a2a5bc7e42af058e164d779920327159d9f90869->leave($__internal_3f6342404b81e3e7b5b193f1a2a5bc7e42af058e164d779920327159d9f90869_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d6cc226fc91fc5bd765dee2f3217921c79c9eaffc12969638a75b86568ffa80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6cc226fc91fc5bd765dee2f3217921c79c9eaffc12969638a75b86568ffa80->enter($__internal_9d6cc226fc91fc5bd765dee2f3217921c79c9eaffc12969638a75b86568ffa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd0db79f3490a14bdcd5ccb440eba47dfdd5b0b81110fb457cc6c8d116c4856f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0db79f3490a14bdcd5ccb440eba47dfdd5b0b81110fb457cc6c8d116c4856f->enter($__internal_bd0db79f3490a14bdcd5ccb440eba47dfdd5b0b81110fb457cc6c8d116c4856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Telefon edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telefon_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bd0db79f3490a14bdcd5ccb440eba47dfdd5b0b81110fb457cc6c8d116c4856f->leave($__internal_bd0db79f3490a14bdcd5ccb440eba47dfdd5b0b81110fb457cc6c8d116c4856f_prof);

        
        $__internal_9d6cc226fc91fc5bd765dee2f3217921c79c9eaffc12969638a75b86568ffa80->leave($__internal_9d6cc226fc91fc5bd765dee2f3217921c79c9eaffc12969638a75b86568ffa80_prof);

    }

    public function getTemplateName()
    {
        return "telefon/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Telefon edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('telefon_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "telefon/edit.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/telefon/edit.html.twig");
    }
}
