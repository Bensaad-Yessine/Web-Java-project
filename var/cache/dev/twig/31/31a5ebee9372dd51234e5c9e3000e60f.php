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

/* quiz/admin_matiere.html.twig */
class __TwigTemplate_ae52243487343ae082911554bdce4291 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "classe/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/admin_matiere.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/admin_matiere.html.twig"));

        $this->parent = $this->load("classe/base.html.twig", 1);
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

        yield "Quiz — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <style>
      body {
        background: radial-gradient(circle at top left, #0f172a 0, #020617 45%, #020617 100%);
        color: #e5e7eb;
      }
      .quiz-page {
        padding: 2.5rem 0;
      }
      .quiz-header {
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        margin-bottom:1.5rem;
        gap:1.5rem;
      }
      .quiz-title {
        font-size:1.35rem;
        font-weight:600;
        display:flex;
        align-items:center;
        gap:.75rem;
        color:#f9fafb;
      }
      .quiz-title-icon {
        width:40px;
        height:40px;
        border-radius:999px;
        background:linear-gradient(135deg,#6366f1,#ec4899);
        display:flex;
        align-items:center;
        justify-content:center;
        color:#fff;
        box-shadow:0 12px 30px rgba(79,70,229,.6);
      }
      .quiz-subtitle {
        margin-top:.25rem;
        color:#9ca3af;
        font-size:.9rem;
      }
      .pill {
        display:inline-flex;
        align-items:center;
        gap:.4rem;
        padding:.35rem .75rem;
        border-radius:999px;
        font-size:.75rem;
        text-transform:uppercase;
        letter-spacing:.08em;
        border:1px solid rgba(148,163,184,.6);
        color:#9ca3af;
      }
      .pill--success {
        border-color:rgba(34,197,94,.7);
        color:#bbf7d0;
        background:rgba(22,163,74,.08);
      }
      .pill-dot {
        width:6px;
        height:6px;
        border-radius:999px;
        background:#22c55e;
      }
      .quiz-layout {
        display:grid;
        grid-template-columns:minmax(0,3fr) minmax(0,1.35fr);
        gap:1.75rem;
      }
      @media (max-width: 991.98px) {
        .quiz-layout {
          grid-template-columns: minmax(0, 1fr);
        }
        .quiz-header {
          flex-direction: column;
          align-items: flex-start;
        }
      }
      .quiz-card {
        background: radial-gradient(circle at top left, rgba(15,23,42,.9), rgba(15,23,42,.96));
        border-radius: 18px;
        border:1px solid rgba(148,163,184,.4);
        box-shadow:0 24px 70px rgba(15,23,42,.9);
        overflow:hidden;
      }
      .quiz-card__header {
        padding:1rem 1.5rem;
        border-bottom:1px solid rgba(148,163,184,.35);
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:1rem;
      }
      .quiz-card__title {
        font-size:.95rem;
        font-weight:600;
        color:#e5e7eb;
        display:flex;
        align-items:center;
        gap:.5rem;
      }
      .quiz-card__title i {
        font-size:1.15rem;
        color:#6366f1;
      }
      .quiz-card__body {
        padding:0;
      }
      .quiz-table {
        margin-bottom:0;
        border-collapse:separate;
        border-spacing:0;
      }
      .quiz-table thead {
        background:linear-gradient(to right,rgba(15,23,42,.9),rgba(17,24,39,.9));
      }
      .quiz-table th {
        font-size:.75rem;
        font-weight:600;
        text-transform:uppercase;
        letter-spacing:.08em;
        color:#9ca3af;
        border-bottom-color:rgba(55,65,81,.9);
        padding:.75rem 1.25rem;
        background:transparent;
      }
      .quiz-table tbody tr {
        background:rgba(15,23,42,.96);
      }
      .quiz-table tbody tr:nth-child(even) {
        background:rgba(15,23,42,.98);
      }
      .quiz-table td {
        border-top-color:rgba(31,41,55,.9);
        padding:.75rem 1.25rem;
        font-size:.9rem;
        color:#e5e7eb;
      }
      .quiz-table tbody tr:hover {
        background:rgba(30,64,175,.7);
      }
      .badge-answer {
        display:inline-flex;
        align-items:center;
        gap:.4rem;
        padding:.2rem .6rem;
        border-radius:.5rem;
        font-size:.75rem;
        background:rgba(22,163,74,.16);
        color:#bbf7d0;
        border:1px solid rgba(34,197,94,.6);
      }
      .badge-answer-letter {
        display:inline-flex;
        width:18px;
        height:18px;
        border-radius:999px;
        align-items:center;
        justify-content:center;
        background:rgba(21,128,61,.85);
        font-size:.7rem;
      }
      .badge-answer-text {
        font-size:.78rem;
        color:#bbf7d0;
      }
      .question-text {
        max-width:520px;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
      }
      .actions {
        display:flex;
        justify-content:flex-end;
        gap:.35rem;
      }
      .btn-glass {
        border-radius:999px;
        padding:.3rem .75rem;
        border:1px solid rgba(148,163,184,.5);
        background:rgba(15,23,42,.8);
        color:#e5e7eb;
        font-size:.8rem;
        display:inline-flex;
        align-items:center;
        gap:.35rem;
        transition:all .16s ease-out;
      }
      .btn-glass--primary {
        border-color:rgba(59,130,246,.7);
        color:#bfdbfe;
      }
      .btn-glass--danger {
        border-color:rgba(239,68,68,.7);
        color:#fecaca;
      }
      .btn-glass:hover {
        transform:translateY(-1px);
        box-shadow:0 12px 30px rgba(15,23,42,.9);
        text-decoration:none;
        background:rgba(15,23,42,.95);
      }
      .btn-pill-primary {
        border-radius:999px;
        padding:.45rem .95rem;
        font-size:.82rem;
        border:none;
        background:linear-gradient(135deg,#6366f1,#ec4899);
        color:#f9fafb;
        display:inline-flex;
        align-items:center;
        gap:.4rem;
        box-shadow:0 14px 35px rgba(79,70,229,.8);
      }
      .btn-pill-primary:hover {
        filter:brightness(1.05);
        transform:translateY(-1px);
        text-decoration:none;
      }
      .empty-state {
        padding:2.25rem 1.5rem;
        text-align:center;
      }
      .empty-state-icon {
        width:48px;
        height:48px;
        border-radius:999px;
        margin:0 auto .75rem;
        background:rgba(30,64,175,.6);
        display:flex;
        align-items:center;
        justify-content:center;
        color:#bfdbfe;
        box-shadow:0 15px 40px rgba(30,64,175,.7);
      }
      .empty-state-title {
        font-size:1rem;
        font-weight:500;
        color:#e5e7eb;
        margin-bottom:.25rem;
      }
      .empty-state-text {
        font-size:.86rem;
        color:#9ca3af;
        margin-bottom:1.25rem;
      }
      .side-card {
        background:radial-gradient(circle at top,rgba(15,23,42,1),rgba(15,23,42,.95));
        border-radius:18px;
        border:1px solid rgba(148,163,184,.4);
        padding:1.5rem 1.35rem 1.35rem;
        color:#e5e7eb;
      }
      .side-card__label {
        font-size:.75rem;
        text-transform:uppercase;
        letter-spacing:.12em;
        color:#9ca3af;
        margin-bottom:.25rem;
      }
      .side-card__title {
        font-size:1.05rem;
        font-weight:600;
        margin-bottom:.85rem;
      }
      .side-meta {
        display:grid;
        grid-template-columns:repeat(2,minmax(0,1fr));
        gap:.85rem;
        margin-bottom:1.1rem;
      }
      .side-meta-item {
        padding:.6rem .75rem;
        border-radius:.75rem;
        background:rgba(15,23,42,.9);
        border:1px solid rgba(55,65,81,.9);
        font-size:.8rem;
      }
      .side-meta-label {
        font-size:.72rem;
        text-transform:uppercase;
        letter-spacing:.1em;
        color:#9ca3af;
      }
      .side-meta-value {
        margin-top:.15rem;
        font-weight:500;
        color:#e5e7eb;
      }
      .side-meta-value strong {
        font-size:1.05rem;
      }
      .side-footer {
        padding-top:.9rem;
        border-top:1px dashed rgba(55,65,81,.9);
        font-size:.8rem;
        color:#9ca3af;
      }
      .side-footer a {
        color:#c7d2fe;
      }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 312
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 313
        yield "<div class=\"quiz-page container\">
    <div class=\"quiz-header\">
        <div>
            <div class=\"quiz-title\">
                <div class=\"quiz-title-icon\">
                    <i class=\"mdi mdi-help-circle-outline\"></i>
                </div>
                <div>
                    <div>Quiz — ";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 321, $this->source); })()), "nom", [], "any", false, false, false, 321), "html", null, true);
        yield "</div>
                    <div class=\"quiz-subtitle\">
                        Créez et maintenez un quiz précis pour évaluer le niveau des étudiants sur cette matière.
                    </div>
                </div>
            </div>
        </div>
        <div class=\"d-flex flex-column align-items-end gap-2\">
            <span class=\"pill pill--success\">
                <span class=\"pill-dot\"></span>
                ";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 331, $this->source); })())), "html", null, true);
        yield " question";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 331, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                configurée";
        // line 332
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 332, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
            </span>
            <div class=\"d-flex gap-2 mt-1\">
                <a href=\"";
        // line 335
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_classe_index");
        yield "\" class=\"btn-glass\">
                    <i class=\"mdi mdi-arrow-left\"></i>
                    Matieres
                </a>
                <a href=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_matiere", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 339, $this->source); })()), "id", [], "any", false, false, false, 339)]), "html", null, true);
        yield "\" class=\"btn-glass\">
                    <i class=\"mdi mdi-eye-outline\"></i>
                    Voir comme étudiant
                </a>
                <a href=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_quiz_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 343, $this->source); })()), "id", [], "any", false, false, false, 343)]), "html", null, true);
        yield "\" class=\"btn-pill-primary\">
                    <i class=\"mdi mdi-plus-circle-outline\"></i>
                    Nouvelle question
                </a>
            </div>
        </div>
    </div>

    ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 351, $this->source); })()), "flashes", [], "any", false, false, false, 351));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 352
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 353
                yield "            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ("success"));
                yield " mb-3\">
                ";
                // line 354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        yield "
    <div class=\"quiz-layout\">
        <div class=\"quiz-card\">
            <div class=\"quiz-card__header\">
                <div class=\"quiz-card__title\">
                    <i class=\"mdi mdi-format-list-bulleted\"></i>
                    <span>Banque de questions</span>
                </div>
                ";
        // line 366
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 366, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 367
            yield "                    <span class=\"text-xs text-muted\">
                        Cliquez sur une ligne pour modifier une question.
                    </span>
                ";
        }
        // line 371
        yield "            </div>
            <div class=\"quiz-card__body table-responsive\">
                <table class=\"table quiz-table align-middle\">
                    <thead>
                        <tr>
                            <th style=\"width:60px;\">#</th>
                            <th>Question</th>
                            <th style=\"width:220px;\">Réponse correcte</th>
                            <th style=\"width:170px;\" class=\"text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 383, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 384
            yield "                            <tr onclick=\"window.location='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_quiz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 384)]), "html", null, true);
            yield "'\" style=\"cursor:pointer;\">
                                <td class=\"text-muted\">Q";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 385), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"question-text\">
                                        ";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 388), "html", null, true);
            yield "
                                    </div>
                                </td>
                                <td>
                                    <span class=\"badge-answer\">
                                        <span class=\"badge-answer-letter\">";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "correctChoice", [], "any", false, false, false, 393), "html", null, true);
            yield "</span>
                                        <span class=\"badge-answer-text\">
                                            ";
            // line 395
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["q"], "correctChoice", [], "any", false, false, false, 395) == "A")) {
                // line 396
                yield "                                                ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceA", [], "any", true, true, false, 396) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceA", [], "any", false, false, false, 396)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceA", [], "any", false, false, false, 396), "html", null, true)) : ("Réponse A"));
                yield "
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 397
$context["q"], "correctChoice", [], "any", false, false, false, 397) == "B")) {
                // line 398
                yield "                                                ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceB", [], "any", true, true, false, 398) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceB", [], "any", false, false, false, 398)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceB", [], "any", false, false, false, 398), "html", null, true)) : ("Réponse B"));
                yield "
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 399
$context["q"], "correctChoice", [], "any", false, false, false, 399) == "C")) {
                // line 400
                yield "                                                ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceC", [], "any", true, true, false, 400) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceC", [], "any", false, false, false, 400)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceC", [], "any", false, false, false, 400), "html", null, true)) : ("Réponse C"));
                yield "
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 401
$context["q"], "correctChoice", [], "any", false, false, false, 401) == "D")) {
                // line 402
                yield "                                                ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceD", [], "any", true, true, false, 402) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceD", [], "any", false, false, false, 402)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceD", [], "any", false, false, false, 402), "html", null, true)) : ("Réponse D"));
                yield "
                                            ";
            } else {
                // line 404
                yield "                                                Non défini
                                            ";
            }
            // line 406
            yield "                                        </span>
                                    </span>
                                </td>
                                <td class=\"text-end\" onclick=\"event.stopPropagation();\">
                                    <div class=\"actions\">
                                        <a href=\"";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_quiz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 411)]), "html", null, true);
            yield "\" class=\"btn-glass btn-glass--primary\">
                                            <i class=\"mdi mdi-pencil-outline\"></i>
                                            Éditer
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_quiz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 415)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cette question ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_quiz_question_" . CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 416))), "html", null, true);
            yield "\">
                                            <button class=\"btn-glass btn-glass--danger\" type=\"submit\">
                                                <i class=\"mdi mdi-trash-can-outline\"></i>
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 425
        if (!$context['_iterated']) {
            // line 426
            yield "                            <tr>
                                <td colspan=\"4\" class=\"p-0\">
                                    <div class=\"empty-state\">
                                        <div class=\"empty-state-icon\">
                                            <i class=\"mdi mdi-help-network-outline\"></i>
                                        </div>
                                        <div class=\"empty-state-title\">
                                            Aucun quiz configuré pour cette matière
                                        </div>
                                        <div class=\"empty-state-text\">
                                            Commencez par créer 5 à 10 questions couvrant les fondamentaux de
                                            <strong>";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 437, $this->source); })()), "nom", [], "any", false, false, false, 437), "html", null, true);
            yield "</strong>.
                                        </div>
                                        <a href=\"";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_quiz_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 439, $this->source); })()), "id", [], "any", false, false, false, 439)]), "html", null, true);
            yield "\" class=\"btn-pill-primary\">
                                            <i class=\"mdi mdi-plus-circle-outline\"></i>
                                            Créer la première question
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['q'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <aside class=\"side-card\">
            <div class=\"side-card__label\">Vue d'ensemble</div>
            <div class=\"side-card__title\">Qualité du quiz</div>

            <div class=\"side-meta\">
                <div class=\"side-meta-item\">
                    <div class=\"side-meta-label\">Questions</div>
                    <div class=\"side-meta-value\">
                        <strong>";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 460, $this->source); })())), "html", null, true);
        yield "</strong>
                        <span class=\"d-block text-xs text-muted\">ciblées sur ";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 461, $this->source); })()), "nom", [], "any", false, false, false, 461), "html", null, true);
        yield "</span>
                    </div>
                </div>
                <div class=\"side-meta-item\">
                    <div class=\"side-meta-label\">Couverture</div>
                    <div class=\"side-meta-value\">
                        <strong>
                            ";
        // line 468
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 468, $this->source); })())) == 0)) {
            // line 469
            yield "                                0%
                            ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 470
(isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 470, $this->source); })())) < 5)) {
            // line 471
            yield "                                ~30%
                            ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 472
(isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 472, $this->source); })())) < 10)) {
            // line 473
            yield "                                ~60%
                            ";
        } else {
            // line 475
            yield "                                90%+
                            ";
        }
        // line 477
        yield "                        </strong>
                        <span class=\"d-block text-xs text-muted\">du chapitre estimée</span>
                    </div>
                </div>
            </div>

            <ul class=\"mb-3\" style=\"padding-left:1.1rem; font-size:.8rem; color:#9ca3af;\">
                <li class=\"mb-1\">Visez au moins <strong>10 questions variées</strong> par matière.</li>
                <li class=\"mb-1\">Mixez des questions de <strong>définition</strong>, <strong>cas pratiques</strong> et <strong>pièges classiques</strong>.</li>
                <li>Ajoutez une <strong>explication</strong> pour chaque bonne réponse pour faire du quiz un outil pédagogique.</li>
            </ul>

            <div class=\"side-footer\">
                Les étudiants accèdent à ce quiz via la vue front de la classe.
                <br>
                <a href=\"";
        // line 492
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        yield "\">Retour à la gestion des classes</a>
            </div>
        </aside>
    </div>
