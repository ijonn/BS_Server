<?php

/* base.html.twig */
class __TwigTemplate_8af8b9cf232aea6797fa60fdf1d643e6c40ccb80c32076afc5129c48ea55e93d extends Twig_Template
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
        $__internal_f34b05de3c8e762985b8f27db8aab3b32eb135959cea6cfc290284011e1ea6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34b05de3c8e762985b8f27db8aab3b32eb135959cea6cfc290284011e1ea6f8->enter($__internal_f34b05de3c8e762985b8f27db8aab3b32eb135959cea6cfc290284011e1ea6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2c7410abf45cfc6d604464cfbb9adc06b4c0d5ad12b448a89e46e4e1df3d5999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7410abf45cfc6d604464cfbb9adc06b4c0d5ad12b448a89e46e4e1df3d5999->enter($__internal_2c7410abf45cfc6d604464cfbb9adc06b4c0d5ad12b448a89e46e4e1df3d5999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f34b05de3c8e762985b8f27db8aab3b32eb135959cea6cfc290284011e1ea6f8->leave($__internal_f34b05de3c8e762985b8f27db8aab3b32eb135959cea6cfc290284011e1ea6f8_prof);

        
        $__internal_2c7410abf45cfc6d604464cfbb9adc06b4c0d5ad12b448a89e46e4e1df3d5999->leave($__internal_2c7410abf45cfc6d604464cfbb9adc06b4c0d5ad12b448a89e46e4e1df3d5999_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f329bb1db7863a05549220bbc641dfa6716afc975bf899a43fa2dbeca7cd81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f329bb1db7863a05549220bbc641dfa6716afc975bf899a43fa2dbeca7cd81b->enter($__internal_5f329bb1db7863a05549220bbc641dfa6716afc975bf899a43fa2dbeca7cd81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b967c5f963a184951c174ee0afe3bcc30823c8dc729546407116594c1c60f87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b967c5f963a184951c174ee0afe3bcc30823c8dc729546407116594c1c60f87c->enter($__internal_b967c5f963a184951c174ee0afe3bcc30823c8dc729546407116594c1c60f87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b967c5f963a184951c174ee0afe3bcc30823c8dc729546407116594c1c60f87c->leave($__internal_b967c5f963a184951c174ee0afe3bcc30823c8dc729546407116594c1c60f87c_prof);

        
        $__internal_5f329bb1db7863a05549220bbc641dfa6716afc975bf899a43fa2dbeca7cd81b->leave($__internal_5f329bb1db7863a05549220bbc641dfa6716afc975bf899a43fa2dbeca7cd81b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d060d1c327f9c3f9467bdc54a099b5a973fc81369e94e3761857ddfd44432328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d060d1c327f9c3f9467bdc54a099b5a973fc81369e94e3761857ddfd44432328->enter($__internal_d060d1c327f9c3f9467bdc54a099b5a973fc81369e94e3761857ddfd44432328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd22751287630414f8bbd98edb5ff978713cff7b878fb77ce85aea8747d2f74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd22751287630414f8bbd98edb5ff978713cff7b878fb77ce85aea8747d2f74e->enter($__internal_fd22751287630414f8bbd98edb5ff978713cff7b878fb77ce85aea8747d2f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd22751287630414f8bbd98edb5ff978713cff7b878fb77ce85aea8747d2f74e->leave($__internal_fd22751287630414f8bbd98edb5ff978713cff7b878fb77ce85aea8747d2f74e_prof);

        
        $__internal_d060d1c327f9c3f9467bdc54a099b5a973fc81369e94e3761857ddfd44432328->leave($__internal_d060d1c327f9c3f9467bdc54a099b5a973fc81369e94e3761857ddfd44432328_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f955044b41a36e4ffc5fa6af0a1a0d9fb1b415c510fe632238a21e5be7d1e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f955044b41a36e4ffc5fa6af0a1a0d9fb1b415c510fe632238a21e5be7d1e41->enter($__internal_7f955044b41a36e4ffc5fa6af0a1a0d9fb1b415c510fe632238a21e5be7d1e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab112e18b98e8f759eb7802343cd32397c016a914f850c7b8fc7dcbd35d454c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab112e18b98e8f759eb7802343cd32397c016a914f850c7b8fc7dcbd35d454c3->enter($__internal_ab112e18b98e8f759eb7802343cd32397c016a914f850c7b8fc7dcbd35d454c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab112e18b98e8f759eb7802343cd32397c016a914f850c7b8fc7dcbd35d454c3->leave($__internal_ab112e18b98e8f759eb7802343cd32397c016a914f850c7b8fc7dcbd35d454c3_prof);

        
        $__internal_7f955044b41a36e4ffc5fa6af0a1a0d9fb1b415c510fe632238a21e5be7d1e41->leave($__internal_7f955044b41a36e4ffc5fa6af0a1a0d9fb1b415c510fe632238a21e5be7d1e41_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dd9a70510e9592486d6d801fd1e1a8a0dd8933e482725c92bee192752b4bdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd9a70510e9592486d6d801fd1e1a8a0dd8933e482725c92bee192752b4bdb1->enter($__internal_4dd9a70510e9592486d6d801fd1e1a8a0dd8933e482725c92bee192752b4bdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0176b3f71b2bca7b6b299ca259e878fb1baecde5569919ade5181dd93ad77463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0176b3f71b2bca7b6b299ca259e878fb1baecde5569919ade5181dd93ad77463->enter($__internal_0176b3f71b2bca7b6b299ca259e878fb1baecde5569919ade5181dd93ad77463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0176b3f71b2bca7b6b299ca259e878fb1baecde5569919ade5181dd93ad77463->leave($__internal_0176b3f71b2bca7b6b299ca259e878fb1baecde5569919ade5181dd93ad77463_prof);

        
        $__internal_4dd9a70510e9592486d6d801fd1e1a8a0dd8933e482725c92bee192752b4bdb1->leave($__internal_4dd9a70510e9592486d6d801fd1e1a8a0dd8933e482725c92bee192752b4bdb1_prof);

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
", "base.html.twig", "/Users/ijon/Sites/BS_server/app/Resources/views/base.html.twig");
    }
}
