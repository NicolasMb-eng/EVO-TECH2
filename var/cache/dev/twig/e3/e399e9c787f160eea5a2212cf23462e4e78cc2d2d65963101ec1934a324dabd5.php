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

/* reclamation/index-reclamationFront.html.twig */
class __TwigTemplate_1535aaa826dddbcfadec708f487d8df5b383a6fcd371470043192d120576c0a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index-reclamationFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index-reclamationFront.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 2
            echo "    <tr>
        <div class=\"product-grid-list\">
            <div class=\"row mt-30\">
                <div class=\"col-sm-12 col-lg-4 col-md-6\">
                    <!-- product card -->
                    <div class=\"product-item bg-light\">
                        <div class=\"card\">
                            <div class=\"thumb-content\">
                                <!-- <div class=\"price\">\$200</div> -->
                                <a href=\"single.html\">
                                    <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/evologo.png"), "html", null, true);
            echo "\">
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"card-title\"><a href=\"single.html\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></h4>
                                <ul class=\"list-inline product-meta\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"single.html\"><i class=\"fa fa-folder-open-o\"></i>Electronics</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\"><i class=\"fa fa-calendar\"></i>26th December</a>
                                    </li>
                                </ul>
                                <p class=\"card-text\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 25, $this->source); })()), "descProduit", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
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
        </div>
        </section>
            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">show</a>
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">edit</a>
        </td>
    </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "    <tr>
        <td colspan=\"6\">no records found</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index-reclamationFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 55,  116 => 51,  107 => 47,  103 => 46,  79 => 25,  67 => 16,  60 => 12,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for reclamation in reclamations %}
    <tr>
        <div class=\"product-grid-list\">
            <div class=\"row mt-30\">
                <div class=\"col-sm-12 col-lg-4 col-md-6\">
                    <!-- product card -->
                    <div class=\"product-item bg-light\">
                        <div class=\"card\">
                            <div class=\"thumb-content\">
                                <!-- <div class=\"price\">\$200</div> -->
                                <a href=\"single.html\">
                                    <img src=\"{{ asset('front-office/images/evologo.png') }}\">
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"card-title\"><a href=\"single.html\">{{ reclamation.id }}</a></h4>
                                <ul class=\"list-inline product-meta\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"single.html\"><i class=\"fa fa-folder-open-o\"></i>Electronics</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\"><i class=\"fa fa-calendar\"></i>26th December</a>
                                    </li>
                                </ul>
                                <p class=\"card-text\">{{produit.descProduit}}</p>
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
        </div>
        </section>
            <a href=\"{{ path('reclamation_show', {'id': reclamation.id}) }}\">show</a>
            <a href=\"{{ path('reclamation_edit', {'id': reclamation.id}) }}\">edit</a>
        </td>
    </tr>
{% else %}
    <tr>
        <td colspan=\"6\">no records found</td>
    </tr>
{% endfor %}


", "reclamation/index-reclamationFront.html.twig", "C:\\xampp\\htdocs\\EvoTeck\\templates\\reclamation\\index-reclamationFront.html.twig");
    }
}
