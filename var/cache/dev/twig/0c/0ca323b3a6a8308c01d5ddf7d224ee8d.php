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

/* classe/export_pdf.html.twig */
class __TwigTemplate_3060914519f2f3674b93c887a8042a96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/export_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Programme — ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 5, $this->source); })()), "anneeuniversitaire", [], "any", false, false, false, 5), "html", null, true);
        yield ")</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; color: #333; }
        h1 { font-size: 20px; color: #2c3e50; margin-bottom: 4px; }
        .subtitle { font-size: 13px; color: #666; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; font-size: 13px; margin-bottom: 20px; }
        th { background: #2c3e50; color: white; padding: 10px 12px; text-align: left; }
        td { padding: 9px 12px; border-bottom: 1px solid #eee; }
        tr:nth-child(even) td { background: #f8f9fa; }
        .badge-faible { background:#28a745; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-moyen { background:#ffc107; color:#333; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-eleve { background:#dc3545; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-cours { background:#17a2b8; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-td { background:#6f42c1; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-tp { background:#fd7e14; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .footer { margin-top: 30px; font-size: 11px; color:#999; border-top: 1px solid #eee; padding-top:10px; }
        .section-title { margin-top: 30px; font-size: 18px; color: #2c3e50; border-bottom: 2px solid #2c3e50; padding-bottom: 5px; }
        .empty-message { text-align:center; color:#999; padding:20px; font-style: italic; }
        @media print { button { display: none; } }
    </style>
</head>
<body>
    <div style=\"display:flex; justify-content:space-between; align-items:flex-start;\">
        <div>
            <h1>📚 Programme — ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "</h1>
            <p class=\"subtitle\">
                Niveau : ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 31, $this->source); })()), "niveau", [], "any", false, false, false, 31), "html", null, true);
        yield "
                ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 32, $this->source); })()), "filiere", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " | Filière : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 32, $this->source); })()), "filiere", [], "any", false, false, false, 32), "html", null, true);
        }
        // line 33
        yield "                | Année : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 33, $this->source); })()), "anneeuniversitaire", [], "any", false, false, false, 33), "html", null, true);
        yield "
            </p>
        </div>
        <div style=\"text-align:right\">
            <button onclick=\"window.print()\" style=\"padding:8px 16px; background:#2c3e50; color:white; border:none; border-radius:4px; cursor:pointer;\">
                🖨️ Imprimer / PDF
            </button>
        </div>
    </div>

    ";
        // line 44
        yield "    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Matière</th>
                <th>Coefficient</th>
                <th>Heures</th>
                <th>Complexité</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 56, $this->source); })()), "matiereClasses", [], "any", false, false, false, 56));
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
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 57
            yield "            <tr>
                <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                <td><strong>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 59), "html", null, true);
            yield "</strong></td>
                <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "coefficient", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "chargehoraire", [], "any", false, false, false, 61), "html", null, true);
            yield "h</td>
                <td>
                    ";
            // line 63
            $context["score"] = CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "scorecomplexite", [], "any", false, false, false, 63);
            // line 64
            yield "                    <span class=\"";
            if (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 64, $this->source); })()) >= 7)) {
                yield "badge-eleve";
            } elseif (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 64, $this->source); })()) >= 4)) {
                yield "badge-moyen";
            } else {
                yield "badge-faible";
            }
            yield "\">
                        ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 65, $this->source); })()), "html", null, true);
            yield "/10
                    </span>
                </td>
                <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 68), "—")) : ("—")), "html", null, true);
            yield "</td>
            </tr>
            ";
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
        // line 70
        if (!$context['_iterated']) {
            // line 71
            yield "            <tr><td colspan=\"6\" class=\"empty-message\">Aucune matière associée.</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiere'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "        </tbody>
    </table>

    ";
        // line 77
        yield "    <h2 class=\"section-title\">📅 Séances</h2>
    <table>
        <thead>
            <tr>
                <th>Jour</th>
                <th>Horaire</th>
                <th>Matière</th>
                <th>Type</th>
                <th>Salle</th>
                <th>Mode</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 90, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
            // line 91
            yield "            <tr>
                <td><strong>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "jour", [], "any", false, false, false, 92), "html", null, true);
            yield "</strong></td>
                <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 93), "H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureFin", [], "any", false, false, false, 93), "H:i"), "html", null, true);
            yield "</td>
                <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "matiere", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 96
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "typeSeance", [], "any", false, false, false, 96) == "Cours")) {
                // line 97
                yield "                        <span class=\"badge-cours\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "typeSeance", [], "any", false, false, false, 97), "html", null, true);
                yield "</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 98
$context["seance"], "typeSeance", [], "any", false, false, false, 98) == "TD")) {
                // line 99
                yield "                        <span class=\"badge-td\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "typeSeance", [], "any", false, false, false, 99), "html", null, true);
                yield "</span>
                    ";
            } else {
                // line 101
                yield "                        <span class=\"badge-tp\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "typeSeance", [], "any", false, false, false, 101), "html", null, true);
                yield "</span>
                    ";
            }
            // line 103
            yield "                </td>
                <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "salle", [], "any", false, false, false, 104), "nom", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
                <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "mode", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 107
        if (!$context['_iterated']) {
            // line 108
            yield "            <tr><td colspan=\"6\" class=\"empty-message\">Aucune séance prévue. Cliquez sur \"Générer le Programme\" pour créer vos séances.</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['seance'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "        </tbody>
    </table>

    ";
        // line 114
        yield "    <h2 class=\"section-title\">✅ Tâches</h2>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Type</th>
                <th>Priorité</th>
                <th>Statut</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Échéance</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 129
            yield "            <tr>
                <td><strong>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 130), "html", null, true);
            yield "</strong></td>
                <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "type", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                <td>
                    <span class=\"";
            // line 133
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 133) == "ELEVEE")) {
                yield "badge-eleve";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 133) == "MOYEN")) {
                yield "badge-moyen";
            } else {
                yield "badge-faible";
            }
            yield "\">
                        ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 134), "html", null, true);
            yield "
                    </span>
                </td>
                <td>
                    ";
            // line 138
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 138) == "A_FAIRE")) {
                // line 139
                yield "                        <span style=\"color:#ffc107;\">À faire</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 140
$context["tache"], "statut", [], "any", false, false, false, 140) == "EN_COURS")) {
                // line 141
                yield "                        <span style=\"color:#17a2b8;\">En cours</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 142
$context["tache"], "statut", [], "any", false, false, false, 142) == "TERMINEE")) {
                // line 143
                yield "                        <span style=\"color:#28a745;\">Terminée</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 144
$context["tache"], "statut", [], "any", false, false, false, 144) == "EN_RETARD")) {
                // line 145
                yield "                        <span style=\"color:#dc3545;\">En retard</span>
                    ";
            } else {
                // line 147
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 147), "html", null, true);
                yield "
                    ";
            }
            // line 149
            yield "                </td>
                <td>";
            // line 150
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateDebut", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateDebut", [], "any", false, false, false, 150), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                <td>";
            // line 151
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateFin", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateFin", [], "any", false, false, false, 151), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                <td>";
            // line 152
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateEcheance", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateEcheance", [], "any", false, false, false, 152), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 154
        if (!$context['_iterated']) {
            // line 155
            yield "            <tr><td colspan=\"7\" class=\"empty-message\">Aucune tâche associée. Cliquez sur \"Générer le Programme\" pour créer vos tâches.</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "        </tbody>
    </table>

    <div class=\"footer\">
        Généré le ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield " | ESPRIT Management System
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "classe/export_pdf.html.twig";
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
        return array (  408 => 161,  402 => 157,  395 => 155,  393 => 154,  386 => 152,  382 => 151,  378 => 150,  375 => 149,  369 => 147,  365 => 145,  363 => 144,  360 => 143,  358 => 142,  355 => 141,  353 => 140,  350 => 139,  348 => 138,  341 => 134,  331 => 133,  326 => 131,  322 => 130,  319 => 129,  314 => 128,  298 => 114,  293 => 110,  286 => 108,  284 => 107,  277 => 105,  273 => 104,  270 => 103,  264 => 101,  258 => 99,  256 => 98,  251 => 97,  249 => 96,  244 => 94,  238 => 93,  234 => 92,  231 => 91,  226 => 90,  211 => 77,  206 => 73,  199 => 71,  197 => 70,  182 => 68,  176 => 65,  165 => 64,  163 => 63,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  143 => 57,  125 => 56,  111 => 44,  97 => 33,  92 => 32,  88 => 31,  83 => 29,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Programme — {{ classe.nom }} ({{ classe.anneeuniversitaire }})</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; color: #333; }
        h1 { font-size: 20px; color: #2c3e50; margin-bottom: 4px; }
        .subtitle { font-size: 13px; color: #666; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; font-size: 13px; margin-bottom: 20px; }
        th { background: #2c3e50; color: white; padding: 10px 12px; text-align: left; }
        td { padding: 9px 12px; border-bottom: 1px solid #eee; }
        tr:nth-child(even) td { background: #f8f9fa; }
        .badge-faible { background:#28a745; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-moyen { background:#ffc107; color:#333; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-eleve { background:#dc3545; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-cours { background:#17a2b8; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-td { background:#6f42c1; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .badge-tp { background:#fd7e14; color:white; padding:2px 8px; border-radius:12px; font-size:11px; }
        .footer { margin-top: 30px; font-size: 11px; color:#999; border-top: 1px solid #eee; padding-top:10px; }
        .section-title { margin-top: 30px; font-size: 18px; color: #2c3e50; border-bottom: 2px solid #2c3e50; padding-bottom: 5px; }
        .empty-message { text-align:center; color:#999; padding:20px; font-style: italic; }
        @media print { button { display: none; } }
    </style>
</head>
<body>
    <div style=\"display:flex; justify-content:space-between; align-items:flex-start;\">
        <div>
            <h1>📚 Programme — {{ classe.nom }}</h1>
            <p class=\"subtitle\">
                Niveau : {{ classe.niveau }}
                {% if classe.filiere %} | Filière : {{ classe.filiere }}{% endif %}
                | Année : {{ classe.anneeuniversitaire }}
            </p>
        </div>
        <div style=\"text-align:right\">
            <button onclick=\"window.print()\" style=\"padding:8px 16px; background:#2c3e50; color:white; border:none; border-radius:4px; cursor:pointer;\">
                🖨️ Imprimer / PDF
            </button>
        </div>
    </div>

    {# Matières #}
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Matière</th>
                <th>Coefficient</th>
                <th>Heures</th>
                <th>Complexité</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            {% for matiere in classe.matiereClasses %}
            <tr>
                <td>{{ loop.index }}</td>
                <td><strong>{{ matiere.nom }}</strong></td>
                <td>{{ matiere.coefficient }}</td>
                <td>{{ matiere.chargehoraire }}h</td>
                <td>
                    {% set score = matiere.scorecomplexite %}
                    <span class=\"{% if score >= 7 %}badge-eleve{% elseif score >= 4 %}badge-moyen{% else %}badge-faible{% endif %}\">
                        {{ score }}/10
                    </span>
                </td>
                <td>{{ matiere.description|default('—') }}</td>
            </tr>
            {% else %}
            <tr><td colspan=\"6\" class=\"empty-message\">Aucune matière associée.</td></tr>
            {% endfor %}
        </tbody>
    </table>

    {# Séances - utilisant la variable seances passée depuis le controller #}
    <h2 class=\"section-title\">📅 Séances</h2>
    <table>
        <thead>
            <tr>
                <th>Jour</th>
                <th>Horaire</th>
                <th>Matière</th>
                <th>Type</th>
                <th>Salle</th>
                <th>Mode</th>
            </tr>
        </thead>
        <tbody>
            {% for seance in seances %}
            <tr>
                <td><strong>{{ seance.jour }}</strong></td>
                <td>{{ seance.heureDebut|date('H:i') }} - {{ seance.heureFin|date('H:i') }}</td>
                <td>{{ seance.matiere.nom }}</td>
                <td>
                    {% if seance.typeSeance == 'Cours' %}
                        <span class=\"badge-cours\">{{ seance.typeSeance }}</span>
                    {% elseif seance.typeSeance == 'TD' %}
                        <span class=\"badge-td\">{{ seance.typeSeance }}</span>
                    {% else %}
                        <span class=\"badge-tp\">{{ seance.typeSeance }}</span>
                    {% endif %}
                </td>
                <td>{{ seance.salle.nom }}</td>
                <td>{{ seance.mode }}</td>
            </tr>
            {% else %}
            <tr><td colspan=\"6\" class=\"empty-message\">Aucune séance prévue. Cliquez sur \"Générer le Programme\" pour créer vos séances.</td></tr>
            {% endfor %}
        </tbody>
    </table>

    {# Tâches - utilisant la variable taches passée depuis le controller #}
    <h2 class=\"section-title\">✅ Tâches</h2>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Type</th>
                <th>Priorité</th>
                <th>Statut</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Échéance</th>
            </tr>
        </thead>
        <tbody>
            {% for tache in taches %}
            <tr>
                <td><strong>{{ tache.titre }}</strong></td>
                <td>{{ tache.type }}</td>
                <td>
                    <span class=\"{% if tache.priorite == 'ELEVEE' %}badge-eleve{% elseif tache.priorite == 'MOYEN' %}badge-moyen{% else %}badge-faible{% endif %}\">
                        {{ tache.priorite }}
                    </span>
                </td>
                <td>
                    {% if tache.statut == 'A_FAIRE' %}
                        <span style=\"color:#ffc107;\">À faire</span>
                    {% elseif tache.statut == 'EN_COURS' %}
                        <span style=\"color:#17a2b8;\">En cours</span>
                    {% elseif tache.statut == 'TERMINEE' %}
                        <span style=\"color:#28a745;\">Terminée</span>
                    {% elseif tache.statut == 'EN_RETARD' %}
                        <span style=\"color:#dc3545;\">En retard</span>
                    {% else %}
                        {{ tache.statut }}
                    {% endif %}
                </td>
                <td>{{ tache.dateDebut ? tache.dateDebut|date('d/m/Y H:i') : '—' }}</td>
                <td>{{ tache.dateFin ? tache.dateFin|date('d/m/Y H:i') : '—' }}</td>
                <td>{{ tache.dateEcheance ? tache.dateEcheance|date('d/m/Y') : '—' }}</td>
            </tr>
            {% else %}
            <tr><td colspan=\"7\" class=\"empty-message\">Aucune tâche associée. Cliquez sur \"Générer le Programme\" pour créer vos tâches.</td></tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"footer\">
        Généré le {{ \"now\"|date(\"d/m/Y à H:i\") }} | ESPRIT Management System
    </div>
</body>
</html>
", "classe/export_pdf.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\export_pdf.html.twig");
    }
}
