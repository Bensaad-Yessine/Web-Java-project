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

/* user/profile.html.twig */
class __TwigTemplate_09b592eb6853ab1e63e38c013609df12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — User Profile</title>
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
            --blue-500: #3b82f6;
            --blue-600: #2563eb;
            
            --green-50: #f0fdf4;
            --green-500: #22c55e;
            --green-600: #16a34a;
            
            --orange-500: #f97316;
            
            --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.05);
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.15);
            
            --radius-sm: 8px;
            --radius: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            
            --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, var(--gray-50) 0%, #ffffff 30%, var(--gray-50) 100%);
            color: var(--fg);
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
            backdrop-filter: blur(10px);
        }

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
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            color: #1f2937;
        }

        .user-details p {
            margin: 6px 0 0;
            font-size: 14px;
            color: #4b5563;
            font-weight: 500;
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
            font-size: 15px;
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
            max-width: 1400px;
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
            letter-spacing: -0.5px;
        }

        .muted {
            color: #6b7280;
            margin-top: 10px;
            font-size: 16px;
            font-weight: 500;
        }

        .profile-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 36px;
        }

        .card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%);
            border: 1px solid rgba(229, 231, 235, 0.6);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            margin-bottom: 28px;
            overflow: hidden;
            transition: all var(--transition);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-xl);
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
        }

        .card-content {
            padding: 28px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #374151;
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
        
        .form-control:disabled,
        .form-control[readonly] {
            background: var(--gray-100);
            border-color: var(--gray-200);
            cursor: not-allowed;
            opacity: 0.7;
        }
        
        .form-text {
            display: block;
            margin-top: 6px;
            font-size: 13px;
            color: var(--gray-500);
        }

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
            box-shadow: 0 4px 16px rgba(239, 68, 68, 0.2);
        }

        .btn:hover {
            background: linear-gradient(135deg, var(--red-600) 0%, var(--orange-600) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: #374151;
            border-color: #d1d5db;
            box-shadow: none;
        }

        .btn-outline:hover {
            background: #f3f4f6;
            border-color: #9ca3af;
        }

        .quick-actions {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .quick-actions .btn-outline {
            width: 100%;
            justify-content: flex-start;
        }

        @media (max-width: 1024px) {
            .profile-grid {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
        }

        @media (max-width: 768px) {
            .main {
                padding: 24px;
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
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 494, $this->source); })()), "user", [], "any", false, false, false, 494), "nom", [], "any", false, false, false, 494)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 494, $this->source); })()), "user", [], "any", false, false, false, 494), "prenom", [], "any", false, false, false, 494)), "html", null, true);
        yield "
                    </div>
                    <div class=\"user-details\">
                        <h3>";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "user", [], "any", false, false, false, 497), "nom", [], "any", false, false, false, 497), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "user", [], "any", false, false, false, 497), "prenom", [], "any", false, false, false, 497), "html", null, true);
        yield "</h3>
                        <p>📚 ";
        // line 498
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 498, $this->source); })()), "user", [], "any", false, false, false, 498), "classe", [], "any", false, false, false, 498))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 498, $this->source); })()), "user", [], "any", false, false, false, 498), "classe", [], "any", false, false, false, 498), "nom", [], "any", false, false, false, 498), "html", null, true)) : ("No Class"));
        yield "</p>
                    </div>
                </div>
                <div class=\"session-info\">
                    <div><strong>Email:</strong> ";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 502, $this->source); })()), "user", [], "any", false, false, false, 502), "email", [], "any", false, false, false, 502), "html", null, true);
        yield "</div>
                    <div><strong>Role:</strong> ";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 503, $this->source); })()), "user", [], "any", false, false, false, 503), "roles", [], "any", false, false, false, 503), 0, [], "array", false, false, false, 503), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
                </div>
            </div>

            <nav class=\"nav\">
                <a href=\"";
        // line 508
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Dashboard
                </a>
                <a href=\"";
        // line 514
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    My Tasks
                </a>
                <a href=\"";
        // line 520
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profile
                </a>
                <a href=\"";
        // line 527
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
                    <h1 class=\"h1\">My Profile</h1>
                    <p class=\"muted\">Manage your personal information and account settings</p>
                </div>
            </header>

            <div class=\"profile-container\">
                <div class=\"profile-grid\">
                    <!-- Left column: Profile info -->
                    <div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h2 class=\"card-title\">Personal Information</h2>
                            </div>
                            <div class=\"card-content\">
                                <form id=\"profileForm\">
                                    <div class=\"form-group\">
                                        <label for=\"nom\">Last Name *</label>
                                        <input type=\"text\" id=\"nom\" class=\"form-control\" 
                                               value=\"";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 557, $this->source); })()), "user", [], "any", false, false, false, 557), "nom", [], "any", false, false, false, 557), "html", null, true);
        yield "\"
                                               placeholder=\"Doe\"
                                               required
                                               minlength=\"2\">
                                        <small class=\"form-text\">Your last name</small>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"prenom\">First Name *</label>
                                        <input type=\"text\" id=\"prenom\" class=\"form-control\" 
                                               value=\"";
        // line 567
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 567, $this->source); })()), "user", [], "any", false, false, false, 567), "prenom", [], "any", false, false, false, 567), "html", null, true);
        yield "\"
                                               placeholder=\"John\"
                                               required
                                               minlength=\"2\">
                                        <small class=\"form-text\">Your first name</small>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label for=\"email\">Email Address *</label>
                                        <input type=\"email\" id=\"email\" class=\"form-control\" 
                                               value=\"";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 577, $this->source); })()), "user", [], "any", false, false, false, 577), "email", [], "any", false, false, false, 577), "html", null, true);
        yield "\"
                                               placeholder=\"your.email@esprit.tn\"
                                               required>
                                        <small class=\"form-text\">Your ESPRIT email address</small>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label for=\"class\">Class / Group</label>
                                        <input type=\"text\" id=\"class\" class=\"form-control\" 
                                               value=\"";
        // line 586
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 586, $this->source); })()), "user", [], "any", false, false, false, 586), "classe", [], "any", false, false, false, 586))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 586, $this->source); })()), "user", [], "any", false, false, false, 586), "classe", [], "any", false, false, false, 586), "nom", [], "any", false, false, false, 586), "html", null, true)) : ("Not assigned"));
        yield "\"
                                               readonly
                                               disabled>
                                        <small class=\"form-text\">Contact administration to change</small>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label for=\"phone\">Phone Number</label>
                                        <input type=\"tel\" id=\"phone\" class=\"form-control\" 
                                               value=\"";
        // line 595
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 595), "numTel", [], "any", true, true, false, 595) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 595, $this->source); })()), "user", [], "any", false, false, false, 595), "numTel", [], "any", false, false, false, 595)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 595, $this->source); })()), "user", [], "any", false, false, false, 595), "numTel", [], "any", false, false, false, 595), "html", null, true)) : (""));
        yield "\"
                                               placeholder=\"+216 12 345 678\"
                                               pattern=\"[+]?[0-9\\s]{8,20}\">
                                        <small class=\"form-text\">Optional: Include country code</small>
                                    </div>
                                    
                                    <button type=\"submit\" class=\"btn\">✏️ Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Right column: Quick Actions -->
                    <div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h2 class=\"card-title\">Quick Actions</h2>
                            </div>
                            <div class=\"card-content\">
                                <div class=\"quick-actions\">
                                    <a href=\"#\" class=\"btn btn-outline\">
                                        🔒 Change Password
                                    </a>
                                    <a href=\"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_preference_alerte_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 618, $this->source); })()), "user", [], "any", false, false, false, 618), "id", [], "any", false, false, false, 618)]), "html", null, true);
        yield "\" class=\"btn btn-outline\">
                                        🔔 Notification Settings
                                    </a>
                                    <a href=\"#\" class=\"btn btn-outline\">
                                        🔐 Privacy Settings
                                    </a>
                                    <button onclick=\"exportData()\" class=\"btn btn-outline\">
                                        📥 Export My Data
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            const originalHTML = submitBtn.innerHTML;
            
            const nom = document.getElementById('nom').value.trim();
            const prenom = document.getElementById('prenom').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            
            if (!nom || nom.length < 2) {
                showErrorMsg('Please enter your last name (at least 2 characters)');
                return;
            }
            
            if (!prenom || prenom.length < 2) {
                showErrorMsg('Please enter your first name (at least 2 characters)');
                return;
            }
            
            if (!email) {
                showErrorMsg('Please enter an email address');
                return;
            }
            
            const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            if (!emailRegex.test(email)) {
                showErrorMsg('Please enter a valid email address');
                return;
            }
            
            if (phone) {
                const phoneClean = phone.replace(/\\s/g, '');
                const phoneRegex = /^[+]?[0-9]{8,20}\$/;
                if (!phoneRegex.test(phoneClean)) {
                    showErrorMsg('Please enter a valid phone number');
                    return;
                }
            }
            
            const formData = {
                nom: nom,
                prenom: prenom,
                email: email,
                phone: phone
            };

            submitBtn.disabled = true;
            submitBtn.innerHTML = '⏳ Updating...';
            
            fetch('";
        // line 688
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_update");
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(formData),
                credentials: 'same-origin'
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.message || `HTTP error! status: \${response.status}`);
                    });
                }
                return response.json();
            })
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalHTML;
                
                if (data.success) {
                    showSuccessMsg(data.message || 'Profile updated successfully!');
                    
                    if (data.user) {
                        document.getElementById('nom').value = data.user.nom || '';
                        document.getElementById('prenom').value = data.user.prenom || '';
                        document.getElementById('email').value = data.user.email || '';
                        document.getElementById('phone').value = data.user.phone || '';
                        
                        // Update sidebar
                        const sidebarName = document.querySelector('.user-details h3');
                        if (sidebarName) {
                            sidebarName.textContent = data.user.nom + ' ' + data.user.prenom;
                        }
                        
                        const avatar = document.querySelector('.avatar');
                        if (avatar) {
                            avatar.textContent = data.user.nom.charAt(0) + data.user.prenom.charAt(0);
                        }
                    }
                } else {
                    showErrorMsg(data.message || 'Failed to update profile');
                }
            })
            .catch(error => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalHTML;
                showErrorMsg('Error: ' + error.message);
            });
        });

        function showSuccessMsg(message) {
            const msg = document.createElement('div');
            msg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3); z-index: 9999; font-weight: 600;';
            msg.innerHTML = '✓ ' + message;
            document.body.appendChild(msg);
            setTimeout(() => {
                msg.style.opacity = '0';
                msg.style.transition = 'opacity 0.3s';
                setTimeout(() => msg.remove(), 300);
            }, 4000);
        }

        function showErrorMsg(message) {
            const msg = document.createElement('div');
            msg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3); z-index: 9999; font-weight: 600;';
            msg.innerHTML = '✗ ' + message;
            document.body.appendChild(msg);
            setTimeout(() => {
                msg.style.opacity = '0';
                msg.style.transition = 'opacity 0.3s';
                setTimeout(() => msg.remove(), 300);
            }, 4000);
        }

        function exportData() {
            if (confirm('This will export all your data as a JSON file. Continue?')) {
                alert('Export feature coming soon!');
            }
        }
    </script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/profile.html.twig";
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
        return array (  784 => 688,  711 => 618,  685 => 595,  673 => 586,  661 => 577,  648 => 567,  635 => 557,  602 => 527,  592 => 520,  583 => 514,  574 => 508,  566 => 503,  562 => 502,  555 => 498,  549 => 497,  542 => 494,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user/profile.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — User Profile</title>
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
            --blue-500: #3b82f6;
            --blue-600: #2563eb;
            
            --green-50: #f0fdf4;
            --green-500: #22c55e;
            --green-600: #16a34a;
            
            --orange-500: #f97316;
            
            --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.05);
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.15);
            
            --radius-sm: 8px;
            --radius: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            
            --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, var(--gray-50) 0%, #ffffff 30%, var(--gray-50) 100%);
            color: var(--fg);
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
            backdrop-filter: blur(10px);
        }

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
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            color: #1f2937;
        }

        .user-details p {
            margin: 6px 0 0;
            font-size: 14px;
            color: #4b5563;
            font-weight: 500;
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
            font-size: 15px;
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
            max-width: 1400px;
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
            letter-spacing: -0.5px;
        }

        .muted {
            color: #6b7280;
            margin-top: 10px;
            font-size: 16px;
            font-weight: 500;
        }

        .profile-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 36px;
        }

        .card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 250, 251, 0.9) 100%);
            border: 1px solid rgba(229, 231, 235, 0.6);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-md);
            margin-bottom: 28px;
            overflow: hidden;
            transition: all var(--transition);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-xl);
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
        }

        .card-content {
            padding: 28px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #374151;
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
        
        .form-control:disabled,
        .form-control[readonly] {
            background: var(--gray-100);
            border-color: var(--gray-200);
            cursor: not-allowed;
            opacity: 0.7;
        }
        
        .form-text {
            display: block;
            margin-top: 6px;
            font-size: 13px;
            color: var(--gray-500);
        }

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
            box-shadow: 0 4px 16px rgba(239, 68, 68, 0.2);
        }

        .btn:hover {
            background: linear-gradient(135deg, var(--red-600) 0%, var(--orange-600) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: #374151;
            border-color: #d1d5db;
            box-shadow: none;
        }

        .btn-outline:hover {
            background: #f3f4f6;
            border-color: #9ca3af;
        }

        .quick-actions {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .quick-actions .btn-outline {
            width: 100%;
            justify-content: flex-start;
        }

        @media (max-width: 1024px) {
            .profile-grid {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
        }

        @media (max-width: 768px) {
            .main {
                padding: 24px;
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
                <a href=\"{{ path('app_dashboard') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    My Tasks
                </a>
                <a href=\"{{ path('app_profile') }}\" class=\"active\">
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
                    <h1 class=\"h1\">My Profile</h1>
                    <p class=\"muted\">Manage your personal information and account settings</p>
                </div>
            </header>

            <div class=\"profile-container\">
                <div class=\"profile-grid\">
                    <!-- Left column: Profile info -->
                    <div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h2 class=\"card-title\">Personal Information</h2>
                            </div>
                            <div class=\"card-content\">
                                <form id=\"profileForm\">
                                    <div class=\"form-group\">
                                        <label for=\"nom\">Last Name *</label>
                                        <input type=\"text\" id=\"nom\" class=\"form-control\" 
                                               value=\"{{ app.user.nom }}\"
                                               placeholder=\"Doe\"
                                               required
                                               minlength=\"2\">
                                        <small class=\"form-text\">Your last name</small>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"prenom\">First Name *</label>
                                        <input type=\"text\" id=\"prenom\" class=\"form-control\" 
                                               value=\"{{ app.user.prenom }}\"
                                               placeholder=\"John\"
                                               required
                                               minlength=\"2\">
                                        <small class=\"form-text\">Your first name</small>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label for=\"email\">Email Address *</label>
                                        <input type=\"email\" id=\"email\" class=\"form-control\" 
                                               value=\"{{ app.user.email }}\"
                                               placeholder=\"your.email@esprit.tn\"
                                               required>
                                        <small class=\"form-text\">Your ESPRIT email address</small>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label for=\"class\">Class / Group</label>
                                        <input type=\"text\" id=\"class\" class=\"form-control\" 
                                               value=\"{{ app.user.classe is not null ? app.user.classe.nom : 'Not assigned' }}\"
                                               readonly
                                               disabled>
                                        <small class=\"form-text\">Contact administration to change</small>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label for=\"phone\">Phone Number</label>
                                        <input type=\"tel\" id=\"phone\" class=\"form-control\" 
                                               value=\"{{ app.user.numTel ?? '' }}\"
                                               placeholder=\"+216 12 345 678\"
                                               pattern=\"[+]?[0-9\\s]{8,20}\">
                                        <small class=\"form-text\">Optional: Include country code</small>
                                    </div>
                                    
                                    <button type=\"submit\" class=\"btn\">✏️ Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Right column: Quick Actions -->
                    <div>
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h2 class=\"card-title\">Quick Actions</h2>
                            </div>
                            <div class=\"card-content\">
                                <div class=\"quick-actions\">
                                    <a href=\"#\" class=\"btn btn-outline\">
                                        🔒 Change Password
                                    </a>
                                    <a href=\"{{path('front_preference_alerte_show',{'id': app.user.id})}}\" class=\"btn btn-outline\">
                                        🔔 Notification Settings
                                    </a>
                                    <a href=\"#\" class=\"btn btn-outline\">
                                        🔐 Privacy Settings
                                    </a>
                                    <button onclick=\"exportData()\" class=\"btn btn-outline\">
                                        📥 Export My Data
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            const originalHTML = submitBtn.innerHTML;
            
            const nom = document.getElementById('nom').value.trim();
            const prenom = document.getElementById('prenom').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            
            if (!nom || nom.length < 2) {
                showErrorMsg('Please enter your last name (at least 2 characters)');
                return;
            }
            
            if (!prenom || prenom.length < 2) {
                showErrorMsg('Please enter your first name (at least 2 characters)');
                return;
            }
            
            if (!email) {
                showErrorMsg('Please enter an email address');
                return;
            }
            
            const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            if (!emailRegex.test(email)) {
                showErrorMsg('Please enter a valid email address');
                return;
            }
            
            if (phone) {
                const phoneClean = phone.replace(/\\s/g, '');
                const phoneRegex = /^[+]?[0-9]{8,20}\$/;
                if (!phoneRegex.test(phoneClean)) {
                    showErrorMsg('Please enter a valid phone number');
                    return;
                }
            }
            
            const formData = {
                nom: nom,
                prenom: prenom,
                email: email,
                phone: phone
            };

            submitBtn.disabled = true;
            submitBtn.innerHTML = '⏳ Updating...';
            
            fetch('{{ path('app_profile_update') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(formData),
                credentials: 'same-origin'
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.message || `HTTP error! status: \${response.status}`);
                    });
                }
                return response.json();
            })
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalHTML;
                
                if (data.success) {
                    showSuccessMsg(data.message || 'Profile updated successfully!');
                    
                    if (data.user) {
                        document.getElementById('nom').value = data.user.nom || '';
                        document.getElementById('prenom').value = data.user.prenom || '';
                        document.getElementById('email').value = data.user.email || '';
                        document.getElementById('phone').value = data.user.phone || '';
                        
                        // Update sidebar
                        const sidebarName = document.querySelector('.user-details h3');
                        if (sidebarName) {
                            sidebarName.textContent = data.user.nom + ' ' + data.user.prenom;
                        }
                        
                        const avatar = document.querySelector('.avatar');
                        if (avatar) {
                            avatar.textContent = data.user.nom.charAt(0) + data.user.prenom.charAt(0);
                        }
                    }
                } else {
                    showErrorMsg(data.message || 'Failed to update profile');
                }
            })
            .catch(error => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalHTML;
                showErrorMsg('Error: ' + error.message);
            });
        });

        function showSuccessMsg(message) {
            const msg = document.createElement('div');
            msg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3); z-index: 9999; font-weight: 600;';
            msg.innerHTML = '✓ ' + message;
            document.body.appendChild(msg);
            setTimeout(() => {
                msg.style.opacity = '0';
                msg.style.transition = 'opacity 0.3s';
                setTimeout(() => msg.remove(), 300);
            }, 4000);
        }

        function showErrorMsg(message) {
            const msg = document.createElement('div');
            msg.style.cssText = 'position: fixed; top: 20px; right: 20px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; padding: 16px 24px; border-radius: 10px; box-shadow: 0 8px 24px rgba(239, 68, 68, 0.3); z-index: 9999; font-weight: 600;';
            msg.innerHTML = '✗ ' + message;
            document.body.appendChild(msg);
            setTimeout(() => {
                msg.style.opacity = '0';
                msg.style.transition = 'opacity 0.3s';
                setTimeout(() => msg.remove(), 300);
            }, 4000);
        }

        function exportData() {
            if (confirm('This will export all your data as a JSON file. Continue?')) {
                alert('Export feature coming soon!');
            }
        }
    </script>
</body>
</html>
", "user/profile.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\profile.html.twig");
    }
}
