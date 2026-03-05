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

/* Front/objectif_sante/index.html.twig */
class __TwigTemplate_6f7e654447d23a8381b0965e4a0eebb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/objectif_sante/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/objectif_sante/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Mes Objectifs Santé</title>
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
            background: linear-gradient(90deg, var(--red-50) 0%, var(--orange-50) 100%);
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
            background: linear-gradient(90deg, rgba(254, 242, 242, 0.3) 0%, rgba(254, 242, 242, 0.1) 100%);
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

        /* Badge Design */
        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 24px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            box-shadow: var(--shadow-xs);
            border: 1px solid transparent;
        }

        .badge-primary {
            background: linear-gradient(135deg, var(--blue-100) 0%, var(--blue-50) 100%);
            color: var(--blue-700);
            border-color: var(--blue-200);
        }

        .badge-success {
            background: linear-gradient(135deg, var(--green-100) 0%, var(--green-50) 100%);
            color: var(--green-700);
            border-color: var(--green-200);
        }

        .badge-warning {
            background: linear-gradient(135deg, var(--orange-100) 0%, var(--orange-50) 100%);
            color: var(--orange-700);
            border-color: var(--orange-200);
        }

        .badge-danger {
            background: linear-gradient(135deg, var(--red-100) 0%, var(--red-50) 100%);
            color: var(--red-700);
            border-color: var(--red-200);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            border-radius: var(--radius);
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            transition: all var(--transition);
            font-size: 14px;
        }

        .btn-edit {
            background: linear-gradient(135deg, var(--blue-100) 0%, var(--blue-50) 100%);
            color: var(--blue-600);
            border: 1px solid var(--blue-200);
        }

        .btn-edit:hover {
            background: linear-gradient(135deg, var(--blue-200) 0%, var(--blue-100) 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .btn-delete {
            background: linear-gradient(135deg, var(--red-100) 0%, var(--red-50) 100%);
            color: var(--red-600);
            border: 1px solid var(--red-200);
        }

        .btn-delete:hover {
            background: linear-gradient(135deg, var(--red-200) 0%, var(--red-100) 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
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
            
            .action-buttons {
                flex-wrap: wrap;
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
        // line 937
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 937, $this->source); })()), "user", [], "any", false, false, false, 937)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 937), "initials", [], "any", true, true, false, 937)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 937, $this->source); })()), "user", [], "any", false, false, false, 937), "initials", [], "any", false, false, false, 937), (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 937, $this->source); })()), "user", [], "any", false, false, false, 937), "nom", [], "any", false, false, false, 937)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 937, $this->source); })()), "user", [], "any", false, false, false, 937), "prenom", [], "any", false, false, false, 937))))) : ((Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 937, $this->source); })()), "user", [], "any", false, false, false, 937), "nom", [], "any", false, false, false, 937)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 937, $this->source); })()), "user", [], "any", false, false, false, 937), "prenom", [], "any", false, false, false, 937))))), "html", null, true)) : ("JD"));
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 940
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 940, $this->source); })()), "user", [], "any", false, false, false, 940)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 940, $this->source); })()), "user", [], "any", false, false, false, 940), "nom", [], "any", false, false, false, 940) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 940, $this->source); })()), "user", [], "any", false, false, false, 940), "prenom", [], "any", false, false, false, 940)), "html", null, true)) : ("John Doe"));
        yield "</h3>
                        <p>";
        // line 941
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 941, $this->source); })()), "user", [], "any", false, false, false, 941)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 941), "classe", [], "any", false, true, false, 941), "nom", [], "any", true, true, false, 941)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 941, $this->source); })()), "user", [], "any", false, false, false, 941), "classe", [], "any", false, false, false, 941), "nom", [], "any", false, false, false, 941), "4SE-G1")) : ("4SE-G1")), "html", null, true)) : ("4SE-G1"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 945
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 945, $this->source); })()), "user", [], "any", false, false, false, 945)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 945, $this->source); })()), "user", [], "any", false, false, false, 945), "email", [], "any", false, false, false, 945), "html", null, true)) : ("student@esprit.tn"));
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 946
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 946, $this->source); })()), "user", [], "any", false, false, false, 946)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 946, $this->source); })()), "user", [], "any", false, false, false, 946), "roles", [], "any", false, false, false, 946)), ["ROLE_" => ""])), "html", null, true)) : ("Student"));
        yield "</div>
                    <div><strong>Member since:</strong> ";
        // line 947
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 947, $this->source); })()), "user", [], "any", false, false, false, 947)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 947, $this->source); })()), "user", [], "any", false, false, false, 947), "createdAt", [], "any", false, false, false, 947), "M Y"), "html", null, true)) : ("Jan 2024"));
        yield "</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class=\"nav\">
                <a href=\"";
        // line 953
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
        // line 965
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"";
        // line 972
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/>
                    </svg>
                    Objectifs Santé
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <circle cx=\"12\" cy=\"12\" r=\"3\"/><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"/>
                    </svg>
                    Settings
                </a>
                <a href=\"";
        // line 984
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
                    <h1 class=\"h1\">Mes Objectifs Santé</h1>
                    <p class=\"muted\">Gérez vos objectifs de santé et suivez votre progression</p>
                </div>
                <div class=\"session-display\">
                    <div>Session actuelle</div>
                    <div>";
        // line 1002
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1002, $this->source); })()), "user", [], "any", false, false, false, 1002)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1002, $this->source); })()), "user", [], "any", false, false, false, 1002), "email", [], "any", false, false, false, 1002), "html", null, true)) : ("student@esprit.tn"));
        yield "</div>
                </div>
            </header>

            <!-- Flash Messages -->
            <div class=\"flash-messages\">
                ";
        // line 1008
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1008, $this->source); })()), "flashes", [], "any", false, false, false, 1008));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 1009
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 1010
                yield "                        <div class=\"flash-message flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                            ";
                // line 1011
                if (($context["label"] == "success")) {
                    yield "✓
                            ";
                } elseif ((                // line 1012
$context["label"] == "error")) {
                    yield "✗
                            ";
                } elseif ((                // line 1013
$context["label"] == "warning")) {
                    yield "⚠
                            ";
                } elseif ((                // line 1014
$context["label"] == "info")) {
                    yield "ℹ
                            ";
                }
                // line 1016
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1019
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1020
        yield "            </div>

            <!-- Actions Bar -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                        <div>
                            <h2 style=\"margin: 0; font-size: 18px; color: var(--gray-800);\">
                                📊 Vue d'ensemble de vos objectifs
                            </h2>
                            <p style=\"margin: 8px 0 0; color: var(--gray-500); font-size: 14px;\">
                                ";
        // line 1031
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1031, $this->source); })())), "html", null, true);
        yield " objectif(s) défini(s)
                            </p>
                        </div>
                        <a href=\"";
        // line 1034
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_new");
        yield "\" class=\"btn btn-green\">
                            <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M12 5v14\"/><path d=\"M5 12h14\"/>
                            </svg>
                            Ajouter un objectif
                        </a>
                    </div>
                </div>
            </div>

            <!-- Objectifs Table -->
            ";
        // line 1045
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1045, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1046
            yield "                <div style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;\">
      <input id=\"qInput\" type=\"text\" placeholder=\"Rechercher...\"
             style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;min-width:220px;\">

      <select id=\"typeFilter\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"\">Tous types</option>
        <option value=\"SOMMEIL\">Sommeil</option>
        <option value=\"SPORT\">Sport</option>
        <option value=\"ALIMENTATION\">Alimentation</option>
      </select>

      <select id=\"prioriteFilter\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"\">Toutes priorités</option>
        <option value=\"HAUTE\">Haute</option>
        <option value=\"MOYENNE\">Moyenne</option>
        <option value=\"BASSE\">Basse</option>
      </select>

      <select id=\"statutFilter\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"\">Tous statuts</option>
        <option value=\"EN_COURS\">En cours</option>
        <option value=\"ATTEINT\">Atteint</option>
        <option value=\"ABANDONNE\">Abandonné</option>
      </select>

      <select id=\"sortBy\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"dateDebut\">Trier: Date début</option>
        <option value=\"dateFin\">Date fin</option>
        <option value=\"priorite\">Priorité</option>
        <option value=\"statut\">Statut</option>
        <option value=\"titre\">Titre</option>
      </select>

      <select id=\"sortDir\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"DESC\">DESC</option>
        <option value=\"ASC\">ASC</option>
      </select>
    </div>

    <div class=\"table-container\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Priorité</th>
                                <th>Date début</th>
                                <th>Date fin</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id=\"objectifTbody\" data-url=\"";
            // line 1098
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_filter");
            yield "\">
    ";
            // line 1099
            yield Twig\Extension\CoreExtension::include($this->env, $context, "front/objectif_sante/_rows.html.twig", ["objectif_santes" => (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1099, $this->source); })())]);
            yield "
