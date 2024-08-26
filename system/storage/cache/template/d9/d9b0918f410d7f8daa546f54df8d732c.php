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
            if (twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 20)) {
                // line 21
                echo "                    <ul>
                        ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 23
                    echo "                            ";
                    echo $context["value"];
                    echo "</li>
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
                echo "                    No selected_color
                ";
            }
            // line 29
            echo "            </td>

 <td class=\"text-left\">
                ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["product"], "custom_color", [], "any", false, false, false, 32)) {
                // line 33
                echo "                    <ul>
                        ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "custom_color", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["color_id"] => $context["color_name"]) {
                    // line 35
                    echo "                            <li>
                                <input type=\"radio\" name=\"custom_color_";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 36);
                    echo "\" value=\"";
                    echo $context["color_id"];
                    echo "\" ";
                    if (twig_in_filter($context["color_id"], twig_get_attribute($this->env, $this->source, $context["product"], "selected_color", [], "any", false, false, false, 36))) {
                        echo " checked ";
                    }
                    echo ">
                                ";
                    // line 37
                    echo $context["color_name"];
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color_id'], $context['color_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                    </ul>
                ";
            } else {
                // line 42
                echo "                    No custom_color
                ";
            }
            // line 44
            echo "            </td>


          <td class=\"text-start text-wrap\"><a href=\"";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 47)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 49
                echo "              <br/>
              <small> - ";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 50);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 50);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 52)) {
                // line 53
                echo "              <br/>
              <small> - ";
                // line 54
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 54);
                echo "</small>
            ";
            }
            // line 56
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 56)) {
                // line 57
                echo "              <br/>
              <small> - ";
                // line 58
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 58);
                echo "</small>
            ";
            }
            // line 60
            echo "          </td>
          <td class=\"text-start\">";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 61);
            echo "</td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 65);
            echo "\" size=\"1\" class=\"form-control\"> <input type=\"hidden\" name=\"key\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 65);
            echo "\">
                <button type=\"submit\" formaction=\"";
            // line 66
            echo ($context["product_edit"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                <button type=\"submit\" formaction=\"";
            // line 67
            echo ($context["product_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71);
            echo "</td>
          <td class=\"text-end\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 72);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 76
            echo "        <tr>
          <td></td>
          <td class=\"text-start text-wrap\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 78);
            echo "</td>
          <td class=\"text-start\"></td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"1\" class=\"form-control\" disabled/>
                <button type=\"submit\" formaction=\"";
            // line 84
            echo ($context["voucher_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
              <input type=\"hidden\" name=\"key\" value=\"";
            // line 86
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 86);
            echo "\"/>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 89);
            echo "</td>
          <td class=\"text-end\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 90);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    </tbody>
    <tfoot id=\"checkout-total\">
      ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 96
            echo "        <tr>
          <td colspan=\"6\" class=\"text-end\"><strong>";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 97);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 98);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
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
        return array (  333 => 101,  324 => 98,  320 => 97,  317 => 96,  313 => 95,  309 => 93,  300 => 90,  296 => 89,  290 => 86,  283 => 84,  274 => 78,  270 => 76,  265 => 75,  256 => 72,  252 => 71,  243 => 67,  237 => 66,  231 => 65,  224 => 61,  221 => 60,  214 => 58,  211 => 57,  208 => 56,  201 => 54,  198 => 53,  195 => 52,  185 => 50,  182 => 49,  177 => 48,  169 => 47,  164 => 44,  160 => 42,  156 => 40,  147 => 37,  137 => 36,  134 => 35,  130 => 34,  127 => 33,  125 => 32,  120 => 29,  116 => 27,  112 => 25,  103 => 23,  99 => 22,  96 => 21,  94 => 20,  79 => 18,  76 => 17,  72 => 16,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/checkout/cart_list.twig");
    }
}
