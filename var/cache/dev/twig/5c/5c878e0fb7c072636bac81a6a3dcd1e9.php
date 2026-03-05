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

/* seance/new.html.twig */
class __TwigTemplate_b952fd83368afd9b5ca20ebbfbac5e34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Nouvelle Séance - ESPRIT</title>
    
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"), "html", null, true);
        yield "\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" />
    
    <style>
        /* Main Container */
        .form-main-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-top: 30px;
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eaeaea;
        }

        .form-header h2 {
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .form-header p {
            color: #666;
            font-size: 16px;
            margin-bottom: 0;
        }

        /* Form Sections */
        .form-section {
            margin-bottom: 30px;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #eaeaea;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
        }

        .form-section:hover {
            border-color: #667eea;
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.1);
        }

        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
        }

        .section-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 22px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .section-subtitle {
            font-size: 14px;
            color: #666;
            margin: 5px 0 0 0;
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .required::after {
            content: \" *\";
            color: #dc3545;
            font-weight: bold;
        }

        /* Form Controls */
        .form-control, .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            background: #fff;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        .form-control::placeholder {
            color: #999;
        }

        /* DateTime Inputs */
        input[type=\"datetime-local\"] {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            background: #fff;
            transition: all 0.3s;
        }

        input[type=\"datetime-local\"]:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        /* Dropdown Enhancement */
        .form-select {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e\");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
            padding-right: 2.5rem;
        }

        /* Help Text */
        .help-text {
            display: block;
            margin-top: 6px;
            font-size: 12px;
            color: #6c757d;
            font-style: italic;
        }

        .form-control.is-invalid, .form-select.is-invalid, input[type=\"datetime-local\"].is-invalid {
            border-color: #dc3545;
        }

        .form-control.is-invalid:focus, .form-select.is-invalid:focus, input[type=\"datetime-local\"].is-invalid:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
        }

        /* Style Symfony default error lists */
        .form-group ul {
            list-style: none;
            padding: 0;
            margin: 5px 0 0 0;
            color: #dc3545;
            font-size: 12px;
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .form-group ul li {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .form-group ul li::before {
            content: \"⚠\";
            font-weight: bold;
        }

        /* Form Actions */
        .form-actions {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Buttons */
        .btn {
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-outline-secondary {
            background: transparent;
            color: #666;
            border: 2px solid #ddd;
        }

        .btn-outline-secondary:hover {
            background: #f8f9fa;
            border-color: #667eea;
            color: #667eea;
            transform: translateY(-2px);
        }

        .btn-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-gradient-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: 40px;
            padding: 0 20px;
        }

        .progress-steps::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 2px;
            background: #eaeaea;
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
            text-align: center;
            flex: 1;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 2px solid #eaeaea;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: 600;
            color: #999;
            transition: all 0.3s;
        }

        .step.active .step-circle {
            background: #667eea;
            border-color: #667eea;
            color: white;
            transform: scale(1.1);
        }

        .step.completed .step-circle {
            background: #28a745;
            border-color: #28a745;
            color: white;
        }

        .step-label {
            font-size: 12px;
            font-weight: 500;
            color: #999;
        }

        .step.active .step-label {
            color: #667eea;
            font-weight: 600;
        }

        /* Alert Styling */
        .alert {
            border-radius: 8px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }

        .alert-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
        }

        .alert-danger {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
        }

        /* Footer */
        .form-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
            text-align: center;
            color: #666;
            font-size: 12px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
                margin-top: 20px;
            }
            
            .form-header h2 {
                font-size: 24px;
            }
            
            .section-header {
                flex-direction: column;
                text-align: center;
            }
            
            .section-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .form-actions {
                flex-direction: column;
                gap: 15px;
            }
            
            .form-actions .btn {
                width: 100%;
            }
            
            .progress-steps {
                flex-wrap: wrap;
                gap: 15px;
            }
            
            .step {
                flex: none;
                width: calc(50% - 10px);
            }
        }

        /* Animation */
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

        .form-section {
            animation: fadeIn 0.5s ease-out;
        }

        /* Loading State */
        .btn-loading {
            position: relative;
            color: transparent !important;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid white;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Profile Avatar Styles */
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
            flex-shrink: 0;
        }
        
        .user-avatar-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .badge-admin {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
        }
        
        .badge-etudiant {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            border: none;
        }
        
        .avatar-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .navbar-profile {
            display: flex;
            align-items: center;
            padding: 5px 0;
        }
        
        .navbar-profile-name {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 2px;
        }
        
        .profile-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .profile-avatar-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }
        
        .user-role-badge {
            font-size: 0.75rem;
            padding: 3px 10px;
            border-radius: 10px;
            margin-top: 5px;
            display: inline-block;
        }
        
        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .page-header h3 {
            display: flex;
            align-items: center;
            margin: 0;
        }
        
        .page-title-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
    </style>
