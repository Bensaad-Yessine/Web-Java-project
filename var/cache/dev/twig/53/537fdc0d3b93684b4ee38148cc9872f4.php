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

/* proposition_reunion/_list.html.twig */
class __TwigTemplate_e483ae1bc2355d89f15554a784c3ac8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
            // line 2
            yield "    <div class=\"card proposition-item\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 2), "html", null, true);
            yield "\" data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "titre", [], "any", false, false, false, 2)), "html", null, true);
            yield "\" data-groupe=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "idGroupe", [], "any", false, false, false, 2), "nomProjet", [], "any", false, false, false, 2)), "html", null, true);
            yield "\" style=\"border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm); transition: all var(--transition); border-left: 4px solid ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 2) == "Confirmée")) {
                yield "var(--green-500)";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 2) == "Annulée")) {
                yield "var(--red-500)";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 2) == "Reportée")) {
                yield "var(--orange-500)";
            } else {
                yield "var(--blue-500)";
            }
            yield ";\">
        <div style=\"padding: 24px;\">
            <div style=\"display: flex; justify-content: space-between; align-items: start; gap: 16px; flex-wrap: wrap; margin-bottom: 16px;\">
                <div style=\"flex: 1;\">
                    <h3 style=\"font-size: 18px; font-weight: 700; color: var(--gray-900); margin: 0 0 8px 0;\">
                        ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "titre", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "titre", [], "any", false, false, false, 7), "Sans titre")) : ("Sans titre")), "html", null, true);
            yield "
                    </h3>
                    <p style=\"color: var(--gray-600); margin: 0 0 12px 0; font-size: 14px;\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"vertical-align: middle; margin-right: 6px;\">
                            <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                            <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                            <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                        </svg>
                        ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "idGroupe", [], "any", false, false, false, 15), "nomProjet", [], "any", false, false, false, 15), "html", null, true);
            yield " · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "idGroupe", [], "any", false, false, false, 15), "matiere", [], "any", false, false, false, 15), "html", null, true);
            yield "
                    </p>
                </div>
                <span style=\"padding: 6px 14px; border-radius: var(--radius); font-size: 13px; font-weight: 600; background: ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 18) == "Confirmée")) {
                yield "var(--green-100)";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 18) == "Annulée")) {
                yield "var(--red-100)";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 18) == "Reportée")) {
                yield "var(--orange-100)";
            } else {
                yield "var(--blue-100)";
            }
            yield "; color: ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 18) == "Confirmée")) {
                yield "var(--green-900)";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 18) == "Annulée")) {
                yield "var(--red-900)";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 18) == "Reportée")) {
                yield "var(--orange-900)";
            } else {
                yield "var(--blue-900)";
            }
            yield ";\">
                    ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 19), "En attente")) : ("En attente")), "html", null, true);
            yield "
                </span>
            </div>

            <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-bottom: 16px;\">
                <div style=\"display: flex; align-items: center; gap: 10px;\">
                    <div style=\"width: 40px; height: 40px; border-radius: var(--radius); background: var(--blue-100); display: flex; align-items: center; justify-content: center;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--blue-600)\" stroke-width=\"2\">
                            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                        </svg>
                    </div>
                    <div>
                        <div style=\"font-size: 12px; color: var(--gray-500); margin-bottom: 2px;\">Date</div>
                        <div style=\"font-size: 14px; font-weight: 600; color: var(--gray-900);\">
                            ";
            // line 33
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true)) : ("Non définie"));
            yield "
                        </div>
                    </div>
                </div>

                <div style=\"display: flex; align-items: center; gap: 10px;\">
                    <div style=\"width: 40px; height: 40px; border-radius: var(--radius); background: var(--purple-100); display: flex; align-items: center; justify-content: center;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--purple-600)\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/>
                        </svg>
                    </div>
                    <div>
                        <div style=\"font-size: 12px; color: var(--gray-500); margin-bottom: 2px;\">Horaire</div>
                        <div style=\"font-size: 14px; font-weight: 600; color: var(--gray-900);\">
                            ";
            // line 47
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureDebut", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureDebut", [], "any", false, false, false, 47), "H:i"), "html", null, true)) : ("-"));
            yield " - ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureFin", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureFin", [], "any", false, false, false, 47), "H:i"), "html", null, true)) : ("-"));
            yield "
                        </div>
                    </div>
                </div>

                <div style=\"display: flex; align-items: center; gap: 10px;\">
                    <div style=\"width: 40px; height: 40px; border-radius: var(--radius); background: var(--orange-100); display: flex; align-items: center; justify-content: center;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--orange-600)\" stroke-width=\"2\">
                            <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"/><circle cx=\"12\" cy=\"10\" r=\"3\"/>
                        </svg>
                    </div>
                    <div>
                        <div style=\"font-size: 12px; color: var(--gray-500); margin-bottom: 2px;\">Lieu</div>
                        <div style=\"font-size: 14px; font-weight: 600; color: var(--gray-900);\">
                            ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "lieu", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "lieu", [], "any", false, false, false, 61), "Non défini")) : ("Non défini")), "html", null, true);
            yield "
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 67
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                <p style=\"color: var(--gray-600); font-size: 14px; line-height: 1.6; margin: 0 0 16px 0; padding: 12px; background: var(--gray-50); border-radius: var(--radius);\">
                    ";
                // line 69
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 69)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 69), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 69), "html", null, true)));
                yield "
                </p>
            ";
            }
            // line 72
            yield "
            <div style=\"display: flex; gap: 12px; padding-top: 16px; border-top: 1px solid var(--gray-200);\">
                <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" style=\"flex: 1; padding: 12px; background: linear-gradient(135deg, var(--red-500), var(--orange-500)); color: white; text-decoration: none; border-radius: var(--radius); font-weight: 600; font-size: 14px; text-align: center; transition: all var(--transition); display: inline-flex; align-items: center; justify-content: center; gap: 8px;\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"/><circle cx=\"12\" cy=\"12\" r=\"3\"/>
                    </svg>
                    Voir les détails
                </a>
                <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" style=\"padding: 12px 20px; background: white; color: var(--orange-600); text-decoration: none; border: 1px solid var(--orange-300); border-radius: var(--radius); font-weight: 600; font-size: 14px; transition: all var(--transition); display: inline-flex; align-items: center; gap: 8px;\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
                    </svg>
                    Modifier
                </a>
            </div>
        </div>
    </div>
