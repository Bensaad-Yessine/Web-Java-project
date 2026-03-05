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

/* seance/index.html.twig */
class __TwigTemplate_52a1d7ad5b20fc17b4b637155068c1fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/index.html.twig"));

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

        yield "Gestion des Séances";
        
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
      
      /* Profile styles */
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
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
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
      
      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
      }
      
      /* Seance specific styles */
      .seance-avatar {
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
      }
      
      .seance-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        color: white;
      }
      
      .badge-cours {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      }
      
      .badge-td {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
      }
      
      .badge-tp {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
      }
      
      .badge-presentiel {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      }
      
      .badge-distanciel {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      }
      
      .badge-hybride {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      }
      
      .jour-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
      }
      
      .action-buttons {
        display: flex;
        gap: 5px;
      }
      
      .action-buttons .btn {
        padding: 5px 10px;
        margin: 0 2px;
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
      
      .day-filter {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
      }
      
      .day-filter .btn {
        border-radius: 20px;
        padding: 6px 15px;
        font-size: 0.9rem;
      }
      
      .type-filter {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
      }
      
      .type-filter .btn {
        border-radius: 20px;
        padding: 6px 15px;
        font-size: 0.9rem;
      }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 267
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

        // line 268
        yield "<div class=\"container-scroller\">
    <!-- Sidebar -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 272
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                <img src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 275
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                <img src=\"";
        // line 276
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
        // line 284
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 285
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "user", [], "any", false, false, false, 285), "profilePic", [], "any", false, false, false, 285)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 286
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "user", [], "any", false, false, false, 286), "profilePic", [], "any", false, false, false, 286))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 287, $this->source); })()), "user", [], "any", false, false, false, 287), "prenom", [], "any", false, false, false, 287), "html", null, true);
                yield "\" 
                                         class=\"profile-avatar-img\">
                                ";
            } else {
                // line 290
                yield "                                    <div class=\"profile-avatar\">
                                        ";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "user", [], "any", false, false, false, 291), "prenom", [], "any", false, false, false, 291))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 291, $this->source); })()), "user", [], "any", false, false, false, 291), "nom", [], "any", false, false, false, 291))), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 294
            yield "                            ";
        } else {
            // line 295
            yield "                                <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                            ";
        }
        // line 297
        yield "                            <span class=\"count bg-success\"></span>
                        </div>
                        <div class=\"profile-name\">
                            ";
        // line 300
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "user", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 301
            yield "                                <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "user", [], "any", false, false, false, 301), "prenom", [], "any", false, false, false, 301), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "user", [], "any", false, false, false, 301), "nom", [], "any", false, false, false, 301), "html", null, true);
            yield "</h5>
                                <span class=\"text-muted\">";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 302, $this->source); })()), "user", [], "any", false, false, false, 302), "email", [], "any", false, false, false, 302), "html", null, true);
            yield "</span>
                                <div class=\"mt-1\">
                                    ";
            // line 304
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 304, $this->source); })()), "user", [], "any", false, false, false, 304), "roles", [], "any", false, false, false, 304))) {
                // line 305
                yield "                                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                                    ";
            } else {
                // line 307
                yield "                                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                                    ";
            }
            // line 309
            yield "                                </div>
                            ";
        } else {
            // line 311
            yield "                                <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                                <span>Veuillez vous connecter</span>
                            ";
        }
        // line 314
        yield "                        </div>
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
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 334
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
        // line 344
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span>
                    <span class=\"menu-title\">Matières</span>
                </a>
            </li>
            
            <!-- Classes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 354
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
        // line 364
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-office-building\"></i>
                    </span>
                    <span class=\"menu-title\">Salles</span>
                </a>
            </li>
            
            <!-- Séances -->
            <li class=\"nav-item menu-items active\">
                <a class=\"nav-link\" href=\"";
        // line 374
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-calendar-clock\"></i>
                    </span>
                    <span class=\"menu-title\">Séances</span>
                </a>
            </li>
            
            <!-- Groupes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 384
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
        // line 394
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
                <a class=\"nav-link\" href=\"";
        // line 404
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_preference_alerte_index");
        yield "\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-alert-circle-outline\"></i>
                    </span>
                    <span class=\"menu-title\">Alertes</span>
                </a>
            </li>
            
            <!-- Exercices de santé -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"";
        // line 414
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
        // line 424
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
        // line 439
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
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une séance...\" id=\"searchInput\">
                        </form>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <i class=\"mdi mdi-bell\"></i>
                            <span class=\"count bg-danger\">2</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <h6 class=\"p-3 mb-0\">Notifications</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-success rounded-circle\">
                                        <i class=\"mdi mdi-calendar-clock\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Nouvelle séance</p>
                                    <p class=\"text-muted ellipsis mb-0\">Séance Mathématiques programmée</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                ";
        // line 478
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 478, $this->source); })()), "user", [], "any", false, false, false, 478)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 479
            yield "                                    <div class=\"avatar-container\">
                                        ";
            // line 480
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 480, $this->source); })()), "user", [], "any", false, false, false, 480), "profilePic", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 481
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 481, $this->source); })()), "user", [], "any", false, false, false, 481), "profilePic", [], "any", false, false, false, 481))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 482
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 482, $this->source); })()), "user", [], "any", false, false, false, 482), "prenom", [], "any", false, false, false, 482), "html", null, true);
                yield "\" 
                                                 class=\"user-avatar-img\">
                                        ";
            } else {
                // line 485
                yield "                                            <div class=\"user-avatar\">
                                                ";
                // line 486
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 486, $this->source); })()), "user", [], "any", false, false, false, 486), "prenom", [], "any", false, false, false, 486))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 486, $this->source); })()), "user", [], "any", false, false, false, 486), "nom", [], "any", false, false, false, 486))), "html", null, true);
                yield "
                                            </div>
                                        ";
            }
            // line 489
            yield "                                        <div class=\"text-start ms-2\">
                                            <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                                                ";
            // line 491
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "user", [], "any", false, false, false, 491), "prenom", [], "any", false, false, false, 491), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "user", [], "any", false, false, false, 491), "nom", [], "any", false, false, false, 491), "html", null, true);
            yield "
                                            </p>
                                            <small class=\"text-muted d-none d-sm-block\">
                                                ";
            // line 494
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 494, $this->source); })()), "user", [], "any", false, false, false, 494), "roles", [], "any", false, false, false, 494))) {
                // line 495
                yield "                                                    <span class=\"badge badge-admin\">Admin</span>
                                                ";
            } else {
                // line 497
                yield "                                                    <span class=\"badge badge-etudiant\">Utilisateur</span>
                                                ";
            }
            // line 499
            yield "                                            </small>
                                        </div>
                                    </div>
                                ";
        } else {
            // line 503
            yield "                                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                                    <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                                ";
        }
        // line 506
        yield "                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <div class=\"dropdown-header p-3\">
                                ";
        // line 511
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 511, $this->source); })()), "user", [], "any", false, false, false, 511)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 512
            yield "                                    <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 512, $this->source); })()), "user", [], "any", false, false, false, 512), "prenom", [], "any", false, false, false, 512), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 512, $this->source); })()), "user", [], "any", false, false, false, 512), "nom", [], "any", false, false, false, 512), "html", null, true);
            yield "</h6>
                                    <p class=\"text-muted mb-0\">";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 513, $this->source); })()), "user", [], "any", false, false, false, 513), "email", [], "any", false, false, false, 513), "html", null, true);
            yield "</p>
                                    <small class=\"text-muted\">
                                        ";
            // line 515
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 515, $this->source); })()), "user", [], "any", false, false, false, 515), "roles", [], "any", false, false, false, 515))) {
                // line 516
                yield "                                            <span class=\"badge badge-admin\">Administrateur</span>
                                        ";
            } else {
                // line 518
                yield "                                            <span class=\"badge badge-etudiant\">Utilisateur</span>
                                        ";
            }
            // line 520
            yield "                                    </small>
                                ";
        } else {
            // line 522
            yield "                                    <h6 class=\"mb-0\">Non connecté</h6>
                                    <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                                ";
        }
        // line 525
        yield "                            </div>
                            <div class=\"dropdown-divider\"></div>
                            ";
        // line 527
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 527, $this->source); })()), "user", [], "any", false, false, false, 527)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 528
            yield "                                <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 528, $this->source); })()), "user", [], "any", false, false, false, 528), "id", [], "any", false, false, false, 528)]), "html", null, true);
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
            // line 538
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 538, $this->source); })()), "user", [], "any", false, false, false, 538), "id", [], "any", false, false, false, 538)]), "html", null, true);
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
        // line 550
        yield "                            <a class=\"dropdown-item preview-item\" href=\"";
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
        // line 570
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 570, $this->source); })()), "flashes", [], "any", false, false, false, 570));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 571
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 572
                yield "                        <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                            <i class=\"mdi mdi-";
                // line 573
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                            ";
                // line 574
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 578
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 579
        yield "
                <!-- Header -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"page-header\">
                            <h3 class=\"page-title\">
                                <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                                    <i class=\"mdi mdi-calendar-clock\"></i>
                                </span> 
                                Gestion des Séances
                            </h3>
                            <nav aria-label=\"breadcrumb\">
                                <ul class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <span></span>Liste des séances ESPRIT
                                    </li>
                                </ul>
                            </nav>
                            ";
        // line 597
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 597, $this->source); })()), "user", [], "any", false, false, false, 597)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 598
            yield "                                <div class=\"mt-2\">
                                    <small class=\"text-muted\">
                                        <i class=\"mdi mdi-account me-1\"></i>
                                        Connecté en tant que: <strong>";
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 601, $this->source); })()), "user", [], "any", false, false, false, 601), "prenom", [], "any", false, false, false, 601), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 601, $this->source); })()), "user", [], "any", false, false, false, 601), "nom", [], "any", false, false, false, 601), "html", null, true);
            yield "</strong>
                                        (";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 602, $this->source); })()), "user", [], "any", false, false, false, 602), "email", [], "any", false, false, false, 602), "html", null, true);
            yield ")
                                        ";
            // line 603
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 603, $this->source); })()), "user", [], "any", false, false, false, 603), "roles", [], "any", false, false, false, 603))) {
                // line 604
                yield "                                            <span class=\"badge badge-admin ms-2\">Administrateur</span>
                                        ";
            }
            // line 606
            yield "                                    </small>
                                </div>
                            ";
        }
        // line 609
        yield "                        </div>
                    </div>
                </div>
                
                <!-- Statistics -->
                <div class=\"row\">
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0 stat-count\">";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 621, $this->source); })())), "html", null, true);
        yield "</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 2, 8), "html", null, true);
        yield "%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-1\">
                                            <i class=\"mdi mdi-calendar-clock\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Total Séances</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            ";
        // line 641
        $context["coursCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 641, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 641, $this->source); })()), "typeSeance", [], "any", false, false, false, 641) == "Cours"); }));
        // line 642
        yield "                                            <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursCount"]) || array_key_exists("coursCount", $context) ? $context["coursCount"] : (function () { throw new RuntimeError('Variable "coursCount" does not exist.', 642, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 5, 15), "html", null, true);
        yield "%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-2\">
                                            <i class=\"mdi mdi-book-open-page-variant\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Séances Cours</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            ";
        // line 662
        $context["presentielCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 662, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 662, $this->source); })()), "mode", [], "any", false, false, false, 662) == "Présentiel"); }));
        // line 663
        yield "                                            <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["presentielCount"]) || array_key_exists("presentielCount", $context) ? $context["presentielCount"] : (function () { throw new RuntimeError('Variable "presentielCount" does not exist.', 663, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 5), "html", null, true);
        yield "%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-3\">
                                            <i class=\"mdi mdi-account-group\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Présentiel</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            ";
        // line 683
        $context["thisWeekCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 683, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 683, $this->source); })()), "jour", [], "any", false, false, false, 683), ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"]); }));
        // line 684
        yield "                                            <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thisWeekCount"]) || array_key_exists("thisWeekCount", $context) ? $context["thisWeekCount"] : (function () { throw new RuntimeError('Variable "thisWeekCount" does not exist.', 684, $this->source); })()), "html", null, true);
        yield "</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+";
        // line 685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3, 10), "html", null, true);
        yield "%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-4\">
                                            <i class=\"mdi mdi-calendar-week\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Cette semaine</h6>
                            </div>
                        </div>
                    </div>
                </div>
                
            <!-- Filters Panel -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin stretch-card\">
                <div class=\"card\" style=\"background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: none; border-radius: 12px;\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4 text-primary\"><i class=\"mdi mdi-filter-variant me-2\"></i>Filtrer et Rechercher</h4>
                    <div class=\"row g-3\">
                      <!-- Search -->
                      <div class=\"col-md-3\">
                        <label class=\"fw-bold mb-1\">Recherche</label>
                        <div class=\"search-box\">
                          <i class=\"mdi mdi-magnify search-icon\"></i>
                          <input type=\"text\" id=\"filterSearchInput\" class=\"form-control form-control-lg border-primary\" 
                                 placeholder=\"Matière, Salle...\" value=\"";
        // line 713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 713, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                      </div>
                      
                      <!-- Filters -->
                      <div class=\"col-md-2\">
                        <label class=\"fw-bold mb-1\">Jour</label>
                        <select id=\"jourFilter\" class=\"form-select form-select-lg border-primary\">
                          <option value=\"\">Tous les jours</option>
                          <option value=\"Lundi\" ";
        // line 722
        if (((isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 722, $this->source); })()) == "Lundi")) {
            yield "selected";
        }
        yield ">Lundi</option>
                          <option value=\"Mardi\" ";
        // line 723
        if (((isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 723, $this->source); })()) == "Mardi")) {
            yield "selected";
        }
        yield ">Mardi</option>
                          <option value=\"Mercredi\" ";
        // line 724
        if (((isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 724, $this->source); })()) == "Mercredi")) {
            yield "selected";
        }
        yield ">Mercredi</option>
                          <option value=\"Jeudi\" ";
        // line 725
        if (((isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 725, $this->source); })()) == "Jeudi")) {
            yield "selected";
        }
        yield ">Jeudi</option>
                          <option value=\"Vendredi\" ";
        // line 726
        if (((isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 726, $this->source); })()) == "Vendredi")) {
            yield "selected";
        }
        yield ">Vendredi</option>
                          <option value=\"Samedi\" ";
        // line 727
        if (((isset($context["jour"]) || array_key_exists("jour", $context) ? $context["jour"] : (function () { throw new RuntimeError('Variable "jour" does not exist.', 727, $this->source); })()) == "Samedi")) {
            yield "selected";
        }
        yield ">Samedi</option>
                        </select>
                      </div>

                      <div class=\"col-md-2\">
                         <label class=\"fw-bold mb-1\">Type</label>
                          <select id=\"typeFilter\" class=\"form-select form-select-lg border-primary\">
                             <option value=\"\">Tous les types</option>
                             <option value=\"Cours\" ";
        // line 735
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 735, $this->source); })()) == "Cours")) {
            yield "selected";
        }
        yield ">Cours</option>
                             <option value=\"TD\" ";
        // line 736
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 736, $this->source); })()) == "TD")) {
            yield "selected";
        }
        yield ">TD</option>
                             <option value=\"TP\" ";
        // line 737
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 737, $this->source); })()) == "TP")) {
            yield "selected";
        }
        yield ">TP</option>
                          </select>
                      </div>

                      <div class=\"col-md-2\">
                         <label class=\"fw-bold mb-1\">Mode</label>
                          <select id=\"modeFilter\" class=\"form-select form-select-lg border-primary\">
                             <option value=\"\">Tous les modes</option>
                             <option value=\"Présentiel\" ";
        // line 745
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 745, $this->source); })()) == "Présentiel")) {
            yield "selected";
        }
        yield ">Présentiel</option>
                             <option value=\"Distanciel\" ";
        // line 746
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 746, $this->source); })()) == "Distanciel")) {
            yield "selected";
        }
        yield ">Distanciel</option>
                             <option value=\"Hybride\" ";
        // line 747
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 747, $this->source); })()) == "Hybride")) {
            yield "selected";
        }
        yield ">Hybride</option>
                          </select>
                      </div>

                      <!-- Sort -->
                      <div class=\"col-md-3\">
                        <label class=\"fw-bold mb-1\">Trier par</label>
                        <select id=\"sortSelect\" class=\"form-select form-select-lg border-primary\">
                          <option value=\"id-asc\" ";
        // line 755
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 755, $this->source); })()) == "id") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 755, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">ID (Croissant)</option>
                          <option value=\"id-desc\" ";
        // line 756
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 756, $this->source); })()) == "id") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 756, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">ID (Décroissant)</option>
                          <option value=\"jour-asc\" ";
        // line 757
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 757, $this->source); })()) == "jour") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 757, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Jour (Lun-Sam)</option>
                          <option value=\"heureDebut-asc\" ";
        // line 758
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 758, $this->source); })()) == "heureDebut") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 758, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Heure Début (Tôt-Tard)</option>
                        </select>
                      </div>
                    </div>

                    <div class=\"mt-4 d-flex justify-content-end\">
                      <button id=\"resetFilters\" class=\"btn btn-inverse-dark btn-icon-text me-2\">
                        <i class=\"mdi mdi-refresh btn-icon-prepend\"></i> Réinitialiser
                      </button>
                      <button id=\"applyFilters\" class=\"btn btn-gradient-primary btn-icon-text\">
                        <i class=\"mdi mdi-filter btn-icon-prepend\"></i> FILTRER
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Seances Table -->
            <div class=\"row\">
                <div class=\"col-12 grid-margin\">
                    <div class=\"card table-card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                <h4 class=\"card-title mb-0\">📅 Liste des Séances</h4>
                                <span id=\"resultCount\" class=\"badge badge-outline-primary badge-pill\">
                                    <i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: ";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 784, $this->source); })())), "html", null, true);
        yield "
                                </span>
                                <a href=\"";
        // line 786
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_new");
        yield "\" class=\"btn btn-gradient-primary btn-icon-text\">
                                    <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                                    Nouvelle Séance
                                </a>
                            </div>

                            <div class=\"table-responsive\" id=\"seancesTableContainer\">
                                <table class=\"table table-hover\" id=\"seancesTable\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Matière</th>
                                            <th>Classe</th>
                                            <th>Salle</th>
                                            <th>Jour</th>
                                            <th>Horaires</th>
                                            <th>Mode</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 807
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 807, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
            // line 808
            yield "                                            <tr>
                                                <td><span class=\"text-muted\">#";
            // line 809
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 809), "html", null, true);
            yield "</span></td>
                                                <td><span class=\"fw-bold\">";
            // line 810
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "matiere", [], "any", false, false, false, 810)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "matiere", [], "any", false, false, false, 810), "nom", [], "any", false, false, false, 810), "html", null, true)) : ("N/A"));
            yield "</span></td>
                                                <td><label class=\"badge badge-info\">";
            // line 811
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "classe", [], "any", false, false, false, 811)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "classe", [], "any", false, false, false, 811), "nom", [], "any", false, false, false, 811), "html", null, true)) : ("N/A"));
            yield "</label></td>
                                                <td>";
            // line 812
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "salle", [], "any", false, false, false, 812)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "salle", [], "any", false, false, false, 812), "name", [], "any", false, false, false, 812), "html", null, true)) : ("N/A"));
            yield "</td>
                                                <td><span class=\"jour-badge\">";
            // line 813
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "jour", [], "any", false, false, false, 813), "html", null, true);
            yield "</span></td>
                                                <td>
                                                    ";
            // line 815
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 815)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 815), "H:i"), "html", null, true)) : (""));
            yield " - 
                                                    ";
            // line 816
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureFin", [], "any", false, false, false, 816)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureFin", [], "any", false, false, false, 816), "H:i"), "html", null, true)) : (""));
            yield "
                                                </td>
                                                <td>
                                                    ";
            // line 819
            if (CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "mode", [], "any", false, false, false, 819)), ["présentiel", "presentiel"])) {
                // line 820
                yield "                                                        <label class=\"badge badge-presentiel\">PRESENTIEL</label>
                                                    ";
            } elseif (CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 821
$context["seance"], "mode", [], "any", false, false, false, 821)), ["distanciel", "en_ligne"])) {
                // line 822
                yield "                                                        <label class=\"badge badge-distanciel\">EN_LIGNE</label>
                                                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 823
$context["seance"], "mode", [], "any", false, false, false, 823)) == "hybride")) {
                // line 824
                yield "                                                        <label class=\"badge badge-info\">HYBRIDE</label>
                                                    ";
            } else {
                // line 826
                yield "                                                        <label class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "mode", [], "any", false, false, false, 826), "html", null, true);
                yield "</label>
                                                    ";
            }
            // line 828
            yield "                                                </td>
                                                <td>
                                                    <div class=\"action-buttons\">
                                                        <a href=\"";
            // line 831
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 831)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\" title=\"Voir\"><i class=\"mdi mdi-eye\"></i></a>
                                                        <a href=\"";
            // line 832
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 832)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\"><i class=\"mdi mdi-pencil\"></i></a>
                                                        <button type=\"button\" class=\"btn btn-sm btn-danger delete-btn\" 
                                                                data-id=\"";
            // line 834
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 834), "html", null, true);
            yield "\" 
                                                                data-title=\"Seance #";
            // line 835
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 835), "html", null, true);
            yield "\"
                                                                data-token=\"";
            // line 836
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 836))), "html", null, true);
            yield "\"
                                                                title=\"Supprimer\">
                                                            <i class=\"mdi mdi-delete\"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
        }
        // line 843
        if (!$context['_iterated']) {
            // line 844
            yield "                                            <tr>
                                                <td colspan=\"8\" class=\"text-center py-5\">
                                                    <div class=\"empty-state\">
                                                        <i class=\"mdi mdi-calendar-blank-outline empty-state-icon\"></i>
                                                        <h4>Aucune séance trouvée</h4>
                                                        <p class=\"text-muted\">Commencez par créer une nouvelle séance</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['seance'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 854
        yield "                                    </tbody>
                                </table>
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
        // line 866
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Gestion des Séances
                </span>
              </div>
            </footer>
        </div>
    </div>
</div>
</div>

<!-- Delete Modal -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-danger text-white\">
        <h5 class=\"modal-title\" id=\"deleteModalLabel\">
          <i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression
        </h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body text-center py-4\">
        <div class=\"mb-3\">
          <i class=\"mdi mdi-trash-can-outline\" style=\"font-size: 60px; color: #dc3545;\"></i>
        </div>
        <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer <span id=\"itemTitle\" class=\"fw-bold\"></span> ?</h5>
        <p class=\"text-muted\">Cette action est irréversible.</p>
        <form id=\"deleteForm\" method=\"post\" action=\"\">
            <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
        </form>
      </div>
      <div class=\"modal-footer justify-content-center\">
        <button type=\"button\" class=\"btn btn-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
        <button type=\"button\" class=\"btn btn-danger px-4\" onclick=\"document.getElementById('deleteForm').submit();\">Supprimer</button>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src=\"";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 908
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Delete Modal Handling
      const deleteModalEl = document.getElementById('deleteModal');
      let deleteModal = null;
      if (deleteModalEl) {
         deleteModal = new bootstrap.Modal(deleteModalEl);
      }
      const itemTitleSpan = document.getElementById('itemTitle');
      const deleteForm = document.getElementById('deleteForm');
      const deleteTokenInput = document.getElementById('deleteToken');

      function attachDeleteHandlers() {
          document.querySelectorAll('.delete-btn').forEach(button => {
              button.addEventListener('click', function() {
                  const id = this.getAttribute('data-id');
                  const title = this.getAttribute('data-title');
                  const token = this.getAttribute('data-token');

                  if(itemTitleSpan) itemTitleSpan.textContent = title;
                  if(deleteForm) deleteForm.action = '/seance/' + id; // Standard delete route
                  if(deleteTokenInput) deleteTokenInput.value = token;
                  
                  if(deleteModal) deleteModal.show();
              });
          });
      }
      
      attachDeleteHandlers();

      // AJAX Filtering
      const searchInput = document.getElementById('filterSearchInput');
      const jourFilter = document.getElementById('jourFilter');
      const typeFilter = document.getElementById('typeFilter');
      const modeFilter = document.getElementById('modeFilter');
      const sortSelect = document.getElementById('sortSelect');
      const applyFiltersBtn = document.getElementById('applyFilters');
      const resetFiltersBtn = document.getElementById('resetFilters');
      const resultCountSpan = document.getElementById('resultCount');
      const tableBody = document.querySelector('#seancesTable tbody');
      const tableContainer = document.getElementById('seancesTableContainer');

      function fetchResults() {
          const params = new URLSearchParams();
          if (searchInput && searchInput.value) params.append('search', searchInput.value);
          if (jourFilter && jourFilter.value) params.append('jour', jourFilter.value);
          if (typeFilter && typeFilter.value) params.append('type', typeFilter.value);
          if (modeFilter && modeFilter.value) params.append('mode', modeFilter.value);
          
          if (sortSelect && sortSelect.value) {
              const [sort, direction] = sortSelect.value.split('-');
              params.append('sort', sort);
              params.append('direction', direction);
          }

          // UI Loading State
          if (applyFiltersBtn) {
              applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-2\"></i>Chargement...';
              applyFiltersBtn.disabled = true;
          }
          if (tableContainer) tableContainer.style.opacity = '0.5';

          fetch('";
        // line 973
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_ajax_filter");
        yield "?' + params.toString())
              .then(response => response.json())
              .then(data => {
                  updateTable(data.data);
                  if (resultCountSpan) resultCountSpan.innerHTML = '<i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: ' + data.count;
              })
              .catch(err => console.error('Error fetching data:', err))
              .finally(() => {
                  if (applyFiltersBtn) {
                      applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-filter btn-icon-prepend\"></i> FILTRER';
                      applyFiltersBtn.disabled = false;
                  }
                  if (tableContainer) tableContainer.style.opacity = '1';
              });
      }

      function updateTable(seances) {
          if (!tableBody) return;

          if (seances.length === 0) {
              tableBody.innerHTML = `
                  <tr>
                    <td colspan=\"8\" class=\"text-center py-5\">
                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-calendar-blank-outline empty-state-icon\"></i>
                        <h4>Aucune séance trouvée</h4>
                        <p class=\"text-muted\">Essayez de modifier vos filtres.</p>
                      </div>
                    </td>
                  </tr>
              `;
              return;
          }

          tableBody.innerHTML = seances.map(seance => {
              let modeBadge = '';
              const mode = seance.mode ? seance.mode.toLowerCase() : '';
              
              if (mode === 'présentiel' || mode === 'presentiel') {
                  modeBadge = '<label class=\"badge badge-presentiel\">PRESENTIEL</label>';
              } else if (mode === 'distanciel' || mode === 'en_ligne') {
                  modeBadge = '<label class=\"badge badge-distanciel\">EN_LIGNE</label>';
              } else if (mode === 'hybride') {
                  modeBadge = '<label class=\"badge badge-info\">HYBRIDE</label>';
              } else {
                  modeBadge = `<label class=\"badge badge-secondary\">\${seance.mode || 'N/A'}</label>`;
              }

              return `
                  <tr>
                      <td><span class=\"text-muted\">#\${seance.id}</span></td>
                      <td><span class=\"fw-bold\">\${seance.matiere}</span></td>
                      <td><label class=\"badge badge-info\">\${seance.classe}</label></td>
                      <td>\${seance.salle}</td>
                      <td><span class=\"jour-badge\">\${seance.jour}</span></td>
                      <td>
                          \${seance.heureDebut} - \${seance.heureFin}
                      </td>
                      <td>\${modeBadge}</td>
                      <td>
                          <div class=\"action-buttons\">
                              <a href=\"\${seance.url}\" class=\"btn btn-sm btn-info\" title=\"Voir\"><i class=\"mdi mdi-eye\"></i></a>
                              <a href=\"\${seance.editUrl}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\"><i class=\"mdi mdi-pencil\"></i></a>
                              <button type=\"button\" class=\"btn btn-sm btn-danger delete-btn\" 
                                      data-id=\"\${seance.id}\" 
                                      data-title=\"Seance #\${seance.id}\"
                                      data-token=\"\${seance.csrfToken}\"
                                      title=\"Supprimer\">
                                  <i class=\"mdi mdi-delete\"></i>
                              </button>
                          </div>
                      </td>
                  </tr>
              `;
          }).join('');
          
          attachDeleteHandlers();
      }

      // Event Listeners
      if (applyFiltersBtn) applyFiltersBtn.addEventListener('click', fetchResults);
      
      if (searchInput) {
          searchInput.addEventListener('input', function() {
               clearTimeout(this.searchTimeout);
               this.searchTimeout = setTimeout(fetchResults, 400);
          });
      }

      const navSearchInput = document.getElementById('searchInput'); // Navbar search
      if (navSearchInput) {
          navSearchInput.addEventListener('input', function() {
               if (searchInput) {
                   searchInput.value = this.value; // Sync the filter box
                   clearTimeout(searchInput.searchTimeout);
                   searchInput.searchTimeout = setTimeout(fetchResults, 400);
               }
          });
      }
      
      [jourFilter, typeFilter, modeFilter, sortSelect].forEach(el => {
          if (el) el.addEventListener('change', fetchResults);
      });

      if (resetFiltersBtn) {
          resetFiltersBtn.addEventListener('click', () => {
              window.location.href = \"";
        // line 1079
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index");
        yield "\";
          });
      }
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
        return "seance/index.html.twig";
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
        return array (  1623 => 1079,  1514 => 973,  1447 => 909,  1443 => 908,  1439 => 907,  1395 => 866,  1381 => 854,  1366 => 844,  1364 => 843,  1352 => 836,  1348 => 835,  1344 => 834,  1339 => 832,  1335 => 831,  1330 => 828,  1324 => 826,  1320 => 824,  1318 => 823,  1315 => 822,  1313 => 821,  1310 => 820,  1308 => 819,  1302 => 816,  1298 => 815,  1293 => 813,  1289 => 812,  1285 => 811,  1281 => 810,  1277 => 809,  1274 => 808,  1269 => 807,  1245 => 786,  1240 => 784,  1209 => 758,  1203 => 757,  1197 => 756,  1191 => 755,  1178 => 747,  1172 => 746,  1166 => 745,  1153 => 737,  1147 => 736,  1141 => 735,  1128 => 727,  1122 => 726,  1116 => 725,  1110 => 724,  1104 => 723,  1098 => 722,  1086 => 713,  1055 => 685,  1050 => 684,  1048 => 683,  1026 => 664,  1021 => 663,  1019 => 662,  997 => 643,  992 => 642,  990 => 641,  968 => 622,  964 => 621,  950 => 609,  945 => 606,  941 => 604,  939 => 603,  935 => 602,  929 => 601,  924 => 598,  922 => 597,  902 => 579,  896 => 578,  886 => 574,  882 => 573,  877 => 572,  872 => 571,  867 => 570,  844 => 550,  829 => 538,  815 => 528,  813 => 527,  809 => 525,  804 => 522,  800 => 520,  796 => 518,  792 => 516,  790 => 515,  785 => 513,  778 => 512,  776 => 511,  769 => 506,  762 => 503,  756 => 499,  752 => 497,  748 => 495,  746 => 494,  738 => 491,  734 => 489,  727 => 486,  724 => 485,  718 => 482,  713 => 481,  711 => 480,  708 => 479,  706 => 478,  664 => 439,  646 => 424,  633 => 414,  620 => 404,  607 => 394,  594 => 384,  581 => 374,  568 => 364,  555 => 354,  542 => 344,  529 => 334,  507 => 314,  502 => 311,  498 => 309,  494 => 307,  490 => 305,  488 => 304,  483 => 302,  476 => 301,  474 => 300,  469 => 297,  463 => 295,  460 => 294,  453 => 291,  450 => 290,  444 => 287,  439 => 286,  436 => 285,  434 => 284,  423 => 276,  419 => 275,  414 => 273,  410 => 272,  404 => 268,  391 => 267,  128 => 14,  124 => 13,  119 => 11,  115 => 10,  111 => 9,  107 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Séances{% endblock %}

{% block stylesheets %}
    {{ parent() }}
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
      
      /* Profile styles */
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
      
      .badge-etudiant {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
      }
      
      .badge-admin {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
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
      
      .avatar-container {
        display: flex;
        align-items: center;
        gap: 12px;
      }
      
      .alert {
        border-radius: 10px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
      }
      
      /* Seance specific styles */
      .seance-avatar {
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
      }
      
      .seance-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        color: white;
      }
      
      .badge-cours {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      }
      
      .badge-td {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
      }
      
      .badge-tp {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
      }
      
      .badge-presentiel {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      }
      
      .badge-distanciel {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      }
      
      .badge-hybride {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      }
      
      .jour-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
      }
      
      .action-buttons {
        display: flex;
        gap: 5px;
      }
      
      .action-buttons .btn {
        padding: 5px 10px;
        margin: 0 2px;
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
      
      .day-filter {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
      }
      
      .day-filter .btn {
        border-radius: 20px;
        padding: 6px 15px;
        font-size: 0.9rem;
      }
      
      .type-filter {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
      }
      
      .type-filter .btn {
        border-radius: 20px;
        padding: 6px 15px;
        font-size: 0.9rem;
      }
    </style>
{% endblock %}

{% block body %}
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
                    <span class=\"menu-title\">Matières</span>
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
            <li class=\"nav-item menu-items active\">
                <a class=\"nav-link\" href=\"{{ path('app_seance_index') }}\">
                    <span class=\"menu-icon\">
                        <i class=\"mdi mdi-calendar-clock\"></i>
                    </span>
                    <span class=\"menu-title\">Séances</span>
                </a>
            </li>
            
            <!-- Groupes -->
            <li class=\"nav-item menu-items\">
                <a class=\"nav-link\" href=\"{{path('app_groupe_projet_index')}}\">
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
                <a class=\"nav-link\" href=\"{{path('app_preference_alerte_index')}}\">
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
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une séance...\" id=\"searchInput\">
                        </form>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <i class=\"mdi mdi-bell\"></i>
                            <span class=\"count bg-danger\">2</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <h6 class=\"p-3 mb-0\">Notifications</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-success rounded-circle\">
                                        <i class=\"mdi mdi-calendar-clock\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Nouvelle séance</p>
                                    <p class=\"text-muted ellipsis mb-0\">Séance Mathématiques programmée</p>
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
                                    <i class=\"mdi mdi-calendar-clock\"></i>
                                </span> 
                                Gestion des Séances
                            </h3>
                            <nav aria-label=\"breadcrumb\">
                                <ul class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <span></span>Liste des séances ESPRIT
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
                
                <!-- Statistics -->
                <div class=\"row\">
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            <h3 class=\"mb-0 stat-count\">{{ seances|length }}</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ random(2, 8) }}%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-1\">
                                            <i class=\"mdi mdi-calendar-clock\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Total Séances</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            {% set coursCount = seances|filter(s => s.typeSeance == 'Cours')|length %}
                                            <h3 class=\"mb-0 stat-count\">{{ coursCount }}</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ random(5, 15) }}%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-2\">
                                            <i class=\"mdi mdi-book-open-page-variant\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Séances Cours</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            {% set presentielCount = seances|filter(s => s.mode == 'Présentiel')|length %}
                                            <h3 class=\"mb-0 stat-count\">{{ presentielCount }}</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ random(1, 5) }}%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-3\">
                                            <i class=\"mdi mdi-account-group\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Présentiel</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                        <div class=\"card stat-card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-9\">
                                        <div class=\"d-flex align-items-center align-self-start\">
                                            {% set thisWeekCount = seances|filter(s => s.jour in ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'])|length %}
                                            <h3 class=\"mb-0 stat-count\">{{ thisWeekCount }}</h3>
                                            <p class=\"text-success ms-2 mb-0 font-weight-medium\">+{{ random(3, 10) }}%</p>
                                        </div>
                                    </div>
                                    <div class=\"col-3\">
                                        <div class=\"stat-icon card-4\">
                                            <i class=\"mdi mdi-calendar-week\"></i>
                                        </div>
                                    </div>
                                </div>
                                <h6 class=\"stat-label\">Cette semaine</h6>
                            </div>
                        </div>
                    </div>
                </div>
                
            <!-- Filters Panel -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin stretch-card\">
                <div class=\"card\" style=\"background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: none; border-radius: 12px;\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4 text-primary\"><i class=\"mdi mdi-filter-variant me-2\"></i>Filtrer et Rechercher</h4>
                    <div class=\"row g-3\">
                      <!-- Search -->
                      <div class=\"col-md-3\">
                        <label class=\"fw-bold mb-1\">Recherche</label>
                        <div class=\"search-box\">
                          <i class=\"mdi mdi-magnify search-icon\"></i>
                          <input type=\"text\" id=\"filterSearchInput\" class=\"form-control form-control-lg border-primary\" 
                                 placeholder=\"Matière, Salle...\" value=\"{{ search }}\">
                        </div>
                      </div>
                      
                      <!-- Filters -->
                      <div class=\"col-md-2\">
                        <label class=\"fw-bold mb-1\">Jour</label>
                        <select id=\"jourFilter\" class=\"form-select form-select-lg border-primary\">
                          <option value=\"\">Tous les jours</option>
                          <option value=\"Lundi\" {% if jour == 'Lundi' %}selected{% endif %}>Lundi</option>
                          <option value=\"Mardi\" {% if jour == 'Mardi' %}selected{% endif %}>Mardi</option>
                          <option value=\"Mercredi\" {% if jour == 'Mercredi' %}selected{% endif %}>Mercredi</option>
                          <option value=\"Jeudi\" {% if jour == 'Jeudi' %}selected{% endif %}>Jeudi</option>
                          <option value=\"Vendredi\" {% if jour == 'Vendredi' %}selected{% endif %}>Vendredi</option>
                          <option value=\"Samedi\" {% if jour == 'Samedi' %}selected{% endif %}>Samedi</option>
                        </select>
                      </div>

                      <div class=\"col-md-2\">
                         <label class=\"fw-bold mb-1\">Type</label>
                          <select id=\"typeFilter\" class=\"form-select form-select-lg border-primary\">
                             <option value=\"\">Tous les types</option>
                             <option value=\"Cours\" {% if type == 'Cours' %}selected{% endif %}>Cours</option>
                             <option value=\"TD\" {% if type == 'TD' %}selected{% endif %}>TD</option>
                             <option value=\"TP\" {% if type == 'TP' %}selected{% endif %}>TP</option>
                          </select>
                      </div>

                      <div class=\"col-md-2\">
                         <label class=\"fw-bold mb-1\">Mode</label>
                          <select id=\"modeFilter\" class=\"form-select form-select-lg border-primary\">
                             <option value=\"\">Tous les modes</option>
                             <option value=\"Présentiel\" {% if mode == 'Présentiel' %}selected{% endif %}>Présentiel</option>
                             <option value=\"Distanciel\" {% if mode == 'Distanciel' %}selected{% endif %}>Distanciel</option>
                             <option value=\"Hybride\" {% if mode == 'Hybride' %}selected{% endif %}>Hybride</option>
                          </select>
                      </div>

                      <!-- Sort -->
                      <div class=\"col-md-3\">
                        <label class=\"fw-bold mb-1\">Trier par</label>
                        <select id=\"sortSelect\" class=\"form-select form-select-lg border-primary\">
                          <option value=\"id-asc\" {% if sort == 'id' and direction == 'asc' %}selected{% endif %}>ID (Croissant)</option>
                          <option value=\"id-desc\" {% if sort == 'id' and direction == 'desc' %}selected{% endif %}>ID (Décroissant)</option>
                          <option value=\"jour-asc\" {% if sort == 'jour' and direction == 'asc' %}selected{% endif %}>Jour (Lun-Sam)</option>
                          <option value=\"heureDebut-asc\" {% if sort == 'heureDebut' and direction == 'asc' %}selected{% endif %}>Heure Début (Tôt-Tard)</option>
                        </select>
                      </div>
                    </div>

                    <div class=\"mt-4 d-flex justify-content-end\">
                      <button id=\"resetFilters\" class=\"btn btn-inverse-dark btn-icon-text me-2\">
                        <i class=\"mdi mdi-refresh btn-icon-prepend\"></i> Réinitialiser
                      </button>
                      <button id=\"applyFilters\" class=\"btn btn-gradient-primary btn-icon-text\">
                        <i class=\"mdi mdi-filter btn-icon-prepend\"></i> FILTRER
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Seances Table -->
            <div class=\"row\">
                <div class=\"col-12 grid-margin\">
                    <div class=\"card table-card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                <h4 class=\"card-title mb-0\">📅 Liste des Séances</h4>
                                <span id=\"resultCount\" class=\"badge badge-outline-primary badge-pill\">
                                    <i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: {{ seances|length }}
                                </span>
                                <a href=\"{{ path('app_seance_new') }}\" class=\"btn btn-gradient-primary btn-icon-text\">
                                    <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                                    Nouvelle Séance
                                </a>
                            </div>

                            <div class=\"table-responsive\" id=\"seancesTableContainer\">
                                <table class=\"table table-hover\" id=\"seancesTable\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Matière</th>
                                            <th>Classe</th>
                                            <th>Salle</th>
                                            <th>Jour</th>
                                            <th>Horaires</th>
                                            <th>Mode</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for seance in seances %}
                                            <tr>
                                                <td><span class=\"text-muted\">#{{ seance.id }}</span></td>
                                                <td><span class=\"fw-bold\">{{ seance.matiere ? seance.matiere.nom : 'N/A' }}</span></td>
                                                <td><label class=\"badge badge-info\">{{ seance.classe ? seance.classe.nom : 'N/A' }}</label></td>
                                                <td>{{ seance.salle ? seance.salle.name : 'N/A' }}</td>
                                                <td><span class=\"jour-badge\">{{ seance.jour }}</span></td>
                                                <td>
                                                    {{ seance.heureDebut ? seance.heureDebut|date('H:i') : '' }} - 
                                                    {{ seance.heureFin ? seance.heureFin|date('H:i') : '' }}
                                                </td>
                                                <td>
                                                    {% if seance.mode|lower in ['présentiel', 'presentiel'] %}
                                                        <label class=\"badge badge-presentiel\">PRESENTIEL</label>
                                                    {% elseif seance.mode|lower in ['distanciel', 'en_ligne'] %}
                                                        <label class=\"badge badge-distanciel\">EN_LIGNE</label>
                                                    {% elseif seance.mode|lower == 'hybride' %}
                                                        <label class=\"badge badge-info\">HYBRIDE</label>
                                                    {% else %}
                                                        <label class=\"badge badge-secondary\">{{ seance.mode }}</label>
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    <div class=\"action-buttons\">
                                                        <a href=\"{{ path('app_seance_show', {'id': seance.id}) }}\" class=\"btn btn-sm btn-info\" title=\"Voir\"><i class=\"mdi mdi-eye\"></i></a>
                                                        <a href=\"{{ path('app_seance_edit', {'id': seance.id}) }}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\"><i class=\"mdi mdi-pencil\"></i></a>
                                                        <button type=\"button\" class=\"btn btn-sm btn-danger delete-btn\" 
                                                                data-id=\"{{ seance.id }}\" 
                                                                data-title=\"Seance #{{ seance.id }}\"
                                                                data-token=\"{{ csrf_token('delete' ~ seance.id) }}\"
                                                                title=\"Supprimer\">
                                                            <i class=\"mdi mdi-delete\"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"8\" class=\"text-center py-5\">
                                                    <div class=\"empty-state\">
                                                        <i class=\"mdi mdi-calendar-blank-outline empty-state-icon\"></i>
                                                        <h4>Aucune séance trouvée</h4>
                                                        <p class=\"text-muted\">Commencez par créer une nouvelle séance</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
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
                  Gestion des Séances
                </span>
              </div>
            </footer>
        </div>
    </div>
</div>
</div>

<!-- Delete Modal -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-header bg-danger text-white\">
        <h5 class=\"modal-title\" id=\"deleteModalLabel\">
          <i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression
        </h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body text-center py-4\">
        <div class=\"mb-3\">
          <i class=\"mdi mdi-trash-can-outline\" style=\"font-size: 60px; color: #dc3545;\"></i>
        </div>
        <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer <span id=\"itemTitle\" class=\"fw-bold\"></span> ?</h5>
        <p class=\"text-muted\">Cette action est irréversible.</p>
        <form id=\"deleteForm\" method=\"post\" action=\"\">
            <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
        </form>
      </div>
      <div class=\"modal-footer justify-content-center\">
        <button type=\"button\" class=\"btn btn-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
        <button type=\"button\" class=\"btn btn-danger px-4\" onclick=\"document.getElementById('deleteForm').submit();\">Supprimer</button>
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
      // Delete Modal Handling
      const deleteModalEl = document.getElementById('deleteModal');
      let deleteModal = null;
      if (deleteModalEl) {
         deleteModal = new bootstrap.Modal(deleteModalEl);
      }
      const itemTitleSpan = document.getElementById('itemTitle');
      const deleteForm = document.getElementById('deleteForm');
      const deleteTokenInput = document.getElementById('deleteToken');

      function attachDeleteHandlers() {
          document.querySelectorAll('.delete-btn').forEach(button => {
              button.addEventListener('click', function() {
                  const id = this.getAttribute('data-id');
                  const title = this.getAttribute('data-title');
                  const token = this.getAttribute('data-token');

                  if(itemTitleSpan) itemTitleSpan.textContent = title;
                  if(deleteForm) deleteForm.action = '/seance/' + id; // Standard delete route
                  if(deleteTokenInput) deleteTokenInput.value = token;
                  
                  if(deleteModal) deleteModal.show();
              });
          });
      }
      
      attachDeleteHandlers();

      // AJAX Filtering
      const searchInput = document.getElementById('filterSearchInput');
      const jourFilter = document.getElementById('jourFilter');
      const typeFilter = document.getElementById('typeFilter');
      const modeFilter = document.getElementById('modeFilter');
      const sortSelect = document.getElementById('sortSelect');
      const applyFiltersBtn = document.getElementById('applyFilters');
      const resetFiltersBtn = document.getElementById('resetFilters');
      const resultCountSpan = document.getElementById('resultCount');
      const tableBody = document.querySelector('#seancesTable tbody');
      const tableContainer = document.getElementById('seancesTableContainer');

      function fetchResults() {
          const params = new URLSearchParams();
          if (searchInput && searchInput.value) params.append('search', searchInput.value);
          if (jourFilter && jourFilter.value) params.append('jour', jourFilter.value);
          if (typeFilter && typeFilter.value) params.append('type', typeFilter.value);
          if (modeFilter && modeFilter.value) params.append('mode', modeFilter.value);
          
          if (sortSelect && sortSelect.value) {
              const [sort, direction] = sortSelect.value.split('-');
              params.append('sort', sort);
              params.append('direction', direction);
          }

          // UI Loading State
          if (applyFiltersBtn) {
              applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-2\"></i>Chargement...';
              applyFiltersBtn.disabled = true;
          }
          if (tableContainer) tableContainer.style.opacity = '0.5';

          fetch('{{ path(\"app_seance_ajax_filter\") }}?' + params.toString())
              .then(response => response.json())
              .then(data => {
                  updateTable(data.data);
                  if (resultCountSpan) resultCountSpan.innerHTML = '<i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: ' + data.count;
              })
              .catch(err => console.error('Error fetching data:', err))
              .finally(() => {
                  if (applyFiltersBtn) {
                      applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-filter btn-icon-prepend\"></i> FILTRER';
                      applyFiltersBtn.disabled = false;
                  }
                  if (tableContainer) tableContainer.style.opacity = '1';
              });
      }

      function updateTable(seances) {
          if (!tableBody) return;

          if (seances.length === 0) {
              tableBody.innerHTML = `
                  <tr>
                    <td colspan=\"8\" class=\"text-center py-5\">
                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-calendar-blank-outline empty-state-icon\"></i>
                        <h4>Aucune séance trouvée</h4>
                        <p class=\"text-muted\">Essayez de modifier vos filtres.</p>
                      </div>
                    </td>
                  </tr>
              `;
              return;
          }

          tableBody.innerHTML = seances.map(seance => {
              let modeBadge = '';
              const mode = seance.mode ? seance.mode.toLowerCase() : '';
              
              if (mode === 'présentiel' || mode === 'presentiel') {
                  modeBadge = '<label class=\"badge badge-presentiel\">PRESENTIEL</label>';
              } else if (mode === 'distanciel' || mode === 'en_ligne') {
                  modeBadge = '<label class=\"badge badge-distanciel\">EN_LIGNE</label>';
              } else if (mode === 'hybride') {
                  modeBadge = '<label class=\"badge badge-info\">HYBRIDE</label>';
              } else {
                  modeBadge = `<label class=\"badge badge-secondary\">\${seance.mode || 'N/A'}</label>`;
              }

              return `
                  <tr>
                      <td><span class=\"text-muted\">#\${seance.id}</span></td>
                      <td><span class=\"fw-bold\">\${seance.matiere}</span></td>
                      <td><label class=\"badge badge-info\">\${seance.classe}</label></td>
                      <td>\${seance.salle}</td>
                      <td><span class=\"jour-badge\">\${seance.jour}</span></td>
                      <td>
                          \${seance.heureDebut} - \${seance.heureFin}
                      </td>
                      <td>\${modeBadge}</td>
                      <td>
                          <div class=\"action-buttons\">
                              <a href=\"\${seance.url}\" class=\"btn btn-sm btn-info\" title=\"Voir\"><i class=\"mdi mdi-eye\"></i></a>
                              <a href=\"\${seance.editUrl}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\"><i class=\"mdi mdi-pencil\"></i></a>
                              <button type=\"button\" class=\"btn btn-sm btn-danger delete-btn\" 
                                      data-id=\"\${seance.id}\" 
                                      data-title=\"Seance #\${seance.id}\"
                                      data-token=\"\${seance.csrfToken}\"
                                      title=\"Supprimer\">
                                  <i class=\"mdi mdi-delete\"></i>
                              </button>
                          </div>
                      </td>
                  </tr>
              `;
          }).join('');
          
          attachDeleteHandlers();
      }

      // Event Listeners
      if (applyFiltersBtn) applyFiltersBtn.addEventListener('click', fetchResults);
      
      if (searchInput) {
          searchInput.addEventListener('input', function() {
               clearTimeout(this.searchTimeout);
               this.searchTimeout = setTimeout(fetchResults, 400);
          });
      }

      const navSearchInput = document.getElementById('searchInput'); // Navbar search
      if (navSearchInput) {
          navSearchInput.addEventListener('input', function() {
               if (searchInput) {
                   searchInput.value = this.value; // Sync the filter box
                   clearTimeout(searchInput.searchTimeout);
                   searchInput.searchTimeout = setTimeout(fetchResults, 400);
               }
          });
      }
      
      [jourFilter, typeFilter, modeFilter, sortSelect].forEach(el => {
          if (el) el.addEventListener('change', fetchResults);
      });

      if (resetFiltersBtn) {
          resetFiltersBtn.addEventListener('click', () => {
              window.location.href = \"{{ path('app_seance_index') }}\";
          });
      }
  });
</script>
{% endblock %}
", "seance/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\seance\\index.html.twig");
    }
}
