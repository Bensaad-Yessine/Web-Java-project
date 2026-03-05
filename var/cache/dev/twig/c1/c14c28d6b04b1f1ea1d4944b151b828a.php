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

/* preference_alerte/index.html.twig */
class __TwigTemplate_ef6b8eb71935787121f5433501b28248 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/index.html.twig"));

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

        yield "Liste des Tâches";
        
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
    <title>ESPRIT - Gestion des Tâches</title>
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
      /* Modern gradient backgrounds for cards */
      .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
        border: none;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        animation: fadeIn 0.6s ease;
      }
      .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
      }
      .stat-icon {
        width: 70px;
        height: 70px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: white;
        margin: 0 auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      }
      .stat-count {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 5px;
        color: #2c3e50;
      }
      .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        font-weight: 600;
      }
      
      /* Enhanced gradients */
      .card-1 { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .card-4 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-5 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      
      /* Enhanced badges */
      .badge {
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 20px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        border: none;
      }
      
      .badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
      }
      
      .badge-info { background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%); color: white; }
      .badge-success { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
      .badge-warning { background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%); color: white; }
      .badge-danger { background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%); color: white; }
      .badge-primary { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); color: white; }
      .badge-secondary { background: linear-gradient(135deg, #6c757d 0%, #495057 100%); color: white; }
      
      /* Enhanced user avatars */
      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 16px;
        flex-shrink: 0;
        box-shadow: 0 3px 8px rgba(106, 17, 203, 0.3);
      }
      
      .user-avatar-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 3px 8px rgba(0,0,0,0.15);
      }
      
      .profile-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 20px;
        margin-right: 15px;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(106, 17, 203, 0.3);
      }
      
      .profile-avatar-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      }
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border: none;
      }
      
      .badge-prof {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
        border: none;
      }
      
      /* Enhanced action buttons */
      .action-buttons {
        display: flex;
        gap: 8px;
      }
      
      .btn-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        border: none;
      }
      
      .btn-info {
        background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
        color: white;
        box-shadow: 0 3px 8px rgba(91, 134, 229, 0.3);
      }
      
      .btn-warning {
        background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%);
        color: white;
        box-shadow: 0 3px 8px rgba(249, 212, 35, 0.3);
      }
      
      .btn-danger {
        background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
        color: white;
        box-shadow: 0 3px 8px rgba(255, 65, 108, 0.3);
      }
      
      .btn-icon:hover {
        transform: translateY(-3px) scale(1.1);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      }
      
      /* Enhanced table styling - FIXED: Keep text light */
      .table-card {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        border: none;
        animation: slideUp 0.6s ease;
      }
      
      .table-card .card-body {
        padding: 1.5rem;
      }
      
      .table-hover tbody tr {
        transition: all 0.25s ease;
        border-bottom: 1px solid rgba(0,0,0,0.05);
      }
      
      .table-hover tbody tr:hover {
        background: linear-gradient(135deg, rgba(106, 17, 203, 0.05) 0%, rgba(37, 117, 252, 0.05) 100%);
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      }
      
      .table thead th {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        color: white;
        border: none;
        font-weight: 600;
        padding: 1rem 1rem;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.8px;
        position: relative;
      }
      
      .table thead th:first-child {
        border-top-left-radius: 16px;
      }
      
      .table thead th:last-child {
        border-top-right-radius: 16px;
      }
      
      /* FIX: This ensures text in table cells remains light colored */
      .table tbody td {
        padding: 1rem 1rem;
        vertical-align: middle;
        color: #6c757d !important; /* Light text color - IMPORTANT to override Bootstrap */
        font-weight: 500;
      }
      
      /* Enhanced buttons */
      .btn-gradient-primary {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(106, 17, 203, 0.3);
      }
      
      .btn-gradient-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(106, 17, 203, 0.4);
        color: white;
      }
      
      /* Enhanced empty state */
      .empty-state {
        text-align: center;
        padding: 60px 20px;
        animation: fadeIn 0.8s ease;
      }
      
      .empty-state i {
        font-size: 80px;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
      }

      /* Enhanced alert */
      .alert {
        border-radius: 12px;
        border: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        padding: 15px 20px;
        animation: fadeIn 0.5s ease;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 4px 12px;
        border-radius: 12px;
        margin-top: 5px;
        display: inline-block;
        font-weight: 600;
      }
      /* IMPROVED Filter Container */
      /* Darker & modern filter container */
      .filter-container-card {
        background: linear-gradient(135deg, rgba(10, 25, 60, 0.9) 0%, rgba(15, 35, 80, 0.95) 100%);
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.1);
        animation: fadeIn 0.5s ease;
        color: #f2f2f2; /* soft white text, not too harsh */
      }
      
      .filter-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid rgba(106, 17, 203, 0.1);
      }
      
      .filter-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #2c3e50;
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }
      
      .filter-title i {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 1.5rem;
      }
      
      .filter-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        margin-bottom: 1.5rem;
      }
      
      .filter-group {
        margin-bottom: 0;
      }
      
      .filter-label {
        display: block;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #495057;
        font-size: 0.9rem;
      }
      
      .filter-input-group {
        position: relative;
      }
      
      .filter-input {
        width: 100%;
        padding: 0.75rem 1rem 0.75rem 3rem;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: white;
        color: #495057;
      }
      
      .filter-input:focus {
        outline: none;
        border-color: #6a11cb;
        box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
      }
      
      .filter-select {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: white;
        color: #495057;
        cursor: pointer;
      }
      
      .filter-select:focus {
        outline: none;
        border-color: #6a11cb;
        box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
      }
      
      .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6a11cb;
        font-size: 1.2rem;
      }
      
      .filter-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1.5rem;
        border-top: 2px solid rgba(106, 17, 203, 0.1);
      }
      
      .results-info {
        color: #6c757d;
        font-weight: 500;
      }
      
      .results-info i {
        color: #6a11cb;
      }
      
      .btn-apply {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }
      
      .btn-apply:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(106, 17, 203, 0.3);
      }
      
      .btn-clear {
        background: transparent;
        color: #6c757d;
        border: 2px solid #e9ecef;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }
      
      .btn-clear:hover {
        background: #f8f9fa;
        border-color: #6a11cb;
        color: #6a11cb;
      }
      
      .action-buttons {
        display: flex;
        gap: 0.75rem;
      }
      
      /* Original styles kept for compatibility */
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
      
      /* Animations */
      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }
      
      @keyframes slideUp {
        from { 
          opacity: 0;
          transform: translateY(30px);
        }
        to { 
          opacity: 1;
          transform: translateY(0);
        }
      }
      
      /* Avatar placeholder */
      .avatar-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-weight: bold;
        color: white;
      }
      
      /* Notification badges in table */
      .notification-badge {
        margin: 2px;
        font-size: 0.75rem;
        padding: 4px 10px;
        border-radius: 15px;
        display: inline-flex;
        align-items: center;
      }
      
      /* Progress indicators */
      .progress {
        background-color: rgba(0,0,0,0.05);
        border-radius: 10px;
        overflow: hidden;
        height: 8px;
      }
      
      .progress-bar {
        border-radius: 10px;
        background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
        transition: width 1s ease-in-out;
      }
      
      /* Footer styling */
      .footer {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-top: 1px solid rgba(0,0,0,0.08);
        padding: 20px 0;
        margin-top: 30px;
        animation: fadeIn 1s ease;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar - UNCHANGED -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <!-- Keep all sidebar content exactly as is -->
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 561
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 564
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 565
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
        // line 573
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 573, $this->source); })()), "user", [], "any", false, false, false, 573)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 574
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 574, $this->source); })()), "user", [], "any", false, false, false, 574), "profilePic", [], "any", false, false, false, 574)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 575
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 575, $this->source); })()), "user", [], "any", false, false, false, 575), "profilePic", [], "any", false, false, false, 575))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 576
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 576, $this->source); })()), "user", [], "any", false, false, false, 576), "prenom", [], "any", false, false, false, 576), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 579
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 580
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 580, $this->source); })()), "user", [], "any", false, false, false, 580), "prenom", [], "any", false, false, false, 580))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 580, $this->source); })()), "user", [], "any", false, false, false, 580), "nom", [], "any", false, false, false, 580))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 583
            yield "                  ";
        } else {
            // line 584
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 586
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 589
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 589, $this->source); })()), "user", [], "any", false, false, false, 589)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 590
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 590, $this->source); })()), "user", [], "any", false, false, false, 590), "prenom", [], "any", false, false, false, 590), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 590, $this->source); })()), "user", [], "any", false, false, false, 590), "nom", [], "any", false, false, false, 590), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "email", [], "any", false, false, false, 591), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 593
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 593, $this->source); })()), "user", [], "any", false, false, false, 593), "roles", [], "any", false, false, false, 593))) {
                // line 594
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 596
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 598
            yield "                    </div>
                  ";
        } else {
            // line 600
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 603
        yield "                </div>
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
        // line 623
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
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-school\"></i>
              </span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <!-- Salles -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-office-building\"></i>
              </span>
              <span class=\"menu-title\">Salles</span>
            </a>
          </li>
          
          <!-- Séances -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
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
        // line 683
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
              </span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <!-- Alertes -->
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 693
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-alert-circle-outline\"></i>
              </span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <!-- Exercices de santé -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 703
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
        // line 713
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
        <!-- Navbar - UNCHANGED -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <img src=\"";
        // line 728
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
        // line 767
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 767, $this->source); })()), "user", [], "any", false, false, false, 767)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 768
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 769
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 769, $this->source); })()), "user", [], "any", false, false, false, 769), "profilePic", [], "any", false, false, false, 769)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 770
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 770, $this->source); })()), "user", [], "any", false, false, false, 770), "profilePic", [], "any", false, false, false, 770))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 771
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 771, $this->source); })()), "user", [], "any", false, false, false, 771), "prenom", [], "any", false, false, false, 771), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 774
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 775
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 775, $this->source); })()), "user", [], "any", false, false, false, 775), "prenom", [], "any", false, false, false, 775))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 775, $this->source); })()), "user", [], "any", false, false, false, 775), "nom", [], "any", false, false, false, 775))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 778
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 780
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 780, $this->source); })()), "user", [], "any", false, false, false, 780), "prenom", [], "any", false, false, false, 780), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 780, $this->source); })()), "user", [], "any", false, false, false, 780), "nom", [], "any", false, false, false, 780), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 783
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 783, $this->source); })()), "user", [], "any", false, false, false, 783), "roles", [], "any", false, false, false, 783))) {
                // line 784
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 786
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 788
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 792
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 795
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 800
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 800, $this->source); })()), "user", [], "any", false, false, false, 800)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 801
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 801, $this->source); })()), "user", [], "any", false, false, false, 801), "prenom", [], "any", false, false, false, 801), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 801, $this->source); })()), "user", [], "any", false, false, false, 801), "nom", [], "any", false, false, false, 801), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 802
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 802, $this->source); })()), "user", [], "any", false, false, false, 802), "email", [], "any", false, false, false, 802), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 804
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 804, $this->source); })()), "user", [], "any", false, false, false, 804), "roles", [], "any", false, false, false, 804))) {
                // line 805
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 807
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 809
            yield "                      </small>
                    ";
        } else {
            // line 811
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 814
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 816
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 816, $this->source); })()), "user", [], "any", false, false, false, 816)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 817
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 817, $this->source); })()), "user", [], "any", false, false, false, 817), "id", [], "any", false, false, false, 817)]), "html", null, true);
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
            // line 827
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 827, $this->source); })()), "user", [], "any", false, false, false, 827), "id", [], "any", false, false, false, 827)]), "html", null, true);
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
        // line 839
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
        // line 859
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 859, $this->source); })()), "flashes", [], "any", false, false, false, 859));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 860
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 861
                yield "                        <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                            <i class=\"mdi mdi-";
                // line 862
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                            ";
                // line 863
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 867
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 868
        yield "
                <!-- Header - UNCHANGED -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"page-header\">
                            <h3 class=\"page-title\">
                                <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                                    <i class=\"mdi mdi-alert-circle-outline\"></i>
                                </span> 
                                Gestion des Préférences d'Alerte
                            </h3>
                            <nav aria-label=\"breadcrumb\">
                                <ul class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <span></span>Configuration des alertes et notifications
                                    </li>
                                </ul>
                            </nav>
                            ";
        // line 886
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 886, $this->source); })()), "user", [], "any", false, false, false, 886)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 887
            yield "                                <div class=\"mt-2\">
                                    <small class=\"text-muted\">
                                        <i class=\"mdi mdi-account me-1\"></i>
                                        Connecté en tant que: <strong>";
            // line 890
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 890, $this->source); })()), "user", [], "any", false, false, false, 890), "prenom", [], "any", false, false, false, 890), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 890, $this->source); })()), "user", [], "any", false, false, false, 890), "nom", [], "any", false, false, false, 890), "html", null, true);
            yield "</strong>
                                        (";
            // line 891
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 891, $this->source); })()), "user", [], "any", false, false, false, 891), "email", [], "any", false, false, false, 891), "html", null, true);
            yield ")
                                        ";
            // line 892
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 892, $this->source); })()), "user", [], "any", false, false, false, 892), "roles", [], "any", false, false, false, 892))) {
                // line 893
                yield "                                            <span class=\"badge badge-admin ms-2\">Administrateur</span>
                                        ";
            }
            // line 895
            yield "                                    </small>
                                </div>
                            ";
        }
        // line 898
        yield "                        </div>
                    </div>
                </div>
                
                <!-- Enhanced Statistics -->
                <div class=\"row\">
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0 stat-count\">";
        // line 910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 910, $this->source); })())), "html", null, true);
        yield "</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+0%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-1\">
                                            <i class=\"mdi mdi-bell-ring-outline\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Total Préférences</h6>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: ";
        // line 922
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 922, $this->source); })())) / 10) * 100), "html", null, true);
        yield "%\"></div>
                                </div>
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
        // line 933
        $context["actives"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 933, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 933, $this->source); })()), "isActive", [], "any", false, false, false, 933); }));
        // line 934
        yield "                                            <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actives"]) || array_key_exists("actives", $context) ? $context["actives"] : (function () { throw new RuntimeError('Variable "actives" does not exist.', 934, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"text-warning ms-2 mb-0 font-weight-medium\">+0%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-2\">
                                            <i class=\"mdi mdi-bell-check\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Alertes Actives</h6>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: ";
        // line 946
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 946, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["actives"]) || array_key_exists("actives", $context) ? $context["actives"] : (function () { throw new RuntimeError('Variable "actives" does not exist.', 946, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 946, $this->source); })()))) * 100), "html", null, true)) : (0));
        yield "%\"></div>
                                </div>
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
        // line 957
        $context["emails"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 957, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 957, $this->source); })()), "emailActif", [], "any", false, false, false, 957); }));
        // line 958
        yield "                                            <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 958, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"text-danger ms-2 mb-0 font-weight-medium\">+0%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-3\">
                                            <i class=\"mdi mdi-email-outline\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Notifications Email</h6>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: ";
        // line 970
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 970, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 970, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 970, $this->source); })()))) * 100), "html", null, true)) : (0));
        yield "%\"></div>
                                </div>
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
        // line 981
        $context["inapps"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 981, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 981, $this->source); })()), "pushActif", [], "any", false, false, false, 981); }));
        // line 982
        yield "                                            <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inapps"]) || array_key_exists("inapps", $context) ? $context["inapps"] : (function () { throw new RuntimeError('Variable "inapps" does not exist.', 982, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+0%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-4\">
                                            <i class=\"mdi mdi-bell-outline\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Notifications In-App</h6>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: ";
        // line 994
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 994, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["inapps"]) || array_key_exists("inapps", $context) ? $context["inapps"] : (function () { throw new RuntimeError('Variable "inapps" does not exist.', 994, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 994, $this->source); })()))) * 100), "html", null, true)) : (0));
        yield "%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IMPROVED AJAX Filter/Search/Sort for Préférences d'Alerte -->
                <div class=\"row\">
                  <div class=\"col-12 grid-margin\">
                    <div class=\"filter-container-card\">
                      <div class=\"filter-header\">
                        <div class=\"filter-title\">
                          <i class=\"mdi mdi-filter-variant\"></i>
                          Filtres, Tri & Recherche
                        </div>
                        <a href=\"";
        // line 1010
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_new");
        yield "\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Nouvelle Préférence
                        </a>
                      </div>
                      <div class=\"filter-grid\">
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">Recherche par titre</label>
                          <div class=\"filter-input-group\">
                            <i class=\"mdi mdi-format-title input-icon\"></i>
                            <input type=\"text\" id=\"searchTitre\" name=\"titre\" class=\"filter-input\" placeholder=\"Saisir un titre...\" value=\"";
        // line 1020
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("titre", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 1020, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                          </div>
                        </div>
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">ID Étudiant</label>
                          <div class=\"filter-input-group\">
                            <i class=\"mdi mdi-account input-icon\"></i>
                            <input type=\"number\" id=\"searchEtudiantId\" name=\"etudiantId\" class=\"filter-input\" placeholder=\"ID de l'étudiant...\" value=\"";
        // line 1027
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("etudiantId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["etudiantId"]) || array_key_exists("etudiantId", $context) ? $context["etudiantId"] : (function () { throw new RuntimeError('Variable "etudiantId" does not exist.', 1027, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                          </div>
                        </div>
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">Statut</label>
                          <select id=\"filterStatut\" class=\"filter-select\" name=\"statut\">
                            <option value=\"\">Tous</option>
                            <option value=\"1\" ";
        // line 1034
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 1034, $this->source); })()) == "1")) {
            yield "selected";
        }
        yield ">Active</option>
                            <option value=\"0\" ";
        // line 1035
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 1035, $this->source); })()) == "0")) {
            yield "selected";
        }
        yield ">Inactive</option>
                          </select>
                        </div>
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">Défaut</label>
                          <select id=\"filterIsDefault\" class=\"filter-select\" name=\"isDefault\">
                            <option value=\"\">Tous</option>
                            <option value=\"1\" ";
        // line 1042
        if (((isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 1042, $this->source); })()) == "1")) {
            yield "selected";
        }
        yield ">Oui</option>
                            <option value=\"0\" ";
        // line 1043
        if (((isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 1043, $this->source); })()) == "0")) {
            yield "selected";
        }
        yield ">Non</option>
                          </select>
                        </div>
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">Tri par date</label>
                          <select id=\"sortDateCreation\" class=\"filter-select\">
                            <option value=\"desc\" ";
        // line 1049
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 1049, $this->source); })()) == "desc")) {
            yield "selected";
        }
        yield ">Plus récent d'abord</option>
                            <option value=\"asc\" ";
        // line 1050
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 1050, $this->source); })()) == "asc")) {
            yield "selected";
        }
        yield ">Plus ancien d'abord</option>
                          </select>
                        </div>
                      </div>
                      <div class=\"filter-actions\">
                        <div class=\"results-info\">
                          <span>
                            <i class=\"mdi mdi-information-outline me-1\"></i>
                            ";
        // line 1058
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 1058, $this->source); })())), "html", null, true);
        yield " préférence";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 1058, $this->source); })())) > 1)) ? ("s") : (""));
        yield " trouvée";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 1058, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                          </span>
                        </div>
                        <div class=\"action-buttons\">
                          <button type=\"button\" class=\"btn-clear\" id=\"clearFilters\">
                            <i class=\"mdi mdi-filter-remove\"></i>
                            Effacer filtres
                          </button>
                          <button type=\"button\" class=\"btn-apply\" id=\"applyFilters\">
                            <i class=\"mdi mdi-check\"></i>
                            Appliquer
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class=\"card table-card mt-4\">
                      <div class=\"card-body\">
                        <h4 class=\"card-title mb-4\">🔔 Liste des Préférences d'Alerte</h4>
                        <div class=\"table-responsive\">
                          <table class=\"table table-hover\" id=\"alerteTable\">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Utilisateur</th>
                                <th>Créé le</th>
                                <th>Statut</th>
                                <th>Défaut</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody id=\"alerteTableBody\" data-url=\"";
        // line 1089
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\">
                              ";
        // line 1090
        yield Twig\Extension\CoreExtension::include($this->env, $context, "preference_alerte/_rows.html.twig", ["preference_alertes" => (isset($context["preference_alertes"]) || array_key_exists("preference_alertes", $context) ? $context["preference_alertes"] : (function () { throw new RuntimeError('Variable "preference_alertes" does not exist.', 1090, $this->source); })())]);
        yield "
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

    

    <!-- Enhanced Delete Confirmation Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\" style=\"border-radius: 16px; overflow: hidden; border: none;\">
          <div class=\"modal-header\" style=\"
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            border: none;
          \">
            <h5 class=\"modal-title\" id=\"deleteModalLabel\">
              <i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression
            </h5>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body text-center py-4\">
            <div class=\"mb-3\">
              <i class=\"mdi mdi-alert-circle-outline\" style=\"font-size: 60px; color: #ff416c;\"></i>
            </div>
            <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer cette préférence ?</h5>
            <p class=\"text-muted\">Cette action est irréversible et supprimera définitivement la préférence d'alerte.</p>
          </div>
          <div class=\"modal-footer justify-content-center border-0 pt-0\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" style=\"
              padding: 10px 24px;
              border-radius: 12px;
              font-weight: 600;
            \">
              <i class=\"mdi mdi-close me-2\"></i>Annuler
            </button>
            <button type=\"button\" class=\"btn btn-gradient-danger\" id=\"confirmDelete\">
              <i class=\"mdi mdi-delete me-2\"></i>Supprimer
            </button>
          </div>
        </div>
      </div>
    </div>

   <!-- Scripts -->
    <script src=\"";
        // line 1139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // -------------------------
        // 1️⃣ AJAX SEARCH + FILTER + SORT
        // -------------------------
        const titreInput = document.getElementById('searchTitre');
        const etudiantInput = document.getElementById('searchEtudiantId');
        const statutSelect = document.getElementById('filterStatut');
        const isDefaultSelect = document.getElementById('filterIsDefault');
        const sortSelect = document.getElementById('sortDateCreation');
        const applyBtn = document.getElementById('applyFilters');
        const clearBtn = document.getElementById('clearFilters');
        const tbody = document.getElementById('alerteTableBody');

        let ajaxTimer;
        const debounce = (fn, delay = 350) => (...args) => {
          clearTimeout(ajaxTimer);
          ajaxTimer = setTimeout(() => fn(...args), delay);
        };

        async function reloadAlertesAjax() {
          if (!tbody) return;
          const url = tbody.dataset.url;
          if (!url) return;

          tbody.innerHTML = `
            <tr><td colspan=\"7\" class=\"text-center py-5\">
              <div class=\"d-flex flex-column align-items-center\">
                <div class=\"spinner-border text-primary mb-3\" role=\"status\" style=\"width: 3rem; height: 3rem;\">
                  <span class=\"visually-hidden\">Chargement...</span>
                </div>
                <p class=\"text-muted\">Chargement des préférences...</p>
              </div>
            </td></tr>
          `;

          const params = new URLSearchParams({
            titre: titreInput ? titreInput.value.trim() : '',
            etudiantId: etudiantInput ? etudiantInput.value : '',
            statut: statutSelect ? statutSelect.value : '',
            isDefault: isDefaultSelect ? isDefaultSelect.value : '',
            sort: sortSelect ? sortSelect.value : 'desc'
          });

          try {
            const res = await fetch(url + '?' + params.toString(), {
              headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const html = await res.text();
            tbody.innerHTML = html;

            // Add animations to new rows
            const ajaxRows = tbody.querySelectorAll('tr');
            ajaxRows.forEach((row, index) => {
              row.style.animationDelay = `\${index * 0.05}s`;
              row.style.animation = 'fadeIn 0.5s ease forwards';
              row.style.opacity = '0';
              setTimeout(() => { row.style.opacity = '1'; }, index * 50);
            });

          } catch (e) {
            tbody.innerHTML = `
              <tr><td colspan=\"7\" class=\"text-center py-5\">
                <div class=\"d-flex flex-column align-items-center\">
                  <i class=\"mdi mdi-alert-circle-outline mb-3\" style=\"font-size: 48px; color: #dc3545;\"></i>
                  <p class=\"text-danger\">Erreur lors du chargement des données</p>
                </div>
              </td></tr>
            `;
          }
        }

        const reloadDebounced = debounce(reloadAlertesAjax, 350);
        if (titreInput) titreInput.addEventListener('input', reloadDebounced);
        if (etudiantInput) etudiantInput.addEventListener('input', reloadDebounced);
        if (statutSelect) statutSelect.addEventListener('change', reloadAlertesAjax);
        if (isDefaultSelect) isDefaultSelect.addEventListener('change', reloadAlertesAjax);
        if (sortSelect) sortSelect.addEventListener('change', reloadAlertesAjax);
        if (applyBtn) applyBtn.addEventListener('click', reloadAlertesAjax);
        if (clearBtn) {
          clearBtn.addEventListener('click', function() {
            if (titreInput) titreInput.value = '';
            if (etudiantInput) etudiantInput.value = '';
            if (statutSelect) statutSelect.value = '';
            if (isDefaultSelect) isDefaultSelect.value = '';
            if (sortSelect) sortSelect.value = 'desc';
            reloadAlertesAjax();
          });
        }

        // -------------------------
        // 2️⃣ UI ANIMATIONS / EFFECTS
        // -------------------------
        // Card animations
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach((card, index) => card.style.animationDelay = `\${index * 0.1}s`);

        // Table row animations for static rows
        const tableRows = document.querySelectorAll('.table tbody tr');
        tableRows.forEach((row, index) => {
          row.style.animationDelay = `\${index * 0.05}s`;
          row.style.animation = 'fadeIn 0.5s ease forwards';
          row.style.opacity = '0';
          setTimeout(() => row.style.opacity = '1', index * 50);
        });

        // Button ripple effect
        const buttons = document.querySelectorAll('.btn-gradient-primary, .btn-icon');
        buttons.forEach(button => {
          button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.cssText = `
              position: absolute;
              border-radius: 50%;
              background: rgba(255, 255, 255, 0.7);
              transform: scale(0);
              animation: ripple 0.6s linear;
              width: \${size}px;
              height: \${size}px;
              top: \${y}px;
              left: \${x}px;
              pointer-events: none;
            `;

            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
          });
        });

        // Inject CSS for animations
        const style = document.createElement('style');
        style.textContent = `
          @keyframes ripple { to { transform: scale(4); opacity: 0; } }
          .table tbody tr { opacity: 0; }
          .table tbody tr:nth-child(odd) { background-color: rgba(0,0,0,0.01); }
          @keyframes fadeIn { to { opacity: 1; } }
        `;
        document.head.appendChild(style);

        // Auto-hide alerts
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert.alert-dismissible');
          alerts.forEach(alert => new bootstrap.Alert(alert).close());
        }, 5000);

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
        return "preference_alerte/index.html.twig";
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
        return array (  1533 => 1141,  1529 => 1140,  1525 => 1139,  1473 => 1090,  1469 => 1089,  1431 => 1058,  1418 => 1050,  1412 => 1049,  1401 => 1043,  1395 => 1042,  1383 => 1035,  1377 => 1034,  1367 => 1027,  1357 => 1020,  1344 => 1010,  1325 => 994,  1309 => 982,  1307 => 981,  1293 => 970,  1277 => 958,  1275 => 957,  1261 => 946,  1245 => 934,  1243 => 933,  1229 => 922,  1214 => 910,  1200 => 898,  1195 => 895,  1191 => 893,  1189 => 892,  1185 => 891,  1179 => 890,  1174 => 887,  1172 => 886,  1152 => 868,  1146 => 867,  1136 => 863,  1132 => 862,  1127 => 861,  1122 => 860,  1117 => 859,  1094 => 839,  1079 => 827,  1065 => 817,  1063 => 816,  1059 => 814,  1054 => 811,  1050 => 809,  1046 => 807,  1042 => 805,  1040 => 804,  1035 => 802,  1028 => 801,  1026 => 800,  1019 => 795,  1012 => 792,  1006 => 788,  1002 => 786,  998 => 784,  996 => 783,  988 => 780,  984 => 778,  977 => 775,  974 => 774,  968 => 771,  963 => 770,  961 => 769,  958 => 768,  956 => 767,  914 => 728,  896 => 713,  883 => 703,  870 => 693,  857 => 683,  794 => 623,  772 => 603,  767 => 600,  763 => 598,  759 => 596,  755 => 594,  753 => 593,  748 => 591,  741 => 590,  739 => 589,  734 => 586,  728 => 584,  725 => 583,  718 => 580,  715 => 579,  709 => 576,  704 => 575,  701 => 574,  699 => 573,  688 => 565,  684 => 564,  679 => 562,  675 => 561,  130 => 19,  126 => 18,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Tâches{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Tâches</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />
    <style>
      /* Modern gradient backgrounds for cards */
      .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
        border: none;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        animation: fadeIn 0.6s ease;
      }
      .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
      }
      .stat-icon {
        width: 70px;
        height: 70px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: white;
        margin: 0 auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      }
      .stat-count {
        font-size: 2.2rem;
        font-weight: 800;
        margin-bottom: 5px;
        color: #2c3e50;
      }
      .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        font-weight: 600;
      }
      
      /* Enhanced gradients */
      .card-1 { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .card-4 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-5 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      
      /* Enhanced badges */
      .badge {
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 20px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        border: none;
      }
      
      .badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
      }
      
      .badge-info { background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%); color: white; }
      .badge-success { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
      .badge-warning { background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%); color: white; }
      .badge-danger { background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%); color: white; }
      .badge-primary { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); color: white; }
      .badge-secondary { background: linear-gradient(135deg, #6c757d 0%, #495057 100%); color: white; }
      
      /* Enhanced user avatars */
      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 16px;
        flex-shrink: 0;
        box-shadow: 0 3px 8px rgba(106, 17, 203, 0.3);
      }
      
      .user-avatar-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 3px 8px rgba(0,0,0,0.15);
      }
      
      .profile-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 20px;
        margin-right: 15px;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(106, 17, 203, 0.3);
      }
      
      .profile-avatar-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      }
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border: none;
      }
      
      .badge-prof {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
        border: none;
      }
      
      /* Enhanced action buttons */
      .action-buttons {
        display: flex;
        gap: 8px;
      }
      
      .btn-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        border: none;
      }
      
      .btn-info {
        background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
        color: white;
        box-shadow: 0 3px 8px rgba(91, 134, 229, 0.3);
      }
      
      .btn-warning {
        background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%);
        color: white;
        box-shadow: 0 3px 8px rgba(249, 212, 35, 0.3);
      }
      
      .btn-danger {
        background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
        color: white;
        box-shadow: 0 3px 8px rgba(255, 65, 108, 0.3);
      }
      
      .btn-icon:hover {
        transform: translateY(-3px) scale(1.1);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      }
      
      /* Enhanced table styling - FIXED: Keep text light */
      .table-card {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        border: none;
        animation: slideUp 0.6s ease;
      }
      
      .table-card .card-body {
        padding: 1.5rem;
      }
      
      .table-hover tbody tr {
        transition: all 0.25s ease;
        border-bottom: 1px solid rgba(0,0,0,0.05);
      }
      
      .table-hover tbody tr:hover {
        background: linear-gradient(135deg, rgba(106, 17, 203, 0.05) 0%, rgba(37, 117, 252, 0.05) 100%);
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      }
      
      .table thead th {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        color: white;
        border: none;
        font-weight: 600;
        padding: 1rem 1rem;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.8px;
        position: relative;
      }
      
      .table thead th:first-child {
        border-top-left-radius: 16px;
      }
      
      .table thead th:last-child {
        border-top-right-radius: 16px;
      }
      
      /* FIX: This ensures text in table cells remains light colored */
      .table tbody td {
        padding: 1rem 1rem;
        vertical-align: middle;
        color: #6c757d !important; /* Light text color - IMPORTANT to override Bootstrap */
        font-weight: 500;
      }
      
      /* Enhanced buttons */
      .btn-gradient-primary {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(106, 17, 203, 0.3);
      }
      
      .btn-gradient-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(106, 17, 203, 0.4);
        color: white;
      }
      
      /* Enhanced empty state */
      .empty-state {
        text-align: center;
        padding: 60px 20px;
        animation: fadeIn 0.8s ease;
      }
      
      .empty-state i {
        font-size: 80px;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
      }

      /* Enhanced alert */
      .alert {
        border-radius: 12px;
        border: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        padding: 15px 20px;
        animation: fadeIn 0.5s ease;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 4px 12px;
        border-radius: 12px;
        margin-top: 5px;
        display: inline-block;
        font-weight: 600;
      }
      /* IMPROVED Filter Container */
      /* Darker & modern filter container */
      .filter-container-card {
        background: linear-gradient(135deg, rgba(10, 25, 60, 0.9) 0%, rgba(15, 35, 80, 0.95) 100%);
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.1);
        animation: fadeIn 0.5s ease;
        color: #f2f2f2; /* soft white text, not too harsh */
      }
      
      .filter-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid rgba(106, 17, 203, 0.1);
      }
      
      .filter-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #2c3e50;
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }
      
      .filter-title i {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 1.5rem;
      }
      
      .filter-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        margin-bottom: 1.5rem;
      }
      
      .filter-group {
        margin-bottom: 0;
      }
      
      .filter-label {
        display: block;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #495057;
        font-size: 0.9rem;
      }
      
      .filter-input-group {
        position: relative;
      }
      
      .filter-input {
        width: 100%;
        padding: 0.75rem 1rem 0.75rem 3rem;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: white;
        color: #495057;
      }
      
      .filter-input:focus {
        outline: none;
        border-color: #6a11cb;
        box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
      }
      
      .filter-select {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: white;
        color: #495057;
        cursor: pointer;
      }
      
      .filter-select:focus {
        outline: none;
        border-color: #6a11cb;
        box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
      }
      
      .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6a11cb;
        font-size: 1.2rem;
      }
      
      .filter-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1.5rem;
        border-top: 2px solid rgba(106, 17, 203, 0.1);
      }
      
      .results-info {
        color: #6c757d;
        font-weight: 500;
      }
      
      .results-info i {
        color: #6a11cb;
      }
      
      .btn-apply {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }
      
      .btn-apply:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(106, 17, 203, 0.3);
      }
      
      .btn-clear {
        background: transparent;
        color: #6c757d;
        border: 2px solid #e9ecef;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }
      
      .btn-clear:hover {
        background: #f8f9fa;
        border-color: #6a11cb;
        color: #6a11cb;
      }
      
      .action-buttons {
        display: flex;
        gap: 0.75rem;
      }
      
      /* Original styles kept for compatibility */
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
      
      /* Animations */
      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }
      
      @keyframes slideUp {
        from { 
          opacity: 0;
          transform: translateY(30px);
        }
        to { 
          opacity: 1;
          transform: translateY(0);
        }
      }
      
      /* Avatar placeholder */
      .avatar-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-weight: bold;
        color: white;
      }
      
      /* Notification badges in table */
      .notification-badge {
        margin: 2px;
        font-size: 0.75rem;
        padding: 4px 10px;
        border-radius: 15px;
        display: inline-flex;
        align-items: center;
      }
      
      /* Progress indicators */
      .progress {
        background-color: rgba(0,0,0,0.05);
        border-radius: 10px;
        overflow: hidden;
        height: 8px;
      }
      
      .progress-bar {
        border-radius: 10px;
        background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
        transition: width 1s ease-in-out;
      }
      
      /* Footer styling */
      .footer {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-top: 1px solid rgba(0,0,0,0.08);
        padding: 20px 0;
        margin-top: 30px;
        animation: fadeIn 1s ease;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar - UNCHANGED -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <!-- Keep all sidebar content exactly as is -->
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
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-school\"></i>
              </span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <!-- Salles -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-office-building\"></i>
              </span>
              <span class=\"menu-title\">Salles</span>
            </a>
          </li>
          
          <!-- Séances -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
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
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"{{ path('app_preference_alerte_index') }}\">
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
        <!-- Navbar - UNCHANGED -->
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
                {# Flash Messages #}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                            <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }} me-2\"></i>
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}

                <!-- Header - UNCHANGED -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"page-header\">
                            <h3 class=\"page-title\">
                                <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                                    <i class=\"mdi mdi-alert-circle-outline\"></i>
                                </span> 
                                Gestion des Préférences d'Alerte
                            </h3>
                            <nav aria-label=\"breadcrumb\">
                                <ul class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <span></span>Configuration des alertes et notifications
                                    </li>
                                </ul>
                            </nav>
                            {% if app.user %}
                                <div class=\"mt-2\">
                                    <small class=\"text-muted\">
                                        <i class=\"mdi mdi-account me-1\"></i>
                                        Connecté en tant que: <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong>
                                        ({{ app.user.email }})
                                        {% if 'ROLE_ADMIN' in app.user.roles %}
                                            <span class=\"badge badge-admin ms-2\">Administrateur</span>
                                        {% endif %}
                                    </small>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
                
                <!-- Enhanced Statistics -->
                <div class=\"row\">
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0 stat-count\">{{ preference_alertes|length }}</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+0%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-1\">
                                            <i class=\"mdi mdi-bell-ring-outline\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Total Préférences</h6>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: {{ (preference_alertes|length / 10) * 100 }}%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            {% set actives = preference_alertes|filter(p => p.isActive)|length %}
                                            <h3 class=\"mb-0 stat-count\">{{ actives }}</h3>
                                            <p class=\"text-warning ms-2 mb-0 font-weight-medium\">+0%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-2\">
                                            <i class=\"mdi mdi-bell-check\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Alertes Actives</h6>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: {{ preference_alertes|length > 0 ? (actives / preference_alertes|length) * 100 : 0 }}%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            {% set emails = preference_alertes|filter(p => p.emailActif)|length %}
                                            <h3 class=\"mb-0 stat-count\">{{ emails }}</h3>
                                            <p class=\"text-danger ms-2 mb-0 font-weight-medium\">+0%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-3\">
                                            <i class=\"mdi mdi-email-outline\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Notifications Email</h6>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: {{ preference_alertes|length > 0 ? (emails / preference_alertes|length) * 100 : 0 }}%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            {% set inapps = preference_alertes|filter(p => p.pushActif)|length %}
                                            <h3 class=\"mb-0 stat-count\">{{ inapps }}</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+0%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-4\">
                                            <i class=\"mdi mdi-bell-outline\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Notifications In-App</h6>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: {{ preference_alertes|length > 0 ? (inapps / preference_alertes|length) * 100 : 0 }}%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IMPROVED AJAX Filter/Search/Sort for Préférences d'Alerte -->
                <div class=\"row\">
                  <div class=\"col-12 grid-margin\">
                    <div class=\"filter-container-card\">
                      <div class=\"filter-header\">
                        <div class=\"filter-title\">
                          <i class=\"mdi mdi-filter-variant\"></i>
                          Filtres, Tri & Recherche
                        </div>
                        <a href=\"{{ path('app_preference_alerte_new') }}\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Nouvelle Préférence
                        </a>
                      </div>
                      <div class=\"filter-grid\">
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">Recherche par titre</label>
                          <div class=\"filter-input-group\">
                            <i class=\"mdi mdi-format-title input-icon\"></i>
                            <input type=\"text\" id=\"searchTitre\" name=\"titre\" class=\"filter-input\" placeholder=\"Saisir un titre...\" value=\"{{ titre|default('') }}\">
                          </div>
                        </div>
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">ID Étudiant</label>
                          <div class=\"filter-input-group\">
                            <i class=\"mdi mdi-account input-icon\"></i>
                            <input type=\"number\" id=\"searchEtudiantId\" name=\"etudiantId\" class=\"filter-input\" placeholder=\"ID de l'étudiant...\" value=\"{{ etudiantId|default('') }}\">
                          </div>
                        </div>
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">Statut</label>
                          <select id=\"filterStatut\" class=\"filter-select\" name=\"statut\">
                            <option value=\"\">Tous</option>
                            <option value=\"1\" {% if statut == '1' %}selected{% endif %}>Active</option>
                            <option value=\"0\" {% if statut == '0' %}selected{% endif %}>Inactive</option>
                          </select>
                        </div>
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">Défaut</label>
                          <select id=\"filterIsDefault\" class=\"filter-select\" name=\"isDefault\">
                            <option value=\"\">Tous</option>
                            <option value=\"1\" {% if isDefault == '1' %}selected{% endif %}>Oui</option>
                            <option value=\"0\" {% if isDefault == '0' %}selected{% endif %}>Non</option>
                          </select>
                        </div>
                        <div class=\"filter-group\">
                          <label class=\"filter-label\">Tri par date</label>
                          <select id=\"sortDateCreation\" class=\"filter-select\">
                            <option value=\"desc\" {% if sort == 'desc' %}selected{% endif %}>Plus récent d'abord</option>
                            <option value=\"asc\" {% if sort == 'asc' %}selected{% endif %}>Plus ancien d'abord</option>
                          </select>
                        </div>
                      </div>
                      <div class=\"filter-actions\">
                        <div class=\"results-info\">
                          <span>
                            <i class=\"mdi mdi-information-outline me-1\"></i>
                            {{ preference_alertes|length }} préférence{{ preference_alertes|length > 1 ? 's' : '' }} trouvée{{ preference_alertes|length > 1 ? 's' : '' }}
                          </span>
                        </div>
                        <div class=\"action-buttons\">
                          <button type=\"button\" class=\"btn-clear\" id=\"clearFilters\">
                            <i class=\"mdi mdi-filter-remove\"></i>
                            Effacer filtres
                          </button>
                          <button type=\"button\" class=\"btn-apply\" id=\"applyFilters\">
                            <i class=\"mdi mdi-check\"></i>
                            Appliquer
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class=\"card table-card mt-4\">
                      <div class=\"card-body\">
                        <h4 class=\"card-title mb-4\">🔔 Liste des Préférences d'Alerte</h4>
                        <div class=\"table-responsive\">
                          <table class=\"table table-hover\" id=\"alerteTable\">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Utilisateur</th>
                                <th>Créé le</th>
                                <th>Statut</th>
                                <th>Défaut</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody id=\"alerteTableBody\" data-url=\"{{ path('app_preference_alerte_index') }}\">
                              {{ include('preference_alerte/_rows.html.twig', { preference_alertes: preference_alertes }) }}
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

    

    <!-- Enhanced Delete Confirmation Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\" style=\"border-radius: 16px; overflow: hidden; border: none;\">
          <div class=\"modal-header\" style=\"
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            border: none;
          \">
            <h5 class=\"modal-title\" id=\"deleteModalLabel\">
              <i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression
            </h5>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body text-center py-4\">
            <div class=\"mb-3\">
              <i class=\"mdi mdi-alert-circle-outline\" style=\"font-size: 60px; color: #ff416c;\"></i>
            </div>
            <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer cette préférence ?</h5>
            <p class=\"text-muted\">Cette action est irréversible et supprimera définitivement la préférence d'alerte.</p>
          </div>
          <div class=\"modal-footer justify-content-center border-0 pt-0\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" style=\"
              padding: 10px 24px;
              border-radius: 12px;
              font-weight: 600;
            \">
              <i class=\"mdi mdi-close me-2\"></i>Annuler
            </button>
            <button type=\"button\" class=\"btn btn-gradient-danger\" id=\"confirmDelete\">
              <i class=\"mdi mdi-delete me-2\"></i>Supprimer
            </button>
          </div>
        </div>
      </div>
    </div>

   <!-- Scripts -->
    <script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('assets/js/misc.js') }}\"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // -------------------------
        // 1️⃣ AJAX SEARCH + FILTER + SORT
        // -------------------------
        const titreInput = document.getElementById('searchTitre');
        const etudiantInput = document.getElementById('searchEtudiantId');
        const statutSelect = document.getElementById('filterStatut');
        const isDefaultSelect = document.getElementById('filterIsDefault');
        const sortSelect = document.getElementById('sortDateCreation');
        const applyBtn = document.getElementById('applyFilters');
        const clearBtn = document.getElementById('clearFilters');
        const tbody = document.getElementById('alerteTableBody');

        let ajaxTimer;
        const debounce = (fn, delay = 350) => (...args) => {
          clearTimeout(ajaxTimer);
          ajaxTimer = setTimeout(() => fn(...args), delay);
        };

        async function reloadAlertesAjax() {
          if (!tbody) return;
          const url = tbody.dataset.url;
          if (!url) return;

          tbody.innerHTML = `
            <tr><td colspan=\"7\" class=\"text-center py-5\">
              <div class=\"d-flex flex-column align-items-center\">
                <div class=\"spinner-border text-primary mb-3\" role=\"status\" style=\"width: 3rem; height: 3rem;\">
                  <span class=\"visually-hidden\">Chargement...</span>
                </div>
                <p class=\"text-muted\">Chargement des préférences...</p>
              </div>
            </td></tr>
          `;

          const params = new URLSearchParams({
            titre: titreInput ? titreInput.value.trim() : '',
            etudiantId: etudiantInput ? etudiantInput.value : '',
            statut: statutSelect ? statutSelect.value : '',
            isDefault: isDefaultSelect ? isDefaultSelect.value : '',
            sort: sortSelect ? sortSelect.value : 'desc'
          });

          try {
            const res = await fetch(url + '?' + params.toString(), {
              headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const html = await res.text();
            tbody.innerHTML = html;

            // Add animations to new rows
            const ajaxRows = tbody.querySelectorAll('tr');
            ajaxRows.forEach((row, index) => {
              row.style.animationDelay = `\${index * 0.05}s`;
              row.style.animation = 'fadeIn 0.5s ease forwards';
              row.style.opacity = '0';
              setTimeout(() => { row.style.opacity = '1'; }, index * 50);
            });

          } catch (e) {
            tbody.innerHTML = `
              <tr><td colspan=\"7\" class=\"text-center py-5\">
                <div class=\"d-flex flex-column align-items-center\">
                  <i class=\"mdi mdi-alert-circle-outline mb-3\" style=\"font-size: 48px; color: #dc3545;\"></i>
                  <p class=\"text-danger\">Erreur lors du chargement des données</p>
                </div>
              </td></tr>
            `;
          }
        }

        const reloadDebounced = debounce(reloadAlertesAjax, 350);
        if (titreInput) titreInput.addEventListener('input', reloadDebounced);
        if (etudiantInput) etudiantInput.addEventListener('input', reloadDebounced);
        if (statutSelect) statutSelect.addEventListener('change', reloadAlertesAjax);
        if (isDefaultSelect) isDefaultSelect.addEventListener('change', reloadAlertesAjax);
        if (sortSelect) sortSelect.addEventListener('change', reloadAlertesAjax);
        if (applyBtn) applyBtn.addEventListener('click', reloadAlertesAjax);
        if (clearBtn) {
          clearBtn.addEventListener('click', function() {
            if (titreInput) titreInput.value = '';
            if (etudiantInput) etudiantInput.value = '';
            if (statutSelect) statutSelect.value = '';
            if (isDefaultSelect) isDefaultSelect.value = '';
            if (sortSelect) sortSelect.value = 'desc';
            reloadAlertesAjax();
          });
        }

        // -------------------------
        // 2️⃣ UI ANIMATIONS / EFFECTS
        // -------------------------
        // Card animations
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach((card, index) => card.style.animationDelay = `\${index * 0.1}s`);

        // Table row animations for static rows
        const tableRows = document.querySelectorAll('.table tbody tr');
        tableRows.forEach((row, index) => {
          row.style.animationDelay = `\${index * 0.05}s`;
          row.style.animation = 'fadeIn 0.5s ease forwards';
          row.style.opacity = '0';
          setTimeout(() => row.style.opacity = '1', index * 50);
        });

        // Button ripple effect
        const buttons = document.querySelectorAll('.btn-gradient-primary, .btn-icon');
        buttons.forEach(button => {
          button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.cssText = `
              position: absolute;
              border-radius: 50%;
              background: rgba(255, 255, 255, 0.7);
              transform: scale(0);
              animation: ripple 0.6s linear;
              width: \${size}px;
              height: \${size}px;
              top: \${y}px;
              left: \${x}px;
              pointer-events: none;
            `;

            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
          });
        });

        // Inject CSS for animations
        const style = document.createElement('style');
        style.textContent = `
          @keyframes ripple { to { transform: scale(4); opacity: 0; } }
          .table tbody tr { opacity: 0; }
          .table tbody tr:nth-child(odd) { background-color: rgba(0,0,0,0.01); }
          @keyframes fadeIn { to { opacity: 1; } }
        `;
        document.head.appendChild(style);

        // Auto-hide alerts
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert.alert-dismissible');
          alerts.forEach(alert => new bootstrap.Alert(alert).close());
        }, 5000);

      });
    </script>

  </body>
</html>
{% endblock %}", "preference_alerte/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\preference_alerte\\index.html.twig");
    }
}
