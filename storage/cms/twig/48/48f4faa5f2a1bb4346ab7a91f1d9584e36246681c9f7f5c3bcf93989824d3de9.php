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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/partials/site/header.htm */
class __TwigTemplate_fa94d2ba71495e5924602e4fcbec240a17f4b6fd1fc2d83c8eaf17266f8d4a1c extends \Twig\Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchCategories"] ?? null), "make", [], "method", false, false, false, 1), "tree", [], "method", false, false, false, 1);
        // line 2
        echo "<div class=\"wrapper bg-main px-lg-5\">
  <div class=\"col-sm-12 topbar\">
    <div class=\"left\">
      <span>
        <i class=\"fas fa-phone\"></i>
        (00)000 111 222
      </span>
      <span>
        <i class=\"fas fa-envelope\">
        </i>
        info@computerplex.hu
      </span>
    </div>
    <div class=\"right\">
      <div class=\"header-login\">
        ";
        // line 17
        if (($context["user"] ?? null)) {
            // line 18
            echo "        <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">
          Felhasználóm
        </a>
        <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><i class=\"fas fa-sign-out-alt\"></i> Kijelentkezés</a>
        ";
        } else {
            // line 23
            echo "        <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">
          Bejelentkezés / Regisztráció
        </a>
        ";
        }
        // line 27
        echo "      </div>
      <div class=\"currency\">
        <strong>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getCurrencyCode", [], "method", false, false, false, 29), "html", null, true);
        echo "</strong>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-dark searchmenu\">
      <form class=\"form-inline col-sm-12 justify-content-center\">
      <div class=\"logo-wrap\">
          <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\">
      </div>  
      <select class=\"custom-select d-inline\" id=\"categorySearchSelect\">
        <option selected>Minden Kategória</option>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </select>
      <input
        class=\"form-control searchbar\"
        type=\"search\"
        placeholder=\"Keresés\"
        aria-label=\"Keresés\"
      />
      <button type=\"submit\" class=\"btn searchbtn\">
        <i class=\"fas fa-search\"></i>
      </button>
      <div class=\"cart-wrap\" id=\"cartwrap\" onclick=\"window.location.href='";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cartview");
        echo "'\">
          ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("shop/header-cart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "      </div>
    </form>
  </nav>
  <nav class=\"navbar navbar-expand-lg\">
    <button
      class=\"navbar-toggler\"
      type=\"button\"
      data-toggle=\"collapse\"
      data-target=\"#navbarNav\"
      aria-controls=\"navbarNav\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\"
    >
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
            <i class=\"fas fa-home\"></i>  
            Főoldal</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categorylist");
        echo "\">
            <i class=\"fas fa-list-ul\"></i>  
            Kategóriák</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\"><i class=\"fas fa-clipboard-list\"></i> Szolgáltatásaink</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("basicmenu", ["slug" => "aszf"]);
        echo "\"><i class=\"fas fa-file-signature\"></i> ÁSZF</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("basicmenu", ["slug" => "garancia"]);
        echo "\"><i class=\"fas fa-shield-alt\"></i> Garancia</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("basicmenu", ["slug" => "szallitas"]);
        echo "\"><i class=\"fas fa-shipping-fast\"></i> Szállítás</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("basicmenu", ["slug" => "adatvedelem"]);
        echo "\"><i class=\"fas fa-user-shield\"></i> Adatvédelem</a>
        </li>        
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("basicmenu", ["slug" => "nyitvatartas"]);
        echo "\"><i class=\"fas fa-calendar-alt\"></i> Nyitva tartás</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\"><i class=\"far fa-address-card\"></i> Kapcsolat</a>
        </li>
      </ul>
    </div>
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 101,  197 => 98,  191 => 95,  185 => 92,  179 => 89,  173 => 86,  167 => 83,  159 => 78,  151 => 73,  131 => 55,  127 => 54,  123 => 53,  111 => 43,  100 => 41,  96 => 40,  89 => 36,  79 => 29,  75 => 27,  67 => 23,  58 => 18,  56 => 17,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = searchCategories.make().tree() %}
<div class=\"wrapper bg-main px-lg-5\">
  <div class=\"col-sm-12 topbar\">
    <div class=\"left\">
      <span>
        <i class=\"fas fa-phone\"></i>
        (00)000 111 222
      </span>
      <span>
        <i class=\"fas fa-envelope\">
        </i>
        info@computerplex.hu
      </span>
    </div>
    <div class=\"right\">
      <div class=\"header-login\">
        {% if user %}
        <a href=\"{{ 'login'|page }}\">
          Felhasználóm
        </a>
        <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><i class=\"fas fa-sign-out-alt\"></i> Kijelentkezés</a>
        {% else %}
        <a href=\"{{ 'login'|page }}\">
          Bejelentkezés / Regisztráció
        </a>
        {% endif %}
      </div>
      <div class=\"currency\">
        <strong>{{ Cart.getCurrencyCode() }}</strong>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-dark searchmenu\">
      <form class=\"form-inline col-sm-12 justify-content-center\">
      <div class=\"logo-wrap\">
          <img src=\"{{'assets/images/logo.png'|theme}}\" alt=\"\">
      </div>  
      <select class=\"custom-select d-inline\" id=\"categorySearchSelect\">
        <option selected>Minden Kategória</option>
        {% for category in categories %}
        <option value=\"{{category.id}}\">{{ category.name }}</option>
        {% endfor %}
      </select>
      <input
        class=\"form-control searchbar\"
        type=\"search\"
        placeholder=\"Keresés\"
        aria-label=\"Keresés\"
      />
      <button type=\"submit\" class=\"btn searchbtn\">
        <i class=\"fas fa-search\"></i>
      </button>
      <div class=\"cart-wrap\" id=\"cartwrap\" onclick=\"window.location.href='{{ 'cartview'|page }}'\">
          {% partial 'shop/header-cart' %}
      </div>
    </form>
  </nav>
  <nav class=\"navbar navbar-expand-lg\">
    <button
      class=\"navbar-toggler\"
      type=\"button\"
      data-toggle=\"collapse\"
      data-target=\"#navbarNav\"
      aria-controls=\"navbarNav\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\"
    >
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'home'|page }}\">
            <i class=\"fas fa-home\"></i>  
            Főoldal</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'categorylist'|page }}\">
            <i class=\"fas fa-list-ul\"></i>  
            Kategóriák</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'services'|page }}\"><i class=\"fas fa-clipboard-list\"></i> Szolgáltatásaink</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'basicmenu'|page({slug:'aszf'})}}\"><i class=\"fas fa-file-signature\"></i> ÁSZF</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'basicmenu'|page({slug:'garancia'})}}\"><i class=\"fas fa-shield-alt\"></i> Garancia</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'basicmenu'|page({slug:'szallitas'})}}\"><i class=\"fas fa-shipping-fast\"></i> Szállítás</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'basicmenu'|page({slug:'adatvedelem'})}}\"><i class=\"fas fa-user-shield\"></i> Adatvédelem</a>
        </li>        
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'basicmenu'|page({slug:'nyitvatartas'})}}\"><i class=\"fas fa-calendar-alt\"></i> Nyitva tartás</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ 'contact'|page }}\"><i class=\"far fa-address-card\"></i> Kapcsolat</a>
        </li>
      </ul>
    </div>
  </nav>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/site/header.htm", "");
    }
}
