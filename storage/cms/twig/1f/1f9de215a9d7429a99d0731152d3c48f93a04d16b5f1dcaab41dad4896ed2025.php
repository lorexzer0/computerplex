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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/orderpage.htm */
class __TwigTemplate_516d206f9ac28f7205cb19d25cf399eb8e2faffb1065c8c2ffb7b6d8df2e62a3 extends \Twig\Template
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
        echo "
<div class=\"multibox\">
    <div class=\"sidepanel\">
        ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("box/categorylist"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
    </div>
    <div class=\"content product-content\">
        <section class=\"orderpage\">
            <div class=\"multiblock\">
                <div class=\"form\">
                    <form id=\"orderForm\">
                        <h2>Megrendelő</h2>

                        <div class=\"form-group\">
                            <label for=\"fullname\">Átvevő teljes neve:</label>
                            <input type=\"text\" name=\"fullname\" class=\"form-control\" placeholder=\"Teljes név\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "\" disabled required>
                        </div>
                        <div class=\"form-group\">                            
                            <label for=\"email\">E-mail cím:</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"E-mail cím\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "\" disabled required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Telefonszám:</label>
                            <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Telefonszám\" required>
                        </div>
                        <hr>
                        <h2>Szállítási cím</h2>
                        <div class=\"form-group\">
                            <label for=\"phone\">Megye:</label>
                            <input type=\"text\" name=\"state\" class=\"form-control\" placeholder=\"Megye\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Város:</label>
                            <input type=\"text\" name=\"city\" class=\"form-control\" placeholder=\"Város\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Irányítószám:</label>
                            <input type=\"number\" name=\"postcode\" class=\"form-control\" placeholder=\"Irányítószám\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Utca:</label>
                            <input type=\"text\" name=\"street\" class=\"form-control\" placeholder=\"Utca\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Házszám / Lakás szám:</label>
                            <input type=\"text\" name=\"housenumber\" class=\"form-control\" placeholder=\"Házszám / Lakás szám\" required>
                        </div>
                        ";
        // line 57
        echo "                        <hr>
                        <h2>Fizetési mód</h2>
                        ";
        // line 59
        $context["payments"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PaymentMethodList"] ?? null), "make", [], "method", false, false, false, 59), "sort", [], "method", false, false, false, 59), "active", [], "method", false, false, false, 59);
        // line 60
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "isNotEmpty", [], "method", false, false, false, 60)) {
            // line 61
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payments"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 62
                echo "                            <div class=\"payment-method-list-wrapper\">
                                <input type=\"radio\" name=\"payment\" value=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 63)) {
                    echo "checked";
                }
                echo ">
                                <label for=\"payment\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "</label>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                        ";
        }
        // line 68
        echo "                        <hr>
                        <h2>Szállítási mód</h2>
                        ";
        // line 70
        $context["shippings"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, false, 70), "sort", [], "method", false, false, false, 70), "active", [], "method", false, false, false, 70);
        // line 71
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["shippings"] ?? null), "isNotEmpty", [], "method", false, false, false, 71)) {
            // line 72
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shippings"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 72) == 2)) {
                    // line 73
                    echo "                            <div class=\"payment-method-list-wrapper\">
                                <input type=\"radio\" name=\"shipping\" value=\"";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 74), "html", null, true);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) {
                        echo "checked";
                    }
                    echo ">
                                <label for=\"shipping\">";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name", [], "any", false, false, false, 75), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                        <hr>
                        <button type=\"submit\" class=\"btn btn-success btn-block\">Rendelés leadása</button>
                    </form>
                </div>
                <div class=\"data\">
                    <div class=\"head\">
                        <h2>Összesítés:</h2>
                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "                            ";
            $context["offer"] = twig_get_attribute($this->env, $this->source, $context["item"], "offer", [], "any", false, false, false, 87);
            // line 88
            echo "                            ";
            $context["product"] = twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "product", [], "any", false, false, false, 88);
            // line 89
            echo "                            <div class=\"summarybox\">
                                <img src=\"";
            // line 90
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "preview_image", [], "any", false, false, false, 90), 75, false, ["quality" => "70", "mode" => "crop", "extension" => "png"]]);
            echo "\" alt=\"\">
                                <h2>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 91), "html", null, true);
            echo " <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 91), "html", null, true);
            echo "</span></h2>
                                <h3 class=\"price\">Összesen(bruttó): <strong>";
            // line 92
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price_with_tax", [], "any", false, false, false, 92), 0), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "currency", [], "any", false, false, false, 92), "html", null, true);
            echo "</strong></h3>                                
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    </div>
                    <div class=\"foot\">                        
                        <h3><i class=\"fas fa-shopping-cart\"></i> Kosárban lévő termékek száma: <strong> ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalQuantity", [], "method", false, false, false, 97), "html", null, true);
        echo " db</strong></h3>
                        <h3><i class=\"fas fa-truck\"></i> Szállítási költség: <strong><span id=\"ship_cost_nr\">1700</span> Ft</strong></h3>
                        <h3><i class=\"fas fa-receipt\"></i> Összesen(nettó): <strong>";
        // line 99
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalPrice", [], "any", false, false, false, 99), 0, ",", "."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getCurrency", [], "method", false, false, false, 99), "html", null, true);
        echo "</strong> + Szállítási költség</h3>
                        <h3><i class=\"fas fa-receipt\"></i> Összesen(bruttó): <strong>";
        // line 100
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalPrice", [], "any", false, false, false, 100) + (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalPrice", [], "any", false, false, false, 100) * 0.27)), 0, ",", "."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getCurrency", [], "method", false, false, false, 100), "html", null, true);
        echo "</strong> + Szállítási költség</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/orderpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 100,  256 => 99,  251 => 97,  247 => 95,  236 => 92,  230 => 91,  226 => 90,  223 => 89,  220 => 88,  217 => 87,  213 => 86,  204 => 79,  201 => 78,  188 => 75,  180 => 74,  177 => 73,  165 => 72,  162 => 71,  160 => 70,  156 => 68,  153 => 67,  136 => 64,  128 => 63,  125 => 62,  107 => 61,  104 => 60,  102 => 59,  98 => 57,  67 => 20,  60 => 16,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cart = Cart.get() %}

