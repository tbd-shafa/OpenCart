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

/* admin/view/template/sale/order_list.twig */
class __TwigTemplate_fc4b816cbfc86934264020e6d5f7bf17 extends Template
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
        echo "<form id=\"form-order\" method=\"post\" enctype=\"application/x-www-form-urlencoded\" data-load=\"";
        echo ($context["action"] ?? null);
        echo "\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\" class=\"form-check-input\"/></td>
      
          <td class=\"text-end\"><a href=\"";
        // line 8
        echo ($context["sort_order"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_order_id"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_store_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.store_name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_store"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 10
        echo ($context["sort_customer"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "customer")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_customer"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 11
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></td>
          <td class=\"text-end d-none d-lg-table-cell\"><a href=\"";
        // line 12
        echo ($context["sort_total"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_total"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 13
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-xl-table-cell\"><a href=\"";
        // line 14
        echo ($context["sort_date_modified"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_modified"] ?? null);
        echo "</a></td>
           <td class=\"text-start\">Custom Color</td> 
          <td class=\"text-end\">";
        // line 16
        echo ($context["column_action"] ?? null);
        echo "</td>
            
        </tr>
      </thead>
      <tbody>
        ";
        // line 21
        if (($context["orders"] ?? null)) {
            // line 22
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 23
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 24);
                echo "\" class=\"form-check-input\"/>
                <input type=\"hidden\" name=\"shipping_method[]\" value=\"";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 25)) {
                    echo "1";
                    echo ($context["else"] ?? null);
                    echo "0";
                }
                echo "\"/></td>
                
              <td class=\"text-end\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 27);
                echo "</td>
              <td class=\"text-start\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-start\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 29);
                echo "</td>
              <td class=\"text-start\"><label>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 30);
                echo "</label></td>
              <td class=\"text-end d-none d-lg-table-cell\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 31);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 32);
                echo "</td>
              <td class=\"text-start d-none d-xl-table-cell\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 33);
                echo "</td>
               <td class=\"text-start\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["order"], "custom_color", [], "any", false, false, false, 34);
                echo "</td>
              <td class=\"text-end\"><a href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 35);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-eye\"></i></a></td>
            

            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
        } else {
            // line 41
            echo "          <tr>
            <td class=\"text-center\" colspan=\"9\">";
            // line 42
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 45
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 49
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 50
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 50,  227 => 49,  221 => 45,  215 => 42,  212 => 41,  209 => 40,  196 => 35,  192 => 34,  188 => 33,  184 => 32,  180 => 31,  176 => 30,  172 => 29,  168 => 28,  164 => 27,  155 => 25,  151 => 24,  148 => 23,  143 => 22,  141 => 21,  133 => 16,  120 => 14,  108 => 13,  96 => 12,  84 => 11,  72 => 10,  60 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_list.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/sale/order_list.twig");
    }
}
