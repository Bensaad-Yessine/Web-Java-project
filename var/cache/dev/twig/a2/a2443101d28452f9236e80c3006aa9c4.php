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

/* preference_alerte/editAlertFO.html.twig */
class __TwigTemplate_3fedff93bb1a0b0ce61671bda64ebd1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/editAlertFO.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/editAlertFO.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Modifier Préférence d'Alerte</title>
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
            --blue-600: #2563eb;
            --green-500: #22c55e;
            --purple-500: #8b5cf6;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.12);
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

        /* SIDEBAR */
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
            max-width: 1200px;
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

        /* FORM CONTAINER */
        .form-container {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-lg);
            padding: 40px;
            margin-bottom: 32px;
            animation: fadeIn 0.4s ease-out;
        }

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

        .form-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .form-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .form-header p {
            color: var(--gray-500);
            font-size: 16px;
        }

        /* FORM STYLES */
        .form-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
            margin-bottom: 40px;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 24px;
            }
        }

        .form-section {
            background: white;
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            padding: 32px;
            transition: all var(--transition);
        }

        .form-section:hover {
            border-color: var(--blue-500);
            box-shadow: var(--shadow-md);
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title svg {
            width: 20px;
            height: 20px;
            color: var(--blue-500);
        }

        /* FORM GROUP */
        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--gray-700);
            font-size: 14px;
        }

        .form-group .hint {
            display: block;
            margin-top: 4px;
            font-size: 12px;
            color: var(--gray-500);
        }

        /* INPUT STYLES */
        input[type=\"text\"],
        input[type=\"number\"],
        input[type=\"time\"],
        select,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--gray-200);
            border-radius: 12px;
            font-family: inherit;
            font-size: 15px;
            color: var(--gray-900);
            background: white;
            transition: all var(--transition);
        }

        input[type=\"text\"]:focus,
        input[type=\"number\"]:focus,
        input[type=\"time\"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: var(--blue-500);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        input[type=\"text\"]:hover,
        input[type=\"number\"]:hover,
        input[type=\"time\"]:hover,
        select:hover {
            border-color: var(--gray-300);
        }

        /* CHECKBOX STYLES */
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid var(--gray-200);
            background: white;
            transition: all var(--transition);
            cursor: pointer;
        }

        .checkbox-item:hover {
            border-color: var(--blue-500);
            background: rgba(59, 130, 246, 0.02);
        }

        .checkbox-item input[type=\"checkbox\"] {
            width: 20px;
            height: 20px;
            border-radius: 6px;
            border: 2px solid var(--gray-300);
            cursor: pointer;
            transition: all var(--transition);
        }

        .checkbox-item input[type=\"checkbox\"]:checked {
            background-color: var(--blue-500);
            border-color: var(--blue-500);
            background-image: url(\"data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e\");
        }

        .checkbox-item .checkbox-label {
            flex: 1;
            font-weight: 500;
            color: var(--gray-700);
        }

        .checkbox-item .checkbox-description {
            font-size: 13px;
            color: var(--gray-500);
            margin-top: 2px;
        }

        /* SWITCH STYLES */
        .switch-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px;
            border-radius: 12px;
            border: 1px solid var(--gray-200);
            background: white;
            transition: all var(--transition);
        }

        .switch-group:hover {
            border-color: var(--blue-500);
            background: rgba(59, 130, 246, 0.02);
        }

        .switch-label {
            font-weight: 500;
            color: var(--gray-700);
        }

        .switch-description {
            font-size: 13px;
            color: var(--gray-500);
            margin-top: 4px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 52px;
            height: 28px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--gray-300);
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: \"\";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: var(--blue-500);
        }

        input:checked + .slider:before {
            transform: translateX(24px);
        }

        /* TIME INPUTS */
        .time-inputs {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 16px;
            align-items: center;
        }

        .time-separator {
            color: var(--gray-500);
            font-weight: 600;
            font-size: 18px;
        }

        /* FORM ACTIONS */
        .form-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            margin-top: 40px;
            padding-top: 32px;
            border-top: 1px solid var(--gray-200);
        }

        .btn {
            padding: 16px 32px;
            border-radius: var(--radius-lg);
            border: none;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
            min-width: 140px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-600) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: var(--gray-700);
            border: 2px solid var(--gray-300);
        }

        .btn-secondary:hover {
            background: var(--gray-100);
            border-color: var(--gray-400);
        }

        .btn-cancel {
            background: transparent;
            color: var(--red-600);
            border: 2px solid var(--red-200);
        }

        .btn-cancel:hover {
            background: rgba(239, 68, 68, 0.1);
            border-color: var(--red-300);
        }

        /* ERROR MESSAGES */
        .error-message {
            color: var(--red-600);
            font-size: 13px;
            margin-top: 4px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .error-message::before {
            content: \"⚠\";
        }

        /* FORM VALIDATION STATES */
        .form-group.error input,
        .form-group.error select {
            border-color: var(--red-500);
        }

        .form-group.success input,
        .form-group.success select {
            border-color: var(--green-500);
        }

        /* RESPONSIVE */
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
            
            .form-container {
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
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <!-- SIDEBAR -->
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
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 700, $this->source); })()), "user", [], "any", false, false, false, 700), "nom", [], "any", false, false, false, 700)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 700, $this->source); })()), "user", [], "any", false, false, false, 700), "prenom", [], "any", false, false, false, 700)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 703, $this->source); })()), "user", [], "any", false, false, false, 703), "nom", [], "any", false, false, false, 703), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 703, $this->source); })()), "user", [], "any", false, false, false, 703), "prenom", [], "any", false, false, false, 703), "html", null, true);
        yield "</h3>
                        <p>📚 ";
        // line 704
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 704, $this->source); })()), "user", [], "any", false, false, false, 704), "classe", [], "any", false, false, false, 704))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 704, $this->source); })()), "user", [], "any", false, false, false, 704), "classe", [], "any", false, false, false, 704), "nom", [], "any", false, false, false, 704), "html", null, true)) : ("Aucune classe"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 708, $this->source); })()), "user", [], "any", false, false, false, 708), "email", [], "any", false, false, false, 708), "html", null, true);
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 709
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 709, $this->source); })()), "user", [], "any", false, false, false, 709), "roles", [], "any", false, false, false, 709), 0, [], "array", false, false, false, 709), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <a href=\"";
        // line 714
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"";
        // line 720
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    Mes Tâches
                </a>
                <a href=\"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_preference_alerte_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 726, $this->source); })()), "user", [], "any", false, false, false, 726), "id", [], "any", false, false, false, 726)]), "html", null, true);
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/>
                        <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/>
                    </svg>
                    Alertes
                </a>
                <a href=\"";
        // line 733
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"";
        // line 740
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT -->
        <main class=\"main\">
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>";
        // line 753
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 753, $this->source); })()), "id", [], "any", false, false, false, 753)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Créer"));
        yield " Préférence</h1>
                    <p>";
        // line 754
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 754, $this->source); })()), "id", [], "any", false, false, false, 754)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifiez les paramètres de votre préférence d'alerte") : ("Configurez une nouvelle préférence d'alerte"));
        yield "</p>
                </div>
                <a href=\"";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_preference_alerte_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 756, $this->source); })()), "user", [], "any", false, false, false, 756), "id", [], "any", false, false, false, 756)]), "html", null, true);
        yield "\" class=\"back-link\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Retour aux Préférences
                </a>
            </header>

            <div class=\"form-container\">
                <div class=\"form-header\">
                    <h2>";
        // line 766
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 766, $this->source); })()), "nom", [], "any", false, false, false, 766)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 766, $this->source); })()), "nom", [], "any", false, false, false, 766), "html", null, true)) : ("Nouvelle Préférence"));
        yield "</h2>
                    <p>Remplissez les champs ci-dessous pour configurer vos préférences de notification</p>
                </div>

                ";
        // line 770
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 770, $this->source); })()), 'form_start', ["attr" => ["class" => "preference-form"]]);
        yield "
                
                <div class=\"form-row\">
                    <!-- Basic Information Section -->
                    <div class=\"form-section\">
                        <h3 class=\"section-title\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M12 16v-4\"/><path d=\"M12 8h.01\"/>
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            </svg>
                            Informations Générales
                        </h3>

                        <div class=\"form-group\">
                            ";
        // line 784
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 784, $this->source); })()), "nom", [], "any", false, false, false, 784), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 785
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 785, $this->source); })()), "nom", [], "any", false, false, false, 785), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Préférence de cours"]]);
        // line 788
        yield "
                            ";
        // line 789
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 789, $this->source); })()), "nom", [], "any", false, false, false, 789), 'errors');
        yield "
                            <span class=\"hint\">Donnez un nom descriptif à cette préférence</span>
                        </div>

                        <div class=\"switch-group\">
    <div>
        <div class=\"switch-label\">";
        // line 795
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 795, $this->source); })()), "isActive", [], "any", false, false, false, 795), 'label');
        yield "</div>
        <div class=\"switch-description\">Active ou désactive cette préférence</div>
    </div>
    <label class=\"switch\">
        ";
        // line 799
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 799, $this->source); })()), "isActive", [], "any", false, false, false, 799), 'widget');
        yield "
        <span class=\"slider\"></span>
    </label>
    <div class=\"error-message\">
        ";
        // line 803
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 803, $this->source); })()), "isActive", [], "any", false, false, false, 803), 'errors');
        yield "
    </div>
