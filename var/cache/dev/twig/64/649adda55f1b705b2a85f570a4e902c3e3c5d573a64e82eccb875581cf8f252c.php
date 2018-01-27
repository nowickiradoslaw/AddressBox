<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a2243f2ed70b67fbc5e8858cd874405258f580fdd4d287263bce9364cd185d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2243f2ed70b67fbc5e8858cd874405258f580fdd4d287263bce9364cd185d2->enter($__internal_1a2243f2ed70b67fbc5e8858cd874405258f580fdd4d287263bce9364cd185d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7f76def1f7d48bba655038f1afb016853749c393cd1fd5d911ee8598af09a638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f76def1f7d48bba655038f1afb016853749c393cd1fd5d911ee8598af09a638->enter($__internal_7f76def1f7d48bba655038f1afb016853749c393cd1fd5d911ee8598af09a638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a2243f2ed70b67fbc5e8858cd874405258f580fdd4d287263bce9364cd185d2->leave($__internal_1a2243f2ed70b67fbc5e8858cd874405258f580fdd4d287263bce9364cd185d2_prof);

        
        $__internal_7f76def1f7d48bba655038f1afb016853749c393cd1fd5d911ee8598af09a638->leave($__internal_7f76def1f7d48bba655038f1afb016853749c393cd1fd5d911ee8598af09a638_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2b29c7580ab5ca92b5ac4d3683f6cbb36a1340e8ea338155755a1e92e05aa69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b29c7580ab5ca92b5ac4d3683f6cbb36a1340e8ea338155755a1e92e05aa69->enter($__internal_a2b29c7580ab5ca92b5ac4d3683f6cbb36a1340e8ea338155755a1e92e05aa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7b05342cb9c6fcfdc53e3cfd5e6256d57cfe60de4522f52ceecee094f41cc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b05342cb9c6fcfdc53e3cfd5e6256d57cfe60de4522f52ceecee094f41cc68->enter($__internal_f7b05342cb9c6fcfdc53e3cfd5e6256d57cfe60de4522f52ceecee094f41cc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7b05342cb9c6fcfdc53e3cfd5e6256d57cfe60de4522f52ceecee094f41cc68->leave($__internal_f7b05342cb9c6fcfdc53e3cfd5e6256d57cfe60de4522f52ceecee094f41cc68_prof);

        
        $__internal_a2b29c7580ab5ca92b5ac4d3683f6cbb36a1340e8ea338155755a1e92e05aa69->leave($__internal_a2b29c7580ab5ca92b5ac4d3683f6cbb36a1340e8ea338155755a1e92e05aa69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_638e91c3f8a305d223f73649b4953847026ae6a75325a7728d1c7b60dd6439fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638e91c3f8a305d223f73649b4953847026ae6a75325a7728d1c7b60dd6439fc->enter($__internal_638e91c3f8a305d223f73649b4953847026ae6a75325a7728d1c7b60dd6439fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_acac71170a69df5a33aaf0e4f28caf9003ae0a1225b3496b77f6b4baeac25558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acac71170a69df5a33aaf0e4f28caf9003ae0a1225b3496b77f6b4baeac25558->enter($__internal_acac71170a69df5a33aaf0e4f28caf9003ae0a1225b3496b77f6b4baeac25558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_acac71170a69df5a33aaf0e4f28caf9003ae0a1225b3496b77f6b4baeac25558->leave($__internal_acac71170a69df5a33aaf0e4f28caf9003ae0a1225b3496b77f6b4baeac25558_prof);

        
        $__internal_638e91c3f8a305d223f73649b4953847026ae6a75325a7728d1c7b60dd6439fc->leave($__internal_638e91c3f8a305d223f73649b4953847026ae6a75325a7728d1c7b60dd6439fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2011ef46b5ae8dd330972f24cf2b0cda69c9fc4f70130f9bd957ad1da0f51c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2011ef46b5ae8dd330972f24cf2b0cda69c9fc4f70130f9bd957ad1da0f51c4->enter($__internal_a2011ef46b5ae8dd330972f24cf2b0cda69c9fc4f70130f9bd957ad1da0f51c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a64b53ed9066dae23482826df8fec7228635df5ddae64cc8d283762caa6600a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64b53ed9066dae23482826df8fec7228635df5ddae64cc8d283762caa6600a1->enter($__internal_a64b53ed9066dae23482826df8fec7228635df5ddae64cc8d283762caa6600a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a64b53ed9066dae23482826df8fec7228635df5ddae64cc8d283762caa6600a1->leave($__internal_a64b53ed9066dae23482826df8fec7228635df5ddae64cc8d283762caa6600a1_prof);

        
        $__internal_a2011ef46b5ae8dd330972f24cf2b0cda69c9fc4f70130f9bd957ad1da0f51c4->leave($__internal_a2011ef46b5ae8dd330972f24cf2b0cda69c9fc4f70130f9bd957ad1da0f51c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/radosaw/Address_box/Address_box/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
