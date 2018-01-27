<?php

/* email/index.html.twig */
class __TwigTemplate_920ed98569e8042d7743a8390061147fcac11370515791158ce24a7dd7d86723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/index.html.twig", 1);
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
        $__internal_36994a6a554c465520af6e6b66a714e8c5771c0cac3fde85023a8d4365ee88e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36994a6a554c465520af6e6b66a714e8c5771c0cac3fde85023a8d4365ee88e7->enter($__internal_36994a6a554c465520af6e6b66a714e8c5771c0cac3fde85023a8d4365ee88e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/index.html.twig"));

        $__internal_556aa49b64cbb67b76171b4769985e542810c96aa3e6cd2b19650781fa0a4629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556aa49b64cbb67b76171b4769985e542810c96aa3e6cd2b19650781fa0a4629->enter($__internal_556aa49b64cbb67b76171b4769985e542810c96aa3e6cd2b19650781fa0a4629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36994a6a554c465520af6e6b66a714e8c5771c0cac3fde85023a8d4365ee88e7->leave($__internal_36994a6a554c465520af6e6b66a714e8c5771c0cac3fde85023a8d4365ee88e7_prof);

        
        $__internal_556aa49b64cbb67b76171b4769985e542810c96aa3e6cd2b19650781fa0a4629->leave($__internal_556aa49b64cbb67b76171b4769985e542810c96aa3e6cd2b19650781fa0a4629_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_826b79c40d0eb6bc76ee695a866eb0b786ff5f981ad4b1e76267c0c88a9451ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826b79c40d0eb6bc76ee695a866eb0b786ff5f981ad4b1e76267c0c88a9451ab->enter($__internal_826b79c40d0eb6bc76ee695a866eb0b786ff5f981ad4b1e76267c0c88a9451ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_164b8ddfd775b0dc596592c717cba66457ac1b72a8ce4ea1596d5e7dc776fe64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164b8ddfd775b0dc596592c717cba66457ac1b72a8ce4ea1596d5e7dc776fe64->enter($__internal_164b8ddfd775b0dc596592c717cba66457ac1b72a8ce4ea1596d5e7dc776fe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Emails list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Adresemail</th>
                <th>Typ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emails"] ?? $this->getContext($context, "emails")));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_show", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "adresEmail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "typ", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_show", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_new");
        echo "\">Create a new email</a>
        </li>
    </ul>
";
        
        $__internal_164b8ddfd775b0dc596592c717cba66457ac1b72a8ce4ea1596d5e7dc776fe64->leave($__internal_164b8ddfd775b0dc596592c717cba66457ac1b72a8ce4ea1596d5e7dc776fe64_prof);

        
        $__internal_826b79c40d0eb6bc76ee695a866eb0b786ff5f981ad4b1e76267c0c88a9451ab->leave($__internal_826b79c40d0eb6bc76ee695a866eb0b786ff5f981ad4b1e76267c0c88a9451ab_prof);

    }

    public function getTemplateName()
    {
        return "email/index.html.twig";
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
    <h1>Emails list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Adresemail</th>
                <th>Typ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for email in emails %}
            <tr>
                <td><a href=\"{{ path('email_show', { 'id': email.id }) }}\">{{ email.id }}</a></td>
                <td>{{ email.adresEmail }}</td>
                <td>{{ email.typ }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('email_show', { 'id': email.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('email_edit', { 'id': email.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('email_new') }}\">Create a new email</a>
        </li>
    </ul>
{% endblock %}
", "email/index.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/email/index.html.twig");
    }
}
