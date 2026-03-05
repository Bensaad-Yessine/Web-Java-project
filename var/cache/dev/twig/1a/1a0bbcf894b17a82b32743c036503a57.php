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

/* seance/schedule.html.twig */
class __TwigTemplate_aedbe2871cdca335cc2dee4d093fff8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/schedule.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/schedule.html.twig"));

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

        yield "Emploi du temps - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "
<style>
    /* ===== VARIABLES (identiques au template Mes Tâches) ===== */
    :root {
        --font-size: 16px;
        --primary-red: #DC2626;
        --primary-red-dark: #B91C1C;
        --primary-red-light: #FEE2E2;
        --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
        --secondary: #10B981;
        --secondary-dark: #059669;
        --warning: #F59E0B;
        --danger: #EF4444;
        --gray-50: #F9FAFB;
        --gray-100: #F3F4F6;
        --gray-200: #E5E7EB;
        --gray-300: #D1D5DB;
        --gray-400: #9CA3AF;
        --gray-500: #6B7280;
        --gray-600: #4B5563;
        --gray-700: #374151;
        --gray-800: #1F2937;
        --gray-900: #111827;
        --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.1);
        --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.15);
        --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.2);
        --radius-lg: 12px;
        --radius-xl: 16px;
        --transition: 250ms cubic-bezier(0.4, 0, 0.2, 1);
        
        /* Calendar specific */
        --calendar-hour-height: 80px;
        --calendar-time-width: 80px;
        --calendar-day-min-width: 160px;
    }

    * { 
        box-sizing: border-box; 
        margin: 0;
        padding: 0;
    }
    
    html { 
        font-size: var(--font-size); 
        scroll-behavior: smooth;
    }
    
    body {
        margin: 0;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
        color: var(--gray-900);
        min-height: 100vh;
        line-height: 1.6;
        -webkit-font-smoothing: antialiased;
    }

    /* ===== LAYOUT PRINCIPAL (identique) ===== */
    .app-shell {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 280px;
        background: white;
        border-right: 1px solid var(--gray-200);
        padding: 24px;
        display: flex;
        flex-direction: column;
        position: sticky;
        top: 0;
        height: 100vh;
        overflow-y: auto;
        box-shadow: 2px 0 20px rgba(220, 38, 38, 0.05);
        flex-shrink: 0;
    }

    .sidebar::-webkit-scrollbar { width: 6px; }
    .sidebar::-webkit-scrollbar-track { background: var(--gray-100); border-radius: 3px; }
    .sidebar::-webkit-scrollbar-thumb { background: var(--gray-300); border-radius: 3px; }
    .sidebar::-webkit-scrollbar-thumb:hover { background: var(--gray-400); }

    .brand {
        margin-bottom: 32px;
        padding-bottom: 24px;
        border-bottom: 1px solid var(--gray-200);
        flex-shrink: 0;
    }

    .brand-row {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .brand-icon {
        background: var(--primary-gradient);
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 800;
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
    }

    .brand-title {
        font-weight: 800;
        font-size: 20px;
        color: var(--primary-red);
    }

    .brand-sub {
        font-size: 12px;
        color: var(--gray-500);
        margin-top: 2px;
    }

    .user-session {
        margin-top: 24px;
        padding: 20px;
        background: var(--gray-50);
        border-radius: var(--radius-lg);
        border: 1px solid var(--gray-200);
        position: relative;
        flex-shrink: 0;
    }

    .user-session::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--primary-gradient);
        border-radius: var(--radius-lg) var(--radius-lg) 0 0;
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 16px;
    }

    .avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--primary-gradient);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 18px;
        border: 3px solid white;
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
    }

    .user-details h3 {
        font-size: 16px;
        font-weight: 600;
        color: var(--gray-800);
        margin-bottom: 2px;
    }

    .user-details p {
        margin: 0;
        font-size: 13px;
        color: var(--gray-600);
    }

    .session-info {
        font-size: 12px;
        color: var(--gray-600);
        padding-top: 16px;
        border-top: 1px solid var(--gray-200);
    }

    .session-info div {
        margin-bottom: 6px;
        display: flex;
        justify-content: space-between;
    }

    .session-info strong {
        color: var(--gray-800);
        font-weight: 600;
    }

    .nav {
        display: flex;
        flex-direction: column;
        gap: 4px;
        margin-top: 24px;
        flex: 1;
        overflow-y: auto;
        padding-right: 4px;
    }

    .nav::-webkit-scrollbar { width: 4px; }

    .nav a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px;
        border-radius: var(--radius-lg);
        color: var(--gray-700);
        text-decoration: none;
        transition: all var(--transition);
        font-weight: 500;
        font-size: 14px;
    }

    .nav a:hover {
        background: var(--primary-red-light);
        color: var(--primary-red);
        transform: translateX(4px);
    }

    .nav a.active {
        background: var(--primary-red-light);
        color: var(--primary-red);
        font-weight: 600;
        border-left: 3px solid var(--primary-red);
    }

    .nav a .icon {
        width: 18px;
        height: 18px;
        stroke-width: 2;
        flex-shrink: 0;
    }

    .nav-section {
        margin-top: 24px;
        margin-bottom: 8px;
        padding-left: 16px;
    }

    .nav-section-title {
        font-size: 12px;
        font-weight: 600;
        color: var(--gray-500);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
    }

    .main {
        flex: 1;
        padding: 32px;
        max-width: 1600px;
        margin: 0 auto;
        width: 100%;
        overflow-y: auto;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .header-content h1 {
        font-size: 36px;
        font-weight: 800;
        margin: 0;
        color: var(--gray-900);
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .header-content p {
        color: var(--gray-500);
        margin-top: 8px;
        font-size: 16px;
    }

    .btn {
        padding: 12px 24px;
        border-radius: var(--radius-lg);
        border: none;
        background: var(--primary-gradient);
        color: white;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all var(--transition);
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(220, 38, 38, 0.35);
    }

    .task-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 16px;
        margin-bottom: 32px;
    }

    .stat-card {
        padding: 20px;
        background: white;
        border-radius: var(--radius-lg);
        border: 1px solid var(--gray-200);
        box-shadow: var(--shadow-sm);
        transition: all var(--transition);
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--primary-gradient);
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-md);
        border-color: var(--primary-red-light);
    }

    .stat-value {
        font-size: 32px;
        font-weight: 800;
        color: var(--gray-900);
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 14px;
        color: var(--gray-600);
        font-weight: 500;
    }

    .footer {
        text-align: center;
        padding: 20px;
        color: var(--gray-500);
        font-size: 12px;
        border-top: 1px solid var(--gray-200);
        margin-top: 40px;
    }

    /* ===== CALENDRIER STYLES ===== */
    .calendar-container {
        background: white;
        border-radius: var(--radius-xl);
        border: 1px solid var(--gray-200);
        box-shadow: var(--shadow-md);
        overflow: hidden;
        margin-top: 24px;
    }

    .calendar-header {
        padding: 24px;
        background: var(--gray-50);
        border-bottom: 1px solid var(--gray-200);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 16px;
    }

    .calendar-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--gray-900);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .week-nav {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .week-nav-btn {
        padding: 8px 16px;
        border-radius: 20px;
        border: 1px solid var(--gray-300);
        background: white;
        color: var(--gray-700);
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: all var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .week-nav-btn:hover {
        background: var(--gray-100);
        border-color: var(--gray-400);
    }

    .week-nav-btn.active {
        background: var(--primary-red);
        color: white;
        border-color: var(--primary-red);
    }

    /* Légende des couleurs */
    .calendar-legend {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        margin-top: 8px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: var(--gray-600);
    }

    .legend-color {
        width: 12px;
        height: 12px;
        border-radius: 3px;
    }

    /* Structure du calendrier */
    .calendar-wrapper {
        overflow-x: auto;
        padding: 20px;
    }

    .calendar-grid {
        display: flex;
        min-width: 800px;
        background: white;
        border-radius: var(--radius-lg);
        border: 1px solid var(--gray-200);
        overflow: hidden;
    }

    /* Colonne des heures */
    .time-column {
        width: var(--calendar-time-width);
        flex-shrink: 0;
        background: var(--gray-50);
        border-right: 1px solid var(--gray-200);
    }

    .time-header {
        height: 60px;
        padding: 16px 8px;
        border-bottom: 1px solid var(--gray-200);
        font-weight: 600;
        color: var(--gray-700);
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--gray-100);
    }

    .time-slot {
        height: var(--calendar-hour-height);
        padding: 8px;
        border-bottom: 1px solid var(--gray-200);
        display: flex;
        align-items: flex-start;
        justify-content: center;
        font-size: 13px;
        font-weight: 500;
        color: var(--gray-600);
        background: var(--gray-50);
    }

    /* Colonnes des jours */
    .day-columns {
        display: flex;
        flex: 1;
        overflow-x: auto;
    }

    .day-column {
        flex: 1;
        min-width: var(--calendar-day-min-width);
        border-right: 1px solid var(--gray-200);
        background: white;
    }

    .day-column:last-child {
        border-right: none;
    }

    .day-header {
        height: 60px;
        padding: 12px;
        border-bottom: 1px solid var(--gray-200);
        background: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .day-name {
        font-weight: 600;
        color: var(--gray-800);
        font-size: 15px;
    }

    .day-date {
        font-size: 12px;
        color: var(--gray-500);
        margin-top: 2px;
    }

    .day-cell {
        height: var(--calendar-hour-height);
        border-bottom: 1px solid var(--gray-100);
        position: relative;
        transition: background var(--transition);
    }

    .day-cell:hover {
        background: var(--gray-50);
    }

    /* Événements (séances) */
    .calendar-event {
        position: absolute;
        left: 4px;
        right: 4px;
        padding: 8px;
        border-radius: 8px;
        background: white;
        border-left: 4px solid var(--primary-red);
        box-shadow: var(--shadow-sm);
        font-size: 12px;
        cursor: pointer;
        transition: all var(--transition);
        border: 1px solid var(--gray-200);
        border-left-width: 4px;
        z-index: 10;
        overflow: hidden;
    }

    .calendar-event:hover {
        transform: scale(1.02);
        box-shadow: var(--shadow-md);
        z-index: 20;
    }

    .calendar-event[data-day=\"Lundi\"] { border-left-color: #DC2626; }
    .calendar-event[data-day=\"Mardi\"] { border-left-color: #F59E0B; }
    .calendar-event[data-day=\"Mercredi\"] { border-left-color: #10B981; }
    .calendar-event[data-day=\"Jeudi\"] { border-left-color: #3B82F6; }
    .calendar-event[data-day=\"Vendredi\"] { border-left-color: #8B5CF6; }
    .calendar-event[data-day=\"Samedi\"] { border-left-color: #EC4899; }

    .event-title {
        font-weight: 600;
        color: var(--gray-800);
        margin-bottom: 2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .event-time {
        font-size: 11px;
        color: var(--gray-500);
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 2px;
    }

    .event-location {
        font-size: 11px;
        color: var(--gray-600);
        display: flex;
        align-items: center;
        gap: 4px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .event-type {
        position: absolute;
        top: 8px;
        right: 8px;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 9px;
        font-weight: 600;
        text-transform: uppercase;
        background: rgba(220, 38, 38, 0.1);
        color: var(--primary-red);
    }

    /* Modal de détail */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }

    .modal.active {
        display: flex;
    }

    .modal-content {
        background: white;
        border-radius: var(--radius-xl);
        padding: 32px;
        max-width: 500px;
        width: 90%;
        max-height: 80vh;
        overflow-y: auto;
        position: relative;
        box-shadow: var(--shadow-xl);
    }

    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--gray-100);
        border: none;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: var(--gray-600);
        transition: all var(--transition);
    }

    .modal-close:hover {
        background: var(--gray-200);
        color: var(--gray-900);
    }

    .modal-header {
        margin-bottom: 24px;
    }

    .modal-title {
        font-size: 24px;
        font-weight: 700;
        color: var(--gray-900);
        margin-bottom: 8px;
    }

    .modal-body {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .modal-detail-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px;
        background: var(--gray-50);
        border-radius: var(--radius-lg);
    }

    .modal-detail-item svg {
        width: 20px;
        height: 20px;
        color: var(--primary-red);
        flex-shrink: 0;
    }

    .empty-calendar {
        padding: 60px 20px;
        text-align: center;
        color: var(--gray-500);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .app-shell { flex-direction: column; }
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            padding: 16px;
            max-height: 80vh;
        }
        .main { padding: 24px; }
    }

    @media (max-width: 768px) {
        .header { flex-direction: column; align-items: flex-start; gap: 16px; }
        .header-content h1 { font-size: 28px; }
        .calendar-wrapper { padding: 12px; }
        .calendar-header { flex-direction: column; align-items: flex-start; }
    }

    .icon-sm { width: 14px; height: 14px; }
    .icon-md { width: 18px; height: 18px; }
</style>

<div class=\"app-shell\">
    ";
        // line 750
        yield "    <aside class=\"sidebar\">
        <div class=\"brand\">
            <div class=\"brand-row\">
                <div class=\"brand-icon\">ES</div>
                <div>
                    <div class=\"brand-title\">ESPRIT</div>
                    <div class=\"brand-sub\">Assistant Étudiant</div>
                </div>
            </div>
        </div>

        <div class=\"user-session\">
            <div class=\"user-info\">
                <div class=\"avatar\">
                    ";
        // line 764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 764, $this->source); })()), "user", [], "any", false, false, false, 764), "nom", [], "any", false, false, false, 764)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 764, $this->source); })()), "user", [], "any", false, false, false, 764), "prenom", [], "any", false, false, false, 764)), "html", null, true);
        yield "
                </div>
                <div class=\"user-details\">
                    <h3>";
        // line 767
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 767, $this->source); })()), "user", [], "any", false, false, false, 767), "nom", [], "any", false, false, false, 767), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 767, $this->source); })()), "user", [], "any", false, false, false, 767), "prenom", [], "any", false, false, false, 767), "html", null, true);
        yield "</h3>
                    <p>📚 ";
        // line 768
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["classe"] ?? null), "nom", [], "any", true, true, false, 768) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 768, $this->source); })()), "nom", [], "any", false, false, false, 768)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 768, $this->source); })()), "nom", [], "any", false, false, false, 768), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 768), "classe", [], "any", false, true, false, 768), "nom", [], "any", true, true, false, 768) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 768, $this->source); })()), "user", [], "any", false, false, false, 768), "classe", [], "any", false, false, false, 768), "nom", [], "any", false, false, false, 768)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 768, $this->source); })()), "user", [], "any", false, false, false, 768), "classe", [], "any", false, false, false, 768), "nom", [], "any", false, false, false, 768), "html", null, true)) : ("Aucune classe"))));
        yield "</p>
                </div>
            </div>
            <div class=\"session-info\">
                <div><strong>Email :</strong> ";
        // line 772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 772, $this->source); })()), "user", [], "any", false, false, false, 772), "email", [], "any", false, false, false, 772), "html", null, true);
        yield "</div>
                <div><strong>Rôle :</strong> ";
        // line 773
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 773, $this->source); })()), "user", [], "any", false, false, false, 773), "roles", [], "any", false, false, false, 773), 0, [], "array", false, false, false, 773), ["ROLE_" => ""])), "html", null, true);
        yield "</div>
            </div>
        </div>

        <nav class=\"nav\">
            <div class=\"nav-section\">
                <div class=\"nav-section-title\">Général</div>
                <a href=\"";
        // line 780
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Tableau de bord
                </a>
                <a href=\"";
        // line 786
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_tasks");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    Mes Tâches
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/><circle cx=\"12\" cy=\"12\" r=\"10\"/>
                    </svg>
                    Objectifs
                </a>
                <a href=\"";
        // line 798
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_index");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/><path d=\"M8 12h8\"/><path d=\"M12 8v8\"/>
                    </svg>
                    Santé
                </a>
            </div>

            <div class=\"nav-section\">
                <div class=\"nav-section-title\">Académique</div>
                <a href=\"";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_users", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 808, $this->source); })()), "user", [], "any", false, false, false, 808), "classe", [], "any", false, false, false, 808), "id", [], "any", false, false, false, 808)]), "html", null, true);
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/><path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Classes
                </a>
                <a href=\"";
        // line 814
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_by_classe", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 814, $this->source); })()), "user", [], "any", false, false, false, 814), "classe", [], "any", false, false, false, 814), "id", [], "any", false, false, false, 814)]), "html", null, true);
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                    </svg>
                    Matières
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"2\" ry=\"2\"/><path d=\"M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/><line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12\"/><line x1=\"8\" y1=\"17\" x2=\"16\" y2=\"17\"/>
                    </svg>
                    Salles
                </a>
            </div>

            <div class=\"nav-section\">
                <div class=\"nav-section-title\">Cours & Groupes</div>
                <a href=\"";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_by_classe", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 830, $this->source); })()), "user", [], "any", false, false, false, 830), "classe", [], "any", false, false, false, 830), "id", [], "any", false, false, false, 830)]), "html", null, true);
        yield "\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                    </svg>
                    Emploi du temps
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                    </svg>
                    Groupes
                </a>
            </div>

            <div class=\"nav-section\">
                <div class=\"nav-section-title\">Compte</div>
                <a href=\"";
        // line 846
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profil
                </a>
                <a href=\"";
        // line 852
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Déconnexion
                </a>
            </div>
        </nav>
    </aside>

    ";
        // line 863
        yield "    <main class=\"main\">
        ";
        // line 864
        if ((null === (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 864, $this->source); })()))) {
            // line 865
            yield "            <div class=\"empty-state\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" width=\"80\" height=\"80\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                    <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"/>
                    <circle cx=\"12\" cy=\"16\" r=\"1\" fill=\"currentColor\"/>
                </svg>
                <h3>Aucune classe associée</h3>
                <p>Votre compte n'est pas encore rattaché à une classe.</p>
                <p style=\"color: var(--gray-500); font-size: 14px;\">Veuillez contacter votre administrateur.</p>
            </div>
        ";
        } else {
            // line 876
            yield "            ";
            // line 877
            yield "            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>Emploi du temps</h1>
                    <p style=\"display: flex; align-items: center; gap: 12px;\">
                        <span style=\"background: var(--primary-red-light); padding: 6px 16px; border-radius: 20px; color: var(--primary-red); font-weight: 600; font-size: 14px;\">
                            ";
            // line 882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 882, $this->source); })()), "nom", [], "any", false, false, false, 882), "html", null, true);
            yield "
                        </span>
                        <span style=\"color: var(--gray-500);\">";
            // line 884
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 884, $this->source); })())), "html", null, true);
            yield " séances programmées</span>
                    </p>
                </div>
                <div style=\"display: flex; gap: 12px;\">
                    <div style=\"background: white; color: var(--primary-red); border: 1px solid var(--primary-red); padding: 12px 24px; border-radius: var(--radius-lg); font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 8px;\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                            <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                            <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                            <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                        </svg>
                        ";
            // line 895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
            yield "
                    </div>
                </div>
            </header>

            ";
            // line 901
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 901, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 902
                yield "                <div class=\"task-stats\">
                    <div class=\"stat-card\">
                        <div class=\"stat-value\">";
                // line 904
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 904, $this->source); })())), "html", null, true);
                yield "</div>
                        <div class=\"stat-label\">📚 Séances totales</div>
                    </div>
                    <div class=\"stat-card\">
                        ";
                // line 908
                $context["matieres"] = [];
                // line 909
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 909, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 910
                    yield "                            ";
                    if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "matiere", [], "any", false, false, false, 910), (isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 910, $this->source); })()))) {
                        // line 911
                        yield "                                ";
                        $context["matieres"] = Twig\Extension\CoreExtension::merge((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 911, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["s"], "matiere", [], "any", false, false, false, 911)]);
                        // line 912
                        yield "                            ";
                    }
                    // line 913
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 914
                yield "                        <div class=\"stat-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 914, $this->source); })())), "html", null, true);
                yield "</div>
                        <div class=\"stat-label\">📖 Matières</div>
                    </div>
                    <div class=\"stat-card\">
                        ";
                // line 918
                $context["salles"] = [];
                // line 919
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 919, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 920
                    yield "                            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "salle", [], "any", false, true, false, 920), "name", [], "any", true, true, false, 920) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "salle", [], "any", false, false, false, 920), "name", [], "any", false, false, false, 920))) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "salle", [], "any", false, false, false, 920), "name", [], "any", false, false, false, 920), (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 920, $this->source); })())))) {
                        // line 921
                        yield "                                ";
                        $context["salles"] = Twig\Extension\CoreExtension::merge((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 921, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "salle", [], "any", false, false, false, 921), "name", [], "any", false, false, false, 921)]);
                        // line 922
                        yield "                            ";
                    }
                    // line 923
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 924
                yield "                        <div class=\"stat-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 924, $this->source); })())), "html", null, true);
                yield "</div>
                        <div class=\"stat-label\">🏛️ Salles</div>
                    </div>
                    <div class=\"stat-card\">
                        ";
                // line 928
                $context["totalHeures"] = 0;
                // line 929
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 929, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 930
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "heureDebut", [], "any", false, false, false, 930) && CoreExtension::getAttribute($this->env, $this->source, $context["s"], "heureFin", [], "any", false, false, false, 930))) {
                        // line 931
                        yield "                                ";
                        $context["totalHeures"] = ((isset($context["totalHeures"]) || array_key_exists("totalHeures", $context) ? $context["totalHeures"] : (function () { throw new RuntimeError('Variable "totalHeures" does not exist.', 931, $this->source); })()) + (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "heureFin", [], "any", false, false, false, 931), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "heureDebut", [], "any", false, false, false, 931), "U")) / 3600));
                        // line 932
                        yield "                            ";
                    }
                    // line 933
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 934
                yield "                        <div class=\"stat-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["totalHeures"]) || array_key_exists("totalHeures", $context) ? $context["totalHeures"] : (function () { throw new RuntimeError('Variable "totalHeures" does not exist.', 934, $this->source); })()), 1), "html", null, true);
                yield "</div>
                        <div class=\"stat-label\">⏱️ Heures totales</div>
                    </div>
                </div>
            ";
            }
            // line 939
            yield "
            ";
            // line 941
            yield "            <div class=\"calendar-container\">
                <div class=\"calendar-header\">
                    <div>
                        <h2 class=\"calendar-title\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                            </svg>
                            Semaine du ";
            // line 951
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
            yield "
                        </h2>
                        <div class=\"calendar-legend\">
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #DC2626;\"></span> Lundi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #F59E0B;\"></span> Mardi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #10B981;\"></span> Mercredi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #3B82F6;\"></span> Jeudi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #8B5CF6;\"></span> Vendredi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #EC4899;\"></span> Samedi</span>
                        </div>
                    </div>
                    <div class=\"week-nav\">
                        <button class=\"week-nav-btn\" id=\"prevWeek\">
                            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M15 18l-6-6 6-6\"/>
                            </svg>
                            Semaine précédente
                        </button>
                        <button class=\"week-nav-btn active\" id=\"currentWeek\">
                            Aujourd'hui
                        </button>
                        <button class=\"week-nav-btn\" id=\"nextWeek\">
                            Semaine suivante
                            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M9 18l6-6-6-6\"/>
                            </svg>
                        </button>
                    </div>
                </div>

                ";
            // line 981
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 981, $this->source); })()))) {
                // line 982
                yield "                    <div class=\"empty-calendar\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" width=\"80\" height=\"80\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            <polyline points=\"12 6 12 12 16 14\"/>
                        </svg>
                        <h3 style=\"margin-top: 16px; font-size: 18px;\">Aucune séance programmée</h3>
                        <p style=\"color: var(--gray-500); margin-top: 8px;\">Il n'y a pas de cours prévus pour cette classe cette semaine.</p>
                    </div>
                ";
            } else {
                // line 991
                yield "                    ";
                // line 992
                yield "                    <div class=\"calendar-wrapper\">
                        <div class=\"calendar-grid\">
                            ";
                // line 995
                yield "                            <div class=\"time-column\">
                                <div class=\"time-header\">Heure</div>
                                ";
                // line 997
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(8, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
                    // line 998
                    yield "                                    <div class=\"time-slot\">
                                        ";
                    // line 999
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d:00", $context["hour"]), "html", null, true);
                    yield "
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['hour'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1002
                yield "                            </div>

                            ";
                // line 1005
                yield "                            <div class=\"day-columns\">
                                ";
                // line 1006
                $context["jours"] = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
                // line 1007
                yield "                                ";
                $context["jours_ordre"] = ["Lundi" => 1, "Mardi" => 2, "Mercredi" => 3, "Jeudi" => 4, "Vendredi" => 5, "Samedi" => 6];
                // line 1008
                yield "                                
                                ";
                // line 1009
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jours"]) || array_key_exists("jours", $context) ? $context["jours"] : (function () { throw new RuntimeError('Variable "jours" does not exist.', 1009, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                    // line 1010
                    yield "                                    <div class=\"day-column\" data-day=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["jour"], "html", null, true);
                    yield "\">
                                        <div class=\"day-header\">
                                            <span class=\"day-name\">";
                    // line 1012
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["jour"], "html", null, true);
                    yield "</span>
                                            ";
                    // line 1014
                    yield "                                            <span class=\"day-date\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["jour"], 0, 3), "html", null, true);
                    yield "</span>
                                        </div>
                                        
                                        ";
                    // line 1018
                    yield "                                      ";
                    // line 1019
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(8, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
                        // line 1020
                        yield "    <div class=\"day-cell\" data-hour=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["hour"], "html", null, true);
                        yield "\" data-day=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["jour"], "html", null, true);
                        yield "\">
        ";
                        // line 1022
                        yield "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 1022, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                            // line 1023
                            yield "            ";
                            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "jour", [], "any", false, false, false, 1023) == $context["jour"]) && CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 1023)) && CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureFin", [], "any", false, false, false, 1023))) {
                                // line 1024
                                yield "                ";
                                $context["debut"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 1024), "U");
                                // line 1025
                                yield "                ";
                                $context["fin"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureFin", [], "any", false, false, false, 1025), "U");
                                // line 1026
                                yield "                ";
                                $context["heureDebut"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 1026), "H");
                                // line 1027
                                yield "                ";
                                $context["minuteDebut"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 1027), "i");
                                // line 1028
                                yield "                ";
                                $context["dureeMinutes"] = (((isset($context["fin"]) || array_key_exists("fin", $context) ? $context["fin"] : (function () { throw new RuntimeError('Variable "fin" does not exist.', 1028, $this->source); })()) - (isset($context["debut"]) || array_key_exists("debut", $context) ? $context["debut"] : (function () { throw new RuntimeError('Variable "debut" does not exist.', 1028, $this->source); })())) / 60);
                                // line 1029
                                yield "                
                ";
                                // line 1031
                                yield "                ";
                                if (((isset($context["heureDebut"]) || array_key_exists("heureDebut", $context) ? $context["heureDebut"] : (function () { throw new RuntimeError('Variable "heureDebut" does not exist.', 1031, $this->source); })()) == $context["hour"])) {
                                    // line 1032
                                    yield "                    ";
                                    $context["topPosition"] = (((isset($context["minuteDebut"]) || array_key_exists("minuteDebut", $context) ? $context["minuteDebut"] : (function () { throw new RuntimeError('Variable "minuteDebut" does not exist.', 1032, $this->source); })()) / 60) * 100);
                                    // line 1033
                                    yield "                    ";
                                    $context["heightEvent"] = (((isset($context["dureeMinutes"]) || array_key_exists("dureeMinutes", $context) ? $context["dureeMinutes"] : (function () { throw new RuntimeError('Variable "dureeMinutes" does not exist.', 1033, $this->source); })()) / 60) * 100);
                                    // line 1034
                                    yield "                    
                    ";
                                    // line 1036
                                    yield "                    ";
                                    $context["seanceData"] = ["matiere" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 1037
$context["seance"], "matiere", [], "any", false, false, false, 1037), "type" => ((CoreExtension::getAttribute($this->env, $this->source,                                     // line 1038
$context["seance"], "type", [], "any", true, true, false, 1038)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "type", [], "any", false, false, false, 1038), "Cours")) : ("Cours")), "jour" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 1039
$context["seance"], "jour", [], "any", false, false, false, 1039), "heureDebut" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                                     // line 1040
$context["seance"], "heureDebut", [], "any", false, false, false, 1040)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 1040), "H:i")) : (null)), "heureFin" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                                     // line 1041
$context["seance"], "heureFin", [], "any", false, false, false, 1041)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureFin", [], "any", false, false, false, 1041), "H:i")) : (null)), "salle" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                                     // line 1042
$context["seance"], "salle", [], "any", false, false, false, 1042)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "salle", [], "any", false, false, false, 1042), "name", [], "any", false, false, false, 1042)]) : (null))];
                                    // line 1044
                                    yield "                    
                    <div class=\"calendar-event\" 
                         data-day=\"";
                                    // line 1046
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["jour"], "html", null, true);
                                    yield "\"
                         data-seance-id=\"";
                                    // line 1047
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 1047), "html", null, true);
                                    yield "\"
                         style=\"top: ";
                                    // line 1048
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["topPosition"]) || array_key_exists("topPosition", $context) ? $context["topPosition"] : (function () { throw new RuntimeError('Variable "topPosition" does not exist.', 1048, $this->source); })()), "html", null, true);
                                    yield "%; height: ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["heightEvent"]) || array_key_exists("heightEvent", $context) ? $context["heightEvent"] : (function () { throw new RuntimeError('Variable "heightEvent" does not exist.', 1048, $this->source); })()), "html", null, true);
                                    yield "%;\"
                         onclick='openSeanceModal(";
                                    // line 1049
                                    yield json_encode((isset($context["seanceData"]) || array_key_exists("seanceData", $context) ? $context["seanceData"] : (function () { throw new RuntimeError('Variable "seanceData" does not exist.', 1049, $this->source); })()));
                                    yield ")'>
                        
                        <div class=\"event-title\">";
                                    // line 1051
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "matiere", [], "any", false, false, false, 1051), "html", null, true);
                                    yield "</div>
                        <div class=\"event-time\">
                            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                <polyline points=\"12 6 12 12 16 14\"/>
                            </svg>
                            ";
                                    // line 1057
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureDebut", [], "any", false, false, false, 1057), "H:i"), "html", null, true);
                                    yield " - ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "heureFin", [], "any", false, false, false, 1057), "H:i"), "html", null, true);
                                    yield "
                        </div>
                        <div class=\"event-location\">
                            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"2\" ry=\"2\"/>
                                <path d=\"M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                            </svg>
                            ";
                                    // line 1064
                                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "salle", [], "any", false, false, false, 1064)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "salle", [], "any", false, false, false, 1064), "name", [], "any", false, false, false, 1064), "html", null, true)) : ("Salle non définie"));
                                    yield "
                        </div>
                        <span class=\"event-type\">";
                                    // line 1066
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "type", [], "any", true, true, false, 1066)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "type", [], "any", false, false, false, 1066), "Cours")) : ("Cours")), 0, 3), "html", null, true);
                                    yield "</span>
                    </div>
                ";
                                }
                                // line 1069
                                yield "            ";
                            }
                            // line 1070
                            yield "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['seance'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1071
                        yield "    </div>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['hour'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1073
                    yield "                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['jour'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1075
                yield "                            </div>
                        </div>
                    </div>
                ";
            }
            // line 1079
            yield "            </div>

            ";
            // line 1082
            yield "            <div class=\"modal\" id=\"seanceModal\">
                <div class=\"modal-content\">
                    <button class=\"modal-close\" onclick=\"closeModal()\">
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"/><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"/>
                        </svg>
                    </button>
                    <div class=\"modal-header\">
                        <h3 class=\"modal-title\" id=\"modalMatiere\">Matière</h3>
                        <span class=\"task-status\" style=\"background: var(--primary-red-light); color: var(--primary-red);\" id=\"modalType\">Cours</span>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"modal-detail-item\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                            </svg>
                            <div>
                                <strong>Jour et heure</strong><br>
                                <span id=\"modalJourHeure\"></span>
                            </div>
                        </div>
                        <div class=\"modal-detail-item\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"2\" ry=\"2\"/>
                                <path d=\"M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                            </svg>
                            <div>
                                <strong>Salle</strong><br>
                                <span id=\"modalSalle\"></span>
                            </div>
                        </div>
                        <div class=\"modal-detail-item\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                <polyline points=\"12 6 12 12 16 14\"/>
                            </svg>
                            <div>
                                <strong>Durée</strong><br>
                                <span id=\"modalDuree\"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 1130
        yield "
        <div class=\"footer\">
            <p>ESPRIT Assistant Étudiant • Emploi du temps ";
        // line 1132
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["classe"] ?? null), "nom", [], "any", true, true, false, 1132) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 1132, $this->source); })()), "nom", [], "any", false, false, false, 1132)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 1132, $this->source); })()), "nom", [], "any", false, false, false, 1132), "html", null, true)) : (""));
        yield " • © ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</p>
        </div>
    </main>
