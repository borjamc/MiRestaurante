<?php

/* MirestauranteBundle:Default:index.html.twig */
class __TwigTemplate_964c5326ea5d38ced3a3f6a6faf8e723671db429f967612d8e1ff15dcc1e0fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3e2eba0cb2b51c3782b6dc9dc36eff687c2eb83cd25bf2e69ce5401828e6888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e2eba0cb2b51c3782b6dc9dc36eff687c2eb83cd25bf2e69ce5401828e6888->enter($__internal_f3e2eba0cb2b51c3782b6dc9dc36eff687c2eb83cd25bf2e69ce5401828e6888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MirestauranteBundle:Default:index.html.twig"));

        $__internal_b4a9e9299962f3a0b9a14502babeaebfdf68cf04f4737160f0bc184da09394a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a9e9299962f3a0b9a14502babeaebfdf68cf04f4737160f0bc184da09394a8->enter($__internal_b4a9e9299962f3a0b9a14502babeaebfdf68cf04f4737160f0bc184da09394a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MirestauranteBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Plantilla/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Plantilla/css/business-casual.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body>

    <div class=\"tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block\">Business Casual</div>
    <div class=\"tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block\">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-faded py-lg-4\">
      <div class=\"container\">
        <a class=\"navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav mx-auto\">
            <li class=\"nav-item active px-lg-4\">
              <a class=\"nav-link text-uppercase text-expanded\" href=\"index.html\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item px-lg-4\">
              <a class=\"nav-link text-uppercase text-expanded\" href=\"about.html\">About</a>
            </li>
            <li class=\"nav-item px-lg-4\">
              <a class=\"nav-link text-uppercase text-expanded\" href=\"blog.html\">Blog</a>
            </li>
            <li class=\"nav-item px-lg-4\">
              <a class=\"nav-link text-uppercase text-expanded\" href=\"contact.html\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"bg-faded p-4 my-4\">
        <!-- Image Carousel -->
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
          </ol>
          <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"carousel-item active\">
              <img class=\"d-block img-fluid w-100\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Plantilla/img/slide-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h3 class=\"text-shadow\">First Slide</h3>
                <p class=\"text-shadow\">This is the caption for the first slide.</p>
              </div>
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block img-fluid w-100\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Plantilla/img/slide-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h3 class=\"text-shadow\">Second Slide</h3>
                <p class=\"text-shadow\">This is the caption for the second slide.</p>
              </div>
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block img-fluid w-100\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h3 class=\"text-shadow\">Third Slide</h3>
                <p class=\"text-shadow\">This is the caption for the third slide.</p>
              </div>
            </div>
          </div>
          <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>
        <!-- Welcome Message -->
        <div class=\"text-center mt-4\">
          <div class=\"text-heading text-muted text-lg\">Welcome To</div>
          <h1 class=\"my-2\">Business Casual</h1>
          <div class=\"text-heading text-muted text-lg\">By
            <strong>Start Bootstrap</strong>
          </div>
        </div>
      </div>

      <div class=\"bg-faded p-4 my-4\">
        <hr class=\"divider\">
        <h2 class=\"text-center text-lg text-uppercase my-0\">Build a website
          <strong>worth visitng</strong>
        </h2>
        <hr class=\"divider\">
        <img class=\"img-fluid float-left mr-4 d-none d-lg-block\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Plantilla/img/intro-pic.jpg"), "html", null, true);
        echo "\" alt=\"\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit totam libero expedita magni est delectus pariatur aut, aperiam eveniet velit cum possimus, autem voluptas. Eum qui ut quasi voluptate blanditiis?</p>
      </div>

      <div class=\"bg-faded p-4 my-4\">
        <hr class=\"divider\">
        <h2 class=\"text-center text-lg text-uppercase my-0\">Beautiful boxes to
          <strong>showcase your content</strong>
        </h2>
        <hr class=\"divider\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
      </div>

    </div>
    <!-- /.container -->

    <footer class=\"bg-faded text-center py-5\">
      <div class=\"container\">
        <p class=\"m-0\">Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  </body>

