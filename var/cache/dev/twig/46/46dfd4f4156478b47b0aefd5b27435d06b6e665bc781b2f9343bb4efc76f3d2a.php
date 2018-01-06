<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bf922f1c784a9ba10dae1b8a91f6b91f4f5d9d2bed079acd1ef9603c39b16d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf922f1c784a9ba10dae1b8a91f6b91f4f5d9d2bed079acd1ef9603c39b16d3->enter($__internal_6bf922f1c784a9ba10dae1b8a91f6b91f4f5d9d2bed079acd1ef9603c39b16d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ae86cceff33105a59e2650646de7542523b8b59ab733441ae0a57e8772311d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae86cceff33105a59e2650646de7542523b8b59ab733441ae0a57e8772311d20->enter($__internal_ae86cceff33105a59e2650646de7542523b8b59ab733441ae0a57e8772311d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6bf922f1c784a9ba10dae1b8a91f6b91f4f5d9d2bed079acd1ef9603c39b16d3->leave($__internal_6bf922f1c784a9ba10dae1b8a91f6b91f4f5d9d2bed079acd1ef9603c39b16d3_prof);

        
        $__internal_ae86cceff33105a59e2650646de7542523b8b59ab733441ae0a57e8772311d20->leave($__internal_ae86cceff33105a59e2650646de7542523b8b59ab733441ae0a57e8772311d20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7d796c68746c15528dc0945dbb1e793df6f001ae54565b91fd6eaa62fbf079f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d796c68746c15528dc0945dbb1e793df6f001ae54565b91fd6eaa62fbf079f->enter($__internal_e7d796c68746c15528dc0945dbb1e793df6f001ae54565b91fd6eaa62fbf079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93c6a68fe93885020bc68e39cc7bd72d8fef17d068fc6ab6f16f08f432517cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c6a68fe93885020bc68e39cc7bd72d8fef17d068fc6ab6f16f08f432517cff->enter($__internal_93c6a68fe93885020bc68e39cc7bd72d8fef17d068fc6ab6f16f08f432517cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_93c6a68fe93885020bc68e39cc7bd72d8fef17d068fc6ab6f16f08f432517cff->leave($__internal_93c6a68fe93885020bc68e39cc7bd72d8fef17d068fc6ab6f16f08f432517cff_prof);

        
        $__internal_e7d796c68746c15528dc0945dbb1e793df6f001ae54565b91fd6eaa62fbf079f->leave($__internal_e7d796c68746c15528dc0945dbb1e793df6f001ae54565b91fd6eaa62fbf079f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b949c687a2061e0a395bac7d6128164948cffcf6fc07cd3d9f1386a2f1c115c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b949c687a2061e0a395bac7d6128164948cffcf6fc07cd3d9f1386a2f1c115c6->enter($__internal_b949c687a2061e0a395bac7d6128164948cffcf6fc07cd3d9f1386a2f1c115c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50926ead13cf4c2f8f352e5e27e6a6382e8d95a0718ff3295be9e031c179c2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50926ead13cf4c2f8f352e5e27e6a6382e8d95a0718ff3295be9e031c179c2c8->enter($__internal_50926ead13cf4c2f8f352e5e27e6a6382e8d95a0718ff3295be9e031c179c2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_50926ead13cf4c2f8f352e5e27e6a6382e8d95a0718ff3295be9e031c179c2c8->leave($__internal_50926ead13cf4c2f8f352e5e27e6a6382e8d95a0718ff3295be9e031c179c2c8_prof);

        
        $__internal_b949c687a2061e0a395bac7d6128164948cffcf6fc07cd3d9f1386a2f1c115c6->leave($__internal_b949c687a2061e0a395bac7d6128164948cffcf6fc07cd3d9f1386a2f1c115c6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5618c482cdeb15db8665c285a7e0993aa38353009bf0846bb0a45591d615148a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5618c482cdeb15db8665c285a7e0993aa38353009bf0846bb0a45591d615148a->enter($__internal_5618c482cdeb15db8665c285a7e0993aa38353009bf0846bb0a45591d615148a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a2c3eaf5a920fffaa2ccbb8ee081d1f2e178552d886b7bef4636ce4ad3dc407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2c3eaf5a920fffaa2ccbb8ee081d1f2e178552d886b7bef4636ce4ad3dc407->enter($__internal_4a2c3eaf5a920fffaa2ccbb8ee081d1f2e178552d886b7bef4636ce4ad3dc407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a2c3eaf5a920fffaa2ccbb8ee081d1f2e178552d886b7bef4636ce4ad3dc407->leave($__internal_4a2c3eaf5a920fffaa2ccbb8ee081d1f2e178552d886b7bef4636ce4ad3dc407_prof);

        
        $__internal_5618c482cdeb15db8665c285a7e0993aa38353009bf0846bb0a45591d615148a->leave($__internal_5618c482cdeb15db8665c285a7e0993aa38353009bf0846bb0a45591d615148a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
