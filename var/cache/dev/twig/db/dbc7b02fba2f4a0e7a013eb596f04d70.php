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

/* suivi_bien_etre/new_for_objectif.html.twig */
class __TwigTemplate_edf20e58c583d2829c697a7b17186abf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/new_for_objectif.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/new_for_objectif.html.twig"));

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

        yield "Nouveau suivi - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
    <title>ESPRIT - ";
        // line 11
        yield (((array_key_exists("suivi", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11))) ? ("Modifier le Suivi") : ("Nouveau Suivi"));
        yield "</title>
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

      /* Form Section Headers */
      .form-section-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 1rem 1.5rem;
        border-radius: 10px;
        margin: 2rem 0 1.5rem;
        border-left: 4px solid;
        border-image: var(--health-gradient) 1;
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
        background: var(--health-gradient);
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
        background: var(--health-gradient);
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
        background: var(--health-gradient);
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
        justify-content: space-between;
        gap: 1rem;
        border: 2px dashed #e9ecef;
      }

      .form-actions-left {
        display: flex;
        gap: 1rem;
      }

      .form-actions-right {
        display: flex;
        gap: 1rem;
      }

      /* Current Info Display */
      .current-info-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border: 2px solid #dee2e6;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
      }

      .current-info-card h5 {
        color: #495057;
        font-weight: 600;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }

      .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #dee2e6;
      }

      .info-row:last-child {
        border-bottom: none;
      }

      .info-label {
        font-weight: 600;
        color: #6c757d;
        font-size: 0.9rem;
      }

      .info-value {
        font-weight: 500;
        color: #495057;
      }

      /* Status & Priority Badges */
      .status-badge, .priority-badge, .type-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }

      .status-en-cours { background: var(--info-gradient); color: white; }
      .status-termine { background: var(--success-gradient); color: white; }
      .status-abandonne { background: linear-gradient(135deg, #838383 0%, #666666 100%); color: white; }
      .status-en-pause { background: var(--warning-gradient); color: white; }

      .priority-haute { background: var(--danger-gradient); color: white; }
      .priority-moyenne { background: var(--warning-gradient); color: white; }
      .priority-faible { background: var(--success-gradient); color: white; }

      /* Responsive Design */
      @media (max-width: 768px) {
        .page-header-enhanced .title-section {
          flex-direction: column;
          text-align: center;
        }

        .form-actions {
          flex-direction: column;
        }

        .form-actions-left,
        .form-actions-right {
          flex-direction: column;
          width: 100%;
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

      /* Sidebar & Navbar */
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

      /* Slider styles for ratings */
      .rating-slider {
        width: 100%;
        height: 10px;
        -webkit-appearance: none;
        appearance: none;
        background: #e9ecef;
        border-radius: 5px;
        outline: none;
      }

      .rating-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: var(--health-gradient);
        cursor: pointer;
        border: 3px solid white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }

      .rating-value {
        font-weight: bold;
        font-size: 1.2rem;
        color: #667eea;
        margin-left: 10px;
      }

      .rating-emoji {
        font-size: 1.5rem;
        margin-left: 10px;
      }

      .rating-labels {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
        font-size: 0.8rem;
        color: #6c757d;
      }

      /* Mood selector */
      .mood-selector {
        display: flex;
        gap: 1rem;
        margin-top: 0.5rem;
      }

      .mood-option {
        flex: 1;
        text-align: center;
        padding: 1rem;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .mood-option:hover {
        border-color: #667eea;
        background: #f8f9fa;
      }

      .mood-option.selected {
        border-color: #667eea;
        background: rgba(102, 126, 234, 0.1);
      }

      .mood-option i {
        font-size: 2rem;
        margin-bottom: 0.5rem;
      }

      .mood-option .mood-label {
        font-weight: 600;
        color: #495057;
      }

      .mood-option .mood-desc {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 0.25rem;
      }
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 718
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 721
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
            <img src=\"";
        // line 722
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
        // line 730
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 730, $this->source); })()), "user", [], "any", false, false, false, 730)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 731
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 731, $this->source); })()), "user", [], "any", false, false, false, 731), "profilePic", [], "any", false, false, false, 731)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 732
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 732, $this->source); })()), "user", [], "any", false, false, false, 732), "profilePic", [], "any", false, false, false, 732))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 733
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 733, $this->source); })()), "user", [], "any", false, false, false, 733), "prenom", [], "any", false, false, false, 733), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 736
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 737
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 737, $this->source); })()), "user", [], "any", false, false, false, 737), "prenom", [], "any", false, false, false, 737))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 737, $this->source); })()), "user", [], "any", false, false, false, 737), "nom", [], "any", false, false, false, 737))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 740
            yield "                  ";
        } else {
            // line 741
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 743
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 746
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 746, $this->source); })()), "user", [], "any", false, false, false, 746)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 747
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 747, $this->source); })()), "user", [], "any", false, false, false, 747), "prenom", [], "any", false, false, false, 747), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 747, $this->source); })()), "user", [], "any", false, false, false, 747), "nom", [], "any", false, false, false, 747), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 748
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 748, $this->source); })()), "user", [], "any", false, false, false, 748), "email", [], "any", false, false, false, 748), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 750
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 750, $this->source); })()), "user", [], "any", false, false, false, 750), "roles", [], "any", false, false, false, 750))) {
                // line 751
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 753
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 755
            yield "                    </div>
                  ";
        } else {
            // line 757
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 760
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
        // line 776
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
        // line 818
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
        // line 832
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Objectifs de santé</span>
            </a>
          </li>
          
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 839
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
        // line 852
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un suivi...\">
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
                      <p class=\"preview-subject mb-1\">Suivi enregistré!</p>
                      <p class=\"text-muted ellipsis mb-0\">Votre suivi quotidien a été sauvegardé</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 891
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 891, $this->source); })()), "user", [], "any", false, false, false, 891)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 892
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 893
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 893, $this->source); })()), "user", [], "any", false, false, false, 893), "profilePic", [], "any", false, false, false, 893)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 894
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 894, $this->source); })()), "user", [], "any", false, false, false, 894), "profilePic", [], "any", false, false, false, 894))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 895
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 895, $this->source); })()), "user", [], "any", false, false, false, 895), "prenom", [], "any", false, false, false, 895), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 898
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 899
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 899, $this->source); })()), "user", [], "any", false, false, false, 899), "prenom", [], "any", false, false, false, 899))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 899, $this->source); })()), "user", [], "any", false, false, false, 899), "nom", [], "any", false, false, false, 899))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 902
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 904
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 904, $this->source); })()), "user", [], "any", false, false, false, 904), "prenom", [], "any", false, false, false, 904), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 904, $this->source); })()), "user", [], "any", false, false, false, 904), "nom", [], "any", false, false, false, 904), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 907
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 907, $this->source); })()), "user", [], "any", false, false, false, 907), "roles", [], "any", false, false, false, 907))) {
                // line 908
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 910
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 912
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 916
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 919
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 924
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 924, $this->source); })()), "user", [], "any", false, false, false, 924)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 925
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 925, $this->source); })()), "user", [], "any", false, false, false, 925), "prenom", [], "any", false, false, false, 925), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 925, $this->source); })()), "user", [], "any", false, false, false, 925), "nom", [], "any", false, false, false, 925), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 926
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 926, $this->source); })()), "user", [], "any", false, false, false, 926), "email", [], "any", false, false, false, 926), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 928
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 928, $this->source); })()), "user", [], "any", false, false, false, 928), "roles", [], "any", false, false, false, 928))) {
                // line 929
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 931
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 933
            yield "                      </small>
                    ";
        } else {
            // line 935
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 938
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 940
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 940, $this->source); })()), "user", [], "any", false, false, false, 940)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 941
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 941, $this->source); })()), "user", [], "any", false, false, false, 941), "id", [], "any", false, false, false, 941)]), "html", null, true);
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
            // line 951
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 951, $this->source); })()), "user", [], "any", false, false, false, 951), "id", [], "any", false, false, false, 951)]), "html", null, true);
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
        // line 963
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
        // line 983
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 983, $this->source); })()), "flashes", [], "any", false, false, false, 983));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 984
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 985
                yield "                        <div class=\"alert-custom alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield "\">
                            <div class=\"alert-icon\">
                                <i class=\"mdi mdi-";
                // line 987
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
                            </div>
                            <div class=\"flex-grow-1\">
                                ";
                // line 990
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
            // line 995
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 996
        yield "
                <!-- Enhanced Page Header -->
                <div class=\"page-header-enhanced\">
                    <div class=\"title-section\">
                        <div class=\"title-icon\">
                            <i class=\"mdi mdi-";
        // line 1001
        yield (((array_key_exists("suivi", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1001, $this->source); })()), "id", [], "any", false, false, false, 1001))) ? ("pencil-box") : ("clipboard-plus"));
        yield "\"></i>
                        </div>
                        <div>
                            <h3>";
        // line 1004
        yield (((array_key_exists("suivi", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1004, $this->source); })()), "id", [], "any", false, false, false, 1004))) ? ("Modifier le Suivi") : ("Nouveau Suivi"));
        yield "</h3>
                            <p class=\"subtitle\">
                                ";
        // line 1006
        if ((array_key_exists("suivi", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1006, $this->source); })()), "id", [], "any", false, false, false, 1006))) {
            // line 1007
            yield "                                    Modifiez votre suivi du ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1007, $this->source); })()), "dateSaisie", [], "any", false, false, false, 1007), "d/m/Y"), "html", null, true);
            yield "
                                ";
        } else {
            // line 1009
            yield "                                    Enregistrez votre suivi quotidien pour l'objectif \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1009, $this->source); })()), "titre", [], "any", false, false, false, 1009), "html", null, true);
            yield "\"
                                ";
        }
        // line 1011
        yield "                            </p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 1017
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
                                    <i class=\"mdi mdi-heart-pulse me-1\"></i>
                                    Objectifs de santé
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 1023
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1023, $this->source); })()), "id", [], "any", false, false, false, 1023)]), "html", null, true);
        yield "\">
                                    <i class=\"mdi mdi-eye me-1\"></i>
                                    ";
        // line 1025
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1025, $this->source); })()), "titre", [], "any", false, false, false, 1025), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1025, $this->source); })()), "titre", [], "any", false, false, false, 1025)) > 30)) ? ("...") : (""));
        yield "
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 1029
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1029, $this->source); })()), "id", [], "any", false, false, false, 1029)]), "html", null, true);
        yield "\">
                                    <i class=\"mdi mdi-clipboard-text me-1\"></i>
                                    Suivis
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                ";
        // line 1035
        yield (((array_key_exists("suivi", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1035, $this->source); })()), "id", [], "any", false, false, false, 1035))) ? ("Modification") : ("Nouveau"));
        yield "
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Current Info (Edit Mode Only) -->
                ";
        // line 1042
        if ((array_key_exists("suivi", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1042, $this->source); })()), "id", [], "any", false, false, false, 1042))) {
            // line 1043
            yield "                <div class=\"current-info-card\">
                    <h5>
                        <i class=\"mdi mdi-information\"></i>
                        Informations actuelles du suivi
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Date de saisie:</span>
                                <span class=\"info-value\">";
            // line 1052
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1052, $this->source); })()), "dateSaisie", [], "any", false, false, false, 1052), "d/m/Y"), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Humeur:</span>
                                <span class=\"info-value\">
                                    ";
            // line 1057
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1057, $this->source); })()), "humeur", [], "any", false, false, false, 1057) == 1)) {
                yield "😢 Très mauvaise
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1058
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1058, $this->source); })()), "humeur", [], "any", false, false, false, 1058) == 2)) {
                yield "😔 Mauvaise
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1059
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1059, $this->source); })()), "humeur", [], "any", false, false, false, 1059) == 3)) {
                yield "😐 Neutre
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1060
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1060, $this->source); })()), "humeur", [], "any", false, false, false, 1060) == 4)) {
                yield "😊 Bonne
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 1061
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1061, $this->source); })()), "humeur", [], "any", false, false, false, 1061) == 5)) {
                yield "😄 Excellente
                                    ";
            } else {
                // line 1062
                yield "Non définie
                                    ";
            }
            // line 1064
            yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Niveau d'énergie:</span>
                                <span class=\"info-value\">";
            // line 1068
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1068, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 1068)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1068, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 1068) . "/10"), "html", null, true)) : ("Non défini"));
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Qualité du sommeil:</span>
                                <span class=\"info-value\">";
            // line 1074
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1074, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 1074)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1074, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 1074) . "/10"), "html", null, true)) : ("Non défini"));
            yield "</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Niveau de stress:</span>
                                <span class=\"info-value\">";
            // line 1078
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1078, $this->source); })()), "niveauStress", [], "any", false, false, false, 1078)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1078, $this->source); })()), "niveauStress", [], "any", false, false, false, 1078) . "/10"), "html", null, true)) : ("Non défini"));
            yield "</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Qualité d'alimentation:</span>
                                <span class=\"info-value\">";
            // line 1082
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1082, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 1082)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1082, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 1082) . "/10"), "html", null, true)) : ("Non défini"));
            yield "</span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 1088
        yield "
                <!-- Main Form Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header-custom\">
                                <div class=\"icon\">
                                    <i class=\"mdi mdi-clipboard-text\"></i>
                                </div>
                                <h4>Formulaire de suivi</h4>
                            </div>
                            <div class=\"card-body p-4\">
                              ";
        // line 1100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1100, $this->source); })()), 'form_start', ["attr" => ["id" => "suivi-form", "novalidate" => "novalidate"]]);
        yield "



