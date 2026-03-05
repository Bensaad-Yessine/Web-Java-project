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

/* suivi_bien_etre/edit_for_objectif.html.twig */
class __TwigTemplate_367bbfcb4540e6688da9d421b2ae8248 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/edit_for_objectif.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/edit_for_objectif.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier le suivi - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Modifier le Suivi</title>
    
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --danger-gradient: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
            --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --health-gradient: linear-gradient(135deg, #fa8bff 0%, #2bd2ff 90%, #2bff88 100%);
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --card-shadow-hover: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            box-shadow: var(--card-shadow-hover);
        }

        .card-header-custom {
            background: var(--health-gradient);
            color: white;
            padding: 1.5rem;
            border-radius: 15px 15px 0 0;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .card-header-custom h4 {
            margin: 0;
            font-weight: 600;
            font-size: 1.25rem;
        }

        .card-header-custom .icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .form-section-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 1rem 1.5rem;
            border-radius: 10px;
            margin: 2rem 0 1.5rem;
            border-left: 4px solid;
            border-image: var(--health-gradient) 1;
        }

        .form-section-header h5 {
            margin: 0;
            color: #495057;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .form-section-header .section-icon {
            width: 35px;
            height: 35px;
            background: var(--health-gradient);
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .form-group {
            margin-bottom: 1.75rem;
        }

        .form-label-custom {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
        }

        .form-label-custom .required-star {
            color: #f5576c;
            font-weight: bold;
        }

        .form-label-custom .label-icon {
            color: #667eea;
            font-size: 1.1rem;
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
            outline: none;
        }

        .form-control:hover, .form-select:hover {
            border-color: #b8c1ec;
        }

        .form-help-text {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 0.5rem;
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
        }

        .form-help-text i {
            margin-top: 2px;
            color: #667eea;
        }

        .btn-custom-primary {
            background: var(--health-gradient);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-custom-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(250, 139, 255, 0.4);
            color: white;
        }

        .btn-custom-secondary {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            color: #495057;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-custom-secondary:hover {
            background: #f8f9fa;
            border-color: #667eea;
            color: #667eea;
            transform: translateY(-2px);
        }

        .btn-custom-danger {
            background: var(--danger-gradient);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-custom-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 87, 108, 0.4);
            color: white;
        }

        .page-header-enhanced {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--card-shadow);
            margin-bottom: 2rem;
        }

        .page-header-enhanced .title-section {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .page-header-enhanced .title-icon {
            width: 60px;
            height: 60px;
            background: var(--health-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .page-header-enhanced h3 {
            margin: 0;
            color: #2c3e50;
            font-weight: 700;
        }

        .page-header-enhanced .subtitle {
            color: #6c757d;
            margin-top: 0.5rem;
            font-size: 0.95rem;
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: #667eea;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .breadcrumb-custom .breadcrumb-item a:hover {
            color: #764ba2;
        }

        .alert-custom {
            border: none;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            box-shadow: var(--card-shadow);
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .current-info-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px solid #dee2e6;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .current-info-card h5 {
            color: #495057;
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #dee2e6;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .info-value {
            font-weight: 500;
            color: #495057;
        }

        .form-actions {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 2rem;
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            border: 2px dashed #e9ecef;
        }

        .form-actions-left {
            display: flex;
            gap: 1rem;
        }

        .form-actions-right {
            display: flex;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .page-header-enhanced .title-section {
                flex-direction: column;
                text-align: center;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions-left,
            .form-actions-right {
                flex-direction: column;
                width: 100%;
            }

            .btn-custom-primary,
            .btn-custom-secondary,
            .btn-custom-danger {
                width: 100%;
                justify-content: center;
            }
        }
        
        /* Avatar styles */
        .profile-avatar-img, .user-avatar-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }
        
        .user-avatar-img {
            width: 40px;
            height: 40px;
            border: 2px solid #fff;
        }
        
        .profile-avatar, .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }

        /* Error styling */
        .form-general-errors {
            margin-bottom: 1.5rem;
        }

        .form-general-errors .form-error-message {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 10px;
            color: #721c24;
            padding: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
        }

        .form-general-errors .form-error-message i {
            font-size: 1.25rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .form-general-errors .form-error-message ul {
            margin: 0;
            padding-left: 1.5rem;
        }

        .form-general-errors .form-error-message li {
            margin: 0.25rem 0;
        }
    </style>
</head>
<body>
    <div class=\"container-scroller\">
        <!-- Sidebar -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
                <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 436
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                    <img src=\"";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
                </a>
                <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 439
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                    <img src=\"";
        // line 440
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
        // line 448
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 448, $this->source); })()), "user", [], "any", false, false, false, 448)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 449
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "profilePic", [], "any", false, false, false, 449)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 450
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 450, $this->source); })()), "user", [], "any", false, false, false, 450), "profilePic", [], "any", false, false, false, 450))), "html", null, true);
                yield "\" 
                                             alt=\"";
                // line 451
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 451, $this->source); })()), "user", [], "any", false, false, false, 451), "prenom", [], "any", false, false, false, 451), "html", null, true);
                yield "\" 
                                             class=\"profile-avatar-img\">
                                    ";
            } else {
                // line 454
                yield "                                        <div class=\"profile-avatar\">
                                            ";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "prenom", [], "any", false, false, false, 455))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "nom", [], "any", false, false, false, 455))), "html", null, true);
                yield "
                                        </div>
                                    ";
            }
            // line 458
            yield "                                ";
        } else {
            // line 459
            yield "                                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                ";
        }
        // line 461
        yield "                                <span class=\"count bg-success\"></span>
                            </div>
                            <div class=\"profile-name\">
                                ";
        // line 464
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 464, $this->source); })()), "user", [], "any", false, false, false, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 465
            yield "                                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 465, $this->source); })()), "user", [], "any", false, false, false, 465), "prenom", [], "any", false, false, false, 465), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 465, $this->source); })()), "user", [], "any", false, false, false, 465), "nom", [], "any", false, false, false, 465), "html", null, true);
            yield "</h5>
                                    <span class=\"text-muted\">";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 466, $this->source); })()), "user", [], "any", false, false, false, 466), "email", [], "any", false, false, false, 466), "html", null, true);
            yield "</span>
                                    <div class=\"mt-1\">
                                        ";
            // line 468
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 468, $this->source); })()), "user", [], "any", false, false, false, 468), "roles", [], "any", false, false, false, 468))) {
                // line 469
                yield "                                            <span class=\"badge badge-success\">Administrateur</span>
                                        ";
            } else {
                // line 471
                yield "                                            <span class=\"badge badge-info\">Utilisateur</span>
                                        ";
            }
            // line 473
            yield "                                    </div>
                                ";
        } else {
            // line 475
            yield "                                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                                    <span>Veuillez vous connecter</span>
                                ";
        }
        // line 478
        yield "                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">
                    <span class=\"nav-link\">Navigation</span>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-speedometer\"></i></span>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
                        <span class=\"menu-title\">Utilisateurs</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-book-open-page-variant\"></i></span>
                        <span class=\"menu-title\">Matieres</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-school\"></i></span>
                        <span class=\"menu-title\">Classes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-office-building\"></i></span>
                        <span class=\"menu-title\">Salles</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-calendar-clock\"></i></span>
                        <span class=\"menu-title\">Séances</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-account-multiple\"></i></span>
                        <span class=\"menu-title\">Groupes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 536
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-checkbox-marked-circle-outline\"></i></span>
                        <span class=\"menu-title\">Tâches</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-alert-circle-outline\"></i></span>
                        <span class=\"menu-title\">Alertes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items active\">
                    <a class=\"nav-link\" href=\"";
        // line 550
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
                        <span class=\"menu-title\">Objectifs de santé</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 557
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-logout text-danger\"></i></span>
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
        // line 570
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
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un suivi...\">
                            </form>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav navbar-nav-right\">
                        <li class=\"nav-item dropdown border-left\">
                            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <span class=\"count bg-danger\">3</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                                <h6 class=\"p-3 mb-0\">Notifications</h6>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item preview-item\">
                                    <div class=\"preview-thumbnail\">
                                        <div class=\"preview-icon bg-success rounded-circle\">
                                            <i class=\"mdi mdi-heart-pulse\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Suivi modifié!</p>
                                        <p class=\"text-muted ellipsis mb-0\">Votre suivi du ";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 600, $this->source); })()), "dateSaisie", [], "any", false, false, false, 600), "d/m/Y"), "html", null, true);
        yield " a été mis à jour</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <div class=\"navbar-profile\">
                                    ";
        // line 609
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 609, $this->source); })()), "user", [], "any", false, false, false, 609)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 610
            yield "                                        <div class=\"avatar-container\">
                                            ";
            // line 611
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 611, $this->source); })()), "user", [], "any", false, false, false, 611), "profilePic", [], "any", false, false, false, 611)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 612
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 612, $this->source); })()), "user", [], "any", false, false, false, 612), "profilePic", [], "any", false, false, false, 612))), "html", null, true);
                yield "\" 
                                                     alt=\"";
                // line 613
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 613, $this->source); })()), "user", [], "any", false, false, false, 613), "prenom", [], "any", false, false, false, 613), "html", null, true);
                yield "\" 
                                                     class=\"user-avatar-img\">
                                            ";
            } else {
                // line 616
                yield "                                                <div class=\"user-avatar\">
                                                    ";
                // line 617
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 617, $this->source); })()), "user", [], "any", false, false, false, 617), "prenom", [], "any", false, false, false, 617))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 617, $this->source); })()), "user", [], "any", false, false, false, 617), "nom", [], "any", false, false, false, 617))), "html", null, true);
                yield "
                                                </div>
                                            ";
            }
            // line 620
            yield "                                            <div class=\"text-start ms-2\">
                                                <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                                                    ";
            // line 622
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 622, $this->source); })()), "user", [], "any", false, false, false, 622), "prenom", [], "any", false, false, false, 622), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 622, $this->source); })()), "user", [], "any", false, false, false, 622), "nom", [], "any", false, false, false, 622), "html", null, true);
            yield "
                                                </p>
                                                <small class=\"text-muted d-none d-sm-block\">
                                                    ";
            // line 625
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 625, $this->source); })()), "user", [], "any", false, false, false, 625), "roles", [], "any", false, false, false, 625))) {
                // line 626
                yield "                                                        <span class=\"badge badge-success\">Admin</span>
                                                    ";
            } else {
                // line 628
                yield "                                                        <span class=\"badge badge-info\">Utilisateur</span>
                                                    ";
            }
            // line 630
            yield "                                                </small>
                                            </div>
                                        </div>
                                    ";
        } else {
            // line 634
            yield "                                        <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                        <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                                    ";
        }
        // line 637
        yield "                                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                                <div class=\"dropdown-header p-3\">
                                    ";
        // line 642
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 642, $this->source); })()), "user", [], "any", false, false, false, 642)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 643
            yield "                                        <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 643, $this->source); })()), "user", [], "any", false, false, false, 643), "prenom", [], "any", false, false, false, 643), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 643, $this->source); })()), "user", [], "any", false, false, false, 643), "nom", [], "any", false, false, false, 643), "html", null, true);
            yield "</h6>
                                        <p class=\"text-muted mb-0\">";
            // line 644
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 644, $this->source); })()), "user", [], "any", false, false, false, 644), "email", [], "any", false, false, false, 644), "html", null, true);
            yield "</p>
                                        <small class=\"text-muted\">
                                            ";
            // line 646
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 646, $this->source); })()), "user", [], "any", false, false, false, 646), "roles", [], "any", false, false, false, 646))) {
                // line 647
                yield "                                                <span class=\"badge badge-success\">Administrateur</span>
                                            ";
            } else {
                // line 649
                yield "                                                <span class=\"badge badge-info\">Utilisateur</span>
                                            ";
            }
            // line 651
            yield "                                        </small>
                                    ";
        } else {
            // line 653
            yield "                                        <h6 class=\"mb-0\">Non connecté</h6>
                                        <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                                    ";
        }
        // line 656
        yield "                                </div>
                                <div class=\"dropdown-divider\"></div>
                                ";
        // line 658
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 658, $this->source); })()), "user", [], "any", false, false, false, 658)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 659
            yield "                                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 659, $this->source); })()), "user", [], "any", false, false, false, 659), "id", [], "any", false, false, false, 659)]), "html", null, true);
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
            // line 669
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 669, $this->source); })()), "user", [], "any", false, false, false, 669), "id", [], "any", false, false, false, 669)]), "html", null, true);
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
        // line 681
        yield "                                <a class=\"dropdown-item preview-item\" href=\"";
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
                    <!-- Flash Messages -->
                    ";
        // line 701
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 701, $this->source); })()), "flashes", [], "any", false, false, false, 701));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 702
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 703
                yield "                            <div class=\"alert-custom alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
                                <div class=\"alert-icon\">
                                    <i class=\"mdi mdi-";
                // line 705
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    ";
                // line 708
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                </div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 713
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 714
        yield "
                    <!-- Enhanced Page Header -->
                    <div class=\"page-header-enhanced\">
                        <div class=\"title-section\">
                            <div class=\"title-icon\">
                                <i class=\"mdi mdi-pencil-box\"></i>
                            </div>
                            <div>
                                <h3>Modifier le Suivi</h3>
                                <p class=\"subtitle\">
                                    Modifiez votre suivi du ";
        // line 724
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 724, $this->source); })()), "dateSaisie", [], "any", false, false, false, 724), "d/m/Y"), "html", null, true);
        yield " pour l'objectif \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 724, $this->source); })()), "titre", [], "any", false, false, false, 724), "html", null, true);
        yield "\"
                                </p>
                            </div>
                        </div>
                        <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 731
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
                                        <i class=\"mdi mdi-heart-pulse me-1\"></i>
                                        Objectifs de santé
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 737, $this->source); })()), "id", [], "any", false, false, false, 737)]), "html", null, true);
        yield "\">
                                        <i class=\"mdi mdi-eye me-1\"></i>
                                        ";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 739, $this->source); })()), "titre", [], "any", false, false, false, 739), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 739, $this->source); })()), "titre", [], "any", false, false, false, 739)) > 30)) ? ("...") : (""));
        yield "
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 743
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 743, $this->source); })()), "id", [], "any", false, false, false, 743)]), "html", null, true);
        yield "\">
                                        <i class=\"mdi mdi-clipboard-text me-1\"></i>
                                        Suivis
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    Modification
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <!-- Current Info Display -->
                    <div class=\"current-info-card\">
                        <h5>
                            <i class=\"mdi mdi-information\"></i>
                            Informations actuelles du suivi
                        </h5>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Date de saisie:</span>
                                    <span class=\"info-value\">";
        // line 765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 765, $this->source); })()), "dateSaisie", [], "any", false, false, false, 765), "d/m/Y"), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Humeur:</span>
                                    <span class=\"info-value\">
                                        ";
        // line 770
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 770, $this->source); })()), "humeur", [], "any", false, false, false, 770) == 1)) {
            yield "😢 Très mauvaise
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 771
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 771, $this->source); })()), "humeur", [], "any", false, false, false, 771) == 2)) {
            yield "😔 Mauvaise
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 772
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 772, $this->source); })()), "humeur", [], "any", false, false, false, 772) == 3)) {
            yield "😐 Neutre
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 773
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 773, $this->source); })()), "humeur", [], "any", false, false, false, 773) == 4)) {
            yield "😊 Bonne
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 774
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 774, $this->source); })()), "humeur", [], "any", false, false, false, 774) == 5)) {
            yield "😄 Excellente
                                        ";
        } else {
            // line 775
            yield "Non définie
                                        ";
        }
        // line 777
        yield "                                    </span>
                                </div>
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Niveau d'énergie:</span>
                                    <span class=\"info-value\">";
        // line 781
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 781, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 781)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 781, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 781) . "/10"), "html", null, true)) : ("Non défini"));
        yield "</span>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Qualité du sommeil:</span>
                                    <span class=\"info-value\">";
        // line 787
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 787, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 787)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 787, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 787) . "/10"), "html", null, true)) : ("Non défini"));
        yield "</span>
                                </div>
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Niveau de stress:</span>
                                    <span class=\"info-value\">";
        // line 791
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 791, $this->source); })()), "niveauStress", [], "any", false, false, false, 791)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 791, $this->source); })()), "niveauStress", [], "any", false, false, false, 791) . "/10"), "html", null, true)) : ("Non défini"));
        yield "</span>
                                </div>
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Qualité d'alimentation:</span>
                                    <span class=\"info-value\">";
        // line 795
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 795, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 795)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 795, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 795) . "/10"), "html", null, true)) : ("Non défini"));
        yield "</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Form Card -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header-custom\">
                                    <div class=\"icon\">
                                        <i class=\"mdi mdi-clipboard-text\"></i>
                                    </div>
                                    <h4>Formulaire de modification du suivi</h4>
                                </div>
                                <div class=\"card-body p-4\">
                                    ";
        // line 812
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 812, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample", "id" => "edit-suivi-form", "novalidate" => "novalidate"]]);
        yield "

