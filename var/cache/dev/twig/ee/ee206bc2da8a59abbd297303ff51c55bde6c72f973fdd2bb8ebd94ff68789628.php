<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_3e0d36f5e41d10b192d8856f22597007a2705e16e22a21fc8c6c56a5a2c5a792 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'menu' => [$this, 'block_menu'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <title>
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "  </title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("images/favicon.png"), "html", null, true);
        echo "\" />
  ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>

<body>
  ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "


";
        // line 33
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "


</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Welcome!
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" />
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
<link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "


  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 24
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("menu_liste"));
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 34
        echo "
\t<footer>

<div id=\"sticky-footer\" class=\"py-4 bg-dark text-white-50\">
\t<div class=\"container text-center\">
\t\t<small>Copyright &copy; symfony company</small>
<div class=\"container\">
\t<div class=\"row\">
\t\t<div id=\"footer-copyright\" class=\"col-md-6\">
\t\t\t<p>&copy;
\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t\t- The Symfony Project</p>
\t\t</div>
\t\t<div id=\"footer-resources\" class=\"col-md-6\">
\t\t\t<p>
\t\t\t\t<a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
\t\t\t\t\t<i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t</p>
\t\t</div>
\t</div>
</div>


\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "\t<!-- Flashy depends on jQuery -->
\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t<!-- Load Flashy default JavaScript -->
\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 75,  241 => 74,  237 => 73,  233 => 72,  228 => 69,  221 => 68,  191 => 44,  179 => 34,  172 => 33,  162 => 24,  155 => 23,  145 => 26,  142 => 23,  135 => 22,  124 => 15,  118 => 13,  111 => 12,  103 => 7,  96 => 6,  84 => 77,  82 => 68,  79 => 67,  77 => 33,  72 => 30,  70 => 22,  65 => 19,  63 => 12,  59 => 11,  55 => 9,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <title>
    {% block title %}
    Welcome!
    {% endblock %}
  </title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  <link rel=\"shortcut icon\" href=\"{{ absolute_url('images/favicon.png') }}\" />
  {% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('/css/bootstrap/bootstrap.min.css') }}\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" />
<link rel=\"stylesheet\" href=\"{{ asset('/bundles/mercuryseriesflashy/css/flashy.css') }}\">
<link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
  {% endblock %}
</head>

<body>
  {% block body %}
        {% block menu %}
        {{ render(url('menu_liste')) }}
        {% endblock %}



  {% endblock body%}



{% block footer %}

\t<footer>

<div id=\"sticky-footer\" class=\"py-4 bg-dark text-white-50\">
\t<div class=\"container text-center\">
\t\t<small>Copyright &copy; symfony company</small>
<div class=\"container\">
\t<div class=\"row\">
\t\t<div id=\"footer-copyright\" class=\"col-md-6\">
\t\t\t<p>&copy;
\t\t\t\t{{ 'now'|date('Y') }}
\t\t\t\t- The Symfony Project</p>
\t\t</div>
\t\t<div id=\"footer-resources\" class=\"col-md-6\">
\t\t\t<p>
\t\t\t\t<a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
\t\t\t\t\t<i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t</p>
\t\t</div>
\t</div>
</div>


\t</div>
</div>
{% endblock footer %}

{% block javascripts %}
\t<!-- Flashy depends on jQuery -->
\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t<!-- Load Flashy default JavaScript -->
\t<script src=\"{{ asset('/bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
\t<script src=\"{{ asset('/js/jquery.min.js') }}\"></script>
\t<script src=\"{{ asset('/js/popper.min.js') }}\"></script>
\t<script src=\"{{ asset('/js/bootstrap.min.js') }}\"></script>
{% endblock %}



</body>
</html>
", "base.html.twig", "/var/www/html/symfony5/skeleton/templates/base.html.twig");
    }
}
