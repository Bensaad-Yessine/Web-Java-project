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

/* tache/edit.html.twig */
class __TwigTemplate_970e5c5a27024cf05b34878d1243f36b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/edit.html.twig"));

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

        yield "Modifier la Tâche";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 667
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 669
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
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
          
          ";
        // line 723
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 724
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 725
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          ";
        } else {
            // line 731
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 732
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-circle\"></i></span>
              <span class=\"menu-title\">Mon Profil</span>
            </a>
          </li>
          ";
        }
        // line 738
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
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 775
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
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Exercices de santé</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 796
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
        // line 809
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une tâche...\">
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
                        <i class=\"mdi mdi-alert-circle\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Tâche urgente</p>
                      <p class=\"text-muted ellipsis mb-0\">La tâche \"Correction bug\" est due demain</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 848
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 848, $this->source); })()), "user", [], "any", false, false, false, 848)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 849
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 850
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 850, $this->source); })()), "user", [], "any", false, false, false, 850), "profilePic", [], "any", false, false, false, 850)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 851
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 851, $this->source); })()), "user", [], "any", false, false, false, 851), "profilePic", [], "any", false, false, false, 851))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 852
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 852, $this->source); })()), "user", [], "any", false, false, false, 852), "prenom", [], "any", false, false, false, 852), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 855
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 856
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 856, $this->source); })()), "user", [], "any", false, false, false, 856), "prenom", [], "any", false, false, false, 856))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 856, $this->source); })()), "user", [], "any", false, false, false, 856), "nom", [], "any", false, false, false, 856))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 859
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 861
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 861, $this->source); })()), "user", [], "any", false, false, false, 861), "prenom", [], "any", false, false, false, 861), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 861, $this->source); })()), "user", [], "any", false, false, false, 861), "nom", [], "any", false, false, false, 861), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 864
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 864, $this->source); })()), "user", [], "any", false, false, false, 864), "roles", [], "any", false, false, false, 864))) {
                // line 865
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 867
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 869
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 873
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 876
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 881
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 881, $this->source); })()), "user", [], "any", false, false, false, 881)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 882
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 882, $this->source); })()), "user", [], "any", false, false, false, 882), "prenom", [], "any", false, false, false, 882), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 882, $this->source); })()), "user", [], "any", false, false, false, 882), "nom", [], "any", false, false, false, 882), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 883
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 883, $this->source); })()), "user", [], "any", false, false, false, 883), "email", [], "any", false, false, false, 883), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 885
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 885, $this->source); })()), "user", [], "any", false, false, false, 885), "roles", [], "any", false, false, false, 885))) {
                // line 886
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 888
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 890
            yield "                      </small>
                    ";
        } else {
            // line 892
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 895
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 897
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 897, $this->source); })()), "user", [], "any", false, false, false, 897)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 898
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 898, $this->source); })()), "user", [], "any", false, false, false, 898), "id", [], "any", false, false, false, 898)]), "html", null, true);
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
            // line 908
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 908, $this->source); })()), "user", [], "any", false, false, false, 908), "id", [], "any", false, false, false, 908)]), "html", null, true);
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
        // line 920
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
        // line 940
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 940, $this->source); })()), "flashes", [], "any", false, false, false, 940));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 941
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 942
                yield "                        <div class=\"alert-custom alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-";
                // line 944
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                ";
                // line 947
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
            // line 952
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 953
        yield "
                <!-- Enhanced Page Header -->
                <div class=\"page-header-enhanced\">
                    <div class=\"title-section\">
                        <div class=\"title-icon\">
                            <i class=\"mdi mdi-pencil-box\"></i>
                        </div>
                        <div>
                            <h3>Modifier la Tâche</h3>
                            <p class=\"subtitle\">Mettez à jour les informations de la tâche \"";
        // line 962
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 962, $this->source); })()), "titre", [], "any", false, false, false, 962), "html", null, true);
        yield "\"</p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 968
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
                                    <i class=\"mdi mdi-checkbox-marked-circle-outline me-1\"></i>
                                    Liste des Tâches
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 974
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 974, $this->source); })()), "id", [], "any", false, false, false, 974)]), "html", null, true);
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

                <!-- Current Task Info -->
                <div class=\"current-info-card\">
                    <h5>
                        <i class=\"mdi mdi-information\"></i>
                        Informations actuelles de la tâche
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Statut actuel:</span>
                                <span class=\"info-value\">
                                    ";
        // line 997
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 997, $this->source); })()), "statut", [], "any", false, false, false, 997) == "A_FAIRE")) {
            // line 998
            yield "                                        <span class=\"status-badge a-faire\">
                                            <i class=\"mdi mdi-clock-outline\"></i> À faire
                                        </span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1001
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1001, $this->source); })()), "statut", [], "any", false, false, false, 1001) == "EN_COURS")) {
            // line 1002
            yield "                                        <span class=\"status-badge en-cours\">
                                            <i class=\"mdi mdi-progress-clock\"></i> En cours
                                        </span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1005
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1005, $this->source); })()), "statut", [], "any", false, false, false, 1005) == "TERMINEE")) {
            // line 1006
            yield "                                        <span class=\"status-badge terminee\">
                                            <i class=\"mdi mdi-check-circle\"></i> Terminée
                                        </span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1009
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1009, $this->source); })()), "statut", [], "any", false, false, false, 1009) == "EN_RETARD")) {
            // line 1010
            yield "                                        <span class=\"status-badge en-retard\">
                                            <i class=\"mdi mdi-alert-circle\"></i> En retard
                                        </span>
                                    ";
        }
        // line 1014
        yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Type:</span>
                                <span class=\"info-value\">";
        // line 1018
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1018, $this->source); })()), "type", [], "any", false, false, false, 1018), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Priorité:</span>
                                <span class=\"info-value\">
                                    ";
        // line 1025
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1025, $this->source); })()), "priorite", [], "any", false, false, false, 1025) == "FAIBLE")) {
            // line 1026
            yield "                                        <span class=\"priority-badge faible\">
                                            <i class=\"mdi mdi-flag\"></i> Faible
                                        </span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1029
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1029, $this->source); })()), "priorite", [], "any", false, false, false, 1029) == "MOYEN")) {
            // line 1030
            yield "                                        <span class=\"priority-badge moyen\">
                                            <i class=\"mdi mdi-flag\"></i> Moyenne
                                        </span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1033
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1033, $this->source); })()), "priorite", [], "any", false, false, false, 1033) == "ELEVEE")) {
            // line 1034
            yield "                                        <span class=\"priority-badge elevee\">
                                            <i class=\"mdi mdi-flag\"></i> Haute
                                        </span>
                                    ";
        }
        // line 1038
        yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Utilisateur assigné:</span>
                                <span class=\"info-value\">
                                    ";
        // line 1043
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1043, $this->source); })()), "user", [], "any", false, false, false, 1043)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1044
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1044, $this->source); })()), "user", [], "any", false, false, false, 1044), "email", [], "any", false, false, false, 1044), "html", null, true);
            yield "
                                    ";
        } else {
            // line 1046
            yield "                                        <em class=\"text-muted\">Non assigné</em>
                                    ";
        }
        // line 1048
        yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Créée le:</span>
                                <span class=\"info-value\">
                                    ";
        // line 1053
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1053, $this->source); })()), "dateDebut", [], "any", false, false, false, 1053)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1054
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1054, $this->source); })()), "dateDebut", [], "any", false, false, false, 1054), "d/m/Y H:i"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 1056
            yield "                                        <em class=\"text-muted\">Non définie</em>
                                    ";
        }
        // line 1058
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
                                    <i class=\"mdi mdi-file-document-edit\"></i>
                                </div>
                                <h4>Formulaire de modification</h4>
                            </div>
                            <div class=\"card-body p-4\">
                                ";
        // line 1075
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1075, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample", "id" => "tache-form"]]);
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
                                                Titre de la tâche
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1095
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1095, $this->source); })()), "titre", [], "any", false, false, false, 1095), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Correction du bug de connexion"]]);
        // line 1098
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Donnez un titre clair et concis à votre tâche</span>
                                            </div>
                                            ";
        // line 1103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1103, $this->source); })()), "titre", [], "any", false, false, false, 1103), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-tag label-icon\"></i>
                                                Type de tâche
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1116, $this->source); })()), "type", [], "any", false, false, false, 1116), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1118
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Sélectionnez le type qui correspond le mieux à votre tâche</span>
                                            </div>
                                            ";
        // line 1123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1123, $this->source); })()), "type", [], "any", false, false, false, 1123), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-flag label-icon\"></i>
                                                Priorité
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1136, $this->source); })()), "priorite", [], "any", false, false, false, 1136), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1138
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Définissez l'urgence et l'importance de la tâche</span>
                                            </div>
                                            ";
        // line 1143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1143, $this->source); })()), "priorite", [], "any", false, false, false, 1143), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-progress-clock label-icon\"></i>
                                                Statut
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            ";
        // line 1154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1154, $this->source); })()), "statut", [], "any", false, false, false, 1154), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1156
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>État actuel de la tâche dans son cycle de vie</span>
                                            </div>
                                            ";
        // line 1161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1161, $this->source); })()), "statut", [], "any", false, false, false, 1161), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 2: Planning & Dates -->
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
        // line 1184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1184, $this->source); })()), "dateDebut", [], "any", false, false, false, 1184), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1186
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Date à laquelle la tâche doit commencer</span>
                                            </div>
                                            ";
        // line 1191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1191, $this->source); })()), "dateDebut", [], "any", false, false, false, 1191), 'errors');
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
        // line 1202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1202, $this->source); })()), "dateFin", [], "any", false, false, false, 1202), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1204
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Date limite pour terminer la tâche</span>
                                            </div>
                                            ";
        // line 1209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1209, $this->source); })()), "dateFin", [], "any", false, false, false, 1209), 'errors');
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
        // line 1231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1231, $this->source); })()), "user", [], "any", false, false, false, 1231), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1233
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Assignez cette tâche à un utilisateur spécifique (optionnel)</span>
                                            </div>
                                            ";
        // line 1238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1238, $this->source); })()), "user", [], "any", false, false, false, 1238), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    
                                    <div class=\"form-actions-right\">
                                        <a href=\"";
        // line 1247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
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
        // line 1258
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1258, $this->source); })()), 'form_end');
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
                                <div class=\"icon\" style=\"background: var(--warning-gradient);\">
                                    <i class=\"mdi mdi-alert\"></i>
                                </div>
                                <h6>Points d'attention</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span>Vérifiez que les dates soient cohérentes (début avant fin)</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span>Adaptez le statut en fonction de l'avancement réel</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span>La durée estimée aide à planifier votre temps</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span>L'assignation permet de notifier l'utilisateur concerné</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--info-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils de modification</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Mettez à jour régulièrement le statut de vos tâches</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Ajustez la priorité si les circonstances changent</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Prolongez les échéances si nécessaire pour rester réaliste</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Utilisez la suppression avec précaution (action irréversible)</span>
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
        // line 1330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        Modification de tâche - Système de gestion
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for form enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Duration converter
        const dureeInput = document.querySelector('#tache_dureeEstimee');
        const durationInfo = document.getElementById('duration-info');
        
        if (dureeInput && durationInfo) {
            function updateDuration() {
                const minutes = parseInt(dureeInput.value) || 0;
                const hours = Math.floor(minutes / 60);
                const remainingMinutes = minutes % 60;
                
                let display = '';
                if (hours > 0) {
                    display = \${hours}h \${remainingMinutes}min;
                } else {
                    display = \${minutes} minutes;
                }
                
                let emoji = '⏱️';
                if (minutes < 30) emoji = '🔵';
                else if (minutes < 120) emoji = '🟡';
                else if (minutes < 480) emoji = '🟠';
                else emoji = '🔴';
                
                durationInfo.innerHTML = `
                    <div class=\"alert alert-light d-flex align-items-center gap-2 p-3 mb-0\">
                        <span style=\"font-size: 1.5rem;\">\${emoji}</span>
                        <div>
                            <strong>Durée convertie:</strong> \${display}
                            \${minutes >= 480 ? '<br><small class=\"text-warning\">⚠️ Tâche longue durée - envisagez de la diviser</small>' : ''}
                        </div>
                    </div>
                `;
            }
            
            dureeInput.addEventListener('input', updateDuration);
            updateDuration(); // Initial update
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
                
                // Validate dates
                const dateDebut = document.querySelector('#tache_dateDebut');
                const dateFin = document.querySelector('#tache_dateFin');
                
                if (dateDebut && dateFin && dateDebut.value && dateFin.value) {
                    const debut = new Date(dateDebut.value);
                    const fin = new Date(dateFin.value);
                    
                    if (debut > fin) {
                        alert('⚠️ La date de début ne peut pas être après la date de fin !');
                        dateDebut.classList.add('is-invalid');
                        dateFin.classList.add('is-invalid');
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
        return "tache/edit.html.twig";
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
        return array (  1719 => 1330,  1644 => 1258,  1630 => 1247,  1618 => 1238,  1611 => 1233,  1609 => 1231,  1584 => 1209,  1577 => 1204,  1575 => 1202,  1561 => 1191,  1554 => 1186,  1552 => 1184,  1526 => 1161,  1519 => 1156,  1517 => 1154,  1503 => 1143,  1496 => 1138,  1494 => 1136,  1478 => 1123,  1471 => 1118,  1469 => 1116,  1453 => 1103,  1446 => 1098,  1444 => 1095,  1421 => 1075,  1402 => 1058,  1398 => 1056,  1392 => 1054,  1390 => 1053,  1383 => 1048,  1379 => 1046,  1373 => 1044,  1371 => 1043,  1364 => 1038,  1358 => 1034,  1356 => 1033,  1351 => 1030,  1349 => 1029,  1344 => 1026,  1342 => 1025,  1332 => 1018,  1326 => 1014,  1320 => 1010,  1318 => 1009,  1313 => 1006,  1311 => 1005,  1306 => 1002,  1304 => 1001,  1299 => 998,  1297 => 997,  1271 => 974,  1262 => 968,  1253 => 962,  1242 => 953,  1236 => 952,  1225 => 947,  1219 => 944,  1213 => 942,  1208 => 941,  1204 => 940,  1180 => 920,  1165 => 908,  1151 => 898,  1149 => 897,  1145 => 895,  1140 => 892,  1136 => 890,  1132 => 888,  1128 => 886,  1126 => 885,  1121 => 883,  1114 => 882,  1112 => 881,  1105 => 876,  1098 => 873,  1092 => 869,  1088 => 867,  1084 => 865,  1082 => 864,  1074 => 861,  1070 => 859,  1063 => 856,  1060 => 855,  1054 => 852,  1049 => 851,  1047 => 850,  1044 => 849,  1042 => 848,  1000 => 809,  984 => 796,  960 => 775,  921 => 738,  912 => 732,  909 => 731,  900 => 725,  897 => 724,  895 => 723,  878 => 708,  873 => 705,  869 => 703,  865 => 701,  861 => 699,  859 => 698,  854 => 696,  847 => 695,  845 => 694,  840 => 691,  834 => 689,  831 => 688,  824 => 685,  821 => 684,  815 => 681,  810 => 680,  807 => 679,  805 => 678,  794 => 670,  790 => 669,  785 => 667,  781 => 666,  130 => 18,  126 => 17,  121 => 15,  117 => 14,  113 => 13,  109 => 12,  100 => 5,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier la Tâche{% endblock %}
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
          <a class=\"sidebar-brand brand-logo\" href=\"{{ path(is_granted('ROLE_ADMIN') ? 'app_user_index' : 'app_user_profile') }}\">
            <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"{{ path(is_granted('ROLE_ADMIN') ? 'app_user_index' : 'app_user_profile') }}\">
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
          
          <li class=\"nav-item menu-items active\">
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
            <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
          </div>
          <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <ul class=\"navbar-nav w-100\">
              <li class=\"nav-item w-100\">
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une tâche...\">
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
                        <i class=\"mdi mdi-alert-circle\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Tâche urgente</p>
                      <p class=\"text-muted ellipsis mb-0\">La tâche \"Correction bug\" est due demain</p>
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
                            <i class=\"mdi mdi-pencil-box\"></i>
                        </div>
                        <div>
                            <h3>Modifier la Tâche</h3>
                            <p class=\"subtitle\">Mettez à jour les informations de la tâche \"{{ tache.titre }}\"</p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_tache_index') }}\">
                                    <i class=\"mdi mdi-checkbox-marked-circle-outline me-1\"></i>
                                    Liste des Tâches
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_tache_show', {'id': tache.id}) }}\">
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

                <!-- Current Task Info -->
                <div class=\"current-info-card\">
                    <h5>
                        <i class=\"mdi mdi-information\"></i>
                        Informations actuelles de la tâche
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Statut actuel:</span>
                                <span class=\"info-value\">
                                    {% if tache.statut == 'A_FAIRE' %}
                                        <span class=\"status-badge a-faire\">
                                            <i class=\"mdi mdi-clock-outline\"></i> À faire
                                        </span>
                                    {% elseif tache.statut == 'EN_COURS' %}
                                        <span class=\"status-badge en-cours\">
                                            <i class=\"mdi mdi-progress-clock\"></i> En cours
                                        </span>
                                    {% elseif tache.statut == 'TERMINEE' %}
                                        <span class=\"status-badge terminee\">
                                            <i class=\"mdi mdi-check-circle\"></i> Terminée
                                        </span>
                                    {% elseif tache.statut == 'EN_RETARD' %}
                                        <span class=\"status-badge en-retard\">
                                            <i class=\"mdi mdi-alert-circle\"></i> En retard
                                        </span>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Type:</span>
                                <span class=\"info-value\">{{ tache.type }}</span>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Priorité:</span>
                                <span class=\"info-value\">
                                    {% if tache.priorite == 'FAIBLE' %}
                                        <span class=\"priority-badge faible\">
                                            <i class=\"mdi mdi-flag\"></i> Faible
                                        </span>
                                    {% elseif tache.priorite == 'MOYEN' %}
                                        <span class=\"priority-badge moyen\">
                                            <i class=\"mdi mdi-flag\"></i> Moyenne
                                        </span>
                                    {% elseif tache.priorite == 'ELEVEE' %}
                                        <span class=\"priority-badge elevee\">
                                            <i class=\"mdi mdi-flag\"></i> Haute
                                        </span>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Utilisateur assigné:</span>
                                <span class=\"info-value\">
                                    {% if tache.user %}
                                        {{ tache.user.email }}
                                    {% else %}
                                        <em class=\"text-muted\">Non assigné</em>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Créée le:</span>
                                <span class=\"info-value\">
                                    {% if tache.dateDebut %}
                                        {{ tache.dateDebut|date('d/m/Y H:i') }}
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
                                    <i class=\"mdi mdi-file-document-edit\"></i>
                                </div>
                                <h4>Formulaire de modification</h4>
                            </div>
                            <div class=\"card-body p-4\">
                                {{ form_start(form, {'attr': {'class': 'form-sample', 'id': 'tache-form'}}) }}
                                
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
                                                Titre de la tâche
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            {{ form_widget(form.titre, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: Correction du bug de connexion'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Donnez un titre clair et concis à votre tâche</span>
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
                                                Type de tâche
                                                <span class=\"required-star\">*</span>
                                            </label>
                                            {{ form_widget(form.type, {'attr': {
                                                'class': 'form-select'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Sélectionnez le type qui correspond le mieux à votre tâche</span>
                                            </div>
                                            {{ form_errors(form.type) }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
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
                                                <span>Définissez l'urgence et l'importance de la tâche</span>
                                            </div>
                                            {{ form_errors(form.priorite) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
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
                                                <span>État actuel de la tâche dans son cycle de vie</span>
                                            </div>
                                            {{ form_errors(form.statut) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 2: Planning & Dates -->
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
                                                <span>Date à laquelle la tâche doit commencer</span>
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
                                                <span>Date limite pour terminer la tâche</span>
                                            </div>
                                            {{ form_errors(form.dateFin) }}
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
                                                <span>Assignez cette tâche à un utilisateur spécifique (optionnel)</span>
                                            </div>
                                            {{ form_errors(form.user) }}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    
                                    <div class=\"form-actions-right\">
                                        <a href=\"{{ path('app_tache_index') }}\" class=\"btn-custom-secondary\">
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
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Info Cards -->
                <div class=\"row mt-4\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--warning-gradient);\">
                                    <i class=\"mdi mdi-alert\"></i>
                                </div>
                                <h6>Points d'attention</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span>Vérifiez que les dates soient cohérentes (début avant fin)</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span>Adaptez le statut en fonction de l'avancement réel</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span>La durée estimée aide à planifier votre temps</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span>L'assignation permet de notifier l'utilisateur concerné</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--info-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils de modification</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Mettez à jour régulièrement le statut de vos tâches</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Ajustez la priorité si les circonstances changent</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Prolongez les échéances si nécessaire pour rester réaliste</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Utilisez la suppression avec précaution (action irréversible)</span>
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
                        Modification de tâche - Système de gestion
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for form enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Duration converter
        const dureeInput = document.querySelector('#tache_dureeEstimee');
        const durationInfo = document.getElementById('duration-info');
        
        if (dureeInput && durationInfo) {
            function updateDuration() {
                const minutes = parseInt(dureeInput.value) || 0;
                const hours = Math.floor(minutes / 60);
                const remainingMinutes = minutes % 60;
                
                let display = '';
                if (hours > 0) {
                    display = \${hours}h \${remainingMinutes}min;
                } else {
                    display = \${minutes} minutes;
                }
                
                let emoji = '⏱️';
                if (minutes < 30) emoji = '🔵';
                else if (minutes < 120) emoji = '🟡';
                else if (minutes < 480) emoji = '🟠';
                else emoji = '🔴';
                
                durationInfo.innerHTML = `
                    <div class=\"alert alert-light d-flex align-items-center gap-2 p-3 mb-0\">
                        <span style=\"font-size: 1.5rem;\">\${emoji}</span>
                        <div>
                            <strong>Durée convertie:</strong> \${display}
                            \${minutes >= 480 ? '<br><small class=\"text-warning\">⚠️ Tâche longue durée - envisagez de la diviser</small>' : ''}
                        </div>
                    </div>
                `;
            }
            
            dureeInput.addEventListener('input', updateDuration);
            updateDuration(); // Initial update
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
                
                // Validate dates
                const dateDebut = document.querySelector('#tache_dateDebut');
                const dateFin = document.querySelector('#tache_dateFin');
                
                if (dateDebut && dateFin && dateDebut.value && dateFin.value) {
                    const debut = new Date(dateDebut.value);
                    const fin = new Date(dateFin.value);
                    
                    if (debut > fin) {
                        alert('⚠️ La date de début ne peut pas être après la date de fin !');
                        dateDebut.classList.add('is-invalid');
                        dateFin.classList.add('is-invalid');
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

", "tache/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\tache\\edit.html.twig");
    }
}
