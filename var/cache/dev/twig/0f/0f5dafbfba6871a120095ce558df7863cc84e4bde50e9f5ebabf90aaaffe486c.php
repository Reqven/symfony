<?php

/* classe/new.html.twig */
class __TwigTemplate_4b3dd4567945a5b731d0b6c94c8994a195c2afb8c490946f76a4474c4d78ca7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classe/new.html.twig", 1);
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
        $__internal_683cbc07f8e054f4657c3401218868654a67d097e9c1bfea8e7c11f98a660933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683cbc07f8e054f4657c3401218868654a67d097e9c1bfea8e7c11f98a660933->enter($__internal_683cbc07f8e054f4657c3401218868654a67d097e9c1bfea8e7c11f98a660933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classe/new.html.twig"));

        $__internal_9368b432221200b32706e94ad494351c216b1248cf469cf38318ff8db22449b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9368b432221200b32706e94ad494351c216b1248cf469cf38318ff8db22449b8->enter($__internal_9368b432221200b32706e94ad494351c216b1248cf469cf38318ff8db22449b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_683cbc07f8e054f4657c3401218868654a67d097e9c1bfea8e7c11f98a660933->leave($__internal_683cbc07f8e054f4657c3401218868654a67d097e9c1bfea8e7c11f98a660933_prof);

        
        $__internal_9368b432221200b32706e94ad494351c216b1248cf469cf38318ff8db22449b8->leave($__internal_9368b432221200b32706e94ad494351c216b1248cf469cf38318ff8db22449b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0b9c4dbb2f67704ea11b9184f71cc4a159c7fd95238da7d8b47df0f4c1ef65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0b9c4dbb2f67704ea11b9184f71cc4a159c7fd95238da7d8b47df0f4c1ef65->enter($__internal_fe0b9c4dbb2f67704ea11b9184f71cc4a159c7fd95238da7d8b47df0f4c1ef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b99ae824e264294c174e2763d80c08005442bcdac7822b412552ba0173d1745e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99ae824e264294c174e2763d80c08005442bcdac7822b412552ba0173d1745e->enter($__internal_b99ae824e264294c174e2763d80c08005442bcdac7822b412552ba0173d1745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Classe creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b99ae824e264294c174e2763d80c08005442bcdac7822b412552ba0173d1745e->leave($__internal_b99ae824e264294c174e2763d80c08005442bcdac7822b412552ba0173d1745e_prof);

        
        $__internal_fe0b9c4dbb2f67704ea11b9184f71cc4a159c7fd95238da7d8b47df0f4c1ef65->leave($__internal_fe0b9c4dbb2f67704ea11b9184f71cc4a159c7fd95238da7d8b47df0f4c1ef65_prof);

    }

    public function getTemplateName()
    {
        return "classe/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Classe creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('classe_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "classe/new.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classe/new.html.twig");
    }
}
