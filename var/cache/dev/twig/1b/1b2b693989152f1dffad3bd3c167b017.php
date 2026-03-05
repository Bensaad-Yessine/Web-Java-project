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

/* preference_alerte/showPreferenceAlerte.html.twig */
class __TwigTemplate_f9802159bb112640d98c7d3d94acd732 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/showPreferenceAlerte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/showPreferenceAlerte.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Mes Préférences";
        
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
        yield "<div class=\"main-panel\">
  <div class=\"content-wrapper\">

    <h1>Mes Préférences</h1>

    ";
        // line 12
        yield "    <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preference_alerte_show");
        yield "\" class=\"row g-3 mb-3 align-items-end\">

        <div class=\"col-md-4\">
            <label class=\"form-label\">Rechercher par nom</label>
            <input type=\"text\" 
                   name=\"title\" 
                   value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", ["title"], "method", false, false, false, 18), "html", null, true);
        yield "\" 
                   class=\"form-control\"
                   placeholder=\"Entrer un nom...\">
        </div>

        <div class=\"col-md-3\">
            <label class=\"form-label\">Trier par</label>
            <select name=\"sort\" class=\"form-select\">
                <option value=\"\">-- Choisir --</option>
                <option value=\"dateCreation\"
                    ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["sort"], "method", false, false, false, 28) == "dateCreation")) ? ("selected") : (""));
        yield ">
                    Date de création
                </option>
                <option value=\"dateMiseAJour\"
                    ";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", ["sort"], "method", false, false, false, 32) == "dateMiseAJour")) ? ("selected") : (""));
        yield ">
                    Date de mise à jour
                </option>
            </select>
        </div>

        <div class=\"col-md-3\">
            <button type=\"submit\" class=\"btn btn-primary\">🔍 Filtrer</button>
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preference_alerte_show");
        yield "\" class=\"btn btn-secondary\">
                Réinitialiser
            </a>
        </div>

    </form>

    ";
        // line 48
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preference_alerte_add");
        yield "\" class=\"btn btn-success mb-3\">
        ➕ Ajouter une préférence
    </a>

    ";
        // line 53
        yield "    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Push</th>
                    <th>Site</th>
                    <th>Actif</th>
                    <th>Créé le</th>
                    <th>Dernière mise à jour</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preferences"]) || array_key_exists("preferences", $context) ? $context["preferences"] : (function () { throw new RuntimeError('Variable "preferences" does not exist.', 68, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pref"]) {
            // line 69
            yield "                    <tr ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "isActive", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"table-success\"";
            }
            yield ">
                        <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "nom", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                        <td>";
            // line 71
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "emailActif", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✅") : ("❌"));
            yield "</td>
                        <td>";
            // line 72
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "pushActif", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✅") : ("❌"));
            yield "</td>
                        <td>";
            // line 73
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "siteNotifActive", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✅") : ("❌"));
            yield "</td>
                        <td>";
            // line 74
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "isActive", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✅") : ("❌"));
            yield "</td>
                        <td>";
            // line 75
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "dateCreation", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "dateCreation", [], "any", false, false, false, 75), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                        <td>";
            // line 76
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "dateMiseAJour", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "dateMiseAJour", [], "any", false, false, false, 76), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                        <td>
                            <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preference_alerte_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-warning\">✏️ Editer</a>

                            <form method=\"post\" 
                                  action=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preference_alerte_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" 
                                  style=\"display:inline;\">
                                <input type=\"hidden\" 
                                       name=\"_token\" 
                                       value=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "id", [], "any", false, false, false, 86))), "html", null, true);
            yield "\">
                                <button type=\"submit\" 
                                        class=\"btn btn-sm btn-danger\"
                                        onclick=\"return confirm('Voulez-vous vraiment supprimer cette préférence ?');\">
                                    🗑️ Supprimer
                                </button>
                            </form>

                            ";
            // line 94
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "isActive", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 95
                yield "                                <form method=\"post\" 
                                      action=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preference_alerte_activate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" 
                                      style=\"display:inline;\">
                                    <input type=\"hidden\" 
                                           name=\"_token\" 
                                           value=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("activate" . CoreExtension::getAttribute($this->env, $this->source, $context["pref"], "id", [], "any", false, false, false, 100))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" 
                                            class=\"btn btn-sm btn-success\">
                                        ✅ Activer
                                    </button>
                                </form>
                            ";
            } else {
                // line 107
                yield "                                <span class=\"badge bg-success\">Active</span>
                            ";
            }
            // line 109
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 111
        if (!$context['_iterated']) {
            // line 112
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center\">
                            Aucune préférence trouvée
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pref'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
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
        return "preference_alerte/showPreferenceAlerte.html.twig";
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
        return array (  294 => 118,  283 => 112,  281 => 111,  275 => 109,  271 => 107,  261 => 100,  254 => 96,  251 => 95,  249 => 94,  238 => 86,  231 => 82,  224 => 78,  219 => 76,  215 => 75,  211 => 74,  207 => 73,  203 => 72,  199 => 71,  195 => 70,  188 => 69,  183 => 68,  166 => 53,  158 => 48,  148 => 40,  137 => 32,  130 => 28,  117 => 18,  107 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Préférences{% endblock %}

{% block body %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">

    <h1>Mes Préférences</h1>

    {# 🔎 Search + Sort Form #}
    <form method=\"get\" action=\"{{ path('preference_alerte_show') }}\" class=\"row g-3 mb-3 align-items-end\">

        <div class=\"col-md-4\">
            <label class=\"form-label\">Rechercher par nom</label>
            <input type=\"text\" 
                   name=\"title\" 
                   value=\"{{ app.request.get('title') }}\" 
                   class=\"form-control\"
                   placeholder=\"Entrer un nom...\">
        </div>

        <div class=\"col-md-3\">
            <label class=\"form-label\">Trier par</label>
            <select name=\"sort\" class=\"form-select\">
                <option value=\"\">-- Choisir --</option>
                <option value=\"dateCreation\"
                    {{ app.request.get('sort') == 'dateCreation' ? 'selected' : '' }}>
                    Date de création
                </option>
                <option value=\"dateMiseAJour\"
                    {{ app.request.get('sort') == 'dateMiseAJour' ? 'selected' : '' }}>
                    Date de mise à jour
                </option>
            </select>
        </div>

        <div class=\"col-md-3\">
            <button type=\"submit\" class=\"btn btn-primary\">🔍 Filtrer</button>
            <a href=\"{{ path('preference_alerte_show') }}\" class=\"btn btn-secondary\">
                Réinitialiser
            </a>
        </div>

    </form>

    {# ➕ Add Preference Button #}
    <a href=\"{{ path('preference_alerte_add') }}\" class=\"btn btn-success mb-3\">
        ➕ Ajouter une préférence
    </a>

    {# Preferences Table #}
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Push</th>
                    <th>Site</th>
                    <th>Actif</th>
                    <th>Créé le</th>
                    <th>Dernière mise à jour</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for pref in preferences %}
                    <tr {% if pref.isActive %}class=\"table-success\"{% endif %}>
                        <td>{{ pref.nom }}</td>
                        <td>{{ pref.emailActif ? '✅' : '❌' }}</td>
                        <td>{{ pref.pushActif ? '✅' : '❌' }}</td>
                        <td>{{ pref.siteNotifActive ? '✅' : '❌' }}</td>
                        <td>{{ pref.isActive ? '✅' : '❌' }}</td>
                        <td>{{ pref.dateCreation ? pref.dateCreation|date('d/m/Y H:i') : '-' }}</td>
                        <td>{{ pref.dateMiseAJour ? pref.dateMiseAJour|date('d/m/Y H:i') : '-' }}</td>
                        <td>
                            <a href=\"{{ path('preference_alerte_edit', {'id': pref.id}) }}\" 
                               class=\"btn btn-sm btn-warning\">✏️ Editer</a>

                            <form method=\"post\" 
                                  action=\"{{ path('preference_alerte_delete', {'id': pref.id}) }}\" 
                                  style=\"display:inline;\">
                                <input type=\"hidden\" 
                                       name=\"_token\" 
                                       value=\"{{ csrf_token('delete' ~ pref.id) }}\">
                                <button type=\"submit\" 
                                        class=\"btn btn-sm btn-danger\"
                                        onclick=\"return confirm('Voulez-vous vraiment supprimer cette préférence ?');\">
                                    🗑️ Supprimer
                                </button>
                            </form>

                            {% if not pref.isActive %}
                                <form method=\"post\" 
                                      action=\"{{ path('preference_alerte_activate', {'id': pref.id}) }}\" 
                                      style=\"display:inline;\">
                                    <input type=\"hidden\" 
                                           name=\"_token\" 
                                           value=\"{{ csrf_token('activate' ~ pref.id) }}\">
                                    <button type=\"submit\" 
                                            class=\"btn btn-sm btn-success\">
                                        ✅ Activer
                                    </button>
                                </form>
                            {% else %}
                                <span class=\"badge bg-success\">Active</span>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center\">
                            Aucune préférence trouvée
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

  </div>
</div>
{% endblock %}
", "preference_alerte/showPreferenceAlerte.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\preference_alerte\\showPreferenceAlerte.html.twig");
    }
}
