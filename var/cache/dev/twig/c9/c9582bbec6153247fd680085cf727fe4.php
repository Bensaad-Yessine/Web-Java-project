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

/* Front/proposition/index.html.twig */
class __TwigTemplate_67234169938f7b49f1790d3a8ff901a4 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/proposition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/proposition/index.html.twig"));

        // line 5
        $context["current_page"] = "groupes";
        // line 1
        $this->parent = $this->load("front/base.html.twig", 1);
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

        yield "Propositions de réunion - ESPRIT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">Propositions de réunion</h1>
        <p class=\"muted\">Consultez toutes les propositions de réunion de vos groupes</p>
    </div>
    <div class=\"session-display\">
        <div>Total propositions</div>
        <div>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["propositions"]) || array_key_exists("propositions", $context) ? $context["propositions"] : (function () { throw new RuntimeError('Variable "propositions" does not exist.', 16, $this->source); })())), "html", null, true);
        yield "</div>
    </div>
</header>

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 21
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\" style=\"margin-bottom: 20px; padding: 16px 20px; border-radius: 12px; background: ";
                if (($context["label"] == "success")) {
                    yield "var(--green-50)";
                } elseif (($context["label"] == "error")) {
                    yield "var(--red-50)";
                } else {
                    yield "var(--blue-50)";
                }
                yield "; border: 1px solid ";
                if (($context["label"] == "success")) {
                    yield "var(--green-200)";
                } elseif (($context["label"] == "error")) {
                    yield "var(--red-200)";
                } else {
                    yield "var(--blue-200)";
                }
                yield "; color: ";
                if (($context["label"] == "success")) {
                    yield "var(--green-900)";
                } elseif (($context["label"] == "error")) {
                    yield "var(--red-900)";
                } else {
                    yield "var(--blue-900)";
                }
                yield ";\">
            ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
<div class=\"profile-container\">
    <!-- Toolbar -->
    <div style=\"margin-bottom: 32px; display: flex; gap: 16px; align-items: center; flex-wrap: wrap;\">
        <input 
            type=\"text\" 
            id=\"searchInput\" 
            placeholder=\"🔍 Rechercher une proposition...\" 
            style=\"flex: 1; min-width: 250px; padding: 14px 20px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 15px; transition: all var(--transition);\"
            onkeyup=\"filterPropositions()\"
        >
        
        <select 
            id=\"filterStatus\" 
            onchange=\"filterByStatus()\" 
            style=\"padding: 14px 20px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 15px; background: white; cursor: pointer; transition: all var(--transition);\"
        >
            <option value=\"\">Tous les statuts</option>
            <option value=\"En attente\">En attente</option>
            <option value=\"Confirmée\">Confirmée</option>
            <option value=\"Annulée\">Annulée</option>
            <option value=\"Reportée\">Reportée</option>
        </select>

        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
        yield "\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition);\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"/><polyline points=\"12 19 5 12 12 5\"/>
            </svg>
            Retour aux groupes
        </a>
    </div>

    <!-- Propositions List -->
    <div style=\"display:flex; gap:12px; align-items:center; margin-bottom:18px;\">
        <label style=\"font-weight:600;\">Trier :</label>
        <select id=\"sortSelect\" style=\"padding:10px; border-radius:8px;\">
            <option value=\"dateCreation|desc\">Plus récentes</option>
            <option value=\"dateCreation|asc\">Plus anciennes</option>
            <option value=\"dateReunion|asc\">Date réunion (plus proche)</option>
            <option value=\"dateReunion|desc\">Date réunion (plus lointaine)</option>
        </select>
    </div>

    <div id=\"propositionsContainer\" style=\"display: grid; gap: 20px;\">
        ";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "proposition_reunion/_list.html.twig", ["proposition_reunions" => (isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 71, $this->source); })())]);
        yield "
    </div>
</div>
</main>