</div>

<script>
    // Fonctions pour la modal
    function openSeanceModal(seanceData) {
        const modal = document.getElementById('seanceModal');
        
        // Remplir les informations
        document.getElementById('modalMatiere').textContent = seanceData.matiere || 'Matière non définie';
        document.getElementById('modalType').textContent = seanceData.type || 'Cours';
        
        const jourHeure = `\${seanceData.jour || ''} \${seanceData.heureDebut || '--:--'} - \${seanceData.heureFin || '--:--'}`;
        document.getElementById('modalJourHeure').textContent = jourHeure;
        
        const salle = seanceData.salle ? (seanceData.salle.name || 'Non définie') : 'Non définie';
        document.getElementById('modalSalle').textContent = salle;
        
        // Calcul approximatif de la durée (à adapter selon votre structure de données)
        if (seanceData.heureDebut && seanceData.heureFin) {
            // Version simplifiée - dans un cas réel, il faudrait calculer la différence
            document.getElementById('modalDuree').textContent = '1.5 heures';
        } else {
            document.getElementById('modalDuree').textContent = 'Durée non définie';
        }
        
        modal.classList.add('active');
    }

    function closeModal() {
        document.getElementById('seanceModal').classList.remove('active');
    }

    // Fermer la modal en cliquant en dehors
    window.onclick = function(event) {
        const modal = document.getElementById('seanceModal');
        if (event.target === modal) {
            modal.classList.remove('active');
        }
    }

    // Navigation et activation des liens
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav a');
        
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });

        // Gestionnaires pour les boutons de semaine (à implémenter selon vos besoins)
        const prevBtn = document.getElementById('prevWeek');
        const nextBtn = document.getElementById('nextWeek');
        const todayBtn = document.getElementById('currentWeek');

        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                // Redirection vers la semaine précédente
                // window.location.href = \"";
        // line 1194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_by_classe", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 1194, $this->source); })()), "id", [], "any", false, false, false, 1194)]), "html", null, true);
        yield "?week=-1\";
                console.log('Semaine précédente');
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                console.log('Semaine suivante');
            });
        }

        if (todayBtn) {
            todayBtn.addEventListener('click', function() {
                console.log('Semaine actuelle');
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
        return "seance/schedule.html.twig";
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
        return array (  1553 => 1194,  1486 => 1132,  1482 => 1130,  1432 => 1082,  1428 => 1079,  1422 => 1075,  1415 => 1073,  1408 => 1071,  1402 => 1070,  1399 => 1069,  1393 => 1066,  1388 => 1064,  1376 => 1057,  1367 => 1051,  1362 => 1049,  1356 => 1048,  1352 => 1047,  1348 => 1046,  1344 => 1044,  1342 => 1042,  1341 => 1041,  1340 => 1040,  1339 => 1039,  1338 => 1038,  1337 => 1037,  1335 => 1036,  1332 => 1034,  1329 => 1033,  1326 => 1032,  1323 => 1031,  1320 => 1029,  1317 => 1028,  1314 => 1027,  1311 => 1026,  1308 => 1025,  1305 => 1024,  1302 => 1023,  1297 => 1022,  1290 => 1020,  1286 => 1019,  1284 => 1018,  1277 => 1014,  1273 => 1012,  1267 => 1010,  1263 => 1009,  1260 => 1008,  1257 => 1007,  1255 => 1006,  1252 => 1005,  1248 => 1002,  1239 => 999,  1236 => 998,  1232 => 997,  1228 => 995,  1224 => 992,  1222 => 991,  1211 => 982,  1209 => 981,  1176 => 951,  1164 => 941,  1161 => 939,  1152 => 934,  1146 => 933,  1143 => 932,  1140 => 931,  1137 => 930,  1132 => 929,  1130 => 928,  1122 => 924,  1116 => 923,  1113 => 922,  1110 => 921,  1107 => 920,  1102 => 919,  1100 => 918,  1092 => 914,  1086 => 913,  1083 => 912,  1080 => 911,  1077 => 910,  1072 => 909,  1070 => 908,  1063 => 904,  1059 => 902,  1056 => 901,  1048 => 895,  1034 => 884,  1029 => 882,  1022 => 877,  1020 => 876,  1007 => 865,  1005 => 864,  1002 => 863,  989 => 852,  980 => 846,  961 => 830,  942 => 814,  933 => 808,  920 => 798,  905 => 786,  896 => 780,  886 => 773,  882 => 772,  875 => 768,  869 => 767,  862 => 764,  846 => 750,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Emploi du temps - {{ classe.nom }}{% endblock %}

{% block body %}

<style>
    /* ===== VARIABLES (identiques au template Mes Tâches) ===== */
    :root {
        --font-size: 16px;
        --primary-red: #DC2626;
        --primary-red-dark: #B91C1C;
        --primary-red-light: #FEE2E2;
        --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
        --secondary: #10B981;
        --secondary-dark: #059669;
        --warning: #F59E0B;
        --danger: #EF4444;
        --gray-50: #F9FAFB;
        --gray-100: #F3F4F6;
        --gray-200: #E5E7EB;
        --gray-300: #D1D5DB;
        --gray-400: #9CA3AF;
        --gray-500: #6B7280;
        --gray-600: #4B5563;
        --gray-700: #374151;
        --gray-800: #1F2937;
        --gray-900: #111827;
        --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.1);
        --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.15);
        --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.2);
        --radius-lg: 12px;
        --radius-xl: 16px;
        --transition: 250ms cubic-bezier(0.4, 0, 0.2, 1);
        
        /* Calendar specific */
        --calendar-hour-height: 80px;
        --calendar-time-width: 80px;
        --calendar-day-min-width: 160px;
    }

    * { 
        box-sizing: border-box; 
        margin: 0;
        padding: 0;
    }
    
    html { 
        font-size: var(--font-size); 
        scroll-behavior: smooth;
    }
    
    body {
        margin: 0;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
        color: var(--gray-900);
        min-height: 100vh;
        line-height: 1.6;
        -webkit-font-smoothing: antialiased;
    }

    /* ===== LAYOUT PRINCIPAL (identique) ===== */
    .app-shell {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 280px;
        background: white;
        border-right: 1px solid var(--gray-200);
        padding: 24px;
        display: flex;
        flex-direction: column;
        position: sticky;
        top: 0;
        height: 100vh;
        overflow-y: auto;
        box-shadow: 2px 0 20px rgba(220, 38, 38, 0.05);
        flex-shrink: 0;
    }

    .sidebar::-webkit-scrollbar { width: 6px; }
    .sidebar::-webkit-scrollbar-track { background: var(--gray-100); border-radius: 3px; }
    .sidebar::-webkit-scrollbar-thumb { background: var(--gray-300); border-radius: 3px; }
    .sidebar::-webkit-scrollbar-thumb:hover { background: var(--gray-400); }

    .brand {
        margin-bottom: 32px;
        padding-bottom: 24px;
        border-bottom: 1px solid var(--gray-200);
        flex-shrink: 0;
    }

    .brand-row {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .brand-icon {
        background: var(--primary-gradient);
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 800;
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
    }

    .brand-title {
        font-weight: 800;
        font-size: 20px;
        color: var(--primary-red);
    }

    .brand-sub {
        font-size: 12px;
        color: var(--gray-500);
        margin-top: 2px;
    }

    .user-session {
        margin-top: 24px;
        padding: 20px;
        background: var(--gray-50);
        border-radius: var(--radius-lg);
        border: 1px solid var(--gray-200);
        position: relative;
        flex-shrink: 0;
    }

    .user-session::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--primary-gradient);
        border-radius: var(--radius-lg) var(--radius-lg) 0 0;
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 16px;
    }

    .avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--primary-gradient);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 18px;
        border: 3px solid white;
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
    }

    .user-details h3 {
        font-size: 16px;
        font-weight: 600;
        color: var(--gray-800);
        margin-bottom: 2px;
    }

    .user-details p {
        margin: 0;
        font-size: 13px;
        color: var(--gray-600);
    }

    .session-info {
        font-size: 12px;
        color: var(--gray-600);
        padding-top: 16px;
        border-top: 1px solid var(--gray-200);
    }

    .session-info div {
        margin-bottom: 6px;
        display: flex;
        justify-content: space-between;
    }

    .session-info strong {
        color: var(--gray-800);
        font-weight: 600;
    }

    .nav {
        display: flex;
        flex-direction: column;
        gap: 4px;
        margin-top: 24px;
        flex: 1;
        overflow-y: auto;
        padding-right: 4px;
    }

    .nav::-webkit-scrollbar { width: 4px; }

    .nav a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px;
        border-radius: var(--radius-lg);
        color: var(--gray-700);
        text-decoration: none;
        transition: all var(--transition);
        font-weight: 500;
        font-size: 14px;
    }

    .nav a:hover {
        background: var(--primary-red-light);
        color: var(--primary-red);
        transform: translateX(4px);
    }

    .nav a.active {
        background: var(--primary-red-light);
        color: var(--primary-red);
        font-weight: 600;
        border-left: 3px solid var(--primary-red);
    }

    .nav a .icon {
        width: 18px;
        height: 18px;
        stroke-width: 2;
        flex-shrink: 0;
    }

    .nav-section {
        margin-top: 24px;
        margin-bottom: 8px;
        padding-left: 16px;
    }

    .nav-section-title {
        font-size: 12px;
        font-weight: 600;
        color: var(--gray-500);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
    }

    .main {
        flex: 1;
        padding: 32px;
        max-width: 1600px;
        margin: 0 auto;
        width: 100%;
        overflow-y: auto;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .header-content h1 {
        font-size: 36px;
        font-weight: 800;
        margin: 0;
        color: var(--gray-900);
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .header-content p {
        color: var(--gray-500);
        margin-top: 8px;
        font-size: 16px;
    }

    .btn {
        padding: 12px 24px;
        border-radius: var(--radius-lg);
        border: none;
        background: var(--primary-gradient);
        color: white;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all var(--transition);
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(220, 38, 38, 0.35);
    }

    .task-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 16px;
        margin-bottom: 32px;
    }

    .stat-card {
        padding: 20px;
        background: white;
        border-radius: var(--radius-lg);
        border: 1px solid var(--gray-200);
        box-shadow: var(--shadow-sm);
        transition: all var(--transition);
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--primary-gradient);
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-md);
        border-color: var(--primary-red-light);
    }

    .stat-value {
        font-size: 32px;
        font-weight: 800;
        color: var(--gray-900);
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 14px;
        color: var(--gray-600);
        font-weight: 500;
    }

    .footer {
        text-align: center;
        padding: 20px;
        color: var(--gray-500);
        font-size: 12px;
        border-top: 1px solid var(--gray-200);
        margin-top: 40px;
    }

    /* ===== CALENDRIER STYLES ===== */
    .calendar-container {
        background: white;
        border-radius: var(--radius-xl);
        border: 1px solid var(--gray-200);
        box-shadow: var(--shadow-md);
        overflow: hidden;
        margin-top: 24px;
    }

    .calendar-header {
        padding: 24px;
        background: var(--gray-50);
        border-bottom: 1px solid var(--gray-200);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 16px;
    }

    .calendar-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--gray-900);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .week-nav {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .week-nav-btn {
        padding: 8px 16px;
        border-radius: 20px;
        border: 1px solid var(--gray-300);
        background: white;
        color: var(--gray-700);
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: all var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .week-nav-btn:hover {
        background: var(--gray-100);
        border-color: var(--gray-400);
    }

    .week-nav-btn.active {
        background: var(--primary-red);
        color: white;
        border-color: var(--primary-red);
    }

    /* Légende des couleurs */
    .calendar-legend {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        margin-top: 8px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: var(--gray-600);
    }

    .legend-color {
        width: 12px;
        height: 12px;
        border-radius: 3px;
    }

    /* Structure du calendrier */
    .calendar-wrapper {
        overflow-x: auto;
        padding: 20px;
    }

    .calendar-grid {
        display: flex;
        min-width: 800px;
        background: white;
        border-radius: var(--radius-lg);
        border: 1px solid var(--gray-200);
        overflow: hidden;
    }

    /* Colonne des heures */
    .time-column {
        width: var(--calendar-time-width);
        flex-shrink: 0;
        background: var(--gray-50);
        border-right: 1px solid var(--gray-200);
    }

    .time-header {
        height: 60px;
        padding: 16px 8px;
        border-bottom: 1px solid var(--gray-200);
        font-weight: 600;
        color: var(--gray-700);
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--gray-100);
    }

    .time-slot {
        height: var(--calendar-hour-height);
        padding: 8px;
        border-bottom: 1px solid var(--gray-200);
        display: flex;
        align-items: flex-start;
        justify-content: center;
        font-size: 13px;
        font-weight: 500;
        color: var(--gray-600);
        background: var(--gray-50);
    }

    /* Colonnes des jours */
    .day-columns {
        display: flex;
        flex: 1;
        overflow-x: auto;
    }

    .day-column {
        flex: 1;
        min-width: var(--calendar-day-min-width);
        border-right: 1px solid var(--gray-200);
        background: white;
    }

    .day-column:last-child {
        border-right: none;
    }

    .day-header {
        height: 60px;
        padding: 12px;
        border-bottom: 1px solid var(--gray-200);
        background: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .day-name {
        font-weight: 600;
        color: var(--gray-800);
        font-size: 15px;
    }

    .day-date {
        font-size: 12px;
        color: var(--gray-500);
        margin-top: 2px;
    }

    .day-cell {
        height: var(--calendar-hour-height);
        border-bottom: 1px solid var(--gray-100);
        position: relative;
        transition: background var(--transition);
    }

    .day-cell:hover {
        background: var(--gray-50);
    }

    /* Événements (séances) */
    .calendar-event {
        position: absolute;
        left: 4px;
        right: 4px;
        padding: 8px;
        border-radius: 8px;
        background: white;
        border-left: 4px solid var(--primary-red);
        box-shadow: var(--shadow-sm);
        font-size: 12px;
        cursor: pointer;
        transition: all var(--transition);
        border: 1px solid var(--gray-200);
        border-left-width: 4px;
        z-index: 10;
        overflow: hidden;
    }

    .calendar-event:hover {
        transform: scale(1.02);
        box-shadow: var(--shadow-md);
        z-index: 20;
    }

    .calendar-event[data-day=\"Lundi\"] { border-left-color: #DC2626; }
    .calendar-event[data-day=\"Mardi\"] { border-left-color: #F59E0B; }
    .calendar-event[data-day=\"Mercredi\"] { border-left-color: #10B981; }
    .calendar-event[data-day=\"Jeudi\"] { border-left-color: #3B82F6; }
    .calendar-event[data-day=\"Vendredi\"] { border-left-color: #8B5CF6; }
    .calendar-event[data-day=\"Samedi\"] { border-left-color: #EC4899; }

    .event-title {
        font-weight: 600;
        color: var(--gray-800);
        margin-bottom: 2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .event-time {
        font-size: 11px;
        color: var(--gray-500);
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 2px;
    }

    .event-location {
        font-size: 11px;
        color: var(--gray-600);
        display: flex;
        align-items: center;
        gap: 4px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .event-type {
        position: absolute;
        top: 8px;
        right: 8px;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 9px;
        font-weight: 600;
        text-transform: uppercase;
        background: rgba(220, 38, 38, 0.1);
        color: var(--primary-red);
    }

    /* Modal de détail */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }

    .modal.active {
        display: flex;
    }

    .modal-content {
        background: white;
        border-radius: var(--radius-xl);
        padding: 32px;
        max-width: 500px;
        width: 90%;
        max-height: 80vh;
        overflow-y: auto;
        position: relative;
        box-shadow: var(--shadow-xl);
    }

    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--gray-100);
        border: none;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: var(--gray-600);
        transition: all var(--transition);
    }

    .modal-close:hover {
        background: var(--gray-200);
        color: var(--gray-900);
    }

    .modal-header {
        margin-bottom: 24px;
    }

    .modal-title {
        font-size: 24px;
        font-weight: 700;
        color: var(--gray-900);
        margin-bottom: 8px;
    }

    .modal-body {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .modal-detail-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px;
        background: var(--gray-50);
        border-radius: var(--radius-lg);
    }

    .modal-detail-item svg {
        width: 20px;
        height: 20px;
        color: var(--primary-red);
        flex-shrink: 0;
    }

    .empty-calendar {
        padding: 60px 20px;
        text-align: center;
        color: var(--gray-500);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .app-shell { flex-direction: column; }
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            padding: 16px;
            max-height: 80vh;
        }
        .main { padding: 24px; }
    }

    @media (max-width: 768px) {
        .header { flex-direction: column; align-items: flex-start; gap: 16px; }
        .header-content h1 { font-size: 28px; }
        .calendar-wrapper { padding: 12px; }
        .calendar-header { flex-direction: column; align-items: flex-start; }
    }

    .icon-sm { width: 14px; height: 14px; }
    .icon-md { width: 18px; height: 18px; }
</style>

<div class=\"app-shell\">
    {# ===== SIDEBAR (identique) ===== #}
    <aside class=\"sidebar\">
        <div class=\"brand\">
            <div class=\"brand-row\">
                <div class=\"brand-icon\">ES</div>
                <div>
                    <div class=\"brand-title\">ESPRIT</div>
                    <div class=\"brand-sub\">Assistant Étudiant</div>
                </div>
            </div>
        </div>

        <div class=\"user-session\">
            <div class=\"user-info\">
                <div class=\"avatar\">
                    {{ app.user.nom|first }}{{ app.user.prenom|first }}
                </div>
                <div class=\"user-details\">
                    <h3>{{ app.user.nom }} {{ app.user.prenom }}</h3>
                    <p>📚 {{ classe.nom ?? app.user.classe.nom ?? 'Aucune classe' }}</p>
                </div>
            </div>
            <div class=\"session-info\">
                <div><strong>Email :</strong> {{ app.user.email }}</div>
                <div><strong>Rôle :</strong> {{ app.user.roles[0]|replace({'ROLE_': ''})|capitalize }}</div>
            </div>
        </div>

        <nav class=\"nav\">
            <div class=\"nav-section\">
                <div class=\"nav-section-title\">Général</div>
                <a href=\"{{ path('app_dashboard') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M3 9l9-7 9 7\"/><path d=\"M9 22V12h6v10\"/>
                    </svg>
                    Tableau de bord
                </a>
                <a href=\"{{ path('app_my_tasks') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 11l3 3 8-8\"/><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"/>
                    </svg>
                    Mes Tâches
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"/><circle cx=\"12\" cy=\"12\" r=\"10\"/>
                    </svg>
                    Objectifs
                </a>
                <a href=\"{{ path('front_objectif_sante_index') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/><path d=\"M8 12h8\"/><path d=\"M12 8v8\"/>
                    </svg>
                    Santé
                </a>
            </div>

            <div class=\"nav-section\">
                <div class=\"nav-section-title\">Académique</div>
                <a href=\"{{ path('app_classe_users',{'id': app.user.classe.id}) }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/><path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
                    </svg>
                    Classes
                </a>
                <a href=\"{{ path('app_matiere_classe_by_classe', {'id': app.user.classe.id}) }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\"/>
                    </svg>
                    Matières
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"2\" ry=\"2\"/><path d=\"M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/><line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12\"/><line x1=\"8\" y1=\"17\" x2=\"16\" y2=\"17\"/>
                    </svg>
                    Salles
                </a>
            </div>

            <div class=\"nav-section\">
                <div class=\"nav-section-title\">Cours & Groupes</div>
                <a href=\"{{ path('app_seance_by_classe', {'id': app.user.classe.id}) }}\" class=\"active\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                    </svg>
                    Emploi du temps
                </a>
                <a href=\"#\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                    </svg>
                    Groupes
                </a>
            </div>

            <div class=\"nav-section\">
                <div class=\"nav-section-title\">Compte</div>
                <a href=\"{{ path('app_profile') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/>
                    </svg>
                    Profil
                </a>
                <a href=\"{{ path('app_logout') }}\">
                    <svg class=\"icon\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/><path d=\"M16 17l5-5-5-5\"/><path d=\"M21 12H9\"/>
                    </svg>
                    Déconnexion
                </a>
            </div>
        </nav>
    </aside>

    {# ===== MAIN : CALENDRIER ===== #}
    <main class=\"main\">
        {% if classe is null %}
            <div class=\"empty-state\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" width=\"80\" height=\"80\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                    <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"/>
                    <circle cx=\"12\" cy=\"16\" r=\"1\" fill=\"currentColor\"/>
                </svg>
                <h3>Aucune classe associée</h3>
                <p>Votre compte n'est pas encore rattaché à une classe.</p>
                <p style=\"color: var(--gray-500); font-size: 14px;\">Veuillez contacter votre administrateur.</p>
            </div>
        {% else %}
            {# Header #}
            <header class=\"header\">
                <div class=\"header-content\">
                    <h1>Emploi du temps</h1>
                    <p style=\"display: flex; align-items: center; gap: 12px;\">
                        <span style=\"background: var(--primary-red-light); padding: 6px 16px; border-radius: 20px; color: var(--primary-red); font-weight: 600; font-size: 14px;\">
                            {{ classe.nom }}
                        </span>
                        <span style=\"color: var(--gray-500);\">{{ seances|length }} séances programmées</span>
                    </p>
                </div>
                <div style=\"display: flex; gap: 12px;\">
                    <div style=\"background: white; color: var(--primary-red); border: 1px solid var(--primary-red); padding: 12px 24px; border-radius: var(--radius-lg); font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 8px;\">
                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                            <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                            <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                            <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                        </svg>
                        {{ \"now\"|date(\"d/m/Y\") }}
                    </div>
                </div>
            </header>

            {# Statistiques #}
            {% if seances is not empty %}
                <div class=\"task-stats\">
                    <div class=\"stat-card\">
                        <div class=\"stat-value\">{{ seances|length }}</div>
                        <div class=\"stat-label\">📚 Séances totales</div>
                    </div>
                    <div class=\"stat-card\">
                        {% set matieres = [] %}
                        {% for s in seances %}
                            {% if s.matiere not in matieres %}
                                {% set matieres = matieres|merge([s.matiere]) %}
                            {% endif %}
                        {% endfor %}
                        <div class=\"stat-value\">{{ matieres|length }}</div>
                        <div class=\"stat-label\">📖 Matières</div>
                    </div>
                    <div class=\"stat-card\">
                        {% set salles = [] %}
                        {% for s in seances %}
                            {% if s.salle.name is defined and s.salle.name is not empty and s.salle.name not in salles %}
                                {% set salles = salles|merge([s.salle.name]) %}
                            {% endif %}
                        {% endfor %}
                        <div class=\"stat-value\">{{ salles|length }}</div>
                        <div class=\"stat-label\">🏛️ Salles</div>
                    </div>
                    <div class=\"stat-card\">
                        {% set totalHeures = 0 %}
                        {% for s in seances %}
                            {% if s.heureDebut and s.heureFin %}
                                {% set totalHeures = totalHeures + ((s.heureFin|date('U') - s.heureDebut|date('U')) / 3600) %}
                            {% endif %}
                        {% endfor %}
                        <div class=\"stat-value\">{{ totalHeures|round(1) }}</div>
                        <div class=\"stat-label\">⏱️ Heures totales</div>
                    </div>
                </div>
            {% endif %}

            {# === CALENDRIER HEBDOMADAIRE === #}
            <div class=\"calendar-container\">
                <div class=\"calendar-header\">
                    <div>
                        <h2 class=\"calendar-title\">
                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                            </svg>
                            Semaine du {{ \"now\"|date(\"d/m/Y\") }}
                        </h2>
                        <div class=\"calendar-legend\">
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #DC2626;\"></span> Lundi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #F59E0B;\"></span> Mardi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #10B981;\"></span> Mercredi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #3B82F6;\"></span> Jeudi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #8B5CF6;\"></span> Vendredi</span>
                            <span class=\"legend-item\"><span class=\"legend-color\" style=\"background: #EC4899;\"></span> Samedi</span>
                        </div>
                    </div>
                    <div class=\"week-nav\">
                        <button class=\"week-nav-btn\" id=\"prevWeek\">
                            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M15 18l-6-6 6-6\"/>
                            </svg>
                            Semaine précédente
                        </button>
                        <button class=\"week-nav-btn active\" id=\"currentWeek\">
                            Aujourd'hui
                        </button>
                        <button class=\"week-nav-btn\" id=\"nextWeek\">
                            Semaine suivante
                            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <path d=\"M9 18l6-6-6-6\"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {% if seances is empty %}
                    <div class=\"empty-calendar\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" width=\"80\" height=\"80\">
                            <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                            <polyline points=\"12 6 12 12 16 14\"/>
                        </svg>
                        <h3 style=\"margin-top: 16px; font-size: 18px;\">Aucune séance programmée</h3>
                        <p style=\"color: var(--gray-500); margin-top: 8px;\">Il n'y a pas de cours prévus pour cette classe cette semaine.</p>
                    </div>
                {% else %}
                    {# Grille du calendrier #}
                    <div class=\"calendar-wrapper\">
                        <div class=\"calendar-grid\">
                            {# Colonne des heures #}
                            <div class=\"time-column\">
                                <div class=\"time-header\">Heure</div>
                                {% for hour in 8..19 %}
                                    <div class=\"time-slot\">
                                        {{ \"%02d:00\"|format(hour) }}
                                    </div>
                                {% endfor %}
                            </div>

                            {# Colonnes des jours - CORRECTION: Plus d'appel à date_modify #}
                            <div class=\"day-columns\">
                                {% set jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'] %}
                                {% set jours_ordre = {'Lundi': 1, 'Mardi': 2, 'Mercredi': 3, 'Jeudi': 4, 'Vendredi': 5, 'Samedi': 6} %}
                                
                                {% for jour in jours %}
                                    <div class=\"day-column\" data-day=\"{{ jour }}\">
                                        <div class=\"day-header\">
                                            <span class=\"day-name\">{{ jour }}</span>
                                            {# On affiche juste le jour sans la date pour éviter l'erreur #}
                                            <span class=\"day-date\">{{ jour|slice(0, 3) }}</span>
                                        </div>
                                        
                                        {# Cellules horaires #}
                                      {# Cellules horaires #}
{% for hour in 8..19 %}
    <div class=\"day-cell\" data-hour=\"{{ hour }}\" data-day=\"{{ jour }}\">
        {# Placer les séances correspondantes #}
        {% for seance in seances %}
            {% if seance.jour == jour and seance.heureDebut and seance.heureFin %}
                {% set debut = seance.heureDebut|date('U') %}
                {% set fin = seance.heureFin|date('U') %}
                {% set heureDebut = seance.heureDebut|date('H') %}
                {% set minuteDebut = seance.heureDebut|date('i') %}
                {% set dureeMinutes = (fin - debut) / 60 %}
                
                {# Calcul de la position #}
                {% if heureDebut == hour %}
                    {% set topPosition = (minuteDebut / 60) * 100 %}
                    {% set heightEvent = (dureeMinutes / 60) * 100 %}
                    
                    {# Préparer les données de la séance pour le modal - CORRECTION ICI #}
                    {% set seanceData = {
                        'matiere': seance.matiere,
                        'type': seance.type|default('Cours'),
                        'jour': seance.jour,
                        'heureDebut': seance.heureDebut ? seance.heureDebut|date('H:i') : null,
                        'heureFin': seance.heureFin ? seance.heureFin|date('H:i') : null,
                        'salle': seance.salle ? {'name': seance.salle.name} : null
                    } %}
                    
                    <div class=\"calendar-event\" 
                         data-day=\"{{ jour }}\"
                         data-seance-id=\"{{ seance.id }}\"
                         style=\"top: {{ topPosition }}%; height: {{ heightEvent }}%;\"
                         onclick='openSeanceModal({{ seanceData|json_encode|raw }})'>
                        
                        <div class=\"event-title\">{{ seance.matiere }}</div>
                        <div class=\"event-time\">
                            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                <polyline points=\"12 6 12 12 16 14\"/>
                            </svg>
                            {{ seance.heureDebut|date('H:i') }} - {{ seance.heureFin|date('H:i') }}
                        </div>
                        <div class=\"event-location\">
                            <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"2\" ry=\"2\"/>
                                <path d=\"M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                            </svg>
                            {{ seance.salle ? seance.salle.name : 'Salle non définie' }}
                        </div>
                        <span class=\"event-type\">{{ seance.type|default('Cours')|slice(0, 3) }}</span>
                    </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
{% endfor %}
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>

            {# Modal de détail d'une séance #}
            <div class=\"modal\" id=\"seanceModal\">
                <div class=\"modal-content\">
                    <button class=\"modal-close\" onclick=\"closeModal()\">
                        <svg width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"/><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"/>
                        </svg>
                    </button>
                    <div class=\"modal-header\">
                        <h3 class=\"modal-title\" id=\"modalMatiere\">Matière</h3>
                        <span class=\"task-status\" style=\"background: var(--primary-red-light); color: var(--primary-red);\" id=\"modalType\">Cours</span>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"modal-detail-item\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                            </svg>
                            <div>
                                <strong>Jour et heure</strong><br>
                                <span id=\"modalJourHeure\"></span>
                            </div>
                        </div>
                        <div class=\"modal-detail-item\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"2\" ry=\"2\"/>
                                <path d=\"M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                            </svg>
                            <div>
                                <strong>Salle</strong><br>
                                <span id=\"modalSalle\"></span>
                            </div>
                        </div>
                        <div class=\"modal-detail-item\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                <polyline points=\"12 6 12 12 16 14\"/>
                            </svg>
                            <div>
                                <strong>Durée</strong><br>
                                <span id=\"modalDuree\"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

        <div class=\"footer\">
            <p>ESPRIT Assistant Étudiant • Emploi du temps {{ classe.nom ?? '' }} • © {{ \"now\"|date(\"Y\") }}</p>
        </div>
    </main>
</div>

<script>
    // Fonctions pour la modal
    function openSeanceModal(seanceData) {
        const modal = document.getElementById('seanceModal');
        
        // Remplir les informations
        document.getElementById('modalMatiere').textContent = seanceData.matiere || 'Matière non définie';
        document.getElementById('modalType').textContent = seanceData.type || 'Cours';
        
        const jourHeure = `\${seanceData.jour || ''} \${seanceData.heureDebut || '--:--'} - \${seanceData.heureFin || '--:--'}`;
        document.getElementById('modalJourHeure').textContent = jourHeure;
        
        const salle = seanceData.salle ? (seanceData.salle.name || 'Non définie') : 'Non définie';
        document.getElementById('modalSalle').textContent = salle;
        
        // Calcul approximatif de la durée (à adapter selon votre structure de données)
        if (seanceData.heureDebut && seanceData.heureFin) {
            // Version simplifiée - dans un cas réel, il faudrait calculer la différence
            document.getElementById('modalDuree').textContent = '1.5 heures';
        } else {
            document.getElementById('modalDuree').textContent = 'Durée non définie';
        }
        
        modal.classList.add('active');
    }

    function closeModal() {
        document.getElementById('seanceModal').classList.remove('active');
    }

    // Fermer la modal en cliquant en dehors
    window.onclick = function(event) {
        const modal = document.getElementById('seanceModal');
        if (event.target === modal) {
            modal.classList.remove('active');
        }
    }

    // Navigation et activation des liens
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav a');
        
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });

        // Gestionnaires pour les boutons de semaine (à implémenter selon vos besoins)
        const prevBtn = document.getElementById('prevWeek');
        const nextBtn = document.getElementById('nextWeek');
        const todayBtn = document.getElementById('currentWeek');

        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                // Redirection vers la semaine précédente
                // window.location.href = \"{{ path('app_seance_by_classe', {'id': classe.id}) }}?week=-1\";
                console.log('Semaine précédente');
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                console.log('Semaine suivante');
            });
        }

        if (todayBtn) {
            todayBtn.addEventListener('click', function() {
                console.log('Semaine actuelle');
            });
        }
    });
</script>

{% endblock %}", "seance/schedule.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\seance\\schedule.html.twig");
    }
}
