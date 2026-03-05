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

/* suivi_bien_etre/by_objectif.html.twig */
class __TwigTemplate_c1bbded55c399c11e18702920b5217cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/by_objectif.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/by_objectif.html.twig"));

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

        yield "Suivis - ";
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
  <title>ESPRIT - Suivis Bien-être</title>

  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
  <!-- Layout styles -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
  <link rel=\"shortcut icon\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" />

  <style>
    :root{
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
      --danger-gradient: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
      --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
      --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      --health-gradient: linear-gradient(135deg, #fa8bff 0%, #2bd2ff 90%, #2bff88 100%);
      --card-shadow: 0 4px 20px rgba(0,0,0,.08);
      --card-shadow-hover: 0 8px 30px rgba(0,0,0,.12);
    }

    .card{border:none;border-radius:15px;box-shadow:var(--card-shadow);transition:.3s;}
    .card:hover{box-shadow:var(--card-shadow-hover);}

    .page-header{
      background:#fff;border-radius:15px;padding:2rem;box-shadow:var(--card-shadow);margin-bottom:2rem;
    }
    .page-title-icon{
      width:50px;height:50px;border-radius:12px;display:flex;align-items:center;justify-content:center;
    }

    .search-box{max-width:320px;}
    .search-box input{border-radius:10px;border:2px solid #e9ecef;transition:.3s;}
    .search-box input:focus{border-color:#667eea;box-shadow:0 0 0 .2rem rgba(102,126,234,.15);}

    .table-hover tbody tr{transition:.3s;}
    .table-hover tbody tr:hover{background-color:rgba(102,126,234,.05);transform:scale(1.01);}
    .table thead th{
      background:linear-gradient(135deg,#f8f9fa 0%,#e9ecef 100%);
      color:#495057;font-weight:600;text-transform:uppercase;font-size:.85rem;letter-spacing:.5px;border:none;padding:1rem;
    }
    .table td{vertical-align:middle;padding:1rem;border-bottom:1px solid #f1f3f5;}
    .action-buttons{display:flex;gap:6px;flex-wrap:wrap;}
    .action-buttons .btn{padding:6px 12px;border-radius:8px;transition:.3s;}
    .action-buttons .btn:hover{transform:translateY(-2px);}

    .badge-pill{
      display:inline-flex;align-items:center;gap:6px;
      padding:6px 12px;border-radius:999px;font-weight:600;font-size:.8rem;border:none;color:#fff;
    }
    
    .badge-score-excellent { background: var(--success-gradient); }
    .badge-score-good { background: var(--info-gradient); }
    .badge-score-medium { background: var(--warning-gradient); }
    .badge-score-poor { background: var(--danger-gradient); }

    .mood-badge {
      display:inline-flex;align-items:center;gap:5px;
      padding:5px 10px;border-radius:20px;font-size:.85rem;font-weight:600;
    }
    .mood-tres-mauvaise { background:#ffeaea; color:#dc3545; }
.mood-mauvaise      { background:#fff3cd; color:#856404; }
.mood-neutre        { background:#e9ecef; color:#495057; }
.mood-bonne         { background:#d4edda; color:#155724; }
.mood-excellente    { background:#d1ecf1; color:#0c5460; }


    .rating-badge {
      display:inline-flex;align-items:center;justify-content:center;
      width:32px;height:32px;border-radius:50%;font-weight:bold;font-size:.85rem;
      background:linear-gradient(135deg,#f8f9fa 0%,#e9ecef 100%);color:#495057;
    }
    .rating-0-3 { background:#ffeaea; color:#dc3545; }
    .rating-4-6 { background:#fff3cd; color:#856404; }
    .rating-7-8 { background:#d1ecf1; color:#0c5460; }
    .rating-9-10 { background:#d4edda; color:#155724; }

    .mini-info{
      display:flex;gap:10px;flex-wrap:wrap;margin-top:.75rem;
    }
    .mini-info .chip{
      background:linear-gradient(135deg,#f8f9fa 0%,#e9ecef 100%);
      border-radius:12px;padding:8px 12px;font-weight:600;color:#495057;font-size:.85rem;
    }

    .progress-small {
      height:6px;border-radius:3px;background:#e9ecef;overflow:hidden;
      width:60px;display:inline-block;vertical-align:middle;margin-right:8px;
    }
    .progress-small .progress-bar {
      border-radius:3px;background:var(--health-gradient);
    }

    /* Avatar / sidebar helpers (same as objectif) */
    .user-avatar{width:40px;height:40px;border-radius:50%;background:var(--primary-gradient);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;font-size:16px;flex-shrink:0;}
    .user-avatar-img{width:40px;height:40px;border-radius:50%;object-fit:cover;border:2px solid #fff;box-shadow:0 2px 5px rgba(0,0,0,.1);}
    .profile-avatar{width:50px;height:50px;border-radius:50%;background:var(--primary-gradient);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;font-size:20px;margin-right:15px;flex-shrink:0;}
    .profile-avatar-img{width:50px;height:50px;border-radius:50%;object-fit:cover;border:3px solid #fff;box-shadow:0 3px 10px rgba(0,0,0,.15);}
    .badge-etudiant{background:var(--info-gradient);color:#fff;border:none;}
    .badge-admin{background:var(--primary-gradient);color:#fff;border:none;}
    .user-role-badge{font-size:.75rem;padding:3px 10px;border-radius:10px;margin-top:5px;display:inline-block;}
    .avatar-container{display:flex;align-items:center;gap:12px;}
    .navbar-profile{display:flex;align-items:center;padding:5px 0;}
    .profile-pic{display:flex;align-items:center;padding:10px 0;}
    .count-indicator{position:relative;margin-right:15px;}
    .profile-name{flex-grow:1;}

    .empty-state {
      text-align:center;padding:60px 20px;
      background:linear-gradient(135deg,#f8f9fa 0%,#e9ecef 100%);
      border-radius:15px;
    }
    .empty-state i {
      font-size:80px;background:var(--health-gradient);
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;margin-bottom:20px;
    }

    @media(max-width:768px){
      .search-box{max-width:100%;margin-bottom:1rem;}
      .action-buttons{flex-direction:column;}
      .table-responsive{font-size:.9rem;}
    }
  </style>
</head>

<body>
<div class=\"container-scroller\">

  <!-- Sidebar (EXACT same) -->
  <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
      <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
        <img src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
      </a>
      <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
        <img src=\"";
        // line 149
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
        // line 158
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 159
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "profilePic", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 160
                yield "                  <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160), "profilePic", [], "any", false, false, false, 160))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160), "prenom", [], "any", false, false, false, 160), "html", null, true);
                yield "\" class=\"profile-avatar-img\">
                ";
            } else {
                // line 162
                yield "                  <div class=\"profile-avatar\">
                    ";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "prenom", [], "any", false, false, false, 163))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "nom", [], "any", false, false, false, 163))), "html", null, true);
                yield "
                  </div>
                ";
            }
            // line 166
            yield "              ";
        } else {
            // line 167
            yield "                <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
              ";
        }
        // line 169
        yield "              <span class=\"count bg-success\"></span>
            </div>

            <div class=\"profile-name\">
              ";
        // line 173
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 174
            yield "                <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174), "prenom", [], "any", false, false, false, 174), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174), "nom", [], "any", false, false, false, 174), "html", null, true);
            yield "</h5>
                <span class=\"text-muted\">";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "email", [], "any", false, false, false, 175), "html", null, true);
            yield "</span>
                <div class=\"mt-1\">
                  ";
            // line 177
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "user", [], "any", false, false, false, 177), "roles", [], "any", false, false, false, 177))) {
                // line 178
                yield "                    <span class=\"user-role-badge badge-admin\">Administrateur</span>
                  ";
            } else {
                // line 180
                yield "                    <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                  ";
            }
            // line 182
            yield "                </div>
              ";
        } else {
            // line 184
            yield "                <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                <span>Veuillez vous connecter</span>
              ";
        }
        // line 187
        yield "            </div>
          </div>
        </div>
      </li>

      <li class=\"nav-item nav-category\"><span class=\"nav-link\">Navigation</span></li>

      <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" href=\"#\">
          <span class=\"menu-icon\"><i class=\"mdi mdi-speedometer\"></i></span>
          <span class=\"menu-title\">Dashboard</span>
        </a>
      </li>

      <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" href=\"";
        // line 202
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
        // line 244
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
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Objectifs suivis</span>
            </a>
          </li>

      <!-- Keep same active section -->
      
      <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" href=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
          <span class=\"menu-icon\"><i class=\"mdi mdi-logout text-danger\"></i></span>
          <span class=\"menu-title text-danger\">Déconnexion</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main -->
  <div class=\"container-fluid page-body-wrapper\">

    <!-- Navbar (EXACT same style) -->
    <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
      <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
        <img src=\"";
        // line 280
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
              <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher dans les suivis...\" id=\"navSearchInput\">
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
                  <p class=\"preview-subject mb-1\">Suivi ajouté</p>
                  <p class=\"text-muted ellipsis mb-0\">Vous avez ajouté un nouveau suivi</p>
                </div>
              </a>
            </div>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
              <div class=\"navbar-profile\">
                ";
        // line 322
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 322, $this->source); })()), "user", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 323
            yield "                  <div class=\"avatar-container\">
                    ";
            // line 324
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 324, $this->source); })()), "user", [], "any", false, false, false, 324), "profilePic", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 325
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "user", [], "any", false, false, false, 325), "profilePic", [], "any", false, false, false, 325))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "user", [], "any", false, false, false, 325), "prenom", [], "any", false, false, false, 325), "html", null, true);
                yield "\" class=\"user-avatar-img\">
                    ";
            } else {
                // line 327
                yield "                      <div class=\"user-avatar\">
                        ";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "user", [], "any", false, false, false, 328), "prenom", [], "any", false, false, false, 328))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "user", [], "any", false, false, false, 328), "nom", [], "any", false, false, false, 328))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 331
            yield "                    <div class=\"text-start ms-2\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 332, $this->source); })()), "user", [], "any", false, false, false, 332), "prenom", [], "any", false, false, false, 332), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 332, $this->source); })()), "user", [], "any", false, false, false, 332), "nom", [], "any", false, false, false, 332), "html", null, true);
            yield "</p>
                      <small class=\"text-muted d-none d-sm-block\">
                        ";
            // line 334
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "user", [], "any", false, false, false, 334), "roles", [], "any", false, false, false, 334))) {
                // line 335
                yield "                          <span class=\"badge badge-admin\">Admin</span>
                        ";
            } else {
                // line 337
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 339
            yield "                      </small>
                    </div>
                  </div>
                ";
        } else {
            // line 343
            yield "                  <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                ";
        }
        // line 346
        yield "                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
              </div>
            </a>

            <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
              <div class=\"dropdown-header p-3\">
                ";
        // line 352
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "user", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 353
            yield "                  <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "user", [], "any", false, false, false, 353), "prenom", [], "any", false, false, false, 353), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "user", [], "any", false, false, false, 353), "nom", [], "any", false, false, false, 353), "html", null, true);
            yield "</h6>
                  <p class=\"text-muted mb-0\">";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 354, $this->source); })()), "user", [], "any", false, false, false, 354), "email", [], "any", false, false, false, 354), "html", null, true);
            yield "</p>
                  <small class=\"text-muted\">
                    ";
            // line 356
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 356, $this->source); })()), "user", [], "any", false, false, false, 356), "roles", [], "any", false, false, false, 356))) {
                // line 357
                yield "                      <span class=\"badge badge-admin\">Administrateur</span>
                    ";
            } else {
                // line 359
                yield "                      <span class=\"badge badge-etudiant\">Utilisateur</span>
                    ";
            }
            // line 361
            yield "                  </small>
                ";
        } else {
            // line 363
            yield "                  <h6 class=\"mb-0\">Non connecté</h6>
                  <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                ";
        }
        // line 366
        yield "              </div>

              <div class=\"dropdown-divider\"></div>

              ";
        // line 370
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 370, $this->source); })()), "user", [], "any", false, false, false, 370)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 371
            yield "                <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "user", [], "any", false, false, false, 371), "id", [], "any", false, false, false, 371)]), "html", null, true);
            yield "\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-primary rounded-circle\"><i class=\"mdi mdi-account\"></i></div>
                  </div>
                  <div class=\"preview-item-content\"><p class=\"preview-subject mb-1\">Mon profil</p></div>
                </a>
                <a class=\"dropdown-item preview-item\" href=\"";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 377, $this->source); })()), "user", [], "any", false, false, false, 377), "id", [], "any", false, false, false, 377)]), "html", null, true);
            yield "\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-warning rounded-circle\"><i class=\"mdi mdi-account-edit\"></i></div>
                  </div>
                  <div class=\"preview-item-content\"><p class=\"preview-subject mb-1\">Modifier mon profil</p></div>
                </a>
                <div class=\"dropdown-divider\"></div>
              ";
        }
        // line 385
        yield "
              <a class=\"dropdown-item preview-item\" href=\"";
        // line 386
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-dark rounded-circle\"><i class=\"mdi mdi-logout text-danger\"></i></div>
                </div>
                <div class=\"preview-item-content\"><p class=\"preview-subject mb-1\">Déconnexion</p></div>
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
        // line 403
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 403, $this->source); })()), "flashes", [], "any", false, false, false, 403));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 404
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 405
                yield "            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <i class=\"mdi mdi-";
                // line 406
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield "\"></i>
              <span class=\"ms-2\">";
                // line 407
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 411
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        yield "
        <!-- Header -->
        <div class=\"page-header\">
          <div class=\"d-flex justify-content-between align-items-start flex-wrap gap-3\">
            <div>
              <h3 class=\"page-title mb-0 text-dark\">
                <span class=\"page-title-icon bg-gradient-primary text-dark me-2\">
                  <i class=\"mdi mdi-chart-line\"></i>
                </span>
                Suivis Bien-être
              </h3>

              <div class=\"mini-info\">
                <span class=\"chip\">
                  <i class=\"mdi mdi-target me-1\"></i> 
                  <strong>";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 427, $this->source); })()), "titre", [], "any", false, false, false, 427), "html", null, true);
        yield "</strong>
                </span>
                <span class=\"chip\">
                  <i class=\"mdi mdi-tag me-1\"></i> 
                  ";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 431, $this->source); })()), "type", [], "any", false, false, false, 431), "html", null, true);
        yield "
                </span>
                ";
        // line 433
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 433, $this->source); })()), "valeurCible", [], "any", false, false, false, 433)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 434
            yield "                  <span class=\"chip\">
                    <i class=\"mdi mdi-bullseye-arrow me-1\"></i> 
                    Cible: ";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 436, $this->source); })()), "valeurCible", [], "any", false, false, false, 436), "html", null, true);
            yield "
                  </span>
                ";
        }
        // line 439
        yield "                <span class=\"chip\">
                  <i class=\"mdi mdi-progress-check me-1\"></i> 
                  Score Moyen: ";
        // line 441
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 441, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 441, $this->source); })()), "scoreMoyen", [], "any", false, false, false, 441) . "%"), "html", null, true)) : ("0%"));
        yield "
                </span>
              </div>

              <nav aria-label=\"breadcrumb\" class=\"mt-2\">
                <ol class=\"breadcrumb mb-0\">
                  <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 448
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\">
                      <i class=\"mdi mdi-heart-pulse me-1\"></i> Objectifs
                    </a>
                  </li>
                  <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 453, $this->source); })()), "id", [], "any", false, false, false, 453)]), "html", null, true);
        yield "\">
                      ";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 454, $this->source); })()), "titre", [], "any", false, false, false, 454), 0, 20), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 454, $this->source); })()), "titre", [], "any", false, false, false, 454)) > 20)) ? ("...") : (""));
        yield "
                    </a>
                  </li>
                  <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <i class=\"mdi mdi-chart-line me-1\"></i> Suivis
                  </li>
                </ol>
              </nav>
            </div>

           

          </div>
        </div>

        <!-- Statistics -->
        <div class=\"row mb-4\">
          <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
            <div class=\"card\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                  <div>
                    <h3 class=\"mb-0\" style=\"font-size:1.8rem;color:#667eea;\">";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 476, $this->source); })())), "html", null, true);
        yield "</h3>
                    <p class=\"mb-0 text-muted\">Total suivis</p>
                  </div>
                  <div class=\"text-primary\" style=\"font-size:2.5rem;\">
                    <i class=\"mdi mdi-chart-line\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
            <div class=\"card\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                  <div>
                    ";
        // line 492
        $context["avgScore"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 492, $this->source); })())) > 0)) ? ((Twig\Extension\CoreExtension::reduce($this->env, (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 492, $this->source); })()), function ($__sum__, $__s__) use ($context, $macros) { $context["sum"] = $__sum__; $context["s"] = $__s__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 492, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 492, $this->source); })()), "score", [], "any", false, false, false, 492)); }, 0) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 492, $this->source); })())))) : (0));
        // line 493
        yield "                    <h3 class=\"mb-0\" style=\"font-size:1.8rem;color:#43e97b;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["avgScore"]) || array_key_exists("avgScore", $context) ? $context["avgScore"] : (function () { throw new RuntimeError('Variable "avgScore" does not exist.', 493, $this->source); })()), 1), "html", null, true);
        yield "%</h3>
                    <p class=\"mb-0 text-muted\">Score moyen</p>
                  </div>
                  <div class=\"text-success\" style=\"font-size:2.5rem;\">
                    <i class=\"mdi mdi-star\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
            <div class=\"card\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                  <div>
                    ";
        // line 509
        $context["recentSuivi"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 509, $this->source); })()));
        // line 510
        yield "                    <h3 class=\"mb-0\" style=\"font-size:1.8rem;color:#fa709a;\">
                      ";
        // line 511
        yield ((((isset($context["recentSuivi"]) || array_key_exists("recentSuivi", $context) ? $context["recentSuivi"] : (function () { throw new RuntimeError('Variable "recentSuivi" does not exist.', 511, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["recentSuivi"]) || array_key_exists("recentSuivi", $context) ? $context["recentSuivi"] : (function () { throw new RuntimeError('Variable "recentSuivi" does not exist.', 511, $this->source); })()), "dateSaisie", [], "any", false, false, false, 511))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recentSuivi"]) || array_key_exists("recentSuivi", $context) ? $context["recentSuivi"] : (function () { throw new RuntimeError('Variable "recentSuivi" does not exist.', 511, $this->source); })()), "dateSaisie", [], "any", false, false, false, 511), "d/m"), "html", null, true)) : ("—"));
        yield "
                    </h3>
                    <p class=\"mb-0 text-muted\">Dernier suivi</p>
                  </div>
                  <div class=\"text-warning\" style=\"font-size:2.5rem;\">
                    <i class=\"mdi mdi-calendar-check\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
            <div class=\"card\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                  <div>
                    ";
        // line 528
        $context["goodMoods"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 528, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 528, $this->source); })()), "humeur", [], "any", false, false, false, 528), ["Bonne", "Excellente"]); }));
        // line 529
        yield "
                    <h3 class=\"mb-0\" style=\"font-size:1.8rem;color:#4facfe;\">";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goodMoods"]) || array_key_exists("goodMoods", $context) ? $context["goodMoods"] : (function () { throw new RuntimeError('Variable "goodMoods" does not exist.', 530, $this->source); })()), "html", null, true);
        yield "</h3>
                    <p class=\"mb-0 text-muted\">Humeurs positives</p>
                  </div>
                  <div class=\"text-info\" style=\"font-size:2.5rem;\">
                    <i class=\"mdi mdi-emoticon-happy\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Table -->
        <div class=\"row\">
          <div class=\"col-12 grid-margin\">
            <div class=\"card\">
              <div class=\"card-body\">
                <h4 class=\"card-title mb-3\">
                  <i class=\"mdi mdi-format-list-bulleted me-2\"></i>
                  Liste des suivis (";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 549, $this->source); })())), "html", null, true);
        yield ")
                </h4>
<div class=\"d-flex gap-2 flex-wrap align-items-center mb-3\">
  <div class=\"search-box\">
    <input type=\"text\" class=\"form-control\" id=\"tableSearchInput\" placeholder=\"Rechercher dans les suivis...\">
  </div>

  <select id=\"humeurFilter\" class=\"form-control\" style=\"max-width:200px;border-radius:10px;\">
  <option value=\"\">Toutes les humeurs</option>
  <option value=\"Très mauvaise\">Très mauvaise</option>
  <option value=\"Mauvaise\">Mauvaise</option>
  <option value=\"Neutre\">Neutre</option>
  <option value=\"Bonne\">Bonne</option>
  <option value=\"Excellente\">Excellente</option>
</select>
  <select id=\"sortBy\" class=\"form-control\" style=\"max-width:170px;border-radius:10px;\">
    <option value=\"date\">Trier par date</option>
    <option value=\"score\">Trier par score</option>
  </select>

  <select id=\"sortDir\" class=\"form-control\" style=\"max-width:170px;border-radius:10px;\">
    <option value=\"DESC\">DESC</option>
    <option value=\"ASC\">ASC</option>
  </select>

 <a href=\"";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivi_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 574, $this->source); })()), "id", [], "any", false, false, false, 574)]), "html", null, true);
        yield "\"
   class=\"btn btn-light btn-white\">
   <i class=\"mdi mdi-plus-circle\"></i>
   Nouveau suivi
