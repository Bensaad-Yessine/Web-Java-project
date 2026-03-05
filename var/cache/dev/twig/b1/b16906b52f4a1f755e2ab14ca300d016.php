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

/* user/classe/front_stats.html.twig */
class __TwigTemplate_bb8ebac8dc0efe27fb4b144b3cde5cb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_stats.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Statistiques ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        :root {
            --font-size: 16px;
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --secondary: #10B981;
            --secondary-dark: #059669;
            --warning: #F59E0B;
            --danger: #EF4444;
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
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.15);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.2);
            --radius-lg: 12px;
            --radius-xl: 16px;
            --transition: 250ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { font-size: var(--font-size); scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: radial-gradient(circle at top left, #fee2e2 0, #ffffff 40%), radial-gradient(circle at bottom right, #fee2e2 0, #ffffff 45%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .app-shell { display: flex; min-height: 100vh; }

        .sidebar {
            width: 260px;
            background: white;
            border-right: 1px solid var(--gray-200);
            padding: 24px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            box-shadow: 2px 0 20px rgba(220, 38, 38, 0.05);
        }

        .brand {
            margin-bottom: 28px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--gray-200);
        }
        .brand-row { display: flex; align-items: center; gap: 12px; }
        .brand-icon {
            background: var(--primary-gradient);
            width: 40px; height: 40px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            color: white; font-weight: 800; font-size: 18px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }
        .brand-title { font-weight: 800; font-size: 18px; color: var(--primary-red); }
        .brand-sub { font-size: 12px; color: var(--gray-500); }

        .nav-section-title {
            font-size: 12px; font-weight: 600; color: var(--gray-500);
            text-transform: uppercase; letter-spacing: 0.5px; margin: 18px 0 8px 4px;
        }

        .nav { display: flex; flex-direction: column; gap: 4px; margin-top: 8px; }
        .nav a {
            display: flex; align-items: center; gap: 10px; padding: 10px 12px;
            border-radius: 10px; color: var(--gray-700);
            text-decoration: none; transition: all var(--transition);
            font-weight: 500; font-size: 13px;
        }
        .nav a:hover, .nav a.active {
            background: var(--primary-red-light); color: var(--primary-red);
        }
        .nav a.active { font-weight: 600; border-left: 3px solid var(--primary-red); }

        .main { flex: 1; padding: 32px; max-width: 1200px; margin: 0 auto; width: 100%; }

        .page-header {
            margin-bottom: 28px;
            padding: 20px 22px;
            border-radius: 18px;
            background: linear-gradient(135deg, rgba(220,38,38,0.98), rgba(185,28,28,0.98));
            box-shadow: 0 18px 40px rgba(248,113,113,0.35);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }
        .page-header-main {
            display:flex; flex-direction:column; gap:4px;
        }
        .page-header-title {
            font-size: 22px; font-weight: 800;
        }
        .page-header-subtitle {
            font-size: 13px; opacity:0.9;
        }
        .page-header-meta {
            font-size: 12px; opacity:0.85;
        }
        .page-header-badge {
            font-size: 11px; padding: 6px 10px; border-radius: 999px;
            background: rgba(255,255,255,0.16);
            border: 1px solid rgba(248,250,252,0.45);
            font-weight: 600; text-transform: uppercase;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: white; padding: 18px 18px; border-radius: 16px;
            border: 1px solid rgba(248,250,252,1); box-shadow: 0 10px 26px rgba(15,23,42,0.08);
            text-align: left; transition: all var(--transition); position:relative; overflow:hidden;
        }
        .stat-card::before {
            content:\"\"; position:absolute; inset:0; background:radial-gradient(circle at top left, rgba(248,113,113,0.12), transparent 55%); opacity:0.9; pointer-events:none;
        }
        .stat-card:hover { transform: translateY(-3px); box-shadow: 0 16px 36px rgba(15,23,42,0.12); }
        .stat-label { font-size: 11px; color: var(--gray-500); font-weight: 600; text-transform: uppercase; letter-spacing:0.06em; position:relative; z-index:1; }
        .stat-value { font-size: 26px; font-weight: 800; color: var(--primary-red); display: block; position:relative; z-index:1; margin-top:4px; }
        .stat-caption { font-size: 11px; color: var(--gray-500); margin-top:6px; position:relative; z-index:1; }

        .section-container {
            background: white; border-radius: 20px;
            border: 1px solid rgba(248,250,252,1); box-shadow: 0 18px 40px rgba(15,23,42,0.12);
            margin-bottom: 26px; overflow: hidden; position:relative;
        }

        .section-header {
            padding: 18px 20px; background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            display: flex; justify-content: space-between; align-items: center;
        }

        .section-title { font-size: 16px; font-weight: 700; color: var(--gray-900); display:flex; align-items:center; gap:8px; }
        .section-title span.icon { font-size:18px; }

        .section-badge {
            font-size:11px; padding:4px 10px; border-radius:999px; background:var(--primary-red-light); color:var(--primary-red-dark); font-weight:600; text-transform:uppercase;
        }

        .section-body { padding: 20px 20px 22px; }

        .bar-group { margin-bottom: 18px; }
        .bar-label { display: flex; justify-content: space-between; margin-bottom: 6px; font-weight: 600; font-size: 13px; }
        .bar-bg { background: var(--gray-100); height: 10px; border-radius: 999px; overflow: hidden; position: relative; }
        .bar-fill { height: 100%; border-radius: 999px; transition: width 0.8s ease-out; }

        .fill-low { background: var(--secondary); }
        .fill-mid { background: var(--warning); }
        .fill-high { background: var(--primary-red); }

        .legend { display: flex; gap: 18px; margin-top: 16px; justify-content: flex-start; flex-wrap:wrap; font-size:12px; }
        .legend-item { display: flex; align-items: center; gap: 6px; color: var(--gray-600); }
        .dot { width: 10px; height: 10px; border-radius: 999px; }

        table.stats-table {
            width:100%; border-collapse:collapse; font-size:13px;
        }
        table.stats-table th {
            text-align:left; padding:8px 4px; border-bottom:1px solid var(--gray-200); font-size:11px; text-transform:uppercase; color:var(--gray-500);
        }
        table.stats-table td {
            padding:8px 4px; border-bottom:1px solid var(--gray-100); font-size:13px; color:var(--gray-800);
        }

        .footer { text-align: center; color: var(--gray-400); font-size: 12px; margin-top: 24px; }

        @media (max-width: 900px) {
            .app-shell { flex-direction: column; }
            .sidebar { position: static; width: 100%; height:auto; flex-direction:row; align-items:center; gap:16px; }
            .nav { flex-direction: row; flex-wrap:wrap; }
            .main { padding: 24px 16px 32px; }
            .page-header { flex-direction: column; align-items:flex-start; }
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <aside class=\"sidebar\">
            <div class=\"brand\">
                <div class=\"brand-row\">
                    <div class=\"brand-icon\">ES</div>
                    <div>
                        <div class=\"brand-title\">ESPRIT</div>
                        <div class=\"brand-sub\">Statistiques de classe</div>
                    </div>
                </div>
            </div>

            <div class=\"nav-section-title\">Navigation</div>
            <nav class=\"nav\">
                <a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg style=\"width:16px;height:16px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Tableau de bord
                </a>
                <a href=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 227, $this->source); })()), "id", [], "any", false, false, false, 227)]), "html", null, true);
        yield "\">
                    <svg style=\"width:16px;height:16px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Ma Classe
                </a>
                <a href=\"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_stats", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 234, $this->source); })()), "id", [], "any", false, false, false, 234)]), "html", null, true);
        yield "\" class=\"active\">
                    <svg style=\"width:16px;height:16px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 3v18h18\"/>
                        <path d=\"M7 15l4-6 4 5 3-7\"/>
                    </svg>
                    Statistiques
                </a>
            </nav>
        </aside>

        <main class=\"main\">
            <section class=\"page-header\">
                <div class=\"page-header-main\">
                    <div class=\"page-header-title\">Statistiques ";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 247, $this->source); })()), "nom", [], "any", false, false, false, 247), "html", null, true);
        yield "</div>
                    <div class=\"page-header-subtitle\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 248, $this->source); })()), "filiere", [], "any", false, false, false, 248), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 248, $this->source); })()), "niveau", [], "any", false, false, false, 248), "html", null, true);
        yield "</div>
                    <div class=\"page-header-meta\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 249, $this->source); })()), "html", null, true);
        yield " matières • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalHeures"]) || array_key_exists("totalHeures", $context) ? $context["totalHeures"] : (function () { throw new RuntimeError('Variable "totalHeures" does not exist.', 249, $this->source); })()), "html", null, true);
        yield "h de charge totale • Complexité moyenne ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complexiteMoyenne"]) || array_key_exists("complexiteMoyenne", $context) ? $context["complexiteMoyenne"] : (function () { throw new RuntimeError('Variable "complexiteMoyenne" does not exist.', 249, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
                <div>
                    <span class=\"page-header-badge\">Vue analytique de la classe</span>
                </div>
            </section>

            <section class=\"stats-grid\">
                <div class=\"stat-card\">
                    <div class=\"stat-label\">Nombre de matières</div>
                    <span class=\"stat-value\">";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 259, $this->source); })()), "html", null, true);
        yield "</span>
                    <div class=\"stat-caption\">Toutes les matières associées à ";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 260, $this->source); })()), "nom", [], "any", false, false, false, 260), "html", null, true);
        yield "</div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"stat-label\">Charge totale</div>
                    <span class=\"stat-value\">";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalHeures"]) || array_key_exists("totalHeures", $context) ? $context["totalHeures"] : (function () { throw new RuntimeError('Variable "totalHeures" does not exist.', 264, $this->source); })()), "html", null, true);
        yield "h</span>
                    <div class=\"stat-caption\">Somme des charges horaires de toutes les matières</div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"stat-label\">Complexité moyenne</div>
                    <span class=\"stat-value\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complexiteMoyenne"]) || array_key_exists("complexiteMoyenne", $context) ? $context["complexiteMoyenne"] : (function () { throw new RuntimeError('Variable "complexiteMoyenne" does not exist.', 269, $this->source); })()), "html", null, true);
        yield "</span>
                    <div class=\"stat-caption\">Sur une échelle de 1 à 10</div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"stat-label\">Total des coefficients</div>
                    <span class=\"stat-value\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCoefficient"]) || array_key_exists("totalCoefficient", $context) ? $context["totalCoefficient"] : (function () { throw new RuntimeError('Variable "totalCoefficient" does not exist.', 274, $this->source); })()), "html", null, true);
        yield "</span>
                    <div class=\"stat-caption\">Crédits / coefficients globaux</div>
                </div>
            </section>

            <section class=\"section-container\">
                <div class=\"section-header\">
                    <div class=\"section-title\"><span class=\"icon\">📊</span>Distribution de la complexité</div>
                    <span class=\"section-badge\">Vue globale des matières</span>
                </div>
                <div class=\"section-body\">
                    ";
        // line 285
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 285, $this->source); })()) > 0)) {
            // line 286
            yield "                        <div class=\"bar-group\">
                            <div class=\"bar-label\">
                                <span>Faible (1-3)</span>
                                <span>";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["faibleCount"]) || array_key_exists("faibleCount", $context) ? $context["faibleCount"] : (function () { throw new RuntimeError('Variable "faibleCount" does not exist.', 289, $this->source); })()), "html", null, true);
            yield " matières (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["faiblePercent"]) || array_key_exists("faiblePercent", $context) ? $context["faiblePercent"] : (function () { throw new RuntimeError('Variable "faiblePercent" does not exist.', 289, $this->source); })()), "html", null, true);
            yield "%)</span>
                            </div>
                            <div class=\"bar-bg\">
                                <div class=\"bar-fill fill-low\" style=\"width: ";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["faiblePercent"]) || array_key_exists("faiblePercent", $context) ? $context["faiblePercent"] : (function () { throw new RuntimeError('Variable "faiblePercent" does not exist.', 292, $this->source); })()), "html", null, true);
            yield "%\"></div>
                            </div>
                        </div>

                        <div class=\"bar-group\">
                            <div class=\"bar-label\">
                                <span>Moyenne (4-6)</span>
                                <span>";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["moyenCount"]) || array_key_exists("moyenCount", $context) ? $context["moyenCount"] : (function () { throw new RuntimeError('Variable "moyenCount" does not exist.', 299, $this->source); })()), "html", null, true);
            yield " matières (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["moyenPercent"]) || array_key_exists("moyenPercent", $context) ? $context["moyenPercent"] : (function () { throw new RuntimeError('Variable "moyenPercent" does not exist.', 299, $this->source); })()), "html", null, true);
            yield "%)</span>
                            </div>
                            <div class=\"bar-bg\">
                                <div class=\"bar-fill fill-mid\" style=\"width: ";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["moyenPercent"]) || array_key_exists("moyenPercent", $context) ? $context["moyenPercent"] : (function () { throw new RuntimeError('Variable "moyenPercent" does not exist.', 302, $this->source); })()), "html", null, true);
            yield "%\"></div>
                            </div>
                        </div>

                        <div class=\"bar-group\">
                            <div class=\"bar-label\">
                                <span>Élevée (7-10)</span>
                                <span>";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eleveCount"]) || array_key_exists("eleveCount", $context) ? $context["eleveCount"] : (function () { throw new RuntimeError('Variable "eleveCount" does not exist.', 309, $this->source); })()), "html", null, true);
            yield " matières (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["elevePercent"]) || array_key_exists("elevePercent", $context) ? $context["elevePercent"] : (function () { throw new RuntimeError('Variable "elevePercent" does not exist.', 309, $this->source); })()), "html", null, true);
            yield "%)</span>
                            </div>
                            <div class=\"bar-bg\">
                                <div class=\"bar-fill fill-high\" style=\"width: ";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["elevePercent"]) || array_key_exists("elevePercent", $context) ? $context["elevePercent"] : (function () { throw new RuntimeError('Variable "elevePercent" does not exist.', 312, $this->source); })()), "html", null, true);
            yield "%\"></div>
                            </div>
                        </div>

                        <div class=\"legend\">
                            <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--secondary)\"></span> Tranquille</div>
                            <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--warning)\"></span> Modérée</div>
                            <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--primary-red)\"></span> Intensive</div>
                        </div>
                    ";
        } else {
            // line 322
            yield "                        <div style=\"text-align: center; padding: 32px 12px;\">
                            <div style=\"font-size: 40px; margin-bottom: 10px;\">🔍</div>
                            <h2 style=\"color: var(--gray-800); margin-bottom: 6px; font-size:16px;\">Aucune donnée disponible</h2>
                            <p style=\"color: var(--gray-500); font-size:13px;\">Il n'y a pas encore de matières assignées à cette classe pour générer des statistiques.</p>
                        </div>
                    ";
        }
        // line 328
        yield "                </div>
            </section>

            ";
        // line 331
        if ((array_key_exists("quizPerformance", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["quizPerformance"]) || array_key_exists("quizPerformance", $context) ? $context["quizPerformance"] : (function () { throw new RuntimeError('Variable "quizPerformance" does not exist.', 331, $this->source); })())) > 0))) {
            // line 332
            yield "                <section class=\"section-container\">
                    <div class=\"section-header\">
                        <div class=\"section-title\"><span class=\"icon\">📈</span>Performance des quiz par matière</div>
                        <span class=\"section-badge\">Basé sur vos tentatives</span>
                    </div>
                    <div class=\"section-body\">
                        <table class=\"stats-table\">
                            <thead>
                                <tr>
                                    <th>Matière</th>
                                    <th style=\"text-align:center;\">Tentatives</th>
                                    <th style=\"text-align:center;\">Score moyen</th>
                                    <th style=\"text-align:center;\">Taux de réussite</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizPerformance"]) || array_key_exists("quizPerformance", $context) ? $context["quizPerformance"] : (function () { throw new RuntimeError('Variable "quizPerformance" does not exist.', 348, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 349
                yield "                                    <tr>
                                        <td>";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "matiereName", [], "any", false, false, false, 350), "html", null, true);
                yield "</td>
                                        <td style=\"text-align:center;\">";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attempts", [], "any", false, false, false, 351), "html", null, true);
                yield "</td>
                                        <td style=\"text-align:center;\">";
                // line 352
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "averagePercent", [], "any", false, false, false, 352), "html", null, true);
                yield "%</td>
                                        <td style=\"text-align:center;\">";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "passRate", [], "any", false, false, false, 353), "html", null, true);
                yield "%</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            yield "                            </tbody>
                        </table>
                    </div>
                </section>
            ";
        }
        // line 361
        yield "
            ";
        // line 362
        if ((array_key_exists("hardestQuestions", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["hardestQuestions"]) || array_key_exists("hardestQuestions", $context) ? $context["hardestQuestions"] : (function () { throw new RuntimeError('Variable "hardestQuestions" does not exist.', 362, $this->source); })())) > 0))) {
            // line 363
            yield "                <section class=\"section-container\">
                    <div class=\"section-header\">
                        <div class=\"section-title\"><span class=\"icon\">❓</span>Questions les plus difficiles</div>
                        <span class=\"section-badge\">Focalisez vos révisions</span>
                    </div>
                    <div class=\"section-body\">
                        <ul style=\"list-style:none; padding:0; margin:0; font-size:13px;\">
                            ";
            // line 370
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hardestQuestions"]) || array_key_exists("hardestQuestions", $context) ? $context["hardestQuestions"] : (function () { throw new RuntimeError('Variable "hardestQuestions" does not exist.', 370, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                // line 371
                yield "                                <li style=\"padding:10px 0; border-bottom:1px solid var(--gray-100);\">
                                    <div style=\"font-weight:600; color:var(--gray-800); margin-bottom:2px;\">";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 372), "html", null, true);
                yield "</div>
                                    <div style=\"font-size:12px; color:var(--gray-500);\">Matière : ";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "matiereName", [], "any", false, false, false, 373), "html", null, true);
                yield "</div>
                                    <div style=\"font-size:12px; margin-top:4px;\">
                                        Taux de réussite : <strong>";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "successRate", [], "any", false, false, false, 375), "html", null, true);
                yield "%</strong> — Tentatives : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "attempts", [], "any", false, false, false, 375), "html", null, true);
                yield "
                                    </div>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['q'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            yield "                        </ul>
                    </div>
                </section>
            ";
        }
        // line 383
        yield "
            <div class=\"footer\">
                &copy; 2026 ESPRIT — Généré par l'Assistant Académique
            </div>
        </main>
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
        return "user/classe/front_stats.html.twig";
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
        return array (  556 => 383,  550 => 379,  538 => 375,  533 => 373,  529 => 372,  526 => 371,  522 => 370,  513 => 363,  511 => 362,  508 => 361,  501 => 356,  492 => 353,  488 => 352,  484 => 351,  480 => 350,  477 => 349,  473 => 348,  455 => 332,  453 => 331,  448 => 328,  440 => 322,  427 => 312,  419 => 309,  409 => 302,  401 => 299,  391 => 292,  383 => 289,  378 => 286,  376 => 285,  362 => 274,  354 => 269,  346 => 264,  339 => 260,  335 => 259,  318 => 249,  312 => 248,  308 => 247,  292 => 234,  282 => 227,  273 => 221,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Statistiques {{ classe.nom }}</title>
    <style>
        :root {
            --font-size: 16px;
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --secondary: #10B981;
            --secondary-dark: #059669;
            --warning: #F59E0B;
            --danger: #EF4444;
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
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.15);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.2);
            --radius-lg: 12px;
            --radius-xl: 16px;
            --transition: 250ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { font-size: var(--font-size); scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: radial-gradient(circle at top left, #fee2e2 0, #ffffff 40%), radial-gradient(circle at bottom right, #fee2e2 0, #ffffff 45%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .app-shell { display: flex; min-height: 100vh; }

        .sidebar {
            width: 260px;
            background: white;
            border-right: 1px solid var(--gray-200);
            padding: 24px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            box-shadow: 2px 0 20px rgba(220, 38, 38, 0.05);
        }

        .brand {
            margin-bottom: 28px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--gray-200);
        }
        .brand-row { display: flex; align-items: center; gap: 12px; }
        .brand-icon {
            background: var(--primary-gradient);
            width: 40px; height: 40px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            color: white; font-weight: 800; font-size: 18px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }
        .brand-title { font-weight: 800; font-size: 18px; color: var(--primary-red); }
        .brand-sub { font-size: 12px; color: var(--gray-500); }

        .nav-section-title {
            font-size: 12px; font-weight: 600; color: var(--gray-500);
            text-transform: uppercase; letter-spacing: 0.5px; margin: 18px 0 8px 4px;
        }

        .nav { display: flex; flex-direction: column; gap: 4px; margin-top: 8px; }
        .nav a {
            display: flex; align-items: center; gap: 10px; padding: 10px 12px;
            border-radius: 10px; color: var(--gray-700);
            text-decoration: none; transition: all var(--transition);
            font-weight: 500; font-size: 13px;
        }
        .nav a:hover, .nav a.active {
            background: var(--primary-red-light); color: var(--primary-red);
        }
        .nav a.active { font-weight: 600; border-left: 3px solid var(--primary-red); }

        .main { flex: 1; padding: 32px; max-width: 1200px; margin: 0 auto; width: 100%; }

        .page-header {
            margin-bottom: 28px;
            padding: 20px 22px;
            border-radius: 18px;
            background: linear-gradient(135deg, rgba(220,38,38,0.98), rgba(185,28,28,0.98));
            box-shadow: 0 18px 40px rgba(248,113,113,0.35);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }
        .page-header-main {
            display:flex; flex-direction:column; gap:4px;
        }
        .page-header-title {
            font-size: 22px; font-weight: 800;
        }
        .page-header-subtitle {
            font-size: 13px; opacity:0.9;
        }
        .page-header-meta {
            font-size: 12px; opacity:0.85;
        }
        .page-header-badge {
            font-size: 11px; padding: 6px 10px; border-radius: 999px;
            background: rgba(255,255,255,0.16);
            border: 1px solid rgba(248,250,252,0.45);
            font-weight: 600; text-transform: uppercase;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: white; padding: 18px 18px; border-radius: 16px;
            border: 1px solid rgba(248,250,252,1); box-shadow: 0 10px 26px rgba(15,23,42,0.08);
            text-align: left; transition: all var(--transition); position:relative; overflow:hidden;
        }
        .stat-card::before {
            content:\"\"; position:absolute; inset:0; background:radial-gradient(circle at top left, rgba(248,113,113,0.12), transparent 55%); opacity:0.9; pointer-events:none;
        }
        .stat-card:hover { transform: translateY(-3px); box-shadow: 0 16px 36px rgba(15,23,42,0.12); }
        .stat-label { font-size: 11px; color: var(--gray-500); font-weight: 600; text-transform: uppercase; letter-spacing:0.06em; position:relative; z-index:1; }
        .stat-value { font-size: 26px; font-weight: 800; color: var(--primary-red); display: block; position:relative; z-index:1; margin-top:4px; }
        .stat-caption { font-size: 11px; color: var(--gray-500); margin-top:6px; position:relative; z-index:1; }

        .section-container {
            background: white; border-radius: 20px;
            border: 1px solid rgba(248,250,252,1); box-shadow: 0 18px 40px rgba(15,23,42,0.12);
            margin-bottom: 26px; overflow: hidden; position:relative;
        }

        .section-header {
            padding: 18px 20px; background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            display: flex; justify-content: space-between; align-items: center;
        }

        .section-title { font-size: 16px; font-weight: 700; color: var(--gray-900); display:flex; align-items:center; gap:8px; }
        .section-title span.icon { font-size:18px; }

        .section-badge {
            font-size:11px; padding:4px 10px; border-radius:999px; background:var(--primary-red-light); color:var(--primary-red-dark); font-weight:600; text-transform:uppercase;
        }

        .section-body { padding: 20px 20px 22px; }

        .bar-group { margin-bottom: 18px; }
        .bar-label { display: flex; justify-content: space-between; margin-bottom: 6px; font-weight: 600; font-size: 13px; }
        .bar-bg { background: var(--gray-100); height: 10px; border-radius: 999px; overflow: hidden; position: relative; }
        .bar-fill { height: 100%; border-radius: 999px; transition: width 0.8s ease-out; }

        .fill-low { background: var(--secondary); }
        .fill-mid { background: var(--warning); }
        .fill-high { background: var(--primary-red); }

        .legend { display: flex; gap: 18px; margin-top: 16px; justify-content: flex-start; flex-wrap:wrap; font-size:12px; }
        .legend-item { display: flex; align-items: center; gap: 6px; color: var(--gray-600); }
        .dot { width: 10px; height: 10px; border-radius: 999px; }

        table.stats-table {
            width:100%; border-collapse:collapse; font-size:13px;
        }
        table.stats-table th {
            text-align:left; padding:8px 4px; border-bottom:1px solid var(--gray-200); font-size:11px; text-transform:uppercase; color:var(--gray-500);
        }
        table.stats-table td {
            padding:8px 4px; border-bottom:1px solid var(--gray-100); font-size:13px; color:var(--gray-800);
        }

        .footer { text-align: center; color: var(--gray-400); font-size: 12px; margin-top: 24px; }

        @media (max-width: 900px) {
            .app-shell { flex-direction: column; }
            .sidebar { position: static; width: 100%; height:auto; flex-direction:row; align-items:center; gap:16px; }
            .nav { flex-direction: row; flex-wrap:wrap; }
            .main { padding: 24px 16px 32px; }
            .page-header { flex-direction: column; align-items:flex-start; }
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <aside class=\"sidebar\">
            <div class=\"brand\">
                <div class=\"brand-row\">
                    <div class=\"brand-icon\">ES</div>
                    <div>
                        <div class=\"brand-title\">ESPRIT</div>
                        <div class=\"brand-sub\">Statistiques de classe</div>
                    </div>
                </div>
            </div>

            <div class=\"nav-section-title\">Navigation</div>
            <nav class=\"nav\">
                <a href=\"{{ path('app_dashboard') }}\">
                    <svg style=\"width:16px;height:16px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Tableau de bord
                </a>
                <a href=\"{{ path('app_classe_front_show', {id: classe.id}) }}\">
                    <svg style=\"width:16px;height:16px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Ma Classe
                </a>
                <a href=\"{{ path('app_classe_stats', {id: classe.id}) }}\" class=\"active\">
                    <svg style=\"width:16px;height:16px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 3v18h18\"/>
                        <path d=\"M7 15l4-6 4 5 3-7\"/>
                    </svg>
                    Statistiques
                </a>
            </nav>
        </aside>

        <main class=\"main\">
            <section class=\"page-header\">
                <div class=\"page-header-main\">
                    <div class=\"page-header-title\">Statistiques {{ classe.nom }}</div>
                    <div class=\"page-header-subtitle\">{{ classe.filiere }} — {{ classe.niveau }}</div>
                    <div class=\"page-header-meta\">{{ total }} matières • {{ totalHeures }}h de charge totale • Complexité moyenne {{ complexiteMoyenne }}</div>
                </div>
                <div>
                    <span class=\"page-header-badge\">Vue analytique de la classe</span>
                </div>
            </section>

            <section class=\"stats-grid\">
                <div class=\"stat-card\">
                    <div class=\"stat-label\">Nombre de matières</div>
                    <span class=\"stat-value\">{{ total }}</span>
                    <div class=\"stat-caption\">Toutes les matières associées à {{ classe.nom }}</div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"stat-label\">Charge totale</div>
                    <span class=\"stat-value\">{{ totalHeures }}h</span>
                    <div class=\"stat-caption\">Somme des charges horaires de toutes les matières</div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"stat-label\">Complexité moyenne</div>
                    <span class=\"stat-value\">{{ complexiteMoyenne }}</span>
                    <div class=\"stat-caption\">Sur une échelle de 1 à 10</div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"stat-label\">Total des coefficients</div>
                    <span class=\"stat-value\">{{ totalCoefficient }}</span>
                    <div class=\"stat-caption\">Crédits / coefficients globaux</div>
                </div>
            </section>

            <section class=\"section-container\">
                <div class=\"section-header\">
                    <div class=\"section-title\"><span class=\"icon\">📊</span>Distribution de la complexité</div>
                    <span class=\"section-badge\">Vue globale des matières</span>
                </div>
                <div class=\"section-body\">
                    {% if total > 0 %}
                        <div class=\"bar-group\">
                            <div class=\"bar-label\">
                                <span>Faible (1-3)</span>
                                <span>{{ faibleCount }} matières ({{ faiblePercent }}%)</span>
                            </div>
                            <div class=\"bar-bg\">
                                <div class=\"bar-fill fill-low\" style=\"width: {{ faiblePercent }}%\"></div>
                            </div>
                        </div>

                        <div class=\"bar-group\">
                            <div class=\"bar-label\">
                                <span>Moyenne (4-6)</span>
                                <span>{{ moyenCount }} matières ({{ moyenPercent }}%)</span>
                            </div>
                            <div class=\"bar-bg\">
                                <div class=\"bar-fill fill-mid\" style=\"width: {{ moyenPercent }}%\"></div>
                            </div>
                        </div>

                        <div class=\"bar-group\">
                            <div class=\"bar-label\">
                                <span>Élevée (7-10)</span>
                                <span>{{ eleveCount }} matières ({{ elevePercent }}%)</span>
                            </div>
                            <div class=\"bar-bg\">
                                <div class=\"bar-fill fill-high\" style=\"width: {{ elevePercent }}%\"></div>
                            </div>
                        </div>

                        <div class=\"legend\">
                            <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--secondary)\"></span> Tranquille</div>
                            <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--warning)\"></span> Modérée</div>
                            <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--primary-red)\"></span> Intensive</div>
                        </div>
                    {% else %}
                        <div style=\"text-align: center; padding: 32px 12px;\">
                            <div style=\"font-size: 40px; margin-bottom: 10px;\">🔍</div>
                            <h2 style=\"color: var(--gray-800); margin-bottom: 6px; font-size:16px;\">Aucune donnée disponible</h2>
                            <p style=\"color: var(--gray-500); font-size:13px;\">Il n'y a pas encore de matières assignées à cette classe pour générer des statistiques.</p>
                        </div>
                    {% endif %}
                </div>
            </section>

            {% if quizPerformance is defined and quizPerformance|length > 0 %}
                <section class=\"section-container\">
                    <div class=\"section-header\">
                        <div class=\"section-title\"><span class=\"icon\">📈</span>Performance des quiz par matière</div>
                        <span class=\"section-badge\">Basé sur vos tentatives</span>
                    </div>
                    <div class=\"section-body\">
                        <table class=\"stats-table\">
                            <thead>
                                <tr>
                                    <th>Matière</th>
                                    <th style=\"text-align:center;\">Tentatives</th>
                                    <th style=\"text-align:center;\">Score moyen</th>
                                    <th style=\"text-align:center;\">Taux de réussite</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for row in quizPerformance %}
                                    <tr>
                                        <td>{{ row.matiereName }}</td>
                                        <td style=\"text-align:center;\">{{ row.attempts }}</td>
                                        <td style=\"text-align:center;\">{{ row.averagePercent }}%</td>
                                        <td style=\"text-align:center;\">{{ row.passRate }}%</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </section>
            {% endif %}

            {% if hardestQuestions is defined and hardestQuestions|length > 0 %}
                <section class=\"section-container\">
                    <div class=\"section-header\">
                        <div class=\"section-title\"><span class=\"icon\">❓</span>Questions les plus difficiles</div>
                        <span class=\"section-badge\">Focalisez vos révisions</span>
                    </div>
                    <div class=\"section-body\">
                        <ul style=\"list-style:none; padding:0; margin:0; font-size:13px;\">
                            {% for q in hardestQuestions %}
                                <li style=\"padding:10px 0; border-bottom:1px solid var(--gray-100);\">
                                    <div style=\"font-weight:600; color:var(--gray-800); margin-bottom:2px;\">{{ q.question }}</div>
                                    <div style=\"font-size:12px; color:var(--gray-500);\">Matière : {{ q.matiereName }}</div>
                                    <div style=\"font-size:12px; margin-top:4px;\">
                                        Taux de réussite : <strong>{{ q.successRate }}%</strong> — Tentatives : {{ q.attempts }}
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </section>
            {% endif %}

            <div class=\"footer\">
                &copy; 2026 ESPRIT — Généré par l'Assistant Académique
            </div>
        </main>
    </div>
</body>
</html>
", "user/classe/front_stats.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\classe\\front_stats.html.twig");
    }
}
