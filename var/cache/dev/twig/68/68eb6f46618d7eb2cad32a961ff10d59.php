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

/* classe/suggestions.html.twig */
class __TwigTemplate_4c8c7e4092a26d813aa6c502bd2d5424 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/suggestions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/suggestions.html.twig"));

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

        yield "Suggestions de Matières - ";
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
            <h1 class=\"h3 mb-0\">🤖 Suggestions de Programme</h1>
            <p class=\"text-muted mb-0\">Matières recommandées pour <strong>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield "</strong> (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 10, $this->source); })()), "niveau", [], "any", false, false, false, 10), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 10, $this->source); })()), "filiere", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 10, $this->source); })()), "filiere", [], "any", false, false, false, 10), "html", null, true);
        }
        yield ")</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">← Retour</a>
    </div>

    ";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "    <div class=\"alert alert-info\">
        <strong>ℹ️ Aucune suggestion disponible.</strong> Il n'y a pas d'autres matières associées à des classes de même niveau ou filière.
    </div>
    ";
        } else {
            // line 20
            yield "    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white\">
            <strong>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 22, $this->source); })())), "html", null, true);
            yield " matière(s) suggérée(s)</strong>
            <small class=\"text-muted ms-2\">Basé sur le niveau \"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 23, $this->source); })()), "niveau", [], "any", false, false, false, 23), "html", null, true);
            yield "\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 23, $this->source); })()), "filiere", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " et la filière \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 23, $this->source); })()), "filiere", [], "any", false, false, false, 23), "html", null, true);
                yield "\"";
            }
            yield "</small>
        </div>
        <form method=\"POST\" action=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_suggestions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("suggestions" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))), "html", null, true);
            yield "\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th><input type=\"checkbox\" id=\"selectAll\" class=\"form-check-input\"> Tout</th>
                            <th>Matière</th>
                            <th class=\"text-center\">Complexité</th>
                            <th class=\"text-center\">Charge (h)</th>
                            <th class=\"text-center\">Coef.</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 41
                yield "                        <tr>
                            <td>
                                <input type=\"checkbox\" name=\"selected_matieres[]\" value=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "id", [], "any", false, false, false, 43), "html", null, true);
                yield "\" class=\"form-check-input suggestion-check\">
                            </td>
                            <td class=\"fw-semibold\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                            <td class=\"text-center\">
                                <span class=\"badge ";
                // line 47
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "scorecomplexite", [], "any", false, false, false, 47) >= 7)) {
                    yield "bg-danger";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "scorecomplexite", [], "any", false, false, false, 47) >= 4)) {
                    yield "bg-warning text-dark";
                } else {
                    yield "bg-success";
                }
                yield "\">
                                    ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "scorecomplexite", [], "any", false, false, false, 48), "html", null, true);
                yield "/10
                                </span>
                            </td>
                            <td class=\"text-center\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "chargehoraire", [], "any", false, false, false, 51), "html", null, true);
                yield "h</td>
                            <td class=\"text-center\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "coefficient", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                            <td class=\"text-muted small\">
                                ";
                // line 54
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 54))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 55), 0, 60) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 55)) > 60)) ? ("…") : (""))), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 57
                    yield "                                    —
                                ";
                }
                // line 59
                yield "                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['matiere'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                    </tbody>
                </table>
            </div>
            <div class=\"card-footer bg-white d-flex justify-content-between\">
                <span class=\"text-muted small\">Sélectionnez les matières à ajouter à la classe</span>
                <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                    ✅ Ajouter les matières sélectionnées
                </button>
            </div>
        </form>
    </div>
    ";
        }
        // line 74
        yield "</div>

<script>
document.getElementById('selectAll')?.addEventListener('change', function() {
    document.querySelectorAll('.suggestion-check').forEach(cb => cb.checked = this.checked);
});
</script>
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
        return "classe/suggestions.html.twig";
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
        return array (  249 => 74,  235 => 62,  227 => 59,  223 => 57,  217 => 55,  215 => 54,  210 => 52,  206 => 51,  200 => 48,  190 => 47,  185 => 45,  180 => 43,  176 => 41,  172 => 40,  155 => 26,  151 => 25,  140 => 23,  136 => 22,  132 => 20,  126 => 16,  124 => 15,  118 => 12,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'classe/base.html.twig' %}

{% block title %}Suggestions de Matières - {{ classe.nom }}{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0\">🤖 Suggestions de Programme</h1>
            <p class=\"text-muted mb-0\">Matières recommandées pour <strong>{{ classe.nom }}</strong> ({{ classe.niveau }}{% if classe.filiere %} — {{ classe.filiere }}{% endif %})</p>
        </div>
        <a href=\"{{ path('app_classe_show', {id: classe.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">← Retour</a>
    </div>

    {% if suggestions is empty %}
    <div class=\"alert alert-info\">
        <strong>ℹ️ Aucune suggestion disponible.</strong> Il n'y a pas d'autres matières associées à des classes de même niveau ou filière.
    </div>
    {% else %}
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white\">
            <strong>{{ suggestions|length }} matière(s) suggérée(s)</strong>
            <small class=\"text-muted ms-2\">Basé sur le niveau \"{{ classe.niveau }}\"{% if classe.filiere %} et la filière \"{{ classe.filiere }}\"{% endif %}</small>
        </div>
        <form method=\"POST\" action=\"{{ path('app_classe_suggestions', {id: classe.id}) }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('suggestions' ~ classe.id) }}\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th><input type=\"checkbox\" id=\"selectAll\" class=\"form-check-input\"> Tout</th>
                            <th>Matière</th>
                            <th class=\"text-center\">Complexité</th>
                            <th class=\"text-center\">Charge (h)</th>
                            <th class=\"text-center\">Coef.</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for matiere in suggestions %}
                        <tr>
                            <td>
                                <input type=\"checkbox\" name=\"selected_matieres[]\" value=\"{{ matiere.id }}\" class=\"form-check-input suggestion-check\">
                            </td>
                            <td class=\"fw-semibold\">{{ matiere.nom }}</td>
                            <td class=\"text-center\">
                                <span class=\"badge {% if matiere.scorecomplexite >= 7 %}bg-danger{% elseif matiere.scorecomplexite >= 4 %}bg-warning text-dark{% else %}bg-success{% endif %}\">
                                    {{ matiere.scorecomplexite }}/10
                                </span>
                            </td>
                            <td class=\"text-center\">{{ matiere.chargehoraire }}h</td>
                            <td class=\"text-center\">{{ matiere.coefficient }}</td>
                            <td class=\"text-muted small\">
                                {% if matiere.description is not empty %}
                                    {{ matiere.description|slice(0, 60) ~ (matiere.description|length > 60 ? '…' : '') }}
                                {% else %}
                                    —
                                {% endif %}
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"card-footer bg-white d-flex justify-content-between\">
                <span class=\"text-muted small\">Sélectionnez les matières à ajouter à la classe</span>
                <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                    ✅ Ajouter les matières sélectionnées
                </button>
            </div>
        </form>
    </div>
    {% endif %}
</div>

<script>
document.getElementById('selectAll')?.addEventListener('change', function() {
    document.querySelectorAll('.suggestion-check').forEach(cb => cb.checked = this.checked);
});
</script>
{% endblock %}
", "classe/suggestions.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\suggestions.html.twig");
    }
}
