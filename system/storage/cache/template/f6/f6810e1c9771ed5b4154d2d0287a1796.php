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

/* admin/view/template/test/test_list.twig */
class __TwigTemplate_2d14865f833ab857bdd2c800b8fcec83 extends Template
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
        // line 8
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
                <button type=\"submit\" form=\"form-test\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
            </div>
            <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ol class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</ol>
        </div>
    </div>
     
    <div class=\"container-fluid\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 23
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 26
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-test\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-center\">";
        // line 32
        echo ($context["column_name"] ?? null);
        echo "</td>
                                    <td class=\"text-center\">";
        // line 33
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 37
        if (($context["entries"] ?? null)) {
            // line 38
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 39
                echo "                                <tr>
                                    <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "test_id", [], "any", false, false, false, 40);
                echo "\" class=\"form-check-input\"/></td>
                                    <td class=\"text-center\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 41);
                echo "</td>
                                    <td class=\"text-center\"><a href=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "edit", [], "any", false, false, false, 42);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_edit"] ?? null);
                echo "</a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                ";
        } else {
            // line 46
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"3\">";
            // line 47
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                    
                                </tr>
                                ";
        }
        // line 51
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

";
        // line 60
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/test/test_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  162 => 51,  155 => 47,  152 => 46,  149 => 45,  138 => 42,  134 => 41,  130 => 40,  127 => 39,  122 => 38,  120 => 37,  113 => 33,  109 => 32,  100 => 26,  94 => 23,  85 => 16,  74 => 14,  70 => 13,  65 => 11,  56 => 9,  50 => 8,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/test/test_list.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/test/test_list.twig");
    }
}
