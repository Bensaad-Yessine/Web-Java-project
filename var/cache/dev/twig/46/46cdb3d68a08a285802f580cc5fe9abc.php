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

/* classe/index.html.twig */
class __TwigTemplate_85462662210f60c0f513d02d88200891 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/index.html.twig"));

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

        yield "Gestion des Classes";
        
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
    <title>ESPRIT - Gestion des Classes</title>
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
      
      .class-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
      }
      
      .badge-niveau {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      .badge-annee {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
      }
      
      .action-buttons .btn {
        padding: 5px 10px;
        margin: 0 2px;
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
      
      .class-avatar {
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
      }
      
      /* Profile styles */
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
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 236
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 240
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
        // line 248
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "user", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 249
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "user", [], "any", false, false, false, 249), "profilePic", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 250
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 250, $this->source); })()), "user", [], "any", false, false, false, 250), "profilePic", [], "any", false, false, false, 250))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 251, $this->source); })()), "user", [], "any", false, false, false, 251), "prenom", [], "any", false, false, false, 251), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 254
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 255, $this->source); })()), "user", [], "any", false, false, false, 255), "prenom", [], "any", false, false, false, 255))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 255, $this->source); })()), "user", [], "any", false, false, false, 255), "nom", [], "any", false, false, false, 255))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 258
            yield "                  ";
        } else {
            // line 259
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 261
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 264
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "user", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 265
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "prenom", [], "any", false, false, false, 265), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "nom", [], "any", false, false, false, 265), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "user", [], "any", false, false, false, 266), "email", [], "any", false, false, false, 266), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 268
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "user", [], "any", false, false, false, 268), "roles", [], "any", false, false, false, 268))) {
                // line 269
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 271
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 273
            yield "                    </div>
                  ";
        } else {
            // line 275
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 278
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
        // line 297
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 298
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 299
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
            // line 307
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 308
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
        // line 316
        yield "          
          <!-- Matières -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 319
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 329
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
        // line 339
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
        // line 369
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
        // line 399
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
        // line 414
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une classe...\" id=\"searchInput\" name=\"nom\" value=\"";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("nom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 423, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\">2</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-success rounded-circle\">
                        <i class=\"mdi mdi-school\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvelle classe</p>
                      <p class=\"text-muted ellipsis mb-0\">Classe GL2025 créée</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 453
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 453, $this->source); })()), "user", [], "any", false, false, false, 453)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 454
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 455
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "profilePic", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 456
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 456, $this->source); })()), "user", [], "any", false, false, false, 456), "profilePic", [], "any", false, false, false, 456))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 457
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 457, $this->source); })()), "user", [], "any", false, false, false, 457), "prenom", [], "any", false, false, false, 457), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 460
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 461, $this->source); })()), "user", [], "any", false, false, false, 461), "prenom", [], "any", false, false, false, 461))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 461, $this->source); })()), "user", [], "any", false, false, false, 461), "nom", [], "any", false, false, false, 461))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 464
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 466
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 466, $this->source); })()), "user", [], "any", false, false, false, 466), "prenom", [], "any", false, false, false, 466), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 466, $this->source); })()), "user", [], "any", false, false, false, 466), "nom", [], "any", false, false, false, 466), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 469
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 469, $this->source); })()), "user", [], "any", false, false, false, 469), "roles", [], "any", false, false, false, 469))) {
                // line 470
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 472
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 474
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 478
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 481
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 486
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 486, $this->source); })()), "user", [], "any", false, false, false, 486)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 487
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 487, $this->source); })()), "user", [], "any", false, false, false, 487), "prenom", [], "any", false, false, false, 487), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 487, $this->source); })()), "user", [], "any", false, false, false, 487), "nom", [], "any", false, false, false, 487), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 488
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 488, $this->source); })()), "user", [], "any", false, false, false, 488), "email", [], "any", false, false, false, 488), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 490
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 490, $this->source); })()), "user", [], "any", false, false, false, 490), "roles", [], "any", false, false, false, 490))) {
                // line 491
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 493
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 495
            yield "                      </small>
                    ";
        } else {
            // line 497
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 500
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 502
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 502, $this->source); })()), "user", [], "any", false, false, false, 502)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 503
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 503, $this->source); })()), "user", [], "any", false, false, false, 503), "id", [], "any", false, false, false, 503)]), "html", null, true);
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
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 513, $this->source); })()), "user", [], "any", false, false, false, 513), "id", [], "any", false, false, false, 513)]), "html", null, true);
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
        // line 525
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
        // line 545
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 545, $this->source); })()), "flashes", [], "any", false, false, false, 545));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 546
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 547
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 548
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 549
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 553
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 554
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-school\"></i>
                    </span> 
                    Gestion des Classes
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste des classes ESPRIT
                      </li>
                    </ul>
                  </nav>
                  ";
        // line 572
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 572, $this->source); })()), "user", [], "any", false, false, false, 572)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 573
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 576
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 576, $this->source); })()), "user", [], "any", false, false, false, 576), "prenom", [], "any", false, false, false, 576), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 576, $this->source); })()), "user", [], "any", false, false, false, 576), "nom", [], "any", false, false, false, 576), "html", null, true);
            yield "</strong>
                        (";
            // line 577
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 577, $this->source); })()), "user", [], "any", false, false, false, 577), "email", [], "any", false, false, false, 577), "html", null, true);
            yield ")
                        ";
            // line 578
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "user", [], "any", false, false, false, 578), "roles", [], "any", false, false, false, 578))) {
                // line 579
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 581
            yield "                      </small>
                    </div>
                  ";
        }
        // line 584
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
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 596, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 2, 8), "html", null, true);
        yield "%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-school\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Classes</h6>
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
        // line 616
        $context["niveau1"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 616, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 616, $this->source); })()), "niveau", [], "any", false, false, false, 616) == "1ère année"); }));
        // line 617
        yield "                          <h3 class=\"mb-0 stat-count text-dark\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveau1"]) || array_key_exists("niveau1", $context) ? $context["niveau1"] : (function () { throw new RuntimeError('Variable "niveau1" does not exist.', 617, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 5, 15), "html", null, true);
        yield "%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-numeric-1-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">1ère Année</h6>
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
        // line 637
        $context["niveau2"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 637, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 637, $this->source); })()), "niveau", [], "any", false, false, false, 637) == "2ème année"); }));
        // line 638
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveau2"]) || array_key_exists("niveau2", $context) ? $context["niveau2"] : (function () { throw new RuntimeError('Variable "niveau2" does not exist.', 638, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3, 10), "html", null, true);
        yield "%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-numeric-2-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">2ème Année</h6>
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
        // line 658
        $context["niveau3"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 658, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 658, $this->source); })()), "niveau", [], "any", false, false, false, 658) == "3ème année"); }));
        // line 659
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveau3"]) || array_key_exists("niveau3", $context) ? $context["niveau3"] : (function () { throw new RuntimeError('Variable "niveau3" does not exist.', 659, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 5), "html", null, true);
        yield "%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-numeric-3-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">3ème Année</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Classes Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">🏫 Liste des Classes</h4>
                      <a href=\"";
        // line 682
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_new");
        yield "\" class=\"btn btn-gradient-primary btn-icon-text\">
                        <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                        Nouvelle Classe
                      </a>
                    </div>

                    <!-- Filters Panel -->
                    <div class=\"card mb-3\" style=\"background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: none; border-radius: 10px;\">
                      <div class=\"card-body\">
                        <h6 class=\"card-title mb-3\"><i class=\"mdi mdi-filter me-2\"></i>Filtres et Recherche</h6>
                        <div class=\"row g-2\">
                          <div class=\"col-md-3\">
                            <label class=\"small text-muted\">Rechercher</label>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Nom, niveau, filière...\"
                                   value=\"";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 696, $this->source); })()), "html", null, true);
        yield "\">
                          </div>
                          <div class=\"col-md-3\">
                            <label class=\"small text-muted\">Niveau</label>
                            <select id=\"niveauFilter\" class=\"form-control\" style=\"cursor: pointer;\">
                              <option value=\"\">-- Tous les niveaux --</option>
                              ";
        // line 702
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 702, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 703
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "niveau", [], "any", false, false, false, 703), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "niveau", [], "any", false, false, false, 703) == (isset($context["filiere"]) || array_key_exists("filiere", $context) ? $context["filiere"] : (function () { throw new RuntimeError('Variable "filiere" does not exist.', 703, $this->source); })()))) {
                yield "selected";
            }
            yield ">
                                  ";
            // line 704
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "niveau", [], "any", false, false, false, 704), "html", null, true);
            yield "
                                </option>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 707
        yield "                            </select>
                          </div>
                          <div class=\"col-md-3\">
                            <label class=\"small text-muted\">Filière</label>
                            <select id=\"filiereFilter\" class=\"form-control\" style=\"cursor: pointer;\">
                              <option value=\"\">-- Toutes les filières --</option>
                              ";
        // line 713
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filieres"]) || array_key_exists("filieres", $context) ? $context["filieres"] : (function () { throw new RuntimeError('Variable "filieres" does not exist.', 713, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
            // line 714
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fil"], "filiere", [], "any", false, false, false, 714), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fil"], "filiere", [], "any", false, false, false, 714) == (isset($context["filiere"]) || array_key_exists("filiere", $context) ? $context["filiere"] : (function () { throw new RuntimeError('Variable "filiere" does not exist.', 714, $this->source); })()))) {
                yield "selected";
            }
            yield ">
                                  ";
            // line 715
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fil"], "filiere", [], "any", false, false, false, 715), "html", null, true);
            yield "
                                </option>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fil'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        yield "                            </select>
                          </div>
                          <div class=\"col-md-3\">
                            <label class=\"small text-muted\">Tri</label>
                            <select id=\"sortSelect\" class=\"form-control\" style=\"cursor: pointer;\">
                              <option value=\"id-asc\" ";
        // line 723
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 723, $this->source); })()) == "id") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 723, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">ID (croissant)</option>
                              <option value=\"id-desc\" ";
        // line 724
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 724, $this->source); })()) == "id") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 724, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">ID (décroissant)</option>
                              <option value=\"nom-asc\" ";
        // line 725
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 725, $this->source); })()) == "nom") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 725, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Nom (A-Z)</option>
                              <option value=\"nom-desc\" ";
        // line 726
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 726, $this->source); })()) == "nom") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 726, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">Nom (Z-A)</option>
                              <option value=\"niveau-asc\" ";
        // line 727
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 727, $this->source); })()) == "niveau") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 727, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Niveau (croissant)</option>
                              <option value=\"niveau-desc\" ";
        // line 728
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 728, $this->source); })()) == "niveau") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 728, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">Niveau (décroissant)</option>
                            </select>
                          </div>
                        </div>
                        <div class=\"row g-2 mt-2\">
                          <div class=\"col-12\">
                           <button id=\"applyFilters\" class=\"btn btn-sm btn-gradient-primary text-dark\">
  <i class=\"mdi mdi-magnify me-1 text-dark\"></i>Appliquer les filtres
