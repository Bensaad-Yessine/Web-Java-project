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

/* matiere_classe/index.html.twig */
class __TwigTemplate_e78cf680b4aa929db94d2eeae219f352 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Gestion Matières-Classes - ESPRIT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
<link rel=\"shortcut icon\" href=\"";
        // line 11
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
      
      .matiere-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
      }
      
      .badge-coefficient {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      .badge-charge {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
      }
      
      .badge-complexite {
        background: linear-gradient(135deg, #ffa502 0%, #ffb81c 100%);
        color: white;
      }

      .complexity-bar {
        height: 6px;
        background: #e9ecef;
        border-radius: 3px;
        margin-top: 6px;
        overflow: hidden;
        width: 100px;
      }

      .complexity-fill {
        height: 100%;
        border-radius: 3px;
        background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%);
      }
      
      .action-buttons .btn {
        padding: 5px 10px;
        margin: 0 2px;
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
      
      .matiere-avatar {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
      }
      
      /* Profile styles */
      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    
    .badge-coefficient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    .badge-charge {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
    }
    
    .badge-complexite {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
    }
    
    .badge-classe {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
                <img src=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
            </a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\">
                <img src=\"";
        // line 189
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
        // line 197
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "user", [], "any", false, false, false, 198), "profilePic", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 199
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "user", [], "any", false, false, false, 199), "profilePic", [], "any", false, false, false, 199))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "prenom", [], "any", false, false, false, 200), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 203
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "user", [], "any", false, false, false, 204), "prenom", [], "any", false, false, false, 204))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "user", [], "any", false, false, false, 204), "nom", [], "any", false, false, false, 204))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 207
            yield "                  ";
        } else {
            // line 208
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 210
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 213
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 214
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "prenom", [], "any", false, false, false, 214), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "nom", [], "any", false, false, false, 214), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "user", [], "any", false, false, false, 215), "email", [], "any", false, false, false, 215), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 217
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "roles", [], "any", false, false, false, 217))) {
                // line 218
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 220
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 222
            yield "                    </div>
                  ";
        } else {
            // line 224
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 227
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
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-group\"></i>
              </span>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          
          <!-- Matières -->
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 257
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
        // line 267
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
        // line 277
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
            <a class=\"nav-link\" href=\"";
        // line 307
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
        // line 337
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
        // line 352
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une matière...\" id=\"navbarSearchInput\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\">1</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-info rounded-circle\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvelle matière</p>
                      <p class=\"text-muted ellipsis mb-0\">Action récente</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 391
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "user", [], "any", false, false, false, 391)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 392
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 393
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "user", [], "any", false, false, false, 393), "profilePic", [], "any", false, false, false, 393)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 394
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 394, $this->source); })()), "user", [], "any", false, false, false, 394), "profilePic", [], "any", false, false, false, 394))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 395, $this->source); })()), "user", [], "any", false, false, false, 395), "prenom", [], "any", false, false, false, 395), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 398
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "user", [], "any", false, false, false, 399), "prenom", [], "any", false, false, false, 399))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "user", [], "any", false, false, false, 399), "nom", [], "any", false, false, false, 399))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 402
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 404, $this->source); })()), "user", [], "any", false, false, false, 404), "prenom", [], "any", false, false, false, 404), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 404, $this->source); })()), "user", [], "any", false, false, false, 404), "nom", [], "any", false, false, false, 404), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 407
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 407, $this->source); })()), "user", [], "any", false, false, false, 407), "roles", [], "any", false, false, false, 407))) {
                // line 408
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 410
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 412
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 416
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 419
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 424
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 425
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 425, $this->source); })()), "user", [], "any", false, false, false, 425), "prenom", [], "any", false, false, false, 425), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 425, $this->source); })()), "user", [], "any", false, false, false, 425), "nom", [], "any", false, false, false, 425), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 426, $this->source); })()), "user", [], "any", false, false, false, 426), "email", [], "any", false, false, false, 426), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 428
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "user", [], "any", false, false, false, 428), "roles", [], "any", false, false, false, 428))) {
                // line 429
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 431
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 433
            yield "                      </small>
                    ";
        } else {
            // line 435
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 438
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 440
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 440, $this->source); })()), "user", [], "any", false, false, false, 440)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 441
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 441, $this->source); })()), "user", [], "any", false, false, false, 441), "id", [], "any", false, false, false, 441)]), "html", null, true);
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
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 451, $this->source); })()), "user", [], "any", false, false, false, 451), "id", [], "any", false, false, false, 451)]), "html", null, true);
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
        // line 463
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
        // line 483
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 483, $this->source); })()), "flashes", [], "any", false, false, false, 483));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 484
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 485
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 486
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 487
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 491
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 492
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span> 
                    Gestion des Matières
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste des matières ESPRIT
                      </li>
                    </ul>
                  </nav>
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
                          <h3 class=\"mb-0 stat-count\">";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 522, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">Total</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-book-open-page-variant\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Matières Enseignées</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 542, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 542, $this->source); })()), "coefficient", [], "any", false, false, false, 542) > 2.0); })), "html", null, true);
        yield "</h3>
                          <p class=\"text-danger ms-2 mb-0 font-weight-medium\">Importantes</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-weight\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Coef > 2</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">";
        // line 562
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 562, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::reduce($this->env, (isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 562, $this->source); })()), function ($__sum__, $__m__) use ($context, $macros) { $context["sum"] = $__sum__; $context["m"] = $__m__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 562, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 562, $this->source); })()), "scorecomplexite", [], "any", false, false, false, 562)); }, 0) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 562, $this->source); })()))), 1), "html", null, true)) : (0));
        yield "</h3>
                          <p class=\"text-warning ms-2 mb-0 font-weight-medium\">Moyenne</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-chart-line\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Complexité Global</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 582, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 582, $this->source); })()), "chargehoraire", [], "any", false, false, false, 582) > 30); })), "html", null, true);
        yield "</h3>
                          <p class=\"text-info ms-2 mb-0 font-weight-medium\">Intensives</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-clock-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Charge > 30h</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Matieres Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">📖 Liste des Matières</h4>
                      <a href=\"";
        // line 605
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_new");
        yield "\" class=\"btn btn-gradient-primary btn-icon-text\">
                        <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                        Nouvelle Matière
                      </a>
                    </div>

                    <!-- Filters Panel -->
                    <div class=\"card mb-3\" style=\"background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: none; border-radius: 10px;\">
                      <div class=\"card-body\">
                        <h4 class=\"card-title mb-4 text-primary\"><i class=\"mdi mdi-filter-variant me-2\"></i>Filtrer et Rechercher</h4>
                        <div class=\"row g-3\">
                          <div class=\"col-md-4\">
                            <label class=\"fw-bold mb-1\">Recherche</label>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-lg border-primary\" placeholder=\"🔍 Nom, description...\" value=\"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 618, $this->source); })()), "html", null, true);
        yield "\" style=\"border-width: 2px;\">
                          </div>
                          <div class=\"col-md-4\">
                            <label class=\"fw-bold mb-1\">Complexité Max: <span id=\"scoreLabel\" class=\"text-primary fw-bold\" style=\"font-size: 1.1em;\">";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minScore"]) || array_key_exists("minScore", $context) ? $context["minScore"] : (function () { throw new RuntimeError('Variable "minScore" does not exist.', 621, $this->source); })()), "html", null, true);
        yield "</span></label>
                            <input type=\"range\" id=\"scoreMinRange\" class=\"form-range\" min=\"";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minScore"]) || array_key_exists("minScore", $context) ? $context["minScore"] : (function () { throw new RuntimeError('Variable "minScore" does not exist.', 622, $this->source); })()), "html", null, true);
        yield "\" max=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxScore"]) || array_key_exists("maxScore", $context) ? $context["maxScore"] : (function () { throw new RuntimeError('Variable "maxScore" does not exist.', 622, $this->source); })()), "html", null, true);
        yield "\" value=\"";
        yield (((($tmp = (isset($context["scoreMin"]) || array_key_exists("scoreMin", $context) ? $context["scoreMin"] : (function () { throw new RuntimeError('Variable "scoreMin" does not exist.', 622, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreMin"]) || array_key_exists("scoreMin", $context) ? $context["scoreMin"] : (function () { throw new RuntimeError('Variable "scoreMin" does not exist.', 622, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minScore"]) || array_key_exists("minScore", $context) ? $context["minScore"] : (function () { throw new RuntimeError('Variable "minScore" does not exist.', 622, $this->source); })()), "html", null, true)));
        yield "\" style=\"cursor: pointer; width: 100%; height: 10px;\">
                          </div>
                          <div class=\"col-md-4\">
                            <label class=\"fw-bold mb-1\">Trier par</label>
                            <select id=\"sortSelect\" class=\"form-control form-control-lg border-secondary\" style=\"cursor: pointer;\">
                              <option value=\"id-asc\" ";
        // line 627
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 627, $this->source); })()) == "id") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 627, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">ID (croissant)</option>
                              <option value=\"id-desc\" ";
        // line 628
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 628, $this->source); })()) == "id") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 628, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">ID (décroissant)</option>
                              <option value=\"nom-asc\" ";
        // line 629
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 629, $this->source); })()) == "nom") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 629, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Nom (A-Z)</option>
                              <option value=\"nom-desc\" ";
        // line 630
        if ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 630, $this->source); })()) == "nom") && ((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 630, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">Nom (Z-A)</option>
                            </select>
                          </div>
                        </div>
                        <div class=\"row mt-3\">
                          <div class=\"col-md-12 d-flex align-items-center\">
                            <button id=\"applyFilters\" class=\"btn btn-gradient-primary btn-lg text-white me-3 px-4 shadow\">
                              <i class=\"mdi mdi-filter me-2\"></i>FILTRER
                            </button>
                            <button id=\"resetFilters\" class=\"btn btn-outline-secondary btn-lg px-4\">
                              <i class=\"mdi mdi-refresh me-2\"></i>Réinitialiser
                            </button>
                            <span class=\"text-muted ms-auto\" id=\"resultCount\" style=\"font-size: 1.1em; font-weight: 500;\">
                              <i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: ";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 643, $this->source); })())), "html", null, true);
        yield "
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    ";
        // line 650
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 650, $this->source); })()))) {
            // line 651
            yield "                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-book-open-page-variant-outline\"></i>
                        <h4 class=\"text-muted\">Aucune matière trouvée</h4>
                        <p class=\"text-muted mb-4\">Commencez par créer une nouvelle matière</p>
                        <a href=\"";
            // line 655
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_new");
            yield "\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Créer la première matière
                        </a>
                      </div>
                    ";
        } else {
            // line 661
            yield "                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"matieresTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Matière</th>
                              <th>Coefficient</th>
                              <th>Charge</th>
                              <th>Complexité</th>
                              <th>Quiz</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            ";
            // line 675
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 675, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere_classe"]) {
                // line 676
                yield "                              <tr>
                                <td>
                                  <span class=\"text-muted\">#";
                // line 678
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 678), "html", null, true);
                yield "</span>
                                </td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"matiere-avatar me-3\">
                                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0 font-weight-bold\">";
                // line 686
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "nom", [], "any", false, false, false, 686), "html", null, true);
                yield "</h6>
                                      <small class=\"text-muted\">ID: ";
                // line 687
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 687), "html", null, true);
                yield "</small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <span class=\"matiere-badge badge-coefficient\">
                                    <i class=\"mdi mdi-weight me-1\"></i>";
                // line 693
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "coefficient", [], "any", false, false, false, 693), "html", null, true);
                yield "
                                  </span>
                                </td>
                                <td>
                                  <span class=\"matiere-badge badge-charge\">
                                    <i class=\"mdi mdi-clock-outline me-1\"></i>";
                // line 698
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "chargehoraire", [], "any", false, false, false, 698), "html", null, true);
                yield "h
                                  </span>
                                </td>
                                <td>
                                  <div>
                                    <span class=\"matiere-badge badge-complexite\">";
                // line 703
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 703), "html", null, true);
                yield "/10</span>
                                    <div class=\"complexity-bar\">
                                      <div class=\"complexity-fill\" style=\"width: ";
                // line 705
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 705) / 10) * 100)), "html", null, true);
                yield "%\"></div>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
                // line 711
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_quiz_matiere", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 711)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm btn-icon\" title=\"Gérer le quiz\">
                                      <i class=\"mdi mdi-help-circle-outline\"></i>
                                    </a>
                                    <a href=\"";
                // line 714
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_quiz_matiere_stats", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 714)]), "html", null, true);
                yield "\" class=\"btn btn-outline-info btn-sm btn-icon\" title=\"Voir les résultats du quiz\">
                                      <i class=\"mdi mdi-chart-bar\"></i>
                                    </a>
                                  </div>
                                </td>

                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"";
                // line 722
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 722)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\">
                                      <i class=\"mdi mdi-eye\"></i>
                                    </a>
                                    <a href=\"";
                // line 725
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 725)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\">
                                      <i class=\"mdi mdi-pencil\"></i>
                                    </a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\" 
                                            data-matiere-id=\"";
                // line 729
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 729), "html", null, true);
                yield "\" 
                                            data-matiere-name=\"";
                // line 730
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "nom", [], "any", false, false, false, 730), "html", null, true);
                yield "\" 
                                            data-csrf-token=\"";
                // line 731
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 731))), "html", null, true);
                yield "\"
                                            title=\"Supprimer\">
                                      <i class=\"mdi mdi-delete\"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['matiere_classe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 739
            yield "                          </tbody>
                        </table>
                      </div>
                    ";
        }
        // line 743
        yield "                  </div>
                </div>
              </div>
            </div>

            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Gestion des Matières - ";
        // line 755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 755, $this->source); })())), "html", null, true);
        yield " matières
                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header bg-danger text-white\">
            <h5 class=\"modal-title\"><i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression</h5>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
          </div>
          <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer <strong id=\"matiereNameDisplay\"></strong> ?</p>
            <p class=\"text-danger\"><i class=\"mdi mdi-alert me-1\"></i><small>Cette action est irréversible.</small></p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" id=\"csrfToken\" value=\"\">
              <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
            </form>
          </div>
        </div>
    </div>
