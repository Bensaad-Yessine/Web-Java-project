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

/* salle/show.html.twig */
class __TwigTemplate_703884508871884069f05890783eda74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails de la Salle</title>
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
      
      /* Room icon large */
      .room-icon-large {
        width: 80px;
        height: 80px;
        border-radius: 15px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin: 0 auto 15px auto;
      }
      
      .detail-table th {
        width: 30%;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 319
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 322
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 323
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
        // line 331
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "user", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 332
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 332, $this->source); })()), "user", [], "any", false, false, false, 332), "profilePic", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 333
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 333, $this->source); })()), "user", [], "any", false, false, false, 333), "profilePic", [], "any", false, false, false, 333))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "user", [], "any", false, false, false, 334), "prenom", [], "any", false, false, false, 334), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 337
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 338, $this->source); })()), "user", [], "any", false, false, false, 338), "prenom", [], "any", false, false, false, 338))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 338, $this->source); })()), "user", [], "any", false, false, false, 338), "nom", [], "any", false, false, false, 338))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 341
            yield "                  ";
        } else {
            // line 342
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 344
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 347
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 347, $this->source); })()), "user", [], "any", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 348
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 348, $this->source); })()), "user", [], "any", false, false, false, 348), "prenom", [], "any", false, false, false, 348), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 348, $this->source); })()), "user", [], "any", false, false, false, 348), "nom", [], "any", false, false, false, 348), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 349, $this->source); })()), "user", [], "any", false, false, false, 349), "email", [], "any", false, false, false, 349), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 351
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 351, $this->source); })()), "user", [], "any", false, false, false, 351), "roles", [], "any", false, false, false, 351))) {
                // line 352
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 354
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 356
            yield "                    </div>
                  ";
        } else {
            // line 358
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 361
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
        // line 380
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 381
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 382
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
            // line 390
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 391
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
        // line 399
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
        // line 422
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
        // line 452
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
        // line 482
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
        // line 497
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\">
              <img src=\"";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 500
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\">
              <img src=\"";
        // line 501
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
        // line 541
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 542
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 543
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 543, $this->source); })()), "user", [], "any", false, false, false, 543), "profilePic", [], "any", false, false, false, 543)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 544
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 544, $this->source); })()), "user", [], "any", false, false, false, 544), "profilePic", [], "any", false, false, false, 544))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 545
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 545, $this->source); })()), "user", [], "any", false, false, false, 545), "prenom", [], "any", false, false, false, 545), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 548
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 549
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 549, $this->source); })()), "user", [], "any", false, false, false, 549), "prenom", [], "any", false, false, false, 549))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 549, $this->source); })()), "user", [], "any", false, false, false, 549), "nom", [], "any", false, false, false, 549))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 552
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 554
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 554, $this->source); })()), "user", [], "any", false, false, false, 554), "prenom", [], "any", false, false, false, 554), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 554, $this->source); })()), "user", [], "any", false, false, false, 554), "nom", [], "any", false, false, false, 554), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 557
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 557, $this->source); })()), "user", [], "any", false, false, false, 557), "roles", [], "any", false, false, false, 557))) {
                // line 558
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 560
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 562
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 566
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 569
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 574
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 574, $this->source); })()), "user", [], "any", false, false, false, 574)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 575
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 575, $this->source); })()), "user", [], "any", false, false, false, 575), "prenom", [], "any", false, false, false, 575), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 575, $this->source); })()), "user", [], "any", false, false, false, 575), "nom", [], "any", false, false, false, 575), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 576, $this->source); })()), "user", [], "any", false, false, false, 576), "email", [], "any", false, false, false, 576), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 578
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "user", [], "any", false, false, false, 578), "roles", [], "any", false, false, false, 578))) {
                // line 579
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 581
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 583
            yield "                      </small>
                    ";
        } else {
            // line 585
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 588
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 590
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 590, $this->source); })()), "user", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 591
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "id", [], "any", false, false, false, 591)]), "html", null, true);
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
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 601, $this->source); })()), "user", [], "any", false, false, false, 601), "id", [], "any", false, false, false, 601)]), "html", null, true);
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
        // line 613
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
        // line 633
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 633, $this->source); })()), "flashes", [], "any", false, false, false, 633));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 634
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 635
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 636
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 641
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-info text-white me-2\">
                      <i class=\"mdi mdi-eye\"></i>
                    </span> 
                    Détails de la Salle
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 656
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-office-building me-1\"></i>
                          Liste des Salles
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Détails: ";
        // line 662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 662, $this->source); })()), "block", [], "any", false, false, false, 662), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 662, $this->source); })()), "number", [], "any", false, false, false, 662), "html", null, true);
        yield "
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Details Card -->
            <div class=\"row\">
              <div class=\"col-md-8 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-information me-2\"></i>
                      Informations détaillées
                    </h4>
                    
                    <div class=\"row\">
                      <!-- Room Icon -->
                      <div class=\"col-md-3 text-center mb-4\">
                        <div class=\"room-icon-large\">
                          <i class=\"mdi mdi-door-closed\"></i>
                        </div>
                        <h4>Salle ";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 686, $this->source); })()), "block", [], "any", false, false, false, 686), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 686, $this->source); })()), "number", [], "any", false, false, false, 686), "html", null, true);
        yield "</h4>
                        <span class=\"badge 
                          ";
        // line 688
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 688, $this->source); })()), "block", [], "any", false, false, false, 688) == "A")) {
            yield "badge-block-a
                          ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 689
(isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 689, $this->source); })()), "block", [], "any", false, false, false, 689) == "B")) {
            yield "badge-block-b
                          ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 690
(isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 690, $this->source); })()), "block", [], "any", false, false, false, 690) == "C")) {
            yield "badge-block-c
                          ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 691
(isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 691, $this->source); })()), "block", [], "any", false, false, false, 691) == "D")) {
            yield "badge-block-d
                          ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 692
(isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 692, $this->source); })()), "block", [], "any", false, false, false, 692) == "E")) {
            yield "badge-block-e
                          ";
        } else {
            // line 693
            yield "badge-block-f";
        }
        yield "\" 
                          style=\"font-size: 1rem; padding: 5px 15px;\">
                          Bloc ";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 695, $this->source); })()), "block", [], "any", false, false, false, 695), "html", null, true);
        yield "
                        </span>
                      </div>
                      
                      <!-- Room Details -->
                      <div class=\"col-md-9\">
                        <div class=\"table-responsive\">
                          <table class=\"table detail-table\">
                            <tbody>
                              <tr>
                                <th>ID</th>
                                <td>";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 706, $this->source); })()), "id", [], "any", false, false, false, 706), "html", null, true);
        yield "</td>
                              </tr>
                              <tr>
                                <th>Code complet</th>
                                <td>
                                  <h5 class=\"mb-0\">Salle ";
        // line 711
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 711, $this->source); })()), "block", [], "any", false, false, false, 711), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 711, $this->source); })()), "number", [], "any", false, false, false, 711), "html", null, true);
        yield "</h5>
                                  <small class=\"text-muted\">Identifiant unique de la salle</small>
                                </td>
                              </tr>
                              <tr>
                                <th>Étage</th>
                                <td>
                                  <span class=\"badge badge-outline-primary\" style=\"font-size: 1rem;\">
                                    Étage ";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 719, $this->source); })()), "etage", [], "any", false, false, false, 719), "html", null, true);
        yield "
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <th>Capacité</th>
                                <td>
                                  <span class=\"badge badge-info\" style=\"font-size: 1rem;\">
                                    <i class=\"mdi mdi-account-group me-1\"></i>
                                    ";
        // line 728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 728, $this->source); })()), "capacite", [], "any", false, false, false, 728), "html", null, true);
        yield " personnes
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <th>Disponibilité</th>
                                <td>
                                  ";
        // line 735
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 735, $this->source); })()), "disponibilite", [], "any", false, false, false, 735)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 736
            yield "                                    <span class=\"badge badge-success\" style=\"font-size: 1rem;\">
                                      <i class=\"mdi mdi-check-circle me-1\"></i> Disponible
                                    </span>
                                  ";
        } else {
            // line 740
            yield "                                    <span class=\"badge badge-danger\" style=\"font-size: 1rem;\">
                                      <i class=\"mdi mdi-close-circle me-1\"></i> Occupé / Indisponible
                                    </span>
                                  ";
        }
        // line 744
        yield "                                </td>
                              </tr>
                              <!-- Add more fields if your entity has them -->
                              ";
        // line 747
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 747, $this->source); })()), "createdAt", [], "any", false, false, false, 747)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 748
            yield "                              <tr>
                                <th>Créée le</th>
                                <td>";
            // line 750
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 750, $this->source); })()), "createdAt", [], "any", false, false, false, 750), "d/m/Y H:i:s"), "html", null, true);
            yield "</td>
                              </tr>
                              ";
        }
        // line 753
        yield "                              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 753, $this->source); })()), "updatedAt", [], "any", false, false, false, 753)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 754
            yield "                              <tr>
                                <th>Modifiée le</th>
                                <td>";
            // line 756
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 756, $this->source); })()), "updatedAt", [], "any", false, false, false, 756), "d/m/Y H:i:s"), "html", null, true);
            yield "</td>
                              </tr>
                              ";
        }
        // line 759
        yield "                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class=\"mt-4 pt-3 border-top\">
                      <a href=\"";
        // line 767
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 767, $this->source); })()), "id", [], "any", false, false, false, 767)]), "html", null, true);
        yield "\" class=\"btn btn-gradient-warning me-2\">
                        <i class=\"mdi mdi-pencil me-1\"></i>
                        Modifier
                      </a>
                      <a href=\"";
        // line 771
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\" class=\"btn btn-light me-2\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Retour à la liste
                      </a>
                      <button type=\"button\" class=\"btn btn-outline-danger\" 
                              onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cette salle ?')) {
                                document.getElementById('delete-form').submit();
                              }\">
                        <i class=\"mdi mdi-delete me-1\"></i>
                        Supprimer
                      </button>
                      
                      <!-- Hidden Delete Form -->
                      <form id=\"delete-form\" action=\"";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 784, $this->source); })()), "id", [], "any", false, false, false, 784)]), "html", null, true);
        yield "\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 785, $this->source); })()), "id", [], "any", false, false, false, 785))), "html", null, true);
        yield "\">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Statistics Card -->
              <div class=\"col-md-4 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-chart-bar me-2\"></i>
                      Statistiques
                    </h4>
                    
                    <div class=\"alert alert-info\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-information me-2\"></i>
                        Informations système
                      </h6>
                      <ul class=\"mb-0\">
                        <li><strong>ID:</strong> ";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 807, $this->source); })()), "id", [], "any", false, false, false, 807), "html", null, true);
        yield "</li>
                        <li><strong>Bloc:</strong> ";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 808, $this->source); })()), "block", [], "any", false, false, false, 808), "html", null, true);
        yield "</li>
                        <li><strong>Numéro:</strong> ";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 809, $this->source); })()), "number", [], "any", false, false, false, 809), "html", null, true);
        yield "</li>
                        <li><strong>Étage:</strong> ";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 810, $this->source); })()), "etage", [], "any", false, false, false, 810), "html", null, true);
        yield "</li>
                        <li><strong>Capacité:</strong> ";
        // line 811
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 811, $this->source); })()), "capacite", [], "any", false, false, false, 811), "html", null, true);
        yield " personnes</li>
                        <li><strong>Disponibilité:</strong> 
                          ";
        // line 813
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 813, $this->source); })()), "disponibilite", [], "any", false, false, false, 813)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 814
            yield "                            <span class=\"badge badge-success\">Oui</span>
                          ";
        } else {
            // line 816
            yield "                            <span class=\"badge badge-danger\">Non</span>
                          ";
        }
        // line 818
        yield "                        </li>
                        <li><strong>Status:</strong> 
                          ";
        // line 820
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 820, $this->source); })()), "disponibilite", [], "any", false, false, false, 820)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 821
            yield "                            <span class=\"badge badge-success\">Actif</span>
                          ";
        } else {
            // line 823
            yield "                            <span class=\"badge badge-danger\">Inactif</span>
                          ";
        }
        // line 825
        yield "                        </li>
                      </ul>
                    </div>
                    
                    <!-- Quick Actions -->
                    <div class=\"alert alert-light mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-lightning-bolt me-2\"></i>
                        Actions rapides
                      </h6>
                      <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 836
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 836, $this->source); })()), "id", [], "any", false, false, false, 836)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                          <i class=\"mdi mdi-pencil me-1\"></i>
                          Modifier cette salle
                        </a>
                        <a href=\"";
        // line 840
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_new");
        yield "\" class=\"btn btn-primary\">
                          <i class=\"mdi mdi-plus-circle me-1\"></i>
                          Ajouter une nouvelle salle
                        </a>
                        <a href=\"";
        // line 844
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\" class=\"btn btn-secondary\">
                          <i class=\"mdi mdi-view-list me-1\"></i>
                          Voir toutes les salles
                        </a>
                      </div>
                    </div>
                    
                    <!-- Danger Zone -->
                    <div class=\"alert alert-danger mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-alert-circle me-2\"></i>
                        Zone de danger
                      </h6>
                      <p class=\"mb-3\">La suppression est permanente et irréversible.</p>
                      <button type=\"button\" class=\"btn btn-outline-danger btn-sm\" 
                              onclick=\"if(confirm('Êtes-vous ABSOLUMENT sûr ? Cette action supprimera définitivement cette salle.')) {
                                document.getElementById('delete-form').submit();
                              }\">
                        <i class=\"mdi mdi-delete me-1\"></i>
                        Supprimer définitivement
                      </button>
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
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
              </span>
              <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                Détails de salle: ";
        // line 879
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 879, $this->source); })()), "block", [], "any", false, false, false, 879), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 879, $this->source); })()), "number", [], "any", false, false, false, 879), "html", null, true);
        yield "
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 890
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
            // You could redirect to index with search parameter
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
        return "salle/show.html.twig";
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
        return array (  1281 => 890,  1277 => 889,  1273 => 888,  1259 => 879,  1253 => 876,  1218 => 844,  1211 => 840,  1204 => 836,  1191 => 825,  1187 => 823,  1183 => 821,  1181 => 820,  1177 => 818,  1173 => 816,  1169 => 814,  1167 => 813,  1162 => 811,  1158 => 810,  1154 => 809,  1150 => 808,  1146 => 807,  1121 => 785,  1117 => 784,  1101 => 771,  1094 => 767,  1084 => 759,  1078 => 756,  1074 => 754,  1071 => 753,  1065 => 750,  1061 => 748,  1059 => 747,  1054 => 744,  1048 => 740,  1042 => 736,  1040 => 735,  1030 => 728,  1018 => 719,  1005 => 711,  997 => 706,  983 => 695,  977 => 693,  972 => 692,  968 => 691,  964 => 690,  960 => 689,  956 => 688,  949 => 686,  920 => 662,  911 => 656,  895 => 642,  889 => 641,  879 => 637,  875 => 636,  870 => 635,  865 => 634,  861 => 633,  837 => 613,  822 => 601,  808 => 591,  806 => 590,  802 => 588,  797 => 585,  793 => 583,  789 => 581,  785 => 579,  783 => 578,  778 => 576,  771 => 575,  769 => 574,  762 => 569,  755 => 566,  749 => 562,  745 => 560,  741 => 558,  739 => 557,  731 => 554,  727 => 552,  720 => 549,  717 => 548,  711 => 545,  706 => 544,  704 => 543,  701 => 542,  699 => 541,  656 => 501,  652 => 500,  647 => 498,  643 => 497,  625 => 482,  592 => 452,  559 => 422,  534 => 399,  523 => 391,  520 => 390,  509 => 382,  506 => 381,  504 => 380,  483 => 361,  478 => 358,  474 => 356,  470 => 354,  466 => 352,  464 => 351,  459 => 349,  452 => 348,  450 => 347,  445 => 344,  439 => 342,  436 => 341,  429 => 338,  426 => 337,  420 => 334,  415 => 333,  412 => 332,  410 => 331,  399 => 323,  395 => 322,  390 => 320,  386 => 319,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails de la Salle</title>
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
      
      /* Room icon large */
      .room-icon-large {
        width: 80px;
        height: 80px;
        border-radius: 15px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin: 0 auto 15px auto;
      }
      
      .detail-table th {
        width: 30%;
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
            <a class=\"navbar-brand brand-logo\" href=\"{{ path('app_salle_index') }}\">
              <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"{{ path('app_salle_index') }}\">
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
                    <span class=\"page-title-icon bg-gradient-info text-white me-2\">
                      <i class=\"mdi mdi-eye\"></i>
                    </span> 
                    Détails de la Salle
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
                        <span></span>Détails: {{ salle.block }}-{{ salle.number }}
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Details Card -->
            <div class=\"row\">
              <div class=\"col-md-8 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-information me-2\"></i>
                      Informations détaillées
                    </h4>
                    
                    <div class=\"row\">
                      <!-- Room Icon -->
                      <div class=\"col-md-3 text-center mb-4\">
                        <div class=\"room-icon-large\">
                          <i class=\"mdi mdi-door-closed\"></i>
                        </div>
                        <h4>Salle {{ salle.block }}-{{ salle.number }}</h4>
                        <span class=\"badge 
                          {% if salle.block == 'A' %}badge-block-a
                          {% elseif salle.block == 'B' %}badge-block-b
                          {% elseif salle.block == 'C' %}badge-block-c
                          {% elseif salle.block == 'D' %}badge-block-d
                          {% elseif salle.block == 'E' %}badge-block-e
                          {% else %}badge-block-f{% endif %}\" 
                          style=\"font-size: 1rem; padding: 5px 15px;\">
                          Bloc {{ salle.block }}
                        </span>
                      </div>
                      
                      <!-- Room Details -->
                      <div class=\"col-md-9\">
                        <div class=\"table-responsive\">
                          <table class=\"table detail-table\">
                            <tbody>
                              <tr>
                                <th>ID</th>
                                <td>{{ salle.id }}</td>
                              </tr>
                              <tr>
                                <th>Code complet</th>
                                <td>
                                  <h5 class=\"mb-0\">Salle {{ salle.block }}-{{ salle.number }}</h5>
                                  <small class=\"text-muted\">Identifiant unique de la salle</small>
                                </td>
                              </tr>
                              <tr>
                                <th>Étage</th>
                                <td>
                                  <span class=\"badge badge-outline-primary\" style=\"font-size: 1rem;\">
                                    Étage {{ salle.etage }}
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <th>Capacité</th>
                                <td>
                                  <span class=\"badge badge-info\" style=\"font-size: 1rem;\">
                                    <i class=\"mdi mdi-account-group me-1\"></i>
                                    {{ salle.capacite }} personnes
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <th>Disponibilité</th>
                                <td>
                                  {% if salle.disponibilite %}
                                    <span class=\"badge badge-success\" style=\"font-size: 1rem;\">
                                      <i class=\"mdi mdi-check-circle me-1\"></i> Disponible
                                    </span>
                                  {% else %}
                                    <span class=\"badge badge-danger\" style=\"font-size: 1rem;\">
                                      <i class=\"mdi mdi-close-circle me-1\"></i> Occupé / Indisponible
                                    </span>
                                  {% endif %}
                                </td>
                              </tr>
                              <!-- Add more fields if your entity has them -->
                              {% if salle.createdAt %}
                              <tr>
                                <th>Créée le</th>
                                <td>{{ salle.createdAt|date('d/m/Y H:i:s') }}</td>
                              </tr>
                              {% endif %}
                              {% if salle.updatedAt %}
                              <tr>
                                <th>Modifiée le</th>
                                <td>{{ salle.updatedAt|date('d/m/Y H:i:s') }}</td>
                              </tr>
                              {% endif %}
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class=\"mt-4 pt-3 border-top\">
                      <a href=\"{{ path('app_salle_edit', {'id': salle.id}) }}\" class=\"btn btn-gradient-warning me-2\">
                        <i class=\"mdi mdi-pencil me-1\"></i>
                        Modifier
                      </a>
                      <a href=\"{{ path('app_salle_index') }}\" class=\"btn btn-light me-2\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Retour à la liste
                      </a>
                      <button type=\"button\" class=\"btn btn-outline-danger\" 
                              onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer cette salle ?')) {
                                document.getElementById('delete-form').submit();
                              }\">
                        <i class=\"mdi mdi-delete me-1\"></i>
                        Supprimer
                      </button>
                      
                      <!-- Hidden Delete Form -->
                      <form id=\"delete-form\" action=\"{{ path('app_salle_delete', {'id': salle.id}) }}\" method=\"POST\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ salle.id) }}\">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Statistics Card -->
              <div class=\"col-md-4 grid-margin stretch-card\">
                <div class=\"card form-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">
                      <i class=\"mdi mdi-chart-bar me-2\"></i>
                      Statistiques
                    </h4>
                    
                    <div class=\"alert alert-info\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-information me-2\"></i>
                        Informations système
                      </h6>
                      <ul class=\"mb-0\">
                        <li><strong>ID:</strong> {{ salle.id }}</li>
                        <li><strong>Bloc:</strong> {{ salle.block }}</li>
                        <li><strong>Numéro:</strong> {{ salle.number }}</li>
                        <li><strong>Étage:</strong> {{ salle.etage }}</li>
                        <li><strong>Capacité:</strong> {{ salle.capacite }} personnes</li>
                        <li><strong>Disponibilité:</strong> 
                          {% if salle.disponibilite %}
                            <span class=\"badge badge-success\">Oui</span>
                          {% else %}
                            <span class=\"badge badge-danger\">Non</span>
                          {% endif %}
                        </li>
                        <li><strong>Status:</strong> 
                          {% if salle.disponibilite %}
                            <span class=\"badge badge-success\">Actif</span>
                          {% else %}
                            <span class=\"badge badge-danger\">Inactif</span>
                          {% endif %}
                        </li>
                      </ul>
                    </div>
                    
                    <!-- Quick Actions -->
                    <div class=\"alert alert-light mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-lightning-bolt me-2\"></i>
                        Actions rapides
                      </h6>
                      <div class=\"d-grid gap-2\">
                        <a href=\"{{ path('app_salle_edit', {'id': salle.id}) }}\" class=\"btn btn-warning\">
                          <i class=\"mdi mdi-pencil me-1\"></i>
                          Modifier cette salle
                        </a>
                        <a href=\"{{ path('app_salle_new') }}\" class=\"btn btn-primary\">
                          <i class=\"mdi mdi-plus-circle me-1\"></i>
                          Ajouter une nouvelle salle
                        </a>
                        <a href=\"{{ path('app_salle_index') }}\" class=\"btn btn-secondary\">
                          <i class=\"mdi mdi-view-list me-1\"></i>
                          Voir toutes les salles
                        </a>
                      </div>
                    </div>
                    
                    <!-- Danger Zone -->
                    <div class=\"alert alert-danger mt-3\">
                      <h6 class=\"alert-heading\">
                        <i class=\"mdi mdi-alert-circle me-2\"></i>
                        Zone de danger
                      </h6>
                      <p class=\"mb-3\">La suppression est permanente et irréversible.</p>
                      <button type=\"button\" class=\"btn btn-outline-danger btn-sm\" 
                              onclick=\"if(confirm('Êtes-vous ABSOLUMENT sûr ? Cette action supprimera définitivement cette salle.')) {
                                document.getElementById('delete-form').submit();
                              }\">
                        <i class=\"mdi mdi-delete me-1\"></i>
                        Supprimer définitivement
                      </button>
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
                Détails de salle: {{ salle.block }}-{{ salle.number }}
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
            // You could redirect to index with search parameter
            console.log('Searching for:', filter);
          });
        }
      });
    </script>
  </body>
</html>", "salle/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\salle\\show.html.twig");
    }
}
