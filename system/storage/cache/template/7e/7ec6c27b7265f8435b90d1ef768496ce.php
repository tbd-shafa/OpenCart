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

/* admin/view/template/catalog/product_form.twig */
class __TwigTemplate_1147c36e1dbcafbb8a3eb4549649bff9 extends Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["master_id"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["text_variant"] ?? null);
            echo "</div>
    ";
        }
        // line 20
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 23
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">

          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 26
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        echo ($context["tab_subscription"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-special\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 38
        echo ($context["tab_report"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 44
            echo "                  <li class=\"nav-item\"><a href=\"#language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) {
                echo " active";
            }
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 44);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "</a></li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                  <div id=\"language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\" class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 49)) {
                echo " active";
            }
            echo "\">
                    <div class=\"row mb-3 required\">
                      <label for=\"input-name-";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null), "name", [], "any", false, false, false, 54)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" class=\"form-control\"/>
                          ";
            // line 55
            if (($context["master_id"] ?? null)) {
                // line 56
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "][name]\" value=\"1\" id=\"input-variant-name-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 58)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null), "name", [], "any", false, false, false, 58)) {
                    echo " checked";
                }
                echo "/>
                                <label for=\"input-variant-name-";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 63
            echo "                        </div>
                        <div id=\"error-name-";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-description-";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            echo ($context["ckeditor"] ?? null);
            echo "\" class=\"w-100 position-relative\">";
            echo (((($__internal_compile_3 = ($context["product_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null), "description", [], "any", false, false, false, 72)) : (""));
            echo "</textarea>
                          </div>
                          ";
            // line 74
            if (($context["master_id"] ?? null)) {
                // line 75
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                echo "][description]\" value=\"1\" id=\"input-variant-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 77)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null), "description", [], "any", false, false, false, 77)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 81
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88)] ?? null) : null), "meta_title", [], "any", false, false, false, 88)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
            echo "\" class=\"form-control\"/>
                          ";
            // line 89
            if (($context["master_id"] ?? null)) {
                // line 90
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "][meta_title]\" value=\"1\" id=\"input-variant-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 92)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null), "meta_title", [], "any", false, false, false, 92)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-title-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 96
            echo "                        </div>
                        <div id=\"error-meta-title-";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
            echo "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null), "meta_description", [], "any", false, false, false, 104)) : (""));
            echo "</textarea>
                          ";
            // line 105
            if (($context["master_id"] ?? null)) {
                // line 106
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "][meta_description]\" value=\"1\" id=\"input-variant-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 108)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null), "meta_description", [], "any", false, false, false, 108)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-description-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 112
            echo "                        </div>
                      </div>
                    </div>
                   
                   ";
            // line 116
            if (($context["product_extra_feature_status"] ?? null)) {
                echo "  

 <div class=\"row mb-3\">
                      <label for=\"input-custom-name\"\" class=\"col-sm-2 col-form-label\">";
                // line 119
                echo ($context["text_custom_name"] ?? null);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_name\" value=\"";
                // line 122
                echo ($context["custom_name"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_custom_name"] ?? null);
                echo "\" id=\"input-custom-name\" class=\"form-control\" />
                         
                        </div>
                       
                      </div>
                    </div>

 <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
                // line 130
                echo ($context["text_custom_color"] ?? null);
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"\">";
                // line 134
                echo ($context["custom_none"] ?? null);
                echo "</option>
                      
                          <option value=\"\" selected</option>
                       
                      </select>
                      
                    </div>
                  </div>
                </div>
<fieldset>
    <legend>";
                // line 144
                echo ($context["text_custom_image"] ?? null);
                echo "</legend>
    <div class=\"row\">
        <div class=\"col-sm-4 col-md-3 mb-3\">
            <div id=\"custom-image\" class=\"card image\">
                <img src=\"";
                // line 148
                echo ($context["custom_thumb"] ?? null);
                echo "\" alt=\"\" title=\"\" id=\"thumb-custom-image\" data-oc-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\" class=\"card-img-top\"/> 
                <input type=\"hidden\" name=\"custom_image\" value=\"";
                // line 149
                echo ($context["custom_image"] ?? null);
                echo "\" id=\"input-custom-image\"/>
                <div class=\"card-body\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-custom-image\" data-oc-thumb=\"#thumb-custom-image\" class=\"btn btn-primary btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                // line 151
                echo ($context["button_edit"] ?? null);
                echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-custom-image\" data-oc-thumb=\"#thumb-custom-image\" class=\"btn btn-warning btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                // line 152
                echo ($context["button_clear"] ?? null);
                echo "</button>
                </div>
            </div>
        </div>
    </div>
</fieldset>

";
            }
            // line 160
            echo "                    
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 162);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 165)) : (""));
            echo "</textarea>
                          ";
            // line 166
            if (($context["master_id"] ?? null)) {
                // line 167
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                echo "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 169)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 169)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 173
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-";
            // line 177
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 177);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_tag"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 180
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
            echo "][tag]\" value=\"";
            echo (((($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["product_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180)] ?? null) : null), "tag", [], "any", false, false, false, 180)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
            echo "\" class=\"form-control\"/>
                          ";
            // line 181
            if (($context["master_id"] ?? null)) {
                // line 182
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
                echo "][tag]\" value=\"1\" id=\"input-variant-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 184)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184)] ?? null) : null), "tag", [], "any", false, false, false, 184)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 188
            echo "                        </div>
                        <div class=\"form-text\">";
            // line 189
            echo ($context["help_tag"] ?? null);
            echo "</div>
                      </div>
                    </div>
                  </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 197
        echo ($context["master_id"] ?? null);
        echo "\"/>
              <fieldset>
                <legend>";
        // line 199
        echo ($context["text_model"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 201
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 204
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 205
        if (($context["master_id"] ?? null)) {
            // line 206
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"";
            // line 208
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 208)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 212
        echo "                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">";
        // line 217
        echo ($context["entry_sku"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 220
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                      ";
        // line 221
        if (($context["master_id"] ?? null)) {
            // line 222
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sku\" class=\"form-check-input\"";
            // line 224
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sku", [], "any", false, false, false, 224)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-sku\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 228
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 229
        echo ($context["help_sku"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">";
        // line 233
        echo ($context["entry_upc"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 236
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                      ";
        // line 237
        if (($context["master_id"] ?? null)) {
            // line 238
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-oc-toggle=\"switch\" data-oc-target=\"#input-upc\" class=\"form-check-input\"";
            // line 240
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "upc", [], "any", false, false, false, 240)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-upc\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 244
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 245
        echo ($context["help_upc"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">";
        // line 249
        echo ($context["entry_ean"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 252
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                      ";
        // line 253
        if (($context["master_id"] ?? null)) {
            // line 254
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-oc-toggle=\"switch\" data-oc-target=\"#input-ean\" class=\"form-check-input\"";
            // line 256
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "ean", [], "any", false, false, false, 256)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-ean\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 260
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 261
        echo ($context["help_ean"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">";
        // line 265
        echo ($context["entry_jan"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 268
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                      ";
        // line 269
        if (($context["master_id"] ?? null)) {
            // line 270
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-oc-toggle=\"switch\" data-oc-target=\"#input-jan\" class=\"form-check-input\"";
            // line 272
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "jan", [], "any", false, false, false, 272)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-jan\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 276
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 277
        echo ($context["help_jan"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">";
        // line 281
        echo ($context["entry_isbn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 284
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                      ";
        // line 285
        if (($context["master_id"] ?? null)) {
            // line 286
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-isbn\" class=\"form-check-input\"";
            // line 288
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "isbn", [], "any", false, false, false, 288)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-isbn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 292
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 293
        echo ($context["help_isbn"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">";
        // line 297
        echo ($context["entry_mpn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 300
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                      ";
        // line 301
        if (($context["master_id"] ?? null)) {
            // line 302
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-mpn\" class=\"form-check-input\"";
            // line 304
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "mpn", [], "any", false, false, false, 304)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-mpn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 308
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 309
        echo ($context["help_mpn"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 313
        echo ($context["entry_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 316
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 317
        if (($context["master_id"] ?? null)) {
            // line 318
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 320
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 320)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 324
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 329
        echo ($context["text_price"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 331
        echo ($context["entry_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 334
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 335
        if (($context["master_id"] ?? null)) {
            // line 336
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"";
            // line 338
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 338)) {
                echo " checked";
            }
            echo "/>
                            <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 343
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 347
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">";
        // line 351
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 353
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 353);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 353) == ($context["tax_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 353);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo "                      </select>
                      ";
        // line 356
        if (($context["master_id"] ?? null)) {
            // line 357
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"";
            // line 359
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 359)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 363
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 368
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 370
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 372
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 376
        echo ($context["entry_minimum"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 379
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 380
        if (($context["master_id"] ?? null)) {
            // line 381
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
            // line 383
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 383)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 387
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 388
        echo ($context["help_minimum"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 392
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 396
        if (($context["subtract"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>
                      ";
        // line 398
        if (($context["master_id"] ?? null)) {
            // line 399
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 401
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 401)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 405
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 409
        echo ($context["entry_stock_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 414
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 414);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 414) == ($context["stock_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 414);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "                      </select>
                      ";
        // line 417
        if (($context["master_id"] ?? null)) {
            // line 418
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 420
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 420)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 424
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 425
        echo ($context["help_stock_status"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 429
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"date_available\" value=\"";
        // line 432
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" id=\"input-date-available\" class=\"form-control date\"/>
                      <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      ";
        // line 434
        if (($context["master_id"] ?? null)) {
            // line 435
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 437
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 437)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 441
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 446
        echo ($context["text_specification"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 448
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/>
                        <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"";
        // line 453
        if (($context["shipping"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>
                      ";
        // line 455
        if (($context["master_id"] ?? null)) {
            // line 456
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"";
            // line 458
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 458)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 462
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 466
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 469
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 470
        if (($context["master_id"] ?? null)) {
            // line 471
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 473
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 473)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 477
        echo "                      <input type=\"text\" name=\"width\" value=\"";
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 478
        if (($context["master_id"] ?? null)) {
            // line 479
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 481
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 481)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 485
        echo "                      <input type=\"text\" name=\"height\" value=\"";
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 486
        if (($context["master_id"] ?? null)) {
            // line 487
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 489
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 489)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 493
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 497
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 502
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 502);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 502) == ($context["length_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 502);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 504
        echo "                      </select>
                      ";
        // line 505
        if (($context["master_id"] ?? null)) {
            // line 506
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 508
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 508)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 512
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 516
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 519
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 520
        if (($context["master_id"] ?? null)) {
            // line 521
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 523
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 523)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 527
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 531
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 536
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 536);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 536) == ($context["weight_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 536);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        echo "                      </select>
                      ";
        // line 539
        if (($context["master_id"] ?? null)) {
            // line 540
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 542
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 542)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 546
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 550
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 554
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>
                      ";
        // line 556
        if (($context["master_id"] ?? null)) {
            // line 557
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"";
            // line 559
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 559)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 563
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 567
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 570
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 571
        if (($context["master_id"] ?? null)) {
            // line 572
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 574
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 574)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 578
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 585
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 588
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 589
        if (($context["master_id"] ?? null)) {
            // line 590
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
            // line 592
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 592)) {
                echo " checked";
            }
            echo "/>
                          <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 597
        echo "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 598
        echo ($context["manufacturer_id"] ?? null);
        echo "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
        // line 600
        echo ($context["help_manufacturer"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 604
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 606
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 612
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 613
            echo "                            <tr id=\"product-category-";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 613);
            echo "\">
                              <td>";
            // line 614
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 614);
            echo "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 614);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 621
        if (($context["master_id"] ?? null)) {
            // line 622
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 624
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 624)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 628
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 629
        echo ($context["help_category"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 633
        echo ($context["entry_filter"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 635
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 641
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 642
            echo "                            <tr id=\"product-filter-";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 642);
            echo "\">
                              <td>";
            // line 643
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 643);
            echo "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 643);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 647
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 650
        if (($context["master_id"] ?? null)) {
            // line 651
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"";
            // line 653
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 653)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 657
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 658
        echo ($context["help_filter"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 662
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 666
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 667
            echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 668
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 668);
            echo "\" id=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 668);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 668), ($context["product_store"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 668);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 668);
            echo "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 671
        echo "                    </div>
                    ";
        // line 672
        if (($context["master_id"] ?? null)) {
            // line 673
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 675
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 675)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 679
        echo "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 683
        echo ($context["entry_download"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 685
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 691
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 692
            echo "                            <tr id=\"product-download-";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 692);
            echo "\">
                              <td>";
            // line 693
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 693);
            echo "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 693);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 697
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 700
        if (($context["master_id"] ?? null)) {
            // line 701
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"";
            // line 703
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 703)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 707
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 708
        echo ($context["help_download"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 712
        echo ($context["entry_related"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 714
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 720
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 721
            echo "                            <tr id=\"product-related-";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 721);
            echo "\">
                              <td>";
            // line 722
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 722);
            echo "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 722);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 726
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 729
        if (($context["master_id"] ?? null)) {
            // line 730
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
            // line 732
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 732)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 736
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 737
        echo ($context["help_related"] ?? null);
        echo "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 746
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 747
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td>
                        ";
        // line 749
        if (($context["master_id"] ?? null)) {
            // line 750
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 751
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 751)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 754
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 758
        $context["attribute_row"] = 0;
        // line 759
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 760
            echo "                      <tr id=\"attribute-row-";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-start\">
                          <input type=\"text\" name=\"product_attribute[";
            // line 762
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 762);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" id=\"input-attribute-";
            echo ($context["attribute_row"] ?? null);
            echo "\" data-oc-target=\"autocomplete-attribute-";
            echo ($context["attribute_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <input type=\"hidden\" name=\"product_attribute[";
            // line 763
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 763);
            echo "\" id=\"input-attribute-id-";
            echo ($context["attribute_row"] ?? null);
            echo "\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 764
            echo ($context["attribute_row"] ?? null);
            echo "\" class=\"dropdown-menu\"></ul>
                        </td>
                        <td class=\"text-start\">
                          ";
            // line 767
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 768
                echo "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 769
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 769);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 769);
                echo "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 770
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 770);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" id=\"input-text-";
                echo ($context["attribute_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 770);
                echo "\" class=\"form-control\">";
                echo (((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 770)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 770)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 770)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 770)] ?? null) : null), "text", [], "any", false, false, false, 770)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 772
            echo "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 773
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 775
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 776
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 777
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 781
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 787
        if ( !($context["master_id"] ?? null)) {
            // line 788
            echo "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">
                  ";
            // line 791
            $context["option_row"] = 0;
            // line 792
            echo "                  ";
            $context["option_value_row"] = 0;
            // line 793
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 794
                echo "
                    <fieldset id=\"option-row-";
                // line 795
                echo ($context["option_row"] ?? null);
                echo "\">
                      <legend class=\"float-none\">";
                // line 796
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 796);
                echo " <button type=\"button\" class=\"btn btn-danger btn-sm float-end\" onclick=\"\$('#option-row-";
                echo ($context["option_row"] ?? null);
                echo "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 797
                echo ($context["option_row"] ?? null);
                echo "][product_option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 797);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 797);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 797);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 797);
                echo "\"/>

                      <div class=\"row mb-3\">
                        <label for=\"input-required-";
                // line 800
                echo ($context["option_row"] ?? null);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo ($context["entry_required"] ?? null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
                // line 802
                echo ($context["option_row"] ?? null);
                echo "][required]\" id=\"input-required-";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-select\">
                            <option value=\"1\"";
                // line 803
                if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 803)) {
                    echo " selected";
                }
                echo ">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                            <option value=\"0\"";
                // line 804
                if ( !twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 804)) {
                    echo " selected";
                }
                echo ">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                          </select>
                        </div>
                      </div>

                      ";
                // line 809
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 809) == "text")) {
                    // line 810
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 811
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_option[";
                    // line 813
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 813);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                      ";
                }
                // line 817
                echo "
                      ";
                // line 818
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 818) == "textarea")) {
                    // line 819
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 820
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_option[";
                    // line 822
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" rows=\"5\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 822);
                    echo "</textarea>
                          </div>
                        </div>
                      ";
                }
                // line 826
                echo "
                      ";
                // line 827
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 827) == "file")) {
                    // line 828
                    echo "                        <div class=\"row mb-3 d-none\">
                          <label for=\"input-option-";
                    // line 829
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[";
                    // line 830
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 830);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/></div>
                        </div>
                      ";
                }
                // line 833
                echo "
                      ";
                // line 834
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 834) == "date")) {
                    // line 835
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 836
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 839
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 839);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control date\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 845
                echo "
                      ";
                // line 846
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 846) == "time")) {
                    // line 847
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 848
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 851
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 851);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control time\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 857
                echo "
                      ";
                // line 858
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 858) == "datetime")) {
                    // line 859
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 860
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 863
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 863);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control datetime\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 869
                echo "
                      ";
                // line 870
                if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 870) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 870) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 870) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 870) == "image"))) {
                    // line 871
                    echo "                        <div class=\"table-responsive\">
                          <table class=\"table table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-start\">";
                    // line 875
                    echo ($context["entry_option_value"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 876
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                                <td class=\"text-start\">";
                    // line 877
                    echo ($context["entry_subtract"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 878
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 879
                    echo ($context["entry_points"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 880
                    echo ($context["entry_weight"] ?? null);
                    echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            <tbody id=\"option-value-";
                    // line 884
                    echo ($context["option_row"] ?? null);
                    echo "\">
                              ";
                    // line 885
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 885));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 886
                        echo "                                <tr id=\"option-value-row-";
                        echo ($context["option_value_row"] ?? null);
                        echo "\">
                                  <td class=\"text-start\">";
                        // line 887
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 887);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 888
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 888);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][product_option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 888);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 889
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 889);
                        echo " <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 889);
                        echo "\"/></td>
                                  <td class=\"text-start\">";
                        // line 890
                        if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 890)) {
                            // line 891
                            echo "                                      ";
                            echo ($context["text_yes"] ?? null);
                            echo "
                                    ";
                        } else {
                            // line 893
                            echo "                                      ";
                            echo ($context["text_no"] ?? null);
                            echo "
                                    ";
                        }
                        // line 895
                        echo "                                    <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][subtract]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 895);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 896
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 896);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 896);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 897
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 897);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 897);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 898
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 898);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 898);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 899
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 899);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 899);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 900
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 900);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 900);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 901
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 901);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 901);
                        echo "\"/></td>
                                  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 902
                        echo ($context["button_edit"] ?? null);
                        echo "\" data-option-row=\"";
                        echo ($context["option_row"] ?? null);
                        echo "\" data-option-value-row=\"";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-";
                        echo ($context["option_value_row"] ?? null);
                        echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                </tr>
                                ";
                        // line 904
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 905
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 906
                    echo "                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 910
                    echo ($context["button_option_value_add"] ?? null);
                    echo "\" data-option-row=\"";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                              </tr>
                            </tfoot>
                          </table>
                          <select id=\"product-option-values-";
                    // line 914
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"d-none\">
                            ";
                    // line 915
                    if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 915)] ?? null) : null)) {
                        // line 916
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 916)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 917
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 917);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 917);
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 919
                        echo "                            ";
                    }
                    // line 920
                    echo "                          </select>
                        </div>
                      ";
                }
                // line 923
                echo "                    </fieldset>

                    ";
                // line 925
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 926
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 927
            echo "                </div>

                <fieldset>
                  <legend class=\"float-none\">";
            // line 930
            echo ($context["text_option_add"] ?? null);
            echo "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 932
            echo ($context["entry_option"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 934
            echo ($context["entry_option"] ?? null);
            echo "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 936
            echo ($context["help_option"] ?? null);
            echo "</div>
                    </div>
                  </div>
                </fieldset>
              </div>

            ";
        } else {
            // line 943
            echo "
              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 945
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 946
                echo "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 947
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 947);
                echo "</legend>

                    ";
                // line 949
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 949) == "select")) {
                    // line 950
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 950)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 951
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 951);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 954
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 954);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 954);
                    echo "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 955
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                              ";
                    // line 956
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 956));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 957
                        echo "                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 957);
                        echo "\"";
                        if (((($__internal_compile_22 = ($context["variant"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 957)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 957) == (($__internal_compile_23 = ($context["variant"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 957)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 957);
                        echo "
                                  ";
                        // line 958
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 958)) {
                            // line 959
                            echo "                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 959);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 959);
                            echo ")
                                  ";
                        }
                        // line 960
                        echo "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 962
                    echo "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 965
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 965);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 965);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 965);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 965)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 965)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 965);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 969
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 969);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 973
                echo "
                    ";
                // line 974
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 974) == "radio")) {
                    // line 975
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 975)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 976
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 976);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 979
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 979);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 980
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 980));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 981
                        echo "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 982
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 982);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 982);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 982);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_25 = ($context["variant"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 982)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 982) == (($__internal_compile_26 = ($context["variant"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 982)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 982);
                        echo "\" class=\"form-check-label\">
                                    ";
                        // line 983
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 983)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 983);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 983);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 983)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 983);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 983);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 984
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 984);
                        echo "
                                    ";
                        // line 985
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 985)) {
                            // line 986
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 986);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 986);
                            echo ")
                                    ";
                        }
                        // line 988
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 991
                    echo "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 994
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 994)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 994);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 998
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 998);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1002
                echo "
                    ";
                // line 1003
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1003) == "checkbox")) {
                    // line 1004
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1004)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1005
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1005);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 1008
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1009
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1009));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1010
                        echo "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 1011
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1011);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1011);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_28 = ($context["variant"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1011), (($__internal_compile_29 = ($context["variant"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1011);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1011)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1011);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1011);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1011)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1011);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1011);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1012
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1012);
                        echo "
                                    ";
                        // line 1013
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1013)) {
                            // line 1014
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1014);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1014);
                            echo ")
                                    ";
                        }
                        // line 1016
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1019
                    echo "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1022
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1022);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1022);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1022);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1022)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1022)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1022);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1026
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1026);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1030
                echo "
                    ";
                // line 1031
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1031) == "text")) {
                    // line 1032
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1032)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1033
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1033);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1033);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1036
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_31 = ($context["variant"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036)] ?? null) : null)) ? ((($__internal_compile_32 = ($context["variant"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1036)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1036);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1036);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1039
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1039);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1039);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1039);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1039)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1039)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1039);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1043
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1043);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1047
                echo "
                    ";
                // line 1048
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1048) == "textarea")) {
                    // line 1049
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1049)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1050
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1050);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1050);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 1053
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1053);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_34 = ($context["variant"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["variant"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1053)));
                    echo "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1056
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1056);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1056);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1056);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1056)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1056)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1056);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1060
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1060);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1064
                echo "
                    ";
                // line 1065
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1065) == "file")) {
                    // line 1066
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1066)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1067
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1067);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1070
                    echo ($context["upload"] ?? null);
                    echo "\" id=\"button-upload-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 1071
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_37 = ($context["variant"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071)] ?? null) : null)) ? ((($__internal_compile_38 = ($context["variant"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1071)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071);
                    echo "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 1072
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1072);
                    echo "\"";
                    if ( !(($__internal_compile_39 = ($context["variant"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1072)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1073
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1073);
                    echo "\"";
                    if ( !(($__internal_compile_40 = ($context["variant"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1073)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1076
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1076);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1076);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1076);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1076)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1076)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1076);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1080
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1080);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1084
                echo "
                    ";
                // line 1085
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1085) == "date")) {
                    // line 1086
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1086)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1087
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1087);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1087);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1090
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1090);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_42 = ($context["variant"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1090)] ?? null) : null)) ? ((($__internal_compile_43 = ($context["variant"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1090)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1090)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1090);
                    echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1094
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_44 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1094)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1094);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1098
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1098);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1102
                echo "
                    ";
                // line 1103
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1103) == "time")) {
                    // line 1104
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1104)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1105
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1105);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1105);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 1107
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1107);
                    echo "\" class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1108
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1108);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_45 = ($context["variant"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1108)] ?? null) : null)) ? ((($__internal_compile_46 = ($context["variant"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1108)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1108)));
                    echo "\" class=\"form-control time\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1112
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_47 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1112)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1112);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1116
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1116);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1120
                echo "
                    ";
                // line 1121
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1121) == "datetime")) {
                    // line 1122
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1122)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1123
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1123);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1123);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1126
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1126);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_48 = ($context["variant"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1126)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["variant"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1126)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1126)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1126);
                    echo "\" class=\"form-control datetime\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1130
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1130);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1130);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1130);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_50 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1130)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1130)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1130);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1134);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1138
                echo "
                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1141
            echo "              </div>
            ";
        }
        // line 1143
        echo "
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1149
        echo ($context["entry_subscription"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1150
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1151
        echo ($context["entry_trial_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1152
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td>
                        ";
        // line 1154
        if (($context["master_id"] ?? null)) {
            // line 1155
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1156
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1156)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1159
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1163
        $context["subscription_row"] = 0;
        // line 1164
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1165
            echo "                      <tr id=\"subscription-row-";
            echo ($context["subscription_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1166
            echo ($context["subscription_row"] ?? null);
            echo "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1168
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1168);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1168) == twig_get_attribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1168))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1168);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1170
            echo "                          </select></td>
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1171
            echo ($context["subscription_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1173
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1173);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1173) == twig_get_attribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1173))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1173);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1175
            echo "                          </select></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[";
            // line 1176
            echo ($context["subscription_row"] ?? null);
            echo "][trial_price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_subscription"], "trial_price", [], "any", false, false, false, 1176);
            echo "\" placeholder=\"";
            echo ($context["entry_trial_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[";
            // line 1177
            echo ($context["subscription_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_subscription"], "price", [], "any", false, false, false, 1177);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1178
            echo ($context["subscription_row"] ?? null);
            echo "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1180
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1181
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1182
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1186
        echo ($context["button_subscription_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1198
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1199
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1200
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1201
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1202
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1203
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1204
        if (($context["master_id"] ?? null)) {
            // line 1205
            echo "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1206
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1206)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1208
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1212
        $context["discount_row"] = 0;
        // line 1213
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1214
            echo "                      <tr id=\"discount-row-";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_discount[";
            // line 1215
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1217
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1217);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1217) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1217))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1217);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1219
            echo "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1220
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1220);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1221
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1221);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1222
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1222);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1225
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1225);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1231
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1231);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1235
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1237
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1238
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1239
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1243
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-special\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-special\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1255
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1256
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1257
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1258
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1259
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-center\">";
        // line 1260
        if (($context["master_id"] ?? null)) {
            // line 1261
            echo "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-oc-toggle=\"switch\" data-oc-target=\"#product-special\" class=\"form-check-input\"";
            // line 1262
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_special", [], "any", false, false, false, 1262)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-special\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1264
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1268
        $context["special_row"] = 0;
        // line 1269
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1270
            echo "                      <tr id=\"special-row-";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_special[";
            // line 1271
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1273
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1273);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1273) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1273))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1273);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1275
            echo "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1276
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1276);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1277
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1277);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_special[";
            // line 1280
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1280);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_special[";
            // line 1286
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1286);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#special-row-";
            // line 1290
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1292
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1293
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1294
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-special\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1298
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-image\" class=\"tab-pane\">

              <fieldset>
                <legend>";
        // line 1308
        echo ($context["text_image"] ?? null);
        echo "</legend>
                <div class=\"row\">
                  <div class=\"col-sm-4 col-md-3 mb-3\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 1312
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                      <div class=\"card-body\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1314
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1315
        echo ($context["button_clear"] ?? null);
        echo "</button>

                        ";
        // line 1317
        if (($context["master_id"] ?? null)) {
            // line 1318
            echo "                          <div class=\"mx-auto w-25\">
                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1320
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1320)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                            </div>
                          </div>
                        ";
        }
        // line 1324
        echo "
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 1332
        echo ($context["text_image_additional"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1337
        echo ($context["entry_image"] ?? null);
        echo "</td>
                        <td class=\"text-start\">";
        // line 1338
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                        <td class=\"text-end\">

                          ";
        // line 1341
        if (($context["master_id"] ?? null)) {
            // line 1342
            echo "                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1343
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1343)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1346
        echo "
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1351
        $context["image_row"] = 0;
        // line 1352
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1353
            echo "                        <tr id=\"product-image-row-";
            echo ($context["image_row"] ?? null);
            echo "\">
                          <td>
                            <div class=\"card image\">
                              <img src=\"";
            // line 1356
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1356);
            echo "\" alt=\"\" title=\"\" id=\"product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1356);
            echo "\" id=\"input-product-image-";
            echo ($context["image_row"] ?? null);
            echo "\"/>
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1358
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-thumb=\"#product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1359
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-thumb=\"#product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                              </div>
                            </div>
                          </td>
                          <td class=\"text-start\"><input type=\"text\" name=\"product_image[";
            // line 1363
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1363);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1364
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1366
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1367
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1368
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1372
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1382
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1384
        echo ($context["entry_points"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1387
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1388
        if (($context["master_id"] ?? null)) {
            // line 1389
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"";
            // line 1391
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1391)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 1395
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 1396
        echo ($context["help_points"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1401
        echo ($context["text_points"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1406
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                        <td class=\"text-end\">";
        // line 1407
        echo ($context["entry_reward"] ?? null);
        echo "&nbsp;&nbsp;
                          ";
        // line 1408
        if (($context["master_id"] ?? null)) {
            // line 1409
            echo "                            <div class=\"form-check form-switch float-end\">
                              <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"";
            // line 1410
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1410)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1413
        echo "                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1417
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1418
            echo "                        <tr>
                          <td class=\"text-start\">";
            // line 1419
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1419);
            echo "</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[";
            // line 1420
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1420);
            echo "][points]\" value=\"";
            echo (((($__internal_compile_51 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1420)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_52 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1420)] ?? null) : null), "points", [], "any", false, false, false, 1420)) : (""));
            echo "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1423
        echo "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 1430
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1435
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1436
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1440
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1441
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 1442
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1442);
            echo "</td>
                        <td class=\"text-start\">
                          ";
            // line 1444
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1445
                echo "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1446
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1446);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1446);
                echo "\"/></div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1447
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1447);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1447);
                echo "]\" value=\"";
                if ((($__internal_compile_53 = (($__internal_compile_54 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1447)] ?? null) : null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1447)] ?? null) : null)) {
                    echo (($__internal_compile_55 = (($__internal_compile_56 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1447)] ?? null) : null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1447)] ?? null) : null);
                }
                echo "\" id=\"input-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1447);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1447);
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 1449
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1449);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1449);
                echo "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1450
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1453
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1462
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1463
        echo ($context["entry_layout"] ?? null);
        echo "
                        ";
        // line 1464
        if (($context["master_id"] ?? null)) {
            // line 1465
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"";
            // line 1466
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1466)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1469
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1473
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1474
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 1475
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1475);
            echo "</td>
                        <td class=\"text-start\"><select name=\"product_layout[";
            // line 1476
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1476);
            echo "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 1478
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1479
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1479);
                echo "\"";
                if (((($__internal_compile_57 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1479)] ?? null) : null) && ((($__internal_compile_58 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1479)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1479)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1479);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1481
            echo "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1484
        echo "                  </tbody>
                </table>

              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1491
        echo ($context["text_report"] ?? null);
        echo "</legend>
                <div id=\"report\">";
        // line 1492
        echo ($context["report"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1496
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 1504
        echo ($context["ckeditor"] ?? null);
        echo "'
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1511
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1516
        echo ($context["text_none"] ?? null);
        echo "'
                });

                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-manufacturer').val(item['label']);
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 1538
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 1572
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token=";
        // line 1606
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1640
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function (attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function (request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token=";
        // line 1674
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    response(\$.map(json, function (item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function (item) {
            \$('#input-attribute-' + attribute_row).val(item['label']);
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = ";
        // line 1694
        echo ($context["attribute_row"] ?? null);
        echo ";

\$('#product-attribute tr').each(function (index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function () {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td class=\"text-start\">';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1703
        echo twig_escape_filter($this->env, ($context["entry_attribute"] ?? null), "js");
        echo "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td class=\"text-start\">';
  ";
        // line 1708
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1709
            echo "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 1710
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1710);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1710), "js");
            echo "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 1711
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1711);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["entry_text"] ?? null), "js");
            echo "\" id=\"input-text-' + attribute_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1711);
            echo "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1714
        echo "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1715
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 1725
        if ( !($context["master_id"] ?? null)) {
            // line 1726
            echo "var option_row = ";
            echo ($context["option_row"] ?? null);
            echo ";

\$('#input-option').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 1731
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + ' <button type=\"button\" class=\"btn btn-danger float-end\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row mb-3\">';
        html += '    <label for=\"input-required-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1755
            echo twig_escape_filter($this->env, ($context["entry_required"] ?? null), "js");
            echo "</label>';
        html += '\t   <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t     <option value=\"1\">";
            // line 1757
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '\t     <option value=\"0\">";
            // line 1758
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
        html += '\t </select></div>';
        html += '  </div>';

        if (item['type'] == 'text') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1764
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1765
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'textarea') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1771
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 1772
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'file') {
            html += '\t<div class=\"row mb-3 d-none\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1778
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 d-none\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1779
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'date') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1785
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1786
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'time') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1792
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1793
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1799
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1800
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table id=\"option-value-' + option_row + '\" class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td class=\"text-start\">";
            // line 1809
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1810
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-start\">";
            // line 1811
            echo twig_escape_filter($this->env, ($context["entry_subtract"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1812
            echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1813
            echo twig_escape_filter($this->env, ($context["entry_points"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1814
            echo twig_escape_filter($this->env, ($context["entry_weight"] ?? null), "js");
            echo "</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1822
            echo twig_escape_filter($this->env, ($context["button_option_value_add"] ?? null), "js");
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '  <select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '  </select>';
            html += '</fieldset>';
        }

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = ";
            // line 1844
            echo ($context["option_value_row"] ?? null);
            echo ";

\$('#option').on('click', '.btn-primary', function () {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 1861
            echo twig_escape_filter($this->env, ($context["text_option_value"] ?? null), "js");
            echo "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 1865
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">";
            // line 1883
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 1884
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 1888
            echo twig_escape_filter($this->env, ($context["entry_subtract"] ?? null), "js");
            echo "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>";
            // line 1892
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '      \t <option value=\"0\">";
            // line 1893
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 1895
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '      \t <option value=\"0\" selected>";
            // line 1896
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 1903
            echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 1920
            echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
            echo "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 1925
            echo twig_escape_filter($this->env, ($context["entry_points"] ?? null), "js");
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 1942
            echo twig_escape_filter($this->env, ($context["entry_points"] ?? null), "js");
            echo "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 1947
            echo twig_escape_filter($this->env, ($context["entry_weight"] ?? null), "js");
            echo "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 1964
            echo twig_escape_filter($this->env, ($context["entry_weight"] ?? null), "js");
            echo "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '      </div>';

    html += '      <div class=\"modal-footer\">';
    html += '\t     <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 1971
            echo twig_escape_filter($this->env, ($context["button_save"] ?? null), "js");
            echo "</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">";
            echo twig_escape_filter($this->env, ($context["button_cancel"] ?? null), "js");
            echo "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function () {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td class=\"text-start\">' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td class=\"text-start\">' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 1985
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "' : '";
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1989
            echo twig_escape_filter($this->env, ($context["button_edit"] ?? null), "js");
            echo "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
";
        }
        // line 2004
        echo "
var discount_row = ";
        // line 2005
        echo ($context["discount_row"] ?? null);
        echo ";

\$('#button-discount').on('click', function () {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2010
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2011
            echo "    html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2011);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2011), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2013
        echo "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2014
        echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2015
        echo twig_escape_filter($this->env, ($context["entry_priority"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2016
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2017
        echo twig_escape_filter($this->env, ($context["entry_date_start"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2018
        echo twig_escape_filter($this->env, ($context["entry_date_end"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2019
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var special_row = ";
        // line 2027
        echo ($context["special_row"] ?? null);
        echo ";

\$('#button-special').on('click', function () {
    html = '<tr id=\"special-row-' + special_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2032
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2033
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2033);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2033), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2035
        echo "    html += '  </select><input type=\"hidden\" name=\"product_special[' + special_row + '][product_special_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2036
        echo twig_escape_filter($this->env, ($context["entry_priority"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2037
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2038
        echo twig_escape_filter($this->env, ($context["entry_date_start"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2039
        echo twig_escape_filter($this->env, ($context["entry_date_end"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#special-row-' + special_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2040
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-special tbody').append(html);

    special_row++;
});

var image_row = ";
        // line 2048
        echo ($context["image_row"] ?? null);
        echo ";

\$('#button-image').on('click', function () {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"card image\">';
    html += '    <img src=\"";
        // line 2053
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "js");
        echo "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "js");
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"card-body\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 2055
        echo twig_escape_filter($this->env, ($context["button_edit"] ?? null), "js");
        echo "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 2056
        echo twig_escape_filter($this->env, ($context["button_clear"] ?? null), "js");
        echo "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 2059
        echo twig_escape_filter($this->env, ($context["entry_sort_order"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2060
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 2068
        echo ($context["subscription_row"] ?? null);
        echo ";

\$('#button-subscription').on('click', function () {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 2073
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 2074
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 2074);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 2074), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2076
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2078
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2079
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2079);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2079), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2081
        echo "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"";
        // line 2082
        echo twig_escape_filter($this->env, ($context["entry_trial_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"";
        // line 2083
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2084
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 2092
        if (($context["master_id"] ?? null)) {
            // line 2093
            echo "// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function (e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function (i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function () {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function (e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
";
        }
        // line 2159
        echo "
\$('#report').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
";
        // line 2166
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5190 => 2166,  5181 => 2159,  5113 => 2093,  5111 => 2092,  5100 => 2084,  5096 => 2083,  5092 => 2082,  5089 => 2081,  5078 => 2079,  5074 => 2078,  5070 => 2076,  5059 => 2074,  5055 => 2073,  5047 => 2068,  5036 => 2060,  5032 => 2059,  5026 => 2056,  5022 => 2055,  5015 => 2053,  5007 => 2048,  4996 => 2040,  4992 => 2039,  4988 => 2038,  4984 => 2037,  4980 => 2036,  4977 => 2035,  4966 => 2033,  4962 => 2032,  4954 => 2027,  4943 => 2019,  4939 => 2018,  4935 => 2017,  4931 => 2016,  4927 => 2015,  4923 => 2014,  4920 => 2013,  4909 => 2011,  4905 => 2010,  4897 => 2005,  4894 => 2004,  4874 => 1989,  4865 => 1985,  4846 => 1971,  4836 => 1964,  4816 => 1947,  4808 => 1942,  4788 => 1925,  4780 => 1920,  4760 => 1903,  4750 => 1896,  4746 => 1895,  4741 => 1893,  4737 => 1892,  4730 => 1888,  4723 => 1884,  4719 => 1883,  4698 => 1865,  4691 => 1861,  4671 => 1844,  4646 => 1822,  4635 => 1814,  4631 => 1813,  4627 => 1812,  4623 => 1811,  4619 => 1810,  4615 => 1809,  4603 => 1800,  4599 => 1799,  4590 => 1793,  4586 => 1792,  4577 => 1786,  4573 => 1785,  4564 => 1779,  4560 => 1778,  4551 => 1772,  4547 => 1771,  4538 => 1765,  4534 => 1764,  4525 => 1758,  4521 => 1757,  4516 => 1755,  4489 => 1731,  4480 => 1726,  4478 => 1725,  4465 => 1715,  4462 => 1714,  4449 => 1711,  4443 => 1710,  4440 => 1709,  4436 => 1708,  4428 => 1703,  4416 => 1694,  4393 => 1674,  4356 => 1640,  4319 => 1606,  4282 => 1572,  4245 => 1538,  4220 => 1516,  4212 => 1511,  4202 => 1504,  4191 => 1496,  4184 => 1492,  4180 => 1491,  4171 => 1484,  4163 => 1481,  4148 => 1479,  4144 => 1478,  4139 => 1476,  4135 => 1475,  4132 => 1474,  4128 => 1473,  4122 => 1469,  4114 => 1466,  4111 => 1465,  4109 => 1464,  4105 => 1463,  4101 => 1462,  4090 => 1453,  4082 => 1450,  4072 => 1449,  4055 => 1447,  4049 => 1446,  4046 => 1445,  4042 => 1444,  4037 => 1442,  4034 => 1441,  4030 => 1440,  4023 => 1436,  4019 => 1435,  4011 => 1430,  4002 => 1423,  3991 => 1420,  3987 => 1419,  3984 => 1418,  3980 => 1417,  3974 => 1413,  3966 => 1410,  3963 => 1409,  3961 => 1408,  3957 => 1407,  3953 => 1406,  3945 => 1401,  3937 => 1396,  3934 => 1395,  3925 => 1391,  3921 => 1389,  3919 => 1388,  3913 => 1387,  3907 => 1384,  3902 => 1382,  3889 => 1372,  3883 => 1368,  3877 => 1367,  3875 => 1366,  3868 => 1364,  3860 => 1363,  3849 => 1359,  3841 => 1358,  3826 => 1356,  3819 => 1353,  3814 => 1352,  3812 => 1351,  3805 => 1346,  3797 => 1343,  3794 => 1342,  3792 => 1341,  3786 => 1338,  3782 => 1337,  3774 => 1332,  3764 => 1324,  3755 => 1320,  3751 => 1318,  3749 => 1317,  3744 => 1315,  3740 => 1314,  3731 => 1312,  3724 => 1308,  3711 => 1298,  3705 => 1294,  3699 => 1293,  3697 => 1292,  3690 => 1290,  3679 => 1286,  3666 => 1280,  3656 => 1277,  3648 => 1276,  3645 => 1275,  3630 => 1273,  3626 => 1272,  3622 => 1271,  3617 => 1270,  3612 => 1269,  3610 => 1268,  3604 => 1264,  3596 => 1262,  3593 => 1261,  3591 => 1260,  3587 => 1259,  3583 => 1258,  3579 => 1257,  3575 => 1256,  3571 => 1255,  3556 => 1243,  3550 => 1239,  3544 => 1238,  3542 => 1237,  3535 => 1235,  3524 => 1231,  3511 => 1225,  3501 => 1222,  3493 => 1221,  3485 => 1220,  3482 => 1219,  3467 => 1217,  3463 => 1216,  3459 => 1215,  3454 => 1214,  3449 => 1213,  3447 => 1212,  3441 => 1208,  3433 => 1206,  3430 => 1205,  3428 => 1204,  3424 => 1203,  3420 => 1202,  3416 => 1201,  3412 => 1200,  3408 => 1199,  3404 => 1198,  3389 => 1186,  3383 => 1182,  3377 => 1181,  3375 => 1180,  3368 => 1178,  3360 => 1177,  3352 => 1176,  3349 => 1175,  3334 => 1173,  3330 => 1172,  3326 => 1171,  3323 => 1170,  3308 => 1168,  3304 => 1167,  3300 => 1166,  3295 => 1165,  3290 => 1164,  3288 => 1163,  3282 => 1159,  3274 => 1156,  3271 => 1155,  3269 => 1154,  3264 => 1152,  3260 => 1151,  3256 => 1150,  3252 => 1149,  3244 => 1143,  3240 => 1141,  3232 => 1138,  3225 => 1134,  3208 => 1130,  3197 => 1126,  3189 => 1123,  3182 => 1122,  3180 => 1121,  3177 => 1120,  3170 => 1116,  3153 => 1112,  3144 => 1108,  3140 => 1107,  3133 => 1105,  3126 => 1104,  3124 => 1103,  3121 => 1102,  3114 => 1098,  3097 => 1094,  3086 => 1090,  3078 => 1087,  3071 => 1086,  3069 => 1085,  3066 => 1084,  3059 => 1080,  3042 => 1076,  3030 => 1073,  3020 => 1072,  3012 => 1071,  2998 => 1070,  2992 => 1067,  2985 => 1066,  2983 => 1065,  2980 => 1064,  2973 => 1060,  2956 => 1056,  2944 => 1053,  2936 => 1050,  2929 => 1049,  2927 => 1048,  2924 => 1047,  2917 => 1043,  2900 => 1039,  2888 => 1036,  2880 => 1033,  2873 => 1032,  2871 => 1031,  2868 => 1030,  2861 => 1026,  2844 => 1022,  2839 => 1019,  2831 => 1016,  2824 => 1014,  2822 => 1013,  2817 => 1012,  2789 => 1011,  2786 => 1010,  2782 => 1009,  2778 => 1008,  2772 => 1005,  2765 => 1004,  2763 => 1003,  2760 => 1002,  2753 => 998,  2736 => 994,  2731 => 991,  2723 => 988,  2716 => 986,  2714 => 985,  2709 => 984,  2693 => 983,  2679 => 982,  2676 => 981,  2672 => 980,  2668 => 979,  2662 => 976,  2655 => 975,  2653 => 974,  2650 => 973,  2643 => 969,  2626 => 965,  2621 => 962,  2614 => 960,  2607 => 959,  2605 => 958,  2594 => 957,  2590 => 956,  2586 => 955,  2580 => 954,  2574 => 951,  2567 => 950,  2565 => 949,  2560 => 947,  2557 => 946,  2553 => 945,  2549 => 943,  2539 => 936,  2534 => 934,  2529 => 932,  2524 => 930,  2519 => 927,  2513 => 926,  2511 => 925,  2507 => 923,  2502 => 920,  2499 => 919,  2488 => 917,  2483 => 916,  2481 => 915,  2477 => 914,  2468 => 910,  2462 => 906,  2456 => 905,  2454 => 904,  2441 => 902,  2427 => 901,  2422 => 900,  2408 => 899,  2403 => 898,  2389 => 897,  2384 => 896,  2375 => 895,  2369 => 893,  2363 => 891,  2361 => 890,  2351 => 889,  2337 => 888,  2333 => 887,  2328 => 886,  2324 => 885,  2320 => 884,  2313 => 880,  2309 => 879,  2305 => 878,  2301 => 877,  2297 => 876,  2293 => 875,  2287 => 871,  2285 => 870,  2282 => 869,  2267 => 863,  2259 => 860,  2256 => 859,  2254 => 858,  2251 => 857,  2236 => 851,  2228 => 848,  2225 => 847,  2223 => 846,  2220 => 845,  2205 => 839,  2197 => 836,  2194 => 835,  2192 => 834,  2189 => 833,  2177 => 830,  2171 => 829,  2168 => 828,  2166 => 827,  2163 => 826,  2150 => 822,  2143 => 820,  2140 => 819,  2138 => 818,  2135 => 817,  2122 => 813,  2115 => 811,  2112 => 810,  2110 => 809,  2098 => 804,  2090 => 803,  2084 => 802,  2077 => 800,  2057 => 797,  2051 => 796,  2047 => 795,  2044 => 794,  2039 => 793,  2036 => 792,  2034 => 791,  2029 => 788,  2027 => 787,  2018 => 781,  2012 => 777,  2006 => 776,  2004 => 775,  1997 => 773,  1994 => 772,  1975 => 770,  1969 => 769,  1966 => 768,  1962 => 767,  1956 => 764,  1948 => 763,  1936 => 762,  1930 => 760,  1925 => 759,  1923 => 758,  1917 => 754,  1909 => 751,  1906 => 750,  1904 => 749,  1899 => 747,  1895 => 746,  1883 => 737,  1880 => 736,  1871 => 732,  1867 => 730,  1865 => 729,  1860 => 726,  1848 => 722,  1843 => 721,  1839 => 720,  1830 => 714,  1825 => 712,  1818 => 708,  1815 => 707,  1806 => 703,  1802 => 701,  1800 => 700,  1795 => 697,  1783 => 693,  1778 => 692,  1774 => 691,  1765 => 685,  1760 => 683,  1754 => 679,  1745 => 675,  1741 => 673,  1739 => 672,  1736 => 671,  1717 => 668,  1714 => 667,  1710 => 666,  1703 => 662,  1696 => 658,  1693 => 657,  1684 => 653,  1680 => 651,  1678 => 650,  1673 => 647,  1661 => 643,  1656 => 642,  1652 => 641,  1643 => 635,  1638 => 633,  1631 => 629,  1628 => 628,  1619 => 624,  1615 => 622,  1613 => 621,  1608 => 618,  1596 => 614,  1591 => 613,  1587 => 612,  1578 => 606,  1573 => 604,  1566 => 600,  1561 => 598,  1558 => 597,  1548 => 592,  1544 => 590,  1542 => 589,  1536 => 588,  1530 => 585,  1521 => 578,  1512 => 574,  1508 => 572,  1506 => 571,  1500 => 570,  1494 => 567,  1488 => 563,  1479 => 559,  1475 => 557,  1473 => 556,  1466 => 554,  1459 => 550,  1453 => 546,  1444 => 542,  1440 => 540,  1438 => 539,  1435 => 538,  1420 => 536,  1416 => 535,  1409 => 531,  1403 => 527,  1394 => 523,  1390 => 521,  1388 => 520,  1382 => 519,  1376 => 516,  1370 => 512,  1361 => 508,  1357 => 506,  1355 => 505,  1352 => 504,  1337 => 502,  1333 => 501,  1326 => 497,  1320 => 493,  1311 => 489,  1307 => 487,  1305 => 486,  1298 => 485,  1289 => 481,  1285 => 479,  1283 => 478,  1276 => 477,  1267 => 473,  1263 => 471,  1261 => 470,  1255 => 469,  1249 => 466,  1243 => 462,  1234 => 458,  1230 => 456,  1228 => 455,  1221 => 453,  1213 => 448,  1208 => 446,  1201 => 441,  1192 => 437,  1188 => 435,  1186 => 434,  1179 => 432,  1173 => 429,  1166 => 425,  1163 => 424,  1154 => 420,  1150 => 418,  1148 => 417,  1145 => 416,  1130 => 414,  1126 => 413,  1119 => 409,  1113 => 405,  1104 => 401,  1100 => 399,  1098 => 398,  1091 => 396,  1084 => 392,  1077 => 388,  1074 => 387,  1065 => 383,  1061 => 381,  1059 => 380,  1053 => 379,  1047 => 376,  1038 => 372,  1033 => 370,  1028 => 368,  1021 => 363,  1012 => 359,  1008 => 357,  1006 => 356,  1003 => 355,  988 => 353,  984 => 352,  980 => 351,  973 => 347,  967 => 343,  957 => 338,  953 => 336,  951 => 335,  945 => 334,  939 => 331,  934 => 329,  927 => 324,  918 => 320,  914 => 318,  912 => 317,  906 => 316,  900 => 313,  893 => 309,  890 => 308,  881 => 304,  877 => 302,  875 => 301,  869 => 300,  863 => 297,  856 => 293,  853 => 292,  844 => 288,  840 => 286,  838 => 285,  832 => 284,  826 => 281,  819 => 277,  816 => 276,  807 => 272,  803 => 270,  801 => 269,  795 => 268,  789 => 265,  782 => 261,  779 => 260,  770 => 256,  766 => 254,  764 => 253,  758 => 252,  752 => 249,  745 => 245,  742 => 244,  733 => 240,  729 => 238,  727 => 237,  721 => 236,  715 => 233,  708 => 229,  705 => 228,  696 => 224,  692 => 222,  690 => 221,  684 => 220,  678 => 217,  671 => 212,  662 => 208,  658 => 206,  656 => 205,  650 => 204,  644 => 201,  639 => 199,  634 => 197,  629 => 194,  610 => 189,  607 => 188,  590 => 184,  586 => 182,  584 => 181,  574 => 180,  566 => 177,  560 => 173,  543 => 169,  539 => 167,  537 => 166,  527 => 165,  519 => 162,  515 => 160,  504 => 152,  500 => 151,  495 => 149,  489 => 148,  482 => 144,  469 => 134,  462 => 130,  449 => 122,  443 => 119,  437 => 116,  431 => 112,  414 => 108,  410 => 106,  408 => 105,  398 => 104,  390 => 101,  383 => 97,  380 => 96,  363 => 92,  359 => 90,  357 => 89,  347 => 88,  339 => 85,  333 => 81,  316 => 77,  312 => 75,  310 => 74,  297 => 72,  288 => 68,  281 => 64,  278 => 63,  271 => 59,  259 => 58,  255 => 56,  253 => 55,  243 => 54,  235 => 51,  225 => 49,  208 => 48,  204 => 46,  177 => 44,  160 => 43,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  98 => 23,  93 => 21,  90 => 20,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/product_form.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/catalog/product_form.twig");
    }
}
