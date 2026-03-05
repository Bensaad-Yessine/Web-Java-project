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

/* Front/suivi_bien_etre/new.html.twig */
class __TwigTemplate_98449a5bd364eb33463eb01a15535f9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/suivi_bien_etre/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/suivi_bien_etre/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Nouveau Suivi: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        :root {
            --font-size: 16px;
            --bg: #ffffff;
            --fg: #111827;
            
            --red-50: #fef2f2;
            --red-100: #fee2e2;
            --red-200: #fecaca;
            --red-300: #fca5a5;
            --red-400: #f87171;
            --red-500: #ef4444;
            --red-600: #dc2626;
            --red-700: #b91c1c;
            --red-800: #991b1b;
            --red-900: #7f1d1d;
            
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            
            --blue-50: #eff6ff;
            --blue-100: #dbeafe;
            --blue-200: #bfdbfe;
            --blue-300: #93c5fd;
            --blue-400: #60a5fa;
            --blue-500: #3b82f6;
            --blue-600: #2563eb;
            --blue-700: #1d4ed8;
            --blue-800: #1e40af;
            --blue-900: #1e3a8a;
            
            --purple-50: #faf5ff;
            --purple-100: #f3e8ff;
            --purple-200: #e9d5ff;
            --purple-300: #d8b4fe;
            --purple-400: #c084fc;
            --purple-500: #a855f7;
            --purple-600: #9333ea;
            --purple-700: #7e22ce;
            --purple-800: #6b21a8;
            --purple-900: #581c87;
            
            --green-50: #f0fdf4;
            --green-100: #dcfce7;
            --green-200: #bbf7d0;
            --green-300: #86efac;
            --green-400: #4ade80;
            --green-500: #22c55e;
            --green-600: #16a34a;
            --green-700: #15803d;
            --green-800: #166534;
            --green-900: #14532d;
            
            --orange-50: #fff7ed;
            --orange-100: #ffedd5;
            --orange-200: #fed7aa;
            --orange-300: #fdba74;
            --orange-400: #fb923c;
            --orange-500: #f97316;
            --orange-600: #ea580c;
            --orange-700: #c2410c;
            --orange-800: #9a3412;
            --orange-900: #7c2d12;
            