</div>

                    </div>

                    <!-- Notification Channels Section -->
                    <div class=\"form-section\">
                        <h3 class=\"section-title\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/>
                                <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/>
                            </svg>
                            Canaux de Notification
                        </h3>

                        <div class=\"checkbox-group\">
                            <label class=\"checkbox-item\">
                                ";
        // line 821
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 821, $this->source); })()), "emailActif", [], "any", false, false, false, 821), 'widget');
        yield "
                                <div>
                                    <div class=\"checkbox-label\">Notifications par Email</div>
                                    <div class=\"checkbox-description\">Recevez les alertes par email</div>
                                </div>
                            </label>

                            <label class=\"checkbox-item\">
                                ";
        // line 829
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 829, $this->source); })()), "pushActif", [], "any", false, false, false, 829), 'widget');
        yield "
                                <div>
                                    <div class=\"checkbox-label\">Notifications Push</div>
                                    <div class=\"checkbox-description\">Alertes sur votre appareil mobile</div>
                                </div>
                            </label>

                            <label class=\"checkbox-item\">
                                ";
        // line 837
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 837, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 837), 'widget');
        yield "
                                <div>
                                    <div class=\"checkbox-label\">Notifications sur le Site</div>
                                    <div class=\"checkbox-description\">Alertes directement sur le site web</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Reminder Settings Section -->
                <div class=\"form-section\" style=\"margin-bottom: 40px;\">
                    <h3 class=\"section-title\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            <polyline points=\"12 6 12 12 16 14\"/>
                        </svg>
                        Paramètres de Rappel
                    </h3>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 859
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 859, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 859), 'label');
        yield "
                            ";
        // line 860
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 860, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 860), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 15"]]);
        // line 863
        yield "
                            ";
        // line 864
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 864, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 864), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            <label>Période de Silence</label>
                            <div class=\"time-inputs\">
                                ";
        // line 870
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 870), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 872
        yield "
                                <span class=\"time-separator\">à</span>
                                ";
        // line 874
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 874, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 874), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 876
        yield "
                            </div>
                            ";
        // line 878
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 878, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 878), 'errors');
        yield "
                            ";
        // line 879
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 879, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 879), 'errors');
        yield "
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/>
                            <polyline points=\"17 21 17 13 7 13 7 21\"/><polyline points=\"7 3 7 8 15 8\"/>
                        </svg>
                        ";
        // line 891
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 891, $this->source); })()), "id", [], "any", false, false, false, 891)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer"));
        yield "
                    </button>

                    <a href=\"";
        // line 894
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_preference_alerte_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 894, $this->source); })()), "user", [], "any", false, false, false, 894), "id", [], "any", false, false, false, 894)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                        </svg>
                        Annuler
                    </a>

                    ";
        // line 901
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 901, $this->source); })()), "id", [], "any", false, false, false, 901) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 901, $this->source); })()), "isDefault", [], "any", false, false, false, 901))) {
            // line 902
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 902, $this->source); })()), "id", [], "any", false, false, false, 902)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-cancel\"
                           onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette préférence ?');\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 6h18\"/><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6\"/>
                                <path d=\"M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                            </svg>
                            Supprimer
                        </a>
                    ";
        }
        // line 912
        yield "                </div>

                ";
        // line 914
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 914, $this->source); })()), 'form_end');
        yield "
            </div>
        </main>
    </div>


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
        return "preference_alerte/editAlertFO.html.twig";
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
        return array (  1066 => 914,  1062 => 912,  1048 => 902,  1046 => 901,  1036 => 894,  1030 => 891,  1015 => 879,  1011 => 878,  1007 => 876,  1005 => 874,  1001 => 872,  999 => 870,  990 => 864,  987 => 863,  985 => 860,  981 => 859,  956 => 837,  945 => 829,  934 => 821,  913 => 803,  906 => 799,  899 => 795,  890 => 789,  887 => 788,  885 => 785,  881 => 784,  864 => 770,  857 => 766,  844 => 756,  839 => 754,  835 => 753,  819 => 740,  809 => 733,  799 => 726,  790 => 720,  781 => 714,  773 => 709,  769 => 708,  762 => 704,  756 => 703,  749 => 700,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Modifier Préférence d'Alerte</title>
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
            --blue-600: #2563eb;
            --green-500: #22c55e;
            --purple-500: #8b5cf6;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.12);
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

        /* SIDEBAR */
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
            max-width: 1200px;
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

        /* FORM CONTAINER */
        .form-container {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 250, 251, 0.95) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-lg);
            padding: 40px;
            margin-bottom: 32px;
            animation: fadeIn 0.4s ease-out;
        }

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

        .form-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .form-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .form-header p {
            color: var(--gray-500);
            font-size: 16px;
        }

        /* FORM STYLES */
        .form-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
            margin-bottom: 40px;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 24px;
            }
        }

        .form-section {
            background: white;
            border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200);
            padding: 32px;
            transition: all var(--transition);
        }

        .form-section:hover {
            border-color: var(--blue-500);
            box-shadow: var(--shadow-md);
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title svg {
            width: 20px;
            height: 20px;
            color: var(--blue-500);
        }

        /* FORM GROUP */
        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--gray-700);
            font-size: 14px;
        }

        .form-group .hint {
            display: block;
            margin-top: 4px;
            font-size: 12px;
            color: var(--gray-500);
        }

        /* INPUT STYLES */
        input[type=\"text\"],
        input[type=\"number\"],
        input[type=\"time\"],
        select,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--gray-200);
            border-radius: 12px;
            font-family: inherit;
            font-size: 15px;
            color: var(--gray-900);
            background: white;
            transition: all var(--transition);
        }

        input[type=\"text\"]:focus,
        input[type=\"number\"]:focus,
        input[type=\"time\"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: var(--blue-500);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        input[type=\"text\"]:hover,
        input[type=\"number\"]:hover,
        input[type=\"time\"]:hover,
        select:hover {
            border-color: var(--gray-300);
        }

        /* CHECKBOX STYLES */
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid var(--gray-200);
            background: white;
            transition: all var(--transition);
            cursor: pointer;
        }

        .checkbox-item:hover {
            border-color: var(--blue-500);
            background: rgba(59, 130, 246, 0.02);
        }

        .checkbox-item input[type=\"checkbox\"] {
            width: 20px;
            height: 20px;
            border-radius: 6px;
            border: 2px solid var(--gray-300);
            cursor: pointer;
            transition: all var(--transition);
        }

        .checkbox-item input[type=\"checkbox\"]:checked {
            background-color: var(--blue-500);
            border-color: var(--blue-500);
            background-image: url(\"data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e\");
        }

        .checkbox-item .checkbox-label {
            flex: 1;
            font-weight: 500;
            color: var(--gray-700);
        }

        .checkbox-item .checkbox-description {
            font-size: 13px;
            color: var(--gray-500);
            margin-top: 2px;
        }

        /* SWITCH STYLES */
        .switch-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px;
            border-radius: 12px;
            border: 1px solid var(--gray-200);
            background: white;
            transition: all var(--transition);
        }

        .switch-group:hover {
            border-color: var(--blue-500);
            background: rgba(59, 130, 246, 0.02);
        }

        .switch-label {
            font-weight: 500;
            color: var(--gray-700);
        }

        .switch-description {
            font-size: 13px;
            color: var(--gray-500);
            margin-top: 4px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 52px;
            height: 28px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--gray-300);
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: \"\";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: var(--blue-500);
        }

        input:checked + .slider:before {
            transform: translateX(24px);
        }

        /* TIME INPUTS */
        .time-inputs {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 16px;
            align-items: center;
        }

        .time-separator {
            color: var(--gray-500);
            font-weight: 600;
            font-size: 18px;
        }

        /* FORM ACTIONS */
        .form-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            margin-top: 40px;
            padding-top: 32px;
            border-top: 1px solid var(--gray-200);
        }

        .btn {
            padding: 16px 32px;
            border-radius: var(--radius-lg);
            border: none;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
            min-width: 140px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--blue-500) 0%, var(--blue-600) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: var(--gray-700);
            border: 2px solid var(--gray-300);
        }

        .btn-secondary:hover {
            background: var(--gray-100);
            border-color: var(--gray-400);
        }

        .btn-cancel {
            background: transparent;
            color: var(--red-600);
            border: 2px solid var(--red-200);
        }

        .btn-cancel:hover {
            background: rgba(239, 68, 68, 0.1);
            border-color: var(--red-300);
        }

        /* ERROR MESSAGES */
        .error-message {
            color: var(--red-600);
            font-size: 13px;
            margin-top: 4px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .error-message::before {
            content: \"⚠\";
        }

        /* FORM VALIDATION STATES */
        .form-group.error input,
        .form-group.error select {
            border-color: var(--red-500);
        }

        .form-group.success input,
        .form-group.success select {
            border-color: var(--green-500);
        }

        /* RESPONSIVE */
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
            
            .form-container {
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
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <!-- SIDEBAR -->
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
                <a href=\"{{ path('front_preference_alerte_show', {'id': app.user.id}) }}\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/>
                        <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/>
                    </svg>
                    Alertes
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

        <!-- MAIN CONTENT -->
        <main class=\"main\">
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>{{ preference_alerte.id ? 'Modifier' : 'Créer' }} Préférence</h1>
                    <p>{{ preference_alerte.id ? 'Modifiez les paramètres de votre préférence d\\'alerte' : 'Configurez une nouvelle préférence d\\'alerte' }}</p>
                </div>
                <a href=\"{{ path('front_preference_alerte_show', {'id': app.user.id}) }}\" class=\"back-link\">
                    <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Retour aux Préférences
                </a>
            </header>

            <div class=\"form-container\">
                <div class=\"form-header\">
                    <h2>{{ preference_alerte.nom ?: 'Nouvelle Préférence' }}</h2>
                    <p>Remplissez les champs ci-dessous pour configurer vos préférences de notification</p>
                </div>

                {{ form_start(form, {'attr': {'class': 'preference-form'}}) }}
                
                <div class=\"form-row\">
                    <!-- Basic Information Section -->
                    <div class=\"form-section\">
                        <h3 class=\"section-title\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M12 16v-4\"/><path d=\"M12 8h.01\"/>
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            </svg>
                            Informations Générales
                        </h3>

                        <div class=\"form-group\">
                            {{ form_label(form.nom, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.nom, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'Ex: Préférence de cours'
                            }}) }}
                            {{ form_errors(form.nom) }}
                            <span class=\"hint\">Donnez un nom descriptif à cette préférence</span>
                        </div>

                        <div class=\"switch-group\">
    <div>
        <div class=\"switch-label\">{{ form_label(form.isActive) }}</div>
        <div class=\"switch-description\">Active ou désactive cette préférence</div>
    </div>
    <label class=\"switch\">
        {{ form_widget(form.isActive) }}
        <span class=\"slider\"></span>
    </label>
    <div class=\"error-message\">
        {{ form_errors(form.isActive) }}
    </div>
</div>

                    </div>

                    <!-- Notification Channels Section -->
                    <div class=\"form-section\">
                        <h3 class=\"section-title\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/>
                                <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/>
                            </svg>
                            Canaux de Notification
                        </h3>

                        <div class=\"checkbox-group\">
                            <label class=\"checkbox-item\">
                                {{ form_widget(form.emailActif) }}
                                <div>
                                    <div class=\"checkbox-label\">Notifications par Email</div>
                                    <div class=\"checkbox-description\">Recevez les alertes par email</div>
                                </div>
                            </label>

                            <label class=\"checkbox-item\">
                                {{ form_widget(form.pushActif) }}
                                <div>
                                    <div class=\"checkbox-label\">Notifications Push</div>
                                    <div class=\"checkbox-description\">Alertes sur votre appareil mobile</div>
                                </div>
                            </label>

                            <label class=\"checkbox-item\">
                                {{ form_widget(form.siteNotifActive) }}
                                <div>
                                    <div class=\"checkbox-label\">Notifications sur le Site</div>
                                    <div class=\"checkbox-description\">Alertes directement sur le site web</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Reminder Settings Section -->
                <div class=\"form-section\" style=\"margin-bottom: 40px;\">
                    <h3 class=\"section-title\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            <polyline points=\"12 6 12 12 16 14\"/>
                        </svg>
                        Paramètres de Rappel
                    </h3>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            {{ form_label(form.delaiRappelMin) }}
                            {{ form_widget(form.delaiRappelMin, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'Ex: 15'
                            }}) }}
                            {{ form_errors(form.delaiRappelMin) }}
                        </div>

                        <div class=\"form-group\">
                            <label>Période de Silence</label>
                            <div class=\"time-inputs\">
                                {{ form_widget(form.heureSilenceDebut, {'attr': {
                                    'class': 'form-control'
                                }}) }}
                                <span class=\"time-separator\">à</span>
                                {{ form_widget(form.heureSilenceFin, {'attr': {
                                    'class': 'form-control'
                                }}) }}
                            </div>
                            {{ form_errors(form.heureSilenceDebut) }}
                            {{ form_errors(form.heureSilenceFin) }}
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/>
                            <polyline points=\"17 21 17 13 7 13 7 21\"/><polyline points=\"7 3 7 8 15 8\"/>
                        </svg>
                        {{ preference_alerte.id ? 'Mettre à jour' : 'Créer' }}
                    </button>

                    <a href=\"{{ path('front_preference_alerte_show', {'id': app.user.id}) }}\" class=\"btn btn-secondary\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                        </svg>
                        Annuler
                    </a>

                    {% if preference_alerte.id and not preference_alerte.isDefault %}
                        <a href=\"{{ path('app_preference_alerte_delete', {'id': preference_alerte.id}) }}\" 
                           class=\"btn btn-cancel\"
                           onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette préférence ?');\">
                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M3 6h18\"/><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6\"/>
                                <path d=\"M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                            </svg>
                            Supprimer
                        </a>
                    {% endif %}
                </div>

                {{ form_end(form) }}
            </div>
        </main>
    </div>


</body>
</html>", "preference_alerte/editAlertFO.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\preference_alerte\\editAlertFO.html.twig");
    }
}
