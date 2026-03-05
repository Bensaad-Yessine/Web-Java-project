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

/* objectif_sante/show.html.twig */
class __TwigTemplate_21818bdca5903e05ed16ec86baaa4aee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_sante/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_sante/show.html.twig"));

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

        yield "Détails de l'Objectif de Santé - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
    <title>ESPRIT - Détails de l'Objectif de Santé</title>
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
      :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        --danger-gradient: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
        --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        --health-gradient: linear-gradient(135deg, #fa8bff 0%, #2bd2ff 90%, #2bff88 100%);
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
        background: var(--health-gradient);
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

      /* Detail Section Headers */
      .detail-section-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 1rem 1.5rem;
        border-radius: 10px;
        margin: 2rem 0 1.5rem;
        border-left: 4px solid;
        border-image: var(--health-gradient) 1;
      }

      .detail-section-header h5 {
        margin: 0;
        color: #495057;
        font-weight: 600;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }

      .detail-section-header .section-icon {
        width: 35px;
        height: 35px;
        background: var(--health-gradient);
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
      }

      /* Detail Display */
      .detail-row {
        padding: 1.25rem;
        border-bottom: 1px solid #e9ecef;
        display: flex;
        align-items: flex-start;
      }

      .detail-row:last-child {
        border-bottom: none;
      }

      .detail-label {
        font-weight: 600;
        color: #495057;
        min-width: 200px;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        font-size: 0.95rem;
      }

      .detail-label .label-icon {
        color: #667eea;
        font-size: 1.1rem;
        min-width: 24px;
      }

      .detail-value {
        flex: 1;
        color: #6c757d;
        font-size: 0.95rem;
      }

      .detail-value strong {
        color: #495057;
        font-weight: 600;
      }

      /* Badge Styles */
      .detail-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
        margin: 0.25rem 0;
      }

      .badge-type { background: var(--info-gradient); color: white; }
      .status-en-cours { background: var(--info-gradient); color: white; }
      .status-termine { background: var(--success-gradient); color: white; }
      .status-abandonne { background: linear-gradient(135deg, #838383 0%, #666666 100%); color: white; }
      .status-en-pause { background: var(--warning-gradient); color: white; }
      .priority-haute { background: var(--danger-gradient); color: white; }
      .priority-moyenne { background: var(--warning-gradient); color: white; }
      .priority-faible { background: var(--success-gradient); color: white; }

      /* Progress Bar */
      .progress-custom {
        height: 12px;
        border-radius: 10px;
        background: #e9ecef;
        overflow: hidden;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 0.5rem 0;
      }

      .progress-custom .progress-bar {
        background: var(--health-gradient);
        border-radius: 10px;
        transition: width 0.6s ease;
      }

      /* Action Buttons */
      .btn-custom-primary {
        background: var(--health-gradient);
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
        box-shadow: 0 6px 20px rgba(250, 139, 255, 0.4);
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

      .btn-custom-danger {
        background: var(--danger-gradient);
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

      .btn-custom-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(245, 87, 108, 0.4);
        color: white;
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
        background: var(--health-gradient);
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

      /* Action Buttons Container */
      .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding: 1.5rem;
        background: #f8f9fa;
        border-radius: 12px;
        border: 2px dashed #e9ecef;
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

      /* Badge User Roles */
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

      /* Responsive Design */
      @media (max-width: 768px) {
        .page-header-enhanced .title-section {
          flex-direction: column;
          text-align: center;
        }

        .detail-row {
          flex-direction: column;
          gap: 0.5rem;
        }

        .detail-label {
          min-width: 100%;
        }

        .action-buttons {
          flex-direction: column;
        }

        .btn-custom-primary,
        .btn-custom-secondary,
        .btn-custom-danger {
          width: 100%;
          justify-content: center;
        }

        .card-header-custom {
          flex-direction: column;
          text-align: center;
        }
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 522
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 525
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 526
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
        // line 534
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 534, $this->source); })()), "user", [], "any", false, false, false, 534)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 535
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 535, $this->source); })()), "user", [], "any", false, false, false, 535), "profilePic", [], "any", false, false, false, 535)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 536
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 536, $this->source); })()), "user", [], "any", false, false, false, 536), "profilePic", [], "any", false, false, false, 536))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 537, $this->source); })()), "user", [], "any", false, false, false, 537), "prenom", [], "any", false, false, false, 537), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 540
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 541
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541), "prenom", [], "any", false, false, false, 541))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541), "nom", [], "any", false, false, false, 541))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 544
            yield "                  ";
        } else {
            // line 545
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 547
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 550
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 550, $this->source); })()), "user", [], "any", false, false, false, 550)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 551
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 551, $this->source); })()), "user", [], "any", false, false, false, 551), "prenom", [], "any", false, false, false, 551), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 551, $this->source); })()), "user", [], "any", false, false, false, 551), "nom", [], "any", false, false, false, 551), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 552
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 552, $this->source); })()), "user", [], "any", false, false, false, 552), "email", [], "any", false, false, false, 552), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 554
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 554, $this->source); })()), "user", [], "any", false, false, false, 554), "roles", [], "any", false, false, false, 554))) {
                // line 555
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 557
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 559
            yield "                    </div>
                  ";
        } else {
            // line 561
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 564
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
        // line 580
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
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 622
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-checkbox-marked-circle-outline\"></i></span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-alert-circle-outline\"></i></span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 636
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Objectifs de santé</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 643
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
        <!-- Navbar -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <img src=\"";
        // line 656
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un objectif...\">
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
                      <div class=\"preview-icon bg-success rounded-circle\">
                        <i class=\"mdi mdi-heart-pulse\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Objectif atteint!</p>
                      <p class=\"text-muted ellipsis mb-0\">Félicitations</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 695
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 695, $this->source); })()), "user", [], "any", false, false, false, 695)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 696
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 697
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 697, $this->source); })()), "user", [], "any", false, false, false, 697), "profilePic", [], "any", false, false, false, 697)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 698
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 698, $this->source); })()), "user", [], "any", false, false, false, 698), "profilePic", [], "any", false, false, false, 698))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 699
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 699, $this->source); })()), "user", [], "any", false, false, false, 699), "prenom", [], "any", false, false, false, 699), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 702
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 703
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 703, $this->source); })()), "user", [], "any", false, false, false, 703), "prenom", [], "any", false, false, false, 703))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 703, $this->source); })()), "user", [], "any", false, false, false, 703), "nom", [], "any", false, false, false, 703))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 706
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 708, $this->source); })()), "user", [], "any", false, false, false, 708), "prenom", [], "any", false, false, false, 708), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 708, $this->source); })()), "user", [], "any", false, false, false, 708), "nom", [], "any", false, false, false, 708), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 711
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 711, $this->source); })()), "user", [], "any", false, false, false, 711), "roles", [], "any", false, false, false, 711))) {
                // line 712
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 714
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 716
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 720
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 723
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 728
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 728, $this->source); })()), "user", [], "any", false, false, false, 728)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 729
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 729, $this->source); })()), "user", [], "any", false, false, false, 729), "prenom", [], "any", false, false, false, 729), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 729, $this->source); })()), "user", [], "any", false, false, false, 729), "nom", [], "any", false, false, false, 729), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 730
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 730, $this->source); })()), "user", [], "any", false, false, false, 730), "email", [], "any", false, false, false, 730), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 732
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 732, $this->source); })()), "user", [], "any", false, false, false, 732), "roles", [], "any", false, false, false, 732))) {
                // line 733
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 735
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 737
            yield "                      </small>
                    ";
        } else {
            // line 739
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 742
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 744
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 744, $this->source); })()), "user", [], "any", false, false, false, 744)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 745
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 745, $this->source); })()), "user", [], "any", false, false, false, 745), "id", [], "any", false, false, false, 745)]), "html", null, true);
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
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 755, $this->source); })()), "user", [], "any", false, false, false, 755), "id", [], "any", false, false, false, 755)]), "html", null, true);
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
        // line 767
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
                <!-- Flash Messages -->
                ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 787, $this->source); })()), "flashes", [], "any", false, false, false, 787));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 788
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 789
                yield "                        <div class=\"alert-custom alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-";
                // line 791
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                ";
                // line 794
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
            // line 799
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 800
        yield "
                <!-- Enhanced Page Header -->
                <div class=\"page-header-enhanced\">
                    <div class=\"title-section\">
                        <div class=\"title-icon\">
                            <i class=\"mdi mdi-eye\"></i>
                        </div>
                        <div>
                            <h3>Détails de l'Objectif de Santé</h3>
                            <p class=\"subtitle\">
                                Visualisez toutes les informations de l'objectif \"";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 810, $this->source); })()), "titre", [], "any", false, false, false, 810), "html", null, true);
        yield "\"
                            </p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 817
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
                                    <i class=\"mdi mdi-heart-pulse me-1\"></i>
                                    Liste des Objectifs
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                Détails de l'objectif
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Main Details Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header-custom\">
                                <div class=\"icon\">
                                    <i class=\"mdi mdi-file-document\"></i>
                                </div>
                                <h4>Informations détaillées</h4>
                            </div>
                            <div class=\"card-body p-0\">
                                
                                <!-- Section 1: Informations Générales -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-information\"></i>
                                        </span>
                                        Informations Générales
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-format-title label-icon\"></i>
                                        Titre
                                    </div>
                                    <div class=\"detail-value\">
                                        <strong>";
        // line 857
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 857, $this->source); })()), "titre", [], "any", false, false, false, 857), "html", null, true);
        yield "</strong>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-tag label-icon\"></i>
                                        Type d'objectif
                                    </div>
                                    <div class=\"detail-value\">
                                        <span class=\"detail-badge badge-type\">
                                            <i class=\"mdi mdi-tag\"></i>
                                            ";
        // line 869
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 869, $this->source); })()), "type", [], "any", false, false, false, 869), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-target label-icon\"></i>
                                        Valeur cible
                                    </div>
                                    <div class=\"detail-value\">
                                        ";
        // line 880
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 880, $this->source); })()), "valeurCible", [], "any", false, false, false, 880)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 881
            yield "                                            <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 881, $this->source); })()), "getValeurCibleAvecUnite", [], "method", false, false, false, 881), "html", null, true);
            yield "</strong>
                                        ";
        } else {
            // line 883
            yield "                                            <em class=\"text-muted\">Non définie</em>
                                        ";
        }
        // line 885
        yield "                                    </div>
                                </div>

                                <!-- Section 2: État & Priorité -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-chart-line\"></i>
                                        </span>
                                        État & Priorité
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-progress-clock label-icon\"></i>
                                        Statut
                                    </div>
                                    <div class=\"detail-value\">
                                        <span class=\"detail-badge status-";
        // line 904
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 904, $this->source); })()), "statut", [], "any", false, false, false, 904)), [" " => "-"]), "html", null, true);
        yield "\">
                                            <i class=\"mdi mdi-";
        // line 905
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 906
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 906, $this->source); })()), "statut", [], "any", false, false, false, 906) == "En cours")) ? ("progress-clock") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 907
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 907, $this->source); })()), "statut", [], "any", false, false, false, 907) == "Terminé")) ? ("check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 908
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 908, $this->source); })()), "statut", [], "any", false, false, false, 908) == "Abandonné")) ? ("close-circle") : ("pause-circle"))))));
        // line 909
        yield "\"></i>
                                            ";
        // line 910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 910, $this->source); })()), "statut", [], "any", false, false, false, 910), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-flag label-icon\"></i>
                                        Priorité
                                    </div>
                                    <div class=\"detail-value\">
                                        <span class=\"detail-badge priority-";
        // line 921
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 921, $this->source); })()), "priorite", [], "any", false, false, false, 921)), "html", null, true);
        yield "\">
                                            <i class=\"mdi mdi-flag\"></i>
                                            ";
        // line 923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 923, $this->source); })()), "priorite", [], "any", false, false, false, 923), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
    <div class=\"detail-label\">
        <i class=\"mdi mdi-progress-check label-icon\"></i>
        Score Moyen
    </div>
    <div class=\"detail-value\">
        <div class=\"d-flex align-items-center gap-3\">
            <div class=\"progress w-100\" style=\"height: 12px; border-radius: 10px; background: #e9ecef;\">
                <div class=\"progress-bar\" role=\"progressbar\" 
                     style=\"width: ";
        // line 937
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 937, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 937), "html", null, true);
        yield "%; background: linear-gradient(135deg, #fa8bff 0%, #2bd2ff 90%, #2bff88 100%); border-radius: 10px;\" 
                     aria-valuenow=\"";
        // line 938
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 938, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 938), "html", null, true);
        yield "\" 
                     aria-valuemin=\"0\" 
                     aria-valuemax=\"100\">
                </div>
            </div>
            <strong style=\"min-width: 60px;\">";
        // line 943
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 943, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 943), "html", null, true);
        yield "%</strong>
        </div>
    </div>
