<?php

/* osoba/new.html.twig */
class __TwigTemplate_e86ab9eb68b84ddaa0fee04049ebfcaba5633899135574a3c9da73a5cc05f1a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "osoba/new.html.twig", 1);
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
        $__internal_7c3db6e3d67911f8e91094e25dee70c10f61519ff1c958ba3e51ccc80cbebdc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3db6e3d67911f8e91094e25dee70c10f61519ff1c958ba3e51ccc80cbebdc7->enter($__internal_7c3db6e3d67911f8e91094e25dee70c10f61519ff1c958ba3e51ccc80cbebdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/new.html.twig"));

        $__internal_f5fe6ec69488e8ba6b797ec96c938ca01f483d0672e4ca6e3c4a443f1c8961d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fe6ec69488e8ba6b797ec96c938ca01f483d0672e4ca6e3c4a443f1c8961d8->enter($__internal_f5fe6ec69488e8ba6b797ec96c938ca01f483d0672e4ca6e3c4a443f1c8961d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c3db6e3d67911f8e91094e25dee70c10f61519ff1c958ba3e51ccc80cbebdc7->leave($__internal_7c3db6e3d67911f8e91094e25dee70c10f61519ff1c958ba3e51ccc80cbebdc7_prof);

        
        $__internal_f5fe6ec69488e8ba6b797ec96c938ca01f483d0672e4ca6e3c4a443f1c8961d8->leave($__internal_f5fe6ec69488e8ba6b797ec96c938ca01f483d0672e4ca6e3c4a443f1c8961d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb712ba47bc93beff9a122c547d782e274c6b7ddfae30ee91a08e253dc7c69b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb712ba47bc93beff9a122c547d782e274c6b7ddfae30ee91a08e253dc7c69b4->enter($__internal_bb712ba47bc93beff9a122c547d782e274c6b7ddfae30ee91a08e253dc7c69b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_912131e8d9fe16c92374c5bd9ed3c05e4c8891b5763525af04d4181e601a666d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912131e8d9fe16c92374c5bd9ed3c05e4c8891b5763525af04d4181e601a666d->enter($__internal_912131e8d9fe16c92374c5bd9ed3c05e4c8891b5763525af04d4181e601a666d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Osoba creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("osoba_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_912131e8d9fe16c92374c5bd9ed3c05e4c8891b5763525af04d4181e601a666d->leave($__internal_912131e8d9fe16c92374c5bd9ed3c05e4c8891b5763525af04d4181e601a666d_prof);

        
        $__internal_bb712ba47bc93beff9a122c547d782e274c6b7ddfae30ee91a08e253dc7c69b4->leave($__internal_bb712ba47bc93beff9a122c547d782e274c6b7ddfae30ee91a08e253dc7c69b4_prof);

    }

    public function getTemplateName()
    {
        return "osoba/new.html.twig";
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
    <h1>Osoba creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('osoba_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "osoba/new.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/osoba/new.html.twig");
    }
}
