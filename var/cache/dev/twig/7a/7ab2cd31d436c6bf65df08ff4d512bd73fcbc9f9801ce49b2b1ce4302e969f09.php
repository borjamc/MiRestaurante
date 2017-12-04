<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
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
        $__internal_d70c5482bd7c2f82bfd83a16cc0bfc47e8f293b96e7fb28efc1bfaa29bc79bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70c5482bd7c2f82bfd83a16cc0bfc47e8f293b96e7fb28efc1bfaa29bc79bca->enter($__internal_d70c5482bd7c2f82bfd83a16cc0bfc47e8f293b96e7fb28efc1bfaa29bc79bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eb37c97cb9a3c7b39c462a774540d146f9a4383933dd89200010c5cdb20e8201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb37c97cb9a3c7b39c462a774540d146f9a4383933dd89200010c5cdb20e8201->enter($__internal_eb37c97cb9a3c7b39c462a774540d146f9a4383933dd89200010c5cdb20e8201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d70c5482bd7c2f82bfd83a16cc0bfc47e8f293b96e7fb28efc1bfaa29bc79bca->leave($__internal_d70c5482bd7c2f82bfd83a16cc0bfc47e8f293b96e7fb28efc1bfaa29bc79bca_prof);

        
        $__internal_eb37c97cb9a3c7b39c462a774540d146f9a4383933dd89200010c5cdb20e8201->leave($__internal_eb37c97cb9a3c7b39c462a774540d146f9a4383933dd89200010c5cdb20e8201_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cc8507796f5341f5c12e7ad2b11b8c00db90941d88cf9576f610dcd17fb1a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc8507796f5341f5c12e7ad2b11b8c00db90941d88cf9576f610dcd17fb1a48->enter($__internal_6cc8507796f5341f5c12e7ad2b11b8c00db90941d88cf9576f610dcd17fb1a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f20bc256f5b97dcda94b7aa453136dd9ffe789a22635f77e9d491a4692d5dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f20bc256f5b97dcda94b7aa453136dd9ffe789a22635f77e9d491a4692d5dab->enter($__internal_3f20bc256f5b97dcda94b7aa453136dd9ffe789a22635f77e9d491a4692d5dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3f20bc256f5b97dcda94b7aa453136dd9ffe789a22635f77e9d491a4692d5dab->leave($__internal_3f20bc256f5b97dcda94b7aa453136dd9ffe789a22635f77e9d491a4692d5dab_prof);

        
        $__internal_6cc8507796f5341f5c12e7ad2b11b8c00db90941d88cf9576f610dcd17fb1a48->leave($__internal_6cc8507796f5341f5c12e7ad2b11b8c00db90941d88cf9576f610dcd17fb1a48_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf21476cc7ed6337cd32441a13592bf2046ad9762d671f27e0a88ae244c6955b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf21476cc7ed6337cd32441a13592bf2046ad9762d671f27e0a88ae244c6955b->enter($__internal_bf21476cc7ed6337cd32441a13592bf2046ad9762d671f27e0a88ae244c6955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1667cb51e3a85c2a5949bb2fc1148c9679800a220374417aaf524c72b9256d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1667cb51e3a85c2a5949bb2fc1148c9679800a220374417aaf524c72b9256d2->enter($__internal_a1667cb51e3a85c2a5949bb2fc1148c9679800a220374417aaf524c72b9256d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a1667cb51e3a85c2a5949bb2fc1148c9679800a220374417aaf524c72b9256d2->leave($__internal_a1667cb51e3a85c2a5949bb2fc1148c9679800a220374417aaf524c72b9256d2_prof);

        
        $__internal_bf21476cc7ed6337cd32441a13592bf2046ad9762d671f27e0a88ae244c6955b->leave($__internal_bf21476cc7ed6337cd32441a13592bf2046ad9762d671f27e0a88ae244c6955b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ee4f2361e2b4bbd52d9c97e3639962932f776246dde7cbe40c6319851c63645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee4f2361e2b4bbd52d9c97e3639962932f776246dde7cbe40c6319851c63645->enter($__internal_5ee4f2361e2b4bbd52d9c97e3639962932f776246dde7cbe40c6319851c63645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e9f38698d12a7fda6dffe28b43a6fde245458b450a85930ae39a70ddc128600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9f38698d12a7fda6dffe28b43a6fde245458b450a85930ae39a70ddc128600->enter($__internal_9e9f38698d12a7fda6dffe28b43a6fde245458b450a85930ae39a70ddc128600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9e9f38698d12a7fda6dffe28b43a6fde245458b450a85930ae39a70ddc128600->leave($__internal_9e9f38698d12a7fda6dffe28b43a6fde245458b450a85930ae39a70ddc128600_prof);

        
        $__internal_5ee4f2361e2b4bbd52d9c97e3639962932f776246dde7cbe40c6319851c63645->leave($__internal_5ee4f2361e2b4bbd52d9c97e3639962932f776246dde7cbe40c6319851c63645_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\2daw\\Documents\\Symfo\\MiRestaurante\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
