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

/* matiere_classe/_table.html.twig */
class __TwigTemplate_d871810d9a157217f2eafab290c9ab79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matiere_classe/_table.html.twig"));

        // line 1
        yield "<table class=\"table table-hover\" id=\"matiereClassesTable\">
  <thead>
    <tr>
      <th>ID</th>
      <th>
        <a href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 6, $this->source); })()) == "classe_asc")) ? ("classe_desc") : ("classe_asc")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 6, $this->source); })())]), "html", null, true);
        yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 6, $this->source); })()) == "classe_asc")) ? ("classe_desc") : ("classe_asc"));
        yield "\">
          Classe
          ";
        // line 8
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 8, $this->source); })()) == "classe_asc")) {
            yield "<i class=\"mdi mdi-arrow-up\"></i>";
        } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 8, $this->source); })()) == "classe_desc")) {
            yield "<i class=\"mdi mdi-arrow-down\"></i>";
        }
        // line 9
        yield "        </a>
      </th>
      <th>
        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 12, $this->source); })()) == "coefficient_asc")) ? ("coefficient_desc") : ("coefficient_asc")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 12, $this->source); })())]), "html", null, true);
        yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 12, $this->source); })()) == "coefficient_asc")) ? ("coefficient_desc") : ("coefficient_asc"));
        yield "\">
          Coefficient
          ";
        // line 14
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 14, $this->source); })()) == "coefficient_asc")) {
            yield "<i class=\"mdi mdi-arrow-up\"></i>";
        } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 14, $this->source); })()) == "coefficient_desc")) {
            yield "<i class=\"mdi mdi-arrow-down\"></i>";
        }
        // line 15
        yield "        </a>
      </th>
      <th>
        <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 18, $this->source); })()) == "chargehoraire_asc")) ? ("chargehoraire_desc") : ("chargehoraire_asc")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 18, $this->source); })())]), "html", null, true);
        yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 18, $this->source); })()) == "chargehoraire_asc")) ? ("chargehoraire_desc") : ("chargehoraire_asc"));
        yield "\">
          Charge Horaire
          ";
        // line 20
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 20, $this->source); })()) == "chargehoraire_asc")) {
            yield "<i class=\"mdi mdi-arrow-up\"></i>";
        } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 20, $this->source); })()) == "chargehoraire_desc")) {
            yield "<i class=\"mdi mdi-arrow-down\"></i>";
        }
        // line 21
        yield "        </a>
      </th>
      <th>
        <a href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 24, $this->source); })()) == "scorecomplexite_asc")) ? ("scorecomplexite_desc") : ("scorecomplexite_asc")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 24, $this->source); })())]), "html", null, true);
        yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 24, $this->source); })()) == "scorecomplexite_asc")) ? ("scorecomplexite_desc") : ("scorecomplexite_asc"));
        yield "\">
          Score Complexité
          ";
        // line 26
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 26, $this->source); })()) == "scorecomplexite_asc")) {
            yield "<i class=\"mdi mdi-arrow-up\"></i>";
        } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 26, $this->source); })()) == "scorecomplexite_desc")) {
            yield "<i class=\"mdi mdi-arrow-down\"></i>";
        }
        // line 27
        yield "        </a>
      </th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matiere_classes"]) || array_key_exists("matiere_classes", $context) ? $context["matiere_classes"] : (function () { throw new RuntimeError('Variable "matiere_classes" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere_classe"]) {
            // line 34
            yield "      ";
            $context["complexityClass"] = "";
            // line 35
            yield "      ";
            $context["complexityWidth"] = 0;
            // line 36
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 36) <= 3)) {
                // line 37
                yield "        ";
                $context["complexityClass"] = "complexity-low";
                // line 38
                yield "        ";
                $context["complexityWidth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 38) * 33.33);
                // line 39
                yield "      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 39) <= 6)) {
                // line 40
                yield "        ";
                $context["complexityClass"] = "complexity-medium";
                // line 41
                yield "        ";
                $context["complexityWidth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 41) * 16.67);
                // line 42
                yield "      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 42) <= 8)) {
                // line 43
                yield "        ";
                $context["complexityClass"] = "complexity-high";
                // line 44
                yield "        ";
                $context["complexityWidth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 44) * 12.5);
                // line 45
                yield "      ";
            } else {
                // line 46
                yield "        ";
                $context["complexityClass"] = "complexity-very-high";
                // line 47
                yield "        ";
                $context["complexityWidth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 47) * 10);
                // line 48
                yield "      ";
            }
            // line 49
            yield "      
      ";
            // line 50
            $context["chargeClass"] = "";
            // line 51
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "chargehoraire", [], "any", false, false, false, 51) <= 20)) {
                // line 52
                yield "        ";
                $context["chargeClass"] = "charge-light";
                // line 53
                yield "      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "chargehoraire", [], "any", false, false, false, 53) <= 40)) {
                // line 54
                yield "        ";
                $context["chargeClass"] = "charge-medium";
                // line 55
                yield "      ";
            } else {
                // line 56
                yield "        ";
                $context["chargeClass"] = "charge-heavy";
                // line 57
                yield "      ";
            }
            // line 58
            yield "      
      <tr class=\"matiere-class-row\" 
          data-complexity=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "scorecomplexite", [], "any", false, false, false, 60), "html", null, true);
            yield "\"
          data-charge=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "chargehoraire", [], "any", false, false, false, 61), "html", null, true);
            yield "\">
        <td>
          <span class=\"text-muted\">#";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "</span>
        </td>
        <td>
          <div class=\"d-flex align-items-center\">
            <div class=\"entity-avatar me-3\">
              <i class=\"mdi mdi-book-open-page-variant\"></i>
            </div>
            <div>
              <h6 class=\"mb-0\">Matière #";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "</h6>
              <small class=\"text-muted\">ID: ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 72), "html", null, true);
            yield "</small>
            </div>
          </div>
        </td>
        <td>
          <span class=\"badge-custom badge-coefficient\">
            <i class=\"mdi mdi-weight me-1\"></i>
            ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "coefficient", [], "any", false, false, false, 79), "html", null, true);
            yield "
          </span>
        </td>
        <td>
          <div class=\"charge-indicator\">
            <span class=\"charge-dot ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chargeClass"]) || array_key_exists("chargeClass", $context) ? $context["chargeClass"] : (function () { throw new RuntimeError('Variable "chargeClass" does not exist.', 84, $this->source); })()), "html", null, true);
            yield "\"></span>
            <span>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "chargehoraire", [], "any", false, false, false, 85), "html", null, true);
            yield "h</span>
          </div>
        </td>
        <td>
          <div class=\"complexity-bar\">
            <div class=\"complexity-fill ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complexityClass"]) || array_key_exists("complexityClass", $context) ? $context["complexityClass"] : (function () { throw new RuntimeError('Variable "complexityClass" does not exist.', 90, $this->source); })()), "html", null, true);
            yield "\" 
                 style=\"width: ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complexityWidth"]) || array_key_exists("complexityWidth", $context) ? $context["complexityWidth"] : (function () { throw new RuntimeError('Variable "complexityWidth" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "%\"></div>
          </div>
        </td>
        <td>
          <div class=\"action-buttons\">
            <a href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" 
               class=\"btn btn-info btn-sm btn-icon\"
               title=\"Voir détails\">
              <i class=\"mdi mdi-eye\"></i>
            </a>
            <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" 
               class=\"btn btn-warning btn-sm btn-icon\"
               title=\"Modifier\">
              <i class=\"mdi mdi-pencil\"></i>
            </a>
            <form method=\"post\" action=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" 
                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette affectation ?');\"
                  style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["matiere_classe"], "id", [], "any", false, false, false, 109))), "html", null, true);
            yield "\">
              <button type=\"submit\" 
                      class=\"btn btn-danger btn-sm btn-icon\"
                      title=\"Supprimer\">
                <i class=\"mdi mdi-delete\"></i>
              </button>
            </form>
          </div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matiere_classe'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "  </tbody>
