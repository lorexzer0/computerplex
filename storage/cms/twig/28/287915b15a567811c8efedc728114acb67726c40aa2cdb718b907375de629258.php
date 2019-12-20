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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/cartview.htm */
class __TwigTemplate_cc89f4d2f5e1ea283f0c99d14dad625dc88b3638e13b0b23f23599a2fcf2212d extends \Twig\Template
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
        $context["cart"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, false, 1);
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
        <section class=\"cartboxes\" id=\"shopping_cart\">
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "isNotEmpty", [], "any", false, false, false, 8)) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "                    ";
                $context["offer"] = twig_get_attribute($this->env, $this->source, $context["item"], "offer", [], "any", false, false, false, 10);
                // line 11
                echo "                    ";
                $context["product"] = twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "product", [], "any", false, false, false, 11);
                // line 12
                echo "                    <div class=\"cartbox\">
                        <div class=\"buttons\">
                            <button class=\"closebtn\" onclick=\"removeOffer(";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
                echo ",this)\"><i class=\"fas fa-times\"></i></button>
                        </div>
                        <div class=\"hero\" style=\"background-image:url(";
                // line 16
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "preview_image", [], "any", false, false, false, 16), false, 252, ["quality" => "95", "extension" => "png"]]);
                echo ")\"></div>
                        <div class=\"details\">
                            <h1>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</h1>
                            <h3><i class=\"fas fa-box\"></i> Mennyiség: <strong>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 19), "html", null, true);
                echo " db</strong></h3>
                            <h3><i class=\"fas fa-money-bill-alt\"></i> Egységár: <strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", [], "any", false, false, false, 20), 0, ",", "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "currency", [], "any", false, false, false, 20), "html", null, true);
                echo "</strong></h3>
                            <h3><i class=\"fas fa-money-bill-wave\"></i> Összár: <strong>";
                // line 21
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 21), 0, ",", "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "currency", [], "any", false, false, false, 21), "html", null, true);
                echo "</strong></h3>                            
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                <div class=\"foot\" id=\"cartfootwrap\">
                    ";
            // line 26
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("shop/cartfoot"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "                    
                </div>
            ";
        } else {
            // line 29
            echo "            <div class=\"emptycart\">
                <h1>Az ön kosara üres. Nézzen körül :)</h1>
            </div>
            ";
        }
        // line 33
        echo "        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/cartview.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  116 => 29,  108 => 26,  105 => 25,  93 => 21,  87 => 20,  83 => 19,  79 => 18,  74 => 16,  69 => 14,  65 => 12,  62 => 11,  59 => 10,  54 => 9,  52 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cart = Cart.get() %}
<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content product-content\">
        <section class=\"cartboxes\" id=\"shopping_cart\">
            {% if cart.isNotEmpty %}
                {% for item in cart %}
                    {% set offer = item.offer %}
                    {% set product = offer.product %}
                    <div class=\"cartbox\">
                        <div class=\"buttons\">
                            <button class=\"closebtn\" onclick=\"removeOffer({{ offer.id }},this)\"><i class=\"fas fa-times\"></i></button>
                        </div>
                        <div class=\"hero\" style=\"background-image:url({{ product.preview_image | resize(false, 252, { quality: '95', extension: 'png' }) }})\"></div>
                        <div class=\"details\">
                            <h1>{{ product.name }}</h1>
                            <h3><i class=\"fas fa-box\"></i> Mennyiség: <strong>{{ item.quantity }} db</strong></h3>
                            <h3><i class=\"fas fa-money-bill-alt\"></i> Egységár: <strong>{{ offer.price|number_format(0,',','.') }} {{ offer.currency }}</strong></h3>
                            <h3><i class=\"fas fa-money-bill-wave\"></i> Összár: <strong>{{ item.price|number_format(0,',','.') }} {{ item.currency }}</strong></h3>                            
                        </div>
                    </div>
                    {% endfor %}
                <div class=\"foot\" id=\"cartfootwrap\">
                    {% partial 'shop/cartfoot' %}                    
                </div>
            {% else %}
            <div class=\"emptycart\">
                <h1>Az ön kosara üres. Nézzen körül :)</h1>
            </div>
            {% endif %}
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/cartview.htm", "");
    }
}
