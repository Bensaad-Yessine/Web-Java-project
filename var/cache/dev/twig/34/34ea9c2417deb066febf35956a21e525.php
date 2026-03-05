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

/* groupe_projet/show.html.twig */
class __TwigTemplate_76ff2b1357e3bf8a73cf617f28ac2ae2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_projet/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_projet/show.html.twig"));

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

        yield "Détails Groupe Projet - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 3, $this->source); })()), "nomProjet", [], "any", false, false, false, 3), "html", null, true);
        
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
    <title>ESPRIT - Détails Groupe Projet</title>
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
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 24px;
        flex-shrink: 0;
        margin: 0 auto;
      }
      
      .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 18px;
        flex-shrink: 0;
      }
      
      .user-avatar-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 3px 10px rgba(0,0,0,0.15);
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
        padding: 8px 16px;
        font-size: 0.9rem;
      }
      
      .badge-inactive {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 0.9rem;
      }
      
      .badge-completed {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 0.9rem;
      }
      
      .badge-paused {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 0.9rem;
      }
      
      .action-buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
      }
      
      .action-buttons .btn {
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
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
      
      /* Styles spécifiques pour la page show */
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
      
      .info-item {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
      }
      
      .info-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
      }
      
      .info-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1rem;
      }
      
      .info-value {
        color: #555;
        font-size: 1.1rem;
        padding-left: 35px;
      }
      
      .description-box {
        background: #1b558f;
        border-radius: 10px;
        padding: 20px;
        border-left: 4px solid #667eea;
      }
      
      .member-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 15px;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
      }
      
      .member-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-color: #667eea;
      }
      
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 427
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 430
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 431
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
        // line 439
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 439, $this->source); })()), "user", [], "any", false, false, false, 439)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 440
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 440, $this->source); })()), "user", [], "any", false, false, false, 440), "profilePic", [], "any", false, false, false, 440)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 441
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 441, $this->source); })()), "user", [], "any", false, false, false, 441), "profilePic", [], "any", false, false, false, 441))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 442
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 442, $this->source); })()), "user", [], "any", false, false, false, 442), "prenom", [], "any", false, false, false, 442), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 445
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 446
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 446, $this->source); })()), "user", [], "any", false, false, false, 446), "prenom", [], "any", false, false, false, 446))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 446, $this->source); })()), "user", [], "any", false, false, false, 446), "nom", [], "any", false, false, false, 446))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 449
            yield "                  ";
        } else {
            // line 450
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 452
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 455
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 456
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 456, $this->source); })()), "user", [], "any", false, false, false, 456), "prenom", [], "any", false, false, false, 456), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 456, $this->source); })()), "user", [], "any", false, false, false, 456), "nom", [], "any", false, false, false, 456), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 457, $this->source); })()), "user", [], "any", false, false, false, 457), "email", [], "any", false, false, false, 457), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 459
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 459, $this->source); })()), "user", [], "any", false, false, false, 459), "roles", [], "any", false, false, false, 459))) {
                // line 460
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 462
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 464
            yield "                    </div>
                  ";
        } else {
            // line 466
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 469
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
        // line 489
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
        // line 499
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
        // line 509
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
        // line 519
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
        // line 529
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
        // line 539
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
        // line 549
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
        // line 569
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
        // line 579
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
        // line 594
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
        // line 616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 616, $this->source); })()), "id", [], "any", false, false, false, 616)]), "html", null, true);
        yield "\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-info rounded-circle\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Groupe projet</p>
                      <p class=\"text-muted ellipsis mb-0\"> Vous consultez: ";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 624, $this->source); })()), "nomProjet", [], "any", false, false, false, 624), "html", null, true);
        yield "</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 633
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 633, $this->source); })()), "user", [], "any", false, false, false, 633)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 634
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 635
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 635, $this->source); })()), "user", [], "any", false, false, false, 635), "profilePic", [], "any", false, false, false, 635)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 636
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 636, $this->source); })()), "user", [], "any", false, false, false, 636), "profilePic", [], "any", false, false, false, 636))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 637, $this->source); })()), "user", [], "any", false, false, false, 637), "prenom", [], "any", false, false, false, 637), "html", null, true);
                yield "\" 
                               class=\"navbar-avatar-img\">
                        ";
            } else {
                // line 640
                yield "                          <div class=\"navbar-avatar\">
                            ";
                // line 641
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 641, $this->source); })()), "user", [], "any", false, false, false, 641), "prenom", [], "any", false, false, false, 641))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 641, $this->source); })()), "user", [], "any", false, false, false, 641), "nom", [], "any", false, false, false, 641))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 644
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 646
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 646, $this->source); })()), "user", [], "any", false, false, false, 646), "prenom", [], "any", false, false, false, 646), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 646, $this->source); })()), "user", [], "any", false, false, false, 646), "nom", [], "any", false, false, false, 646), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 649
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 649, $this->source); })()), "user", [], "any", false, false, false, 649), "roles", [], "any", false, false, false, 649))) {
                // line 650
                yield "                              <span class=\"badge badge-admin badge-sm\">Admin</span>
                            ";
            } else {
                // line 652
                yield "                              <span class=\"badge badge-etudiant badge-sm\">Utilisateur</span>
                            ";
            }
            // line 654
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 658
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 661
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 666
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 666, $this->source); })()), "user", [], "any", false, false, false, 666)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 667
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 667, $this->source); })()), "user", [], "any", false, false, false, 667), "prenom", [], "any", false, false, false, 667), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 667, $this->source); })()), "user", [], "any", false, false, false, 667), "nom", [], "any", false, false, false, 667), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 668
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 668, $this->source); })()), "user", [], "any", false, false, false, 668), "email", [], "any", false, false, false, 668), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 670
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 670, $this->source); })()), "user", [], "any", false, false, false, 670), "roles", [], "any", false, false, false, 670))) {
                // line 671
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 673
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 675
            yield "                      </small>
                    ";
        } else {
            // line 677
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 680
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 682
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 682, $this->source); })()), "user", [], "any", false, false, false, 682)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 683
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 683, $this->source); })()), "user", [], "any", false, false, false, 683), "id", [], "any", false, false, false, 683)]), "html", null, true);
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
            // line 693
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 693, $this->source); })()), "user", [], "any", false, false, false, 693), "id", [], "any", false, false, false, 693)]), "html", null, true);
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
        // line 705
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
        // line 725
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 725, $this->source); })()), "flashes", [], "any", false, false, false, 725));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 726
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 727
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 728
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 729
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 733
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 734
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account-multiple\"></i>
                    </span> 
                    Détails du Groupe Projet
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 748
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">Groupes</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>";
        // line 751
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 751, $this->source); })()), "nomProjet", [], "any", false, false, false, 751), "html", null, true);
        yield "
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            
            <!-- Group Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                      <div class=\"d-flex align-items-center\">
                        <div class=\"group-avatar me-4\">
                          GP";
        // line 767
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 767, $this->source); })()), "id", [], "any", false, false, false, 767), "html", null, true);
        yield "
                        </div>
                        <div>
                          <h2 class=\"mb-1\">";
        // line 770
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 770, $this->source); })()), "nomProjet", [], "any", false, false, false, 770), "html", null, true);
        yield "</h2>
                          <p class=\"mb-0 opacity-75\">
                            <i class=\"mdi mdi-book-open me-1\"></i>
                            ";
        // line 773
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 773, $this->source); })()), "matiere", [], "any", false, false, false, 773), "html", null, true);
        yield "
                            ";
        // line 774
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 774, $this->source); })()), "idUser", [], "any", false, false, false, 774)) > 0)) {
            // line 775
            yield "                              <span class=\"ms-3\">
                                <i class=\"mdi mdi-account-multiple me-1\"></i>
                                ";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 777, $this->source); })()), "idUser", [], "any", false, false, false, 777)), "html", null, true);
            yield " membre(s)
                              </span>
                            ";
        }
        // line 780
        yield "                          </p>
                        </div>
                      </div>
                      <div>
                        ";
        // line 784
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 784, $this->source); })()), "statut", [], "any", false, false, false, 784) == "Actif")) {
            // line 785
            yield "                          <span class=\"badge-active\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 785, $this->source); })()), "statut", [], "any", false, false, false, 785), "html", null, true);
            yield "</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 786
(isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 786, $this->source); })()), "statut", [], "any", false, false, false, 786) == "Terminé")) {
            // line 787
            yield "                          <span class=\"badge-completed\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 787, $this->source); })()), "statut", [], "any", false, false, false, 787), "html", null, true);
            yield "</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 788
(isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 788, $this->source); })()), "statut", [], "any", false, false, false, 788) == "En pause")) {
            // line 789
            yield "                          <span class=\"badge-paused\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 789, $this->source); })()), "statut", [], "any", false, false, false, 789), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 791
            yield "                          <span class=\"badge-inactive\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 791, $this->source); })()), "statut", [], "any", false, false, false, 791), "html", null, true);
            yield "</span>
                        ";
        }
        // line 793
        yield "                      </div>
                    </div>
                  </div>
                  
                  <div class=\"info-card-body\">
                    <div class=\"action-buttons mb-4\">
                      <a href=\"";
        // line 799
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Retour à la liste
                      </a>
                      <a href=\"";
        // line 803
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 803, $this->source); })()), "id", [], "any", false, false, false, 803)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                        <i class=\"mdi mdi-pencil me-1\"></i>
                        Modifier
                      </a>
                      <form method=\"post\" action=\"";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 807, $this->source); })()), "id", [], "any", false, false, false, 807)]), "html", null, true);
        yield "\" 
                            onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce groupe ?');\"
                            class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 810, $this->source); })()), "id", [], "any", false, false, false, 810))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                          <i class=\"mdi mdi-delete me-1\"></i>
                          Supprimer
                        </button>
                      </form>
                    </div>
                    
                    <div class=\"stats-grid\">
                      <div class=\"stat-item\">
                        <div class=\"stat-icon-small card-1\">
                          <i class=\"mdi mdi-identifier\"></i>
                        </div>
                        <div class=\"stat-value text-dark\">#";
        // line 823
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 823, $this->source); })()), "id", [], "any", false, false, false, 823), "html", null, true);
        yield "</div>
                        <div class=\"stat-title\">ID du Groupe</div>
                      </div>
                      
                      <div class=\"stat-item\">
                        <div class=\"stat-icon-small card-2\">
                          <i class=\"mdi mdi-account-multiple\"></i>
                        </div>
                        <div class=\"stat-value text-dark\">";
        // line 831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 831, $this->source); })()), "nbrMembre", [], "any", false, false, false, 831), "html", null, true);
        yield "</div>
                        <div class=\"stat-title\">Membres attendus</div>
                      </div>
                      
                      <div class=\"stat-item\">
                        <div class=\"stat-icon-small card-3\">
                          <i class=\"mdi mdi-account-check\"></i>
                        </div>
                        <div class=\"stat-value text-dark\">";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 839, $this->source); })()), "idUser", [], "any", false, false, false, 839)), "html", null, true);
        yield "</div>
                        <div class=\"stat-title\">Membres assignés</div>
                      </div>
                      
                      <div class=\"stat-item\">
                        <div class=\"stat-icon-small card-4\">
                          <i class=\"mdi mdi-calendar\"></i>
                        </div>
                        <div class=\"stat-value text-dark\">
                          ";
        // line 848
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 848, $this->source); })()), "CreatedAt", [], "any", false, false, false, 848)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 848, $this->source); })()), "CreatedAt", [], "any", false, false, false, 848), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "
                        </div>
                        <div class=\"stat-title\">Date de création</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Details and Members -->
            <div class=\"row\">
              <!-- Left Column: Details -->
              <div class=\"col-lg-8\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <h4 class=\"mb-0\">
                      <i class=\"mdi mdi-information-outline me-2\"></i>
                      Informations détaillées
                    </h4>
                  </div>
                  <div class=\"info-card-body\">
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-rename-box\"></i>
                        Nom du projet
                      </div>
                      <div class=\"info-value\">";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 875, $this->source); })()), "nomProjet", [], "any", false, false, false, 875), "html", null, true);
        yield "</div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-book-open\"></i>
                        Matière
                      </div>
                      <div class=\"info-value\">";
        // line 883
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 883, $this->source); })()), "matiere", [], "any", false, false, false, 883), "html", null, true);
        yield "</div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                        Nombre de membres
                      </div>
                      <div class=\"info-value\">
                        ";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 892, $this->source); })()), "nbrMembre", [], "any", false, false, false, 892), "html", null, true);
        yield " membre(s)
                        ";
        // line 893
        $context["difference"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 893, $this->source); })()), "nbrMembre", [], "any", false, false, false, 893) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 893, $this->source); })()), "idUser", [], "any", false, false, false, 893)));
        // line 894
        yield "                        ";
        if (((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 894, $this->source); })()) > 0)) {
            // line 895
            yield "                          <span class=\"text-warning ms-2\">
                            <i class=\"mdi mdi-alert\"></i>
                            ";
            // line 897
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 897, $this->source); })()), "html", null, true);
            yield " membre(s) manquant(s)
                          </span>
                        ";
        } elseif ((        // line 899
(isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 899, $this->source); })()) < 0)) {
            // line 900
            yield "                          <span class=\"text-info ms-2\">
                            <i class=\"mdi mdi-information\"></i>
                            ";
            // line 902
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape( -(isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 902, $this->source); })()), "html", null, true);
            yield " membre(s) en trop
                          </span>
                        ";
        } else {
            // line 905
            yield "                          <span class=\"text-success ms-2\">
                            <i class=\"mdi mdi-check-circle\"></i>
                            Complet
                          </span>
                        ";
        }
        // line 910
        yield "                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-calendar-check\"></i>
                        Date de création
                      </div>
                      <div class=\"info-value\">
                        ";
        // line 919
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 919, $this->source); })()), "CreatedAt", [], "any", false, false, false, 919)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 919, $this->source); })()), "CreatedAt", [], "any", false, false, false, 919), "d F Y à H:i"), "html", null, true)) : ("Non spécifiée"));
        yield "
                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-progress-check\"></i>
                        Statut
                      </div>
                      <div class=\"info-value\">
                        ";
        // line 929
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 929, $this->source); })()), "statut", [], "any", false, false, false, 929) == "Actif")) {
            // line 930
            yield "                          <span class=\"badge-active\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 930, $this->source); })()), "statut", [], "any", false, false, false, 930), "html", null, true);
            yield "</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 931
(isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 931, $this->source); })()), "statut", [], "any", false, false, false, 931) == "Terminé")) {
            // line 932
            yield "                          <span class=\"badge-completed\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 932, $this->source); })()), "statut", [], "any", false, false, false, 932), "html", null, true);
            yield "</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 933
(isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 933, $this->source); })()), "statut", [], "any", false, false, false, 933) == "En pause")) {
            // line 934
            yield "                          <span class=\"badge-paused\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 934, $this->source); })()), "statut", [], "any", false, false, false, 934), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 936
            yield "                          <span class=\"badge-inactive\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 936, $this->source); })()), "statut", [], "any", false, false, false, 936), "html", null, true);
            yield "</span>
                        ";
        }
        // line 938
        yield "                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-text-box-outline\"></i>
                        Description
                      </div>
                      <div class=\"description-box mt-2\">
                        ";
        // line 947
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 947, $this->source); })()), "description", [], "any", false, false, false, 947), "html", null, true));
        yield "
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Right Column: Members -->
              <div class=\"col-lg-4\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <h4 class=\"mb-0\">
                      <i class=\"mdi mdi-account-group me-2\"></i>
                      Membres du groupe
                    </h4>
                  </div>
                  <div class=\"info-card-body\">
                    ";
        // line 964
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 964, $this->source); })()), "idUser", [], "any", false, false, false, 964)) > 0)) {
            // line 965
            yield "                      <div class=\"mb-3\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                          <h5 class=\"mb-0\">";
            // line 967
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 967, $this->source); })()), "idUser", [], "any", false, false, false, 967)), "html", null, true);
            yield " membre(s)</h5>
                          <span class=\"badge bg-primary\">
                            ";
            // line 969
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 969, $this->source); })()), "idUser", [], "any", false, false, false, 969)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 969, $this->source); })()), "nbrMembre", [], "any", false, false, false, 969), "html", null, true);
            yield "
                          </span>
                        </div>
                        
                        ";
            // line 973
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 973, $this->source); })()), "idUser", [], "any", false, false, false, 973));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 974
                yield "                          <div class=\"member-card\">
                            <div class=\"d-flex align-items-center\">
                              ";
                // line 976
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePic", [], "any", false, false, false, 976)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 977
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePic", [], "any", false, false, false, 977))), "html", null, true);
                    yield "\" 
                                     alt=\"";
                    // line 978
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 978), "html", null, true);
                    yield "\" 
                                     class=\"user-avatar-img me-3\">
                              ";
                } else {
                    // line 981
                    yield "                                <div class=\"user-avatar me-3\">
                                  ";
                    // line 982
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 982))), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 982))), "html", null, true);
                    yield "
                                </div>
                              ";
                }
                // line 985
                yield "                              <div class=\"flex-grow-1\">
                                <h6 class=\"mb-1\">";
                // line 986
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 986), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 986), "html", null, true);
                yield "</h6>
                                <p class=\"text-muted mb-1 small\">
                                  <i class=\"mdi mdi-email me-1\"></i>
                                  ";
                // line 989
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 989), "html", null, true);
                yield "
                                </p>
                                ";
                // line 991
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "classe", [], "any", false, false, false, 991)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 992
                    yield "                                  <span class=\"badge bg-light text-dark small\">
                                    <i class=\"mdi mdi-school me-1\"></i>
                                    ";
                    // line 994
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "classe", [], "any", false, false, false, 994), "nom", [], "any", false, false, false, 994), "html", null, true);
                    yield "
                                  </span>
                                ";
                }
                // line 997
                yield "                              </div>
                            </div>
                          </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1001
            yield "                      </div>
                    ";
        } else {
            // line 1003
            yield "                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-account-group-off\" style=\"font-size: 60px; color: #dee2e6;\"></i>
                        <h5 class=\"text-muted\">Aucun membre</h5>
                        <p class=\"text-muted\">Aucun utilisateur n'est actuellement assigné à ce groupe.</p>
                        <a href=\"";
            // line 1007
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1007, $this->source); })()), "id", [], "any", false, false, false, 1007)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                          <i class=\"mdi mdi-account-plus\"></i>
                          Ajouter des membres
                        </a>
                      </div>
                    ";
        }
        // line 1013
        yield "                    
                    <!-- Member Statistics -->
                    ";
        // line 1015
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1015, $this->source); })()), "idUser", [], "any", false, false, false, 1015)) > 0)) {
            // line 1016
            yield "                      <div class=\"mt-4\">
                        <h6 class=\"mb-3\">
                          <i class=\"mdi mdi-chart-bar me-2\"></i>
                          Statistiques des membres
                        </h6>
                        <div class=\"row text-center\">
                          <div class=\"col-6\">
                            <div class=\"stat-icon card-2\" style=\"width: 40px; height: 40px; font-size: 16px; margin: 0 auto 10px;\">
                              <i class=\"mdi mdi-gender-male\"></i>
                            </div>
                            ";
            // line 1026
            $context["maleCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1026, $this->source); })()), "idUser", [], "any", false, false, false, 1026), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 1026, $this->source); })()), "sexe", [], "any", false, false, false, 1026) == "Homme"); }));
            // line 1027
            yield "                            <h5 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maleCount"]) || array_key_exists("maleCount", $context) ? $context["maleCount"] : (function () { throw new RuntimeError('Variable "maleCount" does not exist.', 1027, $this->source); })()), "html", null, true);
            yield "</h5>
                            <small class=\"text-muted\">Hommes</small>
                          </div>
                          <div class=\"col-6\">
                            <div class=\"stat-icon card-5\" style=\"width: 40px; height: 40px; font-size: 16px; margin: 0 auto 10px;\">
                              <i class=\"mdi mdi-gender-female\"></i>
                            </div>
                            ";
            // line 1034
            $context["femaleCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1034, $this->source); })()), "idUser", [], "any", false, false, false, 1034), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 1034, $this->source); })()), "sexe", [], "any", false, false, false, 1034) == "Femme"); }));
            // line 1035
            yield "                            <h5 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["femaleCount"]) || array_key_exists("femaleCount", $context) ? $context["femaleCount"] : (function () { throw new RuntimeError('Variable "femaleCount" does not exist.', 1035, $this->source); })()), "html", null, true);
            yield "</h5>
                            <small class=\"text-muted\">Femmes</small>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 1041
        yield "                  </div>
                </div>
              </div>
            </div>
            <!-- Propositions de réunion Section -->
<div class=\"row mt-4\">
  <div class=\"col-12\">
    <div class=\"card info-card\">
      <div class=\"info-card-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <h4 class=\"mb-0\">
            <i class=\"mdi mdi-calendar-multiple me-2\"></i>
            Propositions de réunion
          </h4>
          <a href=\"";
        // line 1055
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_new", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1055, $this->source); })()), "id", [], "any", false, false, false, 1055)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
            <i class=\"mdi mdi-plus-circle me-1\"></i>
            Nouvelle proposition
          </a>
        </div>
      </div>
      <div class=\"info-card-body\">
        ";
        // line 1062
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1062, $this->source); })()), "idReunion", [], "any", false, false, false, 1062)) > 0)) {
            // line 1063
            yield "          <div class=\"table-responsive\">
            <table class=\"table table-hover\">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Titre</th>
                  <th>Date</th>
                  <th>Heure</th>
                  <th>Lieu</th>
                  <th>Statut</th>
                  <th>Votes acceptés</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
            // line 1078
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1078, $this->source); })()), "idReunion", [], "any", false, false, false, 1078));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 1079
                yield "                  <tr>
                    <td>#";
                // line 1080
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "propositionId", [], "any", false, false, false, 1080), "html", null, true);
                yield "</td>
                    <td>
                      <strong>";
                // line 1082
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "titre", [], "any", false, false, false, 1082), "html", null, true);
                yield "</strong>
                      <br>
                      <small class=\"text-muted\">";
                // line 1084
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 1084), 0, 50), "html", null, true);
                yield "...</small>
                    </td>
                    <td>";
                // line 1086
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 1086)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 1086), "d/m/Y"), "html", null, true)) : (""));
                yield "</td>
                    <td>
                      ";
                // line 1088
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureDebut", [], "any", false, false, false, 1088)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureDebut", [], "any", false, false, false, 1088), "H:i"), "html", null, true)) : (""));
                yield " -
                      ";
                // line 1089
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureFin", [], "any", false, false, false, 1089)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureFin", [], "any", false, false, false, 1089), "H:i"), "html", null, true)) : (""));
                yield "
                    </td>
                    <td>";
                // line 1091
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "lieu", [], "any", false, false, false, 1091), "html", null, true);
                yield "</td>
                    <td>
                      ";
                // line 1093
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 1093) == "Acceptée")) {
                    // line 1094
                    yield "                        <span class=\"badge badge-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 1094), "html", null, true);
                    yield "</span>
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1095
$context["proposition"], "status", [], "any", false, false, false, 1095) == "Refusée")) {
                    // line 1096
                    yield "                        <span class=\"badge badge-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 1096), "html", null, true);
                    yield "</span>
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1097
$context["proposition"], "status", [], "any", false, false, false, 1097) == "En attente")) {
                    // line 1098
                    yield "                        <span class=\"badge badge-warning\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 1098), "html", null, true);
                    yield "</span>
                      ";
                } else {
                    // line 1100
                    yield "                        <span class=\"badge badge-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 1100), "html", null, true);
                    yield "</span>
                      ";
                }
                // line 1102
                yield "                    </td>
                    <td>
                      <span class=\"badge bg-info\">";
                // line 1104
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "nbrVoteAccept", [], "any", true, true, false, 1104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "nbrVoteAccept", [], "any", false, false, false, 1104)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "nbrVoteAccept", [], "any", false, false, false, 1104), "html", null, true)) : (0));
                yield "</span>
                    </td>
                    <td>
                      <div class=\"action-buttons\">
                        <a href=\"";
                // line 1108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_show", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1108, $this->source); })()), "id", [], "any", false, false, false, 1108), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 1108)]), "html", null, true);
                yield "\" 
                           class=\"btn btn-info btn-sm\" title=\"Voir\">
                          <i class=\"mdi mdi-eye\"></i>
                        </a>
                        <a href=\"";
                // line 1112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_edit", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1112, $this->source); })()), "id", [], "any", false, false, false, 1112), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 1112)]), "html", null, true);
                yield "\" 
                           class=\"btn btn-warning btn-sm\" title=\"Modifier\">
                          <i class=\"mdi mdi-pencil\"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['proposition'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1120
            yield "              </tbody>
            </table>
          </div>
        ";
        } else {
            // line 1124
            yield "          <div class=\"empty-state text-center py-5\">
            <i class=\"mdi mdi-calendar-blank\" style=\"font-size: 60px; color: #dee2e6;\"></i>
            <h5 class=\"text-muted mt-3\">Aucune proposition de réunion</h5>
            <p class=\"text-muted\">Commencez par créer une proposition de réunion pour ce groupe.</p>
            <a href=\"";
            // line 1128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_new", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1128, $this->source); })()), "id", [], "any", false, false, false, 1128)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
              <i class=\"mdi mdi-plus-circle me-1\"></i>
              Créer la première proposition
            </a>
          </div>
        ";
        }
        // line 1134
        yield "        
        <!-- Lien vers la page complète des propositions -->
        ";
        // line 1136
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1136, $this->source); })()), "idReunion", [], "any", false, false, false, 1136)) > 0)) {
            // line 1137
            yield "          <div class=\"text-center mt-4\">
            <a href=\"";
            // line 1138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_index", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1138, $this->source); })()), "id", [], "any", false, false, false, 1138)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
              <i class=\"mdi mdi-format-list-bulleted me-1\"></i>
              Voir toutes les propositions
            </a>
          </div>
        ";
        }
        // line 1144
        yield "      </div>
    </div>
  </div>
