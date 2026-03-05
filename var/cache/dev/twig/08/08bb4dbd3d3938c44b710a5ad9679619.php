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

/* groupe_projet/index.html.twig */
class __TwigTemplate_ab0d9d03a17969d33e9d63104c727362 extends Template
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
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_projet/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_projet/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Groupes Projet</title>
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
      
      .group-avatar {
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
      
      /* Style pour les avatars de la navbar */
      .navbar-avatar-img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      }
      
      .navbar-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 14px;
        flex-shrink: 0;
      }
      
      .badge-active {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
        border: none;
      }
      
      .badge-inactive {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        border: none;
      }
      
      .badge-completed {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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

";
        // line 162
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 163
        yield "
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
      
      .description-cell {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowarp;
      }
      
      /* Style pour mieux aligner le contenu de la navbar */
      .navbar-profile-name {
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 234
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
        // line 242
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "user", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 243
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "user", [], "any", false, false, false, 243), "profilePic", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 244
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "user", [], "any", false, false, false, 244), "profilePic", [], "any", false, false, false, 244))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 245
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "user", [], "any", false, false, false, 245), "prenom", [], "any", false, false, false, 245), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 248
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 249
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "user", [], "any", false, false, false, 249), "prenom", [], "any", false, false, false, 249))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "user", [], "any", false, false, false, 249), "nom", [], "any", false, false, false, 249))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 252
            yield "                  ";
        } else {
            // line 253
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 255
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 258
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 258, $this->source); })()), "user", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 259
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "user", [], "any", false, false, false, 259), "prenom", [], "any", false, false, false, 259), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "user", [], "any", false, false, false, 259), "nom", [], "any", false, false, false, 259), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "user", [], "any", false, false, false, 260), "email", [], "any", false, false, false, 260), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 262
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 262, $this->source); })()), "user", [], "any", false, false, false, 262), "roles", [], "any", false, false, false, 262))) {
                // line 263
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 265
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 267
            yield "                    </div>
                  ";
        } else {
            // line 269
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 272
        yield "                </div>
              </div>
            </div>
          </li>
          <li class=\"nav-item nav-category\">
            <span class=\"nav-link\">Navigation</span>
          </li>
          
          <!-- Dashboard -->
          <li class=\"nav-item menu-items \">
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
        // line 292
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
            <a class=\"nav-link\" href=\"";
        // line 302
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 312
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-school\"></i>
              </span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <!-- Salles -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 322
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
            <a class=\"nav-link\" href=\"";
        // line 332
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-calendar-clock\"></i>
              </span>
              <span class=\"menu-title\">Séances</span>
            </a>
          </li>
          
          <!-- Groupes - ACTIVE -->
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 342
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-multiple\"></i>
              </span>
              <span class=\"menu-title\">Groupes</span>
            </a>
          </li>
          
          <!-- Tâches -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 352
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
            <a class=\"nav-link\" href=\"";
        // line 372
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
        // line 382
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
        // line 397
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un groupe...\" id=\"navbarSearchInput\">
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
                        <i class=\"mdi mdi-account-multiple\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouveau groupe</p>
                      <p class=\"text-muted ellipsis mb-0\"> Groupe ";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["groupe_projets"] ?? null), 0, [], "array", false, true, false, 427), "nomProjet", [], "any", true, true, false, 427)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 427, $this->source); })()), 0, [], "array", false, false, false, 427), "nomProjet", [], "any", false, false, false, 427), "Nouveau")) : ("Nouveau")), "html", null, true);
        yield " créé</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 436
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 436, $this->source); })()), "user", [], "any", false, false, false, 436)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 437
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 438
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 438, $this->source); })()), "user", [], "any", false, false, false, 438), "profilePic", [], "any", false, false, false, 438)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 439
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 439, $this->source); })()), "user", [], "any", false, false, false, 439), "profilePic", [], "any", false, false, false, 439))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 440
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 440, $this->source); })()), "user", [], "any", false, false, false, 440), "prenom", [], "any", false, false, false, 440), "html", null, true);
                yield "\" 
                               class=\"navbar-avatar-img\">
                        ";
            } else {
                // line 443
                yield "                          <div class=\"navbar-avatar\">
                            ";
                // line 444
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 444, $this->source); })()), "user", [], "any", false, false, false, 444), "prenom", [], "any", false, false, false, 444))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 444, $this->source); })()), "user", [], "any", false, false, false, 444), "nom", [], "any", false, false, false, 444))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 447
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "prenom", [], "any", false, false, false, 449), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "nom", [], "any", false, false, false, 449), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 452
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 452, $this->source); })()), "user", [], "any", false, false, false, 452), "roles", [], "any", false, false, false, 452))) {
                // line 453
                yield "                              <span class=\"badge badge-admin badge-sm\">Admin</span>
                            ";
            } else {
                // line 455
                yield "                              <span class=\"badge badge-etudiant badge-sm\">Utilisateur</span>
                            ";
            }
            // line 457
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 461
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 464
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 469
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 469, $this->source); })()), "user", [], "any", false, false, false, 469)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 470
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 470, $this->source); })()), "user", [], "any", false, false, false, 470), "prenom", [], "any", false, false, false, 470), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 470, $this->source); })()), "user", [], "any", false, false, false, 470), "nom", [], "any", false, false, false, 470), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "user", [], "any", false, false, false, 471), "email", [], "any", false, false, false, 471), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 473
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 473, $this->source); })()), "user", [], "any", false, false, false, 473), "roles", [], "any", false, false, false, 473))) {
                // line 474
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 476
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 478
            yield "                      </small>
                    ";
        } else {
            // line 480
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 483
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 485
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 485, $this->source); })()), "user", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 486
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 486, $this->source); })()), "user", [], "any", false, false, false, 486), "id", [], "any", false, false, false, 486)]), "html", null, true);
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
            // line 496
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 496, $this->source); })()), "user", [], "any", false, false, false, 496), "id", [], "any", false, false, false, 496)]), "html", null, true);
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
        // line 508
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
        // line 528
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 528, $this->source); })()), "flashes", [], "any", false, false, false, 528));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 529
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 530
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 531
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 532
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 536
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account-multiple\"></i>
                    </span> 
                    Gestion des Groupes Projet
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste complète des groupes projet ESPRIT
                      </li>
                    </ul>
                  </nav>
                  ";
        // line 555
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "user", [], "any", false, false, false, 555)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 556
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 559
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 559, $this->source); })()), "user", [], "any", false, false, false, 559), "prenom", [], "any", false, false, false, 559), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 559, $this->source); })()), "user", [], "any", false, false, false, 559), "nom", [], "any", false, false, false, 559), "html", null, true);
            yield "</strong>
                        (";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 560, $this->source); })()), "user", [], "any", false, false, false, 560), "email", [], "any", false, false, false, 560), "html", null, true);
            yield ")
                        ";
            // line 561
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 561, $this->source); })()), "user", [], "any", false, false, false, 561), "roles", [], "any", false, false, false, 561))) {
                // line 562
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 564
            yield "                      </small>
                    </div>
                  ";
        }
        // line 567
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
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 579, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 580, $this->source); })())) * 2), "html", null, true);
        yield "%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-account-multiple\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Groupes</h6>
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
        // line 599
        $context["activeGroups"] = 0;
        // line 600
        yield "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 600, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 601
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "statut", [], "any", false, false, false, 601) == "Actif")) {
                // line 602
                yield "                              ";
                $context["activeGroups"] = ((isset($context["activeGroups"]) || array_key_exists("activeGroups", $context) ? $context["activeGroups"] : (function () { throw new RuntimeError('Variable "activeGroups" does not exist.', 602, $this->source); })()) + 1);
                // line 603
                yield "                            ";
            }
            // line 604
            yield "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeGroups"]) || array_key_exists("activeGroups", $context) ? $context["activeGroups"] : (function () { throw new RuntimeError('Variable "activeGroups" does not exist.', 605, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+15%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-check-circle\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Groupes Actifs</h6>
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
        // line 625
        $context["totalMembers"] = 0;
        // line 626
        yield "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 626, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 627
            yield "                            ";
            $context["totalMembers"] = ((isset($context["totalMembers"]) || array_key_exists("totalMembers", $context) ? $context["totalMembers"] : (function () { throw new RuntimeError('Variable "totalMembers" does not exist.', 627, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "nbrMembre", [], "any", false, false, false, 627));
            // line 628
            yield "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 629
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMembers"]) || array_key_exists("totalMembers", $context) ? $context["totalMembers"] : (function () { throw new RuntimeError('Variable "totalMembers" does not exist.', 629, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+25%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-account\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Membres</h6>
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
        // line 650
        yield "                          ";
        $context["matieresUniques"] = [];
        // line 651
        yield "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 651, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 652
            yield "                            ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "matiere", [], "any", false, false, false, 652), (isset($context["matieresUniques"]) || array_key_exists("matieresUniques", $context) ? $context["matieresUniques"] : (function () { throw new RuntimeError('Variable "matieresUniques" does not exist.', 652, $this->source); })()))) {
                // line 653
                yield "                              ";
                $context["matieresUniques"] = Twig\Extension\CoreExtension::merge((isset($context["matieresUniques"]) || array_key_exists("matieresUniques", $context) ? $context["matieresUniques"] : (function () { throw new RuntimeError('Variable "matieresUniques" does not exist.', 653, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "matiere", [], "any", false, false, false, 653)]);
                // line 654
                yield "                            ";
            }
            // line 655
            yield "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 656
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matieresUniques"]) || array_key_exists("matieresUniques", $context) ? $context["matieresUniques"] : (function () { throw new RuntimeError('Variable "matieresUniques" does not exist.', 656, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+8%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-book-open\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Matières couvertes</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Filter Panel -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4 text-primary\"><i class=\"mdi mdi-filter-variant me-2\"></i>Filtrer et Rechercher</h4>
                    <div class=\"row g-3\">
                      <!-- Search -->
                      <div class=\"col-md-4\">
                        <label class=\"fw-bold mb-1\">Recherche</label>
                        <div class=\"search-box\">
                          <i class=\"mdi mdi-magnify search-icon\"></i>
                          <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-lg border-primary\" 
                                 placeholder=\"Nom, description...\" value=\"";
        // line 685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 685, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                      </div>
                      
                      <!-- Matiere -->
                      <div class=\"col-md-3\">
                        <label class=\"fw-bold mb-1\">Matière</label>
                        <input type=\"text\" id=\"matiereFilter\" class=\"form-control form-control-lg border-primary\" 
                               placeholder=\"Ex: Web, Mobile...\" value=\"";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 693, $this->source); })()), "html", null, true);
        yield "\">
                      </div>

                      <!-- Statut -->
                      <div class=\"col-md-3\">
                        <label class=\"fw-bold mb-1\">Statut</label>
                        <select id=\"statutFilter\" class=\"form-select form-select-lg border-primary\">
                          <option value=\"\">Tous les statuts</option>
                          <option value=\"Actif\" ";
        // line 701
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 701, $this->source); })()) == "Actif")) ? ("selected") : (""));
        yield ">Actif</option>
                          <option value=\"Terminé\" ";
        // line 702
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 702, $this->source); })()) == "Terminé")) ? ("selected") : (""));
        yield ">Terminé</option>
                          <option value=\"En attente\" ";
        // line 703
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 703, $this->source); })()) == "En attente")) ? ("selected") : (""));
        yield ">En attente</option>
                        </select>
                      </div>

                      <!-- Actions -->
                      <div class=\"col-md-2 d-flex align-items-end\">
                        <button id=\"applyFiltersBtn\" class=\"btn btn-primary btn-lg text-white me-2 w-100\">
                           <i class=\"mdi mdi-filter me-1\"></i>Filtrer
                        </button>
                        <button id=\"resetFiltersBtn\" class=\"btn btn-light btn-lg btn-icon\" title=\"Réinitialiser\">
                           <i class=\"mdi mdi-refresh\"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Groups Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card table-card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">👥 Liste des Groupes Projet</h4>
                      <div class=\"d-flex align-items-center\">
                         <div class=\"me-3\">
                            <select id=\"sortSelect\" class=\"form-select form-select-sm\">
                                <option value=\"id\" ";
        // line 732
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 732, $this->source); })()) == "id")) ? ("selected") : (""));
        yield ">Trier par ID</option>
                                <option value=\"nomProjet\" ";
        // line 733
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 733, $this->source); })()) == "nomProjet")) ? ("selected") : (""));
        yield ">Trier par Nom</option>
                                <option value=\"nbrMembre\" ";
        // line 734
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 734, $this->source); })()) == "nbrMembre")) ? ("selected") : (""));
        yield ">Trier par Membres</option>
                                <option value=\"CreatedAt\" ";
        // line 735
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 735, $this->source); })()) == "CreatedAt")) ? ("selected") : (""));
        yield ">Trier par Date</option>
                            </select>
                         </div>
                         <a href=\"";
        // line 738
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_new");
        yield "\" class=\"btn btn-gradient-primary btn-icon-text\">
                            <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                            Nouveau groupe
                         </a>
                      </div>
                    </div>

                    <div class=\"table-responsive\">
                      <table class=\"table table-hover\" id=\"groupesTable\">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Groupe</th>
                            <th>Matière</th>
                            <th>Membres</th>
                            <th>Description</th>
                            <th>Créé le</th>
                            <th>Statut</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 760
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 760, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_projet"]) {
            // line 761
            yield "                            <tr>
                              <td>";
            // line 762
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "id", [], "any", false, false, false, 762), "html", null, true);
            yield "</td>
                              <td>
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"group-avatar me-3\">GP";
            // line 765
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "id", [], "any", false, false, false, 765), "html", null, true);
            yield "</div>
                                  <div>
                                    <h6 class=\"mb-0 fw-bold\">";
            // line 767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "nomProjet", [], "any", false, false, false, 767), "html", null, true);
            yield "</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class=\"badge badge-info\">";
            // line 772
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "matiere", [], "any", false, false, false, 772), "html", null, true);
            yield "</span>
                              </td>
                              <td>
                                <div class=\"d-flex align-items-center\">
                                  <span class=\"badge badge-light me-2\">";
            // line 776
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "nbrMembre", [], "any", false, false, false, 776), "html", null, true);
            yield " membre(s)</span>
                                </div>
                              </td>
                              <td class=\"description-cell\">
                                <small class=\"text-muted\">";
            // line 780
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "description", [], "any", false, false, false, 780), 0, 50), "html", null, true);
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "description", [], "any", false, false, false, 780)) > 50)) ? ("...") : (""));
            yield "</small>
                              </td>
                              <td>
                                ";
            // line 783
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "CreatedAt", [], "any", false, false, false, 783)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "CreatedAt", [], "any", false, false, false, 783), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
                              </td>
                              <td>
                                ";
            // line 786
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "statut", [], "any", false, false, false, 786) == "Actif")) {
                // line 787
                yield "                                  <span class=\"badge badge-active\">Actif</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 788
$context["groupe_projet"], "statut", [], "any", false, false, false, 788) == "Terminé")) {
                // line 789
                yield "                                  <span class=\"badge badge-completed\">Terminé</span>
                                ";
            } else {
                // line 791
                yield "                                  <span class=\"badge badge-inactive\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "statut", [], "any", false, false, false, 791), "html", null, true);
                yield "</span>
                                ";
            }
            // line 793
            yield "                              </td>
                              <td>
                                <div class=\"action-buttons\">
                                  <a href=\"";
            // line 796
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "id", [], "any", false, false, false, 796)]), "html", null, true);
            yield "\" 
                                     class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\">
                                    <i class=\"mdi mdi-eye\"></i>
                                  </a>
                                  <a href=\"";
            // line 800
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "id", [], "any", false, false, false, 800)]), "html", null, true);
            yield "\" 
                                     class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\">
                                    <i class=\"mdi mdi-pencil\"></i>
                                  </a>
                                  <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                          data-id=\"";
            // line 805
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "id", [], "any", false, false, false, 805), "html", null, true);
            yield "\"
                                          data-name=\"";
            // line 806
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "nomProjet", [], "any", false, false, false, 806), "html", null, true);
            yield "\"
                                          data-token=\"";
            // line 807
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_projet"], "id", [], "any", false, false, false, 807))), "html", null, true);
            yield "\"
                                          title=\"Supprimer\">
                                    <i class=\"mdi mdi-delete\"></i>
                                  </button>
                                </div>
                              </td>
                            </tr>
                          ";
            $context['_iterated'] = true;
        }
        // line 814
        if (!$context['_iterated']) {
            // line 815
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center py-5\">
                                    <div class=\"empty-state\">
                                        <i class=\"mdi mdi-account-group-off display-1 text-muted mb-3\"></i>
                                        <h4>Aucun groupe trouvé</h4>
                                        <p class=\"text-muted\">Essayez de modifier vos filtres</p>
                                    </div>
                                </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_projet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 825
        yield "                        </tbody>
                      </table>
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
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Gestion des Groupes Projet - ";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 840, $this->source); })())), "html", null, true);
        yield " groupe";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["groupe_projets"]) || array_key_exists("groupe_projets", $context) ? $context["groupe_projets"] : (function () { throw new RuntimeError('Variable "groupe_projets" does not exist.', 840, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
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
            <p>Êtes-vous sûr de vouloir supprimer le groupe <strong id=\"deleteItemName\"></strong> ?</p>
            <p class=\"text-danger mb-0\"><small>Cette action est irréversible.</small></p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" id=\"csrfToken\" value=\"\">
                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 877
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const searchInput = document.getElementById('searchInput');
          const navbarSearchInput = document.getElementById('navbarSearchInput');
          const matiereFilter = document.getElementById('matiereFilter');
          const statutFilter = document.getElementById('statutFilter');
          const sortSelect = document.getElementById('sortSelect');
          const applyFiltersBtn = document.getElementById('applyFiltersBtn');
          const resetFiltersBtn = document.getElementById('resetFiltersBtn');
          const tableBody = document.querySelector('#groupesTable tbody');

          // Fetch Results Function
            async function fetchResults() {
              const params = new URLSearchParams({
                  search: searchInput.value,
                  matiere: matiereFilter.value,
                  statut: statutFilter.value,
                  sort: sortSelect.value,
                  direction: 'asc' // OR dynamic
              });

              // Add loading state
              tableBody.style.opacity = '0.5';

              try {
                // Cancel previous request
                if (window.__groupeSearchController) {
                  try { window.__groupeSearchController.abort(); } catch (e) {}
                }
                window.__groupeSearchController = new AbortController();

                const response = await fetch(`";
        // line 910
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_ajax_filter");
        yield "?\${params.toString()}`, { signal: window.__groupeSearchController.signal });
                const result = await response.json();

                if (result.success) {
                  updateTable(result.data);
                }
              } catch (error) {
                if (error.name === 'AbortError') return;
                console.error('Error:', error);
              } finally {
                  tableBody.style.opacity = '1';
              }
          }

          // Update Table Function
          function updateTable(data) {
              if (data.length === 0) {
                  tableBody.innerHTML = `
                      <tr>
                          <td colspan=\"8\" class=\"text-center py-5\">
                              <div class=\"empty-state\">
                                  <i class=\"mdi mdi-account-group-off display-1 text-muted mb-3\"></i>
                                  <h4>Aucun groupe trouvé</h4>
                              </div>
                          </td>
                      </tr>
                  `;
                  return;
              }

              tableBody.innerHTML = data.map(item => {
                  let statusBadge = '';
                  if (item.statut === 'Actif') statusBadge = '<span class=\"badge badge-active\">Actif</span>';
                  else if (item.statut === 'Terminé') statusBadge = '<span class=\"badge badge-completed\">Terminé</span>';
                  else statusBadge = `<span class=\"badge badge-inactive\">\${item.statut}</span>`;

                  return `
                      <tr>
                          <td>\${item.id}</td>
                          <td>
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"group-avatar me-3\">GP\${item.id}</div>
                                  <div>
                                      <h6 class=\"mb-0 fw-bold\">\${item.nomProjet}</h6>
                                  </div>
                              </div>
                          </td>
                          <td><span class=\"badge badge-info\">\${item.matiere}</span></td>
                          <td>
                              <span class=\"badge badge-light me-2\">\${item.nbrMembre} membre(s)</span>
                          </td>
                          <td class=\"description-cell\">
                              <small class=\"text-muted\">\${item.description ? (item.description.length > 50 ? item.description.substring(0, 50) + '...' : item.description) : ''}</small>
                          </td>
                          <td>\${item.createdAt}</td>
                          <td>\${statusBadge}</td>
                          <td>
                              <div class=\"action-buttons\">
                                  <a href=\"\${item.url}\" class=\"btn btn-info btn-sm btn-icon\"><i class=\"mdi mdi-eye\"></i></a>
                                  <a href=\"\${item.editUrl}\" class=\"btn btn-warning btn-sm btn-icon\"><i class=\"mdi mdi-pencil\"></i></a>
                                  <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                          data-id=\"\${item.id}\"
                                          data-name=\"\${item.nomProjet}\"
                                          data-token=\"\${item.csrfToken}\">
                                      <i class=\"mdi mdi-delete\"></i>
                                  </button>
                              </div>
                          </td>
                      </tr>
                  `;
              }).join('');
              
              attachDeleteHandlers();
          }

          // Delete Modal Handlers
          function attachDeleteHandlers() {
              document.querySelectorAll('.delete-btn').forEach(btn => {
                  btn.addEventListener('click', function() {
                      const id = this.dataset.id;
                      const name = this.dataset.name;
                      const token = this.dataset.token;
                      
                      document.getElementById('deleteItemName').textContent = name;
                      document.getElementById('deleteForm').action = `/groupe/projet/\${id}`;
                      document.getElementById('csrfToken').value = token;
                      
                      new bootstrap.Modal(document.getElementById('deleteModal')).show();
                  });
              });
          }

            // Initial Attach
          attachDeleteHandlers();

          // Event Listeners
            applyFiltersBtn.addEventListener('click', fetchResults);
            resetFiltersBtn.addEventListener('click', () => {
              searchInput.value = '';
              matiereFilter.value = '';
              statutFilter.value = '';
              fetchResults();
            });

            // Debounced live search and sync with navbar
            function scheduleFetch(value) {
              clearTimeout(window.__groupeSearchTimeout);
              window.__groupeSearchTimeout = setTimeout(() => { searchInput.value = value; fetchResults(); }, 350);
            }

            if (navbarSearchInput) {
              navbarSearchInput.addEventListener('input', function() { scheduleFetch(this.value); });
            }

            if (searchInput) {
              searchInput.addEventListener('input', function() { scheduleFetch(this.value); });
              searchInput.addEventListener('keyup', (e) => { if (e.key === 'Enter') fetchResults(); });
            }

            sortSelect.addEventListener('change', fetchResults);
      });
    </script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 162
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

        yield "GroupeProjet index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "groupe_projet/index.html.twig";
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
        return array (  1496 => 162,  1360 => 910,  1324 => 877,  1320 => 876,  1316 => 875,  1276 => 840,  1270 => 837,  1256 => 825,  1241 => 815,  1239 => 814,  1227 => 807,  1223 => 806,  1219 => 805,  1211 => 800,  1204 => 796,  1199 => 793,  1193 => 791,  1189 => 789,  1187 => 788,  1184 => 787,  1182 => 786,  1176 => 783,  1169 => 780,  1162 => 776,  1155 => 772,  1147 => 767,  1142 => 765,  1136 => 762,  1133 => 761,  1128 => 760,  1103 => 738,  1097 => 735,  1093 => 734,  1089 => 733,  1085 => 732,  1053 => 703,  1049 => 702,  1045 => 701,  1034 => 693,  1023 => 685,  990 => 656,  984 => 655,  981 => 654,  978 => 653,  975 => 652,  970 => 651,  967 => 650,  943 => 629,  937 => 628,  934 => 627,  929 => 626,  927 => 625,  903 => 605,  897 => 604,  894 => 603,  891 => 602,  888 => 601,  883 => 600,  881 => 599,  859 => 580,  855 => 579,  841 => 567,  836 => 564,  832 => 562,  830 => 561,  826 => 560,  820 => 559,  815 => 556,  813 => 555,  793 => 537,  787 => 536,  777 => 532,  773 => 531,  768 => 530,  763 => 529,  758 => 528,  735 => 508,  720 => 496,  706 => 486,  704 => 485,  700 => 483,  695 => 480,  691 => 478,  687 => 476,  683 => 474,  681 => 473,  676 => 471,  669 => 470,  667 => 469,  660 => 464,  653 => 461,  647 => 457,  643 => 455,  639 => 453,  637 => 452,  629 => 449,  625 => 447,  618 => 444,  615 => 443,  609 => 440,  604 => 439,  602 => 438,  599 => 437,  597 => 436,  585 => 427,  552 => 397,  534 => 382,  521 => 372,  498 => 352,  485 => 342,  472 => 332,  459 => 322,  446 => 312,  433 => 302,  420 => 292,  398 => 272,  393 => 269,  389 => 267,  385 => 265,  381 => 263,  379 => 262,  374 => 260,  367 => 259,  365 => 258,  360 => 255,  354 => 253,  351 => 252,  344 => 249,  341 => 248,  335 => 245,  330 => 244,  327 => 243,  325 => 242,  314 => 234,  310 => 233,  305 => 231,  301 => 230,  232 => 163,  230 => 162,  79 => 14,  75 => 13,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Groupes Projet</title>
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
      
      .group-avatar {
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
      
      /* Style pour les avatars de la navbar */
      .navbar-avatar-img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      }
      
      .navbar-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 14px;
        flex-shrink: 0;
      }
      
      .badge-active {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
        border: none;
      }
      
      .badge-inactive {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        border: none;
      }
      
      .badge-completed {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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

{% block title %}GroupeProjet index{% endblock %}

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
      
      .description-cell {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowarp;
      }
      
      /* Style pour mieux aligner le contenu de la navbar */
      .navbar-profile-name {
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"{{ path('app_groupe_projet_index') }}\">
            <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"{{ path('app_groupe_projet_index') }}\">
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
          <li class=\"nav-item menu-items \">
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
            <a class=\"nav-link\" href=\"{{ path('app_matiere_classe_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_classe_index') }}\">
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
            <a class=\"nav-link\" href=\"{{ path('app_seance_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-calendar-clock\"></i>
              </span>
              <span class=\"menu-title\">Séances</span>
            </a>
          </li>
          
          <!-- Groupes - ACTIVE -->
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"{{ path('app_groupe_projet_index') }}\">
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
            <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
          </div>
          <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <ul class=\"navbar-nav w-100\">
              <li class=\"nav-item w-100\">
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un groupe...\" id=\"navbarSearchInput\">
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
                        <i class=\"mdi mdi-account-multiple\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouveau groupe</p>
                      <p class=\"text-muted ellipsis mb-0\"> Groupe {{ groupe_projets[0].nomProjet|default('Nouveau') }} créé</p>
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
                               class=\"navbar-avatar-img\">
                        {% else %}
                          <div class=\"navbar-avatar\">
                            {{ app.user.prenom|first|upper }}{{ app.user.nom|first|upper }}
                          </div>
                        {% endif %}
                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            {{ app.user.prenom }} {{ app.user.nom }}
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            {% if 'ROLE_ADMIN' in app.user.roles %}
                              <span class=\"badge badge-admin badge-sm\">Admin</span>
                            {% else %}
                              <span class=\"badge badge-etudiant badge-sm\">Utilisateur</span>
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
                      <i class=\"mdi mdi-account-multiple\"></i>
                    </span> 
                    Gestion des Groupes Projet
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste complète des groupes projet ESPRIT
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
                          <h3 class=\"mb-0 stat-count\">{{ groupe_projets|length }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ groupe_projets|length * 2 }}%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-account-multiple\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Groupes</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set activeGroups = 0 %}
                          {% for groupe in groupe_projets %}
                            {% if groupe.statut == 'Actif' %}
                              {% set activeGroups = activeGroups + 1 %}
                            {% endif %}
                          {% endfor %}
                          <h3 class=\"mb-0 stat-count\">{{ activeGroups }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+15%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-check-circle\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Groupes Actifs</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set totalMembers = 0 %}
                          {% for groupe in groupe_projets %}
                            {% set totalMembers = totalMembers + groupe.nbrMembre %}
                          {% endfor %}
                          <h3 class=\"mb-0 stat-count\">{{ totalMembers }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+25%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-account\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Membres</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {# Créer un tableau pour stocker les matières uniques #}
                          {% set matieresUniques = [] %}
                          {% for groupe in groupe_projets %}
                            {% if groupe.matiere not in matieresUniques %}
                              {% set matieresUniques = matieresUniques|merge([groupe.matiere]) %}
                            {% endif %}
                          {% endfor %}
                          <h3 class=\"mb-0 stat-count\">{{ matieresUniques|length }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+8%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-book-open\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Matières couvertes</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Filter Panel -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4 text-primary\"><i class=\"mdi mdi-filter-variant me-2\"></i>Filtrer et Rechercher</h4>
                    <div class=\"row g-3\">
                      <!-- Search -->
                      <div class=\"col-md-4\">
                        <label class=\"fw-bold mb-1\">Recherche</label>
                        <div class=\"search-box\">
                          <i class=\"mdi mdi-magnify search-icon\"></i>
                          <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-lg border-primary\" 
                                 placeholder=\"Nom, description...\" value=\"{{ search }}\">
                        </div>
                      </div>
                      
                      <!-- Matiere -->
                      <div class=\"col-md-3\">
                        <label class=\"fw-bold mb-1\">Matière</label>
                        <input type=\"text\" id=\"matiereFilter\" class=\"form-control form-control-lg border-primary\" 
                               placeholder=\"Ex: Web, Mobile...\" value=\"{{ matiere }}\">
                      </div>

                      <!-- Statut -->
                      <div class=\"col-md-3\">
                        <label class=\"fw-bold mb-1\">Statut</label>
                        <select id=\"statutFilter\" class=\"form-select form-select-lg border-primary\">
                          <option value=\"\">Tous les statuts</option>
                          <option value=\"Actif\" {{ statut == 'Actif' ? 'selected' : '' }}>Actif</option>
                          <option value=\"Terminé\" {{ statut == 'Terminé' ? 'selected' : '' }}>Terminé</option>
                          <option value=\"En attente\" {{ statut == 'En attente' ? 'selected' : '' }}>En attente</option>
                        </select>
                      </div>

                      <!-- Actions -->
                      <div class=\"col-md-2 d-flex align-items-end\">
                        <button id=\"applyFiltersBtn\" class=\"btn btn-primary btn-lg text-white me-2 w-100\">
                           <i class=\"mdi mdi-filter me-1\"></i>Filtrer
                        </button>
                        <button id=\"resetFiltersBtn\" class=\"btn btn-light btn-lg btn-icon\" title=\"Réinitialiser\">
                           <i class=\"mdi mdi-refresh\"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Groups Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card table-card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">👥 Liste des Groupes Projet</h4>
                      <div class=\"d-flex align-items-center\">
                         <div class=\"me-3\">
                            <select id=\"sortSelect\" class=\"form-select form-select-sm\">
                                <option value=\"id\" {{ sort == 'id' ? 'selected' : '' }}>Trier par ID</option>
                                <option value=\"nomProjet\" {{ sort == 'nomProjet' ? 'selected' : '' }}>Trier par Nom</option>
                                <option value=\"nbrMembre\" {{ sort == 'nbrMembre' ? 'selected' : '' }}>Trier par Membres</option>
                                <option value=\"CreatedAt\" {{ sort == 'CreatedAt' ? 'selected' : '' }}>Trier par Date</option>
                            </select>
                         </div>
                         <a href=\"{{ path('app_groupe_projet_new') }}\" class=\"btn btn-gradient-primary btn-icon-text\">
                            <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                            Nouveau groupe
                         </a>
                      </div>
                    </div>

                    <div class=\"table-responsive\">
                      <table class=\"table table-hover\" id=\"groupesTable\">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Groupe</th>
                            <th>Matière</th>
                            <th>Membres</th>
                            <th>Description</th>
                            <th>Créé le</th>
                            <th>Statut</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          {% for groupe_projet in groupe_projets %}
                            <tr>
                              <td>{{ groupe_projet.id }}</td>
                              <td>
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"group-avatar me-3\">GP{{ groupe_projet.id }}</div>
                                  <div>
                                    <h6 class=\"mb-0 fw-bold\">{{ groupe_projet.nomProjet }}</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class=\"badge badge-info\">{{ groupe_projet.matiere }}</span>
                              </td>
                              <td>
                                <div class=\"d-flex align-items-center\">
                                  <span class=\"badge badge-light me-2\">{{ groupe_projet.nbrMembre }} membre(s)</span>
                                </div>
                              </td>
                              <td class=\"description-cell\">
                                <small class=\"text-muted\">{{ groupe_projet.description|slice(0, 50) }}{{ groupe_projet.description|length > 50 ? '...' : '' }}</small>
                              </td>
                              <td>
                                {{ groupe_projet.CreatedAt ? groupe_projet.CreatedAt|date('d/m/Y H:i') : '—' }}
                              </td>
                              <td>
                                {% if groupe_projet.statut == 'Actif' %}
                                  <span class=\"badge badge-active\">Actif</span>
                                {% elseif groupe_projet.statut == 'Terminé' %}
                                  <span class=\"badge badge-completed\">Terminé</span>
                                {% else %}
                                  <span class=\"badge badge-inactive\">{{ groupe_projet.statut }}</span>
                                {% endif %}
                              </td>
                              <td>
                                <div class=\"action-buttons\">
                                  <a href=\"{{ path('app_groupe_projet_show', { id: groupe_projet.id }) }}\" 
                                     class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\">
                                    <i class=\"mdi mdi-eye\"></i>
                                  </a>
                                  <a href=\"{{ path('app_groupe_projet_edit', { id: groupe_projet.id }) }}\" 
                                     class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\">
                                    <i class=\"mdi mdi-pencil\"></i>
                                  </a>
                                  <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                          data-id=\"{{ groupe_projet.id }}\"
                                          data-name=\"{{ groupe_projet.nomProjet }}\"
                                          data-token=\"{{ csrf_token('delete' ~ groupe_projet.id) }}\"
                                          title=\"Supprimer\">
                                    <i class=\"mdi mdi-delete\"></i>
                                  </button>
                                </div>
                              </td>
                            </tr>
                          {% else %}
                            <tr>
                                <td colspan=\"8\" class=\"text-center py-5\">
                                    <div class=\"empty-state\">
                                        <i class=\"mdi mdi-account-group-off display-1 text-muted mb-3\"></i>
                                        <h4>Aucun groupe trouvé</h4>
                                        <p class=\"text-muted\">Essayez de modifier vos filtres</p>
                                    </div>
                                </td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
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
                  Gestion des Groupes Projet - {{ groupe_projets|length }} groupe{{ groupe_projets|length > 1 ? 's' : '' }}
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
            <p>Êtes-vous sûr de vouloir supprimer le groupe <strong id=\"deleteItemName\"></strong> ?</p>
            <p class=\"text-danger mb-0\"><small>Cette action est irréversible.</small></p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" id=\"csrfToken\" value=\"\">
                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
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
          const searchInput = document.getElementById('searchInput');
          const navbarSearchInput = document.getElementById('navbarSearchInput');
          const matiereFilter = document.getElementById('matiereFilter');
          const statutFilter = document.getElementById('statutFilter');
          const sortSelect = document.getElementById('sortSelect');
          const applyFiltersBtn = document.getElementById('applyFiltersBtn');
          const resetFiltersBtn = document.getElementById('resetFiltersBtn');
          const tableBody = document.querySelector('#groupesTable tbody');

          // Fetch Results Function
            async function fetchResults() {
              const params = new URLSearchParams({
                  search: searchInput.value,
                  matiere: matiereFilter.value,
                  statut: statutFilter.value,
                  sort: sortSelect.value,
                  direction: 'asc' // OR dynamic
              });

              // Add loading state
              tableBody.style.opacity = '0.5';

              try {
                // Cancel previous request
                if (window.__groupeSearchController) {
                  try { window.__groupeSearchController.abort(); } catch (e) {}
                }
                window.__groupeSearchController = new AbortController();

                const response = await fetch(`{{ path('app_groupe_projet_ajax_filter') }}?\${params.toString()}`, { signal: window.__groupeSearchController.signal });
                const result = await response.json();

                if (result.success) {
                  updateTable(result.data);
                }
              } catch (error) {
                if (error.name === 'AbortError') return;
                console.error('Error:', error);
              } finally {
                  tableBody.style.opacity = '1';
              }
          }

          // Update Table Function
          function updateTable(data) {
              if (data.length === 0) {
                  tableBody.innerHTML = `
                      <tr>
                          <td colspan=\"8\" class=\"text-center py-5\">
                              <div class=\"empty-state\">
                                  <i class=\"mdi mdi-account-group-off display-1 text-muted mb-3\"></i>
                                  <h4>Aucun groupe trouvé</h4>
                              </div>
                          </td>
                      </tr>
                  `;
                  return;
              }

              tableBody.innerHTML = data.map(item => {
                  let statusBadge = '';
                  if (item.statut === 'Actif') statusBadge = '<span class=\"badge badge-active\">Actif</span>';
                  else if (item.statut === 'Terminé') statusBadge = '<span class=\"badge badge-completed\">Terminé</span>';
                  else statusBadge = `<span class=\"badge badge-inactive\">\${item.statut}</span>`;

                  return `
                      <tr>
                          <td>\${item.id}</td>
                          <td>
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"group-avatar me-3\">GP\${item.id}</div>
                                  <div>
                                      <h6 class=\"mb-0 fw-bold\">\${item.nomProjet}</h6>
                                  </div>
                              </div>
                          </td>
                          <td><span class=\"badge badge-info\">\${item.matiere}</span></td>
                          <td>
                              <span class=\"badge badge-light me-2\">\${item.nbrMembre} membre(s)</span>
                          </td>
                          <td class=\"description-cell\">
                              <small class=\"text-muted\">\${item.description ? (item.description.length > 50 ? item.description.substring(0, 50) + '...' : item.description) : ''}</small>
                          </td>
                          <td>\${item.createdAt}</td>
                          <td>\${statusBadge}</td>
                          <td>
                              <div class=\"action-buttons\">
                                  <a href=\"\${item.url}\" class=\"btn btn-info btn-sm btn-icon\"><i class=\"mdi mdi-eye\"></i></a>
                                  <a href=\"\${item.editUrl}\" class=\"btn btn-warning btn-sm btn-icon\"><i class=\"mdi mdi-pencil\"></i></a>
                                  <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                          data-id=\"\${item.id}\"
                                          data-name=\"\${item.nomProjet}\"
                                          data-token=\"\${item.csrfToken}\">
                                      <i class=\"mdi mdi-delete\"></i>
                                  </button>
                              </div>
                          </td>
                      </tr>
                  `;
              }).join('');
              
              attachDeleteHandlers();
          }

          // Delete Modal Handlers
          function attachDeleteHandlers() {
              document.querySelectorAll('.delete-btn').forEach(btn => {
                  btn.addEventListener('click', function() {
                      const id = this.dataset.id;
                      const name = this.dataset.name;
                      const token = this.dataset.token;
                      
                      document.getElementById('deleteItemName').textContent = name;
                      document.getElementById('deleteForm').action = `/groupe/projet/\${id}`;
                      document.getElementById('csrfToken').value = token;
                      
                      new bootstrap.Modal(document.getElementById('deleteModal')).show();
                  });
              });
          }

            // Initial Attach
          attachDeleteHandlers();

          // Event Listeners
            applyFiltersBtn.addEventListener('click', fetchResults);
            resetFiltersBtn.addEventListener('click', () => {
              searchInput.value = '';
              matiereFilter.value = '';
              statutFilter.value = '';
              fetchResults();
            });

            // Debounced live search and sync with navbar
            function scheduleFetch(value) {
              clearTimeout(window.__groupeSearchTimeout);
              window.__groupeSearchTimeout = setTimeout(() => { searchInput.value = value; fetchResults(); }, 350);
            }

            if (navbarSearchInput) {
              navbarSearchInput.addEventListener('input', function() { scheduleFetch(this.value); });
            }

            if (searchInput) {
              searchInput.addEventListener('input', function() { scheduleFetch(this.value); });
              searchInput.addEventListener('keyup', (e) => { if (e.key === 'Enter') fetchResults(); });
            }

            sortSelect.addEventListener('change', fetchResults);
      });
    </script>
  </body>
</html>
", "groupe_projet/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\groupe_projet\\index.html.twig");
    }
}
