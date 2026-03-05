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

/* objectif_sante/new.html.twig */
class __TwigTemplate_c4a7f729fb6d48003647dac7cb55e891 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_sante/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_sante/new.html.twig"));

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

        yield (((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))) ? ("Modifier l'Objectif de Santé") : ("Créer un Objectif de Santé"));
        
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
    <title>ESPRIT - ";
        // line 11
        yield (((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11))) ? ("Modification") : ("Création"));
        yield " d'Objectif de Santé</title>
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

      /* Enhanced Card Styles */
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

      /* Form Section Headers */
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

      /* Enhanced Form Controls */
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

      .input-group-text {
        background: var(--health-gradient);
        color: white;
        border: none;
        border-radius: 0 10px 10px 0;
        font-weight: 600;
      }

      /* Help Text */
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

      /* Button Styles */
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

      /* Info Cards */
      .info-card {
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 1.5rem;
        background: white;
        transition: all 0.3s ease;
      }

      .info-card:hover {
        border-color: #667eea;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.1);
      }

      .info-card-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #f8f9fa;
      }

      .info-card-header .icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        color: white;
      }

      .info-card-header h6 {
        margin: 0;
        font-weight: 600;
        color: #495057;
      }

      .info-card-list {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .info-card-list li {
        padding: 0.5rem 0;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        color: #6c757d;
        font-size: 0.9rem;
      }

      .info-card-list li i {
        color: #667eea;
        margin-top: 3px;
        font-size: 1.1rem;
      }

      .info-card-list li strong {
        color: #495057;
      }

      /* Page Header Enhancement */
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

      /* Breadcrumb Enhancement */
      .breadcrumb-custom {
        background: transparent;
        padding: 0;
        margin: 1rem 0 0 0;
      }

      .breadcrumb-custom .breadcrumb-item {
        font-size: 0.9rem;
      }

      .breadcrumb-custom .breadcrumb-item a {
        color: #667eea;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .breadcrumb-custom .breadcrumb-item a:hover {
        color: #764ba2;
      }

      .breadcrumb-custom .breadcrumb-item.active {
        color: #6c757d;
      }

      /* Flash Messages */
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

      .alert-custom .alert-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        flex-shrink: 0;
      }

      .alert-custom.alert-success {
        background: linear-gradient(135deg, #d4f4dd 0%, #c3f0e4 100%);
        border-left: 4px solid #43e97b;
      }

      .alert-custom.alert-success .alert-icon {
        background: var(--success-gradient);
        color: white;
      }

      .alert-custom.alert-danger {
        background: linear-gradient(135deg, #ffe0e6 0%, #ffd6e8 100%);
        border-left: 4px solid #f5576c;
      }

      .alert-custom.alert-danger .alert-icon {
        background: var(--danger-gradient);
        color: white;
      }

      /* Progress Bar Enhancement */
      .progress-custom {
        height: 12px;
        border-radius: 10px;
        background: #e9ecef;
        overflow: hidden;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .progress-custom .progress-bar {
        background: var(--health-gradient);
        border-radius: 10px;
        transition: width 0.6s ease;
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

      /* Badge Styles */
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

      /* Form Actions Container */
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

      /* Current Info Display */
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

      /* Status & Priority Badges */
      .status-badge, .priority-badge, .type-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }

      .status-en-cours { background: var(--info-gradient); color: white; }
      .status-termine { background: var(--success-gradient); color: white; }
      .status-abandonne { background: linear-gradient(135deg, #838383 0%, #666666 100%); color: white; }
      .status-en-pause { background: var(--warning-gradient); color: white; }

      .priority-haute { background: var(--danger-gradient); color: white; }
      .priority-moyenne { background: var(--warning-gradient); color: white; }
      .priority-faible { background: var(--success-gradient); color: white; }

      /* Responsive Design */
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

        .card-header-custom {
          flex-direction: column;
          text-align: center;
        }
      }

      /* Sidebar & Navbar */
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

      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }

      /* Target value preview */
      .target-preview {
        background: linear-gradient(135deg, #e9ecef 0%, #f8f9fa 100%);
        border-radius: 10px;
        padding: 1rem;
        margin-top: 1rem;
        border: 2px dashed #dee2e6;
      }

      .target-preview-content {
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .target-preview-icon {
        width: 50px;
        height: 50px;
        background: var(--health-gradient);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 659
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 662
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 663
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
        // line 671
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 671, $this->source); })()), "user", [], "any", false, false, false, 671)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 672
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 672, $this->source); })()), "user", [], "any", false, false, false, 672), "profilePic", [], "any", false, false, false, 672)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 673
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 673, $this->source); })()), "user", [], "any", false, false, false, 673), "profilePic", [], "any", false, false, false, 673))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 674
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 674, $this->source); })()), "user", [], "any", false, false, false, 674), "prenom", [], "any", false, false, false, 674), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 677
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 678
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 678, $this->source); })()), "user", [], "any", false, false, false, 678), "prenom", [], "any", false, false, false, 678))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 678, $this->source); })()), "user", [], "any", false, false, false, 678), "nom", [], "any", false, false, false, 678))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 681
            yield "                  ";
        } else {
            // line 682
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 684
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 687
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 687, $this->source); })()), "user", [], "any", false, false, false, 687)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 688
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 688, $this->source); })()), "user", [], "any", false, false, false, 688), "prenom", [], "any", false, false, false, 688), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 688, $this->source); })()), "user", [], "any", false, false, false, 688), "nom", [], "any", false, false, false, 688), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 689
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 689, $this->source); })()), "user", [], "any", false, false, false, 689), "email", [], "any", false, false, false, 689), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 691
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 691, $this->source); })()), "user", [], "any", false, false, false, 691), "roles", [], "any", false, false, false, 691))) {
                // line 692
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 694
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 696
            yield "                    </div>
                  ";
        } else {
            // line 698
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 701
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
        // line 716
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 717
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 718
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          ";
        } else {
            // line 724
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 725
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-circle\"></i></span>
              <span class=\"menu-title\">Mon Profil</span>
            </a>
          </li>
          ";
        }
        // line 731
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
        // line 768
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
        // line 789
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
        // line 802
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un objectif...\">
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
                      <p class=\"text-muted ellipsis mb-0\">Félicitations</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 841
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 841, $this->source); })()), "user", [], "any", false, false, false, 841)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 842
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 843
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 843, $this->source); })()), "user", [], "any", false, false, false, 843), "profilePic", [], "any", false, false, false, 843)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 844
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 844, $this->source); })()), "user", [], "any", false, false, false, 844), "profilePic", [], "any", false, false, false, 844))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 845
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 845, $this->source); })()), "user", [], "any", false, false, false, 845), "prenom", [], "any", false, false, false, 845), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 848
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 849
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 849, $this->source); })()), "user", [], "any", false, false, false, 849), "prenom", [], "any", false, false, false, 849))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 849, $this->source); })()), "user", [], "any", false, false, false, 849), "nom", [], "any", false, false, false, 849))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 852
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 854
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 854, $this->source); })()), "user", [], "any", false, false, false, 854), "prenom", [], "any", false, false, false, 854), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 854, $this->source); })()), "user", [], "any", false, false, false, 854), "nom", [], "any", false, false, false, 854), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 857
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 857, $this->source); })()), "user", [], "any", false, false, false, 857), "roles", [], "any", false, false, false, 857))) {
                // line 858
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 860
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 862
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 866
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 869
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 874
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 874, $this->source); })()), "user", [], "any", false, false, false, 874)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 875
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 875, $this->source); })()), "user", [], "any", false, false, false, 875), "prenom", [], "any", false, false, false, 875), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 875, $this->source); })()), "user", [], "any", false, false, false, 875), "nom", [], "any", false, false, false, 875), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 876
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 876, $this->source); })()), "user", [], "any", false, false, false, 876), "email", [], "any", false, false, false, 876), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 878
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 878, $this->source); })()), "user", [], "any", false, false, false, 878), "roles", [], "any", false, false, false, 878))) {
                // line 879
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 881
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 883
            yield "                      </small>
                    ";
        } else {
            // line 885
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 888
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 890
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 890, $this->source); })()), "user", [], "any", false, false, false, 890)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 891
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 891, $this->source); })()), "user", [], "any", false, false, false, 891), "id", [], "any", false, false, false, 891)]), "html", null, true);
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
            // line 901
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 901, $this->source); })()), "user", [], "any", false, false, false, 901), "id", [], "any", false, false, false, 901)]), "html", null, true);
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
        // line 913
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
                <!-- Flash Messages -->
                ";
        // line 933
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 933, $this->source); })()), "flashes", [], "any", false, false, false, 933));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 934
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 935
                yield "                        <div class=\"alert-custom alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-";
                // line 937
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                ";
                // line 940
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
            // line 945
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 946
        yield "
                <!-- Enhanced Page Header -->
                <div class=\"page-header-enhanced\">
                    <div class=\"title-section\">
                        <div class=\"title-icon\">
                            <i class=\"mdi mdi-";
        // line 951
        yield (((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 951, $this->source); })()), "id", [], "any", false, false, false, 951))) ? ("pencil-box") : ("plus-circle"));
        yield "\"></i>
                        </div>
                        <div>
                            <h3>";
        // line 954
        yield (((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 954, $this->source); })()), "id", [], "any", false, false, false, 954))) ? ("Modifier l'Objectif de Santé") : ("Créer un Objectif de Santé"));
        yield "</h3>
                            <p class=\"subtitle\">
                                ";
        // line 956
        if ((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 956, $this->source); })()), "id", [], "any", false, false, false, 956))) {
            // line 957
            yield "                                    Mettez à jour les informations de l'objectif \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 957, $this->source); })()), "titre", [], "any", false, false, false, 957), "html", null, true);
            yield "\"
                                ";
        } else {
            // line 959
            yield "                                    Définissez votre nouvel objectif de santé et bien-être
                                ";
        }
        // line 961
        yield "                            </p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 967
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
                                    <i class=\"mdi mdi-heart-pulse me-1\"></i>
                                    Liste des Objectifs
                                </a>
                            </li>
                            ";
        // line 972
        if ((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 972, $this->source); })()), "id", [], "any", false, false, false, 972))) {
            // line 973
            yield "                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
            // line 974
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 974, $this->source); })()), "id", [], "any", false, false, false, 974)]), "html", null, true);
            yield "\">
                                        <i class=\"mdi mdi-eye me-1\"></i>
                                        Détails
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    Modification
                                </li>
                            ";
        } else {
            // line 983
            yield "                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    Nouvel Objectif
                                </li>
                            ";
        }
        // line 987
        yield "                        </ol>
                    </nav>
                </div>

                <!-- Current Objective Info (Edit Mode Only) -->
                ";
        // line 992
        if ((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 992, $this->source); })()), "id", [], "any", false, false, false, 992))) {
            // line 993
            yield "                <div class=\"current-info-card\">
                    <h5>
                        <i class=\"mdi mdi-information\"></i>
                        Informations actuelles de l'objectif
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Type actuel:</span>
                                <span class=\"info-value\">";
            // line 1002
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1002, $this->source); })()), "type", [], "any", false, false, false, 1002), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Statut:</span>
                                <span class=\"info-value\">
                                    ";
            // line 1007
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1007, $this->source); })()), "statut", [], "any", false, false, false, 1007)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1008
                yield "                                        <span class=\"status-badge status-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1008, $this->source); })()), "statut", [], "any", false, false, false, 1008)), [" " => "-"]), "html", null, true);
                yield "\">
                                            <i class=\"mdi mdi-";
                // line 1009
                yield (((CoreExtension::getAttribute($this->env, $this->source,                 // line 1010
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1010, $this->source); })()), "statut", [], "any", false, false, false, 1010) == "En cours")) ? ("progress-clock") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 1011
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1011, $this->source); })()), "statut", [], "any", false, false, false, 1011) == "Terminé")) ? ("check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 1012
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1012, $this->source); })()), "statut", [], "any", false, false, false, 1012) == "Abandonné")) ? ("close-circle") : ("pause-circle"))))));
                // line 1013
                yield "\"></i>
                                            ";
                // line 1014
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1014, $this->source); })()), "statut", [], "any", false, false, false, 1014), "html", null, true);
                yield "
                                        </span>
                                    ";
            }
            // line 1017
            yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Score Moyen:</span>
                                <span class=\"info-value\">";
            // line 1021
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1021, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 1021), "html", null, true);
            yield "/100</span>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Priorité:</span>
                                <span class=\"info-value\">
                                    ";
            // line 1028
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1028, $this->source); })()), "priorite", [], "any", false, false, false, 1028)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1029
                yield "                                        <span class=\"priority-badge priority-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1029, $this->source); })()), "priorite", [], "any", false, false, false, 1029)), "html", null, true);
                yield "\">
                                            <i class=\"mdi mdi-flag\"></i>
                                            ";
                // line 1031
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1031, $this->source); })()), "priorite", [], "any", false, false, false, 1031), "html", null, true);
                yield "
                                        </span>
                                    ";
            }
            // line 1034
            yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Valeur cible:</span>
                                <span class=\"info-value\">";
            // line 1038
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1038, $this->source); })()), "valeurCible", [], "any", false, false, false, 1038)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1038, $this->source); })()), "valeurCible", [], "any", false, false, false, 1038), "html", null, true)) : ("Non définie"));
            yield "</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Utilisateur assigné:</span>
                                <span class=\"info-value\">
                                    ";
            // line 1043
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1043, $this->source); })()), "user", [], "any", false, false, false, 1043)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1044
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1044, $this->source); })()), "user", [], "any", false, false, false, 1044), "nom", [], "any", false, false, false, 1044), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1044, $this->source); })()), "user", [], "any", false, false, false, 1044), "email", [], "any", false, false, false, 1044), "html", null, true);
                yield ")
                                    ";
            } else {
                // line 1046
                yield "                                        <em class=\"text-muted\">Non assigné</em>
                                    ";
            }
            // line 1048
            yield "                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 1054
        yield "
                <!-- Main Form Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header-custom\">
                                <div class=\"icon\">
                                    <i class=\"mdi mdi-file-document-edit\"></i>
                                </div>
                                <h4>Formulaire ";
        // line 1063
        yield (((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1063, $this->source); })()), "id", [], "any", false, false, false, 1063))) ? ("de modification") : ("de création"));
        yield "</h4>
                            </div>
                            <div class=\"card-body p-4\">
                                ";
        // line 1066
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1066, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample", "id" => "objectif-form"]]);
        yield "
                                
                                <!-- Section 1: Informations Générales -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-information\"></i>
                                        </span>
                                        Informations Générales
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-format-title label-icon\"></i>
                                                Titre de l'objectif
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1086
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1086, $this->source); })()), "titre", [], "any", false, false, false, 1086), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Perdre 5 kg en 3 mois"]]);
        // line 1089
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Donnez un titre clair et motivant à votre objectif</span>
                                            </div>
                                            ";
        // line 1094
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1094, $this->source); })()), "titre", [], "any", false, false, false, 1094), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-tag label-icon\"></i>
                                                Type d'objectif
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1107, $this->source); })()), "type", [], "any", false, false, false, 1107), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1109
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Catégorie de votre objectif de santé</span>
                                            </div>
                                            ";
        // line 1114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1114, $this->source); })()), "type", [], "any", false, false, false, 1114), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-target label-icon\"></i>
                                                Valeur Cible
                                            </label>
                                            <div style=\"display:flex;align-items:center;gap:8px;\">
                                              ";
        // line 1125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1125, $this->source); })()), "valeurCible", [], "any", false, false, false, 1125), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 8 (heures), 30 (minutes), 3 (repas)..."]]);
        // line 1128
        yield "
                                              <span id=\"valeurCible-unit\" style=\"font-weight:bold;min-width:80px;\">";
        // line 1129
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1129), "data", [], "any", false, true, false, 1129), "type", [], "any", true, true, false, 1129)) {
            // line 1130
            yield "                                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1130, $this->source); })()), "vars", [], "any", false, false, false, 1130), "data", [], "any", false, false, false, 1130), "type", [], "any", false, false, false, 1130) == "SOMMEIL")) {
                yield "heures";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1130, $this->source); })()), "vars", [], "any", false, false, false, 1130), "data", [], "any", false, false, false, 1130), "type", [], "any", false, false, false, 1130) == "SPORT")) {
                yield "minutes";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1130, $this->source); })()), "vars", [], "any", false, false, false, 1130), "data", [], "any", false, false, false, 1130), "type", [], "any", false, false, false, 1130) == "ALIMENTATION")) {
                yield "repas";
            } else {
            }
            // line 1131
            yield "                                              ";
        }
        yield "</span>
                                            </div>
                                            <div class=\"form-help-text\">
                                              <i class=\"mdi mdi-information-outline\"></i>
                                              <span id=\"valeurCible-help\">
                                                ";
        // line 1136
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1136), "data", [], "any", false, true, false, 1136), "type", [], "any", true, true, false, 1136) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1136, $this->source); })()), "vars", [], "any", false, false, false, 1136), "data", [], "any", false, false, false, 1136), "type", [], "any", false, false, false, 1136) == "SOMMEIL"))) {
            // line 1137
            yield "                                                  Heures de sommeil par nuit (1-16 heures)
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1138
($context["form"] ?? null), "vars", [], "any", false, true, false, 1138), "data", [], "any", false, true, false, 1138), "type", [], "any", true, true, false, 1138) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1138, $this->source); })()), "vars", [], "any", false, false, false, 1138), "data", [], "any", false, false, false, 1138), "type", [], "any", false, false, false, 1138) == "SPORT"))) {
            // line 1139
            yield "                                                  Minutes d'activité par jour (0-300 minutes)
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1140
($context["form"] ?? null), "vars", [], "any", false, true, false, 1140), "data", [], "any", false, true, false, 1140), "type", [], "any", true, true, false, 1140) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1140, $this->source); })()), "vars", [], "any", false, false, false, 1140), "data", [], "any", false, false, false, 1140), "type", [], "any", false, false, false, 1140) == "ALIMENTATION"))) {
            // line 1141
            yield "                                                  Nombre de repas sains par jour (1-6 repas)
                                                ";
        } else {
            // line 1143
            yield "                                                  La valeur que vous souhaitez atteindre
                                                ";
        }
        // line 1145
        yield "                                              </span>
                                            </div>
                                            <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                              const typeSelect = document.getElementById('objectif_sante_type');
                                              const targetHelp = document.getElementById('valeurCible-help');
                                              const targetInput = document.getElementById('objectif_sante_valeurCible');
                                              const unitSpan = document.getElementById('valeurCible-unit');
                                              if (!typeSelect || !targetHelp || !targetInput) return;
                                              const map = {
                                                'SOMMEIL': {text: 'Heures de sommeil par nuit', min: 1, max: 16, unit: 'heures'},
                                                'SPORT': {text: 'Minutes d\\'activité par jour', min: 0, max: 300, unit: 'minutes'},
                                                'ALIMENTATION': {text: 'Nombre de repas sains par jour', min: 1, max: 6, unit: 'repas'},
                                                '': {text: 'La valeur que vous souhaitez atteindre'}
                                              };
                                              function updateHelp() {
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
                                              }
                                              typeSelect.addEventListener('change', updateHelp);
                                              targetInput.addEventListener('focus', updateHelp);
                                              if (document.readyState === 'complete') updateHelp(); else window.addEventListener('load', updateHelp);
                                            });
                                            </script>
                                            <div id=\"target-preview\"></div>
                                            ";
        // line 1181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1181, $this->source); })()), "valeurCible", [], "any", false, false, false, 1181), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 2: Planning & Échéances -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-calendar-clock\"></i>
                                        </span>
                                        Planning & Échéances
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-calendar-start label-icon\"></i>
                                                Date de début
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1204, $this->source); })()), "dateDebut", [], "any", false, false, false, 1204), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1206
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Date à laquelle vous commencez cet objectif</span>
                                            </div>
                                            ";
        // line 1211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1211, $this->source); })()), "dateDebut", [], "any", false, false, false, 1211), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-calendar-end label-icon\"></i>
                                                Date de fin
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1222, $this->source); })()), "dateFin", [], "any", false, false, false, 1222), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1224
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Date limite pour atteindre votre objectif</span>
                                            </div>
                                            <div id=\"duration-display\" class=\"mt-2\"></div>
                                            ";
        // line 1230
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1230, $this->source); })()), "dateFin", [], "any", false, false, false, 1230), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 3: État & Avancement -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-chart-line\"></i>
                                        </span>
                                        État & Avancement
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-progress-clock label-icon\"></i>
                                                Statut
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1253, $this->source); })()), "statut", [], "any", false, false, false, 1253), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1255
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>État actuel de votre objectif</span>
                                            </div>
                                            ";
        // line 1260
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1260, $this->source); })()), "statut", [], "any", false, false, false, 1260), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-flag label-icon\"></i>
                                                Priorité
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1271
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1271, $this->source); })()), "priorite", [], "any", false, false, false, 1271), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1273
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Niveau d'importance de cet objectif</span>
                                            </div>
                                            ";
        // line 1278
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1278, $this->source); })()), "priorite", [], "any", false, false, false, 1278), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- Section 4: Attribution -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-account\"></i>
                                        </span>
                                        Attribution
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-account-circle label-icon\"></i>
                                                Utilisateur assigné
                                            </label>
                                            ";
        // line 1301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1301, $this->source); })()), "user", [], "any", false, false, false, 1301), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1303
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Assignez cet objectif à un utilisateur spécifique (optionnel)</span>
                                            </div>
                                            ";
        // line 1308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1308, $this->source); })()), "user", [], "any", false, false, false, 1308), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    ";
        // line 1315
        if ((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1315, $this->source); })()), "id", [], "any", false, false, false, 1315))) {
            // line 1316
            yield "                                    <div class=\"form-actions-left\">
                                        <form method=\"post\" action=\"";
            // line 1317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1317, $this->source); })()), "id", [], "any", false, false, false, 1317)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ? Cette action est irréversible.');\" style=\"display: inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 1318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1318, $this->source); })()), "id", [], "any", false, false, false, 1318))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn-custom-danger\">
                                                <i class=\"mdi mdi-delete\"></i>
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                    ";
        } else {
            // line 1326
            yield "                                    <div class=\"form-actions-left\"></div>
                                    ";
        }
        // line 1328
        yield "                                    <div class=\"form-actions-right\">
                                        <a href=\"";
        // line 1329
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\" class=\"btn-custom-secondary\">
                                            <i class=\"mdi mdi-arrow-left\"></i>
                                            Annuler
                                        </a>
                                        <button type=\"submit\" class=\"btn-custom-primary\">
                                            <i class=\"mdi mdi-content-save\"></i>
                                            ";
        // line 1335
        yield (((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1335, $this->source); })()), "id", [], "any", false, false, false, 1335))) ? ("Enregistrer les modifications") : ("Créer l'objectif"));
        yield "
                                        </button>
                                    </div>
                                </div>
                                
                                ";
        // line 1340
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1340, $this->source); })()), 'form_end');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Info Cards -->
                <div class=\"row mt-4\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--danger-gradient);\">
                                    <i class=\"mdi mdi-alert-circle\"></i>
                                </div>
                                <h6>Points importants</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Objectif SMART</strong> : Spécifique, Mesurable, Atteignable, Réaliste, Temporel</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Valeur cible</strong> : Définissez une cible précise et mesurable</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Score Moyen</strong> : Suivi automatiquement par vos entrées</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Dates réalistes</strong> : Donnez-vous le temps nécessaire</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--health-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils santé</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Commencez par des objectifs modestes et augmentez progressivement</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Suivez vos progrès quotidiennement pour rester motivé</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Célébrez chaque petite victoire sur votre parcours</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>N'hésitez pas à ajuster vos objectifs selon vos besoins</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                        © ";
        // line 1412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        <i class=\"mdi mdi-heart-pulse text-danger\"></i>
                        ";
        // line 1416
        yield (((array_key_exists("objectif_sante", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1416, $this->source); })()), "id", [], "any", false, false, false, 1416))) ? ("Modification") : ("Création"));
        yield " d'objectif de santé
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for form enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Target value preview
        const valeurCibleInput = document.querySelector('#objectif_sante_valeurCible');
        const targetPreview = document.getElementById('target-preview');
        
        if (valeurCibleInput && targetPreview) {
            function updateTargetPreview() {
                const value = valeurCibleInput.value;
                if (value) {
                    targetPreview.innerHTML = `
                        <div class=\"target-preview mt-2\">
                            <div class=\"target-preview-content\">
                                <div class=\"target-preview-icon\">
                                    <i class=\"mdi mdi-target\"></i>
                                </div>
                                <div>
                                    <strong>Cible définie:</strong> \${value}
                                    <br>
                                    <small class=\"text-muted\">Votre objectif à atteindre</small>
                                </div>
                            </div>
                        </div>
                    `;
                } else {
                    targetPreview.innerHTML = '';
                }
            }
            
            valeurCibleInput.addEventListener('input', updateTargetPreview);
            updateTargetPreview(); // Initial update
        }

        // Duration calculator
        const dateDebutInput = document.querySelector('#objectif_sante_dateDebut');
        const dateFinInput = document.querySelector('#objectif_sante_dateFin');
        const durationDisplay = document.getElementById('duration-display');
        
        if (dateDebutInput && dateFinInput && durationDisplay) {
            function calculateDuration() {
                if (dateDebutInput.value && dateFinInput.value) {
                    const debut = new Date(dateDebutInput.value);
                    const fin = new Date(dateFinInput.value);
                    const diff = fin - debut;
                    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    
                    if (days > 0) {
                        const weeks = Math.floor(days / 7);
                        const months = Math.floor(days / 30);
                        
                        let display = `<div class=\"alert alert-info p-2 mt-2 mb-0\">
                            <small>
                                <i class=\"mdi mdi-calendar-range\"></i>
                                <strong>Durée totale:</strong> \${days} jour\${days > 1 ? 's' : ''}`;
                        
                        if (weeks > 0) {
                            display += ` (≈ \${weeks} semaine\${weeks > 1 ? 's' : ''})`;
                        }
                        if (months > 0) {
                            display += ` (≈ \${months} mois)`;
                        }
                        
                        display += `</small></div>`;
                        durationDisplay.innerHTML = display;
                    } else {
                        durationDisplay.innerHTML = `<div class=\"alert alert-warning p-2 mt-2 mb-0\">
                            <small><i class=\"mdi mdi-alert\"></i> La date de fin doit être après la date de début</small>
                        </div>`;
                    }
                } else {
                    durationDisplay.innerHTML = '';
                }
            }
            
            dateDebutInput.addEventListener('change', calculateDuration);
            dateFinInput.addEventListener('change', calculateDuration);
            calculateDuration(); // Initial update
        }
        
        // Form validation
        const form = document.getElementById('objectif-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                
                // Validate dates
                if (dateDebutInput && dateFinInput && dateDebutInput.value && dateFinInput.value) {
                    const debut = new Date(dateDebutInput.value);
                    const fin = new Date(dateFinInput.value);
                    
                    if (debut > fin) {
                        alert('⚠️ La date de début ne peut pas être après la date de fin !');
                        dateDebutInput.classList.add('is-invalid');
                        dateFinInput.classList.add('is-invalid');
                        isValid = false;
                    }
                }

                
                if (!isValid) {
                    e.preventDefault();
                    
                    // Show error alert
                    const alertHtml = `
                        <div class=\"alert-custom alert-danger mb-4\" style=\"animation: slideInDown 0.3s ease;\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-alert-circle\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <strong>Erreur de validation</strong><br>
                                Veuillez corriger les erreurs dans le formulaire avant de soumettre.
                            </div>
                        </div>
                    `;
                    
                    const contentWrapper = document.querySelector('.content-wrapper');
                    contentWrapper.insertAdjacentHTML('afterbegin', alertHtml);
                    
                    // Scroll to top
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    
                    // Remove alert after 5 seconds
                    setTimeout(() => {
                        const alert = contentWrapper.querySelector('.alert-custom');
                        if (alert) {
                            alert.style.animation = 'fadeOut 0.3s ease';
                            setTimeout(() => alert.remove(), 300);
                        }
                    }, 5000);
                }
            });
        }
        
        // Auto-hide flash messages
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-custom');
            alerts.forEach(alert => {
                alert.style.animation = 'fadeOut 0.5s ease';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
        
        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInDown {
                from {
                    transform: translateY(-100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
            
            @keyframes fadeOut {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                }
            }
            
            .is-invalid {
                border-color: #f5576c !important;
                animation: shake 0.3s ease;
            }
            
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                75% { transform: translateX(10px); }
            }
        `;
        document.head.appendChild(style);
    });
</script>
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
        return "objectif_sante/new.html.twig";
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
        return array (  1881 => 1416,  1874 => 1412,  1799 => 1340,  1791 => 1335,  1782 => 1329,  1779 => 1328,  1775 => 1326,  1764 => 1318,  1760 => 1317,  1757 => 1316,  1755 => 1315,  1745 => 1308,  1738 => 1303,  1736 => 1301,  1710 => 1278,  1703 => 1273,  1701 => 1271,  1687 => 1260,  1680 => 1255,  1678 => 1253,  1652 => 1230,  1644 => 1224,  1642 => 1222,  1628 => 1211,  1621 => 1206,  1619 => 1204,  1593 => 1181,  1555 => 1145,  1551 => 1143,  1547 => 1141,  1545 => 1140,  1542 => 1139,  1540 => 1138,  1537 => 1137,  1535 => 1136,  1526 => 1131,  1516 => 1130,  1514 => 1129,  1511 => 1128,  1509 => 1125,  1495 => 1114,  1488 => 1109,  1486 => 1107,  1470 => 1094,  1463 => 1089,  1461 => 1086,  1438 => 1066,  1432 => 1063,  1421 => 1054,  1413 => 1048,  1409 => 1046,  1401 => 1044,  1399 => 1043,  1391 => 1038,  1385 => 1034,  1379 => 1031,  1373 => 1029,  1371 => 1028,  1361 => 1021,  1355 => 1017,  1349 => 1014,  1346 => 1013,  1344 => 1012,  1343 => 1011,  1342 => 1010,  1341 => 1009,  1336 => 1008,  1334 => 1007,  1326 => 1002,  1315 => 993,  1313 => 992,  1306 => 987,  1300 => 983,  1288 => 974,  1285 => 973,  1283 => 972,  1275 => 967,  1267 => 961,  1263 => 959,  1257 => 957,  1255 => 956,  1250 => 954,  1244 => 951,  1237 => 946,  1231 => 945,  1220 => 940,  1214 => 937,  1208 => 935,  1203 => 934,  1199 => 933,  1175 => 913,  1160 => 901,  1146 => 891,  1144 => 890,  1140 => 888,  1135 => 885,  1131 => 883,  1127 => 881,  1123 => 879,  1121 => 878,  1116 => 876,  1109 => 875,  1107 => 874,  1100 => 869,  1093 => 866,  1087 => 862,  1083 => 860,  1079 => 858,  1077 => 857,  1069 => 854,  1065 => 852,  1058 => 849,  1055 => 848,  1049 => 845,  1044 => 844,  1042 => 843,  1039 => 842,  1037 => 841,  995 => 802,  979 => 789,  955 => 768,  916 => 731,  907 => 725,  904 => 724,  895 => 718,  892 => 717,  890 => 716,  873 => 701,  868 => 698,  864 => 696,  860 => 694,  856 => 692,  854 => 691,  849 => 689,  842 => 688,  840 => 687,  835 => 684,  829 => 682,  826 => 681,  819 => 678,  816 => 677,  810 => 674,  805 => 673,  802 => 672,  800 => 671,  789 => 663,  785 => 662,  780 => 660,  776 => 659,  133 => 19,  129 => 18,  124 => 16,  120 => 15,  116 => 14,  112 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ objectif_sante is defined and objectif_sante.id ? 'Modifier l\\'Objectif de Santé' : 'Créer un Objectif de Santé' }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - {{ objectif_sante is defined and objectif_sante.id ? 'Modification' : 'Création' }} d'Objectif de Santé</title>
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

      /* Enhanced Card Styles */
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

      /* Form Section Headers */
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

      /* Enhanced Form Controls */
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

      .input-group-text {
        background: var(--health-gradient);
        color: white;
        border: none;
        border-radius: 0 10px 10px 0;
        font-weight: 600;
      }

      /* Help Text */
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

      /* Button Styles */
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

      /* Info Cards */
      .info-card {
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 1.5rem;
        background: white;
        transition: all 0.3s ease;
      }

      .info-card:hover {
        border-color: #667eea;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.1);
      }

      .info-card-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #f8f9fa;
      }

      .info-card-header .icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        color: white;
      }

      .info-card-header h6 {
        margin: 0;
        font-weight: 600;
        color: #495057;
      }

      .info-card-list {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .info-card-list li {
        padding: 0.5rem 0;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        color: #6c757d;
        font-size: 0.9rem;
      }

      .info-card-list li i {
        color: #667eea;
        margin-top: 3px;
        font-size: 1.1rem;
      }

      .info-card-list li strong {
        color: #495057;
      }

      /* Page Header Enhancement */
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

      /* Breadcrumb Enhancement */
      .breadcrumb-custom {
        background: transparent;
        padding: 0;
        margin: 1rem 0 0 0;
      }

      .breadcrumb-custom .breadcrumb-item {
        font-size: 0.9rem;
      }

      .breadcrumb-custom .breadcrumb-item a {
        color: #667eea;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .breadcrumb-custom .breadcrumb-item a:hover {
        color: #764ba2;
      }

      .breadcrumb-custom .breadcrumb-item.active {
        color: #6c757d;
      }

      /* Flash Messages */
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

      .alert-custom .alert-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        flex-shrink: 0;
      }

      .alert-custom.alert-success {
        background: linear-gradient(135deg, #d4f4dd 0%, #c3f0e4 100%);
        border-left: 4px solid #43e97b;
      }

      .alert-custom.alert-success .alert-icon {
        background: var(--success-gradient);
        color: white;
      }

      .alert-custom.alert-danger {
        background: linear-gradient(135deg, #ffe0e6 0%, #ffd6e8 100%);
        border-left: 4px solid #f5576c;
      }

      .alert-custom.alert-danger .alert-icon {
        background: var(--danger-gradient);
        color: white;
      }

      /* Progress Bar Enhancement */
      .progress-custom {
        height: 12px;
        border-radius: 10px;
        background: #e9ecef;
        overflow: hidden;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .progress-custom .progress-bar {
        background: var(--health-gradient);
        border-radius: 10px;
        transition: width 0.6s ease;
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

      /* Badge Styles */
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

      /* Form Actions Container */
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

      /* Current Info Display */
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

      /* Status & Priority Badges */
      .status-badge, .priority-badge, .type-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }

      .status-en-cours { background: var(--info-gradient); color: white; }
      .status-termine { background: var(--success-gradient); color: white; }
      .status-abandonne { background: linear-gradient(135deg, #838383 0%, #666666 100%); color: white; }
      .status-en-pause { background: var(--warning-gradient); color: white; }

      .priority-haute { background: var(--danger-gradient); color: white; }
      .priority-moyenne { background: var(--warning-gradient); color: white; }
      .priority-faible { background: var(--success-gradient); color: white; }

      /* Responsive Design */
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

        .card-header-custom {
          flex-direction: column;
          text-align: center;
        }
      }

      /* Sidebar & Navbar */
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

      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }

      /* Target value preview */
      .target-preview {
        background: linear-gradient(135deg, #e9ecef 0%, #f8f9fa 100%);
        border-radius: 10px;
        padding: 1rem;
        margin-top: 1rem;
        border: 2px dashed #dee2e6;
      }

      .target-preview-content {
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .target-preview-icon {
        width: 50px;
        height: 50px;
        background: var(--health-gradient);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un objectif...\">
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
                      <p class=\"text-muted ellipsis mb-0\">Félicitations</p>
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
                            <i class=\"mdi mdi-{{ objectif_sante is defined and objectif_sante.id ? 'pencil-box' : 'plus-circle' }}\"></i>
                        </div>
                        <div>
                            <h3>{{ objectif_sante is defined and objectif_sante.id ? 'Modifier l\\'Objectif de Santé' : 'Créer un Objectif de Santé' }}</h3>
                            <p class=\"subtitle\">
                                {% if objectif_sante is defined and objectif_sante.id %}
                                    Mettez à jour les informations de l'objectif \"{{ objectif_sante.titre }}\"
                                {% else %}
                                    Définissez votre nouvel objectif de santé et bien-être
                                {% endif %}
                            </p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_objectif_sante_index') }}\">
                                    <i class=\"mdi mdi-heart-pulse me-1\"></i>
                                    Liste des Objectifs
                                </a>
                            </li>
                            {% if objectif_sante is defined and objectif_sante.id %}
                                <li class=\"breadcrumb-item\">
                                    <a href=\"{{ path('app_objectif_sante_show', {'id': objectif_sante.id}) }}\">
                                        <i class=\"mdi mdi-eye me-1\"></i>
                                        Détails
                                    </a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    Modification
                                </li>
                            {% else %}
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                    Nouvel Objectif
                                </li>
                            {% endif %}
                        </ol>
                    </nav>
                </div>

                <!-- Current Objective Info (Edit Mode Only) -->
                {% if objectif_sante is defined and objectif_sante.id %}
                <div class=\"current-info-card\">
                    <h5>
                        <i class=\"mdi mdi-information\"></i>
                        Informations actuelles de l'objectif
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Type actuel:</span>
                                <span class=\"info-value\">{{ objectif_sante.type }}</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Statut:</span>
                                <span class=\"info-value\">
                                    {% if objectif_sante.statut %}
                                        <span class=\"status-badge status-{{ objectif_sante.statut|lower|replace({' ': '-'}) }}\">
                                            <i class=\"mdi mdi-{{ 
                                                objectif_sante.statut == 'En cours' ? 'progress-clock' : 
                                                objectif_sante.statut == 'Terminé' ? 'check-circle' : 
                                                objectif_sante.statut == 'Abandonné' ? 'close-circle' : 
                                                'pause-circle' }}\"></i>
                                            {{ objectif_sante.statut }}
                                        </span>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Score Moyen:</span>
                                <span class=\"info-value\">{{ objectif_sante.scoreMoyen }}/100</span>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Priorité:</span>
                                <span class=\"info-value\">
                                    {% if objectif_sante.priorite %}
                                        <span class=\"priority-badge priority-{{ objectif_sante.priorite|lower }}\">
                                            <i class=\"mdi mdi-flag\"></i>
                                            {{ objectif_sante.priorite }}
                                        </span>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Valeur cible:</span>
                                <span class=\"info-value\">{{ objectif_sante.valeurCible ?: 'Non définie' }}</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Utilisateur assigné:</span>
                                <span class=\"info-value\">
                                    {% if objectif_sante.user %}
                                        {{ objectif_sante.user.nom }} ({{ objectif_sante.user.email }})
                                    {% else %}
                                        <em class=\"text-muted\">Non assigné</em>
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}

                <!-- Main Form Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header-custom\">
                                <div class=\"icon\">
                                    <i class=\"mdi mdi-file-document-edit\"></i>
                                </div>
                                <h4>Formulaire {{ objectif_sante is defined and objectif_sante.id ? 'de modification' : 'de création' }}</h4>
                            </div>
                            <div class=\"card-body p-4\">
                                {{ form_start(form, {'attr': {'class': 'form-sample', 'id': 'objectif-form'}}) }}
                                
                                <!-- Section 1: Informations Générales -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-information\"></i>
                                        </span>
                                        Informations Générales
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-format-title label-icon\"></i>
                                                Titre de l'objectif
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            {{ form_widget(form.titre, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: Perdre 5 kg en 3 mois'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Donnez un titre clair et motivant à votre objectif</span>
                                            </div>
                                            {{ form_errors(form.titre) }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-tag label-icon\"></i>
                                                Type d'objectif
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            {{ form_widget(form.type, {'attr': {
                                                'class': 'form-select'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Catégorie de votre objectif de santé</span>
                                            </div>
                                            {{ form_errors(form.type) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-target label-icon\"></i>
                                                Valeur Cible
                                            </label>
                                            <div style=\"display:flex;align-items:center;gap:8px;\">
                                              {{ form_widget(form.valeurCible, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: 8 (heures), 30 (minutes), 3 (repas)...'
                                              }}) }}
                                              <span id=\"valeurCible-unit\" style=\"font-weight:bold;min-width:80px;\">{% if form.vars.data.type is defined %}
                                                {% if form.vars.data.type == 'SOMMEIL' %}heures{% elseif form.vars.data.type == 'SPORT' %}minutes{% elseif form.vars.data.type == 'ALIMENTATION' %}repas{% else %}{% endif %}
                                              {% endif %}</span>
                                            </div>
                                            <div class=\"form-help-text\">
                                              <i class=\"mdi mdi-information-outline\"></i>
                                              <span id=\"valeurCible-help\">
                                                {% if form.vars.data.type is defined and form.vars.data.type == 'SOMMEIL' %}
                                                  Heures de sommeil par nuit (1-16 heures)
                                                {% elseif form.vars.data.type is defined and form.vars.data.type == 'SPORT' %}
                                                  Minutes d'activité par jour (0-300 minutes)
                                                {% elseif form.vars.data.type is defined and form.vars.data.type == 'ALIMENTATION' %}
                                                  Nombre de repas sains par jour (1-6 repas)
                                                {% else %}
                                                  La valeur que vous souhaitez atteindre
                                                {% endif %}
                                              </span>
                                            </div>
                                            <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                              const typeSelect = document.getElementById('objectif_sante_type');
                                              const targetHelp = document.getElementById('valeurCible-help');
                                              const targetInput = document.getElementById('objectif_sante_valeurCible');
                                              const unitSpan = document.getElementById('valeurCible-unit');
                                              if (!typeSelect || !targetHelp || !targetInput) return;
                                              const map = {
                                                'SOMMEIL': {text: 'Heures de sommeil par nuit', min: 1, max: 16, unit: 'heures'},
                                                'SPORT': {text: 'Minutes d\\'activité par jour', min: 0, max: 300, unit: 'minutes'},
                                                'ALIMENTATION': {text: 'Nombre de repas sains par jour', min: 1, max: 6, unit: 'repas'},
                                                '': {text: 'La valeur que vous souhaitez atteindre'}
                                              };
                                              function updateHelp() {
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
                                              }
                                              typeSelect.addEventListener('change', updateHelp);
                                              targetInput.addEventListener('focus', updateHelp);
                                              if (document.readyState === 'complete') updateHelp(); else window.addEventListener('load', updateHelp);
                                            });
                                            </script>
                                            <div id=\"target-preview\"></div>
                                            {{ form_errors(form.valeurCible) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 2: Planning & Échéances -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-calendar-clock\"></i>
                                        </span>
                                        Planning & Échéances
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-calendar-start label-icon\"></i>
                                                Date de début
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            {{ form_widget(form.dateDebut, {'attr': {
                                                'class': 'form-control'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Date à laquelle vous commencez cet objectif</span>
                                            </div>
                                            {{ form_errors(form.dateDebut) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-calendar-end label-icon\"></i>
                                                Date de fin
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            {{ form_widget(form.dateFin, {'attr': {
                                                'class': 'form-control'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Date limite pour atteindre votre objectif</span>
                                            </div>
                                            <div id=\"duration-display\" class=\"mt-2\"></div>
                                            {{ form_errors(form.dateFin) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 3: État & Avancement -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-chart-line\"></i>
                                        </span>
                                        État & Avancement
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-progress-clock label-icon\"></i>
                                                Statut
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            {{ form_widget(form.statut, {'attr': {
                                                'class': 'form-select'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>État actuel de votre objectif</span>
                                            </div>
                                            {{ form_errors(form.statut) }}
                                        </div>
                                    </div>

                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-flag label-icon\"></i>
                                                Priorité
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            {{ form_widget(form.priorite, {'attr': {
                                                'class': 'form-select'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Niveau d'importance de cet objectif</span>
                                            </div>
                                            {{ form_errors(form.priorite) }}
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- Section 4: Attribution -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-account\"></i>
                                        </span>
                                        Attribution
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-account-circle label-icon\"></i>
                                                Utilisateur assigné
                                            </label>
                                            {{ form_widget(form.user, {'attr': {
                                                'class': 'form-select'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Assignez cet objectif à un utilisateur spécifique (optionnel)</span>
                                            </div>
                                            {{ form_errors(form.user) }}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    {% if objectif_sante is defined and objectif_sante.id %}
                                    <div class=\"form-actions-left\">
                                        <form method=\"post\" action=\"{{ path('app_objectif_sante_delete', {'id': objectif_sante.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ? Cette action est irréversible.');\" style=\"display: inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif_sante.id) }}\">
                                            <button type=\"submit\" class=\"btn-custom-danger\">
                                                <i class=\"mdi mdi-delete\"></i>
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                    {% else %}
                                    <div class=\"form-actions-left\"></div>
                                    {% endif %}
                                    <div class=\"form-actions-right\">
                                        <a href=\"{{ path('app_objectif_sante_index') }}\" class=\"btn-custom-secondary\">
                                            <i class=\"mdi mdi-arrow-left\"></i>
                                            Annuler
                                        </a>
                                        <button type=\"submit\" class=\"btn-custom-primary\">
                                            <i class=\"mdi mdi-content-save\"></i>
                                            {{ objectif_sante is defined and objectif_sante.id ? 'Enregistrer les modifications' : 'Créer l\\'objectif' }}
                                        </button>
                                    </div>
                                </div>
                                
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Info Cards -->
                <div class=\"row mt-4\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--danger-gradient);\">
                                    <i class=\"mdi mdi-alert-circle\"></i>
                                </div>
                                <h6>Points importants</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Objectif SMART</strong> : Spécifique, Mesurable, Atteignable, Réaliste, Temporel</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Valeur cible</strong> : Définissez une cible précise et mesurable</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Score Moyen</strong> : Suivi automatiquement par vos entrées</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Dates réalistes</strong> : Donnez-vous le temps nécessaire</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--health-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils santé</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Commencez par des objectifs modestes et augmentez progressivement</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Suivez vos progrès quotidiennement pour rester motivé</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Célébrez chaque petite victoire sur votre parcours</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>N'hésitez pas à ajuster vos objectifs selon vos besoins</span>
                                </li>
                            </ul>
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
                        {{ objectif_sante is defined and objectif_sante.id ? 'Modification' : 'Création' }} d'objectif de santé
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for form enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Target value preview
        const valeurCibleInput = document.querySelector('#objectif_sante_valeurCible');
        const targetPreview = document.getElementById('target-preview');
        
        if (valeurCibleInput && targetPreview) {
            function updateTargetPreview() {
                const value = valeurCibleInput.value;
                if (value) {
                    targetPreview.innerHTML = `
                        <div class=\"target-preview mt-2\">
                            <div class=\"target-preview-content\">
                                <div class=\"target-preview-icon\">
                                    <i class=\"mdi mdi-target\"></i>
                                </div>
                                <div>
                                    <strong>Cible définie:</strong> \${value}
                                    <br>
                                    <small class=\"text-muted\">Votre objectif à atteindre</small>
                                </div>
                            </div>
                        </div>
                    `;
                } else {
                    targetPreview.innerHTML = '';
                }
            }
            
            valeurCibleInput.addEventListener('input', updateTargetPreview);
            updateTargetPreview(); // Initial update
        }

        // Duration calculator
        const dateDebutInput = document.querySelector('#objectif_sante_dateDebut');
        const dateFinInput = document.querySelector('#objectif_sante_dateFin');
        const durationDisplay = document.getElementById('duration-display');
        
        if (dateDebutInput && dateFinInput && durationDisplay) {
            function calculateDuration() {
                if (dateDebutInput.value && dateFinInput.value) {
                    const debut = new Date(dateDebutInput.value);
                    const fin = new Date(dateFinInput.value);
                    const diff = fin - debut;
                    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    
                    if (days > 0) {
                        const weeks = Math.floor(days / 7);
                        const months = Math.floor(days / 30);
                        
                        let display = `<div class=\"alert alert-info p-2 mt-2 mb-0\">
                            <small>
                                <i class=\"mdi mdi-calendar-range\"></i>
                                <strong>Durée totale:</strong> \${days} jour\${days > 1 ? 's' : ''}`;
                        
                        if (weeks > 0) {
                            display += ` (≈ \${weeks} semaine\${weeks > 1 ? 's' : ''})`;
                        }
                        if (months > 0) {
                            display += ` (≈ \${months} mois)`;
                        }
                        
                        display += `</small></div>`;
                        durationDisplay.innerHTML = display;
                    } else {
                        durationDisplay.innerHTML = `<div class=\"alert alert-warning p-2 mt-2 mb-0\">
                            <small><i class=\"mdi mdi-alert\"></i> La date de fin doit être après la date de début</small>
                        </div>`;
                    }
                } else {
                    durationDisplay.innerHTML = '';
                }
            }
            
            dateDebutInput.addEventListener('change', calculateDuration);
            dateFinInput.addEventListener('change', calculateDuration);
            calculateDuration(); // Initial update
        }
        
        // Form validation
        const form = document.getElementById('objectif-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                
                // Validate dates
                if (dateDebutInput && dateFinInput && dateDebutInput.value && dateFinInput.value) {
                    const debut = new Date(dateDebutInput.value);
                    const fin = new Date(dateFinInput.value);
                    
                    if (debut > fin) {
                        alert('⚠️ La date de début ne peut pas être après la date de fin !');
                        dateDebutInput.classList.add('is-invalid');
                        dateFinInput.classList.add('is-invalid');
                        isValid = false;
                    }
                }

                
                if (!isValid) {
                    e.preventDefault();
                    
                    // Show error alert
                    const alertHtml = `
                        <div class=\"alert-custom alert-danger mb-4\" style=\"animation: slideInDown 0.3s ease;\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-alert-circle\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <strong>Erreur de validation</strong><br>
                                Veuillez corriger les erreurs dans le formulaire avant de soumettre.
                            </div>
                        </div>
                    `;
                    
                    const contentWrapper = document.querySelector('.content-wrapper');
                    contentWrapper.insertAdjacentHTML('afterbegin', alertHtml);
                    
                    // Scroll to top
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    
                    // Remove alert after 5 seconds
                    setTimeout(() => {
                        const alert = contentWrapper.querySelector('.alert-custom');
                        if (alert) {
                            alert.style.animation = 'fadeOut 0.3s ease';
                            setTimeout(() => alert.remove(), 300);
                        }
                    }, 5000);
                }
            });
        }
        
        // Auto-hide flash messages
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-custom');
            alerts.forEach(alert => {
                alert.style.animation = 'fadeOut 0.5s ease';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
        
        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInDown {
                from {
                    transform: translateY(-100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
            
            @keyframes fadeOut {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                }
            }
            
            .is-invalid {
                border-color: #f5576c !important;
                animation: shake 0.3s ease;
            }
            
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                75% { transform: translateX(10px); }
            }
        `;
        document.head.appendChild(style);
    });
</script>
{% endblock %}
", "objectif_sante/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\objectif_sante\\new.html.twig");
    }
}
