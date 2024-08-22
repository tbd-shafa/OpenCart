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

/* extension/opencart/catalog/view/template/captcha/basic.twig */
class __TwigTemplate_03a91aec304f1334a88dd4211a5895b6 extends Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
  <div class=\"mb-3 required\">
    <label for=\"input-captcha\" class=\"form-label\">";
        // line 4
        echo ($context["entry_captcha"] ?? null);
        echo "</label> <input type=\"text\" name=\"captcha\" value=\"\" id=\"input-captcha\" class=\"form-control mb-1\"/>
    <div id=\"captcha\">
      <img src=\"index.php?route=extension/opencart/captcha/basic.captcha\" alt=\"\"/>
    </div>
    <div id=\"error-captcha\" class=\"invalid-feedback\"></div>
  </div>
</fieldset>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/captcha/basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/captcha/basic.twig", "/opt/lampp/htdocs/opencart3/extension/opencart/catalog/view/template/captcha/basic.twig");
    }
}
