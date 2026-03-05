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

/* security/login.html.twig */
class __TwigTemplate_e41b37ec468862cedfff29a5f910a98a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Log in!";
        
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
        .form-control {
            border: 1px solid #040404;
            border-radius: 5px;
            padding: 12px 15px;
            height: 45px;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .btn-facebook {
            background-color: #3b5998;
            border-color: #3b5998;
            color: white;
        }
        .btn-google {
            background-color: #dd4b39;
            border-color: #dd4b39;
            color: white;
        }
        .alert {
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
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

        // line 51
        yield "    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"row w-100\">
                <div class=\"content-wrapper full-page-wrapper d-flex align-items-center auth login-bg\">
                    <div class=\"card col-lg-4 mx-auto\">
                        <div class=\"card-body px-5 py-5\">
                            <h3 class=\"card-title text-start mb-3\">Login</h3>
                            
                            ";
        // line 59
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                    ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 61, $this->source); })()), "messageKey", [], "any", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 61, $this->source); })()), "messageData", [], "any", false, false, false, 61), "security"), "html", null, true);
            yield "
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            ";
        }
        // line 65
        yield "
                            ";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                                <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
                                    You are logged in as ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "userIdentifier", [], "any", false, false, false, 68), "html", null, true);
            yield ", 
                                    <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
            yield "\" class=\"alert-link\">Logout</a>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            ";
        }
        // line 73
        yield "
                            <form method=\"post\">
                                <div class=\"form-group\">
                                    <label for=\"inputEmail\">Email address *</label>
                                    <input type=\"email\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" id=\"inputEmail\" 
       class=\"form-control p_input\" autocomplete=\"email\" required autofocus
       placeholder=\"Enter your email\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputPassword\">Password *</label>
                                    
