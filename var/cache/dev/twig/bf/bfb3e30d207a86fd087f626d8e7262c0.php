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

/* proposition_reunion/list.html.twig */
class __TwigTemplate_260bec0fe5234afc5fd206906912d469 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/list.html.twig"));

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

        yield "Liste des Propositions de Réunion";
        
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
        yield "    <h1>Propositions de Réunion</h1>

    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proposition_reunion_new");
        yield "\" class=\"btn btn-success mb-3\">Ajouter une Proposition</a>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Date</th>
                <th>Heure Début</th>
                <th>Heure Fin</th>
                <th>Lieu</th>
                <th>Description</th>
                <th>Status</th>
                <th>Votes Acceptés</th>
                <th>Groupe</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["propositions"]) || array_key_exists("propositions", $context) ? $context["propositions"] : (function () { throw new RuntimeError('Variable "propositions" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
            // line 27
            yield "                <tr>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "titre", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "dateReunion", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "heureDebut", [], "any", false, false, false, 31), "H:i"), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "heureFin", [], "any", false, false, false, 32), "H:i"), "html", null, true);
            yield "</td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "lieu", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                    <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "status", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "nbrVoteAccept", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                    <td>";
            // line 37
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "idGroupe", [], "any", false, true, false, 37), "nomProjet", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "idGroupe", [], "any", false, false, false, 37), "nomProjet", [], "any", false, false, false, 37)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["prop"], "idGroupe", [], "any", false, false, false, 37), "nomProjet", [], "any", false, false, false, 37), "html", null, true)) : ("N/A"));
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 39
        if (!$context['_iterated']) {
            // line 40
            yield "                <tr>
                    <td colspan=\"10\">Aucune proposition trouvée.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prop'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </tbody>
    </table>
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
        return "proposition_reunion/list.html.twig";
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
        return array (  187 => 44,  178 => 40,  176 => 39,  169 => 37,  165 => 36,  161 => 35,  157 => 34,  153 => 33,  149 => 32,  145 => 31,  141 => 30,  137 => 29,  133 => 28,  130 => 27,  125 => 26,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Propositions de Réunion{% endblock %}

{% block body %}
    <h1>Propositions de Réunion</h1>

    <a href=\"{{ path('proposition_reunion_new') }}\" class=\"btn btn-success mb-3\">Ajouter une Proposition</a>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Date</th>
                <th>Heure Début</th>
                <th>Heure Fin</th>
                <th>Lieu</th>
                <th>Description</th>
                <th>Status</th>
                <th>Votes Acceptés</th>
                <th>Groupe</th>
            </tr>
        </thead>
        <tbody>
            {% for prop in propositions %}
                <tr>
                    <td>{{ prop.id }}</td>
                    <td>{{ prop.titre }}</td>
                    <td>{{ prop.dateReunion|date('d/m/Y') }}</td>
                    <td>{{ prop.heureDebut|date('H:i') }}</td>
                    <td>{{ prop.heureFin|date('H:i') }}</td>
                    <td>{{ prop.lieu }}</td>
                    <td>{{ prop.description }}</td>
                    <td>{{ prop.status }}</td>
                    <td>{{ prop.nbrVoteAccept }}</td>
                    <td>{{ prop.idGroupe.nomProjet ?? 'N/A' }}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"10\">Aucune proposition trouvée.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "proposition_reunion/list.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\proposition_reunion\\list.html.twig");
    }
}
