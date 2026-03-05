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

/* Front/suivi_bien_etre/index.html.twig */
class __TwigTemplate_622cabbbc3c585fe8236febd641bf1e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/suivi_bien_etre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/suivi_bien_etre/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Suivis: ";
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

        /* Main Layout with Glassmorphism */
        .app-shell {
            display: flex;
            min-height: 100vh;
            background: linear-gradient(135deg, 
                rgba(249, 250, 251, 0.95) 0%, 
                rgba(255, 255, 255, 0.97) 50%, 
                rgba(249, 250, 251, 0.95) 100%);
            backdrop-filter: blur(20px);
        }

        /* Premium Sidebar with Glass Effect */
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
            backdrop-filter: blur(10px);
            z-index: 10;
        }

        /* Premium Brand Section */
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

        .brand-icon:hover {
            transform: rotate(-5deg) scale(1.05);
            box-shadow: 0 8px 24px rgba(220, 38, 38, 0.35);
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

        /* Premium User Session Card */
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

        .user-session:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            border-color: rgba(229, 231, 235, 0.8);
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
            transition: all var(--transition);
        }

        .avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(220, 38, 38, 0.3);
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
            transition: all var(--transition-fast);
        }

        .session-info div:hover {
            background: rgba(249, 250, 251, 0.5);
            border-radius: var(--radius-sm);
            padding: 6px 8px;
        }

        .session-info strong {
            color: #1f2937;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Premium Navigation */
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

        .nav a .icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            stroke-width: 2;
            transition: all var(--transition);
        }

        .nav a:hover .icon {
            transform: scale(1.1);
        }

        /* Premium Main Content */
        .main {
            flex: 1;
            padding: 40px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        /* Premium Header */
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
            transition: all var(--transition);
        }

        .session-display:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
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

        /* Premium Cards */
        .card {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border: 1px solid rgba(229, 231, 235, 0.6);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            margin-bottom: 28px;
            overflow: hidden;
            transition: all var(--transition);
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500), var(--orange-500));
            opacity: 0;
            transition: opacity var(--transition);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-xl);
            border-color: rgba(229, 231, 235, 0.8);
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

        /* Premium Buttons */
        .btn {
            appearance: none;
            border: 2px solid transparent;
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
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
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(239, 68, 68, 0.2);
            text-decoration: none;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.2), 
                transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            background: linear-gradient(135deg, var(--red-600) 0%, var(--orange-600) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn-green {
            background: linear-gradient(135deg, var(--green-500) 0%, var(--green-700) 100%);
            box-shadow: 0 4px 16px rgba(22, 163, 74, 0.2);
        }

        .btn-green:hover {
            background: linear-gradient(135deg, var(--green-600) 0%, var(--green-800) 100%);
            box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
        }

        .btn-blue {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-700) 100%);
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.2);
        }

        .btn-blue:hover {
            background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-800) 100%);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
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

        .flash-warning {
            background: linear-gradient(135deg, var(--orange-50) 0%, var(--orange-100) 100%);
            border: 1px solid var(--orange-200);
            color: var(--orange-800);
        }

        .flash-info {
            background: linear-gradient(135deg, var(--blue-50) 0%, var(--blue-100) 100%);
            border: 1px solid var(--blue-200);
            color: var(--blue-800);
        }

        /* Table Design */
        .table-container {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            margin-bottom: 28px;
        }

        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 14px;
        }

        .table thead {
            background: linear-gradient(90deg, var(--blue-50) 0%, var(--purple-50) 100%);
        }

        .table th {
            padding: 20px 24px;
            text-align: left;
            font-weight: 600;
            color: var(--gray-800);
            border-bottom: 2px solid rgba(229, 231, 235, 0.8);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            transition: all var(--transition-fast);
        }

        .table tbody tr:hover {
            background: linear-gradient(90deg, rgba(239, 246, 255, 0.3) 0%, rgba(233, 213, 255, 0.1) 100%);
            transform: translateY(-1px);
        }

        .table td {
            padding: 20px 24px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
            color: var(--gray-700);
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Score Indicators */
        .score-indicator {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-weight: 700;
            font-size: 14px;
            box-shadow: var(--shadow-xs);
        }

        .score-excellent {
            background: linear-gradient(135deg, var(--green-500) 0%, var(--green-600) 100%);
            color: white;
        }

        .score-good {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-600) 100%);
            color: white;
        }

        .score-average {
            background: linear-gradient(135deg, var(--orange-500) 0%, var(--orange-600) 100%);
            color: white;
        }

        .score-poor {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--red-600) 100%);
            color: white;
        }

        /* Mood Indicators */
        .mood-indicator {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 18px;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 40px;
            color: var(--gray-500);
        }

        .empty-state-icon {
            font-size: 48px;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .empty-state h3 {
            font-size: 20px;
            margin-bottom: 12px;
            color: var(--gray-700);
        }

        .empty-state p {
            font-size: 15px;
            margin-bottom: 24px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
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

        /* Chart Container */
        .chart-container {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-md);
            padding: 28px;
            margin-bottom: 28px;
        }

        /* Responsive Design */
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
            
            .table-container {
                overflow-x: auto;
            }
            
            .table {
                min-width: 800px;
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

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(249, 250, 251, 0.8);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--red-300), var(--orange-300));
            border-radius: 10px;
            border: 2px solid rgba(249, 250, 251, 0.8);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, var(--red-400), var(--orange-400));
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <!-- Sidebar with session info -->
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

            <!-- User session information -->
            <div class=\"user-session\">
                <div class=\"user-info\">
                    <div class=\"avatar\">
                        ";
        // line 976
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 976, $this->source); })()), "user", [], "any", false, false, false, 976)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 976), "initials", [], "any", true, true, false, 976)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 976, $this->source); })()), "user", [], "any", false, false, false, 976), "initials", [], "any", false, false, false, 976), (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 976, $this->source); })()), "user", [], "any", false, false, false, 976), "nom", [], "any", false, false, false, 976)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 976, $this->source); })()), "user", [], "any", false, false, false, 976), "prenom", [], "any", false, false, false, 976))))) : ((Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 976, $this->source); })()), "user", [], "any", false, false, false, 976), "nom", [], "any", false, false, false, 976)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 976, $this->source); })()), "user", [], "any", false, false, false, 976), "prenom", [], "any", false, false, false, 976))))), "html", null, true)) : ("JD"));
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 979
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 979, $this->source); })()), "user", [], "any", false, false, false, 979)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 979, $this->source); })()), "user", [], "any", false, false, false, 979), "nom", [], "any", false, false, false, 979) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 979, $this->source); })()), "user", [], "any", false, false, false, 979), "prenom", [], "any", false, false, false, 979)), "html", null, true)) : ("John Doe"));
        yield "</h3>
                        <p>";
        // line 980
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 980, $this->source); })()), "user", [], "any", false, false, false, 980)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 980), "classe", [], "any", false, true, false, 980), "nom", [], "any", true, true, false, 980)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 980, $this->source); })()), "user", [], "any", false, false, false, 980), "classe", [], "any", false, false, false, 980), "nom", [], "any", false, false, false, 980), "4SE-G1")) : ("4SE-G1")), "html", null, true)) : ("4SE-G1"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 984
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 984, $this->source); })()), "user", [], "any", false, false, false, 984)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 984, $this->source); })()), "user", [], "any", false, false, false, 984), "email", [], "any", false, false, false, 984), "html", null, true)) : ("student@esprit.tn"));
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 985
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 985, $this->source); })()), "user", [], "any", false, false, false, 985)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 985, $this->source); })()), "user", [], "any", false, false, false, 985), "roles", [], "any", false, false, false, 985)), ["ROLE_" => ""])), "html", null, true)) : ("Student"));
        yield "</div>
                    <div><strong>Member since:</strong> ";
        // line 986
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 986, $this->source); })()), "user", [], "any", false, false, false, 986)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 986, $this->source); })()), "user", [], "any", false, false, false, 986), "createdAt", [], "any", false, false, false, 986), "M Y"), "html", null, true)) : ("Jan 2024"));
        yield "</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class=\"nav\">
                <a href=\"";
        // line 992
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    My Tasks
                </a>
                <a href=\"";
        // line 1004
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"";
        // line 1011
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/>
                    </svg>
                    Objectifs Santé
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"3\"/><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 a2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"/>
                    </svg>
                    Settings
                </a>
                <a href=\"";
        // line 1023
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class=\"main\">
            <header class=\"header\">
                <div>
                    <h1 class=\"h1\">Journal de suivi</h1>
                    <p class=\"muted\">Suivez votre progression et vos indicateurs de santé au quotidien</p>
                </div>
                <div class=\"session-display\">
                    <div>Session actuelle</div>
                    <div>";
        // line 1041
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1041, $this->source); })()), "user", [], "any", false, false, false, 1041)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1041, $this->source); })()), "user", [], "any", false, false, false, 1041), "email", [], "any", false, false, false, 1041), "html", null, true)) : ("student@esprit.tn"));
        yield "</div>
                </div>
            </header>

            <!-- Breadcrumb -->
            <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 24px; font-size: 14px; color: var(--gray-600);\">
                <a href=\"";
        // line 1047
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\" style=\"color: var(--blue-600); text-decoration: none; transition: all var(--transition);\">
                    Mes Objectifs Santé
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <a href=\"";
        // line 1051
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1051, $this->source); })()), "id", [], "any", false, false, false, 1051)]), "html", null, true);
        yield "\" style=\"color: var(--blue-600); text-decoration: none; transition: all var(--transition);\">
                    ";
        // line 1052
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1052, $this->source); })()), "titre", [], "any", false, false, false, 1052), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1052, $this->source); })()), "titre", [], "any", false, false, false, 1052)) > 30)) ? ("...") : (""));
        yield "
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <span>Suivis</span>
            </div>

            <!-- Objectif Info Card -->
            <div class=\"objectif-info\">
                <h3>";
        // line 1060
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1060, $this->source); })()), "titre", [], "any", false, false, false, 1060), "html", null, true);
        yield "</h3>
                <div class=\"objectif-details\">
                    <div class=\"objectif-detail-item\">
                        <strong>Type</strong>
                        <span>";
        // line 1064
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1064, $this->source); })()), "type", [], "any", false, false, false, 1064), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Priorité</strong>
                        <span>";
        // line 1068
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1068, $this->source); })()), "priorite", [], "any", false, false, false, 1068), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Score Moyen</strong>
                        <span>";
        // line 1072
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1072, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 1072), "html", null, true);
        yield "/100</span>
                    </div>
                    <div class=\"objectif-detail-item\">
                        <strong>Statut</strong>
                        <span>";
        // line 1076
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1076, $this->source); })()), "statut", [], "any", false, false, false, 1076), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>

            <!-- Flash Messages -->
            <div class=\"flash-messages\">
                ";
        // line 1083
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1083, $this->source); })()), "flashes", [], "any", false, false, false, 1083));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 1084
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 1085
                yield "                        <div class=\"flash-message flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                            ";
                // line 1086
                if (($context["label"] == "success")) {
                    yield "✓
                            ";
                } elseif ((                // line 1087
$context["label"] == "error")) {
                    yield "✗
                            ";
                } elseif ((                // line 1088
$context["label"] == "warning")) {
                    yield "⚠
                            ";
                } elseif ((                // line 1089
$context["label"] == "info")) {
                    yield "ℹ
                            ";
                }
                // line 1091
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1094
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1095
        yield "            </div>

            <!-- Actions Bar -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                        <div>
                            <h2 style=\"margin: 0; font-size: 18px; color: var(--gray-800);\">
                                📝 Journal de suivi quotidien
                            </h2>
                            <p style=\"margin: 8px 0 0; color: var(--gray-500); font-size: 14px;\">
                                ";
        // line 1106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1106, $this->source); })())), "html", null, true);
        yield " entrée(s) de suivi
                            </p>
                        </div>
                        <div style=\"display: flex; gap: 12px;\">
                            <a href=\"";
        // line 1110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1110, $this->source); })()), "id", [], "any", false, false, false, 1110)]), "html", null, true);
        yield "\" class=\"btn\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M19 12H6M12 5l-7 7 7 7\"/>
                                </svg>
                                Retour à l'objectif
                            </a>
                            <a href=\"";
        // line 1116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_suivi_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1116, $this->source); })()), "id", [], "any", false, false, false, 1116)]), "html", null, true);
        yield "\" class=\"btn btn-green\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 5v14\"/><path d=\"M5 12h14\"/>
                                </svg>
                                Nouvelle entrée
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 1127
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1127, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1128
            yield "                <!-- Stats Summary -->
                <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 28px;\">
                    <div style=\"background: linear-gradient(135deg, var(--blue-50) 0%, var(--blue-100) 100%); border-radius: var(--radius-lg); padding: 24px; text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 800; color: var(--blue-700);\">
                            ";
            // line 1132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1132, $this->source); })())), "html", null, true);
            yield "
                        </div>
                        <div style=\"font-size: 14px; color: var(--blue-600); font-weight: 600;\">
                            Entrées de suivi
                        </div>
                    </div>
                    
                    ";
            // line 1139
            $context["avg_score"] = (Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1139, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 1139, $this->source); })()), "score", [], "any", false, false, false, 1139); }), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return  !(null === (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 1139, $this->source); })())); }), function ($__sum__, $__score__) use ($context, $macros) { $context["sum"] = $__sum__; $context["score"] = $__score__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 1139, $this->source); })()) + (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 1139, $this->source); })())); }, 0) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1139, $this->source); })())));
            // line 1140
            yield "                    <div style=\"background: linear-gradient(135deg, var(--green-50) 0%, var(--green-100) 100%); border-radius: var(--radius-lg); padding: 24px; text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 800; color: var(--green-700);\">
                            ";
            // line 1142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["avg_score"]) || array_key_exists("avg_score", $context) ? $context["avg_score"] : (function () { throw new RuntimeError('Variable "avg_score" does not exist.', 1142, $this->source); })()), 1), "html", null, true);
            yield "
                        </div>
                        <div style=\"font-size: 14px; color: var(--green-600); font-weight: 600;\">
                            Score moyen
                        </div>
                    </div>
                    
                    ";
            // line 1149
            $context["last_entry"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::sort($this->env, (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1149, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 1149, $this->source); })()), "dateSaisie", [], "any", false, false, false, 1149) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 1149, $this->source); })()), "dateSaisie", [], "any", false, false, false, 1149)); }));
            // line 1150
            yield "                    <div style=\"background: linear-gradient(135deg, var(--purple-50) 0%, var(--purple-100) 100%); border-radius: var(--radius-lg); padding: 24px; text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 800; color: var(--purple-700);\">
                            ";
            // line 1152
            yield (((($tmp = (isset($context["last_entry"]) || array_key_exists("last_entry", $context) ? $context["last_entry"] : (function () { throw new RuntimeError('Variable "last_entry" does not exist.', 1152, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["last_entry"]) || array_key_exists("last_entry", $context) ? $context["last_entry"] : (function () { throw new RuntimeError('Variable "last_entry" does not exist.', 1152, $this->source); })()), "dateSaisie", [], "any", false, false, false, 1152), "d/m"), "html", null, true)) : ("-"));
            yield "
                        </div>
                        <div style=\"font-size: 14px; color: var(--purple-600); font-weight: 600;\">
                            Dernière entrée
                        </div>
                    </div>
                </div>
<div style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;\">
  <input id=\"qInput\" type=\"text\" placeholder=\"Rechercher notes...\"
         style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;min-width:220px;\">

  <select id=\"humeurFilter\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
    <option value=\"\">Toutes humeurs</option>
    <option value=\"Excellente\">Excellente</option>
    <option value=\"Bonne\">Bonne</option>
    <option value=\"Neutre\">Neutre</option>
    <option value=\"Mauvaise\">Mauvaise</option>
    <option value=\"Très mauvaise\">Très mauvaise</option>
  </select>

  <select id=\"sortBy\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
  <option value=\"dateSaisie\">Trier: Date</option>
  <option value=\"score\">Score</option>
</select>

<select id=\"sortDir\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
  <option value=\"DESC\">DESC</option>
  <option value=\"ASC\">ASC</option>
</select>
</div>
                <!-- Suivis Table -->
                <div class=\"table-container\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Humeur</th>
                                <th>Sommeil</th>
                                <th>Énergie</th>
                                <th>Stress</th>
                                <th>Alimentation</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody id=\"suiviTbody\"
           data-url=\"";
            // line 1197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_suivi_filter", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1197, $this->source); })()), "id", [], "any", false, false, false, 1197)]), "html", null, true);
            yield "\">
        ";
            // line 1198
            yield Twig\Extension\CoreExtension::include($this->env, $context, "front/suivi_bien_etre/_rows.html.twig", ["suivis" => (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1198, $this->source); })())]);
            yield "
    </tbody>
                    </table>
                </div>

                <!-- Tips Card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2 class=\"card-title\">💡 Conseils pour un suivi efficace</h2>
                    </div>
                    <div class=\"card-content\">
                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;\">
                            <div style=\"text-align: center; padding: 24px 20px; background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%); border-radius: var(--radius-lg); border: 1px solid rgba(229, 231, 235, 0.6); transition: all var(--transition);\">
                                <div style=\"font-size: 32px; margin-bottom: 16px;\">📅</div>
                                <h3 style=\"font-size: 16px; font-weight: 700; margin: 0 0 8px; color: var(--gray-800);\">Régularité</h3>
                                <p style=\"font-size: 14px; color: var(--gray-600); line-height: 1.5; margin: 0;\">Notez vos indicateurs quotidiennement pour un suivi précis.</p>
                            </div>
                            
                            <div style=\"text-align: center; padding: 24px 20px; background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%); border-radius: var(--radius-lg); border: 1px solid rgba(229, 231, 235, 0.6); transition: all var(--transition);\">
                                <div style=\"font-size: 32px; margin-bottom: 16px;\">📈</div>
                                <h3 style=\"font-size: 16px; font-weight: 700; margin: 0 0 8px; color: var(--gray-800);\">Analyse</h3>
                                <p style=\"font-size: 14px; color: var(--gray-600); line-height: 1.5; margin: 0;\">Identifiez les tendances pour adapter vos habitudes.</p>
                            </div>
                            
                            <div style=\"text-align: center; padding: 24px 20px; background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%); border-radius: var(--radius-lg); border: 1px solid rgba(229, 231, 235, 0.6); transition: all var(--transition);\">
                                <div style=\"font-size: 32px; margin-bottom: 16px;\">🎯</div>
                                <h3 style=\"font-size: 16px; font-weight: 700; margin: 0 0 8px; color: var(--gray-800);\">Objectivité</h3>
                                <p style=\"font-size: 14px; color: var(--gray-600); line-height: 1.5; margin: 0;\">Soyez honnête dans votre évaluation pour des résultats fiables.</p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 1231
            yield "                <!-- Empty State -->
                <div class=\"card\">
                    <div class=\"card-content\">
                        <div class=\"empty-state\">
                            <div class=\"empty-state-icon\">📊</div>
                            <h3>Aucun suivi enregistré</h3>
                            <p>Commencez à suivre votre progression en créant votre première entrée de journal.</p>
                            <a href=\"";
            // line 1238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_suivi_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1238, $this->source); })()), "id", [], "any", false, false, false, 1238)]), "html", null, true);
            yield "\" class=\"btn btn-green\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 5v14\"/><path d=\"M5 12h14\"/>
                                </svg>
                                Créer votre premier suivi
                            </a>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 1248
        yield "        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Suivis page loaded');
            
            // Animation des cartes
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-8px)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                });
            });

            // Ripple effect pour les boutons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(255, 255, 255, 0.3);
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        width: \${size}px;
                        height: \${size}px;
                        top: \${y}px;
                        left: \${x}px;
                        pointer-events: none;
                    `;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Auto-hide flash messages
            const flashMessages = document.querySelectorAll('.flash-message');
            flashMessages.forEach(message => {
                setTimeout(() => {
                    message.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    message.style.opacity = '0';
                    message.style.transform = 'translateX(-20px)';
                    setTimeout(() => {
                        if (message.parentNode) {
                            message.parentNode.removeChild(message);
                        }
                    }, 300);
                }, 5000);
            });

            // Table row hover effects
            const tableRows = document.querySelectorAll('.table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.transform = 'translateY(-2px)';
                });
                
                row.addEventListener('mouseleave', () => {
                    row.style.transform = 'translateY(0)';
                });
            });

            // Add ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
                
                @keyframes slideIn {
                    from { transform: translateX(-20px); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(20px); }
                    to { opacity: 1; transform: translateY(0); }
                }
            `;
            document.head.appendChild(style);
        });

        // Function to show success message
        function showSuccessMsg(message) {
            const successMsg = document.createElement('div');
            successMsg.className = 'flash-message flash-success';
            successMsg.innerHTML = '✓ ' + message;
            document.querySelector('.flash-messages').prepend(successMsg);
            
            setTimeout(() => {
                successMsg.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                successMsg.style.opacity = '0';
                successMsg.style.transform = 'translateX(-20px)';
                setTimeout(() => successMsg.remove(), 300);
            }, 5000);
        }

        // Function to show error message
        function showErrorMsg(message) {
            const errorMsg = document.createElement('div');
            errorMsg.className = 'flash-message flash-error';
            errorMsg.innerHTML = '✗ ' + message;
            document.querySelector('.flash-messages').prepend(errorMsg);
            
            setTimeout(() => {
                errorMsg.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                errorMsg.style.opacity = '0';
                errorMsg.style.transform = 'translateX(-20px)';
                setTimeout(() => errorMsg.remove(), 300);
            }, 5000);
        }
    </script>
    <script>
