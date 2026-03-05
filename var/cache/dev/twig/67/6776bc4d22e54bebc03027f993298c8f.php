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

/* Front/proposition/show.html.twig */
class __TwigTemplate_01689855ef490c6728a85e15ae80826b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/proposition/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/proposition/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - ESPRIT";
        
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
        <h1 class=\"h1\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["proposition_reunion"] ?? null), "titre", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "Proposition de réunion")) : ("Proposition de réunion")), "html", null, true);
        yield "</h1>
        <p class=\"muted\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 12, $this->source); })()), "nomProjet", [], "any", false, false, false, 12), "html", null, true);
        yield " · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 12, $this->source); })()), "matiere", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
    </div>
    <span style=\"padding: 8px 18px; border-radius: var(--radius-lg); font-size: 14px; font-weight: 600; background: ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14) == "Confirmée")) {
            yield "var(--green-100)";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14) == "Annulée")) {
            yield "var(--red-100)";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14) == "Reportée")) {
            yield "var(--orange-100)";
        } else {
            yield "var(--blue-100)";
        }
        yield "; color: ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14) == "Confirmée")) {
            yield "var(--green-900)";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14) == "Annulée")) {
            yield "var(--red-900)";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14) == "Reportée")) {
            yield "var(--orange-900)";
        } else {
            yield "var(--blue-900)";
        }
        yield ";\">
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["proposition_reunion"] ?? null), "status", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 15, $this->source); })()), "status", [], "any", false, false, false, 15), "En attente")) : ("En attente")), "html", null, true);
        yield "
    </span>
</header>

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
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
                // line 22
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
        // line 26
        yield "
