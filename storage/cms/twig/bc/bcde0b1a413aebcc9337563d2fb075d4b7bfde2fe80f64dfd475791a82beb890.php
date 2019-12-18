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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/productpage.htm */
class __TwigTemplate_56ced75bb4ea32be4e2cce90e2abfcd914231d6e43f31e397435e76320ee2ecd extends \Twig\Template
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
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["ProductPage"] ?? null), "get", [], "method", false, false, false, 1);
        // line 2
        $context["offer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "offer", [], "any", false, false, false, 2), "first", [], "method", false, false, false, 2);
        // line 3
        $context["status"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getObject", [], "method", false, false, false, 3), "storagestatus", [], "any", false, false, false, 3);
        // line 4
        $context["cart"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, false, 4);
        // line 5
        echo "<div class=\"multibox\">
    <div class=\"sidepanel\">
        ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("box/categorylist"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
    </div>
    <div class=\"content product-content\">
        <section class=\"productmain\" data-id=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
            <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
            <hr class=\"dividerhr\">
            <div class=\"images\">
                <div class=\"badges\">
                    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "raktaron", [], "any", false, false, false, 15)) {
            // line 16
            echo "                    <span>
                        <i class=\"fas fa-pallet\"></i> Rendelhető
                    </span>
                    ";
        }
        // line 20
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "szemelyesen", [], "any", false, false, false, 20)) {
            // line 21
            echo "                    <span class=\"special\">
                        <i class=\"fas fa-box-open\"></i> Személyesen átvehető
                    </span>
                    ";
        }
        // line 25
        echo "                    <span>
                        <i class=\"fas fa-pallet\"></i> Raktáron <strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "quantity", [], "any", false, false, false, 26), "html", null, true);
        echo " db</strong>
                    </span>
                </div>
                <div class=\"hero ";
        // line 29
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 29)) == 0)) {
            echo "full-hero";
        }
        echo "\" style=\"background-image: url(";
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "preview_image", [], "any", false, false, false, 29), false, false, ["quality" => "100", "extension" => "png"]]);
        echo ");\"></div>
                ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 30) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 30)) > 0))) {
            // line 31
            echo "                <div class=\"gallery\">
                    <div class=\"galleryobject\">
                        <img src=\"";
            // line 33
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "preview_image", [], "any", false, false, false, 33), false, false, ["quality" => "100", "extension" => "png"]]);
            echo "\" alt=\"\">
                    </div>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 35), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 36
                echo "                    <div class=\"galleryobject\">
                        <img src=\"";
                // line 37
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$context["image"], false, false, ["quality" => "100", "extension" => "png"]]);
                echo "\" alt=\"\">
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </div>
                ";
        }
        // line 42
        echo "            </div>
            ";
        // line 48
        echo "            <div class=\"buyzone\">
                <p class=\"price\">
                    Termék ára: <strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", [], "any", false, false, false, 50), 0, ",", "."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "currency", [], "any", false, false, false, 50), "html", null, true);
        echo " </strong>
                    ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "discount_price", [], "any", false, false, false, 51) > 0)) {
            // line 52
            echo "                    | <small> Eredeti ár: ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "old_price", [], "any", false, false, false, 52), 0, ",", "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "currency", [], "any", false, false, false, 52), "html", null, true);
            echo " <strong>(-";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "discount_price", [], "any", false, false, false, 52) / twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "old_price", [], "any", false, false, false, 52)) * 100), 0, ".", ","), "html", null, true);
            echo " %)</strong></small>
                    ";
        }
        // line 54
        echo "                </p>
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountLower\"><i class=\"fas fa-minus\"></i></button>
                    </div>
                    <div>
                        <input type=\"number\" name=\"amount\" id=\"itemAmount\" class=\"form-control\" value=\"1\" min=\"1\" maxlength=\"2\">
                    </div>
                    <div class=\"input-group-append\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountRaise\"><i class=\"fas fa-plus\"></i></button>
                        ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "hasOffer", [0 => twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", [], "any", false, false, false, 64)], "method", false, false, false, 64)) {
            // line 65
            echo "                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountCart\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" data-maxq=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "quantity", [], "any", false, false, false, 65), "html", null, true);
            echo "\" data-operation=\"update\"><i class=\"fas fa-shopping-cart\"></i></button>
                        ";
        } else {
            // line 67
            echo "                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountCart\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" data-maxq=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "quantity", [], "any", false, false, false, 67), "html", null, true);
            echo "\" data-operation=\"add\"><i class=\"fas fa-shopping-cart\"></i></button>
                        ";
        }
        // line 69
        echo "                    </div>
                </div>
                <p class=\"price\">
                    Szállítás 1-3 munkanapon belül
                </p>
            </div>
            <div class=\"details\">
                <h1 class=\"title\">Leírás</h1>
                <div class=\"description\">
                    ";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 78);
        echo "
                </div>
                ";
        // line 80
        $context["propertyList"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "property", [], "any", false, false, false, 80);
        // line 81
        echo "                <!-- START OF ACTIVE PROPS COUNTER -->
                ";
        // line 82
        $context["activeProps"] = 0;
        // line 83
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["propertyList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            if (twig_get_attribute($this->env, $this->source, $context["property"], "hasValue", [], "method", false, false, false, 83)) {
                // line 84
                echo "                ";
                $context["activeProps"] = (($context["activeProps"] ?? null) + 1);
                // line 85
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                <!-- END OF ACTIVE PROPS -->
                ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["propertyList"] ?? null), "isNotEmpty", [], "any", false, false, false, 87) && (($context["activeProps"] ?? null) > 0))) {
            // line 88
            echo "                <h1 class=\"title\">Specifikációk</h1>
                <div class=\"properties\">
                    <table>                        
                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["propertyList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                if (twig_get_attribute($this->env, $this->source, $context["property"], "hasValue", [], "method", false, false, false, 91)) {
                    echo "                        
                        <tr>
                            <td>
                                ";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 94), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 97
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "property_value", [], "any", false, false, false, 97), "getValueString", [], "method", false, false, false, 97), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "measure", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
                    echo "
                            </td>
                        </tr>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                    </table>
                </div>
                ";
        }
        // line 103
        echo "                
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/productpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 103,  265 => 101,  252 => 97,  246 => 94,  237 => 91,  232 => 88,  230 => 87,  227 => 86,  220 => 85,  217 => 84,  211 => 83,  209 => 82,  206 => 81,  204 => 80,  199 => 78,  188 => 69,  180 => 67,  172 => 65,  170 => 64,  158 => 54,  148 => 52,  146 => 51,  140 => 50,  136 => 48,  133 => 42,  129 => 40,  120 => 37,  117 => 36,  113 => 35,  108 => 33,  104 => 31,  102 => 30,  94 => 29,  88 => 26,  85 => 25,  79 => 21,  76 => 20,  70 => 16,  68 => 15,  61 => 11,  57 => 10,  49 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set product = ProductPage.get() %}
{% set offer = product.offer.first() %}
{% set status = product.getObject().storagestatus %}
{% set cart = Cart.get() %}
<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content product-content\">
        <section class=\"productmain\" data-id=\"{{ product.id }}\">
            <h1>{{ product.name }}</h1>
            <hr class=\"dividerhr\">
            <div class=\"images\">
                <div class=\"badges\">
                    {% if status.raktaron %}
                    <span>
                        <i class=\"fas fa-pallet\"></i> Rendelhető
                    </span>
                    {% endif %}
                    {% if status.szemelyesen %}
                    <span class=\"special\">
                        <i class=\"fas fa-box-open\"></i> Személyesen átvehető
                    </span>
                    {% endif %}
                    <span>
                        <i class=\"fas fa-pallet\"></i> Raktáron <strong>{{ offer.quantity }} db</strong>
                    </span>
                </div>
                <div class=\"hero {% if product.images|length == 0 %}full-hero{% endif %}\" style=\"background-image: url({{ product.preview_image | resize(false, false, { quality: '100', extension: 'png' }) }});\"></div>
                {% if product.images and product.images|length > 0 %}
                <div class=\"gallery\">
                    <div class=\"galleryobject\">
                        <img src=\"{{ product.preview_image | resize(false, false, { quality: '100', extension: 'png' }) }}\" alt=\"\">
                    </div>
                    {% for image in product.images|slice(0,3) %}
                    <div class=\"galleryobject\">
                        <img src=\"{{ image | resize(false, false, { quality: '100', extension: 'png' }) }}\" alt=\"\">
                    </div>
                    {% endfor %}
                </div>
                {% endif %}
            </div>
            {# GETTING CURRENT ITEMS
            {% for position in cart %}
            {% set testoffer = position.offer %}
            <p>{{ testoffer.product.name }} - {{ position.quantity }} db</p>
            {% endfor %} #}
            <div class=\"buyzone\">
                <p class=\"price\">
                    Termék ára: <strong> {{ offer.price|number_format(0,',','.') }} {{ offer.currency }} </strong>
                    {% if offer.discount_price > 0 %}
                    | <small> Eredeti ár: {{ offer.old_price|number_format(0,',','.') }} {{ offer.currency }} <strong>(-{{ ((offer.discount_price / offer.old_price)*100)|number_format(0,'.',',') }} %)</strong></small>
                    {% endif %}
                </p>
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountLower\"><i class=\"fas fa-minus\"></i></button>
                    </div>
                    <div>
                        <input type=\"number\" name=\"amount\" id=\"itemAmount\" class=\"form-control\" value=\"1\" min=\"1\" maxlength=\"2\">
                    </div>
                    <div class=\"input-group-append\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountRaise\"><i class=\"fas fa-plus\"></i></button>
                        {% if cart.hasOffer(offer.id) %}
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountCart\" data-id=\"{{ offer.id }}\" data-maxq=\"{{ offer.quantity }}\" data-operation=\"update\"><i class=\"fas fa-shopping-cart\"></i></button>
                        {% else %}
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountCart\" data-id=\"{{ offer.id }}\" data-maxq=\"{{ offer.quantity }}\" data-operation=\"add\"><i class=\"fas fa-shopping-cart\"></i></button>
                        {% endif %}
                    </div>
                </div>
                <p class=\"price\">
                    Szállítás 1-3 munkanapon belül
                </p>
            </div>
            <div class=\"details\">
                <h1 class=\"title\">Leírás</h1>
                <div class=\"description\">
                    {{ product.description|raw }}
                </div>
                {% set propertyList = product.property %}
                <!-- START OF ACTIVE PROPS COUNTER -->
                {% set activeProps = 0 %}
                {% for property in propertyList if property.hasValue() %}
                {% set activeProps = activeProps + 1 %}
                {% endfor %}
                <!-- END OF ACTIVE PROPS -->
                {% if propertyList.isNotEmpty and activeProps > 0 %}
                <h1 class=\"title\">Specifikációk</h1>
                <div class=\"properties\">
                    <table>                        
                        {% for property in propertyList if property.hasValue() %}                        
                        <tr>
                            <td>
                                {{ property.name }}
                            </td>
                            <td>
                                {{ property.property_value.getValueString() }} {{ property.measure.name }}
                            </td>
                        </tr>
                        {% endfor %}
                    </table>
                </div>
                {% endif %}                
            </div>
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/productpage.htm", "");
    }
}
