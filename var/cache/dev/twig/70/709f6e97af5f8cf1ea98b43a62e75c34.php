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

/* Front/groupe/show.html.twig */
class __TwigTemplate_c2af7ff384ccea3c74552085110cc52c extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/groupe/show.html.twig"));

        // line 5
        $context["current_page"] = "groupes";
        // line 1
        $this->parent = $this->load("front/base.html.twig", 1);
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

        yield "Détails du groupe - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 3, $this->source); })()), "nomProjet", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 11, $this->source); })()), "nomProjet", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
        <p class=\"muted\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 12, $this->source); })()), "matiere", [], "any", false, false, false, 12), "html", null, true);
        yield " · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 12, $this->source); })()), "nbrMembre", [], "any", false, false, false, 12), "html", null, true);
        yield " membre(s)</p>
    </div>
    <div class=\"session-display\">
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
        yield "\" style=\"color: inherit; text-decoration: none; font-weight: 600;\">
            ← Retour aux groupes
        </a>
    </div>
</header>

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\" style=\"margin-bottom: 20px; padding: 16px 20px; border-radius: 12px; background: ";
                if (($context["label"] == "success")) {
                    yield "var(--green-50)";
                } elseif (($context["label"] == "error")) {
                    yield "var(--red-50)";
                } else {
                    yield "var(--blue-50)";
                }
                yield "; border: 1px solid ";
                if (($context["label"] == "success")) {
                    yield "var(--green-200)";
                } elseif (($context["label"] == "error")) {
                    yield "var(--red-200)";
                } else {
                    yield "var(--blue-200)";
                }
                yield "; color: ";
                if (($context["label"] == "success")) {
                    yield "var(--green-900)";
                } elseif (($context["label"] == "error")) {
                    yield "var(--red-900)";
                } else {
                    yield "var(--blue-900)";
                }
                yield ";\">
            ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
