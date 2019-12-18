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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/partials/site/footer.htm */
class __TwigTemplate_bf08217e7682b234ee5957a560a4fcadf37a287626c875543e335755c7290bbe extends \Twig\Template
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
        echo "<div class=\"footerblock\">
  <div class=\"hero\">
    <div class=\"logo-wrap\">
        <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\">
    </div>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex sapiente fuga
      doloremque praesentium voluptates, accusamus eum labore quisquam assumenda
      repudiandae?
    </p>
    <p>
        <strong>Fizetési módok</strong><br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, voluptatem.
        <div class=\"payment-list\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "            <div class=\"payment\">
                <img src=\"";
            // line 17
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/payments/mastercard.png");
            echo "\" alt=\"MasterCard\">
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </p>
  </div>
  <div class=\"footer-content\">
      <div class=\"blocklist\">
          <div class=\"cblock\">
            <h3>Közösségi oldalak</h3>
            <p><i class=\"fab fa-facebook\"></i> Facebook</p>
          </div>
          <div class=\"cblock\">
            <h3>Kapcsolat</h3>
            <p><i class=\"fas fa-home\"></i> Cím</p>
            <p><i class=\"fas fa-phone\"></i> Tel</p>
            <p><i class=\"fas fa-envelope\"></i> info@computerplex.hu</p>
        </div>
      </div>
      <p>Copyright &copy; Computer Plex</p>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  63 => 17,  60 => 16,  56 => 15,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footerblock\">
  <div class=\"hero\">
    <div class=\"logo-wrap\">
        <img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\">
    </div>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex sapiente fuga
      doloremque praesentium voluptates, accusamus eum labore quisquam assumenda
      repudiandae?
    </p>
    <p>
        <strong>Fizetési módok</strong><br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, voluptatem.
        <div class=\"payment-list\">
            {% for i in 0..2 %}
            <div class=\"payment\">
                <img src=\"{{ 'assets/images/payments/mastercard.png'|theme }}\" alt=\"MasterCard\">
            </div>
            {% endfor %}
        </div>
    </p>
  </div>
  <div class=\"footer-content\">
      <div class=\"blocklist\">
          <div class=\"cblock\">
            <h3>Közösségi oldalak</h3>
            <p><i class=\"fab fa-facebook\"></i> Facebook</p>
          </div>
          <div class=\"cblock\">
            <h3>Kapcsolat</h3>
            <p><i class=\"fas fa-home\"></i> Cím</p>
            <p><i class=\"fas fa-phone\"></i> Tel</p>
            <p><i class=\"fas fa-envelope\"></i> info@computerplex.hu</p>
        </div>
      </div>
      <p>Copyright &copy; Computer Plex</p>
  </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/partials/site/footer.htm", "");
    }
}
