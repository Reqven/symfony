<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_b537c3058303152797777dff517731a0d631283a583738e66ffbb44f83eb4774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b537c3058303152797777dff517731a0d631283a583738e66ffbb44f83eb4774->enter($__internal_b537c3058303152797777dff517731a0d631283a583738e66ffbb44f83eb4774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5c4e9e8e2dd0615216ba62de5a0d0ed9f2d82b62f712d0612df29f79ddc2c139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4e9e8e2dd0615216ba62de5a0d0ed9f2d82b62f712d0612df29f79ddc2c139->enter($__internal_5c4e9e8e2dd0615216ba62de5a0d0ed9f2d82b62f712d0612df29f79ddc2c139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b537c3058303152797777dff517731a0d631283a583738e66ffbb44f83eb4774->leave($__internal_b537c3058303152797777dff517731a0d631283a583738e66ffbb44f83eb4774_prof);

        
        $__internal_5c4e9e8e2dd0615216ba62de5a0d0ed9f2d82b62f712d0612df29f79ddc2c139->leave($__internal_5c4e9e8e2dd0615216ba62de5a0d0ed9f2d82b62f712d0612df29f79ddc2c139_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acf0b872bec8c52f7b1f77fce2e04a1249b2a8d04b5e3acc91c3ccf8da5a5036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf0b872bec8c52f7b1f77fce2e04a1249b2a8d04b5e3acc91c3ccf8da5a5036->enter($__internal_acf0b872bec8c52f7b1f77fce2e04a1249b2a8d04b5e3acc91c3ccf8da5a5036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_835d8fa163c1680641e689bf6184814b0e2e4389b660402f9d9d55c6113d8aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835d8fa163c1680641e689bf6184814b0e2e4389b660402f9d9d55c6113d8aee->enter($__internal_835d8fa163c1680641e689bf6184814b0e2e4389b660402f9d9d55c6113d8aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_835d8fa163c1680641e689bf6184814b0e2e4389b660402f9d9d55c6113d8aee->leave($__internal_835d8fa163c1680641e689bf6184814b0e2e4389b660402f9d9d55c6113d8aee_prof);

        
        $__internal_acf0b872bec8c52f7b1f77fce2e04a1249b2a8d04b5e3acc91c3ccf8da5a5036->leave($__internal_acf0b872bec8c52f7b1f77fce2e04a1249b2a8d04b5e3acc91c3ccf8da5a5036_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f80776b5c28d92dd69bd2925c3dda9191851f98f0a64ec9d293f04c4c3f687b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f80776b5c28d92dd69bd2925c3dda9191851f98f0a64ec9d293f04c4c3f687b->enter($__internal_4f80776b5c28d92dd69bd2925c3dda9191851f98f0a64ec9d293f04c4c3f687b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_adbac7548c2a36eb86f4ff90c4a1643eb7a222a912c6e9290b54f100db4d5115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbac7548c2a36eb86f4ff90c4a1643eb7a222a912c6e9290b54f100db4d5115->enter($__internal_adbac7548c2a36eb86f4ff90c4a1643eb7a222a912c6e9290b54f100db4d5115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_adbac7548c2a36eb86f4ff90c4a1643eb7a222a912c6e9290b54f100db4d5115->leave($__internal_adbac7548c2a36eb86f4ff90c4a1643eb7a222a912c6e9290b54f100db4d5115_prof);

        
        $__internal_4f80776b5c28d92dd69bd2925c3dda9191851f98f0a64ec9d293f04c4c3f687b->leave($__internal_4f80776b5c28d92dd69bd2925c3dda9191851f98f0a64ec9d293f04c4c3f687b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a45a800d746c927a8c212138a3b27a0221dec9ced788dbfdd81cc1abcdf89bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45a800d746c927a8c212138a3b27a0221dec9ced788dbfdd81cc1abcdf89bc0->enter($__internal_a45a800d746c927a8c212138a3b27a0221dec9ced788dbfdd81cc1abcdf89bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3bd981f24dc598ec76eec54b123788f6cb58d7d734d587f06b8d5a19c8941b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bd981f24dc598ec76eec54b123788f6cb58d7d734d587f06b8d5a19c8941b2->enter($__internal_a3bd981f24dc598ec76eec54b123788f6cb58d7d734d587f06b8d5a19c8941b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a3bd981f24dc598ec76eec54b123788f6cb58d7d734d587f06b8d5a19c8941b2->leave($__internal_a3bd981f24dc598ec76eec54b123788f6cb58d7d734d587f06b8d5a19c8941b2_prof);

        
        $__internal_a45a800d746c927a8c212138a3b27a0221dec9ced788dbfdd81cc1abcdf89bc0->leave($__internal_a45a800d746c927a8c212138a3b27a0221dec9ced788dbfdd81cc1abcdf89bc0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
