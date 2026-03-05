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

/* suivi_bien_etre/_rows.html.twig */
class __TwigTemplate_20aeabbe2113b41a1f4dbf79d225dc91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/_rows.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["suivi"]) {
            // line 2
            yield "<tr>
  <td>
    <strong>";
            // line 4
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "dateSaisie", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "dateSaisie", [], "any", false, false, false, 4), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</strong><br>
    
  </td>

 <td>
  ";
            // line 9
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "humeur", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "    ";
                $context["h"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "humeur", [], "any", false, false, false, 10));
                // line 11
                yield "
    ";
                // line 12
                if (((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 12, $this->source); })()) == "Très mauvaise")) {
                    // line 13
                    yield "      ";
                    $context["icon"] = "emoticon-sad";
                    // line 14
                    yield "      ";
                    $context["label"] = "Très mauvaise";
                    // line 15
                    yield "    ";
                } elseif (((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 15, $this->source); })()) == "Mauvaise")) {
                    // line 16
                    yield "      ";
                    $context["icon"] = "emoticon-neutral";
                    // line 17
                    yield "      ";
                    $context["label"] = "Mauvaise";
                    // line 18
                    yield "    ";
                } elseif (((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 18, $this->source); })()) == "Neutre")) {
                    // line 19
                    yield "      ";
                    $context["icon"] = "emoticon";
                    // line 20
                    yield "      ";
                    $context["label"] = "Neutre";
                    // line 21
                    yield "    ";
                } elseif (((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 21, $this->source); })()) == "Bonne")) {
                    // line 22
                    yield "      ";
                    $context["icon"] = "emoticon-happy";
                    // line 23
                    yield "      ";
                    $context["label"] = "Bonne";
                    // line 24
                    yield "    ";
                } elseif (((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 24, $this->source); })()) == "Excellente")) {
                    // line 25
                    yield "      ";
                    $context["icon"] = "emoticon-excited";
                    // line 26
                    yield "      ";
                    $context["label"] = "Excellente";
                    // line 27
                    yield "    ";
                } else {
                    // line 28
                    yield "      ";
                    $context["icon"] = "help-circle";
                    // line 29
                    yield "      ";
                    $context["label"] = (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 29, $this->source); })());
                    // line 30
                    yield "    ";
                }
                // line 31
                yield "
    <span class=\"mood-badge mood-";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 32, $this->source); })())), [" " => "-"]), "html", null, true);
                yield "\">
      <i class=\"mdi mdi-";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 33, $this->source); })()), "html", null, true);
                yield "\"></i>
      ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 34, $this->source); })()), "html", null, true);
                yield "
    </span>
  ";
            } else {
                // line 37
                yield "    <span class=\"text-muted\">—</span>
  ";
            }
            // line 39
            yield "</td>

  <td>
    ";
            // line 42
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "qualiteSommeil", [], "any", false, false, false, 42))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "      <span class=\"rating-badge rating-";
                yield (((CoreExtension::getAttribute($this->env, $this->source,                 // line 44
$context["suivi"], "qualiteSommeil", [], "any", false, false, false, 44) <= 3)) ? ("0-3") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 45
$context["suivi"], "qualiteSommeil", [], "any", false, false, false, 45) <= 6)) ? ("4-6") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["suivi"], "qualiteSommeil", [], "any", false, false, false, 46) <= 8)) ? ("7-8") : ("9-10"))))));
                // line 48
                yield "\">
        ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "qualiteSommeil", [], "any", false, false, false, 49), "html", null, true);
                yield "
      </span>
    ";
            } else {
                // line 52
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 54
            yield "  </td>

  <td>
    ";
            // line 57
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "niveauEnergie", [], "any", false, false, false, 57))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "      <span class=\"rating-badge rating-";
                yield (((CoreExtension::getAttribute($this->env, $this->source,                 // line 59
$context["suivi"], "niveauEnergie", [], "any", false, false, false, 59) <= 3)) ? ("0-3") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 60
$context["suivi"], "niveauEnergie", [], "any", false, false, false, 60) <= 6)) ? ("4-6") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["suivi"], "niveauEnergie", [], "any", false, false, false, 61) <= 8)) ? ("7-8") : ("9-10"))))));
                // line 63
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "niveauEnergie", [], "any", false, false, false, 63), "html", null, true);
                yield "</span>
    ";
            } else {
                // line 65
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 67
            yield "  </td>

  <td>
    ";
            // line 70
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "niveauStress", [], "any", false, false, false, 70))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "      <span class=\"rating-badge rating-";
                yield (((CoreExtension::getAttribute($this->env, $this->source,                 // line 72
$context["suivi"], "niveauStress", [], "any", false, false, false, 72) >= 7)) ? ("0-3") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 73
$context["suivi"], "niveauStress", [], "any", false, false, false, 73) >= 4)) ? ("4-6") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 74
$context["suivi"], "niveauStress", [], "any", false, false, false, 74) >= 2)) ? ("7-8") : ("9-10"))))));
                // line 76
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "niveauStress", [], "any", false, false, false, 76), "html", null, true);
                yield "</span>
    ";
            } else {
                // line 78
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 80
            yield "  </td>

  <td>
    ";
            // line 83
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "qualiteAlimentation", [], "any", false, false, false, 83))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 84
                yield "      <span class=\"rating-badge rating-";
                yield (((CoreExtension::getAttribute($this->env, $this->source,                 // line 85
$context["suivi"], "qualiteAlimentation", [], "any", false, false, false, 85) <= 3)) ? ("0-3") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 86
$context["suivi"], "qualiteAlimentation", [], "any", false, false, false, 86) <= 6)) ? ("4-6") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 87
$context["suivi"], "qualiteAlimentation", [], "any", false, false, false, 87) <= 8)) ? ("7-8") : ("9-10"))))));
                // line 89
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "qualiteAlimentation", [], "any", false, false, false, 89), "html", null, true);
                yield "</span>
    ";
            } else {
                // line 91
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 93
            yield "  </td>

  <td style=\"max-width:200px;\">
    ";
            // line 96
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "notesLibres", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "      <small class=\"text-muted\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "notesLibres", [], "any", false, false, false, 97), "html", null, true);
                yield "\">
        ";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "notesLibres", [], "any", false, false, false, 98), 0, 50), "html", null, true);
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "notesLibres", [], "any", false, false, false, 98)) > 50)) ? ("...") : (""));
                yield "
      </small>
    ";
            } else {
                // line 101
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 103
            yield "  </td>

  <td>
    ";
            // line 106
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "score", [], "any", false, false, false, 106))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 107
                yield "      ";
                $context["scoreClass"] = (((CoreExtension::getAttribute($this->env, $this->source,                 // line 108
$context["suivi"], "score", [], "any", false, false, false, 108) >= 80)) ? ("badge-score-excellent") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 109
$context["suivi"], "score", [], "any", false, false, false, 109) >= 60)) ? ("badge-score-good") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 110
$context["suivi"], "score", [], "any", false, false, false, 110) >= 40)) ? ("badge-score-medium") : ("badge-score-poor"))))));
                // line 113
                yield "      <span class=\"badge-pill ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreClass"]) || array_key_exists("scoreClass", $context) ? $context["scoreClass"] : (function () { throw new RuntimeError('Variable "scoreClass" does not exist.', 113, $this->source); })()), "html", null, true);
                yield "\">
        <i class=\"mdi mdi-star\"></i> ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "score", [], "any", false, false, false, 114), "html", null, true);
                yield "%
      </span>
      <div class=\"progress-small mt-1\">
        <div class=\"progress-bar\" style=\"width: ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "score", [], "any", false, false, false, 117), "html", null, true);
                yield "%\"></div>
      </div>
    ";
            } else {
                // line 120
                yield "      <span class=\"text-muted\">—</span>
    ";
            }
            // line 122
            yield "  </td>

  <td>
    <div class=\"action-buttons\">
      <a href=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivi_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126), "suiviId" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\"
         class=\"btn btn-warning btn-sm\" title=\"Modifier\">
        <i class=\"mdi mdi-pencil\"></i>
      </a>

      <form action=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivi_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131), "suiviId" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 131)]), "html", null, true);
            yield "\"
            method=\"POST\" style=\"display:inline;\"
            onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce suivi ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_suivi" . CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 134))), "html", null, true);
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
        // line 142
        if (!$context['_iterated']) {
            // line 143
            yield "<tr>
  <td colspan=\"9\" class=\"text-center text-muted py-4\">
    Aucun résultat.
  </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['suivi'], $context['_parent'], $context['_iterated']);
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
        return "suivi_bien_etre/_rows.html.twig";
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
        return array (  337 => 143,  335 => 142,  322 => 134,  316 => 131,  308 => 126,  302 => 122,  298 => 120,  292 => 117,  286 => 114,  281 => 113,  279 => 110,  278 => 109,  277 => 108,  275 => 107,  273 => 106,  268 => 103,  264 => 101,  257 => 98,  252 => 97,  250 => 96,  245 => 93,  241 => 91,  235 => 89,  233 => 87,  232 => 86,  231 => 85,  229 => 84,  227 => 83,  222 => 80,  218 => 78,  212 => 76,  210 => 74,  209 => 73,  208 => 72,  206 => 71,  204 => 70,  199 => 67,  195 => 65,  189 => 63,  187 => 61,  186 => 60,  185 => 59,  183 => 58,  181 => 57,  176 => 54,  172 => 52,  166 => 49,  163 => 48,  161 => 46,  160 => 45,  159 => 44,  157 => 43,  155 => 42,  150 => 39,  146 => 37,  140 => 34,  136 => 33,  132 => 32,  129 => 31,  126 => 30,  123 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  93 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  57 => 4,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for suivi in suivis %}
