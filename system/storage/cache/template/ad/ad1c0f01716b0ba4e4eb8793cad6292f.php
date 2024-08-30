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

/* catalog/view/template/mail/register_alert.twig */
class __TwigTemplate_177f1b0a198c503fe8ac5382876a5ffb extends Template
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
        echo ($context["text_signup"] ?? null);
        echo "<br/>
<br/>
";
        // line 3
        echo ($context["text_firstname"] ?? null);
        echo " ";
        echo ($context["firstname"] ?? null);
        echo "<br/>
";
        // line 4
        echo ($context["text_lastname"] ?? null);
        echo " ";
        echo ($context["lastname"] ?? null);
        echo "<br/>
";
        // line 5
        if (($context["customer_group"] ?? null)) {
            // line 6
            echo ($context["text_customer_group"] ?? null);
            echo " ";
            echo ($context["customer_group"] ?? null);
            echo "<br/>
";
        }
        // line 8
        echo ($context["text_email"] ?? null);
        echo " ";
        echo ($context["email"] ?? null);
        echo "<br/>
";
        // line 9
        if (($context["telephone"] ?? null)) {
            // line 10
            echo ($context["text_telephone"] ?? null);
            echo " ";
            echo ($context["telephone"] ?? null);
            echo "
";
        }
        // line 12
        echo "<br/>
";
        // line 13
        echo ($context["store"] ?? null);
        echo "<br/>
";
        // line 14
        echo ($context["store_url"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/mail/register_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  81 => 13,  78 => 12,  71 => 10,  69 => 9,  63 => 8,  56 => 6,  54 => 5,  48 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/mail/register_alert.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/mail/register_alert.twig");
    }
}
