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

/* Front/proposition/new.html.twig */
class __TwigTemplate_bc2162fedd351b0f835322aecc607c1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/proposition/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/proposition/new.html.twig"));

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

        yield "Nouvelle proposition - ";
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
        <h1 class=\"h1\">Nouvelle proposition de réunion</h1>
        <p class=\"muted\">Groupe : ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 12, $this->source); })()), "nomProjet", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
    </div>
    <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" style=\"padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition); display: inline-flex; align-items: center; gap: 8px;\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"/><polyline points=\"12 19 5 12 12 5\"/>
        </svg>
        Retour au groupe
    </a>
</header>

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 23
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
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
                // line 25
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
        // line 29
        yield "
<div class=\"profile-container\">
    <div style=\"max-width: 800px; margin: 0 auto;\">
        <div class=\"card\" style=\"border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
            <div style=\"padding: 24px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                <h2 style=\"margin: 0 0 4px 0; font-size: 18px;\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 34, $this->source); })()), "nomProjet", [], "any", false, false, false, 34), "html", null, true);
        yield "</h2>
                <p style=\"margin: 0; opacity: 0.9; font-size: 14px;\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 35, $this->source); })()), "matiere", [], "any", false, false, false, 35), "html", null, true);
        yield " · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 35, $this->source); })()), "nbrMembre", [], "any", false, false, false, 35), "html", null, true);
        yield " membre(s)</p>
            </div>
            <div class=\"card-content\" style=\"padding: 24px;\">
                <div id=\"form-errors\"></div>
                ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_proposition_reunion_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "method" => "POST", "attr" => ["id" => "propositionForm"]]);
        yield "

                <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "titre", [], "any", false, false, false, 42), 'label');
        yield "
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "titre", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"]]);
        yield "
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "titre", [], "any", false, false, false, 44), 'errors');
        yield "
                </div>

                <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
                    <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "dateReunion", [], "any", false, false, false, 49), 'label');
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "dateReunion", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"]]);
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dateReunion", [], "any", false, false, false, 51), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "lieu", [], "any", false, false, false, 54), 'label');
        yield "
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "lieu", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"]]);
        yield "
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "lieu", [], "any", false, false, false, 56), 'errors');
        yield "
                    </div>
                </div>

                <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
                    <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "heureDebut", [], "any", false, false, false, 62), 'label');
        yield "
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "heureDebut", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"]]);
        yield "
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "heureDebut", [], "any", false, false, false, 64), 'errors');
        yield "
                    </div>
                    <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "heureFin", [], "any", false, false, false, 67), 'label');
        yield "
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "heureFin", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"]]);
        yield "
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "heureFin", [], "any", false, false, false, 69), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), 'label');
        yield "
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; min-height: 120px; resize: vertical;", "rows" => 5]]);
        yield "
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), 'errors');
        yield "
                </div>

                <div class=\"form-group\" style=\"margin-bottom: 24px;\">
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "status", [], "any", false, false, false, 80), 'label');
        yield "
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"]]);
        yield "
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "status", [], "any", false, false, false, 82), 'errors');
        yield "
                </div>

                <div style=\"display: flex; gap: 12px; margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--gray-200); flex-wrap: wrap;\">
                    <button type=\"submit\" style=\"flex: 1; min-width: 200px; padding: 16px; background: linear-gradient(135deg, var(--green-500), var(--green-600)); color: white; border: none; border-radius: var(--radius-lg); font-weight: 700; font-size: 16px; cursor: pointer; transition: all var(--transition); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/><polyline points=\"17 21 17 13 7 13 7 21\"/><polyline points=\"7 3 7 8 15 8\"/>
                        </svg>
                        Créer la proposition
                    </button>
                    <a href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_groupe_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_projet"]) || array_key_exists("groupe_projet", $context) ? $context["groupe_projet"] : (function () { throw new RuntimeError('Variable "groupe_projet" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        yield "\" style=\"padding: 16px 24px; background: white; color: var(--gray-700); text-decoration: none; border: 1px solid var(--gray-300); border-radius: var(--radius-lg); font-weight: 600; font-size: 16px; transition: all var(--transition); display: inline-flex; align-items: center; justify-content: center; gap: 10px;\">
                        Annuler
                    </a>
                </div>

                ";
        // line 97
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('propositionForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
      const dateField = form.querySelector('input[name=\"proposition_reunion[dateReunion]\"]');
      const startField = form.querySelector('input[name=\"proposition_reunion[heureDebut]\"]');
      const endField   = form.querySelector('input[name=\"proposition_reunion[heureFin]\"]');
      if (!dateField || !startField || !endField) return;

      const dateVal = dateField.value;
      const startVal = startField.value;
      const endVal = endField.value;
      if (!dateVal || !startVal || !endVal) return;

      const [y,m,d] = dateVal.split('-').map(Number);
      const [sh,sm] = startVal.split(':').map(Number);
      const [eh,em] = endVal.split(':').map(Number);
      const start = new Date(y, m-1, d, sh, sm, 0);
      const end   = new Date(y, m-1, d, eh, em, 0);
      const now = new Date();
      const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
      const dateOnly = new Date(y, m-1, d);

      const errors = [];

      // global errors display
      const errorContainer = document.getElementById('form-errors');
      if (errorContainer) errorContainer.innerHTML = '';

      if (dateOnly < today) {
        errors.push('La date ne peut pas être dans le passé.');
      }

      if (dateOnly.getTime() === today.getTime()) {
        const minStart = new Date(now.getTime() + 60*60*1000);
        if (start < minStart) {
          errors.push('Pour aujourd\\'hui, l\\'heure de début doit être au moins +1h.');
        }
      }

      let endForDiff = end;
      if (endForDiff <= start) {
        endForDiff = new Date(endForDiff.getTime() + 24*60*60*1000); // overnight -> next day
      }
      const diffMinutes = Math.round((endForDiff - start) / 60000);
      if (diffMinutes <= 0) {
        errors.push('L\\'heure de fin doit être après l\\'heure de début.');
      } else {
        if (diffMinutes < 30) errors.push('La durée doit être au moins de 30 minutes.');
        if (diffMinutes > 300) errors.push('La durée maximale est de 5 heures.');
      }

      if (errors.length) {
        e.preventDefault();
        if (errorContainer) {
          errorContainer.innerHTML = '<div class=\"alert alert-danger\" role=\"alert\">' + errors.join('<br>') + '</div>';
          errorContainer.scrollIntoView({behavior:'smooth'});
        } else {
          alert(errors.join('\\n'));
        }
      }
    });
  });
