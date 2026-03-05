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

/* user/classe/front_suggestions.html.twig */
class __TwigTemplate_9369ae94c69ae57248b699dc4046ba2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_suggestions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/classe/front_suggestions.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Recommendations AI ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --blue: #3B82F6;
            --purple: #8B5CF6;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-900: #111827;
            --radius-xl: 16px;
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            padding: 40px;
        }

        .container { max-width: 1000px; margin: 0 auto; }
        .back-link { margin-bottom: 24px; display: inline-block; color: var(--blue); text-decoration: none; font-weight: 600; }
        
        .header { margin-bottom: 32px; }
        .h1 { font-size: 32px; font-weight: 800; margin-bottom: 8px; }

        .suggestion-card {
            background: white;
            border-radius: var(--radius-xl);
            padding: 32px;
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
            margin-bottom: 24px;
            display: flex;
            gap: 24px;
            align-items: center;
            border-left: 6px solid var(--primary-red);
        }

        .icon-box {
            width: 64px; height: 64px;
            background: var(--gray-50);
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            font-size: 28px;
            flex-shrink: 0;
        }

        .content { flex: 1; }
        .content h3 { font-size: 18px; font-weight: 700; margin-bottom: 4px; }
        .content p { font-size: 14px; color: var(--gray-500); margin-bottom: 12px; }

        .tag {
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            background: var(--gray-100);
            color: var(--gray-700);
        }

        .badge-ai { background: #DBEAFE; color: #1E40AF; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 4px; margin-bottom: 8px; display: inline-block; }
    </style>
</head>
<body>
    <div class=\"container\">
        <a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\" class=\"back-link\">← Retour au tableau de bord</a>
        
        <header class=\"header\">
            <h1 class=\"h1\">Recommendations AI</h1>
            <p style=\"color: var(--gray-500);\">Voici les matières complémentaires recommandées pour votre programme <strong>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 83, $this->source); })()), "nom", [], "any", false, false, false, 83), "html", null, true);
        yield "</strong>.</p>
        </header>

        ";
        // line 86
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "            <div style=\"text-align: center; padding: 80px; background: white; border-radius: 16px; border: 1px dashed var(--gray-300);\">
                <div style=\"font-size: 48px; margin-bottom: 16px;\">✨</div>
                <h3 style=\"color: var(--gray-400);\">Votre programme est déjà complet !</h3>
                <p style=\"color: var(--gray-400);\">Aucune suggestion supplémentaire n'est nécessaire pour le moment.</p>
            </div>
        ";
        } else {
            // line 93
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 94
                yield "                <div class=\"suggestion-card\">
                    <div class=\"icon-box\">📘</div>
                    <div class=\"content\">
                        <span class=\"badge-ai\">SUGGESTION AI</span>
                        <h3>";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 98), "html", null, true);
                yield "</h3>
                        <p>";
                // line 99
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 99)) > 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 99), 0, 150) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 99), "html", null, true)));
                yield "</p>
                        <div style=\"display: flex; gap: 8px;\">
                            <span class=\"tag\">Coeff ";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "coefficient", [], "any", false, false, false, 101), "html", null, true);
                yield "</span>
                            <span class=\"tag\">";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "chargehoraire", [], "any", false, false, false, 102), "html", null, true);
                yield "h</span>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "        ";
        }
        // line 108
        yield "
        <div style=\"margin-top: 40px; padding: 24px; background: var(--gray-100); border-radius: 12px; border: 1px solid var(--gray-200);\">
            <p style=\"font-size: 13px; color: var(--gray-600); line-height: 1.5;\">
                <strong>Note :</strong> Ces suggestions sont purement informatives pour les étudiants. Seul un administrateur peut modifier officiellement le programme de la classe.
            </p>
        </div>
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
        return "user/classe/front_suggestions.html.twig";
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
        return array (  192 => 108,  189 => 107,  178 => 102,  174 => 101,  169 => 99,  165 => 98,  159 => 94,  154 => 93,  146 => 87,  144 => 86,  138 => 83,  131 => 79,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Recommendations AI {{ classe.nom }}</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-gradient: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%);
            --blue: #3B82F6;
            --purple: #8B5CF6;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-900: #111827;
            --radius-xl: 16px;
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%);
            color: var(--gray-900);
            min-height: 100vh;
            padding: 40px;
        }

        .container { max-width: 1000px; margin: 0 auto; }
        .back-link { margin-bottom: 24px; display: inline-block; color: var(--blue); text-decoration: none; font-weight: 600; }
        
        .header { margin-bottom: 32px; }
        .h1 { font-size: 32px; font-weight: 800; margin-bottom: 8px; }

        .suggestion-card {
            background: white;
            border-radius: var(--radius-xl);
            padding: 32px;
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
            margin-bottom: 24px;
            display: flex;
            gap: 24px;
            align-items: center;
            border-left: 6px solid var(--primary-red);
        }

        .icon-box {
            width: 64px; height: 64px;
            background: var(--gray-50);
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            font-size: 28px;
            flex-shrink: 0;
        }

        .content { flex: 1; }
        .content h3 { font-size: 18px; font-weight: 700; margin-bottom: 4px; }
        .content p { font-size: 14px; color: var(--gray-500); margin-bottom: 12px; }

        .tag {
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            background: var(--gray-100);
            color: var(--gray-700);
        }

        .badge-ai { background: #DBEAFE; color: #1E40AF; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 4px; margin-bottom: 8px; display: inline-block; }
    </style>
</head>
<body>
    <div class=\"container\">
        <a href=\"{{ path('app_classe_front_show', {'id': classe.id}) }}\" class=\"back-link\">← Retour au tableau de bord</a>
        
        <header class=\"header\">
            <h1 class=\"h1\">Recommendations AI</h1>
            <p style=\"color: var(--gray-500);\">Voici les matières complémentaires recommandées pour votre programme <strong>{{ classe.nom }}</strong>.</p>
        </header>

        {% if suggestions is empty %}
            <div style=\"text-align: center; padding: 80px; background: white; border-radius: 16px; border: 1px dashed var(--gray-300);\">
                <div style=\"font-size: 48px; margin-bottom: 16px;\">✨</div>
                <h3 style=\"color: var(--gray-400);\">Votre programme est déjà complet !</h3>
                <p style=\"color: var(--gray-400);\">Aucune suggestion supplémentaire n'est nécessaire pour le moment.</p>
            </div>
        {% else %}
            {% for s in suggestions %}
                <div class=\"suggestion-card\">
                    <div class=\"icon-box\">📘</div>
                    <div class=\"content\">
                        <span class=\"badge-ai\">SUGGESTION AI</span>
                        <h3>{{ s.nom }}</h3>
                        <p>{{ s.description|length > 150 ? s.description|slice(0, 150) ~ '...' : s.description }}</p>
                        <div style=\"display: flex; gap: 8px;\">
                            <span class=\"tag\">Coeff {{ s.coefficient }}</span>
                            <span class=\"tag\">{{ s.chargehoraire }}h</span>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endif %}

        <div style=\"margin-top: 40px; padding: 24px; background: var(--gray-100); border-radius: 12px; border: 1px solid var(--gray-200);\">
            <p style=\"font-size: 13px; color: var(--gray-600); line-height: 1.5;\">
                <strong>Note :</strong> Ces suggestions sont purement informatives pour les étudiants. Seul un administrateur peut modifier officiellement le programme de la classe.
            </p>
        </div>
    </div>
</body>
</html>
", "user/classe/front_suggestions.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\user\\classe\\front_suggestions.html.twig");
    }
}
