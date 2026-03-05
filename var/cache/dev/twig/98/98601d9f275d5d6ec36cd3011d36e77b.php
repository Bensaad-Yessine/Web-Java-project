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

/* classe/archive.html.twig */
class __TwigTemplate_18986be6b2d0886f8311091d7a2cbd35 extends Template
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
        return "classe/base_classe.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/archive.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/archive.html.twig"));

        $this->parent = $this->load("classe/base_classe.html.twig", 1);
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

        yield "Archiver - ";
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
        yield "<div class=\"container py-4\" style=\"max-width: 600px;\">
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white\">
            <h4 class=\"mb-0\">📦 Archiver la Classe</h4>
        </div>
        <div class=\"card-body\">
            <p class=\"text-muted\">
                Cette action va <strong>cloner</strong> la classe <strong>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        yield "</strong> (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 13, $this->source); })()), "anneeuniversitaire", [], "any", false, false, false, 13), "html", null, true);
        yield ")
                vers une nouvelle année universitaire, en conservant toutes ses matières associées.
            </p>
            <div class=\"alert alert-info\">
                <strong>ℹ️ La classe originale ne sera pas modifiée.</strong><br>
                Une nouvelle classe sera créée avec les mêmes matières.
            </div>

            <form method=\"POST\" action=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_archive", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold\">Nouvelle année universitaire</label>
                    <input type=\"text\"
                           name=\"nouvelle_annee\"
                           class=\"form-control\"
                           value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\"
                           placeholder=\"ex: 2025/2026\"
                           pattern=\"\\\\d{4}/\\\\d{4}\"
                           required>
                    <div class=\"form-text\">Format : AAAA/AAAA — Suggestion automatique: ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "</div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-muted small\">Classe originale</label>
                    <div class=\"border rounded p-3 bg-light\">
                        <strong>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), "html", null, true);
        yield "</strong> — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 37, $this->source); })()), "niveau", [], "any", false, false, false, 37), "html", null, true);
        yield "
                        ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 38, $this->source); })()), "filiere", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 38, $this->source); })()), "filiere", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>";
        }
        // line 39
        yield "                        <br><small class=\"text-muted\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 39, $this->source); })()), "getMatiereClasses", [], "any", false, false, false, 39)), "html", null, true);
        yield " matière(s) — Année: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 39, $this->source); })()), "anneeuniversitaire", [], "any", false, false, false, 39), "html", null, true);
        yield "</small>
                    </div>
                </div>

                <div class=\"d-flex gap-2 justify-content-end\">
                    <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                    <button type=\"submit\" class=\"btn btn-primary\" onclick=\"return confirm('Confirmer le clonage de la classe vers ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 45, $this->source); })()), "html", null, true);
        yield " ?')\">
                        📦 Cloner la classe
                    </button>
                </div>
            </form>
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
        return "classe/archive.html.twig";
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
        return array (  175 => 45,  171 => 44,  160 => 39,  154 => 38,  148 => 37,  139 => 31,  132 => 27,  123 => 21,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'classe/base_classe.html.twig' %}

{% block title %}Archiver - {{ classe.nom }}{% endblock %}

{% block body %}
<div class=\"container py-4\" style=\"max-width: 600px;\">
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white\">
            <h4 class=\"mb-0\">📦 Archiver la Classe</h4>
        </div>
        <div class=\"card-body\">
            <p class=\"text-muted\">
                Cette action va <strong>cloner</strong> la classe <strong>{{ classe.nom }}</strong> ({{ classe.anneeuniversitaire }})
                vers une nouvelle année universitaire, en conservant toutes ses matières associées.
            </p>
            <div class=\"alert alert-info\">
                <strong>ℹ️ La classe originale ne sera pas modifiée.</strong><br>
                Une nouvelle classe sera créée avec les mêmes matières.
            </div>

            <form method=\"POST\" action=\"{{ path('app_classe_archive', {id: classe.id}) }}\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold\">Nouvelle année universitaire</label>
                    <input type=\"text\"
                           name=\"nouvelle_annee\"
                           class=\"form-control\"
                           value=\"{{ nextYear }}\"
                           placeholder=\"ex: 2025/2026\"
                           pattern=\"\\\\d{4}/\\\\d{4}\"
                           required>
                    <div class=\"form-text\">Format : AAAA/AAAA — Suggestion automatique: {{ nextYear }}</div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-muted small\">Classe originale</label>
                    <div class=\"border rounded p-3 bg-light\">
                        <strong>{{ classe.nom }}</strong> — {{ classe.niveau }}
                        {% if classe.filiere %}<span class=\"badge bg-secondary\">{{ classe.filiere }}</span>{% endif %}
                        <br><small class=\"text-muted\">{{ classe.getMatiereClasses|length }} matière(s) — Année: {{ classe.anneeuniversitaire }}</small>
                    </div>
                </div>

                <div class=\"d-flex gap-2 justify-content-end\">
                    <a href=\"{{ path('app_classe_show', {id: classe.id}) }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                    <button type=\"submit\" class=\"btn btn-primary\" onclick=\"return confirm('Confirmer le clonage de la classe vers {{ nextYear }} ?')\">
                        📦 Cloner la classe
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "classe/archive.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\archive.html.twig");
    }
}
