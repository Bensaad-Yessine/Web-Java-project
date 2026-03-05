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

/* Front/groupe/index.html.twig */
class __TwigTemplate_bd880b6b7c1c96b5769cd375bf23b50e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/index.html.twig"));

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

        yield "Gestion de Groupe - ESPRIT";
        
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
        <h1 class=\"h1\">Gestion de Groupe</h1>
        <p class=\"muted\">Gérez vos groupes de projet et collaborez avec vos camarades</p>
    </div>
    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_new");
        yield "\" class=\"btn\" style=\"display: inline-flex; align-items: center; gap: 8px;\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
        </svg>
        Nouveau Groupe
    </a>
</header>

<!-- Flash Messages -->
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 24
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\" style=\"margin-bottom: 20px; padding: 16px 20px; border-radius: 12px; background: ";
                if (($context["label"] == "success")) {
                    yield "#D1FAE5";
                } elseif (($context["label"] == "error")) {
                    yield "#FEE2E2";
                } else {
                    yield "#DBEAFE";
                }
                yield "; border: 1px solid ";
                if (($context["label"] == "success")) {
                    yield "#6EE7B7";
                } elseif (($context["label"] == "error")) {
                    yield "#FCA5A5";
                } else {
                    yield "#93C5FD";
                }
                yield "; color: ";
                if (($context["label"] == "success")) {
                    yield "#065F46";
                } elseif (($context["label"] == "error")) {
                    yield "#7F1D1D";
                } else {
                    yield "#1E40AF";
                }
                yield "; border-radius: var(--radius-lg);\">
            ";
                // line 26
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
        // line 30
        yield "
<!-- Toolbar -->
<div class=\"toolbar-section\" style=\"margin-bottom: 32px; background: white; padding: 24px; border-radius: var(--radius-xl); border: 1px solid var(--gray-200); box-shadow: var(--shadow-sm);\">
    <div style=\"display: flex; gap: 12px; margin-bottom: 16px; align-items: center;\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"color: var(--gray-500);\">
            <circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"m21 21-4.35-4.35\"/>
        </svg>
        <span style=\"font-size: 14px; font-weight: 600; color: var(--gray-700);\">Filtres et Recherche</span>
    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px;\">
        <input 
            type=\"text\" 
            id=\"searchInput\" 
            placeholder=\"Rechercher un groupe...\" 
            style=\"padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 14px; transition: all var(--transition); background: var(--gray-50);\"
            onkeyup=\"filterGroups()\"
            aria-label=\"Rechercher un groupe\"
            onfocus=\"this.style.borderColor='var(--primary-red)'; this.style.background='white';\"
            onblur=\"this.style.borderColor='var(--gray-200)'; this.style.background='var(--gray-50)';\"
        >
        
        <select 
            id=\"statusFilter\" 
            onchange=\"filterGroups()\" 
            style=\"padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 14px; background: var(--gray-50); cursor: pointer; transition: all var(--transition);\"
            aria-label=\"Filtrer par statut\"
        >
            <option value=\"\">Tous les statuts</option>
            <option value=\"Actif\">Actif</option>
            <option value=\"Non actif\">Non actif</option>
            <option value=\"En pause\">En pause</option>
            <option value=\"Terminé\">Terminé</option>
        </select>

        ";
        // line 65
        $context["matieres"] = [];
        // line 66
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 67
            yield "            ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["g"], "matiere", [], "any", false, false, false, 67)) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "matiere", [], "any", false, false, false, 67), (isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 67, $this->source); })())))) {
                // line 68
                yield "                ";
                $context["matieres"] = Twig\Extension\CoreExtension::merge((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 68, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["g"], "matiere", [], "any", false, false, false, 68)]);
                // line 69
                yield "            ";
            }
            // line 70
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "        <select 
            id=\"matiereFilter\" 
            onchange=\"filterGroups()\" 
            style=\"padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 14px; background: var(--gray-50); cursor: pointer; transition: all var(--transition);\"
            aria-label=\"Filtrer par matière\"
        >
            <option value=\"\">Toutes les matières</option>
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 79
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["mat"]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mat"], "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "        </select>

        <select 
            id=\"sortBy\" 
            onchange=\"sortGroups()\" 
            style=\"padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 14px; background: var(--gray-50); cursor: pointer; transition: all var(--transition);\"
            aria-label=\"Trier par\"
        >
            <option value=\"createdAt\">Trier par date</option>
            <option value=\"id\">Trier par ID</option>
            <option value=\"members\">Trier par membres</option>
        </select>
    </div>