</div>
            <!-- Timeline Section -->
            <div class=\"row mt-4\">
              <div class=\"col-12\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <h4 class=\"mb-0\">
                      <i class=\"mdi mdi-timeline me-2\"></i>
                      Historique et activité
                    </h4>
                  </div>
                  <div class=\"info-card-body\">
                    <div class=\"timeline\">
                      <div class=\"timeline-item\">
                        <div class=\"timeline-date\">
                          ";
        // line 1162
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1162, $this->source); })()), "CreatedAt", [], "any", false, false, false, 1162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1162, $this->source); })()), "CreatedAt", [], "any", false, false, false, 1162), "d F Y"), "html", null, true)) : ("Date inconnue"));
        yield "
                        </div>
                        <div class=\"timeline-content\">
                          <h6 class=\"mb-2 text-dark\">Création du groupe</h6>
                          <p class=\"mb-0 text-dark\">Le groupe \"";
        // line 1166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1166, $this->source); })()), "nomProjet", [], "any", false, false, false, 1166), "html", null, true);
        yield "\" a été créé avec le statut \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1166, $this->source); })()), "statut", [], "any", false, false, false, 1166), "html", null, true);
        yield "\".</p>
                        </div>
                      </div>
                      
                      <div class=\"timeline-item\">
                        <div class=\"timeline-date\">
                          Aujourd'hui
                        </div>
                        <div class=\"timeline-content\">
                          <h6 class=\"mb-2 text-dark\">Consultation</h6>
                          <p class=\"mb-0 text-dark\">Vous consultez actuellement les détails de ce groupe projet.</p>
                        </div>
                      </div>
                      
                      <div class=\"timeline-item\">
                        <div class=\"timeline-date\">
                          Prochainement
                        </div>
                        <div class=\"timeline-content\">
                          <h6 class=\"mb-2 text-dark\">Actions disponibles</h6>
                          <p class=\"mb-0 text-dark\">
                            Vous pouvez modifier les informations du groupe, ajouter/supprimer des membres, ou modifier le statut.
                          </p>
                        </div>
                      </div>
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
        // line 1201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Groupe #";
        // line 1204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1204, $this->source); })()), "id", [], "any", false, false, false, 1204), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1204, $this->source); })()), "nomProjet", [], "any", false, false, false, 1204), "html", null, true);
        yield "
                  ";
        // line 1205
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1205, $this->source); })()), "user", [], "any", false, false, false, 1205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1206
            yield "                    | Consulté par: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1206, $this->source); })()), "user", [], "any", false, false, false, 1206), "prenom", [], "any", false, false, false, 1206), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1206, $this->source); })()), "user", [], "any", false, false, false, 1206), "nom", [], "any", false, false, false, 1206), "html", null, true);
            yield "
                  ";
        }
        // line 1208
        yield "                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 1217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1219
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
        
        // Confirmation for delete button
        const deleteForm = document.querySelector('form[onsubmit*=\"confirm\"]');
        if (deleteForm) {
          const deleteButton = deleteForm.querySelector('button[type=\"submit\"]');
          if (deleteButton) {
            deleteButton.addEventListener('click', function(e) {
              if (!confirm('Êtes-vous sûr de vouloir supprimer définitivement ce groupe ? Cette action supprimera également toutes les données associées.')) {
                e.preventDefault();
                return false;
              }
            });
          }
        }
        
        // Search functionality for navbar
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
          searchInput.addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const memberCards = document.querySelectorAll('.member-card');
            
            memberCards.forEach(card => {
              const text = card.textContent.toLowerCase();
              card.style.display = text.includes(filter) ? '' : 'none';
            });
          });
        }
        
        // Copy group ID to clipboard
        const copyIdBtn = document.createElement('button');
        copyIdBtn.className = 'btn btn-sm btn-outline-secondary ms-2';
        copyIdBtn.innerHTML = '<i class=\"mdi mdi-content-copy\"></i>';
        copyIdBtn.title = 'Copier l\\'ID du groupe';
        
        const groupIdElement = document.querySelector('.stat-item .stat-value');
        if (groupIdElement) {
          groupIdElement.parentNode.appendChild(copyIdBtn);
          
          copyIdBtn.addEventListener('click', function() {
            const groupId = groupIdElement.textContent.replace('#', '');
            navigator.clipboard.writeText(groupId).then(() => {
              // Show success message
              const originalHtml = this.innerHTML;
              this.innerHTML = '<i class=\"mdi mdi-check\"></i>';
              this.classList.remove('btn-outline-secondary');
              this.classList.add('btn-success');
              
              setTimeout(() => {
                this.innerHTML = originalHtml;
                this.classList.remove('btn-success');
                this.classList.add('btn-outline-secondary');
              }, 2000);
            });
          });
        }
        
        // Print group information
        const printBtn = document.createElement('button');
        printBtn.className = 'btn btn-sm btn-outline-primary ms-2';
        printBtn.innerHTML = '<i class=\"mdi mdi-printer\"></i>';
        printBtn.title = 'Imprimer les informations';
        
        const actionButtons = document.querySelector('.action-buttons');
        if (actionButtons) {
          actionButtons.appendChild(printBtn);
          
          printBtn.addEventListener('click', function() {
            window.print();
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
        return "groupe_projet/show.html.twig";
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
        return array (  1834 => 1219,  1830 => 1218,  1826 => 1217,  1815 => 1208,  1807 => 1206,  1805 => 1205,  1799 => 1204,  1793 => 1201,  1753 => 1166,  1746 => 1162,  1726 => 1144,  1717 => 1138,  1714 => 1137,  1712 => 1136,  1708 => 1134,  1699 => 1128,  1693 => 1124,  1687 => 1120,  1673 => 1112,  1666 => 1108,  1659 => 1104,  1655 => 1102,  1649 => 1100,  1643 => 1098,  1641 => 1097,  1636 => 1096,  1634 => 1095,  1629 => 1094,  1627 => 1093,  1622 => 1091,  1617 => 1089,  1613 => 1088,  1608 => 1086,  1603 => 1084,  1598 => 1082,  1593 => 1080,  1590 => 1079,  1586 => 1078,  1569 => 1063,  1567 => 1062,  1557 => 1055,  1541 => 1041,  1531 => 1035,  1529 => 1034,  1518 => 1027,  1516 => 1026,  1504 => 1016,  1502 => 1015,  1498 => 1013,  1489 => 1007,  1483 => 1003,  1479 => 1001,  1470 => 997,  1464 => 994,  1460 => 992,  1458 => 991,  1453 => 989,  1445 => 986,  1442 => 985,  1435 => 982,  1432 => 981,  1426 => 978,  1421 => 977,  1419 => 976,  1415 => 974,  1411 => 973,  1402 => 969,  1397 => 967,  1393 => 965,  1391 => 964,  1371 => 947,  1360 => 938,  1354 => 936,  1348 => 934,  1346 => 933,  1341 => 932,  1339 => 931,  1334 => 930,  1332 => 929,  1319 => 919,  1308 => 910,  1301 => 905,  1295 => 902,  1291 => 900,  1289 => 899,  1284 => 897,  1280 => 895,  1277 => 894,  1275 => 893,  1271 => 892,  1259 => 883,  1248 => 875,  1218 => 848,  1206 => 839,  1195 => 831,  1184 => 823,  1168 => 810,  1162 => 807,  1155 => 803,  1148 => 799,  1140 => 793,  1134 => 791,  1128 => 789,  1126 => 788,  1121 => 787,  1119 => 786,  1114 => 785,  1112 => 784,  1106 => 780,  1100 => 777,  1096 => 775,  1094 => 774,  1090 => 773,  1084 => 770,  1078 => 767,  1059 => 751,  1053 => 748,  1037 => 734,  1031 => 733,  1021 => 729,  1017 => 728,  1012 => 727,  1007 => 726,  1002 => 725,  979 => 705,  964 => 693,  950 => 683,  948 => 682,  944 => 680,  939 => 677,  935 => 675,  931 => 673,  927 => 671,  925 => 670,  920 => 668,  913 => 667,  911 => 666,  904 => 661,  897 => 658,  891 => 654,  887 => 652,  883 => 650,  881 => 649,  873 => 646,  869 => 644,  862 => 641,  859 => 640,  853 => 637,  848 => 636,  846 => 635,  843 => 634,  841 => 633,  829 => 624,  818 => 616,  793 => 594,  775 => 579,  762 => 569,  739 => 549,  726 => 539,  713 => 529,  700 => 519,  687 => 509,  674 => 499,  661 => 489,  639 => 469,  634 => 466,  630 => 464,  626 => 462,  622 => 460,  620 => 459,  615 => 457,  608 => 456,  606 => 455,  601 => 452,  595 => 450,  592 => 449,  585 => 446,  582 => 445,  576 => 442,  571 => 441,  568 => 440,  566 => 439,  555 => 431,  551 => 430,  546 => 428,  542 => 427,  131 => 19,  127 => 18,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails Groupe Projet - {{ groupe_projet.nomProjet }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails Groupe Projet</title>
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
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 24px;
        flex-shrink: 0;
        margin: 0 auto;
      }
      
      .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 18px;
        flex-shrink: 0;
      }
      
      .user-avatar-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 3px 10px rgba(0,0,0,0.15);
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
        padding: 8px 16px;
        font-size: 0.9rem;
      }
      
      .badge-inactive {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 0.9rem;
      }
      
      .badge-completed {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 0.9rem;
      }
      
      .badge-paused {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 0.9rem;
      }
      
      .action-buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
      }
      
      .action-buttons .btn {
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
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
      
      /* Styles spécifiques pour la page show */
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
      
      .info-item {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
      }
      
      .info-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
      }
      
      .info-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1rem;
      }
      
      .info-value {
        color: #555;
        font-size: 1.1rem;
        padding-left: 35px;
      }
      
      .description-box {
        background: #1b558f;
        border-radius: 10px;
        padding: 20px;
        border-left: 4px solid #667eea;
      }
      
      .member-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 15px;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
      }
      
      .member-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-color: #667eea;
      }
      
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
                  <a class=\"dropdown-item preview-item\" href=\"{{ path('app_groupe_projet_show', {'id': groupe_projet.id}) }}\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-info rounded-circle\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Groupe projet</p>
                      <p class=\"text-muted ellipsis mb-0\"> Vous consultez: {{ groupe_projet.nomProjet }}</p>
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
                    Détails du Groupe Projet
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_groupe_projet_index') }}\">Groupes</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>{{ groupe_projet.nomProjet }}
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            
            <!-- Group Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                      <div class=\"d-flex align-items-center\">
                        <div class=\"group-avatar me-4\">
                          GP{{ groupe_projet.id }}
                        </div>
                        <div>
                          <h2 class=\"mb-1\">{{ groupe_projet.nomProjet }}</h2>
                          <p class=\"mb-0 opacity-75\">
                            <i class=\"mdi mdi-book-open me-1\"></i>
                            {{ groupe_projet.matiere }}
                            {% if groupe_projet.idUser|length > 0 %}
                              <span class=\"ms-3\">
                                <i class=\"mdi mdi-account-multiple me-1\"></i>
                                {{ groupe_projet.idUser|length }} membre(s)
                              </span>
                            {% endif %}
                          </p>
                        </div>
                      </div>
                      <div>
                        {% if groupe_projet.statut == 'Actif' %}
                          <span class=\"badge-active\">{{ groupe_projet.statut }}</span>
                        {% elseif groupe_projet.statut == 'Terminé' %}
                          <span class=\"badge-completed\">{{ groupe_projet.statut }}</span>
                        {% elseif groupe_projet.statut == 'En pause' %}
                          <span class=\"badge-paused\">{{ groupe_projet.statut }}</span>
                        {% else %}
                          <span class=\"badge-inactive\">{{ groupe_projet.statut }}</span>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"info-card-body\">
                    <div class=\"action-buttons mb-4\">
                      <a href=\"{{ path('app_groupe_projet_index') }}\" class=\"btn btn-light\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Retour à la liste
                      </a>
                      <a href=\"{{ path('app_groupe_projet_edit', {'id': groupe_projet.id}) }}\" class=\"btn btn-warning\">
                        <i class=\"mdi mdi-pencil me-1\"></i>
                        Modifier
                      </a>
                      <form method=\"post\" action=\"{{ path('app_groupe_projet_delete', {'id': groupe_projet.id}) }}\" 
                            onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce groupe ?');\"
                            class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ groupe_projet.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                          <i class=\"mdi mdi-delete me-1\"></i>
                          Supprimer
                        </button>
                      </form>
                    </div>
                    
                    <div class=\"stats-grid\">
                      <div class=\"stat-item\">
                        <div class=\"stat-icon-small card-1\">
                          <i class=\"mdi mdi-identifier\"></i>
                        </div>
                        <div class=\"stat-value text-dark\">#{{ groupe_projet.id }}</div>
                        <div class=\"stat-title\">ID du Groupe</div>
                      </div>
                      
                      <div class=\"stat-item\">
                        <div class=\"stat-icon-small card-2\">
                          <i class=\"mdi mdi-account-multiple\"></i>
                        </div>
                        <div class=\"stat-value text-dark\">{{ groupe_projet.nbrMembre }}</div>
                        <div class=\"stat-title\">Membres attendus</div>
                      </div>
                      
                      <div class=\"stat-item\">
                        <div class=\"stat-icon-small card-3\">
                          <i class=\"mdi mdi-account-check\"></i>
                        </div>
                        <div class=\"stat-value text-dark\">{{ groupe_projet.idUser|length }}</div>
                        <div class=\"stat-title\">Membres assignés</div>
                      </div>
                      
                      <div class=\"stat-item\">
                        <div class=\"stat-icon-small card-4\">
                          <i class=\"mdi mdi-calendar\"></i>
                        </div>
                        <div class=\"stat-value text-dark\">
                          {{ groupe_projet.CreatedAt ? groupe_projet.CreatedAt|date('d/m/Y') : 'N/A' }}
                        </div>
                        <div class=\"stat-title\">Date de création</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Details and Members -->
            <div class=\"row\">
              <!-- Left Column: Details -->
              <div class=\"col-lg-8\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <h4 class=\"mb-0\">
                      <i class=\"mdi mdi-information-outline me-2\"></i>
                      Informations détaillées
                    </h4>
                  </div>
                  <div class=\"info-card-body\">
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-rename-box\"></i>
                        Nom du projet
                      </div>
                      <div class=\"info-value\">{{ groupe_projet.nomProjet }}</div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-book-open\"></i>
                        Matière
                      </div>
                      <div class=\"info-value\">{{ groupe_projet.matiere }}</div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                        Nombre de membres
                      </div>
                      <div class=\"info-value\">
                        {{ groupe_projet.nbrMembre }} membre(s)
                        {% set difference = groupe_projet.nbrMembre - groupe_projet.idUser|length %}
                        {% if difference > 0 %}
                          <span class=\"text-warning ms-2\">
                            <i class=\"mdi mdi-alert\"></i>
                            {{ difference }} membre(s) manquant(s)
                          </span>
                        {% elseif difference < 0 %}
                          <span class=\"text-info ms-2\">
                            <i class=\"mdi mdi-information\"></i>
                            {{ -difference }} membre(s) en trop
                          </span>
                        {% else %}
                          <span class=\"text-success ms-2\">
                            <i class=\"mdi mdi-check-circle\"></i>
                            Complet
                          </span>
                        {% endif %}
                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-calendar-check\"></i>
                        Date de création
                      </div>
                      <div class=\"info-value\">
                        {{ groupe_projet.CreatedAt ? groupe_projet.CreatedAt|date('d F Y à H:i') : 'Non spécifiée' }}
                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-progress-check\"></i>
                        Statut
                      </div>
                      <div class=\"info-value\">
                        {% if groupe_projet.statut == 'Actif' %}
                          <span class=\"badge-active\">{{ groupe_projet.statut }}</span>
                        {% elseif groupe_projet.statut == 'Terminé' %}
                          <span class=\"badge-completed\">{{ groupe_projet.statut }}</span>
                        {% elseif groupe_projet.statut == 'En pause' %}
                          <span class=\"badge-paused\">{{ groupe_projet.statut }}</span>
                        {% else %}
                          <span class=\"badge-inactive\">{{ groupe_projet.statut }}</span>
                        {% endif %}
                      </div>
                    </div>
                    
                    <div class=\"info-item\">
                      <div class=\"info-label\">
                        <i class=\"mdi mdi-text-box-outline\"></i>
                        Description
                      </div>
                      <div class=\"description-box mt-2\">
                        {{ groupe_projet.description|nl2br }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Right Column: Members -->
              <div class=\"col-lg-4\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <h4 class=\"mb-0\">
                      <i class=\"mdi mdi-account-group me-2\"></i>
                      Membres du groupe
                    </h4>
                  </div>
                  <div class=\"info-card-body\">
                    {% if groupe_projet.idUser|length > 0 %}
                      <div class=\"mb-3\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                          <h5 class=\"mb-0\">{{ groupe_projet.idUser|length }} membre(s)</h5>
                          <span class=\"badge bg-primary\">
                            {{ groupe_projet.idUser|length }}/{{ groupe_projet.nbrMembre }}
                          </span>
                        </div>
                        
                        {% for user in groupe_projet.idUser %}
                          <div class=\"member-card\">
                            <div class=\"d-flex align-items-center\">
                              {% if user.profilePic %}
                                <img src=\"{{ asset('uploads/profile_pics/' ~ user.profilePic) }}\" 
                                     alt=\"{{ user.prenom }}\" 
                                     class=\"user-avatar-img me-3\">
                              {% else %}
                                <div class=\"user-avatar me-3\">
                                  {{ user.prenom|first|upper }}{{ user.nom|first|upper }}
                                </div>
                              {% endif %}
                              <div class=\"flex-grow-1\">
                                <h6 class=\"mb-1\">{{ user.prenom }} {{ user.nom }}</h6>
                                <p class=\"text-muted mb-1 small\">
                                  <i class=\"mdi mdi-email me-1\"></i>
                                  {{ user.email }}
                                </p>
                                {% if user.classe %}
                                  <span class=\"badge bg-light text-dark small\">
                                    <i class=\"mdi mdi-school me-1\"></i>
                                    {{ user.classe.nom }}
                                  </span>
                                {% endif %}
                              </div>
                            </div>
                          </div>
                        {% endfor %}
                      </div>
                    {% else %}
                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-account-group-off\" style=\"font-size: 60px; color: #dee2e6;\"></i>
                        <h5 class=\"text-muted\">Aucun membre</h5>
                        <p class=\"text-muted\">Aucun utilisateur n'est actuellement assigné à ce groupe.</p>
                        <a href=\"{{ path('app_groupe_projet_edit', {'id': groupe_projet.id}) }}\" class=\"btn btn-primary\">
                          <i class=\"mdi mdi-account-plus\"></i>
                          Ajouter des membres
                        </a>
                      </div>
                    {% endif %}
                    
                    <!-- Member Statistics -->
                    {% if groupe_projet.idUser|length > 0 %}
                      <div class=\"mt-4\">
                        <h6 class=\"mb-3\">
                          <i class=\"mdi mdi-chart-bar me-2\"></i>
                          Statistiques des membres
                        </h6>
                        <div class=\"row text-center\">
                          <div class=\"col-6\">
                            <div class=\"stat-icon card-2\" style=\"width: 40px; height: 40px; font-size: 16px; margin: 0 auto 10px;\">
                              <i class=\"mdi mdi-gender-male\"></i>
                            </div>
                            {% set maleCount = groupe_projet.idUser|filter(u => u.sexe == 'Homme')|length %}
                            <h5 class=\"mb-0\">{{ maleCount }}</h5>
                            <small class=\"text-muted\">Hommes</small>
                          </div>
                          <div class=\"col-6\">
                            <div class=\"stat-icon card-5\" style=\"width: 40px; height: 40px; font-size: 16px; margin: 0 auto 10px;\">
                              <i class=\"mdi mdi-gender-female\"></i>
                            </div>
                            {% set femaleCount = groupe_projet.idUser|filter(u => u.sexe == 'Femme')|length %}
                            <h5 class=\"mb-0\">{{ femaleCount }}</h5>
                            <small class=\"text-muted\">Femmes</small>
                          </div>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </div>
            </div>
            <!-- Propositions de réunion Section -->
<div class=\"row mt-4\">
  <div class=\"col-12\">
    <div class=\"card info-card\">
      <div class=\"info-card-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <h4 class=\"mb-0\">
            <i class=\"mdi mdi-calendar-multiple me-2\"></i>
            Propositions de réunion
          </h4>
          <a href=\"{{ path('app_proposition_reunion_new', {'groupeId': groupe_projet.id}) }}\" class=\"btn btn-primary\">
            <i class=\"mdi mdi-plus-circle me-1\"></i>
            Nouvelle proposition
          </a>
        </div>
      </div>
      <div class=\"info-card-body\">
        {% if groupe_projet.idReunion|length > 0 %}
          <div class=\"table-responsive\">
            <table class=\"table table-hover\">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Titre</th>
                  <th>Date</th>
                  <th>Heure</th>
                  <th>Lieu</th>
                  <th>Statut</th>
                  <th>Votes acceptés</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for proposition in groupe_projet.idReunion %}
                  <tr>
                    <td>#{{ proposition.propositionId }}</td>
                    <td>
                      <strong>{{ proposition.titre }}</strong>
                      <br>
                      <small class=\"text-muted\">{{ proposition.description|slice(0, 50) }}...</small>
                    </td>
                    <td>{{ proposition.dateReunion ? proposition.dateReunion|date('d/m/Y') : '' }}</td>
                    <td>
                      {{ proposition.heureDebut ? proposition.heureDebut|date('H:i') : '' }} -
                      {{ proposition.heureFin ? proposition.heureFin|date('H:i') : '' }}
                    </td>
                    <td>{{ proposition.lieu }}</td>
                    <td>
                      {% if proposition.status == 'Acceptée' %}
                        <span class=\"badge badge-success\">{{ proposition.status }}</span>
                      {% elseif proposition.status == 'Refusée' %}
                        <span class=\"badge badge-danger\">{{ proposition.status }}</span>
                      {% elseif proposition.status == 'En attente' %}
                        <span class=\"badge badge-warning\">{{ proposition.status }}</span>
                      {% else %}
                        <span class=\"badge badge-secondary\">{{ proposition.status }}</span>
                      {% endif %}
                    </td>
                    <td>
                      <span class=\"badge bg-info\">{{ proposition.nbrVoteAccept ?? 0 }}</span>
                    </td>
                    <td>
                      <div class=\"action-buttons\">
                        <a href=\"{{ path('app_proposition_reunion_show', {'groupeId': groupe_projet.id, 'id': proposition.id}) }}\" 
                           class=\"btn btn-info btn-sm\" title=\"Voir\">
                          <i class=\"mdi mdi-eye\"></i>
                        </a>
                        <a href=\"{{ path('app_proposition_reunion_edit', {'groupeId': groupe_projet.id, 'id': proposition.id}) }}\" 
                           class=\"btn btn-warning btn-sm\" title=\"Modifier\">
                          <i class=\"mdi mdi-pencil\"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        {% else %}
          <div class=\"empty-state text-center py-5\">
            <i class=\"mdi mdi-calendar-blank\" style=\"font-size: 60px; color: #dee2e6;\"></i>
            <h5 class=\"text-muted mt-3\">Aucune proposition de réunion</h5>
            <p class=\"text-muted\">Commencez par créer une proposition de réunion pour ce groupe.</p>
            <a href=\"{{ path('app_proposition_reunion_new', {'groupeId': groupe_projet.id}) }}\" class=\"btn btn-primary\">
              <i class=\"mdi mdi-plus-circle me-1\"></i>
              Créer la première proposition
            </a>
          </div>
        {% endif %}
        
        <!-- Lien vers la page complète des propositions -->
        {% if groupe_projet.idReunion|length > 0 %}
          <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_proposition_reunion_index', {'groupeId': groupe_projet.id}) }}\" class=\"btn btn-outline-primary\">
              <i class=\"mdi mdi-format-list-bulleted me-1\"></i>
              Voir toutes les propositions
            </a>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
