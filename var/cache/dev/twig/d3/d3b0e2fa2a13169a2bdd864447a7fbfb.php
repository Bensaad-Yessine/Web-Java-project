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

/* salle/new.html.twig */
class __TwigTemplate_6eefb3313d64fa7f4ac7d2b7f26cf1bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/new.html.twig"));

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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 304
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
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

      <!-- Main Content -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- Navbar -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <img src=\"";
        // line 479
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
        // line 518
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 518, $this->source); })()), "user", [], "any", false, false, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 519
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 520
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 520, $this->source); })()), "user", [], "any", false, false, false, 520), "profilePic", [], "any", false, false, false, 520)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 521
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 521, $this->source); })()), "user", [], "any", false, false, false, 521), "profilePic", [], "any", false, false, false, 521))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 522, $this->source); })()), "user", [], "any", false, false, false, 522), "prenom", [], "any", false, false, false, 522), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 525
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 526
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 526, $this->source); })()), "user", [], "any", false, false, false, 526), "prenom", [], "any", false, false, false, 526))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 526, $this->source); })()), "user", [], "any", false, false, false, 526), "nom", [], "any", false, false, false, 526))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 529
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 531, $this->source); })()), "user", [], "any", false, false, false, 531), "prenom", [], "any", false, false, false, 531), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 531, $this->source); })()), "user", [], "any", false, false, false, 531), "nom", [], "any", false, false, false, 531), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 534
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 534, $this->source); })()), "user", [], "any", false, false, false, 534), "roles", [], "any", false, false, false, 534))) {
                // line 535
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 537
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 539
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 543
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 546
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 551
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 551, $this->source); })()), "user", [], "any", false, false, false, 551)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 552
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 552, $this->source); })()), "user", [], "any", false, false, false, 552), "prenom", [], "any", false, false, false, 552), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 552, $this->source); })()), "user", [], "any", false, false, false, 552), "nom", [], "any", false, false, false, 552), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 553
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 553, $this->source); })()), "user", [], "any", false, false, false, 553), "email", [], "any", false, false, false, 553), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 555
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "user", [], "any", false, false, false, 555), "roles", [], "any", false, false, false, 555))) {
                // line 556
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 558
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 560
            yield "                      </small>
                    ";
        } else {
            // line 562
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 565
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 567
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 567, $this->source); })()), "user", [], "any", false, false, false, 567)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 568
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 568, $this->source); })()), "user", [], "any", false, false, false, 568), "id", [], "any", false, false, false, 568)]), "html", null, true);
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
            // line 578
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "user", [], "any", false, false, false, 578), "id", [], "any", false, false, false, 578)]), "html", null, true);
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
        // line 590
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
        // line 610
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 610, $this->source); })()), "flashes", [], "any", false, false, false, 610));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 611
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 612
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 613
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 614
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 618
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-plus-circle\"></i>
                    </span> 
                    Ajouter une nouvelle Salle
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 633
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-office-building me-1\"></i>
                          Liste des Salles
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Nouvelle Salle
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
                      <i class=\"mdi mdi-office-building me-2\"></i>
                      Formulaire d'ajout de salle
                    </h4>
                    
                    ";
        // line 657
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 657, $this->source); })()), 'form_start', ["attr" => ["class" => "forms-sample", "id" => "salle-form"]]);
        yield "
                    
                    <div class=\"form-group\">
                      <label for=\"";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 660, $this->source); })()), "block", [], "any", false, false, false, 660), "vars", [], "any", false, false, false, 660), "id", [], "any", false, false, false, 660), "html", null, true);
        yield "\">Bloc *</label>
                      ";
        // line 661
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 661, $this->source); })()), "block", [], "any", false, false, false, 661), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updatePreview()"]]);
        // line 664
        yield "
                      <small class=\"form-text text-muted\">
                        Sélectionnez le bloc où se trouve la salle
                      </small>
                      ";
        // line 668
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 668, $this->source); })()), "block", [], "any", false, false, false, 668), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                      <label for=\"";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 672, $this->source); })()), "number", [], "any", false, false, false, 672), "vars", [], "any", false, false, false, 672), "id", [], "any", false, false, false, 672), "html", null, true);
        yield "\">Numéro de salle *</label>
                      ";
        // line 673
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 673, $this->source); })()), "number", [], "any", false, false, false, 673), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 101, 205, etc.", "oninput" => "updatePreview()"]]);
        // line 677
        yield "
                      <small class=\"form-text text-muted\">
                        Numéro unique de la salle dans le bloc
                      </small>
                      ";
        // line 681
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 681, $this->source); })()), "number", [], "any", false, false, false, 681), 'errors');
        yield "
                    </div>
                    
                    <div class=\"form-group\">
                      <label for=\"";
        // line 685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 685, $this->source); })()), "etage", [], "any", false, false, false, 685), "vars", [], "any", false, false, false, 685), "id", [], "any", false, false, false, 685), "html", null, true);
        yield "\">Étage *</label>
                      ";
        // line 686
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 686, $this->source); })()), "etage", [], "any", false, false, false, 686), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updatePreview()"]]);
        // line 689
        yield "
                      <small class=\"form-text text-muted\">
                        L'étage où se trouve la salle (1 à 4)
                      </small>
                      ";
        // line 693
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 693, $this->source); })()), "etage", [], "any", false, false, false, 693), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                      <label for=\"";
        // line 697
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 697, $this->source); })()), "capacite", [], "any", false, false, false, 697), "vars", [], "any", false, false, false, 697), "id", [], "any", false, false, false, 697), "html", null, true);
        yield "\">Capacité *</label>
                      ";
        // line 698
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 698, $this->source); })()), "capacite", [], "any", false, false, false, 698), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "De 1 à 30", "oninput" => "updatePreview()"]]);
        // line 702
        yield "
                      <small class=\"form-text text-muted\">
                        Nombre maximum de personnes (1 à 30)
                      </small>
                      ";
        // line 706
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 706, $this->source); })()), "capacite", [], "any", false, false, false, 706), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                      <label for=\"";
        // line 710
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 710, $this->source); })()), "disponibilite", [], "any", false, false, false, 710), "vars", [], "any", false, false, false, 710), "id", [], "any", false, false, false, 710), "html", null, true);
        yield "\">Disponibilité *</label>
                      ";
        // line 711
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 711, $this->source); })()), "disponibilite", [], "any", false, false, false, 711), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updatePreview()"]]);
        // line 714
        yield "
                      <small class=\"form-text text-muted\">
                        Indiquez si la salle est actuellement prête à l'emploi
                      </small>
                      ";
        // line 718
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 718, $this->source); })()), "disponibilite", [], "any", false, false, false, 718), 'errors');
        yield "
                    </div>
                    
                    <div class=\"mt-4\">
                      <button type=\"submit\" class=\"btn btn-gradient-primary me-2\">
                        <i class=\"mdi mdi-content-save me-1\"></i>
                        Enregistrer
                      </button>
                      <a href=\"";
        // line 726
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Annuler
                      </a>
                    </div>
                    
                    ";
        // line 732
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 732, $this->source); })()), 'form_end');
        yield "
                  </div>
                </div>
              </div>
              
              <!-- Preview Card -->
              <div class=\"col-md-4 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-eye me-2\"></i>
                      Aperçu
                    </h4>
                    
                    <div class=\"preview-card\">
                      <div class=\"preview-icon\">
                        <i class=\"mdi mdi-door-closed\"></i>
                      </div>
                      <h5 id=\"preview-code\">Salle --</h5>
                      <p id=\"preview-name\" class=\"mb-0\">Nom de la salle</p>
                    </div>
                    
                    <div class=\"alert alert-info mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-information me-2\"></i>
                        Informations
                      </h6>
                      <ul class=\"mb-0\">
                        <li>Le numéro doit être unique par bloc</li>
                        <li>Utilisez un nom descriptif</li>
                        <li>Les champs marqués (*) sont obligatoires</li>
                      </ul>
                    </div>
                    
                    <div class=\"alert alert-light mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-lightbulb-on me-2\"></i>
                        Conseils
                      </h6>
                      <ul class=\"mb-0\">
                        <li>Utilisez des numéros logiques</li>
                        <li>Inclure la capacité dans le nom si nécessaire</li>
                        <li>Vérifiez les doublons</li>
                      </ul>
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
        // line 787
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
              </span>
              <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                Ajout de salle
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 800
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      function updatePreview() {
        const block = document.getElementById('";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 805, $this->source); })()), "block", [], "any", false, false, false, 805), "vars", [], "any", false, false, false, 805), "id", [], "any", false, false, false, 805), "html", null, true);
        yield "').value;
        const number = document.getElementById('";
        // line 806
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 806, $this->source); })()), "number", [], "any", false, false, false, 806), "vars", [], "any", false, false, false, 806), "id", [], "any", false, false, false, 806), "html", null, true);
        yield "').value;
        const etage = document.getElementById('";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 807, $this->source); })()), "etage", [], "any", false, false, false, 807), "vars", [], "any", false, false, false, 807), "id", [], "any", false, false, false, 807), "html", null, true);
        yield "').value;
        const capacite = document.getElementById('";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 808, $this->source); })()), "capacite", [], "any", false, false, false, 808), "vars", [], "any", false, false, false, 808), "id", [], "any", false, false, false, 808), "html", null, true);
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
        return "salle/new.html.twig";
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
        return array (  1120 => 808,  1116 => 807,  1112 => 806,  1108 => 805,  1101 => 801,  1097 => 800,  1093 => 799,  1078 => 787,  1020 => 732,  1011 => 726,  1000 => 718,  994 => 714,  992 => 711,  988 => 710,  981 => 706,  975 => 702,  973 => 698,  969 => 697,  962 => 693,  956 => 689,  954 => 686,  950 => 685,  943 => 681,  937 => 677,  935 => 673,  931 => 672,  924 => 668,  918 => 664,  916 => 661,  912 => 660,  906 => 657,  879 => 633,  863 => 619,  857 => 618,  847 => 614,  843 => 613,  838 => 612,  833 => 611,  829 => 610,  805 => 590,  790 => 578,  776 => 568,  774 => 567,  770 => 565,  765 => 562,  761 => 560,  757 => 558,  753 => 556,  751 => 555,  746 => 553,  739 => 552,  737 => 551,  730 => 546,  723 => 543,  717 => 539,  713 => 537,  709 => 535,  707 => 534,  699 => 531,  695 => 529,  688 => 526,  685 => 525,  679 => 522,  674 => 521,  672 => 520,  669 => 519,  667 => 518,  625 => 479,  607 => 464,  574 => 434,  541 => 404,  516 => 381,  505 => 373,  502 => 372,  491 => 364,  488 => 363,  486 => 362,  465 => 343,  460 => 340,  456 => 338,  452 => 336,  448 => 334,  446 => 333,  441 => 331,  434 => 330,  432 => 329,  427 => 326,  421 => 324,  418 => 323,  411 => 320,  408 => 319,  402 => 316,  397 => 315,  394 => 314,  392 => 313,  381 => 305,  377 => 304,  372 => 302,  368 => 301,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
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
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-plus-circle\"></i>
                    </span> 
                    Ajouter une nouvelle Salle
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_salle_index') }}\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-office-building me-1\"></i>
                          Liste des Salles
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Nouvelle Salle
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
                      <i class=\"mdi mdi-office-building me-2\"></i>
                      Formulaire d'ajout de salle
                    </h4>
                    
                    {{ form_start(form, {'attr': {'class': 'forms-sample', 'id': 'salle-form'}}) }}
                    
                    <div class=\"form-group\">
                      <label for=\"{{ form.block.vars.id }}\">Bloc *</label>
                      {{ form_widget(form.block, {'attr': {
                        'class': 'form-control',
                        'onchange': 'updatePreview()'
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
                        'placeholder': 'Ex: 101, 205, etc.',
                        'oninput': 'updatePreview()'
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
                      <button type=\"submit\" class=\"btn btn-gradient-primary me-2\">
                        <i class=\"mdi mdi-content-save me-1\"></i>
                        Enregistrer
                      </button>
                      <a href=\"{{ path('app_salle_index') }}\" class=\"btn btn-light\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Annuler
                      </a>
                    </div>
                    
                    {{ form_end(form) }}
                  </div>
                </div>
              </div>
              
              <!-- Preview Card -->
              <div class=\"col-md-4 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-eye me-2\"></i>
                      Aperçu
                    </h4>
                    
                    <div class=\"preview-card\">
                      <div class=\"preview-icon\">
                        <i class=\"mdi mdi-door-closed\"></i>
                      </div>
                      <h5 id=\"preview-code\">Salle --</h5>
                      <p id=\"preview-name\" class=\"mb-0\">Nom de la salle</p>
                    </div>
                    
                    <div class=\"alert alert-info mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-information me-2\"></i>
                        Informations
                      </h6>
                      <ul class=\"mb-0\">
                        <li>Le numéro doit être unique par bloc</li>
                        <li>Utilisez un nom descriptif</li>
                        <li>Les champs marqués (*) sont obligatoires</li>
                      </ul>
                    </div>
                    
                    <div class=\"alert alert-light mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-lightbulb-on me-2\"></i>
                        Conseils
                      </h6>
                      <ul class=\"mb-0\">
                        <li>Utilisez des numéros logiques</li>
                        <li>Inclure la capacité dans le nom si nécessaire</li>
                        <li>Vérifiez les doublons</li>
                      </ul>
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
                Ajout de salle
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Scripts -->
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
  </body>
</html>", "salle/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\salle\\new.html.twig");
    }
}