";
        // line 1105
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1105, $this->source); })()), "vars", [], "any", false, false, false, 1105), "submitted", [], "any", false, false, false, 1105) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1105, $this->source); })()), "vars", [], "any", false, false, false, 1105), "valid", [], "any", false, false, false, 1105))) {
            // line 1106
            yield "  <div class=\"alert alert-danger\">
    <i class=\"mdi mdi-alert-circle me-2\"></i>
    Veuillez corriger les erreurs ci-dessous.
  </div>
";
        }
        // line 1111
        yield "
";
        // line 1112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1112, $this->source); })()), 'errors');
        yield "





                                
                                <!-- Section 1: Date et Humeur -->
<div class=\"form-section-header\">
    <h5>
        <span class=\"section-icon\">
            <i class=\"mdi mdi-calendar\"></i>
        </span>
        Date & Humeur
    </h5>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            <label class=\"form-label-custom\">
                <i class=\"mdi mdi-calendar label-icon\"></i>
                Date de saisie
                <span class=\"required-star\">*</span>
            </label>
            ";
        // line 1137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1137, $this->source); })()), "dateSaisie", [], "any", false, false, false, 1137), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 1139
        yield "
            <div class=\"form-help-text\">
                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                <span>Date à laquelle vous effectuez ce suivi</span>
            </div>
            ";
        // line 1144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1144, $this->source); })()), "dateSaisie", [], "any", false, false, false, 1144), 'errors');
        yield "
        </div>
    </div>
    
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            <label class=\"form-label-custom\">
                <i class=\"mdi mdi-emoticon label-icon\"></i>
                Humeur générale
                <span class=\"required-star\">*</span>
            </label>
            ";
        // line 1155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1155, $this->source); })()), "humeur", [], "any", false, false, false, 1155), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 1157
        yield "
            <div class=\"form-help-text\">
                <i class=\"mdi mdi-information-outline\"></i>
                <span>Votre humeur générale aujourd'hui</span>
            </div>
            ";
        // line 1162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1162, $this->source); })()), "humeur", [], "any", false, false, false, 1162), 'errors');
        yield "
        </div>
    </div>
