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

/* Front/base.html.twig */
class __TwigTemplate_d37d16adf4708f09ffd2a1c9bc5e7dc5 extends Template
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
            'title' => [$this, 'block_title'],
            'extra_css' => [$this, 'block_extra_css'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
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

        * { 
            box-sizing: border-box; 
            margin: 0;
            padding: 0;
        }
        
        html { 
            font-size: var(--font-size); 
            scroll-behavior: smooth;
        }
        
        body {
            margin: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .app-shell {
            display: flex;
            min-height: 100vh;
        }

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

        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: var(--gray-100);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: var(--gray-300);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: var(--gray-400);
        }

        .brand {
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--gray-200);
            flex-shrink: 0;
        }

        .brand-row {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            background: var(--primary-gradient);
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }

        .brand-title {
            font-weight: 800;
            font-size: 20px;
            color: var(--primary-red);
        }

        .brand-sub {
            font-size: 12px;
            color: var(--gray-500);
            margin-top: 2px;
        }

        .user-session {
            margin-top: 24px;
            padding: 20px;
            background: var(--gray-50);
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            position: relative;
            flex-shrink: 0;
        }

        .user-session::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-gradient);
            border-radius: var(--radius-lg) var(--radius-lg) 0 0;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 18px;
            border: 3px solid white;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
        }

        .user-details h3 {
            font-size: 16px;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 2px;
        }

        .user-details p {
            margin: 0;
            font-size: 13px;
            color: var(--gray-600);
        }

        .session-info {
            font-size: 12px;
            color: var(--gray-600);
            padding-top: 16px;
            border-top: 1px solid var(--gray-200);
        }

        .session-info div {
            margin-bottom: 6px;
            display: flex;
            justify-content: space-between;
        }

        .session-info strong {
            color: var(--gray-800);
            font-weight: 600;
        }

        .nav {
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-top: 24px;
            flex: 1;
            overflow-y: auto;
            padding-right: 4px;
        }

        .nav::-webkit-scrollbar {
            width: 4px;
        }

        .nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            border-radius: var(--radius-lg);
            color: var(--gray-700);
            text-decoration: none;
            transition: all var(--transition);
            font-weight: 500;
            font-size: 14px;
        }

        .nav a:hover {
            background: var(--primary-red-light);
            color: var(--primary-red);
            transform: translateX(4px);
        }

        .nav a.active {
            background: var(--primary-red-light);
            color: var(--primary-red);
            font-weight: 600;
            border-left: 3px solid var(--primary-red);
        }

        .nav a .icon {
            width: 18px;
            height: 18px;
            stroke-width: 2;
            flex-shrink: 0;
        }

        .nav-section {
            margin-top: 24px;
            margin-bottom: 8px;
            padding-left: 16px;
        }

        .nav-section-title {
            font-size: 12px;
            font-weight: 600;
            color: var(--gray-500);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .main {
            flex: 1;
            padding: 32px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
            overflow-y: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .header-content h1 {
            font-size: 36px;
            font-weight: 800;
            margin: 0;
            color: var(--gray-900);
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-content p {
            color: var(--gray-500);
            margin-top: 8px;
            font-size: 16px;
        }

        .btn {
            padding: 12px 24px;
            border-radius: var(--radius-lg);
            border: none;
            background: var(--primary-gradient);
            color: white;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all var(--transition);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.35);
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: var(--gray-500);
            font-size: 12px;
            border-top: 1px solid var(--gray-200);
            margin-top: 40px;
        }

        @media (max-width: 1200px) {
            .app-shell {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 16px;
                max-height: 80vh;
            }
            
            .main {
                padding: 24px;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            
            .header-content h1 {
                font-size: 28px;
            }
        }
    </style>
    ";
        // line 364
        yield from $this->unwrap()->yieldBlock('extra_css', $context, $blocks);
        // line 365
        yield "</head>
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
                    <div class=\"avatar\">
                        ";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 382, $this->source); })()), "user", [], "any", false, false, false, 382), "nom", [], "any", false, false, false, 382)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 382, $this->source); })()), "user", [], "any", false, false, false, 382), "prenom", [], "any", false, false, false, 382)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "user", [], "any", false, false, false, 385), "nom", [], "any", false, false, false, 385), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "user", [], "any", false, false, false, 385), "prenom", [], "any", false, false, false, 385), "html", null, true);
        yield "</h3>
                        <p>📚 ";
        // line 386
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 386, $this->source); })()), "user", [], "any", false, false, false, 386), "classe", [], "any", false, false, false, 386))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 386, $this->source); })()), "user", [], "any", false, false, false, 386), "classe", [], "any", false, false, false, 386), "nom", [], "any", false, false, false, 386), "html", null, true)) : ("Aucune classe"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email :</strong> ";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 390, $this->source); })()), "user", [], "any", false, false, false, 390), "email", [], "any", false, false, false, 390), "html", null, true);
        yield "</div>
                    <div><strong>Rôle :</strong> ";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "user", [], "any", false, false, false, 391), "roles", [], "any", false, false, false, 391), 0, [], "array", false, false, false, 391), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Général</div>
                    <a href=\"#\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                        </svg>
                        Tableau de bord
                    </a>
                    <a href=\"";
        // line 404
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" >
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                        </svg>
                        Mes Tâches
                    </a>
                    <a href=\"#\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/>
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                        </svg>
                        Objectifs
                    </a>
                    <a href=\"";
        // line 417
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/>
                            <path d=\"M8 12h8\"/>
                            <path d=\"M12 8v8\"/>
                        </svg>
                        Santé
                    </a>
                </div>

                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Académique</div>
                    <a href=\"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_users", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 429, $this->source); })()), "user", [], "any", false, false, false, 429), "classe", [], "any", false, false, false, 429), "id", [], "any", false, false, false, 429)]), "html", null, true);
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                            <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                        </svg>
                        Classes
                    </a>
                    <a href=\"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_by_classe", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 436, $this->source); })()), "user", [], "any", false, false, false, 436), "classe", [], "any", false, false, false, 436), "id", [], "any", false, false, false, 436)]), "html", null, true);
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                        </svg>
                        Matières
                    </a>
                    <a href=\"#\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"2\" ry=\"2\"/>
                            <path d=\"M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                            <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12\"/>
                            <line x1=\"8\" y1=\"17\" x2=\"16\" y2=\"17\"/>
                        </svg>
                        Salles
                    </a>
                </div>

                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Cours & Groupes</div>
                    <a href=\"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_by_classe", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "classe", [], "any", false, false, false, 455), "id", [], "any", false, false, false, 455)]), "html", null, true);
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            <polyline points=\"12 6 12 12 16 14\"/>
                            <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12\"/>
                        </svg>
                        Séances
                    </a>
                    <a href=\"";
        // line 463
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
        yield "\" ";
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 463, $this->source); })()) == "groupes")) {
            yield "class=\"active\"";
        }
        yield ">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                            <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                            <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                            <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                        </svg>
                        Groupes
                    </a>
                </div>

                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Compte</div>
                    <a href=\"";
        // line 476
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                            <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                        </svg>
                        Profil
                    </a>
                    <a href=\"";
        // line 483
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </nav>
        </aside>

        <main class=\"main\">
            ";
        // line 494
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 495
        yield "        </main>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "ESPRIT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 364
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_css"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 494
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/base.html.twig";
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
        return array (  660 => 494,  638 => 364,  615 => 6,  600 => 495,  598 => 494,  584 => 483,  574 => 476,  554 => 463,  543 => 455,  521 => 436,  511 => 429,  496 => 417,  480 => 404,  464 => 391,  460 => 390,  453 => 386,  447 => 385,  440 => 382,  421 => 365,  419 => 364,  58 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}ESPRIT{% endblock %}</title>
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

        * { 
            box-sizing: border-box; 
            margin: 0;
            padding: 0;
        }
        
        html { 
            font-size: var(--font-size); 
            scroll-behavior: smooth;
        }
        
        body {
            margin: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .app-shell {
            display: flex;
            min-height: 100vh;
        }

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

        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: var(--gray-100);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: var(--gray-300);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: var(--gray-400);
        }

        .brand {
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--gray-200);
            flex-shrink: 0;
        }

        .brand-row {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            background: var(--primary-gradient);
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }

        .brand-title {
            font-weight: 800;
            font-size: 20px;
            color: var(--primary-red);
        }

        .brand-sub {
            font-size: 12px;
            color: var(--gray-500);
            margin-top: 2px;
        }

        .user-session {
            margin-top: 24px;
            padding: 20px;
            background: var(--gray-50);
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            position: relative;
            flex-shrink: 0;
        }

        .user-session::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-gradient);
            border-radius: var(--radius-lg) var(--radius-lg) 0 0;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 18px;
            border: 3px solid white;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
        }

        .user-details h3 {
            font-size: 16px;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 2px;
        }

        .user-details p {
            margin: 0;
            font-size: 13px;
            color: var(--gray-600);
        }

        .session-info {
            font-size: 12px;
            color: var(--gray-600);
            padding-top: 16px;
            border-top: 1px solid var(--gray-200);
        }

        .session-info div {
            margin-bottom: 6px;
            display: flex;
            justify-content: space-between;
        }

        .session-info strong {
            color: var(--gray-800);
            font-weight: 600;
        }

        .nav {
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-top: 24px;
            flex: 1;
            overflow-y: auto;
            padding-right: 4px;
        }

        .nav::-webkit-scrollbar {
            width: 4px;
        }

        .nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            border-radius: var(--radius-lg);
            color: var(--gray-700);
            text-decoration: none;
            transition: all var(--transition);
            font-weight: 500;
            font-size: 14px;
        }

        .nav a:hover {
            background: var(--primary-red-light);
            color: var(--primary-red);
            transform: translateX(4px);
        }

        .nav a.active {
            background: var(--primary-red-light);
            color: var(--primary-red);
            font-weight: 600;
            border-left: 3px solid var(--primary-red);
        }

        .nav a .icon {
            width: 18px;
            height: 18px;
            stroke-width: 2;
            flex-shrink: 0;
        }

        .nav-section {
            margin-top: 24px;
            margin-bottom: 8px;
            padding-left: 16px;
        }

        .nav-section-title {
            font-size: 12px;
            font-weight: 600;
            color: var(--gray-500);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .main {
            flex: 1;
            padding: 32px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
            overflow-y: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .header-content h1 {
            font-size: 36px;
            font-weight: 800;
            margin: 0;
            color: var(--gray-900);
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-content p {
            color: var(--gray-500);
            margin-top: 8px;
            font-size: 16px;
        }

        .btn {
            padding: 12px 24px;
            border-radius: var(--radius-lg);
            border: none;
            background: var(--primary-gradient);
            color: white;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all var(--transition);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.35);
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: var(--gray-500);
            font-size: 12px;
            border-top: 1px solid var(--gray-200);
            margin-top: 40px;
        }

        @media (max-width: 1200px) {
            .app-shell {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 16px;
                max-height: 80vh;
            }
            
            .main {
                padding: 24px;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            
            .header-content h1 {
                font-size: 28px;
            }
        }
    </style>
    {% block extra_css %}{% endblock %}
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
                    <div class=\"avatar\">
                        {{ app.user.nom|first }}{{ app.user.prenom|first }}
                    </div>
                    <div class=\"user-details\">
                        <h3>{{ app.user.nom }} {{ app.user.prenom }}</h3>
                        <p>📚 {{ app.user.classe is not null ? app.user.classe.nom : 'Aucune classe' }}</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email :</strong> {{ app.user.email }}</div>
                    <div><strong>Rôle :</strong> {{ app.user.roles[0]|replace({'ROLE_': ''})|capitalize }}</div>
                </div>
            </div>

            <nav class=\"nav\">
                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Général</div>
                    <a href=\"#\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                        </svg>
                        Tableau de bord
                    </a>
                    <a href=\"{{ path('app_dashboard') }}\" >
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                        </svg>
                        Mes Tâches
                    </a>
                    <a href=\"#\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/>
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                        </svg>
                        Objectifs
                    </a>
                    <a href=\"{{path('front_objectif_sante_index')}}\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/>
                            <path d=\"M8 12h8\"/>
                            <path d=\"M12 8v8\"/>
                        </svg>
                        Santé
                    </a>
                </div>

                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Académique</div>
                    <a href=\"{{ path('app_classe_users',{'id': app.user.classe.id}) }}\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                            <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                        </svg>
                        Classes
                    </a>
                    <a href=\"{{ path('app_matiere_classe_by_classe', {'id': app.user.classe.id}) }}\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                        </svg>
                        Matières
                    </a>
                    <a href=\"#\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"2\" ry=\"2\"/>
                            <path d=\"M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                            <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12\"/>
                            <line x1=\"8\" y1=\"17\" x2=\"16\" y2=\"17\"/>
                        </svg>
                        Salles
                    </a>
                </div>

                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Cours & Groupes</div>
                    <a href=\"{{path('app_seance_by_classe', {'id': app.user.classe.id})}}\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            <polyline points=\"12 6 12 12 16 14\"/>
                            <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12\"/>
                        </svg>
                        Séances
                    </a>
                    <a href=\"{{path('front_groupe_projet_index')}}\" {% if current_page == 'groupes' %}class=\"active\"{% endif %}>
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                            <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                            <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                            <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                        </svg>
                        Groupes
                    </a>
                </div>

                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Compte</div>
                    <a href=\"{{ path('app_profile') }}\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                            <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                        </svg>
                        Profil
                    </a>
                    <a href=\"{{ path('app_logout') }}\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </nav>
        </aside>

        <main class=\"main\">
            {% block content %}{% endblock %}
        </main>
    </div>
</body>
</html>
", "Front/base.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\base.html.twig");
    }
}
