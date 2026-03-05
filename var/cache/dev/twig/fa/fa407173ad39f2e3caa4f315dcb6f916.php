<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Front/groupe/new.html.twig */
class __TwigTemplate_c0eaf997a0e729109955018193fa8a53 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/new.html.twig"));

        // line 5
        $context["current_page"] = "groupes";
        // line 1
        $this->parent = $this->load("front/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nouveau Groupe - ESPRIT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "<header class=\"header\">
    <div>
        <h1 class=\"h1\">Créer un Nouveau Groupe</h1>
        <p class=\"muted\">Remplissez les informations pour créer votre groupe de projet</p>
    </div>
    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
        yield "\" style=\"padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition); display: inline-flex; align-items: center; gap: 8px;\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"/><polyline points=\"12 19 5 12 12 5\"/>
        </svg>
        Retour
    </a>
</header>

<div class=\"profile-container\">
    <div style=\"max-width: 800px; margin: 0 auto;\">
        <div class=\"card\">
            <div class=\"card-content\">
                ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["id" => "groupForm"]]);
        yield "
                
                <div class=\"form-group\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nomProjet", [], "any", false, false, false, 28), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Nom du Projet"]);
        yield "
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nomProjet", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;", "placeholder" => "Ex: Application Mobile ESPRIT"]]);
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nomProjet", [], "any", false, false, false, 30), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Description"]);
        yield "
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white; min-height: 120px; resize: vertical;", "placeholder" => "Décrivez votre projet...", "rows" => 5]]);
        yield "
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nbrMembre", [], "any", false, false, false, 40), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Nombre de Membres"]);
        yield "
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nbrMembre", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;", "min" => "1", "max" => "10"]]);
        yield "
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nbrMembre", [], "any", false, false, false, 42), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "matiere", [], "any", false, false, false, 46), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Matière"]);
        yield "
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "matiere", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;", "placeholder" => "Ex: Math, Informatique..."]]);
        yield "
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "matiere", [], "any", false, false, false, 48), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "CreatedAt", [], "any", false, false, false, 52), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Créé le"]);
        yield "
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "CreatedAt", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;"]]);
        yield "
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "CreatedAt", [], "any", false, false, false, 54), 'errors');
        yield "
                </div>

                <div class=\"form-group\" style=\"padding: 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); background: var(--gray-50);\">
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "statut", [], "any", false, false, false, 58), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Statut du groupe"]);
        yield "
                    <div class=\"d-flex flex-wrap gap-3\">
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "statut", [], "any", false, false, false, 60), 'widget');
        yield "
                    </div>
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "statut", [], "any", false, false, false, 62), 'errors');
        yield "
                </div>

                ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "idUser", [], "any", true, true, false, 65)) {
            // line 66
            yield "                <div class=\"form-group\" style=\"padding: 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); background: var(--gray-50);\">
                    ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "idUser", [], "any", false, false, false, 67), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Membres du Groupe"]);
            yield "
                    <div class=\"d-grid\" style=\"grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 8px;\">
                        ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "idUser", [], "any", false, false, false, 69), 'widget');
            yield "
                    </div>
                    ";
            // line 71
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "idUser", [], "any", false, false, false, 71), 'errors');
            yield "
                </div>
                ";
        }
        // line 74
        yield "
                <!-- Action Buttons -->
                <div style=\"display: flex; gap: 12px; margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--gray-200);\">
                    <button type=\"submit\" style=\"flex: 1; padding: 16px; background: linear-gradient(135deg, var(--green-500), var(--green-600)); color: white; border: none; border-radius: var(--radius-lg); font-weight: 700; font-size: 16px; cursor: pointer; transition: all var(--transition); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/><polyline points=\"17 21 17 13 7 13 7 21\"/><polyline points=\"7 3 7 8 15 8\"/>
                        </svg>
                        Créer le Groupe
                    </button>
                    
                    <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
        yield "\" style=\"flex: 0.4; padding: 16px; background: white; color: var(--gray-700); text-decoration: none; border: 1px solid var(--gray-300); border-radius: var(--radius-lg); font-weight: 600; font-size: 16px; transition: all var(--transition); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"/><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"/>
                        </svg>
                        Annuler
                    </a>
                </div>

                ";
        // line 92
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<style>
.form-control:focus {
    outline: none;
    border-color: var(--red-500);
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
}

.form-group {
    margin-bottom: 24px;
}

