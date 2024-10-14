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
<html>
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
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #282828;
            color: #fff;
            margin: 0;
            display: flex;
            flex-direction: column; /* Ensure topbar is at the top */
            height: 100vh; /* Full height */
        }
        .sidebar {
            background-color: #000;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed; 
            top: 0;
            left: 0;
            bottom: 0;
        }
        .sidebar img {
            width: 150px;
            margin-bottom: 20px;
        }
        .sidebar nav ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }
        .sidebar nav ul li {
            margin: 15px 0;
        }
        .sidebar nav ul li a {
            color: #b3b3b3;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            display: block;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .sidebar nav ul li a:hover {
            background-color: #282828;
            color: #fff;
        }
        .topbar {
            display: flex;
            background-color: #282828;
            z-index: 1000;
            margin-left: 250px; /* Adjust according to sidebar width */
            justify-content: flex-end;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            height: 40px;
            position: relative;
        }
        .topbar .user-info {
            display: flex;
            align-items: center;
            background-color: #000;
            border-radius: 15px;
            padding: 5px 10px;
            cursor: pointer;
            position: relative;
        }
        .topbar .user-info i {
            margin-right: 10px;
        }
        .topbar .user-info:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1001;
        }
        .dropdown-menu a {
            color: #b3b3b3;
            text-decoration: none;
            padding: 10px;
            display: block;
            transition: background-color 0.3s;
        }
        .dropdown-menu a:hover {
            background-color: #282828;
            color: #fff;
        }
        .main-content {
            background-color: #282828;
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px; /* Adjust according to sidebar width */
            margin-top: 40px; /* Adjust according to topbar height */
            height: calc(100vh - 60px); /* Full height minus topbar height */
            overflow-y: auto; /* Scroll if content overflows */
        }
    </style>
</head>
<body>
    <div class=\"sidebar\">
        <img src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/spotify_logo.png"), "html", null, true);
        yield "\" alt=\"Spotify Logo\">
        <nav>
            <ul>
                <li><a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_spotify");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_artist");
        yield "\">Rechercher un Artiste</a></li>
                <li><a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_music");
        yield "\">Rechercher une Musique</a></li>
            </ul>
        </nav>
    </div>
    <div class=\"topbar\">
        <div class=\"user-info\">
            <i class=\"fas fa-user-circle\"></i>
            <span>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "getUserIdentifier", [], "method", false, false, false, 128), "html", null, true);
        yield "</span>
            <div class=\"dropdown-menu\">
                <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
            </div>
        </div>
    </div>
    <div class=\"main-content\">
        ";
        // line 135
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 136
        yield "    </div>
    ";
        // line 137
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 138
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

    // line 135
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

    // line 137
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
        return array (  298 => 137,  276 => 135,  254 => 8,  231 => 6,  219 => 138,  217 => 137,  214 => 136,  212 => 135,  204 => 130,  199 => 128,  189 => 121,  185 => 120,  181 => 119,  175 => 116,  66 => 9,  64 => 8,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Spotify{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    {% block stylesheets %}{% endblock %}
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #282828;
            color: #fff;
            margin: 0;
            display: flex;
            flex-direction: column; /* Ensure topbar is at the top */
            height: 100vh; /* Full height */
        }
        .sidebar {
            background-color: #000;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed; 
            top: 0;
            left: 0;
            bottom: 0;
        }
        .sidebar img {
            width: 150px;
            margin-bottom: 20px;
        }
        .sidebar nav ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }
        .sidebar nav ul li {
            margin: 15px 0;
        }
        .sidebar nav ul li a {
            color: #b3b3b3;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            display: block;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .sidebar nav ul li a:hover {
            background-color: #282828;
            color: #fff;
        }
        .topbar {
            display: flex;
            background-color: #282828;
            z-index: 1000;
            margin-left: 250px; /* Adjust according to sidebar width */
            justify-content: flex-end;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            height: 40px;
            position: relative;
        }
        .topbar .user-info {
            display: flex;
            align-items: center;
            background-color: #000;
            border-radius: 15px;
            padding: 5px 10px;
            cursor: pointer;
            position: relative;
        }
        .topbar .user-info i {
            margin-right: 10px;
        }
        .topbar .user-info:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1001;
        }
        .dropdown-menu a {
            color: #b3b3b3;
            text-decoration: none;
            padding: 10px;
            display: block;
            transition: background-color 0.3s;
        }
        .dropdown-menu a:hover {
            background-color: #282828;
            color: #fff;
        }
        .main-content {
            background-color: #282828;
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px; /* Adjust according to sidebar width */
            margin-top: 40px; /* Adjust according to topbar height */
            height: calc(100vh - 60px); /* Full height minus topbar height */
            overflow-y: auto; /* Scroll if content overflows */
        }
    </style>
</head>
<body>
    <div class=\"sidebar\">
        <img src=\"{{ asset('images/spotify_logo.png') }}\" alt=\"Spotify Logo\">
        <nav>
            <ul>
                <li><a href=\"{{ path('app_spotify') }}\">Accueil</a></li>
                <li><a href=\"{{ path('search_artist') }}\">Rechercher un Artiste</a></li>
                <li><a href=\"{{ path('search_music') }}\">Rechercher une Musique</a></li>
            </ul>
        </nav>
    </div>
    <div class=\"topbar\">
        <div class=\"user-info\">
            <i class=\"fas fa-user-circle\"></i>
            <span>{{ app.user.getUserIdentifier() }}</span>
            <div class=\"dropdown-menu\">
                <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        </div>
    </div>
    <div class=\"main-content\">
        {% block body %}{% endblock %}
    </div>
    {% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/home/iutbgdin/Bureau/Symfony/templates/base.html.twig");
    }
}
