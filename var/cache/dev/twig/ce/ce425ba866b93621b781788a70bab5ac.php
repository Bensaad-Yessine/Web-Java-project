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

/* proposition_reunion/new.html.twig */
class __TwigTemplate_a472917e0e0db190eb997432b03a4f72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/new.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails Groupe Projet</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" />
    <style>
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
      
      .btn-create {
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          border: none;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
      }
      
      .btn-create:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
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
      
      .form-actions {
          display: flex;
          justify-content: flex-end;
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
        // line 578
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 581
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
            <img src=\"";
        // line 582
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
        // line 590
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 590, $this->source); })()), "user", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 591
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "profilePic", [], "any", false, false, false, 591)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 592
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 592, $this->source); })()), "user", [], "any", false, false, false, 592), "profilePic", [], "any", false, false, false, 592))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 593
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 593, $this->source); })()), "user", [], "any", false, false, false, 593), "prenom", [], "any", false, false, false, 593), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 596
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 597
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 597, $this->source); })()), "user", [], "any", false, false, false, 597), "prenom", [], "any", false, false, false, 597))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 597, $this->source); })()), "user", [], "any", false, false, false, 597), "nom", [], "any", false, false, false, 597))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 600
            yield "                  ";
        } else {
            // line 601
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 603
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 606
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 606, $this->source); })()), "user", [], "any", false, false, false, 606)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 607
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 607, $this->source); })()), "user", [], "any", false, false, false, 607), "prenom", [], "any", false, false, false, 607), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 607, $this->source); })()), "user", [], "any", false, false, false, 607), "nom", [], "any", false, false, false, 607), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 608, $this->source); })()), "user", [], "any", false, false, false, 608), "email", [], "any", false, false, false, 608), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 610
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 610, $this->source); })()), "user", [], "any", false, false, false, 610), "roles", [], "any", false, false, false, 610))) {
                // line 611
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 613
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 615
            yield "                    </div>
                  ";
        } else {
            // line 617
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 620
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
        // line 640
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
        // line 650
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
        // line 660
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
        // line 670
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
        // line 680
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
        // line 690
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
        // line 700
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
        // line 720
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
        // line 730
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
        // line 745
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
        // line 767
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 767, $this->source); })()), "id", [], "any", false, false, false, 767)]), "html", null, true);
        yield "\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-info rounded-circle\">
                        <i class=\"mdi mdi-account-multiple\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Groupe projet</p>
                      <p class=\"text-muted ellipsis mb-0\"> Vous consultez: ";
        // line 775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 775, $this->source); })()), "nomProjet", [], "any", false, false, false, 775), "html", null, true);
        yield "</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 784
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 784, $this->source); })()), "user", [], "any", false, false, false, 784)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 785
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 786
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 786, $this->source); })()), "user", [], "any", false, false, false, 786), "profilePic", [], "any", false, false, false, 786)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 787
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 787, $this->source); })()), "user", [], "any", false, false, false, 787), "profilePic", [], "any", false, false, false, 787))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 788
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 788, $this->source); })()), "user", [], "any", false, false, false, 788), "prenom", [], "any", false, false, false, 788), "html", null, true);
                yield "\" 
                               class=\"navbar-avatar-img\">
                        ";
            } else {
                // line 791
                yield "                          <div class=\"navbar-avatar\">
                            ";
                // line 792
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 792, $this->source); })()), "user", [], "any", false, false, false, 792), "prenom", [], "any", false, false, false, 792))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 792, $this->source); })()), "user", [], "any", false, false, false, 792), "nom", [], "any", false, false, false, 792))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 795
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 797
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 797, $this->source); })()), "user", [], "any", false, false, false, 797), "prenom", [], "any", false, false, false, 797), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 797, $this->source); })()), "user", [], "any", false, false, false, 797), "nom", [], "any", false, false, false, 797), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 800
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 800, $this->source); })()), "user", [], "any", false, false, false, 800), "roles", [], "any", false, false, false, 800))) {
                // line 801
                yield "                              <span class=\"badge badge-admin badge-sm\">Admin</span>
                            ";
            } else {
                // line 803
                yield "                              <span class=\"badge badge-etudiant badge-sm\">Utilisateur</span>
                            ";
            }
            // line 805
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 809
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 812
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 817
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 817, $this->source); })()), "user", [], "any", false, false, false, 817)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 818
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 818, $this->source); })()), "user", [], "any", false, false, false, 818), "prenom", [], "any", false, false, false, 818), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 818, $this->source); })()), "user", [], "any", false, false, false, 818), "nom", [], "any", false, false, false, 818), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 819
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 819, $this->source); })()), "user", [], "any", false, false, false, 819), "email", [], "any", false, false, false, 819), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 821
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 821, $this->source); })()), "user", [], "any", false, false, false, 821), "roles", [], "any", false, false, false, 821))) {
                // line 822
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 824
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 826
            yield "                      </small>
                    ";
        } else {
            // line 828
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 831
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 833
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 833, $this->source); })()), "user", [], "any", false, false, false, 833)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 834
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 834, $this->source); })()), "user", [], "any", false, false, false, 834), "id", [], "any", false, false, false, 834)]), "html", null, true);
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
            // line 844
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 844, $this->source); })()), "user", [], "any", false, false, false, 844), "id", [], "any", false, false, false, 844)]), "html", null, true);
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
        // line 856
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
        // line 876
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 876, $this->source); })()), "flashes", [], "any", false, false, false, 876));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 877
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 878
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 879
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 880
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 884
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 885
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-calendar-plus\"></i>
                    </span> 
                    Nouvelle Proposition de Réunion
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 899
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">Groupes</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 902
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 902, $this->source); })()), "id", [], "any", false, false, false, 902)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 902, $this->source); })()), "nomProjet", [], "any", false, false, false, 902), "html", null, true);
        yield "</a>
                      </li>
                      <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 905
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_index", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 905, $this->source); })()), "id", [], "any", false, false, false, 905)]), "html", null, true);
        yield "\">Propositions</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Nouvelle
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
                  <div class=\"form-header\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"stat-icon card-1 me-3\">
                        <i class=\"mdi mdi-calendar-plus\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">Créer une nouvelle proposition</h4>
                        <p class=\"mb-0 opacity-75\">Pour le groupe: ";
        // line 927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 927, $this->source); })()), "nomProjet", [], "any", false, false, false, 927), "html", null, true);
        yield "</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"form-body\">
                    ";
        // line 933
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 933, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample"]]);
        yield "
                    
                    <!-- Group Info -->
                    <div class=\"info-card\">
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <h6 class=\"mb-2\"><i class=\"mdi mdi-account-group me-2\"></i>Groupe</h6>
                          <p class=\"mb-0\"><strong>";
        // line 940
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 940, $this->source); })()), "nomProjet", [], "any", false, false, false, 940), "html", null, true);
        yield "</strong></p>
                          <small class=\"text-muted\">ID: ";
        // line 941
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 941, $this->source); })()), "id", [], "any", false, false, false, 941), "html", null, true);
        yield "</small>
                        </div>
                        <div class=\"col-md-6\">
                          <h6 class=\"mb-2\"><i class=\"mdi mdi-book-open me-2\"></i>Matière</h6>
                          <p class=\"mb-0\">";
        // line 945
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 945, $this->source); })()), "matiere", [], "any", false, false, false, 945), "html", null, true);
        yield "</p>
                          <small class=\"text-muted\">";
        // line 946
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 946, $this->source); })()), "idUser", [], "any", false, false, false, 946)), "html", null, true);
        yield " membre(s)</small>
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
        // line 963
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 963, $this->source); })()), "titre", [], "any", false, false, false, 963), 'label');
        yield "
                            </label>
                            ";
        // line 965
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 965, $this->source); })()), "titre", [], "any", false, false, false, 965), 'widget', ["attr" => ["class" => "form-control form-control-custom", "placeholder" => "Ex: Réunion de lancement du projet"]]);
        // line 968
        yield "
                            <div class=\"form-text-help\">
                              Donnez un titre clair à votre proposition de réunion
                            </div>
                            ";
        // line 972
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 972, $this->source); })()), "titre", [], "any", false, false, false, 972), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-map-marker\"></i>
                              ";
        // line 980
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 980, $this->source); })()), "lieu", [], "any", false, false, false, 980), 'label');
        yield "
                            </label>
                            ";
        // line 982
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 982, $this->source); })()), "lieu", [], "any", false, false, false, 982), 'widget', ["attr" => ["class" => "form-control form-control-custom", "placeholder" => "Ex: Salle B2.3, Amphi A..."]]);
        // line 985
        yield "
                            <div class=\"form-text-help\">
                              Spécifiez le lieu de la réunion
                            </div>
                            ";
        // line 989
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 989, $this->source); })()), "lieu", [], "any", false, false, false, 989), 'errors');
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
        // line 999
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 999, $this->source); })()), "dateReunion", [], "any", false, false, false, 999), 'label');
        yield "
                            </label>
                            ";
        // line 1001
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1001, $this->source); })()), "dateReunion", [], "any", false, false, false, 1001), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 1003
        yield "
                            ";
        // line 1004
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1004, $this->source); })()), "dateReunion", [], "any", false, false, false, 1004), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-clock-start\"></i>
                              ";
        // line 1012
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1012, $this->source); })()), "heureDebut", [], "any", false, false, false, 1012), 'label');
        yield "
                            </label>
                            ";
        // line 1014
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1014, $this->source); })()), "heureDebut", [], "any", false, false, false, 1014), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 1016
        yield "
                            ";
        // line 1017
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1017, $this->source); })()), "heureDebut", [], "any", false, false, false, 1017), 'errors');
        yield "
                          </div>
                        </div>
                        
                        <div class=\"col-md-4\">
                          <div class=\"form-group-enhanced\">
                            <label class=\"form-label required-field\">
                              <i class=\"mdi mdi-clock-end\"></i>
                              ";
        // line 1025
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1025, $this->source); })()), "heureFin", [], "any", false, false, false, 1025), 'label');
        yield "
                            </label>
                            ";
        // line 1027
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1027, $this->source); })()), "heureFin", [], "any", false, false, false, 1027), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 1029
        yield "
                            ";
        // line 1030
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1030, $this->source); })()), "heureFin", [], "any", false, false, false, 1030), 'errors');
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
        // line 1046
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1046, $this->source); })()), "description", [], "any", false, false, false, 1046), 'label');
        yield "
                        </label>
                        ";
        // line 1048
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1048, $this->source); })()), "description", [], "any", false, false, false, 1048), 'widget', ["attr" => ["class" => "form-control form-control-custom", "rows" => "5", "placeholder" => "Décrivez l'ordre du jour, les sujets à aborder, les objectifs de la réunion..."]]);
        // line 1052
        yield "
                        <div class=\"form-text-help\">
                          Détaillez le contenu et les objectifs de la réunion
                        </div>
                        ";
        // line 1056
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1056, $this->source); })()), "description", [], "any", false, false, false, 1056), 'errors');
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
        // line 1070
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1070, $this->source); })()), "status", [], "any", false, false, false, 1070), 'label');
        yield "
                        </label>
                        ";
        // line 1072
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1072, $this->source); })()), "status", [], "any", false, false, false, 1072), 'widget', ["attr" => ["class" => "form-control form-control-custom"]]);
        // line 1074
        yield "
                        <div class=\"form-text-help\">
                          Sélectionnez le statut initial de la proposition
                        </div>
                        ";
        // line 1078
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1078, $this->source); })()), "status", [], "any", false, false, false, 1078), 'errors');
        yield "
                      </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"form-actions\">
                      <a href=\"";
        // line 1084
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_index", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 1084, $this->source); })()), "id", [], "any", false, false, false, 1084)]), "html", null, true);
        yield "\" class=\"btn btn-cancel\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Retour aux propositions
                      </a>
                      <button type=\"submit\" class=\"btn btn-create\">
                        <i class=\"mdi mdi-check-circle me-1\"></i>
                        Créer la proposition
                      </button>
                    </div>
                    
                    ";
        // line 1094
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1094, $this->source); })()), 'form_end');
        yield "
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
                      <i class=\"mdi mdi-help-circle-outline text-primary me-2\"></i>
                      Conseils pour une bonne proposition
                    </h5>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-2 me-3\">
                            <i class=\"mdi mdi-calendar-check\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Date et heure</h6>
                            <p class=\"text-muted mb-0 small\">Choisissez une date et une heure qui conviennent à tous les membres du groupe.</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-3 me-3\">
                            <i class=\"mdi mdi-text-box\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Description claire</h6>
                            <p class=\"text-muted mb-0 small\">Décrivez précisément l'ordre du jour pour que les membres puissent se préparer.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-4 me-3\">
                            <i class=\"mdi mdi-map-marker-radius\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Lieu accessible</h6>
                            <p class=\"text-muted mb-0 small\">Assurez-vous que le lieu est accessible à tous les participants.</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-5 me-3\">
                            <i class=\"mdi mdi-timer\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Durée appropriée</h6>
                            <p class=\"text-muted mb-0 small\">Prévoyez une durée suffisante pour traiter tous les points sans être trop long.</p>
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
        // line 1167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1169
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
        return "proposition_reunion/new.html.twig";
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
        return array (  1544 => 1169,  1540 => 1168,  1536 => 1167,  1460 => 1094,  1447 => 1084,  1438 => 1078,  1432 => 1074,  1430 => 1072,  1425 => 1070,  1408 => 1056,  1402 => 1052,  1400 => 1048,  1395 => 1046,  1376 => 1030,  1373 => 1029,  1371 => 1027,  1366 => 1025,  1355 => 1017,  1352 => 1016,  1350 => 1014,  1345 => 1012,  1334 => 1004,  1331 => 1003,  1329 => 1001,  1324 => 999,  1311 => 989,  1305 => 985,  1303 => 982,  1298 => 980,  1287 => 972,  1281 => 968,  1279 => 965,  1274 => 963,  1254 => 946,  1250 => 945,  1243 => 941,  1239 => 940,  1229 => 933,  1220 => 927,  1195 => 905,  1187 => 902,  1181 => 899,  1165 => 885,  1159 => 884,  1149 => 880,  1145 => 879,  1140 => 878,  1135 => 877,  1130 => 876,  1107 => 856,  1092 => 844,  1078 => 834,  1076 => 833,  1072 => 831,  1067 => 828,  1063 => 826,  1059 => 824,  1055 => 822,  1053 => 821,  1048 => 819,  1041 => 818,  1039 => 817,  1032 => 812,  1025 => 809,  1019 => 805,  1015 => 803,  1011 => 801,  1009 => 800,  1001 => 797,  997 => 795,  990 => 792,  987 => 791,  981 => 788,  976 => 787,  974 => 786,  971 => 785,  969 => 784,  957 => 775,  946 => 767,  921 => 745,  903 => 730,  890 => 720,  867 => 700,  854 => 690,  841 => 680,  828 => 670,  815 => 660,  802 => 650,  789 => 640,  767 => 620,  762 => 617,  758 => 615,  754 => 613,  750 => 611,  748 => 610,  743 => 608,  736 => 607,  734 => 606,  729 => 603,  723 => 601,  720 => 600,  713 => 597,  710 => 596,  704 => 593,  699 => 592,  696 => 591,  694 => 590,  683 => 582,  679 => 581,  674 => 579,  670 => 578,  106 => 17,  102 => 16,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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
      
      .btn-create {
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          border: none;
          padding: 12px 30px;
          font-weight: 500;
          border-radius: 8px;
          transition: all 0.3s;
      }
      
      .btn-create:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
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
      
      .form-actions {
          display: flex;
          justify-content: flex-end;
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
                      <i class=\"mdi mdi-calendar-plus\"></i>
                    </span> 
                    Nouvelle Proposition de Réunion
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
                        <span></span>Nouvelle
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
                  <div class=\"form-header\">
                    <div class=\"d-flex align-items-center\">
                      <div class=\"stat-icon card-1 me-3\">
                        <i class=\"mdi mdi-calendar-plus\"></i>
                      </div>
                      <div>
                        <h4 class=\"mb-1\">Créer une nouvelle proposition</h4>
                        <p class=\"mb-0 opacity-75\">Pour le groupe: {{ groupe_projet.nomProjet }}</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class=\"form-body\">
                    {{ form_start(form, {'attr': {'class': 'form-sample'}}) }}
                    
                    <!-- Group Info -->
                    <div class=\"info-card\">
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <h6 class=\"mb-2\"><i class=\"mdi mdi-account-group me-2\"></i>Groupe</h6>
                          <p class=\"mb-0\"><strong>{{ groupe_projet.nomProjet }}</strong></p>
                          <small class=\"text-muted\">ID: {{ groupe_projet.id }}</small>
                        </div>
                        <div class=\"col-md-6\">
                          <h6 class=\"mb-2\"><i class=\"mdi mdi-book-open me-2\"></i>Matière</h6>
                          <p class=\"mb-0\">{{ groupe_projet.matiere }}</p>
                          <small class=\"text-muted\">{{ groupe_projet.idUser|length }} membre(s)</small>
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
                          Sélectionnez le statut initial de la proposition
                        </div>
                        {{ form_errors(form.status) }}
                      </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"form-actions\">
                      <a href=\"{{ path('app_proposition_reunion_index', {'groupeId': groupe_projet.id}) }}\" class=\"btn btn-cancel\">
                        <i class=\"mdi mdi-arrow-left me-1\"></i>
                        Retour aux propositions
                      </a>
                      <button type=\"submit\" class=\"btn btn-create\">
                        <i class=\"mdi mdi-check-circle me-1\"></i>
                        Créer la proposition
                      </button>
                    </div>
                    
                    {{ form_end(form) }}
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
                      <i class=\"mdi mdi-help-circle-outline text-primary me-2\"></i>
                      Conseils pour une bonne proposition
                    </h5>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-2 me-3\">
                            <i class=\"mdi mdi-calendar-check\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Date et heure</h6>
                            <p class=\"text-muted mb-0 small\">Choisissez une date et une heure qui conviennent à tous les membres du groupe.</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-3 me-3\">
                            <i class=\"mdi mdi-text-box\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Description claire</h6>
                            <p class=\"text-muted mb-0 small\">Décrivez précisément l'ordre du jour pour que les membres puissent se préparer.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-4 me-3\">
                            <i class=\"mdi mdi-map-marker-radius\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Lieu accessible</h6>
                            <p class=\"text-muted mb-0 small\">Assurez-vous que le lieu est accessible à tous les participants.</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-start mb-3\">
                          <div class=\"help-icon card-5 me-3\">
                            <i class=\"mdi mdi-timer\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-1\">Durée appropriée</h6>
                            <p class=\"text-muted mb-0 small\">Prévoyez une durée suffisante pour traiter tous les points sans être trop long.</p>
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
", "proposition_reunion/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\proposition_reunion\\new.html.twig");
    }
}
