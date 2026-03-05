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

/* user/add_task.html.twig */
class __TwigTemplate_8df50e9d3b683f9eccbbb061bf52dcb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/add_task.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/add_task.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — ";
        // line 7
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit") : ("Add"));
        yield " Task</title>
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

        .main {
            flex: 1;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 48px;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
        }

        .h1 {
            font-size: 42px;
            font-weight: 800;
            margin: 0;
            color: #111827;
        }

        .muted {
            color: #6b7280;
            margin-top: 10px;
            font-size: 16px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--gray-600);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all var(--transition);
        }

        .back-link:hover {
            background: var(--gray-100);
            color: var(--gray-900);
        }

        .form-container {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-md);
            padding: 40px;
        }

        .form-grid {
            display: grid;
            gap: 24px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .form-group label .required {
            color: var(--red-500);
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
        }

        .form-control:focus {
            border-color: var(--red-500);
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
            outline: none;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        select.form-control {
            cursor: pointer;
        }

        .form-text {
            font-size: 13px;
            color: var(--gray-500);
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }

        .btn-group {
            display: flex;
            gap: 16px;
            margin-top: 32px;
        }

        .btn {
            padding: 16px 32px;
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

        .btn-secondary {
            background: transparent;
            color: var(--gray-700);
            border: 2px solid var(--gray-300);
        }

        .btn-secondary:hover {
            background: var(--gray-100);
            border-color: var(--gray-400);
        }

        .btn-danger {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--red-700) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        .btn-danger:hover {
            background: linear-gradient(135deg, var(--red-600) 0%, var(--red-800) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.3);
        }

        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
        }

        /* Error styles */
        .form-error {
            color: var(--red-500);
            font-size: 12px;
            margin-top: 4px;
            display: block;
        }

        .form-error ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .d-none {
            display: none !important;
        }

        @media (max-width: 1024px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            
            .app-shell {
                flex-direction: column;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .main {
                padding: 24px;
            }

            .form-container {
                padding: 28px;
            }

            .btn-group {
                flex-direction: column;
            }

            .btn-group .btn {
                width: 100%;
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
                        <div class=\"brand-sub\">Student Assistant</div>
                    </div>
                </div>
            </div>

            <div class=\"user-session\">
                <div class=\"user-info\">
                    <div class=\"avatar\">
                        ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 474, $this->source); })()), "user", [], "any", false, false, false, 474), "nom", [], "any", false, false, false, 474)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 474, $this->source); })()), "user", [], "any", false, false, false, 474), "prenom", [], "any", false, false, false, 474)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 477, $this->source); })()), "user", [], "any", false, false, false, 477), "nom", [], "any", false, false, false, 477), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 477, $this->source); })()), "user", [], "any", false, false, false, 477), "prenom", [], "any", false, false, false, 477), "html", null, true);
        yield "</h3>
                        <p>📚 ";
        // line 478
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 478, $this->source); })()), "user", [], "any", false, false, false, 478), "classe", [], "any", false, false, false, 478))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 478, $this->source); })()), "user", [], "any", false, false, false, 478), "classe", [], "any", false, false, false, 478), "nom", [], "any", false, false, false, 478), "html", null, true)) : ("No Class"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 482, $this->source); })()), "user", [], "any", false, false, false, 482), "email", [], "any", false, false, false, 482), "html", null, true);
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 483, $this->source); })()), "user", [], "any", false, false, false, 483), "roles", [], "any", false, false, false, 483), 0, [], "array", false, false, false, 483), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <a href=\"";
        // line 488
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"";
        // line 494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    My Tasks
                </a>
                <a href=\"";
        // line 500
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"";
        // line 507
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>

        <main class=\"main\">
            <header class=\"header\">
                <div>
                    <h1 class=\"h1\">";
        // line 519
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 519, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit Task") : ("Add New Task"));
        yield "</h1>
                    <p class=\"muted\">";
        // line 520
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 520, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Update your task details") : ("Create a new task to keep track of your work"));
        yield "</p>
                </div>
                <a href=\"";
        // line 522
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\" class=\"back-link\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Back to Tasks
                </a>
            </header>

            <div class=\"form-container\">
                ";
        // line 531
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 531, $this->source); })()), 'form_start', ["attr" => ["id" => "taskForm", "novalidate" => "novalidate"]]);
        yield "
                    <div class=\"form-grid\">
                        ";
        // line 534
        yield "                        <div class=\"form-group\">
                            ";
        // line 535
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 535, $this->source); })()), "titre", [], "any", false, false, false, 535), 'label', ["label" => "Task Title *"]);
        yield "
                            ";
        // line 536
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 536, $this->source); })()), "titre", [], "any", false, false, false, 536), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Complete homework assignment"]]);
        // line 541
        yield "
                            <small class=\"form-text\">Give your task a clear, descriptive title</small>
                            <div class=\"form-error\">
                                ";
        // line 544
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "titre", [], "any", false, false, false, 544), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 549
        yield "                        <div class=\"form-group\">
                            ";
        // line 550
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 550, $this->source); })()), "description", [], "any", false, false, false, 550), 'label');
        yield "
                            ";
        // line 551
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 551, $this->source); })()), "description", [], "any", false, false, false, 551), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Add more details about this task...", "rows" => 4]]);
        // line 557
        yield "
                            <small class=\"form-text\">Optional: Add any additional information</small>
                            <div class=\"form-error\">
                                ";
        // line 560
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), "description", [], "any", false, false, false, 560), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 565
        yield "                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                ";
        // line 567
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), "type", [], "any", false, false, false, 567), 'label', ["label" => "Task Type *"]);
        yield "
                                ";
        // line 568
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 568, $this->source); })()), "type", [], "any", false, false, false, 568), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 570
        yield "
                                <div class=\"form-error\">
                                    ";
        // line 572
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 572, $this->source); })()), "type", [], "any", false, false, false, 572), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 577
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 577, $this->source); })()), "priorite", [], "any", false, false, false, 577), 'label', ["label" => "Priority *"]);
        yield "
                                ";
        // line 578
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 578, $this->source); })()), "priorite", [], "any", false, false, false, 578), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 580
        yield "
                                <div class=\"form-error\">
                                    ";
        // line 582
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 582, $this->source); })()), "priorite", [], "any", false, false, false, 582), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 588
        yield "                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                ";
        // line 590
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "dateDebut", [], "any", false, false, false, 590), 'label', ["label" => "Start Date *"]);
        yield "
                                ";
        // line 591
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 591, $this->source); })()), "dateDebut", [], "any", false, false, false, 591), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 593
        yield "
                                <small class=\"form-text\">When will you start this task?</small>
                                <div class=\"form-error\">
                                    ";
        // line 596
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 596, $this->source); })()), "dateDebut", [], "any", false, false, false, 596), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 601
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 601, $this->source); })()), "dateFin", [], "any", false, false, false, 601), 'label', ["label" => "End Date *"]);
        yield "
                                ";
        // line 602
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 602, $this->source); })()), "dateFin", [], "any", false, false, false, 602), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 604
        yield "
                                <small class=\"form-text\">When will you finish this task?</small>
                                <div class=\"form-error\">
                                    ";
        // line 607
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 607, $this->source); })()), "dateFin", [], "any", false, false, false, 607), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 613
        yield "                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                ";
        // line 615
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })()), "dateEcheance", [], "any", false, false, false, 615), 'label', ["label" => "Due Date"]);
        yield "
                                ";
        // line 616
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 616, $this->source); })()), "dateEcheance", [], "any", false, false, false, 616), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 618
        yield "
                                <small class=\"form-text\">Optional: Official deadline date</small>
                                <div class=\"form-error\">
                                    ";
        // line 621
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 621, $this->source); })()), "dateEcheance", [], "any", false, false, false, 621), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 626
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()), "statut", [], "any", false, false, false, 626), 'label', ["label" => "Status *"]);
        yield "
                                ";
        // line 627
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 627, $this->source); })()), "statut", [], "any", false, false, false, 627), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 629
        yield "
                                <div class=\"form-error\">
                                    ";
        // line 631
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 631, $this->source); })()), "statut", [], "any", false, false, false, 631), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 637
        yield "                        <div class=\"form-group\">
                            ";
        // line 638
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 638, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 638), 'label', ["label" => "Estimated Duration (minutes)"]);
        yield "
                            ";
        // line 639
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 639, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 639), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 60", "type" => "number"]]);
        // line 645
        yield "
                            <small class=\"form-text\">How many minutes do you estimate this task will take?</small>
                            <div class=\"form-error\">
                                ";
        // line 648
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 648, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 648), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/>
                                <polyline points=\"17 21 17 13 7 13 7 21\"/>
                                <polyline points=\"7 3 7 8 15 8\"/>
                            </svg>
                            ";
        // line 660
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 660, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Update Task") : ("Create Task"));
        yield "
                        </button>
                        
                        ";
        // line 663
        if ((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 663, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 664
            yield "                            <button type=\"button\" onclick=\"confirmDelete()\" class=\"btn btn-danger\">
                                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M3 6h18\"/><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6\"/>
                                    <path d=\"M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                                </svg>
                                Delete Task
                            </button>
                        ";
        }
        // line 672
        yield "                        
                        <a href=\"";
        // line 673
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\" class=\"btn btn-secondary\">
                            Cancel
                        </a>
                    </div>
                ";
        // line 677
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 677, $this->source); })()), 'form_end');
        yield "

                ";
        // line 679
        if ((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 679, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 680
            yield "                    <form id=\"deleteForm\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 680, $this->source); })()), "id", [], "any", false, false, false, 680)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-none\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 681
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 681, $this->source); })()), "id", [], "any", false, false, false, 681))), "html", null, true);
            yield "\">
                    </form>
                ";
        }
        // line 684
        yield "            </div>
        </main>
    </div>

    <script>
        // Set minimum date to today for the dateDebut field
        document.addEventListener('DOMContentLoaded', function() {
            const dateDebutInput = document.getElementById('";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 691, $this->source); })()), "dateDebut", [], "any", false, false, false, 691), "vars", [], "any", false, false, false, 691), "id", [], "any", false, false, false, 691), "html", null, true);
        yield "');
            const dateFinInput = document.getElementById('";
        // line 692
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 692, $this->source); })()), "dateFin", [], "any", false, false, false, 692), "vars", [], "any", false, false, false, 692), "id", [], "any", false, false, false, 692), "html", null, true);
        yield "');
            
            if (dateDebutInput) {
                const now = new Date();
                now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                const dateTimeString = now.toISOString().slice(0, 16);
                dateDebutInput.setAttribute('min', dateTimeString);
                
                // Set default value to now if empty
                if (!dateDebutInput.value) {
                    dateDebutInput.value = dateTimeString;
                }
            }

            if (dateFinInput) {
                const now = new Date();
                now.setHours(now.getHours() + 1);
                now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                const dateTimeString = now.toISOString().slice(0, 16);
                
                if (!dateFinInput.value) {
                    dateFinInput.value = dateTimeString;
                }
            }

            // Add real-time form validation
            const formInputs = document.querySelectorAll('#taskForm input, #taskForm select, #taskForm textarea');
            formInputs.forEach(input => {
                input.addEventListener('blur', function() {
                    validateField(this);
                });
                
                input.addEventListener('input', function() {
                    clearFieldError(this);
                });
            });

            // Form submission feedback
            const form = document.getElementById('taskForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const submitBtn = this.querySelector('button[type=\"submit\"]');
                    const originalHTML = submitBtn.innerHTML;
                    
                    // Validate required fields
                    const requiredFields = this.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.style.borderColor = 'var(--red-500)';
                            
                            // Create error message if not exists
                            const formGroup = field.closest('.form-group');
                            if (formGroup && !formGroup.querySelector('.field-error')) {
                                const errorMsg = document.createElement('small');
                                errorMsg.className = 'field-error';
                                errorMsg.style.cssText = 'color: var(--red-500); font-size: 12px; margin-top: 4px; display: block;';
                                errorMsg.textContent = '✗ This field is required';
                                formGroup.appendChild(errorMsg);
                            }
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                        showErrorMsg('Please fill in all required fields');
                        return;
                    }
                    
                    // Show loading state
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"animation: spin 1s linear infinite;\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M12 6v6l4 2\"/></svg> ";
        // line 765
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 765, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Updating...") : ("Creating..."));
        yield "';
                });
            }
        });

        function validateField(field) {
            const value = field.value.trim();
            const fieldName = field.name || field.id;
            
            clearFieldError(field);
            
            if (field.required && !value) {
                showFieldError(field, 'This field is required');
                return false;
            }
            
            switch(fieldName) {
                case '";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 782, $this->source); })()), "titre", [], "any", false, false, false, 782), "vars", [], "any", false, false, false, 782), "id", [], "any", false, false, false, 782), "html", null, true);
        yield "':
                    if (value.length < 3) {
                        showFieldError(field, 'Title must be at least 3 characters');
                        return false;
                    }
                    if (value.length > 100) {
                        showFieldError(field, 'Title cannot exceed 100 characters');
                        return false;
                    }
                    break;
                case '";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 792, $this->source); })()), "dateDebut", [], "any", false, false, false, 792), "vars", [], "any", false, false, false, 792), "id", [], "any", false, false, false, 792), "html", null, true);
        yield "':
                    const startDate = new Date(value);
                    const now = new Date();
                    
                    if (startDate < now) {
                        showFieldError(field, 'Start date cannot be in the past');
                        return false;
                    }
                    break;
                case '";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 801, $this->source); })()), "dateFin", [], "any", false, false, false, 801), "vars", [], "any", false, false, false, 801), "id", [], "any", false, false, false, 801), "html", null, true);
        yield "':
                    const endDate = new Date(value);
                    const startDateInput = document.getElementById('";
        // line 803
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 803, $this->source); })()), "dateDebut", [], "any", false, false, false, 803), "vars", [], "any", false, false, false, 803), "id", [], "any", false, false, false, 803), "html", null, true);
        yield "');
                    if (startDateInput) {
                        const startDateValue = new Date(startDateInput.value);
                        if (endDate <= startDateValue) {
                            showFieldError(field, 'End date must be after start date');
                            return false;
                        }
                        
                        // Check max 10 hours
                        const diffMs = endDate - startDateValue;
                        const diffHours = diffMs / (1000 * 60 * 60);
                        if (diffHours > 10) {
                            showFieldError(field, 'Task cannot last more than 10 hours');
                            return false;
                        }
                    }
                    break;
                case '";
        // line 820
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 820, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 820), "vars", [], "any", false, false, false, 820), "id", [], "any", false, false, false, 820), "html", null, true);
        yield "':
                    if (value && (parseInt(value) < 1 || parseInt(value) > 1440)) {
                        showFieldError(field, 'Duration must be between 1 and 1440 minutes');
                        return false;
                    }
                    break;
            }
            
            return true;
        }

        function showFieldError(field, message) {
            const formGroup = field.closest('.form-group');
            if (!formGroup) return;
            
            // Remove existing error
            const existingError = formGroup.querySelector('.field-error');
            if (existingError) existingError.remove();
            
            // Add error message
            const errorMsg = document.createElement('small');
            errorMsg.className = 'field-error';
            errorMsg.style.cssText = 'color: var(--red-500); font-size: 12px; margin-top: 4px; display: block;';
            errorMsg.textContent = '✗ ' + message;
            
            formGroup.appendChild(errorMsg);
            field.style.borderColor = 'var(--red-500)';
        }

        function clearFieldError(field) {
            const formGroup = field.closest('.form-group');
            if (!formGroup) return;
            
            const existingError = formGroup.querySelector('.field-error');
            if (existingError) existingError.remove();
            
            field.style.borderColor = '';
        }

        function showErrorMsg(message) {
            const msg = document.createElement('div');
            msg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3); z-index: 9999; font-weight: 600; max-width: 400px; animation: slideIn 0.3s ease;';
            msg.innerHTML = '✗ ' + message;
            document.body.appendChild(msg);
            
            setTimeout(() => {
                msg.style.transition = 'opacity 0.3s ease';
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 300);
            }, 4000);
        }

        function showSuccessMsg(message) {
            const msg = document.createElement('div');
            msg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3); z-index: 9999; font-weight: 600; animation: slideIn 0.3s ease;';
            msg.innerHTML = '✓ ' + message;
            document.body.appendChild(msg);
            
            setTimeout(() => {
                msg.style.transition = 'opacity 0.3s ease';
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 300);
            }, 4000);
        }


        function confirmDelete() {
            if (confirm('Are you sure you want to delete this task? This action cannot be undone.')) {
                var form = document.getElementById('deleteForm');
                if (form) form.submit();
            }
        }

        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
            
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
        return "user/add_task.html.twig";
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
        return array (  1025 => 820,  1005 => 803,  1000 => 801,  988 => 792,  975 => 782,  955 => 765,  879 => 692,  875 => 691,  866 => 684,  860 => 681,  855 => 680,  853 => 679,  848 => 677,  841 => 673,  838 => 672,  828 => 664,  826 => 663,  820 => 660,  805 => 648,  800 => 645,  798 => 639,  794 => 638,  791 => 637,  783 => 631,  779 => 629,  777 => 627,  773 => 626,  765 => 621,  760 => 618,  758 => 616,  754 => 615,  750 => 613,  742 => 607,  737 => 604,  735 => 602,  731 => 601,  723 => 596,  718 => 593,  716 => 591,  712 => 590,  708 => 588,  700 => 582,  696 => 580,  694 => 578,  690 => 577,  682 => 572,  678 => 570,  676 => 568,  672 => 567,  668 => 565,  661 => 560,  656 => 557,  654 => 551,  650 => 550,  647 => 549,  640 => 544,  635 => 541,  633 => 536,  629 => 535,  626 => 534,  621 => 531,  609 => 522,  604 => 520,  600 => 519,  585 => 507,  575 => 500,  566 => 494,  557 => 488,  549 => 483,  545 => 482,  538 => 478,  532 => 477,  525 => 474,  55 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user/add_task.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — {{ is_edit ? 'Edit' : 'Add' }} Task</title>
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

        .main {
            flex: 1;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 48px;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(229, 231, 235, 0.4);
        }

        .h1 {
            font-size: 42px;
            font-weight: 800;
            margin: 0;
            color: #111827;
        }

        .muted {
            color: #6b7280;
            margin-top: 10px;
            font-size: 16px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--gray-600);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all var(--transition);
        }

        .back-link:hover {
            background: var(--gray-100);
            color: var(--gray-900);
        }

        .form-container {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%);
            border-radius: var(--radius-xl);
            border: 1px solid rgba(229, 231, 235, 0.6);
            box-shadow: var(--shadow-md);
            padding: 40px;
        }

        .form-grid {
            display: grid;
            gap: 24px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .form-group label .required {
            color: var(--red-500);
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
        }

        .form-control:focus {
            border-color: var(--red-500);
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
            outline: none;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        select.form-control {
            cursor: pointer;
        }

        .form-text {
            font-size: 13px;
            color: var(--gray-500);
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }

        .btn-group {
            display: flex;
            gap: 16px;
            margin-top: 32px;
        }

        .btn {
            padding: 16px 32px;
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

        .btn-secondary {
            background: transparent;
            color: var(--gray-700);
            border: 2px solid var(--gray-300);
        }

        .btn-secondary:hover {
            background: var(--gray-100);
            border-color: var(--gray-400);
        }

        .btn-danger {
            background: linear-gradient(135deg, var(--red-500) 0%, var(--red-700) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }

        .btn-danger:hover {
            background: linear-gradient(135deg, var(--red-600) 0%, var(--red-800) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.3);
        }

        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
        }

        /* Error styles */
        .form-error {
            color: var(--red-500);
            font-size: 12px;
            margin-top: 4px;
            display: block;
        }

        .form-error ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .d-none {
            display: none !important;
        }

        @media (max-width: 1024px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            
            .app-shell {
                flex-direction: column;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .main {
                padding: 24px;
            }

            .form-container {
                padding: 28px;
            }

            .btn-group {
                flex-direction: column;
            }

            .btn-group .btn {
                width: 100%;
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
                        <div class=\"brand-sub\">Student Assistant</div>
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
                        <p>📚 {{ app.user.classe is not null ? app.user.classe.nom : 'No Class' }}</p>
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
                <a href=\"{{ path('app_my_tasks') }}\" class=\"active\">
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
                <a href=\"{{ path('app_logout') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Logout
                </a>
            </nav>
        </aside>

        <main class=\"main\">
            <header class=\"header\">
                <div>
                    <h1 class=\"h1\">{{ is_edit ? 'Edit Task' : 'Add New Task' }}</h1>
                    <p class=\"muted\">{{ is_edit ? 'Update your task details' : 'Create a new task to keep track of your work' }}</p>
                </div>
                <a href=\"{{ path('app_my_tasks') }}\" class=\"back-link\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Back to Tasks
                </a>
            </header>

            <div class=\"form-container\">
                {{ form_start(form, {'attr': {'id': 'taskForm', 'novalidate': 'novalidate'}}) }}
                    <div class=\"form-grid\">
                        {# Task Title #}
                        <div class=\"form-group\">
                            {{ form_label(form.titre, 'Task Title *') }}
                            {{ form_widget(form.titre, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'e.g., Complete homework assignment'
                                }
                            }) }}
                            <small class=\"form-text\">Give your task a clear, descriptive title</small>
                            <div class=\"form-error\">
                                {{ form_errors(form.titre) }}
                            </div>
                        </div>

                        {# Description #}
                        <div class=\"form-group\">
                            {{ form_label(form.description) }}
                            {{ form_widget(form.description, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Add more details about this task...',
                                    'rows': 4
                                }
                            }) }}
                            <small class=\"form-text\">Optional: Add any additional information</small>
                            <div class=\"form-error\">
                                {{ form_errors(form.description) }}
                            </div>
                        </div>

                        {# Task Type and Priority #}
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                {{ form_label(form.type, 'Task Type *') }}
                                {{ form_widget(form.type, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <div class=\"form-error\">
                                    {{ form_errors(form.type) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.priorite, 'Priority *') }}
                                {{ form_widget(form.priorite, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <div class=\"form-error\">
                                    {{ form_errors(form.priorite) }}
                                </div>
                            </div>
                        </div>

                        {# Start Date and End Date #}
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                {{ form_label(form.dateDebut, 'Start Date *') }}
                                {{ form_widget(form.dateDebut, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <small class=\"form-text\">When will you start this task?</small>
                                <div class=\"form-error\">
                                    {{ form_errors(form.dateDebut) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.dateFin, 'End Date *') }}
                                {{ form_widget(form.dateFin, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <small class=\"form-text\">When will you finish this task?</small>
                                <div class=\"form-error\">
                                    {{ form_errors(form.dateFin) }}
                                </div>
                            </div>
                        </div>

                        {# Due Date and Status #}
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                {{ form_label(form.dateEcheance, 'Due Date') }}
                                {{ form_widget(form.dateEcheance, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <small class=\"form-text\">Optional: Official deadline date</small>
                                <div class=\"form-error\">
                                    {{ form_errors(form.dateEcheance) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.statut, 'Status *') }}
                                {{ form_widget(form.statut, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <div class=\"form-error\">
                                    {{ form_errors(form.statut) }}
                                </div>
                            </div>
                        </div>

                        {# Estimated Duration #}
                        <div class=\"form-group\">
                            {{ form_label(form.dureeEstimee, 'Estimated Duration (minutes)') }}
                            {{ form_widget(form.dureeEstimee, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'e.g., 60',
                                    'type': 'number'
                                }
                            }) }}
                            <small class=\"form-text\">How many minutes do you estimate this task will take?</small>
                            <div class=\"form-error\">
                                {{ form_errors(form.dureeEstimee) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/>
                                <polyline points=\"17 21 17 13 7 13 7 21\"/>
                                <polyline points=\"7 3 7 8 15 8\"/>
                            </svg>
                            {{ is_edit ? 'Update Task' : 'Create Task' }}
                        </button>
                        
                        {% if is_edit %}
                            <button type=\"button\" onclick=\"confirmDelete()\" class=\"btn btn-danger\">
                                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M3 6h18\"/><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6\"/>
                                    <path d=\"M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                                </svg>
                                Delete Task
                            </button>
                        {% endif %}
                        
                        <a href=\"{{ path('app_my_tasks') }}\" class=\"btn btn-secondary\">
                            Cancel
                        </a>
                    </div>
                {{ form_end(form) }}

                {% if is_edit %}
                    <form id=\"deleteForm\" action=\"{{ path('app_tache_delete', {'id': task.id}) }}\" method=\"POST\" class=\"d-none\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ task.id) }}\">
                    </form>
                {% endif %}
            </div>
        </main>
    </div>

    <script>
        // Set minimum date to today for the dateDebut field
        document.addEventListener('DOMContentLoaded', function() {
            const dateDebutInput = document.getElementById('{{ form.dateDebut.vars.id }}');
            const dateFinInput = document.getElementById('{{ form.dateFin.vars.id }}');
            
            if (dateDebutInput) {
                const now = new Date();
                now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                const dateTimeString = now.toISOString().slice(0, 16);
                dateDebutInput.setAttribute('min', dateTimeString);
                
                // Set default value to now if empty
                if (!dateDebutInput.value) {
                    dateDebutInput.value = dateTimeString;
                }
            }

            if (dateFinInput) {
                const now = new Date();
                now.setHours(now.getHours() + 1);
                now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                const dateTimeString = now.toISOString().slice(0, 16);
                
                if (!dateFinInput.value) {
                    dateFinInput.value = dateTimeString;
                }
            }

            // Add real-time form validation
            const formInputs = document.querySelectorAll('#taskForm input, #taskForm select, #taskForm textarea');
            formInputs.forEach(input => {
                input.addEventListener('blur', function() {
                    validateField(this);
                });
                
                input.addEventListener('input', function() {
                    clearFieldError(this);
                });
            });

            // Form submission feedback
            const form = document.getElementById('taskForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const submitBtn = this.querySelector('button[type=\"submit\"]');
                    const originalHTML = submitBtn.innerHTML;
                    
                    // Validate required fields
                    const requiredFields = this.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.style.borderColor = 'var(--red-500)';
                            
                            // Create error message if not exists
                            const formGroup = field.closest('.form-group');
                            if (formGroup && !formGroup.querySelector('.field-error')) {
                                const errorMsg = document.createElement('small');
                                errorMsg.className = 'field-error';
                                errorMsg.style.cssText = 'color: var(--red-500); font-size: 12px; margin-top: 4px; display: block;';
                                errorMsg.textContent = '✗ This field is required';
                                formGroup.appendChild(errorMsg);
                            }
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                        showErrorMsg('Please fill in all required fields');
                        return;
                    }
                    
                    // Show loading state
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"animation: spin 1s linear infinite;\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M12 6v6l4 2\"/></svg> {{ is_edit ? 'Updating...' : 'Creating...' }}';
                });
            }
        });

        function validateField(field) {
            const value = field.value.trim();
            const fieldName = field.name || field.id;
            
            clearFieldError(field);
            
            if (field.required && !value) {
                showFieldError(field, 'This field is required');
                return false;
            }
            
            switch(fieldName) {
                case '{{ form.titre.vars.id }}':
                    if (value.length < 3) {
                        showFieldError(field, 'Title must be at least 3 characters');
                        return false;
                    }
                    if (value.length > 100) {
                        showFieldError(field, 'Title cannot exceed 100 characters');
                        return false;
                    }
                    break;
                case '{{ form.dateDebut.vars.id }}':
                    const startDate = new Date(value);
                    const now = new Date();
                    
                    if (startDate < now) {
                        showFieldError(field, 'Start date cannot be in the past');
                        return false;
                    }
                    break;
                case '{{ form.dateFin.vars.id }}':
                    const endDate = new Date(value);
                    const startDateInput = document.getElementById('{{ form.dateDebut.vars.id }}');
                    if (startDateInput) {
                        const startDateValue = new Date(startDateInput.value);
                        if (endDate <= startDateValue) {
                            showFieldError(field, 'End date must be after start date');
                            return false;
                        }
                        
                        // Check max 10 hours
                        const diffMs = endDate - startDateValue;
                        const diffHours = diffMs / (1000 * 60 * 60);
                        if (diffHours > 10) {
                            showFieldError(field, 'Task cannot last more than 10 hours');
                            return false;
                        }
                    }
                    break;
                case '{{ form.dureeEstimee.vars.id }}':
                    if (value && (parseInt(value) < 1 || parseInt(value) > 1440)) {
                        showFieldError(field, 'Duration must be between 1 and 1440 minutes');
                        return false;
                    }
                    break;
            }
            
            return true;
        }

        function showFieldError(field, message) {
            const formGroup = field.closest('.form-group');
            if (!formGroup) return;
            
            // Remove existing error
            const existingError = formGroup.querySelector('.field-error');
            if (existingError) existingError.remove();
            
            // Add error message
            const errorMsg = document.createElement('small');
            errorMsg.className = 'field-error';
            errorMsg.style.cssText = 'color: var(--red-500); font-size: 12px; margin-top: 4px; display: block;';
            errorMsg.textContent = '✗ ' + message;
            
            formGroup.appendChild(errorMsg);
            field.style.borderColor = 'var(--red-500)';
        }

        function clearFieldError(field) {
            const formGroup = field.closest('.form-group');
            if (!formGroup) return;
            
            const existingError = formGroup.querySelector('.field-error');
            if (existingError) existingError.remove();
            
            field.style.borderColor = '';
        }

        function showErrorMsg(message) {
            const msg = document.createElement('div');
            msg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3); z-index: 9999; font-weight: 600; max-width: 400px; animation: slideIn 0.3s ease;';
            msg.innerHTML = '✗ ' + message;
            document.body.appendChild(msg);
            
            setTimeout(() => {
                msg.style.transition = 'opacity 0.3s ease';
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 300);
            }, 4000);
        }

        function showSuccessMsg(message) {
            const msg = document.createElement('div');
            msg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3); z-index: 9999; font-weight: 600; animation: slideIn 0.3s ease;';
            msg.innerHTML = '✓ ' + message;
            document.body.appendChild(msg);
            
            setTimeout(() => {
                msg.style.transition = 'opacity 0.3s ease';
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 300);
            }, 4000);
        }


        function confirmDelete() {
            if (confirm('Are you sure you want to delete this task? This action cannot be undone.')) {
                var form = document.getElementById('deleteForm');
                if (form) form.submit();
            }
        }

        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
            
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
</html>", "user/add_task.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\add_task.html.twig");
    }
}