</div>

                                <!-- Section 3: Dates -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-calendar-clock\"></i>
                                        </span>
                                        Dates
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-calendar-start label-icon\"></i>
                                        Date de début
                                    </div>
                                    <div class=\"detail-value\">
                                        <strong>";
        // line 964
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 964, $this->source); })()), "dateDebut", [], "any", false, false, false, 964)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 964, $this->source); })()), "dateDebut", [], "any", false, false, false, 964), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</strong>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-calendar-end label-icon\"></i>
                                        Date de fin
                                    </div>
                                    <div class=\"detail-value\">
                                        <strong>";
        // line 974
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 974, $this->source); })()), "dateFin", [], "any", false, false, false, 974)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 974, $this->source); })()), "dateFin", [], "any", false, false, false, 974), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</strong>
                                        ";
        // line 975
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 975, $this->source); })()), "dateDebut", [], "any", false, false, false, 975) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 975, $this->source); })()), "dateFin", [], "any", false, false, false, 975))) {
            // line 976
            yield "                                            ";
            $context["difference"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 976, $this->source); })()), "dateFin", [], "any", false, false, false, 976)), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 976, $this->source); })()), "dateDebut", [], "any", false, false, false, 976))], "method", false, false, false, 976);
            // line 977
            yield "                                            ";
            $context["days"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 977, $this->source); })()), "days", [], "any", false, false, false, 977);
            // line 978
            yield "                                            <div class=\"mt-1\">
                                                <small class=\"text-muted\">
                                                    Durée: ";
            // line 980
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 980, $this->source); })()), "html", null, true);
            yield " jour";
            yield ((((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 980, $this->source); })()) > 1)) ? ("s") : (""));
            yield "
                                                    ";
            // line 981
            if (((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 981, $this->source); })()) >= 7)) {
                // line 982
                yield "                                                        (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 982, $this->source); })()) / 7), 1), "html", null, true);
                yield " semaine";
                yield (((((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 982, $this->source); })()) / 7) >= 2)) ? ("s") : (""));
                yield ")
                                                    ";
            }
            // line 984
            yield "                                                </small>
                                            </div>
                                        ";
        }
        // line 987
        yield "                                    </div>
                                </div>

                                <!-- Section 4: Attribution -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-account\"></i>
                                        </span>
                                        Attribution
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-account-circle label-icon\"></i>
                                        Utilisateur assigné
                                    </div>
                                    <div class=\"detail-value\">
                                        ";
        // line 1006
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1006, $this->source); })()), "user", [], "any", false, false, false, 1006)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1007
            yield "                                            <div class=\"d-flex align-items-center gap-2\">
                                                ";
            // line 1008
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1008, $this->source); })()), "user", [], "any", false, false, false, 1008), "profilePic", [], "any", false, false, false, 1008)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1009
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1009, $this->source); })()), "user", [], "any", false, false, false, 1009), "profilePic", [], "any", false, false, false, 1009))), "html", null, true);
                yield "\" 
                                                         alt=\"";
                // line 1010
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1010, $this->source); })()), "user", [], "any", false, false, false, 1010), "prenom", [], "any", false, false, false, 1010), "html", null, true);
                yield "\" 
                                                         class=\"user-avatar-img\">
                                                ";
            } else {
                // line 1013
                yield "                                                    <div class=\"user-avatar\">
                                                        ";
                // line 1014
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1014, $this->source); })()), "user", [], "any", false, false, false, 1014), "prenom", [], "any", false, false, false, 1014))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1014, $this->source); })()), "user", [], "any", false, false, false, 1014), "nom", [], "any", false, false, false, 1014))), "html", null, true);
                yield "
                                                    </div>
                                                ";
            }
            // line 1017
            yield "                                                <div>
                                                    <strong>";
            // line 1018
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1018, $this->source); })()), "user", [], "any", false, false, false, 1018), "nom", [], "any", false, false, false, 1018), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1018, $this->source); })()), "user", [], "any", false, false, false, 1018), "prenom", [], "any", false, false, false, 1018), "html", null, true);
            yield "</strong>
                                                    <div class=\"text-muted small\">";
            // line 1019
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1019, $this->source); })()), "user", [], "any", false, false, false, 1019), "email", [], "any", false, false, false, 1019), "html", null, true);
            yield "</div>
                                                </div>
                                            </div>
                                        ";
        } else {
            // line 1023
            yield "                                            <em class=\"text-muted\">Non assigné</em>
                                        ";
        }
        // line 1025
        yield "                                    </div>
                                </div>

                                <!-- Section 5: Identifiants -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-identifier\"></i>
                                        </span>
                                        Identifiants
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-identifier label-icon\"></i>
                                        ID de l'objectif
                                    </div>
                                    <div class=\"detail-value\">
                                        <code>#";
        // line 1044
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1044, $this->source); })()), "id", [], "any", false, false, false, 1044), "html", null, true);
        yield "</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class=\"action-buttons\">
                    <a href=\"";
        // line 1054
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\" class=\"btn-custom-secondary\">
                        <i class=\"mdi mdi-arrow-left\"></i>
                        Retour à la liste
                    </a>
                    <a href=\"";
        // line 1058
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1058, $this->source); })()), "id", [], "any", false, false, false, 1058)]), "html", null, true);
        yield "\" class=\"btn-custom-primary\">
                        <i class=\"mdi mdi-pencil\"></i>
                        Modifier l'objectif
                    </a>
                    <form method=\"post\" action=\"";
        // line 1062
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1062, $this->source); })()), "id", [], "any", false, false, false, 1062)]), "html", null, true);
        yield "\" 
                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ? Cette action est irréversible.');\" 
                          style=\"display: inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1065
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1065, $this->source); })()), "id", [], "any", false, false, false, 1065))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn-custom-danger\">
                            <i class=\"mdi mdi-delete\"></i>
                            Supprimer
                        </button>
                    </form>
                </div>
                
                <!-- Info Cards -->
                <div class=\"row mt-4\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--danger-gradient);\">
                                    <i class=\"mdi mdi-alert-circle\"></i>
                                </div>
                                <h6>Statistiques de l'objectif</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-progress-clock\"></i>
                                    <span><strong>Temps restant:</strong> 
                                        ";
        // line 1087
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1087, $this->source); })()), "dateFin", [], "any", false, false, false, 1087)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1088
            yield "                                            ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate("now");
            // line 1089
            yield "                                            ";
            if (((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 1089, $this->source); })()) < $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1089, $this->source); })()), "dateFin", [], "any", false, false, false, 1089)))) {
                // line 1090
                yield "                                                ";
                $context["difference"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1090, $this->source); })()), "dateFin", [], "any", false, false, false, 1090)), "diff", [(isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 1090, $this->source); })())], "method", false, false, false, 1090);
                // line 1091
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 1091, $this->source); })()), "days", [], "any", false, false, false, 1091), "html", null, true);
                yield " jour";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 1091, $this->source); })()), "days", [], "any", false, false, false, 1091) > 1)) ? ("s") : (""));
                yield "
                                            ";
            } else {
                // line 1093
                yield "                                                <span class=\"text-danger\">Dépassé</span>
                                            ";
            }
            // line 1095
            yield "                                        ";
        } else {
            // line 1096
            yield "                                            Non définie
                                        ";
        }
        // line 1098
        yield "                                    </span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-speedometer\"></i>
                                    <span><strong>Rythme requis:</strong> 
                                        ";
        // line 1103
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1103, $this->source); })()), "dateDebut", [], "any", false, false, false, 1103) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1103, $this->source); })()), "dateFin", [], "any", false, false, false, 1103))) {
            // line 1104
            yield "                                            ";
            $context["totalDays"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1104, $this->source); })()), "dateFin", [], "any", false, false, false, 1104)), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1104, $this->source); })()), "dateDebut", [], "any", false, false, false, 1104))], "method", false, false, false, 1104), "days", [], "any", false, false, false, 1104);
            // line 1105
            yield "                                            ";
            if (((isset($context["totalDays"]) || array_key_exists("totalDays", $context) ? $context["totalDays"] : (function () { throw new RuntimeError('Variable "totalDays" does not exist.', 1105, $this->source); })()) > 0)) {
                // line 1106
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1106, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 1106) / (isset($context["totalDays"]) || array_key_exists("totalDays", $context) ? $context["totalDays"] : (function () { throw new RuntimeError('Variable "totalDays" does not exist.', 1106, $this->source); })())), 2), "html", null, true);
                yield "% par jour
                                            ";
            } else {
                // line 1108
                yield "                                                Objectif journalier
                                            ";
            }
            // line 1110
            yield "                                        ";
        } else {
            // line 1111
            yield "                                            Non calculable
                                        ";
        }
        // line 1113
        yield "                                    </span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chart-line\"></i>
                                    <span><strong>Score Moyen Actuel:</strong> ";
        // line 1117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1117, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 1117), "html", null, true);
        yield "%</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-target\"></i>
                                    <span><strong>Type:</strong> ";
        // line 1121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1121, $this->source); })()), "type", [], "any", false, false, false, 1121), "html", null, true);
        yield "</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--health-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils pour cet objectif</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>
                                        ";
        // line 1139
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1139, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 1139) < 25)) {
            // line 1140
            yield "                                            Commencez par de petites actions quotidiennes
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1141
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1141, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 1141) < 50)) {
            // line 1142
            yield "                                            Continuez sur votre lancée, vous êtes sur la bonne voie!
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1143
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1143, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 1143) < 75)) {
            // line 1144
            yield "                                            Vous avez dépassé la moitié, ne relâchez pas vos efforts
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1145
(isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1145, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 1145) < 100)) {
            // line 1146
            yield "                                            Plus que quelques efforts pour atteindre votre objectif!
                                        ";
        } else {
            // line 1148
            yield "                                            Félicitations! Vous avez atteint votre objectif
                                        ";
        }
        // line 1150
        yield "                                    </span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Suivi régulièrement par vos entres de journal</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Révisez votre objectif si nécessaire</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Célébrez chaque étape réussie</span>
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
        // line 1174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        <i class=\"mdi mdi-eye text-info\"></i>
                        Consultation de l'objectif #";
        // line 1178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 1178, $this->source); })()), "id", [], "any", false, false, false, 1178), "html", null, true);
        yield "
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .detail-row {
                animation: fadeIn 0.5s ease forwards;
                opacity: 0;
            }
            
            .detail-row:nth-child(1) { animation-delay: 0.1s; }
            .detail-row:nth-child(2) { animation-delay: 0.2s; }
            .detail-row:nth-child(3) { animation-delay: 0.3s; }
            .detail-row:nth-child(4) { animation-delay: 0.4s; }
            .detail-row:nth-child(5) { animation-delay: 0.5s; }
            .detail-row:nth-child(6) { animation-delay: 0.6s; }
            .detail-row:nth-child(7) { animation-delay: 0.7s; }
            .detail-row:nth-child(8) { animation-delay: 0.8s; }
            .detail-row:nth-child(9) { animation-delay: 0.9s; }
            
            .progress-bar {
                transition: width 2s ease-in-out;
            }
            
            @keyframes fadeOut {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
        
        // Animate progress bar on load
        setTimeout(() => {
            const progressBar = document.querySelector('.progress-bar');
            if (progressBar) {
                const currentWidth = progressBar.style.width;
                progressBar.style.width = '0%';
                setTimeout(() => {
                    progressBar.style.width = currentWidth;
                }, 500);
            }
        }, 1000);
        
        // Auto-hide flash messages
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-custom');
            alerts.forEach(alert => {
                alert.style.animation = 'fadeOut 0.5s ease';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
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
        return "objectif_sante/show.html.twig";
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
        return array (  1645 => 1178,  1638 => 1174,  1612 => 1150,  1608 => 1148,  1604 => 1146,  1602 => 1145,  1599 => 1144,  1597 => 1143,  1594 => 1142,  1592 => 1141,  1589 => 1140,  1587 => 1139,  1566 => 1121,  1559 => 1117,  1553 => 1113,  1549 => 1111,  1546 => 1110,  1542 => 1108,  1536 => 1106,  1533 => 1105,  1530 => 1104,  1528 => 1103,  1521 => 1098,  1517 => 1096,  1514 => 1095,  1510 => 1093,  1502 => 1091,  1499 => 1090,  1496 => 1089,  1493 => 1088,  1491 => 1087,  1466 => 1065,  1460 => 1062,  1453 => 1058,  1446 => 1054,  1433 => 1044,  1412 => 1025,  1408 => 1023,  1401 => 1019,  1395 => 1018,  1392 => 1017,  1385 => 1014,  1382 => 1013,  1376 => 1010,  1371 => 1009,  1369 => 1008,  1366 => 1007,  1364 => 1006,  1343 => 987,  1338 => 984,  1330 => 982,  1328 => 981,  1322 => 980,  1318 => 978,  1315 => 977,  1312 => 976,  1310 => 975,  1306 => 974,  1293 => 964,  1269 => 943,  1261 => 938,  1257 => 937,  1240 => 923,  1235 => 921,  1221 => 910,  1218 => 909,  1216 => 908,  1215 => 907,  1214 => 906,  1213 => 905,  1209 => 904,  1188 => 885,  1184 => 883,  1178 => 881,  1176 => 880,  1162 => 869,  1147 => 857,  1104 => 817,  1094 => 810,  1082 => 800,  1076 => 799,  1065 => 794,  1059 => 791,  1053 => 789,  1048 => 788,  1044 => 787,  1020 => 767,  1005 => 755,  991 => 745,  989 => 744,  985 => 742,  980 => 739,  976 => 737,  972 => 735,  968 => 733,  966 => 732,  961 => 730,  954 => 729,  952 => 728,  945 => 723,  938 => 720,  932 => 716,  928 => 714,  924 => 712,  922 => 711,  914 => 708,  910 => 706,  903 => 703,  900 => 702,  894 => 699,  889 => 698,  887 => 697,  884 => 696,  882 => 695,  840 => 656,  824 => 643,  814 => 636,  797 => 622,  752 => 580,  734 => 564,  729 => 561,  725 => 559,  721 => 557,  717 => 555,  715 => 554,  710 => 552,  703 => 551,  701 => 550,  696 => 547,  690 => 545,  687 => 544,  680 => 541,  677 => 540,  671 => 537,  666 => 536,  663 => 535,  661 => 534,  650 => 526,  646 => 525,  641 => 523,  637 => 522,  131 => 19,  127 => 18,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Objectif de Santé - {{ objectif_sante.titre }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Détails de l'Objectif de Santé</title>
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
        --health-gradient: linear-gradient(135deg, #fa8bff 0%, #2bd2ff 90%, #2bff88 100%);
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
        background: var(--health-gradient);
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

      /* Detail Section Headers */
      .detail-section-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 1rem 1.5rem;
        border-radius: 10px;
        margin: 2rem 0 1.5rem;
        border-left: 4px solid;
        border-image: var(--health-gradient) 1;
      }

      .detail-section-header h5 {
        margin: 0;
        color: #495057;
        font-weight: 600;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }

      .detail-section-header .section-icon {
        width: 35px;
        height: 35px;
        background: var(--health-gradient);
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
      }

      /* Detail Display */
      .detail-row {
        padding: 1.25rem;
        border-bottom: 1px solid #e9ecef;
        display: flex;
        align-items: flex-start;
      }

      .detail-row:last-child {
        border-bottom: none;
      }

      .detail-label {
        font-weight: 600;
        color: #495057;
        min-width: 200px;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        font-size: 0.95rem;
      }

      .detail-label .label-icon {
        color: #667eea;
        font-size: 1.1rem;
        min-width: 24px;
      }

      .detail-value {
        flex: 1;
        color: #6c757d;
        font-size: 0.95rem;
      }

      .detail-value strong {
        color: #495057;
        font-weight: 600;
      }

      /* Badge Styles */
      .detail-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
        margin: 0.25rem 0;
      }

      .badge-type { background: var(--info-gradient); color: white; }
      .status-en-cours { background: var(--info-gradient); color: white; }
      .status-termine { background: var(--success-gradient); color: white; }
      .status-abandonne { background: linear-gradient(135deg, #838383 0%, #666666 100%); color: white; }
      .status-en-pause { background: var(--warning-gradient); color: white; }
      .priority-haute { background: var(--danger-gradient); color: white; }
      .priority-moyenne { background: var(--warning-gradient); color: white; }
      .priority-faible { background: var(--success-gradient); color: white; }

      /* Progress Bar */
      .progress-custom {
        height: 12px;
        border-radius: 10px;
        background: #e9ecef;
        overflow: hidden;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 0.5rem 0;
      }

      .progress-custom .progress-bar {
        background: var(--health-gradient);
        border-radius: 10px;
        transition: width 0.6s ease;
      }

      /* Action Buttons */
      .btn-custom-primary {
        background: var(--health-gradient);
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
        box-shadow: 0 6px 20px rgba(250, 139, 255, 0.4);
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

      .btn-custom-danger {
        background: var(--danger-gradient);
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

      .btn-custom-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(245, 87, 108, 0.4);
        color: white;
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
        background: var(--health-gradient);
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

      /* Action Buttons Container */
      .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding: 1.5rem;
        background: #f8f9fa;
        border-radius: 12px;
        border: 2px dashed #e9ecef;
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

      /* Badge User Roles */
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

      /* Responsive Design */
      @media (max-width: 768px) {
        .page-header-enhanced .title-section {
          flex-direction: column;
          text-align: center;
        }

        .detail-row {
          flex-direction: column;
          gap: 0.5rem;
        }

        .detail-label {
          min-width: 100%;
        }

        .action-buttons {
          flex-direction: column;
        }

        .btn-custom-primary,
        .btn-custom-secondary,
        .btn-custom-danger {
          width: 100%;
          justify-content: center;
        }

        .card-header-custom {
          flex-direction: column;
          text-align: center;
        }
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
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_tache_index') }}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-checkbox-marked-circle-outline\"></i></span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-alert-circle-outline\"></i></span>
              <span class=\"menu-title\">Alertes</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"{{ path('app_objectif_sante_index') }}\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Objectifs de santé</span>
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un objectif...\">
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
                      <div class=\"preview-icon bg-success rounded-circle\">
                        <i class=\"mdi mdi-heart-pulse\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Objectif atteint!</p>
                      <p class=\"text-muted ellipsis mb-0\">Félicitations</p>
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
                            <i class=\"mdi mdi-eye\"></i>
                        </div>
                        <div>
                            <h3>Détails de l'Objectif de Santé</h3>
                            <p class=\"subtitle\">
                                Visualisez toutes les informations de l'objectif \"{{ objectif_sante.titre }}\"
                            </p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_objectif_sante_index') }}\">
                                    <i class=\"mdi mdi-heart-pulse me-1\"></i>
                                    Liste des Objectifs
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                Détails de l'objectif
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Main Details Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header-custom\">
                                <div class=\"icon\">
                                    <i class=\"mdi mdi-file-document\"></i>
                                </div>
                                <h4>Informations détaillées</h4>
                            </div>
                            <div class=\"card-body p-0\">
                                
                                <!-- Section 1: Informations Générales -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-information\"></i>
                                        </span>
                                        Informations Générales
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-format-title label-icon\"></i>
                                        Titre
                                    </div>
                                    <div class=\"detail-value\">
                                        <strong>{{ objectif_sante.titre }}</strong>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-tag label-icon\"></i>
                                        Type d'objectif
                                    </div>
                                    <div class=\"detail-value\">
                                        <span class=\"detail-badge badge-type\">
                                            <i class=\"mdi mdi-tag\"></i>
                                            {{ objectif_sante.type }}
                                        </span>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-target label-icon\"></i>
                                        Valeur cible
                                    </div>
                                    <div class=\"detail-value\">
                                        {% if objectif_sante.valeurCible %}
                                            <strong>{{ objectif_sante.getValeurCibleAvecUnite() }}</strong>
                                        {% else %}
                                            <em class=\"text-muted\">Non définie</em>
                                        {% endif %}
                                    </div>
                                </div>

                                <!-- Section 2: État & Priorité -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-chart-line\"></i>
                                        </span>
                                        État & Priorité
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-progress-clock label-icon\"></i>
                                        Statut
                                    </div>
                                    <div class=\"detail-value\">
                                        <span class=\"detail-badge status-{{ objectif_sante.statut|lower|replace({' ': '-'}) }}\">
                                            <i class=\"mdi mdi-{{ 
                                                objectif_sante.statut == 'En cours' ? 'progress-clock' : 
                                                objectif_sante.statut == 'Terminé' ? 'check-circle' : 
                                                objectif_sante.statut == 'Abandonné' ? 'close-circle' : 
                                                'pause-circle' }}\"></i>
                                            {{ objectif_sante.statut }}
                                        </span>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-flag label-icon\"></i>
                                        Priorité
                                    </div>
                                    <div class=\"detail-value\">
                                        <span class=\"detail-badge priority-{{ objectif_sante.priorite|lower }}\">
                                            <i class=\"mdi mdi-flag\"></i>
                                            {{ objectif_sante.priorite }}
                                        </span>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
    <div class=\"detail-label\">
        <i class=\"mdi mdi-progress-check label-icon\"></i>
        Score Moyen
    </div>
    <div class=\"detail-value\">
        <div class=\"d-flex align-items-center gap-3\">
            <div class=\"progress w-100\" style=\"height: 12px; border-radius: 10px; background: #e9ecef;\">
                <div class=\"progress-bar\" role=\"progressbar\" 
                     style=\"width: {{ objectif_sante.scoreMoyen }}%; background: linear-gradient(135deg, #fa8bff 0%, #2bd2ff 90%, #2bff88 100%); border-radius: 10px;\" 
                     aria-valuenow=\"{{ objectif_sante.scoreMoyen }}\" 
                     aria-valuemin=\"0\" 
                     aria-valuemax=\"100\">
                </div>
            </div>
            <strong style=\"min-width: 60px;\">{{ objectif_sante.scoreMoyen }}%</strong>
        </div>
    </div>
</div>

                                <!-- Section 3: Dates -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-calendar-clock\"></i>
                                        </span>
                                        Dates
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-calendar-start label-icon\"></i>
                                        Date de début
                                    </div>
                                    <div class=\"detail-value\">
                                        <strong>{{ objectif_sante.dateDebut ? objectif_sante.dateDebut|date('d/m/Y') : 'Non définie' }}</strong>
                                    </div>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-calendar-end label-icon\"></i>
                                        Date de fin
                                    </div>
                                    <div class=\"detail-value\">
                                        <strong>{{ objectif_sante.dateFin ? objectif_sante.dateFin|date('d/m/Y') : 'Non définie' }}</strong>
                                        {% if objectif_sante.dateDebut and objectif_sante.dateFin %}
                                            {% set difference = date(objectif_sante.dateFin).diff(date(objectif_sante.dateDebut)) %}
                                            {% set days = difference.days %}
                                            <div class=\"mt-1\">
                                                <small class=\"text-muted\">
                                                    Durée: {{ days }} jour{{ days > 1 ? 's' : '' }}
                                                    {% if days >= 7 %}
                                                        ({{ (days / 7)|round(1) }} semaine{{ (days / 7) >= 2 ? 's' : '' }})
                                                    {% endif %}
                                                </small>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>

                                <!-- Section 4: Attribution -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-account\"></i>
                                        </span>
                                        Attribution
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-account-circle label-icon\"></i>
                                        Utilisateur assigné
                                    </div>
                                    <div class=\"detail-value\">
                                        {% if objectif_sante.user %}
                                            <div class=\"d-flex align-items-center gap-2\">
                                                {% if objectif_sante.user.profilePic %}
                                                    <img src=\"{{ asset('uploads/profile_pics/' ~ objectif_sante.user.profilePic) }}\" 
                                                         alt=\"{{ objectif_sante.user.prenom }}\" 
                                                         class=\"user-avatar-img\">
                                                {% else %}
                                                    <div class=\"user-avatar\">
                                                        {{ objectif_sante.user.prenom|first|upper }}{{ objectif_sante.user.nom|first|upper }}
                                                    </div>
                                                {% endif %}
                                                <div>
                                                    <strong>{{ objectif_sante.user.nom }} {{ objectif_sante.user.prenom }}</strong>
                                                    <div class=\"text-muted small\">{{ objectif_sante.user.email }}</div>
                                                </div>
                                            </div>
                                        {% else %}
                                            <em class=\"text-muted\">Non assigné</em>
                                        {% endif %}
                                    </div>
                                </div>

                                <!-- Section 5: Identifiants -->
                                <div class=\"detail-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-identifier\"></i>
                                        </span>
                                        Identifiants
                                    </h5>
                                </div>

                                <div class=\"detail-row\">
                                    <div class=\"detail-label\">
                                        <i class=\"mdi mdi-identifier label-icon\"></i>
                                        ID de l'objectif
                                    </div>
                                    <div class=\"detail-value\">
                                        <code>#{{ objectif_sante.id }}</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class=\"action-buttons\">
                    <a href=\"{{ path('app_objectif_sante_index') }}\" class=\"btn-custom-secondary\">
                        <i class=\"mdi mdi-arrow-left\"></i>
                        Retour à la liste
                    </a>
                    <a href=\"{{ path('app_objectif_sante_edit', {'id': objectif_sante.id}) }}\" class=\"btn-custom-primary\">
                        <i class=\"mdi mdi-pencil\"></i>
                        Modifier l'objectif
                    </a>
                    <form method=\"post\" action=\"{{ path('app_objectif_sante_delete', {'id': objectif_sante.id}) }}\" 
                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ? Cette action est irréversible.');\" 
                          style=\"display: inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif_sante.id) }}\">
                        <button type=\"submit\" class=\"btn-custom-danger\">
                            <i class=\"mdi mdi-delete\"></i>
                            Supprimer
                        </button>
                    </form>
                </div>
                
                <!-- Info Cards -->
                <div class=\"row mt-4\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--danger-gradient);\">
                                    <i class=\"mdi mdi-alert-circle\"></i>
                                </div>
                                <h6>Statistiques de l'objectif</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-progress-clock\"></i>
                                    <span><strong>Temps restant:</strong> 
                                        {% if objectif_sante.dateFin %}
                                            {% set now = date('now') %}
                                            {% if now < date(objectif_sante.dateFin) %}
                                                {% set difference = date(objectif_sante.dateFin).diff(now) %}
                                                {{ difference.days }} jour{{ difference.days > 1 ? 's' : '' }}
                                            {% else %}
                                                <span class=\"text-danger\">Dépassé</span>
                                            {% endif %}
                                        {% else %}
                                            Non définie
                                        {% endif %}
                                    </span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-speedometer\"></i>
                                    <span><strong>Rythme requis:</strong> 
                                        {% if objectif_sante.dateDebut and objectif_sante.dateFin %}
                                            {% set totalDays = date(objectif_sante.dateFin).diff(date(objectif_sante.dateDebut)).days %}
                                            {% if totalDays > 0 %}
                                                {{ (objectif_sante.scoreMoyen / totalDays)|round(2) }}% par jour
                                            {% else %}
                                                Objectif journalier
                                            {% endif %}
                                        {% else %}
                                            Non calculable
                                        {% endif %}
                                    </span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-chart-line\"></i>
                                    <span><strong>Score Moyen Actuel:</strong> {{ objectif_sante.scoreMoyen }}%</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-target\"></i>
                                    <span><strong>Type:</strong> {{ objectif_sante.type }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"info-card\">
                            <div class=\"info-card-header\">
                                <div class=\"icon\" style=\"background: var(--health-gradient);\">
                                    <i class=\"mdi mdi-lightbulb-on\"></i>
                                </div>
                                <h6>Conseils pour cet objectif</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>
                                        {% if objectif_sante.scoreMoyen < 25 %}
                                            Commencez par de petites actions quotidiennes
                                        {% elseif objectif_sante.scoreMoyen < 50 %}
                                            Continuez sur votre lancée, vous êtes sur la bonne voie!
                                        {% elseif objectif_sante.scoreMoyen < 75 %}
                                            Vous avez dépassé la moitié, ne relâchez pas vos efforts
                                        {% elseif objectif_sante.scoreMoyen < 100 %}
                                            Plus que quelques efforts pour atteindre votre objectif!
                                        {% else %}
                                            Félicitations! Vous avez atteint votre objectif
                                        {% endif %}
                                    </span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Suivi régulièrement par vos entres de journal</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Révisez votre objectif si nécessaire</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span>Célébrez chaque étape réussie</span>
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
                        <i class=\"mdi mdi-eye text-info\"></i>
                        Consultation de l'objectif #{{ objectif_sante.id }}
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- JavaScript for enhancements -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .detail-row {
                animation: fadeIn 0.5s ease forwards;
                opacity: 0;
            }
            
            .detail-row:nth-child(1) { animation-delay: 0.1s; }
            .detail-row:nth-child(2) { animation-delay: 0.2s; }
            .detail-row:nth-child(3) { animation-delay: 0.3s; }
            .detail-row:nth-child(4) { animation-delay: 0.4s; }
            .detail-row:nth-child(5) { animation-delay: 0.5s; }
            .detail-row:nth-child(6) { animation-delay: 0.6s; }
            .detail-row:nth-child(7) { animation-delay: 0.7s; }
            .detail-row:nth-child(8) { animation-delay: 0.8s; }
            .detail-row:nth-child(9) { animation-delay: 0.9s; }
            
            .progress-bar {
                transition: width 2s ease-in-out;
            }
            
            @keyframes fadeOut {
                from {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
        
        // Animate progress bar on load
        setTimeout(() => {
            const progressBar = document.querySelector('.progress-bar');
            if (progressBar) {
                const currentWidth = progressBar.style.width;
                progressBar.style.width = '0%';
                setTimeout(() => {
                    progressBar.style.width = currentWidth;
                }, 500);
            }
        }, 1000);
        
        // Auto-hide flash messages
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-custom');
            alerts.forEach(alert => {
                alert.style.animation = 'fadeOut 0.5s ease';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
    });
</script>
{% endblock %}", "objectif_sante/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\objectif_sante\\show.html.twig");
    }
}
