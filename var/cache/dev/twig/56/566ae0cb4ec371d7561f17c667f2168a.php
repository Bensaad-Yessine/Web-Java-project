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

/* user/edit_task.html.twig */
class __TwigTemplate_56c4c3c7f65def2e185313af49a3aa4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_task.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_task.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — ";
        // line 6
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvelle"));
        yield " Tâche</title>
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
                        <div class=\"brand-sub\">Assistant Étudiant</div>
                    </div>
                </div>
            </div>

            <div class=\"user-session\">
                <div class=\"user-info\">
                    <div class=\"avatar\">
                        ";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 473, $this->source); })()), "user", [], "any", false, false, false, 473), "nom", [], "any", false, false, false, 473)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 473, $this->source); })()), "user", [], "any", false, false, false, 473), "prenom", [], "any", false, false, false, 473)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 476, $this->source); })()), "user", [], "any", false, false, false, 476), "nom", [], "any", false, false, false, 476), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 476, $this->source); })()), "user", [], "any", false, false, false, 476), "prenom", [], "any", false, false, false, 476), "html", null, true);
        yield "</h3>
                        <p>📚 ";
        // line 477
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 477, $this->source); })()), "user", [], "any", false, false, false, 477), "classe", [], "any", false, false, false, 477))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 477, $this->source); })()), "user", [], "any", false, false, false, 477), "classe", [], "any", false, false, false, 477), "nom", [], "any", false, false, false, 477), "html", null, true)) : ("Aucune classe"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 481, $this->source); })()), "user", [], "any", false, false, false, 481), "email", [], "any", false, false, false, 481), "html", null, true);
        yield "</div>
                    <div><strong>Rôle:</strong> ";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 482, $this->source); })()), "user", [], "any", false, false, false, 482), "roles", [], "any", false, false, false, 482), 0, [], "array", false, false, false, 482), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <a href=\"";
        // line 487
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Tableau de bord
                </a>
                <a href=\"";
        // line 493
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    Mes Tâches
                </a>
                <a href=\"";
        // line 499
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profil
                </a>
                <a href=\"";
        // line 506
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Déconnexion
                </a>
            </nav>
        </aside>

        <main class=\"main\">
            <header class=\"header\">
                <div>
                    <h1 class=\"h1\">";
        // line 518
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 518, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la tâche") : ("Nouvelle tâche"));
        yield "</h1>
                    <p class=\"muted\">";
        // line 519
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 519, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettez à jour les informations de votre tâche") : ("Créez une nouvelle tâche pour mieux organiser votre travail"));
        yield "</p>
                </div>
                <a href=\"";
        // line 521
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\" class=\"back-link\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Retour aux Tâches
                </a>
            </header>

            <div class=\"form-container\">
                ";
        // line 530
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 530, $this->source); })()), 'form_start', ["attr" => ["id" => "taskForm", "novalidate" => "novalidate"]]);
        yield "
                    <div class=\"form-grid\">
                        ";
        // line 533
        yield "                        <div class=\"form-group\">
                            ";
        // line 534
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), "titre", [], "any", false, false, false, 534), 'label', ["label" => "Titre de la tâche *"]);
        yield "
                            ";
        // line 535
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 535, $this->source); })()), "titre", [], "any", false, false, false, 535), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Révision pour l'examen de mathématiques"]]);
        // line 540
        yield "
                            <small class=\"form-text\">Donnez un titre clair et descriptif à votre tâche</small>
                            <div class=\"form-error\">
                                ";
        // line 543
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 543, $this->source); })()), "titre", [], "any", false, false, false, 543), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 548
        yield "                        <div class=\"form-group\">
                            ";
        // line 549
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 549, $this->source); })()), "description", [], "any", false, false, false, 549), 'label', ["label" => "Description"]);
        yield "
                            ";
        // line 550
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 550, $this->source); })()), "description", [], "any", false, false, false, 550), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Décrivez en détail ce que cette tâche implique...", "rows" => 4]]);
        // line 556
        yield "
                            <small class=\"form-text\">Optionnel : Ajoutez des détails ou des instructions supplémentaires</small>
                            <div class=\"form-error\">
                                ";
        // line 559
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 559, $this->source); })()), "description", [], "any", false, false, false, 559), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 564
        yield "                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                ";
        // line 566
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "type", [], "any", false, false, false, 566), 'label', ["label" => "Type de tâche *"]);
        yield "
                                ";
        // line 567
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), "type", [], "any", false, false, false, 567), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 569
        yield "
                                <div class=\"form-error\">
                                    ";
        // line 571
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 571, $this->source); })()), "type", [], "any", false, false, false, 571), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 576
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 576, $this->source); })()), "priorite", [], "any", false, false, false, 576), 'label', ["label" => "Priorité *"]);
        yield "
                                ";
        // line 577
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 577, $this->source); })()), "priorite", [], "any", false, false, false, 577), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 579
        yield "
                                <div class=\"form-error\">
                                    ";
        // line 581
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 581, $this->source); })()), "priorite", [], "any", false, false, false, 581), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 587
        yield "                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                ";
        // line 589
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 589, $this->source); })()), "dateDebut", [], "any", false, false, false, 589), 'label', ["label" => "Date de début *"]);
        yield "
                                ";
        // line 590
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "dateDebut", [], "any", false, false, false, 590), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 592
        yield "
                                <small class=\"form-text\">Quand commencerez-vous cette tâche ?</small>
                                <div class=\"form-error\">
                                    ";
        // line 595
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 595, $this->source); })()), "dateDebut", [], "any", false, false, false, 595), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 600
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 600, $this->source); })()), "dateFin", [], "any", false, false, false, 600), 'label', ["label" => "Date de fin *"]);
        yield "
                                ";
        // line 601
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 601, $this->source); })()), "dateFin", [], "any", false, false, false, 601), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 603
        yield "
                                <small class=\"form-text\">Quand terminerez-vous cette tâche ?</small>
                                <div class=\"form-error\">
                                    ";
        // line 606
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 606, $this->source); })()), "dateFin", [], "any", false, false, false, 606), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 612
        yield "                        <div class=\"form-row\">

                            <div class=\"form-group\">
                                ";
        // line 615
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })()), "statut", [], "any", false, false, false, 615), 'label', ["label" => "Statut *"]);
        yield "
                                ";
        // line 616
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 616, $this->source); })()), "statut", [], "any", false, false, false, 616), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 618
        yield "
                                <div class=\"form-error\">
                                    ";
        // line 620
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 620, $this->source); })()), "statut", [], "any", false, false, false, 620), 'errors');
        yield "
                                </div>
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
        // line 635
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 635, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer la tâche"));
        yield "
                        </button>
                        
                        ";
        // line 638
        if ((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 638, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 639
            yield "                            <button type=\"button\" onclick=\"confirmDelete()\" class=\"btn btn-danger\">
                                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M3 6h18\"/><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6\"/>
                                    <path d=\"M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                                </svg>
                                Supprimer
                            </button>
                        ";
        }
        // line 647
        yield "                        
                        <a href=\"";
        // line 648
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\" class=\"btn btn-secondary\">
                            Annuler
                        </a>
                    </div>
                ";
        // line 652
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 652, $this->source); })()), 'form_end');
        yield "

                ";
        // line 654
        if ((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 654, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 655
            yield "                    <form id=\"deleteForm\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 655, $this->source); })()), "id", [], "any", false, false, false, 655)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-none\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 656
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 656, $this->source); })()), "id", [], "any", false, false, false, 656))), "html", null, true);
            yield "\">
                    </form>
                ";
        }
        // line 659
        yield "            </div>
        </main>
    </div>

    <script>

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
            if (confirm('Êtes-vous sûr de vouloir supprimer cette tâche ? Cette action est irréversible.')) {
                var form = document.getElementById('deleteForm');
                if (form) form.submit();
            }
        }

        // Ajouter des animations
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
        return "user/edit_task.html.twig";
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
        return array (  829 => 659,  823 => 656,  818 => 655,  816 => 654,  811 => 652,  804 => 648,  801 => 647,  791 => 639,  789 => 638,  783 => 635,  765 => 620,  761 => 618,  759 => 616,  755 => 615,  750 => 612,  742 => 606,  737 => 603,  735 => 601,  731 => 600,  723 => 595,  718 => 592,  716 => 590,  712 => 589,  708 => 587,  700 => 581,  696 => 579,  694 => 577,  690 => 576,  682 => 571,  678 => 569,  676 => 567,  672 => 566,  668 => 564,  661 => 559,  656 => 556,  654 => 550,  650 => 549,  647 => 548,  640 => 543,  635 => 540,  633 => 535,  629 => 534,  626 => 533,  621 => 530,  609 => 521,  604 => 519,  600 => 518,  585 => 506,  575 => 499,  566 => 493,  557 => 487,  549 => 482,  545 => 481,  538 => 477,  532 => 476,  525 => 473,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — {{ is_edit ? 'Modifier' : 'Nouvelle' }} Tâche</title>
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
                    <div><strong>Rôle:</strong> {{ app.user.roles[0]|replace({'ROLE_': ''})|capitalize }}</div>
                </div>
            </div>

            <nav class=\"nav\">
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
            </nav>
        </aside>

        <main class=\"main\">
            <header class=\"header\">
                <div>
                    <h1 class=\"h1\">{{ is_edit ? 'Modifier la tâche' : 'Nouvelle tâche' }}</h1>
                    <p class=\"muted\">{{ is_edit ? 'Mettez à jour les informations de votre tâche' : 'Créez une nouvelle tâche pour mieux organiser votre travail' }}</p>
                </div>
                <a href=\"{{ path('app_my_tasks') }}\" class=\"back-link\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M19 12H5\"/><path d=\"M12 19l-7-7 7-7\"/>
                    </svg>
                    Retour aux Tâches
                </a>
            </header>

            <div class=\"form-container\">
                {{ form_start(form, {'attr': {'id': 'taskForm', 'novalidate': 'novalidate'}}) }}
                    <div class=\"form-grid\">
                        {# Titre de la tâche #}
                        <div class=\"form-group\">
                            {{ form_label(form.titre, 'Titre de la tâche *') }}
                            {{ form_widget(form.titre, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Ex: Révision pour l\\'examen de mathématiques'
                                }
                            }) }}
                            <small class=\"form-text\">Donnez un titre clair et descriptif à votre tâche</small>
                            <div class=\"form-error\">
                                {{ form_errors(form.titre) }}
                            </div>
                        </div>

                        {# Description #}
                        <div class=\"form-group\">
                            {{ form_label(form.description, 'Description') }}
                            {{ form_widget(form.description, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Décrivez en détail ce que cette tâche implique...',
                                    'rows': 4
                                }
                            }) }}
                            <small class=\"form-text\">Optionnel : Ajoutez des détails ou des instructions supplémentaires</small>
                            <div class=\"form-error\">
                                {{ form_errors(form.description) }}
                            </div>
                        </div>

                        {# Type et Priorité #}
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                {{ form_label(form.type, 'Type de tâche *') }}
                                {{ form_widget(form.type, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <div class=\"form-error\">
                                    {{ form_errors(form.type) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.priorite, 'Priorité *') }}
                                {{ form_widget(form.priorite, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <div class=\"form-error\">
                                    {{ form_errors(form.priorite) }}
                                </div>
                            </div>
                        </div>

                        {# Date de début et de fin #}
                        <div class=\"form-row\">
                            <div class=\"form-group\">
                                {{ form_label(form.dateDebut, 'Date de début *') }}
                                {{ form_widget(form.dateDebut, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <small class=\"form-text\">Quand commencerez-vous cette tâche ?</small>
                                <div class=\"form-error\">
                                    {{ form_errors(form.dateDebut) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.dateFin, 'Date de fin *') }}
                                {{ form_widget(form.dateFin, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <small class=\"form-text\">Quand terminerez-vous cette tâche ?</small>
                                <div class=\"form-error\">
                                    {{ form_errors(form.dateFin) }}
                                </div>
                            </div>
                        </div>

                        {# Date d'échéance et Statut #}
                        <div class=\"form-row\">

                            <div class=\"form-group\">
                                {{ form_label(form.statut, 'Statut *') }}
                                {{ form_widget(form.statut, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                                <div class=\"form-error\">
                                    {{ form_errors(form.statut) }}
                                </div>
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
                            {{ is_edit ? 'Mettre à jour' : 'Créer la tâche' }}
                        </button>
                        
                        {% if is_edit %}
                            <button type=\"button\" onclick=\"confirmDelete()\" class=\"btn btn-danger\">
                                <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <path d=\"M3 6h18\"/><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6\"/>
                                    <path d=\"M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                                </svg>
                                Supprimer
                            </button>
                        {% endif %}
                        
                        <a href=\"{{ path('app_my_tasks') }}\" class=\"btn btn-secondary\">
                            Annuler
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
            if (confirm('Êtes-vous sûr de vouloir supprimer cette tâche ? Cette action est irréversible.')) {
                var form = document.getElementById('deleteForm');
                if (form) form.submit();
            }
        }

        // Ajouter des animations
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
</html>", "user/edit_task.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\edit_task.html.twig");
    }
}