</div>

<!-- Groups Grid -->
<div id=\"groupsContainer\" style=\"display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 20px;\">
    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 99
            yield "        ";
            yield from $this->load("front/groupe/_group_card.html.twig", 99)->unwrap()->yield(CoreExtension::merge($context, ["groupe" => $context["groupe"]]));
            // line 100
            yield "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 101
            yield "        <div style=\"grid-column: 1 / -1; text-align: center; padding: 80px 20px; background: white; border-radius: var(--radius-xl); border: 2px dashed var(--gray-200);\">
            <svg width=\"100\" height=\"100\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--gray-300)\" stroke-width=\"1.5\" style=\"margin: 0 auto 20px;\">
                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
            </svg>
            <h3 style=\"font-size: 24px; color: var(--gray-600); margin-bottom: 12px; font-weight: 700;\">Aucun groupe pour le moment</h3>
            <p style=\"color: var(--gray-500); margin-bottom: 28px; font-size: 15px; line-height: 1.6;\">Vous ne faites partie d'aucun groupe. Créez votre premier groupe ou attendez qu'un autre membre vous y ajoute.</p>
            <a href=\"";
            // line 109
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_new");
            yield "\" class=\"btn\" style=\"display: inline-flex; align-items: center; gap: 8px;\">
                <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                </svg>
                Créer un groupe
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "</div>
</main>

<script>
function filterGroups() {
    const search = document.getElementById('searchInput').value.toLowerCase();
    const statusFilter = document.getElementById('statusFilter').value;
    const matiereFilter = document.getElementById('matiereFilter').value;
    const cards = document.querySelectorAll('.group-card');
    
    cards.forEach(card => {
        const title = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
        const status = (card.dataset.status || '').toLowerCase();
        const matiere = (card.dataset.matiere || '').toLowerCase();

        let show = true;
        if (search && !title.includes(search)) show = false;
        if (statusFilter && status !== statusFilter.toLowerCase()) show = false;
        if (matiereFilter && matiere !== matiereFilter) show = false;

        card.style.display = show ? 'block' : 'none';
    });
}

function sortGroups() {
    const sortBy = document.getElementById('sortBy').value;
    const container = document.getElementById('groupsContainer');
    const cards = Array.from(container.querySelectorAll('.group-card'));
    
    cards.sort((a, b) => {
        let aVal, bVal;
        
        if (sortBy === 'id') {
            aVal = parseInt(a.dataset.id);
            bVal = parseInt(b.dataset.id);
        } else if (sortBy === 'members') {
            aVal = parseInt(a.dataset.members);
            bVal = parseInt(b.dataset.members);
        } else {
            aVal = new Date(a.dataset.created);
            bVal = new Date(b.dataset.created);
        }
        
        return bVal - aVal;
    });
    
    cards.forEach(card => container.appendChild(card));
}
</script>

<style>
.btn {
    display: inline-block;
    padding: 12px 24px;
    border-radius: var(--radius-lg);
    font-weight: 600;
    text-decoration: none;
    transition: all var(--transition);
    cursor: pointer;
    border: none;
    font-size: 14px;
}

