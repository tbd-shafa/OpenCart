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
            ";
        // line 49
        if (($context["custom_name"] ?? null)) {
            // line 50
            echo "    <p><strong>Custom Name:</strong> ";
            echo ($context["custom_name"] ?? null);
            echo "</p>
";
        }
        // line 52
        echo "
";
        // line 53
        if (($context["custom_color"] ?? null)) {
            // line 54
            echo "    <p><strong>Custom Color:</strong> ";
            echo ($context["custom_color"] ?? null);
            echo "</p>
";
        }
        // line 56
        echo "
";
        // line 57
        if (($context["custom_image"] ?? null)) {
            // line 58
            echo "    <p><strong>Custom Image:</strong> <img src=\"";
            echo ($context["custom_image"] ?? null);
            echo "\" alt=\"";
            echo ($context["custom_name"] ?? null);
            echo "\" /></p>
";
        }
        // line 60
        echo "
          </ul>

          ";
        // line 63
        if (($context["price"] ?? null)) {
            // line 64
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 65
            if ( !($context["special"] ?? null)) {
                // line 66
                echo "                <li>
                  <h2><span class=\"price-new\">";
                // line 67
                echo ($context["price"] ?? null);
                echo "</span></h2>
                </li>
              ";
            } else {
                // line 70
                echo "                <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2><span class=\"price-new\">";
                // line 71
                echo ($context["special"] ?? null);
                echo "</span></h2></li>
              ";
            }
            // line 73
            echo "
              ";
            // line 74
            if (($context["tax"] ?? null)) {
                // line 75
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
              ";
            }
            // line 77
            echo "
              ";
            // line 78
            if (($context["points"] ?? null)) {
                // line 79
                echo "                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
              ";
            }
            // line 81
            echo "
              ";
            // line 82
            if (($context["discounts"] ?? null)) {
                // line 83
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 87
                    echo "                  <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 87);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 87);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "              ";
            }
            // line 90
            echo "            </ul>
          ";
        }
        // line 92
        echo "
          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"";
        // line 95
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"";
        // line 96
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 98
        echo ($context["product_id"] ?? null);
        echo "\"/>
          </form>
          <br/>
          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 103
        if (($context["options"] ?? null)) {
            // line 104
            echo "            <hr>
              <h3>";
            // line 105
            echo ($context["text_option"] ?? null);
            echo "</h3>
              <div>
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 108
                echo "
                  ";
                // line 109
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 109) == "select")) {
                    // line 110
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 110)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 111);
                    echo "</label>
                      <select name=\"option[";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                    echo "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 113
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 114));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 115
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 115);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 115);
                        echo "
                            ";
                        // line 116
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 116)) {
                            // line 117
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 117);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 117);
                            echo ")
                            ";
                        }
                        // line 118
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                      </select>
                      <div id=\"error-option-";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 124
                echo "
                  ";
                // line 125
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 125) == "radio")) {
                    // line 126
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 126)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 127);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                    echo "\">
                        ";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 129));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 130
                        echo "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 131
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 131);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 131);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 131);
                        echo "\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 132);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 132)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 132);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 132);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 132);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 133
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 133);
                        echo "
                              ";
                        // line 134
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134)) {
                            // line 135
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 135);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 135);
                            echo ")
                              ";
                        }
                        // line 137
                        echo "                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 144
                echo "
                  ";
                // line 145
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 145) == "checkbox")) {
                    // line 146
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 146)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 147);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "\">
                        ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 150
                        echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 151);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 151);
                        echo "\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 152);
                        echo "\" class=\"form-check-label\">
                              ";
                        // line 153
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 153)) {
                            // line 154
                            echo "                                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 154);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 154);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 154);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 155
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 155);
                        echo "
                              ";
                        // line 156
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 156)) {
                            // line 157
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 157);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 157);
                            echo ")
                              ";
                        }
                        // line 158
                        echo "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 165
                echo "
                  ";
                // line 166
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 166) == "text")) {
                    // line 167
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 167)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 168);
                    echo "</label>
                      <input type=\"text\" name=\"option[";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 169);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 169);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 173
                echo "
                  ";
                // line 174
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 174) == "textarea")) {
                    // line 175
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 175)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 176);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 176);
                    echo "</label>
                      <textarea name=\"option[";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 177);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 177);
                    echo "</textarea>
                      <div id=\"error-option-";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 181
                echo "
                  ";
                // line 182
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "file")) {
                    // line 183
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"button-upload-";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184);
                    echo "</label>
                      <div>
                        <button type=\"button\" id=\"button-upload-";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"option[";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "\"/>
                      </div>
                      <div id=\"error-option-";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 192
                echo "
                  ";
                // line 193
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 193) == "date")) {
                    // line 194
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 194)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 195);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 197);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "\" class=\"form-control date\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 203
                echo "
                  ";
                // line 204
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 204) == "datetime")) {
                    // line 205
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 205)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 206);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 206);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 208);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" class=\"form-control datetime\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 214
                echo "
                  ";
                // line 215
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 215) == "time")) {
                    // line 216
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 216)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 217);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 219);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\" class=\"form-control time\"/>
                        <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 225
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                ";
        }
        // line 228
        echo "
                ";
        // line 229
        if (($context["subscription_plans"] ?? null)) {
            // line 230
            echo "                  <hr/>
                  <h3>";
            // line 231
            echo ($context["text_subscription"] ?? null);
            echo "</h3>
                  <div class=\"mb-3 required\">

                    <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                      <option value=\"\">";
            // line 235
            echo ($context["text_select"] ?? null);
            echo "</option>
                      ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 237
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 237);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 237);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "                    </select>

                    ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 242
                echo "                      <div id=\"subscription-description-";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 242);
                echo "\" class=\"form-text subscription d-none\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 242);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "                    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>

                  </div>
                ";
        }
        // line 248
        echo "
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 250
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 251
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 252
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                  <div id=\"error-quantity\" class=\"form-text\"></div>
                  <br/>
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 255
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>

                ";
        // line 258
        if ((($context["minimum"] ?? null) > 1)) {
            // line 259
            echo "                  <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 261
        echo "              </div>
              ";
        // line 262
        if (($context["review_status"] ?? null)) {
            // line 263
            echo "                <div class=\"rating\">
                  <p>";
            // line 264
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 265
                echo "                      ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 266
                    echo "                        <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                } else {
                    // line 268
                    echo "                        <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                }
                // line 270
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "                    <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["text_reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
                </div>
              ";
        }
        // line 274
        echo "            </form>
          </div>
        </div>
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 278
        echo ($context["tab_description"] ?? null);
        echo "</a></li>

          ";
        // line 280
        if (($context["attribute_groups"] ?? null)) {
            // line 281
            echo "            <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
          ";
        }
        // line 283
        echo "
          ";
        // line 284
        if (($context["review_status"] ?? null)) {
            // line 285
            echo "            <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
          ";
        }
        // line 287
        echo "
        </ul>
        <div class=\"tab-content\">

          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">";
        // line 291
        echo ($context["description"] ?? null);
        echo "</div>

          ";
        // line 293
        if (($context["attribute_groups"] ?? null)) {
            // line 294
            echo "            <div id=\"tab-specification\" class=\"tab-pane fade\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  ";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 298
                echo "                    <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 300
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 300);
                echo "</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                // line 304
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 304));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 305
                    echo "                        <tr>
                          <td>";
                    // line 306
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 306);
                    echo "</td>
                          <td>";
                    // line 307
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 307);
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 310
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                </table>
              </div>
            </div>
          ";
        }
        // line 316
        echo "
          ";
        // line 317
        if (($context["review_status"] ?? null)) {
            // line 318
            echo "            <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            echo ($context["review"] ?? null);
            echo "</div>
          ";
        }
        // line 320
        echo "
        </div>
      </div>

      ";
        // line 324
        if (($context["products"] ?? null)) {
            // line 325
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
          ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 328
                echo "            <div class=\"col mb-3\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "        </div>
      ";
        }
        // line 332
        echo "
      ";
        // line 333
        if (($context["tags"] ?? null)) {
            // line 334
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 335
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
                // line 336
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 336);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 336);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "end", [], "any", false, false, false, 336)) {
                    echo ",";
                }
                // line 337
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
            // line 338
            echo "        </p>
      ";
        }
        // line 340
        echo "
      ";
        // line 341
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 342
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
        // line 357
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
//--></script>
";
        // line 405
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
        return array (  1204 => 405,  1153 => 357,  1135 => 342,  1131 => 341,  1128 => 340,  1124 => 338,  1110 => 337,  1101 => 336,  1084 => 335,  1079 => 334,  1077 => 333,  1074 => 332,  1070 => 330,  1061 => 328,  1057 => 327,  1051 => 325,  1049 => 324,  1043 => 320,  1037 => 318,  1035 => 317,  1032 => 316,  1026 => 312,  1019 => 310,  1010 => 307,  1006 => 306,  1003 => 305,  999 => 304,  992 => 300,  988 => 298,  984 => 297,  979 => 294,  977 => 293,  972 => 291,  966 => 287,  960 => 285,  958 => 284,  955 => 283,  949 => 281,  947 => 280,  942 => 278,  936 => 274,  927 => 271,  921 => 270,  917 => 268,  913 => 266,  910 => 265,  906 => 264,  903 => 263,  901 => 262,  898 => 261,  892 => 259,  890 => 258,  884 => 255,  878 => 252,  874 => 251,  870 => 250,  866 => 248,  860 => 244,  849 => 242,  845 => 241,  841 => 239,  830 => 237,  826 => 236,  822 => 235,  815 => 231,  812 => 230,  810 => 229,  807 => 228,  804 => 227,  797 => 225,  791 => 222,  781 => 219,  774 => 217,  767 => 216,  765 => 215,  762 => 214,  756 => 211,  746 => 208,  739 => 206,  732 => 205,  730 => 204,  727 => 203,  721 => 200,  711 => 197,  704 => 195,  697 => 194,  695 => 193,  692 => 192,  686 => 189,  679 => 187,  665 => 186,  658 => 184,  651 => 183,  649 => 182,  646 => 181,  640 => 178,  630 => 177,  624 => 176,  617 => 175,  615 => 174,  612 => 173,  606 => 170,  596 => 169,  590 => 168,  583 => 167,  581 => 166,  578 => 165,  572 => 162,  569 => 161,  561 => 158,  554 => 157,  552 => 156,  547 => 155,  534 => 154,  532 => 153,  528 => 152,  520 => 151,  517 => 150,  513 => 149,  509 => 148,  505 => 147,  498 => 146,  496 => 145,  493 => 144,  487 => 141,  484 => 140,  476 => 137,  469 => 135,  467 => 134,  462 => 133,  446 => 132,  438 => 131,  435 => 130,  431 => 129,  427 => 128,  423 => 127,  416 => 126,  414 => 125,  411 => 124,  405 => 121,  402 => 120,  395 => 118,  388 => 117,  386 => 116,  379 => 115,  375 => 114,  371 => 113,  365 => 112,  359 => 111,  352 => 110,  350 => 109,  347 => 108,  343 => 107,  338 => 105,  335 => 104,  333 => 103,  325 => 98,  318 => 96,  312 => 95,  307 => 92,  303 => 90,  300 => 89,  289 => 87,  285 => 86,  280 => 83,  278 => 82,  275 => 81,  267 => 79,  265 => 78,  262 => 77,  254 => 75,  252 => 74,  249 => 73,  244 => 71,  239 => 70,  233 => 67,  230 => 66,  228 => 65,  225 => 64,  223 => 63,  218 => 60,  210 => 58,  208 => 57,  205 => 56,  199 => 54,  197 => 53,  194 => 52,  188 => 50,  186 => 49,  180 => 48,  177 => 47,  169 => 45,  167 => 44,  160 => 42,  157 => 41,  147 => 39,  145 => 38,  139 => 35,  135 => 33,  129 => 29,  125 => 27,  108 => 25,  104 => 24,  101 => 23,  99 => 22,  96 => 21,  82 => 19,  80 => 18,  75 => 15,  73 => 14,  66 => 10,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/product/product.twig");
    }
}
