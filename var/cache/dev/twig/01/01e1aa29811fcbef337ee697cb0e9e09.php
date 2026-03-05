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

/* user/classe/front_audit.html.twig */
class __TwigTemplate_c60a80b2e4f62dd874e849d5ba5ead21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_audit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_audit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Audit de Charge ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --secondary: #10B981;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-700: #374151;
            --gray-900: #111827;
            --radius-xl: 16px;
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            padding: 40px;
        }

        .container { max-width: 1000px; margin: 0 auto; }
        .back-link { margin-bottom: 24px; display: inline-block; color: var(--primary-red); text-decoration: none; font-weight: 600; }
        
        .header { margin-bottom: 32px; }
        .h1 { font-size: 32px; font-weight: 800; margin-bottom: 8px; }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: white;
            padding: 24px;
            border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
            text-align: center;
        }

        .stat-value { font-size: 36px; font-weight: 800; color: var(--primary-red); margin-bottom: 8px; }
        .stat-label { font-size: 14px; color: var(--gray-500); font-weight: 600; text-transform: uppercase; }

        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 99px;
            font-weight: 700;
            font-size: 14px;
            background: var(--secondary);
            color: white;
            margin-top: 12px;
        }

        .status-badge.danger { background: var(--primary-red); }

        .detail-card {
            background: white;
            border-radius: var(--radius-xl);
            padding: 32px;
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
        }

        .matiere-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
            border-bottom: 1px solid var(--gray-50);
        }

        .matiere-info h4 { font-size: 16px; font-weight: 700; color: var(--gray-900); }
        .matiere-info p { font-size: 13px; color: var(--gray-500); }

        .complexity-indicator {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 150px;
        }

        .progress-bg { flex: 1; height: 6px; background: var(--gray-100); border-radius: 3px; overflow: hidden; }
        .progress-fill { height: 100%; background: var(--primary-red); border-radius: 3px; }
    </style>