            --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.05);
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.15);
            
            --radius-sm: 8px;
            --radius: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            --radius-2xl: 24px;
            
            --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition: 250ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: 350ms cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', sans-serif;
            background: linear-gradient(135deg, var(--gray-50) 0%, #ffffff 30%, var(--gray-50) 100%);
            color: var(--fg);
            min-height: 100vh;
            line-height: 1.6;
            font-feature-settings: 'ss01', 'ss02', 'cv01', 'cv02';
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Main Layout */
        .app-shell {
            display: flex;
            min-height: 100vh;
            background: linear-gradient(135deg, 
                rgba(249, 250, 251, 0.95) 0%, 
                rgba(255, 255, 255, 0.97) 50%, 
                rgba(249, 250, 251, 0.95) 100%);
        }

        /* Sidebar */
        .sidebar {
            width: 300px;
            background: linear-gradient(165deg, 
                rgba(255, 255, 255, 0.92) 0%, 
                rgba(249, 250, 251, 0.88) 100%);
            border-right: 1px solid rgba(229, 231, 235, 0.6);
            padding: 28px 24px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            box-shadow: var(--shadow-md);
            z-index: 10;
        }

        /* Brand Section */
        .brand {
            margin-bottom: 36px;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
            position: relative;
        }

        .brand::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, var(--red-500), var(--red-300));
            border-radius: 2px;
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
            transition: all var(--transition);
        }

        .brand-title {
            font-weight: 800;
            font-size: 20px;
            line-height: 1;
            color: var(--gray-900);
            letter-spacing: -0.5px;
        }

        .brand-sub {
            font-size: 13px;
            color: var(--gray-500);
            margin-top: 6px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        /* User Session */
        .user-session {
            margin-top: 28px;
            padding: 24px;
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.5);
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
            transition: all var(--transition);
        }

        .user-session::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500), var(--orange-500));
            border-radius: var(--radius-xl) var(--radius-xl) 0 0;
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
            flex-shrink: 0;
            box-shadow: 0 6px 16px rgba(220, 38, 38, 0.2);
            border: 3px solid white;
        }

        .user-details h3 {
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            color: #1f2937;
            line-height: 1.4;
        }

        .user-details p {
            margin: 6px 0 0;
            font-size: 14px;
            color: #4b5563;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .user-details p::before {
            content: '📚';
            font-size: 12px;
        }

        .session-info {
            font-size: 13px;
            color: #4b5563;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            font-weight: 500;
        }

        .session-info div {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
        }

        /* Navigation */
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
            position: relative;
            overflow: hidden;
            font-size: 15px;
        }

        .nav a:hover {
            background: linear-gradient(90deg, 
                rgba(254, 242, 242, 0.7) 0%, 
                rgba(254, 242, 242, 0.4) 100%);
            color: var(--red-600);
            transform: translateX(8px);
            box-shadow: var(--shadow-xs);
        }

        .nav a.active {
            background: linear-gradient(90deg, 
                rgba(254, 242, 242, 0.9) 0%, 
                rgba(254, 242, 242, 0.6) 100%);
            color: var(--red-600);
            font-weight: 600;
            border-left: 4px solid var(--red-500);
            box-shadow: var(--shadow-sm);
        }

        .nav a.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(180deg, var(--red-500), var(--orange-500));
            border-radius: 0 var(--radius) var(--radius) 0;
        }

        /* Main Content */
        .main {
            flex: 1;
            padding: 40px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 48px;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
            position: relative;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 120px;
            height: 2px;
            background: linear-gradient(90deg, var(--red-500), transparent);
            border-radius: 2px;
        }

        .h1 {
            font-size: 42px;
            font-weight: 800;
            margin: 0;
            color: #111827;
            letter-spacing: -0.5px;
            line-height: 1.2;
        }

        .muted {
            color: #6b7280;
            margin-top: 10px;
            font-size: 16px;
            font-weight: 500;
            max-width: 600px;
            line-height: 1.6;
        }

        .session-display {
            text-align: right;
            padding: 16px 24px;
            background: linear-gradient(135deg, 
                rgba(255, 255, 255, 0.9) 0%, 
                rgba(249, 250, 251, 0.8) 100%);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-sm);
        }

        .session-display div:first-child {
            font-size: 12px;
            color: var(--gray-500);
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
            text-transform: uppercase;
        }

        .session-display div:last-child {
            font-weight: 700;
            font-size: 15px;
            color: #1f2937;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
        }

        .session-display div:last-child::before {
            content: '';
            width: 8px;
            height: 8px;
            background: var(--green-500);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Card Design */
        .card {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border: 1px solid rgba(229, 231, 235, 0.6);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            margin-bottom: 28px;
            overflow: hidden;
        }

        .card-header {
            padding: 28px 28px 0;
        }

        .card-title {
            font-size: 20px;
            font-weight: 700;
            margin: 0;
            color: #111827;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        .card-title::before {
            content: '';
            width: 6px;
            height: 24px;
            background: linear-gradient(180deg, var(--red-500), var(--orange-500));
            border-radius: 3px;
            flex-shrink: 0;
        }

        .card-content {
            padding: 28px;
        }

        /* Form Design */
        .form-group {
            margin-bottom: 32px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--gray-800);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group label::before {
            content: '';
            width: 6px;
            height: 6px;
            background: var(--blue-500);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid var(--gray-300);
            border-radius: var(--radius-lg);
            background: #ffffff;
            color: var(--gray-900);
            font-size: 15px;
            font-weight: 500;
            transition: all var(--transition);
            font-family: inherit;
        }

        .form-control:hover {
            border-color: var(--gray-400);
        }

        .form-control:focus {
            border-color: var(--blue-500);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            outline: none;
        }

        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 20px;
            padding-right: 50px;
        }

        .form-text {
            display: block;
            margin-top: 8px;
            font-size: 13px;
            color: var(--gray-500);
            font-weight: 400;
        }

        /* Buttons */
        .btn {
            appearance: none;
            border: 2px solid transparent;
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-700) 100%);
            color: white;
            border-radius: var(--radius-lg);
            padding: 16px 28px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: all var(--transition);
            font-size: 15px;
            letter-spacing: 0.3px;
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.2);
            text-decoration: none;
            border: none;
        }

        .btn:hover {
            background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-800) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: var(--gray-700);
            border: 2px solid var(--gray-300);
            font-weight: 500;
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--gray-100);
            color: var(--gray-900);
            border-color: var(--gray-400);
        }

        .btn-green {
            background: linear-gradient(135deg, var(--green-500) 0%, var(--green-700) 100%);
            box-shadow: 0 4px 16px rgba(22, 163, 74, 0.2);
        }

        .btn-green:hover {
            background: linear-gradient(135deg, var(--green-600) 0%, var(--green-800) 100%);
            box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
        }

        /* Flash Messages */
        .flash-messages {
            margin-bottom: 28px;
        }

        .flash-message {
            padding: 18px 24px;
            border-radius: var(--radius-lg);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            box-shadow: var(--shadow-sm);
            animation: slideIn 0.3s ease;
        }

        .flash-success {
            background: linear-gradient(135deg, var(--green-50) 0%, var(--green-100) 100%);
            border: 1px solid var(--green-200);
            color: var(--green-800);
        }

        .flash-error {
            background: linear-gradient(135deg, var(--red-50) 0%, var(--red-100) 100%);
            border: 1px solid var(--red-200);
            color: var(--red-800);
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 16px;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--gray-200);
        }

        /* Objectif Info */
        .objectif-info {
            background: linear-gradient(135deg, var(--purple-50) 0%, var(--blue-50) 100%);
            border: 1px solid var(--purple-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            margin-bottom: 28px;
            animation: fadeIn 0.5s ease;
        }

        .objectif-info h3 {
            margin: 0 0 16px;
            color: var(--purple-800);
            font-size: 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .objectif-info h3::before {
            content: '🎯';
            font-size: 20px;
        }

        .objectif-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
        }

        .objectif-detail-item {
            background: rgba(255, 255, 255, 0.6);
            padding: 12px 16px;
            border-radius: var(--radius);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .objectif-detail-item strong {
            display: block;
            font-size: 12px;
            color: var(--gray-600);
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .objectif-detail-item span {
            font-size: 16px;
            font-weight: 600;
            color: var(--gray-800);
        }

        /* Tips Grid */
        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 24px;
        }

        .tip-card {
            text-align: center;
            padding: 24px 20px;
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(229, 231, 235, 0.6);
            transition: all var(--transition);
        }

        .tip-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .tip-icon {
            font-size: 32px;
            margin-bottom: 16px;
        }

        .tip-title {
            font-size: 16px;
            font-weight: 700;
            margin: 0 0 8px;
            color: var(--gray-800);
        }

        .tip-text {
            font-size: 14px;
            color: var(--gray-600);
            line-height: 1.5;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .app-shell {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 24px;
                border-right: none;
                border-bottom: 1px solid rgba(229, 231, 235, 0.6);
            }
            
            .main {
                padding: 32px;
            }
            
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .h1 {
                font-size: 36px;
            }
            
            .session-display {
                width: 100%;
                text-align: left;
            }
        }

        @media (max-width: 768px) {
            .main {
                padding: 24px;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .tips-grid {
                grid-template-columns: 1fr;
            }
            
            .objectif-details {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .main {
                padding: 20px;
            }
            
            .card-content {
                padding: 20px;
            }
            
            .form-control {
                padding: 14px 16px;
            }
            
            .btn {
                padding: 14px 20px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .card {
            animation: fadeIn 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <!-- Sidebar -->
        <aside class=\"sidebar\">
            <div class=\"brand\">
                <div class=\"brand-row\">
                    <div class=\"brand-icon\">ES</div>
                    <div>
                        <div class=\"brand-title\">ESPRIT</div>
                        <div class=\"brand-sub\">Student Assistant</div>
                    </div>
                </div>
            </div>

            <!-- User session -->
            <div class=\"user-session\">
                <div class=\"user-info\">
                    <div class=\"avatar\">
                        ";
        // line 839
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 839, $this->source); })()), "user", [], "any", false, false, false, 839)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 839), "initials", [], "any", true, true, false, 839)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 839, $this->source); })()), "user", [], "any", false, false, false, 839), "initials", [], "any", false, false, false, 839), (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 839, $this->source); })()), "user", [], "any", false, false, false, 839), "nom", [], "any", false, false, false, 839)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 839, $this->source); })()), "user", [], "any", false, false, false, 839), "prenom", [], "any", false, false, false, 839))))) : ((Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 839, $this->source); })()), "user", [], "any", false, false, false, 839), "nom", [], "any", false, false, false, 839)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 839, $this->source); })()), "user", [], "any", false, false, false, 839), "prenom", [], "any", false, false, false, 839))))), "html", null, true)) : ("JD"));
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 842
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 842, $this->source); })()), "user", [], "any", false, false, false, 842)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 842, $this->source); })()), "user", [], "any", false, false, false, 842), "nom", [], "any", false, false, false, 842) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 842, $this->source); })()), "user", [], "any", false, false, false, 842), "prenom", [], "any", false, false, false, 842)), "html", null, true)) : ("John Doe"));
        yield "</h3>
                        <p>";
        // line 843
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 843, $this->source); })()), "user", [], "any", false, false, false, 843)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 843), "classe", [], "any", false, true, false, 843), "nom", [], "any", true, true, false, 843)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 843, $this->source); })()), "user", [], "any", false, false, false, 843), "classe", [], "any", false, false, false, 843), "nom", [], "any", false, false, false, 843), "4SE-G1")) : ("4SE-G1")), "html", null, true)) : ("4SE-G1"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 847
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 847, $this->source); })()), "user", [], "any", false, false, false, 847)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 847, $this->source); })()), "user", [], "any", false, false, false, 847), "email", [], "any", false, false, false, 847), "html", null, true)) : ("student@esprit.tn"));
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 848
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 848, $this->source); })()), "user", [], "any", false, false, false, 848)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 848, $this->source); })()), "user", [], "any", false, false, false, 848), "roles", [], "any", false, false, false, 848)), ["ROLE_" => ""])), "html", null, true)) : ("Student"));
        yield "</div>
                    <div><strong>Member since:</strong> ";
        // line 849
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 849, $this->source); })()), "user", [], "any", false, false, false, 849)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 849, $this->source); })()), "user", [], "any", false, false, false, 849), "createdAt", [], "any", false, false, false, 849), "M Y"), "html", null, true)) : ("Jan 2024"));
        yield "</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class=\"nav\">
                <a href=\"";
        // line 855
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    📊 Dashboard
                </a>
                <a href=\"#\">
                    📋 My Tasks
                </a>
                <a href=\"";
        // line 861
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    👤 Profile
                </a>
                <a href=\"";
        // line 864
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\" class=\"active\">
                    🎯 Objectifs Santé
                </a>
                <a href=\"#\">
                    ⚙️ Settings
                </a>
                <a href=\"";
        // line 870
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    🚪 Logout
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class=\"main\">
            <header class=\"header\">
                <div>
                    <h1 class=\"h1\">Nouveau suivi de santé</h1>
                    <p class=\"muted\">Enregistrez vos indicateurs quotidiens pour suivre votre progression</p>
                </div>
                <div class=\"session-display\">
                    <div>Session actuelle</div>
                    <div>";
        // line 885
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 885, $this->source); })()), "user", [], "any", false, false, false, 885)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 885, $this->source); })()), "user", [], "any", false, false, false, 885), "email", [], "any", false, false, false, 885), "html", null, true)) : ("student@esprit.tn"));
        yield "</div>
                </div>
            </header>

            <!-- Breadcrumb -->
            <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 24px; font-size: 14px; color: var(--gray-600);\">
                <a href=\"";
        // line 891
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\" style=\"color: var(--blue-600); text-decoration: none;\">
                    Mes Objectifs Santé
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <a href=\"";
        // line 895
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 895, $this->source); })()), "id", [], "any", false, false, false, 895)]), "html", null, true);
        yield "\" style=\"color: var(--blue-600); text-decoration: none;\">
                    ";
        // line 896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 896, $this->source); })()), "titre", [], "any", false, false, false, 896), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 896, $this->source); })()), "titre", [], "any", false, false, false, 896)) > 30)) ? ("...") : (""));
        yield "
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <a href=\"";
        // line 899
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_suivis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 899, $this->source); })()), "id", [], "any", false, false, false, 899)]), "html", null, true);
        yield "\" style=\"color: var(--blue-600); text-decoration: none;\">
                    Suivis
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <span>Nouveau suivi</span>
            </div>

            <!-- Objectif Info -->
            <div class=\"objectif-info\">
                <h3>Objectif concerné</h3>
                <div class=\"objectif-details\">
                    <div class=\"objectif-detail-item\">
                        <strong>Titre</strong>
                        <span>";
        // line 912
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 912, $this->source); })()), "titre", [], "any", false, false, false, 912), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Type</strong>
                        <span>";
        // line 916
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 916, $this->source); })()), "type", [], "any", false, false, false, 916), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Priorité</strong>
                        <span>";
        // line 920
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 920, $this->source); })()), "priorite", [], "any", false, false, false, 920), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Score Moyen</strong>
                        <span>";
        // line 924
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 924, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 924), "html", null, true);
        yield "/100</span>
                    </div>
                </div>
            </div>

            <!-- Flash Messages -->
            <div class=\"flash-messages\">
                ";
        // line 931
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 931, $this->source); })()), "flashes", [], "any", false, false, false, 931));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 932
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 933
                yield "                        <div class=\"flash-message flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                            ";
                // line 934
                if (($context["label"] == "success")) {
                    yield "✓
                            ";
                } elseif ((                // line 935
$context["label"] == "error")) {
                    yield "✗
                            ";
                }
                // line 937
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 940
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 941
        yield "            </div>

            <!-- Form Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">Indicateurs de santé</h2>
                </div>
                
                <div class=\"card-content\">
                ";
        // line 951
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 951, $this->source); })()), "vars", [], "any", false, false, false, 951), "submitted", [], "any", false, false, false, 951) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 951, $this->source); })()), "vars", [], "any", false, false, false, 951), "valid", [], "any", false, false, false, 951))) {
            // line 952
            yield "  <div class=\"flash-message flash-error\">
    ✗ Veuillez corriger les erreurs dans le formulaire.
  </div>
";
        }
        // line 956
        yield "
