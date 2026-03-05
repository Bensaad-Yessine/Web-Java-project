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

/* preference_alerte/AddPreferenceAlerte.html.twig */
class __TwigTemplate_8a08c3a76454a7d06e5127f02e1776de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/AddPreferenceAlerte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "preference_alerte/AddPreferenceAlerte.html.twig"));

        // line 1
        yield "<div style=\"max-width:500px; margin:30px auto;\">
    <h1>Ajouter une préférence</h1>

    ";
        // line 5
        yield "    ";
        yield from $this->load("preference_alerte/_form.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["form" =>         // line 6
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "button_label" => "Créer"]));
        // line 9
        yield "
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preference_alerte_add");
        yield "\">⬅ Retour à la liste des préférences</a>
</div>
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
        return "preference_alerte/AddPreferenceAlerte.html.twig";
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
        return array (  60 => 10,  57 => 9,  55 => 6,  53 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div style=\"max-width:500px; margin:30px auto;\">
    <h1>Ajouter une préférence</h1>

    {# Include your form partial like in your task example #}
    {% include 'preference_alerte/_form.html.twig' with {
        form: form,
        button_label: 'Créer'
    } %}

    <a href=\"{{ path('preference_alerte_add') }}\">⬅ Retour à la liste des préférences</a>
</div>
", "preference_alerte/AddPreferenceAlerte.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\preference_alerte\\AddPreferenceAlerte.html.twig");
    }
}