</div>

                              <!-- Section 2: Indicateurs de santé (0-10) -->
<div class=\"form-section-header\">
  <h5>
    <span class=\"section-icon\">
      <i class=\"mdi mdi-heart-pulse\"></i>
    </span>
    Indicateurs de Santé (0-10)
  </h5>
</div>

<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-group\">
      <label class=\"form-label-custom\">
        <i class=\"mdi mdi-battery-charging label-icon\"></i>
        Niveau d'énergie
      </label>
      ";
        // line 1184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1184, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 1184), 'widget', ["attr" => ["class" => "form-control", "min" => 0, "max" => 10]]);
        yield "
      ";
        // line 1185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1185, $this->source); })()), "niveauEnergie", [], "any", false, false, false, 1185), 'errors');
        yield "
    </div>
  </div>

  <div class=\"col-md-6\">
    <div class=\"form-group\">
      <label class=\"form-label-custom\">
        <i class=\"mdi mdi-bed label-icon\"></i>
        Qualité du sommeil
      </label>
      ";
        // line 1195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1195, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 1195), 'widget', ["attr" => ["class" => "form-control", "min" => 0, "max" => 10]]);
        yield "
      ";
        // line 1196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1196, $this->source); })()), "qualiteSommeil", [], "any", false, false, false, 1196), 'errors');
        yield "
    </div>
  </div>
