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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/home.htm */
class __TwigTemplate_ba1eec04cc92670d9b3f53cd83635ca8f7b9bd9bd26d8b10c2d453f2b0f63800 extends \Twig\Template
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
        $context["productlist"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newProducts"] ?? null), "make", [], "method", false, false, false, 1), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["newProducts"] ?? null), "getSorting", [], "method", false, false, false, 1)], "method", false, false, false, 1), "active", [], "method", false, false, false, 1);
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
        <section class=\"carousel\">
            ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "        </section>
        <section class=\"promotional\">
            ";
        // line 11
        if (false) {
            // line 12
            echo "            <h1 class=\"title\">Jelenlegi akciós termékeink</h1>
            <div class=\"productlist\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "                <div class=\"product\">
                    <div class=\"hero\" style=\"background-image: url(";
                // line 16
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-test.jpg");
                echo ")\">                
                    </div>
                    <div class=\"title\">
                        <h3>I7-8700K BOX</h3>
                    </div>
                    <div class=\"details\">
                        <span class=\"price\">
                            129.000 HUF
                        </span>
                        <div class=\"addtocart\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </div>
            ";
        }
        // line 33
        echo "            <h1 class=\"title\">Legfrissebb termékeink</h1>
            <div class=\"productlist\">                
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["productlist"] ?? null), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                ";
            $context["status"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getObject", [], "method", false, false, false, 36), "storagestatus", [], "any", false, false, false, 36);
            // line 37
            echo "                ";
            $context["offer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "offer", [], "any", false, false, false, 37), "first", [], "method", false, false, false, 37);
            // line 38
            echo "                <div class=\"product\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">
                    <div class=\"main-wrap\" onclick=\"window.location.href='";
            // line 39
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("productpage", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 39)]);
            echo "'\">                        
                        <div class=\"badges\">
                            ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "raktaron", [], "any", false, false, false, 41)) {
                // line 42
                echo "                            <span class=\"rbadge\">
                                <i class=\"fas fa-pallet\"></i> Rendelhető
                            </span>
                            ";
            }
            // line 46
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "szemelyesen", [], "any", false, false, false, 46)) {
                // line 47
                echo "                            <span class=\"gbadge\">
                                <i class=\"fas fa-box-open\"></i> Személyesen átvehető
                            </span>
                            ";
            }
            // line 51
            echo "                        </div>
                        <div class=\"hero\" style=\"background-image: url(";
            // line 52
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["product"], "preview_image", [], "any", false, false, false, 52), false, 252, ["quality" => "95", "extension" => "png"]]);
            echo ")\">                
                        </div>                    
                    </div>
                    <div class=\"title\">
                        <h3>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</h3>
                        <!-- <p>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "raktaron", [], "any", false, false, false, 57), "html", null, true);
            echo "</p> -->
                    </div>
                    <div class=\"details\">
                        <div class=\"price\">
                            ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "old_price", [], "any", false, false, false, 61) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "old_price", [], "any", false, false, false, 61) > twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", [], "any", false, false, false, 61)))) {
                // line 62
                echo "                            <small>";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "old_price", [], "any", false, false, false, 62), 0, ",", "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "currency", [], "any", false, false, false, 62), "html", null, true);
                echo "</small>
                            ";
            }
            // line 64
            echo "                            <span>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", [], "any", false, false, false, 64), 0, ",", "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "currency", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>
                            
                        </div>                        
                        <div class=\"addtocart\" data-offer=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 73,  179 => 67,  170 => 64,  162 => 62,  160 => 61,  153 => 57,  149 => 56,  142 => 52,  139 => 51,  133 => 47,  130 => 46,  124 => 42,  122 => 41,  117 => 39,  112 => 38,  109 => 37,  106 => 36,  102 => 35,  98 => 33,  94 => 31,  73 => 16,  70 => 15,  66 => 14,  62 => 12,  60 => 11,  56 => 9,  52 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set productlist = newProducts.make().sort(newProducts.getSorting()).active() %}
<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content\">
        <section class=\"carousel\">
            {% component 'slider' %}
        </section>
        <section class=\"promotional\">
            {% if false %}
            <h1 class=\"title\">Jelenlegi akciós termékeink</h1>
            <div class=\"productlist\">
                {% for i in 0..5 %}
                <div class=\"product\">
                    <div class=\"hero\" style=\"background-image: url({{ 'assets/images/product-test.jpg'|theme }})\">                
                    </div>
                    <div class=\"title\">
                        <h3>I7-8700K BOX</h3>
                    </div>
                    <div class=\"details\">
                        <span class=\"price\">
                            129.000 HUF
                        </span>
                        <div class=\"addtocart\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            {% endif %}
            <h1 class=\"title\">Legfrissebb termékeink</h1>
            <div class=\"productlist\">                
                {% for product in productlist|slice(0,3) %}
                {% set status = product.getObject().storagestatus %}
                {% set offer = product.offer.first() %}
                <div class=\"product\" data-id=\"{{ product.id }}\">
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
                        <div class=\"hero\" style=\"background-image: url({{ product.preview_image | resize(false, 252, { quality: '95', extension: 'png' }) }})\">                
                        </div>                    
                    </div>
                    <div class=\"title\">
                        <h3>{{ product.name }}</h3>
                        <!-- <p>{{ status.raktaron }}</p> -->
                    </div>
                    <div class=\"details\">
                        <div class=\"price\">
                            {% if offer.old_price and offer.old_price > offer.price %}
                            <small>{{ offer.old_price|number_format(0,',','.')}} {{ offer.currency }}</small>
                            {% endif %}
                            <span>{{ offer.price|number_format(0,',','.') }} {{ offer.currency }}</span>
                            
                        </div>                        
                        <div class=\"addtocart\" data-offer=\"{{ offer.id }}\" data-id=\"{{ product.id }}\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/home.htm", "");
    }
}