";
        // line 814
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 814, $this->source); })()), "vars", [], "any", false, false, false, 814), "submitted", [], "any", false, false, false, 814) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 814, $this->source); })()), "vars", [], "any", false, false, false, 814), "valid", [], "any", false, false, false, 814))) {
            // line 815
            yield "  <div class=\"alert alert-danger mt-3\">
    <i class=\"mdi mdi-alert-circle me-2\"></i>
    Veuillez corriger les erreurs dans le formulaire.
  </div>
";
        }
        // line 820
        yield "
<div class=\"form-general-errors\">
  ";
        // line 822
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 822, $this->source); })()), 'errors');
        yield "
</div>
                                    <!-- Section 1: Date et Humeur -->
                                    <div class=\"form-section-header\">
                                        <h5>
                                            <span class=\"section-icon\">
                                                <i class=\"mdi mdi-calendar\"></i>
                                            </span>
                                            Date & Humeur
                                        </h5>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-calendar label-icon\"></i>
                                                    Date de saisie
                                                    <span class=\"required-star\">*</span>
                                                </label>
                                                ";
        // line 842
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 842, $this->source); })()), "dateSaisie", [], "any", false, false, false, 842), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 844
        yield "
                                                
                                                <div class=\"form-help-text\">
                                                    <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                    <span>Date à laquelle vous effectuez ce suivi</span>
                                                </div>
                                                ";
        // line 850
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 850, $this->source); })()), "dateSaisie", [], "any", false, false, false, 850), "vars", [], "any", false, false, false, 850), "errors", [], "any", false, false, false, 850)) > 0)) {
            // line 851
            yield "                                                    <div class=\"alert alert-danger alert-dismissible fade show mt-2\" role=\"alert\">
                                                        <i class=\"mdi mdi-alert-circle me-2\"></i>
                                                        <strong>Erreur de date:</strong>
                                                        <ul class=\"mb-0 mt-1\">
                                                            ";
            // line 855
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 855, $this->source); })()), "dateSaisie", [], "any", false, false, false, 855), "vars", [], "any", false, false, false, 855), "errors", [], "any", false, false, false, 855));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 856
                yield "                                                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 856), "html", null, true);
                yield "</li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 858
            yield "                                                        </ul>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                                    </div>
                                                ";
        }
        // line 862
        yield "                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-emoticon label-icon\"></i>
                                                    Humeur générale
                                                    <span class=\"required-star\">*</span>
                                                </label>
                                                ";
        // line 872
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 872, $this->source); })()), "humeur", [], "any", false, false, false, 872), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 874
        yield "
                                                <div class=\"form-help-text\">
                                                    <i class=\"mdi mdi-information-outline\"></i>
                                                    <span>Votre humeur générale aujourd'hui</span>
                                                </div>
                                                ";
        // line 879
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 879, $this->source); })()), "humeur", [], "any", false, false, false, 879), 'errors');
        yield "
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 2: Indicateurs de santé -->
                                    <div class=\"form-section-header\">
                                        <h5>
                                            <span class=\"section-icon\">
                                                <i class=\"mdi mdi-heart-pulse\"></i>
                                            </span>
                                            Indicateurs de Santé (1-10)
                                        </h5>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-battery-charging label-icon\"></i>
                                                    Niveau d'énergie
                                                </label>
                                                ";
        // line 901
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 901, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 901), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "max" => "10"]]);
        // line 905
        yield "
                                                ";
        // line 906
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 906, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 906), 'errors');
        yield "
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-bed label-icon\"></i>
                                                    Qualité du sommeil
                                                </label>
                                                ";
        // line 916
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 916, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 916), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "max" => "10"]]);
        // line 920
        yield "
                                                ";
        // line 921
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 921, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 921), 'errors');
        yield "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-brain label-icon\"></i>
                                                    Niveau de stress
                                                </label>
                                                ";
        // line 933
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 933, $this->source); })()), "niveauStress", [], "any", false, false, false, 933), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "max" => "10"]]);
        // line 937
        yield "
                                                ";
        // line 938
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 938, $this->source); })()), "niveauStress", [], "any", false, false, false, 938), 'errors');
        yield "
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-food label-icon\"></i>
                                                    Qualité d'alimentation
                                                </label>
                                                ";
        // line 948
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 948, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 948), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "max" => "10"]]);
        // line 952
        yield "
                                                ";
        // line 953
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 953, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 953), 'errors');
        yield "
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 3: Notes -->
                                    <div class=\"form-section-header\">
                                        <h5>
                                            <span class=\"section-icon\">
                                                <i class=\"mdi mdi-note-text\"></i>
                                            </span>
                                            Notes & Observations
                                        </h5>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-pencil label-icon\"></i>
                                                    Notes libres
                                                </label>
                                                ";
        // line 975
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 975, $this->source); })()), "notesLibres", [], "any", false, false, false, 975), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Notez vos observations, vos progrès, vos difficultés, vos réussites..."]]);
        // line 979
        yield "
                                                <div class=\"form-help-text\">
                                                    <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                    <span>Exprimez-vous librement sur votre journée et votre progression</span>
                                                </div>
                                                ";
        // line 984
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 984, $this->source); })()), "notesLibres", [], "any", false, false, false, 984), 'errors');
        yield "
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Form Actions -->
                                    <div class=\"form-actions\">
                                        <div class=\"form-actions-left\">
                                            <button type=\"button\" class=\"btn-custom-danger\"
        onclick=\"document.getElementById('delete-suivi-form').submit();\">
  <i class=\"mdi mdi-delete\"></i>
  Supprimer
