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

/* Front/groupe/_group_card.html.twig */
class __TwigTemplate_4ae17cfd9bad9263a8c8260d858d309b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/_group_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/_group_card.html.twig"));

        // line 2
        yield "<div class=\"group-card\" 
     data-matiere=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 3, $this->source); })()), "matiere", [], "any", false, false, false, 3)), "html", null, true);
        yield "\"
     data-status=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 4, $this->source); })()), "statut", [], "any", false, false, false, 4), "html", null, true);
        yield "\"
     data-members=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 5, $this->source); })()), "nbrMembre", [], "any", false, false, false, 5), "html", null, true);
        yield "\"
     data-id=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "\"
     data-created=\"";
        // line 7
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 7, $this->source); })()), "CreatedAt", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 7, $this->source); })()), "CreatedAt", [], "any", false, false, false, 7), "c"), "html", null, true)) : (""));
        yield "\"
     style=\"background: white; border-radius: var(--radius-xl); border: 1px solid var(--gray-200); overflow: hidden; transition: all var(--transition); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;\">
    
    <!-- Header with gradient -->
    <div style=\"background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%); padding: 20px; position: relative; overflow: hidden;\">
        <div style=\"position: absolute; top: -20px; right: -20px; width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%;\"></div>
        <div style=\"display: flex; justify-content: space-between; align-items: flex-start; position: relative; z-index: 1;\">
            <div>
                <div style=\"width: 50px; height: 50px; background: rgba(255,255,255,0.25); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 18px;\">
                    ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 16, $this->source); })()), "nomProjet", [], "any", false, false, false, 16)), "html", null, true);
        yield "
                </div>
            </div>
            <span style=\"background: white; color: var(--primary-red); padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px;\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                </svg>
                ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 23, $this->source); })()), "nbrMembre", [], "any", false, false, false, 23), "html", null, true);
        yield "
            </span>
        </div>
    </div>
    
    <!-- Body -->
    <div style=\"padding: 20px; flex: 1; display: flex; flex-direction: column;\">
        <h5 style=\"font-size: 18px; font-weight: 700; color: var(--gray-900); margin: 0 0 12px 0; line-height: 1.4;\">
            ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 31, $this->source); })()), "nomProjet", [], "any", false, false, false, 31), "html", null, true);
        yield "
        </h5>
        
        <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 16px; color: var(--gray-600); font-size: 14px;\">
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/><path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
            </svg>
            <span>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 38, $this->source); })()), "matiere", [], "any", false, false, false, 38), "html", null, true);
        yield "</span>
        </div>
        
        <!-- Status Badge -->
        <div style=\"margin-bottom: 16px;\">
            ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 43, $this->source); })()), "statut", [], "any", false, false, false, 43) == "Actif")) {
            // line 44
            yield "                <span style=\"display: inline-flex; align-items: center; gap: 6px; background: #D1FAE5; color: #065F46; padding: 6px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;\">
                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\">
                        <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"/><polyline points=\"22 4 12 14.01 9 11.01\"/>
                    </svg>
                    Actif
                </span>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50) == "Terminé")) {
            // line 51
            yield "                <span style=\"display: inline-flex; align-items: center; gap: 6px; background: #DBEAFE; color: #1E40AF; padding: 6px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;\">
                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\">
                        <path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/><path d=\"M16.31 7.71L10 13.99l-2.31-2.29\"/>
                    </svg>
                    Terminé
                </span>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 57, $this->source); })()), "statut", [], "any", false, false, false, 57) == "En pause")) {
            // line 58
            yield "                <span style=\"display: inline-flex; align-items: center; gap: 6px; background: #FEF3C7; color: #92400E; padding: 6px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;\">
                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\">
                        <rect x=\"6\" y=\"4\" width=\"4\" height=\"16\"/><rect x=\"14\" y=\"4\" width=\"4\" height=\"16\"/>
                    </svg>
                    En pause
                </span>
            ";
        } else {
            // line 65
            yield "                <span style=\"display: inline-flex; align-items: center; gap: 6px; background: var(--gray-100); color: var(--gray-700); padding: 6px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;\">
                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\">
                        <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                    </svg>
                    ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 69, $this->source); })()), "statut", [], "any", false, false, false, 69), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 72
        yield "        </div>
        
        <!-- Description -->
        ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "        <p style=\"color: var(--gray-600); font-size: 14px; line-height: 1.5; margin: 0 0 16px 0; flex: 1;\">
            ";
            // line 77
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), "html", null, true)));
            yield "
        </p>
        ";
        }
        // line 80
        yield "        
        <!-- Date -->
        <div style=\"display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-500); margin-top: auto; padding-top: 16px; border-top: 1px solid var(--gray-100);\">
            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
            </svg>
            Créé le ";
        // line 86
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 86, $this->source); })()), "CreatedAt", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 86, $this->source); })()), "CreatedAt", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "
        </div>
    </div>
    
    <!-- Footer with actions -->
    <div style=\"padding: 16px 20px; background: var(--gray-50); border-top: 1px solid var(--gray-100); display: flex; gap: 12px;\">
        <a href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        yield "\" 
           style=\"flex: 1; padding: 10px 16px; background: var(--primary-gradient); color: white; text-decoration: none; border-radius: var(--radius-lg); font-size: 13px; font-weight: 600; text-align: center; transition: all var(--transition); border: none; cursor: pointer; box-shadow: var(--shadow-sm);\">
            Voir Détails
        </a>
        
        ";
        // line 97
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 97, $this->source); })()), "createdBy", [], "any", false, false, false, 97) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)))) {
            // line 98
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" 
               style=\"flex: 1; padding: 10px 16px; background: white; color: var(--primary-red); text-decoration: none; border-radius: var(--radius-lg); font-size: 13px; font-weight: 600; text-align: center; transition: all var(--transition); border: 1px solid var(--primary-red); cursor: pointer;\">
                Modifier
            </a>
        ";
        }
        // line 103
        yield "    </div>
