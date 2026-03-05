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

/* tache/showTache.html.twig */
class __TwigTemplate_28d81417bbf03511444a3f5b8c96cce9 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/showTache.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/showTache.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Liste des Tâches";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"main-panel\">
  <div class=\"content-wrapper\">

    <h1>Liste des Tâches</h1>

    ";
        // line 14
        yield "    <div class=\"mb-3 d-flex gap-2 align-items-end\">

        ";
        // line 17
        yield "        <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_search");
        yield "\" class=\"d-flex gap-2 align-items-end\">
            <div class=\"d-flex flex-column\">
                <label for=\"titre\">Titre</label>
                <input type=\"text\" id=\"titre\" name=\"titre\" placeholder=\"Titre...\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("titre", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 20, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\">
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-primary mt-2\">Rechercher</button>
            </div>
        </form>

        ";
        // line 28
        yield "        <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_filter");
        yield "\" class=\"d-flex gap-2 align-items-end\">
            <div class=\"d-flex flex-column\">
                <label for=\"start\">Date début</label>
                <input type=\"text\" id=\"start\" name=\"start\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("start", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 31, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control datepicker\" placeholder=\"dd-mm-yyyy\">
            </div>
            <div class=\"d-flex flex-column\">
                <label for=\"end\">Date fin</label>
                <input type=\"text\" id=\"end\" name=\"end\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("end", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 35, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control datepicker\" placeholder=\"dd-mm-yyyy\">
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
            </div>
        </form>

    </div>

    ";
        // line 45
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_add");
        yield "\" class=\"btn btn-success mb-3\">Ajouter une tâche</a>

    ";
        // line 48
        yield "    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Type</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Durée</th>
                    <th>Priorité</th>
                    <th>Statut</th>
                    <th>Origine</th>
                    <th>Actions</th>
                    <th>Changer Statut</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 67
            yield "                    <tr>
                        <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                        <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                        <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "type", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                        <td>";
            // line 71
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateDebut", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateDebut", [], "any", false, false, false, 71), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                        <td>";
            // line 72
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateFin", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateFin", [], "any", false, false, false, 72), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                        <td>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dureeEstimee", [], "any", false, false, false, 73), "html", null, true);
            yield " min</td>
                        <td>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                        <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                        <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "origine", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info mb-1\">Modifier</a>
                            <form method=\"post\" action=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 80))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche ?');\">
                                    Supprimer
                                </button>
                            </form>
                        </td>

                        ";
            // line 88
            yield "                        <td>
                            <div class=\"d-flex flex-column gap-1\">
                                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(["A_FAIRE", "EN_COURS", "TERMINEE", "EN_RETARD", "PAUSED"]);
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 91
                yield "                                    ";
                if (($context["status"] != CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 91))) {
                    // line 92
                    yield "                                        <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                    yield "\">
                                            <input type=\"hidden\" name=\"status\" value=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
                    yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\">";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["status"]), "html", null, true);
                    yield "</button>
                                        </form>
                                    ";
                }
                // line 97
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "                            </div>
                        </td>
                    </tr>

                    ";
            // line 103
            yield "                    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "suivis", [], "any", false, false, false, 103)) > 0)) {
                // line 104
                yield "                        <tr>
                            <td colspan=\"11\">
                                <strong>Historique du statut :</strong>
                                <table class=\"table table-sm table-bordered mt-1\">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Ancien statut</th>
                                            <th>Nouveau statut</th>
                                            <th>Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "suivis", [], "any", false, false, false, 117));
                foreach ($context['_seq'] as $context["_key"] => $context["suivi"]) {
                    // line 118
                    yield "                                            <tr>
                                                <td>";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "dateAction", [], "any", false, false, false, 119), "d/m/Y H:i"), "html", null, true);
                    yield "</td>
                                                <td>";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "ancienStatut", [], "any", false, false, false, 120), "html", null, true);
                    yield "</td>
                                                <td>";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "nouveauStatut", [], "any", false, false, false, 121), "html", null, true);
                    yield "</td>
                                                <td>";
                    // line 122
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "commentaire", [], "any", false, false, false, 122)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "commentaire", [], "any", false, false, false, 122), "html", null, true)) : ("—"));
                    yield "</td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['suivi'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                yield "                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    ";
            }
            // line 130
            yield "
                ";
            $context['_iterated'] = true;
        }
        // line 131
        if (!$context['_iterated']) {
            // line 132
            yield "                    <tr>
                        <td colspan=\"11\">Aucune tâche trouvée</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "            </tbody>
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
        return "tache/showTache.html.twig";
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
        return array (  350 => 136,  341 => 132,  339 => 131,  334 => 130,  327 => 125,  318 => 122,  314 => 121,  310 => 120,  306 => 119,  303 => 118,  299 => 117,  284 => 104,  281 => 103,  275 => 98,  269 => 97,  263 => 94,  259 => 93,  254 => 92,  251 => 91,  247 => 90,  243 => 88,  233 => 80,  229 => 79,  225 => 78,  220 => 76,  216 => 75,  212 => 74,  208 => 73,  204 => 72,  200 => 71,  196 => 70,  192 => 69,  188 => 68,  185 => 67,  180 => 66,  160 => 48,  154 => 45,  142 => 35,  135 => 31,  128 => 28,  118 => 20,  111 => 17,  107 => 14,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/tache/showTache.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Liste des Tâches{% endblock %}

{% block body %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">

    <h1>Liste des Tâches</h1>

    {# ---------------- Search + Date Filter Form ---------------- #}
    <div class=\"mb-3 d-flex gap-2 align-items-end\">

        {# 1️⃣ Title search form #}
        <form method=\"get\" action=\"{{ path('tache_search') }}\" class=\"d-flex gap-2 align-items-end\">
            <div class=\"d-flex flex-column\">
                <label for=\"titre\">Titre</label>
                <input type=\"text\" id=\"titre\" name=\"titre\" placeholder=\"Titre...\" value=\"{{ titre|default('') }}\" class=\"form-control\">
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-primary mt-2\">Rechercher</button>
            </div>
        </form>

        {# 2️⃣ Date interval filter form #}
        <form method=\"get\" action=\"{{ path('tache_filter') }}\" class=\"d-flex gap-2 align-items-end\">
            <div class=\"d-flex flex-column\">
                <label for=\"start\">Date début</label>
                <input type=\"text\" id=\"start\" name=\"start\" value=\"{{ start|default('') }}\" class=\"form-control datepicker\" placeholder=\"dd-mm-yyyy\">
            </div>
            <div class=\"d-flex flex-column\">
                <label for=\"end\">Date fin</label>
                <input type=\"text\" id=\"end\" name=\"end\" value=\"{{ end|default('') }}\" class=\"form-control datepicker\" placeholder=\"dd-mm-yyyy\">
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
            </div>
        </form>

    </div>

    {# ---------------- Add Task Button ---------------- #}
    <a href=\"{{ path('tache_add') }}\" class=\"btn btn-success mb-3\">Ajouter une tâche</a>

    {# ---------------- Tasks Table ---------------- #}
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Type</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Durée</th>
                    <th>Priorité</th>
                    <th>Statut</th>
                    <th>Origine</th>
                    <th>Actions</th>
                    <th>Changer Statut</th>
                </tr>
            </thead>
            <tbody>
                {% for tache in taches %}
                    <tr>
                        <td>{{ tache.id }}</td>
                        <td>{{ tache.titre }}</td>
                        <td>{{ tache.type }}</td>
                        <td>{{ tache.dateDebut ? tache.dateDebut|date('d/m/Y H:i') : '—' }}</td>
                        <td>{{ tache.dateFin ? tache.dateFin|date('d/m/Y H:i') : '—' }}</td>
                        <td>{{ tache.dureeEstimee }} min</td>
                        <td>{{ tache.priorite }}</td>
                        <td>{{ tache.statut }}</td>
                        <td>{{ tache.origine }}</td>
                        <td>
                            <a href=\"{{ path('tache_edit', {'id': tache.id}) }}\" class=\"btn btn-sm btn-info mb-1\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('tache_delete', {'id': tache.id}) }}\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tache.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette tâche ?');\">
                                    Supprimer
                                </button>
                            </form>
                        </td>

                        {# ---------------- Status Change Buttons ---------------- #}
                        <td>
                            <div class=\"d-flex flex-column gap-1\">
                                {% for status in ['A_FAIRE', 'EN_COURS', 'TERMINEE', 'EN_RETARD', 'PAUSED'] %}
                                    {% if status != tache.statut %}
                                        <form method=\"post\" action=\"{{ path('tache_detail', {'id': tache.id}) }}\">
                                            <input type=\"hidden\" name=\"status\" value=\"{{ status }}\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\">{{ status|capitalize }}</button>
                                        </form>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </td>
                    </tr>

                    {# ---------------- Task Status History ---------------- #}
                    {% if tache.suivis|length > 0 %}
                        <tr>
                            <td colspan=\"11\">
                                <strong>Historique du statut :</strong>
                                <table class=\"table table-sm table-bordered mt-1\">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Ancien statut</th>
                                            <th>Nouveau statut</th>
                                            <th>Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for suivi in tache.suivis %}
                                            <tr>
                                                <td>{{ suivi.dateAction|date('d/m/Y H:i') }}</td>
                                                <td>{{ suivi.ancienStatut }}</td>
                                                <td>{{ suivi.nouveauStatut }}</td>
                                                <td>{{ suivi.commentaire ?: '—' }}</td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    {% endif %}

                {% else %}
                    <tr>
                        <td colspan=\"11\">Aucune tâche trouvée</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

  </div>
</div>
{% endblock %}
", "tache/showTache.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\tache\\showTache.html.twig");
    }
}