</tbody>

                    </table>
                </div>
            ";
        } else {
            // line 1105
            yield "                <div class=\"card\">
                    <div class=\"card-content\">
                        <div class=\"empty-state\">
                            <div class=\"empty-state-icon\">🎯</div>
                            <h3>Aucun objectif défini</h3>
                            <p>Commencez par définir votre premier objectif de santé pour suivre votre progression.</p>
                            <a href=\"";
            // line 1111
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_new");
            yield "\" class=\"btn\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 5v14\"/><path d=\"M5 12h14\"/>
                                </svg>
                                Créer votre premier objectif
                            </a>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 1121
        yield "
            <!-- Stats Card -->
            ";
        // line 1123
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1123, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1124
            yield "                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2 class=\"card-title\">Statistiques</h2>
                    </div>
                    <div class=\"card-content\">
                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;\">
                            <div style=\"text-align: center; padding: 20px; background: linear-gradient(135deg, var(--blue-50) 0%, var(--blue-100) 100%); border-radius: var(--radius);\">
                                <div style=\"font-size: 32px; font-weight: 800; color: var(--blue-700);\">
                                    ";
            // line 1132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1132, $this->source); })())), "html", null, true);
            yield "
                                </div>
                                <div style=\"font-size: 14px; color: var(--blue-600); font-weight: 600;\">
                                    Objectifs totaux
                                </div>
                            </div>
                            
                            ";
            // line 1139
            $context["objectifs_actifs"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1139, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 1139, $this->source); })()), "dateFin", [], "any", false, false, false, 1139) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate("now")); }));
            // line 1140
            yield "                            <div style=\"text-align: center; padding: 20px; background: linear-gradient(135deg, var(--green-50) 0%, var(--green-100) 100%); border-radius: var(--radius);\">
                                <div style=\"font-size: 32px; font-weight: 800; color: var(--green-700);\">
                                    ";
            // line 1142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["objectifs_actifs"]) || array_key_exists("objectifs_actifs", $context) ? $context["objectifs_actifs"] : (function () { throw new RuntimeError('Variable "objectifs_actifs" does not exist.', 1142, $this->source); })()), "html", null, true);
            yield "
                                </div>
                                <div style=\"font-size: 14px; color: var(--green-600); font-weight: 600;\">
                                    Objectifs actifs
                                </div>
                            </div>
                            
                            ";
            // line 1149
            $context["objectifs_haute_priorite"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1149, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 1149, $this->source); })()), "priorite", [], "any", false, false, false, 1149) == "HAUTE"); }));
            // line 1150
            yield "                            <div style=\"text-align: center; padding: 20px; background: linear-gradient(135deg, var(--red-50) 0%, var(--red-100) 100%); border-radius: var(--radius);\">
                                <div style=\"font-size: 32px; font-weight: 800; color: var(--red-700);\">
                                    ";
            // line 1152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["objectifs_haute_priorite"]) || array_key_exists("objectifs_haute_priorite", $context) ? $context["objectifs_haute_priorite"] : (function () { throw new RuntimeError('Variable "objectifs_haute_priorite" does not exist.', 1152, $this->source); })()), "html", null, true);
            yield "
                                </div>
                                <div style=\"font-size: 14px; color: var(--red-600); font-weight: 600;\">
                                    Haute priorité
                                </div>
                            </div>
                            
                            ";
            // line 1159
            $context["objectifs_termines"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 1159, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 1159, $this->source); })()), "statut", [], "any", false, false, false, 1159) == "ATTEINT"); }));
            // line 1160
            yield "                            <div style=\"text-align: center; padding: 20px; background: linear-gradient(135deg, var(--purple-50) 0%, var(--purple-100) 100%); border-radius: var(--radius);\">
                                <div style=\"font-size: 32px; font-weight: 800; color: var(--purple-700);\">
                                    ";
            // line 1162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["objectifs_termines"]) || array_key_exists("objectifs_termines", $context) ? $context["objectifs_termines"] : (function () { throw new RuntimeError('Variable "objectifs_termines" does not exist.', 1162, $this->source); })()), "html", null, true);
            yield "
                                </div>
                                <div style=\"font-size: 14px; color: var(--purple-600); font-weight: 600;\">
                                    Terminés
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 1172
        yield "        </main>
    </div>

    <script>
        // Confirmation pour la suppression
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!confirm('Êtes-vous sûr de vouloir supprimer cet objectif ?')) {
                        e.preventDefault();
                    }
                });
            });

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

            // Add ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
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
  const tbody = document.getElementById('objectifTbody');
  if (!tbody) return;

  const baseUrl = tbody.dataset.url;

  const qEl = document.getElementById('qInput');
  const typeEl = document.getElementById('typeFilter');
  const prioriteEl = document.getElementById('prioriteFilter');
  const statutEl = document.getElementById('statutFilter');
  const sortByEl = document.getElementById('sortBy');
  const sortDirEl = document.getElementById('sortDir');

  let timer = null;

  function buildUrl() {
    const params = new URLSearchParams();

    if (qEl && qEl.value.trim()) params.set('q', qEl.value.trim());
    if (typeEl && typeEl.value) params.set('type', typeEl.value);
    if (prioriteEl && prioriteEl.value) params.set('priorite', prioriteEl.value);
    if (statutEl && statutEl.value) params.set('statut', statutEl.value);

    params.set('sortBy', sortByEl?.value || 'dateDebut');
    params.set('sortDir', sortDirEl?.value || 'DESC');

    return `\${baseUrl}?\${params.toString()}`;
  }

  async function loadRows() {
    try {
      tbody.style.opacity = '0.6';

      const res = await fetch(buildUrl(), {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      });

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
  typeEl?.addEventListener('change', loadRows);
  prioriteEl?.addEventListener('change', loadRows);
  statutEl?.addEventListener('change', loadRows);
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
        return "Front/objectif_sante/index.html.twig";
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
        return array (  1337 => 1172,  1324 => 1162,  1320 => 1160,  1318 => 1159,  1308 => 1152,  1304 => 1150,  1302 => 1149,  1292 => 1142,  1288 => 1140,  1286 => 1139,  1276 => 1132,  1266 => 1124,  1264 => 1123,  1260 => 1121,  1247 => 1111,  1239 => 1105,  1230 => 1099,  1226 => 1098,  1172 => 1046,  1170 => 1045,  1156 => 1034,  1150 => 1031,  1137 => 1020,  1131 => 1019,  1121 => 1016,  1116 => 1014,  1112 => 1013,  1108 => 1012,  1104 => 1011,  1099 => 1010,  1094 => 1009,  1090 => 1008,  1081 => 1002,  1060 => 984,  1045 => 972,  1035 => 965,  1020 => 953,  1011 => 947,  1007 => 946,  1003 => 945,  996 => 941,  992 => 940,  986 => 937,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Mes Objectifs Santé</title>
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
            background: linear-gradient(90deg, var(--red-50) 0%, var(--orange-50) 100%);
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
            background: linear-gradient(90deg, rgba(254, 242, 242, 0.3) 0%, rgba(254, 242, 242, 0.1) 100%);
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

        /* Badge Design */
        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 24px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            box-shadow: var(--shadow-xs);
            border: 1px solid transparent;
        }

        .badge-primary {
            background: linear-gradient(135deg, var(--blue-100) 0%, var(--blue-50) 100%);
            color: var(--blue-700);
            border-color: var(--blue-200);
        }

        .badge-success {
            background: linear-gradient(135deg, var(--green-100) 0%, var(--green-50) 100%);
            color: var(--green-700);
            border-color: var(--green-200);
        }

        .badge-warning {
            background: linear-gradient(135deg, var(--orange-100) 0%, var(--orange-50) 100%);
            color: var(--orange-700);
            border-color: var(--orange-200);
        }

        .badge-danger {
            background: linear-gradient(135deg, var(--red-100) 0%, var(--red-50) 100%);
            color: var(--red-700);
            border-color: var(--red-200);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            border-radius: var(--radius);
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            transition: all var(--transition);
            font-size: 14px;
        }

        .btn-edit {
            background: linear-gradient(135deg, var(--blue-100) 0%, var(--blue-50) 100%);
            color: var(--blue-600);
            border: 1px solid var(--blue-200);
        }

        .btn-edit:hover {
            background: linear-gradient(135deg, var(--blue-200) 0%, var(--blue-100) 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .btn-delete {
            background: linear-gradient(135deg, var(--red-100) 0%, var(--red-50) 100%);
            color: var(--red-600);
            border: 1px solid var(--red-200);
        }

        .btn-delete:hover {
            background: linear-gradient(135deg, var(--red-200) 0%, var(--red-100) 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
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
            
            .action-buttons {
                flex-wrap: wrap;
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
                        <circle cx=\"12\" cy=\"12\" r=\"3\"/><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"/>
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
                    <h1 class=\"h1\">Mes Objectifs Santé</h1>
                    <p class=\"muted\">Gérez vos objectifs de santé et suivez votre progression</p>
                </div>
                <div class=\"session-display\">
                    <div>Session actuelle</div>
                    <div>{{ app.user ? app.user.email : 'student@esprit.tn' }}</div>
                </div>
            </header>

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
                                📊 Vue d'ensemble de vos objectifs
                            </h2>
                            <p style=\"margin: 8px 0 0; color: var(--gray-500); font-size: 14px;\">
                                {{ objectif_santes|length }} objectif(s) défini(s)
                            </p>
                        </div>
                        <a href=\"{{ path('front_objectif_sante_new') }}\" class=\"btn btn-green\">
                            <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M12 5v14\"/><path d=\"M5 12h14\"/>
                            </svg>
                            Ajouter un objectif
                        </a>
                    </div>
                </div>
            </div>

            <!-- Objectifs Table -->
            {% if objectif_santes is not empty %}
                <div style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:16px;\">
      <input id=\"qInput\" type=\"text\" placeholder=\"Rechercher...\"
             style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;min-width:220px;\">

      <select id=\"typeFilter\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"\">Tous types</option>
        <option value=\"SOMMEIL\">Sommeil</option>
        <option value=\"SPORT\">Sport</option>
        <option value=\"ALIMENTATION\">Alimentation</option>
      </select>

      <select id=\"prioriteFilter\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"\">Toutes priorités</option>
        <option value=\"HAUTE\">Haute</option>
        <option value=\"MOYENNE\">Moyenne</option>
        <option value=\"BASSE\">Basse</option>
      </select>

      <select id=\"statutFilter\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"\">Tous statuts</option>
        <option value=\"EN_COURS\">En cours</option>
        <option value=\"ATTEINT\">Atteint</option>
        <option value=\"ABANDONNE\">Abandonné</option>
      </select>

      <select id=\"sortBy\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"dateDebut\">Trier: Date début</option>
        <option value=\"dateFin\">Date fin</option>
        <option value=\"priorite\">Priorité</option>
        <option value=\"statut\">Statut</option>
        <option value=\"titre\">Titre</option>
      </select>

      <select id=\"sortDir\" style=\"padding:12px;border-radius:12px;border:1px solid #e5e7eb;\">
        <option value=\"DESC\">DESC</option>
        <option value=\"ASC\">ASC</option>
      </select>
    </div>

    <div class=\"table-container\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Priorité</th>
                                <th>Date début</th>
                                <th>Date fin</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id=\"objectifTbody\" data-url=\"{{ path('front_objectif_sante_filter') }}\">
    {{ include('front/objectif_sante/_rows.html.twig', { objectif_santes: objectif_santes }) }}
</tbody>

                    </table>
                </div>
            {% else %}
                <div class=\"card\">
                    <div class=\"card-content\">
                        <div class=\"empty-state\">
                            <div class=\"empty-state-icon\">🎯</div>
                            <h3>Aucun objectif défini</h3>
                            <p>Commencez par définir votre premier objectif de santé pour suivre votre progression.</p>
                            <a href=\"{{ path('front_objectif_sante_new') }}\" class=\"btn\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M12 5v14\"/><path d=\"M5 12h14\"/>
                                </svg>
                                Créer votre premier objectif
                            </a>
                        </div>
                    </div>
                </div>
            {% endif %}

            <!-- Stats Card -->
            {% if objectif_santes is not empty %}
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h2 class=\"card-title\">Statistiques</h2>
                    </div>
                    <div class=\"card-content\">
                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;\">
                            <div style=\"text-align: center; padding: 20px; background: linear-gradient(135deg, var(--blue-50) 0%, var(--blue-100) 100%); border-radius: var(--radius);\">
                                <div style=\"font-size: 32px; font-weight: 800; color: var(--blue-700);\">
                                    {{ objectif_santes|length }}
                                </div>
                                <div style=\"font-size: 14px; color: var(--blue-600); font-weight: 600;\">
                                    Objectifs totaux
                                </div>
                            </div>
                            
                            {% set objectifs_actifs = objectif_santes|filter(o => o.dateFin >= date('now'))|length %}
                            <div style=\"text-align: center; padding: 20px; background: linear-gradient(135deg, var(--green-50) 0%, var(--green-100) 100%); border-radius: var(--radius);\">
                                <div style=\"font-size: 32px; font-weight: 800; color: var(--green-700);\">
                                    {{ objectifs_actifs }}
                                </div>
                                <div style=\"font-size: 14px; color: var(--green-600); font-weight: 600;\">
                                    Objectifs actifs
                                </div>
                            </div>
                            
                            {% set objectifs_haute_priorite = objectif_santes|filter(o => o.priorite == 'HAUTE')|length %}
                            <div style=\"text-align: center; padding: 20px; background: linear-gradient(135deg, var(--red-50) 0%, var(--red-100) 100%); border-radius: var(--radius);\">
                                <div style=\"font-size: 32px; font-weight: 800; color: var(--red-700);\">
                                    {{ objectifs_haute_priorite }}
                                </div>
                                <div style=\"font-size: 14px; color: var(--red-600); font-weight: 600;\">
                                    Haute priorité
                                </div>
                            </div>
                            
                            {% set objectifs_termines = objectif_santes|filter(o => o.statut == 'ATTEINT')|length %}
                            <div style=\"text-align: center; padding: 20px; background: linear-gradient(135deg, var(--purple-50) 0%, var(--purple-100) 100%); border-radius: var(--radius);\">
                                <div style=\"font-size: 32px; font-weight: 800; color: var(--purple-700);\">
                                    {{ objectifs_termines }}
                                </div>
                                <div style=\"font-size: 14px; color: var(--purple-600); font-weight: 600;\">
                                    Terminés
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}
        </main>
    </div>

    <script>
        // Confirmation pour la suppression
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!confirm('Êtes-vous sûr de vouloir supprimer cet objectif ?')) {
                        e.preventDefault();
                    }
                });
            });

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

            // Add ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
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
  const tbody = document.getElementById('objectifTbody');
  if (!tbody) return;

  const baseUrl = tbody.dataset.url;

  const qEl = document.getElementById('qInput');
  const typeEl = document.getElementById('typeFilter');
  const prioriteEl = document.getElementById('prioriteFilter');
  const statutEl = document.getElementById('statutFilter');
  const sortByEl = document.getElementById('sortBy');
  const sortDirEl = document.getElementById('sortDir');

  let timer = null;

  function buildUrl() {
    const params = new URLSearchParams();

    if (qEl && qEl.value.trim()) params.set('q', qEl.value.trim());
    if (typeEl && typeEl.value) params.set('type', typeEl.value);
    if (prioriteEl && prioriteEl.value) params.set('priorite', prioriteEl.value);
    if (statutEl && statutEl.value) params.set('statut', statutEl.value);

    params.set('sortBy', sortByEl?.value || 'dateDebut');
    params.set('sortDir', sortDirEl?.value || 'DESC');

    return `\${baseUrl}?\${params.toString()}`;
  }

  async function loadRows() {
    try {
      tbody.style.opacity = '0.6';

      const res = await fetch(buildUrl(), {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      });

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
  typeEl?.addEventListener('change', loadRows);
  prioriteEl?.addEventListener('change', loadRows);
  statutEl?.addEventListener('change', loadRows);
  sortByEl?.addEventListener('change', loadRows);
  sortDirEl?.addEventListener('change', loadRows);
});
</script>

</body>
</html>", "Front/objectif_sante/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\objectif_sante\\index.html.twig");
    }
}