<div class=\"profile-container\">
    <div style=\"display: flex; gap: 12px; margin-bottom: 24px; flex-wrap: wrap;\">
        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_index");
        yield "\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition);\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"/><polyline points=\"12 19 5 12 12 5\"/>
            </svg>
            Toutes les propositions
        </a>
        <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition);\">
            Voir le groupe
        </a>
        <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; background: linear-gradient(135deg, var(--orange-500), var(--red-500)); color: white; text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; transition: all var(--transition);\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
            </svg>
            Modifier
        </a>
    </div>

    <!-- Main Content -->
    <div style=\"display: grid; grid-template-columns: 2fr 1fr; gap: 24px;\">
        <!-- Left Column - Details -->
        <div>
            <!-- Date and Time Card -->
            <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
                <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200); background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                    <h2 style=\"margin: 0; font-size: 18px; font-weight: 700;\">Informations de la réunion</h2>
                </div>
                <div style=\"padding: 24px;\">
                    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
                        <div style=\"display: flex; align-items: start; gap: 12px;\">
                            <div style=\"width: 48px; height: 48px; border-radius: var(--radius-lg); background: var(--blue-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--blue-600)\" stroke-width=\"2\">
                                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                </svg>
                            </div>
                            <div>
                                <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 4px; font-weight: 500;\">Date de réunion</div>
                                <div style=\"font-size: 16px; font-weight: 700; color: var(--gray-900);\">
                                    ";
        // line 66
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 66, $this->source); })()), "dateReunion", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 66, $this->source); })()), "dateReunion", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "
                                </div>
                                <div style=\"font-size: 13px; color: var(--gray-600); margin-top: 2px;\">
                                    ";
        // line 69
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 69, $this->source); })()), "dateReunion", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 69, $this->source); })()), "dateReunion", [], "any", false, false, false, 69), "l", "Europe/Paris")), "html", null, true)) : ("Non définie"));
        yield "
                                </div>
                            </div>
                        </div>

                        <div style=\"display: flex; align-items: start; gap: 12px;\">
                            <div style=\"width: 48px; height: 48px; border-radius: var(--radius-lg); background: var(--purple-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--purple-600)\" stroke-width=\"2\">
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/>
                                </svg>
                            </div>
                            <div>
                                <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 4px; font-weight: 500;\">Horaire</div>
                                <div style=\"font-size: 16px; font-weight: 700; color: var(--gray-900);\">
                                    ";
        // line 83
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 83, $this->source); })()), "heureDebut", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 83, $this->source); })()), "heureDebut", [], "any", false, false, false, 83), "H:i"), "html", null, true)) : ("-"));
        yield " - ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 83, $this->source); })()), "heureFin", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 83, $this->source); })()), "heureFin", [], "any", false, false, false, 83), "H:i"), "html", null, true)) : ("-"));
        yield "
                                </div>
                                ";
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 85, $this->source); })()), "heureDebut", [], "any", false, false, false, 85) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 85, $this->source); })()), "heureFin", [], "any", false, false, false, 85))) {
            // line 86
            yield "                                    ";
            $context["duration"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 86, $this->source); })()), "heureFin", [], "any", false, false, false, 86), "timestamp", [], "any", false, false, false, 86) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 86, $this->source); })()), "heureDebut", [], "any", false, false, false, 86), "timestamp", [], "any", false, false, false, 86)) / 60);
            // line 87
            yield "                                    <div style=\"font-size: 13px; color: var(--gray-600); margin-top: 2px;\">
                                        Durée: ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 88, $this->source); })())), "html", null, true);
            yield " minutes
                                    </div>
                                ";
        }
        // line 91
        yield "                            </div>
                        </div>
                    </div>

                    <div style=\"display: flex; align-items: start; gap: 12px; padding: 16px; background: var(--orange-50); border-radius: var(--radius-lg); border: 1px solid var(--orange-200);\">
                        <div style=\"width: 48px; height: 48px; border-radius: var(--radius-lg); background: var(--orange-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--orange-600)\" stroke-width=\"2\">
                                <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"/><circle cx=\"12\" cy=\"10\" r=\"3\"/>
                            </svg>
                        </div>
                        <div style=\"flex: 1;\">
                            <div style=\"font-size: 13px; color: var(--orange-700); margin-bottom: 4px; font-weight: 600;\">Lieu de réunion</div>
                            <div style=\"font-size: 16px; font-weight: 700; color: var(--orange-900);\">
                                ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["proposition_reunion"] ?? null), "lieu", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 104, $this->source); })()), "lieu", [], "any", false, false, false, 104), "Non défini")) : ("Non défini")), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description Card -->
            ";
        // line 112
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 112, $this->source); })()), "description", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "                <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
                    <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200);\">
                        <h2 style=\"margin: 0; font-size: 18px; font-weight: 700; color: var(--gray-900);\">Description</h2>
                    </div>
                    <div style=\"padding: 24px;\">
                        <p style=\"margin: 0; color: var(--gray-700); line-height: 1.7; font-size: 15px; white-space: pre-wrap;\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 118, $this->source); })()), "description", [], "any", false, false, false, 118), "html", null, true);
            yield "</p>
                    </div>
                </div>
            ";
        }
        // line 122
        yield "        </div>

        <!-- Right Column - Sidebar -->
        <div>
            <!-- Group Info Card -->
            <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
                <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200); background: linear-gradient(135deg, var(--red-500), var(--orange-500)); color: white;\">
                    <h2 style=\"margin: 0; font-size: 16px; font-weight: 700;\">Groupe</h2>
                </div>
                <div style=\"padding: 24px;\">
                    <div style=\"margin-bottom: 16px;\">
                        <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Nom du groupe</div>
                        <div style=\"font-size: 16px; font-weight: 700; color: var(--gray-900);\">
                            ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 135, $this->source); })()), "nomProjet", [], "any", false, false, false, 135), "html", null, true);
        yield "
                        </div>
                    </div>

                    <div style=\"margin-bottom: 16px;\">
                        <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Matière</div>
                        <div style=\"font-size: 15px; font-weight: 600; color: var(--gray-800);\">
                            ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 142, $this->source); })()), "matiere", [], "any", false, false, false, 142), "html", null, true);
        yield "
                        </div>
                    </div>

                    <div style=\"margin-bottom: 20px;\">
                        <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Membres</div>
                        <div style=\"font-size: 15px; font-weight: 600; color: var(--gray-800);\">
                            ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 149, $this->source); })()), "idUser", [], "any", false, false, false, 149)), "html", null, true);
        yield " membre(s)
                        </div>
                    </div>

                    <a href=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153)]), "html", null, true);
        yield "\" style=\"display: block; width: 100%; padding: 12px; background: linear-gradient(135deg, var(--red-500), var(--orange-500)); color: white; text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; font-size: 14px; text-align: center; transition: all var(--transition);\">
                        Voir le groupe
                    </a>
                </div>
            </div>

            <!-- Status Info Card -->
            <div class=\"card\" style=\"border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
                <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200);\">
                    <h2 style=\"margin: 0; font-size: 16px; font-weight: 700; color: var(--gray-900);\">Informations</h2>
                </div>
                <div style=\"padding: 24px;\">
                    <div style=\"margin-bottom: 16px;\">
                        <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Statut</div>
                        <span style=\"display: inline-block; padding: 6px 14px; border-radius: var(--radius); font-size: 13px; font-weight: 600; background: ";
        // line 167
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167) == "Confirmée")) {
            yield "var(--green-100)";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167) == "Annulée")) {
            yield "var(--red-100)";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167) == "Reportée")) {
            yield "var(--orange-100)";
        } else {
            yield "var(--blue-100)";
        }
        yield "; color: ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167) == "Confirmée")) {
            yield "var(--green-900)";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167) == "Annulée")) {
            yield "var(--red-900)";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167) == "Reportée")) {
            yield "var(--orange-900)";
        } else {
            yield "var(--blue-900)";
        }
        yield ";\">
                            ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["proposition_reunion"] ?? null), "status", [], "any", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 168, $this->source); })()), "status", [], "any", false, false, false, 168), "En attente")) : ("En attente")), "html", null, true);
        yield "
                        </span>
                    </div>

                    ";
        // line 172
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 172, $this->source); })()), "dateCreation", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "                        <div style=\"margin-bottom: 16px;\">
                            <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Créée le</div>
                            <div style=\"font-size: 14px; color: var(--gray-700);\">
                                ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 176, $this->source); })()), "dateCreation", [], "any", false, false, false, 176), "d/m/Y à H:i"), "html", null, true);
            yield "
                            </div>
                        </div>
                    ";
        }
        // line 180
        yield "
                    ";
        // line 181
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 181, $this->source); })()), "nbrVoteAccept", [], "any", false, false, false, 181))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 182
            yield "                        <div>
                            <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Votes d'acceptation</div>
                            <div style=\"font-size: 20px; font-weight: 700; color: var(--green-600);\">
                                ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 185, $this->source); })()), "nbrVoteAccept", [], "any", false, false, false, 185), "html", null, true);
            yield "
                            </div>
                        </div>
                    ";
        }
        // line 189
        yield "                </div>
            </div>
        </div>
    </div>
