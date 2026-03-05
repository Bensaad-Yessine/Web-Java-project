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

/* proposition_reunion/index.html.twig */
class __TwigTemplate_5f78a1ccf0276a93def24caa53fad847 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposition_reunion/index.html.twig"));

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
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>C:/Users/MSI/Documents/Symfonyweb/src/Controller/PropositionReunionController.php</code></li>
        <li>Your template at <code>C:/Users/MSI/Documents/Symfonyweb/templates/proposition_reunion/index.html.twig</code></li>
    </ul>
</div>

<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Propositions de Réunion</title>
    
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" />
    
    <style>
        /* Profile Avatar Styles */
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
        
        /* Custom Styles */
        .card-header-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 20px 30px;
        }
        
        .btn-create {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            border: none;
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s;
            color: white;
        }
        
        .btn-create:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 233, 123, 0.3);
            color: white;
        }
        
        .btn-back {
            background: #f8f9fa;
            border: 1px solid #ddd;
            color: #333;
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-back:hover {
            background: #e9ecef;
            border-color: #ccc;
            color: #333;
        }
        
        .btn-view {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            border: none;
            padding: 6px 15px;
            font-weight: 500;
            border-radius: 6px;
            font-size: 0.85rem;
            color: white;
        }
        
        .btn-edit {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            border: none;
            padding: 6px 15px;
            font-weight: 500;
            border-radius: 6px;
            font-size: 0.85rem;
            color: white;
        }
        
        .btn-delete {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border: none;
            padding: 6px 15px;
            font-weight: 500;
            border-radius: 6px;
            font-size: 0.85rem;
            color: white;
        }
        
        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .status-proposed { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
        .status-confirmed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
        .status-cancelled { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
        .status-postponed { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; }
        .status-en-attente { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
        
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }
        
        .table-custom thead th {
            background: #f8f9fa;
            border-bottom: 2px solid #667eea;
            font-weight: 600;
            color: #333;
            padding: 15px;
        }
        
        .table-custom tbody td {
            padding: 15px;
            vertical-align: middle;
            border-bottom: 1px solid #eee;
        }
        
        .table-custom tbody tr:hover {
            background-color: rgba(102, 126, 234, 0.05);
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }
        
        .empty-state-icon {
            font-size: 60px;
            color: #dee2e6;
            margin-bottom: 20px;
        }
        
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
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
            margin-bottom: 15px;
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
        
        .gradient-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .gradient-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
        .gradient-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
        .gradient-5 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
        
        .alert {
            border-radius: 10px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .search-box {
            max-width: 300px;
        }
        
        .modal-header-danger {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            border-radius: 10px 10px 0 0;
        }
        
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        
        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.9rem;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 5px;
            }
            
            .btn-view, .btn-edit, .btn-delete {
                padding: 5px 10px;
                font-size: 0.8rem;
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
        // line 286
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
                    <img src=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
                </a>
                <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
                    <img src=\"";
        // line 290
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
        // line 298
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "user", [], "any", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 299
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "user", [], "any", false, false, false, 299), "profilePic", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 300
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "user", [], "any", false, false, false, 300), "profilePic", [], "any", false, false, false, 300))), "html", null, true);
                yield "\" 
                                             alt=\"";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "user", [], "any", false, false, false, 301), "prenom", [], "any", false, false, false, 301), "html", null, true);
                yield "\" 
                                             class=\"img-xs rounded-circle\">
                                    ";
            } else {
                // line 304
                yield "                                        <img class=\"img-xs rounded-circle\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
                yield "\" alt=\"\">
                                    ";
            }
            // line 306
            yield "                                ";
        } else {
            // line 307
            yield "                                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                ";
        }
        // line 309
        yield "                                <span class=\"count bg-success\"></span>
                            </div>
                            <div class=\"profile-name\">
                                ";
        // line 312
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "user", [], "any", false, false, false, 312)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 313
            yield "                                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 313, $this->source); })()), "user", [], "any", false, false, false, 313), "prenom", [], "any", false, false, false, 313), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 313, $this->source); })()), "user", [], "any", false, false, false, 313), "nom", [], "any", false, false, false, 313), "html", null, true);
            yield "</h5>
                                    <span class=\"text-muted\">";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 314, $this->source); })()), "user", [], "any", false, false, false, 314), "email", [], "any", false, false, false, 314), "html", null, true);
            yield "</span>
                                    <div class=\"mt-1\">
                                        ";
            // line 316
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "user", [], "any", false, false, false, 316), "roles", [], "any", false, false, false, 316))) {
                // line 317
                yield "                                            <span class=\"badge badge-danger badge-sm\">Admin</span>
                                        ";
            } else {
                // line 319
                yield "                                            <span class=\"badge badge-primary badge-sm\">Utilisateur</span>
                                        ";
            }
            // line 321
            yield "                                    </div>
                                ";
        } else {
            // line 323
            yield "                                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                                    <span>Veuillez vous connecter</span>
                                ";
        }
        // line 326
        yield "                            </div>
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
        // line 342
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-account-group\"></i></span>
                        <span class=\"menu-title\">Utilisateurs</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-book-open-page-variant\"></i></span>
                        <span class=\"menu-title\">Matieres</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 356
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-school\"></i></span>
                        <span class=\"menu-title\">Classes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 363
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-office-building\"></i></span>
                        <span class=\"menu-title\">Salles</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 370
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-calendar-clock\"></i></span>
                        <span class=\"menu-title\">Séances</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items active\">
                    <a class=\"nav-link\" href=\"";
        // line 377
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-account-multiple\"></i></span>
                        <span class=\"menu-title\">Groupes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 384
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
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 398
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
                        <span class=\"menu-title\">Exercices de santé</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"";
        // line 405
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
        // line 418
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
                                            <i class=\"mdi mdi-calendar\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Propositions de réunion</p>
                                        <p class=\"text-muted ellipsis mb-0\">Groupe: ";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 448, $this->source); })()), "nomProjet", [], "any", false, false, false, 448), "html", null, true);
        yield "</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <div class=\"navbar-profile\">
                                    ";
        // line 457
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 457, $this->source); })()), "user", [], "any", false, false, false, 457)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 458
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 458, $this->source); })()), "user", [], "any", false, false, false, 458), "profilePic", [], "any", false, false, false, 458)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 459
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 459, $this->source); })()), "user", [], "any", false, false, false, 459), "profilePic", [], "any", false, false, false, 459))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 460
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 460, $this->source); })()), "user", [], "any", false, false, false, 460), "prenom", [], "any", false, false, false, 460), "html", null, true);
                yield "\" 
                                                 class=\"img-xs rounded-circle\">
                                        ";
            } else {
                // line 463
                yield "                                            <img class=\"img-xs rounded-circle\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
                yield "\" alt=\"\">
                                        ";
            }
            // line 465
            yield "                                        <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 465, $this->source); })()), "user", [], "any", false, false, false, 465), "prenom", [], "any", false, false, false, 465), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 465, $this->source); })()), "user", [], "any", false, false, false, 465), "nom", [], "any", false, false, false, 465), "html", null, true);
            yield "</p>
                                    ";
        } else {
            // line 467
            yield "                                        <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                        <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                                    ";
        }
        // line 470
        yield "                                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                                <div class=\"dropdown-header p-3\">
                                    ";
        // line 475
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 475, $this->source); })()), "user", [], "any", false, false, false, 475)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 476
            yield "                                        <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 476, $this->source); })()), "user", [], "any", false, false, false, 476), "prenom", [], "any", false, false, false, 476), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 476, $this->source); })()), "user", [], "any", false, false, false, 476), "nom", [], "any", false, false, false, 476), "html", null, true);
            yield "</h6>
                                        <p class=\"text-muted mb-0\">";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 477, $this->source); })()), "user", [], "any", false, false, false, 477), "email", [], "any", false, false, false, 477), "html", null, true);
            yield "</p>
                                        <small class=\"text-muted\">
                                            ";
            // line 479
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 479, $this->source); })()), "user", [], "any", false, false, false, 479), "roles", [], "any", false, false, false, 479))) {
                // line 480
                yield "                                                <span class=\"badge badge-danger\">Administrateur</span>
                                            ";
            } else {
                // line 482
                yield "                                                <span class=\"badge badge-primary\">Utilisateur</span>
                                            ";
            }
            // line 484
            yield "                                        </small>
                                    ";
        } else {
            // line 486
            yield "                                        <h6 class=\"mb-0\">Non connecté</h6>
                                        <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                                    ";
        }
        // line 489
        yield "                                </div>
                                <div class=\"dropdown-divider\"></div>
                                ";
        // line 491
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "user", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 492
            yield "                                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 492, $this->source); })()), "user", [], "any", false, false, false, 492), "id", [], "any", false, false, false, 492)]), "html", null, true);
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
            // line 502
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 502, $this->source); })()), "user", [], "any", false, false, false, 502), "id", [], "any", false, false, false, 502)]), "html", null, true);
            yield "\">
                                        <div class=\"preview-thumbnail\">
                                            <div class=\"preview-icon bg-warning rounded-circle\">
                                                <i class=\"mdi mdi-account-edit\"></i>
                                            </div>
                                        </div>
                                        <div class=\"preview-item-content\">
                                            <p class=\"preview-subject mb-1\">Modifier profil</p>
                                        </div>
                                    </a>
                                    <div class=\"dropdown-divider\"></div>
                                ";
        }
        // line 514
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

            <!-- Content -->
            <div class=\"main-panel\">
                <div class=\"content-wrapper\">
                    <!-- Flash Messages -->
                    ";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 534, $this->source); })()), "flashes", [], "any", false, false, false, 534));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 535
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 536
                yield "                            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                                <i class=\"mdi mdi-";
                // line 537
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                                ";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 542
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 543
        yield "
                    <!-- Header -->
                    <div class=\"row mb-4\">
                        <div class=\"col-12\">
                            <div class=\"page-header\">
                                <h3 class=\"page-title\">
                                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                                        <i class=\"mdi mdi-calendar-multiple\"></i>
                                    </span> 
                                    Propositions de Réunion
                                </h3>
                                <nav aria-label=\"breadcrumb\">
                                    <ul class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\">
                                            <a href=\"";
        // line 557
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">Groupes</a>
                                        </li>
                                        <li class=\"breadcrumb-item\">
                                            <a href=\"";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 560, $this->source); })()), "id", [], "any", false, false, false, 560)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 560, $this->source); })()), "nomProjet", [], "any", false, false, false, 560), "html", null, true);
        yield "</a>
                                        </li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                            Propositions
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Overview -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-3\">
                            <div class=\"stat-card\">
                                <div class=\"stat-icon gradient-1\">
                                    <i class=\"mdi mdi-calendar\"></i>
                                </div>
                                <div class=\"stat-count text-dark\">";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 578, $this->source); })())), "html", null, true);
        yield "</div>
                                <div class=\"stat-label\">Total Propositions</div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"stat-card\">
                                <div class=\"stat-icon gradient-3\">
                                    <i class=\"mdi mdi-check-circle\"></i>
                                </div>
                                <div class=\"stat-count text-dark\">
                                    ";
        // line 588
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 588, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 588, $this->source); })()), "status", [], "any", false, false, false, 588) == "confirmed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 588, $this->source); })()), "status", [], "any", false, false, false, 588) == "Confirmée")); })), "html", null, true);
        yield "
                                </div>
                                <div class=\"stat-label\">Confirmées</div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"stat-card\">
                                <div class=\"stat-icon gradient-5\">
                                    <i class=\"mdi mdi-clock\"></i>
                                </div>
                                <div class=\"stat-count text-dark\">
                                    ";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 599, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 599, $this->source); })()), "status", [], "any", false, false, false, 599) == "proposed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 599, $this->source); })()), "status", [], "any", false, false, false, 599) == "En attente")); })), "html", null, true);
        yield "
                                </div>
                                <div class=\"stat-label\">En attente</div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"stat-card\">
                                <div class=\"stat-icon gradient-2\">
                                    <i class=\"mdi mdi-cancel\"></i>
                                </div>
                                <div class=\"stat-count text-dark\">
                                    ";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 610, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 610, $this->source); })()), "status", [], "any", false, false, false, 610) == "cancelled") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 610, $this->source); })()), "status", [], "any", false, false, false, 610) == "Annulée")); })), "html", null, true);
        yield "
                                </div>
                                <div class=\"stat-label\">Annulées</div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions Bar -->
                    <div class=\"row mb-4\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <h5 class=\"mb-0\">Propositions pour: <strong>";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 622, $this->source); })()), "nomProjet", [], "any", false, false, false, 622), "html", null, true);
        yield "</strong></h5>
                                    <small class=\"text-muted\">";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 623, $this->source); })()), "matiere", [], "any", false, false, false, 623), "html", null, true);
        yield "</small>
                                </div>
                                <div class=\"d-flex gap-3\">
                                    <a href=\"";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 626, $this->source); })()), "id", [], "any", false, false, false, 626)]), "html", null, true);
        yield "\" class=\"btn btn-back\">
                                        <i class=\"mdi mdi-arrow-left me-2\"></i>
                                        Retour au groupe
                                    </a>
                                    <a href=\"";
        // line 630
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_new", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 630, $this->source); })()), "id", [], "any", false, false, false, 630)]), "html", null, true);
        yield "\" class=\"btn btn-create\">
                                        <i class=\"mdi mdi-plus-circle me-2\"></i>
                                        Nouvelle Proposition
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header card-header-custom\">
                                    <h4 class=\"mb-0\">Liste des Propositions</h4>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 647
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 647, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 648
            yield "                                        <div class=\"table-responsive\">
                                            <table class=\"table table-custom table-hover\">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Titre</th>
                                                        <th>Date Réunion</th>
                                                        <th>Heure</th>
                                                        <th>Lieu</th>
                                                        <th>Statut</th>
                                                        <th>Créée le</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
            // line 663
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 663, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 664
                yield "                                                        <tr>
                                                            <td>";
                // line 665
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "propositionId", [], "any", false, false, false, 665), "html", null, true);
                yield "</td>
                                                            <td>
                                                                <strong>";
                // line 667
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "titre", [], "any", false, false, false, 667), "html", null, true);
                yield "</strong>
                                                                ";
                // line 668
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 668)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 669
                    yield "                                                                    <br><small class=\"text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "description", [], "any", false, false, false, 669), 0, 50), "html", null, true);
                    yield "...</small>
                                                                ";
                }
                // line 671
                yield "                                                            </td>
                                                            <td>
                                                                ";
                // line 673
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 673)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 674
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 674), "d/m/Y"), "html", null, true);
                    yield "
                                                                ";
                } else {
                    // line 676
                    yield "                                                                    <span class=\"text-muted\">Non définie</span>
                                                                ";
                }
                // line 678
                yield "                                                            </td>
                                                            <td>
                                                                ";
                // line 680
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureDebut", [], "any", false, false, false, 680) && CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureFin", [], "any", false, false, false, 680))) {
                    // line 681
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureDebut", [], "any", false, false, false, 681), "H:i"), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "heureFin", [], "any", false, false, false, 681), "H:i"), "html", null, true);
                    yield "
                                                                ";
                } else {
                    // line 683
                    yield "                                                                    <span class=\"text-muted\">Non définie</span>
                                                                ";
                }
                // line 685
                yield "                                                            </td>
                                                            <td>";
                // line 686
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "lieu", [], "any", false, false, false, 686), "html", null, true);
                yield "</td>
                                                            <td>
                                                                ";
                // line 688
                $context["status_text"] = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 688);
                // line 689
                yield "                                                                ";
                $context["status_class"] = "status-proposed";
                // line 690
                yield "                                                                
                                                                ";
                // line 691
                if ((((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 691, $this->source); })()) == "confirmed") || ((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 691, $this->source); })()) == "Confirmée"))) {
                    // line 692
                    yield "                                                                    ";
                    $context["status_class"] = "status-confirmed";
                    // line 693
                    yield "                                                                    ";
                    $context["status_text"] = "Confirmée";
                    // line 694
                    yield "                                                                ";
                } elseif ((((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 694, $this->source); })()) == "cancelled") || ((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 694, $this->source); })()) == "Annulée"))) {
                    // line 695
                    yield "                                                                    ";
                    $context["status_class"] = "status-cancelled";
                    // line 696
                    yield "                                                                    ";
                    $context["status_text"] = "Annulée";
                    // line 697
                    yield "                                                                ";
                } elseif ((((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 697, $this->source); })()) == "postponed") || ((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 697, $this->source); })()) == "Reportée"))) {
                    // line 698
                    yield "                                                                    ";
                    $context["status_class"] = "status-postponed";
                    // line 699
                    yield "                                                                    ";
                    $context["status_text"] = "Reportée";
                    // line 700
                    yield "                                                                ";
                } elseif (((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 700, $this->source); })()) == "En attente")) {
                    // line 701
                    yield "                                                                    ";
                    $context["status_class"] = "status-en-attente";
                    // line 702
                    yield "                                                                    ";
                    $context["status_text"] = "En attente";
                    // line 703
                    yield "                                                                ";
                } else {
                    // line 704
                    yield "                                                                    ";
                    $context["status_class"] = "status-proposed";
                    // line 705
                    yield "                                                                    ";
                    $context["status_text"] = "Proposée";
                    // line 706
                    yield "                                                                ";
                }
                // line 707
                yield "                                                                
                                                                <span class=\"status-badge ";
                // line 708
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_class"]) || array_key_exists("status_class", $context) ? $context["status_class"] : (function () { throw new RuntimeError('Variable "status_class" does not exist.', 708, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 708, $this->source); })()), "html", null, true);
                yield "</span>
                                                            </td>
                                                            <td>
                                                                ";
                // line 711
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateCreation", [], "any", false, false, false, 711)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 712
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateCreation", [], "any", false, false, false, 712), "d/m/Y H:i"), "html", null, true);
                    yield "
                                                                ";
                }
                // line 714
                yield "                                                            </td>
                                                            <td>
                                                                <div class=\"action-buttons\">
                                                                    <a href=\"";
                // line 717
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 717), "groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 717, $this->source); })()), "id", [], "any", false, false, false, 717)]), "html", null, true);
                yield "\" 
                                                                   class=\"btn btn-view\" title=\"Voir\">
                                                                        <i class=\"mdi mdi-eye\"></i>
                                                                    </a>
                                                                    <a href=\"";
                // line 721
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 721), "groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 721, $this->source); })()), "id", [], "any", false, false, false, 721)]), "html", null, true);
                yield "\" 
                                                                   class=\"btn btn-edit\" title=\"Modifier\">
                                                                        <i class=\"mdi mdi-pencil\"></i>
                                                                    </a>
                                                                    <button type=\"button\" class=\"btn btn-delete\" 
                                                                            data-bs-toggle=\"modal\" 
                                                                            data-bs-target=\"#deleteModal";
                // line 727
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 727), "html", null, true);
                yield "\"
                                                                            title=\"Supprimer\">
                                                                        <i class=\"mdi mdi-delete\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        <!-- Delete Modal for each proposition -->
                                                        <div class=\"modal fade\" id=\"deleteModal";
                // line 736
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 736), "html", null, true);
                yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header modal-header-danger\">
                                                                        <h5 class=\"modal-title\">
                                                                            <i class=\"mdi mdi-alert-circle me-2\"></i>
                                                                            Confirmer la suppression
                                                                        </h5>
                                                                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                                                                    </div>
                                                                    <div class=\"modal-body\">
                                                                        <p>Êtes-vous sûr de vouloir supprimer cette proposition ?</p>
                                                                        <div class=\"alert alert-warning\">
                                                                            <i class=\"mdi mdi-alert me-2\"></i>
                                                                            Cette action est irréversible.
                                                                        </div>
                                                                        <p><strong>Proposition :</strong> ";
                // line 752
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "titre", [], "any", false, false, false, 752), "html", null, true);
                yield "</p>
                                                                        <p><strong>Date :</strong> ";
                // line 753
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 753)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 753), "d/m/Y"), "html", null, true)) : ("Non définie"));
                yield "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                                        <form method=\"post\" action=\"";
                // line 757
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 757), "groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 757, $this->source); })()), "id", [], "any", false, false, false, 757)]), "html", null, true);
                yield "\" style=\"display: inline;\">
                                                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 758
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 758))), "html", null, true);
                yield "\">
                                                                            <button type=\"submit\" class=\"btn btn-delete\">
                                                                                <i class=\"mdi mdi-delete me-1\"></i>
                                                                                Supprimer
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['proposition'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 769
            yield "                                                </tbody>
                                            </table>
                                        </div>
                                    ";
        } else {
            // line 773
            yield "                                        <div class=\"empty-state\">
                                            <i class=\"mdi mdi-calendar-remove empty-state-icon\"></i>
                                            <h4 class=\"text-muted\">Aucune proposition de réunion</h4>
                                            <p class=\"text-muted mb-4\">Ce groupe n'a pas encore de propositions de réunion.</p>
                                            <a href=\"";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposition_reunion_new", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 777, $this->source); })()), "id", [], "any", false, false, false, 777)]), "html", null, true);
            yield "\" class=\"btn btn-create\">
                                                <i class=\"mdi mdi-plus-circle me-2\"></i>
                                                Créer la première proposition
                                            </a>
                                        </div>
                                    ";
        }
        // line 783
        yield "                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Card -->
                    <div class=\"row mt-4\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">
                                        <i class=\"mdi mdi-information-outline text-primary me-2\"></i>
                                        Informations
                                    </h5>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"d-flex align-items-start mb-3\">
                                                <div class=\"me-3\">
                                                    <i class=\"mdi mdi-account-group text-primary\" style=\"font-size: 24px;\"></i>
                                                </div>
                                                <div>
                                                    <h6 class=\"mb-1\">Groupe</h6>
                                                    <p class=\"text-muted mb-0\">";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 805, $this->source); })()), "nomProjet", [], "any", false, false, false, 805), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 805, $this->source); })()), "matiere", [], "any", false, false, false, 805), "html", null, true);
        yield "</p>
                                                    <p class=\"text-muted mb-0 small\">";
        // line 806
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 806, $this->source); })()), "idUser", [], "any", false, false, false, 806)), "html", null, true);
        yield " membre(s)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"d-flex align-items-start mb-3\">
                                                <div class=\"me-3\">
                                                    <i class=\"mdi mdi-calendar-check text-success\" style=\"font-size: 24px;\"></i>
                                                </div>
                                                <div>
                                                    <h6 class=\"mb-1\">Statistiques</h6>
                                                    <p class=\"text-muted mb-0\">";
        // line 817
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 817, $this->source); })())), "html", null, true);
        yield " proposition(s) au total</p>
                                                    <p class=\"text-muted mb-0 small\">
                                                        ";
        // line 819
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["proposition_reunions"]) || array_key_exists("proposition_reunions", $context) ? $context["proposition_reunions"] : (function () { throw new RuntimeError('Variable "proposition_reunions" does not exist.', 819, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 819, $this->source); })()), "status", [], "any", false, false, false, 819) == "confirmed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 819, $this->source); })()), "status", [], "any", false, false, false, 819) == "Confirmée")); })), "html", null, true);
        yield " confirmée(s)
                                                    </p>
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
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 836
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = document.querySelectorAll('.table-custom tbody tr');
                
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                });
            });
        }
        
        // Auto-hide alerts
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                new bootstrap.Alert(alert).close();
            });
        }, 5000);
        
        // Confirm deletion
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function(e) {
                if (!confirm('Êtes-vous sûr de vouloir supprimer cette proposition ?')) {
                    e.preventDefault();
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
        return "proposition_reunion/index.html.twig";
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
        return array (  1288 => 837,  1284 => 836,  1280 => 835,  1261 => 819,  1256 => 817,  1242 => 806,  1236 => 805,  1212 => 783,  1203 => 777,  1197 => 773,  1191 => 769,  1174 => 758,  1170 => 757,  1163 => 753,  1159 => 752,  1140 => 736,  1128 => 727,  1119 => 721,  1112 => 717,  1107 => 714,  1101 => 712,  1099 => 711,  1091 => 708,  1088 => 707,  1085 => 706,  1082 => 705,  1079 => 704,  1076 => 703,  1073 => 702,  1070 => 701,  1067 => 700,  1064 => 699,  1061 => 698,  1058 => 697,  1055 => 696,  1052 => 695,  1049 => 694,  1046 => 693,  1043 => 692,  1041 => 691,  1038 => 690,  1035 => 689,  1033 => 688,  1028 => 686,  1025 => 685,  1021 => 683,  1013 => 681,  1011 => 680,  1007 => 678,  1003 => 676,  997 => 674,  995 => 673,  991 => 671,  985 => 669,  983 => 668,  979 => 667,  974 => 665,  971 => 664,  967 => 663,  950 => 648,  948 => 647,  928 => 630,  921 => 626,  915 => 623,  911 => 622,  896 => 610,  882 => 599,  868 => 588,  855 => 578,  832 => 560,  826 => 557,  810 => 543,  804 => 542,  794 => 538,  790 => 537,  785 => 536,  780 => 535,  776 => 534,  752 => 514,  737 => 502,  723 => 492,  721 => 491,  717 => 489,  712 => 486,  708 => 484,  704 => 482,  700 => 480,  698 => 479,  693 => 477,  686 => 476,  684 => 475,  677 => 470,  670 => 467,  662 => 465,  656 => 463,  650 => 460,  645 => 459,  642 => 458,  640 => 457,  628 => 448,  595 => 418,  579 => 405,  569 => 398,  552 => 384,  542 => 377,  532 => 370,  522 => 363,  512 => 356,  502 => 349,  492 => 342,  474 => 326,  469 => 323,  465 => 321,  461 => 319,  457 => 317,  455 => 316,  450 => 314,  443 => 313,  441 => 312,  436 => 309,  430 => 307,  427 => 306,  421 => 304,  415 => 301,  410 => 300,  407 => 299,  405 => 298,  394 => 290,  390 => 289,  385 => 287,  381 => 286,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>C:/Users/MSI/Documents/Symfonyweb/src/Controller/PropositionReunionController.php</code></li>
        <li>Your template at <code>C:/Users/MSI/Documents/Symfonyweb/templates/proposition_reunion/index.html.twig</code></li>
    </ul>
</div>

<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>ESPRIT - Propositions de Réunion</title>
    
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />
    
    <style>
        /* Profile Avatar Styles */
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
        
        /* Custom Styles */
        .card-header-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 20px 30px;
        }
        
        .btn-create {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            border: none;
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s;
            color: white;
        }
        
        .btn-create:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 233, 123, 0.3);
            color: white;
        }
        
        .btn-back {
            background: #f8f9fa;
            border: 1px solid #ddd;
            color: #333;
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-back:hover {
            background: #e9ecef;
            border-color: #ccc;
            color: #333;
        }
        
        .btn-view {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            border: none;
            padding: 6px 15px;
            font-weight: 500;
            border-radius: 6px;
            font-size: 0.85rem;
            color: white;
        }
        
        .btn-edit {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            border: none;
            padding: 6px 15px;
            font-weight: 500;
            border-radius: 6px;
            font-size: 0.85rem;
            color: white;
        }
        
        .btn-delete {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border: none;
            padding: 6px 15px;
            font-weight: 500;
            border-radius: 6px;
            font-size: 0.85rem;
            color: white;
        }
        
        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .status-proposed { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
        .status-confirmed { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; }
        .status-cancelled { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
        .status-postponed { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; }
        .status-en-attente { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
        
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }
        
        .table-custom thead th {
            background: #f8f9fa;
            border-bottom: 2px solid #667eea;
            font-weight: 600;
            color: #333;
            padding: 15px;
        }
        
        .table-custom tbody td {
            padding: 15px;
            vertical-align: middle;
            border-bottom: 1px solid #eee;
        }
        
        .table-custom tbody tr:hover {
            background-color: rgba(102, 126, 234, 0.05);
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }
        
        .empty-state-icon {
            font-size: 60px;
            color: #dee2e6;
            margin-bottom: 20px;
        }
        
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
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
            margin-bottom: 15px;
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
        
        .gradient-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .gradient-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
        .gradient-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
        .gradient-5 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
        
        .alert {
            border-radius: 10px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .search-box {
            max-width: 300px;
        }
        
        .modal-header-danger {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            border-radius: 10px 10px 0 0;
        }
        
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        
        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.9rem;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 5px;
            }
            
            .btn-view, .btn-edit, .btn-delete {
                padding: 5px 10px;
                font-size: 0.8rem;
            }
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
                                            <span class=\"badge badge-danger badge-sm\">Admin</span>
                                        {% else %}
                                            <span class=\"badge badge-primary badge-sm\">Utilisateur</span>
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
                    <a class=\"nav-link\" href=\"{{ path('app_matiere_classe_index') }}\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-book-open-page-variant\"></i></span>
                        <span class=\"menu-title\">Matieres</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"{{ path('app_classe_index') }}\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-school\"></i></span>
                        <span class=\"menu-title\">Classes</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"{{ path('app_salle_index') }}\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-office-building\"></i></span>
                        <span class=\"menu-title\">Salles</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"{{ path('app_seance_index') }}\">
                        <span class=\"menu-icon\"><i class=\"mdi mdi-calendar-clock\"></i></span>
                        <span class=\"menu-title\">Séances</span>
                    </a>
                </li>
                
                <li class=\"nav-item menu-items active\">
                    <a class=\"nav-link\" href=\"{{ path('app_groupe_projet_index') }}\">
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
                
                <li class=\"nav-item menu-items\">
                    <a class=\"nav-link\" href=\"{{ path('app_objectif_sante_index') }}\">
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
                                            <i class=\"mdi mdi-calendar\"></i>
                                        </div>
                                    </div>
                                    <div class=\"preview-item-content\">
                                        <p class=\"preview-subject mb-1\">Propositions de réunion</p>
                                        <p class=\"text-muted ellipsis mb-0\">Groupe: {{ groupe_projet.nomProjet }}</p>
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
                                                <span class=\"badge badge-danger\">Administrateur</span>
                                            {% else %}
                                                <span class=\"badge badge-primary\">Utilisateur</span>
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
                                            <p class=\"preview-subject mb-1\">Modifier profil</p>
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
                            <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                                <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }} me-2\"></i>
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    <!-- Header -->
                    <div class=\"row mb-4\">
                        <div class=\"col-12\">
                            <div class=\"page-header\">
                                <h3 class=\"page-title\">
                                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                                        <i class=\"mdi mdi-calendar-multiple\"></i>
                                    </span> 
                                    Propositions de Réunion
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
                                            Propositions
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Overview -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-3\">
                            <div class=\"stat-card\">
                                <div class=\"stat-icon gradient-1\">
                                    <i class=\"mdi mdi-calendar\"></i>
                                </div>
                                <div class=\"stat-count text-dark\">{{ proposition_reunions|length }}</div>
                                <div class=\"stat-label\">Total Propositions</div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"stat-card\">
                                <div class=\"stat-icon gradient-3\">
                                    <i class=\"mdi mdi-check-circle\"></i>
                                </div>
                                <div class=\"stat-count text-dark\">
                                    {{ proposition_reunions|filter(p => p.status == 'confirmed' or p.status == 'Confirmée')|length }}
                                </div>
                                <div class=\"stat-label\">Confirmées</div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"stat-card\">
                                <div class=\"stat-icon gradient-5\">
                                    <i class=\"mdi mdi-clock\"></i>
                                </div>
                                <div class=\"stat-count text-dark\">
                                    {{ proposition_reunions|filter(p => p.status == 'proposed' or p.status == 'En attente')|length }}
                                </div>
                                <div class=\"stat-label\">En attente</div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"stat-card\">
                                <div class=\"stat-icon gradient-2\">
                                    <i class=\"mdi mdi-cancel\"></i>
                                </div>
                                <div class=\"stat-count text-dark\">
                                    {{ proposition_reunions|filter(p => p.status == 'cancelled' or p.status == 'Annulée')|length }}
                                </div>
                                <div class=\"stat-label\">Annulées</div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions Bar -->
                    <div class=\"row mb-4\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <h5 class=\"mb-0\">Propositions pour: <strong>{{ groupe_projet.nomProjet }}</strong></h5>
                                    <small class=\"text-muted\">{{ groupe_projet.matiere }}</small>
                                </div>
                                <div class=\"d-flex gap-3\">
                                    <a href=\"{{ path('app_groupe_projet_show', {'id': groupe_projet.id}) }}\" class=\"btn btn-back\">
                                        <i class=\"mdi mdi-arrow-left me-2\"></i>
                                        Retour au groupe
                                    </a>
                                    <a href=\"{{ path('app_proposition_reunion_new', {'groupeId': groupe_projet.id}) }}\" class=\"btn btn-create\">
                                        <i class=\"mdi mdi-plus-circle me-2\"></i>
                                        Nouvelle Proposition
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header card-header-custom\">
                                    <h4 class=\"mb-0\">Liste des Propositions</h4>
                                </div>
                                <div class=\"card-body\">
                                    {% if proposition_reunions is not empty %}
                                        <div class=\"table-responsive\">
                                            <table class=\"table table-custom table-hover\">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Titre</th>
                                                        <th>Date Réunion</th>
                                                        <th>Heure</th>
                                                        <th>Lieu</th>
                                                        <th>Statut</th>
                                                        <th>Créée le</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for proposition in proposition_reunions %}
                                                        <tr>
                                                            <td>{{ proposition.propositionId }}</td>
                                                            <td>
                                                                <strong>{{ proposition.titre }}</strong>
                                                                {% if proposition.description %}
                                                                    <br><small class=\"text-muted\">{{ proposition.description|slice(0, 50) }}...</small>
                                                                {% endif %}
                                                            </td>
                                                            <td>
                                                                {% if proposition.dateReunion %}
                                                                    {{ proposition.dateReunion|date('d/m/Y') }}
                                                                {% else %}
                                                                    <span class=\"text-muted\">Non définie</span>
                                                                {% endif %}
                                                            </td>
                                                            <td>
                                                                {% if proposition.heureDebut and proposition.heureFin %}
                                                                    {{ proposition.heureDebut|date('H:i') }} - {{ proposition.heureFin|date('H:i') }}
                                                                {% else %}
                                                                    <span class=\"text-muted\">Non définie</span>
                                                                {% endif %}
                                                            </td>
                                                            <td>{{ proposition.lieu }}</td>
                                                            <td>
                                                                {% set status_text = proposition.status %}
                                                                {% set status_class = 'status-proposed' %}
                                                                
                                                                {% if status_text == 'confirmed' or status_text == 'Confirmée' %}
                                                                    {% set status_class = 'status-confirmed' %}
                                                                    {% set status_text = 'Confirmée' %}
                                                                {% elseif status_text == 'cancelled' or status_text == 'Annulée' %}
                                                                    {% set status_class = 'status-cancelled' %}
                                                                    {% set status_text = 'Annulée' %}
                                                                {% elseif status_text == 'postponed' or status_text == 'Reportée' %}
                                                                    {% set status_class = 'status-postponed' %}
                                                                    {% set status_text = 'Reportée' %}
                                                                {% elseif status_text == 'En attente' %}
                                                                    {% set status_class = 'status-en-attente' %}
                                                                    {% set status_text = 'En attente' %}
                                                                {% else %}
                                                                    {% set status_class = 'status-proposed' %}
                                                                    {% set status_text = 'Proposée' %}
                                                                {% endif %}
                                                                
                                                                <span class=\"status-badge {{ status_class }}\">{{ status_text }}</span>
                                                            </td>
                                                            <td>
                                                                {% if proposition.dateCreation %}
                                                                    {{ proposition.dateCreation|date('d/m/Y H:i') }}
                                                                {% endif %}
                                                            </td>
                                                            <td>
                                                                <div class=\"action-buttons\">
                                                                    <a href=\"{{ path('app_proposition_reunion_show', {'id': proposition.id, 'groupeId': groupe_projet.id}) }}\" 
                                                                   class=\"btn btn-view\" title=\"Voir\">
                                                                        <i class=\"mdi mdi-eye\"></i>
                                                                    </a>
                                                                    <a href=\"{{ path('app_proposition_reunion_edit', {'id': proposition.id, 'groupeId': groupe_projet.id}) }}\" 
                                                                   class=\"btn btn-edit\" title=\"Modifier\">
                                                                        <i class=\"mdi mdi-pencil\"></i>
                                                                    </a>
                                                                    <button type=\"button\" class=\"btn btn-delete\" 
                                                                            data-bs-toggle=\"modal\" 
                                                                            data-bs-target=\"#deleteModal{{ proposition.id }}\"
                                                                            title=\"Supprimer\">
                                                                        <i class=\"mdi mdi-delete\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                        <!-- Delete Modal for each proposition -->
                                                        <div class=\"modal fade\" id=\"deleteModal{{ proposition.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header modal-header-danger\">
                                                                        <h5 class=\"modal-title\">
                                                                            <i class=\"mdi mdi-alert-circle me-2\"></i>
                                                                            Confirmer la suppression
                                                                        </h5>
                                                                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                                                                    </div>
                                                                    <div class=\"modal-body\">
                                                                        <p>Êtes-vous sûr de vouloir supprimer cette proposition ?</p>
                                                                        <div class=\"alert alert-warning\">
                                                                            <i class=\"mdi mdi-alert me-2\"></i>
                                                                            Cette action est irréversible.
                                                                        </div>
                                                                        <p><strong>Proposition :</strong> {{ proposition.titre }}</p>
                                                                        <p><strong>Date :</strong> {{ proposition.dateReunion ? proposition.dateReunion|date('d/m/Y') : 'Non définie' }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                                        <form method=\"post\" action=\"{{ path('app_proposition_reunion_delete', {'id': proposition.id, 'groupeId': groupe_projet.id}) }}\" style=\"display: inline;\">
                                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ proposition.id) }}\">
                                                                            <button type=\"submit\" class=\"btn btn-delete\">
                                                                                <i class=\"mdi mdi-delete me-1\"></i>
                                                                                Supprimer
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    {% else %}
                                        <div class=\"empty-state\">
                                            <i class=\"mdi mdi-calendar-remove empty-state-icon\"></i>
                                            <h4 class=\"text-muted\">Aucune proposition de réunion</h4>
                                            <p class=\"text-muted mb-4\">Ce groupe n'a pas encore de propositions de réunion.</p>
                                            <a href=\"{{ path('app_proposition_reunion_new', {'groupeId': groupe_projet.id}) }}\" class=\"btn btn-create\">
                                                <i class=\"mdi mdi-plus-circle me-2\"></i>
                                                Créer la première proposition
                                            </a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Card -->
                    <div class=\"row mt-4\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">
                                        <i class=\"mdi mdi-information-outline text-primary me-2\"></i>
                                        Informations
                                    </h5>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"d-flex align-items-start mb-3\">
                                                <div class=\"me-3\">
                                                    <i class=\"mdi mdi-account-group text-primary\" style=\"font-size: 24px;\"></i>
                                                </div>
                                                <div>
                                                    <h6 class=\"mb-1\">Groupe</h6>
                                                    <p class=\"text-muted mb-0\">{{ groupe_projet.nomProjet }} - {{ groupe_projet.matiere }}</p>
                                                    <p class=\"text-muted mb-0 small\">{{ groupe_projet.idUser|length }} membre(s)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"d-flex align-items-start mb-3\">
                                                <div class=\"me-3\">
                                                    <i class=\"mdi mdi-calendar-check text-success\" style=\"font-size: 24px;\"></i>
                                                </div>
                                                <div>
                                                    <h6 class=\"mb-1\">Statistiques</h6>
                                                    <p class=\"text-muted mb-0\">{{ proposition_reunions|length }} proposition(s) au total</p>
                                                    <p class=\"text-muted mb-0 small\">
                                                        {{ proposition_reunions|filter(p => p.status == 'confirmed' or p.status == 'Confirmée')|length }} confirmée(s)
                                                    </p>
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
        // Search functionality
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = document.querySelectorAll('.table-custom tbody tr');
                
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                });
            });
        }
        
        // Auto-hide alerts
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                new bootstrap.Alert(alert).close();
            });
        }, 5000);
        
        // Confirm deletion
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function(e) {
                if (!confirm('Êtes-vous sûr de vouloir supprimer cette proposition ?')) {
                    e.preventDefault();
                }
            });
        });
    });
    </script>
</body>
</html>
{% endblock %}
", "proposition_reunion/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\proposition_reunion\\index.html.twig");
    }
}
