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

/* user/show.html.twig */
class __TwigTemplate_c982e19dc1f31389155594c502e22d54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Profil Utilisateur</title>
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
      .profile-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
      }
      
      .profile-avatar {
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
      
      .info-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 20px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      
      .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.12);
      }
      
      .info-card-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #667eea;
        display: flex;
        align-items: center;
      }
      
      .info-card-title i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 10px;
        font-size: 1.5rem;
      }
      
      .info-row {
        display: flex;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
      }
      
      .info-row:last-child {
        border-bottom: none;
      }
      
      .info-label {
        font-weight: 600;
        color: #6c757d;
        width: 180px;
        display: flex;
        align-items: center;
      }
      
      .info-label i {
        margin-right: 10px;
        color: #667eea;
        font-size: 18px;
      }
      
      .info-value {
        color: #2c3e50;
        font-weight: 500;
        flex: 1;
      }
      
      .badge-custom {
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }
      
      .badge-verified {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
      }
      
      .badge-not-verified {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
      }
      
      .badge-user {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      .action-buttons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
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
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      }
      
      .empty-value {
        color: #95a5a6;
        font-style: italic;
      }
      
      /* Profile avatar styles */
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
      
      .sidebar-profile-avatar {
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
      
      .user-avatar-img, .sidebar-profile-avatar-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      }
      
      .sidebar-profile-avatar-img {
        width: 50px;
        height: 50px;
        border: 3px solid #fff;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
      }
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      /* Profile section alignment */
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
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 288
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 289
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
        // line 297
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "user", [], "any", false, false, false, 297)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 298
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "user", [], "any", false, false, false, 298), "profilePic", [], "any", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 299
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "user", [], "any", false, false, false, 299), "profilePic", [], "any", false, false, false, 299))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "user", [], "any", false, false, false, 300), "prenom", [], "any", false, false, false, 300), "html", null, true);
                yield "\" 
                           class=\"sidebar-profile-avatar-img\">
                    ";
            } else {
                // line 303
                yield "                      <div class=\"sidebar-profile-avatar\">
                        ";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 304, $this->source); })()), "user", [], "any", false, false, false, 304), "prenom", [], "any", false, false, false, 304))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 304, $this->source); })()), "user", [], "any", false, false, false, 304), "nom", [], "any", false, false, false, 304))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 307
            yield "                  ";
        } else {
            // line 308
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 310
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 313
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 313, $this->source); })()), "user", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 314
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 314, $this->source); })()), "user", [], "any", false, false, false, 314), "prenom", [], "any", false, false, false, 314), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 314, $this->source); })()), "user", [], "any", false, false, false, 314), "nom", [], "any", false, false, false, 314), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 315, $this->source); })()), "user", [], "any", false, false, false, 315), "email", [], "any", false, false, false, 315), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 317
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 317, $this->source); })()), "user", [], "any", false, false, false, 317), "roles", [], "any", false, false, false, 317))) {
                // line 318
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 320
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 322
            yield "                    </div>
                  ";
        } else {
            // line 324
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 327
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
        // line 346
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 347
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 348
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
            // line 356
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 357
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
        // line 365
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
            <a class=\"nav-link\" href=\"#\">
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
        // line 448
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
        // line 463
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\">1</span>
                </a>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 487
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 487, $this->source); })()), "user", [], "any", false, false, false, 487)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 488
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 489
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 489, $this->source); })()), "user", [], "any", false, false, false, 489), "profilePic", [], "any", false, false, false, 489)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 490
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 490, $this->source); })()), "user", [], "any", false, false, false, 490), "profilePic", [], "any", false, false, false, 490))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 491
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "user", [], "any", false, false, false, 491), "prenom", [], "any", false, false, false, 491), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 494
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "user", [], "any", false, false, false, 495), "prenom", [], "any", false, false, false, 495))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "user", [], "any", false, false, false, 495), "nom", [], "any", false, false, false, 495))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 498
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 500
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 500, $this->source); })()), "user", [], "any", false, false, false, 500), "prenom", [], "any", false, false, false, 500), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 500, $this->source); })()), "user", [], "any", false, false, false, 500), "nom", [], "any", false, false, false, 500), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 503
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 503, $this->source); })()), "user", [], "any", false, false, false, 503), "roles", [], "any", false, false, false, 503))) {
                // line 504
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 506
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 508
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 512
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 515
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 520
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 520, $this->source); })()), "user", [], "any", false, false, false, 520)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 521
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 521, $this->source); })()), "user", [], "any", false, false, false, 521), "prenom", [], "any", false, false, false, 521), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 521, $this->source); })()), "user", [], "any", false, false, false, 521), "nom", [], "any", false, false, false, 521), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 522, $this->source); })()), "user", [], "any", false, false, false, 522), "email", [], "any", false, false, false, 522), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 524
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 524, $this->source); })()), "user", [], "any", false, false, false, 524), "roles", [], "any", false, false, false, 524))) {
                // line 525
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 527
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 529
            yield "                      </small>
                    ";
        } else {
            // line 531
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 534
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 536
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 536, $this->source); })()), "user", [], "any", false, false, false, 536)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 537
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 537, $this->source); })()), "user", [], "any", false, false, false, 537), "id", [], "any", false, false, false, 537)]), "html", null, true);
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
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 547, $this->source); })()), "user", [], "any", false, false, false, 547), "id", [], "any", false, false, false, 547)]), "html", null, true);
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
        // line 559
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
        // line 579
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 579, $this->source); })()), "flashes", [], "any", false, false, false, 579));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 580
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 581
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 582
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 583
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 587
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 588
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account\"></i>
                    </span> 
                    Profil Utilisateur
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\"><a href=\"";
        // line 601
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Utilisateurs</a></li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 602, $this->source); })()), "prenom", [], "any", false, false, false, 602), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 602, $this->source); })()), "nom", [], "any", false, false, false, 602), "html", null, true);
        yield "</li>
                    </ul>
                  </nav>
                  ";
        // line 605
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 605, $this->source); })()), "user", [], "any", false, false, false, 605)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 606
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 609
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 609, $this->source); })()), "user", [], "any", false, false, false, 609), "prenom", [], "any", false, false, false, 609), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 609, $this->source); })()), "user", [], "any", false, false, false, 609), "nom", [], "any", false, false, false, 609), "html", null, true);
            yield "</strong>
                        ";
            // line 610
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 610, $this->source); })()), "user", [], "any", false, false, false, 610), "roles", [], "any", false, false, false, 610))) {
                // line 611
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 613
            yield "                      </small>
                    </div>
                  ";
        }
        // line 616
        yield "                </div>
              </div>
            </div>

            <!-- Profile Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"profile-header\">
                  <div class=\"row align-items-center\">
                    <div class=\"col-md-3 text-center\">
                      ";
        // line 626
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 626, $this->source); })()), "profilePic", [], "any", false, false, false, 626)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 627
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 627, $this->source); })()), "profilePic", [], "any", false, false, false, 627))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 628
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 628, $this->source); })()), "prenom", [], "any", false, false, false, 628), "html", null, true);
            yield "\" 
                             class=\"profile-avatar\"
                             style=\"width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0 5px 20px rgba(0,0,0,0.2);\">
                      ";
        } else {
            // line 632
            yield "                        <div class=\"profile-avatar\">
                          ";
            // line 633
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 633, $this->source); })()), "prenom", [], "any", false, false, false, 633))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 633, $this->source); })()), "nom", [], "any", false, false, false, 633))), "html", null, true);
            yield "
                        </div>
                      ";
        }
        // line 636
        yield "                    </div>
                    <div class=\"col-md-9\">
                      <h2 class=\"mb-2\">";
        // line 638
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 638, $this->source); })()), "prenom", [], "any", false, false, false, 638), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 638, $this->source); })()), "nom", [], "any", false, false, false, 638), "html", null, true);
        yield "</h2>
                      <p class=\"mb-3 opacity-75\">
                        <i class=\"mdi mdi-email me-2\"></i>";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 640, $this->source); })()), "email", [], "any", false, false, false, 640), "html", null, true);
        yield "
                      </p>
                      <div class=\"d-flex flex-wrap gap-2\">
                        ";
        // line 643
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 643, $this->source); })()), "isVerified", [], "any", false, false, false, 643)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 644
            yield "                          <span class=\"badge badge-custom badge-verified\">
                            <i class=\"mdi mdi-check-circle me-1\"></i>Compte Vérifié
                          </span>
                        ";
        } else {
            // line 648
            yield "                          <span class=\"badge badge-custom badge-not-verified\">
                            <i class=\"mdi mdi-alert-circle me-1\"></i>Non Vérifié
                          </span>
                        ";
        }
        // line 652
        yield "                        
                        ";
        // line 653
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 653, $this->source); })()), "roles", [], "any", false, false, false, 653))) {
            // line 654
            yield "                          <span class=\"badge badge-custom badge-admin\">
                            <i class=\"mdi mdi-shield-account me-1\"></i>Administrateur
                          </span>
                        ";
        } else {
            // line 658
            yield "                          <span class=\"badge badge-custom badge-user\">
                            <i class=\"mdi mdi-account me-1\"></i>Utilisateur
                          </span>
                        ";
        }
        // line 662
        yield "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <!-- Personal Information -->
              <div class=\"col-md-6\">
                <div class=\"info-card\">
                  <h4 class=\"info-card-title\">
                    <i class=\"mdi mdi-account-circle\"></i>
                    Informations Personnelles
                  </h4>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-account\"></i>
                      Nom complet
                    </div>
                    <div class=\"info-value\">";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 683, $this->source); })()), "prenom", [], "any", false, false, false, 683), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 683, $this->source); })()), "nom", [], "any", false, false, false, 683), "html", null, true);
        yield "</div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-calendar\"></i>
                      Date de naissance
                    </div>
                    <div class=\"info-value\">
                      ";
        // line 692
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 692, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 692)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 693
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 693, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 693), "d/m/Y"), "html", null, true);
            yield "
                        <small class=\"text-muted ms-2\">(";
            // line 694
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 694, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 694), "Y")), "html", null, true);
            yield " ans)</small>
                      ";
        } else {
            // line 696
            yield "                        <span class=\"empty-value\">Non renseignée</span>
                      ";
        }
        // line 698
        yield "                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-gender-male-female\"></i>
                      Sexe
                    </div>
                    <div class=\"info-value\">
                      ";
        // line 707
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 707, $this->source); })()), "sexe", [], "any", false, false, false, 707)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 708
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 708, $this->source); })()), "sexe", [], "any", false, false, false, 708) == "Homme")) {
                // line 709
                yield "                          <span class=\"badge badge-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 709, $this->source); })()), "sexe", [], "any", false, false, false, 709), "html", null, true);
                yield "</span>
                        ";
            } else {
                // line 711
                yield "                          <span class=\"badge badge-pink\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 711, $this->source); })()), "sexe", [], "any", false, false, false, 711), "html", null, true);
                yield "</span>
                        ";
            }
            // line 713
            yield "                      ";
        } else {
            // line 714
            yield "                        <span class=\"empty-value\">Non renseigné</span>
                      ";
        }
        // line 716
        yield "                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-email\"></i>
                      Email
                    </div>
                    <div class=\"info-value\">";
        // line 724
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 724, $this->source); })()), "email", [], "any", false, false, false, 724), "html", null, true);
        yield "</div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-phone\"></i>
                      Téléphone
                    </div>
                    <div class=\"info-value\">
                      ";
        // line 733
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 733, $this->source); })()), "numTel", [], "any", false, false, false, 733)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 734
            yield "                        <span class=\"badge badge-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 734, $this->source); })()), "numTel", [], "any", false, false, false, 734), "html", null, true);
            yield "</span>
                      ";
        } else {
            // line 736
            yield "                        <span class=\"empty-value\">Non renseigné</span>
                      ";
        }
        // line 738
        yield "                    </div>
                  </div>
                </div>
              </div>

              <!-- Academic Information -->
              <div class=\"col-md-6\">
                <div class=\"info-card\">
                  <h4 class=\"info-card-title\">
                    <i class=\"mdi mdi-school\"></i>
                    Informations Académiques
                  </h4>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                      Classe
                    </div>
                    <div class=\"info-value\">
                      ";
        // line 757
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 757, $this->source); })()), "classe", [], "any", false, false, false, 757)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 758
            yield "                        <span class=\"badge badge-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 758, $this->source); })()), "classe", [], "any", false, false, false, 758), "nom", [], "any", false, false, false, 758), "html", null, true);
            yield "</span>
                      ";
        } else {
            // line 760
            yield "                        <span class=\"empty-value\">Aucune classe assignée</span>
                      ";
        }
        // line 762
        yield "                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-shield-account\"></i>
                      Rôles
                    </div>
                    <div class=\"info-value\">
                      <div class=\"d-flex flex-wrap gap-2\">
                        ";
        // line 772
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 772, $this->source); })()), "roles", [], "any", false, false, false, 772));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 773
            yield "                          ";
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 774
                yield "                            <span class=\"badge badge-admin\">Administrateur</span>
                          ";
            } elseif ((            // line 775
$context["role"] == "ROLE_USER")) {
                // line 776
                yield "                            <span class=\"badge badge-user\">Utilisateur</span>
                          ";
            } else {
                // line 778
                yield "                            <span class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</span>
                          ";
            }
            // line 780
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 781
        yield "                      </div>
                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-check-circle\"></i>
                      Statut du compte
                    </div>
                    <div class=\"info-value\">
                      ";
        // line 791
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 791, $this->source); })()), "isVerified", [], "any", false, false, false, 791)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 792
            yield "                        <span class=\"badge badge-success\">
                          <i class=\"mdi mdi-check me-1\"></i>Vérifié
                        </span>
                      ";
        } else {
            // line 796
            yield "                        <span class=\"badge badge-warning\">
                          <i class=\"mdi mdi-alert me-1\"></i>Non vérifié
                        </span>
                      ";
        }
        // line 800
        yield "                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-identifier\"></i>
                      ID Utilisateur
                    </div>
                    <div class=\"info-value\">
                      <code>#";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 809, $this->source); })()), "id", [], "any", false, false, false, 809), "html", null, true);
        yield "</code>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"info-card\">
                  <div class=\"action-buttons\">
                    <a href=\"";
        // line 821
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-gradient-secondary\">
                      <i class=\"mdi mdi-arrow-left me-2\"></i>Retour à la liste
                    </a>
                    <a href=\"";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 824, $this->source); })()), "id", [], "any", false, false, false, 824)]), "html", null, true);
        yield "\" class=\"btn btn-gradient-warning\">
                      <i class=\"mdi mdi-pencil me-2\"></i>Modifier
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

            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Profil de ";
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 845, $this->source); })()), "prenom", [], "any", false, false, false, 845), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 845, $this->source); })()), "nom", [], "any", false, false, false, 845), "html", null, true);
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
            <p>Êtes-vous sûr de vouloir supprimer l'utilisateur <strong>";
        // line 865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 865, $this->source); })()), "prenom", [], "any", false, false, false, 865), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 865, $this->source); })()), "nom", [], "any", false, false, false, 865), "html", null, true);
        yield "</strong> ?</p>
            <p class=\"text-danger mb-0\">
              <i class=\"mdi mdi-alert me-1\"></i>
              <small>Cette action est irréversible.</small>
            </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
              <i class=\"mdi mdi-close me-1\"></i>Annuler
            </button>
            <form method=\"POST\" action=\"";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 875, $this->source); })()), "id", [], "any", false, false, false, 875)]), "html", null, true);
        yield "\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 876, $this->source); })()), "id", [], "any", false, false, false, 876))), "html", null, true);
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
        // line 887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert');
          alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          });
        }, 5000);
        
        // Add current year to footer
        const currentYear = new Date().getFullYear();
        const footerText = document.querySelector('.footer span:first-child');
        if (footerText) {
          footerText.innerHTML = footerText.innerHTML.replace('2024', currentYear);
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
        return "user/show.html.twig";
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
        return array (  1307 => 889,  1303 => 888,  1299 => 887,  1285 => 876,  1281 => 875,  1266 => 865,  1241 => 845,  1235 => 842,  1214 => 824,  1208 => 821,  1193 => 809,  1182 => 800,  1176 => 796,  1170 => 792,  1168 => 791,  1156 => 781,  1150 => 780,  1144 => 778,  1140 => 776,  1138 => 775,  1135 => 774,  1132 => 773,  1128 => 772,  1116 => 762,  1112 => 760,  1106 => 758,  1104 => 757,  1083 => 738,  1079 => 736,  1073 => 734,  1071 => 733,  1059 => 724,  1049 => 716,  1045 => 714,  1042 => 713,  1036 => 711,  1030 => 709,  1027 => 708,  1025 => 707,  1014 => 698,  1010 => 696,  1005 => 694,  1000 => 693,  998 => 692,  984 => 683,  961 => 662,  955 => 658,  949 => 654,  947 => 653,  944 => 652,  938 => 648,  932 => 644,  930 => 643,  924 => 640,  917 => 638,  913 => 636,  906 => 633,  903 => 632,  896 => 628,  891 => 627,  889 => 626,  877 => 616,  872 => 613,  868 => 611,  866 => 610,  860 => 609,  855 => 606,  853 => 605,  845 => 602,  841 => 601,  826 => 588,  820 => 587,  810 => 583,  806 => 582,  801 => 581,  796 => 580,  791 => 579,  768 => 559,  753 => 547,  739 => 537,  737 => 536,  733 => 534,  728 => 531,  724 => 529,  720 => 527,  716 => 525,  714 => 524,  709 => 522,  702 => 521,  700 => 520,  693 => 515,  686 => 512,  680 => 508,  676 => 506,  672 => 504,  670 => 503,  662 => 500,  658 => 498,  651 => 495,  648 => 494,  642 => 491,  637 => 490,  635 => 489,  632 => 488,  630 => 487,  603 => 463,  585 => 448,  500 => 365,  489 => 357,  486 => 356,  475 => 348,  472 => 347,  470 => 346,  449 => 327,  444 => 324,  440 => 322,  436 => 320,  432 => 318,  430 => 317,  425 => 315,  418 => 314,  416 => 313,  411 => 310,  405 => 308,  402 => 307,  395 => 304,  392 => 303,  386 => 300,  381 => 299,  378 => 298,  376 => 297,  365 => 289,  361 => 288,  356 => 286,  352 => 285,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Profil Utilisateur</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />
    <style>
      .profile-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
      }
      
      .profile-avatar {
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
      
      .info-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 20px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      
      .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.12);
      }
      
      .info-card-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #667eea;
        display: flex;
        align-items: center;
      }
      
      .info-card-title i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 10px;
        font-size: 1.5rem;
      }
      
      .info-row {
        display: flex;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
      }
      
      .info-row:last-child {
        border-bottom: none;
      }
      
      .info-label {
        font-weight: 600;
        color: #6c757d;
        width: 180px;
        display: flex;
        align-items: center;
      }
      
      .info-label i {
        margin-right: 10px;
        color: #667eea;
        font-size: 18px;
      }
      
      .info-value {
        color: #2c3e50;
        font-weight: 500;
        flex: 1;
      }
      
      .badge-custom {
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }
      
      .badge-verified {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
      }
      
      .badge-not-verified {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
      }
      
      .badge-user {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      .action-buttons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
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
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      }
      
      .empty-value {
        color: #95a5a6;
        font-style: italic;
      }
      
      /* Profile avatar styles */
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
      
      .sidebar-profile-avatar {
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
      
      .user-avatar-img, .sidebar-profile-avatar-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      }
      
      .sidebar-profile-avatar-img {
        width: 50px;
        height: 50px;
        border: 3px solid #fff;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
      }
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      /* Profile section alignment */
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
                           class=\"sidebar-profile-avatar-img\">
                    {% else %}
                      <div class=\"sidebar-profile-avatar\">
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
            <a class=\"nav-link\" href=\"#\">
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\">1</span>
                </a>
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
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
              {% endfor %}
            {% endfor %}

            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account\"></i>
                    </span> 
                    Profil Utilisateur
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\"><a href=\"{{ path('app_user_index') }}\">Utilisateurs</a></li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ user.prenom }} {{ user.nom }}</li>
                    </ul>
                  </nav>
                  {% if app.user %}
                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong>
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        {% endif %}
                      </small>
                    </div>
                  {% endif %}
                </div>
              </div>
            </div>

            <!-- Profile Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"profile-header\">
                  <div class=\"row align-items-center\">
                    <div class=\"col-md-3 text-center\">
                      {% if user.profilePic %}
                        <img src=\"{{ asset('uploads/profile_pics/' ~ user.profilePic) }}\" 
                             alt=\"{{ user.prenom }}\" 
                             class=\"profile-avatar\"
                             style=\"width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0 5px 20px rgba(0,0,0,0.2);\">
                      {% else %}
                        <div class=\"profile-avatar\">
                          {{ user.prenom|first|upper }}{{ user.nom|first|upper }}
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"col-md-9\">
                      <h2 class=\"mb-2\">{{ user.prenom }} {{ user.nom }}</h2>
                      <p class=\"mb-3 opacity-75\">
                        <i class=\"mdi mdi-email me-2\"></i>{{ user.email }}
                      </p>
                      <div class=\"d-flex flex-wrap gap-2\">
                        {% if user.isVerified %}
                          <span class=\"badge badge-custom badge-verified\">
                            <i class=\"mdi mdi-check-circle me-1\"></i>Compte Vérifié
                          </span>
                        {% else %}
                          <span class=\"badge badge-custom badge-not-verified\">
                            <i class=\"mdi mdi-alert-circle me-1\"></i>Non Vérifié
                          </span>
                        {% endif %}
                        
                        {% if 'ROLE_ADMIN' in user.roles %}
                          <span class=\"badge badge-custom badge-admin\">
                            <i class=\"mdi mdi-shield-account me-1\"></i>Administrateur
                          </span>
                        {% else %}
                          <span class=\"badge badge-custom badge-user\">
                            <i class=\"mdi mdi-account me-1\"></i>Utilisateur
                          </span>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <!-- Personal Information -->
              <div class=\"col-md-6\">
                <div class=\"info-card\">
                  <h4 class=\"info-card-title\">
                    <i class=\"mdi mdi-account-circle\"></i>
                    Informations Personnelles
                  </h4>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-account\"></i>
                      Nom complet
                    </div>
                    <div class=\"info-value\">{{ user.prenom }} {{ user.nom }}</div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-calendar\"></i>
                      Date de naissance
                    </div>
                    <div class=\"info-value\">
                      {% if user.dateDeNaissance %}
                        {{ user.dateDeNaissance|date('d/m/Y') }}
                        <small class=\"text-muted ms-2\">({{ 'now'|date('Y') - user.dateDeNaissance|date('Y') }} ans)</small>
                      {% else %}
                        <span class=\"empty-value\">Non renseignée</span>
                      {% endif %}
                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-gender-male-female\"></i>
                      Sexe
                    </div>
                    <div class=\"info-value\">
                      {% if user.sexe %}
                        {% if user.sexe == 'Homme' %}
                          <span class=\"badge badge-primary\">{{ user.sexe }}</span>
                        {% else %}
                          <span class=\"badge badge-pink\">{{ user.sexe }}</span>
                        {% endif %}
                      {% else %}
                        <span class=\"empty-value\">Non renseigné</span>
                      {% endif %}
                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-email\"></i>
                      Email
                    </div>
                    <div class=\"info-value\">{{ user.email }}</div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-phone\"></i>
                      Téléphone
                    </div>
                    <div class=\"info-value\">
                      {% if user.numTel %}
                        <span class=\"badge badge-info\">{{ user.numTel }}</span>
                      {% else %}
                        <span class=\"empty-value\">Non renseigné</span>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </div>

              <!-- Academic Information -->
              <div class=\"col-md-6\">
                <div class=\"info-card\">
                  <h4 class=\"info-card-title\">
                    <i class=\"mdi mdi-school\"></i>
                    Informations Académiques
                  </h4>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                      Classe
                    </div>
                    <div class=\"info-value\">
                      {% if user.classe %}
                        <span class=\"badge badge-success\">{{ user.classe.nom }}</span>
                      {% else %}
                        <span class=\"empty-value\">Aucune classe assignée</span>
                      {% endif %}
                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-shield-account\"></i>
                      Rôles
                    </div>
                    <div class=\"info-value\">
                      <div class=\"d-flex flex-wrap gap-2\">
                        {% for role in user.roles %}
                          {% if role == 'ROLE_ADMIN' %}
                            <span class=\"badge badge-admin\">Administrateur</span>
                          {% elseif role == 'ROLE_USER' %}
                            <span class=\"badge badge-user\">Utilisateur</span>
                          {% else %}
                            <span class=\"badge badge-secondary\">{{ role }}</span>
                          {% endif %}
                        {% endfor %}
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-check-circle\"></i>
                      Statut du compte
                    </div>
                    <div class=\"info-value\">
                      {% if user.isVerified %}
                        <span class=\"badge badge-success\">
                          <i class=\"mdi mdi-check me-1\"></i>Vérifié
                        </span>
                      {% else %}
                        <span class=\"badge badge-warning\">
                          <i class=\"mdi mdi-alert me-1\"></i>Non vérifié
                        </span>
                      {% endif %}
                    </div>
                  </div>
                  
                  <div class=\"info-row\">
                    <div class=\"info-label\">
                      <i class=\"mdi mdi-identifier\"></i>
                      ID Utilisateur
                    </div>
                    <div class=\"info-value\">
                      <code>#{{ user.id }}</code>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"info-card\">
                  <div class=\"action-buttons\">
                    <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-gradient-secondary\">
                      <i class=\"mdi mdi-arrow-left me-2\"></i>Retour à la liste
                    </a>
                    <a href=\"{{ path('app_user_edit', { id: user.id }) }}\" class=\"btn btn-gradient-warning\">
                      <i class=\"mdi mdi-pencil me-2\"></i>Modifier
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

            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © {{ 'now'|date('Y') }} ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Profil de {{ user.prenom }} {{ user.nom }}
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
            <p>Êtes-vous sûr de vouloir supprimer l'utilisateur <strong>{{ user.prenom }} {{ user.nom }}</strong> ?</p>
            <p class=\"text-danger mb-0\">
              <i class=\"mdi mdi-alert me-1\"></i>
              <small>Cette action est irréversible.</small>
            </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
              <i class=\"mdi mdi-close me-1\"></i>Annuler
            </button>
            <form method=\"POST\" action=\"{{ path('app_user_delete', { id: user.id }) }}\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
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
          const alerts = document.querySelectorAll('.alert');
          alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          });
        }, 5000);
        
        // Add current year to footer
        const currentYear = new Date().getFullYear();
        const footerText = document.querySelector('.footer span:first-child');
        if (footerText) {
          footerText.innerHTML = footerText.innerHTML.replace('2024', currentYear);
        }
      });
    </script>
  </body>
</html>", "user/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\show.html.twig");
    }
}
