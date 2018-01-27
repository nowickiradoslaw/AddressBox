<?php

/* telefon/show.html.twig */
class __TwigTemplate_d6c3b6e8cfe91d059a74af6866cfa4d0dc9e9b17690158587cf7d4dec4c3a83c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "telefon/show.html.twig", 1);
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
        $__internal_f5850ac0216ae96ace9979c496f96f90a0bf4901a9548570be435d5158424be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5850ac0216ae96ace9979c496f96f90a0bf4901a9548570be435d5158424be1->enter($__internal_f5850ac0216ae96ace9979c496f96f90a0bf4901a9548570be435d5158424be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefon/show.html.twig"));

        $__internal_22eacc6cbc79e8d508dbeb5be66ca057a1627bd668cb7cbab32732eec4edf078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22eacc6cbc79e8d508dbeb5be66ca057a1627bd668cb7cbab32732eec4edf078->enter($__internal_22eacc6cbc79e8d508dbeb5be66ca057a1627bd668cb7cbab32732eec4edf078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefon/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5850ac0216ae96ace9979c496f96f90a0bf4901a9548570be435d5158424be1->leave($__internal_f5850ac0216ae96ace9979c496f96f90a0bf4901a9548570be435d5158424be1_prof);

        
        $__internal_22eacc6cbc79e8d508dbeb5be66ca057a1627bd668cb7cbab32732eec4edf078->leave($__internal_22eacc6cbc79e8d508dbeb5be66ca057a1627bd668cb7cbab32732eec4edf078_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_985fe7c22564bede6dc40342a04a0248c6758a40b94691a18cdf36dde1837237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985fe7c22564bede6dc40342a04a0248c6758a40b94691a18cdf36dde1837237->enter($__internal_985fe7c22564bede6dc40342a04a0248c6758a40b94691a18cdf36dde1837237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c06a018226ae90ea20ce7e0cf2c601e335cc03a03e5ae86b1e2bd5c56480da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c06a018226ae90ea20ce7e0cf2c601e335cc03a03e5ae86b1e2bd5c56480da6->enter($__internal_5c06a018226ae90ea20ce7e0cf2c601e335cc03a03e5ae86b1e2bd5c56480da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Telefon</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["telefon"] ?? $this->getContext($context, "telefon")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numertelefonu</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["telefon"] ?? $this->getContext($context, "telefon")), "numerTelefonu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typ</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["telefon"] ?? $this->getContext($context, "telefon")), "typ", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telefon_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telefon_edit", array("id" => $this->getAttribute(($context["telefon"] ?? $this->getContext($context, "telefon")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5c06a018226ae90ea20ce7e0cf2c601e335cc03a03e5ae86b1e2bd5c56480da6->leave($__internal_5c06a018226ae90ea20ce7e0cf2c601e335cc03a03e5ae86b1e2bd5c56480da6_prof);

        
        $__internal_985fe7c22564bede6dc40342a04a0248c6758a40b94691a18cdf36dde1837237->leave($__internal_985fe7c22564bede6dc40342a04a0248c6758a40b94691a18cdf36dde1837237_prof);

    }

    public function getTemplateName()
    {
        return "telefon/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Telefon</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ telefon.id }}</td>
            </tr>
            <tr>
                <th>Numertelefonu</th>
                <td>{{ telefon.numerTelefonu }}</td>
            </tr>
            <tr>
                <th>Typ</th>
                <td>{{ telefon.typ }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('telefon_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('telefon_edit', { 'id': telefon.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "telefon/show.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/telefon/show.html.twig");
    }
}