</table>
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
        return "matiere_classe/_table.html.twig";
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
        return array (  314 => 120,  297 => 109,  291 => 106,  283 => 101,  275 => 96,  267 => 91,  263 => 90,  255 => 85,  251 => 84,  243 => 79,  233 => 72,  229 => 71,  218 => 63,  213 => 61,  209 => 60,  205 => 58,  202 => 57,  199 => 56,  196 => 55,  193 => 54,  190 => 53,  187 => 52,  184 => 51,  182 => 50,  179 => 49,  176 => 48,  173 => 47,  170 => 46,  167 => 45,  164 => 44,  161 => 43,  158 => 42,  155 => 41,  152 => 40,  149 => 39,  146 => 38,  143 => 37,  140 => 36,  137 => 35,  134 => 34,  130 => 33,  122 => 27,  116 => 26,  109 => 24,  104 => 21,  98 => 20,  91 => 18,  86 => 15,  80 => 14,  73 => 12,  68 => 9,  62 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-hover\" id=\"matiereClassesTable\">
  <thead>
    <tr>
      <th>ID</th>
      <th>
        <a href=\"{{ path('app_matiere_classe_index', {sort: sort == 'classe_asc' ? 'classe_desc' : 'classe_asc', search: search}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'classe_asc' ? 'classe_desc' : 'classe_asc' }}\">
          Classe
          {% if sort == 'classe_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'classe_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
        </a>
      </th>
      <th>
        <a href=\"{{ path('app_matiere_classe_index', {sort: sort == 'coefficient_asc' ? 'coefficient_desc' : 'coefficient_asc', search: search}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'coefficient_asc' ? 'coefficient_desc' : 'coefficient_asc' }}\">
          Coefficient
          {% if sort == 'coefficient_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'coefficient_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
        </a>
      </th>
      <th>
        <a href=\"{{ path('app_matiere_classe_index', {sort: sort == 'chargehoraire_asc' ? 'chargehoraire_desc' : 'chargehoraire_asc', search: search}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'chargehoraire_asc' ? 'chargehoraire_desc' : 'chargehoraire_asc' }}\">
          Charge Horaire
          {% if sort == 'chargehoraire_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'chargehoraire_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
        </a>
      </th>
      <th>
        <a href=\"{{ path('app_matiere_classe_index', {sort: sort == 'scorecomplexite_asc' ? 'scorecomplexite_desc' : 'scorecomplexite_asc', search: search}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'scorecomplexite_asc' ? 'scorecomplexite_desc' : 'scorecomplexite_asc' }}\">
          Score Complexité
          {% if sort == 'scorecomplexite_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'scorecomplexite_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
        </a>
      </th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    {% for matiere_classe in matiere_classes %}
      {% set complexityClass = '' %}
      {% set complexityWidth = 0 %}
      {% if matiere_classe.scorecomplexite <= 3 %}
        {% set complexityClass = 'complexity-low' %}
        {% set complexityWidth = matiere_classe.scorecomplexite * 33.33 %}
      {% elseif matiere_classe.scorecomplexite <= 6 %}
        {% set complexityClass = 'complexity-medium' %}
        {% set complexityWidth = matiere_classe.scorecomplexite * 16.67 %}
      {% elseif matiere_classe.scorecomplexite <= 8 %}
        {% set complexityClass = 'complexity-high' %}
        {% set complexityWidth = matiere_classe.scorecomplexite * 12.5 %}
      {% else %}
        {% set complexityClass = 'complexity-very-high' %}
        {% set complexityWidth = matiere_classe.scorecomplexite * 10 %}
      {% endif %}
      
      {% set chargeClass = '' %}
      {% if matiere_classe.chargehoraire <= 20 %}
        {% set chargeClass = 'charge-light' %}
      {% elseif matiere_classe.chargehoraire <= 40 %}
        {% set chargeClass = 'charge-medium' %}
      {% else %}
        {% set chargeClass = 'charge-heavy' %}
      {% endif %}
      
      <tr class=\"matiere-class-row\" 
          data-complexity=\"{{ matiere_classe.scorecomplexite }}\"
          data-charge=\"{{ matiere_classe.chargehoraire }}\">
        <td>
          <span class=\"text-muted\">#{{ matiere_classe.id }}</span>
        </td>
        <td>
          <div class=\"d-flex align-items-center\">
            <div class=\"entity-avatar me-3\">
              <i class=\"mdi mdi-book-open-page-variant\"></i>
            </div>
            <div>
              <h6 class=\"mb-0\">Matière #{{ matiere_classe.id }}</h6>
              <small class=\"text-muted\">ID: {{ matiere_classe.id }}</small>
            </div>
          </div>
        </td>
        <td>
          <span class=\"badge-custom badge-coefficient\">
            <i class=\"mdi mdi-weight me-1\"></i>
            {{ matiere_classe.coefficient }}
          </span>
        </td>
        <td>
          <div class=\"charge-indicator\">
            <span class=\"charge-dot {{ chargeClass }}\"></span>
            <span>{{ matiere_classe.chargehoraire }}h</span>
          </div>
        </td>
        <td>
          <div class=\"complexity-bar\">
            <div class=\"complexity-fill {{ complexityClass }}\" 
                 style=\"width: {{ complexityWidth }}%\"></div>
          </div>
        </td>
        <td>
          <div class=\"action-buttons\">
            <a href=\"{{ path('app_matiere_classe_show', {'id': matiere_classe.id}) }}\" 
               class=\"btn btn-info btn-sm btn-icon\"
               title=\"Voir détails\">
              <i class=\"mdi mdi-eye\"></i>
            </a>
            <a href=\"{{ path('app_matiere_classe_edit', {'id': matiere_classe.id}) }}\" 
               class=\"btn btn-warning btn-sm btn-icon\"
               title=\"Modifier\">
              <i class=\"mdi mdi-pencil\"></i>
            </a>
            <form method=\"post\" action=\"{{ path('app_matiere_classe_delete', {'id': matiere_classe.id}) }}\" 
                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette affectation ?');\"
                  style=\"display: inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ matiere_classe.id) }}\">
              <button type=\"submit\" 
                      class=\"btn btn-danger btn-sm btn-icon\"
                      title=\"Supprimer\">
                <i class=\"mdi mdi-delete\"></i>
              </button>
            </form>
          </div>
        </td>
      </tr>
    {% endfor %}
  </tbody>
</table>
", "matiere_classe/_table.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\matiere_classe\\_table.html.twig");
    }
}
