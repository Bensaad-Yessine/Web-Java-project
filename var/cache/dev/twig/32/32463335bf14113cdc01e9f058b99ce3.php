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

/* quiz/matiere.html.twig */
class __TwigTemplate_69198b5edb8016a9342ff0b283642938 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/matiere.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/matiere.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Quiz ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --gray-800: #1F2937;
            --gray-900: #111827;
            --radius-lg: 12px;
            --radius-xl: 18px;
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 18px 45px rgba(220,38,38,0.18);
            --transition: 220ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #FEF2F2 0%, #FFFFFF 100%);
            color: var(--gray-900);
            padding: 32px 16px 40px;
        }

        .page {
            max-width: 900px;
            margin: 0 auto;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 12px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            font-size: 14px;
            border-radius: 999px;
            border: 1px solid var(--primary-red-light);
            color: var(--primary-red);
            text-decoration: none;
            background: #FFF;
            box-shadow: 0 4px 12px rgba(248, 113, 113, 0.12);
            transition: all var(--transition);
        }
        .back-link:hover {
            transform: translateY(-1px);
            border-color: var(--primary-red);
            box-shadow: 0 10px 24px rgba(220, 38, 38, 0.22);
        }

        .badge-mode {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 6px 10px;
            border-radius: 999px;
            background: var(--gray-900);
            color: #fff;
        }

        .card {
            background: #FFFFFF;
            border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
            padding: 24px 24px 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 16px;
        }

        .title-block {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .title-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FFF;
            font-size: 24px;
            box-shadow: 0 10px 25px rgba(220,38,38,0.35);
        }

        .title-main {
            font-size: 22px;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-red), #991B1B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            font-size: 14px;
            color: var(--gray-500);
            margin-top: 4px;
        }

        .meta {
            text-align: right;
            font-size: 13px;
            color: var(--gray-500);
        }

        .meta-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 999px;
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            margin-bottom: 4px;
        }

        .questions-wrapper {
            margin-top: 12px;
            border-radius: 14px;
            border: 1px solid var(--gray-100);
            background: var(--gray-50);
            max-height: 60vh;
            overflow: auto;
        }

        .question {
            padding: 14px 16px 12px;
            border-bottom: 1px solid var(--gray-100);
            background: #FFF;
        }
        .question:last-child { border-bottom: none; }

        .question-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--gray-800);
        }
        .question-title span {
            font-size: 12px;
            color: var(--gray-500);
            margin-right: 6px;
        }

        .choices {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .choices li { margin-bottom: 6px; }

        .choice {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 10px;
            border-radius: 999px;
            border: 1px solid transparent;
            background: var(--gray-50);
            cursor: pointer;
            font-size: 14px;
            transition: all var(--transition);
        }

        .choice:hover {
            border-color: var(--primary-red-light);
            background: #FFF5F5;
        }

        .choice input {
            accent-color: var(--primary-red);
        }

        .choice-letter {
            width: 22px;
            height: 22px;
            border-radius: 999px;
            background: var(--primary-red-light);
            color: var(--primary-red);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .choice-text { color: var(--gray-700); }

        .submit-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-top: 14px;
        }

        .hint {
            font-size: 12px;
            color: var(--gray-500);
        }

        .btn-primary {
            border-radius: 999px;
            padding: 10px 20px;
            border: none;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
            color: #FFF;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 12px 28px rgba(220,38,38,0.35);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all var(--transition);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 38px rgba(185,28,28,0.4);
        }

        .results {
            margin-top: 18px;
            border-radius: 14px;
            border: 1px solid var(--gray-100);
            background: #F0FDF4;
            padding: 14px 16px;
            font-size: 13px;
        }

        .results.bad { background: #FEF2F2; }

        .results-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 6px;
        }

        .results-title {
            font-weight: 600;
        }

        .results-details { color: var(--gray-600); font-size: 12px; }

        .detail-item {
            margin-top: 6px;
            padding-top: 6px;
            border-top: 1px dashed var(--gray-200);
            font-size: 12px;
            color: var(--gray-700);
        }

        .detail-item span { display: inline-block; margin-right: 6px; }

        .tag-wrong { color: #B91C1C; }
        .tag-correct { color: #065F46; }

        @media (max-width: 640px) {
            .header { flex-direction: column; align-items: flex-start; }
            .meta { text-align: left; }
            .submit-row { flex-direction: column-reverse; align-items: flex-start; }
        }
    </style>
</head>
<body>
<div class=\"page\">
    <div class=\"top-bar\">
        <a href=\"";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_front_show", ["id" => (((($tmp = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 302, $this->source); })()), "classes", [], "any", false, false, false, 302))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 302, $this->source); })()), "classes", [], "any", false, false, false, 302)), "id", [], "any", false, false, false, 302)) : (0))]), "html", null, true);
        yield "\" class=\"back-link\">
            ← Retour à la classe
        </a>
        <div class=\"badge-mode\">Mode étudiant</div>
    </div>

    <div class=\"card\">
        <div class=\"header\">
            <div class=\"title-block\">
                <div class=\"title-icon\">Q</div>
                <div>
                    <div class=\"title-main\">Quiz — ";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matiere"]) || array_key_exists("matiere", $context) ? $context["matiere"] : (function () { throw new RuntimeError('Variable "matiere" does not exist.', 313, $this->source); })()), "nom", [], "any", false, false, false, 313), "html", null, true);
        yield "</div>
                    <div class=\"subtitle\">Répondez à toutes les questions puis validez pour voir votre score et les corrections.</div>
                </div>
            </div>
            <div class=\"meta\">
                <div class=\"meta-pill\">
                    ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 319, $this->source); })())), "html", null, true);
        yield " question";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 319, $this->source); })())) > 1)) ? ("s") : (""));
        yield " au total
                </div>
                ";
        // line 321
        if ((($tmp = (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 321, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 322
            yield "                    <div>
                        Score : <strong>";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 323, $this->source); })()), "correct", [], "any", false, false, false, 323), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 323, $this->source); })()), "total", [], "any", false, false, false, 323), "html", null, true);
            yield "</strong> (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 323, $this->source); })()), "percent", [], "any", false, false, false, 323), "html", null, true);
            yield "%)
                    </div>
                ";
        }
        // line 326
        yield "            </div>
        </div>

        ";
        // line 329
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 329, $this->source); })()))) {
            // line 330
            yield "            <p class=\"subtitle\">
                Aucune question n'est encore configurée pour cette matière. Revenez plus tard ou contactez votre enseignant.
            </p>
        ";
        } else {
            // line 334
            yield "            <form method=\"post\">
                <div class=\"questions-wrapper\">
                    ";
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 336, $this->source); })()));
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
                // line 337
                yield "                        <div class=\"question\">
                            <div class=\"question-title\">
                                <span>Question ";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 339), "html", null, true);
                yield "</span>
                                ";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 340), "html", null, true);
                yield "
                            </div>
                            <ul class=\"choices\">
                                ";
                // line 343
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceA", [], "any", false, false, false, 343)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 344
                    yield "                                    <li>
                                        <label class=\"choice\">
                                            <input type=\"radio\" name=\"answers[";
                    // line 346
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 346), "html", null, true);
                    yield "]\" value=\"A\" required>
                                            <span class=\"choice-letter\">A</span>
                                            <span class=\"choice-text\">";
                    // line 348
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceA", [], "any", false, false, false, 348), "html", null, true);
                    yield "</span>
                                        </label>
                                    </li>
                                ";
                }
                // line 352
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceB", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 353
                    yield "                                    <li>
                                        <label class=\"choice\">
                                            <input type=\"radio\" name=\"answers[";
                    // line 355
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 355), "html", null, true);
                    yield "]\" value=\"B\" required>
                                            <span class=\"choice-letter\">B</span>
                                            <span class=\"choice-text\">";
                    // line 357
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceB", [], "any", false, false, false, 357), "html", null, true);
                    yield "</span>
                                        </label>
                                    </li>
                                ";
                }
                // line 361
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceC", [], "any", false, false, false, 361)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 362
                    yield "                                    <li>
                                        <label class=\"choice\">
                                            <input type=\"radio\" name=\"answers[";
                    // line 364
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 364), "html", null, true);
                    yield "]\" value=\"C\" required>
                                            <span class=\"choice-letter\">C</span>
                                            <span class=\"choice-text\">";
                    // line 366
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceC", [], "any", false, false, false, 366), "html", null, true);
                    yield "</span>
                                        </label>
                                    </li>
                                ";
                }
                // line 370
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceD", [], "any", false, false, false, 370)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 371
                    yield "                                    <li>
                                        <label class=\"choice\">
                                            <input type=\"radio\" name=\"answers[";
                    // line 373
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 373), "html", null, true);
                    yield "]\" value=\"D\" required>
                                            <span class=\"choice-letter\">D</span>
                                            <span class=\"choice-text\">";
                    // line 375
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choiceD", [], "any", false, false, false, 375), "html", null, true);
                    yield "</span>
                                        </label>
                                    </li>
                                ";
                }
                // line 379
                yield "                            </ul>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            yield "                </div>

                <div class=\"submit-row\">
                    <div class=\"hint\">Toutes les questions doivent être répondues avant de valider.</div>
                    <button type=\"submit\" class=\"btn-primary\">Valider mes réponses</button>
                </div>
            </form>
        ";
        }
        // line 390
        yield "
        ";
        // line 391
        if ((($tmp = (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 391, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 392
            yield "            <div class=\"results ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 392, $this->source); })()), "percent", [], "any", false, false, false, 392) < 50)) ? ("bad") : (""));
            yield "\">
                <div class=\"results-header\">
                    <div class=\"results-title\">
                        Résultat : ";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 395, $this->source); })()), "correct", [], "any", false, false, false, 395), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 395, $this->source); })()), "total", [], "any", false, false, false, 395), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 395, $this->source); })()), "percent", [], "any", false, false, false, 395), "html", null, true);
            yield "%)
                    </div>
                    <div class=\"results-details\">
                        ";
            // line 398
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 398, $this->source); })()), "percent", [], "any", false, false, false, 398) < 50)) {
                // line 399
                yield "                            Continuez à réviser, vous pouvez progresser.
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 400
(isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 400, $this->source); })()), "percent", [], "any", false, false, false, 400) < 80)) {
                // line 401
                yield "                            Bon début, identifiez les notions à revoir.
                        ";
            } else {
                // line 403
                yield "                            Excellent travail, vous maîtrisez cette matière.
                        ";
            }
            // line 405
            yield "                    </div>
                </div>

                ";
            // line 408
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 408, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 409
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 409, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 410
                    yield "                        <div class=\"detail-item\">
                            <span>";
                    // line 411
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "question", [], "any", false, false, false, 411), "html", null, true);
                    yield "</span>
                            <span class=\"tag-wrong\">Votre réponse : ";
                    // line 412
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["d"], "user", [], "any", false, false, false, 412)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "user", [], "any", false, false, false, 412), "html", null, true)) : ("—"));
                    yield "</span>
                            <span class=\"tag-correct\">Bonne réponse : ";
                    // line 413
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "correct", [], "any", false, false, false, 413), "html", null, true);
                    yield "</span>
                            ";
                    // line 414
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["d"], "explanation", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 415
                        yield "                                <span>Explication : ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "explanation", [], "any", false, false, false, 415), "html", null, true);
                        yield "</span>
                            ";
                    }
                    // line 417
                    yield "                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['d'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 419
                yield "                ";
            }
            // line 420
            yield "            </div>
        ";
        }
        // line 422
        yield "    </div>
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
        return "quiz/matiere.html.twig";
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
        return array (  634 => 422,  630 => 420,  627 => 419,  620 => 417,  614 => 415,  612 => 414,  608 => 413,  604 => 412,  600 => 411,  597 => 410,  592 => 409,  590 => 408,  585 => 405,  581 => 403,  577 => 401,  575 => 400,  572 => 399,  570 => 398,  560 => 395,  553 => 392,  551 => 391,  548 => 390,  538 => 382,  522 => 379,  515 => 375,  510 => 373,  506 => 371,  503 => 370,  496 => 366,  491 => 364,  487 => 362,  484 => 361,  477 => 357,  472 => 355,  468 => 353,  465 => 352,  458 => 348,  453 => 346,  449 => 344,  447 => 343,  441 => 340,  437 => 339,  433 => 337,  416 => 336,  412 => 334,  406 => 330,  404 => 329,  399 => 326,  389 => 323,  386 => 322,  384 => 321,  377 => 319,  368 => 313,  354 => 302,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>ESPRIT — Quiz {{ matiere.nom }}</title>
    <style>
        :root {
            --primary-red: #DC2626;
            --primary-red-dark: #B91C1C;
            --primary-red-light: #FEE2E2;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --gray-800: #1F2937;
            --gray-900: #111827;
            --radius-lg: 12px;
            --radius-xl: 18px;
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 18px 45px rgba(220,38,38,0.18);
            --transition: 220ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #FEF2F2 0%, #FFFFFF 100%);
            color: var(--gray-900);
            padding: 32px 16px 40px;
        }

        .page {
            max-width: 900px;
            margin: 0 auto;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 12px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            font-size: 14px;
            border-radius: 999px;
            border: 1px solid var(--primary-red-light);
            color: var(--primary-red);
            text-decoration: none;
            background: #FFF;
            box-shadow: 0 4px 12px rgba(248, 113, 113, 0.12);
            transition: all var(--transition);
        }
        .back-link:hover {
            transform: translateY(-1px);
            border-color: var(--primary-red);
            box-shadow: 0 10px 24px rgba(220, 38, 38, 0.22);
        }

        .badge-mode {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 6px 10px;
            border-radius: 999px;
            background: var(--gray-900);
            color: #fff;
        }

        .card {
            background: #FFFFFF;
            border-radius: var(--radius-xl);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
            padding: 24px 24px 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 16px;
        }

        .title-block {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .title-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FFF;
            font-size: 24px;
            box-shadow: 0 10px 25px rgba(220,38,38,0.35);
        }

        .title-main {
            font-size: 22px;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-red), #991B1B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            font-size: 14px;
            color: var(--gray-500);
            margin-top: 4px;
        }

        .meta {
            text-align: right;
            font-size: 13px;
            color: var(--gray-500);
        }

        .meta-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 999px;
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            margin-bottom: 4px;
        }

        .questions-wrapper {
            margin-top: 12px;
            border-radius: 14px;
            border: 1px solid var(--gray-100);
            background: var(--gray-50);
            max-height: 60vh;
            overflow: auto;
        }

        .question {
            padding: 14px 16px 12px;
            border-bottom: 1px solid var(--gray-100);
            background: #FFF;
        }
        .question:last-child { border-bottom: none; }

        .question-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--gray-800);
        }
        .question-title span {
            font-size: 12px;
            color: var(--gray-500);
            margin-right: 6px;
        }

        .choices {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .choices li { margin-bottom: 6px; }

        .choice {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 10px;
            border-radius: 999px;
            border: 1px solid transparent;
            background: var(--gray-50);
            cursor: pointer;
            font-size: 14px;
            transition: all var(--transition);
        }

        .choice:hover {
            border-color: var(--primary-red-light);
            background: #FFF5F5;
        }

        .choice input {
            accent-color: var(--primary-red);
        }

        .choice-letter {
            width: 22px;
            height: 22px;
            border-radius: 999px;
            background: var(--primary-red-light);
            color: var(--primary-red);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .choice-text { color: var(--gray-700); }

        .submit-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-top: 14px;
        }

        .hint {
            font-size: 12px;
            color: var(--gray-500);
        }

        .btn-primary {
            border-radius: 999px;
            padding: 10px 20px;
            border: none;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
            color: #FFF;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 12px 28px rgba(220,38,38,0.35);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all var(--transition);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 38px rgba(185,28,28,0.4);
        }

        .results {
            margin-top: 18px;
            border-radius: 14px;
            border: 1px solid var(--gray-100);
            background: #F0FDF4;
            padding: 14px 16px;
            font-size: 13px;
        }

        .results.bad { background: #FEF2F2; }

        .results-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 6px;
        }

        .results-title {
            font-weight: 600;
        }

        .results-details { color: var(--gray-600); font-size: 12px; }

        .detail-item {
            margin-top: 6px;
            padding-top: 6px;
            border-top: 1px dashed var(--gray-200);
            font-size: 12px;
            color: var(--gray-700);
        }

        .detail-item span { display: inline-block; margin-right: 6px; }

        .tag-wrong { color: #B91C1C; }
        .tag-correct { color: #065F46; }

        @media (max-width: 640px) {
            .header { flex-direction: column; align-items: flex-start; }
            .meta { text-align: left; }
            .submit-row { flex-direction: column-reverse; align-items: flex-start; }
        }
    </style>
</head>
<body>
<div class=\"page\">
    <div class=\"top-bar\">
        <a href=\"{{ path('app_classe_front_show', {id: matiere.classes|first ? matiere.classes|first.id : 0}) }}\" class=\"back-link\">
            ← Retour à la classe
        </a>
        <div class=\"badge-mode\">Mode étudiant</div>
    </div>

    <div class=\"card\">
        <div class=\"header\">
            <div class=\"title-block\">
                <div class=\"title-icon\">Q</div>
                <div>
                    <div class=\"title-main\">Quiz — {{ matiere.nom }}</div>
                    <div class=\"subtitle\">Répondez à toutes les questions puis validez pour voir votre score et les corrections.</div>
                </div>
            </div>
            <div class=\"meta\">
                <div class=\"meta-pill\">
                    {{ questions|length }} question{{ questions|length > 1 ? 's' : '' }} au total
                </div>
                {% if score %}
                    <div>
                        Score : <strong>{{ score.correct }}/{{ score.total }}</strong> ({{ score.percent }}%)
                    </div>
                {% endif %}
            </div>
        </div>

        {% if questions is empty %}
            <p class=\"subtitle\">
                Aucune question n'est encore configurée pour cette matière. Revenez plus tard ou contactez votre enseignant.
            </p>
        {% else %}
            <form method=\"post\">
                <div class=\"questions-wrapper\">
                    {% for q in questions %}
                        <div class=\"question\">
                            <div class=\"question-title\">
                                <span>Question {{ loop.index }}</span>
                                {{ q.question }}
                            </div>
                            <ul class=\"choices\">
                                {% if q.choiceA %}
                                    <li>
                                        <label class=\"choice\">
                                            <input type=\"radio\" name=\"answers[{{ q.id }}]\" value=\"A\" required>
                                            <span class=\"choice-letter\">A</span>
                                            <span class=\"choice-text\">{{ q.choiceA }}</span>
                                        </label>
                                    </li>
                                {% endif %}
                                {% if q.choiceB %}
                                    <li>
                                        <label class=\"choice\">
                                            <input type=\"radio\" name=\"answers[{{ q.id }}]\" value=\"B\" required>
                                            <span class=\"choice-letter\">B</span>
                                            <span class=\"choice-text\">{{ q.choiceB }}</span>
                                        </label>
                                    </li>
                                {% endif %}
                                {% if q.choiceC %}
                                    <li>
                                        <label class=\"choice\">
                                            <input type=\"radio\" name=\"answers[{{ q.id }}]\" value=\"C\" required>
                                            <span class=\"choice-letter\">C</span>
                                            <span class=\"choice-text\">{{ q.choiceC }}</span>
                                        </label>
                                    </li>
                                {% endif %}
                                {% if q.choiceD %}
                                    <li>
                                        <label class=\"choice\">
                                            <input type=\"radio\" name=\"answers[{{ q.id }}]\" value=\"D\" required>
                                            <span class=\"choice-letter\">D</span>
                                            <span class=\"choice-text\">{{ q.choiceD }}</span>
                                        </label>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    {% endfor %}
                </div>

                <div class=\"submit-row\">
                    <div class=\"hint\">Toutes les questions doivent être répondues avant de valider.</div>
                    <button type=\"submit\" class=\"btn-primary\">Valider mes réponses</button>
                </div>
            </form>
        {% endif %}

        {% if score %}
            <div class=\"results {{ score.percent < 50 ? 'bad' : '' }}\">
                <div class=\"results-header\">
                    <div class=\"results-title\">
                        Résultat : {{ score.correct }}/{{ score.total }} ({{ score.percent }}%)
                    </div>
                    <div class=\"results-details\">
                        {% if score.percent < 50 %}
                            Continuez à réviser, vous pouvez progresser.
                        {% elseif score.percent < 80 %}
                            Bon début, identifiez les notions à revoir.
                        {% else %}
                            Excellent travail, vous maîtrisez cette matière.
                        {% endif %}
                    </div>
                </div>

                {% if details is not empty %}
                    {% for d in details %}
                        <div class=\"detail-item\">
                            <span>{{ d.question }}</span>
                            <span class=\"tag-wrong\">Votre réponse : {{ d.user ?: '—' }}</span>
                            <span class=\"tag-correct\">Bonne réponse : {{ d.correct }}</span>
                            {% if d.explanation %}
                                <span>Explication : {{ d.explanation }}</span>
                            {% endif %}
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        {% endif %}
    </div>
</div>
</body>
</html>
", "quiz/matiere.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\quiz\\matiere.html.twig");
    }
}
