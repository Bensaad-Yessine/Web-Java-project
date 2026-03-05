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

/* classe/generate.html.twig */
class __TwigTemplate_df021d6a1462cbd5567416aa0e0a011b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/generate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/generate.html.twig"));

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

        yield "Générer le Programme - ";
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
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Générer le Programme - ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --secondary: #10B981;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-700: #374151;
            --gray-900: #111827;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            min-height: 100vh;
            margin: 0;
            padding: 40px 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .card-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        
        .card-header p {
            margin: 10px 0 0;
            opacity: 0.9;
        }
        
        .card-body {
            padding: 30px;
        }
        
        .info-box {
            background: var(--gray-50);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--gray-200);
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-weight: 600;
            color: var(--gray-700);
        }
        
        .info-value {
            color: var(--primary-red);
            font-weight: 700;
        }
        
        .warning-box {
            background: #FEF3C7;
            border: 1px solid #F59E0B;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            color: #92400E;
        }
        
        .warning-box h4 {
            margin: 0 0 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            background: var(--gray-50);
            border-radius: 8px;
            cursor: pointer;
        }
        
        .form-check input {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        
        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
        }
        
        .btn-secondary {
            background: var(--gray-100);
            color: var(--gray-700);
        }
        
        .btn-secondary:hover {
            background: var(--gray-200);
        }
        
        .features-list {
            margin: 20px 0;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: var(--gray-50);
            border-radius: 8px;
            margin-bottom: 10px;
        }
        
        .feature-icon {
            width: 36px;
            height: 36px;
            background: var(--primary-red-light);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        
        .feature-text {
            flex: 1;
        }
        
        .feature-title {
            font-weight: 600;
            color: var(--gray-900);
            font-size: 14px;
        }
        
        .feature-desc {
            font-size: 12px;
            color: var(--gray-700);
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h1>🎓 Générer Votre Programme</h1>
                <p>Classe: ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 215, $this->source); })()), "nom", [], "any", false, false, false, 215), "html", null, true);
        yield "</p>
            </div>
            
            <div class=\"card-body\">
                <div class=\"info-box\">
                    <div class=\"info-item\">
                        <span class=\"info-label\">Classe</span>
                        <span class=\"info-value\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 222, $this->source); })()), "nom", [], "any", false, false, false, 222), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\">Nombre de matières</span>
                        <span class=\"info-value\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matiereCount"]) || array_key_exists("matiereCount", $context) ? $context["matiereCount"] : (function () { throw new RuntimeError('Variable "matiereCount" does not exist.', 226, $this->source); })()), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\">Niveau</span>
                        <span class=\"info-value\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 230, $this->source); })()), "niveau", [], "any", false, false, false, 230), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                ";
        // line 234
        if ((($tmp = (isset($context["hasExistingData"]) || array_key_exists("hasExistingData", $context) ? $context["hasExistingData"] : (function () { throw new RuntimeError('Variable "hasExistingData" does not exist.', 234, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "                <div class=\"warning-box\">
                    <h4>⚠️ Données existantes</h4>
                    <p>Des séances et tâches ont déjà été générées pour cette classe. Voulez-vous les remplacer ?</p>
                    <div class=\"form-group\" style=\"margin-top: 15px;\">
                        <label class=\"form-check\">
                            <input type=\"checkbox\" name=\"clear_existing\" value=\"1\">
                            <span>Oui, remplacer les données existantes</span>
                        </label>
                    </div>
                </div>
                ";
        }
        // line 246
        yield "                
                <h3 style=\"margin: 25px 0 15px; color: var(--gray-900);\">Ce qui sera généré :</h3>
                
                <div class=\"features-list\">
                    <div class=\"feature-item\">
                        <div class=\"feature-icon\">📅</div>
                        <div class=\"feature-text\">
                            <div class=\"feature-title\">Séances</div>
                            <div class=\"feature-desc\">Répartition des heures de cours sur la semaine</div>
                        </div>
                    </div>
                    
                    <div class=\"feature-item\">
                        <div class=\"feature-icon\">✅</div>
                        <div class=\"feature-text\">
                            <div class=\"feature-title\">Tâches</div>
                            <div class=\"feature-desc\">Exercices et révisions pour chaque matière</div>
                        </div>
                    </div>
                    
                    <div class=\"feature-item\">
                        <div class=\"feature-icon\">🏫</div>
                        <div class=\"feature-text\">
                            <div class=\"feature-title\">Salles</div>
                            <div class=\"feature-desc\">Attribution automatique des salles disponibles</div>
                        </div>
                    </div>
                </div>
                
                <form method=\"post\" action=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_generate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 275, $this->source); })()), "id", [], "any", false, false, false, 275)]), "html", null, true);
        yield "\">
                    <div class=\"btn-group\">
                        <a href=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 277, $this->source); })()), "id", [], "any", false, false, false, 277)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                            ← Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            🚀 Générer le Programme
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
        return "classe/generate.html.twig";
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
        return array (  397 => 277,  392 => 275,  361 => 246,  348 => 235,  346 => 234,  339 => 230,  332 => 226,  325 => 222,  315 => 215,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Générer le Programme - {{ classe.nom }}{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Générer le Programme - {{ classe.nom }}</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --secondary: #10B981;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-700: #374151;
            --gray-900: #111827;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            min-height: 100vh;
            margin: 0;
            padding: 40px 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .card-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        
        .card-header p {
            margin: 10px 0 0;
            opacity: 0.9;
        }
        
        .card-body {
            padding: 30px;
        }
        
        .info-box {
            background: var(--gray-50);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--gray-200);
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-weight: 600;
            color: var(--gray-700);
        }
        
        .info-value {
            color: var(--primary-red);
            font-weight: 700;
        }
        
        .warning-box {
            background: #FEF3C7;
            border: 1px solid #F59E0B;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            color: #92400E;
        }
        
        .warning-box h4 {
            margin: 0 0 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            background: var(--gray-50);
            border-radius: 8px;
            cursor: pointer;
        }
        
        .form-check input {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        
        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
        }
        
        .btn-secondary {
            background: var(--gray-100);
            color: var(--gray-700);
        }
        
        .btn-secondary:hover {
            background: var(--gray-200);
        }
        
        .features-list {
            margin: 20px 0;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: var(--gray-50);
            border-radius: 8px;
            margin-bottom: 10px;
        }
        
        .feature-icon {
            width: 36px;
            height: 36px;
            background: var(--primary-red-light);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        
        .feature-text {
            flex: 1;
        }
        
        .feature-title {
            font-weight: 600;
            color: var(--gray-900);
            font-size: 14px;
        }
        
        .feature-desc {
            font-size: 12px;
            color: var(--gray-700);
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h1>🎓 Générer Votre Programme</h1>
                <p>Classe: {{ classe.nom }}</p>
            </div>
            
            <div class=\"card-body\">
                <div class=\"info-box\">
                    <div class=\"info-item\">
                        <span class=\"info-label\">Classe</span>
                        <span class=\"info-value\">{{ classe.nom }}</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\">Nombre de matières</span>
                        <span class=\"info-value\">{{ matiereCount }}</span>
                    </div>
                    <div class=\"info-item\">
                        <span class=\"info-label\">Niveau</span>
                        <span class=\"info-value\">{{ classe.niveau }}</span>
                    </div>
                </div>
                
                {% if hasExistingData %}
                <div class=\"warning-box\">
                    <h4>⚠️ Données existantes</h4>
                    <p>Des séances et tâches ont déjà été générées pour cette classe. Voulez-vous les remplacer ?</p>
                    <div class=\"form-group\" style=\"margin-top: 15px;\">
                        <label class=\"form-check\">
                            <input type=\"checkbox\" name=\"clear_existing\" value=\"1\">
                            <span>Oui, remplacer les données existantes</span>
                        </label>
                    </div>
                </div>
                {% endif %}
                
                <h3 style=\"margin: 25px 0 15px; color: var(--gray-900);\">Ce qui sera généré :</h3>
                
                <div class=\"features-list\">
                    <div class=\"feature-item\">
                        <div class=\"feature-icon\">📅</div>
                        <div class=\"feature-text\">
                            <div class=\"feature-title\">Séances</div>
                            <div class=\"feature-desc\">Répartition des heures de cours sur la semaine</div>
                        </div>
                    </div>
                    
                    <div class=\"feature-item\">
                        <div class=\"feature-icon\">✅</div>
                        <div class=\"feature-text\">
                            <div class=\"feature-title\">Tâches</div>
                            <div class=\"feature-desc\">Exercices et révisions pour chaque matière</div>
                        </div>
                    </div>
                    
                    <div class=\"feature-item\">
                        <div class=\"feature-icon\">🏫</div>
                        <div class=\"feature-text\">
                            <div class=\"feature-title\">Salles</div>
                            <div class=\"feature-desc\">Attribution automatique des salles disponibles</div>
                        </div>
                    </div>
                </div>
                
                <form method=\"post\" action=\"{{ path('app_classe_generate', {id: classe.id}) }}\">
                    <div class=\"btn-group\">
                        <a href=\"{{ path('app_classe_front_show', {id: classe.id}) }}\" class=\"btn btn-secondary\">
                            ← Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            🚀 Générer le Programme
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
{% endblock %}
", "classe/generate.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\generate.html.twig");
    }
}
