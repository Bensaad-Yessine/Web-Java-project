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

/* objectif_sante/_rows.html.twig */
class __TwigTemplate_5401f209ae7b1de2297cdede5ab9d353 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_sante/_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_sante/_rows.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["objectif_sante"]) {
            // line 2
            yield "<tr>
  <td><strong>#";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 3), "html", null, true);
            yield "</strong></td>

  <td>
    <div>
      <h6 class=\"mb-0\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "titre", [], "any", false, false, false, 7), "html", null, true);
            yield "</h6>
      <small class=\"text-muted\">Objectif #";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 8), "html", null, true);
            yield "</small>
    </div>
  </td>

  <td>
    <span class=\"type-badge type-";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "type", [], "any", false, false, false, 13)), [" " => "-"]), "html", null, true);
            yield "\">
      ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "type", [], "any", false, false, false, 14), "html", null, true);
            yield "
    </span>
  </td>

  <td>
    ";
            // line 19
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "valeurCible", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "      <span class=\"target-value\">
        <i class=\"mdi mdi-target\"></i>
        ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "getValeurCibleAvecUnite", [], "method", false, false, false, 22), "html", null, true);
                yield "
      </span>
    ";
            } else {
                // line 25
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 27
            yield "  </td>

  <td>
    <div class=\"date-cell\">
      <span class=\"date-label\">Début</span>
      <span class=\"date-value\">";
            // line 32
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "dateDebut", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "dateDebut", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</span>
      <span class=\"date-label mt-1\">Fin</span>
      <span class=\"date-value\">";
            // line 34
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "dateFin", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "dateFin", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</span>
    </div>
  </td>

  <td>
    ";
            // line 39
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "scoreMoyen", [], "any", false, false, false, 39))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "      <div class=\"d-flex align-items-center\">
        <div class=\"progress me-2\" style=\"width: 100px;\">
          ";
                // line 42
                $context["prog"] = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "scoreMoyen", [], "any", false, false, false, 42);
                // line 43
                yield "          <div class=\"progress-bar bg-health\" role=\"progressbar\"
               style=\"width: ";
                // line 44
                yield ((((isset($context["prog"]) || array_key_exists("prog", $context) ? $context["prog"] : (function () { throw new RuntimeError('Variable "prog" does not exist.', 44, $this->source); })()) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prog"]) || array_key_exists("prog", $context) ? $context["prog"] : (function () { throw new RuntimeError('Variable "prog" does not exist.', 44, $this->source); })()), "html", null, true)));
                yield "%\"
               aria-valuenow=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prog"]) || array_key_exists("prog", $context) ? $context["prog"] : (function () { throw new RuntimeError('Variable "prog" does not exist.', 45, $this->source); })()), "html", null, true);
                yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
        <small class=\"fw-bold\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "scoreMoyen", [], "any", false, false, false, 47), "html", null, true);
                yield "%</small>
      </div>
    ";
            } else {
                // line 50
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 52
            yield "  </td>

  <td>
    ";
            // line 55
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "priorite", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "      <span class=\"priority-badge priority-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "priorite", [], "any", false, false, false, 56)), "html", null, true);
                yield "\">
        <i class=\"mdi mdi-flag me-1\"></i>
        ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "priorite", [], "any", false, false, false, 58), "html", null, true);
                yield "
      </span>
    ";
            } else {
                // line 61
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 63
            yield "  </td>

  <td>
    ";
            // line 66
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "statut", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "      <span class=\"status-badge status-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "statut", [], "any", false, false, false, 67)), ["_" => "-"]), "html", null, true);
                yield "\">
        ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "statut", [], "any", false, false, false, 68), "html", null, true);
                yield "
      </span>
    ";
            } else {
                // line 71
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 73
            yield "  </td>

  <td>
    ";
            // line 76
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "user", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "      <div class=\"user-info\">
        ";
                // line 78
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "user", [], "any", false, false, false, 78), "profilePic", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 79
                    yield "          <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "user", [], "any", false, false, false, 79), "profilePic", [], "any", false, false, false, 79))), "html", null, true);
                    yield "\"
               alt=\"";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "user", [], "any", false, false, false, 80), "nom", [], "any", false, false, false, 80), "html", null, true);
                    yield "\"
               class=\"user-avatar-img\">
        ";
                } else {
                    // line 83
                    yield "          <div class=\"user-avatar\">
            ";
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "user", [], "any", false, false, false, 84), "nom", [], "any", false, false, false, 84))), "html", null, true);
                    yield "
          </div>
        ";
                }
                // line 87
                yield "        <div class=\"user-info-text\">
          <span class=\"user-name\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "user", [], "any", false, false, false, 88), "nom", [], "any", false, false, false, 88), "html", null, true);
                yield "</span>
          <span class=\"user-email\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "user", [], "any", false, false, false, 89), "email", [], "any", false, false, false, 89), "html", null, true);
                yield "</span>
        </div>
      </div>
    ";
            } else {
                // line 93
                yield "      <span class=\"text-muted\">Non assigné</span>
    ";
            }
            // line 95
            yield "  </td>

  <td>
    <div class=\"action-buttons\">
      <a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\"
         class=\"btn btn-success btn-sm\" title=\"Voir les suivis\">
        <i class=\"mdi mdi-chart-line\"></i>
      </a>

      <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\"
         class=\"btn btn-info btn-sm\" title=\"Voir\">
        <i class=\"mdi mdi-eye\"></i>
      </a>

      <a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\"
         class=\"btn btn-warning btn-sm\" title=\"Modifier\">
        <i class=\"mdi mdi-pencil\"></i>
      </a>

      <form action=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\"
            method=\"POST\" style=\"display:inline\"
            onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 117))), "html", null, true);
            yield "\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
          <i class=\"mdi mdi-delete\"></i>
        </button>
      </form>
    </div>
  </td>
