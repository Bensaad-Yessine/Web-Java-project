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

/* preference_alerte/edit.html.twig */
class __TwigTemplate_d01010312f74d9af578f2caff75a6b45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/edit.html.twig"));

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

        yield "Créer une nouvelle Tâche";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Modification de Tâche</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" />
    <style>
      :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        --danger-gradient: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
        --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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
        background: var(--primary-gradient);
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
        border-left: 4px solid #667eea;
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
        background: var(--primary-gradient);
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
        background: var(--primary-gradient);
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
        background: var(--primary-gradient);
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
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
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
        background: var(--info-gradient);
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
        background: var(--info-gradient);
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

      /* Status Badge Styles */
      .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }

      .status-badge.a-faire {
        background: linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%);
        color: #2d3436;
      }

      .status-badge.en-cours {
        background: var(--info-gradient);
        color: white;
      }

      .status-badge.terminee {
        background: var(--success-gradient);
        color: white;
      }

      .status-badge.en-retard {
        background: var(--danger-gradient);
        color: white;
      }

      /* Priority Badge Styles */
      .priority-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }

      .priority-badge.faible {
        background: var(--success-gradient);
        color: white;
      }

      .priority-badge.moyen {
        background: var(--warning-gradient);
        color: white;
      }

      .priority-badge.elevee {
        background: var(--danger-gradient);
        color: white;
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 666
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 667
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 669
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 670
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
        // line 678
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 678, $this->source); })()), "user", [], "any", false, false, false, 678)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 679
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 679, $this->source); })()), "user", [], "any", false, false, false, 679), "profilePic", [], "any", false, false, false, 679)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 680
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 680, $this->source); })()), "user", [], "any", false, false, false, 680), "profilePic", [], "any", false, false, false, 680))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 681
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 681, $this->source); })()), "user", [], "any", false, false, false, 681), "prenom", [], "any", false, false, false, 681), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 684
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 685
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 685, $this->source); })()), "user", [], "any", false, false, false, 685), "prenom", [], "any", false, false, false, 685))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 685, $this->source); })()), "user", [], "any", false, false, false, 685), "nom", [], "any", false, false, false, 685))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 688
            yield "                  ";
        } else {
            // line 689
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 691
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 694
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 694, $this->source); })()), "user", [], "any", false, false, false, 694)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 695
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 695, $this->source); })()), "user", [], "any", false, false, false, 695), "prenom", [], "any", false, false, false, 695), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 695, $this->source); })()), "user", [], "any", false, false, false, 695), "nom", [], "any", false, false, false, 695), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 696
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 696, $this->source); })()), "user", [], "any", false, false, false, 696), "email", [], "any", false, false, false, 696), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 698
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 698, $this->source); })()), "user", [], "any", false, false, false, 698), "roles", [], "any", false, false, false, 698))) {
                // line 699
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 701
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 703
            yield "                    </div>
                  ";
        } else {
            // line 705
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 708
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
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 724
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
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 766
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-checkbox-marked-circle-outline\"></i></span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\" ";
        // line 773
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-alert-circle-outline\"></i></span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Exercices de santé</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 787
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
            <a class=\"navbar-brand brand-logo\" href=\"";
        // line 800
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <img src=\"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 803
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <img src=\"";
        // line 804
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
          </div>
          <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <ul class=\"navbar-nav w-100\">
              <li class=\"nav-item w-100\">
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une tâche...\" id=\"searchInput\">
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
                      <div class=\"preview-icon bg-warning rounded-circle\">
                        <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvelle tâche</p>
                      <p class=\"text-muted ellipsis mb-0\"> Tâche \"Correction bug\" ajoutée</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 844
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 844, $this->source); })()), "user", [], "any", false, false, false, 844)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 845
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 846
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 846, $this->source); })()), "user", [], "any", false, false, false, 846), "profilePic", [], "any", false, false, false, 846)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 847
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 847, $this->source); })()), "user", [], "any", false, false, false, 847), "profilePic", [], "any", false, false, false, 847))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 848
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 848, $this->source); })()), "user", [], "any", false, false, false, 848), "prenom", [], "any", false, false, false, 848), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 851
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 852
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 852, $this->source); })()), "user", [], "any", false, false, false, 852), "prenom", [], "any", false, false, false, 852))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 852, $this->source); })()), "user", [], "any", false, false, false, 852), "nom", [], "any", false, false, false, 852))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 855
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 857
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 857, $this->source); })()), "user", [], "any", false, false, false, 857), "prenom", [], "any", false, false, false, 857), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 857, $this->source); })()), "user", [], "any", false, false, false, 857), "nom", [], "any", false, false, false, 857), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 860
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 860, $this->source); })()), "user", [], "any", false, false, false, 860), "roles", [], "any", false, false, false, 860))) {
                // line 861
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 863
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 865
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 869
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 872
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 877
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 877, $this->source); })()), "user", [], "any", false, false, false, 877)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 878
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 878, $this->source); })()), "user", [], "any", false, false, false, 878), "prenom", [], "any", false, false, false, 878), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 878, $this->source); })()), "user", [], "any", false, false, false, 878), "nom", [], "any", false, false, false, 878), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 879
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 879, $this->source); })()), "user", [], "any", false, false, false, 879), "email", [], "any", false, false, false, 879), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 881
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 881, $this->source); })()), "user", [], "any", false, false, false, 881), "roles", [], "any", false, false, false, 881))) {
                // line 882
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 884
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 886
            yield "                      </small>
                    ";
        } else {
            // line 888
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 891
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 893
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 893, $this->source); })()), "user", [], "any", false, false, false, 893)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 894
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 894, $this->source); })()), "user", [], "any", false, false, false, 894), "id", [], "any", false, false, false, 894)]), "html", null, true);
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
            // line 904
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 904, $this->source); })()), "user", [], "any", false, false, false, 904), "id", [], "any", false, false, false, 904)]), "html", null, true);
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
        // line 916
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
        // line 936
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 936, $this->source); })()), "flashes", [], "any", false, false, false, 936));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 937
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 938
                yield "                        <div class=\"alert-custom alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-";
                // line 940
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                ";
                // line 943
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
            // line 948
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 949
        yield "
                <!-- Enhanced Page Header -->
                <div class=\"page-header-enhanced\">
                    <div class=\"title-section\">
                        <div class=\"title-icon\">
                            <i class=\"mdi mdi-bell-cog\"></i>
                        </div>
                        <div>
                            <h3>Modifier la Préférence d'Alerte</h3>
                            <p class=\"subtitle\">Mettez à jour les paramètres de notification \"";
        // line 958
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 958, $this->source); })()), "nom", [], "any", false, false, false, 958), "html", null, true);
        yield "\"</p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 964
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\">
                                    <i class=\"mdi mdi-bell-ring-outline me-1\"></i>
                                    Liste des Préférences
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 970
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 970, $this->source); })()), "id", [], "any", false, false, false, 970)]), "html", null, true);
        yield "\">
                                    <i class=\"mdi mdi-eye me-1\"></i>
                                    Détails
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                Modification
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Current Preference Info -->
                <div class=\"current-info-card\">
                    <h5>
                        <i class=\"mdi mdi-information\"></i>
                        Informations actuelles de la préférence
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Statut:</span>
                                <span class=\"info-value\">
                                    ";
        // line 993
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 993, $this->source); })()), "isActive", [], "any", false, false, false, 993)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 994
            yield "                                        <span class=\"status-badge terminee\">
                                            <i class=\"mdi mdi-check-circle\"></i> Activée
                                        </span>
                                    ";
        } else {
            // line 998
            yield "                                        <span class=\"status-badge a-faire\">
                                            <i class=\"mdi mdi-close-circle\"></i> Désactivée
                                        </span>
                                    ";
        }
        // line 1002
        yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Type:</span>
                                <span class=\"info-value\">
                                    ";
        // line 1007
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1007, $this->source); })()), "isDefault", [], "any", false, false, false, 1007)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1008
            yield "                                        Préférence par défaut
                                    ";
        } else {
            // line 1010
            yield "                                        Préférence personnalisée
                                    ";
        }
        // line 1012
        yield "                                </span>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Priorité:</span>
                                <span class=\"info-value\">
                                    ";
        // line 1019
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1019, $this->source); })()), "emailActif", [], "any", false, false, false, 1019) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1019, $this->source); })()), "pushActif", [], "any", false, false, false, 1019)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1019, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 1019))) {
            // line 1020
            yield "                                        <span class=\"priority-badge elevee\">
                                            <i class=\"mdi mdi-bell-ring\"></i> Tous canaux
                                        </span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1023
(isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1023, $this->source); })()), "emailActif", [], "any", false, false, false, 1023) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1023, $this->source); })()), "pushActif", [], "any", false, false, false, 1023))) {
            // line 1024
            yield "                                        <span class=\"priority-badge moyen\">
                                            <i class=\"mdi mdi-bell\"></i> Multi-canaux
                                        </span>
                                    ";
        } else {
            // line 1028
            yield "                                        <span class=\"priority-badge faible\">
                                            <i class=\"mdi mdi-bell-off\"></i> Aucun
                                        </span>
                                    ";
        }
        // line 1032
        yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Utilisateur assigné:</span>
                                <span class=\"info-value\">
                                    ";
        // line 1037
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1037, $this->source); })()), "etudiant", [], "any", false, false, false, 1037)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1038
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1038, $this->source); })()), "etudiant", [], "any", false, false, false, 1038), "email", [], "any", false, false, false, 1038), "html", null, true);
            yield "
                                    ";
        } else {
            // line 1040
            yield "                                        <em class=\"text-muted\">Préférence globale</em>
                                    ";
        }
        // line 1042
        yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Créée le:</span>
                                <span class=\"info-value\">
                                    ";
        // line 1047
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1047, $this->source); })()), "dateCreation", [], "any", false, false, false, 1047)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1048
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1048, $this->source); })()), "dateCreation", [], "any", false, false, false, 1048), "d/m/Y H:i"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 1050
            yield "                                        <em class=\"text-muted\">Non définie</em>
                                    ";
        }
        // line 1052
        yield "                                </span>
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
                                    <i class=\"mdi mdi-bell-cog\"></i>
                                </div>
                                <h4>Formulaire de modification des préférences d'alerte</h4>
                            </div>
                            <div class=\"card-body p-4\">
                                ";
        // line 1069
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1069, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample", "id" => "preference-form"]]);
        yield "
                                
                                <!-- Section 1: Informations de Base -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-information\"></i>
                                        </span>
                                        Informations de Base
                                    </h5>
                                </div>
                                
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-tag-text label-icon\"></i>
                                                Nom de la préférence
                                            </label>
                                            ";
        // line 1088
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1088, $this->source); })()), "nom", [], "any", false, false, false, 1088), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Mes alertes quotidiennes"]]);
        // line 1091
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Donnez un nom descriptif à cette configuration d'alerte</span>
                                            </div>
                                            ";
        // line 1096
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1096, $this->source); })()), "nom", [], "any", false, false, false, 1096), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 2: Activation & Statut -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-power\"></i>
                                        </span>
                                        Activation & Statut
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
        // line 1115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1115, $this->source); })()), "isActive", [], "any", false, false, false, 1115), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 1117
        yield "
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-check-circle-outline label-icon\"></i>
                                                    Activer cette préférence
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Activez cette préférence pour recevoir les alertes configurées</span>
                                            </div>
                                            ";
        // line 1127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1127, $this->source); })()), "isActive", [], "any", false, false, false, 1127), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 3: Canaux de Notification -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-bell-ring\"></i>
                                        </span>
                                        Canaux de Notification
                                    </h5>
                                    <p class=\"section-subtitle\">Choisissez comment vous souhaitez recevoir les alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
        // line 1147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1147, $this->source); })()), "emailActif", [], "any", false, false, false, 1147), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 1149
        yield "
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-email-outline label-icon\"></i>
                                                    Email activé
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Recevoir les alertes par email</span>
                                            </div>
                                            ";
        // line 1159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1159, $this->source); })()), "emailActif", [], "any", false, false, false, 1159), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
        // line 1166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1166, $this->source); })()), "pushActif", [], "any", false, false, false, 1166), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 1168
        yield "
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-cellphone-message label-icon\"></i>
                                                    Push activé
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Recevoir des notifications push</span>
                                            </div>
                                            ";
        // line 1178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1178, $this->source); })()), "pushActif", [], "any", false, false, false, 1178), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
        // line 1185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1185, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 1185), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 1187
        yield "
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-web label-icon\"></i>
                                                    Notifications sur site
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Voir les alertes directement sur le site</span>
                                            </div>
                                            ";
        // line 1197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1197, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 1197), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 4: Paramètres de Temporisation -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-timer\"></i>
                                        </span>
                                        Paramètres de Temporisation
                                    </h5>
                                    <p class=\"section-subtitle\">Contrôlez le timing des alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-alert label-icon\"></i>
                                                Délai de rappel (minutes)
                                            </label>
                                            ";
        // line 1220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1220, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 1220), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 60"]]);
        // line 1223
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Délai avant de recevoir un rappel (en minutes)</span>
                                            </div>
                                            ";
        // line 1228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1228, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 1228), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 5: Période de Silence -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-volume-off\"></i>
                                        </span>
                                        Période de Silence
                                    </h5>
                                    <p class=\"section-subtitle\">Définissez les moments où vous ne souhaitez pas recevoir d'alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-start label-icon\"></i>
                                                Heure début silence
                                            </label>
                                            ";
        // line 1251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1251, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 1251), 'widget', ["attr" => ["class" => "form-control timepicker"]]);
        // line 1253
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Heure à laquelle les alertes doivent être désactivées</span>
                                            </div>
                                            ";
        // line 1258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1258, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 1258), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-end label-icon\"></i>
                                                Heure fin silence
                                            </label>
                                            ";
        // line 1268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1268, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 1268), 'widget', ["attr" => ["class" => "form-control timepicker"]]);
        // line 1270
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Heure à laquelle les alertes doivent être réactivées</span>
                                            </div>
                                            ";
        // line 1275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1275, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 1275), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    <a href=\"";
        // line 1282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\" class=\"btn-custom-secondary\">
                                        <i class=\"mdi mdi-arrow-left\"></i>
                                        Retour à la liste
                                    </a>
                                    <button type=\"submit\" class=\"btn-custom-primary\">
                                        <i class=\"mdi mdi-content-save\"></i>
                                        Enregistrer les modifications
                                    </button>
                                </div>
                                
                                ";
        // line 1292
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1292, $this->source); })()), 'form_end');
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
                                <h6>Paramètres recommandés</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Activation</strong> : Activez la préférence pour recevoir des alertes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Email</strong> : Idéal pour les alertes importantes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Push</strong> : Pour les notifications instantanées</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Site</strong> : Restez informé pendant votre navigation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--success-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils & Bonnes Pratiques</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Utilisez une période de silence pour éviter les dérangements</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Activez plusieurs canaux pour être sûr de recevoir les alertes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Définissez un délai de rappel adapté à l'urgence</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Donnez un nom clair à chaque configuration</span>
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
        // line 1364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        Configuration des préférences d'alerte - Système de notification
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for form enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Progress bar enhancement
        const dureeInput = document.querySelector('#tache_dureeEstimee');
        const progressPreview = document.getElementById('progress-preview');
        
        if (dureeInput && progressPreview) {
            function updateProgress() {
                const value = dureeInput.value || 0;
                progressPreview.innerHTML = `
                    <div class=\"progress-custom\">
                        <div class=\"progress-bar\" role=\"progressbar\" 
                             style=\"width: \${value}%\" 
                             aria-valuenow=\"\${value}\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\">
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between align-items-center mt-2\">
                        <small class=\"text-muted\">
                            <i class=\"mdi mdi-information-outline\"></i>
                            Progression: \${value}%
                        </small>
                        <small class=\"text-muted\">
                            \${value < 30 ? '🔴 Début' : value < 70 ? '🟡 En cours' : '🟢 Presque terminé'}
                        </small>
                    </div>
                `;
            }
            
            dureeInput.addEventListener('input', updateProgress);
            updateProgress(); // Initial update
        }
        
        // Form validation
        const form = document.getElementById('tache-form');
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
                                Veuillez remplir tous les champs obligatoires marqués d'une étoile (*).
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
        return "preference_alerte/edit.html.twig";
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
        return array (  1755 => 1364,  1680 => 1292,  1667 => 1282,  1657 => 1275,  1650 => 1270,  1648 => 1268,  1635 => 1258,  1628 => 1253,  1626 => 1251,  1600 => 1228,  1593 => 1223,  1591 => 1220,  1565 => 1197,  1553 => 1187,  1551 => 1185,  1541 => 1178,  1529 => 1168,  1527 => 1166,  1517 => 1159,  1505 => 1149,  1503 => 1147,  1480 => 1127,  1468 => 1117,  1466 => 1115,  1444 => 1096,  1437 => 1091,  1435 => 1088,  1413 => 1069,  1394 => 1052,  1390 => 1050,  1384 => 1048,  1382 => 1047,  1375 => 1042,  1371 => 1040,  1365 => 1038,  1363 => 1037,  1356 => 1032,  1350 => 1028,  1344 => 1024,  1342 => 1023,  1337 => 1020,  1335 => 1019,  1326 => 1012,  1322 => 1010,  1318 => 1008,  1316 => 1007,  1309 => 1002,  1303 => 998,  1297 => 994,  1295 => 993,  1269 => 970,  1260 => 964,  1251 => 958,  1240 => 949,  1234 => 948,  1223 => 943,  1217 => 940,  1211 => 938,  1206 => 937,  1202 => 936,  1178 => 916,  1163 => 904,  1149 => 894,  1147 => 893,  1143 => 891,  1138 => 888,  1134 => 886,  1130 => 884,  1126 => 882,  1124 => 881,  1119 => 879,  1112 => 878,  1110 => 877,  1103 => 872,  1096 => 869,  1090 => 865,  1086 => 863,  1082 => 861,  1080 => 860,  1072 => 857,  1068 => 855,  1061 => 852,  1058 => 851,  1052 => 848,  1047 => 847,  1045 => 846,  1042 => 845,  1040 => 844,  997 => 804,  993 => 803,  988 => 801,  984 => 800,  968 => 787,  951 => 773,  941 => 766,  896 => 724,  878 => 708,  873 => 705,  869 => 703,  865 => 701,  861 => 699,  859 => 698,  854 => 696,  847 => 695,  845 => 694,  840 => 691,  834 => 689,  831 => 688,  824 => 685,  821 => 684,  815 => 681,  810 => 680,  807 => 679,  805 => 678,  794 => 670,  790 => 669,  785 => 667,  781 => 666,  130 => 18,  126 => 17,  121 => 15,  117 => 14,  113 => 13,  109 => 12,  100 => 5,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer une nouvelle Tâche{% endblock %}
{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Modification de Tâche</title>
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
        background: var(--primary-gradient);
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
        border-left: 4px solid #667eea;
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
        background: var(--primary-gradient);
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
        background: var(--primary-gradient);
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
        background: var(--primary-gradient);
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
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
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
        background: var(--info-gradient);
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
        background: var(--info-gradient);
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

      /* Status Badge Styles */
      .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }

      .status-badge.a-faire {
        background: linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%);
        color: #2d3436;
      }

      .status-badge.en-cours {
        background: var(--info-gradient);
        color: white;
      }

      .status-badge.terminee {
        background: var(--success-gradient);
        color: white;
      }

      .status-badge.en-retard {
        background: var(--danger-gradient);
        color: white;
      }

      /* Priority Badge Styles */
      .priority-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }

      .priority-badge.faible {
        background: var(--success-gradient);
        color: white;
      }

      .priority-badge.moyen {
        background: var(--warning-gradient);
        color: white;
      }

      .priority-badge.elevee {
        background: var(--danger-gradient);
        color: white;
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
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"{{ path('app_tache_index') }}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-checkbox-marked-circle-outline\"></i></span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\" {{ path('app_preference_alerte_index')}}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-alert-circle-outline\"></i></span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Exercices de santé</span>
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
            <a class=\"navbar-brand brand-logo\" href=\"{{ path('app_tache_index') }}\">
              <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"{{ path('app_tache_index') }}\">
              <img src=\"{{ asset('assets/images/logo-mini.svg') }}\" alt=\"logo\" />
            </a>
          </div>
          <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <ul class=\"navbar-nav w-100\">
              <li class=\"nav-item w-100\">
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une tâche...\" id=\"searchInput\">
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
                      <div class=\"preview-icon bg-warning rounded-circle\">
                        <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvelle tâche</p>
                      <p class=\"text-muted ellipsis mb-0\"> Tâche \"Correction bug\" ajoutée</p>
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
                            <i class=\"mdi mdi-bell-cog\"></i>
                        </div>
                        <div>
                            <h3>Modifier la Préférence d'Alerte</h3>
                            <p class=\"subtitle\">Mettez à jour les paramètres de notification \"{{ preference_alerte.nom }}\"</p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_preference_alerte_index') }}\">
                                    <i class=\"mdi mdi-bell-ring-outline me-1\"></i>
                                    Liste des Préférences
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_preference_alerte_show', {'id': preference_alerte.id}) }}\">
                                    <i class=\"mdi mdi-eye me-1\"></i>
                                    Détails
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                Modification
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Current Preference Info -->
                <div class=\"current-info-card\">
                    <h5>
                        <i class=\"mdi mdi-information\"></i>
                        Informations actuelles de la préférence
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Statut:</span>
                                <span class=\"info-value\">
                                    {% if preference_alerte.isActive %}
                                        <span class=\"status-badge terminee\">
                                            <i class=\"mdi mdi-check-circle\"></i> Activée
                                        </span>
                                    {% else %}
                                        <span class=\"status-badge a-faire\">
                                            <i class=\"mdi mdi-close-circle\"></i> Désactivée
                                        </span>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Type:</span>
                                <span class=\"info-value\">
                                    {% if preference_alerte.isDefault %}
                                        Préférence par défaut
                                    {% else %}
                                        Préférence personnalisée
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Priorité:</span>
                                <span class=\"info-value\">
                                    {% if preference_alerte.emailActif and preference_alerte.pushActif and preference_alerte.siteNotifActive %}
                                        <span class=\"priority-badge elevee\">
                                            <i class=\"mdi mdi-bell-ring\"></i> Tous canaux
                                        </span>
                                    {% elseif preference_alerte.emailActif or preference_alerte.pushActif %}
                                        <span class=\"priority-badge moyen\">
                                            <i class=\"mdi mdi-bell\"></i> Multi-canaux
                                        </span>
                                    {% else %}
                                        <span class=\"priority-badge faible\">
                                            <i class=\"mdi mdi-bell-off\"></i> Aucun
                                        </span>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Utilisateur assigné:</span>
                                <span class=\"info-value\">
                                    {% if preference_alerte.etudiant %}
                                        {{ preference_alerte.etudiant.email }}
                                    {% else %}
                                        <em class=\"text-muted\">Préférence globale</em>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Créée le:</span>
                                <span class=\"info-value\">
                                    {% if preference_alerte.dateCreation %}
                                        {{ preference_alerte.dateCreation|date('d/m/Y H:i') }}
                                    {% else %}
                                        <em class=\"text-muted\">Non définie</em>
                                    {% endif %}
                                </span>
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
                                    <i class=\"mdi mdi-bell-cog\"></i>
                                </div>
                                <h4>Formulaire de modification des préférences d'alerte</h4>
                            </div>
                            <div class=\"card-body p-4\">
                                {{ form_start(form, {'attr': {'class': 'form-sample', 'id': 'preference-form'}}) }}
                                
                                <!-- Section 1: Informations de Base -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-information\"></i>
                                        </span>
                                        Informations de Base
                                    </h5>
                                </div>
                                
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-tag-text label-icon\"></i>
                                                Nom de la préférence
                                            </label>
                                            {{ form_widget(form.nom, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: Mes alertes quotidiennes'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Donnez un nom descriptif à cette configuration d'alerte</span>
                                            </div>
                                            {{ form_errors(form.nom) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 2: Activation & Statut -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-power\"></i>
                                        </span>
                                        Activation & Statut
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                {{ form_widget(form.isActive, {'attr': {
                                                    'class': 'form-check-input'
                                                }}) }}
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-check-circle-outline label-icon\"></i>
                                                    Activer cette préférence
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Activez cette préférence pour recevoir les alertes configurées</span>
                                            </div>
                                            {{ form_errors(form.isActive) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 3: Canaux de Notification -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-bell-ring\"></i>
                                        </span>
                                        Canaux de Notification
                                    </h5>
                                    <p class=\"section-subtitle\">Choisissez comment vous souhaitez recevoir les alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                {{ form_widget(form.emailActif, {'attr': {
                                                    'class': 'form-check-input'
                                                }}) }}
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-email-outline label-icon\"></i>
                                                    Email activé
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Recevoir les alertes par email</span>
                                            </div>
                                            {{ form_errors(form.emailActif) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                {{ form_widget(form.pushActif, {'attr': {
                                                    'class': 'form-check-input'
                                                }}) }}
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-cellphone-message label-icon\"></i>
                                                    Push activé
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Recevoir des notifications push</span>
                                            </div>
                                            {{ form_errors(form.pushActif) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                {{ form_widget(form.siteNotifActive, {'attr': {
                                                    'class': 'form-check-input'
                                                }}) }}
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-web label-icon\"></i>
                                                    Notifications sur site
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Voir les alertes directement sur le site</span>
                                            </div>
                                            {{ form_errors(form.siteNotifActive) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 4: Paramètres de Temporisation -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-timer\"></i>
                                        </span>
                                        Paramètres de Temporisation
                                    </h5>
                                    <p class=\"section-subtitle\">Contrôlez le timing des alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-alert label-icon\"></i>
                                                Délai de rappel (minutes)
                                            </label>
                                            {{ form_widget(form.delaiRappelMin, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: 60'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Délai avant de recevoir un rappel (en minutes)</span>
                                            </div>
                                            {{ form_errors(form.delaiRappelMin) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 5: Période de Silence -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-volume-off\"></i>
                                        </span>
                                        Période de Silence
                                    </h5>
                                    <p class=\"section-subtitle\">Définissez les moments où vous ne souhaitez pas recevoir d'alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-start label-icon\"></i>
                                                Heure début silence
                                            </label>
                                            {{ form_widget(form.heureSilenceDebut, {'attr': {
                                                'class': 'form-control timepicker'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Heure à laquelle les alertes doivent être désactivées</span>
                                            </div>
                                            {{ form_errors(form.heureSilenceDebut) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-end label-icon\"></i>
                                                Heure fin silence
                                            </label>
                                            {{ form_widget(form.heureSilenceFin, {'attr': {
                                                'class': 'form-control timepicker'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Heure à laquelle les alertes doivent être réactivées</span>
                                            </div>
                                            {{ form_errors(form.heureSilenceFin) }}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    <a href=\"{{ path('app_preference_alerte_index') }}\" class=\"btn-custom-secondary\">
                                        <i class=\"mdi mdi-arrow-left\"></i>
                                        Retour à la liste
                                    </a>
                                    <button type=\"submit\" class=\"btn-custom-primary\">
                                        <i class=\"mdi mdi-content-save\"></i>
                                        Enregistrer les modifications
                                    </button>
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
                                <h6>Paramètres recommandés</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Activation</strong> : Activez la préférence pour recevoir des alertes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Email</strong> : Idéal pour les alertes importantes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Push</strong> : Pour les notifications instantanées</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Site</strong> : Restez informé pendant votre navigation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--success-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils & Bonnes Pratiques</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Utilisez une période de silence pour éviter les dérangements</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Activez plusieurs canaux pour être sûr de recevoir les alertes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Définissez un délai de rappel adapté à l'urgence</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Donnez un nom clair à chaque configuration</span>
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
                        Configuration des préférences d'alerte - Système de notification
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for form enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Progress bar enhancement
        const dureeInput = document.querySelector('#tache_dureeEstimee');
        const progressPreview = document.getElementById('progress-preview');
        
        if (dureeInput && progressPreview) {
            function updateProgress() {
                const value = dureeInput.value || 0;
                progressPreview.innerHTML = `
                    <div class=\"progress-custom\">
                        <div class=\"progress-bar\" role=\"progressbar\" 
                             style=\"width: \${value}%\" 
                             aria-valuenow=\"\${value}\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\">
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between align-items-center mt-2\">
                        <small class=\"text-muted\">
                            <i class=\"mdi mdi-information-outline\"></i>
                            Progression: \${value}%
                        </small>
                        <small class=\"text-muted\">
                            \${value < 30 ? '🔴 Début' : value < 70 ? '🟡 En cours' : '🟢 Presque terminé'}
                        </small>
                    </div>
                `;
            }
            
            dureeInput.addEventListener('input', updateProgress);
            updateProgress(); // Initial update
        }
        
        // Form validation
        const form = document.getElementById('tache-form');
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
                                Veuillez remplir tous les champs obligatoires marqués d'une étoile (*).
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
", "preference_alerte/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\preference_alerte\\edit.html.twig");
    }
}
