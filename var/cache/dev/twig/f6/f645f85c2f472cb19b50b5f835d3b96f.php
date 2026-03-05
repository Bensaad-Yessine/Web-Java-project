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

/* proposition_reunion/show.html.twig */
class __TwigTemplate_4ffc0092fb1016eb2be5a9d8069a729f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/show.html.twig"));

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

        yield "Détails Proposition - ";
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
    <title>ESPRIT - Détails Proposition</title>
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
      .info-card {
          border-radius: 15px;
          box-shadow: 0 5px 20px rgba(0,0,0,0.08);
          border: none;
          margin-bottom: 20px;
      }
      
      .info-card-header {
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          color: white;
          border-radius: 15px 15px 0 0;
          padding: 20px 30px;
      }
      
      .info-card-body {
          padding: 30px;
      }
      
      .info-section {
          margin-bottom: 30px;
          padding-bottom: 20px;
          border-bottom: 1px solid #eee;
      }
      
      .info-section:last-child {
          border-bottom: none;
          margin-bottom: 0;
          padding-bottom: 0;
      }
      
      .info-section-title {
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
      
      .info-item {
          margin-bottom: 20px;
      }
      
      .info-label {
          font-weight: 600;
          color: #555;
          margin-bottom: 8px;
          display: flex;
          align-items: center;
          gap: 10px;
          font-size: 1rem;
      }
      
      .info-value {
          color: #333;
          font-size: 1.05rem;
          padding-left: 35px;
          min-height: 40px;
          display: flex;
          align-items: center;
      }
      
      .description-box {
          background: #f8f9fa;
          border-radius: 10px;
          padding: 20px;
          border-left: 4px solid #667eea;
          margin-top: 10px;
      }
      
      .btn-edit {
          background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
          border: none;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
          color: white;
      }
      
      .btn-edit:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(250, 112, 154, 0.3);
          color: white;
      }
      
      .btn-back {
          background: #f8f9fa;
          border: 1px solid #ddd;
          color: #333;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
      }
      
      .btn-back:hover {
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
      
      .action-buttons {
          display: flex;
          justify-content: space-between;
          gap: 15px;
          margin-top: 30px;
          padding-top: 20px;
          border-top: 1px solid #eee;
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
      
      .status-badge {
          display: inline-block;
          padding: 8px 20px;
          border-radius: 20px;
          font-size: 0.9rem;
          font-weight: 500;
      }
      
      .status-proposed { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
      .status-confirmed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
      .status-cancelled { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
      .status-postponed { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; }
      
      .timeline {
          position: relative;
          padding-left: 30px;
      }
      
      .timeline:before {
          content: '';
          position: absolute;
          left: 0;
          top: 0;
          bottom: 0;
          width: 2px;
          background: #667eea;
      }
      
      .timeline-item {
          position: relative;
          margin-bottom: 20px;
      }
      
      .timeline-item:before {
          content: '';
          position: absolute;
          left: -33px;
          top: 5px;
          width: 12px;
          height: 12px;
          border-radius: 50%;
          background: #667eea;
          border: 3px solid white;
          box-shadow: 0 0 0 2px #667eea;
      }
      
      .timeline-date {
          font-size: 0.85rem;
          color: #6c757d;
          margin-bottom: 5px;
      }
      
      .timeline-content {
          background: #f8f9fa;
          padding: 15px;
          border-radius: 8px;
      }
      
      .stats-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
          gap: 20px;
          margin-bottom: 30px;
      }
      
      .stat-item {
          text-align: center;
          padding: 20px;
          background: white;
          border-radius: 10px;
          box-shadow: 0 3px 10px rgba(0,0,0,0.08);
      }
      
      .stat-icon-small {
          width: 50px;
          height: 50px;
          border-radius: 12px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 20px;
          color: white;
          margin: 0 auto 15px;
      }
      
      .stat-value {
          font-size: 1.5rem;
          font-weight: 700;
          margin-bottom: 5px;
      }
      
      .stat-title {
          font-size: 0.9rem;
          color: #6c757d;
          text-transform: uppercase;
          letter-spacing: 0.5px;
      }
      
      .alert {
          border-radius: 10px;
          border: none;
          box-shadow: 0 2px 10px rgba(0,0,0,0.1);
          margin-bottom: 20px;
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
      
      .empty-state {
          text-align: center;
          padding: 40px 20px;
          color: #6c757d;
      }
      
      .empty-state i {
          font-size: 60px;
          margin-bottom: 20px;
          opacity: 0.5;
      }
      
      .member-avatar {
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
          margin-right: 10px;
      }
      
      .member-item {
          display: flex;
          align-items: center;
          padding: 10px;
          border-radius: 8px;
          margin-bottom: 10px;
          background: #f8f9fa;
          transition: all 0.3s;
      }
      
      .member-item:hover {
          background: #e9ecef;
          transform: translateX(5px);
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 400
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 403
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 404
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
        // line 412
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 412, $this->source); })()), "user", [], "any", false, false, false, 412)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 413
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 413, $this->source); })()), "user", [], "any", false, false, false, 413), "profilePic", [], "any", false, false, false, 413)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 414
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "user", [], "any", false, false, false, 414), "profilePic", [], "any", false, false, false, 414))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 415, $this->source); })()), "user", [], "any", false, false, false, 415), "prenom", [], "any", false, false, false, 415), "html", null, true);
                yield "\" 
                           class=\"img-xs rounded-circle\">
                    ";
            } else {
                // line 418
                yield "                      <img class=\"img-xs rounded-circle\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
                yield "\" alt=\"\">
                    ";
            }
            // line 420
            yield "                  ";
        } else {
            // line 421
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 423
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 426
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 426, $this->source); })()), "user", [], "any", false, false, false, 426)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 427
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 427, $this->source); })()), "user", [], "any", false, false, false, 427), "prenom", [], "any", false, false, false, 427), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 427, $this->source); })()), "user", [], "any", false, false, false, 427), "nom", [], "any", false, false, false, 427), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "user", [], "any", false, false, false, 428), "email", [], "any", false, false, false, 428), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 430
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 430, $this->source); })()), "user", [], "any", false, false, false, 430), "roles", [], "any", false, false, false, 430))) {
                // line 431
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 433
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 435
            yield "                    </div>
                  ";
        } else {
            // line 437
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 440
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
        // line 460
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
        // line 470
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
        // line 480
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
        // line 490
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
        // line 500
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
        // line 510
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
        // line 520
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
        // line 540
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
        // line 550
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
        // line 565
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
                  <a class=\"dropdown-item preview-item\" href=\"#\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-info rounded-circle\">
                            <i class=\"mdi mdi-calendar-text\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject mb-1\">Proposition de réunion</p>
                        <p class=\"text-muted ellipsis mb-0\"> Vous consultez: ";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 595, $this->source); })()), "titre", [], "any", false, false, false, 595), "html", null, true);
        yield "</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 604
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 604, $this->source); })()), "user", [], "any", false, false, false, 604)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 605
            yield "                      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 605, $this->source); })()), "user", [], "any", false, false, false, 605), "profilePic", [], "any", false, false, false, 605)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 606
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 606, $this->source); })()), "user", [], "any", false, false, false, 606), "profilePic", [], "any", false, false, false, 606))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 607
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 607, $this->source); })()), "user", [], "any", false, false, false, 607), "prenom", [], "any", false, false, false, 607), "html", null, true);
                yield "\" 
                             class=\"img-xs rounded-circle\">
                      ";
            } else {
                // line 610
                yield "                        <img class=\"img-xs rounded-circle\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
                yield "\" alt=\"\">
                      ";
            }
            // line 612
            yield "                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 612, $this->source); })()), "user", [], "any", false, false, false, 612), "prenom", [], "any", false, false, false, 612), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 612, $this->source); })()), "user", [], "any", false, false, false, 612), "nom", [], "any", false, false, false, 612), "html", null, true);
            yield "</p>
                    ";
        } else {
            // line 614
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 617
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 622
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 622, $this->source); })()), "user", [], "any", false, false, false, 622)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 623
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 623, $this->source); })()), "user", [], "any", false, false, false, 623), "prenom", [], "any", false, false, false, 623), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 623, $this->source); })()), "user", [], "any", false, false, false, 623), "nom", [], "any", false, false, false, 623), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 624
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 624, $this->source); })()), "user", [], "any", false, false, false, 624), "email", [], "any", false, false, false, 624), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 626
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 626, $this->source); })()), "user", [], "any", false, false, false, 626), "roles", [], "any", false, false, false, 626))) {
                // line 627
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 629
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 631
            yield "                      </small>
                    ";
        } else {
            // line 633
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 636
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 638
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 638, $this->source); })()), "user", [], "any", false, false, false, 638)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 639
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 639, $this->source); })()), "user", [], "any", false, false, false, 639), "id", [], "any", false, false, false, 639)]), "html", null, true);
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
            // line 649
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 649, $this->source); })()), "user", [], "any", false, false, false, 649), "id", [], "any", false, false, false, 649)]), "html", null, true);
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
        // line 661
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
        // line 681
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 681, $this->source); })()), "flashes", [], "any", false, false, false, 681));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 682
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 683
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 684
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 685
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 689
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 690
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-info text-white me-2\">
                      <i class=\"mdi mdi-calendar-text\"></i>
                    </span> 
                    Détails de la Proposition
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 704
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">Groupes</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 707, $this->source); })()), "id", [], "any", false, false, false, 707)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 707, $this->source); })()), "nomProjet", [], "any", false, false, false, 707), "html", null, true);
        yield "</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 710
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_index", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 710, $this->source); })()), "id", [], "any", false, false, false, 710)]), "html", null, true);
        yield "\">Propositions</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>";
        // line 713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 713, $this->source); })()), "titre", [], "any", false, false, false, 713), "html", null, true);
        yield "
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Stats Overview -->
            <div class=\"stats-grid\">
              <div class=\"stat-item\">
                <div class=\"stat-icon-small card-1\">
                  <i class=\"mdi mdi-calendar\"></i>
                </div>
                <div class=\"stat-value\">
                  ";
        // line 728
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 728, $this->source); })()), "dateReunion", [], "any", false, false, false, 728)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 728, $this->source); })()), "dateReunion", [], "any", false, false, false, 728), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "
                </div>
                <div class=\"stat-title\">Date de réunion</div>
              </div>
              
              <div class=\"stat-item\">
                <div class=\"stat-icon-small card-2\">
                  <i class=\"mdi mdi-clock\"></i>
                </div>
                <div class=\"stat-value\">
                  ";
        // line 738
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 738, $this->source); })()), "heureDebut", [], "any", false, false, false, 738)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 738, $this->source); })()), "heureDebut", [], "any", false, false, false, 738), "H:i"), "html", null, true)) : ("--:--"));
        yield " - ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 738, $this->source); })()), "heureFin", [], "any", false, false, false, 738)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 738, $this->source); })()), "heureFin", [], "any", false, false, false, 738), "H:i"), "html", null, true)) : ("--:--"));
        yield "
                </div>
                <div class=\"stat-title\">Horaire</div>
              </div>
              
              <div class=\"stat-item\">
                <div class=\"stat-icon-small card-3\">
                  <i class=\"mdi mdi-map-marker\"></i>
                </div>
                <div class=\"stat-value\">";
        // line 747
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 747, $this->source); })()), "lieu", [], "any", false, false, false, 747)) > 15)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 747, $this->source); })()), "lieu", [], "any", false, false, false, 747), 0, 15) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 747, $this->source); })()), "lieu", [], "any", false, false, false, 747), "html", null, true)));
        yield "</div>
                <div class=\"stat-title\">Lieu</div>
              </div>
              
              <div class=\"stat-item\">
                <div class=\"stat-icon-small 
                  ";
        // line 753
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 753, $this->source); })()), "status", [], "any", false, false, false, 753) == "proposed")) {
            yield "card-3
                  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 754
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 754, $this->source); })()), "status", [], "any", false, false, false, 754) == "confirmed")) {
            yield "card-4
                  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 755
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 755, $this->source); })()), "status", [], "any", false, false, false, 755) == "cancelled")) {
            yield "card-2
                  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 756
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 756, $this->source); })()), "status", [], "any", false, false, false, 756) == "postponed")) {
            yield "card-5
                  ";
        } else {
            // line 757
            yield "card-1";
        }
        yield "\">
                  <i class=\"mdi mdi-status-update\"></i>
                </div>
                <div class=\"stat-value\">
                  ";
        // line 761
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 761, $this->source); })()), "status", [], "any", false, false, false, 761) == "proposed")) {
            yield "Proposée
                  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 762
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 762, $this->source); })()), "status", [], "any", false, false, false, 762) == "confirmed")) {
            yield "Confirmée
                  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 763
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 763, $this->source); })()), "status", [], "any", false, false, false, 763) == "cancelled")) {
            yield "Annulée
                  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 764
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 764, $this->source); })()), "status", [], "any", false, false, false, 764) == "postponed")) {
            yield "Reportée
                  ";
        } else {
            // line 765
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 765, $this->source); })()), "status", [], "any", false, false, false, 765), "html", null, true);
        }
        // line 766
        yield "                </div>
                <div class=\"stat-title\">Statut</div>
              </div>
            </div>

            <!-- Main Info Card -->
            <div class=\"row\">
              <div class=\"col-lg-8\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"stat-icon card-1 me-3\">
                        <i class=\"mdi mdi-calendar-text\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">";
        // line 781
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 781, $this->source); })()), "titre", [], "any", false, false, false, 781), "html", null, true);
        yield "</h4>
                        <p class=\"mb-0 opacity-75\">Proposition pour le groupe: ";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 782, $this->source); })()), "nomProjet", [], "any", false, false, false, 782), "html", null, true);
        yield "</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"info-card-body\">
                    <!-- Basic Information -->
                    <div class=\"info-section\">
                      <h5 class=\"info-section-title\">
                        <i class=\"mdi mdi-information-outline\"></i>
                        Informations générales
                      </h5>
                      
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-format-title\"></i>
                              Titre
                            </div>
                            <div class=\"info-value\">";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 802, $this->source); })()), "titre", [], "any", false, false, false, 802), "html", null, true);
        yield "</div>
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-map-marker\"></i>
                              Lieu
                            </div>
                            <div class=\"info-value\">";
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 812, $this->source); })()), "lieu", [], "any", false, false, false, 812), "html", null, true);
        yield "</div>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-calendar\"></i>
                              Date
                            </div>
                            <div class=\"info-value\">
                              ";
        // line 825
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 825, $this->source); })()), "dateReunion", [], "any", false, false, false, 825)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 825, $this->source); })()), "dateReunion", [], "any", false, false, false, 825), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "
                            </div>
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-clock-start\"></i>
                              Heure de début
                            </div>
                            <div class=\"info-value\">
                              ";
        // line 837
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 837, $this->source); })()), "heureDebut", [], "any", false, false, false, 837)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 837, $this->source); })()), "heureDebut", [], "any", false, false, false, 837), "H:i"), "html", null, true)) : ("Non définie"));
        yield "
                            </div>
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-clock-end\"></i>
                              Heure de fin
                            </div>
                            <div class=\"info-value\">
                              ";
        // line 849
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 849, $this->source); })()), "heureFin", [], "any", false, false, false, 849)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 849, $this->source); })()), "heureFin", [], "any", false, false, false, 849), "H:i"), "html", null, true)) : ("Non définie"));
        yield "
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"row\">
                        <div class=\"col-md-12\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-status-update\"></i>
                              Statut
                            </div>
                            <div class=\"info-value\">
                              <span class=\"status-badge 
                                ";
        // line 864
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 864, $this->source); })()), "status", [], "any", false, false, false, 864) == "proposed")) {
            yield "status-proposed
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 865
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 865, $this->source); })()), "status", [], "any", false, false, false, 865) == "confirmed")) {
            yield "status-confirmed
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 866
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 866, $this->source); })()), "status", [], "any", false, false, false, 866) == "cancelled")) {
            yield "status-cancelled
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 867
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 867, $this->source); })()), "status", [], "any", false, false, false, 867) == "postponed")) {
            yield "status-postponed
                                ";
        }
        // line 868
        yield "\">
                                ";
        // line 869
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 869, $this->source); })()), "status", [], "any", false, false, false, 869) == "proposed")) {
            yield "Proposée
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 870
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 870, $this->source); })()), "status", [], "any", false, false, false, 870) == "confirmed")) {
            yield "Confirmée
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 871
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 871, $this->source); })()), "status", [], "any", false, false, false, 871) == "cancelled")) {
            yield "Annulée
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 872
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 872, $this->source); })()), "status", [], "any", false, false, false, 872) == "postponed")) {
            yield "Reportée
                                ";
        } else {
            // line 873
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 873, $this->source); })()), "status", [], "any", false, false, false, 873), "html", null, true);
        }
        // line 874
        yield "                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Description -->
                    <div class=\"info-section\">
                      <h5 class=\"info-section-title\">
                        <i class=\"mdi mdi-text-box-outline\"></i>
                        Description et ordre du jour
                      </h5>
                      
                      <div class=\"info-item\">
                        <div class=\"description-box\">
                          ";
        // line 890
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 890, $this->source); })()), "description", [], "any", false, false, false, 890), "html", null, true));
        yield "
                        </div>
                      </div>
                    </div>
                    
                    <!-- Group Info -->
                    <div class=\"info-section\">
                      <h5 class=\"info-section-title\">
                        <i class=\"mdi mdi-account-group\"></i>
                        Informations du groupe
                      </h5>
                      
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-account-multiple\"></i>
                              Groupe
                            </div>
                            <div class=\"info-value\">
                              <a href=\"";
        // line 910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 910, $this->source); })()), "id", [], "any", false, false, false, 910)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                ";
        // line 911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 911, $this->source); })()), "nomProjet", [], "any", false, false, false, 911), "html", null, true);
        yield "
                              </a>
                            </div>
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-book-open\"></i>
                              Matière
                            </div>
                            <div class=\"info-value\">";
        // line 923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 923, $this->source); })()), "matiere", [], "any", false, false, false, 923), "html", null, true);
        yield "</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Group Members -->
                      <div class=\"info-item\">
                        <div class=\"info-label\">
                          <i class=\"mdi mdi-account-multiple-outline\"></i>
                          Membres du groupe
                        </div>
                        <div class=\"info-value\">
                          ";
        // line 935
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 935, $this->source); })()), "idUser", [], "any", false, false, false, 935)) > 0)) {
            // line 936
            yield "                            <div class=\"row\">
                              ";
            // line 937
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 937, $this->source); })()), "idUser", [], "any", false, false, false, 937));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 938
                yield "                                <div class=\"col-md-6\">
                                  <div class=\"member-item\">
                                    <div class=\"member-avatar\">
                                      ";
                // line 941
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 941))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 941))), "html", null, true);
                yield "
                                    </div>
                                    <div>
                                      <strong>";
                // line 944
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 944), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 944), "html", null, true);
                yield "</strong><br>
                                      <small class=\"text-muted\">";
                // line 945
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 945), "html", null, true);
                yield "</small>
                                    </div>
                                  </div>
                                </div>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 950
            yield "                            </div>
                          ";
        } else {
            // line 952
            yield "                            <div class=\"empty-state\">
                              <i class=\"mdi mdi-account-off\"></i>
                              <p>Aucun membre dans ce groupe</p>
                            </div>
                          ";
        }
        // line 957
        yield "                        </div>
                      </div>
                    </div>
                    
                    <!-- Timeline -->
                    <div class=\"info-section\">
                      <h5 class=\"info-section-title\">
                        <i class=\"mdi mdi-history\"></i>
                        Historique
                      </h5>
                      
                      <div class=\"timeline\">
                        <div class=\"timeline-item\">
                          <div class=\"timeline-date\">
                            <i class=\"mdi mdi-calendar-plus me-1\"></i>
                            ";
        // line 972
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 972, $this->source); })()), "createdAt", [], "any", false, false, false, 972)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 972, $this->source); })()), "createdAt", [], "any", false, false, false, 972), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "
                          </div>
                          <div class=\"timeline-content\">
                            <strong>Proposition créée</strong>
                            <p>La proposition a été créée pour le groupe ";
        // line 976
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 976, $this->source); })()), "nomProjet", [], "any", false, false, false, 976), "html", null, true);
        yield "</p>
                          </div>
                        </div>
                        
                        ";
        // line 980
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 980, $this->source); })()), "updatedAt", [], "any", false, false, false, 980) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 980, $this->source); })()), "updatedAt", [], "any", false, false, false, 980) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 980, $this->source); })()), "createdAt", [], "any", false, false, false, 980)))) {
            // line 981
            yield "                        <div class=\"timeline-item\">
                          <div class=\"timeline-date\">
                            <i class=\"mdi mdi-calendar-edit me-1\"></i>
                            ";
            // line 984
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 984, $this->source); })()), "updatedAt", [], "any", false, false, false, 984)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 984, $this->source); })()), "updatedAt", [], "any", false, false, false, 984), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "
                          </div>
                          <div class=\"timeline-content\">
                            <strong>Proposition modifiée</strong>
                            <p>Dernière modification de la proposition</p>
                          </div>
                        </div>
                        ";
        }
        // line 992
        yield "                        
                        ";
        // line 993
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 993, $this->source); })()), "status", [], "any", false, false, false, 993) == "confirmed")) {
            // line 994
            yield "                        <div class=\"timeline-item\">
                          <div class=\"timeline-date\">
                            <i class=\"mdi mdi-check-circle me-1\"></i>
                            Date de confirmation
                          </div>
                          <div class=\"timeline-content\">
                            <strong>Proposition confirmée</strong>
                            <p>La réunion a été confirmée et sera tenue à la date prévue</p>
                          </div>
                        </div>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1004
(isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1004, $this->source); })()), "status", [], "any", false, false, false, 1004) == "cancelled")) {
            // line 1005
            yield "                        <div class=\"timeline-item\">
                          <div class=\"timeline-date\">
                            <i class=\"mdi mdi-cancel me-1\"></i>
                            Date d'annulation
                          </div>
                          <div class=\"timeline-content\">
                            <strong>Proposition annulée</strong>
                            <p>La réunion a été annulée</p>
                          </div>
                        </div>
                        ";
        }
        // line 1016
        yield "                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Sidebar -->
              <div class=\"col-lg-4\">
                <!-- Actions Card -->
                <div class=\"card info-card mb-4\">
                  <div class=\"info-card-header\" style=\"background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);\">
                    <h5 class=\"mb-0\">
                      <i class=\"mdi mdi-cogs me-2\"></i>
                      Actions
                    </h5>
                  </div>
                  <div class=\"info-card-body\">
                    <div class=\"d-grid gap-3\">
                      <a href=\"";
        // line 1034
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1034, $this->source); })()), "id", [], "any", false, false, false, 1034), "groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1034, $this->source); })()), "id", [], "any", false, false, false, 1034)]), "html", null, true);
        yield "\" class=\"btn btn-edit\">
                        <i class=\"mdi mdi-pencil me-2\"></i>
                        Modifier la proposition
                      </a>
                      
                      <a href=\"";
        // line 1039
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_index", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1039, $this->source); })()), "id", [], "any", false, false, false, 1039)]), "html", null, true);
        yield "\" class=\"btn btn-back\">
                        <i class=\"mdi mdi-arrow-left me-2\"></i>
                        Retour aux propositions
                      </a>
                      
                      <a href=\"";
        // line 1044
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1044, $this->source); })()), "id", [], "any", false, false, false, 1044)]), "html", null, true);
        yield "\" class=\"btn btn-back\">
                        <i class=\"mdi mdi-account-group me-2\"></i>
                        Voir le groupe
                      </a>
                      
                      <button type=\"button\" class=\"btn btn-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        <i class=\"mdi mdi-delete me-2\"></i>
                        Supprimer la proposition
                      </button>
                    </div>
                  </div>
                </div>
                
                <!-- Info Card -->
                <div class=\"card info-card\">
                  <div class=\"info-card-header\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                    <h5 class=\"mb-0\">
                      <i class=\"mdi mdi-information me-2\"></i>
                      Informations supplémentaires
                    </h5>
                  </div>
                  <div class=\"info-card-body\">
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-calendar-plus\"></i>
                        Créée le
                      </div>
                      <div class=\"info-value\">
                        ";
        // line 1072
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1072, $this->source); })()), "createdAt", [], "any", false, false, false, 1072)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1072, $this->source); })()), "createdAt", [], "any", false, false, false, 1072), "d/m/Y H:i"), "html", null, true)) : ("Non disponible"));
        yield "
                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-calendar-edit\"></i>
                        Modifiée le
                      </div>
                      <div class=\"info-value\">
                        ";
        // line 1082
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1082, $this->source); })()), "updatedAt", [], "any", false, false, false, 1082)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1082, $this->source); })()), "updatedAt", [], "any", false, false, false, 1082), "d/m/Y H:i"), "html", null, true)) : ("Non modifiée"));
        yield "
                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-clock-fast\"></i>
                        Durée
                      </div>
                      <div class=\"info-value\">
                        ";
        // line 1092
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1092, $this->source); })()), "heureDebut", [], "any", false, false, false, 1092) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1092, $this->source); })()), "heureFin", [], "any", false, false, false, 1092))) {
            // line 1093
            yield "                          ";
            $context["start"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1093, $this->source); })()), "heureDebut", [], "any", false, false, false, 1093);
            // line 1094
            yield "                          ";
            $context["end"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1094, $this->source); })()), "heureFin", [], "any", false, false, false, 1094);
            // line 1095
            yield "                          ";
            $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 1095, $this->source); })()), "diff", [(isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 1095, $this->source); })())], "method", false, false, false, 1095);
            // line 1096
            yield "                          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 1096, $this->source); })()), "h", [], "any", false, false, false, 1096), "html", null, true);
            yield "h";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 1096, $this->source); })()), "i", [], "any", false, false, false, 1096) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 1096, $this->source); })()), "i", [], "any", false, false, false, 1096) . "min"), "html", null, true)) : (""));
            yield "
                        ";
        } else {
            // line 1098
            yield "                          Non définie
                        ";
        }
        // line 1100
        yield "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
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
        // line 1124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1124, $this->source); })()), "titre", [], "any", false, false, false, 1124), "html", null, true);
        yield "</p>
                    <p><strong>Groupe :</strong> ";
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1125, $this->source); })()), "nomProjet", [], "any", false, false, false, 1125), "html", null, true);
        yield "</p>
                    <p><strong>Date :</strong> ";
        // line 1126
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1126, $this->source); })()), "dateReunion", [], "any", false, false, false, 1126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1126, $this->source); })()), "dateReunion", [], "any", false, false, false, 1126), "d/m/Y"), "html", null, true)) : (""));
        yield "</p>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                      <i class=\"mdi mdi-close me-1\"></i>
                      Annuler
                    </button>
                    ";
        // line 1133
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

    <!-- Scripts -->
    <script src=\"";
        // line 1144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1146
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
        
        // Calculate duration
        const startTime = '";
        // line 1160
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1160, $this->source); })()), "heureDebut", [], "any", false, false, false, 1160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1160, $this->source); })()), "heureDebut", [], "any", false, false, false, 1160), "H:i"), "html", null, true)) : (""));
        yield "';
        const endTime = '";
        // line 1161
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1161, $this->source); })()), "heureFin", [], "any", false, false, false, 1161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposition_reunion"]) || array_key_exists("proposition_reunion", $context) ? $context["proposition_reunion"] : (function () { throw new RuntimeError('Variable "proposition_reunion" does not exist.', 1161, $this->source); })()), "heureFin", [], "any", false, false, false, 1161), "H:i"), "html", null, true)) : (""));
        yield "';
        
        if (startTime && endTime) {
            const [startHour, startMinute] = startTime.split(':').map(Number);
            const [endHour, endMinute] = endTime.split(':').map(Number);
            
            let hours = endHour - startHour;
            let minutes = endMinute - startMinute;
            
            if (minutes < 0) {
                hours--;
                minutes += 60;
            }
            
            if (hours < 0) {
                hours += 24;
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
        return "proposition_reunion/show.html.twig";
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
        return array (  1681 => 1161,  1677 => 1160,  1660 => 1146,  1656 => 1145,  1652 => 1144,  1638 => 1133,  1628 => 1126,  1624 => 1125,  1620 => 1124,  1594 => 1100,  1590 => 1098,  1582 => 1096,  1579 => 1095,  1576 => 1094,  1573 => 1093,  1571 => 1092,  1558 => 1082,  1545 => 1072,  1514 => 1044,  1506 => 1039,  1498 => 1034,  1478 => 1016,  1465 => 1005,  1463 => 1004,  1451 => 994,  1449 => 993,  1446 => 992,  1435 => 984,  1430 => 981,  1428 => 980,  1421 => 976,  1414 => 972,  1397 => 957,  1390 => 952,  1386 => 950,  1375 => 945,  1369 => 944,  1362 => 941,  1357 => 938,  1353 => 937,  1350 => 936,  1348 => 935,  1333 => 923,  1318 => 911,  1314 => 910,  1291 => 890,  1273 => 874,  1270 => 873,  1265 => 872,  1261 => 871,  1257 => 870,  1253 => 869,  1250 => 868,  1245 => 867,  1241 => 866,  1237 => 865,  1233 => 864,  1215 => 849,  1200 => 837,  1185 => 825,  1169 => 812,  1156 => 802,  1133 => 782,  1129 => 781,  1112 => 766,  1109 => 765,  1104 => 764,  1100 => 763,  1096 => 762,  1092 => 761,  1084 => 757,  1079 => 756,  1075 => 755,  1071 => 754,  1067 => 753,  1058 => 747,  1044 => 738,  1031 => 728,  1013 => 713,  1007 => 710,  999 => 707,  993 => 704,  977 => 690,  971 => 689,  961 => 685,  957 => 684,  952 => 683,  947 => 682,  942 => 681,  919 => 661,  904 => 649,  890 => 639,  888 => 638,  884 => 636,  879 => 633,  875 => 631,  871 => 629,  867 => 627,  865 => 626,  860 => 624,  853 => 623,  851 => 622,  844 => 617,  837 => 614,  829 => 612,  823 => 610,  817 => 607,  812 => 606,  809 => 605,  807 => 604,  795 => 595,  762 => 565,  744 => 550,  731 => 540,  708 => 520,  695 => 510,  682 => 500,  669 => 490,  656 => 480,  643 => 470,  630 => 460,  608 => 440,  603 => 437,  599 => 435,  595 => 433,  591 => 431,  589 => 430,  584 => 428,  577 => 427,  575 => 426,  570 => 423,  564 => 421,  561 => 420,  555 => 418,  549 => 415,  544 => 414,  541 => 413,  539 => 412,  528 => 404,  524 => 403,  519 => 401,  515 => 400,  131 => 19,  127 => 18,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails Proposition - {{ proposition_reunion.titre }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails Proposition</title>
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
      .info-card {
          border-radius: 15px;
          box-shadow: 0 5px 20px rgba(0,0,0,0.08);
          border: none;
          margin-bottom: 20px;
      }
      
      .info-card-header {
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          color: white;
          border-radius: 15px 15px 0 0;
          padding: 20px 30px;
      }
      
      .info-card-body {
          padding: 30px;
      }
      
      .info-section {
          margin-bottom: 30px;
          padding-bottom: 20px;
          border-bottom: 1px solid #eee;
      }
      
      .info-section:last-child {
          border-bottom: none;
          margin-bottom: 0;
          padding-bottom: 0;
      }
      
      .info-section-title {
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
      
      .info-item {
          margin-bottom: 20px;
      }
      
      .info-label {
          font-weight: 600;
          color: #555;
          margin-bottom: 8px;
          display: flex;
          align-items: center;
          gap: 10px;
          font-size: 1rem;
      }
      
      .info-value {
          color: #333;
          font-size: 1.05rem;
          padding-left: 35px;
          min-height: 40px;
          display: flex;
          align-items: center;
      }
      
      .description-box {
          background: #f8f9fa;
          border-radius: 10px;
          padding: 20px;
          border-left: 4px solid #667eea;
          margin-top: 10px;
      }
      
      .btn-edit {
          background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
          border: none;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
          color: white;
      }
      
      .btn-edit:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(250, 112, 154, 0.3);
          color: white;
      }
      
      .btn-back {
          background: #f8f9fa;
          border: 1px solid #ddd;
          color: #333;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
      }
      
      .btn-back:hover {
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
      
      .action-buttons {
          display: flex;
          justify-content: space-between;
          gap: 15px;
          margin-top: 30px;
          padding-top: 20px;
          border-top: 1px solid #eee;
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
      
      .status-badge {
          display: inline-block;
          padding: 8px 20px;
          border-radius: 20px;
          font-size: 0.9rem;
          font-weight: 500;
      }
      
      .status-proposed { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
      .status-confirmed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
      .status-cancelled { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
      .status-postponed { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; }
      
      .timeline {
          position: relative;
          padding-left: 30px;
      }
      
      .timeline:before {
          content: '';
          position: absolute;
          left: 0;
          top: 0;
          bottom: 0;
          width: 2px;
          background: #667eea;
      }
      
      .timeline-item {
          position: relative;
          margin-bottom: 20px;
      }
      
      .timeline-item:before {
          content: '';
          position: absolute;
          left: -33px;
          top: 5px;
          width: 12px;
          height: 12px;
          border-radius: 50%;
          background: #667eea;
          border: 3px solid white;
          box-shadow: 0 0 0 2px #667eea;
      }
      
      .timeline-date {
          font-size: 0.85rem;
          color: #6c757d;
          margin-bottom: 5px;
      }
      
      .timeline-content {
          background: #f8f9fa;
          padding: 15px;
          border-radius: 8px;
      }
      
      .stats-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
          gap: 20px;
          margin-bottom: 30px;
      }
      
      .stat-item {
          text-align: center;
          padding: 20px;
          background: white;
          border-radius: 10px;
          box-shadow: 0 3px 10px rgba(0,0,0,0.08);
      }
      
      .stat-icon-small {
          width: 50px;
          height: 50px;
          border-radius: 12px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 20px;
          color: white;
          margin: 0 auto 15px;
      }
      
      .stat-value {
          font-size: 1.5rem;
          font-weight: 700;
          margin-bottom: 5px;
      }
      
      .stat-title {
          font-size: 0.9rem;
          color: #6c757d;
          text-transform: uppercase;
          letter-spacing: 0.5px;
      }
      
      .alert {
          border-radius: 10px;
          border: none;
          box-shadow: 0 2px 10px rgba(0,0,0,0.1);
          margin-bottom: 20px;
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
      
      .empty-state {
          text-align: center;
          padding: 40px 20px;
          color: #6c757d;
      }
      
      .empty-state i {
          font-size: 60px;
          margin-bottom: 20px;
          opacity: 0.5;
      }
      
      .member-avatar {
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
          margin-right: 10px;
      }
      
      .member-item {
          display: flex;
          align-items: center;
          padding: 10px;
          border-radius: 8px;
          margin-bottom: 10px;
          background: #f8f9fa;
          transition: all 0.3s;
      }
      
      .member-item:hover {
          background: #e9ecef;
          transform: translateX(5px);
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
                  <a class=\"dropdown-item preview-item\" href=\"#\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-info rounded-circle\">
                            <i class=\"mdi mdi-calendar-text\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject mb-1\">Proposition de réunion</p>
                        <p class=\"text-muted ellipsis mb-0\"> Vous consultez: {{ proposition_reunion.titre }}</p>
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
                    <span class=\"page-title-icon bg-gradient-info text-white me-2\">
                      <i class=\"mdi mdi-calendar-text\"></i>
                    </span> 
                    Détails de la Proposition
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
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>{{ proposition_reunion.titre }}
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- Stats Overview -->
            <div class=\"stats-grid\">
              <div class=\"stat-item\">
                <div class=\"stat-icon-small card-1\">
                  <i class=\"mdi mdi-calendar\"></i>
                </div>
                <div class=\"stat-value\">
                  {{ proposition_reunion.dateReunion ? proposition_reunion.dateReunion|date('d/m/Y') : 'Non définie' }}
                </div>
                <div class=\"stat-title\">Date de réunion</div>
              </div>
              
              <div class=\"stat-item\">
                <div class=\"stat-icon-small card-2\">
                  <i class=\"mdi mdi-clock\"></i>
                </div>
                <div class=\"stat-value\">
                  {{ proposition_reunion.heureDebut ? proposition_reunion.heureDebut|date('H:i') : '--:--' }} - {{ proposition_reunion.heureFin ? proposition_reunion.heureFin|date('H:i') : '--:--' }}
                </div>
                <div class=\"stat-title\">Horaire</div>
              </div>
              
              <div class=\"stat-item\">
                <div class=\"stat-icon-small card-3\">
                  <i class=\"mdi mdi-map-marker\"></i>
                </div>
                <div class=\"stat-value\">{{ proposition_reunion.lieu|length > 15 ? proposition_reunion.lieu|slice(0, 15) ~ '...' : proposition_reunion.lieu }}</div>
                <div class=\"stat-title\">Lieu</div>
              </div>
              
              <div class=\"stat-item\">
                <div class=\"stat-icon-small 
                  {% if proposition_reunion.status == 'proposed' %}card-3
                  {% elseif proposition_reunion.status == 'confirmed' %}card-4
                  {% elseif proposition_reunion.status == 'cancelled' %}card-2
                  {% elseif proposition_reunion.status == 'postponed' %}card-5
                  {% else %}card-1{% endif %}\">
                  <i class=\"mdi mdi-status-update\"></i>
                </div>
                <div class=\"stat-value\">
                  {% if proposition_reunion.status == 'proposed' %}Proposée
                  {% elseif proposition_reunion.status == 'confirmed' %}Confirmée
                  {% elseif proposition_reunion.status == 'cancelled' %}Annulée
                  {% elseif proposition_reunion.status == 'postponed' %}Reportée
                  {% else %}{{ proposition_reunion.status }}{% endif %}
                </div>
                <div class=\"stat-title\">Statut</div>
              </div>
            </div>

            <!-- Main Info Card -->
            <div class=\"row\">
              <div class=\"col-lg-8\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"stat-icon card-1 me-3\">
                        <i class=\"mdi mdi-calendar-text\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">{{ proposition_reunion.titre }}</h4>
                        <p class=\"mb-0 opacity-75\">Proposition pour le groupe: {{ groupe_projet.nomProjet }}</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"info-card-body\">
                    <!-- Basic Information -->
                    <div class=\"info-section\">
                      <h5 class=\"info-section-title\">
                        <i class=\"mdi mdi-information-outline\"></i>
                        Informations générales
                      </h5>
                      
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-format-title\"></i>
                              Titre
                            </div>
                            <div class=\"info-value\">{{ proposition_reunion.titre }}</div>
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-map-marker\"></i>
                              Lieu
                            </div>
                            <div class=\"info-value\">{{ proposition_reunion.lieu }}</div>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-calendar\"></i>
                              Date
                            </div>
                            <div class=\"info-value\">
                              {{ proposition_reunion.dateReunion ? proposition_reunion.dateReunion|date('d/m/Y') : 'Non définie' }}
                            </div>
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-clock-start\"></i>
                              Heure de début
                            </div>
                            <div class=\"info-value\">
                              {{ proposition_reunion.heureDebut ? proposition_reunion.heureDebut|date('H:i') : 'Non définie' }}
                            </div>
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-clock-end\"></i>
                              Heure de fin
                            </div>
                            <div class=\"info-value\">
                              {{ proposition_reunion.heureFin ? proposition_reunion.heureFin|date('H:i') : 'Non définie' }}
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"row\">
                        <div class=\"col-md-12\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-status-update\"></i>
                              Statut
                            </div>
                            <div class=\"info-value\">
                              <span class=\"status-badge 
                                {% if proposition_reunion.status == 'proposed' %}status-proposed
                                {% elseif proposition_reunion.status == 'confirmed' %}status-confirmed
                                {% elseif proposition_reunion.status == 'cancelled' %}status-cancelled
                                {% elseif proposition_reunion.status == 'postponed' %}status-postponed
                                {% endif %}\">
                                {% if proposition_reunion.status == 'proposed' %}Proposée
                                {% elseif proposition_reunion.status == 'confirmed' %}Confirmée
                                {% elseif proposition_reunion.status == 'cancelled' %}Annulée
                                {% elseif proposition_reunion.status == 'postponed' %}Reportée
                                {% else %}{{ proposition_reunion.status }}{% endif %}
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Description -->
                    <div class=\"info-section\">
                      <h5 class=\"info-section-title\">
                        <i class=\"mdi mdi-text-box-outline\"></i>
                        Description et ordre du jour
                      </h5>
                      
                      <div class=\"info-item\">
                        <div class=\"description-box\">
                          {{ proposition_reunion.description|nl2br }}
                        </div>
                      </div>
                    </div>
                    
                    <!-- Group Info -->
                    <div class=\"info-section\">
                      <h5 class=\"info-section-title\">
                        <i class=\"mdi mdi-account-group\"></i>
                        Informations du groupe
                      </h5>
                      
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-account-multiple\"></i>
                              Groupe
                            </div>
                            <div class=\"info-value\">
                              <a href=\"{{ path('app_groupe_projet_show', {'id': groupe_projet.id}) }}\" class=\"text-decoration-none\">
                                {{ groupe_projet.nomProjet }}
                              </a>
                            </div>
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"info-item\">
                            <div class=\"info-label\">
                              <i class=\"mdi mdi-book-open\"></i>
                              Matière
                            </div>
                            <div class=\"info-value\">{{ groupe_projet.matiere }}</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Group Members -->
                      <div class=\"info-item\">
                        <div class=\"info-label\">
                          <i class=\"mdi mdi-account-multiple-outline\"></i>
                          Membres du groupe
                        </div>
                        <div class=\"info-value\">
                          {% if groupe_projet.idUser|length > 0 %}
                            <div class=\"row\">
                              {% for user in groupe_projet.idUser %}
                                <div class=\"col-md-6\">
                                  <div class=\"member-item\">
                                    <div class=\"member-avatar\">
                                      {{ user.prenom|first|upper }}{{ user.nom|first|upper }}
                                    </div>
                                    <div>
                                      <strong>{{ user.prenom }} {{ user.nom }}</strong><br>
                                      <small class=\"text-muted\">{{ user.email }}</small>
                                    </div>
                                  </div>
                                </div>
                              {% endfor %}
                            </div>
                          {% else %}
                            <div class=\"empty-state\">
                              <i class=\"mdi mdi-account-off\"></i>
                              <p>Aucun membre dans ce groupe</p>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    
                    <!-- Timeline -->
                    <div class=\"info-section\">
                      <h5 class=\"info-section-title\">
                        <i class=\"mdi mdi-history\"></i>
                        Historique
                      </h5>
                      
                      <div class=\"timeline\">
                        <div class=\"timeline-item\">
                          <div class=\"timeline-date\">
                            <i class=\"mdi mdi-calendar-plus me-1\"></i>
                            {{ proposition_reunion.createdAt ? proposition_reunion.createdAt|date('d/m/Y H:i') : '' }}
                          </div>
                          <div class=\"timeline-content\">
                            <strong>Proposition créée</strong>
                            <p>La proposition a été créée pour le groupe {{ groupe_projet.nomProjet }}</p>
                          </div>
                        </div>
                        
                        {% if proposition_reunion.updatedAt and proposition_reunion.updatedAt != proposition_reunion.createdAt %}
                        <div class=\"timeline-item\">
                          <div class=\"timeline-date\">
                            <i class=\"mdi mdi-calendar-edit me-1\"></i>
                            {{ proposition_reunion.updatedAt ? proposition_reunion.updatedAt|date('d/m/Y H:i') : '' }}
                          </div>
                          <div class=\"timeline-content\">
                            <strong>Proposition modifiée</strong>
                            <p>Dernière modification de la proposition</p>
                          </div>
                        </div>
                        {% endif %}
                        
                        {% if proposition_reunion.status == 'confirmed' %}
                        <div class=\"timeline-item\">
                          <div class=\"timeline-date\">
                            <i class=\"mdi mdi-check-circle me-1\"></i>
                            Date de confirmation
                          </div>
                          <div class=\"timeline-content\">
                            <strong>Proposition confirmée</strong>
                            <p>La réunion a été confirmée et sera tenue à la date prévue</p>
                          </div>
                        </div>
                        {% elseif proposition_reunion.status == 'cancelled' %}
                        <div class=\"timeline-item\">
                          <div class=\"timeline-date\">
                            <i class=\"mdi mdi-cancel me-1\"></i>
                            Date d'annulation
                          </div>
                          <div class=\"timeline-content\">
                            <strong>Proposition annulée</strong>
                            <p>La réunion a été annulée</p>
                          </div>
                        </div>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Sidebar -->
              <div class=\"col-lg-4\">
                <!-- Actions Card -->
                <div class=\"card info-card mb-4\">
                  <div class=\"info-card-header\" style=\"background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);\">
                    <h5 class=\"mb-0\">
                      <i class=\"mdi mdi-cogs me-2\"></i>
                      Actions
                    </h5>
                  </div>
                  <div class=\"info-card-body\">
                    <div class=\"d-grid gap-3\">
                      <a href=\"{{ path('app_proposition_reunion_edit', {'id': proposition_reunion.id, 'groupeId': groupe_projet.id}) }}\" class=\"btn btn-edit\">
                        <i class=\"mdi mdi-pencil me-2\"></i>
                        Modifier la proposition
                      </a>
                      
                      <a href=\"{{ path('app_proposition_reunion_index', {'groupeId': groupe_projet.id}) }}\" class=\"btn btn-back\">
                        <i class=\"mdi mdi-arrow-left me-2\"></i>
                        Retour aux propositions
                      </a>
                      
                      <a href=\"{{ path('app_groupe_projet_show', {'id': groupe_projet.id}) }}\" class=\"btn btn-back\">
                        <i class=\"mdi mdi-account-group me-2\"></i>
                        Voir le groupe
                      </a>
                      
                      <button type=\"button\" class=\"btn btn-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        <i class=\"mdi mdi-delete me-2\"></i>
                        Supprimer la proposition
                      </button>
                    </div>
                  </div>
                </div>
                
                <!-- Info Card -->
                <div class=\"card info-card\">
                  <div class=\"info-card-header\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                    <h5 class=\"mb-0\">
                      <i class=\"mdi mdi-information me-2\"></i>
                      Informations supplémentaires
                    </h5>
                  </div>
                  <div class=\"info-card-body\">
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-calendar-plus\"></i>
                        Créée le
                      </div>
                      <div class=\"info-value\">
                        {{ proposition_reunion.createdAt ? proposition_reunion.createdAt|date('d/m/Y H:i') : 'Non disponible' }}
                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-calendar-edit\"></i>
                        Modifiée le
                      </div>
                      <div class=\"info-value\">
                        {{ proposition_reunion.updatedAt ? proposition_reunion.updatedAt|date('d/m/Y H:i') : 'Non modifiée' }}
                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-clock-fast\"></i>
                        Durée
                      </div>
                      <div class=\"info-value\">
                        {% if proposition_reunion.heureDebut and proposition_reunion.heureFin %}
                          {% set start = proposition_reunion.heureDebut %}
                          {% set end = proposition_reunion.heureFin %}
                          {% set diff = end.diff(start) %}
                          {{ diff.h }}h{{ diff.i > 0 ? diff.i ~ 'min' : '' }}
                        {% else %}
                          Non définie
                        {% endif %}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
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
        
        // Calculate duration
        const startTime = '{{ proposition_reunion.heureDebut ? proposition_reunion.heureDebut|date(\"H:i\") : \"\" }}';
        const endTime = '{{ proposition_reunion.heureFin ? proposition_reunion.heureFin|date(\"H:i\") : \"\" }}';
        
        if (startTime && endTime) {
            const [startHour, startMinute] = startTime.split(':').map(Number);
            const [endHour, endMinute] = endTime.split(':').map(Number);
            
            let hours = endHour - startHour;
            let minutes = endMinute - startMinute;
            
            if (minutes < 0) {
                hours--;
                minutes += 60;
            }
            
            if (hours < 0) {
                hours += 24;
            }
        }
    });
    </script>
  </body>
</html>
{% endblock %}
", "proposition_reunion/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\proposition_reunion\\show.html.twig");
    }
}
