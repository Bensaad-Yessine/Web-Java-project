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

/* user/edit.html.twig */
class __TwigTemplate_a53acc59d994b8cbe5e0fc4912c23f75 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

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

        yield "Modifier l'Utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
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
            border-color: #ffa726;
            background-color: #ffa726;
            box-shadow: 0 5px 15px rgba(255, 167, 38, 0.2);
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
            border-bottom: 3px solid #ffa726;
            position: relative;
            display: inline-block;
        }
        
        .form-section-title i {
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
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
            border-color: #ffa726;
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
            background-color: #ffa726;
            border-color: #ffa726;
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
        .btn-warning {
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
            border: none;
            padding: 14px 35px;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 16px;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(255, 167, 38, 0.3);
            color: white;
        }
        
        .btn-warning:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 167, 38, 0.4);
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
        
        .btn-info {
            background: linear-gradient(135deg, #26c6da 0%, #00acc1 100%);
            border: none;
            padding: 14px 35px;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(38, 198, 218, 0.3);
            color: white;
        }
        
        .btn-info:hover {
            background: linear-gradient(135deg, #00acc1 0%, #26c6da 100%);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(38, 198, 218, 0.4);
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
        
        /* Password section */
        .password-section {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 25px;
            margin-top: 20px;
            border: 2px solid #ffe0b2;
            box-shadow: 0 4px 15px rgba(255, 224, 178, 0.3);
        }
        
        .password-note {
            font-size: 0.9em;
            color: #ff8f00;
            margin-top: 10px;
            padding: 10px 15px;
            background: rgba(255, 241, 224, 0.5);
            border-radius: 8px;
            border-left: 4px solid #ffb74d;
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
            background-color: #ffa726;
            padding: 5px;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }
        
        /* Select dropdown styling */
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffa726' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e\");
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
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
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
        
        /* User info card */
        .user-info-card {
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
            color: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px rgba(255, 167, 38, 0.3);
            border: none;
        }
        
        .user-avatar-large {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: white;
            color: #ffa726;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            margin: 0 auto 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        /* Edit specific styles */
        .edit-mode-badge {
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
            font-size: 0.9rem;
            box-shadow: 0 3px 10px rgba(255, 167, 38, 0.3);
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 463
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

        // line 464
        yield "<body>
    <div class=\"container-scroller\">
        <!-- Sidebar -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
                <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 469
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
                    <img src=\"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
                </a>
                <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 472
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
                    <img src=\"";
        // line 473
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
        // line 481
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 481, $this->source); })()), "user", [], "any", false, false, false, 481)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 482
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 482, $this->source); })()), "user", [], "any", false, false, false, 482), "profilePic", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 483
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 483, $this->source); })()), "user", [], "any", false, false, false, 483), "profilePic", [], "any", false, false, false, 483))), "html", null, true);
                yield "\" 
                                             alt=\"";
                // line 484
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 484, $this->source); })()), "user", [], "any", false, false, false, 484), "prenom", [], "any", false, false, false, 484), "html", null, true);
                yield "\" 
                                             class=\"profile-avatar-img\">
                                    ";
            } else {
                // line 487
                yield "                                        <div class=\"profile-avatar\">
                                            ";
                // line 488
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 488, $this->source); })()), "user", [], "any", false, false, false, 488), "prenom", [], "any", false, false, false, 488))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 488, $this->source); })()), "user", [], "any", false, false, false, 488), "nom", [], "any", false, false, false, 488))), "html", null, true);
                yield "
                                        </div>
                                    ";
            }
            // line 491
            yield "                                ";
        } else {
            // line 492
            yield "                                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                ";
        }
        // line 494
        yield "                                <span class=\"count bg-success\"></span>
                            </div>
                            <div class=\"profile-name\">
                                ";
        // line 497
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "user", [], "any", false, false, false, 497)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 498
            yield "                                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 498, $this->source); })()), "user", [], "any", false, false, false, 498), "prenom", [], "any", false, false, false, 498), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 498, $this->source); })()), "user", [], "any", false, false, false, 498), "nom", [], "any", false, false, false, 498), "html", null, true);
            yield "</h5>
                                    <span class=\"text-muted\">";
            // line 499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 499, $this->source); })()), "user", [], "any", false, false, false, 499), "email", [], "any", false, false, false, 499), "html", null, true);
            yield "</span>
                                    <div class=\"mt-1\">
                                        ";
            // line 501
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 501, $this->source); })()), "user", [], "any", false, false, false, 501), "roles", [], "any", false, false, false, 501))) {
                // line 502
                yield "                                            <span class=\"user-role-badge badge-admin\">Administrateur</span>
                                        ";
            } else {
                // line 504
                yield "                                            <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                                        ";
            }
            // line 506
            yield "                                    </div>
                                ";
        } else {
            // line 508
            yield "                                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                                    <span>Veuillez vous connecter</span>
                                ";
        }
        // line 511
        yield "                            </div>
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
        // line 530
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 531
            yield "                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
            // line 532
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
            // line 540
            yield "                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
            // line 541
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
        // line 549
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
        // line 632
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
        // line 647
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
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" style=\"border-color: #d1d9ff; background: white;\">
                            </form>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav navbar-nav-right\">
                        <li class=\"nav-item dropdown border-left\">
                            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <span class=\"count bg-warning\">2</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                                <h6 class=\"p-3 mb-0\">Notifications</h6>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item preview-item\">
                                    <div class=\"preview-thumbnail\">
                                        <div class=\"preview-icon bg-warning rounded-circle\">
                                            <i class=\"mdi mdi-account-edit\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Modification utilisateur</p>
                                        <p class=\"text-muted ellipsis mb-0\"> Mise à jour en cours</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <div class=\"navbar-profile\">
                                    ";
        // line 686
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 686, $this->source); })()), "user", [], "any", false, false, false, 686)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 687
            yield "                                        <div class=\"avatar-container\">
                                            ";
            // line 688
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 688, $this->source); })()), "user", [], "any", false, false, false, 688), "profilePic", [], "any", false, false, false, 688)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 689
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 689, $this->source); })()), "user", [], "any", false, false, false, 689), "profilePic", [], "any", false, false, false, 689))), "html", null, true);
                yield "\" 
                                                     alt=\"";
                // line 690
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 690, $this->source); })()), "user", [], "any", false, false, false, 690), "prenom", [], "any", false, false, false, 690), "html", null, true);
                yield "\" 
                                                     class=\"user-avatar-img\">
                                            ";
            } else {
                // line 693
                yield "                                                <div class=\"user-avatar\">
                                                    ";
                // line 694
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 694, $this->source); })()), "user", [], "any", false, false, false, 694), "prenom", [], "any", false, false, false, 694))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 694, $this->source); })()), "user", [], "any", false, false, false, 694), "nom", [], "any", false, false, false, 694))), "html", null, true);
                yield "
                                                </div>
                                            ";
            }
            // line 697
            yield "                                            <div class=\"text-start ms-2\">
                                                <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                                                    ";
            // line 699
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 699, $this->source); })()), "user", [], "any", false, false, false, 699), "prenom", [], "any", false, false, false, 699), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 699, $this->source); })()), "user", [], "any", false, false, false, 699), "nom", [], "any", false, false, false, 699), "html", null, true);
            yield "
                                                </p>
                                                <small class=\"text-muted d-none d-sm-block\">
                                                    ";
            // line 702
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 702, $this->source); })()), "user", [], "any", false, false, false, 702), "roles", [], "any", false, false, false, 702))) {
                // line 703
                yield "                                                        <span class=\"badge badge-admin\">Admin</span>
                                                    ";
            } else {
                // line 705
                yield "                                                        <span class=\"badge badge-etudiant\">Utilisateur</span>
                                                    ";
            }
            // line 707
            yield "                                                </small>
                                            </div>
                                        </div>
                                    ";
        } else {
            // line 711
            yield "                                        <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                        <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                                    ";
        }
        // line 714
        yield "                                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                                <div class=\"dropdown-header p-3\">
                                    ";
        // line 719
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 719, $this->source); })()), "user", [], "any", false, false, false, 719)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 720
            yield "                                        <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 720, $this->source); })()), "user", [], "any", false, false, false, 720), "prenom", [], "any", false, false, false, 720), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 720, $this->source); })()), "user", [], "any", false, false, false, 720), "nom", [], "any", false, false, false, 720), "html", null, true);
            yield "</h6>
                                        <p class=\"text-muted mb-0\">";
            // line 721
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 721, $this->source); })()), "user", [], "any", false, false, false, 721), "email", [], "any", false, false, false, 721), "html", null, true);
            yield "</p>
                                        <small class=\"text-muted\">
                                            ";
            // line 723
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 723, $this->source); })()), "user", [], "any", false, false, false, 723), "roles", [], "any", false, false, false, 723))) {
                // line 724
                yield "                                                <span class=\"badge badge-admin\">Administrateur</span>
                                            ";
            } else {
                // line 726
                yield "                                                <span class=\"badge badge-etudiant\">Utilisateur</span>
                                            ";
            }
            // line 728
            yield "                                        </small>
                                    ";
        } else {
            // line 730
            yield "                                        <h6 class=\"mb-0\">Non connecté</h6>
                                        <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                                    ";
        }
        // line 733
        yield "                                </div>
                                <div class=\"dropdown-divider\"></div>
                                ";
        // line 735
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 735, $this->source); })()), "user", [], "any", false, false, false, 735)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 736
            yield "                                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 736, $this->source); })()), "user", [], "any", false, false, false, 736), "id", [], "any", false, false, false, 736)]), "html", null, true);
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
            // line 746
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 746, $this->source); })()), "user", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746)]), "html", null, true);
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
        // line 758
        yield "                                <a class=\"dropdown-item preview-item\" href=\"";
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
                                    <span class=\"page-title-icon bg-gradient-warning text-white me-2\">
                                        <i class=\"mdi mdi-account-edit\"></i>
                                    </span> 
                                    Modifier l'Utilisateur
                                </h3>
                                <nav aria-label=\"breadcrumb\">
                                    <ul class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 789
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Utilisateurs</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 790
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 790, $this->source); })()), "id", [], "any", false, false, false, 790)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 790, $this->source); })()), "prenom", [], "any", false, false, false, 790), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 790, $this->source); })()), "nom", [], "any", false, false, false, 790), "html", null, true);
        yield "</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
                                    </ul>
                                </nav>
                                ";
        // line 794
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 794, $this->source); })()), "user", [], "any", false, false, false, 794)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 795
            yield "                                    <div class=\"mt-2\">
                                        <small class=\"text-muted\">
                                            <i class=\"mdi mdi-account me-1\"></i>
                                            Connecté en tant que: <strong>";
            // line 798
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 798, $this->source); })()), "user", [], "any", false, false, false, 798), "prenom", [], "any", false, false, false, 798), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 798, $this->source); })()), "user", [], "any", false, false, false, 798), "nom", [], "any", false, false, false, 798), "html", null, true);
            yield "</strong>
                                            ";
            // line 799
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 799, $this->source); })()), "user", [], "any", false, false, false, 799), "roles", [], "any", false, false, false, 799))) {
                // line 800
                yield "                                                <span class=\"badge badge-admin ms-2\">Administrateur</span>
                                            ";
            }
            // line 802
            yield "                                        </small>
                                    </div>
                                ";
        }
        // line 805
        yield "                            </div>
                        </div>
                    </div>

                    <!-- User Info Card -->
                    <div class=\"row mb-4\">
                        <div class=\"col-12\">
                            <div class=\"user-info-card\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-auto\">
                                        ";
        // line 815
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 815, $this->source); })()), "profilePic", [], "any", false, false, false, 815)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 816
            yield "                                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 816, $this->source); })()), "profilePic", [], "any", false, false, false, 816))), "html", null, true);
            yield "\" 
                                                 alt=\"";
            // line 817
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 817, $this->source); })()), "prenom", [], "any", false, false, false, 817), "html", null, true);
            yield "\" 
                                                 style=\"width: 90px; height: 90px; border-radius: 50%; border: 3px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.1);\">
                                        ";
        } else {
            // line 820
            yield "                                            <div class=\"user-avatar-large\">
                                                ";
            // line 821
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 821, $this->source); })()), "prenom", [], "any", false, false, false, 821))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 821, $this->source); })()), "nom", [], "any", false, false, false, 821))), "html", null, true);
            yield "
                                            </div>
                                        ";
        }
        // line 824
        yield "                                    </div>
                                    <div class=\"col\">
                                        <h4 class=\"mb-1\">";
        // line 826
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 826, $this->source); })()), "prenom", [], "any", false, false, false, 826), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 826, $this->source); })()), "nom", [], "any", false, false, false, 826), "html", null, true);
        yield "</h4>
                                        <p class=\"mb-0 opacity-90\">";
        // line 827
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 827, $this->source); })()), "email", [], "any", false, false, false, 827), "html", null, true);
        yield "</p>
                                        <p class=\"mb-0 opacity-90\">
                                            <i class=\"mdi mdi-identifier me-1\"></i>ID: ";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 829, $this->source); })()), "id", [], "any", false, false, false, 829), "html", null, true);
        yield " | 
                                            <i class=\"mdi mdi-calendar me-1\"></i>Date de naissance: ";
        // line 830
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 830, $this->source); })()), "DateDeNaissance", [], "any", false, false, false, 830)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 830, $this->source); })()), "DateDeNaissance", [], "any", false, false, false, 830), "d/m/Y"), "html", null, true)) : (""));
        yield "
                                        </p>
                                        <div class=\"mt-2\">
                                            ";
        // line 833
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 833, $this->source); })()), "roles", [], "any", false, false, false, 833))) {
            // line 834
            yield "                                                <span class=\"badge badge-admin\">Administrateur</span>
                                            ";
        } else {
            // line 836
            yield "                                                <span class=\"badge badge-etudiant\">Utilisateur</span>
                                            ";
        }
        // line 838
        yield "                                        </div>
                                        <div class=\"edit-mode-badge mt-3\">
                                            <i class=\"mdi mdi-pencil me-1\"></i>Mode Édition Activé
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Container -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"form-container\">
                                <!-- Form Header -->
                                <div class=\"form-header\">
                                    <h3><i class=\"mdi mdi-account-edit\"></i> Modification de l'Utilisateur</h3>
                                    <p class=\"mb-0 opacity-90\">Modifiez les informations de ";
        // line 855
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 855, $this->source); })()), "prenom", [], "any", false, false, false, 855), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 855, $this->source); })()), "nom", [], "any", false, false, false, 855), "html", null, true);
        yield "</p>
                                </div>
                                
                                ";
        // line 858
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 858, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 870
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), "nom", [], "any", false, false, false, 870), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                                                ";
        // line 871
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 871, $this->source); })()), "nom", [], "any", false, false, false, 871), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 875
        yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 877
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 877, $this->source); })()), "nom", [], "any", false, false, false, 877), 'errors');
        yield "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group mb-4\">
                                                ";
        // line 883
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 883, $this->source); })()), "prenom", [], "any", false, false, false, 883), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                                                ";
        // line 884
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 884, $this->source); })()), "prenom", [], "any", false, false, false, 884), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 888
        yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 890
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 890, $this->source); })()), "prenom", [], "any", false, false, false, 890), 'errors');
        yield "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group mb-4\">
                                                ";
        // line 899
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 899, $this->source); })()), "email", [], "any", false, false, false, 899), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                                                ";
        // line 900
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 900, $this->source); })()), "email", [], "any", false, false, false, 900), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 904
        yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 906
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 906, $this->source); })()), "email", [], "any", false, false, false, 906), 'errors');
        yield "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group mb-4\">
                                                ";
        // line 912
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 912, $this->source); })()), "numTel", [], "any", false, false, false, 912), 'label');
        yield "
                                                ";
        // line 913
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 913, $this->source); })()), "numTel", [], "any", false, false, false, 913), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "+216 XX XXX XXX"]]);
        // line 918
        yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 920
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 920, $this->source); })()), "numTel", [], "any", false, false, false, 920), 'errors');
        yield "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group mb-4\">
                                                ";
        // line 929
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 929, $this->source); })()), "DateDeNaissance", [], "any", false, false, false, 929), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                                                ";
        // line 930
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 930, $this->source); })()), "DateDeNaissance", [], "any", false, false, false, 930), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 934
        yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 936
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 936, $this->source); })()), "DateDeNaissance", [], "any", false, false, false, 936), 'errors');
        yield "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group mb-4\">
                                                ";
        // line 942
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 942, $this->source); })()), "sexe", [], "any", false, false, false, 942), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                                                <div class=\"radio-group\">
                                                    ";
        // line 944
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 944, $this->source); })()), "sexe", [], "any", false, false, false, 944), 'widget');
        yield "
                                                </div>
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 947
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 947, $this->source); })()), "sexe", [], "any", false, false, false, 947), 'errors');
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
        // line 964
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 964, $this->source); })()), "classe", [], "any", false, false, false, 964), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                                                ";
        // line 965
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 965, $this->source); })()), "classe", [], "any", false, false, false, 965), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 969
        yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 971
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 971, $this->source); })()), "classe", [], "any", false, false, false, 971), 'errors');
        yield "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group mb-4\">
                                                ";
        // line 977
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 977, $this->source); })()), "roles", [], "any", false, false, false, 977), 'label', ["label_attr" => ["class" => "required-field"]]);
        yield "
                                                <div class=\"checkbox-group\">
                                                    ";
        // line 979
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 979, $this->source); })()), "roles", [], "any", false, false, false, 979), 'widget');
        yield "
                                                </div>
                                                <div class=\"invalid-feedback\">
                                                    ";
        // line 982
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 982, $this->source); })()), "roles", [], "any", false, false, false, 982), 'errors');
        yield "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Password Section (Optional) -->
                                <div class=\"password-section\">
                                    <h4 class=\"form-section-title\">
                                        <i class=\"mdi mdi-lock-reset\"></i>
                                        Changer le mot de passe (optionnel)
                                    </h4>
                                    
                                    <div class=\"form-group mb-4\">
                                        ";
        // line 997
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 997, $this->source); })()), "plainPassword", [], "any", false, false, false, 997), 'label');
        yield "
                                        ";
        // line 998
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 998, $this->source); })()), "plainPassword", [], "any", false, false, false, 998), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Laissez vide pour garder le mot de passe actuel"]]);
        // line 1003
        yield "
                                        <p class=\"password-note\">
                                            <i class=\"mdi mdi-information-outline me-1\"></i>
                                            Remplissez uniquement si vous souhaitez changer le mot de passe. Minimum 6 caractères.
                                        </p>
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 1009
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1009, $this->source); })()), "plainPassword", [], "any", false, false, false, 1009), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Profile Picture Section -->
                                <div class=\"form-section\">
                                    <h4 class=\"form-section-title\">
                                        <i class=\"mdi mdi-account-box\"></i>
                                        Photo de Profil
                                    </h4>
                                    
                                    ";
        // line 1021
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1021, $this->source); })()), "profilePic", [], "any", false, false, false, 1021)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1022
            yield "                                        <div class=\"mb-3\">
                                            <p class=\"text-muted\">Photo actuelle:</p>
                                            <img src=\"";
            // line 1024
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1024, $this->source); })()), "profilePic", [], "any", false, false, false, 1024))), "html", null, true);
            yield "\" 
                                                 alt=\"Photo actuelle\" 
                                                 style=\"max-width: 200px; max-height: 200px; border-radius: 10px; border: 2px solid #667eea;\">
                                        </div>
                                    ";
        }
        // line 1029
        yield "                                    
                                    <div class=\"form-group mb-4\">
                                        ";
        // line 1031
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1031, $this->source); })()), "profilePicFile", [], "any", false, false, false, 1031), 'label');
        yield "
                                        ";
        // line 1032
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1032, $this->source); })()), "profilePicFile", [], "any", false, false, false, 1032), 'widget', ["attr" => ["class" => "form-control", "id" => "profilePicInput", "onchange" => "previewImage(this)"]]);
        // line 1038
        yield "
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 1040
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1040, $this->source); })()), "profilePicFile", [], "any", false, false, false, 1040), 'errors');
        yield "
                                        </div>
                                        <small class=\"form-text\">
                                            ";
        // line 1043
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1043, $this->source); })()), "profilePic", [], "any", false, false, false, 1043)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1044
            yield "                                                Téléchargez une nouvelle image pour remplacer l'actuelle.
                                            ";
        } else {
            // line 1046
            yield "                                                Formats acceptés: JPG, PNG, GIF, WEBP. Taille maximale: 2 Mo
                                            ";
        }
        // line 1048
        yield "                                        </small>
                                        
                                        <!-- Image Preview -->
                                        <div id=\"imagePreview\" class=\"mt-3\" style=\"display: none;\">
                                            <p class=\"text-muted\">Nouvelle photo:</p>
                                            <img id=\"previewImg\" src=\"\" alt=\"Preview\" style=\"max-width: 200px; max-height: 200px; border-radius: 10px; border: 2px solid #ffa726;\">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class=\"action-buttons\">
                                    <a href=\"";
        // line 1060
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-secondary\">
                                        <i class=\"mdi mdi-arrow-left me-2\"></i>Annuler
                                    </a>
                                    <a href=\"";
        // line 1063
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1063, $this->source); })()), "id", [], "any", false, false, false, 1063)]), "html", null, true);
        yield "\" class=\"btn btn-info\">
                                        <i class=\"mdi mdi-eye me-2\"></i>Voir le profil
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-warning\">
                                        <i class=\"mdi mdi-content-save me-2\"></i>Mettre à jour
                                    </button>
                                </div>
                                
                                ";
        // line 1071
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1071, $this->source); })()), 'form_end');
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
        // line 1081
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                        </span>
                        <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                            Modification d'utilisateur: ";
        // line 1084
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1084, $this->source); })()), "prenom", [], "any", false, false, false, 1084), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1084, $this->source); })()), "nom", [], "any", false, false, false, 1084), "html", null, true);
        yield "
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1094
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1095
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 1096
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1097
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1098
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Phone number formatting
            const phoneInput = document.querySelector('#";
        // line 1103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1103, $this->source); })()), "numTel", [], "any", false, false, false, 1103), "vars", [], "any", false, false, false, 1103), "id", [], "any", false, false, false, 1103), "html", null, true);
        yield "');
            if (phoneInput) {
                phoneInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\\D/g, '');
                    if (value.length > 0) {
                        value = '+216 ' + value;
                        if (value.length > 10) {
                            value = value.substring(0, 10) + ' ' + value.substring(10);
                        }
                        if (value.length > 15) {
                            value = value.substring(0, 15);
                        }
                    }
                    e.target.value = value;
                });
            }
            
            // Form submission loading state
            const form = document.querySelector('form');
            if (form) {
                const submitBtn = form.querySelector('button[type=\"submit\"]');
                
                form.addEventListener('submit', function() {
                    submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-2\"></i>Mise à jour...';
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
            
            // Show warning if leaving page with unsaved changes
            let formChanged = false;
            const formInputs = document.querySelectorAll('form input, form select, form textarea');
            
            formInputs.forEach(input => {
                input.addEventListener('input', () => {
                    formChanged = true;
                });
                
                input.addEventListener('change', () => {
                    formChanged = true;
                });
            });
            
            window.addEventListener('beforeunload', (e) => {
                if (formChanged) {
                    e.preventDefault();
                    e.returnValue = 'Vous avez des modifications non sauvegardées. Êtes-vous sûr de vouloir quitter ?';
                }
            });
            
            // Prevent accidental navigation
            const cancelButton = document.querySelector('a[href*=\"index\"]');
            if (cancelButton) {
                cancelButton.addEventListener('click', (e) => {
                    if (formChanged) {
                        const confirmLeave = confirm('Vous avez des modifications non sauvegardées. Êtes-vous sûr de vouloir annuler ?');
                        if (!confirmLeave) {
                            e.preventDefault();
                        }
                    }
                });
            }
        });
        
        // Image preview function
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const img = document.getElementById('previewImg');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    img.src = e.target.result;
                    preview.style.display = 'block';
                }
                
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
                img.src = '';
            }
        }
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
        return "user/edit.html.twig";
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
        return array (  1581 => 1103,  1573 => 1098,  1569 => 1097,  1565 => 1096,  1560 => 1095,  1547 => 1094,  1525 => 1084,  1519 => 1081,  1506 => 1071,  1495 => 1063,  1489 => 1060,  1475 => 1048,  1471 => 1046,  1467 => 1044,  1465 => 1043,  1459 => 1040,  1455 => 1038,  1453 => 1032,  1449 => 1031,  1445 => 1029,  1437 => 1024,  1433 => 1022,  1431 => 1021,  1416 => 1009,  1408 => 1003,  1406 => 998,  1402 => 997,  1384 => 982,  1378 => 979,  1373 => 977,  1364 => 971,  1360 => 969,  1358 => 965,  1354 => 964,  1334 => 947,  1328 => 944,  1323 => 942,  1314 => 936,  1310 => 934,  1308 => 930,  1304 => 929,  1292 => 920,  1288 => 918,  1286 => 913,  1282 => 912,  1273 => 906,  1269 => 904,  1267 => 900,  1263 => 899,  1251 => 890,  1247 => 888,  1245 => 884,  1241 => 883,  1232 => 877,  1228 => 875,  1226 => 871,  1222 => 870,  1207 => 858,  1199 => 855,  1180 => 838,  1176 => 836,  1172 => 834,  1170 => 833,  1164 => 830,  1160 => 829,  1155 => 827,  1149 => 826,  1145 => 824,  1138 => 821,  1135 => 820,  1129 => 817,  1124 => 816,  1122 => 815,  1110 => 805,  1105 => 802,  1101 => 800,  1099 => 799,  1093 => 798,  1088 => 795,  1086 => 794,  1075 => 790,  1071 => 789,  1036 => 758,  1021 => 746,  1007 => 736,  1005 => 735,  1001 => 733,  996 => 730,  992 => 728,  988 => 726,  984 => 724,  982 => 723,  977 => 721,  970 => 720,  968 => 719,  961 => 714,  954 => 711,  948 => 707,  944 => 705,  940 => 703,  938 => 702,  930 => 699,  926 => 697,  919 => 694,  916 => 693,  910 => 690,  905 => 689,  903 => 688,  900 => 687,  898 => 686,  856 => 647,  838 => 632,  753 => 549,  742 => 541,  739 => 540,  728 => 532,  725 => 531,  723 => 530,  702 => 511,  697 => 508,  693 => 506,  689 => 504,  685 => 502,  683 => 501,  678 => 499,  671 => 498,  669 => 497,  664 => 494,  658 => 492,  655 => 491,  648 => 488,  645 => 487,  639 => 484,  634 => 483,  631 => 482,  629 => 481,  618 => 473,  614 => 472,  609 => 470,  605 => 469,  598 => 464,  585 => 463,  123 => 11,  119 => 10,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier l'Utilisateur{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
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
            border-color: #ffa726;
            background-color: #ffa726;
            box-shadow: 0 5px 15px rgba(255, 167, 38, 0.2);
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
            border-bottom: 3px solid #ffa726;
            position: relative;
            display: inline-block;
        }
        
        .form-section-title i {
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
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
            border-color: #ffa726;
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
            background-color: #ffa726;
            border-color: #ffa726;
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
        .btn-warning {
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
            border: none;
            padding: 14px 35px;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 16px;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(255, 167, 38, 0.3);
            color: white;
        }
        
        .btn-warning:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 167, 38, 0.4);
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
        
        .btn-info {
            background: linear-gradient(135deg, #26c6da 0%, #00acc1 100%);
            border: none;
            padding: 14px 35px;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(38, 198, 218, 0.3);
            color: white;
        }
        
        .btn-info:hover {
            background: linear-gradient(135deg, #00acc1 0%, #26c6da 100%);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(38, 198, 218, 0.4);
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
        
        /* Password section */
        .password-section {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 25px;
            margin-top: 20px;
            border: 2px solid #ffe0b2;
            box-shadow: 0 4px 15px rgba(255, 224, 178, 0.3);
        }
        
        .password-note {
            font-size: 0.9em;
            color: #ff8f00;
            margin-top: 10px;
            padding: 10px 15px;
            background: rgba(255, 241, 224, 0.5);
            border-radius: 8px;
            border-left: 4px solid #ffb74d;
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
            background-color: #ffa726;
            padding: 5px;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }
        
        /* Select dropdown styling */
        .form-select {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffa726' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e\");
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
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
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
        
        /* User info card */
        .user-info-card {
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
            color: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px rgba(255, 167, 38, 0.3);
            border: none;
        }
        
        .user-avatar-large {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: white;
            color: #ffa726;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            margin: 0 auto 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        /* Edit specific styles */
        .edit-mode-badge {
            background: linear-gradient(135deg, #ffa726 0%, #ff7043 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
            font-size: 0.9rem;
            box-shadow: 0 3px 10px rgba(255, 167, 38, 0.3);
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
{% endblock %}

{% block body %}
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
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" style=\"border-color: #d1d9ff; background: white;\">
                            </form>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav navbar-nav-right\">
                        <li class=\"nav-item dropdown border-left\">
                            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <span class=\"count bg-warning\">2</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                                <h6 class=\"p-3 mb-0\">Notifications</h6>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item preview-item\">
                                    <div class=\"preview-thumbnail\">
                                        <div class=\"preview-icon bg-warning rounded-circle\">
                                            <i class=\"mdi mdi-account-edit\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Modification utilisateur</p>
                                        <p class=\"text-muted ellipsis mb-0\"> Mise à jour en cours</p>
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
                                    <span class=\"page-title-icon bg-gradient-warning text-white me-2\">
                                        <i class=\"mdi mdi-account-edit\"></i>
                                    </span> 
                                    Modifier l'Utilisateur
                                </h3>
                                <nav aria-label=\"breadcrumb\">
                                    <ul class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_user_index') }}\">Utilisateurs</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_user_show', { id: user.id }) }}\">{{ user.prenom }} {{ user.nom }}</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier</li>
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

                    <!-- User Info Card -->
                    <div class=\"row mb-4\">
                        <div class=\"col-12\">
                            <div class=\"user-info-card\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-auto\">
                                        {% if user.profilePic %}
                                            <img src=\"{{ asset('uploads/profile_pics/' ~ user.profilePic) }}\" 
                                                 alt=\"{{ user.prenom }}\" 
                                                 style=\"width: 90px; height: 90px; border-radius: 50%; border: 3px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.1);\">
                                        {% else %}
                                            <div class=\"user-avatar-large\">
                                                {{ user.prenom|first|upper }}{{ user.nom|first|upper }}
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col\">
                                        <h4 class=\"mb-1\">{{ user.prenom }} {{ user.nom }}</h4>
                                        <p class=\"mb-0 opacity-90\">{{ user.email }}</p>
                                        <p class=\"mb-0 opacity-90\">
                                            <i class=\"mdi mdi-identifier me-1\"></i>ID: {{ user.id }} | 
                                            <i class=\"mdi mdi-calendar me-1\"></i>Date de naissance: {{ user.DateDeNaissance ? user.DateDeNaissance|date('d/m/Y') }}
                                        </p>
                                        <div class=\"mt-2\">
                                            {% if 'ROLE_ADMIN' in user.roles %}
                                                <span class=\"badge badge-admin\">Administrateur</span>
                                            {% else %}
                                                <span class=\"badge badge-etudiant\">Utilisateur</span>
                                            {% endif %}
                                        </div>
                                        <div class=\"edit-mode-badge mt-3\">
                                            <i class=\"mdi mdi-pencil me-1\"></i>Mode Édition Activé
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Container -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"form-container\">
                                <!-- Form Header -->
                                <div class=\"form-header\">
                                    <h3><i class=\"mdi mdi-account-edit\"></i> Modification de l'Utilisateur</h3>
                                    <p class=\"mb-0 opacity-90\">Modifiez les informations de {{ user.prenom }} {{ user.nom }}</p>
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
                                                        'class': 'form-control'
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
                                                        'class': 'form-control'
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
                                                        'class': 'form-control'
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Password Section (Optional) -->
                                <div class=\"password-section\">
                                    <h4 class=\"form-section-title\">
                                        <i class=\"mdi mdi-lock-reset\"></i>
                                        Changer le mot de passe (optionnel)
                                    </h4>
                                    
                                    <div class=\"form-group mb-4\">
                                        {{ form_label(form.plainPassword) }}
                                        {{ form_widget(form.plainPassword, {
                                            'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Laissez vide pour garder le mot de passe actuel'
                                            }
                                        }) }}
                                        <p class=\"password-note\">
                                            <i class=\"mdi mdi-information-outline me-1\"></i>
                                            Remplissez uniquement si vous souhaitez changer le mot de passe. Minimum 6 caractères.
                                        </p>
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(form.plainPassword) }}
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Profile Picture Section -->
                                <div class=\"form-section\">
                                    <h4 class=\"form-section-title\">
                                        <i class=\"mdi mdi-account-box\"></i>
                                        Photo de Profil
                                    </h4>
                                    
                                    {% if user.profilePic %}
                                        <div class=\"mb-3\">
                                            <p class=\"text-muted\">Photo actuelle:</p>
                                            <img src=\"{{ asset('uploads/profile_pics/' ~ user.profilePic) }}\" 
                                                 alt=\"Photo actuelle\" 
                                                 style=\"max-width: 200px; max-height: 200px; border-radius: 10px; border: 2px solid #667eea;\">
                                        </div>
                                    {% endif %}
                                    
                                    <div class=\"form-group mb-4\">
                                        {{ form_label(form.profilePicFile) }}
                                        {{ form_widget(form.profilePicFile, {
                                            'attr': {
                                                'class': 'form-control',
                                                'id': 'profilePicInput',
                                                'onchange': 'previewImage(this)'
                                            }
                                        }) }}
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(form.profilePicFile) }}
                                        </div>
                                        <small class=\"form-text\">
                                            {% if user.profilePic %}
                                                Téléchargez une nouvelle image pour remplacer l'actuelle.
                                            {% else %}
                                                Formats acceptés: JPG, PNG, GIF, WEBP. Taille maximale: 2 Mo
                                            {% endif %}
                                        </small>
                                        
                                        <!-- Image Preview -->
                                        <div id=\"imagePreview\" class=\"mt-3\" style=\"display: none;\">
                                            <p class=\"text-muted\">Nouvelle photo:</p>
                                            <img id=\"previewImg\" src=\"\" alt=\"Preview\" style=\"max-width: 200px; max-height: 200px; border-radius: 10px; border: 2px solid #ffa726;\">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class=\"action-buttons\">
                                    <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-secondary\">
                                        <i class=\"mdi mdi-arrow-left me-2\"></i>Annuler
                                    </a>
                                    <a href=\"{{ path('app_user_show', { id: user.id }) }}\" class=\"btn btn-info\">
                                        <i class=\"mdi mdi-eye me-2\"></i>Voir le profil
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-warning\">
                                        <i class=\"mdi mdi-content-save me-2\"></i>Mettre à jour
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
                            Modification d'utilisateur: {{ user.prenom }} {{ user.nom }}
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('assets/js/misc.js') }}\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Phone number formatting
            const phoneInput = document.querySelector('#{{ form.numTel.vars.id }}');
            if (phoneInput) {
                phoneInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\\D/g, '');
                    if (value.length > 0) {
                        value = '+216 ' + value;
                        if (value.length > 10) {
                            value = value.substring(0, 10) + ' ' + value.substring(10);
                        }
                        if (value.length > 15) {
                            value = value.substring(0, 15);
                        }
                    }
                    e.target.value = value;
                });
            }
            
            // Form submission loading state
            const form = document.querySelector('form');
            if (form) {
                const submitBtn = form.querySelector('button[type=\"submit\"]');
                
                form.addEventListener('submit', function() {
                    submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-2\"></i>Mise à jour...';
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
            
            // Show warning if leaving page with unsaved changes
            let formChanged = false;
            const formInputs = document.querySelectorAll('form input, form select, form textarea');
            
            formInputs.forEach(input => {
                input.addEventListener('input', () => {
                    formChanged = true;
                });
                
                input.addEventListener('change', () => {
                    formChanged = true;
                });
            });
            
            window.addEventListener('beforeunload', (e) => {
                if (formChanged) {
                    e.preventDefault();
                    e.returnValue = 'Vous avez des modifications non sauvegardées. Êtes-vous sûr de vouloir quitter ?';
                }
            });
            
            // Prevent accidental navigation
            const cancelButton = document.querySelector('a[href*=\"index\"]');
            if (cancelButton) {
                cancelButton.addEventListener('click', (e) => {
                    if (formChanged) {
                        const confirmLeave = confirm('Vous avez des modifications non sauvegardées. Êtes-vous sûr de vouloir annuler ?');
                        if (!confirmLeave) {
                            e.preventDefault();
                        }
                    }
                });
            }
        });
        
        // Image preview function
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const img = document.getElementById('previewImg');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    img.src = e.target.result;
                    preview.style.display = 'block';
                }
                
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
                img.src = '';
            }
        }
    </script>
{% endblock %}", "user/edit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\edit.html.twig");
    }
}
