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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/layouts/default.htm */
class __TwigTemplate_2af831b5abce197b698692affb820305246b82e64b83b227922bc3440a9a63b5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"ComputerPlex\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"ComputerPlex\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
        integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap\" rel=\"stylesheet\">
    ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 20
        echo "</head>

<body>

    <!-- Header -->
    <header id=\"layout-header\">
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 32
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "    </footer>

    <!-- Scripts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
        crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>
    ";
        // line 48
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 49
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 50
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  132 => 49,  121 => 48,  117 => 47,  105 => 37,  101 => 36,  95 => 32,  93 => 31,  87 => 27,  83 => 26,  75 => 20,  72 => 19,  65 => 15,  59 => 12,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>{{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"ComputerPlex\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"ComputerPlex\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/logo.png'|theme }}\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
        integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap\" rel=\"stylesheet\">
    {% styles %}
</head>

<body>

    <!-- Header -->
    <header id=\"layout-header\">
        {% partial 'site/header' %}
    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>

    <!-- Scripts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
        crossorigin=\"anonymous\"></script>
    <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

</body>

</html>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/layouts/default.htm", "");
    }
}
