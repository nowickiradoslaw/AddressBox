<?php

/* osoba/show.html.twig */
class __TwigTemplate_9ef57c96439dffc629253f38538fdfef40a636e19c2ef0d5993003e21bd3d58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "osoba/show.html.twig", 1);
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
        $__internal_19f501c586c8338ac759eea07fd15bbbd8d0c61533d097d7890019f2a00a0db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f501c586c8338ac759eea07fd15bbbd8d0c61533d097d7890019f2a00a0db5->enter($__internal_19f501c586c8338ac759eea07fd15bbbd8d0c61533d097d7890019f2a00a0db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/show.html.twig"));

        $__internal_3bf3f6e51068e4567347823d457c170369a8e329153eef04a339f8ac2b0df01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf3f6e51068e4567347823d457c170369a8e329153eef04a339f8ac2b0df01f->enter($__internal_3bf3f6e51068e4567347823d457c170369a8e329153eef04a339f8ac2b0df01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f501c586c8338ac759eea07fd15bbbd8d0c61533d097d7890019f2a00a0db5->leave($__internal_19f501c586c8338ac759eea07fd15bbbd8d0c61533d097d7890019f2a00a0db5_prof);

        
        $__internal_3bf3f6e51068e4567347823d457c170369a8e329153eef04a339f8ac2b0df01f->leave($__internal_3bf3f6e51068e4567347823d457c170369a8e329153eef04a339f8ac2b0df01f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f402cb6439d27edc9e843a677351253ea2b8dd9a7f1168218d4c5e7545400e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f402cb6439d27edc9e843a677351253ea2b8dd9a7f1168218d4c5e7545400e07->enter($__internal_f402cb6439d27edc9e843a677351253ea2b8dd9a7f1168218d4c5e7545400e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a376802de8b3144ecb7c16934bf86e8d586c0ea001229c75e500f439398fe4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a376802de8b3144ecb7c16934bf86e8d586c0ea001229c75e500f439398fe4fa->enter($__internal_a376802de8b3144ecb7c16934bf86e8d586c0ea001229c75e500f439398fe4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Osoba</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["osoba"] ?? $this->getContext($context, "osoba")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imie</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["osoba"] ?? $this->getContext($context, "osoba")), "imie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nazwisko</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["osoba"] ?? $this->getContext($context, "osoba")), "nazwisko", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["osoba"] ?? $this->getContext($context, "osoba")), "opis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adres</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["osoba"] ?? $this->getContext($context, "osoba")), "adres", array()), "fullAddress", array()), "html", null, true);
        echo "</td>
            </tr>
            
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["osoba"] ?? $this->getContext($context, "osoba")), "telefony", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["telefon"]) {
            // line 30
            echo "            ";
            echo twig_include($this->env, $context, "osoba/show_telefon.html.twig", array("telefon" => $context["telefon"]));
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['telefon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            
                
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("osoba_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("osoba_edit", array("id" => $this->getAttribute(($context["osoba"] ?? $this->getContext($context, "osoba")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a376802de8b3144ecb7c16934bf86e8d586c0ea001229c75e500f439398fe4fa->leave($__internal_a376802de8b3144ecb7c16934bf86e8d586c0ea001229c75e500f439398fe4fa_prof);

        
        $__internal_f402cb6439d27edc9e843a677351253ea2b8dd9a7f1168218d4c5e7545400e07->leave($__internal_f402cb6439d27edc9e843a677351253ea2b8dd9a7f1168218d4c5e7545400e07_prof);

    }

    public function getTemplateName()
    {
        return "osoba/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  146 => 45,  140 => 42,  134 => 39,  125 => 32,  108 => 30,  91 => 29,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Osoba</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ osoba.id }}</td>
            </tr>
            <tr>
                <th>Imie</th>
                <td>{{ osoba.imie }}</td>
            </tr>
            <tr>
                <th>Nazwisko</th>
                <td>{{ osoba.nazwisko }}</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>{{ osoba.opis }}</td>
            </tr>
            <tr>
                <th>Adres</th>
                <td>{{ osoba.adres.fullAddress }}</td>
            </tr>
            
            {% for telefon in osoba.telefony %}
            {{ include('osoba/show_telefon.html.twig', {'telefon': telefon})}}
            {% endfor %}
            
                
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('osoba_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('osoba_edit', { 'id': osoba.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "osoba/show.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/osoba/show.html.twig");
    }
}