</head>
<body>
    <div class=\"container\">
        <a href=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
        yield "\" class=\"back-link\">← Retour au tableau de bord</a>
        
        <header class=\"header\">
            <h1 class=\"h1\">Audit de Charge Académique</h1>
            <p style=\"color: var(--gray-500);\">Analyse détaillée de la charge de travail pour <strong>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 108, $this->source); })()), "nom", [], "any", false, false, false, 108), "html", null, true);
        yield "</strong>.</p>
            
            <div class=\"status-badge ";
        // line 110
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 110, $this->source); })()), "surcharge", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "danger";
        }
        yield "\">
                ";
        // line 111
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 111, $this->source); })()), "surcharge", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "⚠️ Charge Critique (Surcharge détectée)";
        } else {
            yield "✅ Charge Équilibrée";
        }
        // line 112
        yield "            </div>
        </header>

        <div class=\"stats-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 117, $this->source); })()), "totalComplexite", [], "any", false, false, false, 117), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Score Complexité</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 121, $this->source); })()), "totalHeures", [], "any", false, false, false, 121), "html", null, true);
        yield "h</div>
                <div class=\"stat-label\">Volume Horaire</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 125, $this->source); })()), "complexiteMoyenne", [], "any", false, false, false, 125), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Moyenne / 10</div>
            </div>
        </div>

        <div class=\"detail-card\">
            <h3 style=\"margin-bottom: 24px;\">Détails par matière</h3>
            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workload"]) || array_key_exists("workload", $context) ? $context["workload"] : (function () { throw new RuntimeError('Variable "workload" does not exist.', 132, $this->source); })()), "matieres", [], "any", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 133
            yield "                <div class=\"matiere-row\">
                    <div class=\"matiere-info\">
                        <h4>";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 135), "html", null, true);
            yield "</h4>
                        <p>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "chargehoraire", [], "any", false, false, false, 136), "html", null, true);
            yield " heures • Coefficient ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "coefficient", [], "any", false, false, false, 136), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"complexity-indicator\">
                        <span style=\"font-size: 14px; font-weight: 700; color: var(--gray-700);\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "scorecomplexite", [], "any", false, false, false, 139), "html", null, true);
            yield "/10</span>
                        <div class=\"progress-bg\">
                            <div class=\"progress-fill\" style=\"width: ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "scorecomplexite", [], "any", false, false, false, 141) * 10), "html", null, true);
            yield "%;\"></div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/classe/front_audit.html.twig";
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
        return array (  247 => 146,  236 => 141,  231 => 139,  223 => 136,  219 => 135,  215 => 133,  211 => 132,  201 => 125,  194 => 121,  187 => 117,  180 => 112,  174 => 111,  168 => 110,  163 => 108,  156 => 104,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Audit de Charge {{ classe.nom }}</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --secondary: #10B981;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-700: #374151;
            --gray-900: #111827;
            --radius-xl: 16px;
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            padding: 40px;
        }

        .container { max-width: 1000px; margin: 0 auto; }
        .back-link { margin-bottom: 24px; display: inline-block; color: var(--primary-red); text-decoration: none; font-weight: 600; }
        
        .header { margin-bottom: 32px; }
        .h1 { font-size: 32px; font-weight: 800; margin-bottom: 8px; }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: white;
            padding: 24px;
            border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
            text-align: center;
        }

        .stat-value { font-size: 36px; font-weight: 800; color: var(--primary-red); margin-bottom: 8px; }
        .stat-label { font-size: 14px; color: var(--gray-500); font-weight: 600; text-transform: uppercase; }

        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 99px;
            font-weight: 700;
            font-size: 14px;
            background: var(--secondary);
            color: white;
            margin-top: 12px;
        }

        .status-badge.danger { background: var(--primary-red); }

        .detail-card {
            background: white;
            border-radius: var(--radius-xl);
            padding: 32px;
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
        }

        .matiere-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
            border-bottom: 1px solid var(--gray-50);
        }

        .matiere-info h4 { font-size: 16px; font-weight: 700; color: var(--gray-900); }
        .matiere-info p { font-size: 13px; color: var(--gray-500); }

        .complexity-indicator {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 150px;
        }

        .progress-bg { flex: 1; height: 6px; background: var(--gray-100); border-radius: 3px; overflow: hidden; }
        .progress-fill { height: 100%; background: var(--primary-red); border-radius: 3px; }
    </style>
</head>
<body>
    <div class=\"container\">
        <a href=\"{{ path('app_classe_front_show', {'id': classe.id}) }}\" class=\"back-link\">← Retour au tableau de bord</a>
        
        <header class=\"header\">
            <h1 class=\"h1\">Audit de Charge Académique</h1>
            <p style=\"color: var(--gray-500);\">Analyse détaillée de la charge de travail pour <strong>{{ classe.nom }}</strong>.</p>
            
            <div class=\"status-badge {% if workload.surcharge %}danger{% endif %}\">
                {% if workload.surcharge %}⚠️ Charge Critique (Surcharge détectée){% else %}✅ Charge Équilibrée{% endif %}
            </div>
        </header>

        <div class=\"stats-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ workload.totalComplexite }}</div>
                <div class=\"stat-label\">Score Complexité</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ workload.totalHeures }}h</div>
                <div class=\"stat-label\">Volume Horaire</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ workload.complexiteMoyenne }}</div>
                <div class=\"stat-label\">Moyenne / 10</div>
            </div>
        </div>

        <div class=\"detail-card\">
            <h3 style=\"margin-bottom: 24px;\">Détails par matière</h3>
            {% for m in workload.matieres %}
                <div class=\"matiere-row\">
                    <div class=\"matiere-info\">
                        <h4>{{ m.nom }}</h4>
                        <p>{{ m.chargehoraire }} heures • Coefficient {{ m.coefficient }}</p>
                    </div>
                    <div class=\"complexity-indicator\">
                        <span style=\"font-size: 14px; font-weight: 700; color: var(--gray-700);\">{{ m.scorecomplexite }}/10</span>
                        <div class=\"progress-bg\">
                            <div class=\"progress-fill\" style=\"width: {{ m.scorecomplexite * 10 }}%;\"></div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</body>
</html>
", "user/classe/front_audit.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\classe\\front_audit.html.twig");
    }
}
