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

/* Front/suivi_bien_etre/_rows.html.twig */
class __TwigTemplate_148212a05c9b35de3d92d88a1a1d0627 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/suivi_bien_etre/_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/suivi_bien_etre/_rows.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 2
            yield "<tr>
  <td>
    <strong>";
            // line 4
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "dateSaisie", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "dateSaisie", [], "any", false, false, false, 4), "d/m/Y"), "html", null, true)) : (""));
            yield "</strong>
    <div style=\"font-size: 12px; color: var(--gray-500);\">
      ";
            // line 6
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "dateSaisie", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "dateSaisie", [], "any", false, false, false, 6), "l"), [], "messages"), "html", null, true)) : (""));
            yield "
    </div>
  </td>

  ";
            // line 11
            yield "  <td>
    ";
            // line 12
            $context["humeur_value"] = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "humeur", [], "any", false, false, false, 12);
            // line 13
            yield "    ";
            $context["humeur_text"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace((isset($context["humeur_value"]) || array_key_exists("humeur_value", $context) ? $context["humeur_value"] : (function () { throw new RuntimeError('Variable "humeur_value" does not exist.', 13, $this->source); })()), ["😄" => "", "😊" => "", "😐" => "", "😔" => "", "😢" => ""]));
            // line 14
            yield "
    ";
            // line 15
            if (((isset($context["humeur_text"]) || array_key_exists("humeur_text", $context) ? $context["humeur_text"] : (function () { throw new RuntimeError('Variable "humeur_text" does not exist.', 15, $this->source); })()) == "Excellente")) {
                // line 16
                yield "      ";
                $context["card_color"] = "#dcfce7";
                // line 17
                yield "      ";
                $context["text_color"] = "#166534";
                // line 18
                yield "    ";
            } elseif (((isset($context["humeur_text"]) || array_key_exists("humeur_text", $context) ? $context["humeur_text"] : (function () { throw new RuntimeError('Variable "humeur_text" does not exist.', 18, $this->source); })()) == "Bonne")) {
                // line 19
                yield "      ";
                $context["card_color"] = "#dbeafe";
                // line 20
                yield "      ";
                $context["text_color"] = "#1e40af";
                // line 21
                yield "    ";
            } elseif (((isset($context["humeur_text"]) || array_key_exists("humeur_text", $context) ? $context["humeur_text"] : (function () { throw new RuntimeError('Variable "humeur_text" does not exist.', 21, $this->source); })()) == "Neutre")) {
                // line 22
                yield "      ";
                $context["card_color"] = "#fef3c7";
                // line 23
                yield "      ";
                $context["text_color"] = "#92400e";
                // line 24
                yield "    ";
            } elseif (((isset($context["humeur_text"]) || array_key_exists("humeur_text", $context) ? $context["humeur_text"] : (function () { throw new RuntimeError('Variable "humeur_text" does not exist.', 24, $this->source); })()) == "Mauvaise")) {
                // line 25
                yield "      ";
                $context["card_color"] = "#fee2e2";
                // line 26
                yield "      ";
                $context["text_color"] = "#991b1b";
                // line 27
                yield "    ";
            } elseif (((isset($context["humeur_text"]) || array_key_exists("humeur_text", $context) ? $context["humeur_text"] : (function () { throw new RuntimeError('Variable "humeur_text" does not exist.', 27, $this->source); })()) == "Très mauvaise")) {
                // line 28
                yield "      ";
                $context["card_color"] = "#fecaca";
                // line 29
                yield "      ";
                $context["text_color"] = "#7f1d1d";
                // line 30
                yield "    ";
            } else {
                // line 31
                yield "      ";
                $context["card_color"] = "#f3f4f6";
                // line 32
                yield "      ";
                $context["text_color"] = "#374151";
                // line 33
                yield "    ";
            }
            // line 34
            yield "
    <div style=\"display:flex;align-items:center;justify-content:center;height:100%;\">
      <div style=\"
        padding: 14px 24px;
        background: ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["card_color"]) || array_key_exists("card_color", $context) ? $context["card_color"] : (function () { throw new RuntimeError('Variable "card_color" does not exist.', 38, $this->source); })()), "html", null, true);
            yield ";
        color: ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text_color"]) || array_key_exists("text_color", $context) ? $context["text_color"] : (function () { throw new RuntimeError('Variable "text_color" does not exist.', 39, $this->source); })()), "html", null, true);
            yield ";
        border-radius: 12px;
        font-weight: 700;
        font-size: 14px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border: 1px solid rgba(255,255,255,0.5);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: transform 0.2s ease;
      \">
        ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["humeur_text"]) || array_key_exists("humeur_text", $context) ? $context["humeur_text"] : (function () { throw new RuntimeError('Variable "humeur_text" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "
      </div>
    </div>
  </td>

  ";
            // line 55
            yield "  <td>
    ";
            // line 56
            $context["sleep_class"] = "";
            // line 57
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qualiteSommeil", [], "any", false, false, false, 57) >= 8)) {
                // line 58
                yield "      ";
                $context["sleep_class"] = "score-excellent";
                // line 59
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qualiteSommeil", [], "any", false, false, false, 59) >= 6)) {
                // line 60
                yield "      ";
                $context["sleep_class"] = "score-good";
                // line 61
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qualiteSommeil", [], "any", false, false, false, 61) >= 4)) {
                // line 62
                yield "      ";
                $context["sleep_class"] = "score-average";
                // line 63
                yield "    ";
            } else {
                // line 64
                yield "      ";
                $context["sleep_class"] = "score-poor";
                // line 65
                yield "    ";
            }
            // line 66
            yield "
    <div class=\"score-indicator ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sleep_class"]) || array_key_exists("sleep_class", $context) ? $context["sleep_class"] : (function () { throw new RuntimeError('Variable "sleep_class" does not exist.', 67, $this->source); })()), "html", null, true);
            yield "\">
      ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qualiteSommeil", [], "any", false, false, false, 68), "html", null, true);
            yield "
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/10</div>
  </td>

  ";
            // line 74
            yield "  <td>
    ";
            // line 75
            $context["energy_class"] = "";
            // line 76
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "niveauEnergie", [], "any", false, false, false, 76) >= 8)) {
                // line 77
                yield "      ";
                $context["energy_class"] = "score-excellent";
                // line 78
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "niveauEnergie", [], "any", false, false, false, 78) >= 6)) {
                // line 79
                yield "      ";
                $context["energy_class"] = "score-good";
                // line 80
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "niveauEnergie", [], "any", false, false, false, 80) >= 4)) {
                // line 81
                yield "      ";
                $context["energy_class"] = "score-average";
                // line 82
                yield "    ";
            } else {
                // line 83
                yield "      ";
                $context["energy_class"] = "score-poor";
                // line 84
                yield "    ";
            }
            // line 85
            yield "
    <div class=\"score-indicator ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["energy_class"]) || array_key_exists("energy_class", $context) ? $context["energy_class"] : (function () { throw new RuntimeError('Variable "energy_class" does not exist.', 86, $this->source); })()), "html", null, true);
            yield "\">
      ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "niveauEnergie", [], "any", false, false, false, 87), "html", null, true);
            yield "
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/10</div>
  </td>

  ";
            // line 93
            yield "  <td>
    ";
            // line 94
            $context["stress_class"] = "";
            // line 95
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "niveauStress", [], "any", false, false, false, 95) <= 3)) {
                // line 96
                yield "      ";
                $context["stress_class"] = "score-excellent";
                // line 97
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "niveauStress", [], "any", false, false, false, 97) <= 5)) {
                // line 98
                yield "      ";
                $context["stress_class"] = "score-good";
                // line 99
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "niveauStress", [], "any", false, false, false, 99) <= 7)) {
                // line 100
                yield "      ";
                $context["stress_class"] = "score-average";
                // line 101
                yield "    ";
            } else {
                // line 102
                yield "      ";
                $context["stress_class"] = "score-poor";
                // line 103
                yield "    ";
            }
            // line 104
            yield "
    <div class=\"score-indicator ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stress_class"]) || array_key_exists("stress_class", $context) ? $context["stress_class"] : (function () { throw new RuntimeError('Variable "stress_class" does not exist.', 105, $this->source); })()), "html", null, true);
            yield "\">
      ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "niveauStress", [], "any", false, false, false, 106), "html", null, true);
            yield "
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/10</div>
  </td>

  ";
            // line 112
            yield "  <td>
    ";
            // line 113
            $context["food_class"] = "";
            // line 114
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qualiteAlimentation", [], "any", false, false, false, 114) >= 8)) {
                // line 115
                yield "      ";
                $context["food_class"] = "score-excellent";
                // line 116
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qualiteAlimentation", [], "any", false, false, false, 116) >= 6)) {
                // line 117
                yield "      ";
                $context["food_class"] = "score-good";
                // line 118
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qualiteAlimentation", [], "any", false, false, false, 118) >= 4)) {
                // line 119
                yield "      ";
                $context["food_class"] = "score-average";
                // line 120
                yield "    ";
            } else {
                // line 121
                yield "      ";
                $context["food_class"] = "score-poor";
                // line 122
                yield "    ";
            }
            // line 123
            yield "
    <div class=\"score-indicator ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["food_class"]) || array_key_exists("food_class", $context) ? $context["food_class"] : (function () { throw new RuntimeError('Variable "food_class" does not exist.', 124, $this->source); })()), "html", null, true);
            yield "\">
      ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qualiteAlimentation", [], "any", false, false, false, 125), "html", null, true);
            yield "
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/10</div>
  </td>

  ";
            // line 131
            yield "  <td>
    ";
            // line 132
            $context["overall_class"] = "";
            // line 133
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "score", [], "any", false, false, false, 133) >= 80)) {
                // line 134
                yield "      ";
                $context["overall_class"] = "score-excellent";
                // line 135
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "score", [], "any", false, false, false, 135) >= 60)) {
                // line 136
                yield "      ";
                $context["overall_class"] = "score-good";
                // line 137
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "score", [], "any", false, false, false, 137) >= 40)) {
                // line 138
                yield "      ";
                $context["overall_class"] = "score-average";
                // line 139
                yield "    ";
            } else {
                // line 140
                yield "      ";
                $context["overall_class"] = "score-poor";
                // line 141
                yield "    ";
            }
            // line 142
            yield "
    <div class=\"score-indicator ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overall_class"]) || array_key_exists("overall_class", $context) ? $context["overall_class"] : (function () { throw new RuntimeError('Variable "overall_class" does not exist.', 143, $this->source); })()), "html", null, true);
            yield "\" style=\"width:48px;height:48px;font-size:16px;\">
      ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "score", [], "any", false, false, false, 144), "html", null, true);
            yield "
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/100</div>
  </td>
