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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/contact.htm */
class __TwigTemplate_92709b2f012a1071983ccbb25676c8d388810d6239974d542d397b7b43955c20 extends \Twig\Template
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
        <section class=\"contactpage\">
            <h1 class=\"title\">Kapcsolat</h1>
            <h2>Kérdésed van, bátran tedd fel!</h2>
            <div class=\"multiblock\">
                <div class=\"form\">
                    <form id=\"contactForm\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Név\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"E-Mail\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"tárgy\" class=\"form-control\" placeholder=\"Tárgy\" required>
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Üzenet szövege...\" required></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-block\">Küldés</button>
                    </form>
                </div>
                <div class=\"data\">
                    <ul>
                        <li>Cím: <strong>9022 Győr, Bajcsy-Zsilinszky u. 51.</strong></li>
                        <li>Telefon: <strong>+36 96/311-093</strong></li>
                        <li>Mobil: <strong>+36 70/433-4015</strong></li>
                        <li>E-Mail: <strong>info@computerplex.hu</strong></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"multibox\">
    <div class=\"sidepanel\">
        {% partial 'box/categorylist' %} 
    </div>
    <div class=\"content product-content\">
        <section class=\"contactpage\">
            <h1 class=\"title\">Kapcsolat</h1>
            <h2>Kérdésed van, bátran tedd fel!</h2>
            <div class=\"multiblock\">
                <div class=\"form\">
                    <form id=\"contactForm\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Név\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"E-Mail\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"tárgy\" class=\"form-control\" placeholder=\"Tárgy\" required>
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Üzenet szövege...\" required></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-block\">Küldés</button>
                    </form>
                </div>
                <div class=\"data\">
                    <ul>
                        <li>Cím: <strong>9022 Győr, Bajcsy-Zsilinszky u. 51.</strong></li>
                        <li>Telefon: <strong>+36 96/311-093</strong></li>
                        <li>Mobil: <strong>+36 70/433-4015</strong></li>
                        <li>E-Mail: <strong>info@computerplex.hu</strong></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/contact.htm", "");
    }
}
