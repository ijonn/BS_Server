<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7bc9d4463180904792e2e780e4e8babc2b606529b316a151653f42cdd065760b extends Twig_Template
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
        $__internal_4ba8e1f1b9d36b03d2b3a2db52147a425dca0251bfe4d7d7f5c73b08af6b5ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba8e1f1b9d36b03d2b3a2db52147a425dca0251bfe4d7d7f5c73b08af6b5ee3->enter($__internal_4ba8e1f1b9d36b03d2b3a2db52147a425dca0251bfe4d7d7f5c73b08af6b5ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8778894a137c485bfeec004538721566925324bbf14e525e921d2d0c6a59f8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8778894a137c485bfeec004538721566925324bbf14e525e921d2d0c6a59f8ad->enter($__internal_8778894a137c485bfeec004538721566925324bbf14e525e921d2d0c6a59f8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba8e1f1b9d36b03d2b3a2db52147a425dca0251bfe4d7d7f5c73b08af6b5ee3->leave($__internal_4ba8e1f1b9d36b03d2b3a2db52147a425dca0251bfe4d7d7f5c73b08af6b5ee3_prof);

        
        $__internal_8778894a137c485bfeec004538721566925324bbf14e525e921d2d0c6a59f8ad->leave($__internal_8778894a137c485bfeec004538721566925324bbf14e525e921d2d0c6a59f8ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83ce0a93b8044a8b893622511c8898e431085deeb25b54f9d0031edb8ab8acda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ce0a93b8044a8b893622511c8898e431085deeb25b54f9d0031edb8ab8acda->enter($__internal_83ce0a93b8044a8b893622511c8898e431085deeb25b54f9d0031edb8ab8acda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f75bb9e09a46f1c642162f8c98d6106a4e47f1088f016b410bf81fdcf9c22587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75bb9e09a46f1c642162f8c98d6106a4e47f1088f016b410bf81fdcf9c22587->enter($__internal_f75bb9e09a46f1c642162f8c98d6106a4e47f1088f016b410bf81fdcf9c22587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f75bb9e09a46f1c642162f8c98d6106a4e47f1088f016b410bf81fdcf9c22587->leave($__internal_f75bb9e09a46f1c642162f8c98d6106a4e47f1088f016b410bf81fdcf9c22587_prof);

        
        $__internal_83ce0a93b8044a8b893622511c8898e431085deeb25b54f9d0031edb8ab8acda->leave($__internal_83ce0a93b8044a8b893622511c8898e431085deeb25b54f9d0031edb8ab8acda_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db97c6c0aa17df622a1e5e52d506afbc086440f943e97adb59b85a71a39d7dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db97c6c0aa17df622a1e5e52d506afbc086440f943e97adb59b85a71a39d7dbc->enter($__internal_db97c6c0aa17df622a1e5e52d506afbc086440f943e97adb59b85a71a39d7dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a4544f0e442257a9f06a3ae81e3fc19d58c484fc53348a465a1b4decb4c6d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4544f0e442257a9f06a3ae81e3fc19d58c484fc53348a465a1b4decb4c6d48->enter($__internal_4a4544f0e442257a9f06a3ae81e3fc19d58c484fc53348a465a1b4decb4c6d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a4544f0e442257a9f06a3ae81e3fc19d58c484fc53348a465a1b4decb4c6d48->leave($__internal_4a4544f0e442257a9f06a3ae81e3fc19d58c484fc53348a465a1b4decb4c6d48_prof);

        
        $__internal_db97c6c0aa17df622a1e5e52d506afbc086440f943e97adb59b85a71a39d7dbc->leave($__internal_db97c6c0aa17df622a1e5e52d506afbc086440f943e97adb59b85a71a39d7dbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37a1d9d70e16baf2b91784049e49cbe86e629cc4a1cbd22a36105b35d5d8b792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a1d9d70e16baf2b91784049e49cbe86e629cc4a1cbd22a36105b35d5d8b792->enter($__internal_37a1d9d70e16baf2b91784049e49cbe86e629cc4a1cbd22a36105b35d5d8b792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35732a0609c315df178fe56107eb89a5446ec5cdde836c3fec21c2099b858312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35732a0609c315df178fe56107eb89a5446ec5cdde836c3fec21c2099b858312->enter($__internal_35732a0609c315df178fe56107eb89a5446ec5cdde836c3fec21c2099b858312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35732a0609c315df178fe56107eb89a5446ec5cdde836c3fec21c2099b858312->leave($__internal_35732a0609c315df178fe56107eb89a5446ec5cdde836c3fec21c2099b858312_prof);

        
        $__internal_37a1d9d70e16baf2b91784049e49cbe86e629cc4a1cbd22a36105b35d5d8b792->leave($__internal_37a1d9d70e16baf2b91784049e49cbe86e629cc4a1cbd22a36105b35d5d8b792_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/ijon/Sites/BS_server/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