</a>

  <a href=\"";
        // line 580
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_sante_index");
        yield "\"
   class=\"btn btn-light btn-white\">
   <i class=\"mdi mdi-arrow-left\"></i>
   Retour
</a>
</div>

                ";
        // line 587
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 587, $this->source); })()))) {
            // line 588
            yield "                  <div class=\"empty-state\">
                    <i class=\"mdi mdi-chart-line\"></i>
                    <h4 class=\"text-muted mt-3\">Aucun suivi pour cet objectif</h4>
                    <p class=\"text-muted mb-4\">Ajoutez votre premier suivi pour commencer le suivi de votre bien-être.</p>
                   <a href=\"";
            // line 592
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivi_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 592, $this->source); })()), "id", [], "any", false, false, false, 592)]), "html", null, true);
            yield "\"
   class=\"btn btn-light btn-icon-text\"
   style=\"border-radius:10px; border:1px solid #dee2e6; font-weight:600;\">
   <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
   Nouveau suivi
</a>
                  </div>
                ";
        } else {
            // line 600
            yield "                  <div class=\"table-responsive\">
                    <table class=\"table table-hover\" id=\"suivisTable\">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Humeur</th>
                          <th>Sommeil</th>
                          <th>Énergie</th>
                          <th>Stress</th>
                          <th>Alimentation</th>
                          <th>Notes</th>
                          <th>Score</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id=\"suivisTbody\">
  ";
            // line 616
            yield Twig\Extension\CoreExtension::include($this->env, $context, "suivi_bien_etre/_rows.html.twig", ["objectif" => (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 616, $this->source); })()), "suivis" => (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 616, $this->source); })())]);
            yield "