<tr>
  <td>
    <strong>{{ suivi.dateSaisie ? suivi.dateSaisie|date('d/m/Y') : '—' }}</strong><br>
    
  </td>

 <td>
  {% if suivi.humeur %}
    {% set h = suivi.humeur|trim %}

    {% if h == 'Très mauvaise' %}
      {% set icon = 'emoticon-sad' %}
      {% set label = 'Très mauvaise' %}
    {% elseif h == 'Mauvaise' %}
      {% set icon = 'emoticon-neutral' %}
      {% set label = 'Mauvaise' %}
    {% elseif h == 'Neutre' %}
      {% set icon = 'emoticon' %}
      {% set label = 'Neutre' %}
    {% elseif h == 'Bonne' %}
      {% set icon = 'emoticon-happy' %}
      {% set label = 'Bonne' %}
    {% elseif h == 'Excellente' %}
      {% set icon = 'emoticon-excited' %}
      {% set label = 'Excellente' %}
    {% else %}
      {% set icon = 'help-circle' %}
      {% set label = h %}
    {% endif %}

    <span class=\"mood-badge mood-{{ h|lower|replace({' ':'-'}) }}\">
      <i class=\"mdi mdi-{{ icon }}\"></i>
      {{ label }}
    </span>
  {% else %}
    <span class=\"text-muted\">—</span>
  {% endif %}
