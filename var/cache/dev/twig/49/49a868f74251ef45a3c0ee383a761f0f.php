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

/* salle/index.html.twig */
class __TwigTemplate_07bdc54e77e2a06e80750de10365c0f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Salles</title>
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 250
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
        // line 258
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 258, $this->source); })()), "user", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 259
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "user", [], "any", false, false, false, 259), "profilePic", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 260
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "user", [], "any", false, false, false, 260), "profilePic", [], "any", false, false, false, 260))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 261, $this->source); })()), "user", [], "any", false, false, false, 261), "prenom", [], "any", false, false, false, 261), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 264
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "prenom", [], "any", false, false, false, 265))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "nom", [], "any", false, false, false, 265))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 268
            yield "                  ";
        } else {
            // line 269
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 271
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 274
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 274, $this->source); })()), "user", [], "any", false, false, false, 274)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 275
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "user", [], "any", false, false, false, 275), "prenom", [], "any", false, false, false, 275), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "user", [], "any", false, false, false, 275), "nom", [], "any", false, false, false, 275), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "user", [], "any", false, false, false, 276), "email", [], "any", false, false, false, 276), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 278
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "user", [], "any", false, false, false, 278), "roles", [], "any", false, false, false, 278))) {
                // line 279
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 281
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 283
            yield "                    </div>
                  ";
        } else {
            // line 285
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 288
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
        // line 307
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 308
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 309
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
            // line 317
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 318
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
        // line 326
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
        // line 349
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
        // line 379
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
        // line 409
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
        // line 424
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
        // line 463
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 463, $this->source); })()), "user", [], "any", false, false, false, 463)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 464
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 465
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 465, $this->source); })()), "user", [], "any", false, false, false, 465), "profilePic", [], "any", false, false, false, 465)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 466
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 466, $this->source); })()), "user", [], "any", false, false, false, 466), "profilePic", [], "any", false, false, false, 466))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 467
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 467, $this->source); })()), "user", [], "any", false, false, false, 467), "prenom", [], "any", false, false, false, 467), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 470
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 471
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "user", [], "any", false, false, false, 471), "prenom", [], "any", false, false, false, 471))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "user", [], "any", false, false, false, 471), "nom", [], "any", false, false, false, 471))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 474
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 476, $this->source); })()), "user", [], "any", false, false, false, 476), "prenom", [], "any", false, false, false, 476), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 476, $this->source); })()), "user", [], "any", false, false, false, 476), "nom", [], "any", false, false, false, 476), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 479
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 479, $this->source); })()), "user", [], "any", false, false, false, 479), "roles", [], "any", false, false, false, 479))) {
                // line 480
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 482
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 484
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 488
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 491
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 496
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 496, $this->source); })()), "user", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 497
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "user", [], "any", false, false, false, 497), "prenom", [], "any", false, false, false, 497), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "user", [], "any", false, false, false, 497), "nom", [], "any", false, false, false, 497), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 498, $this->source); })()), "user", [], "any", false, false, false, 498), "email", [], "any", false, false, false, 498), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 500
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 500, $this->source); })()), "user", [], "any", false, false, false, 500), "roles", [], "any", false, false, false, 500))) {
                // line 501
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 503
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 505
            yield "                      </small>
                    ";
        } else {
            // line 507
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 510
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 512
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 512, $this->source); })()), "user", [], "any", false, false, false, 512)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 513
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 513, $this->source); })()), "user", [], "any", false, false, false, 513), "id", [], "any", false, false, false, 513)]), "html", null, true);
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
            // line 523
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 523, $this->source); })()), "user", [], "any", false, false, false, 523), "id", [], "any", false, false, false, 523)]), "html", null, true);
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
        // line 535
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
        // line 555
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "flashes", [], "any", false, false, false, 555));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 556
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 557
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 558
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 559
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-office-building\"></i>
                    </span> 
                    Gestion des Salles
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste complète des salles ESPRIT
                      </li>
                    </ul>
                  </nav>
                  ";
        // line 582
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 582, $this->source); })()), "user", [], "any", false, false, false, 582)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 583
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 586, $this->source); })()), "user", [], "any", false, false, false, 586), "prenom", [], "any", false, false, false, 586), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 586, $this->source); })()), "user", [], "any", false, false, false, 586), "nom", [], "any", false, false, false, 586), "html", null, true);
            yield "</strong>
                        (";
            // line 587
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 587, $this->source); })()), "user", [], "any", false, false, false, 587), "email", [], "any", false, false, false, 587), "html", null, true);
            yield ")
                        ";
            // line 588
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "user", [], "any", false, false, false, 588), "roles", [], "any", false, false, false, 588))) {
                // line 589
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 591
            yield "                      </small>
                    </div>
                  ";
        }
        // line 594
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
                          <h3 class=\"mb-0 stat-count\">";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 606, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+8%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-office-building\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Salles</h6>
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
        // line 626
        $context["blockA"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 626, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 626, $this->source); })()), "block", [], "any", false, false, false, 626) == "A"); }));
        // line 627
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockA"]) || array_key_exists("blockA", $context) ? $context["blockA"] : (function () { throw new RuntimeError('Variable "blockA" does not exist.', 627, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+2%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-alpha-a-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Bloc A</h6>
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
        // line 647
        $context["blockB"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 647, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 647, $this->source); })()), "block", [], "any", false, false, false, 647) == "B"); }));
        // line 648
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockB"]) || array_key_exists("blockB", $context) ? $context["blockB"] : (function () { throw new RuntimeError('Variable "blockB" does not exist.', 648, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+3%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-alpha-b-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Bloc B</h6>
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
        // line 668
        $context["otherBlocks"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 668, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 668, $this->source); })()), "block", [], "any", false, false, false, 668), ["A", "B"]); }));
        // line 669
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["otherBlocks"]) || array_key_exists("otherBlocks", $context) ? $context["otherBlocks"] : (function () { throw new RuntimeError('Variable "otherBlocks" does not exist.', 669, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+5%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-domain\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Autres Blocs</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Salles Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">🏢 Liste des Salles</h4>
                      <a href=\"";
        // line 692
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_new");
        yield "\" class=\"btn btn-gradient-primary btn-icon-text\">
                        <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                        Ajouter une salle
                      </a>
                    </div>

                    <!-- Filters Panel -->
                    <div class=\"card mb-3\" style=\"background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: none; border-radius: 10px;\">
                      <div class=\"card-body\">
                        <h4 class=\"card-title mb-4 text-primary\"><i class=\"mdi mdi-filter-variant me-2\"></i>Filtrer et Rechercher</h4>
                        <div class=\"row g-3\">
                          <div class=\"col-md-3\">
                            <label class=\"fw-bold mb-1\">Recherche</label>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-lg border-primary\" 
                                   placeholder=\"🔍 Nom de salle...\" value=\"";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 706, $this->source); })()), "html", null, true);
        yield "\" style=\"border-width: 2px;\">
                          </div>
                          <div class=\"col-md-3\">
                            <label class=\"fw-bold mb-1\">Bloc</label>
                            <select id=\"blockFilter\" class=\"form-control form-control-lg border-secondary\" style=\"cursor: pointer;\">
                              <option value=\"\">-- Tous les blocs --</option>
                              ";
        // line 712
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 712, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 713
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "block", [], "any", false, false, false, 713), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["b"], "block", [], "any", false, false, false, 713) == (isset($context["blockFilter"]) || array_key_exists("blockFilter", $context) ? $context["blockFilter"] : (function () { throw new RuntimeError('Variable "blockFilter" does not exist.', 713, $this->source); })()))) {
                yield "selected";
            }
            yield ">
                                  Bloc ";
            // line 714
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "block", [], "any", false, false, false, 714), "html", null, true);
            yield "
                                </option>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['b'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 717
        yield "                            </select>
                          </div>
                          <!-- Optional: Capacity Filters if needed, can add later -->
                          <div class=\"col-md-3\">
                            <label class=\"fw-bold mb-1\">Capacité Max</label>
                             <input type=\"number\" id=\"maxCapaciteInput\" class=\"form-control form-control-lg border-secondary\" placeholder=\"Ex: 50\" value=\"";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxCapacite"]) || array_key_exists("maxCapacite", $context) ? $context["maxCapacite"] : (function () { throw new RuntimeError('Variable "maxCapacite" does not exist.', 722, $this->source); })()), "html", null, true);
        yield "\">
                          </div>

                          <div class=\"col-md-3\">
                            <label class=\"fw-bold mb-1\">Trier par</label>
                            <select id=\"sortSelect\" class=\"form-control form-control-lg border-secondary\" style=\"cursor: pointer;\">
                              <option value=\"id-asc\" ";
        // line 728
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 728, $this->source); })()) == "id") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 728, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">ID (croissant)</option>
                              <option value=\"id-desc\" ";
        // line 729
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 729, $this->source); })()) == "id") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 729, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">ID (décroissant)</option>
                              <option value=\"name-asc\" ";
        // line 730
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 730, $this->source); })()) == "name") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 730, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Nom (A-Z)</option>
                              <option value=\"name-desc\" ";
        // line 731
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 731, $this->source); })()) == "name") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 731, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">Nom (Z-A)</option>
                              <option value=\"capacite-asc\" ";
        // line 732
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 732, $this->source); })()) == "capacite") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 732, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Capacité (croissant)</option>
                              <option value=\"capacite-desc\" ";
        // line 733
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 733, $this->source); })()) == "capacite") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 733, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">Capacité (décroissant)</option>
                            </select>
                          </div>
                        </div>
                        <div class=\"row mt-3\">
                          <div class=\"col-md-12 d-flex align-items-center\">
                            <button id=\"applyFilters\" class=\"btn btn-gradient-primary btn-lg text-white me-3 px-4 shadow\">
                              <i class=\"mdi mdi-filter me-2\"></i>FILTRER
                            </button>
                            <button id=\"resetFilters\" class=\"btn btn-outline-secondary btn-lg px-4\">
                              <i class=\"mdi mdi-refresh me-2\"></i>Réinitialiser
                            </button>
                            <span class=\"text-muted ms-auto\" id=\"resultCount\" style=\"font-size: 1.1em; font-weight: 500;\">
                              <i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: ";
        // line 746
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 746, $this->source); })())), "html", null, true);
        yield "
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    ";
        // line 753
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 753, $this->source); })()))) {
            // line 754
            yield "                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-office-building\"></i>
                        <h4 class=\"text-muted\">Aucune salle trouvée</h4>
                        <p class=\"text-muted mb-4\">Essayez de modifier vos filtres ou ajoutez une nouvelle salle</p>
                        <a href=\"";
            // line 758
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_new");
            yield "\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Ajouter une salle
                        </a>
                      </div>
                    ";
        } else {
            // line 764
            yield "                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"sallesTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Salle</th>
                              <th>Bloc</th>
                              <th>Étage</th>
                              <th>Capacité</th>
                              <th>Disponibilité</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            ";
            // line 778
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 778, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 779
                yield "                              <tr>
                                <td>";
                // line 780
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "id", [], "any", false, false, false, 780), "html", null, true);
                yield "</td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"room-icon me-3\">
                                      <i class=\"mdi mdi-door-closed\"></i>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">Salle ";
                // line 787
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "name", [], "any", false, false, false, 787), "html", null, true);
                yield "</h6>
                                      <small class=\"text-muted\">ID: ";
                // line 788
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "id", [], "any", false, false, false, 788), "html", null, true);
                yield "</small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <span class=\"block-badge badge-block-";
                // line 793
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "block", [], "any", false, false, false, 793)), "html", null, true);
                yield " text-white\">
                                    <i class=\"mdi mdi-domain me-1\"></i> Block ";
                // line 794
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "block", [], "any", false, false, false, 794), "html", null, true);
                yield "
                                  </span>
                                </td>
                                <td>
                                  <span class=\"badge badge-outline-primary\">
                                    Étage ";
                // line 799
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "etage", [], "any", false, false, false, 799), "html", null, true);
                yield "
                                  </span>
                                </td>
                                <td>
                                   ";
                // line 803
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "capacite", [], "any", false, false, false, 803)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 804
                    yield "                                    <span class=\"badge badge-info\">
                                        <i class=\"mdi mdi-account-group me-1\"></i> ";
                    // line 805
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "capacite", [], "any", false, false, false, 805), "html", null, true);
                    yield "
                                    </span>
                                   ";
                } else {
                    // line 808
                    yield "                                    <span class=\"text-muted\">-</span>
                                   ";
                }
                // line 810
                yield "                                </td>
                                <td>
                                  ";
                // line 812
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "disponibilite", [], "any", false, false, false, 812)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 813
                    yield "                                    <span class=\"badge badge-success\">
                                      <i class=\"mdi mdi-check-circle me-1\"></i> Disponible
                                    </span>
                                  ";
                } else {
                    // line 817
                    yield "                                    <span class=\"badge badge-danger\">
                                      <i class=\"mdi mdi-close-circle me-1\"></i> Occupé
                                    </span>
                                  ";
                }
                // line 821
                yield "                                </td>
                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"";
                // line 824
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "id", [], "any", false, false, false, 824)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-info btn-sm btn-icon\"
                                       title=\"Voir\">
                                      <i class=\"mdi mdi-eye\"></i>
                                    </a>
                                    <a href=\"";
                // line 829
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "id", [], "any", false, false, false, 829)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-warning btn-sm btn-icon\"
                                       title=\"Modifier\">
                                      <i class=\"mdi mdi-pencil\"></i>
                                    </a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                            data-salle-id=\"";
                // line 835
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "id", [], "any", false, false, false, 835), "html", null, true);
                yield "\" 
                                            data-salle-name=\"";
                // line 836
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "name", [], "any", false, false, false, 836), "html", null, true);
                yield "\"
                                            data-csrf-token=\"";
                // line 837
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["salle"], "id", [], "any", false, false, false, 837))), "html", null, true);
                yield "\"
                                            title=\"Supprimer\">
                                      <i class=\"mdi mdi-delete\"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['salle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 845
            yield "                          </tbody>
                        </table>
                      </div>
                    ";
        }
        // line 849
        yield "                  </div>
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
                    <p>Êtes-vous sûr de vouloir supprimer la salle <strong id=\"salleNameDisplay\"></strong> ?</p>
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
            
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('searchInput');
                const blockFilter = document.getElementById('blockFilter');
                const maxCapaciteInput = document.getElementById('maxCapaciteInput');
                const sortSelect = document.getElementById('sortSelect');
                const applyFiltersBtn = document.getElementById('applyFilters');
                const resetFiltersBtn = document.getElementById('resetFilters');
                const resultCountSpan = document.getElementById('resultCount');
                const sallesTable = document.getElementById('sallesTable');

                function applyFilters() {
                    const search = searchInput ? searchInput.value.trim() : '';
                    const block = blockFilter ? blockFilter.value : '';
                    const maxCapacite = maxCapaciteInput ? maxCapaciteInput.value : '';
                    const [sort, direction] = sortSelect ? sortSelect.value.split('-') : ['id', 'asc'];

                    const params = new URLSearchParams();
                    if (search) params.append('search', search);
                    if (block) params.append('block', block);
                    if (maxCapacite) params.append('maxCapacite', maxCapacite);
                    if (sort) params.append('sort', sort);
                    if (direction) params.append('direction', direction);

                    // Show loading
                    if(applyFiltersBtn) {
                        applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-1\"></i>Chargement...';
                        applyFiltersBtn.disabled = true;
                    }
                    if(sallesTable) sallesTable.style.opacity = '0.5';

                    // Cancel previous request if any
                    if (window.__salleSearchController) {
                      try { window.__salleSearchController.abort(); } catch (e) {}
                    }
                    window.__salleSearchController = new AbortController();

                    fetch('";
        // line 923
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_ajax_filter");
        yield "?' + params.toString(), { signal: window.__salleSearchController.signal })
                      .then(response => response.json())
                      .then(data => {
                        if (data.success) {
                          updateTable(data.data);
                          if(resultCountSpan) resultCountSpan.innerHTML = '<i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: ' + data.count;
                        }
                      })
                      .catch(error => {
                        if (error.name === 'AbortError') return;
                        console.error('Error:', error);
                      })
                      .finally(() => {
                         if(applyFiltersBtn) {
                          applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-filter me-2\"></i>FILTRER';
                          applyFiltersBtn.disabled = false;
                        }
                        if(sallesTable) sallesTable.style.opacity = '1';
                      });
                }

                function updateTable(data) {
                    const tbody = sallesTable.querySelector('tbody');
                    if(!tbody) return;
                    tbody.innerHTML = '';

                    if (data.length === 0) {
                        tbody.innerHTML = '<tr><td colspan=\"7\" class=\"text-center text-muted py-5\"><i class=\"mdi mdi-office-building display-4 mb-3 d-block\"></i><h4>Aucune salle trouvée</h4></td></tr>';
                        return;
                    }

                    data.forEach(salle => {
                        const blockBadgeClass = 'badge-block-' + salle.block.toLowerCase();
                        
                        const row = `
                            <tr>
                                <td>\${salle.id}</td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"room-icon me-3\">
                                      <i class=\"mdi mdi-door-closed\"></i>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">Salle \${salle.name}</h6>
                                      <small class=\"text-muted\">ID: \${salle.id}</small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <span class=\"block-badge \${blockBadgeClass} text-white\">
                                    <i class=\"mdi mdi-domain me-1\"></i> Block \${salle.block}
                                  </span>
                                </td>
                                <td>
                                  <span class=\"badge badge-outline-primary\">
                                    Étage \${salle.etage}
                                  </span>
                                </td>
                                <td>
                                   \${ salle.capacite ? 
                                    '<span class=\"badge badge-info\"><i class=\"mdi mdi-account-group me-1\"></i> ' + salle.capacite + '</span>' 
                                    : '<span class=\"text-muted\">-</span>' }
                                </td>
                                <td>
                                  \${ salle.disponibilite ? 
                                    '<span class=\"badge badge-success\"><i class=\"mdi mdi-check-circle me-1\"></i> Disponible</span>' : 
                                    '<span class=\"badge badge-danger\"><i class=\"mdi mdi-close-circle me-1\"></i> Occupé</span>' }
                                </td>
                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"\${salle.url}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\"><i class=\"mdi mdi-eye\"></i></a>
                                    <a href=\"\${salle.editUrl}\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\"><i class=\"mdi mdi-pencil\"></i></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                            data-salle-id=\"\${salle.id}\" 
                                            data-salle-name=\"\${salle.name}\"
                                            data-csrf-token=\"\${salle.csrfToken}\"
                                            title=\"Supprimer\">
                                      <i class=\"mdi mdi-delete\"></i>
                                    </button>
                                  </div>
                                </td>
                            </tr>
                        `;
                        tbody.innerHTML += row;
                    });
                    
                    attachDeleteHandlers();
                }

                function attachDeleteHandlers() {
                    document.querySelectorAll('.delete-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            const id = this.getAttribute('data-salle-id');
                            const name = this.getAttribute('data-salle-name');
                            const token = this.getAttribute('data-csrf-token');
                            
                            document.getElementById('salleNameDisplay').textContent = name;
                            document.getElementById('deleteForm').action = '/salle/' + id;
                            document.getElementById('csrfToken').value = token;
                            
                            new bootstrap.Modal(document.getElementById('deleteModal')).show();
                        });
                    });
                }
                
                // Init
                attachDeleteHandlers();
                
                if(applyFiltersBtn) applyFiltersBtn.addEventListener('click', applyFilters);
                // Debounced live search with cancellation
                function scheduleApplyFromInput(value) {
                  clearTimeout(window.__salleSearchTimeout);
                  window.__salleSearchTimeout = setTimeout(() => { if (searchInput) searchInput.value = value; applyFilters(); }, 350);
                }
                if(searchInput) {
                  searchInput.addEventListener('input', function() {
                     scheduleApplyFromInput(this.value);
                  });
                }
                if(blockFilter) blockFilter.addEventListener('change', applyFilters);
                if(maxCapaciteInput) maxCapaciteInput.addEventListener('change', applyFilters);
                if(sortSelect) sortSelect.addEventListener('change', applyFilters);
                
                if(resetFiltersBtn) {
                    resetFiltersBtn.addEventListener('click', function() {
                        window.location.href = '";
        // line 1048
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "';
                    });
                }
            });
            </script>
          </div>
        </div>
      </div>
    </div>
          
            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 1062
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Gestion des Salles - ";
        // line 1065
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 1065, $this->source); })())), "html", null, true);
        yield " salle";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 1065, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                  ";
        // line 1066
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1066, $this->source); })()), "user", [], "any", false, false, false, 1066)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1067
            yield "                    | Connecté: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1067, $this->source); })()), "user", [], "any", false, false, false, 1067), "prenom", [], "any", false, false, false, 1067), 0, 10), "html", null, true);
            yield "...
                  ";
        }
        // line 1069
        yield "                </span>
              </div>
            </footer>
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
        return "salle/index.html.twig";
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
        return array (  1501 => 1069,  1495 => 1067,  1493 => 1066,  1487 => 1065,  1481 => 1062,  1464 => 1048,  1336 => 923,  1260 => 849,  1254 => 845,  1240 => 837,  1236 => 836,  1232 => 835,  1223 => 829,  1215 => 824,  1210 => 821,  1204 => 817,  1198 => 813,  1196 => 812,  1192 => 810,  1188 => 808,  1182 => 805,  1179 => 804,  1177 => 803,  1170 => 799,  1162 => 794,  1158 => 793,  1150 => 788,  1146 => 787,  1136 => 780,  1133 => 779,  1129 => 778,  1113 => 764,  1104 => 758,  1098 => 754,  1096 => 753,  1086 => 746,  1068 => 733,  1062 => 732,  1056 => 731,  1050 => 730,  1044 => 729,  1038 => 728,  1029 => 722,  1022 => 717,  1013 => 714,  1004 => 713,  1000 => 712,  991 => 706,  974 => 692,  947 => 669,  945 => 668,  921 => 648,  919 => 647,  895 => 627,  893 => 626,  870 => 606,  856 => 594,  851 => 591,  847 => 589,  845 => 588,  841 => 587,  835 => 586,  830 => 583,  828 => 582,  808 => 564,  802 => 563,  792 => 559,  788 => 558,  783 => 557,  778 => 556,  773 => 555,  750 => 535,  735 => 523,  721 => 513,  719 => 512,  715 => 510,  710 => 507,  706 => 505,  702 => 503,  698 => 501,  696 => 500,  691 => 498,  684 => 497,  682 => 496,  675 => 491,  668 => 488,  662 => 484,  658 => 482,  654 => 480,  652 => 479,  644 => 476,  640 => 474,  633 => 471,  630 => 470,  624 => 467,  619 => 466,  617 => 465,  614 => 464,  612 => 463,  570 => 424,  552 => 409,  519 => 379,  486 => 349,  461 => 326,  450 => 318,  447 => 317,  436 => 309,  433 => 308,  431 => 307,  410 => 288,  405 => 285,  401 => 283,  397 => 281,  393 => 279,  391 => 278,  386 => 276,  379 => 275,  377 => 274,  372 => 271,  366 => 269,  363 => 268,  356 => 265,  353 => 264,  347 => 261,  342 => 260,  339 => 259,  337 => 258,  326 => 250,  322 => 249,  317 => 247,  313 => 246,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Salles</title>
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
                      <i class=\"mdi mdi-office-building\"></i>
                    </span> 
                    Gestion des Salles
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste complète des salles ESPRIT
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
                          <h3 class=\"mb-0 stat-count\">{{ salles|length }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+8%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-office-building\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Salles</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set blockA = salles|filter(s => s.block == 'A')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ blockA }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+2%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-alpha-a-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Bloc A</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set blockB = salles|filter(s => s.block == 'B')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ blockB }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+3%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-alpha-b-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Bloc B</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set otherBlocks = salles|filter(s => s.block not in ['A', 'B'])|length %}
                          <h3 class=\"mb-0 stat-count\">{{ otherBlocks }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+5%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-domain\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Autres Blocs</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Salles Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">🏢 Liste des Salles</h4>
                      <a href=\"{{ path('app_salle_new') }}\" class=\"btn btn-gradient-primary btn-icon-text\">
                        <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                        Ajouter une salle
                      </a>
                    </div>

                    <!-- Filters Panel -->
                    <div class=\"card mb-3\" style=\"background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: none; border-radius: 10px;\">
                      <div class=\"card-body\">
                        <h4 class=\"card-title mb-4 text-primary\"><i class=\"mdi mdi-filter-variant me-2\"></i>Filtrer et Rechercher</h4>
                        <div class=\"row g-3\">
                          <div class=\"col-md-3\">
                            <label class=\"fw-bold mb-1\">Recherche</label>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-lg border-primary\" 
                                   placeholder=\"🔍 Nom de salle...\" value=\"{{ search }}\" style=\"border-width: 2px;\">
                          </div>
                          <div class=\"col-md-3\">
                            <label class=\"fw-bold mb-1\">Bloc</label>
                            <select id=\"blockFilter\" class=\"form-control form-control-lg border-secondary\" style=\"cursor: pointer;\">
                              <option value=\"\">-- Tous les blocs --</option>
                              {% for b in blocks %}
                                <option value=\"{{ b.block }}\" {% if b.block == blockFilter %}selected{% endif %}>
                                  Bloc {{ b.block }}
                                </option>
                              {% endfor %}
                            </select>
                          </div>
                          <!-- Optional: Capacity Filters if needed, can add later -->
                          <div class=\"col-md-3\">
                            <label class=\"fw-bold mb-1\">Capacité Max</label>
                             <input type=\"number\" id=\"maxCapaciteInput\" class=\"form-control form-control-lg border-secondary\" placeholder=\"Ex: 50\" value=\"{{ maxCapacite }}\">
                          </div>

                          <div class=\"col-md-3\">
                            <label class=\"fw-bold mb-1\">Trier par</label>
                            <select id=\"sortSelect\" class=\"form-control form-control-lg border-secondary\" style=\"cursor: pointer;\">
                              <option value=\"id-asc\" {% if sort == 'id' and direction == 'asc' %}selected{% endif %}>ID (croissant)</option>
                              <option value=\"id-desc\" {% if sort == 'id' and direction == 'desc' %}selected{% endif %}>ID (décroissant)</option>
                              <option value=\"name-asc\" {% if sort == 'name' and direction == 'asc' %}selected{% endif %}>Nom (A-Z)</option>
                              <option value=\"name-desc\" {% if sort == 'name' and direction == 'desc' %}selected{% endif %}>Nom (Z-A)</option>
                              <option value=\"capacite-asc\" {% if sort == 'capacite' and direction == 'asc' %}selected{% endif %}>Capacité (croissant)</option>
                              <option value=\"capacite-desc\" {% if sort == 'capacite' and direction == 'desc' %}selected{% endif %}>Capacité (décroissant)</option>
                            </select>
                          </div>
                        </div>
                        <div class=\"row mt-3\">
                          <div class=\"col-md-12 d-flex align-items-center\">
                            <button id=\"applyFilters\" class=\"btn btn-gradient-primary btn-lg text-white me-3 px-4 shadow\">
                              <i class=\"mdi mdi-filter me-2\"></i>FILTRER
                            </button>
                            <button id=\"resetFilters\" class=\"btn btn-outline-secondary btn-lg px-4\">
                              <i class=\"mdi mdi-refresh me-2\"></i>Réinitialiser
                            </button>
                            <span class=\"text-muted ms-auto\" id=\"resultCount\" style=\"font-size: 1.1em; font-weight: 500;\">
                              <i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: {{ salles|length }}
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    {% if salles is empty %}
                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-office-building\"></i>
                        <h4 class=\"text-muted\">Aucune salle trouvée</h4>
                        <p class=\"text-muted mb-4\">Essayez de modifier vos filtres ou ajoutez une nouvelle salle</p>
                        <a href=\"{{ path('app_salle_new') }}\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Ajouter une salle
                        </a>
                      </div>
                    {% else %}
                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"sallesTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Salle</th>
                              <th>Bloc</th>
                              <th>Étage</th>
                              <th>Capacité</th>
                              <th>Disponibilité</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            {% for salle in salles %}
                              <tr>
                                <td>{{ salle.id }}</td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"room-icon me-3\">
                                      <i class=\"mdi mdi-door-closed\"></i>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">Salle {{ salle.name }}</h6>
                                      <small class=\"text-muted\">ID: {{ salle.id }}</small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <span class=\"block-badge badge-block-{{ salle.block|lower }} text-white\">
                                    <i class=\"mdi mdi-domain me-1\"></i> Block {{ salle.block }}
                                  </span>
                                </td>
                                <td>
                                  <span class=\"badge badge-outline-primary\">
                                    Étage {{ salle.etage }}
                                  </span>
                                </td>
                                <td>
                                   {% if salle.capacite %}
                                    <span class=\"badge badge-info\">
                                        <i class=\"mdi mdi-account-group me-1\"></i> {{ salle.capacite }}
                                    </span>
                                   {% else %}
                                    <span class=\"text-muted\">-</span>
                                   {% endif %}
                                </td>
                                <td>
                                  {% if salle.disponibilite %}
                                    <span class=\"badge badge-success\">
                                      <i class=\"mdi mdi-check-circle me-1\"></i> Disponible
                                    </span>
                                  {% else %}
                                    <span class=\"badge badge-danger\">
                                      <i class=\"mdi mdi-close-circle me-1\"></i> Occupé
                                    </span>
                                  {% endif %}
                                </td>
                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"{{ path('app_salle_show', { id: salle.id }) }}\" 
                                       class=\"btn btn-info btn-sm btn-icon\"
                                       title=\"Voir\">
                                      <i class=\"mdi mdi-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_salle_edit', { id: salle.id }) }}\" 
                                       class=\"btn btn-warning btn-sm btn-icon\"
                                       title=\"Modifier\">
                                      <i class=\"mdi mdi-pencil\"></i>
                                    </a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                            data-salle-id=\"{{ salle.id }}\" 
                                            data-salle-name=\"{{ salle.name }}\"
                                            data-csrf-token=\"{{ csrf_token('delete' ~ salle.id) }}\"
                                            title=\"Supprimer\">
                                      <i class=\"mdi mdi-delete\"></i>
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
                    <p>Êtes-vous sûr de vouloir supprimer la salle <strong id=\"salleNameDisplay\"></strong> ?</p>
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
            
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('searchInput');
                const blockFilter = document.getElementById('blockFilter');
                const maxCapaciteInput = document.getElementById('maxCapaciteInput');
                const sortSelect = document.getElementById('sortSelect');
                const applyFiltersBtn = document.getElementById('applyFilters');
                const resetFiltersBtn = document.getElementById('resetFilters');
                const resultCountSpan = document.getElementById('resultCount');
                const sallesTable = document.getElementById('sallesTable');

                function applyFilters() {
                    const search = searchInput ? searchInput.value.trim() : '';
                    const block = blockFilter ? blockFilter.value : '';
                    const maxCapacite = maxCapaciteInput ? maxCapaciteInput.value : '';
                    const [sort, direction] = sortSelect ? sortSelect.value.split('-') : ['id', 'asc'];

                    const params = new URLSearchParams();
                    if (search) params.append('search', search);
                    if (block) params.append('block', block);
                    if (maxCapacite) params.append('maxCapacite', maxCapacite);
                    if (sort) params.append('sort', sort);
                    if (direction) params.append('direction', direction);

                    // Show loading
                    if(applyFiltersBtn) {
                        applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-1\"></i>Chargement...';
                        applyFiltersBtn.disabled = true;
                    }
                    if(sallesTable) sallesTable.style.opacity = '0.5';

                    // Cancel previous request if any
                    if (window.__salleSearchController) {
                      try { window.__salleSearchController.abort(); } catch (e) {}
                    }
                    window.__salleSearchController = new AbortController();

                    fetch('{{ path(\"app_salle_ajax_filter\") }}?' + params.toString(), { signal: window.__salleSearchController.signal })
                      .then(response => response.json())
                      .then(data => {
                        if (data.success) {
                          updateTable(data.data);
                          if(resultCountSpan) resultCountSpan.innerHTML = '<i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: ' + data.count;
                        }
                      })
                      .catch(error => {
                        if (error.name === 'AbortError') return;
                        console.error('Error:', error);
                      })
                      .finally(() => {
                         if(applyFiltersBtn) {
                          applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-filter me-2\"></i>FILTRER';
                          applyFiltersBtn.disabled = false;
                        }
                        if(sallesTable) sallesTable.style.opacity = '1';
                      });
                }

                function updateTable(data) {
                    const tbody = sallesTable.querySelector('tbody');
                    if(!tbody) return;
                    tbody.innerHTML = '';

                    if (data.length === 0) {
                        tbody.innerHTML = '<tr><td colspan=\"7\" class=\"text-center text-muted py-5\"><i class=\"mdi mdi-office-building display-4 mb-3 d-block\"></i><h4>Aucune salle trouvée</h4></td></tr>';
                        return;
                    }

                    data.forEach(salle => {
                        const blockBadgeClass = 'badge-block-' + salle.block.toLowerCase();
                        
                        const row = `
                            <tr>
                                <td>\${salle.id}</td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"room-icon me-3\">
                                      <i class=\"mdi mdi-door-closed\"></i>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">Salle \${salle.name}</h6>
                                      <small class=\"text-muted\">ID: \${salle.id}</small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <span class=\"block-badge \${blockBadgeClass} text-white\">
                                    <i class=\"mdi mdi-domain me-1\"></i> Block \${salle.block}
                                  </span>
                                </td>
                                <td>
                                  <span class=\"badge badge-outline-primary\">
                                    Étage \${salle.etage}
                                  </span>
                                </td>
                                <td>
                                   \${ salle.capacite ? 
                                    '<span class=\"badge badge-info\"><i class=\"mdi mdi-account-group me-1\"></i> ' + salle.capacite + '</span>' 
                                    : '<span class=\"text-muted\">-</span>' }
                                </td>
                                <td>
                                  \${ salle.disponibilite ? 
                                    '<span class=\"badge badge-success\"><i class=\"mdi mdi-check-circle me-1\"></i> Disponible</span>' : 
                                    '<span class=\"badge badge-danger\"><i class=\"mdi mdi-close-circle me-1\"></i> Occupé</span>' }
                                </td>
                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"\${salle.url}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\"><i class=\"mdi mdi-eye\"></i></a>
                                    <a href=\"\${salle.editUrl}\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\"><i class=\"mdi mdi-pencil\"></i></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                            data-salle-id=\"\${salle.id}\" 
                                            data-salle-name=\"\${salle.name}\"
                                            data-csrf-token=\"\${salle.csrfToken}\"
                                            title=\"Supprimer\">
                                      <i class=\"mdi mdi-delete\"></i>
                                    </button>
                                  </div>
                                </td>
                            </tr>
                        `;
                        tbody.innerHTML += row;
                    });
                    
                    attachDeleteHandlers();
                }

                function attachDeleteHandlers() {
                    document.querySelectorAll('.delete-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            const id = this.getAttribute('data-salle-id');
                            const name = this.getAttribute('data-salle-name');
                            const token = this.getAttribute('data-csrf-token');
                            
                            document.getElementById('salleNameDisplay').textContent = name;
                            document.getElementById('deleteForm').action = '/salle/' + id;
                            document.getElementById('csrfToken').value = token;
                            
                            new bootstrap.Modal(document.getElementById('deleteModal')).show();
                        });
                    });
                }
                
                // Init
                attachDeleteHandlers();
                
                if(applyFiltersBtn) applyFiltersBtn.addEventListener('click', applyFilters);
                // Debounced live search with cancellation
                function scheduleApplyFromInput(value) {
                  clearTimeout(window.__salleSearchTimeout);
                  window.__salleSearchTimeout = setTimeout(() => { if (searchInput) searchInput.value = value; applyFilters(); }, 350);
                }
                if(searchInput) {
                  searchInput.addEventListener('input', function() {
                     scheduleApplyFromInput(this.value);
                  });
                }
                if(blockFilter) blockFilter.addEventListener('change', applyFilters);
                if(maxCapaciteInput) maxCapaciteInput.addEventListener('change', applyFilters);
                if(sortSelect) sortSelect.addEventListener('change', applyFilters);
                
                if(resetFiltersBtn) {
                    resetFiltersBtn.addEventListener('click', function() {
                        window.location.href = '{{ path(\"app_salle_index\") }}';
                    });
                }
            });
            </script>
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
                  Gestion des Salles - {{ salles|length }} salle{{ salles|length > 1 ? 's' : '' }}
                  {% if app.user %}
                    | Connecté: {{ app.user.prenom|slice(0, 10) }}...
                  {% endif %}
                </span>
              </div>
            </footer>
  </body>
</html>", "salle/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\salle\\index.html.twig");
    }
}
