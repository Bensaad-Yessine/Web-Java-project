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

/* salle/edit.html.twig */
class __TwigTemplate_4085c934f9ec245cf6d326434e280a68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Ajouter une Salle</title>
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
      
      .block-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        display: inline-block;
        color: white;
        border: none;
      }
      
      .badge-block-a { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .badge-block-b { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .badge-block-c { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .badge-block-d { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .badge-block-e { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .badge-block-f { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); }
      
      .room-icon {
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
      
      /* Room status indicator */
      .room-status {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 5px;
      }
      
      .room-available { background-color: #28a745; }
      .room-occupied { background-color: #dc3545; }
      .room-maintenance { background-color: #ffc107; }
  
      .form-card {
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      }
      
      .block-preview {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: white;
        margin-right: 10px;
      }
      
      .block-a { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .block-b { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .block-c { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .block-d { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .block-e { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .block-f { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); }
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      }
      
      .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
      }
      
      .preview-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
      }
      
      .preview-icon {
        width: 60px;
        height: 60px;
        background: rgba(255,255,255,0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 15px;
      }
    </style>
  </head>
 <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 304
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 305
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
        // line 313
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 313, $this->source); })()), "user", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 314
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 314, $this->source); })()), "user", [], "any", false, false, false, 314), "profilePic", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 315
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 315, $this->source); })()), "user", [], "any", false, false, false, 315), "profilePic", [], "any", false, false, false, 315))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "user", [], "any", false, false, false, 316), "prenom", [], "any", false, false, false, 316), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 319
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "user", [], "any", false, false, false, 320), "prenom", [], "any", false, false, false, 320))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "user", [], "any", false, false, false, 320), "nom", [], "any", false, false, false, 320))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 323
            yield "                  ";
        } else {
            // line 324
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 326
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 329
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "user", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 330
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 330, $this->source); })()), "user", [], "any", false, false, false, 330), "prenom", [], "any", false, false, false, 330), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 330, $this->source); })()), "user", [], "any", false, false, false, 330), "nom", [], "any", false, false, false, 330), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "user", [], "any", false, false, false, 331), "email", [], "any", false, false, false, 331), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 333
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 333, $this->source); })()), "user", [], "any", false, false, false, 333), "roles", [], "any", false, false, false, 333))) {
                // line 334
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 336
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 338
            yield "                    </div>
                  ";
        } else {
            // line 340
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 343
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
        // line 362
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 363
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 364
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
            // line 372
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 373
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
        // line 381
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
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 404
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
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 434
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
        // line 464
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

      <!-- Top Navbar -->
      <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
        <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
          <img src=\"";
        // line 477
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
                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une salle...\" id=\"searchInput\">
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
                      <i class=\"mdi mdi-office-building\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject mb-1\">Nouvelle salle</p>
                    <p class=\"text-muted ellipsis mb-0\"> Salle B-301 ajoutée</p>
                  </div>
                </a>
              </div>
            </li>
            
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                <div class=\"navbar-profile\">
                  ";
        // line 516
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 516, $this->source); })()), "user", [], "any", false, false, false, 516)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 517
            yield "                    <div class=\"avatar-container\">
                      ";
            // line 518
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 518, $this->source); })()), "user", [], "any", false, false, false, 518), "profilePic", [], "any", false, false, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 519
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 519, $this->source); })()), "user", [], "any", false, false, false, 519), "profilePic", [], "any", false, false, false, 519))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 520
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 520, $this->source); })()), "user", [], "any", false, false, false, 520), "prenom", [], "any", false, false, false, 520), "html", null, true);
                yield "\" 
                             class=\"user-avatar-img\">
                      ";
            } else {
                // line 523
                yield "                        <div class=\"user-avatar\">
                          ";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 524, $this->source); })()), "user", [], "any", false, false, false, 524), "prenom", [], "any", false, false, false, 524))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 524, $this->source); })()), "user", [], "any", false, false, false, 524), "nom", [], "any", false, false, false, 524))), "html", null, true);
                yield "
                        </div>
                      ";
            }
            // line 527
            yield "                      <div class=\"text-start ms-2\">
                        <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                          ";
            // line 529
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 529, $this->source); })()), "user", [], "any", false, false, false, 529), "prenom", [], "any", false, false, false, 529), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 529, $this->source); })()), "user", [], "any", false, false, false, 529), "nom", [], "any", false, false, false, 529), "html", null, true);
            yield "
                        </p>
                        <small class=\"text-muted d-none d-sm-block\">
                          ";
            // line 532
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 532, $this->source); })()), "user", [], "any", false, false, false, 532), "roles", [], "any", false, false, false, 532))) {
                // line 533
                yield "                            <span class=\"badge badge-admin\">Admin</span>
                          ";
            } else {
                // line 535
                yield "                            <span class=\"badge badge-etudiant\">Utilisateur</span>
                          ";
            }
            // line 537
            yield "                        </small>
                      </div>
                    </div>
                  ";
        } else {
            // line 541
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                    <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                  ";
        }
        // line 544
        yield "                  <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                </div>
              </a>
              <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                <div class=\"dropdown-header p-3\">
                  ";
        // line 549
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 549, $this->source); })()), "user", [], "any", false, false, false, 549)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 550
            yield "                    <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 550, $this->source); })()), "user", [], "any", false, false, false, 550), "prenom", [], "any", false, false, false, 550), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 550, $this->source); })()), "user", [], "any", false, false, false, 550), "nom", [], "any", false, false, false, 550), "html", null, true);
            yield "</h6>
                    <p class=\"text-muted mb-0\">";
            // line 551
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 551, $this->source); })()), "user", [], "any", false, false, false, 551), "email", [], "any", false, false, false, 551), "html", null, true);
            yield "</p>
                    <small class=\"text-muted\">
                      ";
            // line 553
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 553, $this->source); })()), "user", [], "any", false, false, false, 553), "roles", [], "any", false, false, false, 553))) {
                // line 554
                yield "                        <span class=\"badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 556
                yield "                        <span class=\"badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 558
            yield "                    </small>
                  ";
        } else {
            // line 560
            yield "                    <h6 class=\"mb-0\">Non connecté</h6>
                    <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                  ";
        }
        // line 563
        yield "                </div>
                <div class=\"dropdown-divider\"></div>
                ";
        // line 565
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 565, $this->source); })()), "user", [], "any", false, false, false, 565)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 566
            yield "                  <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 566, $this->source); })()), "user", [], "any", false, false, false, 566), "id", [], "any", false, false, false, 566)]), "html", null, true);
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
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 576, $this->source); })()), "user", [], "any", false, false, false, 576), "id", [], "any", false, false, false, 576)]), "html", null, true);
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
        // line 588
        yield "                <a class=\"dropdown-item preview-item\" href=\"";
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
        // line 608
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 608, $this->source); })()), "flashes", [], "any", false, false, false, 608));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 609
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 610
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 611
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 612
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 616
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-warning text-white me-2\">
                      <i class=\"mdi mdi-pencil\"></i>
                    </span> 
                    Modifier la Salle
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 631
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-office-building me-1\"></i>
                          Liste des Salles
                        </a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 637
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 637, $this->source); })()), "id", [], "any", false, false, false, 637)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-eye me-1\"></i>
                          Détails
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Modification
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Form Card -->
            <div class=\"row\">
              <div class=\"col-md-8 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-pencil me-2\"></i>
                      Formulaire de modification
                    </h4>
                    
                    <div class=\"alert alert-info mb-4\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-information me-2\"></i>
                        Vous modifiez la salle: <strong>";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 664, $this->source); })()), "block", [], "any", false, false, false, 664), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 664, $this->source); })()), "number", [], "any", false, false, false, 664), "html", null, true);
        yield "</strong>
                      </h6>
                      <p class=\"mb-0\">ID: ";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 666, $this->source); })()), "id", [], "any", false, false, false, 666), "html", null, true);
        yield " | Créée le: ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 666, $this->source); })()), "createdAt", [], "any", false, false, false, 666)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 666, $this->source); })()), "createdAt", [], "any", false, false, false, 666), "d/m/Y H:i"), "html", null, true)) : ("--"));
        yield "</p>
                    </div>
                    
                    ";
        // line 669
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 669, $this->source); })()), 'form_start', ["attr" => ["class" => "forms-sample", "id" => "salle-form"]]);
        yield "
                    
                    <div class=\"form-group\">
                      <label for=\"";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 672, $this->source); })()), "block", [], "any", false, false, false, 672), "vars", [], "any", false, false, false, 672), "id", [], "any", false, false, false, 672), "html", null, true);
        yield "\">Bloc *</label>
                      ";
        // line 673
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 673, $this->source); })()), "block", [], "any", false, false, false, 673), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 675
        yield "
                      <small class=\"form-text text-muted\">
                        Sélectionnez le bloc où se trouve la salle
                      </small>
                      ";
        // line 679
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 679, $this->source); })()), "block", [], "any", false, false, false, 679), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                      <label for=\"";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 683, $this->source); })()), "number", [], "any", false, false, false, 683), "vars", [], "any", false, false, false, 683), "id", [], "any", false, false, false, 683), "html", null, true);
        yield "\">Numéro de salle *</label>
                      ";
        // line 684
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 684, $this->source); })()), "number", [], "any", false, false, false, 684), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 101, 205, etc."]]);
        // line 687
        yield "
                      <small class=\"form-text text-muted\">
                        Numéro unique de la salle dans le bloc
                      </small>
                      ";
        // line 691
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 691, $this->source); })()), "number", [], "any", false, false, false, 691), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                      <label for=\"";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 695, $this->source); })()), "etage", [], "any", false, false, false, 695), "vars", [], "any", false, false, false, 695), "id", [], "any", false, false, false, 695), "html", null, true);
        yield "\">Étage *</label>
                      ";
        // line 696
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 696, $this->source); })()), "etage", [], "any", false, false, false, 696), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updatePreview()"]]);
        // line 699
        yield "
                      <small class=\"form-text text-muted\">
                        L'étage où se trouve la salle (1 à 4)
                      </small>
                      ";
        // line 703
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 703, $this->source); })()), "etage", [], "any", false, false, false, 703), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                      <label for=\"";
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 707, $this->source); })()), "capacite", [], "any", false, false, false, 707), "vars", [], "any", false, false, false, 707), "id", [], "any", false, false, false, 707), "html", null, true);
        yield "\">Capacité *</label>
                      ";
        // line 708
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 708, $this->source); })()), "capacite", [], "any", false, false, false, 708), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "De 1 à 30", "oninput" => "updatePreview()"]]);
        // line 712
        yield "
                      <small class=\"form-text text-muted\">
                        Nombre maximum de personnes (1 à 30)
                      </small>
                      ";
        // line 716
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 716, $this->source); })()), "capacite", [], "any", false, false, false, 716), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                      <label for=\"";
        // line 720
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 720, $this->source); })()), "disponibilite", [], "any", false, false, false, 720), "vars", [], "any", false, false, false, 720), "id", [], "any", false, false, false, 720), "html", null, true);
        yield "\">Disponibilité *</label>
                      ";
        // line 721
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 721, $this->source); })()), "disponibilite", [], "any", false, false, false, 721), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updatePreview()"]]);
        // line 724
        yield "
                      <small class=\"form-text text-muted\">
                        Indiquez si la salle est actuellement prête à l'emploi
                      </small>
                      ";
        // line 728
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 728, $this->source); })()), "disponibilite", [], "any", false, false, false, 728), 'errors');
        yield "
                    </div>
                    
                    <div class=\"mt-4\">
                      <button type=\"submit\" class=\"btn btn-gradient-warning me-2\">
                        <i class=\"mdi mdi-content-save me-1\"></i>
                        Mettre à jour
                      </button>
                      <a href=\"";
        // line 736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 736, $this->source); })()), "id", [], "any", false, false, false, 736)]), "html", null, true);
        yield "\" class=\"btn btn-info me-2\">
                        <i class=\"mdi mdi-eye me-1\"></i>
                        Voir les détails
                      </a>
                      <a href=\"";
        // line 740
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Annuler
                      </a>
                    </div>
                    
                    ";
        // line 746
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 746, $this->source); })()), 'form_end');
        yield "
                  </div>
                </div>
              </div>
              
              <!-- Info Card -->
              <div class=\"col-md-4 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-alert-circle me-2\"></i>
                      Attention
                    </h4>
                    
                    <div class=\"alert alert-warning\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-alert me-2\"></i>
                        Modification en cours
                      </h6>
                      <ul class=\"mb-0\">
                        <li>Vérifiez les changements avant de sauvegarder</li>
                        <li>Les modifications sont immédiates</li>
                        <li>Pas de retour en arrière possible</li>
                      </ul>
                    </div>
                    
                    <div class=\"alert alert-light\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-history me-2\"></i>
                        Anciennes valeurs
                      </h6>
                      <ul class=\"mb-0\">
                        <li><strong>Bloc:</strong> ";
        // line 778
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 778, $this->source); })()), "block", [], "any", false, false, false, 778), "html", null, true);
        yield "</li>
                        <li><strong>Numéro:</strong> ";
        // line 779
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 779, $this->source); })()), "number", [], "any", false, false, false, 779), "html", null, true);
        yield "</li>
                        <li><strong>Étage:</strong> ";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 780, $this->source); })()), "etage", [], "any", false, false, false, 780), "html", null, true);
        yield "</li>
                        <li><strong>Capacité:</strong> ";
        // line 781
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 781, $this->source); })()), "capacite", [], "any", false, false, false, 781), "html", null, true);
        yield "</li>
                        <li><strong>Disponibilité:</strong> ";
        // line 782
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 782, $this->source); })()), "disponibilite", [], "any", false, false, false, 782)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</li>
                      </ul>
                    </div>
                    
                    <!-- Delete Form -->
                    <div class=\"alert alert-danger mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-delete me-2\"></i>
                        Zone de danger
                      </h6>
                      <p class=\"mb-3\">Vous pouvez supprimer cette salle si nécessaire.</p>
                      <form action=\"";
        // line 793
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 793, $this->source); })()), "id", [], "any", false, false, false, 793)]), "html", null, true);
        yield "\" method=\"POST\" 
                            onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette salle ? Cette action est irréversible.');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 795, $this->source); })()), "id", [], "any", false, false, false, 795))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                          <i class=\"mdi mdi-delete me-1\"></i>
                          Supprimer cette salle
                        </button>
                      </form>
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
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
              </span>
              <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                Modification de salle: ";
        // line 815
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 815, $this->source); })()), "block", [], "any", false, false, false, 815), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 815, $this->source); })()), "number", [], "any", false, false, false, 815), "html", null, true);
        yield "
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Same scripts as new.html.twig -->
     <script src=\"";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 825
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 826
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      function updatePreview() {
        const block = document.getElementById('";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 830, $this->source); })()), "block", [], "any", false, false, false, 830), "vars", [], "any", false, false, false, 830), "id", [], "any", false, false, false, 830), "html", null, true);
        yield "').value;
        const number = document.getElementById('";
        // line 831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 831, $this->source); })()), "number", [], "any", false, false, false, 831), "vars", [], "any", false, false, false, 831), "id", [], "any", false, false, false, 831), "html", null, true);
        yield "').value;
        const etage = document.getElementById('";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 832, $this->source); })()), "etage", [], "any", false, false, false, 832), "vars", [], "any", false, false, false, 832), "id", [], "any", false, false, false, 832), "html", null, true);
        yield "').value;
        const capacite = document.getElementById('";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 833, $this->source); })()), "capacite", [], "any", false, false, false, 833), "vars", [], "any", false, false, false, 833), "id", [], "any", false, false, false, 833), "html", null, true);
        yield "').value;
        
        const previewCode = document.getElementById('preview-code');
        const previewName = document.getElementById('preview-name');
        
        if (block && number) {
          previewCode.textContent = `Salle \${block}-\${number}`;
        } else {
          previewCode.textContent = 'Salle --';
        }
        
        let info = '';
        if (etage) info += `Étage \${etage}`;
        if (capacite) info += (info ? ' · ' : '') + `Capacité: \${capacite}`;
        
        previewName.textContent = info || 'Détails de la salle';
      }
      
      // Initialize preview
      document.addEventListener('DOMContentLoaded', function() {
        updatePreview();
        
        // Form validation
        const form = document.getElementById('salle-form');
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
              alert('Veuillez remplir tous les champs obligatoires (*)');
            }
          });
        }
        
        // Auto-hide alerts
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert.alert-dismissible');
          alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          });
        }, 5000);
      });
    </script>

    <!-- ... -->
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
        return "salle/edit.html.twig";
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
        return array (  1189 => 833,  1185 => 832,  1181 => 831,  1177 => 830,  1170 => 826,  1166 => 825,  1162 => 824,  1148 => 815,  1142 => 812,  1122 => 795,  1117 => 793,  1103 => 782,  1099 => 781,  1095 => 780,  1091 => 779,  1087 => 778,  1052 => 746,  1043 => 740,  1036 => 736,  1025 => 728,  1019 => 724,  1017 => 721,  1013 => 720,  1006 => 716,  1000 => 712,  998 => 708,  994 => 707,  987 => 703,  981 => 699,  979 => 696,  975 => 695,  968 => 691,  962 => 687,  960 => 684,  956 => 683,  949 => 679,  943 => 675,  941 => 673,  937 => 672,  931 => 669,  923 => 666,  916 => 664,  886 => 637,  877 => 631,  861 => 617,  855 => 616,  845 => 612,  841 => 611,  836 => 610,  831 => 609,  827 => 608,  803 => 588,  788 => 576,  774 => 566,  772 => 565,  768 => 563,  763 => 560,  759 => 558,  755 => 556,  751 => 554,  749 => 553,  744 => 551,  737 => 550,  735 => 549,  728 => 544,  721 => 541,  715 => 537,  711 => 535,  707 => 533,  705 => 532,  697 => 529,  693 => 527,  686 => 524,  683 => 523,  677 => 520,  672 => 519,  670 => 518,  667 => 517,  665 => 516,  623 => 477,  607 => 464,  574 => 434,  541 => 404,  516 => 381,  505 => 373,  502 => 372,  491 => 364,  488 => 363,  486 => 362,  465 => 343,  460 => 340,  456 => 338,  452 => 336,  448 => 334,  446 => 333,  441 => 331,  434 => 330,  432 => 329,  427 => 326,  421 => 324,  418 => 323,  411 => 320,  408 => 319,  402 => 316,  397 => 315,  394 => 314,  392 => 313,  381 => 305,  377 => 304,  372 => 302,  368 => 301,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Ajouter une Salle</title>
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
      
      .block-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        display: inline-block;
        color: white;
        border: none;
      }
      
      .badge-block-a { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .badge-block-b { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .badge-block-c { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .badge-block-d { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .badge-block-e { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .badge-block-f { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); }
      
      .room-icon {
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
      
      /* Room status indicator */
      .room-status {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 5px;
      }
      
      .room-available { background-color: #28a745; }
      .room-occupied { background-color: #dc3545; }
      .room-maintenance { background-color: #ffc107; }
  
      .form-card {
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      }
      
      .block-preview {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: white;
        margin-right: 10px;
      }
      
      .block-a { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .block-b { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .block-c { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .block-d { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .block-e { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      .block-f { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); }
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      }
      
      .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
      }
      
      .preview-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
      }
      
      .preview-icon {
        width: 60px;
        height: 60px;
        background: rgba(255,255,255,0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 15px;
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
          <li class=\"nav-item menu-items active\">
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

      <!-- Top Navbar -->
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
                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une salle...\" id=\"searchInput\">
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
                      <i class=\"mdi mdi-office-building\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject mb-1\">Nouvelle salle</p>
                    <p class=\"text-muted ellipsis mb-0\"> Salle B-301 ajoutée</p>
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

            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-warning text-white me-2\">
                      <i class=\"mdi mdi-pencil\"></i>
                    </span> 
                    Modifier la Salle
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_salle_index') }}\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-office-building me-1\"></i>
                          Liste des Salles
                        </a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_salle_show', {'id': salle.id}) }}\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-eye me-1\"></i>
                          Détails
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Modification
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Form Card -->
            <div class=\"row\">
              <div class=\"col-md-8 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-pencil me-2\"></i>
                      Formulaire de modification
                    </h4>
                    
                    <div class=\"alert alert-info mb-4\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-information me-2\"></i>
                        Vous modifiez la salle: <strong>{{ salle.block }}-{{ salle.number }}</strong>
                      </h6>
                      <p class=\"mb-0\">ID: {{ salle.id }} | Créée le: {{ salle.createdAt ? salle.createdAt|date('d/m/Y H:i') : '--' }}</p>
                    </div>
                    
                    {{ form_start(form, {'attr': {'class': 'forms-sample', 'id': 'salle-form'}}) }}
                    
                    <div class=\"form-group\">
                      <label for=\"{{ form.block.vars.id }}\">Bloc *</label>
                      {{ form_widget(form.block, {'attr': {
                        'class': 'form-control'
                      }}) }}
                      <small class=\"form-text text-muted\">
                        Sélectionnez le bloc où se trouve la salle
                      </small>
                      {{ form_errors(form.block) }}
                    </div>
                    
                    <div class=\"form-group\">
                      <label for=\"{{ form.number.vars.id }}\">Numéro de salle *</label>
                      {{ form_widget(form.number, {'attr': {
                        'class': 'form-control',
                        'placeholder': 'Ex: 101, 205, etc.'
                      }}) }}
                      <small class=\"form-text text-muted\">
                        Numéro unique de la salle dans le bloc
                      </small>
                      {{ form_errors(form.number) }}
                    </div>
                    
                    <div class=\"form-group\">
                      <label for=\"{{ form.etage.vars.id }}\">Étage *</label>
                      {{ form_widget(form.etage, {'attr': {
                        'class': 'form-control',
                        'onchange': 'updatePreview()'
                      }}) }}
                      <small class=\"form-text text-muted\">
                        L'étage où se trouve la salle (1 à 4)
                      </small>
                      {{ form_errors(form.etage) }}
                    </div>

                    <div class=\"form-group\">
                      <label for=\"{{ form.capacite.vars.id }}\">Capacité *</label>
                      {{ form_widget(form.capacite, {'attr': {
                        'class': 'form-control',
                        'placeholder': 'De 1 à 30',
                        'oninput': 'updatePreview()'
                      }}) }}
                      <small class=\"form-text text-muted\">
                        Nombre maximum de personnes (1 à 30)
                      </small>
                      {{ form_errors(form.capacite) }}
                    </div>

                    <div class=\"form-group\">
                      <label for=\"{{ form.disponibilite.vars.id }}\">Disponibilité *</label>
                      {{ form_widget(form.disponibilite, {'attr': {
                        'class': 'form-control',
                        'onchange': 'updatePreview()'
                      }}) }}
                      <small class=\"form-text text-muted\">
                        Indiquez si la salle est actuellement prête à l'emploi
                      </small>
                      {{ form_errors(form.disponibilite) }}
                    </div>
                    
                    <div class=\"mt-4\">
                      <button type=\"submit\" class=\"btn btn-gradient-warning me-2\">
                        <i class=\"mdi mdi-content-save me-1\"></i>
                        Mettre à jour
                      </button>
                      <a href=\"{{ path('app_salle_show', {'id': salle.id}) }}\" class=\"btn btn-info me-2\">
                        <i class=\"mdi mdi-eye me-1\"></i>
                        Voir les détails
                      </a>
                      <a href=\"{{ path('app_salle_index') }}\" class=\"btn btn-light\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Annuler
                      </a>
                    </div>
                    
                    {{ form_end(form) }}
                  </div>
                </div>
              </div>
              
              <!-- Info Card -->
              <div class=\"col-md-4 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-alert-circle me-2\"></i>
                      Attention
                    </h4>
                    
                    <div class=\"alert alert-warning\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-alert me-2\"></i>
                        Modification en cours
                      </h6>
                      <ul class=\"mb-0\">
                        <li>Vérifiez les changements avant de sauvegarder</li>
                        <li>Les modifications sont immédiates</li>
                        <li>Pas de retour en arrière possible</li>
                      </ul>
                    </div>
                    
                    <div class=\"alert alert-light\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-history me-2\"></i>
                        Anciennes valeurs
                      </h6>
                      <ul class=\"mb-0\">
                        <li><strong>Bloc:</strong> {{ salle.block }}</li>
                        <li><strong>Numéro:</strong> {{ salle.number }}</li>
                        <li><strong>Étage:</strong> {{ salle.etage }}</li>
                        <li><strong>Capacité:</strong> {{ salle.capacite }}</li>
                        <li><strong>Disponibilité:</strong> {{ salle.disponibilite ? 'Oui' : 'Non' }}</li>
                      </ul>
                    </div>
                    
                    <!-- Delete Form -->
                    <div class=\"alert alert-danger mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-delete me-2\"></i>
                        Zone de danger
                      </h6>
                      <p class=\"mb-3\">Vous pouvez supprimer cette salle si nécessaire.</p>
                      <form action=\"{{ path('app_salle_delete', {'id': salle.id}) }}\" method=\"POST\" 
                            onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette salle ? Cette action est irréversible.');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ salle.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                          <i class=\"mdi mdi-delete me-1\"></i>
                          Supprimer cette salle
                        </button>
                      </form>
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
                Modification de salle: {{ salle.block }}-{{ salle.number }}
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Same scripts as new.html.twig -->
     <script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('assets/js/misc.js') }}\"></script>
    
    <script>
      function updatePreview() {
        const block = document.getElementById('{{ form.block.vars.id }}').value;
        const number = document.getElementById('{{ form.number.vars.id }}').value;
        const etage = document.getElementById('{{ form.etage.vars.id }}').value;
        const capacite = document.getElementById('{{ form.capacite.vars.id }}').value;
        
        const previewCode = document.getElementById('preview-code');
        const previewName = document.getElementById('preview-name');
        
        if (block && number) {
          previewCode.textContent = `Salle \${block}-\${number}`;
        } else {
          previewCode.textContent = 'Salle --';
        }
        
        let info = '';
        if (etage) info += `Étage \${etage}`;
        if (capacite) info += (info ? ' · ' : '') + `Capacité: \${capacite}`;
        
        previewName.textContent = info || 'Détails de la salle';
      }
      
      // Initialize preview
      document.addEventListener('DOMContentLoaded', function() {
        updatePreview();
        
        // Form validation
        const form = document.getElementById('salle-form');
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
              alert('Veuillez remplir tous les champs obligatoires (*)');
            }
          });
        }
        
        // Auto-hide alerts
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert.alert-dismissible');
          alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          });
        }, 5000);
      });
    </script>

    <!-- ... -->
  </body>
</html>", "salle/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\salle\\edit.html.twig");
    }
}