.btn-primary {
    background: var(--primary-gradient);
    color: white;
    box-shadow: var(--shadow-sm);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

select, input {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

select:focus, input:focus {
    outline: none;
    border-color: var(--primary-red) !important;
    box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
}
</style>
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
        return "Front/groupe/index.html.twig";
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
        return array (  334 => 117,  320 => 109,  310 => 101,  297 => 100,  294 => 99,  276 => 98,  257 => 81,  246 => 79,  242 => 78,  233 => 71,  227 => 70,  224 => 69,  221 => 68,  218 => 67,  213 => 66,  211 => 65,  174 => 30,  161 => 26,  132 => 25,  127 => 24,  123 => 23,  111 => 14,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Gestion de Groupe - ESPRIT{% endblock %}

{% set current_page = 'groupes' %}

{% block content %}
<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">Gestion de Groupe</h1>
        <p class=\"muted\">Gérez vos groupes de projet et collaborez avec vos camarades</p>
    </div>
    <a href=\"{{ path('front_groupe_projet_new') }}\" class=\"btn\" style=\"display: inline-flex; align-items: center; gap: 8px;\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
        </svg>
        Nouveau Groupe
    </a>
</header>

<!-- Flash Messages -->
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" style=\"margin-bottom: 20px; padding: 16px 20px; border-radius: 12px; background: {% if label == 'success' %}#D1FAE5{% elseif label == 'error' %}#FEE2E2{% else %}#DBEAFE{% endif %}; border: 1px solid {% if label == 'success' %}#6EE7B7{% elseif label == 'error' %}#FCA5A5{% else %}#93C5FD{% endif %}; color: {% if label == 'success' %}#065F46{% elseif label == 'error' %}#7F1D1D{% else %}#1E40AF{% endif %}; border-radius: var(--radius-lg);\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}

<!-- Toolbar -->
<div class=\"toolbar-section\" style=\"margin-bottom: 32px; background: white; padding: 24px; border-radius: var(--radius-xl); border: 1px solid var(--gray-200); box-shadow: var(--shadow-sm);\">
    <div style=\"display: flex; gap: 12px; margin-bottom: 16px; align-items: center;\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"color: var(--gray-500);\">
            <circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"m21 21-4.35-4.35\"/>
        </svg>
        <span style=\"font-size: 14px; font-weight: 600; color: var(--gray-700);\">Filtres et Recherche</span>
    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px;\">
        <input 
            type=\"text\" 
            id=\"searchInput\" 
            placeholder=\"Rechercher un groupe...\" 
            style=\"padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 14px; transition: all var(--transition); background: var(--gray-50);\"
            onkeyup=\"filterGroups()\"
            aria-label=\"Rechercher un groupe\"
            onfocus=\"this.style.borderColor='var(--primary-red)'; this.style.background='white';\"
            onblur=\"this.style.borderColor='var(--gray-200)'; this.style.background='var(--gray-50)';\"
        >
        
        <select 
            id=\"statusFilter\" 
            onchange=\"filterGroups()\" 
            style=\"padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 14px; background: var(--gray-50); cursor: pointer; transition: all var(--transition);\"
            aria-label=\"Filtrer par statut\"
        >
            <option value=\"\">Tous les statuts</option>
            <option value=\"Actif\">Actif</option>
            <option value=\"Non actif\">Non actif</option>
            <option value=\"En pause\">En pause</option>
            <option value=\"Terminé\">Terminé</option>
        </select>

        {% set matieres = [] %}
        {% for g in groupe_projets %}
            {% if g.matiere is not null and g.matiere not in matieres %}
                {% set matieres = matieres|merge([g.matiere]) %}
            {% endif %}
        {% endfor %}
        <select 
            id=\"matiereFilter\" 
            onchange=\"filterGroups()\" 
            style=\"padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 14px; background: var(--gray-50); cursor: pointer; transition: all var(--transition);\"
            aria-label=\"Filtrer par matière\"
        >
            <option value=\"\">Toutes les matières</option>
            {% for mat in matieres %}
                <option value=\"{{ mat|lower }}\">{{ mat }}</option>
            {% endfor %}
        </select>

        <select 
            id=\"sortBy\" 
            onchange=\"sortGroups()\" 
            style=\"padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius-lg); font-size: 14px; background: var(--gray-50); cursor: pointer; transition: all var(--transition);\"
            aria-label=\"Trier par\"
        >
            <option value=\"createdAt\">Trier par date</option>
            <option value=\"id\">Trier par ID</option>
            <option value=\"members\">Trier par membres</option>
        </select>
    </div>
</div>

<!-- Groups Grid -->
<div id=\"groupsContainer\" style=\"display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 20px;\">
    {% for groupe in groupe_projets %}
        {% include 'front/groupe/_group_card.html.twig' with {'groupe': groupe} %}
    {% else %}
        <div style=\"grid-column: 1 / -1; text-align: center; padding: 80px 20px; background: white; border-radius: var(--radius-xl); border: 2px dashed var(--gray-200);\">
            <svg width=\"100\" height=\"100\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--gray-300)\" stroke-width=\"1.5\" style=\"margin: 0 auto 20px;\">
                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
            </svg>
            <h3 style=\"font-size: 24px; color: var(--gray-600); margin-bottom: 12px; font-weight: 700;\">Aucun groupe pour le moment</h3>
            <p style=\"color: var(--gray-500); margin-bottom: 28px; font-size: 15px; line-height: 1.6;\">Vous ne faites partie d'aucun groupe. Créez votre premier groupe ou attendez qu'un autre membre vous y ajoute.</p>
            <a href=\"{{ path('front_groupe_projet_new') }}\" class=\"btn\" style=\"display: inline-flex; align-items: center; gap: 8px;\">
                <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"/><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"/>
                </svg>
                Créer un groupe
            </a>
        </div>
    {% endfor %}
</div>
</main>

<script>
function filterGroups() {
    const search = document.getElementById('searchInput').value.toLowerCase();
    const statusFilter = document.getElementById('statusFilter').value;
    const matiereFilter = document.getElementById('matiereFilter').value;
    const cards = document.querySelectorAll('.group-card');
    
    cards.forEach(card => {
        const title = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
        const status = (card.dataset.status || '').toLowerCase();
        const matiere = (card.dataset.matiere || '').toLowerCase();

        let show = true;
        if (search && !title.includes(search)) show = false;
        if (statusFilter && status !== statusFilter.toLowerCase()) show = false;
        if (matiereFilter && matiere !== matiereFilter) show = false;

        card.style.display = show ? 'block' : 'none';
    });
}

function sortGroups() {
    const sortBy = document.getElementById('sortBy').value;
    const container = document.getElementById('groupsContainer');
    const cards = Array.from(container.querySelectorAll('.group-card'));
    
    cards.sort((a, b) => {
        let aVal, bVal;
        
        if (sortBy === 'id') {
            aVal = parseInt(a.dataset.id);
            bVal = parseInt(b.dataset.id);
        } else if (sortBy === 'members') {
            aVal = parseInt(a.dataset.members);
            bVal = parseInt(b.dataset.members);
        } else {
            aVal = new Date(a.dataset.created);
            bVal = new Date(b.dataset.created);
        }
        
        return bVal - aVal;
    });
    
    cards.forEach(card => container.appendChild(card));
}
</script>

<style>
.btn {
    display: inline-block;
    padding: 12px 24px;
    border-radius: var(--radius-lg);
    font-weight: 600;
    text-decoration: none;
    transition: all var(--transition);
    cursor: pointer;
    border: none;
    font-size: 14px;
}

.btn-primary {
    background: var(--primary-gradient);
    color: white;
    box-shadow: var(--shadow-sm);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

select, input {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

select:focus, input:focus {
    outline: none;
    border-color: var(--primary-red) !important;
    box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
}
</style>
{% endblock %}
", "Front/groupe/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\groupe\\index.html.twig");
    }
}