</div>
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
        return "quiz/admin_matiere.html.twig";
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
        return array (  774 => 492,  757 => 477,  753 => 475,  749 => 473,  747 => 472,  744 => 471,  742 => 470,  739 => 469,  737 => 468,  727 => 461,  723 => 460,  708 => 447,  694 => 439,  689 => 437,  676 => 426,  674 => 425,  652 => 416,  648 => 415,  641 => 411,  634 => 406,  630 => 404,  624 => 402,  622 => 401,  617 => 400,  615 => 399,  610 => 398,  608 => 397,  603 => 396,  601 => 395,  596 => 393,  588 => 388,  582 => 385,  577 => 384,  559 => 383,  545 => 371,  539 => 367,  537 => 366,  527 => 358,  521 => 357,  512 => 354,  507 => 353,  502 => 352,  498 => 351,  487 => 343,  480 => 339,  473 => 335,  467 => 332,  461 => 331,  448 => 321,  438 => 313,  425 => 312,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'classe/base.html.twig' %}

{% block title %}Quiz — {{ matiere.nom }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <style>
      body {
        background: radial-gradient(circle at top left, #0f172a 0, #020617 45%, #020617 100%);
        color: #e5e7eb;
      }
      .quiz-page {
        padding: 2.5rem 0;
      }
      .quiz-header {
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        margin-bottom:1.5rem;
        gap:1.5rem;
      }
      .quiz-title {
        font-size:1.35rem;
        font-weight:600;
        display:flex;
        align-items:center;
        gap:.75rem;
        color:#f9fafb;
      }
      .quiz-title-icon {
        width:40px;
        height:40px;
        border-radius:999px;
        background:linear-gradient(135deg,#6366f1,#ec4899);
        display:flex;
        align-items:center;
        justify-content:center;
        color:#fff;
        box-shadow:0 12px 30px rgba(79,70,229,.6);
      }
      .quiz-subtitle {
        margin-top:.25rem;
        color:#9ca3af;
        font-size:.9rem;
      }
      .pill {
        display:inline-flex;
        align-items:center;
        gap:.4rem;
        padding:.35rem .75rem;
        border-radius:999px;
        font-size:.75rem;
        text-transform:uppercase;
        letter-spacing:.08em;
        border:1px solid rgba(148,163,184,.6);
        color:#9ca3af;
      }
      .pill--success {
        border-color:rgba(34,197,94,.7);
        color:#bbf7d0;
        background:rgba(22,163,74,.08);
      }
      .pill-dot {
        width:6px;
        height:6px;
        border-radius:999px;
        background:#22c55e;
      }
      .quiz-layout {
        display:grid;
        grid-template-columns:minmax(0,3fr) minmax(0,1.35fr);
        gap:1.75rem;
      }
      @media (max-width: 991.98px) {
        .quiz-layout {
          grid-template-columns: minmax(0, 1fr);
        }
        .quiz-header {
          flex-direction: column;
          align-items: flex-start;
        }
      }
      .quiz-card {
        background: radial-gradient(circle at top left, rgba(15,23,42,.9), rgba(15,23,42,.96));
        border-radius: 18px;
        border:1px solid rgba(148,163,184,.4);
        box-shadow:0 24px 70px rgba(15,23,42,.9);
        overflow:hidden;
      }
      .quiz-card__header {
        padding:1rem 1.5rem;
        border-bottom:1px solid rgba(148,163,184,.35);
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:1rem;
      }
      .quiz-card__title {
        font-size:.95rem;
        font-weight:600;
        color:#e5e7eb;
        display:flex;
        align-items:center;
        gap:.5rem;
      }
      .quiz-card__title i {
        font-size:1.15rem;
        color:#6366f1;
      }
      .quiz-card__body {
        padding:0;
      }
      .quiz-table {
        margin-bottom:0;
        border-collapse:separate;
        border-spacing:0;
      }
      .quiz-table thead {
        background:linear-gradient(to right,rgba(15,23,42,.9),rgba(17,24,39,.9));
      }
      .quiz-table th {
        font-size:.75rem;
        font-weight:600;
        text-transform:uppercase;
        letter-spacing:.08em;
        color:#9ca3af;
        border-bottom-color:rgba(55,65,81,.9);
        padding:.75rem 1.25rem;
        background:transparent;
      }
      .quiz-table tbody tr {
        background:rgba(15,23,42,.96);
      }
      .quiz-table tbody tr:nth-child(even) {
        background:rgba(15,23,42,.98);
      }
      .quiz-table td {
        border-top-color:rgba(31,41,55,.9);
        padding:.75rem 1.25rem;
        font-size:.9rem;
        color:#e5e7eb;
      }
      .quiz-table tbody tr:hover {
        background:rgba(30,64,175,.7);
      }
      .badge-answer {
        display:inline-flex;
        align-items:center;
        gap:.4rem;
        padding:.2rem .6rem;
        border-radius:.5rem;
        font-size:.75rem;
        background:rgba(22,163,74,.16);
        color:#bbf7d0;
        border:1px solid rgba(34,197,94,.6);
      }
      .badge-answer-letter {
        display:inline-flex;
        width:18px;
        height:18px;
        border-radius:999px;
        align-items:center;
        justify-content:center;
        background:rgba(21,128,61,.85);
        font-size:.7rem;
      }
      .badge-answer-text {
        font-size:.78rem;
        color:#bbf7d0;
      }
      .question-text {
        max-width:520px;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
      }
      .actions {
        display:flex;
        justify-content:flex-end;
        gap:.35rem;
      }
      .btn-glass {
        border-radius:999px;
        padding:.3rem .75rem;
        border:1px solid rgba(148,163,184,.5);
        background:rgba(15,23,42,.8);
        color:#e5e7eb;
        font-size:.8rem;
        display:inline-flex;
        align-items:center;
        gap:.35rem;
        transition:all .16s ease-out;
      }
      .btn-glass--primary {
        border-color:rgba(59,130,246,.7);
        color:#bfdbfe;
      }
      .btn-glass--danger {
        border-color:rgba(239,68,68,.7);
        color:#fecaca;
      }
      .btn-glass:hover {
        transform:translateY(-1px);
        box-shadow:0 12px 30px rgba(15,23,42,.9);
        text-decoration:none;
        background:rgba(15,23,42,.95);
      }
      .btn-pill-primary {
        border-radius:999px;
        padding:.45rem .95rem;
        font-size:.82rem;
        border:none;
        background:linear-gradient(135deg,#6366f1,#ec4899);
        color:#f9fafb;
        display:inline-flex;
        align-items:center;
        gap:.4rem;
        box-shadow:0 14px 35px rgba(79,70,229,.8);
      }
      .btn-pill-primary:hover {
        filter:brightness(1.05);
        transform:translateY(-1px);
        text-decoration:none;
      }
      .empty-state {
        padding:2.25rem 1.5rem;
        text-align:center;
      }
      .empty-state-icon {
        width:48px;
        height:48px;
        border-radius:999px;
        margin:0 auto .75rem;
        background:rgba(30,64,175,.6);
        display:flex;
        align-items:center;
        justify-content:center;
        color:#bfdbfe;
        box-shadow:0 15px 40px rgba(30,64,175,.7);
      }
      .empty-state-title {
        font-size:1rem;
        font-weight:500;
        color:#e5e7eb;
        margin-bottom:.25rem;
      }
      .empty-state-text {
        font-size:.86rem;
        color:#9ca3af;
        margin-bottom:1.25rem;
      }
      .side-card {
        background:radial-gradient(circle at top,rgba(15,23,42,1),rgba(15,23,42,.95));
        border-radius:18px;
        border:1px solid rgba(148,163,184,.4);
        padding:1.5rem 1.35rem 1.35rem;
        color:#e5e7eb;
      }
      .side-card__label {
        font-size:.75rem;
        text-transform:uppercase;
        letter-spacing:.12em;
        color:#9ca3af;
        margin-bottom:.25rem;
      }
      .side-card__title {
        font-size:1.05rem;
        font-weight:600;
        margin-bottom:.85rem;
      }
      .side-meta {
        display:grid;
        grid-template-columns:repeat(2,minmax(0,1fr));
        gap:.85rem;
        margin-bottom:1.1rem;
      }
      .side-meta-item {
        padding:.6rem .75rem;
        border-radius:.75rem;
        background:rgba(15,23,42,.9);
        border:1px solid rgba(55,65,81,.9);
        font-size:.8rem;
      }
      .side-meta-label {
        font-size:.72rem;
        text-transform:uppercase;
        letter-spacing:.1em;
        color:#9ca3af;
      }
      .side-meta-value {
        margin-top:.15rem;
        font-weight:500;
        color:#e5e7eb;
      }
      .side-meta-value strong {
        font-size:1.05rem;
      }
      .side-footer {
        padding-top:.9rem;
        border-top:1px dashed rgba(55,65,81,.9);
        font-size:.8rem;
        color:#9ca3af;
      }
      .side-footer a {
        color:#c7d2fe;
      }
    </style>
{% endblock %}

{% block body %}
<div class=\"quiz-page container\">
    <div class=\"quiz-header\">
        <div>
            <div class=\"quiz-title\">
                <div class=\"quiz-title-icon\">
                    <i class=\"mdi mdi-help-circle-outline\"></i>
                </div>
                <div>
                    <div>Quiz — {{ matiere.nom }}</div>
                    <div class=\"quiz-subtitle\">
                        Créez et maintenez un quiz précis pour évaluer le niveau des étudiants sur cette matière.
                    </div>
                </div>
            </div>
        </div>
        <div class=\"d-flex flex-column align-items-end gap-2\">
            <span class=\"pill pill--success\">
                <span class=\"pill-dot\"></span>
                {{ questions|length }} question{{ questions|length > 1 ? 's' : '' }}
                configurée{{ questions|length > 1 ? 's' : '' }}
            </span>
            <div class=\"d-flex gap-2 mt-1\">
                <a href=\"{{ path('app_matiere_classe_index') }}\" class=\"btn-glass\">
                    <i class=\"mdi mdi-arrow-left\"></i>
                    Matieres
                </a>
                <a href=\"{{ path('app_quiz_matiere', {id: matiere.id}) }}\" class=\"btn-glass\">
                    <i class=\"mdi mdi-eye-outline\"></i>
                    Voir comme étudiant
                </a>
                <a href=\"{{ path('app_admin_quiz_new', {id: matiere.id}) }}\" class=\"btn-pill-primary\">
                    <i class=\"mdi mdi-plus-circle-outline\"></i>
                    Nouvelle question
                </a>
            </div>
        </div>
    </div>

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label == 'error' ? 'danger' : 'success' }} mb-3\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <div class=\"quiz-layout\">
        <div class=\"quiz-card\">
            <div class=\"quiz-card__header\">
                <div class=\"quiz-card__title\">
                    <i class=\"mdi mdi-format-list-bulleted\"></i>
                    <span>Banque de questions</span>
                </div>
                {% if questions|length %}
                    <span class=\"text-xs text-muted\">
                        Cliquez sur une ligne pour modifier une question.
                    </span>
                {% endif %}
            </div>
            <div class=\"quiz-card__body table-responsive\">
                <table class=\"table quiz-table align-middle\">
                    <thead>
                        <tr>
                            <th style=\"width:60px;\">#</th>
                            <th>Question</th>
                            <th style=\"width:220px;\">Réponse correcte</th>
                            <th style=\"width:170px;\" class=\"text-end\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for q in questions %}
                            <tr onclick=\"window.location='{{ path('app_admin_quiz_edit', {id: q.id}) }}'\" style=\"cursor:pointer;\">
                                <td class=\"text-muted\">Q{{ loop.index }}</td>
                                <td>
                                    <div class=\"question-text\">
                                        {{ q.question }}
                                    </div>
                                </td>
                                <td>
                                    <span class=\"badge-answer\">
                                        <span class=\"badge-answer-letter\">{{ q.correctChoice }}</span>
                                        <span class=\"badge-answer-text\">
                                            {% if q.correctChoice == 'A' %}
                                                {{ q.choiceA ?? 'Réponse A' }}
                                            {% elseif q.correctChoice == 'B' %}
                                                {{ q.choiceB ?? 'Réponse B' }}
                                            {% elseif q.correctChoice == 'C' %}
                                                {{ q.choiceC ?? 'Réponse C' }}
                                            {% elseif q.correctChoice == 'D' %}
                                                {{ q.choiceD ?? 'Réponse D' }}
                                            {% else %}
                                                Non défini
                                            {% endif %}
                                        </span>
                                    </span>
                                </td>
                                <td class=\"text-end\" onclick=\"event.stopPropagation();\">
                                    <div class=\"actions\">
                                        <a href=\"{{ path('app_admin_quiz_edit', {id: q.id}) }}\" class=\"btn-glass btn-glass--primary\">
                                            <i class=\"mdi mdi-pencil-outline\"></i>
                                            Éditer
                                        </a>
                                        <form method=\"post\" action=\"{{ path('app_admin_quiz_delete', {id: q.id}) }}\" onsubmit=\"return confirm('Supprimer cette question ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_quiz_question_' ~ q.id) }}\">
                                            <button class=\"btn-glass btn-glass--danger\" type=\"submit\">
                                                <i class=\"mdi mdi-trash-can-outline\"></i>
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"p-0\">
                                    <div class=\"empty-state\">
                                        <div class=\"empty-state-icon\">
                                            <i class=\"mdi mdi-help-network-outline\"></i>
                                        </div>
                                        <div class=\"empty-state-title\">
                                            Aucun quiz configuré pour cette matière
                                        </div>
                                        <div class=\"empty-state-text\">
                                            Commencez par créer 5 à 10 questions couvrant les fondamentaux de
                                            <strong>{{ matiere.nom }}</strong>.
                                        </div>
                                        <a href=\"{{ path('app_admin_quiz_new', {id: matiere.id}) }}\" class=\"btn-pill-primary\">
                                            <i class=\"mdi mdi-plus-circle-outline\"></i>
                                            Créer la première question
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <aside class=\"side-card\">
            <div class=\"side-card__label\">Vue d'ensemble</div>
            <div class=\"side-card__title\">Qualité du quiz</div>

            <div class=\"side-meta\">
                <div class=\"side-meta-item\">
                    <div class=\"side-meta-label\">Questions</div>
                    <div class=\"side-meta-value\">
                        <strong>{{ questions|length }}</strong>
                        <span class=\"d-block text-xs text-muted\">ciblées sur {{ matiere.nom }}</span>
                    </div>
                </div>
                <div class=\"side-meta-item\">
                    <div class=\"side-meta-label\">Couverture</div>
                    <div class=\"side-meta-value\">
                        <strong>
                            {% if questions|length == 0 %}
                                0%
                            {% elseif questions|length < 5 %}
                                ~30%
                            {% elseif questions|length < 10 %}
                                ~60%
                            {% else %}
                                90%+
                            {% endif %}
                        </strong>
                        <span class=\"d-block text-xs text-muted\">du chapitre estimée</span>
                    </div>
                </div>
            </div>

            <ul class=\"mb-3\" style=\"padding-left:1.1rem; font-size:.8rem; color:#9ca3af;\">
                <li class=\"mb-1\">Visez au moins <strong>10 questions variées</strong> par matière.</li>
                <li class=\"mb-1\">Mixez des questions de <strong>définition</strong>, <strong>cas pratiques</strong> et <strong>pièges classiques</strong>.</li>
                <li>Ajoutez une <strong>explication</strong> pour chaque bonne réponse pour faire du quiz un outil pédagogique.</li>
            </ul>

            <div class=\"side-footer\">
                Les étudiants accèdent à ce quiz via la vue front de la classe.
                <br>
                <a href=\"{{ path('app_classe_index') }}\">Retour à la gestion des classes</a>
            </div>
        </aside>
    </div>
</div>
{% endblock %}
", "quiz/admin_matiere.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\quiz\\admin_matiere.html.twig");
    }
}