<div class=\"profile-container\">
    <div style=\"display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 24px;\">
        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_index");
        yield "\" class=\"btn btn-outline\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 20px; border: 1px solid var(--gray-300); color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 500;\">
            ← Liste des groupes
        </a>
        ";
        // line 34
        $context["isOwner"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 34, $this->source); })()), "createdBy", [], "any", false, false, false, 34)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 34, $this->source); })()), "createdBy", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)));
        // line 35
        yield "        ";
        if (((isset($context["isOwner"]) || array_key_exists("isOwner", $context) ? $context["isOwner"] : (function () { throw new RuntimeError('Variable "isOwner" does not exist.', 35, $this->source); })()) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 36
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-primary\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; background: linear-gradient(135deg, var(--red-500), var(--orange-500)); color: white; text-decoration: none; border-radius: var(--radius-lg); font-weight: 600;\">
                Modifier le groupe
            </a>
            <form method=\"post\" action=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce groupe ?');\" style=\"display:inline-flex;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40))), "html", null, true);
            yield "\">
                <button class=\"btn btn-outline\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 20px; border: 1px solid var(--red-200); color: var(--red-600); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; background: white;\">
                    Supprimer
                </button>
            </form>
        ";
        }
        // line 46
        yield "    </div>


    <!-- Infos groupe -->
    <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
        <div style=\"padding: 24px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
            <div style=\"display: flex; align-items: center; gap: 16px;\">
                <div style=\"width: 56px; height: 56px; border-radius: 12px; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: 700;\">
                    GP";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
        yield "
                </div>
                <div>
                    <h2 style=\"margin: 0 0 4px 0; font-size: 22px;\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 57, $this->source); })()), "nomProjet", [], "any", false, false, false, 57), "html", null, true);
        yield "</h2>
                    <p style=\"margin: 0; opacity: 0.9; font-size: 14px;\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 58, $this->source); })()), "matiere", [], "any", false, false, false, 58), "html", null, true);
        yield "</p>
                </div>
                <div style=\"margin-left: auto;\">
                    ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 61, $this->source); })()), "statut", [], "any", false, false, false, 61) == "Actif")) {
            // line 62
            yield "                        <span style=\"background: rgba(255,255,255,0.3); padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 62, $this->source); })()), "statut", [], "any", false, false, false, 62), "html", null, true);
            yield "</span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 63
(isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 63, $this->source); })()), "statut", [], "any", false, false, false, 63) == "Terminé")) {
            // line 64
            yield "                        <span style=\"background: rgba(255,255,255,0.3); padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 64, $this->source); })()), "statut", [], "any", false, false, false, 64), "html", null, true);
            yield "</span>
                    ";
        } else {
            // line 66
            yield "                        <span style=\"background: rgba(255,255,255,0.3); padding: 6px 14px; border-radius: 20px; font-size: 13px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 66, $this->source); })()), "statut", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
                    ";
        }
        // line 68
        yield "                </div>
            </div>
        </div>
        <div style=\"padding: 24px;\">
            <p style=\"color: var(--gray-600); line-height: 1.6; margin: 0 0 20px 0;\">
                ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["groupe_projet"] ?? null), "description", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), "Aucune description.")) : ("Aucune description.")), "html", null, true);
        yield "
            </p>
            <div style=\"display: flex; gap: 24px; flex-wrap: wrap; font-size: 14px; color: var(--gray-500);\">
                <span>Créé le : ";
        // line 76
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 76, $this->source); })()), "CreatedAt", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 76, $this->source); })()), "CreatedAt", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</span>
                <span>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 77, $this->source); })()), "nbrMembre", [], "any", false, false, false, 77), "html", null, true);
        yield " membre(s)</span>
            </div>
        </div>
    </div>

    <!-- Membres -->
    ";
        // line 83
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 83, $this->source); })()), "idUser", [], "any", false, false, false, 83)) > 0)) {
            // line 84
            yield "        <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
            <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200); font-weight: 600; font-size: 16px;\">
                Membres du groupe
            </div>
            <div style=\"padding: 24px; display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 16px;\">
                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 89, $this->source); })()), "idUser", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 90
                yield "                    <div style=\"display: flex; align-items: center; gap: 12px; padding: 12px; background: var(--gray-50); border-radius: var(--radius);\">
                        <div style=\"width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 13px;\">
                            ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 92))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 92))), "html", null, true);
                yield "
                        </div>
                        <div>
                            <div style=\"font-weight: 600; color: var(--gray-800);\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 95), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 95), "html", null, true);
                yield "</div>
                            <div style=\"font-size: 13px; color: var(--gray-500);\">";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 96), "html", null, true);
                yield "</div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "            </div>
        </div>
    ";
        }
        // line 103
        yield "
    <!-- Propositions de réunion -->
    <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
        <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;\">
            <span style=\"font-weight: 600; font-size: 16px;\">Propositions de réunion</span>
            <div style=\"display: flex; gap: 10px; flex-wrap: wrap;\">
                <a href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
        yield "\" class=\"btn btn-primary\" style=\"display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; background: linear-gradient(135deg, var(--green-500), var(--green-600)); color: white; text-decoration: none; border-radius: var(--radius); font-size: 14px; font-weight: 600;\">
                    Créer une proposition
                </a>
                <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_index");
        yield "\" style=\"display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; background: var(--gray-100); color: var(--gray-700); text-decoration: none; border-radius: var(--radius); font-size: 14px; font-weight: 600;\">
                    Voir toutes les propositions
                </a>
            </div>
        </div>
        <div style=\"padding: 24px;\">
            ";
        // line 118
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["propositions"]) || array_key_exists("propositions", $context) ? $context["propositions"] : (function () { throw new RuntimeError('Variable "propositions" does not exist.', 118, $this->source); })())) > 0)) {
            // line 119
            yield "                <ul style=\"list-style: none; padding: 0; margin: 0;\">
                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["propositions"]) || array_key_exists("propositions", $context) ? $context["propositions"] : (function () { throw new RuntimeError('Variable "propositions" does not exist.', 120, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 121
                yield "                        <li style=\"padding: 14px 0; border-bottom: 1px solid var(--gray-100); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 8px;\">
                            <div>
                                <span style=\"font-weight: 600; color: var(--gray-800);\">";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "titre", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "titre", [], "any", false, false, false, 123), "Sans titre")) : ("Sans titre")), "html", null, true);
                yield "</span>
                                <span style=\"font-size: 13px; color: var(--gray-500); margin-left: 8px;\">
                                    ";
                // line 125
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "dateReunion", [], "any", false, false, false, 125), "d/m/Y"), "html", null, true)) : (""));
                yield "
                                    ";
                // line 126
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 127
                    yield "                                        · ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "status", [], "any", false, false, false, 127), "html", null, true);
                    yield "
                                    ";
                }
                // line 129
                yield "                                </span>
                            </div>
                            <a href=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposition"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                yield "\" style=\"font-size: 14px; color: var(--red-500); font-weight: 500; text-decoration: none;\">Voir →</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['proposition'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "                </ul>
                ";
            // line 135
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["propositions"]) || array_key_exists("propositions", $context) ? $context["propositions"] : (function () { throw new RuntimeError('Variable "propositions" does not exist.', 135, $this->source); })())) > 5)) {
                // line 136
                yield "                    <p style=\"margin: 16px 0 0 0; font-size: 14px; color: var(--gray-500);\">
                        <a href=\"";
                // line 137
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_index");
                yield "\" style=\"color: var(--red-500); font-weight: 500;\">Voir toutes les propositions (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["propositions"]) || array_key_exists("propositions", $context) ? $context["propositions"] : (function () { throw new RuntimeError('Variable "propositions" does not exist.', 137, $this->source); })())), "html", null, true);
                yield ")</a>
                    </p>
                ";
            }
            // line 140
            yield "            ";
        } else {
            // line 141
            yield "                <p style=\"margin: 0; color: var(--gray-500); font-size: 15px;\">Aucune proposition de réunion pour ce groupe.</p>
                <a href=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" style=\"display: inline-block; margin-top: 12px; font-size: 14px; color: var(--red-500); font-weight: 600; text-decoration: none;\">Créer une proposition →</a>
            ";
        }
        // line 144
        yield "        </div>
    </div>
