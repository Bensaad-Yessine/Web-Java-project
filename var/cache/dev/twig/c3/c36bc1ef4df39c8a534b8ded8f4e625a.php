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

/* matiere_classe/edit.html.twig */
class __TwigTemplate_dd3b7a5faf3a08c2d80f80fb243432ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/edit.html.twig"));

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

        yield "Modifier Matière - Matière #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
    <title>ESPRIT - Modifier Matière</title>
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
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
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
      
      .class-info-badge {
        padding: 8px 15px;
        border-radius: 10px;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 5px;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 260
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
        // line 268
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "user", [], "any", false, false, false, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 269
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "user", [], "any", false, false, false, 269), "profilePic", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 270
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "user", [], "any", false, false, false, 270), "profilePic", [], "any", false, false, false, 270))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "user", [], "any", false, false, false, 271), "prenom", [], "any", false, false, false, 271), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 274
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "user", [], "any", false, false, false, 275), "prenom", [], "any", false, false, false, 275))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "user", [], "any", false, false, false, 275), "nom", [], "any", false, false, false, 275))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 278
            yield "                  ";
        } else {
            // line 279
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 281
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 284
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 285
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "user", [], "any", false, false, false, 285), "prenom", [], "any", false, false, false, 285), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "user", [], "any", false, false, false, 285), "nom", [], "any", false, false, false, 285), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "user", [], "any", false, false, false, 286), "email", [], "any", false, false, false, 286), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 288
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "user", [], "any", false, false, false, 288), "roles", [], "any", false, false, false, 288))) {
                // line 289
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 291
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 293
            yield "                    </div>
                  ";
        } else {
            // line 295
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 298
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
        // line 318
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
        // line 328
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
        // line 338
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
        // line 348
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
        // line 378
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
        // line 408
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
        // line 423
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
                      <div class=\"preview-icon bg-warning rounded-circle\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Modification matière</p>
                      <p class=\"text-muted ellipsis mb-0\">Modification en cours</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 462
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 462, $this->source); })()), "user", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 463
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 464
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 464, $this->source); })()), "user", [], "any", false, false, false, 464), "profilePic", [], "any", false, false, false, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 465
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 465, $this->source); })()), "user", [], "any", false, false, false, 465), "profilePic", [], "any", false, false, false, 465))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 466, $this->source); })()), "user", [], "any", false, false, false, 466), "prenom", [], "any", false, false, false, 466), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 469
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 470
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 470, $this->source); })()), "user", [], "any", false, false, false, 470), "prenom", [], "any", false, false, false, 470))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 470, $this->source); })()), "user", [], "any", false, false, false, 470), "nom", [], "any", false, false, false, 470))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 473
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 475, $this->source); })()), "user", [], "any", false, false, false, 475), "prenom", [], "any", false, false, false, 475), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 475, $this->source); })()), "user", [], "any", false, false, false, 475), "nom", [], "any", false, false, false, 475), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 478
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 478, $this->source); })()), "user", [], "any", false, false, false, 478), "roles", [], "any", false, false, false, 478))) {
                // line 479
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 481
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 483
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 487
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 490
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 495
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "user", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 496
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 496, $this->source); })()), "user", [], "any", false, false, false, 496), "prenom", [], "any", false, false, false, 496), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 496, $this->source); })()), "user", [], "any", false, false, false, 496), "nom", [], "any", false, false, false, 496), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 497
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "user", [], "any", false, false, false, 497), "email", [], "any", false, false, false, 497), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 499
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 499, $this->source); })()), "user", [], "any", false, false, false, 499), "roles", [], "any", false, false, false, 499))) {
                // line 500
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 502
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 504
            yield "                      </small>
                    ";
        } else {
            // line 506
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 509
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 511
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 511, $this->source); })()), "user", [], "any", false, false, false, 511)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 512
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 512, $this->source); })()), "user", [], "any", false, false, false, 512), "id", [], "any", false, false, false, 512)]), "html", null, true);
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
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 522, $this->source); })()), "user", [], "any", false, false, false, 522), "id", [], "any", false, false, false, 522)]), "html", null, true);
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
        // line 534
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
        // line 554
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 554, $this->source); })()), "flashes", [], "any", false, false, false, 554));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 555
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 556
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 557
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 562
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 563
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span> 
                    Modification de la Matière
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 577
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-arrow-left me-1\"></i>Retour à la liste
                        </a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 582, $this->source); })()), "id", [], "any", false, false, false, 582)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-eye me-1\"></i>Voir la matière
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Modifier
                      </li>
                    </ul>
                  </nav>
                  
                  <!-- Matiere Info -->
                  <div class=\"mt-3\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"matiere-avatar me-3\" style=\"width: 50px; height: 50px; font-size: 20px;\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">Matière #";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 599, $this->source); })()), "id", [], "any", false, false, false, 599), "html", null, true);
        yield "</h4>
                        <div class=\"d-flex gap-2\">
                          <span class=\"matiere-badge badge-coefficient\">
                            <i class=\"mdi mdi-weight me-1\"></i>Coefficient: ";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 602, $this->source); })()), "coefficient", [], "any", false, false, false, 602), "html", null, true);
        yield "
                          </span>
                          <span class=\"matiere-badge badge-charge\">
                            <i class=\"mdi mdi-clock-outline me-1\"></i>Charge: ";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 605, $this->source); })()), "chargehoraire", [], "any", false, false, false, 605), "html", null, true);
        yield "h
                          </span>
                          <span class=\"matiere-badge badge-complexite\">
                            <i class=\"mdi mdi-chart-line me-1\"></i>Complexité: ";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 608, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 608), "html", null, true);
        yield "/10
                          </span>
                          <span class=\"badge bg-light text-dark\">
                            <i class=\"mdi mdi-identifier me-1\"></i>ID: ";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 611, $this->source); })()), "id", [], "any", false, false, false, 611), "html", null, true);
        yield "
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Form -->
            <div class=\"row\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card form-card\">
                  <div class=\"form-header\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                    <div class=\"form-icon\">
                      <i class=\"mdi mdi-pencil\"></i>
                    </div>
                    <h4 class=\"text-center mb-0\">✏️ Modifier les informations de la matière</h4>
                    <p class=\"text-center mb-0 opacity-75\">
                      Mettez à jour les informations de Matière #";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 631, $this->source); })()), "id", [], "any", false, false, false, 631), "html", null, true);
        yield "
                    </p>
                  </div>
                  <div class=\"card-body\">
                    ";
        // line 635
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 635, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample", "novalidate" => "novalidate"]]);
        yield "
                    
                    <!-- Nom et Description -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Nom de la matière</label>
                          ";
        // line 642
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 642, $this->source); })()), "nom", [], "any", false, false, false, 642), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Algorithmique"]]);
        // line 645
        yield "
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-format-title me-1\"></i>
                            Le nom officiel de la matière
                          </small>
                          ";
        // line 650
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 650, $this->source); })()), "nom", [], "any", false, false, false, 650), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 651
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 652
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 652, $this->source); })()), "nom", [], "any", false, false, false, 652), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 655
        yield "                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Description</label>
                          ";
        // line 660
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 660, $this->source); })()), "description", [], "any", false, false, false, 660), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Introduction aux algorithmes..."]]);
        // line 663
        yield "
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-text me-1\"></i>
                            Brève description du contenu
                          </small>
                          ";
        // line 668
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 668, $this->source); })()), "description", [], "any", false, false, false, 668), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 669
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 670
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 670, $this->source); })()), "description", [], "any", false, false, false, 670), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 673
        yield "                        </div>
                      </div>
                    </div>

                    <!-- Coefficient -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Coefficient</label>
                          ";
        // line 682
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 682, $this->source); })()), "coefficient", [], "any", false, false, false, 682), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 2.5", "step" => "0.1", "min" => "0.1"]]);
        // line 687
        yield "
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-information me-1\"></i>
                            Poids de la matière dans le calcul de la moyenne
                          </small>
                          ";
        // line 692
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 692, $this->source); })()), "coefficient", [], "any", false, false, false, 692), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 693
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 694
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 694, $this->source); })()), "coefficient", [], "any", false, false, false, 694), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 697
        yield "                        </div>
                      </div>
                      
                      <!-- Charge Horaire -->
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Charge horaire (heures)</label>
                          ";
        // line 704
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 704, $this->source); })()), "chargehoraire", [], "any", false, false, false, 704), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 30", "min" => "1"]]);
        // line 708
        yield "
                          <small class=\"form-text text-muted\">
                            <i class=\"mdi mdi-clock-outline me-1\"></i>
                            Nombre total d'heures pour cette matière
                          </small>
                          ";
        // line 713
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 713, $this->source); })()), "chargehoraire", [], "any", false, false, false, 713), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 714
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 715
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 715, $this->source); })()), "chargehoraire", [], "any", false, false, false, 715), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 718
        yield "                        </div>
                      </div>
                    </div>
                    
                    <!-- Score de Complexité -->
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <div class=\"form-group\">
                          <label class=\"required-field\">Score de complexité</label>
                          ";
        // line 727
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 727, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 727), 'widget', ["attr" => ["class" => "form-control complexity-slider", "type" => "range", "min" => "1", "max" => "10"]]);
        // line 732
        yield "
                          <div class=\"d-flex justify-content-between align-items-center mt-2\">
                            <span class=\"complexity-value\" id=\"complexityValue\">";
        // line 734
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 734, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 734), "html", null, true);
        yield "</span>
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
        // line 745
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 745, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 745), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 746
            yield "                            <div class=\"text-danger mt-1\">
                              ";
            // line 747
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 747, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 747), 'errors');
            yield "
                            </div>
                          ";
        }
        // line 750
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
                              Classes associées
                              <span class=\"badge bg-primary ms-2\">";
        // line 762
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 762, $this->source); })()), "classes", [], "any", false, false, false, 762)), "html", null, true);
        yield "</span>
                            </h5>
                          </div>
                          <div class=\"card-body\">
                            <div class=\"form-group\">
                              ";
        // line 767
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 767, $this->source); })()), "classes", [], "any", false, false, false, 767), 'widget', ["attr" => ["class" => "form-control", "size" => "5"]]);
        // line 770
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
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 785, $this->source); })()), "id", [], "any", false, false, false, 785)]), "html", null, true);
        yield "\" class=\"btn btn-light\">
                            <i class=\"mdi mdi-close me-1\"></i>Annuler
                          </a>
                          <div class=\"d-flex gap-2\">
                            <button type=\"submit\" class=\"btn btn-gradient-primary\">
                              <i class=\"mdi mdi-content-save me-1\"></i>Enregistrer
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    ";
        // line 797
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 797, $this->source); })()), 'form_end');
        yield "
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Danger Zone -->
            <div class=\"row mt-4\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card border-danger\">
                  <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"mb-0\">
                      <i class=\"mdi mdi-alert-circle me-2\"></i>
                      Zone de danger
                    </h5>
                  </div>
                  <div class=\"card-body\">
                    <h6 class=\"text-danger\">Supprimer cette matière</h6>
                    <p class=\"text-muted mb-3\">
                      Cette action est irréversible. Toutes les associations avec les classes seront supprimées.
                    </p>
                    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                      <i class=\"mdi mdi-delete me-1\"></i>Supprimer la matière
                    </button>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Footer -->
            <footer class=\"footer mt-4\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Modification de matière: Matière #";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 833, $this->source); })()), "id", [], "any", false, false, false, 833), "html", null, true);
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
            <p>Êtes-vous sûr de vouloir supprimer la matière <strong>Matière #";
        // line 853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 853, $this->source); })()), "id", [], "any", false, false, false, 853), "html", null, true);
        yield "</strong> ?</p>
            <p class=\"text-danger mb-0\">
              <i class=\"mdi mdi-alert me-1\"></i>
              <small>Cette action est irréversible. Toutes les associations avec les classes seront supprimées.</small>
            </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
              <i class=\"mdi mdi-close me-1\"></i>Annuler
            </button>
            <form method=\"post\" action=\"";
        // line 863
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 863, $this->source); })()), "id", [], "any", false, false, false, 863)]), "html", null, true);
        yield "\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
        // line 864
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 864, $this->source); })()), "id", [], "any", false, false, false, 864))), "html", null, true);
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
        // line 891
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 891, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 891), "vars", [], "any", false, false, false, 891), "id", [], "any", false, false, false, 891), "html", null, true);
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
        // line 908
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 908, $this->source); })()), "coefficient", [], "any", false, false, false, 908), "vars", [], "any", false, false, false, 908), "id", [], "any", false, false, false, 908), "html", null, true);
        yield "');
            const chargeInput = document.getElementById('";
        // line 909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 909, $this->source); })()), "chargehoraire", [], "any", false, false, false, 909), "vars", [], "any", false, false, false, 909), "id", [], "any", false, false, false, 909), "html", null, true);
        yield "');
            const complexityInput = document.getElementById('";
        // line 910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 910, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 910), "vars", [], "any", false, false, false, 910), "id", [], "any", false, false, false, 910), "html", null, true);
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
        // line 938
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 938, $this->source); })()), "nom", [], "any", false, false, false, 938), "vars", [], "any", false, false, false, 938), "id", [], "any", false, false, false, 938), "html", null, true);
        yield "');
            const descriptionInput = document.getElementById('";
        // line 939
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 939, $this->source); })()), "description", [], "any", false, false, false, 939), "vars", [], "any", false, false, false, 939), "id", [], "any", false, false, false, 939), "html", null, true);
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
        
        // Add visual feedback for selected classes
        const classesSelect = document.getElementById('";
        // line 989
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 989, $this->source); })()), "classes", [], "any", false, false, false, 989), "vars", [], "any", false, false, false, 989), "id", [], "any", false, false, false, 989), "html", null, true);
        yield "');
        if (classesSelect) {
          // Update border when selection changes
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
          
          // Initialize border based on current selection
          const initialSelectedCount = Array.from(classesSelect.selectedOptions).length;
          if (initialSelectedCount > 0) {
            classesSelect.style.borderColor = '#4facfe';
            classesSelect.style.boxShadow = '0 0 0 0.2rem rgba(79, 172, 254, 0.25)';
          }
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
        return "matiere_classe/edit.html.twig";
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
        return array (  1401 => 989,  1348 => 939,  1344 => 938,  1313 => 910,  1309 => 909,  1305 => 908,  1285 => 891,  1268 => 877,  1264 => 876,  1260 => 875,  1246 => 864,  1242 => 863,  1229 => 853,  1206 => 833,  1200 => 830,  1164 => 797,  1149 => 785,  1132 => 770,  1130 => 767,  1122 => 762,  1108 => 750,  1102 => 747,  1099 => 746,  1097 => 745,  1083 => 734,  1079 => 732,  1077 => 727,  1066 => 718,  1060 => 715,  1057 => 714,  1055 => 713,  1048 => 708,  1046 => 704,  1037 => 697,  1031 => 694,  1028 => 693,  1026 => 692,  1019 => 687,  1017 => 682,  1006 => 673,  1000 => 670,  997 => 669,  995 => 668,  988 => 663,  986 => 660,  979 => 655,  973 => 652,  970 => 651,  968 => 650,  961 => 645,  959 => 642,  949 => 635,  942 => 631,  919 => 611,  913 => 608,  907 => 605,  901 => 602,  895 => 599,  875 => 582,  867 => 577,  851 => 563,  845 => 562,  835 => 558,  831 => 557,  826 => 556,  821 => 555,  816 => 554,  793 => 534,  778 => 522,  764 => 512,  762 => 511,  758 => 509,  753 => 506,  749 => 504,  745 => 502,  741 => 500,  739 => 499,  734 => 497,  727 => 496,  725 => 495,  718 => 490,  711 => 487,  705 => 483,  701 => 481,  697 => 479,  695 => 478,  687 => 475,  683 => 473,  676 => 470,  673 => 469,  667 => 466,  662 => 465,  660 => 464,  657 => 463,  655 => 462,  613 => 423,  595 => 408,  562 => 378,  529 => 348,  516 => 338,  503 => 328,  490 => 318,  468 => 298,  463 => 295,  459 => 293,  455 => 291,  451 => 289,  449 => 288,  444 => 286,  437 => 285,  435 => 284,  430 => 281,  424 => 279,  421 => 278,  414 => 275,  411 => 274,  405 => 271,  400 => 270,  397 => 269,  395 => 268,  384 => 260,  380 => 259,  375 => 257,  371 => 256,  131 => 19,  127 => 18,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Matière - Matière #{{ matiere_classe.id }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Modifier Matière</title>
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
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
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
      
      .class-info-badge {
        padding: 8px 15px;
        border-radius: 10px;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 5px;
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
                      <div class=\"preview-icon bg-warning rounded-circle\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Modification matière</p>
                      <p class=\"text-muted ellipsis mb-0\">Modification en cours</p>
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
                    Modification de la Matière
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_matiere_classe_index') }}\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-arrow-left me-1\"></i>Retour à la liste
                        </a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_matiere_classe_show', {'id': matiere_classe.id}) }}\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-eye me-1\"></i>Voir la matière
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Modifier
                      </li>
                    </ul>
                  </nav>
                  
                  <!-- Matiere Info -->
                  <div class=\"mt-3\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"matiere-avatar me-3\" style=\"width: 50px; height: 50px; font-size: 20px;\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">Matière #{{ matiere_classe.id }}</h4>
                        <div class=\"d-flex gap-2\">
                          <span class=\"matiere-badge badge-coefficient\">
                            <i class=\"mdi mdi-weight me-1\"></i>Coefficient: {{ matiere_classe.coefficient }}
                          </span>
                          <span class=\"matiere-badge badge-charge\">
                            <i class=\"mdi mdi-clock-outline me-1\"></i>Charge: {{ matiere_classe.chargehoraire }}h
                          </span>
                          <span class=\"matiere-badge badge-complexite\">
                            <i class=\"mdi mdi-chart-line me-1\"></i>Complexité: {{ matiere_classe.scorecomplexite }}/10
                          </span>
                          <span class=\"badge bg-light text-dark\">
                            <i class=\"mdi mdi-identifier me-1\"></i>ID: {{ matiere_classe.id }}
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Form -->
            <div class=\"row\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card form-card\">
                  <div class=\"form-header\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                    <div class=\"form-icon\">
                      <i class=\"mdi mdi-pencil\"></i>
                    </div>
                    <h4 class=\"text-center mb-0\">✏️ Modifier les informations de la matière</h4>
                    <p class=\"text-center mb-0 opacity-75\">
                      Mettez à jour les informations de Matière #{{ matiere_classe.id }}
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
                            <span class=\"complexity-value\" id=\"complexityValue\">{{ matiere_classe.scorecomplexite }}</span>
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
                              Classes associées
                              <span class=\"badge bg-primary ms-2\">{{ matiere_classe.classes|length }}</span>
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
                          <a href=\"{{ path('app_matiere_classe_show', {'id': matiere_classe.id}) }}\" class=\"btn btn-light\">
                            <i class=\"mdi mdi-close me-1\"></i>Annuler
                          </a>
                          <div class=\"d-flex gap-2\">
                            <button type=\"submit\" class=\"btn btn-gradient-primary\">
                              <i class=\"mdi mdi-content-save me-1\"></i>Enregistrer
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    {{ form_end(form) }}
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Danger Zone -->
            <div class=\"row mt-4\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card border-danger\">
                  <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"mb-0\">
                      <i class=\"mdi mdi-alert-circle me-2\"></i>
                      Zone de danger
                    </h5>
                  </div>
                  <div class=\"card-body\">
                    <h6 class=\"text-danger\">Supprimer cette matière</h6>
                    <p class=\"text-muted mb-3\">
                      Cette action est irréversible. Toutes les associations avec les classes seront supprimées.
                    </p>
                    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                      <i class=\"mdi mdi-delete me-1\"></i>Supprimer la matière
                    </button>
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
                  Modification de matière: Matière #{{ matiere_classe.id }}
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
            <p>Êtes-vous sûr de vouloir supprimer la matière <strong>Matière #{{ matiere_classe.id }}</strong> ?</p>
            <p class=\"text-danger mb-0\">
              <i class=\"mdi mdi-alert me-1\"></i>
              <small>Cette action est irréversible. Toutes les associations avec les classes seront supprimées.</small>
            </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
              <i class=\"mdi mdi-close me-1\"></i>Annuler
            </button>
            <form method=\"post\" action=\"{{ path('app_matiere_classe_delete', {'id': matiere_classe.id}) }}\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ matiere_classe.id) }}\">
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
        
        // Add visual feedback for selected classes
        const classesSelect = document.getElementById('{{ form.classes.vars.id }}');
        if (classesSelect) {
          // Update border when selection changes
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
          
          // Initialize border based on current selection
          const initialSelectedCount = Array.from(classesSelect.selectedOptions).length;
          if (initialSelectedCount > 0) {
            classesSelect.style.borderColor = '#4facfe';
            classesSelect.style.boxShadow = '0 0 0 0.2rem rgba(79, 172, 254, 0.25)';
          }
        }
      });
    </script>
  </body>
</html>
{% endblock %}", "matiere_classe/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\matiere_classe\\edit.html.twig");
    }
}
