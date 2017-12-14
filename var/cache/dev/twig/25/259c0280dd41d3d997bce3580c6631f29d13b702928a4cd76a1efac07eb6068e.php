<?php

/* MirestauranteBundle:Default:index.html.twig */
class __TwigTemplate_964c5326ea5d38ced3a3f6a6faf8e723671db429f967612d8e1ff15dcc1e0fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MirestauranteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_485848b4dc525df1d622218c7e7d852f5b722fc362edb81c9c447a6697567679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485848b4dc525df1d622218c7e7d852f5b722fc362edb81c9c447a6697567679->enter($__internal_485848b4dc525df1d622218c7e7d852f5b722fc362edb81c9c447a6697567679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MirestauranteBundle:Default:index.html.twig"));

        $__internal_d9050e32f79f7ea893c106fa3daec23c783463a43f654e965316224417e5097e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9050e32f79f7ea893c106fa3daec23c783463a43f654e965316224417e5097e->enter($__internal_d9050e32f79f7ea893c106fa3daec23c783463a43f654e965316224417e5097e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MirestauranteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485848b4dc525df1d622218c7e7d852f5b722fc362edb81c9c447a6697567679->leave($__internal_485848b4dc525df1d622218c7e7d852f5b722fc362edb81c9c447a6697567679_prof);

        
        $__internal_d9050e32f79f7ea893c106fa3daec23c783463a43f654e965316224417e5097e->leave($__internal_d9050e32f79f7ea893c106fa3daec23c783463a43f654e965316224417e5097e_prof);

    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        $__internal_d30c88dc64dc01a6b72240f7467ea1ab597ada145661ae38081b7c9fd3bd7702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30c88dc64dc01a6b72240f7467ea1ab597ada145661ae38081b7c9fd3bd7702->enter($__internal_d30c88dc64dc01a6b72240f7467ea1ab597ada145661ae38081b7c9fd3bd7702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_a073c3e55c88a92dd8efb001e213ca3e1ef72738c617e6ecced1bb3c03bb3160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a073c3e55c88a92dd8efb001e213ca3e1ef72738c617e6ecced1bb3c03bb3160->enter($__internal_a073c3e55c88a92dd8efb001e213ca3e1ef72738c617e6ecced1bb3c03bb3160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        echo " ";
        
        $__internal_a073c3e55c88a92dd8efb001e213ca3e1ef72738c617e6ecced1bb3c03bb3160->leave($__internal_a073c3e55c88a92dd8efb001e213ca3e1ef72738c617e6ecced1bb3c03bb3160_prof);

        
        $__internal_d30c88dc64dc01a6b72240f7467ea1ab597ada145661ae38081b7c9fd3bd7702->leave($__internal_d30c88dc64dc01a6b72240f7467ea1ab597ada145661ae38081b7c9fd3bd7702_prof);

    }

    public function getTemplateName()
    {
        return "MirestauranteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block section %} {% endblock %}
", "MirestauranteBundle:Default:index.html.twig", "C:\\Users\\2daw\\Documents\\Symfo\\MiRestaurante\\src\\MirestauranteBundle/Resources/views/Default/index.html.twig");
    }
}
