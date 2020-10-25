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
class __TwigTemplate_8e95c3ef77513ff535f2a6488d16481090af47ee9f7fc700d00179eb8cefa863 extends Template
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
        // line 20
        echo "</head>

<body>
  ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "


";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
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
        echo "  \t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
";
        // line 19
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "


  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 25
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("menu_liste"));
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 35
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
        // line 45
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

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t<!-- Flashy depends on jQuery 
\t// <script src=\"//code.jquery.com/jquery.js\"></script>
\t// Load Flashy default JavaScript -->
\t// <!-- <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
\t// <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t// <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t// <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
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
        return array (  243 => 77,  239 => 76,  235 => 75,  231 => 74,  223 => 70,  216 => 69,  186 => 45,  174 => 35,  167 => 34,  157 => 25,  150 => 24,  140 => 27,  137 => 24,  130 => 23,  123 => 19,  118 => 13,  111 => 12,  103 => 7,  96 => 6,  84 => 79,  82 => 69,  79 => 68,  77 => 34,  72 => 31,  70 => 23,  65 => 20,  63 => 12,  59 => 11,  55 => 9,  53 => 6,  46 => 1,);
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
  \t{{ encore_entry_link_tags('app') }}
{# <link rel=\"stylesheet\" href=\"{{ asset('/css/bootstrap/bootstrap.min.css') }}\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" />
<link rel=\"stylesheet\" href=\"{{ asset('/bundles/mercuryseriesflashy/css/flashy.css') }}\">
<link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'> #}
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
\t{{ encore_entry_script_tags('app') }}
\t<!-- Flashy depends on jQuery 
\t// <script src=\"//code.jquery.com/jquery.js\"></script>
\t// Load Flashy default JavaScript -->
\t// <!-- <script src=\"{{ asset('/bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
\t// <script src=\"{{ asset('/js/jquery.min.js') }}\"></script>
\t// <script src=\"{{ asset('/js/popper.min.js') }}\"></script>
\t// <script src=\"{{ asset('/js/bootstrap.min.js') }}\"></script> -->
{% endblock %}



</body>
</html>
", "base.html.twig", "/var/www/html/symfony5/skeleton/templates/base.html.twig");
    }
}
