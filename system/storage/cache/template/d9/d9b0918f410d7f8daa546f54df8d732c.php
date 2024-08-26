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
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["product"], "custom_color", [], "any", false, false, false, 24)) {
                // line 25
                echo "        <ul>
            ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "custom_color", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["color_id"] => $context["color_name"]) {
                    // line 27
                    echo "                <li>
                    <input type=\"radio\" name=\"custom_color_";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 28);
                    echo "\" value=\"";
                    echo $context["color_id"];
                    echo "\" ";
                    if (twig_in_filter($context["color_name"], twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 28))) {
                        echo " checked ";
                    }
                    echo " onchange=\"document.getElementById('selected_color_";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 28);
                    echo "').value=this.value;\">
                    ";
                    // line 29
                    echo $context["color_name"];
                    echo "
                
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color_id'], $context['color_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        </ul>
 <form method=\"post\" data-oc-target=\"#shopping-cart\">
    <div class=\"input-group\">
        <!-- Hidden input to store the selected color ID -->
        <input type=\"hidden\" id=\"selected_color_";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 37);
                echo "\" name=\"selected_color\" value=\"";
                echo twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 37));
                echo "\"> <!-- Assuming selected_color is an array, you may use | first or | join to access the correct value -->
        
        <!-- Hidden input to store the product quantity -->
        <input type=\"hidden\" name=\"quantity\" value=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40);
                echo "\" class=\"form-control\">
        
        <!-- Hidden input to store the product key -->
        <input type=\"hidden\" name=\"key\" value=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 43);
                echo "\">
        <!-- Buttons for updating/removing the product -->
        <button type=\"submit\" formaction=\"";
                // line 45
                echo ($context["product_edit"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_update"] ?? null);
                echo "\" class=\"btn btn-primary\">
            <i class=\"fa-solid fa-rotate\"></i>
        </button>
        <button type=\"submit\" formaction=\"";
                // line 48
                echo ($context["product_remove"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\">
            <i class=\"fa-solid fa-circle-xmark\"></i>
        </button>
    </div>
</form>

   
    ";
            } else {
                // line 56
                echo "        No custom_color
    ";
            }
            // line 58
            echo "</td>

          <td class=\"text-start text-wrap\"><a href=\"";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 60)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 61
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 62
                echo "              <br/>
              <small> - ";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 63);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 63);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 65)) {
                // line 66
                echo "              <br/>
              <small> - ";
                // line 67
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 67);
                echo "</small>
            ";
            }
            // line 69
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 69)) {
                // line 70
                echo "              <br/>
              <small> - ";
                // line 71
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 71);
                echo "</small>
            ";
            }
            // line 73
            echo "          </td>
          <td class=\"text-start\">";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 74);
            echo "</td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
               ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 78)) {
                // line 79
                echo "             <input type=\"hidden\" id=\"selected_color_";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 79);
                echo "\" name=\"selected_color\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 79);
                echo "\">
               ";
            }
            // line 81
            echo "                <input type=\"text\" name=\"quantity\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 81);
            echo "\" size=\"1\" class=\"form-control\"> <input type=\"hidden\" name=\"key\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 81);
            echo "\">
                <button type=\"submit\" formaction=\"";
            // line 82
            echo ($context["product_edit"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                <button type=\"submit\" formaction=\"";
            // line 83
            echo ($context["product_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87);
            echo "</td>
          <td class=\"text-end\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 88);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 92
            echo "        <tr>
          <td></td>
          <td class=\"text-start text-wrap\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 94);
            echo "</td>
          <td class=\"text-start\"></td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"1\" class=\"form-control\" disabled/>
                <button type=\"submit\" formaction=\"";
            // line 100
            echo ($context["voucher_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
              <input type=\"hidden\" name=\"key\" value=\"";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 102);
            echo "\"/>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 105);
            echo "</td>
          <td class=\"text-end\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 106);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </tbody>
    <tfoot id=\"checkout-total\">
      ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 112
            echo "        <tr>
          <td colspan=\"6\" class=\"text-end\"><strong>";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 113);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 114);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
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
        return array (  361 => 117,  352 => 114,  348 => 113,  345 => 112,  341 => 111,  337 => 109,  328 => 106,  324 => 105,  318 => 102,  311 => 100,  302 => 94,  298 => 92,  293 => 91,  284 => 88,  280 => 87,  271 => 83,  265 => 82,  258 => 81,  250 => 79,  248 => 78,  241 => 74,  238 => 73,  231 => 71,  228 => 70,  225 => 69,  218 => 67,  215 => 66,  212 => 65,  202 => 63,  199 => 62,  194 => 61,  186 => 60,  182 => 58,  178 => 56,  165 => 48,  157 => 45,  152 => 43,  146 => 40,  138 => 37,  132 => 33,  122 => 29,  110 => 28,  107 => 27,  103 => 26,  100 => 25,  98 => 24,  79 => 18,  76 => 17,  72 => 16,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/checkout/cart_list.twig");
    }
}
