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

/* C:\xampp\htdocs\ComputerPlex/themes/lorex/pages/login.htm */
class __TwigTemplate_e4826e7abc5836163f08becb210d5a1d82f9faeb2c8d3fdfc5db17e055345b8e extends \Twig\Template
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
        // line 4
        echo "  </div>
  <div class=\"content product-content\">
    <section class=\"basicmenu\">
      ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 7
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 8
                echo "          <div class=\"alert alert-";
                (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</div>
      ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 10
        echo "        ";
        if ( !($context["user"] ?? null)) {
            // line 11
            echo "      <h1 class=\"title\">Bejelentkezés/Regisztráció</h1>
      <div class=\"content\">
        <ul class=\"nav nav-tabs\" id=\"loginTabs\" role=\"tablist\">
          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"login-tab\"
              data-toggle=\"tab\"
              href=\"#login\"
              role=\"tab\"
              aria-controls=\"login\"
              aria-selected=\"true\"
              >Bejelentkezés</a
            >
          </li>
          <li class=\"nav-item\">
            <a
              class=\"nav-link\"
              id=\"register-tab\"
              data-toggle=\"tab\"
              href=\"#register\"
              role=\"tab\"
              aria-controls=\"register\"
              aria-selected=\"false\"
              >Regisztráció</a
            >
          </li>
        </ul>
        <div class=\"tab-content\" id=\"myTabContent\">
          <div
            class=\"tab-pane fade show active\"
            id=\"login\"
            role=\"tabpanel\"
            aria-labelledby=\"login-tab\"
          >
            ";
            // line 46
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin"]);
            echo "

            <div class=\"form-group\">
              <label for=\"userSigninLogin\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "</label>
              <input
                name=\"login\"
                type=\"text\"
                class=\"form-control\"
                id=\"userSigninLogin\"
                placeholder=\"Add meg az ";
            // line 55
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo " címed\"
              />
            </div>

            <div class=\"form-group\">
              <label for=\"userSigninPassword\">Jelszó</label>
              <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"userSigninPassword\"
                placeholder=\"Jelszó\"
              />
            </div>

            ";
            // line 70
            if ((($context["rememberLoginMode"] ?? null) == "ask")) {
                // line 71
                echo "            <div class=\"form-group\">
              <div class=\"checkbox\">
                <label
                  ><input name=\"remember\" type=\"checkbox\" value=\"1\" />Emlékezz
                  rám!</label
                >
              </div>
            </div>
            ";
            }
            // line 80
            echo "
            <button type=\"submit\" class=\"btn btn-default\">Bejelentkezés</button>

            ";
            // line 83
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
          </div>
          <div
            class=\"tab-pane fade\"
            id=\"register\"
            role=\"tabpanel\"
            aria-labelledby=\"register-tab\"
          >
            ";
            // line 91
            if (($context["canRegister"] ?? null)) {
                echo " 
            ";
                // line 92
                echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister", ["id" => "registerForm"]]);
                echo "

            <div class=\"form-group\">
              <label for=\"registerName\">Teljes név</label>
              <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Add meg teljes neved\"
              />
            </div>

            <div class=\"form-group\">
              <label for=\"registerEmail\">E-mail cím</label>
              <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Email\"
              />
            </div>

            <div class=\"form-group\">
              <label for=\"registerPassword\">Jelszó</label>
              <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Jelszó\"
              />
            </div>

            <div class=\"form-group\">
              <label for=\"registerPasswordRepeat\">Jelszó ismét</label>
              <input
                name=\"passwordRepeat\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPasswordRepeat\"
                placeholder=\"Jelszó ismét\"
              />
            </div>

            <button type=\"submit\" class=\"btn btn-default\">Regisztráció</button>

            ";
                // line 140
                echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
                echo " ";
            } else {
                // line 141
                echo "            <!-- Registration is disabled. -->
            ";
            }
            // line 143
            echo "          </div>
        </div>
      </div>

      ";
        } else {
            // line 148
            echo "          
        ";
            // line 152
            echo "        <h1>Kedves ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 152), "html", null, true);
            echo ", ön jelenleg be van jelentkezve!</h1>
      ";
        }
        // line 154
        echo "    </section>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 154,  237 => 152,  234 => 148,  227 => 143,  223 => 141,  219 => 140,  168 => 92,  164 => 91,  153 => 83,  148 => 80,  137 => 71,  135 => 70,  117 => 55,  108 => 49,  102 => 46,  65 => 11,  62 => 10,  53 => 8,  50 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"multibox\">
  <div class=\"sidepanel\">
    {% partial 'box/categorylist' %}
  </div>
  <div class=\"content product-content\">
    <section class=\"basicmenu\">
      {% flash %}
          <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">{{ message }}</div>
      {% endflash %}
        {% if not user %}
      <h1 class=\"title\">Bejelentkezés/Regisztráció</h1>
      <div class=\"content\">
        <ul class=\"nav nav-tabs\" id=\"loginTabs\" role=\"tablist\">
          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"login-tab\"
              data-toggle=\"tab\"
              href=\"#login\"
              role=\"tab\"
              aria-controls=\"login\"
              aria-selected=\"true\"
              >Bejelentkezés</a
            >
          </li>
          <li class=\"nav-item\">
            <a
              class=\"nav-link\"
              id=\"register-tab\"
              data-toggle=\"tab\"
              href=\"#register\"
              role=\"tab\"
              aria-controls=\"register\"
              aria-selected=\"false\"
              >Regisztráció</a
            >
          </li>
        </ul>
        <div class=\"tab-content\" id=\"myTabContent\">
          <div
            class=\"tab-pane fade show active\"
            id=\"login\"
            role=\"tabpanel\"
            aria-labelledby=\"login-tab\"
          >
            {{ form_ajax('onSignin') }}

            <div class=\"form-group\">
              <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
              <input
                name=\"login\"
                type=\"text\"
                class=\"form-control\"
                id=\"userSigninLogin\"
                placeholder=\"Add meg az {{ loginAttributeLabel|lower }} címed\"
              />
            </div>

            <div class=\"form-group\">
              <label for=\"userSigninPassword\">Jelszó</label>
              <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"userSigninPassword\"
                placeholder=\"Jelszó\"
              />
            </div>

            {% if rememberLoginMode == 'ask' %}
            <div class=\"form-group\">
              <div class=\"checkbox\">
                <label
                  ><input name=\"remember\" type=\"checkbox\" value=\"1\" />Emlékezz
                  rám!</label
                >
              </div>
            </div>
            {% endif %}

            <button type=\"submit\" class=\"btn btn-default\">Bejelentkezés</button>

            {{ form_close() }}
          </div>
          <div
            class=\"tab-pane fade\"
            id=\"register\"
            role=\"tabpanel\"
            aria-labelledby=\"register-tab\"
          >
            {% if canRegister %} 
            {{ form_ajax('onRegister', {id: 'registerForm'}) }}

            <div class=\"form-group\">
              <label for=\"registerName\">Teljes név</label>
              <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Add meg teljes neved\"
              />
            </div>

            <div class=\"form-group\">
              <label for=\"registerEmail\">E-mail cím</label>
              <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Email\"
              />
            </div>

            <div class=\"form-group\">
              <label for=\"registerPassword\">Jelszó</label>
              <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Jelszó\"
              />
            </div>

            <div class=\"form-group\">
              <label for=\"registerPasswordRepeat\">Jelszó ismét</label>
              <input
                name=\"passwordRepeat\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPasswordRepeat\"
                placeholder=\"Jelszó ismét\"
              />
            </div>

            <button type=\"submit\" class=\"btn btn-default\">Regisztráció</button>

            {{ form_close() }} {% else %}
            <!-- Registration is disabled. -->
            {% endif %}
          </div>
        </div>
      </div>

      {% else %}
          
        {# {% partial account ~ '::activation_check' %} 
        {% partial account ~ '::update' %}
        {% partial account ~ '::deactivate_link' %} #}
        <h1>Kedves {{ user.name }}, ön jelenleg be van jelentkezve!</h1>
      {% endif %}
    </section>
  </div>
</div>", "C:\\xampp\\htdocs\\ComputerPlex/themes/lorex/pages/login.htm", "");
    }
}
