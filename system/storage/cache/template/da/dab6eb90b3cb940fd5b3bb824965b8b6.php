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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_bc0d57e9cef4a3778cedcf726061ddd3 extends Template
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
        echo "
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row mb-3\">

        ";
        // line 14
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 15
            echo "          <div class=\"col-sm\">
            <div class=\"image magnific-popup\">

              ";
            // line 18
            if (($context["thumb"] ?? null)) {
                // line 19
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 21
            echo "
              ";
            // line 22
            if (($context["images"] ?? null)) {
                // line 23
                echo "                <div>
                  ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 25
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 25);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 25);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"img-thumbnail\"/></a>&nbsp;
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                </div>
              ";
            }
            // line 29
            echo "
            </div>
          </div>
        ";
        }
        // line 33
        echo "
        <div class=\"col-sm\">
          <h1>";
        // line 35
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">

            ";
        // line 38
        if (($context["manufacturer"] ?? null)) {
            // line 39
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 41
        echo "
            <li>";
        // line 42
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>

            ";
        // line 44
        if (($context["reward"] ?? null)) {
            // line 45
            echo "              <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 47
        echo "
            <li>";
        // line 48
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>

          ";
        // line 51
        if (($context["price"] ?? null)) {
            // line 52
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 53
            if ( !($context["special"] ?? null)) {
                // line 54
                echo "                <li>
                  <h2><span class=\"price-new\">";
                // line 55
                echo ($context["price"] ?? null);
                echo "</span></h2>
                </li>
              ";
            } else {
                // line 58
                echo "                <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2><span class=\"price-new\">";
                // line 59
                echo ($context["special"] ?? null);
                echo "</span></h2></li>
              ";
            }
            // line 61
            echo "
              ";
            // line 62
            if (($context["tax"] ?? null)) {
                // line 63
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
              ";
            }
            // line 65
            echo "
              ";
            // line 66
            if (($context["points"] ?? null)) {
                // line 67
                echo "                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
              ";
            }
            // line 69
            echo "
              ";
            // line 70
            if (($context["discounts"] ?? null)) {
                // line 71
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 75
                    echo "                  <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 75);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 75);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "              ";
            }
            // line 78
            echo "            </ul>
          ";
        }
        // line 80
        echo "
          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"";
        // line 83
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"";
        // line 84
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 86
        echo ($context["product_id"] ?? null);
        echo "\"/>
          </form>
          <br/>
          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 91
        if (($context["options"] ?? null)) {
            // line 92
            echo "            <hr>
              <h3>";
            // line 93
            echo ($context["text_option"] ?? null);
            echo "</h3>
              <div>
                ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 96
                echo "
                  ";
                // line 97
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 97) == "select")) {
                    // line 98
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 98)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 99);
                    echo "</label>
                      <select name=\"option[";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                    echo "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 101
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 102
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 102));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 103
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 103);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 103);
                        echo "
                            ";
                        // line 104
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 104)) {
                            // line 105
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 105);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 105);
                            echo ")
                            ";
                        }
                        // line 106
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "                      </select>
                      <div id=\"error-option-";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 109);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 112
                echo "
                  ";
                // line 113
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 113) == "radio")) {
                    // line 114
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 114)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 115);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 116);
                    echo "\">
                        ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 117));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 118
                        echo "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                        echo "\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 120);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 120)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 120);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 120);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 120)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 120);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 120);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 121
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 121);
                        echo "
                              ";
                        // line 122
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122)) {
                            // line 123
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 123);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 123);
                            echo ")
                              ";
                        }
                        // line 125
                        echo "                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 129);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 132
                echo "
                  ";
                // line 133
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 133) == "checkbox")) {
                    // line 134
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 134)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 135);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    echo "\">
                        ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 138
                        echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        echo "\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        echo "\" class=\"form-check-label\">
                              ";
                        // line 141
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 141)) {
                            // line 142
                            echo "                                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 142);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 142);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 143
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 143);
                        echo "
                              ";
                        // line 144
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144)) {
                            // line 145
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 145);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145);
                            echo ")
                              ";
                        }
                        // line 146
                        echo "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 153
                echo "
                  ";
                // line 154
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 154) == "text")) {
                    // line 155
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 155)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 156);
                    echo "</label>
                      <input type=\"text\" name=\"option[";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 157);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 157);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    echo "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 158);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 161
                echo "
                  ";
                // line 162
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 162) == "textarea")) {
                    // line 163
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 163)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164);
                    echo "</label>
                      <textarea name=\"option[";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 165);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 165);
                    echo "</textarea>
                      <div id=\"error-option-";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 169
                echo "
                  ";
                // line 170
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 170) == "file")) {
                    // line 171
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 171)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"button-upload-";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 172);
                    echo "</label>
                      <div>
                        <button type=\"button\" id=\"button-upload-";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"option[";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    echo "\"/>
                      </div>
                      <div id=\"error-option-";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 180
                echo "
                  ";
                // line 181
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 181) == "date")) {
                    // line 182
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 182)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 183);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 185);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "\" class=\"form-control date\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 191
                echo "
                  ";
                // line 192
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 192) == "datetime")) {
                    // line 193
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 193)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 196);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "\" class=\"form-control datetime\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 202
                echo "
                  ";
                // line 203
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 203) == "time")) {
                    // line 204
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 204)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 205);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 207);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\" class=\"form-control time\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 213
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                ";
        }
        // line 216
        echo "
                ";
        // line 217
        if (($context["subscription_plans"] ?? null)) {
            // line 218
            echo "                  <hr/>
                  <h3>";
            // line 219
            echo ($context["text_subscription"] ?? null);
            echo "</h3>
                  <div class=\"mb-3 required\">

                    <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                      <option value=\"\">";
            // line 223
            echo ($context["text_select"] ?? null);
            echo "</option>
                      ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 225
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 225);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 225);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                    </select>

                    ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 230
                echo "                      <div id=\"subscription-description-";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 230);
                echo "\" class=\"form-text subscription d-none\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 230);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "                    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>

                  </div>
                ";
        }
        // line 236
        echo "
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 238
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 239
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 240
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                    <input type=\"hidden\" name=\"selected_color\" id=\"input-selected-color\" value=\"\"/>
                  <div id=\"error-quantity\" class=\"form-text\"></div>
                  <br/>
                  ";
        // line 244
        if (((($context["product_extra_feature_status"] ?? null) > 0) && ($context["custom_color"] ?? null))) {
            // line 245
            echo "                        <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\" disabled>";
            echo ($context["button_cart"] ?? null);
            echo "</button>
                    ";
        } else {
            // line 247
            echo "                        <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
                    ";
        }
        // line 249
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the Add to Cart button
            var addToCartButton = document.getElementById('button-cart');
            
            // Get the hidden input field for the selected color
            var selectedColorInput = document.getElementById('input-selected-color');
            
            // Get all the radio buttons
            var colorRadios = document.querySelectorAll('input[name=\"selected_color\"]');
            
            // Attach an event listener to each radio button
            colorRadios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    // Enable the Add to Cart button when a color is selected
                    if (radio.checked) {
                        selectedColorInput.value = radio.value; // Update the hidden input field with the selected color
                        addToCartButton.disabled = false;
                    }
                });
            });
        });
    </script>

                </div>

                ";
        // line 275
        if ((($context["minimum"] ?? null) > 1)) {
            // line 276
            echo "                  <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 278
        echo "              </div>
              ";
        // line 279
        if (($context["review_status"] ?? null)) {
            // line 280
            echo "                <div class=\"rating\">
                  <p>";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 282
                echo "                      ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 283
                    echo "                        <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                } else {
                    // line 285
                    echo "                        <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                }
                // line 287
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                    <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["text_reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
                </div>
              ";
        }
        // line 291
        echo "            </form>
          </div>
        </div>
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 295
        echo ($context["tab_description"] ?? null);
        echo "</a></li>

          ";
        // line 297
        if (($context["attribute_groups"] ?? null)) {
            // line 298
            echo "            <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
          ";
        }
        // line 300
        echo "
          ";
        // line 301
        if (($context["review_status"] ?? null)) {
            // line 302
            echo "            <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
          ";
        }
        // line 304
        echo " ";
        if (($context["product_extra_feature_status"] ?? null)) {
            // line 305
            echo "        <li class=\"nav-item\"><a href=\"#tab-custom-data\" data-bs-toggle=\"tab\" class=\"nav-link\">Custom Data</a></li>
    ";
        }
        // line 307
        echo "        </ul>
        <div class=\"tab-content\">

          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">";
        // line 310
        echo ($context["description"] ?? null);
        echo "</div>

          ";
        // line 312
        if (($context["attribute_groups"] ?? null)) {
            // line 313
            echo "            <div id=\"tab-specification\" class=\"tab-pane fade\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 317
                echo "                    <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 319);
                echo "</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 323));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 324
                    echo "                        <tr>
                          <td>";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 325);
                    echo "</td>
                          <td>";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 326);
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "                </table>
              </div>
            </div>
          ";
        }
        // line 335
        echo "
          ";
        // line 336
        if (($context["review_status"] ?? null)) {
            // line 337
            echo "            <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            echo ($context["review"] ?? null);
            echo "</div>
          ";
        }
        // line 339
        echo "<!-- New Content Section for Custom Data -->
    ";
        // line 340
        if (((($context["custom_name"] ?? null) || ($context["custom_color"] ?? null)) || ($context["custom_image"] ?? null))) {
            // line 341
            echo "        <div id=\"tab-custom-data\" class=\"tab-pane fade mb-4\">
            ";
            // line 342
            if (($context["custom_name"] ?? null)) {
                // line 343
                echo "                <p><strong>Custom Name:</strong> ";
                echo ($context["custom_name"] ?? null);
                echo "</p>
            ";
            }
            // line 345
            echo "            ";
            if (($context["custom_color"] ?? null)) {
                // line 346
                echo "    <p><strong>Custom Color:</strong></p>
   <div id=\"custom-colors\">
    ";
                // line 348
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["custom_color"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                    // line 349
                    echo "        <div class=\"form-check\">
            <input type=\"radio\" name=\"selected_color\" value=\"";
                    // line 350
                    echo $context["color"];
                    echo "\" id=\"color-";
                    echo $context["color"];
                    echo "\" class=\"form-check-input\">
            <label for=\"color-";
                    // line 351
                    echo $context["color"];
                    echo "\" class=\"form-check-label\">";
                    echo $context["color"];
                    echo "</label>
        </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "</div>

";
            }
            // line 357
            echo "
            ";
            // line 358
            if (($context["custom_image"] ?? null)) {
                // line 359
                echo "                <a href=\"";
                echo ($context["custom_popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"image-popup\">
        <p><strong>Custom Image:</strong> <img src=\"";
                // line 360
                echo ($context["custom_image"] ?? null);
                echo "\" alt=\"";
                echo ($context["custom_name"] ?? null);
                echo "\" /></p>
    </a>
            ";
            }
            // line 363
            echo "        </div>
    ";
        }
        // line 365
        echo "        </div>
      </div>

      ";
        // line 368
        if (($context["products"] ?? null)) {
            // line 369
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
          ";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 372
                echo "            <div class=\"col mb-3\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "        </div>
      ";
        }
        // line 376
        echo "
      ";
        // line 377
        if (($context["tags"] ?? null)) {
            // line 378
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 379
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 380
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 380);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 380);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "end", [], "any", false, false, false, 380)) {
                    echo ",";
                }
                // line 381
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            echo "        </p>
      ";
        }
        // line 384
        echo "
      ";
        // line 385
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 386
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function(e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 401
        echo ($context["language"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#header-cart').load('index.php?route=common/cart.info');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
\$(document).ready(function() {
    \$('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: true, // Ensures the close button is inside the popup
        image: {
            verticalFit: true
        },
        // Optional: Customize the close button icon
        tClose: 'Close (Esc)', // Alt text for close button
        closeMarkup: '<button title=\"%title%\" type=\"button\" class=\"mfp-close\">&times;</button>', // Custom close button markup
    });
});

//--></script>
";
        // line 463
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1301 => 463,  1236 => 401,  1218 => 386,  1214 => 385,  1211 => 384,  1207 => 382,  1193 => 381,  1184 => 380,  1167 => 379,  1162 => 378,  1160 => 377,  1157 => 376,  1153 => 374,  1144 => 372,  1140 => 371,  1134 => 369,  1132 => 368,  1127 => 365,  1123 => 363,  1115 => 360,  1108 => 359,  1106 => 358,  1103 => 357,  1098 => 354,  1087 => 351,  1081 => 350,  1078 => 349,  1074 => 348,  1070 => 346,  1067 => 345,  1061 => 343,  1059 => 342,  1056 => 341,  1054 => 340,  1051 => 339,  1045 => 337,  1043 => 336,  1040 => 335,  1034 => 331,  1027 => 329,  1018 => 326,  1014 => 325,  1011 => 324,  1007 => 323,  1000 => 319,  996 => 317,  992 => 316,  987 => 313,  985 => 312,  980 => 310,  975 => 307,  971 => 305,  968 => 304,  962 => 302,  960 => 301,  957 => 300,  951 => 298,  949 => 297,  944 => 295,  938 => 291,  929 => 288,  923 => 287,  919 => 285,  915 => 283,  912 => 282,  908 => 281,  905 => 280,  903 => 279,  900 => 278,  894 => 276,  892 => 275,  864 => 249,  858 => 247,  852 => 245,  850 => 244,  843 => 240,  839 => 239,  835 => 238,  831 => 236,  825 => 232,  814 => 230,  810 => 229,  806 => 227,  795 => 225,  791 => 224,  787 => 223,  780 => 219,  777 => 218,  775 => 217,  772 => 216,  769 => 215,  762 => 213,  756 => 210,  746 => 207,  739 => 205,  732 => 204,  730 => 203,  727 => 202,  721 => 199,  711 => 196,  704 => 194,  697 => 193,  695 => 192,  692 => 191,  686 => 188,  676 => 185,  669 => 183,  662 => 182,  660 => 181,  657 => 180,  651 => 177,  644 => 175,  630 => 174,  623 => 172,  616 => 171,  614 => 170,  611 => 169,  605 => 166,  595 => 165,  589 => 164,  582 => 163,  580 => 162,  577 => 161,  571 => 158,  561 => 157,  555 => 156,  548 => 155,  546 => 154,  543 => 153,  537 => 150,  534 => 149,  526 => 146,  519 => 145,  517 => 144,  512 => 143,  499 => 142,  497 => 141,  493 => 140,  485 => 139,  482 => 138,  478 => 137,  474 => 136,  470 => 135,  463 => 134,  461 => 133,  458 => 132,  452 => 129,  449 => 128,  441 => 125,  434 => 123,  432 => 122,  427 => 121,  411 => 120,  403 => 119,  400 => 118,  396 => 117,  392 => 116,  388 => 115,  381 => 114,  379 => 113,  376 => 112,  370 => 109,  367 => 108,  360 => 106,  353 => 105,  351 => 104,  344 => 103,  340 => 102,  336 => 101,  330 => 100,  324 => 99,  317 => 98,  315 => 97,  312 => 96,  308 => 95,  303 => 93,  300 => 92,  298 => 91,  290 => 86,  283 => 84,  277 => 83,  272 => 80,  268 => 78,  265 => 77,  254 => 75,  250 => 74,  245 => 71,  243 => 70,  240 => 69,  232 => 67,  230 => 66,  227 => 65,  219 => 63,  217 => 62,  214 => 61,  209 => 59,  204 => 58,  198 => 55,  195 => 54,  193 => 53,  190 => 52,  188 => 51,  180 => 48,  177 => 47,  169 => 45,  167 => 44,  160 => 42,  157 => 41,  147 => 39,  145 => 38,  139 => 35,  135 => 33,  129 => 29,  125 => 27,  108 => 25,  104 => 24,  101 => 23,  99 => 22,  96 => 21,  82 => 19,  80 => 18,  75 => 15,  73 => 14,  66 => 10,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/product/product.twig");
    }
}
