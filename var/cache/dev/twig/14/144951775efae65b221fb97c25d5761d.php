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

/* user/classe/front_stats.html.twig */
class __TwigTemplate_6b31783dcb1014483d3877d0d1deb6a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_stats.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Statistiques ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        :root {
            --font-size: 16px;
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --secondary: #10B981;
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
            --radius-lg: 12px;
            --radius-xl: 16px;
            --transition: 250ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            padding: 40px 20px;
        }

        .container { max-width: 1000px; margin: 0 auto; }

        .header { margin-bottom: 40px; text-align: center; }
        .header h1 {
            font-size: 36px; font-weight: 800; color: var(--gray-900);
            background: var(--primary-gradient); -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .header p { color: var(--gray-500); font-size: 18px; margin-top: 8px; }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white; padding: 24px; border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200); box-shadow: var(--shadow-sm);
            text-align: center; transition: all var(--transition);
        }
        .stat-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
        .stat-card .value { font-size: 32px; font-weight: 800; color: var(--primary-red); display: block; }
        .stat-card .label { font-size: 14px; color: var(--gray-500); font-weight: 600; text-transform: uppercase; }

        .chart-container {
            background: white; border-radius: var(--radius-xl);
            padding: 40px; border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg); margin-bottom: 40px;
        }

        .chart-header { margin-bottom: 32px; border-bottom: 1px solid var(--gray-100); padding-bottom: 16px; }
        .chart-header h2 { font-size: 24px; font-weight: 700; color: var(--gray-800); }

        .bar-group { margin-bottom: 24px; }
        .bar-label { display: flex; justify-content: space-between; margin-bottom: 8px; font-weight: 600; font-size: 14px; }
        .bar-bg { background: var(--gray-100); height: 12px; border-radius: 6px; overflow: hidden; position: relative; }
        .bar-fill { height: 100%; border-radius: 6px; transition: width 1s ease-out; }
        
        .fill-low { background: var(--secondary); }
        .fill-mid { background: var(--warning); }
        .fill-high { background: var(--primary-red); }

        .legend { display: flex; gap: 24px; margin-top: 32px; justify-content: center; }
        .legend-item { display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--gray-600); }
        .dot { width: 12px; height: 12px; border-radius: 3px; }

        .footer { text-align: center; color: var(--gray-400); font-size: 14px; margin-top: 60px; }
        .btn-back {
            display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px;
            background: var(--gray-800); color: white; border-radius: var(--radius-lg);
            text-decoration: none; font-weight: 600; transition: all var(--transition);
            margin-bottom: 40px;
        }
        .btn-back:hover { background: var(--gray-900); transform: translateX(-4px); }
    </style>