</tr>
";
            $context['_iterated'] = true;
        }
        // line 125
        if (!$context['_iterated']) {
            // line 126
            yield "<tr>
  <td colspan=\"10\" class=\"text-center text-muted py-4\">Aucun résultat</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['objectif_sante'], $context['_parent'], $context['_iterated']);
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
        return "objectif_sante/_rows.html.twig";
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
        return array (  299 => 126,  297 => 125,  284 => 117,  278 => 114,  270 => 109,  262 => 104,  254 => 99,  248 => 95,  244 => 93,  237 => 89,  233 => 88,  230 => 87,  224 => 84,  221 => 83,  215 => 80,  210 => 79,  208 => 78,  205 => 77,  203 => 76,  198 => 73,  194 => 71,  188 => 68,  183 => 67,  181 => 66,  176 => 63,  172 => 61,  166 => 58,  160 => 56,  158 => 55,  153 => 52,  149 => 50,  143 => 47,  138 => 45,  134 => 44,  131 => 43,  129 => 42,  125 => 40,  123 => 39,  115 => 34,  110 => 32,  103 => 27,  99 => 25,  93 => 22,  89 => 20,  87 => 19,  79 => 14,  75 => 13,  67 => 8,  63 => 7,  56 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for objectif_sante in objectif_santes %}
<tr>
  <td><strong>#{{ objectif_sante.id }}</strong></td>

  <td>
    <div>
      <h6 class=\"mb-0\">{{ objectif_sante.titre }}</h6>
      <small class=\"text-muted\">Objectif #{{ objectif_sante.id }}</small>
    </div>
  </td>

  <td>
    <span class=\"type-badge type-{{ objectif_sante.type|lower|replace({' ': '-'}) }}\">
      {{ objectif_sante.type }}
    </span>
  </td>

  <td>
    {% if objectif_sante.valeurCible %}
      <span class=\"target-value\">
        <i class=\"mdi mdi-target\"></i>
        {{ objectif_sante.getValeurCibleAvecUnite() }}
      </span>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    <div class=\"date-cell\">
      <span class=\"date-label\">Début</span>
      <span class=\"date-value\">{{ objectif_sante.dateDebut ? objectif_sante.dateDebut|date('d/m/Y') : '—' }}</span>
      <span class=\"date-label mt-1\">Fin</span>
      <span class=\"date-value\">{{ objectif_sante.dateFin ? objectif_sante.dateFin|date('d/m/Y') : '—' }}</span>
    </div>
  </td>

  <td>
    {% if objectif_sante.scoreMoyen is not null %}
      <div class=\"d-flex align-items-center\">
        <div class=\"progress me-2\" style=\"width: 100px;\">
          {% set prog = objectif_sante.scoreMoyen %}
          <div class=\"progress-bar bg-health\" role=\"progressbar\"
               style=\"width: {{ prog > 100 ? 100 : prog }}%\"
               aria-valuenow=\"{{ prog }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
        <small class=\"fw-bold\">{{ objectif_sante.scoreMoyen }}%</small>
      </div>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    {% if objectif_sante.priorite %}
      <span class=\"priority-badge priority-{{ objectif_sante.priorite|lower }}\">
        <i class=\"mdi mdi-flag me-1\"></i>
        {{ objectif_sante.priorite }}
      </span>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    {% if objectif_sante.statut %}
      <span class=\"status-badge status-{{ objectif_sante.statut|lower|replace({'_':'-'}) }}\">
        {{ objectif_sante.statut }}
      </span>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    {% if objectif_sante.user %}
      <div class=\"user-info\">
        {% if objectif_sante.user.profilePic %}
          <img src=\"{{ asset('uploads/profile_pics/' ~ objectif_sante.user.profilePic) }}\"
               alt=\"{{ objectif_sante.user.nom }}\"
               class=\"user-avatar-img\">
        {% else %}
          <div class=\"user-avatar\">
            {{ objectif_sante.user.nom|first|upper }}
          </div>
        {% endif %}
        <div class=\"user-info-text\">
          <span class=\"user-name\">{{ objectif_sante.user.nom }}</span>
          <span class=\"user-email\">{{ objectif_sante.user.email }}</span>
        </div>
      </div>
    {% else %}
      <span class=\"text-muted\">Non assigné</span>
    {% endif %}
  </td>

  <td>
    <div class=\"action-buttons\">
      <a href=\"{{ path('app_objectif_suivis', { id: objectif_sante.id }) }}\"
         class=\"btn btn-success btn-sm\" title=\"Voir les suivis\">
        <i class=\"mdi mdi-chart-line\"></i>
      </a>

      <a href=\"{{ path('app_objectif_sante_show', { id: objectif_sante.id }) }}\"
         class=\"btn btn-info btn-sm\" title=\"Voir\">
        <i class=\"mdi mdi-eye\"></i>
      </a>

      <a href=\"{{ path('app_objectif_sante_edit', { id: objectif_sante.id }) }}\"
         class=\"btn btn-warning btn-sm\" title=\"Modifier\">
        <i class=\"mdi mdi-pencil\"></i>
      </a>

      <form action=\"{{ path('app_objectif_sante_delete', { id: objectif_sante.id }) }}\"
            method=\"POST\" style=\"display:inline\"
            onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif_sante.id) }}\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
          <i class=\"mdi mdi-delete\"></i>
        </button>
      </form>
    </div>
  </td>
</tr>
{% else %}
<tr>
  <td colspan=\"10\" class=\"text-center text-muted py-4\">Aucun résultat</td>
</tr>
{% endfor %}
", "objectif_sante/_rows.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\objectif_sante\\_rows.html.twig");
    }
}