</div>

<style>
.group-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-red-light);
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/groupe/_group_card.html.twig";
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
        return array (  213 => 103,  204 => 98,  202 => 97,  194 => 92,  185 => 86,  177 => 80,  171 => 77,  168 => 76,  166 => 75,  161 => 72,  155 => 69,  149 => 65,  140 => 58,  138 => 57,  130 => 51,  128 => 50,  120 => 44,  118 => 43,  110 => 38,  100 => 31,  89 => 23,  79 => 16,  67 => 7,  63 => 6,  59 => 5,  55 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front/groupe/_group_card.html.twig #}
<div class=\"group-card\" 
     data-matiere=\"{{ groupe.matiere|lower }}\"
     data-status=\"{{ groupe.statut }}\"
     data-members=\"{{ groupe.nbrMembre }}\"
     data-id=\"{{ groupe.id }}\"
     data-created=\"{{ groupe.CreatedAt ? groupe.CreatedAt|date('c') : '' }}\"
     style=\"background: white; border-radius: var(--radius-xl); border: 1px solid var(--gray-200); overflow: hidden; transition: all var(--transition); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;\">
    
    <!-- Header with gradient -->
    <div style=\"background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-red-dark) 100%); padding: 20px; position: relative; overflow: hidden;\">
        <div style=\"position: absolute; top: -20px; right: -20px; width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%;\"></div>
        <div style=\"display: flex; justify-content: space-between; align-items: flex-start; position: relative; z-index: 1;\">
            <div>
                <div style=\"width: 50px; height: 50px; background: rgba(255,255,255,0.25); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 18px;\">
                    {{ groupe.nomProjet|first }}
                </div>
            </div>
            <span style=\"background: white; color: var(--primary-red); padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px;\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                </svg>
                {{ groupe.nbrMembre }}
            </span>
        </div>
    </div>
    
    <!-- Body -->
    <div style=\"padding: 20px; flex: 1; display: flex; flex-direction: column;\">
        <h5 style=\"font-size: 18px; font-weight: 700; color: var(--gray-900); margin: 0 0 12px 0; line-height: 1.4;\">
            {{ groupe.nomProjet }}
        </h5>
        
        <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 16px; color: var(--gray-600); font-size: 14px;\">
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/><path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"/>
            </svg>
            <span>{{ groupe.matiere }}</span>
        </div>
        
        <!-- Status Badge -->
        <div style=\"margin-bottom: 16px;\">
            {% if groupe.statut == 'Actif' %}
                <span style=\"display: inline-flex; align-items: center; gap: 6px; background: #D1FAE5; color: #065F46; padding: 6px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;\">
                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\">
                        <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"/><polyline points=\"22 4 12 14.01 9 11.01\"/>
                    </svg>
                    Actif
                </span>
            {% elseif groupe.statut == 'Terminé' %}
                <span style=\"display: inline-flex; align-items: center; gap: 6px; background: #DBEAFE; color: #1E40AF; padding: 6px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;\">
                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\">
                        <path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/><path d=\"M16.31 7.71L10 13.99l-2.31-2.29\"/>
                    </svg>
                    Terminé
                </span>
            {% elseif groupe.statut == 'En pause' %}
                <span style=\"display: inline-flex; align-items: center; gap: 6px; background: #FEF3C7; color: #92400E; padding: 6px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;\">
                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\">
                        <rect x=\"6\" y=\"4\" width=\"4\" height=\"16\"/><rect x=\"14\" y=\"4\" width=\"4\" height=\"16\"/>
                    </svg>
                    En pause
                </span>
            {% else %}
                <span style=\"display: inline-flex; align-items: center; gap: 6px; background: var(--gray-100); color: var(--gray-700); padding: 6px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;\">
                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\">
                        <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                    </svg>
                    {{ groupe.statut }}
                </span>
            {% endif %}
        </div>
        
        <!-- Description -->
        {% if groupe.description %}
        <p style=\"color: var(--gray-600); font-size: 14px; line-height: 1.5; margin: 0 0 16px 0; flex: 1;\">
            {{ groupe.description|length > 100 ? groupe.description|slice(0, 100) ~ '...' : groupe.description }}
        </p>
        {% endif %}
        
        <!-- Date -->
        <div style=\"display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--gray-500); margin-top: auto; padding-top: 16px; border-top: 1px solid var(--gray-100);\">
            <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
            </svg>
            Créé le {{ groupe.CreatedAt ? groupe.CreatedAt|date('d/m/Y') : 'N/A' }}
        </div>
    </div>
    
    <!-- Footer with actions -->
    <div style=\"padding: 16px 20px; background: var(--gray-50); border-top: 1px solid var(--gray-100); display: flex; gap: 12px;\">
        <a href=\"{{ path('front_groupe_projet_show', {'id': groupe.id}) }}\" 
           style=\"flex: 1; padding: 10px 16px; background: var(--primary-gradient); color: white; text-decoration: none; border-radius: var(--radius-lg); font-size: 13px; font-weight: 600; text-align: center; transition: all var(--transition); border: none; cursor: pointer; box-shadow: var(--shadow-sm);\">
            Voir Détails
        </a>
        
        {% if is_granted('ROLE_ADMIN') or groupe.createdBy == app.user %}
            <a href=\"{{ path('front_groupe_projet_edit', {'id': groupe.id}) }}\" 
               style=\"flex: 1; padding: 10px 16px; background: white; color: var(--primary-red); text-decoration: none; border-radius: var(--radius-lg); font-size: 13px; font-weight: 600; text-align: center; transition: all var(--transition); border: 1px solid var(--primary-red); cursor: pointer;\">
                Modifier
            </a>
        {% endif %}
    </div>
</div>

<style>
.group-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-red-light);
}
</style>", "Front/groupe/_group_card.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\groupe\\_group_card.html.twig");
    }
}
