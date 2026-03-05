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

/* matiere_classe/Classes.html.twig */
class __TwigTemplate_7b6afcda33dbf42c20dcaf00c95af302 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/Classes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/Classes.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield " - Matières</title>
    <style>
        :root {
            --font-size: 16px;
            --red-500: #ef4444;
            --red-600: #dc2626;
            --red-700: #b91c1c;
            --orange-500: #f97316;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-900: #111827;
            --blue-500: #3b82f6;
            --green-500: #22c55e;
            --purple-500: #8b5cf6;
            --pink-500: #ec4899;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.15);
            --radius-lg: 16px;
            --radius-xl: 20px;
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
            background: linear-gradient(135deg, var(--gray-50) 0%, #ffffff 30%, var(--gray-50) 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .app-shell {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR - EXACT SAME AS BEFORE */
        .sidebar {
            width: 300px;
            background: linear-gradient(165deg, rgba(255, 255, 255, 0.92) 0%, rgba(249, 250, 251, 0.88) 100%);
            border-right: 1px solid rgba(229, 231, 235, 0.6);
            padding: 28px 24px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            box-shadow: var(--shadow-md);
        }

        .brand {
            margin-bottom: 36px;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
        }

        .brand-row {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand-icon {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--red-700) 100%);
            width: 48px;
            height: 48px;
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 20px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }

        .brand-title {
            font-weight: 800;
            font-size: 20px;
            color: var(--gray-900);
        }

        .brand-sub {
            font-size: 13px;
            color: var(--gray-500);
            margin-top: 6px;
        }

        .user-session {
            margin-top: 28px;
            padding: 24px;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.5);
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
        }

        .user-session::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500), var(--orange-500));
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 20px;
            border: 3px solid white;
            box-shadow: 0 6px 16px rgba(220, 38, 38, 0.2);
        }

        .user-details h3 {
            font-size: 16px;
            font-weight: 700;
            color: #1f2937;
        }

        .user-details p {
            margin: 6px 0 0;
            font-size: 14px;
            color: #4b5563;
        }

        .session-info {
            font-size: 13px;
            color: #4b5563;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }

        .session-info div {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
        }

        .session-info strong {
            color: #1f2937;
            font-weight: 600;
        }

        .nav {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-top: 32px;
        }

        .nav a {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 16px 20px;
            border-radius: var(--radius-lg);
            color: #374151;
            text-decoration: none;
            transition: all var(--transition);
            font-weight: 500;
        }

        .nav a:hover {
            background: linear-gradient(90deg, rgba(254, 242, 242, 0.7) 0%, rgba(254, 242, 242, 0.4) 100%);
            color: var(--red-600);
            transform: translateX(8px);
        }

        .nav a.active {
            background: linear-gradient(90deg, rgba(254, 242, 242, 0.9) 0%, rgba(254, 242, 242, 0.6) 100%);
            color: var(--red-600);
            font-weight: 600;
            border-left: 4px solid var(--red-500);
        }

        .nav a .icon {
            width: 20px;
            height: 20px;
            stroke-width: 2;
        }

        /* MAIN CONTENT */
        .main {
            flex: 1;
            padding: 32px 40px;
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
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
        }

        .header-content {
            flex: 1;
        }

        .header-content h1 {
            font-size: 36px;
            font-weight: 800;
            margin: 0 0 8px 0;
            color: var(--gray-900);
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-content p {
            color: var(--gray-500);
            font-size: 16px;
            margin: 0;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--gray-600);
            text-decoration: none;
            font-weight: 500;
            padding: 10px 18px;
            border-radius: 10px;
            transition: all var(--transition);
            border: 2px solid var(--gray-200);
            background: white;
        }

        .back-link:hover {
            background: var(--gray-100);
            color: var(--gray-900);
            border-color: var(--gray-300);
            transform: translateY(-2px);
        }

        /* STATS SECTION - FIXED */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-md);
            padding: 24px;
            text-align: center;
            transition: all var(--transition);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--blue-500), var(--purple-500));
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--blue-500);
        }

        .stat-value {
            font-size: 36px;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 14px;
            color: var(--gray-600);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* CLASS INFO CARD */
        .class-info-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            margin-bottom: 32px;
        }

        .class-header {
            display: flex;
            align-items: center;
            gap: 24px;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.5);
        }

        .class-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--blue-500) 0%, #6366f1 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 800;
            flex-shrink: 0;
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);
        }

        .class-info {
            flex: 1;
        }

        .class-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .class-niveau {
            display: inline-block;
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-600) 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .class-description {
            color: var(--gray-600);
            font-size: 15px;
            line-height: 1.6;
        }

        /* MATIERES GRID */
        .matieres-section {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-lg);
            padding: 32px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.5);
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--gray-900);
            margin: 0;
        }

        .matieres-count {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            padding: 10px 22px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        /* MATIERE CARDS GRID - FIXED */
        .matieres-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 24px;
        }

        .matiere-card {
            background: white;
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            padding: 28px;
            transition: all var(--transition);
            position: relative;
            overflow: hidden;
        }

        .matiere-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-xl);
            border-color: var(--blue-500);
        }

        .matiere-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--blue-500), var(--purple-500));
        }

        .matiere-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .matiere-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 700;
            color: white;
            flex-shrink: 0;
        }

        .matiere-info {
            flex: 1;
        }

        .matiere-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 4px;
        }

        .matiere-subtitle {
            font-size: 14px;
            color: var(--gray-600);
            font-weight: 500;
        }

        .matiere-details {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--gray-100);
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: var(--gray-700);
        }

        .detail-item svg {
            width: 16px;
            height: 16px;
            color: var(--gray-500);
            flex-shrink: 0;
        }

        .detail-value {
            font-weight: 600;
            color: var(--gray-900);
        }

        .matiere-description {
            color: var(--gray-600);
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .matiere-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .matiere-tag {
            padding: 6px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .tag-coefficient {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.15) 0%, rgba(239, 68, 68, 0.1) 100%);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .tag-charge {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.1) 100%);
            color: #2563EB;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .tag-complexity {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.1) 100%);
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .matiere-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--gray-100);
        }

        .action-btn {
            padding: 10px 18px;
            border-radius: 10px;
            border: 2px solid var(--gray-300);
            background: white;
            color: var(--gray-700);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 1;
            justify-content: center;
            text-decoration: none;
        }

        .action-btn:hover {
            background: var(--gray-50);
            border-color: var(--gray-400);
            transform: translateY(-2px);
        }

        .action-btn.primary {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--purple-500) 100%);
            color: white;
            border: none;
        }

        .action-btn.primary:hover {
            background: linear-gradient(135deg, var(--blue-600) 0%, var(--purple-600) 100%);
            box-shadow: 0 4px 16px rgba(59, 130, 246, 0.3);
        }

        /* EMPTY STATE */
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 80px 20px;
            color: var(--gray-500);
        }

        .empty-state svg {
            width: 80px;
            height: 80px;
            margin-bottom: 24px;
            opacity: 0.3;
        }

        .empty-state h3 {
            font-size: 22px;
            margin-bottom: 12px;
            color: var(--gray-700);
            font-weight: 600;
        }

        .empty-state p {
            font-size: 15px;
            margin-bottom: 32px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        /* COLOR THEMES FOR MATIERE ICONS */
        .icon-default {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--purple-500) 100%);
        }

        .icon-math {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        }

        .icon-physique {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }

        .icon-informatique {
            background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
        }

        .icon-chimie {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1200px) {
            .matieres-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }

        @media (max-width: 1024px) {
            .app-shell {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 20px;
            }
            
            .main {
                padding: 24px;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .header-content h1 {
                font-size: 28px;
            }
            
            .matieres-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            
            .matieres-count {
                align-self: flex-start;
            }
            
            .class-header {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .main {
                padding: 20px;
            }
            
            .class-info-card,
            .matieres-section {
                padding: 24px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .matiere-header {
                flex-direction: column;
                text-align: center;
                gap: 16px;
            }
            
            .matiere-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <!-- SIDEBAR - UNCHANGED -->
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
        // line 772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 772, $this->source); })()), "user", [], "any", false, false, false, 772), "nom", [], "any", false, false, false, 772)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 772, $this->source); })()), "user", [], "any", false, false, false, 772), "prenom", [], "any", false, false, false, 772)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 775, $this->source); })()), "user", [], "any", false, false, false, 775), "nom", [], "any", false, false, false, 775), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 775, $this->source); })()), "user", [], "any", false, false, false, 775), "prenom", [], "any", false, false, false, 775), "html", null, true);
        yield "</h3>
                        <p>📚 ";
        // line 776
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 776, $this->source); })()), "user", [], "any", false, false, false, 776), "classe", [], "any", false, false, false, 776))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 776, $this->source); })()), "user", [], "any", false, false, false, 776), "classe", [], "any", false, false, false, 776), "nom", [], "any", false, false, false, 776), "html", null, true)) : ("Aucune classe"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 780, $this->source); })()), "user", [], "any", false, false, false, 780), "email", [], "any", false, false, false, 780), "html", null, true);
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 781
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 781, $this->source); })()), "user", [], "any", false, false, false, 781), "roles", [], "any", false, false, false, 781), 0, [], "array", false, false, false, 781), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <a href=\"";
        // line 786
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"";
        // line 792
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    Mes Tâches
                </a>
                <a href=\"";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_users", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 798, $this->source); })()), "user", [], "any", false, false, false, 798), "classe", [], "any", false, false, false, 798), "id", [], "any", false, false, false, 798)]), "html", null, true);
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Ma Classe
                </a>
                <a href=\"";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_by_classe", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 805, $this->source); })()), "user", [], "any", false, false, false, 805), "classe", [], "any", false, false, false, 805), "id", [], "any", false, false, false, 805)]), "html", null, true);
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                    </svg>
                    Mes Matières
                </a>
                <a href=\"";
        // line 811
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"";
        // line 818
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT - FIXED -->
        <main class=\"main\">
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>Mes Matières</h1>
                    <p>Liste des matières de ma classe ";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 832, $this->source); })()), "nom", [], "any", false, false, false, 832), "html", null, true);
        yield "</p>
                </div>
                <a href=\"";
        // line 834
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"back-link\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Retour au Dashboard
                </a>
            </header>

            <!-- STATS SECTION - FIXED -->
            <div class=\"stats-grid\">
                <div class=\"stat-card\">
                    <div class=\"stat-value\">";
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matieresClasse"]) || array_key_exists("matieresClasse", $context) ? $context["matieresClasse"] : (function () { throw new RuntimeError('Variable "matieresClasse" does not exist.', 845, $this->source); })())), "html", null, true);
        yield "</div>
                    <div class=\"stat-label\">Matières</div>
                </div>
                
                ";
        // line 849
        $context["totalCoefficient"] = 0;
        // line 850
        yield "                ";
        $context["totalCharge"] = 0;
        // line 851
        yield "                ";
        $context["totalComplexite"] = 0;
        // line 852
        yield "                
                ";
        // line 853
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matieresClasse"]) || array_key_exists("matieresClasse", $context) ? $context["matieresClasse"] : (function () { throw new RuntimeError('Variable "matieresClasse" does not exist.', 853, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matiereClasse"]) {
            // line 854
            yield "                    ";
            $context["totalCoefficient"] = ((isset($context["totalCoefficient"]) || array_key_exists("totalCoefficient", $context) ? $context["totalCoefficient"] : (function () { throw new RuntimeError('Variable "totalCoefficient" does not exist.', 854, $this->source); })()) + ((CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "coefficient", [], "any", true, true, false, 854)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "coefficient", [], "any", false, false, false, 854), 1)) : (1)));
            // line 855
            yield "                    ";
            $context["totalCharge"] = ((isset($context["totalCharge"]) || array_key_exists("totalCharge", $context) ? $context["totalCharge"] : (function () { throw new RuntimeError('Variable "totalCharge" does not exist.', 855, $this->source); })()) + ((CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "chargehoraire", [], "any", true, true, false, 855)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "chargehoraire", [], "any", false, false, false, 855), 0)) : (0)));
            // line 856
            yield "                    ";
            $context["totalComplexite"] = ((isset($context["totalComplexite"]) || array_key_exists("totalComplexite", $context) ? $context["totalComplexite"] : (function () { throw new RuntimeError('Variable "totalComplexite" does not exist.', 856, $this->source); })()) + ((CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "scorecomplexite", [], "any", true, true, false, 856)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "scorecomplexite", [], "any", false, false, false, 856), 0)) : (0)));
            // line 857
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiereClasse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 858
        yield "                
                <div class=\"stat-card\">
                    <div class=\"stat-value\">";
        // line 860
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalCoefficient"]) || array_key_exists("totalCoefficient", $context) ? $context["totalCoefficient"] : (function () { throw new RuntimeError('Variable "totalCoefficient" does not exist.', 860, $this->source); })()), 2), "html", null, true);
        yield "</div>
                    <div class=\"stat-label\">Coefficient Total</div>
                </div>
                
                <div class=\"stat-card\">
                    <div class=\"stat-value\">";
        // line 865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCharge"]) || array_key_exists("totalCharge", $context) ? $context["totalCharge"] : (function () { throw new RuntimeError('Variable "totalCharge" does not exist.', 865, $this->source); })()), "html", null, true);
        yield "h</div>
                    <div class=\"stat-label\">Charge Totale</div>
                </div>
                
                ";
        // line 869
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matieresClasse"]) || array_key_exists("matieresClasse", $context) ? $context["matieresClasse"] : (function () { throw new RuntimeError('Variable "matieresClasse" does not exist.', 869, $this->source); })())) > 0)) {
            // line 870
            yield "                    ";
            $context["moyenneComplexite"] = ((isset($context["totalComplexite"]) || array_key_exists("totalComplexite", $context) ? $context["totalComplexite"] : (function () { throw new RuntimeError('Variable "totalComplexite" does not exist.', 870, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matieresClasse"]) || array_key_exists("matieresClasse", $context) ? $context["matieresClasse"] : (function () { throw new RuntimeError('Variable "matieresClasse" does not exist.', 870, $this->source); })())));
            // line 871
            yield "                    <div class=\"stat-card\">
                        <div class=\"stat-value\">";
            // line 872
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["moyenneComplexite"]) || array_key_exists("moyenneComplexite", $context) ? $context["moyenneComplexite"] : (function () { throw new RuntimeError('Variable "moyenneComplexite" does not exist.', 872, $this->source); })()), 1), "html", null, true);
            yield "/10</div>
                        <div class=\"stat-label\">Complexité Moyenne</div>
                    </div>
                ";
        } else {
            // line 876
            yield "                    <div class=\"stat-card\">
                        <div class=\"stat-value\">0/10</div>
                        <div class=\"stat-label\">Complexité Moyenne</div>
                    </div>
                ";
        }
        // line 881
        yield "            </div>

            <!-- CLASS INFORMATION -->
            <div class=\"class-info-card\">
                <div class=\"class-header\">
                    <div class=\"class-icon\">
                        ";
        // line 887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 887, $this->source); })()), "nom", [], "any", false, false, false, 887), 0, 2)), "html", null, true);
        yield "
                    </div>
                    <div class=\"class-info\">
                        <h2 class=\"class-title\">";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 890, $this->source); })()), "nom", [], "any", false, false, false, 890), "html", null, true);
        yield "</h2>
                        ";
        // line 891
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 891, $this->source); })()), "niveau", [], "any", false, false, false, 891)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 892
            yield "                            <div class=\"class-niveau\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 892, $this->source); })()), "niveau", [], "any", false, false, false, 892), "html", null, true);
            yield "</div>
                        ";
        }
        // line 894
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 894, $this->source); })()), "description", [], "any", false, false, false, 894)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 895
            yield "                            <p class=\"class-description\">
                                ";
            // line 896
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 896, $this->source); })()), "description", [], "any", false, false, false, 896), "html", null, true);
            yield "
                            </p>
                        ";
        }
        // line 899
        yield "                    </div>
                </div>
            </div>

            <!-- MATIERES SECTION - FIXED -->
            <div class=\"matieres-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">Matières de la classe</h2>
                    <div class=\"matieres-count\">";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matieresClasse"]) || array_key_exists("matieresClasse", $context) ? $context["matieresClasse"] : (function () { throw new RuntimeError('Variable "matieresClasse" does not exist.', 907, $this->source); })())), "html", null, true);
        yield " matières</div>
                </div>

                <div class=\"matieres-grid\" id=\"matieresList\">
                    ";
        // line 911
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["matieresClasse"]) || array_key_exists("matieresClasse", $context) ? $context["matieresClasse"] : (function () { throw new RuntimeError('Variable "matieresClasse" does not exist.', 911, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 912
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matieresClasse"]) || array_key_exists("matieresClasse", $context) ? $context["matieresClasse"] : (function () { throw new RuntimeError('Variable "matieresClasse" does not exist.', 912, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["matiereClasse"]) {
                // line 913
                yield "                            ";
                $context["iconClass"] = "icon-default";
                // line 914
                yield "                            ";
                $context["matiereNom"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "nom", [], "any", true, true, false, 914)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "nom", [], "any", false, false, false, 914), "Matière sans nom")) : ("Matière sans nom"));
                // line 915
                yield "                            
                            ";
                // line 917
                yield "                            ";
                if (CoreExtension::inFilter("math", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["matiereNom"]) || array_key_exists("matiereNom", $context) ? $context["matiereNom"] : (function () { throw new RuntimeError('Variable "matiereNom" does not exist.', 917, $this->source); })())))) {
                    // line 918
                    yield "                                ";
                    $context["iconClass"] = "icon-math";
                    // line 919
                    yield "                            ";
                } elseif (CoreExtension::inFilter("physique", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["matiereNom"]) || array_key_exists("matiereNom", $context) ? $context["matiereNom"] : (function () { throw new RuntimeError('Variable "matiereNom" does not exist.', 919, $this->source); })())))) {
                    // line 920
                    yield "                                ";
                    $context["iconClass"] = "icon-physique";
                    // line 921
                    yield "                            ";
                } elseif ((CoreExtension::inFilter("info", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["matiereNom"]) || array_key_exists("matiereNom", $context) ? $context["matiereNom"] : (function () { throw new RuntimeError('Variable "matiereNom" does not exist.', 921, $this->source); })()))) || CoreExtension::inFilter("program", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["matiereNom"]) || array_key_exists("matiereNom", $context) ? $context["matiereNom"] : (function () { throw new RuntimeError('Variable "matiereNom" does not exist.', 921, $this->source); })()))))) {
                    // line 922
                    yield "                                ";
                    $context["iconClass"] = "icon-informatique";
                    // line 923
                    yield "                            ";
                } elseif (CoreExtension::inFilter("chimie", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["matiereNom"]) || array_key_exists("matiereNom", $context) ? $context["matiereNom"] : (function () { throw new RuntimeError('Variable "matiereNom" does not exist.', 923, $this->source); })())))) {
                    // line 924
                    yield "                                ";
                    $context["iconClass"] = "icon-chimie";
                    // line 925
                    yield "                            ";
                }
                // line 926
                yield "                            
                            ";
                // line 927
                $context["iconLetter"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["matiereNom"]) || array_key_exists("matiereNom", $context) ? $context["matiereNom"] : (function () { throw new RuntimeError('Variable "matiereNom" does not exist.', 927, $this->source); })())));
                // line 928
                yield "                            
                            <div class=\"matiere-card\">
                                <div class=\"matiere-header\">
                                    <div class=\"matiere-icon ";
                // line 931
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 931, $this->source); })()), "html", null, true);
                yield "\">
                                        ";
                // line 932
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["iconLetter"]) || array_key_exists("iconLetter", $context) ? $context["iconLetter"] : (function () { throw new RuntimeError('Variable "iconLetter" does not exist.', 932, $this->source); })()), "html", null, true);
                yield "
                                    </div>
                                    <div class=\"matiere-info\">
                                        <h3 class=\"matiere-title\">";
                // line 935
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matiereNom"]) || array_key_exists("matiereNom", $context) ? $context["matiereNom"] : (function () { throw new RuntimeError('Variable "matiereNom" does not exist.', 935, $this->source); })()), "html", null, true);
                yield "</h3>
                                        <div class=\"matiere-subtitle\">Matière de la classe ";
                // line 936
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 936, $this->source); })()), "nom", [], "any", false, false, false, 936), "html", null, true);
                yield "</div>
                                    </div>
                                </div>
                                
                                <div class=\"matiere-details\">
                                    ";
                // line 941
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "coefficient", [], "any", false, false, false, 941)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 942
                    yield "                                        <div class=\"detail-item\">
                                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                                <path d=\"M13 2L3 14h9l-1 8 10-12h-9l1-8z\"/>
                                            </svg>
                                            <span>Coefficient : <span class=\"detail-value\">";
                    // line 946
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "coefficient", [], "any", false, false, false, 946), "html", null, true);
                    yield "</span></span>
                                        </div>
                                    ";
                }
                // line 949
                yield "                                    
                                    ";
                // line 950
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "chargehoraire", [], "any", false, false, false, 950)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 951
                    yield "                                        <div class=\"detail-item\">
                                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                                <polyline points=\"12 6 12 12 16 14\"/>
                                            </svg>
                                            <span>Charge horaire : <span class=\"detail-value\">";
                    // line 956
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "chargehoraire", [], "any", false, false, false, 956), "html", null, true);
                    yield " heures</span></span>
                                        </div>
                                    ";
                }
                // line 959
                yield "                                    
                                    ";
                // line 960
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "scorecomplexite", [], "any", false, false, false, 960)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 961
                    yield "                                        <div class=\"detail-item\">
                                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                                <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/>
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                            </svg>
                                            <span>Complexité : <span class=\"detail-value\">";
                    // line 966
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "scorecomplexite", [], "any", false, false, false, 966), "html", null, true);
                    yield "/10</span></span>
                                        </div>
                                    ";
                }
                // line 969
                yield "                                </div>
                                
                                ";
                // line 971
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "description", [], "any", false, false, false, 971)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 972
                    yield "                                    <div class=\"matiere-description\">
                                        ";
                    // line 973
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "description", [], "any", false, false, false, 973)) > 200)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "description", [], "any", false, false, false, 973), 0, 200) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "description", [], "any", false, false, false, 973), "html", null, true)));
                    yield "
                                    </div>
                                ";
                }
                // line 976
                yield "                                
                                <div class=\"matiere-tags\">
                                    ";
                // line 978
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "coefficient", [], "any", false, false, false, 978)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 979
                    yield "                                        <span class=\"matiere-tag tag-coefficient\">Coeff ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "coefficient", [], "any", false, false, false, 979), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 981
                yield "                                    
                                    ";
                // line 982
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "chargehoraire", [], "any", false, false, false, 982)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 983
                    yield "                                        <span class=\"matiere-tag tag-charge\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "chargehoraire", [], "any", false, false, false, 983), "html", null, true);
                    yield "h</span>
                                    ";
                }
                // line 985
                yield "                                    
                                    ";
                // line 986
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "scorecomplexite", [], "any", false, false, false, 986)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 987
                    yield "                                        <span class=\"matiere-tag tag-complexity\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "scorecomplexite", [], "any", false, false, false, 987), "html", null, true);
                    yield "/10</span>
                                    ";
                }
                // line 989
                yield "                                </div>
                                
                                <div class=\"matiere-actions\">
                                    <button class=\"action-btn\" onclick=\"viewMatiereDetails(";
                // line 992
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "id", [], "any", false, false, false, 992), "html", null, true);
                yield ")\">
                                        <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                            <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"/>
                                            <circle cx=\"12\" cy=\"12\" r=\"3\"/>
                                        </svg>
                                        Détails
                                    </button>
                                    <button class=\"action-btn primary\" onclick=\"viewSeances(";
                // line 999
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiereClasse"], "id", [], "any", false, false, false, 999), "html", null, true);
                yield ")\">
                                        <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                            <polyline points=\"12 6 12 12 16 14\"/>
                                        </svg>
                                        Séances
                                    </button>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['matiereClasse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1009
            yield "                    ";
        } else {
            // line 1010
            yield "                        <div class=\"empty-state\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                            </svg>
                            <h3>Aucune matière assignée</h3>
                            <p>Aucune matière n'est actuellement assignée à votre classe.</p>
                            <p class=\"muted\" style=\"font-size: 13px; margin-top: 16px;\">
                                Contactez votre administrateur pour ajouter des matières à votre classe.
                            </p>
                        </div>
                    ";
        }
        // line 1021
        yield "                </div>
            </div>
        </main>
    </div>

    <script>
        // Function to view matiere details
        function viewMatiereDetails(matiereClasseId) {
            // You can implement modal or redirect logic here
            alert('Voir les détails de la matière #' + matiereClasseId);
            // Example: window.location.href = '/matiere-classe/' + matiereClasseId;
        }

        // Function to view seances
        function viewSeances(matiereClasseId) {
            alert('Voir les séances pour la matière #' + matiereClasseId);
            // Example: window.location.href = '/matiere-classe/' + matiereClasseId + '/seances';
        }

        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { 
                    opacity: 0; 
                    transform: translateY(30px); 
                }
                to { 
                    opacity: 1; 
                    transform: translateY(0); 
                }
            }
            
            .matiere-card {
                animation: fadeIn 0.5s ease-out;
                animation-fill-mode: both;
            }
            
            /* Stagger animation for matiere cards */
            .matieres-grid .matiere-card:nth-child(1) { animation-delay: 0.1s; }
            .matieres-grid .matiere-card:nth-child(2) { animation-delay: 0.2s; }
            .matieres-grid .matiere-card:nth-child(3) { animation-delay: 0.3s; }
            .matieres-grid .matiere-card:nth-child(4) { animation-delay: 0.4s; }
            .matieres-grid .matiere-card:nth-child(5) { animation-delay: 0.5s; }
            .matieres-grid .matiere-card:nth-child(6) { animation-delay: 0.6s; }
            .matieres-grid .matiere-card:nth-child(7) { animation-delay: 0.7s; }
            .matieres-grid .matiere-card:nth-child(8) { animation-delay: 0.8s; }
            .matieres-grid .matiere-card:nth-child(n+9) { animation-delay: 0.9s; }
            
            /* Hover effect for stat cards */
            .stat-card:hover .stat-value {
                color: var(--blue-500);
            }
            
            /* Responsive adjustments */
            @media (hover: none) {
                .matiere-card:hover {
                    transform: none;
                }
                
                .action-btn:hover {
                    transform: none;
                }
                
                .stat-card:hover {
                    transform: none;
                }
            }
        `;
        document.head.appendChild(style);
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
        return "matiere_classe/Classes.html.twig";
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
        return array (  1293 => 1021,  1280 => 1010,  1277 => 1009,  1261 => 999,  1251 => 992,  1246 => 989,  1240 => 987,  1238 => 986,  1235 => 985,  1229 => 983,  1227 => 982,  1224 => 981,  1218 => 979,  1216 => 978,  1212 => 976,  1206 => 973,  1203 => 972,  1201 => 971,  1197 => 969,  1191 => 966,  1184 => 961,  1182 => 960,  1179 => 959,  1173 => 956,  1166 => 951,  1164 => 950,  1161 => 949,  1155 => 946,  1149 => 942,  1147 => 941,  1139 => 936,  1135 => 935,  1129 => 932,  1125 => 931,  1120 => 928,  1118 => 927,  1115 => 926,  1112 => 925,  1109 => 924,  1106 => 923,  1103 => 922,  1100 => 921,  1097 => 920,  1094 => 919,  1091 => 918,  1088 => 917,  1085 => 915,  1082 => 914,  1079 => 913,  1074 => 912,  1072 => 911,  1065 => 907,  1055 => 899,  1049 => 896,  1046 => 895,  1043 => 894,  1037 => 892,  1035 => 891,  1031 => 890,  1025 => 887,  1017 => 881,  1010 => 876,  1003 => 872,  1000 => 871,  997 => 870,  995 => 869,  988 => 865,  980 => 860,  976 => 858,  970 => 857,  967 => 856,  964 => 855,  961 => 854,  957 => 853,  954 => 852,  951 => 851,  948 => 850,  946 => 849,  939 => 845,  925 => 834,  920 => 832,  903 => 818,  893 => 811,  884 => 805,  874 => 798,  865 => 792,  856 => 786,  848 => 781,  844 => 780,  837 => 776,  831 => 775,  824 => 772,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — {{ classe.nom }} - Matières</title>
    <style>
        :root {
            --font-size: 16px;
            --red-500: #ef4444;
            --red-600: #dc2626;
            --red-700: #b91c1c;
            --orange-500: #f97316;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-900: #111827;
            --blue-500: #3b82f6;
            --green-500: #22c55e;
            --purple-500: #8b5cf6;
            --pink-500: #ec4899;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.15);
            --radius-lg: 16px;
            --radius-xl: 20px;
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
            background: linear-gradient(135deg, var(--gray-50) 0%, #ffffff 30%, var(--gray-50) 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .app-shell {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR - EXACT SAME AS BEFORE */
        .sidebar {
            width: 300px;
            background: linear-gradient(165deg, rgba(255, 255, 255, 0.92) 0%, rgba(249, 250, 251, 0.88) 100%);
            border-right: 1px solid rgba(229, 231, 235, 0.6);
            padding: 28px 24px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            box-shadow: var(--shadow-md);
        }

        .brand {
            margin-bottom: 36px;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
        }

        .brand-row {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand-icon {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--red-700) 100%);
            width: 48px;
            height: 48px;
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 20px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        }

        .brand-title {
            font-weight: 800;
            font-size: 20px;
            color: var(--gray-900);
        }

        .brand-sub {
            font-size: 13px;
            color: var(--gray-500);
            margin-top: 6px;
        }

        .user-session {
            margin-top: 28px;
            padding: 24px;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.5);
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
        }

        .user-session::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500), var(--orange-500));
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 20px;
            border: 3px solid white;
            box-shadow: 0 6px 16px rgba(220, 38, 38, 0.2);
        }

        .user-details h3 {
            font-size: 16px;
            font-weight: 700;
            color: #1f2937;
        }

        .user-details p {
            margin: 6px 0 0;
            font-size: 14px;
            color: #4b5563;
        }

        .session-info {
            font-size: 13px;
            color: #4b5563;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }

        .session-info div {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
        }

        .session-info strong {
            color: #1f2937;
            font-weight: 600;
        }

        .nav {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-top: 32px;
        }

        .nav a {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 16px 20px;
            border-radius: var(--radius-lg);
            color: #374151;
            text-decoration: none;
            transition: all var(--transition);
            font-weight: 500;
        }

        .nav a:hover {
            background: linear-gradient(90deg, rgba(254, 242, 242, 0.7) 0%, rgba(254, 242, 242, 0.4) 100%);
            color: var(--red-600);
            transform: translateX(8px);
        }

        .nav a.active {
            background: linear-gradient(90deg, rgba(254, 242, 242, 0.9) 0%, rgba(254, 242, 242, 0.6) 100%);
            color: var(--red-600);
            font-weight: 600;
            border-left: 4px solid var(--red-500);
        }

        .nav a .icon {
            width: 20px;
            height: 20px;
            stroke-width: 2;
        }

        /* MAIN CONTENT */
        .main {
            flex: 1;
            padding: 32px 40px;
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
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
        }

        .header-content {
            flex: 1;
        }

        .header-content h1 {
            font-size: 36px;
            font-weight: 800;
            margin: 0 0 8px 0;
            color: var(--gray-900);
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-content p {
            color: var(--gray-500);
            font-size: 16px;
            margin: 0;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--gray-600);
            text-decoration: none;
            font-weight: 500;
            padding: 10px 18px;
            border-radius: 10px;
            transition: all var(--transition);
            border: 2px solid var(--gray-200);
            background: white;
        }

        .back-link:hover {
            background: var(--gray-100);
            color: var(--gray-900);
            border-color: var(--gray-300);
            transform: translateY(-2px);
        }

        /* STATS SECTION - FIXED */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-md);
            padding: 24px;
            text-align: center;
            transition: all var(--transition);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--blue-500), var(--purple-500));
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--blue-500);
        }

        .stat-value {
            font-size: 36px;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 14px;
            color: var(--gray-600);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* CLASS INFO CARD */
        .class-info-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            margin-bottom: 32px;
        }

        .class-header {
            display: flex;
            align-items: center;
            gap: 24px;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.5);
        }

        .class-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--blue-500) 0%, #6366f1 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 800;
            flex-shrink: 0;
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);
        }

        .class-info {
            flex: 1;
        }

        .class-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .class-niveau {
            display: inline-block;
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-600) 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .class-description {
            color: var(--gray-600);
            font-size: 15px;
            line-height: 1.6;
        }

        /* MATIERES GRID */
        .matieres-section {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-lg);
            padding: 32px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.5);
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--gray-900);
            margin: 0;
        }

        .matieres-count {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            padding: 10px 22px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        /* MATIERE CARDS GRID - FIXED */
        .matieres-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 24px;
        }

        .matiere-card {
            background: white;
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            padding: 28px;
            transition: all var(--transition);
            position: relative;
            overflow: hidden;
        }

        .matiere-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-xl);
            border-color: var(--blue-500);
        }

        .matiere-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--blue-500), var(--purple-500));
        }

        .matiere-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .matiere-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 700;
            color: white;
            flex-shrink: 0;
        }

        .matiere-info {
            flex: 1;
        }

        .matiere-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 4px;
        }

        .matiere-subtitle {
            font-size: 14px;
            color: var(--gray-600);
            font-weight: 500;
        }

        .matiere-details {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--gray-100);
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: var(--gray-700);
        }

        .detail-item svg {
            width: 16px;
            height: 16px;
            color: var(--gray-500);
            flex-shrink: 0;
        }

        .detail-value {
            font-weight: 600;
            color: var(--gray-900);
        }

        .matiere-description {
            color: var(--gray-600);
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .matiere-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .matiere-tag {
            padding: 6px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .tag-coefficient {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.15) 0%, rgba(239, 68, 68, 0.1) 100%);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .tag-charge {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.1) 100%);
            color: #2563EB;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .tag-complexity {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.1) 100%);
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .matiere-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--gray-100);
        }

        .action-btn {
            padding: 10px 18px;
            border-radius: 10px;
            border: 2px solid var(--gray-300);
            background: white;
            color: var(--gray-700);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 1;
            justify-content: center;
            text-decoration: none;
        }

        .action-btn:hover {
            background: var(--gray-50);
            border-color: var(--gray-400);
            transform: translateY(-2px);
        }

        .action-btn.primary {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--purple-500) 100%);
            color: white;
            border: none;
        }

        .action-btn.primary:hover {
            background: linear-gradient(135deg, var(--blue-600) 0%, var(--purple-600) 100%);
            box-shadow: 0 4px 16px rgba(59, 130, 246, 0.3);
        }

        /* EMPTY STATE */
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 80px 20px;
            color: var(--gray-500);
        }

        .empty-state svg {
            width: 80px;
            height: 80px;
            margin-bottom: 24px;
            opacity: 0.3;
        }

        .empty-state h3 {
            font-size: 22px;
            margin-bottom: 12px;
            color: var(--gray-700);
            font-weight: 600;
        }

        .empty-state p {
            font-size: 15px;
            margin-bottom: 32px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        /* COLOR THEMES FOR MATIERE ICONS */
        .icon-default {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--purple-500) 100%);
        }

        .icon-math {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        }

        .icon-physique {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }

        .icon-informatique {
            background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
        }

        .icon-chimie {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1200px) {
            .matieres-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }

        @media (max-width: 1024px) {
            .app-shell {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 20px;
            }
            
            .main {
                padding: 24px;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .header-content h1 {
                font-size: 28px;
            }
            
            .matieres-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            
            .matieres-count {
                align-self: flex-start;
            }
            
            .class-header {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .main {
                padding: 20px;
            }
            
            .class-info-card,
            .matieres-section {
                padding: 24px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .matiere-header {
                flex-direction: column;
                text-align: center;
                gap: 16px;
            }
            
            .matiere-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <!-- SIDEBAR - UNCHANGED -->
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
                    <div><strong>Email:</strong> {{ app.user.email }}</div>
                    <div><strong>Role:</strong> {{ app.user.roles[0]|replace({'ROLE_': ''})|capitalize }}</div>
                </div>
            </div>

            <nav class=\"nav\">
                <a href=\"{{ path('app_dashboard') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"{{ path('app_my_tasks') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    Mes Tâches
                </a>
                <a href=\"{{ path('app_classe_users',{'id': app.user.classe.id}) }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Ma Classe
                </a>
                <a href=\"{{ path('app_matiere_classe_by_classe', {'id': app.user.classe.id}) }}\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                    </svg>
                    Mes Matières
                </a>
                <a href=\"{{ path('app_profile') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"{{ path('app_logout') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT - FIXED -->
        <main class=\"main\">
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>Mes Matières</h1>
                    <p>Liste des matières de ma classe {{ classe.nom }}</p>
                </div>
                <a href=\"{{ path('app_dashboard') }}\" class=\"back-link\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Retour au Dashboard
                </a>
            </header>

            <!-- STATS SECTION - FIXED -->
            <div class=\"stats-grid\">
                <div class=\"stat-card\">
                    <div class=\"stat-value\">{{ matieresClasse|length }}</div>
                    <div class=\"stat-label\">Matières</div>
                </div>
                
                {% set totalCoefficient = 0 %}
                {% set totalCharge = 0 %}
                {% set totalComplexite = 0 %}
                
                {% for matiereClasse in matieresClasse %}
                    {% set totalCoefficient = totalCoefficient + (matiereClasse.coefficient|default(1)) %}
                    {% set totalCharge = totalCharge + (matiereClasse.chargehoraire|default(0)) %}
                    {% set totalComplexite = totalComplexite + (matiereClasse.scorecomplexite|default(0)) %}
                {% endfor %}
                
                <div class=\"stat-card\">
                    <div class=\"stat-value\">{{ totalCoefficient|number_format(2) }}</div>
                    <div class=\"stat-label\">Coefficient Total</div>
                </div>
                
                <div class=\"stat-card\">
                    <div class=\"stat-value\">{{ totalCharge }}h</div>
                    <div class=\"stat-label\">Charge Totale</div>
                </div>
                
                {% if matieresClasse|length > 0 %}
                    {% set moyenneComplexite = totalComplexite / matieresClasse|length %}
                    <div class=\"stat-card\">
                        <div class=\"stat-value\">{{ moyenneComplexite|number_format(1) }}/10</div>
                        <div class=\"stat-label\">Complexité Moyenne</div>
                    </div>
                {% else %}
                    <div class=\"stat-card\">
                        <div class=\"stat-value\">0/10</div>
                        <div class=\"stat-label\">Complexité Moyenne</div>
                    </div>
                {% endif %}
            </div>

            <!-- CLASS INFORMATION -->
            <div class=\"class-info-card\">
                <div class=\"class-header\">
                    <div class=\"class-icon\">
                        {{ classe.nom|slice(0, 2)|upper }}
                    </div>
                    <div class=\"class-info\">
                        <h2 class=\"class-title\">{{ classe.nom }}</h2>
                        {% if classe.niveau %}
                            <div class=\"class-niveau\">{{ classe.niveau }}</div>
                        {% endif %}
                        {% if classe.description %}
                            <p class=\"class-description\">
                                {{ classe.description }}
                            </p>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- MATIERES SECTION - FIXED -->
            <div class=\"matieres-section\">
                <div class=\"section-header\">
                    <h2 class=\"section-title\">Matières de la classe</h2>
                    <div class=\"matieres-count\">{{ matieresClasse|length }} matières</div>
                </div>

                <div class=\"matieres-grid\" id=\"matieresList\">
                    {% if matieresClasse is not empty %}
                        {% for matiereClasse in matieresClasse %}
                            {% set iconClass = 'icon-default' %}
                            {% set matiereNom = matiereClasse.nom|default('Matière sans nom') %}
                            
                            {# Determine icon class based on matiere name #}
                            {% if 'math' in matiereNom|lower %}
                                {% set iconClass = 'icon-math' %}
                            {% elseif 'physique' in matiereNom|lower %}
                                {% set iconClass = 'icon-physique' %}
                            {% elseif 'info' in matiereNom|lower or 'program' in matiereNom|lower %}
                                {% set iconClass = 'icon-informatique' %}
                            {% elseif 'chimie' in matiereNom|lower %}
                                {% set iconClass = 'icon-chimie' %}
                            {% endif %}
                            
                            {% set iconLetter = matiereNom|first|upper %}
                            
                            <div class=\"matiere-card\">
                                <div class=\"matiere-header\">
                                    <div class=\"matiere-icon {{ iconClass }}\">
                                        {{ iconLetter }}
                                    </div>
                                    <div class=\"matiere-info\">
                                        <h3 class=\"matiere-title\">{{ matiereNom }}</h3>
                                        <div class=\"matiere-subtitle\">Matière de la classe {{ classe.nom }}</div>
                                    </div>
                                </div>
                                
                                <div class=\"matiere-details\">
                                    {% if matiereClasse.coefficient %}
                                        <div class=\"detail-item\">
                                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                                <path d=\"M13 2L3 14h9l-1 8 10-12h-9l1-8z\"/>
                                            </svg>
                                            <span>Coefficient : <span class=\"detail-value\">{{ matiereClasse.coefficient }}</span></span>
                                        </div>
                                    {% endif %}
                                    
                                    {% if matiereClasse.chargehoraire %}
                                        <div class=\"detail-item\">
                                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                                <polyline points=\"12 6 12 12 16 14\"/>
                                            </svg>
                                            <span>Charge horaire : <span class=\"detail-value\">{{ matiereClasse.chargehoraire }} heures</span></span>
                                        </div>
                                    {% endif %}
                                    
                                    {% if matiereClasse.scorecomplexite %}
                                        <div class=\"detail-item\">
                                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                                <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/>
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                            </svg>
                                            <span>Complexité : <span class=\"detail-value\">{{ matiereClasse.scorecomplexite }}/10</span></span>
                                        </div>
                                    {% endif %}
                                </div>
                                
                                {% if matiereClasse.description %}
                                    <div class=\"matiere-description\">
                                        {{ matiereClasse.description|length > 200 ? matiereClasse.description|slice(0, 200) ~ '...' : matiereClasse.description }}
                                    </div>
                                {% endif %}
                                
                                <div class=\"matiere-tags\">
                                    {% if matiereClasse.coefficient %}
                                        <span class=\"matiere-tag tag-coefficient\">Coeff {{ matiereClasse.coefficient }}</span>
                                    {% endif %}
                                    
                                    {% if matiereClasse.chargehoraire %}
                                        <span class=\"matiere-tag tag-charge\">{{ matiereClasse.chargehoraire }}h</span>
                                    {% endif %}
                                    
                                    {% if matiereClasse.scorecomplexite %}
                                        <span class=\"matiere-tag tag-complexity\">{{ matiereClasse.scorecomplexite }}/10</span>
                                    {% endif %}
                                </div>
                                
                                <div class=\"matiere-actions\">
                                    <button class=\"action-btn\" onclick=\"viewMatiereDetails({{ matiereClasse.id }})\">
                                        <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                            <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"/>
                                            <circle cx=\"12\" cy=\"12\" r=\"3\"/>
                                        </svg>
                                        Détails
                                    </button>
                                    <button class=\"action-btn primary\" onclick=\"viewSeances({{ matiereClasse.id }})\">
                                        <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                            <polyline points=\"12 6 12 12 16 14\"/>
                                        </svg>
                                        Séances
                                    </button>
                                </div>
                            </div>
                        {% endfor %}
                    {% else %}
                        <div class=\"empty-state\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                            </svg>
                            <h3>Aucune matière assignée</h3>
                            <p>Aucune matière n'est actuellement assignée à votre classe.</p>
                            <p class=\"muted\" style=\"font-size: 13px; margin-top: 16px;\">
                                Contactez votre administrateur pour ajouter des matières à votre classe.
                            </p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </main>
    </div>

    <script>
        // Function to view matiere details
        function viewMatiereDetails(matiereClasseId) {
            // You can implement modal or redirect logic here
            alert('Voir les détails de la matière #' + matiereClasseId);
            // Example: window.location.href = '/matiere-classe/' + matiereClasseId;
        }

        // Function to view seances
        function viewSeances(matiereClasseId) {
            alert('Voir les séances pour la matière #' + matiereClasseId);
            // Example: window.location.href = '/matiere-classe/' + matiereClasseId + '/seances';
        }

        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { 
                    opacity: 0; 
                    transform: translateY(30px); 
                }
                to { 
                    opacity: 1; 
                    transform: translateY(0); 
                }
            }
            
            .matiere-card {
                animation: fadeIn 0.5s ease-out;
                animation-fill-mode: both;
            }
            
            /* Stagger animation for matiere cards */
            .matieres-grid .matiere-card:nth-child(1) { animation-delay: 0.1s; }
            .matieres-grid .matiere-card:nth-child(2) { animation-delay: 0.2s; }
            .matieres-grid .matiere-card:nth-child(3) { animation-delay: 0.3s; }
            .matieres-grid .matiere-card:nth-child(4) { animation-delay: 0.4s; }
            .matieres-grid .matiere-card:nth-child(5) { animation-delay: 0.5s; }
            .matieres-grid .matiere-card:nth-child(6) { animation-delay: 0.6s; }
            .matieres-grid .matiere-card:nth-child(7) { animation-delay: 0.7s; }
            .matieres-grid .matiere-card:nth-child(8) { animation-delay: 0.8s; }
            .matieres-grid .matiere-card:nth-child(n+9) { animation-delay: 0.9s; }
            
            /* Hover effect for stat cards */
            .stat-card:hover .stat-value {
                color: var(--blue-500);
            }
            
            /* Responsive adjustments */
            @media (hover: none) {
                .matiere-card:hover {
                    transform: none;
                }
                
                .action-btn:hover {
                    transform: none;
                }
                
                .stat-card:hover {
                    transform: none;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>", "matiere_classe/Classes.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\matiere_classe\\Classes.html.twig");
    }
}
