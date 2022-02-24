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

/* acceuil/index.html.twig */
class __TwigTemplate_a12df8a268717593c7b37109623ef75a69919cfc280a57b4287c550499c3f51a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "acceuil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section class=\"hero-area bg-1 text-center overly\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Header Contetnt -->
                    <div class=\"content-block\">
                        <h1>BINVENUE à EVO-TECH</h1>
                        <p>Notre boutique en ligne est à votre disposition <br> </p>
                        <div class=\"short-popular-category-list text-center\">
                            <h2>Popular Category</h2>
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><i class=\"fa fa-bed\"></i> Produit</a></li>
                                <li class=\"list-inline-item\">
                                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><i class=\"fa fa-grav\"></i> Panier</a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\"><i class=\"fa fa-car\"></i> Commande</a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichage");
        echo "\"><i class=\"fa fa-cutlery\"></i> Réclamation</a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><i class=\"fa fa-coffee\"></i> à propos</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Advance Search -->


                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
    <section class=\"popular-deals section bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Flash Ventes</h2>
                        <p>Les meilleurs prduits de la semaine.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- offer 01 -->
                <div class=\"col-lg-12\">
                    <div class=\"trending-ads-slide\">
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">
                                            <img class=\"card-img-top img-fluid\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/products/products-1.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Souris+Clavier</a></h4>
                                        <ul class=\"list-inline product-meta\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><i class=\"fa fa-folder-open-o\"></i>Maériels PC</a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\"><i class=\"fa fa-calendar\"></i>26 Janvier</a>
                                            </li>
                                        </ul>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">
                                            <img class=\"card-img-top img-fluid\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/products/products-2.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Ecran Curvy 32 pouces </a></h4>
                                        <ul class=\"list-inline product-meta\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><i class=\"fa fa-folder-open-o\"></i>Ecran</a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\"><i class=\"fa fa-calendar\"></i>28 Juillet</a>
                                            </li>
                                        </ul>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">
                                            <img class=\"card-img-top img-fluid\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/products/products-3.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Unité centrale+Souris+Clavier</a></h4>
                                        <ul class=\"list-inline product-meta\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><i class=\"fa fa-folder-open-o\"></i>Maériels pour PC</a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\"><i class=\"fa fa-calendar\"></i>14 février</a>
                                            </li>
                                        </ul>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">
                                            <img class=\"card-img-top img-fluid\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/products/products-4.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">Casque Micro</a></h4>
                                        <ul class=\"list-inline product-meta\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><i class=\"fa fa-folder-open-o\"></i>Maériels Son</a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\"><i class=\"fa fa-calendar\"></i>13 October</a>
                                            </li>
                                        </ul>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "acceuil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 182,  301 => 179,  294 => 175,  290 => 174,  258 => 145,  252 => 142,  245 => 138,  241 => 137,  209 => 108,  203 => 105,  196 => 101,  192 => 100,  160 => 71,  154 => 68,  147 => 64,  143 => 63,  106 => 29,  100 => 26,  94 => 23,  88 => 20,  83 => 18,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}


{% block body %}
    <section class=\"hero-area bg-1 text-center overly\">
        <!-- Container Start -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Header Contetnt -->
                    <div class=\"content-block\">
                        <h1>BINVENUE à EVO-TECH</h1>
                        <p>Notre boutique en ligne est à votre disposition <br> </p>
                        <div class=\"short-popular-category-list text-center\">
                            <h2>Popular Category</h2>
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ path('acceuil') }}\"><i class=\"fa fa-bed\"></i> Produit</a></li>
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ path('acceuil') }}\"><i class=\"fa fa-grav\"></i> Panier</a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ path('reclamation_new') }}\"><i class=\"fa fa-car\"></i> Commande</a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ path('affichage') }}\"><i class=\"fa fa-cutlery\"></i> Réclamation</a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ path('acceuil') }}\"><i class=\"fa fa-coffee\"></i> à propos</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Advance Search -->


                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
    <section class=\"popular-deals section bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Flash Ventes</h2>
                        <p>Les meilleurs prduits de la semaine.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- offer 01 -->
                <div class=\"col-lg-12\">
                    <div class=\"trending-ads-slide\">
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"{{ path('acceuil') }}\">
                                            <img class=\"card-img-top img-fluid\" src=\"{{ asset('front-office/images/products/products-1.jpg') }}\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"{{ path('acceuil') }}\">Souris+Clavier</a></h4>
                                        <ul class=\"list-inline product-meta\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('acceuil') }}\"><i class=\"fa fa-folder-open-o\"></i>Maériels PC</a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\"><i class=\"fa fa-calendar\"></i>26 Janvier</a>
                                            </li>
                                        </ul>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"{{ path('acceuil') }}\">
                                            <img class=\"card-img-top img-fluid\" src=\"{{ asset('front-office/images/products/products-2.jpg') }}\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"{{ path('acceuil') }}\">Ecran Curvy 32 pouces </a></h4>
                                        <ul class=\"list-inline product-meta\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('acceuil') }}\"><i class=\"fa fa-folder-open-o\"></i>Ecran</a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\"><i class=\"fa fa-calendar\"></i>28 Juillet</a>
                                            </li>
                                        </ul>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"{{ path('acceuil') }}\">
                                            <img class=\"card-img-top img-fluid\" src=\"{{ asset('front-office/images/products/products-3.jpg') }}\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"{{ path('acceuil') }}\">Unité centrale+Souris+Clavier</a></h4>
                                        <ul class=\"list-inline product-meta\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('acceuil') }}\"><i class=\"fa fa-folder-open-o\"></i>Maériels pour PC</a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\"><i class=\"fa fa-calendar\"></i>14 février</a>
                                            </li>
                                        </ul>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class=\"col-sm-12 col-lg-4\">
                            <!-- product card -->
                            <div class=\"product-item bg-light\">
                                <div class=\"card\">
                                    <div class=\"thumb-content\">
                                        <!-- <div class=\"price\">\$200</div> -->
                                        <a href=\"{{ path('acceuil') }}\">
                                            <img class=\"card-img-top img-fluid\" src=\"{{ asset('front-office/images/products/products-4.jpg') }}\" alt=\"Card image cap\">
                                        </a>
                                    </div>
                                    <div class=\"card-body\">
                                        <h4 class=\"card-title\"><a href=\"{{ path('acceuil') }}\">Casque Micro</a></h4>
                                        <ul class=\"list-inline product-meta\">
                                            <li class=\"list-inline-item\">
                                                <a href=\"{{ path('acceuil') }}\"><i class=\"fa fa-folder-open-o\"></i>Maériels Son</a>
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <a href=\"#\"><i class=\"fa fa-calendar\"></i>13 October</a>
                                            </li>
                                        </ul>
                                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                                        <div class=\"product-ratings\">
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item selected\"><i class=\"fa fa-star\"></i></li>
                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

{% endblock %}
", "acceuil/index.html.twig", "C:\\xampp\\htdocs\\EvoTeck\\templates\\acceuil\\index.html.twig");
    }
}
