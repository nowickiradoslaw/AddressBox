<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_069390e2682524232a76b8c388dd0b5996ed0341760e1ead6f4a187a446f3eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069390e2682524232a76b8c388dd0b5996ed0341760e1ead6f4a187a446f3eda->enter($__internal_069390e2682524232a76b8c388dd0b5996ed0341760e1ead6f4a187a446f3eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e46ec1a92ad6c0cb5451e65e1e466cf58d518da30da1a1987dcd70f15a6060b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46ec1a92ad6c0cb5451e65e1e466cf58d518da30da1a1987dcd70f15a6060b6->enter($__internal_e46ec1a92ad6c0cb5451e65e1e466cf58d518da30da1a1987dcd70f15a6060b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_069390e2682524232a76b8c388dd0b5996ed0341760e1ead6f4a187a446f3eda->leave($__internal_069390e2682524232a76b8c388dd0b5996ed0341760e1ead6f4a187a446f3eda_prof);

        
        $__internal_e46ec1a92ad6c0cb5451e65e1e466cf58d518da30da1a1987dcd70f15a6060b6->leave($__internal_e46ec1a92ad6c0cb5451e65e1e466cf58d518da30da1a1987dcd70f15a6060b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95b0b82fd5573fef168dbca932a02ec8f246965a785c6500f25862cef290eb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b0b82fd5573fef168dbca932a02ec8f246965a785c6500f25862cef290eb04->enter($__internal_95b0b82fd5573fef168dbca932a02ec8f246965a785c6500f25862cef290eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c56818e4e68b2392daa1c29bd0d67b881df866f172a6eea8e7f90242e91313e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56818e4e68b2392daa1c29bd0d67b881df866f172a6eea8e7f90242e91313e0->enter($__internal_c56818e4e68b2392daa1c29bd0d67b881df866f172a6eea8e7f90242e91313e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c56818e4e68b2392daa1c29bd0d67b881df866f172a6eea8e7f90242e91313e0->leave($__internal_c56818e4e68b2392daa1c29bd0d67b881df866f172a6eea8e7f90242e91313e0_prof);

        
        $__internal_95b0b82fd5573fef168dbca932a02ec8f246965a785c6500f25862cef290eb04->leave($__internal_95b0b82fd5573fef168dbca932a02ec8f246965a785c6500f25862cef290eb04_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9cbb00fdfe618cca4cdad9c978e81288d52082df7f264679529eb9aa7e5913e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbb00fdfe618cca4cdad9c978e81288d52082df7f264679529eb9aa7e5913e7->enter($__internal_9cbb00fdfe618cca4cdad9c978e81288d52082df7f264679529eb9aa7e5913e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1115f482b5a0f9b45c763e9ad134a92306dcfe1418a61b8b4dc27119bd833ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1115f482b5a0f9b45c763e9ad134a92306dcfe1418a61b8b4dc27119bd833ef5->enter($__internal_1115f482b5a0f9b45c763e9ad134a92306dcfe1418a61b8b4dc27119bd833ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1115f482b5a0f9b45c763e9ad134a92306dcfe1418a61b8b4dc27119bd833ef5->leave($__internal_1115f482b5a0f9b45c763e9ad134a92306dcfe1418a61b8b4dc27119bd833ef5_prof);

        
        $__internal_9cbb00fdfe618cca4cdad9c978e81288d52082df7f264679529eb9aa7e5913e7->leave($__internal_9cbb00fdfe618cca4cdad9c978e81288d52082df7f264679529eb9aa7e5913e7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_177c9c94c6bca0e3ab8b004ac798e3ef082231d7340f571e707db1aa5028e0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177c9c94c6bca0e3ab8b004ac798e3ef082231d7340f571e707db1aa5028e0e5->enter($__internal_177c9c94c6bca0e3ab8b004ac798e3ef082231d7340f571e707db1aa5028e0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aeb31f315bf7d234abbe17c388c1dd2912fb4a34b42b066fe7a4262a62a05e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb31f315bf7d234abbe17c388c1dd2912fb4a34b42b066fe7a4262a62a05e9c->enter($__internal_aeb31f315bf7d234abbe17c388c1dd2912fb4a34b42b066fe7a4262a62a05e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aeb31f315bf7d234abbe17c388c1dd2912fb4a34b42b066fe7a4262a62a05e9c->leave($__internal_aeb31f315bf7d234abbe17c388c1dd2912fb4a34b42b066fe7a4262a62a05e9c_prof);

        
        $__internal_177c9c94c6bca0e3ab8b004ac798e3ef082231d7340f571e707db1aa5028e0e5->leave($__internal_177c9c94c6bca0e3ab8b004ac798e3ef082231d7340f571e707db1aa5028e0e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/radosaw/Address_box/Address_box/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