</head>
<body>
<div class=\"container-scroller\">
    <!-- Sidebar -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 577
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                <img src=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 580
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                <img src=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
        </div>
        <ul class=\"nav\">
            <li class=\"nav-item profile\">
                <div class=\"profile-desc\">
                    <div class=\"profile-pic\">
                        <div class=\"count-indicator\">
                            ";
        // line 589
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 589, $this->source); })()), "user", [], "any", false, false, false, 589)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 590
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 590, $this->source); })()), "user", [], "any", false, false, false, 590), "profilePic", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 591
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "profilePic", [], "any", false, false, false, 591))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 592
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 592, $this->source); })()), "user", [], "any", false, false, false, 592), "prenom", [], "any", false, false, false, 592), "html", null, true);
                yield "\" 
                                         class=\"profile-avatar-img\">
                                ";
            } else {
                // line 595
                yield "                                    <div class=\"profile-avatar\">
                                        ";
                // line 596
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 596, $this->source); })()), "user", [], "any", false, false, false, 596), "prenom", [], "any", false, false, false, 596))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 596, $this->source); })()), "user", [], "any", false, false, false, 596), "nom", [], "any", false, false, false, 596))), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 599
            yield "                            ";
        } else {
            // line 600
            yield "                                <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                            ";
        }
        // line 602
        yield "                            <span class=\"count bg-success\"></span>
                        </div>
                        <div class=\"profile-name\">
                            ";
        // line 605
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 605, $this->source); })()), "user", [], "any", false, false, false, 605)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 606
            yield "                                <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 606, $this->source); })()), "user", [], "any", false, false, false, 606), "prenom", [], "any", false, false, false, 606), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 606, $this->source); })()), "user", [], "any", false, false, false, 606), "nom", [], "any", false, false, false, 606), "html", null, true);
            yield "</h5>
                                <span class=\"text-muted\">";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 607, $this->source); })()), "user", [], "any", false, false, false, 607), "email", [], "any", false, false, false, 607), "html", null, true);
            yield "</span>
                                <div class=\"mt-1\">
                                    ";
            // line 609
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 609, $this->source); })()), "user", [], "any", false, false, false, 609), "roles", [], "any", false, false, false, 609))) {
                // line 610
                yield "                                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                                    ";
            } else {
                // line 612
                yield "                                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                                    ";
            }
            // line 614
            yield "                                </div>
                            ";
        } else {
            // line 616
            yield "                                <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                                <span>Veuillez vous connecter</span>
                            ";
        }
        // line 619
        yield "                        </div>
                    </div>
                </div>
            </li>
            <li class=\"nav-item nav-category\">
                <span class=\"nav-link\">Navigation</span>
            </li>
            
            <!-- Dashboard -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"#\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-speedometer\"></i>
                    </span>
                    <span class=\"menu-title\">Dashboard</span>
                </a>
            </li>
            
            <!-- Utilisateurs -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 639
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-account-group\"></i>
                    </span>
                    <span class=\"menu-title\">Utilisateurs</span>
                </a>
            </li>
            
            <!-- Matières -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 649
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span>
                    <span class=\"menu-title\">Matières</span>
                </a>
            </li>
            
            <!-- Classes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 659
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-school\"></i>
                    </span>
                    <span class=\"menu-title\">Classes</span>
                </a>
            </li>
            
            <!-- Salles -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 669
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-office-building\"></i>
                    </span>
                    <span class=\"menu-title\">Salles</span>
                </a>
            </li>
            
            <!-- Séances -->
            <li class=\"nav-item menu-items active\">
                <a class=\"nav-link\" href=\"";
        // line 679
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-calendar-clock\"></i>
                    </span>
                    <span class=\"menu-title\">Séances</span>
                </a>
            </li>
            
            <!-- Groupes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"#\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                    </span>
                    <span class=\"menu-title\">Groupes</span>
                </a>
            </li>
            
            <!-- Tâches -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 699
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                    </span>
                    <span class=\"menu-title\">Tâches</span>
                </a>
            </li>
            
            <!-- Alertes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"#\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-alert-circle-outline\"></i>
                    </span>
                    <span class=\"menu-title\">Alertes</span>
                </a>
            </li>
            
            <!-- Exercices de santé -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 719
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-heart-pulse\"></i>
                    </span>
                    <span class=\"menu-title\">Exercices de santé</span>
                </a>
            </li>
            
            <!-- Logout -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 729
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-logout text-danger\"></i>
                    </span>
                    <span class=\"menu-title text-danger\">Déconnexion</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- Navbar -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
                <img src=\"";
        // line 744
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </div>
            <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
                <ul class=\"navbar-nav w-100\">
                    <li class=\"nav-item w-100\">
                        <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchInput\">
                        </form>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <i class=\"mdi mdi-bell\"></i>
                            <span class=\"count bg-danger\">2</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <h6 class=\"p-3 mb-0\">Notifications</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-success rounded-circle\">
                                        <i class=\"mdi mdi-calendar-clock\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Nouvelle séance</p>
                                    <p class=\"text-muted ellipsis mb-0\">Séance Mathématiques programmée</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                ";
        // line 783
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 783, $this->source); })()), "user", [], "any", false, false, false, 783)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 784
            yield "                                    <div class=\"avatar-container\">
                                        ";
            // line 785
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 785, $this->source); })()), "user", [], "any", false, false, false, 785), "profilePic", [], "any", false, false, false, 785)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 786
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 786, $this->source); })()), "user", [], "any", false, false, false, 786), "profilePic", [], "any", false, false, false, 786))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 787
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 787, $this->source); })()), "user", [], "any", false, false, false, 787), "prenom", [], "any", false, false, false, 787), "html", null, true);
                yield "\" 
                                                 class=\"user-avatar-img\">
                                        ";
            } else {
                // line 790
                yield "                                            <div class=\"user-avatar\">
                                                ";
                // line 791
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 791, $this->source); })()), "user", [], "any", false, false, false, 791), "prenom", [], "any", false, false, false, 791))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 791, $this->source); })()), "user", [], "any", false, false, false, 791), "nom", [], "any", false, false, false, 791))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 794
            yield "                                        <div class=\"text-start ms-2\">
                                            <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                                                ";
            // line 796
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 796, $this->source); })()), "user", [], "any", false, false, false, 796), "prenom", [], "any", false, false, false, 796), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 796, $this->source); })()), "user", [], "any", false, false, false, 796), "nom", [], "any", false, false, false, 796), "html", null, true);
            yield "
                                            </p>
                                            <small class=\"text-muted d-none d-sm-block\">
                                                ";
            // line 799
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 799, $this->source); })()), "user", [], "any", false, false, false, 799), "roles", [], "any", false, false, false, 799))) {
                // line 800
                yield "                                                    <span class=\"badge badge-admin\">Admin</span>
                                                ";
            } else {
                // line 802
                yield "                                                    <span class=\"badge badge-etudiant\">Utilisateur</span>
                                                ";
            }
            // line 804
            yield "                                            </small>
                                        </div>
                                    </div>
                                ";
        } else {
            // line 808
            yield "                                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                    <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                                ";
        }
        // line 811
        yield "                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <div class=\"dropdown-header p-3\">
                                ";
        // line 816
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 816, $this->source); })()), "user", [], "any", false, false, false, 816)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 817
            yield "                                    <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 817, $this->source); })()), "user", [], "any", false, false, false, 817), "prenom", [], "any", false, false, false, 817), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 817, $this->source); })()), "user", [], "any", false, false, false, 817), "nom", [], "any", false, false, false, 817), "html", null, true);
            yield "</h6>
                                    <p class=\"text-muted mb-0\">";
            // line 818
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 818, $this->source); })()), "user", [], "any", false, false, false, 818), "email", [], "any", false, false, false, 818), "html", null, true);
            yield "</p>
                                    <small class=\"text-muted\">
                                        ";
            // line 820
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 820, $this->source); })()), "user", [], "any", false, false, false, 820), "roles", [], "any", false, false, false, 820))) {
                // line 821
                yield "                                            <span class=\"badge badge-admin\">Administrateur</span>
                                        ";
            } else {
                // line 823
                yield "                                            <span class=\"badge badge-etudiant\">Utilisateur</span>
                                        ";
            }
            // line 825
            yield "                                    </small>
                                ";
        } else {
            // line 827
            yield "                                    <h6 class=\"mb-0\">Non connecté</h6>
                                    <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                                ";
        }
        // line 830
        yield "                            </div>
                            <div class=\"dropdown-divider\"></div>
                            ";
        // line 832
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 832, $this->source); })()), "user", [], "any", false, false, false, 832)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 833
            yield "                                <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 833, $this->source); })()), "user", [], "any", false, false, false, 833), "id", [], "any", false, false, false, 833)]), "html", null, true);
            yield "\">
                                    <div class=\"preview-thumbnail\">
                                        <div class=\"preview-icon bg-primary rounded-circle\">
                                            <i class=\"mdi mdi-account\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Mon profil</p>
                                    </div>
                                </a>
                                <a class=\"dropdown-item preview-item\" href=\"";
            // line 843
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 843, $this->source); })()), "user", [], "any", false, false, false, 843), "id", [], "any", false, false, false, 843)]), "html", null, true);
            yield "\">
                                    <div class=\"preview-thumbnail\">
                                        <div class=\"preview-icon bg-warning rounded-circle\">
                                            <i class=\"mdi mdi-account-edit\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Modifier mon profil</p>
                                    </div>
                                </a>
                                <div class=\"dropdown-divider\"></div>
                            ";
        }
        // line 855
        yield "                            <a class=\"dropdown-item preview-item\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-logout text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Déconnexion</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <!-- Header -->
                <div class=\"page-header\">
                    <h3 class=\"page-title\">
                        <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                            <i class=\"mdi mdi-plus-circle\"></i>
                        </span> 
                        Nouvelle Séance
                    </h3>
                    <nav aria-label=\"breadcrumb\">
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 885
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\" class=\"text-primary\">
                                    <i class=\"mdi mdi-calendar-clock me-1\"></i>Séances
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                <span></span>Création
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Progress Steps -->
                <div class=\"progress-steps\">
                    <div class=\"step active\">
                        <div class=\"step-circle\">1</div>
                        <div class=\"step-label\">Informations</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-circle\">2</div>
                        <div class=\"step-label\">Type & Mode</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-circle\">3</div>
                        <div class=\"step-label\">Horaire</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-circle\">4</div>
                        <div class=\"step-label\">Localisation</div>
                    </div>
                </div>

                <!-- Flash Messages -->
                ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 917, $this->source); })()), "flashes", [], "any", false, false, false, 917));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 918
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 919
                yield "                        <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                            <i class=\"mdi mdi-";
                // line 920
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                            ";
                // line 921
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 925
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 926
        yield "
                <!-- Form Container -->
                <div class=\"form-main-container\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"form-container\">
                                <div class=\"form-header\">
                                    <h2>Créer une nouvelle séance</h2>
                                    <p>Remplissez tous les champs pour planifier une nouvelle séance</p>
                                </div>

                                ";
        // line 937
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 937, $this->source); })()), 'form_start', ["attr" => ["class" => "seance-form", "novalidate" => "novalidate"]]);
        yield "
                                
                                <!-- Section 1: Basic Information -->
                                <div class=\"form-section\">
                                    <div class=\"section-header\">
                                        <div class=\"section-icon\">
                                            <i class=\"mdi mdi-information-outline\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"section-title\">Informations de base</h4>
                                            <p class=\"section-subtitle\">Informations essentielles sur la séance</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-grid\">
                                        <div class=\"form-group\">
                                            ";
        // line 953
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 953, $this->source); })()), "matiere", [], "any", false, false, false, 953), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 954
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 954, $this->source); })()), "matiere", [], "any", false, false, false, 954), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 956
        yield "
                                            ";
        // line 957
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 957, $this->source); })()), "matiere", [], "any", false, false, false, 957), 'errors');
        yield "
                                            <span class=\"help-text\">Sélectionnez la matière de la séance</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            ";
        // line 962
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 962, $this->source); })()), "classe", [], "any", false, false, false, 962), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 963
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 963, $this->source); })()), "classe", [], "any", false, false, false, 963), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 965
        yield "
                                            ";
        // line 966
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 966, $this->source); })()), "classe", [], "any", false, false, false, 966), 'errors');
        yield "
                                            <span class=\"help-text\">Sélectionnez la classe concernée</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            ";
        // line 971
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 971, $this->source); })()), "jour", [], "any", false, false, false, 971), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 972
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 972, $this->source); })()), "jour", [], "any", false, false, false, 972), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Lundi, Mardi..."]]);
        // line 975
        yield "
                                            ";
        // line 976
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 976, $this->source); })()), "jour", [], "any", false, false, false, 976), 'errors');
        yield "
                                            <span class=\"help-text\">Jour de la semaine où se déroule la séance</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Section 2: Type and Mode -->
                                <div class=\"form-section\">
                                    <div class=\"section-header\">
                                        <div class=\"section-icon\">
                                            <i class=\"mdi mdi-format-list-checks\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"section-title\">Type et mode de séance</h4>
                                            <p class=\"section-subtitle\">Définissez le format d'enseignement</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-grid\">
                                        <div class=\"form-group\">
                                            ";
        // line 996
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 996, $this->source); })()), "typeSeance", [], "any", false, false, false, 996), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 997
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 997, $this->source); })()), "typeSeance", [], "any", false, false, false, 997), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 998
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 998, $this->source); })()), "typeSeance", [], "any", false, false, false, 998), "vars", [], "any", false, false, false, 998), "errors", [], "any", false, false, false, 998)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Ex: Cours, TD, TP"]]);
        // line 1000
        yield "
                                            ";
        // line 1001
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1001, $this->source); })()), "typeSeance", [], "any", false, false, false, 1001), 'errors');
        yield "
                                            <span class=\"help-text\">Type d'enseignement (Cours, TD, TP)</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            ";
        // line 1006
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1006, $this->source); })()), "mode", [], "any", false, false, false, 1006), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 1007
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1007, $this->source); })()), "mode", [], "any", false, false, false, 1007), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1008
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1008, $this->source); })()), "mode", [], "any", false, false, false, 1008), "vars", [], "any", false, false, false, 1008), "errors", [], "any", false, false, false, 1008)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Ex: Présentiel, Distanciel, Hybride"]]);
        // line 1010
        yield "
                                            ";
        // line 1011
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1011, $this->source); })()), "mode", [], "any", false, false, false, 1011), 'errors');
        yield "
                                            <span class=\"help-text\">Mode d'enseignement (Présentiel, Distanciel, Hybride)</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Section 3: Schedule -->
                                <div class=\"form-section\">
                                    <div class=\"section-header\">
                                        <div class=\"section-icon\">
                                            <i class=\"mdi mdi-clock-outline\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"section-title\">Horaire</h4>
                                            <p class=\"section-subtitle\">Définissez les dates et heures de la séance</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-grid\">
                                        <div class=\"form-group\">
                                            <label class=\"required\">Date et heure de début</label>
                                            ";
        // line 1032
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1032, $this->source); })()), "heureDebut", [], "any", false, false, false, 1032), 'widget', ["attr" => ["class" => "form-control datetime-input"]]);
        // line 1034
        yield "
                                            ";
        // line 1035
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1035, $this->source); })()), "heureDebut", [], "any", false, false, false, 1035), 'errors');
        yield "
                                            <span class=\"help-text\">Date et heure de début de la séance</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label class=\"required\">Date et heure de fin</label>
                                            ";
        // line 1041
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1041, $this->source); })()), "heureFin", [], "any", false, false, false, 1041), 'widget', ["attr" => ["class" => "form-control datetime-input"]]);
        // line 1043
        yield "
                                            ";
        // line 1044
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1044, $this->source); })()), "heureFin", [], "any", false, false, false, 1044), 'errors');
        yield "
                                            <span class=\"help-text\">Date et heure de fin de la séance</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Section 4: Location -->
                                <div class=\"form-section\">
                                    <div class=\"section-header\">
                                        <div class=\"section-icon\">
                                            <i class=\"mdi mdi-map-marker-outline\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"section-title\">Localisation</h4>
                                            <p class=\"section-subtitle\">Attribuez une salle à la séance</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-grid\">
                                        <div class=\"form-group\">
                                            ";
        // line 1064
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1064, $this->source); })()), "salle", [], "any", false, false, false, 1064), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 1065
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1065, $this->source); })()), "salle", [], "any", false, false, false, 1065), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1067
        yield "
                                            ";
        // line 1068
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1068, $this->source); })()), "salle", [], "any", false, false, false, 1068), 'errors');
        yield "
                                            <span class=\"help-text\">Salle attribuée à cette séance</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    <a href=\"";
        // line 1076
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                        <i class=\"mdi mdi-arrow-left me-1\"></i>Retour
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-gradient-primary\">
                                        <i class=\"mdi mdi-check-circle me-1\"></i>Créer la séance
                                    </button>
                                </div>
                                
                                ";
        // line 1084
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1084, $this->source); })()), 'form_end');
        yield "
                                
                                <!-- Form Footer -->
                                <div class=\"form-footer\">
                                    <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                        © ";
        // line 1100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        Création de séance | ";
        // line 1103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src=\"";
        // line 1112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/chart.js"), "html", null, true);
        yield "\"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const form = document.querySelector('.seance-form');
        const datetimeInputs = form.querySelectorAll('input[type=\"datetime-local\"]');
        
        // Update progress steps based on section visibility
        const steps = document.querySelectorAll('.step');
        const sections = document.querySelectorAll('.form-section');
        
        function updateProgressSteps() {
            let currentStep = 0;
            
            sections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();
                const viewHeight = Math.max(document.documentElement.clientHeight || window.innerHeight);
                const isVisible = (rect.top <= viewHeight / 2) && (rect.bottom >= viewHeight / 2);
                
                if (isVisible) {
                    currentStep = index + 1;
                }
            });
            
            steps.forEach((step, index) => {
                step.classList.remove('active', 'completed');
                if (index < currentStep) {
                    step.classList.add('completed');
                } else if (index === currentStep) {
                    step.classList.add('active');
                }
            });
        }
        
        // Initial update
        updateProgressSteps();
        
        // Update on scroll
        window.addEventListener('scroll', updateProgressSteps);
        
        // DateTime validation
        datetimeInputs.forEach(input => {
            input.addEventListener('change', function() {
                validateDateTimeRange();
            });
        });
        
        function validateDateTimeRange() {
            const startTime = document.querySelector('#";
        // line 1167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1167, $this->source); })()), "heureDebut", [], "any", false, false, false, 1167), "vars", [], "any", false, false, false, 1167), "id", [], "any", false, false, false, 1167), "html", null, true);
        yield "');
            const endTime = document.querySelector('#";
        // line 1168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1168, $this->source); })()), "heureFin", [], "any", false, false, false, 1168), "vars", [], "any", false, false, false, 1168), "id", [], "any", false, false, false, 1168), "html", null, true);
        yield "');
            
            if (startTime.value && endTime.value) {
                const startDate = new Date(startTime.value);
                const endDate = new Date(endTime.value);
                
                if (endDate <= startDate) {
                    // Add error class
                    startTime.classList.add('is-invalid');
                    endTime.classList.add('is-invalid');
                    
                    // Show error message for start time
                    let startErrorDiv = startTime.parentElement.querySelector('.error-message');
                    if (!startErrorDiv) {
                        startErrorDiv = document.createElement('div');
                        startErrorDiv.className = 'error-message';
                        startTime.parentElement.appendChild(startErrorDiv);
                    }
                    startErrorDiv.textContent = \"La date/heure de fin doit être après la date/heure de début\";
                    
                    // Show error message for end time
                    let endErrorDiv = endTime.parentElement.querySelector('.error-message');
                    if (!endErrorDiv) {
                        endErrorDiv = document.createElement('div');
                        endErrorDiv.className = 'error-message';
                        endTime.parentElement.appendChild(endErrorDiv);
                    }
                    endErrorDiv.textContent = \"La date/heure de fin doit être après la date/heure de début\";
                    
                    return false;
                } else {
                    // Remove error class
                    startTime.classList.remove('is-invalid');
                    endTime.classList.remove('is-invalid');
                    
                    // Remove error messages
                    const startErrorDiv = startTime.parentElement.querySelector('.error-message');
                    if (startErrorDiv) {
                        startErrorDiv.remove();
                    }
                    
                    const endErrorDiv = endTime.parentElement.querySelector('.error-message');
                    if (endErrorDiv) {
                        endErrorDiv.remove();
                    }
                    
                    return true;
                }
            }
            return true;
        }
        
        // Set default datetime values (today, rounded to nearest 30 minutes)
        function setDefaultDatetime() {
            const now = new Date();
            const startTime = document.querySelector('#";
        // line 1223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1223, $this->source); })()), "heureDebut", [], "any", false, false, false, 1223), "vars", [], "any", false, false, false, 1223), "id", [], "any", false, false, false, 1223), "html", null, true);
        yield "');
            const endTime = document.querySelector('#";
        // line 1224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1224, $this->source); })()), "heureFin", [], "any", false, false, false, 1224), "vars", [], "any", false, false, false, 1224), "id", [], "any", false, false, false, 1224), "html", null, true);
        yield "');
            
            // Round to nearest 30 minutes
            const minutes = Math.ceil(now.getMinutes() / 30) * 30;
            now.setMinutes(minutes);
            now.setSeconds(0);
            
            // Start time: now (rounded)
            const startDateTime = new Date(now);
            startTime.value = startDateTime.toISOString().slice(0, 16);
            
            // End time: 1.5 hours later
            const endDateTime = new Date(startDateTime);
            endDateTime.setHours(endDateTime.getHours() + 1);
            endDateTime.setMinutes(endDateTime.getMinutes() + 30);
            endTime.value = endDateTime.toISOString().slice(0, 16);
        }
        
        // Set default values if fields are empty
        window.addEventListener('load', function() {
            const startTime = document.querySelector('#";
        // line 1244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1244, $this->source); })()), "heureDebut", [], "any", false, false, false, 1244), "vars", [], "any", false, false, false, 1244), "id", [], "any", false, false, false, 1244), "html", null, true);
        yield "');
            const endTime = document.querySelector('#";
        // line 1245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1245, $this->source); })()), "heureFin", [], "any", false, false, false, 1245), "vars", [], "any", false, false, false, 1245), "id", [], "any", false, false, false, 1245), "html", null, true);
        yield "');
            
            if (!startTime.value || !endTime.value) {
                setDefaultDatetime();
            }
        });
        
        // Form submission validation
        form.addEventListener('submit', function(e) {
            // Add loading state to submit button
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            submitBtn.classList.add('btn-loading');
            submitBtn.disabled = true;
            
            // Validate datetime range
            if (!validateDateTimeRange()) {
                e.preventDefault();
                alert('Veuillez corriger les erreurs dans le formulaire. La date/heure de fin doit être après la date/heure de début.');
                submitBtn.classList.remove('btn-loading');
                submitBtn.disabled = false;
                return false;
            }
            
            // Check if all required fields are filled
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            let errorFields = [];
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                    const label = form.querySelector(`label[for=\"\${field.id}\"]`);
                    if (label) {
                        errorFields.push(label.textContent.replace(' *', '').trim());
                    }
                } else {
                    field.classList.remove('is-invalid');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires :\\n\\n• ' + errorFields.join('\\n• '));
                submitBtn.classList.remove('btn-loading');
                submitBtn.disabled = false;
                return false;
            }
            
            return true;
        });
        
        // Auto-remove invalid class on input
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                this.classList.remove('is-invalid');
            });
            
            input.addEventListener('focus', function() {
                // Scroll to the section containing this input
                const section = this.closest('.form-section');
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });
        
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
        
        // Search functionality
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    window.location.href = '";
        // line 1328
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "?search=' + encodeURIComponent(this.value);
                }
            });
        }
        
        // Focus on first field
        const firstInput = form.querySelector('input, select');
        if (firstInput) {
            setTimeout(() => {
                firstInput.focus();
            }, 300);
        }
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
        return "seance/new.html.twig";
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
        return array (  1693 => 1328,  1607 => 1245,  1603 => 1244,  1580 => 1224,  1576 => 1223,  1518 => 1168,  1514 => 1167,  1462 => 1118,  1458 => 1117,  1454 => 1116,  1450 => 1115,  1446 => 1114,  1442 => 1113,  1438 => 1112,  1426 => 1103,  1420 => 1100,  1401 => 1084,  1390 => 1076,  1379 => 1068,  1376 => 1067,  1374 => 1065,  1370 => 1064,  1347 => 1044,  1344 => 1043,  1342 => 1041,  1333 => 1035,  1330 => 1034,  1328 => 1032,  1304 => 1011,  1301 => 1010,  1299 => 1008,  1298 => 1007,  1294 => 1006,  1286 => 1001,  1283 => 1000,  1281 => 998,  1280 => 997,  1276 => 996,  1253 => 976,  1250 => 975,  1248 => 972,  1244 => 971,  1236 => 966,  1233 => 965,  1231 => 963,  1227 => 962,  1219 => 957,  1216 => 956,  1214 => 954,  1210 => 953,  1191 => 937,  1178 => 926,  1172 => 925,  1162 => 921,  1158 => 920,  1153 => 919,  1148 => 918,  1144 => 917,  1109 => 885,  1075 => 855,  1060 => 843,  1046 => 833,  1044 => 832,  1040 => 830,  1035 => 827,  1031 => 825,  1027 => 823,  1023 => 821,  1021 => 820,  1016 => 818,  1009 => 817,  1007 => 816,  1000 => 811,  993 => 808,  987 => 804,  983 => 802,  979 => 800,  977 => 799,  969 => 796,  965 => 794,  958 => 791,  955 => 790,  949 => 787,  944 => 786,  942 => 785,  939 => 784,  937 => 783,  895 => 744,  877 => 729,  864 => 719,  841 => 699,  818 => 679,  805 => 669,  792 => 659,  779 => 649,  766 => 639,  744 => 619,  739 => 616,  735 => 614,  731 => 612,  727 => 610,  725 => 609,  720 => 607,  713 => 606,  711 => 605,  706 => 602,  700 => 600,  697 => 599,  690 => 596,  687 => 595,  681 => 592,  676 => 591,  673 => 590,  671 => 589,  660 => 581,  656 => 580,  651 => 578,  647 => 577,  83 => 16,  79 => 15,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Nouvelle Séance - ESPRIT</title>
    
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />
    
    <style>
        /* Main Container */
        .form-main-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-top: 30px;
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eaeaea;
        }

        .form-header h2 {
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .form-header p {
            color: #666;
            font-size: 16px;
            margin-bottom: 0;
        }

        /* Form Sections */
        .form-section {
            margin-bottom: 30px;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #eaeaea;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
        }

        .form-section:hover {
            border-color: #667eea;
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.1);
        }

        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
        }

        .section-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 22px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .section-subtitle {
            font-size: 14px;
            color: #666;
            margin: 5px 0 0 0;
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .required::after {
            content: \" *\";
            color: #dc3545;
            font-weight: bold;
        }

        /* Form Controls */
        .form-control, .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            background: #fff;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        .form-control::placeholder {
            color: #999;
        }

        /* DateTime Inputs */
        input[type=\"datetime-local\"] {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            background: #fff;
            transition: all 0.3s;
        }

        input[type=\"datetime-local\"]:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        /* Dropdown Enhancement */
        .form-select {
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e\");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
            padding-right: 2.5rem;
        }

        /* Help Text */
        .help-text {
            display: block;
            margin-top: 6px;
            font-size: 12px;
            color: #6c757d;
            font-style: italic;
        }

        .form-control.is-invalid, .form-select.is-invalid, input[type=\"datetime-local\"].is-invalid {
            border-color: #dc3545;
        }

        .form-control.is-invalid:focus, .form-select.is-invalid:focus, input[type=\"datetime-local\"].is-invalid:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
        }

        /* Style Symfony default error lists */
        .form-group ul {
            list-style: none;
            padding: 0;
            margin: 5px 0 0 0;
            color: #dc3545;
            font-size: 12px;
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .form-group ul li {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .form-group ul li::before {
            content: \"⚠\";
            font-weight: bold;
        }

        /* Form Actions */
        .form-actions {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Buttons */
        .btn {
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-outline-secondary {
            background: transparent;
            color: #666;
            border: 2px solid #ddd;
        }

        .btn-outline-secondary:hover {
            background: #f8f9fa;
            border-color: #667eea;
            color: #667eea;
            transform: translateY(-2px);
        }

        .btn-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-gradient-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: 40px;
            padding: 0 20px;
        }

        .progress-steps::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 2px;
            background: #eaeaea;
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
            text-align: center;
            flex: 1;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 2px solid #eaeaea;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: 600;
            color: #999;
            transition: all 0.3s;
        }

        .step.active .step-circle {
            background: #667eea;
            border-color: #667eea;
            color: white;
            transform: scale(1.1);
        }

        .step.completed .step-circle {
            background: #28a745;
            border-color: #28a745;
            color: white;
        }

        .step-label {
            font-size: 12px;
            font-weight: 500;
            color: #999;
        }

        .step.active .step-label {
            color: #667eea;
            font-weight: 600;
        }

        /* Alert Styling */
        .alert {
            border-radius: 8px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }

        .alert-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
        }

        .alert-danger {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
        }

        /* Footer */
        .form-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
            text-align: center;
            color: #666;
            font-size: 12px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
                margin-top: 20px;
            }
            
            .form-header h2 {
                font-size: 24px;
            }
            
            .section-header {
                flex-direction: column;
                text-align: center;
            }
            
            .section-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .form-actions {
                flex-direction: column;
                gap: 15px;
            }
            
            .form-actions .btn {
                width: 100%;
            }
            
            .progress-steps {
                flex-wrap: wrap;
                gap: 15px;
            }
            
            .step {
                flex: none;
                width: calc(50% - 10px);
            }
        }

        /* Animation */
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

        .form-section {
            animation: fadeIn 0.5s ease-out;
        }

        /* Loading State */
        .btn-loading {
            position: relative;
            color: transparent !important;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid white;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Profile Avatar Styles */
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
            flex-shrink: 0;
        }
        
        .user-avatar-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .badge-admin {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
        }
        
        .badge-etudiant {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            border: none;
        }
        
        .avatar-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .navbar-profile {
            display: flex;
            align-items: center;
            padding: 5px 0;
        }
        
        .navbar-profile-name {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 2px;
        }
        
        .profile-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .profile-avatar-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }
        
        .user-role-badge {
            font-size: 0.75rem;
            padding: 3px 10px;
            border-radius: 10px;
            margin-top: 5px;
            display: inline-block;
        }
        
        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .page-header h3 {
            display: flex;
            align-items: center;
            margin: 0;
        }
        
        .page-title-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
    </style>
