<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base-front.html.twig */
class __TwigTemplate_eae2fbbab12ba61982684ac3550574a7db7305291a8910fd17b247d8b2b7e8a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "</head>



<body class=\"body-wrapper\">


<section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <nav class=\"navbar navbar-expand-lg navbar-light navigation\">
                    <a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">

                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/logo11.png"), "html", null, true);
        echo "\" alt=\"\">

                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav ml-auto main-nav \">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Acceuil</a>
                            </li>
                            <li class=\"nav-item dropdown dropdown-slide\">
                                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"\">Produits<span><i class=\"fa fa-angle-down\"></i></span>
                                </a>

                                <!-- Dropdown list -->
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"dashboard.html\">Matériels PC (Hardware)</a>
                                    <a class=\"dropdown-item\" href=\"dashboard-my-ads.html\">Smartphone et Accessoires</a>
                                    <a class=\"dropdown-item\" href=\"dashboard-favourite-ads.html\">Matériels du son</a>
                                    <a class=\"dropdown-item\" href=\"dashboard-archived-ads.html\">Ecrans</a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown dropdown-slide\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-angle-down\"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">About Us</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Contact Us</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">User Profile</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">404 Page</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Package</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Single Page</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Store Single</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Single Post</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Blog</a>

                                </div>
                            </li>
                            <li class=\"nav-item dropdown dropdown-slide\">
                                <a class=\"nav-link dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Listing <span><i class=\"fa fa-angle-down\"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Ad-Gird View</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Ad-List View</a>
                                </div>
                            </li>
                        </ul>
                        <ul class=\"navbar-nav ml-auto mt-10\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link login-button\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Se connecter</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link text-white add-button\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Add Listing</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<!--===============================
=            Hero Area            =
================================-->




";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('footer', $context, $blocks);
        // line 226
        echo "

