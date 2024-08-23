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

/* admin/view/template/color/color_list.twig */
class __TwigTemplate_250bccafb2e5ada101d488d7fb0d27ea extends Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
    <div class=\"page-header\">
    
        <div class=\"container-fluid\">
            <div class=\"float-end\">
                <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
                <button type=\"submit\" form=\"form-color\" formaction=\"";
        // line 10
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
            </div>
            <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ol class=\"breadcrumb\">
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</ol>
        </div>
    </div>
   ";
        // line 20
        if (($context["success"] ?? null)) {
            // line 21
            echo "<div class=\"alert alert-success alert-dismissible\">
    <i class=\"fa fa-check-circle\"></i> ";
            // line 22
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 26
        echo "<script>
document.addEventListener('DOMContentLoaded', function () {
    // Find all close buttons for alerts
    var alertCloseButtons = document.querySelectorAll('.alert-dismissible .close');

    alertCloseButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            // Find the parent alert div
            var alert = this.closest('.alert');
            if (alert) {
                // Remove the alert instantly
                alert.style.display = 'none';
            }
        });
    });
});

</script>
    <div class=\"container-fluid\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 47
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 50
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-color\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-center\">";
        // line 56
        echo ($context["column_name"] ?? null);
        echo "</td>
                                    <td class=\"text-center\">";
        // line 57
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 61
        if (($context["entries"] ?? null)) {
            // line 62
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 63
                echo "                                <tr>
                                    <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "color_id", [], "any", false, false, false, 64);
                echo "\" class=\"form-check-input\"/></td>
                                    <td class=\"text-center\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 65);
                echo "</td>
                                    <td class=\"text-center\"><a href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "edit", [], "any", false, false, false, 66);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_edit"] ?? null);
                echo "</a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                ";
        } else {
            // line 70
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"3\">";
            // line 71
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                    
                                </tr>
                                ";
        }
        // line 75
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

";
        // line 84
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/color/color_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 84,  194 => 75,  187 => 71,  184 => 70,  181 => 69,  170 => 66,  166 => 65,  162 => 64,  159 => 63,  154 => 62,  152 => 61,  145 => 57,  141 => 56,  132 => 50,  126 => 47,  103 => 26,  96 => 22,  93 => 21,  91 => 20,  86 => 17,  75 => 15,  71 => 14,  66 => 12,  57 => 10,  51 => 9,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/color/color_list.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/color/color_list.twig");
    }
}
