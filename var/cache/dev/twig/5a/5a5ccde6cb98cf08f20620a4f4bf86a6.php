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

/* groupe_projet/edit.html.twig */
class __TwigTemplate_270fbc1d259034052020209cb721ab18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_projet/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_projet/edit.html.twig"));

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

        yield "Modifier Groupe Projet";
        
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
    <title>ESPRIT - Modifier Groupe Projet</title>
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
        white-space: nowrap;
      }
      
      /* Style pour mieux aligner le contenu de la navbar */
      .navbar-profile-name {
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0;
      }
      
      /* Styles pour le formulaire */
      .form-card {
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        border: none;
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
      
      .btn-update {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        border: none;
        padding: 12px 30px;
        font-weight: 500;
        border-radius: 8px;
        transition: all 0.3s;
      }
      
      .btn-update:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(67, 233, 123, 0.3);
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
      }
      
      .btn-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(240, 147, 251, 0.3);
      }
      
      .form-actions {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
      }
      
      .group-info-box {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 30px;
      }
      
      .info-row {
        display: flex;
        margin-bottom: 15px;
      }
      
      .info-label {
        font-weight: 600;
        color: #333;
        width: 150px;
        flex-shrink: 0;
      }
      
      .info-value {
        color: #555;
      }
      
      .info-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
      }
      
      .info-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 405
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 408
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 409
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
        // line 417
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 417, $this->source); })()), "user", [], "any", false, false, false, 417)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 418
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 418, $this->source); })()), "user", [], "any", false, false, false, 418), "profilePic", [], "any", false, false, false, 418)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 419
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 419, $this->source); })()), "user", [], "any", false, false, false, 419), "profilePic", [], "any", false, false, false, 419))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 420, $this->source); })()), "user", [], "any", false, false, false, 420), "prenom", [], "any", false, false, false, 420), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 423
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424), "prenom", [], "any", false, false, false, 424))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424), "nom", [], "any", false, false, false, 424))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 427
            yield "                  ";
        } else {
            // line 428
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 430
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 433
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 433, $this->source); })()), "user", [], "any", false, false, false, 433)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 434
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "user", [], "any", false, false, false, 434), "prenom", [], "any", false, false, false, 434), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "user", [], "any", false, false, false, 434), "nom", [], "any", false, false, false, 434), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 435, $this->source); })()), "user", [], "any", false, false, false, 435), "email", [], "any", false, false, false, 435), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 437
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 437, $this->source); })()), "user", [], "any", false, false, false, 437), "roles", [], "any", false, false, false, 437))) {
                // line 438
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 440
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 442
            yield "                    </div>
                  ";
        } else {
            // line 444
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 447
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
        // line 467
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
        // line 477
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
        // line 487
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
        // line 497
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
        // line 507
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
        // line 517
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
        // line 527
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
        // line 547
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
        // line 557
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
        // line 572
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
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-warning rounded-circle\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Modification de groupe</p>
                      <p class=\"text-muted ellipsis mb-0\"> Groupe ";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 602, $this->source); })()), "nomProjet", [], "any", false, false, false, 602), "html", null, true);
        yield " en cours de modification</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 611
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 611, $this->source); })()), "user", [], "any", false, false, false, 611)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 612
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 613
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 613, $this->source); })()), "user", [], "any", false, false, false, 613), "profilePic", [], "any", false, false, false, 613)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 614
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 614, $this->source); })()), "user", [], "any", false, false, false, 614), "profilePic", [], "any", false, false, false, 614))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 615
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 615, $this->source); })()), "user", [], "any", false, false, false, 615), "prenom", [], "any", false, false, false, 615), "html", null, true);
                yield "\" 
                               class=\"navbar-avatar-img\">
                        ";
            } else {
                // line 618
                yield "                          <div class=\"navbar-avatar\">
                            ";
                // line 619
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 619, $this->source); })()), "user", [], "any", false, false, false, 619), "prenom", [], "any", false, false, false, 619))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 619, $this->source); })()), "user", [], "any", false, false, false, 619), "nom", [], "any", false, false, false, 619))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 622
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 624
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 624, $this->source); })()), "user", [], "any", false, false, false, 624), "prenom", [], "any", false, false, false, 624), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 624, $this->source); })()), "user", [], "any", false, false, false, 624), "nom", [], "any", false, false, false, 624), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 627
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 627, $this->source); })()), "user", [], "any", false, false, false, 627), "roles", [], "any", false, false, false, 627))) {
                // line 628
                yield "                              <span class=\"badge badge-admin badge-sm\">Admin</span>
                            ";
            } else {
                // line 630
                yield "                              <span class=\"badge badge-etudiant badge-sm\">Utilisateur</span>
                            ";
            }
            // line 632
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 636
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 639
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 644
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 644, $this->source); })()), "user", [], "any", false, false, false, 644)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 645
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 645, $this->source); })()), "user", [], "any", false, false, false, 645), "prenom", [], "any", false, false, false, 645), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 645, $this->source); })()), "user", [], "any", false, false, false, 645), "nom", [], "any", false, false, false, 645), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 646
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 646, $this->source); })()), "user", [], "any", false, false, false, 646), "email", [], "any", false, false, false, 646), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 648
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 648, $this->source); })()), "user", [], "any", false, false, false, 648), "roles", [], "any", false, false, false, 648))) {
                // line 649
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 651
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 653
            yield "                      </small>
                    ";
        } else {
            // line 655
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 658
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 660
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 660, $this->source); })()), "user", [], "any", false, false, false, 660)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 661
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 661, $this->source); })()), "user", [], "any", false, false, false, 661), "id", [], "any", false, false, false, 661)]), "html", null, true);
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
            // line 671
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 671, $this->source); })()), "user", [], "any", false, false, false, 671), "id", [], "any", false, false, false, 671)]), "html", null, true);
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
        // line 683
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
        // line 703
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 703, $this->source); })()), "flashes", [], "any", false, false, false, 703));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 704
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 705
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 706
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 707
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 711
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 712
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account-multiple-edit\"></i>
                    </span> 
                    Modifier le Groupe Projet
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 726
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">Groupes</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 729, $this->source); })()), "id", [], "any", false, false, false, 729)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 729, $this->source); })()), "nomProjet", [], "any", false, false, false, 729), "html", null, true);
        yield "</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Modification
                      </li>
                    </ul>
                  </nav>
                  ";
        // line 736
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 736, $this->source); })()), "user", [], "any", false, false, false, 736)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 737
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 740
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 740, $this->source); })()), "user", [], "any", false, false, false, 740), "prenom", [], "any", false, false, false, 740), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 740, $this->source); })()), "user", [], "any", false, false, false, 740), "nom", [], "any", false, false, false, 740), "html", null, true);
            yield "</strong>
                        (";
            // line 741
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 741, $this->source); })()), "user", [], "any", false, false, false, 741), "email", [], "any", false, false, false, 741), "html", null, true);
            yield ")
                        ";
            // line 742
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 742, $this->source); })()), "user", [], "any", false, false, false, 742), "roles", [], "any", false, false, false, 742))) {
                // line 743
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 745
            yield "                      </small>
                    </div>
                  ";
        }
        // line 748
        yield "                </div>
              </div>
            </div>
            
            <!-- Group Information -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"group-info-box\">
                  <div class=\"d-flex align-items-center mb-3\">
                    <div class=\"group-avatar me-3\" style=\"width: 50px; height: 50px; font-size: 18px;\">
                      GP";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 758, $this->source); })()), "id", [], "any", false, false, false, 758), "html", null, true);
        yield "
                    </div>
                    <div>
                      <h4 class=\"mb-1\">Groupe #";
        // line 761
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 761, $this->source); })()), "id", [], "any", false, false, false, 761), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 761, $this->source); })()), "nomProjet", [], "any", false, false, false, 761), "html", null, true);
        yield "</h4>
                      <p class=\"text-muted mb-0\">Modifiez les informations de ce groupe projet</p>
                    </div>
                  </div>
                  
                  <div class=\"row\">
                    <div class=\"col-md-3\">
                      <div class=\"info-row\">
                        <span class=\"info-label\">Statut actuel:</span>
                        <span class=\"info-value\">
                          ";
        // line 771
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 771, $this->source); })()), "statut", [], "any", false, false, false, 771) == "Actif")) {
            // line 772
            yield "                            <span class=\"info-badge badge-active\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 772, $this->source); })()), "statut", [], "any", false, false, false, 772), "html", null, true);
            yield "</span>
                          ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 773
(isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 773, $this->source); })()), "statut", [], "any", false, false, false, 773) == "Terminé")) {
            // line 774
            yield "                            <span class=\"info-badge badge-completed\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 774, $this->source); })()), "statut", [], "any", false, false, false, 774), "html", null, true);
            yield "</span>
                          ";
        } else {
            // line 776
            yield "                            <span class=\"info-badge badge-inactive\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 776, $this->source); })()), "statut", [], "any", false, false, false, 776), "html", null, true);
            yield "</span>
                          ";
        }
        // line 778
        yield "                        </span>
                      </div>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"info-row\">
                        <span class=\"info-label\">Matière:</span>
                        <span class=\"info-value\">";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 784, $this->source); })()), "matiere", [], "any", false, false, false, 784), "html", null, true);
        yield "</span>
                      </div>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"info-row\">
                        <span class=\"info-label\">Nombre de membres:</span>
                        <span class=\"info-value\">";
        // line 790
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 790, $this->source); })()), "nbrMembre", [], "any", false, false, false, 790), "html", null, true);
        yield "</span>
                      </div>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"info-row\">
                        <span class=\"info-label\">Créé le:</span>
                        <span class=\"info-value\">";
        // line 796
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 796, $this->source); })()), "CreatedAt", [], "any", false, false, false, 796)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 796, $this->source); })()), "CreatedAt", [], "any", false, false, false, 796), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Edit Form -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card form-card\">
                  <div class=\"form-header\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"info-icon card-1 me-3\">
                        <i class=\"mdi mdi-pencil\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">Formulaire de modification</h4>
                        <p class=\"mb-0 opacity-75\">Modifiez les champs nécessaires ci-dessous</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"form-body\">
                    ";
        // line 821
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 821, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample"]]);
        yield "
                    
                    <!-- Section 1: Informations de base -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-information-outline\"></i>
                        Informations de base
                      </h5>
                      
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-rename-box\"></i>
                              ";
        // line 835
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 835, $this->source); })()), "nomProjet", [], "any", false, false, false, 835), 'label');
        yield "
                            </label>
                            ";
        // line 837
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 837, $this->source); })()), "nomProjet", [], "any", false, false, false, 837), 'widget', ["attr" => ["class" => "form-control form-control-custom", "placeholder" => "Ex: Système de gestion des étudiants"]]);
        // line 840
        yield "
                            <div class=\"form-text-help\">
                              Donnez un nom clair et descriptif à votre projet
                            </div>
                            ";
        // line 844
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 844, $this->source); })()), "nomProjet", [], "any", false, false, false, 844), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-book-open\"></i>
                              ";
        // line 852
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 852, $this->source); })()), "matiere", [], "any", false, false, false, 852), 'label');
        yield "
                            </label>
                            ";
        // line 854
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 854, $this->source); })()), "matiere", [], "any", false, false, false, 854), 'widget', ["attr" => ["class" => "form-control form-control-custom", "placeholder" => "Ex: Développement Web, Base de données..."]]);
        // line 857
        yield "
                            <div class=\"form-text-help\">
                              Spécifiez la matière concernée par ce projet
                            </div>
                            ";
        // line 861
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 861, $this->source); })()), "matiere", [], "any", false, false, false, 861), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-account-multiple\"></i>
                              ";
        // line 871
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 871, $this->source); })()), "nbrMembre", [], "any", false, false, false, 871), 'label');
        yield "
                            </label>
                            ";
        // line 873
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 873, $this->source); })()), "nbrMembre", [], "any", false, false, false, 873), 'widget', ["attr" => ["class" => "form-control form-control-custom", "min" => "1", "max" => "10"]]);
        // line 877
        yield "
                            <div class=\"form-text-help\">
                              Nombre de membres dans le groupe (1-10)
                            </div>
                            ";
        // line 881
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 881, $this->source); })()), "nbrMembre", [], "any", false, false, false, 881), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label\">
                              <i class=\"mdi mdi-calendar-check\"></i>
                              ";
        // line 889
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 889, $this->source); })()), "CreatedAt", [], "any", false, false, false, 889), 'label');
        yield "
                            </label>
                            ";
        // line 891
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 891, $this->source); })()), "CreatedAt", [], "any", false, false, false, 891), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 893
        yield "
                            <div class=\"form-text-help\">
                              Date de création du groupe
                            </div>
                            ";
        // line 897
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 897, $this->source); })()), "CreatedAt", [], "any", false, false, false, 897), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-progress-check\"></i>
                              ";
        // line 905
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 905, $this->source); })()), "statut", [], "any", false, false, false, 905), 'label');
        yield "
                            </label>
                            ";
        // line 907
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 907, $this->source); })()), "statut", [], "any", false, false, false, 907), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 909
        yield "
                            <div class=\"form-text-help\">
                              Mettez à jour le statut du groupe
                            </div>
                            ";
        // line 913
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 913, $this->source); })()), "statut", [], "any", false, false, false, 913), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Section 2: Description -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-text-box-outline\"></i>
                        Description du projet
                      </h5>
                      
                      <div class=\"form-group-enhanced\">
                        <label class=\"form-label required-field\">
                          <i class=\"mdi mdi-text\"></i>
                          ";
        // line 929
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 929, $this->source); })()), "description", [], "any", false, false, false, 929), 'label');
        yield "
                        </label>
                        ";
        // line 931
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 931, $this->source); })()), "description", [], "any", false, false, false, 931), 'widget', ["attr" => ["class" => "form-control form-control-custom", "rows" => "5", "placeholder" => "Décrivez les objectifs, les fonctionnalités et les technologies utilisées dans ce projet..."]]);
        // line 935
        yield "
                        <div class=\"form-text-help\">
                          Décrivez en détail le projet, ses objectifs et son fonctionnement
                        </div>
                        ";
        // line 939
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 939, $this->source); })()), "description", [], "any", false, false, false, 939), 'errors');
        yield "
                      </div>
                    </div>
                    
                    <!-- Section 3: Actions -->
                    <div class=\"form-actions\">
                      <div>
                        <form method=\"post\" action=\"";
        // line 946
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 946, $this->source); })()), "id", [], "any", false, false, false, 946)]), "html", null, true);
        yield "\" 
                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce groupe ? Cette action est irréversible.');\"
                              class=\"d-inline\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
        // line 949
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 949, $this->source); })()), "id", [], "any", false, false, false, 949))), "html", null, true);
        yield "\">
                          <button type=\"submit\" class=\"btn btn-delete\">
                            <i class=\"mdi mdi-delete me-1\"></i>
                            Supprimer
                          </button>
                        </form>
                      </div>
                      
                      <div class=\"d-flex gap-3\">
                        <a href=\"";
        // line 958
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 958, $this->source); })()), "id", [], "any", false, false, false, 958)]), "html", null, true);
        yield "\" class=\"btn btn-cancel\">
                          <i class=\"mdi mdi-close me-1\"></i>
                          Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-update\">
                          <i class=\"mdi mdi-content-save me-1\"></i>
                          Enregistrer les modifications
                        </button>
                      </div>
                    </div>
                    
                    ";
        // line 969
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 969, $this->source); })()), 'form_end');
        yield "
                  </div>
                </div>
              </div>
            </div>
            
            <!-- History Section -->
            <div class=\"row mt-4\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">
                      <i class=\"mdi mdi-history text-primary me-2\"></i>
                      Historique du groupe
                    </h5>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"me-3\">
                            <div class=\"stat-icon card-2\" style=\"width: 40px; height: 40px; font-size: 16px;\">
                              <i class=\"mdi mdi-calendar\"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Date de création</h6>
                            <p class=\"text-muted mb-0\">";
        // line 994
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 994, $this->source); })()), "CreatedAt", [], "any", false, false, false, 994)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 994, $this->source); })()), "CreatedAt", [], "any", false, false, false, 994), "d F Y à H:i"), "html", null, true)) : ("Date non spécifiée"));
        yield "</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"me-3\">
                            <div class=\"stat-icon card-3\" style=\"width: 40px; height: 40px; font-size: 16px;\">
                              <i class=\"mdi mdi-update\"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Dernière modification</h6>
                            <p class=\"text-muted mb-0\">En cours de modification</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"mt-3\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-information-outline me-1\"></i>
                        Les modifications seront visibles immédiatement après l'enregistrement.
                      </small>
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
        // line 1027
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Modification du groupe #";
        // line 1030
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1030, $this->source); })()), "id", [], "any", false, false, false, 1030), "html", null, true);
        yield "
                  ";
        // line 1031
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1031, $this->source); })()), "user", [], "any", false, false, false, 1031)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1032
            yield "                    | Modifié par: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1032, $this->source); })()), "user", [], "any", false, false, false, 1032), "prenom", [], "any", false, false, false, 1032), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1032, $this->source); })()), "user", [], "any", false, false, false, 1032), "nom", [], "any", false, false, false, 1032), "html", null, true);
            yield "
                  ";
        }
        // line 1034
        yield "                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 1043
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1044
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1045
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
        
        // Add character counter for description
        const descriptionField = document.getElementById('";
        // line 1059
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1059, $this->source); })()), "description", [], "any", false, false, false, 1059), "vars", [], "any", false, false, false, 1059), "id", [], "any", false, false, false, 1059), "html", null, true);
        yield "');
        if (descriptionField) {
          const counter = document.createElement('div');
          counter.className = 'form-text-help text-end';
          counter.innerHTML = '<span id=\"charCount\">' + descriptionField.value.length + '</span> / 1000 caractères';
          descriptionField.parentNode.appendChild(counter);
          
          descriptionField.addEventListener('input', function() {
            const charCount = this.value.length;
            document.getElementById('charCount').textContent = charCount;
            
            if (charCount > 1000) {
              counter.classList.add('text-danger');
            } else {
              counter.classList.remove('text-danger');
            }
          });
        }
        
        // Add tooltips for required fields
        const requiredLabels = document.querySelectorAll('.required-field');
        requiredLabels.forEach(label => {
          label.title = 'Ce champ est obligatoire';
        });
        
        // Format date for CreatedAt field
        const createdAtField = document.getElementById('";
        // line 1085
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1085, $this->source); })()), "CreatedAt", [], "any", false, false, false, 1085), "vars", [], "any", false, false, false, 1085), "id", [], "any", false, false, false, 1085), "html", null, true);
        yield "');
        if (createdAtField && createdAtField.value) {
          // Convert date to local format if needed
          const date = new Date(createdAtField.value);
          if (!isNaN(date.getTime())) {
            const formattedDate = date.toISOString().slice(0, 16);
            createdAtField.value = formattedDate;
          }
        }
        
        // Confirmation for delete button
        const deleteForm = document.querySelector('form[onsubmit*=\"confirm\"]');
        if (deleteForm) {
          const deleteButton = deleteForm.querySelector('button[type=\"submit\"]');
          if (deleteButton) {
            deleteButton.addEventListener('click', function(e) {
              if (!confirm('Êtes-vous sûr de vouloir supprimer définitivement ce groupe ? Cette action est irréversible.')) {
                e.preventDefault();
                return false;
              }
            });
          }
        }
        
        // Highlight changes in form
        const form = document.querySelector('form.form-sample');
        if (form) {
          const initialValues = {};
          const inputs = form.querySelectorAll('input, textarea, select');
          
          inputs.forEach(input => {
            if (input.name) {
              initialValues[input.name] = input.value;
            }
          });
          
          form.addEventListener('submit', function(e) {
            let hasChanges = false;
            const changedFields = [];
            
            inputs.forEach(input => {
              if (input.name && initialValues[input.name] !== input.value) {
                hasChanges = true;
                changedFields.push(input.name);
              }
            });
            
            if (!hasChanges) {
              if (!confirm('Aucune modification détectée. Voulez-vous quand même continuer ?')) {
                e.preventDefault();
                return false;
              }
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
        return "groupe_projet/edit.html.twig";
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
        return array (  1532 => 1085,  1503 => 1059,  1486 => 1045,  1482 => 1044,  1478 => 1043,  1467 => 1034,  1459 => 1032,  1457 => 1031,  1453 => 1030,  1447 => 1027,  1411 => 994,  1383 => 969,  1369 => 958,  1357 => 949,  1351 => 946,  1341 => 939,  1335 => 935,  1333 => 931,  1328 => 929,  1309 => 913,  1303 => 909,  1301 => 907,  1296 => 905,  1285 => 897,  1279 => 893,  1277 => 891,  1272 => 889,  1261 => 881,  1255 => 877,  1253 => 873,  1248 => 871,  1235 => 861,  1229 => 857,  1227 => 854,  1222 => 852,  1211 => 844,  1205 => 840,  1203 => 837,  1198 => 835,  1181 => 821,  1153 => 796,  1144 => 790,  1135 => 784,  1127 => 778,  1121 => 776,  1115 => 774,  1113 => 773,  1108 => 772,  1106 => 771,  1091 => 761,  1085 => 758,  1073 => 748,  1068 => 745,  1064 => 743,  1062 => 742,  1058 => 741,  1052 => 740,  1047 => 737,  1045 => 736,  1033 => 729,  1027 => 726,  1011 => 712,  1005 => 711,  995 => 707,  991 => 706,  986 => 705,  981 => 704,  976 => 703,  953 => 683,  938 => 671,  924 => 661,  922 => 660,  918 => 658,  913 => 655,  909 => 653,  905 => 651,  901 => 649,  899 => 648,  894 => 646,  887 => 645,  885 => 644,  878 => 639,  871 => 636,  865 => 632,  861 => 630,  857 => 628,  855 => 627,  847 => 624,  843 => 622,  836 => 619,  833 => 618,  827 => 615,  822 => 614,  820 => 613,  817 => 612,  815 => 611,  803 => 602,  770 => 572,  752 => 557,  739 => 547,  716 => 527,  703 => 517,  690 => 507,  677 => 497,  664 => 487,  651 => 477,  638 => 467,  616 => 447,  611 => 444,  607 => 442,  603 => 440,  599 => 438,  597 => 437,  592 => 435,  585 => 434,  583 => 433,  578 => 430,  572 => 428,  569 => 427,  562 => 424,  559 => 423,  553 => 420,  548 => 419,  545 => 418,  543 => 417,  532 => 409,  528 => 408,  523 => 406,  519 => 405,  130 => 19,  126 => 18,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Groupe Projet{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Modifier Groupe Projet</title>
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
        white-space: nowrap;
      }
      
      /* Style pour mieux aligner le contenu de la navbar */
      .navbar-profile-name {
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0;
      }
      
      /* Styles pour le formulaire */
      .form-card {
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        border: none;
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
      
      .btn-update {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        border: none;
        padding: 12px 30px;
        font-weight: 500;
        border-radius: 8px;
        transition: all 0.3s;
      }
      
      .btn-update:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(67, 233, 123, 0.3);
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
      }
      
      .btn-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(240, 147, 251, 0.3);
      }
      
      .form-actions {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
      }
      
      .group-info-box {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 30px;
      }
      
      .info-row {
        display: flex;
        margin-bottom: 15px;
      }
      
      .info-label {
        font-weight: 600;
        color: #333;
        width: 150px;
        flex-shrink: 0;
      }
      
      .info-value {
        color: #555;
      }
      
      .info-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
      }
      
      .info-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
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
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-warning rounded-circle\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Modification de groupe</p>
                      <p class=\"text-muted ellipsis mb-0\"> Groupe {{ groupe_projet.nomProjet }} en cours de modification</p>
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
                      <i class=\"mdi mdi-account-multiple-edit\"></i>
                    </span> 
                    Modifier le Groupe Projet
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_groupe_projet_index') }}\">Groupes</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_groupe_projet_show', {'id': groupe_projet.id}) }}\">{{ groupe_projet.nomProjet }}</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Modification
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
            
            <!-- Group Information -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"group-info-box\">
                  <div class=\"d-flex align-items-center mb-3\">
                    <div class=\"group-avatar me-3\" style=\"width: 50px; height: 50px; font-size: 18px;\">
                      GP{{ groupe_projet.id }}
                    </div>
                    <div>
                      <h4 class=\"mb-1\">Groupe #{{ groupe_projet.id }} - {{ groupe_projet.nomProjet }}</h4>
                      <p class=\"text-muted mb-0\">Modifiez les informations de ce groupe projet</p>
                    </div>
                  </div>
                  
                  <div class=\"row\">
                    <div class=\"col-md-3\">
                      <div class=\"info-row\">
                        <span class=\"info-label\">Statut actuel:</span>
                        <span class=\"info-value\">
                          {% if groupe_projet.statut == 'Actif' %}
                            <span class=\"info-badge badge-active\">{{ groupe_projet.statut }}</span>
                          {% elseif groupe_projet.statut == 'Terminé' %}
                            <span class=\"info-badge badge-completed\">{{ groupe_projet.statut }}</span>
                          {% else %}
                            <span class=\"info-badge badge-inactive\">{{ groupe_projet.statut }}</span>
                          {% endif %}
                        </span>
                      </div>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"info-row\">
                        <span class=\"info-label\">Matière:</span>
                        <span class=\"info-value\">{{ groupe_projet.matiere }}</span>
                      </div>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"info-row\">
                        <span class=\"info-label\">Nombre de membres:</span>
                        <span class=\"info-value\">{{ groupe_projet.nbrMembre }}</span>
                      </div>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"info-row\">
                        <span class=\"info-label\">Créé le:</span>
                        <span class=\"info-value\">{{ groupe_projet.CreatedAt ? groupe_projet.CreatedAt|date('d/m/Y H:i') : 'N/A' }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Edit Form -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card form-card\">
                  <div class=\"form-header\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"info-icon card-1 me-3\">
                        <i class=\"mdi mdi-pencil\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">Formulaire de modification</h4>
                        <p class=\"mb-0 opacity-75\">Modifiez les champs nécessaires ci-dessous</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"form-body\">
                    {{ form_start(form, {'attr': {'class': 'form-sample'}}) }}
                    
                    <!-- Section 1: Informations de base -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-information-outline\"></i>
                        Informations de base
                      </h5>
                      
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-rename-box\"></i>
                              {{ form_label(form.nomProjet) }}
                            </label>
                            {{ form_widget(form.nomProjet, {'attr': {
                              'class': 'form-control form-control-custom',
                              'placeholder': 'Ex: Système de gestion des étudiants'
                            }}) }}
                            <div class=\"form-text-help\">
                              Donnez un nom clair et descriptif à votre projet
                            </div>
                            {{ form_errors(form.nomProjet) }}
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-book-open\"></i>
                              {{ form_label(form.matiere) }}
                            </label>
                            {{ form_widget(form.matiere, {'attr': {
                              'class': 'form-control form-control-custom',
                              'placeholder': 'Ex: Développement Web, Base de données...'
                            }}) }}
                            <div class=\"form-text-help\">
                              Spécifiez la matière concernée par ce projet
                            </div>
                            {{ form_errors(form.matiere) }}
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-account-multiple\"></i>
                              {{ form_label(form.nbrMembre) }}
                            </label>
                            {{ form_widget(form.nbrMembre, {'attr': {
                              'class': 'form-control form-control-custom',
                              'min': '1',
                              'max': '10'
                            }}) }}
                            <div class=\"form-text-help\">
                              Nombre de membres dans le groupe (1-10)
                            </div>
                            {{ form_errors(form.nbrMembre) }}
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label\">
                              <i class=\"mdi mdi-calendar-check\"></i>
                              {{ form_label(form.CreatedAt) }}
                            </label>
                            {{ form_widget(form.CreatedAt, {'attr': {
                              'class': 'form-control form-control-custom'
                            }}) }}
                            <div class=\"form-text-help\">
                              Date de création du groupe
                            </div>
                            {{ form_errors(form.CreatedAt) }}
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-progress-check\"></i>
                              {{ form_label(form.statut) }}
                            </label>
                            {{ form_widget(form.statut, {'attr': {
                              'class': 'form-control form-control-custom'
                            }}) }}
                            <div class=\"form-text-help\">
                              Mettez à jour le statut du groupe
                            </div>
                            {{ form_errors(form.statut) }}
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Section 2: Description -->
                    <div class=\"form-section\">
                      <h5 class=\"form-section-title\">
                        <i class=\"mdi mdi-text-box-outline\"></i>
                        Description du projet
                      </h5>
                      
                      <div class=\"form-group-enhanced\">
                        <label class=\"form-label required-field\">
                          <i class=\"mdi mdi-text\"></i>
                          {{ form_label(form.description) }}
                        </label>
                        {{ form_widget(form.description, {'attr': {
                          'class': 'form-control form-control-custom',
                          'rows': '5',
                          'placeholder': 'Décrivez les objectifs, les fonctionnalités et les technologies utilisées dans ce projet...'
                        }}) }}
                        <div class=\"form-text-help\">
                          Décrivez en détail le projet, ses objectifs et son fonctionnement
                        </div>
                        {{ form_errors(form.description) }}
                      </div>
                    </div>
                    
                    <!-- Section 3: Actions -->
                    <div class=\"form-actions\">
                      <div>
                        <form method=\"post\" action=\"{{ path('app_groupe_projet_delete', {'id': groupe_projet.id}) }}\" 
                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce groupe ? Cette action est irréversible.');\"
                              class=\"d-inline\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ groupe_projet.id) }}\">
                          <button type=\"submit\" class=\"btn btn-delete\">
                            <i class=\"mdi mdi-delete me-1\"></i>
                            Supprimer
                          </button>
                        </form>
                      </div>
                      
                      <div class=\"d-flex gap-3\">
                        <a href=\"{{ path('app_groupe_projet_show', {'id': groupe_projet.id}) }}\" class=\"btn btn-cancel\">
                          <i class=\"mdi mdi-close me-1\"></i>
                          Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-update\">
                          <i class=\"mdi mdi-content-save me-1\"></i>
                          Enregistrer les modifications
                        </button>
                      </div>
                    </div>
                    
                    {{ form_end(form) }}
                  </div>
                </div>
              </div>
            </div>
            
            <!-- History Section -->
            <div class=\"row mt-4\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">
                      <i class=\"mdi mdi-history text-primary me-2\"></i>
                      Historique du groupe
                    </h5>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"me-3\">
                            <div class=\"stat-icon card-2\" style=\"width: 40px; height: 40px; font-size: 16px;\">
                              <i class=\"mdi mdi-calendar\"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Date de création</h6>
                            <p class=\"text-muted mb-0\">{{ groupe_projet.CreatedAt ? groupe_projet.CreatedAt|date('d F Y à H:i') : 'Date non spécifiée' }}</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"me-3\">
                            <div class=\"stat-icon card-3\" style=\"width: 40px; height: 40px; font-size: 16px;\">
                              <i class=\"mdi mdi-update\"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Dernière modification</h6>
                            <p class=\"text-muted mb-0\">En cours de modification</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"mt-3\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-information-outline me-1\"></i>
                        Les modifications seront visibles immédiatement après l'enregistrement.
                      </small>
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
                  Modification du groupe #{{ groupe_projet.id }}
                  {% if app.user %}
                    | Modifié par: {{ app.user.prenom }} {{ app.user.nom }}
                  {% endif %}
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
        
        // Add character counter for description
        const descriptionField = document.getElementById('{{ form.description.vars.id }}');
        if (descriptionField) {
          const counter = document.createElement('div');
          counter.className = 'form-text-help text-end';
          counter.innerHTML = '<span id=\"charCount\">' + descriptionField.value.length + '</span> / 1000 caractères';
          descriptionField.parentNode.appendChild(counter);
          
          descriptionField.addEventListener('input', function() {
            const charCount = this.value.length;
            document.getElementById('charCount').textContent = charCount;
            
            if (charCount > 1000) {
              counter.classList.add('text-danger');
            } else {
              counter.classList.remove('text-danger');
            }
          });
        }
        
        // Add tooltips for required fields
        const requiredLabels = document.querySelectorAll('.required-field');
        requiredLabels.forEach(label => {
          label.title = 'Ce champ est obligatoire';
        });
        
        // Format date for CreatedAt field
        const createdAtField = document.getElementById('{{ form.CreatedAt.vars.id }}');
        if (createdAtField && createdAtField.value) {
          // Convert date to local format if needed
          const date = new Date(createdAtField.value);
          if (!isNaN(date.getTime())) {
            const formattedDate = date.toISOString().slice(0, 16);
            createdAtField.value = formattedDate;
          }
        }
        
        // Confirmation for delete button
        const deleteForm = document.querySelector('form[onsubmit*=\"confirm\"]');
        if (deleteForm) {
          const deleteButton = deleteForm.querySelector('button[type=\"submit\"]');
          if (deleteButton) {
            deleteButton.addEventListener('click', function(e) {
              if (!confirm('Êtes-vous sûr de vouloir supprimer définitivement ce groupe ? Cette action est irréversible.')) {
                e.preventDefault();
                return false;
              }
            });
          }
        }
        
        // Highlight changes in form
        const form = document.querySelector('form.form-sample');
        if (form) {
          const initialValues = {};
          const inputs = form.querySelectorAll('input, textarea, select');
          
          inputs.forEach(input => {
            if (input.name) {
              initialValues[input.name] = input.value;
            }
          });
          
          form.addEventListener('submit', function(e) {
            let hasChanges = false;
            const changedFields = [];
            
            inputs.forEach(input => {
              if (input.name && initialValues[input.name] !== input.value) {
                hasChanges = true;
                changedFields.push(input.name);
              }
            });
            
            if (!hasChanges) {
              if (!confirm('Aucune modification détectée. Voulez-vous quand même continuer ?')) {
                e.preventDefault();
                return false;
              }
            }
          });
        }
      });
    </script>
  </body>
</html>
{% endblock %}", "groupe_projet/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\groupe_projet\\edit.html.twig");
    }
}