</div>
</main>
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
        return "Front/proposition/show.html.twig";
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
        return array (  456 => 189,  449 => 185,  444 => 182,  442 => 181,  439 => 180,  432 => 176,  427 => 173,  425 => 172,  418 => 168,  396 => 167,  379 => 153,  372 => 149,  362 => 142,  352 => 135,  337 => 122,  330 => 118,  323 => 113,  321 => 112,  310 => 104,  295 => 91,  289 => 88,  286 => 87,  283 => 86,  281 => 85,  274 => 83,  257 => 69,  251 => 66,  220 => 38,  214 => 35,  205 => 29,  200 => 26,  187 => 22,  158 => 21,  153 => 20,  149 => 19,  142 => 15,  120 => 14,  113 => 12,  109 => 11,  104 => 8,  91 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}{{ proposition_reunion.titre }} - ESPRIT{% endblock %}

{% set current_page = 'groupes' %}

{% block content %}
<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">{{ proposition_reunion.titre|default('Proposition de réunion') }}</h1>
        <p class=\"muted\">{{ groupe_projet.nomProjet }} · {{ groupe_projet.matiere }}</p>
    </div>
    <span style=\"padding: 8px 18px; border-radius: var(--radius-lg); font-size: 14px; font-weight: 600; background: {% if proposition_reunion.status == 'Confirmée' %}var(--green-100){% elseif proposition_reunion.status == 'Annulée' %}var(--red-100){% elseif proposition_reunion.status == 'Reportée' %}var(--orange-100){% else %}var(--blue-100){% endif %}; color: {% if proposition_reunion.status == 'Confirmée' %}var(--green-900){% elseif proposition_reunion.status == 'Annulée' %}var(--red-900){% elseif proposition_reunion.status == 'Reportée' %}var(--orange-900){% else %}var(--blue-900){% endif %};\">
        {{ proposition_reunion.status|default('En attente') }}
    </span>
</header>

