<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_71a9a97e34eaa121d1ef2015c4636b562c50b6d33ac33f19656b7b60ab1534d2 extends Twig_Template
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
        $__internal_66e606d80454c6d069b532d28cfa7d8296e6ac54ac7ebbbf11b7532c8704851e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e606d80454c6d069b532d28cfa7d8296e6ac54ac7ebbbf11b7532c8704851e->enter($__internal_66e606d80454c6d069b532d28cfa7d8296e6ac54ac7ebbbf11b7532c8704851e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0a553c915819170444b5861e54483e1fc3908305f8a35dcb1425f8b548a327fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a553c915819170444b5861e54483e1fc3908305f8a35dcb1425f8b548a327fa->enter($__internal_0a553c915819170444b5861e54483e1fc3908305f8a35dcb1425f8b548a327fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e606d80454c6d069b532d28cfa7d8296e6ac54ac7ebbbf11b7532c8704851e->leave($__internal_66e606d80454c6d069b532d28cfa7d8296e6ac54ac7ebbbf11b7532c8704851e_prof);

        
        $__internal_0a553c915819170444b5861e54483e1fc3908305f8a35dcb1425f8b548a327fa->leave($__internal_0a553c915819170444b5861e54483e1fc3908305f8a35dcb1425f8b548a327fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a88a994921f6ce0bef8feb1ce0d6c31c661bf661e49011157ccb4adf81bac040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88a994921f6ce0bef8feb1ce0d6c31c661bf661e49011157ccb4adf81bac040->enter($__internal_a88a994921f6ce0bef8feb1ce0d6c31c661bf661e49011157ccb4adf81bac040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_00ddc6b68f8d04309b229ca7573d356873d703494d3398440bd084af37b31ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ddc6b68f8d04309b229ca7573d356873d703494d3398440bd084af37b31ac8->enter($__internal_00ddc6b68f8d04309b229ca7573d356873d703494d3398440bd084af37b31ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_00ddc6b68f8d04309b229ca7573d356873d703494d3398440bd084af37b31ac8->leave($__internal_00ddc6b68f8d04309b229ca7573d356873d703494d3398440bd084af37b31ac8_prof);

        
        $__internal_a88a994921f6ce0bef8feb1ce0d6c31c661bf661e49011157ccb4adf81bac040->leave($__internal_a88a994921f6ce0bef8feb1ce0d6c31c661bf661e49011157ccb4adf81bac040_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9af77ec83bb1844e95e9519234e70e5253bfb60c12387a64b2bf01653ddc0949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af77ec83bb1844e95e9519234e70e5253bfb60c12387a64b2bf01653ddc0949->enter($__internal_9af77ec83bb1844e95e9519234e70e5253bfb60c12387a64b2bf01653ddc0949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96673f1041a0b7ac9dc1e16cdc22358b40c9127056e33f1338d0b3fcb3339680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96673f1041a0b7ac9dc1e16cdc22358b40c9127056e33f1338d0b3fcb3339680->enter($__internal_96673f1041a0b7ac9dc1e16cdc22358b40c9127056e33f1338d0b3fcb3339680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_96673f1041a0b7ac9dc1e16cdc22358b40c9127056e33f1338d0b3fcb3339680->leave($__internal_96673f1041a0b7ac9dc1e16cdc22358b40c9127056e33f1338d0b3fcb3339680_prof);

        
        $__internal_9af77ec83bb1844e95e9519234e70e5253bfb60c12387a64b2bf01653ddc0949->leave($__internal_9af77ec83bb1844e95e9519234e70e5253bfb60c12387a64b2bf01653ddc0949_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24d8ac1bbf4a0fdbf3f761430c6a8c7baa2b0f24e1f9088770bc53e21489073f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d8ac1bbf4a0fdbf3f761430c6a8c7baa2b0f24e1f9088770bc53e21489073f->enter($__internal_24d8ac1bbf4a0fdbf3f761430c6a8c7baa2b0f24e1f9088770bc53e21489073f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77e8e90791edcf07bf2b5c09d00fde6c512856385b07702678bee0d946c0a4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e8e90791edcf07bf2b5c09d00fde6c512856385b07702678bee0d946c0a4a4->enter($__internal_77e8e90791edcf07bf2b5c09d00fde6c512856385b07702678bee0d946c0a4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_77e8e90791edcf07bf2b5c09d00fde6c512856385b07702678bee0d946c0a4a4->leave($__internal_77e8e90791edcf07bf2b5c09d00fde6c512856385b07702678bee0d946c0a4a4_prof);

        
        $__internal_24d8ac1bbf4a0fdbf3f761430c6a8c7baa2b0f24e1f9088770bc53e21489073f->leave($__internal_24d8ac1bbf4a0fdbf3f761430c6a8c7baa2b0f24e1f9088770bc53e21489073f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/ijon/Sites/BS_server/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
