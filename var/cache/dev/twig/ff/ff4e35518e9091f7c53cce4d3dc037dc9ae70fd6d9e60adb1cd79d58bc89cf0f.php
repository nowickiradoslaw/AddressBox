<?php

/* adres/index.html.twig */
class __TwigTemplate_dc080c977b7b49a268c2ca8bb9fc9fa1f6e69dc34559efe29c45f1ff5fa7fc87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adres/index.html.twig", 1);
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
        $__internal_fc6385b43d27c87db8df0d17c4335902b40a524e913a7ee22c4566ab1de83720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6385b43d27c87db8df0d17c4335902b40a524e913a7ee22c4566ab1de83720->enter($__internal_fc6385b43d27c87db8df0d17c4335902b40a524e913a7ee22c4566ab1de83720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adres/index.html.twig"));

        $__internal_8e3a19044bf63057ae618129181cd6615e498fe29860d114d3ef7bd92c22e6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3a19044bf63057ae618129181cd6615e498fe29860d114d3ef7bd92c22e6be->enter($__internal_8e3a19044bf63057ae618129181cd6615e498fe29860d114d3ef7bd92c22e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adres/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc6385b43d27c87db8df0d17c4335902b40a524e913a7ee22c4566ab1de83720->leave($__internal_fc6385b43d27c87db8df0d17c4335902b40a524e913a7ee22c4566ab1de83720_prof);

        
        $__internal_8e3a19044bf63057ae618129181cd6615e498fe29860d114d3ef7bd92c22e6be->leave($__internal_8e3a19044bf63057ae618129181cd6615e498fe29860d114d3ef7bd92c22e6be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb7218080c717412b6ea5df2063b85830ce2a58a2778a174a94347bff02451d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7218080c717412b6ea5df2063b85830ce2a58a2778a174a94347bff02451d4->enter($__internal_cb7218080c717412b6ea5df2063b85830ce2a58a2778a174a94347bff02451d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92d7ea0ca445c39836bf491910ed4256c6a481a2863392240f2f9492108212dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d7ea0ca445c39836bf491910ed4256c6a481a2863392240f2f9492108212dd->enter($__internal_92d7ea0ca445c39836bf491910ed4256c6a481a2863392240f2f9492108212dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Adres list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Miasto</th>
                <th>Ulica</th>
                <th>Numerdomu</th>
                <th>Numermieszkania</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["adres"] ?? $this->getContext($context, "adres")));
        foreach ($context['_seq'] as $context["_key"] => $context["adre"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adres_show", array("id" => $this->getAttribute($context["adre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adre"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["adre"], "miasto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["adre"], "ulica", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["adre"], "numerDomu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["adre"], "numerMieszkania", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adres_show", array("id" => $this->getAttribute($context["adre"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adres_edit", array("id" => $this->getAttribute($context["adre"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adres_new");
        echo "\">Create a new adre</a>
        </li>
    </ul>
";
        
        $__internal_92d7ea0ca445c39836bf491910ed4256c6a481a2863392240f2f9492108212dd->leave($__internal_92d7ea0ca445c39836bf491910ed4256c6a481a2863392240f2f9492108212dd_prof);

        
        $__internal_cb7218080c717412b6ea5df2063b85830ce2a58a2778a174a94347bff02451d4->leave($__internal_cb7218080c717412b6ea5df2063b85830ce2a58a2778a174a94347bff02451d4_prof);

    }

    public function getTemplateName()
    {
        return "adres/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Adres list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Miasto</th>
                <th>Ulica</th>
                <th>Numerdomu</th>
                <th>Numermieszkania</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for adre in adres %}
            <tr>
                <td><a href=\"{{ path('adres_show', { 'id': adre.id }) }}\">{{ adre.id }}</a></td>
                <td>{{ adre.miasto }}</td>
                <td>{{ adre.ulica }}</td>
                <td>{{ adre.numerDomu }}</td>
                <td>{{ adre.numerMieszkania }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adres_show', { 'id': adre.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('adres_edit', { 'id': adre.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adres_new') }}\">Create a new adre</a>
        </li>
    </ul>
{% endblock %}
", "adres/index.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/adres/index.html.twig");
    }
}
