<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e60e6d1589ff65ef96a1a9aec7d90704b698a9db54bf55aed7caf37a331dc349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60e6d1589ff65ef96a1a9aec7d90704b698a9db54bf55aed7caf37a331dc349->enter($__internal_e60e6d1589ff65ef96a1a9aec7d90704b698a9db54bf55aed7caf37a331dc349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bf73c46b92e1de45245a398bf23baea56019bb7798fa3bd8a7b68c730fab2fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf73c46b92e1de45245a398bf23baea56019bb7798fa3bd8a7b68c730fab2fd7->enter($__internal_bf73c46b92e1de45245a398bf23baea56019bb7798fa3bd8a7b68c730fab2fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e60e6d1589ff65ef96a1a9aec7d90704b698a9db54bf55aed7caf37a331dc349->leave($__internal_e60e6d1589ff65ef96a1a9aec7d90704b698a9db54bf55aed7caf37a331dc349_prof);

        
        $__internal_bf73c46b92e1de45245a398bf23baea56019bb7798fa3bd8a7b68c730fab2fd7->leave($__internal_bf73c46b92e1de45245a398bf23baea56019bb7798fa3bd8a7b68c730fab2fd7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b73c7b0c4267fce92af9986a1921063f255b77cfbfd99df3b439bc4687a1d9ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73c7b0c4267fce92af9986a1921063f255b77cfbfd99df3b439bc4687a1d9ef->enter($__internal_b73c7b0c4267fce92af9986a1921063f255b77cfbfd99df3b439bc4687a1d9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d89bb2889d7e85739ee1ce551be61754027af031065bc061a4ed48953d7fd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d89bb2889d7e85739ee1ce551be61754027af031065bc061a4ed48953d7fd01->enter($__internal_7d89bb2889d7e85739ee1ce551be61754027af031065bc061a4ed48953d7fd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7d89bb2889d7e85739ee1ce551be61754027af031065bc061a4ed48953d7fd01->leave($__internal_7d89bb2889d7e85739ee1ce551be61754027af031065bc061a4ed48953d7fd01_prof);

        
        $__internal_b73c7b0c4267fce92af9986a1921063f255b77cfbfd99df3b439bc4687a1d9ef->leave($__internal_b73c7b0c4267fce92af9986a1921063f255b77cfbfd99df3b439bc4687a1d9ef_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_82ad006e1b45a1679c05016fe222ff5966731c92f0ea12343a1f8e169cbd51e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ad006e1b45a1679c05016fe222ff5966731c92f0ea12343a1f8e169cbd51e9->enter($__internal_82ad006e1b45a1679c05016fe222ff5966731c92f0ea12343a1f8e169cbd51e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d37799c46772c2e8e1995c1def247e1a5975a8a8ec6018111e193001fe5dfe46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37799c46772c2e8e1995c1def247e1a5975a8a8ec6018111e193001fe5dfe46->enter($__internal_d37799c46772c2e8e1995c1def247e1a5975a8a8ec6018111e193001fe5dfe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d37799c46772c2e8e1995c1def247e1a5975a8a8ec6018111e193001fe5dfe46->leave($__internal_d37799c46772c2e8e1995c1def247e1a5975a8a8ec6018111e193001fe5dfe46_prof);

        
        $__internal_82ad006e1b45a1679c05016fe222ff5966731c92f0ea12343a1f8e169cbd51e9->leave($__internal_82ad006e1b45a1679c05016fe222ff5966731c92f0ea12343a1f8e169cbd51e9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f079fbf0a8548ef87b014e51900e8438c210738871d49f92bec25e240f213266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f079fbf0a8548ef87b014e51900e8438c210738871d49f92bec25e240f213266->enter($__internal_f079fbf0a8548ef87b014e51900e8438c210738871d49f92bec25e240f213266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5886daa260f82179a76b099a09f2a6dc101d3c6a503e9cf11563794208dd2435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5886daa260f82179a76b099a09f2a6dc101d3c6a503e9cf11563794208dd2435->enter($__internal_5886daa260f82179a76b099a09f2a6dc101d3c6a503e9cf11563794208dd2435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5886daa260f82179a76b099a09f2a6dc101d3c6a503e9cf11563794208dd2435->leave($__internal_5886daa260f82179a76b099a09f2a6dc101d3c6a503e9cf11563794208dd2435_prof);

        
        $__internal_f079fbf0a8548ef87b014e51900e8438c210738871d49f92bec25e240f213266->leave($__internal_f079fbf0a8548ef87b014e51900e8438c210738871d49f92bec25e240f213266_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\2daw\\Documents\\Symfo\\MiRestaurante\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
