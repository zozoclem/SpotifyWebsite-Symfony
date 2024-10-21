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

/* base.html.twig */
class __TwigTemplate_011f1ca914078b33f814bb4a8eec4b50 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #282828;
            color: #fff;
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        .sidebar {
            background-color: #000;
            padding: 1.25rem;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed;
            width: 250px;
            height: 100vh;
            left: 0;
            top: 0;
        }
        .sidebar img {
            width: 120px;
            margin-bottom: 1.25rem;
        }
        .sidebar nav ul {
            list-style: none;
            width: 100%;
        }
        .sidebar nav ul li {
            margin: 1rem 0;
        }
        .sidebar nav ul li a {
            color: #b3b3b3;
            text-decoration: none;
            padding: 0.75rem;
            border-radius: 5px;
            display: block;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .sidebar nav ul li a:hover {
            background-color: #282828;
            color: #fff;
        }
        .topbar {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #282828;
            margin-left: 250px;
            height: 40px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }
        .user-info {
            font-size: 0.875rem;
            display: flex;
            align-items: center;
        }
        .user-info i {
            margin-right: 0.5rem;
        }
        .main-content {
            flex-grow: 1;
            padding: 1.25rem;
            margin-left: 250px;
            margin-top: 40px;
            overflow-y: auto;
            background-color: #282828;
        }
    </style>
</head>
<body>
    <aside class=\"sidebar\" aria-label=\"Navigation Sidebar\">
        <img src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/spotify_logo.png"), "html", null, true);
        yield "\" alt=\"Logo Spotify\">
        <nav>
            <ul>
                <li><a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_spotify");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_artist");
        yield "\">Artistes</a></li>
                <li><a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_music");
        yield "\">Musiques</a></li>
                <li><a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Déconnexion</a></li>
            </ul>
        </nav>
    </aside>
    <header class=\"topbar\">
        <div class=\"user-info\">
            <i class=\"fas fa-user-circle\"></i>
            <span>Connecté en tant que ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "getUserIdentifier", [], "method", false, false, false, 103), "html", null, true);
        yield "</span>
        </div>
    </header>
    <main class=\"main-content\">
        ";
        // line 107
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 108
        yield "    </main>
    ";
        // line 109
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 110
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Spotify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  270 => 109,  248 => 107,  226 => 8,  203 => 6,  191 => 110,  189 => 109,  186 => 108,  184 => 107,  177 => 103,  167 => 96,  163 => 95,  159 => 94,  155 => 93,  149 => 90,  66 => 9,  64 => 8,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Spotify{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    {% block stylesheets %}{% endblock %}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #282828;
            color: #fff;
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        .sidebar {
            background-color: #000;
            padding: 1.25rem;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed;
            width: 250px;
            height: 100vh;
            left: 0;
            top: 0;
        }
        .sidebar img {
            width: 120px;
            margin-bottom: 1.25rem;
        }
        .sidebar nav ul {
            list-style: none;
            width: 100%;
        }
        .sidebar nav ul li {
            margin: 1rem 0;
        }
        .sidebar nav ul li a {
            color: #b3b3b3;
            text-decoration: none;
            padding: 0.75rem;
            border-radius: 5px;
            display: block;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .sidebar nav ul li a:hover {
            background-color: #282828;
            color: #fff;
        }
        .topbar {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #282828;
            margin-left: 250px;
            height: 40px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }
        .user-info {
            font-size: 0.875rem;
            display: flex;
            align-items: center;
        }
        .user-info i {
            margin-right: 0.5rem;
        }
        .main-content {
            flex-grow: 1;
            padding: 1.25rem;
            margin-left: 250px;
            margin-top: 40px;
            overflow-y: auto;
            background-color: #282828;
        }
    </style>
</head>
<body>
    <aside class=\"sidebar\" aria-label=\"Navigation Sidebar\">
        <img src=\"{{ asset('images/spotify_logo.png') }}\" alt=\"Logo Spotify\">
        <nav>
            <ul>
                <li><a href=\"{{ path('app_spotify') }}\">Accueil</a></li>
                <li><a href=\"{{ path('search_artist') }}\">Artistes</a></li>
                <li><a href=\"{{ path('search_music') }}\">Musiques</a></li>
                <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
            </ul>
        </nav>
    </aside>
    <header class=\"topbar\">
        <div class=\"user-info\">
            <i class=\"fas fa-user-circle\"></i>
            <span>Connecté en tant que {{ app.user.getUserIdentifier() }}</span>
        </div>
    </header>
    <main class=\"main-content\">
        {% block body %}{% endblock %}
    </main>
    {% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/home/iutbgdin/Bureau/Symfony/templates/base.html.twig");
    }
}
