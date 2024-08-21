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

/* admin/view/template/extension/product_extra_feature.twig */
class __TwigTemplate_6d9d02aa1abcb9a48aeef676036436ca extends Template
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
        <tr>
          <td class=\"text-start\">";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</td>
         <td class=\"text-start\">
            <div class=\"form-group\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                <option value=\"1\" ";
        // line 19
        echo (((($context["status"] ?? null) == "1")) ? ("selected") : (""));
        echo ">Enabled</option>
                <option value=\"0\" ";
        // line 20
        echo (((($context["status"] ?? null) == "0")) ? ("selected") : (""));
        echo ">Disabled</option>
              </select>
            </div>
          </td>
          <td class=\"text-end text-nowrap\">
          <button type=\"button\" id=\"save-status\" class=\"btn btn-primary\">";
        // line 25
        echo ($context["button_save"] ?? null);
        echo "</button>
            ";
        // line 26
        if ((($context["status"] ?? null) == 1)) {
            // line 27
            echo "              <a href=\"";
            echo ($context["uninstall"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_uninstall"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a>
            ";
        } else {
            // line 29
            echo "              <a href=\"";
            echo ($context["install"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_install"] ?? null);
            echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></a>
            ";
        }
        // line 31
        echo "          </td>
        </tr>
      </tbody>
    </table>
  </div>
</fieldset>
<script>
document.getElementById('save-status').addEventListener('click', function() {
  var status = document.getElementById('input-status').value;
  var token = '";
        // line 40
        echo ($context["user_token"] ?? null);
        echo "';

  fetch('";
        // line 42
        echo ($context["ajax_save_status"] ?? null);
        echo "', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-Requested-With': 'XMLHttpRequest'
    },
    body: JSON.stringify({ status: status, user_token: token })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      alert('";
        // line 53
        echo ($context["text_success"] ?? null);
        echo "');
    } else {
      alert('";
        // line 55
        echo ($context["text_error"] ?? null);
        echo "');
    }
  })
  .catch(error => console.error('Error:', error));
});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/extension/product_extra_feature.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 55,  137 => 53,  123 => 42,  118 => 40,  107 => 31,  99 => 29,  91 => 27,  89 => 26,  85 => 25,  77 => 20,  73 => 19,  66 => 15,  58 => 10,  54 => 9,  50 => 8,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/extension/product_extra_feature.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/extension/product_extra_feature.twig");
    }
}
