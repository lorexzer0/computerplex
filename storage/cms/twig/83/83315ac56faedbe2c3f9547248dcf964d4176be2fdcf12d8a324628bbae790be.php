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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/basicmenu.htm */
class __TwigTemplate_7dd7d23a49ba58703dc0ea9eedc46b86dbcddc2d75fa3a16d5b22ddd0a83c429 extends \Twig\Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"multibox\">
    <div class=\"sidepanel\">
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("box/categorylist"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
    </div>
    <div class=\"content product-content\">
        <section class=\"basicmenu\">
            <h1 class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <div class=\"content\">
                ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 10);
        echo "
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/basicmenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}
<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content product-content\">
        <section class=\"basicmenu\">
            <h1 class=\"title\">{{ post.title }}</h1>
            <div class=\"content\">
                {{ post.content_html|raw }}
            </div>
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/basicmenu.htm", "");
    }
}