document.addEventListener('DOMContentLoaded', () => {
  const tbody = document.getElementById('suiviTbody');
  if (!tbody) return;

  const baseUrl = tbody.dataset.url;

  const qEl = document.getElementById('qInput');
  const humeurEl = document.getElementById('humeurFilter');
  const sortByEl = document.getElementById('sortBy');
  const sortDirEl = document.getElementById('sortDir');

  let timer = null;

  function buildUrl() {
    const params = new URLSearchParams();
    if (qEl && qEl.value.trim()) params.set('q', qEl.value.trim());
    if (humeurEl && humeurEl.value) params.set('humeur', humeurEl.value);

    params.set('sortBy', sortByEl?.value || 'dateSaisie');
    params.set('sortDir', sortDirEl?.value || 'DESC');

    return `\${baseUrl}?\${params.toString()}`;
  }

  async function loadRows() {
    try {
      tbody.style.opacity = '0.6';
      const res = await fetch(buildUrl(), { headers: { 'X-Requested-With': 'XMLHttpRequest' } });
      tbody.innerHTML = await res.text();
      tbody.style.opacity = '1';
    } catch (e) {
      tbody.style.opacity = '1';
      console.error(e);
    }
  }

  function debouncedLoad() {
    clearTimeout(timer);
    timer = setTimeout(loadRows, 250);
  }

  qEl?.addEventListener('input', debouncedLoad);
  humeurEl?.addEventListener('change', loadRows);
  sortByEl?.addEventListener('change', loadRows);
  sortDirEl?.addEventListener('change', loadRows);
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
        return "Front/suivi_bien_etre/index.html.twig";
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
        return array (  1433 => 1248,  1420 => 1238,  1411 => 1231,  1375 => 1198,  1371 => 1197,  1323 => 1152,  1319 => 1150,  1317 => 1149,  1307 => 1142,  1303 => 1140,  1301 => 1139,  1291 => 1132,  1285 => 1128,  1283 => 1127,  1269 => 1116,  1260 => 1110,  1253 => 1106,  1240 => 1095,  1234 => 1094,  1224 => 1091,  1219 => 1089,  1215 => 1088,  1211 => 1087,  1207 => 1086,  1202 => 1085,  1197 => 1084,  1193 => 1083,  1183 => 1076,  1176 => 1072,  1169 => 1068,  1162 => 1064,  1155 => 1060,  1143 => 1052,  1139 => 1051,  1132 => 1047,  1123 => 1041,  1102 => 1023,  1087 => 1011,  1077 => 1004,  1062 => 992,  1053 => 986,  1049 => 985,  1045 => 984,  1038 => 980,  1034 => 979,  1028 => 976,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Suivis: {{ objectif.titre }}</title>
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

        /* Main Layout with Glassmorphism */
        .app-shell {
            display: flex;
            min-height: 100vh;
            background: linear-gradient(135deg, 
                rgba(249, 250, 251, 0.95) 0%, 
                rgba(255, 255, 255, 0.97) 50%, 
                rgba(249, 250, 251, 0.95) 100%);
            backdrop-filter: blur(20px);
        }

        /* Premium Sidebar with Glass Effect */
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
            backdrop-filter: blur(10px);
            z-index: 10;
        }

        /* Premium Brand Section */
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

        .brand-icon:hover {
            transform: rotate(-5deg) scale(1.05);
            box-shadow: 0 8px 24px rgba(220, 38, 38, 0.35);
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

        /* Premium User Session Card */
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

        .user-session:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            border-color: rgba(229, 231, 235, 0.8);
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
            transition: all var(--transition);
        }

        .avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(220, 38, 38, 0.3);
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
            transition: all var(--transition-fast);
        }

        .session-info div:hover {
            background: rgba(249, 250, 251, 0.5);
            border-radius: var(--radius-sm);
            padding: 6px 8px;
        }

        .session-info strong {
            color: #1f2937;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Premium Navigation */
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

        .nav a .icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            stroke-width: 2;
            transition: all var(--transition);
        }

        .nav a:hover .icon {
            transform: scale(1.1);
        }

        /* Premium Main Content */
        .main {
            flex: 1;
            padding: 40px;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        /* Premium Header */
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
            transition: all var(--transition);
        }

        .session-display:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
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

        /* Premium Cards */
        .card {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border: 1px solid rgba(229, 231, 235, 0.6);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            margin-bottom: 28px;
            overflow: hidden;
            transition: all var(--transition);
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--red-500), var(--orange-500));
            opacity: 0;
            transition: opacity var(--transition);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-xl);
            border-color: rgba(229, 231, 235, 0.8);
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

        /* Premium Buttons */
        .btn {
            appearance: none;
            border: 2px solid transparent;
            background: linear-gradient(135deg, var(--red-500) 0%, var(--orange-500) 100%);
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
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(239, 68, 68, 0.2);
            text-decoration: none;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.2), 
                transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            background: linear-gradient(135deg, var(--red-600) 0%, var(--orange-600) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn-green {
            background: linear-gradient(135deg, var(--green-500) 0%, var(--green-700) 100%);
            box-shadow: 0 4px 16px rgba(22, 163, 74, 0.2);
        }

        .btn-green:hover {
            background: linear-gradient(135deg, var(--green-600) 0%, var(--green-800) 100%);
            box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
        }

        .btn-blue {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-700) 100%);
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.2);
        }

        .btn-blue:hover {
            background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-800) 100%);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
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

        .flash-warning {
            background: linear-gradient(135deg, var(--orange-50) 0%, var(--orange-100) 100%);
            border: 1px solid var(--orange-200);
            color: var(--orange-800);
        }

        .flash-info {
            background: linear-gradient(135deg, var(--blue-50) 0%, var(--blue-100) 100%);
            border: 1px solid var(--blue-200);
            color: var(--blue-800);
        }

        /* Table Design */
        .table-container {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            margin-bottom: 28px;
        }

        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 14px;
        }

        .table thead {
            background: linear-gradient(90deg, var(--blue-50) 0%, var(--purple-50) 100%);
        }

        .table th {
            padding: 20px 24px;
            text-align: left;
            font-weight: 600;
            color: var(--gray-800);
            border-bottom: 2px solid rgba(229, 231, 235, 0.8);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            transition: all var(--transition-fast);
        }

        .table tbody tr:hover {
            background: linear-gradient(90deg, rgba(239, 246, 255, 0.3) 0%, rgba(233, 213, 255, 0.1) 100%);
            transform: translateY(-1px);
        }

        .table td {
            padding: 20px 24px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
            color: var(--gray-700);
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Score Indicators */
        .score-indicator {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-weight: 700;
            font-size: 14px;
            box-shadow: var(--shadow-xs);
        }

        .score-excellent {
            background: linear-gradient(135deg, var(--green-500) 0%, var(--green-600) 100%);
            color: white;
        }

        .score-good {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-600) 100%);
            color: white;
        }

        .score-average {
            background: linear-gradient(135deg, var(--orange-500) 0%, var(--orange-600) 100%);
            color: white;
        }

        .score-poor {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--red-600) 100%);
            color: white;
        }

        /* Mood Indicators */
        .mood-indicator {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 18px;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 40px;
            color: var(--gray-500);
        }

        .empty-state-icon {
            font-size: 48px;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .empty-state h3 {
            font-size: 20px;
            margin-bottom: 12px;
            color: var(--gray-700);
        }

        .empty-state p {
            font-size: 15px;
            margin-bottom: 24px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
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

        /* Chart Container */
        .chart-container {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-md);
            padding: 28px;
            margin-bottom: 28px;
        }

        /* Responsive Design */
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
            
            .table-container {
                overflow-x: auto;
            }
            
            .table {
                min-width: 800px;
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

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(249, 250, 251, 0.8);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--red-300), var(--orange-300));
            border-radius: 10px;
            border: 2px solid rgba(249, 250, 251, 0.8);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, var(--red-400), var(--orange-400));
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <!-- Sidebar with session info -->
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

            <!-- User session information -->
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
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    My Tasks
                </a>
                <a href=\"{{ path('app_profile') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"{{ path('front_objectif_sante_index') }}\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/>
                    </svg>
                    Objectifs Santé
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"3\"/><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 a2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"/>
                    </svg>
                    Settings
                </a>
                <a href=\"{{ path('app_logout') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class=\"main\">
            <header class=\"header\">
                <div>
                    <h1 class=\"h1\">Journal de suivi</h1>
                    <p class=\"muted\">Suivez votre progression et vos indicateurs de santé au quotidien</p>
                </div>
                <div class=\"session-display\">
                    <div>Session actuelle</div>
                    <div>{{ app.user ? app.user.email : 'student@esprit.tn' }}</div>
                </div>
            </header>

            <!-- Breadcrumb -->
            <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 24px; font-size: 14px; color: var(--gray-600);\">
                <a href=\"{{ path('front_objectif_sante_index') }}\" style=\"color: var(--blue-600); text-decoration: none; transition: all var(--transition);\">
                    Mes Objectifs Santé
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <a href=\"{{ path('front_objectif_sante_show', {'id': objectif.id}) }}\" style=\"color: var(--blue-600); text-decoration: none; transition: all var(--transition);\">
                    {{ objectif.titre|slice(0, 30) }}{{ objectif.titre|length > 30 ? '...' : '' }}
                </a>
                <span style=\"color: var(--gray-400);\">/</span>
                <span>Suivis</span>
            </div>

            <!-- Objectif Info Card -->
            <div class=\"objectif-info\">
                <h3>{{ objectif.titre }}</h3>
                <div class=\"objectif-details\">
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
                    <div class=\"objectif-detail-item\">
                        <strong>Statut</strong>
                        <span>{{ objectif.statut }}</span>
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
                            {% elseif label == 'warning' %}⚠
                            {% elseif label == 'info' %}ℹ
                            {% endif %}
                            {{ message }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>

            <!-- Actions Bar -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                        <div>
                            <h2 style=\"margin: 0; font-size: 18px; color: var(--gray-800);\">
                                📝 Journal de suivi quotidien
                            </h2>
                            <p style=\"margin: 8px 0 0; color: var(--gray-500); font-size: 14px;\">
                                {{ suivis|length }} entrée(s) de suivi
                            </p>
                        </div>
                        <div style=\"display: flex; gap: 12px;\">
                            <a href=\"{{ path('front_objectif_sante_show', {'id': objectif.id}) }}\" class=\"btn\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M19 12H6M12 5l-7 7 7 7\"/>
                                </svg>
                                Retour à l'objectif
                            </a>
                            <a href=\"{{ path('front_suivi_new', {'id': objectif.id}) }}\" class=\"btn btn-green\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 5v14\"/><path d=\"M5 12h14\"/>
                                </svg>
                                Nouvelle entrée
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {% if suivis is not empty %}
                <!-- Stats Summary -->
                <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 28px;\">
                    <div style=\"background: linear-gradient(135deg, var(--blue-50) 0%, var(--blue-100) 100%); border-radius: var(--radius-lg); padding: 24px; text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 800; color: var(--blue-700);\">
                            {{ suivis|length }}
                        </div>
                        <div style=\"font-size: 14px; color: var(--blue-600); font-weight: 600;\">
                            Entrées de suivi
                        </div>
                    </div>
                    
                    {% set avg_score = suivis|map(s => s.score)|filter(s => s is not null)|reduce((sum, score) => sum + score, 0) / suivis|length %}
                    <div style=\"background: linear-gradient(135deg, var(--green-50) 0%, var(--green-100) 100%); border-radius: var(--radius-lg); padding: 24px; text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 800; color: var(--green-700);\">
                            {{ avg_score|round(1) }}
                        </div>
                        <div style=\"font-size: 14px; color: var(--green-600); font-weight: 600;\">
                            Score moyen
                        </div>
                    </div>
                    
                    {% set last_entry = suivis|sort((a, b) => b.dateSaisie <=> a.dateSaisie)|first %}
                    <div style=\"background: linear-gradient(135deg, var(--purple-50) 0%, var(--purple-100) 100%); border-radius: var(--radius-lg); padding: 24px; text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 800; color: var(--purple-700);\">
                            {{ last_entry ? last_entry.dateSaisie|date('d/m') : '-' }}
                        </div>
                        <div style=\"font-size: 14px; color: var(--purple-600); font-weight: 600;\">
                            Dernière entrée
                        </div>
                    </div>
                </div>
<div style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;\">
  <input id=\"qInput\" type=\"text\" placeholder=\"Rechercher notes...\"
         style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;min-width:220px;\">

  <select id=\"humeurFilter\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
    <option value=\"\">Toutes humeurs</option>
    <option value=\"Excellente\">Excellente</option>
    <option value=\"Bonne\">Bonne</option>
    <option value=\"Neutre\">Neutre</option>
    <option value=\"Mauvaise\">Mauvaise</option>
    <option value=\"Très mauvaise\">Très mauvaise</option>
  </select>

  <select id=\"sortBy\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
  <option value=\"dateSaisie\">Trier: Date</option>
  <option value=\"score\">Score</option>
</select>

<select id=\"sortDir\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
  <option value=\"DESC\">DESC</option>
  <option value=\"ASC\">ASC</option>
</select>
</div>
                <!-- Suivis Table -->
                <div class=\"table-container\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Humeur</th>
                                <th>Sommeil</th>
                                <th>Énergie</th>
                                <th>Stress</th>
                                <th>Alimentation</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody id=\"suiviTbody\"
           data-url=\"{{ path('front_suivi_filter', {'id': objectif.id}) }}\">
        {{ include('front/suivi_bien_etre/_rows.html.twig', { suivis: suivis }) }}
    </tbody>
                    </table>
                </div>

                <!-- Tips Card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2 class=\"card-title\">💡 Conseils pour un suivi efficace</h2>
                    </div>
                    <div class=\"card-content\">
                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;\">
                            <div style=\"text-align: center; padding: 24px 20px; background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%); border-radius: var(--radius-lg); border: 1px solid rgba(229, 231, 235, 0.6); transition: all var(--transition);\">
                                <div style=\"font-size: 32px; margin-bottom: 16px;\">📅</div>
                                <h3 style=\"font-size: 16px; font-weight: 700; margin: 0 0 8px; color: var(--gray-800);\">Régularité</h3>
                                <p style=\"font-size: 14px; color: var(--gray-600); line-height: 1.5; margin: 0;\">Notez vos indicateurs quotidiennement pour un suivi précis.</p>
                            </div>
                            
                            <div style=\"text-align: center; padding: 24px 20px; background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%); border-radius: var(--radius-lg); border: 1px solid rgba(229, 231, 235, 0.6); transition: all var(--transition);\">
                                <div style=\"font-size: 32px; margin-bottom: 16px;\">📈</div>
                                <h3 style=\"font-size: 16px; font-weight: 700; margin: 0 0 8px; color: var(--gray-800);\">Analyse</h3>
                                <p style=\"font-size: 14px; color: var(--gray-600); line-height: 1.5; margin: 0;\">Identifiez les tendances pour adapter vos habitudes.</p>
                            </div>
                            
                            <div style=\"text-align: center; padding: 24px 20px; background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%); border-radius: var(--radius-lg); border: 1px solid rgba(229, 231, 235, 0.6); transition: all var(--transition);\">
                                <div style=\"font-size: 32px; margin-bottom: 16px;\">🎯</div>
                                <h3 style=\"font-size: 16px; font-weight: 700; margin: 0 0 8px; color: var(--gray-800);\">Objectivité</h3>
                                <p style=\"font-size: 14px; color: var(--gray-600); line-height: 1.5; margin: 0;\">Soyez honnête dans votre évaluation pour des résultats fiables.</p>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <!-- Empty State -->
                <div class=\"card\">
                    <div class=\"card-content\">
                        <div class=\"empty-state\">
                            <div class=\"empty-state-icon\">📊</div>
                            <h3>Aucun suivi enregistré</h3>
                            <p>Commencez à suivre votre progression en créant votre première entrée de journal.</p>
                            <a href=\"{{ path('front_suivi_new', {'id': objectif.id}) }}\" class=\"btn btn-green\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 5v14\"/><path d=\"M5 12h14\"/>
                                </svg>
                                Créer votre premier suivi
                            </a>
                        </div>
                    </div>
                </div>
            {% endif %}
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Suivis page loaded');
            
            // Animation des cartes
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-8px)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                });
            });

            // Ripple effect pour les boutons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(255, 255, 255, 0.3);
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        width: \${size}px;
                        height: \${size}px;
                        top: \${y}px;
                        left: \${x}px;
                        pointer-events: none;
                    `;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Auto-hide flash messages
            const flashMessages = document.querySelectorAll('.flash-message');
            flashMessages.forEach(message => {
                setTimeout(() => {
                    message.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    message.style.opacity = '0';
                    message.style.transform = 'translateX(-20px)';
                    setTimeout(() => {
                        if (message.parentNode) {
                            message.parentNode.removeChild(message);
                        }
                    }, 300);
                }, 5000);
            });

            // Table row hover effects
            const tableRows = document.querySelectorAll('.table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.transform = 'translateY(-2px)';
                });
                
                row.addEventListener('mouseleave', () => {
                    row.style.transform = 'translateY(0)';
                });
            });

            // Add ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
                
                @keyframes slideIn {
                    from { transform: translateX(-20px); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(20px); }
                    to { opacity: 1; transform: translateY(0); }
                }
            `;
            document.head.appendChild(style);
        });

        // Function to show success message
        function showSuccessMsg(message) {
            const successMsg = document.createElement('div');
            successMsg.className = 'flash-message flash-success';
            successMsg.innerHTML = '✓ ' + message;
            document.querySelector('.flash-messages').prepend(successMsg);
            
            setTimeout(() => {
                successMsg.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                successMsg.style.opacity = '0';
                successMsg.style.transform = 'translateX(-20px)';
                setTimeout(() => successMsg.remove(), 300);
            }, 5000);
        }

        // Function to show error message
        function showErrorMsg(message) {
            const errorMsg = document.createElement('div');
            errorMsg.className = 'flash-message flash-error';
            errorMsg.innerHTML = '✗ ' + message;
            document.querySelector('.flash-messages').prepend(errorMsg);
            
            setTimeout(() => {
                errorMsg.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                errorMsg.style.opacity = '0';
                errorMsg.style.transform = 'translateX(-20px)';
                setTimeout(() => errorMsg.remove(), 300);
            }, 5000);
        }
    </script>
    <script>
