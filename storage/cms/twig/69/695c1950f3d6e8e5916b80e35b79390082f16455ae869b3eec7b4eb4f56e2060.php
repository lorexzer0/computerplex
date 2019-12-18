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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/partials/shop/header-cart.htm */
class __TwigTemplate_69bb9cf0add2fddad1c639890797562eea10ea57dfa0703b72a7d5dd1ad22fef extends \Twig\Template
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
        echo "<div class=\"inner\">
    <i class=\"fas fa-shopping-cart\"></i>
    <small>(";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getTotalQuantity", [], "method", false, false, false, 4), "html", null, true);
        echo ")</small>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/shop/header-cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cart = Cart.get() %}
<div class=\"inner\">
    <i class=\"fas fa-shopping-cart\"></i>
    <small>({{ cart.getTotalQuantity() }})</small>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/shop/header-cart.htm", "");
    }
}
