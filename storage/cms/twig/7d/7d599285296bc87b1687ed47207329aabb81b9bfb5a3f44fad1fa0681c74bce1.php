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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/categorylist.htm */
class __TwigTemplate_28d38f0910a81b9ae710290e613787166ac33f439e05646e685a980984a2063a extends \Twig\Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryListMain"] ?? null), "make", [], "method", false, false, false, 1), "tree", [], "method", false, false, false, 1);
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
    <div class=\"content\">
        <section class=\"categoryboxes\">
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "isNotEmpty", [], "method", false, false, false, 8)) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "                    <div class=\"categorybox\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 10), "html", null, true);
                echo "\" onclick=\"window.location.href='";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("categorypage", ["catslug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 10)]);
                echo "'\">
                        <div class=\"hero\" style=\"background-image: url(";
                // line 11
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["category"], "preview_image", [], "any", false, false, false, 11), false, 252, ["quality" => "95", "extension" => "png"]]);
                echo ");\"></div>
                        <h1>";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12), "html", null, true);
                echo "</h1>                    
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            ";
        }
        // line 16
        echo "        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/categorylist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  79 => 15,  70 => 12,  66 => 11,  59 => 10,  54 => 9,  52 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = CategoryListMain.make().tree() %}
<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content\">
        <section class=\"categoryboxes\">
            {% if categories.isNotEmpty() %}
                {% for category in categories %}
                    <div class=\"categorybox\" data-id=\"{{ category.id }}\" onclick=\"window.location.href='{{ 'categorypage'|page({catslug: category.slug}) }}'\">
                        <div class=\"hero\" style=\"background-image: url({{ category.preview_image | resize(false, 252, { quality: '95', extension: 'png' }) }});\"></div>
                        <h1>{{ category.name }}</h1>                    
                    </div>
                {% endfor %}
            {% endif %}
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/categorylist.htm", "");
    }
}
