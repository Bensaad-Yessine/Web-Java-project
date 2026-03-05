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

/* user/new.html.twig */
class __TwigTemplate_7a1e7526991f1df5c692f7ca988fc443 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Ajouter un Utilisateur</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" />
    <style>
      /* Form container with colored background */
      .form-container {
        background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.15);
        padding: 35px;
        border: 1px solid rgba(102, 126, 234, 0.1);
      }
      
      /* Input fields with colored background */
      .form-control, .form-select {
        border: 2px solid #d1d9ff;
        border-radius: 10px;
        padding: 14px 18px;
        height: 50px;
        background-color: #ffffff;
        color: #2c3e50;
        font-size: 15px;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      }
      
      .form-control:focus, .form-select:focus {
        border-color: #667eea;
        background-color: #667eea;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
        transform: translateY(-2px);
      }
      
      /* Form sections with subtle borders */
      .form-section {
        margin-bottom: 35px;
        padding-bottom: 25px;
        border-bottom: 2px dashed #d1d9ff;
        background: rgba(255, 255, 255, 0.7);
        padding: 25px;
        border-radius: 12px;
        margin-bottom: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
      }
      
      .form-section:last-child {
        border-bottom: none;
      }
      
      /* Form section title with gradient */
      .form-section-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
        padding-bottom: 12px;
        border-bottom: 3px solid #667eea;
        position: relative;
        display: inline-block;
      }
      
      .form-section-title i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 10px;
      }
      
      /* Labels with better visibility */
      .form-group label {
        font-weight: 600;
        color: #34495e;
        margin-bottom: 10px;
        display: block;
        font-size: 14px;
        letter-spacing: 0.3px;
      }
      
      /* Radio buttons styling */
      .radio-group {
        display: flex;
        gap: 30px;
        margin-top: 15px;
        background: rgba(255, 255, 255, 0.8);
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #e8edff;
      }
      
      .form-check {
        display: flex;
        align-items: center;
        padding: 8px 15px;
        background: white;
        border-radius: 8px;
        border: 2px solid #e8edff;
        transition: all 0.3s ease;
      }
      
      .form-check:hover {
        border-color: #667eea;
        background: #f8f9ff;
      }
      
      .form-check-input {
        margin-right: 10px;
        margin-top: 0;
        border: 2px solid #bdc3ff;
        width: 20px;
        height: 20px;
      }
      
      .form-check-input:checked {
        background-color: #667eea;
        border-color: #667eea;
      }
      
      /* Checkbox group styling */
      .checkbox-group {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-top: 15px;
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        border: 1px solid #e8edff;
      }
      
      /* Button styling */
      .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        padding: 14px 35px;
        font-weight: 600;
        border-radius: 10px;
        transition: all 0.3s ease;
        font-size: 16px;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        color: white;
      }
      
      .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        color: white;
      }
      
      .btn-secondary {
        background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
        border: none;
        padding: 14px 35px;
        border-radius: 10px;
        transition: all 0.3s ease;
        font-weight: 600;
        font-size: 16px;
        box-shadow: 0 4px 15px rgba(149, 165, 166, 0.3);
        color: white;
      }
      
      .btn-secondary:hover {
        background: linear-gradient(135deg, #7f8c8d 0%, #95a5a6 100%);
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(149, 165, 166, 0.4);
        color: white;
      }
      
      /* Action buttons container */
      .action-buttons {
        display: flex;
        gap: 20px;
        justify-content: flex-end;
        margin-top: 40px;
        padding-top: 25px;
        border-top: 2px dashed #d1d9ff;
      }
      
      /* Validation styles */
      .invalid-feedback {
        display: block;
        color: #e74c3c;
        font-size: 0.9em;
        margin-top: 8px;
        font-weight: 500;
        padding: 8px 12px;
        background: rgba(231, 76, 60, 0.1);
        border-radius: 6px;
        border-left: 4px solid #e74c3c;
      }
      
      /* Form text hints */
      .form-text {
        font-size: 0.9em;
        color: #7f8c8d;
        margin-top: 8px;
        font-style: italic;
      }
      
      /* Password strength indicator */
      .password-strength {
        margin-top: 15px;
        background: rgba(255, 255, 255, 0.8);
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #e8edff;
      }
      
      .password-strength .progress {
        height: 10px;
        border-radius: 5px;
        margin-bottom: 8px;
        background-color: #ecf0f1;
        overflow: hidden;
      }
      
      /* Terms link */
      .terms-link {
        color: #3498db;
        text-decoration: none;
        font-weight: 600;
        margin-left: 8px;
        padding: 4px 8px;
        border-radius: 4px;
        background: rgba(52, 152, 219, 0.1);
        transition: all 0.3s ease;
      }
      
      .terms-link:hover {
        background: rgba(52, 152, 219, 0.2);
        text-decoration: none;
      }
      
      /* Required field indicator */
      .required-field::after {
        content: \" *\";
        color: #e74c3c;
        font-weight: bold;
      }
      
      /* Placeholder styling */
      .form-control::placeholder {
        color: #95a5a6;
        font-weight: 400;
      }
      
      /* Date input styling */
      input[type=\"date\"] {
        color: #2c3e50;
        font-weight: 500;
      }
      
      input[type=\"date\"]::-webkit-calendar-picker-indicator {
        background-color: #667eea;
        padding: 5px;
        border-radius: 4px;
        cursor: pointer;
        color: white;
      }
      
      /* Select dropdown styling */
      .form-select {
        background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23667eea' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px 12px;
        padding-right: 45px;
      }
      
      /* Custom focus glow for all inputs */
      input:focus, select:focus, textarea:focus {
        outline: none;
      }
      
      /* Make invalid inputs more visible */
      .form-control.is-invalid {
        border-color: #e74c3c;
        background-color: rgba(231, 76, 60, 0.05);
      }
      
      /* Row spacing */
      .row {
        margin-bottom: 10px;
      }
      
      /* Make sure all text is visible */
      body {
        background-color: #f5f7ff;
      }
      
      .content-wrapper {
        background-color: #f5f7ff;
      }
      
      /* Card header for form */
      .form-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px 30px;
        border-radius: 15px 15px 0 0;
        margin: -35px -35px 30px -35px;
      }
      
      .form-header h3 {
        margin: 0;
        font-weight: 600;
        font-size: 1.5rem;
      }
      
      .form-header i {
        margin-right: 10px;
        font-size: 1.8rem;
      }
      
      /* Profile avatar styles */
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
      
      .user-avatar-img, .profile-avatar-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      }
      
      .profile-avatar-img {
        width: 50px;
        height: 50px;
        border: 3px solid #fff;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
      }
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      /* Profile section alignment */
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 426
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 429
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 430
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
        // line 438
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 438, $this->source); })()), "user", [], "any", false, false, false, 438)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 439
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 439, $this->source); })()), "user", [], "any", false, false, false, 439), "profilePic", [], "any", false, false, false, 439)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 440
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 440, $this->source); })()), "user", [], "any", false, false, false, 440), "profilePic", [], "any", false, false, false, 440))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 441
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 441, $this->source); })()), "user", [], "any", false, false, false, 441), "prenom", [], "any", false, false, false, 441), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 444
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 445
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 445, $this->source); })()), "user", [], "any", false, false, false, 445), "prenom", [], "any", false, false, false, 445))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 445, $this->source); })()), "user", [], "any", false, false, false, 445), "nom", [], "any", false, false, false, 445))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 448
            yield "                  ";
        } else {
            // line 449
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 451
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 454
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 454, $this->source); })()), "user", [], "any", false, false, false, 454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 455
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "prenom", [], "any", false, false, false, 455), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "nom", [], "any", false, false, false, 455), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 456
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 456, $this->source); })()), "user", [], "any", false, false, false, 456), "email", [], "any", false, false, false, 456), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 458
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 458, $this->source); })()), "user", [], "any", false, false, false, 458), "roles", [], "any", false, false, false, 458))) {
                // line 459
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 461
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 463
            yield "                    </div>
                  ";
        } else {
            // line 465
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 468
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
          ";
        // line 487
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 488
            yield "          <li class=\"nav-item menu-items\">
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
          ";
        } else {
            // line 497
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 498
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-circle\"></i>
              </span>
              <span class=\"menu-title\">Mon Profil</span>
            </a>
          </li>
          ";
        }
        // line 506
        yield "          
          <!-- Matières -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-school\"></i>
              </span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <!-- Salles -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
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
            <a class=\"nav-link\" href=\"#\">
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
        // line 589
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
        // line 604
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
                        <i class=\"mdi mdi-account-plus\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvel utilisateur</p>
                      <p class=\"text-muted ellipsis mb-0\"> Ajouter un nouvel utilisateur</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 643
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 643, $this->source); })()), "user", [], "any", false, false, false, 643)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 644
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 645
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 645, $this->source); })()), "user", [], "any", false, false, false, 645), "profilePic", [], "any", false, false, false, 645)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 646
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 646, $this->source); })()), "user", [], "any", false, false, false, 646), "profilePic", [], "any", false, false, false, 646))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 647
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 647, $this->source); })()), "user", [], "any", false, false, false, 647), "prenom", [], "any", false, false, false, 647), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 650
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 651
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 651, $this->source); })()), "user", [], "any", false, false, false, 651), "prenom", [], "any", false, false, false, 651))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 651, $this->source); })()), "user", [], "any", false, false, false, 651), "nom", [], "any", false, false, false, 651))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 654
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 656
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 656, $this->source); })()), "user", [], "any", false, false, false, 656), "prenom", [], "any", false, false, false, 656), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 656, $this->source); })()), "user", [], "any", false, false, false, 656), "nom", [], "any", false, false, false, 656), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 659
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 659, $this->source); })()), "user", [], "any", false, false, false, 659), "roles", [], "any", false, false, false, 659))) {
                // line 660
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 662
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 664
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 668
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 671
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 676
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 676, $this->source); })()), "user", [], "any", false, false, false, 676)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 677
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 677, $this->source); })()), "user", [], "any", false, false, false, 677), "prenom", [], "any", false, false, false, 677), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 677, $this->source); })()), "user", [], "any", false, false, false, 677), "nom", [], "any", false, false, false, 677), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 678
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 678, $this->source); })()), "user", [], "any", false, false, false, 678), "email", [], "any", false, false, false, 678), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 680
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 680, $this->source); })()), "user", [], "any", false, false, false, 680), "roles", [], "any", false, false, false, 680))) {
                // line 681
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 683
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 685
            yield "                      </small>
                    ";
        } else {
            // line 687
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 690
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 692
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 692, $this->source); })()), "user", [], "any", false, false, false, 692)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 693
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 693, $this->source); })()), "user", [], "any", false, false, false, 693), "id", [], "any", false, false, false, 693)]), "html", null, true);
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
            // line 703
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 703, $this->source); })()), "user", [], "any", false, false, false, 703), "id", [], "any", false, false, false, 703)]), "html", null, true);
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
        // line 715
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

        <!-- Main Panel -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account-plus\"></i>
                    </span> 
                    Ajouter un Utilisateur
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\"><a href=\"";
        // line 746
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Utilisateurs</a></li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">Nouvel utilisateur</li>
                    </ul>
                  </nav>
                  ";
        // line 750
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 750, $this->source); })()), "user", [], "any", false, false, false, 750)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 751
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 754
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 754, $this->source); })()), "user", [], "any", false, false, false, 754), "prenom", [], "any", false, false, false, 754), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 754, $this->source); })()), "user", [], "any", false, false, false, 754), "nom", [], "any", false, false, false, 754), "html", null, true);
            yield "</strong>
                        ";
            // line 755
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 755, $this->source); })()), "user", [], "any", false, false, false, 755), "roles", [], "any", false, false, false, 755))) {
                // line 756
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 758
            yield "                      </small>
                    </div>
                  ";
        }
        // line 761
        yield "                </div>
              </div>
            </div>

            <!-- Form Container -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"form-container\">
                  <!-- Form Header -->
                  <div class=\"form-header\">
                    <h3><i class=\"mdi mdi-account-plus\"></i> Création d'un Nouvel Utilisateur</h3>
                    <p class=\"mb-0 opacity-90\">Remplissez tous les champs requis pour ajouter un nouvel utilisateur</p>
                  </div>
                  
                  ";
        // line 775
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 775, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                  
                  <!-- Personal Information Section -->
                  <div class=\"form-section\">
                    <h4 class=\"form-section-title\">
                      <i class=\"mdi mdi-account-circle\"></i>
                      Informations Personnelles
                    </h4>
                    
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          ";
        // line 787
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 787, $this->source); })()), "nom", [], "any", false, false, false, 787), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                          ";
        // line 788
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 788, $this->source); })()), "nom", [], "any", false, false, false, 788), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom de famille"]]);
        // line 793
        yield "
                          <div class=\"invalid-feedback\">
                            ";
        // line 795
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 795, $this->source); })()), "nom", [], "any", false, false, false, 795), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          ";
        // line 801
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 801, $this->source); })()), "prenom", [], "any", false, false, false, 801), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                          ";
        // line 802
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 802, $this->source); })()), "prenom", [], "any", false, false, false, 802), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le prénom"]]);
        // line 807
        yield "
                          <div class=\"invalid-feedback\">
                            ";
        // line 809
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 809, $this->source); })()), "prenom", [], "any", false, false, false, 809), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          ";
        // line 818
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 818, $this->source); })()), "email", [], "any", false, false, false, 818), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                          ";
        // line 819
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 819, $this->source); })()), "email", [], "any", false, false, false, 819), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "exemple@esprit.tn"]]);
        // line 824
        yield "
                          <div class=\"invalid-feedback\">
                            ";
        // line 826
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 826, $this->source); })()), "email", [], "any", false, false, false, 826), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          ";
        // line 832
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 832, $this->source); })()), "numTel", [], "any", false, false, false, 832), 'label');
        yield "
                          ";
        // line 833
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 833, $this->source); })()), "numTel", [], "any", false, false, false, 833), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "+216 XX XXX XXX"]]);
        // line 838
        yield "
                          <div class=\"invalid-feedback\">
                            ";
        // line 840
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 840, $this->source); })()), "numTel", [], "any", false, false, false, 840), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          ";
        // line 849
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 849, $this->source); })()), "DateDeNaissance", [], "any", false, false, false, 849), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                          ";
        // line 850
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 850, $this->source); })()), "DateDeNaissance", [], "any", false, false, false, 850), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 854
        yield "
                          <div class=\"invalid-feedback\">
                            ";
        // line 856
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 856, $this->source); })()), "DateDeNaissance", [], "any", false, false, false, 856), 'errors');
        yield "
                          </div>
                          <small class=\"form-text\">Format: JJ/MM/AAAA</small>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          ";
        // line 863
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 863, $this->source); })()), "sexe", [], "any", false, false, false, 863), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                          <div class=\"radio-group\">
                            ";
        // line 865
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 865, $this->source); })()), "sexe", [], "any", false, false, false, 865), 'widget');
        yield "
                          </div>
                          <div class=\"invalid-feedback\">
                            ";
        // line 868
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 868, $this->source); })()), "sexe", [], "any", false, false, false, 868), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Academic Information Section -->
                  <div class=\"form-section\">
                    <h4 class=\"form-section-title\">
                      <i class=\"mdi mdi-school\"></i>
                      Informations Académiques
                    </h4>
                    
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          ";
        // line 885
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 885, $this->source); })()), "classe", [], "any", false, false, false, 885), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                          ";
        // line 886
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 886, $this->source); })()), "classe", [], "any", false, false, false, 886), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 890
        yield "
                          <div class=\"invalid-feedback\">
                            ";
        // line 892
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 892, $this->source); })()), "classe", [], "any", false, false, false, 892), 'errors');
        yield "
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          ";
        // line 898
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 898, $this->source); })()), "roles", [], "any", false, false, false, 898), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                          <div class=\"checkbox-group\">
                            ";
        // line 900
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 900, $this->source); })()), "roles", [], "any", false, false, false, 900), 'widget');
        yield "
                          </div>
                          <div class=\"invalid-feedback\">
                            ";
        // line 903
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 903, $this->source); })()), "roles", [], "any", false, false, false, 903), 'errors');
        yield "
                          </div>
                          <small class=\"form-text\">Sélectionnez au moins un rôle</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Security Section -->
                  <div class=\"form-section\">
                    <h4 class=\"form-section-title\">
                      <i class=\"mdi mdi-lock\"></i>
                      Sécurité
                    </h4>
                    
                    <div class=\"form-group mb-4\">
                      ";
        // line 919
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 919, $this->source); })()), "plainPassword", [], "any", false, false, false, 919), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                      ";
        // line 920
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 920, $this->source); })()), "plainPassword", [], "any", false, false, false, 920), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Minimum 6 caractères", "id" => "password-input"]]);
        // line 926
        yield "
                      <div class=\"password-strength\">
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                        </div>
                        <small class=\"form-text\">Force du mot de passe: <span id=\"password-strength-text\">Aucun</span></small>
                      </div>
                      <div class=\"invalid-feedback\">
                        ";
        // line 934
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 934, $this->source); })()), "plainPassword", [], "any", false, false, false, 934), 'errors');
        yield "
                      </div>
                      <small class=\"form-text\">Le mot de passe doit contenir au moins 6 caractères</small>
                    </div>
                  </div>
                  
                  <!-- Terms and Conditions -->
                  <div class=\"form-section\">
                    <h4 class=\"form-section-title\">
                      <i class=\"mdi mdi-file-document\"></i>
                      Conditions d'Utilisation
                    </h4>
                    
                    <div class=\"form-group mb-4\">
                      <div class=\"form-check\" style=\"background: white; padding: 15px; border-radius: 10px; border: 2px solid #e8edff;\">
                        ";
        // line 949
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 949, $this->source); })()), "agreeTerms", [], "any", false, false, false, 949), 'widget', ["attr" => ["class" => "form-check-input", "id" => "agreeTerms"]]);
        // line 954
        yield "
                        ";
        // line 955
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 955, $this->source); })()), "agreeTerms", [], "any", false, false, false, 955), 'label', ["label_attr" => ["class" => "form-check-label required-field"]]);
        // line 959
        yield "
                        <a href=\"#\" class=\"terms-link\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\">
                          Lire les conditions
                        </a>
                      </div>
                      <div class=\"invalid-feedback\">
                        ";
        // line 965
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 965, $this->source); })()), "agreeTerms", [], "any", false, false, false, 965), 'errors');
        yield "
                      </div>
                    </div>
                  </div>
                  <!-- Profile Picture Section -->
