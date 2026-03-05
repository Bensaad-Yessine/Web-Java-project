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

/* user/index.html.twig */
class __TwigTemplate_33b67a902561df95b5f2f8d82642f816 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — User Profile</title>
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
      
      .table td {
        vertical-align: middle;
      }
      
      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }

      /* Filter and Sort Controls */
      .filter-controls {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      }

      .filter-group {
        margin-bottom: 15px;
      }

      .filter-group:last-child {
        margin-bottom: 0;
      }

      .filter-group label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 8px;
        display: block;
        font-size: 0.9rem;
      }

      .filter-group select,
      .filter-group input {
        border-radius: 8px;
        border: 1px solid #dee2e6;
        padding: 8px 12px;
        transition: all 0.3s ease;
      }

      .filter-group select:focus,
      .filter-group input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        outline: none;
      }

      .filter-actions {
        display: flex;
        gap: 10px;
        align-items: center;
      }

      .btn-filter {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
      }

      .btn-filter:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
      }

      .btn-reset {
        background: #6c757d;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
      }

      .btn-reset:hover {
        background: #5a6268;
        transform: translateY(-2px);
      }

      .sort-header {
        cursor: pointer;
        user-select: none;
        position: relative;
        padding-right: 20px;
      }

      .sort-header:hover {
        background-color: rgba(102, 126, 234, 0.1);
      }

      .sort-header .sort-icon {
        position: absolute;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.3;
        transition: opacity 0.3s ease;
      }

      .sort-header.active .sort-icon {
        opacity: 1;
        color: #667eea;
      }

      .loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.8);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        border-radius: 10px;
      }

      .loading-overlay.active {
        display: flex;
      }

      .spinner {
        width: 40px;
        height: 40px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #667eea;
        border-radius: 50%;
        animation: spin 1s linear infinite;
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }

      .results-info {
        font-size: 0.9rem;
        color: #6c757d;
        margin-top: 10px;
      }

      .filter-toggle {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
        border: 1px solid #dee2e6;
      }

      .filter-toggle:hover {
        background: #e9ecef;
        border-color: #667eea;
      }

      .filter-toggle i {
        transition: transform 0.3s ease;
      }

      .filter-toggle.active i {
        transform: rotate(180deg);
      }

      #filterSection {
        transition: all 0.3s ease;
        overflow: hidden;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar (keeping original) -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 364
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 365
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
        // line 373
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 373, $this->source); })()), "user", [], "any", false, false, false, 373)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 374
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 374, $this->source); })()), "user", [], "any", false, false, false, 374), "profilePic", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 375
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "user", [], "any", false, false, false, 375), "profilePic", [], "any", false, false, false, 375))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 376
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 376, $this->source); })()), "user", [], "any", false, false, false, 376), "prenom", [], "any", false, false, false, 376), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 379
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 380, $this->source); })()), "user", [], "any", false, false, false, 380), "prenom", [], "any", false, false, false, 380))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 380, $this->source); })()), "user", [], "any", false, false, false, 380), "nom", [], "any", false, false, false, 380))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 383
            yield "                  ";
        } else {
            // line 384
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 386
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 389
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 389, $this->source); })()), "user", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 390
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 390, $this->source); })()), "user", [], "any", false, false, false, 390), "prenom", [], "any", false, false, false, 390), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 390, $this->source); })()), "user", [], "any", false, false, false, 390), "nom", [], "any", false, false, false, 390), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "user", [], "any", false, false, false, 391), "email", [], "any", false, false, false, 391), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 393
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "user", [], "any", false, false, false, 393), "roles", [], "any", false, false, false, 393))) {
                // line 394
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 396
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 398
            yield "                    </div>
                  ";
        } else {
            // line 400
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 403
        yield "                </div>
              </div>
            </div>
          </li>
          <li class=\"nav-item nav-category\">
            <span class=\"nav-link\">Navigation</span>
          </li>
          
          <li class=\"nav-item menu-items \">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-speedometer\"></i>
              </span>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 421
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-group\"></i>
              </span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 430
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 439
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-school\"></i>
              </span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 448
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-office-building\"></i>
              </span>
              <span class=\"menu-title\">Salles</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 457
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-calendar-clock\"></i>
              </span>
              <span class=\"menu-title\">Séances</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 466
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-multiple\"></i>
              </span>
              <span class=\"menu-title\">Groupes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 475
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
              </span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 484
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-alert-circle-outline\"></i>
              </span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 493
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-heart-pulse\"></i>
              </span>
              <span class=\"menu-title\">Exercices de santé</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 502
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
        <!-- Navbar (keeping original) -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <img src=\"";
        // line 517
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un utilisateur...\" id=\"searchInput\">
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
                        <i class=\"mdi mdi-account-plus\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvel utilisateur</p>
                      <p class=\"text-muted ellipsis mb-0\"> Ahmed Ben Ali inscrit</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 556
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 556, $this->source); })()), "user", [], "any", false, false, false, 556)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 557
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 558
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 558, $this->source); })()), "user", [], "any", false, false, false, 558), "profilePic", [], "any", false, false, false, 558)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 559
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 559, $this->source); })()), "user", [], "any", false, false, false, 559), "profilePic", [], "any", false, false, false, 559))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 560
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 560, $this->source); })()), "user", [], "any", false, false, false, 560), "prenom", [], "any", false, false, false, 560), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 563
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 564
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 564, $this->source); })()), "user", [], "any", false, false, false, 564), "prenom", [], "any", false, false, false, 564))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 564, $this->source); })()), "user", [], "any", false, false, false, 564), "nom", [], "any", false, false, false, 564))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 567
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 569, $this->source); })()), "user", [], "any", false, false, false, 569), "prenom", [], "any", false, false, false, 569), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 569, $this->source); })()), "user", [], "any", false, false, false, 569), "nom", [], "any", false, false, false, 569), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 572
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 572, $this->source); })()), "user", [], "any", false, false, false, 572), "roles", [], "any", false, false, false, 572))) {
                // line 573
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 575
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 577
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 581
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 584
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 589
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 589, $this->source); })()), "user", [], "any", false, false, false, 589)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 590
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 590, $this->source); })()), "user", [], "any", false, false, false, 590), "prenom", [], "any", false, false, false, 590), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 590, $this->source); })()), "user", [], "any", false, false, false, 590), "nom", [], "any", false, false, false, 590), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "email", [], "any", false, false, false, 591), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 593
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 593, $this->source); })()), "user", [], "any", false, false, false, 593), "roles", [], "any", false, false, false, 593))) {
                // line 594
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 596
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 598
            yield "                      </small>
                    ";
        } else {
            // line 600
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 603
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 605
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 605, $this->source); })()), "user", [], "any", false, false, false, 605)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 606
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 606, $this->source); })()), "user", [], "any", false, false, false, 606), "id", [], "any", false, false, false, 606)]), "html", null, true);
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
            // line 616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 616, $this->source); })()), "user", [], "any", false, false, false, 616), "id", [], "any", false, false, false, 616)]), "html", null, true);
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
        // line 628
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
        // line 648
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 648, $this->source); })()), "flashes", [], "any", false, false, false, 648));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 649
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 650
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 651
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 652
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 656
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account-group\"></i>
                    </span> 
                    Gestion des Utilisateurs
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste complète des utilisateurs ESPRIT
                      </li>
                    </ul>
                  </nav>
                  ";
        // line 675
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 675, $this->source); })()), "user", [], "any", false, false, false, 675)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 676
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 679
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 679, $this->source); })()), "user", [], "any", false, false, false, 679), "prenom", [], "any", false, false, false, 679), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 679, $this->source); })()), "user", [], "any", false, false, false, 679), "nom", [], "any", false, false, false, 679), "html", null, true);
            yield "</strong>
                        (";
            // line 680
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 680, $this->source); })()), "user", [], "any", false, false, false, 680), "email", [], "any", false, false, false, 680), "html", null, true);
            yield ")
                        ";
            // line 681
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 681, $this->source); })()), "user", [], "any", false, false, false, 681), "roles", [], "any", false, false, false, 681))) {
                // line 682
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 684
            yield "                      </small>
                    </div>
                  ";
        }
        // line 687
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
                          <h3 class=\"mb-0 stat-count\" id=\"totalCount\">";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 699, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+12%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-account-group\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Utilisateurs</h6>
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
        // line 719
        $context["userRole"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 719, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 719, $this->source); })()), "roles", [], "any", false, false, false, 719)) && !CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 719, $this->source); })()), "roles", [], "any", false, false, false, 719))); }));
        // line 720
        yield "                          <h3 class=\"mb-0 stat-count\" id=\"studentsCount\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userRole"]) || array_key_exists("userRole", $context) ? $context["userRole"] : (function () { throw new RuntimeError('Variable "userRole" does not exist.', 720, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+5%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-school\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Étudiants</h6>
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
        // line 740
        $context["admins"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 740, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 740, $this->source); })()), "roles", [], "any", false, false, false, 740)); }));
        // line 741
        yield "                          <h3 class=\"mb-0 stat-count\" id=\"adminsCount\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 741, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+0%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-shield-account\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Administrateurs</h6>
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
        // line 761
        $context["verified"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 761, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 761, $this->source); })()), "isVerified", [], "any", false, false, false, 761); }));
        // line 762
        yield "                          <h3 class=\"mb-0 stat-count\" id=\"verifiedCount\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 762, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+3%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-check-circle\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Vérifiés</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Users Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\" style=\"position: relative;\">
                    <!-- Loading Overlay -->
                    <div class=\"loading-overlay\" id=\"loadingOverlay\">
                      <div class=\"spinner\"></div>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">👥 Liste des Utilisateurs</h4>
                      <div class=\"d-flex gap-2\">
                        <div class=\"filter-toggle\" id=\"filterToggle\">
                          <i class=\"mdi mdi-filter-variant\"></i>
                          <span>Filtres</span>
                        </div>
                        <a href=\"";
        // line 795
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-gradient-primary btn-icon-text\">
                          <i class=\"mdi mdi-account-plus btn-icon-prepend\"></i>
                          Ajouter un utilisateur
                        </a>
                      </div>
                    </div>

                    <!-- Filter Controls -->
                    <div id=\"filterSection\" style=\"display: none;\">
                      <div class=\"filter-controls\">
                        <div class=\"row\">
                          <div class=\"col-md-3\">
                            <div class=\"filter-group\">
                              <label for=\"searchFilter\">
                                <i class=\"mdi mdi-magnify me-1\"></i>Recherche
                              </label>
                              <input type=\"text\" class=\"form-control\" id=\"searchFilter\" placeholder=\"Nom, prénom, email...\">
                            </div>
                          </div>
                          <div class=\"col-md-2\">
                            <div class=\"filter-group\">
                              <label for=\"roleFilter\">
                                <i class=\"mdi mdi-account-key me-1\"></i>Rôle
                              </label>
                              <select class=\"form-select\" id=\"roleFilter\">
                                <option value=\"\">Tous les rôles</option>
                                <option value=\"admin\">Administrateurs</option>
                                <option value=\"user\">Utilisateurs</option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-md-2\">
                            <div class=\"filter-group\">
                              <label for=\"verifiedFilter\">
                                <i class=\"mdi mdi-check-circle me-1\"></i>Statut
                              </label>
                              <select class=\"form-select\" id=\"verifiedFilter\">
                                <option value=\"\">Tous</option>
                                <option value=\"1\">Vérifiés</option>
                                <option value=\"0\">Non vérifiés</option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-md-2\">
                            <div class=\"filter-group\">
                              <label for=\"sortByFilter\">
                                <i class=\"mdi mdi-sort me-1\"></i>Trier par
                              </label>
                              <select class=\"form-select\" id=\"sortByFilter\">
                                <option value=\"id\">ID</option>
                                <option value=\"nom\">Nom</option>
                                <option value=\"prenom\">Prénom</option>
                                <option value=\"email\">Email</option>
                                <option value=\"DateDeNaissance\">Date de naissance</option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-md-1\">
                            <div class=\"filter-group\">
                              <label for=\"sortOrderFilter\">
                                <i class=\"mdi mdi-sort-ascending me-1\"></i>Ordre
                              </label>
                              <select class=\"form-select\" id=\"sortOrderFilter\">
                                <option value=\"ASC\">A-Z</option>
                                <option value=\"DESC\">Z-A</option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-md-2\">
                            <div class=\"filter-group\">
                              <label>&nbsp;</label>
                              <div class=\"filter-actions\">
                                <button type=\"button\" class=\"btn btn-filter\" id=\"applyFilters\">
                                  <i class=\"mdi mdi-check me-1\"></i>Appliquer
                                </button>
                                <button type=\"button\" class=\"btn btn-reset\" id=\"resetFilters\">
                                  <i class=\"mdi mdi-refresh me-1\"></i>Réinitialiser
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"results-info mt-2\">
                          <i class=\"mdi mdi-information-outline me-1\"></i>
                          <span id=\"resultsCount\">";
        // line 879
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 879, $this->source); })())), "html", null, true);
        yield " utilisateur(s) trouvé(s)</span>
                        </div>
                      </div>
                    </div>

                    ";
        // line 884
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 884, $this->source); })()))) {
            // line 885
            yield "                      <div class=\"empty-state\" id=\"emptyState\">
                        <i class=\"mdi mdi-account-off\"></i>
                        <h4 class=\"text-muted\">Aucun utilisateur trouvé</h4>
                        <p class=\"text-muted mb-4\">Commencez par ajouter un nouvel utilisateur</p>
                        <a href=\"";
            // line 889
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-account-plus\"></i>
                          Ajouter le premier utilisateur
                        </a>
                      </div>
                    ";
        } else {
            // line 895
            yield "                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"usersTable\">
                          <thead>
                            <tr>
                              <th class=\"sort-header\" data-sort=\"id\">
                                ID
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th class=\"sort-header\" data-sort=\"nom\">
                                Utilisateur
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th class=\"sort-header\" data-sort=\"email\">
                                Email
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th class=\"sort-header\" data-sort=\"DateDeNaissance\">
                                Date de naissance
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th>Classe</th>
                              <th>Téléphone</th>
                              <th class=\"sort-header\" data-sort=\"sexe\">
                                Sexe
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th>Rôle</th>
                              <th>Status</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody id=\"usersTableBody\">
                            ";
            // line 927
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 927, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 928
                yield "                              <tr>
                                <td>";
                // line 929
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 929), "html", null, true);
                yield "</td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    ";
                // line 932
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePic", [], "any", false, false, false, 932)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 933
                    yield "                                      <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePic", [], "any", false, false, false, 933))), "html", null, true);
                    yield "\" 
                                           alt=\"";
                    // line 934
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 934), "html", null, true);
                    yield "\" 
                                           class=\"user-avatar-img me-3\">
                                    ";
                } else {
                    // line 937
                    yield "                                      <div class=\"user-avatar me-3\">
                                        ";
                    // line 938
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 938))), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 938))), "html", null, true);
                    yield "
                                      </div>
                                    ";
                }
                // line 941
                yield "                                    <div>
                                      <h6 class=\"mb-0\">";
                // line 942
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 942), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 942), "html", null, true);
                yield "</h6>
                                      <small class=\"text-muted\">";
                // line 943
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 943), "html", null, true);
                yield "</small>
                                      ";
                // line 944
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 944, $this->source); })()), "user", [], "any", false, false, false, 944) && (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 944) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 944, $this->source); })()), "user", [], "any", false, false, false, 944), "id", [], "any", false, false, false, 944)))) {
                    // line 945
                    yield "                                        <div class=\"mt-1\">
                                          <small class=\"text-primary\">
                                            <i class=\"mdi mdi-account-circle me-1\"></i>C'est vous
                                          </small>
                                        </div>
                                      ";
                }
                // line 951
                yield "                                    </div>
                                  </div>
                                </td>
                                <td>";
                // line 954
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 954), "html", null, true);
                yield "</td>
                                <td>";
                // line 955
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateDeNaissance", [], "any", false, false, false, 955)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateDeNaissance", [], "any", false, false, false, 955), "d/m/Y"), "html", null, true)) : ("—"));
                yield "</td>
                                <td>
                                  ";
                // line 957
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "classe", [], "any", false, false, false, 957)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 958
                    yield "                                    <span class=\"badge badge-light\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "classe", [], "any", false, false, false, 958), "nom", [], "any", false, false, false, 958), "html", null, true);
                    yield "</span>
                                  ";
                } else {
                    // line 960
                    yield "                                    <span class=\"text-muted\">—</span>
                                  ";
                }
                // line 962
                yield "                                </td>
                                <td>
                                  ";
                // line 964
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numTel", [], "any", false, false, false, 964)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 965
                    yield "                                    <span class=\"badge badge-info\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numTel", [], "any", false, false, false, 965), "html", null, true);
                    yield "</span>
                                  ";
                } else {
                    // line 967
                    yield "                                    <span class=\"text-muted\">—</span>
                                  ";
                }
                // line 969
                yield "                                </td>
                                <td>
                                  ";
                // line 971
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 971) == "Homme")) {
                    // line 972
                    yield "                                    <span class=\"badge badge-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 972), "html", null, true);
                    yield "</span>
                                  ";
                } else {
                    // line 974
                    yield "                                    <span class=\"badge badge-pink\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 974), "html", null, true);
                    yield "</span>
                                  ";
                }
                // line 976
                yield "                                </td>
                                <td>
                                  ";
                // line 978
                if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 978))) {
                    // line 979
                    yield "                                    <span class=\"badge badge-admin\">Administrateur</span>
                                  ";
                } else {
                    // line 981
                    yield "                                    <span class=\"badge badge-etudiant\">Utilisateur</span>
                                  ";
                }
                // line 983
                yield "                                </td>
                                <td>
                                  ";
                // line 985
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 985)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 986
                    yield "                                    <span class=\"badge badge-success\">Vérifié</span>
                                  ";
                } else {
                    // line 988
                    yield "                                    <span class=\"badge badge-warning\">Non vérifié</span>
                                  ";
                }
                // line 990
                yield "                                </td>
                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"";
                // line 993
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 993)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-info btn-sm btn-icon\"
                                       title=\"Voir\">
                                      <i class=\"mdi mdi-eye\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-outline\">
                                        Privacy Settings
                                    </a>
                                    <button onclick=\"exportData()\" class=\"btn btn-outline\">
                                        Export My Data
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1008
            yield "                          </tbody>
                        </table>
                      </div>
                    ";
        }
        // line 1012
        yield "            </div>
          
            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 1018
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Gestion des Utilisateurs - <span id=\"footerCount\">";
        // line 1021
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 1021, $this->source); })())), "html", null, true);
        yield "</span> utilisateur";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 1021, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                  ";
        // line 1022
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1022, $this->source); })()), "user", [], "any", false, false, false, 1022)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1023
            yield "                    | Connecté: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1023, $this->source); })()), "user", [], "any", false, false, false, 1023), "prenom", [], "any", false, false, false, 1023), 0, 10), "html", null, true);
            yield "...
                  ";
        }
        // line 1025
        yield "                </span>
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
            <p>Êtes-vous sûr de vouloir supprimer l'utilisateur <strong id=\"userNameDisplay\"></strong> ?</p>
            <p class=\"text-danger mb-0\">
              <i class=\"mdi mdi-alert me-1\"></i>
              <small>Cette action est irréversible.</small>
            </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
              <i class=\"mdi mdi-close me-1\"></i>Annuler
            </button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" id=\"csrfToken\" value=\"\">
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
        // line 1066
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1067
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1068
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Elements
        const filterToggle = document.getElementById('filterToggle');
        const filterSection = document.getElementById('filterSection');
        const searchFilter = document.getElementById('searchFilter');
        const roleFilter = document.getElementById('roleFilter');
        const verifiedFilter = document.getElementById('verifiedFilter');
        const sortByFilter = document.getElementById('sortByFilter');
        const sortOrderFilter = document.getElementById('sortOrderFilter');
        const applyFiltersBtn = document.getElementById('applyFilters');
        const resetFiltersBtn = document.getElementById('resetFilters');
        const loadingOverlay = document.getElementById('loadingOverlay');
        const usersTableBody = document.getElementById('usersTableBody');
        const resultsCount = document.getElementById('resultsCount');
        const footerCount = document.getElementById('footerCount');
        const totalCount = document.getElementById('totalCount');
        const searchInput = document.getElementById('searchInput');
        const sortHeaders = document.querySelectorAll('.sort-header');

        // Current user ID for comparison
        const currentUserId = ";
        // line 1091
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1091, $this->source); })()), "user", [], "any", false, false, false, 1091)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1091, $this->source); })()), "user", [], "any", false, false, false, 1091), "id", [], "any", false, false, false, 1091), "html", null, true)) : ("null"));
        yield ";

        // Toggle filter section
        filterToggle.addEventListener('click', function() {
          if (filterSection.style.display === 'none') {
            filterSection.style.display = 'block';
            filterToggle.classList.add('active');
          } else {
            filterSection.style.display = 'none';
            filterToggle.classList.remove('active');
          }
        });

        // Apply filters
        function applyFilters() {
          const searchTerm = searchFilter.value.trim();
          const role = roleFilter.value;
          const verified = verifiedFilter.value;
          const sortBy = sortByFilter.value;
          const sortOrder = sortOrderFilter.value;

          // Show loading
          loadingOverlay.classList.add('active');

          // Build query parameters
          const params = new URLSearchParams();
          if (searchTerm) params.append('q', searchTerm);
          if (role) params.append('role', role);
          if (verified) params.append('verified', verified);
          if (sortBy) params.append('sortBy', sortBy);
          if (sortOrder) params.append('sortOrder', sortOrder);

          // Cancel previous request if any and use AbortController to avoid race conditions
          if (window.__userSearchController) {
            try { window.__userSearchController.abort(); } catch (e) {}
          }
          window.__userSearchController = new AbortController();

          // Make AJAX request
          fetch('";
        // line 1130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_ajax_filter");
        yield "?' + params.toString(), {
            method: 'GET',
            headers: {
              'Content-Type': 'application/json',
              'X-Requested-With': 'XMLHttpRequest'
            },
            signal: window.__userSearchController.signal
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              updateTable(data.users);
              updateStats(data);
              resultsCount.textContent = data.count + ' utilisateur(s) trouvé(s)';
              footerCount.textContent = data.count;
            }
          })
          .catch(error => {
            if (error.name === 'AbortError') return; // request was cancelled
            console.error('Error:', error);
            alert('Une erreur est survenue lors du filtrage');
          })
          .finally(() => {
            loadingOverlay.classList.remove('active');
          });
        }

        // Update table with new data
        function updateTable(users) {
          if (users.length === 0) {
            usersTableBody.innerHTML = `
              <tr>
                <td colspan=\"10\" class=\"text-center py-5\">
                  <i class=\"mdi mdi-account-off\" style=\"font-size: 48px; color: #dee2e6;\"></i>
                  <p class=\"text-muted mt-3\">Aucun utilisateur trouvé</p>
                </td>
              </tr>
            `;
            return;
          }

          usersTableBody.innerHTML = users.map(user => `
            <tr>
              <td>\${user.id}</td>
              <td>
                <div class=\"d-flex align-items-center\">
                  \${user.profilePic ? 
                    `<img src=\"/uploads/profile_pics/\${user.profilePic}\" alt=\"\${user.prenom}\" class=\"user-avatar-img me-3\">` :
                    `<div class=\"user-avatar me-3\">\${user.initials}</div>`
                  }
                  <div>
                    <h6 class=\"mb-0\">\${user.prenom} \${user.nom}</h6>
                    <small class=\"text-muted\">\${user.email}</small>
                    \${user.isCurrentUser ? 
                      '<div class=\"mt-1\"><small class=\"text-primary\"><i class=\"mdi mdi-account-circle me-1\"></i>C\\'est vous</small></div>' : 
                      ''
                    }
                  </div>
                </div>
              </td>
              <td>\${user.email}</td>
              <td>\${user.dateDeNaissance || '—'}</td>
              <td>
                \${user.classe ? 
                  `<span class=\"badge badge-light\">\${user.classe}</span>` :
                  '<span class=\"text-muted\">—</span>'
                }
              </td>
              <td>
                \${user.numTel ? 
                  `<span class=\"badge badge-info\">\${user.numTel}</span>` :
                  '<span class=\"text-muted\">—</span>'
                }
              </td>
              <td>
                \${user.sexe === 'Homme' ?
                  `<span class=\"badge badge-primary\">\${user.sexe}</span>` :
                  `<span class=\"badge badge-pink\">\${user.sexe}</span>`
                }
              </td>
              <td>
                \${user.isAdmin ?
                  '<span class=\"badge badge-admin\">Administrateur</span>' :
                  '<span class=\"badge badge-etudiant\">Utilisateur</span>'
                }
              </td>
              <td>
                \${user.isVerified ?
                  '<span class=\"badge badge-success\">Vérifié</span>' :
                  '<span class=\"badge badge-warning\">Non vérifié</span>'
                }
              </td>
              <td>
                <div class=\"action-buttons\">
                  <a href=\"/user/\${user.id}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\">
                    <i class=\"mdi mdi-eye\"></i>
                  </a>
                  <a href=\"/user/\${user.id}/edit\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\">
                    <i class=\"mdi mdi-pencil\"></i>
                  </a>
                  \${!user.isCurrentUser ?
                    `<button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\" 
                             data-user-id=\"\${user.id}\" 
                             data-user-name=\"\${user.prenom} \${user.nom}\" 
                             data-csrf-token=\"\${user.csrfToken}\"
                             title=\"Supprimer\">
                      <i class=\"mdi mdi-delete\"></i>
                    </button>` :
                    '<span class=\"badge badge-secondary\">Vous</span>'
                  }
                </div>
              </td>
            </tr>
          `).join('');

          // Reattach delete button listeners
          attachDeleteListeners();
        }

        // Update statistics
        function updateStats(data) {
          totalCount.textContent = data.count;
          
          // Count admins and students
          let admins = 0;
          let students = 0;
          let verified = 0;

          data.users.forEach(user => {
            if (user.isAdmin) admins++;
            else students++;
            if (user.isVerified) verified++;
          });

          document.getElementById('adminsCount').textContent = admins;
          document.getElementById('studentsCount').textContent = students;
          document.getElementById('verifiedCount').textContent = verified;
        }

        // Reset filters
        resetFiltersBtn.addEventListener('click', function() {
          searchFilter.value = '';
          roleFilter.value = '';
          verifiedFilter.value = '';
          sortByFilter.value = 'id';
          sortOrderFilter.value = 'ASC';
          
          applyFilters();
        });

        // Apply filters on button click
        applyFiltersBtn.addEventListener('click', applyFilters);

        // Apply filters on Enter key in search
        searchFilter.addEventListener('keypress', function(e) {
          if (e.key === 'Enter') {
            e.preventDefault();
            applyFilters();
          }
        });

        // Navbar and filter search (real-time) with debounce
        let searchTimeout;
        function scheduleApplyFromInput(value) {
          clearTimeout(searchTimeout);
          searchTimeout = setTimeout(() => {
            searchFilter.value = value;
            applyFilters();
          }, 450);
        }

        searchInput.addEventListener('keyup', function() {
          scheduleApplyFromInput(this.value);
        });

        // Also trigger while typing directly in filter input
        searchFilter.addEventListener('keyup', function() {
          scheduleApplyFromInput(this.value);
        });

        // Sort by clicking headers
        sortHeaders.forEach(header => {
          header.addEventListener('click', function() {
            const sortField = this.getAttribute('data-sort');
            const currentSort = sortByFilter.value;
            const currentOrder = sortOrderFilter.value;

            // Toggle sort order if clicking same column
            if (sortField === currentSort) {
              sortOrderFilter.value = currentOrder === 'ASC' ? 'DESC' : 'ASC';
            } else {
              sortByFilter.value = sortField;
              sortOrderFilter.value = 'ASC';
            }

            // Update active state
            sortHeaders.forEach(h => h.classList.remove('active'));
            this.classList.add('active');

            applyFilters();
          });
        });

        // Delete confirmation
        function attachDeleteListeners() {
          const deleteButtons = document.querySelectorAll('.delete-btn');
          deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
              const userId = this.getAttribute('data-user-id');
              const userName = this.getAttribute('data-user-name');
              const csrfToken = this.getAttribute('data-csrf-token');
              
              document.getElementById('userNameDisplay').textContent = userName;
              
              const deleteForm = document.getElementById('deleteForm');
              deleteForm.action = '/user/' + userId + '/delete';
              
              if (csrfToken) {
                document.getElementById('csrfToken').value = csrfToken;
              }
              
              const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
              modal.show();
            });
          });
        }

        // Initial delete listeners
        attachDeleteListeners();

        // Auto-hide alerts
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert');
          alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          });
        }, 5000);
      });
    </script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/index.html.twig";
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
        return array (  1538 => 1130,  1496 => 1091,  1470 => 1068,  1466 => 1067,  1462 => 1066,  1419 => 1025,  1413 => 1023,  1411 => 1022,  1405 => 1021,  1399 => 1018,  1391 => 1012,  1385 => 1008,  1364 => 993,  1359 => 990,  1355 => 988,  1351 => 986,  1349 => 985,  1345 => 983,  1341 => 981,  1337 => 979,  1335 => 978,  1331 => 976,  1325 => 974,  1319 => 972,  1317 => 971,  1313 => 969,  1309 => 967,  1303 => 965,  1301 => 964,  1297 => 962,  1293 => 960,  1287 => 958,  1285 => 957,  1280 => 955,  1276 => 954,  1271 => 951,  1263 => 945,  1261 => 944,  1257 => 943,  1251 => 942,  1248 => 941,  1241 => 938,  1238 => 937,  1232 => 934,  1227 => 933,  1225 => 932,  1219 => 929,  1216 => 928,  1212 => 927,  1178 => 895,  1169 => 889,  1163 => 885,  1161 => 884,  1153 => 879,  1066 => 795,  1029 => 762,  1027 => 761,  1003 => 741,  1001 => 740,  977 => 720,  975 => 719,  952 => 699,  938 => 687,  933 => 684,  929 => 682,  927 => 681,  923 => 680,  917 => 679,  912 => 676,  910 => 675,  890 => 657,  884 => 656,  874 => 652,  870 => 651,  865 => 650,  860 => 649,  855 => 648,  832 => 628,  817 => 616,  803 => 606,  801 => 605,  797 => 603,  792 => 600,  788 => 598,  784 => 596,  780 => 594,  778 => 593,  773 => 591,  766 => 590,  764 => 589,  757 => 584,  750 => 581,  744 => 577,  740 => 575,  736 => 573,  734 => 572,  726 => 569,  722 => 567,  715 => 564,  712 => 563,  706 => 560,  701 => 559,  699 => 558,  696 => 557,  694 => 556,  652 => 517,  634 => 502,  622 => 493,  610 => 484,  598 => 475,  586 => 466,  574 => 457,  562 => 448,  550 => 439,  538 => 430,  526 => 421,  506 => 403,  501 => 400,  497 => 398,  493 => 396,  489 => 394,  487 => 393,  482 => 391,  475 => 390,  473 => 389,  468 => 386,  462 => 384,  459 => 383,  452 => 380,  449 => 379,  443 => 376,  438 => 375,  435 => 374,  433 => 373,  422 => 365,  418 => 364,  413 => 362,  409 => 361,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user/profile.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — User Profile</title>
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
      
      .table td {
        vertical-align: middle;
      }
      
      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }

      /* Filter and Sort Controls */
      .filter-controls {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      }

      .filter-group {
        margin-bottom: 15px;
      }

      .filter-group:last-child {
        margin-bottom: 0;
      }

      .filter-group label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 8px;
        display: block;
        font-size: 0.9rem;
      }

      .filter-group select,
      .filter-group input {
        border-radius: 8px;
        border: 1px solid #dee2e6;
        padding: 8px 12px;
        transition: all 0.3s ease;
      }

      .filter-group select:focus,
      .filter-group input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        outline: none;
      }

      .filter-actions {
        display: flex;
        gap: 10px;
        align-items: center;
      }

      .btn-filter {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
      }

      .btn-filter:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
      }

      .btn-reset {
        background: #6c757d;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
      }

      .btn-reset:hover {
        background: #5a6268;
        transform: translateY(-2px);
      }

      .sort-header {
        cursor: pointer;
        user-select: none;
        position: relative;
        padding-right: 20px;
      }

      .sort-header:hover {
        background-color: rgba(102, 126, 234, 0.1);
      }

      .sort-header .sort-icon {
        position: absolute;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.3;
        transition: opacity 0.3s ease;
      }

      .sort-header.active .sort-icon {
        opacity: 1;
        color: #667eea;
      }

      .loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.8);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        border-radius: 10px;
      }

      .loading-overlay.active {
        display: flex;
      }

      .spinner {
        width: 40px;
        height: 40px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #667eea;
        border-radius: 50%;
        animation: spin 1s linear infinite;
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }

      .results-info {
        font-size: 0.9rem;
        color: #6c757d;
        margin-top: 10px;
      }

      .filter-toggle {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
        border: 1px solid #dee2e6;
      }

      .filter-toggle:hover {
        background: #e9ecef;
        border-color: #667eea;
      }

      .filter-toggle i {
        transition: transform 0.3s ease;
      }

      .filter-toggle.active i {
        transform: rotate(180deg);
      }

      #filterSection {
        transition: all 0.3s ease;
        overflow: hidden;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar (keeping original) -->
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
          
          <li class=\"nav-item menu-items \">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-speedometer\"></i>
              </span>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-group\"></i>
              </span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_matiere_classe_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_classe_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-school\"></i>
              </span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_salle_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-office-building\"></i>
              </span>
              <span class=\"menu-title\">Salles</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_seance_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-calendar-clock\"></i>
              </span>
              <span class=\"menu-title\">Séances</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_groupe_projet_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-multiple\"></i>
              </span>
              <span class=\"menu-title\">Groupes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_tache_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
              </span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{path('app_preference_alerte_index')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-alert-circle-outline\"></i>
              </span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_objectif_sante_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-heart-pulse\"></i>
              </span>
              <span class=\"menu-title\">Exercices de santé</span>
            </a>
          </li>
          
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
        <!-- Navbar (keeping original) -->
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un utilisateur...\" id=\"searchInput\">
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
                        <i class=\"mdi mdi-account-plus\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvel utilisateur</p>
                      <p class=\"text-muted ellipsis mb-0\"> Ahmed Ben Ali inscrit</p>
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

            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account-group\"></i>
                    </span> 
                    Gestion des Utilisateurs
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste complète des utilisateurs ESPRIT
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
            
            <!-- Statistics -->
            <div class=\"row\">
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\" id=\"totalCount\">{{ users|length }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+12%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-account-group\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Utilisateurs</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set userRole = users|filter(u => 'ROLE_USER' in u.roles and 'ROLE_ADMIN' not in u.roles)|length %}
                          <h3 class=\"mb-0 stat-count\" id=\"studentsCount\">{{ userRole }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+5%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-school\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Étudiants</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set admins = users|filter(u => 'ROLE_ADMIN' in u.roles)|length %}
                          <h3 class=\"mb-0 stat-count\" id=\"adminsCount\">{{ admins }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+0%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-shield-account\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Administrateurs</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set verified = users|filter(u => u.isVerified)|length %}
                          <h3 class=\"mb-0 stat-count\" id=\"verifiedCount\">{{ verified }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+3%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-check-circle\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Vérifiés</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Users Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\" style=\"position: relative;\">
                    <!-- Loading Overlay -->
                    <div class=\"loading-overlay\" id=\"loadingOverlay\">
                      <div class=\"spinner\"></div>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">👥 Liste des Utilisateurs</h4>
                      <div class=\"d-flex gap-2\">
                        <div class=\"filter-toggle\" id=\"filterToggle\">
                          <i class=\"mdi mdi-filter-variant\"></i>
                          <span>Filtres</span>
                        </div>
                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-gradient-primary btn-icon-text\">
                          <i class=\"mdi mdi-account-plus btn-icon-prepend\"></i>
                          Ajouter un utilisateur
                        </a>
                      </div>
                    </div>

                    <!-- Filter Controls -->
                    <div id=\"filterSection\" style=\"display: none;\">
                      <div class=\"filter-controls\">
                        <div class=\"row\">
                          <div class=\"col-md-3\">
                            <div class=\"filter-group\">
                              <label for=\"searchFilter\">
                                <i class=\"mdi mdi-magnify me-1\"></i>Recherche
                              </label>
                              <input type=\"text\" class=\"form-control\" id=\"searchFilter\" placeholder=\"Nom, prénom, email...\">
                            </div>
                          </div>
                          <div class=\"col-md-2\">
                            <div class=\"filter-group\">
                              <label for=\"roleFilter\">
                                <i class=\"mdi mdi-account-key me-1\"></i>Rôle
                              </label>
                              <select class=\"form-select\" id=\"roleFilter\">
                                <option value=\"\">Tous les rôles</option>
                                <option value=\"admin\">Administrateurs</option>
                                <option value=\"user\">Utilisateurs</option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-md-2\">
                            <div class=\"filter-group\">
                              <label for=\"verifiedFilter\">
                                <i class=\"mdi mdi-check-circle me-1\"></i>Statut
                              </label>
                              <select class=\"form-select\" id=\"verifiedFilter\">
                                <option value=\"\">Tous</option>
                                <option value=\"1\">Vérifiés</option>
                                <option value=\"0\">Non vérifiés</option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-md-2\">
                            <div class=\"filter-group\">
                              <label for=\"sortByFilter\">
                                <i class=\"mdi mdi-sort me-1\"></i>Trier par
                              </label>
                              <select class=\"form-select\" id=\"sortByFilter\">
                                <option value=\"id\">ID</option>
                                <option value=\"nom\">Nom</option>
                                <option value=\"prenom\">Prénom</option>
                                <option value=\"email\">Email</option>
                                <option value=\"DateDeNaissance\">Date de naissance</option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-md-1\">
                            <div class=\"filter-group\">
                              <label for=\"sortOrderFilter\">
                                <i class=\"mdi mdi-sort-ascending me-1\"></i>Ordre
                              </label>
                              <select class=\"form-select\" id=\"sortOrderFilter\">
                                <option value=\"ASC\">A-Z</option>
                                <option value=\"DESC\">Z-A</option>
                              </select>
                            </div>
                          </div>
                          <div class=\"col-md-2\">
                            <div class=\"filter-group\">
                              <label>&nbsp;</label>
                              <div class=\"filter-actions\">
                                <button type=\"button\" class=\"btn btn-filter\" id=\"applyFilters\">
                                  <i class=\"mdi mdi-check me-1\"></i>Appliquer
                                </button>
                                <button type=\"button\" class=\"btn btn-reset\" id=\"resetFilters\">
                                  <i class=\"mdi mdi-refresh me-1\"></i>Réinitialiser
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"results-info mt-2\">
                          <i class=\"mdi mdi-information-outline me-1\"></i>
                          <span id=\"resultsCount\">{{ users|length }} utilisateur(s) trouvé(s)</span>
                        </div>
                      </div>
                    </div>

                    {% if users is empty %}
                      <div class=\"empty-state\" id=\"emptyState\">
                        <i class=\"mdi mdi-account-off\"></i>
                        <h4 class=\"text-muted\">Aucun utilisateur trouvé</h4>
                        <p class=\"text-muted mb-4\">Commencez par ajouter un nouvel utilisateur</p>
                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-account-plus\"></i>
                          Ajouter le premier utilisateur
                        </a>
                      </div>
                    {% else %}
                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"usersTable\">
                          <thead>
                            <tr>
                              <th class=\"sort-header\" data-sort=\"id\">
                                ID
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th class=\"sort-header\" data-sort=\"nom\">
                                Utilisateur
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th class=\"sort-header\" data-sort=\"email\">
                                Email
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th class=\"sort-header\" data-sort=\"DateDeNaissance\">
                                Date de naissance
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th>Classe</th>
                              <th>Téléphone</th>
                              <th class=\"sort-header\" data-sort=\"sexe\">
                                Sexe
                                <i class=\"mdi mdi-chevron-down sort-icon\"></i>
                              </th>
                              <th>Rôle</th>
                              <th>Status</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody id=\"usersTableBody\">
                            {% for user in users %}
                              <tr>
                                <td>{{ user.id }}</td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    {% if user.profilePic %}
                                      <img src=\"{{ asset('uploads/profile_pics/' ~ user.profilePic) }}\" 
                                           alt=\"{{ user.prenom }}\" 
                                           class=\"user-avatar-img me-3\">
                                    {% else %}
                                      <div class=\"user-avatar me-3\">
                                        {{ user.prenom|first|upper }}{{ user.nom|first|upper }}
                                      </div>
                                    {% endif %}
                                    <div>
                                      <h6 class=\"mb-0\">{{ user.prenom }} {{ user.nom }}</h6>
                                      <small class=\"text-muted\">{{ user.email }}</small>
                                      {% if app.user and user.id == app.user.id %}
                                        <div class=\"mt-1\">
                                          <small class=\"text-primary\">
                                            <i class=\"mdi mdi-account-circle me-1\"></i>C'est vous
                                          </small>
                                        </div>
                                      {% endif %}
                                    </div>
                                  </div>
                                </td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.dateDeNaissance ? user.dateDeNaissance|date('d/m/Y') : '—' }}</td>
                                <td>
                                  {% if user.classe %}
                                    <span class=\"badge badge-light\">{{ user.classe.nom }}</span>
                                  {% else %}
                                    <span class=\"text-muted\">—</span>
                                  {% endif %}
                                </td>
                                <td>
                                  {% if user.numTel %}
                                    <span class=\"badge badge-info\">{{ user.numTel }}</span>
                                  {% else %}
                                    <span class=\"text-muted\">—</span>
                                  {% endif %}
                                </td>
                                <td>
                                  {% if user.sexe == 'Homme' %}
                                    <span class=\"badge badge-primary\">{{ user.sexe }}</span>
                                  {% else %}
                                    <span class=\"badge badge-pink\">{{ user.sexe }}</span>
                                  {% endif %}
                                </td>
                                <td>
                                  {% if 'ROLE_ADMIN' in user.roles %}
                                    <span class=\"badge badge-admin\">Administrateur</span>
                                  {% else %}
                                    <span class=\"badge badge-etudiant\">Utilisateur</span>
                                  {% endif %}
                                </td>
                                <td>
                                  {% if user.isVerified %}
                                    <span class=\"badge badge-success\">Vérifié</span>
                                  {% else %}
                                    <span class=\"badge badge-warning\">Non vérifié</span>
                                  {% endif %}
                                </td>
                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"{{ path('app_user_show', { id: user.id }) }}\" 
                                       class=\"btn btn-info btn-sm btn-icon\"
                                       title=\"Voir\">
                                      <i class=\"mdi mdi-eye\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-outline\">
                                        Privacy Settings
                                    </a>
                                    <button onclick=\"exportData()\" class=\"btn btn-outline\">
                                        Export My Data
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            {% endfor %}
                          </tbody>
                        </table>
                      </div>
                    {% endif %}
            </div>
          
            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © {{ 'now'|date('Y') }} ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Gestion des Utilisateurs - <span id=\"footerCount\">{{ users|length }}</span> utilisateur{{ users|length > 1 ? 's' : '' }}
                  {% if app.user %}
                    | Connecté: {{ app.user.prenom|slice(0, 10) }}...
                  {% endif %}
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
            <p>Êtes-vous sûr de vouloir supprimer l'utilisateur <strong id=\"userNameDisplay\"></strong> ?</p>
            <p class=\"text-danger mb-0\">
              <i class=\"mdi mdi-alert me-1\"></i>
              <small>Cette action est irréversible.</small>
            </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
              <i class=\"mdi mdi-close me-1\"></i>Annuler
            </button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" id=\"csrfToken\" value=\"\">
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
        // Elements
        const filterToggle = document.getElementById('filterToggle');
        const filterSection = document.getElementById('filterSection');
        const searchFilter = document.getElementById('searchFilter');
        const roleFilter = document.getElementById('roleFilter');
        const verifiedFilter = document.getElementById('verifiedFilter');
        const sortByFilter = document.getElementById('sortByFilter');
        const sortOrderFilter = document.getElementById('sortOrderFilter');
        const applyFiltersBtn = document.getElementById('applyFilters');
        const resetFiltersBtn = document.getElementById('resetFilters');
        const loadingOverlay = document.getElementById('loadingOverlay');
        const usersTableBody = document.getElementById('usersTableBody');
        const resultsCount = document.getElementById('resultsCount');
        const footerCount = document.getElementById('footerCount');
        const totalCount = document.getElementById('totalCount');
        const searchInput = document.getElementById('searchInput');
        const sortHeaders = document.querySelectorAll('.sort-header');

        // Current user ID for comparison
        const currentUserId = {{ app.user ? app.user.id : 'null' }};

        // Toggle filter section
        filterToggle.addEventListener('click', function() {
          if (filterSection.style.display === 'none') {
            filterSection.style.display = 'block';
            filterToggle.classList.add('active');
          } else {
            filterSection.style.display = 'none';
            filterToggle.classList.remove('active');
          }
        });

        // Apply filters
        function applyFilters() {
          const searchTerm = searchFilter.value.trim();
          const role = roleFilter.value;
          const verified = verifiedFilter.value;
          const sortBy = sortByFilter.value;
          const sortOrder = sortOrderFilter.value;

          // Show loading
          loadingOverlay.classList.add('active');

          // Build query parameters
          const params = new URLSearchParams();
          if (searchTerm) params.append('q', searchTerm);
          if (role) params.append('role', role);
          if (verified) params.append('verified', verified);
          if (sortBy) params.append('sortBy', sortBy);
          if (sortOrder) params.append('sortOrder', sortOrder);

          // Cancel previous request if any and use AbortController to avoid race conditions
          if (window.__userSearchController) {
            try { window.__userSearchController.abort(); } catch (e) {}
          }
          window.__userSearchController = new AbortController();

          // Make AJAX request
          fetch('{{ path(\"app_user_ajax_filter\") }}?' + params.toString(), {
            method: 'GET',
            headers: {
              'Content-Type': 'application/json',
              'X-Requested-With': 'XMLHttpRequest'
            },
            signal: window.__userSearchController.signal
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              updateTable(data.users);
              updateStats(data);
              resultsCount.textContent = data.count + ' utilisateur(s) trouvé(s)';
              footerCount.textContent = data.count;
            }
          })
          .catch(error => {
            if (error.name === 'AbortError') return; // request was cancelled
            console.error('Error:', error);
            alert('Une erreur est survenue lors du filtrage');
          })
          .finally(() => {
            loadingOverlay.classList.remove('active');
          });
        }

        // Update table with new data
        function updateTable(users) {
          if (users.length === 0) {
            usersTableBody.innerHTML = `
              <tr>
                <td colspan=\"10\" class=\"text-center py-5\">
                  <i class=\"mdi mdi-account-off\" style=\"font-size: 48px; color: #dee2e6;\"></i>
                  <p class=\"text-muted mt-3\">Aucun utilisateur trouvé</p>
                </td>
              </tr>
            `;
            return;
          }

          usersTableBody.innerHTML = users.map(user => `
            <tr>
              <td>\${user.id}</td>
              <td>
                <div class=\"d-flex align-items-center\">
                  \${user.profilePic ? 
                    `<img src=\"/uploads/profile_pics/\${user.profilePic}\" alt=\"\${user.prenom}\" class=\"user-avatar-img me-3\">` :
                    `<div class=\"user-avatar me-3\">\${user.initials}</div>`
                  }
                  <div>
                    <h6 class=\"mb-0\">\${user.prenom} \${user.nom}</h6>
                    <small class=\"text-muted\">\${user.email}</small>
                    \${user.isCurrentUser ? 
                      '<div class=\"mt-1\"><small class=\"text-primary\"><i class=\"mdi mdi-account-circle me-1\"></i>C\\'est vous</small></div>' : 
                      ''
                    }
                  </div>
                </div>
              </td>
              <td>\${user.email}</td>
              <td>\${user.dateDeNaissance || '—'}</td>
              <td>
                \${user.classe ? 
                  `<span class=\"badge badge-light\">\${user.classe}</span>` :
                  '<span class=\"text-muted\">—</span>'
                }
              </td>
              <td>
                \${user.numTel ? 
                  `<span class=\"badge badge-info\">\${user.numTel}</span>` :
                  '<span class=\"text-muted\">—</span>'
                }
              </td>
              <td>
                \${user.sexe === 'Homme' ?
                  `<span class=\"badge badge-primary\">\${user.sexe}</span>` :
                  `<span class=\"badge badge-pink\">\${user.sexe}</span>`
                }
              </td>
              <td>
                \${user.isAdmin ?
                  '<span class=\"badge badge-admin\">Administrateur</span>' :
                  '<span class=\"badge badge-etudiant\">Utilisateur</span>'
                }
              </td>
              <td>
                \${user.isVerified ?
                  '<span class=\"badge badge-success\">Vérifié</span>' :
                  '<span class=\"badge badge-warning\">Non vérifié</span>'
                }
              </td>
              <td>
                <div class=\"action-buttons\">
                  <a href=\"/user/\${user.id}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\">
                    <i class=\"mdi mdi-eye\"></i>
                  </a>
                  <a href=\"/user/\${user.id}/edit\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\">
                    <i class=\"mdi mdi-pencil\"></i>
                  </a>
                  \${!user.isCurrentUser ?
                    `<button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\" 
                             data-user-id=\"\${user.id}\" 
                             data-user-name=\"\${user.prenom} \${user.nom}\" 
                             data-csrf-token=\"\${user.csrfToken}\"
                             title=\"Supprimer\">
                      <i class=\"mdi mdi-delete\"></i>
                    </button>` :
                    '<span class=\"badge badge-secondary\">Vous</span>'
                  }
                </div>
              </td>
            </tr>
          `).join('');

          // Reattach delete button listeners
          attachDeleteListeners();
        }

        // Update statistics
        function updateStats(data) {
          totalCount.textContent = data.count;
          
          // Count admins and students
          let admins = 0;
          let students = 0;
          let verified = 0;

          data.users.forEach(user => {
            if (user.isAdmin) admins++;
            else students++;
            if (user.isVerified) verified++;
          });

          document.getElementById('adminsCount').textContent = admins;
          document.getElementById('studentsCount').textContent = students;
          document.getElementById('verifiedCount').textContent = verified;
        }

        // Reset filters
        resetFiltersBtn.addEventListener('click', function() {
          searchFilter.value = '';
          roleFilter.value = '';
          verifiedFilter.value = '';
          sortByFilter.value = 'id';
          sortOrderFilter.value = 'ASC';
          
          applyFilters();
        });

        // Apply filters on button click
        applyFiltersBtn.addEventListener('click', applyFilters);

        // Apply filters on Enter key in search
        searchFilter.addEventListener('keypress', function(e) {
          if (e.key === 'Enter') {
            e.preventDefault();
            applyFilters();
          }
        });

        // Navbar and filter search (real-time) with debounce
        let searchTimeout;
        function scheduleApplyFromInput(value) {
          clearTimeout(searchTimeout);
          searchTimeout = setTimeout(() => {
            searchFilter.value = value;
            applyFilters();
          }, 450);
        }

        searchInput.addEventListener('keyup', function() {
          scheduleApplyFromInput(this.value);
        });

        // Also trigger while typing directly in filter input
        searchFilter.addEventListener('keyup', function() {
          scheduleApplyFromInput(this.value);
        });

        // Sort by clicking headers
        sortHeaders.forEach(header => {
          header.addEventListener('click', function() {
            const sortField = this.getAttribute('data-sort');
            const currentSort = sortByFilter.value;
            const currentOrder = sortOrderFilter.value;

            // Toggle sort order if clicking same column
            if (sortField === currentSort) {
              sortOrderFilter.value = currentOrder === 'ASC' ? 'DESC' : 'ASC';
            } else {
              sortByFilter.value = sortField;
              sortOrderFilter.value = 'ASC';
            }

            // Update active state
            sortHeaders.forEach(h => h.classList.remove('active'));
            this.classList.add('active');

            applyFilters();
          });
        });

        // Delete confirmation
        function attachDeleteListeners() {
          const deleteButtons = document.querySelectorAll('.delete-btn');
          deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
              const userId = this.getAttribute('data-user-id');
              const userName = this.getAttribute('data-user-name');
              const csrfToken = this.getAttribute('data-csrf-token');
              
              document.getElementById('userNameDisplay').textContent = userName;
              
              const deleteForm = document.getElementById('deleteForm');
              deleteForm.action = '/user/' + userId + '/delete';
              
              if (csrfToken) {
                document.getElementById('csrfToken').value = csrfToken;
              }
              
              const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
              modal.show();
            });
          });
        }

        // Initial delete listeners
        attachDeleteListeners();

        // Auto-hide alerts
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert');
          alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          });
        }, 5000);
      });
    </script>
</body>
</html>
", "user/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\index.html.twig");
    }
}
