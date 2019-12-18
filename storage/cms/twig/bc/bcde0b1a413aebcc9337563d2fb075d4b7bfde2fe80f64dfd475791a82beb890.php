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
        <section class=\"productmain\" data-id=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <div class=\"images\">
                <div class=\"hero ";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 10)) == 0)) {
            echo "full-hero";
        }
        echo "\" style=\"background-image: url(";
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "preview_image", [], "any", false, false, false, 10), false, false, ["quality" => "100", "extension" => "png"]]);
        echo ");\"></div>
                ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 11) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 11)) > 0))) {
            // line 12
            echo "                <div class=\"gallery\">
                    <div class=\"galleryobject\">
                        <img src=\"";
            // line 14
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "preview_image", [], "any", false, false, false, 14), false, false, ["quality" => "100", "extension" => "png"]]);
            echo "\" alt=\"\">
                    </div>
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 16), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 17
                echo "                    <div class=\"galleryobject\">
                        <img src=\"";
                // line 18
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$context["image"], false, false, ["quality" => "100", "extension" => "png"]]);
                echo "\" alt=\"\">
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </div>
                ";
        }
        // line 23
        echo "            </div>
            <div class=\"buyzone\">
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountLower\"><i class=\"fas fa-minus\"></i></button>
                    </div>
                    <div>
                        <input type=\"number\" name=\"amount\" id=\"itemAmount\" class=\"form-control\" value=\"1\" min=\"1\" maxlength=\"2\">
                    </div>
                    <div class=\"input-group-append\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountRaise\"><i class=\"fas fa-plus\"></i></button>                        
                        <button type=\"button\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-shopping-cart\"></i></button>
                    </div>
                </div>
            </div>
            <div class=\"details\">
                <h1 class=\"title\">Leírás</h1>
                <div class=\"description\">
                    ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 41);
        echo "
                </div>
                ";
        // line 43
        $context["propertyList"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "property", [], "any", false, false, false, 43);
        // line 44
        echo "                <!-- START OF ACTIVE PROPS COUNTER -->
                ";
        // line 45
        $context["activeProps"] = 0;
        // line 46
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["propertyList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            if (twig_get_attribute($this->env, $this->source, $context["property"], "hasValue", [], "method", false, false, false, 46)) {
                // line 47
                echo "                ";
                $context["activeProps"] = (($context["activeProps"] ?? null) + 1);
                // line 48
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                <!-- END OF ACTIVE PROPS -->
                ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["propertyList"] ?? null), "isNotEmpty", [], "any", false, false, false, 50) && (($context["activeProps"] ?? null) > 0))) {
            // line 51
            echo "                <h1 class=\"title\">Specifikációk</h1>
                <div class=\"properties\">
                    <table>                        
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["propertyList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                if (twig_get_attribute($this->env, $this->source, $context["property"], "hasValue", [], "method", false, false, false, 54)) {
                    echo "                        
                        <tr>
                            <td>
                                ";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 57), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "property_value", [], "any", false, false, false, 60), "getValueString", [], "method", false, false, false, 60), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "measure", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
                    echo "
                            </td>
                        </tr>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    </table>
                </div>
                ";
        }
        // line 66
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
        return array (  190 => 66,  185 => 64,  172 => 60,  166 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  140 => 48,  137 => 47,  131 => 46,  129 => 45,  126 => 44,  124 => 43,  119 => 41,  99 => 23,  95 => 21,  86 => 18,  83 => 17,  79 => 16,  74 => 14,  70 => 12,  68 => 11,  60 => 10,  55 => 8,  51 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set product = ProductPage.get() %}
<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content product-content\">
        <section class=\"productmain\" data-id=\"{{ product.id }}\">
            <h1>{{ product.name }}</h1>
            <div class=\"images\">
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
            <div class=\"buyzone\">
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountLower\"><i class=\"fas fa-minus\"></i></button>
                    </div>
                    <div>
                        <input type=\"number\" name=\"amount\" id=\"itemAmount\" class=\"form-control\" value=\"1\" min=\"1\" maxlength=\"2\">
                    </div>
                    <div class=\"input-group-append\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"amountRaise\"><i class=\"fas fa-plus\"></i></button>                        
                        <button type=\"button\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-shopping-cart\"></i></button>
                    </div>
                </div>
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