</head>
<body>
    <div class=\"container\">
        <a href=\"javascript:history.back()\" class=\"btn-back\">
            <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M19 12H5M12 19l-7-7 7-7\"/>
            </svg>
            Retour à la classe
        </a>

        <header class=\"header\">
            <p>Analyse de la Classe</p>
            <h1>Statistiques ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 114, $this->source); })()), "nom", [], "any", false, false, false, 114), "html", null, true);
        yield "</h1>
            <p>";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 115, $this->source); })()), "filiere", [], "any", false, false, false, 115), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 115, $this->source); })()), "niveau", [], "any", false, false, false, 115), "html", null, true);
        yield "</p>
        </header>

        <div class=\"stats-grid\">
            <div class=\"stat-card\">
                <span class=\"value\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 120, $this->source); })()), "html", null, true);
        yield "</span>
                <span class=\"label\">Matières</span>
            </div>
            <div class=\"stat-card\">
                <span class=\"value\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalHeures"]) || array_key_exists("totalHeures", $context) ? $context["totalHeures"] : (function () { throw new RuntimeError('Variable "totalHeures" does not exist.', 124, $this->source); })()), "html", null, true);
        yield "h</span>
                <span class=\"label\">Charge Totale</span>
            </div>
            <div class=\"stat-card\">
                <span class=\"value\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complexiteMoyenne"]) || array_key_exists("complexiteMoyenne", $context) ? $context["complexiteMoyenne"] : (function () { throw new RuntimeError('Variable "complexiteMoyenne" does not exist.', 128, $this->source); })()), "html", null, true);
        yield "</span>
                <span class=\"label\">Complexité Moyenne</span>
            </div>
            <div class=\"stat-card\">
                <span class=\"value\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCoefficient"]) || array_key_exists("totalCoefficient", $context) ? $context["totalCoefficient"] : (function () { throw new RuntimeError('Variable "totalCoefficient" does not exist.', 132, $this->source); })()), "html", null, true);
        yield "</span>
                <span class=\"label\">Total Crédits / Coeff</span>
            </div>
        </div>

        <div class=\"chart-container\">
            ";
        // line 138
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 138, $this->source); })()) > 0)) {
            // line 139
            yield "                <div class=\"chart-header\">
                    <h2>Distribution de la Complexité</h2>
                </div>
                
                <div class=\"bar-group\">
                    <div class=\"bar-label\">
                        <span>Faible (Score 1-3)</span>
                        <span>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["faibleCount"]) || array_key_exists("faibleCount", $context) ? $context["faibleCount"] : (function () { throw new RuntimeError('Variable "faibleCount" does not exist.', 146, $this->source); })()), "html", null, true);
            yield " matières (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["faiblePercent"]) || array_key_exists("faiblePercent", $context) ? $context["faiblePercent"] : (function () { throw new RuntimeError('Variable "faiblePercent" does not exist.', 146, $this->source); })()), "html", null, true);
            yield "%)</span>
                    </div>
                    <div class=\"bar-bg\">
                        <div class=\"bar-fill fill-low\" style=\"width: ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["faiblePercent"]) || array_key_exists("faiblePercent", $context) ? $context["faiblePercent"] : (function () { throw new RuntimeError('Variable "faiblePercent" does not exist.', 149, $this->source); })()), "html", null, true);
            yield "%\"></div>
                    </div>
                </div>

                <div class=\"bar-group\">
                    <div class=\"bar-label\">
                        <span>Moyenne (Score 4-6)</span>
                        <span>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["moyenCount"]) || array_key_exists("moyenCount", $context) ? $context["moyenCount"] : (function () { throw new RuntimeError('Variable "moyenCount" does not exist.', 156, $this->source); })()), "html", null, true);
            yield " matières (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["moyenPercent"]) || array_key_exists("moyenPercent", $context) ? $context["moyenPercent"] : (function () { throw new RuntimeError('Variable "moyenPercent" does not exist.', 156, $this->source); })()), "html", null, true);
            yield "%)</span>
                    </div>
                    <div class=\"bar-bg\">
                        <div class=\"bar-fill fill-mid\" style=\"width: ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["moyenPercent"]) || array_key_exists("moyenPercent", $context) ? $context["moyenPercent"] : (function () { throw new RuntimeError('Variable "moyenPercent" does not exist.', 159, $this->source); })()), "html", null, true);
            yield "%\"></div>
                    </div>
                </div>

                <div class=\"bar-group\">
                    <div class=\"bar-label\">
                        <span>Élevée (Score 7-10)</span>
                        <span>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eleveCount"]) || array_key_exists("eleveCount", $context) ? $context["eleveCount"] : (function () { throw new RuntimeError('Variable "eleveCount" does not exist.', 166, $this->source); })()), "html", null, true);
            yield " matières (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["elevePercent"]) || array_key_exists("elevePercent", $context) ? $context["elevePercent"] : (function () { throw new RuntimeError('Variable "elevePercent" does not exist.', 166, $this->source); })()), "html", null, true);
            yield "%)</span>
                    </div>
                    <div class=\"bar-bg\">
                        <div class=\"bar-fill fill-high\" style=\"width: ";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["elevePercent"]) || array_key_exists("elevePercent", $context) ? $context["elevePercent"] : (function () { throw new RuntimeError('Variable "elevePercent" does not exist.', 169, $this->source); })()), "html", null, true);
            yield "%\"></div>
                    </div>
                </div>

                <div class=\"legend\">
                    <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--secondary)\"></span> Tranquille</div>
                    <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--warning)\"></span> Modérée</div>
                    <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--primary-red)\"></span> Intensive</div>
                </div>
            ";
        } else {
            // line 179
            yield "                <div style=\"text-align: center; padding: 40px;\">
                    <div style=\"font-size: 48px; margin-bottom: 16px;\">🔍</div>
                    <h2 style=\"color: var(--gray-800); margin-bottom: 8px;\">Aucune donnée disponible</h2>
                    <p style=\"color: var(--gray-500);\">Il n'y a pas encore de matières assignées à cette classe pour générer des statistiques.</p>
                </div>
            ";
        }
        // line 185
        yield "        </div>

        <footer class=\"footer\">
            &copy; 2026 ESPRIT — Généré par l'Assistant Académique
        </footer>
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
        return "user/classe/front_stats.html.twig";
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
        return array (  286 => 185,  278 => 179,  265 => 169,  257 => 166,  247 => 159,  239 => 156,  229 => 149,  221 => 146,  212 => 139,  210 => 138,  201 => 132,  194 => 128,  187 => 124,  180 => 120,  170 => 115,  166 => 114,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Statistiques {{ classe.nom }}</title>
    <style>
        :root {
            --font-size: 16px;
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --secondary: #10B981;
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
            --radius-lg: 12px;
            --radius-xl: 16px;
            --transition: 250ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
            padding: 40px 20px;
        }

        .container { max-width: 1000px; margin: 0 auto; }

        .header { margin-bottom: 40px; text-align: center; }
        .header h1 {
            font-size: 36px; font-weight: 800; color: var(--gray-900);
            background: var(--primary-gradient); -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .header p { color: var(--gray-500); font-size: 18px; margin-top: 8px; }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white; padding: 24px; border-radius: var(--radius-lg);
            border: 1px solid var(--gray-200); box-shadow: var(--shadow-sm);
            text-align: center; transition: all var(--transition);
        }
        .stat-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
        .stat-card .value { font-size: 32px; font-weight: 800; color: var(--primary-red); display: block; }
        .stat-card .label { font-size: 14px; color: var(--gray-500); font-weight: 600; text-transform: uppercase; }

        .chart-container {
            background: white; border-radius: var(--radius-xl);
            padding: 40px; border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg); margin-bottom: 40px;
        }

        .chart-header { margin-bottom: 32px; border-bottom: 1px solid var(--gray-100); padding-bottom: 16px; }
        .chart-header h2 { font-size: 24px; font-weight: 700; color: var(--gray-800); }

        .bar-group { margin-bottom: 24px; }
        .bar-label { display: flex; justify-content: space-between; margin-bottom: 8px; font-weight: 600; font-size: 14px; }
        .bar-bg { background: var(--gray-100); height: 12px; border-radius: 6px; overflow: hidden; position: relative; }
        .bar-fill { height: 100%; border-radius: 6px; transition: width 1s ease-out; }
        
        .fill-low { background: var(--secondary); }
        .fill-mid { background: var(--warning); }
        .fill-high { background: var(--primary-red); }

        .legend { display: flex; gap: 24px; margin-top: 32px; justify-content: center; }
        .legend-item { display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--gray-600); }
        .dot { width: 12px; height: 12px; border-radius: 3px; }

        .footer { text-align: center; color: var(--gray-400); font-size: 14px; margin-top: 60px; }
        .btn-back {
            display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px;
            background: var(--gray-800); color: white; border-radius: var(--radius-lg);
            text-decoration: none; font-weight: 600; transition: all var(--transition);
            margin-bottom: 40px;
        }
        .btn-back:hover { background: var(--gray-900); transform: translateX(-4px); }
    </style>
