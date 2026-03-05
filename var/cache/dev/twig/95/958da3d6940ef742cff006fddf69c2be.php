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

/* tache/_rows.html.twig */
class __TwigTemplate_624c8831a3ea0f02cde0b0895e87b38d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/_rows.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 3, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 4
            yield "  ";
            // line 5
            yield "  <tr
    data-type=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "type", [], "any", false, false, false, 6), "html", null, true);
            yield "\"
    data-statut=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 7), "html", null, true);
            yield "\"
    data-email=\"";
            // line 8
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 8), "email", [], "any", false, false, false, 8), "html", null, true)) : (""));
            yield "\"
  >
    <td>
      <strong>#";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 11), "html", null, true);
            yield "</strong>
    </td>

    <td>
      <div>
        <h6 class=\"mb-1\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 16), "html", null, true);
            yield "</h6>
      </div>
    </td>

    ";
            // line 23
            yield "    <td>
      ";
            // line 24
            $context["typeMap"] = ["MANUEL" => ["type-feature", "MANUEL"], "REUNION" => ["type-maintenance", "REUNION"], "REVISION" => ["type-improvement", "REVISION"], "SANTE" => ["type-other", "SANTE"], "EMPLOI" => ["type-bug", "EMPLOI"]];
            // line 31
            yield "
      ";
            // line 32
            $context["typeInfo"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["typeMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "type", [], "any", false, false, false, 32), [], "array", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeMap"]) || array_key_exists("typeMap", $context) ? $context["typeMap"] : (function () { throw new RuntimeError('Variable "typeMap" does not exist.', 32, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "type", [], "any", false, false, false, 32), [], "array", false, false, false, 32), ["type-other", CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "type", [], "any", false, false, false, 32)])) : (["type-other", CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "type", [], "any", false, false, false, 32)]));
            // line 33
            yield "
      <span class=\"type-badge ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeInfo"]) || array_key_exists("typeInfo", $context) ? $context["typeInfo"] : (function () { throw new RuntimeError('Variable "typeInfo" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "html", null, true);
            yield "\">
        ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeInfo"]) || array_key_exists("typeInfo", $context) ? $context["typeInfo"] : (function () { throw new RuntimeError('Variable "typeInfo" does not exist.', 35, $this->source); })()), 1, [], "array", false, false, false, 35), "html", null, true);
            yield "
      </span>
    </td>

    ";
            // line 42
            yield "    <td>
      <div class=\"date-container\">
        <span class=\"date-label\">Début</span>
        <span class=\"date-value\">
          ";
            // line 46
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateDebut", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateDebut", [], "any", false, false, false, 46), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
        </span>
      </div>

      <div class=\"date-container mt-2\">
        <span class=\"date-label\">Fin</span>
        <span class=\"date-value\">
          ";
            // line 53
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateFin", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateFin", [], "any", false, false, false, 53), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
        </span>
      </div>
    </td>

    ";
            // line 61
            yield "    <td>
      ";
            // line 62
            $context["prioriteMap"] = ["ELEVEE" => ["priority-high", "Urgent"], "MOYEN" => ["priority-medium", "Moyenne"], "FAIBLE" => ["priority-low", "Basse"]];
            // line 67
            yield "
      ";
            // line 68
            $context["pr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["prioriteMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 68), [], "array", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prioriteMap"]) || array_key_exists("prioriteMap", $context) ? $context["prioriteMap"] : (function () { throw new RuntimeError('Variable "prioriteMap" does not exist.', 68, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 68), [], "array", false, false, false, 68), ["priority-low", CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 68)])) : (["priority-low", CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 68)]));
            // line 69
            yield "
      <span class=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pr"]) || array_key_exists("pr", $context) ? $context["pr"] : (function () { throw new RuntimeError('Variable "pr" does not exist.', 70, $this->source); })()), 0, [], "array", false, false, false, 70), "html", null, true);
            yield "\">
        ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pr"]) || array_key_exists("pr", $context) ? $context["pr"] : (function () { throw new RuntimeError('Variable "pr" does not exist.', 71, $this->source); })()), 1, [], "array", false, false, false, 71), "html", null, true);
            yield "
      </span>
    </td>

    ";
            // line 78
            yield "    <td>
      ";
            // line 79
            $context["statutMap"] = ["TERMINEE" => ["status-completed", "Terminé"], "EN_COURS" => ["status-inprogress", "En cours"], "A_FAIRE" => ["status-pending", "À faire"], "EN_RETARD" => ["status-pending", "En retard"], "PAUSED" => ["status-pending", "En pause"]];
            // line 86
            yield "
      ";
            // line 87
            $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["statutMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 87), [], "array", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutMap"]) || array_key_exists("statutMap", $context) ? $context["statutMap"] : (function () { throw new RuntimeError('Variable "statutMap" does not exist.', 87, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 87), [], "array", false, false, false, 87), ["status-pending", CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 87)])) : (["status-pending", CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 87)]));
            // line 88
            yield "
      <span class=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 89, $this->source); })()), 0, [], "array", false, false, false, 89), "html", null, true);
            yield "\">
        ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 90, $this->source); })()), 1, [], "array", false, false, false, 90), "html", null, true);
            yield "
      </span>
    </td>

    ";
            // line 97
            yield "    <td>
      ";
            // line 98
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 99
                yield "        <div class=\"user-cell\">
          ";
                // line 100
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 100), "profilePic", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 101
                    yield "            <img
              src=\"";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 102), "profilePic", [], "any", false, false, false, 102))), "html", null, true);
                    yield "\"
              alt=\"";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 103), "prenom", [], "any", false, false, false, 103), "html", null, true);
                    yield "\"
              class=\"user-avatar-img-small\"
            >
          ";
                } else {
                    // line 107
                    yield "            <div class=\"user-avatar-small\">
              ";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 108), "prenom", [], "any", false, false, false, 108))), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 108), "nom", [], "any", false, false, false, 108))), "html", null, true);
                    yield "
            </div>
          ";
                }
                // line 111
                yield "
          <div>
            <div>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 113), "email", [], "any", false, false, false, 113), "html", null, true);
                yield "</div>
            <small class=\"text-muted\">
              ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 115), "prenom", [], "any", false, false, false, 115), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "user", [], "any", false, false, false, 115), "nom", [], "any", false, false, false, 115), "html", null, true);
                yield "
            </small>
          </div>
        </div>
      ";
            } else {
                // line 120
                yield "        <span class=\"text-muted\">—</span>
      ";
            }
            // line 122
            yield "    </td>

    ";
            // line 127
            yield "    <td>
      <div class=\"d-flex\">
        <a href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\"
           class=\"action-btn btn-view\" title=\"Voir\">
          <i class=\"mdi mdi-eye\"></i>
        </a>

        <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\"
           class=\"action-btn btn-edit\" title=\"Modifier\">
          <i class=\"mdi mdi-pencil\"></i>
        </a>

        <form action=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\"
              method=\"POST\"
              style=\"display:inline;\"
              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 143))), "html", null, true);
            yield "\">
          <button type=\"submit\" class=\"action-btn btn-delete\" title=\"Supprimer\">
            <i class=\"mdi mdi-delete\"></i>
          </button>
        </form>
      </div>
    </td>
  </tr>