<script>
(function(){
    const container = document.getElementById('propositionsContainer');
    const searchInput = document.getElementById('searchInput');
    const statusSelect = document.getElementById('filterStatus');
    const sortSelect = document.getElementById('sortSelect');
    const url = '";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_ajax_filter", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
        yield "';

    let timer;
    const debounce = (fn, delay = 350) => (...args) => {
        clearTimeout(timer);
        timer = setTimeout(() => fn(...args), delay);
    };

    function buildParams() {
        const params = new URLSearchParams();
        if (searchInput && searchInput.value.trim()) params.append('search', searchInput.value.trim());
        if (statusSelect && statusSelect.value) params.append('status', statusSelect.value);
        if (sortSelect && sortSelect.value) {
            const [s, d] = sortSelect.value.split('|');
            params.append('sort', s);
            params.append('direction', d);
        }
        return params.toString();
    }

    async function fetchAndRender() {
        if (!container) return;

        if (window.__propPropositionsAbort) window.__propPropositionsAbort.abort();
        window.__propPropositionsAbort = new AbortController();

        container.innerHTML = '<div class=\"card\" style=\"padding:20px; text-align:center;\"><div class=\"spinner-border text-primary\" role=\"status\"></div><div class=\"mt-2 text-muted\">Chargement...</div></div>';

        try {
            const resp = await fetch(url + '?' + buildParams(), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                signal: window.__propPropositionsAbort.signal
            });

            if (!resp.ok) throw new Error('Network error');

            const data = await resp.json();
            container.innerHTML = data.html || '';
        } catch (e) {
            if (e.name === 'AbortError') return;
            console.error('proposition reload failed', e);
            container.innerHTML = '<div class=\"card\" style=\"padding:20px; text-align:center; color:#c00;\">Erreur lors du chargement</div>';
        }
    }

    const debounced = debounce(fetchAndRender, 350);

    if (searchInput) searchInput.addEventListener('input', debounced);
    if (statusSelect) statusSelect.addEventListener('change', fetchAndRender);
    if (sortSelect) sortSelect.addEventListener('change', fetchAndRender);

})();
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
        return "Front/proposition/index.html.twig";
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
        return array (  234 => 82,  220 => 71,  197 => 51,  171 => 27,  158 => 23,  129 => 22,  124 => 21,  120 => 20,  113 => 16,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Propositions de réunion - ESPRIT{% endblock %}

{% set current_page = 'groupes' %}

{% block content %}
<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">Propositions de réunion</h1>
        <p class=\"muted\">Consultez toutes les propositions de réunion de vos groupes</p>
    </div>
    <div class=\"session-display\">
        <div>Total propositions</div>
        <div>{{ propositions|length }}</div>
    </div>
</header>

{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" style=\"margin-bottom: 20px; padding: 16px 20px; border-radius: 12px; background: {% if label == 'success' %}var(--green-50){% elseif label == 'error' %}var(--red-50){% else %}var(--blue-50){% endif %}; border: 1px solid {% if label == 'success' %}var(--green-200){% elseif label == 'error' %}var(--red-200){% else %}var(--blue-200){% endif %}; color: {% if label == 'success' %}var(--green-900){% elseif label == 'error' %}var(--red-900){% else %}var(--blue-900){% endif %};\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}

<div class=\"profile-container\">
    <!-- Toolbar -->
    <div style=\"margin-bottom: 32px; display: flex; gap: 16px; align-items: center; flex-wrap: wrap;\">
        <input 
            type=\"text\" 
            id=\"searchInput\" 
            placeholder=\"🔍 Rechercher une proposition...\" 
            style=\"flex: 1; min-width: 250px; padding: 14px 20px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 15px; transition: all var(--transition);\"
            onkeyup=\"filterPropositions()\"
        >
        
        <select 
            id=\"filterStatus\" 
            onchange=\"filterByStatus()\" 
            style=\"padding: 14px 20px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 15px; background: white; cursor: pointer; transition: all var(--transition);\"
        >
            <option value=\"\">Tous les statuts</option>
            <option value=\"En attente\">En attente</option>
            <option value=\"Confirmée\">Confirmée</option>
            <option value=\"Annulée\">Annulée</option>
            <option value=\"Reportée\">Reportée</option>
        </select>

        <a href=\"{{ path('front_groupe_projet_index') }}\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition);\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"/><polyline points=\"12 19 5 12 12 5\"/>
            </svg>
            Retour aux groupes
        </a>
    </div>

    <!-- Propositions List -->
    <div style=\"display:flex; gap:12px; align-items:center; margin-bottom:18px;\">
        <label style=\"font-weight:600;\">Trier :</label>
        <select id=\"sortSelect\" style=\"padding:10px; border-radius:8px;\">
            <option value=\"dateCreation|desc\">Plus récentes</option>
            <option value=\"dateCreation|asc\">Plus anciennes</option>
            <option value=\"dateReunion|asc\">Date réunion (plus proche)</option>
            <option value=\"dateReunion|desc\">Date réunion (plus lointaine)</option>
        </select>
    </div>

    <div id=\"propositionsContainer\" style=\"display: grid; gap: 20px;\">
        {{ include('proposition_reunion/_list.html.twig', { proposition_reunions: proposition_reunions }) }}
    </div>
</div>
</main>

<script>
(function(){
    const container = document.getElementById('propositionsContainer');
    const searchInput = document.getElementById('searchInput');
    const statusSelect = document.getElementById('filterStatus');
    const sortSelect = document.getElementById('sortSelect');
    const url = '{{ path('app_proposition_reunion_ajax_filter', {'groupeId': groupe_projet.id}) }}';

    let timer;
    const debounce = (fn, delay = 350) => (...args) => {
        clearTimeout(timer);
        timer = setTimeout(() => fn(...args), delay);
    };

    function buildParams() {
        const params = new URLSearchParams();
        if (searchInput && searchInput.value.trim()) params.append('search', searchInput.value.trim());
        if (statusSelect && statusSelect.value) params.append('status', statusSelect.value);
        if (sortSelect && sortSelect.value) {
            const [s, d] = sortSelect.value.split('|');
            params.append('sort', s);
            params.append('direction', d);
        }
        return params.toString();
    }

    async function fetchAndRender() {
        if (!container) return;

        if (window.__propPropositionsAbort) window.__propPropositionsAbort.abort();
        window.__propPropositionsAbort = new AbortController();

        container.innerHTML = '<div class=\"card\" style=\"padding:20px; text-align:center;\"><div class=\"spinner-border text-primary\" role=\"status\"></div><div class=\"mt-2 text-muted\">Chargement...</div></div>';

        try {
            const resp = await fetch(url + '?' + buildParams(), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                signal: window.__propPropositionsAbort.signal
            });

            if (!resp.ok) throw new Error('Network error');

            const data = await resp.json();
            container.innerHTML = data.html || '';
        } catch (e) {
            if (e.name === 'AbortError') return;
            console.error('proposition reload failed', e);
            container.innerHTML = '<div class=\"card\" style=\"padding:20px; text-align:center; color:#c00;\">Erreur lors du chargement</div>';
        }
    }

    const debounced = debounce(fetchAndRender, 350);

    if (searchInput) searchInput.addEventListener('input', debounced);
    if (statusSelect) statusSelect.addEventListener('change', fetchAndRender);
    if (sortSelect) sortSelect.addEventListener('change', fetchAndRender);

})();
</script>
{% endblock %}
", "Front/proposition/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\proposition\\index.html.twig");
    }
}
