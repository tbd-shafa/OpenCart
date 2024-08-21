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

/* admin/view/template/extension/product_extra_feature_edit.twig */
class __TwigTemplate_232438ce62f186bb3fd5ddd9a0ce1607 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"container\">
    <h1>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h1>

    <form action=\"";
        // line 6
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"input-status\">";
        // line 8
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <select name=\"product_extra_feature_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 10
        echo (((($context["status"] ?? null) == "1")) ? ("selected") : (""));
        echo ">Enabled</option>
                <option value=\"0\" ";
        // line 11
        echo (((($context["status"] ?? null) == "0")) ? ("selected") : (""));
        echo ">Disabled</option>
            </select>
        </div>

        <div class=\"text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 16
        echo ($context["button_save"] ?? null);
        echo "</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/extension/product_extra_feature_edit.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  70 => 11,  66 => 10,  61 => 8,  56 => 6,  51 => 4,  48 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/extension/product_extra_feature_edit.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/extension/product_extra_feature_edit.twig");
    }
}
