<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
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
        $__internal_c8d887ae308c6e4ccd4a2921766ea028641729388d26d288e97f42dd166ae585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d887ae308c6e4ccd4a2921766ea028641729388d26d288e97f42dd166ae585->enter($__internal_c8d887ae308c6e4ccd4a2921766ea028641729388d26d288e97f42dd166ae585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a0a61ef64b74bb92a74c339363e631a9909d9b9bee56d76d26f99001492c6585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a61ef64b74bb92a74c339363e631a9909d9b9bee56d76d26f99001492c6585->enter($__internal_a0a61ef64b74bb92a74c339363e631a9909d9b9bee56d76d26f99001492c6585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d887ae308c6e4ccd4a2921766ea028641729388d26d288e97f42dd166ae585->leave($__internal_c8d887ae308c6e4ccd4a2921766ea028641729388d26d288e97f42dd166ae585_prof);

        
        $__internal_a0a61ef64b74bb92a74c339363e631a9909d9b9bee56d76d26f99001492c6585->leave($__internal_a0a61ef64b74bb92a74c339363e631a9909d9b9bee56d76d26f99001492c6585_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a2add637dd09e61d8df352b29e8c59faa707b1652e1530b34a9902cb2897617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2add637dd09e61d8df352b29e8c59faa707b1652e1530b34a9902cb2897617->enter($__internal_2a2add637dd09e61d8df352b29e8c59faa707b1652e1530b34a9902cb2897617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8e146d0429450d60168f6ae8aeb33a7d65ac8adc3b3151f32f9df36beac3856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e146d0429450d60168f6ae8aeb33a7d65ac8adc3b3151f32f9df36beac3856->enter($__internal_b8e146d0429450d60168f6ae8aeb33a7d65ac8adc3b3151f32f9df36beac3856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b8e146d0429450d60168f6ae8aeb33a7d65ac8adc3b3151f32f9df36beac3856->leave($__internal_b8e146d0429450d60168f6ae8aeb33a7d65ac8adc3b3151f32f9df36beac3856_prof);

        
        $__internal_2a2add637dd09e61d8df352b29e8c59faa707b1652e1530b34a9902cb2897617->leave($__internal_2a2add637dd09e61d8df352b29e8c59faa707b1652e1530b34a9902cb2897617_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7645a614580fb1c309b744be8b1ee69debc08e7dca376faa710e58d457e200c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7645a614580fb1c309b744be8b1ee69debc08e7dca376faa710e58d457e200c2->enter($__internal_7645a614580fb1c309b744be8b1ee69debc08e7dca376faa710e58d457e200c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0e573deae17db9faea06cfcb4f1f5da05a095f4d0bd734e8faf6916ef1329ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e573deae17db9faea06cfcb4f1f5da05a095f4d0bd734e8faf6916ef1329ee->enter($__internal_f0e573deae17db9faea06cfcb4f1f5da05a095f4d0bd734e8faf6916ef1329ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f0e573deae17db9faea06cfcb4f1f5da05a095f4d0bd734e8faf6916ef1329ee->leave($__internal_f0e573deae17db9faea06cfcb4f1f5da05a095f4d0bd734e8faf6916ef1329ee_prof);

        
        $__internal_7645a614580fb1c309b744be8b1ee69debc08e7dca376faa710e58d457e200c2->leave($__internal_7645a614580fb1c309b744be8b1ee69debc08e7dca376faa710e58d457e200c2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d23778dff67b9a0c69daded9f68e95d755b653436aa95d235452ea379977997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d23778dff67b9a0c69daded9f68e95d755b653436aa95d235452ea379977997->enter($__internal_4d23778dff67b9a0c69daded9f68e95d755b653436aa95d235452ea379977997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af8259389e53d28f33b8cae02071b18460d8a3872ed22788f47c9e635c4121a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8259389e53d28f33b8cae02071b18460d8a3872ed22788f47c9e635c4121a2->enter($__internal_af8259389e53d28f33b8cae02071b18460d8a3872ed22788f47c9e635c4121a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_af8259389e53d28f33b8cae02071b18460d8a3872ed22788f47c9e635c4121a2->leave($__internal_af8259389e53d28f33b8cae02071b18460d8a3872ed22788f47c9e635c4121a2_prof);

        
        $__internal_4d23778dff67b9a0c69daded9f68e95d755b653436aa95d235452ea379977997->leave($__internal_4d23778dff67b9a0c69daded9f68e95d755b653436aa95d235452ea379977997_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\2daw\\Documents\\Symfo\\MiRestaurante\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
