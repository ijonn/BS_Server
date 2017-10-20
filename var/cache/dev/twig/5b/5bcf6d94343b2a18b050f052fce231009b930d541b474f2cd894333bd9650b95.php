<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5eaa7118c41c79c36b3d51bcec01b7e1face4b588a92a0a54780a3faf840b950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0317387b3d4b794c065657ea7f74a4157a18051fd84adeb67e0c45b59f8fb80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0317387b3d4b794c065657ea7f74a4157a18051fd84adeb67e0c45b59f8fb80b->enter($__internal_0317387b3d4b794c065657ea7f74a4157a18051fd84adeb67e0c45b59f8fb80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f2ec482596de84b9f37936f6cd97e83f9852296433a13f5f14ff300c74b909c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ec482596de84b9f37936f6cd97e83f9852296433a13f5f14ff300c74b909c5->enter($__internal_f2ec482596de84b9f37936f6cd97e83f9852296433a13f5f14ff300c74b909c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0317387b3d4b794c065657ea7f74a4157a18051fd84adeb67e0c45b59f8fb80b->leave($__internal_0317387b3d4b794c065657ea7f74a4157a18051fd84adeb67e0c45b59f8fb80b_prof);

        
        $__internal_f2ec482596de84b9f37936f6cd97e83f9852296433a13f5f14ff300c74b909c5->leave($__internal_f2ec482596de84b9f37936f6cd97e83f9852296433a13f5f14ff300c74b909c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2bcae202cf6b40cad4c046e153385e9551d8f53dde3fa288b12d6d92db359c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2bcae202cf6b40cad4c046e153385e9551d8f53dde3fa288b12d6d92db359c9->enter($__internal_c2bcae202cf6b40cad4c046e153385e9551d8f53dde3fa288b12d6d92db359c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9919216c4480097038fdc0dc4435ca673030d8cd7f661d8aa2822cd371117bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9919216c4480097038fdc0dc4435ca673030d8cd7f661d8aa2822cd371117bc8->enter($__internal_9919216c4480097038fdc0dc4435ca673030d8cd7f661d8aa2822cd371117bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9919216c4480097038fdc0dc4435ca673030d8cd7f661d8aa2822cd371117bc8->leave($__internal_9919216c4480097038fdc0dc4435ca673030d8cd7f661d8aa2822cd371117bc8_prof);

        
        $__internal_c2bcae202cf6b40cad4c046e153385e9551d8f53dde3fa288b12d6d92db359c9->leave($__internal_c2bcae202cf6b40cad4c046e153385e9551d8f53dde3fa288b12d6d92db359c9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eedfda95dc81a75005a8ede4696d90b5fa2f6950f0a4a88835abf2f6d188e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eedfda95dc81a75005a8ede4696d90b5fa2f6950f0a4a88835abf2f6d188e73->enter($__internal_8eedfda95dc81a75005a8ede4696d90b5fa2f6950f0a4a88835abf2f6d188e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec410549d937496004cc04fbcfbf0b2a1aeb9fd1dff9d57abe0a33a525790f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec410549d937496004cc04fbcfbf0b2a1aeb9fd1dff9d57abe0a33a525790f8a->enter($__internal_ec410549d937496004cc04fbcfbf0b2a1aeb9fd1dff9d57abe0a33a525790f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ec410549d937496004cc04fbcfbf0b2a1aeb9fd1dff9d57abe0a33a525790f8a->leave($__internal_ec410549d937496004cc04fbcfbf0b2a1aeb9fd1dff9d57abe0a33a525790f8a_prof);

        
        $__internal_8eedfda95dc81a75005a8ede4696d90b5fa2f6950f0a4a88835abf2f6d188e73->leave($__internal_8eedfda95dc81a75005a8ede4696d90b5fa2f6950f0a4a88835abf2f6d188e73_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4bf2e472f850c3a1aa4eb6ef38dbb28819a9bd0e5d7df2728cf3fd965cfb8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bf2e472f850c3a1aa4eb6ef38dbb28819a9bd0e5d7df2728cf3fd965cfb8b3->enter($__internal_f4bf2e472f850c3a1aa4eb6ef38dbb28819a9bd0e5d7df2728cf3fd965cfb8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_012c52bd57696114a29baf383dbb082d82c3769f4a4023798b3b3228d583a6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012c52bd57696114a29baf383dbb082d82c3769f4a4023798b3b3228d583a6fa->enter($__internal_012c52bd57696114a29baf383dbb082d82c3769f4a4023798b3b3228d583a6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_012c52bd57696114a29baf383dbb082d82c3769f4a4023798b3b3228d583a6fa->leave($__internal_012c52bd57696114a29baf383dbb082d82c3769f4a4023798b3b3228d583a6fa_prof);

        
        $__internal_f4bf2e472f850c3a1aa4eb6ef38dbb28819a9bd0e5d7df2728cf3fd965cfb8b3->leave($__internal_f4bf2e472f850c3a1aa4eb6ef38dbb28819a9bd0e5d7df2728cf3fd965cfb8b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/ijon/Sites/BS_server/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
