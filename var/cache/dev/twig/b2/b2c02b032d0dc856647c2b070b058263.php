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

/* proposition_reunion/edit.html.twig */
class __TwigTemplate_151ebdd4a8fbc9c094072cee6ac61db8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/edit.html.twig"));

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

        yield "Modifier Proposition - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
    <title>ESPRIT - Modifier Proposition</title>
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
      /* Profile Avatar Styles - Fixed Sizes */
      .img-xs {
        width: 37px !important;
        height: 37px !important;
      }
      
      .profile-avatar-img {
        width: 37px;
        height: 37px;
        border-radius: 50%;
        object-fit: cover;
      }
      
      .profile-avatar {
        width: 37px;
        height: 37px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 14px;
      }
      
      .navbar-avatar-img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
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
        font-size: 13px;
      }
      
      .user-role-badge {
        font-size: 0.7rem;
        padding: 2px 8px;
        border-radius: 10px;
        margin-top: 3px;
        display: inline-block;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
      }
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      /* Styles spécifiques pour cette page */
      .form-card {
          border-radius: 15px;
          box-shadow: 0 5px 20px rgba(0,0,0,0.08);
          border: none;
          margin-bottom: 20px;
      }
      
      .form-header {
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          color: white;
          border-radius: 15px 15px 0 0;
          padding: 20px 30px;
      }
      
      .form-body {
          padding: 30px;
      }
      
      .form-section {
          margin-bottom: 30px;
          padding-bottom: 20px;
          border-bottom: 1px solid #eee;
      }
      
      .form-section:last-child {
          border-bottom: none;
          margin-bottom: 0;
          padding-bottom: 0;
      }
      
      .form-section-title {
          font-size: 1.1rem;
          font-weight: 600;
          color: #333;
          margin-bottom: 20px;
          padding-bottom: 10px;
          border-bottom: 2px solid #667eea;
          display: flex;
          align-items: center;
          gap: 10px;
      }
      
      .form-group-enhanced {
          margin-bottom: 25px;
      }
      
      .form-label {
          font-weight: 500;
          color: #555;
          margin-bottom: 8px;
          display: flex;
          align-items: center;
          gap: 8px;
      }
      
      .form-control-custom {
          border-radius: 8px;
          border: 1px solid #ddd;
          padding: 12px 15px;
          transition: all 0.3s;
          font-size: 0.95rem;
      }
      
      .form-control-custom:focus {
          border-color: #667eea;
          box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
      }
      
      .form-text-help {
          font-size: 0.85rem;
          color: #6c757d;
          margin-top: 5px;
      }
      
      .required-field::after {
          content: \" *\";
          color: #f5576c;
      }
      
      .btn-save {
          background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
          border: none;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
          color: white;
      }
      
      .btn-save:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(67, 233, 123, 0.3);
          color: white;
      }
      
      .btn-cancel {
          background: #f8f9fa;
          border: 1px solid #ddd;
          color: #333;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
      }
      
      .btn-cancel:hover {
          background: #e9ecef;
          border-color: #ccc;
      }
      
      .btn-delete {
          background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
          border: none;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
          color: white;
      }
      
      .btn-delete:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(240, 147, 251, 0.3);
          color: white;
      }
      
      .form-actions {
          display: flex;
          justify-content: space-between;
          gap: 15px;
          margin-top: 30px;
          padding-top: 20px;
          border-top: 1px solid #eee;
      }
      
      .info-card {
          background: #f8f9fa;
          border-radius: 10px;
          padding: 15px;
          border-left: 4px solid #667eea;
          margin-bottom: 25px;
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
      }
      
      .card-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .card-5 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      
      .help-icon {
          width: 40px;
          height: 40px;
          border-radius: 10px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 16px;
          color: white;
          margin-right: 15px;
          flex-shrink: 0;
      }
      
      .page-title {
          color: #333;
      }
      
      .breadcrumb {
          background: transparent;
          padding: 0;
      }
      
      .alert {
          border-radius: 10px;
          border: none;
          box-shadow: 0 2px 10px rgba(0,0,0,0.1);
          margin-bottom: 20px;
      }
      
      .status-badge {
          display: inline-block;
          padding: 5px 15px;
          border-radius: 20px;
          font-size: 0.9rem;
          font-weight: 500;
          margin-top: 5px;
      }
      
      .status-proposed { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
      .status-confirmed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
      .status-cancelled { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
      .status-postponed { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; }
      
      .delete-form {
          display: inline;
      }
      
      .modal-header-danger {
          background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
          color: white;
          border-radius: 10px 10px 0 0;
      }
      
      .action-buttons-left {
          display: flex;
          gap: 10px;
      }
      
      .action-buttons-right {
          display: flex;
          gap: 10px;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 315
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 318
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 319
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
        // line 327
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 327, $this->source); })()), "user", [], "any", false, false, false, 327)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 328
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "user", [], "any", false, false, false, 328), "profilePic", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 329
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "user", [], "any", false, false, false, 329), "profilePic", [], "any", false, false, false, 329))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 330, $this->source); })()), "user", [], "any", false, false, false, 330), "prenom", [], "any", false, false, false, 330), "html", null, true);
                yield "\" 
                           class=\"img-xs rounded-circle\">
                    ";
            } else {
                // line 333
                yield "                      <img class=\"img-xs rounded-circle\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
                yield "\" alt=\"\">
                    ";
            }
            // line 335
            yield "                  ";
        } else {
            // line 336
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 338
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 341
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "user", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 342
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342), "prenom", [], "any", false, false, false, 342), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342), "nom", [], "any", false, false, false, 342), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "user", [], "any", false, false, false, 343), "email", [], "any", false, false, false, 343), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 345
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 345, $this->source); })()), "user", [], "any", false, false, false, 345), "roles", [], "any", false, false, false, 345))) {
                // line 346
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 348
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 350
            yield "                    </div>
                  ";
        } else {
            // line 352
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 355
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
        // line 375
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
        // line 385
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
        // line 395
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
        // line 405
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
        // line 415
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
        // line 425
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
        // line 435
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
        // line 455
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
        // line 465
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
        // line 480
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchInput\">
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
                  <a class=\"dropdown-item preview-item\" href=\"";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 502, $this->source); })()), "id", [], "any", false, false, false, 502), "groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 502, $this->source); })()), "id", [], "any", false, false, false, 502)]), "html", null, true);
        yield "\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-info rounded-circle\">
                            <i class=\"mdi mdi-calendar-edit\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject mb-1\">Proposition de réunion</p>
                        <p class=\"text-muted ellipsis mb-0\"> Vous modifiez: ";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 510, $this->source); })()), "titre", [], "any", false, false, false, 510), "html", null, true);
        yield "</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 519
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 519, $this->source); })()), "user", [], "any", false, false, false, 519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 520
            yield "                      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 520, $this->source); })()), "user", [], "any", false, false, false, 520), "profilePic", [], "any", false, false, false, 520)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 521
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 521, $this->source); })()), "user", [], "any", false, false, false, 521), "profilePic", [], "any", false, false, false, 521))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 522, $this->source); })()), "user", [], "any", false, false, false, 522), "prenom", [], "any", false, false, false, 522), "html", null, true);
                yield "\" 
                             class=\"img-xs rounded-circle\">
                      ";
            } else {
                // line 525
                yield "                        <img class=\"img-xs rounded-circle\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
                yield "\" alt=\"\">
                      ";
            }
            // line 527
            yield "                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 527, $this->source); })()), "user", [], "any", false, false, false, 527), "prenom", [], "any", false, false, false, 527), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 527, $this->source); })()), "user", [], "any", false, false, false, 527), "nom", [], "any", false, false, false, 527), "html", null, true);
            yield "</p>
                    ";
        } else {
            // line 529
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 532
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 537
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 537, $this->source); })()), "user", [], "any", false, false, false, 537)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 538
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 538, $this->source); })()), "user", [], "any", false, false, false, 538), "prenom", [], "any", false, false, false, 538), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 538, $this->source); })()), "user", [], "any", false, false, false, 538), "nom", [], "any", false, false, false, 538), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 539
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 539, $this->source); })()), "user", [], "any", false, false, false, 539), "email", [], "any", false, false, false, 539), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 541
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541), "roles", [], "any", false, false, false, 541))) {
                // line 542
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 544
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 546
            yield "                      </small>
                    ";
        } else {
            // line 548
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 551
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 553
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 553, $this->source); })()), "user", [], "any", false, false, false, 553)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 554
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 554, $this->source); })()), "user", [], "any", false, false, false, 554), "id", [], "any", false, false, false, 554)]), "html", null, true);
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
            // line 564
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 564, $this->source); })()), "user", [], "any", false, false, false, 564), "id", [], "any", false, false, false, 564)]), "html", null, true);
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
        // line 576
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
        // line 596
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 596, $this->source); })()), "flashes", [], "any", false, false, false, 596));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 597
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 598
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 599
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 600
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 604
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-warning text-white me-2\">
                      <i class=\"mdi mdi-calendar-edit\"></i>
                    </span> 
                    Modifier Proposition
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 619
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">Groupes</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 622, $this->source); })()), "id", [], "any", false, false, false, 622)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 622, $this->source); })()), "nomProjet", [], "any", false, false, false, 622), "html", null, true);
        yield "</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_index", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 625, $this->source); })()), "id", [], "any", false, false, false, 625)]), "html", null, true);
        yield "\">Propositions</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 628, $this->source); })()), "id", [], "any", false, false, false, 628), "groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 628, $this->source); })()), "id", [], "any", false, false, false, 628)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 628, $this->source); })()), "titre", [], "any", false, false, false, 628), "html", null, true);
        yield "</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Modifier
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Form Section -->
            <div class=\"row\">
              <div class=\"col-lg-8 offset-lg-2\">
                <div class=\"card form-card\">
                  <div class=\"form-header\" style=\"background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"stat-icon card-5 me-3\">
                        <i class=\"mdi mdi-calendar-edit\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">Modifier la proposition</h4>
                        <p class=\"mb-0 opacity-75\">";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 650, $this->source); })()), "titre", [], "any", false, false, false, 650), "html", null, true);
        yield "</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"form-body\">
                    ";
        // line 656
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 656, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample"]]);
        yield "
                    
                    <!-- Proposal Info -->
                    <div class=\"info-card\">
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <h6 class=\"mb-2\"><i class=\"mdi mdi-calendar me-2\"></i>Proposition</h6>
                          <p class=\"mb-0\"><strong>";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 663, $this->source); })()), "titre", [], "any", false, false, false, 663), "html", null, true);
        yield "</strong></p>
                          <small class=\"text-muted\">ID: ";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 664, $this->source); })()), "id", [], "any", false, false, false, 664), "html", null, true);
        yield "</small>
                        </div>
                        <div class=\"col-md-6\">
                          <h6 class=\"mb-2\"><i class=\"mdi mdi-account-group me-2\"></i>Groupe</h6>
                          <p class=\"mb-0\">";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 668, $this->source); })()), "nomProjet", [], "any", false, false, false, 668), "html", null, true);
        yield "</p>
                          <small class=\"text-muted\">Créée le: ";
        // line 669
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 669, $this->source); })()), "createdAt", [], "any", false, false, false, 669)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 669, $this->source); })()), "createdAt", [], "any", false, false, false, 669), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "</small>
                        </div>
                      </div>
                    </div>

                    <!-- Basic Information -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-information-outline\"></i>
                        Informations de base
                      </h5>
                      
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-format-title\"></i>
                              ";
        // line 686
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 686, $this->source); })()), "titre", [], "any", false, false, false, 686), 'label');
        yield "
                            </label>
                            ";
        // line 688
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 688, $this->source); })()), "titre", [], "any", false, false, false, 688), 'widget', ["attr" => ["class" => "form-control form-control-custom", "placeholder" => "Ex: Réunion de lancement du projet"]]);
        // line 691
        yield "
                            <div class=\"form-text-help\">
                              Donnez un titre clair à votre proposition de réunion
                            </div>
                            ";
        // line 695
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 695, $this->source); })()), "titre", [], "any", false, false, false, 695), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-map-marker\"></i>
                              ";
        // line 703
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 703, $this->source); })()), "lieu", [], "any", false, false, false, 703), 'label');
        yield "
                            </label>
                            ";
        // line 705
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 705, $this->source); })()), "lieu", [], "any", false, false, false, 705), 'widget', ["attr" => ["class" => "form-control form-control-custom", "placeholder" => "Ex: Salle B2.3, Amphi A..."]]);
        // line 708
        yield "
                            <div class=\"form-text-help\">
                              Spécifiez le lieu de la réunion
                            </div>
                            ";
        // line 712
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 712, $this->source); })()), "lieu", [], "any", false, false, false, 712), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-calendar\"></i>
                              ";
        // line 722
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 722, $this->source); })()), "dateReunion", [], "any", false, false, false, 722), 'label');
        yield "
                            </label>
                            ";
        // line 724
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 724, $this->source); })()), "dateReunion", [], "any", false, false, false, 724), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 726
        yield "
                            ";
        // line 727
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 727, $this->source); })()), "dateReunion", [], "any", false, false, false, 727), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-clock-start\"></i>
                              ";
        // line 735
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 735, $this->source); })()), "heureDebut", [], "any", false, false, false, 735), 'label');
        yield "
                            </label>
                            ";
        // line 737
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 737, $this->source); })()), "heureDebut", [], "any", false, false, false, 737), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 739
        yield "
                            ";
        // line 740
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 740, $this->source); })()), "heureDebut", [], "any", false, false, false, 740), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-clock-end\"></i>
                              ";
        // line 748
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 748, $this->source); })()), "heureFin", [], "any", false, false, false, 748), 'label');
        yield "
                            </label>
                            ";
        // line 750
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 750, $this->source); })()), "heureFin", [], "any", false, false, false, 750), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 752
        yield "
                            ";
        // line 753
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 753, $this->source); })()), "heureFin", [], "any", false, false, false, 753), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Description -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-text-box-outline\"></i>
                        Description et ordre du jour
                      </h5>
                      
                      <div class=\"form-group-enhanced\">
                        <label class=\"form-label required-field\">
                          <i class=\"mdi mdi-text\"></i>
                          ";
        // line 769
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 769, $this->source); })()), "description", [], "any", false, false, false, 769), 'label');
        yield "
                        </label>
                        ";
        // line 771
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 771, $this->source); })()), "description", [], "any", false, false, false, 771), 'widget', ["attr" => ["class" => "form-control form-control-custom", "rows" => "5", "placeholder" => "Décrivez l'ordre du jour, les sujets à aborder, les objectifs de la réunion..."]]);
        // line 775
        yield "
                        <div class=\"form-text-help\">
                          Détaillez le contenu et les objectifs de la réunion
                        </div>
                        ";
        // line 779
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 779, $this->source); })()), "description", [], "any", false, false, false, 779), 'errors');
        yield "
                      </div>
                    </div>
                    
                    <!-- Status -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-progress-check\"></i>
                        Statut
                      </h5>
                      
                      <div class=\"form-group-enhanced\">
                        <label class=\"form-label required-field\">
                          <i class=\"mdi mdi-status-update\"></i>
                          ";
        // line 793
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 793, $this->source); })()), "status", [], "any", false, false, false, 793), 'label');
        yield "
                        </label>
                        ";
        // line 795
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 795, $this->source); })()), "status", [], "any", false, false, false, 795), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 797
        yield "
                        <div class=\"form-text-help\">
                          Sélectionnez le statut de la proposition
                        </div>
                        ";
        // line 801
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 801, $this->source); })()), "status", [], "any", false, false, false, 801), 'errors');
        yield "
                      </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"form-actions\">
                      <div class=\"action-buttons-left\">
                        <a href=\"";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 808, $this->source); })()), "id", [], "any", false, false, false, 808), "groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 808, $this->source); })()), "id", [], "any", false, false, false, 808)]), "html", null, true);
        yield "\" class=\"btn btn-cancel\">
                          <i class=\"mdi mdi-arrow-left me-1\"></i>
                          Retour aux détails
                        </a>
                      </div>
                      <div class=\"action-buttons-right\">
                        <button type=\"button\" class=\"btn btn-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                          <i class=\"mdi mdi-delete me-1\"></i>
                          Supprimer
                        </button>
                        <button type=\"submit\" class=\"btn btn-save\">
                          <i class=\"mdi mdi-content-save me-1\"></i>
                          Enregistrer les modifications
                        </button>
                      </div>
                    </div>
                    
                    ";
        // line 825
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 825, $this->source); })()), 'form_end');
        yield "
                    
                    <!-- Delete Confirmation Modal -->
                    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header modal-header-danger\">
                            <h5 class=\"modal-title\" id=\"deleteModalLabel\">
                              <i class=\"mdi mdi-alert-circle me-2\"></i>
                              Confirmer la suppression
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                          </div>
                          <div class=\"modal-body\">
                            <p>Êtes-vous sûr de vouloir supprimer cette proposition de réunion ?</p>
                            <div class=\"alert alert-warning\">
                              <i class=\"mdi mdi-alert me-2\"></i>
                              Cette action est irréversible. Toutes les données associées seront supprimées.
                            </div>
                            <p><strong>Proposition :</strong> ";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 844, $this->source); })()), "titre", [], "any", false, false, false, 844), "html", null, true);
        yield "</p>
                            <p><strong>Groupe :</strong> ";
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 845, $this->source); })()), "nomProjet", [], "any", false, false, false, 845), "html", null, true);
        yield "</p>
                            <p><strong>Date :</strong> ";
        // line 846
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 846, $this->source); })()), "dateReunion", [], "any", false, false, false, 846)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 846, $this->source); })()), "dateReunion", [], "any", false, false, false, 846), "d/m/Y"), "html", null, true)) : (""));
        yield "</p>
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                              <i class=\"mdi mdi-close me-1\"></i>
                              Annuler
                            </button>
                            ";
        // line 853
        yield Twig\Extension\CoreExtension::include($this->env, $context, "proposition_reunion/_delete_form.html.twig");
        yield "
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Help Section -->
            <div class=\"row mt-4\">
              <div class=\"col-lg-8 offset-lg-2\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">
                      <i class=\"mdi mdi-information-outline text-warning me-2\"></i>
                      Informations sur la modification
                    </h5>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-5 me-3\">
                            <i class=\"mdi mdi-history\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Historique des modifications</h6>
                            <p class=\"text-muted mb-0 small\">La date de dernière modification sera automatiquement mise à jour.</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-3 me-3\">
                            <i class=\"mdi mdi-bell-ring\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Notifications</h6>
                            <p class=\"text-muted mb-0 small\">Les membres du groupe seront notifiés des changements importants.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-4 me-3\">
                            <i class=\"mdi mdi-backup-restore\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Annulation</h6>
                            <p class=\"text-muted mb-0 small\">Vous pouvez annuler les modifications avant de sauvegarder.</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-2 me-3\">
                            <i class=\"mdi mdi-eye\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Prévisualisation</h6>
                            <p class=\"text-muted mb-0 small\">Retournez aux détails pour voir comment apparaîtront les modifications.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 930
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 931
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get form field IDs dynamically
        const form = document.querySelector('form.form-sample');
        if (form) {
            // Set minimum date to today
            const dateField = form.querySelector('input[type=\"date\"]');
            if (dateField) {
                const today = new Date().toISOString().split('T')[0];
                dateField.min = today;
            }
            
            // Validate time range
            const timeInputs = form.querySelectorAll('input[type=\"time\"]');
            if (timeInputs.length >= 2) {
                const startTimeField = timeInputs[0];
                const endTimeField = timeInputs[1];
                
                if (startTimeField && endTimeField) {
                    startTimeField.addEventListener('change', validateTimeRange);
                    endTimeField.addEventListener('change', validateTimeRange);
                    
                    function validateTimeRange() {
                        if (startTimeField.value && endTimeField.value) {
                            const startTime = new Date('2000-01-01T' + startTimeField.value + ':00');
                            const endTime = new Date('2000-01-01T' + endTimeField.value + ':00');
                            
                            if (endTime <= startTime) {
                                alert('L\\'heure de fin doit être postérieure à l\\'heure de début.');
                                endTimeField.value = '';
                                endTimeField.focus();
                            }
                        }
                    }
                }
            }
            
            // Character counter for description
            const textareas = form.querySelectorAll('textarea');
            if (textareas.length > 0) {
                const descriptionField = textareas[0];
                const counter = document.createElement('div');
                counter.className = 'form-text-help text-end';
                counter.innerHTML = '<span id=\"charCount\">' + descriptionField.value.length + '</span> / 2000 caractères';
                descriptionField.parentNode.appendChild(counter);
                
                descriptionField.addEventListener('input', function() {
                    const charCount = this.value.length;
                    document.getElementById('charCount').textContent = charCount;
                    
                    if (charCount > 2000) {
                        counter.classList.add('text-danger');
                        this.value = this.value.substring(0, 2000);
                        document.getElementById('charCount').textContent = '2000';
                    } else {
                        counter.classList.remove('text-danger');
                    }
                });
            }
            
            // Add tooltips for required fields
            const requiredLabels = form.querySelectorAll('.required-field');
            requiredLabels.forEach(label => {
                label.title = 'Ce champ est obligatoire';
            });
        }
        
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
        
        // Format time inputs for better UX
        const timeInputs = document.querySelectorAll('input[type=\"time\"]');
        timeInputs.forEach(input => {
            input.addEventListener('focus', function() {
                if (typeof this.showPicker === 'function') {
                    this.showPicker();
                }
            });
        });
        
        // Format date inputs
        const dateInputs = document.querySelectorAll('input[type=\"date\"]');
        dateInputs.forEach(input => {
            input.addEventListener('focus', function() {
                if (typeof this.showPicker === 'function') {
                    this.showPicker();
                }
            });
        });
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
        return "proposition_reunion/edit.html.twig";
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
        return array (  1334 => 932,  1330 => 931,  1326 => 930,  1246 => 853,  1236 => 846,  1232 => 845,  1228 => 844,  1206 => 825,  1186 => 808,  1176 => 801,  1170 => 797,  1168 => 795,  1163 => 793,  1146 => 779,  1140 => 775,  1138 => 771,  1133 => 769,  1114 => 753,  1111 => 752,  1109 => 750,  1104 => 748,  1093 => 740,  1090 => 739,  1088 => 737,  1083 => 735,  1072 => 727,  1069 => 726,  1067 => 724,  1062 => 722,  1049 => 712,  1043 => 708,  1041 => 705,  1036 => 703,  1025 => 695,  1019 => 691,  1017 => 688,  1012 => 686,  992 => 669,  988 => 668,  981 => 664,  977 => 663,  967 => 656,  958 => 650,  931 => 628,  925 => 625,  917 => 622,  911 => 619,  895 => 605,  889 => 604,  879 => 600,  875 => 599,  870 => 598,  865 => 597,  860 => 596,  837 => 576,  822 => 564,  808 => 554,  806 => 553,  802 => 551,  797 => 548,  793 => 546,  789 => 544,  785 => 542,  783 => 541,  778 => 539,  771 => 538,  769 => 537,  762 => 532,  755 => 529,  747 => 527,  741 => 525,  735 => 522,  730 => 521,  727 => 520,  725 => 519,  713 => 510,  702 => 502,  677 => 480,  659 => 465,  646 => 455,  623 => 435,  610 => 425,  597 => 415,  584 => 405,  571 => 395,  558 => 385,  545 => 375,  523 => 355,  518 => 352,  514 => 350,  510 => 348,  506 => 346,  504 => 345,  499 => 343,  492 => 342,  490 => 341,  485 => 338,  479 => 336,  476 => 335,  470 => 333,  464 => 330,  459 => 329,  456 => 328,  454 => 327,  443 => 319,  439 => 318,  434 => 316,  430 => 315,  131 => 19,  127 => 18,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Proposition - {{ proposition_reunion.titre }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Modifier Proposition</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />
    <style>
      /* Profile Avatar Styles - Fixed Sizes */
      .img-xs {
        width: 37px !important;
        height: 37px !important;
      }
      
      .profile-avatar-img {
        width: 37px;
        height: 37px;
        border-radius: 50%;
        object-fit: cover;
      }
      
      .profile-avatar {
        width: 37px;
        height: 37px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 14px;
      }
      
      .navbar-avatar-img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
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
        font-size: 13px;
      }
      
      .user-role-badge {
        font-size: 0.7rem;
        padding: 2px 8px;
        border-radius: 10px;
        margin-top: 3px;
        display: inline-block;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
      }
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      /* Styles spécifiques pour cette page */
      .form-card {
          border-radius: 15px;
          box-shadow: 0 5px 20px rgba(0,0,0,0.08);
          border: none;
          margin-bottom: 20px;
      }
      
      .form-header {
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          color: white;
          border-radius: 15px 15px 0 0;
          padding: 20px 30px;
      }
      
      .form-body {
          padding: 30px;
      }
      
      .form-section {
          margin-bottom: 30px;
          padding-bottom: 20px;
          border-bottom: 1px solid #eee;
      }
      
      .form-section:last-child {
          border-bottom: none;
          margin-bottom: 0;
          padding-bottom: 0;
      }
      
      .form-section-title {
          font-size: 1.1rem;
          font-weight: 600;
          color: #333;
          margin-bottom: 20px;
          padding-bottom: 10px;
          border-bottom: 2px solid #667eea;
          display: flex;
          align-items: center;
          gap: 10px;
      }
      
      .form-group-enhanced {
          margin-bottom: 25px;
      }
      
      .form-label {
          font-weight: 500;
          color: #555;
          margin-bottom: 8px;
          display: flex;
          align-items: center;
          gap: 8px;
      }
      
      .form-control-custom {
          border-radius: 8px;
          border: 1px solid #ddd;
          padding: 12px 15px;
          transition: all 0.3s;
          font-size: 0.95rem;
      }
      
      .form-control-custom:focus {
          border-color: #667eea;
          box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
      }
      
      .form-text-help {
          font-size: 0.85rem;
          color: #6c757d;
          margin-top: 5px;
      }
      
      .required-field::after {
          content: \" *\";
          color: #f5576c;
      }
      
      .btn-save {
          background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
          border: none;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
          color: white;
      }
      
      .btn-save:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(67, 233, 123, 0.3);
          color: white;
      }
      
      .btn-cancel {
          background: #f8f9fa;
          border: 1px solid #ddd;
          color: #333;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
      }
      
      .btn-cancel:hover {
          background: #e9ecef;
          border-color: #ccc;
      }
      
      .btn-delete {
          background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
          border: none;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
          color: white;
      }
      
      .btn-delete:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(240, 147, 251, 0.3);
          color: white;
      }
      
      .form-actions {
          display: flex;
          justify-content: space-between;
          gap: 15px;
          margin-top: 30px;
          padding-top: 20px;
          border-top: 1px solid #eee;
      }
      
      .info-card {
          background: #f8f9fa;
          border-radius: 10px;
          padding: 15px;
          border-left: 4px solid #667eea;
          margin-bottom: 25px;
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
      }
      
      .card-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
      .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
      .card-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
      .card-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
      .card-5 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
      
      .help-icon {
          width: 40px;
          height: 40px;
          border-radius: 10px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 16px;
          color: white;
          margin-right: 15px;
          flex-shrink: 0;
      }
      
      .page-title {
          color: #333;
      }
      
      .breadcrumb {
          background: transparent;
          padding: 0;
      }
      
      .alert {
          border-radius: 10px;
          border: none;
          box-shadow: 0 2px 10px rgba(0,0,0,0.1);
          margin-bottom: 20px;
      }
      
      .status-badge {
          display: inline-block;
          padding: 5px 15px;
          border-radius: 20px;
          font-size: 0.9rem;
          font-weight: 500;
          margin-top: 5px;
      }
      
      .status-proposed { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
      .status-confirmed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
      .status-cancelled { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
      .status-postponed { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; }
      
      .delete-form {
          display: inline;
      }
      
      .modal-header-danger {
          background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
          color: white;
          border-radius: 10px 10px 0 0;
      }
      
      .action-buttons-left {
          display: flex;
          gap: 10px;
      }
      
      .action-buttons-right {
          display: flex;
          gap: 10px;
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
                           class=\"img-xs rounded-circle\">
                    {% else %}
                      <img class=\"img-xs rounded-circle\" src=\"{{ asset('assets/images/faces/face15.jpg') }}\" alt=\"\">
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchInput\">
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
                  <a class=\"dropdown-item preview-item\" href=\"{{ path('app_proposition_reunion_show', {'id': proposition_reunion.id, 'groupeId': groupe_projet.id}) }}\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-info rounded-circle\">
                            <i class=\"mdi mdi-calendar-edit\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject mb-1\">Proposition de réunion</p>
                        <p class=\"text-muted ellipsis mb-0\"> Vous modifiez: {{ proposition_reunion.titre }}</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    {% if app.user %}
                      {% if app.user.profilePic %}
                        <img src=\"{{ asset('uploads/profile_pics/' ~ app.user.profilePic) }}\" 
                             alt=\"{{ app.user.prenom }}\" 
                             class=\"img-xs rounded-circle\">
                      {% else %}
                        <img class=\"img-xs rounded-circle\" src=\"{{ asset('assets/images/faces/face15.jpg') }}\" alt=\"\">
                      {% endif %}
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">{{ app.user.prenom }} {{ app.user.nom }}</p>
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
                    <span class=\"page-title-icon bg-gradient-warning text-white me-2\">
                      <i class=\"mdi mdi-calendar-edit\"></i>
                    </span> 
                    Modifier Proposition
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_groupe_projet_index') }}\">Groupes</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_groupe_projet_show', {'id': groupe_projet.id}) }}\">{{ groupe_projet.nomProjet }}</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_proposition_reunion_index', {'groupeId': groupe_projet.id}) }}\">Propositions</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_proposition_reunion_show', {'id': proposition_reunion.id, 'groupeId': groupe_projet.id}) }}\">{{ proposition_reunion.titre }}</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Modifier
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Form Section -->
            <div class=\"row\">
              <div class=\"col-lg-8 offset-lg-2\">
                <div class=\"card form-card\">
                  <div class=\"form-header\" style=\"background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"stat-icon card-5 me-3\">
                        <i class=\"mdi mdi-calendar-edit\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">Modifier la proposition</h4>
                        <p class=\"mb-0 opacity-75\">{{ proposition_reunion.titre }}</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"form-body\">
                    {{ form_start(form, {'attr': {'class': 'form-sample'}}) }}
                    
                    <!-- Proposal Info -->
                    <div class=\"info-card\">
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <h6 class=\"mb-2\"><i class=\"mdi mdi-calendar me-2\"></i>Proposition</h6>
                          <p class=\"mb-0\"><strong>{{ proposition_reunion.titre }}</strong></p>
                          <small class=\"text-muted\">ID: {{ proposition_reunion.id }}</small>
                        </div>
                        <div class=\"col-md-6\">
                          <h6 class=\"mb-2\"><i class=\"mdi mdi-account-group me-2\"></i>Groupe</h6>
                          <p class=\"mb-0\">{{ groupe_projet.nomProjet }}</p>
                          <small class=\"text-muted\">Créée le: {{ proposition_reunion.createdAt ? proposition_reunion.createdAt|date('d/m/Y H:i') : '' }}</small>
                        </div>
                      </div>
                    </div>

                    <!-- Basic Information -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-information-outline\"></i>
                        Informations de base
                      </h5>
                      
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-format-title\"></i>
                              {{ form_label(form.titre) }}
                            </label>
                            {{ form_widget(form.titre, {'attr': {
                              'class': 'form-control form-control-custom',
                              'placeholder': 'Ex: Réunion de lancement du projet'
                            }}) }}
                            <div class=\"form-text-help\">
                              Donnez un titre clair à votre proposition de réunion
                            </div>
                            {{ form_errors(form.titre) }}
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-map-marker\"></i>
                              {{ form_label(form.lieu) }}
                            </label>
                            {{ form_widget(form.lieu, {'attr': {
                              'class': 'form-control form-control-custom',
                              'placeholder': 'Ex: Salle B2.3, Amphi A...'
                            }}) }}
                            <div class=\"form-text-help\">
                              Spécifiez le lieu de la réunion
                            </div>
                            {{ form_errors(form.lieu) }}
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-calendar\"></i>
                              {{ form_label(form.dateReunion) }}
                            </label>
                            {{ form_widget(form.dateReunion, {'attr': {
                              'class': 'form-control form-control-custom'
                            }}) }}
                            {{ form_errors(form.dateReunion) }}
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-clock-start\"></i>
                              {{ form_label(form.heureDebut) }}
                            </label>
                            {{ form_widget(form.heureDebut, {'attr': {
                              'class': 'form-control form-control-custom'
                            }}) }}
                            {{ form_errors(form.heureDebut) }}
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-clock-end\"></i>
                              {{ form_label(form.heureFin) }}
                            </label>
                            {{ form_widget(form.heureFin, {'attr': {
                              'class': 'form-control form-control-custom'
                            }}) }}
                            {{ form_errors(form.heureFin) }}
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Description -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-text-box-outline\"></i>
                        Description et ordre du jour
                      </h5>
                      
                      <div class=\"form-group-enhanced\">
                        <label class=\"form-label required-field\">
                          <i class=\"mdi mdi-text\"></i>
                          {{ form_label(form.description) }}
                        </label>
                        {{ form_widget(form.description, {'attr': {
                          'class': 'form-control form-control-custom',
                          'rows': '5',
                          'placeholder': 'Décrivez l\\'ordre du jour, les sujets à aborder, les objectifs de la réunion...'
                        }}) }}
                        <div class=\"form-text-help\">
                          Détaillez le contenu et les objectifs de la réunion
                        </div>
                        {{ form_errors(form.description) }}
                      </div>
                    </div>
                    
                    <!-- Status -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-progress-check\"></i>
                        Statut
                      </h5>
                      
                      <div class=\"form-group-enhanced\">
                        <label class=\"form-label required-field\">
                          <i class=\"mdi mdi-status-update\"></i>
                          {{ form_label(form.status) }}
                        </label>
                        {{ form_widget(form.status, {'attr': {
                          'class': 'form-control form-control-custom'
                        }}) }}
                        <div class=\"form-text-help\">
                          Sélectionnez le statut de la proposition
                        </div>
                        {{ form_errors(form.status) }}
                      </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"form-actions\">
                      <div class=\"action-buttons-left\">
                        <a href=\"{{path('app_proposition_reunion_show', {'id': proposition_reunion.id, 'groupeId': groupe_projet.id}) }}\" class=\"btn btn-cancel\">
                          <i class=\"mdi mdi-arrow-left me-1\"></i>
                          Retour aux détails
                        </a>
                      </div>
                      <div class=\"action-buttons-right\">
                        <button type=\"button\" class=\"btn btn-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                          <i class=\"mdi mdi-delete me-1\"></i>
                          Supprimer
                        </button>
                        <button type=\"submit\" class=\"btn btn-save\">
                          <i class=\"mdi mdi-content-save me-1\"></i>
                          Enregistrer les modifications
                        </button>
                      </div>
                    </div>
                    
                    {{ form_end(form) }}
                    
                    <!-- Delete Confirmation Modal -->
                    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header modal-header-danger\">
                            <h5 class=\"modal-title\" id=\"deleteModalLabel\">
                              <i class=\"mdi mdi-alert-circle me-2\"></i>
                              Confirmer la suppression
                            </h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                          </div>
                          <div class=\"modal-body\">
                            <p>Êtes-vous sûr de vouloir supprimer cette proposition de réunion ?</p>
                            <div class=\"alert alert-warning\">
                              <i class=\"mdi mdi-alert me-2\"></i>
                              Cette action est irréversible. Toutes les données associées seront supprimées.
                            </div>
                            <p><strong>Proposition :</strong> {{ proposition_reunion.titre }}</p>
                            <p><strong>Groupe :</strong> {{ groupe_projet.nomProjet }}</p>
                            <p><strong>Date :</strong> {{ proposition_reunion.dateReunion ? proposition_reunion.dateReunion|date('d/m/Y') : '' }}</p>
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                              <i class=\"mdi mdi-close me-1\"></i>
                              Annuler
                            </button>
                            {{ include('proposition_reunion/_delete_form.html.twig') }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Help Section -->
            <div class=\"row mt-4\">
              <div class=\"col-lg-8 offset-lg-2\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">
                      <i class=\"mdi mdi-information-outline text-warning me-2\"></i>
                      Informations sur la modification
                    </h5>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-5 me-3\">
                            <i class=\"mdi mdi-history\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Historique des modifications</h6>
                            <p class=\"text-muted mb-0 small\">La date de dernière modification sera automatiquement mise à jour.</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-3 me-3\">
                            <i class=\"mdi mdi-bell-ring\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Notifications</h6>
                            <p class=\"text-muted mb-0 small\">Les membres du groupe seront notifiés des changements importants.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-4 me-3\">
                            <i class=\"mdi mdi-backup-restore\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Annulation</h6>
                            <p class=\"text-muted mb-0 small\">Vous pouvez annuler les modifications avant de sauvegarder.</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-2 me-3\">
                            <i class=\"mdi mdi-eye\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Prévisualisation</h6>
                            <p class=\"text-muted mb-0 small\">Retournez aux détails pour voir comment apparaîtront les modifications.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
        // Get form field IDs dynamically
        const form = document.querySelector('form.form-sample');
        if (form) {
            // Set minimum date to today
            const dateField = form.querySelector('input[type=\"date\"]');
            if (dateField) {
                const today = new Date().toISOString().split('T')[0];
                dateField.min = today;
            }
            
            // Validate time range
            const timeInputs = form.querySelectorAll('input[type=\"time\"]');
            if (timeInputs.length >= 2) {
                const startTimeField = timeInputs[0];
                const endTimeField = timeInputs[1];
                
                if (startTimeField && endTimeField) {
                    startTimeField.addEventListener('change', validateTimeRange);
                    endTimeField.addEventListener('change', validateTimeRange);
                    
                    function validateTimeRange() {
                        if (startTimeField.value && endTimeField.value) {
                            const startTime = new Date('2000-01-01T' + startTimeField.value + ':00');
                            const endTime = new Date('2000-01-01T' + endTimeField.value + ':00');
                            
                            if (endTime <= startTime) {
                                alert('L\\'heure de fin doit être postérieure à l\\'heure de début.');
                                endTimeField.value = '';
                                endTimeField.focus();
                            }
                        }
                    }
                }
            }
            
            // Character counter for description
            const textareas = form.querySelectorAll('textarea');
            if (textareas.length > 0) {
                const descriptionField = textareas[0];
                const counter = document.createElement('div');
                counter.className = 'form-text-help text-end';
                counter.innerHTML = '<span id=\"charCount\">' + descriptionField.value.length + '</span> / 2000 caractères';
                descriptionField.parentNode.appendChild(counter);
                
                descriptionField.addEventListener('input', function() {
                    const charCount = this.value.length;
                    document.getElementById('charCount').textContent = charCount;
                    
                    if (charCount > 2000) {
                        counter.classList.add('text-danger');
                        this.value = this.value.substring(0, 2000);
                        document.getElementById('charCount').textContent = '2000';
                    } else {
                        counter.classList.remove('text-danger');
                    }
                });
            }
            
            // Add tooltips for required fields
            const requiredLabels = form.querySelectorAll('.required-field');
            requiredLabels.forEach(label => {
                label.title = 'Ce champ est obligatoire';
            });
        }
        
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
        
        // Format time inputs for better UX
        const timeInputs = document.querySelectorAll('input[type=\"time\"]');
        timeInputs.forEach(input => {
            input.addEventListener('focus', function() {
                if (typeof this.showPicker === 'function') {
                    this.showPicker();
                }
            });
        });
        
        // Format date inputs
        const dateInputs = document.querySelectorAll('input[type=\"date\"]');
        dateInputs.forEach(input => {
            input.addEventListener('focus', function() {
                if (typeof this.showPicker === 'function') {
                    this.showPicker();
                }
            });
        });
    });
    </script>
  </body>
</html>
{% endblock %}
", "proposition_reunion/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\proposition_reunion\\edit.html.twig");
    }
}
