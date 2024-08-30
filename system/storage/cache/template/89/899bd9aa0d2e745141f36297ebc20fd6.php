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

/* catalog/view/template/mail/add_cart.twig */
class __TwigTemplate_14f940fb983ba0f70e639f92cfb9b33b extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  
    <link rel=\"stylesheet\" href=\"styles.css\">
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.email-container {
    width: 600px;
    margin: 20px auto;
    background-color: #ffffff;
    border: 1px solid #ddd;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header {
    background-color: #f4b400;
    padding: 15px;
    text-align: center;
}

.header h1 {
    margin: 0;
    font-size: 18px;
    color: black;
}

.order-details {
    margin: 20px 0;
    font-size: 14px;
}

.order-details p {
    margin: 5px 0;
}

.order-summary {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    font-size: 14px;
}

.order-summary th, .order-summary td {
    border: 1px solid #ddd;
    padding: 10px;
}

.order-summary th {
    background-color: #f4f4f4;
    text-align: left;
}

.order-summary td {
    text-align: left;
}

.order-summary strong {
    font-size: 16px;
}

.addresses {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.address {
    width: 48%;
}

.address h3 {
    margin-top: 0;
    font-size: 16px;
}

.address p {
    font-size: 14px;
    margin: 5px 0;
    line-height: 1.5;
}

.address a {
    color: #0073e6;
    text-decoration: none;
}

.footer {
    text-align: center;
    font-size: 14px;
}

.footer p {
    margin: 10px 0;
}

.footer a {
    color: #0073e6;
    text-decoration: none;
}

</style>
</head>
<body>
    <div class=\"email-container\">
        <div class=\"header\">
            <h1>New Order: #VP-INV-014404</h1>
        </div>
        <div class=\"order-details\">
            <p>Thank you for your purchase! Your order #VP-INV-014404 has been successfully placed and payment confirmed. Here are the details of your order: technobd</p>
            <p><strong>Order #VP-INV-014404</strong> (August 12, 2024)</p>
        </div>
        <table class=\"order-summary\">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Custom Color</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        name : ";
        // line 134
        echo ($context["name"] ?? null);
        echo " <br>
                        Model: ";
        // line 135
        echo ($context["model"] ?? null);
        echo "<br>
                        Type: Enhanced Matte Paper Poster<br>
                        Size: 20\"x30\" (51x76cm)
                    </td>
                    <td>";
        // line 139
        echo ($context["quantity"] ?? null);
        echo "</td>
                    <td>\$ ";
        // line 140
        echo ($context["price"] ?? null);
        echo "</td>
                     <td>";
        // line 141
        echo ($context["custom_color"] ?? null);
        echo "</td>
                    
                </tr>
                <tr>
                    <td colspan=\"3\">Subtotal:</td>
                    <td>\$60.79</td>
                </tr>
                <tr>
                    <td colspan=\"3\">Shipping:</td>
                    <td>\$13.99 via Flat Rate<br><small>(Estimated delivery: Aug 23–26)</small></td>
                </tr>
                <tr>
                    <td colspan=\"3\">Payment method:</td>
                    <td>Credit Card (Stripe)</td>
                </tr>
                <tr>
                    <td colspan=\"3\"><strong>Total:</strong></td>
                    <td><strong>\$74.78</strong></td>
                </tr>
            </tbody>
        </table>
        <div class=\"addresses\">
            <div class=\"address\">
                <h3>Billing address</h3>
                <p>technobd technobd<br>
                   46 khulna Bazar, Dhaka – 1215, Bangladesh.<br>
                   dhaka<br>
                   Bagerhat<br>
                   1200<br>
                   01732593040<br>
                   <a href=\"mailto:shafa@technobd.com\">shafa@technobd.com</a></p>
            </div>
            <div class=\"address\">
                <h3>Shipping address</h3>
                <p>technobd technobd<br>
                   46 khulna Bazar, Dhaka – 1215, Bangladesh.<br>
                   dhaka<br>
                   Bagerhat<br>
                   1200<br>
                   01732593040</p>
            </div>
        </div>
        <div class=\"footer\">
            <p>Congratulations on the sale.</p>
            <p>You can track your order status and view more details in your account dashboard.</p>
            <p>Thank you for choosing VirtuosoPixel!</p>
            <p>Best regards<br>The VirtuosoPixel Team</p>
            <p>Process your orders on the go. <a href=\"#\">Get the app</a>.</p>
        </div>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/mail/add_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 141,  187 => 140,  183 => 139,  176 => 135,  172 => 134,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/mail/add_cart.twig", "/opt/lampp/htdocs/opencart3/catalog/view/template/mail/add_cart.twig");
    }
}