</tr>
";
            $context['_iterated'] = true;
        }
        // line 149
        if (!$context['_iterated']) {
            // line 150
            yield "<tr>
  <td colspan=\"7\" style=\"text-align:center; padding:24px; color:#6b7280;\">
    Aucun résultat.
  </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['_iterated']);
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
        return "Front/suivi_bien_etre/_rows.html.twig";
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
        return array (  406 => 150,  404 => 149,  394 => 144,  390 => 143,  387 => 142,  384 => 141,  381 => 140,  378 => 139,  375 => 138,  372 => 137,  369 => 136,  366 => 135,  363 => 134,  360 => 133,  358 => 132,  355 => 131,  347 => 125,  343 => 124,  340 => 123,  337 => 122,  334 => 121,  331 => 120,  328 => 119,  325 => 118,  322 => 117,  319 => 116,  316 => 115,  313 => 114,  311 => 113,  308 => 112,  300 => 106,  296 => 105,  293 => 104,  290 => 103,  287 => 102,  284 => 101,  281 => 100,  278 => 99,  275 => 98,  272 => 97,  269 => 96,  266 => 95,  264 => 94,  261 => 93,  253 => 87,  249 => 86,  246 => 85,  243 => 84,  240 => 83,  237 => 82,  234 => 81,  231 => 80,  228 => 79,  225 => 78,  222 => 77,  219 => 76,  217 => 75,  214 => 74,  206 => 68,  202 => 67,  199 => 66,  196 => 65,  193 => 64,  190 => 63,  187 => 62,  184 => 61,  181 => 60,  178 => 59,  175 => 58,  172 => 57,  170 => 56,  167 => 55,  159 => 49,  146 => 39,  142 => 38,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  118 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  80 => 15,  77 => 14,  74 => 13,  72 => 12,  69 => 11,  62 => 6,  57 => 4,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for s in suivis %}
