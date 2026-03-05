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

/* objectif_sante/index.html.twig */
class __TwigTemplate_58546d8c2bc1e67c28033785683e913d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_sante/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_sante/index.html.twig"));

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

        yield "Liste des Objectifs de Santé";
        
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
    <title>ESPRIT - Gestion des Objectifs de Santé</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" />
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

      .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
        border: none;
        box-shadow: var(--card-shadow);
      }
      
      .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--card-shadow-hover);
      }
      
      .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: white;
        margin: 0 auto;
      }
      
      .stat-count {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 5px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
      
      .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
      }
      
      .card-1 { background: var(--primary-gradient); }
      .card-2 { background: var(--danger-gradient); }
      .card-3 { background: var(--info-gradient); }
      .card-4 { background: var(--success-gradient); }
      .card-5 { background: var(--health-gradient); }
      
      /* Type badges */
      .type-badge {
        font-size: 0.75rem;
        padding: 5px 12px;
        border-radius: 12px;
        display: inline-block;
        color: white;
        border: none;
        font-weight: 600;
      }
      
      .type-poids { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .type-cardio { background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%); }
      .type-sommeil { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .type-nutrition { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .type-hydratation { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .type-musculation { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .type-autre { background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); color: #495057; }
      
      /* Priority badges */
      .priority-badge {
        font-size: 0.75rem;
        padding: 5px 12px;
        border-radius: 12px;
        display: inline-block;
        color: white;
        border: none;
        font-weight: 600;
      }
      
      .priority-haute { background: var(--danger-gradient); }
      .priority-moyenne { background: var(--warning-gradient); }
      .priority-faible { background: var(--success-gradient); }
      
      /* Status badges */
      .status-badge {
        font-size: 0.75rem;
        padding: 5px 12px;
        border-radius: 12px;
        display: inline-block;
        color: white;
        border: none;
        font-weight: 600;
      }
      
      .status-en-cours { background: var(--info-gradient); }
      .status-termine { background: var(--success-gradient); }
      .status-abandonne { background: linear-gradient(135deg, #838383 0%, #666666 100%); }
      .status-en-pause { background: var(--warning-gradient); }
      
      /* Enhanced Card */
      .card {
        border: none;
        border-radius: 15px;
        box-shadow: var(--card-shadow);
        transition: all 0.3s ease;
      }

      .card:hover {
        box-shadow: var(--card-shadow-hover);
      }

      /* Page Header */
      .page-header {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: var(--card-shadow);
        margin-bottom: 2rem;
      }

      .page-title-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      /* Avatar Styles */
      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary-gradient);
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
      
      .profile-avatar {
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

      .badge-etudiant {
        background: var(--info-gradient);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: var(--primary-gradient);
        color: white;
        border: none;
      }
      
      /* Action Buttons */
      .action-buttons {
        display: flex;
        gap: 5px;
      }
      
      .action-buttons .btn {
        padding: 6px 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
      }

      .action-buttons .btn:hover {
        transform: translateY(-2px);
      }
      
      /* Search Box */
      .search-box {
        max-width: 300px;
      }

      .search-box input {
        border-radius: 10px;
        border: 2px solid #e9ecef;
        transition: all 0.3s ease;
      }

      .search-box input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
      }
      
      /* Table Styles */
      .table-hover tbody tr {
        transition: all 0.3s ease;
      }

      .table-hover tbody tr:hover {
        background-color: rgba(102, 126, 234, 0.05);
        transform: scale(1.01);
      }

      .table thead th {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        color: #495057;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        border: none;
        padding: 1rem;
      }

      .table td {
        vertical-align: middle;
        padding: 1rem;
        border-bottom: 1px solid #f1f3f5;
      }
      
      /* Empty State */
      .empty-state {
        text-align: center;
        padding: 80px 20px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 15px;
      }
      
      .empty-state i {
        font-size: 80px;
        background: var(--health-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
      }

      /* Flash Messages */
      .alert {
        border-radius: 12px;
        border: none;
        box-shadow: var(--card-shadow);
        margin-bottom: 20px;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .alert i {
        font-size: 1.5rem;
      }
      
      /* Progress Bar */
      .progress {
        height: 10px;
        border-radius: 10px;
        background-color: #e9ecef;
        overflow: hidden;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      }
      
      .progress-bar {
        border-radius: 10px;
        transition: width 0.6s ease;
      }

      .progress-bar.bg-health {
        background: var(--health-gradient);
      }
      
      /* Date Styles */
      .date-cell {
        font-size: 0.85rem;
      }
      
      .date-label {
        font-weight: 600;
        color: #495057;
        display: block;
        margin-bottom: 2px;
      }
      
      .date-value {
        color: #6c757d;
        display: block;
      }

      /* User Info Styles */
      .user-info {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .user-info-text {
        display: flex;
        flex-direction: column;
      }

      .user-name {
        font-weight: 600;
        color: #495057;
        font-size: 0.9rem;
      }

      .user-email {
        color: #6c757d;
        font-size: 0.75rem;
      }

      /* Sidebar & Layout */
      .profile-pic {
        display: flex;
        align-items: center;
        padding: 10px 0;
      }
      
      .count-indicator {
        position: relative;
        margin-right: 15px;
      }
      
      .profile-name {
        flex-grow: 1;
      }
      
      .navbar-profile {
        display: flex;
        align-items: center;
        padding: 5px 0;
      }
      
      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }

      /* Target Value Badge */
      .target-value {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 12px;
        background: linear-gradient(135deg, #e9ecef 0%, #f8f9fa 100%);
        border-radius: 10px;
        font-weight: 600;
        color: #495057;
        font-size: 0.85rem;
      }

      /* Responsive */
      @media (max-width: 768px) {
        .stat-card {
          margin-bottom: 1rem;
        }

        .action-buttons {
          flex-direction: column;
        }

        .search-box {
          max-width: 100%;
          margin-bottom: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 442
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 445
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 446
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
        // line 454
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 454, $this->source); })()), "user", [], "any", false, false, false, 454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 455
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "profilePic", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 456
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 456, $this->source); })()), "user", [], "any", false, false, false, 456), "profilePic", [], "any", false, false, false, 456))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 457
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 457, $this->source); })()), "user", [], "any", false, false, false, 457), "prenom", [], "any", false, false, false, 457), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 460
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 461, $this->source); })()), "user", [], "any", false, false, false, 461), "prenom", [], "any", false, false, false, 461))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 461, $this->source); })()), "user", [], "any", false, false, false, 461), "nom", [], "any", false, false, false, 461))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 464
            yield "                  ";
        } else {
            // line 465
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 467
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 470
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 470, $this->source); })()), "user", [], "any", false, false, false, 470)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 471
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "user", [], "any", false, false, false, 471), "prenom", [], "any", false, false, false, 471), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "user", [], "any", false, false, false, 471), "nom", [], "any", false, false, false, 471), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 472, $this->source); })()), "user", [], "any", false, false, false, 472), "email", [], "any", false, false, false, 472), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 474
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 474, $this->source); })()), "user", [], "any", false, false, false, 474), "roles", [], "any", false, false, false, 474))) {
                // line 475
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 477
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 479
            yield "                    </div>
                  ";
        } else {
            // line 481
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 484
        yield "                </div>
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
          
          ";
        // line 499
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 500
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 501
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          ";
        } else {
            // line 507
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 508
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-circle\"></i></span>
              <span class=\"menu-title\">Mon Profil</span>
            </a>
          </li>
          ";
        }
        // line 514
        yield "          
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
        // line 551
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
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Objectifs de santé</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 572
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
        // line 585
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un objectif...\" id=\"searchInput\">
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
                      <p class=\"preview-subject mb-1\">Objectif atteint!</p>
                      <p class=\"text-muted ellipsis mb-0\">Félicitations pour votre objectif cardio</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 624
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 624, $this->source); })()), "user", [], "any", false, false, false, 624)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 625
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 626
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 626, $this->source); })()), "user", [], "any", false, false, false, 626), "profilePic", [], "any", false, false, false, 626)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 627
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 627, $this->source); })()), "user", [], "any", false, false, false, 627), "profilePic", [], "any", false, false, false, 627))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 628
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 628, $this->source); })()), "user", [], "any", false, false, false, 628), "prenom", [], "any", false, false, false, 628), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 631
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 632
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 632, $this->source); })()), "user", [], "any", false, false, false, 632), "prenom", [], "any", false, false, false, 632))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 632, $this->source); })()), "user", [], "any", false, false, false, 632), "nom", [], "any", false, false, false, 632))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 635
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 637
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "user", [], "any", false, false, false, 637), "prenom", [], "any", false, false, false, 637), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "user", [], "any", false, false, false, 637), "nom", [], "any", false, false, false, 637), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 640
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 640, $this->source); })()), "user", [], "any", false, false, false, 640), "roles", [], "any", false, false, false, 640))) {
                // line 641
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 643
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 645
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 649
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 652
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 657
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 657, $this->source); })()), "user", [], "any", false, false, false, 657)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 658
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 658, $this->source); })()), "user", [], "any", false, false, false, 658), "prenom", [], "any", false, false, false, 658), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 658, $this->source); })()), "user", [], "any", false, false, false, 658), "nom", [], "any", false, false, false, 658), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 659
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 659, $this->source); })()), "user", [], "any", false, false, false, 659), "email", [], "any", false, false, false, 659), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 661
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 661, $this->source); })()), "user", [], "any", false, false, false, 661), "roles", [], "any", false, false, false, 661))) {
                // line 662
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 664
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 666
            yield "                      </small>
                    ";
        } else {
            // line 668
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 671
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 673
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 673, $this->source); })()), "user", [], "any", false, false, false, 673)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 674
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 674, $this->source); })()), "user", [], "any", false, false, false, 674), "id", [], "any", false, false, false, 674)]), "html", null, true);
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
            // line 684
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 684, $this->source); })()), "user", [], "any", false, false, false, 684), "id", [], "any", false, false, false, 684)]), "html", null, true);
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
        // line 696
        yield "                  <a class=\"dropdown-item preview-item\" href=\"";
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
            ";
        // line 716
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 716, $this->source); })()), "flashes", [], "any", false, false, false, 716));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 717
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 718
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 719
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
                  <div>";
                // line 720
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 724
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 725
        yield "
            <!-- Header -->
            <div class=\"page-header\">
              <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                  <h3 class=\"page-title mb-0 text-dark\">
                    <span class=\"page-title-icon bg-gradient-primary text-dark  me-2\">
                      <i class=\"mdi mdi-heart-pulse\"></i>
                    </span> 
                    Gestion des Objectifs de Santé
                  </h3>
                  <nav aria-label=\"breadcrumb\" class=\"mt-2\">
                    <ol class=\"breadcrumb mb-0\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"mdi mdi-home me-1\"></i>
                        Liste complète des objectifs de santé
                      </li>
                    </ol>
                  </nav>
                  ";
        // line 744
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 744, $this->source); })()), "user", [], "any", false, false, false, 744)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 745
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté: <strong>";
            // line 748
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 748, $this->source); })()), "user", [], "any", false, false, false, 748), "prenom", [], "any", false, false, false, 748), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 748, $this->source); })()), "user", [], "any", false, false, false, 748), "nom", [], "any", false, false, false, 748), "html", null, true);
            yield "</strong>
                        ";
            // line 749
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 749, $this->source); })()), "user", [], "any", false, false, false, 749), "roles", [], "any", false, false, false, 749))) {
                // line 750
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 752
            yield "                      </small>
                    </div>
                  ";
        }
        // line 755
        yield "                </div>
              </div>
            </div>
            
            <!-- Statistics -->
            <div class=\"row\">
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">";
        // line 767
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 767, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+12%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-5\">
                          <i class=\"mdi mdi-heart-pulse\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label mt-3\">Total Objectifs</h6>
                  </div>
                </div>
              </div>
              
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          ";
        // line 788
        $context["en_cours"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 788, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 788, $this->source); })()), "statut", [], "any", false, false, false, 788) == "EN_COURS"); }));
        // line 789
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["en_cours"]) || array_key_exists("en_cours", $context) ? $context["en_cours"] : (function () { throw new RuntimeError('Variable "en_cours" does not exist.', 789, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-info ms-2 mb-0 font-weight-medium\">Actifs</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-clock-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label mt-3\">En cours</h6>
                  </div>
                </div>
              </div>
              
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                         ";
        // line 810
        $context["haute_priorite"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 810, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 810, $this->source); })()), "priorite", [], "any", false, false, false, 810) == "HAUTE"); }));
        // line 811
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["haute_priorite"]) || array_key_exists("haute_priorite", $context) ? $context["haute_priorite"] : (function () { throw new RuntimeError('Variable "haute_priorite" does not exist.', 811, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-danger ms-2 mb-0 font-weight-medium\">Urgent</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-flag\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label mt-3\">Priorité Haute</h6>
                  </div>
                </div>
              </div>
              
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          ";
        // line 832
        $context["termines"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 832, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 832, $this->source); })()), "statut", [], "any", false, false, false, 832) == "ATTEINT"); }));
        // line 833
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["termines"]) || array_key_exists("termines", $context) ? $context["termines"] : (function () { throw new RuntimeError('Variable "termines" does not exist.', 833, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+8%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-check-circle\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label mt-3\">Terminés</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Objectifs Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title mb-0\">
                        <i class=\"mdi mdi-format-list-bulleted me-2\"></i>
                        Liste des Objectifs de Santé
                      </h4>
                      <div class=\"d-flex gap-2 align-items-center flex-wrap\">

  <select id=\"filterType\" class=\"form-select\" style=\"max-width: 200px;\">
    <option value=\"ALL\">Tous les types</option>
    <option value=\"SOMMEIL\">SOMMEIL</option>
    <option value=\"SPORT\">SPORT</option>
    <option value=\"ALIMENTATION\">ALIMENTATION</option>
  </select>

  <select id=\"filterPriorite\" class=\"form-select\" style=\"max-width: 200px;\">
    <option value=\"ALL\">Toutes les priorités</option>
    <option value=\"HAUTE\">HAUTE</option>
    <option value=\"MOYENNE\">MOYENNE</option>
    <option value=\"BASSE\">BASSE</option>
  </select>

  <select id=\"sortBy\" class=\"form-select\" style=\"max-width: 200px;\">
    <option value=\"dateDebut\">Trier par date début</option>
    <option value=\"priorite\">Trier par priorité</option>
  </select>

  <select id=\"sortDir\" class=\"form-select\" style=\"max-width: 160px;\">
    <option value=\"DESC\">DESC</option>
    <option value=\"ASC\">ASC</option>
  </select>

  <input id=\"q\" type=\"text\" class=\"form-control\" placeholder=\"Rechercher titre...\" style=\"max-width: 260px;\">

  <a href=\"";
        // line 887
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_new");
        yield "\" class=\"btn btn-gradient-primary btn-icon-text\">
    <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
    Nouvel objectif
  </a>

</div>

                    </div>

                    ";
        // line 896
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 896, $this->source); })()))) {
            // line 897
            yield "                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-heart-pulse\"></i>
                        <h4 class=\"text-muted mt-3\">Aucun objectif de santé trouvé</h4>
                        <p class=\"text-muted mb-4\">Commencez votre parcours santé en créant votre premier objectif</p>
                        <a href=\"";
            // line 901
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_new");
            yield "\" class=\"btn btn-gradient-primary btn-lg\">
                          <i class=\"mdi mdi-plus-circle me-2\"></i>
                          Créer mon premier objectif
                        </a>
                      </div>
                    ";
        } else {
            // line 907
            yield "                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"objectifsTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Titre</th>
                              <th>Type</th>
                              <th>Valeur Cible</th>
                              <th>Période</th>
                              <th>Score Moyen</th>
                              <th>Priorité</th>
                              <th>Statut</th>
                              <th>Utilisateur</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody id=\"tableBody\">
  ";
            // line 924
            yield from $this->load("objectif_sante/_rows.html.twig", 924)->unwrap()->yield(CoreExtension::merge($context, ["objectif_santes" => (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 924, $this->source); })())]));
            // line 925
            yield "</tbody>

                        </table>
                      </div>
                    ";
        }
        // line 930
        yield "                  </div>
                </div>
              </div>
            </div>
          
            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 939
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  <i class=\"mdi mdi-heart-pulse text-danger\"></i>
                  Objectifs de Santé - ";
        // line 943
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 943, $this->source); })())), "html", null, true);
        yield " objectif";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 943, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                  ";
        // line 944
        $context["en_cours"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectif_santes"]) || array_key_exists("objectif_santes", $context) ? $context["objectif_santes"] : (function () { throw new RuntimeError('Variable "objectif_santes" does not exist.', 944, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 944, $this->source); })()), "statut", [], "any", false, false, false, 944) == "EN_COURS"); }));
        // line 945
        yield "                  | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["en_cours"]) || array_key_exists("en_cours", $context) ? $context["en_cours"] : (function () { throw new RuntimeError('Variable "en_cours" does not exist.', 945, $this->source); })()), "html", null, true);
        yield " en cours
                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

   <!-- Scripts -->
    <script src=\"";
        // line 955
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 956
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 957
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
document.addEventListener('DOMContentLoaded', () => {
  const typeEl = document.getElementById('filterType');
  const prioEl = document.getElementById('filterPriorite');
  const sortByEl = document.getElementById('sortBy');
  const sortDirEl = document.getElementById('sortDir');
  const qEl = document.getElementById('q');
  const tbody = document.getElementById('tableBody');

  let timer = null;

  async function loadFiltered() {
    const params = new URLSearchParams({
      type: typeEl.value,
      priorite: prioEl.value,
      sort: sortByEl.value,
      dir: sortDirEl.value,
      q: qEl.value || ''
    });

    // IMPORTANT: ici on utilise la route Symfony (comme toi)
    const url = \"";
        // line 980
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_filter");
        yield "\" + \"?\" + params.toString();
    console.log(\"AJAX =>\", url);

    try {
      const res = await fetch(url, {
        headers: { \"X-Requested-With\": \"XMLHttpRequest\" }
      });

      if (!res.ok) {
        console.error(\"HTTP ERROR:\", res.status, await res.text());
        return;
      }

      const data = await res.json();

      // Injection HTML
      tbody.innerHTML = data.html || \"\";

    } catch (e) {
      console.error(\"FETCH/JSON ERROR:\", e);
    }
  }

  // Events
  [typeEl, prioEl, sortByEl, sortDirEl].forEach(el => {
    el.addEventListener('change', loadFiltered);
  });

  qEl.addEventListener('keyup', () => {
    clearTimeout(timer);
    timer = setTimeout(loadFiltered, 250);
  });

  // Optionnel: charger une fois au démarrage
  // loadFiltered();
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
        return "objectif_sante/index.html.twig";
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
        return array (  1341 => 980,  1315 => 957,  1311 => 956,  1307 => 955,  1293 => 945,  1291 => 944,  1285 => 943,  1278 => 939,  1267 => 930,  1260 => 925,  1258 => 924,  1239 => 907,  1230 => 901,  1224 => 897,  1222 => 896,  1210 => 887,  1152 => 833,  1150 => 832,  1125 => 811,  1123 => 810,  1098 => 789,  1096 => 788,  1072 => 767,  1058 => 755,  1053 => 752,  1049 => 750,  1047 => 749,  1041 => 748,  1036 => 745,  1034 => 744,  1013 => 725,  1007 => 724,  997 => 720,  993 => 719,  988 => 718,  983 => 717,  978 => 716,  955 => 696,  940 => 684,  926 => 674,  924 => 673,  920 => 671,  915 => 668,  911 => 666,  907 => 664,  903 => 662,  901 => 661,  896 => 659,  889 => 658,  887 => 657,  880 => 652,  873 => 649,  867 => 645,  863 => 643,  859 => 641,  857 => 640,  849 => 637,  845 => 635,  838 => 632,  835 => 631,  829 => 628,  824 => 627,  822 => 626,  819 => 625,  817 => 624,  775 => 585,  759 => 572,  735 => 551,  696 => 514,  687 => 508,  684 => 507,  675 => 501,  672 => 500,  670 => 499,  653 => 484,  648 => 481,  644 => 479,  640 => 477,  636 => 475,  634 => 474,  629 => 472,  622 => 471,  620 => 470,  615 => 467,  609 => 465,  606 => 464,  599 => 461,  596 => 460,  590 => 457,  585 => 456,  582 => 455,  580 => 454,  569 => 446,  565 => 445,  560 => 443,  556 => 442,  130 => 19,  126 => 18,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Objectifs de Santé{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Objectifs de Santé</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />
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

      .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
        border: none;
        box-shadow: var(--card-shadow);
      }
      
      .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--card-shadow-hover);
      }
      
      .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: white;
        margin: 0 auto;
      }
      
      .stat-count {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 5px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
      
      .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
      }
      
      .card-1 { background: var(--primary-gradient); }
      .card-2 { background: var(--danger-gradient); }
      .card-3 { background: var(--info-gradient); }
      .card-4 { background: var(--success-gradient); }
      .card-5 { background: var(--health-gradient); }
      
      /* Type badges */
      .type-badge {
        font-size: 0.75rem;
        padding: 5px 12px;
        border-radius: 12px;
        display: inline-block;
        color: white;
        border: none;
        font-weight: 600;
      }
      
      .type-poids { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .type-cardio { background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%); }
      .type-sommeil { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .type-nutrition { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .type-hydratation { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .type-musculation { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .type-autre { background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); color: #495057; }
      
      /* Priority badges */
      .priority-badge {
        font-size: 0.75rem;
        padding: 5px 12px;
        border-radius: 12px;
        display: inline-block;
        color: white;
        border: none;
        font-weight: 600;
      }
      
      .priority-haute { background: var(--danger-gradient); }
      .priority-moyenne { background: var(--warning-gradient); }
      .priority-faible { background: var(--success-gradient); }
      
      /* Status badges */
      .status-badge {
        font-size: 0.75rem;
        padding: 5px 12px;
        border-radius: 12px;
        display: inline-block;
        color: white;
        border: none;
        font-weight: 600;
      }
      
      .status-en-cours { background: var(--info-gradient); }
      .status-termine { background: var(--success-gradient); }
      .status-abandonne { background: linear-gradient(135deg, #838383 0%, #666666 100%); }
      .status-en-pause { background: var(--warning-gradient); }
      
      /* Enhanced Card */
      .card {
        border: none;
        border-radius: 15px;
        box-shadow: var(--card-shadow);
        transition: all 0.3s ease;
      }

      .card:hover {
        box-shadow: var(--card-shadow-hover);
      }

      /* Page Header */
      .page-header {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: var(--card-shadow);
        margin-bottom: 2rem;
      }

      .page-title-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      /* Avatar Styles */
      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary-gradient);
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
      
      .profile-avatar {
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

      .badge-etudiant {
        background: var(--info-gradient);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: var(--primary-gradient);
        color: white;
        border: none;
      }
      
      /* Action Buttons */
      .action-buttons {
        display: flex;
        gap: 5px;
      }
      
      .action-buttons .btn {
        padding: 6px 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
      }

      .action-buttons .btn:hover {
        transform: translateY(-2px);
      }
      
      /* Search Box */
      .search-box {
        max-width: 300px;
      }

      .search-box input {
        border-radius: 10px;
        border: 2px solid #e9ecef;
        transition: all 0.3s ease;
      }

      .search-box input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
      }
      
      /* Table Styles */
      .table-hover tbody tr {
        transition: all 0.3s ease;
      }

      .table-hover tbody tr:hover {
        background-color: rgba(102, 126, 234, 0.05);
        transform: scale(1.01);
      }

      .table thead th {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        color: #495057;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        border: none;
        padding: 1rem;
      }

      .table td {
        vertical-align: middle;
        padding: 1rem;
        border-bottom: 1px solid #f1f3f5;
      }
      
      /* Empty State */
      .empty-state {
        text-align: center;
        padding: 80px 20px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 15px;
      }
      
      .empty-state i {
        font-size: 80px;
        background: var(--health-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
      }

      /* Flash Messages */
      .alert {
        border-radius: 12px;
        border: none;
        box-shadow: var(--card-shadow);
        margin-bottom: 20px;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .alert i {
        font-size: 1.5rem;
      }
      
      /* Progress Bar */
      .progress {
        height: 10px;
        border-radius: 10px;
        background-color: #e9ecef;
        overflow: hidden;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      }
      
      .progress-bar {
        border-radius: 10px;
        transition: width 0.6s ease;
      }

      .progress-bar.bg-health {
        background: var(--health-gradient);
      }
      
      /* Date Styles */
      .date-cell {
        font-size: 0.85rem;
      }
      
      .date-label {
        font-weight: 600;
        color: #495057;
        display: block;
        margin-bottom: 2px;
      }
      
      .date-value {
        color: #6c757d;
        display: block;
      }

      /* User Info Styles */
      .user-info {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .user-info-text {
        display: flex;
        flex-direction: column;
      }

      .user-name {
        font-weight: 600;
        color: #495057;
        font-size: 0.9rem;
      }

      .user-email {
        color: #6c757d;
        font-size: 0.75rem;
      }

      /* Sidebar & Layout */
      .profile-pic {
        display: flex;
        align-items: center;
        padding: 10px 0;
      }
      
      .count-indicator {
        position: relative;
        margin-right: 15px;
      }
      
      .profile-name {
        flex-grow: 1;
      }
      
      .navbar-profile {
        display: flex;
        align-items: center;
        padding: 5px 0;
      }
      
      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }

      /* Target Value Badge */
      .target-value {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 12px;
        background: linear-gradient(135deg, #e9ecef 0%, #f8f9fa 100%);
        border-radius: 10px;
        font-weight: 600;
        color: #495057;
        font-size: 0.85rem;
      }

      /* Responsive */
      @media (max-width: 768px) {
        .stat-card {
          margin-bottom: 1rem;
        }

        .action-buttons {
          flex-direction: column;
        }

        .search-box {
          max-width: 100%;
          margin-bottom: 1rem;
        }
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
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-speedometer\"></i></span>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          
          {% if is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          {% else %}
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_user_profile') }}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-circle\"></i></span>
              <span class=\"menu-title\">Mon Profil</span>
            </a>
          </li>
          {% endif %}
          
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
            <a class=\"nav-link\" href=\"#\">
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un objectif...\" id=\"searchInput\">
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
                      <p class=\"preview-subject mb-1\">Objectif atteint!</p>
                      <p class=\"text-muted ellipsis mb-0\">Félicitations pour votre objectif cardio</p>
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
            {# Flash Messages #}
            {% for label, messages in app.flashes %}
              {% for message in messages %}
                <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }}\"></i>
                  <div>{{ message }}</div>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              {% endfor %}
            {% endfor %}

            <!-- Header -->
            <div class=\"page-header\">
              <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                  <h3 class=\"page-title mb-0 text-dark\">
                    <span class=\"page-title-icon bg-gradient-primary text-dark  me-2\">
                      <i class=\"mdi mdi-heart-pulse\"></i>
                    </span> 
                    Gestion des Objectifs de Santé
                  </h3>
                  <nav aria-label=\"breadcrumb\" class=\"mt-2\">
                    <ol class=\"breadcrumb mb-0\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"mdi mdi-home me-1\"></i>
                        Liste complète des objectifs de santé
                      </li>
                    </ol>
                  </nav>
                  {% if app.user %}
                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté: <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong>
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        {% endif %}
                      </small>
                    </div>
                  {% endif %}
                </div>
              </div>
            </div>
            
            <!-- Statistics -->
            <div class=\"row\">
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">{{ objectif_santes|length }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+12%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-5\">
                          <i class=\"mdi mdi-heart-pulse\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label mt-3\">Total Objectifs</h6>
                  </div>
                </div>
              </div>
              
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set en_cours = objectif_santes|filter(o => o.statut == 'EN_COURS')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ en_cours }}</h3>
                          <p class=\"text-info ms-2 mb-0 font-weight-medium\">Actifs</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-clock-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label mt-3\">En cours</h6>
                  </div>
                </div>
              </div>
              
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                         {% set haute_priorite = objectif_santes|filter(o => o.priorite == 'HAUTE')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ haute_priorite }}</h3>
                          <p class=\"text-danger ms-2 mb-0 font-weight-medium\">Urgent</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-flag\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label mt-3\">Priorité Haute</h6>
                  </div>
                </div>
              </div>
              
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set termines = objectif_santes|filter(o => o.statut == 'ATTEINT')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ termines }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+8%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-check-circle\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label mt-3\">Terminés</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Objectifs Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title mb-0\">
                        <i class=\"mdi mdi-format-list-bulleted me-2\"></i>
                        Liste des Objectifs de Santé
                      </h4>
                      <div class=\"d-flex gap-2 align-items-center flex-wrap\">

  <select id=\"filterType\" class=\"form-select\" style=\"max-width: 200px;\">
    <option value=\"ALL\">Tous les types</option>
    <option value=\"SOMMEIL\">SOMMEIL</option>
    <option value=\"SPORT\">SPORT</option>
    <option value=\"ALIMENTATION\">ALIMENTATION</option>
  </select>

  <select id=\"filterPriorite\" class=\"form-select\" style=\"max-width: 200px;\">
    <option value=\"ALL\">Toutes les priorités</option>
    <option value=\"HAUTE\">HAUTE</option>
    <option value=\"MOYENNE\">MOYENNE</option>
    <option value=\"BASSE\">BASSE</option>
  </select>

  <select id=\"sortBy\" class=\"form-select\" style=\"max-width: 200px;\">
    <option value=\"dateDebut\">Trier par date début</option>
    <option value=\"priorite\">Trier par priorité</option>
  </select>

  <select id=\"sortDir\" class=\"form-select\" style=\"max-width: 160px;\">
    <option value=\"DESC\">DESC</option>
    <option value=\"ASC\">ASC</option>
  </select>

  <input id=\"q\" type=\"text\" class=\"form-control\" placeholder=\"Rechercher titre...\" style=\"max-width: 260px;\">

  <a href=\"{{ path('app_objectif_sante_new') }}\" class=\"btn btn-gradient-primary btn-icon-text\">
    <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
    Nouvel objectif
  </a>

</div>

                    </div>

                    {% if objectif_santes is empty %}
                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-heart-pulse\"></i>
                        <h4 class=\"text-muted mt-3\">Aucun objectif de santé trouvé</h4>
                        <p class=\"text-muted mb-4\">Commencez votre parcours santé en créant votre premier objectif</p>
                        <a href=\"{{ path('app_objectif_sante_new') }}\" class=\"btn btn-gradient-primary btn-lg\">
                          <i class=\"mdi mdi-plus-circle me-2\"></i>
                          Créer mon premier objectif
                        </a>
                      </div>
                    {% else %}
                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"objectifsTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Titre</th>
                              <th>Type</th>
                              <th>Valeur Cible</th>
                              <th>Période</th>
                              <th>Score Moyen</th>
                              <th>Priorité</th>
                              <th>Statut</th>
                              <th>Utilisateur</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody id=\"tableBody\">
  {% include 'objectif_sante/_rows.html.twig' with { objectif_santes: objectif_santes } %}
</tbody>

                        </table>
                      </div>
                    {% endif %}
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
                  <i class=\"mdi mdi-heart-pulse text-danger\"></i>
                  Objectifs de Santé - {{ objectif_santes|length }} objectif{{ objectif_santes|length > 1 ? 's' : '' }}
                  {% set en_cours = objectif_santes|filter(o => o.statut == 'EN_COURS')|length %}
                  | {{ en_cours }} en cours
                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

   <!-- Scripts -->
    <script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('assets/js/misc.js') }}\"></script>
    
    <script>
document.addEventListener('DOMContentLoaded', () => {
  const typeEl = document.getElementById('filterType');
  const prioEl = document.getElementById('filterPriorite');
  const sortByEl = document.getElementById('sortBy');
  const sortDirEl = document.getElementById('sortDir');
  const qEl = document.getElementById('q');
  const tbody = document.getElementById('tableBody');

  let timer = null;

  async function loadFiltered() {
    const params = new URLSearchParams({
      type: typeEl.value,
      priorite: prioEl.value,
      sort: sortByEl.value,
      dir: sortDirEl.value,
      q: qEl.value || ''
    });

    // IMPORTANT: ici on utilise la route Symfony (comme toi)
    const url = \"{{ path('app_objectif_sante_filter') }}\" + \"?\" + params.toString();
    console.log(\"AJAX =>\", url);

    try {
      const res = await fetch(url, {
        headers: { \"X-Requested-With\": \"XMLHttpRequest\" }
      });

      if (!res.ok) {
        console.error(\"HTTP ERROR:\", res.status, await res.text());
        return;
      }

      const data = await res.json();

      // Injection HTML
      tbody.innerHTML = data.html || \"\";

    } catch (e) {
      console.error(\"FETCH/JSON ERROR:\", e);
    }
  }

  // Events
  [typeEl, prioEl, sortByEl, sortDirEl].forEach(el => {
    el.addEventListener('change', loadFiltered);
  });

  qEl.addEventListener('keyup', () => {
    clearTimeout(timer);
    timer = setTimeout(loadFiltered, 250);
  });

  // Optionnel: charger une fois au démarrage
  // loadFiltered();
});
</script>


  </body>
</html>
{% endblock %}
", "objectif_sante/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\objectif_sante\\index.html.twig");
    }
}