";
            $context['_iterated'] = true;
        }
        // line 152
        if (!$context['_iterated']) {
            // line 153
            yield "  <tr>
    <td colspan=\"8\" class=\"text-center text-muted py-4\">
      Aucune tâche trouvée.
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tache/_rows.html.twig";
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
        return array (  290 => 153,  288 => 152,  274 => 143,  267 => 139,  259 => 134,  251 => 129,  247 => 127,  243 => 122,  239 => 120,  229 => 115,  224 => 113,  220 => 111,  213 => 108,  210 => 107,  203 => 103,  199 => 102,  196 => 101,  194 => 100,  191 => 99,  189 => 98,  186 => 97,  179 => 90,  175 => 89,  172 => 88,  170 => 87,  167 => 86,  165 => 79,  162 => 78,  155 => 71,  151 => 70,  148 => 69,  146 => 68,  143 => 67,  141 => 62,  138 => 61,  130 => 53,  120 => 46,  114 => 42,  107 => 35,  103 => 34,  100 => 33,  98 => 32,  95 => 31,  93 => 24,  90 => 23,  83 => 16,  75 => 11,  69 => 8,  65 => 7,  61 => 6,  58 => 5,  56 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/tache/_rows.html.twig #}

{% for tache in taches %}
  {# Optional: data-* attributes (useful if you ever add client-side filters) #}
  <tr
    data-type=\"{{ tache.type }}\"
    data-statut=\"{{ tache.statut }}\"
    data-email=\"{{ tache.user ? tache.user.email : '' }}\"
  >
    <td>
      <strong>#{{ tache.id }}</strong>
    </td>

    <td>
      <div>
        <h6 class=\"mb-1\">{{ tache.titre }}</h6>
      </div>
    </td>

    {# =========================
       TYPE (based on your Entity)
       ========================= #}
    <td>
      {% set typeMap = {
        'MANUEL':   ['type-feature',     'MANUEL'],
        'REUNION':  ['type-maintenance', 'REUNION'],
        'REVISION': ['type-improvement', 'REVISION'],
        'SANTE':    ['type-other',       'SANTE'],
        'EMPLOI':   ['type-bug',         'EMPLOI']
      } %}

      {% set typeInfo = typeMap[tache.type]|default(['type-other', tache.type]) %}

      <span class=\"type-badge {{ typeInfo[0] }}\">
        {{ typeInfo[1] }}
      </span>
    </td>

    {# =========================
       DATES
       ========================= #}
    <td>
      <div class=\"date-container\">
        <span class=\"date-label\">Début</span>
        <span class=\"date-value\">
          {{ tache.dateDebut ? tache.dateDebut|date('d/m/Y H:i') : '—' }}
        </span>
      </div>

      <div class=\"date-container mt-2\">
        <span class=\"date-label\">Fin</span>
        <span class=\"date-value\">
          {{ tache.dateFin ? tache.dateFin|date('d/m/Y H:i') : '—' }}
        </span>
      </div>
    </td>

    {# =========================
       PRIORITE (Entity: FAIBLE / MOYEN / ELEVEE)
       ========================= #}
    <td>
      {% set prioriteMap = {
        'ELEVEE': ['priority-high', 'Urgent'],
        'MOYEN':  ['priority-medium', 'Moyenne'],
        'FAIBLE': ['priority-low', 'Basse']
      } %}

      {% set pr = prioriteMap[tache.priorite]|default(['priority-low', tache.priorite]) %}

      <span class=\"{{ pr[0] }}\">
        {{ pr[1] }}
      </span>
    </td>

    {# =========================
       STATUT (Entity: A_FAIRE / EN_COURS / TERMINEE / EN_RETARD / PAUSED)
       ========================= #}
    <td>
      {% set statutMap = {
        'TERMINEE':  ['status-completed', 'Terminé'],
        'EN_COURS':  ['status-inprogress', 'En cours'],
        'A_FAIRE':   ['status-pending', 'À faire'],
        'EN_RETARD': ['status-pending', 'En retard'],
        'PAUSED':    ['status-pending', 'En pause']
      } %}

      {% set st = statutMap[tache.statut]|default(['status-pending', tache.statut]) %}

      <span class=\"{{ st[0] }}\">
        {{ st[1] }}
      </span>
    </td>

    {# =========================
       USER
       ========================= #}
    <td>
      {% if tache.user %}
        <div class=\"user-cell\">
          {% if tache.user.profilePic %}
            <img
              src=\"{{ asset('uploads/profile_pics/' ~ tache.user.profilePic) }}\"
              alt=\"{{ tache.user.prenom }}\"
              class=\"user-avatar-img-small\"
            >
          {% else %}
            <div class=\"user-avatar-small\">
              {{ tache.user.prenom|first|upper }}{{ tache.user.nom|first|upper }}
            </div>
          {% endif %}

          <div>
            <div>{{ tache.user.email }}</div>
            <small class=\"text-muted\">
              {{ tache.user.prenom }} {{ tache.user.nom }}
            </small>
          </div>
        </div>
      {% else %}
        <span class=\"text-muted\">—</span>
      {% endif %}
    </td>

    {# =========================
       ACTIONS
       ========================= #}
    <td>
      <div class=\"d-flex\">
        <a href=\"{{ path('app_tache_show', { id: tache.id }) }}\"
           class=\"action-btn btn-view\" title=\"Voir\">
          <i class=\"mdi mdi-eye\"></i>
        </a>

        <a href=\"{{ path('app_tache_edit', { id: tache.id }) }}\"
           class=\"action-btn btn-edit\" title=\"Modifier\">
          <i class=\"mdi mdi-pencil\"></i>
        </a>

        <form action=\"{{ path('app_tache_delete', { id: tache.id }) }}\"
              method=\"POST\"
              style=\"display:inline;\"
              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tache.id) }}\">
          <button type=\"submit\" class=\"action-btn btn-delete\" title=\"Supprimer\">
            <i class=\"mdi mdi-delete\"></i>
          </button>
        </form>
      </div>
    </td>
  </tr>

{% else %}
  <tr>
    <td colspan=\"8\" class=\"text-center text-muted py-4\">
      Aucune tâche trouvée.
    </td>
  </tr>
{% endfor %}
", "tache/_rows.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\tache\\_rows.html.twig");
    }
}
