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

/* Front/objectif_sante/_rows.html.twig */
class __TwigTemplate_9d9c643a575721c02a22d7f0ab856262 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/objectif_sante/_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/objectif_sante/_rows.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objectif_sante"]) {
            // line 2
            yield "<tr>
    <td style=\"font-weight: 600; color: var(--gray-800);\">
        ";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "titre", [], "any", false, false, false, 4), "html", null, true);
            yield "
    </td>
    <td>
        <span class=\"badge badge-primary\">
            ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "type", [], "any", false, false, false, 8), "html", null, true);
            yield "
        </span>
    </td>
   <td>
    ";
            // line 12
            $context["p"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "priorite", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "priorite", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "priorite", [], "any", false, false, false, 12)) : ("")));
            // line 13
            yield "    ";
            if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 13, $this->source); })()) == "haute")) {
                // line 14
                yield "        <span class=\"badge badge-danger\">Haute</span>
    ";
            } elseif ((            // line 15
(isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 15, $this->source); })()) == "moyenne")) {
                // line 16
                yield "        <span class=\"badge badge-warning\">Moyenne</span>
    ";
            } elseif ((            // line 17
(isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 17, $this->source); })()) == "basse")) {
                // line 18
                yield "        <span class=\"badge badge-success\">Basse</span>
    ";
            } else {
                // line 20
                yield "        <span class=\"badge badge-warning\">";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "priorite", [], "any", false, false, false, 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "priorite", [], "any", false, false, false, 20), "html", null, true)) : ("—"));
                yield "</span>
    ";
            }
            // line 22
            yield "</td>

    <td style=\"font-weight: 500;\">
        ";
            // line 25
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "dateDebut", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "dateDebut", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true)) : (""));
            yield "
    </td>
    <td style=\"font-weight: 500;\">
        ";
            // line 28
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "dateFin", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "dateFin", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true)) : (""));
            yield "
    </td>
   <td>
    ";
            // line 31
            $context["s"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "statut", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "statut", [], "any", false, false, false, 31)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "statut", [], "any", false, false, false, 31)) : (""))), [" " => "_"]);
            // line 32
            yield "
    ";
            // line 33
            if (((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 33, $this->source); })()) == "en_cours")) {
                // line 34
                yield "        <span class=\"badge\"
              style=\"background: linear-gradient(135deg, var(--blue-100) 0%, var(--blue-50) 100%);
                     color: var(--blue-700);
                     border-color: var(--blue-200);\">
            En cours
        </span>

    ";
            } elseif (CoreExtension::inFilter(            // line 41
(isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 41, $this->source); })()), ["termine", "terminé"])) {
                // line 42
                yield "        <span class=\"badge\"
              style=\"background: linear-gradient(135deg, var(--green-100) 0%, var(--green-50) 100%);
                     color: var(--green-700);
                     border-color: var(--green-200);\">
            Terminé
        </span>

    ";
            } elseif ((            // line 49
(isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 49, $this->source); })()) == "abandonne")) {
                // line 50
                yield "        <span class=\"badge\"
              style=\"background: linear-gradient(135deg, var(--gray-100) 0%, var(--gray-50) 100%);
                     color: var(--gray-700);
                     border-color: var(--gray-200);\">
            Abandonné
        </span>

    ";
            } else {
                // line 58
                yield "        <span class=\"badge badge-warning\">
            ";
                // line 59
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "statut", [], "any", false, false, false, 59)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "statut", [], "any", false, false, false, 59), "html", null, true)) : ("—"));
                yield "
        </span>
    ";
            }
            // line 62
            yield "</td>
    <td>
        <div class=\"action-buttons\">
            <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" 
               class=\"btn-icon btn-edit\" 
               title=\"Voir détails\">
                👁️
            </a>
            <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_suivis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\"
   class=\"btn-icon btn-edit\"
   title=\"Suivis\">
   📈
