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

/* tache/index.html.twig */
class __TwigTemplate_f4112e9add2836bf8fd8b0740ae5bb24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

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

        yield "Liste des Tâches";
        
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
    <title>ESPRIT - Gestion des Tâches</title>
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
        /* ========================
      FIXED PROFILE PHOTO SIZES
      ======================== */

      /* Sidebar Profile Picture */
      .nav-item.profile .profile-pic img.profile-avatar-img {
          width: 60px !important;
          height: 60px !important;
          border-radius: 50% !important;
          object-fit: cover !important;
          border: 3px solid rgba(255, 255, 255, 0.2) !important;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
      }

      .nav-item.profile .profile-pic .profile-avatar {
          width: 60px !important;
          height: 60px !important;
          border-radius: 50% !important;
          background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%) !important;
          color: white !important;
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          font-size: 22px !important;
          font-weight: 600 !important;
          border: 3px solid rgba(255, 255, 255, 0.2) !important;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
      }

      .nav-item.profile .count-indicator {
          position: relative !important;
          width: 60px !important;
          height: 60px !important;
      }

      .nav-item.profile .count-indicator img {
          width: 100% !important;
          height: 100% !important;
          border-radius: 50% !important;
          object-fit: cover !important;
      }

      .nav-item.profile .count-indicator .count {
          position: absolute !important;
          top: 0 !important;
          right: -5px !important;
          width: 20px !important;
          height: 20px !important;
          font-size: 10px !important;
      }

      /* Navbar Profile Picture */
      .navbar-profile .avatar-container {
          display: flex !important;
          align-items: center !important;
          gap: 12px !important;
      }

      .navbar-profile .user-avatar-img {
          width: 45px !important;
          height: 45px !important;
          border-radius: 50% !important;
          object-fit: cover !important;
          border: 2px solid rgba(255, 255, 255, 0.3) !important;
          box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15) !important;
      }

      .navbar-profile .user-avatar {
          width: 45px !important;
          height: 45px !important;
          border-radius: 50% !important;
          background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%) !important;
          color: white !important;
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          font-size: 18px !important;
          font-weight: 600 !important;
          border: 2px solid rgba(255, 255, 255, 0.3) !important;
          box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15) !important;
      }

      /* User cell in table (if you have it) */
      .user-cell .user-avatar-small {
          width: 35px !important;
          height: 35px !important;
          border-radius: 50% !important;
      }

      .user-cell .user-avatar-img-small {
          width: 35px !important;
          height: 35px !important;
          border-radius: 50% !important;
      }

      /* ========================
        FIXED SIDEBAR LAYOUT
        ======================== */
      .nav-item.profile .profile-desc {
          padding: 15px !important;
      }

      .nav-item.profile .profile-name {
          margin-top: 15px !important;
          text-align: center !important;
      }

      .nav-item.profile .profile-name h5 {
          font-size: 16px !important;
          font-weight: 600 !important;
          margin-bottom: 5px !important;
      }

      .nav-item.profile .profile-name span {
          font-size: 13px !important;
          color: #6c757d !important;
      }

      .nav-item.profile .mt-1 {
          margin-top: 10px !important;
      }

      .user-role-badge {
          padding: 4px 10px !important;
          font-size: 11px !important;
          border-radius: 12px !important;
          font-weight: 600 !important;
      }

      .badge-admin {
          background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%) !important;
          color: white !important;
      }

      .badge-etudiant {
          background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%) !important;
          color: white !important;
      }

      /* ========================
        FIXED NAVBAR LAYOUT
        ======================== */
      .navbar-profile {
          display: flex !important;
          align-items: center !important;
          padding: 8px 0 !important;
      }

      .navbar-profile-name {
          font-size: 14px !important;
          font-weight: 600 !important;
          margin-bottom: 2px !important;
      }

      .navbar-profile small {
          font-size: 11px !important;
      }

      /* Dropdown avatar in navbar */
      .dropdown-header .user-avatar-img {
          width: 80px !important;
          height: 80px !important;
          border-radius: 50% !important;
          object-fit: cover !important;
          margin: 0 auto 15px !important;
          display: block !important;
          border: 4px solid rgba(255, 255, 255, 0.3) !important;
          box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2) !important;
      }

      .dropdown-header .user-avatar {
          width: 80px !important;
          height: 80px !important;
          border-radius: 50% !important;
          background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%) !important;
          color: white !important;
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          font-size: 32px !important;
          font-weight: 600 !important;
          margin: 0 auto 15px !important;
          border: 4px solid rgba(255, 255, 255, 0.3) !important;
          box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2) !important;
      }

      /* ========================
        RESPONSIVE ADJUSTMENTS
        ======================== */
      @media (max-width: 991.98px) {
          /* Mobile sidebar */
          .sidebar .nav-item.profile .profile-pic {
              flex-direction: column !important;
              text-align: center !important;
          }
          
          .sidebar .nav-item.profile .profile-pic img.profile-avatar-img,
          .sidebar .nav-item.profile .profile-pic .profile-avatar {
              width: 50px !important;
              height: 50px !important;
              margin: 0 auto !important;
          }
          
          .sidebar .nav-item.profile .profile-name {
              margin-top: 10px !important;
          }
          
          /* Mobile navbar */
          .navbar-profile .avatar-container {
              gap: 8px !important;
          }
          
          .navbar-profile .user-avatar-img,
          .navbar-profile .user-avatar {
              width: 35px !important;
              height: 35px !important;
              font-size: 14px !important;
          }
          
          .navbar-profile-name {
              display: none !important;
          }
      }

      @media (max-width: 767.98px) {
          /* Hide profile text completely on mobile */
          .navbar-profile .text-start {
              display: none !important;
          }
          
          /* Make navbar profile circle smaller */
          .navbar-profile .user-avatar-img,
          .navbar-profile .user-avatar {
              width: 30px !important;
              height: 30px !important;
              font-size: 12px !important;
          }
      }

      /* ========================
        ANIMATIONS FOR PROFILE PICTURES
        ======================== */
      .nav-item.profile .profile-pic img.profile-avatar-img:hover,
      .nav-item.profile .profile-pic .profile-avatar:hover {
          transform: scale(1.05);
          transition: transform 0.3s ease;
          box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2) !important;
      }

      .navbar-profile .user-avatar-img:hover,
      .navbar-profile .user-avatar:hover {
          transform: scale(1.05);
          transition: transform 0.3s ease;
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2) !important;
      }

      /* ========================
        IMPROVE AVATAR BORDERS
        ======================== */
      .nav-item.profile .profile-pic img.profile-avatar-img,
      .navbar-profile .user-avatar-img {
          border: 3px solid rgba(255, 255, 255, 0.3) !important;
      }

      /* ========================
        CONSISTENT SHADOWS
        ======================== */
      .nav-item.profile .profile-pic img.profile-avatar-img,
      .nav-item.profile .profile-pic .profile-avatar {
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
      }

      .navbar-profile .user-avatar-img,
      .navbar-profile .user-avatar {
          box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15) !important;
      }

      /* ========================
        PROFILE CONTAINER SPACING
        ======================== */
      .nav-item.profile {
          margin-bottom: 20px !important;
          padding-bottom: 20px !important;
          border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
      }
          /* Add this to your CSS section */
          .search-box input {
            color: #333 !important; /* Dark text color */
          }

          .search-box input::placeholder {
            color: #6c757d !important; /* Light placeholder color */
          }

          .search-box input:focus {
            color: #2c3e50 !important; /* Even darker text when focused */
          }

          /* Modern gradient backgrounds for cards */
          .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            border: none;
            margin-bottom: 0;
          }
          .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
          }
          .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: white;
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
          }
          .stat-count {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 5px;
            color: #2c3e50;
          }
          .stat-label {
            font-size: 0.9rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-weight: 600;
          }
          
          /* Enhanced card gradients */
          .card-1 { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); }
          .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
          .card-3 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
          .card-4 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
          .card-5 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
          
          /* Enhanced priority badges */
          .priority-high { 
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            box-shadow: 0 3px 8px rgba(255, 65, 108, 0.3);
          }
          .priority-medium { 
            background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            box-shadow: 0 3px 8px rgba(249, 212, 35, 0.3);
          }
          .priority-low { 
            background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            box-shadow: 0 3px 8px rgba(91, 134, 229, 0.3);
          }
          
          /* Enhanced status badges */
          .status-pending { 
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            color: #333;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
          }
          .status-inprogress { 
            background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
            color: #333;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
          }
          .status-completed { 
            background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
            color: #333;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
          }
          
          /* Enhanced table styling */
          .table-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            border: none;
          }
          
          .table-card .card-body {
            padding: 1.5rem;
          }
          
          .table-hover tbody tr {
            transition: all 0.25s ease;
            border-bottom: 1px solid #f1f1f1;
          }
          
          .table-hover tbody tr:hover {
            background: linear-gradient(135deg, rgba(106, 17, 203, 0.05) 0%, rgba(37, 117, 252, 0.05) 100%);
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
          }
          
          .table thead th {
            border-bottom: none;
            font-weight: 600;
            color: white;
            padding: 1rem 1rem;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.8px;
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            border: none;
            position: relative;
          }
          .table tbody td {
            padding: 1rem 1rem;
            vertical-align: middle;
            color: #4a5568;
            font-weight: 500;
          }
          
          /* Enhanced buttons */
          .btn-gradient-primary {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(106, 17, 203, 0.3);
          }
          
          .btn-gradient-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(106, 17, 203, 0.4);
            color: white;
          }
          
          .btn-gradient-info {
            background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
            color: white;
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(91, 134, 229, 0.3);
          }
          
          .btn-gradient-info:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(91, 134, 229, 0.4);
            color: white;
          }
          
          .btn-gradient-success {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            color: #333;
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(67, 233, 123, 0.3);
          }
          
          .btn-gradient-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(67, 233, 123, 0.4);
            color: #333;
          }
          
          /* Enhanced action buttons */
          .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: none;
            margin: 0 3px;
          }
          
          .btn-view {
            background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
            color: white;
            box-shadow: 0 3px 8px rgba(91, 134, 229, 0.3);
          }
          
          .btn-edit {
            background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%);
            color: white;
            box-shadow: 0 3px 8px rgba(249, 212, 35, 0.3);
          }
          
          .btn-delete {
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            box-shadow: 0 3px 8px rgba(255, 65, 108, 0.3);
          }
          
          .action-btn:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
          }
          
          /* Enhanced search boxes */
          .search-box {
            position: relative;
          }
          
          .search-box input {
            padding-left: 45px;
            border-radius: 12px;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
          }
          
          .search-box input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
            background: white;
          }
          
          .search-box .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6a11cb;
            z-index: 10;
          }
          
          /* Enhanced type badges */
          .type-badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            display: inline-block;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
          }
          
          .type-bug { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); color: white; }
          .type-feature { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
          .type-improvement { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: #333; }
          .type-maintenance { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: #333; }
          .type-other { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; }
          
          /* Enhanced date styling */
          .date-container {
            background: rgba(240, 242, 245, 0.7);
            padding: 8px 12px;
            border-radius: 10px;
            border-left: 4px solid #6a11cb;
          }
          
          .date-label {
            font-size: 0.75rem;
            color: #6c757d;
            font-weight: 600;
            text-transform: uppercase;
            display: block;
          }
          
          .date-value {
            font-size: 0.9rem;
            color: #2c3e50;
            font-weight: 600;
          }
          
          /* Enhanced user avatar in table */
          .user-cell {
            display: flex;
            align-items: center;
            gap: 10px;
          }
          
          .user-avatar-small {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 3px 8px rgba(106, 17, 203, 0.3);
          }
          
          .user-avatar-img-small {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
          }
          
          /* Enhanced empty state */
          .empty-state {
            text-align: center;
            padding: 60px 20px;
          }
          
          .empty-state-icon {
            font-size: 80px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
          }
          
          /* Enhanced pagination */
          .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
          }
          
          .pagination .page-link {
            border-radius: 10px;
            margin: 0 4px;
            border: none;
            color: #6a11cb;
            font-weight: 600;
          }
          
          .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border-color: #6a11cb;
            color: white;
          }
          
          /* Custom scrollbar */
          .table-responsive::-webkit-scrollbar {
            height: 8px;
          }
          
          .table-responsive::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
          }
          
          .table-responsive::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border-radius: 10px;
          }
          
          /* Enhanced alert messages */
          .alert {
            border-radius: 12px;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 20px;
            padding: 15px 20px;
          }
          
          /* Progress indicator */
          .progress-indicator {
            height: 6px;
            border-radius: 3px;
            background: rgba(0,0,0,0.1);
            overflow: hidden;
            margin-top: 5px;
          }
          
          .progress-bar {
            border-radius: 3px;
            height: 100%;
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
          }
          
          /* DARK THEME FILTER CONTAINER STYLES */
          .filter-container-card {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.1);
            color: white;
          }
          
          .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid rgba(255,255,255,0.1);
          }
          
          .filter-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
          }
          
          .filter-title i {
            color: #6a11cb;
            font-size: 1.5rem;
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(106, 17, 203, 0.3);
          }
          
          .filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
          }
          
          .filter-group {
            margin-bottom: 0;
          }
          
          .filter-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #bdc3c7;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
          }
          
          .filter-input-group {
            position: relative;
            display: flex;
            align-items: center;
          }
          
          .filter-input-group .input-icon {
            position: absolute;
            left: 15px;
            color: #6a11cb;
            font-size: 1.1rem;
            z-index: 2;
          }
          
          .filter-input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: rgba(0,0,0,0.3);
            color: white;
          }
          
          .filter-input::placeholder {
            color: #95a5a6;
          }
          
          .filter-input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.3);
            outline: none;
            background: rgba(0,0,0,0.5);
          }
          
          .filter-select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: rgba(0,0,0,0.3) url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ffffff' class='bi bi-chevron-down' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
            color: white;
            cursor: pointer;
            appearance: none;
          }
          
          .filter-select:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.3);
            outline: none;
            background-color: rgba(0,0,0,0.5);
          }
          
          .filter-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 2px solid rgba(255,255,255,0.1);
          }
          
          .results-info {
            font-size: 0.95rem;
            color: #ecf0f1;
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
          }
          
          .results-count {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
          }
          
          .action-buttons {
            display: flex;
            gap: 10px;
          }
          
          .btn-clear {
            background: rgba(220, 53, 69, 0.2);
            border: 2px solid rgba(220, 53, 69, 0.5);
            color: #ff6b6b;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
          }
          
          .btn-clear:hover {
            background: #dc3545;
            border-color: #dc3545;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
          }
          
          .btn-apply {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            color: #2c3e50;
            border: none;
            padding: 10px 25px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(67, 233, 123, 0.2);
          }
          
          .btn-apply:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(67, 233, 123, 0.4);
            color: #2c3e50;
          }
          
          .btn-new-task {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(106, 17, 203, 0.4);
          }
          
          .btn-new-task:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(106, 17, 203, 0.6);
            color: white;
          }
          
          /* Option badges styling */
          .results-info .badge {
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 5px;
          }
          
          .results-info .badge.bg-info {
            background: rgba(23, 162, 184, 0.2) !important;
            color: #17a2b8;
            border: 1px solid rgba(23, 162, 184, 0.3);
          }
          
          .results-info .badge.bg-warning {
            background: rgba(255, 193, 7, 0.2) !important;
            color: #ffc107;
            border: 1px solid rgba(255, 193, 7, 0.3);
          }
          
          /* Responsive adjustments for dark theme */
          @media (max-width: 992px) {
            .filter-grid {
              grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
              gap: 15px;
            }
            
            .filter-actions {
              flex-direction: column;
              gap: 15px;
              align-items: stretch;
            }
            
            .action-buttons {
              justify-content: center;
              flex-wrap: wrap;
            }
          }
          
          @media (max-width: 768px) {
            .filter-grid {
              grid-template-columns: 1fr;
            }
            
            .filter-header {
              flex-direction: column;
              gap: 15px;
              align-items: flex-start;
            }
            
            .filter-title {
              font-size: 1.1rem;
            }
            
            .results-info {
              flex-direction: column;
              align-items: flex-start;
              gap: 10px;
            }
            
            .action-buttons {
              width: 100%;
            }
            
            .action-buttons button {
              flex: 1;
            }
          }
      </style>
    </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar - UNCHANGED -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <!-- Keep all sidebar content exactly as is -->
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 1009
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 1010
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\" />
          </a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 1012
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_user_index") : ("app_user_profile")));
        yield "\">
            <img src=\"";
        // line 1013
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
        // line 1021
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1021, $this->source); })()), "user", [], "any", false, false, false, 1021)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1022
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1022, $this->source); })()), "user", [], "any", false, false, false, 1022), "profilePic", [], "any", false, false, false, 1022)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1023
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1023, $this->source); })()), "user", [], "any", false, false, false, 1023), "profilePic", [], "any", false, false, false, 1023))), "html", null, true);
                yield "\" 
                           alt=\"";
                // line 1024
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1024, $this->source); })()), "user", [], "any", false, false, false, 1024), "prenom", [], "any", false, false, false, 1024), "html", null, true);
                yield "\" 
                           class=\"profile-avatar-img\">
                    ";
            } else {
                // line 1027
                yield "                      <div class=\"profile-avatar\">
                        ";
                // line 1028
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1028, $this->source); })()), "user", [], "any", false, false, false, 1028), "prenom", [], "any", false, false, false, 1028))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1028, $this->source); })()), "user", [], "any", false, false, false, 1028), "nom", [], "any", false, false, false, 1028))), "html", null, true);
                yield "
                      </div>
                    ";
            }
            // line 1031
            yield "                  ";
        } else {
            // line 1032
            yield "                    <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                  ";
        }
        // line 1034
        yield "                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 1037
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1037, $this->source); })()), "user", [], "any", false, false, false, 1037)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1038
            yield "                    <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1038, $this->source); })()), "user", [], "any", false, false, false, 1038), "prenom", [], "any", false, false, false, 1038), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1038, $this->source); })()), "user", [], "any", false, false, false, 1038), "nom", [], "any", false, false, false, 1038), "html", null, true);
            yield "</h5>
                    <span class=\"text-muted\">";
            // line 1039
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1039, $this->source); })()), "user", [], "any", false, false, false, 1039), "email", [], "any", false, false, false, 1039), "html", null, true);
            yield "</span>
                    <div class=\"mt-1\">
                      ";
            // line 1041
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1041, $this->source); })()), "user", [], "any", false, false, false, 1041), "roles", [], "any", false, false, false, 1041))) {
                // line 1042
                yield "                        <span class=\"user-role-badge badge-admin\">Administrateur</span>
                      ";
            } else {
                // line 1044
                yield "                        <span class=\"user-role-badge badge-etudiant\">Utilisateur</span>
                      ";
            }
            // line 1046
            yield "                    </div>
                  ";
        } else {
            // line 1048
            yield "                    <h5 class=\"mb-0 font-weight-normal\">Non connecté</h5>
                    <span>Veuillez vous connecter</span>
                  ";
        }
        // line 1051
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
        // line 1070
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1071
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 1072
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
            // line 1080
            yield "          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
            // line 1081
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
        // line 1089
        yield "          
          <!-- Matières -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 1092
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
        // line 1102
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
        // line 1112
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
        // line 1122
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
        // line 1132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_projet_index");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-account-multiple\"></i>
              </span>
              <span class=\"menu-title\">Groupes</span>
            </a>
          </li>
          
          <!-- Tâches -->
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"";
        // line 1142
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
        // line 1152
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
        // line 1162
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
        // line 1172
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
        <!-- Navbar - UNCHANGED -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <!-- Keep all navbar content exactly as is -->
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <img src=\"";
        // line 1188
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une tâche...\" id=\"searchInput\">
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
                        <i class=\"mdi mdi-alert-circle\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Tâche urgente</p>
                      <p class=\"text-muted ellipsis mb-0\"> La tâche \"Correction bug\" est due demain</p>
                    </div>
                  </a>
                </div>
              </li>
              
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    ";
        // line 1227
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1227, $this->source); })()), "user", [], "any", false, false, false, 1227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1228
            yield "                      <div class=\"avatar-container\">
                        ";
            // line 1229
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1229, $this->source); })()), "user", [], "any", false, false, false, 1229), "profilePic", [], "any", false, false, false, 1229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1230
                yield "                          <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pics/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1230, $this->source); })()), "user", [], "any", false, false, false, 1230), "profilePic", [], "any", false, false, false, 1230))), "html", null, true);
                yield "\" 
                               alt=\"";
                // line 1231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1231, $this->source); })()), "user", [], "any", false, false, false, 1231), "prenom", [], "any", false, false, false, 1231), "html", null, true);
                yield "\" 
                               class=\"user-avatar-img\">
                        ";
            } else {
                // line 1234
                yield "                          <div class=\"user-avatar\">
                            ";
                // line 1235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1235, $this->source); })()), "user", [], "any", false, false, false, 1235), "prenom", [], "any", false, false, false, 1235))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1235, $this->source); })()), "user", [], "any", false, false, false, 1235), "nom", [], "any", false, false, false, 1235))), "html", null, true);
                yield "
                          </div>
                        ";
            }
            // line 1238
            yield "                        <div class=\"text-start ms-2\">
                          <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
                            ";
            // line 1240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1240, $this->source); })()), "user", [], "any", false, false, false, 1240), "prenom", [], "any", false, false, false, 1240), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1240, $this->source); })()), "user", [], "any", false, false, false, 1240), "nom", [], "any", false, false, false, 1240), "html", null, true);
            yield "
                          </p>
                          <small class=\"text-muted d-none d-sm-block\">
                            ";
            // line 1243
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1243, $this->source); })()), "user", [], "any", false, false, false, 1243), "roles", [], "any", false, false, false, 1243))) {
                // line 1244
                yield "                              <span class=\"badge badge-admin\">Admin</span>
                            ";
            } else {
                // line 1246
                yield "                              <span class=\"badge badge-etudiant\">Utilisateur</span>
                            ";
            }
            // line 1248
            yield "                          </small>
                        </div>
                      </div>
                    ";
        } else {
            // line 1252
            yield "                      <img class=\"img-xs rounded-circle\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true);
            yield "\" alt=\"\">
                      <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Non connecté</p>
                    ";
        }
        // line 1255
        yield "                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <div class=\"dropdown-header p-3\">
                    ";
        // line 1260
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1260, $this->source); })()), "user", [], "any", false, false, false, 1260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1261
            yield "                      <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1261, $this->source); })()), "user", [], "any", false, false, false, 1261), "prenom", [], "any", false, false, false, 1261), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1261, $this->source); })()), "user", [], "any", false, false, false, 1261), "nom", [], "any", false, false, false, 1261), "html", null, true);
            yield "</h6>
                      <p class=\"text-muted mb-0\">";
            // line 1262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1262, $this->source); })()), "user", [], "any", false, false, false, 1262), "email", [], "any", false, false, false, 1262), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">
                        ";
            // line 1264
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1264, $this->source); })()), "user", [], "any", false, false, false, 1264), "roles", [], "any", false, false, false, 1264))) {
                // line 1265
                yield "                          <span class=\"badge badge-admin\">Administrateur</span>
                        ";
            } else {
                // line 1267
                yield "                          <span class=\"badge badge-etudiant\">Utilisateur</span>
                        ";
            }
            // line 1269
            yield "                      </small>
                    ";
        } else {
            // line 1271
            yield "                      <h6 class=\"mb-0\">Non connecté</h6>
                      <p class=\"text-muted mb-0\">Veuillez vous connecter</p>
                    ";
        }
        // line 1274
        yield "                  </div>
                  <div class=\"dropdown-divider\"></div>
                  ";
        // line 1276
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1276, $this->source); })()), "user", [], "any", false, false, false, 1276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1277
            yield "                    <a class=\"dropdown-item preview-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1277, $this->source); })()), "user", [], "any", false, false, false, 1277), "id", [], "any", false, false, false, 1277)]), "html", null, true);
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
            // line 1287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1287, $this->source); })()), "user", [], "any", false, false, false, 1287), "id", [], "any", false, false, false, 1287)]), "html", null, true);
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
        // line 1299
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
        // line 1319
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1319, $this->source); })()), "flashes", [], "any", false, false, false, 1319));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 1320
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 1321
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                  <i class=\"mdi mdi-";
                // line 1322
                yield ((($context["label"] == "success")) ? ("check-circle") : ("alert-circle"));
                yield " me-2\"></i>
                  ";
                // line 1323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1327
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1328
        yield "
            <!-- Header -->
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"page-header\">
                  <h3 class=\"page-title\">
                    <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                      <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                    </span> 
                    Gestion des Tâches
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste complète des tâches ESPRIT
                      </li>
                    </ul>
                  </nav>
                  ";
        // line 1346
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1346, $this->source); })()), "user", [], "any", false, false, false, 1346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1347
            yield "                    <div class=\"mt-2\">
                      <small class=\"text-muted\">
                        <i class=\"mdi mdi-account me-1\"></i>
                        Connecté en tant que: <strong>";
            // line 1350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1350, $this->source); })()), "user", [], "any", false, false, false, 1350), "prenom", [], "any", false, false, false, 1350), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1350, $this->source); })()), "user", [], "any", false, false, false, 1350), "nom", [], "any", false, false, false, 1350), "html", null, true);
            yield "</strong>
                        (";
            // line 1351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1351, $this->source); })()), "user", [], "any", false, false, false, 1351), "email", [], "any", false, false, false, 1351), "html", null, true);
            yield ")
                        ";
            // line 1352
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1352, $this->source); })()), "user", [], "any", false, false, false, 1352), "roles", [], "any", false, false, false, 1352))) {
                // line 1353
                yield "                          <span class=\"badge badge-admin ms-2\">Administrateur</span>
                        ";
            }
            // line 1355
            yield "                      </small>
                    </div>
                  ";
        }
        // line 1358
        yield "                </div>
              </div>
            </div>
            
            <!-- Enhanced Statistics Cards -->
            <div class=\"row\">
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">";
        // line 1370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1370, $this->source); })())), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+8%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Tâches</h6>
                    <div class=\"progress-indicator\">
                      <div class=\"progress-bar\" style=\"width: 85%\"></div>
                    </div>
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
        // line 1393
        $context["pending"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1393, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1393, $this->source); })()), "statut", [], "any", false, false, false, 1393) == "À faire") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1393, $this->source); })()), "statut", [], "any", false, false, false, 1393) == "A_FAIRE")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1393, $this->source); })()), "statut", [], "any", false, false, false, 1393) == "EN_COURS")); }));
        // line 1394
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pending"]) || array_key_exists("pending", $context) ? $context["pending"] : (function () { throw new RuntimeError('Variable "pending" does not exist.', 1394, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-warning ms-2 mb-0 font-weight-medium\">+2%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-clock-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">En cours</h6>
                    <div class=\"progress-indicator\">
                      <div class=\"progress-bar\" style=\"width: 65%\"></div>
                    </div>
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
        // line 1417
        $context["urgent"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1417, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1417, $this->source); })()), "priorite", [], "any", false, false, false, 1417) == "Haute") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1417, $this->source); })()), "priorite", [], "any", false, false, false, 1417) == "ELEVEE")); }));
        // line 1418
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["urgent"]) || array_key_exists("urgent", $context) ? $context["urgent"] : (function () { throw new RuntimeError('Variable "urgent" does not exist.', 1418, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-danger ms-2 mb-0 font-weight-medium\">+3%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-alert-circle-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Urgentes</h6>
                    <div class=\"progress-indicator\">
                      <div class=\"progress-bar\" style=\"width: 45%\"></div>
                    </div>
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
        // line 1441
        $context["completed"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1441, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1441, $this->source); })()), "statut", [], "any", false, false, false, 1441) == "Terminé") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1441, $this->source); })()), "statut", [], "any", false, false, false, 1441) == "TERMINEE")); }));
        // line 1442
        yield "                          <h3 class=\"mb-0 stat-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["completed"]) || array_key_exists("completed", $context) ? $context["completed"] : (function () { throw new RuntimeError('Variable "completed" does not exist.', 1442, $this->source); })()), "html", null, true);
        yield "</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+5%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-check-circle\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Terminées</h6>
                    <div class=\"progress-indicator\">
                      <div class=\"progress-bar\" style=\"width: 90%\"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- IMPROVED FILTER SECTION -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"filter-container-card\">
                  <div class=\"filter-header\">
                    <div class=\"filter-title\">
                      <i class=\"mdi mdi-filter-variant\"></i>
                      Filtres, Tri & Recherche 
                    </div>
                    <a href=\"";
        // line 1470
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        yield "\" class=\"btn-new-task\">
                      <i class=\"mdi mdi-plus-circle\"></i>
                      Nouvelle Tâche
                    </a>
                  </div>
                  
                  <div class=\"filter-grid\">
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Recherche par titre</label>
                      <div class=\"filter-input-group\">
                        <i class=\"mdi mdi-format-title input-icon\"></i>
                        <input type=\"text\"
                              id=\"searchTitre\"
                              name=\"titre\"
                              class=\"filter-input\"
                              placeholder=\"Saisir un titre...\"
                              value=\"";
        // line 1486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("titre", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 1486, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                      </div>
                    </div>
                    
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Recherche par email</label>
                      <div class=\"filter-input-group\">
                        <i class=\"mdi mdi-email input-icon\"></i>
                        <input type=\"text\"
                              id=\"searchEmail\"
                              name=\"email\"
                              class=\"filter-input\"
                              placeholder=\"Saisir un email...\"
                              value=\"";
        // line 1499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 1499, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                      </div>
                    </div>
                    
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Type de tâche</label>
                      <select id=\"filterType\" class=\"filter-select\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"MANUEL\" ";
        // line 1507
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1507, $this->source); })()) == "MANUEL")) ? ("selected") : (""));
        yield ">Manuel</option>
                        <option value=\"REUNION\" ";
        // line 1508
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1508, $this->source); })()) == "REUNION")) ? ("selected") : (""));
        yield ">Réunion</option>
                        <option value=\"REVISION\" ";
        // line 1509
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1509, $this->source); })()) == "REVISION")) ? ("selected") : (""));
        yield ">Révision</option>
                        <option value=\"SANTE\" ";
        // line 1510
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1510, $this->source); })()) == "SANTE")) ? ("selected") : (""));
        yield ">Santé</option>
                        <option value=\"EMPLOI\" ";
        // line 1511
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1511, $this->source); })()) == "EMPLOI")) ? ("selected") : (""));
        yield ">Emploi</option>
                      </select>
                    </div>
                    
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Statut</label>
                      <select id=\"filterStatut\" class=\"filter-select\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"A_FAIRE\" ";
        // line 1519
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 1519, $this->source); })()) == "A_FAIRE")) ? ("selected") : (""));
        yield ">À faire</option>
                        <option value=\"EN_COURS\" ";
        // line 1520
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 1520, $this->source); })()) == "EN_COURS")) ? ("selected") : (""));
        yield ">En cours</option>
                        <option value=\"TERMINEE\" ";
        // line 1521
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 1521, $this->source); })()) == "TERMINEE")) ? ("selected") : (""));
        yield ">Terminée</option>
                        <option value=\"EN_RETARD\" ";
        // line 1522
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 1522, $this->source); })()) == "EN_RETARD")) ? ("selected") : (""));
        yield ">En retard</option>
                        <option value=\"PAUSED\" ";
        // line 1523
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 1523, $this->source); })()) == "PAUSED")) ? ("selected") : (""));
        yield ">En pause</option>
                      </select>
                    </div>

                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Priorité</label>
                      <select id=\"filterPriorite\" class=\"filter-select\">
                        <option value=\"\">Toutes les priorités</option>
                        <option value=\"FAIBLE\" ";
        // line 1531
        yield ((((isset($context["priorite"]) || array_key_exists("priorite", $context) ? $context["priorite"] : (function () { throw new RuntimeError('Variable "priorite" does not exist.', 1531, $this->source); })()) == "FAIBLE")) ? ("selected") : (""));
        yield ">Basse</option>
                        <option value=\"MOYEN\" ";
        // line 1532
        yield ((((isset($context["priorite"]) || array_key_exists("priorite", $context) ? $context["priorite"] : (function () { throw new RuntimeError('Variable "priorite" does not exist.', 1532, $this->source); })()) == "MOYEN")) ? ("selected") : (""));
        yield ">Moyenne</option>
                        <option value=\"ELEVEE\" ";
        // line 1533
        yield ((((isset($context["priorite"]) || array_key_exists("priorite", $context) ? $context["priorite"] : (function () { throw new RuntimeError('Variable "priorite" does not exist.', 1533, $this->source); })()) == "ELEVEE")) ? ("selected") : (""));
        yield ">Urgent</option>
                      </select>
                    </div>
                    
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Tri par date</label>
                      <select id=\"sortDateDebut\" class=\"filter-select\">
                        <option value=\"dateDebut|desc\">Date la plus éloignée</option>
                        <option value=\"dateDebut|asc\">Date la plus proche</option>
                        <option value=\"dateFin|asc\">Fin (plus proche)</option>
                        <option value=\"priorite|desc\">Priorité (élevée)</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class=\"filter-actions\">
                    <div class=\"results-info\">
                      <span id=\"resultsCountText\">
                        <i class=\"mdi mdi-information-outline me-1\"></i>
                        <span class=\"count-val\">";
        // line 1552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1552, $this->source); })())), "html", null, true);
        yield "</span> tâche";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1552, $this->source); })())) > 1)) ? ("s") : (""));
        yield " trouvée";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1552, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                      </span>
                    </div>
                    
                    <div class=\"action-buttons\">
                      <button type=\"button\" class=\"btn-clear\" id=\"clearFilters\">
                        <i class=\"mdi mdi-filter-remove\"></i>
                        Effacer filtres
                      </button>
                      <button type=\"button\" class=\"btn-apply\" id=\"applyFilters\">
                        <i class=\"mdi mdi-check\"></i>
                        Appliquer
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Enhanced Tâches Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card table-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">📋 Liste des Tâches</h4>

                    ";
        // line 1578
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1578, $this->source); })()))) {
            // line 1579
            yield "                      <div class=\"empty-state\">
                        <div class=\"empty-state-icon\">
                          <i class=\"mdi mdi-checkbox-blank-circle-outline\"></i>
                        </div>
                        <h4 class=\"text-muted\">Aucune tâche trouvée</h4>
                        <p class=\"text-muted mb-4\">Commencez par créer une nouvelle tâche</p>
                        <a href=\"";
            // line 1585
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
            yield "\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Créer la première tâche
                        </a>
                      </div>
                    ";
        } else {
            // line 1591
            yield "                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"tachesTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Titre</th>
                              <th>Type</th>
                              <th>Dates</th>
                              <th>Priorité</th>
                              <th>Statut</th>
                              <th>Utilisateur</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody id=\"tacheTableBody\" data-url=\"";
            // line 1605
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
            yield "\">
                            ";
            // line 1606
            yield Twig\Extension\CoreExtension::include($this->env, $context, "tache/_rows.html.twig", ["taches" => (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1606, $this->source); })())]);
            yield "
                          </tbody>
                        </table>
                      </div>
                      
                      <!-- Enhanced Pagination -->
                      <div class=\"pagination-container\">
                        <nav aria-label=\"Page navigation\">
                          <ul class=\"pagination\">
                            <li class=\"page-item disabled\">
                              <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                <i class=\"mdi mdi-chevron-left\"></i>
                              </a>
                            </li>
                            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                              <a class=\"page-link\" href=\"#\">
                                <i class=\"mdi mdi-chevron-right\"></i>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    ";
        }
        // line 1632
        yield "                  </div>
                </div>
              </div>
            </div>
          
            <!-- Footer -->
            <footer class=\"footer\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">
                  © ";
        // line 1641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ESPRIT École d'Ingénieurs. Tous droits réservés.
                </span>
                <span class=\"text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center\">
                  Gestion des Tâches - <span id=\"footerCount\">";
        // line 1644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1644, $this->source); })())), "html", null, true);
        yield "</span> tâche<span id=\"footerPlural\">";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1644, $this->source); })())) > 1)) ? ("s") : (""));
        yield "</span>
                  ";
        // line 1645
        $context["pending"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1645, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1645, $this->source); })()), "statut", [], "any", false, false, false, 1645) == "À faire") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1645, $this->source); })()), "statut", [], "any", false, false, false, 1645) == "A_FAIRE")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 1645, $this->source); })()), "statut", [], "any", false, false, false, 1645) == "EN_COURS")); }));
        // line 1646
        yield "                  | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pending"]) || array_key_exists("pending", $context) ? $context["pending"] : (function () { throw new RuntimeError('Variable "pending" does not exist.', 1646, $this->source); })()), "html", null, true);
        yield " en cours
                  ";
        // line 1647
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1647, $this->source); })()), "user", [], "any", false, false, false, 1647)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1648
            yield "                    | Connecté: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1648, $this->source); })()), "user", [], "any", false, false, false, 1648), "prenom", [], "any", false, false, false, 1648), 0, 10), "html", null, true);
            yield "...
                  ";
        }
        // line 1650
        yield "                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Enhanced Delete Confirmation Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
          <div class=\"modal-header\" style=\"background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%); color: white; border-radius: 16px 16px 0 0;\">
            <h5 class=\"modal-title\" id=\"deleteModalLabel\">
              <i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression
            </h5>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body text-center py-4\">
            <div class=\"mb-3\">
              <i class=\"mdi mdi-alert-circle-outline\" style=\"font-size: 60px; color: #ff416c;\"></i>
            </div>
            <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer cette tâche ?</h5>
            <p class=\"text-muted\">Cette action est irréversible et supprimera définitivement la tâche.</p>
          </div>
          <div class=\"modal-footer justify-content-center border-0\">
            <button type=\"button\" class=\"btn btn-secondary btn-lg px-4\" data-bs-dismiss=\"modal\" style=\"border-radius: 10px;\">
              <i class=\"mdi mdi-close me-2\"></i>Annuler
            </button>
            <button type=\"button\" class=\"btn btn-danger btn-lg px-4\" id=\"confirmDelete\" style=\"
              background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
              border: none;
              border-radius: 10px;
              box-shadow: 0 4px 15px rgba(255, 65, 108, 0.3);
            \">
              <i class=\"mdi mdi-delete me-2\"></i>Supprimer
            </button>
          </div>
        </div>
      </div>
    </div>
        
    <!-- Scripts -->
    <script src=\"";
        // line 1693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {

        // =========================================================
        // ✅ NEW AJAX SEARCH + FILTER + SORT (FULL OVERRIDE)
        // =========================================================
        const titreInput  = document.getElementById('searchTitre');
        const emailInput  = document.getElementById('searchEmail');
        const typeSelect   = document.getElementById('filterType');
        const statutSelect = document.getElementById('filterStatut');
        const prioriteSelect = document.getElementById('filterPriorite');
        const sortSelect   = document.getElementById('sortDateDebut');
        if (sortSelect) sortSelect.value = '";
        // line 1709
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 1709, $this->source); })()), "dateDebut|desc")) : ("dateDebut|desc")), "html", null, true);
        yield "';
        const applyBtn    = document.getElementById('applyFilters');
        const clearBtn    = document.getElementById('clearFilters');
        const tbody       = document.getElementById('tacheTableBody');

        // Prevent form submission
        document.querySelectorAll('form').forEach(f => {
          f.addEventListener('submit', (e) => e.preventDefault());
        });

        let ajaxTimer;
        const debounce = (fn, delay = 350) => (...args) => {
          clearTimeout(ajaxTimer);
          ajaxTimer = setTimeout(() => fn(...args), delay);
        };

        async function reloadTachesAjax() {
          if (!tbody) return;

          const url = tbody.dataset.url;
          if (!url) return;

          // Loading state
          tbody.innerHTML = `
            <tr>
              <td colspan=\"8\" class=\"text-center py-4\">
                <div class=\"spinner-border text-primary\" role=\"status\"></div>
                <p class=\"mt-2 text-muted\">Chargement des tâches...</p>
              </td>
            </tr>
          `;

          const params = new URLSearchParams({
            titre:    titreInput ? titreInput.value.trim() : '',
            email:    emailInput ? emailInput.value.trim() : '',
            type:     typeSelect ? typeSelect.value : '',
            statut:   statutSelect ? statutSelect.value : '',
            priorite: prioriteSelect ? prioriteSelect.value : '',
            sort:     sortSelect ? sortSelect.value : '";
        // line 1747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 1747, $this->source); })()), "dateDebut|desc")) : ("dateDebut|desc")), "html", null, true);
        yield "'
          });

          try {
            if (window.__tacheAbort) window.__tacheAbort.abort();
            window.__tacheAbort = new AbortController();

            const res = await fetch(url + '?' + params.toString(), {
              headers: { 'X-Requested-With': 'XMLHttpRequest' },
              signal: window.__tacheAbort.signal
            });

            const html = await res.text();
            tbody.innerHTML = html;

            // Update counts
            const currentRows = tbody.querySelectorAll('tr:not(.text-center)').length;
            const countVals = document.querySelectorAll('.count-val, #footerCount');
            countVals.forEach(el => el.textContent = currentRows);
            
            const footerPlural = document.getElementById('footerPlural');
            if (footerPlural) footerPlural.textContent = currentRows > 1 ? 's' : '';

            // Re-init UI effects after AJAX
            initTooltips();
            initActionButtons();
            initRowHoverEffects();

          } catch (e) {
            console.error('AJAX reload failed', e);
            tbody.innerHTML = `
              <tr>
                <td colspan=\"8\" class=\"text-center py-4 text-danger\">
                  <i class=\"mdi mdi-alert-circle-outline\" style=\"font-size: 48px;\"></i>
                  <p class=\"mt-2\">Erreur lors du chargement des données</p>
                </td>
              </tr>
            `;
          }
        }

        const reloadDebounced = debounce(reloadTachesAjax, 350);

        // Live search
        if (titreInput)  titreInput.addEventListener('input', reloadDebounced);
        if (emailInput)  emailInput.addEventListener('input', reloadDebounced);

        // Filters & sort (use debounced handler for uniform UX)
        if (typeSelect)     typeSelect.addEventListener('change', reloadDebounced);
        if (statutSelect)   statutSelect.addEventListener('change', reloadDebounced);
        if (prioriteSelect) prioriteSelect.addEventListener('change', reloadDebounced);
        if (sortSelect)     sortSelect.addEventListener('change', reloadDebounced);

        // Apply button
        if (applyBtn) {
          applyBtn.addEventListener('click', reloadDebounced);
        }

        // Clear button
        if (clearBtn) {
          clearBtn.addEventListener('click', function() {
            if (titreInput)  titreInput.value = '';
            if (emailInput)  emailInput.value = '';
            if (typeSelect)  typeSelect.value = '';
            if (statutSelect) statutSelect.value = '';
            if (prioriteSelect) prioriteSelect.value = '';
            if (sortSelect)  sortSelect.value = 'dateDebut|desc';

            reloadTachesAjax();
            showToast('Filtres réinitialisés avec succès', 'success');
          });
        }

        // =========================================================
        // ✅ TOAST
        // =========================================================
        function showToast(message, type = 'success') {
          const toastContainer = document.getElementById('toastContainer') || (() => {
            const container = document.createElement('div');
            container.id = 'toastContainer';
            container.style.cssText = 'position: fixed; top: 20px; right: 20px; z-index: 9999;';
            document.body.appendChild(container);
            return container;
          })();

          const toast = document.createElement('div');
          toast.className = `toast align-items-center text-white bg-\${type === 'success' ? 'success' : 'info'} border-0`;
          toast.innerHTML = `
            <div class=\"d-flex\">
              <div class=\"toast-body\">
                \${message}
              </div>
              <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
            </div>
          `;

          toastContainer.appendChild(toast);
          const bsToast = new bootstrap.Toast(toast, { delay: 3000 });
          bsToast.show();

          toast.addEventListener('hidden.bs.toast', () => toast.remove());
        }

        // =========================================================
        // ✅ UI HELPERS (kept from your second script)
        // =========================================================
        function initRowHoverEffects() {
          const tableRows = document.querySelectorAll('#tachesTable tbody tr');
          tableRows.forEach(row => {
            row.addEventListener('mouseenter', function() {
              this.style.transition = 'all 0.25s ease';
            });
          });
        }

        function initActionButtons() {
          const actionButtons = document.querySelectorAll('.action-btn');
          actionButtons.forEach(button => {
            button.addEventListener('mouseenter', function() {
              this.style.transform = 'translateY(-3px) scale(1.1)';
            });
            button.addEventListener('mouseleave', function() {
              this.style.transform = 'translateY(0) scale(1)';
            });
          });
        }

        function initTooltips() {
          const tooltips = document.querySelectorAll('[title]');
          tooltips.forEach(el => {
            if (el._tooltipInitialized) return;
            el._tooltipInitialized = true;
            try {
              new bootstrap.Tooltip(el);
            } catch (e) {}
          });
        }

        // =========================================================
        // Existing behaviors (unchanged)
        // =========================================================
        initRowHoverEffects();
        initActionButtons();
        initTooltips();

        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert');
          alerts.forEach(alert => {
            try {
              const bsAlert = new bootstrap.Alert(alert);
              bsAlert.close();
            } catch (e) {}
          });
        }, 5000);

        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
          const width = bar.style.width;
          bar.style.width = '0';
          setTimeout(() => {
            bar.style.transition = 'width 1s ease-in-out';
            bar.style.width = width;
          }, 300);
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
        return "tache/index.html.twig";
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
        return array (  2197 => 1747,  2156 => 1709,  2139 => 1695,  2135 => 1694,  2131 => 1693,  2086 => 1650,  2080 => 1648,  2078 => 1647,  2073 => 1646,  2071 => 1645,  2065 => 1644,  2059 => 1641,  2048 => 1632,  2019 => 1606,  2015 => 1605,  1999 => 1591,  1990 => 1585,  1982 => 1579,  1980 => 1578,  1947 => 1552,  1925 => 1533,  1921 => 1532,  1917 => 1531,  1906 => 1523,  1902 => 1522,  1898 => 1521,  1894 => 1520,  1890 => 1519,  1879 => 1511,  1875 => 1510,  1871 => 1509,  1867 => 1508,  1863 => 1507,  1852 => 1499,  1836 => 1486,  1817 => 1470,  1785 => 1442,  1783 => 1441,  1756 => 1418,  1754 => 1417,  1727 => 1394,  1725 => 1393,  1699 => 1370,  1685 => 1358,  1680 => 1355,  1676 => 1353,  1674 => 1352,  1670 => 1351,  1664 => 1350,  1659 => 1347,  1657 => 1346,  1637 => 1328,  1631 => 1327,  1621 => 1323,  1617 => 1322,  1612 => 1321,  1607 => 1320,  1602 => 1319,  1579 => 1299,  1564 => 1287,  1550 => 1277,  1548 => 1276,  1544 => 1274,  1539 => 1271,  1535 => 1269,  1531 => 1267,  1527 => 1265,  1525 => 1264,  1520 => 1262,  1513 => 1261,  1511 => 1260,  1504 => 1255,  1497 => 1252,  1491 => 1248,  1487 => 1246,  1483 => 1244,  1481 => 1243,  1473 => 1240,  1469 => 1238,  1462 => 1235,  1459 => 1234,  1453 => 1231,  1448 => 1230,  1446 => 1229,  1443 => 1228,  1441 => 1227,  1399 => 1188,  1380 => 1172,  1367 => 1162,  1354 => 1152,  1341 => 1142,  1328 => 1132,  1315 => 1122,  1302 => 1112,  1289 => 1102,  1276 => 1092,  1271 => 1089,  1260 => 1081,  1257 => 1080,  1246 => 1072,  1243 => 1071,  1241 => 1070,  1220 => 1051,  1215 => 1048,  1211 => 1046,  1207 => 1044,  1203 => 1042,  1201 => 1041,  1196 => 1039,  1189 => 1038,  1187 => 1037,  1182 => 1034,  1176 => 1032,  1173 => 1031,  1166 => 1028,  1163 => 1027,  1157 => 1024,  1152 => 1023,  1149 => 1022,  1147 => 1021,  1136 => 1013,  1132 => 1012,  1127 => 1010,  1123 => 1009,  130 => 19,  126 => 18,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Tâches{% endblock %}

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
        /* ========================
      FIXED PROFILE PHOTO SIZES
      ======================== */

      /* Sidebar Profile Picture */
      .nav-item.profile .profile-pic img.profile-avatar-img {
          width: 60px !important;
          height: 60px !important;
          border-radius: 50% !important;
          object-fit: cover !important;
          border: 3px solid rgba(255, 255, 255, 0.2) !important;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
      }

      .nav-item.profile .profile-pic .profile-avatar {
          width: 60px !important;
          height: 60px !important;
          border-radius: 50% !important;
          background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%) !important;
          color: white !important;
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          font-size: 22px !important;
          font-weight: 600 !important;
          border: 3px solid rgba(255, 255, 255, 0.2) !important;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
      }

      .nav-item.profile .count-indicator {
          position: relative !important;
          width: 60px !important;
          height: 60px !important;
      }

      .nav-item.profile .count-indicator img {
          width: 100% !important;
          height: 100% !important;
          border-radius: 50% !important;
          object-fit: cover !important;
      }

      .nav-item.profile .count-indicator .count {
          position: absolute !important;
          top: 0 !important;
          right: -5px !important;
          width: 20px !important;
          height: 20px !important;
          font-size: 10px !important;
      }

      /* Navbar Profile Picture */
      .navbar-profile .avatar-container {
          display: flex !important;
          align-items: center !important;
          gap: 12px !important;
      }

      .navbar-profile .user-avatar-img {
          width: 45px !important;
          height: 45px !important;
          border-radius: 50% !important;
          object-fit: cover !important;
          border: 2px solid rgba(255, 255, 255, 0.3) !important;
          box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15) !important;
      }

      .navbar-profile .user-avatar {
          width: 45px !important;
          height: 45px !important;
          border-radius: 50% !important;
          background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%) !important;
          color: white !important;
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          font-size: 18px !important;
          font-weight: 600 !important;
          border: 2px solid rgba(255, 255, 255, 0.3) !important;
          box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15) !important;
      }

      /* User cell in table (if you have it) */
      .user-cell .user-avatar-small {
          width: 35px !important;
          height: 35px !important;
          border-radius: 50% !important;
      }

      .user-cell .user-avatar-img-small {
          width: 35px !important;
          height: 35px !important;
          border-radius: 50% !important;
      }

      /* ========================
        FIXED SIDEBAR LAYOUT
        ======================== */
      .nav-item.profile .profile-desc {
          padding: 15px !important;
      }

      .nav-item.profile .profile-name {
          margin-top: 15px !important;
          text-align: center !important;
      }

      .nav-item.profile .profile-name h5 {
          font-size: 16px !important;
          font-weight: 600 !important;
          margin-bottom: 5px !important;
      }

      .nav-item.profile .profile-name span {
          font-size: 13px !important;
          color: #6c757d !important;
      }

      .nav-item.profile .mt-1 {
          margin-top: 10px !important;
      }

      .user-role-badge {
          padding: 4px 10px !important;
          font-size: 11px !important;
          border-radius: 12px !important;
          font-weight: 600 !important;
      }

      .badge-admin {
          background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%) !important;
          color: white !important;
      }

      .badge-etudiant {
          background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%) !important;
          color: white !important;
      }

      /* ========================
        FIXED NAVBAR LAYOUT
        ======================== */
      .navbar-profile {
          display: flex !important;
          align-items: center !important;
          padding: 8px 0 !important;
      }

      .navbar-profile-name {
          font-size: 14px !important;
          font-weight: 600 !important;
          margin-bottom: 2px !important;
      }

      .navbar-profile small {
          font-size: 11px !important;
      }

      /* Dropdown avatar in navbar */
      .dropdown-header .user-avatar-img {
          width: 80px !important;
          height: 80px !important;
          border-radius: 50% !important;
          object-fit: cover !important;
          margin: 0 auto 15px !important;
          display: block !important;
          border: 4px solid rgba(255, 255, 255, 0.3) !important;
          box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2) !important;
      }

      .dropdown-header .user-avatar {
          width: 80px !important;
          height: 80px !important;
          border-radius: 50% !important;
          background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%) !important;
          color: white !important;
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          font-size: 32px !important;
          font-weight: 600 !important;
          margin: 0 auto 15px !important;
          border: 4px solid rgba(255, 255, 255, 0.3) !important;
          box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2) !important;
      }

      /* ========================
        RESPONSIVE ADJUSTMENTS
        ======================== */
      @media (max-width: 991.98px) {
          /* Mobile sidebar */
          .sidebar .nav-item.profile .profile-pic {
              flex-direction: column !important;
              text-align: center !important;
          }
          
          .sidebar .nav-item.profile .profile-pic img.profile-avatar-img,
          .sidebar .nav-item.profile .profile-pic .profile-avatar {
              width: 50px !important;
              height: 50px !important;
              margin: 0 auto !important;
          }
          
          .sidebar .nav-item.profile .profile-name {
              margin-top: 10px !important;
          }
          
          /* Mobile navbar */
          .navbar-profile .avatar-container {
              gap: 8px !important;
          }
          
          .navbar-profile .user-avatar-img,
          .navbar-profile .user-avatar {
              width: 35px !important;
              height: 35px !important;
              font-size: 14px !important;
          }
          
          .navbar-profile-name {
              display: none !important;
          }
      }

      @media (max-width: 767.98px) {
          /* Hide profile text completely on mobile */
          .navbar-profile .text-start {
              display: none !important;
          }
          
          /* Make navbar profile circle smaller */
          .navbar-profile .user-avatar-img,
          .navbar-profile .user-avatar {
              width: 30px !important;
              height: 30px !important;
              font-size: 12px !important;
          }
      }

      /* ========================
        ANIMATIONS FOR PROFILE PICTURES
        ======================== */
      .nav-item.profile .profile-pic img.profile-avatar-img:hover,
      .nav-item.profile .profile-pic .profile-avatar:hover {
          transform: scale(1.05);
          transition: transform 0.3s ease;
          box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2) !important;
      }

      .navbar-profile .user-avatar-img:hover,
      .navbar-profile .user-avatar:hover {
          transform: scale(1.05);
          transition: transform 0.3s ease;
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2) !important;
      }

      /* ========================
        IMPROVE AVATAR BORDERS
        ======================== */
      .nav-item.profile .profile-pic img.profile-avatar-img,
      .navbar-profile .user-avatar-img {
          border: 3px solid rgba(255, 255, 255, 0.3) !important;
      }

      /* ========================
        CONSISTENT SHADOWS
        ======================== */
      .nav-item.profile .profile-pic img.profile-avatar-img,
      .nav-item.profile .profile-pic .profile-avatar {
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
      }

      .navbar-profile .user-avatar-img,
      .navbar-profile .user-avatar {
          box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15) !important;
      }

      /* ========================
        PROFILE CONTAINER SPACING
        ======================== */
      .nav-item.profile {
          margin-bottom: 20px !important;
          padding-bottom: 20px !important;
          border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
      }
          /* Add this to your CSS section */
          .search-box input {
            color: #333 !important; /* Dark text color */
          }

          .search-box input::placeholder {
            color: #6c757d !important; /* Light placeholder color */
          }

          .search-box input:focus {
            color: #2c3e50 !important; /* Even darker text when focused */
          }

          /* Modern gradient backgrounds for cards */
          .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            border: none;
            margin-bottom: 0;
          }
          .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
          }
          .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: white;
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
          }
          .stat-count {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 5px;
            color: #2c3e50;
          }
          .stat-label {
            font-size: 0.9rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-weight: 600;
          }
          
          /* Enhanced card gradients */
          .card-1 { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); }
          .card-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
          .card-3 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
          .card-4 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
          .card-5 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
          
          /* Enhanced priority badges */
          .priority-high { 
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            box-shadow: 0 3px 8px rgba(255, 65, 108, 0.3);
          }
          .priority-medium { 
            background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            box-shadow: 0 3px 8px rgba(249, 212, 35, 0.3);
          }
          .priority-low { 
            background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            box-shadow: 0 3px 8px rgba(91, 134, 229, 0.3);
          }
          
          /* Enhanced status badges */
          .status-pending { 
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            color: #333;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
          }
          .status-inprogress { 
            background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
            color: #333;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
          }
          .status-completed { 
            background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
            color: #333;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
          }
          
          /* Enhanced table styling */
          .table-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            border: none;
          }
          
          .table-card .card-body {
            padding: 1.5rem;
          }
          
          .table-hover tbody tr {
            transition: all 0.25s ease;
            border-bottom: 1px solid #f1f1f1;
          }
          
          .table-hover tbody tr:hover {
            background: linear-gradient(135deg, rgba(106, 17, 203, 0.05) 0%, rgba(37, 117, 252, 0.05) 100%);
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
          }
          
          .table thead th {
            border-bottom: none;
            font-weight: 600;
            color: white;
            padding: 1rem 1rem;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.8px;
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            border: none;
            position: relative;
          }
          .table tbody td {
            padding: 1rem 1rem;
            vertical-align: middle;
            color: #4a5568;
            font-weight: 500;
          }
          
          /* Enhanced buttons */
          .btn-gradient-primary {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(106, 17, 203, 0.3);
          }
          
          .btn-gradient-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(106, 17, 203, 0.4);
            color: white;
          }
          
          .btn-gradient-info {
            background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
            color: white;
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(91, 134, 229, 0.3);
          }
          
          .btn-gradient-info:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(91, 134, 229, 0.4);
            color: white;
          }
          
          .btn-gradient-success {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            color: #333;
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(67, 233, 123, 0.3);
          }
          
          .btn-gradient-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(67, 233, 123, 0.4);
            color: #333;
          }
          
          /* Enhanced action buttons */
          .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: none;
            margin: 0 3px;
          }
          
          .btn-view {
            background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
            color: white;
            box-shadow: 0 3px 8px rgba(91, 134, 229, 0.3);
          }
          
          .btn-edit {
            background: linear-gradient(135deg, #f9d423 0%, #ff4e50 100%);
            color: white;
            box-shadow: 0 3px 8px rgba(249, 212, 35, 0.3);
          }
          
          .btn-delete {
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            box-shadow: 0 3px 8px rgba(255, 65, 108, 0.3);
          }
          
          .action-btn:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
          }
          
          /* Enhanced search boxes */
          .search-box {
            position: relative;
          }
          
          .search-box input {
            padding-left: 45px;
            border-radius: 12px;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
          }
          
          .search-box input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
            background: white;
          }
          
          .search-box .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6a11cb;
            z-index: 10;
          }
          
          /* Enhanced type badges */
          .type-badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            display: inline-block;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
          }
          
          .type-bug { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); color: white; }
          .type-feature { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
          .type-improvement { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: #333; }
          .type-maintenance { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: #333; }
          .type-other { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; }
          
          /* Enhanced date styling */
          .date-container {
            background: rgba(240, 242, 245, 0.7);
            padding: 8px 12px;
            border-radius: 10px;
            border-left: 4px solid #6a11cb;
          }
          
          .date-label {
            font-size: 0.75rem;
            color: #6c757d;
            font-weight: 600;
            text-transform: uppercase;
            display: block;
          }
          
          .date-value {
            font-size: 0.9rem;
            color: #2c3e50;
            font-weight: 600;
          }
          
          /* Enhanced user avatar in table */
          .user-cell {
            display: flex;
            align-items: center;
            gap: 10px;
          }
          
          .user-avatar-small {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 3px 8px rgba(106, 17, 203, 0.3);
          }
          
          .user-avatar-img-small {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
          }
          
          /* Enhanced empty state */
          .empty-state {
            text-align: center;
            padding: 60px 20px;
          }
          
          .empty-state-icon {
            font-size: 80px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
          }
          
          /* Enhanced pagination */
          .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
          }
          
          .pagination .page-link {
            border-radius: 10px;
            margin: 0 4px;
            border: none;
            color: #6a11cb;
            font-weight: 600;
          }
          
          .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border-color: #6a11cb;
            color: white;
          }
          
          /* Custom scrollbar */
          .table-responsive::-webkit-scrollbar {
            height: 8px;
          }
          
          .table-responsive::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
          }
          
          .table-responsive::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border-radius: 10px;
          }
          
          /* Enhanced alert messages */
          .alert {
            border-radius: 12px;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 20px;
            padding: 15px 20px;
          }
          
          /* Progress indicator */
          .progress-indicator {
            height: 6px;
            border-radius: 3px;
            background: rgba(0,0,0,0.1);
            overflow: hidden;
            margin-top: 5px;
          }
          
          .progress-bar {
            border-radius: 3px;
            height: 100%;
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
          }
          
          /* DARK THEME FILTER CONTAINER STYLES */
          .filter-container-card {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.1);
            color: white;
          }
          
          .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid rgba(255,255,255,0.1);
          }
          
          .filter-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
          }
          
          .filter-title i {
            color: #6a11cb;
            font-size: 1.5rem;
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(106, 17, 203, 0.3);
          }
          
          .filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
          }
          
          .filter-group {
            margin-bottom: 0;
          }
          
          .filter-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #bdc3c7;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
          }
          
          .filter-input-group {
            position: relative;
            display: flex;
            align-items: center;
          }
          
          .filter-input-group .input-icon {
            position: absolute;
            left: 15px;
            color: #6a11cb;
            font-size: 1.1rem;
            z-index: 2;
          }
          
          .filter-input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: rgba(0,0,0,0.3);
            color: white;
          }
          
          .filter-input::placeholder {
            color: #95a5a6;
          }
          
          .filter-input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.3);
            outline: none;
            background: rgba(0,0,0,0.5);
          }
          
          .filter-select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: rgba(0,0,0,0.3) url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ffffff' class='bi bi-chevron-down' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E\");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
            color: white;
            cursor: pointer;
            appearance: none;
          }
          
          .filter-select:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.3);
            outline: none;
            background-color: rgba(0,0,0,0.5);
          }
          
          .filter-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 2px solid rgba(255,255,255,0.1);
          }
          
          .results-info {
            font-size: 0.95rem;
            color: #ecf0f1;
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
          }
          
          .results-count {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
          }
          
          .action-buttons {
            display: flex;
            gap: 10px;
          }
          
          .btn-clear {
            background: rgba(220, 53, 69, 0.2);
            border: 2px solid rgba(220, 53, 69, 0.5);
            color: #ff6b6b;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
          }
          
          .btn-clear:hover {
            background: #dc3545;
            border-color: #dc3545;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
          }
          
          .btn-apply {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            color: #2c3e50;
            border: none;
            padding: 10px 25px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(67, 233, 123, 0.2);
          }
          
          .btn-apply:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(67, 233, 123, 0.4);
            color: #2c3e50;
          }
          
          .btn-new-task {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(106, 17, 203, 0.4);
          }
          
          .btn-new-task:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(106, 17, 203, 0.6);
            color: white;
          }
          
          /* Option badges styling */
          .results-info .badge {
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 5px;
          }
          
          .results-info .badge.bg-info {
            background: rgba(23, 162, 184, 0.2) !important;
            color: #17a2b8;
            border: 1px solid rgba(23, 162, 184, 0.3);
          }
          
          .results-info .badge.bg-warning {
            background: rgba(255, 193, 7, 0.2) !important;
            color: #ffc107;
            border: 1px solid rgba(255, 193, 7, 0.3);
          }
          
          /* Responsive adjustments for dark theme */
          @media (max-width: 992px) {
            .filter-grid {
              grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
              gap: 15px;
            }
            
            .filter-actions {
              flex-direction: column;
              gap: 15px;
              align-items: stretch;
            }
            
            .action-buttons {
              justify-content: center;
              flex-wrap: wrap;
            }
          }
          
          @media (max-width: 768px) {
            .filter-grid {
              grid-template-columns: 1fr;
            }
            
            .filter-header {
              flex-direction: column;
              gap: 15px;
              align-items: flex-start;
            }
            
            .filter-title {
              font-size: 1.1rem;
            }
            
            .results-info {
              flex-direction: column;
              align-items: flex-start;
              gap: 10px;
            }
            
            .action-buttons {
              width: 100%;
            }
            
            .action-buttons button {
              flex: 1;
            }
          }
      </style>
    </head>
  <body>
    <div class=\"container-scroller\">
      <!-- Sidebar - UNCHANGED -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <!-- Keep all sidebar content exactly as is -->
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
            <a class=\"nav-link\" href=\"{{path('app_matiere_classe_index')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-book-open-page-variant\"></i>
              </span>
              <span class=\"menu-title\">Matieres</span>
            </a>
          </li>
          
          <!-- Classes -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{path('app_classe_index')}}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-school\"></i>
              </span>
              <span class=\"menu-title\">Classes</span>
            </a>
          </li>
          
          <!-- Salles -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{path('app_salle_index')}}\">
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
          <li class=\"nav-item menu-items active\">
            <a class=\"nav-link\" href=\"{{ path('app_tache_index') }}\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
              </span>
              <span class=\"menu-title\">Tâches</span>
            </a>
          </li>
          
          <!-- Alertes -->
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_preference_alerte_index') }}\">
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
        <!-- Navbar - UNCHANGED -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <!-- Keep all navbar content exactly as is -->
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
                  <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une tâche...\" id=\"searchInput\">
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
                        <i class=\"mdi mdi-alert-circle\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Tâche urgente</p>
                      <p class=\"text-muted ellipsis mb-0\"> La tâche \"Correction bug\" est due demain</p>
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
                      <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                    </span> 
                    Gestion des Tâches
                  </h3>
                  <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span></span>Liste complète des tâches ESPRIT
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
            
            <!-- Enhanced Statistics Cards -->
            <div class=\"row\">
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          <h3 class=\"mb-0 stat-count\">{{ taches|length }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+8%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-1\">
                          <i class=\"mdi mdi-checkbox-marked-circle-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Total Tâches</h6>
                    <div class=\"progress-indicator\">
                      <div class=\"progress-bar\" style=\"width: 85%\"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set pending = taches|filter(t => t.statut == 'À faire' or t.statut == 'A_FAIRE' or t.statut == 'EN_COURS')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ pending }}</h3>
                          <p class=\"text-warning ms-2 mb-0 font-weight-medium\">+2%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-2\">
                          <i class=\"mdi mdi-clock-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">En cours</h6>
                    <div class=\"progress-indicator\">
                      <div class=\"progress-bar\" style=\"width: 65%\"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set urgent = taches|filter(t => t.priorite == 'Haute' or t.priorite == 'ELEVEE')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ urgent }}</h3>
                          <p class=\"text-danger ms-2 mb-0 font-weight-medium\">+3%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-3\">
                          <i class=\"mdi mdi-alert-circle-outline\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Urgentes</h6>
                    <div class=\"progress-indicator\">
                      <div class=\"progress-bar\" style=\"width: 45%\"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                <div class=\"card stat-card\">
                  <div class=\"card-body\">
                    <div class=\"row\">
                      <div class=\"col-9\">
                        <div class=\"d-flex align-items-center align-self-start\">
                          {% set completed = taches|filter(t => t.statut == 'Terminé' or t.statut == 'TERMINEE')|length %}
                          <h3 class=\"mb-0 stat-count\">{{ completed }}</h3>
                          <p class=\"text-success ms-2 mb-0 font-weight-medium\">+5%</p>
                        </div>
                      </div>
                      <div class=\"col-3\">
                        <div class=\"stat-icon card-4\">
                          <i class=\"mdi mdi-check-circle\"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class=\"stat-label\">Terminées</h6>
                    <div class=\"progress-indicator\">
                      <div class=\"progress-bar\" style=\"width: 90%\"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- IMPROVED FILTER SECTION -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"filter-container-card\">
                  <div class=\"filter-header\">
                    <div class=\"filter-title\">
                      <i class=\"mdi mdi-filter-variant\"></i>
                      Filtres, Tri & Recherche 
                    </div>
                    <a href=\"{{ path('app_tache_new') }}\" class=\"btn-new-task\">
                      <i class=\"mdi mdi-plus-circle\"></i>
                      Nouvelle Tâche
                    </a>
                  </div>
                  
                  <div class=\"filter-grid\">
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Recherche par titre</label>
                      <div class=\"filter-input-group\">
                        <i class=\"mdi mdi-format-title input-icon\"></i>
                        <input type=\"text\"
                              id=\"searchTitre\"
                              name=\"titre\"
                              class=\"filter-input\"
                              placeholder=\"Saisir un titre...\"
                              value=\"{{ titre|default('') }}\">
                      </div>
                    </div>
                    
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Recherche par email</label>
                      <div class=\"filter-input-group\">
                        <i class=\"mdi mdi-email input-icon\"></i>
                        <input type=\"text\"
                              id=\"searchEmail\"
                              name=\"email\"
                              class=\"filter-input\"
                              placeholder=\"Saisir un email...\"
                              value=\"{{ email|default('') }}\">
                      </div>
                    </div>
                    
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Type de tâche</label>
                      <select id=\"filterType\" class=\"filter-select\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"MANUEL\" {{ type == 'MANUEL' ? 'selected' : '' }}>Manuel</option>
                        <option value=\"REUNION\" {{ type == 'REUNION' ? 'selected' : '' }}>Réunion</option>
                        <option value=\"REVISION\" {{ type == 'REVISION' ? 'selected' : '' }}>Révision</option>
                        <option value=\"SANTE\" {{ type == 'SANTE' ? 'selected' : '' }}>Santé</option>
                        <option value=\"EMPLOI\" {{ type == 'EMPLOI' ? 'selected' : '' }}>Emploi</option>
                      </select>
                    </div>
                    
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Statut</label>
                      <select id=\"filterStatut\" class=\"filter-select\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"A_FAIRE\" {{ statut == 'A_FAIRE' ? 'selected' : '' }}>À faire</option>
                        <option value=\"EN_COURS\" {{ statut == 'EN_COURS' ? 'selected' : '' }}>En cours</option>
                        <option value=\"TERMINEE\" {{ statut == 'TERMINEE' ? 'selected' : '' }}>Terminée</option>
                        <option value=\"EN_RETARD\" {{ statut == 'EN_RETARD' ? 'selected' : '' }}>En retard</option>
                        <option value=\"PAUSED\" {{ statut == 'PAUSED' ? 'selected' : '' }}>En pause</option>
                      </select>
                    </div>

                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Priorité</label>
                      <select id=\"filterPriorite\" class=\"filter-select\">
                        <option value=\"\">Toutes les priorités</option>
                        <option value=\"FAIBLE\" {{ priorite == 'FAIBLE' ? 'selected' : '' }}>Basse</option>
                        <option value=\"MOYEN\" {{ priorite == 'MOYEN' ? 'selected' : '' }}>Moyenne</option>
                        <option value=\"ELEVEE\" {{ priorite == 'ELEVEE' ? 'selected' : '' }}>Urgent</option>
                      </select>
                    </div>
                    
                    <div class=\"filter-group\">
                      <label class=\"filter-label\">Tri par date</label>
                      <select id=\"sortDateDebut\" class=\"filter-select\">
                        <option value=\"dateDebut|desc\">Date la plus éloignée</option>
                        <option value=\"dateDebut|asc\">Date la plus proche</option>
                        <option value=\"dateFin|asc\">Fin (plus proche)</option>
                        <option value=\"priorite|desc\">Priorité (élevée)</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class=\"filter-actions\">
                    <div class=\"results-info\">
                      <span id=\"resultsCountText\">
                        <i class=\"mdi mdi-information-outline me-1\"></i>
                        <span class=\"count-val\">{{ taches|length }}</span> tâche{{ taches|length > 1 ? 's' : '' }} trouvée{{ taches|length > 1 ? 's' : '' }}
                      </span>
                    </div>
                    
                    <div class=\"action-buttons\">
                      <button type=\"button\" class=\"btn-clear\" id=\"clearFilters\">
                        <i class=\"mdi mdi-filter-remove\"></i>
                        Effacer filtres
                      </button>
                      <button type=\"button\" class=\"btn-apply\" id=\"applyFilters\">
                        <i class=\"mdi mdi-check\"></i>
                        Appliquer
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Enhanced Tâches Table -->
            <div class=\"row\">
              <div class=\"col-12 grid-margin\">
                <div class=\"card table-card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">📋 Liste des Tâches</h4>

                    {% if taches is empty %}
                      <div class=\"empty-state\">
                        <div class=\"empty-state-icon\">
                          <i class=\"mdi mdi-checkbox-blank-circle-outline\"></i>
                        </div>
                        <h4 class=\"text-muted\">Aucune tâche trouvée</h4>
                        <p class=\"text-muted mb-4\">Commencez par créer une nouvelle tâche</p>
                        <a href=\"{{ path('app_tache_new') }}\" class=\"btn btn-gradient-primary\">
                          <i class=\"mdi mdi-plus-circle\"></i>
                          Créer la première tâche
                        </a>
                      </div>
                    {% else %}
                      <div class=\"table-responsive\">
                        <table class=\"table table-hover\" id=\"tachesTable\">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Titre</th>
                              <th>Type</th>
                              <th>Dates</th>
                              <th>Priorité</th>
                              <th>Statut</th>
                              <th>Utilisateur</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody id=\"tacheTableBody\" data-url=\"{{ path('app_tache_index') }}\">
                            {{ include('tache/_rows.html.twig', { taches: taches }) }}
                          </tbody>
                        </table>
                      </div>
                      
                      <!-- Enhanced Pagination -->
                      <div class=\"pagination-container\">
                        <nav aria-label=\"Page navigation\">
                          <ul class=\"pagination\">
                            <li class=\"page-item disabled\">
                              <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                <i class=\"mdi mdi-chevron-left\"></i>
                              </a>
                            </li>
                            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                              <a class=\"page-link\" href=\"#\">
                                <i class=\"mdi mdi-chevron-right\"></i>
                              </a>
                            </li>
                          </ul>
                        </nav>
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
                  Gestion des Tâches - <span id=\"footerCount\">{{ taches|length }}</span> tâche<span id=\"footerPlural\">{{ taches|length > 1 ? 's' : '' }}</span>
                  {% set pending = taches|filter(t => t.statut == 'À faire' or t.statut == 'A_FAIRE' or t.statut == 'EN_COURS')|length %}
                  | {{ pending }} en cours
                  {% if app.user %}
                    | Connecté: {{ app.user.prenom|slice(0, 10) }}...
                  {% endif %}
                </span>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <!-- Enhanced Delete Confirmation Modal -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
          <div class=\"modal-header\" style=\"background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%); color: white; border-radius: 16px 16px 0 0;\">
            <h5 class=\"modal-title\" id=\"deleteModalLabel\">
              <i class=\"mdi mdi-alert-circle me-2\"></i>Confirmer la suppression
            </h5>
            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body text-center py-4\">
            <div class=\"mb-3\">
              <i class=\"mdi mdi-alert-circle-outline\" style=\"font-size: 60px; color: #ff416c;\"></i>
            </div>
            <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer cette tâche ?</h5>
            <p class=\"text-muted\">Cette action est irréversible et supprimera définitivement la tâche.</p>
          </div>
          <div class=\"modal-footer justify-content-center border-0\">
            <button type=\"button\" class=\"btn btn-secondary btn-lg px-4\" data-bs-dismiss=\"modal\" style=\"border-radius: 10px;\">
              <i class=\"mdi mdi-close me-2\"></i>Annuler
            </button>
            <button type=\"button\" class=\"btn btn-danger btn-lg px-4\" id=\"confirmDelete\" style=\"
              background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
              border: none;
              border-radius: 10px;
              box-shadow: 0 4px 15px rgba(255, 65, 108, 0.3);
            \">
              <i class=\"mdi mdi-delete me-2\"></i>Supprimer
            </button>
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

        // =========================================================
        // ✅ NEW AJAX SEARCH + FILTER + SORT (FULL OVERRIDE)
        // =========================================================
        const titreInput  = document.getElementById('searchTitre');
        const emailInput  = document.getElementById('searchEmail');
        const typeSelect   = document.getElementById('filterType');
        const statutSelect = document.getElementById('filterStatut');
        const prioriteSelect = document.getElementById('filterPriorite');
        const sortSelect   = document.getElementById('sortDateDebut');
        if (sortSelect) sortSelect.value = '{{ sort|default('dateDebut|desc') }}';
        const applyBtn    = document.getElementById('applyFilters');
        const clearBtn    = document.getElementById('clearFilters');
        const tbody       = document.getElementById('tacheTableBody');

        // Prevent form submission
        document.querySelectorAll('form').forEach(f => {
          f.addEventListener('submit', (e) => e.preventDefault());
        });

        let ajaxTimer;
        const debounce = (fn, delay = 350) => (...args) => {
          clearTimeout(ajaxTimer);
          ajaxTimer = setTimeout(() => fn(...args), delay);
        };

        async function reloadTachesAjax() {
          if (!tbody) return;

          const url = tbody.dataset.url;
          if (!url) return;

          // Loading state
          tbody.innerHTML = `
            <tr>
              <td colspan=\"8\" class=\"text-center py-4\">
                <div class=\"spinner-border text-primary\" role=\"status\"></div>
                <p class=\"mt-2 text-muted\">Chargement des tâches...</p>
              </td>
            </tr>
          `;

          const params = new URLSearchParams({
            titre:    titreInput ? titreInput.value.trim() : '',
            email:    emailInput ? emailInput.value.trim() : '',
            type:     typeSelect ? typeSelect.value : '',
            statut:   statutSelect ? statutSelect.value : '',
            priorite: prioriteSelect ? prioriteSelect.value : '',
            sort:     sortSelect ? sortSelect.value : '{{ sort|default('dateDebut|desc') }}'
          });

          try {
            if (window.__tacheAbort) window.__tacheAbort.abort();
            window.__tacheAbort = new AbortController();

            const res = await fetch(url + '?' + params.toString(), {
              headers: { 'X-Requested-With': 'XMLHttpRequest' },
              signal: window.__tacheAbort.signal
            });

            const html = await res.text();
            tbody.innerHTML = html;

            // Update counts
            const currentRows = tbody.querySelectorAll('tr:not(.text-center)').length;
            const countVals = document.querySelectorAll('.count-val, #footerCount');
            countVals.forEach(el => el.textContent = currentRows);
            
            const footerPlural = document.getElementById('footerPlural');
            if (footerPlural) footerPlural.textContent = currentRows > 1 ? 's' : '';

            // Re-init UI effects after AJAX
            initTooltips();
            initActionButtons();
            initRowHoverEffects();

          } catch (e) {
            console.error('AJAX reload failed', e);
            tbody.innerHTML = `
              <tr>
                <td colspan=\"8\" class=\"text-center py-4 text-danger\">
                  <i class=\"mdi mdi-alert-circle-outline\" style=\"font-size: 48px;\"></i>
                  <p class=\"mt-2\">Erreur lors du chargement des données</p>
                </td>
              </tr>
            `;
          }
        }

        const reloadDebounced = debounce(reloadTachesAjax, 350);

        // Live search
        if (titreInput)  titreInput.addEventListener('input', reloadDebounced);
        if (emailInput)  emailInput.addEventListener('input', reloadDebounced);

        // Filters & sort (use debounced handler for uniform UX)
        if (typeSelect)     typeSelect.addEventListener('change', reloadDebounced);
        if (statutSelect)   statutSelect.addEventListener('change', reloadDebounced);
        if (prioriteSelect) prioriteSelect.addEventListener('change', reloadDebounced);
        if (sortSelect)     sortSelect.addEventListener('change', reloadDebounced);

        // Apply button
        if (applyBtn) {
          applyBtn.addEventListener('click', reloadDebounced);
        }

        // Clear button
        if (clearBtn) {
          clearBtn.addEventListener('click', function() {
            if (titreInput)  titreInput.value = '';
            if (emailInput)  emailInput.value = '';
            if (typeSelect)  typeSelect.value = '';
            if (statutSelect) statutSelect.value = '';
            if (prioriteSelect) prioriteSelect.value = '';
            if (sortSelect)  sortSelect.value = 'dateDebut|desc';

            reloadTachesAjax();
            showToast('Filtres réinitialisés avec succès', 'success');
          });
        }

        // =========================================================
        // ✅ TOAST
        // =========================================================
        function showToast(message, type = 'success') {
          const toastContainer = document.getElementById('toastContainer') || (() => {
            const container = document.createElement('div');
            container.id = 'toastContainer';
            container.style.cssText = 'position: fixed; top: 20px; right: 20px; z-index: 9999;';
            document.body.appendChild(container);
            return container;
          })();

          const toast = document.createElement('div');
          toast.className = `toast align-items-center text-white bg-\${type === 'success' ? 'success' : 'info'} border-0`;
          toast.innerHTML = `
            <div class=\"d-flex\">
              <div class=\"toast-body\">
                \${message}
              </div>
              <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
            </div>
          `;

          toastContainer.appendChild(toast);
          const bsToast = new bootstrap.Toast(toast, { delay: 3000 });
          bsToast.show();

          toast.addEventListener('hidden.bs.toast', () => toast.remove());
        }

        // =========================================================
        // ✅ UI HELPERS (kept from your second script)
        // =========================================================
        function initRowHoverEffects() {
          const tableRows = document.querySelectorAll('#tachesTable tbody tr');
          tableRows.forEach(row => {
            row.addEventListener('mouseenter', function() {
              this.style.transition = 'all 0.25s ease';
            });
          });
        }

        function initActionButtons() {
          const actionButtons = document.querySelectorAll('.action-btn');
          actionButtons.forEach(button => {
            button.addEventListener('mouseenter', function() {
              this.style.transform = 'translateY(-3px) scale(1.1)';
            });
            button.addEventListener('mouseleave', function() {
              this.style.transform = 'translateY(0) scale(1)';
            });
          });
        }

        function initTooltips() {
          const tooltips = document.querySelectorAll('[title]');
          tooltips.forEach(el => {
            if (el._tooltipInitialized) return;
            el._tooltipInitialized = true;
            try {
              new bootstrap.Tooltip(el);
            } catch (e) {}
          });
        }

        // =========================================================
        // Existing behaviors (unchanged)
        // =========================================================
        initRowHoverEffects();
        initActionButtons();
        initTooltips();

        setTimeout(() => {
          const alerts = document.querySelectorAll('.alert');
          alerts.forEach(alert => {
            try {
              const bsAlert = new bootstrap.Alert(alert);
              bsAlert.close();
            } catch (e) {}
          });
        }, 5000);

        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
          const width = bar.style.width;
          bar.style.width = '0';
          setTimeout(() => {
            bar.style.transition = 'width 1s ease-in-out';
            bar.style.width = width;
          }, 300);
        });

      });
    </script>

  </body>
</html>
{% endblock %}", "tache/index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\tache\\index.html.twig");
    }
}
