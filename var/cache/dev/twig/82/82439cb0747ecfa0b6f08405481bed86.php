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

/* seance/show.html.twig */
class __TwigTemplate_ad33dc46327ee6ef9a7b4cb4824e8c9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Détails Séance - ESPRIT</title>
    
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
        .details-main-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .details-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-top: 30px;
            position: relative;
            overflow: hidden;
        }

        .details-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .details-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eaeaea;
        }

        .details-header h2 {
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .details-header p {
            color: #666;
            font-size: 16px;
            margin-bottom: 0;
        }

        /* Card Styles */
        .seance-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #667eea;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: white;
            font-size: 24px;
        }

        .card-title {
            font-size: 22px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .card-subtitle {
            font-size: 14px;
            color: #666;
            margin: 5px 0 0 0;
        }

        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
        }

        .info-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #eaeaea;
            transition: all 0.3s;
        }

        .info-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-color: #667eea;
        }

        .info-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .info-label i {
            font-size: 16px;
        }

        .info-value {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            margin: 0;
        }

        .info-value.null {
            color: #999;
            font-style: italic;
        }

        /* Status Badges */
        .badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-presentiel {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
        }

        .badge-enligne {
            background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%);
            color: white;
        }

        .badge-matinale {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            color: #333;
        }

        .badge-apresmidi {
            background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%);
            color: white;
        }

        .badge-day {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid #eaeaea;
            flex-wrap: wrap;
        }

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
            text-decoration: none;
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
            color: white;
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

        .btn-gradient-danger {
            background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.3);
        }

        .btn-gradient-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 87, 108, 0.4);
            color: white;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 30px;
            margin: 25px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #667eea, #764ba2);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -33px;
            top: 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #667eea;
            border: 3px solid white;
            box-shadow: 0 0 0 2px #667eea;
        }

        .timeline-time {
            font-size: 14px;
            font-weight: 600;
            color: #667eea;
            margin-bottom: 5px;
        }

        .timeline-content {
            font-size: 14px;
            color: #666;
        }

        /* Related Entities Cards */
        .entity-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #eaeaea;
            margin-bottom: 15px;
            transition: all 0.3s;
        }

        .entity-card:hover {
            border-color: #667eea;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.1);
        }

        .entity-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .entity-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            margin-right: 15px;
        }

        .entity-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .entity-subtitle {
            font-size: 12px;
            color: #666;
            margin: 2px 0 0 0;
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
        .details-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
            text-align: center;
            color: #666;
            font-size: 12px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .details-container {
                padding: 20px;
                margin-top: 20px;
            }
            
            .details-header h2 {
                font-size: 24px;
            }
            
            .card-header {
                flex-direction: column;
                text-align: center;
            }
            
            .card-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .action-buttons .btn {
                width: 100%;
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

        .seance-card, .info-item, .entity-card {
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

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #666;
        }

        .empty-state-icon {
            font-size: 48px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state-text {
            font-size: 16px;
            color: #999;
        }
         .sidebar .profile-pic .count-indicator {
        width: 40px !important;
        height: 40px !important;
        min-width: 40px !important;
        min-height: 40px !important;
    }
    
    .sidebar .profile-pic .count-indicator img,
    .sidebar .profile-pic .count-indicator .profile-avatar-img,
    .sidebar .profile-pic .count-indicator .img-xs {
        width: 40px !important;
        height: 40px !important;
        border-radius: 50% !important;
        object-fit: cover !important;
    }
    
    .sidebar .profile-pic .count-indicator .profile-avatar {
        width: 40px !important;
        height: 40px !important;
        border-radius: 50% !important;
        font-size: 16px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    /* Navbar profile */
    .navbar .navbar-profile .avatar-container img,
    .navbar .navbar-profile .avatar-container .user-avatar-img,
    .navbar .navbar-profile .img-xs {
        width: 32px !important;
        height: 32px !important;
        border-radius: 50% !important;
        object-fit: cover !important;
    }
    
    .navbar .navbar-profile .avatar-container .user-avatar {
        width: 32px !important;
        height: 32px !important;
        border-radius: 50% !important;
        font-size: 14px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    /* Fix alignment */
    .navbar .navbar-profile .avatar-container {
        align-items: center !important;
        gap: 8px !important;
    }
    
    </style>
</head>
<body>
<div class=\"container-scroller\">
    <!-- Sidebar -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 543
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                <img src=\"";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 546
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                <img src=\"";
        // line 547
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
        // line 555
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "user", [], "any", false, false, false, 555)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 556
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 556, $this->source); })()), "user", [], "any", false, false, false, 556), "profilePic", [], "any", false, false, false, 556)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 557
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 557, $this->source); })()), "user", [], "any", false, false, false, 557), "profilePic", [], "any", false, false, false, 557))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 558, $this->source); })()), "user", [], "any", false, false, false, 558), "prenom", [], "any", false, false, false, 558), "html", null, true);
                yield "\" 
                                         class=\"profile-avatar-img\">
                                ";
            } else {
                // line 561
                yield "                                    <div class=\"profile-avatar\">
                                        ";
                // line 562
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 562, $this->source); })()), "user", [], "any", false, false, false, 562), "prenom", [], "any", false, false, false, 562))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 562, $this->source); })()), "user", [], "any", false, false, false, 562), "nom", [], "any", false, false, false, 562))), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 565
            yield "                            ";
        } else {
            // line 566
            yield "                                <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                            ";
        }
        // line 568
        yield "                            <span class=\"count bg-success\"></span>
                        </div>
                        <div class=\"profile-name\">
                            ";
        // line 571
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 571, $this->source); })()), "user", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "                                <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 572, $this->source); })()), "user", [], "any", false, false, false, 572), "prenom", [], "any", false, false, false, 572), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 572, $this->source); })()), "user", [], "any", false, false, false, 572), "nom", [], "any", false, false, false, 572), "html", null, true);
            yield "</h5>
                                <span class=\"text-muted\">";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 573, $this->source); })()), "user", [], "any", false, false, false, 573), "email", [], "any", false, false, false, 573), "html", null, true);
            yield "</span>
                                <div class=\"mt-1\">
                                    ";
            // line 575
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 575, $this->source); })()), "user", [], "any", false, false, false, 575), "roles", [], "any", false, false, false, 575))) {
                // line 576
                yield "                                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                                    ";
            } else {
                // line 578
                yield "                                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                                    ";
            }
            // line 580
            yield "                                </div>
                            ";
        } else {
            // line 582
            yield "                                <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                                <span>Veuillez vous connecter</span>
                            ";
        }
        // line 585
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
        // line 605
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
        // line 615
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
        // line 625
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
        // line 635
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
        // line 645
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
        // line 665
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
        // line 685
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
        // line 695
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
        // line 710
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
                                    <p class=\"preview-subject mb-1\">Séance à venir</p>
                                    <p class=\"text-muted ellipsis mb-0\">Mathématiques dans 30 minutes</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                ";
        // line 749
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 749, $this->source); })()), "user", [], "any", false, false, false, 749)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 750
            yield "                                    <div class=\"avatar-container\">
                                        ";
            // line 751
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 751, $this->source); })()), "user", [], "any", false, false, false, 751), "profilePic", [], "any", false, false, false, 751)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 752
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 752, $this->source); })()), "user", [], "any", false, false, false, 752), "profilePic", [], "any", false, false, false, 752))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 753
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 753, $this->source); })()), "user", [], "any", false, false, false, 753), "prenom", [], "any", false, false, false, 753), "html", null, true);
                yield "\" 
                                                 class=\"user-avatar-img\">
                                        ";
            } else {
                // line 756
                yield "                                            <div class=\"user-avatar\">
                                                ";
                // line 757
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 757, $this->source); })()), "user", [], "any", false, false, false, 757), "prenom", [], "any", false, false, false, 757))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 757, $this->source); })()), "user", [], "any", false, false, false, 757), "nom", [], "any", false, false, false, 757))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 760
            yield "                                        <div class=\"text-start ms-2\">
                                            <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                                                ";
            // line 762
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 762, $this->source); })()), "user", [], "any", false, false, false, 762), "prenom", [], "any", false, false, false, 762), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 762, $this->source); })()), "user", [], "any", false, false, false, 762), "nom", [], "any", false, false, false, 762), "html", null, true);
            yield "
                                            </p>
                                            <small class=\"text-muted d-none d-sm-block\">
                                                ";
            // line 765
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 765, $this->source); })()), "user", [], "any", false, false, false, 765), "roles", [], "any", false, false, false, 765))) {
                // line 766
                yield "                                                    <span class=\"badge badge-admin\">Admin</span>
                                                ";
            } else {
                // line 768
                yield "                                                    <span class=\"badge badge-etudiant\">Utilisateur</span>
                                                ";
            }
            // line 770
            yield "                                            </small>
                                        </div>
                                    </div>
                                ";
        } else {
            // line 774
            yield "                                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                    <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                                ";
        }
        // line 777
        yield "                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <div class=\"dropdown-header p-3\">
                                ";
        // line 782
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 782, $this->source); })()), "user", [], "any", false, false, false, 782)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 783
            yield "                                    <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 783, $this->source); })()), "user", [], "any", false, false, false, 783), "prenom", [], "any", false, false, false, 783), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 783, $this->source); })()), "user", [], "any", false, false, false, 783), "nom", [], "any", false, false, false, 783), "html", null, true);
            yield "</h6>
                                    <p class=\"text-muted mb-0\">";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 784, $this->source); })()), "user", [], "any", false, false, false, 784), "email", [], "any", false, false, false, 784), "html", null, true);
            yield "</p>
                                    <small class=\"text-muted\">
                                        ";
            // line 786
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 786, $this->source); })()), "user", [], "any", false, false, false, 786), "roles", [], "any", false, false, false, 786))) {
                // line 787
                yield "                                            <span class=\"badge badge-admin\">Administrateur</span>
                                        ";
            } else {
                // line 789
                yield "                                            <span class=\"badge badge-etudiant\">Utilisateur</span>
                                        ";
            }
            // line 791
            yield "                                    </small>
                                ";
        } else {
            // line 793
            yield "                                    <h6 class=\"mb-0\">Non connecté</h6>
                                    <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                                ";
        }
        // line 796
        yield "                            </div>
                            <div class=\"dropdown-divider\"></div>
                            ";
        // line 798
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 798, $this->source); })()), "user", [], "any", false, false, false, 798)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 799
            yield "                                <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 799, $this->source); })()), "user", [], "any", false, false, false, 799), "id", [], "any", false, false, false, 799)]), "html", null, true);
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
            // line 809
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 809, $this->source); })()), "user", [], "any", false, false, false, 809), "id", [], "any", false, false, false, 809)]), "html", null, true);
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
        // line 821
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
                            <i class=\"mdi mdi-eye\"></i>
                        </span> 
                        Détails de la Séance
                    </h3>
                    <nav aria-label=\"breadcrumb\">
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 851
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\" class=\"text-primary\">
                                    <i class=\"mdi mdi-calendar-clock me-1\"></i>Séances
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                <span></span>Détails #";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 856, $this->source); })()), "id", [], "any", false, false, false, 856), "html", null, true);
        yield "
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Flash Messages -->
                ";
        // line 863
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 863, $this->source); })()), "flashes", [], "any", false, false, false, 863));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 864
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 865
                yield "                        <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                            <i class=\"mdi mdi-";
                // line 866
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                            ";
                // line 867
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 871
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 872
        yield "
                <!-- Details Container -->
                <div class=\"details-main-container\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"details-container\">
                                <div class=\"details-header\">
                                    <h2>Séance #";
        // line 879
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 879, $this->source); })()), "id", [], "any", false, false, false, 879), "html", null, true);
        yield "</h2>
                                    <p>Détails complets de la séance programmée</p>
                                </div>

                                <!-- Main Seance Card -->
                                <div class=\"seance-card\">
                                    <div class=\"card-header\">
                                        <div class=\"card-icon\">
                                            <i class=\"mdi mdi-calendar-clock\"></i>
                                        </div>
                                        <div>
                                            <h3 class=\"card-title\">
                                                ";
        // line 891
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 891, $this->source); })()), "matiere", [], "any", false, false, false, 891)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 891, $this->source); })()), "matiere", [], "any", false, false, false, 891), "html", null, true)) : ("Matière non spécifiée"));
        yield "
                                            </h3>
                                            <p class=\"card-subtitle\">
                                                Créée le ";
        // line 894
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 894, $this->source); })()), "createdAt", [], "any", false, false, false, 894)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 894, $this->source); })()), "createdAt", [], "any", false, false, false, 894), "d/m/Y à H:i"), "html", null, true)) : ("Date inconnue"));
        yield "
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Basic Information Grid -->
                                    <div class=\"info-grid\">
                                        <div class=\"info-item\">
                                            <div class=\"info-label\">
                                                <i class=\"mdi mdi-calendar\"></i> Jour
                                            </div>
                                            <h4 class=\"info-value\">
                                                <span class=\"badge badge-day\">";
        // line 906
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 906, $this->source); })()), "jour", [], "any", false, false, false, 906), "html", null, true);
        yield "</span>
                                            </h4>
                                        </div>

                                        <div class=\"info-item\">
                                            <div class=\"info-label\">
                                                <i class=\"mdi mdi-clock-outline\"></i> Type de séance
                                            </div>
                                            <h4 class=\"info-value\">
                                                ";
        // line 915
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 915, $this->source); })()), "typeSeance", [], "any", false, false, false, 915) == "MATINALE")) {
            // line 916
            yield "                                                    <span class=\"badge badge-matinale\">Matinale</span>
                                                ";
        } else {
            // line 918
            yield "                                                    <span class=\"badge badge-apresmidi\">Après-midi</span>
                                                ";
        }
        // line 920
        yield "                                            </h4>
                                        </div>

                                        <div class=\"info-item\">
                                            <div class=\"info-label\">
                                                <i class=\"mdi mdi-monitor\"></i> Mode
                                            </div>
                                            <h4 class=\"info-value\">
                                                ";
        // line 928
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 928, $this->source); })()), "mode", [], "any", false, false, false, 928) == "PRESENTIEL")) {
            // line 929
            yield "                                                    <span class=\"badge badge-presentiel\">Présentiel</span>
                                                ";
        } else {
            // line 931
            yield "                                                    <span class=\"badge badge-enligne\">En ligne</span>
                                                ";
        }
        // line 933
        yield "                                            </h4>
                                        </div>

                                        <div class=\"info-item\">
                                            <div class=\"info-label\">
                                                <i class=\"mdi mdi-office-building\"></i> Salle
                                            </div>
                                            <h4 class=\"info-value\">
                                                ";
        // line 941
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 941, $this->source); })()), "salle", [], "any", false, false, false, 941)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 941, $this->source); })()), "salle", [], "any", false, false, false, 941), "html", null, true)) : ("Non attribuée"));
        yield "
                                            </h4>
                                        </div>
                                    </div>

                                    <!-- Timeline for Schedule -->
                                    ";
        // line 947
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 947, $this->source); })()), "heureDebut", [], "any", false, false, false, 947) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 947, $this->source); })()), "heureFin", [], "any", false, false, false, 947))) {
            // line 948
            yield "                                    <div style=\"margin-top: 30px;\">
                                        <h4 style=\"margin-bottom: 20px; color: #333;\">
                                            <i class=\"mdi mdi-timeline-clock-outline me-2\"></i>Horaires
                                        </h4>
                                        <div class=\"timeline\">
                                            ";
            // line 953
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 953, $this->source); })()), "heureDebut", [], "any", false, false, false, 953)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 954
                yield "                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-time\">
                                                    <i class=\"mdi mdi-play-circle-outline me-1\"></i>
                                                    Début
                                                </div>
                                                <div class=\"timeline-content\">
                                                    ";
                // line 960
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 960, $this->source); })()), "heureDebut", [], "any", false, false, false, 960), "d/m/Y H:i"), "html", null, true);
                yield "
                                                </div>
                                            </div>
                                            ";
            }
            // line 964
            yield "                                            
                                            ";
            // line 965
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 965, $this->source); })()), "heureFin", [], "any", false, false, false, 965)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 966
                yield "                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-time\">
                                                    <i class=\"mdi mdi-stop-circle-outline me-1\"></i>
                                                    Fin
                                                </div>
                                                <div class=\"timeline-content\">
                                                    ";
                // line 972
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 972, $this->source); })()), "heureFin", [], "any", false, false, false, 972), "d/m/Y H:i"), "html", null, true);
                yield "
                                                </div>
                                            </div>
                                            ";
            }
            // line 976
            yield "                                        </div>
                                    </div>
                                    ";
        }
        // line 979
        yield "                                </div>

                                <!-- Related Entities Section -->
                                <div class=\"row\">
                                    <!-- Matière Card -->
                                    ";
        // line 984
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 984, $this->source); })()), "matiere", [], "any", false, false, false, 984)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 985
            yield "                                    <div class=\"col-md-6 mb-4\">
                                        <div class=\"entity-card\">
                                            <div class=\"entity-header\">
                                                <div class=\"entity-icon\">
                                                    <i class=\"mdi mdi-book-open-page-variant\"></i>
                                                </div>
                                                <div>
                                                    <h5 class=\"entity-title\">Matière</h5>
                                                    <p class=\"entity-subtitle\">Informations sur la matière</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"info-label\">
                                                    <i class=\"mdi mdi-bookmark\"></i> Nom
                                                </div>
                                                <p class=\"info-value\">";
            // line 1000
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1000, $this->source); })()), "matiere", [], "any", false, false, false, 1000), "html", null, true);
            yield "</p>
                                                
                                                ";
            // line 1002
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1002, $this->source); })()), "matiere", [], "any", false, false, false, 1002), "nom", [], "any", false, false, false, 1002)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1003
                yield "                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-information\"></i> Détails
                                                </div>
                                                <p class=\"info-value\">
                                                    ";
                // line 1007
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["seance"] ?? null), "matiere", [], "any", false, true, false, 1007), "nom", [], "any", true, true, false, 1007) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1007, $this->source); })()), "matiere", [], "any", false, false, false, 1007), "nom", [], "any", false, false, false, 1007)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1007, $this->source); })()), "matiere", [], "any", false, false, false, 1007), "nom", [], "any", false, false, false, 1007), "html", null, true)) : ("Nom non disponible"));
                yield "
                                                    ";
                // line 1008
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1008, $this->source); })()), "matiere", [], "any", false, false, false, 1008), "coefficient", [], "any", false, false, false, 1008)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1009
                    yield "                                                        <br><small class=\"text-muted\">Coefficient: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1009, $this->source); })()), "matiere", [], "any", false, false, false, 1009), "coefficient", [], "any", false, false, false, 1009), "html", null, true);
                    yield "</small>
                                                    ";
                }
                // line 1011
                yield "                                                </p>
                                                ";
            }
            // line 1013
            yield "                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        // line 1017
        yield "
                                    <!-- Classe Card -->
                                    ";
        // line 1019
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1019, $this->source); })()), "classe", [], "any", false, false, false, 1019)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1020
            yield "                                    <div class=\"col-md-6 mb-4\">
                                        <div class=\"entity-card\">
                                            <div class=\"entity-header\">
                                                <div class=\"entity-icon\">
                                                    <i class=\"mdi mdi-school\"></i>
                                                </div>
                                                <div>
                                                    <h5 class=\"entity-title\">Classe</h5>
                                                    <p class=\"entity-subtitle\">Informations sur la classe</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"info-label\">
                                                    <i class=\"mdi mdi-account-group\"></i> Nom
                                                </div>
                                                <p class=\"info-value\">";
            // line 1035
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1035, $this->source); })()), "classe", [], "any", false, false, false, 1035), "html", null, true);
            yield "</p>
                                                
                                                ";
            // line 1037
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1037, $this->source); })()), "classe", [], "any", false, false, false, 1037), "niveau", [], "any", false, false, false, 1037)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1038
                yield "                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-chart-bar\"></i> Niveau
                                                </div>
                                                <p class=\"info-value\">";
                // line 1041
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1041, $this->source); })()), "classe", [], "any", false, false, false, 1041), "niveau", [], "any", false, false, false, 1041), "html", null, true);
                yield "</p>
                                                ";
            }
            // line 1043
            yield "                                                
                                                ";
            // line 1044
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1044, $this->source); })()), "classe", [], "any", false, false, false, 1044), "filiere", [], "any", false, false, false, 1044)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1045
                yield "                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-briefcase\"></i> Filière
                                                </div>
                                                <p class=\"info-value\">";
                // line 1048
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1048, $this->source); })()), "classe", [], "any", false, false, false, 1048), "filiere", [], "any", false, false, false, 1048), "html", null, true);
                yield "</p>
                                                ";
            }
            // line 1050
            yield "                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        // line 1054
        yield "
                                    <!-- Salle Card -->
                                    ";
        // line 1056
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1056, $this->source); })()), "salle", [], "any", false, false, false, 1056)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1057
            yield "                                    <div class=\"col-md-6 mb-4\">
                                        <div class=\"entity-card\">
                                            <div class=\"entity-header\">
                                                <div class=\"entity-icon\">
                                                    <i class=\"mdi mdi-office-building\"></i>
                                                </div>
                                                <div>
                                                    <h5 class=\"entity-title\">Salle</h5>
                                                    <p class=\"entity-subtitle\">Informations sur la salle</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"info-label\">
                                                    <i class=\"mdi mdi-door\"></i> Nom
                                                </div>
                                                <p class=\"info-value\">";
            // line 1072
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1072, $this->source); })()), "salle", [], "any", false, false, false, 1072), "html", null, true);
            yield "</p>
                                                
                                                ";
            // line 1074
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1074, $this->source); })()), "salle", [], "any", false, false, false, 1074), "capacite", [], "any", false, false, false, 1074)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1075
                yield "                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-account-multiple\"></i> Capacité
                                                </div>
                                                <p class=\"info-value\">";
                // line 1078
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1078, $this->source); })()), "salle", [], "any", false, false, false, 1078), "capacite", [], "any", false, false, false, 1078), "html", null, true);
                yield " places</p>
                                                ";
            }
            // line 1080
            yield "                                                
                                                ";
            // line 1081
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1081, $this->source); })()), "salle", [], "any", false, false, false, 1081), "block", [], "any", false, false, false, 1081)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1082
                yield "                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-domain\"></i> Bâtiment
                                                </div>
                                                <p class=\"info-value\">";
                // line 1085
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1085, $this->source); })()), "salle", [], "any", false, false, false, 1085), "block", [], "any", false, false, false, 1085), "html", null, true);
                yield "</p>
                                                ";
            }
            // line 1087
            yield "                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        // line 1091
        yield "                                </div>

                                <!-- Action Buttons -->
                                <div class=\"action-buttons\">
                                    <div>
                                        <a href=\"";
        // line 1096
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                            <i class=\"mdi mdi-arrow-left me-1\"></i>Retour à la liste
                                        </a>
                                    </div>
                                    
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"";
        // line 1102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1102, $this->source); })()), "id", [], "any", false, false, false, 1102)]), "html", null, true);
        yield "\" class=\"btn btn-gradient-warning\">
                                            <i class=\"mdi mdi-pencil me-1\"></i>Modifier
                                        </a>
                                        
                                        <form method=\"post\" action=\"";
        // line 1106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1106, $this->source); })()), "id", [], "any", false, false, false, 1106)]), "html", null, true);
        yield "\" 
                                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette séance ?');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1109, $this->source); })()), "id", [], "any", false, false, false, 1109))), "html", null, true);
        yield "\">
                                            <button type=\"submit\" class=\"btn btn-gradient-danger\">
                                                <i class=\"mdi mdi-delete me-1\"></i>Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Details Footer -->
                                <div class=\"details-footer\">
                                    <p>Dernière consultation: ";
        // line 1119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</p>
                                    <p class=\"text-muted mt-2\">
                                        <i class=\"mdi mdi-information-outline me-1\"></i>
                                        ID de la séance: #";
        // line 1122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1122, $this->source); })()), "id", [], "any", false, false, false, 1122), "html", null, true);
        yield " | 
                                        Statut: 
                                        ";
        // line 1124
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1124, $this->source); })()), "heureDebut", [], "any", false, false, false, 1124) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1124, $this->source); })()), "heureDebut", [], "any", false, false, false, 1124), "U") > $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U")))) {
            // line 1125
            yield "                                            <span class=\"text-success\">À venir</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1126
(isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1126, $this->source); })()), "heureFin", [], "any", false, false, false, 1126) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1126, $this->source); })()), "heureFin", [], "any", false, false, false, 1126), "U") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U")))) {
            // line 1127
            yield "                                            <span class=\"text-muted\">Terminée</span>
                                        ";
        } else {
            // line 1129
            yield "                                            <span class=\"text-primary\">En cours</span>
                                        ";
        }
        // line 1131
        yield "                                    </p>
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
        // line 1143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        Consultation de séance | ";
        // line 1146
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
        // line 1155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/chart.js"), "html", null, true);
        yield "\"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
        // line 1180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "?search=' + encodeURIComponent(this.value);
                }
            });
        }
        
        // Delete confirmation enhancement
        const deleteForms = document.querySelectorAll('form[onsubmit*=\"confirm\"]');
        deleteForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!confirm('Êtes-vous sûr de vouloir supprimer cette séance ? Cette action est irréversible.')) {
                    e.preventDefault();
                }
            });
        });
        
        // Print functionality (optional)
        const printButton = document.createElement('button');
        printButton.innerHTML = '<i class=\"mdi mdi-printer me-1\"></i>Imprimer';
        printButton.className = 'btn btn-outline-secondary';
        printButton.style.marginLeft = 'auto';
        printButton.addEventListener('click', function() {
            window.print();
        });
        
        // Add print button to action buttons if needed
        const actionButtons = document.querySelector('.action-buttons > div:first-child');
        if (actionButtons) {
            actionButtons.appendChild(printButton);
        }
        
        // Status badge color based on time
        function updateStatusBadge() {
            const now = new Date();
            const statusSpan = document.querySelector('.details-footer p span.text-success, .details-footer p span.text-muted, .details-footer p span.text-primary');
            
            if (statusSpan) {
                ";
        // line 1216
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1216, $this->source); })()), "heureDebut", [], "any", false, false, false, 1216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1217
            yield "                    const startTime = new Date('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1217, $this->source); })()), "heureDebut", [], "any", false, false, false, 1217), "Y-m-d H:i:s"), "html", null, true);
            yield "');
                    ";
            // line 1218
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1218, $this->source); })()), "heureFin", [], "any", false, false, false, 1218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1219
                yield "                        const endTime = new Date('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1219, $this->source); })()), "heureFin", [], "any", false, false, false, 1219), "Y-m-d H:i:s"), "html", null, true);
                yield "');
                    ";
            }
            // line 1221
            yield "                    
                    if (now < startTime) {
                        statusSpan.textContent = 'À venir';
                        statusSpan.className = 'text-success';
                    } 
                    ";
            // line 1226
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1226, $this->source); })()), "heureFin", [], "any", false, false, false, 1226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1227
                yield "                    else if (now > endTime) {
                        statusSpan.textContent = 'Terminée';
                        statusSpan.className = 'text-muted';
                    }
                    ";
            }
            // line 1232
            yield "                    else {
                        statusSpan.textContent = 'En cours';
                        statusSpan.className = 'text-primary';
                    }
                ";
        }
        // line 1237
        yield "            }
        }
        
        // Update status every minute
        updateStatusBadge();
        setInterval(updateStatusBadge, 60000);
        
        // Copy ID to clipboard
        const idElement = document.querySelector('.details-footer p:last-child');
        if (idElement) {
            idElement.style.cursor = 'pointer';
            idElement.title = 'Cliquez pour copier l\\'ID';
            idElement.addEventListener('click', function() {
                const id = '";
        // line 1250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 1250, $this->source); })()), "id", [], "any", false, false, false, 1250), "html", null, true);
        yield "';
                navigator.clipboard.writeText(id).then(() => {
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class=\"mdi mdi-check me-1\"></i>ID copié !';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 2000);
                });
            });
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
        return "seance/show.html.twig";
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
        return array (  1705 => 1250,  1690 => 1237,  1683 => 1232,  1676 => 1227,  1674 => 1226,  1667 => 1221,  1661 => 1219,  1659 => 1218,  1654 => 1217,  1652 => 1216,  1613 => 1180,  1591 => 1161,  1587 => 1160,  1583 => 1159,  1579 => 1158,  1575 => 1157,  1571 => 1156,  1567 => 1155,  1555 => 1146,  1549 => 1143,  1535 => 1131,  1531 => 1129,  1527 => 1127,  1525 => 1126,  1522 => 1125,  1520 => 1124,  1515 => 1122,  1509 => 1119,  1496 => 1109,  1490 => 1106,  1483 => 1102,  1474 => 1096,  1467 => 1091,  1461 => 1087,  1456 => 1085,  1451 => 1082,  1449 => 1081,  1446 => 1080,  1441 => 1078,  1436 => 1075,  1434 => 1074,  1429 => 1072,  1412 => 1057,  1410 => 1056,  1406 => 1054,  1400 => 1050,  1395 => 1048,  1390 => 1045,  1388 => 1044,  1385 => 1043,  1380 => 1041,  1375 => 1038,  1373 => 1037,  1368 => 1035,  1351 => 1020,  1349 => 1019,  1345 => 1017,  1339 => 1013,  1335 => 1011,  1329 => 1009,  1327 => 1008,  1323 => 1007,  1317 => 1003,  1315 => 1002,  1310 => 1000,  1293 => 985,  1291 => 984,  1284 => 979,  1279 => 976,  1272 => 972,  1264 => 966,  1262 => 965,  1259 => 964,  1252 => 960,  1244 => 954,  1242 => 953,  1235 => 948,  1233 => 947,  1224 => 941,  1214 => 933,  1210 => 931,  1206 => 929,  1204 => 928,  1194 => 920,  1190 => 918,  1186 => 916,  1184 => 915,  1172 => 906,  1157 => 894,  1151 => 891,  1136 => 879,  1127 => 872,  1121 => 871,  1111 => 867,  1107 => 866,  1102 => 865,  1097 => 864,  1093 => 863,  1083 => 856,  1075 => 851,  1041 => 821,  1026 => 809,  1012 => 799,  1010 => 798,  1006 => 796,  1001 => 793,  997 => 791,  993 => 789,  989 => 787,  987 => 786,  982 => 784,  975 => 783,  973 => 782,  966 => 777,  959 => 774,  953 => 770,  949 => 768,  945 => 766,  943 => 765,  935 => 762,  931 => 760,  924 => 757,  921 => 756,  915 => 753,  910 => 752,  908 => 751,  905 => 750,  903 => 749,  861 => 710,  843 => 695,  830 => 685,  807 => 665,  784 => 645,  771 => 635,  758 => 625,  745 => 615,  732 => 605,  710 => 585,  705 => 582,  701 => 580,  697 => 578,  693 => 576,  691 => 575,  686 => 573,  679 => 572,  677 => 571,  672 => 568,  666 => 566,  663 => 565,  656 => 562,  653 => 561,  647 => 558,  642 => 557,  639 => 556,  637 => 555,  626 => 547,  622 => 546,  617 => 544,  613 => 543,  83 => 16,  79 => 15,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Détails Séance - ESPRIT</title>
    
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
        .details-main-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .details-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-top: 30px;
            position: relative;
            overflow: hidden;
        }

        .details-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .details-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eaeaea;
        }

        .details-header h2 {
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .details-header p {
            color: #666;
            font-size: 16px;
            margin-bottom: 0;
        }

        /* Card Styles */
        .seance-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #667eea;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: white;
            font-size: 24px;
        }

        .card-title {
            font-size: 22px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .card-subtitle {
            font-size: 14px;
            color: #666;
            margin: 5px 0 0 0;
        }

        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
        }

        .info-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #eaeaea;
            transition: all 0.3s;
        }

        .info-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-color: #667eea;
        }

        .info-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .info-label i {
            font-size: 16px;
        }

        .info-value {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            margin: 0;
        }

        .info-value.null {
            color: #999;
            font-style: italic;
        }

        /* Status Badges */
        .badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-presentiel {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
        }

        .badge-enligne {
            background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%);
            color: white;
        }

        .badge-matinale {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            color: #333;
        }

        .badge-apresmidi {
            background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%);
            color: white;
        }

        .badge-day {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid #eaeaea;
            flex-wrap: wrap;
        }

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
            text-decoration: none;
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
            color: white;
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

        .btn-gradient-danger {
            background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.3);
        }

        .btn-gradient-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 87, 108, 0.4);
            color: white;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 30px;
            margin: 25px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #667eea, #764ba2);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -33px;
            top: 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #667eea;
            border: 3px solid white;
            box-shadow: 0 0 0 2px #667eea;
        }

        .timeline-time {
            font-size: 14px;
            font-weight: 600;
            color: #667eea;
            margin-bottom: 5px;
        }

        .timeline-content {
            font-size: 14px;
            color: #666;
        }

        /* Related Entities Cards */
        .entity-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #eaeaea;
            margin-bottom: 15px;
            transition: all 0.3s;
        }

        .entity-card:hover {
            border-color: #667eea;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.1);
        }

        .entity-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .entity-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            margin-right: 15px;
        }

        .entity-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .entity-subtitle {
            font-size: 12px;
            color: #666;
            margin: 2px 0 0 0;
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
        .details-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
            text-align: center;
            color: #666;
            font-size: 12px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .details-container {
                padding: 20px;
                margin-top: 20px;
            }
            
            .details-header h2 {
                font-size: 24px;
            }
            
            .card-header {
                flex-direction: column;
                text-align: center;
            }
            
            .card-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .action-buttons .btn {
                width: 100%;
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

        .seance-card, .info-item, .entity-card {
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

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #666;
        }

        .empty-state-icon {
            font-size: 48px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state-text {
            font-size: 16px;
            color: #999;
        }
         .sidebar .profile-pic .count-indicator {
        width: 40px !important;
        height: 40px !important;
        min-width: 40px !important;
        min-height: 40px !important;
    }
    
    .sidebar .profile-pic .count-indicator img,
    .sidebar .profile-pic .count-indicator .profile-avatar-img,
    .sidebar .profile-pic .count-indicator .img-xs {
        width: 40px !important;
        height: 40px !important;
        border-radius: 50% !important;
        object-fit: cover !important;
    }
    
    .sidebar .profile-pic .count-indicator .profile-avatar {
        width: 40px !important;
        height: 40px !important;
        border-radius: 50% !important;
        font-size: 16px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    /* Navbar profile */
    .navbar .navbar-profile .avatar-container img,
    .navbar .navbar-profile .avatar-container .user-avatar-img,
    .navbar .navbar-profile .img-xs {
        width: 32px !important;
        height: 32px !important;
        border-radius: 50% !important;
        object-fit: cover !important;
    }
    
    .navbar .navbar-profile .avatar-container .user-avatar {
        width: 32px !important;
        height: 32px !important;
        border-radius: 50% !important;
        font-size: 14px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    /* Fix alignment */
    .navbar .navbar-profile .avatar-container {
        align-items: center !important;
        gap: 8px !important;
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
                                    <p class=\"preview-subject mb-1\">Séance à venir</p>
                                    <p class=\"text-muted ellipsis mb-0\">Mathématiques dans 30 minutes</p>
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
                            <i class=\"mdi mdi-eye\"></i>
                        </span> 
                        Détails de la Séance
                    </h3>
                    <nav aria-label=\"breadcrumb\">
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_seance_index') }}\" class=\"text-primary\">
                                    <i class=\"mdi mdi-calendar-clock me-1\"></i>Séances
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                <span></span>Détails #{{ seance.id }}
                            </li>
                        </ul>
                    </nav>
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

                <!-- Details Container -->
                <div class=\"details-main-container\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"details-container\">
                                <div class=\"details-header\">
                                    <h2>Séance #{{ seance.id }}</h2>
                                    <p>Détails complets de la séance programmée</p>
                                </div>

                                <!-- Main Seance Card -->
                                <div class=\"seance-card\">
                                    <div class=\"card-header\">
                                        <div class=\"card-icon\">
                                            <i class=\"mdi mdi-calendar-clock\"></i>
                                        </div>
                                        <div>
                                            <h3 class=\"card-title\">
                                                {{ seance.matiere ? seance.matiere : 'Matière non spécifiée' }}
                                            </h3>
                                            <p class=\"card-subtitle\">
                                                Créée le {{ seance.createdAt ? seance.createdAt|date('d/m/Y à H:i') : 'Date inconnue' }}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Basic Information Grid -->
                                    <div class=\"info-grid\">
                                        <div class=\"info-item\">
                                            <div class=\"info-label\">
                                                <i class=\"mdi mdi-calendar\"></i> Jour
                                            </div>
                                            <h4 class=\"info-value\">
                                                <span class=\"badge badge-day\">{{ seance.jour }}</span>
                                            </h4>
                                        </div>

                                        <div class=\"info-item\">
                                            <div class=\"info-label\">
                                                <i class=\"mdi mdi-clock-outline\"></i> Type de séance
                                            </div>
                                            <h4 class=\"info-value\">
                                                {% if seance.typeSeance == 'MATINALE' %}
                                                    <span class=\"badge badge-matinale\">Matinale</span>
                                                {% else %}
                                                    <span class=\"badge badge-apresmidi\">Après-midi</span>
                                                {% endif %}
                                            </h4>
                                        </div>

                                        <div class=\"info-item\">
                                            <div class=\"info-label\">
                                                <i class=\"mdi mdi-monitor\"></i> Mode
                                            </div>
                                            <h4 class=\"info-value\">
                                                {% if seance.mode == 'PRESENTIEL' %}
                                                    <span class=\"badge badge-presentiel\">Présentiel</span>
                                                {% else %}
                                                    <span class=\"badge badge-enligne\">En ligne</span>
                                                {% endif %}
                                            </h4>
                                        </div>

                                        <div class=\"info-item\">
                                            <div class=\"info-label\">
                                                <i class=\"mdi mdi-office-building\"></i> Salle
                                            </div>
                                            <h4 class=\"info-value\">
                                                {{ seance.salle ? seance.salle : 'Non attribuée' }}
                                            </h4>
                                        </div>
                                    </div>

                                    <!-- Timeline for Schedule -->
                                    {% if seance.heureDebut or seance.heureFin %}
                                    <div style=\"margin-top: 30px;\">
                                        <h4 style=\"margin-bottom: 20px; color: #333;\">
                                            <i class=\"mdi mdi-timeline-clock-outline me-2\"></i>Horaires
                                        </h4>
                                        <div class=\"timeline\">
                                            {% if seance.heureDebut %}
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-time\">
                                                    <i class=\"mdi mdi-play-circle-outline me-1\"></i>
                                                    Début
                                                </div>
                                                <div class=\"timeline-content\">
                                                    {{ seance.heureDebut|date('d/m/Y H:i') }}
                                                </div>
                                            </div>
                                            {% endif %}
                                            
                                            {% if seance.heureFin %}
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-time\">
                                                    <i class=\"mdi mdi-stop-circle-outline me-1\"></i>
                                                    Fin
                                                </div>
                                                <div class=\"timeline-content\">
                                                    {{ seance.heureFin|date('d/m/Y H:i') }}
                                                </div>
                                            </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>

                                <!-- Related Entities Section -->
                                <div class=\"row\">
                                    <!-- Matière Card -->
                                    {% if seance.matiere %}
                                    <div class=\"col-md-6 mb-4\">
                                        <div class=\"entity-card\">
                                            <div class=\"entity-header\">
                                                <div class=\"entity-icon\">
                                                    <i class=\"mdi mdi-book-open-page-variant\"></i>
                                                </div>
                                                <div>
                                                    <h5 class=\"entity-title\">Matière</h5>
                                                    <p class=\"entity-subtitle\">Informations sur la matière</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"info-label\">
                                                    <i class=\"mdi mdi-bookmark\"></i> Nom
                                                </div>
                                                <p class=\"info-value\">{{ seance.matiere }}</p>
                                                
                                                {% if seance.matiere.nom %}
                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-information\"></i> Détails
                                                </div>
                                                <p class=\"info-value\">
                                                    {{  seance.matiere.nom ?? 'Nom non disponible'}}
                                                    {% if seance.matiere.coefficient %}
                                                        <br><small class=\"text-muted\">Coefficient: {{ seance.matiere.coefficient }}</small>
                                                    {% endif %}
                                                </p>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                    {% endif %}

                                    <!-- Classe Card -->
                                    {% if seance.classe %}
                                    <div class=\"col-md-6 mb-4\">
                                        <div class=\"entity-card\">
                                            <div class=\"entity-header\">
                                                <div class=\"entity-icon\">
                                                    <i class=\"mdi mdi-school\"></i>
                                                </div>
                                                <div>
                                                    <h5 class=\"entity-title\">Classe</h5>
                                                    <p class=\"entity-subtitle\">Informations sur la classe</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"info-label\">
                                                    <i class=\"mdi mdi-account-group\"></i> Nom
                                                </div>
                                                <p class=\"info-value\">{{ seance.classe }}</p>
                                                
                                                {% if seance.classe.niveau %}
                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-chart-bar\"></i> Niveau
                                                </div>
                                                <p class=\"info-value\">{{ seance.classe.niveau }}</p>
                                                {% endif %}
                                                
                                                {% if seance.classe.filiere %}
                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-briefcase\"></i> Filière
                                                </div>
                                                <p class=\"info-value\">{{ seance.classe.filiere }}</p>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                    {% endif %}

                                    <!-- Salle Card -->
                                    {% if seance.salle %}
                                    <div class=\"col-md-6 mb-4\">
                                        <div class=\"entity-card\">
                                            <div class=\"entity-header\">
                                                <div class=\"entity-icon\">
                                                    <i class=\"mdi mdi-office-building\"></i>
                                                </div>
                                                <div>
                                                    <h5 class=\"entity-title\">Salle</h5>
                                                    <p class=\"entity-subtitle\">Informations sur la salle</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"info-label\">
                                                    <i class=\"mdi mdi-door\"></i> Nom
                                                </div>
                                                <p class=\"info-value\">{{ seance.salle }}</p>
                                                
                                                {% if seance.salle.capacite %}
                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-account-multiple\"></i> Capacité
                                                </div>
                                                <p class=\"info-value\">{{ seance.salle.capacite }} places</p>
                                                {% endif %}
                                                
                                                {% if seance.salle.block %}
                                                <div class=\"info-label mt-3\">
                                                    <i class=\"mdi mdi-domain\"></i> Bâtiment
                                                </div>
                                                <p class=\"info-value\">{{ seance.salle.block }}</p>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>

                                <!-- Action Buttons -->
                                <div class=\"action-buttons\">
                                    <div>
                                        <a href=\"{{ path('app_seance_index') }}\" class=\"btn btn-outline-secondary\">
                                            <i class=\"mdi mdi-arrow-left me-1\"></i>Retour à la liste
                                        </a>
                                    </div>
                                    
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"{{ path('app_seance_edit', {'id': seance.id}) }}\" class=\"btn btn-gradient-warning\">
                                            <i class=\"mdi mdi-pencil me-1\"></i>Modifier
                                        </a>
                                        
                                        <form method=\"post\" action=\"{{ path('app_seance_delete', {'id': seance.id}) }}\" 
                                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette séance ?');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ seance.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-gradient-danger\">
                                                <i class=\"mdi mdi-delete me-1\"></i>Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Details Footer -->
                                <div class=\"details-footer\">
                                    <p>Dernière consultation: {{ \"now\"|date(\"d/m/Y H:i\") }}</p>
                                    <p class=\"text-muted mt-2\">
                                        <i class=\"mdi mdi-information-outline me-1\"></i>
                                        ID de la séance: #{{ seance.id }} | 
                                        Statut: 
                                        {% if seance.heureDebut and seance.heureDebut|date('U') > 'now'|date('U') %}
                                            <span class=\"text-success\">À venir</span>
                                        {% elseif seance.heureFin and seance.heureFin|date('U') < 'now'|date('U') %}
                                            <span class=\"text-muted\">Terminée</span>
                                        {% else %}
                                            <span class=\"text-primary\">En cours</span>
                                        {% endif %}
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
                        Consultation de séance | {{ \"now\"|date(\"d/m/Y H:i\") }}
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
        
        // Delete confirmation enhancement
        const deleteForms = document.querySelectorAll('form[onsubmit*=\"confirm\"]');
        deleteForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!confirm('Êtes-vous sûr de vouloir supprimer cette séance ? Cette action est irréversible.')) {
                    e.preventDefault();
                }
            });
        });
        
        // Print functionality (optional)
        const printButton = document.createElement('button');
        printButton.innerHTML = '<i class=\"mdi mdi-printer me-1\"></i>Imprimer';
        printButton.className = 'btn btn-outline-secondary';
        printButton.style.marginLeft = 'auto';
        printButton.addEventListener('click', function() {
            window.print();
        });
        
        // Add print button to action buttons if needed
        const actionButtons = document.querySelector('.action-buttons > div:first-child');
        if (actionButtons) {
            actionButtons.appendChild(printButton);
        }
        
        // Status badge color based on time
        function updateStatusBadge() {
            const now = new Date();
            const statusSpan = document.querySelector('.details-footer p span.text-success, .details-footer p span.text-muted, .details-footer p span.text-primary');
            
            if (statusSpan) {
                {% if seance.heureDebut %}
                    const startTime = new Date('{{ seance.heureDebut|date(\"Y-m-d H:i:s\") }}');
                    {% if seance.heureFin %}
                        const endTime = new Date('{{ seance.heureFin|date(\"Y-m-d H:i:s\") }}');
                    {% endif %}
                    
                    if (now < startTime) {
                        statusSpan.textContent = 'À venir';
                        statusSpan.className = 'text-success';
                    } 
                    {% if seance.heureFin %}
                    else if (now > endTime) {
                        statusSpan.textContent = 'Terminée';
                        statusSpan.className = 'text-muted';
                    }
                    {% endif %}
                    else {
                        statusSpan.textContent = 'En cours';
                        statusSpan.className = 'text-primary';
                    }
                {% endif %}
            }
        }
        
        // Update status every minute
        updateStatusBadge();
        setInterval(updateStatusBadge, 60000);
        
        // Copy ID to clipboard
        const idElement = document.querySelector('.details-footer p:last-child');
        if (idElement) {
            idElement.style.cursor = 'pointer';
            idElement.title = 'Cliquez pour copier l\\'ID';
            idElement.addEventListener('click', function() {
                const id = '{{ seance.id }}';
                navigator.clipboard.writeText(id).then(() => {
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class=\"mdi mdi-check me-1\"></i>ID copié !';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 2000);
                });
            });
        }
    });
</script>
</body>
</html>", "seance/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\seance\\show.html.twig");
    }
}
