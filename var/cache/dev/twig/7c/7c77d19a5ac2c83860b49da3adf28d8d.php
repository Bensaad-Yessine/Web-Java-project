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

/* preference_alerte/_rows.html.twig */
class __TwigTemplate_0622c4c931d574c5e9a4bcd31bab4229 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/_rows.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["preference_alerte"]) {
            // line 3
            yield "<tr>
    <td>";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "id", [], "any", false, false, false, 4), "html", null, true);
            yield "</td>
    <td>
        <strong>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "titre", [], "any", false, false, false, 6), "html", null, true);
            yield "</strong>
    </td>
    <td>
        <div class=\"d-flex align-items-center\">
            <div class=\"avatar-container\">
                ";
            // line 11
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 12
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 12), "profilePic", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 13
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 13), "profilePic", [], "any", false, false, false, 13))), "html", null, true);
                    yield "\" 
                             alt=\"";
                    // line 14
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 14), "prenom", [], "any", false, false, false, 14), "html", null, true);
                    yield "\" 
                             class=\"user-avatar-img me-2\">
                    ";
                } else {
                    // line 17
                    yield "                        <div class=\"user-avatar me-2\">
                            ";
                    // line 18
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 18), "prenom", [], "any", false, false, false, 18))), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18))), "html", null, true);
                    yield "
                        </div>
                    ";
                }
                // line 21
                yield "                    <span>
                        ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
                yield "
                        <br>
                        <small class=\"text-muted\">ID: ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "etudiant", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
                yield "</small>
                    </span>
                ";
            } else {
                // line 27
                yield "                    <span class=\"text-muted\">Non assigné</span>
                ";
            }
            // line 29
            yield "            </div>
        </div>
    </td>
    <td>";
            // line 32
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "dateCreation", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "dateCreation", [], "any", false, false, false, 32), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
    <td>
        ";
            // line 34
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "isActive", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "            <span class=\"badge badge-success\">
                <i class=\"mdi mdi-check-circle me-1\"></i>Active
            </span>
        ";
            } else {
                // line 39
                yield "            <span class=\"badge badge-secondary\">
                <i class=\"mdi mdi-close-circle me-1\"></i>Inactive
            </span>
        ";
            }
            // line 43
            yield "    </td>
    <td>
        ";
            // line 45
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "isDefault", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "            <span class=\"badge badge-primary\">
                <i class=\"mdi mdi-star me-1\"></i>Défaut
            </span>
        ";
            } else {
                // line 50
                yield "            <span class=\"badge badge-secondary\">
                <i class=\"mdi mdi-star-outline me-1\"></i>Non défaut
            </span>
        ";
            }
            // line 54
            yield "    </td>
    <td>
        <div class=\"action-buttons\">
            <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" 
               class=\"btn-icon btn-info\" 
               title=\"Voir\">
                <i class=\"mdi mdi-eye\"></i>
            </a>
            <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" 
               class=\"btn-icon btn-warning\" 
               title=\"Modifier\">
                <i class=\"mdi mdi-pencil\"></i>
            </a>
            <button type=\"button\" 
                    class=\"btn-icon btn-danger\" 
                    title=\"Supprimer\"
                    onclick=\"openDeleteModal(";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "id", [], "any", false, false, false, 70), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preference_alerte"], "titre", [], "any", false, false, false, 70), "js"), "html", null, true);
            yield "')\">
                <i class=\"mdi mdi-delete\"></i>
            </button>
        </div>
    </td>