</div>
</main>
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
        return "Front/groupe/show.html.twig";
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
        return array (  428 => 144,  423 => 142,  420 => 141,  417 => 140,  409 => 137,  406 => 136,  404 => 135,  401 => 134,  392 => 131,  388 => 129,  382 => 127,  380 => 126,  376 => 125,  371 => 123,  367 => 121,  363 => 120,  360 => 119,  358 => 118,  349 => 112,  343 => 109,  335 => 103,  330 => 100,  320 => 96,  314 => 95,  307 => 92,  303 => 90,  299 => 89,  292 => 84,  290 => 83,  281 => 77,  277 => 76,  271 => 73,  264 => 68,  258 => 66,  252 => 64,  250 => 63,  245 => 62,  243 => 61,  237 => 58,  233 => 57,  227 => 54,  217 => 46,  208 => 40,  204 => 39,  197 => 36,  194 => 35,  192 => 34,  186 => 31,  181 => 28,  168 => 24,  139 => 23,  134 => 22,  130 => 21,  121 => 15,  113 => 12,  109 => 11,  104 => 8,  91 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Détails du groupe - {{ groupe_projet.nomProjet }}{% endblock %}

{% set current_page = 'groupes' %}

{% block content %}
<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">{{ groupe_projet.nomProjet }}</h1>
        <p class=\"muted\">{{ groupe_projet.matiere }} · {{ groupe_projet.nbrMembre }} membre(s)</p>
    </div>
    <div class=\"session-display\">
        <a href=\"{{ path('front_groupe_projet_index') }}\" style=\"color: inherit; text-decoration: none; font-weight: 600;\">
            ← Retour aux groupes
        </a>
    </div>
</header>

{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" style=\"margin-bottom: 20px; padding: 16px 20px; border-radius: 12px; background: {% if label == 'success' %}var(--green-50){% elseif label == 'error' %}var(--red-50){% else %}var(--blue-50){% endif %}; border: 1px solid {% if label == 'success' %}var(--green-200){% elseif label == 'error' %}var(--red-200){% else %}var(--blue-200){% endif %}; color: {% if label == 'success' %}var(--green-900){% elseif label == 'error' %}var(--red-900){% else %}var(--blue-900){% endif %};\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}

<div class=\"profile-container\">
    <div style=\"display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 24px;\">
        <a href=\"{{ path('front_groupe_projet_index') }}\" class=\"btn btn-outline\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 20px; border: 1px solid var(--gray-300); color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 500;\">
            ← Liste des groupes
        </a>
        {% set isOwner = app.user and groupe_projet.createdBy and groupe_projet.createdBy.id == app.user.id %}
        {% if isOwner or is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('front_groupe_projet_edit', {'id': groupe_projet.id}) }}\" class=\"btn btn-primary\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; background: linear-gradient(135deg, var(--red-500), var(--orange-500)); color: white; text-decoration: none; border-radius: var(--radius-lg); font-weight: 600;\">
                Modifier le groupe
            </a>
            <form method=\"post\" action=\"{{ path('front_groupe_projet_delete', {'id': groupe_projet.id}) }}\" onsubmit=\"return confirm('Supprimer ce groupe ?');\" style=\"display:inline-flex;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ groupe_projet.id) }}\">
                <button class=\"btn btn-outline\" style=\"display: inline-flex; align-items: center; gap: 8px; padding: 12px 20px; border: 1px solid var(--red-200); color: var(--red-600); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; background: white;\">
                    Supprimer
                </button>
            </form>
        {% endif %}
    </div>


    <!-- Infos groupe -->
    <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
        <div style=\"padding: 24px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
            <div style=\"display: flex; align-items: center; gap: 16px;\">
                <div style=\"width: 56px; height: 56px; border-radius: 12px; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: 700;\">
                    GP{{ groupe_projet.id }}
                </div>
                <div>
                    <h2 style=\"margin: 0 0 4px 0; font-size: 22px;\">{{ groupe_projet.nomProjet }}</h2>
                    <p style=\"margin: 0; opacity: 0.9; font-size: 14px;\">{{ groupe_projet.matiere }}</p>
                </div>
                <div style=\"margin-left: auto;\">
                    {% if groupe_projet.statut == 'Actif' %}
                        <span style=\"background: rgba(255,255,255,0.3); padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600;\">{{ groupe_projet.statut }}</span>
                    {% elseif groupe_projet.statut == 'Terminé' %}
                        <span style=\"background: rgba(255,255,255,0.3); padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 600;\">{{ groupe_projet.statut }}</span>
                    {% else %}
                        <span style=\"background: rgba(255,255,255,0.3); padding: 6px 14px; border-radius: 20px; font-size: 13px;\">{{ groupe_projet.statut }}</span>
                    {% endif %}
                </div>
            </div>
        </div>
        <div style=\"padding: 24px;\">
            <p style=\"color: var(--gray-600); line-height: 1.6; margin: 0 0 20px 0;\">
                {{ groupe_projet.description|default('Aucune description.') }}
            </p>
            <div style=\"display: flex; gap: 24px; flex-wrap: wrap; font-size: 14px; color: var(--gray-500);\">
                <span>Créé le : {{ groupe_projet.CreatedAt ? groupe_projet.CreatedAt|date('d/m/Y') : 'N/A' }}</span>
                <span>{{ groupe_projet.nbrMembre }} membre(s)</span>
            </div>
        </div>
    </div>

    <!-- Membres -->
    {% if groupe_projet.idUser|length > 0 %}
        <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
            <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200); font-weight: 600; font-size: 16px;\">
                Membres du groupe
            </div>
            <div style=\"padding: 24px; display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 16px;\">
                {% for user in groupe_projet.idUser %}
                    <div style=\"display: flex; align-items: center; gap: 12px; padding: 12px; background: var(--gray-50); border-radius: var(--radius);\">
                        <div style=\"width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 13px;\">
                            {{ user.prenom|first|upper }}{{ user.nom|first|upper }}
                        </div>
                        <div>
                            <div style=\"font-weight: 600; color: var(--gray-800);\">{{ user.prenom }} {{ user.nom }}</div>
                            <div style=\"font-size: 13px; color: var(--gray-500);\">{{ user.email }}</div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endif %}

    <!-- Propositions de réunion -->
    <div class=\"card\" style=\"margin-bottom: 24px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
        <div style=\"padding: 20px 24px; border-bottom: 1px solid var(--gray-200); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;\">
            <span style=\"font-weight: 600; font-size: 16px;\">Propositions de réunion</span>
            <div style=\"display: flex; gap: 10px; flex-wrap: wrap;\">
                <a href=\"{{ path('front_proposition_reunion_new', { id: groupe_projet.id }) }}\" class=\"btn btn-primary\" style=\"display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; background: linear-gradient(135deg, var(--green-500), var(--green-600)); color: white; text-decoration: none; border-radius: var(--radius); font-size: 14px; font-weight: 600;\">
                    Créer une proposition
                </a>
                <a href=\"{{ path('front_proposition_reunion_index') }}\" style=\"display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; background: var(--gray-100); color: var(--gray-700); text-decoration: none; border-radius: var(--radius); font-size: 14px; font-weight: 600;\">
                    Voir toutes les propositions
                </a>
            </div>
        </div>
        <div style=\"padding: 24px;\">
            {% if propositions|length > 0 %}
                <ul style=\"list-style: none; padding: 0; margin: 0;\">
                    {% for proposition in propositions|slice(0, 5) %}
                        <li style=\"padding: 14px 0; border-bottom: 1px solid var(--gray-100); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 8px;\">
                            <div>
                                <span style=\"font-weight: 600; color: var(--gray-800);\">{{ proposition.titre|default('Sans titre') }}</span>
                                <span style=\"font-size: 13px; color: var(--gray-500); margin-left: 8px;\">
                                    {{ proposition.dateReunion ? proposition.dateReunion|date('d/m/Y') : '' }}
                                    {% if proposition.status %}
                                        · {{ proposition.status }}
                                    {% endif %}
                                </span>
                            </div>
                            <a href=\"{{ path('front_proposition_reunion_show', {'id': proposition.id}) }}\" style=\"font-size: 14px; color: var(--red-500); font-weight: 500; text-decoration: none;\">Voir →</a>
                        </li>
                    {% endfor %}
                </ul>
                {% if propositions|length > 5 %}
                    <p style=\"margin: 16px 0 0 0; font-size: 14px; color: var(--gray-500);\">
                        <a href=\"{{ path('front_proposition_reunion_index') }}\" style=\"color: var(--red-500); font-weight: 500;\">Voir toutes les propositions ({{ propositions|length }})</a>
                    </p>
                {% endif %}
            {% else %}
                <p style=\"margin: 0; color: var(--gray-500); font-size: 15px;\">Aucune proposition de réunion pour ce groupe.</p>
                <a href=\"{{ path('front_proposition_reunion_new', { id: groupe_projet.id }) }}\" style=\"display: inline-block; margin-top: 12px; font-size: 14px; color: var(--red-500); font-weight: 600; text-decoration: none;\">Créer une proposition →</a>
            {% endif %}
        </div>
    </div>
</div>
</main>
{% endblock %}
", "Front/groupe/show.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\groupe\\show.html.twig");
    }
}
