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
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["product"], "custom_color", [], "any", false, false, false, 22)) {
                // line 23
                echo "                    <ul>
                        ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "custom_color", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["color_id"] => $context["color_name"]) {
                    // line 25
                    echo "                            <li>
                                <input type=\"radio\" name=\"custom_color_";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 26);
                    echo "\" value=\"";
                    echo $context["color_id"];
                    echo "\" ";
                    if (twig_in_filter($context["color_name"], twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 26))) {
                        echo " checked ";
                    }
                    echo ">
                                ";
                    // line 27
                    echo $context["color_name"];
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color_id'], $context['color_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                    </ul>
                ";
            } else {
                // line 32
                echo "                    No custom_color
                ";
            }
            // line 34
            echo "            </td>


          <td class=\"text-start text-wrap\"><a href=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 37)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 39
                echo "              <br/>
              <small> - ";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 40);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 40);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 42)) {
                // line 43
                echo "              <br/>
              <small> - ";
                // line 44
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 44);
                echo "</small>
            ";
            }
            // line 46
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 46)) {
                // line 47
                echo "              <br/>
              <small> - ";
                // line 48
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 48);
                echo "</small>
            ";
            }
            // line 50
            echo "          </td>
          <td class=\"text-start\">";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 51);
            echo "</td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55);
            echo "\" size=\"1\" class=\"form-control\"> <input type=\"hidden\" name=\"key\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 55);
            echo "\">
                <button type=\"submit\" formaction=\"";
            // line 56
            echo ($context["product_edit"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                <button type=\"submit\" formaction=\"";
            // line 57
            echo ($context["product_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61);
            echo "</td>
          <td class=\"text-end\">";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 62);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 66
            echo "        <tr>
          <td></td>
          <td class=\"text-start text-wrap\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 68);
            echo "</td>
          <td class=\"text-start\"></td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"1\" class=\"form-control\" disabled/>
                <button type=\"submit\" formaction=\"";
            // line 74
            echo ($context["voucher_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
              <input type=\"hidden\" name=\"key\" value=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 76);
            echo "\"/>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 79);
            echo "</td>
          <td class=\"text-end\">";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 80);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </tbody>
    <tfoot id=\"checkout-total\">
      ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 86
            echo "        <tr>
          <td colspan=\"6\" class=\"text-end\"><strong>";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 87);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 88);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        return array (  304 => 91,  295 => 88,  291 => 87,  288 => 86,  284 => 85,  280 => 83,  271 => 80,  267 => 79,  261 => 76,  254 => 74,  245 => 68,  241 => 66,  236 => 65,  227 => 62,  223 => 61,  214 => 57,  208 => 56,  202 => 55,  195 => 51,  192 => 50,  185 => 48,  182 => 47,  179 => 46,  172 => 44,  169 => 43,  166 => 42,  156 => 40,  153 => 39,  148 => 38,  140 => 37,  135 => 34,  131 => 32,  127 => 30,  118 => 27,  108 => 26,  105 => 25,  101 => 24,  98 => 23,  96 => 22,  79 => 18,  76 => 17,  72 => 16,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/checkout/cart_list.twig");
    }
}
