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

/* admin/view/template/extension/currency.twig */
class __TwigTemplate_638f354afe18f99d81859ded79c08c6f extends Template
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
        echo ($context["promotion"] ?? null);
        echo "
<fieldset>
  <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-start\">";
        // line 8
        echo ($context["column_name"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 9
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-end\">";
        // line 10
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 14
        if (($context["extensions"] ?? null)) {
            // line 15
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 16
                echo "            <tr>
              <td class=\"text-start\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 17);
                echo "</td>
              <td class=\"text-start\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 18);
                echo "</td>
              <td class=\"text-end text-nowrap\">";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 19)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 19);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>";
                } else {
                    echo "<button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa-solid fa-pencil\"></i></button>";
                }
                // line 20
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 20)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 20);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></a>";
                } else {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 20);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a>";
                }
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 25
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 28
        echo "      </tbody>
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/extension/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  121 => 25,  118 => 24,  115 => 23,  93 => 20,  83 => 19,  79 => 18,  75 => 17,  72 => 16,  67 => 15,  65 => 14,  58 => 10,  54 => 9,  50 => 8,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/extension/currency.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/extension/currency.twig");
    }
}