</script>
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
        return "Front/proposition/new.html.twig";
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
        return array (  324 => 97,  316 => 92,  303 => 82,  299 => 81,  295 => 80,  288 => 76,  284 => 75,  280 => 74,  272 => 69,  268 => 68,  264 => 67,  258 => 64,  254 => 63,  250 => 62,  241 => 56,  237 => 55,  233 => 54,  227 => 51,  223 => 50,  219 => 49,  211 => 44,  207 => 43,  203 => 42,  197 => 39,  188 => 35,  184 => 34,  177 => 29,  164 => 25,  135 => 24,  130 => 23,  126 => 22,  115 => 14,  110 => 12,  104 => 8,  91 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Nouvelle proposition - {{ groupe_projet.nomProjet }}{% endblock %}

{% set current_page = 'groupes' %}

{% block content %}
<main class=\"main\">
<header class=\"header\">
    <div>
        <h1 class=\"h1\">Nouvelle proposition de réunion</h1>
        <p class=\"muted\">Groupe : {{ groupe_projet.nomProjet }}</p>
    </div>
    <a href=\"{{ path('front_groupe_projet_show', { id: groupe_projet.id }) }}\" style=\"padding: 12px 24px; background: white; color: var(--gray-700); text-decoration: none; border-radius: var(--radius-lg); font-weight: 600; border: 1px solid var(--gray-300); transition: all var(--transition); display: inline-flex; align-items: center; gap: 8px;\">
        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"/><polyline points=\"12 19 5 12 12 5\"/>
        </svg>
        Retour au groupe
    </a>
</header>

{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" style=\"margin-bottom: 20px; padding: 16px 20px; border-radius: 12px; background: {% if label == 'success' %}var(--green-50){% elseif label == 'error' %}var(--red-50){% else %}var(--blue-50){% endif %}; border: 1px solid {% if label == 'success' %}var(--green-200){% elseif label == 'error' %}var(--red-200){% else %}var(--blue-200){% endif %}; color: {% if label == 'success' %}var(--green-900){% elseif label == 'error' %}var(--red-900){% else %}var(--blue-900){% endif %};\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}

<div class=\"profile-container\">
    <div style=\"max-width: 800px; margin: 0 auto;\">
        <div class=\"card\" style=\"border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);\">
            <div style=\"padding: 24px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                <h2 style=\"margin: 0 0 4px 0; font-size: 18px;\">{{ groupe_projet.nomProjet }}</h2>
                <p style=\"margin: 0; opacity: 0.9; font-size: 14px;\">{{ groupe_projet.matiere }} · {{ groupe_projet.nbrMembre }} membre(s)</p>
            </div>
            <div class=\"card-content\" style=\"padding: 24px;\">
                <div id=\"form-errors\"></div>
                {{ form_start(form, {'action': path('front_proposition_reunion_new', { id: groupe_projet.id }), 'method': 'POST', 'attr': {'id': 'propositionForm'}}) }}

                <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                    {{ form_label(form.titre) }}
                    {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;'}}) }}
                    {{ form_errors(form.titre) }}
                </div>

                <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
                    <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                        {{ form_label(form.dateReunion) }}
                        {{ form_widget(form.dateReunion, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;'}}) }}
                        {{ form_errors(form.dateReunion) }}
                    </div>
                    <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                        {{ form_label(form.lieu) }}
                        {{ form_widget(form.lieu, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;'}}) }}
                        {{ form_errors(form.lieu) }}
                    </div>
                </div>

                <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
                    <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                        {{ form_label(form.heureDebut) }}
                        {{ form_widget(form.heureDebut, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;'}}) }}
                        {{ form_errors(form.heureDebut) }}
                    </div>
                    <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                        {{ form_label(form.heureFin) }}
                        {{ form_widget(form.heureFin, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;'}}) }}
                        {{ form_errors(form.heureFin) }}
                    </div>
                </div>

                <div class=\"form-group\" style=\"margin-bottom: 20px;\">
                    {{ form_label(form.description) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px; min-height: 120px; resize: vertical;', 'rows': 5}}) }}
                    {{ form_errors(form.description) }}
                </div>

                <div class=\"form-group\" style=\"margin-bottom: 24px;\">
                    {{ form_label(form.status) }}
                    {{ form_widget(form.status, {'attr': {'class': 'form-control', 'style': 'width: 100%; padding: 14px 18px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;'}}) }}
                    {{ form_errors(form.status) }}
                </div>

                <div style=\"display: flex; gap: 12px; margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--gray-200); flex-wrap: wrap;\">
                    <button type=\"submit\" style=\"flex: 1; min-width: 200px; padding: 16px; background: linear-gradient(135deg, var(--green-500), var(--green-600)); color: white; border: none; border-radius: var(--radius-lg); font-weight: 700; font-size: 16px; cursor: pointer; transition: all var(--transition); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; gap: 10px;\">
                        <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path d=\"M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z\"/><polyline points=\"17 21 17 13 7 13 7 21\"/><polyline points=\"7 3 7 8 15 8\"/>
                        </svg>
                        Créer la proposition
                    </button>
                    <a href=\"{{ path('front_groupe_projet_show', { id: groupe_projet.id }) }}\" style=\"padding: 16px 24px; background: white; color: var(--gray-700); text-decoration: none; border: 1px solid var(--gray-300); border-radius: var(--radius-lg); font-weight: 600; font-size: 16px; transition: all var(--transition); display: inline-flex; align-items: center; justify-content: center; gap: 10px;\">
                        Annuler
                    </a>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('propositionForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
      const dateField = form.querySelector('input[name=\"proposition_reunion[dateReunion]\"]');
      const startField = form.querySelector('input[name=\"proposition_reunion[heureDebut]\"]');
      const endField   = form.querySelector('input[name=\"proposition_reunion[heureFin]\"]');
      if (!dateField || !startField || !endField) return;

      const dateVal = dateField.value;
      const startVal = startField.value;
      const endVal = endField.value;
      if (!dateVal || !startVal || !endVal) return;

      const [y,m,d] = dateVal.split('-').map(Number);
      const [sh,sm] = startVal.split(':').map(Number);
      const [eh,em] = endVal.split(':').map(Number);
      const start = new Date(y, m-1, d, sh, sm, 0);
      const end   = new Date(y, m-1, d, eh, em, 0);
      const now = new Date();
      const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
      const dateOnly = new Date(y, m-1, d);

      const errors = [];

      // global errors display
      const errorContainer = document.getElementById('form-errors');
      if (errorContainer) errorContainer.innerHTML = '';

      if (dateOnly < today) {
        errors.push('La date ne peut pas être dans le passé.');
      }

      if (dateOnly.getTime() === today.getTime()) {
        const minStart = new Date(now.getTime() + 60*60*1000);
        if (start < minStart) {
          errors.push('Pour aujourd\\'hui, l\\'heure de début doit être au moins +1h.');
        }
      }

      let endForDiff = end;
      if (endForDiff <= start) {
        endForDiff = new Date(endForDiff.getTime() + 24*60*60*1000); // overnight -> next day
      }
      const diffMinutes = Math.round((endForDiff - start) / 60000);
      if (diffMinutes <= 0) {
        errors.push('L\\'heure de fin doit être après l\\'heure de début.');
      } else {
        if (diffMinutes < 30) errors.push('La durée doit être au moins de 30 minutes.');
        if (diffMinutes > 300) errors.push('La durée maximale est de 5 heures.');
      }

      if (errors.length) {
        e.preventDefault();
        if (errorContainer) {
          errorContainer.innerHTML = '<div class=\"alert alert-danger\" role=\"alert\">' + errors.join('<br>') + '</div>';
          errorContainer.scrollIntoView({behavior:'smooth'});
        } else {
          alert(errors.join('\\n'));
        }
      }
    });
  });
</script>
</main>
{% endblock %}
", "Front/proposition/new.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\proposition\\new.html.twig");
    }
}
