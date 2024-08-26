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
                    <td class=\"text-left\">
                ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["product"], "custom_color", [], "any", false, false, false, 20)) {
                // line 21
                echo "                    <ul>
                        ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "custom_color", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 23
                    echo "                            ";
                    echo $context["value"];
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    </ul>
                ";
            } else {
                // line 27
                echo "                    No custom_color
                ";
            }
            // line 29
            echo "            </td>



          <td class=\"text-start text-wrap\"><a href=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 33);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 33)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 34
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 35
                echo "              <br/>
              <small> - ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 36);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 36);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 38)) {
                // line 39
                echo "              <br/>
              <small> - ";
                // line 40
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 40);
                echo "</small>
            ";
            }
            // line 42
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 42)) {
                // line 43
                echo "              <br/>
              <small> - ";
                // line 44
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 44);
                echo "</small>
            ";
            }
            // line 46
            echo "          </td>
          <td class=\"text-start\">";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 47);
            echo "</td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51);
            echo "\" size=\"1\" class=\"form-control\"> <input type=\"hidden\" name=\"key\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 51);
            echo "\">
                <button type=\"submit\" formaction=\"";
            // line 52
            echo ($context["product_edit"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                <button type=\"submit\" formaction=\"";
            // line 53
            echo ($context["product_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
            echo "</td>
          <td class=\"text-end\">";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 58);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 62
            echo "        <tr>
          <td></td>
          <td class=\"text-start text-wrap\">";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 64);
            echo "</td>
          <td class=\"text-start\"></td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"1\" class=\"form-control\" disabled/>
                <button type=\"submit\" formaction=\"";
            // line 70
            echo ($context["voucher_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
              <input type=\"hidden\" name=\"key\" value=\"";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 72);
            echo "\"/>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 75);
            echo "</td>
          <td class=\"text-end\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 76);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </tbody>
    <tfoot id=\"checkout-total\">
      ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 82
            echo "        <tr>
          <td colspan=\"6\" class=\"text-end\"><strong>";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 83);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 84);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return array (  290 => 87,  281 => 84,  277 => 83,  274 => 82,  270 => 81,  266 => 79,  257 => 76,  253 => 75,  247 => 72,  240 => 70,  231 => 64,  227 => 62,  222 => 61,  213 => 58,  209 => 57,  200 => 53,  194 => 52,  188 => 51,  181 => 47,  178 => 46,  171 => 44,  168 => 43,  165 => 42,  158 => 40,  155 => 39,  152 => 38,  142 => 36,  139 => 35,  134 => 34,  126 => 33,  120 => 29,  116 => 27,  112 => 25,  103 => 23,  99 => 22,  96 => 21,  94 => 20,  79 => 18,  76 => 17,  72 => 16,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/checkout/cart_list.twig");
    }
}