</div>

    <script src=\"";
        // line 787
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 789
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const navbarSearchInput = document.getElementById('navbarSearchInput');
        const scoreMinRange = document.getElementById('scoreMinRange');
        const scoreLabel = document.getElementById('scoreLabel');
        const sortSelect = document.getElementById('sortSelect');
        const applyFiltersBtn = document.getElementById('applyFilters');
        const resetFiltersBtn = document.getElementById('resetFilters');
        const matieresTable = document.getElementById('matieresTable');
        const resultCountSpan = document.getElementById('resultCount');

        // Update score label
        if (scoreMinRange && scoreLabel) {
            scoreMinRange.addEventListener('input', function() {
                scoreLabel.textContent = this.value;
                // Live update for slider with debounce
                clearTimeout(scoreMinRange.searchTimeout);
                scoreMinRange.searchTimeout = setTimeout(applyFilters, 300);
            });
        }
        
        // Sync navbar search with filter search (debounced) and use AbortController for cancellation
        let __matiereSearchController = null;
        function scheduleApplyFromInput(value) {
          clearTimeout(window.__matiereSearchTimeout);
          window.__matiereSearchTimeout = setTimeout(() => {
            if (searchInput) searchInput.value = value;
            applyFilters();
          }, 400);
        }

        if (navbarSearchInput) {
          navbarSearchInput.addEventListener('input', function() {
            if(searchInput) {
              scheduleApplyFromInput(this.value);
            }
          });
        }

        function applyFilters() {
          const search = searchInput ? searchInput.value.trim() : '';
          const scoreMin = scoreMinRange ? scoreMinRange.value : '';
          const [sort, direction] = sortSelect ? sortSelect.value.split('-') : ['id', 'asc'];
          
          // Show loading state
          if(applyFiltersBtn) {
            const originalText = applyFiltersBtn.innerHTML;
            applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-1\"></i>Chargement...';
            applyFiltersBtn.disabled = true;
          }
          if(matieresTable) matieresTable.style.opacity = '0.5';

          const params = new URLSearchParams();
          if (search) params.append('search', search);
          if (scoreMin) params.append('scoreMin', scoreMin);
          if (sort) params.append('sort', sort);
          if (direction) params.append('direction', direction);

          console.log('Date:', new Date().toISOString());
          console.log('Filtering with params:', params.toString());

          // Cancel previous request if any
          if (window.__matiereSearchController) {
              try { window.__matiereSearchController.abort(); } catch (e) {}
          }
          window.__matiereSearchController = new AbortController();

          fetch('";
        // line 859
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_ajax_filter");
        yield "?' + params.toString(), { signal: window.__matiereSearchController.signal })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
              console.log('Data received:', data);
              if (data.success) {
                if (resultCountSpan) resultCountSpan.textContent = 'Résultats: ' + data.count;
                
                const tbody = matieresTable.querySelector('tbody');
                if (tbody) {
                    tbody.innerHTML = '';
                    if (data.count === 0) {
                        tbody.innerHTML = '<tr><td colspan=\"7\" class=\"text-center text-muted py-5\"><i class=\"mdi mdi-alert-circle-outline display-4 mb-3 d-block\"></i><h4>Aucune matière trouvée</h4><p>Essayez de modifier vos critères de recherche</p></td></tr>';

                    } else {
                        data.data.forEach(matiere => {
                        const complexityPercent = (matiere.scorecomplexite / 10 * 100).toFixed(0);
                        const row = `<tr>
                            <td><span class=\"text-muted\">#\${matiere.id}</span></td>
                            <td>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"matiere-avatar me-3\"><i class=\"mdi mdi-book-open-page-variant\"></i></div>
                                <div>
                                <h6 class=\"mb-0 fw-bold\">\${matiere.nom}</h6>
                                <small class=\"text-muted\">ID: \${matiere.id}</small>
                                </div>
                            </div>
                            </td>
                            <td><span class=\"matiere-badge badge-coefficient\"><i class=\"mdi mdi-weight me-1\"></i>\${matiere.coefficient}</span></td>
                            <td><span class=\"matiere-badge badge-charge\"><i class=\"mdi mdi-clock-outline me-1\"></i>\${matiere.chargehoraire}h</span></td>
                            <td>
                            <div>
                                <span class=\"matiere-badge badge-complexite\">\${matiere.scorecomplexite}/10</span>
                                <div class=\"complexity-bar\">
                                <div class=\"complexity-fill\" style=\"width: \${complexityPercent}%\"></div>
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class=\"btn-group\" role=\"group\">
                                <a href=\"/admin/quiz/matiere/\${matiere.id}\" class=\"btn btn-success btn-sm btn-icon\" title=\"Gérer le quiz\"><i class=\"mdi mdi-help-circle-outline\"></i></a>
                                <a href=\"/admin/quiz/matiere/\${matiere.id}/stats\" class=\"btn btn-outline-info btn-sm btn-icon\" title=\"Voir les résultats du quiz\"><i class=\"mdi mdi-chart-bar\"></i></a>
                              </div>
                            </td>
                            <td>
                            <div class=\"action-buttons\">
                                <a href=\"\${matiere.url}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\"><i class=\"mdi mdi-eye\"></i></a>
                                <a href=\"\${matiere.editUrl}\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\"><i class=\"mdi mdi-pencil\"></i></a>
                                <button class=\"btn btn-danger btn-sm btn-icon delete-btn\" data-matiere-id=\"\${matiere.id}\" data-matiere-name=\"\${matiere.nom}\" data-csrf-token=\"\${matiere.csrfToken}\" title=\"Supprimer\"><i class=\"mdi mdi-delete\"></i></button>
                            </div>
                            </td>
                        </tr>`;
                        tbody.innerHTML += row;
                        });

                        attachDeleteHandlers();
                    }
                }
              }
            })
            .catch(error => {
              if (error.name === 'AbortError') return;
              console.error('Erreur AJAX:', error);
              alert('Une erreur est survenue lors du filtrage.');
            })
            .finally(() => {
                // Restore loading state
                if(applyFiltersBtn) {
                    applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-magnify me-1\"></i>Appliquer';
                    applyFiltersBtn.disabled = false;
                }
                if(matieresTable) matieresTable.style.opacity = '1';
            });
        }

        if(applyFiltersBtn) applyFiltersBtn.addEventListener('click', applyFilters);
        
        if(searchInput) {
            searchInput.addEventListener('input', function() {
            clearTimeout(searchInput.searchTimeout);
            searchInput.searchTimeout = setTimeout(applyFilters, 300);
            });
        }
        
        if(sortSelect) sortSelect.addEventListener('change', applyFilters);

        if(resetFiltersBtn) {
            resetFiltersBtn.addEventListener('click', function() {
            window.location.href = '";
        // line 949
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "';
            });
        }

        function attachDeleteHandlers() {
          document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.onclick = function() {
              const matiereId = this.getAttribute('data-matiere-id');
              const matiereName = this.getAttribute('data-matiere-name');
              const csrfToken = this.getAttribute('data-csrf-token');
              const display = document.getElementById('matiereNameDisplay');
              if(display) display.textContent = matiereName;
              
              const form = document.getElementById('deleteForm');
              if(form) {
                  form.action = '/matiere/classe/' + matiereId;
                  const tokenInput = document.getElementById('csrfToken');
                  if(tokenInput) tokenInput.value = csrfToken;
              }
              
              const modalEl = document.getElementById('deleteModal');
              if(modalEl) new bootstrap.Modal(modalEl).show();
            };
          });
        }

        // Attach handlers initially
        attachDeleteHandlers();
        
        // Auto-close alerts
        setTimeout(() => {
          document.querySelectorAll('.alert').forEach(alert => {
            new bootstrap.Alert(alert).close();
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
        return "matiere_classe/index.html.twig";
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
        return array (  1371 => 949,  1278 => 859,  1205 => 789,  1201 => 788,  1197 => 787,  1162 => 755,  1156 => 752,  1145 => 743,  1139 => 739,  1125 => 731,  1121 => 730,  1117 => 729,  1110 => 725,  1104 => 722,  1093 => 714,  1087 => 711,  1078 => 705,  1073 => 703,  1065 => 698,  1057 => 693,  1048 => 687,  1044 => 686,  1033 => 678,  1029 => 676,  1025 => 675,  1009 => 661,  1000 => 655,  994 => 651,  992 => 650,  982 => 643,  964 => 630,  958 => 629,  952 => 628,  946 => 627,  934 => 622,  930 => 621,  924 => 618,  908 => 605,  882 => 582,  859 => 562,  836 => 542,  813 => 522,  781 => 492,  775 => 491,  765 => 487,  761 => 486,  756 => 485,  751 => 484,  746 => 483,  723 => 463,  708 => 451,  694 => 441,  692 => 440,  688 => 438,  683 => 435,  679 => 433,  675 => 431,  671 => 429,  669 => 428,  664 => 426,  657 => 425,  655 => 424,  648 => 419,  641 => 416,  635 => 412,  631 => 410,  627 => 408,  625 => 407,  617 => 404,  613 => 402,  606 => 399,  603 => 398,  597 => 395,  592 => 394,  590 => 393,  587 => 392,  585 => 391,  543 => 352,  525 => 337,  492 => 307,  459 => 277,  446 => 267,  433 => 257,  420 => 247,  398 => 227,  393 => 224,  389 => 222,  385 => 220,  381 => 218,  379 => 217,  374 => 215,  367 => 214,  365 => 213,  360 => 210,  354 => 208,  351 => 207,  344 => 204,  341 => 203,  335 => 200,  330 => 199,  327 => 198,  325 => 197,  314 => 189,  310 => 188,  305 => 186,  301 => 185,  124 => 11,  120 => 10,  116 => 9,  112 => 8,  108 => 7,  104 => 6,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Gestion Matières-Classes - ESPRIT{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
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
      
      .matiere-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
      }
      
      .badge-coefficient {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
      }
      
      .badge-charge {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
      }
      
      .badge-complexite {
        background: linear-gradient(135deg, #ffa502 0%, #ffb81c 100%);
        color: white;
      }

      .complexity-bar {
        height: 6px;
        background: #e9ecef;
        border-radius: 3px;
        margin-top: 6px;
        overflow: hidden;
        width: 100px;
      }

      .complexity-fill {
        height: 100%;
        border-radius: 3px;
        background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%);
      }
      
      .action-buttons .btn {
        padding: 5px 10px;
        margin: 0 2px;
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
      
      .matiere-avatar {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
      }
      
      /* Profile styles */
      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    
    .badge-coefficient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    .badge-charge {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
    }
    
    .badge-complexite {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
    }
    
    .badge-classe {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
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
    </style>
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"{{ path('app_matiere_classe_index') }}\">
                <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\" />
            </a>
            <a class=\"sidebar-brand brand-logo-mini\" href=\"{{ path('app_matiere_classe_index') }}\">
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
          <li class=\"nav-item menu-items active\">
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une matière...\" id=\"navbarSearchInput\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\">1</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-info rounded-circle\">
                        <i class=\"mdi mdi-book-open-page-variant\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Nouvelle matière</p>
                      <p class=\"text-muted ellipsis mb-0\">Action récente</p>
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
                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                    </span> 
                    Gestion des Matières
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste des matières ESPRIT
                      </li>
                    </ul>
                  </nav>
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
                          <h3 class=\"mb-0 stat-count\">{{ matiere_classes|length }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">Total</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-book-open-page-variant\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Matières Enseignées</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">{{ matiere_classes|filter(m => m.coefficient > 2.0)|length }}</h3>
                          <p class=\"text-danger ms-2 mb-0 font-weight-medium\">Importantes</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-weight\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Coef > 2</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">{{ matiere_classes|length > 0 ? (matiere_classes|reduce((sum, m) => sum + m.scorecomplexite, 0) / matiere_classes|length)|round(1) : 0 }}</h3>
                          <p class=\"text-warning ms-2 mb-0 font-weight-medium\">Moyenne</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-chart-line\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Complexité Global</h6>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">{{ matiere_classes|filter(m => m.chargehoraire > 30)|length }}</h3>
                          <p class=\"text-info ms-2 mb-0 font-weight-medium\">Intensives</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-clock-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Charge > 30h</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Matieres Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                      <h4 class=\"card-title\">📖 Liste des Matières</h4>
                      <a href=\"{{ path('app_matiere_classe_new') }}\" class=\"btn btn-gradient-primary btn-icon-text\">
                        <i class=\"mdi mdi-plus-circle btn-icon-prepend\"></i>
                        Nouvelle Matière
                      </a>
                    </div>

                    <!-- Filters Panel -->
                    <div class=\"card mb-3\" style=\"background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: none; border-radius: 10px;\">
                      <div class=\"card-body\">
                        <h4 class=\"card-title mb-4 text-primary\"><i class=\"mdi mdi-filter-variant me-2\"></i>Filtrer et Rechercher</h4>
                        <div class=\"row g-3\">
                          <div class=\"col-md-4\">
                            <label class=\"fw-bold mb-1\">Recherche</label>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-lg border-primary\" placeholder=\"🔍 Nom, description...\" value=\"{{ search }}\" style=\"border-width: 2px;\">
                          </div>
                          <div class=\"col-md-4\">
                            <label class=\"fw-bold mb-1\">Complexité Max: <span id=\"scoreLabel\" class=\"text-primary fw-bold\" style=\"font-size: 1.1em;\">{{ minScore }}</span></label>
                            <input type=\"range\" id=\"scoreMinRange\" class=\"form-range\" min=\"{{ minScore }}\" max=\"{{ maxScore }}\" value=\"{{ scoreMin ? scoreMin : minScore }}\" style=\"cursor: pointer; width: 100%; height: 10px;\">
                          </div>
                          <div class=\"col-md-4\">
                            <label class=\"fw-bold mb-1\">Trier par</label>
                            <select id=\"sortSelect\" class=\"form-control form-control-lg border-secondary\" style=\"cursor: pointer;\">
                              <option value=\"id-asc\" {% if sort == 'id' and direction == 'asc' %}selected{% endif %}>ID (croissant)</option>
                              <option value=\"id-desc\" {% if sort == 'id' and direction == 'desc' %}selected{% endif %}>ID (décroissant)</option>
                              <option value=\"nom-asc\" {% if sort == 'nom' and direction == 'asc' %}selected{% endif %}>Nom (A-Z)</option>
                              <option value=\"nom-desc\" {% if sort == 'nom' and direction == 'desc' %}selected{% endif %}>Nom (Z-A)</option>
                            </select>
                          </div>
                        </div>
                        <div class=\"row mt-3\">
                          <div class=\"col-md-12 d-flex align-items-center\">
                            <button id=\"applyFilters\" class=\"btn btn-gradient-primary btn-lg text-white me-3 px-4 shadow\">
                              <i class=\"mdi mdi-filter me-2\"></i>FILTRER
                            </button>
                            <button id=\"resetFilters\" class=\"btn btn-outline-secondary btn-lg px-4\">
                              <i class=\"mdi mdi-refresh me-2\"></i>Réinitialiser
                            </button>
                            <span class=\"text-muted ms-auto\" id=\"resultCount\" style=\"font-size: 1.1em; font-weight: 500;\">
                              <i class=\"mdi mdi-format-list-bulleted me-1\"></i>Résultats: {{ matiere_classes|length }}
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    {% if matiere_classes is empty %}
                      <div class=\"empty-state\">
                        <i class=\"mdi mdi-book-open-page-variant-outline\"></i>
                        <h4 class=\"text-muted\">Aucune matière trouvée</h4>
                        <p class=\"text-muted mb-4\">Commencez par créer une nouvelle matière</p>
                        <a href=\"{{ path('app_matiere_classe_new') }}\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Créer la première matière
                        </a>
                      </div>
                    {% else %}
                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"matieresTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Matière</th>
                              <th>Coefficient</th>
                              <th>Charge</th>
                              <th>Complexité</th>
                              <th>Quiz</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            {% for matiere_classe in matiere_classes %}
                              <tr>
                                <td>
                                  <span class=\"text-muted\">#{{ matiere_classe.id }}</span>
                                </td>
                                <td>
                                  <div class=\"d-flex align-items-center\">
                                    <div class=\"matiere-avatar me-3\">
                                      <i class=\"mdi mdi-book-open-page-variant\"></i>
                                    </div>
                                    <div>
                                      <h6 class=\"mb-0 font-weight-bold\">{{ matiere_classe.nom }}</h6>
                                      <small class=\"text-muted\">ID: {{ matiere_classe.id }}</small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <span class=\"matiere-badge badge-coefficient\">
                                    <i class=\"mdi mdi-weight me-1\"></i>{{ matiere_classe.coefficient }}
                                  </span>
                                </td>
                                <td>
                                  <span class=\"matiere-badge badge-charge\">
                                    <i class=\"mdi mdi-clock-outline me-1\"></i>{{ matiere_classe.chargehoraire }}h
                                  </span>
                                </td>
                                <td>
                                  <div>
                                    <span class=\"matiere-badge badge-complexite\">{{ matiere_classe.scorecomplexite }}/10</span>
                                    <div class=\"complexity-bar\">
                                      <div class=\"complexity-fill\" style=\"width: {{ (matiere_classe.scorecomplexite / 10 * 100)|round }}%\"></div>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class=\"btn-group\" role=\"group\">
                                    <a href=\"{{ path('app_admin_quiz_matiere', {id: matiere_classe.id}) }}\" class=\"btn btn-success btn-sm btn-icon\" title=\"Gérer le quiz\">
                                      <i class=\"mdi mdi-help-circle-outline\"></i>
                                    </a>
                                    <a href=\"{{ path('app_admin_quiz_matiere_stats', {id: matiere_classe.id}) }}\" class=\"btn btn-outline-info btn-sm btn-icon\" title=\"Voir les résultats du quiz\">
                                      <i class=\"mdi mdi-chart-bar\"></i>
                                    </a>
                                  </div>
                                </td>

                                <td>
                                  <div class=\"action-buttons\">
                                    <a href=\"{{ path('app_matiere_classe_show', {'id': matiere_classe.id}) }}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\">
                                      <i class=\"mdi mdi-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_matiere_classe_edit', {'id': matiere_classe.id}) }}\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\">
                                      <i class=\"mdi mdi-pencil\"></i>
                                    </a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm btn-icon delete-btn\" 
                                            data-matiere-id=\"{{ matiere_classe.id }}\" 
                                            data-matiere-name=\"{{ matiere_classe.nom }}\" 
                                            data-csrf-token=\"{{ csrf_token('delete' ~ matiere_classe.id) }}\"
                                            title=\"Supprimer\">
                                      <i class=\"mdi mdi-delete\"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            {% endfor %}
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
                  Gestion des Matières - {{ matiere_classes|length }} matières
                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header bg-danger text-white\">
            <h5 class=\"modal-title\"><i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression</h5>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
          </div>
          <div class=\"modal-body\">
            <p>Êtes-vous sûr de vouloir supprimer <strong id=\"matiereNameDisplay\"></strong> ?</p>
            <p class=\"text-danger\"><i class=\"mdi mdi-alert me-1\"></i><small>Cette action est irréversible.</small></p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            <form id=\"deleteForm\" method=\"POST\" style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" id=\"csrfToken\" value=\"\">
              <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
            </form>
          </div>
        </div>
    </div>
</div>

    <script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('assets/js/misc.js') }}\"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const navbarSearchInput = document.getElementById('navbarSearchInput');
        const scoreMinRange = document.getElementById('scoreMinRange');
        const scoreLabel = document.getElementById('scoreLabel');
        const sortSelect = document.getElementById('sortSelect');
        const applyFiltersBtn = document.getElementById('applyFilters');
        const resetFiltersBtn = document.getElementById('resetFilters');
        const matieresTable = document.getElementById('matieresTable');
        const resultCountSpan = document.getElementById('resultCount');

        // Update score label
        if (scoreMinRange && scoreLabel) {
            scoreMinRange.addEventListener('input', function() {
                scoreLabel.textContent = this.value;
                // Live update for slider with debounce
                clearTimeout(scoreMinRange.searchTimeout);
                scoreMinRange.searchTimeout = setTimeout(applyFilters, 300);
            });
        }
        
        // Sync navbar search with filter search (debounced) and use AbortController for cancellation
        let __matiereSearchController = null;
        function scheduleApplyFromInput(value) {
          clearTimeout(window.__matiereSearchTimeout);
          window.__matiereSearchTimeout = setTimeout(() => {
            if (searchInput) searchInput.value = value;
            applyFilters();
          }, 400);
        }

        if (navbarSearchInput) {
          navbarSearchInput.addEventListener('input', function() {
            if(searchInput) {
              scheduleApplyFromInput(this.value);
            }
          });
        }

        function applyFilters() {
          const search = searchInput ? searchInput.value.trim() : '';
          const scoreMin = scoreMinRange ? scoreMinRange.value : '';
          const [sort, direction] = sortSelect ? sortSelect.value.split('-') : ['id', 'asc'];
          
          // Show loading state
          if(applyFiltersBtn) {
            const originalText = applyFiltersBtn.innerHTML;
            applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin me-1\"></i>Chargement...';
            applyFiltersBtn.disabled = true;
          }
          if(matieresTable) matieresTable.style.opacity = '0.5';

          const params = new URLSearchParams();
          if (search) params.append('search', search);
          if (scoreMin) params.append('scoreMin', scoreMin);
          if (sort) params.append('sort', sort);
          if (direction) params.append('direction', direction);

          console.log('Date:', new Date().toISOString());
          console.log('Filtering with params:', params.toString());

          // Cancel previous request if any
          if (window.__matiereSearchController) {
              try { window.__matiereSearchController.abort(); } catch (e) {}
          }
          window.__matiereSearchController = new AbortController();

          fetch('{{ path(\"app_matiere_classe_ajax_filter\") }}?' + params.toString(), { signal: window.__matiereSearchController.signal })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
              console.log('Data received:', data);
              if (data.success) {
                if (resultCountSpan) resultCountSpan.textContent = 'Résultats: ' + data.count;
                
                const tbody = matieresTable.querySelector('tbody');
                if (tbody) {
                    tbody.innerHTML = '';
                    if (data.count === 0) {
                        tbody.innerHTML = '<tr><td colspan=\"7\" class=\"text-center text-muted py-5\"><i class=\"mdi mdi-alert-circle-outline display-4 mb-3 d-block\"></i><h4>Aucune matière trouvée</h4><p>Essayez de modifier vos critères de recherche</p></td></tr>';

                    } else {
                        data.data.forEach(matiere => {
                        const complexityPercent = (matiere.scorecomplexite / 10 * 100).toFixed(0);
                        const row = `<tr>
                            <td><span class=\"text-muted\">#\${matiere.id}</span></td>
                            <td>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"matiere-avatar me-3\"><i class=\"mdi mdi-book-open-page-variant\"></i></div>
                                <div>
                                <h6 class=\"mb-0 fw-bold\">\${matiere.nom}</h6>
                                <small class=\"text-muted\">ID: \${matiere.id}</small>
                                </div>
                            </div>
                            </td>
                            <td><span class=\"matiere-badge badge-coefficient\"><i class=\"mdi mdi-weight me-1\"></i>\${matiere.coefficient}</span></td>
                            <td><span class=\"matiere-badge badge-charge\"><i class=\"mdi mdi-clock-outline me-1\"></i>\${matiere.chargehoraire}h</span></td>
                            <td>
                            <div>
                                <span class=\"matiere-badge badge-complexite\">\${matiere.scorecomplexite}/10</span>
                                <div class=\"complexity-bar\">
                                <div class=\"complexity-fill\" style=\"width: \${complexityPercent}%\"></div>
                                </div>
                            </div>
                            </td>
                            <td>
                              <div class=\"btn-group\" role=\"group\">
                                <a href=\"/admin/quiz/matiere/\${matiere.id}\" class=\"btn btn-success btn-sm btn-icon\" title=\"Gérer le quiz\"><i class=\"mdi mdi-help-circle-outline\"></i></a>
                                <a href=\"/admin/quiz/matiere/\${matiere.id}/stats\" class=\"btn btn-outline-info btn-sm btn-icon\" title=\"Voir les résultats du quiz\"><i class=\"mdi mdi-chart-bar\"></i></a>
                              </div>
                            </td>
                            <td>
                            <div class=\"action-buttons\">
                                <a href=\"\${matiere.url}\" class=\"btn btn-info btn-sm btn-icon\" title=\"Voir\"><i class=\"mdi mdi-eye\"></i></a>
                                <a href=\"\${matiere.editUrl}\" class=\"btn btn-warning btn-sm btn-icon\" title=\"Modifier\"><i class=\"mdi mdi-pencil\"></i></a>
                                <button class=\"btn btn-danger btn-sm btn-icon delete-btn\" data-matiere-id=\"\${matiere.id}\" data-matiere-name=\"\${matiere.nom}\" data-csrf-token=\"\${matiere.csrfToken}\" title=\"Supprimer\"><i class=\"mdi mdi-delete\"></i></button>
                            </div>
                            </td>
                        </tr>`;
                        tbody.innerHTML += row;
                        });

                        attachDeleteHandlers();
                    }
                }
              }
            })
            .catch(error => {
              if (error.name === 'AbortError') return;
              console.error('Erreur AJAX:', error);
              alert('Une erreur est survenue lors du filtrage.');
            })
            .finally(() => {
                // Restore loading state
                if(applyFiltersBtn) {
                    applyFiltersBtn.innerHTML = '<i class=\"mdi mdi-magnify me-1\"></i>Appliquer';
                    applyFiltersBtn.disabled = false;
                }
                if(matieresTable) matieresTable.style.opacity = '1';
            });
        }

        if(applyFiltersBtn) applyFiltersBtn.addEventListener('click', applyFilters);
        
        if(searchInput) {
            searchInput.addEventListener('input', function() {
            clearTimeout(searchInput.searchTimeout);
            searchInput.searchTimeout = setTimeout(applyFilters, 300);
            });
        }
        
        if(sortSelect) sortSelect.addEventListener('change', applyFilters);

        if(resetFiltersBtn) {
            resetFiltersBtn.addEventListener('click', function() {
            window.location.href = '{{ path(\"app_matiere_classe_index\") }}';
            });
        }

        function attachDeleteHandlers() {
          document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.onclick = function() {
              const matiereId = this.getAttribute('data-matiere-id');
              const matiereName = this.getAttribute('data-matiere-name');
              const csrfToken = this.getAttribute('data-csrf-token');
              const display = document.getElementById('matiereNameDisplay');
              if(display) display.textContent = matiereName;
              
              const form = document.getElementById('deleteForm');
              if(form) {
                  form.action = '/matiere/classe/' + matiereId;
                  const tokenInput = document.getElementById('csrfToken');
                  if(tokenInput) tokenInput.value = csrfToken;
              }
              
              const modalEl = document.getElementById('deleteModal');
              if(modalEl) new bootstrap.Modal(modalEl).show();
            };
          });
        }

        // Attach handlers initially
        attachDeleteHandlers();
        
        // Auto-close alerts
        setTimeout(() => {
          document.querySelectorAll('.alert').forEach(alert => {
            new bootstrap.Alert(alert).close();
          });
        }, 5000);
    });
</script>
{% endblock %}
", "matiere_classe/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\matiere_classe\\index.html.twig");
    }
}