</tr>
";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "<tr>
    <td colspan=\"7\" class=\"text-center py-5\">
        <div class=\"empty-state\">
            <i class=\"mdi mdi-bell-off-outline\"></i>
            <h4 class=\"mt-3 mb-2\">Aucune préférence d'alerte trouvée</h4>
            <p class=\"text-muted mb-4\">Commencez par créer votre première préférence d'alerte</p>
            <a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_new");
            yield "\" class=\"btn btn-gradient-primary\">
                <i class=\"mdi mdi-plus-circle me-2\"></i>Créer une préférence
            </a>
        </div>
    </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['preference_alerte'], $context['_parent'], $context['_iterated']);
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
        return "preference_alerte/_rows.html.twig";
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
        return array (  204 => 83,  196 => 77,  194 => 76,  181 => 70,  170 => 62,  162 => 57,  157 => 54,  151 => 50,  145 => 46,  143 => 45,  139 => 43,  133 => 39,  127 => 35,  125 => 34,  120 => 32,  115 => 29,  111 => 27,  105 => 24,  98 => 22,  95 => 21,  88 => 18,  85 => 17,  79 => 14,  74 => 13,  71 => 12,  69 => 11,  61 => 6,  56 => 4,  53 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# preference_alerte/_rows.html.twig #}
{% for preference_alerte in preference_alertes %}
<tr>
    <td>{{ preference_alerte.id }}</td>
    <td>
        <strong>{{ preference_alerte.titre }}</strong>
    </td>
    <td>
        <div class=\"d-flex align-items-center\">
            <div class=\"avatar-container\">
                {% if preference_alerte.etudiant %}
                    {% if preference_alerte.etudiant.profilePic %}
                        <img src=\"{{ asset('uploads/profile_pics/' ~ preference_alerte.etudiant.profilePic) }}\" 
                             alt=\"{{ preference_alerte.etudiant.prenom }}\" 
                             class=\"user-avatar-img me-2\">
                    {% else %}
                        <div class=\"user-avatar me-2\">
                            {{ preference_alerte.etudiant.prenom|first|upper }}{{ preference_alerte.etudiant.nom|first|upper }}
                        </div>
                    {% endif %}
                    <span>
                        {{ preference_alerte.etudiant.prenom }} {{ preference_alerte.etudiant.nom }}
                        <br>
                        <small class=\"text-muted\">ID: {{ preference_alerte.etudiant.id }}</small>
                    </span>
                {% else %}
                    <span class=\"text-muted\">Non assigné</span>
                {% endif %}
            </div>
        </div>
    </td>
    <td>{{ preference_alerte.dateCreation ? preference_alerte.dateCreation|date('d/m/Y H:i') : '-' }}</td>
    <td>
        {% if preference_alerte.isActive %}
            <span class=\"badge badge-success\">
                <i class=\"mdi mdi-check-circle me-1\"></i>Active
            </span>
        {% else %}
            <span class=\"badge badge-secondary\">
                <i class=\"mdi mdi-close-circle me-1\"></i>Inactive
            </span>
        {% endif %}
    </td>
    <td>
        {% if preference_alerte.isDefault %}
            <span class=\"badge badge-primary\">
                <i class=\"mdi mdi-star me-1\"></i>Défaut
            </span>
        {% else %}
            <span class=\"badge badge-secondary\">
                <i class=\"mdi mdi-star-outline me-1\"></i>Non défaut
            </span>
        {% endif %}
    </td>
    <td>
        <div class=\"action-buttons\">
            <a href=\"{{ path('app_preference_alerte_show', {'id': preference_alerte.id}) }}\" 
               class=\"btn-icon btn-info\" 
               title=\"Voir\">
                <i class=\"mdi mdi-eye\"></i>
            </a>
            <a href=\"{{ path('app_preference_alerte_edit', {'id': preference_alerte.id}) }}\" 
               class=\"btn-icon btn-warning\" 
               title=\"Modifier\">
                <i class=\"mdi mdi-pencil\"></i>
            </a>
            <button type=\"button\" 
                    class=\"btn-icon btn-danger\" 
                    title=\"Supprimer\"
                    onclick=\"openDeleteModal({{ preference_alerte.id }}, '{{ preference_alerte.titre|e('js') }}')\">
                <i class=\"mdi mdi-delete\"></i>
            </button>
        </div>
    </td>
</tr>
{% else %}
<tr>
    <td colspan=\"7\" class=\"text-center py-5\">
        <div class=\"empty-state\">
            <i class=\"mdi mdi-bell-off-outline\"></i>
            <h4 class=\"mt-3 mb-2\">Aucune préférence d'alerte trouvée</h4>
            <p class=\"text-muted mb-4\">Commencez par créer votre première préférence d'alerte</p>
            <a href=\"{{ path('app_preference_alerte_new') }}\" class=\"btn btn-gradient-primary\">
                <i class=\"mdi mdi-plus-circle me-2\"></i>Créer une préférence
            </a>
        </div>
    </td>
</tr>
{% endfor %}", "preference_alerte/_rows.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\preference_alerte\\_rows.html.twig");
    }
}