</button>

                                        </div>
                                        <div class=\"form-actions-right\">
                                            <a href=\"";
        // line 1000
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1000, $this->source); })()), "id", [], "any", false, false, false, 1000)]), "html", null, true);
        yield "\" class=\"btn-custom-secondary\">
                                                <i class=\"mdi mdi-arrow-left\"></i>
                                                Annuler
                                            </a>
                                            <button type=\"submit\" class=\"btn-custom-primary\">
                                                <i class=\"mdi mdi-content-save\"></i>
                                                Enregistrer les modifications
                                            </button>
                                        </div>
                                    </div>
                                    
                                    ";
        // line 1011
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1011, $this->source); })()), 'form_end');
        yield "
                                    <form method=\"post\"
      action=\"";
        // line 1013
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivi_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1013, $this->source); })()), "id", [], "any", false, false, false, 1013), "suiviId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1013, $this->source); })()), "id", [], "any", false, false, false, 1013)]), "html", null, true);
        yield "\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce suivi ? Cette action est irréversible.');\"
      id=\"delete-suivi-form\"
      style=\"display:none;\">
  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1017
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_suivi" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1017, $this->source); })()), "id", [], "any", false, false, false, 1017))), "html", null, true);
        yield "\">
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Info Cards -->
                    <div class=\"row mt-4\">
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"icon\" style=\"background: var(--info-gradient); width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: white; margin-right: 1rem;\">
                                            <i class=\"mdi mdi-chart-line\"></i>
                                        </div>
                                        <h6 class=\"mb-0\">Pourquoi suivre ?</h6>
                                    </div>
                                    <ul class=\"list-unstyled\">
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-check-circle text-success me-2\"></i>
                                            <span><strong>Visualisez vos progrès</strong> au fil du temps</span>
                                        </li>
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-check-circle text-success me-2\"></i>
                                            <span><strong>Identifiez les patterns</strong> dans vos habitudes</span>
                                        </li>
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-check-circle text-success me-2\"></i>
                                            <span><strong>Restez motivé</strong> en voyant vos améliorations</span>
                                        </li>
                                        <li>
                                            <i class=\"mdi mdi-check-circle text-success me-2\"></i>
                                            <span><strong>Prenez des décisions</strong> basées sur des données</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"icon\" style=\"background: var(--success-gradient); width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: white; margin-right: 1rem;\">
                                            <i class=\"mdi mdi-lightbulb-on\"></i>
                                        </div>
                                        <h6 class=\"mb-0\">Conseils de suivi</h6>
                                    </div>
                                    <ul class=\"list-unstyled\">
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-star text-warning me-2\"></i>
                                            <span>Réalisez vos suivis <strong>régulièrement</strong>, idéalement quotidiennement</span>
                                        </li>
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-star text-warning me-2\"></i>
                                            <span>Soyez <strong>honnête</strong> avec vous-même dans vos évaluations</span>
                                        </li>
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-star text-warning me-2\"></i>
                                            <span>Notez <strong>les petits détails</strong> qui font la différence</span>
                                        </li>
                                        <li>
                                            <i class=\"mdi mdi-star text-warning me-2\"></i>
                                            <span><strong>Célébrez</strong> chaque progrès, même minime</span>
                                        </li>
                                    </ul>
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
        // line 1094
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                        </span>
                        <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                            <i class=\"mdi mdi-clipboard-text text-primary\"></i>
                            Modification du suivi - ";
        // line 1098
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1098, $this->source); })()), "titre", [], "any", false, false, false, 1098), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1098, $this->source); })()), "titre", [], "any", false, false, false, 1098)) > 30)) ? ("...") : (""));
        yield "
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 1107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/hoverable-collapse.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/settings.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/todolist.js"), "html", null, true);
        yield "\"></script>

    <script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('edit-suivi-form');
  if (!form) return;

  // ✅ Capture = s'exécute avant les autres scripts
  form.addEventListener('submit', function (e) {
    // ✅ Empêche les autres listeners de faire preventDefault()
    e.stopImmediatePropagation();

    const dateSaisie = form.querySelector('[name*=\"[dateSaisie]\"]');
    const humeur = form.querySelector('[name*=\"[humeur]\"]');

    // Feedback visuel seulement (NE PAS preventDefault)
    if (dateSaisie && !dateSaisie.value) dateSaisie.focus();
    if (humeur && !humeur.value) humeur.focus();

    // Loading state
    const submitBtn = form.querySelector('.btn-custom-primary');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin\"></i> Enregistrement...';
    }
  }, true); // <-- true = CAPTURE

  // Clamp inputs 1..10
 
});
</script>


