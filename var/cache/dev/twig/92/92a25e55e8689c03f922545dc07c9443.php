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

/* registration/register.html.twig */
class __TwigTemplate_fbc70c9d39e864b97b461a2b849c593f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Register";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <style>
        .login-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: cover;
            background-position: center;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 10px 40px 0 rgba(0,0,0,0.1);
            border: none;
        }
        /* FIXED: Input fields with better visibility */
        .form-control {
            border: 2px solid #667eea;
            border-radius: 8px;
            padding: 12px 15px;
            height: 48px;
            background-color: #ffffff;
            color: #333;
            font-size: 15px;
            font-weight: 500;
        }
        .form-control:focus {
            border-color: #764ba2;
            box-shadow: 0 0 0 0.3rem rgba(102, 126, 234, 0.3);
            background-color: #fff;
        }
        /* FIXED: Date input styling */
        input[type=\"date\"] {
            color: #333;
            font-weight: 500;
            background-color: #fff;
        }
        input[type=\"date\"]::-webkit-calendar-picker-indicator {
            background-color: #667eea;
            padding: 5px;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }
        /* FIXED: Select dropdown */
        .form-select {
            background-color: #fff;
            color: #333;
            border: 2px solid #667eea;
        }
        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }
        .form-check-label {
            cursor: pointer;
        }
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }
        .radio-item {
            display: flex;
            align-items: center;
        }
        .radio-item input[type=\"radio\"] {
            margin-right: 8px;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding-right: 5px;
            padding-left: 5px;
        }
        @media (max-width: 768px) {
            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        .btn-primary {
            background-color: #667eea;
            border-color: #667eea;
        }
        .btn-primary:hover {
            background-color: #5a6fd8;
            border-color: #5a6fd8;
        }
        .alert {
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .terms {
            font-size: 12px;
            color: #666;
            text-align: center;
            margin-top: 15px;
        }
        .terms a {
            color: #667eea;
            text-decoration: none;
        }
        .invalid-feedback {
            display: block;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }
        .is-invalid {
            border-color: #dc3545;
        }
        /* Make placeholder visible */
        .form-control::placeholder {
            color: #777;
            opacity: 1;
        }
        /* Password strength indicator */
        .password-strength {
            margin-top: 10px;
        }
        .password-strength .progress {
            height: 6px;
            border-radius: 3px;
            margin-bottom: 5px;
            background-color: #e9ecef;
        }
        .strength-text {
            font-weight: 600;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
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

        // line 152
        yield "    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"row w-100\">
                <div class=\"content-wrapper full-page-wrapper d-flex align-items-center auth login-bg\">
                    <div class=\"card col-lg-5 mx-auto\">
                        <div class=\"card-body px-5 py-5\">
                            <h3 class=\"card-title text-start mb-3\">Create Account</h3>
                            
                            ";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 160, $this->source); })()), 'form_start');
        yield "
                                <div class=\"form-row\">
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 163, $this->source); })()), "nom", [], "any", false, false, false, 163), 'label');
        yield "
                                        ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 164, $this->source); })()), "nom", [], "any", false, false, false, 164), 'widget', ["attr" => ["class" => ("form-control p_input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 166
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 166, $this->source); })()), "nom", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "errors", [], "any", false, false, false, 166)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Enter your last name"]]);
        // line 169
        yield "
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 171, $this->source); })()), "nom", [], "any", false, false, false, 171), 'errors');
        yield "
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 175, $this->source); })()), "prenom", [], "any", false, false, false, 175), 'label');
        yield "
                                        ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 176, $this->source); })()), "prenom", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => ("form-control p_input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 178
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 178, $this->source); })()), "prenom", [], "any", false, false, false, 178), "vars", [], "any", false, false, false, 178), "errors", [], "any", false, false, false, 178)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Enter your first name"]]);
        // line 181
        yield "
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 183, $this->source); })()), "prenom", [], "any", false, false, false, 183), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), "email", [], "any", false, false, false, 189), 'label');
        yield "
                                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 190, $this->source); })()), "email", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => ("form-control p_input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 192
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 192, $this->source); })()), "email", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "errors", [], "any", false, false, false, 192)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Enter your email"]]);
        // line 195
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 197, $this->source); })()), "email", [], "any", false, false, false, 197), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 203, $this->source); })()), "numTel", [], "any", false, false, false, 203), 'label');
        yield "
                                        ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 204, $this->source); })()), "numTel", [], "any", false, false, false, 204), 'widget', ["attr" => ["class" => ("form-control p_input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 206
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 206, $this->source); })()), "numTel", [], "any", false, false, false, 206), "vars", [], "any", false, false, false, 206), "errors", [], "any", false, false, false, 206)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Phone number"]]);
        // line 209
        yield "
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 211, $this->source); })()), "numTel", [], "any", false, false, false, 211), 'errors');
        yield "
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 215, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 215), 'label');
        yield "
                                        ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 216, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 216), 'widget', ["attr" => ["class" => ("form-control p_input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 218
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 218, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 218), "vars", [], "any", false, false, false, 218), "errors", [], "any", false, false, false, 218)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 220
        yield "
                                        <div class=\"invalid-feedback\">
                                            ";
        // line 222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 222, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 222), 'errors');
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 228, $this->source); })()), "sexe", [], "any", false, false, false, 228), 'label');
        yield "
                                    <div class=\"radio-group\">
                                        ";
        // line 230
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 230, $this->source); })()), "sexe", [], "any", false, false, false, 230), 'widget');
        yield "
                                    </div>
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 233, $this->source); })()), "sexe", [], "any", false, false, false, 233), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 238, $this->source); })()), "classe", [], "any", false, false, false, 238), 'label');
        yield "
                                    ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 239, $this->source); })()), "classe", [], "any", false, false, false, 239), 'widget', ["attr" => ["class" => ("form-control p_input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 241
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 241, $this->source); })()), "classe", [], "any", false, false, false, 241), "vars", [], "any", false, false, false, 241), "errors", [], "any", false, false, false, 241)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 243
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 245, $this->source); })()), "classe", [], "any", false, false, false, 245), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 250, $this->source); })()), "plainPassword", [], "any", false, false, false, 250), 'label');
        yield "
                                    ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 251, $this->source); })()), "plainPassword", [], "any", false, false, false, 251), 'widget', ["attr" => ["class" => ("form-control p_input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 253
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 253, $this->source); })()), "plainPassword", [], "any", false, false, false, 253), "vars", [], "any", false, false, false, 253), "errors", [], "any", false, false, false, 253)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Enter your password", "id" => "passwordInput"]]);
        // line 257
        yield "
                                    <div class=\"password-strength\">
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                                        </div>
                                        <small class=\"text-muted d-block mt-1\">Password strength: <span class=\"strength-text\">None</span></small>
                                    </div>
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 265, $this->source); })()), "plainPassword", [], "any", false, false, false, 265), 'errors');
        yield "
                                    </div>
                                    <small class=\"form-text text-muted\">
                                        Password must be at least 6 characters long.
                                    </small>
                                </div>

                                <div class=\"form-group d-flex align-items-center justify-content-between\">
                                    <div class=\"form-check\">
                                        ";
        // line 274
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 274, $this->source); })()), "agreeTerms", [], "any", false, false, false, 274), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 278
        yield "
                                        ";
        // line 279
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 279, $this->source); })()), "agreeTerms", [], "any", false, false, false, 279), 'label');
        yield "
                                    </div>
                                </div>

                                <div class=\"text-center d-grid gap-2 mt-4\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\" id=\"submitBtn\">
                                        <i class=\"mdi mdi-account-plus mr-2\"></i>Register
                                    </button>
                                </div>

                                <p class=\"sign-up text-center mt-4\">
                                    Already have an Account? <a href=\"";
        // line 290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Sign In</a>
                                </p>
                                
                                <p class=\"terms\">
                                    By creating an account you are accepting our
                                    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\">Terms & Conditions</a>
                                </p>
                            ";
        // line 297
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 297, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms & Conditions Modal -->
    <div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-scrollable\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"termsModalLabel\">Terms & Conditions</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <h6>1. Acceptance of Terms</h6>
                    <p>By registering for an account, you agree to be bound by these Terms and Conditions.</p>
                    
                    <h6>2. User Account</h6>
                    <p>You are responsible for maintaining the confidentiality of your account and password.</p>
                    
                    <h6>3. Privacy Policy</h6>
                    <p>Your personal information will be protected in accordance with our Privacy Policy.</p>
                    
                    <h6>4. User Conduct</h6>
                    <p>You agree to use the service only for lawful purposes and in a way that does not infringe the rights of others.</p>
                    
                    <h6>5. Termination</h6>
                    <p>We reserve the right to terminate or suspend your account at our sole discretion.</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 337
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 338
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/settings.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add Bootstrap classes to radio buttons
            const radioButtons = document.querySelectorAll('input[type=\"radio\"]');
            radioButtons.forEach(radio => {
                radio.classList.add('form-check-input');
                const label = radio.closest('.form-check');
                if (label) {
                    label.classList.add('form-check-inline', 'radio-item');
                }
            });

            // ============ SYSTÈME DE VALIDATION AVANCÉ ============
            const validationRules = {
                'registration_form_nom': {
                    minLength: 2,
                    maxLength: 255,
                    pattern: /^[a-zA-ZÀ-ÿ\\s-]*\$/,
                    help: 'Utilisez uniquement des lettres, espaces ou tirets',
                    messages: {
                        required: 'Veuillez entrer votre nom de famille',
                        minLength: 'Minimum 2 caractères requis',
                        maxLength: 'Maximum 255 caractères',
                        pattern: 'Lettres, espaces et tirets uniquement'
                    }
                },
                'registration_form_prenom': {
                    minLength: 2,
                    maxLength: 255,
                    pattern: /^[a-zA-ZÀ-ÿ\\s-]*\$/,
                    help: 'Utilisez uniquement des lettres, espaces ou tirets',
                    messages: {
                        required: 'Veuillez entrer votre prénom',
                        minLength: 'Minimum 2 caractères requis',
                        maxLength: 'Maximum 255 caractères',
                        pattern: 'Lettres, espaces et tirets uniquement'
                    }
                },
                'registration_form_email': {
                    email: true,
                    help: 'Utilisez un email valide (ex: prenom.nom@esprit.tn)',
                    messages: {
                        required: 'Veuillez entrer votre adresse email',
                        email: 'Format email invalide'
                    }
                },
                'registration_form_numTel': {
                    numericOnly: true,
                    help: 'Entrez uniquement des chiffres (ex: 21612345678)',
                    messages: {
                        numericOnly: 'Le numéro de téléphone ne doit contenir que des chiffres'
                    }
                },
                'registration_form_plainPassword': {
                    minLength: 8,
                    uppercase: true,
                    lowercase: true,
                    number: true,
                    help: 'Minimum 8 caractères avec majuscule, minuscule et chiffre',
                    messages: {
                        required: 'Veuillez entrer un mot de passe',
                        minLength: 'Minimum 8 caractères requis',
                        uppercase: 'Au moins une majuscule (A-Z)',
                        lowercase: 'Au moins une minuscule (a-z)',
                        number: 'Au moins un chiffre (0-9)'
                    }
                }
            };

            // Ajouter les icônes de validation pour chaque champ
            Object.keys(validationRules).forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (!field) return;

                const formGroup = field.closest('.form-group') || field.closest('.col-md-6') || field.closest('div');
                
                // Créer un conteneur pour les icônes et les messages
                const validationContainer = document.createElement('div');
                validationContainer.className = 'validation-feedback mt-2';
                validationContainer.style.fontSize = '0.875rem';
                
                if (formGroup) {
                    formGroup.appendChild(validationContainer);
                }

                // Ajouter les événements de validation
                field.addEventListener('input', function() {
                    validateField(this, validationContainer);
                });
                
                field.addEventListener('blur', function() {
                    validateField(this, validationContainer);
                });
            });

            function validateField(field, container) {
                const rules = validationRules[field.id];
                if (!rules || !container) return;

                const value = field.value.trim();
                let errors = [];
                let isValid = true;

                // Check if required and empty
                if (field.required && !value) {
                    errors.push({type: 'required', message: rules.messages.required, critical: true});
                    isValid = false;
                } else if (value) {
                    // Check numeric only (for phone number)
                    if (rules.numericOnly && !/^[0-9]*\$/.test(value)) {
                        errors.push({type: 'numericOnly', message: rules.messages.numericOnly});
                        isValid = false;
                    }
                    // Check pattern
                    if (rules.pattern && !rules.pattern.test(value)) {
                        errors.push({type: 'pattern', message: rules.messages.pattern});
                        isValid = false;
                    }
                    // Check length
                    if (rules.minLength && value.length < rules.minLength) {
                        errors.push({type: 'minLength', message: rules.messages.minLength});
                        isValid = false;
                    }
                    if (rules.maxLength && value.length > rules.maxLength) {
                        errors.push({type: 'maxLength', message: rules.messages.maxLength});
                        isValid = false;
                    }
                    // Check email
                    if (rules.email && !isValidEmail(value)) {
                        errors.push({type: 'email', message: rules.messages.email});
                        isValid = false;
                    }

                    // Validation progressive du mot de passe
                    if (field.id === 'registration_form_plainPassword') {
                        isValid = true; // Les critères du mot de passe ne bloquent pas la soumission
                        let criteria = [];

                        const hasMinLength = value.length >= 8;
                        const hasUppercase = /[A-Z]/.test(value);
                        const hasLowercase = /[a-z]/.test(value);
                        const hasNumber = /\\d/.test(value);

                        if (!hasMinLength) criteria.push('minLength');
                        if (!hasUppercase) criteria.push('uppercase');
                        if (!hasLowercase) criteria.push('lowercase');
                        if (!hasNumber) criteria.push('number');

                        // Créer l'affichage des critères
                        container.innerHTML = '<div class=\"password-criteria\"><strong>Critères du mot de passe:</strong></div>';
                        
                        [
                            {key: 'minLength', label: '✓ Au moins 8 caractères', check: hasMinLength},
                            {key: 'uppercase', label: '✓ Au moins une majuscule (A-Z)', check: hasUppercase},
                            {key: 'lowercase', label: '✓ Au moins une minuscule (a-z)', check: hasLowercase},
                            {key: 'number', label: '✓ Au moins un chiffre (0-9)', check: hasNumber}
                        ].forEach(criteria => {
                            const item = document.createElement('div');
                            item.style.padding = '4px 0';
                            item.style.color = criteria.check ? '#28a745' : '#dc3545';
                            item.innerHTML = (criteria.check ? '✓ ' : '✗ ') + criteria.label;
                            container.querySelector('.password-criteria').appendChild(item);
                        });

                        // Calculer et afficher la force du mot de passe
                        let strength = 0;
                        if (hasMinLength) strength += 25;
                        if (hasUppercase && hasLowercase) strength += 25;
                        if (hasNumber) strength += 25;
                        if (/[^A-Za-z0-9]/.test(value)) strength += 25;

                        const strengthDiv = document.createElement('div');
                        strengthDiv.style.marginTop = '8px';
                        strengthDiv.innerHTML = `
                            <div class=\"progress\" style=\"height: 6px; background: #e9ecef;\">
                                <div class=\"progress-bar\" style=\"width: \${strength}%; background: \${
                                    strength < 25 ? '#dc3545' : 
                                    strength < 50 ? '#fd7e14' : 
                                    strength < 75 ? '#ffc107' : '#28a745'
                                };\"></div>
                            </div>
                            <small style=\"color: \${
                                strength < 25 ? '#dc3545' : 
                                strength < 50 ? '#fd7e14' : 
                                strength < 75 ? '#ffc107' : '#28a745'
                            }; font-weight: bold;\">
                                Force: \${
                                    strength < 25 ? 'Très faible' : 
                                    strength < 50 ? 'Faible' : 
                                    strength < 75 ? 'Moyen' : 'Fort'
                                }
                            </small>
                        `;
                        container.appendChild(strengthDiv);
                    }
                }

                // Update visual feedback
                const inputField = document.getElementById(field.id);
                const invalidFeedback = field.closest('.form-group')?.querySelector('.invalid-feedback') ||
                                       field.closest('.col-md-6')?.querySelector('.invalid-feedback');

                if (isValid && value) {
                    inputField.classList.remove('is-invalid');
                    inputField.classList.add('is-valid');
                    if (invalidFeedback) invalidFeedback.innerHTML = '';
                } else if (!isValid) {
                    inputField.classList.remove('is-valid');
                    inputField.classList.add('is-invalid');
                    if (invalidFeedback && errors.length > 0) {
                        invalidFeedback.innerHTML = `<span style=\"color: #dc3545;\">✗ \${errors[0].message}</span>`;
                    }
                } else {
                    inputField.classList.remove('is-invalid', 'is-valid');
                    if (invalidFeedback) invalidFeedback.innerHTML = '';
                }
            }

            function isValidEmail(email) {
                const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
                return emailRegex.test(email);
            }

            // CSS pour les inputs valides/invalides
            const style = document.createElement('style');
            style.textContent = `
                .form-control.is-valid {
                    border-color: #28a745;
                    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                }
                .form-control.is-valid:focus {
                    border-color: #28a745;
                    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                }
                .form-control.is-invalid {
                    border-color: #dc3545;
                    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
                }
                .form-control.is-invalid:focus {
                    border-color: #dc3545;
                    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
                }
                .password-criteria {
                    background: #f8f9fa;
                    padding: 8px 12px;
                    border-radius: 4px;
                    border-left: 3px solid #667eea;
                }
            `;
            document.head.appendChild(style);

            // Form submission validation
            const registrationForm = document.querySelector('form');
            if (registrationForm) {
                const submitBtn = document.getElementById('submitBtn');
                
                registrationForm.addEventListener('submit', function(e) {
                    // Check if terms are accepted
                    const termsCheckbox = document.getElementById('";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 603, $this->source); })()), "agreeTerms", [], "any", false, false, false, 603), "vars", [], "any", false, false, false, 603), "id", [], "any", false, false, false, 603), "html", null, true);
        yield "');
                    if (!termsCheckbox.checked) {
                        e.preventDefault();
                        alert('Veuillez accepter les conditions d\\'utilisation pour continuer.');
                        termsCheckbox.focus();
                        return false;
                    }
                    
                    // Show loading state
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin mr-2\"></i>Création du compte...';
                    submitBtn.disabled = true;
                    
                    // Restore button after 10 seconds in case of error
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 10000);
                });
            }

            // Ensure all inputs have visible styling
            const allInputs = document.querySelectorAll('.form-control');
            allInputs.forEach(input => {
                input.style.backgroundColor = '#fff';
                input.style.color = '#333';
                input.style.border = '2px solid #667eea';
            });
            
            // Ensure select elements are visible
            const selectElements = document.querySelectorAll('select');
            selectElements.forEach(select => {
                select.style.backgroundColor = '#fff';
                select.style.color = '#333';
                select.style.border = '2px solid #667eea';
            });
        });
    </script>
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
        return "registration/register.html.twig";
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
        return array (  841 => 603,  578 => 343,  574 => 342,  570 => 341,  566 => 340,  562 => 339,  557 => 338,  544 => 337,  494 => 297,  484 => 290,  470 => 279,  467 => 278,  465 => 274,  453 => 265,  443 => 257,  441 => 253,  440 => 251,  436 => 250,  428 => 245,  424 => 243,  422 => 241,  421 => 239,  417 => 238,  409 => 233,  403 => 230,  398 => 228,  389 => 222,  385 => 220,  383 => 218,  382 => 216,  378 => 215,  371 => 211,  367 => 209,  365 => 206,  364 => 204,  360 => 203,  351 => 197,  347 => 195,  345 => 192,  344 => 190,  340 => 189,  331 => 183,  327 => 181,  325 => 178,  324 => 176,  320 => 175,  313 => 171,  309 => 169,  307 => 166,  306 => 164,  302 => 163,  296 => 160,  286 => 152,  273 => 151,  123 => 11,  119 => 10,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <style>
        .login-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: cover;
            background-position: center;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 10px 40px 0 rgba(0,0,0,0.1);
            border: none;
        }
        /* FIXED: Input fields with better visibility */
        .form-control {
            border: 2px solid #667eea;
            border-radius: 8px;
            padding: 12px 15px;
            height: 48px;
            background-color: #ffffff;
            color: #333;
            font-size: 15px;
            font-weight: 500;
        }
        .form-control:focus {
            border-color: #764ba2;
            box-shadow: 0 0 0 0.3rem rgba(102, 126, 234, 0.3);
            background-color: #fff;
        }
        /* FIXED: Date input styling */
        input[type=\"date\"] {
            color: #333;
            font-weight: 500;
            background-color: #fff;
        }
        input[type=\"date\"]::-webkit-calendar-picker-indicator {
            background-color: #667eea;
            padding: 5px;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }
        /* FIXED: Select dropdown */
        .form-select {
            background-color: #fff;
            color: #333;
            border: 2px solid #667eea;
        }
        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }
        .form-check-label {
            cursor: pointer;
        }
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }
        .radio-item {
            display: flex;
            align-items: center;
        }
        .radio-item input[type=\"radio\"] {
            margin-right: 8px;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding-right: 5px;
            padding-left: 5px;
        }
        @media (max-width: 768px) {
            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        .btn-primary {
            background-color: #667eea;
            border-color: #667eea;
        }
        .btn-primary:hover {
            background-color: #5a6fd8;
            border-color: #5a6fd8;
        }
        .alert {
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .terms {
            font-size: 12px;
            color: #666;
            text-align: center;
            margin-top: 15px;
        }
        .terms a {
            color: #667eea;
            text-decoration: none;
        }
        .invalid-feedback {
            display: block;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }
        .is-invalid {
            border-color: #dc3545;
        }
        /* Make placeholder visible */
        .form-control::placeholder {
            color: #777;
            opacity: 1;
        }
        /* Password strength indicator */
        .password-strength {
            margin-top: 10px;
        }
        .password-strength .progress {
            height: 6px;
            border-radius: 3px;
            margin-bottom: 5px;
            background-color: #e9ecef;
        }
        .strength-text {
            font-weight: 600;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"row w-100\">
                <div class=\"content-wrapper full-page-wrapper d-flex align-items-center auth login-bg\">
                    <div class=\"card col-lg-5 mx-auto\">
                        <div class=\"card-body px-5 py-5\">
                            <h3 class=\"card-title text-start mb-3\">Create Account</h3>
                            
                            {{ form_start(registrationForm) }}
                                <div class=\"form-row\">
                                    <div class=\"form-group col-md-6\">
                                        {{ form_label(registrationForm.nom) }}
                                        {{ form_widget(registrationForm.nom, {
                                            'attr': {
                                                'class': 'form-control p_input' ~ (registrationForm.nom.vars.errors|length > 0 ? ' is-invalid' : ''),
                                                'placeholder': 'Enter your last name'
                                            }
                                        }) }}
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(registrationForm.nom) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        {{ form_label(registrationForm.prenom) }}
                                        {{ form_widget(registrationForm.prenom, {
                                            'attr': {
                                                'class': 'form-control p_input' ~ (registrationForm.prenom.vars.errors|length > 0 ? ' is-invalid' : ''),
                                                'placeholder': 'Enter your first name'
                                            }
                                        }) }}
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(registrationForm.prenom) }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(registrationForm.email) }}
                                    {{ form_widget(registrationForm.email, {
                                        'attr': {
                                            'class': 'form-control p_input' ~ (registrationForm.email.vars.errors|length > 0 ? ' is-invalid' : ''),
                                            'placeholder': 'Enter your email'
                                        }
                                    }) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(registrationForm.email) }}
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"form-group col-md-6\">
                                        {{ form_label(registrationForm.numTel) }}
                                        {{ form_widget(registrationForm.numTel, {
                                            'attr': {
                                                'class': 'form-control p_input' ~ (registrationForm.numTel.vars.errors|length > 0 ? ' is-invalid' : ''),
                                                'placeholder': 'Phone number'
                                            }
                                        }) }}
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(registrationForm.numTel) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        {{ form_label(registrationForm.dateDeNaissance) }}
                                        {{ form_widget(registrationForm.dateDeNaissance, {
                                            'attr': {
                                                'class': 'form-control p_input' ~ (registrationForm.dateDeNaissance.vars.errors|length > 0 ? ' is-invalid' : '')
                                            }
                                        }) }}
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(registrationForm.dateDeNaissance) }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(registrationForm.sexe) }}
                                    <div class=\"radio-group\">
                                        {{ form_widget(registrationForm.sexe) }}
                                    </div>
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(registrationForm.sexe) }}
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(registrationForm.classe) }}
                                    {{ form_widget(registrationForm.classe, {
                                        'attr': {
                                            'class': 'form-control p_input' ~ (registrationForm.classe.vars.errors|length > 0 ? ' is-invalid' : '')
                                        }
                                    }) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(registrationForm.classe) }}
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(registrationForm.plainPassword) }}
                                    {{ form_widget(registrationForm.plainPassword, {
                                        'attr': {
                                            'class': 'form-control p_input' ~ (registrationForm.plainPassword.vars.errors|length > 0 ? ' is-invalid' : ''),
                                            'placeholder': 'Enter your password',
                                            'id': 'passwordInput'
                                        }
                                    }) }}
                                    <div class=\"password-strength\">
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                                        </div>
                                        <small class=\"text-muted d-block mt-1\">Password strength: <span class=\"strength-text\">None</span></small>
                                    </div>
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(registrationForm.plainPassword) }}
                                    </div>
                                    <small class=\"form-text text-muted\">
                                        Password must be at least 6 characters long.
                                    </small>
                                </div>

                                <div class=\"form-group d-flex align-items-center justify-content-between\">
                                    <div class=\"form-check\">
                                        {{ form_widget(registrationForm.agreeTerms, {
                                            'attr': {
                                                'class': 'form-check-input'
                                            }
                                        }) }}
                                        {{ form_label(registrationForm.agreeTerms) }}
                                    </div>
                                </div>

                                <div class=\"text-center d-grid gap-2 mt-4\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\" id=\"submitBtn\">
                                        <i class=\"mdi mdi-account-plus mr-2\"></i>Register
                                    </button>
                                </div>

                                <p class=\"sign-up text-center mt-4\">
                                    Already have an Account? <a href=\"{{ path('app_login') }}\">Sign In</a>
                                </p>
                                
                                <p class=\"terms\">
                                    By creating an account you are accepting our
                                    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\">Terms & Conditions</a>
                                </p>
                            {{ form_end(registrationForm) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms & Conditions Modal -->
    <div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-scrollable\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"termsModalLabel\">Terms & Conditions</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <h6>1. Acceptance of Terms</h6>
                    <p>By registering for an account, you agree to be bound by these Terms and Conditions.</p>
                    
                    <h6>2. User Account</h6>
                    <p>You are responsible for maintaining the confidentiality of your account and password.</p>
                    
                    <h6>3. Privacy Policy</h6>
                    <p>Your personal information will be protected in accordance with our Privacy Policy.</p>
                    
                    <h6>4. User Conduct</h6>
                    <p>You agree to use the service only for lawful purposes and in a way that does not infringe the rights of others.</p>
                    
                    <h6>5. Termination</h6>
                    <p>We reserve the right to terminate or suspend your account at our sole discretion.</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <script src=\"{{ asset('assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('assets/js/misc.js') }}\"></script>
    <script src=\"{{ asset('assets/js/settings.js') }}\"></script>
    <script src=\"{{ asset('assets/js/todolist.js') }}\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add Bootstrap classes to radio buttons
            const radioButtons = document.querySelectorAll('input[type=\"radio\"]');
            radioButtons.forEach(radio => {
                radio.classList.add('form-check-input');
                const label = radio.closest('.form-check');
                if (label) {
                    label.classList.add('form-check-inline', 'radio-item');
                }
            });

            // ============ SYSTÈME DE VALIDATION AVANCÉ ============
            const validationRules = {
                'registration_form_nom': {
                    minLength: 2,
                    maxLength: 255,
                    pattern: /^[a-zA-ZÀ-ÿ\\s-]*\$/,
                    help: 'Utilisez uniquement des lettres, espaces ou tirets',
                    messages: {
                        required: 'Veuillez entrer votre nom de famille',
                        minLength: 'Minimum 2 caractères requis',
                        maxLength: 'Maximum 255 caractères',
                        pattern: 'Lettres, espaces et tirets uniquement'
                    }
                },
                'registration_form_prenom': {
                    minLength: 2,
                    maxLength: 255,
                    pattern: /^[a-zA-ZÀ-ÿ\\s-]*\$/,
                    help: 'Utilisez uniquement des lettres, espaces ou tirets',
                    messages: {
                        required: 'Veuillez entrer votre prénom',
                        minLength: 'Minimum 2 caractères requis',
                        maxLength: 'Maximum 255 caractères',
                        pattern: 'Lettres, espaces et tirets uniquement'
                    }
                },
                'registration_form_email': {
                    email: true,
                    help: 'Utilisez un email valide (ex: prenom.nom@esprit.tn)',
                    messages: {
                        required: 'Veuillez entrer votre adresse email',
                        email: 'Format email invalide'
                    }
                },
                'registration_form_numTel': {
                    numericOnly: true,
                    help: 'Entrez uniquement des chiffres (ex: 21612345678)',
                    messages: {
                        numericOnly: 'Le numéro de téléphone ne doit contenir que des chiffres'
                    }
                },
                'registration_form_plainPassword': {
                    minLength: 8,
                    uppercase: true,
                    lowercase: true,
                    number: true,
                    help: 'Minimum 8 caractères avec majuscule, minuscule et chiffre',
                    messages: {
                        required: 'Veuillez entrer un mot de passe',
                        minLength: 'Minimum 8 caractères requis',
                        uppercase: 'Au moins une majuscule (A-Z)',
                        lowercase: 'Au moins une minuscule (a-z)',
                        number: 'Au moins un chiffre (0-9)'
                    }
                }
            };

            // Ajouter les icônes de validation pour chaque champ
            Object.keys(validationRules).forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (!field) return;

                const formGroup = field.closest('.form-group') || field.closest('.col-md-6') || field.closest('div');
                
                // Créer un conteneur pour les icônes et les messages
                const validationContainer = document.createElement('div');
                validationContainer.className = 'validation-feedback mt-2';
                validationContainer.style.fontSize = '0.875rem';
                
                if (formGroup) {
                    formGroup.appendChild(validationContainer);
                }

                // Ajouter les événements de validation
                field.addEventListener('input', function() {
                    validateField(this, validationContainer);
                });
                
                field.addEventListener('blur', function() {
                    validateField(this, validationContainer);
                });
            });

            function validateField(field, container) {
                const rules = validationRules[field.id];
                if (!rules || !container) return;

                const value = field.value.trim();
                let errors = [];
                let isValid = true;

                // Check if required and empty
                if (field.required && !value) {
                    errors.push({type: 'required', message: rules.messages.required, critical: true});
                    isValid = false;
                } else if (value) {
                    // Check numeric only (for phone number)
                    if (rules.numericOnly && !/^[0-9]*\$/.test(value)) {
                        errors.push({type: 'numericOnly', message: rules.messages.numericOnly});
                        isValid = false;
                    }
                    // Check pattern
                    if (rules.pattern && !rules.pattern.test(value)) {
                        errors.push({type: 'pattern', message: rules.messages.pattern});
                        isValid = false;
                    }
                    // Check length
                    if (rules.minLength && value.length < rules.minLength) {
                        errors.push({type: 'minLength', message: rules.messages.minLength});
                        isValid = false;
                    }
                    if (rules.maxLength && value.length > rules.maxLength) {
                        errors.push({type: 'maxLength', message: rules.messages.maxLength});
                        isValid = false;
                    }
                    // Check email
                    if (rules.email && !isValidEmail(value)) {
                        errors.push({type: 'email', message: rules.messages.email});
                        isValid = false;
                    }

                    // Validation progressive du mot de passe
                    if (field.id === 'registration_form_plainPassword') {
                        isValid = true; // Les critères du mot de passe ne bloquent pas la soumission
                        let criteria = [];

                        const hasMinLength = value.length >= 8;
                        const hasUppercase = /[A-Z]/.test(value);
                        const hasLowercase = /[a-z]/.test(value);
                        const hasNumber = /\\d/.test(value);

                        if (!hasMinLength) criteria.push('minLength');
                        if (!hasUppercase) criteria.push('uppercase');
                        if (!hasLowercase) criteria.push('lowercase');
                        if (!hasNumber) criteria.push('number');

                        // Créer l'affichage des critères
                        container.innerHTML = '<div class=\"password-criteria\"><strong>Critères du mot de passe:</strong></div>';
                        
                        [
                            {key: 'minLength', label: '✓ Au moins 8 caractères', check: hasMinLength},
                            {key: 'uppercase', label: '✓ Au moins une majuscule (A-Z)', check: hasUppercase},
                            {key: 'lowercase', label: '✓ Au moins une minuscule (a-z)', check: hasLowercase},
                            {key: 'number', label: '✓ Au moins un chiffre (0-9)', check: hasNumber}
                        ].forEach(criteria => {
                            const item = document.createElement('div');
                            item.style.padding = '4px 0';
                            item.style.color = criteria.check ? '#28a745' : '#dc3545';
                            item.innerHTML = (criteria.check ? '✓ ' : '✗ ') + criteria.label;
                            container.querySelector('.password-criteria').appendChild(item);
                        });

                        // Calculer et afficher la force du mot de passe
                        let strength = 0;
                        if (hasMinLength) strength += 25;
                        if (hasUppercase && hasLowercase) strength += 25;
                        if (hasNumber) strength += 25;
                        if (/[^A-Za-z0-9]/.test(value)) strength += 25;

                        const strengthDiv = document.createElement('div');
                        strengthDiv.style.marginTop = '8px';
                        strengthDiv.innerHTML = `
                            <div class=\"progress\" style=\"height: 6px; background: #e9ecef;\">
                                <div class=\"progress-bar\" style=\"width: \${strength}%; background: \${
                                    strength < 25 ? '#dc3545' : 
                                    strength < 50 ? '#fd7e14' : 
                                    strength < 75 ? '#ffc107' : '#28a745'
                                };\"></div>
                            </div>
                            <small style=\"color: \${
                                strength < 25 ? '#dc3545' : 
                                strength < 50 ? '#fd7e14' : 
                                strength < 75 ? '#ffc107' : '#28a745'
                            }; font-weight: bold;\">
                                Force: \${
                                    strength < 25 ? 'Très faible' : 
                                    strength < 50 ? 'Faible' : 
                                    strength < 75 ? 'Moyen' : 'Fort'
                                }
                            </small>
                        `;
                        container.appendChild(strengthDiv);
                    }
                }

                // Update visual feedback
                const inputField = document.getElementById(field.id);
                const invalidFeedback = field.closest('.form-group')?.querySelector('.invalid-feedback') ||
                                       field.closest('.col-md-6')?.querySelector('.invalid-feedback');

                if (isValid && value) {
                    inputField.classList.remove('is-invalid');
                    inputField.classList.add('is-valid');
                    if (invalidFeedback) invalidFeedback.innerHTML = '';
                } else if (!isValid) {
                    inputField.classList.remove('is-valid');
                    inputField.classList.add('is-invalid');
                    if (invalidFeedback && errors.length > 0) {
                        invalidFeedback.innerHTML = `<span style=\"color: #dc3545;\">✗ \${errors[0].message}</span>`;
                    }
                } else {
                    inputField.classList.remove('is-invalid', 'is-valid');
                    if (invalidFeedback) invalidFeedback.innerHTML = '';
                }
            }

            function isValidEmail(email) {
                const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
                return emailRegex.test(email);
            }

            // CSS pour les inputs valides/invalides
            const style = document.createElement('style');
            style.textContent = `
                .form-control.is-valid {
                    border-color: #28a745;
                    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                }
                .form-control.is-valid:focus {
                    border-color: #28a745;
                    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                }
                .form-control.is-invalid {
                    border-color: #dc3545;
                    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
                }
                .form-control.is-invalid:focus {
                    border-color: #dc3545;
                    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
                }
                .password-criteria {
                    background: #f8f9fa;
                    padding: 8px 12px;
                    border-radius: 4px;
                    border-left: 3px solid #667eea;
                }
            `;
            document.head.appendChild(style);

            // Form submission validation
            const registrationForm = document.querySelector('form');
            if (registrationForm) {
                const submitBtn = document.getElementById('submitBtn');
                
                registrationForm.addEventListener('submit', function(e) {
                    // Check if terms are accepted
                    const termsCheckbox = document.getElementById('{{ registrationForm.agreeTerms.vars.id }}');
                    if (!termsCheckbox.checked) {
                        e.preventDefault();
                        alert('Veuillez accepter les conditions d\\'utilisation pour continuer.');
                        termsCheckbox.focus();
                        return false;
                    }
                    
                    // Show loading state
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin mr-2\"></i>Création du compte...';
                    submitBtn.disabled = true;
                    
                    // Restore button after 10 seconds in case of error
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 10000);
                });
            }

            // Ensure all inputs have visible styling
            const allInputs = document.querySelectorAll('.form-control');
            allInputs.forEach(input => {
                input.style.backgroundColor = '#fff';
                input.style.color = '#333';
                input.style.border = '2px solid #667eea';
            });
            
            // Ensure select elements are visible
            const selectElements = document.querySelectorAll('select');
            selectElements.forEach(select => {
                select.style.backgroundColor = '#fff';
                select.style.color = '#333';
                select.style.border = '2px solid #667eea';
            });
        });
    </script>
{% endblock %}", "registration/register.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\registration\\register.html.twig");
    }
}