";
        // line 958
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 958, $this->source); })()), 'errors');
        yield "
                    ";
        // line 959
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 959, $this->source); })()), 'form_start', ["attr" => ["class" => "suivi-form", "novalidate" => "novalidate"]]);
        yield "
                    
                        <!-- Date Field -->
                        <div class=\"form-group\">
                            ";
        // line 963
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 963, $this->source); })()), "dateSaisie", [], "any", false, false, false, 963), 'label');
        yield "
                            ";
        // line 964
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 964, $this->source); })()), "dateSaisie", [], "any", false, false, false, 964), 'widget', ["attr" => ["class" => "form-control", "value" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
        // line 967
        yield "
                            <small class=\"form-text\">Date de l'évaluation (par défaut: aujourd'hui)</small>
                            ";
        // line 969
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 969, $this->source); })()), "dateSaisie", [], "any", false, false, false, 969), 'errors');
        yield "
                        </div>

                        <!-- Metrics Grid -->
                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; margin-bottom: 32px;\">
                            <!-- Humeur (SELECT) -->
                            <div class=\"form-group\">
                                ";
        // line 976
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 976, $this->source); })()), "humeur", [], "any", false, false, false, 976), 'label');
        yield "
                                ";
        // line 977
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 977, $this->source); })()), "humeur", [], "any", false, false, false, 977), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 979
        yield "
                                <small class=\"form-text\">Sélectionnez votre humeur du jour</small>
                                ";
        // line 981
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 981, $this->source); })()), "humeur", [], "any", false, false, false, 981), 'errors');
        yield "
                            </div>

                            <!-- Qualité de sommeil -->
                            <div class=\"form-group\">
                                ";
        // line 986
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 986, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 986), 'label');
        yield "
                                ";
        // line 987
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 987, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 987), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0-10", "min" => "0", "max" => "10"]]);
        // line 992
        yield "
                                <small class=\"form-text\">Qualité de votre sommeil (0 = très mauvaise, 10 = excellente)</small>
                                ";
        // line 994
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 994, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 994), 'errors');
        yield "
                            </div>

                            <!-- Niveau d'énergie -->
                            <div class=\"form-group\">
                                ";
        // line 999
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 999, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 999), 'label');
        yield "
                                ";
        // line 1000
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1000, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 1000), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0-10", "min" => "0", "max" => "10"]]);
        // line 1005
        yield "
                                <small class=\"form-text\">Votre niveau d'énergie (0 = très faible, 10 = très élevé)</small>
                                ";
        // line 1007
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1007, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 1007), 'errors');
        yield "
                            </div>

                            <!-- Niveau de stress -->
                            <div class=\"form-group\">
                                ";
        // line 1012
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1012, $this->source); })()), "niveauStress", [], "any", false, false, false, 1012), 'label');
        yield "
                                ";
        // line 1013
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1013, $this->source); })()), "niveauStress", [], "any", false, false, false, 1013), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0-10", "min" => "0", "max" => "10"]]);
        // line 1018
        yield "
                                <small class=\"form-text\">Votre niveau de stress (0 = très calme, 10 = très stressé)</small>
                                ";
        // line 1020
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1020, $this->source); })()), "niveauStress", [], "any", false, false, false, 1020), 'errors');
        yield "
                            </div>

                            <!-- Qualité d'alimentation -->
                            <div class=\"form-group\">
                                ";
        // line 1025
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1025, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 1025), 'label');
        yield "
                                ";
        // line 1026
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1026, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 1026), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0-10", "min" => "0", "max" => "10"]]);
        // line 1031
        yield "
                                <small class=\"form-text\">Qualité de votre alimentation (0 = très mauvaise, 10 = excellente)</small>
                                ";
        // line 1033
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1033, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 1033), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- Notes Field -->
                        <div class=\"form-group\">
                            ";
        // line 1039
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1039, $this->source); })()), "notesLibres", [], "any", false, false, false, 1039), 'label');
        yield "
                            ";
        // line 1040
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1040, $this->source); })()), "notesLibres", [], "any", false, false, false, 1040), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "placeholder" => "Notes supplémentaires, observations, difficultés rencontrées..."]]);
        // line 1044
        yield "
                            <small class=\"form-text\">Ajoutez des notes pour mieux comprendre votre état du jour</small>
                            ";
        // line 1046
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1046, $this->source); })()), "notesLibres", [], "any", false, false, false, 1046), 'errors');
        yield "
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-green\">
                                💾 Enregistrer le suivi
                            </button>
                            <a href=\"";
        // line 1053
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_suivis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1053, $this->source); })()), "id", [], "any", false, false, false, 1053)]), "html", null, true);
        yield "\" class=\"btn btn-outline\">
                                ← Annuler
                            </a>
                        </div>
                    
                    ";
        // line 1058
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1058, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>

            <!-- Tips Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">💡 Conseils pour une évaluation précise</h2>
                </div>
                <div class=\"card-content\">
                    <div class=\"tips-grid\">
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">🎯</div>
                            <h3 class=\"tip-title\">Soyez honnête</h3>
                            <p class=\"tip-text\">Évaluez votre état réellement, pas comme vous souhaiteriez qu'il soit.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">⏰</div>
                            <h3 class=\"tip-title\">Moment optimal</h3>
                            <p class=\"tip-text\">Notez vos indicateurs en fin de journée pour une vision complète.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">📝</div>
                            <h3 class=\"tip-title\">Ajoutez des notes</h3>
                            <p class=\"tip-text\">Les notes contextuelles aident à comprendre les variations.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">📈</div>
                            <h3 class=\"tip-title\">Régularité</h3>
                            <p class=\"tip-text\">Un suivi quotidien permet d'identifier les tendances.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

   <script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('.suivi-form');
  if (!form) return;

  form.addEventListener('submit', function() {
    // Juste un feedback visuel, sans empêcher Symfony
    const requiredFields = form.querySelectorAll('[required]');
    requiredFields.forEach(field => {
      if (!field.value.trim()) {
        field.style.borderColor = 'var(--red-500)';
        field.style.backgroundColor = 'var(--red-50)';
      }
    });

    // Loading state
    const submitBtn = form.querySelector('button[type=\"submit\"]');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = '⏳ Enregistrement...';
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
        return "Front/suivi_bien_etre/new.html.twig";
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
        return array (  1252 => 1058,  1244 => 1053,  1234 => 1046,  1230 => 1044,  1228 => 1040,  1224 => 1039,  1215 => 1033,  1211 => 1031,  1209 => 1026,  1205 => 1025,  1197 => 1020,  1193 => 1018,  1191 => 1013,  1187 => 1012,  1179 => 1007,  1175 => 1005,  1173 => 1000,  1169 => 999,  1161 => 994,  1157 => 992,  1155 => 987,  1151 => 986,  1143 => 981,  1139 => 979,  1137 => 977,  1133 => 976,  1123 => 969,  1119 => 967,  1117 => 964,  1113 => 963,  1106 => 959,  1102 => 958,  1099 => 956,  1093 => 952,  1091 => 951,  1080 => 941,  1074 => 940,  1064 => 937,  1059 => 935,  1055 => 934,  1050 => 933,  1045 => 932,  1041 => 931,  1031 => 924,  1024 => 920,  1017 => 916,  1010 => 912,  994 => 899,  987 => 896,  983 => 895,  976 => 891,  967 => 885,  949 => 870,  940 => 864,  934 => 861,  925 => 855,  916 => 849,  912 => 848,  908 => 847,  901 => 843,  897 => 842,  891 => 839,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Nouveau Suivi: {{ objectif.titre }}</title>
    <style>
        :root {
            --font-size: 16px;
            --bg: #ffffff;
            --fg: #111827;
            
            --red-50: #fef2f2;
            --red-100: #fee2e2;
            --red-200: #fecaca;
            --red-300: #fca5a5;
            --red-400: #f87171;
            --red-500: #ef4444;
            --red-600: #dc2626;
            --red-700: #b91c1c;
            --red-800: #991b1b;
            --red-900: #7f1d1d;
            
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            
            --blue-50: #eff6ff;
            --blue-100: #dbeafe;
            --blue-200: #bfdbfe;
            --blue-300: #93c5fd;
            --blue-400: #60a5fa;
            --blue-500: #3b82f6;
            --blue-600: #2563eb;
            --blue-700: #1d4ed8;
            --blue-800: #1e40af;
            --blue-900: #1e3a8a;
            
            --purple-50: #faf5ff;
            --purple-100: #f3e8ff;
            --purple-200: #e9d5ff;
            --purple-300: #d8b4fe;
            --purple-400: #c084fc;
            --purple-500: #a855f7;
            --purple-600: #9333ea;
            --purple-700: #7e22ce;
            --purple-800: #6b21a8;
            --purple-900: #581c87;
            
            --green-50: #f0fdf4;
            --green-100: #dcfce7;
            --green-200: #bbf7d0;
            --green-300: #86efac;
            --green-400: #4ade80;
            --green-500: #22c55e;
            --green-600: #16a34a;
            --green-700: #15803d;
            --green-800: #166534;
            --green-900: #14532d;
            
            --orange-50: #fff7ed;
            --orange-100: #ffedd5;
            --orange-200: #fed7aa;
            --orange-300: #fdba74;
            --orange-400: #fb923c;
            --orange-500: #f97316;
            --orange-600: #ea580c;
            --orange-700: #c2410c;
            --orange-800: #9a3412;
            --orange-900: #7c2d12;
            
            --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.05);
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.15);
            
            --radius-sm: 8px;
            --radius: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            --radius-2xl: 24px;
            
            --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition: 250ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: 350ms cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', sans-serif;
            background: linear-gradient(135deg, var(--gray-50) 0%, #ffffff 30%, var(--gray-50) 100%);
            color: var(--fg);
            min-height: 100vh;
            line-height: 1.6;
            font-feature-settings: 'ss01', 'ss02', 'cv01', 'cv02';
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Main Layout */
        .app-shell {
            display: flex;
            min-height: 100vh;
            background: linear-gradient(135deg, 
                rgba(249, 250, 251, 0.95) 0%, 
                rgba(255, 255, 255, 0.97) 50%, 
                rgba(249, 250, 251, 0.95) 100%);
        }

        /* Sidebar */
        .sidebar {
            width: 300px;
            background: linear-gradient(165deg, 
                rgba(255, 255, 255, 0.92) 0%, 
                rgba(249, 250, 251, 0.88) 100%);
            border-right: 1px solid rgba(229, 231, 235, 0.6);
            padding: 28px 24px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            box-shadow: var(--shadow-md);
            z-index: 10;
        }

        /* Brand Section */
        .brand {
            margin-bottom: 36px;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
            position: relative;
        }

        .brand::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, var(--red-500), var(--red-300));
            border-radius: 2px;
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
            transition: all var(--transition);
        }

        .brand-title {
            font-weight: 800;
            font-size: 20px;
            line-height: 1;
            color: var(--gray-900);
            letter-spacing: -0.5px;
        }

        .brand-sub {
            font-size: 13px;
            color: var(--gray-500);
            margin-top: 6px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        /* User Session */
        .user-session {
            margin-top: 28px;
            padding: 24px;
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.5);
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
            transition: all var(--transition);
        }

        .user-session::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500), var(--orange-500));
            border-radius: var(--radius-xl) var(--radius-xl) 0 0;
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
            flex-shrink: 0;
            box-shadow: 0 6px 16px rgba(220, 38, 38, 0.2);
            border: 3px solid white;
        }

        .user-details h3 {
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            color: #1f2937;
            line-height: 1.4;
        }

        .user-details p {
            margin: 6px 0 0;
            font-size: 14px;
            color: #4b5563;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .user-details p::before {
            content: '📚';
            font-size: 12px;
        }

        .session-info {
            font-size: 13px;
            color: #4b5563;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            font-weight: 500;
        }

        .session-info div {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
        }

        /* Navigation */
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
            position: relative;
            overflow: hidden;
            font-size: 15px;
        }

        .nav a:hover {
            background: linear-gradient(90deg, 
                rgba(254, 242, 242, 0.7) 0%, 
                rgba(254, 242, 242, 0.4) 100%);
            color: var(--red-600);
            transform: translateX(8px);
            box-shadow: var(--shadow-xs);
        }

        .nav a.active {
            background: linear-gradient(90deg, 
                rgba(254, 242, 242, 0.9) 0%, 
                rgba(254, 242, 242, 0.6) 100%);
            color: var(--red-600);
            font-weight: 600;
            border-left: 4px solid var(--red-500);
            box-shadow: var(--shadow-sm);
        }

        .nav a.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(180deg, var(--red-500), var(--orange-500));
            border-radius: 0 var(--radius) var(--radius) 0;
        }

        /* Main Content */
        .main {
            flex: 1;
            padding: 40px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 48px;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
            position: relative;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 120px;
            height: 2px;
            background: linear-gradient(90deg, var(--red-500), transparent);
            border-radius: 2px;
        }

        .h1 {
            font-size: 42px;
            font-weight: 800;
            margin: 0;
            color: #111827;
            letter-spacing: -0.5px;
            line-height: 1.2;
        }

        .muted {
            color: #6b7280;
            margin-top: 10px;
            font-size: 16px;
            font-weight: 500;
            max-width: 600px;
            line-height: 1.6;
        }

        .session-display {
            text-align: right;
            padding: 16px 24px;
            background: linear-gradient(135deg, 
                rgba(255, 255, 255, 0.9) 0%, 
                rgba(249, 250, 251, 0.8) 100%);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-sm);
        }

        .session-display div:first-child {
            font-size: 12px;
            color: var(--gray-500);
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
            text-transform: uppercase;
        }

        .session-display div:last-child {
            font-weight: 700;
            font-size: 15px;
            color: #1f2937;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
        }

        .session-display div:last-child::before {
            content: '';
            width: 8px;
            height: 8px;
            background: var(--green-500);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Card Design */
        .card {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border: 1px solid rgba(229, 231, 235, 0.6);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            margin-bottom: 28px;
            overflow: hidden;
        }

        .card-header {
            padding: 28px 28px 0;
        }

        .card-title {
            font-size: 20px;
            font-weight: 700;
            margin: 0;
            color: #111827;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        .card-title::before {
            content: '';
            width: 6px;
            height: 24px;
            background: linear-gradient(180deg, var(--red-500), var(--orange-500));
            border-radius: 3px;
            flex-shrink: 0;
        }

        .card-content {
            padding: 28px;
        }

        /* Form Design */
        .form-group {
            margin-bottom: 32px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--gray-800);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group label::before {
            content: '';
            width: 6px;
            height: 6px;
            background: var(--blue-500);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid var(--gray-300);
            border-radius: var(--radius-lg);
            background: #ffffff;
            color: var(--gray-900);
            font-size: 15px;
            font-weight: 500;
            transition: all var(--transition);
            font-family: inherit;
        }

        .form-control:hover {
            border-color: var(--gray-400);
        }

        .form-control:focus {
            border-color: var(--blue-500);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            outline: none;
        }

        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 20px;
            padding-right: 50px;
        }

        .form-text {
            display: block;
            margin-top: 8px;
            font-size: 13px;
            color: var(--gray-500);
            font-weight: 400;
        }

        /* Buttons */
        .btn {
            appearance: none;
            border: 2px solid transparent;
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-700) 100%);
            color: white;
            border-radius: var(--radius-lg);
            padding: 16px 28px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: all var(--transition);
            font-size: 15px;
            letter-spacing: 0.3px;
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.2);
            text-decoration: none;
            border: none;
        }

        .btn:hover {
            background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-800) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: var(--gray-700);
            border: 2px solid var(--gray-300);
            font-weight: 500;
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--gray-100);
            color: var(--gray-900);
            border-color: var(--gray-400);
        }

        .btn-green {
            background: linear-gradient(135deg, var(--green-500) 0%, var(--green-700) 100%);
            box-shadow: 0 4px 16px rgba(22, 163, 74, 0.2);
        }

        .btn-green:hover {
            background: linear-gradient(135deg, var(--green-600) 0%, var(--green-800) 100%);
            box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
        }

        /* Flash Messages */
        .flash-messages {
            margin-bottom: 28px;
        }

        .flash-message {
            padding: 18px 24px;
            border-radius: var(--radius-lg);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            box-shadow: var(--shadow-sm);
            animation: slideIn 0.3s ease;
        }

        .flash-success {
            background: linear-gradient(135deg, var(--green-50) 0%, var(--green-100) 100%);
            border: 1px solid var(--green-200);
            color: var(--green-800);
        }

        .flash-error {
            background: linear-gradient(135deg, var(--red-50) 0%, var(--red-100) 100%);
            border: 1px solid var(--red-200);
            color: var(--red-800);
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 16px;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--gray-200);
        }

        /* Objectif Info */
        .objectif-info {
            background: linear-gradient(135deg, var(--purple-50) 0%, var(--blue-50) 100%);
            border: 1px solid var(--purple-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            margin-bottom: 28px;
            animation: fadeIn 0.5s ease;
        }

        .objectif-info h3 {
            margin: 0 0 16px;
            color: var(--purple-800);
            font-size: 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .objectif-info h3::before {
            content: '🎯';
            font-size: 20px;
        }

        .objectif-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
        }

        .objectif-detail-item {
            background: rgba(255, 255, 255, 0.6);
            padding: 12px 16px;
            border-radius: var(--radius);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .objectif-detail-item strong {
            display: block;
            font-size: 12px;
            color: var(--gray-600);
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .objectif-detail-item span {
            font-size: 16px;
            font-weight: 600;
            color: var(--gray-800);
        }

        /* Tips Grid */
        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 24px;
        }

        .tip-card {
            text-align: center;
            padding: 24px 20px;
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-lg);
            border: 1px solid rgba(229, 231, 235, 0.6);
            transition: all var(--transition);
        }

        .tip-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .tip-icon {
            font-size: 32px;
            margin-bottom: 16px;
        }

        .tip-title {
            font-size: 16px;
            font-weight: 700;
            margin: 0 0 8px;
            color: var(--gray-800);
        }

        .tip-text {
            font-size: 14px;
            color: var(--gray-600);
            line-height: 1.5;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .app-shell {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 24px;
                border-right: none;
                border-bottom: 1px solid rgba(229, 231, 235, 0.6);
            }
            
            .main {
                padding: 32px;
            }
            
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .h1 {
                font-size: 36px;
            }
            
            .session-display {
                width: 100%;
                text-align: left;
            }
        }

        @media (max-width: 768px) {
            .main {
                padding: 24px;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .tips-grid {
                grid-template-columns: 1fr;
            }
            
            .objectif-details {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .main {
                padding: 20px;
            }
            
            .card-content {
                padding: 20px;
            }
            
            .form-control {
                padding: 14px 16px;
            }
            
            .btn {
                padding: 14px 20px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .card {
            animation: fadeIn 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <!-- Sidebar -->
        <aside class=\"sidebar\">
            <div class=\"brand\">
                <div class=\"brand-row\">
                    <div class=\"brand-icon\">ES</div>
                    <div>
                        <div class=\"brand-title\">ESPRIT</div>
                        <div class=\"brand-sub\">Student Assistant</div>
                    </div>
                </div>
            </div>

            <!-- User session -->
            <div class=\"user-session\">
                <div class=\"user-info\">
                    <div class=\"avatar\">
                        {{ app.user ? app.user.initials|default(app.user.nom|first ~ app.user.prenom|first) : 'JD' }}
                    </div>
                    <div class=\"user-details\">
                        <h3>{{ app.user ? app.user.nom ~ ' ' ~ app.user.prenom : 'John Doe' }}</h3>
                        <p>{{ app.user ? app.user.classe.nom|default('4SE-G1') : '4SE-G1' }}</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> {{ app.user ? app.user.email : 'student@esprit.tn' }}</div>
                    <div><strong>Role:</strong> {{ app.user ? app.user.roles|first|replace({'ROLE_': ''})|capitalize : 'Student' }}</div>
                    <div><strong>Member since:</strong> {{ app.user ? app.user.createdAt|date('M Y') : 'Jan 2024' }}</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class=\"nav\">
                <a href=\"{{ path('app_dashboard') }}\">
                    📊 Dashboard
                </a>
                <a href=\"#\">
                    📋 My Tasks
                </a>
                <a href=\"{{ path('app_profile') }}\">
                    👤 Profile
                </a>
                <a href=\"{{ path('front_objectif_sante_index') }}\" class=\"active\">
                    🎯 Objectifs Santé
                </a>
                <a href=\"#\">
                    ⚙️ Settings
                </a>
                <a href=\"{{ path('app_logout') }}\">
                    🚪 Logout
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class=\"main\">
            <header class=\"header\">
                <div>
                    <h1 class=\"h1\">Nouveau suivi de santé</h1>
                    <p class=\"muted\">Enregistrez vos indicateurs quotidiens pour suivre votre progression</p>
                </div>
                <div class=\"session-display\">
                    <div>Session actuelle</div>
                    <div>{{ app.user ? app.user.email : 'student@esprit.tn' }}</div>
                </div>
            </header>

            <!-- Breadcrumb -->
            <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 24px; font-size: 14px; color: var(--gray-600);\">
                <a href=\"{{ path('front_objectif_sante_index') }}\" style=\"color: var(--blue-600); text-decoration: none;\">
                    Mes Objectifs Santé
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <a href=\"{{ path('front_objectif_sante_show', {'id': objectif.id}) }}\" style=\"color: var(--blue-600); text-decoration: none;\">
                    {{ objectif.titre|slice(0, 30) }}{{ objectif.titre|length > 30 ? '...' : '' }}
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <a href=\"{{ path('front_objectif_suivis', {'id': objectif.id}) }}\" style=\"color: var(--blue-600); text-decoration: none;\">
                    Suivis
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <span>Nouveau suivi</span>
            </div>

            <!-- Objectif Info -->
            <div class=\"objectif-info\">
                <h3>Objectif concerné</h3>
                <div class=\"objectif-details\">
                    <div class=\"objectif-detail-item\">
                        <strong>Titre</strong>
                        <span>{{ objectif.titre }}</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Type</strong>
                        <span>{{ objectif.type }}</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Priorité</strong>
                        <span>{{ objectif.priorite }}</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Score Moyen</strong>
                        <span>{{ objectif.scoreMoyen }}/100</span>
                    </div>
                </div>
            </div>

            <!-- Flash Messages -->
            <div class=\"flash-messages\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"flash-message flash-{{ label }}\">
                            {% if label == 'success' %}✓
                            {% elseif label == 'error' %}✗
                            {% endif %}
                            {{ message }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>

            <!-- Form Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">Indicateurs de santé</h2>
                </div>
                
                <div class=\"card-content\">
                {# Alerte globale si le formulaire est soumis et invalide #}
{% if form.vars.submitted and not form.vars.valid %}
  <div class=\"flash-message flash-error\">
    ✗ Veuillez corriger les erreurs dans le formulaire.
  </div>
{% endif %}

{# Erreurs globales Symfony (important pour Callback / contraintes globales) #}
{{ form_errors(form) }}
                    {{ form_start(form, {'attr': {'class': 'suivi-form', 'novalidate': 'novalidate'}}) }}
                    
                        <!-- Date Field -->
                        <div class=\"form-group\">
                            {{ form_label(form.dateSaisie) }}
                            {{ form_widget(form.dateSaisie, {'attr': {
                                'class': 'form-control',
                                'value': 'now'|date('Y-m-d')
                            }}) }}
                            <small class=\"form-text\">Date de l'évaluation (par défaut: aujourd'hui)</small>
                            {{ form_errors(form.dateSaisie) }}
                        </div>

                        <!-- Metrics Grid -->
                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; margin-bottom: 32px;\">
                            <!-- Humeur (SELECT) -->
                            <div class=\"form-group\">
                                {{ form_label(form.humeur) }}
                                {{ form_widget(form.humeur, {'attr': {
                                    'class': 'form-control'
                                }}) }}
                                <small class=\"form-text\">Sélectionnez votre humeur du jour</small>
                                {{ form_errors(form.humeur) }}
                            </div>

                            <!-- Qualité de sommeil -->
                            <div class=\"form-group\">
                                {{ form_label(form.qualiteSommeil) }}
                                {{ form_widget(form.qualiteSommeil, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': '0-10',
                                    'min': '0',
                                    'max': '10'
                                }}) }}
                                <small class=\"form-text\">Qualité de votre sommeil (0 = très mauvaise, 10 = excellente)</small>
                                {{ form_errors(form.qualiteSommeil) }}
                            </div>

                            <!-- Niveau d'énergie -->
                            <div class=\"form-group\">
                                {{ form_label(form.niveauEnergie) }}
                                {{ form_widget(form.niveauEnergie, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': '0-10',
                                    'min': '0',
                                    'max': '10'
                                }}) }}
                                <small class=\"form-text\">Votre niveau d'énergie (0 = très faible, 10 = très élevé)</small>
                                {{ form_errors(form.niveauEnergie) }}
                            </div>

                            <!-- Niveau de stress -->
                            <div class=\"form-group\">
                                {{ form_label(form.niveauStress) }}
                                {{ form_widget(form.niveauStress, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': '0-10',
                                    'min': '0',
                                    'max': '10'
                                }}) }}
                                <small class=\"form-text\">Votre niveau de stress (0 = très calme, 10 = très stressé)</small>
                                {{ form_errors(form.niveauStress) }}
                            </div>

                            <!-- Qualité d'alimentation -->
                            <div class=\"form-group\">
                                {{ form_label(form.qualiteAlimentation) }}
                                {{ form_widget(form.qualiteAlimentation, {'attr': {
                                    'class': 'form-control',
                                    'placeholder': '0-10',
                                    'min': '0',
                                    'max': '10'
                                }}) }}
                                <small class=\"form-text\">Qualité de votre alimentation (0 = très mauvaise, 10 = excellente)</small>
                                {{ form_errors(form.qualiteAlimentation) }}
                            </div>
                        </div>

                        <!-- Notes Field -->
                        <div class=\"form-group\">
                            {{ form_label(form.notesLibres) }}
                            {{ form_widget(form.notesLibres, {'attr': {
                                'class': 'form-control',
                                'rows': '4',
                                'placeholder': 'Notes supplémentaires, observations, difficultés rencontrées...'
                            }}) }}
                            <small class=\"form-text\">Ajoutez des notes pour mieux comprendre votre état du jour</small>
                            {{ form_errors(form.notesLibres) }}
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-green\">
                                💾 Enregistrer le suivi
                            </button>
                            <a href=\"{{ path('front_objectif_suivis', {'id': objectif.id}) }}\" class=\"btn btn-outline\">
                                ← Annuler
                            </a>
                        </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>

            <!-- Tips Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">💡 Conseils pour une évaluation précise</h2>
                </div>
                <div class=\"card-content\">
                    <div class=\"tips-grid\">
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">🎯</div>
                            <h3 class=\"tip-title\">Soyez honnête</h3>
                            <p class=\"tip-text\">Évaluez votre état réellement, pas comme vous souhaiteriez qu'il soit.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">⏰</div>
                            <h3 class=\"tip-title\">Moment optimal</h3>
                            <p class=\"tip-text\">Notez vos indicateurs en fin de journée pour une vision complète.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">📝</div>
                            <h3 class=\"tip-title\">Ajoutez des notes</h3>
                            <p class=\"tip-text\">Les notes contextuelles aident à comprendre les variations.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">📈</div>
                            <h3 class=\"tip-title\">Régularité</h3>
                            <p class=\"tip-text\">Un suivi quotidien permet d'identifier les tendances.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

   <script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('.suivi-form');
  if (!form) return;

  form.addEventListener('submit', function() {
    // Juste un feedback visuel, sans empêcher Symfony
    const requiredFields = form.querySelectorAll('[required]');
    requiredFields.forEach(field => {
      if (!field.value.trim()) {
        field.style.borderColor = 'var(--red-500)';
        field.style.backgroundColor = 'var(--red-50)';
      }
    });

    // Loading state
    const submitBtn = form.querySelector('button[type=\"submit\"]');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = '⏳ Enregistrement...';
    }
  });
});
</script>

</body>
</html>", "Front/suivi_bien_etre/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\suivi_bien_etre\\new.html.twig");
    }
}
