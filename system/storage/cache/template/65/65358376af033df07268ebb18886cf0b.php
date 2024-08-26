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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_e4a78285e21ee1095db39d028fc11b47 extends Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"row\">
        ";
        // line 12
        if (((($context["register"] ?? null) || ($context["payment_address"] ?? null)) || ($context["shipping_address"] ?? null))) {
            // line 13
            echo "          <div class=\"col-md-7 mb-3\">
            ";
            // line 14
            if (($context["register"] ?? null)) {
                // line 15
                echo "              <div id=\"checkout-register\">";
                echo ($context["register"] ?? null);
                echo "</div>
            ";
            }
            // line 17
            echo "            ";
            if (($context["payment_address"] ?? null)) {
                // line 18
                echo "              <div id=\"checkout-payment-address\">";
                echo ($context["payment_address"] ?? null);
                echo "</div>
            ";
            }
            // line 20
            echo "            ";
            if (($context["shipping_address"] ?? null)) {
                // line 21
                echo "              <div id=\"checkout-shipping-address\">";
                echo ($context["shipping_address"] ?? null);
                echo "</div>
            ";
            }
            // line 23
            echo "          </div>
        ";
        }
        // line 25
        echo "   

        <div class=\"col\">
          ";
        // line 28
        if (($context["shipping_method"] ?? null)) {
            // line 29
            echo "            <div id=\"checkout-shipping-method\" class=\"mb-3\">";
            echo ($context["shipping_method"] ?? null);
            echo "</div>
          ";
        }
        // line 31
        echo "          <div id=\"checkout-payment-method\" class=\"mb-4\">";
        echo ($context["payment_method"] ?? null);
        echo "</div>
          <div id=\"checkout-confirm\">";
        // line 32
        echo ($context["confirm"] ?? null);
        echo "</div>
 <div id=\"checkout-products\" class=\"mb-4\">
 
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "        <div class=\"product-item\">
         
            <div class=\"product-color\">
                <label>Custom Color:";
            // line 39
            echo ($context["selected_color"] ?? null);
            echo "</label>
                <div>
                     ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "colors", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 42
                echo "                        <input type=\"radio\" id=\"color_";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "color_id", [], "any", false, false, false, 42);
                echo "\" name=\"custom_color_";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 42);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "color_id", [], "any", false, false, false, 42);
                echo "\" 
                               ";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 43) == ($context["selected_color"] ?? null))) {
                    echo "checked";
                }
                echo " 
                               ";
                // line 44
                if (( !twig_test_empty(($context["selected_color"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 44) != ($context["selected_color"] ?? null)))) {
                    echo "disabled";
                }
                echo ">
                        <label for=\"color_";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["color"], "color_id", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 45);
                echo "</label><br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>


        </div>
      </div>
    </div>
    ";
        // line 57
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 59
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 61
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 61,  204 => 59,  199 => 57,  191 => 51,  182 => 47,  172 => 45,  166 => 44,  160 => 43,  151 => 42,  147 => 41,  142 => 39,  137 => 36,  133 => 35,  127 => 32,  122 => 31,  116 => 29,  114 => 28,  109 => 25,  105 => 23,  99 => 21,  96 => 20,  90 => 18,  87 => 17,  81 => 15,  79 => 14,  76 => 13,  74 => 12,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/checkout.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/checkout/checkout.twig");
    }
}
