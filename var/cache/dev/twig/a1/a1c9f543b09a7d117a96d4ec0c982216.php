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

/* user/show_task.html.twig */
class __TwigTemplate_d83416e51b0f06617cb4b71f29e1b9c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show_task.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show_task.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Détails de la tâche</title>
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
            align-items: flex-start;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
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

        .header-actions {
            display: flex;
            gap: 20px;
            align-items: flex-start;
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

        .btn-outline {
            background: transparent;
            border: 1px solid var(--primary-red);
            color: var(--primary-red);
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--primary-red-light);
            color: var(--primary-red);
            box-shadow: none;
            transform: translateY(-2px);
        }

        .btn-success {
            background: var(--secondary);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25);
        }

        .btn-success:hover {
            background: var(--secondary-dark);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35);
        }

        .btn-warning {
            background: var(--warning);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.25);
            color: white;
        }

        .btn-warning:hover {
            background: #D97706;
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.35);
        }

        .btn-danger {
            background: var(--danger);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.25);
        }

        .btn-danger:hover {
            background: #DC2626;
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.35);
        }

        .btn-secondary {
            background: var(--gray-500);
            box-shadow: 0 4px 12px rgba(107, 114, 128, 0.25);
        }

        .btn-group-vertical {
            display: flex;
            flex-direction: column;
            gap: 8px;
            min-width: 200px;
        }

        .btn-group-vertical .btn {
            margin-bottom: 0 !important;
            width: 100%;
            justify-content: center;
        }

        .task-detail-card {
            background: white;
            border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            margin-bottom: 24px;
        }

        .task-detail-header {
            padding: 24px;
            background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 16px;
        }

        .task-detail-title {
            margin: 0;
        }

        .task-detail-title h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .task-status-badge {
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
        }

        .task-detail-body {
            padding: 32px;
        }

        .task-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
            background: var(--gray-50);
            padding: 24px;
            border-radius: var(--radius-lg);
        }

        .task-info-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .task-info-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
        }

        .task-info-content {
            display: flex;
            flex-direction: column;
        }

        .task-info-label {
            font-size: 12px;
            color: var(--gray-500);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .task-info-value {
            font-size: 16px;
            font-weight: 600;
            color: var(--gray-800);
        }

        .task-description-section {
            margin-bottom: 32px;
        }

        .task-description-section h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .task-description-content {
            background: var(--gray-50);
            padding: 24px;
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            color: var(--gray-700);
            line-height: 1.7;
            white-space: pre-wrap;
        }

        .task-timeline {
            margin-top: 32px;
        }

        .task-timeline h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .timeline-item {
            display: flex;
            gap: 16px;
            padding: 16px 0;
            border-bottom: 1px solid var(--gray-200);
        }

        .timeline-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--primary-red-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
        }

        .timeline-content {
            flex: 1;
        }

        .timeline-title {
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 4px;
        }

        .timeline-date {
            font-size: 13px;
            color: var(--gray-500);
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--gray-200);
        }

        .priority-indicator {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .priority-high {
            background: #FEE2E2;
            color: #B91C1C;
        }

        .priority-medium {
            background: #FEF3C7;
            color: #92400E;
        }

        .priority-low {
            background: #D1FAE5;
            color: #065F46;
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
            
            .task-detail-body {
                padding: 20px;
            }
            
            .task-info-grid {
                grid-template-columns: 1fr;
            }

            .btn-group-vertical {
                min-width: 100%;
            }
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
                    <div class=\"avatar\">
                        ";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 659, $this->source); })()), "user", [], "any", false, false, false, 659), "nom", [], "any", false, false, false, 659)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 659, $this->source); })()), "user", [], "any", false, false, false, 659), "prenom", [], "any", false, false, false, 659)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 662, $this->source); })()), "user", [], "any", false, false, false, 662), "nom", [], "any", false, false, false, 662), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 662, $this->source); })()), "user", [], "any", false, false, false, 662), "prenom", [], "any", false, false, false, 662), "html", null, true);
        yield "</h3>
                        <p>📚 ";
        // line 663
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 663, $this->source); })()), "user", [], "any", false, false, false, 663), "classe", [], "any", false, false, false, 663))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 663, $this->source); })()), "user", [], "any", false, false, false, 663), "classe", [], "any", false, false, false, 663), "nom", [], "any", false, false, false, 663), "html", null, true)) : ("Aucune classe"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email :</strong> ";
        // line 667
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 667, $this->source); })()), "user", [], "any", false, false, false, 667), "email", [], "any", false, false, false, 667), "html", null, true);
        yield "</div>
                    <div><strong>Rôle :</strong> ";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 668, $this->source); })()), "user", [], "any", false, false, false, 668), "roles", [], "any", false, false, false, 668), 0, [], "array", false, false, false, 668), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <div class=\"nav-section\">
                    <div class=\"nav-section-title\">Général</div>
                    <a href=\"";
        // line 675
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                        </svg>
                        Tableau de bord
                    </a>
                    <a href=\"";
        // line 681
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\" class=\"active\">
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
        // line 694
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
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_users", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 706, $this->source); })()), "user", [], "any", false, false, false, 706), "classe", [], "any", false, false, false, 706), "id", [], "any", false, false, false, 706)]), "html", null, true);
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                            <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                        </svg>
                        Classes
                    </a>
                    <a href=\"";
        // line 713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_by_classe", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 713, $this->source); })()), "user", [], "any", false, false, false, 713), "classe", [], "any", false, false, false, 713), "id", [], "any", false, false, false, 713)]), "html", null, true);
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
                    <a href=\"#\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            <polyline points=\"12 6 12 12 16 14\"/>
                            <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12\"/>
                        </svg>
                        Séances
                    </a>
                    <a href=\"#\">
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
        // line 753
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                            <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                        </svg>
                        Profil
                    </a>
                    <a href=\"";
        // line 760
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
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>Détails de la tâche</h1>
                    <p>Visualisez et gérez les informations de votre tâche</p>
                </div>
                <div class=\"header-actions\">

                    <div style=\"display: flex; gap: 12px;\">
                        <a href=\"";
        // line 779
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\" class=\"btn btn-outline\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M19 12H5M12 19l-7-7 7-7\"/>
                            </svg>
                            Retour
                        </a>
                        <a href=\"";
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 785, $this->source); })()), "id", [], "any", false, false, false, 785)]), "html", null, true);
        yield "\" class=\"btn\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/>
                                <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
                            </svg>
                            Modifier
                        </a>
                    </div>
                </div>
            </header>

            ";
        // line 796
        $context["statusLabels"] = ["A_FAIRE" => "En attente", "EN_COURS" => "En cours", "TERMINEE" => "Terminée", "EN_RETARD" => "En retard", "PAUSED" => "En pause"];
        // line 797
        yield "            ";
        $context["statusColors"] = ["A_FAIRE" => "#FEF3C7", "EN_COURS" => "#DBEAFE", "TERMINEE" => "#D1FAE5", "EN_RETARD" => "#FEE2E2", "PAUSED" => "#F3F4F6"];
        // line 798
        yield "            ";
        $context["priorityLabels"] = ["ELEVEE" => "Haute", "MOYEN" => "Moyenne", "FAIBLE" => "Basse"];
        // line 799
        yield "            ";
        $context["priorityClasses"] = ["ELEVEE" => "priority-high", "MOYEN" => "priority-medium", "FAIBLE" => "priority-low"];
        // line 800
        yield "            ";
        $context["typeLabels"] = ["MANUEL" => "Manuel", "REUNION" => "Réunion", "REVISION" => "Révision", "SANTE" => "Santé", "EMPLOI" => "Emploi du temps"];
        // line 801
        yield "
            <div class=\"task-detail-card\">
                <div class=\"task-detail-header\">
                    <div class=\"task-detail-title\">
                        <h2>";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "titre", [], "any", true, true, false, 805)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 805, $this->source); })()), "titre", [], "any", false, false, false, 805), "Tâche sans titre")) : ("Tâche sans titre")), "html", null, true);
        yield "</h2>
                        <div style=\"display: flex; gap: 12px; align-items: center; margin-top: 8px;\">
                            <span class=\"task-status-badge\" style=\"background: ";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 807, $this->source); })()), "statut", [], "any", false, false, false, 807), [], "array", true, true, false, 807)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusColors"]) || array_key_exists("statusColors", $context) ? $context["statusColors"] : (function () { throw new RuntimeError('Variable "statusColors" does not exist.', 807, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 807, $this->source); })()), "statut", [], "any", false, false, false, 807), [], "array", false, false, false, 807), "#FEF3C7")) : ("#FEF3C7")), "html", null, true);
        yield "; color: var(--gray-800);\">
                                ";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 808, $this->source); })()), "statut", [], "any", false, false, false, 808), [], "array", true, true, false, 808)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 808, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 808, $this->source); })()), "statut", [], "any", false, false, false, 808), [], "array", false, false, false, 808), "En attente")) : ("En attente")), "html", null, true);
        yield "
                            </span>
                            <span class=\"priority-indicator ";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["priorityClasses"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 810, $this->source); })()), "priorite", [], "any", false, false, false, 810), [], "array", true, true, false, 810)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["priorityClasses"]) || array_key_exists("priorityClasses", $context) ? $context["priorityClasses"] : (function () { throw new RuntimeError('Variable "priorityClasses" does not exist.', 810, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 810, $this->source); })()), "priorite", [], "any", false, false, false, 810), [], "array", false, false, false, 810), "priority-medium")) : ("priority-medium")), "html", null, true);
        yield "\">
                                <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 2v20M4 10l8-8 8 8\"/>
                                </svg>
                                Priorité ";
        // line 814
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["priorityLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 814, $this->source); })()), "priorite", [], "any", false, false, false, 814), [], "array", true, true, false, 814)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["priorityLabels"]) || array_key_exists("priorityLabels", $context) ? $context["priorityLabels"] : (function () { throw new RuntimeError('Variable "priorityLabels" does not exist.', 814, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 814, $this->source); })()), "priorite", [], "any", false, false, false, 814), [], "array", false, false, false, 814), "Moyenne")) : ("Moyenne")), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>
                                        <!-- Action Buttons -->
                    <div>
                        <form method=\"post\" action=\"";
        // line 820
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 820, $this->source); })()), "id", [], "any", false, false, false, 820)]), "html", null, true);
        yield "\" class=\"action-buttons-form\">
                            <div class=\"btn-group-vertical\" role=\"group\" aria-label=\"Actions de la tâche\">
                                <!-- Start Button -->
                                ";
        // line 823
        if ((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 823, $this->source); })()), "statut", [], "any", false, false, false, 823) != "En cours") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 823, $this->source); })()), "statut", [], "any", false, false, false, 823) != "EN_COURS")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 823, $this->source); })()), "statut", [], "any", false, false, false, 823) != "Terminé")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 823, $this->source); })()), "statut", [], "any", false, false, false, 823) != "TERMINEE")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 823, $this->source); })()), "statut", [], "any", false, false, false, 823) != "Abandonné"))) {
            // line 824
            yield "                                    <button type=\"submit\" name=\"action\" value=\"EN_COURS\" class=\"btn btn-success\">
                                        <i class=\"mdi mdi-play-circle-outline me-2\"></i> Démarrer
                                    </button>
                                ";
        }
        // line 828
        yield "                                
                                <!-- Pause Button -->
                                ";
        // line 830
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 830, $this->source); })()), "statut", [], "any", false, false, false, 830) == "En cours") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 830, $this->source); })()), "statut", [], "any", false, false, false, 830) == "EN_COURS"))) {
            // line 831
            yield "                                    <button type=\"submit\" name=\"action\" value=\"PAUSED\" class=\"btn btn-warning\">
                                        <i class=\"mdi mdi-pause-circle-outline me-2\"></i> Pause
                                    </button>
                                ";
        }
        // line 835
        yield "                                
                                <!-- Complete Button -->
                                ";
        // line 837
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 837, $this->source); })()), "statut", [], "any", false, false, false, 837) == "En cours") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 837, $this->source); })()), "statut", [], "any", false, false, false, 837) == "EN_COURS")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 837, $this->source); })()), "statut", [], "any", false, false, false, 837) == "PAUSED"))) {
            // line 838
            yield "                                    <button type=\"submit\" name=\"action\" value=\"TERMINE\" class=\"btn btn-primary\">
                                        <i class=\"mdi mdi-check-circle-outline me-2\"></i> Terminer
                                    </button>
                                ";
        }
        // line 842
        yield "                                
                                <!-- Abandon Button -->
                                ";
        // line 844
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 844, $this->source); })()), "statut", [], "any", false, false, false, 844) != "Terminé") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 844, $this->source); })()), "statut", [], "any", false, false, false, 844) != "TERMINEE")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 844, $this->source); })()), "statut", [], "any", false, false, false, 844) != "Abandonné"))) {
            // line 845
            yield "                                    <button type=\"submit\" name=\"action\" value=\"ABANDON\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir abandonner cette tâche ?');\">
                                        <i class=\"mdi mdi-close-circle-outline me-2\"></i> Abandonner
                                    </button>
                                ";
        }
        // line 849
        yield "                                
                                <!-- No Actions Message -->
                                ";
        // line 851
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 851, $this->source); })()), "statut", [], "any", false, false, false, 851) == "Terminé") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 851, $this->source); })()), "statut", [], "any", false, false, false, 851) == "TERMINEE")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 851, $this->source); })()), "statut", [], "any", false, false, false, 851) == "Abandonné"))) {
            // line 852
            yield "                                    <button type=\"button\" class=\"btn btn-secondary\" disabled>
                                        <i class=\"mdi mdi-lock-outline me-2\"></i> Actions terminées
                                    </button>
                                ";
        }
        // line 856
        yield "                            </div>
                        </form>
                    </div>
                    <span class=\"task-tag tag-type-";
        // line 859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 859, $this->source); })()), "type", [], "any", false, false, false, 859)), "manuel"), "html", null, true);
        yield "\" style=\"padding: 8px 16px; font-size: 13px;\">
                        ";
        // line 860
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["typeLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 860, $this->source); })()), "type", [], "any", false, false, false, 860), [], "array", true, true, false, 860)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeLabels"]) || array_key_exists("typeLabels", $context) ? $context["typeLabels"] : (function () { throw new RuntimeError('Variable "typeLabels" does not exist.', 860, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 860, $this->source); })()), "type", [], "any", false, false, false, 860), [], "array", false, false, false, 860), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 860, $this->source); })()), "type", [], "any", false, false, false, 860)))) : (Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 860, $this->source); })()), "type", [], "any", false, false, false, 860)))), "html", null, true);
        yield "
                    </span>
                </div>

                <div class=\"task-detail-body\">
                    <div class=\"task-info-grid\">
                        <div class=\"task-info-item\">
                            <div class=\"task-info-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                </svg>
                            </div>
                            <div class=\"task-info-content\">
                                <span class=\"task-info-label\">Date de début</span>
                                <span class=\"task-info-value\">";
        // line 877
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 877, $this->source); })()), "dateDebut", [], "any", false, false, false, 877)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 877, $this->source); })()), "dateDebut", [], "any", false, false, false, 877), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "</span>
                            </div>
                        </div>
                        <div class=\"task-info-item\">
                            <div class=\"task-info-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                </svg>
                            </div>
                            <div class=\"task-info-content\">
                                <span class=\"task-info-label\">Date de fin</span>
                                <span class=\"task-info-value\">";
        // line 891
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 891, $this->source); })()), "dateFin", [], "any", false, false, false, 891)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 891, $this->source); })()), "dateFin", [], "any", false, false, false, 891), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "</span>
                            </div>
                        </div>
                        <div class=\"task-info-item\">
                            <div class=\"task-info-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 8v4l3 3\"/>
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                </svg>
                            </div>
                            <div class=\"task-info-content\">
                                <span class=\"task-info-label\">Statut</span>
                                <span class=\"task-info-value\">";
        // line 903
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 903, $this->source); })()), "statut", [], "any", false, false, false, 903), [], "array", true, true, false, 903)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 903, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 903, $this->source); })()), "statut", [], "any", false, false, false, 903), [], "array", false, false, false, 903), "En attente")) : ("En attente")), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"task-info-item\">
                            <div class=\"task-info-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                                </svg>
                            </div>
                            <div class=\"task-info-content\">
                                <span class=\"task-info-label\">Créé par</span>
                                <span class=\"task-info-value\">";
        // line 915
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 915, $this->source); })()), "user", [], "any", false, false, false, 915)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 915, $this->source); })()), "user", [], "any", false, false, false, 915), "nom", [], "any", false, false, false, 915) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 915, $this->source); })()), "user", [], "any", false, false, false, 915), "prenom", [], "any", false, false, false, 915)), "html", null, true)) : ("Vous"));
        yield "</span>
                            </div>
                        </div>
                    </div>
                    ";
        // line 919
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 919, $this->source); })()), "description", [], "any", false, false, false, 919)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 920
            yield "                    <div class=\"task-description-section\">
                        <h3>
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"/>
                                <polyline points=\"7 10 12 15 17 10\"/>
                                <line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\"/>
                            </svg>
                            Description
                        </h3>
                        <div class=\"task-description-content\">
                            ";
            // line 930
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 930, $this->source); })()), "description", [], "any", false, false, false, 930), "html", null, true));
            yield "
                        </div>
                    </div>
                    ";
        }
        // line 934
        yield "
                    <div class=\"task-timeline\">
                        <h3>
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                <polyline points=\"12 6 12 12 16 14\"/>
                            </svg>
                            Chronologie
                        </h3>
                        <div class=\"timeline-item\">
                            <div class=\"timeline-icon\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                                </svg>
                            </div>
                            <div class=\"timeline-content\">
                                <div class=\"timeline-title\">Tâche créée</div>
                                <div class=\"timeline-date\">";
        // line 952
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 952, $this->source); })()), "createdAt", [], "any", false, false, false, 952)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 952, $this->source); })()), "createdAt", [], "any", false, false, false, 952), "d/m/Y H:i"), "html", null, true)) : ("Date inconnue"));
        yield "</div>
                            </div>
                        </div>
                        ";
        // line 955
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 955, $this->source); })()), "updatedAt", [], "any", false, false, false, 955) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 955, $this->source); })()), "updatedAt", [], "any", false, false, false, 955) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 955, $this->source); })()), "createdAt", [], "any", false, false, false, 955)))) {
            // line 956
            yield "                        <div class=\"timeline-item\">
                            <div class=\"timeline-icon\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/>
                                    <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
                                </svg>
                            </div>
                            <div class=\"timeline-content\">
                                <div class=\"timeline-title\">Dernière modification</div>
                                <div class=\"timeline-date\">";
            // line 965
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 965, $this->source); })()), "updatedAt", [], "any", false, false, false, 965), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 969
        yield "                    </div>

                    <div class=\"action-buttons\">
                        <a href=\"";
        // line 972
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 972, $this->source); })()), "id", [], "any", false, false, false, 972)]), "html", null, true);
        yield "\" class=\"btn btn-outline\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/>
                                <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
                            </svg>
                            Modifier
                        </a>
                        <form method=\"post\" action=\"";
        // line 979
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 979, $this->source); })()), "id", [], "any", false, false, false, 979)]), "html", null, true);
        yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 980
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 980, $this->source); })()), "id", [], "any", false, false, false, 980))), "html", null, true);
        yield "\">
                            <button class=\"btn\" style=\"background: var(--danger);\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <polyline points=\"3 6 5 6 21 6\"/>
                                    <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                                    <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\"/>
                                    <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\"/>
                                </svg>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"footer\">
                <p>ESPRIT Assistant Étudiant • © ";
        // line 996
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " • Tous droits réservés</p>
            </div>
        </main>
    </div>

    <script>
        function toggleTask(taskId) {
            fetch(`/tasks/\${taskId}/toggle`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log('Tâche mise à jour:', data);
                location.reload();
            })
            .catch(error => console.error('Erreur:', error));
        }

        // Highlight active section based on current page
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav a');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/show_task.html.twig";
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
        return array (  1190 => 996,  1171 => 980,  1167 => 979,  1157 => 972,  1152 => 969,  1145 => 965,  1134 => 956,  1132 => 955,  1126 => 952,  1106 => 934,  1099 => 930,  1087 => 920,  1085 => 919,  1078 => 915,  1063 => 903,  1048 => 891,  1031 => 877,  1011 => 860,  1007 => 859,  1002 => 856,  996 => 852,  994 => 851,  990 => 849,  984 => 845,  982 => 844,  978 => 842,  972 => 838,  970 => 837,  966 => 835,  960 => 831,  958 => 830,  954 => 828,  948 => 824,  946 => 823,  940 => 820,  931 => 814,  924 => 810,  919 => 808,  915 => 807,  910 => 805,  904 => 801,  901 => 800,  898 => 799,  895 => 798,  892 => 797,  890 => 796,  876 => 785,  867 => 779,  845 => 760,  835 => 753,  792 => 713,  782 => 706,  767 => 694,  751 => 681,  742 => 675,  732 => 668,  728 => 667,  721 => 663,  715 => 662,  708 => 659,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Détails de la tâche</title>
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
            align-items: flex-start;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
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

        .header-actions {
            display: flex;
            gap: 20px;
            align-items: flex-start;
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

        .btn-outline {
            background: transparent;
            border: 1px solid var(--primary-red);
            color: var(--primary-red);
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--primary-red-light);
            color: var(--primary-red);
            box-shadow: none;
            transform: translateY(-2px);
        }

        .btn-success {
            background: var(--secondary);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25);
        }

        .btn-success:hover {
            background: var(--secondary-dark);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35);
        }

        .btn-warning {
            background: var(--warning);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.25);
            color: white;
        }

        .btn-warning:hover {
            background: #D97706;
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.35);
        }

        .btn-danger {
            background: var(--danger);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.25);
        }

        .btn-danger:hover {
            background: #DC2626;
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.35);
        }

        .btn-secondary {
            background: var(--gray-500);
            box-shadow: 0 4px 12px rgba(107, 114, 128, 0.25);
        }

        .btn-group-vertical {
            display: flex;
            flex-direction: column;
            gap: 8px;
            min-width: 200px;
        }

        .btn-group-vertical .btn {
            margin-bottom: 0 !important;
            width: 100%;
            justify-content: center;
        }

        .task-detail-card {
            background: white;
            border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            margin-bottom: 24px;
        }

        .task-detail-header {
            padding: 24px;
            background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 16px;
        }

        .task-detail-title {
            margin: 0;
        }

        .task-detail-title h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .task-status-badge {
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
        }

        .task-detail-body {
            padding: 32px;
        }

        .task-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
            background: var(--gray-50);
            padding: 24px;
            border-radius: var(--radius-lg);
        }

        .task-info-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .task-info-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
        }

        .task-info-content {
            display: flex;
            flex-direction: column;
        }

        .task-info-label {
            font-size: 12px;
            color: var(--gray-500);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .task-info-value {
            font-size: 16px;
            font-weight: 600;
            color: var(--gray-800);
        }

        .task-description-section {
            margin-bottom: 32px;
        }

        .task-description-section h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .task-description-content {
            background: var(--gray-50);
            padding: 24px;
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            color: var(--gray-700);
            line-height: 1.7;
            white-space: pre-wrap;
        }

        .task-timeline {
            margin-top: 32px;
        }

        .task-timeline h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .timeline-item {
            display: flex;
            gap: 16px;
            padding: 16px 0;
            border-bottom: 1px solid var(--gray-200);
        }

        .timeline-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--primary-red-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-red);
        }

        .timeline-content {
            flex: 1;
        }

        .timeline-title {
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 4px;
        }

        .timeline-date {
            font-size: 13px;
            color: var(--gray-500);
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--gray-200);
        }

        .priority-indicator {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .priority-high {
            background: #FEE2E2;
            color: #B91C1C;
        }

        .priority-medium {
            background: #FEF3C7;
            color: #92400E;
        }

        .priority-low {
            background: #D1FAE5;
            color: #065F46;
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
            
            .task-detail-body {
                padding: 20px;
            }
            
            .task-info-grid {
                grid-template-columns: 1fr;
            }

            .btn-group-vertical {
                min-width: 100%;
            }
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
                    <a href=\"{{ path('app_dashboard') }}\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                        </svg>
                        Tableau de bord
                    </a>
                    <a href=\"{{ path('app_my_tasks') }}\" class=\"active\">
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
                    <a href=\"#\">
                        <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            <polyline points=\"12 6 12 12 16 14\"/>
                            <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12\"/>
                        </svg>
                        Séances
                    </a>
                    <a href=\"#\">
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
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>Détails de la tâche</h1>
                    <p>Visualisez et gérez les informations de votre tâche</p>
                </div>
                <div class=\"header-actions\">

                    <div style=\"display: flex; gap: 12px;\">
                        <a href=\"{{ path('app_my_tasks') }}\" class=\"btn btn-outline\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M19 12H5M12 19l-7-7 7-7\"/>
                            </svg>
                            Retour
                        </a>
                        <a href=\"{{ path('app_task_edit', {'id': task.id}) }}\" class=\"btn\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/>
                                <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
                            </svg>
                            Modifier
                        </a>
                    </div>
                </div>
            </header>

            {% set statusLabels = {'A_FAIRE': 'En attente', 'EN_COURS': 'En cours', 'TERMINEE': 'Terminée', 'EN_RETARD': 'En retard', 'PAUSED': 'En pause'} %}
            {% set statusColors = {'A_FAIRE': '#FEF3C7', 'EN_COURS': '#DBEAFE', 'TERMINEE': '#D1FAE5', 'EN_RETARD': '#FEE2E2', 'PAUSED': '#F3F4F6'} %}
            {% set priorityLabels = {'ELEVEE': 'Haute', 'MOYEN': 'Moyenne', 'FAIBLE': 'Basse'} %}
            {% set priorityClasses = {'ELEVEE': 'priority-high', 'MOYEN': 'priority-medium', 'FAIBLE': 'priority-low'} %}
            {% set typeLabels = {'MANUEL': 'Manuel', 'REUNION': 'Réunion', 'REVISION': 'Révision', 'SANTE': 'Santé', 'EMPLOI': 'Emploi du temps'} %}

            <div class=\"task-detail-card\">
                <div class=\"task-detail-header\">
                    <div class=\"task-detail-title\">
                        <h2>{{ task.titre|default('Tâche sans titre') }}</h2>
                        <div style=\"display: flex; gap: 12px; align-items: center; margin-top: 8px;\">
                            <span class=\"task-status-badge\" style=\"background: {{ statusColors[task.statut]|default('#FEF3C7') }}; color: var(--gray-800);\">
                                {{ statusLabels[task.statut]|default('En attente') }}
                            </span>
                            <span class=\"priority-indicator {{ priorityClasses[task.priorite]|default('priority-medium') }}\">
                                <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 2v20M4 10l8-8 8 8\"/>
                                </svg>
                                Priorité {{ priorityLabels[task.priorite]|default('Moyenne') }}
                            </span>
                        </div>
                    </div>
                                        <!-- Action Buttons -->
                    <div>
                        <form method=\"post\" action=\"{{ path('app_task_show', {'id': task.id}) }}\" class=\"action-buttons-form\">
                            <div class=\"btn-group-vertical\" role=\"group\" aria-label=\"Actions de la tâche\">
                                <!-- Start Button -->
                                {% if task.statut != 'En cours' and task.statut != 'EN_COURS' and task.statut != 'Terminé' and task.statut != 'TERMINEE' and task.statut != 'Abandonné' %}
                                    <button type=\"submit\" name=\"action\" value=\"EN_COURS\" class=\"btn btn-success\">
                                        <i class=\"mdi mdi-play-circle-outline me-2\"></i> Démarrer
                                    </button>
                                {% endif %}
                                
                                <!-- Pause Button -->
                                {% if task.statut == 'En cours' or task.statut == 'EN_COURS' %}
                                    <button type=\"submit\" name=\"action\" value=\"PAUSED\" class=\"btn btn-warning\">
                                        <i class=\"mdi mdi-pause-circle-outline me-2\"></i> Pause
                                    </button>
                                {% endif %}
                                
                                <!-- Complete Button -->
                                {% if task.statut == 'En cours' or task.statut == 'EN_COURS' or task.statut == 'PAUSED' %}
                                    <button type=\"submit\" name=\"action\" value=\"TERMINE\" class=\"btn btn-primary\">
                                        <i class=\"mdi mdi-check-circle-outline me-2\"></i> Terminer
                                    </button>
                                {% endif %}
                                
                                <!-- Abandon Button -->
                                {% if task.statut != 'Terminé' and task.statut != 'TERMINEE' and task.statut != 'Abandonné' %}
                                    <button type=\"submit\" name=\"action\" value=\"ABANDON\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir abandonner cette tâche ?');\">
                                        <i class=\"mdi mdi-close-circle-outline me-2\"></i> Abandonner
                                    </button>
                                {% endif %}
                                
                                <!-- No Actions Message -->
                                {% if task.statut == 'Terminé' or task.statut == 'TERMINEE' or task.statut == 'Abandonné' %}
                                    <button type=\"button\" class=\"btn btn-secondary\" disabled>
                                        <i class=\"mdi mdi-lock-outline me-2\"></i> Actions terminées
                                    </button>
                                {% endif %}
                            </div>
                        </form>
                    </div>
                    <span class=\"task-tag tag-type-{{ task.type|lower|default('manuel') }}\" style=\"padding: 8px 16px; font-size: 13px;\">
                        {{ typeLabels[task.type]|default(task.type|capitalize) }}
                    </span>
                </div>

                <div class=\"task-detail-body\">
                    <div class=\"task-info-grid\">
                        <div class=\"task-info-item\">
                            <div class=\"task-info-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                </svg>
                            </div>
                            <div class=\"task-info-content\">
                                <span class=\"task-info-label\">Date de début</span>
                                <span class=\"task-info-value\">{{ task.dateDebut ? task.dateDebut|date('d/m/Y H:i') : 'Non définie' }}</span>
                            </div>
                        </div>
                        <div class=\"task-info-item\">
                            <div class=\"task-info-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                </svg>
                            </div>
                            <div class=\"task-info-content\">
                                <span class=\"task-info-label\">Date de fin</span>
                                <span class=\"task-info-value\">{{ task.dateFin ? task.dateFin|date('d/m/Y H:i') : 'Non définie' }}</span>
                            </div>
                        </div>
                        <div class=\"task-info-item\">
                            <div class=\"task-info-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 8v4l3 3\"/>
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                </svg>
                            </div>
                            <div class=\"task-info-content\">
                                <span class=\"task-info-label\">Statut</span>
                                <span class=\"task-info-value\">{{ statusLabels[task.statut]|default('En attente') }}</span>
                            </div>
                        </div>
                        <div class=\"task-info-item\">
                            <div class=\"task-info-icon\">
                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                                </svg>
                            </div>
                            <div class=\"task-info-content\">
                                <span class=\"task-info-label\">Créé par</span>
                                <span class=\"task-info-value\">{{ task.user ? task.user.nom ~ ' ' ~ task.user.prenom : 'Vous' }}</span>
                            </div>
                        </div>
                    </div>
                    {% if task.description %}
                    <div class=\"task-description-section\">
                        <h3>
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"/>
                                <polyline points=\"7 10 12 15 17 10\"/>
                                <line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\"/>
                            </svg>
                            Description
                        </h3>
                        <div class=\"task-description-content\">
                            {{ task.description|nl2br }}
                        </div>
                    </div>
                    {% endif %}

                    <div class=\"task-timeline\">
                        <h3>
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                <polyline points=\"12 6 12 12 16 14\"/>
                            </svg>
                            Chronologie
                        </h3>
                        <div class=\"timeline-item\">
                            <div class=\"timeline-icon\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                                </svg>
                            </div>
                            <div class=\"timeline-content\">
                                <div class=\"timeline-title\">Tâche créée</div>
                                <div class=\"timeline-date\">{{ task.createdAt ? task.createdAt|date('d/m/Y H:i') : 'Date inconnue' }}</div>
                            </div>
                        </div>
                        {% if task.updatedAt and task.updatedAt != task.createdAt %}
                        <div class=\"timeline-item\">
                            <div class=\"timeline-icon\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/>
                                    <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
                                </svg>
                            </div>
                            <div class=\"timeline-content\">
                                <div class=\"timeline-title\">Dernière modification</div>
                                <div class=\"timeline-date\">{{ task.updatedAt|date('d/m/Y H:i') }}</div>
                            </div>
                        </div>
                        {% endif %}
                    </div>

                    <div class=\"action-buttons\">
                        <a href=\"{{ path('app_task_edit', {'id': task.id}) }}\" class=\"btn btn-outline\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/>
                                <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/>
                            </svg>
                            Modifier
                        </a>
                        <form method=\"post\" action=\"{{ path('app_tache_delete', {'id': task.id}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ task.id) }}\">
                            <button class=\"btn\" style=\"background: var(--danger);\">
                                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <polyline points=\"3 6 5 6 21 6\"/>
                                    <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                                    <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\"/>
                                    <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\"/>
                                </svg>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"footer\">
                <p>ESPRIT Assistant Étudiant • © {{ \"now\"|date(\"Y\") }} • Tous droits réservés</p>
            </div>
        </main>
    </div>

    <script>
        function toggleTask(taskId) {
            fetch(`/tasks/\${taskId}/toggle`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log('Tâche mise à jour:', data);
                location.reload();
            })
            .catch(error => console.error('Erreur:', error));
        }

        // Highlight active section based on current page
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav a');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>", "user/show_task.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\show_task.html.twig");
    }
}
