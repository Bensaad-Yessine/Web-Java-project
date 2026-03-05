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

/* Front/groupe/edit.html.twig */
class __TwigTemplate_08a6fd3a608683b1a542dcb34ea25b45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/edit.html.twig"));

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

        yield "Modifier Groupe - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 3, $this->source); })()), "nomProjet", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">Modifier le groupe</h1>
        <p class=\"muted\">Ajustez les informations de votre groupe de projet</p>
    </div>
    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
        yield "\" style=\"padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); display: inline-flex; align-items: center; gap: 8px;\">
        ← Retour
    </a>
</header>

<div class=\"profile-container\">
    <div style=\"max-width: 800px; margin: 0 auto;\">
        <div class=\"card\">
            <div class=\"card-content\">
                ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["id" => "groupForm"]]);
        yield "

                <div class=\"form-group\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nomProjet", [], "any", false, false, false, 26), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Nom du Projet"]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nomProjet", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;", "placeholder" => "Ex: Application Mobile ESPRIT"]]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nomProjet", [], "any", false, false, false, 28), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Description"]);
        yield "
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white; min-height: 120px; resize: vertical;", "placeholder" => "Décrivez votre projet...", "rows" => 5]]);
        yield "
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nbrMembre", [], "any", false, false, false, 38), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Nombre de Membres"]);
        yield "
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nbrMembre", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;", "min" => "1", "max" => "10"]]);
        yield "
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nbrMembre", [], "any", false, false, false, 40), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "matiere", [], "any", false, false, false, 44), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Matière"]);
        yield "
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "matiere", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;", "placeholder" => "Ex: Math, Informatique..."]]);
        yield "
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "matiere", [], "any", false, false, false, 46), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "CreatedAt", [], "any", false, false, false, 50), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Créé le"]);
        yield "
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "CreatedAt", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; transition: all var(--transition); background: white;"]]);
        yield "
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "CreatedAt", [], "any", false, false, false, 52), 'errors');
        yield "
                </div>

                <div class=\"form-group\" style=\"padding: 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); background: var(--gray-50);\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "statut", [], "any", false, false, false, 56), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Statut du groupe"]);
        yield "
                    <div class=\"d-flex flex-wrap gap-3\">
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "statut", [], "any", false, false, false, 58), 'widget');
        yield "
                    </div>
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "statut", [], "any", false, false, false, 60), 'errors');
        yield "
                </div>

                ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "idUser", [], "any", true, true, false, 63)) {
            // line 64
            yield "                <div class=\"form-group\" style=\"padding: 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); background: var(--gray-50);\">
                    ";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "idUser", [], "any", false, false, false, 65), 'label', ["label_attr" => ["style" => "font-weight: 600; font-size: 15px; color: var(--gray-800); margin-bottom: 10px; display: block;"], "label" => "Membres du Groupe"]);
            yield "
                    <div class=\"d-grid\" style=\"grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 8px;\">
                        ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "idUser", [], "any", false, false, false, 67), 'widget');
            yield "
                    </div>
                    ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "idUser", [], "any", false, false, false, 69), 'errors');
            yield "
                </div>
                ";
        }
        // line 72
        yield "
                <div style=\"display: flex; gap: 12px; margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--gray-200);\">
                    <button type=\"submit\" style=\"flex: 1; padding: 16px; background: linear-gradient(135deg, var(--green-500), var(--green-600)); color: white; border: none; border-radius: var(--radius-lg); font-weight: 700; font-size: 16px; cursor: pointer; transition: all var(--transition); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        Enregistrer les modifications
                    </button>
                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
        yield "\" style=\"flex: 0.4; padding: 16px; background: white; color: var(--gray-700); text-decoration: none; border: 1px solid var(--gray-300); border-radius: var(--radius-lg); font-weight: 600; font-size: 16px; transition: all var(--transition); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        Annuler
                    </a>
                </div>

                ";
        // line 82
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
</main>
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
        return "Front/groupe/edit.html.twig";
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
        return array (  257 => 82,  249 => 77,  242 => 72,  236 => 69,  231 => 67,  226 => 65,  223 => 64,  221 => 63,  215 => 60,  210 => 58,  205 => 56,  198 => 52,  194 => 51,  190 => 50,  183 => 46,  179 => 45,  175 => 44,  168 => 40,  164 => 39,  160 => 38,  153 => 34,  149 => 33,  145 => 32,  138 => 28,  134 => 27,  130 => 26,  124 => 23,  112 => 14,  104 => 8,  91 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Modifier Groupe - {{ groupe_projet.nomProjet }}{% endblock %}

{% set current_page = 'groupes' %}

{% block content %}
<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">Modifier le groupe</h1>
        <p class=\"muted\">Ajustez les informations de votre groupe de projet</p>
    </div>
    <a href=\"{{ path('front_groupe_projet_index') }}\" style=\"padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); display: inline-flex; align-items: center; gap: 8px;\">
        ← Retour
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

                <div style=\"display: flex; gap: 12px; margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--gray-200);\">
                    <button type=\"submit\" style=\"flex: 1; padding: 16px; background: linear-gradient(135deg, var(--green-500), var(--green-600)); color: white; border: none; border-radius: var(--radius-lg); font-weight: 700; font-size: 16px; cursor: pointer; transition: all var(--transition); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        Enregistrer les modifications
                    </button>
                    <a href=\"{{ path('front_groupe_projet_index') }}\" style=\"flex: 0.4; padding: 16px; background: white; color: var(--gray-700); text-decoration: none; border: 1px solid var(--gray-300); border-radius: var(--radius-lg); font-weight: 600; font-size: 16px; transition: all var(--transition); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        Annuler
                    </a>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
</main>
{% endblock %}
", "Front/groupe/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\groupe\\edit.html.twig");
    }
}
