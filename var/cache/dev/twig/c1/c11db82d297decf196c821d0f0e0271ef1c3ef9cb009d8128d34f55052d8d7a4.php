<?php

/* email/show.html.twig */
class __TwigTemplate_16850af8f2187dd83c25c86d8b6a16c4be2202e117b22ec5858cbca45360ec17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/show.html.twig", 1);
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
        $__internal_db39bfa019c15ad7ed76d3cd37be150c1539ed54fbf9df199059b86052f39298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db39bfa019c15ad7ed76d3cd37be150c1539ed54fbf9df199059b86052f39298->enter($__internal_db39bfa019c15ad7ed76d3cd37be150c1539ed54fbf9df199059b86052f39298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/show.html.twig"));

        $__internal_beff4e0997982f93a17e36a292ba8ce08cbeeaf5c882e8f857dc68afafb44c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beff4e0997982f93a17e36a292ba8ce08cbeeaf5c882e8f857dc68afafb44c03->enter($__internal_beff4e0997982f93a17e36a292ba8ce08cbeeaf5c882e8f857dc68afafb44c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db39bfa019c15ad7ed76d3cd37be150c1539ed54fbf9df199059b86052f39298->leave($__internal_db39bfa019c15ad7ed76d3cd37be150c1539ed54fbf9df199059b86052f39298_prof);

        
        $__internal_beff4e0997982f93a17e36a292ba8ce08cbeeaf5c882e8f857dc68afafb44c03->leave($__internal_beff4e0997982f93a17e36a292ba8ce08cbeeaf5c882e8f857dc68afafb44c03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09f691d24480adf58ce8c5350109c32a9180ae8ace15380dfd6474935380b188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f691d24480adf58ce8c5350109c32a9180ae8ace15380dfd6474935380b188->enter($__internal_09f691d24480adf58ce8c5350109c32a9180ae8ace15380dfd6474935380b188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13e78c084db5c493d01fe7e155ac241417c5d8e23360d6700a422c189c27c763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e78c084db5c493d01fe7e155ac241417c5d8e23360d6700a422c189c27c763->enter($__internal_13e78c084db5c493d01fe7e155ac241417c5d8e23360d6700a422c189c27c763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Email</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["email"] ?? $this->getContext($context, "email")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresemail</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["email"] ?? $this->getContext($context, "email")), "adresEmail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typ</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["email"] ?? $this->getContext($context, "email")), "typ", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute(($context["email"] ?? $this->getContext($context, "email")), "id", array()))), "html", null, true);
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
        
        $__internal_13e78c084db5c493d01fe7e155ac241417c5d8e23360d6700a422c189c27c763->leave($__internal_13e78c084db5c493d01fe7e155ac241417c5d8e23360d6700a422c189c27c763_prof);

        
        $__internal_09f691d24480adf58ce8c5350109c32a9180ae8ace15380dfd6474935380b188->leave($__internal_09f691d24480adf58ce8c5350109c32a9180ae8ace15380dfd6474935380b188_prof);

    }

    public function getTemplateName()
    {
        return "email/show.html.twig";
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
    <h1>Email</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ email.id }}</td>
            </tr>
            <tr>
                <th>Adresemail</th>
                <td>{{ email.adresEmail }}</td>
            </tr>
            <tr>
                <th>Typ</th>
                <td>{{ email.typ }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('email_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('email_edit', { 'id': email.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "email/show.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/email/show.html.twig");
    }
}
