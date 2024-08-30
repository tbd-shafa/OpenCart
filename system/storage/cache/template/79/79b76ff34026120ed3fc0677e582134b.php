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

/* admin/view/template/common/forgotten_reset.twig */
class __TwigTemplate_5e0287266cc0c6784d14ec94dc253e8a extends Template
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
<div id=\"content\">
  <div class=\"container\">
    <br/>
    <br/>
    <div class=\"row justify-content-sm-center\">
      <div class=\"col-sm-10 col-md-8 col-lg-5\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-redo\"></i> ";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form id=\"form-forgotten\" action=\"";
        // line 11
        echo ($context["reset"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
              <p>";
        // line 12
        echo ($context["text_password"] ?? null);
        echo "</p>
              <div class=\"mb-3\">
                <label for=\"input-password\" class=\"form-label\">";
        // line 14
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"\" id=\"input-password\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-confirm\" class=\"form-label\">";
        // line 18
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"confirm\" value=\"\" id=\"input-confirm\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 22
        echo ($context["button_save"] ?? null);
        echo "</button>
                <a href=\"";
        // line 23
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 32
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/common/forgotten_reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  80 => 23,  76 => 22,  69 => 18,  62 => 14,  57 => 12,  53 => 11,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/forgotten_reset.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/common/forgotten_reset.twig");
    }
}
