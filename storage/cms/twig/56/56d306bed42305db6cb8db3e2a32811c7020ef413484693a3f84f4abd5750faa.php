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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/services.htm */
class __TwigTemplate_7ab62e45d3d03e350bdf4fa9f958e026f21bb3b92202991f4f4cfbfa204a27f9 extends \Twig\Template
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
        echo "<div class=\"multibox\">
    <div class=\"sidepanel\">
        ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("box/categorylist"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
    </div>
    <div class=\"content product-content\">
        <section class=\"servicepage\">
            <h1>Szolgáltatásaink</h1>
            <div class=\"services\">
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-question-circle\"></i> Azonnali segítség</h2>
                    <p>Szaktanácsadás vásárlással, bővítéssel, értékesítéssel, hibás működéssel kapcsolatban.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-cogs\"></i> Szervíz</h2>
                    <p>Rendszer optimalizálás, gyorsítás, takarítás szoftveresen és hardveresen is.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-wrench\"></i> Javítás, Szerelés</h2>
                    <p>Számítógépek, laptopok, netbookok, tabletek, hálózati eszközök, monitorok, egyes nyomtatók javítása.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-sync\"></i> Alkatrész beszámítás, Eladás</h2>
                    <p>Számítógép bővítés, fejlesztés alkatrész beszámítással.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-desktop\"></i> Új és Használt eszközök</h2>
                    <p>Új és Használt felújított számítástechnikai eszköz, értékesítés, átvétel, összerakás.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-tint\"></i> Nyomtató kellékek</h2>
                    <p>Nyomtató tintapatronok és lézer tonerek értékesítés, eredetiben és utángyártottban</p>
                </div>
            </div>            
            <h1>Árak</h1>
            <div class=\"prices\">
                <div class=\"priceitem\">
                    <div class=\"pricebox\">
                        <h1>Windows / Linux / Macos Telepítés</h1>
                    </div>
                    <div class=\"dropdown\">
                        <p>Windows / Linux / macOS rendszer szakszerű telepítése és naprakészre frissítése. A megfelelő hardvereszköz illesztőprogramok telepítése. Felhasználói programok telepítése és beállítása. Belső hőmérsékletek, adattároló állapotának és az akkumulátor állapotának az ellenőrzése.</p>
                        <h1 class=\"price\">";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, "15000", 0, ",", "."), "html", null, true);
        echo " Ft</h1>
                    </div>
                </div>
                <div class=\"priceitem\">
                    <div class=\"pricebox\">
                        <h1>Windows / Linux / Macos Telepítés</h1>
                    </div>
                    <div class=\"dropdown\">
                        <p>Windows / Linux / macOS rendszer szakszerű telepítése és naprakészre frissítése. A megfelelő hardvereszköz illesztőprogramok telepítése. Felhasználói programok telepítése és beállítása. Belső hőmérsékletek, adattároló állapotának és az akkumulátor állapotának az ellenőrzése.</p>
                        <h1 class=\"price\">";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, "15000", 0, ",", "."), "html", null, true);
        echo " Ft</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 51,  85 => 42,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content product-content\">
        <section class=\"servicepage\">
            <h1>Szolgáltatásaink</h1>
            <div class=\"services\">
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-question-circle\"></i> Azonnali segítség</h2>
                    <p>Szaktanácsadás vásárlással, bővítéssel, értékesítéssel, hibás működéssel kapcsolatban.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-cogs\"></i> Szervíz</h2>
                    <p>Rendszer optimalizálás, gyorsítás, takarítás szoftveresen és hardveresen is.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-wrench\"></i> Javítás, Szerelés</h2>
                    <p>Számítógépek, laptopok, netbookok, tabletek, hálózati eszközök, monitorok, egyes nyomtatók javítása.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-sync\"></i> Alkatrész beszámítás, Eladás</h2>
                    <p>Számítógép bővítés, fejlesztés alkatrész beszámítással.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-desktop\"></i> Új és Használt eszközök</h2>
                    <p>Új és Használt felújított számítástechnikai eszköz, értékesítés, átvétel, összerakás.</p>
                </div>
                <div class=\"servicebox\">
                    <h2><i class=\"fas fa-tint\"></i> Nyomtató kellékek</h2>
                    <p>Nyomtató tintapatronok és lézer tonerek értékesítés, eredetiben és utángyártottban</p>
                </div>
            </div>            
            <h1>Árak</h1>
            <div class=\"prices\">
                <div class=\"priceitem\">
                    <div class=\"pricebox\">
                        <h1>Windows / Linux / Macos Telepítés</h1>
                    </div>
                    <div class=\"dropdown\">
                        <p>Windows / Linux / macOS rendszer szakszerű telepítése és naprakészre frissítése. A megfelelő hardvereszköz illesztőprogramok telepítése. Felhasználói programok telepítése és beállítása. Belső hőmérsékletek, adattároló állapotának és az akkumulátor állapotának az ellenőrzése.</p>
                        <h1 class=\"price\">{{ '15000'|number_format(0,',','.') }} Ft</h1>
                    </div>
                </div>
                <div class=\"priceitem\">
                    <div class=\"pricebox\">
                        <h1>Windows / Linux / Macos Telepítés</h1>
                    </div>
                    <div class=\"dropdown\">
                        <p>Windows / Linux / macOS rendszer szakszerű telepítése és naprakészre frissítése. A megfelelő hardvereszköz illesztőprogramok telepítése. Felhasználói programok telepítése és beállítása. Belső hőmérsékletek, adattároló állapotának és az akkumulátor állapotának az ellenőrzése.</p>
                        <h1 class=\"price\">{{ '15000'|number_format(0,',','.') }} Ft</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/services.htm", "");
    }
}
