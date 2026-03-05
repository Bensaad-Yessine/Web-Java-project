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

/* classe/audit.html.twig */
class __TwigTemplate_ba6c5b2c0ff63c424f6554f4dab5567a extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "classe/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/audit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/audit.html.twig"));

        $this->parent = $this->load("classe/base.html.twig", 1);
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

        yield "Audit de Charge - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0\">
                ⚖️ Audit de Charge
                <span class=\"badge ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 11, $this->source); })()), "surcharge", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "bg-danger";
        } else {
            yield "bg-success";
        }
        yield " ms-2\">
                    ";
        // line 12
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 12, $this->source); })()), "surcharge", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "⚠️ Surchargée";
        } else {
            yield "✅ Équilibrée";
        }
        // line 13
        yield "                </span>
            </h1>
            <p class=\"text-muted mb-0\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 15, $this->source); })()), "niveau", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 15, $this->source); })()), "filiere", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 15, $this->source); })()), "filiere", [], "any", false, false, false, 15), "html", null, true);
            yield ")";
        }
        yield "</p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_audit_api", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\" target=\"_blank\">
                📡 API JSON
            </a>
            <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary btn-sm\">
                ← Retour à la classe
            </a>
        </div>
    </div>

    ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 27, $this->source); })()), "surcharge", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <strong>⚠️ Alerte !</strong> Cette classe dépasse les seuils recommandés. Un email d'alerte peut être envoyé à l'administration.
        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_audit_api", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm ms-3\">📧 Envoyer l'alerte email</a>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 34
        yield "
    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card text-center h-100 border-0 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"display-4 fw-bold ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 39, $this->source); })()), "totalComplexite", [], "any", false, false, false, 39) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 39, $this->source); })()), "seuilComplexite", [], "any", false, false, false, 39))) {
            yield "text-danger";
        } else {
            yield "text-success";
        }
        yield "\">
                        ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 40, $this->source); })()), "totalComplexite", [], "any", false, false, false, 40), "html", null, true);
        yield "
                    </div>
                    <p class=\"text-muted mb-1\">Complexité Totale</p>
                    <small class=\"text-muted\">Seuil : ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 43, $this->source); })()), "seuilComplexite", [], "any", false, false, false, 43), "html", null, true);
        yield "</small>
                    <div class=\"progress mt-2\" style=\"height:8px\">
                        ";
        // line 45
        $context["pctComplexite"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 45, $this->source); })()), "totalComplexite", [], "any", false, false, false, 45) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 45, $this->source); })()), "seuilComplexite", [], "any", false, false, false, 45)) * 100);
        // line 46
        yield "                        <div class=\"progress-bar ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 46, $this->source); })()), "totalComplexite", [], "any", false, false, false, 46) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 46, $this->source); })()), "seuilComplexite", [], "any", false, false, false, 46))) {
            yield "bg-danger";
        } else {
            yield "bg-success";
        }
        yield "\"
                             style=\"width: ";
        // line 47
        yield ((((isset($context["pctComplexite"]) || array_key_exists("pctComplexite", $context) ? $context["pctComplexite"] : (function () { throw new RuntimeError('Variable "pctComplexite" does not exist.', 47, $this->source); })()) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pctComplexite"]) || array_key_exists("pctComplexite", $context) ? $context["pctComplexite"] : (function () { throw new RuntimeError('Variable "pctComplexite" does not exist.', 47, $this->source); })()), "html", null, true)));
        yield "%\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card text-center h-100 border-0 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"display-4 fw-bold ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 55, $this->source); })()), "totalHeures", [], "any", false, false, false, 55) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 55, $this->source); })()), "seuilHeures", [], "any", false, false, false, 55))) {
            yield "text-danger";
        } else {
            yield "text-success";
        }
        yield "\">
                        ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 56, $this->source); })()), "totalHeures", [], "any", false, false, false, 56), "html", null, true);
        yield "h
                    </div>
                    <p class=\"text-muted mb-1\">Charge Horaire Totale</p>
                    <small class=\"text-muted\">Seuil : ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 59, $this->source); })()), "seuilHeures", [], "any", false, false, false, 59), "html", null, true);
        yield "h</small>
                    <div class=\"progress mt-2\" style=\"height:8px\">
                        ";
        // line 61
        $context["pctHeures"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 61, $this->source); })()), "totalHeures", [], "any", false, false, false, 61) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 61, $this->source); })()), "seuilHeures", [], "any", false, false, false, 61)) * 100);
        // line 62
        yield "                        <div class=\"progress-bar ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 62, $this->source); })()), "totalHeures", [], "any", false, false, false, 62) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 62, $this->source); })()), "seuilHeures", [], "any", false, false, false, 62))) {
            yield "bg-danger";
        } else {
            yield "bg-success";
        }
        yield "\"
                             style=\"width: ";
        // line 63
        yield ((((isset($context["pctHeures"]) || array_key_exists("pctHeures", $context) ? $context["pctHeures"] : (function () { throw new RuntimeError('Variable "pctHeures" does not exist.', 63, $this->source); })()) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pctHeures"]) || array_key_exists("pctHeures", $context) ? $context["pctHeures"] : (function () { throw new RuntimeError('Variable "pctHeures" does not exist.', 63, $this->source); })()), "html", null, true)));
        yield "%\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card text-center h-100 border-0 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"display-4 fw-bold ";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 71, $this->source); })()), "complexiteMoyenne", [], "any", false, false, false, 71) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 71, $this->source); })()), "seuilComplexiteMoyenne", [], "any", false, false, false, 71))) {
            yield "text-danger";
        } else {
            yield "text-success";
        }
        yield "\">
                        ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 72, $this->source); })()), "complexiteMoyenne", [], "any", false, false, false, 72), "html", null, true);
        yield "
                    </div>
                    <p class=\"text-muted mb-1\">Complexité Moyenne</p>
                    <small class=\"text-muted\">Seuil : ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 75, $this->source); })()), "seuilComplexiteMoyenne", [], "any", false, false, false, 75), "html", null, true);
        yield "/10</small>
                    <div class=\"progress mt-2\" style=\"height:8px\">
                        ";
        // line 77
        $context["pctComplexiteMoy"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 77, $this->source); })()), "complexiteMoyenne", [], "any", false, false, false, 77) / 10) * 100);
        // line 78
        yield "                        <div class=\"progress-bar ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 78, $this->source); })()), "complexiteMoyenne", [], "any", false, false, false, 78) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 78, $this->source); })()), "seuilComplexiteMoyenne", [], "any", false, false, false, 78))) {
            yield "bg-danger";
        } else {
            yield "bg-success";
        }
        yield "\"
                             style=\"width: ";
        // line 79
        yield ((((isset($context["pctComplexiteMoy"]) || array_key_exists("pctComplexiteMoy", $context) ? $context["pctComplexiteMoy"] : (function () { throw new RuntimeError('Variable "pctComplexiteMoy" does not exist.', 79, $this->source); })()) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pctComplexiteMoy"]) || array_key_exists("pctComplexiteMoy", $context) ? $context["pctComplexiteMoy"] : (function () { throw new RuntimeError('Variable "pctComplexiteMoy" does not exist.', 79, $this->source); })()), "html", null, true)));
        yield "%\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white fw-semibold\">
            📚 Détail des ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 88, $this->source); })()), "nbMatieres", [], "any", false, false, false, 88), "html", null, true);
        yield " matière(s)
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle mb-0\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Matière</th>
                        <th class=\"text-center\">Score Complexité</th>
                        <th class=\"text-center\">Charge Horaire</th>
                        <th class=\"text-center\">Coefficient</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 102, $this->source); })()), "matieres", [], "any", false, false, false, 102));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 103
            yield "                    <tr>
                        <td class=\"fw-semibold\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            <span class=\"badge ";
            // line 106
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "scorecomplexite", [], "any", false, false, false, 106) >= 7)) {
                yield "bg-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "scorecomplexite", [], "any", false, false, false, 106) >= 4)) {
                yield "bg-warning text-dark";
            } else {
                yield "bg-success";
            }
            yield "\">
                                ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "scorecomplexite", [], "any", false, false, false, 107), "html", null, true);
            yield "/10
                            </span>
                        </td>
                        <td class=\"text-center\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "chargehoraire", [], "any", false, false, false, 110), "html", null, true);
            yield "h</td>
                        <td class=\"text-center\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "coefficient", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"progress\" style=\"height:8px; min-width:80px\">
                                <div class=\"progress-bar ";
            // line 114
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "scorecomplexite", [], "any", false, false, false, 114) >= 7)) {
                yield "bg-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "scorecomplexite", [], "any", false, false, false, 114) >= 4)) {
                yield "bg-warning";
            } else {
                yield "bg-success";
            }
            yield "\"
                                     style=\"width:";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "scorecomplexite", [], "any", false, false, false, 115) * 10), "html", null, true);
            yield "%\"></div>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 119
        if (!$context['_iterated']) {
            // line 120
            yield "                    <tr><td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune matière associée à cette classe.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>
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
        return "classe/audit.html.twig";
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
        return array (  383 => 122,  376 => 120,  374 => 119,  365 => 115,  355 => 114,  349 => 111,  345 => 110,  339 => 107,  329 => 106,  324 => 104,  321 => 103,  316 => 102,  299 => 88,  287 => 79,  278 => 78,  276 => 77,  271 => 75,  265 => 72,  257 => 71,  246 => 63,  237 => 62,  235 => 61,  230 => 59,  224 => 56,  216 => 55,  205 => 47,  196 => 46,  194 => 45,  189 => 43,  183 => 40,  175 => 39,  168 => 34,  161 => 30,  157 => 28,  155 => 27,  146 => 21,  140 => 18,  126 => 15,  122 => 13,  116 => 12,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'classe/base.html.twig' %}

{% block title %}Audit de Charge - {{ classe.nom }}{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0\">
                ⚖️ Audit de Charge
                <span class=\"badge {% if workload.surcharge %}bg-danger{% else %}bg-success{% endif %} ms-2\">
                    {% if workload.surcharge %}⚠️ Surchargée{% else %}✅ Équilibrée{% endif %}
                </span>
            </h1>
            <p class=\"text-muted mb-0\">{{ classe.nom }} — {{ classe.niveau }} {% if classe.filiere %}({{ classe.filiere }}){% endif %}</p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_classe_audit_api', {id: classe.id}) }}\" class=\"btn btn-outline-secondary btn-sm\" target=\"_blank\">
                📡 API JSON
            </a>
            <a href=\"{{ path('app_classe_show', {id: classe.id}) }}\" class=\"btn btn-outline-primary btn-sm\">
                ← Retour à la classe
            </a>
        </div>
    </div>

    {% if workload.surcharge %}
    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <strong>⚠️ Alerte !</strong> Cette classe dépasse les seuils recommandés. Un email d'alerte peut être envoyé à l'administration.
        <a href=\"{{ path('app_classe_audit_api', {id: classe.id}) }}\" class=\"btn btn-danger btn-sm ms-3\">📧 Envoyer l'alerte email</a>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    {% endif %}

    <div class=\"row g-4 mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card text-center h-100 border-0 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"display-4 fw-bold {% if workload.totalComplexite > workload.seuilComplexite %}text-danger{% else %}text-success{% endif %}\">
                        {{ workload.totalComplexite }}
                    </div>
                    <p class=\"text-muted mb-1\">Complexité Totale</p>
                    <small class=\"text-muted\">Seuil : {{ workload.seuilComplexite }}</small>
                    <div class=\"progress mt-2\" style=\"height:8px\">
                        {% set pctComplexite = workload.totalComplexite / workload.seuilComplexite * 100 %}
                        <div class=\"progress-bar {% if workload.totalComplexite > workload.seuilComplexite %}bg-danger{% else %}bg-success{% endif %}\"
                             style=\"width: {{ pctComplexite > 100 ? 100 : pctComplexite }}%\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card text-center h-100 border-0 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"display-4 fw-bold {% if workload.totalHeures > workload.seuilHeures %}text-danger{% else %}text-success{% endif %}\">
                        {{ workload.totalHeures }}h
                    </div>
                    <p class=\"text-muted mb-1\">Charge Horaire Totale</p>
                    <small class=\"text-muted\">Seuil : {{ workload.seuilHeures }}h</small>
                    <div class=\"progress mt-2\" style=\"height:8px\">
                        {% set pctHeures = workload.totalHeures / workload.seuilHeures * 100 %}
                        <div class=\"progress-bar {% if workload.totalHeures > workload.seuilHeures %}bg-danger{% else %}bg-success{% endif %}\"
                             style=\"width: {{ pctHeures > 100 ? 100 : pctHeures }}%\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card text-center h-100 border-0 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"display-4 fw-bold {% if workload.complexiteMoyenne > workload.seuilComplexiteMoyenne %}text-danger{% else %}text-success{% endif %}\">
                        {{ workload.complexiteMoyenne }}
                    </div>
                    <p class=\"text-muted mb-1\">Complexité Moyenne</p>
                    <small class=\"text-muted\">Seuil : {{ workload.seuilComplexiteMoyenne }}/10</small>
                    <div class=\"progress mt-2\" style=\"height:8px\">
                        {% set pctComplexiteMoy = workload.complexiteMoyenne / 10 * 100 %}
                        <div class=\"progress-bar {% if workload.complexiteMoyenne > workload.seuilComplexiteMoyenne %}bg-danger{% else %}bg-success{% endif %}\"
                             style=\"width: {{ pctComplexiteMoy > 100 ? 100 : pctComplexiteMoy }}%\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white fw-semibold\">
            📚 Détail des {{ workload.nbMatieres }} matière(s)
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle mb-0\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Matière</th>
                        <th class=\"text-center\">Score Complexité</th>
                        <th class=\"text-center\">Charge Horaire</th>
                        <th class=\"text-center\">Coefficient</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for m in workload.matieres %}
                    <tr>
                        <td class=\"fw-semibold\">{{ m.nom }}</td>
                        <td class=\"text-center\">
                            <span class=\"badge {% if m.scorecomplexite >= 7 %}bg-danger{% elseif m.scorecomplexite >= 4 %}bg-warning text-dark{% else %}bg-success{% endif %}\">
                                {{ m.scorecomplexite }}/10
                            </span>
                        </td>
                        <td class=\"text-center\">{{ m.chargehoraire }}h</td>
                        <td class=\"text-center\">{{ m.coefficient }}</td>
                        <td>
                            <div class=\"progress\" style=\"height:8px; min-width:80px\">
                                <div class=\"progress-bar {% if m.scorecomplexite >= 7 %}bg-danger{% elseif m.scorecomplexite >= 4 %}bg-warning{% else %}bg-success{% endif %}\"
                                     style=\"width:{{ m.scorecomplexite * 10 }}%\"></div>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr><td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune matière associée à cette classe.</td></tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "classe/audit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\audit.html.twig");
    }
}
