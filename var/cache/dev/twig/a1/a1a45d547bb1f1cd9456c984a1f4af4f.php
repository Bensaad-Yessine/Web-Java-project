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

/* user/matiere_classe/front_index.html.twig */
class __TwigTemplate_ae2e2a0620518fa1b6e7bae5b8b66288 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/matiere_classe/front_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/matiere_classe/front_index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Mes Matières</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
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
            font-family: 'Inter', -apple-system, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
        }

        .app-shell { display: flex; min-height: 100vh; }

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
        }

        .main { flex: 1; padding: 40px; max-width: 1400px; margin: 0 auto; width: 100%; }

        .header { margin-bottom: 40px; }
        .h1 { font-size: 36px; font-weight: 800; color: var(--gray-900); }

        .matiere-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 24px;
        }

        .matiere-card {
            background: white;
            border-radius: var(--radius-xl);
            padding: 28px;
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-md);
            transition: all var(--transition);
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .matiere-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-red-light);
        }

        .matiere-title { font-size: 20px; font-weight: 700; color: var(--gray-900); }
        
        .prerequis-section {
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid var(--gray-100);
        }

        .prerequis-title {
            font-size: 11px;
            font-weight: 700;
            color: var(--gray-400);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 4px;
            margin-top: 4px;
        }

        .badge-red { background: var(--primary-red-light); color: var(--primary-red); }
        .badge-blue { background: #DBEAFE; color: #1E40AF; }
        .badge-gray { background: var(--gray-100); color: var(--gray-600); }

        .complexity-bar {
            height: 6px;
            background: var(--gray-100);
            border-radius: 3px;
            overflow: hidden;
            margin-top: 8px;
        }
        .complexity-fill {
            height: 100%;
            background: var(--primary-gradient);
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <aside class=\"sidebar\">
            <div style=\"font-weight: 800; font-size: 20px; color: var(--primary-red); margin-bottom: 32px;\">ESPRIT</div>
            <nav style=\"display: flex; flex-direction: column; gap: 8px;\">
                <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" style=\"text-decoration: none; color: var(--gray-700); padding: 12px; border-radius: 8px;\">🏠 Tableau de bord</a>
                <a href=\"#\" style=\"text-decoration: none; background: var(--primary-red-light); color: var(--primary-red); padding: 12px; border-radius: 8px; font-weight: 600;\">📚 Mes Matières</a>
                ";
        // line 135
        if ((($tmp = (isset($context["userClasse"]) || array_key_exists("userClasse", $context) ? $context["userClasse"] : (function () { throw new RuntimeError('Variable "userClasse" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["userClasse"]) || array_key_exists("userClasse", $context) ? $context["userClasse"] : (function () { throw new RuntimeError('Variable "userClasse" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" style=\"text-decoration: none; color: var(--gray-700); padding: 12px; border-radius: 8px;\">🏫 Ma Classe</a>
                ";
        }
        // line 138
        yield "            </nav>
        </aside>

        <main class=\"main\">
            <header class=\"header\">
                <h1 class=\"h1\">Mes Matières Académiques</h1>
                <p style=\"color: var(--gray-500);\">Retrouvez ici le détail de vos cours et les liens de pré-requis.</p>
            </header>

            <div class=\"matiere-grid\">
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 148, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 149
            yield "                    <div class=\"matiere-card\">
                        <div style=\"display: flex; justify-content: space-between; align-items: flex-start;\">
                            <h2 class=\"matiere-title\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 151), "html", null, true);
            yield "</h2>
                            <span class=\"badge badge-blue\">Coeff ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "coefficient", [], "any", false, false, false, 152), "html", null, true);
            yield "</span>
                        </div>
                        
                        <p style=\"font-size: 14px; color: var(--gray-600); line-height: 1.5;\">";
            // line 155
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 155)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 155), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "description", [], "any", false, false, false, 155), "html", null, true)));
            yield "</p>
                        
                        <div>
                            <div style=\"display: flex; justify-content: space-between; font-size: 12px; margin-bottom: 4px;\">
                                <span style=\"font-weight: 600;\">Complexité</span>
                                <span style=\"color: var(--primary-red);\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "scorecomplexite", [], "any", false, false, false, 160), "html", null, true);
            yield "/10</span>
                            </div>
                            <div class=\"complexity-bar\">
                                <div class=\"complexity-fill\" style=\"width: ";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "scorecomplexite", [], "any", false, false, false, 163) * 10), "html", null, true);
            yield "%;\"></div>
                            </div>
                        </div>

                        <div class=\"prerequis-section\">
                            <div class=\"prerequis-title\">Pré-requis nécessaires</div>
                            ";
            // line 169
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "prerequis", [], "any", false, false, false, 169)) > 0)) {
                // line 170
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "prerequis", [], "any", false, false, false, 170));
                foreach ($context['_seq'] as $context["_key"] => $context["pre"]) {
                    // line 171
                    yield "                                    <span class=\"badge badge-red\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pre"], "nom", [], "any", false, false, false, 171), "html", null, true);
                    yield "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['pre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                yield "                            ";
            } else {
                // line 174
                yield "                                <span class=\"badge badge-gray\">Aucun pré-requis</span>
                            ";
            }
            // line 176
            yield "                        </div>

                        <div style=\"margin-top: auto; display: flex; gap: 8px;\">
                            <span class=\"badge badge-gray\" style=\"font-size: 11px;\">⏱️ ";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "chargehoraire", [], "any", false, false, false, 179), "html", null, true);
            yield "h / sem</span>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 182
        if (!$context['_iterated']) {
            // line 183
            yield "                    <div style=\"grid-column: 1 / -1; text-align: center; padding: 60px; color: var(--gray-400);\">
                        Aucune matière trouvée pour votre classe.
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiere'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "            </div>
        </main>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/matiere_classe/front_index.html.twig";
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
        return array (  296 => 187,  287 => 183,  285 => 182,  277 => 179,  272 => 176,  268 => 174,  265 => 173,  256 => 171,  251 => 170,  249 => 169,  240 => 163,  234 => 160,  226 => 155,  220 => 152,  216 => 151,  212 => 149,  207 => 148,  195 => 138,  189 => 136,  187 => 135,  182 => 133,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Mes Matières</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
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
            font-family: 'Inter', -apple-system, sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            line-height: 1.6;
        }

        .app-shell { display: flex; min-height: 100vh; }

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
        }

        .main { flex: 1; padding: 40px; max-width: 1400px; margin: 0 auto; width: 100%; }

        .header { margin-bottom: 40px; }
        .h1 { font-size: 36px; font-weight: 800; color: var(--gray-900); }

        .matiere-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 24px;
        }

        .matiere-card {
            background: white;
            border-radius: var(--radius-xl);
            padding: 28px;
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-md);
            transition: all var(--transition);
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .matiere-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-red-light);
        }

        .matiere-title { font-size: 20px; font-weight: 700; color: var(--gray-900); }
        
        .prerequis-section {
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid var(--gray-100);
        }

        .prerequis-title {
            font-size: 11px;
            font-weight: 700;
            color: var(--gray-400);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 4px;
            margin-top: 4px;
        }

        .badge-red { background: var(--primary-red-light); color: var(--primary-red); }
        .badge-blue { background: #DBEAFE; color: #1E40AF; }
        .badge-gray { background: var(--gray-100); color: var(--gray-600); }

        .complexity-bar {
            height: 6px;
            background: var(--gray-100);
            border-radius: 3px;
            overflow: hidden;
            margin-top: 8px;
        }
        .complexity-fill {
            height: 100%;
            background: var(--primary-gradient);
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class=\"app-shell\">
        <aside class=\"sidebar\">
            <div style=\"font-weight: 800; font-size: 20px; color: var(--primary-red); margin-bottom: 32px;\">ESPRIT</div>
            <nav style=\"display: flex; flex-direction: column; gap: 8px;\">
                <a href=\"{{ path('app_dashboard') }}\" style=\"text-decoration: none; color: var(--gray-700); padding: 12px; border-radius: 8px;\">🏠 Tableau de bord</a>
                <a href=\"#\" style=\"text-decoration: none; background: var(--primary-red-light); color: var(--primary-red); padding: 12px; border-radius: 8px; font-weight: 600;\">📚 Mes Matières</a>
                {% if userClasse %}
                    <a href=\"{{ path('app_classe_front_show', {'id': userClasse.id}) }}\" style=\"text-decoration: none; color: var(--gray-700); padding: 12px; border-radius: 8px;\">🏫 Ma Classe</a>
                {% endif %}
            </nav>
        </aside>

        <main class=\"main\">
            <header class=\"header\">
                <h1 class=\"h1\">Mes Matières Académiques</h1>
                <p style=\"color: var(--gray-500);\">Retrouvez ici le détail de vos cours et les liens de pré-requis.</p>
            </header>

            <div class=\"matiere-grid\">
                {% for matiere in matieres %}
                    <div class=\"matiere-card\">
                        <div style=\"display: flex; justify-content: space-between; align-items: flex-start;\">
                            <h2 class=\"matiere-title\">{{ matiere.nom }}</h2>
                            <span class=\"badge badge-blue\">Coeff {{ matiere.coefficient }}</span>
                        </div>
                        
                        <p style=\"font-size: 14px; color: var(--gray-600); line-height: 1.5;\">{{ matiere.description|length > 100 ? matiere.description|slice(0, 100) ~ '...' : matiere.description }}</p>
                        
                        <div>
                            <div style=\"display: flex; justify-content: space-between; font-size: 12px; margin-bottom: 4px;\">
                                <span style=\"font-weight: 600;\">Complexité</span>
                                <span style=\"color: var(--primary-red);\">{{ matiere.scorecomplexite }}/10</span>
                            </div>
                            <div class=\"complexity-bar\">
                                <div class=\"complexity-fill\" style=\"width: {{ matiere.scorecomplexite * 10 }}%;\"></div>
                            </div>
                        </div>

                        <div class=\"prerequis-section\">
                            <div class=\"prerequis-title\">Pré-requis nécessaires</div>
                            {% if matiere.prerequis|length > 0 %}
                                {% for pre in matiere.prerequis %}
                                    <span class=\"badge badge-red\">{{ pre.nom }}</span>
                                {% endfor %}
                            {% else %}
                                <span class=\"badge badge-gray\">Aucun pré-requis</span>
                            {% endif %}
                        </div>

                        <div style=\"margin-top: auto; display: flex; gap: 8px;\">
                            <span class=\"badge badge-gray\" style=\"font-size: 11px;\">⏱️ {{ matiere.chargehoraire }}h / sem</span>
                        </div>
                    </div>
                {% else %}
                    <div style=\"grid-column: 1 / -1; text-align: center; padding: 60px; color: var(--gray-400);\">
                        Aucune matière trouvée pour votre classe.
                    </div>
                {% endfor %}
            </div>
        </main>
    </div>
</body>
</html>", "user/matiere_classe/front_index.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\matiere_classe\\front_index.html.twig");
    }
}