</head>
<body>
    <div class=\"container\">
        <a href=\"javascript:history.back()\" class=\"btn-back\">
            <svg style=\"width:18px;height:18px;\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M19 12H5M12 19l-7-7 7-7\"/>
            </svg>
            Retour à la classe
        </a>

        <header class=\"header\">
            <p>Analyse de la Classe</p>
            <h1>Statistiques {{ classe.nom }}</h1>
            <p>{{ classe.filiere }} — {{ classe.niveau }}</p>
        </header>

        <div class=\"stats-grid\">
            <div class=\"stat-card\">
                <span class=\"value\">{{ total }}</span>
                <span class=\"label\">Matières</span>
            </div>
            <div class=\"stat-card\">
                <span class=\"value\">{{ totalHeures }}h</span>
                <span class=\"label\">Charge Totale</span>
            </div>
            <div class=\"stat-card\">
                <span class=\"value\">{{ complexiteMoyenne }}</span>
                <span class=\"label\">Complexité Moyenne</span>
            </div>
            <div class=\"stat-card\">
                <span class=\"value\">{{ totalCoefficient }}</span>
                <span class=\"label\">Total Crédits / Coeff</span>
            </div>
        </div>

        <div class=\"chart-container\">
            {% if total > 0 %}
                <div class=\"chart-header\">
                    <h2>Distribution de la Complexité</h2>
                </div>
                
                <div class=\"bar-group\">
                    <div class=\"bar-label\">
                        <span>Faible (Score 1-3)</span>
                        <span>{{ faibleCount }} matières ({{ faiblePercent }}%)</span>
                    </div>
                    <div class=\"bar-bg\">
                        <div class=\"bar-fill fill-low\" style=\"width: {{ faiblePercent }}%\"></div>
                    </div>
                </div>

                <div class=\"bar-group\">
                    <div class=\"bar-label\">
                        <span>Moyenne (Score 4-6)</span>
                        <span>{{ moyenCount }} matières ({{ moyenPercent }}%)</span>
                    </div>
                    <div class=\"bar-bg\">
                        <div class=\"bar-fill fill-mid\" style=\"width: {{ moyenPercent }}%\"></div>
                    </div>
                </div>

                <div class=\"bar-group\">
                    <div class=\"bar-label\">
                        <span>Élevée (Score 7-10)</span>
                        <span>{{ eleveCount }} matières ({{ elevePercent }}%)</span>
                    </div>
                    <div class=\"bar-bg\">
                        <div class=\"bar-fill fill-high\" style=\"width: {{ elevePercent }}%\"></div>
                    </div>
                </div>

                <div class=\"legend\">
                    <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--secondary)\"></span> Tranquille</div>
                    <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--warning)\"></span> Modérée</div>
                    <div class=\"legend-item\"><span class=\"dot\" style=\"background:var(--primary-red)\"></span> Intensive</div>
                </div>
            {% else %}
                <div style=\"text-align: center; padding: 40px;\">
                    <div style=\"font-size: 48px; margin-bottom: 16px;\">🔍</div>
                    <h2 style=\"color: var(--gray-800); margin-bottom: 8px;\">Aucune donnée disponible</h2>
                    <p style=\"color: var(--gray-500);\">Il n'y a pas encore de matières assignées à cette classe pour générer des statistiques.</p>
                </div>
            {% endif %}
        </div>

        <footer class=\"footer\">
            &copy; 2026 ESPRIT — Généré par l'Assistant Académique
        </footer>
    </div>
</body>
</html>
", "user/classe/front_stats.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\classe\\front_stats.html.twig");
    }
}
