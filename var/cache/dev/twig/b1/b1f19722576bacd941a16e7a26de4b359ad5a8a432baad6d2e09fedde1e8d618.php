<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_af6f2e7fda5731c3f7ea8a3f42b98251a3227bf24b19a6f798842335a6bc67ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6f2e7fda5731c3f7ea8a3f42b98251a3227bf24b19a6f798842335a6bc67ae->enter($__internal_af6f2e7fda5731c3f7ea8a3f42b98251a3227bf24b19a6f798842335a6bc67ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5b248fbef3910968d41aff167dbf8230aed013439c988d8a5b5fca7e1c0e3f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b248fbef3910968d41aff167dbf8230aed013439c988d8a5b5fca7e1c0e3f9c->enter($__internal_5b248fbef3910968d41aff167dbf8230aed013439c988d8a5b5fca7e1c0e3f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_af6f2e7fda5731c3f7ea8a3f42b98251a3227bf24b19a6f798842335a6bc67ae->leave($__internal_af6f2e7fda5731c3f7ea8a3f42b98251a3227bf24b19a6f798842335a6bc67ae_prof);

        
        $__internal_5b248fbef3910968d41aff167dbf8230aed013439c988d8a5b5fca7e1c0e3f9c->leave($__internal_5b248fbef3910968d41aff167dbf8230aed013439c988d8a5b5fca7e1c0e3f9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6c7fa5bcfc20081aa03010b2e774b8c202fb3b4adfb54de662f38fe0e63716b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c7fa5bcfc20081aa03010b2e774b8c202fb3b4adfb54de662f38fe0e63716b->enter($__internal_f6c7fa5bcfc20081aa03010b2e774b8c202fb3b4adfb54de662f38fe0e63716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69b5072942e41a47e3dc322b4d576f0b8cc9e1f252f7f187122a02a107c8b198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b5072942e41a47e3dc322b4d576f0b8cc9e1f252f7f187122a02a107c8b198->enter($__internal_69b5072942e41a47e3dc322b4d576f0b8cc9e1f252f7f187122a02a107c8b198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_69b5072942e41a47e3dc322b4d576f0b8cc9e1f252f7f187122a02a107c8b198->leave($__internal_69b5072942e41a47e3dc322b4d576f0b8cc9e1f252f7f187122a02a107c8b198_prof);

        
        $__internal_f6c7fa5bcfc20081aa03010b2e774b8c202fb3b4adfb54de662f38fe0e63716b->leave($__internal_f6c7fa5bcfc20081aa03010b2e774b8c202fb3b4adfb54de662f38fe0e63716b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aac1a2729ed7cb8f3710ea32d2deaab44af68ff32660b677e0d4e8e1d48083b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac1a2729ed7cb8f3710ea32d2deaab44af68ff32660b677e0d4e8e1d48083b1->enter($__internal_aac1a2729ed7cb8f3710ea32d2deaab44af68ff32660b677e0d4e8e1d48083b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8eff9a06baeebdb07e2d54f2b9e65f6cbf9bfad4f969e77f6a0c838b61811e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eff9a06baeebdb07e2d54f2b9e65f6cbf9bfad4f969e77f6a0c838b61811e5a->enter($__internal_8eff9a06baeebdb07e2d54f2b9e65f6cbf9bfad4f969e77f6a0c838b61811e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8eff9a06baeebdb07e2d54f2b9e65f6cbf9bfad4f969e77f6a0c838b61811e5a->leave($__internal_8eff9a06baeebdb07e2d54f2b9e65f6cbf9bfad4f969e77f6a0c838b61811e5a_prof);

        
        $__internal_aac1a2729ed7cb8f3710ea32d2deaab44af68ff32660b677e0d4e8e1d48083b1->leave($__internal_aac1a2729ed7cb8f3710ea32d2deaab44af68ff32660b677e0d4e8e1d48083b1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_db84ad83e796c51aa4b9333ca71747b583bea17c8a27a9a6e3d9f42d98c8d1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db84ad83e796c51aa4b9333ca71747b583bea17c8a27a9a6e3d9f42d98c8d1fc->enter($__internal_db84ad83e796c51aa4b9333ca71747b583bea17c8a27a9a6e3d9f42d98c8d1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a19dabf165d13d13fc0ce6aff4bda7ca0d539f397b2df0f170a7480e389c1cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19dabf165d13d13fc0ce6aff4bda7ca0d539f397b2df0f170a7480e389c1cca->enter($__internal_a19dabf165d13d13fc0ce6aff4bda7ca0d539f397b2df0f170a7480e389c1cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a19dabf165d13d13fc0ce6aff4bda7ca0d539f397b2df0f170a7480e389c1cca->leave($__internal_a19dabf165d13d13fc0ce6aff4bda7ca0d539f397b2df0f170a7480e389c1cca_prof);

        
        $__internal_db84ad83e796c51aa4b9333ca71747b583bea17c8a27a9a6e3d9f42d98c8d1fc->leave($__internal_db84ad83e796c51aa4b9333ca71747b583bea17c8a27a9a6e3d9f42d98c8d1fc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eec6b877f347a94e75c185009dbe8ed2da16ad200b1999fc139c30fc28b714a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec6b877f347a94e75c185009dbe8ed2da16ad200b1999fc139c30fc28b714a9->enter($__internal_eec6b877f347a94e75c185009dbe8ed2da16ad200b1999fc139c30fc28b714a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c42e65468aad1b88532680e37851257f74477e27a6eca05db2ed55054968d8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42e65468aad1b88532680e37851257f74477e27a6eca05db2ed55054968d8c7->enter($__internal_c42e65468aad1b88532680e37851257f74477e27a6eca05db2ed55054968d8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c42e65468aad1b88532680e37851257f74477e27a6eca05db2ed55054968d8c7->leave($__internal_c42e65468aad1b88532680e37851257f74477e27a6eca05db2ed55054968d8c7_prof);

        
        $__internal_eec6b877f347a94e75c185009dbe8ed2da16ad200b1999fc139c30fc28b714a9->leave($__internal_eec6b877f347a94e75c185009dbe8ed2da16ad200b1999fc139c30fc28b714a9_prof);

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
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/base.html.twig");
    }
}
