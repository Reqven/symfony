<?php

/* classe/index.html.twig */
class __TwigTemplate_324ea847bb8b48247abe8025b2dad6fde27ff216a6794b10982b62e84c338977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classe/index.html.twig", 1);
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
        $__internal_c3992620a41fdc52840f37903edb419c1773a2b4a640394af2cce6ea28d46159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3992620a41fdc52840f37903edb419c1773a2b4a640394af2cce6ea28d46159->enter($__internal_c3992620a41fdc52840f37903edb419c1773a2b4a640394af2cce6ea28d46159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classe/index.html.twig"));

        $__internal_16c561214dac1b261fa1eaca084adcbdaa50aee9cc6d7ac587d234c46885c76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c561214dac1b261fa1eaca084adcbdaa50aee9cc6d7ac587d234c46885c76f->enter($__internal_16c561214dac1b261fa1eaca084adcbdaa50aee9cc6d7ac587d234c46885c76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3992620a41fdc52840f37903edb419c1773a2b4a640394af2cce6ea28d46159->leave($__internal_c3992620a41fdc52840f37903edb419c1773a2b4a640394af2cce6ea28d46159_prof);

        
        $__internal_16c561214dac1b261fa1eaca084adcbdaa50aee9cc6d7ac587d234c46885c76f->leave($__internal_16c561214dac1b261fa1eaca084adcbdaa50aee9cc6d7ac587d234c46885c76f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94da718caa30e94eba04e96fe77909d9a12c932adffe2f8874d818eb611adc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94da718caa30e94eba04e96fe77909d9a12c932adffe2f8874d818eb611adc27->enter($__internal_94da718caa30e94eba04e96fe77909d9a12c932adffe2f8874d818eb611adc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed1f4be558f56443cf2c9571e064a133d68357131737eb9fa41f0f8951da122e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1f4be558f56443cf2c9571e064a133d68357131737eb9fa41f0f8951da122e->enter($__internal_ed1f4be558f56443cf2c9571e064a133d68357131737eb9fa41f0f8951da122e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Classes list</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_show", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_show", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_edit", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_new");
        echo "\">Create a new classe</a>
        </li>
    </ul>
";
        
        $__internal_ed1f4be558f56443cf2c9571e064a133d68357131737eb9fa41f0f8951da122e->leave($__internal_ed1f4be558f56443cf2c9571e064a133d68357131737eb9fa41f0f8951da122e_prof);

        
        $__internal_94da718caa30e94eba04e96fe77909d9a12c932adffe2f8874d818eb611adc27->leave($__internal_94da718caa30e94eba04e96fe77909d9a12c932adffe2f8874d818eb611adc27_prof);

    }

    public function getTemplateName()
    {
        return "classe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Classes list</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for classe in classes %}
            <tr>
                <td><a href=\"{{ path('classe_show', { 'id': classe.id }) }}\">{{ classe.nom }}</a></td>
                <td>{{ classe.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('classe_show', { 'id': classe.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('classe_edit', { 'id': classe.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('classe_new') }}\">Create a new classe</a>
        </li>
    </ul>
{% endblock %}
", "classe/index.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classe/index.html.twig");
    }
}
