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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/partials/shop/cartfoot.htm */
class __TwigTemplate_e9a7f3f7bce697012dff30db58260511b141f7f67157ce7c0ec8f7a9e1d91a0c extends \Twig\Template
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
        echo "<div class=\"buttons\">
    <button class=\"btn btn-info w-15\" id=\"clearCart\">Kosár ürítése</button>
    <button class=\"btn btn-success w-15\" id=\"goToOrder\" onclick=\"window.location.href='";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("orderpage");
        echo "'\">Rendeléshez</button>
</div>
<h3><i class=\"fas fa-shopping-cart\"></i> Kosárban lévő termékek száma: <strong> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalQuantity", [], "method", false, false, false, 6), "html", null, true);
        echo " db</strong></h3>
<h3 id=\"ship_cost_label\"><i class=\"fas fa-truck\"></i> Szállítási költség: <strong><span id=\"ship_cost_nr\"></span> Ft</strong></h3>
<h3><i class=\"fas fa-receipt\"></i> Összesen: <strong>";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalPrice", [], "any", false, false, false, 8), 0, ",", "."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getCurrency", [], "method", false, false, false, 8), "html", null, true);
        echo "</strong> + Szállítási költség</h3>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/shop/cartfoot.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cart = Cart.get() %}
<div class=\"buttons\">
    <button class=\"btn btn-info w-15\" id=\"clearCart\">Kosár ürítése</button>
    <button class=\"btn btn-success w-15\" id=\"goToOrder\" onclick=\"window.location.href='{{ 'orderpage'|page }}'\">Rendeléshez</button>
</div>
<h3><i class=\"fas fa-shopping-cart\"></i> Kosárban lévő termékek száma: <strong> {{ cart.getTotalQuantity() }} db</strong></h3>
<h3 id=\"ship_cost_label\"><i class=\"fas fa-truck\"></i> Szállítási költség: <strong><span id=\"ship_cost_nr\"></span> Ft</strong></h3>
<h3><i class=\"fas fa-receipt\"></i> Összesen: <strong>{{ cart.getTotalPrice|number_format(0,',','.') }} {{ cart.getCurrency() }}</strong> + Szállítási költség</h3>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/shop/cartfoot.htm", "");
    }
}
