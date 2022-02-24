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

/* reclamation/_form.html.twig */
class __TwigTemplate_1a83c185b998dafe44715b6466d010936f0620a75b52276885922ea2d2bb27b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<fieldset class=\"border bg-white p-4 my-5 ad-feature bg-gray\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
<table>

    <tr>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), 'label', ["label" => "Nom "]);
        echo "</td>
        <td>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), 'widget');
        echo "</td>
    <tr>
        <td>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), 'errors');
        echo "</td>
    </tr>
    </tr>


    <tr>

        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "dateCreation", [], "any", false, false, false, 19), 'widget', ["attr" => ["hidden" => "hidden"]]);
        echo "</td>
    <tr>
    </tr>
    </tr>


    <tr>
        <td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "categorieRec", [], "any", false, false, false, 26), 'label', ["label" => "categorie de la reclamation"]);
        echo "</td>
        <td>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "categorieRec", [], "any", false, false, false, 27), 'widget');
        echo "</td>
    <tr>
        <td>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "categorieRec", [], "any", false, false, false, 29), 'errors');
        echo "</td>
    </tr>
    </tr>
    <tr>
    <td>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "contenu", [], "any", false, false, false, 33), 'label', ["label" => "Contenue de la reclamation"]);
        echo "</td>
    <td>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "contenu", [], "any", false, false, false, 34), 'widget');
        echo "</td>
    <tr>
        <td>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "contenu", [], "any", false, false, false, 36), 'errors');
        echo "</td>
    </tr>
    </tr>
</table>
        </div>
    </div>
</fieldset>


<button type=\"submit\" class=\"btn btn-primary d-block mt-2\">";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 45, $this->source); })()), "Envoyer Réclamation")) : ("Envoyer Réclamation")), "html", null, true);
        echo "</button>
";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  122 => 45,  110 => 36,  105 => 34,  101 => 33,  94 => 29,  89 => 27,  85 => 26,  75 => 19,  65 => 12,  60 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
<fieldset class=\"border bg-white p-4 my-5 ad-feature bg-gray\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
<table>

    <tr>
        <td>{{ form_label(form.titre,\"Nom \")  }}</td>
        <td>{{ form_widget(form.titre) }}</td>
    <tr>
        <td>{{ form_errors(form.titre) }}</td>
    </tr>
    </tr>


    <tr>

        <td>{{ form_widget(form.dateCreation, { 'attr': {'hidden': 'hidden'} })}}</td>
    <tr>
    </tr>
    </tr>


    <tr>
        <td>{{ form_label(form.categorieRec,\"categorie de la reclamation\") }}</td>
        <td>{{ form_widget(form.categorieRec)}}</td>
    <tr>
        <td>{{ form_errors(form.categorieRec) }}</td>
    </tr>
    </tr>
    <tr>
    <td>{{ form_label(form.contenu,\"Contenue de la reclamation\") }}</td>
    <td>{{ form_widget(form.contenu)}}</td>
    <tr>
        <td>{{ form_errors(form.contenu) }}</td>
    </tr>
    </tr>
</table>
        </div>
    </div>
</fieldset>


<button type=\"submit\" class=\"btn btn-primary d-block mt-2\">{{ button_label|default('Envoyer Réclamation') }}</button>
{{ form_end(form) }}
", "reclamation/_form.html.twig", "C:\\xampp\\htdocs\\EvoTeck\\templates\\reclamation\\_form.html.twig");
    }
}
