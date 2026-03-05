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

/* user/classe/front_suggestions.html.twig */
class __TwigTemplate_970280e1e98a772b88b3b3ef6af2c6a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_suggestions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_suggestions.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Recommandations AI ";
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
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .app-shell { display: flex; min-height: 100vh; }

        .sidebar {
            width: 280px;
            background: white;
            border-right: 1px solid var(--gray-200);
            padding: 24px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            box-shadow: 2px 0 20px rgba(220, 38, 38, 0.05);
        }

        .brand {
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--gray-200);
        }

        .brand-row { display: flex; align-items: center; gap: 12px; }
        .brand-icon {
            background: var(--primary-gradient);
            width: 44px; height: 44px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            color: white; font-weight: 800; font-size: 18px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }

        .brand-title { font-weight: 800; font-size: 20px; color: var(--primary-red); }
        .brand-sub { font-size: 12px; color: var(--gray-500); margin-top: 2px; }

        .user-session {
            margin-top: 24px;
            padding: 20px;
            background: var(--gray-50);
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            position: relative;
        }

        .user-session::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px;
            background: var(--primary-gradient); border-radius: var(--radius-lg) var(--radius-lg) 0 0;
        }

        .user-info { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; }

        .avatar {
            width: 48px; height: 48px; border-radius: 50%;
            background: var(--primary-gradient); color: white;
            display: flex; align-items: center; justify-content: center;
            font-weight: 600; font-size: 18px; border: 3px solid white;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
        }

        .user-details h3 { font-size: 16px; font-weight: 600; color: var(--gray-800); margin-bottom: 2px; }
        .user-details p { margin: 0; font-size: 13px; color: var(--gray-600); }

        .session-info { font-size: 12px; color: var(--gray-600); padding-top: 16px; border-top: 1px solid var(--gray-200); }
        .session-info div { margin-bottom: 6px; display: flex; justify-content: space-between; }
        .session-info strong { color: var(--gray-800); font-weight: 600; }

        .nav { display: flex; flex-direction: column; gap: 4px; margin-top: 24px; }
        .nav a {
            display: flex; align-items: center; gap: 12px; padding: 14px 16px;
            border-radius: var(--radius-lg); color: var(--gray-700);
            text-decoration: none; transition: all var(--transition);
            font-weight: 500; font-size: 14px;
        }
        .nav a:hover, .nav a.active { background: var(--primary-red-light); color: var(--primary-red); }
        .nav a.active { font-weight: 600; border-left: 3px solid var(--primary-red); }

        .nav-section-title {
            font-size: 12px; font-weight: 600; color: var(--gray-500);
            text-transform: uppercase; letter-spacing: 0.5px; margin: 24px 0 8px 16px;
        }

        .main { flex: 1; padding: 32px; max-width: 1400px; margin: 0 auto; width: 100%; }

        .header { margin-bottom: 32px; display:flex; justify-content: space-between; align-items: flex-start; gap:16px; }
        .header-content h1 {
            font-size: 32px; font-weight: 800; margin: 0;
            background: var(--primary-gradient); -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .header-content p { color: var(--gray-500); margin-top: 8px; font-size: 15px; }

        .badge {
            padding: 4px 12px; border-radius: 999px; font-size: 12px; font-weight: 600;
        }
        .badge-red { background: var(--primary-red-light); color: var(--primary-red); }
        .badge-blue { background: #DBEAFE; color: #1E40AF; }

        .btn-link {
            font-size: 14px;
            color: #2563EB;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .btn-link:hover { text-decoration: underline; }

        .section-container {
            background: white;
            border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-md);
            margin-bottom: 24px;
            overflow: hidden;
        }

        .section-header {
            padding: 20px 24px;
            background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            display:flex;
            justify-content: space-between;
            align-items: center;
            gap:12px;
        }

        .section-title { font-size: 18px; font-weight: 700; color: var(--gray-900); }

        .suggestions-grid {
            padding: 20px 24px 24px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 16px;
        }

        .suggestion-card {
            position: relative;
            background: white;
            border-radius: 18px;
            border: 1px solid var(--gray-200);
            padding: 18px 18px 16px;
            box-shadow: 0 10px 24px rgba(15,23,42,0.06);
            overflow: hidden;
        }
        .suggestion-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top left, rgba(254,226,226,0.9), transparent 55%);
            opacity: 0.55;
            pointer-events: none;
        }
        .suggestion-card-inner {
            position: relative;
            z-index: 1;
        }
        .suggestion-header {
            display:flex;
            justify-content: space-between;
            align-items:flex-start;
            gap:10px;
            margin-bottom: 8px;
        }
        .suggestion-name { font-size: 16px; font-weight: 700; color: var(--gray-900); }
        .badge-ai {
            background: #EEF2FF;
            color: #4F46E5;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 3px 8px;
            border-radius: 999px;
            letter-spacing: 0.06em;
        }
        .suggestion-desc {
            font-size: 13px;
            color: var(--gray-600);
            margin-bottom: 10px;
        }
        .suggestion-meta {
            display:flex;
            flex-wrap:wrap;
            gap: 8px;
            font-size: 11px;
        }
        .pill {
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(255,255,255,0.9);
            border: 1px solid rgba(248,250,252,0.8);
            color: var(--gray-700);
            display:inline-flex;
            align-items:center;
            gap:6px;
        }
        .pill span.icon { font-size: 13px; }

        .empty-state {
            padding: 40px 24px;
            text-align: center;
            background: white;
        }
        .empty-state-icon { font-size: 40px; margin-bottom: 12px; }
        .empty-state-title { font-size: 18px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px; }
        .empty-state-text { font-size: 13px; color: var(--gray-500); }

        .note-box {
            margin-top: 16px;
            padding: 18px 20px;
            background: var(--gray-100);
            border-radius: 12px;
            border: 1px solid var(--gray-200);
            font-size: 13px;
            color: var(--gray-600);
        }

        @media (max-width: 1200px) {
            .app-shell { flex-direction: column; }
            .sidebar { width: 100%; height: auto; position: relative; padding: 16px; max-height: none; }
            .main { padding: 24px; }
        }
        @media (max-width: 768px) {
            .header { flex-direction: column; align-items:flex-start; }
            .header-content h1 { font-size: 26px; }
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
                        <div class=\"brand-sub\">Assistant Étudiant</div>
                    </div>
                </div>
            </div>

            <div class=\"user-session\">
                <div class=\"user-info\">
                    ";
        // line 292
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 292, $this->source); })()), "user", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 293
            yield "                        <div class=\"avatar\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "user", [], "any", false, false, false, 293), "nom", [], "any", false, false, false, 293)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "user", [], "any", false, false, false, 293), "prenom", [], "any", false, false, false, 293)), "html", null, true);
            yield "</div>
                        <div class=\"user-details\">
                            <h3>";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "user", [], "any", false, false, false, 295), "nom", [], "any", false, false, false, 295), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "user", [], "any", false, false, false, 295), "prenom", [], "any", false, false, false, 295), "html", null, true);
            yield "</h3>
                            <p>🏫 ";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 296, $this->source); })()), "nom", [], "any", false, false, false, 296), "html", null, true);
            yield "</p>
                        </div>
                    ";
        } else {
            // line 299
            yield "                        <div class=\"avatar\">?</div>
                        <div class=\"user-details\">
                            <h3>Invité</h3>
                            <p>🏫 ";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 302, $this->source); })()), "nom", [], "any", false, false, false, 302), "html", null, true);
            yield "</p>
                        </div>
                    ";
        }
        // line 305
        yield "                </div>
                <div class=\"session-info\">
                    ";
        // line 307
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 307, $this->source); })()), "user", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 308
            yield "                        <div><strong>Email:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "user", [], "any", false, false, false, 308), "email", [], "any", false, false, false, 308), "html", null, true);
            yield "</div>
                    ";
        } else {
            // line 310
            yield "                        <div><strong>Email:</strong> —</div>
                    ";
        }
        // line 312
        yield "                    <div><strong>Niveau:</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 312, $this->source); })()), "niveau", [], "any", false, false, false, 312), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <div class=\"nav-section-title\">Général</div>
                <a href=\"";
        // line 318
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Tableau de bord
                </a>

                <div class=\"nav-section-title\">Académique</div>
                <a href=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 326, $this->source); })()), "id", [], "any", false, false, false, 326)]), "html", null, true);
        yield "\" class=\"active\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Ma Classe
                </a>
                <a href=\"";
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_front_index");
        yield "\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                    </svg>
                    Mes Matières
                </a>

                <div class=\"nav-section-title\">Compte</div>
                <a href=\"";
        // line 341
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profil
                </a>
                <a href=\"";
        // line 348
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Déconnexion
                </a>
            </nav>
        </aside>

        <main class=\"main\">
            <header class=\"header\">
                <div class=\"header-content\">
                    <span class=\"badge badge-red\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 360, $this->source); })()), "filiere", [], "any", false, false, false, 360), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 360, $this->source); })()), "niveau", [], "any", false, false, false, 360), "html", null, true);
        yield "</span>
                    <h1>Recommandations AI</h1>
                    <p>Suggestions de matières complémentaires pour votre programme <strong>";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 362, $this->source); })()), "nom", [], "any", false, false, false, 362), "html", null, true);
        yield "</strong>.</p>
                </div>
                <a href=\"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 364, $this->source); })()), "id", [], "any", false, false, false, 364)]), "html", null, true);
        yield "\" class=\"btn-link\">
                    <span>← Retour à ma classe</span>
                </a>
            </header>

            <div class=\"section-container\">
                <div class=\"section-header\">
                    <div>
                        <h2 class=\"section-title\">Matières recommandées</h2>
                        <p style=\"font-size:13px; color:var(--gray-500); margin-top:4px;\">Basé sur des classes similaires (niveau, filière, année universitaire et filière globale).</p>
                    </div>
                    <span class=\"badge badge-blue\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 375, $this->source); })())), "html", null, true);
        yield " suggestion(s)</span>
                </div>

                ";
        // line 378
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 378, $this->source); })()))) {
            // line 379
            yield "                    <div class=\"empty-state\">
                        <div class=\"empty-state-icon\">✨</div>
                        <div class=\"empty-state-title\">Votre programme est déjà complet !</div>
                        <div class=\"empty-state-text\">Aucune matière complémentaire n'est nécessaire pour le moment selon le modèle AI.</div>
                    </div>
                ";
        } else {
            // line 385
            yield "                    <div class=\"suggestions-grid\">
                        ";
            // line 386
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 386, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 387
                yield "                            <div class=\"suggestion-card\">
                                <div class=\"suggestion-card-inner\">
                                    <div class=\"suggestion-header\">
                                        <div>
                                            <div class=\"badge-ai\">Suggestion AI</div>
                                            <div class=\"suggestion-name\">";
                // line 392
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 392), "html", null, true);
                yield "</div>
                                        </div>
                                    </div>
                                    ";
                // line 395
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 396
                    yield "                                        <p class=\"suggestion-desc\">";
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 396)) > 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 396), 0, 150) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 396), "html", null, true)));
                    yield "</p>
                                    ";
                }
                // line 398
                yield "
                                    <div class=\"suggestion-meta\">
                                        <span class=\"pill\"><span class=\"icon\">⚖️</span>Coeff ";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "coefficient", [], "any", false, false, false, 400), "html", null, true);
                yield "</span>
                                        <span class=\"pill\"><span class=\"icon\">⏱</span>";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "chargehoraire", [], "any", false, false, false, 401), "html", null, true);
                yield " h</span>
                                        ";
                // line 402
                if (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "scorecomplexite", [], "any", true, true, false, 402)) {
                    // line 403
                    yield "                                            <span class=\"pill\"><span class=\"icon\">🔥</span>Complexité ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "scorecomplexite", [], "any", false, false, false, 403), "html", null, true);
                    yield "/10</span>
                                        ";
                }
                // line 405
                yield "                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            yield "                    </div>
                ";
        }
        // line 411
        yield "
                <div class=\"note-box\">
                    <strong>Note :</strong> ces recommandations sont générées automatiquement à partir des programmes des autres classes. Elles sont informatives pour les étudiants&nbsp;; seul un administrateur peut modifier officiellement le programme de la classe.
                </div>
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
        return "user/classe/front_suggestions.html.twig";
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
        return array (  562 => 411,  558 => 409,  549 => 405,  543 => 403,  541 => 402,  537 => 401,  533 => 400,  529 => 398,  523 => 396,  521 => 395,  515 => 392,  508 => 387,  504 => 386,  501 => 385,  493 => 379,  491 => 378,  485 => 375,  471 => 364,  466 => 362,  459 => 360,  444 => 348,  434 => 341,  423 => 333,  413 => 326,  402 => 318,  392 => 312,  388 => 310,  382 => 308,  380 => 307,  376 => 305,  370 => 302,  365 => 299,  359 => 296,  353 => 295,  346 => 293,  344 => 292,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Recommandations AI {{ classe.nom }}</title>
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
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .app-shell { display: flex; min-height: 100vh; }

        .sidebar {
            width: 280px;
            background: white;
            border-right: 1px solid var(--gray-200);
            padding: 24px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            box-shadow: 2px 0 20px rgba(220, 38, 38, 0.05);
        }

        .brand {
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--gray-200);
        }

        .brand-row { display: flex; align-items: center; gap: 12px; }
        .brand-icon {
            background: var(--primary-gradient);
            width: 44px; height: 44px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            color: white; font-weight: 800; font-size: 18px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }

        .brand-title { font-weight: 800; font-size: 20px; color: var(--primary-red); }
        .brand-sub { font-size: 12px; color: var(--gray-500); margin-top: 2px; }

        .user-session {
            margin-top: 24px;
            padding: 20px;
            background: var(--gray-50);
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            position: relative;
        }

        .user-session::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px;
            background: var(--primary-gradient); border-radius: var(--radius-lg) var(--radius-lg) 0 0;
        }

        .user-info { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; }

        .avatar {
            width: 48px; height: 48px; border-radius: 50%;
            background: var(--primary-gradient); color: white;
            display: flex; align-items: center; justify-content: center;
            font-weight: 600; font-size: 18px; border: 3px solid white;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
        }

        .user-details h3 { font-size: 16px; font-weight: 600; color: var(--gray-800); margin-bottom: 2px; }
        .user-details p { margin: 0; font-size: 13px; color: var(--gray-600); }

        .session-info { font-size: 12px; color: var(--gray-600); padding-top: 16px; border-top: 1px solid var(--gray-200); }
        .session-info div { margin-bottom: 6px; display: flex; justify-content: space-between; }
        .session-info strong { color: var(--gray-800); font-weight: 600; }

        .nav { display: flex; flex-direction: column; gap: 4px; margin-top: 24px; }
        .nav a {
            display: flex; align-items: center; gap: 12px; padding: 14px 16px;
            border-radius: var(--radius-lg); color: var(--gray-700);
            text-decoration: none; transition: all var(--transition);
            font-weight: 500; font-size: 14px;
        }
        .nav a:hover, .nav a.active { background: var(--primary-red-light); color: var(--primary-red); }
        .nav a.active { font-weight: 600; border-left: 3px solid var(--primary-red); }

        .nav-section-title {
            font-size: 12px; font-weight: 600; color: var(--gray-500);
            text-transform: uppercase; letter-spacing: 0.5px; margin: 24px 0 8px 16px;
        }

        .main { flex: 1; padding: 32px; max-width: 1400px; margin: 0 auto; width: 100%; }

        .header { margin-bottom: 32px; display:flex; justify-content: space-between; align-items: flex-start; gap:16px; }
        .header-content h1 {
            font-size: 32px; font-weight: 800; margin: 0;
            background: var(--primary-gradient); -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .header-content p { color: var(--gray-500); margin-top: 8px; font-size: 15px; }

        .badge {
            padding: 4px 12px; border-radius: 999px; font-size: 12px; font-weight: 600;
        }
        .badge-red { background: var(--primary-red-light); color: var(--primary-red); }
        .badge-blue { background: #DBEAFE; color: #1E40AF; }

        .btn-link {
            font-size: 14px;
            color: #2563EB;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .btn-link:hover { text-decoration: underline; }

        .section-container {
            background: white;
            border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-md);
            margin-bottom: 24px;
            overflow: hidden;
        }

        .section-header {
            padding: 20px 24px;
            background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            display:flex;
            justify-content: space-between;
            align-items: center;
            gap:12px;
        }

        .section-title { font-size: 18px; font-weight: 700; color: var(--gray-900); }

        .suggestions-grid {
            padding: 20px 24px 24px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 16px;
        }

        .suggestion-card {
            position: relative;
            background: white;
            border-radius: 18px;
            border: 1px solid var(--gray-200);
            padding: 18px 18px 16px;
            box-shadow: 0 10px 24px rgba(15,23,42,0.06);
            overflow: hidden;
        }
        .suggestion-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top left, rgba(254,226,226,0.9), transparent 55%);
            opacity: 0.55;
            pointer-events: none;
        }
        .suggestion-card-inner {
            position: relative;
            z-index: 1;
        }
        .suggestion-header {
            display:flex;
            justify-content: space-between;
            align-items:flex-start;
            gap:10px;
            margin-bottom: 8px;
        }
        .suggestion-name { font-size: 16px; font-weight: 700; color: var(--gray-900); }
        .badge-ai {
            background: #EEF2FF;
            color: #4F46E5;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 3px 8px;
            border-radius: 999px;
            letter-spacing: 0.06em;
        }
        .suggestion-desc {
            font-size: 13px;
            color: var(--gray-600);
            margin-bottom: 10px;
        }
        .suggestion-meta {
            display:flex;
            flex-wrap:wrap;
            gap: 8px;
            font-size: 11px;
        }
        .pill {
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(255,255,255,0.9);
            border: 1px solid rgba(248,250,252,0.8);
            color: var(--gray-700);
            display:inline-flex;
            align-items:center;
            gap:6px;
        }
        .pill span.icon { font-size: 13px; }

        .empty-state {
            padding: 40px 24px;
            text-align: center;
            background: white;
        }
        .empty-state-icon { font-size: 40px; margin-bottom: 12px; }
        .empty-state-title { font-size: 18px; font-weight: 600; color: var(--gray-700); margin-bottom: 4px; }
        .empty-state-text { font-size: 13px; color: var(--gray-500); }

        .note-box {
            margin-top: 16px;
            padding: 18px 20px;
            background: var(--gray-100);
            border-radius: 12px;
            border: 1px solid var(--gray-200);
            font-size: 13px;
            color: var(--gray-600);
        }

        @media (max-width: 1200px) {
            .app-shell { flex-direction: column; }
            .sidebar { width: 100%; height: auto; position: relative; padding: 16px; max-height: none; }
            .main { padding: 24px; }
        }
        @media (max-width: 768px) {
            .header { flex-direction: column; align-items:flex-start; }
            .header-content h1 { font-size: 26px; }
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
                        <div class=\"brand-sub\">Assistant Étudiant</div>
                    </div>
                </div>
            </div>

            <div class=\"user-session\">
                <div class=\"user-info\">
                    {% if app.user %}
                        <div class=\"avatar\">{{ app.user.nom|first }}{{ app.user.prenom|first }}</div>
                        <div class=\"user-details\">
                            <h3>{{ app.user.nom }} {{ app.user.prenom }}</h3>
                            <p>🏫 {{ classe.nom }}</p>
                        </div>
                    {% else %}
                        <div class=\"avatar\">?</div>
                        <div class=\"user-details\">
                            <h3>Invité</h3>
                            <p>🏫 {{ classe.nom }}</p>
                        </div>
                    {% endif %}
                </div>
                <div class=\"session-info\">
                    {% if app.user %}
                        <div><strong>Email:</strong> {{ app.user.email }}</div>
                    {% else %}
                        <div><strong>Email:</strong> —</div>
                    {% endif %}
                    <div><strong>Niveau:</strong> {{ classe.niveau }}</div>
                </div>
            </div>

            <nav class=\"nav\">
                <div class=\"nav-section-title\">Général</div>
                <a href=\"{{ path('app_dashboard') }}\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Tableau de bord
                </a>

                <div class=\"nav-section-title\">Académique</div>
                <a href=\"{{ path('app_classe_front_show', {'id': classe.id}) }}\" class=\"active\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Ma Classe
                </a>
                <a href=\"{{ path('app_matiere_classe_front_index') }}\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                    </svg>
                    Mes Matières
                </a>

                <div class=\"nav-section-title\">Compte</div>
                <a href=\"{{ path('app_profile') }}\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profil
                </a>
                <a href=\"{{ path('app_logout') }}\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Déconnexion
                </a>
            </nav>
        </aside>

        <main class=\"main\">
            <header class=\"header\">
                <div class=\"header-content\">
                    <span class=\"badge badge-red\">{{ classe.filiere }} — {{ classe.niveau }}</span>
                    <h1>Recommandations AI</h1>
                    <p>Suggestions de matières complémentaires pour votre programme <strong>{{ classe.nom }}</strong>.</p>
                </div>
                <a href=\"{{ path('app_classe_front_show', {'id': classe.id}) }}\" class=\"btn-link\">
                    <span>← Retour à ma classe</span>
                </a>
            </header>

            <div class=\"section-container\">
                <div class=\"section-header\">
                    <div>
                        <h2 class=\"section-title\">Matières recommandées</h2>
                        <p style=\"font-size:13px; color:var(--gray-500); margin-top:4px;\">Basé sur des classes similaires (niveau, filière, année universitaire et filière globale).</p>
                    </div>
                    <span class=\"badge badge-blue\">{{ suggestions|length }} suggestion(s)</span>
                </div>

                {% if suggestions is empty %}
                    <div class=\"empty-state\">
                        <div class=\"empty-state-icon\">✨</div>
                        <div class=\"empty-state-title\">Votre programme est déjà complet !</div>
                        <div class=\"empty-state-text\">Aucune matière complémentaire n'est nécessaire pour le moment selon le modèle AI.</div>
                    </div>
                {% else %}
                    <div class=\"suggestions-grid\">
                        {% for s in suggestions %}
                            <div class=\"suggestion-card\">
                                <div class=\"suggestion-card-inner\">
                                    <div class=\"suggestion-header\">
                                        <div>
                                            <div class=\"badge-ai\">Suggestion AI</div>
                                            <div class=\"suggestion-name\">{{ s.nom }}</div>
                                        </div>
                                    </div>
                                    {% if s.description %}
                                        <p class=\"suggestion-desc\">{{ s.description|length > 150 ? s.description|slice(0, 150) ~ '…' : s.description }}</p>
                                    {% endif %}

                                    <div class=\"suggestion-meta\">
                                        <span class=\"pill\"><span class=\"icon\">⚖️</span>Coeff {{ s.coefficient }}</span>
                                        <span class=\"pill\"><span class=\"icon\">⏱</span>{{ s.chargehoraire }} h</span>
                                        {% if s.scorecomplexite is defined %}
                                            <span class=\"pill\"><span class=\"icon\">🔥</span>Complexité {{ s.scorecomplexite }}/10</span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}

                <div class=\"note-box\">
                    <strong>Note :</strong> ces recommandations sont générées automatiquement à partir des programmes des autres classes. Elles sont informatives pour les étudiants&nbsp;; seul un administrateur peut modifier officiellement le programme de la classe.
                </div>
            </div>
        </main>
    </div>
</body>
</html>
", "user/classe/front_suggestions.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\classe\\front_suggestions.html.twig");
    }
}
