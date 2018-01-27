<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04f14a545869084b6019356230a32d2d3f6bd037120f5b7a5913f5084d0e0494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f14a545869084b6019356230a32d2d3f6bd037120f5b7a5913f5084d0e0494->enter($__internal_04f14a545869084b6019356230a32d2d3f6bd037120f5b7a5913f5084d0e0494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b3f06246bcc2a1b702522eed22b0f49ac0fbd193b3b6761d79307724bcfc8f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f06246bcc2a1b702522eed22b0f49ac0fbd193b3b6761d79307724bcfc8f2d->enter($__internal_b3f06246bcc2a1b702522eed22b0f49ac0fbd193b3b6761d79307724bcfc8f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_04f14a545869084b6019356230a32d2d3f6bd037120f5b7a5913f5084d0e0494->leave($__internal_04f14a545869084b6019356230a32d2d3f6bd037120f5b7a5913f5084d0e0494_prof);

        
        $__internal_b3f06246bcc2a1b702522eed22b0f49ac0fbd193b3b6761d79307724bcfc8f2d->leave($__internal_b3f06246bcc2a1b702522eed22b0f49ac0fbd193b3b6761d79307724bcfc8f2d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1646bcd14b5361ebe4d95eb8f782089701fc2622339aa799bff4cd04b0f7ea5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1646bcd14b5361ebe4d95eb8f782089701fc2622339aa799bff4cd04b0f7ea5c->enter($__internal_1646bcd14b5361ebe4d95eb8f782089701fc2622339aa799bff4cd04b0f7ea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb07b896fff8d6f65ccfa902d751d3c90ff32f093e9b32d595bf1841b04efbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb07b896fff8d6f65ccfa902d751d3c90ff32f093e9b32d595bf1841b04efbd7->enter($__internal_fb07b896fff8d6f65ccfa902d751d3c90ff32f093e9b32d595bf1841b04efbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fb07b896fff8d6f65ccfa902d751d3c90ff32f093e9b32d595bf1841b04efbd7->leave($__internal_fb07b896fff8d6f65ccfa902d751d3c90ff32f093e9b32d595bf1841b04efbd7_prof);

        
        $__internal_1646bcd14b5361ebe4d95eb8f782089701fc2622339aa799bff4cd04b0f7ea5c->leave($__internal_1646bcd14b5361ebe4d95eb8f782089701fc2622339aa799bff4cd04b0f7ea5c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b7edf41d839bce150c9586043adef651f4fb537d09e536a6c10a483f00eb712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7edf41d839bce150c9586043adef651f4fb537d09e536a6c10a483f00eb712->enter($__internal_3b7edf41d839bce150c9586043adef651f4fb537d09e536a6c10a483f00eb712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_374247c35df3d60fd5c075c767f70f3894437fb3960b3f80b1d5d71d374799af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374247c35df3d60fd5c075c767f70f3894437fb3960b3f80b1d5d71d374799af->enter($__internal_374247c35df3d60fd5c075c767f70f3894437fb3960b3f80b1d5d71d374799af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_374247c35df3d60fd5c075c767f70f3894437fb3960b3f80b1d5d71d374799af->leave($__internal_374247c35df3d60fd5c075c767f70f3894437fb3960b3f80b1d5d71d374799af_prof);

        
        $__internal_3b7edf41d839bce150c9586043adef651f4fb537d09e536a6c10a483f00eb712->leave($__internal_3b7edf41d839bce150c9586043adef651f4fb537d09e536a6c10a483f00eb712_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5e04347a659a41de50a2f243c9ef5112b1a1c268fe4b961ff941bae1afd07b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e04347a659a41de50a2f243c9ef5112b1a1c268fe4b961ff941bae1afd07b0->enter($__internal_a5e04347a659a41de50a2f243c9ef5112b1a1c268fe4b961ff941bae1afd07b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17ed8d63668e98315429e32f3530dd4ec20ef2095efc505cbef1ca2b2e8bee9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ed8d63668e98315429e32f3530dd4ec20ef2095efc505cbef1ca2b2e8bee9f->enter($__internal_17ed8d63668e98315429e32f3530dd4ec20ef2095efc505cbef1ca2b2e8bee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_17ed8d63668e98315429e32f3530dd4ec20ef2095efc505cbef1ca2b2e8bee9f->leave($__internal_17ed8d63668e98315429e32f3530dd4ec20ef2095efc505cbef1ca2b2e8bee9f_prof);

        
        $__internal_a5e04347a659a41de50a2f243c9ef5112b1a1c268fe4b961ff941bae1afd07b0->leave($__internal_a5e04347a659a41de50a2f243c9ef5112b1a1c268fe4b961ff941bae1afd07b0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81d5ca615cf861a44fc99c8dcb4f649f224f66e0b7e9d1d8cde87ac1fda6aacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d5ca615cf861a44fc99c8dcb4f649f224f66e0b7e9d1d8cde87ac1fda6aacc->enter($__internal_81d5ca615cf861a44fc99c8dcb4f649f224f66e0b7e9d1d8cde87ac1fda6aacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4bb81f9eec9a0a1f57847a95b79db72986e8c12d0d2ed5838406f21dd6069bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb81f9eec9a0a1f57847a95b79db72986e8c12d0d2ed5838406f21dd6069bfd->enter($__internal_4bb81f9eec9a0a1f57847a95b79db72986e8c12d0d2ed5838406f21dd6069bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4bb81f9eec9a0a1f57847a95b79db72986e8c12d0d2ed5838406f21dd6069bfd->leave($__internal_4bb81f9eec9a0a1f57847a95b79db72986e8c12d0d2ed5838406f21dd6069bfd_prof);

        
        $__internal_81d5ca615cf861a44fc99c8dcb4f649f224f66e0b7e9d1d8cde87ac1fda6aacc->leave($__internal_81d5ca615cf861a44fc99c8dcb4f649f224f66e0b7e9d1d8cde87ac1fda6aacc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/radosaw/Address_box/Address_box/app/Resources/views/base.html.twig");
    }
}