<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content product-content\">
        <section class=\"orderpage\">
            <div class=\"multiblock\">
                <div class=\"form\">
                    <form id=\"orderForm\">
                        <h2>Megrendelő</h2>

                        <div class=\"form-group\">
                            <label for=\"fullname\">Átvevő teljes neve:</label>
                            <input type=\"text\" name=\"fullname\" class=\"form-control\" placeholder=\"Teljes név\" value=\"{{ user.name }}\" disabled required>
                        </div>
                        <div class=\"form-group\">                            
                            <label for=\"email\">E-mail cím:</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"E-mail cím\" value=\"{{user.email}}\" disabled required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Telefonszám:</label>
                            <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Telefonszám\" required>
                        </div>
                        <hr>
                        <h2>Szállítási cím</h2>
                        <div class=\"form-group\">
                            <label for=\"phone\">Megye:</label>
                            <input type=\"text\" name=\"state\" class=\"form-control\" placeholder=\"Megye\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Város:</label>
                            <input type=\"text\" name=\"city\" class=\"form-control\" placeholder=\"Város\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Irányítószám:</label>
                            <input type=\"number\" name=\"postcode\" class=\"form-control\" placeholder=\"Irányítószám\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Utca:</label>
                            <input type=\"text\" name=\"street\" class=\"form-control\" placeholder=\"Utca\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Házszám / Lakás szám:</label>
                            <input type=\"text\" name=\"housenumber\" class=\"form-control\" placeholder=\"Házszám / Lakás szám\" required>
                        </div>
                        {# <!-- ADDRESS1 / ADDRESS 2 OPTIONS  -->
                        <div class=\"form-group\">
                            <label for=\"phone\">Cím 1:</label>
                            <input type=\"text\" name=\"address1\" class=\"form-control\" placeholder=\"Cím 1\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"phone\">Cím 2:</label>
                            <input type=\"text\" name=\"address2\" class=\"form-control\" placeholder=\"Cím 2\">
                        </div> #}
                        <hr>
                        <h2>Fizetési mód</h2>
                        {% set payments = PaymentMethodList.make().sort().active() %}
                        {% if payments.isNotEmpty() %}
                        {% for payment in payments %}
                            <div class=\"payment-method-list-wrapper\">
                                <input type=\"radio\" name=\"payment\" value=\"{{ payment.id }}\" {% if loop.first %}checked{% endif %}>
                                <label for=\"payment\">{{ payment.name }}</label>
                            </div>
                        {% endfor %}
                        {% endif %}
                        <hr>
                        <h2>Szállítási mód</h2>
                        {% set shippings = ShippingTypeList.make().sort().active() %}
                        {% if shippings.isNotEmpty() %}
                        {% for shipping in shippings if shipping.id == 2 %}
                            <div class=\"payment-method-list-wrapper\">
                                <input type=\"radio\" name=\"shipping\" value=\"{{ shipping.id }}\" {% if loop.first %}checked{% endif %}>
                                <label for=\"shipping\">{{ shipping.name }}</label>
                            </div>
                        {% endfor %}
                        {% endif %}
                        <hr>
                        <button type=\"submit\" class=\"btn btn-success btn-block\">Rendelés leadása</button>
                    </form>
                </div>
                <div class=\"data\">
                    <div class=\"head\">
                        <h2>Összesítés:</h2>
                        {% for item in cart %}
                            {% set offer = item.offer %}
                            {% set product = offer.product %}
                            <div class=\"summarybox\">
                                <img src=\"{{ product.preview_image | resize(75, false, { quality: '70', mode: 'crop', extension: 'png' }) }}\" alt=\"\">
                                <h2>{{ product.name }} <span>{{ item.quantity }}</span></h2>
                                <h3 class=\"price\">Összesen(bruttó): <strong>{{ item.price_with_tax | number_format(0) }} {{ item.currency }}</strong></h3>                                
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"foot\">                        
                        <h3><i class=\"fas fa-shopping-cart\"></i> Kosárban lévő termékek száma: <strong> {{ cart.getTotalQuantity() }} db</strong></h3>
                        <h3><i class=\"fas fa-truck\"></i> Szállítási költség: <strong><span id=\"ship_cost_nr\">1700</span> Ft</strong></h3>
                        <h3><i class=\"fas fa-receipt\"></i> Összesen(nettó): <strong>{{ cart.getTotalPrice|number_format(0,',','.') }} {{ cart.getCurrency() }}</strong> + Szállítási költség</h3>
                        <h3><i class=\"fas fa-receipt\"></i> Összesen(bruttó): <strong>{{ (cart.getTotalPrice + cart.getTotalPrice*0.27)|number_format(0,',','.') }} {{ cart.getCurrency() }}</strong> + Szállítási költség</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/orderpage.htm", "");
    }
}