";
            $context['_iterated'] = true;
        }
        // line 89
        if (!$context['_iterated']) {
            // line 90
            yield "    <div class=\"card\" style=\"text-align: center; padding: 60px 20px;\">
        <svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--gray-300)\" stroke-width=\"1.5\" style=\"margin: 0 auto 20px;\">
            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
        </svg>
        <h3 style=\"font-size: 20px; color: var(--gray-600); margin-bottom: 8px;\">Aucune proposition</h3>
        <p style=\"color: var(--gray-400); margin-bottom: 24px;\">Il n'y a aucune proposition de réunion dans vos groupes pour le moment.</p>
        <a href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
            yield "\" class=\"btn btn-primary\">Retour aux groupes</a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['proposition'], $context['_parent'], $context['_iterated']);
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
        return "proposition_reunion/_list.html.twig";
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
        return array (  227 => 96,  219 => 90,  217 => 89,  203 => 80,  194 => 74,  190 => 72,  184 => 69,  181 => 68,  179 => 67,  170 => 61,  151 => 47,  134 => 33,  117 => 19,  95 => 18,  87 => 15,  76 => 7,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for proposition in proposition_reunions %}
    <div class=\"card proposition-item\" data-status=\"{{ proposition.status }}\" data-title=\"{{ proposition.titre|lower }}\" data-groupe=\"{{ proposition.idGroupe.nomProjet|lower }}\" style=\"border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm); transition: all var(--transition); border-left: 4px solid {% if proposition.status == 'Confirmée' %}var(--green-500){% elseif proposition.status == 'Annulée' %}var(--red-500){% elseif proposition.status == 'Reportée' %}var(--orange-500){% else %}var(--blue-500){% endif %};\">
        <div style=\"padding: 24px;\">
            <div style=\"display: flex; justify-content: space-between; align-items: start; gap: 16px; flex-wrap: wrap; margin-bottom: 16px;\">
                <div style=\"flex: 1;\">
                    <h3 style=\"font-size: 18px; font-weight: 700; color: var(--gray-900); margin: 0 0 8px 0;\">
                        {{ proposition.titre|default('Sans titre') }}
                    </h3>
                    <p style=\"color: var(--gray-600); margin: 0 0 12px 0; font-size: 14px;\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"vertical-align: middle; margin-right: 6px;\">
                            <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                            <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                            <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                        </svg>
                        {{ proposition.idGroupe.nomProjet }} · {{ proposition.idGroupe.matiere }}
                    </p>
                </div>
                <span style=\"padding: 6px 14px; border-radius: var(--radius); font-size: 13px; font-weight: 600; background: {% if proposition.status == 'Confirmée' %}var(--green-100){% elseif proposition.status == 'Annulée' %}var(--red-100){% elseif proposition.status == 'Reportée' %}var(--orange-100){% else %}var(--blue-100){% endif %}; color: {% if proposition.status == 'Confirmée' %}var(--green-900){% elseif proposition.status == 'Annulée' %}var(--red-900){% elseif proposition.status == 'Reportée' %}var(--orange-900){% else %}var(--blue-900){% endif %};\">
                    {{ proposition.status|default('En attente') }}
                </span>
            </div>

            <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-bottom: 16px;\">
                <div style=\"display: flex; align-items: center; gap: 10px;\">
                    <div style=\"width: 40px; height: 40px; border-radius: var(--radius); background: var(--blue-100); display: flex; align-items: center; justify-content: center;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--blue-600)\" stroke-width=\"2\">
                            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                        </svg>
                    </div>
                    <div>
                        <div style=\"font-size: 12px; color: var(--gray-500); margin-bottom: 2px;\">Date</div>
                        <div style=\"font-size: 14px; font-weight: 600; color: var(--gray-900);\">
                            {{ proposition.dateReunion ? proposition.dateReunion|date('d/m/Y') : 'Non définie' }}
                        </div>
                    </div>
                </div>

                <div style=\"display: flex; align-items: center; gap: 10px;\">
                    <div style=\"width: 40px; height: 40px; border-radius: var(--radius); background: var(--purple-100); display: flex; align-items: center; justify-content: center;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--purple-600)\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/>
                        </svg>
                    </div>
                    <div>
                        <div style=\"font-size: 12px; color: var(--gray-500); margin-bottom: 2px;\">Horaire</div>
                        <div style=\"font-size: 14px; font-weight: 600; color: var(--gray-900);\">
                            {{ proposition.heureDebut ? proposition.heureDebut|date('H:i') : '-' }} - {{ proposition.heureFin ? proposition.heureFin|date('H:i') : '-' }}
                        </div>
                    </div>
                </div>

                <div style=\"display: flex; align-items: center; gap: 10px;\">
                    <div style=\"width: 40px; height: 40px; border-radius: var(--radius); background: var(--orange-100); display: flex; align-items: center; justify-content: center;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--orange-600)\" stroke-width=\"2\">
                            <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"/><circle cx=\"12\" cy=\"10\" r=\"3\"/>
                        </svg>
                    </div>
                    <div>
                        <div style=\"font-size: 12px; color: var(--gray-500); margin-bottom: 2px;\">Lieu</div>
                        <div style=\"font-size: 14px; font-weight: 600; color: var(--gray-900);\">
                            {{ proposition.lieu|default('Non défini') }}
                        </div>
                    </div>
                </div>
            </div>

            {% if proposition.description %}
                <p style=\"color: var(--gray-600); font-size: 14px; line-height: 1.6; margin: 0 0 16px 0; padding: 12px; background: var(--gray-50); border-radius: var(--radius);\">
                    {{ proposition.description|length > 120 ? proposition.description|slice(0, 120) ~ '...' : proposition.description }}
                </p>
            {% endif %}

            <div style=\"display: flex; gap: 12px; padding-top: 16px; border-top: 1px solid var(--gray-200);\">
                <a href=\"{{ path('front_proposition_reunion_show', {'id': proposition.id}) }}\" style=\"flex: 1; padding: 12px; background: linear-gradient(135deg, var(--red-500), var(--orange-500)); color: white; text-decoration: none; border-radius: var(--radius); font-weight: 600; font-size: 14px; text-align: center; transition: all var(--transition); display: inline-flex; align-items: center; justify-content: center; gap: 8px;\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"/><circle cx=\"12\" cy=\"12\" r=\"3\"/>
                    </svg>
                    Voir les détails
                </a>
                <a href=\"{{ path('front_proposition_reunion_edit', {'id': proposition.id}) }}\" style=\"padding: 12px 20px; background: white; color: var(--orange-600); text-decoration: none; border: 1px solid var(--orange-300); border-radius: var(--radius); font-weight: 600; font-size: 14px; transition: all var(--transition); display: inline-flex; align-items: center; gap: 8px;\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
                    </svg>
                    Modifier
                </a>
            </div>
        </div>
    </div>
{% else %}
    <div class=\"card\" style=\"text-align: center; padding: 60px 20px;\">
        <svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--gray-300)\" stroke-width=\"1.5\" style=\"margin: 0 auto 20px;\">
            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
        </svg>
        <h3 style=\"font-size: 20px; color: var(--gray-600); margin-bottom: 8px;\">Aucune proposition</h3>
        <p style=\"color: var(--gray-400); margin-bottom: 24px;\">Il n'y a aucune proposition de réunion dans vos groupes pour le moment.</p>
        <a href=\"{{ path('front_groupe_projet_index') }}\" class=\"btn btn-primary\">Retour aux groupes</a>
    </div>
{% endfor %}
", "proposition_reunion/_list.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\proposition_reunion\\_list.html.twig");
    }
}
