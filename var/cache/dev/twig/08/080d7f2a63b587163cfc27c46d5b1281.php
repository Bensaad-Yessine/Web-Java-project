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

/* Front/objectif_sante/_delete_form.html.twig */
class __TwigTemplate_92ce59cf345e0bb57409067a103762d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/objectif_sante/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/objectif_sante/_delete_form.html.twig"));

        // line 2
        yield "<form method=\"post\"
      action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_objectif_sante_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\"
      style=\"display:inline\"
      onsubmit=\"return confirm('Supprimer cet objectif ?');\">

  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif_sante"]) || array_key_exists("objectif_sante", $context) ? $context["objectif_sante"] : (function () { throw new RuntimeError('Variable "objectif_sante" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7))), "html", null, true);
        yield "\">
  <button type=\"submit\" 
          style=\"background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
                 color: white;
                 border: none;
                 padding: 8px 18px;
                 margin: 5px;
                 border-radius: 8px;
                 cursor: pointer;
                 font-size: 14px;
                 font-weight: 600;
                 display: inline-flex;
                 align-items: center;
                 gap: 8px;
                 box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                 transition: all 0.3s ease;
                 text-transform: uppercase;
                 letter-spacing: 0.5px;\">
    <span style=\"font-size: 16px;\">🗑️</span> Supprimer
  </button>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/objectif_sante/_delete_form.html.twig";
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
        return array (  58 => 7,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front/objectif_sante/_delete_form.html.twig #}
<form method=\"post\"
      action=\"{{ path('front_objectif_sante_delete', { id: objectif_sante.id }) }}\"
      style=\"display:inline\"
      onsubmit=\"return confirm('Supprimer cet objectif ?');\">

  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif_sante.id) }}\">
  <button type=\"submit\" 
          style=\"background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
                 color: white;
                 border: none;
                 padding: 8px 18px;
                 margin: 5px;
                 border-radius: 8px;
                 cursor: pointer;
                 font-size: 14px;
                 font-weight: 600;
                 display: inline-flex;
                 align-items: center;
                 gap: 8px;
                 box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                 transition: all 0.3s ease;
                 text-transform: uppercase;
                 letter-spacing: 0.5px;\">
    <span style=\"font-size: 16px;\">🗑️</span> Supprimer
  </button>
</form>", "Front/objectif_sante/_delete_form.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\Front\\objectif_sante\\_delete_form.html.twig");
    }
}
