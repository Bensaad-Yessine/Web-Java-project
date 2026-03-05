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

/* tache/show.html.twig */
class __TwigTemplate_afb6d9577c2bf41c1f408c4d49a8974e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails de la Tâche</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 14
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
      
      /* Enhanced gradients */
      .card-1 { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .card-4 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-5 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      
      /* Enhanced badges */
      .priority-badge, .status-badge, .type-badge {
        padding: 6px 14px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
        display: inline-block;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
      }
      
      .priority-badge:hover, .status-badge:hover, .type-badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
      }
      
      .priority-high { background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%); color: white; }
      .priority-medium { background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%); color: white; }
      .priority-low { background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%); color: white; }
      
      .status-completed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
      .status-inprogress { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
      .status-pending { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: #333; }
      
      .type-bug { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); color: white; }
      .type-feature { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
      .type-improvement { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: #333; }
      .type-maintenance { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: #333; }
      .type-urgent { background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%); color: white; }
      .type-other { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; }
      
      /* Task header with improved colors */
      .task-header {
        background: linear-gradient(135deg, #2c3e50 0%, #4a6572 100%);
        color: white;
        border-radius: 16px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        animation: fadeIn 0.8s ease;
      }
      
      .task-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: rgba(255,255,255,0.1);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        font-weight: bold;
        margin: 0 auto 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        backdrop-filter: blur(10px);
        border: 3px solid rgba(255,255,255,0.2);
        transition: all 0.3s ease;
      }
      
      .task-avatar:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(0,0,0,0.4);
      }
      
      /* Enhanced detail cards */
      .detail-card {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-radius: 16px;
        padding: 30px;
        margin-bottom: 25px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        border: 1px solid rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        animation: slideUp 0.6s ease;
      }
      
      .detail-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        border-color: rgba(106, 17, 203, 0.1);
      }
      
      .detail-card-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #6a11cb;
        display: flex;
        align-items: center;
      }
      
      .detail-card-title i {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 12px;
        font-size: 1.6rem;
      }
      
      .detail-row {
        display: flex;
        padding: 16px 0;
        border-bottom: 1px solid rgba(0,0,0,0.08);
        transition: background-color 0.3s ease;
      }
      
      .detail-row:hover {
        background-color: rgba(106, 17, 203, 0.03);
        padding-left: 10px;
        border-radius: 8px;
      }
      
      .detail-row:last-child {
        border-bottom: none;
      }
      
      .detail-label {
        font-weight: 600;
        color: #4a5568;
        width: 180px;
        display: flex;
        align-items: center;
        flex-shrink: 0;
      }
      
      .detail-label i {
        margin-right: 10px;
        color: #6a11cb;
        font-size: 18px;
        width: 24px;
        text-align: center;
      }
      
      .detail-value {
        color: #2c3e50;
        font-weight: 500;
        flex: 1;
      }
      
      /* Enhanced action buttons */
      .action-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        animation: fadeIn 0.8s ease;
      }
      
      .btn-gradient-secondary {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(108, 117, 125, 0.3);
      }
      
      .btn-gradient-secondary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(108, 117, 125, 0.4);
        color: white;
      }
      
      .btn-gradient-warning {
        background: linear-gradient(135deg, #ff9a00 0%, #ff6a00 100%);
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(255, 154, 0, 0.3);
      }
      
      .btn-gradient-warning:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(255, 154, 0, 0.4);
        color: white;
      }
      
      .btn-gradient-primary {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(106, 17, 203, 0.3);
      }
      
      .btn-gradient-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(106, 17, 203, 0.4);
        color: white;
      }
      
      .btn-gradient-danger {
        background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(255, 65, 108, 0.3);
      }
      
      .btn-gradient-danger:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(255, 65, 108, 0.4);
        color: white;
      }
      
      /* Action status buttons */
      .action-buttons-form .btn {
        padding: 12px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        margin-bottom: 8px;
        width: 100%;
        text-align: left;
        position: relative;
        overflow: hidden;
      }
      
      .action-buttons-form .btn:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
      }
      
      .action-buttons-form .btn:hover:before {
        left: 100%;
      }
      
      .action-buttons-form .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      }
      
      /* Enhanced table for status history */
      .table {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      }
      
      .table thead th {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        color: white;
        border: none;
        font-weight: 600;
        padding: 16px;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.8px;
      }
      
      .table tbody tr {
        transition: all 0.3s ease;
        border-bottom: 1px solid rgba(0,0,0,0.05);
      }
      
      .table tbody tr:hover {
        background: linear-gradient(135deg, rgba(106, 17, 203, 0.05) 0%, rgba(37, 117, 252, 0.05) 100%);
        transform: translateX(5px);
      }
      
      .table tbody td {
        padding: 16px;
        vertical-align: middle;
        color: #4a5568;
        font-weight: 500;
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
      
      /* Comment box styling */
      .comment-box {
        background: rgba(106, 17, 203, 0.05);
        padding: 12px 16px;
        border-radius: 10px;
        border-left: 4px solid #6a11cb;
        font-style: italic;
        transition: all 0.3s ease;
      }
      
      .comment-box:hover {
        background: rgba(106, 17, 203, 0.08);
        transform: translateX(5px);
      }
      
      /* Empty value styling */
      .empty-value {
        color: #95a5a6;
        font-style: italic;
        padding: 4px 8px;
        background: rgba(149, 165, 166, 0.1);
        border-radius: 6px;
        display: inline-block;
      }
      
      /* Code styling */
      code {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 6px 12px;
        border-radius: 8px;
        color: #6a11cb;
        font-family: 'Courier New', monospace;
        font-weight: 600;
        border: 1px solid rgba(106, 17, 203, 0.1);
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      }
      
      /* Empty state */
      .empty-state {
        text-align: center;
        padding: 50px 20px;
        animation: fadeIn 0.8s ease;
      }
      
      .empty-state i {
        font-size: 80px;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
      }
      
      /* Task info badges in header */
      .header-badges {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 15px;
      }
      
      /* Email link styling */
      a[href^=\"mailto:\"] {
        color: #2575fc;
        text-decoration: none;
        transition: all 0.3s ease;
        padding: 2px 4px;
        border-radius: 4px;
      }
      
      a[href^=\"mailto:\"]:hover {
        color: #6a11cb;
        background: rgba(106, 17, 203, 0.1);
        text-decoration: underline;
      }
      
      /* Footer styling */
      .footer {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-top: 1px solid rgba(0,0,0,0.08);
        padding: 20px 0;
        margin-top: 30px;
        animation: fadeIn 1s ease;
      }
      
      /* Original existing styles kept for compatibility */
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
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
      }
      
      .badge-prof {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
        border: none;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar - KEPT EXACTLY AS IS -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 559
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 562
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 563
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
        // line 571
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 571, $this->source); })()), "user", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 572, $this->source); })()), "user", [], "any", false, false, false, 572), "profilePic", [], "any", false, false, false, 572)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 573
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 573, $this->source); })()), "user", [], "any", false, false, false, 573), "profilePic", [], "any", false, false, false, 573))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 574
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 574, $this->source); })()), "user", [], "any", false, false, false, 574), "prenom", [], "any", false, false, false, 574), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 577
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 578
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "user", [], "any", false, false, false, 578), "prenom", [], "any", false, false, false, 578))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "user", [], "any", false, false, false, 578), "nom", [], "any", false, false, false, 578))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 581
            yield "                  ";
        } else {
            // line 582
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 584
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 587
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 587, $this->source); })()), "user", [], "any", false, false, false, 587)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 588
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "user", [], "any", false, false, false, 588), "prenom", [], "any", false, false, false, 588), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "user", [], "any", false, false, false, 588), "nom", [], "any", false, false, false, 588), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 589
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 589, $this->source); })()), "user", [], "any", false, false, false, 589), "email", [], "any", false, false, false, 589), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 591
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "roles", [], "any", false, false, false, 591))) {
                // line 592
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 594
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 596
            yield "                    </div>
                  ";
        } else {
            // line 598
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 601
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
          ";
        // line 620
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 621
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 622
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-group\"></i>
              </span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          ";
        } else {
            // line 630
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 631
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-circle\"></i>
              </span>
              <span class=\"menu-title\">Mon Profil</span>
            </a>
          </li>
          ";
        }
        // line 639
        yield "          
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
            <a class=\"nav-link\" href=\"";
        // line 662
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\">
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
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 692
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
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-heart-pulse\"></i>
              </span>
              <span class=\"menu-title\">Exercices de santé</span>
            </a>
          </li>
          
          <!-- Logout -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 722
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
        <!-- Navbar - KEPT EXACTLY AS IS -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo\" href=\"";
        // line 737
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <img src=\"";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 740
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <img src=\"";
        // line 741
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
        // line 781
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 781, $this->source); })()), "user", [], "any", false, false, false, 781)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 782
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 783
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 783, $this->source); })()), "user", [], "any", false, false, false, 783), "profilePic", [], "any", false, false, false, 783)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 784
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 784, $this->source); })()), "user", [], "any", false, false, false, 784), "profilePic", [], "any", false, false, false, 784))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 785
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 785, $this->source); })()), "user", [], "any", false, false, false, 785), "prenom", [], "any", false, false, false, 785), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 788
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 789
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 789, $this->source); })()), "user", [], "any", false, false, false, 789), "prenom", [], "any", false, false, false, 789))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 789, $this->source); })()), "user", [], "any", false, false, false, 789), "nom", [], "any", false, false, false, 789))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 792
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 794
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 794, $this->source); })()), "user", [], "any", false, false, false, 794), "prenom", [], "any", false, false, false, 794), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 794, $this->source); })()), "user", [], "any", false, false, false, 794), "nom", [], "any", false, false, false, 794), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 797
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 797, $this->source); })()), "user", [], "any", false, false, false, 797), "roles", [], "any", false, false, false, 797))) {
                // line 798
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 800
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 802
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 806
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 809
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 814
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 814, $this->source); })()), "user", [], "any", false, false, false, 814)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 815
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 815, $this->source); })()), "user", [], "any", false, false, false, 815), "prenom", [], "any", false, false, false, 815), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 815, $this->source); })()), "user", [], "any", false, false, false, 815), "nom", [], "any", false, false, false, 815), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 816
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 816, $this->source); })()), "user", [], "any", false, false, false, 816), "email", [], "any", false, false, false, 816), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 818
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 818, $this->source); })()), "user", [], "any", false, false, false, 818), "roles", [], "any", false, false, false, 818))) {
                // line 819
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 821
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 823
            yield "                      </small>
                    ";
        } else {
            // line 825
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 828
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 830
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 830, $this->source); })()), "user", [], "any", false, false, false, 830)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 831
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 831, $this->source); })()), "user", [], "any", false, false, false, 831), "id", [], "any", false, false, false, 831)]), "html", null, true);
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
            // line 841
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 841, $this->source); })()), "user", [], "any", false, false, false, 841), "id", [], "any", false, false, false, 841)]), "html", null, true);
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
        // line 853
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
        // line 873
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 873, $this->source); })()), "flashes", [], "any", false, false, false, 873));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 874
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 875
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\" 
                     style=\"border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border: none;\">
                  <i class=\"mdi mdi-";
                // line 877
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 878
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 882
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 883
        yield "
            <!-- Header - KEPT EXACTLY AS IS -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-info text-white me-2\">
                      <i class=\"mdi mdi-eye\"></i>
                    </span> 
                    Détails de la Tâche
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 897
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-checkbox-marked-circle-outline me-1\"></i>
                          Liste des Tâches
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Détails: ";
        // line 903
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 903, $this->source); })()), "titre", [], "any", false, false, false, 903), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 903, $this->source); })()), "titre", [], "any", false, false, false, 903)) > 30)) ? ("...") : (""));
        yield "
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Task Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"task-header\">
                  <div class=\"row align-items-center\">
                    <div class=\"col-md-2 text-center\">
                      <div class=\"task-avatar\">
                        <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                      </div>
                    </div>
                    <div class=\"col-md-7\">
                      <h2 class=\"mb-2\">";
        // line 922
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 922, $this->source); })()), "titre", [], "any", false, false, false, 922), "html", null, true);
        yield "</h2>
                      <p class=\"mb-3 opacity-75\">
                        <i class=\"mdi mdi-format-list-bulleted-type me-2\"></i>";
        // line 924
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 924, $this->source); })()), "type", [], "any", false, false, false, 924), "html", null, true);
        yield "
                      </p>
                      <div class=\"header-badges\">
                        <!-- Priority Badge -->
                        <span class=\"priority-badge 
                          ";
        // line 929
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 929, $this->source); })()), "priorite", [], "any", false, false, false, 929) == "Haute") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 929, $this->source); })()), "priorite", [], "any", false, false, false, 929) == "ELEVEE"))) {
            yield "priority-high
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 930
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 930, $this->source); })()), "priorite", [], "any", false, false, false, 930) == "Moyenne") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 930, $this->source); })()), "priorite", [], "any", false, false, false, 930) == "MOYEN"))) {
            yield "priority-medium
                          ";
        } else {
            // line 931
            yield "priority-low";
        }
        yield "\">
                          <i class=\"mdi mdi-priority-high me-1\"></i>
                          ";
        // line 933
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 933, $this->source); })()), "priorite", [], "any", false, false, false, 933), "html", null, true);
        yield "
                        </span>
                        
                        <!-- Status Badge -->
                        <span class=\"status-badge 
                          ";
        // line 938
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 938, $this->source); })()), "statut", [], "any", false, false, false, 938) == "Terminé") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 938, $this->source); })()), "statut", [], "any", false, false, false, 938) == "TERMINEE"))) {
            yield "status-completed
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 939
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 939, $this->source); })()), "statut", [], "any", false, false, false, 939) == "En cours") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 939, $this->source); })()), "statut", [], "any", false, false, false, 939) == "EN_COURS"))) {
            yield "status-inprogress
                          ";
        } else {
            // line 940
            yield "status-pending";
        }
        yield "\">
                          <i class=\"mdi mdi-progress-check me-1\"></i>
                          ";
        // line 942
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 942, $this->source); })()), "statut", [], "any", false, false, false, 942), "html", null, true);
        yield "
                        </span>
                        
                        <!-- Type Badge -->
                        <span class=\"type-badge 
                          ";
        // line 947
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 947, $this->source); })()), "type", [], "any", false, false, false, 947) == "Bug") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 947, $this->source); })()), "type", [], "any", false, false, false, 947) == "BUG"))) {
            yield "type-bug
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 948
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 948, $this->source); })()), "type", [], "any", false, false, false, 948) == "Feature") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 948, $this->source); })()), "type", [], "any", false, false, false, 948) == "FEATURE"))) {
            yield "type-feature
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 949
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 949, $this->source); })()), "type", [], "any", false, false, false, 949) == "Improvement") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 949, $this->source); })()), "type", [], "any", false, false, false, 949) == "IMPROVEMENT"))) {
            yield "type-improvement
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 950
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 950, $this->source); })()), "type", [], "any", false, false, false, 950) == "Maintenance") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 950, $this->source); })()), "type", [], "any", false, false, false, 950) == "MAINTENANCE"))) {
            yield "type-maintenance
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 951
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 951, $this->source); })()), "type", [], "any", false, false, false, 951) == "Urgent") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 951, $this->source); })()), "type", [], "any", false, false, false, 951) == "URGENT"))) {
            yield "type-urgent
                          ";
        } else {
            // line 952
            yield "type-other";
        }
        yield "\">
                          <i class=\"mdi mdi-tag me-1\"></i>
                          ";
        // line 954
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 954, $this->source); })()), "type", [], "any", false, false, false, 954), "html", null, true);
        yield "
                        </span>
                      </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class=\"col-md-3\">
                      <form method=\"post\" action=\"";
        // line 961
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 961, $this->source); })()), "id", [], "any", false, false, false, 961)]), "html", null, true);
        yield "\" class=\"action-buttons-form\">
                        <div class=\"btn-group-vertical w-100\" role=\"group\" aria-label=\"Actions de la tâche\">
                          <!-- Start Button -->
                          ";
        // line 964
        if ((((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 964, $this->source); })()), "statut", [], "any", false, false, false, 964) != "En cours") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 964, $this->source); })()), "statut", [], "any", false, false, false, 964) != "EN_COURS")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 964, $this->source); })()), "statut", [], "any", false, false, false, 964) != "Terminé")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 964, $this->source); })()), "statut", [], "any", false, false, false, 964) != "TERMINEE")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 964, $this->source); })()), "statut", [], "any", false, false, false, 964) != "Abandonné"))) {
            // line 965
            yield "                            <button type=\"submit\" name=\"action\" value=\"EN_COURS\" class=\"btn btn-success mb-2\">
                              <i class=\"mdi mdi-play-circle-outline me-2\"></i>
                              Démarrer
                            </button>
                          ";
        }
        // line 970
        yield "                          
                          <!-- Pause Button -->
                          ";
        // line 972
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 972, $this->source); })()), "statut", [], "any", false, false, false, 972) == "En cours") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 972, $this->source); })()), "statut", [], "any", false, false, false, 972) == "EN_COURS"))) {
            // line 973
            yield "                            <button type=\"submit\" name=\"action\" value=\"PAUSED\" class=\"btn btn-warning mb-2\">
                              <i class=\"mdi mdi-pause-circle-outline me-2\"></i>
                              Pause
                            </button>
                          ";
        }
        // line 978
        yield "                          
                          <!-- Complete Button -->
                          ";
        // line 980
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 980, $this->source); })()), "statut", [], "any", false, false, false, 980) == "En cours") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 980, $this->source); })()), "statut", [], "any", false, false, false, 980) == "EN_COURS")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 980, $this->source); })()), "statut", [], "any", false, false, false, 980) == "PAUSED"))) {
            // line 981
            yield "                            <button type=\"submit\" name=\"action\" value=\"TERMINE\" class=\"btn btn-primary mb-2\">
                              <i class=\"mdi mdi-check-circle-outline me-2\"></i>
                              Terminer
                            </button>
                          ";
        }
        // line 986
        yield "                          
                          <!-- Abandon Button -->
                          ";
        // line 988
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 988, $this->source); })()), "statut", [], "any", false, false, false, 988) != "Terminé") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 988, $this->source); })()), "statut", [], "any", false, false, false, 988) != "TERMINEE")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 988, $this->source); })()), "statut", [], "any", false, false, false, 988) != "Abandonné"))) {
            // line 989
            yield "                            <button type=\"submit\" name=\"action\" value=\"ABANDON\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir abandonner cette tâche ?');\">
                              <i class=\"mdi mdi-close-circle-outline me-2\"></i>
                              Abandonner
                            </button>
                          ";
        }
        // line 994
        yield "                          
                          <!-- No Actions Message -->
                          ";
        // line 996
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 996, $this->source); })()), "statut", [], "any", false, false, false, 996) == "Terminé") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 996, $this->source); })()), "statut", [], "any", false, false, false, 996) == "TERMINEE")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 996, $this->source); })()), "statut", [], "any", false, false, false, 996) == "Abandonné"))) {
            // line 997
            yield "                            <button type=\"button\" class=\"btn btn-secondary\" disabled>
                              <i class=\"mdi mdi-lock-outline me-2\"></i>
                              Actions terminées
                            </button>
                          ";
        }
        // line 1002
        yield "                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Task Details -->
            <div class=\"row\">
              <!-- General Information -->
              <div class=\"col-md-6 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <h4 class=\"detail-card-title\">
                      <i class=\"mdi mdi-information-outline\"></i>
                      Informations Générales
                    </h4>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-identifier\"></i>
                        ID
                      </div>
                      <div class=\"detail-value\">
                        <code>#";
        // line 1027
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1027, $this->source); })()), "id", [], "any", false, false, false, 1027), "html", null, true);
        yield "</code>
                      </div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-format-title\"></i>
                        Titre
                      </div>
                      <div class=\"detail-value\">";
        // line 1036
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1036, $this->source); })()), "titre", [], "any", false, false, false, 1036), "html", null, true);
        yield "</div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-tag-outline\"></i>
                        Type
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"type-badge 
                          ";
        // line 1046
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1046, $this->source); })()), "type", [], "any", false, false, false, 1046) == "Bug") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1046, $this->source); })()), "type", [], "any", false, false, false, 1046) == "BUG"))) {
            yield "type-bug
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 1047
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1047, $this->source); })()), "type", [], "any", false, false, false, 1047) == "Feature") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1047, $this->source); })()), "type", [], "any", false, false, false, 1047) == "FEATURE"))) {
            yield "type-feature
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 1048
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1048, $this->source); })()), "type", [], "any", false, false, false, 1048) == "Improvement") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1048, $this->source); })()), "type", [], "any", false, false, false, 1048) == "IMPROVEMENT"))) {
            yield "type-improvement
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 1049
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1049, $this->source); })()), "type", [], "any", false, false, false, 1049) == "Maintenance") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1049, $this->source); })()), "type", [], "any", false, false, false, 1049) == "MAINTENANCE"))) {
            yield "type-maintenance
                          ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 1050
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1050, $this->source); })()), "type", [], "any", false, false, false, 1050) == "Urgent") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1050, $this->source); })()), "type", [], "any", false, false, false, 1050) == "URGENT"))) {
            yield "type-urgent
                          ";
        } else {
            // line 1051
            yield "type-other";
        }
        yield "\">
                          ";
        // line 1052
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1052, $this->source); })()), "type", [], "any", false, false, false, 1052), "html", null, true);
        yield "
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Time Information -->
              <div class=\"col-md-6 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <h4 class=\"detail-card-title\">
                      <i class=\"mdi mdi-calendar-clock\"></i>
                      Informations Temporelles
                    </h4>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-calendar-start\"></i>
                        Date de début
                      </div>
                      <div class=\"detail-value\">
                        ";
        // line 1075
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1075, $this->source); })()), "dateDebut", [], "any", false, false, false, 1075)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1076
            yield "                          <i class=\"mdi mdi-calendar me-1\"></i>
                          ";
            // line 1077
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1077, $this->source); })()), "dateDebut", [], "any", false, false, false, 1077), "d/m/Y H:i"), "html", null, true);
            yield "
                        ";
        } else {
            // line 1079
            yield "                          <span class=\"empty-value\">Non définie</span>
                        ";
        }
        // line 1081
        yield "                      </div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-calendar-end\"></i>
                        Date de fin
                      </div>
                      <div class=\"detail-value\">
                        ";
        // line 1090
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1090, $this->source); })()), "dateFin", [], "any", false, false, false, 1090)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1091
            yield "                          <i class=\"mdi mdi-calendar me-1\"></i>
                          ";
            // line 1092
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1092, $this->source); })()), "dateFin", [], "any", false, false, false, 1092), "d/m/Y H:i"), "html", null, true);
            yield "
                        ";
        } else {
            // line 1094
            yield "                          <span class=\"empty-value\">Non définie</span>
                        ";
        }
        // line 1096
        yield "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Priority & Status -->
            <div class=\"row\">
              <div class=\"col-md-12 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <h4 class=\"detail-card-title\">
                          <i class=\"mdi mdi-alert-circle-outline\"></i>
                          Priorité & Statut
                        </h4>
                        
                        <div class=\"detail-row\">
                          <div class=\"detail-label\">
                            <i class=\"mdi mdi-priority-high\"></i>
                            Priorité
                          </div>
                          <div class=\"detail-value\">
                            <span class=\"priority-badge 
                              ";
        // line 1122
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1122, $this->source); })()), "priorite", [], "any", false, false, false, 1122) == "Haute") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1122, $this->source); })()), "priorite", [], "any", false, false, false, 1122) == "ELEVEE"))) {
            yield "priority-high
                              ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 1123
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1123, $this->source); })()), "priorite", [], "any", false, false, false, 1123) == "Moyenne") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1123, $this->source); })()), "priorite", [], "any", false, false, false, 1123) == "MOYEN"))) {
            yield "priority-medium
                              ";
        } else {
            // line 1124
            yield "priority-low";
        }
        yield "\">
                              ";
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1125, $this->source); })()), "priorite", [], "any", false, false, false, 1125), "html", null, true);
        yield "
                            </span>
                          </div>
                        </div>
                        
                        <div class=\"detail-row\">
                          <div class=\"detail-label\">
                            <i class=\"mdi mdi-progress-check\"></i>
                            Statut
                          </div>
                          <div class=\"detail-value\">
                            <span class=\"status-badge 
                              ";
        // line 1137
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1137, $this->source); })()), "statut", [], "any", false, false, false, 1137) == "Terminé") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1137, $this->source); })()), "statut", [], "any", false, false, false, 1137) == "TERMINEE"))) {
            yield "status-completed
                              ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 1138
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1138, $this->source); })()), "statut", [], "any", false, false, false, 1138) == "En cours") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1138, $this->source); })()), "statut", [], "any", false, false, false, 1138) == "EN_COURS"))) {
            yield "status-inprogress
                              ";
        } else {
            // line 1139
            yield "status-pending";
        }
        yield "\">
                              ";
        // line 1140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1140, $this->source); })()), "statut", [], "any", false, false, false, 1140), "html", null, true);
        yield "
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Assigned User -->
            <div class=\"row\">
              <div class=\"col-md-6 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <h4 class=\"detail-card-title\">
                      <i class=\"mdi mdi-account-circle-outline\"></i>
                      Utilisateur Assigné
                    </h4>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-account\"></i>
                        Nom complet
                      </div>
                      <div class=\"detail-value\">
                        ";
        // line 1167
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1167, $this->source); })()), "user", [], "any", false, false, false, 1167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1168
            yield "                          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1168, $this->source); })()), "user", [], "any", false, false, false, 1168), "nom", [], "any", false, false, false, 1168), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1168, $this->source); })()), "user", [], "any", false, false, false, 1168), "prenom", [], "any", false, false, false, 1168), "html", null, true);
            yield "
                        ";
        } else {
            // line 1170
            yield "                          <span class=\"empty-value\">Non assigné</span>
                        ";
        }
        // line 1172
        yield "                      </div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-email-outline\"></i>
                        Email
                      </div>
                      <div class=\"detail-value\">
                        ";
        // line 1181
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1181, $this->source); })()), "user", [], "any", false, false, false, 1181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1182
            yield "                          <a href=\"mailto:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1182, $this->source); })()), "user", [], "any", false, false, false, 1182), "email", [], "any", false, false, false, 1182), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1182, $this->source); })()), "user", [], "any", false, false, false, 1182), "email", [], "any", false, false, false, 1182), "html", null, true);
            yield "</a>
                        ";
        } else {
            // line 1184
            yield "                          <span class=\"empty-value\">Non assigné</span>
                        ";
        }
        // line 1186
        yield "                      </div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-phone-outline\"></i>
                        Téléphone
                      </div>
                      <div class=\"detail-value\">
                        ";
        // line 1195
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1195, $this->source); })()), "user", [], "any", false, false, false, 1195) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1195, $this->source); })()), "user", [], "any", false, false, false, 1195), "numTel", [], "any", false, false, false, 1195))) {
            // line 1196
            yield "                          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1196, $this->source); })()), "user", [], "any", false, false, false, 1196), "numTel", [], "any", false, false, false, 1196), "html", null, true);
            yield "
                        ";
        } else {
            // line 1198
            yield "                          <span class=\"empty-value\">Non renseigné</span>
                        ";
        }
        // line 1200
        yield "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Status History -->
            <div class=\"row\">
              <div class=\"col-md-12 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <h4 class=\"detail-card-title\">
                      <i class=\"mdi mdi-history me-2\"></i>
                      Historique des Statuts
                    </h4>
                    
                    <div class=\"table-responsive\">
                      <table class=\"table\">
                        <thead>
                          <tr>
                            <th style=\"width: 15%\">
                              <i class=\"mdi mdi-calendar-clock me-1\"></i>
                              Date
                            </th>
                            <th style=\"width: 20%\">
                              <i class=\"mdi mdi-arrow-left-circle me-1\"></i>
                              Ancien statut
                            </th>
                            <th style=\"width: 20%\">
                              <i class=\"mdi mdi-arrow-right-circle me-1\"></i>
                              Nouveau statut
                            </th>
                            <th style=\"width: 45%\">
                              <i class=\"mdi mdi-comment-text-outline me-1\"></i>
                              Commentaire
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 1240
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1240, $this->source); })()), "suivis", [], "any", false, false, false, 1240))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1241
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1241, $this->source); })()), "suivis", [], "any", false, false, false, 1241)));
            foreach ($context['_seq'] as $context["_key"] => $context["suivi"]) {
                // line 1242
                yield "                              <tr>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <i class=\"mdi mdi-calendar-text text-primary me-2\"></i>
                                    <span>";
                // line 1246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "dateAction", [], "any", false, false, false, 1246), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                  </div>
                                </td>
                                <td>
                                  ";
                // line 1250
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "ancienStatut", [], "any", false, false, false, 1250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1251
                    yield "                                    <span class=\"status-badge 
                                      ";
                    // line 1252
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "ancienStatut", [], "any", false, false, false, 1252) == "Terminé") || (CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "ancienStatut", [], "any", false, false, false, 1252) == "TERMINEE"))) {
                        yield "status-completed
                                      ";
                    } elseif (((CoreExtension::getAttribute($this->env, $this->source,                     // line 1253
$context["suivi"], "ancienStatut", [], "any", false, false, false, 1253) == "En cours") || (CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "ancienStatut", [], "any", false, false, false, 1253) == "EN_COURS"))) {
                        yield "status-inprogress
                                      ";
                    } else {
                        // line 1254
                        yield "status-pending";
                    }
                    yield "\">
                                      ";
                    // line 1255
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "ancienStatut", [], "any", false, false, false, 1255), "html", null, true);
                    yield "
                                    </span>
                                  ";
                } else {
                    // line 1258
                    yield "                                    <span class=\"empty-value\">-</span>
                                  ";
                }
                // line 1260
                yield "                                </td>
                                <td>
                                  <span class=\"status-badge 
                                    ";
                // line 1263
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "nouveauStatut", [], "any", false, false, false, 1263) == "Terminé") || (CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "nouveauStatut", [], "any", false, false, false, 1263) == "TERMINEE"))) {
                    yield "status-completed
                                    ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 1264
$context["suivi"], "nouveauStatut", [], "any", false, false, false, 1264) == "En cours") || (CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "nouveauStatut", [], "any", false, false, false, 1264) == "EN_COURS"))) {
                    yield "status-inprogress
                                    ";
                } else {
                    // line 1265
                    yield "status-pending";
                }
                yield "\">
                                    ";
                // line 1266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "nouveauStatut", [], "any", false, false, false, 1266), "html", null, true);
                yield "
                                  </span>
                                </td>
                                <td>
                                  ";
                // line 1270
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "commentaire", [], "any", false, false, false, 1270)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1271
                    yield "                                    <div class=\"comment-box\">
                                      <i class=\"mdi mdi-comment-quote-outline text-info me-2\"></i>
                                      ";
                    // line 1273
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "commentaire", [], "any", false, false, false, 1273), "html", null, true);
                    yield "
                                    </div>
                                  ";
                } else {
                    // line 1276
                    yield "                                    <span class=\"empty-value\">-</span>
                                  ";
                }
                // line 1278
                yield "                                </td>
                              </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['suivi'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1281
            yield "                          ";
        } else {
            // line 1282
            yield "                            <tr>
                              <td colspan=\"4\" class=\"text-center py-4\">
                                <div class=\"empty-state\">
                                  <i class=\"mdi mdi-history-off display-4 mb-3\"></i>
                                  <h5 class=\"text-muted\">Aucun historique disponible</h5>
                                  <p class=\"text-muted mb-0\">Les changements de statut apparaîtront ici.</p>
                                </div>
                              </td>
                            </tr>
                          ";
        }
        // line 1292
        yield "                        </tbody>
                      </table>
                    </div>
                    
                    ";
        // line 1296
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1296, $this->source); })()), "suivis", [], "any", false, false, false, 1296))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1297
            yield "                      <div class=\"mt-3 text-end\">
                        <small class=\"text-muted\">
                          <i class=\"mdi mdi-information-outline me-1\"></i>
                          ";
            // line 1300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1300, $this->source); })()), "suivis", [], "any", false, false, false, 1300)), "html", null, true);
            yield " changement(s) de statut enregistré(s)
                        </small>
                      </div>
                    ";
        }
        // line 1304
        yield "                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <div class=\"action-buttons\">
                      <a href=\"";
        // line 1315
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\" class=\"btn btn-gradient-secondary\">
                        <i class=\"mdi mdi-arrow-left me-2\"></i>Retour à la liste
                      </a>
                      <a href=\"";
        // line 1318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1318, $this->source); })()), "id", [], "any", false, false, false, 1318)]), "html", null, true);
        yield "\" class=\"btn btn-gradient-warning\">
                        <i class=\"mdi mdi-pencil me-2\"></i>Modifier
                      </a>
                      <a href=\"";
        // line 1321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        yield "\" class=\"btn btn-gradient-primary\">
                        <i class=\"mdi mdi-plus-circle me-2\"></i>Nouvelle tâche
                      </a>
                      <button type=\"button\" 
                              class=\"btn btn-gradient-danger\" 
                              data-bs-toggle=\"modal\" 
                              data-bs-target=\"#deleteModal\">
                        <i class=\"mdi mdi-delete me-2\"></i>Supprimer
                      </button>
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
        // line 1340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Tâche: ";
        // line 1343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1343, $this->source); })()), "titre", [], "any", false, false, false, 1343), 0, 20), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1343, $this->source); })()), "titre", [], "any", false, false, false, 1343)) > 20)) ? ("...") : (""));
        yield "
                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Modal -->
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
            <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer cette tâche ?</h5>
            <p class=\"text-muted\">Cette action est irréversible et supprimera définitivement la tâche \"<strong>";
        // line 1371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1371, $this->source); })()), "titre", [], "any", false, false, false, 1371), "html", null, true);
        yield "</strong>\".</p>
          </div>
          <div class=\"modal-footer justify-content-center border-0 pt-0\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" style=\"
              padding: 10px 24px;
              border-radius: 12px;
              font-weight: 600;
            \">
              <i class=\"mdi mdi-close me-2\"></i>Annuler
            </button>
            <form method=\"POST\" action=\"";
        // line 1381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1381, $this->source); })()), "id", [], "any", false, false, false, 1381)]), "html", null, true);
        yield "\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 1382, $this->source); })()), "id", [], "any", false, false, false, 1382))), "html", null, true);
        yield "\">
              <button type=\"submit\" class=\"btn btn-gradient-danger\">
                <i class=\"mdi mdi-delete me-2\"></i>Supprimer
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 1393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert.alert-dismissible');
          alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          });
        }, 5000);
        
        // Add hover animations to cards
        const cards = document.querySelectorAll('.detail-card');
        cards.forEach((card, index) => {
          card.style.animationDelay = \${index * 0.1}s;
        });
        
        // Add ripple effect to buttons
        const buttons = document.querySelectorAll('.btn-gradient-primary, .btn-gradient-warning, .btn-gradient-danger, .btn-gradient-secondary');
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
        
        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
          @keyframes ripple {
            to {
              transform: scale(4);
              opacity: 0;
            }
          }
        `;
        document.head.appendChild(style);
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
        return "tache/show.html.twig";
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
        return array (  1953 => 1395,  1949 => 1394,  1945 => 1393,  1931 => 1382,  1927 => 1381,  1914 => 1371,  1882 => 1343,  1876 => 1340,  1854 => 1321,  1848 => 1318,  1842 => 1315,  1829 => 1304,  1822 => 1300,  1817 => 1297,  1815 => 1296,  1809 => 1292,  1797 => 1282,  1794 => 1281,  1786 => 1278,  1782 => 1276,  1776 => 1273,  1772 => 1271,  1770 => 1270,  1763 => 1266,  1758 => 1265,  1753 => 1264,  1749 => 1263,  1744 => 1260,  1740 => 1258,  1734 => 1255,  1729 => 1254,  1724 => 1253,  1720 => 1252,  1717 => 1251,  1715 => 1250,  1708 => 1246,  1702 => 1242,  1697 => 1241,  1695 => 1240,  1653 => 1200,  1649 => 1198,  1643 => 1196,  1641 => 1195,  1630 => 1186,  1626 => 1184,  1618 => 1182,  1616 => 1181,  1605 => 1172,  1601 => 1170,  1593 => 1168,  1591 => 1167,  1561 => 1140,  1556 => 1139,  1551 => 1138,  1547 => 1137,  1532 => 1125,  1527 => 1124,  1522 => 1123,  1518 => 1122,  1490 => 1096,  1486 => 1094,  1481 => 1092,  1478 => 1091,  1476 => 1090,  1465 => 1081,  1461 => 1079,  1456 => 1077,  1453 => 1076,  1451 => 1075,  1425 => 1052,  1420 => 1051,  1415 => 1050,  1411 => 1049,  1407 => 1048,  1403 => 1047,  1399 => 1046,  1386 => 1036,  1374 => 1027,  1347 => 1002,  1340 => 997,  1338 => 996,  1334 => 994,  1327 => 989,  1325 => 988,  1321 => 986,  1314 => 981,  1312 => 980,  1308 => 978,  1301 => 973,  1299 => 972,  1295 => 970,  1288 => 965,  1286 => 964,  1280 => 961,  1270 => 954,  1264 => 952,  1259 => 951,  1255 => 950,  1251 => 949,  1247 => 948,  1243 => 947,  1235 => 942,  1229 => 940,  1224 => 939,  1220 => 938,  1212 => 933,  1206 => 931,  1201 => 930,  1197 => 929,  1189 => 924,  1184 => 922,  1161 => 903,  1152 => 897,  1136 => 883,  1130 => 882,  1120 => 878,  1116 => 877,  1110 => 875,  1105 => 874,  1101 => 873,  1077 => 853,  1062 => 841,  1048 => 831,  1046 => 830,  1042 => 828,  1037 => 825,  1033 => 823,  1029 => 821,  1025 => 819,  1023 => 818,  1018 => 816,  1011 => 815,  1009 => 814,  1002 => 809,  995 => 806,  989 => 802,  985 => 800,  981 => 798,  979 => 797,  971 => 794,  967 => 792,  960 => 789,  957 => 788,  951 => 785,  946 => 784,  944 => 783,  941 => 782,  939 => 781,  896 => 741,  892 => 740,  887 => 738,  883 => 737,  865 => 722,  832 => 692,  799 => 662,  774 => 639,  763 => 631,  760 => 630,  749 => 622,  746 => 621,  744 => 620,  723 => 601,  718 => 598,  714 => 596,  710 => 594,  706 => 592,  704 => 591,  699 => 589,  692 => 588,  690 => 587,  685 => 584,  679 => 582,  676 => 581,  669 => 578,  666 => 577,  660 => 574,  655 => 573,  652 => 572,  650 => 571,  639 => 563,  635 => 562,  630 => 560,  626 => 559,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails de la Tâche</title>
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
      
      /* Enhanced gradients */
      .card-1 { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .card-4 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-5 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      
      /* Enhanced badges */
      .priority-badge, .status-badge, .type-badge {
        padding: 6px 14px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
        display: inline-block;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
      }
      
      .priority-badge:hover, .status-badge:hover, .type-badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
      }
      
      .priority-high { background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%); color: white; }
      .priority-medium { background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%); color: white; }
      .priority-low { background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%); color: white; }
      
      .status-completed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
      .status-inprogress { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
      .status-pending { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: #333; }
      
      .type-bug { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); color: white; }
      .type-feature { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
      .type-improvement { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: #333; }
      .type-maintenance { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: #333; }
      .type-urgent { background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%); color: white; }
      .type-other { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; }
      
      /* Task header with improved colors */
      .task-header {
        background: linear-gradient(135deg, #2c3e50 0%, #4a6572 100%);
        color: white;
        border-radius: 16px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        animation: fadeIn 0.8s ease;
      }
      
      .task-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: rgba(255,255,255,0.1);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        font-weight: bold;
        margin: 0 auto 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        backdrop-filter: blur(10px);
        border: 3px solid rgba(255,255,255,0.2);
        transition: all 0.3s ease;
      }
      
      .task-avatar:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(0,0,0,0.4);
      }
      
      /* Enhanced detail cards */
      .detail-card {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-radius: 16px;
        padding: 30px;
        margin-bottom: 25px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        border: 1px solid rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        animation: slideUp 0.6s ease;
      }
      
      .detail-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        border-color: rgba(106, 17, 203, 0.1);
      }
      
      .detail-card-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #6a11cb;
        display: flex;
        align-items: center;
      }
      
      .detail-card-title i {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 12px;
        font-size: 1.6rem;
      }
      
      .detail-row {
        display: flex;
        padding: 16px 0;
        border-bottom: 1px solid rgba(0,0,0,0.08);
        transition: background-color 0.3s ease;
      }
      
      .detail-row:hover {
        background-color: rgba(106, 17, 203, 0.03);
        padding-left: 10px;
        border-radius: 8px;
      }
      
      .detail-row:last-child {
        border-bottom: none;
      }
      
      .detail-label {
        font-weight: 600;
        color: #4a5568;
        width: 180px;
        display: flex;
        align-items: center;
        flex-shrink: 0;
      }
      
      .detail-label i {
        margin-right: 10px;
        color: #6a11cb;
        font-size: 18px;
        width: 24px;
        text-align: center;
      }
      
      .detail-value {
        color: #2c3e50;
        font-weight: 500;
        flex: 1;
      }
      
      /* Enhanced action buttons */
      .action-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        animation: fadeIn 0.8s ease;
      }
      
      .btn-gradient-secondary {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(108, 117, 125, 0.3);
      }
      
      .btn-gradient-secondary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(108, 117, 125, 0.4);
        color: white;
      }
      
      .btn-gradient-warning {
        background: linear-gradient(135deg, #ff9a00 0%, #ff6a00 100%);
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(255, 154, 0, 0.3);
      }
      
      .btn-gradient-warning:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(255, 154, 0, 0.4);
        color: white;
      }
      
      .btn-gradient-primary {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(106, 17, 203, 0.3);
      }
      
      .btn-gradient-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(106, 17, 203, 0.4);
        color: white;
      }
      
      .btn-gradient-danger {
        background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(255, 65, 108, 0.3);
      }
      
      .btn-gradient-danger:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(255, 65, 108, 0.4);
        color: white;
      }
      
      /* Action status buttons */
      .action-buttons-form .btn {
        padding: 12px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        margin-bottom: 8px;
        width: 100%;
        text-align: left;
        position: relative;
        overflow: hidden;
      }
      
      .action-buttons-form .btn:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
      }
      
      .action-buttons-form .btn:hover:before {
        left: 100%;
      }
      
      .action-buttons-form .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      }
      
      /* Enhanced table for status history */
      .table {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      }
      
      .table thead th {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        color: white;
        border: none;
        font-weight: 600;
        padding: 16px;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.8px;
      }
      
      .table tbody tr {
        transition: all 0.3s ease;
        border-bottom: 1px solid rgba(0,0,0,0.05);
      }
      
      .table tbody tr:hover {
        background: linear-gradient(135deg, rgba(106, 17, 203, 0.05) 0%, rgba(37, 117, 252, 0.05) 100%);
        transform: translateX(5px);
      }
      
      .table tbody td {
        padding: 16px;
        vertical-align: middle;
        color: #4a5568;
        font-weight: 500;
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
      
      /* Comment box styling */
      .comment-box {
        background: rgba(106, 17, 203, 0.05);
        padding: 12px 16px;
        border-radius: 10px;
        border-left: 4px solid #6a11cb;
        font-style: italic;
        transition: all 0.3s ease;
      }
      
      .comment-box:hover {
        background: rgba(106, 17, 203, 0.08);
        transform: translateX(5px);
      }
      
      /* Empty value styling */
      .empty-value {
        color: #95a5a6;
        font-style: italic;
        padding: 4px 8px;
        background: rgba(149, 165, 166, 0.1);
        border-radius: 6px;
        display: inline-block;
      }
      
      /* Code styling */
      code {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 6px 12px;
        border-radius: 8px;
        color: #6a11cb;
        font-family: 'Courier New', monospace;
        font-weight: 600;
        border: 1px solid rgba(106, 17, 203, 0.1);
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      }
      
      /* Empty state */
      .empty-state {
        text-align: center;
        padding: 50px 20px;
        animation: fadeIn 0.8s ease;
      }
      
      .empty-state i {
        font-size: 80px;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
      }
      
      /* Task info badges in header */
      .header-badges {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 15px;
      }
      
      /* Email link styling */
      a[href^=\"mailto:\"] {
        color: #2575fc;
        text-decoration: none;
        transition: all 0.3s ease;
        padding: 2px 4px;
        border-radius: 4px;
      }
      
      a[href^=\"mailto:\"]:hover {
        color: #6a11cb;
        background: rgba(106, 17, 203, 0.1);
        text-decoration: underline;
      }
      
      /* Footer styling */
      .footer {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-top: 1px solid rgba(0,0,0,0.08);
        padding: 20px 0;
        margin-top: 30px;
        animation: fadeIn 1s ease;
      }
      
      /* Original existing styles kept for compatibility */
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
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
      }
      
      .badge-prof {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
        border: none;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar - KEPT EXACTLY AS IS -->
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
          {% if is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-group\"></i>
              </span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          {% else %}
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_user_profile') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-circle\"></i>
              </span>
              <span class=\"menu-title\">Mon Profil</span>
            </a>
          </li>
          {% endif %}
          
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
            <a class=\"nav-link\" href=\"{{ path('app_salle_index') }}\">
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
          <li class=\"nav-item menu-items active\">
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
            <a class=\"nav-link\" href=\"#\">
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
        <!-- Navbar - KEPT EXACTLY AS IS -->
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
                <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\" 
                     style=\"border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border: none;\">
                  <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }} me-2\"></i>
                  {{ message }}
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              {% endfor %}
            {% endfor %}

            <!-- Header - KEPT EXACTLY AS IS -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-info text-white me-2\">
                      <i class=\"mdi mdi-eye\"></i>
                    </span> 
                    Détails de la Tâche
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_tache_index') }}\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-checkbox-marked-circle-outline me-1\"></i>
                          Liste des Tâches
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Détails: {{ tache.titre|slice(0, 30) }}{{ tache.titre|length > 30 ? '...' : '' }}
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Task Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"task-header\">
                  <div class=\"row align-items-center\">
                    <div class=\"col-md-2 text-center\">
                      <div class=\"task-avatar\">
                        <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                      </div>
                    </div>
                    <div class=\"col-md-7\">
                      <h2 class=\"mb-2\">{{ tache.titre }}</h2>
                      <p class=\"mb-3 opacity-75\">
                        <i class=\"mdi mdi-format-list-bulleted-type me-2\"></i>{{ tache.type }}
                      </p>
                      <div class=\"header-badges\">
                        <!-- Priority Badge -->
                        <span class=\"priority-badge 
                          {% if tache.priorite == 'Haute' or tache.priorite == 'ELEVEE' %}priority-high
                          {% elseif tache.priorite == 'Moyenne' or tache.priorite == 'MOYEN' %}priority-medium
                          {% else %}priority-low{% endif %}\">
                          <i class=\"mdi mdi-priority-high me-1\"></i>
                          {{ tache.priorite }}
                        </span>
                        
                        <!-- Status Badge -->
                        <span class=\"status-badge 
                          {% if tache.statut == 'Terminé' or tache.statut == 'TERMINEE' %}status-completed
                          {% elseif tache.statut == 'En cours' or tache.statut == 'EN_COURS' %}status-inprogress
                          {% else %}status-pending{% endif %}\">
                          <i class=\"mdi mdi-progress-check me-1\"></i>
                          {{ tache.statut }}
                        </span>
                        
                        <!-- Type Badge -->
                        <span class=\"type-badge 
                          {% if tache.type == 'Bug' or tache.type == 'BUG' %}type-bug
                          {% elseif tache.type == 'Feature' or tache.type == 'FEATURE' %}type-feature
                          {% elseif tache.type == 'Improvement' or tache.type == 'IMPROVEMENT' %}type-improvement
                          {% elseif tache.type == 'Maintenance' or tache.type == 'MAINTENANCE' %}type-maintenance
                          {% elseif tache.type == 'Urgent' or tache.type == 'URGENT' %}type-urgent
                          {% else %}type-other{% endif %}\">
                          <i class=\"mdi mdi-tag me-1\"></i>
                          {{ tache.type }}
                        </span>
                      </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class=\"col-md-3\">
                      <form method=\"post\" action=\"{{ path('app_tache_action', {'id': tache.id}) }}\" class=\"action-buttons-form\">
                        <div class=\"btn-group-vertical w-100\" role=\"group\" aria-label=\"Actions de la tâche\">
                          <!-- Start Button -->
                          {% if tache.statut != 'En cours' and tache.statut != 'EN_COURS' and tache.statut != 'Terminé' and tache.statut != 'TERMINEE' and tache.statut != 'Abandonné' %}
                            <button type=\"submit\" name=\"action\" value=\"EN_COURS\" class=\"btn btn-success mb-2\">
                              <i class=\"mdi mdi-play-circle-outline me-2\"></i>
                              Démarrer
                            </button>
                          {% endif %}
                          
                          <!-- Pause Button -->
                          {% if tache.statut == 'En cours' or tache.statut == 'EN_COURS' %}
                            <button type=\"submit\" name=\"action\" value=\"PAUSED\" class=\"btn btn-warning mb-2\">
                              <i class=\"mdi mdi-pause-circle-outline me-2\"></i>
                              Pause
                            </button>
                          {% endif %}
                          
                          <!-- Complete Button -->
                          {% if tache.statut == 'En cours' or tache.statut == 'EN_COURS' or tache.statut == 'PAUSED' %}
                            <button type=\"submit\" name=\"action\" value=\"TERMINE\" class=\"btn btn-primary mb-2\">
                              <i class=\"mdi mdi-check-circle-outline me-2\"></i>
                              Terminer
                            </button>
                          {% endif %}
                          
                          <!-- Abandon Button -->
                          {% if tache.statut != 'Terminé' and tache.statut != 'TERMINEE' and tache.statut != 'Abandonné' %}
                            <button type=\"submit\" name=\"action\" value=\"ABANDON\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir abandonner cette tâche ?');\">
                              <i class=\"mdi mdi-close-circle-outline me-2\"></i>
                              Abandonner
                            </button>
                          {% endif %}
                          
                          <!-- No Actions Message -->
                          {% if tache.statut == 'Terminé' or tache.statut == 'TERMINEE' or tache.statut == 'Abandonné' %}
                            <button type=\"button\" class=\"btn btn-secondary\" disabled>
                              <i class=\"mdi mdi-lock-outline me-2\"></i>
                              Actions terminées
                            </button>
                          {% endif %}
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Task Details -->
            <div class=\"row\">
              <!-- General Information -->
              <div class=\"col-md-6 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <h4 class=\"detail-card-title\">
                      <i class=\"mdi mdi-information-outline\"></i>
                      Informations Générales
                    </h4>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-identifier\"></i>
                        ID
                      </div>
                      <div class=\"detail-value\">
                        <code>#{{ tache.id }}</code>
                      </div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-format-title\"></i>
                        Titre
                      </div>
                      <div class=\"detail-value\">{{ tache.titre }}</div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-tag-outline\"></i>
                        Type
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"type-badge 
                          {% if tache.type == 'Bug' or tache.type == 'BUG' %}type-bug
                          {% elseif tache.type == 'Feature' or tache.type == 'FEATURE' %}type-feature
                          {% elseif tache.type == 'Improvement' or tache.type == 'IMPROVEMENT' %}type-improvement
                          {% elseif tache.type == 'Maintenance' or tache.type == 'MAINTENANCE' %}type-maintenance
                          {% elseif tache.type == 'Urgent' or tache.type == 'URGENT' %}type-urgent
                          {% else %}type-other{% endif %}\">
                          {{ tache.type }}
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Time Information -->
              <div class=\"col-md-6 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <h4 class=\"detail-card-title\">
                      <i class=\"mdi mdi-calendar-clock\"></i>
                      Informations Temporelles
                    </h4>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-calendar-start\"></i>
                        Date de début
                      </div>
                      <div class=\"detail-value\">
                        {% if tache.dateDebut %}
                          <i class=\"mdi mdi-calendar me-1\"></i>
                          {{ tache.dateDebut|date('d/m/Y H:i') }}
                        {% else %}
                          <span class=\"empty-value\">Non définie</span>
                        {% endif %}
                      </div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-calendar-end\"></i>
                        Date de fin
                      </div>
                      <div class=\"detail-value\">
                        {% if tache.dateFin %}
                          <i class=\"mdi mdi-calendar me-1\"></i>
                          {{ tache.dateFin|date('d/m/Y H:i') }}
                        {% else %}
                          <span class=\"empty-value\">Non définie</span>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Priority & Status -->
            <div class=\"row\">
              <div class=\"col-md-12 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <h4 class=\"detail-card-title\">
                          <i class=\"mdi mdi-alert-circle-outline\"></i>
                          Priorité & Statut
                        </h4>
                        
                        <div class=\"detail-row\">
                          <div class=\"detail-label\">
                            <i class=\"mdi mdi-priority-high\"></i>
                            Priorité
                          </div>
                          <div class=\"detail-value\">
                            <span class=\"priority-badge 
                              {% if tache.priorite == 'Haute' or tache.priorite == 'ELEVEE' %}priority-high
                              {% elseif tache.priorite == 'Moyenne' or tache.priorite == 'MOYEN' %}priority-medium
                              {% else %}priority-low{% endif %}\">
                              {{ tache.priorite }}
                            </span>
                          </div>
                        </div>
                        
                        <div class=\"detail-row\">
                          <div class=\"detail-label\">
                            <i class=\"mdi mdi-progress-check\"></i>
                            Statut
                          </div>
                          <div class=\"detail-value\">
                            <span class=\"status-badge 
                              {% if tache.statut == 'Terminé' or tache.statut == 'TERMINEE' %}status-completed
                              {% elseif tache.statut == 'En cours' or tache.statut == 'EN_COURS' %}status-inprogress
                              {% else %}status-pending{% endif %}\">
                              {{ tache.statut }}
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Assigned User -->
            <div class=\"row\">
              <div class=\"col-md-6 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <h4 class=\"detail-card-title\">
                      <i class=\"mdi mdi-account-circle-outline\"></i>
                      Utilisateur Assigné
                    </h4>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-account\"></i>
                        Nom complet
                      </div>
                      <div class=\"detail-value\">
                        {% if tache.user %}
                          {{ tache.user.nom }} {{ tache.user.prenom }}
                        {% else %}
                          <span class=\"empty-value\">Non assigné</span>
                        {% endif %}
                      </div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-email-outline\"></i>
                        Email
                      </div>
                      <div class=\"detail-value\">
                        {% if tache.user %}
                          <a href=\"mailto:{{ tache.user.email }}\">{{ tache.user.email }}</a>
                        {% else %}
                          <span class=\"empty-value\">Non assigné</span>
                        {% endif %}
                      </div>
                    </div>
                    
                    <div class=\"detail-row\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-phone-outline\"></i>
                        Téléphone
                      </div>
                      <div class=\"detail-value\">
                        {% if tache.user and tache.user.numTel %}
                          {{ tache.user.numTel }}
                        {% else %}
                          <span class=\"empty-value\">Non renseigné</span>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Status History -->
            <div class=\"row\">
              <div class=\"col-md-12 grid-margin stretch-card\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <h4 class=\"detail-card-title\">
                      <i class=\"mdi mdi-history me-2\"></i>
                      Historique des Statuts
                    </h4>
                    
                    <div class=\"table-responsive\">
                      <table class=\"table\">
                        <thead>
                          <tr>
                            <th style=\"width: 15%\">
                              <i class=\"mdi mdi-calendar-clock me-1\"></i>
                              Date
                            </th>
                            <th style=\"width: 20%\">
                              <i class=\"mdi mdi-arrow-left-circle me-1\"></i>
                              Ancien statut
                            </th>
                            <th style=\"width: 20%\">
                              <i class=\"mdi mdi-arrow-right-circle me-1\"></i>
                              Nouveau statut
                            </th>
                            <th style=\"width: 45%\">
                              <i class=\"mdi mdi-comment-text-outline me-1\"></i>
                              Commentaire
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          {% if tache.suivis is not empty %}
                            {% for suivi in tache.suivis|reverse %}
                              <tr>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <i class=\"mdi mdi-calendar-text text-primary me-2\"></i>
                                    <span>{{ suivi.dateAction|date('d/m/Y H:i') }}</span>
                                  </div>
                                </td>
                                <td>
                                  {% if suivi.ancienStatut %}
                                    <span class=\"status-badge 
                                      {% if suivi.ancienStatut == 'Terminé' or suivi.ancienStatut == 'TERMINEE' %}status-completed
                                      {% elseif suivi.ancienStatut == 'En cours' or suivi.ancienStatut == 'EN_COURS' %}status-inprogress
                                      {% else %}status-pending{% endif %}\">
                                      {{ suivi.ancienStatut }}
                                    </span>
                                  {% else %}
                                    <span class=\"empty-value\">-</span>
                                  {% endif %}
                                </td>
                                <td>
                                  <span class=\"status-badge 
                                    {% if suivi.nouveauStatut == 'Terminé' or suivi.nouveauStatut == 'TERMINEE' %}status-completed
                                    {% elseif suivi.nouveauStatut == 'En cours' or suivi.nouveauStatut == 'EN_COURS' %}status-inprogress
                                    {% else %}status-pending{% endif %}\">
                                    {{ suivi.nouveauStatut }}
                                  </span>
                                </td>
                                <td>
                                  {% if suivi.commentaire %}
                                    <div class=\"comment-box\">
                                      <i class=\"mdi mdi-comment-quote-outline text-info me-2\"></i>
                                      {{ suivi.commentaire }}
                                    </div>
                                  {% else %}
                                    <span class=\"empty-value\">-</span>
                                  {% endif %}
                                </td>
                              </tr>
                            {% endfor %}
                          {% else %}
                            <tr>
                              <td colspan=\"4\" class=\"text-center py-4\">
                                <div class=\"empty-state\">
                                  <i class=\"mdi mdi-history-off display-4 mb-3\"></i>
                                  <h5 class=\"text-muted\">Aucun historique disponible</h5>
                                  <p class=\"text-muted mb-0\">Les changements de statut apparaîtront ici.</p>
                                </div>
                              </td>
                            </tr>
                          {% endif %}
                        </tbody>
                      </table>
                    </div>
                    
                    {% if tache.suivis is not empty %}
                      <div class=\"mt-3 text-end\">
                        <small class=\"text-muted\">
                          <i class=\"mdi mdi-information-outline me-1\"></i>
                          {{ tache.suivis|length }} changement(s) de statut enregistré(s)
                        </small>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card detail-card\">
                  <div class=\"card-body\">
                    <div class=\"action-buttons\">
                      <a href=\"{{ path('app_tache_index') }}\" class=\"btn btn-gradient-secondary\">
                        <i class=\"mdi mdi-arrow-left me-2\"></i>Retour à la liste
                      </a>
                      <a href=\"{{ path('app_tache_edit', { id: tache.id }) }}\" class=\"btn btn-gradient-warning\">
                        <i class=\"mdi mdi-pencil me-2\"></i>Modifier
                      </a>
                      <a href=\"{{ path('app_tache_new') }}\" class=\"btn btn-gradient-primary\">
                        <i class=\"mdi mdi-plus-circle me-2\"></i>Nouvelle tâche
                      </a>
                      <button type=\"button\" 
                              class=\"btn btn-gradient-danger\" 
                              data-bs-toggle=\"modal\" 
                              data-bs-target=\"#deleteModal\">
                        <i class=\"mdi mdi-delete me-2\"></i>Supprimer
                      </button>
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
                  Tâche: {{ tache.titre|slice(0, 20) }}{{ tache.titre|length > 20 ? '...' : '' }}
                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Modal -->
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
            <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer cette tâche ?</h5>
            <p class=\"text-muted\">Cette action est irréversible et supprimera définitivement la tâche \"<strong>{{ tache.titre }}</strong>\".</p>
          </div>
          <div class=\"modal-footer justify-content-center border-0 pt-0\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\" style=\"
              padding: 10px 24px;
              border-radius: 12px;
              font-weight: 600;
            \">
              <i class=\"mdi mdi-close me-2\"></i>Annuler
            </button>
            <form method=\"POST\" action=\"{{ path('app_tache_delete', { id: tache.id }) }}\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tache.id) }}\">
              <button type=\"submit\" class=\"btn btn-gradient-danger\">
                <i class=\"mdi mdi-delete me-2\"></i>Supprimer
              </button>
            </form>
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
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert.alert-dismissible');
          alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          });
        }, 5000);
        
        // Add hover animations to cards
        const cards = document.querySelectorAll('.detail-card');
        cards.forEach((card, index) => {
          card.style.animationDelay = \${index * 0.1}s;
        });
        
        // Add ripple effect to buttons
        const buttons = document.querySelectorAll('.btn-gradient-primary, .btn-gradient-warning, .btn-gradient-danger, .btn-gradient-secondary');
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
        
        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
          @keyframes ripple {
            to {
              transform: scale(4);
              opacity: 0;
            }
          }
        `;
        document.head.appendChild(style);
      });
    </script>
  </body>
</html>", "tache/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\tache\\show.html.twig");
    }
}
