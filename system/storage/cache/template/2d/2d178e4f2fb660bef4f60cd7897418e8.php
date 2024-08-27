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

/* admin/view/template/sale/order_info.twig */
class __TwigTemplate_123f60aed181c444c7ffbe6f0e25c7ea extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><a href=\"";
        // line 5
        echo ($context["invoice"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info";
        if ( !($context["order_id"] ?? null)) {
            echo " disabled";
        }
        echo "\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"";
        echo ($context["shipping"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info";
        if ( !($context["shipping_code"] ?? null)) {
            echo " disabled";
        }
        echo "\"><i class=\"fa-solid fa-truck\"></i></a> <a href=\"";
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 16
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">

          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 23
        echo ($context["text_invoice"] ?? null);
        echo "</strong>
                  <br/>
                  <span id=\"invoice-value\">";
        // line 25
        echo ($context["invoice_prefix"] ?? null);
        echo ($context["invoice_no"] ?? null);
        echo "</span>
                </div>
              </div>
              ";
        // line 28
        if ( !($context["invoice_no"] ?? null)) {
            // line 29
            echo "                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        } else {
            // line 31
            echo "                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        }
        // line 33
        echo "            </div>
          </div>

          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 39
        echo ($context["text_customer"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 41
        if (($context["customer_id"] ?? null)) {
            // line 42
            echo "                    <div id=\"customer-value\"><a href=\"index.php?route=customer/customer.form&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&customer_id=";
            echo ($context["customer_id"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</a></div>
                  ";
        } else {
            // line 44
            echo "                    <div id=\"customer-value\">";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</div>
                  ";
        }
        // line 46
        echo "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

          <div class=\"col\">
            <div class=\"form-control p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
        // line 54
        echo ($context["text_date_added"] ?? null);
        echo "</strong>
                <br/>
                ";
        // line 56
        echo ($context["date_added"] ?? null);
        echo "
              </div>
            </div>
          </div>
        </div>

        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-start\">";
        // line 65
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-start\">";
        // line 66
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 67
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 68
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 69
        echo ($context["column_total"] ?? null);
        echo "</td>
                ";
        // line 70
        if ((($context["product_extra_feature_status"] ?? null) > 0)) {
            // line 71
            echo "                <td class=\"text-end\">Custom Color</td>
                ";
        }
        // line 73
        echo "              <td class=\"text-end\" style=\"width: 1px;\">";
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody id=\"order-products\">
            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
            // line 78
            echo "              <tr>
                <td class=\"text-start\"><a href=\"index.php?route=catalog/product.form&user_token=";
            // line 79
            echo ($context["user_token"] ?? null);
            echo "&product_id=";
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 79);
            echo "\" target=\"_blank\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 79);
            echo "</a>

                  ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 81)) {
                // line 82
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 83
                    echo "                      <br/>
                      ";
                    // line 84
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 84) != "file")) {
                        // line 85
                        echo "                      <small> - ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 85);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 85);
                        echo "</small> ";
                    } else {
                        // line 86
                        echo "                      <small> - ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86);
                        echo ": <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 86);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 86);
                        echo "</a></small> ";
                    }
                    // line 87
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                  ";
            }
            // line 89
            echo "
                  ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 90)) {
                // line 91
                echo "                    <br/>
                    <small> - ";
                // line 92
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 92);
                echo "</small>
                  ";
            }
            // line 94
            echo "
                  ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription", [], "any", false, false, false, 95)) {
                // line 96
                echo "                    <br/>
                    <small> - ";
                // line 97
                echo ($context["text_subscription"] ?? null);
                echo ": <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription", [], "any", false, false, false, 97);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription_description", [], "any", false, false, false, 97);
                echo "</a></small>
                  ";
            }
            // line 99
            echo "
                </td>
                <td class=\"text-start\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 101);
            echo "</td>
                <td class=\"text-end\">";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 102);
            echo "</td>
                <td class=\"text-end\">";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "price", [], "any", false, false, false, 103);
            echo "</td>
                <td class=\"text-end\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "total", [], "any", false, false, false, 104);
            echo "</td>
                ";
            // line 105
            if ((($context["product_extra_feature_status"] ?? null) > 0)) {
                // line 106
                echo "                  <td class=\"text-end\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "custom_color", [], "any", false, false, false, 106);
                echo "</td>
                ";
            }
            // line 108
            echo "               
                <td class=\"text-end\">
                  <form>
                    <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
            // line 111
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                    <input type=\"hidden\" name=\"key\" value=\"";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "cart_id", [], "any", false, false, false, 112);
            echo "\"/>
                  </form>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "          </tbody>
          <tbody id=\"order-vouchers\">
            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_voucher"]) {
            // line 120
            echo "              <tr>
                <td class=\"text-start\">";
            // line 121
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "description", [], "any", false, false, false, 121);
            echo "</td>
                <td></td>
                <td class=\"text-end\">1</td>
                <td class=\"text-end\">";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 124);
            echo "</td>
                <td class=\"text-end\">";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 125);
            echo "</td>
                <td class=\"text-end\">
                  <form>
                    <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
            // line 128
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                    <input type=\"hidden\" name=\"key\" value=\"";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "key", [], "any", false, false, false, 129);
            echo "\"/>
                  </form>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            ";
        if (( !($context["order_products"] ?? null) &&  !($context["order_vouchers"] ?? null))) {
            // line 135
            echo "              <tr>
               ";
            // line 136
            if ((($context["product_extra_feature_status"] ?? null) > 0)) {
                // line 137
                echo "                   <td colspan=\"7\" class=\"text-center\">";
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              ";
            } else {
                // line 139
                echo "                   <td colspan=\"6\" class=\"text-center\">";
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              ";
            }
            // line 141
            echo "               
              </tr>
            ";
        }
        // line 144
        echo "          </tbody>
          <tfoot>
            <tr>
             ";
        // line 147
        if ((($context["product_extra_feature_status"] ?? null) > 0)) {
            // line 148
            echo "                  <td colspan=\"6\"></td>
              ";
        } else {
            // line 150
            echo "                  <td colspan=\"5\"></td>
              ";
        }
        // line 152
        echo "             
              <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-cart\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
            </tr>
          </tfoot>
        </table>

        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">

            <div class=\"col\">
              <form id=\"form-store\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 166
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 166);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 166) == ($context["store_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 166);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                  </select> <label for=\"input-store\">";
        echo ($context["entry_store"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-language\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 178
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 178);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 178) == ($context["language_code"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 178);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                  </select> <label for=\"input-language\">";
        echo ($context["entry_language"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-currency\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 190
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 190);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 190) == ($context["currency_code"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 190);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                  </select> <label for=\"input-currency\">";
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-coupon\" class=\"mb-3\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"coupon\" value=\"";
        // line 200
        echo ($context["total_coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/> <label for=\"input-coupon\">";
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-coupon\" data-bs-toogle=\"tooltip\" title=\"";
        // line 201
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-voucher\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"voucher\" value=\"";
        // line 209
        echo ($context["total_voucher"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/> <label for=\"input-voucher\">";
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-voucher\" data-bs-toogle=\"tooltip\" title=\"";
        // line 210
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-reward\" class=\"mb-3\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"reward\" value=\"";
        // line 218
        echo ($context["total_reward"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reward"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\"/> <label for=\"input-reward\">";
        echo ($context["entry_reward"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-reward\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <div class=\"input-group\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead p-0\"><strong>";
        // line 227
        echo ($context["text_reward"] ?? null);
        echo "</strong>
                    <br/>
                    <div id=\"reward-value\">";
        // line 229
        echo ($context["points"] ?? null);
        echo "</div>
                  </div>
                </div>
                ";
        // line 232
        if ( !($context["reward_total"] ?? null)) {
            // line 233
            echo "                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_reward_add"] ?? null);
            echo "\" class=\"btn btn-success\"";
            if (( !($context["customer_id"] ?? null) ||  !($context["points"] ?? null))) {
                echo " disabled";
            }
            echo "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 235
            echo "                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_reward_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 237
        echo "              </div>
            </div>

            <div class=\"col\">
              <div class=\"input-group mb-3\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 243
        echo ($context["text_affiliate"] ?? null);
        echo "</strong>
                    <br/>
                    ";
        // line 245
        if (($context["affiliate_id"] ?? null)) {
            // line 246
            echo "                      <div id=\"affiliate-value\"><a href=\"index.php?route=marketing/affiliate.form&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&customer_id=";
            echo ($context["affiliate_id"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["affiliate"] ?? null);
            echo "</a></div>
                    ";
        } else {
            // line 248
            echo "                      <div id=\"affiliate-value\">&nbsp;</div>
                    ";
        }
        // line 250
        echo "                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>

            <div class=\"col\">
              <div class=\"input-group mb-3\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 259
        echo ($context["text_commission"] ?? null);
        echo "</strong>
                    <br/>
                    ";
        // line 261
        if (($context["commission"] ?? null)) {
            // line 262
            echo "                      <div id=\"commission-value\">";
            echo ($context["commission"] ?? null);
            echo "</div>
                    ";
        } else {
            // line 264
            echo "                      <div id=\"commission-value\">&nbsp;</div>
                    ";
        }
        // line 266
        echo "                  </div>
                </div>
                ";
        // line 268
        if ( !($context["commission_total"] ?? null)) {
            // line 269
            echo "                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_commission_add"] ?? null);
            echo "\" class=\"btn btn-success\"";
            if ( !($context["affiliate_id"] ?? null)) {
                echo " disabled";
            }
            echo "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 271
            echo "                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_commission_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 273
        echo "              </div>
            </div>

          </div>
        </div>

        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">";
        // line 279
        echo ($context["text_more"] ?? null);
        echo " <i class=\"fa-solid fa-angle-down\"></i></button>

        <div class=\"row\">
          <div class=\"col-md\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 285
        echo ($context["text_payment_address"] ?? null);
        echo "</strong>
                  <br/>
                  <div id=\"payment-address-value\">
                    ";
        // line 288
        if (($context["payment_firstname"] ?? null)) {
            // line 289
            echo "                      ";
            echo ($context["payment_firstname"] ?? null);
            echo " ";
            echo ($context["payment_lastname"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 292
        echo "
                    ";
        // line 293
        if (($context["payment_company"] ?? null)) {
            // line 294
            echo "                      ";
            echo ($context["payment_company"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 297
        echo "
                    ";
        // line 298
        if (($context["payment_address_1"] ?? null)) {
            // line 299
            echo "                      ";
            echo ($context["payment_address_1"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 302
        echo "
                    ";
        // line 303
        if (($context["payment_address_2"] ?? null)) {
            // line 304
            echo "                      ";
            echo ($context["payment_address_2"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 307
        echo "
                    ";
        // line 308
        if (($context["payment_city"] ?? null)) {
            // line 309
            echo "                      ";
            echo ($context["payment_city"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 312
        echo "
                    ";
        // line 313
        if (($context["payment_postcode"] ?? null)) {
            // line 314
            echo "                      ";
            echo ($context["payment_postcode"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 317
        echo "
                    ";
        // line 318
        if (($context["payment_zone"] ?? null)) {
            // line 319
            echo "                      ";
            echo ($context["payment_zone"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 322
        echo "                    ";
        if (($context["payment_country"] ?? null)) {
            // line 323
            echo "                      ";
            echo ($context["payment_country"] ?? null);
            echo "
                    ";
        }
        // line 325
        echo "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

          <div id=\"shipping-address\" class=\"col";
        // line 332
        if ( !($context["shipping_method"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 335
        echo ($context["text_shipping_address"] ?? null);
        echo "</strong>
                  <br/>
                  <div id=\"shipping-address-value\">
                    ";
        // line 338
        if (($context["shipping_firstname"] ?? null)) {
            // line 339
            echo "                      ";
            echo ($context["shipping_firstname"] ?? null);
            echo " ";
            echo ($context["shipping_lastname"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 342
        echo "                    ";
        if (($context["shipping_company"] ?? null)) {
            // line 343
            echo "                      ";
            echo ($context["shipping_company"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 346
        echo "                    ";
        if (($context["shipping_address_1"] ?? null)) {
            // line 347
            echo "                      ";
            echo ($context["shipping_address_1"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 350
        echo "                    ";
        if (($context["shipping_address_2"] ?? null)) {
            // line 351
            echo "                      ";
            echo ($context["shipping_address_2"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 354
        echo "                    ";
        if (($context["shipping_city"] ?? null)) {
            // line 355
            echo "                      ";
            echo ($context["shipping_city"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 358
        echo "                    ";
        if (($context["shipping_postcode"] ?? null)) {
            // line 359
            echo "                      ";
            echo ($context["shipping_postcode"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 362
        echo "                    ";
        if (($context["shipping_zone"] ?? null)) {
            // line 363
            echo "                      ";
            echo ($context["shipping_zone"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 366
        echo "                    ";
        if (($context["shipping_country"] ?? null)) {
            // line 367
            echo "                      ";
            echo ($context["shipping_country"] ?? null);
            echo "
                    ";
        }
        // line 369
        echo "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

        </div>
        <div class=\"row\">

          <div id=\"shipping-method\" class=\"col-md";
        // line 379
        if ( !($context["shipping_method"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 382
        echo ($context["text_shipping_method"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 384
        if (($context["shipping_method"] ?? null)) {
            // line 385
            echo "                    <span id=\"shipping-method-value\">";
            echo ($context["shipping_method"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 387
            echo "                    <span id=\"shipping-method-value\"></span>
                  ";
        }
        // line 389
        echo "                </div>
              </div>
              <input type=\"hidden\" name=\"shipping_code\" value=\"";
        // line 391
        echo ($context["shipping_code"] ?? null);
        echo "\" id=\"input-shipping-code\"/>
              <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

          <div id=\"payment-method\" class=\"col-md\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 399
        echo ($context["text_payment_method"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 401
        if (($context["payment_method"] ?? null)) {
            // line 402
            echo "                    <span id=\"payment-method-value\">";
            echo ($context["payment_method"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 404
            echo "                    <span id=\"payment-method-value\"></span>
                  ";
        }
        // line 406
        echo "                </div>
              </div>
              <input type=\"hidden\" name=\"payment_code\" value=\"";
        // line 408
        echo ($context["payment_code"] ?? null);
        echo "\" id=\"input-payment-code\"/>
              <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

        </div>

        <div class=\"row\">
          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 419
        echo ($context["text_comment"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 421
        if (($context["comment"] ?? null)) {
            // line 422
            echo "                    <span id=\"comment-value\">";
            echo ($context["comment"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 424
            echo "                    <span id=\"comment-value\"></span>
                  ";
        }
        // line 426
        echo "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>

        <table class=\"table table-bordered\">
          <tbody id=\"order-totals\">
            ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_total"]) {
            // line 436
            echo "              <tr>
                <td class=\"text-end\"><strong>";
            // line 437
            echo twig_get_attribute($this->env, $this->source, $context["order_total"], "title", [], "any", false, false, false, 437);
            echo "</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">";
            // line 438
            echo twig_get_attribute($this->env, $this->source, $context["order_total"], "text", [], "any", false, false, false, 438);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        echo "          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 444
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 445
        echo ($context["button_confirm"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>

    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> ";
        // line 451
        echo ($context["text_history"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 454
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 455
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 457
            echo "            <li class=\"nav-item\"><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 457);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 457);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 459
        echo "        </ul>
        <div class=\"tab-content\">

          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>";
        // line 464
        echo ($context["text_history"] ?? null);
        echo "</legend>
              <div id=\"history\">";
        // line 465
        echo ($context["history"] ?? null);
        echo "</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>";
        // line 469
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 471
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      ";
        // line 474
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 475
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 475);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 475) == ($context["order_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 475);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 481
        echo ($context["entry_override"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"override\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" class=\"form-check-input\">
                    </div>
                    <div class=\"form-text\">";
        // line 487
        echo ($context["help_override"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 491
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"notify\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 500
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 502
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 506
        echo ($context["button_history_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 509
        echo ($context["order_id"] ?? null);
        echo "\" id=\"input-order-id\"/>
            </form>
          </div>

          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 518
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 523
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 524
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 526
        if (($context["forwarded_ip"] ?? null)) {
            // line 527
            echo "                    <tr>
                      <td>";
            // line 528
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 529
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 532
        echo "                  <tr>
                    <td>";
        // line 533
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 534
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 537
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 538
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 544
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 545
            echo "            <div id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 545);
            echo "\" class=\"tab-pane\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 545);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 547
        echo "        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 557
        echo ($context["text_customer"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">";
        // line 563
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"customer\" value=\"";
        // line 565
        echo ($context["firstname"] ?? null);
        echo " ";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"";
        echo ($context["customer_add"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_customer_add"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 567
        echo ($context["customer_id"] ?? null);
        echo "\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">";
        // line 571
        echo ($context["entry_customer_group"] ?? null);
        echo "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
        // line 572
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 573
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 573);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 573) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 573);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 575
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">";
        // line 578
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">";
        // line 582
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">";
        // line 586
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 588
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/> <a href=\"mailto:";
        echo ($context["email"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 592
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
            <label for=\"input-telephone\" class=\"form-label\">";
        // line 593
        echo ($context["entry_telephone"] ?? null);
        echo "</label> <input type=\"text\" name=\"telephone\" value=\"";
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 596
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 597
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 597) == "account")) {
                // line 598
                echo "
              ";
                // line 599
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 599) == "select")) {
                    // line 600
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 600);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 601
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 601);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 601);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 601);
                    echo "]\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 601);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 602
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 603
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 603));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 604
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 604);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 604)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 604) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 604)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 604);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 606
                    echo "                  </select>
                  <div id=\"error-custom-field-";
                    // line 607
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 607);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 610
                echo "
              ";
                // line 611
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 611) == "radio")) {
                    // line 612
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 613
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 613);
                    echo "</label>
                  <div id=\"input-custom-field-";
                    // line 614
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 615
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 615));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 616
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 617
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 617);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 617);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 617) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 617);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 617);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 620
                    echo "                  </div>
                  <div id=\"error-custom-field-";
                    // line 621
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 621);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 624
                echo "
              ";
                // line 625
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 625) == "checkbox")) {
                    // line 626
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 626);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 627
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 627);
                    echo "</label>
                  <div id=\"input-custom-field-";
                    // line 628
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 628);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 629
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 629));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 630
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 631
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 631);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 631);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 631), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 631);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 631);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 634
                    echo "                  </div>
                  <div id=\"error-custom-field-";
                    // line 635
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 635);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 638
                echo "
              ";
                // line 639
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 639) == "text")) {
                    // line 640
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 640);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 641
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 641);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 641)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 641);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 642
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 642);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 645
                echo "
              ";
                // line 646
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 646) == "textarea")) {
                    // line 647
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 647);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 648
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 648);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 648);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 648);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 648);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 648);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 648);
                    echo "</textarea>
                  <div id=\"error-custom-field-";
                    // line 649
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 652
                echo "
              ";
                // line 653
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 653) == "file")) {
                    // line 654
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 654);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 655
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 655);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 657
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 658
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 658);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 658)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 658)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 658)));
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 658);
                    echo "\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 659
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659);
                    echo "\"";
                    if ( !(($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 660
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 660);
                    echo "\"";
                    if ( !(($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 660)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 662
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 662);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 665
                echo "
              ";
                // line 666
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 666) == "date")) {
                    // line 667
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 667);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 668
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 668);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 668);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 670
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 670);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 670)] ?? null) : null)) ? ((($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 670)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 670)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 670);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 670);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 673
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 673);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 676
                echo "
              ";
                // line 677
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 677) == "time")) {
                    // line 678
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 678);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 679
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 679);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 679);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 681
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 681);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 681)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 681)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 681)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 681);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 681);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 684
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 684);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 687
                echo "
              ";
                // line 688
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 688) == "datetime")) {
                    // line 689
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 689);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 690
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 690);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 690);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 692
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 692);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 692)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 692)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 692)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 692);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 692);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 695
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 695);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 698
                echo "
            ";
            }
            // line 700
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 701
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 702
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-cart\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 713
        echo ($context["text_cart_add"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-product\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 718
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-voucher\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 719
        echo ($context["tab_voucher"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-product\" class=\"tab-pane active\">
            <form id=\"form-product-add\">
              <fieldset class=\"mb-0\">
                <legend>";
        // line 725
        echo ($context["text_product_add"] ?? null);
        echo "</legend>
                <div class=\"mb-3\">
                  <label for=\"input-product\" class=\"form-label\">";
        // line 727
        echo ($context["entry_product"] ?? null);
        echo "</label> <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
                  <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 732
        echo ($context["entry_quantity"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </fieldset>
              <div id=\"option\"></div>
              <div id=\"subscription\"></div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 738
        echo ($context["button_save"] ?? null);
        echo "</button>
              </div>
            </form>
          </div>
          <div id=\"tab-voucher\" class=\"tab-pane\">
            <form id=\"form-voucher-add\">
              <fieldset class=\"mb-0\">
                <legend>";
        // line 745
        echo ($context["text_voucher_add"] ?? null);
        echo "</legend>
                <div class=\"mb-3 required\">
                  <label for=\"input-to-name\" class=\"form-label\">";
        // line 747
        echo ($context["entry_to_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"to_name\" value=\"\" placeholder=\"";
        echo ($context["entry_to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\"/>
                  <div id=\"error-to-name\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-to-email\" class=\"form-label\">";
        // line 751
        echo ($context["entry_to_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"to_email\" value=\"\" placeholder=\"";
        echo ($context["entry_to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\"/>
                  <div id=\"error-to-email\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-from-name\" class=\"form-label\">";
        // line 755
        echo ($context["entry_from_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"from_name\" value=\"\" placeholder=\"";
        echo ($context["entry_from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\"/>
                  <div id=\"error-from-name\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-from-email\" class=\"form-label\">";
        // line 759
        echo ($context["entry_from_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"from_email\" value=\"\" placeholder=\"";
        echo ($context["entry_from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\"/>
                  <div id=\"error-from-email\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-theme\" class=\"form-label\">";
        // line 763
        echo ($context["entry_theme"] ?? null);
        echo "</label> <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 764
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 765
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 765);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 765);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
        echo "                  </select>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-message\" class=\"form-label\">";
        // line 770
        echo ($context["entry_message"] ?? null);
        echo "</label> <textarea name=\"message\" rows=\"5\" placeholder=\"";
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\"></textarea>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-amount\" class=\"form-label\">";
        // line 773
        echo ($context["entry_amount"] ?? null);
        echo "</label> <input type=\"text\" name=\"amount\" value=\"";
        echo ($context["voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                  <div id=\"error-amount\" class=\"invalid-feedback\"></div>
                </div>
              </fieldset>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-voucher-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 778
        echo ($context["button_save"] ?? null);
        echo "</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 791
        echo ($context["text_affiliate"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\">
          <div class=\"mb-3\">
            <label for=\"input-affiliate\" class=\"form-label\">";
        // line 797
        echo ($context["entry_affiliate"] ?? null);
        echo "</label> <input type=\"text\" name=\"affiliate\" value=\"";
        echo ($context["affiliate"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/> <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        echo ($context["affiliate_id"] ?? null);
        echo "\" id=\"input-affiliate-id\"/>
            <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 801
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 812
        echo ($context["text_payment_address"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">";
        // line 818
        echo ($context["entry_address"] ?? null);
        echo "</label>
            <select name=\"payment_address_id\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected>";
        // line 820
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 822
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 822);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 822) == ($context["payment_address_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 822);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 822);
            echo ",";
            if (twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 822)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 822);
                echo ",";
            }
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 822);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 822);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 822);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 824
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 827
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["payment_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 831
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["payment_lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">";
        // line 835
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["payment_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 838
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["payment_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 842
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["payment_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\">";
        // line 845
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["payment_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 849
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["payment_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\">";
        // line 853
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"0\">";
        // line 854
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 855
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 856
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 856);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 856) == ($context["payment_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 856);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 858
        echo "            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 862
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-select\"></select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 865
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 866
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 866) == "address")) {
                // line 867
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 867) == "select")) {
                    // line 868
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 868);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 869
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 869);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 869);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 869);
                    echo "]\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 869);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 870
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 871
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 871));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 872
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 872);
                        echo "\"";
                        if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 872)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 872) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 872)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 872);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 874
                    echo "                  </select>
                  <div id=\"error-payment-custom-field-";
                    // line 875
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 875);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 878
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 878) == "radio")) {
                    // line 879
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 879);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 880
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 880);
                    echo "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 881
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 881);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 882
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 882));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 883
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 884
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 884);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 884);
                        echo "\" id=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 884);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 884)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 884) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 884)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 884);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 884);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 887
                    echo "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 888
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 888);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 891
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 891) == "checkbox")) {
                    // line 892
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 892);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 893
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 893);
                    echo "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 894
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 895
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 895));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 896
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 897
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 897);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 897);
                        echo "\" id=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 897);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_22 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 897)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 897), (($__internal_compile_23 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 897)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 897);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 897);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 900
                    echo "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 901
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 901);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 904
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 904) == "text")) {
                    // line 905
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 905);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 906
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 906);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_24 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906)] ?? null) : null)) ? ((($__internal_compile_25 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 906)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 906);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 907
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 907);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 910
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 910) == "textarea")) {
                    // line 911
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 911);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 912
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 912);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 912);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_26 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912)] ?? null) : null)) ? ((($__internal_compile_27 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 912)));
                    echo "</textarea>
                  <div id=\"error-payment-custom-field-";
                    // line 913
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 913);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 916
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 916) == "file")) {
                    // line 917
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 917);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 918
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 918);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 920
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 920);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 921
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921)] ?? null) : null)) ? ((($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921)] ?? null) : null)) : (""));
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-";
                    // line 922
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 922);
                    echo "\"";
                    if ( !(($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 922)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 923
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 923);
                    echo "\"";
                    if ( !(($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 923)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 925
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 925);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 928
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 928) == "date")) {
                    // line 929
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 929);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 930
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 930);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 930);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 932
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 932);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 932)] ?? null) : null)) ? ((($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 932)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 932)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 932);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 932);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 935
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 935);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 938
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 938) == "time")) {
                    // line 939
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 939);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 940
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 940);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 940);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 942
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 942);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 942)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 942)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 942)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 942);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 942);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 945
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 945);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 948
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 948) == "datetime")) {
                    // line 949
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 949);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 950
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 950);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 950);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 952
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_36 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952)] ?? null) : null)) ? ((($__internal_compile_37 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 952)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 952);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 955
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 955);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 958
                echo "            ";
            }
            // line 959
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 960
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 961
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-payment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> ";
        // line 972
        echo ($context["text_payment_method"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-method\">
          <p>";
        // line 977
        echo ($context["text_payment"] ?? null);
        echo "</p>
          <div id=\"payment-methods\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">";
        // line 980
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 991
        echo ($context["text_shipping_address"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\">
          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">";
        // line 997
        echo ($context["entry_address"] ?? null);
        echo "</label>
            <select name=\"shipping_address_id\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\">";
        // line 999
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 1000
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1001
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 1001);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 1001) == ($context["shipping_address_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 1001);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 1001);
            echo ",";
            if (twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 1001)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 1001);
                echo ",";
            }
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 1001);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 1001);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 1001);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1003
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 1006
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["shipping_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 1010
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["shipping_lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 1014
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 1017
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 1021
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 1024
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 1028
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 1032
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-select\">
              <option value=\"0\">";
        // line 1033
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 1034
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1035
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 1035);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 1035) == ($context["shipping_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 1035);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1037
        echo "            </select>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 1042
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-select\"></select>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>

          ";
        // line 1046
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 1047
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 1047) == "address")) {
                // line 1048
                echo "
              ";
                // line 1049
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1049) == "select")) {
                    // line 1050
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1050);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1051
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1051);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1051);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1051);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1051);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 1052
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 1053
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1053));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1054
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1054);
                        echo "\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1054)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1054) == (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1054)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1054);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1056
                    echo "                  </select>
                  <div id=\"error-shipping-custom-field-";
                    // line 1057
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1057);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1060
                echo "
              ";
                // line 1061
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1061) == "radio")) {
                    // line 1062
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1062);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1063
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1063);
                    echo "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 1064
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1064);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 1065
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1065));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1066
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 1067
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1067);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1067);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1067);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1067)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1067) == (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1067)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1067);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1067);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1070
                    echo "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1071
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1071);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1074
                echo "
              ";
                // line 1075
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1075) == "checkbox")) {
                    // line 1076
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1076);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1077
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1077);
                    echo "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 1078
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1078);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 1079
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1079));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1080
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 1081
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1081);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1081);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1081), (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1081);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1081);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1084
                    echo "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1085
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1085);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1088
                echo "
              ";
                // line 1089
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1089) == "text")) {
                    // line 1090
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1090);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1091
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1091);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091)] ?? null) : null)) ? ((($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1091)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1091);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 1092
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1092);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1095
                echo "
              ";
                // line 1096
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1096) == "textarea")) {
                    // line 1097
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1097);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1098
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1098);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1098);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1098);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1098);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1098);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1098);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1098)] ?? null) : null)) ? ((($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1098)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1098)));
                    echo "</textarea>
                  <div id=\"error-shipping-custom-field-";
                    // line 1099
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1099);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1102
                echo "
              ";
                // line 1103
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1103) == "file")) {
                    // line 1104
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1104);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1105);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1107
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1107);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 1108
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1108);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1108)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1108)] ?? null) : null)) : (""));
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1108);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 1109
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1109);
                    echo "\"";
                    if ( !(($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1109)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1110
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1110);
                    echo "\"";
                    if ( !(($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1110)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1112
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1112);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1115
                echo "
              ";
                // line 1116
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1116) == "date")) {
                    // line 1117
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1117);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1118
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1118);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1118);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1120
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1120);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1120)] ?? null) : null)) ? ((($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1120)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1120)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1120);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1120);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1123
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1123);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1126
                echo "
              ";
                // line 1127
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1127) == "time")) {
                    // line 1128
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1128);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1129
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1129);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1129);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1131
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1131);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_54 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1131)] ?? null) : null)) ? ((($__internal_compile_55 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1131)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1131)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1131);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1131);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1134
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1134);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1137
                echo "
              ";
                // line 1138
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1138) == "datetime")) {
                    // line 1139
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1139);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1140
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1140);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1140);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1142
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1142);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_56 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1142)] ?? null) : null)) ? ((($__internal_compile_57 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1142)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1142)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1142);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1142);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1145
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1145);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1148
                echo "
            ";
            }
            // line 1150
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1151
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 1152
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-shipping\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> ";
        // line 1163
        echo ($context["text_shipping_method"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-method\">
          <p>";
        // line 1168
        echo ($context["text_shipping"] ?? null);
        echo "</p>
          <div id=\"shipping-methods\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\">";
        // line 1171
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1182
        echo ($context["text_comment"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 1188
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 1191
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function() {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function() {
            \$(element).html('";
        // line 1206
        echo ($context["text_more"] ?? null);
        echo " <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function() {
            \$(element).html('";
        // line 1210
        echo ($context["text_less"] ?? null);
        echo " <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.createInvoiceNo&user_token=";
        // line 1217
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function() {
            \$('#button-invoice').button('loading');
        },
        complete: function() {
            \$('#button-invoice').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#invoice-value').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 1250
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: ";
        // line 1255
        echo ($context["customer_group_id"] ?? null);
        echo ",
                    name: '";
        // line 1256
        echo ($context["text_none"] ?? null);
        echo "',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">";
        // line 1308
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + (item['address'][i]['company'] ? item['address'][i]['company'] + ', ' : '') + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);

        \$('#payment-method-value').html('');
        \$('#shipping-method-value').html('');
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 1325
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

// Customer
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1354
        echo ($context["user_token"] ?? null);
        echo "&action=sale/customer&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-customer').button('loading');
        },
        complete: function() {
            \$('#button-customer').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#customer-value').html('<a href=\"index.php?route=customer/customer.form&user_token=";
        // line 1387
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val() + '\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Product
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1405
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        model: item['model'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product-id').val(item['value']);
        \$('#input-product').val(item['label']);

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1430
        echo twig_escape_filter($this->env, ($context["entry_option"] ?? null), "js");
        echo "</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1439
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1463
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<div class=\"form-check\">';
                        html += '  <input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/> ';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'image') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1513
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
        // line 1552
        echo ($context["upload"] ?? null);
        echo "\" data-oc-target=\"#input-option-' + option['product_option_id'] + '\" data-oc-size-max=\"";
        echo ($context["config_file_max_size"] ?? null);
        echo "\" data-oc-size-error=\"";
        echo twig_escape_filter($this->env, ($context["error_upload_size"] ?? null), "js");
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
        echo twig_escape_filter($this->env, ($context["button_upload"] ?? null), "js");
        echo "</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1594
        echo twig_escape_filter($this->env, ($context["entry_subscription"] ?? null), "js");
        echo "</legend>';
            html += '  <div class=\"mb-3 required\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\">';
            html += '      <option value=\"\">";
        // line 1597
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '  <div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '\" class=\"form-text subscription d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>';
            html += '  </div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1624
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart.add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-product-add').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-product-add').button('loading');
        },
        complete: function() {
            \$('#button-product-add').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove product
\$('#order-products').on('submit', 'form', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1674
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/cart.remove',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(e.target).button('loading');
        },
        complete: function() {
            \$(e.target).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Voucher
\$('#form-voucher-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1713
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/voucher.add',
        type: 'post',
        data: \$('#form-voucher-add').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-voucher-add').button('loading');
        },
        complete: function() {
            \$('#button-voucher-add').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-voucher-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['error']) {
                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-to-name').val('');
                \$('#input-to-email').val('');
                \$('#input-from-name').val('');
                \$('#input-from-email').val('');
                \$('#input-message').val('');
                \$('#input-amount').val('";
        // line 1749
        echo twig_escape_filter($this->env, ($context["voucher_min"] ?? null), "js");
        echo "');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove voucher
\$('#order-vouchers').on('submit', 'form', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1771
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/voucher.remove',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(e.target).button('loading');
        },
        complete: function() {
            \$(e.target).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html('');
                \$('#shipping-method-value').html('');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-store').on('change', function(e) {
    e.preventDefault();

    \$('#button-refresh').trigger('click');
});

\$('#input-language').on('change', function(e) {
    e.preventDefault();

    \$('#button-refresh').trigger('click');
});

\$('#input-currency').on('change', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1821
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=localisation/currency',
        type: 'post',
        data: \$('#form-currency').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#input-currency').prop('disabled', true);
        },
        complete: function() {
            \$('#input-currency').prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Coupon
\$('#form-coupon').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1855
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/coupon',
        type: 'post',
        data: \$('#form-coupon').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-coupon').button('loading');
        },
        complete: function() {
            \$('#button-coupon').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Voucher
\$('#form-voucher').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1890
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/voucher',
        type: 'post',
        data: \$('#form-voucher').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-voucher').button('loading');
        },
        complete: function() {
            \$('#button-voucher').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reward
\$('#form-reward').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1925
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/reward',
        type: 'post',
        data: \$('#form-reward').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Reward&user_token=";
        // line 1965
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1985
        echo twig_escape_filter($this->env, ($context["button_reward_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1989
        echo twig_escape_filter($this->env, ($context["button_reward_add"] ?? null), "js");
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate.autocomplete&user_token=";
        // line 2005
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 2009
        echo ($context["text_none"] ?? null);
        echo "',
                    customer_id: 0
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate-id').val(item['value']);
        \$('#input-affiliate').val(item['label']);
    }
});

// Affiliate
\$('#form-affiliate').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2033
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/affiliate',
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-affiliate').button('loading');
        },
        complete: function() {
            \$('#button-affiliate').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#affiliate-value').html('<a href=\"index.php?route=marketing/affiliate.form&user_token=";
        // line 2054
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#affiliate-value').html('&nbsp;');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Commission&user_token=";
        // line 2077
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2097
        echo twig_escape_filter($this->env, ($context["button_commission_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2101
        echo twig_escape_filter($this->env, ($context["button_commission_add"] ?? null), "js");
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.address&user_token=";
        // line 2116
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#input-payment-country').val(json['country_id']);

            payment_zone_id = json['zone_id'];

            \$('#input-payment-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2169
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&action=sale/payment_address',
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-payment-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-payment-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + \"<br/>\";

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + \"<br/>\";
                }

                address += \$('#input-payment-address-1').val() + \"<br/>\";

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + \"<br/>\";
                }

                address += \$('#input-payment-city').val() + \"<br/>\";

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + \"<br/>\";
                }

                address += \$('#input-payment-zone option:selected').text() + \"<br/>\";
                address += \$('#input-payment-country option:selected').text();

                \$('#payment-address-value').html(address);

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var payment_zone_id = '";
        // line 2237
        echo ($context["payment_zone_id"] ?? null);
        echo "';

\$('#input-payment-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 2243
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-payment-postcode').parent().addClass('required');
            } else {
                \$('#input-payment-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 2258
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == payment_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 2271
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
            }

            \$('#input-payment-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-payment-country').trigger('change');

// Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.address&user_token=";
        // line 2289
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#input-shipping-country').val(json['country_id']);

            shipping_zone_id = json['zone_id'];

            \$('#input-shipping-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2342
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        complete: function() {
            \$('#button-shipping-address').button('reset');
        },
        success: function(json) {
            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-shipping-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-shipping-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + \"<br/>\";

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + \"<br/>\";
                }

                address += \$('#input-shipping-address-1').val() + \"<br/>\";

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + \"<br/>\";
                }

                address += \$('#input-shipping-city').val() + \"<br/>\";

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + \"<br/>\";
                }

                address += \$('#input-shipping-zone option:selected').text() + \"<br/>\";
                address += \$('#input-shipping-country option:selected').text();

                \$('#shipping-address-value').html(address);

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var shipping_zone_id = '";
        // line 2412
        echo ($context["shipping_zone_id"] ?? null);
        echo "';

\$('#input-shipping-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 2418
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-shipping-postcode').parent().addClass('required');
            } else {
                \$('#input-shipping-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 2433
        echo twig_escape_filter($this->env, ($context["text_select"] ?? null), "js");
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 2446
        echo twig_escape_filter($this->env, ($context["text_none"] ?? null), "js");
        echo "</option>';
            }

            \$('#input-shipping-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-shipping-country').trigger('change');

// Shipping Method
\$('#button-shipping-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2464
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['shipping_methods']) {
                html = '';

                for (i in json['shipping_methods']) {
                    html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            html += '<div class=\"form-check\">';

                            var code = i + '-' + j.replaceAll('_', '-');

                            html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + code + '\"';

                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-shipping-method-' + code + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                            html += '</div>';
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#shipping-methods').html(html);

                \$('#modal-shipping').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2523
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_method.save&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-shipping-method').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        complete: function() {
            \$('#button-shipping-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-method').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-shipping-method').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shipping-method-value').html(\$('input[name=\\'shipping_method\\']:checked').parent().find('label').text());
                \$('#input-shipping-code').val(\$('input[name=\\'shipping_method\\']:checked').val());

                \$('#payment-method-value').html('');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Method
\$('#button-payment-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2565
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['payment_methods']) {
                var html = '';

                for (i in json['payment_methods']) {
                    html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                    if (!json['payment_methods'][i]['error']) {
                        for (j in json['payment_methods'][i]['option']) {
                            html += '<div class=\"form-check\">';

                            var code = i + '-' + j.replaceAll('_', '-');

                            html += '<input type=\"radio\" name=\"payment_method\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + code + '\"';

                            if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-payment-method-' + code + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                            html += '</div>';
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#payment-methods').html(html);

                \$('#modal-payment').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2624
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_method.save&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-payment-method').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        complete: function() {
            \$('#button-payment-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-method').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-payment-method').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method-value').html(\$('input[name=\\'payment_method\\']:checked').parent().find('label').text());
                \$('#input-payment-code').val(\$('input[name=\\'payment_method\\']:checked').val());

                \$('#button-refresh').trigger('click');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2665
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order.comment&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        type: 'post',
        data: \$('#form-comment').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-comment').button('loading');
        },
        complete: function() {
            \$('#button-comment').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#form-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#comment-value').html(\$('#input-comment').val().replace(/([^>\\r\\n]?)(\\r\\n|\\n\\r|\\r|\\n)/g, '\$1<br/>\$2'));
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products, vouchers and totals
\$('#button-refresh').on('click', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2699
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-refresh').button('loading');
            \$('#button-confirm').prop('disabled', true);
        },
        complete: function() {
            \$('#button-refresh').button('reset');
            \$('#button-confirm').prop('disabled', false);
        },
        success: function(json) {
            html = '';

            if (json['products'].length) {
                for (i = 0; i < json['products'].length; i++) {
                    product = json['products'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-start\"><a href=\"index.php?route=catalog/product.form&user_token=";
        // line 2717
        echo ($context["user_token"] ?? null);
        echo "&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');

                    if (product['option']) {
                        for (j = 0; j < product['option'].length; j++) {
                            option = product['option'][j];

                            html += '<br/>';
                            html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small>';
                        }
                    }

                    if (product['reward']) {
                        html += '<br/>';
                        html += '  - <small>";
        // line 2730
        echo twig_escape_filter($this->env, ($context["text_points"] ?? null), "js");
        echo ": ' + product['reward'] + '</small>';
                    }

                    if (product['subscription']) {
                        html += '<br/>';
                        html += '  - <small>";
        // line 2735
        echo twig_escape_filter($this->env, ($context["text_subscription"] ?? null), "js");
        echo ": <a href=\"index.php?route=sale/subscription.info&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&subscription_id=";
        echo twig_get_attribute($this->env, $this->source, ($context["order_product"] ?? null), "subscription_id", [], "any", false, false, false, 2735);
        echo "\" target=\"_blank\">' + product['subscription'] + '</small>';
                    }

                    html += '  </td>';
                    html += '  <td class=\"text-start\">' + product['model'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['price'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['total'] + '</td>';
                    html += '  <td class=\"text-end\">';
                    html += '    <form>';
                    html += '      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2745
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
                    html += '      <input type=\"hidden\" name=\"key\" value=\"' + product['cart_id'] + '\"/>';
                    html += '    </form>';
                    html += '  </td>';
                    html += '</tr>';
                }
            }

            \$('#order-products').html(html);

            html = '';

            if (json['vouchers'].length) {
                for (i in json['vouchers']) {
                    voucher = json['vouchers'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-start\">' + voucher['description'] + '</td>';
                    html += '  <td class=\"text-start\"></td>';
                    html += '  <td class=\"text-end\">1</td>';
                    html += '  <td class=\"text-end\">' + voucher['amount'] + '</td>';
                    html += '  <td class=\"text-end\">' + voucher['amount'] + '</td>';
                    html += '  <td class=\"text-end\">';
                    html += '    <form>';
                    html += '      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2769
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
                    html += '      <input type=\"hidden\" name=\"key\" value=\"' + voucher['key'] + '\"/>';
                    html += '    </form>';
                    html += '  </td>';
                    html += '</tr>';
                }
            }

            if (!json['products'].length && !json['vouchers'].length) {
                html += '<tr>';
                html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2779
        echo twig_escape_filter($this->env, ($context["text_no_results"] ?? null), "js");
        echo "</td>';
                html += '</tr>';
            }

            \$('#order-vouchers').html(html);

            // Totals
            html = '';

            if (json['totals'].length) {
                for (i in json['totals']) {
                    total = json['totals'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
                    html += '  <td class=\"text-end\" style=\"width: 1px;\">' + total['text'] + '</td>';
                    html += '</tr>';
                }
            }

            \$('#order-totals').html(html);

            if (json['shipping_required']) {
                \$('#shipping-address').removeClass('d-none');
                \$('#shipping-method').removeClass('d-none');
                \$('#button-shipping').prop('disabled', false);
            } else {
                \$('#shipping-address').addClass('d-none');
                \$('#shipping-method').addClass('d-none');
                \$('#button-shipping').prop('disabled', true);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Checkout
\$('#button-confirm').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2822
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order.confirm&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                for (i in json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'][i] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#input-order-id').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#reward-value').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#reward-value').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#commission-value').html(json['commission']);
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#commission-value').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2885
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order.addHistory&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order.history&user_token=";
        // line 2906
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 2917
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5218 => 2917,  5204 => 2906,  5180 => 2885,  5114 => 2822,  5068 => 2779,  5055 => 2769,  5028 => 2745,  5011 => 2735,  5003 => 2730,  4987 => 2717,  4966 => 2699,  4929 => 2665,  4885 => 2624,  4823 => 2565,  4778 => 2523,  4716 => 2464,  4695 => 2446,  4679 => 2433,  4661 => 2418,  4652 => 2412,  4579 => 2342,  4523 => 2289,  4502 => 2271,  4486 => 2258,  4468 => 2243,  4459 => 2237,  4388 => 2169,  4332 => 2116,  4314 => 2101,  4307 => 2097,  4284 => 2077,  4258 => 2054,  4234 => 2033,  4207 => 2009,  4200 => 2005,  4181 => 1989,  4174 => 1985,  4151 => 1965,  4108 => 1925,  4070 => 1890,  4032 => 1855,  3995 => 1821,  3942 => 1771,  3917 => 1749,  3878 => 1713,  3836 => 1674,  3783 => 1624,  3753 => 1597,  3747 => 1594,  3696 => 1552,  3654 => 1513,  3601 => 1463,  3574 => 1439,  3562 => 1430,  3534 => 1405,  3513 => 1387,  3477 => 1354,  3445 => 1325,  3425 => 1308,  3370 => 1256,  3366 => 1255,  3358 => 1250,  3320 => 1217,  3310 => 1210,  3303 => 1206,  3285 => 1191,  3277 => 1188,  3268 => 1182,  3254 => 1171,  3248 => 1168,  3240 => 1163,  3226 => 1152,  3223 => 1151,  3217 => 1150,  3213 => 1148,  3207 => 1145,  3195 => 1142,  3188 => 1140,  3183 => 1139,  3181 => 1138,  3178 => 1137,  3172 => 1134,  3160 => 1131,  3153 => 1129,  3148 => 1128,  3146 => 1127,  3143 => 1126,  3137 => 1123,  3125 => 1120,  3118 => 1118,  3113 => 1117,  3111 => 1116,  3108 => 1115,  3102 => 1112,  3091 => 1110,  3081 => 1109,  3073 => 1108,  3061 => 1107,  3056 => 1105,  3051 => 1104,  3049 => 1103,  3046 => 1102,  3040 => 1099,  3024 => 1098,  3019 => 1097,  3017 => 1096,  3014 => 1095,  3008 => 1092,  2994 => 1091,  2989 => 1090,  2987 => 1089,  2984 => 1088,  2978 => 1085,  2975 => 1084,  2954 => 1081,  2951 => 1080,  2947 => 1079,  2943 => 1078,  2939 => 1077,  2934 => 1076,  2932 => 1075,  2929 => 1074,  2923 => 1071,  2920 => 1070,  2899 => 1067,  2896 => 1066,  2892 => 1065,  2888 => 1064,  2884 => 1063,  2879 => 1062,  2877 => 1061,  2874 => 1060,  2868 => 1057,  2865 => 1056,  2850 => 1054,  2846 => 1053,  2842 => 1052,  2832 => 1051,  2827 => 1050,  2825 => 1049,  2822 => 1048,  2819 => 1047,  2815 => 1046,  2808 => 1042,  2801 => 1037,  2786 => 1035,  2782 => 1034,  2778 => 1033,  2774 => 1032,  2763 => 1028,  2752 => 1024,  2742 => 1021,  2731 => 1017,  2721 => 1014,  2710 => 1010,  2699 => 1006,  2694 => 1003,  2665 => 1001,  2661 => 1000,  2657 => 999,  2652 => 997,  2643 => 991,  2629 => 980,  2623 => 977,  2615 => 972,  2601 => 961,  2598 => 960,  2592 => 959,  2589 => 958,  2583 => 955,  2571 => 952,  2564 => 950,  2559 => 949,  2556 => 948,  2550 => 945,  2538 => 942,  2531 => 940,  2526 => 939,  2523 => 938,  2517 => 935,  2505 => 932,  2498 => 930,  2493 => 929,  2490 => 928,  2484 => 925,  2473 => 923,  2463 => 922,  2455 => 921,  2443 => 920,  2438 => 918,  2433 => 917,  2430 => 916,  2424 => 913,  2410 => 912,  2405 => 911,  2402 => 910,  2396 => 907,  2382 => 906,  2377 => 905,  2374 => 904,  2368 => 901,  2365 => 900,  2344 => 897,  2341 => 896,  2337 => 895,  2333 => 894,  2329 => 893,  2324 => 892,  2321 => 891,  2315 => 888,  2312 => 887,  2291 => 884,  2288 => 883,  2284 => 882,  2280 => 881,  2276 => 880,  2271 => 879,  2268 => 878,  2262 => 875,  2259 => 874,  2244 => 872,  2240 => 871,  2236 => 870,  2226 => 869,  2221 => 868,  2218 => 867,  2215 => 866,  2211 => 865,  2205 => 862,  2199 => 858,  2184 => 856,  2180 => 855,  2176 => 854,  2172 => 853,  2161 => 849,  2150 => 845,  2140 => 842,  2129 => 838,  2119 => 835,  2108 => 831,  2097 => 827,  2092 => 824,  2063 => 822,  2059 => 821,  2055 => 820,  2050 => 818,  2041 => 812,  2027 => 801,  2014 => 797,  2005 => 791,  1989 => 778,  1977 => 773,  1969 => 770,  1964 => 767,  1953 => 765,  1949 => 764,  1945 => 763,  1936 => 759,  1927 => 755,  1918 => 751,  1909 => 747,  1904 => 745,  1894 => 738,  1883 => 732,  1873 => 727,  1868 => 725,  1859 => 719,  1855 => 718,  1847 => 713,  1833 => 702,  1830 => 701,  1824 => 700,  1820 => 698,  1814 => 695,  1802 => 692,  1795 => 690,  1790 => 689,  1788 => 688,  1785 => 687,  1779 => 684,  1767 => 681,  1760 => 679,  1755 => 678,  1753 => 677,  1750 => 676,  1744 => 673,  1732 => 670,  1725 => 668,  1720 => 667,  1718 => 666,  1715 => 665,  1709 => 662,  1698 => 660,  1688 => 659,  1680 => 658,  1668 => 657,  1663 => 655,  1658 => 654,  1656 => 653,  1653 => 652,  1647 => 649,  1633 => 648,  1628 => 647,  1626 => 646,  1623 => 645,  1617 => 642,  1603 => 641,  1598 => 640,  1596 => 639,  1593 => 638,  1587 => 635,  1584 => 634,  1563 => 631,  1560 => 630,  1556 => 629,  1552 => 628,  1548 => 627,  1543 => 626,  1541 => 625,  1538 => 624,  1532 => 621,  1529 => 620,  1508 => 617,  1505 => 616,  1501 => 615,  1497 => 614,  1493 => 613,  1488 => 612,  1486 => 611,  1483 => 610,  1477 => 607,  1474 => 606,  1459 => 604,  1455 => 603,  1451 => 602,  1441 => 601,  1436 => 600,  1434 => 599,  1431 => 598,  1428 => 597,  1424 => 596,  1414 => 593,  1408 => 592,  1397 => 588,  1392 => 586,  1381 => 582,  1370 => 578,  1365 => 575,  1350 => 573,  1346 => 572,  1342 => 571,  1335 => 567,  1322 => 565,  1317 => 563,  1308 => 557,  1296 => 547,  1285 => 545,  1281 => 544,  1272 => 538,  1268 => 537,  1262 => 534,  1258 => 533,  1255 => 532,  1249 => 529,  1245 => 528,  1242 => 527,  1240 => 526,  1235 => 524,  1231 => 523,  1223 => 518,  1211 => 509,  1205 => 506,  1198 => 502,  1193 => 500,  1181 => 491,  1174 => 487,  1165 => 481,  1159 => 477,  1144 => 475,  1140 => 474,  1134 => 471,  1129 => 469,  1122 => 465,  1118 => 464,  1111 => 459,  1100 => 457,  1096 => 456,  1092 => 455,  1088 => 454,  1082 => 451,  1073 => 445,  1069 => 444,  1064 => 441,  1055 => 438,  1051 => 437,  1048 => 436,  1044 => 435,  1033 => 426,  1029 => 424,  1023 => 422,  1021 => 421,  1016 => 419,  1002 => 408,  998 => 406,  994 => 404,  988 => 402,  986 => 401,  981 => 399,  970 => 391,  966 => 389,  962 => 387,  956 => 385,  954 => 384,  949 => 382,  941 => 379,  929 => 369,  923 => 367,  920 => 366,  913 => 363,  910 => 362,  903 => 359,  900 => 358,  893 => 355,  890 => 354,  883 => 351,  880 => 350,  873 => 347,  870 => 346,  863 => 343,  860 => 342,  851 => 339,  849 => 338,  843 => 335,  835 => 332,  826 => 325,  820 => 323,  817 => 322,  810 => 319,  808 => 318,  805 => 317,  798 => 314,  796 => 313,  793 => 312,  786 => 309,  784 => 308,  781 => 307,  774 => 304,  772 => 303,  769 => 302,  762 => 299,  760 => 298,  757 => 297,  750 => 294,  748 => 293,  745 => 292,  736 => 289,  734 => 288,  728 => 285,  719 => 279,  711 => 273,  705 => 271,  695 => 269,  693 => 268,  689 => 266,  685 => 264,  679 => 262,  677 => 261,  672 => 259,  661 => 250,  657 => 248,  647 => 246,  645 => 245,  640 => 243,  632 => 237,  626 => 235,  616 => 233,  614 => 232,  608 => 229,  603 => 227,  587 => 218,  576 => 210,  568 => 209,  557 => 201,  549 => 200,  537 => 192,  522 => 190,  518 => 189,  505 => 180,  490 => 178,  486 => 177,  473 => 168,  458 => 166,  454 => 165,  439 => 152,  435 => 150,  431 => 148,  429 => 147,  424 => 144,  419 => 141,  413 => 139,  407 => 137,  405 => 136,  402 => 135,  399 => 134,  388 => 129,  384 => 128,  378 => 125,  374 => 124,  368 => 121,  365 => 120,  361 => 119,  357 => 117,  346 => 112,  342 => 111,  337 => 108,  331 => 106,  329 => 105,  325 => 104,  321 => 103,  317 => 102,  313 => 101,  309 => 99,  300 => 97,  297 => 96,  295 => 95,  292 => 94,  285 => 92,  282 => 91,  280 => 90,  277 => 89,  274 => 88,  268 => 87,  259 => 86,  252 => 85,  250 => 84,  247 => 83,  242 => 82,  240 => 81,  231 => 79,  228 => 78,  224 => 77,  216 => 73,  212 => 71,  210 => 70,  206 => 69,  202 => 68,  198 => 67,  194 => 66,  190 => 65,  178 => 56,  173 => 54,  163 => 46,  155 => 44,  143 => 42,  141 => 41,  136 => 39,  128 => 33,  124 => 31,  118 => 29,  116 => 28,  109 => 25,  104 => 23,  94 => 16,  87 => 11,  76 => 9,  72 => 8,  67 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_info.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/sale/order_info.twig");
    }
}
