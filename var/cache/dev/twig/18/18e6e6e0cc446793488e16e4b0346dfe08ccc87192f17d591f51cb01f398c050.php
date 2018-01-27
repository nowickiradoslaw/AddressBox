<?php

/* osoba/edit.html.twig */
class __TwigTemplate_6cd792c9bd9b57b3ffb35f20e63299d38a4d0bd0e6bd58671b41969d8f2c7526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "osoba/edit.html.twig", 1);
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
        $__internal_0fe5e699b7d8306cf249f9fdae97d4b4628e859552f1eaaec4fd923e1914648b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe5e699b7d8306cf249f9fdae97d4b4628e859552f1eaaec4fd923e1914648b->enter($__internal_0fe5e699b7d8306cf249f9fdae97d4b4628e859552f1eaaec4fd923e1914648b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/edit.html.twig"));

        $__internal_16cf12e5012a0282bdf833bb54b9f75a8a32ecb0b896e78ec4647aced9071c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cf12e5012a0282bdf833bb54b9f75a8a32ecb0b896e78ec4647aced9071c92->enter($__internal_16cf12e5012a0282bdf833bb54b9f75a8a32ecb0b896e78ec4647aced9071c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe5e699b7d8306cf249f9fdae97d4b4628e859552f1eaaec4fd923e1914648b->leave($__internal_0fe5e699b7d8306cf249f9fdae97d4b4628e859552f1eaaec4fd923e1914648b_prof);

        
        $__internal_16cf12e5012a0282bdf833bb54b9f75a8a32ecb0b896e78ec4647aced9071c92->leave($__internal_16cf12e5012a0282bdf833bb54b9f75a8a32ecb0b896e78ec4647aced9071c92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_989b632cfb3cf816bb07eaeee6f33153a76fd1c7d7dfdae21dc17265499d4fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989b632cfb3cf816bb07eaeee6f33153a76fd1c7d7dfdae21dc17265499d4fd5->enter($__internal_989b632cfb3cf816bb07eaeee6f33153a76fd1c7d7dfdae21dc17265499d4fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_366950a82055eb329d4a6444983976b8da2774d243459df0d656977161b4c5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366950a82055eb329d4a6444983976b8da2774d243459df0d656977161b4c5fd->enter($__internal_366950a82055eb329d4a6444983976b8da2774d243459df0d656977161b4c5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Osoba edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("osoba_index");
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
        
        $__internal_366950a82055eb329d4a6444983976b8da2774d243459df0d656977161b4c5fd->leave($__internal_366950a82055eb329d4a6444983976b8da2774d243459df0d656977161b4c5fd_prof);

        
        $__internal_989b632cfb3cf816bb07eaeee6f33153a76fd1c7d7dfdae21dc17265499d4fd5->leave($__internal_989b632cfb3cf816bb07eaeee6f33153a76fd1c7d7dfdae21dc17265499d4fd5_prof);

    }

    public function getTemplateName()
    {
        return "osoba/edit.html.twig";
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
    <h1>Osoba edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('osoba_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "osoba/edit.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/osoba/edit.html.twig");
    }
}
