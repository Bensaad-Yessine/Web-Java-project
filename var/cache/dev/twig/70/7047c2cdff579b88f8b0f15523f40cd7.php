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

/* seance/edit.html.twig */
class __TwigTemplate_bbb7b9aedd4a4b31a9e172066d725539 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Modifier Séance - ESPRIT</title>
    
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

        .form-control.is-invalid, .form-select.is-invalid, input[type=\"datetime-local\"].is-invalid {
            border-color: #dc3545;
        }

        .form-control.is-invalid:focus, .form-select.is-invalid:focus, input[type=\"datetime-local\"].is-invalid:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
        }

        /* Form Actions */
        .form-actions {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
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

        .btn-gradient-warning {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            color: #333;
            box-shadow: 0 4px 15px rgba(255, 154, 158, 0.3);
        }

        .btn-gradient-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 154, 158, 0.4);
            color: #333;
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

        .btn-gradient-danger {
            background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.3);
        }

        .btn-gradient-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 87, 108, 0.4);
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

        /* Seance Info Card */
        .seance-info-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid #667eea;
        }

        .seance-info-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .seance-info-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 15px;
            font-size: 18px;
        }

        .seance-info-content h5 {
            margin: 0;
            color: #333;
            font-weight: 600;
        }

        .seance-info-content p {
            margin: 5px 0 0 0;
            color: #666;
            font-size: 14px;
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
        // line 641
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                <img src=\"";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 644
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                <img src=\"";
        // line 645
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
        // line 653
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 653, $this->source); })()), "user", [], "any", false, false, false, 653)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 654
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 654, $this->source); })()), "user", [], "any", false, false, false, 654), "profilePic", [], "any", false, false, false, 654)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 655
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 655, $this->source); })()), "user", [], "any", false, false, false, 655), "profilePic", [], "any", false, false, false, 655))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 656
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 656, $this->source); })()), "user", [], "any", false, false, false, 656), "prenom", [], "any", false, false, false, 656), "html", null, true);
                yield "\" 
                                         class=\"profile-avatar-img\">
                                ";
            } else {
                // line 659
                yield "                                    <div class=\"profile-avatar\">
                                        ";
                // line 660
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 660, $this->source); })()), "user", [], "any", false, false, false, 660), "prenom", [], "any", false, false, false, 660))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 660, $this->source); })()), "user", [], "any", false, false, false, 660), "nom", [], "any", false, false, false, 660))), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 663
            yield "                            ";
        } else {
            // line 664
            yield "                                <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                            ";
        }
        // line 666
        yield "                            <span class=\"count bg-success\"></span>
                        </div>
                        <div class=\"profile-name\">
                            ";
        // line 669
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 669, $this->source); })()), "user", [], "any", false, false, false, 669)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 670
            yield "                                <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 670, $this->source); })()), "user", [], "any", false, false, false, 670), "prenom", [], "any", false, false, false, 670), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 670, $this->source); })()), "user", [], "any", false, false, false, 670), "nom", [], "any", false, false, false, 670), "html", null, true);
            yield "</h5>
                                <span class=\"text-muted\">";
            // line 671
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 671, $this->source); })()), "user", [], "any", false, false, false, 671), "email", [], "any", false, false, false, 671), "html", null, true);
            yield "</span>
                                <div class=\"mt-1\">
                                    ";
            // line 673
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 673, $this->source); })()), "user", [], "any", false, false, false, 673), "roles", [], "any", false, false, false, 673))) {
                // line 674
                yield "                                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                                    ";
            } else {
                // line 676
                yield "                                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                                    ";
            }
            // line 678
            yield "                                </div>
                            ";
        } else {
            // line 680
            yield "                                <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                                <span>Veuillez vous connecter</span>
                            ";
        }
        // line 683
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
        // line 703
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
        // line 713
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
        // line 723
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
        // line 733
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
        // line 743
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
        // line 763
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
        // line 783
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
        // line 793
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
        // line 808
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
                                    <p class=\"preview-subject mb-1\">Séance modifiée</p>
                                    <p class=\"text-muted ellipsis mb-0\">Séance Mathématiques mise à jour</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                ";
        // line 847
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 847, $this->source); })()), "user", [], "any", false, false, false, 847)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 848
            yield "                                    <div class=\"avatar-container\">
                                        ";
            // line 849
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 849, $this->source); })()), "user", [], "any", false, false, false, 849), "profilePic", [], "any", false, false, false, 849)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 850
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 850, $this->source); })()), "user", [], "any", false, false, false, 850), "profilePic", [], "any", false, false, false, 850))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 851
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 851, $this->source); })()), "user", [], "any", false, false, false, 851), "prenom", [], "any", false, false, false, 851), "html", null, true);
                yield "\" 
                                                 class=\"user-avatar-img\">
                                        ";
            } else {
                // line 854
                yield "                                            <div class=\"user-avatar\">
                                                ";
                // line 855
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 855, $this->source); })()), "user", [], "any", false, false, false, 855), "prenom", [], "any", false, false, false, 855))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 855, $this->source); })()), "user", [], "any", false, false, false, 855), "nom", [], "any", false, false, false, 855))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 858
            yield "                                        <div class=\"text-start ms-2\">
                                            <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                                                ";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 860, $this->source); })()), "user", [], "any", false, false, false, 860), "prenom", [], "any", false, false, false, 860), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 860, $this->source); })()), "user", [], "any", false, false, false, 860), "nom", [], "any", false, false, false, 860), "html", null, true);
            yield "
                                            </p>
                                            <small class=\"text-muted d-none d-sm-block\">
                                                ";
            // line 863
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 863, $this->source); })()), "user", [], "any", false, false, false, 863), "roles", [], "any", false, false, false, 863))) {
                // line 864
                yield "                                                    <span class=\"badge badge-admin\">Admin</span>
                                                ";
            } else {
                // line 866
                yield "                                                    <span class=\"badge badge-etudiant\">Utilisateur</span>
                                                ";
            }
            // line 868
            yield "                                            </small>
                                        </div>
                                    </div>
                                ";
        } else {
            // line 872
            yield "                                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                    <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                                ";
        }
        // line 875
        yield "                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <div class=\"dropdown-header p-3\">
                                ";
        // line 880
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 880, $this->source); })()), "user", [], "any", false, false, false, 880)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 881
            yield "                                    <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 881, $this->source); })()), "user", [], "any", false, false, false, 881), "prenom", [], "any", false, false, false, 881), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 881, $this->source); })()), "user", [], "any", false, false, false, 881), "nom", [], "any", false, false, false, 881), "html", null, true);
            yield "</h6>
                                    <p class=\"text-muted mb-0\">";
            // line 882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 882, $this->source); })()), "user", [], "any", false, false, false, 882), "email", [], "any", false, false, false, 882), "html", null, true);
            yield "</p>
                                    <small class=\"text-muted\">
                                        ";
            // line 884
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 884, $this->source); })()), "user", [], "any", false, false, false, 884), "roles", [], "any", false, false, false, 884))) {
                // line 885
                yield "                                            <span class=\"badge badge-admin\">Administrateur</span>
                                        ";
            } else {
                // line 887
                yield "                                            <span class=\"badge badge-etudiant\">Utilisateur</span>
                                        ";
            }
            // line 889
            yield "                                    </small>
                                ";
        } else {
            // line 891
            yield "                                    <h6 class=\"mb-0\">Non connecté</h6>
                                    <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                                ";
        }
        // line 894
        yield "                            </div>
                            <div class=\"dropdown-divider\"></div>
                            ";
        // line 896
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 896, $this->source); })()), "user", [], "any", false, false, false, 896)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 897
            yield "                                <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 897, $this->source); })()), "user", [], "any", false, false, false, 897), "id", [], "any", false, false, false, 897)]), "html", null, true);
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
            // line 907
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 907, $this->source); })()), "user", [], "any", false, false, false, 907), "id", [], "any", false, false, false, 907)]), "html", null, true);
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
        // line 919
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
                            <i class=\"mdi mdi-pencil-circle\"></i>
                        </span> 
                        Modifier la Séance
                    </h3>
                    <nav aria-label=\"breadcrumb\">
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 949
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\" class=\"text-primary\">
                                    <i class=\"mdi mdi-calendar-clock me-1\"></i>Séances
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 954
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 954, $this->source); })()), "id", [], "any", false, false, false, 954)]), "html", null, true);
        yield "\" class=\"text-primary\">
                                    <i class=\"mdi mdi-eye me-1\"></i>Détails
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                <span></span>Modification
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Séance Information Card -->
                <div class=\"seance-info-card\">
                    <div class=\"seance-info-header\">
                        <div class=\"seance-info-icon\">
                            <i class=\"mdi mdi-information-outline\"></i>
                        </div>
                        <div class=\"seance-info-content\">
                            <h5>Informations sur la séance</h5>
                            <p>ID: #";
        // line 973
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 973, $this->source); })()), "id", [], "any", false, false, false, 973), "html", null, true);
        yield " | Créée le: ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 973, $this->source); })()), "createdAt", [], "any", false, false, false, 973)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 973, $this->source); })()), "createdAt", [], "any", false, false, false, 973), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</p>
                        </div>
                    </div>
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
        // line 999
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 999, $this->source); })()), "flashes", [], "any", false, false, false, 999));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 1000
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 1001
                yield "                        <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                            <i class=\"mdi mdi-";
                // line 1002
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                            ";
                // line 1003
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1007
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1008
        yield "
                <!-- Form Container -->
                <div class=\"form-main-container\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"form-container\">
                                <div class=\"form-header\">
                                    <h2>Modifier la séance #";
        // line 1015
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1015, $this->source); })()), "id", [], "any", false, false, false, 1015), "html", null, true);
        yield "</h2>
                                    <p>Modifiez les champs nécessaires pour mettre à jour cette séance</p>
                                </div>

                                ";
        // line 1019
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1019, $this->source); })()), 'form_start', ["attr" => ["class" => "seance-form", "novalidate" => "novalidate"]]);
        yield "
                                ";
        // line 1020
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1020, $this->source); })()), "_token", [], "any", false, false, false, 1020), 'widget');
        yield " <!-- Ensure CSRF token is included -->

                                
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
        // line 1037
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1037, $this->source); })()), "matiere", [], "any", false, false, false, 1037), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 1038
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1038, $this->source); })()), "matiere", [], "any", false, false, false, 1038), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1040
        yield "
                                            ";
        // line 1041
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1041, $this->source); })()), "matiere", [], "any", false, false, false, 1041), 'errors');
        yield "
                                            <span class=\"help-text\">Sélectionnez la matière de la séance</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            ";
        // line 1046
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1046, $this->source); })()), "classe", [], "any", false, false, false, 1046), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 1047
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1047, $this->source); })()), "classe", [], "any", false, false, false, 1047), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1049
        yield "
                                            ";
        // line 1050
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1050, $this->source); })()), "classe", [], "any", false, false, false, 1050), 'errors');
        yield "
                                            <span class=\"help-text\">Sélectionnez la classe concernée</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            ";
        // line 1055
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1055, $this->source); })()), "jour", [], "any", false, false, false, 1055), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 1056
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1056, $this->source); })()), "jour", [], "any", false, false, false, 1056), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Lundi, Mardi..."]]);
        // line 1059
        yield "
                                            ";
        // line 1060
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1060, $this->source); })()), "jour", [], "any", false, false, false, 1060), 'errors');
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
        // line 1080
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1080, $this->source); })()), "typeSeance", [], "any", false, false, false, 1080), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 1081
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1081, $this->source); })()), "typeSeance", [], "any", false, false, false, 1081), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1082
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1082, $this->source); })()), "typeSeance", [], "any", false, false, false, 1082), "vars", [], "any", false, false, false, 1082), "errors", [], "any", false, false, false, 1082)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Ex: Cours, TD, TP"]]);
        // line 1084
        yield "
                                            ";
        // line 1085
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1085, $this->source); })()), "typeSeance", [], "any", false, false, false, 1085), 'errors');
        yield "
                                            <span class=\"help-text\">Type d'enseignement (Cours, TD, TP)</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            ";
        // line 1090
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1090, $this->source); })()), "mode", [], "any", false, false, false, 1090), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 1091
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1091, $this->source); })()), "mode", [], "any", false, false, false, 1091), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1092
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1092, $this->source); })()), "mode", [], "any", false, false, false, 1092), "vars", [], "any", false, false, false, 1092), "errors", [], "any", false, false, false, 1092)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Ex: Présentiel, Distanciel, Hybride"]]);
        // line 1094
        yield "
                                            ";
        // line 1095
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1095, $this->source); })()), "mode", [], "any", false, false, false, 1095), 'errors');
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
        // line 1116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1116, $this->source); })()), "heureDebut", [], "any", false, false, false, 1116), 'widget', ["attr" => ["class" => "form-control datetime-input"]]);
        // line 1118
        yield "
                                            ";
        // line 1119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1119, $this->source); })()), "heureDebut", [], "any", false, false, false, 1119), 'errors');
        yield "
                                            <span class=\"help-text\">Date et heure de début de la séance</span>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label class=\"required\">Date et heure de fin</label>
                                            ";
        // line 1125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1125, $this->source); })()), "heureFin", [], "any", false, false, false, 1125), 'widget', ["attr" => ["class" => "form-control datetime-input"]]);
        // line 1127
        yield "
                                            ";
        // line 1128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1128, $this->source); })()), "heureFin", [], "any", false, false, false, 1128), 'errors');
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
        // line 1148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1148, $this->source); })()), "salle", [], "any", false, false, false, 1148), 'label', ["label_attr" => ["class" => "required"]]);
        yield "
                                            ";
        // line 1149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1149, $this->source); })()), "salle", [], "any", false, false, false, 1149), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1151
        yield "
                                            ";
        // line 1152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1152, $this->source); })()), "salle", [], "any", false, false, false, 1152), 'errors');
        yield "
                                            <span class=\"help-text\">Salle attribuée à cette séance</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"";
        // line 1161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1161, $this->source); })()), "id", [], "any", false, false, false, 1161)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                                            <i class=\"mdi mdi-eye me-1\"></i>Voir
                                        </a>
                                        <a href=\"";
        // line 1164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                            <i class=\"mdi mdi-arrow-left me-1\"></i>Retour
                                        </a>
                                    </div>
                                    
                                    <div class=\"d-flex gap-2\">
                                        ";
        // line 1170
        yield Twig\Extension\CoreExtension::include($this->env, $context, "seance/_delete_form.html.twig");
        yield "
                                        
                                        <button type=\"submit\" class=\"btn btn-gradient-primary\">
                                            <i class=\"mdi mdi-content-save me-1\"></i>Enregistrer
                                        </button>
                                    </div>
                                </div>
                                
                                ";
        // line 1178
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1178, $this->source); })()), 'form_end');
        yield "
                                
                                <!-- Form Footer -->
                                <div class=\"form-footer\">
                                    <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                                    <p class=\"text-muted mt-2\">
                                        <i class=\"mdi mdi-information-outline me-1\"></i>
                                        Dernière modification: ";
        // line 1185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
                                    </p>
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
        // line 1198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        Modification de séance | ";
        // line 1201
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
        // line 1210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1216
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
        // line 1265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1265, $this->source); })()), "heureDebut", [], "any", false, false, false, 1265), "vars", [], "any", false, false, false, 1265), "id", [], "any", false, false, false, 1265), "html", null, true);
        yield "');
            const endTime = document.querySelector('#";
        // line 1266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1266, $this->source); })()), "heureFin", [], "any", false, false, false, 1266), "vars", [], "any", false, false, false, 1266), "id", [], "any", false, false, false, 1266), "html", null, true);
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
        
        // Format datetime for display
        function formatDateTimeForInput(dateTime) {
            if (!dateTime) return '';
            const date = new Date(dateTime);
            return date.toISOString().slice(0, 16);
        }
        
        // Set initial values for datetime inputs
        window.addEventListener('load', function() {
            const startTime = document.querySelector('#";
        // line 1327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1327, $this->source); })()), "heureDebut", [], "any", false, false, false, 1327), "vars", [], "any", false, false, false, 1327), "id", [], "any", false, false, false, 1327), "html", null, true);
        yield "');
            const endTime = document.querySelector('#";
        // line 1328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1328, $this->source); })()), "heureFin", [], "any", false, false, false, 1328), "vars", [], "any", false, false, false, 1328), "id", [], "any", false, false, false, 1328), "html", null, true);
        yield "');
            
            // If values are not already set, format them
            if (startTime && !startTime.value && '";
        // line 1331
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1331, $this->source); })()), "heureDebut", [], "any", false, false, false, 1331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1331, $this->source); })()), "heureDebut", [], "any", false, false, false, 1331), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "') {
                startTime.value = '";
        // line 1332
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1332, $this->source); })()), "heureDebut", [], "any", false, false, false, 1332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1332, $this->source); })()), "heureDebut", [], "any", false, false, false, 1332), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "';
            }
            
            if (endTime && !endTime.value && '";
        // line 1335
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1335, $this->source); })()), "heureFin", [], "any", false, false, false, 1335)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1335, $this->source); })()), "heureFin", [], "any", false, false, false, 1335), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "') {
                endTime.value = '";
        // line 1336
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1336, $this->source); })()), "heureFin", [], "any", false, false, false, 1336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1336, $this->source); })()), "heureFin", [], "any", false, false, false, 1336), "Y-m-d\\TH:i"), "html", null, true)) : (""));
        yield "';
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
        // line 1416
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "?search=' + encodeURIComponent(this.value);
                }
            });
        }
        
        // Delete confirmation
        const deleteForm = document.querySelector('.delete-form');
        if (deleteForm) {
            deleteForm.addEventListener('submit', function(e) {
                if (!confirm('Êtes-vous sûr de vouloir supprimer cette séance ? Cette action est irréversible.')) {
                    e.preventDefault();
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
        return "seance/edit.html.twig";
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
        return array (  1810 => 1416,  1727 => 1336,  1723 => 1335,  1717 => 1332,  1713 => 1331,  1707 => 1328,  1703 => 1327,  1639 => 1266,  1635 => 1265,  1583 => 1216,  1579 => 1215,  1575 => 1214,  1571 => 1213,  1567 => 1212,  1563 => 1211,  1559 => 1210,  1547 => 1201,  1541 => 1198,  1525 => 1185,  1515 => 1178,  1504 => 1170,  1495 => 1164,  1489 => 1161,  1477 => 1152,  1474 => 1151,  1472 => 1149,  1468 => 1148,  1445 => 1128,  1442 => 1127,  1440 => 1125,  1431 => 1119,  1428 => 1118,  1426 => 1116,  1402 => 1095,  1399 => 1094,  1397 => 1092,  1396 => 1091,  1392 => 1090,  1384 => 1085,  1381 => 1084,  1379 => 1082,  1378 => 1081,  1374 => 1080,  1351 => 1060,  1348 => 1059,  1346 => 1056,  1342 => 1055,  1334 => 1050,  1331 => 1049,  1329 => 1047,  1325 => 1046,  1317 => 1041,  1314 => 1040,  1312 => 1038,  1308 => 1037,  1288 => 1020,  1284 => 1019,  1277 => 1015,  1268 => 1008,  1262 => 1007,  1252 => 1003,  1248 => 1002,  1243 => 1001,  1238 => 1000,  1234 => 999,  1203 => 973,  1181 => 954,  1173 => 949,  1139 => 919,  1124 => 907,  1110 => 897,  1108 => 896,  1104 => 894,  1099 => 891,  1095 => 889,  1091 => 887,  1087 => 885,  1085 => 884,  1080 => 882,  1073 => 881,  1071 => 880,  1064 => 875,  1057 => 872,  1051 => 868,  1047 => 866,  1043 => 864,  1041 => 863,  1033 => 860,  1029 => 858,  1022 => 855,  1019 => 854,  1013 => 851,  1008 => 850,  1006 => 849,  1003 => 848,  1001 => 847,  959 => 808,  941 => 793,  928 => 783,  905 => 763,  882 => 743,  869 => 733,  856 => 723,  843 => 713,  830 => 703,  808 => 683,  803 => 680,  799 => 678,  795 => 676,  791 => 674,  789 => 673,  784 => 671,  777 => 670,  775 => 669,  770 => 666,  764 => 664,  761 => 663,  754 => 660,  751 => 659,  745 => 656,  740 => 655,  737 => 654,  735 => 653,  724 => 645,  720 => 644,  715 => 642,  711 => 641,  83 => 16,  79 => 15,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Modifier Séance - ESPRIT</title>
    
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

        .form-control.is-invalid, .form-select.is-invalid, input[type=\"datetime-local\"].is-invalid {
            border-color: #dc3545;
        }

        .form-control.is-invalid:focus, .form-select.is-invalid:focus, input[type=\"datetime-local\"].is-invalid:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
        }

        /* Form Actions */
        .form-actions {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
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

        .btn-gradient-warning {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            color: #333;
            box-shadow: 0 4px 15px rgba(255, 154, 158, 0.3);
        }

        .btn-gradient-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 154, 158, 0.4);
            color: #333;
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

        .btn-gradient-danger {
            background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.3);
        }

        .btn-gradient-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 87, 108, 0.4);
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

        /* Seance Info Card */
        .seance-info-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid #667eea;
        }

        .seance-info-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .seance-info-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 15px;
            font-size: 18px;
        }

        .seance-info-content h5 {
            margin: 0;
            color: #333;
            font-weight: 600;
        }

        .seance-info-content p {
            margin: 5px 0 0 0;
            color: #666;
            font-size: 14px;
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
                                    <p class=\"preview-subject mb-1\">Séance modifiée</p>
                                    <p class=\"text-muted ellipsis mb-0\">Séance Mathématiques mise à jour</p>
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
                            <i class=\"mdi mdi-pencil-circle\"></i>
                        </span> 
                        Modifier la Séance
                    </h3>
                    <nav aria-label=\"breadcrumb\">
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_seance_index') }}\" class=\"text-primary\">
                                    <i class=\"mdi mdi-calendar-clock me-1\"></i>Séances
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_seance_show', {'id': seance.id}) }}\" class=\"text-primary\">
                                    <i class=\"mdi mdi-eye me-1\"></i>Détails
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                <span></span>Modification
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Séance Information Card -->
                <div class=\"seance-info-card\">
                    <div class=\"seance-info-header\">
                        <div class=\"seance-info-icon\">
                            <i class=\"mdi mdi-information-outline\"></i>
                        </div>
                        <div class=\"seance-info-content\">
                            <h5>Informations sur la séance</h5>
                            <p>ID: #{{ seance.id }} | Créée le: {{ seance.createdAt ? seance.createdAt|date('d/m/Y H:i') : 'N/A' }}</p>
                        </div>
                    </div>
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
                                    <h2>Modifier la séance #{{ seance.id }}</h2>
                                    <p>Modifiez les champs nécessaires pour mettre à jour cette séance</p>
                                </div>

                                {{ form_start(form, {'attr': {'class': 'seance-form', 'novalidate': 'novalidate'}}) }}
                                {{ form_widget(form._token) }} <!-- Ensure CSRF token is included -->

                                
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
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"{{ path('app_seance_show', {'id': seance.id}) }}\" class=\"btn btn-outline-secondary\">
                                            <i class=\"mdi mdi-eye me-1\"></i>Voir
                                        </a>
                                        <a href=\"{{ path('app_seance_index') }}\" class=\"btn btn-outline-secondary\">
                                            <i class=\"mdi mdi-arrow-left me-1\"></i>Retour
                                        </a>
                                    </div>
                                    
                                    <div class=\"d-flex gap-2\">
                                        {{ include('seance/_delete_form.html.twig') }}
                                        
                                        <button type=\"submit\" class=\"btn btn-gradient-primary\">
                                            <i class=\"mdi mdi-content-save me-1\"></i>Enregistrer
                                        </button>
                                    </div>
                                </div>
                                
                                {{ form_end(form) }}
                                
                                <!-- Form Footer -->
                                <div class=\"form-footer\">
                                    <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                                    <p class=\"text-muted mt-2\">
                                        <i class=\"mdi mdi-information-outline me-1\"></i>
                                        Dernière modification: {{ \"now\"|date(\"d/m/Y H:i\") }}
                                    </p>
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
                        Modification de séance | {{ \"now\"|date(\"d/m/Y H:i\") }}
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
        
        // Format datetime for display
        function formatDateTimeForInput(dateTime) {
            if (!dateTime) return '';
            const date = new Date(dateTime);
            return date.toISOString().slice(0, 16);
        }
        
        // Set initial values for datetime inputs
        window.addEventListener('load', function() {
            const startTime = document.querySelector('#{{ form.heureDebut.vars.id }}');
            const endTime = document.querySelector('#{{ form.heureFin.vars.id }}');
            
            // If values are not already set, format them
            if (startTime && !startTime.value && '{{ seance.heureDebut ? seance.heureDebut|date(\"Y-m-d\\\\TH:i\") : \"\" }}') {
                startTime.value = '{{ seance.heureDebut ? seance.heureDebut|date(\"Y-m-d\\\\TH:i\") : \"\" }}';
            }
            
            if (endTime && !endTime.value && '{{ seance.heureFin ? seance.heureFin|date(\"Y-m-d\\\\TH:i\") : \"\" }}') {
                endTime.value = '{{ seance.heureFin ? seance.heureFin|date(\"Y-m-d\\\\TH:i\") : \"\" }}';
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
        
        // Delete confirmation
        const deleteForm = document.querySelector('.delete-form');
        if (deleteForm) {
            deleteForm.addEventListener('submit', function(e) {
                if (!confirm('Êtes-vous sûr de vouloir supprimer cette séance ? Cette action est irréversible.')) {
                    e.preventDefault();
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
</html>", "seance/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\seance\\edit.html.twig");
    }
}
