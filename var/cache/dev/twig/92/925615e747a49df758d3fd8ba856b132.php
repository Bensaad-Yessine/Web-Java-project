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

/* suivi_bien_etre/_rows_by_objectif.html.twig */
class __TwigTemplate_0fd24bdd3f9285e9e36aec4ca81cefc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/_rows_by_objectif.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_bien_etre/_rows_by_objectif.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["suivi"]) {
            // line 2
            yield "  <tr>
    <td>";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 3), "html", null, true);
            yield "</td>
    <td>";
            // line 4
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "dateSaisie", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "dateSaisie", [], "any", false, false, false, 4), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
    <td>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "humeur", [], "any", false, false, false, 5), "html", null, true);
            yield "</td>
    <td>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "qualiteSommeil", [], "any", false, false, false, 6), "html", null, true);
            yield "</td>
    <td>";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "niveauEnergie", [], "any", false, false, false, 7), "html", null, true);
            yield "</td>
    <td>";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "niveauStress", [], "any", false, false, false, 8), "html", null, true);
            yield "</td>
    <td>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "qualiteAlimentation", [], "any", false, false, false, 9), "html", null, true);
            yield "</td>
    <td>";
            // line 10
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "score", [], "any", false, false, false, 10)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "score", [], "any", false, false, false, 10), "html", null, true)) : (0));
            yield "</td>
    <td>
      <div class=\"btn-group\" role=\"group\">
        <a href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm btn-icon\">
          <i class=\"mdi mdi-pencil\"></i>
        </a>
        <form method=\"POST\" action=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\"
              style=\"display:inline;\" onsubmit=\"return confirm('Supprimer ce suivi ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 18))), "html", null, true);
            yield "\">
          <button class=\"btn btn-danger btn-sm btn-icon\" type=\"submit\">
            <i class=\"mdi mdi-delete\"></i>
          </button>
        </form>
      </div>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['suivi'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
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
        return "suivi_bien_etre/_rows_by_objectif.html.twig";
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
        return array (  115 => 27,  100 => 18,  95 => 16,  89 => 13,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  67 => 6,  63 => 5,  59 => 4,  55 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for suivi in suivis %}
  <tr>
    <td>{{ suivi.id }}</td>
    <td>{{ suivi.dateSaisie ? suivi.dateSaisie|date('d/m/Y') : '—' }}</td>
    <td>{{ suivi.humeur }}</td>
    <td>{{ suivi.qualiteSommeil }}</td>
    <td>{{ suivi.niveauEnergie }}</td>
    <td>{{ suivi.niveauStress }}</td>
    <td>{{ suivi.qualiteAlimentation }}</td>
    <td>{{ suivi.score ?: 0 }}</td>
    <td>
      <div class=\"btn-group\" role=\"group\">
        <a href=\"{{ path('app_suivi_edit', { id: suivi.id }) }}\" class=\"btn btn-warning btn-sm btn-icon\">
          <i class=\"mdi mdi-pencil\"></i>
        </a>
        <form method=\"POST\" action=\"{{ path('app_suivi_delete', { id: suivi.id }) }}\"
              style=\"display:inline;\" onsubmit=\"return confirm('Supprimer ce suivi ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ suivi.id) }}\">
          <button class=\"btn btn-danger btn-sm btn-icon\" type=\"submit\">
            <i class=\"mdi mdi-delete\"></i>
          </button>
        </form>
      </div>
    </td>
  </tr>
{% endfor %}

", "suivi_bien_etre/_rows_by_objectif.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\suivi_bien_etre\\_rows_by_objectif.html.twig");
    }
}