</html>
";
        
        $__internal_f3e2eba0cb2b51c3782b6dc9dc36eff687c2eb83cd25bf2e69ce5401828e6888->leave($__internal_f3e2eba0cb2b51c3782b6dc9dc36eff687c2eb83cd25bf2e69ce5401828e6888_prof);

        
        $__internal_b4a9e9299962f3a0b9a14502babeaebfdf68cf04f4737160f0bc184da09394a8->leave($__internal_b4a9e9299962f3a0b9a14502babeaebfdf68cf04f4737160f0bc184da09394a8_prof);

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
        return array (  157 => 116,  122 => 84,  112 => 77,  102 => 70,  50 => 21,  40 => 14,  25 => 1,);
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

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('/Plantilla/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom styles for this template -->
    <link href=\"{{asset('Plantilla/css/business-casual.css')}}\" rel=\"stylesheet\">

  </head>

  <body>

    <div class=\"tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block\">Business Casual</div>
    <div class=\"tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block\">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-faded py-lg-4\">
      <div class=\"container\">
        <a class=\"navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav mx-auto\">
            <li class=\"nav-item active px-lg-4\">
              <a class=\"nav-link text-uppercase text-expanded\" href=\"index.html\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item px-lg-4\">
              <a class=\"nav-link text-uppercase text-expanded\" href=\"about.html\">About</a>
            </li>
            <li class=\"nav-item px-lg-4\">
              <a class=\"nav-link text-uppercase text-expanded\" href=\"blog.html\">Blog</a>
            </li>
            <li class=\"nav-item px-lg-4\">
              <a class=\"nav-link text-uppercase text-expanded\" href=\"contact.html\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"bg-faded p-4 my-4\">
        <!-- Image Carousel -->
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
          </ol>
          <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"carousel-item active\">
              <img class=\"d-block img-fluid w-100\" src=\"{{asset('Plantilla/img/slide-1.jpg')}}\" alt=\"\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h3 class=\"text-shadow\">First Slide</h3>
                <p class=\"text-shadow\">This is the caption for the first slide.</p>
              </div>
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block img-fluid w-100\" src=\"{{asset('Plantilla/img/slide-2.jpg')}}\" alt=\"\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h3 class=\"text-shadow\">Second Slide</h3>
                <p class=\"text-shadow\">This is the caption for the second slide.</p>
              </div>
            </div>
            <div class=\"carousel-item\">
              <img class=\"d-block img-fluid w-100\" src=\"{{asset('img/slide-3.jpg')}}\" alt=\"\">
              <div class=\"carousel-caption d-none d-md-block\">
                <h3 class=\"text-shadow\">Third Slide</h3>
                <p class=\"text-shadow\">This is the caption for the third slide.</p>
              </div>
            </div>
          </div>
          <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>
        <!-- Welcome Message -->
        <div class=\"text-center mt-4\">
          <div class=\"text-heading text-muted text-lg\">Welcome To</div>
          <h1 class=\"my-2\">Business Casual</h1>
          <div class=\"text-heading text-muted text-lg\">By
            <strong>Start Bootstrap</strong>
          </div>
        </div>
      </div>

      <div class=\"bg-faded p-4 my-4\">
        <hr class=\"divider\">
        <h2 class=\"text-center text-lg text-uppercase my-0\">Build a website
          <strong>worth visitng</strong>
        </h2>
        <hr class=\"divider\">
        <img class=\"img-fluid float-left mr-4 d-none d-lg-block\" src=\"{{asset('Plantilla/img/intro-pic.jpg')}}\" alt=\"\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit totam libero expedita magni est delectus pariatur aut, aperiam eveniet velit cum possimus, autem voluptas. Eum qui ut quasi voluptate blanditiis?</p>
      </div>

      <div class=\"bg-faded p-4 my-4\">
        <hr class=\"divider\">
        <h2 class=\"text-center text-lg text-uppercase my-0\">Beautiful boxes to
          <strong>showcase your content</strong>
        </h2>
        <hr class=\"divider\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
      </div>

    </div>
    <!-- /.container -->

    <footer class=\"bg-faded text-center py-5\">
      <div class=\"container\">
        <p class=\"m-0\">Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  </body>

</html>
", "MirestauranteBundle:Default:index.html.twig", "C:\\Users\\2daw\\Documents\\Symfo\\MiRestaurante\\src\\MirestauranteBundle/Resources/views/Default/index.html.twig");
    }
}
