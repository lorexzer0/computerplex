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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/categorypage.htm */
class __TwigTemplate_c6c9fd6f2824176e9163dbc528a004a38b463015e50c80af8633173907a62b06 extends \Twig\Template
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
        $context["category"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 1);
        // line 2
        $context["products"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 2), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 2)], "method", false, false, false, 2), "active", [], "method", false, false, false, 2), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 2)], "method", false, false, false, 2);
        // line 3
        echo "
<div class=\"multibox\">
    <div class=\"sidepanel\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("box/categorylist"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
    </div>
    <div class=\"content\">
        <h1 class=\"pagetitle\">Kategória: ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
            echo " / ";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
        <hr>
        <section class=\"productboxes\">
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "isNotEmpty", [], "method", false, false, false, 12)) {
            // line 13
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "                ";
                $context["offer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "offer", [], "any", false, false, false, 14), "first", [], "method", false, false, false, 14);
                // line 15
                echo "                <div class=\"productbox\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 15), "html", null, true);
                echo "\" onclick=\"window.location.href='";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("productpage", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 15)]);
                echo "'\">
                    <div class=\"hero\" style=\"background-image: url(";
                // line 16
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["product"], "preview_image", [], "any", false, false, false, 16), false, 252, ["quality" => "95", "extension" => "png"]]);
                echo ");\">
                        ";
                // line 17
                if ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "discount_price", [], "any", false, false, false, 17) > 0)) {
                    // line 18
                    echo "                        <span><i class=\"fas fa-tag\"></i> Akció! -";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "discount_price", [], "any", false, false, false, 18) / twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "old_price", [], "any", false, false, false, 18)) * 100), 0, ".", ","), "html", null, true);
                    echo " %</span>
                        ";
                }
                // line 20
                echo "                    </div>
                    <h1>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</h1>
                    <div class=\"details\">
                        <div class=\"detail\">
                            <i class=\"fas fa-pallet\" style=\"color: #f6a416\"></i> Raktáron <strong>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "quantity", [], "any", false, false, false, 24), "html", null, true);
                echo "</strong> db
                        </div>
                        <div class=\"detail\">
                            <i class=\"fas fa-money-bill\" style=\"color:green\"></i> <strong>";
                // line 27
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", [], "any", false, false, false, 27), 0, ",", "."), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "currency", [], "any", false, false, false, 27), "html", null, true);
                echo "
                        </div>                        
                    </div>                              
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/categorypage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  123 => 32,  110 => 27,  104 => 24,  98 => 21,  95 => 20,  89 => 18,  87 => 17,  83 => 16,  76 => 15,  73 => 14,  68 => 13,  66 => 12,  54 => 9,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set category = CategoryPage.get() %}
{% set products = ProductList.make().sort(ProductList.getSorting()).active().category(category.id) %}

<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content\">
        <h1 class=\"pagetitle\">Kategória: {% if category.parent.name %} {{ category.parent.name }} / {% endif %} {{ category.name }}</h1>
        <hr>
        <section class=\"productboxes\">
            {% if products.isNotEmpty() %}
                {% for product in products %}
                {% set offer = product.offer.first() %}
                <div class=\"productbox\" data-id=\"{{ product.id }}\" onclick=\"window.location.href='{{ 'productpage'|page({slug: product.slug}) }}'\">
                    <div class=\"hero\" style=\"background-image: url({{ product.preview_image | resize(false, 252, { quality: '95', extension: 'png' }) }});\">
                        {% if offer.discount_price > 0 %}
                        <span><i class=\"fas fa-tag\"></i> Akció! -{{ ((offer.discount_price / offer.old_price)*100)|number_format(0,'.',',') }} %</span>
                        {% endif %}
                    </div>
                    <h1>{{ product.name }}</h1>
                    <div class=\"details\">
                        <div class=\"detail\">
                            <i class=\"fas fa-pallet\" style=\"color: #f6a416\"></i> Raktáron <strong>{{ offer.quantity }}</strong> db
                        </div>
                        <div class=\"detail\">
                            <i class=\"fas fa-money-bill\" style=\"color:green\"></i> <strong>{{ offer.price|number_format(0,',','.') }}</strong> {{ offer.currency }}
                        </div>                        
                    </div>                              
                </div>
                {% endfor %}
            {% endif %}
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/categorypage.htm", "");
    }
}