document.addEventListener('DOMContentLoaded', () => {
  const tbody = document.getElementById('suiviTbody');
  if (!tbody) return;

  const baseUrl = tbody.dataset.url;

  const qEl = document.getElementById('qInput');
  const humeurEl = document.getElementById('humeurFilter');
  const sortByEl = document.getElementById('sortBy');
  const sortDirEl = document.getElementById('sortDir');

  let timer = null;

  function buildUrl() {
    const params = new URLSearchParams();
    if (qEl && qEl.value.trim()) params.set('q', qEl.value.trim());
    if (humeurEl && humeurEl.value) params.set('humeur', humeurEl.value);

    params.set('sortBy', sortByEl?.value || 'dateSaisie');
    params.set('sortDir', sortDirEl?.value || 'DESC');

    return `\${baseUrl}?\${params.toString()}`;
  }

  async function loadRows() {
    try {
      tbody.style.opacity = '0.6';
      const res = await fetch(buildUrl(), { headers: { 'X-Requested-With': 'XMLHttpRequest' } });
      tbody.innerHTML = await res.text();
      tbody.style.opacity = '1';
    } catch (e) {
      tbody.style.opacity = '1';
      console.error(e);
    }
  }

  function debouncedLoad() {
    clearTimeout(timer);
    timer = setTimeout(loadRows, 250);
  }

  qEl?.addEventListener('input', debouncedLoad);
  humeurEl?.addEventListener('change', loadRows);
  sortByEl?.addEventListener('change', loadRows);
  sortDirEl?.addEventListener('change', loadRows);
});
</script>

</body>
</html>", "Front/suivi_bien_etre/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\suivi_bien_etre\\index.html.twig");
    }
}
