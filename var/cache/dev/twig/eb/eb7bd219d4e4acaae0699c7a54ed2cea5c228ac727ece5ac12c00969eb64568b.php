<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_33145a244be93748174710aa3339deda9ec9831ead19812f0f19f97c406d3844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_429b9b5e2c9752c54193889a6e23af427ae1aa2f992b759ea42e4b2d63155836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429b9b5e2c9752c54193889a6e23af427ae1aa2f992b759ea42e4b2d63155836->enter($__internal_429b9b5e2c9752c54193889a6e23af427ae1aa2f992b759ea42e4b2d63155836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8ee04dee1fa261a67af0d01a446d741473c2141264517cde4adfa3df8fc2e750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee04dee1fa261a67af0d01a446d741473c2141264517cde4adfa3df8fc2e750->enter($__internal_8ee04dee1fa261a67af0d01a446d741473c2141264517cde4adfa3df8fc2e750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429b9b5e2c9752c54193889a6e23af427ae1aa2f992b759ea42e4b2d63155836->leave($__internal_429b9b5e2c9752c54193889a6e23af427ae1aa2f992b759ea42e4b2d63155836_prof);

        
        $__internal_8ee04dee1fa261a67af0d01a446d741473c2141264517cde4adfa3df8fc2e750->leave($__internal_8ee04dee1fa261a67af0d01a446d741473c2141264517cde4adfa3df8fc2e750_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9f8516f6a47522fb25bf11aba43ef42da2b8e5327df2af5ee008dbc58018f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f8516f6a47522fb25bf11aba43ef42da2b8e5327df2af5ee008dbc58018f30->enter($__internal_c9f8516f6a47522fb25bf11aba43ef42da2b8e5327df2af5ee008dbc58018f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f445de358fb3327a6d8af8dfef87cae2fdbef0011a199cd274f6c81ce62e2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f445de358fb3327a6d8af8dfef87cae2fdbef0011a199cd274f6c81ce62e2db->enter($__internal_4f445de358fb3327a6d8af8dfef87cae2fdbef0011a199cd274f6c81ce62e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4f445de358fb3327a6d8af8dfef87cae2fdbef0011a199cd274f6c81ce62e2db->leave($__internal_4f445de358fb3327a6d8af8dfef87cae2fdbef0011a199cd274f6c81ce62e2db_prof);

        
        $__internal_c9f8516f6a47522fb25bf11aba43ef42da2b8e5327df2af5ee008dbc58018f30->leave($__internal_c9f8516f6a47522fb25bf11aba43ef42da2b8e5327df2af5ee008dbc58018f30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/ijon/Sites/BS_server/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
