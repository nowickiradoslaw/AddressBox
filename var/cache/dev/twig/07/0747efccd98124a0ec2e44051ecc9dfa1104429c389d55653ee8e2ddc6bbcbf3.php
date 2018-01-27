<?php

/* osoba/index.html.twig */
class __TwigTemplate_e7ab0ee110f165578196837163ec5a6cd19eaa5cb1f2f44de257e7d35113e406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "osoba/index.html.twig", 1);
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
        $__internal_112a46bd99e9984422854ed3a1ceda2edbd6679ce97533b93b05883be50aecf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112a46bd99e9984422854ed3a1ceda2edbd6679ce97533b93b05883be50aecf3->enter($__internal_112a46bd99e9984422854ed3a1ceda2edbd6679ce97533b93b05883be50aecf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/index.html.twig"));

        $__internal_a717898e9d57c4887b408e16b007d62c91e463fe129fb935173d9f91ac54b2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a717898e9d57c4887b408e16b007d62c91e463fe129fb935173d9f91ac54b2c7->enter($__internal_a717898e9d57c4887b408e16b007d62c91e463fe129fb935173d9f91ac54b2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112a46bd99e9984422854ed3a1ceda2edbd6679ce97533b93b05883be50aecf3->leave($__internal_112a46bd99e9984422854ed3a1ceda2edbd6679ce97533b93b05883be50aecf3_prof);

        
        $__internal_a717898e9d57c4887b408e16b007d62c91e463fe129fb935173d9f91ac54b2c7->leave($__internal_a717898e9d57c4887b408e16b007d62c91e463fe129fb935173d9f91ac54b2c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5894e7f8270992f917d1bb4cb0d6d9cdcf9a2ca12c8683b6899d357c014c6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5894e7f8270992f917d1bb4cb0d6d9cdcf9a2ca12c8683b6899d357c014c6a6->enter($__internal_f5894e7f8270992f917d1bb4cb0d6d9cdcf9a2ca12c8683b6899d357c014c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d14c018957701adddbf38a7290ddad028412b34488257a5229bad212a91e587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d14c018957701adddbf38a7290ddad028412b34488257a5229bad212a91e587->enter($__internal_4d14c018957701adddbf38a7290ddad028412b34488257a5229bad212a91e587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Osobas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Opis</th>
                <th>Actions</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["osobas"] ?? $this->getContext($context, "osobas")));
        foreach ($context['_seq'] as $context["_key"] => $context["osoba"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("osoba_show", array("id" => $this->getAttribute($context["osoba"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "imie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "nazwisko", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["osoba"], "opis", array()), "html", null, true);
            echo "</td>                
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("osoba_show", array("id" => $this->getAttribute($context["osoba"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("osoba_edit", array("id" => $this->getAttribute($context["osoba"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osoba'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("osoba_new");
        echo "\">Create a new osoba</a>
        </li>
    </ul>
";
        
        $__internal_4d14c018957701adddbf38a7290ddad028412b34488257a5229bad212a91e587->leave($__internal_4d14c018957701adddbf38a7290ddad028412b34488257a5229bad212a91e587_prof);

        
        $__internal_f5894e7f8270992f917d1bb4cb0d6d9cdcf9a2ca12c8683b6899d357c014c6a6->leave($__internal_f5894e7f8270992f917d1bb4cb0d6d9cdcf9a2ca12c8683b6899d357c014c6a6_prof);

    }

    public function getTemplateName()
    {
        return "osoba/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  111 => 36,  99 => 30,  93 => 27,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Osobas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Opis</th>
                <th>Actions</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
        {% for osoba in osobas %}
            <tr>
                <td><a href=\"{{ path('osoba_show', { 'id': osoba.id }) }}\">{{ osoba.id }}</a></td>
                <td>{{ osoba.imie }}</td>
                <td>{{ osoba.nazwisko }}</td>
                <td>{{ osoba.opis }}</td>                
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('osoba_show', { 'id': osoba.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('osoba_edit', { 'id': osoba.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('osoba_new') }}\">Create a new osoba</a>
        </li>
    </ul>
{% endblock %}
", "osoba/index.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/osoba/index.html.twig");
    }
}
