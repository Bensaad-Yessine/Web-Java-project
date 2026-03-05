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

/* matiere_classe/show.html.twig */
class __TwigTemplate_263cda43e5414bc96131353a43f9b5c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/show.html.twig"));

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

        yield "Détails Matière - Matière #";
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
    <title>ESPRIT - Détails Matière</title>
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
      .card-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      
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
      
      /* Matiere specific styles */
      .matiere-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 32px;
        margin: 0 auto;
      }
      
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
      
      .info-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
      }
      
      .info-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px;
      }
      
      .detail-item {
        padding: 15px;
        border-bottom: 1px solid #eee;
      }
      
      .detail-item:last-child {
        border-bottom: none;
      }
      
      .detail-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 5px;
      }
      
      .detail-value {
        color: #6c757d;
      }
      
      .action-buttons .btn {
        margin: 0 5px;
      }
      
      .complexity-bar {
        height: 8px;
        background: #e9ecef;
        border-radius: 4px;
        overflow: hidden;
        margin-top: 5px;
      }
      
      .complexity-fill {
        height: 100%;
        border-radius: 4px;
      }
      
      .complexity-1 { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); width: 10%; }
      .complexity-2 { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); width: 20%; }
      .complexity-3 { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); width: 30%; }
      .complexity-4 { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); width: 40%; }
      .complexity-5 { background: linear-gradient(90deg, #00f2fe 0%, #38f9d7 100%); width: 50%; }
      .complexity-6 { background: linear-gradient(90deg, #00f2fe 0%, #38f9d7 100%); width: 60%; }
      .complexity-7 { background: linear-gradient(90deg, #38f9d7 0%, #fa709a 100%); width: 70%; }
      .complexity-8 { background: linear-gradient(90deg, #38f9d7 0%, #fa709a 100%); width: 80%; }
      .complexity-9 { background: linear-gradient(90deg, #fa709a 0%, #f5576c 100%); width: 90%; }
      .complexity-10 { background: linear-gradient(90deg, #fa709a 0%, #f5576c 100%); width: 100%; }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 255
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 256
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
        // line 264
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "user", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 265
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "profilePic", [], "any", false, false, false, 265)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 266
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "user", [], "any", false, false, false, 266), "profilePic", [], "any", false, false, false, 266))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "user", [], "any", false, false, false, 267), "prenom", [], "any", false, false, false, 267), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 270
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "user", [], "any", false, false, false, 271), "prenom", [], "any", false, false, false, 271))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "user", [], "any", false, false, false, 271), "nom", [], "any", false, false, false, 271))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 274
            yield "                  ";
        } else {
            // line 275
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 277
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 280
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 280, $this->source); })()), "user", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "user", [], "any", false, false, false, 281), "prenom", [], "any", false, false, false, 281), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "user", [], "any", false, false, false, 281), "nom", [], "any", false, false, false, 281), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "user", [], "any", false, false, false, 282), "email", [], "any", false, false, false, 282), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 284
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284), "roles", [], "any", false, false, false, 284))) {
                // line 285
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 287
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 289
            yield "                    </div>
                  ";
        } else {
            // line 291
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 294
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
        // line 314
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
        // line 324
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
        // line 334
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
        // line 344
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
        // line 374
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
        // line 404
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
        // line 419
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
                      <p class=\"preview-subject mb-1\">Détails matière</p>
                      <p class=\"text-muted ellipsis mb-0\">Consultation de Matière #";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 449, $this->source); })()), "id", [], "any", false, false, false, 449), "html", null, true);
        yield "</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 458
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 458, $this->source); })()), "user", [], "any", false, false, false, 458)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 459
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 460
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 460, $this->source); })()), "user", [], "any", false, false, false, 460), "profilePic", [], "any", false, false, false, 460)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 461
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 461, $this->source); })()), "user", [], "any", false, false, false, 461), "profilePic", [], "any", false, false, false, 461))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 462
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 462, $this->source); })()), "user", [], "any", false, false, false, 462), "prenom", [], "any", false, false, false, 462), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 465
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 466, $this->source); })()), "user", [], "any", false, false, false, 466), "prenom", [], "any", false, false, false, 466))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 466, $this->source); })()), "user", [], "any", false, false, false, 466), "nom", [], "any", false, false, false, 466))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 469
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "user", [], "any", false, false, false, 471), "prenom", [], "any", false, false, false, 471), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "user", [], "any", false, false, false, 471), "nom", [], "any", false, false, false, 471), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 474
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 474, $this->source); })()), "user", [], "any", false, false, false, 474), "roles", [], "any", false, false, false, 474))) {
                // line 475
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 477
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 479
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 483
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 486
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 491
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "user", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 492
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 492, $this->source); })()), "user", [], "any", false, false, false, 492), "prenom", [], "any", false, false, false, 492), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 492, $this->source); })()), "user", [], "any", false, false, false, 492), "nom", [], "any", false, false, false, 492), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 493, $this->source); })()), "user", [], "any", false, false, false, 493), "email", [], "any", false, false, false, 493), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 495
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "user", [], "any", false, false, false, 495), "roles", [], "any", false, false, false, 495))) {
                // line 496
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 498
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 500
            yield "                      </small>
                    ";
        } else {
            // line 502
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 505
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 507
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 507, $this->source); })()), "user", [], "any", false, false, false, 507)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 508
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 508, $this->source); })()), "user", [], "any", false, false, false, 508), "id", [], "any", false, false, false, 508)]), "html", null, true);
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
            // line 518
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 518, $this->source); })()), "user", [], "any", false, false, false, 518), "id", [], "any", false, false, false, 518)]), "html", null, true);
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
        // line 530
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
        // line 550
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 550, $this->source); })()), "flashes", [], "any", false, false, false, 550));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 551
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 552
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 553
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 554
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 558
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 559
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span> 
                    Détails de la Matière
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 573
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-arrow-left me-1\"></i>Retour à la liste
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Détails
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
            
            <!-- Matiere Header -->
            <div class=\"row\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card info-card\">
                  <div class=\"info-header\">
                    <div class=\"matiere-avatar\">
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </div>
                    <h2 class=\"text-center mt-3 mb-2\">Matière #";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 606, $this->source); })()), "id", [], "any", false, false, false, 606), "html", null, true);
        yield "</h2>
                    <div class=\"text-center\">
                      <span class=\"matiere-badge badge-coefficient me-2\">
                        <i class=\"mdi mdi-weight me-1\"></i>Coefficient: ";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 609, $this->source); })()), "coefficient", [], "any", false, false, false, 609), "html", null, true);
        yield "
                      </span>
                      <span class=\"matiere-badge badge-charge me-2\">
                        <i class=\"mdi mdi-clock-outline me-1\"></i>Charge: ";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 612, $this->source); })()), "chargehoraire", [], "any", false, false, false, 612), "html", null, true);
        yield "h
                      </span>
                      <span class=\"matiere-badge badge-complexite\">
                        <i class=\"mdi mdi-chart-line me-1\"></i>Complexité: ";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 615, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 615), "html", null, true);
        yield "/10
                      </span>
                    </div>
                    <div class=\"action-buttons text-center mt-3\">
                      <a href=\"";
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 619, $this->source); })()), "id", [], "any", false, false, false, 619)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                        <i class=\"mdi mdi-pencil me-1\"></i>Modifier
                      </a>
                      <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        <i class=\"mdi mdi-delete me-1\"></i>Supprimer
                      </button>
                    </div>
                  </div>
                  <div class=\"card-body\">
                    <!-- Coefficient Detail -->
                    <div class=\"detail-item\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-weight me-2\"></i>Coefficient
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"matiere-badge badge-coefficient\">
                          ";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 635, $this->source); })()), "coefficient", [], "any", false, false, false, 635), "html", null, true);
        yield "
                        </span>
                        <div class=\"progress mt-2\" style=\"height: 8px;\">
                          ";
        // line 638
        $context["coeffPercentage"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 638, $this->source); })()), "coefficient", [], "any", false, false, false, 638) / 4) * 100);
        // line 639
        yield "                          ";
        if (((isset($context["coeffPercentage"]) || array_key_exists("coeffPercentage", $context) ? $context["coeffPercentage"] : (function () { throw new RuntimeError('Variable "coeffPercentage" does not exist.', 639, $this->source); })()) > 100)) {
            $context["coeffPercentage"] = 100;
        }
        // line 640
        yield "                          <div class=\"progress-bar\" 
                               role=\"progressbar\" 
                               style=\"width: ";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coeffPercentage"]) || array_key_exists("coeffPercentage", $context) ? $context["coeffPercentage"] : (function () { throw new RuntimeError('Variable "coeffPercentage" does not exist.', 642, $this->source); })()), "html", null, true);
        yield "%; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\"
                               aria-valuenow=\"";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 643, $this->source); })()), "coefficient", [], "any", false, false, false, 643), "html", null, true);
        yield "\" 
                               aria-valuemin=\"0\" 
                               aria-valuemax=\"4\">
                          </div>
                        </div>
                        <small class=\"text-muted\">Valeur sur 4 maximum</small>
                      </div>
                    </div>
                    
                    <!-- Charge Horaire Detail -->
                    <div class=\"detail-item\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-clock-outline me-2\"></i>Charge horaire
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"matiere-badge badge-charge\">
                          ";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 659, $this->source); })()), "chargehoraire", [], "any", false, false, false, 659), "html", null, true);
        yield " heures
                        </span>
                        <div class=\"progress mt-2\" style=\"height: 8px;\">
                          ";
        // line 662
        $context["chargePercentage"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 662, $this->source); })()), "chargehoraire", [], "any", false, false, false, 662) / 60) * 100);
        // line 663
        yield "                          ";
        if (((isset($context["chargePercentage"]) || array_key_exists("chargePercentage", $context) ? $context["chargePercentage"] : (function () { throw new RuntimeError('Variable "chargePercentage" does not exist.', 663, $this->source); })()) > 100)) {
            $context["chargePercentage"] = 100;
        }
        // line 664
        yield "                          <div class=\"progress-bar\" 
                               role=\"progressbar\" 
                               style=\"width: ";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chargePercentage"]) || array_key_exists("chargePercentage", $context) ? $context["chargePercentage"] : (function () { throw new RuntimeError('Variable "chargePercentage" does not exist.', 666, $this->source); })()), "html", null, true);
        yield "%; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);\"
                               aria-valuenow=\"";
        // line 667
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 667, $this->source); })()), "chargehoraire", [], "any", false, false, false, 667), "html", null, true);
        yield "\" 
                               aria-valuemin=\"0\" 
                               aria-valuemax=\"60\">
                          </div>
                        </div>
                        <small class=\"text-muted\">Heures sur 60 maximum</small>
                      </div>
                    </div>
                    
                    <!-- Complexité Detail -->
                    <div class=\"detail-item\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-chart-line me-2\"></i>Score de complexité
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"matiere-badge badge-complexite\">
                          ";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 683, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 683), "html", null, true);
        yield "/10
                        </span>
                        <div class=\"complexity-bar mt-2\">
                          <div class=\"complexity-fill complexity-";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 686, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 686), "html", null, true);
        yield "\"></div>
                        </div>
                        <small class=\"text-muted\">
                          ";
        // line 689
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 689, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 689) <= 3)) {
            // line 690
            yield "                            <span class=\"text-success\">Faible difficulté</span>
                          ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 691
(isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 691, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 691) <= 6)) {
            // line 692
            yield "                            <span class=\"text-warning\">Difficulté moyenne</span>
                          ";
        } else {
            // line 694
            yield "                            <span class=\"text-danger\">Haute difficulté</span>
                          ";
        }
        // line 696
        yield "                        </small>
                      </div>
                    </div>
                    
                    <!-- ID Detail -->
                    <div class=\"detail-item\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-identifier me-2\"></i>ID de la matière
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"badge bg-secondary\">#";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 706, $this->source); })()), "id", [], "any", false, false, false, 706), "html", null, true);
        yield "</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Classes associées -->
            <div class=\"row mt-4\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                  <div class=\"card-header bg-light\">
                    <h5 class=\"mb-0\">
                      <i class=\"mdi mdi-school me-2\"></i>
                      Classes associées
                      <span class=\"badge bg-primary ms-2\">";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 722, $this->source); })()), "classes", [], "any", false, false, false, 722)), "html", null, true);
        yield "</span>
                    </h5>
                  </div>
                  <div class=\"card-body\">
                    ";
        // line 726
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 726, $this->source); })()), "classes", [], "any", false, false, false, 726)) > 0)) {
            // line 727
            yield "                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Classe</th>
                              <th>Niveau</th>
                              <th>Année Universitaire</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            ";
            // line 739
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 739, $this->source); })()), "classes", [], "any", false, false, false, 739));
            foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                // line 740
                yield "                              <tr>
                                <td>";
                // line 741
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 741), "html", null, true);
                yield "</td>
                                <td>
                                  <strong>";
                // line 743
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 743), "html", null, true);
                yield "</strong>
                                </td>
                                <td>
                                  <span class=\"badge bg-info\">";
                // line 746
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "niveau", [], "any", false, false, false, 746), "html", null, true);
                yield "</span>
                                </td>
                                <td>
                                  <span class=\"badge bg-success\">";
                // line 749
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "anneeuniversitaire", [], "any", false, false, false, 749), "html", null, true);
                yield "</span>
                                </td>
                                <td>
                                  <a href=\"";
                // line 752
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 752)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-sm\">
                                    <i class=\"mdi mdi-eye\"></i>
                                  </a>
                                </td>
                              </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['classe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 758
            yield "                          </tbody>
                        </table>
                      </div>
                    ";
        } else {
            // line 762
            yield "                      <div class=\"text-center py-4\">
                        <i class=\"mdi mdi-school-outline text-muted\" style=\"font-size: 48px;\"></i>
                        <h5 class=\"text-muted mt-3\">Aucune classe associée</h5>
                        <p class=\"text-muted\">Cette matière n'est associée à aucune classe.</p>
                        <a href=\"";
            // line 766
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 766, $this->source); })()), "id", [], "any", false, false, false, 766)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                          <i class=\"mdi mdi-plus-circle me-1\"></i>Associer des classes
                        </a>
                      </div>
                    ";
        }
        // line 771
        yield "                  </div>
                </div>
              </div>
            </div>
            
            <!-- Quick Stats -->
            <div class=\"row mt-4\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <div class=\"card stat-card\">
                      <div class=\"card-body\">
                        <div class=\"row\">
                          <div class=\"col-9\">
                            <div class=\"d-flex align-items-center align-self-start\">
                              <h3 class=\"mb-0\">";
        // line 786
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 786, $this->source); })()), "classes", [], "any", false, false, false, 786)), "html", null, true);
        yield "</h3>
                            </div>
                          </div>
                          <div class=\"col-3\">
                            <div class=\"stat-icon card-1\">
                              <i class=\"mdi mdi-school\"></i>
                            </div>
                          </div>
                        </div>
                        <h6 class=\"text-muted font-weight-normal\">Classes associées</h6>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md-4\">
                    <div class=\"card stat-card\">
                      <div class=\"card-body\">
                        <div class=\"row\">
                          <div class=\"col-9\">
                            <div class=\"d-flex align-items-center align-self-start\">
                              <h3 class=\"mb-0\">";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 805, $this->source); })()), "coefficient", [], "any", false, false, false, 805), "html", null, true);
        yield "</h3>
                            </div>
                          </div>
                          <div class=\"col-3\">
                            <div class=\"stat-icon card-2\">
                              <i class=\"mdi mdi-weight\"></i>
                            </div>
                          </div>
                        </div>
                        <h6 class=\"text-muted font-weight-normal\">Coefficient</h6>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md-4\">
                    <div class=\"card stat-card\">
                      <div class=\"card-body\">
                        <div class=\"row\">
                          <div class=\"col-9\">
                            <div class=\"d-flex align-items-center align-self-start\">
                              <h3 class=\"mb-0\">";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 824, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 824), "html", null, true);
        yield "</h3>
                            </div>
                          </div>
                          <div class=\"col-3\">
                            <div class=\"stat-icon card-3\">
                              <i class=\"mdi mdi-chart-line\"></i>
                            </div>
                          </div>
                        </div>
                        <h6 class=\"text-muted font-weight-normal\">Score complexité</h6>
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
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Détails matière: Matière #";
        // line 848
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 848, $this->source); })()), "id", [], "any", false, false, false, 848), "html", null, true);
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
        // line 868
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 868, $this->source); })()), "id", [], "any", false, false, false, 868), "html", null, true);
        yield "</strong> ?</p>
            <div class=\"alert alert-warning\">
              <i class=\"mdi mdi-alert me-2\"></i>
              <strong>Attention:</strong> Cette action supprimera également toutes les associations avec les classes.
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
              <i class=\"mdi mdi-close me-1\"></i>Annuler
            </button>
            <form method=\"post\" action=\"";
        // line 878
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 878, $this->source); })()), "id", [], "any", false, false, false, 878)]), "html", null, true);
        yield "\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
        // line 879
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere_classe"]) || array_key_exists("matiere_classe", $context) ? $context["matiere_classe"] : (function () { throw new RuntimeError('Variable "matiere_classe" does not exist.', 879, $this->source); })()), "id", [], "any", false, false, false, 879))), "html", null, true);
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
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 891
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 892
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
        return "matiere_classe/show.html.twig";
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
        return array (  1340 => 892,  1336 => 891,  1332 => 890,  1318 => 879,  1314 => 878,  1301 => 868,  1278 => 848,  1272 => 845,  1248 => 824,  1226 => 805,  1204 => 786,  1187 => 771,  1179 => 766,  1173 => 762,  1167 => 758,  1155 => 752,  1149 => 749,  1143 => 746,  1137 => 743,  1132 => 741,  1129 => 740,  1125 => 739,  1111 => 727,  1109 => 726,  1102 => 722,  1083 => 706,  1071 => 696,  1067 => 694,  1063 => 692,  1061 => 691,  1058 => 690,  1056 => 689,  1050 => 686,  1044 => 683,  1025 => 667,  1021 => 666,  1017 => 664,  1012 => 663,  1010 => 662,  1004 => 659,  985 => 643,  981 => 642,  977 => 640,  972 => 639,  970 => 638,  964 => 635,  945 => 619,  938 => 615,  932 => 612,  926 => 609,  920 => 606,  906 => 594,  901 => 591,  897 => 589,  895 => 588,  891 => 587,  885 => 586,  880 => 583,  878 => 582,  866 => 573,  850 => 559,  844 => 558,  834 => 554,  830 => 553,  825 => 552,  820 => 551,  815 => 550,  792 => 530,  777 => 518,  763 => 508,  761 => 507,  757 => 505,  752 => 502,  748 => 500,  744 => 498,  740 => 496,  738 => 495,  733 => 493,  726 => 492,  724 => 491,  717 => 486,  710 => 483,  704 => 479,  700 => 477,  696 => 475,  694 => 474,  686 => 471,  682 => 469,  675 => 466,  672 => 465,  666 => 462,  661 => 461,  659 => 460,  656 => 459,  654 => 458,  642 => 449,  609 => 419,  591 => 404,  558 => 374,  525 => 344,  512 => 334,  499 => 324,  486 => 314,  464 => 294,  459 => 291,  455 => 289,  451 => 287,  447 => 285,  445 => 284,  440 => 282,  433 => 281,  431 => 280,  426 => 277,  420 => 275,  417 => 274,  410 => 271,  407 => 270,  401 => 267,  396 => 266,  393 => 265,  391 => 264,  380 => 256,  376 => 255,  371 => 253,  367 => 252,  131 => 19,  127 => 18,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails Matière - Matière #{{ matiere_classe.id }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails Matière</title>
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
      .card-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      
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
      
      /* Matiere specific styles */
      .matiere-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 32px;
        margin: 0 auto;
      }
      
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
      
      .info-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
      }
      
      .info-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px;
      }
      
      .detail-item {
        padding: 15px;
        border-bottom: 1px solid #eee;
      }
      
      .detail-item:last-child {
        border-bottom: none;
      }
      
      .detail-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 5px;
      }
      
      .detail-value {
        color: #6c757d;
      }
      
      .action-buttons .btn {
        margin: 0 5px;
      }
      
      .complexity-bar {
        height: 8px;
        background: #e9ecef;
        border-radius: 4px;
        overflow: hidden;
        margin-top: 5px;
      }
      
      .complexity-fill {
        height: 100%;
        border-radius: 4px;
      }
      
      .complexity-1 { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); width: 10%; }
      .complexity-2 { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); width: 20%; }
      .complexity-3 { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); width: 30%; }
      .complexity-4 { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); width: 40%; }
      .complexity-5 { background: linear-gradient(90deg, #00f2fe 0%, #38f9d7 100%); width: 50%; }
      .complexity-6 { background: linear-gradient(90deg, #00f2fe 0%, #38f9d7 100%); width: 60%; }
      .complexity-7 { background: linear-gradient(90deg, #38f9d7 0%, #fa709a 100%); width: 70%; }
      .complexity-8 { background: linear-gradient(90deg, #38f9d7 0%, #fa709a 100%); width: 80%; }
      .complexity-9 { background: linear-gradient(90deg, #fa709a 0%, #f5576c 100%); width: 90%; }
      .complexity-10 { background: linear-gradient(90deg, #fa709a 0%, #f5576c 100%); width: 100%; }
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
                      <p class=\"preview-subject mb-1\">Détails matière</p>
                      <p class=\"text-muted ellipsis mb-0\">Consultation de Matière #{{ matiere_classe.id }}</p>
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
                    Détails de la Matière
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_matiere_classe_index') }}\" class=\"text-decoration-none\">
                          <i class=\"mdi mdi-arrow-left me-1\"></i>Retour à la liste
                        </a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Détails
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
            
            <!-- Matiere Header -->
            <div class=\"row\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card info-card\">
                  <div class=\"info-header\">
                    <div class=\"matiere-avatar\">
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </div>
                    <h2 class=\"text-center mt-3 mb-2\">Matière #{{ matiere_classe.id }}</h2>
                    <div class=\"text-center\">
                      <span class=\"matiere-badge badge-coefficient me-2\">
                        <i class=\"mdi mdi-weight me-1\"></i>Coefficient: {{ matiere_classe.coefficient }}
                      </span>
                      <span class=\"matiere-badge badge-charge me-2\">
                        <i class=\"mdi mdi-clock-outline me-1\"></i>Charge: {{ matiere_classe.chargehoraire }}h
                      </span>
                      <span class=\"matiere-badge badge-complexite\">
                        <i class=\"mdi mdi-chart-line me-1\"></i>Complexité: {{ matiere_classe.scorecomplexite }}/10
                      </span>
                    </div>
                    <div class=\"action-buttons text-center mt-3\">
                      <a href=\"{{ path('app_matiere_classe_edit', {'id': matiere_classe.id}) }}\" class=\"btn btn-warning\">
                        <i class=\"mdi mdi-pencil me-1\"></i>Modifier
                      </a>
                      <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        <i class=\"mdi mdi-delete me-1\"></i>Supprimer
                      </button>
                    </div>
                  </div>
                  <div class=\"card-body\">
                    <!-- Coefficient Detail -->
                    <div class=\"detail-item\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-weight me-2\"></i>Coefficient
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"matiere-badge badge-coefficient\">
                          {{ matiere_classe.coefficient }}
                        </span>
                        <div class=\"progress mt-2\" style=\"height: 8px;\">
                          {% set coeffPercentage = (matiere_classe.coefficient / 4) * 100 %}
                          {% if coeffPercentage > 100 %}{% set coeffPercentage = 100 %}{% endif %}
                          <div class=\"progress-bar\" 
                               role=\"progressbar\" 
                               style=\"width: {{ coeffPercentage }}%; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\"
                               aria-valuenow=\"{{ matiere_classe.coefficient }}\" 
                               aria-valuemin=\"0\" 
                               aria-valuemax=\"4\">
                          </div>
                        </div>
                        <small class=\"text-muted\">Valeur sur 4 maximum</small>
                      </div>
                    </div>
                    
                    <!-- Charge Horaire Detail -->
                    <div class=\"detail-item\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-clock-outline me-2\"></i>Charge horaire
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"matiere-badge badge-charge\">
                          {{ matiere_classe.chargehoraire }} heures
                        </span>
                        <div class=\"progress mt-2\" style=\"height: 8px;\">
                          {% set chargePercentage = (matiere_classe.chargehoraire / 60) * 100 %}
                          {% if chargePercentage > 100 %}{% set chargePercentage = 100 %}{% endif %}
                          <div class=\"progress-bar\" 
                               role=\"progressbar\" 
                               style=\"width: {{ chargePercentage }}%; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);\"
                               aria-valuenow=\"{{ matiere_classe.chargehoraire }}\" 
                               aria-valuemin=\"0\" 
                               aria-valuemax=\"60\">
                          </div>
                        </div>
                        <small class=\"text-muted\">Heures sur 60 maximum</small>
                      </div>
                    </div>
                    
                    <!-- Complexité Detail -->
                    <div class=\"detail-item\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-chart-line me-2\"></i>Score de complexité
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"matiere-badge badge-complexite\">
                          {{ matiere_classe.scorecomplexite }}/10
                        </span>
                        <div class=\"complexity-bar mt-2\">
                          <div class=\"complexity-fill complexity-{{ matiere_classe.scorecomplexite }}\"></div>
                        </div>
                        <small class=\"text-muted\">
                          {% if matiere_classe.scorecomplexite <= 3 %}
                            <span class=\"text-success\">Faible difficulté</span>
                          {% elseif matiere_classe.scorecomplexite <= 6 %}
                            <span class=\"text-warning\">Difficulté moyenne</span>
                          {% else %}
                            <span class=\"text-danger\">Haute difficulté</span>
                          {% endif %}
                        </small>
                      </div>
                    </div>
                    
                    <!-- ID Detail -->
                    <div class=\"detail-item\">
                      <div class=\"detail-label\">
                        <i class=\"mdi mdi-identifier me-2\"></i>ID de la matière
                      </div>
                      <div class=\"detail-value\">
                        <span class=\"badge bg-secondary\">#{{ matiere_classe.id }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Classes associées -->
            <div class=\"row mt-4\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                  <div class=\"card-header bg-light\">
                    <h5 class=\"mb-0\">
                      <i class=\"mdi mdi-school me-2\"></i>
                      Classes associées
                      <span class=\"badge bg-primary ms-2\">{{ matiere_classe.classes|length }}</span>
                    </h5>
                  </div>
                  <div class=\"card-body\">
                    {% if matiere_classe.classes|length > 0 %}
                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Classe</th>
                              <th>Niveau</th>
                              <th>Année Universitaire</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            {% for classe in matiere_classe.classes %}
                              <tr>
                                <td>{{ classe.id }}</td>
                                <td>
                                  <strong>{{ classe.nom }}</strong>
                                </td>
                                <td>
                                  <span class=\"badge bg-info\">{{ classe.niveau }}</span>
                                </td>
                                <td>
                                  <span class=\"badge bg-success\">{{ classe.anneeuniversitaire }}</span>
                                </td>
                                <td>
                                  <a href=\"{{ path('app_classe_show', {'id': classe.id}) }}\" class=\"btn btn-info btn-sm\">
                                    <i class=\"mdi mdi-eye\"></i>
                                  </a>
                                </td>
                              </tr>
                            {% endfor %}
                          </tbody>
                        </table>
                      </div>
                    {% else %}
                      <div class=\"text-center py-4\">
                        <i class=\"mdi mdi-school-outline text-muted\" style=\"font-size: 48px;\"></i>
                        <h5 class=\"text-muted mt-3\">Aucune classe associée</h5>
                        <p class=\"text-muted\">Cette matière n'est associée à aucune classe.</p>
                        <a href=\"{{ path('app_matiere_classe_edit', {'id': matiere_classe.id}) }}\" class=\"btn btn-primary\">
                          <i class=\"mdi mdi-plus-circle me-1\"></i>Associer des classes
                        </a>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Quick Stats -->
            <div class=\"row mt-4\">
              <div class=\"col-md-8 offset-md-2\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <div class=\"card stat-card\">
                      <div class=\"card-body\">
                        <div class=\"row\">
                          <div class=\"col-9\">
                            <div class=\"d-flex align-items-center align-self-start\">
                              <h3 class=\"mb-0\">{{ matiere_classe.classes|length }}</h3>
                            </div>
                          </div>
                          <div class=\"col-3\">
                            <div class=\"stat-icon card-1\">
                              <i class=\"mdi mdi-school\"></i>
                            </div>
                          </div>
                        </div>
                        <h6 class=\"text-muted font-weight-normal\">Classes associées</h6>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md-4\">
                    <div class=\"card stat-card\">
                      <div class=\"card-body\">
                        <div class=\"row\">
                          <div class=\"col-9\">
                            <div class=\"d-flex align-items-center align-self-start\">
                              <h3 class=\"mb-0\">{{ matiere_classe.coefficient }}</h3>
                            </div>
                          </div>
                          <div class=\"col-3\">
                            <div class=\"stat-icon card-2\">
                              <i class=\"mdi mdi-weight\"></i>
                            </div>
                          </div>
                        </div>
                        <h6 class=\"text-muted font-weight-normal\">Coefficient</h6>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md-4\">
                    <div class=\"card stat-card\">
                      <div class=\"card-body\">
                        <div class=\"row\">
                          <div class=\"col-9\">
                            <div class=\"d-flex align-items-center align-self-start\">
                              <h3 class=\"mb-0\">{{ matiere_classe.scorecomplexite }}</h3>
                            </div>
                          </div>
                          <div class=\"col-3\">
                            <div class=\"stat-icon card-3\">
                              <i class=\"mdi mdi-chart-line\"></i>
                            </div>
                          </div>
                        </div>
                        <h6 class=\"text-muted font-weight-normal\">Score complexité</h6>
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
                  Détails matière: Matière #{{ matiere_classe.id }}
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
            <div class=\"alert alert-warning\">
              <i class=\"mdi mdi-alert me-2\"></i>
              <strong>Attention:</strong> Cette action supprimera également toutes les associations avec les classes.
            </div>
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
      });
    </script>
  </body>
</html>
{% endblock %}", "matiere_classe/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\matiere_classe\\show.html.twig");
    }
}