{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" style=\"margin-bottom: 20px; padding: 16px 20px; border-radius: 12px; background: {% if label == 'success' %}var(--green-50){% elseif label == 'error' %}var(--red-50){% else %}var(--blue-50){% endif %}; border: 1px solid {% if label == 'success' %}var(--green-200){% elseif label == 'error' %}var(--red-200){% else %}var(--blue-200){% endif %}; color: {% if label == 'success' %}var(--green-900){% elseif label == 'error' %}var(--red-900){% else %}var(--blue-900){% endif %};\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}

<div class=\"profile-container\">
    <div style=\"display: flex; gap: 12px; margin-bottom: 24px; flex-wrap: wrap;\">
        <a href=\"{{ path('front_proposition_reunion_index') }}\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition);\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"/><polyline points=\"12 19 5 12 12 5\"/>
            </svg>
            Toutes les propositions
        </a>
        <a href=\"{{ path('front_groupe_projet_show', {'id': groupe_projet.id}) }}\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition);\">
            Voir le groupe
        </a>
        <a href=\"{{ path('front_proposition_reunion_edit', {'id': proposition_reunion.id}) }}\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; background: linear-gradient(135deg, var(--orange-500), var(--red-500)); color: white; text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; transition: all var(--transition);\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
            </svg>
            Modifier
        </a>
    </div>

    <!-- Main Content -->
    <div style=\"display: grid; grid-template-columns: 2fr 1fr; gap: 24px;\">
        <!-- Left Column - Details -->
        <div>
            <!-- Date and Time Card -->
            <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
                <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200); background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                    <h2 style=\"margin: 0; font-size: 18px; font-weight: 700;\">Informations de la réunion</h2>
                </div>
                <div style=\"padding: 24px;\">
                    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
                        <div style=\"display: flex; align-items: start; gap: 12px;\">
                            <div style=\"width: 48px; height: 48px; border-radius: var(--radius-lg); background: var(--blue-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--blue-600)\" stroke-width=\"2\">
                                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                </svg>
                            </div>
                            <div>
                                <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 4px; font-weight: 500;\">Date de réunion</div>
                                <div style=\"font-size: 16px; font-weight: 700; color: var(--gray-900);\">
                                    {{ proposition_reunion.dateReunion ? proposition_reunion.dateReunion|date('d/m/Y') : 'Non définie' }}
                                </div>
                                <div style=\"font-size: 13px; color: var(--gray-600); margin-top: 2px;\">
                                    {{ proposition_reunion.dateReunion ? proposition_reunion.dateReunion|date('l', 'Europe/Paris')|trans : 'Non définie' }}
                                </div>
                            </div>
                        </div>

                        <div style=\"display: flex; align-items: start; gap: 12px;\">
                            <div style=\"width: 48px; height: 48px; border-radius: var(--radius-lg); background: var(--purple-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--purple-600)\" stroke-width=\"2\">
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/>
                                </svg>
                            </div>
                            <div>
                                <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 4px; font-weight: 500;\">Horaire</div>
                                <div style=\"font-size: 16px; font-weight: 700; color: var(--gray-900);\">
                                    {{ proposition_reunion.heureDebut ? proposition_reunion.heureDebut|date('H:i') : '-' }} - {{ proposition_reunion.heureFin ? proposition_reunion.heureFin|date('H:i') : '-' }}
                                </div>
                                {% if proposition_reunion.heureDebut and proposition_reunion.heureFin %}
                                    {% set duration = (proposition_reunion.heureFin.timestamp - proposition_reunion.heureDebut.timestamp) / 60 %}
                                    <div style=\"font-size: 13px; color: var(--gray-600); margin-top: 2px;\">
                                        Durée: {{ duration|round }} minutes
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <div style=\"display: flex; align-items: start; gap: 12px; padding: 16px; background: var(--orange-50); border-radius: var(--radius-lg); border: 1px solid var(--orange-200);\">
                        <div style=\"width: 48px; height: 48px; border-radius: var(--radius-lg); background: var(--orange-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--orange-600)\" stroke-width=\"2\">
                                <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"/><circle cx=\"12\" cy=\"10\" r=\"3\"/>
                            </svg>
                        </div>
                        <div style=\"flex: 1;\">
                            <div style=\"font-size: 13px; color: var(--orange-700); margin-bottom: 4px; font-weight: 600;\">Lieu de réunion</div>
                            <div style=\"font-size: 16px; font-weight: 700; color: var(--orange-900);\">
                                {{ proposition_reunion.lieu|default('Non défini') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description Card -->
            {% if proposition_reunion.description %}
                <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
                    <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200);\">
                        <h2 style=\"margin: 0; font-size: 18px; font-weight: 700; color: var(--gray-900);\">Description</h2>
                    </div>
                    <div style=\"padding: 24px;\">
                        <p style=\"margin: 0; color: var(--gray-700); line-height: 1.7; font-size: 15px; white-space: pre-wrap;\">{{ proposition_reunion.description }}</p>
                    </div>
                </div>
            {% endif %}
        </div>

        <!-- Right Column - Sidebar -->
        <div>
            <!-- Group Info Card -->
            <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
                <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200); background: linear-gradient(135deg, var(--red-500), var(--orange-500)); color: white;\">
                    <h2 style=\"margin: 0; font-size: 16px; font-weight: 700;\">Groupe</h2>
                </div>
                <div style=\"padding: 24px;\">
                    <div style=\"margin-bottom: 16px;\">
                        <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Nom du groupe</div>
                        <div style=\"font-size: 16px; font-weight: 700; color: var(--gray-900);\">
                            {{ groupe_projet.nomProjet }}
                        </div>
                    </div>

                    <div style=\"margin-bottom: 16px;\">
                        <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Matière</div>
                        <div style=\"font-size: 15px; font-weight: 600; color: var(--gray-800);\">
                            {{ groupe_projet.matiere }}
                        </div>
                    </div>

                    <div style=\"margin-bottom: 20px;\">
                        <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Membres</div>
                        <div style=\"font-size: 15px; font-weight: 600; color: var(--gray-800);\">
                            {{ groupe_projet.idUser|length }} membre(s)
                        </div>
                    </div>

                    <a href=\"{{ path('front_groupe_projet_show', {'id': groupe_projet.id}) }}\" style=\"display: block; width: 100%; padding: 12px; background: linear-gradient(135deg, var(--red-500), var(--orange-500)); color: white; text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; font-size: 14px; text-align: center; transition: all var(--transition);\">
                        Voir le groupe
                    </a>
                </div>
            </div>

            <!-- Status Info Card -->
            <div class=\"card\" style=\"border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
                <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200);\">
                    <h2 style=\"margin: 0; font-size: 16px; font-weight: 700; color: var(--gray-900);\">Informations</h2>
                </div>
                <div style=\"padding: 24px;\">
                    <div style=\"margin-bottom: 16px;\">
                        <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Statut</div>
                        <span style=\"display: inline-block; padding: 6px 14px; border-radius: var(--radius); font-size: 13px; font-weight: 600; background: {% if proposition_reunion.status == 'Confirmée' %}var(--green-100){% elseif proposition_reunion.status == 'Annulée' %}var(--red-100){% elseif proposition_reunion.status == 'Reportée' %}var(--orange-100){% else %}var(--blue-100){% endif %}; color: {% if proposition_reunion.status == 'Confirmée' %}var(--green-900){% elseif proposition_reunion.status == 'Annulée' %}var(--red-900){% elseif proposition_reunion.status == 'Reportée' %}var(--orange-900){% else %}var(--blue-900){% endif %};\">
                            {{ proposition_reunion.status|default('En attente') }}
                        </span>
                    </div>

                    {% if proposition_reunion.dateCreation %}
                        <div style=\"margin-bottom: 16px;\">
                            <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Créée le</div>
                            <div style=\"font-size: 14px; color: var(--gray-700);\">
                                {{ proposition_reunion.dateCreation|date('d/m/Y à H:i') }}
                            </div>
                        </div>
                    {% endif %}

                    {% if proposition_reunion.nbrVoteAccept is not null %}
                        <div>
                            <div style=\"font-size: 13px; color: var(--gray-500); margin-bottom: 6px; font-weight: 500;\">Votes d'acceptation</div>
                            <div style=\"font-size: 20px; font-weight: 700; color: var(--green-600);\">
                                {{ proposition_reunion.nbrVoteAccept }}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
</main>
{% endblock %}
", "Front/proposition/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\proposition\\show.html.twig");
    }
}