</tbody>

                    </table>
                  </div>
                ";
        }
        // line 622
        yield "              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <footer class=\"footer\">
          <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
            <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
              © ";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
            </span>
            <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
              <i class=\"mdi mdi-chart-line text-info\"></i>
              Objectif: ";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 635, $this->source); })()), "titre", [], "any", false, false, false, 635), 0, 30), "html", null, true);
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 635, $this->source); })()), "titre", [], "any", false, false, false, 635)) > 30)) ? ("...") : (""));
        yield " |
              Suivis: ";
        // line 636
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 636, $this->source); })())), "html", null, true);
        yield "
            </span>
          </div>
        </footer>

      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src=\"";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const tbody = document.getElementById('suivisTbody');

  const humeurEl = document.getElementById('humeurFilter');
  const sortByEl = document.getElementById('sortBy');
  const sortDirEl = document.getElementById('sortDir');

  const tableSearchEl = document.getElementById('tableSearchInput');
  const navSearchEl = document.getElementById('navSearchInput');

  // Route AJAX (Symfony path)
  const filterUrlBase = \"";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_suivis_filter", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 663, $this->source); })()), "id", [], "any", false, false, false, 663)]), "html", null, true);
        yield "\";

  let debounceTimer = null;

  function buildUrl() {
    const params = new URLSearchParams();

    // humeur
    if (humeurEl && humeurEl.value) params.set('humeur', humeurEl.value);

    // sorting
    if (sortByEl) params.set('sortBy', sortByEl.value || 'date');
    if (sortDirEl) params.set('sortDir', sortDirEl.value || 'DESC');

    // search: خذ القيمة من tableSearchInput (وإذا خاوي خد navSearchInput)
    const q = (tableSearchEl && tableSearchEl.value.trim())
      ? tableSearchEl.value.trim()
      : (navSearchEl ? navSearchEl.value.trim() : '');

    if (q) params.set('q', q);

    return `\${filterUrlBase}?\${params.toString()}`;
  }

  async function loadRows() {
    if (!tbody) return;

    const url = buildUrl();

    try {
      tbody.style.opacity = '0.6';

      const res = await fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } });
      const html = await res.text();

      tbody.innerHTML = html;
      tbody.style.opacity = '1';

      // تحديث العنوان (عدد النتائج)
      const count = tbody.querySelectorAll('tr').length;
      const header = document.querySelector('.card-title');
      if (header) {
        // إذا كاين \"Aucun résultat\" راه row واحدة، ولكن فيها colspan
        const hasNoResult = tbody.textContent.toLowerCase().includes('aucun résultat');
        const realCount = hasNoResult ? 0 : count;

        header.innerHTML = `<i class=\"mdi mdi-format-list-bulleted me-2\"></i> Liste des suivis (\${realCount})`;
      }

    } catch (e) {
      tbody.style.opacity = '1';
      console.error(e);
    }
  }

  function debouncedLoad() {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(loadRows, 250);
  }

  // events: filters
  if (humeurEl) humeurEl.addEventListener('change', loadRows);
  if (sortByEl) sortByEl.addEventListener('change', loadRows);
  if (sortDirEl) sortDirEl.addEventListener('change', loadRows);

  // events: search
  if (tableSearchEl) tableSearchEl.addEventListener('input', debouncedLoad);
  if (navSearchEl) navSearchEl.addEventListener('input', debouncedLoad);
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
        return "suivi_bien_etre/by_objectif.html.twig";
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
        return array (  1031 => 663,  1014 => 649,  1010 => 648,  1006 => 647,  992 => 636,  987 => 635,  980 => 631,  969 => 622,  960 => 616,  942 => 600,  931 => 592,  925 => 588,  923 => 587,  913 => 580,  904 => 574,  876 => 549,  854 => 530,  851 => 529,  849 => 528,  829 => 511,  826 => 510,  824 => 509,  804 => 493,  802 => 492,  783 => 476,  757 => 454,  753 => 453,  745 => 448,  735 => 441,  731 => 439,  725 => 436,  721 => 434,  719 => 433,  714 => 431,  707 => 427,  690 => 412,  684 => 411,  674 => 407,  670 => 406,  665 => 405,  660 => 404,  655 => 403,  636 => 386,  633 => 385,  622 => 377,  612 => 371,  610 => 370,  604 => 366,  599 => 363,  595 => 361,  591 => 359,  587 => 357,  585 => 356,  580 => 354,  573 => 353,  571 => 352,  563 => 346,  556 => 343,  550 => 339,  546 => 337,  542 => 335,  540 => 334,  533 => 332,  530 => 331,  523 => 328,  520 => 327,  512 => 325,  510 => 324,  507 => 323,  505 => 322,  460 => 280,  443 => 266,  418 => 244,  373 => 202,  356 => 187,  351 => 184,  347 => 182,  343 => 180,  339 => 178,  337 => 177,  332 => 175,  325 => 174,  323 => 173,  317 => 169,  311 => 167,  308 => 166,  301 => 163,  298 => 162,  290 => 160,  287 => 159,  285 => 158,  273 => 149,  269 => 148,  264 => 146,  260 => 145,  132 => 20,  128 => 19,  123 => 17,  119 => 16,  115 => 15,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Suivis - {{ objectif.titre }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>ESPRIT - Suivis Bien-être</title>

  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
  <!-- Layout styles -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
  <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.png') }}\" />

  <style>
    :root{
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
      --danger-gradient: linear-gradient(135deg, #f5576c 0%, #f093fb 100%);
      --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
      --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      --health-gradient: linear-gradient(135deg, #fa8bff 0%, #2bd2ff 90%, #2bff88 100%);
      --card-shadow: 0 4px 20px rgba(0,0,0,.08);
      --card-shadow-hover: 0 8px 30px rgba(0,0,0,.12);
    }

    .card{border:none;border-radius:15px;box-shadow:var(--card-shadow);transition:.3s;}
    .card:hover{box-shadow:var(--card-shadow-hover);}

    .page-header{
      background:#fff;border-radius:15px;padding:2rem;box-shadow:var(--card-shadow);margin-bottom:2rem;
    }
    .page-title-icon{
      width:50px;height:50px;border-radius:12px;display:flex;align-items:center;justify-content:center;
    }

    .search-box{max-width:320px;}
    .search-box input{border-radius:10px;border:2px solid #e9ecef;transition:.3s;}
    .search-box input:focus{border-color:#667eea;box-shadow:0 0 0 .2rem rgba(102,126,234,.15);}

    .table-hover tbody tr{transition:.3s;}
    .table-hover tbody tr:hover{background-color:rgba(102,126,234,.05);transform:scale(1.01);}
    .table thead th{
      background:linear-gradient(135deg,#f8f9fa 0%,#e9ecef 100%);
      color:#495057;font-weight:600;text-transform:uppercase;font-size:.85rem;letter-spacing:.5px;border:none;padding:1rem;
    }
    .table td{vertical-align:middle;padding:1rem;border-bottom:1px solid #f1f3f5;}
    .action-buttons{display:flex;gap:6px;flex-wrap:wrap;}
    .action-buttons .btn{padding:6px 12px;border-radius:8px;transition:.3s;}
    .action-buttons .btn:hover{transform:translateY(-2px);}

    .badge-pill{
      display:inline-flex;align-items:center;gap:6px;
      padding:6px 12px;border-radius:999px;font-weight:600;font-size:.8rem;border:none;color:#fff;
    }
    
    .badge-score-excellent { background: var(--success-gradient); }
    .badge-score-good { background: var(--info-gradient); }
    .badge-score-medium { background: var(--warning-gradient); }
    .badge-score-poor { background: var(--danger-gradient); }

    .mood-badge {
      display:inline-flex;align-items:center;gap:5px;
      padding:5px 10px;border-radius:20px;font-size:.85rem;font-weight:600;
    }
    .mood-tres-mauvaise { background:#ffeaea; color:#dc3545; }
.mood-mauvaise      { background:#fff3cd; color:#856404; }
.mood-neutre        { background:#e9ecef; color:#495057; }
.mood-bonne         { background:#d4edda; color:#155724; }
.mood-excellente    { background:#d1ecf1; color:#0c5460; }


    .rating-badge {
      display:inline-flex;align-items:center;justify-content:center;
      width:32px;height:32px;border-radius:50%;font-weight:bold;font-size:.85rem;
      background:linear-gradient(135deg,#f8f9fa 0%,#e9ecef 100%);color:#495057;
    }
    .rating-0-3 { background:#ffeaea; color:#dc3545; }
    .rating-4-6 { background:#fff3cd; color:#856404; }
    .rating-7-8 { background:#d1ecf1; color:#0c5460; }
    .rating-9-10 { background:#d4edda; color:#155724; }

    .mini-info{
      display:flex;gap:10px;flex-wrap:wrap;margin-top:.75rem;
    }
    .mini-info .chip{
      background:linear-gradient(135deg,#f8f9fa 0%,#e9ecef 100%);
      border-radius:12px;padding:8px 12px;font-weight:600;color:#495057;font-size:.85rem;
    }

    .progress-small {
      height:6px;border-radius:3px;background:#e9ecef;overflow:hidden;
      width:60px;display:inline-block;vertical-align:middle;margin-right:8px;
    }
    .progress-small .progress-bar {
      border-radius:3px;background:var(--health-gradient);
    }

    /* Avatar / sidebar helpers (same as objectif) */
    .user-avatar{width:40px;height:40px;border-radius:50%;background:var(--primary-gradient);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;font-size:16px;flex-shrink:0;}
    .user-avatar-img{width:40px;height:40px;border-radius:50%;object-fit:cover;border:2px solid #fff;box-shadow:0 2px 5px rgba(0,0,0,.1);}
    .profile-avatar{width:50px;height:50px;border-radius:50%;background:var(--primary-gradient);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;font-size:20px;margin-right:15px;flex-shrink:0;}
    .profile-avatar-img{width:50px;height:50px;border-radius:50%;object-fit:cover;border:3px solid #fff;box-shadow:0 3px 10px rgba(0,0,0,.15);}
    .badge-etudiant{background:var(--info-gradient);color:#fff;border:none;}
    .badge-admin{background:var(--primary-gradient);color:#fff;border:none;}
    .user-role-badge{font-size:.75rem;padding:3px 10px;border-radius:10px;margin-top:5px;display:inline-block;}
    .avatar-container{display:flex;align-items:center;gap:12px;}
    .navbar-profile{display:flex;align-items:center;padding:5px 0;}
    .profile-pic{display:flex;align-items:center;padding:10px 0;}
    .count-indicator{position:relative;margin-right:15px;}
    .profile-name{flex-grow:1;}

    .empty-state {
      text-align:center;padding:60px 20px;
      background:linear-gradient(135deg,#f8f9fa 0%,#e9ecef 100%);
      border-radius:15px;
    }
    .empty-state i {
      font-size:80px;background:var(--health-gradient);
      -webkit-background-clip:text;-webkit-text-fill-color:transparent;
      background-clip:text;margin-bottom:20px;
    }

    @media(max-width:768px){
      .search-box{max-width:100%;margin-bottom:1rem;}
      .action-buttons{flex-direction:column;}
      .table-responsive{font-size:.9rem;}
    }
  </style>
</head>

<body>
<div class=\"container-scroller\">

  <!-- Sidebar (EXACT same) -->
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
                  <img src=\"{{ asset('uploads/profile_pics/' ~ app.user.profilePic) }}\" alt=\"{{ app.user.prenom }}\" class=\"profile-avatar-img\">
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

      <li class=\"nav-item nav-category\"><span class=\"nav-link\">Navigation</span></li>

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
            <a class=\"nav-link\" href=\"#\">
              <span class=\"menu-icon\"><i class=\"mdi mdi-heart-pulse\"></i></span>
              <span class=\"menu-title\">Objectifs suivis</span>
            </a>
          </li>

      <!-- Keep same active section -->
      
      <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
          <span class=\"menu-icon\"><i class=\"mdi mdi-logout text-danger\"></i></span>
          <span class=\"menu-title text-danger\">Déconnexion</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main -->
  <div class=\"container-fluid page-body-wrapper\">

    <!-- Navbar (EXACT same style) -->
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
              <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher dans les suivis...\" id=\"navSearchInput\">
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
                  <p class=\"preview-subject mb-1\">Suivi ajouté</p>
                  <p class=\"text-muted ellipsis mb-0\">Vous avez ajouté un nouveau suivi</p>
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
                      <img src=\"{{ asset('uploads/profile_pics/' ~ app.user.profilePic) }}\" alt=\"{{ app.user.prenom }}\" class=\"user-avatar-img\">
                    {% else %}
                      <div class=\"user-avatar\">
                        {{ app.user.prenom|first|upper }}{{ app.user.nom|first|upper }}
                      </div>
                    {% endif %}
                    <div class=\"text-start ms-2\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">{{ app.user.prenom }} {{ app.user.nom }}</p>
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
                    <div class=\"preview-icon bg-primary rounded-circle\"><i class=\"mdi mdi-account\"></i></div>
                  </div>
                  <div class=\"preview-item-content\"><p class=\"preview-subject mb-1\">Mon profil</p></div>
                </a>
                <a class=\"dropdown-item preview-item\" href=\"{{ path('app_user_edit', {id: app.user.id}) }}\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-warning rounded-circle\"><i class=\"mdi mdi-account-edit\"></i></div>
                  </div>
                  <div class=\"preview-item-content\"><p class=\"preview-subject mb-1\">Modifier mon profil</p></div>
                </a>
                <div class=\"dropdown-divider\"></div>
              {% endif %}

              <a class=\"dropdown-item preview-item\" href=\"{{ path('app_logout') }}\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-dark rounded-circle\"><i class=\"mdi mdi-logout text-danger\"></i></div>
                </div>
                <div class=\"preview-item-content\"><p class=\"preview-subject mb-1\">Déconnexion</p></div>
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
            <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <i class=\"mdi mdi-{{ label == 'success' ? 'check-circle' : 'alert-circle' }}\"></i>
              <span class=\"ms-2\">{{ message }}</span>
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
          {% endfor %}
        {% endfor %}

        <!-- Header -->
        <div class=\"page-header\">
          <div class=\"d-flex justify-content-between align-items-start flex-wrap gap-3\">
            <div>
              <h3 class=\"page-title mb-0 text-dark\">
                <span class=\"page-title-icon bg-gradient-primary text-dark me-2\">
                  <i class=\"mdi mdi-chart-line\"></i>
                </span>
                Suivis Bien-être
              </h3>

              <div class=\"mini-info\">
                <span class=\"chip\">
                  <i class=\"mdi mdi-target me-1\"></i> 
                  <strong>{{ objectif.titre }}</strong>
                </span>
                <span class=\"chip\">
                  <i class=\"mdi mdi-tag me-1\"></i> 
                  {{ objectif.type }}
                </span>
                {% if objectif.valeurCible %}
                  <span class=\"chip\">
                    <i class=\"mdi mdi-bullseye-arrow me-1\"></i> 
                    Cible: {{ objectif.valeurCible }}
                  </span>
                {% endif %}
                <span class=\"chip\">
                  <i class=\"mdi mdi-progress-check me-1\"></i> 
                  Score Moyen: {{ objectif.scoreMoyen ? objectif.scoreMoyen ~ '%' : '0%' }}
                </span>
              </div>

              <nav aria-label=\"breadcrumb\" class=\"mt-2\">
                <ol class=\"breadcrumb mb-0\">
                  <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('app_objectif_sante_index') }}\">
                      <i class=\"mdi mdi-heart-pulse me-1\"></i> Objectifs
                    </a>
                  </li>
                  <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('app_objectif_sante_show', {id: objectif.id}) }}\">
                      {{ objectif.titre|slice(0, 20) }}{{ objectif.titre|length > 20 ? '...' : '' }}
                    </a>
                  </li>
                  <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <i class=\"mdi mdi-chart-line me-1\"></i> Suivis
                  </li>
                </ol>
              </nav>
            </div>

           

          </div>
        </div>

        <!-- Statistics -->
        <div class=\"row mb-4\">
          <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
            <div class=\"card\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                  <div>
                    <h3 class=\"mb-0\" style=\"font-size:1.8rem;color:#667eea;\">{{ suivis|length }}</h3>
                    <p class=\"mb-0 text-muted\">Total suivis</p>
                  </div>
                  <div class=\"text-primary\" style=\"font-size:2.5rem;\">
                    <i class=\"mdi mdi-chart-line\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
            <div class=\"card\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                  <div>
                    {% set avgScore = suivis|length > 0 ? suivis|reduce((sum, s) => sum + s.score, 0) / suivis|length : 0 %}
                    <h3 class=\"mb-0\" style=\"font-size:1.8rem;color:#43e97b;\">{{ avgScore|round(1) }}%</h3>
                    <p class=\"mb-0 text-muted\">Score moyen</p>
                  </div>
                  <div class=\"text-success\" style=\"font-size:2.5rem;\">
                    <i class=\"mdi mdi-star\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
            <div class=\"card\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                  <div>
                    {% set recentSuivi = suivis|first %}
                    <h3 class=\"mb-0\" style=\"font-size:1.8rem;color:#fa709a;\">
                      {{ recentSuivi and recentSuivi.dateSaisie ? recentSuivi.dateSaisie|date('d/m') : '—' }}
                    </h3>
                    <p class=\"mb-0 text-muted\">Dernier suivi</p>
                  </div>
                  <div class=\"text-warning\" style=\"font-size:2.5rem;\">
                    <i class=\"mdi mdi-calendar-check\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
            <div class=\"card\" style=\"border-radius:12px;box-shadow:var(--card-shadow);border:none;\">
              <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                  <div>
                    {% set goodMoods = suivis|filter(s => s.humeur in ['Bonne','Excellente'])|length %}

                    <h3 class=\"mb-0\" style=\"font-size:1.8rem;color:#4facfe;\">{{ goodMoods }}</h3>
                    <p class=\"mb-0 text-muted\">Humeurs positives</p>
                  </div>
                  <div class=\"text-info\" style=\"font-size:2.5rem;\">
                    <i class=\"mdi mdi-emoticon-happy\"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Table -->
        <div class=\"row\">
          <div class=\"col-12 grid-margin\">
            <div class=\"card\">
              <div class=\"card-body\">
                <h4 class=\"card-title mb-3\">
                  <i class=\"mdi mdi-format-list-bulleted me-2\"></i>
                  Liste des suivis ({{ suivis|length }})
                </h4>
<div class=\"d-flex gap-2 flex-wrap align-items-center mb-3\">
  <div class=\"search-box\">
    <input type=\"text\" class=\"form-control\" id=\"tableSearchInput\" placeholder=\"Rechercher dans les suivis...\">
  </div>

  <select id=\"humeurFilter\" class=\"form-control\" style=\"max-width:200px;border-radius:10px;\">
  <option value=\"\">Toutes les humeurs</option>
  <option value=\"Très mauvaise\">Très mauvaise</option>
  <option value=\"Mauvaise\">Mauvaise</option>
  <option value=\"Neutre\">Neutre</option>
  <option value=\"Bonne\">Bonne</option>
  <option value=\"Excellente\">Excellente</option>
</select>
  <select id=\"sortBy\" class=\"form-control\" style=\"max-width:170px;border-radius:10px;\">
    <option value=\"date\">Trier par date</option>
    <option value=\"score\">Trier par score</option>
  </select>

  <select id=\"sortDir\" class=\"form-control\" style=\"max-width:170px;border-radius:10px;\">
    <option value=\"DESC\">DESC</option>
    <option value=\"ASC\">ASC</option>
  </select>

 <a href=\"{{ path('app_objectif_suivi_new', {id: objectif.id}) }}\"
   class=\"btn btn-light btn-white\">
   <i class=\"mdi mdi-plus-circle\"></i>
   Nouveau suivi
</a>

  <a href=\"{{ path('app_objectif_sante_index') }}\"
   class=\"btn btn-light btn-white\">
   <i class=\"mdi mdi-arrow-left\"></i>
   Retour
</a>
</div>

                {% if suivis is empty %}
                  <div class=\"empty-state\">
                    <i class=\"mdi mdi-chart-line\"></i>
                    <h4 class=\"text-muted mt-3\">Aucun suivi pour cet objectif</h4>
                    <p class=\"text-muted mb-4\">Ajoutez votre premier suivi pour commencer le suivi de votre bien-être.</p>
                   <a href=\"{{ path('app_objectif_suivi_new', {id: objectif.id}) }}\"
   class=\"btn btn-light btn-icon-text\"
   style=\"border-radius:10px; border:1px solid #dee2e6; font-weight:600;\">
   <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
   Nouveau suivi
</a>
                  </div>
                {% else %}
                  <div class=\"table-responsive\">
                    <table class=\"table table-hover\" id=\"suivisTable\">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Humeur</th>
                          <th>Sommeil</th>
                          <th>Énergie</th>
                          <th>Stress</th>
                          <th>Alimentation</th>
                          <th>Notes</th>
                          <th>Score</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id=\"suivisTbody\">
  {{ include('suivi_bien_etre/_rows.html.twig', { objectif: objectif, suivis: suivis }) }}
</tbody>

                    </table>
                  </div>
                {% endif %}
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
              <i class=\"mdi mdi-chart-line text-info\"></i>
              Objectif: {{ objectif.titre|slice(0, 30) }}{{ objectif.titre|length > 30 ? '...' : '' }} |
              Suivis: {{ suivis|length }}
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
document.addEventListener('DOMContentLoaded', () => {
  const tbody = document.getElementById('suivisTbody');

  const humeurEl = document.getElementById('humeurFilter');
  const sortByEl = document.getElementById('sortBy');
  const sortDirEl = document.getElementById('sortDir');

  const tableSearchEl = document.getElementById('tableSearchInput');
  const navSearchEl = document.getElementById('navSearchInput');

  // Route AJAX (Symfony path)
  const filterUrlBase = \"{{ path('app_objectif_suivis_filter', {id: objectif.id}) }}\";

  let debounceTimer = null;

  function buildUrl() {
    const params = new URLSearchParams();

    // humeur
    if (humeurEl && humeurEl.value) params.set('humeur', humeurEl.value);

    // sorting
    if (sortByEl) params.set('sortBy', sortByEl.value || 'date');
    if (sortDirEl) params.set('sortDir', sortDirEl.value || 'DESC');

    // search: خذ القيمة من tableSearchInput (وإذا خاوي خد navSearchInput)
    const q = (tableSearchEl && tableSearchEl.value.trim())
      ? tableSearchEl.value.trim()
      : (navSearchEl ? navSearchEl.value.trim() : '');

    if (q) params.set('q', q);

    return `\${filterUrlBase}?\${params.toString()}`;
  }

  async function loadRows() {
    if (!tbody) return;

    const url = buildUrl();

    try {
      tbody.style.opacity = '0.6';

      const res = await fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } });
      const html = await res.text();

      tbody.innerHTML = html;
      tbody.style.opacity = '1';

      // تحديث العنوان (عدد النتائج)
      const count = tbody.querySelectorAll('tr').length;
      const header = document.querySelector('.card-title');
      if (header) {
        // إذا كاين \"Aucun résultat\" راه row واحدة، ولكن فيها colspan
        const hasNoResult = tbody.textContent.toLowerCase().includes('aucun résultat');
        const realCount = hasNoResult ? 0 : count;

        header.innerHTML = `<i class=\"mdi mdi-format-list-bulleted me-2\"></i> Liste des suivis (\${realCount})`;
      }

    } catch (e) {
      tbody.style.opacity = '1';
      console.error(e);
    }
  }

  function debouncedLoad() {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(loadRows, 250);
  }

  // events: filters
  if (humeurEl) humeurEl.addEventListener('change', loadRows);
  if (sortByEl) sortByEl.addEventListener('change', loadRows);
  if (sortDirEl) sortDirEl.addEventListener('change', loadRows);

  // events: search
  if (tableSearchEl) tableSearchEl.addEventListener('input', debouncedLoad);
  if (navSearchEl) navSearchEl.addEventListener('input', debouncedLoad);
});
</script>


</body>
</html>
{% endblock %}", "suivi_bien_etre/by_objectif.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\suivi_bien_etre\\by_objectif.html.twig");
    }
}
