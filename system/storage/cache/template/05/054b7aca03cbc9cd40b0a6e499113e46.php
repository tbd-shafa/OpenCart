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

/* admin/view/template/marketplace/event.twig */
class __TwigTemplate_0f7f47f2ad5a0d5724305355c86b7396 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-event\" formaction=\"";
        // line 6
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 17
        echo ($context["text_event"] ?? null);
        echo "</div>
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 19
        echo ($context["text_list"] ?? null);
        echo "</div>
\t\t\t<div id=\"event\" class=\"card-body\">";
        // line 20
        echo ($context["list"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#event').on('click', 'thead a, .pagination a', function (e) {
    e.preventDefault();

    \$('#event').load(this.href);
});

\$('#event').on('click', '.btn-success, .btn-danger', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        type: 'post',
        data: \$('#event input[name=\\'selected[]\\']:checked'),
        dataType: 'json',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#event').load(\$('#form-event').attr('data-oc-load'));
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#event').on('click', '.btn-info', function () {
    var element = this;

    \$('#modal-event').remove();

    html = '<div id=\"modal-event\" class=\"modal\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\">";
        // line 73
        echo twig_escape_filter($this->env, ($context["text_info"] ?? null), "js");
        echo "</h5>';
    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '          <label for=\"input-description\" class=\"form-label\">";
        // line 78
        echo twig_escape_filter($this->env, ($context["entry_description"] ?? null), "js");
        echo "</label> <textarea placeholder=\"";
        echo twig_escape_filter($this->env, ($context["entry_description"] ?? null), "js");
        echo "\" id=\"input-description\" rows=\"5\" class=\"form-control\" disabled>' + \$(element).attr('data-oc-description') + '</textarea>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '          <label for=\"input-trigger\" class=\"form-label\">";
        // line 81
        echo twig_escape_filter($this->env, ($context["entry_trigger"] ?? null), "js");
        echo "</label> <textarea placeholder=\"";
        echo twig_escape_filter($this->env, ($context["entry_trigger"] ?? null), "js");
        echo "\" id=\"input-trigger\" class=\"form-control\" disabled>' + \$(element).attr('data-oc-trigger') + '</textarea>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '          <label for=\"input-action\" class=\"form-label\">";
        // line 84
        echo twig_escape_filter($this->env, ($context["entry_action"] ?? null), "js");
        echo "</label> <textarea placeholder=\"";
        echo twig_escape_filter($this->env, ($context["entry_action"] ?? null), "js");
        echo "\" id=\"input-action\" class=\"form-control\" disabled>' + \$(element).attr('data-oc-action') + '</textarea>';
    html += '        </div>';
    html += '      </div>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    var modal = new bootstrap.Modal(document.querySelector('#modal-event'));

    modal.show();
});
//--></script>
";
        // line 99
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/event.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 99,  170 => 84,  162 => 81,  154 => 78,  146 => 73,  90 => 20,  86 => 19,  81 => 17,  75 => 13,  64 => 11,  60 => 10,  55 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/event.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/marketplace/event.twig");
    }
}
