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
class __TwigTemplate_4871ee60fb552f55846bde383a3c5f71 extends Template
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
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --gray-800: #1F2937;
            --gray-900: #111827;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 24px;
            background: radial-gradient(circle at top left, #fee2e2 0, #ffffff 45%);
            color: var(--gray-900);
            line-height: 1.5;
        }

        .page {
            max-width: 960px;
            margin: 0 auto;
            background: white;
            border-radius: 18px;
            box-shadow: 0 16px 40px rgba(15,23,42,0.12);
            padding: 24px 26px 28px;
        }

        .header {
            display:flex;
            justify-content:space-between;
            align-items:flex-start;
            gap:16px;
            margin-bottom: 20px;
            padding: 18px 18px;
            border-radius: 16px;
            background: var(--primary-gradient);
            color:white;
        }
        .header-main { display:flex; flex-direction:column; gap:4px; }
        .title {
            font-size: 20px;
            font-weight: 800;
        }
        .subtitle {
            font-size: 13px;
            opacity:0.9;
        }
        .meta {
            font-size: 11px;
            opacity:0.9;
        }
        .header-actions { text-align:right; }
        .print-button {
            padding:8px 14px;
            background:white;
            color:var(--primary-red-dark);
            border:none;
            border-radius:999px;
            font-size:12px;
            font-weight:600;
            cursor:pointer;
        }

        .section-title {
            margin-top: 22px;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 700;
            color: var(--gray-900);
            display:flex;
            align-items:center;
            gap:8px;
        }
        .section-title span.icon { font-size:18px; }
        .section-subtitle {
            font-size:11px;
            color:var(--gray-500);
            margin-bottom: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            margin-bottom: 14px;
        }
        th {
            background: var(--primary-red-dark);
            color: white;
            padding: 8px 10px;
            text-align: left;
            font-size:11px;
            text-transform:uppercase;
        }
        td {
            padding: 7px 10px;
            border-bottom: 1px solid var(--gray-100);
        }
        tr:nth-child(even) td { background: var(--gray-50); }

        .badge-faible {
            background:#16A34A; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-moyen {
            background:#FACC15; color:#92400E; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-eleve {
            background:#DC2626; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-cours {
            background:#0EA5E9; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-td {
            background:#7C3AED; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-tp {
            background:#F97316; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }

        .status-a-faire { color:#F59E0B; }
        .status-en-cours { color:#0EA5E9; }
        .status-terminee { color:#16A34A; }
        .status-en-retard { color:#DC2626; }

        .empty-message {
            text-align:center;
            color:var(--gray-400);
            padding:14px;
            font-style: italic;
        }

        .footer {
            margin-top: 18px;
            font-size: 10px;
            color:var(--gray-400);
            border-top: 1px solid var(--gray-100);
            padding-top:8px;
            text-align:right;
        }

        @media print {
            body {
                background:white;
                padding:0;
            }
            .page {
                box-shadow:none;
                border-radius:0;
                margin:0;
            }
            .print-button {
                display:none;
            }
        }
    </style>
</head>
<body>
    <div class=\"page\">
        <header class=\"header\">
            <div class=\"header-main\">
                <div class=\"title\">📚 Programme — ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 176, $this->source); })()), "nom", [], "any", false, false, false, 176), "html", null, true);
        yield "</div>
                <div class=\"subtitle\">
                    Niveau : ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 178, $this->source); })()), "niveau", [], "any", false, false, false, 178), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 178, $this->source); })()), "filiere", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " • Filière : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 178, $this->source); })()), "filiere", [], "any", false, false, false, 178), "html", null, true);
        }
        // line 179
        yield "                </div>
                <div class=\"meta\">Année universitaire : ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 180, $this->source); })()), "anneeuniversitaire", [], "any", false, false, false, 180), "html", null, true);
        yield "</div>
            </div>
            <div class=\"header-actions\">
                <button class=\"print-button\" onclick=\"window.print()\">🖨️ Imprimer / PDF</button>
            </div>
        </header>

        ";
        // line 188
        yield "        <section>
            <h2 class=\"section-title\"><span class=\"icon\">📘</span>Matières de la classe</h2>
            <p class=\"section-subtitle\">Liste complète des matières avec coefficient, charge horaire et complexité.</p>
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
                    ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 203, $this->source); })()), "matiereClasses", [], "any", false, false, false, 203));
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
            // line 204
            yield "                        <tr>
                            <td>";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 205), "html", null, true);
            yield "</td>
                            <td><strong>";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 206), "html", null, true);
            yield "</strong></td>
                            <td>";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "coefficient", [], "any", false, false, false, 207), "html", null, true);
            yield "</td>
                            <td>";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "chargehoraire", [], "any", false, false, false, 208), "html", null, true);
            yield "h</td>
                            <td>
                                ";
            // line 210
            $context["score"] = CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "scorecomplexite", [], "any", false, false, false, 210);
            // line 211
            yield "                                <span class=\"";
            if (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 211, $this->source); })()) >= 7)) {
                yield "badge-eleve";
            } elseif (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 211, $this->source); })()) >= 4)) {
                yield "badge-moyen";
            } else {
                yield "badge-faible";
            }
            yield "\">
                                    ";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 212, $this->source); })()), "html", null, true);
            yield "/10
                                </span>
                            </td>
                            <td>";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 215), "—")) : ("—")), "html", null, true);
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
        // line 217
        if (!$context['_iterated']) {
            // line 218
            yield "                        <tr><td colspan=\"6\" class=\"empty-message\">Aucune matière associée.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiere'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "                </tbody>
            </table>
        </section>

        ";
        // line 225
        yield "        <section>
            <h2 class=\"section-title\"><span class=\"icon\">📅</span>Séances prévues</h2>
            <p class=\"section-subtitle\">Planning des séances pour la classe (cours, TD, TP).</p>
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
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 240, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
            // line 241
            yield "                        <tr>
                            <td><strong>";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "jour", [], "any", false, false, false, 242), "html", null, true);
            yield "</strong></td>
                            <td>";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 243), "H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureFin", [], "any", false, false, false, 243), "H:i"), "html", null, true);
            yield "</td>
                            <td>";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "matiere", [], "any", false, false, false, 244), "nom", [], "any", false, false, false, 244), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 246
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "typeSeance", [], "any", false, false, false, 246) == "Cours")) {
                // line 247
                yield "                                    <span class=\"badge-cours\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "typeSeance", [], "any", false, false, false, 247), "html", null, true);
                yield "</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 248
$context["seance"], "typeSeance", [], "any", false, false, false, 248) == "TD")) {
                // line 249
                yield "                                    <span class=\"badge-td\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "typeSeance", [], "any", false, false, false, 249), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 251
                yield "                                    <span class=\"badge-tp\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "typeSeance", [], "any", false, false, false, 251), "html", null, true);
                yield "</span>
                                ";
            }
            // line 253
            yield "                            </td>
                            <td>";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "salle", [], "any", false, false, false, 254), "nom", [], "any", false, false, false, 254), "html", null, true);
            yield "</td>
                            <td>";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "mode", [], "any", false, false, false, 255), "html", null, true);
            yield "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 257
        if (!$context['_iterated']) {
            // line 258
            yield "                        <tr><td colspan=\"6\" class=\"empty-message\">Aucune séance prévue. Utilisez la génération de programme pour créer vos séances.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['seance'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        yield "                </tbody>
            </table>
        </section>

        ";
        // line 265
        yield "        <section>
            <h2 class=\"section-title\"><span class=\"icon\">✅</span>Tâches de l'étudiant</h2>
            <p class=\"section-subtitle\">Tâches générées pour cette classe avec priorité et statut.</p>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Priorité</th>
                        <th>Statut</th>
                        <th>Date début</th>
                        <th>Date fin</th>
                        <th>Échéance</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 281, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 282
            yield "                        <tr>
                            <td><strong>";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 283), "html", null, true);
            yield "</strong></td>
                            <td>";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "type", [], "any", false, false, false, 284), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"";
            // line 286
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 286) == "ELEVEE")) {
                yield "badge-eleve";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 286) == "MOYEN")) {
                yield "badge-moyen";
            } else {
                yield "badge-faible";
            }
            yield "\">
                                    ";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 287), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                ";
            // line 291
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 291) == "A_FAIRE")) {
                // line 292
                yield "                                    <span class=\"status-a-faire\">À faire</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 293
$context["tache"], "statut", [], "any", false, false, false, 293) == "EN_COURS")) {
                // line 294
                yield "                                    <span class=\"status-en-cours\">En cours</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 295
$context["tache"], "statut", [], "any", false, false, false, 295) == "TERMINEE")) {
                // line 296
                yield "                                    <span class=\"status-terminee\">Terminée</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 297
$context["tache"], "statut", [], "any", false, false, false, 297) == "EN_RETARD")) {
                // line 298
                yield "                                    <span class=\"status-en-retard\">En retard</span>
                                ";
            } else {
                // line 300
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 300), "html", null, true);
                yield "
                                ";
            }
            // line 302
            yield "                            </td>
                            <td>";
            // line 303
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateDebut", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateDebut", [], "any", false, false, false, 303), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                            <td>";
            // line 304
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateFin", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateFin", [], "any", false, false, false, 304), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                            <td>";
            // line 305
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateEcheance", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateEcheance", [], "any", false, false, false, 305), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 307
        if (!$context['_iterated']) {
            // line 308
            yield "                        <tr><td colspan=\"7\" class=\"empty-message\">Aucune tâche associée. Utilisez la génération de programme pour créer vos tâches.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        yield "                </tbody>
            </table>
        </section>

        <div class=\"footer\">
            Généré le ";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield " — ESPRIT Assistant Académique
        </div>
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
        return array (  561 => 315,  554 => 310,  547 => 308,  545 => 307,  538 => 305,  534 => 304,  530 => 303,  527 => 302,  521 => 300,  517 => 298,  515 => 297,  512 => 296,  510 => 295,  507 => 294,  505 => 293,  502 => 292,  500 => 291,  493 => 287,  483 => 286,  478 => 284,  474 => 283,  471 => 282,  466 => 281,  448 => 265,  442 => 260,  435 => 258,  433 => 257,  426 => 255,  422 => 254,  419 => 253,  413 => 251,  407 => 249,  405 => 248,  400 => 247,  398 => 246,  393 => 244,  387 => 243,  383 => 242,  380 => 241,  375 => 240,  358 => 225,  352 => 220,  345 => 218,  343 => 217,  328 => 215,  322 => 212,  311 => 211,  309 => 210,  304 => 208,  300 => 207,  296 => 206,  292 => 205,  289 => 204,  271 => 203,  254 => 188,  244 => 180,  241 => 179,  235 => 178,  230 => 176,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Programme — {{ classe.nom }} ({{ classe.anneeuniversitaire }})</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --gray-800: #1F2937;
            --gray-900: #111827;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 24px;
            background: radial-gradient(circle at top left, #fee2e2 0, #ffffff 45%);
            color: var(--gray-900);
            line-height: 1.5;
        }

        .page {
            max-width: 960px;
            margin: 0 auto;
            background: white;
            border-radius: 18px;
            box-shadow: 0 16px 40px rgba(15,23,42,0.12);
            padding: 24px 26px 28px;
        }

        .header {
            display:flex;
            justify-content:space-between;
            align-items:flex-start;
            gap:16px;
            margin-bottom: 20px;
            padding: 18px 18px;
            border-radius: 16px;
            background: var(--primary-gradient);
            color:white;
        }
        .header-main { display:flex; flex-direction:column; gap:4px; }
        .title {
            font-size: 20px;
            font-weight: 800;
        }
        .subtitle {
            font-size: 13px;
            opacity:0.9;
        }
        .meta {
            font-size: 11px;
            opacity:0.9;
        }
        .header-actions { text-align:right; }
        .print-button {
            padding:8px 14px;
            background:white;
            color:var(--primary-red-dark);
            border:none;
            border-radius:999px;
            font-size:12px;
            font-weight:600;
            cursor:pointer;
        }

        .section-title {
            margin-top: 22px;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 700;
            color: var(--gray-900);
            display:flex;
            align-items:center;
            gap:8px;
        }
        .section-title span.icon { font-size:18px; }
        .section-subtitle {
            font-size:11px;
            color:var(--gray-500);
            margin-bottom: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            margin-bottom: 14px;
        }
        th {
            background: var(--primary-red-dark);
            color: white;
            padding: 8px 10px;
            text-align: left;
            font-size:11px;
            text-transform:uppercase;
        }
        td {
            padding: 7px 10px;
            border-bottom: 1px solid var(--gray-100);
        }
        tr:nth-child(even) td { background: var(--gray-50); }

        .badge-faible {
            background:#16A34A; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-moyen {
            background:#FACC15; color:#92400E; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-eleve {
            background:#DC2626; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-cours {
            background:#0EA5E9; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-td {
            background:#7C3AED; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }
        .badge-tp {
            background:#F97316; color:white; padding:2px 8px; border-radius:999px; font-size:10px; font-weight:600;
        }

        .status-a-faire { color:#F59E0B; }
        .status-en-cours { color:#0EA5E9; }
        .status-terminee { color:#16A34A; }
        .status-en-retard { color:#DC2626; }

        .empty-message {
            text-align:center;
            color:var(--gray-400);
            padding:14px;
            font-style: italic;
        }

        .footer {
            margin-top: 18px;
            font-size: 10px;
            color:var(--gray-400);
            border-top: 1px solid var(--gray-100);
            padding-top:8px;
            text-align:right;
        }

        @media print {
            body {
                background:white;
                padding:0;
            }
            .page {
                box-shadow:none;
                border-radius:0;
                margin:0;
            }
            .print-button {
                display:none;
            }
        }
    </style>
</head>
<body>
    <div class=\"page\">
        <header class=\"header\">
            <div class=\"header-main\">
                <div class=\"title\">📚 Programme — {{ classe.nom }}</div>
                <div class=\"subtitle\">
                    Niveau : {{ classe.niveau }}{% if classe.filiere %} • Filière : {{ classe.filiere }}{% endif %}
                </div>
                <div class=\"meta\">Année universitaire : {{ classe.anneeuniversitaire }}</div>
            </div>
            <div class=\"header-actions\">
                <button class=\"print-button\" onclick=\"window.print()\">🖨️ Imprimer / PDF</button>
            </div>
        </header>

        {# Matières #}
        <section>
            <h2 class=\"section-title\"><span class=\"icon\">📘</span>Matières de la classe</h2>
            <p class=\"section-subtitle\">Liste complète des matières avec coefficient, charge horaire et complexité.</p>
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
        </section>

        {# Séances #}
        <section>
            <h2 class=\"section-title\"><span class=\"icon\">📅</span>Séances prévues</h2>
            <p class=\"section-subtitle\">Planning des séances pour la classe (cours, TD, TP).</p>
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
                        <tr><td colspan=\"6\" class=\"empty-message\">Aucune séance prévue. Utilisez la génération de programme pour créer vos séances.</td></tr>
                    {% endfor %}
                </tbody>
            </table>
        </section>

        {# Tâches #}
        <section>
            <h2 class=\"section-title\"><span class=\"icon\">✅</span>Tâches de l'étudiant</h2>
            <p class=\"section-subtitle\">Tâches générées pour cette classe avec priorité et statut.</p>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Priorité</th>
                        <th>Statut</th>
                        <th>Date début</th>
                        <th>Date fin</th>
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
                                    <span class=\"status-a-faire\">À faire</span>
                                {% elseif tache.statut == 'EN_COURS' %}
                                    <span class=\"status-en-cours\">En cours</span>
                                {% elseif tache.statut == 'TERMINEE' %}
                                    <span class=\"status-terminee\">Terminée</span>
                                {% elseif tache.statut == 'EN_RETARD' %}
                                    <span class=\"status-en-retard\">En retard</span>
                                {% else %}
                                    {{ tache.statut }}
                                {% endif %}
                            </td>
                            <td>{{ tache.dateDebut ? tache.dateDebut|date('d/m/Y H:i') : '—' }}</td>
                            <td>{{ tache.dateFin ? tache.dateFin|date('d/m/Y H:i') : '—' }}</td>
                            <td>{{ tache.dateEcheance ? tache.dateEcheance|date('d/m/Y') : '—' }}</td>
                        </tr>
                    {% else %}
                        <tr><td colspan=\"7\" class=\"empty-message\">Aucune tâche associée. Utilisez la génération de programme pour créer vos tâches.</td></tr>
                    {% endfor %}
                </tbody>
            </table>
        </section>

        <div class=\"footer\">
            Généré le {{ \"now\"|date(\"d/m/Y à H:i\") }} — ESPRIT Assistant Académique
        </div>
    </div>
</body>
</html>
", "classe/export_pdf.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\export_pdf.html.twig");
    }
}
