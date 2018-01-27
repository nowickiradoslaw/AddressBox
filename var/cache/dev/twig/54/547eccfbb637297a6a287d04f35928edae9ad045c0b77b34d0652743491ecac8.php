<?php

/* telefon/index.html.twig */
class __TwigTemplate_8ad5abc0ec1fb71e88a80f7819413c9e9bf44f4160a4036fb05b5f37de5dd832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "telefon/index.html.twig", 1);
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
        $__internal_21dace25960a0fa8ba4b053f954e3dc1dcb8b7226bcad44e6bedc7bd7429e89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21dace25960a0fa8ba4b053f954e3dc1dcb8b7226bcad44e6bedc7bd7429e89f->enter($__internal_21dace25960a0fa8ba4b053f954e3dc1dcb8b7226bcad44e6bedc7bd7429e89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefon/index.html.twig"));

        $__internal_ce2abe0d70f30747bdea6056032e02b21005ab4f37ab30673f5a3829f4b89120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2abe0d70f30747bdea6056032e02b21005ab4f37ab30673f5a3829f4b89120->enter($__internal_ce2abe0d70f30747bdea6056032e02b21005ab4f37ab30673f5a3829f4b89120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefon/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21dace25960a0fa8ba4b053f954e3dc1dcb8b7226bcad44e6bedc7bd7429e89f->leave($__internal_21dace25960a0fa8ba4b053f954e3dc1dcb8b7226bcad44e6bedc7bd7429e89f_prof);

        
        $__internal_ce2abe0d70f30747bdea6056032e02b21005ab4f37ab30673f5a3829f4b89120->leave($__internal_ce2abe0d70f30747bdea6056032e02b21005ab4f37ab30673f5a3829f4b89120_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51a6cb0a5c71192790c4a71c84e1b99e38136143edcadcc50088fed88c08a293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a6cb0a5c71192790c4a71c84e1b99e38136143edcadcc50088fed88c08a293->enter($__internal_51a6cb0a5c71192790c4a71c84e1b99e38136143edcadcc50088fed88c08a293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0336eef68b41df28f4d8a22e512d238a036bff95ab513425e92b9b363465107c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0336eef68b41df28f4d8a22e512d238a036bff95ab513425e92b9b363465107c->enter($__internal_0336eef68b41df28f4d8a22e512d238a036bff95ab513425e92b9b363465107c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Telefons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numertelefonu</th>
                <th>Typ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["telefons"] ?? $this->getContext($context, "telefons")));
        foreach ($context['_seq'] as $context["_key"] => $context["telefon"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telefon_show", array("id" => $this->getAttribute($context["telefon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["telefon"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["telefon"], "numerTelefonu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["telefon"], "typ", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telefon_show", array("id" => $this->getAttribute($context["telefon"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telefon_edit", array("id" => $this->getAttribute($context["telefon"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['telefon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telefon_new");
        echo "\">Create a new telefon</a>
        </li>
    </ul>
";
        
        $__internal_0336eef68b41df28f4d8a22e512d238a036bff95ab513425e92b9b363465107c->leave($__internal_0336eef68b41df28f4d8a22e512d238a036bff95ab513425e92b9b363465107c_prof);

        
        $__internal_51a6cb0a5c71192790c4a71c84e1b99e38136143edcadcc50088fed88c08a293->leave($__internal_51a6cb0a5c71192790c4a71c84e1b99e38136143edcadcc50088fed88c08a293_prof);

    }

    public function getTemplateName()
    {
        return "telefon/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Telefons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numertelefonu</th>
                <th>Typ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for telefon in telefons %}
            <tr>
                <td><a href=\"{{ path('telefon_show', { 'id': telefon.id }) }}\">{{ telefon.id }}</a></td>
                <td>{{ telefon.numerTelefonu }}</td>
                <td>{{ telefon.typ }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('telefon_show', { 'id': telefon.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('telefon_edit', { 'id': telefon.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('telefon_new') }}\">Create a new telefon</a>
        </li>
    </ul>
{% endblock %}
", "telefon/index.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/telefon/index.html.twig");
    }
}