<tr>
  <td>
    <strong>{{ s.dateSaisie ? s.dateSaisie|date('d/m/Y') : '' }}</strong>
    <div style=\"font-size: 12px; color: var(--gray-500);\">
      {{ s.dateSaisie ? s.dateSaisie|date('l')|trans({}, 'messages') : '' }}
    </div>
  </td>

  {# ✅ HUMEUR (نفس الكود ديالك) #}
  <td>
    {% set humeur_value = s.humeur %}
    {% set humeur_text = humeur_value|replace({'😄': '', '😊': '', '😐': '', '😔': '', '😢': ''})|trim %}

    {% if humeur_text == 'Excellente' %}
      {% set card_color = '#dcfce7' %}
      {% set text_color = '#166534' %}
    {% elseif humeur_text == 'Bonne' %}
      {% set card_color = '#dbeafe' %}
      {% set text_color = '#1e40af' %}
    {% elseif humeur_text == 'Neutre' %}
      {% set card_color = '#fef3c7' %}
      {% set text_color = '#92400e' %}
    {% elseif humeur_text == 'Mauvaise' %}
      {% set card_color = '#fee2e2' %}
      {% set text_color = '#991b1b' %}
    {% elseif humeur_text == 'Très mauvaise' %}
      {% set card_color = '#fecaca' %}
      {% set text_color = '#7f1d1d' %}
    {% else %}
      {% set card_color = '#f3f4f6' %}
      {% set text_color = '#374151' %}
    {% endif %}

    <div style=\"display:flex;align-items:center;justify-content:center;height:100%;\">
      <div style=\"
        padding: 14px 24px;
        background: {{ card_color }};
        color: {{ text_color }};
        border-radius: 12px;
        font-weight: 700;
        font-size: 14px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border: 1px solid rgba(255,255,255,0.5);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: transform 0.2s ease;
      \">
        {{ humeur_text }}
      </div>
    </div>
  </td>

  {# ✅ SOMMEIL #}
  <td>
    {% set sleep_class = '' %}
    {% if s.qualiteSommeil >= 8 %}
      {% set sleep_class = 'score-excellent' %}
    {% elseif s.qualiteSommeil >= 6 %}
      {% set sleep_class = 'score-good' %}
    {% elseif s.qualiteSommeil >= 4 %}
      {% set sleep_class = 'score-average' %}
    {% else %}
      {% set sleep_class = 'score-poor' %}
    {% endif %}

    <div class=\"score-indicator {{ sleep_class }}\">
      {{ s.qualiteSommeil }}
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/10</div>
  </td>

  {# ✅ ENERGIE #}
  <td>
    {% set energy_class = '' %}
    {% if s.niveauEnergie >= 8 %}
      {% set energy_class = 'score-excellent' %}
    {% elseif s.niveauEnergie >= 6 %}
      {% set energy_class = 'score-good' %}
    {% elseif s.niveauEnergie >= 4 %}
      {% set energy_class = 'score-average' %}
    {% else %}
      {% set energy_class = 'score-poor' %}
    {% endif %}

    <div class=\"score-indicator {{ energy_class }}\">
      {{ s.niveauEnergie }}
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/10</div>
  </td>

  {# ✅ STRESS (عندك inverse) #}
  <td>
    {% set stress_class = '' %}
    {% if s.niveauStress <= 3 %}
      {% set stress_class = 'score-excellent' %}
    {% elseif s.niveauStress <= 5 %}
      {% set stress_class = 'score-good' %}
    {% elseif s.niveauStress <= 7 %}
      {% set stress_class = 'score-average' %}
    {% else %}
      {% set stress_class = 'score-poor' %}
    {% endif %}

    <div class=\"score-indicator {{ stress_class }}\">
      {{ s.niveauStress }}
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/10</div>
  </td>

  {# ✅ ALIMENTATION #}
  <td>
    {% set food_class = '' %}
    {% if s.qualiteAlimentation >= 8 %}
      {% set food_class = 'score-excellent' %}
    {% elseif s.qualiteAlimentation >= 6 %}
      {% set food_class = 'score-good' %}
    {% elseif s.qualiteAlimentation >= 4 %}
      {% set food_class = 'score-average' %}
    {% else %}
      {% set food_class = 'score-poor' %}
    {% endif %}

    <div class=\"score-indicator {{ food_class }}\">
      {{ s.qualiteAlimentation }}
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/10</div>
  </td>

  {# ✅ SCORE /100 #}
  <td>
    {% set overall_class = '' %}
    {% if s.score >= 80 %}
      {% set overall_class = 'score-excellent' %}
    {% elseif s.score >= 60 %}
      {% set overall_class = 'score-good' %}
    {% elseif s.score >= 40 %}
      {% set overall_class = 'score-average' %}
    {% else %}
      {% set overall_class = 'score-poor' %}
    {% endif %}

    <div class=\"score-indicator {{ overall_class }}\" style=\"width:48px;height:48px;font-size:16px;\">
      {{ s.score }}
    </div>
    <div style=\"margin-top:4px;font-size:12px;color:var(--gray-500);\">/100</div>
  </td>
</tr>
{% else %}
<tr>
  <td colspan=\"7\" style=\"text-align:center; padding:24px; color:#6b7280;\">
    Aucun résultat.
  </td>
</tr>
{% endfor %}
", "Front/suivi_bien_etre/_rows.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\suivi_bien_etre\\_rows.html.twig");
    }
}