</button>

                            <button id=\"resetFilters\" class=\"btn btn-sm btn-outline-secondary\">
                              <i class=\"mdi mdi-close me-1\"></i>Réinitialiser
                            </button>
                            <small class=\"text-muted ms-2\" id=\"resultCount\">Résultats: ";
        // line 741
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 741, $this->source); })())), "html", null, true);
        yield "</small>
                          </div>
                        </div>
                      </div>
                    </div>

                    ";
        // line 747
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 747, $this->source); })()))) {
            // line 748
            yield "                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-school-outline\"></i>
                        <h4 class=\"text-muted\">Aucune classe trouvée</h4>
                        <p class=\"text-muted mb-4\">Commencez par créer une nouvelle classe</p>
                        <a href=\"";
            // line 752
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_new");
            yield "\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Créer la première classe
                        </a>
                      </div>
                    ";
        } else {
            // line 758
            yield "                      <div class=\"table-responsive\" id=\"classeTableContainer\">
                        <table class=\"table table-hover\" id=\"classesTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>
                                <a href=\"";
            // line 764
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 764, $this->source); })()) == "nom_asc")) ? ("nom_desc") : ("nom_asc"))]), "html", null, true);
            yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
            yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 764, $this->source); })()) == "nom_asc")) ? ("nom_desc") : ("nom_asc"));
            yield "\">
                                  Classe
                                  ";
            // line 766
            if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 766, $this->source); })()) == "nom_asc")) {
                yield "<i class=\"mdi mdi-arrow-up\"></i>";
            } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 766, $this->source); })()) == "nom_desc")) {
                yield "<i class=\"mdi mdi-arrow-down\"></i>";
            }
            // line 767
            yield "                                </a>
                              </th>
                              <th>Nom Complet</th>
                              <th>
                                <a href=\"";
            // line 771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 771, $this->source); })()) == "niveau_asc")) ? ("niveau_desc") : ("niveau_asc"))]), "html", null, true);
            yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
            yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 771, $this->source); })()) == "niveau_asc")) ? ("niveau_desc") : ("niveau_asc"));
            yield "\">
                                  Niveau
                                  ";
            // line 773
            if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 773, $this->source); })()) == "niveau_asc")) {
                yield "<i class=\"mdi mdi-arrow-up\"></i>";
            } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 773, $this->source); })()) == "niveau_desc")) {
                yield "<i class=\"mdi mdi-arrow-down\"></i>";
            }
            // line 774
            yield "                                </a>
                              </th>
                              <th>
                                <a href=\"";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 777, $this->source); })()) == "anneeuniversitaire_asc")) ? ("anneeuniversitaire_desc") : ("anneeuniversitaire_asc"))]), "html", null, true);
            yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
            yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 777, $this->source); })()) == "anneeuniversitaire_asc")) ? ("anneeuniversitaire_desc") : ("anneeuniversitaire_asc"));
            yield "\">
                                  Année Universitaire
                                  ";
            // line 779
            if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 779, $this->source); })()) == "anneeuniversitaire_asc")) {
                yield "<i class=\"mdi mdi-arrow-up\"></i>";
            } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 779, $this->source); })()) == "anneeuniversitaire_desc")) {
                yield "<i class=\"mdi mdi-arrow-down\"></i>";
            }
            // line 780
            yield "                                </a>
                              </th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            ";
            // line 786
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 786, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                // line 787
                yield "                              <tr>
                                <td>
                                  <span class=\"text-muted\">#";
                // line 789
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 789), "html", null, true);
                yield "</span>
                                </td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"class-avatar me-3\">
                                      ";
                // line 794
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 794), 0, 2)), "html", null, true);
                yield "
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0 font-weight-bold\">";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 797), "html", null, true);
                yield "</h6>
                                      <small class=\"text-muted\">Classe ID: ";
                // line 798
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 798), "html", null, true);
                yield "</small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <strong>";
                // line 803
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 803), "html", null, true);
                yield "</strong>
                                </td>
                                <td>
                                  ";
                // line 806
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "niveau", [], "any", false, false, false, 806)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 807
                    yield "                                    <span class=\"class-badge badge-niveau\">
                                      <i class=\"mdi mdi-account-group me-1\"></i>
                                      ";
                    // line 809
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "niveau", [], "any", false, false, false, 809), "html", null, true);
                    yield "
                                    </span>
                                  ";
                } else {
                    // line 812
                    yield "                                    <span class=\"text-muted\">—</span>
                                  ";
                }
                // line 814
                yield "                                </td>
                                <td>
                                  ";
                // line 816
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "anneeuniversitaire", [], "any", false, false, false, 816)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 817
                    yield "                                    <span class=\"class-badge badge-annee\">
                                      <i class=\"mdi mdi-calendar me-1\"></i>
                                      ";
                    // line 819
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "anneeuniversitaire", [], "any", false, false, false, 819), "html", null, true);
                    yield "
                                    </span>
                                  ";
                } else {
                    // line 822
                    yield "                                    <span class=\"text-muted\">—</span>
                                  ";
                }
                // line 824
                yield "                                </td>
                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"";
                // line 827
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 827)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-info btn-sm btn-icon\"
                                       title=\"Voir détails\">
                                      <i class=\"mdi mdi-eye\"></i>
                                    </a>
                                    <a href=\"";
                // line 832
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 832)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-warning btn-sm btn-icon\"
                                       title=\"Modifier\">
                                      <i class=\"mdi mdi-pencil\"></i>
                                    </a>
                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                            data-classe-id=\"";
                // line 839
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 839), "html", null, true);
                yield "\"
                                            data-classe-name=\"";
                // line 840
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 840), "html", null, true);
                yield "\"
                                            data-csrf-token=\"";
                // line 841
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 841))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['classe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 849
            yield "                          </tbody>
                        </table>
                      </div>
                      
                      <!-- Quick Stats -->
                      <div class=\"row mt-4\">
                        <div class=\"col-md-12\">
                          <div class=\"card\">
                            <div class=\"card-body\">
                              <h5 class=\"card-title\">📊 Vue d'ensemble des classes</h5>
                              <div class=\"row\">
                                <div class=\"col-md-3\">
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                      <span class=\"class-badge badge-niveau\">
                                        Total
                                      </span>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">";
            // line 868
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 868, $this->source); })())), "html", null, true);
            yield " classes</h6>
                                      <small class=\"text-muted\">Actives</small>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col-md-3\">
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                      <span class=\"class-badge\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                                        1ère
                                      </span>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">";
            // line 881
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveau1"]) || array_key_exists("niveau1", $context) ? $context["niveau1"] : (function () { throw new RuntimeError('Variable "niveau1" does not exist.', 881, $this->source); })()), "html", null, true);
            yield " classes</h6>
                                      <small class=\"text-muted\">Première année</small>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col-md-3\">
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                      <span class=\"class-badge\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white;\">
                                        2ème
                                      </span>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">";
            // line 894
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveau2"]) || array_key_exists("niveau2", $context) ? $context["niveau2"] : (function () { throw new RuntimeError('Variable "niveau2" does not exist.', 894, $this->source); })()), "html", null, true);
            yield " classes</h6>
                                      <small class=\"text-muted\">Deuxième année</small>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col-md-3\">
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                      <span class=\"class-badge\" style=\"background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white;\">
                                        3ème
                                      </span>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">";
            // line 907
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveau3"]) || array_key_exists("niveau3", $context) ? $context["niveau3"] : (function () { throw new RuntimeError('Variable "niveau3" does not exist.', 907, $this->source); })()), "html", null, true);
            yield " classes</h6>
                                      <small class=\"text-muted\">Troisième année</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 918
        yield "                  </div>
                </div>
              </div>
            </div>
          
            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Gestion des Classes - ";
        // line 930
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 930, $this->source); })())), "html", null, true);
        yield " classes actives
                  ";
        // line 931
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 931, $this->source); })()), "user", [], "any", false, false, false, 931)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 932
            yield "                    | Connecté: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 932, $this->source); })()), "user", [], "any", false, false, false, 932), "prenom", [], "any", false, false, false, 932), 0, 10), "html", null, true);
            yield "...
                  ";
        }
        // line 934
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
            <p>Êtes-vous sûr de vouloir supprimer la classe <strong id=\"classeNameDisplay\"></strong> ?</p>
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
        // line 975
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 976
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 977
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const niveauFilter = document.getElementById('niveauFilter');
        const filiereFilter = document.getElementById('filiereFilter');
        const sortSelect = document.getElementById('sortSelect');
        const applyFiltersBtn = document.getElementById('applyFilters');
        const resetFiltersBtn = document.getElementById('resetFilters');
        const resultCountSpan = document.getElementById('resultCount');
        const classesTable = document.getElementById('classesTable');

        // Apply filters with AJAX
        // Use AbortController to cancel previous requests and debounce on typing
        function applyFilters() {
          const search = searchInput.value.trim();
          const niveau = niveauFilter.value;
          const filiere = filiereFilter.value;
          const [sort, direction] = sortSelect.value.split('-');

          const params = new URLSearchParams();
          if (search) params.append('search', search);
          if (niveau) params.append('niveau', niveau);
          if (filiere) params.append('filiere', filiere);
          if (sort) params.append('sort', sort);
          if (direction) params.append('direction', direction);

          // Cancel previous request
          if (window.__classeSearchController) {
            try { window.__classeSearchController.abort(); } catch (e) {}
          }
          window.__classeSearchController = new AbortController();

          fetch('";
        // line 1011
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_ajax_filter");
        yield "?' + params.toString(), { signal: window.__classeSearchController.signal })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                updateTable(data.data);
                resultCountSpan.textContent = 'Résultats: ' + data.count;
              }
            })
            .catch(error => {
              if (error.name === 'AbortError') return;
              console.error('Erreur AJAX:', error);
            });
        }

        // Update table with new data
        function updateTable(data) {
          const tbody = classesTable.querySelector('tbody');
          tbody.innerHTML = '';

          if (data.length === 0) {
            tbody.innerHTML = '<tr><td colspan=\"6\" class=\"text-center text-muted py-4\">Aucun résultat trouvé</td></tr>';
            return;
          }

          data.forEach(classe => {
            const row = document.createElement('tr');
            row.innerHTML = `
              <td><span class=\"text-muted\">#\${classe.id}</span></td>
              <td>
                <div class=\"d-flex align-items-center\">
                  <div class=\"class-avatar me-3\">
                    \${classe.nom.substring(0, 2).toUpperCase()}
                  </div>
                  <div>
                    <h6 class=\"mb-0 font-weight-bold\">\${classe.nom}</h6>
                    <small class=\"text-muted\">ID: \${classe.id}</small>
                  </div>
                </div>
              </td>
              <td><strong>\${classe.nom}</strong></td>
              <td>
                <span class=\"class-badge badge-niveau\">
                  <i class=\"mdi mdi-account-group me-1\"></i>
                  \${classe.niveau || '—'}
                </span>
              </td>
              <td>
                <span class=\"class-badge badge-annee\">
                  <i class=\"mdi mdi-calendar me-1\"></i>
                  \${classe.anneeuniversitaire || '—'}
                </span>
              </td>
              <td>
                <div class=\"action-buttons\">
                  <a href=\"\${classe.url}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir détails\">
                    <i class=\"mdi mdi-eye\"></i>
                  </a>
                  <a href=\"\${classe.editUrl}\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\">
                    <i class=\"mdi mdi-pencil\"></i>
                  </a>
                  <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                          data-classe-id=\"\${classe.id}\" data-classe-name=\"\${classe.nom}\"
                          data-csrf-token=\"\${classe.csrfToken}\"
                          title=\"Supprimer\">
                    <i class=\"mdi mdi-delete\"></i>
                  </button>
                </div>
              </td>
            `;
            tbody.appendChild(row);
          });

          // Re-attach delete handlers
          attachDeleteHandlers();
        }

        // Event listeners
        applyFiltersBtn.addEventListener('click', applyFilters);

        resetFiltersBtn.addEventListener('click', function() {
          searchInput.value = '';
          niveauFilter.value = '';
          filiereFilter.value = '';
          sortSelect.value = 'id-asc';
          window.location.href = '";
        // line 1095
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        yield "';
        });

        // Real-time search with debounce and cancellation
        let searchTimeout;
        function scheduleApplyFromInput(value) {
          clearTimeout(searchTimeout);
          searchTimeout = setTimeout(() => { searchInput.value = value; applyFilters(); }, 350);
        }
        searchInput.addEventListener('keyup', function() { scheduleApplyFromInput(this.value); });

        niveauFilter.addEventListener('change', applyFilters);
        filiereFilter.addEventListener('change', applyFilters);
        sortSelect.addEventListener('change', applyFilters);

        // Delete confirmation modal
        function attachDeleteHandlers() {
          const deleteButtons = document.querySelectorAll('.delete-btn');
          deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
              const classeId = this.getAttribute('data-classe-id');
              const classeName = this.getAttribute('data-classe-name');
              const csrfToken = this.getAttribute('data-csrf-token');
              
              document.getElementById('classeNameDisplay').textContent = classeName;
              const deleteForm = document.getElementById('deleteForm');
              deleteForm.action = '/classe/' + classeId;
              
              document.getElementById('csrfToken').value = csrfToken;
              
              const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
              modal.show();
            });
          });
        }

        attachDeleteHandlers();
        
        // Auto-hide alerts after 5 seconds
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "classe/index.html.twig";
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
        return array (  1665 => 1095,  1578 => 1011,  1541 => 977,  1537 => 976,  1533 => 975,  1490 => 934,  1484 => 932,  1482 => 931,  1478 => 930,  1472 => 927,  1461 => 918,  1447 => 907,  1431 => 894,  1415 => 881,  1399 => 868,  1378 => 849,  1364 => 841,  1360 => 840,  1356 => 839,  1346 => 832,  1338 => 827,  1333 => 824,  1329 => 822,  1323 => 819,  1319 => 817,  1317 => 816,  1313 => 814,  1309 => 812,  1303 => 809,  1299 => 807,  1297 => 806,  1291 => 803,  1283 => 798,  1279 => 797,  1273 => 794,  1265 => 789,  1261 => 787,  1257 => 786,  1249 => 780,  1243 => 779,  1236 => 777,  1231 => 774,  1225 => 773,  1218 => 771,  1212 => 767,  1206 => 766,  1199 => 764,  1191 => 758,  1182 => 752,  1176 => 748,  1174 => 747,  1165 => 741,  1147 => 728,  1141 => 727,  1135 => 726,  1129 => 725,  1123 => 724,  1117 => 723,  1110 => 718,  1101 => 715,  1092 => 714,  1088 => 713,  1080 => 707,  1071 => 704,  1062 => 703,  1058 => 702,  1049 => 696,  1032 => 682,  1007 => 660,  1002 => 659,  1000 => 658,  978 => 639,  973 => 638,  971 => 637,  949 => 618,  944 => 617,  942 => 616,  920 => 597,  916 => 596,  902 => 584,  897 => 581,  893 => 579,  891 => 578,  887 => 577,  881 => 576,  876 => 573,  874 => 572,  854 => 554,  848 => 553,  838 => 549,  834 => 548,  829 => 547,  824 => 546,  819 => 545,  796 => 525,  781 => 513,  767 => 503,  765 => 502,  761 => 500,  756 => 497,  752 => 495,  748 => 493,  744 => 491,  742 => 490,  737 => 488,  730 => 487,  728 => 486,  721 => 481,  714 => 478,  708 => 474,  704 => 472,  700 => 470,  698 => 469,  690 => 466,  686 => 464,  679 => 461,  676 => 460,  670 => 457,  665 => 456,  663 => 455,  660 => 454,  658 => 453,  625 => 423,  613 => 414,  595 => 399,  562 => 369,  529 => 339,  516 => 329,  503 => 319,  498 => 316,  487 => 308,  484 => 307,  473 => 299,  470 => 298,  468 => 297,  447 => 278,  442 => 275,  438 => 273,  434 => 271,  430 => 269,  428 => 268,  423 => 266,  416 => 265,  414 => 264,  409 => 261,  403 => 259,  400 => 258,  393 => 255,  390 => 254,  384 => 251,  379 => 250,  376 => 249,  374 => 248,  363 => 240,  359 => 239,  354 => 237,  350 => 236,  130 => 19,  126 => 18,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Classes{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Classes</title>
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
      
      .class-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
      }
      
      .badge-niveau {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      .badge-annee {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
      }
      
      .action-buttons .btn {
        padding: 5px 10px;
        margin: 0 2px;
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
      
      .class-avatar {
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
      }
      
      /* Profile styles */
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
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
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
            <a class=\"nav-link\" href=\"{{ path('app_matiere_classe_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items active\">
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une classe...\" id=\"searchInput\" name=\"nom\" value=\"{{ nom|default('') }}\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\">2</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-success rounded-circle\">
                        <i class=\"mdi mdi-school\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvelle classe</p>
                      <p class=\"text-muted ellipsis mb-0\">Classe GL2025 créée</p>
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
                      <i class=\"mdi mdi-school\"></i>
                    </span> 
                    Gestion des Classes
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste des classes ESPRIT
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
                          <h3 class=\"mb-0 stat-count\">{{ classes|length }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ random(2, 8) }}%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-school\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Classes</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set niveau1 = classes|filter(c => c.niveau == '1ère année')|length %}
                          <h3 class=\"mb-0 stat-count text-dark\">{{ niveau1 }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ random(5, 15) }}%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-numeric-1-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">1ère Année</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set niveau2 = classes|filter(c => c.niveau == '2ème année')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ niveau2 }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ random(3, 10) }}%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-numeric-2-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">2ème Année</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set niveau3 = classes|filter(c => c.niveau == '3ème année')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ niveau3 }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ random(1, 5) }}%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-numeric-3-box\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">3ème Année</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Classes Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">🏫 Liste des Classes</h4>
                      <a href=\"{{ path('app_classe_new') }}\" class=\"btn btn-gradient-primary btn-icon-text\">
                        <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                        Nouvelle Classe
                      </a>
                    </div>

                    <!-- Filters Panel -->
                    <div class=\"card mb-3\" style=\"background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: none; border-radius: 10px;\">
                      <div class=\"card-body\">
                        <h6 class=\"card-title mb-3\"><i class=\"mdi mdi-filter me-2\"></i>Filtres et Recherche</h6>
                        <div class=\"row g-2\">
                          <div class=\"col-md-3\">
                            <label class=\"small text-muted\">Rechercher</label>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Nom, niveau, filière...\"
                                   value=\"{{ search }}\">
                          </div>
                          <div class=\"col-md-3\">
                            <label class=\"small text-muted\">Niveau</label>
                            <select id=\"niveauFilter\" class=\"form-control\" style=\"cursor: pointer;\">
                              <option value=\"\">-- Tous les niveaux --</option>
                              {% for niveau in niveaux %}
                                <option value=\"{{ niveau.niveau }}\" {% if niveau.niveau == filiere %}selected{% endif %}>
                                  {{ niveau.niveau }}
                                </option>
                              {% endfor %}
                            </select>
                          </div>
                          <div class=\"col-md-3\">
                            <label class=\"small text-muted\">Filière</label>
                            <select id=\"filiereFilter\" class=\"form-control\" style=\"cursor: pointer;\">
                              <option value=\"\">-- Toutes les filières --</option>
                              {% for fil in filieres %}
                                <option value=\"{{ fil.filiere }}\" {% if fil.filiere == filiere %}selected{% endif %}>
                                  {{ fil.filiere }}
                                </option>
                              {% endfor %}
                            </select>
                          </div>
                          <div class=\"col-md-3\">
                            <label class=\"small text-muted\">Tri</label>
                            <select id=\"sortSelect\" class=\"form-control\" style=\"cursor: pointer;\">
                              <option value=\"id-asc\" {% if sort == 'id' and direction == 'asc' %}selected{% endif %}>ID (croissant)</option>
                              <option value=\"id-desc\" {% if sort == 'id' and direction == 'desc' %}selected{% endif %}>ID (décroissant)</option>
                              <option value=\"nom-asc\" {% if sort == 'nom' and direction == 'asc' %}selected{% endif %}>Nom (A-Z)</option>
                              <option value=\"nom-desc\" {% if sort == 'nom' and direction == 'desc' %}selected{% endif %}>Nom (Z-A)</option>
                              <option value=\"niveau-asc\" {% if sort == 'niveau' and direction == 'asc' %}selected{% endif %}>Niveau (croissant)</option>
                              <option value=\"niveau-desc\" {% if sort == 'niveau' and direction == 'desc' %}selected{% endif %}>Niveau (décroissant)</option>
                            </select>
                          </div>
                        </div>
                        <div class=\"row g-2 mt-2\">
                          <div class=\"col-12\">
                           <button id=\"applyFilters\" class=\"btn btn-sm btn-gradient-primary text-dark\">
  <i class=\"mdi mdi-magnify me-1 text-dark\"></i>Appliquer les filtres
