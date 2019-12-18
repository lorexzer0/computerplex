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
        <section class=\"cartboxes\">
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
                        <div class=\"hero\" style=\"background-image:url(";
                // line 13
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "preview_image", [], "any", false, false, false, 13), false, 252, ["quality" => "95", "extension" => "png"]]);
                echo ")\"></div>
                        <div class=\"details\">
                            <h1>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
                echo "</h1>
                            <h3><i class=\"fas fa-box\"></i> Mennyiség: <strong>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 16), "html", null, true);
                echo " db</strong></h3>
                            <h3><i class=\"fas fa-money-bill-alt\"></i> Egységár: <strong>";
                // line 17
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", [], "any", false, false, false, 17), 0, ",", "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "currency", [], "any", false, false, false, 17), "html", null, true);
                echo "</strong></h3>
                            <h3><i class=\"fas fa-money-bill-wave\"></i> Összár: <strong>";
                // line 18
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 18), 0, ",", "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "currency", [], "any", false, false, false, 18), "html", null, true);
                echo "</strong></h3>                            
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                <div class=\"foot\">
                    <h3><i class=\"fas fa-shopping-cart\"></i> Kosárban lévő termékek száma: <strong> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalQuantity", [], "method", false, false, false, 23), "html", null, true);
            echo " db</strong></h3>
                    <h3><i class=\"fas fa-receipt\"></i> Összesen: <strong>";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalPrice", [], "any", false, false, false, 24), 0, ",", "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getCurrency", [], "method", false, false, false, 24), "html", null, true);
            echo "</strong></h3>
                </div>
            ";
        } else {
            // line 27
            echo "            <div class=\"emptycart\">
                <h1>Az ön kosara üres. Nézzen körül :)</h1>
            </div>
            ";
        }
        // line 31
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
        return array (  120 => 31,  114 => 27,  106 => 24,  102 => 23,  99 => 22,  87 => 18,  81 => 17,  77 => 16,  73 => 15,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  54 => 9,  52 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cart = Cart.get() %}
<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content product-content\">
        <section class=\"cartboxes\">
            {% if cart.isNotEmpty %}
                {% for item in cart %}
                    {% set offer = item.offer %}
                    {% set product = offer.product %}
                    <div class=\"cartbox\">
                        <div class=\"hero\" style=\"background-image:url({{ product.preview_image | resize(false, 252, { quality: '95', extension: 'png' }) }})\"></div>
                        <div class=\"details\">
                            <h1>{{ product.name }}</h1>
                            <h3><i class=\"fas fa-box\"></i> Mennyiség: <strong>{{ item.quantity }} db</strong></h3>
                            <h3><i class=\"fas fa-money-bill-alt\"></i> Egységár: <strong>{{ offer.price|number_format(0,',','.') }} {{ offer.currency }}</strong></h3>
                            <h3><i class=\"fas fa-money-bill-wave\"></i> Összár: <strong>{{ item.price|number_format(0,',','.') }} {{ item.currency }}</strong></h3>                            
                        </div>
                    </div>
                    {% endfor %}
                <div class=\"foot\">
                    <h3><i class=\"fas fa-shopping-cart\"></i> Kosárban lévő termékek száma: <strong> {{ cart.getTotalQuantity() }} db</strong></h3>
                    <h3><i class=\"fas fa-receipt\"></i> Összesen: <strong>{{ cart.getTotalPrice|number_format(0,',','.') }} {{ cart.getCurrency() }}</strong></h3>
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
