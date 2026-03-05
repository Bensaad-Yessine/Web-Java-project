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

/* classe/users.html.twig */
class __TwigTemplate_fd4d684e696ce2995d341b53ac08d125 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/users.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield " - Membres</title>
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

        /* MAIN CONTENT - UPDATED DESIGN */
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

        /* CLASS INFO SECTION - IMPROVED */
        .class-info-section {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 32px;
            margin-bottom: 40px;
        }

        .class-info-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            height: fit-content;
            position: sticky;
            top: 32px;
        }

        .class-header {
            text-align: center;
            margin-bottom: 32px;
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
            margin: 0 auto 20px;
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);
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
            margin-bottom: 16px;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .class-description {
            color: var(--gray-600);
            font-size: 15px;
            line-height: 1.6;
            margin-top: 16px;
        }

        /* STATS SECTION - IMPROVED */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-top: 24px;
        }

        .stat-card {
            text-align: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(229, 231, 235, 0.5);
            transition: all var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
            border-color: var(--blue-500);
        }

        .stat-value {
            font-size: 32px;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 6px;
        }

        .stat-label {
            font-size: 13px;
            color: var(--gray-600);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* MEMBERS SECTION - IMPROVED */
        .members-section {
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

        .members-count {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            padding: 10px 22px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        /* SEARCH BAR - IMPROVED */
        .search-container {
            position: relative;
            margin-bottom: 24px;
        }

        .search-input {
            width: 100%;
            padding: 16px 20px 16px 52px;
            border: 2px solid var(--gray-300);
            border-radius: var(--radius-lg);
            background: white;
            color: var(--gray-900);
            font-size: 15px;
            font-weight: 500;
            transition: all var(--transition);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--red-500);
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-500);
            width: 20px;
            height: 20px;
        }

        /* MEMBERS GRID - IMPROVED */
        .members-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
        }

        .member-card {
            background: white;
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            padding: 24px;
            transition: all var(--transition);
            position: relative;
            overflow: hidden;
        }

        .member-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--red-500);
        }

        .member-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500), var(--orange-500));
        }

        .member-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 16px;
        }

        .member-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 20px;
            flex-shrink: 0;
            border: 3px solid white;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        .member-info {
            flex: 1;
        }

        .member-name {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 4px;
        }

        .member-email {
            font-size: 14px;
            color: var(--gray-600);
            margin-bottom: 8px;
        }

        .member-role {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .role-etudiant {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.1) 100%);
            color: #2563EB;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .role-professeur {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.1) 100%);
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .role-admin {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.15) 0%, rgba(239, 68, 68, 0.1) 100%);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .member-actions {
            display: flex;
            gap: 8px;
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-100);
        }

        .action-btn {
            padding: 8px 16px;
            border-radius: 8px;
            border: 2px solid var(--gray-300);
            background: white;
            color: var(--gray-700);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition);
            display: flex;
            align-items: center;
            gap: 6px;
            flex: 1;
            justify-content: center;
        }

        .action-btn:hover {
            background: var(--gray-50);
            border-color: var(--gray-400);
            transform: translateY(-2px);
        }

        /* EMPTY STATE - IMPROVED */
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

        .btn {
            padding: 14px 28px;
            border-radius: var(--radius-lg);
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition);
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.3);
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1200px) {
            .class-info-section {
                grid-template-columns: 1fr;
                gap: 24px;
            }
            
            .class-info-card {
                position: relative;
                top: 0;
            }
            
            .members-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
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
            
            .members-grid {
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
            
            .members-count {
                align-self: flex-start;
            }
        }

        @media (max-width: 480px) {
            .main {
                padding: 20px;
            }
            
            .class-info-card,
            .members-section {
                padding: 24px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .member-header {
                flex-direction: column;
                text-align: center;
                gap: 12px;
            }
            
            .member-actions {
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
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 752, $this->source); })()), "user", [], "any", false, false, false, 752), "nom", [], "any", false, false, false, 752)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 752, $this->source); })()), "user", [], "any", false, false, false, 752), "prenom", [], "any", false, false, false, 752)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 755, $this->source); })()), "user", [], "any", false, false, false, 755), "nom", [], "any", false, false, false, 755), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 755, $this->source); })()), "user", [], "any", false, false, false, 755), "prenom", [], "any", false, false, false, 755), "html", null, true);
        yield "</h3>
                        <p>📚 ";
        // line 756
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 756, $this->source); })()), "user", [], "any", false, false, false, 756), "classe", [], "any", false, false, false, 756))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 756, $this->source); })()), "user", [], "any", false, false, false, 756), "classe", [], "any", false, false, false, 756), "nom", [], "any", false, false, false, 756), "html", null, true)) : ("Aucune classe"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 760
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 760, $this->source); })()), "user", [], "any", false, false, false, 760), "email", [], "any", false, false, false, 760), "html", null, true);
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 761
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 761, $this->source); })()), "user", [], "any", false, false, false, 761), "roles", [], "any", false, false, false, 761), 0, [], "array", false, false, false, 761), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <a href=\"";
        // line 766
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"";
        // line 772
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    Mes Tâches
                </a>
                <a href=\"";
        // line 778
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_users", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 778, $this->source); })()), "user", [], "any", false, false, false, 778), "classe", [], "any", false, false, false, 778), "id", [], "any", false, false, false, 778)]), "html", null, true);
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Classes
                </a>
                <a href=\"";
        // line 785
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"";
        // line 792
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT - IMPROVED DESIGN -->
        <main class=\"main\">
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 805, $this->source); })()), "nom", [], "any", false, false, false, 805), "html", null, true);
        yield "</h1>
                    <p>Gestion des membres de la classe</p>
                </div>
                <a href=\"";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_users", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 808, $this->source); })()), "user", [], "any", false, false, false, 808), "classe", [], "any", false, false, false, 808), "id", [], "any", false, false, false, 808)]), "html", null, true);
        yield "\" class=\"back-link\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Retour
                </a>
            </header>

            <div class=\"class-info-section\">
                <!-- Class Information Card -->
                <div class=\"class-info-card\">
                    <div class=\"class-header\">
                        <div class=\"class-icon\">
                            ";
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 821, $this->source); })()), "nom", [], "any", false, false, false, 821), 0, 2)), "html", null, true);
        yield "
                        </div>
                        <h2 class=\"class-title\">";
        // line 823
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 823, $this->source); })()), "nom", [], "any", false, false, false, 823), "html", null, true);
        yield "</h2>
                        ";
        // line 824
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 824, $this->source); })()), "niveau", [], "any", false, false, false, 824)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 825
            yield "                            <div class=\"class-niveau text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 825, $this->source); })()), "niveau", [], "any", false, false, false, 825), "html", null, true);
            yield "</div>
                        ";
        }
        // line 827
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 827, $this->source); })()), "description", [], "any", false, false, false, 827)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 828
            yield "                            <p class=\"class-description\">
                                ";
            // line 829
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 829, $this->source); })()), "description", [], "any", false, false, false, 829), "html", null, true);
            yield "
                            </p>
                        ";
        }
        // line 832
        yield "                    </div>

                    <div class=\"stats-grid\">
                        <div class=\"stat-card\">
                            <div class=\"stat-value\">";
        // line 836
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 836, $this->source); })())), "html", null, true);
        yield "</div>
                            <div class=\"stat-label\">Membres</div>
                        </div>
                        ";
        // line 839
        $context["etudiants"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 839, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return CoreExtension::inFilter("ROLE_ETUDIANT", CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 839, $this->source); })()), "roles", [], "any", false, false, false, 839)); });
        // line 840
        yield "                        <div class=\"stat-card\">
                            <div class=\"stat-value\">";
        // line 841
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 841, $this->source); })())), "html", null, true);
        yield "</div>
                            <div class=\"stat-label\">Étudiants</div>
                        </div>
                        ";
        // line 844
        $context["professeurs"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 844, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return CoreExtension::inFilter("ROLE_PROFESSEUR", CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 844, $this->source); })()), "roles", [], "any", false, false, false, 844)); });
        // line 845
        yield "                        <div class=\"stat-card\">
                            <div class=\"stat-value\">";
        // line 846
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["professeurs"]) || array_key_exists("professeurs", $context) ? $context["professeurs"] : (function () { throw new RuntimeError('Variable "professeurs" does not exist.', 846, $this->source); })())), "html", null, true);
        yield "</div>
                            <div class=\"stat-label\">Professeurs</div>
                        </div>
                        <div class=\"stat-card\">
                            <div class=\"stat-value\">";
        // line 850
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 850, $this->source); })())) - Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 850, $this->source); })()))) - Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["professeurs"]) || array_key_exists("professeurs", $context) ? $context["professeurs"] : (function () { throw new RuntimeError('Variable "professeurs" does not exist.', 850, $this->source); })()))), "html", null, true);
        yield "</div>
                            <div class=\"stat-label\">Autres</div>
                        </div>
                    </div>
                </div>

                <!-- Members Section -->
                <div class=\"members-section\">
                    <div class=\"section-header\">
                        <h2 class=\"section-title\">Membres de la classe</h2>
                        <div class=\"members-count\">";
        // line 860
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 860, $this->source); })())), "html", null, true);
        yield " membres</div>
                    </div>

                    <div class=\"search-container\">
                        <svg class=\"search-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"11\" cy=\"11\" r=\"8\"/>
                            <path d=\"m21 21-4.35-4.35\"/>
                        </svg>
                        <input type=\"text\" class=\"search-input\" placeholder=\"Rechercher un membre...\" id=\"searchMembers\">
                    </div>

                    <div class=\"members-grid\" id=\"membersList\">
                        ";
        // line 872
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 872, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 873
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 873, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 874
                yield "                                ";
                $context["roleClass"] = "role-etudiant";
                // line 875
                yield "                                ";
                $context["roleName"] = "Étudiant";
                // line 876
                yield "                                
                                ";
                // line 877
                if (CoreExtension::inFilter("ROLE_PROFESSEUR", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 877))) {
                    // line 878
                    yield "                                    ";
                    $context["roleClass"] = "role-professeur";
                    // line 879
                    yield "                                    ";
                    $context["roleName"] = "Professeur";
                    // line 880
                    yield "                                ";
                } elseif (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 880))) {
                    // line 881
                    yield "                                    ";
                    $context["roleClass"] = "role-admin";
                    // line 882
                    yield "                                    ";
                    $context["roleName"] = "Administrateur";
                    // line 883
                    yield "                                ";
                }
                // line 884
                yield "                                
                                <div class=\"member-card\" data-name=\"";
                // line 885
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 885), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 885), "html", null, true);
                yield "\" data-email=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 885), "html", null, true);
                yield "\">
                                    <div class=\"member-header\">
                                        <div class=\"member-avatar\">
                                            ";
                // line 888
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 888)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 888)), "html", null, true);
                yield "
                                        </div>
                                        <div class=\"member-info\">
                                            <h3 class=\"member-name\">";
                // line 891
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 891), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 891), "html", null, true);
                yield "</h3>
                                            <p class=\"member-email\">";
                // line 892
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 892), "html", null, true);
                yield "</p>
                                            <span class=\"member-role ";
                // line 893
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["roleClass"]) || array_key_exists("roleClass", $context) ? $context["roleClass"] : (function () { throw new RuntimeError('Variable "roleClass" does not exist.', 893, $this->source); })()), "html", null, true);
                yield "\">
                                                ";
                // line 894
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 894, $this->source); })()), "html", null, true);
                yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"member-actions\">
                                        <button class=\"action-btn\" onclick=\"viewProfile(";
                // line 899
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 899), "html", null, true);
                yield ")\">
                                            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                                <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"/>
                                                <circle cx=\"12\" cy=\"12\" r=\"3\"/>
                                            </svg>
                                            Profil
                                        </button>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 909
            yield "                        ";
        } else {
            // line 910
            yield "                            <div class=\"empty-state\">
                                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                </svg>
                                <h3>Aucun membre dans cette classe</h3>
                                <p>Cette classe ne contient aucun membre pour le moment</p>
                            </div>
                        ";
        }
        // line 919
        yield "                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Enhanced Search functionality
        document.getElementById('searchMembers').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();
            const members = document.querySelectorAll('.member-card');
            let visibleCount = 0;
            
            members.forEach(member => {
                const name = member.getAttribute('data-name').toLowerCase();
                const email = member.getAttribute('data-email').toLowerCase();
                
                if (searchTerm === '' || name.includes(searchTerm) || email.includes(searchTerm)) {
                    member.style.display = 'block';
                    visibleCount++;
                } else {
                    member.style.display = 'none';
                }
            });
            
            // Update visible count in header
            const countBadge = document.querySelector('.members-count');
            if (countBadge && searchTerm !== '') {
                countBadge.textContent = `\${visibleCount} membres trouvés`;
            } else if (countBadge) {
                countBadge.textContent = '";
        // line 949
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 949, $this->source); })())), "html", null, true);
        yield " membres';
            }
        });

        function viewProfile(userId) {
            // You can implement profile viewing logic here
            // For now, let's show a message
            alert('Voir le profil de l\\'utilisateur #' + userId);
        }

        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { 
                    opacity: 0; 
                    transform: translateY(20px); 
                }
                to { 
                    opacity: 1; 
                    transform: translateY(0); 
                }
            }
            
            .member-card {
                animation: fadeIn 0.4s ease-out;
                animation-fill-mode: both;
            }
            
            /* Stagger animation for member cards */
            .members-grid .member-card:nth-child(1) { animation-delay: 0.1s; }
            .members-grid .member-card:nth-child(2) { animation-delay: 0.2s; }
            .members-grid .member-card:nth-child(3) { animation-delay: 0.3s; }
            .members-grid .member-card:nth-child(4) { animation-delay: 0.4s; }
            .members-grid .member-card:nth-child(5) { animation-delay: 0.5s; }
            .members-grid .member-card:nth-child(6) { animation-delay: 0.6s; }
            .members-grid .member-card:nth-child(n+7) { animation-delay: 0.7s; }
            
            /* Loading state for search */
            .search-loading {
                position: relative;
                opacity: 0.7;
            }
            
            .search-loading::after {
                content: '';
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
                width: 16px;
                height: 16px;
                border: 2px solid #e5e7eb;
                border-top-color: #ef4444;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }
            
            @keyframes spin {
                to { transform: translateY(-50%) rotate(360deg); }
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
        return "classe/users.html.twig";
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
        return array (  1144 => 949,  1112 => 919,  1101 => 910,  1098 => 909,  1082 => 899,  1074 => 894,  1070 => 893,  1066 => 892,  1060 => 891,  1053 => 888,  1043 => 885,  1040 => 884,  1037 => 883,  1034 => 882,  1031 => 881,  1028 => 880,  1025 => 879,  1022 => 878,  1020 => 877,  1017 => 876,  1014 => 875,  1011 => 874,  1006 => 873,  1004 => 872,  989 => 860,  976 => 850,  969 => 846,  966 => 845,  964 => 844,  958 => 841,  955 => 840,  953 => 839,  947 => 836,  941 => 832,  935 => 829,  932 => 828,  929 => 827,  923 => 825,  921 => 824,  917 => 823,  912 => 821,  896 => 808,  890 => 805,  874 => 792,  864 => 785,  854 => 778,  845 => 772,  836 => 766,  828 => 761,  824 => 760,  817 => 756,  811 => 755,  804 => 752,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — {{ classe.nom }} - Membres</title>
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

        /* MAIN CONTENT - UPDATED DESIGN */
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

        /* CLASS INFO SECTION - IMPROVED */
        .class-info-section {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 32px;
            margin-bottom: 40px;
        }

        .class-info-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            height: fit-content;
            position: sticky;
            top: 32px;
        }

        .class-header {
            text-align: center;
            margin-bottom: 32px;
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
            margin: 0 auto 20px;
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);
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
            margin-bottom: 16px;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .class-description {
            color: var(--gray-600);
            font-size: 15px;
            line-height: 1.6;
            margin-top: 16px;
        }

        /* STATS SECTION - IMPROVED */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-top: 24px;
        }

        .stat-card {
            text-align: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(229, 231, 235, 0.5);
            transition: all var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
            border-color: var(--blue-500);
        }

        .stat-value {
            font-size: 32px;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 6px;
        }

        .stat-label {
            font-size: 13px;
            color: var(--gray-600);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* MEMBERS SECTION - IMPROVED */
        .members-section {
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

        .members-count {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            padding: 10px 22px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        /* SEARCH BAR - IMPROVED */
        .search-container {
            position: relative;
            margin-bottom: 24px;
        }

        .search-input {
            width: 100%;
            padding: 16px 20px 16px 52px;
            border: 2px solid var(--gray-300);
            border-radius: var(--radius-lg);
            background: white;
            color: var(--gray-900);
            font-size: 15px;
            font-weight: 500;
            transition: all var(--transition);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--red-500);
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-500);
            width: 20px;
            height: 20px;
        }

        /* MEMBERS GRID - IMPROVED */
        .members-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
        }

        .member-card {
            background: white;
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            padding: 24px;
            transition: all var(--transition);
            position: relative;
            overflow: hidden;
        }

        .member-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--red-500);
        }

        .member-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500), var(--orange-500));
        }

        .member-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 16px;
        }

        .member-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 20px;
            flex-shrink: 0;
            border: 3px solid white;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        .member-info {
            flex: 1;
        }

        .member-name {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 4px;
        }

        .member-email {
            font-size: 14px;
            color: var(--gray-600);
            margin-bottom: 8px;
        }

        .member-role {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .role-etudiant {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.1) 100%);
            color: #2563EB;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .role-professeur {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.1) 100%);
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .role-admin {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.15) 0%, rgba(239, 68, 68, 0.1) 100%);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .member-actions {
            display: flex;
            gap: 8px;
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-100);
        }

        .action-btn {
            padding: 8px 16px;
            border-radius: 8px;
            border: 2px solid var(--gray-300);
            background: white;
            color: var(--gray-700);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition);
            display: flex;
            align-items: center;
            gap: 6px;
            flex: 1;
            justify-content: center;
        }

        .action-btn:hover {
            background: var(--gray-50);
            border-color: var(--gray-400);
            transform: translateY(-2px);
        }

        /* EMPTY STATE - IMPROVED */
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

        .btn {
            padding: 14px 28px;
            border-radius: var(--radius-lg);
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition);
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.3);
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1200px) {
            .class-info-section {
                grid-template-columns: 1fr;
                gap: 24px;
            }
            
            .class-info-card {
                position: relative;
                top: 0;
            }
            
            .members-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
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
            
            .members-grid {
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
            
            .members-count {
                align-self: flex-start;
            }
        }

        @media (max-width: 480px) {
            .main {
                padding: 20px;
            }
            
            .class-info-card,
            .members-section {
                padding: 24px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .member-header {
                flex-direction: column;
                text-align: center;
                gap: 12px;
            }
            
            .member-actions {
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
                <a href=\"{{ path('app_classe_users',{'id': app.user.classe.id}) }}\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/>
                        <path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Classes
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

        <!-- MAIN CONTENT - IMPROVED DESIGN -->
        <main class=\"main\">
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>{{ classe.nom }}</h1>
                    <p>Gestion des membres de la classe</p>
                </div>
                <a href=\"{{ path('app_classe_users',{'id': app.user.classe.id}) }}\" class=\"back-link\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Retour
                </a>
            </header>

            <div class=\"class-info-section\">
                <!-- Class Information Card -->
                <div class=\"class-info-card\">
                    <div class=\"class-header\">
                        <div class=\"class-icon\">
                            {{ classe.nom|slice(0, 2)|upper }}
                        </div>
                        <h2 class=\"class-title\">{{ classe.nom }}</h2>
                        {% if classe.niveau %}
                            <div class=\"class-niveau text-dark\">{{ classe.niveau }}</div>
                        {% endif %}
                        {% if classe.description %}
                            <p class=\"class-description\">
                                {{ classe.description }}
                            </p>
                        {% endif %}
                    </div>

                    <div class=\"stats-grid\">
                        <div class=\"stat-card\">
                            <div class=\"stat-value\">{{ users|length }}</div>
                            <div class=\"stat-label\">Membres</div>
                        </div>
                        {% set etudiants = users|filter(u => 'ROLE_ETUDIANT' in u.roles) %}
                        <div class=\"stat-card\">
                            <div class=\"stat-value\">{{ etudiants|length }}</div>
                            <div class=\"stat-label\">Étudiants</div>
                        </div>
                        {% set professeurs = users|filter(u => 'ROLE_PROFESSEUR' in u.roles) %}
                        <div class=\"stat-card\">
                            <div class=\"stat-value\">{{ professeurs|length }}</div>
                            <div class=\"stat-label\">Professeurs</div>
                        </div>
                        <div class=\"stat-card\">
                            <div class=\"stat-value\">{{ users|length - etudiants|length - professeurs|length }}</div>
                            <div class=\"stat-label\">Autres</div>
                        </div>
                    </div>
                </div>

                <!-- Members Section -->
                <div class=\"members-section\">
                    <div class=\"section-header\">
                        <h2 class=\"section-title\">Membres de la classe</h2>
                        <div class=\"members-count\">{{ users|length }} membres</div>
                    </div>

                    <div class=\"search-container\">
                        <svg class=\"search-icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"11\" cy=\"11\" r=\"8\"/>
                            <path d=\"m21 21-4.35-4.35\"/>
                        </svg>
                        <input type=\"text\" class=\"search-input\" placeholder=\"Rechercher un membre...\" id=\"searchMembers\">
                    </div>

                    <div class=\"members-grid\" id=\"membersList\">
                        {% if users is not empty %}
                            {% for user in users %}
                                {% set roleClass = 'role-etudiant' %}
                                {% set roleName = 'Étudiant' %}
                                
                                {% if 'ROLE_PROFESSEUR' in user.roles %}
                                    {% set roleClass = 'role-professeur' %}
                                    {% set roleName = 'Professeur' %}
                                {% elseif 'ROLE_ADMIN' in user.roles %}
                                    {% set roleClass = 'role-admin' %}
                                    {% set roleName = 'Administrateur' %}
                                {% endif %}
                                
                                <div class=\"member-card\" data-name=\"{{ user.nom }} {{ user.prenom }}\" data-email=\"{{ user.email }}\">
                                    <div class=\"member-header\">
                                        <div class=\"member-avatar\">
                                            {{ user.nom|first }}{{ user.prenom|first }}
                                        </div>
                                        <div class=\"member-info\">
                                            <h3 class=\"member-name\">{{ user.nom }} {{ user.prenom }}</h3>
                                            <p class=\"member-email\">{{ user.email }}</p>
                                            <span class=\"member-role {{ roleClass }}\">
                                                {{ roleName }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"member-actions\">
                                        <button class=\"action-btn\" onclick=\"viewProfile({{ user.id }})\">
                                            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                                <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"/>
                                                <circle cx=\"12\" cy=\"12\" r=\"3\"/>
                                            </svg>
                                            Profil
                                        </button>
                                    </div>
                                </div>
                            {% endfor %}
                        {% else %}
                            <div class=\"empty-state\">
                                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                </svg>
                                <h3>Aucun membre dans cette classe</h3>
                                <p>Cette classe ne contient aucun membre pour le moment</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Enhanced Search functionality
        document.getElementById('searchMembers').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();
            const members = document.querySelectorAll('.member-card');
            let visibleCount = 0;
            
            members.forEach(member => {
                const name = member.getAttribute('data-name').toLowerCase();
                const email = member.getAttribute('data-email').toLowerCase();
                
                if (searchTerm === '' || name.includes(searchTerm) || email.includes(searchTerm)) {
                    member.style.display = 'block';
                    visibleCount++;
                } else {
                    member.style.display = 'none';
                }
            });
            
            // Update visible count in header
            const countBadge = document.querySelector('.members-count');
            if (countBadge && searchTerm !== '') {
                countBadge.textContent = `\${visibleCount} membres trouvés`;
            } else if (countBadge) {
                countBadge.textContent = '{{ users|length }} membres';
            }
        });

        function viewProfile(userId) {
            // You can implement profile viewing logic here
            // For now, let's show a message
            alert('Voir le profil de l\\'utilisateur #' + userId);
        }

        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { 
                    opacity: 0; 
                    transform: translateY(20px); 
                }
                to { 
                    opacity: 1; 
                    transform: translateY(0); 
                }
            }
            
            .member-card {
                animation: fadeIn 0.4s ease-out;
                animation-fill-mode: both;
            }
            
            /* Stagger animation for member cards */
            .members-grid .member-card:nth-child(1) { animation-delay: 0.1s; }
            .members-grid .member-card:nth-child(2) { animation-delay: 0.2s; }
            .members-grid .member-card:nth-child(3) { animation-delay: 0.3s; }
            .members-grid .member-card:nth-child(4) { animation-delay: 0.4s; }
            .members-grid .member-card:nth-child(5) { animation-delay: 0.5s; }
            .members-grid .member-card:nth-child(6) { animation-delay: 0.6s; }
            .members-grid .member-card:nth-child(n+7) { animation-delay: 0.7s; }
            
            /* Loading state for search */
            .search-loading {
                position: relative;
                opacity: 0.7;
            }
            
            .search-loading::after {
                content: '';
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
                width: 16px;
                height: 16px;
                border: 2px solid #e5e7eb;
                border-top-color: #ef4444;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }
            
            @keyframes spin {
                to { transform: translateY(-50%) rotate(360deg); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>", "classe/users.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\users.html.twig");
    }
}