</button>

                            <button id=\"resetFilters\" class=\"btn btn-sm btn-outline-secondary\">
                              <i class=\"mdi mdi-close me-1\"></i>Réinitialiser
                            </button>
                            <small class=\"text-muted ms-2\" id=\"resultCount\">Résultats: {{ classes|length }}</small>
                          </div>
                        </div>
                      </div>
                    </div>

                    {% if classes is empty %}
                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-school-outline\"></i>
                        <h4 class=\"text-muted\">Aucune classe trouvée</h4>
                        <p class=\"text-muted mb-4\">Commencez par créer une nouvelle classe</p>
                        <a href=\"{{ path('app_classe_new') }}\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Créer la première classe
                        </a>
                      </div>
                    {% else %}
                      <div class=\"table-responsive\" id=\"classeTableContainer\">
                        <table class=\"table table-hover\" id=\"classesTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>
                                <a href=\"{{ path('app_classe_index', {sort: sort == 'nom_asc' ? 'nom_desc' : 'nom_asc'}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'nom_asc' ? 'nom_desc' : 'nom_asc' }}\">
                                  Classe
                                  {% if sort == 'nom_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'nom_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
                                </a>
                              </th>
                              <th>Nom Complet</th>
                              <th>
                                <a href=\"{{ path('app_classe_index', {sort: sort == 'niveau_asc' ? 'niveau_desc' : 'niveau_asc'}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'niveau_asc' ? 'niveau_desc' : 'niveau_asc' }}\">
                                  Niveau
                                  {% if sort == 'niveau_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'niveau_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
                                </a>
                              </th>
                              <th>
                                <a href=\"{{ path('app_classe_index', {sort: sort == 'anneeuniversitaire_asc' ? 'anneeuniversitaire_desc' : 'anneeuniversitaire_asc'}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'anneeuniversitaire_asc' ? 'anneeuniversitaire_desc' : 'anneeuniversitaire_asc' }}\">
                                  Année Universitaire
                                  {% if sort == 'anneeuniversitaire_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'anneeuniversitaire_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
                                </a>
                              </th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            {% for classe in classes %}
                              <tr>
                                <td>
                                  <span class=\"text-muted\">#{{ classe.id }}</span>
                                </td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"class-avatar me-3\">
                                      {{ classe.nom|slice(0, 2)|upper }}
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0 font-weight-bold\">{{ classe.nom }}</h6>
                                      <small class=\"text-muted\">Classe ID: {{ classe.id }}</small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <strong>{{ classe.nom }}</strong>
                                </td>
                                <td>
                                  {% if classe.niveau %}
                                    <span class=\"class-badge badge-niveau\">
                                      <i class=\"mdi mdi-account-group me-1\"></i>
                                      {{ classe.niveau }}
                                    </span>
                                  {% else %}
                                    <span class=\"text-muted\">—</span>
                                  {% endif %}
                                </td>
                                <td>
                                  {% if classe.anneeuniversitaire %}
                                    <span class=\"class-badge badge-annee\">
                                      <i class=\"mdi mdi-calendar me-1\"></i>
                                      {{ classe.anneeuniversitaire }}
                                    </span>
                                  {% else %}
                                    <span class=\"text-muted\">—</span>
                                  {% endif %}
                                </td>
                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"{{ path('app_classe_show', {'id': classe.id}) }}\" 
                                       class=\"btn btn-info btn-sm btn-icon\"
                                       title=\"Voir détails\">
                                      <i class=\"mdi mdi-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_classe_edit', {'id': classe.id}) }}\" 
                                       class=\"btn btn-warning btn-sm btn-icon\"
                                       title=\"Modifier\">
                                      <i class=\"mdi mdi-pencil\"></i>
                                    </a>
                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                                            data-classe-id=\"{{ classe.id }}\"
                                            data-classe-name=\"{{ classe.nom }}\"
                                            data-csrf-token=\"{{ csrf_token('delete' ~ classe.id) }}\"
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
                      
                      <!-- Quick Stats -->
                      <div class=\"row mt-4\">
                        <div class=\"col-md-12\">
                          <div class=\"card\">
                            <div class=\"card-body\">
                              <h5 class=\"card-title\">📊 Vue d'ensemble des classes</h5>
                              <div class=\"row\">
                                <div class=\"col-md-3\">
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                      <span class=\"class-badge badge-niveau\">
                                        Total
                                      </span>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">{{ classes|length }} classes</h6>
                                      <small class=\"text-muted\">Actives</small>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col-md-3\">
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                      <span class=\"class-badge\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                                        1ère
                                      </span>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">{{ niveau1 }} classes</h6>
                                      <small class=\"text-muted\">Première année</small>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col-md-3\">
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                      <span class=\"class-badge\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white;\">
                                        2ème
                                      </span>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">{{ niveau2 }} classes</h6>
                                      <small class=\"text-muted\">Deuxième année</small>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col-md-3\">
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"me-3\">
                                      <span class=\"class-badge\" style=\"background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white;\">
                                        3ème
                                      </span>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0\">{{ niveau3 }} classes</h6>
                                      <small class=\"text-muted\">Troisième année</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    {% endif %}
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
                  Gestion des Classes - {{ classes|length }} classes actives
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
            <p>Êtes-vous sûr de vouloir supprimer la classe <strong id=\"classeNameDisplay\"></strong> ?</p>
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
        const searchInput = document.getElementById('searchInput');
        const niveauFilter = document.getElementById('niveauFilter');
        const filiereFilter = document.getElementById('filiereFilter');
        const sortSelect = document.getElementById('sortSelect');
        const applyFiltersBtn = document.getElementById('applyFilters');
        const resetFiltersBtn = document.getElementById('resetFilters');
        const resultCountSpan = document.getElementById('resultCount');
        const classesTable = document.getElementById('classesTable');

        // Apply filters with AJAX
        // Use AbortController to cancel previous requests and debounce on typing
        function applyFilters() {
          const search = searchInput.value.trim();
          const niveau = niveauFilter.value;
          const filiere = filiereFilter.value;
          const [sort, direction] = sortSelect.value.split('-');

          const params = new URLSearchParams();
          if (search) params.append('search', search);
          if (niveau) params.append('niveau', niveau);
          if (filiere) params.append('filiere', filiere);
          if (sort) params.append('sort', sort);
          if (direction) params.append('direction', direction);

          // Cancel previous request
          if (window.__classeSearchController) {
            try { window.__classeSearchController.abort(); } catch (e) {}
          }
          window.__classeSearchController = new AbortController();

          fetch('{{ path(\"app_classe_ajax_filter\") }}?' + params.toString(), { signal: window.__classeSearchController.signal })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                updateTable(data.data);
                resultCountSpan.textContent = 'Résultats: ' + data.count;
              }
            })
            .catch(error => {
              if (error.name === 'AbortError') return;
              console.error('Erreur AJAX:', error);
            });
        }

        // Update table with new data
        function updateTable(data) {
          const tbody = classesTable.querySelector('tbody');
          tbody.innerHTML = '';

          if (data.length === 0) {
            tbody.innerHTML = '<tr><td colspan=\"6\" class=\"text-center text-muted py-4\">Aucun résultat trouvé</td></tr>';
            return;
          }

          data.forEach(classe => {
            const row = document.createElement('tr');
            row.innerHTML = `
              <td><span class=\"text-muted\">#\${classe.id}</span></td>
              <td>
                <div class=\"d-flex align-items-center\">
                  <div class=\"class-avatar me-3\">
                    \${classe.nom.substring(0, 2).toUpperCase()}
                  </div>
                  <div>
                    <h6 class=\"mb-0 font-weight-bold\">\${classe.nom}</h6>
                    <small class=\"text-muted\">ID: \${classe.id}</small>
                  </div>
                </div>
              </td>
              <td><strong>\${classe.nom}</strong></td>
              <td>
                <span class=\"class-badge badge-niveau\">
                  <i class=\"mdi mdi-account-group me-1\"></i>
                  \${classe.niveau || '—'}
                </span>
              </td>
              <td>
                <span class=\"class-badge badge-annee\">
                  <i class=\"mdi mdi-calendar me-1\"></i>
                  \${classe.anneeuniversitaire || '—'}
                </span>
              </td>
              <td>
                <div class=\"action-buttons\">
                  <a href=\"\${classe.url}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir détails\">
                    <i class=\"mdi mdi-eye\"></i>
                  </a>
                  <a href=\"\${classe.editUrl}\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\">
                    <i class=\"mdi mdi-pencil\"></i>
                  </a>
                  <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                          data-classe-id=\"\${classe.id}\" data-classe-name=\"\${classe.nom}\"
                          data-csrf-token=\"\${classe.csrfToken}\"
                          title=\"Supprimer\">
                    <i class=\"mdi mdi-delete\"></i>
                  </button>
                </div>
              </td>
            `;
            tbody.appendChild(row);
          });

          // Re-attach delete handlers
          attachDeleteHandlers();
        }

        // Event listeners
        applyFiltersBtn.addEventListener('click', applyFilters);

        resetFiltersBtn.addEventListener('click', function() {
          searchInput.value = '';
          niveauFilter.value = '';
          filiereFilter.value = '';
          sortSelect.value = 'id-asc';
          window.location.href = '{{ path(\"app_classe_index\") }}';
        });

        // Real-time search with debounce and cancellation
        let searchTimeout;
        function scheduleApplyFromInput(value) {
          clearTimeout(searchTimeout);
          searchTimeout = setTimeout(() => { searchInput.value = value; applyFilters(); }, 350);
        }
        searchInput.addEventListener('keyup', function() { scheduleApplyFromInput(this.value); });

        niveauFilter.addEventListener('change', applyFilters);
        filiereFilter.addEventListener('change', applyFilters);
        sortSelect.addEventListener('change', applyFilters);

        // Delete confirmation modal
        function attachDeleteHandlers() {
          const deleteButtons = document.querySelectorAll('.delete-btn');
          deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
              const classeId = this.getAttribute('data-classe-id');
              const classeName = this.getAttribute('data-classe-name');
              const csrfToken = this.getAttribute('data-csrf-token');
              
              document.getElementById('classeNameDisplay').textContent = classeName;
              const deleteForm = document.getElementById('deleteForm');
              deleteForm.action = '/classe/' + classeId;
              
              document.getElementById('csrfToken').value = csrfToken;
              
              const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
              modal.show();
            });
          });
        }

        attachDeleteHandlers();
        
        // Auto-hide alerts after 5 seconds
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
{% endblock %}", "classe/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\index.html.twig");
    }
}