";
        // line 228
        $this->displayBlock('javascripts', $context, $blocks);
        // line 245
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
        <meta charset=\"UTF-8\">
        <!-- FAVICON -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/evo-tech.png"), "html", null, true);
        echo "\" rel=\"shortcut icon\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/bootstrap/css/bootstrap-slider.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->

        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Owl Carousel -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/slick-carousel/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/slick-carousel/slick/slick-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Fancy Box -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/fancybox/jquery.fancybox.pack.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/jquery-nice-select/css/nice-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- CUSTOM CSS -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 28
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 122
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 127
        echo "
    <footer class=\"footer section section-sm\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-7 offset-md-1 offset-lg-0\">
                    <!-- About -->
                    <div class=\"block about\">
                        <!-- footer logo -->
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/evo-tech.png"), "html", null, true);
        echo "images/logo-footer.png\" alt=\"\">
                        <!-- description -->
                        <p class=\"alt-color\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <!-- Link list -->
                <div class=\"col-lg-2 offset-lg-1 col-md-3\">
                    <div class=\"block\">
                        <h4>Site Pages</h4>
                        <ul>
                            <li><a href=\"#\">Boston</a></li>
                            <li><a href=\"#\">How It works</a></li>
                            <li><a href=\"#\">Deals & Coupons</a></li>
                            <li><a href=\"#\">Articls & Tips</a></li>
                            <li><a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Link list -->
                <div class=\"col-lg-2 col-md-3 offset-md-1 offset-lg-0\">
                    <div class=\"block\">
                        <h4>Admin Pages</h4>
                        <ul>
                            <li><a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Category</a></li>
                            <li><a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Single Page</a></li>
                            <li><a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Store Single</a></li>
                            <li><a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Single Post</a>
                            </li>
                            <li><a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Blog</a></li>



                        </ul>
                    </div>
                </div>
                <!-- Promotion -->
                <div class=\"col-lg-4 col-md-7\">
                    <!-- App promotion -->
                    <div class=\"block-2 app-promotion\">
                        <div class=\"mobile d-flex\">
                            <a href=\"\">
                                <!-- Icon -->
                                <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/footer/phone-icon.png"), "html", null, true);
        echo "\" alt=\"mobile-icon\">
                            </a>
                            <p>Get the Dealsy Mobile App and Save more</p>
                        </div>
                        <div class=\"download-btn d-flex my-3\">
                            <a href=\"#\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/apps/google-play-store.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                            <a href=\"#\" class=\" ml-3\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/apps/apple-app-store.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </footer>
    <!-- Footer Bottom -->
    <footer class=\"footer-bottom\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-12\">
                    <!-- Copyright -->
                    <div class=\"copyright\">
                        <p>Copyright © <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>. All Rights Reserved, theme by <a class=\"text-primary\" href=\"https://themefisher.com\" target=\"_blank\">The Builders</a></p>
                    </div>
                </div>
                <div class=\"col-sm-6 col-12\">
                    <!-- Social Icons -->
                    <ul class=\"social-media-icons text-right\">
                        <li><a class=\"fa fa-facebook\" href=\"https://www.facebook.com/themefisher\" target=\"_blank\"></a></li>
                        <li><a class=\"fa fa-twitter\" href=\"https://www.twitter.com/themefisher\" target=\"_blank\"></a></li>
                        <li><a class=\"fa fa-pinterest-p\" href=\"https://www.pinterest.com/themefisher\" target=\"_blank\"></a></li>
                        <li><a class=\"fa fa-vimeo\" href=\"\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Container End -->
        <!-- To Top -->
        <div class=\"top-to\">
            <a id=\"top\" class=\"\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 228
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 229
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/jQuery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/bootstrap/js/bootstrap-slider.js"), "html", null, true);
        echo "\"></script>
    <!-- tether js -->
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/tether/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/raty/jquery.raty-fa.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/slick-carousel/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/smoothscroll/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- google map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/google-map/gmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 243,  539 => 242,  533 => 239,  529 => 238,  525 => 237,  521 => 236,  517 => 235,  513 => 234,  508 => 232,  504 => 231,  500 => 230,  495 => 229,  485 => 228,  435 => 186,  431 => 185,  423 => 180,  406 => 166,  401 => 164,  397 => 163,  393 => 162,  389 => 161,  377 => 152,  358 => 136,  347 => 127,  337 => 126,  325 => 122,  315 => 121,  303 => 28,  299 => 26,  294 => 24,  290 => 23,  285 => 21,  281 => 20,  276 => 18,  270 => 15,  266 => 14,  260 => 11,  255 => 8,  245 => 7,  226 => 5,  214 => 245,  212 => 228,  208 => 226,  206 => 126,  203 => 125,  201 => 121,  181 => 104,  175 => 101,  166 => 95,  162 => 94,  149 => 84,  145 => 83,  141 => 82,  137 => 81,  133 => 80,  129 => 79,  125 => 78,  121 => 77,  117 => 76,  94 => 56,  81 => 46,  76 => 44,  61 => 31,  59 => 7,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>{% block title %}Welcome!{% endblock %}</title>

    {% block stylesheets %}

        <meta charset=\"UTF-8\">
        <!-- FAVICON -->
        <link href=\"{{ asset('front-office/images/evo-tech.png') }}\" rel=\"shortcut icon\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"{{ asset('front-office/plugins/bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('front-office/plugins/bootstrap/css/bootstrap-slider.css') }}\">
        <!-- Font Awesome -->

        <link href=\"{{ asset('front-office/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
        <!-- Owl Carousel -->
        <link href=\"{{ asset('front-office/plugins/slick-carousel/slick/slick.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('front-office/plugins/slick-carousel/slick/slick-theme.css') }}\" rel=\"stylesheet\">
        <!-- Fancy Box -->
        <link href=\"{{ asset('front-office/plugins/fancybox/jquery.fancybox.pack.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('front-office/plugins/jquery-nice-select/css/nice-select.css') }}\" rel=\"stylesheet\">
        <!-- CUSTOM CSS -->
        <link href=\"{{ asset('front-office/css/style.css') }}\" rel=\"stylesheet\">
        {#{{ encore_entry_link_tags('app') }}#}


    {% endblock %}
</head>



<body class=\"body-wrapper\">


<section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <nav class=\"navbar navbar-expand-lg navbar-light navigation\">
                    <a class=\"navbar-brand\" href=\"{{ path('acceuil') }}\">

                        <img src=\"{{ asset('front-office/images/logo11.png') }}\" alt=\"\">

                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav ml-auto main-nav \">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"{{ path('acceuil') }}\">Acceuil</a>
                            </li>
                            <li class=\"nav-item dropdown dropdown-slide\">
                                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"\">Produits<span><i class=\"fa fa-angle-down\"></i></span>
                                </a>

                                <!-- Dropdown list -->
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"dashboard.html\">Matériels PC (Hardware)</a>
                                    <a class=\"dropdown-item\" href=\"dashboard-my-ads.html\">Smartphone et Accessoires</a>
                                    <a class=\"dropdown-item\" href=\"dashboard-favourite-ads.html\">Matériels du son</a>
                                    <a class=\"dropdown-item\" href=\"dashboard-archived-ads.html\">Ecrans</a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown dropdown-slide\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-angle-down\"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">About Us</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">Contact Us</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">User Profile</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">404 Page</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">Package</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">Single Page</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">Store Single</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">Single Post</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">Blog</a>

                                </div>
                            </li>
                            <li class=\"nav-item dropdown dropdown-slide\">
                                <a class=\"nav-link dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Listing <span><i class=\"fa fa-angle-down\"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">Ad-Gird View</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('acceuil') }}\">Ad-List View</a>
                                </div>
                            </li>
                        </ul>
                        <ul class=\"navbar-nav ml-auto mt-10\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link login-button\" href=\"{{ path('acceuil') }}\">Se connecter</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link text-white add-button\" href=\"{{ path('acceuil') }}\"><i class=\"fa fa-plus-circle\"></i> Add Listing</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<!--===============================
=            Hero Area            =
================================-->




{% block body %}


{% endblock %}

{% block footer %}

    <footer class=\"footer section section-sm\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-7 offset-md-1 offset-lg-0\">
                    <!-- About -->
                    <div class=\"block about\">
                        <!-- footer logo -->
                        <img src=\"{{ asset('front-office/images/evo-tech.png') }}images/logo-footer.png\" alt=\"\">
                        <!-- description -->
                        <p class=\"alt-color\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <!-- Link list -->
                <div class=\"col-lg-2 offset-lg-1 col-md-3\">
                    <div class=\"block\">
                        <h4>Site Pages</h4>
                        <ul>
                            <li><a href=\"#\">Boston</a></li>
                            <li><a href=\"#\">How It works</a></li>
                            <li><a href=\"#\">Deals & Coupons</a></li>
                            <li><a href=\"#\">Articls & Tips</a></li>
                            <li><a href=\"{{path('acceuil')}}\">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Link list -->
                <div class=\"col-lg-2 col-md-3 offset-md-1 offset-lg-0\">
                    <div class=\"block\">
                        <h4>Admin Pages</h4>
                        <ul>
                            <li><a href=\"{{path('acceuil')}}\">Category</a></li>
                            <li><a href=\"{{path('acceuil')}}\">Single Page</a></li>
                            <li><a href=\"{{path('acceuil')}}\">Store Single</a></li>
                            <li><a href=\"{{path('acceuil')}}\">Single Post</a>
                            </li>
                            <li><a href=\"{{path('acceuil')}}\">Blog</a></li>



                        </ul>
                    </div>
                </div>
                <!-- Promotion -->
                <div class=\"col-lg-4 col-md-7\">
                    <!-- App promotion -->
                    <div class=\"block-2 app-promotion\">
                        <div class=\"mobile d-flex\">
                            <a href=\"\">
                                <!-- Icon -->
                                <img src=\"{{ asset('front-office/images/footer/phone-icon.png') }}\" alt=\"mobile-icon\">
                            </a>
                            <p>Get the Dealsy Mobile App and Save more</p>
                        </div>
                        <div class=\"download-btn d-flex my-3\">
                            <a href=\"#\"><img src=\"{{ asset('front-office/images/apps/google-play-store.png') }}\" class=\"img-fluid\" alt=\"\"></a>
                            <a href=\"#\" class=\" ml-3\"><img src=\"{{ asset('front-office/images/apps/apple-app-store.png') }}\" class=\"img-fluid\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </footer>
    <!-- Footer Bottom -->
    <footer class=\"footer-bottom\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-12\">
                    <!-- Copyright -->
                    <div class=\"copyright\">
                        <p>Copyright © <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>. All Rights Reserved, theme by <a class=\"text-primary\" href=\"https://themefisher.com\" target=\"_blank\">The Builders</a></p>
                    </div>
                </div>
                <div class=\"col-sm-6 col-12\">
                    <!-- Social Icons -->
                    <ul class=\"social-media-icons text-right\">
                        <li><a class=\"fa fa-facebook\" href=\"https://www.facebook.com/themefisher\" target=\"_blank\"></a></li>
                        <li><a class=\"fa fa-twitter\" href=\"https://www.twitter.com/themefisher\" target=\"_blank\"></a></li>
                        <li><a class=\"fa fa-pinterest-p\" href=\"https://www.pinterest.com/themefisher\" target=\"_blank\"></a></li>
                        <li><a class=\"fa fa-vimeo\" href=\"\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Container End -->
        <!-- To Top -->
        <div class=\"top-to\">
            <a id=\"top\" class=\"\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
    </footer>
{% endblock %}


{% block javascripts %}
    <script src=\"{{ asset('front-office/plugins/jQuery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('front-office/plugins/bootstrap/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('front-office/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('front-office/plugins/bootstrap/js/bootstrap-slider.js') }}\"></script>
    <!-- tether js -->
    <script src=\"{{ asset('front-office/plugins/tether/js/tether.min.js') }}\"></script>
    <script src=\"{{ asset('front-office/plugins/raty/jquery.raty-fa.js') }}\"></script>
    <script src=\"{{ asset('front-office/plugins/slick-carousel/slick/slick.min.js') }}\"></script>
    <script src=\"{{ asset('front-office/plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}\"></script>
    <script src=\"{{ asset('front-office/plugins/fancybox/jquery.fancybox.pack.js') }}\"></script>
    <script src=\"{{ asset('front-office/plugins/smoothscroll/SmoothScroll.min.js') }}\"></script>
    <!-- google map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places\"></script>
    <script src=\"{{ asset('front-office/plugins/google-map/gmap.js') }}\"></script>
    <script src=\"{{ asset('front-office/js/script.js') }}\"></script>
{% endblock %}
</body>
</html>
", "base-front.html.twig", "C:\\xampp\\htdocs\\EvoTeck\\templates\\base-front.html.twig");
    }
}