</td>

  <td>
    {% if suivi.qualiteSommeil is not null %}
      <span class=\"rating-badge rating-{{
        suivi.qualiteSommeil <= 3 ? '0-3' :
        suivi.qualiteSommeil <= 6 ? '4-6' :
        suivi.qualiteSommeil <= 8 ? '7-8' :
        '9-10'
      }}\">
        {{ suivi.qualiteSommeil }}
      </span>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    {% if suivi.niveauEnergie is not null %}
      <span class=\"rating-badge rating-{{
        suivi.niveauEnergie <= 3 ? '0-3' :
        suivi.niveauEnergie <= 6 ? '4-6' :
        suivi.niveauEnergie <= 8 ? '7-8' :
        '9-10'
      }}\">{{ suivi.niveauEnergie }}</span>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    {% if suivi.niveauStress is not null %}
      <span class=\"rating-badge rating-{{
        suivi.niveauStress >= 7 ? '0-3' :
        suivi.niveauStress >= 4 ? '4-6' :
        suivi.niveauStress >= 2 ? '7-8' :
        '9-10'
      }}\">{{ suivi.niveauStress }}</span>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    {% if suivi.qualiteAlimentation is not null %}
      <span class=\"rating-badge rating-{{
        suivi.qualiteAlimentation <= 3 ? '0-3' :
        suivi.qualiteAlimentation <= 6 ? '4-6' :
        suivi.qualiteAlimentation <= 8 ? '7-8' :
        '9-10'
      }}\">{{ suivi.qualiteAlimentation }}</span>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td style=\"max-width:200px;\">
    {% if suivi.notesLibres %}
      <small class=\"text-muted\" title=\"{{ suivi.notesLibres }}\">
        {{ suivi.notesLibres|slice(0, 50) }}{{ suivi.notesLibres|length > 50 ? '...' : '' }}
      </small>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    {% if suivi.score is not null %}
      {% set scoreClass =
        suivi.score >= 80 ? 'badge-score-excellent' :
        suivi.score >= 60 ? 'badge-score-good' :
        suivi.score >= 40 ? 'badge-score-medium' :
        'badge-score-poor'
      %}
      <span class=\"badge-pill {{ scoreClass }}\">
        <i class=\"mdi mdi-star\"></i> {{ suivi.score }}%
      </span>
      <div class=\"progress-small mt-1\">
        <div class=\"progress-bar\" style=\"width: {{ suivi.score }}%\"></div>
      </div>
    {% else %}
      <span class=\"text-muted\">—</span>
    {% endif %}
  </td>

  <td>
    <div class=\"action-buttons\">
      <a href=\"{{ path('app_objectif_suivi_edit', {id: objectif.id, suiviId: suivi.id}) }}\"
         class=\"btn btn-warning btn-sm\" title=\"Modifier\">
        <i class=\"mdi mdi-pencil\"></i>
      </a>

      <form action=\"{{ path('app_objectif_suivi_delete', {id: objectif.id, suiviId: suivi.id}) }}\"
            method=\"POST\" style=\"display:inline;\"
            onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce suivi ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_suivi' ~ suivi.id) }}\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
          <i class=\"mdi mdi-delete\"></i>
        </button>
      </form>
    </div>
  </td>
</tr>
{% else %}
<tr>
  <td colspan=\"9\" class=\"text-center text-muted py-4\">
    Aucun résultat.
  </td>
</tr>
{% endfor %}
", "suivi_bien_etre/_rows.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\suivi_bien_etre\\_rows.html.twig");
    }
}
