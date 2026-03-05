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

/* Front/objectif_sante/new.html.twig */
class __TwigTemplate_f783adbde39b8762572b67dd336f6737 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/objectif_sante/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/objectif_sante/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Nouvel Objectif Santé</title>
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
            height = 2px;
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

        /* Premium Card Design */
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

        /* Premium Form Design */
        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #374151;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group label::before {
            content: '';
            width: 6px;
            height: 6px;
            background: var(--red-400);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #d1d5db;
            border-radius: var(--radius-lg);
            background: #ffffff;
            color: #111827;
            font-size: 15px;
            font-weight: 500;
            transition: all var(--transition);
            font-family: inherit;
        }

        .form-control:hover {
            border-color: #9ca3af;
            background: #ffffff;
        }

        .form-control:focus {
            border-color: var(--red-500);
            background: white;
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
            outline: none;
            transform: translateY(-1px);
        }
        
        .form-control:disabled,
        .form-control[readonly] {
            background: var(--gray-100);
            border-color: var(--gray-200);
            cursor: not-allowed;
            opacity: 0.7;
        }
        
        .form-control:invalid:not(:placeholder-shown) {
            border-color: var(--red-400);
        }
        
        .form-control:valid:not(:placeholder-shown) {
            border-color: var(--green-400);
        }
        
        .form-text {
            display: block;
            margin-top: 6px;
            font-size: 13px;
            color: var(--gray-500);
            font-weight: 400;
        }
        
        .form-group.has-error .form-control {
            border-color: var(--red-500);
            background: var(--red-50);
        }
        
        .form-group.has-success .form-control {
            border-color: var(--green-500);
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

        .btn-outline {
            background: transparent;
            color: #374151;
            border-color: #d1d5db;
            font-weight: 500;
            box-shadow: none;
        }

        .btn-outline:hover {
            background: #f3f4f6;
            color: #111827;
            border-color: #9ca3af;
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .btn-profile {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 4px 16px rgba(102, 126, 234, 0.3);
        }

        .btn-profile:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            box-shadow: 0 8px 28px rgba(102, 126, 234, 0.4);
            transform: translateY(-3px);
        }

        .btn-profile:active {
            transform: translateY(-1px);
        }

        .quick-actions .btn-green {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 4px 16px rgba(16, 185, 129, 0.3);
        }

        .quick-actions .btn-green:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            box-shadow: 0 8px 28px rgba(16, 185, 129, 0.4);
            transform: translateY(-3px);
        }

        .btn-blue {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-700) 100%);
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.2);
        }

        .btn-blue:hover {
            background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-800) 100%);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
            transform: translateY(-3px);
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
            position: relative;
            overflow: hidden;
        }

        .tip-card::before {
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

        .tip-card:hover::before {
            opacity: 1;
        }

        .tip-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: rgba(229, 231, 235, 0.8);
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

        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 16px;
            padding-right: 50px;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 16px;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
            font-size: 14px;
            color: var(--gray-600);
        }

        .breadcrumb a {
            color: var(--blue-600);
            text-decoration: none;
            transition: all var(--transition);
        }

        .breadcrumb a:hover {
            color: var(--blue-700);
            text-decoration: underline;
        }

        .breadcrumb .separator {
            color: var(--gray-400);
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
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .tips-grid {
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

        /* Loading Animation */
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

        /* Focus States */
        *:focus-visible {
            outline: 2px solid var(--red-500);
            outline-offset: 2px;
            border-radius: var(--radius-sm);
        }

        /* Print Styles */
        @media print {
            .sidebar,
            .btn,
            .session-display {
                display: none;
            }
            
            .main {
                width: 100%;
                padding: 20px;
            }
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
        // line 1045
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1045, $this->source); })()), "user", [], "any", false, false, false, 1045)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1045), "initials", [], "any", true, true, false, 1045)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1045, $this->source); })()), "user", [], "any", false, false, false, 1045), "initials", [], "any", false, false, false, 1045), (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1045, $this->source); })()), "user", [], "any", false, false, false, 1045), "nom", [], "any", false, false, false, 1045)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1045, $this->source); })()), "user", [], "any", false, false, false, 1045), "prenom", [], "any", false, false, false, 1045))))) : ((Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1045, $this->source); })()), "user", [], "any", false, false, false, 1045), "nom", [], "any", false, false, false, 1045)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1045, $this->source); })()), "user", [], "any", false, false, false, 1045), "prenom", [], "any", false, false, false, 1045))))), "html", null, true)) : ("JD"));
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 1048
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1048, $this->source); })()), "user", [], "any", false, false, false, 1048)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1048, $this->source); })()), "user", [], "any", false, false, false, 1048), "nom", [], "any", false, false, false, 1048) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1048, $this->source); })()), "user", [], "any", false, false, false, 1048), "prenom", [], "any", false, false, false, 1048)), "html", null, true)) : ("John Doe"));
        yield "</h3>
                        <p>";
        // line 1049
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1049, $this->source); })()), "user", [], "any", false, false, false, 1049)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1049), "classe", [], "any", false, true, false, 1049), "nom", [], "any", true, true, false, 1049)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1049, $this->source); })()), "user", [], "any", false, false, false, 1049), "classe", [], "any", false, false, false, 1049), "nom", [], "any", false, false, false, 1049), "4SE-G1")) : ("4SE-G1")), "html", null, true)) : ("4SE-G1"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 1053
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1053, $this->source); })()), "user", [], "any", false, false, false, 1053)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1053, $this->source); })()), "user", [], "any", false, false, false, 1053), "email", [], "any", false, false, false, 1053), "html", null, true)) : ("student@esprit.tn"));
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 1054
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1054, $this->source); })()), "user", [], "any", false, false, false, 1054)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1054, $this->source); })()), "user", [], "any", false, false, false, 1054), "roles", [], "any", false, false, false, 1054)), ["ROLE_" => ""])), "html", null, true)) : ("Student"));
        yield "</div>
                    <div><strong>Member since:</strong> ";
        // line 1055
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1055, $this->source); })()), "user", [], "any", false, false, false, 1055)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1055, $this->source); })()), "user", [], "any", false, false, false, 1055), "createdAt", [], "any", false, false, false, 1055), "M Y"), "html", null, true)) : ("Jan 2024"));
        yield "</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class=\"nav\">
                <a href=\"";
        // line 1061
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
        // line 1073
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"";
        // line 1080
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 2v20\"/><path d=\"M2 12h20\"/>
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
        // line 1092
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
                    <h1 class=\"h1\">Nouvel Objectif Santé</h1>
                    <p class=\"muted\">Définissez un nouvel objectif pour améliorer votre santé et bien-être</p>
                </div>
                <div class=\"session-display\">
                    <div>Session actuelle</div>
                    <div>";
        // line 1110
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1110, $this->source); })()), "user", [], "any", false, false, false, 1110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1110, $this->source); })()), "user", [], "any", false, false, false, 1110), "email", [], "any", false, false, false, 1110), "html", null, true)) : ("student@esprit.tn"));
        yield "</div>
                </div>
            </header>

            <!-- Breadcrumb -->
            <div class=\"breadcrumb\">
                <a href=\"";
        // line 1116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\">Mes Objectifs Santé</a>
                <span class=\"separator\">/</span>
                <span>Nouvel objectif</span>
            </div>

            <!-- Flash Messages -->
            <div class=\"flash-messages\">
                ";
        // line 1123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1123, $this->source); })()), "flashes", [], "any", false, false, false, 1123));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 1124
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 1125
                yield "                        <div class=\"flash-message flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                            ";
                // line 1126
                if (($context["label"] == "success")) {
                    yield "✓
                            ";
                } elseif ((                // line 1127
$context["label"] == "error")) {
                    yield "✗
                            ";
                } elseif ((                // line 1128
$context["label"] == "warning")) {
                    yield "⚠
                            ";
                } elseif ((                // line 1129
$context["label"] == "info")) {
                    yield "ℹ
                            ";
                }
                // line 1131
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1134
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1135
        yield "            </div>

            <!-- Form Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">Informations de l'objectif</h2>
                </div>
                <div class=\"card-content\">
                    ";
        // line 1143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1143, $this->source); })()), 'form_start', ["attr" => ["class" => "objectif-form", "novalidate" => "novalidate"]]);
        yield "
                    
                        <div class=\"form-group\">
                            ";
        // line 1146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1146, $this->source); })()), "titre", [], "any", false, false, false, 1146), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 1147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1147, $this->source); })()), "titre", [], "any", false, false, false, 1147), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Dormir 8 heures par nuit, Perdre 5kg, Courir 10km..."]]);
        // line 1150
        yield "
                            <small class=\"form-text\">Donnez un titre clair et motivant à votre objectif</small>
                            ";
        // line 1152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1152, $this->source); })()), "titre", [], "any", false, false, false, 1152), 'errors');
        yield "
                        </div>

                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;\">
                            <div class=\"form-group\">
                                ";
        // line 1157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1157, $this->source); })()), "type", [], "any", false, false, false, 1157), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 1158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1158, $this->source); })()), "type", [], "any", false, false, false, 1158), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1160
        yield "
                                <small class=\"form-text\">Sélectionnez le type d'objectif</small>
                                ";
        // line 1162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1162, $this->source); })()), "type", [], "any", false, false, false, 1162), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1166, $this->source); })()), "valeurCible", [], "any", false, false, false, 1166), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                <div style=\"display:flex;align-items:center;gap:8px;\">
                                    ";
        // line 1168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1168, $this->source); })()), "valeurCible", [], "any", false, false, false, 1168), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 8 (heures), 30 (minutes), 3 (repas)..."]]);
        // line 1170
        yield "
                                    <span id=\"valeurCible-unit\">";
        // line 1171
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1171), "data", [], "any", false, true, false, 1171), "type", [], "any", true, true, false, 1171)) {
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1171, $this->source); })()), "vars", [], "any", false, false, false, 1171), "data", [], "any", false, false, false, 1171), "type", [], "any", false, false, false, 1171) == "SOMMEIL")) {
                yield "heures";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1171, $this->source); })()), "vars", [], "any", false, false, false, 1171), "data", [], "any", false, false, false, 1171), "type", [], "any", false, false, false, 1171) == "SPORT")) {
                yield "minutes";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1171, $this->source); })()), "vars", [], "any", false, false, false, 1171), "data", [], "any", false, false, false, 1171), "type", [], "any", false, false, false, 1171) == "ALIMENTATION")) {
                yield "repas";
            } else {
            }
        }
        yield "</span>
                                </div>
                                <small class=\"form-text\" id=\"valeurCible-help-front\">
                                    ";
        // line 1174
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1174, $this->source); })()), "vars", [], "any", false, false, false, 1174), "data", [], "any", false, false, false, 1174), "type", [], "any", false, false, false, 1174) == "SOMMEIL")) {
            // line 1175
            yield "                                        Heures de sommeil par nuit (1-16 heures)
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1176
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1176, $this->source); })()), "vars", [], "any", false, false, false, 1176), "data", [], "any", false, false, false, 1176), "type", [], "any", false, false, false, 1176) == "SPORT")) {
            // line 1177
            yield "                                        Minutes d'activité par jour (0-300 minutes)
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1178
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1178, $this->source); })()), "vars", [], "any", false, false, false, 1178), "data", [], "any", false, false, false, 1178), "type", [], "any", false, false, false, 1178) == "ALIMENTATION")) {
            // line 1179
            yield "                                        Nombre de repas sains par jour (1-6 repas)
                                    ";
        } else {
            // line 1181
            yield "                                        Valeur cible à atteindre
                                    ";
        }
        // line 1183
        yield "                                </small>
                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                  const typeSelect = document.getElementById('objectif_sante_type');
                                  const targetHelp = document.getElementById('valeurCible-help-front');
                                  const targetInput = document.getElementById('objectif_sante_valeurCible');
                                  const unitSpan = document.getElementById('valeurCible-unit');
                                  if (!typeSelect || !targetHelp || !targetInput) return;
                                  const map = {
                                    'SOMMEIL': {text: 'Heures de sommeil par nuit', min: 1, max: 16, unit: 'heures', placeholder: 'Ex: 8'},
                                    'SPORT': {text: 'Minutes d\\'activité par jour', min: 0, max: 300, unit: 'minutes', placeholder: 'Ex: 30'},
                                    'ALIMENTATION': {text: 'Nombre de repas sains par jour', min: 1, max: 6, unit: 'repas', placeholder: 'Ex: 3'},
                                    '': {text: 'Valeur cible à atteindre', placeholder: 'Ex: 8 (heures), 3 (repas), 30 (minutes)'}
                                  };
                                  function updateFrontHelp() {
                                    const t = typeSelect.value || '';
                                    const entry = map[t] || map[''];
                                    if (entry.min !== undefined && entry.max !== undefined && entry.unit) {
                                      targetHelp.textContent = `\${entry.text} (\${entry.min}–\${entry.max} \${entry.unit})`;
                                      targetInput.setAttribute('min', entry.min);
                                      targetInput.setAttribute('max', entry.max);
                                      if (unitSpan) unitSpan.textContent = entry.unit;
                                    } else {
                                      targetHelp.textContent = entry.text || map[''].text;
                                      targetInput.removeAttribute('min');
                                      targetInput.removeAttribute('max');
                                      if (unitSpan) unitSpan.textContent = '';
                                    }
                                    targetInput.placeholder = entry.placeholder || '';
                                  }
                                  typeSelect.addEventListener('change', updateFrontHelp);
                                  targetInput.addEventListener('focus', updateFrontHelp);
                                  if (document.readyState === 'complete') updateFrontHelp(); else window.addEventListener('load', updateFrontHelp);
                                });
                                </script>
                                ";
        // line 1218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1218, $this->source); })()), "valeurCible", [], "any", false, false, false, 1218), 'errors');
        yield "
                            </div>
                        </div>

                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;\">
                            <div class=\"form-group\">
                                ";
        // line 1224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1224, $this->source); })()), "priorite", [], "any", false, false, false, 1224), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 1225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1225, $this->source); })()), "priorite", [], "any", false, false, false, 1225), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1227
        yield "
                                <small class=\"form-text\">Définissez l'importance de cet objectif</small>
                                ";
        // line 1229
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1229, $this->source); })()), "priorite", [], "any", false, false, false, 1229), 'errors');
        yield "
                            </div>
                        </div>

                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;\">
                            <div class=\"form-group\">
                                ";
        // line 1235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1235, $this->source); })()), "dateDebut", [], "any", false, false, false, 1235), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 1236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1236, $this->source); })()), "dateDebut", [], "any", false, false, false, 1236), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1238
        yield "
                                <small class=\"form-text\">Date de début de votre objectif</small>
                                ";
        // line 1240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1240, $this->source); })()), "dateDebut", [], "any", false, false, false, 1240), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1244, $this->source); })()), "dateFin", [], "any", false, false, false, 1244), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 1245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1245, $this->source); })()), "dateFin", [], "any", false, false, false, 1245), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1247
        yield "
                                <small class=\"form-text\">Date limite pour atteindre votre objectif</small>
                                ";
        // line 1249
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1249, $this->source); })()), "dateFin", [], "any", false, false, false, 1249), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 1254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1254, $this->source); })()), "statut", [], "any", false, false, false, 1254), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 1255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1255, $this->source); })()), "statut", [], "any", false, false, false, 1255), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1257
        yield "
                            <small class=\"form-text\">État actuel de l'objectif</small>
                            ";
        // line 1259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1259, $this->source); })()), "statut", [], "any", false, false, false, 1259), 'errors');
        yield "
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-green\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/>
                                    <polyline points=\"17 21 17 13 7 13 7 21\"/><polyline points=\"7 3 7 8 15 8\"/>
                                </svg>
                                Créer l'objectif
                            </button>
                            <a href=\"";
        // line 1270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\" class=\"btn btn-outline\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M19 12H6M12 5l-7 7 7 7\"/>
                                </svg>
                                Annuler
                            </a>
                        </div>
                    
                    ";
        // line 1278
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1278, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>

            <!-- Tips Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">💡 Conseils pour réussir</h2>
                </div>
                <div class=\"card-content\">
                    <div class=\"tips-grid\">
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">🎯</div>
                            <h3 class=\"tip-title\">Soyez spécifique</h3>
                            <p class=\"tip-text\">Un objectif clair est plus facile à atteindre. Ex: \"Marcher 30min/jour\" plutôt que \"Faire plus de sport\".</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">📅</div>
                            <h3 class=\"tip-title\">Fixez des échéances</h3>
                            <p class=\"tip-text\">Une date limite crée de l'urgence et vous aide à rester concentré sur votre objectif.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">📈</div>
                            <h3 class=\"tip-title\">Enregistrez vos suivis</h3>
                            <p class=\"tip-text\">V os entrées de suivi calculent automatiquement votre score moyen.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">🎉</div>
                            <h3 class=\"tip-title\">Célébrez les succès</h3>
                            <p class=\"tip-text\">Récompensez-vous lorsque vous atteignez des étapes importantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Nouvel objectif page loaded');
            
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
                    if (this.getAttribute('type') === 'submit') return;
                    
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

            // Form validation
            const form = document.querySelector('.objectif-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const requiredFields = form.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.style.borderColor = 'var(--red-500)';
                            field.style.backgroundColor = 'var(--red-50)';
                        } else {
                            field.style.borderColor = '';
                            field.style.backgroundColor = '';
                        }
                    });
                    
                    // Check date validation
                    const dateDebut = form.querySelector('#objectif_sante_dateDebut');
                    const dateFin = form.querySelector('#objectif_sante_dateFin');
                    
                    if (dateDebut && dateFin && dateDebut.value && dateFin.value) {
                        const debut = new Date(dateDebut.value);
                        const fin = new Date(dateFin.value);
                        
                        if (fin < debut) {
                            isValid = false;
                            showErrorMsg('La date de fin doit être postérieure à la date de début');
                            dateFin.style.borderColor = 'var(--red-500)';
                            dateFin.style.backgroundColor = 'var(--red-50)';
                        }
                    }
                    
                    // Check valeurCible validation
                    const valeurCible = form.querySelector('#objectif_sante_valeurCible');
                    if (valeurCible && valeurCible.value) {
                        const valeur = parseInt(valeurCible.value);
                        if (isNaN(valeur) || valeur < 0 || valeur > 24) {
                            isValid = false;
                            showErrorMsg('La valeur cible doit être entre 0 et 24');
                            valeurCible.style.borderColor = 'var(--red-500)';
                            valeurCible.style.backgroundColor = 'var(--red-50)';
                        }
                    }
                    
                    if (!isValid) {
                        e.preventDefault();
                        showErrorMsg('Veuillez remplir correctement tous les champs obligatoires');
                    } else {
                        // Show loading state
                        const submitBtn = form.querySelector('button[type=\"submit\"]');
                        const originalHTML = submitBtn.innerHTML;
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '⏳ Création en cours...';
                    }
                });
            }

            // Date picker enhancements
            const dateInputs = document.querySelectorAll('input[type=\"date\"]');
            dateInputs.forEach(input => {
                input.addEventListener('change', function() {
                    if (this.value) {
                        this.style.borderColor = 'var(--green-400)';
                    }
                });
            });

            // Valeur cible input validation
            const valeurCibleInput = document.querySelector('#objectif_sante_valeurCible');
            if (valeurCibleInput) {
                valeurCibleInput.addEventListener('input', function() {
                    let value = parseInt(this.value) || 0;
                    if (value < 0) value = 0;
                    if (value > 24) value = 24;
                    this.value = value;
                });
            }

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

            // Prevent default for placeholder buttons
            const createTaskBtn = document.getElementById('createTaskBtn');
            const calendarBtn = document.getElementById('calendarBtn');
            const joinGroupsBtn = document.getElementById('joinGroupsBtn');
            
            if (createTaskBtn) {
                createTaskBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Task creation feature coming soon!');
                });
            }
            
            if (calendarBtn) {
                calendarBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Calendar view coming soon!');
                });
            }
            
            if (joinGroupsBtn) {
                joinGroupsBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Groups feature coming soon!');
                });
            }
        });

        // Function to show success message
        function showSuccessMsg(message) {
            const successMsg = document.createElement('div');
            successMsg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3); z-index: 9999; font-weight: 600; animation: slideIn 0.3s ease;';
            successMsg.innerHTML = '✓ ' + message;
            document.body.appendChild(successMsg);
            
            setTimeout(() => {
                successMsg.style.transition = 'opacity 0.3s ease';
                successMsg.style.opacity = '0';
                setTimeout(() => successMsg.remove(), 300);
            }, 4000);
        }

        function showErrorMsg(message) {
            const errorMsg = document.createElement('div');
            errorMsg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3); z-index: 9999; font-weight: 600; animation: slideIn 0.3s ease;';
            errorMsg.innerHTML = '✗ ' + message;
            document.body.appendChild(errorMsg);
            
            setTimeout(() => {
                errorMsg.style.transition = 'opacity 0.3s ease';
                errorMsg.style.opacity = '0';
                setTimeout(() => errorMsg.remove(), 300);
            }, 4000);
        }

        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideIn {
                from {
                    transform: translateX(400px);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
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
        return "Front/objectif_sante/new.html.twig";
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
        return array (  1486 => 1278,  1475 => 1270,  1461 => 1259,  1457 => 1257,  1455 => 1255,  1451 => 1254,  1443 => 1249,  1439 => 1247,  1437 => 1245,  1433 => 1244,  1426 => 1240,  1422 => 1238,  1420 => 1236,  1416 => 1235,  1407 => 1229,  1403 => 1227,  1401 => 1225,  1397 => 1224,  1388 => 1218,  1351 => 1183,  1347 => 1181,  1343 => 1179,  1341 => 1178,  1338 => 1177,  1336 => 1176,  1333 => 1175,  1331 => 1174,  1316 => 1171,  1313 => 1170,  1311 => 1168,  1306 => 1166,  1299 => 1162,  1295 => 1160,  1293 => 1158,  1289 => 1157,  1281 => 1152,  1277 => 1150,  1275 => 1147,  1271 => 1146,  1265 => 1143,  1255 => 1135,  1249 => 1134,  1239 => 1131,  1234 => 1129,  1230 => 1128,  1226 => 1127,  1222 => 1126,  1217 => 1125,  1212 => 1124,  1208 => 1123,  1198 => 1116,  1189 => 1110,  1168 => 1092,  1153 => 1080,  1143 => 1073,  1128 => 1061,  1119 => 1055,  1115 => 1054,  1111 => 1053,  1104 => 1049,  1100 => 1048,  1094 => 1045,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Nouvel Objectif Santé</title>
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
            height = 2px;
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

        /* Premium Card Design */
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

        /* Premium Form Design */
        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #374151;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group label::before {
            content: '';
            width: 6px;
            height: 6px;
            background: var(--red-400);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #d1d5db;
            border-radius: var(--radius-lg);
            background: #ffffff;
            color: #111827;
            font-size: 15px;
            font-weight: 500;
            transition: all var(--transition);
            font-family: inherit;
        }

        .form-control:hover {
            border-color: #9ca3af;
            background: #ffffff;
        }

        .form-control:focus {
            border-color: var(--red-500);
            background: white;
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
            outline: none;
            transform: translateY(-1px);
        }
        
        .form-control:disabled,
        .form-control[readonly] {
            background: var(--gray-100);
            border-color: var(--gray-200);
            cursor: not-allowed;
            opacity: 0.7;
        }
        
        .form-control:invalid:not(:placeholder-shown) {
            border-color: var(--red-400);
        }
        
        .form-control:valid:not(:placeholder-shown) {
            border-color: var(--green-400);
        }
        
        .form-text {
            display: block;
            margin-top: 6px;
            font-size: 13px;
            color: var(--gray-500);
            font-weight: 400;
        }
        
        .form-group.has-error .form-control {
            border-color: var(--red-500);
            background: var(--red-50);
        }
        
        .form-group.has-success .form-control {
            border-color: var(--green-500);
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

        .btn-outline {
            background: transparent;
            color: #374151;
            border-color: #d1d5db;
            font-weight: 500;
            box-shadow: none;
        }

        .btn-outline:hover {
            background: #f3f4f6;
            color: #111827;
            border-color: #9ca3af;
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .btn-profile {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 4px 16px rgba(102, 126, 234, 0.3);
        }

        .btn-profile:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            box-shadow: 0 8px 28px rgba(102, 126, 234, 0.4);
            transform: translateY(-3px);
        }

        .btn-profile:active {
            transform: translateY(-1px);
        }

        .quick-actions .btn-green {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 4px 16px rgba(16, 185, 129, 0.3);
        }

        .quick-actions .btn-green:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            box-shadow: 0 8px 28px rgba(16, 185, 129, 0.4);
            transform: translateY(-3px);
        }

        .btn-blue {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-700) 100%);
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.2);
        }

        .btn-blue:hover {
            background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-800) 100%);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
            transform: translateY(-3px);
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
            position: relative;
            overflow: hidden;
        }

        .tip-card::before {
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

        .tip-card:hover::before {
            opacity: 1;
        }

        .tip-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: rgba(229, 231, 235, 0.8);
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

        select.form-control {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 16px;
            padding-right: 50px;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 16px;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
            font-size: 14px;
            color: var(--gray-600);
        }

        .breadcrumb a {
            color: var(--blue-600);
            text-decoration: none;
            transition: all var(--transition);
        }

        .breadcrumb a:hover {
            color: var(--blue-700);
            text-decoration: underline;
        }

        .breadcrumb .separator {
            color: var(--gray-400);
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
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .tips-grid {
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

        /* Loading Animation */
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

        /* Focus States */
        *:focus-visible {
            outline: 2px solid var(--red-500);
            outline-offset: 2px;
            border-radius: var(--radius-sm);
        }

        /* Print Styles */
        @media print {
            .sidebar,
            .btn,
            .session-display {
                display: none;
            }
            
            .main {
                width: 100%;
                padding: 20px;
            }
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
                        <path d=\"M12 2v20\"/><path d=\"M2 12h20\"/>
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
                    <h1 class=\"h1\">Nouvel Objectif Santé</h1>
                    <p class=\"muted\">Définissez un nouvel objectif pour améliorer votre santé et bien-être</p>
                </div>
                <div class=\"session-display\">
                    <div>Session actuelle</div>
                    <div>{{ app.user ? app.user.email : 'student@esprit.tn' }}</div>
                </div>
            </header>

            <!-- Breadcrumb -->
            <div class=\"breadcrumb\">
                <a href=\"{{ path('front_objectif_sante_index') }}\">Mes Objectifs Santé</a>
                <span class=\"separator\">/</span>
                <span>Nouvel objectif</span>
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

            <!-- Form Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">Informations de l'objectif</h2>
                </div>
                <div class=\"card-content\">
                    {{ form_start(form, {'attr': {'class': 'objectif-form', 'novalidate': 'novalidate'}}) }}
                    
                        <div class=\"form-group\">
                            {{ form_label(form.titre, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.titre, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'Ex: Dormir 8 heures par nuit, Perdre 5kg, Courir 10km...'
                            }}) }}
                            <small class=\"form-text\">Donnez un titre clair et motivant à votre objectif</small>
                            {{ form_errors(form.titre) }}
                        </div>

                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;\">
                            <div class=\"form-group\">
                                {{ form_label(form.type, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.type, {'attr': {
                                    'class': 'form-control'
                                }}) }}
                                <small class=\"form-text\">Sélectionnez le type d'objectif</small>
                                {{ form_errors(form.type) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.valeurCible, null, {'label_attr': {'class': 'form-label'}}) }}
                                <div style=\"display:flex;align-items:center;gap:8px;\">
                                    {{ form_widget(form.valeurCible, {'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Ex: 8 (heures), 30 (minutes), 3 (repas)...'}}) }}
                                    <span id=\"valeurCible-unit\">{% if form.vars.data.type is defined %}{% if form.vars.data.type == 'SOMMEIL' %}heures{% elseif form.vars.data.type == 'SPORT' %}minutes{% elseif form.vars.data.type == 'ALIMENTATION' %}repas{% else %}{% endif %}{% endif %}</span>
                                </div>
                                <small class=\"form-text\" id=\"valeurCible-help-front\">
                                    {% if form.vars.data.type == 'SOMMEIL' %}
                                        Heures de sommeil par nuit (1-16 heures)
                                    {% elseif form.vars.data.type == 'SPORT' %}
                                        Minutes d'activité par jour (0-300 minutes)
                                    {% elseif form.vars.data.type == 'ALIMENTATION' %}
                                        Nombre de repas sains par jour (1-6 repas)
                                    {% else %}
                                        Valeur cible à atteindre
                                    {% endif %}
                                </small>
                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                  const typeSelect = document.getElementById('objectif_sante_type');
                                  const targetHelp = document.getElementById('valeurCible-help-front');
                                  const targetInput = document.getElementById('objectif_sante_valeurCible');
                                  const unitSpan = document.getElementById('valeurCible-unit');
                                  if (!typeSelect || !targetHelp || !targetInput) return;
                                  const map = {
                                    'SOMMEIL': {text: 'Heures de sommeil par nuit', min: 1, max: 16, unit: 'heures', placeholder: 'Ex: 8'},
                                    'SPORT': {text: 'Minutes d\\'activité par jour', min: 0, max: 300, unit: 'minutes', placeholder: 'Ex: 30'},
                                    'ALIMENTATION': {text: 'Nombre de repas sains par jour', min: 1, max: 6, unit: 'repas', placeholder: 'Ex: 3'},
                                    '': {text: 'Valeur cible à atteindre', placeholder: 'Ex: 8 (heures), 3 (repas), 30 (minutes)'}
                                  };
                                  function updateFrontHelp() {
                                    const t = typeSelect.value || '';
                                    const entry = map[t] || map[''];
                                    if (entry.min !== undefined && entry.max !== undefined && entry.unit) {
                                      targetHelp.textContent = `\${entry.text} (\${entry.min}–\${entry.max} \${entry.unit})`;
                                      targetInput.setAttribute('min', entry.min);
                                      targetInput.setAttribute('max', entry.max);
                                      if (unitSpan) unitSpan.textContent = entry.unit;
                                    } else {
                                      targetHelp.textContent = entry.text || map[''].text;
                                      targetInput.removeAttribute('min');
                                      targetInput.removeAttribute('max');
                                      if (unitSpan) unitSpan.textContent = '';
                                    }
                                    targetInput.placeholder = entry.placeholder || '';
                                  }
                                  typeSelect.addEventListener('change', updateFrontHelp);
                                  targetInput.addEventListener('focus', updateFrontHelp);
                                  if (document.readyState === 'complete') updateFrontHelp(); else window.addEventListener('load', updateFrontHelp);
                                });
                                </script>
                                {{ form_errors(form.valeurCible) }}
                            </div>
                        </div>

                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;\">
                            <div class=\"form-group\">
                                {{ form_label(form.priorite, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.priorite, {'attr': {
                                    'class': 'form-control'
                                }}) }}
                                <small class=\"form-text\">Définissez l'importance de cet objectif</small>
                                {{ form_errors(form.priorite) }}
                            </div>
                        </div>

                        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;\">
                            <div class=\"form-group\">
                                {{ form_label(form.dateDebut, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.dateDebut, {'attr': {
                                    'class': 'form-control'
                                }}) }}
                                <small class=\"form-text\">Date de début de votre objectif</small>
                                {{ form_errors(form.dateDebut) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.dateFin, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.dateFin, {'attr': {
                                    'class': 'form-control'
                                }}) }}
                                <small class=\"form-text\">Date limite pour atteindre votre objectif</small>
                                {{ form_errors(form.dateFin) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.statut, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.statut, {'attr': {
                                'class': 'form-control'
                            }}) }}
                            <small class=\"form-text\">État actuel de l'objectif</small>
                            {{ form_errors(form.statut) }}
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-green\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/>
                                    <polyline points=\"17 21 17 13 7 13 7 21\"/><polyline points=\"7 3 7 8 15 8\"/>
                                </svg>
                                Créer l'objectif
                            </button>
                            <a href=\"{{ path('front_objectif_sante_index') }}\" class=\"btn btn-outline\">
                                <svg style=\"width: 20px; height: 20px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M19 12H6M12 5l-7 7 7 7\"/>
                                </svg>
                                Annuler
                            </a>
                        </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>

            <!-- Tips Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">💡 Conseils pour réussir</h2>
                </div>
                <div class=\"card-content\">
                    <div class=\"tips-grid\">
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">🎯</div>
                            <h3 class=\"tip-title\">Soyez spécifique</h3>
                            <p class=\"tip-text\">Un objectif clair est plus facile à atteindre. Ex: \"Marcher 30min/jour\" plutôt que \"Faire plus de sport\".</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">📅</div>
                            <h3 class=\"tip-title\">Fixez des échéances</h3>
                            <p class=\"tip-text\">Une date limite crée de l'urgence et vous aide à rester concentré sur votre objectif.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">📈</div>
                            <h3 class=\"tip-title\">Enregistrez vos suivis</h3>
                            <p class=\"tip-text\">V os entrées de suivi calculent automatiquement votre score moyen.</p>
                        </div>
                        
                        <div class=\"tip-card\">
                            <div class=\"tip-icon\">🎉</div>
                            <h3 class=\"tip-title\">Célébrez les succès</h3>
                            <p class=\"tip-text\">Récompensez-vous lorsque vous atteignez des étapes importantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Nouvel objectif page loaded');
            
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
                    if (this.getAttribute('type') === 'submit') return;
                    
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

            // Form validation
            const form = document.querySelector('.objectif-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const requiredFields = form.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.style.borderColor = 'var(--red-500)';
                            field.style.backgroundColor = 'var(--red-50)';
                        } else {
                            field.style.borderColor = '';
                            field.style.backgroundColor = '';
                        }
                    });
                    
                    // Check date validation
                    const dateDebut = form.querySelector('#objectif_sante_dateDebut');
                    const dateFin = form.querySelector('#objectif_sante_dateFin');
                    
                    if (dateDebut && dateFin && dateDebut.value && dateFin.value) {
                        const debut = new Date(dateDebut.value);
                        const fin = new Date(dateFin.value);
                        
                        if (fin < debut) {
                            isValid = false;
                            showErrorMsg('La date de fin doit être postérieure à la date de début');
                            dateFin.style.borderColor = 'var(--red-500)';
                            dateFin.style.backgroundColor = 'var(--red-50)';
                        }
                    }
                    
                    // Check valeurCible validation
                    const valeurCible = form.querySelector('#objectif_sante_valeurCible');
                    if (valeurCible && valeurCible.value) {
                        const valeur = parseInt(valeurCible.value);
                        if (isNaN(valeur) || valeur < 0 || valeur > 24) {
                            isValid = false;
                            showErrorMsg('La valeur cible doit être entre 0 et 24');
                            valeurCible.style.borderColor = 'var(--red-500)';
                            valeurCible.style.backgroundColor = 'var(--red-50)';
                        }
                    }
                    
                    if (!isValid) {
                        e.preventDefault();
                        showErrorMsg('Veuillez remplir correctement tous les champs obligatoires');
                    } else {
                        // Show loading state
                        const submitBtn = form.querySelector('button[type=\"submit\"]');
                        const originalHTML = submitBtn.innerHTML;
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '⏳ Création en cours...';
                    }
                });
            }

            // Date picker enhancements
            const dateInputs = document.querySelectorAll('input[type=\"date\"]');
            dateInputs.forEach(input => {
                input.addEventListener('change', function() {
                    if (this.value) {
                        this.style.borderColor = 'var(--green-400)';
                    }
                });
            });

            // Valeur cible input validation
            const valeurCibleInput = document.querySelector('#objectif_sante_valeurCible');
            if (valeurCibleInput) {
                valeurCibleInput.addEventListener('input', function() {
                    let value = parseInt(this.value) || 0;
                    if (value < 0) value = 0;
                    if (value > 24) value = 24;
                    this.value = value;
                });
            }

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

            // Prevent default for placeholder buttons
            const createTaskBtn = document.getElementById('createTaskBtn');
            const calendarBtn = document.getElementById('calendarBtn');
            const joinGroupsBtn = document.getElementById('joinGroupsBtn');
            
            if (createTaskBtn) {
                createTaskBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Task creation feature coming soon!');
                });
            }
            
            if (calendarBtn) {
                calendarBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Calendar view coming soon!');
                });
            }
            
            if (joinGroupsBtn) {
                joinGroupsBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Groups feature coming soon!');
                });
            }
        });

        // Function to show success message
        function showSuccessMsg(message) {
            const successMsg = document.createElement('div');
            successMsg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3); z-index: 9999; font-weight: 600; animation: slideIn 0.3s ease;';
            successMsg.innerHTML = '✓ ' + message;
            document.body.appendChild(successMsg);
            
            setTimeout(() => {
                successMsg.style.transition = 'opacity 0.3s ease';
                successMsg.style.opacity = '0';
                setTimeout(() => successMsg.remove(), 300);
            }, 4000);
        }

        function showErrorMsg(message) {
            const errorMsg = document.createElement('div');
            errorMsg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3); z-index: 9999; font-weight: 600; animation: slideIn 0.3s ease;';
            errorMsg.innerHTML = '✗ ' + message;
            document.body.appendChild(errorMsg);
            
            setTimeout(() => {
                errorMsg.style.transition = 'opacity 0.3s ease';
                errorMsg.style.opacity = '0';
                setTimeout(() => errorMsg.remove(), 300);
            }, 4000);
        }

        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideIn {
                from {
                    transform: translateX(400px);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>", "Front/objectif_sante/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\objectif_sante\\new.html.twig");
    }
}
