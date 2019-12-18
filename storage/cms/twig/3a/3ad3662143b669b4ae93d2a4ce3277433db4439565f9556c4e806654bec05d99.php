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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/partials/box/categorylist.htm */
class __TwigTemplate_c840ba3d785c5cbef94aacf89a39c5e2aeb5130b309c35f0f96edcb16590579f extends \Twig\Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 1), "tree", [], "method", false, false, false, 1);
        // line 2
        echo "<div class=\"listbox\">
    <div class=\"header\">
        <h1>Kategóriák</h1>
    </div>
    <div class=\"list\">
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "isNotEmpty", [], "method", false, false, false, 7)) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 9
                echo "        <div class=\"category\" ";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 9), "isNotEmpty", [], "method", false, false, false, 9)) {
                    echo " onclick=\"window.location.href='";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("categorypage", ["catslug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 9)]);
                    echo "'\" ";
                }
                echo ">
            <div class=\"list-item ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10), "isNotEmpty", [], "method", false, false, false, 10)) {
                    echo " dropdown";
                }
                echo "\">
                ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11), "html", null, true);
                echo "
                <span>(";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "product_count", [], "any", false, false, false, 12), "html", null, true);
                echo ")</span>
            </div>
            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14), "isNotEmpty", [], "method", false, false, false, 14)) {
                    // line 15
                    echo "            <div class=\"child-categories\">
                ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16));
                    foreach ($context['_seq'] as $context["_key"] => $context["childcat"]) {
                        // line 17
                        echo "                <div class=\"child-item\" onclick=\"window.location.href='";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categorypage", ["catslug" => twig_get_attribute($this->env, $this->source, $context["childcat"], "slug", [], "any", false, false, false, 17)]);
                        echo "'\">
                    ";
                        // line 18
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childcat"], "name", [], "any", false, false, false, 18), "html", null, true);
                        echo "
                    <span>(";
                        // line 19
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childcat"], "product_count", [], "any", false, false, false, 19), "html", null, true);
                        echo ")</span>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "            </div>
            ";
                }
                // line 24
                echo "        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        } else {
            // line 27
            echo "        <div class=\"list-item\">
            Nincsenek Kategóriák...
        </div>
        ";
        }
        // line 31
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/box/categorylist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  118 => 27,  115 => 26,  108 => 24,  104 => 22,  95 => 19,  91 => 18,  86 => 17,  82 => 16,  79 => 15,  77 => 14,  72 => 12,  68 => 11,  62 => 10,  53 => 9,  48 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = CategoryList.make().tree() %}
<div class=\"listbox\">
    <div class=\"header\">
        <h1>Kategóriák</h1>
    </div>
    <div class=\"list\">
        {% if categories.isNotEmpty() %}
        {% for category in categories %}
        <div class=\"category\" {% if not category.children.isNotEmpty() %} onclick=\"window.location.href='{{ 'categorypage'|page({catslug: category.slug}) }}'\" {% endif %}>
            <div class=\"list-item {% if category.children.isNotEmpty() %} dropdown{% endif %}\">
                {{ category.name }}
                <span>({{ category.product_count }})</span>
            </div>
            {% if category.children.isNotEmpty() %}
            <div class=\"child-categories\">
                {% for childcat in category.children %}
                <div class=\"child-item\" onclick=\"window.location.href='{{ 'categorypage'|page({catslug: childcat.slug}) }}'\">
                    {{ childcat.name }}
                    <span>({{ childcat.product_count }})</span>
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>
        {% endfor %}
        {% else %}
        <div class=\"list-item\">
            Nincsenek Kategóriák...
        </div>
        {% endif %}
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/box/categorylist.htm", "");
    }
}
