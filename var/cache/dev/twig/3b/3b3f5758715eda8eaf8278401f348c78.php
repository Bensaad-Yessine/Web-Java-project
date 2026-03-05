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

/* preference_alerte/show.html.twig */
class __TwigTemplate_09ea49309011cc91e34574dd17339c52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/show.html.twig"));

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
      .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
      }
      .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      }
      .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: white;
        margin: 0 auto;
      }
      .stat-count {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 5px;
      }
      .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
      }
      .card-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .card-5 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      
      .priority-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        display: inline-block;
        color: white;
        border: none;
      }
      
      .priority-high { background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%); }
      .priority-medium { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .priority-low { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      
      .status-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        display: inline-block;
        color: white;
        border: none;
      }
      
      .status-completed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .status-inprogress { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .status-pending { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      
      .type-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        display: inline-block;
        color: white;
        border: none;
      }
      
      .type-bug { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); }
      .type-feature { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .type-improvement { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .type-maintenance { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .type-urgent { background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%); }
      .type-other { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      
      .task-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 16px;
        flex-shrink: 0;
      }
      
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
      
      .action-buttons {
        display: flex;
        gap: 5px;
      }
      
      .action-buttons .btn {
        padding: 5px 10px;
        border-radius: 5px;
      }
      
      .search-box {
        max-width: 300px;
      }
      
      .table-hover tbody tr:hover {
        background-color: rgba(102, 126, 234, 0.05);
      }
      
      .empty-state {
        text-align: center;
        padding: 50px 20px;
      }
      
      .empty-state i {
        font-size: 60px;
        color: #dee2e6;
        margin-bottom: 20px;
      }

      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }
      
      /* Fix for profile section alignment */
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
      
      /* Fix for navbar profile alignment */
      .navbar-profile {
        display: flex;
        align-items: center;
        padding: 5px 0;
      }
      
      /* Ensure table cells align properly */
      .table td {
        vertical-align: middle;
      }
      
      /* Fix for duplicate avatar display */
      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }
      
      /* Task details styles */
      .task-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
      }
      
      .task-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: white;
        color: #667eea;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        font-weight: bold;
        margin: 0 auto 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
      }
      
      .detail-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 20px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      
      .detail-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.12);
      }
      
      .detail-card-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #667eea;
        display: flex;
        align-items: center;
      }
      
      .detail-card-title i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 10px;
        font-size: 1.5rem;
      }
      
      .detail-row {
        display: flex;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
      }
      
      .detail-row:last-child {
        border-bottom: none;
      }
      
      .detail-label {
        font-weight: 600;
        color: #6c757d;
        width: 180px;
        display: flex;
        align-items: center;
      }
      
      .detail-label i {
        margin-right: 10px;
        color: #667eea;
        font-size: 18px;
      }
      
      .detail-value {
        color: #2c3e50;
        font-weight: 500;
        flex: 1;
      }
      
      .progress {
        background-color: #f0f0f0;
        border-radius: 10px;
        overflow: hidden;
      }
      
      .progress-bar {
        border-radius: 10px;
      }
      
      .empty-value {
        color: #95a5a6;
        font-style: italic;
      }
      
      code {
        background: #f8f9fa;
        padding: 4px 8px;
        border-radius: 4px;
        color: #667eea;
        font-family: 'Courier New', monospace;
      }
      
      .btn-gradient-warning {
        background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
        color: white;
        border: none;
      }
      
      .btn-gradient-warning:hover {
        background: linear-gradient(135deg, #ff7043 0%, #ffa726 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 167, 38, 0.3);
      }
      
      .btn-gradient-danger {
        background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
        color: white;
        border: none;
      }
      
      .btn-gradient-danger:hover {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(245, 87, 108, 0.3);
      }
      
      .btn-gradient-secondary {
        background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
        color: white;
        border: none;
      }
      
      .btn-gradient-secondary:hover {
        background: linear-gradient(135deg, #7f8c8d 0%, #95a5a6 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(149, 165, 166, 0.3);
      }
      
      .btn-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
      }
      
      .btn-gradient-primary:hover {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 422
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 425
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 426
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
        // line 434
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "user", [], "any", false, false, false, 434)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 435
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 435, $this->source); })()), "user", [], "any", false, false, false, 435), "profilePic", [], "any", false, false, false, 435)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 436
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 436, $this->source); })()), "user", [], "any", false, false, false, 436), "profilePic", [], "any", false, false, false, 436))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 437, $this->source); })()), "user", [], "any", false, false, false, 437), "prenom", [], "any", false, false, false, 437), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 440
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 441
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 441, $this->source); })()), "user", [], "any", false, false, false, 441), "prenom", [], "any", false, false, false, 441))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 441, $this->source); })()), "user", [], "any", false, false, false, 441), "nom", [], "any", false, false, false, 441))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 444
            yield "                  ";
        } else {
            // line 445
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 447
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 450
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 450, $this->source); })()), "user", [], "any", false, false, false, 450)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 451
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 451, $this->source); })()), "user", [], "any", false, false, false, 451), "prenom", [], "any", false, false, false, 451), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 451, $this->source); })()), "user", [], "any", false, false, false, 451), "nom", [], "any", false, false, false, 451), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 452
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 452, $this->source); })()), "user", [], "any", false, false, false, 452), "email", [], "any", false, false, false, 452), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 454
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 454, $this->source); })()), "user", [], "any", false, false, false, 454), "roles", [], "any", false, false, false, 454))) {
                // line 455
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 457
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 459
            yield "                    </div>
                  ";
        } else {
            // line 461
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 464
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
        // line 484
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
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 544
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
            <a class=\"nav-link\" href=\"";
        // line 554
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
        // line 564
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
        // line 574
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
            <a class=\"navbar-brand brand-logo\" href=\"";
        // line 589
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <img src=\"";
        // line 590
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 592
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <img src=\"";
        // line 593
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
        // line 633
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 633, $this->source); })()), "user", [], "any", false, false, false, 633)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 634
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 635
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 635, $this->source); })()), "user", [], "any", false, false, false, 635), "profilePic", [], "any", false, false, false, 635)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 636
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 636, $this->source); })()), "user", [], "any", false, false, false, 636), "profilePic", [], "any", false, false, false, 636))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "user", [], "any", false, false, false, 637), "prenom", [], "any", false, false, false, 637), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 640
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 641
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 641, $this->source); })()), "user", [], "any", false, false, false, 641), "prenom", [], "any", false, false, false, 641))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 641, $this->source); })()), "user", [], "any", false, false, false, 641), "nom", [], "any", false, false, false, 641))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 644
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 646
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 646, $this->source); })()), "user", [], "any", false, false, false, 646), "prenom", [], "any", false, false, false, 646), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 646, $this->source); })()), "user", [], "any", false, false, false, 646), "nom", [], "any", false, false, false, 646), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 649
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 649, $this->source); })()), "user", [], "any", false, false, false, 649), "roles", [], "any", false, false, false, 649))) {
                // line 650
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 652
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 654
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 658
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 661
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 666
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 666, $this->source); })()), "user", [], "any", false, false, false, 666)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 667
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 667, $this->source); })()), "user", [], "any", false, false, false, 667), "prenom", [], "any", false, false, false, 667), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 667, $this->source); })()), "user", [], "any", false, false, false, 667), "nom", [], "any", false, false, false, 667), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 668
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 668, $this->source); })()), "user", [], "any", false, false, false, 668), "email", [], "any", false, false, false, 668), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 670
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 670, $this->source); })()), "user", [], "any", false, false, false, 670), "roles", [], "any", false, false, false, 670))) {
                // line 671
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 673
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 675
            yield "                      </small>
                    ";
        } else {
            // line 677
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 680
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 682
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 682, $this->source); })()), "user", [], "any", false, false, false, 682)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 683
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 683, $this->source); })()), "user", [], "any", false, false, false, 683), "id", [], "any", false, false, false, 683)]), "html", null, true);
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
            // line 693
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 693, $this->source); })()), "user", [], "any", false, false, false, 693), "id", [], "any", false, false, false, 693)]), "html", null, true);
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
        // line 705
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
        // line 725
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 725, $this->source); })()), "flashes", [], "any", false, false, false, 725));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 726
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 727
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 728
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 729
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 733
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 734
        yield "
            <!-- Content -->
            <div class=\"main-panel\">
                <div class=\"content-wrapper\">
                    <!-- Flash Messages -->
                    ";
        // line 739
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 739, $this->source); })()), "flashes", [], "any", false, false, false, 739));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 740
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 741
                yield "                            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                                <i class=\"mdi mdi-";
                // line 742
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                                ";
                // line 743
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 747
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 748
        yield "
                    <!-- Header -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"page-header\">
                                <h3 class=\"page-title\">
                                    <span class=\"page-title-icon bg-gradient-info text-white me-2\">
                                        <i class=\"mdi mdi-eye\"></i>
                                    </span> 
                                    Détails de la Préférence d'Alerte
                                </h3>
                                <nav aria-label=\"breadcrumb\">
                                    <ul class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\">
                                            <a href=\"";
        // line 762
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\" class=\"text-decoration-none\">
                                                <i class=\"mdi mdi-bell-ring-outline me-1\"></i>
                                                Liste des Préférences
                                            </a>
                                        </li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                            <span></span>Détails: ";
        // line 768
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 768, $this->source); })()), "nom", [], "any", false, false, false, 768), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 768, $this->source); })()), "nom", [], "any", false, false, false, 768)) > 30)) ? ("...") : (""));
        yield "
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Preference Header -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"task-header\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-2 text-center\">
                                        <div class=\"task-avatar\">
                                            <i class=\"mdi mdi-bell-cog\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-md-7\">
                                        <h2 class=\"mb-2\">";
        // line 787
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 787, $this->source); })()), "nom", [], "any", false, false, false, 787)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 787, $this->source); })()), "nom", [], "any", false, false, false, 787), "html", null, true)) : ("Préférence sans nom"));
        yield "</h2>
                                        <p class=\"mb-3 opacity-75\">
                                            <i class=\"mdi mdi-account-outline me-2\"></i>
                                            ";
        // line 790
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 790, $this->source); })()), "etudiant", [], "any", false, false, false, 790)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 791
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 791, $this->source); })()), "etudiant", [], "any", false, false, false, 791), "prenom", [], "any", false, false, false, 791), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 791, $this->source); })()), "etudiant", [], "any", false, false, false, 791), "nom", [], "any", false, false, false, 791), "html", null, true);
            yield "
                                            ";
        } else {
            // line 793
            yield "                                                Préférence globale
                                            ";
        }
        // line 795
        yield "                                        </p>
                                        <div class=\"d-flex flex-wrap gap-2\">
                                            <!-- Status Badge -->
                                            <span class=\"status-badge ";
        // line 798
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 798, $this->source); })()), "isActive", [], "any", false, false, false, 798)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-completed") : ("status-pending"));
        yield "\">
                                                <i class=\"mdi mdi-";
        // line 799
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 799, $this->source); })()), "isActive", [], "any", false, false, false, 799)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check-circle") : ("close-circle"));
        yield " me-1\"></i>
                                                ";
        // line 800
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 800, $this->source); })()), "isActive", [], "any", false, false, false, 800)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
        yield "
                                            </span>
                                            
                                            <!-- Email Badge -->
                                            <span class=\"type-badge ";
        // line 804
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 804, $this->source); })()), "emailActif", [], "any", false, false, false, 804)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("type-feature") : ("type-other"));
        yield "\">
                                                <i class=\"mdi mdi-email me-1\"></i>
                                                Email ";
        // line 806
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 806, $this->source); })()), "emailActif", [], "any", false, false, false, 806)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                            </span>
                                            
                                            <!-- Push Badge -->
                                            <span class=\"type-badge ";
        // line 810
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 810, $this->source); })()), "pushActif", [], "any", false, false, false, 810)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("type-bug") : ("type-other"));
        yield "\">
                                                <i class=\"mdi mdi-cellphone me-1\"></i>
                                                Push ";
        // line 812
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 812, $this->source); })()), "pushActif", [], "any", false, false, false, 812)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                            </span>
                                            
                                            <!-- Site Notification Badge -->
                                            <span class=\"type-badge ";
        // line 816
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 816, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 816)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("type-improvement") : ("type-other"));
        yield "\">
                                                <i class=\"mdi mdi-web me-1\"></i>
                                                Site ";
        // line 818
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 818, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 818)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- Action Buttons -->
                                    <div class=\"col-md-3\">
                                        <div class=\"btn-group-vertical w-100\" role=\"group\" aria-label=\"Actions de la préférence\">
                                            <a href=\"";
        // line 826
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 826, $this->source); })()), "id", [], "any", false, false, false, 826)]), "html", null, true);
        yield "\" class=\"btn btn-warning mb-2\">
                                                <i class=\"mdi mdi-pencil-circle-outline me-2\"></i>
                                                Modifier
                                            </a>
                                            
                                            <form action=\"";
        // line 831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 831, $this->source); })()), "id", [], "any", false, false, false, 831)]), "html", null, true);
        yield "\" 
                                                method=\"POST\" 
                                                onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette préférence ?');\"
                                                class=\"w-100\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 835, $this->source); })()), "id", [], "any", false, false, false, 835))), "html", null, true);
        yield "\">
                                                <button type=\"submit\" class=\"btn btn-danger w-100\">
                                                    <i class=\"mdi mdi-delete-circle-outline me-2\"></i>
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Preference Details -->
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
        // line 864
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 864, $this->source); })()), "id", [], "any", false, false, false, 864), "html", null, true);
        yield "</code>
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-tag-text\"></i>
                                            Nom
                                        </div>
                                        <div class=\"detail-value\">
                                            ";
        // line 874
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 874, $this->source); })()), "nom", [], "any", false, false, false, 874)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 874, $this->source); })()), "nom", [], "any", false, false, false, 874), "html", null, true)) : ("<span class=\"empty-value\">Non défini</span>"));
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-calendar\"></i>
                                            Date de création
                                        </div>
                                        <div class=\"detail-value\">
                                            ";
        // line 884
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 884, $this->source); })()), "dateCreation", [], "any", false, false, false, 884)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 885
            yield "                                                <i class=\"mdi mdi-calendar me-1\"></i>
                                                ";
            // line 886
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 886, $this->source); })()), "dateCreation", [], "any", false, false, false, 886), "d/m/Y H:i"), "html", null, true);
            yield "
                                            ";
        } else {
            // line 888
            yield "                                                <span class=\"empty-value\">Non définie</span>
                                            ";
        }
        // line 890
        yield "                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-calendar-edit\"></i>
                                            Dernière mise à jour
                                        </div>
                                        <div class=\"detail-value\">
                                            ";
        // line 899
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 899, $this->source); })()), "dateMiseAJour", [], "any", false, false, false, 899)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 900
            yield "                                                <i class=\"mdi mdi-calendar me-1\"></i>
                                                ";
            // line 901
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 901, $this->source); })()), "dateMiseAJour", [], "any", false, false, false, 901), "d/m/Y H:i"), "html", null, true);
            yield "
                                            ";
        } else {
            // line 903
            yield "                                                <span class=\"empty-value\">Non définie</span>
                                            ";
        }
        // line 905
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Status Information -->
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-toggle-switch\"></i>
                                        Statut & Activation
                                    </h4>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-power\"></i>
                                            Statut
                                        </div>
                                        <div class=\"detail-value\">
                                            <span class=\"status-badge ";
        // line 926
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 926, $this->source); })()), "isActive", [], "any", false, false, false, 926)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-completed") : ("status-pending"));
        yield "\">
                                                ";
        // line 927
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 927, $this->source); })()), "isActive", [], "any", false, false, false, 927)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
        yield "
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-star\"></i>
                                            Par défaut
                                        </div>
                                        <div class=\"detail-value\">
                                            <span class=\"type-badge ";
        // line 938
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 938, $this->source); })()), "isDefault", [], "any", false, false, false, 938)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("type-feature") : ("type-other"));
        yield "\">
                                                ";
        // line 939
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 939, $this->source); })()), "isDefault", [], "any", false, false, false, 939)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notification Channels -->
                    <div class=\"row\">
                        <div class=\"col-md-12 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-bell-ring\"></i>
                                        Canaux de Notification
                                    </h4>
                                    
                                    <div class=\"row\">
                                        <!-- Email -->
                                        <div class=\"col-md-4\">
                                            <div class=\"notification-channel\">
                                                <div class=\"channel-icon ";
        // line 962
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 962, $this->source); })()), "emailActif", [], "any", false, false, false, 962)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
        yield "\">
                                                    <i class=\"mdi mdi-email-outline\"></i>
                                                </div>
                                                <div class=\"channel-info\">
                                                    <h6 class=\"text-dark\">Email</h6>
                                                    <p class=\"channel-status ";
        // line 967
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 967, $this->source); })()), "emailActif", [], "any", false, false, false, 967)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-muted"));
        yield "\">
                                                        <i class=\"mdi mdi-";
        // line 968
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 968, $this->source); })()), "emailActif", [], "any", false, false, false, 968)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check") : ("close"));
        yield " me-1\"></i>
                                                        ";
        // line 969
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 969, $this->source); })()), "emailActif", [], "any", false, false, false, 969)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Activé") : ("Désactivé"));
        yield "
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Push -->
                                        <div class=\"col-md-4\">
                                            <div class=\"notification-channel\">
                                                <div class=\"channel-icon ";
        // line 978
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 978, $this->source); })()), "pushActif", [], "any", false, false, false, 978)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
        yield "\">
                                                    <i class=\"mdi mdi-cellphone-message\"></i>
                                                </div>
                                                <div class=\"channel-info\">
                                                    <h6 class=\"text-dark\">Push</h6>
                                                    <p class=\"channel-status ";
        // line 983
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 983, $this->source); })()), "pushActif", [], "any", false, false, false, 983)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-muted"));
        yield "\">
                                                        <i class=\"mdi mdi-";
        // line 984
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 984, $this->source); })()), "pushActif", [], "any", false, false, false, 984)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check") : ("close"));
        yield " me-1\"></i>
                                                        ";
        // line 985
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 985, $this->source); })()), "pushActif", [], "any", false, false, false, 985)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Activé") : ("Désactivé"));
        yield "
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Site -->
                                        <div class=\"col-md-4\">
                                            <div class=\"notification-channel\">
                                                <div class=\"channel-icon ";
        // line 994
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 994, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 994)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
        yield "\">
                                                    <i class=\"mdi mdi-web\"></i>
                                                </div>
                                                <div class=\"channel-info\">
                                                    <h6 class=\"text-dark\">Site Web</h6>
                                                    <p class=\"channel-status ";
        // line 999
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 999, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 999)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-muted"));
        yield "\">
                                                        <i class=\"mdi mdi-";
        // line 1000
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1000, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 1000)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("check") : ("close"));
        yield " me-1\"></i>
                                                        ";
        // line 1001
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1001, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 1001)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Activé") : ("Désactivé"));
        yield "
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timing Settings -->
                    <div class=\"row\">
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-timer\"></i>
                                        Paramètres de Temporisation
                                    </h4>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-clock-alert\"></i>
                                            Délai de rappel
                                        </div>
                                        <div class=\"detail-value\">
                                            ";
        // line 1028
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1028, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 1028)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1029
            yield "                                                <i class=\"mdi mdi-timer-sand me-1\"></i>
                                                ";
            // line 1030
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1030, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 1030), "html", null, true);
            yield " minutes
                                            ";
        } else {
            // line 1032
            yield "                                                <span class=\"empty-value\">Non défini</span>
                                            ";
        }
        // line 1034
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Silence Period -->
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-volume-off\"></i>
                                        Période de Silence
                                    </h4>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-clock-start\"></i>
                                            Début silence
                                        </div>
                                        <div class=\"detail-value\">
                                            ";
        // line 1055
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1055, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 1055)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1056
            yield "                                                <i class=\"mdi mdi-clock-outline me-1\"></i>
                                                ";
            // line 1057
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1057, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 1057), "H:i"), "html", null, true);
            yield "
                                            ";
        } else {
            // line 1059
            yield "                                                <span class=\"empty-value\">Non définie</span>
                                            ";
        }
        // line 1061
        yield "                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-clock-end\"></i>
                                            Fin silence
                                        </div>
                                        <div class=\"detail-value\">
                                            ";
        // line 1070
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1070, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 1070)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1071
            yield "                                                <i class=\"mdi mdi-clock-outline me-1\"></i>
                                                ";
            // line 1072
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1072, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 1072), "H:i"), "html", null, true);
            yield "
                                            ";
        } else {
            // line 1074
            yield "                                                <span class=\"empty-value\">Non définie</span>
                                            ";
        }
        // line 1076
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Information -->
                    <div class=\"row\">
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-account-circle-outline\"></i>
                                        Étudiant Associé
                                    </h4>
                                    
                                    ";
        // line 1093
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1093, $this->source); })()), "etudiant", [], "any", false, false, false, 1093)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1094
            yield "                                        <div class=\"detail-row\">
                                            <div class=\"detail-label\">
                                                <i class=\"mdi mdi-account\"></i>
                                                Nom complet
                                            </div>
                                            <div class=\"detail-value\">
                                                ";
            // line 1100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1100, $this->source); })()), "etudiant", [], "any", false, false, false, 1100), "nom", [], "any", false, false, false, 1100), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1100, $this->source); })()), "etudiant", [], "any", false, false, false, 1100), "prenom", [], "any", false, false, false, 1100), "html", null, true);
            yield "
                                            </div>
                                        </div>
                                        
                                        <div class=\"detail-row\">
                                            <div class=\"detail-label\">
                                                <i class=\"mdi mdi-email-outline\"></i>
                                                Email
                                            </div>
                                            <div class=\"detail-value\">
                                                <a href=\"mailto:";
            // line 1110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1110, $this->source); })()), "etudiant", [], "any", false, false, false, 1110), "email", [], "any", false, false, false, 1110), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1110, $this->source); })()), "etudiant", [], "any", false, false, false, 1110), "email", [], "any", false, false, false, 1110), "html", null, true);
            yield "</a>
                                            </div>
                                        </div>
                                        
                                        <div class=\"detail-row\">
                                            <div class=\"detail-label\">
                                                <i class=\"mdi mdi-phone-outline\"></i>
                                                Téléphone
                                            </div>
                                            <div class=\"detail-value\">
                                                ";
            // line 1120
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1120, $this->source); })()), "etudiant", [], "any", false, false, false, 1120), "numTel", [], "any", false, false, false, 1120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1121
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1121, $this->source); })()), "etudiant", [], "any", false, false, false, 1121), "numTel", [], "any", false, false, false, 1121), "html", null, true);
                yield "
                                                ";
            } else {
                // line 1123
                yield "                                                    <span class=\"empty-value\">Non renseigné</span>
                                                ";
            }
            // line 1125
            yield "                                            </div>
                                        </div>
                                        
                                        <div class=\"detail-row\">
                                            <div class=\"detail-label\">
                                                <i class=\"mdi mdi-calendar-account\"></i>
                                                Date d'inscription
                                            </div>
                                            <div class=\"detail-value\">
                                                ";
            // line 1134
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1134, $this->source); })()), "etudiant", [], "any", false, false, false, 1134), "createdAt", [], "any", false, false, false, 1134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1135
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1135, $this->source); })()), "etudiant", [], "any", false, false, false, 1135), "createdAt", [], "any", false, false, false, 1135), "d/m/Y"), "html", null, true);
                yield "
                                                ";
            } else {
                // line 1137
                yield "                                                    <span class=\"empty-value\">Non disponible</span>
                                                ";
            }
            // line 1139
            yield "                                            </div>
                                        </div>
                                    ";
        } else {
            // line 1142
            yield "                                        <div class=\"empty-state-small\">
                                            <i class=\"mdi mdi-account-off text-muted mb-2\"></i>
                                            <p class=\"text-muted mb-0\">Aucun étudiant associé à cette préférence</p>
                                            <small class=\"text-muted\">
                                                Cette préférence est globale ou non assignée
                                            </small>
                                        </div>
                                    ";
        }
        // line 1150
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-information-outline\"></i>
                                        Informations Additionnelles
                                    </h4>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-star\"></i>
                                            Par défaut
                                        </div>
                                        <div class=\"detail-value\">
                                            <span class=\"type-badge ";
        // line 1169
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1169, $this->source); })()), "isDefault", [], "any", false, false, false, 1169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("type-feature") : ("type-other"));
        yield "\">
                                                ";
        // line 1170
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1170, $this->source); })()), "isDefault", [], "any", false, false, false, 1170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "
                                            </span>
                                            ";
        // line 1172
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1172, $this->source); })()), "isDefault", [], "any", false, false, false, 1172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1173
            yield "                                                <small class=\"text-muted d-block mt-1\">
                                                    Cette préférence sera utilisée par défaut pour les nouveaux étudiants
                                                </small>
                                            ";
        }
        // line 1177
        yield "                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-format-list-checks\"></i>
                                            Type de notification
                                        </div>
                                        <div class=\"detail-value\">
                                            ";
        // line 1186
        $context["notificationType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1186, $this->source); })()), "getType", [], "method", false, false, false, 1186);
        // line 1187
        yield "                                            <span class=\"badge 
                                                ";
        // line 1188
        if (((isset($context["notificationType"]) || array_key_exists("notificationType", $context) ? $context["notificationType"] : (function () { throw new RuntimeError('Variable "notificationType" does not exist.', 1188, $this->source); })()) == "both")) {
            yield "bg-success
                                                ";
        } elseif ((        // line 1189
(isset($context["notificationType"]) || array_key_exists("notificationType", $context) ? $context["notificationType"] : (function () { throw new RuntimeError('Variable "notificationType" does not exist.', 1189, $this->source); })()) == "email")) {
            yield "bg-primary
                                                ";
        } elseif ((        // line 1190
(isset($context["notificationType"]) || array_key_exists("notificationType", $context) ? $context["notificationType"] : (function () { throw new RuntimeError('Variable "notificationType" does not exist.', 1190, $this->source); })()) == "inapp")) {
            yield "bg-warning
                                                ";
        } else {
            // line 1191
            yield "bg-secondary";
        }
        yield "\">
                                                <i class=\"mdi mdi-";
        // line 1192
        yield ((((isset($context["notificationType"]) || array_key_exists("notificationType", $context) ? $context["notificationType"] : (function () { throw new RuntimeError('Variable "notificationType" does not exist.', 1192, $this->source); })()) == "email")) ? ("email") : ("bell"));
        yield " me-1\"></i>
                                                ";
        // line 1193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["notificationType"]) || array_key_exists("notificationType", $context) ? $context["notificationType"] : (function () { throw new RuntimeError('Variable "notificationType" does not exist.', 1193, $this->source); })())), "html", null, true);
        yield "
                                            </span>
                                            <small class=\"text-muted d-block mt-1\">
                                                ";
        // line 1196
        if (((isset($context["notificationType"]) || array_key_exists("notificationType", $context) ? $context["notificationType"] : (function () { throw new RuntimeError('Variable "notificationType" does not exist.', 1196, $this->source); })()) == "both")) {
            yield "Email + Push
                                                ";
        } elseif ((        // line 1197
(isset($context["notificationType"]) || array_key_exists("notificationType", $context) ? $context["notificationType"] : (function () { throw new RuntimeError('Variable "notificationType" does not exist.', 1197, $this->source); })()) == "email")) {
            yield "Email uniquement
                                                ";
        } elseif ((        // line 1198
(isset($context["notificationType"]) || array_key_exists("notificationType", $context) ? $context["notificationType"] : (function () { throw new RuntimeError('Variable "notificationType" does not exist.', 1198, $this->source); })()) == "inapp")) {
            yield "Push uniquement
                                                ";
        } else {
            // line 1199
            yield "Aucune notification";
        }
        // line 1200
        yield "                                            </small>
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-timer-sand\"></i>
                                            Durée de silence
                                        </div>
                                        <div class=\"detail-value\">
                                            ";
        // line 1210
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1210, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 1210) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1210, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 1210))) {
            // line 1211
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1211, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 1211), "H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1211, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 1211), "H:i"), "html", null, true);
            yield "
                                            ";
        } else {
            // line 1213
            yield "                                                <span class=\"empty-value\">Non définie</span>
                                            ";
        }
        // line 1215
        yield "                                        </div>
                                    </div>
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
                                        <a href=\"";
        // line 1228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\" class=\"btn btn-gradient-secondary\">
                                            <i class=\"mdi mdi-arrow-left me-2\"></i>Retour à la liste
                                        </a>
                                        <a href=\"";
        // line 1231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1231, $this->source); })()), "id", [], "any", false, false, false, 1231)]), "html", null, true);
        yield "\" class=\"btn btn-gradient-warning\">
                                            <i class=\"mdi mdi-pencil me-2\"></i>Modifier
                                        </a>
                                        <a href=\"";
        // line 1234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_new");
        yield "\" class=\"btn btn-gradient-primary\">
                                            <i class=\"mdi mdi-plus-circle me-2\"></i>Nouvelle préférence
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

                </div>
            </div>

            <!-- Delete Modal -->
            <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            Êtes-vous sûr de vouloir supprimer cette préférence d'alerte ? Cette action est irréversible.
                            ";
        // line 1262
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1262, $this->source); })()), "etudiant", [], "any", false, false, false, 1262)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1263
            yield "                                <div class=\"alert alert-warning mt-2\">
                                    <i class=\"mdi mdi-alert-circle me-2\"></i>
                                    Cette préférence est associée à l'étudiant: <strong>";
            // line 1265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1265, $this->source); })()), "etudiant", [], "any", false, false, false, 1265), "prenom", [], "any", false, false, false, 1265), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1265, $this->source); })()), "etudiant", [], "any", false, false, false, 1265), "nom", [], "any", false, false, false, 1265), "html", null, true);
            yield "</strong>
                                </div>
                            ";
        }
        // line 1268
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1268, $this->source); })()), "isDefault", [], "any", false, false, false, 1268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1269
            yield "                                <div class=\"alert alert-info mt-2\">
                                    <i class=\"mdi mdi-information me-2\"></i>
                                    <strong>Attention:</strong> Cette préférence est marquée comme préférence par défaut.
                                </div>
                            ";
        }
        // line 1274
        yield "                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"";
        // line 1277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1277, $this->source); })()), "id", [], "any", false, false, false, 1277)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1278, $this->source); })()), "id", [], "any", false, false, false, 1278))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">Confirmer la suppression</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                        © ";
        // line 1290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        🔔 ";
        // line 1293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1293, $this->source); })()), "nom", [], "any", false, false, false, 1293), 0, 25), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1293, $this->source); })()), "nom", [], "any", false, false, false, 1293)) > 25)) ? ("...") : (""));
        yield "
                        ";
        // line 1294
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1294, $this->source); })()), "isActive", [], "any", false, false, false, 1294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "| <span class=\"text-warning\">Inactive</span>";
        }
        // line 1295
        yield "                    </span>
                </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger text-white\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">
                        <i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>Êtes-vous sûr de vouloir supprimer la préférence <strong>\"";
        // line 1314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1314, $this->source); })()), "nom", [], "any", false, false, false, 1314), "html", null, true);
        yield "\"</strong> ?</p>
                    
                    ";
        // line 1316
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1316, $this->source); })()), "etudiant", [], "any", false, false, false, 1316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1317
            yield "                        <div class=\"alert alert-warning mt-2\">
                            <i class=\"mdi mdi-account-alert me-2\"></i>
                            <strong>Association étudiante:</strong> Cette préférence est associée à ";
            // line 1319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1319, $this->source); })()), "etudiant", [], "any", false, false, false, 1319), "prenom", [], "any", false, false, false, 1319), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1319, $this->source); })()), "etudiant", [], "any", false, false, false, 1319), "nom", [], "any", false, false, false, 1319), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 1322
        yield "                    
                    ";
        // line 1323
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1323, $this->source); })()), "isDefault", [], "any", false, false, false, 1323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1324
            yield "                        <div class=\"alert alert-info mt-2\">
                            <i class=\"mdi mdi-star-alert me-2\"></i>
                            <strong>Préférence par défaut:</strong> Cette préférence est marquée comme configuration par défaut.
                        </div>
                    ";
        }
        // line 1329
        yield "                    
                    <div class=\"mt-3\">
                        <p class=\"text-danger mb-0\">
                            <i class=\"mdi mdi-alert me-1\"></i>
                            <small>Cette action est irréversible. Toutes les configurations seront perdues.</small>
                        </p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"mdi mdi-close me-1\"></i>Annuler
                    </button>
                    <form method=\"POST\" action=\"";
        // line 1341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1341, $this->source); })()), "id", [], "any", false, false, false, 1341)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["preference_alerte"]) || array_key_exists("preference_alerte", $context) ? $context["preference_alerte"] : (function () { throw new RuntimeError('Variable "preference_alerte" does not exist.', 1342, $this->source); })()), "id", [], "any", false, false, false, 1342))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"mdi mdi-delete me-1\"></i>Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 1353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1355
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
        
        // Search functionality for navbar
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
          searchInput.addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            // This would typically filter a table, but we don't have a table on show page
            console.log('Searching for:', filter);
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
        return "preference_alerte/show.html.twig";
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
        return array (  1956 => 1355,  1952 => 1354,  1948 => 1353,  1934 => 1342,  1930 => 1341,  1916 => 1329,  1909 => 1324,  1907 => 1323,  1904 => 1322,  1896 => 1319,  1892 => 1317,  1890 => 1316,  1885 => 1314,  1864 => 1295,  1860 => 1294,  1855 => 1293,  1849 => 1290,  1834 => 1278,  1830 => 1277,  1825 => 1274,  1818 => 1269,  1815 => 1268,  1807 => 1265,  1803 => 1263,  1801 => 1262,  1770 => 1234,  1764 => 1231,  1758 => 1228,  1743 => 1215,  1739 => 1213,  1731 => 1211,  1729 => 1210,  1717 => 1200,  1714 => 1199,  1709 => 1198,  1705 => 1197,  1701 => 1196,  1695 => 1193,  1691 => 1192,  1686 => 1191,  1681 => 1190,  1677 => 1189,  1673 => 1188,  1670 => 1187,  1668 => 1186,  1657 => 1177,  1651 => 1173,  1649 => 1172,  1644 => 1170,  1640 => 1169,  1619 => 1150,  1609 => 1142,  1604 => 1139,  1600 => 1137,  1594 => 1135,  1592 => 1134,  1581 => 1125,  1577 => 1123,  1571 => 1121,  1569 => 1120,  1554 => 1110,  1539 => 1100,  1531 => 1094,  1529 => 1093,  1510 => 1076,  1506 => 1074,  1501 => 1072,  1498 => 1071,  1496 => 1070,  1485 => 1061,  1481 => 1059,  1476 => 1057,  1473 => 1056,  1471 => 1055,  1448 => 1034,  1444 => 1032,  1439 => 1030,  1436 => 1029,  1434 => 1028,  1404 => 1001,  1400 => 1000,  1396 => 999,  1388 => 994,  1376 => 985,  1372 => 984,  1368 => 983,  1360 => 978,  1348 => 969,  1344 => 968,  1340 => 967,  1332 => 962,  1306 => 939,  1302 => 938,  1288 => 927,  1284 => 926,  1261 => 905,  1257 => 903,  1252 => 901,  1249 => 900,  1247 => 899,  1236 => 890,  1232 => 888,  1227 => 886,  1224 => 885,  1222 => 884,  1209 => 874,  1196 => 864,  1164 => 835,  1157 => 831,  1149 => 826,  1138 => 818,  1133 => 816,  1126 => 812,  1121 => 810,  1114 => 806,  1109 => 804,  1102 => 800,  1098 => 799,  1094 => 798,  1089 => 795,  1085 => 793,  1077 => 791,  1075 => 790,  1069 => 787,  1046 => 768,  1037 => 762,  1021 => 748,  1015 => 747,  1005 => 743,  1001 => 742,  996 => 741,  991 => 740,  987 => 739,  980 => 734,  974 => 733,  964 => 729,  960 => 728,  955 => 727,  950 => 726,  946 => 725,  922 => 705,  907 => 693,  893 => 683,  891 => 682,  887 => 680,  882 => 677,  878 => 675,  874 => 673,  870 => 671,  868 => 670,  863 => 668,  856 => 667,  854 => 666,  847 => 661,  840 => 658,  834 => 654,  830 => 652,  826 => 650,  824 => 649,  816 => 646,  812 => 644,  805 => 641,  802 => 640,  796 => 637,  791 => 636,  789 => 635,  786 => 634,  784 => 633,  741 => 593,  737 => 592,  732 => 590,  728 => 589,  710 => 574,  697 => 564,  684 => 554,  671 => 544,  608 => 484,  586 => 464,  581 => 461,  577 => 459,  573 => 457,  569 => 455,  567 => 454,  562 => 452,  555 => 451,  553 => 450,  548 => 447,  542 => 445,  539 => 444,  532 => 441,  529 => 440,  523 => 437,  518 => 436,  515 => 435,  513 => 434,  502 => 426,  498 => 425,  493 => 423,  489 => 422,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
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
      .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
      }
      .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      }
      .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: white;
        margin: 0 auto;
      }
      .stat-count {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 5px;
      }
      .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
      }
      .card-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .card-5 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      
      .priority-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        display: inline-block;
        color: white;
        border: none;
      }
      
      .priority-high { background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%); }
      .priority-medium { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .priority-low { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      
      .status-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        display: inline-block;
        color: white;
        border: none;
      }
      
      .status-completed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .status-inprogress { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .status-pending { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      
      .type-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        display: inline-block;
        color: white;
        border: none;
      }
      
      .type-bug { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); }
      .type-feature { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .type-improvement { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .type-maintenance { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .type-urgent { background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%); }
      .type-other { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      
      .task-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 16px;
        flex-shrink: 0;
      }
      
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
      
      .action-buttons {
        display: flex;
        gap: 5px;
      }
      
      .action-buttons .btn {
        padding: 5px 10px;
        border-radius: 5px;
      }
      
      .search-box {
        max-width: 300px;
      }
      
      .table-hover tbody tr:hover {
        background-color: rgba(102, 126, 234, 0.05);
      }
      
      .empty-state {
        text-align: center;
        padding: 50px 20px;
      }
      
      .empty-state i {
        font-size: 60px;
        color: #dee2e6;
        margin-bottom: 20px;
      }

      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }
      
      /* Fix for profile section alignment */
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
      
      /* Fix for navbar profile alignment */
      .navbar-profile {
        display: flex;
        align-items: center;
        padding: 5px 0;
      }
      
      /* Ensure table cells align properly */
      .table td {
        vertical-align: middle;
      }
      
      /* Fix for duplicate avatar display */
      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }
      
      /* Task details styles */
      .task-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
      }
      
      .task-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: white;
        color: #667eea;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        font-weight: bold;
        margin: 0 auto 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
      }
      
      .detail-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 20px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      
      .detail-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.12);
      }
      
      .detail-card-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #667eea;
        display: flex;
        align-items: center;
      }
      
      .detail-card-title i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 10px;
        font-size: 1.5rem;
      }
      
      .detail-row {
        display: flex;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
      }
      
      .detail-row:last-child {
        border-bottom: none;
      }
      
      .detail-label {
        font-weight: 600;
        color: #6c757d;
        width: 180px;
        display: flex;
        align-items: center;
      }
      
      .detail-label i {
        margin-right: 10px;
        color: #667eea;
        font-size: 18px;
      }
      
      .detail-value {
        color: #2c3e50;
        font-weight: 500;
        flex: 1;
      }
      
      .progress {
        background-color: #f0f0f0;
        border-radius: 10px;
        overflow: hidden;
      }
      
      .progress-bar {
        border-radius: 10px;
      }
      
      .empty-value {
        color: #95a5a6;
        font-style: italic;
      }
      
      code {
        background: #f8f9fa;
        padding: 4px 8px;
        border-radius: 4px;
        color: #667eea;
        font-family: 'Courier New', monospace;
      }
      
      .btn-gradient-warning {
        background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
        color: white;
        border: none;
      }
      
      .btn-gradient-warning:hover {
        background: linear-gradient(135deg, #ff7043 0%, #ffa726 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 167, 38, 0.3);
      }
      
      .btn-gradient-danger {
        background: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
        color: white;
        border: none;
      }
      
      .btn-gradient-danger:hover {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(245, 87, 108, 0.3);
      }
      
      .btn-gradient-secondary {
        background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
        color: white;
        border: none;
      }
      
      .btn-gradient-secondary:hover {
        background: linear-gradient(135deg, #7f8c8d 0%, #95a5a6 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(149, 165, 166, 0.3);
      }
      
      .btn-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
      }
      
      .btn-gradient-primary:hover {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
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
                <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }} me-2\"></i>
                  {{ message }}
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              {% endfor %}
            {% endfor %}

            <!-- Content -->
            <div class=\"main-panel\">
                <div class=\"content-wrapper\">
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

                    <!-- Header -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"page-header\">
                                <h3 class=\"page-title\">
                                    <span class=\"page-title-icon bg-gradient-info text-white me-2\">
                                        <i class=\"mdi mdi-eye\"></i>
                                    </span> 
                                    Détails de la Préférence d'Alerte
                                </h3>
                                <nav aria-label=\"breadcrumb\">
                                    <ul class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\">
                                            <a href=\"{{ path('app_preference_alerte_index') }}\" class=\"text-decoration-none\">
                                                <i class=\"mdi mdi-bell-ring-outline me-1\"></i>
                                                Liste des Préférences
                                            </a>
                                        </li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                            <span></span>Détails: {{ preference_alerte.nom|slice(0, 30) }}{{ preference_alerte.nom|length > 30 ? '...' : '' }}
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Preference Header -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"task-header\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-2 text-center\">
                                        <div class=\"task-avatar\">
                                            <i class=\"mdi mdi-bell-cog\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-md-7\">
                                        <h2 class=\"mb-2\">{{ preference_alerte.nom ?: 'Préférence sans nom' }}</h2>
                                        <p class=\"mb-3 opacity-75\">
                                            <i class=\"mdi mdi-account-outline me-2\"></i>
                                            {% if preference_alerte.etudiant %}
                                                {{ preference_alerte.etudiant.prenom }} {{ preference_alerte.etudiant.nom }}
                                            {% else %}
                                                Préférence globale
                                            {% endif %}
                                        </p>
                                        <div class=\"d-flex flex-wrap gap-2\">
                                            <!-- Status Badge -->
                                            <span class=\"status-badge {{ preference_alerte.isActive ? 'status-completed' : 'status-pending' }}\">
                                                <i class=\"mdi mdi-{{ preference_alerte.isActive ? 'check-circle' : 'close-circle' }} me-1\"></i>
                                                {{ preference_alerte.isActive ? 'Active' : 'Inactive' }}
                                            </span>
                                            
                                            <!-- Email Badge -->
                                            <span class=\"type-badge {{ preference_alerte.emailActif ? 'type-feature' : 'type-other' }}\">
                                                <i class=\"mdi mdi-email me-1\"></i>
                                                Email {{ preference_alerte.emailActif ? 'Actif' : 'Inactif' }}
                                            </span>
                                            
                                            <!-- Push Badge -->
                                            <span class=\"type-badge {{ preference_alerte.pushActif ? 'type-bug' : 'type-other' }}\">
                                                <i class=\"mdi mdi-cellphone me-1\"></i>
                                                Push {{ preference_alerte.pushActif ? 'Actif' : 'Inactif' }}
                                            </span>
                                            
                                            <!-- Site Notification Badge -->
                                            <span class=\"type-badge {{ preference_alerte.siteNotifActive ? 'type-improvement' : 'type-other' }}\">
                                                <i class=\"mdi mdi-web me-1\"></i>
                                                Site {{ preference_alerte.siteNotifActive ? 'Actif' : 'Inactif' }}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- Action Buttons -->
                                    <div class=\"col-md-3\">
                                        <div class=\"btn-group-vertical w-100\" role=\"group\" aria-label=\"Actions de la préférence\">
                                            <a href=\"{{ path('app_preference_alerte_edit', {'id': preference_alerte.id}) }}\" class=\"btn btn-warning mb-2\">
                                                <i class=\"mdi mdi-pencil-circle-outline me-2\"></i>
                                                Modifier
                                            </a>
                                            
                                            <form action=\"{{ path('app_preference_alerte_delete', {'id': preference_alerte.id}) }}\" 
                                                method=\"POST\" 
                                                onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette préférence ?');\"
                                                class=\"w-100\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ preference_alerte.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-danger w-100\">
                                                    <i class=\"mdi mdi-delete-circle-outline me-2\"></i>
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Preference Details -->
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
                                            <code>#{{ preference_alerte.id }}</code>
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-tag-text\"></i>
                                            Nom
                                        </div>
                                        <div class=\"detail-value\">
                                            {{ preference_alerte.nom ?: '<span class=\"empty-value\">Non défini</span>' }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-calendar\"></i>
                                            Date de création
                                        </div>
                                        <div class=\"detail-value\">
                                            {% if preference_alerte.dateCreation %}
                                                <i class=\"mdi mdi-calendar me-1\"></i>
                                                {{ preference_alerte.dateCreation|date('d/m/Y H:i') }}
                                            {% else %}
                                                <span class=\"empty-value\">Non définie</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-calendar-edit\"></i>
                                            Dernière mise à jour
                                        </div>
                                        <div class=\"detail-value\">
                                            {% if preference_alerte.dateMiseAJour %}
                                                <i class=\"mdi mdi-calendar me-1\"></i>
                                                {{ preference_alerte.dateMiseAJour|date('d/m/Y H:i') }}
                                            {% else %}
                                                <span class=\"empty-value\">Non définie</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Status Information -->
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-toggle-switch\"></i>
                                        Statut & Activation
                                    </h4>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-power\"></i>
                                            Statut
                                        </div>
                                        <div class=\"detail-value\">
                                            <span class=\"status-badge {{ preference_alerte.isActive ? 'status-completed' : 'status-pending' }}\">
                                                {{ preference_alerte.isActive ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-star\"></i>
                                            Par défaut
                                        </div>
                                        <div class=\"detail-value\">
                                            <span class=\"type-badge {{ preference_alerte.isDefault ? 'type-feature' : 'type-other' }}\">
                                                {{ preference_alerte.isDefault ? 'Oui' : 'Non' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notification Channels -->
                    <div class=\"row\">
                        <div class=\"col-md-12 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-bell-ring\"></i>
                                        Canaux de Notification
                                    </h4>
                                    
                                    <div class=\"row\">
                                        <!-- Email -->
                                        <div class=\"col-md-4\">
                                            <div class=\"notification-channel\">
                                                <div class=\"channel-icon {{ preference_alerte.emailActif ? 'active' : 'inactive' }}\">
                                                    <i class=\"mdi mdi-email-outline\"></i>
                                                </div>
                                                <div class=\"channel-info\">
                                                    <h6 class=\"text-dark\">Email</h6>
                                                    <p class=\"channel-status {{ preference_alerte.emailActif ? 'text-success' : 'text-muted' }}\">
                                                        <i class=\"mdi mdi-{{ preference_alerte.emailActif ? 'check' : 'close' }} me-1\"></i>
                                                        {{ preference_alerte.emailActif ? 'Activé' : 'Désactivé' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Push -->
                                        <div class=\"col-md-4\">
                                            <div class=\"notification-channel\">
                                                <div class=\"channel-icon {{ preference_alerte.pushActif ? 'active' : 'inactive' }}\">
                                                    <i class=\"mdi mdi-cellphone-message\"></i>
                                                </div>
                                                <div class=\"channel-info\">
                                                    <h6 class=\"text-dark\">Push</h6>
                                                    <p class=\"channel-status {{ preference_alerte.pushActif ? 'text-success' : 'text-muted' }}\">
                                                        <i class=\"mdi mdi-{{ preference_alerte.pushActif ? 'check' : 'close' }} me-1\"></i>
                                                        {{ preference_alerte.pushActif ? 'Activé' : 'Désactivé' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Site -->
                                        <div class=\"col-md-4\">
                                            <div class=\"notification-channel\">
                                                <div class=\"channel-icon {{ preference_alerte.siteNotifActive ? 'active' : 'inactive' }}\">
                                                    <i class=\"mdi mdi-web\"></i>
                                                </div>
                                                <div class=\"channel-info\">
                                                    <h6 class=\"text-dark\">Site Web</h6>
                                                    <p class=\"channel-status {{ preference_alerte.siteNotifActive ? 'text-success' : 'text-muted' }}\">
                                                        <i class=\"mdi mdi-{{ preference_alerte.siteNotifActive ? 'check' : 'close' }} me-1\"></i>
                                                        {{ preference_alerte.siteNotifActive ? 'Activé' : 'Désactivé' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timing Settings -->
                    <div class=\"row\">
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-timer\"></i>
                                        Paramètres de Temporisation
                                    </h4>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-clock-alert\"></i>
                                            Délai de rappel
                                        </div>
                                        <div class=\"detail-value\">
                                            {% if preference_alerte.delaiRappelMin %}
                                                <i class=\"mdi mdi-timer-sand me-1\"></i>
                                                {{ preference_alerte.delaiRappelMin }} minutes
                                            {% else %}
                                                <span class=\"empty-value\">Non défini</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Silence Period -->
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-volume-off\"></i>
                                        Période de Silence
                                    </h4>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-clock-start\"></i>
                                            Début silence
                                        </div>
                                        <div class=\"detail-value\">
                                            {% if preference_alerte.heureSilenceDebut %}
                                                <i class=\"mdi mdi-clock-outline me-1\"></i>
                                                {{ preference_alerte.heureSilenceDebut|date('H:i') }}
                                            {% else %}
                                                <span class=\"empty-value\">Non définie</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-clock-end\"></i>
                                            Fin silence
                                        </div>
                                        <div class=\"detail-value\">
                                            {% if preference_alerte.heureSilenceFin %}
                                                <i class=\"mdi mdi-clock-outline me-1\"></i>
                                                {{ preference_alerte.heureSilenceFin|date('H:i') }}
                                            {% else %}
                                                <span class=\"empty-value\">Non définie</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Information -->
                    <div class=\"row\">
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-account-circle-outline\"></i>
                                        Étudiant Associé
                                    </h4>
                                    
                                    {% if preference_alerte.etudiant %}
                                        <div class=\"detail-row\">
                                            <div class=\"detail-label\">
                                                <i class=\"mdi mdi-account\"></i>
                                                Nom complet
                                            </div>
                                            <div class=\"detail-value\">
                                                {{ preference_alerte.etudiant.nom }} {{ preference_alerte.etudiant.prenom }}
                                            </div>
                                        </div>
                                        
                                        <div class=\"detail-row\">
                                            <div class=\"detail-label\">
                                                <i class=\"mdi mdi-email-outline\"></i>
                                                Email
                                            </div>
                                            <div class=\"detail-value\">
                                                <a href=\"mailto:{{ preference_alerte.etudiant.email }}\">{{ preference_alerte.etudiant.email }}</a>
                                            </div>
                                        </div>
                                        
                                        <div class=\"detail-row\">
                                            <div class=\"detail-label\">
                                                <i class=\"mdi mdi-phone-outline\"></i>
                                                Téléphone
                                            </div>
                                            <div class=\"detail-value\">
                                                {% if preference_alerte.etudiant.numTel %}
                                                    {{ preference_alerte.etudiant.numTel }}
                                                {% else %}
                                                    <span class=\"empty-value\">Non renseigné</span>
                                                {% endif %}
                                            </div>
                                        </div>
                                        
                                        <div class=\"detail-row\">
                                            <div class=\"detail-label\">
                                                <i class=\"mdi mdi-calendar-account\"></i>
                                                Date d'inscription
                                            </div>
                                            <div class=\"detail-value\">
                                                {% if preference_alerte.etudiant.createdAt %}
                                                    {{ preference_alerte.etudiant.createdAt|date('d/m/Y') }}
                                                {% else %}
                                                    <span class=\"empty-value\">Non disponible</span>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% else %}
                                        <div class=\"empty-state-small\">
                                            <i class=\"mdi mdi-account-off text-muted mb-2\"></i>
                                            <p class=\"text-muted mb-0\">Aucun étudiant associé à cette préférence</p>
                                            <small class=\"text-muted\">
                                                Cette préférence est globale ou non assignée
                                            </small>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card detail-card\">
                                <div class=\"card-body\">
                                    <h4 class=\"detail-card-title\">
                                        <i class=\"mdi mdi-information-outline\"></i>
                                        Informations Additionnelles
                                    </h4>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-star\"></i>
                                            Par défaut
                                        </div>
                                        <div class=\"detail-value\">
                                            <span class=\"type-badge {{ preference_alerte.isDefault ? 'type-feature' : 'type-other' }}\">
                                                {{ preference_alerte.isDefault ? 'Oui' : 'Non' }}
                                            </span>
                                            {% if preference_alerte.isDefault %}
                                                <small class=\"text-muted d-block mt-1\">
                                                    Cette préférence sera utilisée par défaut pour les nouveaux étudiants
                                                </small>
                                            {% endif %}
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-format-list-checks\"></i>
                                            Type de notification
                                        </div>
                                        <div class=\"detail-value\">
                                            {% set notificationType = preference_alerte.getType() %}
                                            <span class=\"badge 
                                                {% if notificationType == 'both' %}bg-success
                                                {% elseif notificationType == 'email' %}bg-primary
                                                {% elseif notificationType == 'inapp' %}bg-warning
                                                {% else %}bg-secondary{% endif %}\">
                                                <i class=\"mdi mdi-{{ notificationType == 'email' ? 'email' : 'bell' }} me-1\"></i>
                                                {{ notificationType|upper }}
                                            </span>
                                            <small class=\"text-muted d-block mt-1\">
                                                {% if notificationType == 'both' %}Email + Push
                                                {% elseif notificationType == 'email' %}Email uniquement
                                                {% elseif notificationType == 'inapp' %}Push uniquement
                                                {% else %}Aucune notification{% endif %}
                                            </small>
                                        </div>
                                    </div>
                                    
                                    <div class=\"detail-row\">
                                        <div class=\"detail-label\">
                                            <i class=\"mdi mdi-timer-sand\"></i>
                                            Durée de silence
                                        </div>
                                        <div class=\"detail-value\">
                                            {% if preference_alerte.heureSilenceDebut and preference_alerte.heureSilenceFin %}
                                                {{ preference_alerte.heureSilenceDebut|date('H:i') }} - {{ preference_alerte.heureSilenceFin|date('H:i') }}
                                            {% else %}
                                                <span class=\"empty-value\">Non définie</span>
                                            {% endif %}
                                        </div>
                                    </div>
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
                                        <a href=\"{{ path('app_preference_alerte_index') }}\" class=\"btn btn-gradient-secondary\">
                                            <i class=\"mdi mdi-arrow-left me-2\"></i>Retour à la liste
                                        </a>
                                        <a href=\"{{ path('app_preference_alerte_edit', { id: preference_alerte.id }) }}\" class=\"btn btn-gradient-warning\">
                                            <i class=\"mdi mdi-pencil me-2\"></i>Modifier
                                        </a>
                                        <a href=\"{{ path('app_preference_alerte_new') }}\" class=\"btn btn-gradient-primary\">
                                            <i class=\"mdi mdi-plus-circle me-2\"></i>Nouvelle préférence
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

                </div>
            </div>

            <!-- Delete Modal -->
            <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            Êtes-vous sûr de vouloir supprimer cette préférence d'alerte ? Cette action est irréversible.
                            {% if preference_alerte.etudiant %}
                                <div class=\"alert alert-warning mt-2\">
                                    <i class=\"mdi mdi-alert-circle me-2\"></i>
                                    Cette préférence est associée à l'étudiant: <strong>{{ preference_alerte.etudiant.prenom }} {{ preference_alerte.etudiant.nom }}</strong>
                                </div>
                            {% endif %}
                            {% if preference_alerte.isDefault %}
                                <div class=\"alert alert-info mt-2\">
                                    <i class=\"mdi mdi-information me-2\"></i>
                                    <strong>Attention:</strong> Cette préférence est marquée comme préférence par défaut.
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"{{ path('app_preference_alerte_delete', { id: preference_alerte.id }) }}\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ preference_alerte.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">Confirmer la suppression</button>
                            </form>
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
                        🔔 {{ preference_alerte.nom|slice(0, 25) }}{{ preference_alerte.nom|length > 25 ? '...' : '' }}
                        {% if not preference_alerte.isActive %}| <span class=\"text-warning\">Inactive</span>{% endif %}
                    </span>
                </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger text-white\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">
                        <i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>Êtes-vous sûr de vouloir supprimer la préférence <strong>\"{{ preference_alerte.nom }}\"</strong> ?</p>
                    
                    {% if preference_alerte.etudiant %}
                        <div class=\"alert alert-warning mt-2\">
                            <i class=\"mdi mdi-account-alert me-2\"></i>
                            <strong>Association étudiante:</strong> Cette préférence est associée à {{ preference_alerte.etudiant.prenom }} {{ preference_alerte.etudiant.nom }}
                        </div>
                    {% endif %}
                    
                    {% if preference_alerte.isDefault %}
                        <div class=\"alert alert-info mt-2\">
                            <i class=\"mdi mdi-star-alert me-2\"></i>
                            <strong>Préférence par défaut:</strong> Cette préférence est marquée comme configuration par défaut.
                        </div>
                    {% endif %}
                    
                    <div class=\"mt-3\">
                        <p class=\"text-danger mb-0\">
                            <i class=\"mdi mdi-alert me-1\"></i>
                            <small>Cette action est irréversible. Toutes les configurations seront perdues.</small>
                        </p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"mdi mdi-close me-1\"></i>Annuler
                    </button>
                    <form method=\"POST\" action=\"{{ path('app_preference_alerte_delete', { id: preference_alerte.id }) }}\" style=\"display: inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ preference_alerte.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"mdi mdi-delete me-1\"></i>Supprimer
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
        
        // Search functionality for navbar
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
          searchInput.addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            // This would typically filter a table, but we don't have a table on show page
            console.log('Searching for:', filter);
          });
        }
      });
    </script>
  </body>
</html>", "preference_alerte/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\preference_alerte\\show.html.twig");
    }
}
