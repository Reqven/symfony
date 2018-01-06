<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_66af8f44fa99dd0bb346593177917003783d723784d9883bc07e8fd463c16281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66af8f44fa99dd0bb346593177917003783d723784d9883bc07e8fd463c16281->enter($__internal_66af8f44fa99dd0bb346593177917003783d723784d9883bc07e8fd463c16281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ba47c6ac5fac9ceb037980fc69132bd799e43bc7f26b260ec8d68b87b771a37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba47c6ac5fac9ceb037980fc69132bd799e43bc7f26b260ec8d68b87b771a37d->enter($__internal_ba47c6ac5fac9ceb037980fc69132bd799e43bc7f26b260ec8d68b87b771a37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66af8f44fa99dd0bb346593177917003783d723784d9883bc07e8fd463c16281->leave($__internal_66af8f44fa99dd0bb346593177917003783d723784d9883bc07e8fd463c16281_prof);

        
        $__internal_ba47c6ac5fac9ceb037980fc69132bd799e43bc7f26b260ec8d68b87b771a37d->leave($__internal_ba47c6ac5fac9ceb037980fc69132bd799e43bc7f26b260ec8d68b87b771a37d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c833a3178e6491c86896aef59ed2a52821f60712df55a2d75646d36973ec2e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c833a3178e6491c86896aef59ed2a52821f60712df55a2d75646d36973ec2e1c->enter($__internal_c833a3178e6491c86896aef59ed2a52821f60712df55a2d75646d36973ec2e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b8cdb32e10a7c2e492559d76a719c0fad6d8f6c186ada5ee9e2b0ba5f6d4671d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cdb32e10a7c2e492559d76a719c0fad6d8f6c186ada5ee9e2b0ba5f6d4671d->enter($__internal_b8cdb32e10a7c2e492559d76a719c0fad6d8f6c186ada5ee9e2b0ba5f6d4671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8cdb32e10a7c2e492559d76a719c0fad6d8f6c186ada5ee9e2b0ba5f6d4671d->leave($__internal_b8cdb32e10a7c2e492559d76a719c0fad6d8f6c186ada5ee9e2b0ba5f6d4671d_prof);

        
        $__internal_c833a3178e6491c86896aef59ed2a52821f60712df55a2d75646d36973ec2e1c->leave($__internal_c833a3178e6491c86896aef59ed2a52821f60712df55a2d75646d36973ec2e1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f355a09f881e8936f596c616d28e99ff765da3c1214b124b46931e0e660ff8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f355a09f881e8936f596c616d28e99ff765da3c1214b124b46931e0e660ff8aa->enter($__internal_f355a09f881e8936f596c616d28e99ff765da3c1214b124b46931e0e660ff8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe1a7461f79d45c886ac4d3106aa2c1b2110cb813477d9796a14849443d33708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1a7461f79d45c886ac4d3106aa2c1b2110cb813477d9796a14849443d33708->enter($__internal_fe1a7461f79d45c886ac4d3106aa2c1b2110cb813477d9796a14849443d33708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe1a7461f79d45c886ac4d3106aa2c1b2110cb813477d9796a14849443d33708->leave($__internal_fe1a7461f79d45c886ac4d3106aa2c1b2110cb813477d9796a14849443d33708_prof);

        
        $__internal_f355a09f881e8936f596c616d28e99ff765da3c1214b124b46931e0e660ff8aa->leave($__internal_f355a09f881e8936f596c616d28e99ff765da3c1214b124b46931e0e660ff8aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0b21b95b89afb1a5ead568d773f90a700e961f653839515a15d6f54ac40ce28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b21b95b89afb1a5ead568d773f90a700e961f653839515a15d6f54ac40ce28->enter($__internal_d0b21b95b89afb1a5ead568d773f90a700e961f653839515a15d6f54ac40ce28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf98c7a2068b6eeb972842a919cbee6b744e21d955244a1f2cbd341d39652d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf98c7a2068b6eeb972842a919cbee6b744e21d955244a1f2cbd341d39652d95->enter($__internal_cf98c7a2068b6eeb972842a919cbee6b744e21d955244a1f2cbd341d39652d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cf98c7a2068b6eeb972842a919cbee6b744e21d955244a1f2cbd341d39652d95->leave($__internal_cf98c7a2068b6eeb972842a919cbee6b744e21d955244a1f2cbd341d39652d95_prof);

        
        $__internal_d0b21b95b89afb1a5ead568d773f90a700e961f653839515a15d6f54ac40ce28->leave($__internal_d0b21b95b89afb1a5ead568d773f90a700e961f653839515a15d6f54ac40ce28_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