</a> 
            <a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" 
               class=\"btn-icon btn-edit\" 
               title=\"Modifier\">
                ✏️
            </a>
            <form method=\"post\" action=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" 
                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ?');\" 
                  style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["objectif_sante"], "id", [], "any", false, false, false, 83))), "html", null, true);
            yield "\">
                <button type=\"submit\" class=\"btn-icon btn-delete\" title=\"Supprimer\">
                    🗑️
                </button>
            </form>
        </div>
    </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['objectif_sante'], $context['_parent']);
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
        return "Front/objectif_sante/_rows.html.twig";
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
        return array (  195 => 83,  189 => 80,  181 => 75,  173 => 70,  165 => 65,  160 => 62,  154 => 59,  151 => 58,  141 => 50,  139 => 49,  130 => 42,  128 => 41,  119 => 34,  117 => 33,  114 => 32,  112 => 31,  106 => 28,  100 => 25,  95 => 22,  89 => 20,  85 => 18,  83 => 17,  80 => 16,  78 => 15,  75 => 14,  72 => 13,  70 => 12,  63 => 8,  56 => 4,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for objectif_sante in objectif_santes %}
<tr>
    <td style=\"font-weight: 600; color: var(--gray-800);\">
        {{ objectif_sante.titre }}
    </td>
    <td>
        <span class=\"badge badge-primary\">
            {{ objectif_sante.type }}
        </span>
    </td>
   <td>
    {% set p = (objectif_sante.priorite ?? '')|lower %}
    {% if p == 'haute' %}
        <span class=\"badge badge-danger\">Haute</span>
    {% elseif p == 'moyenne' %}
        <span class=\"badge badge-warning\">Moyenne</span>
    {% elseif p == 'basse' %}
        <span class=\"badge badge-success\">Basse</span>
    {% else %}
        <span class=\"badge badge-warning\">{{ objectif_sante.priorite ?: '—' }}</span>
    {% endif %}
</td>

    <td style=\"font-weight: 500;\">
        {{ objectif_sante.dateDebut ? objectif_sante.dateDebut|date('d/m/Y') : '' }}
    </td>
    <td style=\"font-weight: 500;\">
        {{ objectif_sante.dateFin ? objectif_sante.dateFin|date('d/m/Y') : '' }}
    </td>
   <td>
    {% set s = (objectif_sante.statut ?? '')|lower|replace({' ': '_'}) %}

    {% if s == 'en_cours' %}
        <span class=\"badge\"
              style=\"background: linear-gradient(135deg, var(--blue-100) 0%, var(--blue-50) 100%);
                     color: var(--blue-700);
                     border-color: var(--blue-200);\">
            En cours
        </span>

    {% elseif s in ['termine', 'terminé'] %}
        <span class=\"badge\"
              style=\"background: linear-gradient(135deg, var(--green-100) 0%, var(--green-50) 100%);
                     color: var(--green-700);
                     border-color: var(--green-200);\">
            Terminé
        </span>

    {% elseif s == 'abandonne' %}
        <span class=\"badge\"
              style=\"background: linear-gradient(135deg, var(--gray-100) 0%, var(--gray-50) 100%);
                     color: var(--gray-700);
                     border-color: var(--gray-200);\">
            Abandonné
        </span>

    {% else %}
        <span class=\"badge badge-warning\">
            {{ objectif_sante.statut ?: '—' }}
        </span>
    {% endif %}
</td>
    <td>
        <div class=\"action-buttons\">
            <a href=\"{{ path('front_objectif_sante_show', {'id': objectif_sante.id}) }}\" 
               class=\"btn-icon btn-edit\" 
               title=\"Voir détails\">
                👁️
            </a>
            <a href=\"{{ path('front_objectif_suivis', {'id': objectif_sante.id}) }}\"
   class=\"btn-icon btn-edit\"
   title=\"Suivis\">
   📈
</a> 
            <a href=\"{{ path('front_objectif_sante_edit', {'id': objectif_sante.id}) }}\" 
               class=\"btn-icon btn-edit\" 
               title=\"Modifier\">
                ✏️
            </a>
            <form method=\"post\" action=\"{{ path('front_objectif_sante_delete', {'id': objectif_sante.id}) }}\" 
                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ?');\" 
                  style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif_sante.id) }}\">
                <button type=\"submit\" class=\"btn-icon btn-delete\" title=\"Supprimer\">
                    🗑️
                </button>
            </form>
        </div>
    </td>
</tr>
{% endfor %}", "Front/objectif_sante/_rows.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\objectif_sante\\_rows.html.twig");
    }
}