</head>
<body>
<div class=\"container-scroller\">
    <!-- Sidebar -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"{{ path('app_user_index') }}\">
                <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
            </a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"{{ path('app_user_index') }}\">
                <img src=\"{{ asset('assets/images/logo-mini.svg') }}\" alt=\"logo\" />
            </a>
        </div>
        <ul class=\"nav\">
            <li class=\"nav-item profile\">
                <div class=\"profile-desc\">
                    <div class=\"profile-pic\">
                        <div class=\"count-indicator\">
                            {% if app.user %}
                                {% if app.user.profilePic %}
                                    <img src=\"{{ asset('uploads/profile_pics/' ~ app.user.profilePic) }}\" 
                                         alt=\"{{ app.user.prenom }}\" 
                                         class=\"profile-avatar-img\">
                                {% else %}
                                    <div class=\"profile-avatar\">
                                        {{ app.user.prenom|first|upper }}{{ app.user.nom|first|upper }}
                                    </div>
                                {% endif %}
                            {% else %}
                                <img class=\"img-xs rounded-circle\" src=\"{{ asset('assets/images/faces/face15.jpg') }}\" alt=\"\">
                            {% endif %}
                            <span class=\"count bg-success\"></span>
                        </div>
                        <div class=\"profile-name\">
                            {% if app.user %}
                                <h5 class=\"mb-0 font-weight-normal\">{{ app.user.prenom }} {{ app.user.nom }}</h5>
                                <span class=\"text-muted\">{{ app.user.email }}</span>
                                <div class=\"mt-1\">
                                    {% if 'ROLE_ADMIN' in app.user.roles %}
                                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                                    {% else %}
                                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                                    {% endif %}
                                </div>
                            {% else %}
                                <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                                <span>Veuillez vous connecter</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </li>
            <li class=\"nav-item nav-category\">
                <span class=\"nav-link\">Navigation</span>
            </li>
            
            <!-- Dashboard -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"#\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-speedometer\"></i>
                    </span>
                    <span class=\"menu-title\">Dashboard</span>
                </a>
            </li>
            
            <!-- Utilisateurs -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-account-group\"></i>
                    </span>
                    <span class=\"menu-title\">Utilisateurs</span>
                </a>
            </li>
            
            <!-- Matières -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ path('app_matiere_classe_index') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span>
                    <span class=\"menu-title\">Matières</span>
                </a>
            </li>
            
            <!-- Classes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ path('app_classe_index') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-school\"></i>
                    </span>
                    <span class=\"menu-title\">Classes</span>
                </a>
            </li>
            
            <!-- Salles -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ path('app_salle_index') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-office-building\"></i>
                    </span>
                    <span class=\"menu-title\">Salles</span>
                </a>
            </li>
            
            <!-- Séances -->
            <li class=\"nav-item menu-items active\">
                <a class=\"nav-link\" href=\"{{ path('app_seance_index') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-calendar-clock\"></i>
                    </span>
                    <span class=\"menu-title\">Séances</span>
                </a>
            </li>
            
            <!-- Groupes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"#\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                    </span>
                    <span class=\"menu-title\">Groupes</span>
                </a>
            </li>
            
            <!-- Tâches -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ path('app_tache_index') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                    </span>
                    <span class=\"menu-title\">Tâches</span>
                </a>
            </li>
            
            <!-- Alertes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"#\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-alert-circle-outline\"></i>
                    </span>
                    <span class=\"menu-title\">Alertes</span>
                </a>
            </li>
            
            <!-- Exercices de santé -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ path('app_objectif_sante_index') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-heart-pulse\"></i>
                    </span>
                    <span class=\"menu-title\">Exercices de santé</span>
                </a>
            </li>
            
            <!-- Logout -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-logout text-danger\"></i>
                    </span>
                    <span class=\"menu-title text-danger\">Déconnexion</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- Navbar -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
                <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
            </div>
            <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
                <ul class=\"navbar-nav w-100\">
                    <li class=\"nav-item w-100\">
                        <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchInput\">
                        </form>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <i class=\"mdi mdi-bell\"></i>
                            <span class=\"count bg-danger\">2</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <h6 class=\"p-3 mb-0\">Notifications</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-success rounded-circle\">
                                        <i class=\"mdi mdi-calendar-clock\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Nouvelle séance</p>
                                    <p class=\"text-muted ellipsis mb-0\">Séance Mathématiques programmée</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                {% if app.user %}
                                    <div class=\"avatar-container\">
                                        {% if app.user.profilePic %}
                                            <img src=\"{{ asset('uploads/profile_pics/' ~ app.user.profilePic) }}\" 
                                                 alt=\"{{ app.user.prenom }}\" 
                                                 class=\"user-avatar-img\">
                                        {% else %}
                                            <div class=\"user-avatar\">
                                                {{ app.user.prenom|first|upper }}{{ app.user.nom|first|upper }}
                                            </div>
                                        {% endif %}
                                        <div class=\"text-start ms-2\">
                                            <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                                                {{ app.user.prenom }} {{ app.user.nom }}
                                            </p>
                                            <small class=\"text-muted d-none d-sm-block\">
                                                {% if 'ROLE_ADMIN' in app.user.roles %}
                                                    <span class=\"badge badge-admin\">Admin</span>
                                                {% else %}
                                                    <span class=\"badge badge-etudiant\">Utilisateur</span>
                                                {% endif %}
                                            </small>
                                        </div>
                                    </div>
                                {% else %}
                                    <img class=\"img-xs rounded-circle\" src=\"{{ asset('assets/images/faces/face15.jpg') }}\" alt=\"\">
                                    <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                                {% endif %}
                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <div class=\"dropdown-header p-3\">
                                {% if app.user %}
                                    <h6 class=\"mb-0\">{{ app.user.prenom }} {{ app.user.nom }}</h6>
                                    <p class=\"text-muted mb-0\">{{ app.user.email }}</p>
                                    <small class=\"text-muted\">
                                        {% if 'ROLE_ADMIN' in app.user.roles %}
                                            <span class=\"badge badge-admin\">Administrateur</span>
                                        {% else %}
                                            <span class=\"badge badge-etudiant\">Utilisateur</span>
                                        {% endif %}
                                    </small>
                                {% else %}
                                    <h6 class=\"mb-0\">Non connecté</h6>
                                    <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                                {% endif %}
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            {% if app.user %}
                                <a class=\"dropdown-item preview-item\" href=\"{{ path('app_user_show', {id: app.user.id}) }}\">
                                    <div class=\"preview-thumbnail\">
                                        <div class=\"preview-icon bg-primary rounded-circle\">
                                            <i class=\"mdi mdi-account\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Mon profil</p>
                                    </div>
                                </a>
                                <a class=\"dropdown-item preview-item\" href=\"{{ path('app_user_edit', {id: app.user.id}) }}\">
                                    <div class=\"preview-thumbnail\">
                                        <div class=\"preview-icon bg-warning rounded-circle\">
                                            <i class=\"mdi mdi-account-edit\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Modifier mon profil</p>
                                    </div>
                                </a>
                                <div class=\"dropdown-divider\"></div>
                            {% endif %}
                            <a class=\"dropdown-item preview-item\" href=\"{{ path('app_logout') }}\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-logout text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Déconnexion</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <!-- Header -->
                <div class=\"page-header\">
                    <h3 class=\"page-title\">
                        <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                            <i class=\"mdi mdi-plus-circle\"></i>
                        </span> 
                        Nouvelle Séance
                    </h3>
                    <nav aria-label=\"breadcrumb\">
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_seance_index') }}\" class=\"text-primary\">
                                    <i class=\"mdi mdi-calendar-clock me-1\"></i>Séances
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                <span></span>Création
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Progress Steps -->
                <div class=\"progress-steps\">
                    <div class=\"step active\">
                        <div class=\"step-circle\">1</div>
                        <div class=\"step-label\">Informations</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-circle\">2</div>
                        <div class=\"step-label\">Type & Mode</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-circle\">3</div>
                        <div class=\"step-label\">Horaire</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-circle\">4</div>
                        <div class=\"step-label\">Localisation</div>
                    </div>
                </div>

                <!-- Flash Messages -->
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                            <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }} me-2\"></i>
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}

                <!-- Form Container -->
                <div class=\"form-main-container\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"form-container\">
                                <div class=\"form-header\">
                                    <h2>Créer une nouvelle séance</h2>
                                    <p>Remplissez tous les champs pour planifier une nouvelle séance</p>
                                </div>

                                {{ form_start(form, {'attr': {'class': 'seance-form', 'novalidate': 'novalidate'}}) }}
                                
                                <!-- Section 1: Basic Information -->
                                <div class=\"form-section\">
                                    <div class=\"section-header\">
                                        <div class=\"section-icon\">
                                            <i class=\"mdi mdi-information-outline\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"section-title\">Informations de base</h4>
                                            <p class=\"section-subtitle\">Informations essentielles sur la séance</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-grid\">
                                        <div class=\"form-group\">
                                            {{ form_label(form.matiere, null, {'label_attr': {'class': 'required'}}) }}
                                            {{ form_widget(form.matiere, {'attr': {
                                                'class': 'form-select'
                                            }}) }}
                                            {{ form_errors(form.matiere) }}
                                            <span class=\"help-text\">Sélectionnez la matière de la séance</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            {{ form_label(form.classe, null, {'label_attr': {'class': 'required'}}) }}
                                            {{ form_widget(form.classe, {'attr': {
                                                'class': 'form-select'
                                            }}) }}
                                            {{ form_errors(form.classe) }}
                                            <span class=\"help-text\">Sélectionnez la classe concernée</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            {{ form_label(form.jour, null, {'label_attr': {'class': 'required'}}) }}
                                            {{ form_widget(form.jour, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: Lundi, Mardi...'
                                            }}) }}
                                            {{ form_errors(form.jour) }}
                                            <span class=\"help-text\">Jour de la semaine où se déroule la séance</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Section 2: Type and Mode -->
                                <div class=\"form-section\">
                                    <div class=\"section-header\">
                                        <div class=\"section-icon\">
                                            <i class=\"mdi mdi-format-list-checks\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"section-title\">Type et mode de séance</h4>
                                            <p class=\"section-subtitle\">Définissez le format d'enseignement</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-grid\">
                                        <div class=\"form-group\">
                                            {{ form_label(form.typeSeance, null, {'label_attr': {'class': 'required'}}) }}
                                            {{ form_widget(form.typeSeance, {'attr': {
                                                'class': 'form-control' ~ (form.typeSeance.vars.errors|length > 0 ? ' is-invalid' : ''),
                                                'placeholder': 'Ex: Cours, TD, TP'
                                            }}) }}
                                            {{ form_errors(form.typeSeance) }}
                                            <span class=\"help-text\">Type d'enseignement (Cours, TD, TP)</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            {{ form_label(form.mode, null, {'label_attr': {'class': 'required'}}) }}
                                            {{ form_widget(form.mode, {'attr': {
                                                'class': 'form-control' ~ (form.mode.vars.errors|length > 0 ? ' is-invalid' : ''),
                                                'placeholder': 'Ex: Présentiel, Distanciel, Hybride'
                                            }}) }}
                                            {{ form_errors(form.mode) }}
                                            <span class=\"help-text\">Mode d'enseignement (Présentiel, Distanciel, Hybride)</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Section 3: Schedule -->
                                <div class=\"form-section\">
                                    <div class=\"section-header\">
                                        <div class=\"section-icon\">
                                            <i class=\"mdi mdi-clock-outline\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"section-title\">Horaire</h4>
                                            <p class=\"section-subtitle\">Définissez les dates et heures de la séance</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-grid\">
                                        <div class=\"form-group\">
                                            <label class=\"required\">Date et heure de début</label>
                                            {{ form_widget(form.heureDebut, {'attr': {
                                                'class': 'form-control datetime-input'
                                            }}) }}
                                            {{ form_errors(form.heureDebut) }}
                                            <span class=\"help-text\">Date et heure de début de la séance</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label class=\"required\">Date et heure de fin</label>
                                            {{ form_widget(form.heureFin, {'attr': {
                                                'class': 'form-control datetime-input'
                                            }}) }}
                                            {{ form_errors(form.heureFin) }}
                                            <span class=\"help-text\">Date et heure de fin de la séance</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Section 4: Location -->
                                <div class=\"form-section\">
                                    <div class=\"section-header\">
                                        <div class=\"section-icon\">
                                            <i class=\"mdi mdi-map-marker-outline\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"section-title\">Localisation</h4>
                                            <p class=\"section-subtitle\">Attribuez une salle à la séance</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-grid\">
                                        <div class=\"form-group\">
                                            {{ form_label(form.salle, null, {'label_attr': {'class': 'required'}}) }}
                                            {{ form_widget(form.salle, {'attr': {
                                                'class': 'form-select'
                                            }}) }}
                                            {{ form_errors(form.salle) }}
                                            <span class=\"help-text\">Salle attribuée à cette séance</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    <a href=\"{{ path('app_seance_index') }}\" class=\"btn btn-outline-secondary\">
                                        <i class=\"mdi mdi-arrow-left me-1\"></i>Retour
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-gradient-primary\">
                                        <i class=\"mdi mdi-check-circle me-1\"></i>Créer la séance
                                    </button>
                                </div>
                                
                                {{ form_end(form) }}
                                
                                <!-- Form Footer -->
                                <div class=\"form-footer\">
                                    <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                        © {{ 'now'|date('Y') }} ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        Création de séance | {{ \"now\"|date(\"d/m/Y H:i\") }}
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js') }}\"></script>
<script src=\"{{ asset('assets/vendors/chart.js/Chart.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('assets/js/misc.js') }}\"></script>
<script src=\"{{ asset('assets/js/dashboard.js') }}\"></script>
<script src=\"{{ asset('assets/js/chart.js') }}\"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const form = document.querySelector('.seance-form');
        const datetimeInputs = form.querySelectorAll('input[type=\"datetime-local\"]');
        
        // Update progress steps based on section visibility
        const steps = document.querySelectorAll('.step');
        const sections = document.querySelectorAll('.form-section');
        
        function updateProgressSteps() {
            let currentStep = 0;
            
            sections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();
                const viewHeight = Math.max(document.documentElement.clientHeight || window.innerHeight);
                const isVisible = (rect.top <= viewHeight / 2) && (rect.bottom >= viewHeight / 2);
                
                if (isVisible) {
                    currentStep = index + 1;
                }
            });
            
            steps.forEach((step, index) => {
                step.classList.remove('active', 'completed');
                if (index < currentStep) {
                    step.classList.add('completed');
                } else if (index === currentStep) {
                    step.classList.add('active');
                }
            });
        }
        
        // Initial update
        updateProgressSteps();
        
        // Update on scroll
        window.addEventListener('scroll', updateProgressSteps);
        
        // DateTime validation
        datetimeInputs.forEach(input => {
            input.addEventListener('change', function() {
                validateDateTimeRange();
            });
        });
        
        function validateDateTimeRange() {
            const startTime = document.querySelector('#{{ form.heureDebut.vars.id }}');
            const endTime = document.querySelector('#{{ form.heureFin.vars.id }}');
            
            if (startTime.value && endTime.value) {
                const startDate = new Date(startTime.value);
                const endDate = new Date(endTime.value);
                
                if (endDate <= startDate) {
                    // Add error class
                    startTime.classList.add('is-invalid');
                    endTime.classList.add('is-invalid');
                    
                    // Show error message for start time
                    let startErrorDiv = startTime.parentElement.querySelector('.error-message');
                    if (!startErrorDiv) {
                        startErrorDiv = document.createElement('div');
                        startErrorDiv.className = 'error-message';
                        startTime.parentElement.appendChild(startErrorDiv);
                    }
                    startErrorDiv.textContent = \"La date/heure de fin doit être après la date/heure de début\";
                    
                    // Show error message for end time
                    let endErrorDiv = endTime.parentElement.querySelector('.error-message');
                    if (!endErrorDiv) {
                        endErrorDiv = document.createElement('div');
                        endErrorDiv.className = 'error-message';
                        endTime.parentElement.appendChild(endErrorDiv);
                    }
                    endErrorDiv.textContent = \"La date/heure de fin doit être après la date/heure de début\";
                    
                    return false;
                } else {
                    // Remove error class
                    startTime.classList.remove('is-invalid');
                    endTime.classList.remove('is-invalid');
                    
                    // Remove error messages
                    const startErrorDiv = startTime.parentElement.querySelector('.error-message');
                    if (startErrorDiv) {
                        startErrorDiv.remove();
                    }
                    
                    const endErrorDiv = endTime.parentElement.querySelector('.error-message');
                    if (endErrorDiv) {
                        endErrorDiv.remove();
                    }
                    
                    return true;
                }
            }
            return true;
        }
        
        // Set default datetime values (today, rounded to nearest 30 minutes)
        function setDefaultDatetime() {
            const now = new Date();
            const startTime = document.querySelector('#{{ form.heureDebut.vars.id }}');
            const endTime = document.querySelector('#{{ form.heureFin.vars.id }}');
            
            // Round to nearest 30 minutes
            const minutes = Math.ceil(now.getMinutes() / 30) * 30;
            now.setMinutes(minutes);
            now.setSeconds(0);
            
            // Start time: now (rounded)
            const startDateTime = new Date(now);
            startTime.value = startDateTime.toISOString().slice(0, 16);
            
            // End time: 1.5 hours later
            const endDateTime = new Date(startDateTime);
            endDateTime.setHours(endDateTime.getHours() + 1);
            endDateTime.setMinutes(endDateTime.getMinutes() + 30);
            endTime.value = endDateTime.toISOString().slice(0, 16);
        }
        
        // Set default values if fields are empty
        window.addEventListener('load', function() {
            const startTime = document.querySelector('#{{ form.heureDebut.vars.id }}');
            const endTime = document.querySelector('#{{ form.heureFin.vars.id }}');
            
            if (!startTime.value || !endTime.value) {
                setDefaultDatetime();
            }
        });
        
        // Form submission validation
        form.addEventListener('submit', function(e) {
            // Add loading state to submit button
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            submitBtn.classList.add('btn-loading');
            submitBtn.disabled = true;
            
            // Validate datetime range
            if (!validateDateTimeRange()) {
                e.preventDefault();
                alert('Veuillez corriger les erreurs dans le formulaire. La date/heure de fin doit être après la date/heure de début.');
                submitBtn.classList.remove('btn-loading');
                submitBtn.disabled = false;
                return false;
            }
            
            // Check if all required fields are filled
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            let errorFields = [];
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                    const label = form.querySelector(`label[for=\"\${field.id}\"]`);
                    if (label) {
                        errorFields.push(label.textContent.replace(' *', '').trim());
                    }
                } else {
                    field.classList.remove('is-invalid');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires :\\n\\n• ' + errorFields.join('\\n• '));
                submitBtn.classList.remove('btn-loading');
                submitBtn.disabled = false;
                return false;
            }
            
            return true;
        });
        
        // Auto-remove invalid class on input
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                this.classList.remove('is-invalid');
            });
            
            input.addEventListener('focus', function() {
                // Scroll to the section containing this input
                const section = this.closest('.form-section');
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });
        
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
        
        // Search functionality
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    window.location.href = '{{ path('app_seance_index') }}?search=' + encodeURIComponent(this.value);
                }
            });
        }
        
        // Focus on first field
        const firstInput = form.querySelector('input, select');
        if (firstInput) {
            setTimeout(() => {
                firstInput.focus();
            }, 300);
        }
    });
</script>
</body>
</html>", "seance/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\seance\\new.html.twig");
    }
}