</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "suivi_bien_etre/edit_for_objectif.html.twig";
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
        return array (  1540 => 1113,  1536 => 1112,  1532 => 1111,  1528 => 1110,  1524 => 1109,  1520 => 1108,  1516 => 1107,  1503 => 1098,  1496 => 1094,  1416 => 1017,  1409 => 1013,  1404 => 1011,  1390 => 1000,  1371 => 984,  1364 => 979,  1362 => 975,  1337 => 953,  1334 => 952,  1332 => 948,  1319 => 938,  1316 => 937,  1314 => 933,  1299 => 921,  1296 => 920,  1294 => 916,  1281 => 906,  1278 => 905,  1276 => 901,  1251 => 879,  1244 => 874,  1242 => 872,  1230 => 862,  1224 => 858,  1215 => 856,  1211 => 855,  1205 => 851,  1203 => 850,  1195 => 844,  1193 => 842,  1170 => 822,  1166 => 820,  1159 => 815,  1157 => 814,  1152 => 812,  1132 => 795,  1125 => 791,  1118 => 787,  1109 => 781,  1103 => 777,  1099 => 775,  1094 => 774,  1090 => 773,  1086 => 772,  1082 => 771,  1078 => 770,  1070 => 765,  1045 => 743,  1037 => 739,  1032 => 737,  1023 => 731,  1011 => 724,  999 => 714,  993 => 713,  982 => 708,  976 => 705,  970 => 703,  965 => 702,  961 => 701,  937 => 681,  922 => 669,  908 => 659,  906 => 658,  902 => 656,  897 => 653,  893 => 651,  889 => 649,  885 => 647,  883 => 646,  878 => 644,  871 => 643,  869 => 642,  862 => 637,  855 => 634,  849 => 630,  845 => 628,  841 => 626,  839 => 625,  831 => 622,  827 => 620,  820 => 617,  817 => 616,  811 => 613,  806 => 612,  804 => 611,  801 => 610,  799 => 609,  787 => 600,  754 => 570,  738 => 557,  728 => 550,  711 => 536,  666 => 494,  648 => 478,  643 => 475,  639 => 473,  635 => 471,  631 => 469,  629 => 468,  624 => 466,  617 => 465,  615 => 464,  610 => 461,  604 => 459,  601 => 458,  594 => 455,  591 => 454,  585 => 451,  580 => 450,  577 => 449,  575 => 448,  564 => 440,  560 => 439,  555 => 437,  551 => 436,  133 => 21,  129 => 20,  123 => 17,  119 => 16,  115 => 15,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le suivi - {{ objectif.titre }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Modifier le Suivi</title>
    
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --danger-gradient: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
            --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --health-gradient: linear-gradient(135deg, #fa8bff 0%, #2bd2ff 90%, #2bff88 100%);
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --card-shadow-hover: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            box-shadow: var(--card-shadow-hover);
        }

        .card-header-custom {
            background: var(--health-gradient);
            color: white;
            padding: 1.5rem;
            border-radius: 15px 15px 0 0;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .card-header-custom h4 {
            margin: 0;
            font-weight: 600;
            font-size: 1.25rem;
        }

        .card-header-custom .icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .form-section-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 1rem 1.5rem;
            border-radius: 10px;
            margin: 2rem 0 1.5rem;
            border-left: 4px solid;
            border-image: var(--health-gradient) 1;
        }

        .form-section-header h5 {
            margin: 0;
            color: #495057;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .form-section-header .section-icon {
            width: 35px;
            height: 35px;
            background: var(--health-gradient);
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .form-group {
            margin-bottom: 1.75rem;
        }

        .form-label-custom {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
        }

        .form-label-custom .required-star {
            color: #f5576c;
            font-weight: bold;
        }

        .form-label-custom .label-icon {
            color: #667eea;
            font-size: 1.1rem;
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
            outline: none;
        }

        .form-control:hover, .form-select:hover {
            border-color: #b8c1ec;
        }

        .form-help-text {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 0.5rem;
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
        }

        .form-help-text i {
            margin-top: 2px;
            color: #667eea;
        }

        .btn-custom-primary {
            background: var(--health-gradient);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-custom-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(250, 139, 255, 0.4);
            color: white;
        }

        .btn-custom-secondary {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            color: #495057;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-custom-secondary:hover {
            background: #f8f9fa;
            border-color: #667eea;
            color: #667eea;
            transform: translateY(-2px);
        }

        .btn-custom-danger {
            background: var(--danger-gradient);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-custom-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 87, 108, 0.4);
            color: white;
        }

        .page-header-enhanced {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--card-shadow);
            margin-bottom: 2rem;
        }

        .page-header-enhanced .title-section {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .page-header-enhanced .title-icon {
            width: 60px;
            height: 60px;
            background: var(--health-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .page-header-enhanced h3 {
            margin: 0;
            color: #2c3e50;
            font-weight: 700;
        }

        .page-header-enhanced .subtitle {
            color: #6c757d;
            margin-top: 0.5rem;
            font-size: 0.95rem;
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: #667eea;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .breadcrumb-custom .breadcrumb-item a:hover {
            color: #764ba2;
        }

        .alert-custom {
            border: none;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            box-shadow: var(--card-shadow);
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .current-info-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px solid #dee2e6;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .current-info-card h5 {
            color: #495057;
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #dee2e6;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .info-value {
            font-weight: 500;
            color: #495057;
        }

        .form-actions {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 2rem;
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            border: 2px dashed #e9ecef;
        }

        .form-actions-left {
            display: flex;
            gap: 1rem;
        }

        .form-actions-right {
            display: flex;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .page-header-enhanced .title-section {
                flex-direction: column;
                text-align: center;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions-left,
            .form-actions-right {
                flex-direction: column;
                width: 100%;
            }

            .btn-custom-primary,
            .btn-custom-secondary,
            .btn-custom-danger {
                width: 100%;
                justify-content: center;
            }
        }
        
        /* Avatar styles */
        .profile-avatar-img, .user-avatar-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }
        
        .user-avatar-img {
            width: 40px;
            height: 40px;
            border: 2px solid #fff;
        }
        
        .profile-avatar, .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }

        /* Error styling */
        .form-general-errors {
            margin-bottom: 1.5rem;
        }

        .form-general-errors .form-error-message {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 10px;
            color: #721c24;
            padding: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
        }

        .form-general-errors .form-error-message i {
            font-size: 1.25rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .form-general-errors .form-error-message ul {
            margin: 0;
            padding-left: 1.5rem;
        }

        .form-general-errors .form-error-message li {
            margin: 0.25rem 0;
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
                                            <span class=\"badge badge-success\">Administrateur</span>
                                        {% else %}
                                            <span class=\"badge badge-info\">Utilisateur</span>
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
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-speedometer\"></i></span>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
                        <span class=\"menu-title\">Utilisateurs</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-book-open-page-variant\"></i></span>
                        <span class=\"menu-title\">Matieres</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-school\"></i></span>
                        <span class=\"menu-title\">Classes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-office-building\"></i></span>
                        <span class=\"menu-title\">Salles</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-calendar-clock\"></i></span>
                        <span class=\"menu-title\">Séances</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-account-multiple\"></i></span>
                        <span class=\"menu-title\">Groupes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"{{ path('app_tache_index') }}\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-checkbox-marked-circle-outline\"></i></span>
                        <span class=\"menu-title\">Tâches</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"#\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-alert-circle-outline\"></i></span>
                        <span class=\"menu-title\">Alertes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items active\">
                    <a class=\"nav-link\" href=\"{{ path('app_objectif_sante_index') }}\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
                        <span class=\"menu-title\">Objectifs de santé</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-logout text-danger\"></i></span>
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
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un suivi...\">
                            </form>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav navbar-nav-right\">
                        <li class=\"nav-item dropdown border-left\">
                            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <span class=\"count bg-danger\">3</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                                <h6 class=\"p-3 mb-0\">Notifications</h6>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item preview-item\">
                                    <div class=\"preview-thumbnail\">
                                        <div class=\"preview-icon bg-success rounded-circle\">
                                            <i class=\"mdi mdi-heart-pulse\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Suivi modifié!</p>
                                        <p class=\"text-muted ellipsis mb-0\">Votre suivi du {{ suivi.dateSaisie|date('d/m/Y') }} a été mis à jour</p>
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
                                                        <span class=\"badge badge-success\">Admin</span>
                                                    {% else %}
                                                        <span class=\"badge badge-info\">Utilisateur</span>
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
                                                <span class=\"badge badge-success\">Administrateur</span>
                                            {% else %}
                                                <span class=\"badge badge-info\">Utilisateur</span>
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
                    <!-- Flash Messages -->
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert-custom alert-{{ label == 'error' ? 'danger' : label }}\">
                                <div class=\"alert-icon\">
                                    <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }}\"></i>
                                </div>
                                <div class=\"flex-grow-1\">
                                    {{ message }}
                                </div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    <!-- Enhanced Page Header -->
                    <div class=\"page-header-enhanced\">
                        <div class=\"title-section\">
                            <div class=\"title-icon\">
                                <i class=\"mdi mdi-pencil-box\"></i>
                            </div>
                            <div>
                                <h3>Modifier le Suivi</h3>
                                <p class=\"subtitle\">
                                    Modifiez votre suivi du {{ suivi.dateSaisie|date('d/m/Y') }} pour l'objectif \"{{ objectif.titre }}\"
                                </p>
                            </div>
                        </div>
                        <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"{{ path('app_objectif_sante_index') }}\">
                                        <i class=\"mdi mdi-heart-pulse me-1\"></i>
                                        Objectifs de santé
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item\">
                                    <a href=\"{{ path('app_objectif_sante_show', {'id': objectif.id}) }}\">
                                        <i class=\"mdi mdi-eye me-1\"></i>
                                        {{ objectif.titre|slice(0, 30) }}{{ objectif.titre|length > 30 ? '...' : '' }}
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item\">
                                    <a href=\"{{ path('app_objectif_suivis', {'id': objectif.id}) }}\">
                                        <i class=\"mdi mdi-clipboard-text me-1\"></i>
                                        Suivis
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    Modification
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <!-- Current Info Display -->
                    <div class=\"current-info-card\">
                        <h5>
                            <i class=\"mdi mdi-information\"></i>
                            Informations actuelles du suivi
                        </h5>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Date de saisie:</span>
                                    <span class=\"info-value\">{{ suivi.dateSaisie|date('d/m/Y') }}</span>
                                </div>
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Humeur:</span>
                                    <span class=\"info-value\">
                                        {% if suivi.humeur == 1 %}😢 Très mauvaise
                                        {% elseif suivi.humeur == 2 %}😔 Mauvaise
                                        {% elseif suivi.humeur == 3 %}😐 Neutre
                                        {% elseif suivi.humeur == 4 %}😊 Bonne
                                        {% elseif suivi.humeur == 5 %}😄 Excellente
                                        {% else %}Non définie
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Niveau d'énergie:</span>
                                    <span class=\"info-value\">{{ suivi.niveauEnergie ? suivi.niveauEnergie ~ '/10' : 'Non défini' }}</span>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Qualité du sommeil:</span>
                                    <span class=\"info-value\">{{ suivi.qualiteSommeil ? suivi.qualiteSommeil ~ '/10' : 'Non défini' }}</span>
                                </div>
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Niveau de stress:</span>
                                    <span class=\"info-value\">{{ suivi.niveauStress ? suivi.niveauStress ~ '/10' : 'Non défini' }}</span>
                                </div>
                                <div class=\"info-row\">
                                    <span class=\"info-label\">Qualité d'alimentation:</span>
                                    <span class=\"info-value\">{{ suivi.qualiteAlimentation ? suivi.qualiteAlimentation ~ '/10' : 'Non défini' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Form Card -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header-custom\">
                                    <div class=\"icon\">
                                        <i class=\"mdi mdi-clipboard-text\"></i>
                                    </div>
                                    <h4>Formulaire de modification du suivi</h4>
                                </div>
                                <div class=\"card-body p-4\">
                                    {{ form_start(form, {'attr': {'class': 'form-sample', 'id': 'edit-suivi-form', 'novalidate': 'novalidate'}}) }}

{% if form.vars.submitted and not form.vars.valid %}
  <div class=\"alert alert-danger mt-3\">
    <i class=\"mdi mdi-alert-circle me-2\"></i>
    Veuillez corriger les erreurs dans le formulaire.
  </div>
{% endif %}

<div class=\"form-general-errors\">
  {{ form_errors(form) }}
</div>
                                    <!-- Section 1: Date et Humeur -->
                                    <div class=\"form-section-header\">
                                        <h5>
                                            <span class=\"section-icon\">
                                                <i class=\"mdi mdi-calendar\"></i>
                                            </span>
                                            Date & Humeur
                                        </h5>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-calendar label-icon\"></i>
                                                    Date de saisie
                                                    <span class=\"required-star\">*</span>
                                                </label>
                                                {{ form_widget(form.dateSaisie, {'attr': {
                                                    'class': 'form-control'
                                                }}) }}
                                                
                                                <div class=\"form-help-text\">
                                                    <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                    <span>Date à laquelle vous effectuez ce suivi</span>
                                                </div>
                                                {% if form.dateSaisie.vars.errors|length > 0 %}
                                                    <div class=\"alert alert-danger alert-dismissible fade show mt-2\" role=\"alert\">
                                                        <i class=\"mdi mdi-alert-circle me-2\"></i>
                                                        <strong>Erreur de date:</strong>
                                                        <ul class=\"mb-0 mt-1\">
                                                            {% for error in form.dateSaisie.vars.errors %}
                                                                <li>{{ error.message }}</li>
                                                            {% endfor %}
                                                        </ul>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                                    </div>
                                                {% endif %}
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-emoticon label-icon\"></i>
                                                    Humeur générale
                                                    <span class=\"required-star\">*</span>
                                                </label>
                                                {{ form_widget(form.humeur, {'attr': {
                                                    'class': 'form-select'
                                                }}) }}
                                                <div class=\"form-help-text\">
                                                    <i class=\"mdi mdi-information-outline\"></i>
                                                    <span>Votre humeur générale aujourd'hui</span>
                                                </div>
                                                {{ form_errors(form.humeur) }}
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 2: Indicateurs de santé -->
                                    <div class=\"form-section-header\">
                                        <h5>
                                            <span class=\"section-icon\">
                                                <i class=\"mdi mdi-heart-pulse\"></i>
                                            </span>
                                            Indicateurs de Santé (1-10)
                                        </h5>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-battery-charging label-icon\"></i>
                                                    Niveau d'énergie
                                                </label>
                                                {{ form_widget(form.niveauEnergie, {'attr': {
                                                    'class': 'form-control',
                                                    'min': '1',
                                                    'max': '10'
                                                }}) }}
                                                {{ form_errors(form.niveauEnergie) }}
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-bed label-icon\"></i>
                                                    Qualité du sommeil
                                                </label>
                                                {{ form_widget(form.qualiteSommeil, {'attr': {
                                                    'class': 'form-control',
                                                    'min': '1',
                                                    'max': '10'
                                                }}) }}
                                                {{ form_errors(form.qualiteSommeil) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-brain label-icon\"></i>
                                                    Niveau de stress
                                                </label>
                                                {{ form_widget(form.niveauStress, {'attr': {
                                                    'class': 'form-control',
                                                    'min': '1',
                                                    'max': '10'
                                                }}) }}
                                                {{ form_errors(form.niveauStress) }}
                                            </div>
                                        </div>
                                        
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-food label-icon\"></i>
                                                    Qualité d'alimentation
                                                </label>
                                                {{ form_widget(form.qualiteAlimentation, {'attr': {
                                                    'class': 'form-control',
                                                    'min': '1',
                                                    'max': '10'
                                                }}) }}
                                                {{ form_errors(form.qualiteAlimentation) }}
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 3: Notes -->
                                    <div class=\"form-section-header\">
                                        <h5>
                                            <span class=\"section-icon\">
                                                <i class=\"mdi mdi-note-text\"></i>
                                            </span>
                                            Notes & Observations
                                        </h5>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"form-group\">
                                                <label class=\"form-label-custom\">
                                                    <i class=\"mdi mdi-pencil label-icon\"></i>
                                                    Notes libres
                                                </label>
                                                {{ form_widget(form.notesLibres, {'attr': {
                                                    'class': 'form-control',
                                                    'rows': 5,
                                                    'placeholder': 'Notez vos observations, vos progrès, vos difficultés, vos réussites...'
                                                }}) }}
                                                <div class=\"form-help-text\">
                                                    <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                    <span>Exprimez-vous librement sur votre journée et votre progression</span>
                                                </div>
                                                {{ form_errors(form.notesLibres) }}
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Form Actions -->
                                    <div class=\"form-actions\">
                                        <div class=\"form-actions-left\">
                                            <button type=\"button\" class=\"btn-custom-danger\"
        onclick=\"document.getElementById('delete-suivi-form').submit();\">
  <i class=\"mdi mdi-delete\"></i>
  Supprimer
</button>

                                        </div>
                                        <div class=\"form-actions-right\">
                                            <a href=\"{{ path('app_objectif_suivis', {'id': objectif.id}) }}\" class=\"btn-custom-secondary\">
                                                <i class=\"mdi mdi-arrow-left\"></i>
                                                Annuler
                                            </a>
                                            <button type=\"submit\" class=\"btn-custom-primary\">
                                                <i class=\"mdi mdi-content-save\"></i>
                                                Enregistrer les modifications
                                            </button>
                                        </div>
                                    </div>
                                    
                                    {{ form_end(form) }}
                                    <form method=\"post\"
      action=\"{{ path('app_objectif_suivi_delete', {'id': objectif.id, 'suiviId': suivi.id}) }}\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce suivi ? Cette action est irréversible.');\"
      id=\"delete-suivi-form\"
      style=\"display:none;\">
  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_suivi' ~ suivi.id) }}\">
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Info Cards -->
                    <div class=\"row mt-4\">
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"icon\" style=\"background: var(--info-gradient); width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: white; margin-right: 1rem;\">
                                            <i class=\"mdi mdi-chart-line\"></i>
                                        </div>
                                        <h6 class=\"mb-0\">Pourquoi suivre ?</h6>
                                    </div>
                                    <ul class=\"list-unstyled\">
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-check-circle text-success me-2\"></i>
                                            <span><strong>Visualisez vos progrès</strong> au fil du temps</span>
                                        </li>
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-check-circle text-success me-2\"></i>
                                            <span><strong>Identifiez les patterns</strong> dans vos habitudes</span>
                                        </li>
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-check-circle text-success me-2\"></i>
                                            <span><strong>Restez motivé</strong> en voyant vos améliorations</span>
                                        </li>
                                        <li>
                                            <i class=\"mdi mdi-check-circle text-success me-2\"></i>
                                            <span><strong>Prenez des décisions</strong> basées sur des données</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"icon\" style=\"background: var(--success-gradient); width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: white; margin-right: 1rem;\">
                                            <i class=\"mdi mdi-lightbulb-on\"></i>
                                        </div>
                                        <h6 class=\"mb-0\">Conseils de suivi</h6>
                                    </div>
                                    <ul class=\"list-unstyled\">
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-star text-warning me-2\"></i>
                                            <span>Réalisez vos suivis <strong>régulièrement</strong>, idéalement quotidiennement</span>
                                        </li>
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-star text-warning me-2\"></i>
                                            <span>Soyez <strong>honnête</strong> avec vous-même dans vos évaluations</span>
                                        </li>
                                        <li class=\"mb-2\">
                                            <i class=\"mdi mdi-star text-warning me-2\"></i>
                                            <span>Notez <strong>les petits détails</strong> qui font la différence</span>
                                        </li>
                                        <li>
                                            <i class=\"mdi mdi-star text-warning me-2\"></i>
                                            <span><strong>Célébrez</strong> chaque progrès, même minime</span>
                                        </li>
                                    </ul>
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
                            <i class=\"mdi mdi-clipboard-text text-primary\"></i>
                            Modification du suivi - {{ objectif.titre|slice(0, 30) }}{{ objectif.titre|length > 30 ? '...' : '' }}
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/chart.js/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('assets/js/hoverable-collapse.js') }}\"></script>
    <script src=\"{{ asset('assets/js/misc.js') }}\"></script>
    <script src=\"{{ asset('assets/js/settings.js') }}\"></script>
    <script src=\"{{ asset('assets/js/todolist.js') }}\"></script>

    <script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('edit-suivi-form');
  if (!form) return;

  // ✅ Capture = s'exécute avant les autres scripts
  form.addEventListener('submit', function (e) {
    // ✅ Empêche les autres listeners de faire preventDefault()
    e.stopImmediatePropagation();

    const dateSaisie = form.querySelector('[name*=\"[dateSaisie]\"]');
    const humeur = form.querySelector('[name*=\"[humeur]\"]');

    // Feedback visuel seulement (NE PAS preventDefault)
    if (dateSaisie && !dateSaisie.value) dateSaisie.focus();
    if (humeur && !humeur.value) humeur.focus();

    // Loading state
    const submitBtn = form.querySelector('.btn-custom-primary');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin\"></i> Enregistrement...';
    }
  }, true); // <-- true = CAPTURE

  // Clamp inputs 1..10
 
});
</script>


</body>
</html>
{% endblock %}", "suivi_bien_etre/edit_for_objectif.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\suivi_bien_etre\\edit_for_objectif.html.twig");
    }
}
