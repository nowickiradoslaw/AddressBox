<?php

/* osoba/show_telefon.html.twig */
class __TwigTemplate_6f4b633ac3477fa5412d46b7072276adeb5bf2c90a5f56b8d9c5c9f40cdfd6e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95c3697120b26327d325b49d1a60dfe4fce2d94ddf8528a76b8987a07a5b841f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c3697120b26327d325b49d1a60dfe4fce2d94ddf8528a76b8987a07a5b841f->enter($__internal_95c3697120b26327d325b49d1a60dfe4fce2d94ddf8528a76b8987a07a5b841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/show_telefon.html.twig"));

        $__internal_6569e5f9391cfc608facff200c32987b80704dfb139833dc6c064a7bad880dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6569e5f9391cfc608facff200c32987b80704dfb139833dc6c064a7bad880dd9->enter($__internal_6569e5f9391cfc608facff200c32987b80704dfb139833dc6c064a7bad880dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "osoba/show_telefon.html.twig"));

        // line 1
        echo "<tr>
<th>Telefon ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["telefon"] ?? $this->getContext($context, "telefon")), "typ", array()), "html", null, true);
        echo "</th>
<td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["telefon"] ?? $this->getContext($context, "telefon")), "numerTelefonu", array()), "html", null, true);
        echo "</td>
</tr>";
        
        $__internal_95c3697120b26327d325b49d1a60dfe4fce2d94ddf8528a76b8987a07a5b841f->leave($__internal_95c3697120b26327d325b49d1a60dfe4fce2d94ddf8528a76b8987a07a5b841f_prof);

        
        $__internal_6569e5f9391cfc608facff200c32987b80704dfb139833dc6c064a7bad880dd9->leave($__internal_6569e5f9391cfc608facff200c32987b80704dfb139833dc6c064a7bad880dd9_prof);

    }

    public function getTemplateName()
    {
        return "osoba/show_telefon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
<th>Telefon {{ telefon.typ }}</th>
<td>{{ telefon.numerTelefonu }}</td>
</tr>", "osoba/show_telefon.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/osoba/show_telefon.html.twig");
    }
}
