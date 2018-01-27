<?php

/* AddressBoxBundle:Default:index.html.twig */
class __TwigTemplate_4ab999a3a8d51afe719de0593a932c176210c03166eefc49cb339350560c67ee extends Twig_Template
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
        $__internal_4d7879c54ece9bc6cee844a76dcf76290211afca2d7c67638851ed1b8165d40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7879c54ece9bc6cee844a76dcf76290211afca2d7c67638851ed1b8165d40f->enter($__internal_4d7879c54ece9bc6cee844a76dcf76290211afca2d7c67638851ed1b8165d40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBoxBundle:Default:index.html.twig"));

        $__internal_c8b6a3c95e3484cf82b0ecf259f85bf5a278c80193ad211825c6dc48371e4d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b6a3c95e3484cf82b0ecf259f85bf5a278c80193ad211825c6dc48371e4d16->enter($__internal_c8b6a3c95e3484cf82b0ecf259f85bf5a278c80193ad211825c6dc48371e4d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBoxBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4d7879c54ece9bc6cee844a76dcf76290211afca2d7c67638851ed1b8165d40f->leave($__internal_4d7879c54ece9bc6cee844a76dcf76290211afca2d7c67638851ed1b8165d40f_prof);

        
        $__internal_c8b6a3c95e3484cf82b0ecf259f85bf5a278c80193ad211825c6dc48371e4d16->leave($__internal_c8b6a3c95e3484cf82b0ecf259f85bf5a278c80193ad211825c6dc48371e4d16_prof);

    }

    public function getTemplateName()
    {
        return "AddressBoxBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AddressBoxBundle:Default:index.html.twig", "/home/radosaw/Address_box/Address_box/src/AddressBoxBundle/Resources/views/Default/index.html.twig");
    }
}
