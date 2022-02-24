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
class __TwigTemplate_d8fae7fa00c06ae29c8f213d86f77963e2687c4d0c2a1c5560b7204be5cc51d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index-reclamationFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index-reclamationFront.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "reclamation/index-reclamationFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 3, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 4
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
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/evologo.png"), "html", null, true);
            echo "\">
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"card-title\"><a href=\"single.html\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</a></h4>
                                <ul class=\"list-inline product-meta\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"single.html\"><i class=\"fa fa-folder-open-o\"></i>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "categorieRec", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\"><i class=\"fa fa-calendar\"></i>";
            // line 24
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateCreation", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateCreation", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</a>
                                    </li>
                                </ul>
                                <p class=\"card-text\"></p>
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
        <div class=\"\">
            <ul class=\"list-inline justify-content-center\">
                <li class=\"list-inline-item\">
                    <a  href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"class=\"btn btn-outline-primary btn-circle \">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary btn-circle \">
                        <i class=\"fa fa-edit\"></i>
                    </a>
                </li>
            </ul>
        </div>


    </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "    <tr>
        <td colspan=\"6\">no records found</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  157 => 61,  148 => 57,  133 => 47,  125 => 42,  104 => 24,  98 => 21,  92 => 18,  85 => 14,  73 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block body %}
{% for reclamation in reclamations %}
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
                                        <a href=\"single.html\"><i class=\"fa fa-folder-open-o\"></i>{{ reclamation.categorieRec.nom }}</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\"><i class=\"fa fa-calendar\"></i>{{ reclamation.dateCreation ? reclamation.dateCreation|date('Y-m-d') : '' }}</a>
                                    </li>
                                </ul>
                                <p class=\"card-text\"></p>
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
        <div class=\"\">
            <ul class=\"list-inline justify-content-center\">
                <li class=\"list-inline-item\">
                    <a  href=\"{{ path('reclamation_show', {'id': reclamation.id}) }}\"class=\"btn btn-outline-primary btn-circle \">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"{{ path('reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-outline-secondary btn-circle \">
                        <i class=\"fa fa-edit\"></i>
                    </a>
                </li>
            </ul>
        </div>


    </tr>
{% else %}
    <tr>
        <td colspan=\"6\">no records found</td>
    </tr>
{% endfor %}

{% endblock %}
", "reclamation/index-reclamationFront.html.twig", "C:\\xampp\\htdocs\\EvoTeck\\templates\\reclamation\\index-reclamationFront.html.twig");
    }
}
