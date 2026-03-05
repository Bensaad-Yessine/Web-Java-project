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

/* preference_alerte/new.html.twig */
class __TwigTemplate_205f3f464df3720516862272741acae8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/new.html.twig"));

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

        yield "Créer une nouvelle Tâche";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Tâches</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" />
    <style>
      :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        --danger-gradient: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
        --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        --card-shadow-hover: 0 8px 30px rgba(0, 0, 0, 0.12);
      }

      /* Enhanced Card Styles */
      .card {
        border: none;
        border-radius: 15px;
        box-shadow: var(--card-shadow);
        transition: all 0.3s ease;
        overflow: hidden;
      }

      .card:hover {
        box-shadow: var(--card-shadow-hover);
      }

      .card-header-custom {
        background: var(--primary-gradient);
        color: white;
        padding: 1.5rem;
        border-radius: 15px 15px 0 0;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .card-header-custom h4 {
        margin: 0;
        font-weight: 600;
        font-size: 1.25rem;
      }

      .card-header-custom .icon {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
      }

      /* Form Section Headers */
      .form-section-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 1rem 1.5rem;
        border-radius: 10px;
        margin: 2rem 0 1.5rem;
        border-left: 4px solid #667eea;
      }

      .form-section-header h5 {
        margin: 0;
        color: #495057;
        font-weight: 600;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }

      .form-section-header .section-icon {
        width: 35px;
        height: 35px;
        background: var(--primary-gradient);
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
      }

      /* Enhanced Form Controls */
      .form-group {
        margin-bottom: 1.75rem;
      }

      .form-label-custom {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.95rem;
      }

      .form-label-custom .required-star {
        color: #f5576c;
        font-weight: bold;
      }

      .form-label-custom .label-icon {
        color: #667eea;
        font-size: 1.1rem;
      }

      .form-control, .form-select {
        border: 2px solid #e9ecef;
        border-radius: 10px;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        font-size: 0.95rem;
      }

      .form-control:focus, .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        outline: none;
      }

      .form-control:hover, .form-select:hover {
        border-color: #b8c1ec;
      }

      .input-group-text {
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 0 10px 10px 0;
        font-weight: 600;
      }

      /* Help Text */
      .form-help-text {
        font-size: 0.85rem;
        color: #6c757d;
        margin-top: 0.5rem;
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
      }

      .form-help-text i {
        margin-top: 2px;
        color: #667eea;
      }

      /* Button Styles */
      .btn-custom-primary {
        background: var(--primary-gradient);
        border: none;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        color: white;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
      }

      .btn-custom-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        color: white;
      }

      .btn-custom-secondary {
        background: white;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        color: #495057;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
      }

      .btn-custom-secondary:hover {
        background: #f8f9fa;
        border-color: #667eea;
        color: #667eea;
        transform: translateY(-2px);
      }

      /* Info Cards */
      .info-card {
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 1.5rem;
        background: white;
        transition: all 0.3s ease;
      }

      .info-card:hover {
        border-color: #667eea;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.1);
      }

      .info-card-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #f8f9fa;
      }

      .info-card-header .icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        color: white;
      }

      .info-card-header h6 {
        margin: 0;
        font-weight: 600;
        color: #495057;
      }

      .info-card-list {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .info-card-list li {
        padding: 0.5rem 0;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        color: #6c757d;
        font-size: 0.9rem;
      }

      .info-card-list li i {
        color: #667eea;
        margin-top: 3px;
        font-size: 1.1rem;
      }

      .info-card-list li strong {
        color: #495057;
      }

      /* Page Header Enhancement */
      .page-header-enhanced {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: var(--card-shadow);
        margin-bottom: 2rem;
      }

      .page-header-enhanced .title-section {
        display: flex;
        align-items: center;
        gap: 1.5rem;
      }

      .page-header-enhanced .title-icon {
        width: 60px;
        height: 60px;
        background: var(--primary-gradient);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
      }

      .page-header-enhanced h3 {
        margin: 0;
        color: #2c3e50;
        font-weight: 700;
      }

      .page-header-enhanced .subtitle {
        color: #6c757d;
        margin-top: 0.5rem;
        font-size: 0.95rem;
      }

      /* Breadcrumb Enhancement */
      .breadcrumb-custom {
        background: transparent;
        padding: 0;
        margin: 1rem 0 0 0;
      }

      .breadcrumb-custom .breadcrumb-item {
        font-size: 0.9rem;
      }

      .breadcrumb-custom .breadcrumb-item a {
        color: #667eea;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .breadcrumb-custom .breadcrumb-item a:hover {
        color: #764ba2;
      }

      .breadcrumb-custom .breadcrumb-item.active {
        color: #6c757d;
      }

      /* Flash Messages */
      .alert-custom {
        border: none;
        border-radius: 12px;
        padding: 1.25rem 1.5rem;
        box-shadow: var(--card-shadow);
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
      }

      .alert-custom .alert-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        flex-shrink: 0;
      }

      .alert-custom.alert-success {
        background: linear-gradient(135deg, #d4f4dd 0%, #c3f0e4 100%);
        border-left: 4px solid #43e97b;
      }

      .alert-custom.alert-success .alert-icon {
        background: var(--success-gradient);
        color: white;
      }

      .alert-custom.alert-danger {
        background: linear-gradient(135deg, #ffe0e6 0%, #ffd6e8 100%);
        border-left: 4px solid #f5576c;
      }

      .alert-custom.alert-danger .alert-icon {
        background: var(--danger-gradient);
        color: white;
      }

      /* Progress Bar Enhancement */
      .progress-custom {
        height: 12px;
        border-radius: 10px;
        background: #e9ecef;
        overflow: hidden;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .progress-custom .progress-bar {
        background: var(--info-gradient);
        border-radius: 10px;
        transition: width 0.6s ease;
      }

      /* Avatar Styles */
      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary-gradient);
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
        background: var(--primary-gradient);
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

      /* Badge Styles */
      .badge-etudiant {
        background: var(--info-gradient);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: var(--primary-gradient);
        color: white;
        border: none;
      }

      /* Form Actions Container */
      .form-actions {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 1.5rem;
        margin-top: 2rem;
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        border: 2px dashed #e9ecef;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .page-header-enhanced .title-section {
          flex-direction: column;
          text-align: center;
        }

        .form-actions {
          flex-direction: column;
        }

        .btn-custom-primary,
        .btn-custom-secondary {
          width: 100%;
          justify-content: center;
        }

        .card-header-custom {
          flex-direction: column;
          text-align: center;
        }
      }

      /* Sidebar & Navbar (keeping existing styles) */
      .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
      }
      
      .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      }

      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }

      .navbar-profile {
        display: flex;
        align-items: center;
        padding: 5px 0;
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

      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 543
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 546
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 547
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
        // line 555
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "user", [], "any", false, false, false, 555)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 556
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 556, $this->source); })()), "user", [], "any", false, false, false, 556), "profilePic", [], "any", false, false, false, 556)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 557
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 557, $this->source); })()), "user", [], "any", false, false, false, 557), "profilePic", [], "any", false, false, false, 557))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 558, $this->source); })()), "user", [], "any", false, false, false, 558), "prenom", [], "any", false, false, false, 558), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 561
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 562
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 562, $this->source); })()), "user", [], "any", false, false, false, 562), "prenom", [], "any", false, false, false, 562))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 562, $this->source); })()), "user", [], "any", false, false, false, 562), "nom", [], "any", false, false, false, 562))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 565
            yield "                  ";
        } else {
            // line 566
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 568
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 571
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 571, $this->source); })()), "user", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 572, $this->source); })()), "user", [], "any", false, false, false, 572), "prenom", [], "any", false, false, false, 572), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 572, $this->source); })()), "user", [], "any", false, false, false, 572), "nom", [], "any", false, false, false, 572), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 573, $this->source); })()), "user", [], "any", false, false, false, 573), "email", [], "any", false, false, false, 573), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 575
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 575, $this->source); })()), "user", [], "any", false, false, false, 575), "roles", [], "any", false, false, false, 575))) {
                // line 576
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 578
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 580
            yield "                    </div>
                  ";
        } else {
            // line 582
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 585
        yield "                </div>
              </div>
            </div>
          </li>
          <li class=\"nav-item nav-category\">
            <span class=\"nav-link\">Navigation</span>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-speedometer\"></i></span>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 601
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-book-open-page-variant\"></i></span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-school\"></i></span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-office-building\"></i></span>
              <span class=\"menu-title\">Salles</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-calendar-clock\"></i></span>
              <span class=\"menu-title\">Séances</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-multiple\"></i></span>
              <span class=\"menu-title\">Groupes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 643
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-checkbox-marked-circle-outline\"></i></span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\" path('app_preference_alerte_index')\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-alert-circle-outline\"></i></span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Exercices de santé</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 664
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-logout text-danger\"></i></span>
              <span class=\"menu-title text-danger\">Déconnexion</span>
            </a>
          </li>
        </ul>
      </nav>

    <!-- Main Content -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- Navbar (unchanged) -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
            <!-- ... navbar content remains the same ... -->
        </nav>
        
        <!-- Content -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <!-- Flash Messages -->
                ";
        // line 683
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 683, $this->source); })()), "flashes", [], "any", false, false, false, 683));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 684
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 685
                yield "                        <div class=\"alert-custom alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-";
                // line 687
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                ";
                // line 690
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            </div>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 695
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 696
        yield "
                <!-- Enhanced Page Header -->
                <div class=\"page-header-enhanced\">
                    <div class=\"title-section\">
                        <div class=\"title-icon\">
                            <i class=\"mdi mdi-bell-plus\"></i>
                        </div>
                        <div>
                            <h3>Créer une nouvelle Préférence d'Alerte</h3>
                            <p class=\"subtitle\">Configurez les paramètres de notification et d'alerte selon vos préférences</p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 711
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\">
                                    <i class=\"mdi mdi-bell-ring-outline me-1\"></i>
                                    Liste des Préférences
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                Nouvelle Préférence
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Main Form Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header-custom\">
                                <div class=\"icon\">
                                    <i class=\"mdi mdi-bell-cog\"></i>
                                </div>
                                <h4>Formulaire de configuration des préférences d'alerte</h4>
                            </div>
                            <div class=\"card-body p-4\">
                                ";
        // line 734
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 734, $this->source); })()), 'form_start', ["attr" => ["class" => "form-sample", "id" => "preference-form"]]);
        yield "
                                
                                <!-- Section 1: Informations de Base -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-information\"></i>
                                        </span>
                                        Informations de Base
                                    </h5>
                                </div>
                                
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-tag-text label-icon\"></i>
                                                Nom de la préférence
                                            </label>
                                            ";
        // line 753
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 753, $this->source); })()), "nom", [], "any", false, false, false, 753), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Mes alertes quotidiennes"]]);
        // line 756
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Donnez un nom descriptif à cette configuration d'alerte</span>
                                            </div>
                                            ";
        // line 761
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 761, $this->source); })()), "nom", [], "any", false, false, false, 761), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 2: Activation & Statut -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-power\"></i>
                                        </span>
                                        Activation & Statut
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
        // line 780
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 780, $this->source); })()), "isActive", [], "any", false, false, false, 780), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 782
        yield "
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-check-circle-outline label-icon\"></i>
                                                    Activer cette préférence
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Activez cette préférence pour recevoir les alertes configurées</span>
                                            </div>
                                            ";
        // line 792
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 792, $this->source); })()), "isActive", [], "any", false, false, false, 792), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 3: Canaux de Notification -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-bell-ring\"></i>
                                        </span>
                                        Canaux de Notification
                                    </h5>
                                    <p class=\"section-subtitle\">Choisissez comment vous souhaitez recevoir les alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
        // line 812
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 812, $this->source); })()), "emailActif", [], "any", false, false, false, 812), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 814
        yield "
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-email-outline label-icon\"></i>
                                                    Email activé
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Recevoir les alertes par email</span>
                                            </div>
                                            ";
        // line 824
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 824, $this->source); })()), "emailActif", [], "any", false, false, false, 824), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
        // line 831
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 831, $this->source); })()), "pushActif", [], "any", false, false, false, 831), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 833
        yield "
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-cellphone-message label-icon\"></i>
                                                    Push activé
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Recevoir des notifications push</span>
                                            </div>
                                            ";
        // line 843
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 843, $this->source); })()), "pushActif", [], "any", false, false, false, 843), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
        // line 850
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 850, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 850), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 852
        yield "
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-web label-icon\"></i>
                                                    Notifications sur site
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Voir les alertes directement sur le site</span>
                                            </div>
                                            ";
        // line 862
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 862, $this->source); })()), "siteNotifActive", [], "any", false, false, false, 862), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 4: Paramètres de Temporisation -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-timer\"></i>
                                        </span>
                                        Paramètres de Temporisation
                                    </h5>
                                    <p class=\"section-subtitle\">Contrôlez le timing des alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-alert label-icon\"></i>
                                                Délai de rappel (minutes)
                                            </label>
                                            ";
        // line 885
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 885, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 885), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 60"]]);
        // line 888
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Délai avant de recevoir un rappel (en minutes)</span>
                                            </div>
                                            ";
        // line 893
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 893, $this->source); })()), "delaiRappelMin", [], "any", false, false, false, 893), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 5: Période de Silence -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-volume-off\"></i>
                                        </span>
                                        Période de Silence
                                    </h5>
                                    <p class=\"section-subtitle\">Définissez les moments où vous ne souhaitez pas recevoir d'alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-start label-icon\"></i>
                                                Heure début silence
                                            </label>
                                            ";
        // line 916
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 916, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 916), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 918
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Heure à laquelle les alertes doivent être désactivées</span>
                                            </div>
                                            ";
        // line 923
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 923, $this->source); })()), "heureSilenceDebut", [], "any", false, false, false, 923), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-end label-icon\"></i>
                                                Heure fin silence
                                            </label>
                                            ";
        // line 933
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 933, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 933), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 935
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Heure à laquelle les alertes doivent être réactivées</span>
                                            </div>
                                            ";
        // line 940
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 940, $this->source); })()), "heureSilenceFin", [], "any", false, false, false, 940), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    <a href=\"";
        // line 947
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\" class=\"btn-custom-secondary\">
                                        <i class=\"mdi mdi-arrow-left\"></i>
                                        Retour à la liste
                                    </a>
                                    <button type=\"submit\" class=\"btn-custom-primary\">
                                        <i class=\"mdi mdi-content-save\"></i>
                                        Créer la préférence
                                    </button>
                                </div>
                                
                                ";
        // line 957
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 957, $this->source); })()), 'form_end');
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Info Cards -->
                <div class=\"row mt-4\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--danger-gradient);\">
                                    <i class=\"mdi mdi-alert-circle\"></i>
                                </div>
                                <h6>Paramètres recommandés</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Activation</strong> : Activez la préférence pour recevoir des alertes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Email</strong> : Idéal pour les alertes importantes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Push</strong> : Pour les notifications instantanées</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Site</strong> : Restez informé pendant votre navigation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--success-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils & Bonnes Pratiques</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Utilisez une période de silence pour éviter les dérangements</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Activez plusieurs canaux pour être sûr de recevoir les alertes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Définissez un délai de rappel adapté à l'urgence</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Donnez un nom clair à chaque configuration</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                        © ";
        // line 1029
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        Configuration des préférences d'alerte - Système de notification
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for form enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Progress bar enhancement
        const dureeInput = document.querySelector('#tache_dureeEstimee');
        const progressPreview = document.getElementById('progress-preview');
        
        if (dureeInput && progressPreview) {
            function updateProgress() {
                const value = dureeInput.value || 0;
                progressPreview.innerHTML = `
                    <div class=\"progress-custom\">
                        <div class=\"progress-bar\" role=\"progressbar\" 
                             style=\"width: \${value}%\" 
                             aria-valuenow=\"\${value}\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\">
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between align-items-center mt-2\">
                        <small class=\"text-muted\">
                            <i class=\"mdi mdi-information-outline\"></i>
                            Progression: \${value}%
                        </small>
                        <small class=\"text-muted\">
                            \${value < 30 ? '🔴 Début' : value < 70 ? '🟡 En cours' : '🟢 Presque terminé'}
                        </small>
                    </div>
                `;
            }
            
            dureeInput.addEventListener('input', updateProgress);
            updateProgress(); // Initial update
        }
        
        // Form validation
        const form = document.getElementById('tache-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    
                    // Show error alert
                    const alertHtml = `
                        <div class=\"alert-custom alert-danger mb-4\" style=\"animation: slideInDown 0.3s ease;\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-alert-circle\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <strong>Erreur de validation</strong><br>
                                Veuillez remplir tous les champs obligatoires marqués d'une étoile (*).
                            </div>
                        </div>
                    `;
                    
                    const contentWrapper = document.querySelector('.content-wrapper');
                    contentWrapper.insertAdjacentHTML('afterbegin', alertHtml);
                    
                    // Scroll to top
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    
                    // Remove alert after 5 seconds
                    setTimeout(() => {
                        const alert = contentWrapper.querySelector('.alert-custom');
                        if (alert) {
                            alert.style.animation = 'fadeOut 0.3s ease';
                            setTimeout(() => alert.remove(), 300);
                        }
                    }, 5000);
                }
            });
        }
        
        // Auto-hide flash messages
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-custom');
            alerts.forEach(alert => {
                alert.style.animation = 'fadeOut 0.5s ease';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
        
        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInDown {
                from {
                    transform: translateY(-100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
            
            @keyframes fadeOut {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                }
            }
            
            .is-invalid {
                border-color: #f5576c !important;
                animation: shake 0.3s ease;
            }
            
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                75% { transform: translateX(10px); }
            }
        `;
        document.head.appendChild(style);
    });
</script>
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
        return "preference_alerte/new.html.twig";
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
        return array (  1287 => 1029,  1212 => 957,  1199 => 947,  1189 => 940,  1182 => 935,  1180 => 933,  1167 => 923,  1160 => 918,  1158 => 916,  1132 => 893,  1125 => 888,  1123 => 885,  1097 => 862,  1085 => 852,  1083 => 850,  1073 => 843,  1061 => 833,  1059 => 831,  1049 => 824,  1037 => 814,  1035 => 812,  1012 => 792,  1000 => 782,  998 => 780,  976 => 761,  969 => 756,  967 => 753,  945 => 734,  919 => 711,  902 => 696,  896 => 695,  885 => 690,  879 => 687,  873 => 685,  868 => 684,  864 => 683,  842 => 664,  818 => 643,  773 => 601,  755 => 585,  750 => 582,  746 => 580,  742 => 578,  738 => 576,  736 => 575,  731 => 573,  724 => 572,  722 => 571,  717 => 568,  711 => 566,  708 => 565,  701 => 562,  698 => 561,  692 => 558,  687 => 557,  684 => 556,  682 => 555,  671 => 547,  667 => 546,  662 => 544,  658 => 543,  130 => 18,  126 => 17,  121 => 15,  117 => 14,  113 => 13,  109 => 12,  100 => 5,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer une nouvelle Tâche{% endblock %}
{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Gestion des Tâches</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />
    <style>
      :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        --danger-gradient: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
        --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        --card-shadow-hover: 0 8px 30px rgba(0, 0, 0, 0.12);
      }

      /* Enhanced Card Styles */
      .card {
        border: none;
        border-radius: 15px;
        box-shadow: var(--card-shadow);
        transition: all 0.3s ease;
        overflow: hidden;
      }

      .card:hover {
        box-shadow: var(--card-shadow-hover);
      }

      .card-header-custom {
        background: var(--primary-gradient);
        color: white;
        padding: 1.5rem;
        border-radius: 15px 15px 0 0;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .card-header-custom h4 {
        margin: 0;
        font-weight: 600;
        font-size: 1.25rem;
      }

      .card-header-custom .icon {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
      }

      /* Form Section Headers */
      .form-section-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 1rem 1.5rem;
        border-radius: 10px;
        margin: 2rem 0 1.5rem;
        border-left: 4px solid #667eea;
      }

      .form-section-header h5 {
        margin: 0;
        color: #495057;
        font-weight: 600;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }

      .form-section-header .section-icon {
        width: 35px;
        height: 35px;
        background: var(--primary-gradient);
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
      }

      /* Enhanced Form Controls */
      .form-group {
        margin-bottom: 1.75rem;
      }

      .form-label-custom {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.95rem;
      }

      .form-label-custom .required-star {
        color: #f5576c;
        font-weight: bold;
      }

      .form-label-custom .label-icon {
        color: #667eea;
        font-size: 1.1rem;
      }

      .form-control, .form-select {
        border: 2px solid #e9ecef;
        border-radius: 10px;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        font-size: 0.95rem;
      }

      .form-control:focus, .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        outline: none;
      }

      .form-control:hover, .form-select:hover {
        border-color: #b8c1ec;
      }

      .input-group-text {
        background: var(--primary-gradient);
        color: white;
        border: none;
        border-radius: 0 10px 10px 0;
        font-weight: 600;
      }

      /* Help Text */
      .form-help-text {
        font-size: 0.85rem;
        color: #6c757d;
        margin-top: 0.5rem;
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
      }

      .form-help-text i {
        margin-top: 2px;
        color: #667eea;
      }

      /* Button Styles */
      .btn-custom-primary {
        background: var(--primary-gradient);
        border: none;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        color: white;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
      }

      .btn-custom-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        color: white;
      }

      .btn-custom-secondary {
        background: white;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        color: #495057;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
      }

      .btn-custom-secondary:hover {
        background: #f8f9fa;
        border-color: #667eea;
        color: #667eea;
        transform: translateY(-2px);
      }

      /* Info Cards */
      .info-card {
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 1.5rem;
        background: white;
        transition: all 0.3s ease;
      }

      .info-card:hover {
        border-color: #667eea;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.1);
      }

      .info-card-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #f8f9fa;
      }

      .info-card-header .icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        color: white;
      }

      .info-card-header h6 {
        margin: 0;
        font-weight: 600;
        color: #495057;
      }

      .info-card-list {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .info-card-list li {
        padding: 0.5rem 0;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        color: #6c757d;
        font-size: 0.9rem;
      }

      .info-card-list li i {
        color: #667eea;
        margin-top: 3px;
        font-size: 1.1rem;
      }

      .info-card-list li strong {
        color: #495057;
      }

      /* Page Header Enhancement */
      .page-header-enhanced {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: var(--card-shadow);
        margin-bottom: 2rem;
      }

      .page-header-enhanced .title-section {
        display: flex;
        align-items: center;
        gap: 1.5rem;
      }

      .page-header-enhanced .title-icon {
        width: 60px;
        height: 60px;
        background: var(--primary-gradient);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
      }

      .page-header-enhanced h3 {
        margin: 0;
        color: #2c3e50;
        font-weight: 700;
      }

      .page-header-enhanced .subtitle {
        color: #6c757d;
        margin-top: 0.5rem;
        font-size: 0.95rem;
      }

      /* Breadcrumb Enhancement */
      .breadcrumb-custom {
        background: transparent;
        padding: 0;
        margin: 1rem 0 0 0;
      }

      .breadcrumb-custom .breadcrumb-item {
        font-size: 0.9rem;
      }

      .breadcrumb-custom .breadcrumb-item a {
        color: #667eea;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .breadcrumb-custom .breadcrumb-item a:hover {
        color: #764ba2;
      }

      .breadcrumb-custom .breadcrumb-item.active {
        color: #6c757d;
      }

      /* Flash Messages */
      .alert-custom {
        border: none;
        border-radius: 12px;
        padding: 1.25rem 1.5rem;
        box-shadow: var(--card-shadow);
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
      }

      .alert-custom .alert-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        flex-shrink: 0;
      }

      .alert-custom.alert-success {
        background: linear-gradient(135deg, #d4f4dd 0%, #c3f0e4 100%);
        border-left: 4px solid #43e97b;
      }

      .alert-custom.alert-success .alert-icon {
        background: var(--success-gradient);
        color: white;
      }

      .alert-custom.alert-danger {
        background: linear-gradient(135deg, #ffe0e6 0%, #ffd6e8 100%);
        border-left: 4px solid #f5576c;
      }

      .alert-custom.alert-danger .alert-icon {
        background: var(--danger-gradient);
        color: white;
      }

      /* Progress Bar Enhancement */
      .progress-custom {
        height: 12px;
        border-radius: 10px;
        background: #e9ecef;
        overflow: hidden;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .progress-custom .progress-bar {
        background: var(--info-gradient);
        border-radius: 10px;
        transition: width 0.6s ease;
      }

      /* Avatar Styles */
      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary-gradient);
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
        background: var(--primary-gradient);
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

      /* Badge Styles */
      .badge-etudiant {
        background: var(--info-gradient);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: var(--primary-gradient);
        color: white;
        border: none;
      }

      /* Form Actions Container */
      .form-actions {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 1.5rem;
        margin-top: 2rem;
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        border: 2px dashed #e9ecef;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .page-header-enhanced .title-section {
          flex-direction: column;
          text-align: center;
        }

        .form-actions {
          flex-direction: column;
        }

        .btn-custom-primary,
        .btn-custom-secondary {
          width: 100%;
          justify-content: center;
        }

        .card-header-custom {
          flex-direction: column;
          text-align: center;
        }
      }

      /* Sidebar & Navbar (keeping existing styles) */
      .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
      }
      
      .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      }

      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }

      .navbar-profile {
        display: flex;
        align-items: center;
        padding: 5px 0;
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

      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
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
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-speedometer\"></i></span>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-book-open-page-variant\"></i></span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-school\"></i></span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-office-building\"></i></span>
              <span class=\"menu-title\">Salles</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-calendar-clock\"></i></span>
              <span class=\"menu-title\">Séances</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-account-multiple\"></i></span>
              <span class=\"menu-title\">Groupes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"{{ path('app_tache_index') }}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-checkbox-marked-circle-outline\"></i></span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\" path('app_preference_alerte_index')\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-alert-circle-outline\"></i></span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Exercices de santé</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-logout text-danger\"></i></span>
              <span class=\"menu-title text-danger\">Déconnexion</span>
            </a>
          </li>
        </ul>
      </nav>

    <!-- Main Content -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- Navbar (unchanged) -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
            <!-- ... navbar content remains the same ... -->
        </nav>
        
        <!-- Content -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <!-- Flash Messages -->
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert-custom alert-{{ label == 'error' ? 'danger' : label }}\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }}\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                {{ message }}
                            </div>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}

                <!-- Enhanced Page Header -->
                <div class=\"page-header-enhanced\">
                    <div class=\"title-section\">
                        <div class=\"title-icon\">
                            <i class=\"mdi mdi-bell-plus\"></i>
                        </div>
                        <div>
                            <h3>Créer une nouvelle Préférence d'Alerte</h3>
                            <p class=\"subtitle\">Configurez les paramètres de notification et d'alerte selon vos préférences</p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_preference_alerte_index') }}\">
                                    <i class=\"mdi mdi-bell-ring-outline me-1\"></i>
                                    Liste des Préférences
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                Nouvelle Préférence
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Main Form Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header-custom\">
                                <div class=\"icon\">
                                    <i class=\"mdi mdi-bell-cog\"></i>
                                </div>
                                <h4>Formulaire de configuration des préférences d'alerte</h4>
                            </div>
                            <div class=\"card-body p-4\">
                                {{ form_start(form, {'attr': {'class': 'form-sample', 'id': 'preference-form'}}) }}
                                
                                <!-- Section 1: Informations de Base -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-information\"></i>
                                        </span>
                                        Informations de Base
                                    </h5>
                                </div>
                                
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-tag-text label-icon\"></i>
                                                Nom de la préférence
                                            </label>
                                            {{ form_widget(form.nom, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: Mes alertes quotidiennes'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Donnez un nom descriptif à cette configuration d'alerte</span>
                                            </div>
                                            {{ form_errors(form.nom) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 2: Activation & Statut -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-power\"></i>
                                        </span>
                                        Activation & Statut
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                {{ form_widget(form.isActive, {'attr': {
                                                    'class': 'form-check-input'
                                                }}) }}
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-check-circle-outline label-icon\"></i>
                                                    Activer cette préférence
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Activez cette préférence pour recevoir les alertes configurées</span>
                                            </div>
                                            {{ form_errors(form.isActive) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 3: Canaux de Notification -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-bell-ring\"></i>
                                        </span>
                                        Canaux de Notification
                                    </h5>
                                    <p class=\"section-subtitle\">Choisissez comment vous souhaitez recevoir les alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                {{ form_widget(form.emailActif, {'attr': {
                                                    'class': 'form-check-input'
                                                }}) }}
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-email-outline label-icon\"></i>
                                                    Email activé
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Recevoir les alertes par email</span>
                                            </div>
                                            {{ form_errors(form.emailActif) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                {{ form_widget(form.pushActif, {'attr': {
                                                    'class': 'form-check-input'
                                                }}) }}
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-cellphone-message label-icon\"></i>
                                                    Push activé
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Recevoir des notifications push</span>
                                            </div>
                                            {{ form_errors(form.pushActif) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group form-check-custom\">
                                            <div class=\"d-flex align-items-center\">
                                                {{ form_widget(form.siteNotifActive, {'attr': {
                                                    'class': 'form-check-input'
                                                }}) }}
                                                <label class=\"form-check-label-custom ms-2\">
                                                    <i class=\"mdi mdi-web label-icon\"></i>
                                                    Notifications sur site
                                                </label>
                                            </div>
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Voir les alertes directement sur le site</span>
                                            </div>
                                            {{ form_errors(form.siteNotifActive) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 4: Paramètres de Temporisation -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-timer\"></i>
                                        </span>
                                        Paramètres de Temporisation
                                    </h5>
                                    <p class=\"section-subtitle\">Contrôlez le timing des alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-alert label-icon\"></i>
                                                Délai de rappel (minutes)
                                            </label>
                                            {{ form_widget(form.delaiRappelMin, {'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Ex: 60'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Délai avant de recevoir un rappel (en minutes)</span>
                                            </div>
                                            {{ form_errors(form.delaiRappelMin) }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 5: Période de Silence -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-volume-off\"></i>
                                        </span>
                                        Période de Silence
                                    </h5>
                                    <p class=\"section-subtitle\">Définissez les moments où vous ne souhaitez pas recevoir d'alertes</p>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-start label-icon\"></i>
                                                Heure début silence
                                            </label>
                                            {{ form_widget(form.heureSilenceDebut, {'attr': {
                                                'class': 'form-control'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Heure à laquelle les alertes doivent être désactivées</span>
                                            </div>
                                            {{ form_errors(form.heureSilenceDebut) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-clock-end label-icon\"></i>
                                                Heure fin silence
                                            </label>
                                            {{ form_widget(form.heureSilenceFin, {'attr': {
                                                'class': 'form-control'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-information-outline\"></i>
                                                <span>Heure à laquelle les alertes doivent être réactivées</span>
                                            </div>
                                            {{ form_errors(form.heureSilenceFin) }}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    <a href=\"{{ path('app_preference_alerte_index') }}\" class=\"btn-custom-secondary\">
                                        <i class=\"mdi mdi-arrow-left\"></i>
                                        Retour à la liste
                                    </a>
                                    <button type=\"submit\" class=\"btn-custom-primary\">
                                        <i class=\"mdi mdi-content-save\"></i>
                                        Créer la préférence
                                    </button>
                                </div>
                                
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Info Cards -->
                <div class=\"row mt-4\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--danger-gradient);\">
                                    <i class=\"mdi mdi-alert-circle\"></i>
                                </div>
                                <h6>Paramètres recommandés</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Activation</strong> : Activez la préférence pour recevoir des alertes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Email</strong> : Idéal pour les alertes importantes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Push</strong> : Pour les notifications instantanées</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chevron-right\"></i>
                                    <span><strong>Site</strong> : Restez informé pendant votre navigation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--success-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils & Bonnes Pratiques</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Utilisez une période de silence pour éviter les dérangements</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Activez plusieurs canaux pour être sûr de recevoir les alertes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Définissez un délai de rappel adapté à l'urgence</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Donnez un nom clair à chaque configuration</span>
                                </li>
                            </ul>
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
                        Configuration des préférences d'alerte - Système de notification
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for form enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Progress bar enhancement
        const dureeInput = document.querySelector('#tache_dureeEstimee');
        const progressPreview = document.getElementById('progress-preview');
        
        if (dureeInput && progressPreview) {
            function updateProgress() {
                const value = dureeInput.value || 0;
                progressPreview.innerHTML = `
                    <div class=\"progress-custom\">
                        <div class=\"progress-bar\" role=\"progressbar\" 
                             style=\"width: \${value}%\" 
                             aria-valuenow=\"\${value}\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\">
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between align-items-center mt-2\">
                        <small class=\"text-muted\">
                            <i class=\"mdi mdi-information-outline\"></i>
                            Progression: \${value}%
                        </small>
                        <small class=\"text-muted\">
                            \${value < 30 ? '🔴 Début' : value < 70 ? '🟡 En cours' : '🟢 Presque terminé'}
                        </small>
                    </div>
                `;
            }
            
            dureeInput.addEventListener('input', updateProgress);
            updateProgress(); // Initial update
        }
        
        // Form validation
        const form = document.getElementById('tache-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    
                    // Show error alert
                    const alertHtml = `
                        <div class=\"alert-custom alert-danger mb-4\" style=\"animation: slideInDown 0.3s ease;\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-alert-circle\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                <strong>Erreur de validation</strong><br>
                                Veuillez remplir tous les champs obligatoires marqués d'une étoile (*).
                            </div>
                        </div>
                    `;
                    
                    const contentWrapper = document.querySelector('.content-wrapper');
                    contentWrapper.insertAdjacentHTML('afterbegin', alertHtml);
                    
                    // Scroll to top
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    
                    // Remove alert after 5 seconds
                    setTimeout(() => {
                        const alert = contentWrapper.querySelector('.alert-custom');
                        if (alert) {
                            alert.style.animation = 'fadeOut 0.3s ease';
                            setTimeout(() => alert.remove(), 300);
                        }
                    }, 5000);
                }
            });
        }
        
        // Auto-hide flash messages
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-custom');
            alerts.forEach(alert => {
                alert.style.animation = 'fadeOut 0.5s ease';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
        
        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInDown {
                from {
                    transform: translateY(-100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
            
            @keyframes fadeOut {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                }
            }
            
            .is-invalid {
                border-color: #f5576c !important;
                animation: shake 0.3s ease;
            }
            
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                75% { transform: translateX(10px); }
            }
        `;
        document.head.appendChild(style);
    });
</script>
{% endblock %}
", "preference_alerte/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\preference_alerte\\new.html.twig");
    }
}
