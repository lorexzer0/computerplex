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
                echo "                ";
                $context["status"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getObject", [], "method", false, false, false, 15), "storagestatus", [], "any", false, false, false, 15);
                // line 16
                echo "                <div class=\"productbox\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\">
                    <div class=\"main-wrap\" onclick=\"window.location.href='";
                // line 17
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("productpage", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 17)]);
                echo "'\">
                        <div class=\"badges\">
                            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "raktaron", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                            <span class=\"rbadge\">
                                <i class=\"fas fa-pallet\"></i> Rendelhető
                            </span>
                            ";
                }
                // line 24
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "szemelyesen", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                            <span class=\"gbadge\">
                                <i class=\"fas fa-box-open\"></i> Személyesen átvehető
                            </span>
                            ";
                }
                // line 29
                echo "                        </div>
                        <div class=\"hero\" style=\"background-image: url(";
                // line 30
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["product"], "preview_image", [], "any", false, false, false, 30), false, 252, ["quality" => "95", "extension" => "png"]]);
                echo ");\">
                            ";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "discount_price", [], "any", false, false, false, 31) > 0)) {
                    // line 32
                    echo "                            <span><i class=\"fas fa-tag\"></i> Akció! -";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "discount_price", [], "any", false, false, false, 32) / twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "old_price", [], "any", false, false, false, 32)) * 100), 0, ".", ","), "html", null, true);
                    echo " %</span>
                            ";
                }
                // line 34
                echo "                        </div>
                        <h1>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "</h1>
                        <div class=\"details\">
                            <div class=\"detail\">
                                <i class=\"fas fa-pallet\" style=\"color: #f6a416\"></i> Raktáron <strong>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "quantity", [], "any", false, false, false, 38), "html", null, true);
                echo "</strong> db
                            </div>
                            <div class=\"detail\">
                                <i class=\"fas fa-money-bill\" style=\"color:green\"></i> <strong>";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", [], "any", false, false, false, 41), 0, ",", "."), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "currency", [], "any", false, false, false, 41), "html", null, true);
                echo "
                            </div>                        
                        </div>                    
                    </div>             
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            ";
        }
        // line 48
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
        return array (  153 => 48,  150 => 47,  136 => 41,  130 => 38,  124 => 35,  121 => 34,  115 => 32,  113 => 31,  109 => 30,  106 => 29,  100 => 25,  97 => 24,  91 => 20,  89 => 19,  84 => 17,  79 => 16,  76 => 15,  73 => 14,  68 => 13,  66 => 12,  54 => 9,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
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
                {% set status = product.getObject().storagestatus %}
                <div class=\"productbox\" data-id=\"{{ product.id }}\">
                    <div class=\"main-wrap\" onclick=\"window.location.href='{{ 'productpage'|page({slug: product.slug}) }}'\">
                        <div class=\"badges\">
                            {% if status.raktaron %}
                            <span class=\"rbadge\">
                                <i class=\"fas fa-pallet\"></i> Rendelhető
                            </span>
                            {% endif %}
                            {% if status.szemelyesen %}
                            <span class=\"gbadge\">
                                <i class=\"fas fa-box-open\"></i> Személyesen átvehető
                            </span>
                            {% endif %}
                        </div>
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
                </div>
                {% endfor %}
            {% endif %}
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/categorypage.htm", "");
    }
}
