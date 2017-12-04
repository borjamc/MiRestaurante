<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_b21339cfb83116d60992577969be273e6391ce945234cf0a3c3e71476c95fdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21339cfb83116d60992577969be273e6391ce945234cf0a3c3e71476c95fdbe->enter($__internal_b21339cfb83116d60992577969be273e6391ce945234cf0a3c3e71476c95fdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3d057520b82836bce12f5828dd769539483309bffe7e8e7335c75b07d7fb6bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d057520b82836bce12f5828dd769539483309bffe7e8e7335c75b07d7fb6bf5->enter($__internal_3d057520b82836bce12f5828dd769539483309bffe7e8e7335c75b07d7fb6bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21339cfb83116d60992577969be273e6391ce945234cf0a3c3e71476c95fdbe->leave($__internal_b21339cfb83116d60992577969be273e6391ce945234cf0a3c3e71476c95fdbe_prof);

        
        $__internal_3d057520b82836bce12f5828dd769539483309bffe7e8e7335c75b07d7fb6bf5->leave($__internal_3d057520b82836bce12f5828dd769539483309bffe7e8e7335c75b07d7fb6bf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ead7110bf6ee44599de2e55da6645527b240228ee9f4e993bbdbcad098c5464c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead7110bf6ee44599de2e55da6645527b240228ee9f4e993bbdbcad098c5464c->enter($__internal_ead7110bf6ee44599de2e55da6645527b240228ee9f4e993bbdbcad098c5464c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_47c5069942a03d8225c047a38fb9b5fdf356e9236e822d7987aff315466749f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c5069942a03d8225c047a38fb9b5fdf356e9236e822d7987aff315466749f0->enter($__internal_47c5069942a03d8225c047a38fb9b5fdf356e9236e822d7987aff315466749f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47c5069942a03d8225c047a38fb9b5fdf356e9236e822d7987aff315466749f0->leave($__internal_47c5069942a03d8225c047a38fb9b5fdf356e9236e822d7987aff315466749f0_prof);

        
        $__internal_ead7110bf6ee44599de2e55da6645527b240228ee9f4e993bbdbcad098c5464c->leave($__internal_ead7110bf6ee44599de2e55da6645527b240228ee9f4e993bbdbcad098c5464c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_008de6f85c4fe65fcf719e587cf5d539978f00f90b71e0c48e462dc4d0fbfca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008de6f85c4fe65fcf719e587cf5d539978f00f90b71e0c48e462dc4d0fbfca2->enter($__internal_008de6f85c4fe65fcf719e587cf5d539978f00f90b71e0c48e462dc4d0fbfca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68c74dfb0235fb79788a87690806b56834197b68908378391e0cfd75b45138cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c74dfb0235fb79788a87690806b56834197b68908378391e0cfd75b45138cb->enter($__internal_68c74dfb0235fb79788a87690806b56834197b68908378391e0cfd75b45138cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68c74dfb0235fb79788a87690806b56834197b68908378391e0cfd75b45138cb->leave($__internal_68c74dfb0235fb79788a87690806b56834197b68908378391e0cfd75b45138cb_prof);

        
        $__internal_008de6f85c4fe65fcf719e587cf5d539978f00f90b71e0c48e462dc4d0fbfca2->leave($__internal_008de6f85c4fe65fcf719e587cf5d539978f00f90b71e0c48e462dc4d0fbfca2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99a1d7da305f5307fa1828beb9a5a2b84b61a8db60c952d7a7725a66e36af11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a1d7da305f5307fa1828beb9a5a2b84b61a8db60c952d7a7725a66e36af11c->enter($__internal_99a1d7da305f5307fa1828beb9a5a2b84b61a8db60c952d7a7725a66e36af11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_847131281c60fed3ebb88684236a8be43b3fe3c3ce788dfb38dc000a6c869bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847131281c60fed3ebb88684236a8be43b3fe3c3ce788dfb38dc000a6c869bf8->enter($__internal_847131281c60fed3ebb88684236a8be43b3fe3c3ce788dfb38dc000a6c869bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_847131281c60fed3ebb88684236a8be43b3fe3c3ce788dfb38dc000a6c869bf8->leave($__internal_847131281c60fed3ebb88684236a8be43b3fe3c3ce788dfb38dc000a6c869bf8_prof);

        
        $__internal_99a1d7da305f5307fa1828beb9a5a2b84b61a8db60c952d7a7725a66e36af11c->leave($__internal_99a1d7da305f5307fa1828beb9a5a2b84b61a8db60c952d7a7725a66e36af11c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\2daw\\Documents\\Symfo\\MiRestaurante\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