<div class=\"form-section\">
    <h4 class=\"form-section-title\">
        <i class=\"mdi mdi-camera\"></i>
        Photo de Profil (Optionnel)
    </h4>
    
    <div class=\"form-group mb-4\">
        ";
        // line 977
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 977, $this->source); })()), "profilePicFile", [], "any", false, false, false, 977), 'label');
        yield "
        ";
        // line 978
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 978, $this->source); })()), "profilePicFile", [], "any", false, false, false, 978), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*", "onchange" => "previewImage(event)"]]);
        // line 984
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 986
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 986, $this->source); })()), "profilePicFile", [], "any", false, false, false, 986), 'errors');
        yield "
        </div>
        <small class=\"form-text\">
            Formats acceptés: JPG, PNG, GIF. Taille max: 2MB
        </small>
        
        <!-- Image preview -->
        <div class=\"mt-3 text-center\" id=\"imagePreviewContainer\" style=\"display: none;\">
            <p class=\"text-muted mb-2\">Aperçu:</p>
            <img id=\"imagePreview\" 
                 src=\"\" 
                 alt=\"Aperçu de l'image\" 
                 style=\"max-width: 150px; max-height: 150px; border-radius: 10px; border: 2px solid #ddd;\">
        </div>
    </div>
</div>
                  
                  <!-- Action Buttons -->
                  <div class=\"action-buttons\">
                    <a href=\"";
        // line 1005
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-secondary\">
                      <i class=\"mdi mdi-arrow-left me-2\"></i>Retour à la liste
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                      <i class=\"mdi mdi-content-save me-2\"></i>Créer l'utilisateur
                    </button>
                  </div>
                  
                  ";
        // line 1013
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1013, $this->source); })()), 'form_end');
        yield "
                </div>
              </div>
            </div>
          </div>
          
          <!-- Footer -->
          <footer class=\"footer\">
            <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
              <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                © ";
        // line 1023
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
              </span>
              <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                Formulaire d'ajout d'utilisateur
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Terms Modal -->
    <div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
          <div class=\"modal-header\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
            <h5 class=\"modal-title\" id=\"termsModalLabel\">
              <i class=\"mdi mdi-file-document me-2\"></i>
              Conditions d'Utilisation
            </h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body\">
            <h6>1. Acceptation des conditions</h6>
            <p>En créant un compte, vous acceptez nos conditions d'utilisation et notre politique de confidentialité.</p>
            
            <h6>2. Responsabilités de l'utilisateur</h6>
            <p>Vous êtes responsable de la confidentialité de votre compte et de toutes les activités qui y sont liées.</p>
            
            <h6>3. Protection des données</h6>
            <p>Nous nous engageons à protéger vos données personnelles conformément au RGPD.</p>
            
            <h6>4. Utilisation appropriée</h6>
            <p>Vous vous engagez à utiliser la plateforme de manière appropriée et à respecter les autres utilisateurs.</p>
            
            <h6>5. Modifications</h6>
            <p>Nous nous réservons le droit de modifier ces conditions à tout moment.</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 1069
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1070
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1071
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Password strength indicator
        const passwordInput = document.getElementById('password-input');
        if (passwordInput) {
          const progressBar = document.querySelector('.password-strength .progress-bar');
          const strengthText = document.getElementById('password-strength-text');
          
          passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Length check
            if (password.length >= 6) strength += 25;
            if (password.length >= 8) strength += 25;
            
            // Complexity checks
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 25;
            if (/\\d/.test(password)) strength += 15;
            if (/[^A-Za-z0-9]/.test(password)) strength += 10;
            
            // Update progress bar
            progressBar.style.width = strength + '%';
            
            // Update text and color
            let text = 'Aucun';
            let color = 'bg-secondary';
            
            if (password.length > 0) {
              if (strength < 50) {
                text = 'Faible';
                color = 'bg-danger';
              } else if (strength < 75) {
                text = 'Moyen';
                color = 'bg-warning';
              } else if (strength < 90) {
                text = 'Bon';
                color = 'bg-info';
              } else {
                text = 'Fort';
                color = 'bg-success';
              }
            }
            
            progressBar.className = 'progress-bar ' + color;
            strengthText.textContent = text;
          });
        }
        
        // Phone number formatting
       
        
        // Form validation
        const form = document.querySelector('form');
        if (form) {
          const submitBtn = form.querySelector('button[type=\"submit\"]');
          
          form.addEventListener('submit', function(e) {
            // Check if terms are accepted
            const termsCheckbox = document.getElementById('agreeTerms');
            if (!termsCheckbox.checked) {
              e.preventDefault();
              alert('Veuillez accepter les conditions d\\'utilisation pour continuer.');
              termsCheckbox.focus();
              return false;
            }
            
            // Show loading state
            submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-2\"></i>Création en cours...';
            submitBtn.disabled = true;
          });
        }
        
        // Style form elements
        const requiredLabels = document.querySelectorAll('.required-field');
        requiredLabels.forEach(label => {
          if (!label.innerHTML.includes('*')) {
            label.innerHTML = label.innerHTML + ' *';
          }
        });
        
        // Style radio buttons
        const radioButtons = document.querySelectorAll('input[type=\"radio\"]');
        radioButtons.forEach(radio => {
          radio.classList.add('form-check-input');
          const label = radio.nextElementSibling;
          if (label && label.tagName === 'LABEL') {
            label.classList.add('form-check-label');
            const wrapper = document.createElement('div');
            wrapper.className = 'form-check form-check-inline';
            radio.parentNode.insertBefore(wrapper, radio);
            wrapper.appendChild(radio);
            wrapper.appendChild(label);
          }
        });
        
        // Style checkboxes
        const checkboxes = document.querySelectorAll('input[type=\"checkbox\"]');
        checkboxes.forEach(checkbox => {
          checkbox.classList.add('form-check-input');
          const label = checkbox.nextElementSibling;
          if (label && label.tagName === 'LABEL') {
            label.classList.add('form-check-label');
            const wrapper = document.createElement('div');
            wrapper.className = 'form-check';
            checkbox.parentNode.insertBefore(wrapper, checkbox);
            wrapper.appendChild(checkbox);
            wrapper.appendChild(label);
          }
        });
        
        // Add current year to footer
        const currentYear = new Date().getFullYear();
        const footerText = document.querySelector('.footer span:first-child');
        if (footerText) {
          footerText.innerHTML = footerText.innerHTML.replace('2024', currentYear);
        }
      });
    </script>
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/new.html.twig";
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
        return array (  1380 => 1071,  1376 => 1070,  1372 => 1069,  1323 => 1023,  1310 => 1013,  1299 => 1005,  1277 => 986,  1273 => 984,  1271 => 978,  1267 => 977,  1252 => 965,  1244 => 959,  1242 => 955,  1239 => 954,  1237 => 949,  1219 => 934,  1209 => 926,  1207 => 920,  1203 => 919,  1184 => 903,  1178 => 900,  1173 => 898,  1164 => 892,  1160 => 890,  1158 => 886,  1154 => 885,  1134 => 868,  1128 => 865,  1123 => 863,  1113 => 856,  1109 => 854,  1107 => 850,  1103 => 849,  1091 => 840,  1087 => 838,  1085 => 833,  1081 => 832,  1072 => 826,  1068 => 824,  1066 => 819,  1062 => 818,  1050 => 809,  1046 => 807,  1044 => 802,  1040 => 801,  1031 => 795,  1027 => 793,  1025 => 788,  1021 => 787,  1006 => 775,  990 => 761,  985 => 758,  981 => 756,  979 => 755,  973 => 754,  968 => 751,  966 => 750,  959 => 746,  924 => 715,  909 => 703,  895 => 693,  893 => 692,  889 => 690,  884 => 687,  880 => 685,  876 => 683,  872 => 681,  870 => 680,  865 => 678,  858 => 677,  856 => 676,  849 => 671,  842 => 668,  836 => 664,  832 => 662,  828 => 660,  826 => 659,  818 => 656,  814 => 654,  807 => 651,  804 => 650,  798 => 647,  793 => 646,  791 => 645,  788 => 644,  786 => 643,  744 => 604,  726 => 589,  641 => 506,  630 => 498,  627 => 497,  616 => 489,  613 => 488,  611 => 487,  590 => 468,  585 => 465,  581 => 463,  577 => 461,  573 => 459,  571 => 458,  566 => 456,  559 => 455,  557 => 454,  552 => 451,  546 => 449,  543 => 448,  536 => 445,  533 => 444,  527 => 441,  522 => 440,  519 => 439,  517 => 438,  506 => 430,  502 => 429,  497 => 427,  493 => 426,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Ajouter un Utilisateur</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />
    <style>
      /* Form container with colored background */
      .form-container {
        background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.15);
        padding: 35px;
        border: 1px solid rgba(102, 126, 234, 0.1);
      }
      
      /* Input fields with colored background */
      .form-control, .form-select {
        border: 2px solid #d1d9ff;
        border-radius: 10px;
        padding: 14px 18px;
        height: 50px;
        background-color: #ffffff;
        color: #2c3e50;
        font-size: 15px;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      }
      
      .form-control:focus, .form-select:focus {
        border-color: #667eea;
        background-color: #667eea;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
        transform: translateY(-2px);
      }
      
      /* Form sections with subtle borders */
      .form-section {
        margin-bottom: 35px;
        padding-bottom: 25px;
        border-bottom: 2px dashed #d1d9ff;
        background: rgba(255, 255, 255, 0.7);
        padding: 25px;
        border-radius: 12px;
        margin-bottom: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
      }
      
      .form-section:last-child {
        border-bottom: none;
      }
      
      /* Form section title with gradient */
      .form-section-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 25px;
        padding-bottom: 12px;
        border-bottom: 3px solid #667eea;
        position: relative;
        display: inline-block;
      }
      
      .form-section-title i {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 10px;
      }
      
      /* Labels with better visibility */
      .form-group label {
        font-weight: 600;
        color: #34495e;
        margin-bottom: 10px;
        display: block;
        font-size: 14px;
        letter-spacing: 0.3px;
      }
      
      /* Radio buttons styling */
      .radio-group {
        display: flex;
        gap: 30px;
        margin-top: 15px;
        background: rgba(255, 255, 255, 0.8);
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #e8edff;
      }
      
      .form-check {
        display: flex;
        align-items: center;
        padding: 8px 15px;
        background: white;
        border-radius: 8px;
        border: 2px solid #e8edff;
        transition: all 0.3s ease;
      }
      
      .form-check:hover {
        border-color: #667eea;
        background: #f8f9ff;
      }
      
      .form-check-input {
        margin-right: 10px;
        margin-top: 0;
        border: 2px solid #bdc3ff;
        width: 20px;
        height: 20px;
      }
      
      .form-check-input:checked {
        background-color: #667eea;
        border-color: #667eea;
      }
      
      /* Checkbox group styling */
      .checkbox-group {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-top: 15px;
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        border: 1px solid #e8edff;
      }
      
      /* Button styling */
      .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        padding: 14px 35px;
        font-weight: 600;
        border-radius: 10px;
        transition: all 0.3s ease;
        font-size: 16px;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        color: white;
      }
      
      .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        color: white;
      }
      
      .btn-secondary {
        background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
        border: none;
        padding: 14px 35px;
        border-radius: 10px;
        transition: all 0.3s ease;
        font-weight: 600;
        font-size: 16px;
        box-shadow: 0 4px 15px rgba(149, 165, 166, 0.3);
        color: white;
      }
      
      .btn-secondary:hover {
        background: linear-gradient(135deg, #7f8c8d 0%, #95a5a6 100%);
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(149, 165, 166, 0.4);
        color: white;
      }
      
      /* Action buttons container */
      .action-buttons {
        display: flex;
        gap: 20px;
        justify-content: flex-end;
        margin-top: 40px;
        padding-top: 25px;
        border-top: 2px dashed #d1d9ff;
      }
      
      /* Validation styles */
      .invalid-feedback {
        display: block;
        color: #e74c3c;
        font-size: 0.9em;
        margin-top: 8px;
        font-weight: 500;
        padding: 8px 12px;
        background: rgba(231, 76, 60, 0.1);
        border-radius: 6px;
        border-left: 4px solid #e74c3c;
      }
      
      /* Form text hints */
      .form-text {
        font-size: 0.9em;
        color: #7f8c8d;
        margin-top: 8px;
        font-style: italic;
      }
      
      /* Password strength indicator */
      .password-strength {
        margin-top: 15px;
        background: rgba(255, 255, 255, 0.8);
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #e8edff;
      }
      
      .password-strength .progress {
        height: 10px;
        border-radius: 5px;
        margin-bottom: 8px;
        background-color: #ecf0f1;
        overflow: hidden;
      }
      
      /* Terms link */
      .terms-link {
        color: #3498db;
        text-decoration: none;
        font-weight: 600;
        margin-left: 8px;
        padding: 4px 8px;
        border-radius: 4px;
        background: rgba(52, 152, 219, 0.1);
        transition: all 0.3s ease;
      }
      
      .terms-link:hover {
        background: rgba(52, 152, 219, 0.2);
        text-decoration: none;
      }
      
      /* Required field indicator */
      .required-field::after {
        content: \" *\";
        color: #e74c3c;
        font-weight: bold;
      }
      
      /* Placeholder styling */
      .form-control::placeholder {
        color: #95a5a6;
        font-weight: 400;
      }
      
      /* Date input styling */
      input[type=\"date\"] {
        color: #2c3e50;
        font-weight: 500;
      }
      
      input[type=\"date\"]::-webkit-calendar-picker-indicator {
        background-color: #667eea;
        padding: 5px;
        border-radius: 4px;
        cursor: pointer;
        color: white;
      }
      
      /* Select dropdown styling */
      .form-select {
        background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23667eea' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px 12px;
        padding-right: 45px;
      }
      
      /* Custom focus glow for all inputs */
      input:focus, select:focus, textarea:focus {
        outline: none;
      }
      
      /* Make invalid inputs more visible */
      .form-control.is-invalid {
        border-color: #e74c3c;
        background-color: rgba(231, 76, 60, 0.05);
      }
      
      /* Row spacing */
      .row {
        margin-bottom: 10px;
      }
      
      /* Make sure all text is visible */
      body {
        background-color: #f5f7ff;
      }
      
      .content-wrapper {
        background-color: #f5f7ff;
      }
      
      /* Card header for form */
      .form-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px 30px;
        border-radius: 15px 15px 0 0;
        margin: -35px -35px 30px -35px;
      }
      
      .form-header h3 {
        margin: 0;
        font-weight: 600;
        font-size: 1.5rem;
      }
      
      .form-header i {
        margin-right: 10px;
        font-size: 1.8rem;
      }
      
      /* Profile avatar styles */
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
      
      .user-avatar-img, .profile-avatar-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      }
      
      .profile-avatar-img {
        width: 50px;
        height: 50px;
        border: 3px solid #fff;
      }
      
      .user-role-badge {
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 10px;
        margin-top: 5px;
        display: inline-block;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
      }
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      /* Profile section alignment */
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"{{ path(is_granted('ROLE_ADMIN') ? 'app_user_index' : 'app_user_profile') }}\">
            <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"{{ path(is_granted('ROLE_ADMIN') ? 'app_user_index' : 'app_user_profile') }}\">
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
          {% if is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-group\"></i>
              </span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          {% else %}
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_user_profile') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-circle\"></i>
              </span>
              <span class=\"menu-title\">Mon Profil</span>
            </a>
          </li>
          {% endif %}
          
          <!-- Matières -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-school\"></i>
              </span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <!-- Salles -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"#\">
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
            <a class=\"nav-link\" href=\"#\">
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
                        <i class=\"mdi mdi-account-plus\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvel utilisateur</p>
                      <p class=\"text-muted ellipsis mb-0\"> Ajouter un nouvel utilisateur</p>
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

        <!-- Main Panel -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-account-plus\"></i>
                    </span> 
                    Ajouter un Utilisateur
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\"><a href=\"{{ path('app_user_index') }}\">Utilisateurs</a></li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">Nouvel utilisateur</li>
                    </ul>
                  </nav>
                  {% if app.user %}
                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong>
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        {% endif %}
                      </small>
                    </div>
                  {% endif %}
                </div>
              </div>
            </div>

            <!-- Form Container -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"form-container\">
                  <!-- Form Header -->
                  <div class=\"form-header\">
                    <h3><i class=\"mdi mdi-account-plus\"></i> Création d'un Nouvel Utilisateur</h3>
                    <p class=\"mb-0 opacity-90\">Remplissez tous les champs requis pour ajouter un nouvel utilisateur</p>
                  </div>
                  
                  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                  
                  <!-- Personal Information Section -->
                  <div class=\"form-section\">
                    <h4 class=\"form-section-title\">
                      <i class=\"mdi mdi-account-circle\"></i>
                      Informations Personnelles
                    </h4>
                    
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          {{ form_label(form.nom, null, {'label_attr': {'class': 'required-field'}}) }}
                          {{ form_widget(form.nom, {
                            'attr': {
                              'class': 'form-control',
                              'placeholder': 'Entrez le nom de famille'
                            }
                          }) }}
                          <div class=\"invalid-feedback\">
                            {{ form_errors(form.nom) }}
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          {{ form_label(form.prenom, null, {'label_attr': {'class': 'required-field'}}) }}
                          {{ form_widget(form.prenom, {
                            'attr': {
                              'class': 'form-control',
                              'placeholder': 'Entrez le prénom'
                            }
                          }) }}
                          <div class=\"invalid-feedback\">
                            {{ form_errors(form.prenom) }}
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          {{ form_label(form.email, null, {'label_attr': {'class': 'required-field'}}) }}
                          {{ form_widget(form.email, {
                            'attr': {
                              'class': 'form-control',
                              'placeholder': 'exemple@esprit.tn'
                            }
                          }) }}
                          <div class=\"invalid-feedback\">
                            {{ form_errors(form.email) }}
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          {{ form_label(form.numTel) }}
                          {{ form_widget(form.numTel, {
                            'attr': {
                              'class': 'form-control',
                              'placeholder': '+216 XX XXX XXX'
                            }
                          }) }}
                          <div class=\"invalid-feedback\">
                            {{ form_errors(form.numTel) }}
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          {{ form_label(form.DateDeNaissance, null, {'label_attr': {'class': 'required-field'}}) }}
                          {{ form_widget(form.DateDeNaissance, {
                            'attr': {
                              'class': 'form-control'
                            }
                          }) }}
                          <div class=\"invalid-feedback\">
                            {{ form_errors(form.DateDeNaissance) }}
                          </div>
                          <small class=\"form-text\">Format: JJ/MM/AAAA</small>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          {{ form_label(form.sexe, null, {'label_attr': {'class': 'required-field'}}) }}
                          <div class=\"radio-group\">
                            {{ form_widget(form.sexe) }}
                          </div>
                          <div class=\"invalid-feedback\">
                            {{ form_errors(form.sexe) }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Academic Information Section -->
                  <div class=\"form-section\">
                    <h4 class=\"form-section-title\">
                      <i class=\"mdi mdi-school\"></i>
                      Informations Académiques
                    </h4>
                    
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          {{ form_label(form.classe, null, {'label_attr': {'class': 'required-field'}}) }}
                          {{ form_widget(form.classe, {
                            'attr': {
                              'class': 'form-select'
                            }
                          }) }}
                          <div class=\"invalid-feedback\">
                            {{ form_errors(form.classe) }}
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group mb-4\">
                          {{ form_label(form.roles, null, {'label_attr': {'class': 'required-field'}}) }}
                          <div class=\"checkbox-group\">
                            {{ form_widget(form.roles) }}
                          </div>
                          <div class=\"invalid-feedback\">
                            {{ form_errors(form.roles) }}
                          </div>
                          <small class=\"form-text\">Sélectionnez au moins un rôle</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Security Section -->
                  <div class=\"form-section\">
                    <h4 class=\"form-section-title\">
                      <i class=\"mdi mdi-lock\"></i>
                      Sécurité
                    </h4>
                    
                    <div class=\"form-group mb-4\">
                      {{ form_label(form.plainPassword, null, {'label_attr': {'class': 'required-field'}}) }}
                      {{ form_widget(form.plainPassword, {
                        'attr': {
                          'class': 'form-control',
                          'placeholder': 'Minimum 6 caractères',
                          'id': 'password-input'
                        }
                      }) }}
                      <div class=\"password-strength\">
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                        </div>
                        <small class=\"form-text\">Force du mot de passe: <span id=\"password-strength-text\">Aucun</span></small>
                      </div>
                      <div class=\"invalid-feedback\">
                        {{ form_errors(form.plainPassword) }}
                      </div>
                      <small class=\"form-text\">Le mot de passe doit contenir au moins 6 caractères</small>
                    </div>
                  </div>
                  
                  <!-- Terms and Conditions -->
                  <div class=\"form-section\">
                    <h4 class=\"form-section-title\">
                      <i class=\"mdi mdi-file-document\"></i>
                      Conditions d'Utilisation
                    </h4>
                    
                    <div class=\"form-group mb-4\">
                      <div class=\"form-check\" style=\"background: white; padding: 15px; border-radius: 10px; border: 2px solid #e8edff;\">
                        {{ form_widget(form.agreeTerms, {
                          'attr': {
                            'class': 'form-check-input',
                            'id': 'agreeTerms'
                          }
                        }) }}
                        {{ form_label(form.agreeTerms, null, {
                          'label_attr': {
                            'class': 'form-check-label required-field'
                          }
                        }) }}
                        <a href=\"#\" class=\"terms-link\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\">
                          Lire les conditions
                        </a>
                      </div>
                      <div class=\"invalid-feedback\">
                        {{ form_errors(form.agreeTerms) }}
                      </div>
                    </div>
                  </div>
                  <!-- Profile Picture Section -->
<div class=\"form-section\">
    <h4 class=\"form-section-title\">
        <i class=\"mdi mdi-camera\"></i>
        Photo de Profil (Optionnel)
    </h4>
    
    <div class=\"form-group mb-4\">
        {{ form_label(form.profilePicFile) }}
        {{ form_widget(form.profilePicFile, {
            'attr': {
                'class': 'form-control',
                'accept': 'image/*',
                'onchange': 'previewImage(event)'
            }
        }) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.profilePicFile) }}
        </div>
        <small class=\"form-text\">
            Formats acceptés: JPG, PNG, GIF. Taille max: 2MB
        </small>
        
        <!-- Image preview -->
        <div class=\"mt-3 text-center\" id=\"imagePreviewContainer\" style=\"display: none;\">
            <p class=\"text-muted mb-2\">Aperçu:</p>
            <img id=\"imagePreview\" 
                 src=\"\" 
                 alt=\"Aperçu de l'image\" 
                 style=\"max-width: 150px; max-height: 150px; border-radius: 10px; border: 2px solid #ddd;\">
        </div>
    </div>
</div>
                  
                  <!-- Action Buttons -->
                  <div class=\"action-buttons\">
                    <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-secondary\">
                      <i class=\"mdi mdi-arrow-left me-2\"></i>Retour à la liste
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                      <i class=\"mdi mdi-content-save me-2\"></i>Créer l'utilisateur
                    </button>
                  </div>
                  
                  {{ form_end(form) }}
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
                Formulaire d'ajout d'utilisateur
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Terms Modal -->
    <div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
          <div class=\"modal-header\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
            <h5 class=\"modal-title\" id=\"termsModalLabel\">
              <i class=\"mdi mdi-file-document me-2\"></i>
              Conditions d'Utilisation
            </h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body\">
            <h6>1. Acceptation des conditions</h6>
            <p>En créant un compte, vous acceptez nos conditions d'utilisation et notre politique de confidentialité.</p>
            
            <h6>2. Responsabilités de l'utilisateur</h6>
            <p>Vous êtes responsable de la confidentialité de votre compte et de toutes les activités qui y sont liées.</p>
            
            <h6>3. Protection des données</h6>
            <p>Nous nous engageons à protéger vos données personnelles conformément au RGPD.</p>
            
            <h6>4. Utilisation appropriée</h6>
            <p>Vous vous engagez à utiliser la plateforme de manière appropriée et à respecter les autres utilisateurs.</p>
            
            <h6>5. Modifications</h6>
            <p>Nous nous réservons le droit de modifier ces conditions à tout moment.</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
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
        // Password strength indicator
        const passwordInput = document.getElementById('password-input');
        if (passwordInput) {
          const progressBar = document.querySelector('.password-strength .progress-bar');
          const strengthText = document.getElementById('password-strength-text');
          
          passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Length check
            if (password.length >= 6) strength += 25;
            if (password.length >= 8) strength += 25;
            
            // Complexity checks
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 25;
            if (/\\d/.test(password)) strength += 15;
            if (/[^A-Za-z0-9]/.test(password)) strength += 10;
            
            // Update progress bar
            progressBar.style.width = strength + '%';
            
            // Update text and color
            let text = 'Aucun';
            let color = 'bg-secondary';
            
            if (password.length > 0) {
              if (strength < 50) {
                text = 'Faible';
                color = 'bg-danger';
              } else if (strength < 75) {
                text = 'Moyen';
                color = 'bg-warning';
              } else if (strength < 90) {
                text = 'Bon';
                color = 'bg-info';
              } else {
                text = 'Fort';
                color = 'bg-success';
              }
            }
            
            progressBar.className = 'progress-bar ' + color;
            strengthText.textContent = text;
          });
        }
        
        // Phone number formatting
       
        
        // Form validation
        const form = document.querySelector('form');
        if (form) {
          const submitBtn = form.querySelector('button[type=\"submit\"]');
          
          form.addEventListener('submit', function(e) {
            // Check if terms are accepted
            const termsCheckbox = document.getElementById('agreeTerms');
            if (!termsCheckbox.checked) {
              e.preventDefault();
              alert('Veuillez accepter les conditions d\\'utilisation pour continuer.');
              termsCheckbox.focus();
              return false;
            }
            
            // Show loading state
            submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-2\"></i>Création en cours...';
            submitBtn.disabled = true;
          });
        }
        
        // Style form elements
        const requiredLabels = document.querySelectorAll('.required-field');
        requiredLabels.forEach(label => {
          if (!label.innerHTML.includes('*')) {
            label.innerHTML = label.innerHTML + ' *';
          }
        });
        
        // Style radio buttons
        const radioButtons = document.querySelectorAll('input[type=\"radio\"]');
        radioButtons.forEach(radio => {
          radio.classList.add('form-check-input');
          const label = radio.nextElementSibling;
          if (label && label.tagName === 'LABEL') {
            label.classList.add('form-check-label');
            const wrapper = document.createElement('div');
            wrapper.className = 'form-check form-check-inline';
            radio.parentNode.insertBefore(wrapper, radio);
            wrapper.appendChild(radio);
            wrapper.appendChild(label);
          }
        });
        
        // Style checkboxes
        const checkboxes = document.querySelectorAll('input[type=\"checkbox\"]');
        checkboxes.forEach(checkbox => {
          checkbox.classList.add('form-check-input');
          const label = checkbox.nextElementSibling;
          if (label && label.tagName === 'LABEL') {
            label.classList.add('form-check-label');
            const wrapper = document.createElement('div');
            wrapper.className = 'form-check';
            checkbox.parentNode.insertBefore(wrapper, checkbox);
            wrapper.appendChild(checkbox);
            wrapper.appendChild(label);
          }
        });
        
        // Add current year to footer
        const currentYear = new Date().getFullYear();
        const footerText = document.querySelector('.footer span:first-child');
        if (footerText) {
          footerText.innerHTML = footerText.innerHTML.replace('2024', currentYear);
        }
      });
    </script>
  </body>
</html>", "user/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\new.html.twig");
    }
}
