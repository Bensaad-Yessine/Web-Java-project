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

/* classe/_table.html.twig */
class __TwigTemplate_c1dddb387f9e16e464576fc6d50b4682 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/_table.html.twig"));

        // line 1
        yield "<table class=\"table table-hover\" id=\"classesTable\">
  <thead>
    <tr>
      <th>ID</th>
      <th>
        <a href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 6, $this->source); })()) == "nom_asc")) ? ("nom_desc") : ("nom_asc"))]), "html", null, true);
        yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 6, $this->source); })()) == "nom_asc")) ? ("nom_desc") : ("nom_asc"));
        yield "\">
          Classe
          ";
        // line 8
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 8, $this->source); })()) == "nom_asc")) {
            yield "<i class=\"mdi mdi-arrow-up\"></i>";
        } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 8, $this->source); })()) == "nom_desc")) {
            yield "<i class=\"mdi mdi-arrow-down\"></i>";
        }
        // line 9
        yield "        </a>
      </th>
      <th>Nom Complet</th>
      <th>
        <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 13, $this->source); })()) == "niveau_asc")) ? ("niveau_desc") : ("niveau_asc"))]), "html", null, true);
        yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 13, $this->source); })()) == "niveau_asc")) ? ("niveau_desc") : ("niveau_asc"));
        yield "\">
          Niveau
          ";
        // line 15
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 15, $this->source); })()) == "niveau_asc")) {
            yield "<i class=\"mdi mdi-arrow-up\"></i>";
        } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 15, $this->source); })()) == "niveau_desc")) {
            yield "<i class=\"mdi mdi-arrow-down\"></i>";
        }
        // line 16
        yield "        </a>
      </th>
      <th>
        <a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index", ["sort" => ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 19, $this->source); })()) == "anneeuniversitaire_asc")) ? ("anneeuniversitaire_desc") : ("anneeuniversitaire_asc"))]), "html", null, true);
        yield "\" class=\"text-decoration-none sort-link\" data-sort=\"";
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 19, $this->source); })()) == "anneeuniversitaire_asc")) ? ("anneeuniversitaire_desc") : ("anneeuniversitaire_asc"));
        yield "\">
          Année Universitaire
          ";
        // line 21
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 21, $this->source); })()) == "anneeuniversitaire_asc")) {
            yield "<i class=\"mdi mdi-arrow-up\"></i>";
        } elseif (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 21, $this->source); })()) == "anneeuniversitaire_desc")) {
            yield "<i class=\"mdi mdi-arrow-down\"></i>";
        }
        // line 22
        yield "        </a>
      </th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 29
            yield "      <tr>
        <td>
          <span class=\"text-muted\">#";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</span>
        </td>
        <td>
          <div class=\"d-flex align-items-center\">
            <div class=\"class-avatar me-3\">
              ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 36), 0, 2)), "html", null, true);
            yield "
            </div>
            <div>
              <h6 class=\"mb-0 font-weight-bold\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 39), "html", null, true);
            yield "</h6>
              <small class=\"text-muted\">Classe ID: ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "</small>
            </div>
          </div>
        </td>
        <td>
          <strong>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</strong>
        </td>
        <td>
          ";
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "niveau", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "            <span class=\"class-badge badge-niveau\">
              <i class=\"mdi mdi-account-group me-1\"></i>
              ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "niveau", [], "any", false, false, false, 51), "html", null, true);
                yield "
            </span>
          ";
            } else {
                // line 54
                yield "            <span class=\"text-muted\">—</span>
          ";
            }
            // line 56
            yield "        </td>
        <td>
          ";
            // line 58
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "anneeuniversitaire", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "            <span class=\"class-badge badge-annee\">
              <i class=\"mdi mdi-calendar me-1\"></i>
              ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "anneeuniversitaire", [], "any", false, false, false, 61), "html", null, true);
                yield "
            </span>
          ";
            } else {
                // line 64
                yield "            <span class=\"text-muted\">—</span>
          ";
            }
            // line 66
            yield "        </td>
        <td>
          <div class=\"action-buttons\">
            <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" 
               class=\"btn btn-info btn-sm btn-icon\"
               title=\"Voir détails\">
              <i class=\"mdi mdi-eye\"></i>
            </a>
            <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" 
               class=\"btn btn-warning btn-sm btn-icon\"
               title=\"Modifier\">
              <i class=\"mdi mdi-pencil\"></i>
            </a>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                    data-classe-id=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 81), "html", null, true);
            yield "\"
                    data-classe-name=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 82), "html", null, true);
            yield "\"
                    data-csrf-token=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 83))), "html", null, true);
            yield "\"
                    title=\"Supprimer\">
              <i class=\"mdi mdi-delete\"></i>
            </button>
          </div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['classe'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        return "classe/_table.html.twig";
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
        return array (  234 => 91,  220 => 83,  216 => 82,  212 => 81,  202 => 74,  194 => 69,  189 => 66,  185 => 64,  179 => 61,  175 => 59,  173 => 58,  169 => 56,  165 => 54,  159 => 51,  155 => 49,  153 => 48,  147 => 45,  139 => 40,  135 => 39,  129 => 36,  121 => 31,  117 => 29,  113 => 28,  105 => 22,  99 => 21,  92 => 19,  87 => 16,  81 => 15,  74 => 13,  68 => 9,  62 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-hover\" id=\"classesTable\">
  <thead>
    <tr>
      <th>ID</th>
      <th>
        <a href=\"{{ path('app_classe_index', {sort: sort == 'nom_asc' ? 'nom_desc' : 'nom_asc'}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'nom_asc' ? 'nom_desc' : 'nom_asc' }}\">
          Classe
          {% if sort == 'nom_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'nom_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
        </a>
      </th>
      <th>Nom Complet</th>
      <th>
        <a href=\"{{ path('app_classe_index', {sort: sort == 'niveau_asc' ? 'niveau_desc' : 'niveau_asc'}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'niveau_asc' ? 'niveau_desc' : 'niveau_asc' }}\">
          Niveau
          {% if sort == 'niveau_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'niveau_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
        </a>
      </th>
      <th>
        <a href=\"{{ path('app_classe_index', {sort: sort == 'anneeuniversitaire_asc' ? 'anneeuniversitaire_desc' : 'anneeuniversitaire_asc'}) }}\" class=\"text-decoration-none sort-link\" data-sort=\"{{ sort == 'anneeuniversitaire_asc' ? 'anneeuniversitaire_desc' : 'anneeuniversitaire_asc' }}\">
          Année Universitaire
          {% if sort == 'anneeuniversitaire_asc' %}<i class=\"mdi mdi-arrow-up\"></i>{% elseif sort == 'anneeuniversitaire_desc' %}<i class=\"mdi mdi-arrow-down\"></i>{% endif %}
        </a>
      </th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    {% for classe in classes %}
      <tr>
        <td>
          <span class=\"text-muted\">#{{ classe.id }}</span>
        </td>
        <td>
          <div class=\"d-flex align-items-center\">
            <div class=\"class-avatar me-3\">
              {{ classe.nom|slice(0, 2)|upper }}
            </div>
            <div>
              <h6 class=\"mb-0 font-weight-bold\">{{ classe.nom }}</h6>
              <small class=\"text-muted\">Classe ID: {{ classe.id }}</small>
            </div>
          </div>
        </td>
        <td>
          <strong>{{ classe.nom }}</strong>
        </td>
        <td>
          {% if classe.niveau %}
            <span class=\"class-badge badge-niveau\">
              <i class=\"mdi mdi-account-group me-1\"></i>
              {{ classe.niveau }}
            </span>
          {% else %}
            <span class=\"text-muted\">—</span>
          {% endif %}
        </td>
        <td>
          {% if classe.anneeuniversitaire %}
            <span class=\"class-badge badge-annee\">
              <i class=\"mdi mdi-calendar me-1\"></i>
              {{ classe.anneeuniversitaire }}
            </span>
          {% else %}
            <span class=\"text-muted\">—</span>
          {% endif %}
        </td>
        <td>
          <div class=\"action-buttons\">
            <a href=\"{{ path('app_classe_show', {'id': classe.id}) }}\" 
               class=\"btn btn-info btn-sm btn-icon\"
               title=\"Voir détails\">
              <i class=\"mdi mdi-eye\"></i>
            </a>
            <a href=\"{{ path('app_classe_edit', {'id': classe.id}) }}\" 
               class=\"btn btn-warning btn-sm btn-icon\"
               title=\"Modifier\">
              <i class=\"mdi mdi-pencil\"></i>
            </a>
            <button type=\"button\" 
                    class=\"btn btn-danger btn-sm btn-icon delete-btn\"
                    data-classe-id=\"{{ classe.id }}\"
                    data-classe-name=\"{{ classe.nom }}\"
                    data-csrf-token=\"{{ csrf_token('delete' ~ classe.id) }}\"
                    title=\"Supprimer\">
              <i class=\"mdi mdi-delete\"></i>
            </button>
          </div>
        </td>
      </tr>
    {% endfor %}
  </tbody>
</table>
", "classe/_table.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\classe\\_table.html.twig");
    }
}
