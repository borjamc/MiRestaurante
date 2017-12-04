<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_e96c8ea6b2cd245b111966cf2b8d6d6d3593c56e1726af8cd063bc14f8dd5afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96c8ea6b2cd245b111966cf2b8d6d6d3593c56e1726af8cd063bc14f8dd5afe->enter($__internal_e96c8ea6b2cd245b111966cf2b8d6d6d3593c56e1726af8cd063bc14f8dd5afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6bd98d05c3d055937899b1fcc2e6853947d37adc875bfe37a43688de6e602376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd98d05c3d055937899b1fcc2e6853947d37adc875bfe37a43688de6e602376->enter($__internal_6bd98d05c3d055937899b1fcc2e6853947d37adc875bfe37a43688de6e602376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e96c8ea6b2cd245b111966cf2b8d6d6d3593c56e1726af8cd063bc14f8dd5afe->leave($__internal_e96c8ea6b2cd245b111966cf2b8d6d6d3593c56e1726af8cd063bc14f8dd5afe_prof);

        
        $__internal_6bd98d05c3d055937899b1fcc2e6853947d37adc875bfe37a43688de6e602376->leave($__internal_6bd98d05c3d055937899b1fcc2e6853947d37adc875bfe37a43688de6e602376_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22941ed40f8e3c7eb12a345327192518549ccc11eddf00c733c7af6af845356c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22941ed40f8e3c7eb12a345327192518549ccc11eddf00c733c7af6af845356c->enter($__internal_22941ed40f8e3c7eb12a345327192518549ccc11eddf00c733c7af6af845356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c4363419f18fe2a8d7fce2be00baaf0e3da0f00ac36d1d6a2f692066b424feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4363419f18fe2a8d7fce2be00baaf0e3da0f00ac36d1d6a2f692066b424feb->enter($__internal_6c4363419f18fe2a8d7fce2be00baaf0e3da0f00ac36d1d6a2f692066b424feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6c4363419f18fe2a8d7fce2be00baaf0e3da0f00ac36d1d6a2f692066b424feb->leave($__internal_6c4363419f18fe2a8d7fce2be00baaf0e3da0f00ac36d1d6a2f692066b424feb_prof);

        
        $__internal_22941ed40f8e3c7eb12a345327192518549ccc11eddf00c733c7af6af845356c->leave($__internal_22941ed40f8e3c7eb12a345327192518549ccc11eddf00c733c7af6af845356c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20f2a9cfb31f5959c6c4bee3bd4350f8b60e98de2c6c51f2d38e2e419ba4ba25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f2a9cfb31f5959c6c4bee3bd4350f8b60e98de2c6c51f2d38e2e419ba4ba25->enter($__internal_20f2a9cfb31f5959c6c4bee3bd4350f8b60e98de2c6c51f2d38e2e419ba4ba25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bbc3d051a3513fc86c9177b309036ae1676dbce9f71d91375c3294dd1f09cac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc3d051a3513fc86c9177b309036ae1676dbce9f71d91375c3294dd1f09cac0->enter($__internal_bbc3d051a3513fc86c9177b309036ae1676dbce9f71d91375c3294dd1f09cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbc3d051a3513fc86c9177b309036ae1676dbce9f71d91375c3294dd1f09cac0->leave($__internal_bbc3d051a3513fc86c9177b309036ae1676dbce9f71d91375c3294dd1f09cac0_prof);

        
        $__internal_20f2a9cfb31f5959c6c4bee3bd4350f8b60e98de2c6c51f2d38e2e419ba4ba25->leave($__internal_20f2a9cfb31f5959c6c4bee3bd4350f8b60e98de2c6c51f2d38e2e419ba4ba25_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20c8145bde767d7c20d495f3b7037a68074cf60df95ce993c7d1ec400dd01469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c8145bde767d7c20d495f3b7037a68074cf60df95ce993c7d1ec400dd01469->enter($__internal_20c8145bde767d7c20d495f3b7037a68074cf60df95ce993c7d1ec400dd01469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4469bfd1bc5234e97c9fc11e2d8f1c29de9b15d064f0947878ba9c049cca73da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4469bfd1bc5234e97c9fc11e2d8f1c29de9b15d064f0947878ba9c049cca73da->enter($__internal_4469bfd1bc5234e97c9fc11e2d8f1c29de9b15d064f0947878ba9c049cca73da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4469bfd1bc5234e97c9fc11e2d8f1c29de9b15d064f0947878ba9c049cca73da->leave($__internal_4469bfd1bc5234e97c9fc11e2d8f1c29de9b15d064f0947878ba9c049cca73da_prof);

        
        $__internal_20c8145bde767d7c20d495f3b7037a68074cf60df95ce993c7d1ec400dd01469->leave($__internal_20c8145bde767d7c20d495f3b7037a68074cf60df95ce993c7d1ec400dd01469_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36d52e258b5cb355a94bd7ee24891cb0a1cfd5325867a81e3d9dbcab94b0af6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d52e258b5cb355a94bd7ee24891cb0a1cfd5325867a81e3d9dbcab94b0af6e->enter($__internal_36d52e258b5cb355a94bd7ee24891cb0a1cfd5325867a81e3d9dbcab94b0af6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1410fc1a9c545bbb2d02e74553234bd728449ea1732d5c41b1c70eb73bcefad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1410fc1a9c545bbb2d02e74553234bd728449ea1732d5c41b1c70eb73bcefad6->enter($__internal_1410fc1a9c545bbb2d02e74553234bd728449ea1732d5c41b1c70eb73bcefad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1410fc1a9c545bbb2d02e74553234bd728449ea1732d5c41b1c70eb73bcefad6->leave($__internal_1410fc1a9c545bbb2d02e74553234bd728449ea1732d5c41b1c70eb73bcefad6_prof);

        
        $__internal_36d52e258b5cb355a94bd7ee24891cb0a1cfd5325867a81e3d9dbcab94b0af6e->leave($__internal_36d52e258b5cb355a94bd7ee24891cb0a1cfd5325867a81e3d9dbcab94b0af6e_prof);

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
", "base.html.twig", "C:\\Users\\2daw\\Documents\\Symfo\\MiRestaurante\\app\\Resources\\views\\base.html.twig");
    }
}
