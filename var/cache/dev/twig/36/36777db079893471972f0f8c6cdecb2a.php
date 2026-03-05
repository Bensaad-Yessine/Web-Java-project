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

/* matiere_classe/new.html.twig */
class __TwigTemplate_b83f376bc3908cc85c83c044cbf59cfc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/new.html.twig"));

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

        yield "Nouvelle Matière";
        
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
    <title>ESPRIT - Nouvelle Matière</title>
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
      .card-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      
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
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
      }
      
      .form-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
      }
      
      .form-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px;
      }
      
      .form-icon {
        width: 70px;
        height: 70px;
        border-radius: 15px;
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        margin: 0 auto 15px;
      }
      
      .required-field::after {
        content: \" *\";
        color: #dc3545;
      }
      
      .complexity-slider {
        -webkit-appearance: none;
        width: 100%;
        height: 8px;
        border-radius: 4px;
        background: #e9ecef;
        outline: none;
        margin: 15px 0;
      }
      
      .complexity-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        cursor: pointer;
        border: 3px solid white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }
      
      .complexity-slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        cursor: pointer;
        border: 3px solid white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }
      
      .complexity-value {
        font-size: 1.2rem;
        font-weight: bold;
        color: #667eea;
      }
      
      .complexity-labels {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
        font-size: 0.8rem;
        color: #6c757d;
      }
      
      /* Matiere specific styles */
      .matiere-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
      }
      
      .badge-coefficient {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      .badge-charge {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
      }
      
      .badge-complexite {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 250
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 251
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
        // line 259
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "user", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 260
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "user", [], "any", false, false, false, 260), "profilePic", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 261
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 261, $this->source); })()), "user", [], "any", false, false, false, 261), "profilePic", [], "any", false, false, false, 261))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 262, $this->source); })()), "user", [], "any", false, false, false, 262), "prenom", [], "any", false, false, false, 262), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 265
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "user", [], "any", false, false, false, 266), "prenom", [], "any", false, false, false, 266))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "user", [], "any", false, false, false, 266), "nom", [], "any", false, false, false, 266))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 269
            yield "                  ";
        } else {
            // line 270
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 272
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 275
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "user", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 276
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "user", [], "any", false, false, false, 276), "prenom", [], "any", false, false, false, 276), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "user", [], "any", false, false, false, 276), "nom", [], "any", false, false, false, 276), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "user", [], "any", false, false, false, 277), "email", [], "any", false, false, false, 277), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 279
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "user", [], "any", false, false, false, 279), "roles", [], "any", false, false, false, 279))) {
                // line 280
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 282
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 284
            yield "                    </div>
                  ";
        } else {
            // line 286
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 289
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
        // line 309
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-group\"></i>
              </span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          
          <!-- Matières -->
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 319
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matières</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items\">
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
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-info rounded-circle\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvelle matière</p>
                      <p class=\"text-muted ellipsis mb-0\">Formulaire de création</p>
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
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span> 
                    Création d'une Nouvelle Matière
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 568
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-arrow-left me-1\"></i>Retour à la liste
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Nouvelle matière
                      </li>
                    </ul>
                  </nav>
                  ";
        // line 577
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 577, $this->source); })()), "user", [], "any", false, false, false, 577)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 578
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 581
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 581, $this->source); })()), "user", [], "any", false, false, false, 581), "prenom", [], "any", false, false, false, 581), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 581, $this->source); })()), "user", [], "any", false, false, false, 581), "nom", [], "any", false, false, false, 581), "html", null, true);
            yield "</strong>
                        (";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 582, $this->source); })()), "user", [], "any", false, false, false, 582), "email", [], "any", false, false, false, 582), "html", null, true);
            yield ")
                        ";
            // line 583
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 583, $this->source); })()), "user", [], "any", false, false, false, 583), "roles", [], "any", false, false, false, 583))) {
                // line 584
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 586
            yield "                      </small>
                    </div>
                  ";
        }
        // line 589
        yield "                </div>
              </div>
            </div>
            
            <!-- Form -->
            <div class=\"row\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card form-card\">
                  <div class=\"form-header\">
                    <div class=\"form-icon\">
                      <i class=\"mdi mdi-book-plus\"></i>
                    </div>
                    <h4 class=\"text-center mb-0\">📘 Formulaire de création de matière</h4>
                    <p class=\"text-center mb-0 opacity-75\">
                      Remplissez les informations de la nouvelle matière
                    </p>
                  </div>
                  <div class=\"card-body\">
                    ";
        // line 607
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 607, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample", "novalidate" => "novalidate"]]);
        yield "
                    
                    <!-- Nom et Description -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Nom de la matière</label>
                          ";
        // line 614
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 614, $this->source); })()), "nom", [], "any", false, false, false, 614), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Algorithmique"]]);
        // line 617
        yield "
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-format-title me-1\"></i>
                            Le nom officiel de la matière
                          </small>
                          ";
        // line 622
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 622, $this->source); })()), "nom", [], "any", false, false, false, 622), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 623
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 624
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 624, $this->source); })()), "nom", [], "any", false, false, false, 624), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 627
        yield "                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Description</label>
                          ";
        // line 632
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 632, $this->source); })()), "description", [], "any", false, false, false, 632), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Introduction aux algorithmes..."]]);
        // line 635
        yield "
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-text me-1\"></i>
                            Brève description du contenu
                          </small>
                          ";
        // line 640
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 640, $this->source); })()), "description", [], "any", false, false, false, 640), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 641
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 642
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 642, $this->source); })()), "description", [], "any", false, false, false, 642), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 645
        yield "                        </div>
                      </div>
                    </div>

                    <!-- Coefficient -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Coefficient</label>
                          ";
        // line 654
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 654, $this->source); })()), "coefficient", [], "any", false, false, false, 654), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 2.5", "step" => "0.1", "min" => "0.1"]]);
        // line 659
        yield "
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-information me-1\"></i>
                            Poids de la matière dans le calcul de la moyenne
                          </small>
                          ";
        // line 664
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 664, $this->source); })()), "coefficient", [], "any", false, false, false, 664), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 665
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 666
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 666, $this->source); })()), "coefficient", [], "any", false, false, false, 666), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 669
        yield "                        </div>
                      </div>
                      
                      <!-- Charge Horaire -->
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Charge horaire (heures)</label>
                          ";
        // line 676
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 676, $this->source); })()), "chargehoraire", [], "any", false, false, false, 676), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 30", "min" => "1"]]);
        // line 680
        yield "
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-clock-outline me-1\"></i>
                            Nombre total d'heures pour cette matière
                          </small>
                          ";
        // line 685
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 685, $this->source); })()), "chargehoraire", [], "any", false, false, false, 685), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 686
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 687
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 687, $this->source); })()), "chargehoraire", [], "any", false, false, false, 687), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 690
        yield "                        </div>
                      </div>
                    </div>
                    
                    <!-- Score de Complexité -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Score de complexité</label>
                          ";
        // line 699
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 699, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 699), 'widget', ["attr" => ["class" => "form-control complexity-slider", "type" => "range", "min" => "1", "max" => "10"]]);
        // line 704
        yield "
                          <div class=\"d-flex justify-content-between align-items-center mt-2\">
                            <span class=\"complexity-value\" id=\"complexityValue\">5</span>
                            <div class=\"complexity-labels\">
                              <span>Faible</span>
                              <span>Moyen</span>
                              <span>Élevé</span>
                            </div>
                          </div>
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-chart-line me-1\"></i>
                            Niveau de difficulté de la matière (1-10)
                          </small>
                          ";
        // line 717
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 717, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 717), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 718
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 719
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 719, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 719), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 722
        yield "                        </div>
                      </div>
                    </div>
                    
                    <!-- Classes associées -->
                    <div class=\"row mt-4\">
                      <div class=\"col-md-12\">
                        <div class=\"card\">
                          <div class=\"card-header bg-light\">
                            <h5 class=\"mb-0 text-dark\">
                              <i class=\"mdi mdi-school me-2 text-dark\"></i>
                              Classes associées (optionnel)
                            </h5>
                          </div>
                          <div class=\"card-body\">
                            <div class=\"form-group\">
                              ";
        // line 738
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 738, $this->source); })()), "classes", [], "any", false, false, false, 738), 'widget', ["attr" => ["class" => "form-control", "size" => "5"]]);
        // line 741
        yield "
                              <small class=\"form-text text-muted\">
                                <i class=\"mdi mdi-information me-1\"></i>
                                Sélectionnez les classes qui suivront cette matière (Maintenez Ctrl/Cmd pour sélection multiple)
                              </small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class=\"row mt-4\">
                      <div class=\"col-md-12\">
                        <div class=\"d-flex justify-content-between\">
                          <a href=\"";
        // line 756
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\" class=\"btn btn-light\">
                            <i class=\"mdi mdi-arrow-left me-1\"></i>Annuler
                          </a>
                          <button type=\"submit\" class=\"btn btn-gradient-primary\">
                            <i class=\"mdi mdi-content-save me-1\"></i>Créer la matière
                          </button>
                        </div>
                      </div>
                    </div>
                    
                    ";
        // line 766
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 766, $this->source); })()), 'form_end');
        yield "
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Quick Tips -->
            <div class=\"row mt-4\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">
                      <i class=\"mdi mdi-lightbulb-on me-2\"></i>Conseils de création
                    </h5>
                    <div class=\"row\">
                      <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center mb-3\">
                          <div class=\"me-3 text-primary\">
                            <i class=\"mdi mdi-weight\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-0\">Coefficient</h6>
                            <small class=\"text-muted\">Typiquement entre 1 et 4</small>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center mb-3\">
                          <div class=\"me-3 text-success\">
                            <i class=\"mdi mdi-clock-outline\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-0\">Charge horaire</h6>
                            <small class=\"text-muted\">Entre 20h et 60h par semestre</small>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center mb-3\">
                          <div class=\"me-3 text-info\">
                            <i class=\"mdi mdi-chart-line\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-0\">Complexité</h6>
                            <small class=\"text-muted\">Évaluez la difficulté (1-10)</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Footer -->
            <footer class=\"footer mt-4\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Création de matière
                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 838
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 839
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
        
        // Complexity slider update
        const complexitySlider = document.getElementById('";
        // line 853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 853, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 853), "vars", [], "any", false, false, false, 853), "id", [], "any", false, false, false, 853), "html", null, true);
        yield "');
        const complexityValue = document.getElementById('complexityValue');
        
        if (complexitySlider && complexityValue) {
          // Update value display
          complexityValue.textContent = complexitySlider.value;
          
          // Update on slider change
          complexitySlider.addEventListener('input', function() {
            complexityValue.textContent = this.value;
          });
        }
        
        // Form validation
        const form = document.querySelector('form');
        if (form) {
          form.addEventListener('submit', function(e) {
            const coefficientInput = document.getElementById('";
        // line 870
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), "coefficient", [], "any", false, false, false, 870), "vars", [], "any", false, false, false, 870), "id", [], "any", false, false, false, 870), "html", null, true);
        yield "');
            const chargeInput = document.getElementById('";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 871, $this->source); })()), "chargehoraire", [], "any", false, false, false, 871), "vars", [], "any", false, false, false, 871), "id", [], "any", false, false, false, 871), "html", null, true);
        yield "');
            const complexityInput = document.getElementById('";
        // line 872
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 872, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 872), "vars", [], "any", false, false, false, 872), "id", [], "any", false, false, false, 872), "html", null, true);
        yield "');
            
            let isValid = true;
            
            // Validate coefficient
            if (!coefficientInput.value || parseFloat(coefficientInput.value) <= 0) {
              isValid = false;
              coefficientInput.classList.add('is-invalid');
            } else {
              coefficientInput.classList.remove('is-invalid');
            }
            
            // Validate charge horaire
            if (!chargeInput.value || parseInt(chargeInput.value) <= 0) {
              isValid = false;
              chargeInput.classList.add('is-invalid');
            } else {
              chargeInput.classList.remove('is-invalid');
            }
            
            // Validate complexity
            if (!complexityInput.value || parseInt(complexityInput.value) < 1 || parseInt(complexityInput.value) > 10) {
              isValid = false;
              complexityInput.classList.add('is-invalid');
            } else {
              complexityInput.classList.remove('is-invalid');
            }
            
            const nomInput = document.getElementById('";
        // line 900
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 900, $this->source); })()), "nom", [], "any", false, false, false, 900), "vars", [], "any", false, false, false, 900), "id", [], "any", false, false, false, 900), "html", null, true);
        yield "');
            const descriptionInput = document.getElementById('";
        // line 901
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 901, $this->source); })()), "description", [], "any", false, false, false, 901), "vars", [], "any", false, false, false, 901), "id", [], "any", false, false, false, 901), "html", null, true);
        yield "');
            
            // Validate Nom
            if (!nomInput.value || nomInput.value.length < 3) {
              isValid = false;
              nomInput.classList.add('is-invalid');
            } else {
              nomInput.classList.remove('is-invalid');
            }

            // Validate Description
            if (!descriptionInput.value || descriptionInput.value.length < 10) {
              isValid = false;
              descriptionInput.classList.add('is-invalid');
            } else {
              descriptionInput.classList.remove('is-invalid');
            }

            if (!isValid) {
              e.preventDefault();
              
              // Clear previous alerts
              const existingAlert = document.querySelector('.card-body .alert-danger');
              if (existingAlert) existingAlert.remove();

              // Show error message
              const errorDiv = document.createElement('div');
              errorDiv.className = 'alert alert-danger alert-dismissible fade show mt-3';
              errorDiv.innerHTML = `
                <i class=\"mdi mdi-alert-circle me-2\"></i>
                Veuillez corriger les erreurs dans le formulaire.
                <ul class=\"mb-0 mt-2\">
                   \${(!nomInput.value || nomInput.value.length < 3) ? '<li>Le nom doit contenir au moins 3 caractères.</li>' : ''}
                   \${(!descriptionInput.value || descriptionInput.value.length < 10) ? '<li>La description doit contenir au moins 10 caractères.</li>' : ''}
                   \${(!coefficientInput.value || parseFloat(coefficientInput.value) <= 0) ? '<li>Le coefficient doit être valide.</li>' : ''}
                   \${(!chargeInput.value || parseInt(chargeInput.value) <= 0) ? '<li>La charge horaire doit être valide.</li>' : ''}
                </ul>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              `;
              
              const formBody = document.querySelector('.card-body');
              formBody.insertBefore(errorDiv, formBody.firstChild);
              
              // Scroll to error
              errorDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
          });
        }
        
        // Set default complexity to 5 if empty
        if (complexitySlider && !complexitySlider.value) {
          complexitySlider.value = 5;
          if (complexityValue) {
            complexityValue.textContent = '5';
          }
        }
        
        // Add visual feedback for selected classes
        const classesSelect = document.getElementById('";
        // line 959
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 959, $this->source); })()), "classes", [], "any", false, false, false, 959), "vars", [], "any", false, false, false, 959), "id", [], "any", false, false, false, 959), "html", null, true);
        yield "');
        if (classesSelect) {
          classesSelect.addEventListener('change', function() {
            const selectedCount = Array.from(this.selectedOptions).length;
            if (selectedCount > 0) {
              this.style.borderColor = '#4facfe';
              this.style.boxShadow = '0 0 0 0.2rem rgba(79, 172, 254, 0.25)';
            } else {
              this.style.borderColor = '';
              this.style.boxShadow = '';
            }
          });
        }
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
        return "matiere_classe/new.html.twig";
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
        return array (  1349 => 959,  1288 => 901,  1284 => 900,  1253 => 872,  1249 => 871,  1245 => 870,  1225 => 853,  1208 => 839,  1204 => 838,  1200 => 837,  1184 => 824,  1123 => 766,  1110 => 756,  1093 => 741,  1091 => 738,  1073 => 722,  1067 => 719,  1064 => 718,  1062 => 717,  1047 => 704,  1045 => 699,  1034 => 690,  1028 => 687,  1025 => 686,  1023 => 685,  1016 => 680,  1014 => 676,  1005 => 669,  999 => 666,  996 => 665,  994 => 664,  987 => 659,  985 => 654,  974 => 645,  968 => 642,  965 => 641,  963 => 640,  956 => 635,  954 => 632,  947 => 627,  941 => 624,  938 => 623,  936 => 622,  929 => 617,  927 => 614,  917 => 607,  897 => 589,  892 => 586,  888 => 584,  886 => 583,  882 => 582,  876 => 581,  871 => 578,  869 => 577,  857 => 568,  841 => 554,  835 => 553,  825 => 549,  821 => 548,  816 => 547,  811 => 546,  806 => 545,  783 => 525,  768 => 513,  754 => 503,  752 => 502,  748 => 500,  743 => 497,  739 => 495,  735 => 493,  731 => 491,  729 => 490,  724 => 488,  717 => 487,  715 => 486,  708 => 481,  701 => 478,  695 => 474,  691 => 472,  687 => 470,  685 => 469,  677 => 466,  673 => 464,  666 => 461,  663 => 460,  657 => 457,  652 => 456,  650 => 455,  647 => 454,  645 => 453,  603 => 414,  585 => 399,  552 => 369,  519 => 339,  506 => 329,  493 => 319,  480 => 309,  458 => 289,  453 => 286,  449 => 284,  445 => 282,  441 => 280,  439 => 279,  434 => 277,  427 => 276,  425 => 275,  420 => 272,  414 => 270,  411 => 269,  404 => 266,  401 => 265,  395 => 262,  390 => 261,  387 => 260,  385 => 259,  374 => 251,  370 => 250,  365 => 248,  361 => 247,  130 => 19,  126 => 18,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Matière{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Nouvelle Matière</title>
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
      .card-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      
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
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
      }
      
      .form-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
      }
      
      .form-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px;
      }
      
      .form-icon {
        width: 70px;
        height: 70px;
        border-radius: 15px;
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        margin: 0 auto 15px;
      }
      
      .required-field::after {
        content: \" *\";
        color: #dc3545;
      }
      
      .complexity-slider {
        -webkit-appearance: none;
        width: 100%;
        height: 8px;
        border-radius: 4px;
        background: #e9ecef;
        outline: none;
        margin: 15px 0;
      }
      
      .complexity-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        cursor: pointer;
        border: 3px solid white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }
      
      .complexity-slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        cursor: pointer;
        border: 3px solid white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }
      
      .complexity-value {
        font-size: 1.2rem;
        font-weight: bold;
        color: #667eea;
      }
      
      .complexity-labels {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
        font-size: 0.8rem;
        color: #6c757d;
      }
      
      /* Matiere specific styles */
      .matiere-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
      }
      
      .badge-coefficient {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      .badge-charge {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
      }
      
      .badge-complexite {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
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
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"{{ path('app_matiere_classe_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matières</span>
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
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-info rounded-circle\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvelle matière</p>
                      <p class=\"text-muted ellipsis mb-0\">Formulaire de création</p>
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
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span> 
                    Création d'une Nouvelle Matière
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_matiere_classe_index') }}\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-arrow-left me-1\"></i>Retour à la liste
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Nouvelle matière
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
            
            <!-- Form -->
            <div class=\"row\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card form-card\">
                  <div class=\"form-header\">
                    <div class=\"form-icon\">
                      <i class=\"mdi mdi-book-plus\"></i>
                    </div>
                    <h4 class=\"text-center mb-0\">📘 Formulaire de création de matière</h4>
                    <p class=\"text-center mb-0 opacity-75\">
                      Remplissez les informations de la nouvelle matière
                    </p>
                  </div>
                  <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'form-sample', 'novalidate': 'novalidate'}}) }}
                    
                    <!-- Nom et Description -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Nom de la matière</label>
                          {{ form_widget(form.nom, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'Ex: Algorithmique'
                          }}) }}
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-format-title me-1\"></i>
                            Le nom officiel de la matière
                          </small>
                          {% if form_errors(form.nom) %}
                            <div class=\"text-danger mt-1\">
                              {{ form_errors(form.nom) }}
                            </div>
                          {% endif %}
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Description</label>
                          {{ form_widget(form.description, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'Ex: Introduction aux algorithmes...'
                          }}) }}
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-text me-1\"></i>
                            Brève description du contenu
                          </small>
                          {% if form_errors(form.description) %}
                            <div class=\"text-danger mt-1\">
                              {{ form_errors(form.description) }}
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>

                    <!-- Coefficient -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Coefficient</label>
                          {{ form_widget(form.coefficient, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'Ex: 2.5',
                            'step': '0.1',
                            'min': '0.1'
                          }}) }}
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-information me-1\"></i>
                            Poids de la matière dans le calcul de la moyenne
                          </small>
                          {% if form_errors(form.coefficient) %}
                            <div class=\"text-danger mt-1\">
                              {{ form_errors(form.coefficient) }}
                            </div>
                          {% endif %}
                        </div>
                      </div>
                      
                      <!-- Charge Horaire -->
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Charge horaire (heures)</label>
                          {{ form_widget(form.chargehoraire, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'Ex: 30',
                            'min': '1'
                          }}) }}
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-clock-outline me-1\"></i>
                            Nombre total d'heures pour cette matière
                          </small>
                          {% if form_errors(form.chargehoraire) %}
                            <div class=\"text-danger mt-1\">
                              {{ form_errors(form.chargehoraire) }}
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    
                    <!-- Score de Complexité -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Score de complexité</label>
                          {{ form_widget(form.scorecomplexite, {'attr': {
                            'class': 'form-control complexity-slider',
                            'type': 'range',
                            'min': '1',
                            'max': '10'
                          }}) }}
                          <div class=\"d-flex justify-content-between align-items-center mt-2\">
                            <span class=\"complexity-value\" id=\"complexityValue\">5</span>
                            <div class=\"complexity-labels\">
                              <span>Faible</span>
                              <span>Moyen</span>
                              <span>Élevé</span>
                            </div>
                          </div>
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-chart-line me-1\"></i>
                            Niveau de difficulté de la matière (1-10)
                          </small>
                          {% if form_errors(form.scorecomplexite) %}
                            <div class=\"text-danger mt-1\">
                              {{ form_errors(form.scorecomplexite) }}
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    
                    <!-- Classes associées -->
                    <div class=\"row mt-4\">
                      <div class=\"col-md-12\">
                        <div class=\"card\">
                          <div class=\"card-header bg-light\">
                            <h5 class=\"mb-0 text-dark\">
                              <i class=\"mdi mdi-school me-2 text-dark\"></i>
                              Classes associées (optionnel)
                            </h5>
                          </div>
                          <div class=\"card-body\">
                            <div class=\"form-group\">
                              {{ form_widget(form.classes, {'attr': {
                                'class': 'form-control',
                                'size': '5'
                              }}) }}
                              <small class=\"form-text text-muted\">
                                <i class=\"mdi mdi-information me-1\"></i>
                                Sélectionnez les classes qui suivront cette matière (Maintenez Ctrl/Cmd pour sélection multiple)
                              </small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class=\"row mt-4\">
                      <div class=\"col-md-12\">
                        <div class=\"d-flex justify-content-between\">
                          <a href=\"{{ path('app_matiere_classe_index') }}\" class=\"btn btn-light\">
                            <i class=\"mdi mdi-arrow-left me-1\"></i>Annuler
                          </a>
                          <button type=\"submit\" class=\"btn btn-gradient-primary\">
                            <i class=\"mdi mdi-content-save me-1\"></i>Créer la matière
                          </button>
                        </div>
                      </div>
                    </div>
                    
                    {{ form_end(form) }}
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Quick Tips -->
            <div class=\"row mt-4\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">
                      <i class=\"mdi mdi-lightbulb-on me-2\"></i>Conseils de création
                    </h5>
                    <div class=\"row\">
                      <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center mb-3\">
                          <div class=\"me-3 text-primary\">
                            <i class=\"mdi mdi-weight\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-0\">Coefficient</h6>
                            <small class=\"text-muted\">Typiquement entre 1 et 4</small>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center mb-3\">
                          <div class=\"me-3 text-success\">
                            <i class=\"mdi mdi-clock-outline\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-0\">Charge horaire</h6>
                            <small class=\"text-muted\">Entre 20h et 60h par semestre</small>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-4\">
                        <div class=\"d-flex align-items-center mb-3\">
                          <div class=\"me-3 text-info\">
                            <i class=\"mdi mdi-chart-line\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-0\">Complexité</h6>
                            <small class=\"text-muted\">Évaluez la difficulté (1-10)</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Footer -->
            <footer class=\"footer mt-4\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © {{ 'now'|date('Y') }} ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Création de matière
                </span>
              </div>
            </footer>
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
        
        // Complexity slider update
        const complexitySlider = document.getElementById('{{ form.scorecomplexite.vars.id }}');
        const complexityValue = document.getElementById('complexityValue');
        
        if (complexitySlider && complexityValue) {
          // Update value display
          complexityValue.textContent = complexitySlider.value;
          
          // Update on slider change
          complexitySlider.addEventListener('input', function() {
            complexityValue.textContent = this.value;
          });
        }
        
        // Form validation
        const form = document.querySelector('form');
        if (form) {
          form.addEventListener('submit', function(e) {
            const coefficientInput = document.getElementById('{{ form.coefficient.vars.id }}');
            const chargeInput = document.getElementById('{{ form.chargehoraire.vars.id }}');
            const complexityInput = document.getElementById('{{ form.scorecomplexite.vars.id }}');
            
            let isValid = true;
            
            // Validate coefficient
            if (!coefficientInput.value || parseFloat(coefficientInput.value) <= 0) {
              isValid = false;
              coefficientInput.classList.add('is-invalid');
            } else {
              coefficientInput.classList.remove('is-invalid');
            }
            
            // Validate charge horaire
            if (!chargeInput.value || parseInt(chargeInput.value) <= 0) {
              isValid = false;
              chargeInput.classList.add('is-invalid');
            } else {
              chargeInput.classList.remove('is-invalid');
            }
            
            // Validate complexity
            if (!complexityInput.value || parseInt(complexityInput.value) < 1 || parseInt(complexityInput.value) > 10) {
              isValid = false;
              complexityInput.classList.add('is-invalid');
            } else {
              complexityInput.classList.remove('is-invalid');
            }
            
            const nomInput = document.getElementById('{{ form.nom.vars.id }}');
            const descriptionInput = document.getElementById('{{ form.description.vars.id }}');
            
            // Validate Nom
            if (!nomInput.value || nomInput.value.length < 3) {
              isValid = false;
              nomInput.classList.add('is-invalid');
            } else {
              nomInput.classList.remove('is-invalid');
            }

            // Validate Description
            if (!descriptionInput.value || descriptionInput.value.length < 10) {
              isValid = false;
              descriptionInput.classList.add('is-invalid');
            } else {
              descriptionInput.classList.remove('is-invalid');
            }

            if (!isValid) {
              e.preventDefault();
              
              // Clear previous alerts
              const existingAlert = document.querySelector('.card-body .alert-danger');
              if (existingAlert) existingAlert.remove();

              // Show error message
              const errorDiv = document.createElement('div');
              errorDiv.className = 'alert alert-danger alert-dismissible fade show mt-3';
              errorDiv.innerHTML = `
                <i class=\"mdi mdi-alert-circle me-2\"></i>
                Veuillez corriger les erreurs dans le formulaire.
                <ul class=\"mb-0 mt-2\">
                   \${(!nomInput.value || nomInput.value.length < 3) ? '<li>Le nom doit contenir au moins 3 caractères.</li>' : ''}
                   \${(!descriptionInput.value || descriptionInput.value.length < 10) ? '<li>La description doit contenir au moins 10 caractères.</li>' : ''}
                   \${(!coefficientInput.value || parseFloat(coefficientInput.value) <= 0) ? '<li>Le coefficient doit être valide.</li>' : ''}
                   \${(!chargeInput.value || parseInt(chargeInput.value) <= 0) ? '<li>La charge horaire doit être valide.</li>' : ''}
                </ul>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              `;
              
              const formBody = document.querySelector('.card-body');
              formBody.insertBefore(errorDiv, formBody.firstChild);
              
              // Scroll to error
              errorDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
          });
        }
        
        // Set default complexity to 5 if empty
        if (complexitySlider && !complexitySlider.value) {
          complexitySlider.value = 5;
          if (complexityValue) {
            complexityValue.textContent = '5';
          }
        }
        
        // Add visual feedback for selected classes
        const classesSelect = document.getElementById('{{ form.classes.vars.id }}');
        if (classesSelect) {
          classesSelect.addEventListener('change', function() {
            const selectedCount = Array.from(this.selectedOptions).length;
            if (selectedCount > 0) {
              this.style.borderColor = '#4facfe';
              this.style.boxShadow = '0 0 0 0.2rem rgba(79, 172, 254, 0.25)';
            } else {
              this.style.borderColor = '';
              this.style.boxShadow = '';
            }
          });
        }
      });
    </script>
  </body>
</html>
{% endblock %}", "matiere_classe/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\matiere_classe\\new.html.twig");
    }
}