<input type=\"password\" name=\"_password\" id=\"inputPassword\" 
       class=\"form-control p_input\" autocomplete=\"current-password\" required
       placeholder=\"Enter your password\">
                                </div>
                                
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                                <div class=\"form-group d-flex align-items-center justify-content-between\">
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label\">
                                            <input type=\"checkbox\" name=\"_remember_me\" class=\"form-check-input\">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"forgot-pass\">Forgot password</a>
                                </div>
                                <div class=\"text-center d-grid gap-2\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\">
                                        <i class=\"mdi mdi-login mr-2\"></i>Login
                                    </button>
                                </div>
                                
                                ";
        // line 116
        yield "                                
                                <p class=\"sign-up text-center mt-4\">
                                    Don't have an Account?<a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\"> Sign Up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
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

        // line 130
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/off-canvas.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/misc.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/settings.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/todolist.js"), "html", null, true);
        yield "\"></script>
    
    <script>
        // Add form validation and interactivity
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.querySelector('form');
            const submitBtn = loginForm.querySelector('button[type=\"submit\"]');
            
            loginForm.addEventListener('submit', function(e) {
                // Validate form
                const email = document.getElementById('inputEmail');
                const password = document.getElementById('inputPassword');
                
                if (!email.value || !password.value) {
                    e.preventDefault();
                    if (!email.value) {
                        email.classList.add('is-invalid');
                    }
                    if (!password.value) {
                        password.classList.add('is-invalid');
                    }
                    return false;
                }
                
                // Show loading state
                submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin mr-2\"></i>Logging in...';
                submitBtn.disabled = true;
            });
            
            // Remove invalid class on input
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    this.classList.remove('is-invalid');
                });
            });
            
            // Password visibility toggle
            const passwordInput = document.getElementById('inputPassword');
            const passwordGroup = passwordInput.closest('.form-group');
            
            // Add eye icon to password field
            const eyeIcon = document.createElement('span');
            eyeIcon.className = 'mdi mdi-eye-off input-icon';
            eyeIcon.style.cssText = 'position: absolute; right: 15px; top: 40px; cursor: pointer; color: #777;';
            
            passwordGroup.style.position = 'relative';
            passwordGroup.appendChild(eyeIcon);
            
            eyeIcon.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    this.classList.remove('mdi-eye-off');
                    this.classList.add('mdi-eye');
                } else {
                    passwordInput.type = 'password';
                    this.classList.remove('mdi-eye');
                    this.classList.add('mdi-eye-off');
                }
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
        return "security/login.html.twig";
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
        return array (  329 => 135,  325 => 134,  321 => 133,  317 => 132,  313 => 131,  308 => 130,  295 => 129,  274 => 118,  270 => 116,  259 => 98,  247 => 89,  232 => 77,  226 => 73,  219 => 69,  215 => 68,  212 => 67,  210 => 66,  207 => 65,  200 => 61,  197 => 60,  195 => 59,  185 => 51,  172 => 50,  123 => 11,  119 => 10,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

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
        .form-control {
            border: 1px solid #040404;
            border-radius: 5px;
            padding: 12px 15px;
            height: 45px;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .btn-facebook {
            background-color: #3b5998;
            border-color: #3b5998;
            color: white;
        }
        .btn-google {
            background-color: #dd4b39;
            border-color: #dd4b39;
            color: white;
        }
        .alert {
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"row w-100\">
                <div class=\"content-wrapper full-page-wrapper d-flex align-items-center auth login-bg\">
                    <div class=\"card col-lg-4 mx-auto\">
                        <div class=\"card-body px-5 py-5\">
                            <h3 class=\"card-title text-start mb-3\">Login</h3>
                            
                            {% if error %}
                                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                    {{ error.messageKey|trans(error.messageData, 'security') }}
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            {% endif %}

                            {% if app.user %}
                                <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
                                    You are logged in as {{ app.user.userIdentifier }}, 
                                    <a href=\"{{ logout_path() }}\" class=\"alert-link\">Logout</a>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            {% endif %}

                            <form method=\"post\">
                                <div class=\"form-group\">
                                    <label for=\"inputEmail\">Email address *</label>
                                    <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"inputEmail\" 
       class=\"form-control p_input\" autocomplete=\"email\" required autofocus
       placeholder=\"Enter your email\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"inputPassword\">Password *</label>
                                    
<input type=\"password\" name=\"_password\" id=\"inputPassword\" 
       class=\"form-control p_input\" autocomplete=\"current-password\" required
       placeholder=\"Enter your password\">
                                </div>
                                
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                                <div class=\"form-group d-flex align-items-center justify-content-between\">
                                    <div class=\"form-check\">
                                        <label class=\"form-check-label\">
                                            <input type=\"checkbox\" name=\"_remember_me\" class=\"form-check-input\">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href=\"{{path('app_forgot_password_request')}}\" class=\"forgot-pass\">Forgot password</a>
                                </div>
                                <div class=\"text-center d-grid gap-2\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\">
                                        <i class=\"mdi mdi-login mr-2\"></i>Login
                                    </button>
                                </div>
                                
                                {# Uncomment if you want social login buttons
                                <div class=\"d-flex mt-4\">
                                    <button class=\"btn btn-facebook me-2 col\" type=\"button\">
                                        <i class=\"mdi mdi-facebook\"></i> Facebook
                                    </button>
                                    <button class=\"btn btn-google col\" type=\"button\">
                                        <i class=\"mdi mdi-google-plus\"></i> Google
                                    </button>
                                </div>
                                #}
                                
                                <p class=\"sign-up text-center mt-4\">
                                    Don't have an Account?<a href=\"{{ path('app_register') }}\"> Sign Up</a>
                                </p>
                            </form>
                        </div>
                    </div>
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
        // Add form validation and interactivity
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.querySelector('form');
            const submitBtn = loginForm.querySelector('button[type=\"submit\"]');
            
            loginForm.addEventListener('submit', function(e) {
                // Validate form
                const email = document.getElementById('inputEmail');
                const password = document.getElementById('inputPassword');
                
                if (!email.value || !password.value) {
                    e.preventDefault();
                    if (!email.value) {
                        email.classList.add('is-invalid');
                    }
                    if (!password.value) {
                        password.classList.add('is-invalid');
                    }
                    return false;
                }
                
                // Show loading state
                submitBtn.innerHTML = '<i class=\"mdi mdi-loading mdi-spin mr-2\"></i>Logging in...';
                submitBtn.disabled = true;
            });
            
            // Remove invalid class on input
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    this.classList.remove('is-invalid');
                });
            });
            
            // Password visibility toggle
            const passwordInput = document.getElementById('inputPassword');
            const passwordGroup = passwordInput.closest('.form-group');
            
            // Add eye icon to password field
            const eyeIcon = document.createElement('span');
            eyeIcon.className = 'mdi mdi-eye-off input-icon';
            eyeIcon.style.cssText = 'position: absolute; right: 15px; top: 40px; cursor: pointer; color: #777;';
            
            passwordGroup.style.position = 'relative';
            passwordGroup.appendChild(eyeIcon);
            
            eyeIcon.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    this.classList.remove('mdi-eye-off');
                    this.classList.add('mdi-eye');
                } else {
                    passwordInput.type = 'password';
                    this.classList.remove('mdi-eye');
                    this.classList.add('mdi-eye-off');
                }
            });
        });
    </script>
{% endblock %}", "security/login.html.twig", "C:\\Users\\islem\\OneDrive\\Bureau\\PIdev\\templates\\security\\login.html.twig");
    }
}