</div>
            <!-- Timeline Section -->
            <div class=\"row mt-4\">
              <div class=\"col-12\">
                <div class=\"card info-card\">
                  <div class=\"info-card-header\">
                    <h4 class=\"mb-0\">
                      <i class=\"mdi mdi-timeline me-2\"></i>
                      Historique et activité
                    </h4>
                  </div>
                  <div class=\"info-card-body\">
                    <div class=\"timeline\">
                      <div class=\"timeline-item\">
                        <div class=\"timeline-date\">
                          {{ groupe_projet.CreatedAt ? groupe_projet.CreatedAt|date('d F Y') : 'Date inconnue' }}
                        </div>
                        <div class=\"timeline-content\">
                          <h6 class=\"mb-2 text-dark\">Création du groupe</h6>
                          <p class=\"mb-0 text-dark\">Le groupe \"{{ groupe_projet.nomProjet }}\" a été créé avec le statut \"{{ groupe_projet.statut }}\".</p>
                        </div>
                      </div>
                      
                      <div class=\"timeline-item\">
                        <div class=\"timeline-date\">
                          Aujourd'hui
                        </div>
                        <div class=\"timeline-content\">
                          <h6 class=\"mb-2 text-dark\">Consultation</h6>
                          <p class=\"mb-0 text-dark\">Vous consultez actuellement les détails de ce groupe projet.</p>
                        </div>
                      </div>
                      
                      <div class=\"timeline-item\">
                        <div class=\"timeline-date\">
                          Prochainement
                        </div>
                        <div class=\"timeline-content\">
                          <h6 class=\"mb-2 text-dark\">Actions disponibles</h6>
                          <p class=\"mb-0 text-dark\">
                            Vous pouvez modifier les informations du groupe, ajouter/supprimer des membres, ou modifier le statut.
                          </p>
                        </div>
                      </div>
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
                  Groupe #{{ groupe_projet.id }} - {{ groupe_projet.nomProjet }}
                  {% if app.user %}
                    | Consulté par: {{ app.user.prenom }} {{ app.user.nom }}
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
        
        // Confirmation for delete button
        const deleteForm = document.querySelector('form[onsubmit*=\"confirm\"]');
        if (deleteForm) {
          const deleteButton = deleteForm.querySelector('button[type=\"submit\"]');
          if (deleteButton) {
            deleteButton.addEventListener('click', function(e) {
              if (!confirm('Êtes-vous sûr de vouloir supprimer définitivement ce groupe ? Cette action supprimera également toutes les données associées.')) {
                e.preventDefault();
                return false;
              }
            });
          }
        }
        
        // Search functionality for navbar
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
          searchInput.addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const memberCards = document.querySelectorAll('.member-card');
            
            memberCards.forEach(card => {
              const text = card.textContent.toLowerCase();
              card.style.display = text.includes(filter) ? '' : 'none';
            });
          });
        }
        
        // Copy group ID to clipboard
        const copyIdBtn = document.createElement('button');
        copyIdBtn.className = 'btn btn-sm btn-outline-secondary ms-2';
        copyIdBtn.innerHTML = '<i class=\"mdi mdi-content-copy\"></i>';
        copyIdBtn.title = 'Copier l\\'ID du groupe';
        
        const groupIdElement = document.querySelector('.stat-item .stat-value');
        if (groupIdElement) {
          groupIdElement.parentNode.appendChild(copyIdBtn);
          
          copyIdBtn.addEventListener('click', function() {
            const groupId = groupIdElement.textContent.replace('#', '');
            navigator.clipboard.writeText(groupId).then(() => {
              // Show success message
              const originalHtml = this.innerHTML;
              this.innerHTML = '<i class=\"mdi mdi-check\"></i>';
              this.classList.remove('btn-outline-secondary');
              this.classList.add('btn-success');
              
              setTimeout(() => {
                this.innerHTML = originalHtml;
                this.classList.remove('btn-success');
                this.classList.add('btn-outline-secondary');
              }, 2000);
            });
          });
        }
        
        // Print group information
        const printBtn = document.createElement('button');
        printBtn.className = 'btn btn-sm btn-outline-primary ms-2';
        printBtn.innerHTML = '<i class=\"mdi mdi-printer\"></i>';
        printBtn.title = 'Imprimer les informations';
        
        const actionButtons = document.querySelector('.action-buttons');
        if (actionButtons) {
          actionButtons.appendChild(printBtn);
          
          printBtn.addEventListener('click', function() {
            window.print();
          });
        }
      });
    </script>
  </body>
</html>
{% endblock %}", "groupe_projet/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\groupe_projet\\show.html.twig");
    }
}
