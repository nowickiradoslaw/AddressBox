<?php

/* adres/show.html.twig */
class __TwigTemplate_fea4a5d91cadd8e9481306755c8afce3c7edcc943d6fe03af5d01d522f67a9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adres/show.html.twig", 1);
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
        $__internal_ddeb2c3bd0b1d7ee0a892c1eef9a411841cb23c85862234444105c1ac4b37c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddeb2c3bd0b1d7ee0a892c1eef9a411841cb23c85862234444105c1ac4b37c4b->enter($__internal_ddeb2c3bd0b1d7ee0a892c1eef9a411841cb23c85862234444105c1ac4b37c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adres/show.html.twig"));

        $__internal_169c075e656dc7fb92b45bc936dea5c4e69edac6f7ec8e4087b04343dfb01d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169c075e656dc7fb92b45bc936dea5c4e69edac6f7ec8e4087b04343dfb01d34->enter($__internal_169c075e656dc7fb92b45bc936dea5c4e69edac6f7ec8e4087b04343dfb01d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adres/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddeb2c3bd0b1d7ee0a892c1eef9a411841cb23c85862234444105c1ac4b37c4b->leave($__internal_ddeb2c3bd0b1d7ee0a892c1eef9a411841cb23c85862234444105c1ac4b37c4b_prof);

        
        $__internal_169c075e656dc7fb92b45bc936dea5c4e69edac6f7ec8e4087b04343dfb01d34->leave($__internal_169c075e656dc7fb92b45bc936dea5c4e69edac6f7ec8e4087b04343dfb01d34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_446edfad1a2b88e6a52687e33d0b7b0a9d25761d17708e1434ec65d975bbeb01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446edfad1a2b88e6a52687e33d0b7b0a9d25761d17708e1434ec65d975bbeb01->enter($__internal_446edfad1a2b88e6a52687e33d0b7b0a9d25761d17708e1434ec65d975bbeb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b09b6a1d5cc3d76fbf49ad5f5c8caf4bd5ffdccf35647ef4486862d8e4b249fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09b6a1d5cc3d76fbf49ad5f5c8caf4bd5ffdccf35647ef4486862d8e4b249fb->enter($__internal_b09b6a1d5cc3d76fbf49ad5f5c8caf4bd5ffdccf35647ef4486862d8e4b249fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Adre</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adre"] ?? $this->getContext($context, "adre")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Miasto</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adre"] ?? $this->getContext($context, "adre")), "miasto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ulica</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adre"] ?? $this->getContext($context, "adre")), "ulica", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numerdomu</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adre"] ?? $this->getContext($context, "adre")), "numerDomu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numermieszkania</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adre"] ?? $this->getContext($context, "adre")), "numerMieszkania", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adres_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adres_edit", array("id" => $this->getAttribute(($context["adre"] ?? $this->getContext($context, "adre")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b09b6a1d5cc3d76fbf49ad5f5c8caf4bd5ffdccf35647ef4486862d8e4b249fb->leave($__internal_b09b6a1d5cc3d76fbf49ad5f5c8caf4bd5ffdccf35647ef4486862d8e4b249fb_prof);

        
        $__internal_446edfad1a2b88e6a52687e33d0b7b0a9d25761d17708e1434ec65d975bbeb01->leave($__internal_446edfad1a2b88e6a52687e33d0b7b0a9d25761d17708e1434ec65d975bbeb01_prof);

    }

    public function getTemplateName()
    {
        return "adres/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Adre</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ adre.id }}</td>
            </tr>
            <tr>
                <th>Miasto</th>
                <td>{{ adre.miasto }}</td>
            </tr>
            <tr>
                <th>Ulica</th>
                <td>{{ adre.ulica }}</td>
            </tr>
            <tr>
                <th>Numerdomu</th>
                <td>{{ adre.numerDomu }}</td>
            </tr>
            <tr>
                <th>Numermieszkania</th>
                <td>{{ adre.numerMieszkania }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adres_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('adres_edit', { 'id': adre.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "adres/show.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/adres/show.html.twig");
    }
}
