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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_46ed25fe34a936faf72d80fd5b63a14b extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-center\">";
        // line 5
        echo ($context["column_image"] ?? null);
        echo "</td>
           <td class=\"text-left\">Custom Color</td> <!-- Add this line -->
        <td class=\"text-start\">";
        // line 7
        echo ($context["column_name"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 8
        echo ($context["column_model"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 9
        echo ($context["column_quantity"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 10
        echo ($context["column_price"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 11
        echo ($context["column_total"] ?? null);
        echo "</td>
      
      </tr>
    </thead>
    <tbody>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "        <tr>
          <td class=\"text-center\">";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
           <td class=\"text-left\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 19);
            echo "</td>


          <td class=\"text-start text-wrap\"><a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 22)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 24
                echo "              <br/>
              <small> - ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 25);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 25);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 27)) {
                // line 28
                echo "              <br/>
              <small> - ";
                // line 29
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 29);
                echo "</small>
            ";
            }
            // line 31
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 31)) {
                // line 32
                echo "              <br/>
              <small> - ";
                // line 33
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 33);
                echo "</small>
            ";
            }
            // line 35
            echo "          </td>
          <td class=\"text-start\">";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 36);
            echo "</td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40);
            echo "\" size=\"1\" class=\"form-control\"> <input type=\"hidden\" name=\"key\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 40);
            echo "\">
                <button type=\"submit\" formaction=\"";
            // line 41
            echo ($context["product_edit"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                <button type=\"submit\" formaction=\"";
            // line 42
            echo ($context["product_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46);
            echo "</td>
          <td class=\"text-end\">";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 47);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 51
            echo "        <tr>
          <td></td>
          <td class=\"text-start text-wrap\">";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 53);
            echo "</td>
          <td class=\"text-start\"></td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"1\" class=\"form-control\" disabled/>
                <button type=\"submit\" formaction=\"";
            // line 59
            echo ($context["voucher_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
              <input type=\"hidden\" name=\"key\" value=\"";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 61);
            echo "\"/>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 64);
            echo "</td>
          <td class=\"text-end\">";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 65);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </tbody>
    <tfoot id=\"checkout-total\">
      ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 71
            echo "        <tr>
          <td colspan=\"6\" class=\"text-end\"><strong>";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 72);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 73);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </tfoot>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 76,  254 => 73,  250 => 72,  247 => 71,  243 => 70,  239 => 68,  230 => 65,  226 => 64,  220 => 61,  213 => 59,  204 => 53,  200 => 51,  195 => 50,  186 => 47,  182 => 46,  173 => 42,  167 => 41,  161 => 40,  154 => 36,  151 => 35,  144 => 33,  141 => 32,  138 => 31,  131 => 29,  128 => 28,  125 => 27,  115 => 25,  112 => 24,  107 => 23,  99 => 22,  93 => 19,  79 => 18,  76 => 17,  72 => 16,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/checkout/cart_list.twig");
    }
}
