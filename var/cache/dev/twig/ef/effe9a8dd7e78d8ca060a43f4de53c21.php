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

/* user/classe/front_show.html.twig */
class __TwigTemplate_38a1a7e09ac38a9441c6ce642e31a177 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — ";
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

        .avatar {
            width: 48px; height: 48px; border-radius: 50%;
            background: var(--primary-gradient); color: white;
            display: flex; align-items: center; justify-content: center;
            font-weight: 600; font-size: 18px; border: 3px solid white;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
        }

        .nav { display: flex; flex-direction: column; gap: 4px; margin-top: 24px; }
        .nav a {
            display: flex; align-items: center; gap: 12px; padding: 14px 16px;
            border-radius: var(--radius-lg); color: var(--gray-700);
            text-decoration: none; transition: all var(--transition);
            font-weight: 500; font-size: 14px;
        }
        .nav a:hover, .nav a.active {
            background: var(--primary-red-light); color: var(--primary-red);
        }
        .nav a.active { font-weight: 600; border-left: 3px solid var(--primary-red); }

        .nav-section-title {
            font-size: 12px; font-weight: 600; color: var(--gray-500);
            text-transform: uppercase; letter-spacing: 0.5px; margin: 24px 0 8px 16px;
        }

        .main { flex: 1; padding: 32px; max-width: 1400px; margin: 0 auto; width: 100%; }

        .header { margin-bottom: 40px; }
        .header-content h1 {
            font-size: 36px; font-weight: 800;
            background: var(--primary-gradient); -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Feature Cards */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .feature-card {
            background: white; border-radius: var(--radius-xl);
            padding: 24px; border: 1px solid var(--gray-200);
            transition: all var(--transition); text-decoration: none; color: inherit;
        }

        .feature-card:hover {
            transform: translateY(-4px); box-shadow: var(--shadow-lg);
            border-color: var(--primary-red-light);
        }

        .feature-icon {
            width: 48px; height: 48px; border-radius: 12px;
            background: var(--gray-50); display: flex; align-items: center; justify-content: center;
            font-size: 24px; margin-bottom: 16px;
        }

        .feature-card h3 { font-size: 18px; margin-bottom: 8px; color: var(--gray-900); }
        .feature-card p { font-size: 14px; color: var(--gray-500); line-height: 1.5; }

        /* Tables and Lists */
        .section-container {
            background: white; border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200); box-shadow: var(--shadow-md);
            margin-bottom: 32px; overflow: hidden;
        }

        .section-header {
            padding: 24px; background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            display: flex; justify-content: space-between; align-items: center;
        }

        .section-title { font-size: 20px; font-weight: 700; color: var(--gray-900); }

        .data-table { width: 100%; border-collapse: collapse; }
        .data-table th {
            text-align: left; padding: 16px; color: var(--gray-500);
            font-size: 13px; text-transform: uppercase; border-bottom: 1px solid var(--gray-100);
        }
        .data-table td { padding: 16px; border-bottom: 1px solid var(--gray-50); font-size: 14px; }

        .badge {
            padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;
        }
        .badge-red { background: var(--primary-red-light); color: var(--primary-red); }
        .badge-blue { background: #DBEAFE; color: #1E40AF; }
        .badge-green { background: #D1FAE5; color: #065F46; }

        .avatar-sm {
            width: 32px; height: 32px; border-radius: 50%;
            background: var(--primary-red-light); color: var(--primary-red);
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 12px;
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
        // line 211
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 212
            yield "                        <div class=\"avatar\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212), "nom", [], "any", false, false, false, 212)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212), "prenom", [], "any", false, false, false, 212)), "html", null, true);
            yield "</div>
                        <div class=\"user-details\">
                            <h3>";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "nom", [], "any", false, false, false, 214), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "prenom", [], "any", false, false, false, 214), "html", null, true);
            yield "</h3>
                            <p>🏫 ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 215, $this->source); })()), "nom", [], "any", false, false, false, 215), "html", null, true);
            yield "</p>
                        </div>
                    ";
        } else {
            // line 218
            yield "                        <div class=\"avatar\">?</div>
                        <div class=\"user-details\">
                            <h3>Invité</h3>
                            <p>🏫 ";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 221, $this->source); })()), "nom", [], "any", false, false, false, 221), "html", null, true);
            yield "</p>
                        </div>
                    ";
        }
        // line 224
        yield "                </div>
                <div class=\"session-info\">
                    ";
        // line 226
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "user", [], "any", false, false, false, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 227
            yield "                        <div><strong>Email:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "user", [], "any", false, false, false, 227), "email", [], "any", false, false, false, 227), "html", null, true);
            yield "</div>
                    ";
        } else {
            // line 229
            yield "                        <div><strong>Email:</strong> —</div>
                    ";
        }
        // line 231
        yield "                    <div><strong>Niveau:</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 231, $this->source); })()), "niveau", [], "any", false, false, false, 231), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <div class=\"nav-section-title\">Général</div>
                <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Tableau de bord
                </a>

                <div class=\"nav-section-title\">Académique</div>
                <a href=\"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 245, $this->source); })()), "id", [], "any", false, false, false, 245)]), "html", null, true);
        yield "\" class=\"active\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Ma Classe
                </a>
                <a href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_front_index");
        yield "\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                    </svg>
                    Mes Matières
                </a>

                <div class=\"nav-section-title\">Compte</div>
                <a href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profil
                </a>
                <a href=\"";
        // line 267
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
                ";
        // line 279
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "flashes", [], "any", false, false, false, 279));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 280
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 281
                yield "                        <div style=\"padding: 16px; border-radius: var(--radius-lg); margin-bottom: 24px; 
                                    background: ";
                // line 282
                if (($context["label"] == "warning")) {
                    yield "#FFFBEB";
                } else {
                    yield "#F0FDF4";
                }
                yield "; 
                                    color: ";
                // line 283
                if (($context["label"] == "warning")) {
                    yield "#92400E";
                } else {
                    yield "#166534";
                }
                yield ";
                                    border: 1px solid ";
                // line 284
                if (($context["label"] == "warning")) {
                    yield "#FDE68A";
                } else {
                    yield "#BBF7D0";
                }
                yield ";
                                    font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 12px;\">
                            <svg style=\"width:20px;height:20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"/><line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"/>
                            </svg>
                            ";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        yield "
                <div class=\"header-content\">
                    <span class=\"badge badge-red\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 295, $this->source); })()), "filiere", [], "any", false, false, false, 295), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 295, $this->source); })()), "niveau", [], "any", false, false, false, 295), "html", null, true);
        yield "</span>
                    <h1>";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 296, $this->source); })()), "nom", [], "any", false, false, false, 296), "html", null, true);
        yield "</h1>
                    <p>Espace académique de votre promotion — Année ";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 297, $this->source); })()), "anneeuniversitaire", [], "any", false, false, false, 297), "html", null, true);
        yield "</p>
                </div>
            </header>

            <div class=\"nav-section-title\" style=\"margin-left:0; margin-bottom:16px;\">🎓 Outils Académiques</div>
            <div class=\"feature-grid\">
                <a href=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_audit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 303, $this->source); })()), "id", [], "any", false, false, false, 303)]), "html", null, true);
        yield "\" class=\"feature-card\">
                    <div class=\"feature-icon\">⚖️</div>
                    <h3>Audit de Charge</h3>
                    <p>Analysez votre volume horaire et prévenez le surmenage.</p>
                </a>
                <a href=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_stats", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 308, $this->source); })()), "id", [], "any", false, false, false, 308)]), "html", null, true);
        yield "\" class=\"feature-card\">
                    <div class=\"feature-icon\">📈</div>
                    <h3>Statistiques</h3>
                    <p>Exploration des données de complexité académique.</p>
                </a>
                <a href=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_export_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 313, $this->source); })()), "id", [], "any", false, false, false, 313)]), "html", null, true);
        yield "\" class=\"feature-card\">
                    <div class=\"feature-icon\">🖨️</div>
                    <h3>Fiche PDF</h3>
                    <p>Téléchargez votre programme officiel complet.</p>
                </a>
                <a href=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_export_csv", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 318, $this->source); })()), "id", [], "any", false, false, false, 318)]), "html", null, true);
        yield "\" class=\"feature-card\">
                    <div class=\"feature-icon\">📊</div>
                    <h3>Données CSV</h3>
                    <p>Exportez vos matières vers Excel ou Sheets.</p>
                </a>
            </div>

            <div class=\"section-container\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">📚 Programme Académique</h2>
                    <span class=\"badge badge-blue\">";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 328, $this->source); })()), "matiereClasses", [], "any", false, false, false, 328)), "html", null, true);
        yield " Matières</span>
                </div>
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>Matière</th>
                            <th>Coefficient</th>
                            <th>Charge Horaire</th>
                            <th>Complexité</th>
                            <th>Pré-requis</th>
                            <th>Quiz</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 342, $this->source); })()), "matiereClasses", [], "any", false, false, false, 342));
        foreach ($context['_seq'] as $context["_key"] => $context["mc"]) {
            // line 343
            yield "                        <tr>
                            <td><strong>";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mc"], "nom", [], "any", false, false, false, 344), "html", null, true);
            yield "</strong></td>
                            <td><span class=\"badge badge-blue\">";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mc"], "coefficient", [], "any", false, false, false, 345), "html", null, true);
            yield "</span></td>
                            <td>";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mc"], "chargehoraire", [], "any", false, false, false, 346), "html", null, true);
            yield "h</td>
                            <td>
                                <div style=\"display:flex; align-items:center; gap:8px;\">
                                    <div style=\"flex:1; height:6px; background:#f3f4f6; border-radius:3px; max-width:80px;\">
                                        <div style=\"width:";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["mc"], "scorecomplexite", [], "any", false, false, false, 350) * 10), "html", null, true);
            yield "%; height:100%; background:var(--primary-red); border-radius:3px;\"></div>
                                    </div>
                                    <span style=\"font-size:12px; font-weight:700;\">";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mc"], "scorecomplexite", [], "any", false, false, false, 352), "html", null, true);
            yield "/10</span>
                                </div>
                            </td>
                            <td>
                                ";
            // line 356
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["mc"], "prerequis", [], "any", false, false, false, 356));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pre"]) {
                // line 357
                yield "                                    <span class=\"badge badge-green\" style=\"margin-right:4px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pre"], "nom", [], "any", false, false, false, 357), "html", null, true);
                yield "</span>
                                ";
                $context['_iterated'] = true;
            }
            // line 358
            if (!$context['_iterated']) {
                // line 359
                yield "                                    <span style=\"color:var(--gray-400);\">Aucun</span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pre'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            yield "                            </td>
                            <td>
                                <a href=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_matiere", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mc"], "id", [], "any", false, false, false, 363)]), "html", null, true);
            yield "\" style=\"font-size:12px; color:var(--primary-red); text-decoration:underline;\">Lancer le quiz</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"section-container\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">👥 Membres de la Classe</h2>
                    <span class=\"badge badge-green\">";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 374, $this->source); })())), "html", null, true);
        yield " Étudiants</span>
                </div>
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>Étudiant</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 385, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 386
            yield "                        <tr>
                            <td style=\"display:flex; align-items:center; gap:12px;\">
                                <div class=\"avatar-sm\">";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 388)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 388)), "html", null, true);
            yield "</div>
                                <strong>";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 389), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 389), "html", null, true);
            yield "</strong>
                            </td>
                            <td>";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 391), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"#\" class=\"btn\" style=\"padding:6px 12px; font-size:11px; height:auto; box-shadow:none;\">Message</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        yield "                    </tbody>
                </table>
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
        return "user/classe/front_show.html.twig";
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
        return array (  634 => 397,  622 => 391,  615 => 389,  610 => 388,  606 => 386,  602 => 385,  588 => 374,  579 => 367,  569 => 363,  565 => 361,  558 => 359,  556 => 358,  549 => 357,  544 => 356,  537 => 352,  532 => 350,  525 => 346,  521 => 345,  517 => 344,  514 => 343,  510 => 342,  493 => 328,  480 => 318,  472 => 313,  464 => 308,  456 => 303,  447 => 297,  443 => 296,  437 => 295,  433 => 293,  427 => 292,  418 => 289,  406 => 284,  398 => 283,  390 => 282,  387 => 281,  382 => 280,  377 => 279,  363 => 267,  353 => 260,  342 => 252,  332 => 245,  321 => 237,  311 => 231,  307 => 229,  301 => 227,  299 => 226,  295 => 224,  289 => 221,  284 => 218,  278 => 215,  272 => 214,  265 => 212,  263 => 211,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — {{ classe.nom }}</title>
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

        .avatar {
            width: 48px; height: 48px; border-radius: 50%;
            background: var(--primary-gradient); color: white;
            display: flex; align-items: center; justify-content: center;
            font-weight: 600; font-size: 18px; border: 3px solid white;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
        }

        .nav { display: flex; flex-direction: column; gap: 4px; margin-top: 24px; }
        .nav a {
            display: flex; align-items: center; gap: 12px; padding: 14px 16px;
            border-radius: var(--radius-lg); color: var(--gray-700);
            text-decoration: none; transition: all var(--transition);
            font-weight: 500; font-size: 14px;
        }
        .nav a:hover, .nav a.active {
            background: var(--primary-red-light); color: var(--primary-red);
        }
        .nav a.active { font-weight: 600; border-left: 3px solid var(--primary-red); }

        .nav-section-title {
            font-size: 12px; font-weight: 600; color: var(--gray-500);
            text-transform: uppercase; letter-spacing: 0.5px; margin: 24px 0 8px 16px;
        }

        .main { flex: 1; padding: 32px; max-width: 1400px; margin: 0 auto; width: 100%; }

        .header { margin-bottom: 40px; }
        .header-content h1 {
            font-size: 36px; font-weight: 800;
            background: var(--primary-gradient); -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Feature Cards */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .feature-card {
            background: white; border-radius: var(--radius-xl);
            padding: 24px; border: 1px solid var(--gray-200);
            transition: all var(--transition); text-decoration: none; color: inherit;
        }

        .feature-card:hover {
            transform: translateY(-4px); box-shadow: var(--shadow-lg);
            border-color: var(--primary-red-light);
        }

        .feature-icon {
            width: 48px; height: 48px; border-radius: 12px;
            background: var(--gray-50); display: flex; align-items: center; justify-content: center;
            font-size: 24px; margin-bottom: 16px;
        }

        .feature-card h3 { font-size: 18px; margin-bottom: 8px; color: var(--gray-900); }
        .feature-card p { font-size: 14px; color: var(--gray-500); line-height: 1.5; }

        /* Tables and Lists */
        .section-container {
            background: white; border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200); box-shadow: var(--shadow-md);
            margin-bottom: 32px; overflow: hidden;
        }

        .section-header {
            padding: 24px; background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            display: flex; justify-content: space-between; align-items: center;
        }

        .section-title { font-size: 20px; font-weight: 700; color: var(--gray-900); }

        .data-table { width: 100%; border-collapse: collapse; }
        .data-table th {
            text-align: left; padding: 16px; color: var(--gray-500);
            font-size: 13px; text-transform: uppercase; border-bottom: 1px solid var(--gray-100);
        }
        .data-table td { padding: 16px; border-bottom: 1px solid var(--gray-50); font-size: 14px; }

        .badge {
            padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;
        }
        .badge-red { background: var(--primary-red-light); color: var(--primary-red); }
        .badge-blue { background: #DBEAFE; color: #1E40AF; }
        .badge-green { background: #D1FAE5; color: #065F46; }

        .avatar-sm {
            width: 32px; height: 32px; border-radius: 50%;
            background: var(--primary-red-light); color: var(--primary-red);
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 12px;
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
                {# Flash Messages #}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div style=\"padding: 16px; border-radius: var(--radius-lg); margin-bottom: 24px; 
                                    background: {% if label == 'warning' %}#FFFBEB{% else %}#F0FDF4{% endif %}; 
                                    color: {% if label == 'warning' %}#92400E{% else %}#166534{% endif %};
                                    border: 1px solid {% if label == 'warning' %}#FDE68A{% else %}#BBF7D0{% endif %};
                                    font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 12px;\">
                            <svg style=\"width:20px;height:20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"/><line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"/>
                            </svg>
                            {{ message }}
                        </div>
                    {% endfor %}
                {% endfor %}

                <div class=\"header-content\">
                    <span class=\"badge badge-red\">{{ classe.filiere }} — {{ classe.niveau }}</span>
                    <h1>{{ classe.nom }}</h1>
                    <p>Espace académique de votre promotion — Année {{ classe.anneeuniversitaire }}</p>
                </div>
            </header>

            <div class=\"nav-section-title\" style=\"margin-left:0; margin-bottom:16px;\">🎓 Outils Académiques</div>
            <div class=\"feature-grid\">
                <a href=\"{{ path('app_classe_audit', {id: classe.id}) }}\" class=\"feature-card\">
                    <div class=\"feature-icon\">⚖️</div>
                    <h3>Audit de Charge</h3>
                    <p>Analysez votre volume horaire et prévenez le surmenage.</p>
                </a>
                <a href=\"{{ path('app_classe_stats', {id: classe.id}) }}\" class=\"feature-card\">
                    <div class=\"feature-icon\">📈</div>
                    <h3>Statistiques</h3>
                    <p>Exploration des données de complexité académique.</p>
                </a>
                <a href=\"{{ path('app_classe_export_pdf', {id: classe.id}) }}\" class=\"feature-card\">
                    <div class=\"feature-icon\">🖨️</div>
                    <h3>Fiche PDF</h3>
                    <p>Téléchargez votre programme officiel complet.</p>
                </a>
                <a href=\"{{ path('app_classe_export_csv', {id: classe.id}) }}\" class=\"feature-card\">
                    <div class=\"feature-icon\">📊</div>
                    <h3>Données CSV</h3>
                    <p>Exportez vos matières vers Excel ou Sheets.</p>
                </a>
            </div>

            <div class=\"section-container\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">📚 Programme Académique</h2>
                    <span class=\"badge badge-blue\">{{ classe.matiereClasses|length }} Matières</span>
                </div>
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>Matière</th>
                            <th>Coefficient</th>
                            <th>Charge Horaire</th>
                            <th>Complexité</th>
                            <th>Pré-requis</th>
                            <th>Quiz</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for mc in classe.matiereClasses %}
                        <tr>
                            <td><strong>{{ mc.nom }}</strong></td>
                            <td><span class=\"badge badge-blue\">{{ mc.coefficient }}</span></td>
                            <td>{{ mc.chargehoraire }}h</td>
                            <td>
                                <div style=\"display:flex; align-items:center; gap:8px;\">
                                    <div style=\"flex:1; height:6px; background:#f3f4f6; border-radius:3px; max-width:80px;\">
                                        <div style=\"width:{{ mc.scorecomplexite * 10 }}%; height:100%; background:var(--primary-red); border-radius:3px;\"></div>
                                    </div>
                                    <span style=\"font-size:12px; font-weight:700;\">{{ mc.scorecomplexite }}/10</span>
                                </div>
                            </td>
                            <td>
                                {% for pre in mc.prerequis %}
                                    <span class=\"badge badge-green\" style=\"margin-right:4px;\">{{ pre.nom }}</span>
                                {% else %}
                                    <span style=\"color:var(--gray-400);\">Aucun</span>
                                {% endfor %}
                            </td>
                            <td>
                                <a href=\"{{ path('app_quiz_matiere', {id: mc.id}) }}\" style=\"font-size:12px; color:var(--primary-red); text-decoration:underline;\">Lancer le quiz</a>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <div class=\"section-container\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">👥 Membres de la Classe</h2>
                    <span class=\"badge badge-green\">{{ users|length }} Étudiants</span>
                </div>
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>Étudiant</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for u in users %}
                        <tr>
                            <td style=\"display:flex; align-items:center; gap:12px;\">
                                <div class=\"avatar-sm\">{{ u.nom|first }}{{ u.prenom|first }}</div>
                                <strong>{{ u.nom }} {{ u.prenom }}</strong>
                            </td>
                            <td>{{ u.email }}</td>
                            <td>
                                <a href=\"#\" class=\"btn\" style=\"padding:6px 12px; font-size:11px; height:auto; box-shadow:none;\">Message</a>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
", "user/classe/front_show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\classe\\front_show.html.twig");
    }
}