button[type=\"submit\"]:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

a[href*=\"front_groupe_projet_index\"]:hover {
    background: var(--gray-50);
    border-color: var(--gray-400);
}

.form-errors {
    color: var(--red-600);
    font-size: 14px;
    margin-top: 6px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/groupe/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  266 => 92,  255 => 84,  243 => 74,  237 => 71,  232 => 69,  227 => 67,  224 => 66,  222 => 65,  216 => 62,  211 => 60,  206 => 58,  199 => 54,  195 => 53,  191 => 52,  184 => 48,  180 => 47,  176 => 46,  169 => 42,  165 => 41,  161 => 40,  154 => 36,  150 => 35,  146 => 34,  139 => 30,  135 => 29,  131 => 28,  125 => 25,  110 => 13,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Nouveau Groupe - ESPRIT{% endblock %}

{% set current_page = 'groupes' %}

{% block content %}
<header class=\"header\">
    <div>
        <h1 class=\"h1\">Créer un Nouveau Groupe</h1>
        <p class=\"muted\">Remplissez les informations pour créer votre groupe de projet</p>
    </div>
    <a href=\"{{ path('front_groupe_projet_index') }}\" style=\"padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition); display: inline-flex; align-items: center; gap: 8px;\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"/><polyline points=\"12 19 5 12 12 5\"/>
        </svg>
        Retour
    </a>
</header>

<div class=\"profile-container\">
    <div style=\"max-width: 800px; margin: 0 auto;\">
        <div class=\"card\">
            <div class=\"card-content\">
                {{ form_start(form, {'attr': {'id': 'groupForm'}}) }}
                
                <div class=\"form-group\">
                    {{ form_label(form.nomProjet, 'Nom du Projet', {'label_attr': {'style': 'font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;'}}) }}
                    {{ form_widget(form.nomProjet, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;', 'placeholder': 'Ex: Application Mobile ESPRIT'}}) }}
                    {{ form_errors(form.nomProjet) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.description, 'Description', {'label_attr': {'style': 'font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;'}}) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white; min-height: 120px; resize: vertical;', 'placeholder': 'Décrivez votre projet...', 'rows': 5}}) }}
                    {{ form_errors(form.description) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.nbrMembre, 'Nombre de Membres', {'label_attr': {'style': 'font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;'}}) }}
                    {{ form_widget(form.nbrMembre, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;', 'min': '1', 'max': '10'}}) }}
                    {{ form_errors(form.nbrMembre) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.matiere, 'Matière', {'label_attr': {'style': 'font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;'}}) }}
                    {{ form_widget(form.matiere, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;', 'placeholder': 'Ex: Math, Informatique...'}}) }}
                    {{ form_errors(form.matiere) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.CreatedAt, 'Créé le', {'label_attr': {'style': 'font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;'}}) }}
                    {{ form_widget(form.CreatedAt, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;'}}) }}
                    {{ form_errors(form.CreatedAt) }}
                </div>

                <div class=\"form-group\" style=\"padding: 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); background: var(--gray-50);\">
                    {{ form_label(form.statut, 'Statut du groupe', {'label_attr': {'style': 'font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;'}}) }}
                    <div class=\"d-flex flex-wrap gap-3\">
                        {{ form_widget(form.statut) }}
                    </div>
                    {{ form_errors(form.statut) }}
                </div>

                {% if form.idUser is defined %}
                <div class=\"form-group\" style=\"padding: 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); background: var(--gray-50);\">
                    {{ form_label(form.idUser, 'Membres du Groupe', {'label_attr': {'style': 'font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;'}}) }}
                    <div class=\"d-grid\" style=\"grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 8px;\">
                        {{ form_widget(form.idUser) }}
                    </div>
                    {{ form_errors(form.idUser) }}
                </div>
                {% endif %}

                <!-- Action Buttons -->
                <div style=\"display: flex; gap: 12px; margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--gray-200);\">
                    <button type=\"submit\" style=\"flex: 1; padding: 16px; background: linear-gradient(135deg, var(--green-500), var(--green-600)); color: white; border: none; border-radius: var(--radius-lg); font-weight: 700; font-size: 16px; cursor: pointer; transition: all var(--transition); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/><polyline points=\"17 21 17 13 7 13 7 21\"/><polyline points=\"7 3 7 8 15 8\"/>
                        </svg>
                        Créer le Groupe
                    </button>
                    
                    <a href=\"{{ path('front_groupe_projet_index') }}\" style=\"flex: 0.4; padding: 16px; background: white; color: var(--gray-700); text-decoration: none; border: 1px solid var(--gray-300); border-radius: var(--radius-lg); font-weight: 600; font-size: 16px; transition: all var(--transition); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"/><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"/>
                        </svg>
                        Annuler
                    </a>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<style>
.form-control:focus {
    outline: none;
    border-color: var(--red-500);
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
}

.form-group {
    margin-bottom: 24px;
}

button[type=\"submit\"]:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

a[href*=\"front_groupe_projet_index\"]:hover {
    background: var(--gray-50);
    border-color: var(--gray-400);
}

.form-errors {
    color: var(--red-600);
    font-size: 14px;
    margin-top: 6px;
}
</style>
{% endblock %}
", "Front/groupe/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\groupe\\new.html.twig");
    }
}
