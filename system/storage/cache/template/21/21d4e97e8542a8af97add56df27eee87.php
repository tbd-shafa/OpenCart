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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_87d62f41282f1d26d54000883185d50f extends Template
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
<div id=\"checkout-cart\" class=\"container\">


  <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
  ";
        // line 10
        if (($context["attention"] ?? null)) {
            // line 11
            echo "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["attention"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 16
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 19
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 21
        echo ($context["heading_title"] ?? null);
        if (($context["weight"] ?? null)) {
            echo " (";
            echo ($context["weight"] ?? null);
            echo ")";
        }
        echo "</h1>
      <div id=\"shopping-cart\">";
        // line 22
        echo ($context["list"] ?? null);
        echo "</div>
      ";
        // line 23
        if (($context["modules"] ?? null)) {
            // line 24
            echo "        <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
        <p>";
            // line 25
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
        <div id=\"accordion\" class=\"accordion\">
          ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 28
                echo "            ";
                echo $context["module"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>
      ";
        }
        // line 32
        echo "      <br/>
      <div class=\"row\">
      
        <div class=\"col\"><a href=\"";
        // line 35
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"col text-end\"><a href=\"";
        // line 36
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 38
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 39
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#shopping-cart').on('submit', 'form', function (e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$(button).button('loading');
        },
        complete: function () {
            \$(button).button('reset');
        },
        success: function (json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 79
        echo ($context["language"] ?? null);
        echo "', {}, function () {
                \$('#header-cart').load('index.php?route=common/cart.info&language=";
        // line 80
        echo ($context["language"] ?? null);
        echo "');
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 89
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 89,  209 => 80,  205 => 79,  162 => 39,  158 => 38,  151 => 36,  145 => 35,  140 => 32,  136 => 30,  127 => 28,  123 => 27,  118 => 25,  113 => 24,  111 => 23,  107 => 22,  98 => 21,  94 => 20,  89 => 19,  83 => 17,  80 => 16,  74 => 14,  71 => 13,  65 => 11,  63 => 10,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/checkout/cart.twig");
    }
}