</div>

<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-group\">
      <label class=\"form-label-custom\">
        <i class=\"mdi mdi-brain label-icon\"></i>
        Niveau de stress
      </label>
      ";
        // line 1208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1208, $this->source); })()), "niveauStress", [], "any", false, false, false, 1208), 'widget', ["attr" => ["class" => "form-control", "min" => 0, "max" => 10]]);
        yield "
      ";
        // line 1209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1209, $this->source); })()), "niveauStress", [], "any", false, false, false, 1209), 'errors');
        yield "
    </div>
  </div>

  <div class=\"col-md-6\">
    <div class=\"form-group\">
      <label class=\"form-label-custom\">
        <i class=\"mdi mdi-food label-icon\"></i>
        Qualité d'alimentation
      </label>
      ";
        // line 1219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1219, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 1219), 'widget', ["attr" => ["class" => "form-control", "min" => 0, "max" => 10]]);
        yield "
      ";
        // line 1220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1220, $this->source); })()), "qualiteAlimentation", [], "any", false, false, false, 1220), 'errors');
        yield "
    </div>
  </div>
</div>

                                <!-- Section 3: Notes -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-note-text\"></i>
                                        </span>
                                        Notes & Observations
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-pencil label-icon\"></i>
                                                Notes libres
                                            </label>
                                            ";
        // line 1242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1242, $this->source); })()), "notesLibres", [], "any", false, false, false, 1242), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Notez vos observations, vos progrès, vos difficultés, vos réussites..."]]);
        // line 1246
        yield "
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Exprimez-vous librement sur votre journée et votre progression</span>
                                            </div>
                                            ";
        // line 1251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1251, $this->source); })()), "notesLibres", [], "any", false, false, false, 1251), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    
                                    <div class=\"form-actions-right\">
                                        <a href=\"";
        // line 1260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1260, $this->source); })()), "id", [], "any", false, false, false, 1260)]), "html", null, true);
        yield "\" class=\"btn-custom-secondary\">
                                            <i class=\"mdi mdi-arrow-left\"></i>
                                            Annuler
                                        </a>
                                        <button type=\"submit\" class=\"btn-custom-primary\">
                                            <i class=\"mdi mdi-content-save\"></i>
                                            ";
        // line 1266
        yield (((array_key_exists("suivi", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 1266, $this->source); })()), "id", [], "any", false, false, false, 1266))) ? ("Enregistrer les modifications") : ("Créer le suivi"));
        yield "
                                        </button>
                                    </div>
                                </div>
                                
                                ";
        // line 1271
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1271, $this->source); })()), 'form_end');
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
                                <div class=\"icon\" style=\"background: var(--info-gradient);\">
                                    <i class=\"mdi mdi-chart-line\"></i>
                                </div>
                                <h6>Pourquoi suivre ?</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span><strong>Visualisez vos progrès</strong> au fil du temps</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span><strong>Identifiez les patterns</strong> dans vos habitudes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span><strong>Restez motivé</strong> en voyant vos améliorations</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span><strong>Prenez des décisions</strong> basées sur des données</span>
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
                                <h6>Conseils de suivi</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-star\"></i>
                                    <span>Réalisez vos suivis <strong>régulièrement</strong>, idéalement quotidiennement</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-star\"></i>
                                    <span>Soyez <strong>honnête</strong> avec vous-même dans vos évaluations</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-star\"></i>
                                    <span>Notez <strong>les petits détails</strong> qui font la différence</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-star\"></i>
                                    <span><strong>Célébrez</strong> chaque progrès, même minime</span>
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
        // line 1343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                    </span>
                    <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                        <i class=\"mdi mdi-clipboard-text text-primary\"></i>
                        Suivi quotidien - ";
        // line 1347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1347, $this->source); })()), "titre", [], "any", false, false, false, 1347), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 1347, $this->source); })()), "titre", [], "any", false, false, false, 1347)) > 30)) ? ("...") : (""));
        yield "
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('suivi-form');
  const submitBtn = form?.querySelector('button[type=\"submit\"]');
  if (!form || !submitBtn) return;

  form.addEventListener('submit', function() {
    // ✅ si invalid HTML => laisser Symfony afficher erreurs
    if (!form.checkValidity()) return;

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin\"></i> Enregistrement...';
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
        return "suivi_bien_etre/new_for_objectif.html.twig";
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
        return array (  1766 => 1347,  1759 => 1343,  1684 => 1271,  1676 => 1266,  1667 => 1260,  1655 => 1251,  1648 => 1246,  1646 => 1242,  1621 => 1220,  1617 => 1219,  1604 => 1209,  1600 => 1208,  1585 => 1196,  1581 => 1195,  1568 => 1185,  1564 => 1184,  1539 => 1162,  1532 => 1157,  1530 => 1155,  1516 => 1144,  1509 => 1139,  1507 => 1137,  1479 => 1112,  1476 => 1111,  1469 => 1106,  1467 => 1105,  1460 => 1100,  1446 => 1088,  1437 => 1082,  1430 => 1078,  1423 => 1074,  1414 => 1068,  1408 => 1064,  1404 => 1062,  1399 => 1061,  1395 => 1060,  1391 => 1059,  1387 => 1058,  1383 => 1057,  1375 => 1052,  1364 => 1043,  1362 => 1042,  1352 => 1035,  1343 => 1029,  1335 => 1025,  1330 => 1023,  1321 => 1017,  1313 => 1011,  1307 => 1009,  1301 => 1007,  1299 => 1006,  1294 => 1004,  1288 => 1001,  1281 => 996,  1275 => 995,  1264 => 990,  1258 => 987,  1252 => 985,  1247 => 984,  1243 => 983,  1219 => 963,  1204 => 951,  1190 => 941,  1188 => 940,  1184 => 938,  1179 => 935,  1175 => 933,  1171 => 931,  1167 => 929,  1165 => 928,  1160 => 926,  1153 => 925,  1151 => 924,  1144 => 919,  1137 => 916,  1131 => 912,  1127 => 910,  1123 => 908,  1121 => 907,  1113 => 904,  1109 => 902,  1102 => 899,  1099 => 898,  1093 => 895,  1088 => 894,  1086 => 893,  1083 => 892,  1081 => 891,  1039 => 852,  1023 => 839,  1013 => 832,  996 => 818,  951 => 776,  933 => 760,  928 => 757,  924 => 755,  920 => 753,  916 => 751,  914 => 750,  909 => 748,  902 => 747,  900 => 746,  895 => 743,  889 => 741,  886 => 740,  879 => 737,  876 => 736,  870 => 733,  865 => 732,  862 => 731,  860 => 730,  849 => 722,  845 => 721,  840 => 719,  836 => 718,  134 => 19,  130 => 18,  125 => 16,  121 => 15,  117 => 14,  113 => 13,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau suivi - {{ objectif.titre }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - {{ suivi is defined and suivi.id ? 'Modifier le Suivi' : 'Nouveau Suivi' }}</title>
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

      /* Form Section Headers */
      .form-section-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 1rem 1.5rem;
        border-radius: 10px;
        margin: 2rem 0 1.5rem;
        border-left: 4px solid;
        border-image: var(--health-gradient) 1;
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
        background: var(--health-gradient);
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
        background: var(--health-gradient);
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
        background: var(--health-gradient);
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
        justify-content: space-between;
        gap: 1rem;
        border: 2px dashed #e9ecef;
      }

      .form-actions-left {
        display: flex;
        gap: 1rem;
      }

      .form-actions-right {
        display: flex;
        gap: 1rem;
      }

      /* Current Info Display */
      .current-info-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border: 2px solid #dee2e6;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
      }

      .current-info-card h5 {
        color: #495057;
        font-weight: 600;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }

      .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #dee2e6;
      }

      .info-row:last-child {
        border-bottom: none;
      }

      .info-label {
        font-weight: 600;
        color: #6c757d;
        font-size: 0.9rem;
      }

      .info-value {
        font-weight: 500;
        color: #495057;
      }

      /* Status & Priority Badges */
      .status-badge, .priority-badge, .type-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
      }

      .status-en-cours { background: var(--info-gradient); color: white; }
      .status-termine { background: var(--success-gradient); color: white; }
      .status-abandonne { background: linear-gradient(135deg, #838383 0%, #666666 100%); color: white; }
      .status-en-pause { background: var(--warning-gradient); color: white; }

      .priority-haute { background: var(--danger-gradient); color: white; }
      .priority-moyenne { background: var(--warning-gradient); color: white; }
      .priority-faible { background: var(--success-gradient); color: white; }

      /* Responsive Design */
      @media (max-width: 768px) {
        .page-header-enhanced .title-section {
          flex-direction: column;
          text-align: center;
        }

        .form-actions {
          flex-direction: column;
        }

        .form-actions-left,
        .form-actions-right {
          flex-direction: column;
          width: 100%;
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

      /* Sidebar & Navbar */
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

      /* Slider styles for ratings */
      .rating-slider {
        width: 100%;
        height: 10px;
        -webkit-appearance: none;
        appearance: none;
        background: #e9ecef;
        border-radius: 5px;
        outline: none;
      }

      .rating-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: var(--health-gradient);
        cursor: pointer;
        border: 3px solid white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }

      .rating-value {
        font-weight: bold;
        font-size: 1.2rem;
        color: #667eea;
        margin-left: 10px;
      }

      .rating-emoji {
        font-size: 1.5rem;
        margin-left: 10px;
      }

      .rating-labels {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
        font-size: 0.8rem;
        color: #6c757d;
      }

      /* Mood selector */
      .mood-selector {
        display: flex;
        gap: 1rem;
        margin-top: 0.5rem;
      }

      .mood-option {
        flex: 1;
        text-align: center;
        padding: 1rem;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .mood-option:hover {
        border-color: #667eea;
        background: #f8f9fa;
      }

      .mood-option.selected {
        border-color: #667eea;
        background: rgba(102, 126, 234, 0.1);
      }

      .mood-option i {
        font-size: 2rem;
        margin-bottom: 0.5rem;
      }

      .mood-option .mood-label {
        font-weight: 600;
        color: #495057;
      }

      .mood-option .mood-desc {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 0.25rem;
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un suivi...\">
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
                      <p class=\"preview-subject mb-1\">Suivi enregistré!</p>
                      <p class=\"text-muted ellipsis mb-0\">Votre suivi quotidien a été sauvegardé</p>
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
                            <i class=\"mdi mdi-{{ suivi is defined and suivi.id ? 'pencil-box' : 'clipboard-plus' }}\"></i>
                        </div>
                        <div>
                            <h3>{{ suivi is defined and suivi.id ? 'Modifier le Suivi' : 'Nouveau Suivi' }}</h3>
                            <p class=\"subtitle\">
                                {% if suivi is defined and suivi.id %}
                                    Modifiez votre suivi du {{ suivi.dateSaisie|date('d/m/Y') }}
                                {% else %}
                                    Enregistrez votre suivi quotidien pour l'objectif \"{{ objectif.titre }}\"
                                {% endif %}
                            </p>
                        </div>
                    </div>
                    <nav aria-label=\"breadcrumb\" class=\"breadcrumb-custom\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_objectif_sante_index') }}\">
                                    <i class=\"mdi mdi-heart-pulse me-1\"></i>
                                    Objectifs de santé
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_objectif_sante_show', {'id': objectif.id}) }}\">
                                    <i class=\"mdi mdi-eye me-1\"></i>
                                    {{ objectif.titre|slice(0, 30) }}{{ objectif.titre|length > 30 ? '...' : '' }}
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('app_objectif_suivis', {'id': objectif.id}) }}\">
                                    <i class=\"mdi mdi-clipboard-text me-1\"></i>
                                    Suivis
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                {{ suivi is defined and suivi.id ? 'Modification' : 'Nouveau' }}
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Current Info (Edit Mode Only) -->
                {% if suivi is defined and suivi.id %}
                <div class=\"current-info-card\">
                    <h5>
                        <i class=\"mdi mdi-information\"></i>
                        Informations actuelles du suivi
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Date de saisie:</span>
                                <span class=\"info-value\">{{ suivi.dateSaisie|date('d/m/Y') }}</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Humeur:</span>
                                <span class=\"info-value\">
                                    {% if suivi.humeur == 1 %}😢 Très mauvaise
                                    {% elseif suivi.humeur == 2 %}😔 Mauvaise
                                    {% elseif suivi.humeur == 3 %}😐 Neutre
                                    {% elseif suivi.humeur == 4 %}😊 Bonne
                                    {% elseif suivi.humeur == 5 %}😄 Excellente
                                    {% else %}Non définie
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Niveau d'énergie:</span>
                                <span class=\"info-value\">{{ suivi.niveauEnergie ? suivi.niveauEnergie ~ '/10' : 'Non défini' }}</span>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"info-row\">
                                <span class=\"info-label\">Qualité du sommeil:</span>
                                <span class=\"info-value\">{{ suivi.qualiteSommeil ? suivi.qualiteSommeil ~ '/10' : 'Non défini' }}</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Niveau de stress:</span>
                                <span class=\"info-value\">{{ suivi.niveauStress ? suivi.niveauStress ~ '/10' : 'Non défini' }}</span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Qualité d'alimentation:</span>
                                <span class=\"info-value\">{{ suivi.qualiteAlimentation ? suivi.qualiteAlimentation ~ '/10' : 'Non défini' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}

                <!-- Main Form Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header-custom\">
                                <div class=\"icon\">
                                    <i class=\"mdi mdi-clipboard-text\"></i>
                                </div>
                                <h4>Formulaire de suivi</h4>
                            </div>
                            <div class=\"card-body p-4\">
                              {{ form_start(form, {'attr': {'id': 'suivi-form', 'novalidate': 'novalidate'}}) }}



{# ✅ Global form errors #}
{% if form.vars.submitted and not form.vars.valid %}
  <div class=\"alert alert-danger\">
    <i class=\"mdi mdi-alert-circle me-2\"></i>
    Veuillez corriger les erreurs ci-dessous.
  </div>
{% endif %}

{{ form_errors(form) }}





                                
                                <!-- Section 1: Date et Humeur -->
<div class=\"form-section-header\">
    <h5>
        <span class=\"section-icon\">
            <i class=\"mdi mdi-calendar\"></i>
        </span>
        Date & Humeur
    </h5>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            <label class=\"form-label-custom\">
                <i class=\"mdi mdi-calendar label-icon\"></i>
                Date de saisie
                <span class=\"required-star\">*</span>
            </label>
            {{ form_widget(form.dateSaisie, {'attr': {
                'class': 'form-control'
            }}) }}
            <div class=\"form-help-text\">
                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                <span>Date à laquelle vous effectuez ce suivi</span>
            </div>
            {{ form_errors(form.dateSaisie) }}
        </div>
    </div>
    
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            <label class=\"form-label-custom\">
                <i class=\"mdi mdi-emoticon label-icon\"></i>
                Humeur générale
                <span class=\"required-star\">*</span>
            </label>
            {{ form_widget(form.humeur, {'attr': {
                'class': 'form-select'
            }}) }}
            <div class=\"form-help-text\">
                <i class=\"mdi mdi-information-outline\"></i>
                <span>Votre humeur générale aujourd'hui</span>
            </div>
            {{ form_errors(form.humeur) }}
        </div>
    </div>
</div>

                              <!-- Section 2: Indicateurs de santé (0-10) -->
<div class=\"form-section-header\">
  <h5>
    <span class=\"section-icon\">
      <i class=\"mdi mdi-heart-pulse\"></i>
    </span>
    Indicateurs de Santé (0-10)
  </h5>
</div>

<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-group\">
      <label class=\"form-label-custom\">
        <i class=\"mdi mdi-battery-charging label-icon\"></i>
        Niveau d'énergie
      </label>
      {{ form_widget(form.niveauEnergie, {'attr': {'class': 'form-control', 'min': 0, 'max': 10}}) }}
      {{ form_errors(form.niveauEnergie) }}
    </div>
  </div>

  <div class=\"col-md-6\">
    <div class=\"form-group\">
      <label class=\"form-label-custom\">
        <i class=\"mdi mdi-bed label-icon\"></i>
        Qualité du sommeil
      </label>
      {{ form_widget(form.qualiteSommeil, {'attr': {'class': 'form-control', 'min': 0, 'max': 10}}) }}
      {{ form_errors(form.qualiteSommeil) }}
    </div>
  </div>
</div>

<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-group\">
      <label class=\"form-label-custom\">
        <i class=\"mdi mdi-brain label-icon\"></i>
        Niveau de stress
      </label>
      {{ form_widget(form.niveauStress, {'attr': {'class': 'form-control', 'min': 0, 'max': 10}}) }}
      {{ form_errors(form.niveauStress) }}
    </div>
  </div>

  <div class=\"col-md-6\">
    <div class=\"form-group\">
      <label class=\"form-label-custom\">
        <i class=\"mdi mdi-food label-icon\"></i>
        Qualité d'alimentation
      </label>
      {{ form_widget(form.qualiteAlimentation, {'attr': {'class': 'form-control', 'min': 0, 'max': 10}}) }}
      {{ form_errors(form.qualiteAlimentation) }}
    </div>
  </div>
</div>

                                <!-- Section 3: Notes -->
                                <div class=\"form-section-header\">
                                    <h5>
                                        <span class=\"section-icon\">
                                            <i class=\"mdi mdi-note-text\"></i>
                                        </span>
                                        Notes & Observations
                                    </h5>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label-custom\">
                                                <i class=\"mdi mdi-pencil label-icon\"></i>
                                                Notes libres
                                            </label>
                                            {{ form_widget(form.notesLibres, {'attr': {
                                                'class': 'form-control',
                                                'rows': 5,
                                                'placeholder': 'Notez vos observations, vos progrès, vos difficultés, vos réussites...'
                                            }}) }}
                                            <div class=\"form-help-text\">
                                                <i class=\"mdi mdi-lightbulb-on-outline\"></i>
                                                <span>Exprimez-vous librement sur votre journée et votre progression</span>
                                            </div>
                                            {{ form_errors(form.notesLibres) }}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class=\"form-actions\">
                                    
                                    <div class=\"form-actions-right\">
                                        <a href=\"{{ path('app_objectif_suivis', {'id': objectif.id}) }}\" class=\"btn-custom-secondary\">
                                            <i class=\"mdi mdi-arrow-left\"></i>
                                            Annuler
                                        </a>
                                        <button type=\"submit\" class=\"btn-custom-primary\">
                                            <i class=\"mdi mdi-content-save\"></i>
                                            {{ suivi is defined and suivi.id ? 'Enregistrer les modifications' : 'Créer le suivi' }}
                                        </button>
                                    </div>
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
                                <div class=\"icon\" style=\"background: var(--info-gradient);\">
                                    <i class=\"mdi mdi-chart-line\"></i>
                                </div>
                                <h6>Pourquoi suivre ?</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span><strong>Visualisez vos progrès</strong> au fil du temps</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span><strong>Identifiez les patterns</strong> dans vos habitudes</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span><strong>Restez motivé</strong> en voyant vos améliorations</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-check-circle\"></i>
                                    <span><strong>Prenez des décisions</strong> basées sur des données</span>
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
                                <h6>Conseils de suivi</h6>
                            </div>
                            <ul class=\"info-card-list\">
                                <li>
                                    <i class=\"mdi mdi-star\"></i>
                                    <span>Réalisez vos suivis <strong>régulièrement</strong>, idéalement quotidiennement</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-star\"></i>
                                    <span>Soyez <strong>honnête</strong> avec vous-même dans vos évaluations</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-star\"></i>
                                    <span>Notez <strong>les petits détails</strong> qui font la différence</span>
                                </li>
                                <li>
                                    <i class=\"mdi mdi-star\"></i>
                                    <span><strong>Célébrez</strong> chaque progrès, même minime</span>
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
                        <i class=\"mdi mdi-clipboard-text text-primary\"></i>
                        Suivi quotidien - {{ objectif.titre|slice(0, 30) }}{{ objectif.titre|length > 30 ? '...' : '' }}
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('suivi-form');
  const submitBtn = form?.querySelector('button[type=\"submit\"]');
  if (!form || !submitBtn) return;

  form.addEventListener('submit', function() {
    // ✅ si invalid HTML => laisser Symfony afficher erreurs
    if (!form.checkValidity()) return;

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin\"></i> Enregistrement...';
  });
});
</script>

</body>
</html>
{% endblock %}", "suivi_bien_etre/new_for_objectif.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\suivi_bien_etre\\new_for_objectif.html.twig");
    }
}
